<?php

namespace App\Http\Controllers;

use App\Support\Guides;
use App\Support\Seo;
use App\Support\SiteData;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;

/**
 * Guías editoriales: contenido informativo servido como HTML plano.
 *
 * Es la capa de contenido que ataca las búsquedas de intención informativa
 * ("qué es un skill de Claude Code", "cómo escribir prompts") y que enlaza
 * hacia el catálogo, donde vive la intención transaccional.
 */
class GuideController extends Controller
{
    public function index(): View
    {
        $guides = Guides::all();
        $count = SiteData::skillsCountLabel();

        Seo::share([
            'title' => 'Guías de IA para profesionales: skills, prompts y automatización',
            'description' => "Guías prácticas para usar la IA en tu trabajo: qué es un skill, qué es un agente de IA, cómo escribir prompts que funcionan y qué prompts usar en cada profesión.",
            'canonical' => route('guides.index'),
            'ogImage' => route('og.default'),
            'schema' => [
                Seo::organization(),
                Seo::breadcrumbs([
                    'Inicio' => route('home'),
                    'Guías' => route('guides.index'),
                ]),
                [
                    '@context' => 'https://schema.org',
                    '@type' => 'CollectionPage',
                    'name' => 'Guías de IA para profesionales',
                    'url' => route('guides.index'),
                    'inLanguage' => 'es',
                    'mainEntity' => [
                        '@type' => 'ItemList',
                        'numberOfItems' => count($guides),
                        'itemListElement' => collect($guides)->values()->map(fn (array $guide, int $i) => [
                            '@type' => 'ListItem',
                            'position' => $i + 1,
                            'name' => $guide['title'],
                            'url' => route('guides.show', ['slug' => $guide['slug']]),
                        ])->all(),
                    ],
                ],
            ],
        ]);

        return view('guides.index', [
            'guides' => $guides,
            'skillsCount' => $count,
            'footerProfessions' => SiteData::professions(),
        ]);
    }

    public function show(string $slug): View
    {
        $guide = Guides::find($slug);

        abort_if($guide === null, 404);

        $url = route('guides.show', ['slug' => $slug]);
        $published = Carbon::parse($guide['published'] ?? $guide['updated'])->toAtomString();
        $updated = Carbon::parse($guide['updated'])->toAtomString();

        Seo::share([
            'title' => $guide['seoTitle'] ?? $guide['title'],
            'description' => $guide['description'],
            'canonical' => $url,
            'ogType' => 'article',
            'ogImage' => route('og.default'),
            'schema' => array_filter([
                Seo::organization(),
                Seo::breadcrumbs([
                    'Inicio' => route('home'),
                    'Guías' => route('guides.index'),
                    $guide['navTitle'] ?? $guide['title'] => $url,
                ]),
                array_filter([
                    '@context' => 'https://schema.org',
                    '@type' => 'Article',
                    'headline' => $guide['title'],
                    'description' => $guide['description'],
                    'inLanguage' => 'es',
                    'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $url],
                    'datePublished' => $published,
                    'dateModified' => $updated,
                    'author' => ['@type' => 'Organization', 'name' => Seo::SITE_NAME, 'url' => url('/')],
                    'publisher' => ['@id' => url('/').'#organization'],
                    'about' => $guide['about'] ?? null,
                    'wordCount' => $guide['words'] ?? null,
                ]),
                Seo::faq($guide['faq'] ?? []),
            ]),
        ]);

        return view('guides.show', [
            'guide' => $guide,
            'related' => Guides::related($guide),
            'skillsCount' => SiteData::skillsCountLabel(),
            'footerProfessions' => SiteData::professions(),
        ]);
    }
}
