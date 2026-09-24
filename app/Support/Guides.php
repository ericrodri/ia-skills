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
        'aprender-ia-desde-cero-plan-de-30-dias',
        'como-escribir-prompts-efectivos',
        'ventana-de-contexto-conversaciones-largas',
        'prompts-de-ia-por-profesion',
        'gpts-proyectos-y-skills',
        'que-es-un-agente-de-ia',
        'que-tareas-de-tu-profesion-automatiza-la-ia',
        'va-la-ia-a-sustituir-mi-trabajo',
        'claude-vs-chatgpt-para-trabajar',
        'agentes-de-escritorio-cowork-chatgpt-work',
        'microsoft-365-copilot-en-el-trabajo',
        'claude-code-vs-cursor',
        'plugins-y-mcp-en-claude-code',
        'automatizar-tareas-con-ia-en-el-trabajo',
        'automatizar-sin-programar-n8n-make-zapier',
        'crear-tu-herramienta-con-ia-sin-programar',
        'conectar-claude-con-unity',
        'ia-para-autonomos-y-pymes',
        'chatbot-de-atencion-al-cliente-con-ia',
        'ia-en-excel-y-google-sheets',
        'ia-para-reuniones-y-actas',
        'presentaciones-con-ia',
        'video-y-audio-con-ia-en-el-trabajo',
        'escribir-correos-con-ia',
        'resumir-documentos-largos-con-ia',
        'gemini-notebook-antes-notebooklm',
        'investigar-con-ia-deep-research',
        'errores-al-usar-ia-en-el-trabajo',
        'alucinaciones-de-la-ia',
        'se-nota-si-un-texto-lo-escribe-una-ia',
        'cv-y-carta-de-presentacion-con-ia',
        'entrevista-de-trabajo-con-ia',
        'medir-si-la-ia-ahorra-tiempo',
        'politica-de-uso-de-ia-en-la-empresa',
        'ai-act-obligaciones-empresas',
        'usar-ia-sin-filtrar-datos-de-clientes',
        'estafas-con-ia-deepfakes-y-suplantacion',
        'ia-local-privada-en-tu-ordenador',
        'imagenes-con-ia-derechos-y-uso-comercial',
        'escribir-contenido-seo-con-ia',
        'aparecer-en-chatgpt-y-perplexity-geo',
        'ai-overviews-caida-de-clics',
        'keyword-research-con-ia',
        'medir-el-trafico-de-ia',
        'auditoria-seo-tecnica',
        'eeat-experiencia-contenido-con-ia',
        'datos-estructurados-para-ia',
        'seo-programatico-con-ia',
        'seo-local-con-ia',
        'llms-txt-sirve-para-algo',
        'enlazado-interno-y-arquitectura-web',
        'actualizar-contenido-antiguo-con-ia',
        'menciones-de-marca-y-enlaces',
        'autoridad-tematica-y-clusters-de-contenido',
        'canibalizacion-de-keywords',
        'diagnosticar-caida-de-trafico-seo',
        'intencion-de-busqueda-en-seo',
        'paginas-que-google-no-indexa',
        'migracion-web-sin-perder-seo',
        'google-search-console-guia',
        'modo-ia-de-google',
        'titulos-y-meta-descriptions-que-consiguen-clics',
        'google-discover-como-aparecer',
        'seo-para-tiendas-online',
        'posicionar-una-web-nueva-en-google',
        'que-es-jev-modelo-system-one',
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
