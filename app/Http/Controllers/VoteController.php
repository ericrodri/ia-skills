<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Vote;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function __invoke(Request $request, Skill $skill): JsonResponse
    {
        $request->validate(['value' => 'required|in:1,-1']);

        $user = $request->user();
        $value = (int) $request->value;

        $existing = Vote::where('user_id', $user->id)->where('skill_id', $skill->id)->first();

        if ($existing) {
            if ($existing->value === $value) {
                // Undo vote
                $existing->delete();
                $skill->decrement('vote_score', $value);
                $newVote = null;
            } else {
                // Change vote direction
                $diff = $value - $existing->value;
                $existing->update(['value' => $value]);
                $skill->increment('vote_score', $diff);
                $newVote = $value;
            }
        } else {
            Vote::create(['user_id' => $user->id, 'skill_id' => $skill->id, 'value' => $value]);
            $skill->increment('vote_score', $value);
            $newVote = $value;
        }

        return response()->json([
            'vote_score' => $skill->fresh()->vote_score,
            'user_vote' => $newVote,
        ]);
    }
}
