<?php

/**
 * Cuenta las palabras de una guía (cuerpo + FAQ), que es la convención con la
 * que se rellena el campo 'words' del registro de guías. Uso:
 *
 *   php scripts/guide_wordcount.php [slug ...]
 *
 * Sin argumentos recorre todas las guías y avisa de las que declaran un valor
 * que se desvía más de un 5 % del recuento real.
 */
$dir = __DIR__.'/../resources/guides';

$slugs = array_slice($argv, 1);

if (! $slugs) {
    $slugs = array_map(
        fn (string $path) => basename($path, '.php'),
        glob($dir.'/*.php')
    );
}

$extra = 'áéíóúüñÁÉÍÓÚÜÑ0123456789';

foreach ($slugs as $slug) {
    $guide = require $dir."/{$slug}.php";

    $text = strip_tags($guide['body'])
        .' '.implode(' ', array_keys($guide['faq'] ?? []))
        .' '.implode(' ', array_values($guide['faq'] ?? []));

    $words = str_word_count($text, 0, $extra);
    $declared = $guide['words'] ?? 0;
    $minutes = max(1, (int) round($words / 165));
    $drift = $declared ? abs($words - $declared) / $declared : 1;

    printf(
        "%-42s declarado=%-6d real=%-6d min=%-3d %s\n",
        $slug,
        $declared,
        $words,
        $minutes,
        $drift > 0.05 ? 'REVISAR' : ''
    );
}
