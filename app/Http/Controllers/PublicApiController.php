<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Support\SiteData;
use App\Support\SkillMarkdown;
use App\Support\SkillSearch;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * API pública de solo lectura del catálogo (/api/v1/...).
 *
 * Es la que usan el CLI y el servidor MCP de tools/ia-skills-cli para buscar e
 * instalar skills desde la terminal o desde Claude Code sin pasar por la web.
 * Solo expone skills publicadas y no requiere API key; el límite de peticiones
 * es el del grupo `throttle:api`.
 */
class PublicApiController extends Controller
{
    private const MAX_LIMIT = 50;

    public function skills(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'q' => ['nullable', 'string', 'max:200'],
            'profession' => ['nullable', 'string', 'max:100'],
            'type' => ['nullable', 'in:prompt,claude_skill,claude_plugin'],
            'sort' => ['nullable', 'in:top,new,saved'],
            'limit' => ['nullable', 'integer', 'min:1', 'max:'.self::MAX_LIMIT],
        ]);

        $query = Skill::published()->with('profession:id,name,slug');

        if (! empty($validated['profession'])) {
            $query->whereHas('profession', fn ($q) => $q->where('slug', $validated['profession']));
        }

        if (! empty($validated['type'])) {
            $query->where('resource_type', $validated['type']);
        }

        if (! SkillSearch::apply($query, $validated['q'] ?? null, matchProfessionName: true)) {
            match ($validated['sort'] ?? 'top') {
                'new' => $query->orderByDesc('created_at'),
                'saved' => $query->orderByDesc('saves_count'),
                default => $query->orderByDesc('vote_score'),
            };
        }

        $page = $query->paginate($validated['limit'] ?? 20)->withQueryString();

        return response()->json([
            'data' => collect($page->items())->map(fn (Skill $skill) => $this->summary($skill))->all(),
            'meta' => [
                'total' => $page->total(),
                'page' => $page->currentPage(),
                'last_page' => $page->lastPage(),
                'next' => $page->nextPageUrl(),
            ],
        ]);
    }

    public function skill(Skill $skill): JsonResponse
    {
        abort_unless($skill->status === 'published', 404);

        $skill->loadMissing(['profession:id,name,slug', 'author:id,name,username']);

        return response()->json([
            'data' => $this->summary($skill) + [
                'use_case' => $skill->use_case,
                'prompt' => $skill->prompt_content,
                'version' => $skill->version,
                'author' => $skill->author ? [
                    'name' => $skill->author->name,
                    'url' => $skill->author->username ? route('authors.show', ['user' => $skill->author->username]) : null,
                ] : null,
                'install' => [
                    'name' => SkillMarkdown::name($skill),
                    'command' => SkillMarkdown::installCommand($skill),
                ],
            ],
        ]);
    }

    public function professions(): JsonResponse
    {
        return response()->json([
            'data' => collect(SiteData::professions())->map(fn (array $p) => $p + [
                'url' => route('professions.show', ['profession' => $p['slug']]),
            ])->all(),
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    private function summary(Skill $skill): array
    {
        return [
            'slug' => $skill->slug,
            'title' => $skill->title,
            'description' => $skill->description,
            'profession' => $skill->profession?->slug,
            'type' => $skill->resource_type,
            'tool' => $skill->tool_name,
            'difficulty' => $skill->difficulty,
            'votes' => (int) $skill->vote_score,
            'saves' => (int) $skill->saves_count,
            'url' => route('skills.show', ['skill' => $skill->slug]),
            'skill_md_url' => route('skills.markdown', ['skill' => $skill->slug]),
            'updated_at' => $skill->updated_at?->toIso8601String(),
        ];
    }
}
