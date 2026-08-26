<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use App\Support\Guides;
use App\Support\ProfessionContent;
use App\Support\Seo;
use App\Support\SiteData;
use Inertia\Inertia;
use Inertia\Response;

class ProfessionController extends Controller
{
    public function index(): Response
    {
        $professions = Profession::where('is_active', true)
            ->withCount(['skills as skills_count' => function ($query) {
                $query->where('status', 'published');
            }])
            ->orderBy('sort_order')
            ->get(['id', 'name', 'slug', 'icon', 'description']);

        $count = SiteData::skillsCountLabel();

        Seo::share([
            'title' => 'Prompts de IA por profesión: '.$professions->count().' categorías',
            'description' => "Elige tu profesión y accede a los prompts y skills de IA que usan a diario marketers, developers, diseñadores, comerciales, PMs, RRHH, finanzas y legal. {$count} en total.",
            'canonical' => route('professions.index'),
            'fallback' => [
                'heading' => 'Prompts y skills de IA por profesión',
                'paragraphs' => ['Elige tu profesión para ver los prompts y skills de IA que la comunidad ha votado como más útiles.'],
                'links' => $professions->mapWithKeys(fn (Profession $p) => [
                    "Prompts de IA para {$p->name} ({$p->skills_count})" => route('professions.show', ['profession' => $p->slug]),
                ])->all(),
            ],
            'schema' => [
                Seo::organization(),
                Seo::breadcrumbs([
                    'Inicio' => route('home'),
                    'Profesiones' => route('professions.index'),
                ]),
                [
                    '@context' => 'https://schema.org',
                    '@type' => 'CollectionPage',
                    'name' => 'Prompts y skills de IA por profesión',
                    'url' => route('professions.index'),
                    'inLanguage' => 'es',
                    'mainEntity' => [
                        '@type' => 'ItemList',
                        'numberOfItems' => $professions->count(),
                        'itemListElement' => $professions->values()->map(fn (Profession $profession, int $i) => [
                            '@type' => 'ListItem',
                            'position' => $i + 1,
                            'name' => "Prompts de IA para {$profession->name}",
                            'url' => route('professions.show', ['profession' => $profession->slug]),
                        ])->all(),
                    ],
                ],
            ],
        ]);

        return Inertia::render('Professions/Index', [
            'professions' => $professions,
        ]);
    }

    public function show(Profession $profession): Response
    {
        $profession->loadCount(['skills as skills_count' => fn ($q) => $q->where('status', 'published')]);

        $skills = $profession->publishedSkills()
            ->with('author:id,name,username,avatar,is_verified_expert')
            ->withCount('comments')
            ->orderByDesc('vote_score')
            ->paginate(20);

        $content = ProfessionContent::for($profession->slug);
        $guides = $this->guidesFor($profession->slug);
        $url = route('professions.show', ['profession' => $profession->slug]);
        $page = $skills->currentPage();
        $total = $profession->skills_count;

        $title = $page > 1
            ? "Prompts de IA para {$profession->name} · página {$page}"
            : "Prompts de IA para {$profession->name}: {$total} skills probadas";

        Seo::share([
            'title' => $title,
            'description' => "{$total} prompts y skills de IA para {$profession->name}, ordenados por los votos de la comunidad. Copia, personaliza y ejecuta en Claude, ChatGPT o Gemini.",
            'canonical' => $page > 1 ? $url.'?page='.$page : $url,
            // Las páginas 2+ del listado no aportan contenido único indexable,
            // pero sí enlazan a fichas: se rastrean, no se indexan.
            'robots' => $page > 1 ? 'noindex, follow' : null,
            'ogImage' => route('og.profession', ['profession' => $profession->slug]),
            'ogImageAlt' => "Prompts de IA para {$profession->name}",
            'prev' => $skills->currentPage() > 1 ? $skills->previousPageUrl() : null,
            'next' => $skills->hasMorePages() ? $skills->nextPageUrl() : null,
            'fallback' => [
                'heading' => "Prompts de IA para {$profession->name}",
                'paragraphs' => array_merge(
                    [$profession->description],
                    $content['intro'] ?? []
                ),
                'links' => collect($skills->items())
                    ->mapWithKeys(fn ($skill) => [
                        $skill->title => route('skills.show', ['skill' => $skill->slug]),
                    ])
                    ->merge(collect($guides)->mapWithKeys(fn (array $g) => [$g['title'] => $g['url']]))
                    ->all(),
            ],
            'schema' => array_filter([
                Seo::organization(),
                Seo::breadcrumbs([
                    'Inicio' => route('home'),
                    'Profesiones' => route('professions.index'),
                    $profession->name => $url,
                ]),
                [
                    '@context' => 'https://schema.org',
                    '@type' => 'CollectionPage',
                    'name' => "Prompts y skills de IA para {$profession->name}",
                    'description' => $profession->description,
                    'url' => $url,
                    'inLanguage' => 'es',
                    'mainEntity' => [
                        '@type' => 'ItemList',
                        'numberOfItems' => $total,
                        'itemListElement' => collect($skills->items())->values()
                            ->map(fn ($skill, int $i) => [
                                '@type' => 'ListItem',
                                'position' => $skills->firstItem() + $i,
                                'name' => $skill->title,
                                'url' => route('skills.show', ['skill' => $skill->slug]),
                            ])->all(),
                    ],
                ],
                // El FAQPage solo se emite en la primera página, donde el bloque
                // de preguntas es visible.
                $page === 1 ? Seo::faq(ProfessionContent::faqPairs($profession->slug)) : null,
            ]),
        ]);

        return Inertia::render('Professions/Show', [
            'profession' => $profession,
            'skills' => $skills,
            'content' => $content,
            'guides' => $guides,
        ]);
    }

    /**
     * Guías relevantes para la profesión: reparte autoridad hacia el contenido
     * informativo y da una salida a quien llega al listado sin saber qué es un
     * skill. Los perfiles técnicos ven las guías de Claude Code; el resto, las
     * de prompts y automatización.
     *
     * @return array<int, array{title: string, url: string, excerpt: string}>
     */
    private function guidesFor(string $slug): array
    {
        $selection = $slug === 'desarrollo'
            ? ['que-son-los-skills-de-claude-code', 'como-crear-un-skill-para-claude-code', 'plugins-y-mcp-en-claude-code']
            : ['como-escribir-prompts-efectivos', 'automatizar-tareas-con-ia-en-el-trabajo', 'claude-vs-chatgpt-para-trabajar'];

        return collect($selection)
            ->map(fn (string $guideSlug) => Guides::find($guideSlug))
            ->filter()
            ->map(fn (array $guide) => [
                'title' => $guide['title'],
                'excerpt' => $guide['excerpt'],
                'url' => route('guides.show', ['slug' => $guide['slug']]),
            ])
            ->values()
            ->all();
    }
}
