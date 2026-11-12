<?php

return [
    'title' => 'Qué es Nano Banana y cómo usarlo gratis en Gemini',
    'navTitle' => 'Nano Banana',
    'seoTitle' => 'Qué es Nano Banana y cómo usarlo gratis',
    'description' => 'Qué es Nano Banana, en qué se diferencian Nano Banana 2 y Pro, cómo usarlo gratis en Gemini para crear y editar fotos y qué prompts dan mejor resultado.',
    'excerpt' => 'Nano Banana es el nombre con el que se conoce el modelo de imágenes de Gemini. Se puede usar gratis, edita fotos propias sin cambiar la cara y tiene varias versiones que conviene distinguir.',
    'category' => 'Herramientas',
    'published' => '2026-11-05',
    'updated' => '2026-11-05',
    'readingMinutes' => 9,
    'words' => 1403,
    'about' => 'Nano Banana, el modelo de generación y edición de imágenes de Google Gemini',
    'related' => ['gemini-no-genera-imagenes', 'como-usar-gemini', 'editar-fotos-con-ia', 'prompts-para-editar-fotos-con-ia', 'crear-imagenes-con-ia', 'imagenes-con-ia-derechos-y-uso-comercial'],
    'toc' => [
        'que-es' => 'Qué es Nano Banana',
        'versiones' => 'Nano Banana, Pro y 2: en qué se diferencian',
        'gratis' => 'Cómo usarlo gratis paso a paso',
        'prompts' => 'Prompts que funcionan',
        'limites' => 'Límites, marca de agua y lo que no hace',
        'alternativas' => 'Frente a ChatGPT y otras herramientas',
    ],
    'faq' => [
        '¿Qué es Nano Banana?' => 'Es el apodo del modelo de generación y edición de imágenes de Google que funciona dentro de Gemini. El nombre nació cuando el modelo se probó de forma anónima en una plataforma de comparación de modelos, antes de su lanzamiento oficial en agosto de 2025, y Google acabó adoptándolo. Sirve para crear imágenes desde una descripción y, sobre todo, para editar fotos propias con instrucciones de texto.',
        '¿Nano Banana es gratis?' => 'Sí, con límites. Cualquier cuenta gratuita de Google puede usarlo desde la aplicación o la web de Gemini, con un número de imágenes al día que Google ajusta según la demanda y el modelo. Los planes de pago de Google AI dan más imágenes, resolución mayor y acceso a la versión Pro. Para desarrolladores se usa a través de la API de Gemini, que es de pago por imagen.',
        '¿Qué diferencia hay entre Nano Banana 2 y Nano Banana Pro?' => 'Nano Banana 2, de febrero de 2026, es la versión rápida y la que usa por defecto la aplicación de Gemini, también en el plan gratuito. Nano Banana Pro, de noviembre de 2025, es más lento pero cuida más el detalle, escribe mejor el texto dentro de la imagen y maneja composiciones complejas como infografías. En la aplicación, Pro queda para los planes de pago.',
        '¿Dónde se usa Nano Banana?' => 'En la aplicación de Gemini para Android y iPhone y en gemini.google.com, eligiendo la herramienta de crear imágenes o simplemente pidiendo una imagen o subiendo una foto. Google lo ha integrado también en otros productos suyos, y los desarrolladores lo usan desde Google AI Studio y la API. No hay que descargar nada aparte: las aplicaciones que se anuncian como «Nano Banana» en las tiendas no son de Google.',
        '¿Se puede usar Nano Banana con fotos de personas?' => 'Sí, puedes editar fotos tuyas o de personas que te hayan dado permiso, y es donde más destaca porque respeta bien los rasgos. Google bloquea las ediciones que sexualizan a alguien, las fotos de menores en ciertos contextos y los montajes engañosos con personajes públicos. Usar la cara de otra persona sin su permiso puede vulnerar su derecho a la propia imagen aunque la herramienta lo permita.',
    ],
    'ctaTitle' => 'Prompts de imagen listos para copiar',
    'ctaBody' => 'Nano Banana responde mucho mejor a instrucciones concretas. En la página de <a href="/herramientas/gemini">prompts para Gemini</a> tienes los que mejor funcionan para editar fotos y crear imágenes, y más ejemplos en <a href="/guias/prompts-para-editar-fotos-con-ia">prompts para editar fotos con IA</a>.',
    'body' => <<<'HTML'
<p>En pocas semanas de 2025, millones de personas subieron una foto suya a Gemini y le pidieron que la convirtiera en una figura de colección, con su caja y su peana. El responsable de aquella moda tenía un nombre poco serio: Nano Banana. Desde entonces es una de las búsquedas de IA más repetidas, y también una de las más confusas, porque ya hay varias versiones con nombres parecidos.</p>

<p>Esta guía explica qué es, en qué se diferencian sus versiones, cómo usarlo gratis y qué pedirle para que el resultado salga bien a la primera.</p>

<h2 id="que-es">Qué es Nano Banana</h2>

<p>Nano Banana es el apodo del modelo de imágenes de Google que funciona dentro de Gemini. Su nombre técnico era Gemini 2.5 Flash Image. Antes del lanzamiento, Google lo puso a prueba de forma anónima en una web donde la gente compara modelos sin saber cuál es cuál, con ese nombre en clave. Ganó tantas comparaciones que el apodo se quedó, y Google lo adoptó oficialmente.</p>

<p>Hace dos cosas:</p>

<ul>
    <li><strong>Crear imágenes</strong> a partir de una descripción, como cualquier generador.</li>
    <li><strong>Editar fotos que subes</strong> con instrucciones de texto: cambiar el fondo, la ropa o la luz, quitar un objeto, combinar varias fotos o cambiar el estilo. Aquí está su fuerza: mantiene la cara y los rasgos de la persona mucho mejor que los modelos anteriores.</li>
</ul>

<h2 id="versiones">Nano Banana, Pro y 2: en qué se diferencian</h2>

<figure>
<table>
    <thead>
        <tr><th>Versión</th><th>Lanzamiento</th><th>Para qué destaca</th><th>Disponibilidad en la aplicación</th></tr>
    </thead>
    <tbody>
        <tr><td>Nano Banana</td><td>Agosto de 2025</td><td>La original: edición rápida conservando la cara</td><td>Sustituida por las versiones nuevas</td></tr>
        <tr><td>Nano Banana Pro</td><td>Noviembre de 2025</td><td>Más detalle, texto legible dentro de la imagen, infografías y composiciones complejas</td><td>Planes de pago</td></tr>
        <tr><td>Nano Banana 2</td><td>Febrero de 2026</td><td>Calidad cercana a Pro con la velocidad de la original</td><td>Por defecto, también gratis</td></tr>
    </tbody>
</table>
</figure>

<p>Google sigue sacando revisiones, sobre todo para desarrolladores, así que el número cambia cada pocos meses. Para el uso normal no tienes que elegir: la aplicación de Gemini usa la versión vigente y, si pagas, te deja rehacer una imagen con Pro cuando necesitas más calidad.</p>

<h2 id="gratis">Cómo usarlo gratis paso a paso</h2>

<ol>
    <li><strong>Entra en Gemini</strong> con tu cuenta de Google, en la aplicación del móvil o en gemini.google.com. No hace falta pagar ni instalar nada más.</li>
    <li><strong>Elige la herramienta de crear imágenes</strong> en el menú de herramientas del cuadro de texto. No es obligatorio, pero evita que Gemini conteste con texto en lugar de hacer la imagen.</li>
    <li><strong>Sube una foto si quieres editarla</strong>, con el botón de añadir archivo. Puedes subir varias para combinarlas.</li>
    <li><strong>Escribe lo que quieres</strong>, con detalle. Debajo tienes ejemplos.</li>
    <li><strong>Corrige en la misma conversación.</strong> «Igual, pero con luz de tarde» o «quita la taza de la mesa». Mantiene el contexto y no hace falta empezar de cero.</li>
    <li><strong>Descarga la imagen</strong> desde el botón que aparece al abrirla.</li>
</ol>

<p>Si no te genera nada, te contesta con texto o dice que no puede ayudarte, tienes las causas y su arreglo en <a href="/guias/gemini-no-genera-imagenes">Gemini no genera imágenes</a>. Y si no conoces Gemini, empieza por <a href="/guias/como-usar-gemini">cómo usar Gemini</a>.</p>

<h2 id="prompts">Prompts que funcionan</h2>

<p>La regla que más mejora el resultado: <strong>di qué quieres cambiar y qué no se puede tocar</strong>. Algunos ejemplos para adaptar:</p>

<ul>
    <li><strong>Figura de colección:</strong> «Convierte a la persona de la foto en una figura de colección a escala 1/7, realista, sobre una peana transparente en un escritorio, con la caja del producto al lado con su ilustración. Mantén su cara y su ropa».</li>
    <li><strong>Cambiar el fondo:</strong> «Cambia el fondo por una calle de Lisboa al atardecer. No cambies a la persona, su postura ni la luz de su cara».</li>
    <li><strong>Foto de perfil:</strong> «Haz un retrato profesional a partir de esta foto: fondo gris liso, camisa azul, luz suave de estudio. Mantén exactamente los rasgos y la expresión». Más ideas en <a href="/guias/foto-de-perfil-profesional-con-ia">foto de perfil profesional con IA</a>.</li>
    <li><strong>Combinar fotos:</strong> «Pon al perro de la segunda foto sentado junto a la persona de la primera, en el mismo sofá, con la misma luz».</li>
    <li><strong>Decoración:</strong> «Redecora este salón en estilo nórdico, con muebles de madera clara. Mantén las paredes, las ventanas y el suelo». Lo desarrollamos en <a href="/guias/decorar-tu-casa-con-ia">decorar tu casa con IA</a>.</li>
    <li><strong>Restaurar:</strong> «Restaura esta foto antigua: quita las rayas y las manchas y mejora la nitidez sin cambiar las caras». Ver <a href="/guias/restaurar-fotos-antiguas-con-ia">restaurar fotos antiguas con IA</a>.</li>
</ul>

<p>Cuando quieras texto dentro de la imagen, como un cartel o una felicitación, escríbelo entre comillas y di dónde va. Las versiones nuevas lo escriben bien casi siempre, pero revisa la ortografía antes de usarla.</p>

<h2 id="limites">Límites, marca de agua y lo que no hace</h2>

<ul>
    <li><strong>Número de imágenes.</strong> El plan gratuito tiene un tope diario que Google no fija de forma permanente: lo ajusta según la demanda y la versión. Cuando lo alcanzas, Gemini te avisa y se renueva con el tiempo. Los planes de pago lo amplían bastante.</li>
    <li><strong>Marca de agua.</strong> Todas las imágenes llevan SynthID, una marca invisible que permite identificarlas como generadas por IA, y en los planes básicos también un pequeño símbolo visible en una esquina. No intentes quitarlas para hacer pasar una imagen por real: explicamos cómo se detectan en <a href="/guias/detectar-imagenes-hechas-con-ia">detectar imágenes hechas con IA</a>.</li>
    <li><strong>Normas.</strong> Rechaza desnudos, violencia explícita, ediciones de menores en ciertos contextos y montajes engañosos con personas reales conocidas.</li>
    <li><strong>Aplicaciones falsas.</strong> En las tiendas de aplicaciones hay programas que se anuncian como «Nano Banana» y cobran suscripciones. Google no tiene una aplicación con ese nombre: se usa desde Gemini.</li>
</ul>

<p>Si vas a usar las imágenes en un negocio, revisa antes <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">derechos y uso comercial de las imágenes con IA</a>: el problema rara vez es la herramienta y casi siempre lo que aparece en la imagen.</p>

<h2 id="alternativas">Frente a ChatGPT y otras herramientas</h2>

<p>Su gran rival es el generador de imágenes de ChatGPT. A grandes rasgos, Nano Banana suele ser más rápido y más fiel con la cara al editar fotos propias, y ChatGPT sigue mejor las instrucciones largas y las escenas muy compuestas. Para un acabado artístico, Midjourney sigue teniendo su público.</p>

<p>No hay un ganador fijo, porque los dos se actualizan cada pocos meses. Lo práctico es probar el mismo prompt con la misma foto en los dos y quedarte con el resultado. Tienes la comparación completa en <a href="/guias/crear-imagenes-con-ia">crear imágenes con IA</a> y en <a href="/guias/editar-fotos-con-ia">editar fotos con IA</a>.</p>
HTML,
];
