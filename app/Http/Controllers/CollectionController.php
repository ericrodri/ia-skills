<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Support\Collections;
use App\Support\Seo;
use App\Support\SiteData;
use App\Support\SkillMarkdown;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Inertia\Inertia;
use Inertia\Response;

/**
 * /colecciones — packs temáticos de skills curados (ver App\Support\Collections).
 */
class CollectionController extends Controller
{
    public function index(): Response
    {
        $collections = collect(Collections::all())
            ->map(fn (array $c) => $this->summary($c))
            ->values()
            ->all();

        Seo::share([
            'title' => 'Colecciones de prompts de IA: packs por profesión y tarea',
            'description' => 'Packs de skills de IA seleccionados a mano para un objetivo concreto: SEO, ventas, contratos, onboarding, tesorería… Instálalos de una vez o cópialos uno a uno.',
            'canonical' => route('collections.index'),
            'fallback' => [
                'heading' => 'Colecciones de skills de IA',
                'paragraphs' => ['Packs temáticos de prompts y skills seleccionados para resolver un objetivo de principio a fin.'],
                'links' => collect($collections)->mapWithKeys(fn (array $c) => [$c['title'] => $c['url']])->all(),
            ],
            'schema' => [
                Seo::organization(),
                Seo::breadcrumbs([
                    'Inicio' => route('home'),
                    'Colecciones' => route('collections.index'),
                ]),
                [
                    '@context' => 'https://schema.org',
                    '@type' => 'CollectionPage',
                    'name' => 'Colecciones de skills de IA',
                    'url' => route('collections.index'),
                    'inLanguage' => 'es',
                    'mainEntity' => [
                        '@type' => 'ItemList',
                        'numberOfItems' => count($collections),
                        'itemListElement' => collect($collections)->values()->map(fn (array $c, int $i) => [
                            '@type' => 'ListItem',
                            'position' => $i + 1,
                            'name' => $c['title'],
                            'url' => $c['url'],
                        ])->all(),
                    ],
                ],
            ],
        ]);

        return Inertia::render('Collections/Index', [
            'collections' => $collections,
        ]);
    }

    public function show(string $slug): Response
    {
        $collection = Collections::find($slug);

        abort_if($collection === null, 404);

        $skills = $this->skillsOf($collection);

        abort_if($skills->isEmpty(), 404);

        $url = route('collections.show', ['slug' => $slug]);
        $profession = collect(SiteData::professions())->firstWhere('slug', $collection['profession'] ?? null);

        Seo::share([
            'title' => $collection['title'].': '.$skills->count().' prompts de IA',
            'description' => $collection['description'],
            'canonical' => $url,
            'ogImage' => $profession
                ? route('og.profession', ['profession' => $profession['slug']])
                : route('og.default'),
            'fallback' => [
                'heading' => $collection['title'],
                'paragraphs' => [$collection['description'], $collection['intro']],
                'links' => $skills->mapWithKeys(fn (Skill $s) => [$s->title => route('skills.show', ['skill' => $s->slug])])->all(),
            ],
            'schema' => [
                Seo::organization(),
                Seo::breadcrumbs([
                    'Inicio' => route('home'),
                    'Colecciones' => route('collections.index'),
                    $collection['title'] => $url,
                ]),
                [
                    '@context' => 'https://schema.org',
                    '@type' => 'CollectionPage',
                    'name' => $collection['title'],
                    'description' => $collection['description'],
                    'url' => $url,
                    'inLanguage' => 'es',
                    'mainEntity' => [
                        '@type' => 'ItemList',
                        'itemListOrder' => 'https://schema.org/ItemListOrderAscending',
                        'numberOfItems' => $skills->count(),
                        'itemListElement' => $skills->values()->map(fn (Skill $s, int $i) => [
                            '@type' => 'ListItem',
                            'position' => $i + 1,
                            'name' => $s->title,
                            'url' => route('skills.show', ['skill' => $s->slug]),
                        ])->all(),
                    ],
                ],
            ],
        ]);

        return Inertia::render('Collections/Show', [
            'collection' => [
                'slug' => $collection['slug'],
                'title' => $collection['title'],
                'description' => $collection['description'],
                'intro' => $collection['intro'],
                'profession' => $profession,
            ],
            'skills' => $skills->values(),
            // Una línea por skill: se puede pegar entera o ejecutar solo las
            // que interesen.
            'installScript' => $skills->map(fn (Skill $s) => SkillMarkdown::installCommand($s))->implode("\n"),
            'installPrompt' => SkillMarkdown::installPrompt($skills),
            'others' => collect(Collections::all())
                ->reject(fn (array $c) => $c['slug'] === $slug)
                ->take(3)
                ->map(fn (array $c) => $this->summary($c))
                ->values()
                ->all(),
        ]);
    }

    /**
     * Skills publicadas del pack, en el orden en que las declara el JSON.
     *
     * @param  array<string, mixed>  $collection
     * @return EloquentCollection<int, Skill>
     */
    private function skillsOf(array $collection): EloquentCollection
    {
        $order = array_flip($collection['skills'] ?? []);

        return Skill::published()
            ->whereIn('slug', $collection['skills'] ?? [])
            ->with(['profession:id,name,slug', 'author:id,name,username,is_verified_expert'])
            ->withCount('comments')
            ->get()
            ->sortBy(fn (Skill $s) => $order[$s->slug] ?? PHP_INT_MAX)
            ->values();
    }

    /**
     * @param  array<string, mixed>  $collection
     * @return array{slug: string, title: string, description: string, url: string, count: int, profession: ?string}
     */
    private function summary(array $collection): array
    {
        $profession = collect(SiteData::professions())->firstWhere('slug', $collection['profession'] ?? null);

        return [
            'slug' => $collection['slug'],
            'title' => $collection['title'],
            'description' => $collection['description'],
            'url' => route('collections.show', ['slug' => $collection['slug']]),
            'count' => count($collection['skills'] ?? []),
            'profession' => $profession['name'] ?? null,
        ];
    }
}
