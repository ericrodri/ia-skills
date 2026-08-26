<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Support\Seo;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

/**
 * Feed RSS de las últimas skills publicadas.
 *
 * Sirve para tres cosas: descubrimiento por agregadores y newsletters, una
 * señal de frescura adicional para los rastreadores, y una vía de entrada para
 * los crawlers que no ejecutan JavaScript.
 *
 * Se cachean arrays planos, nunca modelos de Eloquent: con el store de caché
 * en base de datos sobre PostgreSQL, un objeto serializado vuelve corrupto en
 * la segunda lectura (__PHP_Incomplete_Class). Era la causa del 500 que tenía
 * el sitemap en producción.
 */
class FeedController extends Controller
{
    private const LIMIT = 50;

    public function index(): Response
    {
        $items = Cache::remember('feed.items', now()->addHour(), function () {
            return Skill::published()
                ->with(['profession:id,name'])
                ->orderByDesc('created_at')
                ->limit(self::LIMIT)
                ->get(['id', 'profession_id', 'title', 'slug', 'description', 'created_at'])
                ->map(fn (Skill $skill) => [
                    'title' => $skill->title,
                    'url' => route('skills.show', ['skill' => $skill->slug]),
                    'description' => Str::limit(Seo::clean($skill->description), 400),
                    'category' => $skill->profession?->name,
                    'published' => $skill->created_at?->toRssString(),
                ])
                ->all();
        });

        return response()
            ->view('feed', ['items' => $items])
            ->header('Content-Type', 'application/rss+xml; charset=utf-8')
            ->header('Cache-Control', 'public, max-age=3600');
    }
}
