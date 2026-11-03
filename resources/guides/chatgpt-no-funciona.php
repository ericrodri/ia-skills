<?php

return [
    'title' => 'ChatGPT no funciona: qué hacer cuando falla, va lento o no te deja subir archivos',
    'navTitle' => 'ChatGPT no funciona',
    'seoTitle' => 'ChatGPT no funciona: causas y cómo solucionarlo',
    'description' => 'Cómo saber si ChatGPT está caído o el fallo es tuyo, y qué hacer si va lento, no responde, no te deja entrar, subir archivos o crear imágenes.',
    'excerpt' => 'Antes de borrar la caché o reinstalar la aplicación, comprueba una cosa: si el fallo es de OpenAI o es tuyo. Cada caso tiene su arreglo, y casi todos llevan menos de dos minutos.',
    'category' => 'Herramientas',
    'published' => '2026-11-03',
    'updated' => '2026-11-03',
    'readingMinutes' => 10,
    'words' => 1675,
    'about' => 'Fallos habituales de ChatGPT y cómo resolverlos',
    'related' => ['como-usar-chatgpt', 'vale-la-pena-pagar-chatgpt-plus', 'ventana-de-contexto-conversaciones-largas', 'gemini-no-genera-imagenes', 'cual-es-la-mejor-ia', 'herramientas-de-ia-gratis'],
    'toc' => [
        'caido' => 'Primero: ¿está caído o es tu cuenta?',
        'no-responde' => 'No responde o da error al generar',
        'lento' => 'Va lento o tarda mucho en responder',
        'sesion' => 'No te deja iniciar sesión',
        'archivos' => 'No te deja subir archivos o fotos',
        'imagenes' => 'No genera imágenes',
        'alternativa' => 'Qué usar mientras tanto',
    ],
    'faq' => [
        '¿Cómo sé si ChatGPT está caído hoy?' => 'Mira la página de estado oficial de OpenAI, status.openai.com, que indica si hay una incidencia abierta y qué funciones afecta. Si ahí todo aparece en verde pero mucha gente se queja a la vez en redes o en webs de avisos de caídas, puede que la incidencia aún no se haya publicado. Si el estado es normal y nadie más tiene problemas, el fallo está casi seguro en tu navegador, tu conexión o tu cuenta.',
        '¿Por qué ChatGPT tarda tanto en responder?' => 'Por tres motivos habituales: hay mucha demanda, sobre todo por la tarde en España, que coincide con la mañana en Estados Unidos; la conversación es muy larga y el modelo tiene que releerla entera en cada respuesta; o estás usando un modelo de razonamiento o una investigación en profundidad, que dedican segundos o minutos a pensar antes de escribir. Un chat nuevo con un resumen de lo importante suele ser lo que más acelera.',
        '¿Por qué ChatGPT no me deja subir archivos?' => 'Lo más común es haber llegado al límite de subidas del plan gratuito, que es de pocos archivos al día, o que el archivo supere el tamaño máximo o tenga un formato que no admite. También falla si la conexión se corta durante la subida o si una extensión del navegador bloquea la carga. Prueba con otro navegador o con la aplicación del móvil para descartar lo último.',
        '¿Por qué ChatGPT no genera imágenes?' => 'Normalmente porque has agotado las imágenes del día de tu plan, porque la petición choca con sus normas de uso (personas reales reconocibles, marcas, contenido sexual o violento) o porque el servicio de imágenes tiene una incidencia aunque el chat funcione. Si te contesta con texto en lugar de con una imagen, pídelo de forma explícita: «genera una imagen de…».',
        '¿ChatGPT funciona sin conexión?' => 'No. Todo el procesamiento ocurre en los servidores de OpenAI, así que sin internet la aplicación no puede responder. Si necesitas un asistente que funcione sin conexión o sin enviar datos fuera, la alternativa es instalar un modelo local en tu ordenador, que es más limitado pero no depende de ningún servicio externo.',
    ],
    'ctaTitle' => 'Que no se pierda el trabajo cuando falle',
    'ctaBody' => 'La forma más fiable de no depender de un solo asistente es tener tus prompts guardados y probados en más de uno. En el <a href="/skills">catálogo de skills</a> están listos para copiar en ChatGPT, Gemini o Claude, y en la guía de <a href="/guias/ventana-de-contexto-conversaciones-largas">conversaciones largas</a> explicamos cómo resumir un chat para continuarlo en otro.',
    'body' => <<<'HTML'
<p>ChatGPT no responde, se queda pensando, te echa de la sesión o te dice que algo ha salido mal. Lo primero que hace casi todo el mundo es recargar la página varias veces, y a veces funciona. Pero si no, conviene ir por orden, porque la solución depende por completo de dónde esté el fallo.</p>

<p>Esta guía sigue ese orden: primero averiguar si el problema es de OpenAI o tuyo, y después el arreglo para cada síntoma concreto.</p>

<h2 id="caido">Primero: ¿está caído o es tu cuenta?</h2>

<p>Hay una página oficial que lo dice: <strong>status.openai.com</strong>. Muestra si hay alguna incidencia abierta y a qué parte afecta, porque a menudo no cae todo a la vez: puede funcionar el chat y fallar la generación de imágenes, la voz o la subida de archivos.</p>

<figure>
<table>
    <thead>
        <tr><th>Lo que ves</th><th>Dónde está el fallo</th><th>Qué hacer</th></tr>
    </thead>
    <tbody>
        <tr><td>Incidencia abierta en la página de estado</td><td>En OpenAI</td><td>Esperar; no sirve de nada tocar tu equipo</td></tr>
        <tr><td>Estado normal, pero mucha gente se queja a la vez</td><td>Probablemente en OpenAI, aún sin publicar</td><td>Esperar unos minutos y volver a mirar</td></tr>
        <tr><td>Estado normal y nadie más tiene problemas</td><td>En tu navegador, tu red o tu cuenta</td><td>Seguir los pasos de abajo</td></tr>
        <tr><td>Falla en el ordenador pero no en el móvil (o al revés)</td><td>En ese dispositivo o navegador</td><td>Limpiar caché, quitar extensiones, actualizar la app</td></tr>
    </tbody>
</table>
</figure>

<p>La prueba rápida para descartar tu equipo: abre ChatGPT en una ventana de incógnito, o en la aplicación del móvil con los datos en lugar del wifi. Si ahí funciona, el problema está en tu navegador o en tu red, no en tu cuenta.</p>

<h2 id="no-responde">No responde o da error al generar</h2>

<p>Los mensajes del tipo «algo ha salido mal», «error de red» o una respuesta que se corta a la mitad suelen tener una de estas causas:</p>

<ul>
    <li><strong>La respuesta era muy larga y se cortó la conexión.</strong> Es típico al pedir textos extensos o mucho código. Pide que siga donde lo dejó («continúa desde el último párrafo») o divide el encargo en partes.</li>
    <li><strong>Demasiadas peticiones seguidas.</strong> Si envías muchos mensajes en poco tiempo, el servicio frena temporalmente. Espera unos minutos.</li>
    <li><strong>Una extensión del navegador interfiere.</strong> Los bloqueadores de anuncios, traductores automáticos y algunas extensiones de privacidad rompen la página. Pruébalo en incógnito, donde normalmente están desactivadas.</li>
    <li><strong>Una VPN o una red corporativa.</strong> Algunas redes de empresa bloquean el servicio o lo hacen inestable. Prueba sin la VPN o con los datos del móvil.</li>
    <li><strong>Datos antiguos en el navegador.</strong> Borrar las cookies y la caché de chatgpt.com resuelve muchos fallos raros. Tendrás que volver a iniciar sesión.</li>
</ul>

<p>Si el error sale siempre en la misma conversación y en las demás no, el problema es esa conversación: suele estar demasiado cargada. Abre un chat nuevo y pega lo imprescindible.</p>

<h2 id="lento">Va lento o tarda mucho en responder</h2>

<p>La lentitud tiene explicaciones distintas a los errores:</p>

<ol>
    <li><strong>Hora punta.</strong> La tarde en España coincide con la mañana en Estados Unidos, que es cuando más uso hay. Las respuestas tardan más y en el plan gratuito puede pasarte a un modelo más ligero.</li>
    <li><strong>La conversación es muy larga.</strong> En cada respuesta el modelo vuelve a leer todo el historial. Pasadas unas decenas de mensajes con documentos pegados, cada respuesta cuesta más y además empieza a olvidar lo del principio. Pídele un resumen de lo acordado y empieza un chat nuevo con ese resumen. Lo explicamos en la guía sobre <a href="/guias/ventana-de-contexto-conversaciones-largas">la ventana de contexto</a>.</li>
    <li><strong>Has elegido un modelo que razona.</strong> Los modelos de razonamiento piensan antes de contestar, y la investigación en profundidad puede tardar varios minutos a propósito. Para preguntas sencillas, usa el modelo rápido.</li>
    <li><strong>Tu navegador va cargado.</strong> Una conversación con cientos de mensajes y muchas imágenes pesa en la propia página. Cerrar otras pestañas o usar la aplicación de escritorio ayuda.</li>
</ol>

<h2 id="sesion">No te deja iniciar sesión</h2>

<p>Los problemas de acceso casi siempre son de uno de estos tipos:</p>

<ul>
    <li><strong>Usas otro método del que usaste al registrarte.</strong> Si creaste la cuenta con Google, entra con el botón de Google, no escribiendo tu correo y una contraseña. Es la causa más frecuente de «no encuentro mi cuenta» o de que aparezca una cuenta vacía.</li>
    <li><strong>No llega el código de verificación.</strong> Revisa la carpeta de correo no deseado y espera un par de minutos antes de pedir otro: pedir varios seguidos invalida los anteriores.</li>
    <li><strong>La verificación de seguridad se queda en bucle.</strong> La comprobación de que no eres un robot falla con VPN, con navegadores muy restrictivos o con la hora del equipo mal puesta. Prueba otro navegador.</li>
    <li><strong>Cuenta de empresa o de centro educativo.</strong> Si tu organización gestiona tu acceso, puede que tengas que entrar por su inicio de sesión único o que el administrador lo haya limitado.</li>
</ul>

<p>Si sospechas que alguien ha entrado en tu cuenta, cambia la contraseña del método con el que te registras y activa la verificación en dos pasos desde los ajustes de seguridad.</p>

<h2 id="archivos">No te deja subir archivos o fotos</h2>

<p>Cuando el botón de adjuntar no responde, la subida se queda a medias o aparece un aviso de límite, revisa por este orden:</p>

<ul>
    <li><strong>El límite de tu plan.</strong> El plan gratuito permite pocos archivos al día; los de pago, muchos más por cada pocas horas. Si has llegado al tope, el aviso suele decir cuándo se renueva.</li>
    <li><strong>El tamaño y el formato.</strong> Hay un tamaño máximo por archivo y límites más bajos para algunos tipos, como hojas de cálculo e imágenes. Un PDF escaneado de cientos de páginas puede pasar el tamaño pero no leerse bien. Divide el documento o expórtalo de nuevo con menos peso.</li>
    <li><strong>La foto viene del móvil en un formato raro.</strong> Algunas fotos del iPhone en formato HEIC dan problemas en el navegador del ordenador. Súbela desde la aplicación del móvil o conviértela a JPG.</li>
    <li><strong>La conexión se corta durante la subida.</strong> Con archivos grandes y un wifi inestable, la subida falla sin dar muchas explicaciones.</li>
</ul>

<p>Si es un documento largo y lo que quieres es un resumen, a veces es más rápido copiar el texto y pegarlo directamente. En la guía para <a href="/guias/resumir-documentos-largos-con-ia">resumir documentos largos</a> están las opciones cuando el archivo no entra.</p>

<h2 id="imagenes">No genera imágenes</h2>

<p>Puede que el chat funcione perfectamente y las imágenes no. Las causas más comunes:</p>

<ul>
    <li><strong>Has agotado las imágenes del día.</strong> El plan gratuito tiene un número limitado de imágenes, y en momentos de mucha demanda se reduce todavía más.</li>
    <li><strong>La petición choca con las normas.</strong> ChatGPT rechaza o modifica imágenes de personas reales reconocibles, de menores, de marcas registradas o con contenido sexual o violento. A veces lo dice; otras, simplemente contesta con texto.</li>
    <li><strong>No ha entendido que querías una imagen.</strong> Empieza el mensaje con «genera una imagen de…» o «edita esta foto para…».</li>
    <li><strong>El servicio de imágenes tiene una incidencia.</strong> Aparece por separado en la página de estado.</li>
</ul>

<p>Cuando lo que falla es que cambia la cara o el resultado no se parece a la foto original, no es un error del servicio sino de la petición. Lo tratamos en las guías de <a href="/guias/editar-fotos-con-ia">editar fotos con IA</a> y de <a href="/guias/mejorar-calidad-de-una-foto-con-ia">mejorar la calidad de una foto</a>, con <a href="/skills/como-pedirle-a-chatgpt-que-mejore-la-calidad-de-una-imagen-y-la-amplie-a-alta-resolucion">un prompt que conserva la imagen original</a>.</p>

<h2 id="alternativa">Qué usar mientras tanto</h2>

<p>Las caídas largas son raras, pero ocurren, y suelen llegar el día que tienes una entrega. Lo práctico es tener cuenta en un segundo asistente: Gemini, Claude o Copilot hacen casi todo lo que haces con ChatGPT, y los prompts bien escritos funcionan en los tres con pocos cambios. Si te pasa a menudo con las imágenes, en la guía de <a href="/guias/gemini-no-genera-imagenes">por qué Gemini no genera imágenes</a> verás que el otro gran generador tiene sus propios límites.</p>

<p>Si ChatGPT forma parte de tu trabajo diario, merece la pena saber qué incluye cada plan antes de pagar por evitar los límites: lo comparamos en <a href="/guias/vale-la-pena-pagar-chatgpt-plus">si vale la pena pagar ChatGPT Plus</a>, y en <a href="/guias/cual-es-la-mejor-ia">cuál es la mejor IA</a> tienes las alternativas según para qué la uses.</p>
HTML,
];
