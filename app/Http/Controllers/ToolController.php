<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Support\Seo;
use App\Support\ToolPages;
use Inertia\Inertia;
use Inertia\Response;

/**
 * /herramientas — prompts por IA (Gemini, ChatGPT, Claude). Ver App\Support\ToolPages.
 */
class ToolController extends Controller
{
    public function index(): Response
    {
        $tools = collect(ToolPages::all())->map(fn (array $p) => [
            'slug' => $p['slug'],
            'name' => $p['name'],
            'heading' => $p['heading'],
            'description' => $p['description'],
            'url' => route('tools.show', ['slug' => $p['slug']]),
            'count' => $count = ToolPages::count($p),
            'countLabel' => number_format($count, 0, ',', '.'),
        ])->values()->all();

        Seo::share([
            'title' => 'Prompts por herramienta: Gemini, ChatGPT y Claude',
            'description' => 'Prompts en español para cada asistente de IA: Gemini para editar fotos, ChatGPT para imágenes y textos, Claude para el trabajo de cada profesión.',
            'canonical' => route('tools.index'),
            'fallback' => [
                'heading' => 'Prompts por herramienta',
                'paragraphs' => ['Prompts de IA en español agrupados por el asistente para el que están escritos.'],
                'links' => collect($tools)->mapWithKeys(fn (array $t) => [$t['heading'] => $t['url']])->all(),
            ],
            'schema' => [
                Seo::organization(),
                Seo::breadcrumbs([
                    'Inicio' => route('home'),
                    'Herramientas' => route('tools.index'),
                ]),
            ],
        ]);

        return Inertia::render('Tools/Index', ['tools' => $tools]);
    }

    public function show(string $slug): Response
    {
        $page = ToolPages::find($slug);

        abort_if($page === null, 404);

        $count = ToolPages::count($page);
        $skills = ToolPages::skills($page);
        $listed = $skills['images']->concat($skills['others']);

        abort_if($listed->isEmpty(), 404);

        $url = route('tools.show', ['slug' => $slug]);
        $skillUrl = fn (Skill $s) => route('skills.show', ['skill' => $s->slug]);

        Seo::share([
            'title' => str_replace(':count', (string) $count, $page['seoTitle']),
            'description' => $page['description'],
            'canonical' => $url,
            'fallback' => [
                'heading' => $page['heading'],
                'paragraphs' => [$page['description'], ...$page['intro']],
                'links' => $listed->mapWithKeys(fn (Skill $s) => [$s->title => $skillUrl($s)])->all(),
            ],
            'schema' => [
                Seo::organization(),
                Seo::breadcrumbs([
                    'Inicio' => route('home'),
                    'Herramientas' => route('tools.index'),
                    $page['heading'] => $url,
                ]),
                [
                    '@context' => 'https://schema.org',
                    '@type' => 'CollectionPage',
                    'name' => $page['heading'],
                    'description' => $page['description'],
                    'url' => $url,
                    'inLanguage' => 'es',
                    'mainEntity' => [
                        '@type' => 'ItemList',
                        'numberOfItems' => $listed->count(),
                        'itemListElement' => $listed->values()->map(fn (Skill $s, int $i) => [
                            '@type' => 'ListItem',
                            'position' => $i + 1,
                            'name' => $s->title,
                            'url' => $skillUrl($s),
                        ])->all(),
                    ],
                ],
                [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => collect($page['faq'])->map(fn (array $f) => [
                        '@type' => 'Question',
                        'name' => $f['q'],
                        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
                    ])->all(),
                ],
            ],
        ]);

        return Inertia::render('Tools/Show', [
            'tool' => [
                'slug' => $page['slug'],
                'name' => $page['name'],
                'toolName' => $page['tool_name'],
                'heading' => $page['heading'],
                'description' => $page['description'],
                'intro' => $page['intro'],
                'faq' => $page['faq'],
                'count' => $count,
                'countLabel' => number_format($count, 0, ',', '.'),
            ],
            'images' => $skills['images'],
            'others' => $skills['others'],
            'otherTools' => collect(ToolPages::all())
                ->reject(fn (array $p) => $p['slug'] === $slug)
                ->map(fn (array $p) => ['name' => $p['heading'], 'url' => route('tools.show', ['slug' => $p['slug']])])
                ->values()
                ->all(),
        ]);
    }
}
