<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use App\Support\Rankings;
use App\Support\Seo;
use App\Support\SiteData;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

/**
 * /ranking — lo más votado, guardado y en tendencia.
 *
 * La versión global se indexa. La filtrada por profesión (?profesion=) es una
 * vista casi idéntica a la landing de esa profesión (que ya ordena por votos),
 * así que va noindex/follow con canónica al ranking global.
 */
class RankingController extends Controller
{
    public function index(Request $request): Response
    {
        $professions = SiteData::professions();
        $selected = collect($professions)->firstWhere('slug', $request->query('profesion'));
        $professionId = $selected
            ? Profession::where('slug', $selected['slug'])->value('id')
            : null;

        $rankings = Rankings::for($professionId);

        $title = $selected
            ? "Ranking de prompts de IA para {$selected['name']}"
            : 'Ranking de prompts y skills de IA: lo más votado y guardado';

        $description = $selected
            ? "Las skills de IA para {$selected['name']} más votadas, guardadas y en tendencia esta semana."
            : 'Las skills de IA en tendencia esta semana, las más guardadas, las más votadas de siempre y los autores que más aportan a la comunidad.';

        Seo::share([
            'title' => $title,
            'description' => $description,
            'canonical' => route('rankings.index'),
            'robots' => $selected ? 'noindex, follow' : null,
            'fallback' => [
                'heading' => $title,
                'paragraphs' => [$description],
                'links' => collect($rankings['top'])
                    ->mapWithKeys(fn (array $skill) => [$skill['title'] => route('skills.show', ['skill' => $skill['slug']])])
                    ->merge(collect($rankings['authors'])->mapWithKeys(fn (array $a) => [
                        "Perfil de {$a['name']}" => route('authors.show', ['user' => $a['username']]),
                    ]))
                    ->all(),
            ],
            'schema' => [
                Seo::organization(),
                Seo::breadcrumbs([
                    'Inicio' => route('home'),
                    'Ranking' => route('rankings.index'),
                ]),
                [
                    '@context' => 'https://schema.org',
                    '@type' => 'ItemList',
                    'name' => 'Skills de IA más votadas',
                    'itemListOrder' => 'https://schema.org/ItemListOrderDescending',
                    'numberOfItems' => count($rankings['top']),
                    'itemListElement' => collect($rankings['top'])->values()->map(fn (array $skill, int $i) => [
                        '@type' => 'ListItem',
                        'position' => $i + 1,
                        'name' => $skill['title'],
                        'url' => route('skills.show', ['skill' => $skill['slug']]),
                    ])->all(),
                ],
            ],
        ]);

        return Inertia::render('Rankings/Index', [
            'rankings' => $rankings,
            'professions' => $professions,
            'selectedProfession' => $selected['slug'] ?? null,
        ]);
    }
}
