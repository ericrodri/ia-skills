<?php

namespace App\Support;

use App\Models\Skill;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Cache;

/**
 * Rankings de /ranking: tendencia de la semana, más guardadas, más votadas de
 * siempre, novedades y autores destacados.
 *
 * Cinco consultas agregadas por visita serían caras, así que se cachean una
 * hora. Como siempre en este proyecto, solo arrays de escalares: los modelos
 * de Eloquent no sobreviven a la caché de base de datos sobre PostgreSQL.
 *
 * SkillObserver invalida el ranking global al guardar una skill; los filtrados
 * por profesión caducan solos con el TTL.
 */
class Rankings
{
    public const LIMIT = 10;

    private const TTL_MINUTES = 60;

    /**
     * @return array{trending: array<int, array<string, mixed>>, saved: array<int, array<string, mixed>>, top: array<int, array<string, mixed>>, newest: array<int, array<string, mixed>>, authors: array<int, array<string, mixed>>}
     */
    public static function for(?int $professionId = null): array
    {
        $key = 'rankings.data'.($professionId ? '.'.$professionId : '');

        return Cache::remember($key, now()->addMinutes(self::TTL_MINUTES), fn () => [
            'trending' => self::trending($professionId),
            'saved' => self::rows(self::base($professionId)->where('saves_count', '>', 0)->orderByDesc('saves_count')->orderByDesc('vote_score')),
            'top' => self::rows(self::base($professionId)->orderByDesc('vote_score')->orderByDesc('saves_count')),
            'newest' => self::rows(self::base($professionId)->orderByDesc('created_at')),
            'authors' => self::authors($professionId),
        ]);
    }

    /**
     * Skills con más votos netos emitidos en los últimos 7 días. Es la única
     * señal de "tendencia" real: vote_score acumula desde siempre y favorece a
     * las skills antiguas.
     *
     * @return array<int, array<string, mixed>>
     */
    private static function trending(?int $professionId): array
    {
        $weekly = Vote::query()
            ->where('created_at', '>=', now()->subDays(7))
            ->groupBy('skill_id')
            ->havingRaw('sum(value) > 0')
            ->selectRaw('skill_id, sum(value) as weekly_votes')
            ->orderByDesc('weekly_votes')
            ->limit(self::LIMIT * 3)
            ->pluck('weekly_votes', 'skill_id');

        if ($weekly->isEmpty()) {
            return [];
        }

        $skills = self::rows(self::base($professionId)->whereIn('id', $weekly->keys()), self::LIMIT * 3);

        return collect($skills)
            ->map(fn (array $row) => $row + ['metric' => (int) $weekly[$row['id']]])
            ->sortByDesc('metric')
            ->take(self::LIMIT)
            ->values()
            ->all();
    }

    /**
     * @return array<int, array{name: string, username: string, is_verified_expert: bool, skills: int, votes: int}>
     */
    private static function authors(?int $professionId): array
    {
        return User::query()
            ->whereNotNull('username')
            ->join('skills', 'skills.user_id', '=', 'users.id')
            ->where('skills.status', 'published')
            ->when($professionId, fn ($q) => $q->where('skills.profession_id', $professionId))
            ->groupBy('users.id', 'users.name', 'users.username', 'users.is_verified_expert')
            ->selectRaw('users.name, users.username, users.is_verified_expert, count(skills.id) as skills, coalesce(sum(skills.vote_score), 0) as votes')
            ->orderByDesc('votes')
            ->orderByDesc('skills')
            ->limit(self::LIMIT)
            ->get()
            ->map(fn ($row) => [
                'name' => $row->name,
                'username' => $row->username,
                'is_verified_expert' => (bool) $row->is_verified_expert,
                'skills' => (int) $row->skills,
                'votes' => (int) $row->votes,
            ])
            ->all();
    }

    /**
     * @return Builder<Skill>
     */
    private static function base(?int $professionId): Builder
    {
        return Skill::published()
            ->when($professionId, fn ($q) => $q->where('profession_id', $professionId))
            ->with(['profession:id,name,slug', 'author:id,name,username,is_verified_expert']);
    }

    /**
     * Mismo formato que espera SkillCard.vue.
     *
     * @param  Builder<Skill>  $query
     * @return array<int, array<string, mixed>>
     */
    private static function rows(Builder $query, int $limit = self::LIMIT): array
    {
        return $query->limit($limit)
            ->get()
            ->map(fn (Skill $skill) => [
                'id' => $skill->id,
                'slug' => $skill->slug,
                'title' => $skill->title,
                'description' => $skill->description,
                'tool_name' => $skill->tool_name,
                'difficulty' => $skill->difficulty,
                'resource_type' => $skill->resource_type,
                'estimated_minutes' => $skill->estimated_minutes,
                'vote_score' => (int) $skill->vote_score,
                'saves_count' => (int) $skill->saves_count,
                'profession' => $skill->profession ? ['name' => $skill->profession->name, 'slug' => $skill->profession->slug] : null,
                'author' => $skill->author ? [
                    'name' => $skill->author->name,
                    'username' => $skill->author->username,
                    'is_verified_expert' => (bool) $skill->author->is_verified_expert,
                ] : null,
            ])
            ->all();
    }
}
