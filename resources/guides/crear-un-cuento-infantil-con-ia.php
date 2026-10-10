<?php

return [
    'title' => 'Cómo crear un cuento infantil con IA: la historia, los dibujos y el libro impreso',
    'navTitle' => 'Cuento infantil con IA',
    'seoTitle' => 'Crear un cuento infantil con IA: texto y dibujos',
    'description' => 'Cuento personalizado para niños con IA: cómo pedir la historia según la edad, ilustrarla con el mismo personaje en cada página e imprimirlo como libro.',
    'excerpt' => 'Un cuento hecho con IA puede ser un regalo precioso o un texto de plantilla con dibujos que cambian en cada página. La diferencia está en tres cosas: los detalles del niño, la extensión adecuada a su edad y un personaje que se mantenga igual de principio a fin.',
    'category' => 'Práctica',
    'published' => '2026-10-10',
    'updated' => '2026-10-10',
    'readingMinutes' => 7,
    'words' => 1083,
    'about' => 'Creación de cuentos infantiles personalizados, con texto e ilustraciones, usando herramientas de inteligencia artificial',
    'related' => ['escribir-un-libro-con-ia', 'crear-imagenes-con-ia', 'imagenes-con-ia-derechos-y-uso-comercial', 'convertir-texto-a-voz-con-ia', 'como-escribir-prompts-efectivos', 'herramientas-de-ia-gratis'],
    'toc' => [
        'que-lo-hace-especial' => 'Qué hace especial un cuento',
        'segun-la-edad' => 'Extensión y lenguaje según la edad',
        'la-historia' => 'Pedir la historia',
        'ilustraciones' => 'Las ilustraciones',
        'mismo-personaje' => 'El mismo personaje en todas las páginas',
        'imprimir' => 'Maquetar, imprimir o narrar',
        'privacidad' => 'Privacidad y fotos de los niños',
    ],
    'faq' => [
        '¿Qué IA es mejor para crear cuentos infantiles?' => 'Para el texto sirve cualquier asistente general: ChatGPT, Gemini, Claude o Copilot. Para las ilustraciones, los que generan imágenes, como ChatGPT o Gemini, mantienen mejor un personaje si se lo describes en cada petición. Algunos asistentes tienen ya funciones de libro ilustrado que hacen las dos cosas a la vez.',
        '¿Cuántas páginas debe tener un cuento para un niño de 3 años?' => 'Entre 8 y 12 páginas dobles, con una o dos frases cortas por página, unas 200 a 400 palabras en total. A esa edad cuentan más la repetición y las imágenes que la trama. Para 6 u 8 años se puede llegar a 1.000 o 1.500 palabras.',
        '¿Puedo vender un cuento hecho con IA?' => 'Puedes publicarlo, pero con matices: las ilustraciones generadas solo con IA pueden no estar protegidas por derechos de autor, y plataformas como Amazon KDP piden declarar el contenido generado. Lo explicamos en la guía de derechos de las imágenes con IA.',
        '¿Es seguro subir fotos de mi hijo para que aparezca en el cuento?' => 'Mejor no. Describe al niño con palabras (pelo rizado, gafas rojas, siempre con su peluche) y obtendrás un personaje reconocible sin subir su cara a ningún servicio. Si aun así usas una foto, lee antes cómo trata esa herramienta las imágenes que subes.',
        '¿Puede la IA leer el cuento en voz alta?' => 'Sí. Las herramientas de texto a voz convierten el cuento en audio con voces naturales, y algunas permiten elegir el tono o usar varias voces para los personajes. Para un regalo, grabar tu propia voz sigue siendo lo que más emociona.',
    ],
    'ctaTitle' => 'Instrucciones creativas reutilizables',
    'ctaBody' => 'Si haces cuentos a menudo, para tus hijos o para un aula, guarda el estilo y las reglas en unas instrucciones fijas. En el <a href="/skills">catálogo de skills</a> hay plantillas de escritura e imagen, por ejemplo para <a href="/profesiones/diseno">diseño</a> y <a href="/profesiones/marketing">marketing</a>.',
    'body' => <<<'HTML'
<p>Un cuento hecho con IA puede ser un regalo precioso o un texto de plantilla con dibujos que cambian de aspecto en cada página. La diferencia está en tres cosas: los detalles que solo conoces tú del niño o la niña, una extensión adecuada a su edad y un personaje que se mantenga igual de principio a fin. Esta guía va del texto a las ilustraciones y al libro impreso.</p>

<h2 id="que-lo-hace-especial">Qué hace especial un cuento</h2>

<p>Si pides «un cuento para mi hija de cuatro años», el resultado será el cuento medio: un animal del bosque, una lección sobre la amistad y un final feliz. Nada malo, pero tampoco nada suyo. Antes de abrir el asistente, apunta:</p>

<ul>
    <li><strong>Lo que le gusta</strong>: sus animales, su color, su juguete, el parque al que va.</li>
    <li><strong>Algo que esté viviendo</strong>: empezar el colegio, la llegada de un hermano, el miedo a la oscuridad, una mudanza.</li>
    <li><strong>Nombres reales</strong> de la mascota, los abuelos o el mejor amigo, si quieres que aparezcan.</li>
    <li><strong>Lo que no debe salir</strong>: miedos que no quieres reforzar o temas delicados en casa.</li>
</ul>

<h2 id="segun-la-edad">Extensión y lenguaje según la edad</h2>

<p>Es el error más común: cuentos de 2.000 palabras para un niño de tres años. Unas referencias orientativas:</p>

<ul>
    <li><strong>2 a 4 años</strong>: 200 a 400 palabras, frases muy cortas, mucha repetición («y llamó a la puerta, toc, toc, toc»). Una sola idea.</li>
    <li><strong>4 a 6 años</strong>: 400 a 800 palabras, un pequeño problema que el protagonista resuelve, algún diálogo.</li>
    <li><strong>6 a 8 años</strong>: 800 a 1.500 palabras, se admiten capítulos cortos, algo de intriga y humor.</li>
</ul>

<p>Díselo así a la IA. Si no le das una cifra, tiende a escribir de más.</p>

<h2 id="la-historia">Pedir la historia</h2>

<p>Un ejemplo de petición:</p>

<blockquote>«Escribe un cuento para leer en voz alta a Lucía, de 4 años, que empieza el colegio la semana que viene y está nerviosa. Le encantan los pingüinos y tiene una perrita que se llama Lola. Unas 500 palabras, repartidas en 10 páginas, con una o dos frases por página. Frases cortas, alguna repetición que ella pueda decir conmigo. Sin moraleja explícita al final. Primero propón tres ideas de argumento en dos líneas cada una.»</blockquote>

<p>Pedir primero las ideas ahorra tiempo: eliges la que más te gusta y luego pides el texto. Después, léelo en voz alta. Lo que se atasca al leerlo, se cambia. Si el proyecto crece y quieres escribir algo más largo, el método está en <a href="/guias/escribir-un-libro-con-ia">escribir un libro con IA</a>.</p>

<h2 id="ilustraciones">Las ilustraciones</h2>

<p>Con el texto dividido en páginas, pide a la IA una descripción de la escena de cada página: qué se ve, dónde, qué hace el personaje. Esas descripciones son las peticiones que usarás en el generador de imágenes. Elige un estilo y repítelo siempre igual, por ejemplo: «ilustración infantil en acuarela suave, colores pastel, fondo sencillo, sin texto en la imagen». Lo de «sin texto» es importante: los generadores siguen escribiendo letras raras dentro de los dibujos, y el texto es mejor añadirlo después. Cómo pedir buenas imágenes lo explica la guía de <a href="/guias/crear-imagenes-con-ia">crear imágenes con IA</a>.</p>

<h2 id="mismo-personaje">El mismo personaje en todas las páginas</h2>

<p>Es la parte difícil: en la página tres el pingüino lleva bufanda roja y en la cuatro azul. Tres trucos que ayudan:</p>

<ol>
    <li><strong>Escribe una ficha del personaje</strong> y pégala entera en cada petición: «Pingüino pequeño, redondo, bufanda roja a rayas, gorro de lana amarillo, ojos grandes y negros».</li>
    <li><strong>Genera todas las páginas en la misma conversación</strong> y, si la herramienta lo permite, adjunta la primera imagen buena como referencia para las siguientes.</li>
    <li><strong>Acepta pequeñas diferencias</strong> y corrige solo las que se noten. Los niños perdonan mucho más que los adultos.</li>
</ol>

<h2 id="imprimir">Maquetar, imprimir o narrar</h2>

<p>Para maquetarlo, una herramienta de diseño sencilla como Canva o una presentación de diapositivas basta: una página por diapositiva, imagen arriba y texto abajo con letra grande. Exporta en PDF y llévalo a una imprenta o a un servicio de fotolibros, que imprimen tapa dura desde un ejemplar.</p>

<p>Si prefieres que suene, las herramientas de <a href="/guias/convertir-texto-a-voz-con-ia">texto a voz</a> convierten el cuento en audio con voces muy naturales. Aun así, si es un regalo, grabarlo con tu voz es lo que más se recuerda.</p>

<p>Si piensas venderlo, lee antes la guía de <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">derechos de las imágenes con IA</a>: las ilustraciones generadas solo con IA no siempre están protegidas, y algunas plataformas piden declararlo.</p>

<h2 id="privacidad">Privacidad y fotos de los niños</h2>

<p>Muchas aplicaciones ofrecen convertir una foto de tu hijo en el protagonista. Antes de subirla, piensa que es la cara de un menor en el servidor de una empresa. La alternativa funciona igual de bien: describe al niño con palabras (pelo rizado, gafas rojas, siempre con su conejo de peluche). Saldrá un personaje que él reconocerá como suyo, sin dejar su foto en ningún sitio.</p>

<p>La prueba final es leérselo. Si al terminar dice «otra vez», el cuento está bien hecho.</p>
HTML,
];
