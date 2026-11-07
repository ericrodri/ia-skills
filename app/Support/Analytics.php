<?php

namespace App\Support;

use App\Models\PageView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Analítica propia, sin cookies ni terceros.
 *
 * El navegador avisa de cada página vista con un POST a /hola: desde app.js
 * en las páginas Inertia y con un script en línea en layouts/site (guías).
 * Así solo cuentan los visitantes que ejecutan JavaScript, lo que deja fuera
 * a la mayoría de los bots, que en los registros de nginx inflan las visitas.
 *
 * Para contar visitantes únicos se guarda un resumen de IP y navegador con
 * una sal aleatoria que cambia cada día y se borra a los dos días: pasado
 * ese tiempo no hay forma de saber a quién corresponde. No se guarda la IP.
 */
class Analytics
{
    private const BOT_AGENTS = '/bot|crawl|spider|slurp|headless|lighthouse|pagespeed|preview|facebookexternalhit|python|curl|wget|httpclient|okhttp|java\/|go-http|scrapy|ahrefs|semrush|bytespider|petal|yandex|gptbot|chatgpt-user|oai-searchbot|claudebot|claude-user|claude-searchbot|anthropic-ai|perplexity|monitor|uptime|MSIE|Trident\/|BonEcho|Arora|FunWebProducts/i';

    /** Rutas que no son contenido: no se cuentan. */
    private const IGNORED_PATHS = '#^/(admin|hola|build|storage|api|login|logout|register|forgot-password|reset-password|verify-email|confirm-password|newsletter)(/|$)|/skill\.md$#';

    /** Webs de procedencia agrupadas con un nombre corto. */
    private const SOURCES = [
        '/(^|\.)google\./' => 'google',
        '/(^|\.)bing\.com$/' => 'bing',
        '/(^|\.)duckduckgo\.com$/' => 'duckduckgo',
        '/(^|\.)(chatgpt\.com|openai\.com)$/' => 'chatgpt',
        '/(^|\.)perplexity\.ai$/' => 'perplexity',
        '/(^|\.)(claude\.ai)$/' => 'claude',
        '/(^|\.)gemini\.google\.com$/' => 'gemini',
        '/(^|\.)(facebook\.com|fb\.com)$/' => 'facebook',
        '/(^|\.)instagram\.com$/' => 'instagram',
        '/(^|\.)(t\.co|x\.com|twitter\.com)$/' => 'x',
        '/(^|\.)linkedin\.com$|^lnkd\.in$/' => 'linkedin',
        '/(^|\.)reddit\.com$/' => 'reddit',
        '/(^|\.)youtube\.com$/' => 'youtube',
    ];

    /**
     * Registra una página vista. Devuelve false si se descarta (bot, admin,
     * ruta ignorada o datos no válidos).
     */
    public static function record(Request $request): bool
    {
        $agent = (string) $request->userAgent();

        if ($agent === '' || preg_match(self::BOT_AGENTS, $agent) || $request->user()?->is_admin) {
            return false;
        }

        $url = (string) $request->input('p', '');

        if (! str_starts_with($url, '/') || str_starts_with($url, '//') || strlen($url) > 2000) {
            return false;
        }

        $path = (string) (parse_url($url, PHP_URL_PATH) ?? '/');
        $path = $path === '/' ? '/' : rtrim($path, '/');

        if ($path === '' || preg_match(self::IGNORED_PATHS, $path)) {
            return false;
        }

        parse_str((string) (parse_url($url, PHP_URL_QUERY) ?? ''), $query);
        $utm = is_string($query['utm_source'] ?? null) ? Str::limit(Str::lower($query['utm_source']), 60, '') : null;

        PageView::create([
            'day' => now()->toDateString(),
            'path' => Str::limit(rawurldecode($path), 255, ''),
            'referrer' => self::source((string) $request->input('r', ''), $request->getHost()),
            'utm_source' => $utm ?: null,
            'visitor' => self::visitor($request),
            'device' => self::device($agent),
        ]);

        return true;
    }

    /**
     * Nombre corto de la web de procedencia, o null si es directa o interna.
     */
    public static function source(string $referrer, string $ownHost): ?string
    {
        $host = Str::lower((string) parse_url($referrer, PHP_URL_HOST));
        $host = preg_replace('/^(www|m)\./', '', $host);
        $own = preg_replace('/^www\./', '', Str::lower($ownHost));

        if ($host === '' || $host === $own || str_ends_with($host, '.'.$own)) {
            return null;
        }

        foreach (self::SOURCES as $pattern => $name) {
            if (preg_match($pattern, $host)) {
                return $name;
            }
        }

        return Str::limit($host, 120, '');
    }

    public static function device(string $agent): string
    {
        if (preg_match('/iPad|Tablet|Android(?!.*Mobile)/i', $agent)) {
            return 'tablet';
        }

        return preg_match('/Mobi|iPhone|Android/i', $agent) ? 'mobile' : 'desktop';
    }

    private static function visitor(Request $request): string
    {
        $day = now()->toDateString();
        // Escalar en la caché (CLAUDE.md: nunca objetos de Eloquent).
        $salt = Cache::remember('analytics-salt:'.$day, now()->addDays(2), fn () => Str::random(40));

        return substr(hash('sha256', $salt.'|'.$request->ip().'|'.$request->userAgent()), 0, 16);
    }

    /**
     * Resumen para el panel: totales del periodo y del anterior, serie diaria,
     * páginas, procedencias y dispositivos. Solo escalares.
     *
     * @return array<string, mixed>
     */
    public static function report(int $days): array
    {
        $from = now()->subDays($days - 1)->toDateString();
        $to = now()->toDateString();
        $prevFrom = now()->subDays(2 * $days - 1)->toDateString();
        $prevTo = now()->subDays($days)->toDateString();

        $daily = DB::table('page_views')
            ->whereBetween('day', [$from, $to])
            ->selectRaw('day, count(*) as views, count(distinct visitor) as visitors')
            ->groupBy('day')->orderBy('day')->get()
            ->keyBy(fn ($r) => substr((string) $r->day, 0, 10));

        $series = [];
        for ($d = now()->subDays($days - 1)->startOfDay(); $d->lte(now()); $d->addDay()) {
            $key = $d->toDateString();
            $series[] = [
                'day' => $key,
                'views' => (int) ($daily[$key]->views ?? 0),
                'visitors' => (int) ($daily[$key]->visitors ?? 0),
            ];
        }

        $previous = DB::query()->fromSub(
            DB::table('page_views')->whereBetween('day', [$prevFrom, $prevTo])
                ->selectRaw('day, count(*) as views, count(distinct visitor) as visitors')->groupBy('day'),
            'd'
        )->selectRaw('coalesce(sum(views), 0) as views, coalesce(sum(visitors), 0) as visitors')->first();

        $range = fn () => DB::table('page_views')->whereBetween('day', [$from, $to]);

        $top = fn (string $column, int $limit, bool $skipNull = false) => $range()
            ->when($skipNull, fn ($q) => $q->whereNotNull($column))
            ->selectRaw("$column as label, count(*) as views, count(distinct day || visitor) as visitors")
            ->groupBy($column)->orderByDesc('views')->limit($limit)->get()
            ->map(fn ($r) => ['label' => $r->label, 'views' => (int) $r->views, 'visitors' => (int) $r->visitors])
            ->all();

        $views = array_sum(array_column($series, 'views'));
        $visitors = array_sum(array_column($series, 'visitors'));

        return [
            'days' => $days,
            'totals' => [
                'views' => $views,
                'visitors' => $visitors,
                'perVisitor' => $visitors ? round($views / $visitors, 1) : 0,
                'prevViews' => (int) $previous->views,
                'prevVisitors' => (int) $previous->visitors,
            ],
            'series' => $series,
            'pages' => $top('path', 25),
            'sources' => $top('referrer', 12),
            'campaigns' => $top('utm_source', 8, true),
            'devices' => $top('device', 3),
        ];
    }
}
