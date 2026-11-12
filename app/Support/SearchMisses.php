<?php

namespace App\Support;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Búsquedas del catálogo (/skills?q=) que no encuentran ninguna ficha. Es la
 * lista de lo que la gente viene a buscar y no tenemos: qué fichas escribir
 * y qué sinónimos faltan en App\Support\SkillSearch.
 *
 * Mismo criterio que las visitas (Analytics): fuera bots y admins. Además,
 * solo cuentan las búsquedas hechas desde la propia página (cabecera de
 * Inertia), que exigen JavaScript y un humano escribiendo. Solo el texto
 * buscado y un contador diario, sin IP ni datos de nadie.
 */
class SearchMisses
{
    public static function record(Request $request, string $term): void
    {
        $term = Str::limit(SkillSearch::normalize($term), 80, '');

        if (mb_strlen($term) < 3 || ! $request->header('X-Inertia')) {
            return;
        }

        if (Analytics::isBot((string) $request->userAgent()) || $request->user()?->is_admin) {
            return;
        }

        try {
            DB::table('search_misses')->upsert(
                [['day' => now()->toDateString(), 'term' => $term, 'hits' => 1]],
                ['day', 'term'],
                ['hits' => DB::raw('search_misses.hits + 1')],
            );
        } catch (\Throwable $e) {
            // Una métrica nunca debe tumbar una respuesta.
            report($e);
        }
    }

    /**
     * Las búsquedas sin resultados más repetidas del periodo. La búsqueda
     * responde mientras se escribe, así que «miniplay» y «miniplaytech» son
     * la misma persona tecleando: se queda solo el texto más largo.
     *
     * @return list<array{label: string, hits: int}>
     */
    public static function report(string $from, string $to, int $limit = 20): array
    {
        $rows = DB::table('search_misses')
            ->whereBetween('day', [$from, $to])
            ->selectRaw('term, sum(hits) as hits')
            ->groupBy('term')
            ->orderByDesc('hits')
            ->limit(500)
            ->get()
            ->map(fn ($r) => ['label' => (string) $r->term, 'hits' => (int) $r->hits])
            ->all();

        $terms = array_column($rows, 'label');

        $kept = array_filter($rows, function ($row) use ($terms) {
            foreach ($terms as $other) {
                if ($other !== $row['label'] && str_starts_with($other, $row['label'])) {
                    return false;
                }
            }

            return true;
        });

        return array_slice(array_values($kept), 0, $limit);
    }
}
