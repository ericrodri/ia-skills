<?php

namespace App\Support;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

/**
 * Enlazado interno entre las dos capas del sitio: las guías (intención
 * informativa, Blade) y el catálogo (intención transaccional, Inertia).
 *
 * Antes eran dos silos: una guía solo enlazaba a otras guías y una ficha solo
 * a su profesión. Aquí vive el único mapa que las conecta: cada guía declara
 * a qué profesiones sirve y con qué término buscar skills afines. El reverso
 * (qué guías mostrar en una profesión o en una ficha) se deriva de él.
 */
class RelatedContent
{
    private const CACHE_HOURS = 6;

    /**
     * slug de la guía => [profesiones, término de búsqueda o null].
     *
     * El término se busca en título y descripción de las skills de esas
     * profesiones; si no da suficientes resultados se completa con las más
     * votadas, así que un término demasiado específico no deja el bloque vacío.
     */
    private const GUIDES = [
        'que-son-los-skills-de-claude-code' => [['desarrollo'], 'skill'],
        'agent-skills-estandar-abierto' => [['desarrollo'], 'skill'],
        'empezar-con-claude-code' => [['desarrollo'], 'claude code'],
        'como-crear-un-skill-para-claude-code' => [['desarrollo'], 'skill'],
        'aprender-ia-desde-cero-plan-de-30-dias' => [['freelancers', 'marketing'], null],
        'como-escribir-prompts-efectivos' => [['marketing', 'ventas', 'freelancers'], null],
        'ventana-de-contexto-conversaciones-largas' => [['desarrollo', 'product-management'], 'document'],
        'prompts-de-ia-por-profesion' => [[], null],
        'prompts-para-diseno-grafico' => [['diseno'], 'gráfic'],
        'gpts-proyectos-y-skills' => [['desarrollo', 'freelancers'], 'asistente'],
        'que-es-un-agente-de-ia' => [['desarrollo', 'product-management'], 'agente'],
        'que-tareas-de-tu-profesion-automatiza-la-ia' => [['freelancers', 'rrhh'], 'automatiz'],
        'va-la-ia-a-sustituir-mi-trabajo' => [['rrhh', 'freelancers'], null],
        'claude-vs-chatgpt-para-trabajar' => [['marketing', 'desarrollo'], null],
        'agentes-de-escritorio-cowork-chatgpt-work' => [['product-management', 'freelancers'], 'agente'],
        'microsoft-365-copilot-en-el-trabajo' => [['finanzas', 'product-management'], 'excel'],
        'claude-code-vs-cursor' => [['desarrollo'], 'código'],
        'plugins-y-mcp-en-claude-code' => [['desarrollo'], 'mcp'],
        'automatizar-tareas-con-ia-en-el-trabajo' => [['freelancers', 'product-management', 'customer-support'], 'automatiz'],
        'automatizar-sin-programar-n8n-make-zapier' => [['freelancers', 'ventas'], 'automatiz'],
        'crear-tu-herramienta-con-ia-sin-programar' => [['freelancers', 'diseno'], 'herramienta'],
        'ia-para-autonomos-y-pymes' => [['freelancers'], null],
        'chatbot-de-atencion-al-cliente-con-ia' => [['customer-support'], 'cliente'],
        'ia-en-excel-y-google-sheets' => [['finanzas'], 'excel'],
        'ia-para-reuniones-y-actas' => [['product-management', 'rrhh'], 'reunión'],
        'presentaciones-con-ia' => [['ventas', 'diseno'], 'presentación'],
        'video-y-audio-con-ia-en-el-trabajo' => [['marketing', 'diseno'], 'vídeo'],
        'escribir-correos-con-ia' => [['ventas', 'customer-support'], 'email'],
        'resumir-documentos-largos-con-ia' => [['legal', 'finanzas'], 'resum'],
        'gemini-notebook-antes-notebooklm' => [['product-management', 'legal'], 'document'],
        'investigar-con-ia-deep-research' => [['product-management', 'marketing'], 'investiga'],
        'errores-al-usar-ia-en-el-trabajo' => [['freelancers', 'customer-support'], null],
        'alucinaciones-de-la-ia' => [['legal', 'finanzas'], 'verifica'],
        'se-nota-si-un-texto-lo-escribe-una-ia' => [['marketing'], 'redacción'],
        'cv-y-carta-de-presentacion-con-ia' => [['rrhh'], 'candidat'],
        'entrevista-de-trabajo-con-ia' => [['rrhh'], 'entrevista'],
        'medir-si-la-ia-ahorra-tiempo' => [['product-management', 'finanzas'], 'métrica'],
        'politica-de-uso-de-ia-en-la-empresa' => [['rrhh', 'legal'], 'política'],
        'ai-act-obligaciones-empresas' => [['legal'], 'cumplimiento'],
        'usar-ia-sin-filtrar-datos-de-clientes' => [['legal', 'customer-support'], 'datos'],
        'estafas-con-ia-deepfakes-y-suplantacion' => [['legal', 'finanzas'], 'fraude'],
        'ia-local-privada-en-tu-ordenador' => [['desarrollo'], null],
        'imagenes-con-ia-derechos-y-uso-comercial' => [['diseno', 'legal'], 'imagen'],
        'escribir-contenido-seo-con-ia' => [['marketing'], 'seo'],
        'aparecer-en-chatgpt-y-perplexity-geo' => [['marketing'], 'seo'],
        'ai-overviews-caida-de-clics' => [['marketing'], 'seo'],
        'keyword-research-con-ia' => [['marketing'], 'keyword'],
        'medir-el-trafico-de-ia' => [['marketing'], 'analytics'],
        'auditoria-seo-tecnica' => [['marketing', 'desarrollo'], 'seo'],
        'eeat-experiencia-contenido-con-ia' => [['marketing'], 'contenido'],
        'datos-estructurados-para-ia' => [['marketing', 'desarrollo'], 'seo'],
        'seo-programatico-con-ia' => [['marketing'], 'seo'],
        'seo-local-con-ia' => [['marketing', 'freelancers'], 'local'],
        'llms-txt-sirve-para-algo' => [['marketing', 'desarrollo'], 'seo'],
        'enlazado-interno-y-arquitectura-web' => [['marketing'], 'seo'],
        'actualizar-contenido-antiguo-con-ia' => [['marketing'], 'contenido'],
        'menciones-de-marca-y-enlaces' => [['marketing'], 'marca'],
        'autoridad-tematica-y-clusters-de-contenido' => [['marketing'], 'contenido'],
        'canibalizacion-de-keywords' => [['marketing'], 'keyword'],
        'diagnosticar-caida-de-trafico-seo' => [['marketing'], 'seo'],
        'intencion-de-busqueda-en-seo' => [['marketing'], 'seo'],
        'paginas-que-google-no-indexa' => [['marketing', 'desarrollo'], 'seo'],
        'migracion-web-sin-perder-seo' => [['marketing', 'desarrollo'], 'seo'],
        'google-search-console-guia' => [['marketing', 'analisis-de-datos'], 'seo'],
        'modo-ia-de-google' => [['marketing'], 'seo'],
        'titulos-y-meta-descriptions-que-consiguen-clics' => [['marketing'], 'seo'],
        'google-discover-como-aparecer' => [['marketing'], 'contenido'],
        'seo-para-tiendas-online' => [['marketing'], 'seo'],
        'posicionar-una-web-nueva-en-google' => [['marketing', 'freelancers'], 'seo'],
        'robots-txt-y-bots-de-ia' => [['marketing', 'desarrollo'], 'seo'],
        'herramientas-seo-gratis' => [['marketing', 'freelancers'], 'seo'],
        'analisis-de-competencia-seo' => [['marketing'], 'competencia'],
        'que-es-jev-modelo-system-one' => [['desarrollo'], 'agente'],
        'conectar-claude-con-unity' => [['desarrollo'], 'mcp'],
    ];

    /** Guías genéricas para profesiones que ninguna guía declara todavía. */
    private const FALLBACK_GUIDES = [
        'como-escribir-prompts-efectivos',
        'automatizar-tareas-con-ia-en-el-trabajo',
        'claude-vs-chatgpt-para-trabajar',
    ];

    /**
     * Guías que sirven a una profesión, en el orden editorial de Guides.
     *
     * @return array<int, array{slug: string, title: string, excerpt: string, url: string}>
     */
    public static function guidesForProfession(?string $professionSlug, int $limit = 3): array
    {
        $slugs = collect(self::GUIDES)
            ->filter(fn (array $map) => $professionSlug !== null && in_array($professionSlug, $map[0], true))
            ->keys();

        $guides = collect(Guides::all())
            ->filter(fn (array $guide) => $slugs->contains($guide['slug']));

        if ($guides->count() < $limit) {
            $fallback = collect(self::FALLBACK_GUIDES)
                ->map(fn (string $slug) => Guides::find($slug))
                ->filter()
                ->reject(fn (array $guide) => $guides->contains(fn (array $g) => $g['slug'] === $guide['slug']));

            $guides = $guides->concat($fallback);
        }

        return $guides->take($limit)
            ->map(fn (array $guide) => [
                'slug' => $guide['slug'],
                'title' => $guide['title'],
                'excerpt' => $guide['excerpt'],
                'url' => route('guides.show', ['slug' => $guide['slug']]),
            ])
            ->values()
            ->all();
    }

    /**
     * Skills que complementan una guía.
     *
     * Solo se cachean arrays de escalares: los objetos de Eloquent se
     * corrompen en la caché de base de datos (ver CLAUDE.md).
     *
     * @return array<int, array{slug: string, title: string, description: string, profession: ?string, vote_score: int}>
     */
    public static function skillsForGuide(string $guideSlug, int $limit = 6): array
    {
        [$professions, $term] = self::GUIDES[$guideSlug] ?? [[], null];

        return Cache::remember("related.guide-skills.{$guideSlug}", now()->addHours(self::CACHE_HOURS), function () use ($professions, $term, $limit) {
            $base = fn () => Skill::published()
                ->with('profession:id,name,slug')
                ->when($professions !== [], fn ($q) => $q->whereHas('profession', fn ($p) => $p->whereIn('slug', $professions)));

            $matches = collect();

            if ($term !== null) {
                $matches = $base()
                    ->where(fn ($q) => self::whereContains($q, $term))
                    ->orderByDesc('vote_score')
                    ->limit($limit)
                    ->get();
            }

            if ($matches->count() < $limit) {
                $matches = $matches->concat(
                    $base()
                        ->whereNotIn('id', $matches->pluck('id'))
                        ->orderByDesc('vote_score')
                        ->limit($limit - $matches->count())
                        ->get()
                );
            }

            return $matches->map(fn (Skill $skill) => [
                'slug' => $skill->slug,
                'title' => $skill->title,
                'description' => $skill->description,
                'profession' => $skill->profession?->name,
                'vote_score' => (int) $skill->vote_score,
            ])->values()->all();
        });
    }

    /**
     * Vecinas de una ficha dentro de su profesión.
     *
     * No son "las más votadas": eso haría que las 640 fichas de una profesión
     * enlazasen a las mismas cuatro. Se toman las siguientes por id (con vuelta
     * al principio), que reparte los enlaces por todo el catálogo y acorta la
     * profundidad de rastreo de las fichas antiguas.
     *
     * @return array<int, array{slug: string, title: string, description: string}>
     */
    public static function neighbours(Skill $skill, int $limit = 4): array
    {
        $query = fn () => Skill::published()
            ->where('profession_id', $skill->profession_id)
            ->whereKeyNot($skill->getKey())
            ->orderBy('id');

        $next = $query()->where('id', '>', $skill->id)->limit($limit)->get(['id', 'slug', 'title', 'description']);

        if ($next->count() < $limit) {
            $next = $next->concat(
                $query()->where('id', '<', $skill->id)->limit($limit - $next->count())->get(['id', 'slug', 'title', 'description'])
            );
        }

        return $next->map(fn (Skill $s) => [
            'slug' => $s->slug,
            'title' => $s->title,
            'description' => $s->description,
        ])->all();
    }

    /**
     * Título o descripción contienen $term, sin distinguir mayúsculas ni
     * tildes en PostgreSQL ("reunión" encuentra "reunion"). En SQLite (tests)
     * se degrada a LIKE, que ya ignora mayúsculas en ASCII.
     *
     * @param  Builder<Skill>  $query
     */
    public static function whereContains($query, string $term, string $boolean = 'and'): void
    {
        $like = '%'.$term.'%';

        if (DB::connection()->getDriverName() === 'pgsql') {
            $query->whereRaw('(unaccent(title) ILIKE unaccent(?) OR unaccent(description) ILIKE unaccent(?))', [$like, $like], $boolean);

            return;
        }

        $query->where(fn ($q) => $q->where('title', 'like', $like)->orWhere('description', 'like', $like), boolean: $boolean);
    }

    /**
     * @return array<int, string>
     */
    public static function mappedGuideSlugs(): array
    {
        return array_keys(self::GUIDES);
    }
}
