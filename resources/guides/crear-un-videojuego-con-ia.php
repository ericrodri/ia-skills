<?php

return [
    'title' => 'Crear un videojuego con IA sin saber programar: qué sale, con qué herramientas y cómo publicarlo',
    'navTitle' => 'Crear un videojuego con IA',
    'seoTitle' => 'Crear un videojuego con IA sin saber programar',
    'description' => 'Cómo hacer un videojuego con ChatGPT, Claude o Gemini sin saber programar: qué juegos salen, el método paso a paso, gráficos, sonido y dónde publicarlo.',
    'excerpt' => 'Con un asistente de IA puedes tener un juego jugable en el navegador en una tarde, sin escribir una línea de código. Un juego de plataformas o de preguntas, sí. Un mundo abierto en 3D, no. La diferencia está en elegir bien el primer proyecto y pedir los cambios de uno en uno.',
    'category' => 'Práctica',
    'published' => '2026-10-20',
    'updated' => '2026-10-20',
    'readingMinutes' => 8,
    'words' => 1377,
    'about' => 'Desarrollo de videojuegos sencillos con asistentes de inteligencia artificial por personas sin conocimientos de programación',
    'related' => ['crear-tu-herramienta-con-ia-sin-programar', 'ia-para-programar', 'conectar-claude-con-unity', 'crear-imagenes-con-ia', 'crear-musica-con-ia', 'empezar-con-claude-code'],
    'toc' => [
        'que-sale' => 'Qué juegos salen bien y cuáles no',
        'herramientas' => 'Con qué se hace',
        'idea' => 'La idea en una ficha de diez líneas',
        'paso-a-paso' => 'Paso a paso: tu primer juego en una tarde',
        'arte' => 'Gráficos y sonido',
        'publicar' => 'Probarlo, compartirlo y publicarlo',
    ],
    'faq' => [
        '¿Puedo hacer un videojuego con IA sin saber programar?' => 'Sí, si es sencillo: un juego en dos dimensiones que funcione en el navegador, como uno de plataformas, de esquivar obstáculos, de preguntas o un puzle. Le describes el juego al asistente, él escribe el código y tú lo pruebas y pides cambios. Para juegos grandes o en 3D sí hace falta aprender lo básico.',
        '¿Qué IA es mejor para crear videojuegos?' => 'Para empezar, la que te deje ver el juego funcionando en la propia conversación: los Artifacts de Claude, Canvas de ChatGPT o Canvas de Gemini. Cuando el proyecto crece y tiene varios archivos, compensa pasar a un editor con IA como Cursor o a Claude Code.',
        '¿Se puede hacer un juego en 3D con IA?' => 'Algo sencillo, sí: una escena con objetos que se mueven, hecha en el navegador o en un motor como Unity o Godot con ayuda de la IA. Un juego en 3D completo, con animaciones, niveles y buen rendimiento, sigue necesitando conocer el motor y mucho trabajo manual.',
        '¿Puedo vender un juego hecho con IA?' => 'Puedes, pero revisa dos cosas: los derechos de los gráficos y la música generados (no siempre están protegidos) y las normas de la tienda. Steam, por ejemplo, pide declarar el contenido generado con IA al publicar. El código que escribe el asistente lo puedes usar, pero eres responsable de lo que hace.',
        '¿Cuánto cuesta crear un juego con IA?' => 'El primer prototipo puede salir gratis con los planes gratuitos de los asistentes, aunque se quedan cortos enseguida porque el código ocupa mucho. Con una suscripción de unos 20 euros al mes tienes de sobra para proyectos pequeños. Publicar en itch.io es gratis.',
    ],
    'ctaTitle' => 'Skills para programar con IA',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay instrucciones listas para que el asistente escriba código ordenado, revise errores y explique lo que ha hecho, pensadas para <a href="/profesiones/desarrollo">desarrollo</a> pero muy útiles si estás empezando.',
    'body' => <<<'HTML'
<p>Hacer un videojuego siempre ha exigido saber programar, dibujar y componer, o tener un equipo que lo haga. Hoy un asistente de IA escribe el código de un juego sencillo a partir de una descripción, y lo puedes jugar en el navegador minutos después. No hace falta saber programar para tener algo jugable. Sí hace falta saber qué pedir, en qué orden y dónde está el límite. Esta guía es para quien quiere hacer su primer juego, para jugarlo con sus hijos, enseñarlo en clase o probar una idea, y es la versión «juego» de lo que contamos en <a href="/guias/crear-tu-herramienta-con-ia-sin-programar">crear tu propia herramienta con IA sin programar</a>.</p>

<h2 id="que-sale">Qué juegos salen bien y cuáles no</h2>

<p>La regla es sencilla: cuanto más pequeño y en dos dimensiones, mejor sale.</p>

<ul>
    <li><strong>Salen bien a la primera</strong>: juegos clásicos tipo Pong, Snake, Tetris o Breakout; juegos de esquivar obstáculos con una sola tecla; juegos de preguntas; puzles de memoria o de unir parejas; aventuras de texto donde eliges qué hacer.</li>
    <li><strong>Salen con paciencia</strong>: un juego de plataformas con varios niveles, uno de naves con enemigos y jefes, un juego de cartas con reglas propias, un pequeño juego de granja o de gestión.</li>
    <li><strong>No salen sin aprender a programar</strong>: juegos multijugador por internet, mundos abiertos, 3D con animaciones de personajes, cualquier cosa que tenga que guardar datos de muchos jugadores o cobrar dinero.</li>
</ul>

<p>Elige para empezar algo de la primera lista con un giro tuyo: un Snake donde la serpiente es tu perro y come croquetas, o un juego de preguntas sobre tu pueblo. El giro es lo que lo hace tuyo; la mecánica, que ya está inventada, es lo que hace que funcione.</p>

<h2 id="herramientas">Con qué se hace</h2>

<p>Hay tres niveles, y conviene empezar por el primero:</p>

<ol>
    <li><strong>El chat con vista previa.</strong> Los Artifacts de Claude, Canvas de ChatGPT y Canvas de Gemini escriben el juego en un solo archivo HTML y te lo muestran funcionando al lado de la conversación. Pides un cambio y lo ves al momento. Es lo ideal para un primer juego.</li>
    <li><strong>Un editor con IA.</strong> Cuando el juego crece y tiene varios archivos, imágenes y sonidos, compensa pasar a un editor como Cursor o a <a href="/guias/empezar-con-claude-code">Claude Code</a>, que trabajan sobre una carpeta en tu ordenador. Comparamos los dos en <a href="/guias/claude-code-vs-cursor">Claude Code vs Cursor</a>.</li>
    <li><strong>Un motor de juegos con ayuda de IA.</strong> Godot y Unity son los motores donde se hacen juegos de verdad. La IA escribe los scripts y te explica el editor, y en Unity incluso puede manejar la escena: lo contamos en <a href="/guias/conectar-claude-con-unity">conectar Claude con Unity</a>. Aquí sí vas a tener que aprender a usar la herramienta.</li>
</ol>

<h2 id="idea">La idea en una ficha de diez líneas</h2>

<p>Antes de pedir nada, escribe una ficha breve. Es lo que más mejora el resultado, porque el asistente no tiene que adivinar:</p>

<ul>
    <li><strong>Tipo de juego</strong> y un juego conocido parecido: «como el dinosaurio de Chrome».</li>
    <li><strong>Objetivo</strong>: qué tiene que conseguir el jugador y cuándo pierde.</li>
    <li><strong>Controles</strong>: qué teclas o si se juega tocando la pantalla del móvil.</li>
    <li><strong>Personaje y mundo</strong>: quién es y dónde está.</li>
    <li><strong>Puntuación y dificultad</strong>: cómo se cuentan los puntos y si va más rápido con el tiempo.</li>
</ul>

<p>No te preocupes por el código: puedes pedirle al asistente que convierta una idea vaga en esta ficha y luego la corriges tú.</p>

<h2 id="paso-a-paso">Paso a paso: tu primer juego en una tarde</h2>

<ol>
    <li><strong>Pide la versión mínima.</strong> «Crea este juego en un único archivo HTML con JavaScript, sin librerías externas. De momento usa formas de colores en lugar de dibujos. Solo lo básico: moverse, el obstáculo y perder». [Pega la ficha].</li>
    <li><strong>Juega y apunta.</strong> Juega cinco minutos y escribe lo que falla o lo que no te divierte. Probablemente sea demasiado rápido o demasiado fácil.</li>
    <li><strong>Pide los cambios de uno en uno.</strong> «Los obstáculos aparecen demasiado juntos al principio: que empiecen más separados y se acerquen poco a poco». Un cambio por mensaje. Si pides cinco a la vez, alguno saldrá mal y no sabrás cuál.</li>
    <li><strong>Guarda las versiones que funcionan.</strong> Cuando algo te guste, descarga el archivo y guárdalo como «juego-v3.html». Si un cambio lo rompe todo, vuelves a la anterior en lugar de pedir arreglos sobre arreglos.</li>
    <li><strong>Describe los errores con detalle.</strong> «No funciona» no ayuda. «Cuando salto justo al tocar el suelo, el personaje atraviesa la plataforma» sí. Si aparece un mensaje de error, cópialo entero en el chat.</li>
    <li><strong>Añade lo que lo hace juego</strong>: puntuación, récord, pantalla de inicio, una segunda fase. Solo cuando lo básico ya divierte.</li>
</ol>

<p>Llegará un punto en que cada arreglo rompe otra cosa. Es normal: el archivo ha crecido demasiado. Pide al asistente que «reorganice el código en partes más pequeñas sin cambiar cómo funciona», o pasa al segundo nivel de herramientas. Más trucos para pedir código en <a href="/guias/ia-para-programar">IA para programar</a>.</p>

<h2 id="arte">Gráficos y sonido</h2>

<p>Con el juego funcionando con cuadrados de colores, llega el momento de vestirlo:</p>

<ul>
    <li><strong>Personajes y objetos</strong>: pide al generador de imágenes «personaje de videojuego en pixel art, 32×32 píxeles, de perfil, fondo transparente». Haz todos los dibujos en el mismo estilo y con la misma paleta de colores, o el juego parecerá un collage. Para la técnica de pedir imágenes, <a href="/guias/crear-imagenes-con-ia">crear imágenes con IA</a>; para el fondo transparente, <a href="/guias/crear-stickers-con-ia">crear stickers con IA</a>.</li>
    <li><strong>Fondos</strong>: un paisaje en formato horizontal, en el mismo estilo, sin personajes.</li>
    <li><strong>Música</strong>: una melodía corta que se repita sin cortes, hecha con las herramientas de <a href="/guias/crear-musica-con-ia">crear música con IA</a>.</li>
    <li><strong>Efectos de sonido</strong>: hay bibliotecas gratuitas con licencia libre para salto, moneda y explosión. Comprueba la licencia de cada uno.</li>
</ul>

<p>Pide al asistente que cambie los cuadrados por tus imágenes y te diga exactamente cómo llamar a cada archivo y en qué carpeta ponerlo.</p>

<h2 id="publicar">Probarlo, compartirlo y publicarlo</h2>

<p>Un juego de un solo archivo HTML se abre con doble clic en cualquier navegador, así que lo puedes mandar por correo o llevar en un USB. Para compartirlo con un enlace:</p>

<ul>
    <li><strong>itch.io</strong> es la plataforma de juegos independientes por excelencia: subes el archivo, se juega en el navegador y es gratis. Puedes dejarlo público, privado o con un precio.</li>
    <li><strong>El enlace de la propia herramienta</strong>: Claude, ChatGPT y Gemini permiten compartir lo que crean en el chat con un enlace público.</li>
</ul>

<p>Antes de compartirlo, pide a alguien que lo juegue sin explicarle nada. Si no entiende qué hacer en diez segundos, falta una pantalla de instrucciones. Y si piensas venderlo, revisa los derechos de los gráficos y la música en <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">derechos de las imágenes con IA</a>, y ten en cuenta que tiendas como Steam piden declarar el contenido generado con IA.</p>
HTML,
];
