<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Support\SkillMarkdown;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * /skills/{slug}/skill.md — la ficha como SKILL.md listo para Claude Code.
 *
 * Es texto plano pensado para `curl -o`, así que no pasa por Inertia. Va con
 * X-Robots-Tag noindex: es el mismo contenido que la ficha y no debe competir
 * con ella en el índice.
 */
class SkillMarkdownController extends Controller
{
    public function __invoke(Request $request, Skill $skill): Response
    {
        abort_unless($request->user()?->can('view', $skill) ?? $skill->status === 'published', 404);

        $name = SkillMarkdown::name($skill);
        $disposition = $request->boolean('download') ? 'attachment' : 'inline';

        return response(SkillMarkdown::render($skill), 200, [
            'Content-Type' => 'text/markdown; charset=utf-8',
            'Content-Disposition' => "{$disposition}; filename=\"{$name}-SKILL.md\"",
            'X-Robots-Tag' => 'noindex, follow',
            // Un borrador solo lo ve su autor: no puede quedarse en una caché compartida.
            'Cache-Control' => $skill->status === 'published' ? 'public, max-age=3600' : 'private, no-store',
        ]);
    }
}
