<?php

namespace App\Support;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Collection;

/**
 * Páginas por herramienta (/herramientas/gemini, /herramientas/chatgpt…):
 * la gente busca «prompts para Gemini», no una profesión. El copy vive en
 * resources/data/tool-pages.json, como el resto del texto editorial; las
 * fichas salen de la base de datos por su `tool_name`.
 */
class ToolPages
{
    /**
     * Fichas de imagen: van primero porque son las que más se buscan con
     * ChatGPT y Gemini (editar fotos, crear ilustraciones, logos…).
     */
    private const IMAGE_PATTERN = '/foto|im[aá]gen|visagismo|retrato|selfie|logo|ilustraci|dibujo|cartel|miniatura|pixel|c[oó]mic|tatuaje|caricatura|sticker|fondo de pantalla|tarjeta de visita|etiqueta|calendario|orla|gafas|mapa ilustrado|portada|postal|invitaci|mockup|infograf|render|vector|collage|cuento ilustrado|figura de acci|personaje/iu';

    private const MAX_IMAGES = 80;

    private const MAX_OTHERS = 60;

    /** @var array<string, array<string, mixed>>|null */
    private static ?array $pages = null;

    /**
     * @return list<array<string, mixed>>
     */
    public static function all(): array
    {
        return array_values(self::load());
    }

    /**
     * @return array<string, mixed>|null
     */
    public static function find(string $slug): ?array
    {
        return self::load()[$slug] ?? null;
    }

    /**
     * tool_name => slug, para enlazar la etiqueta de herramienta de cada ficha.
     *
     * @return array<string, string>
     */
    public static function slugsByToolName(): array
    {
        return collect(self::load())->mapWithKeys(fn (array $p) => [$p['tool_name'] => $p['slug']])->all();
    }

    public static function count(array $page): int
    {
        return Skill::published()->where('tool_name', $page['tool_name'])->count();
    }

    /**
     * Fichas de la herramienta, las más vistas primero, separadas en imagen
     * y el resto.
     *
     * @param  array<string, mixed>  $page
     * @return array{images: Collection<int, Skill>, others: Collection<int, Skill>}
     */
    public static function skills(array $page): array
    {
        $skills = Skill::published()
            ->where('tool_name', $page['tool_name'])
            ->with(['profession:id,name,slug', 'author:id,name,username,is_verified_expert'])
            ->withCount('comments')
            ->orderByDesc('views_count')
            ->orderByDesc('vote_score')
            ->limit(400)
            ->get();

        [$images, $others] = $skills->partition(fn (Skill $s) => self::isImage($s->title));

        return [
            'images' => $images->take(self::MAX_IMAGES)->values(),
            'others' => $others->take(self::MAX_OTHERS)->values(),
        ];
    }

    public static function isImage(string $title): bool
    {
        return (bool) preg_match(self::IMAGE_PATTERN, $title);
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    private static function load(): array
    {
        if (self::$pages !== null) {
            return self::$pages;
        }

        $data = json_decode((string) file_get_contents(resource_path('data/tool-pages.json')), true) ?: [];

        return self::$pages = collect($data)->keyBy('slug')->all();
    }
}
