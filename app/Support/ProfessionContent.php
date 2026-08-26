<?php

namespace App\Support;

/**
 * Copy editorial de las landings por profesión.
 *
 * Vivía duplicado dentro de Professions/Show.vue, lo que impedía emitir el
 * FAQPage desde el servidor. Ahora la fuente única es
 * resources/data/profession-content.json: el controlador lo usa para los datos
 * estructurados y lo pasa como prop para el render visible.
 */
class ProfessionContent
{
    /** @var array<string, array{intro: array<int, string>, faq: array<int, array{q: string, a: string}>}>|null */
    private static ?array $cache = null;

    /**
     * @return array{intro: array<int, string>, faq: array<int, array{q: string, a: string}>}|null
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
        $faq = self::for($slug)['faq'] ?? [];

        return collect($faq)->mapWithKeys(fn (array $item) => [$item['q'] => $item['a']])->all();
    }

    /**
     * @return array<string, array{intro: array<int, string>, faq: array<int, array{q: string, a: string}>}>
     */
    public static function all(): array
    {
        if (self::$cache !== null) {
            return self::$cache;
        }

        $path = resource_path('data/profession-content.json');

        if (! is_file($path)) {
            return self::$cache = [];
        }

        return self::$cache = json_decode(file_get_contents($path), true) ?: [];
    }
}
