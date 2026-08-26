<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use App\Models\Skill;
use App\Support\Guides;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

/**
 * Sitemap en formato índice.
 *
 * Antes esto era un único XML con las ~1.000 skills dentro y cacheaba
 * colecciones de Eloquent completas; en producción devolvía un 500 y Google
 * no descubría ninguna ficha. Ahora se cachean arrays planos (slug + fecha),
 * las fechas nulas no rompen el render y las skills se parten en bloques.
 */
class SitemapController extends Controller
{
    /** Google admite 50.000 URLs por fichero; 1.000 mantiene el XML ligero. */
    private const CHUNK = 1000;

    private const CACHE_TTL_HOURS = 6;

    public function index(): Response
    {
        $skills = $this->skillRows();
        $professions = $this->professionRows();

        $sitemaps = [
            ['loc' => route('sitemap.pages'), 'lastmod' => now()->toAtomString()],
            ['loc' => route('sitemap.professions'), 'lastmod' => $this->latest($professions)],
            ['loc' => route('sitemap.guides'), 'lastmod' => Guides::lastModified()],
        ];

        $pages = max(1, (int) ceil(count($skills) / self::CHUNK));

        for ($page = 1; $page <= $pages; $page++) {
            $chunk = array_slice($skills, ($page - 1) * self::CHUNK, self::CHUNK);

            $sitemaps[] = [
                'loc' => route('sitemap.skills', ['page' => $page]),
                'lastmod' => $this->latest($chunk),
            ];
        }

        return $this->xml('sitemaps.index', compact('sitemaps'));
    }

    public function pages(): Response
    {
        $urls = [
            ['loc' => route('home'), 'changefreq' => 'daily', 'priority' => '1.0'],
            ['loc' => route('skills.index'), 'changefreq' => 'daily', 'priority' => '0.9'],
            ['loc' => route('professions.index'), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => route('guides.index'), 'changefreq' => 'weekly', 'priority' => '0.8'],
            ['loc' => route('how-it-works'), 'changefreq' => 'monthly', 'priority' => '0.6'],
        ];

        return $this->xml('sitemaps.urlset', compact('urls'));
    }

    public function professions(): Response
    {
        $urls = collect($this->professionRows())
            ->map(fn (array $row) => [
                'loc' => route('professions.show', ['profession' => $row['slug']]),
                'lastmod' => $row['lastmod'],
                'changefreq' => 'weekly',
                'priority' => '0.8',
            ])
            ->all();

        return $this->xml('sitemaps.urlset', compact('urls'));
    }

    public function guides(): Response
    {
        $urls = collect(Guides::all())
            ->map(fn (array $guide) => [
                'loc' => route('guides.show', ['slug' => $guide['slug']]),
                'lastmod' => Carbon::parse($guide['updated'])->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.7',
            ])
            ->all();

        return $this->xml('sitemaps.urlset', compact('urls'));
    }

    public function skills(int $page = 1): Response
    {
        $chunk = array_slice($this->skillRows(), (max(1, $page) - 1) * self::CHUNK, self::CHUNK);

        abort_if(empty($chunk) && $page > 1, 404);

        $urls = collect($chunk)
            ->map(fn (array $row) => [
                'loc' => route('skills.show', ['skill' => $row['slug']]),
                'lastmod' => $row['lastmod'],
                'changefreq' => 'monthly',
                'priority' => '0.7',
            ])
            ->all();

        return $this->xml('sitemaps.urlset', compact('urls'));
    }

    /**
     * @return array<int, array{slug: string, lastmod: string}>
     */
    private function skillRows(): array
    {
        return Cache::remember('sitemap.skills.rows', now()->addHours(self::CACHE_TTL_HOURS), function () {
            return Skill::published()
                ->orderByDesc('updated_at')
                ->pluck('updated_at', 'slug')
                ->map(fn ($date) => $this->atom($date))
                ->map(fn ($lastmod, $slug) => ['slug' => $slug, 'lastmod' => $lastmod])
                ->values()
                ->all();
        });
    }

    /**
     * @return array<int, array{slug: string, lastmod: string}>
     */
    private function professionRows(): array
    {
        return Cache::remember('sitemap.professions.rows', now()->addHours(self::CACHE_TTL_HOURS), function () {
            return Profession::where('is_active', true)
                ->orderBy('sort_order')
                ->pluck('updated_at', 'slug')
                ->map(fn ($date, $slug) => ['slug' => $slug, 'lastmod' => $this->atom($date)])
                ->values()
                ->all();
        });
    }

    private function atom(mixed $date): string
    {
        if ($date instanceof Carbon) {
            return $date->toAtomString();
        }

        return $date ? Carbon::parse($date)->toAtomString() : now()->toAtomString();
    }

    /**
     * @param  array<int, array{lastmod?: string}>  $rows
     */
    private function latest(array $rows): string
    {
        $dates = array_filter(array_column($rows, 'lastmod'));

        return $dates ? max($dates) : now()->toAtomString();
    }

    /**
     * @param  array<string, mixed>  $data
     */
    private function xml(string $view, array $data): Response
    {
        return response()
            ->view($view, $data)
            ->header('Content-Type', 'application/xml; charset=utf-8')
            ->header('Cache-Control', 'public, max-age=21600');
    }
}
