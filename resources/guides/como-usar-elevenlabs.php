<?php

return [
    'title' => 'Cómo usar ElevenLabs en español: voces, plan gratis, precios y para qué sirve',
    'navTitle' => 'Cómo usar ElevenLabs',
    'seoTitle' => 'ElevenLabs en español: cómo usarlo, gratis y precios',
    'description' => 'Qué es ElevenLabs, qué incluye el plan gratis, cuánto cuestan los de pago y cómo sacar voces naturales en español para vídeos, cursos o audiolibros.',
    'excerpt' => 'ElevenLabs es la herramienta de referencia para generar voces con IA. Tiene plan gratuito, voces en castellano y latino, clonación de voz, doblaje y efectos de sonido. Esta guía explica qué hace cada función y cuándo merece la pena pagar.',
    'category' => 'Herramientas',
    'published' => '2026-11-07',
    'updated' => '2026-11-07',
    'readingMinutes' => 8,
    'words' => 1316,
    'about' => 'ElevenLabs, plataforma de voces y audio con inteligencia artificial',
    'related' => ['convertir-texto-a-voz-con-ia', 'clonar-tu-voz-con-ia', 'doblar-un-video-con-ia', 'crear-un-podcast-con-ia', 'crear-videos-con-ia', 'synthesia-vs-heygen'],
    'toc' => [
        'que-es' => 'Qué es ElevenLabs y qué puedes hacer',
        'empezar' => 'Primeros pasos: tu primera locución',
        'espanol' => 'Que suene bien en español',
        'precios' => 'Plan gratis y planes de pago',
        'funciones' => 'Clonación, doblaje, efectos y música',
        'cuidado' => 'Lo que conviene saber antes de publicar',
    ],
    'faq' => [
        '¿ElevenLabs es gratis?' => 'Tiene un plan gratuito con una cantidad de créditos al mes que da para unos minutos de audio, suficiente para probar las voces. Pero el plan gratis no incluye licencia comercial y obliga a citar a ElevenLabs, y tampoco permite clonar tu voz. Para usar el audio en un vídeo monetizado, un anuncio o un curso de pago necesitas, como mínimo, el plan Starter.',
        '¿ElevenLabs habla español de España?' => 'Sí. Tiene voces en castellano y en español latinoamericano, y sus modelos multilingües leen bien el español. En la biblioteca de voces puedes filtrar por idioma y acento. Si una voz suena con acento que no quieres, prueba otra o indica el acento al diseñar la voz.',
        '¿Cuánto cuesta ElevenLabs?' => 'En otoño de 2026, el plan Starter rondaba los 5 o 6 dólares al mes y el Creator unos 22, con planes superiores para uso profesional. Cada plan da una cantidad de créditos mensuales que se gastan según los caracteres que conviertes en voz. Los precios cambian a menudo: compruébalos en su web antes de contratar.',
        '¿Puedo usar las voces de ElevenLabs en YouTube?' => 'Sí, con un plan de pago, que incluye licencia comercial. Con el plan gratis tienes que atribuir el audio a ElevenLabs y no puedes usarlo comercialmente. Además, si la voz imita a una persona real o el vídeo puede confundir, YouTube pide marcar el contenido como alterado o sintético.',
        '¿Qué diferencia hay entre ElevenLabs y la voz de ChatGPT?' => 'La voz de ChatGPT sirve para conversar con el asistente; ElevenLabs sirve para producir audio: locuciones, narraciones, doblajes o efectos que luego descargas y usas en tus proyectos, con control sobre la voz, el ritmo y la entonación.',
    ],
    'ctaTitle' => 'Guiones listos para ElevenLabs',
    'ctaBody' => 'El resultado depende sobre todo del texto. En el catálogo tienes prompts para preparar <a href="/skills/locucion-de-un-curso-online-con-elevenlabs-lecciones-preparadas-para-voz-con-ia">la locución de un curso</a>, <a href="/skills/narrar-un-capitulo-de-audiolibro-con-elevenlabs-texto-voces-y-pausas">un capítulo de audiolibro</a> o <a href="/skills/voz-en-off-para-videos-cortos-de-redes-con-elevenlabs">la voz en off de un vídeo corto</a>.',
    'body' => <<<'HTML'
<p>Si alguna vez has oído un vídeo con una voz de IA que no sonaba a robot, es probable que estuviera hecha con ElevenLabs. Es la herramienta más usada para convertir texto en voz con calidad profesional, y en los últimos años ha añadido clonación de voz, doblaje de vídeos, efectos de sonido y música.</p>

<p>Esta guía explica qué hace, cómo empezar en español, qué incluye el plan gratis y en qué casos compensa pagar.</p>

<h2 id="que-es">Qué es ElevenLabs y qué puedes hacer</h2>

<p>ElevenLabs es una plataforma web, con aplicación móvil, que genera audio con inteligencia artificial. Sus funciones principales:</p>

<figure>
<table>
    <thead>
        <tr><th>Función</th><th>Para qué sirve</th></tr>
    </thead>
    <tbody>
        <tr><td>Texto a voz</td><td>Escribes o pegas un texto y eliges una voz para leerlo: locuciones, cursos, audiolibros, anuncios</td></tr>
        <tr><td>Biblioteca de voces</td><td>Miles de voces de la comunidad y propias, filtrables por idioma, acento, edad y estilo</td></tr>
        <tr><td>Diseño de voz</td><td>Creas una voz nueva describiéndola con palabras: «mujer de 40 años, cálida, acento madrileño»</td></tr>
        <tr><td>Clonación de voz</td><td>Crea una copia de tu voz a partir de grabaciones tuyas</td></tr>
        <tr><td>Doblaje</td><td>Traduce un vídeo a otro idioma manteniendo la voz de quien habla</td></tr>
        <tr><td>Efectos de sonido y música</td><td>Genera sonidos («puerta que cruje», «lluvia en un tejado») y pistas de música a partir de una descripción</td></tr>
    </tbody>
</table>
</figure>

<p>Para la mayoría de usos profesionales, lo que vas a usar es el texto a voz. El resto son extras que conviene conocer.</p>

<h2 id="empezar">Primeros pasos: tu primera locución</h2>

<ol>
    <li><strong>Crea una cuenta</strong> en elevenlabs.io. Con el plan gratis basta para probar.</li>
    <li><strong>Entra en la herramienta de texto a voz</strong> y pega un texto corto, de un párrafo.</li>
    <li><strong>Elige una voz.</strong> En la biblioteca, filtra por español y escucha varias. La diferencia entre voces es enorme, y elegir bien vale más que cualquier ajuste.</li>
    <li><strong>Genera y escucha.</strong> Si una frase suena rara, cámbiala antes de tocar los ajustes: casi siempre el problema está en el texto.</li>
    <li><strong>Descarga el audio</strong> en MP3 y úsalo en tu editor de vídeo o de audio.</li>
</ol>

<p>Para textos largos, como un curso o un capítulo de libro, divide el texto en bloques. Así puedes regenerar solo el trozo que no te convence sin gastar créditos en todo lo demás.</p>

<h2 id="espanol">Que suene bien en español</h2>

<p>Los fallos típicos en español son la pronunciación de siglas, números y palabras en inglés, y una entonación demasiado plana en textos largos. Se arreglan sobre todo en el guion:</p>

<ul>
    <li><strong>Escribe para el oído.</strong> Frases cortas, una idea por frase y sin paréntesis. Un texto pensado para leer no siempre funciona leído en voz alta.</li>
    <li><strong>Escribe los números y las siglas como se dicen:</strong> «veinticinco por ciento» en lugar de «25 %», y las siglas tal como quieres oírlas: «oenegé» si quieres que lo diga como palabra, «pe de efe» si quieres que deletree.</li>
    <li><strong>Marca las pausas con la puntuación.</strong> Un punto y aparte hace una pausa más larga que una coma. Los puntos suspensivos alargan.</li>
    <li><strong>Usa el modelo más reciente.</strong> Los modelos nuevos entienden indicaciones de emoción entre corchetes, como [susurrando] o [riendo]; prueba si la voz elegida las respeta.</li>
    <li><strong>Prueba el acento.</strong> Si quieres castellano, elige una voz castellana. Una voz latina leyendo un texto de España tendrá acento latino, y al revés.</li>
</ul>

<p>Si prefieres que una IA prepare el texto, pídele a ChatGPT o Claude que lo «adapte para locución»: el prompt de <a href="/skills/locucion-de-un-curso-online-con-elevenlabs-lecciones-preparadas-para-voz-con-ia">locución de un curso</a> hace justo eso. Más técnicas, y alternativas gratuitas, en la guía de <a href="/guias/convertir-texto-a-voz-con-ia">convertir texto a voz con IA</a>.</p>

<h2 id="precios">Plan gratis y planes de pago</h2>

<p>ElevenLabs funciona con créditos mensuales: cada carácter que conviertes en voz gasta créditos, y cada plan da una cantidad al mes. Los planes, en otoño de 2026:</p>

<figure>
<table>
    <thead>
        <tr><th>Plan</th><th>Precio aproximado</th><th>Lo importante</th></tr>
    </thead>
    <tbody>
        <tr><td>Gratis</td><td>0 €</td><td>Unos minutos de audio al mes. Sin licencia comercial: hay que citar a ElevenLabs. Sin clonación de voz</td></tr>
        <tr><td>Starter</td><td>5–6 $ al mes</td><td>Licencia comercial y clonación rápida de voz</td></tr>
        <tr><td>Creator</td><td>Unos 22 $ al mes</td><td>Bastantes más créditos y clonación profesional, la de más calidad</td></tr>
        <tr><td>Pro y superiores</td><td>Desde unos 99 $ al mes</td><td>Para producción en volumen y equipos</td></tr>
    </tbody>
</table>
</figure>

<p>La regla práctica: si solo quieres probar o es para uso personal, el plan gratis basta. Si el audio va a un vídeo monetizado, un anuncio, un curso de pago o cualquier uso comercial, necesitas al menos Starter. Y si vas a producir horas de audio al mes, calcula los créditos antes, porque se acaban rápido con textos largos. Los precios cambian a menudo: compruébalos en su web.</p>

<h2 id="funciones">Clonación, doblaje, efectos y música</h2>

<p><strong>Clonación de voz.</strong> Graba unos minutos de tu voz y ElevenLabs crea una copia que puede leer cualquier texto. Hay una versión rápida, con poco audio, y una profesional, con más grabación y más calidad. Solo puedes clonar tu propia voz o una que tengas permiso para usar. Lo explicamos paso a paso en <a href="/guias/clonar-tu-voz-con-ia">cómo clonar tu voz con IA</a>.</p>

<p><strong>Doblaje.</strong> Subes un vídeo y lo traduce a otro idioma manteniendo la voz de quien habla. Funciona especialmente bien entre español e inglés, pero conviene revisar la traducción antes de publicar. Lo comparamos con otras opciones en <a href="/guias/doblar-un-video-con-ia">doblar un vídeo con IA</a>.</p>

<p><strong>Efectos de sonido.</strong> Describes el sonido y lo genera en segundos. Útil para vídeos, pódcast y juegos sin pasar horas buscando en bancos de sonidos.</p>

<p><strong>Música.</strong> Desde 2025 genera canciones y pistas a partir de una descripción. Si lo que buscas es música, compáralo con las herramientas de nuestra guía de <a href="/guias/crear-musica-con-ia">crear música con IA</a>.</p>

<h2 id="cuidado">Lo que conviene saber antes de publicar</h2>

<ul>
    <li><strong>Revisa la licencia de tu plan.</strong> Lo generado con el plan gratis no puede usarse comercialmente.</li>
    <li><strong>No imites a personas reales sin permiso.</strong> En España la voz está protegida igual que la imagen, y usar la de alguien con fines comerciales sin su consentimiento es ilegal. ElevenLabs además bloquea cuentas por ello.</li>
    <li><strong>Avisa de que es una voz de IA</strong> cuando pueda confundir. Las plataformas como YouTube lo piden para contenido realista, y la normativa europea de IA va en la misma dirección.</li>
    <li><strong>Cuidado con las estafas.</strong> Las voces clonadas se usan para suplantar a familiares o jefes por teléfono. Lo contamos en <a href="/guias/estafas-con-ia-deepfakes-y-suplantacion">estafas con IA y deepfakes</a>.</li>
</ul>

<p>Para empezar, elige un texto que ya tengas, por ejemplo la presentación de tu negocio, y prueba tres voces distintas. En cinco minutos sabrás si la voz con IA encaja con lo que haces.</p>
HTML,
];
