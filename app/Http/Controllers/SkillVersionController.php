<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Contenido de una versión concreta y de la anterior, para pintar el diff.
 *
 * La ficha solo recibe el historial sin prompts (ver
 * SkillController::versionHistory()): el contenido se pide bajo demanda cuando
 * alguien abre "Ver cambios", en lugar de inflar el payload de cada visita.
 */
class SkillVersionController extends Controller
{
    public function show(Request $request, Skill $skill, int $version): JsonResponse
    {
        abort_unless($request->user()?->can('view', $skill) ?? $skill->status === 'published', 404);

        $current = $skill->versions()
            ->where('version', $version)
            ->with('editor:id,name,username')
            ->firstOrFail(['id', 'skill_id', 'user_id', 'version', 'prompt_content', 'changelog', 'created_at']);

        $previous = $skill->versions()
            ->where('version', '<', $version)
            ->first(['version', 'prompt_content']);

        return response()->json([
            'version' => $current->version,
            'changelog' => $current->changelog,
            'editor' => $current->editor?->name,
            'created_at' => $current->created_at?->toIso8601String(),
            'prompt_content' => $current->prompt_content,
            'previous' => $previous ? [
                'version' => $previous->version,
                'prompt_content' => $previous->prompt_content,
            ] : null,
        ]);
    }
}
