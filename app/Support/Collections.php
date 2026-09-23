<?php

namespace App\Support;

/**
 * Colecciones curadas: packs temáticos de skills ("Kit de SEO con IA").
 *
 * Empiezan curadas a mano en resources/data/collections.json, igual que el
 * resto del copy editorial, para poder revisarlas en un diff. Una skill que
 * deja de estar publicada simplemente desaparece del pack al renderizarlo:
 * el JSON no se rompe si alguien despublica una ficha.
 */
class Collections
{
    /** @var array<string, array<string, mixed>>|null */
    private static ?array $cache = null;

    /**
     * @return array<int, array<string, mixed>>
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
     * @return array<int, array<string, mixed>>
     */
    public static function forProfession(string $professionSlug): array
    {
        return array_values(array_filter(
            self::load(),
            fn (array $collection) => ($collection['profession'] ?? null) === $professionSlug
        ));
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    private static function load(): array
    {
        if (self::$cache !== null) {
            return self::$cache;
        }

        $path = resource_path('data/collections.json');
        $items = is_file($path) ? (json_decode(file_get_contents($path), true) ?: []) : [];

        return self::$cache = collect($items)->keyBy('slug')->all();
    }
}
