<?php

namespace App\Support;

use App\Models\Skill;
use Illuminate\Support\Carbon;

/**
 * Contenido del resumen semanal: skills publicadas y guías nuevas o
 * actualizadas en los últimos 7 días.
 *
 * Se calcula una vez por envío y se reparte a todos los suscriptores, así que
 * devuelve arrays planos: el Mailable no necesita tocar la base de datos.
 */
class WeeklyDigest
{
    public const MAX_SKILLS = 8;

    /**
     * En semanas de mucha publicación (la del lanzamiento tuvo 35 guías) el
     * email se volvía interminable: se muestran las más recientes y un enlace
     * al índice con el resto.
     */
    public const MAX_GUIDES = 5;

    /**
     * @return array{since: string, skills: array<int, array<string, mixed>>, guides: array<int, array<string, mixed>>, more_guides: int, total_new: int}
     */
    public static function build(?Carbon $since = null): array
    {
        $since ??= now()->subDays(7);

        // "Publicadas esta semana" se mide por reviewed_at (cuándo se aprobó)
        // y, para las importadas sin revisión, por created_at.
        $query = Skill::published()
            ->where(fn ($q) => $q->where('reviewed_at', '>=', $since)
                ->orWhere(fn ($q) => $q->whereNull('reviewed_at')->where('created_at', '>=', $since)));

        $totalNew = (clone $query)->count();

        $skills = $query
            ->with('profession:id,name,slug')
            ->orderByDesc('vote_score')
            ->orderByDesc('created_at')
            ->limit(self::MAX_SKILLS)
            ->get()
            ->map(fn (Skill $skill) => [
                'title' => $skill->title,
                'description' => Seo::clean($skill->description),
                'profession' => $skill->profession?->name,
                'url' => route('skills.show', ['skill' => $skill->slug]),
            ])
            ->all();

        $recentGuides = collect(Guides::all())
            ->filter(fn (array $guide) => Carbon::parse($guide['updated'])->gte($since->copy()->startOfDay()))
            // Lo más reciente primero, no el orden editorial de Guides.
            ->sortByDesc(fn (array $guide) => $guide['updated'])
            ->values();

        $guides = $recentGuides
            ->take(self::MAX_GUIDES)
            ->map(fn (array $guide) => [
                'title' => $guide['title'],
                'excerpt' => $guide['excerpt'],
                'is_new' => Carbon::parse($guide['published'] ?? $guide['updated'])->gte($since->copy()->startOfDay()),
                'url' => route('guides.show', ['slug' => $guide['slug']]),
            ])
            ->all();

        return [
            'since' => $since->toDateString(),
            'skills' => $skills,
            'guides' => $guides,
            'more_guides' => max(0, $recentGuides->count() - self::MAX_GUIDES),
            'total_new' => $totalNew,
        ];
    }

    /**
     * @param  array{skills: array<int, mixed>, guides: array<int, mixed>}  $digest
     */
    public static function isEmpty(array $digest): bool
    {
        return $digest['skills'] === [] && $digest['guides'] === [];
    }
}
