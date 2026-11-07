<?php

/*
 * Herramientas con enlace de afiliado (App\Support\Affiliates).
 *
 * Para añadir una: el usuario se da de alta en el programa y pasa su enlace.
 * `pattern` decide en qué fichas y guías aparece el recuadro: las que
 * mencionan la herramienta en el título, la herramienta o el texto.
 *
 * Condiciones de cada programa (no las incumplas en el contenido):
 *  - ElevenLabs (PartnerStack): prohibido pujar en anuncios de buscadores por
 *    términos de ElevenLabs. 22 % recurrente 12 meses (11 % en Business).
 */

return [
    'elevenlabs' => [
        'name' => 'ElevenLabs',
        'url' => env('AFFILIATE_ELEVENLABS_URL', 'https://try.elevenlabs.io/03fvt05citih'),
        'pattern' => '/eleven\s?labs/i',
        'blurb' => 'Voces de IA muy naturales en español: locuciones, audiolibros, doblaje y clonación de voz. Tiene plan gratuito para probar.',
        'cta' => 'Probar ElevenLabs gratis',
    ],
];
