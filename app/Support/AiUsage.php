<?php

namespace App\Support;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

/**
 * Uso de ia-skills por las IA: el producto es que asistentes y agentes
 * consuman el contenido (skill.md, MCP, llms.txt, guías y fichas), así que
 * esto es una métrica de negocio, no ruido. Se mide aparte de las visitas
 * de personas (App\Support\Analytics), que excluyen a todos los bots.
 *
 * Tres grupos:
 *  - asistente: un usuario le pidió algo a ChatGPT, Claude, Perplexity… y
 *    el asistente leyó la página en ese momento. Equivale a una cita.
 *  - agente: el CLI o el MCP de ia-skills, o una descarga directa de
 *    skill.md (curl, Claude Code): alguien instalando una skill.
 *  - indice: rastreadores que alimentan buscadores con IA o entrenamiento.
 *
 * Solo se identifican los agentes que se declaran. Contadores diarios, sin
 * IP ni datos de nadie. Se registra al terminar la respuesta (middleware
 * RecordAiUsage), así que no retrasa la página.
 */
class AiUsage
{
    /** Subcadena del User-Agent => [nombre, grupo]. Gana la primera que coincide. */
    private const AGENTS = [
        'ChatGPT-User' => ['ChatGPT', 'asistente'],
        'OAI-SearchBot' => ['ChatGPT (búsqueda)', 'asistente'],
        'Claude-User' => ['Claude', 'asistente'],
        'Claude-SearchBot' => ['Claude (búsqueda)', 'asistente'],
        'Perplexity-User' => ['Perplexity', 'asistente'],
        'PerplexityBot' => ['Perplexity (índice)', 'asistente'],
        'MistralAI-User' => ['Mistral', 'asistente'],
        'DuckAssistBot' => ['DuckDuckGo IA', 'asistente'],
        'ia-skills-cli' => ['CLI y MCP de ia-skills', 'agente'],
        'claude-code' => ['Claude Code', 'agente'],
        'GPTBot' => ['OpenAI (entrenamiento)', 'indice'],
        'ClaudeBot' => ['Anthropic (entrenamiento)', 'indice'],
        'Googlebot' => ['Google y Gemini', 'indice'],
        'bingbot' => ['Bing y Copilot', 'indice'],
        'Amazonbot' => ['Amazon', 'indice'],
        'Applebot' => ['Apple', 'indice'],
        'meta-externalagent' => ['Meta IA', 'indice'],
        'Bytespider' => ['ByteDance', 'indice'],
        'CCBot' => ['Common Crawl', 'indice'],
        'cohere-ai' => ['Cohere', 'indice'],
    ];

    /** Descargas directas de skill.md sin navegador: así instala Claude Code con curl. */
    private const DOWNLOADERS = '/^(curl|wget|python-requests|node-fetch|undici|axios|Go-http-client)/i';

    /** Rutas que no son contenido. */
    private const IGNORED = '#^/(build|storage|hola|ir|admin|livewire)(/|$)|^/favicon|\.(js|css|png|jpe?g|svg|webp|ico|woff2?)$#i';

    /**
     * @return array{agent: string, grp: string, kind: string, path: string}|null
     */
    public static function classify(string $agent, string $path): ?array
    {
        if ($agent === '' || preg_match(self::IGNORED, $path)) {
            return null;
        }

        $match = null;
        foreach (self::AGENTS as $needle => $info) {
            if (stripos($agent, $needle) !== false) {
                $match = $info;
                break;
            }
        }

        $kind = self::kind($path);

        if ($match === null && $kind === 'skill_md' && preg_match(self::DOWNLOADERS, $agent)) {
            $match = ['Descarga directa (curl…)', 'agente'];
        }

        if ($match === null) {
            return null;
        }

        [$name, $grp] = $match;

        return [
            'agent' => $name,
            'grp' => $grp,
            'kind' => $kind,
            // La página concreta solo para asistentes: son pocas lecturas y
            // dicen qué contenido citan. Los rastreadores solo suman.
            'path' => $grp === 'asistente' ? Str::limit($path, 255, '') : '',
        ];
    }

    public static function kind(string $path): string
    {
        return match (true) {
            str_ends_with($path, '/skill.md') => 'skill_md',
            $path === '/llms.txt' || $path === '/llms-full.txt' => 'llms',
            str_starts_with($path, '/api/') => 'api',
            str_starts_with($path, '/guias') => 'guia',
            str_starts_with($path, '/skills/') => 'ficha',
            default => 'otra',
        };
    }

    public static function record(Request $request, Response $response): void
    {
        if ($response->getStatusCode() >= 400) {
            return;
        }

        $hit = self::classify((string) $request->userAgent(), '/'.ltrim($request->path(), '/'));

        if ($hit === null) {
            return;
        }

        try {
            DB::table('ai_hits')->upsert(
                [$hit + ['day' => now()->toDateString(), 'hits' => 1]],
                ['day', 'agent', 'kind', 'path'],
                ['hits' => DB::raw('ai_hits.hits + 1')],
            );
        } catch (\Throwable $e) {
            // Una métrica nunca debe tumbar una respuesta.
            report($e);
        }
    }

    /**
     * @return array<string, mixed>
     */
    public static function report(string $from, string $to): array
    {
        $range = fn () => DB::table('ai_hits')->whereBetween('day', [$from, $to]);

        $groups = $range()->selectRaw('grp, sum(hits) as hits')->groupBy('grp')->pluck('hits', 'grp')->map(fn ($v) => (int) $v)->all();

        return [
            'groups' => [
                'asistente' => $groups['asistente'] ?? 0,
                'agente' => $groups['agente'] ?? 0,
                'indice' => $groups['indice'] ?? 0,
            ],
            'agents' => $range()->selectRaw('agent, grp, sum(hits) as hits')->groupBy('agent', 'grp')->orderByDesc('hits')->get()
                ->map(fn ($r) => ['label' => $r->agent, 'grp' => $r->grp, 'hits' => (int) $r->hits])->all(),
            'kinds' => $range()->whereIn('grp', ['asistente', 'agente'])->selectRaw('kind, sum(hits) as hits')->groupBy('kind')->orderByDesc('hits')->get()
                ->map(fn ($r) => ['label' => $r->kind, 'hits' => (int) $r->hits])->all(),
            'pages' => $range()->where('grp', 'asistente')->where('path', '!=', '')->selectRaw('path, sum(hits) as hits')->groupBy('path')->orderByDesc('hits')->limit(15)->get()
                ->map(fn ($r) => ['label' => $r->path, 'hits' => (int) $r->hits])->all(),
            // Histórico: installs_count se lleva por ficha desde octubre de 2026.
            'installsTotal' => (int) DB::table('skills')->sum('installs_count'),
            'topInstalled' => DB::table('skills')->where('installs_count', '>', 0)->orderByDesc('installs_count')->limit(8)->get(['slug', 'title', 'installs_count'])
                ->map(fn ($r) => ['label' => $r->title, 'slug' => $r->slug, 'hits' => (int) $r->installs_count])->all(),
        ];
    }
}
