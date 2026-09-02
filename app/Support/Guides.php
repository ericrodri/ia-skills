<?php

namespace App\Support;

use Illuminate\Support\Carbon;

/**
 * Registro de guías editoriales.
 *
 * Las guías son páginas Blade renderizadas en el servidor (no Inertia): son
 * contenido puramente informativo, así que se sirven como HTML plano para que
 * cualquier crawler las lea sin ejecutar JavaScript y para no arrastrar el
 * bundle de Vue en páginas que no necesitan interactividad.
 *
 * Cada fichero de resources/guides/*.php devuelve un array con los metadatos
 * y el cuerpo en HTML.
 */
class Guides
{
    /** Orden de publicación: primero el contenido pilar. */
    private const ORDER = [
        'que-son-los-skills-de-claude-code',
        'agent-skills-estandar-abierto',
        'empezar-con-claude-code',
        'como-crear-un-skill-para-claude-code',
        'como-escribir-prompts-efectivos',
        'prompts-de-ia-por-profesion',
        'que-es-un-agente-de-ia',
        'claude-vs-chatgpt-para-trabajar',
        'claude-code-vs-cursor',
        'plugins-y-mcp-en-claude-code',
        'automatizar-tareas-con-ia-en-el-trabajo',
        'ia-en-excel-y-google-sheets',
        'ia-para-reuniones-y-actas',
        'medir-si-la-ia-ahorra-tiempo',
        'politica-de-uso-de-ia-en-la-empresa',
        'ai-act-obligaciones-empresas',
        'usar-ia-sin-filtrar-datos-de-clientes',
        'aparecer-en-chatgpt-y-perplexity-geo',
    ];

    /** @var array<string, array<string, mixed>>|null */
    private static ?array $cache = null;

    /**
     * @return array<int, array<string, mixed>>
     */
    public static function all(): array
    {
        return array_values(self::load());
    }

    /**
     * @return array<string, mixed>|null
     */
    public static function find(string $slug): ?array
    {
        return self::load()[$slug] ?? null;
    }

    /**
     * Guías relacionadas, con relleno automático si la guía no declara ninguna.
     *
     * @param  array<string, mixed>  $guide
     * @return array<int, array<string, mixed>>
     */
    public static function related(array $guide, int $limit = 3): array
    {
        $all = self::load();

        $related = collect($guide['related'] ?? [])
            ->map(fn (string $slug) => $all[$slug] ?? null)
            ->filter()
            ->values();

        if ($related->count() < $limit) {
            $related = $related->concat(
                collect($all)
                    ->reject(fn (array $other) => $other['slug'] === $guide['slug']
                        || $related->contains(fn (array $r) => $r['slug'] === $other['slug']))
                    ->values()
            );
        }

        return $related->take($limit)->all();
    }

    public static function lastModified(): string
    {
        $dates = array_column(self::all(), 'updated');

        return $dates ? Carbon::parse(max($dates))->toAtomString() : now()->toAtomString();
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    private static function load(): array
    {
        if (self::$cache !== null) {
            return self::$cache;
        }

        $guides = [];

        foreach (self::ORDER as $slug) {
            $path = resource_path("guides/{$slug}.php");

            if (! is_file($path)) {
                continue;
            }

            $guide = require $path;
            $guide['slug'] = $slug;
            $guides[$slug] = $guide;
        }

        return self::$cache = $guides;
    }
}
