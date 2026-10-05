<?php

return [
    'title' => 'Crear imágenes con IA: herramientas, prompts y errores comunes',
    'navTitle' => 'Crear imágenes con IA',
    'seoTitle' => 'Crear imágenes con IA: herramientas y prompts',
    'description' => 'Cómo crear imágenes con IA para el trabajo: qué herramienta elegir, la estructura de un buen prompt, cómo editar sin empezar de cero y los fallos típicos.',
    'excerpt' => 'Generar una imagen con IA cuesta diez segundos. Conseguir la imagen que necesitabas cuesta bastante más, y casi siempre por lo mismo: un prompt que describe el tema pero no la foto.',
    'category' => 'Práctica',
    'published' => '2026-09-28',
    'updated' => '2026-09-28',
    'readingMinutes' => 7,
    'words' => 1198,
    'about' => 'Generación de imágenes con inteligencia artificial',
    'related' => ['editar-fotos-con-ia', 'crear-un-logo-con-ia', 'ia-para-redes-sociales', 'prompts-para-diseno-grafico', 'imagenes-con-ia-derechos-y-uso-comercial', 'herramientas-de-ia-gratis', 'presentaciones-con-ia', 'video-y-audio-con-ia-en-el-trabajo', 'como-escribir-prompts-efectivos'],
    'toc' => [
        'herramientas' => 'Qué herramienta usar',
        'prompt' => 'La estructura de un buen prompt',
        'ejemplos' => 'Cuatro prompts para el trabajo',
        'editar' => 'Editar en vez de regenerar',
        'errores' => 'Los fallos más comunes',
        'uso' => 'Antes de publicarla',
    ],
    'faq' => [
        '¿Cuál es la mejor IA para crear imágenes?' => 'Depende de la tarea. Los asistentes generales como ChatGPT o Gemini son los más cómodos para iterar conversando y para imágenes con texto. Midjourney sigue destacando en estética y fotografía artística. Adobe Firefly se integra en Photoshop y está entrenado con contenido con licencia, lo que tranquiliza en usos comerciales. Canva es lo más rápido si la imagen acaba en una pieza de diseño.',
        '¿Se pueden crear imágenes con IA gratis?' => 'Sí. ChatGPT, Gemini, Copilot de Microsoft, Canva y Firefly permiten generar imágenes sin pagar, con un número limitado al día o al mes. Para probar y para usos puntuales es suficiente; si generas a diario, los límites se notan pronto.',
        '¿Por qué la IA escribe mal el texto dentro de las imágenes?' => 'Los modelos más recientes han mejorado mucho, pero siguen fallando con textos largos o palabras poco comunes. Pon el texto exacto entre comillas, que sea corto, y revisa letra a letra. Si es un rótulo importante, genera la imagen sin texto y añádelo después en un editor.',
        '¿Puedo usar las imágenes generadas con IA en mi empresa?' => 'En general sí, siempre que revises las condiciones de la herramienta y no reproduzcas marcas, personas reales o personajes protegidos. Los detalles sobre derechos de autor y uso comercial están en la guía específica de imágenes con IA.',
        '¿Cómo consigo que un personaje salga igual en varias imágenes?' => 'Trabaja en la misma conversación, describe el personaje con los mismos rasgos concretos cada vez y, si la herramienta lo permite, adjunta una imagen anterior como referencia. Aun así, la coherencia perfecta entre muchas imágenes sigue siendo difícil y requiere retoques.',
    ],
    'ctaTitle' => 'Skills de diseño listas para usar',
    'ctaBody' => 'En <a href="/profesiones/diseno">Diseño</a> hay skills para briefings visuales, identidad de marca y piezas para redes que ya traen el prompt trabajado.',
    'body' => <<<'HTML'
<p>La mayoría de imágenes decepcionantes hechas con IA vienen de un prompt como «una oficina moderna con gente trabajando». La herramienta no tiene la culpa: ha hecho exactamente eso, con las decisiones que no le diste tomadas al azar. Esta guía explica qué herramienta elegir, cómo pedir una imagen concreta y cómo corregirla sin volver a empezar.</p>

<h2 id="herramientas">Qué herramienta usar</h2>

<figure>
<table>
    <thead>
        <tr><th>Herramienta</th><th>Destaca en</th><th>Mejor para</th></tr>
    </thead>
    <tbody>
        <tr><td>ChatGPT</td><td>Seguir instrucciones largas, texto dentro de la imagen, editar conversando</td><td>Infografías, maquetas, imágenes para posts</td></tr>
        <tr><td>Gemini</td><td>Edición de fotos propias, rapidez</td><td>Retocar una imagen existente</td></tr>
        <tr><td>Midjourney</td><td>Estética, luz, estilo fotográfico</td><td>Imágenes de campaña, ambientes, portadas</td></tr>
        <tr><td>Adobe Firefly</td><td>Integración con Photoshop, contenido con licencia</td><td>Uso comercial con menos dudas legales</td></tr>
        <tr><td>Canva</td><td>Plantillas y maquetación</td><td>Piezas para redes y presentaciones</td></tr>
    </tbody>
</table>
</figure>

<p>Si no sabes por dónde empezar, usa el asistente que ya tengas. Todos los grandes generan imágenes en su versión gratuita, como se resume en la guía de <a href="/guias/herramientas-de-ia-gratis">herramientas de IA gratis</a>, y la diferencia entre ellos importa menos que la calidad del prompt.</p>

<h2 id="prompt">La estructura de un buen prompt</h2>

<p>Un buen prompt de imagen describe una foto concreta, no un tema. Piensa en lo que decidiría un fotógrafo o un ilustrador:</p>

<ol>
    <li><strong>Sujeto</strong>: quién o qué, con detalles. No «una persona», sino «una mujer de unos 50 años con gafas y chaqueta de punto».</li>
    <li><strong>Acción y contexto</strong>: qué hace y dónde.</li>
    <li><strong>Estilo</strong>: fotografía, ilustración plana, acuarela, render 3D.</li>
    <li><strong>Encuadre</strong>: plano general, primer plano, vista cenital.</li>
    <li><strong>Luz y color</strong>: luz natural de mañana, tonos fríos, colores de marca.</li>
    <li><strong>Formato</strong>: horizontal 16:9 para web, vertical 9:16 para historias, cuadrado para <a href="/guias/ia-para-redes-sociales">redes sociales</a>.</li>
</ol>

<p>Compara el resultado de estas dos peticiones:</p>
<pre><code>Una oficina moderna con gente trabajando.</code></pre>
<pre><code>Fotografía de una oficina pequeña con mucha luz natural. Dos personas
de unos 30 años revisan un portátil de pie junto a una ventana; una
señala la pantalla. Plano medio, profundidad de campo baja, tonos
cálidos. Sin logotipos. Formato horizontal 16:9.</code></pre>

<p>La segunda no es más larga por gusto: cada frase elimina una decisión que, de otro modo, tomaría el modelo. Es el mismo principio que para cualquier <a href="/guias/como-escribir-prompts-efectivos">prompt efectivo</a>.</p>

<h2 id="ejemplos">Cuatro prompts para el trabajo</h2>

<p><strong>Imagen de cabecera para un artículo.</strong></p>
<pre><code>Ilustración plana, estilo editorial, para un artículo sobre gestión
del tiempo. Un reloj de arena grande sobre un escritorio ordenado,
con una libreta y una taza. Paleta de azul oscuro y amarillo mostaza,
fondo liso. Sin texto. Formato 16:9.</code></pre>

<p><strong>Infografía sencilla.</strong></p>
<pre><code>Infografía vertical con tres pasos numerados: «Planificar»,
«Ejecutar», «Revisar». Cada paso con un icono lineal simple. Estilo
limpio, fondo blanco, un solo color de acento verde. Tipografía sans
serif legible. Escribe el texto exactamente como está entre comillas.</code></pre>

<p><strong>Maqueta de producto.</strong></p>
<pre><code>Fotografía de producto de una botella de vidrio ámbar sin etiqueta
sobre una superficie de piedra clara, con una rama de romero al lado.
Luz lateral suave, sombra marcada, fondo neutro desenfocado. Formato
cuadrado.</code></pre>

<p><strong>Imagen para una presentación.</strong></p>
<pre><code>Imagen conceptual para una diapositiva sobre crecimiento: una escalera
de bloques de madera que sube hacia la derecha, con una pequeña planta
en el último bloque. Estilo fotográfico minimalista, mucho espacio
vacío a la izquierda para poner texto. Formato 16:9.</code></pre>

<p>Para piezas más elaboradas de diseño (logotipos, carteles, identidad visual) hay diez ejemplos más en la guía de <a href="/guias/prompts-para-diseno-grafico">prompts para diseño gráfico</a>.</p>

<h2 id="editar">Editar en vez de regenerar</h2>

<p>El error más caro es pulsar «regenerar» una y otra vez esperando que salga bien. Cada vez que regeneras, cambian cosas que sí te gustaban. Es mucho más eficaz pedir cambios concretos sobre la imagen que ya tienes:</p>

<pre><code>Mantén todo igual, pero cambia la chaqueta de la persona de la
izquierda a color azul marino y quita la taza de la mesa.</code></pre>

<ul>
    <li><strong>Un cambio por petición.</strong> Si pides cinco a la vez, alguno se perderá.</li>
    <li><strong>Di qué se queda.</strong> «Mantén el encuadre y la luz» evita sorpresas.</li>
    <li><strong>Usa la selección de zona</strong> si la herramienta la tiene: marcas lo que quieres cambiar y el resto no se toca.</li>
    <li><strong>Parte de una imagen propia</strong> cuando puedas. Una foto real retocada suele quedar más creíble que una generada desde cero.</li>
</ul>

<h2 id="errores">Los fallos más comunes</h2>

<ul>
    <li><strong>Manos, dedos y objetos imposibles.</strong> Han mejorado, pero revisa siempre a tamaño completo.</li>
    <li><strong>Texto con letras cambiadas.</strong> Frases cortas, entre comillas, y comprobación letra a letra.</li>
    <li><strong>Todas las imágenes con el mismo «aire de IA».</strong> Piel demasiado perfecta, luz dramática, colores saturados. Pide explícitamente «aspecto natural, sin retoques, luz corriente».</li>
    <li><strong>Diversidad forzada o inexistente.</strong> Si importa quién aparece, descríbelo; no lo dejes al azar.</li>
    <li><strong>Pedir negaciones.</strong> «Sin coches» a veces añade coches. Mejor describir lo que sí hay: «una calle peatonal vacía».</li>
</ul>

<h2 id="uso">Antes de publicarla</h2>

<p>Tres comprobaciones rápidas antes de que la imagen salga de tu ordenador:</p>

<ol>
    <li><strong>¿Aparece una persona real, una marca o un personaje conocido?</strong> Si es así, no la uses sin revisar derechos. La guía de <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">imágenes con IA: derechos y uso comercial</a> lo explica en detalle.</li>
    <li><strong>¿Puede confundirse con una foto real de algo que no ocurrió?</strong> En noticias, testimonios o productos, indícalo. Además de ético, el <a href="/guias/ai-act-obligaciones-empresas">reglamento europeo de IA</a> obliga a señalar ciertos contenidos generados.</li>
    <li><strong>¿Tiene el tamaño y formato correctos?</strong> Muchas herramientas generan a baja resolución; si va a imprimirse, amplíala con una herramienta de escalado antes.</li>
</ol>

<p>Con eso cubierto, la IA se convierte en lo que mejor sabe ser: una forma rápida de pasar de «algo así» a una imagen concreta que puedes enseñar, corregir y usar. Si partes de una foto real que quieres retocar, quitar el fondo o limpiar, sigue con <a href="/guias/editar-fotos-con-ia">editar fotos con IA</a>; si lo que necesitas es la imagen de tu marca, con <a href="/guias/crear-un-logo-con-ia">crear un logo con IA</a>.</p>
HTML,
];
