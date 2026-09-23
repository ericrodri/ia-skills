<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\User;
use App\Support\Seo;
use Inertia\Inertia;
use Inertia\Response;

/**
 * Perfil público de autor: /autores/{username}.
 *
 * Da crédito a quien contribuye (el principal incentivo para que alguien
 * comparta una skill) y es la base de los rankings de autores. Un perfil sin
 * skills publicadas es contenido vacío, así que va noindex hasta que publique.
 */
class AuthorController extends Controller
{
    public function show(User $user): Response
    {
        $skills = $user->skills()
            ->published()
            ->with('profession:id,name,slug')
            ->withCount('comments')
            ->orderByDesc('vote_score')
            ->paginate(20)
            ->withQueryString();

        $totals = Skill::published()
            ->where('user_id', $user->id)
            ->selectRaw('count(*) as skills, coalesce(sum(vote_score), 0) as votes, coalesce(sum(saves_count), 0) as saves')
            ->first();

        $stats = [
            'skills' => (int) $totals->skills,
            'votes' => (int) $totals->votes,
            'saves' => (int) $totals->saves,
        ];

        $url = route('authors.show', ['user' => $user->username]);
        $page = $skills->currentPage();

        Seo::share([
            'title' => $page > 1
                ? "Skills de IA de {$user->name} · página {$page}"
                : "{$user->name}: {$stats['skills']} skills de IA publicadas",
            'description' => $user->bio
                ?: "Prompts y skills de IA publicados por {$user->name} en ia-skills: {$stats['skills']} recursos y {$stats['votes']} votos de la comunidad.",
            'canonical' => $page > 1 ? $url.'?page='.$page : $url,
            'robots' => $stats['skills'] === 0 || $page > 1 ? 'noindex, follow' : null,
            'ogType' => 'profile',
            'prev' => $page > 1 ? $skills->previousPageUrl() : null,
            'next' => $skills->hasMorePages() ? $skills->nextPageUrl() : null,
            'fallback' => [
                'heading' => $user->name,
                'paragraphs' => array_filter([
                    $user->bio,
                    "{$stats['skills']} skills publicadas · {$stats['votes']} votos · {$stats['saves']} guardadas.",
                ]),
                'links' => collect($skills->items())
                    ->mapWithKeys(fn (Skill $skill) => [$skill->title => route('skills.show', ['skill' => $skill->slug])])
                    ->all(),
            ],
            'schema' => [
                Seo::organization(),
                Seo::breadcrumbs([
                    'Inicio' => route('home'),
                    'Ranking' => route('rankings.index'),
                    $user->name => $url,
                ]),
                [
                    '@context' => 'https://schema.org',
                    '@type' => 'ProfilePage',
                    'url' => $url,
                    'inLanguage' => 'es',
                    'dateCreated' => $user->created_at?->toAtomString(),
                    'mainEntity' => array_filter([
                        '@type' => 'Person',
                        'name' => $user->name,
                        'alternateName' => $user->username,
                        'description' => $user->bio ? Seo::clean($user->bio) : null,
                        'url' => $url,
                        'interactionStatistic' => [
                            '@type' => 'InteractionCounter',
                            'interactionType' => 'https://schema.org/WriteAction',
                            'userInteractionCount' => $stats['skills'],
                        ],
                    ]),
                ],
            ],
        ]);

        return Inertia::render('Authors/Show', [
            'author' => $user->only(['id', 'name', 'username', 'bio', 'avatar', 'reputation', 'is_verified_expert', 'created_at']),
            'stats' => $stats,
            'skills' => $skills,
        ]);
    }
}
