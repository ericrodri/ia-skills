<?php

return [
    'title' => 'Gemini no genera imágenes o no edita tus fotos: causas y soluciones',
    'navTitle' => 'Gemini no genera imágenes',
    'seoTitle' => 'Gemini no genera imágenes: causas y soluciones',
    'description' => 'Por qué Gemini no crea imágenes, no edita tus fotos o te cambia la cara, y qué hacer en cada caso: límites del plan, cuenta, normas y cómo pedirlo.',
    'excerpt' => 'Gemini contesta con texto, dice que no puede ayudarte con eso o te devuelve a otra persona en lugar de tu foto. Son tres problemas distintos, y cada uno tiene su arreglo.',
    'category' => 'Herramientas',
    'published' => '2026-11-03',
    'updated' => '2026-11-03',
    'readingMinutes' => 9,
    'words' => 1489,
    'about' => 'Problemas al crear y editar imágenes con Gemini y cómo resolverlos',
    'related' => ['como-usar-gemini', 'editar-fotos-con-ia', 'prompts-para-editar-fotos-con-ia', 'crear-imagenes-con-ia', 'chatgpt-no-funciona', 'chatgpt-vs-gemini'],
    'toc' => [
        'sintomas' => 'Qué te pasa exactamente',
        'texto' => 'Contesta con texto en lugar de hacer la imagen',
        'cuenta' => 'Tu cuenta no tiene la función',
        'limite' => 'Has llegado al límite del día',
        'rechaza' => 'Dice que no puede ayudarte con esa imagen',
        'cara' => 'Edita la foto pero te cambia la cara',
        'calidad' => 'La imagen sale mal o con texto raro',
    ],
    'faq' => [
        '¿Por qué Gemini no me genera imágenes?' => 'Las causas más habituales son cuatro: no ha entendido que querías una imagen y contesta con texto; tu cuenta no tiene la función, por ejemplo una cuenta de empresa o de centro educativo en la que el administrador la ha desactivado, o una cuenta sin sesión iniciada; has agotado las imágenes del día de tu plan; o la petición choca con sus normas de uso. Empieza por pedirlo de forma explícita, «crea una imagen de…», y comprueba que has iniciado sesión con tu cuenta personal.',
        '¿Por qué Gemini no me deja editar fotos?' => 'Gemini edita fotos que subes, pero tiene más restricciones que al crear imágenes desde cero: rechaza modificar fotos de menores, de personas famosas o cambios que puedan usarse para suplantar o desnudar a alguien. Las cuentas de menores de edad también tienen la edición limitada. Si la foto es tuya y el cambio es inocente, reformula la petición describiendo el cambio concreto en lugar de pedir que transforme a la persona.',
        '¿Cómo hago que Gemini no cambie la cara al editar una foto?' => 'Dile de forma explícita qué no puede tocar: «mantén exactamente la cara, los rasgos, la expresión y el peinado de la persona; cambia solo el fondo». Pide un solo cambio cada vez, porque cada edición encadenada se aleja un poco más del original, y si la cara empieza a cambiar vuelve a subir la foto original en lugar de seguir editando el resultado.',
        '¿Cuántas imágenes puedo crear gratis con Gemini?' => 'El plan gratuito tiene un número limitado de imágenes al día, que Google ajusta según la demanda y el modelo que uses, así que no hay una cifra fija. Los planes de pago amplían bastante ese límite y dan acceso al modelo de imagen más avanzado. Cuando llegas al tope, Gemini te avisa y el contador se renueva al cabo de unas horas.',
        '¿Es mejor Gemini o ChatGPT para editar fotos?' => 'Para editar una foto propia conservando a la persona, el modelo de imagen de Gemini, conocido como Nano Banana, ha tenido fama de respetar mejor los rasgos y de ser más rápido. ChatGPT suele seguir mejor las instrucciones largas y escribir mejor el texto dentro de la imagen. Lo práctico es probar el mismo prompt en los dos con tu foto y quedarte con el resultado.',
    ],
    'ctaTitle' => 'Prompts de imagen que Gemini entiende a la primera',
    'ctaBody' => 'Tienes el <a href="/skills/prompt-para-que-gemini-no-cambie-la-cara-al-editar-una-foto">prompt para que Gemini no cambie la cara</a>, el de <a href="/skills/prompt-para-unir-a-dos-personas-en-una-foto-con-ia">unir a dos personas en una foto</a> y el de <a href="/skills/prompt-para-restaurar-fotos-antiguas-o-danadas-con-chatgpt-o-gemini">restaurar fotos antiguas</a>. Más ideas en la guía de <a href="/guias/prompts-para-editar-fotos-con-ia">prompts para editar fotos</a>.',
    'body' => <<<'HTML'
<p>Gemini se hizo famoso por su editor de imágenes, conocido como <a href="/guias/que-es-nano-banana">Nano Banana</a>, y desde entonces una de las búsquedas más repetidas es por qué no funciona. La frustración es comprensible: a una persona le hace una figura de colección con su foto en diez segundos y a otra le contesta con un párrafo explicando cómo sería esa imagen.</p>

<p>Casi nunca es un fallo del servicio. Es la cuenta, el límite del día, las normas o la forma de pedirlo. Esta guía te ayuda a saber cuál es tu caso.</p>

<h2 id="sintomas">Qué te pasa exactamente</h2>

<figure>
<table>
    <thead>
        <tr><th>Síntoma</th><th>Causa más probable</th></tr>
    </thead>
    <tbody>
        <tr><td>Responde con texto o describe la imagen</td><td>No ha entendido que querías una imagen</td></tr>
        <tr><td>Dice que no puede crear imágenes</td><td>Tu cuenta no tiene la función o no has iniciado sesión</td></tr>
        <tr><td>Avisa de que has llegado al límite</td><td>Has agotado las imágenes del día de tu plan</td></tr>
        <tr><td>«No puedo ayudarte con eso» con una foto concreta</td><td>La petición choca con sus normas</td></tr>
        <tr><td>Edita la foto pero la persona ya no parece la misma</td><td>Falta indicar qué debe conservar</td></tr>
        <tr><td>Sale la imagen, pero con manos o letras raras</td><td>Limitaciones del modelo que se corrigen pidiéndolo de otra forma</td></tr>
    </tbody>
</table>
</figure>

<h2 id="texto">Contesta con texto en lugar de hacer la imagen</h2>

<p>Es el caso más frecuente y el más fácil de arreglar. Si escribes «una foto mía en la playa» o «¿puedes poner esto en blanco y negro?», Gemini puede interpretar que quieres una descripción o una explicación.</p>

<ul>
    <li><strong>Empieza el mensaje con el verbo:</strong> «Crea una imagen de…», «Edita esta foto para…», «Genera una ilustración de…».</li>
    <li><strong>Usa la opción de crear imágenes</strong> del menú de herramientas, si tu aplicación la muestra junto al cuadro de texto.</li>
    <li><strong>Comprueba el modelo elegido.</strong> Algunos modos, como la investigación en profundidad, no generan imágenes.</li>
    <li><strong>Empieza un chat nuevo</strong> si llevas mucho rato hablando de otra cosa: en una conversación larga tiende a seguir respondiendo con texto.</li>
</ul>

<h2 id="cuenta">Tu cuenta no tiene la función</h2>

<p>La creación de imágenes no está disponible igual para todas las cuentas:</p>

<ul>
    <li><strong>Sin sesión iniciada.</strong> Gemini funciona sin cuenta para preguntas sencillas, pero las imágenes exigen iniciar sesión.</li>
    <li><strong>Cuentas de empresa o de centro educativo.</strong> El administrador puede desactivar Gemini entero o solo algunas funciones, como las imágenes. Si usas el correo del trabajo, prueba con tu cuenta personal o pregunta a quien gestione las cuentas.</li>
    <li><strong>Cuentas de menores.</strong> Google limita algunas funciones de imagen, sobre todo la edición de fotos, en cuentas de menores de edad.</li>
    <li><strong>País o idioma.</strong> Las funciones nuevas a veces llegan antes a unos países y lenguas que a otros. Si una función que ves en vídeos no te aparece, puede que aún no esté activada para ti.</li>
</ul>

<p>Para comprobar qué cuenta estás usando, toca tu foto de perfil en la esquina de Gemini. Es habitual tener la sesión abierta con el correo del trabajo sin darse cuenta.</p>

<h2 id="limite">Has llegado al límite del día</h2>

<p>Crear imágenes consume mucho más cálculo que responder con texto, así que todos los planes tienen un tope diario. En el gratuito es bastante bajo y Google lo ajusta según la demanda, así que no hay una cifra fija: el día que una moda se hace viral, se agota antes.</p>

<p>Cuando llegas al límite, Gemini te lo dice y el contador se renueva al cabo de unas horas. Mientras tanto, cada imagen cuenta, así que conviene pedirla bien a la primera: describe estilo, encuadre y luz en un solo mensaje en lugar de corregir cinco veces. Los planes de pago amplían mucho el límite y dan acceso al modelo de imagen más avanzado.</p>

<h2 id="rechaza">Dice que no puede ayudarte con esa imagen</h2>

<p>Gemini rechaza ciertas peticiones aunque tu intención sea inocente. Las más comunes:</p>

<ul>
    <li><strong>Fotos de menores.</strong> Es muy restrictivo con editar imágenes en las que aparecen niños, incluso para algo tan inocente como cambiar el fondo.</li>
    <li><strong>Personas famosas o reconocibles.</strong> No crea ni modifica imágenes realistas de personajes públicos.</li>
    <li><strong>Cambios que puedan servir para suplantar.</strong> Poner a alguien en un lugar donde no estuvo con aspecto de foto real, cambiarle la ropa por poca ropa o alterar documentos.</li>
    <li><strong>Marcas, logotipos y personajes con derechos.</strong> Puede negarse o devolver una versión «parecida».</li>
</ul>

<p>Si la foto es tuya y el cambio es razonable, ayuda describir el cambio concreto en lugar de pedir que transforme a la persona: «cambia el fondo por una playa al atardecer y mantén a la persona tal como está» funciona mejor que «ponme en una playa». Pedir que parezca «una foto real» de una situación inventada también aumenta los rechazos; «estilo ilustración» o «estilo póster» suele pasar.</p>

<p>Tiene sentido que existan esos límites: las imágenes falsas de personas reales se usan en estafas, como contamos en la guía sobre <a href="/guias/estafas-con-ia-deepfakes-y-suplantacion">deepfakes y suplantación</a>.</p>

<h2 id="cara">Edita la foto pero te cambia la cara</h2>

<p>Es la queja más común de quien sí consigue que funcione. El modelo no copia tu foto y la retoca: la vuelve a dibujar entera siguiendo tus instrucciones, y si no le dices qué debe conservar, se toma libertades con los rasgos.</p>

<ol>
    <li><strong>Di explícitamente qué no se toca:</strong> «mantén exactamente la cara, los rasgos, la expresión, el peinado y el color de piel».</li>
    <li><strong>Pide un solo cambio cada vez.</strong> Fondo primero, ropa después. Cada edición encadenada se aleja un poco más del original.</li>
    <li><strong>Vuelve a la foto original</strong> si la cara empieza a cambiar, en lugar de seguir editando el resultado.</li>
    <li><strong>Usa una foto nítida</strong>, de frente y con buena luz. Con una foto pequeña o borrosa, el modelo tiene que inventar más.</li>
</ol>

<p>El texto completo, listo para copiar, está en el <a href="/skills/prompt-para-que-gemini-no-cambie-la-cara-al-editar-una-foto">prompt para que Gemini no cambie la cara al editar una foto</a>.</p>

<h2 id="calidad">La imagen sale mal o con texto raro</h2>

<p>A veces la imagen se genera, pero con defectos: manos extrañas, letras sin sentido, una persona de más o la proporción equivocada. Los modelos actuales han mejorado mucho, pero estos fallos siguen apareciendo.</p>

<ul>
    <li><strong>Texto dentro de la imagen:</strong> escríbelo entre comillas y en pocas palabras. Cuanto más largo, más probable que salga con errores.</li>
    <li><strong>Formato:</strong> indícalo desde el principio («formato vertical para el móvil», «cuadrado para Instagram»). Recortar después suele estropear la composición.</li>
    <li><strong>Demasiados elementos:</strong> si pides diez cosas en una sola imagen, alguna saldrá mal. Simplifica y añade detalles en una segunda edición.</li>
</ul>

<p>Si después de todo esto Gemini sigue sin colaborar, prueba el mismo prompt en ChatGPT: cada uno tiene sus puntos fuertes y sus normas, y lo que uno rechaza el otro a veces lo hace. Si el que falla es ChatGPT, tienes los pasos en <a href="/guias/chatgpt-no-funciona">qué hacer cuando ChatGPT no funciona</a>. Y para aprovechar el editor, en <a href="/guias/editar-fotos-con-ia">editar fotos con IA</a> están los usos que mejor resultado dan.</p>
HTML,
];
