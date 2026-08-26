<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;
use App\Models\Profession;
use App\Models\Skill;
use App\Models\SkillVersion;
use App\Support\Seo;
use App\Support\SiteData;
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

        $skills = $query->paginate(20)->withQueryString();

        $this->shareIndexSeo($request, $skills);

        return Inertia::render('Skills/Index', [
            'skills' => $skills,
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

        $this->shareShowSeo($skill);

        return Inertia::render('Skills/Show', [
            'skill'     => $skill,
            'versions'  => $this->versionHistory($skill),
            'userVote'  => $user ? $user->hasVoted($skill) : null,
            'userSaved' => $user ? $user->hasSaved($skill) : false,
            'canEdit'   => $user ? $user->can('update', $skill) : false,
        ]);
    }

    /**
     * Metadatos del listado.
     *
     * El listado es facetable (?q, ?profession, ?tool, ?difficulty, ?type, ?sort)
     * y cada combinación genera una URL distinta con contenido casi idéntico.
     * Regla aplicada: la búsqueda interna nunca se indexa, un filtro suelto por
     * profesión canonicaliza hacia su landing, y el resto de combinaciones van
     * noindex/follow para que Google siga los enlaces sin inflar el índice.
     *
     * @param  \Illuminate\Contracts\Pagination\LengthAwarePaginator<Skill>  $skills
     */
    private function shareIndexSeo(Request $request, $skills): void
    {
        $filters = array_filter($request->only(['q', 'profession', 'tool', 'difficulty', 'type']));
        $sort = $request->get('sort', 'top');
        $page = (int) $request->get('page', 1);
        $count = SiteData::skillsCountLabel();

        $canonical = route('skills.index');
        $robots = null;
        $title = "Explorar prompts y skills de IA: {$count} workflows por profesión";
        $description = "Busca entre {$count} prompts y skills de IA por profesión, herramienta y dificultad. Ordenados por los votos de la comunidad y listos para copiar.";

        if (isset($filters['q'])) {
            $robots = 'noindex, follow';
            $title = "Resultados para «{$filters['q']}» en skills de IA";
            $description = "Prompts y skills de IA que coinciden con «{$filters['q']}».";
        } elseif (count($filters) === 1 && isset($filters['profession'])) {
            $profession = collect(SiteData::professions())->firstWhere('slug', $filters['profession']);

            if ($profession) {
                $canonical = route('professions.show', ['profession' => $profession['slug']]);
                $title = "Prompts y skills de IA para {$profession['name']}";
                $description = "Los mejores prompts y skills de IA para {$profession['name']}, votados por la comunidad.";
            }
        } elseif ($filters !== []) {
            $robots = 'noindex, follow';
        } elseif ($sort !== 'top') {
            $robots = 'noindex, follow';
        }

        if ($page > 1 && $canonical === route('skills.index')) {
            $canonical = route('skills.index', ['page' => $page]);
            $title = "Explorar prompts y skills de IA · página {$page}";
        }

        Seo::share([
            'title' => $title,
            'description' => $description,
            'canonical' => $canonical,
            'robots' => $robots,
            'prev' => $skills->currentPage() > 1 ? $skills->previousPageUrl() : null,
            'next' => $skills->hasMorePages() ? $skills->nextPageUrl() : null,
            'fallback' => [
                'heading' => $title,
                'paragraphs' => [$description],
                'links' => collect($skills->items())
                    ->mapWithKeys(fn (Skill $skill) => [
                        $skill->title => route('skills.show', ['skill' => $skill->slug]),
                    ])->all(),
            ],
            'schema' => [
                Seo::organization(),
                Seo::breadcrumbs([
                    'Inicio' => route('home'),
                    'Skills' => route('skills.index'),
                ]),
                [
                    '@context' => 'https://schema.org',
                    '@type' => 'CollectionPage',
                    'name' => $title,
                    'url' => $canonical,
                    'inLanguage' => 'es',
                    'mainEntity' => [
                        '@type' => 'ItemList',
                        'numberOfItems' => $skills->total(),
                        'itemListElement' => collect($skills->items())->values()
                            ->map(fn (Skill $skill, int $i) => [
                                '@type' => 'ListItem',
                                'position' => $skills->firstItem() + $i,
                                'name' => $skill->title,
                                'url' => route('skills.show', ['skill' => $skill->slug]),
                            ])->all(),
                    ],
                ],
            ],
        ]);
    }

    /**
     * Metadatos de la ficha.
     *
     * El JSON-LD se emite desde el servidor: es la única forma de que el prompt
     * completo y sus metadatos lleguen a un crawler que no ejecute JavaScript.
     */
    private function shareShowSeo(Skill $skill): void
    {
        $url = route('skills.show', ['skill' => $skill->slug]);
        $profession = $skill->profession?->name;

        $howTo = array_filter([
            '@context' => 'https://schema.org',
            '@type' => 'HowTo',
            'name' => $skill->title,
            'description' => Seo::clean($skill->description),
            'disambiguatingDescription' => $skill->use_case ? Seo::clean($skill->use_case) : null,
            'text' => $skill->prompt_content,
            'inLanguage' => 'es',
            'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $url],
            'tool' => $skill->tool_name ? [['@type' => 'HowToTool', 'name' => $skill->tool_name]] : null,
            'totalTime' => $skill->estimated_minutes ? "PT{$skill->estimated_minutes}M" : null,
            'author' => $skill->author ? ['@type' => 'Person', 'name' => $skill->author->name] : null,
            'publisher' => ['@id' => url('/').'#organization'],
            'datePublished' => $skill->created_at?->toAtomString(),
            'dateModified' => $skill->updated_at?->toAtomString(),
        ]);

        $breadcrumbs = ['Inicio' => route('home')];

        if ($skill->profession) {
            $breadcrumbs[$skill->profession->name] = route('professions.show', ['profession' => $skill->profession->slug]);
        }

        $breadcrumbs[$skill->title] = $url;

        Seo::share([
            'title' => $skill->title,
            'description' => $profession
                ? Seo::clean($skill->description).' · Prompt de IA para '.$profession.'.'
                : Seo::clean($skill->description),
            'canonical' => $url,
            'robots' => $skill->status === 'published' ? null : 'noindex, nofollow',
            'ogType' => 'article',
            'ogImage' => route('og.skill', ['skill' => $skill->slug]),
            'ogImageAlt' => $skill->title,
            'fallback' => [
                'heading' => $skill->title,
                'paragraphs' => array_filter([
                    Seo::clean($skill->description),
                    $skill->use_case ? 'Cuándo usarlo: '.Seo::clean($skill->use_case) : null,
                    $skill->tool_name ? 'Herramienta recomendada: '.$skill->tool_name : null,
                ]),
                'pre' => $skill->prompt_content,
                'links' => $skill->profession ? [
                    'Más prompts de IA para '.$skill->profession->name => route('professions.show', ['profession' => $skill->profession->slug]),
                ] : [],
            ],
            'schema' => [
                Seo::organization(),
                Seo::breadcrumbs($breadcrumbs),
                $howTo,
            ],
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
