<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use App\Models\Skill;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $skills = Skill::published()
            ->select('slug', 'updated_at')
            ->orderByDesc('updated_at')
            ->get();

        $professions = Profession::where('is_active', true)
            ->select('slug', 'updated_at')
            ->get();

        return response()
            ->view('sitemap', compact('skills', 'professions'))
            ->header('Content-Type', 'text/xml; charset=utf-8');
    }
}
