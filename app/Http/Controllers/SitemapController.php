<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use App\Models\Skill;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

class SitemapController extends Controller
{
    public function index(): Response
    {
        [$skills, $professions] = Cache::remember('sitemap.data', now()->addHours(6), function () {
            return [
                Skill::published()
                    ->select('slug', 'updated_at')
                    ->orderByDesc('updated_at')
                    ->get(),
                Profession::where('is_active', true)
                    ->select('slug', 'updated_at')
                    ->get(),
            ];
        });

        $lastMod = $skills->first()?->updated_at ?? now();

        return response()
            ->view('sitemap', compact('skills', 'professions'))
            ->header('Content-Type', 'text/xml; charset=utf-8')
            ->header('Cache-Control', 'public, max-age=21600') // 6h
            ->header('Last-Modified', $lastMod->toRfc7231String());
    }
}
