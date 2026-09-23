<?php

namespace App\Support;

use Illuminate\Support\Str;
use InvalidArgumentException;

/**
 * Convierte una exportación de Search Console en una lista priorizada de
 * trabajo: qué snippet reescribir, qué página reforzar y qué búsquedas no
 * tienen todavía contenido propio (candidatas a guía nueva).
 *
 * Entrada: el CSV de "Consultas" que exporta Search Console desde
 * Rendimiento → Exportar (en español o en inglés). Salida: filas con la
 * acción recomendada, la página del sitio que mejor responde a la consulta y
 * los clics que se ganarían con un CTR normal para su posición.
 */
class SearchConsoleOpportunities
{
    public const ACTION_SNIPPET = 'Reescribir title/description';

    public const ACTION_PUSH = 'Reforzar la página';

    public const ACTION_NEW = 'Crear contenido nuevo';

    /**
     * CTR orientativo por posición media (curva agregada de estudios públicos
     * de CTR orgánico). No hace falta precisión: sirve para ordenar.
     */
    private const EXPECTED_CTR = [
        1 => 0.28, 2 => 0.15, 3 => 0.10, 4 => 0.07, 5 => 0.05,
        6 => 0.04, 7 => 0.03, 8 => 0.025, 9 => 0.02, 10 => 0.018,
    ];

    private const HEADERS = [
        'query' => ['consultas principales', 'consulta', 'top queries', 'query', 'queries'],
        'clicks' => ['clics', 'clicks'],
        'impressions' => ['impresiones', 'impressions'],
        'ctr' => ['ctr'],
        'position' => ['posicion', 'position'],
    ];

    private const STOPWORDS = [
        'de', 'la', 'el', 'en', 'y', 'a', 'los', 'las', 'del', 'para', 'con', 'por', 'un', 'una', 'que',
        'como', 'es', 'se', 'al', 'lo', 'mi', 'tu', 'su', 'o', 'the', 'for', 'to', 'of', 'and', 'in', 'how',
    ];

    /** Parte de la consulta que debe coincidir con una página para darla por cubierta. */
    private const MATCH_THRESHOLD = 0.5;

    /**
     * @return array<int, array{query: string, clicks: int, impressions: int, ctr: float, position: float}>
     */
    public static function parse(string $csv): array
    {
        $csv = preg_replace('/^\xEF\xBB\xBF/', '', $csv);
        $lines = array_values(array_filter(preg_split('/\r\n|\n|\r/', $csv), fn ($l) => trim($l) !== ''));

        if ($lines === []) {
            return [];
        }

        $header = array_map(fn ($h) => self::normalize($h), str_getcsv(array_shift($lines)));
        $columns = [];

        foreach (self::HEADERS as $key => $aliases) {
            $index = collect($header)->search(fn ($h) => in_array($h, $aliases, true));

            if ($index === false) {
                throw new InvalidArgumentException("Falta la columna «{$key}» en el CSV. Exporta la pestaña Consultas desde Search Console.");
            }

            $columns[$key] = $index;
        }

        return collect($lines)
            ->map(fn (string $line) => str_getcsv($line))
            ->filter(fn (array $row) => isset($row[$columns['query']]) && trim($row[$columns['query']]) !== '')
            ->map(fn (array $row) => [
                'query' => trim($row[$columns['query']]),
                'clicks' => self::integer($row[$columns['clicks']] ?? '0'),
                'impressions' => self::integer($row[$columns['impressions']] ?? '0'),
                'ctr' => self::number($row[$columns['ctr']] ?? '0') / 100,
                'position' => self::number($row[$columns['position']] ?? '0'),
            ])
            ->values()
            ->all();
    }

    /**
     * @param  array<int, array{query: string, clicks: int, impressions: int, ctr: float, position: float}>  $rows
     * @param  array<int, array{title: string, url: string, text: string}>|null  $pages  Páginas candidatas; null = las del sitio.
     * @return array<int, array{query: string, impressions: int, ctr: float, position: float, action: string, page: ?string, page_title: ?string, potential_clicks: int}>
     */
    public static function analyze(array $rows, int $minImpressions = 50, ?array $pages = null): array
    {
        $pages ??= self::sitePages();
        $indexed = collect($pages)->map(fn (array $p) => $p + ['tokens' => self::tokens($p['title'].' '.$p['text'])])->all();

        return collect($rows)
            ->filter(fn (array $r) => $r['impressions'] >= $minImpressions)
            ->map(function (array $r) use ($indexed) {
                $match = self::bestMatch($r['query'], $indexed);
                $expected = self::expectedCtr($r['position']);

                [$action, $target] = match (true) {
                    $match === null => [self::ACTION_NEW, self::expectedCtr(5)],
                    $r['position'] <= 5 && $r['ctr'] < $expected * 0.6 => [self::ACTION_SNIPPET, $expected],
                    $r['position'] > 5 && $r['position'] <= 20 => [self::ACTION_PUSH, self::expectedCtr(3)],
                    default => [null, 0],
                };

                if ($action === null) {
                    return null;
                }

                return [
                    'query' => $r['query'],
                    'impressions' => $r['impressions'],
                    'ctr' => round($r['ctr'], 4),
                    'position' => round($r['position'], 1),
                    'action' => $action,
                    'page' => $match['url'] ?? null,
                    'page_title' => $match['title'] ?? null,
                    'potential_clicks' => (int) max(0, round($r['impressions'] * ($target - $r['ctr']))),
                ];
            })
            ->filter()
            ->sortByDesc('potential_clicks')
            ->values()
            ->all();
    }

    public static function expectedCtr(float $position): float
    {
        $rounded = max(1, (int) round($position));

        return self::EXPECTED_CTR[$rounded] ?? ($rounded <= 20 ? 0.01 : 0.005);
    }

    /**
     * Guías, profesiones, landings de tarea y colecciones.
     *
     * @return array<int, array{title: string, url: string, text: string}>
     */
    public static function sitePages(): array
    {
        $pages = [];

        foreach (Guides::all() as $guide) {
            $pages[] = [
                'title' => $guide['title'],
                'url' => route('guides.show', ['slug' => $guide['slug']]),
                'text' => ($guide['seoTitle'] ?? '').' '.$guide['description'].' '.($guide['about'] ?? ''),
            ];
        }

        foreach (SiteData::professions() as $profession) {
            $pages[] = [
                'title' => "Prompts de IA para {$profession['name']}",
                'url' => route('professions.show', ['profession' => $profession['slug']]),
                'text' => "prompts ia inteligencia artificial {$profession['name']} {$profession['slug']}",
            ];

            foreach (ProfessionTasks::for($profession['slug']) as $task) {
                $pages[] = [
                    'title' => $task['heading'],
                    'url' => route('professions.task', ['profession' => $profession['slug'], 'task' => $task['slug']]),
                    'text' => $profession['name'].' '.implode(' ', $task['terms']).' prompts ia',
                ];
            }
        }

        foreach (Collections::all() as $collection) {
            $pages[] = [
                'title' => $collection['title'],
                'url' => route('collections.show', ['slug' => $collection['slug']]),
                'text' => $collection['description'],
            ];
        }

        return $pages;
    }

    /**
     * @param  array<int, array{title: string, url: string, tokens: array<int, string>}>  $pages
     * @return array{title: string, url: string}|null
     */
    private static function bestMatch(string $query, array $pages): ?array
    {
        $queryTokens = self::tokens($query);

        if ($queryTokens === []) {
            return null;
        }

        $best = null;
        $bestScore = 0.0;

        foreach ($pages as $page) {
            $hits = count(array_filter($queryTokens, fn ($t) => self::containsToken($page['tokens'], $t)));
            $score = $hits / count($queryTokens);

            if ($score > $bestScore) {
                $bestScore = $score;
                $best = $page;
            }
        }

        return $bestScore >= self::MATCH_THRESHOLD ? ['title' => $best['title'], 'url' => $best['url']] : null;
    }

    /**
     * Coincidencia por prefijo de 5 letras: "prompts" ≈ "prompt",
     * "automatizar" ≈ "automatización". Un stemmer de verdad sería mejor,
     * pero esto basta para decidir si una consulta ya tiene página.
     *
     * @param  array<int, string>  $tokens
     */
    private static function containsToken(array $tokens, string $token): bool
    {
        $stem = substr($token, 0, 5);

        foreach ($tokens as $candidate) {
            if ($candidate === $token || (strlen($stem) >= 4 && str_starts_with($candidate, $stem))) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return array<int, string>
     */
    private static function tokens(string $text): array
    {
        $words = preg_split('/[^a-z0-9]+/', self::normalize($text), -1, PREG_SPLIT_NO_EMPTY);

        return array_values(array_unique(array_filter(
            $words,
            fn ($w) => strlen($w) > 1 && ! in_array($w, self::STOPWORDS, true)
        )));
    }

    private static function normalize(string $value): string
    {
        return Str::lower(trim(Str::ascii($value)));
    }

    /**
     * Clics e impresiones son enteros: se descarta cualquier separador de
     * miles ("1.234", "1,234" o "1 234" → 1234).
     */
    private static function integer(string $value): int
    {
        return (int) preg_replace('/\D/', '', $value);
    }

    /**
     * "3,5 %", "7,3", "0.12" → float. Search Console exporta con el formato
     * numérico del idioma de la cuenta.
     */
    private static function number(string $value): float
    {
        $value = trim(str_replace(['%', ' ', "\u{00A0}"], '', $value));

        if (str_contains($value, ',') && str_contains($value, '.')) {
            $value = str_replace('.', '', $value);
        }

        return (float) str_replace(',', '.', $value);
    }
}
