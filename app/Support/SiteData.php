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
     * Navegación principal de la cabecera. Fuente única para los dos layouts:
     * `AppLayout.vue` (Inertia) la recibe como prop compartida desde
     * HandleInertiaRequests, y `layouts/site.blade.php` (guías, HTML plano) la
     * lee directamente. Antes estaba duplicada a mano en ambos y se
     * desincronizó: "Guardadas" existía solo en el layout de Inertia y
     * desaparecía al entrar en /guias.
     *
     * `inertia => false` marca los destinos que NO son páginas Inertia: desde
     * Vue tienen que enlazarse con <a>, no con <Link>, o Inertia intentará
     * cargar HTML de Blade como si fuera una respuesta suya.
     */
    private const PRIMARY_NAV = [
        ['label' => 'Explorar',      'route' => 'skills.index',      'inertia' => true,  'active' => 'skills.index'],
        ['label' => 'Profesiones',   'route' => 'professions.index', 'inertia' => true,  'active' => 'professions.*'],
        ['label' => 'Guías',         'route' => 'guides.index',      'inertia' => false, 'active' => 'guides.*'],
        ['label' => 'Cómo funciona', 'route' => 'how-it-works',      'inertia' => true,  'active' => 'how-it-works'],
        ['label' => 'Guardadas',     'route' => 'skills.saved',      'inertia' => true,  'active' => 'skills.saved'],
    ];

    /**
     * Sin caché a propósito: `route()` resuelve URLs absolutas con el host y el
     * esquema de la petición en curso, así que un valor cacheado podría fijar
     * el dominio equivocado. Resolver cinco rutas no cuesta nada.
     *
     * @return array<int, array{label: string, route: string, href: string, inertia: bool, active: string}>
     */
    public static function primaryNav(): array
    {
        return array_map(fn (array $item) => [
            'label'   => $item['label'],
            'route'   => $item['route'],
            'href'    => route($item['route']),
            'inertia' => $item['inertia'],
            // Patrón para `request()->routeIs()`: 'guides.*' mantiene "Guías"
            // resaltado también en el detalle de cada guía.
            'active'  => $item['active'],
        ], self::PRIMARY_NAV);
    }

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
