<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use App\Models\Skill;
use App\Support\Collections;
use App\Support\Seo;
use App\Support\SiteData;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    /**
     * Bloque «¿Qué es una skill de IA?»: responde a la intención informativa
     * de «skill ia» sin crear una página aparte que compita con la home. Se
     * pasa como prop para que el texto visible y el del fallback sean el mismo.
     */
    private const WHAT_IS_A_SKILL = [
        'Una skill de IA es un procedimiento reutilizable que le explica a un asistente como Claude, ChatGPT o Gemini cómo hacer una tarea concreta de tu trabajo: qué contexto necesita, qué pasos seguir y qué formato debe tener el resultado. Un prompt resuelve una petición; una skill convierte esa petición en un método que puedes repetir cada semana con el mismo nivel de calidad.',
        'En ia-skills reunimos skills y prompts escritos por profesionales de marketing, desarrollo, diseño, ventas, RRHH, finanzas o legal. La comunidad los vota, así que los más útiles suben arriba. Puedes copiarlos gratis y sin registro, o descargarlos como SKILL.md para usarlos en Claude Code.',
    ];

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

        // La home es la que recibe las búsquedas de marca y sus variantes
        // («ia skills», «skills ia», «skill ia», «skills de ia»): el title y
        // el H1 empiezan por el término exacto, y el title lleva el nombre del
        // sitio para que Seo::normalize no le añada el sufijo por duplicado.
        Seo::share([
            'title' => 'ia-skills: skills y prompts de IA para profesionales',
            'description' => "IA Skills: {$count} skills de IA y prompts gratis, organizados por profesión y votados por la comunidad. Úsalos en Claude, ChatGPT o Gemini sin registrarte.",
            'canonical' => route('home'),
            'fallback' => [
                'heading' => 'Skills de IA y prompts que usan los mejores profesionales',
                'paragraphs' => [
                    'Skills reales, workflows y prompts validados por la comunidad. Organizados por profesión, listos para usar.',
                    ...self::WHAT_IS_A_SKILL,
                ],
                // toBase(): merge() de una colección Eloquent espera modelos y
                // falla con los pares [texto => url].
                'links' => $professions->toBase()->mapWithKeys(fn (Profession $p) => [
                    "Prompts de IA para {$p->name}" => route('professions.show', ['profession' => $p->slug]),
                ])->merge(
                    $topSkills->mapWithKeys(fn (Skill $skill) => [
                        $skill->title => route('skills.show', ['skill' => $skill->slug]),
                    ])
                )->merge([
                    'Qué son los skills de Claude Code' => route('guides.show', ['slug' => 'que-son-los-skills-de-claude-code']),
                    'Prompts de IA por profesión' => route('guides.show', ['slug' => 'prompts-de-ia-por-profesion']),
                ])->all(),
            ],
            'schema' => [
                Seo::organization(),
                [
                    '@context' => 'https://schema.org',
                    '@type' => 'WebSite',
                    '@id' => url('/').'#website',
                    'name' => Seo::SITE_NAME,
                    // Variantes con las que la gente busca la marca: ayudan a
                    // Google a asociarlas con el nombre del sitio en la SERP.
                    'alternateName' => ['IA Skills', 'iaskills', 'ia-skills.com'],
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

        $professionNames = $professions->pluck('name', 'slug');

        return Inertia::render('Welcome', [
            'professions' => $professions,
            'topSkills' => $topSkills,
            'whatIsASkill' => self::WHAT_IS_A_SKILL,
            'collections' => collect(Collections::all())
                ->take(3)
                ->map(fn (array $c) => [
                    'slug' => $c['slug'],
                    'title' => $c['title'],
                    'description' => $c['description'],
                    'url' => route('collections.show', ['slug' => $c['slug']]),
                    'count' => count($c['skills'] ?? []),
                    'profession' => $professionNames[$c['profession'] ?? ''] ?? null,
                ])
                ->values()
                ->all(),
        ]);
    }
}
