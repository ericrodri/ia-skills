<?php

namespace App\Support;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\DB;

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

        if ($term === '') {
            return false;
        }

        // Los tests usan SQLite, donde no existe search_vector: se degrada a un
        // LIKE sobre título y descripción, sin ranking.
        if (DB::connection()->getDriverName() !== 'pgsql') {
            $like = '%'.$term.'%';

            $query->where(fn ($q) => $q->where('title', 'like', $like)
                ->orWhere('description', 'like', $like));

            return false;
        }

        $terms = array_values(array_filter(preg_split('/\s+/', $term)));

        if (empty($terms)) {
            return false;
        }

        // El último término va como prefijo (`:*`) para que la búsqueda
        // responda mientras se escribe; los anteriores, como palabras completas.
        $lastTerm = array_pop($terms);
        $parts = [];
        $bindings = [];

        foreach ($terms as $word) {
            $parts[] = "plainto_tsquery('simple', unaccent(?))";
            $bindings[] = $word;
        }

        $parts[] = "to_tsquery('simple', unaccent(?) || ':*')";
        $bindings[] = $lastTerm;

        $tsQuery = implode(' && ', $parts);

        $query->where(function ($q) use ($tsQuery, $bindings, $term, $matchProfessionName) {
            $q->whereRaw("search_vector @@ ($tsQuery)", $bindings);

            if ($matchProfessionName) {
                $q->orWhereHas('profession', fn ($pq) => $pq->whereRaw(
                    'unaccent(name) ILIKE unaccent(?)', ['%'.$term.'%']
                ));
            }
        });

        $query->orderByRaw("ts_rank(search_vector, ($tsQuery)) DESC", $bindings)
            ->orderByDesc('vote_score');

        return true;
    }
}
