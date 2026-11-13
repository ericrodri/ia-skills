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
 *
 * `pages` (opcional): enlace distinto según la página de origen, para llevar
 * a una página concreta de la herramienta. Se crean en el panel del programa
 * (en PartnerStack, «Enlaces personalizados», con destinos ya aprobados).
 * Las demás páginas usan `url`.
 *
 * Una página con enlace propio en `pages` muestra siempre el recuadro.
 * `match` => 'title' (opcional): `pattern` se busca solo en el título.
 *
 * `sid` (opcional): nombre del parámetro con el que el programa recibe la
 * página de origen (PartnerStack usa `sid1`), para ver en su panel qué página
 * trae cada alta. Sin `sid` no se añade nada.
 *
 *  - Pixa (antes Pixelcut, programa en Dub Partners): 30 % el primer año.
 *    Nuestras páginas no la nombran: `pattern` detecta el tema (quitar fondos,
 *    mejorar o ampliar fotos, borrar objetos, fotos de producto).
 */

return [
    'elevenlabs' => [
        'name' => 'ElevenLabs',
        'url' => env('AFFILIATE_ELEVENLABS_URL', 'https://try.elevenlabs.io/03fvt05citih'),
        // Prueba desde el 13-11-2026: ¿convierte mejor la página concreta que la portada?
        'pages' => [
            '/guias/doblar-un-video-con-ia' => 'https://try.elevenlabs.io/ia-skills-doblaje',
            '/guias/clonar-tu-voz-con-ia' => 'https://try.elevenlabs.io/ia-skills-clonar-voz',
        ],
        'sid' => 'sid1',
        'pattern' => '/eleven\s?labs/i',
        'blurb' => 'Voces de IA muy naturales en español: locuciones, audiolibros, doblaje y clonación de voz. Tiene plan gratuito para probar.',
        'cta' => 'Probar ElevenLabs gratis',
    ],
    'pixa' => [
        'name' => 'Pixa',
        'url' => 'https://getpixa.link/ia-skills',
        'pages' => [
            '/guias/quitar-el-fondo-de-una-foto-con-ia' => 'https://getpixa.link/ia-skills-fondo',
            '/guias/mejorar-calidad-de-una-foto-con-ia' => 'https://getpixa.link/ia-skills-calidad',
            '/guias/borrar-personas-de-una-foto-con-ia' => 'https://getpixa.link/ia-skills-objetos',
            '/guias/restaurar-fotos-antiguas-con-ia' => 'https://getpixa.link/ia-skills-calidad',
            '/guias/editar-fotos-con-ia' => 'https://getpixa.link/ia-skills',
            '/guias/prompts-para-editar-fotos-con-ia' => 'https://getpixa.link/ia-skills',
        ],
        // Solo el título: en el cuerpo, «fondo transparente» o el enlace a la
        // guía de mejorar fotos aparecen en páginas que no van de esto.
        'match' => 'title',
        'pattern' => '/(?:quitar|eliminar|borrar)(?:le)?\s+(?:el\s+)?fondo|fondo\s+transparente'
            .'|(?:mejor(?:ar|e|a)|aument(?:ar|e)|sub(?:ir|a))(?:le)?\s+(?:la\s+)?(?:calidad|resoluci[oó]n|nitidez)\s+(?:a|de)\s+(?:una?|la|las|tu|tus|esta)?\s*(?:fotos?|im[aá]gen(?:es)?)'
            .'|ampl[ií](?:ar|e)\s+(?:una?|la|tu)?\s*(?:fotos?|im[aá]gen(?:es)?)|reescalar|upscal'
            .'|(?:quitar|eliminar|borrar)\s+(?:a\s+)?(?:personas|objetos|gente)\s+de\s+(?:una?|la|tus?)?\s*(?:fotos?|im[aá]gen(?:es)?)'
            .'|fotos?\s+de\s+productos?/iu',
        'blurb' => 'Quita fondos, borra objetos y mejora la calidad de tus fotos con IA en un clic, sin escribir prompts. En español y gratis para probar.',
        'cta' => 'Probar Pixa gratis',
    ],
];
