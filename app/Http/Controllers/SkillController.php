<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\SkillVersion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class SkillController extends Controller
{
    public function index(Request $request): Response
    {
        $query = Skill::published()
            ->with(['profession:id,name,slug', 'author:id,name,username,avatar,is_verified_expert'])
            ->withCount('comments');

        if ($request->filled('profession')) {
            $query->whereHas('profession', fn ($q) => $q->where('slug', $request->profession));
        }

        if ($request->filled('tool')) {
            $query->where('tool_name', $request->tool);
        }

        if ($request->filled('difficulty')) {
            $query->where('difficulty', $request->difficulty);
        }

        if ($request->filled('q')) {
            $search = $request->q;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'ilike', "%{$search}%")
                    ->orWhere('description', 'ilike', "%{$search}%");
            });
        }

        $sort = $request->get('sort', 'top');
        match ($sort) {
            'new' => $query->orderByDesc('created_at'),
            'trending' => $query->where('created_at', '>=', now()->subDays(30))->orderByDesc('views_count'),
            default => $query->orderByDesc('vote_score'),
        };

        return Inertia::render('Skills/Index', [
            'skills' => $query->paginate(20)->withQueryString(),
            'professions' => Profession::where('is_active', true)->orderBy('sort_order')->get(['id', 'name', 'slug']),
            'filters' => $request->only(['profession', 'tool', 'difficulty', 'q', 'sort']),
            'tools' => ['ChatGPT', 'Claude', 'Midjourney', 'Gemini', 'Perplexity', 'Zapier', 'Make', 'Otro'],
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Skills/Create', [
            'professions' => Profession::where('is_active', true)->orderBy('sort_order')->get(['id', 'name', 'slug']),
            'tools' => ['ChatGPT', 'Claude', 'Midjourney', 'Gemini', 'Perplexity', 'Zapier', 'Make', 'Otro'],
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'profession_id' => 'required|exists:professions,id',
            'title' => 'required|string|max:200',
            'description' => 'required|string|max:1000',
            'prompt_content' => 'required|string',
            'tool_name' => 'required|string|max:100',
            'difficulty' => 'required|in:beginner,intermediate,advanced',
            'estimated_minutes' => 'nullable|integer|min:1|max:480',
            'use_case' => 'nullable|string|max:500',
        ]);

        $slug = Str::slug($data['title']);
        $original = $slug;
        $counter = 1;
        while (Skill::where('slug', $slug)->exists()) {
            $slug = $original.'-'.$counter++;
        }

        $skill = Skill::create([
            ...$data,
            'user_id' => $request->user()->id,
            'slug' => $slug,
            'status' => 'draft',
        ]);

        SkillVersion::create([
            'skill_id' => $skill->id,
            'user_id' => $request->user()->id,
            'version' => 1,
            'prompt_content' => $skill->prompt_content,
            'changelog' => 'Versión inicial',
        ]);

        // skills_count se incrementa solo cuando el admin la aprueba
        return redirect()->route('skills.show', $skill)
            ->with('success', '¡Skill enviada! La revisaremos y la publicaremos en breve.');
    }

    public function show(Skill $skill): Response
    {
        $user = auth()->user();

        // Solo el autor o un admin pueden ver skills no publicadas
        if ($skill->status !== 'published') {
            if (! $user || ($user->id !== $skill->user_id && ! $user->is_admin)) {
                abort(404);
            }
        }

        $skill->increment('views_count');

        $skill->load([
            'profession:id,name,slug',
            'author:id,name,username,avatar,reputation,is_verified_expert',
            'comments.user:id,name,username,avatar',
            'comments.replies.user:id,name,username,avatar',
        ]);

        $userVote = $user ? $user->hasVoted($skill) : null;
        $userSaved = $user ? $user->hasSaved($skill) : false;

        return Inertia::render('Skills/Show', [
            'skill'     => $skill,
            'userVote'  => $userVote,
            'userSaved' => $userSaved,
        ]);
    }
}
