<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SavedSkillController extends Controller
{
    public function toggle(Request $request, Skill $skill): JsonResponse
    {
        $user = $request->user();

        if ($user->hasSaved($skill)) {
            $user->savedSkills()->detach($skill->id);
            $skill->decrement('saves_count');
            $saved = false;
        } else {
            $user->savedSkills()->attach($skill->id);
            $skill->increment('saves_count');
            $saved = true;
        }

        return response()->json([
            'saved' => $saved,
            'saves_count' => $skill->fresh()->saves_count,
        ]);
    }

    public function index(Request $request): \Inertia\Response
    {
        if (! $request->user()) {
            return \Inertia\Inertia::render('Skills/Saved', [
                'skills' => null,
                'hasApiToken' => false,
            ]);
        }

        $skills = $request->user()->savedSkills()
            ->with(['profession:id,name,slug', 'author:id,name,username,avatar'])
            ->withCount('comments')
            ->orderByDesc('saved_skills.created_at')
            ->paginate(20);

        return \Inertia\Inertia::render('Skills/Saved', [
            'skills' => $skills,
            'hasApiToken' => (bool) $request->user()->api_token,
        ]);
    }
}
