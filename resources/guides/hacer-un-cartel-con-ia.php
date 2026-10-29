<?php

return [
    'title' => 'Cómo hacer un cartel con IA: para un evento, un mercadillo o tu negocio',
    'navTitle' => 'Hacer un cartel con IA',
    'seoTitle' => 'Cómo hacer un cartel con IA paso a paso',
    'description' => 'Cómo hacer un cartel con ChatGPT, Gemini u otras IA: el texto, la imagen sin letras deformadas, el montaje en Canva y el tamaño para imprimir o publicar.',
    'excerpt' => 'Un cartel tiene que entenderse en tres segundos desde el otro lado de la calle. La IA ayuda a escribir el texto y a crear la imagen, pero el mejor resultado sale de no pedirle que lo haga todo a la vez.',
    'category' => 'Práctica',
    'published' => '2026-10-28',
    'updated' => '2026-10-28',
    'readingMinutes' => 7,
    'words' => 1157,
    'about' => 'Diseño de carteles para eventos, actividades y pequeños negocios con herramientas de inteligencia artificial generativa',
    'related' => ['hacer-una-infografia-con-ia', 'crear-imagenes-con-ia', 'hacer-invitaciones-con-ia', 'prompts-para-diseno-grafico', 'crear-un-logo-con-ia', 'ia-para-redes-sociales', 'imagenes-con-ia-derechos-y-uso-comercial'],
    'toc' => [
        'que-hace' => 'Qué hace bien la IA y qué no',
        'texto' => 'Primero el texto',
        'imagen' => 'La imagen: con o sin letras',
        'montar' => 'Montar el cartel',
        'tamanos' => 'Tamaños para imprimir y publicar',
        'revisar' => 'Antes de imprimir',
    ],
    'faq' => [
        '¿Qué IA es mejor para hacer carteles?' => 'Los generadores de imágenes integrados en ChatGPT y Gemini ya escriben textos cortos bastante bien, y Canva tiene herramientas de IA dentro de su editor. Para un cartel con mucha información, lo más fiable es generar la imagen con IA y poner el texto en Canva o en un editor similar.',
        '¿Puedo hacer un cartel con IA gratis?' => 'Sí. Las versiones gratuitas de ChatGPT, Gemini y Canva permiten hacer un cartel completo, aunque con límites de imágenes al día. Para un cartel de un evento o un mercadillo suele ser suficiente.',
        '¿Por qué la IA escribe mal las letras en los carteles?' => 'Los generadores de imágenes dibujan las letras como formas, no las escriben como un procesador de textos. Con frases cortas aciertan cada vez más, pero con fechas, direcciones o párrafos siguen fallando. Por eso conviene añadir el texto después.',
        '¿Qué tamaño tiene un cartel para imprimir?' => 'Los más habituales son A4 (21 × 29,7 cm) y A3 (29,7 × 42 cm), en vertical. Para imprimir con calidad, exporta en PDF o en imagen de al menos 300 píxeles por pulgada, y deja un margen de unos 5 mm sin texto.',
        '¿Puedo usar un cartel hecho con IA para mi negocio?' => 'En general sí, pero revisa las condiciones de la herramienta y no pidas imitar marcas, personajes ni obras de artistas concretos. Si el cartel lleva tu logotipo o fotos de personas reales, asegúrate de tener derecho a usarlas.',
    ],
    'ctaTitle' => 'Skills para diseño y comunicación',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay instrucciones para crear imágenes, escribir textos publicitarios y preparar piezas para redes, muchas pensadas para <a href="/profesiones/diseno">diseño</a> y <a href="/profesiones/marketing">marketing</a>.',
    'body' => <<<'HTML'
<p>El mercadillo navideño del colegio, la fiesta de fin de año de la asociación, las rebajas de tu tienda o una charla en la biblioteca: casi cualquier actividad necesita un cartel, y casi nunca hay un diseñador a mano. La IA puede sacarte del apuro en una tarde. Esta guía explica cómo hacerlo para que el resultado se lea bien, no tenga letras deformadas y se pueda imprimir sin sorpresas.</p>

<h2 id="que-hace">Qué hace bien la IA y qué no</h2>

<p>Hace muy bien dos cosas: proponer textos cortos y llamativos, y generar ilustraciones o fondos con el estilo que le pidas. Hace peor una tercera: escribir mucho texto dentro de una imagen. Los generadores actuales aciertan con un título de tres o cuatro palabras, pero con una fecha, una dirección y un horario siguen colando letras raras, números cambiados o tildes que desaparecen.</p>

<p>Por eso el método que mejor funciona separa el trabajo en tres pasos: texto con el chat, imagen con el generador y montaje en un editor sencillo. Si es la primera vez que generas imágenes, la guía de <a href="/guias/crear-imagenes-con-ia">crear imágenes con IA</a> explica las herramientas y cómo escribir el prompt.</p>

<h2 id="texto">Primero el texto</h2>

<p>Un cartel se lee de un vistazo. Tiene que responder a tres preguntas: qué es, cuándo y dónde. Todo lo demás es secundario. Pídele al asistente que te ayude a recortar:</p>

<blockquote>«Voy a hacer un cartel para el mercadillo solidario de Navidad del colegio San José: sábado 12 de diciembre, de 10:00 a 14:00, en el patio. Habrá manualidades de los alumnos, chocolate con churros y la recaudación va para el comedor social del barrio. Propón cinco titulares de máximo cinco palabras y una línea secundaria de máximo diez. Después, ordena toda la información en tres niveles: lo que se tiene que leer desde lejos, lo que se lee al acercarse y la letra pequeña.»</blockquote>

<p>Esa jerarquía es la clave de un buen cartel, y es lo que más cuesta hacer a ojo. Revisa siempre que fecha, hora y lugar son exactamente los tuyos: es lo único que no puede tener un error.</p>

<h2 id="imagen">La imagen: con o sin letras</h2>

<p>Tienes dos opciones según la cantidad de texto:</p>

<ul>
    <li><strong>Cartel con un solo titular</strong>: puedes pedir la imagen con el texto incluido. Escribe el titular entre comillas en el prompt, pide letra grande y de palo seco y comprueba letra por letra el resultado.</li>
    <li><strong>Cartel con fecha, horario y dirección</strong> (la mayoría): genera la imagen sin texto y deja espacio libre para añadirlo después.</li>
</ul>

<p>Un prompt para el segundo caso:</p>

<blockquote>«Ilustración vertical para un cartel de un mercadillo navideño infantil: puestos de madera con luces cálidas, niños comprando manualidades, estilo ilustración plana con colores rojo, verde y crema. Deja el tercio superior libre, con fondo liso, para poner un titular, y una franja libre abajo para la información. Sin texto ni letras en la imagen.»</blockquote>

<p>«Sin texto ni letras» evita que el generador rellene con palabras inventadas. Si el resultado no te convence, pide cambios concretos sobre la misma imagen (más luz, menos personajes, otro color) en lugar de empezar de cero. Para carteles con un estilo más trabajado, como los de un concierto o una campaña de una marca, la guía de <a href="/guias/prompts-para-diseno-grafico">prompts para diseño gráfico</a> tiene ejemplos más avanzados.</p>

<h2 id="montar">Montar el cartel</h2>

<p>Con el texto y la imagen, abre un editor como Canva, Adobe Express o incluso PowerPoint o Google Slides con el tamaño de página en A4 vertical. Coloca la imagen de fondo y añade el texto en sus tres niveles:</p>

<ol>
    <li><strong>Titular</strong>: grande, en la zona libre de arriba, en una sola tipografía.</li>
    <li><strong>Fecha, hora y lugar</strong>: en un bloque destacado, con mucho contraste sobre el fondo.</li>
    <li><strong>Detalles</strong>: organizador, logotipo, redes sociales o un código QR, abajo y pequeño.</li>
</ol>

<p>Dos reglas de diseño que mejoran cualquier cartel: no uses más de dos tipografías y asegúrate de que el texto tiene contraste suficiente (letra oscura sobre fondo claro o al revés). Si dudas, pásale una captura al asistente y pídele una crítica: «¿se lee bien desde lejos? ¿qué quitarías?». Si el cartel es para tu negocio y aún no tienes logotipo, mira la guía para <a href="/guias/crear-un-logo-con-ia">crear un logo con IA</a>.</p>

<h2 id="tamanos">Tamaños para imprimir y publicar</h2>

<ul>
    <li><strong>A4 o A3 vertical</strong> para imprimir. Exporta en PDF para impresión, o en imagen a 300 píxeles por pulgada, y deja unos 5 mm de margen sin texto.</li>
    <li><strong>1080 × 1350 píxeles</strong> para publicaciones de Instagram y Facebook.</li>
    <li><strong>1080 × 1920 píxeles</strong> para historias y estados de WhatsApp.</li>
</ul>

<p>Lo más práctico es diseñar primero el A4 y después redimensionar, recolocando el texto en cada formato. La guía de <a href="/guias/ia-para-redes-sociales">IA para redes sociales</a> explica cómo preparar el texto de la publicación que acompaña al cartel. Si en lugar de anunciar un evento quieres explicar datos o un proceso, lo que necesitas es una <a href="/guias/hacer-una-infografia-con-ia">infografía hecha con IA</a>.</p>

<h2 id="revisar">Antes de imprimir</h2>

<ol>
    <li><strong>Lee cada dato en voz alta</strong>: fecha, día de la semana, hora y dirección. Un 12 que debería ser 13 arruina el cartel.</li>
    <li><strong>Busca letras deformadas</strong> en la imagen si dejaste que el generador escribiera algo.</li>
    <li><strong>Míralo a dos metros</strong> o reducido en la pantalla: si no entiendes de qué va en tres segundos, sobra texto.</li>
    <li><strong>Imprime una prueba</strong> en blanco y negro antes de encargar copias en color.</li>
    <li><strong>Revisa los derechos</strong>: nada de personajes, marcas o logotipos ajenos. En <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">derechos de las imágenes con IA</a> explicamos qué puedes usar con fines comerciales.</li>
</ol>

<p>Si el evento necesita también invitaciones personales, con el mismo estilo puedes preparar la tarjeta para enviar por WhatsApp siguiendo la guía de <a href="/guias/hacer-invitaciones-con-ia">hacer invitaciones con IA</a>.</p>
HTML,
];
