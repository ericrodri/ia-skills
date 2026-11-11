<?php

namespace App\Support;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

/**
 * Herramientas del conector MCP remoto (/api/mcp).
 *
 * Es lo que Claude (web, escritorio, móvil o Claude Code) llama cuando el
 * usuario añade ia-skills como conector. Sin usuario solo ve el catálogo
 * publicado; con la clave personal de alguien, también sus propias skills
 * (privadas, borradores o rechazadas), y nunca las privadas de otros.
 *
 * Todo es de solo lectura. El protocolo (JSON-RPC) vive en
 * McpConnectorController.
 */
class McpConnector
{
    private const MAX_LIMIT = 20;

    private const PROFESSIONS = ['marketing', 'desarrollo', 'diseno', 'ventas', 'product-management', 'rrhh', 'finanzas', 'legal', 'customer-support', 'freelancers'];

    public function __construct(private readonly ?User $user = null) {}

    public function instructions(): string
    {
        $base = 'Catálogo de prompts y skills de IA en español de ia-skills.com, organizados por profesión. '
            .'Usa search_skills cuando el usuario quiera un prompt para una tarea profesional y get_skill para leer el prompt completo. '
            .'Los campos entre [corchetes] del prompt son datos que el usuario debe rellenar: pídeselos o rellénalos con lo que ya sepas.';

        return $this->user
            ? $base.' Este conector es personal: my_skills lista las skills propias del usuario, incluidas las privadas, que solo ve él y quien tenga su enlace. No las compartas fuera de esta conversación.'
            : $base;
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    public function tools(): array
    {
        $tools = [
            [
                'name' => 'search_skills',
                'title' => 'Buscar skills',
                'description' => $this->user
                    ? 'Busca prompts y skills de IA en español en ia-skills.com: primero en las skills propias del usuario (también las privadas) y después en el catálogo público, ordenado por popularidad.'
                    : 'Busca prompts y skills de IA en español en el catálogo de ia-skills.com, ordenados por popularidad. Úsala cuando el usuario quiera un prompt o skill para una tarea profesional (marketing, desarrollo, legal, ventas, RRHH, finanzas...).',
                'inputSchema' => [
                    'type' => 'object',
                    'properties' => [
                        'query' => ['type' => 'string', 'description' => 'Qué se busca, en español. Ej: "revisar contratos", "cold email B2B".'],
                        'profession' => ['type' => 'string', 'description' => 'Slug de profesión para acotar.', 'enum' => self::PROFESSIONS],
                        'limit' => ['type' => 'integer', 'minimum' => 1, 'maximum' => self::MAX_LIMIT, 'default' => 8],
                    ],
                    'required' => ['query'],
                ],
                'annotations' => ['readOnlyHint' => true, 'openWorldHint' => false],
            ],
            [
                'name' => 'get_skill',
                'title' => 'Leer una skill',
                'description' => 'Devuelve el prompt completo de una skill de ia-skills.com a partir de su slug (lo da search_skills'.($this->user ? ' o my_skills' : '').').',
                'inputSchema' => [
                    'type' => 'object',
                    'properties' => ['slug' => ['type' => 'string']],
                    'required' => ['slug'],
                ],
                'annotations' => ['readOnlyHint' => true, 'openWorldHint' => false],
            ],
        ];

        if ($this->user) {
            $tools[] = [
                'name' => 'my_skills',
                'title' => 'Mis skills',
                'description' => 'Lista las skills propias del usuario en ia-skills.com: privadas, pendientes de revisión y publicadas. Úsala cuando pida "mis skills", "mis prompts" o "los prompts de mi equipo".',
                'inputSchema' => [
                    'type' => 'object',
                    'properties' => [
                        'status' => ['type' => 'string', 'enum' => ['all', 'private', 'published'], 'default' => 'all'],
                    ],
                ],
                'annotations' => ['readOnlyHint' => true, 'openWorldHint' => false],
            ];
        }

        return $tools;
    }

    /**
     * Ejecuta una herramienta. Devuelve el texto y si es un error de uso
     * (que Claude debe ver y corregir, no un fallo del protocolo).
     *
     * @param  array<string, mixed>  $args
     * @return array{text: string, isError: bool}|null null si la herramienta no existe
     */
    public function call(string $name, array $args): ?array
    {
        return match ($name) {
            'search_skills' => $this->search($args),
            'get_skill' => $this->get($args),
            'my_skills' => $this->user ? $this->mine($args) : null,
            default => null,
        };
    }

    /** @param array<string, mixed> $args */
    private function search(array $args): array
    {
        $term = trim((string) ($args['query'] ?? ''));

        if ($term === '') {
            return $this->error('Falta "query": di qué buscas, por ejemplo "revisar contratos".');
        }

        $limit = max(1, min(self::MAX_LIMIT, (int) ($args['limit'] ?? 8)));
        $profession = in_array($args['profession'] ?? null, self::PROFESSIONS, true) ? $args['profession'] : null;

        $sections = [];
        $own = collect();

        if ($this->user) {
            $own = $this->query(Skill::where('user_id', $this->user->id)->whereIn('status', [...Skill::OWNER_STATUSES, 'published']), $term, $profession)
                ->limit($limit)
                ->get();

            if ($own->isNotEmpty()) {
                $sections[] = "## Tus skills\n\n".$own->map(fn (Skill $s) => $this->line($s))->implode("\n");
            }
        }

        $public = $this->query(Skill::published()->whereNotIn('id', $own->pluck('id')), $term, $profession)
            ->limit($limit)
            ->get();

        if ($public->isNotEmpty()) {
            $sections[] = ($this->user ? "## Catálogo público\n\n" : '').$public->map(fn (Skill $s) => $this->line($s))->implode("\n");
        }

        if (empty($sections)) {
            return $this->text("No hay skills para «{$term}». Prueba con otras palabras o sin filtro de profesión.");
        }

        return $this->text(implode("\n\n", $sections)."\n\nUsa get_skill con el slug para leer el prompt completo.");
    }

    /** @param array<string, mixed> $args */
    private function get(array $args): array
    {
        $slug = trim((string) ($args['slug'] ?? ''));
        $skill = $slug === '' ? null : Skill::with('profession:id,name,slug')->where('slug', $slug)->first();

        $visible = $skill && ($skill->status === 'published'
            || ($this->user && $skill->user_id === $this->user->id && in_array($skill->status, Skill::OWNER_STATUSES, true)));

        if (! $visible) {
            return $this->error("No existe ninguna skill con el slug «{$slug}». Búscala antes con search_skills.");
        }

        $lines = [
            "# {$skill->title}",
            '',
            $skill->description,
            '',
            '- Profesión: '.($skill->profession?->name ?? '—'),
            '- Herramienta: '.($skill->tool_name ?: '—'),
            '- Ficha: '.$this->url($skill),
        ];

        if ($skill->isPrivate()) {
            $lines[] = '- Privada: solo la ve su autor y quien tenga su enlace.';
        }

        if ($skill->use_case) {
            $lines[] = '- Caso de uso: '.$skill->use_case;
        }

        $lines[] = '';
        $lines[] = '## Prompt';
        $lines[] = '';
        $lines[] = $skill->prompt_content;

        return $this->text(implode("\n", $lines));
    }

    /** @param array<string, mixed> $args */
    private function mine(array $args): array
    {
        $statuses = match ($args['status'] ?? 'all') {
            'private' => [Skill::PRIVATE],
            'published' => ['published'],
            default => [...Skill::OWNER_STATUSES, 'published'],
        };

        $skills = Skill::where('user_id', $this->user->id)
            ->whereIn('status', $statuses)
            ->orderByRaw("case when status = 'private' then 0 else 1 end")
            ->latest('updated_at')
            ->limit(100)
            ->get(['id', 'slug', 'title', 'description', 'status']);

        if ($skills->isEmpty()) {
            return $this->text('Todavía no tienes skills en ia-skills.com. Puedes guardar una privada en '.route('skills.create', ['privada' => 1]));
        }

        return $this->text($skills->map(fn (Skill $s) => $this->line($s))->implode("\n")."\n\nUsa get_skill con el slug para leer el prompt completo.");
    }

    private function query(Builder $query, string $term, ?string $profession): Builder
    {
        $query->with('profession:id,name,slug');

        if ($profession) {
            $query->whereHas('profession', fn ($q) => $q->where('slug', $profession));
        }

        if (! SkillSearch::apply($query, $term, matchProfessionName: true)) {
            $query->orderByDesc('vote_score');
        }

        return $query;
    }

    private function line(Skill $skill): string
    {
        $status = match ($skill->status) {
            Skill::PRIVATE => ' · privada',
            'draft' => ' · pendiente de revisión',
            'rejected' => ' · rechazada',
            default => '',
        };

        return "- **{$skill->title}** (slug: `{$skill->slug}`{$status}): ".Str::limit((string) $skill->description, 160);
    }

    /** La ficha de una privada lleva su enlace para compartir; si no, Claude no podría abrirla. */
    private function url(Skill $skill): string
    {
        return SkillMarkdown::shareUrl($skill) ?? route('skills.show', ['skill' => $skill->slug]);
    }

    /** @return array{text: string, isError: bool} */
    private function text(string $text): array
    {
        return ['text' => $text, 'isError' => false];
    }

    /** @return array{text: string, isError: bool} */
    private function error(string $text): array
    {
        return ['text' => $text, 'isError' => true];
    }
}
