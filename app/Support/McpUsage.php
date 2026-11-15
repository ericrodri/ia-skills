<?php

namespace App\Support;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Cuenta el uso del conector MCP remoto (McpConnectorController): cuántas
 * conexiones, búsquedas y lecturas de fichas llegan, desde qué cliente y si
 * son anónimas, con cuenta o nuestras (administradores), para no confundir
 * nuestras pruebas con uso real. Contadores diarios en la tabla mcp_usage.
 *
 * Se guarda lo buscado (como las búsquedas sin resultados de la web) y el
 * slug de las fichas leídas, solo si la ficha es pública: el slug de una
 * skill privada no debe acabar en ningún panel.
 */
class McpUsage
{
    public const ACTIONS = [
        'initialize' => 'conectar',
        'search_skills' => 'buscar',
        'get_skill' => 'leer',
        'my_skills' => 'mis_skills',
    ];

    /**
     * @param  array<string, mixed>  $arguments  argumentos de la herramienta
     */
    public static function record(Request $request, ?User $user, string $method, array $arguments = []): void
    {
        $action = self::ACTIONS[$method] ?? null;

        if ($action === null) {
            return;
        }

        $subject = match ($action) {
            'buscar' => Str::limit(Str::lower(trim((string) ($arguments['query'] ?? ''))), 117, '…'),
            'leer' => self::publicSlug((string) ($arguments['slug'] ?? '')),
            default => '',
        };

        try {
            DB::table('mcp_usage')->upsert(
                [[
                    'day' => now()->toDateString(),
                    'client' => self::client((string) $request->userAgent()),
                    'access' => $user === null ? 'anonimo' : ($user->is_admin ? 'propio' : 'cuenta'),
                    'action' => $action,
                    'subject' => $subject,
                    'hits' => 1,
                ]],
                ['day', 'client', 'access', 'action', 'subject'],
                ['hits' => DB::raw('mcp_usage.hits + 1')],
            );
        } catch (\Throwable $e) {
            // Una métrica nunca debe tumbar una respuesta.
            report($e);
        }
    }

    /**
     * Primera palabra del User-Agent, en minúsculas: «claude-code/2.1 (…)» da
     * «claude-code». Sirve para cualquier cliente sin mantener una lista.
     */
    public static function client(string $userAgent): string
    {
        $first = Str::lower(trim(strtok(trim($userAgent), " /(") ?: ''));

        return $first === '' ? 'desconocido' : Str::limit($first, 40, '');
    }

    private static function publicSlug(string $slug): string
    {
        $slug = trim($slug);

        return $slug !== '' && Skill::published()->where('slug', $slug)->exists()
            ? Str::limit($slug, 120, '')
            : '';
    }

    /**
     * @return array<string, mixed>
     */
    public static function report(string $from, string $to): array
    {
        $range = fn () => DB::table('mcp_usage')->whereBetween('day', [$from, $to]);
        $external = fn () => $range()->where('access', '!=', 'propio');

        $byAction = $external()->selectRaw('action, sum(hits) as hits')->groupBy('action')->pluck('hits', 'action')->map(fn ($v) => (int) $v);
        $byAccess = $range()->selectRaw('access, sum(hits) as hits')->groupBy('access')->pluck('hits', 'access')->map(fn ($v) => (int) $v);

        return [
            'actions' => [
                'conectar' => $byAction['conectar'] ?? 0,
                'buscar' => $byAction['buscar'] ?? 0,
                'leer' => $byAction['leer'] ?? 0,
            ],
            'access' => [
                'anonimo' => $byAccess['anonimo'] ?? 0,
                'cuenta' => $byAccess['cuenta'] ?? 0,
                'propio' => $byAccess['propio'] ?? 0,
            ],
            'clients' => $external()->selectRaw('client, sum(hits) as hits')->groupBy('client')->orderByDesc('hits')->limit(8)->get()
                ->map(fn ($r) => ['label' => $r->client, 'hits' => (int) $r->hits])->all(),
            'searches' => $external()->where('action', 'buscar')->where('subject', '!=', '')
                ->selectRaw('subject, sum(hits) as hits')->groupBy('subject')->orderByDesc('hits')->limit(12)->get()
                ->map(fn ($r) => ['label' => $r->subject, 'hits' => (int) $r->hits])->all(),
            'reads' => $external()->where('action', 'leer')->where('subject', '!=', '')
                ->selectRaw('subject, sum(hits) as hits')->groupBy('subject')->orderByDesc('hits')->limit(10)->get()
                ->map(fn ($r) => ['label' => $r->subject, 'hits' => (int) $r->hits])->all(),
        ];
    }
}
