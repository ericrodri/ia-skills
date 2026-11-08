<?php

namespace App\Support;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Qué hace la gente en una ficha. La mayoría entra desde Google, usa el
 * prompt y se va: sin esto, esa visita es indistinguible de alguien que se
 * va sin encontrar nada. El navegador avisa con sendBeacon a /hola/accion al
 * pulsar un botón (Skills/Show.vue).
 *
 * Mismo criterio que las visitas (Analytics): fuera bots y admins. Solo
 * contadores diarios por ficha y acción, sin IP ni datos de nadie.
 */
class SkillActions
{
    /** Acción => nombre en el panel. */
    public const ACTIONS = [
        'copiar' => 'Copiar el prompt',
        'abrir_claude' => 'Abrir en Claude',
        'abrir_chatgpt' => 'Abrir en ChatGPT',
        'abrir_gemini' => 'Abrir en Gemini',
        'abrir_copilot' => 'Abrir en Copilot',
        'abrir_perplexity' => 'Abrir en Perplexity',
        'abrir_opencode' => 'Abrir en OpenCode',
        'adaptar' => 'Abrir «Rellenar aquí»',
        'rellenar' => 'Rellenar algún dato del prompt',
        'claude_code' => 'Pedírselo a Claude Code',
        'skill_md' => 'Descargar SKILL.md',
        'mcp' => 'Copiar el comando MCP',
        'terminal' => 'Copiar el comando de terminal',
    ];

    public static function record(Request $request): bool
    {
        $action = (string) $request->input('a', '');
        $slug = (string) $request->input('s', '');

        if (! array_key_exists($action, self::ACTIONS) || $slug === '' || strlen($slug) > 255) {
            return false;
        }

        if (Analytics::isBot((string) $request->userAgent()) || $request->user()?->is_admin) {
            return false;
        }

        $skillId = DB::table('skills')->where('slug', $slug)->where('status', 'published')->value('id');

        if ($skillId === null) {
            return false;
        }

        DB::table('skill_actions')->upsert(
            [['day' => now()->toDateString(), 'skill_id' => $skillId, 'action' => $action, 'hits' => 1]],
            ['day', 'skill_id', 'action'],
            ['hits' => DB::raw('skill_actions.hits + 1')],
        );

        return true;
    }

    /**
     * Resumen para el panel: acciones por tipo, y por ficha frente a sus
     * visitas. Solo escalares.
     *
     * @return array<string, mixed>
     */
    public static function report(string $from, string $to): array
    {
        $range = fn () => DB::table('skill_actions')->whereBetween('skill_actions.day', [$from, $to]);

        $byAction = $range()->selectRaw('action, sum(hits) as hits')->groupBy('action')->orderByDesc('hits')->get()
            ->map(fn ($r) => ['label' => self::ACTIONS[$r->action] ?? $r->action, 'hits' => (int) $r->hits])->all();

        // Visitantes de cada ficha en el periodo, para ver qué parte la usa.
        $visitors = DB::table('page_views')
            ->whereBetween('day', [$from, $to])
            ->where('path', 'like', '/skills/%')
            ->selectRaw('path, count(distinct day || visitor) as visitors')
            ->groupBy('path');

        $skills = $range()
            ->join('skills', 'skills.id', '=', 'skill_actions.skill_id')
            ->leftJoinSub($visitors, 'v', 'v.path', '=', DB::raw("'/skills/' || skills.slug"))
            ->selectRaw('skills.slug, skills.title, sum(skill_actions.hits) as hits, max(v.visitors) as visitors')
            ->groupBy('skills.slug', 'skills.title')
            ->orderByDesc('hits')
            ->limit(15)
            ->get()
            ->map(fn ($r) => [
                'slug' => $r->slug,
                'label' => $r->title,
                'hits' => (int) $r->hits,
                'visitors' => (int) $r->visitors,
            ])->all();

        $skillVisitors = (int) DB::query()->fromSub($visitors, 'v')->sum('visitors');

        return [
            'total' => (int) $range()->sum('hits'),
            'skillVisitors' => $skillVisitors,
            'actions' => $byAction,
            'skills' => $skills,
        ];
    }
}
