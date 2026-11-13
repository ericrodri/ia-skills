<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class SavedSkillController extends Controller
{
    public function toggle(Request $request, Skill $skill): JsonResponse
    {
        // Solo se guarda lo publicado: un borrador o una privada no existen para los demás.
        abort_unless($skill->status === 'published', 404);

        $user = $request->user();

        if ($user->hasSaved($skill)) {
            $user->savedSkills()->detach($skill->id);
            $skill->bump('saves_count', -1);
            $saved = false;
        } else {
            $user->savedSkills()->attach($skill->id);
            $skill->bump('saves_count');
            $saved = true;
        }

        return response()->json([
            'saved' => $saved,
            'saves_count' => $skill->fresh()->saves_count,
        ]);
    }

    public function index(Request $request): Response
    {
        if (! $request->user()) {
            return Inertia::render('Skills/Saved', [
                'skills' => null,
                'hasApiToken' => false,
            ]);
        }

        $skills = $request->user()->savedSkills()
            ->with(['profession:id,name,slug', 'author:id,name,username,avatar'])
            ->withCount('comments')
            ->orderByDesc('saved_skills.created_at')
            ->paginate(20);

        return Inertia::render('Skills/Saved', [
            'skills' => $skills,
            'hasApiToken' => (bool) $request->user()->api_token,
        ]);
    }
}
