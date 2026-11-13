<?php

namespace App\Support;

use App\Models\Skill;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

/**
 * Pack temático a cambio del email: «Los 25 prompts más usados para editar
 * fotos con ChatGPT y Gemini». Mismo mecanismo que ProfessionPack (doble
 * opt-in, enlace firmado, página imprimible), pero por tema en vez de por
 * profesión.
 *
 * Por qué: casi todo el tráfico de Google llega a fichas de fotos, que están
 * en la profesión Diseño. A esa gente se le ofrecía «los 20 mejores prompts de
 * Diseño» (identidad de marca, sistemas de diseño…), que no es lo que busca.
 *
 * Las fichas del pack son las que enlaza la guía del tema (`guide`), así que
 * el pack se mantiene solo: al añadir una ficha a la guía, entra en el pack.
 * `source` del suscriptor: "tema:{clave}" o "tema:{clave}:{origen}".
 */
class ThemePack
{
    public const SOURCE_PREFIX = 'tema:';

    /** Dónde se pidió, para comparar qué formulario trae más altas. */
    public const ORIGINS = ['ficha', 'guia'];

    public const THEMES = [
        'fotos' => [
            'name' => 'editar fotos con ChatGPT y Gemini',
            'size' => 25,
            // Guía que enlaza las fichas del tema: de ahí sale el pack.
            'guide' => 'prompts-para-editar-fotos-con-ia',
            // Guías donde el formulario del final ofrece este pack.
            'guides' => [
                'prompts-para-editar-fotos-con-ia',
                'editar-fotos-con-ia',
                'quitar-el-fondo-de-una-foto-con-ia',
                'mejorar-calidad-de-una-foto-con-ia',
                'borrar-personas-de-una-foto-con-ia',
                'restaurar-fotos-antiguas-con-ia',
                'foto-de-perfil-profesional-con-ia',
                'convertir-una-foto-en-dibujo-con-ia',
            ],
        ],
    ];

    public static function find(string $key): ?array
    {
        return isset(self::THEMES[$key]) ? ['key' => $key, ...self::THEMES[$key]] : null;
    }

    /** «los 25 prompts más usados para editar fotos con ChatGPT y Gemini» */
    public static function title(array $theme): string
    {
        return "los {$theme['size']} prompts más usados para {$theme['name']}";
    }

    public static function source(string $key, ?string $origin = null): string
    {
        $source = self::SOURCE_PREFIX.$key;

        return in_array($origin, self::ORIGINS, true) ? "{$source}:{$origin}" : $source;
    }

    public static function fromSource(?string $source): ?array
    {
        if ($source === null || ! Str::startsWith($source, self::SOURCE_PREFIX)) {
            return null;
        }

        return self::find(Str::before(Str::after($source, self::SOURCE_PREFIX), ':'));
    }

    public static function originFromSource(?string $source): ?string
    {
        if (self::fromSource($source) === null) {
            return null;
        }

        $rest = Str::after($source, self::SOURCE_PREFIX);
        $origin = Str::contains($rest, ':') ? Str::after($rest, ':') : null;

        return in_array($origin, self::ORIGINS, true) ? $origin : null;
    }

    public static function url(array $theme): string
    {
        return URL::temporarySignedRoute(
            'packs.theme',
            now()->addDays(ProfessionPack::LINK_DAYS),
            ['tema' => $theme['key']],
        );
    }

    /**
     * Slugs de las fichas que enlaza la guía del tema, en su orden. Solo
     * escalares en caché (ver CLAUDE.md).
     *
     * @return list<string>
     */
    public static function slugs(array $theme): array
    {
        return Cache::remember('theme-pack:'.$theme['key'], now()->addHour(), function () use ($theme) {
            preg_match_all('#href="/skills/([a-z0-9-]+)"#', Guides::find($theme['guide'])['body'] ?? '', $m);

            return array_values(array_unique($m[1]));
        });
    }

    /**
     * Las fichas más vistas de las que enlaza la guía, con el prompt completo.
     *
     * @return Collection<int, Skill>
     */
    public static function skills(array $theme): Collection
    {
        return Skill::published()
            ->whereIn('slug', self::slugs($theme))
            ->orderByDesc('views_count')
            ->limit($theme['size'])
            ->get(['id', 'slug', 'title', 'description', 'use_case', 'prompt_content', 'tool_name', 'resource_type']);
    }

    /** Tema cuyo pack se ofrece tras copiar en esta ficha, si lo hay. */
    public static function forSkill(string $slug): ?array
    {
        foreach (array_keys(self::THEMES) as $key) {
            $theme = self::find($key);

            if (in_array($slug, self::slugs($theme), true)) {
                return $theme;
            }
        }

        return null;
    }

    /** Tema cuyo pack ofrece el formulario de esta guía, si lo hay. */
    public static function forGuide(string $slug): ?array
    {
        foreach (array_keys(self::THEMES) as $key) {
            if (in_array($slug, self::THEMES[$key]['guides'], true)) {
                return self::find($key);
            }
        }

        return null;
    }
}
