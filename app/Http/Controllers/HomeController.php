<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use App\Models\Skill;
use App\Support\Seo;
use App\Support\SiteData;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function __invoke(): Response
    {
        $professions = Profession::where('is_active', true)
            ->withCount(['skills as skills_count' => fn ($q) => $q->where('status', 'published')])
            ->orderBy('sort_order')
            ->get(['id', 'name', 'slug', 'icon']);

        $topSkills = Skill::published()
            ->with(['profession:id,name,slug', 'author:id,name,username,is_verified_expert'])
            ->withCount('comments')
            ->orderByDesc('vote_score')
            ->limit(5)
            ->get();

        $count = SiteData::skillsCountLabel();

        Seo::share([
            'title' => 'Prompts y skills de IA para profesionales',
            'description' => "{$count} prompts y skills de IA validados por la comunidad y organizados por profesión. Cópialos y úsalos en Claude, ChatGPT o Gemini. Gratis y sin registro.",
            'canonical' => route('home'),
            'fallback' => [
                'heading' => 'Descubre cómo los mejores profesionales usan IA',
                'paragraphs' => [
                    'Skills reales, workflows y prompts validados por la comunidad. Organizados por profesión, listos para usar.',
                ],
                'links' => $professions->mapWithKeys(fn (Profession $p) => [
                    "Prompts de IA para {$p->name}" => route('professions.show', ['profession' => $p->slug]),
                ])->merge(
                    $topSkills->mapWithKeys(fn (Skill $skill) => [
                        $skill->title => route('skills.show', ['skill' => $skill->slug]),
                    ])
                )->all(),
            ],
            'schema' => [
                Seo::organization(),
                [
                    '@context' => 'https://schema.org',
                    '@type' => 'WebSite',
                    '@id' => url('/').'#website',
                    'name' => Seo::SITE_NAME,
                    'alternateName' => 'ia-skills.com',
                    'url' => url('/'),
                    'inLanguage' => 'es',
                    'description' => 'Biblioteca colaborativa de prompts y skills de IA para profesionales, organizada por profesión.',
                    'publisher' => ['@id' => url('/').'#organization'],
                    'potentialAction' => [
                        '@type' => 'SearchAction',
                        'target' => [
                            '@type' => 'EntryPoint',
                            'urlTemplate' => route('skills.index').'?q={search_term_string}',
                        ],
                        'query-input' => 'required name=search_term_string',
                    ],
                ],
                [
                    '@context' => 'https://schema.org',
                    '@type' => 'ItemList',
                    'name' => 'Skills de IA mejor valoradas',
                    'itemListOrder' => 'https://schema.org/ItemListOrderDescending',
                    'numberOfItems' => $topSkills->count(),
                    'itemListElement' => $topSkills->values()->map(fn (Skill $skill, int $i) => [
                        '@type' => 'ListItem',
                        'position' => $i + 1,
                        'name' => $skill->title,
                        'url' => route('skills.show', ['skill' => $skill->slug]),
                    ])->all(),
                ],
            ],
        ]);

        return Inertia::render('Welcome', [
            'professions' => $professions,
            'topSkills' => $topSkills,
        ]);
    }
}
