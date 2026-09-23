<?php

namespace App\Support;

/**
 * Plantillas para el formulario de "Compartir skill".
 *
 * Un formulario en blanco produce envíos flojos (un título y dos líneas de
 * prompt) que luego hay que rechazar. Las plantillas enseñan la estructura
 * que funciona —situación, tarea, criterios, formato, límites— con un ejemplo
 * por profesión. El copy vive en resources/data/skill-templates.json.
 */
class SkillTemplates
{
    /** @var array<int, array<string, mixed>>|null */
    private static ?array $cache = null;

    /**
     * @return array<int, array<string, mixed>>
     */
    public static function all(): array
    {
        if (self::$cache !== null) {
            return self::$cache;
        }

        $path = resource_path('data/skill-templates.json');

        if (! is_file($path)) {
            return self::$cache = [];
        }

        return self::$cache = json_decode(file_get_contents($path), true) ?: [];
    }
}
