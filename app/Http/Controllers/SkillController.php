<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;
use App\Models\Profession;
use App\Models\Skill;
use App\Models\SkillVersion;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class SkillController extends Controller
{
    private const TOOLS = ['ChatGPT', 'Claude', 'Midjourney', 'Gemini', 'Perplexity', 'Zapier', 'Make', 'Otro'];

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

        if ($request->filled('type')) {
            $query->where('resource_type', $request->type);
        }

        $sort = $request->get('sort', 'top');
        $tsQuery = null;
        $tsBindings = [];

        if ($request->filled('q')) {
            // La búsqueda full-text vive en una columna tsvector generada: es solo de PostgreSQL.
            // En otros drivers (los tests usan SQLite) se degrada a un LIKE sobre título y descripción.
            if (DB::connection()->getDriverName() !== 'pgsql') {
                $like = '%'.trim($request->q).'%';
                $query->where(fn ($q) => $q->where('title', 'like', $like)
                    ->orWhere('description', 'like', $like));
            } else {
                $terms = array_values(array_filter(preg_split('/\s+/', trim($request->q))));

                if (!empty($terms)) {
                    $lastTerm = array_pop($terms);
                    $parts = [];

                    foreach ($terms as $term) {
                        $parts[] = "plainto_tsquery('simple', unaccent(?))";
                        $tsBindings[] = $term;
                    }
                    $parts[] = "to_tsquery('simple', unaccent(?) || ':*')";
                    $tsBindings[] = $lastTerm;

                    $tsQuery = implode(' && ', $parts);
                    $rawQ = '%' . trim($request->q) . '%';
                    $query->where(function ($q) use ($tsQuery, $tsBindings, $rawQ) {
                        $q->whereRaw("search_vector @@ ($tsQuery)", $tsBindings)
                          ->orWhereHas('profession', fn ($pq) =>
                              $pq->whereRaw("unaccent(name) ILIKE unaccent(?)", [$rawQ])
                          );
                    });
                }
            }
        }

        if ($tsQuery) {
            $query->orderByRaw("ts_rank(search_vector, ($tsQuery)) DESC", $tsBindings)
                  ->orderByDesc('vote_score');
        } else {
            match ($sort) {
                'new'      => $query->orderByDesc('created_at'),
                'trending' => $query->where('created_at', '>=', now()->subDays(30))->orderByDesc('views_count'),
                default    => $query->orderByDesc('vote_score'),
            };
        }

        return Inertia::render('Skills/Index', [
            'skills' => $query->paginate(20)->withQueryString(),
            'professions' => $this->activeProfessions(),
            'filters' => array_merge(['sort' => $sort], $request->only(['profession', 'tool', 'difficulty', 'type', 'q'])),
            'tools' => self::TOOLS,
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Skills/Create', [
            'professions' => $this->activeProfessions(),
            'tools' => self::TOOLS,
        ]);
    }

    public function store(StoreSkillRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $skill = Skill::create([
            ...$data,
            'user_id' => $request->user()->id,
            'slug' => $this->uniqueSlug($data['title']),
            'status' => 'draft',
            'resource_type' => $data['resource_type'] ?? 'prompt',
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

    public function edit(Skill $skill): Response
    {
        $this->authorize('update', $skill);

        return Inertia::render('Skills/Edit', [
            'skill' => $skill->only([
                'id', 'slug', 'profession_id', 'title', 'description', 'prompt_content',
                'tool_name', 'difficulty', 'estimated_minutes', 'use_case', 'resource_type',
                'status', 'version',
            ]),
            'professions' => $this->activeProfessions(),
            'tools' => self::TOOLS,
        ]);
    }

    public function update(UpdateSkillRequest $request, Skill $skill): RedirectResponse
    {
        $data = $request->validated();
        $changelog = $data['changelog'] ?? null;
        unset($data['changelog']);

        // Versionamos solo cuando cambia el contenido del prompt: editar metadatos
        // (título, dificultad, caso de uso...) no genera una versión nueva.
        $promptChanged = $data['prompt_content'] !== $skill->prompt_content;

        DB::transaction(function () use ($skill, $data, $changelog, $promptChanged, $request) {
            // El slug no se toca aunque cambie el título: las URLs ya publicadas,
            // indexadas y compartidas deben seguir resolviendo.
            $skill->fill($data);

            if ($promptChanged) {
                $skill->version = $skill->version + 1;
            }

            $skill->save();

            if ($promptChanged) {
                SkillVersion::create([
                    'skill_id' => $skill->id,
                    'user_id' => $request->user()->id,
                    'version' => $skill->version,
                    'prompt_content' => $skill->prompt_content,
                    'changelog' => $changelog,
                ]);
            }
        });

        return redirect()->route('skills.show', $skill)->with(
            'success',
            $promptChanged
                ? "Skill actualizada. Se guardó la versión {$skill->version}."
                : 'Skill actualizada.'
        );
    }

    public function show(Request $request, Skill $skill): Response
    {
        $user = $request->user();

        // Solo el autor o un admin pueden ver skills no publicadas
        abort_unless(
            $user ? $user->can('view', $skill) : $skill->status === 'published',
            404
        );

        $skill->increment('views_count');

        $skill->load([
            'profession:id,name,slug',
            'author:id,name,username,avatar,reputation,is_verified_expert',
            'comments.user:id,name,username,avatar',
            'comments.replies.user:id,name,username,avatar',
        ]);

        return Inertia::render('Skills/Show', [
            'skill'     => $skill,
            'versions'  => $this->versionHistory($skill),
            'userVote'  => $user ? $user->hasVoted($skill) : null,
            'userSaved' => $user ? $user->hasSaved($skill) : false,
            'canEdit'   => $user ? $user->can('update', $skill) : false,
        ]);
    }

    /**
     * Historial de versiones sin el prompt de cada una: el contenido completo
     * multiplicaría el peso del payload de la página por cada edición.
     */
    private function versionHistory(Skill $skill): Collection
    {
        return $skill->versions()
            ->select(['id', 'skill_id', 'user_id', 'version', 'changelog', 'created_at'])
            ->with('editor:id,name,username')
            ->get();
    }

    private function activeProfessions(): Collection
    {
        return Profession::where('is_active', true)
            ->orderBy('sort_order')
            ->get(['id', 'name', 'slug']);
    }

    private function uniqueSlug(string $title): string
    {
        $slug = $original = Str::slug($title);
        $counter = 1;

        while (Skill::where('slug', $slug)->exists()) {
            $slug = $original.'-'.$counter++;
        }

        return $slug;
    }
}
