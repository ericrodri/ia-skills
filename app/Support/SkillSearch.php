<?php

namespace App\Support;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Búsqueda de skills, compartida por el listado global (/skills) y por el
 * buscador dentro de cada profesión (/profesiones/{slug}).
 *
 * Vive aquí y no en el controlador porque la consulta no es trivial: se apoya
 * en la columna generada `search_vector` (tsvector con pesos por campo) y en
 * `unaccent`, ambas exclusivas de PostgreSQL. Duplicarla habría significado
 * mantener dos veces el mismo SQL, incluido el camino de respaldo para SQLite.
 */
class SkillSearch
{
    /**
     * Palabras que la gente escribe y que el catálogo dice de otra forma. El
     * índice no reduce las palabras a su raíz (configuración 'simple'), así
     * que «medicina» no encontraba nada aunque haya decenas de fichas de salud.
     * Salen de las búsquedas reales sin resultados (panel de analítica).
     * Claves y valores en minúsculas y sin tildes; una sola palabra cada uno.
     */
    private const SYNONYMS = [
        'medicina' => ['salud', 'medico', 'clinico', 'sanitario'],
        'medico' => ['salud', 'medicina', 'clinico'],
        'sanidad' => ['salud', 'sanitario'],
        'enfermeria' => ['enfermera', 'enfermero', 'salud', 'paciente'],
        'vectorizar' => ['vector', 'vectorial', 'svg'],
        'vector' => ['vectorizar', 'vectorial', 'svg'],
        'foto' => ['fotografia', 'imagen'],
        'fotos' => ['foto', 'fotografia', 'imagen'],
        'imagen' => ['foto', 'fotografia'],
        'imagenes' => ['imagen', 'foto'],
        'cara' => ['rostro'],
        'rostro' => ['cara'],
        'logo' => ['logotipo'],
        'logotipo' => ['logo'],
        'redaccion' => ['redactar', 'escribir', 'textos', 'copywriting'],
        'redactar' => ['redaccion', 'escribir', 'textos'],
        'qa' => ['testing', 'pruebas', 'tests'],
        'testing' => ['qa', 'pruebas', 'tests'],
        'seguridad' => ['ciberseguridad'],
        'ciberseguridad' => ['seguridad'],
        'abogado' => ['legal', 'juridico', 'derecho'],
        'legal' => ['juridico', 'abogado', 'derecho'],
        'cv' => ['curriculum'],
        'curriculum' => ['cv'],
        'ventas' => ['comercial', 'vender'],
        'profesor' => ['docente', 'educacion', 'clase'],
        'docente' => ['profesor', 'educacion'],
    ];

    /** Palabras que no aportan en la búsqueda amplia (anyWord). */
    private const STOPWORDS = ['de', 'del', 'la', 'las', 'el', 'los', 'un', 'una', 'y', 'o', 'en', 'con', 'para', 'por', 'que', 'mi', 'tu', 'al'];

    /**
     * Filtra $query por $term y, cuando se puede, la ordena por relevancia.
     *
     * @param  Builder|Relation  $query
     * @param  bool  $matchProfessionName  Amplía la búsqueda al nombre de la
     *         profesión. Solo tiene sentido en el listado global: dentro de una
     *         profesión la consulta ya está acotada a ella.
     * @return bool  true si se aplicó ordenación por relevancia, y por tanto el
     *         llamante NO debe aplicar su propio criterio de orden. En SQLite
     *         devuelve false: el respaldo con LIKE no sabe puntuar relevancia,
     *         así que se mantiene el orden normal.
     */
    public static function apply($query, ?string $term, bool $matchProfessionName = false): bool
    {
        $term = trim((string) $term);
        $words = array_values(array_filter(preg_split('/\s+/', $term)));

        if ($words === []) {
            return false;
        }

        // Sinónimos de la búsqueda entera, para el nombre de la profesión:
        // «medicina» también encuentra la profesión Salud.
        $professionTerms = [$term, ...self::synonyms($term)];

        // Los tests usan SQLite, donde no existe search_vector: se degrada a un
        // LIKE sobre título y descripción, sin ranking. Cada palabra debe
        // aparecer, ella o alguno de sus sinónimos.
        if (DB::connection()->getDriverName() !== 'pgsql') {
            foreach ($words as $word) {
                $query->where(function ($q) use ($word) {
                    foreach ([$word, ...self::synonyms($word)] as $variant) {
                        $like = '%'.$variant.'%';
                        $q->orWhere('title', 'like', $like)->orWhere('description', 'like', $like);
                    }
                });
            }

            return false;
        }

        // El último término va como prefijo (`:*`) para que la búsqueda
        // responda mientras se escribe; los anteriores, como palabras completas.
        // Cada palabra se amplía con sus sinónimos (OR) y las palabras se
        // combinan entre sí con AND.
        $lastWord = array_pop($words);
        $parts = [];
        $bindings = [];

        foreach ($words as $word) {
            [$sql, $wordBindings] = self::wordQuery($word, prefix: false);
            $parts[] = $sql;
            array_push($bindings, ...$wordBindings);
        }

        [$sql, $wordBindings] = self::wordQuery($lastWord, prefix: true);
        $parts[] = $sql;
        array_push($bindings, ...$wordBindings);

        $tsQuery = implode(' && ', $parts);

        $query->where(function ($q) use ($tsQuery, $bindings, $professionTerms, $matchProfessionName) {
            $q->whereRaw("search_vector @@ ($tsQuery)", $bindings);

            if ($matchProfessionName) {
                $q->orWhereHas('profession', function ($pq) use ($professionTerms) {
                    $pq->where(function ($names) use ($professionTerms) {
                        foreach ($professionTerms as $name) {
                            $names->orWhereRaw('unaccent(name) ILIKE unaccent(?)', ['%'.$name.'%']);
                        }
                    });
                });
            }
        });

        $query->orderByRaw("ts_rank(search_vector, ($tsQuery)) DESC", $bindings)
            ->orderByDesc('vote_score');

        return true;
    }

    /**
     * Búsqueda amplia para cuando la normal no encuentra nada: basta con que
     * coincida una de las palabras (o un sinónimo). Sirve para sugerir algo
     * en vez de una página vacía. Devuelve false si no hay palabras útiles.
     *
     * @param  Builder|Relation  $query
     */
    public static function anyWord($query, ?string $term): bool
    {
        $words = array_values(array_filter(
            preg_split('/\s+/', self::normalize((string) $term)),
            fn ($w) => mb_strlen($w) >= 3 && ! in_array($w, self::STOPWORDS, true),
        ));

        if ($words === []) {
            return false;
        }

        if (DB::connection()->getDriverName() !== 'pgsql') {
            $query->where(function ($q) use ($words) {
                foreach ($words as $word) {
                    foreach ([$word, ...self::synonyms($word)] as $variant) {
                        $like = '%'.$variant.'%';
                        $q->orWhere('title', 'like', $like)->orWhere('description', 'like', $like);
                    }
                }
            });

            return true;
        }

        $parts = [];
        $bindings = [];

        foreach ($words as $word) {
            [$sql, $wordBindings] = self::wordQuery($word, prefix: true);
            $parts[] = $sql;
            array_push($bindings, ...$wordBindings);
        }

        $tsQuery = implode(' || ', $parts);

        $query->whereRaw("search_vector @@ ($tsQuery)", $bindings)
            ->orderByRaw("ts_rank(search_vector, ($tsQuery)) DESC", $bindings)
            ->orderByDesc('views_count');

        return true;
    }

    /**
     * Sinónimos de una palabra (o de una búsqueda entera de una palabra).
     *
     * @return list<string>
     */
    public static function synonyms(string $word): array
    {
        return self::SYNONYMS[self::normalize($word)] ?? [];
    }

    /** Minúsculas, sin tildes y con los espacios colapsados. */
    public static function normalize(string $text): string
    {
        return trim((string) preg_replace('/\s+/', ' ', Str::lower(Str::ascii($text))));
    }

    /**
     * tsquery de una palabra con sus sinónimos: (palabra || sinónimo…).
     *
     * @return array{0: string, 1: list<string>}
     */
    private static function wordQuery(string $word, bool $prefix): array
    {
        // Con una sola letra como prefijo («c++» se queda en «c») saldría
        // medio catálogo: se busca la palabra exacta.
        $clean = $prefix ? self::tsWord($word) : '';
        $clean = mb_strlen($clean) >= 2 ? $clean : '';
        $parts = [$clean !== ''
            ? "to_tsquery('simple', unaccent(?) || ':*')"
            : "plainto_tsquery('simple', unaccent(?))"];
        $bindings = [$clean !== '' ? $clean : $word];

        foreach (self::synonyms($word) as $synonym) {
            $parts[] = "plainto_tsquery('simple', unaccent(?))";
            $bindings[] = $synonym;
        }

        return [count($parts) === 1 ? $parts[0] : '('.implode(' || ', $parts).')', $bindings];
    }

    /**
     * to_tsquery interpreta & | ! ( ) : como operadores: una búsqueda como
     * «c++» o «a:b» rompería la consulta. Se quedan letras, números y guiones
     * interiores; si queda menos de dos letras, la palabra va sin prefijo
     * (plainto_tsquery acepta cualquier texto).
     */
    private static function tsWord(string $word): string
    {
        return trim((string) preg_replace('/[^\p{L}\p{N}\-]+/u', '', $word), '-');
    }
}
