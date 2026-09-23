<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use App\Support\Collections;
use App\Support\ProfessionContent;
use App\Support\ProfessionTasks;
use App\Support\RelatedContent;
use App\Support\Seo;
use App\Support\SiteData;
use App\Support\SkillSearch;
use Illuminate\Http\Request;
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

    public function show(Request $request, Profession $profession): Response
    {
        $profession->loadCount(['skills as skills_count' => fn ($q) => $q->where('status', 'published')]);

        $search = trim((string) $request->query('q', ''));

        $query = $profession->publishedSkills()
            ->with('author:id,name,username,avatar,is_verified_expert')
            ->withCount('comments');

        // La consulta ya está acotada a esta profesión, así que no se busca
        // también por su nombre: coincidiría con todas las skills del listado.
        if (! SkillSearch::apply($query, $search)) {
            $query->orderByDesc('vote_score');
        }

        $skills = $query->paginate(20)->withQueryString();

        $content = ProfessionContent::for($profession->slug);
        $guides = $this->guidesFor($profession->slug);
        $tasks = $this->indexableTasks($profession);
        $url = route('professions.show', ['profession' => $profession->slug]);
        $page = $skills->currentPage();
        $total = $profession->skills_count;

        $title = match (true) {
            $search !== '' => "«{$search}» en prompts de IA para {$profession->name}",
            $page > 1      => "Prompts de IA para {$profession->name} · página {$page}",
            default        => "Prompts de IA para {$profession->name}: {$total} skills probadas",
        };

        Seo::share([
            'title' => $title,
            'description' => "{$total} prompts y skills de IA para {$profession->name}, ordenados por los votos de la comunidad. Copia, personaliza y ejecuta en Claude, ChatGPT o Gemini.",
            // Una búsqueda es una vista filtrada de esta misma página, no una
            // URL propia: su canónica apunta al listado limpio.
            'canonical' => $search === '' && $page > 1 ? $url.'?page='.$page : $url,
            // Las páginas 2+ del listado y los resultados de búsqueda no aportan
            // contenido único indexable, pero sí enlazan a fichas: se rastrean,
            // no se indexan.
            'robots' => $search !== '' || $page > 1 ? 'noindex, follow' : null,
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
                    ->merge(collect($tasks)->mapWithKeys(fn (array $t) => [ucfirst($t['name']).' con IA para '.$profession->name => $t['url']]))
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
                // El FAQPage solo se emite en la primera página del listado sin
                // filtrar, que es la vista canónica de la profesión.
                $page === 1 && $search === ''
                    ? Seo::faq(ProfessionContent::faqPairs($profession->slug))
                    : null,
            ]),
        ]);

        return Inertia::render('Professions/Show', [
            'profession' => $profession,
            'skills' => $skills,
            'content' => $content,
            'guides' => $guides,
            'filters' => ['q' => $search],
            'tasks' => $tasks,
            'collections' => collect(Collections::forProfession($profession->slug))
                ->map(fn (array $c) => [
                    'title' => $c['title'],
                    'description' => $c['description'],
                    'url' => route('collections.show', ['slug' => $c['slug']]),
                ])
                ->all(),
        ]);
    }

    /**
     * Landing "profesión × tarea": /profesiones/{profesion}/{tarea}.
     *
     * El copy sale de resources/data/profession-tasks.json y el listado, de
     * las skills que mencionan la tarea (ver App\Support\ProfessionTasks).
     */
    public function task(Request $request, Profession $profession, string $task): Response
    {
        $definition = ProfessionTasks::find($profession->slug, $task);

        abort_if($definition === null, 404);

        $query = $profession->publishedSkills()
            ->with('author:id,name,username,avatar,is_verified_expert')
            ->withCount('comments');

        ProfessionTasks::apply($query, $definition);

        $skills = $query->orderByDesc('vote_score')->paginate(20)->withQueryString();

        $url = route('professions.task', ['profession' => $profession->slug, 'task' => $task]);
        $page = $skills->currentPage();
        $total = $skills->total();
        $thin = $total < ProfessionTasks::MIN_SKILLS;

        $title = $page > 1
            ? "{$definition['heading']} ({$profession->name}) · página {$page}"
            : "{$definition['heading']}: {$total} skills para {$profession->name}";

        Seo::share([
            'title' => $title,
            'description' => $definition['intro'],
            'canonical' => $page > 1 ? $url.'?page='.$page : $url,
            'robots' => $thin || $page > 1 ? 'noindex, follow' : null,
            'ogImage' => route('og.profession', ['profession' => $profession->slug]),
            'ogImageAlt' => $definition['heading'],
            'prev' => $page > 1 ? $skills->previousPageUrl() : null,
            'next' => $skills->hasMorePages() ? $skills->nextPageUrl() : null,
            'fallback' => [
                'heading' => $definition['heading'],
                'paragraphs' => [$definition['intro']],
                'links' => collect($skills->items())
                    ->mapWithKeys(fn ($skill) => [$skill->title => route('skills.show', ['skill' => $skill->slug])])
                    ->merge(["Todos los prompts de IA para {$profession->name}" => route('professions.show', ['profession' => $profession->slug])])
                    ->all(),
            ],
            'schema' => [
                Seo::organization(),
                Seo::breadcrumbs([
                    'Inicio' => route('home'),
                    'Profesiones' => route('professions.index'),
                    $profession->name => route('professions.show', ['profession' => $profession->slug]),
                    ucfirst($definition['name']) => $url,
                ]),
                [
                    '@context' => 'https://schema.org',
                    '@type' => 'CollectionPage',
                    'name' => $definition['heading'],
                    'description' => $definition['intro'],
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
            ],
        ]);

        return Inertia::render('Professions/Task', [
            'profession' => $profession->only(['id', 'name', 'slug']),
            'task' => collect($definition)->only(['slug', 'name', 'heading', 'intro'])->all(),
            'skills' => $skills,
            'siblings' => collect($this->indexableTasks($profession))
                ->reject(fn (array $t) => $t['slug'] === $task)
                ->values()
                ->all(),
            'guides' => RelatedContent::guidesForProfession($profession->slug, 2),
        ]);
    }

    /**
     * Tareas de la profesión con suficientes skills para tener landing propia.
     *
     * @return array<int, array{slug: string, name: string, url: string, count: int}>
     */
    private function indexableTasks(Profession $profession): array
    {
        $counts = ProfessionTasks::counts($profession->id, $profession->slug);

        return collect(ProfessionTasks::for($profession->slug))
            ->filter(fn (array $t) => ($counts[$t['slug']] ?? 0) >= ProfessionTasks::MIN_SKILLS)
            ->map(fn (array $t) => [
                'slug' => $t['slug'],
                'name' => $t['name'],
                'url' => route('professions.task', ['profession' => $profession->slug, 'task' => $t['slug']]),
                'count' => $counts[$t['slug']],
            ])
            ->values()
            ->all();
    }

    /**
     * Guías relevantes para la profesión: reparte autoridad hacia el contenido
     * informativo y da una salida a quien llega al listado sin saber qué es un
     * skill. El mapa guía ↔ profesión vive en RelatedContent, que es también
     * el que decide qué guías salen en cada ficha.
     *
     * @return array<int, array{slug: string, title: string, url: string, excerpt: string}>
     */
    private function guidesFor(string $slug): array
    {
        return RelatedContent::guidesForProfession($slug);
    }
}
