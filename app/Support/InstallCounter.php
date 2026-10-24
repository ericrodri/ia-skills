<?php

namespace App\Support;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

/**
 * Cuenta las veces que alguien se lleva un SKILL.md: por la web, por el CLI o
 * por el servidor MCP (tools/ia-skills-cli).
 *
 * Es la única métrica del catálogo que mide uso real. `vote_score`, `views_count`
 * y `saves_count` vienen sembrados por los seeders; esta arranca en cero para
 * todas las fichas y solo sube cuando alguien descarga el archivo de verdad.
 *
 * Se deduplica por origen y día para que una descarga repetida —reinstalar,
 * un script en bucle, recargar la página— no infle el contador.
 */
class InstallCounter
{
    private const WINDOW_HOURS = 24;

    /**
     * Agentes que no son personas instalando nada. El CLI y el MCP sí cuentan:
     * son exactamente el caso de uso que queremos medir.
     */
    private const BOT_PATTERNS = [
        'bot', 'crawler', 'spider', 'slurp', 'facebookexternalhit',
        'preview', 'monitor', 'uptime', 'pingdom', 'headless',
    ];

    public static function record(Skill $skill, Request $request): bool
    {
        if (self::looksLikeBot($request->userAgent())) {
            return false;
        }

        // HMAC con la clave de la aplicación, no un hash simple: la política de
        // privacidad promete un resumen no reversible de la IP, y un hash sin
        // clave sobre el espacio de IPv4 se deshace probando todas.
        $key = sprintf(
            'skill-install.%d.%s',
            $skill->id,
            hash_hmac('sha256', $request->ip().'|'.$request->userAgent(), (string) config('app.key'))
        );

        // add() es atómico: devuelve false si la clave ya existe, así que dos
        // peticiones simultáneas del mismo origen cuentan una sola vez.
        if (! Cache::add($key, true, now()->addHours(self::WINDOW_HOURS))) {
            return false;
        }

        $skill->increment('installs_count');

        return true;
    }

    private static function looksLikeBot(?string $userAgent): bool
    {
        if ($userAgent === null || trim($userAgent) === '') {
            return true;
        }

        $agent = strtolower($userAgent);

        foreach (self::BOT_PATTERNS as $pattern) {
            if (str_contains($agent, $pattern)) {
                return true;
            }
        }

        return false;
    }
}
