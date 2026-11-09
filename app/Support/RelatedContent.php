<?php

namespace App\Support;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        'que-es-un-skill-de-ia' => [['desarrollo', 'freelancers'], 'skill'],
        'que-son-los-skills-de-claude-code' => [['desarrollo'], 'skill'],
        'agent-skills-estandar-abierto' => [['desarrollo'], 'skill'],
        'empezar-con-claude-code' => [['desarrollo'], 'claude code'],
        'como-crear-un-skill-para-claude-code' => [['desarrollo'], 'skill'],
        'aprender-ia-desde-cero-plan-de-30-dias' => [['freelancers', 'marketing'], null],
        'como-escribir-prompts-efectivos' => [['marketing', 'ventas', 'freelancers'], null],
        'ventana-de-contexto-conversaciones-largas' => [['desarrollo', 'product-management'], 'document'],
        'prompts-de-ia-por-profesion' => [[], null],
        'prompts-para-diseno-grafico' => [['diseno'], 'gráfic'],
        'crear-imagenes-con-ia' => [['diseno', 'marketing'], 'imagen'],
        'como-usar-chatgpt' => [['marketing', 'freelancers', 'ventas'], null],
        'como-usar-gemini' => [['marketing', 'freelancers', 'analisis-de-datos'], null],
        'como-usar-claude' => [['desarrollo', 'freelancers', 'marketing'], null],
        'como-usar-perplexity' => [['marketing', 'analisis-de-datos', 'ventas'], 'investiga'],
        'que-es-la-inteligencia-artificial' => [['freelancers', 'marketing'], null],
        'como-usar-deepseek' => [['desarrollo', 'analisis-de-datos'], null],
        'como-usar-grok' => [['marketing', 'customer-support'], 'redes'],
        'crear-musica-con-ia' => [['marketing', 'diseno'], 'audio'],
        'chatgpt-vs-gemini' => [['marketing', 'freelancers', 'analisis-de-datos'], null],
        'perplexity-vs-chatgpt' => [['marketing', 'ventas', 'freelancers'], 'investiga'],
        'copilot-vs-chatgpt' => [['finanzas', 'product-management', 'freelancers'], null],
        'meta-ai-en-whatsapp' => [['customer-support', 'freelancers'], null],
        'aprender-ingles-con-ia' => [['rrhh', 'freelancers'], 'inglés'],
        'editar-fotos-con-ia' => [['diseno', 'marketing'], 'foto'],
        'prompts-para-editar-fotos-con-ia' => [['diseno', 'freelancers'], 'foto'],
        'cual-es-la-mejor-ia' => [['freelancers', 'marketing', 'product-management'], null],
        'vale-la-pena-pagar-chatgpt-plus' => [['freelancers', 'product-management'], 'chatgpt'],
        'crear-una-pagina-web-con-ia' => [['marketing', 'freelancers', 'diseno'], 'web'],
        'crear-videos-con-ia' => [['marketing', 'diseno'], 'vídeo'],
        'pasar-audio-a-texto-con-ia' => [['marketing', 'rrhh', 'freelancers'], 'transcrip'],
        'crear-un-logo-con-ia' => [['diseno', 'freelancers', 'marketing'], 'marca'],
        'como-usar-copilot' => [['finanzas', 'product-management', 'freelancers'], null],
        'plan-de-negocio-con-ia' => [['freelancers', 'finanzas', 'product-management'], 'negocio'],
        'foto-de-perfil-profesional-con-ia' => [['rrhh', 'freelancers', 'diseno'], 'linkedin'],
        'planificar-un-viaje-con-ia' => [['freelancers', 'product-management'], 'planific'],
        'resumir-videos-de-youtube-con-ia' => [['marketing', 'analisis-de-datos', 'freelancers'], 'resum'],
        'decorar-tu-casa-con-ia' => [['diseno', 'marketing'], 'imagen'],
        'convertir-texto-a-voz-con-ia' => [['marketing', 'diseno', 'freelancers'], 'audio'],
        'resolver-problemas-de-matematicas-con-ia' => [['analisis-de-datos', 'finanzas'], 'cálcul'],
        'menu-semanal-con-ia' => [['freelancers', 'product-management'], 'planific'],
        'plan-de-entrenamiento-con-ia' => [['freelancers', 'rrhh'], 'planific'],
        'escribir-un-libro-con-ia' => [['marketing', 'freelancers'], 'redacción'],
        'escribir-un-discurso-con-ia' => [['rrhh', 'ventas', 'marketing'], 'presentación'],
        'mejorar-perfil-de-linkedin-con-ia' => [['rrhh', 'ventas', 'freelancers'], 'linkedin'],
        'crear-un-cuento-infantil-con-ia' => [['diseno', 'marketing'], 'imagen'],
        'crear-un-podcast-con-ia' => [['marketing', 'freelancers'], 'audio'],
        'ganar-dinero-con-ia' => [['freelancers', 'marketing', 'ventas'], 'cliente'],
        'mapas-mentales-y-esquemas-con-ia' => [['product-management', 'rrhh'], 'resum'],
        'crear-un-avatar-con-ia' => [['diseno', 'marketing'], 'imagen'],
        'restaurar-fotos-antiguas-con-ia' => [['diseno', 'marketing'], 'imagen'],
        'trabajar-en-inteligencia-artificial' => [['rrhh', 'desarrollo', 'freelancers'], 'candidat'],
        'disenar-un-tatuaje-con-ia' => [['diseno'], 'ilustra'],
        'preparar-oposiciones-con-ia' => [['rrhh', 'legal'], 'aprendizaje'],
        'felicitar-la-navidad-con-ia' => [['marketing', 'diseno'], 'imagen'],
        'comprar-con-ia-black-friday' => [['ventas', 'analisis-de-datos'], 'compar'],
        'detectar-imagenes-hechas-con-ia' => [['marketing', 'customer-support'], 'imagen'],
        'ideas-de-regalo-y-amigo-invisible-con-ia' => [['ventas', 'marketing'], 'compar'],
        'escribir-una-reclamacion-con-ia' => [['customer-support', 'legal'], 'reclama'],
        'crear-stickers-con-ia' => [['diseno', 'marketing'], 'imagen'],
        'presupuesto-personal-y-ahorro-con-ia' => [['finanzas', 'freelancers'], 'presupuesto'],
        'buscar-trabajo-con-ia' => [['rrhh', 'freelancers'], 'candidat'],
        'disfraz-de-halloween-con-ia' => [['diseno', 'marketing'], 'imagen'],
        'corregir-ortografia-con-ia' => [['marketing', 'customer-support', 'freelancers'], 'redacción'],
        'parafrasear-textos-con-ia' => [['marketing', 'ventas', 'freelancers'], 'redacción'],
        'revisar-un-contrato-con-ia' => [['legal', 'freelancers'], 'contrat'],
        'escribir-un-poema-con-ia' => [['marketing', 'diseno'], 'redacción'],
        'organizar-tu-tiempo-con-ia' => [['product-management', 'freelancers'], 'planific'],
        'dibujos-para-colorear-con-ia' => [['diseno', 'marketing'], 'imagen'],
        'felicitar-un-cumpleanos-con-ia' => [['marketing', 'rrhh'], 'redacción'],
        'nombre-para-tu-negocio-con-ia' => [['freelancers', 'marketing', 'diseno'], 'marca'],
        'hacer-invitaciones-con-ia' => [['diseno', 'marketing'], 'imagen'],
        'contar-calorias-con-ia' => [['freelancers', 'rrhh'], 'planific'],
        'mejorar-calidad-de-una-foto-con-ia' => [['diseno', 'marketing'], 'foto'],
        'crear-un-comic-con-ia' => [['diseno', 'marketing'], 'imagen'],
        'carta-a-los-reyes-magos-con-ia' => [['marketing', 'rrhh'], 'redacción'],
        'crear-un-videojuego-con-ia' => [['desarrollo'], 'código'],
        'convertir-una-foto-en-dibujo-con-ia' => [['diseno', 'marketing'], 'imagen'],
        'interpretar-una-analitica-con-ia' => [['analisis-de-datos', 'freelancers'], 'document'],
        'escribir-una-carta-de-amor-con-ia' => [['marketing', 'rrhh'], 'redacción'],
        'carta-de-baja-voluntaria-con-ia' => [['rrhh', 'freelancers'], 'redacción'],
        'identificar-plantas-con-ia' => [['analisis-de-datos', 'freelancers'], 'imagen'],
        'resumir-un-libro-con-ia' => [['rrhh', 'freelancers'], 'resum'],
        'entender-tu-nomina-con-ia' => [['finanzas', 'rrhh'], 'nómina'],
        'mensaje-de-pesame-con-ia' => [['rrhh', 'marketing'], 'redacción'],
        'carta-de-recomendacion-con-ia' => [['rrhh', 'freelancers'], 'candidat'],
        'quitar-el-fondo-de-una-foto-con-ia' => [['diseno', 'marketing'], 'imagen'],
        'nombre-para-un-bebe-con-ia' => [['marketing', 'freelancers'], 'redacción'],
        'pedir-un-aumento-de-sueldo-con-ia' => [['rrhh', 'finanzas'], 'negociaci'],
        'animar-una-foto-con-ia' => [['diseno', 'marketing'], 'vídeo'],
        'propositos-de-ano-nuevo-con-ia' => [['freelancers', 'product-management'], 'planific'],
        'carta-de-motivacion-con-ia' => [['rrhh', 'freelancers'], 'redacción'],
        'fotos-de-navidad-con-ia' => [['diseno', 'marketing'], 'imagen'],
        'menu-de-navidad-con-ia' => [['freelancers', 'product-management'], 'planific'],
        'comentario-de-texto-con-ia' => [['rrhh', 'freelancers'], 'aprendizaje'],
        'citar-en-apa-con-ia' => [['rrhh', 'freelancers'], 'investiga'],
        'mensaje-de-despedida-con-ia' => [['rrhh', 'marketing'], 'redacción'],
        'hacer-un-cartel-con-ia' => [['diseno', 'marketing'], 'imagen'],
        'hacer-una-infografia-con-ia' => [['diseno', 'marketing'], 'imagen'],
        'hacer-una-redaccion-con-ia' => [['rrhh', 'freelancers'], 'redacción'],
        'hacer-un-informe-con-ia' => [['finanzas', 'product-management'], 'informe'],
        'hacer-un-examen-tipo-test-con-ia' => [['rrhh', 'freelancers'], 'educa'],
        'escribir-una-biografia-con-ia' => [['marketing', 'freelancers'], 'redacción'],
        'hacer-un-arbol-genealogico-con-ia' => [['freelancers', 'marketing'], 'investiga'],
        'crear-fondos-de-pantalla-con-ia' => [['diseno', 'marketing'], 'imagen'],
        'escribir-una-carta-de-agradecimiento-con-ia' => [['rrhh', 'customer-support'], 'redacción'],
        'ayudar-con-los-deberes-con-ia' => [['rrhh', 'freelancers'], 'educa'],
        'hacer-un-analisis-dafo-con-ia' => [['product-management', 'marketing'], 'estrategia'],
        'hacer-un-cuadrante-de-turnos-con-ia' => [['rrhh', 'freelancers'], 'planifica'],
        'hacer-un-calendario-con-ia' => [['diseno', 'marketing'], 'imagen'],
        'ia-para-programar' => [['desarrollo'], 'código'],
        'cursos-de-inteligencia-artificial' => [['rrhh', 'freelancers'], 'formación'],
        'ia-para-redes-sociales' => [['marketing', 'freelancers'], 'redes'],
        'traducir-con-ia' => [['customer-support', 'ventas', 'marketing'], 'tradu'],
        'herramientas-de-ia-gratis' => [['freelancers', 'marketing'], null],
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
        'synthesia-vs-heygen' => [['rrhh', 'marketing', 'ventas', 'customer-support'], 'con avatar'],
        'escribir-correos-con-ia' => [['ventas', 'customer-support'], 'email'],
        'resumir-documentos-largos-con-ia' => [['legal', 'finanzas'], 'resum'],
        'gemini-notebook-antes-notebooklm' => [['product-management', 'legal'], 'document'],
        'investigar-con-ia-deep-research' => [['product-management', 'marketing'], 'investiga'],
        'errores-al-usar-ia-en-el-trabajo' => [['freelancers', 'customer-support'], null],
        'alucinaciones-de-la-ia' => [['legal', 'finanzas'], 'verifica'],
        'se-nota-si-un-texto-lo-escribe-una-ia' => [['marketing'], 'redacción'],
        'chatgpt-siempre-te-da-la-razon' => [['freelancers', 'product-management'], 'sincer'],
        'que-la-ia-escriba-como-un-humano' => [['freelancers', 'marketing'], 'escrib'],
        'chatgpt-no-funciona' => [['freelancers', 'customer-support'], null],
        'gemini-no-genera-imagenes' => [['diseno', 'marketing'], 'foto'],
        'cuanta-agua-y-energia-gasta-la-ia' => [['product-management', 'freelancers'], null],
        'chatgpt-claude-y-gemini-para-ordenador' => [['freelancers', 'product-management'], null],
        'hablar-con-chatgpt-por-voz' => [['rrhh', 'freelancers'], 'entrevista'],
        'que-es-nano-banana' => [['diseno', 'marketing'], 'imagen'],
        'memoria-e-historial-de-chatgpt' => [['freelancers', 'rrhh'], null],
        'desactivar-gemini-en-el-movil' => [['customer-support', 'freelancers'], null],
        'usar-chatgpt-como-psicologo' => [['rrhh', 'freelancers'], null],
        'como-usar-elevenlabs' => [['marketing', 'freelancers'], 'elevenlabs'],
        'clonar-tu-voz-con-ia' => [['freelancers', 'marketing'], 'voz'],
        'doblar-un-video-con-ia' => [['marketing', 'freelancers'], 'dobla'],
        'declaracion-de-la-renta-con-ia' => [['finanzas', 'freelancers'], 'la renta'],
        'invertir-en-bolsa-con-ia' => [['finanzas'], 'invert'],
        'contabilidad-con-ia' => [['finanzas', 'freelancers'], 'factura'],
        'borrar-personas-de-una-foto-con-ia' => [['diseno', 'marketing'], 'foto'],
        'pasar-una-foto-a-texto-con-ia' => [['freelancers', 'finanzas', 'diseno'], 'el texto de una'],
        'cv-y-carta-de-presentacion-con-ia' => [['rrhh'], 'candidat'],
        'entrevista-de-trabajo-con-ia' => [['rrhh'], 'entrevista'],
        'ia-para-profesores' => [['rrhh', 'freelancers'], 'educa'],
        'estudiar-con-ia' => [['freelancers', 'rrhh'], 'aprendizaje'],
        'tfg-con-ia' => [['analisis-de-datos', 'freelancers'], 'investiga'],
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
        'skills-de-ia-mas-virales' => [['desarrollo', 'diseno', 'marketing'], null],
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
     * Palabras que aparecen en cientos de títulos y no dicen de qué trata la
     * ficha. Se ignoran al buscar fichas parecidas.
     */
    private const WEAK_WORDS = [
        'prompt', 'prompts', 'chatgpt', 'gemini', 'claude', 'copilot', 'pedirle', 'pedir', 'hacer', 'crear',
        'usar', 'mejor', 'mas', 'paso', 'guia', 'plantilla', 'skill', 'skills', 'nano', 'banana',
        'preparar', 'revisar', 'generar', 'generador', 'completo', 'cualquier', 'forma', 'darle', 'dar',
        'antes', 'cada', 'todo', 'tipo', 'manera', 'cual', 'cuando', 'donde', 'gratis', 'online',
        'entender', 'cambiar', 'cambie', 'conseguir', 'funcionan', 'sirve', 'saber', 'aprender',
    ];

    /** Variantes que cuentan como la misma palabra al comparar títulos. */
    private const SYNONYMS = [
        'quitar' => 'borrar', 'eliminar' => 'borrar',
        'imagen' => 'foto', 'fotografia' => 'foto',
    ];

    /**
     * Fichas de la misma profesión que tratan de lo mismo, para el bloque
     * «siguiente paso» que va justo debajo del prompt. A diferencia de
     * neighbours() (pensado para repartir el rastreo), aquí importa que la
     * persona encuentre la siguiente tarea: quien quita a alguien de una foto
     * suele querer también mejorarla o restaurarla.
     *
     * Se puntúa por palabras del título compartidas. Solo escalares en la
     * caché (CLAUDE.md).
     *
     * @param  array<int, string>  $exclude  slugs que ya se muestran en otro sitio
     * @return array<int, array{slug: string, title: string}>
     */
    public static function similar(Skill $skill, int $limit = 3, array $exclude = []): array
    {
        $words = self::keywords($skill->title);

        if ($words === []) {
            return [];
        }

        $candidates = Cache::remember("related.similar.{$skill->id}", now()->addHours(self::CACHE_HOURS), function () use ($skill, $words) {
            $rows = Skill::published()
                ->where('profession_id', $skill->profession_id)
                ->whereKeyNot($skill->getKey())
                ->where(function ($q) use ($skill) {
                    // En SQL con las palabras tal cual (sin sinónimos): «foto»
                    // encuentra también «fotos».
                    $raw = self::stems(array_diff(SkillMerger::tokens($skill->title), self::WEAK_WORDS));
                    foreach (array_slice($raw, 0, 6) as $word) {
                        self::whereTitleContains($q, $word);
                    }
                })
                ->orderByDesc('vote_score')
                ->limit(60)
                ->get(['slug', 'title']);

            return $rows
                ->map(fn (Skill $s) => [
                    'slug' => $s->slug,
                    'title' => $s->title,
                    'score' => count(array_intersect($words, self::keywords($s->title))),
                ])
                ->filter(fn (array $s) => $s['score'] > 0)
                ->sortByDesc('score')
                ->take(8)
                ->values()
                ->all();
        });

        return collect($candidates)
            ->reject(fn (array $s) => in_array($s['slug'], $exclude, true))
            ->take($limit)
            ->map(fn (array $s) => ['slug' => $s['slug'], 'title' => $s['title']])
            ->values()
            ->all();
    }

    /**
     * La guía que mejor encaja con una ficha. Los términos de GUIDES son
     * demasiado amplios para esto («foto» casa con diez guías), así que se
     * comparan las palabras del título de la ficha con las del slug y el
     * título de cada guía. Cada palabra pesa menos cuantas más guías la
     * usan: «foto» apenas distingue y «personas» decide. Una guía de otra
     * profesión necesita dos palabras en común, para que una auditoría de
     * seguridad no acabe en la auditoría SEO. Si ninguna encaja, la primera
     * guía de la profesión.
     *
     * @param  array<int, array{slug: string, title: string, excerpt: string, url: string}>  $fallback
     * @return array{slug: string, title: string, excerpt: string, url: string}|null
     */
    public static function guideForSkill(Skill $skill, array $fallback = []): ?array
    {
        $words = self::keywords($skill->title);
        $profession = $skill->profession?->slug;

        // El slug es corto y editorial; el título añade contexto pero también
        // ruido («con tu cara» en la de Navidad), así que pesa un cuarto. La
        // rareza de cada palabra se mide en los slugs.
        $guides = collect(Guides::all())->map(fn (array $g) => $g + [
            'slugStems' => self::keywords(str_replace('-', ' ', $g['slug'])),
            'stems' => self::keywords(str_replace('-', ' ', $g['slug']).' '.$g['title']),
        ]);

        $frequency = array_count_values($guides->pluck('slugStems')->flatten()->all());

        $best = null;
        $bestScore = 0.0;

        foreach ($guides as $guide) {
            $shared = array_intersect($words, $guide['stems']);
            $ownProfession = in_array($profession, self::GUIDES[$guide['slug']][0] ?? [], true);

            if ($shared === [] || (! $ownProfession && count($shared) < 2)) {
                continue;
            }

            $score = array_sum(array_map(fn (string $w) => (in_array($w, $guide['slugStems'], true) ? 1 : 0.25) / ($frequency[$w] ?? 1), $shared))
                + ($ownProfession ? 0.05 : 0)
                + count($shared) / count($guide['stems']) / 100;

            if ($score > $bestScore) {
                [$best, $bestScore] = [$guide, $score];
            }
        }

        if ($best === null) {
            return $fallback[0] ?? null;
        }

        return [
            'slug' => $best['slug'],
            'title' => $best['title'],
            'excerpt' => $best['excerpt'],
            'url' => route('guides.show', ['slug' => $best['slug']]),
        ];
    }

    /**
     * Palabras que dicen de qué trata un título: sin vacías ni genéricas, en
     * singular y con los sinónimos unificados.
     *
     * @return array<int, string>
     */
    private static function keywords(string $text): array
    {
        $words = self::stems(array_diff(SkillMerger::tokens($text), self::WEAK_WORDS));

        return array_values(array_unique(array_map(fn (string $w) => self::SYNONYMS[$w] ?? $w, $words)));
    }

    /**
     * Plural a singular a lo bruto («fotos» → «foto»), suficiente para
     * comparar títulos.
     *
     * @param  array<int, string>  $words
     * @return array<int, string>
     */
    private static function stems(array $words): array
    {
        return array_values(array_unique(array_map(
            fn (string $w) => strlen($w) > 4 ? preg_replace('/(es|s)$/', '', $w) : $w,
            $words,
        )));
    }

    /**
     * Como whereContains(), pero solo en el título y unido con OR.
     *
     * @param  Builder<Skill>  $query
     */
    private static function whereTitleContains($query, string $term): void
    {
        if (DB::connection()->getDriverName() === 'pgsql') {
            $query->orWhereRaw('unaccent(title) ILIKE unaccent(?)', ['%'.$term.'%']);

            return;
        }

        $query->orWhere('title', 'like', '%'.$term.'%');
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
