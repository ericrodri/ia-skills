<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function savedSkills(Request $request): JsonResponse
    {
        $token = $request->query('api_key') ?? $request->bearerToken();

        if (! $token) {
            return response()->json(['error' => 'API key requerida. Añade ?api_key=TU_CLAVE a la URL.'], 401);
        }

        $user = User::where('api_token', $token)->first();

        if (! $user) {
            return response()->json(['error' => 'API key inválida.'], 401);
        }

        $skills = $user->savedSkills()
            ->published()
            ->with('profession:id,name,slug')
            ->orderByDesc('vote_score')
            ->get();

        return response()->json([
            'user'  => $user->name,
            'total' => $skills->count(),
            'skills' => $skills->map(fn ($skill) => [
                'title'       => $skill->title,
                'description' => $skill->description,
                'profession'  => $skill->profession?->name,
                'tool'        => $skill->tool_name,
                'difficulty'  => $skill->difficulty,
                'prompt'      => $skill->prompt_content,
                'url'         => url("/skills/{$skill->slug}"),
            ]),
        ]);
    }
}
