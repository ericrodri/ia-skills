<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use Inertia\Inertia;
use Inertia\Response;

class ProfessionController extends Controller
{
    public function index(): Response
    {
        $professions = Profession::where('is_active', true)
            ->withCount(['skills as skills_count' => function ($query) {
                $query->where('status', 'published');
            }])
            ->orderBy('sort_order')
            ->get(['id', 'name', 'slug', 'icon', 'description']);

        return Inertia::render('Professions/Index', [
            'professions' => $professions,
        ]);
    }

    public function show(Profession $profession): Response
    {
        $skills = $profession->publishedSkills()
            ->with('author:id,name,username,avatar,is_verified_expert')
            ->withCount('comments')
            ->orderByDesc('vote_score')
            ->paginate(20);

        return Inertia::render('Professions/Show', [
            'profession' => $profession,
            'skills' => $skills,
        ]);
    }
}
