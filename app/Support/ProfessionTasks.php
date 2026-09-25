<?php

namespace App\Support;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Cache;

/**
 * Landings "profesión × tarea": /profesiones/marketing/seo, /profesiones/legal/contratos…
 *
 * SEO programático, pero con contenido real detrás: cada landing tiene copy
 * propio en resources/data/profession-tasks.json y lista skills que de verdad
 * tratan esa tarea (las que mencionan alguno de sus términos en el título o la
 * descripción). Si una combinación no reúne MIN_SKILLS se sirve igualmente,
 * pero noindex y fuera del sitemap: una landing con dos fichas es contenido
 * pobre que resta más de lo que suma.
 */
class ProfessionTasks
{
    public const MIN_SKILLS = 8;

    /** @var array<string, array<int, array<string, mixed>>>|null */
    private static ?array $cache = null;

    /**
     * @return array<int, array{slug: string, name: string, heading: string, intro: string, terms: array<int, string>, seoTitle?: string, description?: string}>
     */
    public static function for(string $professionSlug): array
    {
        return self::all()[$professionSlug] ?? [];
    }

    /**
     * @return array{slug: string, name: string, heading: string, intro: string, terms: array<int, string>, seoTitle?: string, description?: string}|null
     */
    public static function find(string $professionSlug, string $taskSlug): ?array
    {
        return collect(self::for($professionSlug))->firstWhere('slug', $taskSlug);
    }

    /**
     * Restringe $query a las skills que tratan la tarea.
     *
     * @param  Builder<Skill>|Relation  $query
     * @param  array{terms: array<int, string>}  $task
     */
    public static function apply($query, array $task): void
    {
        $query->where(function ($q) use ($task) {
            foreach ($task['terms'] as $i => $term) {
                RelatedContent::whereContains($q, $term, $i === 0 ? 'and' : 'or');
            }
        });
    }

    /**
     * Número de skills de cada tarea de la profesión, para decidir qué
     * landings se indexan y se enlazan. Cacheado como array de enteros.
     *
     * @return array<string, int>
     */
    public static function counts(int $professionId, string $professionSlug): array
    {
        return Cache::remember("profession-tasks.counts.{$professionSlug}", now()->addHours(6), function () use ($professionId, $professionSlug) {
            return collect(self::for($professionSlug))
                ->mapWithKeys(function (array $task) use ($professionId) {
                    $query = Skill::published()->where('profession_id', $professionId);
                    self::apply($query, $task);

                    return [$task['slug'] => $query->count()];
                })
                ->all();
        });
    }

    /**
     * @return array<string, array<int, array<string, mixed>>>
     */
    public static function all(): array
    {
        if (self::$cache !== null) {
            return self::$cache;
        }

        $path = resource_path('data/profession-tasks.json');

        return self::$cache = is_file($path) ? (json_decode(file_get_contents($path), true) ?: []) : [];
    }
}
