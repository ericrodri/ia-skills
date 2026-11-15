<?php

namespace App\Support;

/**
 * Contenido editorial extra de las fichas que más tráfico traen de Google:
 * respuesta rápida, pasos y preguntas frecuentes, en
 * resources/data/skill-content.json (clave = slug).
 *
 * Existe porque esas fichas salían en la posición 5 con un CTR del 1 %: la
 * gente busca «cómo le pido a ChatGPT que…» y la ficha solo tenía el prompt.
 * La misma fuente alimenta lo visible (Skills/Show.vue), la versión sin
 * JavaScript y el FAQPage del servidor, así que nunca pueden ir por separado.
 */
class SkillContent
{
    /** @var array<string, array{answer?: string, steps?: list<string>, faq?: list<array{q: string, a: string}>}>|null */
    private static ?array $cache = null;

    /**
     * @return array{answer?: string, steps?: list<string>, faq?: list<array{q: string, a: string}>}|null
     */
    public static function for(string $slug): ?array
    {
        return self::all()[$slug] ?? null;
    }

    /**
     * FAQ como pares [pregunta => respuesta], listo para Seo::faq().
     *
     * @return array<string, string>
     */
    public static function faqPairs(string $slug): array
    {
        return collect(self::for($slug)['faq'] ?? [])
            ->mapWithKeys(fn (array $item) => [$item['q'] => $item['a']])
            ->all();
    }

    /**
     * @return array<string, array{answer?: string, steps?: list<string>, faq?: list<array{q: string, a: string}>}>
     */
    public static function all(): array
    {
        if (self::$cache !== null) {
            return self::$cache;
        }

        $path = resource_path('data/skill-content.json');

        return self::$cache = is_file($path) ? (json_decode(file_get_contents($path), true) ?: []) : [];
    }
}
