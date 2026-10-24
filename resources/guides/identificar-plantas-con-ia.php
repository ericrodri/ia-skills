<?php

return [
    'title' => 'Identificar plantas con IA a partir de una foto',
    'navTitle' => 'Identificar plantas con IA',
    'seoTitle' => 'Identificar plantas por foto con IA (gratis)',
    'description' => 'Cómo identificar plantas, flores y árboles con una foto usando Google Lens, PlantNet, iNaturalist o ChatGPT: qué fotografiar, cómo comprobarlo y sus límites.',
    'excerpt' => 'Haces una foto a una planta y en dos segundos tienes un nombre. Casi siempre acierta con lo común y se equivoca con lo raro, con lo que está sin flor y con lo que se parece a otra cosa. La clave está en cómo haces la foto y en no fiarte de una sola respuesta.',
    'category' => 'Práctica',
    'published' => '2026-10-22',
    'updated' => '2026-10-22',
    'readingMinutes' => 6,
    'words' => 1043,
    'about' => 'Identificación de plantas, flores, árboles y otros seres vivos a partir de fotografías con aplicaciones y asistentes de inteligencia artificial',
    'related' => ['decorar-tu-casa-con-ia', 'alucinaciones-de-la-ia', 'herramientas-de-ia-gratis', 'detectar-imagenes-hechas-con-ia', 'como-usar-gemini', 'planificar-un-viaje-con-ia'],
    'toc' => [
        'herramientas' => 'Qué herramienta usar',
        'foto' => 'Cómo hacer la foto',
        'asistentes' => 'Preguntarle a ChatGPT, Gemini o Claude',
        'comprobar' => 'Cómo saber si ha acertado',
        'peligro' => 'Setas y plantas tóxicas: no te fíes',
    ],
    'faq' => [
        '¿Cuál es la mejor app gratis para identificar plantas?' => 'Para plantas silvestres y árboles, PlantNet es gratuita, sin anuncios y muy fiable porque la alimentan botánicos y aficionados. Google Lens es la más cómoda porque ya está en casi todos los móviles. iNaturalist es la mejor si quieres que una persona experta confirme la identificación.',
        '¿Google Lens identifica plantas?' => 'Sí. Abre Google Lens desde la app de Google, la cámara de Android o Google Fotos, apunta a la planta y te muestra el nombre probable con fotos parecidas. Funciona muy bien con plantas de interior y de jardín comunes; con especies silvestres parecidas entre sí conviene contrastarlo con PlantNet.',
        '¿Se puede identificar una planta solo por la hoja?' => 'A veces. Con árboles y plantas de hoja muy característica suele bastar, pero muchas especies tienen hojas casi iguales y se distinguen por la flor o el fruto. Si la app duda entre varias opciones, añade una foto del tallo, la flor o la corteza.',
        '¿La IA me dice si una planta es tóxica para mi gato o mi perro?' => 'Te dará una orientación, pero puede confundir especies parecidas con distinta toxicidad. Úsala para saber qué buscar y confirma el nombre exacto en una fuente veterinaria. Si tu mascota ya ha mordido la planta y tiene síntomas, llama al veterinario sin esperar a identificarla.',
        '¿Puedo identificar setas con una app?' => 'Para curiosear, sí; para comer, nunca. Varias setas mortales se parecen mucho a especies comestibles, y una foto no muestra los detalles que hacen falta para distinguirlas. Lleva siempre las setas a una sociedad micológica o a un experto antes de consumirlas.',
    ],
    'ctaTitle' => 'Más usos prácticos de la IA',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay instrucciones para sacar partido a los asistentes con imágenes, documentos y datos, organizadas por profesión, como <a href="/skills?q=datos">análisis de datos</a> o <a href="/profesiones/freelancers">autónomos</a>.',
    'body' => <<<'HTML'
<p>Una planta que te han regalado y no sabes cómo cuidar, un árbol que ves cada día en el parque, una flor del campo que te ha llamado la atención. Hoy basta con una foto para tener un nombre. Las aplicaciones de reconocimiento de imágenes y los asistentes como ChatGPT, Gemini o Claude aciertan la mayoría de las veces con las especies comunes. Esta guía explica cuál usar en cada caso, cómo hacer la foto para que acierten más y cuándo no deberías fiarte de lo que te dicen.</p>

<h2 id="herramientas">Qué herramienta usar</h2>

<table>
    <thead>
        <tr><th>Herramienta</th><th>Precio</th><th>Para qué es mejor</th></tr>
    </thead>
    <tbody>
        <tr><td>Google Lens</td><td>Gratis</td><td>Lo más rápido: plantas de interior, jardín y ciudad. Ya viene en la app de Google y en muchos Android.</td></tr>
        <tr><td>PlantNet</td><td>Gratis, sin anuncios</td><td>Plantas silvestres y árboles. Proyecto científico, te enseña fotos de referencia para comparar.</td></tr>
        <tr><td>iNaturalist</td><td>Gratis</td><td>Cuando quieres confirmación humana: otros usuarios y expertos revisan tu observación. También sirve para insectos, aves y hongos.</td></tr>
        <tr><td>ChatGPT, Gemini, Claude</td><td>Gratis con límites</td><td>Hacer preguntas después: cuidados, si es tóxica, por qué tiene las hojas amarillas.</td></tr>
        <tr><td>PictureThis y similares</td><td>Suscripción</td><td>Diagnóstico de plagas y recordatorios de riego. Cuidado con las pruebas gratis que se renuevan solas.</td></tr>
    </tbody>
</table>

<p>Lo práctico es combinar dos: una app de identificación para el nombre y un asistente para todo lo que quieras saber después. Si te interesan más herramientas sin coste, hay una lista en <a href="/guias/herramientas-de-ia-gratis">herramientas de IA gratis</a>.</p>

<h2 id="foto">Cómo hacer la foto</h2>

<p>La mayoría de los errores vienen de la foto, no de la herramienta. Cuatro reglas:</p>

<ul>
    <li><strong>Un solo protagonista</strong>. Acércate hasta que la planta ocupe casi toda la imagen; si hay tres especies mezcladas, la app elige una al azar.</li>
    <li><strong>La parte que distingue</strong>. La flor es lo que más ayuda; si no tiene, el fruto; después, la hoja vista de cerca por delante y por detrás. En árboles, añade la corteza.</li>
    <li><strong>Luz natural y sin contraluz</strong>. Las fotos oscuras o quemadas pierden el color y la textura, que son pistas clave.</li>
    <li><strong>Varias fotos</strong>. PlantNet e iNaturalist permiten subir varias de la misma planta (flor, hoja, porte) y el resultado mejora mucho.</li>
</ul>

<h2 id="asistentes">Preguntarle a ChatGPT, Gemini o Claude</h2>

<p>Los asistentes generales también reconocen plantas en fotos, y tienen una ventaja: puedes darles contexto y seguir preguntando. Sube la foto y usa una petición como esta:</p>

<blockquote>«¿Qué planta es esta? Está en [INTERIOR / JARDÍN / MONTE] en [ZONA O PAÍS], en [ESTACIÓN]. Dame las tres especies más probables, ordenadas, con el rasgo de la foto que te hace pensar en cada una y qué tendría que fotografiar para distinguirlas. Si no estás seguro, dilo.»</blockquote>

<p>Pedir varias opciones en lugar de una es importante: obliga al asistente a mostrar sus dudas en vez de responder con seguridad aparente. Una vez tengas el nombre, puedes seguir: «¿cada cuánto se riega?», «¿por qué se le caen las hojas?», «¿aguanta en una terraza orientada al norte?». Si estás pensando dónde colocarla en casa, en <a href="/guias/decorar-tu-casa-con-ia">decorar tu casa con IA</a> se explica cómo probar distintas distribuciones con una foto de la habitación.</p>

<h2 id="comprobar">Cómo saber si ha acertado</h2>

<p>Ninguna herramienta acierta siempre, y los asistentes a veces responden con mucha seguridad aunque se equivoquen (es lo que se explica en <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>). Para comprobar:</p>

<ol>
    <li><strong>Compara con fotos de referencia</strong> del nombre que te ha dado, no solo con la primera imagen. Fíjate en la forma de la hoja, cómo se insertan en el tallo y el número de pétalos.</li>
    <li><strong>Pregunta a una segunda herramienta</strong>. Si Google Lens y PlantNet coinciden, es muy probable que sea correcto.</li>
    <li><strong>Mira el porcentaje</strong>. PlantNet indica su grado de confianza; por debajo del 50 % tómalo como una pista, no como una respuesta.</li>
    <li><strong>Comprueba que crece donde estás</strong>. Si te dice que es una especie tropical y estás en un monte de Soria, desconfía.</li>
</ol>

<h2 id="peligro">Setas y plantas tóxicas: no te fíes</h2>

<p>Identificar por foto es estupendo para la curiosidad y la jardinería. No lo es para decidir si algo se come:</p>

<ul>
    <li><strong>Setas</strong>: algunas de las más peligrosas, como la <em>Amanita phalloides</em>, se confunden con especies comestibles, y una foto no muestra el olor, la base del pie ni la esporada. Llévalas siempre a una sociedad micológica o a un farmacéutico con formación en micología.</li>
    <li><strong>Plantas silvestres para infusiones o ensaladas</strong>: hay especies tóxicas casi idénticas a otras inofensivas (la cicuta y el perejil o el hinojo silvestre son el ejemplo clásico).</li>
    <li><strong>Mascotas y niños</strong>: usa la identificación para saber qué buscar y confírmalo en una fuente fiable. Si ya hay síntomas, llama al veterinario o al Servicio de Información Toxicológica (91 562 04 20) sin esperar.</li>
</ul>

<p>La misma lógica vale para cualquier cosa que la IA identifique en una imagen: es una primera pista excelente y una mala última palabra.</p>
HTML,
];
