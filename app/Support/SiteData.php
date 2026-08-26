<?php

namespace App\Support;

use App\Models\Profession;
use App\Models\Skill;
use Illuminate\Support\Facades\Cache;

/**
 * Datos globales que necesitan las páginas Blade (guías, feed) y los metadatos:
 * el número de skills publicadas y el listado de profesiones activas.
 *
 * Se cachean porque aparecen en el footer y en los títulos de casi todas las
 * páginas, y ninguno de los dos cambia con frecuencia.
 */
class SiteData
{
    private const TTL_MINUTES = 60;

    /**
     * Número de skills publicadas, redondeado a la baja en centenas para poder
     * usarlo en títulos y descripciones sin reescribirlos cada semana.
     */
    public static function skillsCount(): int
    {
        return Cache::remember('site.skills_count', now()->addMinutes(self::TTL_MINUTES),
            fn () => Skill::published()->count());
    }

    /**
     * "+1.000" a partir del recuento real, para copys estables.
     */
    public static function skillsCountLabel(): string
    {
        $count = self::skillsCount();

        if ($count < 100) {
            return (string) $count;
        }

        return '+'.number_format(intdiv($count, 100) * 100, 0, ',', '.');
    }

    /**
     * @return array<int, array{slug: string, name: string, skills_count: int}>
     */
    public static function professions(): array
    {
        return Cache::remember('site.professions', now()->addMinutes(self::TTL_MINUTES), function () {
            return Profession::where('is_active', true)
                ->withCount(['skills as skills_count' => fn ($q) => $q->where('status', 'published')])
                ->orderBy('sort_order')
                ->get(['slug', 'name'])
                ->map(fn (Profession $p) => [
                    'slug' => $p->slug,
                    'name' => $p->name,
                    'skills_count' => (int) $p->skills_count,
                ])
                ->all();
        });
    }
}
