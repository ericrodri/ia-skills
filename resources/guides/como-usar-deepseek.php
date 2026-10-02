<?php

return [
    'title' => 'Cómo usar DeepSeek: qué hace bien y qué datos no darle',
    'navTitle' => 'Cómo usar DeepSeek',
    'seoTitle' => 'Cómo usar DeepSeek: guía práctica y privacidad',
    'description' => 'Cómo usar DeepSeek gratis: el modo de razonamiento, la búsqueda, para qué tareas rinde, qué pasa con tus datos y cómo usarlo en local sin enviar nada.',
    'excerpt' => 'DeepSeek es un asistente gratuito que razona bien y programa mejor de lo que su precio sugiere. Tiene una pega que pesa en el trabajo: dónde acaban tus datos. Aquí va cómo aprovecharlo sin meter la pata.',
    'category' => 'Herramientas',
    'published' => '2026-10-01',
    'updated' => '2026-10-01',
    'readingMinutes' => 7,
    'words' => 1140,
    'about' => 'Uso práctico del asistente de inteligencia artificial DeepSeek y sus riesgos de privacidad',
    'related' => ['ia-local-privada-en-tu-ordenador', 'como-usar-grok', 'usar-ia-sin-filtrar-datos-de-clientes', 'como-usar-chatgpt', 'herramientas-de-ia-gratis', 'ia-para-programar', 'como-usar-claude'],
    'toc' => [
        'que-es' => 'Qué es DeepSeek',
        'empezar' => 'Empezar: web, aplicación y primera conversación',
        'modos' => 'El modo de razonamiento y la búsqueda',
        'tareas' => 'Para qué tareas rinde bien',
        'datos' => 'Tus datos: la parte que no conviene saltarse',
        'local' => 'Usarlo en tu ordenador sin enviar nada',
    ],
    'faq' => [
        '¿Qué es DeepSeek?' => 'DeepSeek es un asistente de inteligencia artificial desarrollado por una empresa china del mismo nombre. Funciona como ChatGPT o Claude: le escribes en lenguaje normal y responde, razona, resume o escribe código. Su particularidad es que publica sus modelos con pesos abiertos, así que cualquiera puede descargarlos y ejecutarlos en sus propios equipos.',
        '¿DeepSeek es gratis?' => 'Sí. La web y la aplicación se pueden usar gratis con una cuenta, incluidos el modo de razonamiento y la búsqueda en internet. Lo que se paga es el acceso por API para desarrolladores, que cobra por uso y suele ser bastante más barato que el de sus competidores.',
        '¿Es seguro usar DeepSeek?' => 'Para preguntas generales, sí. Para el trabajo, con cuidado: según su política de privacidad, los datos de la versión web y la aplicación se almacenan en servidores en China, y algunos reguladores europeos han abierto investigaciones o limitado la aplicación. No le pegues datos de clientes, contratos ni información interna. Si necesitas privacidad, ejecuta el modelo en local.',
        '¿Es mejor DeepSeek o ChatGPT?' => 'Depende de la tarea. DeepSeek razona bien en matemáticas, lógica y programación, y es gratuito. ChatGPT ofrece más funciones alrededor del modelo (imágenes, voz, proyectos, agentes) y más garantías contractuales para empresas. Para tareas con datos sensibles, ninguno de los dos en su versión gratuita es la opción adecuada.',
        '¿Se puede usar DeepSeek sin conexión?' => 'Sí. Como los modelos son abiertos, puedes descargar una versión reducida y ejecutarla en tu ordenador con programas como Ollama o LM Studio. Nada sale de tu equipo. A cambio, las versiones que caben en un portátil son menos capaces que la de la web.',
    ],
    'ctaTitle' => 'Instrucciones listas para cualquier asistente',
    'ctaBody' => 'Los prompts del <a href="/skills">catálogo de skills</a> funcionan igual en DeepSeek que en ChatGPT o Claude. Elige tu <a href="/profesiones">profesión</a> y adapta el que encaje con tu tarea.',
    'body' => <<<'HTML'
<p>DeepSeek llegó a los titulares con una promesa sencilla: un asistente que razona al nivel de los grandes, gratis y con los modelos publicados para que cualquiera los descargue. La promesa se cumple en buena parte. Lo que los titulares contaron menos es lo que más importa si lo vas a usar en el trabajo: a dónde van los datos que le escribes. Esta guía cubre las dos cosas.</p>

<h2 id="que-es">Qué es DeepSeek</h2>

<p>DeepSeek es un asistente de inteligencia artificial de una empresa china del mismo nombre. Por fuera se parece a ChatGPT: una caja de texto, un historial de conversaciones y respuestas en el idioma en que le escribas. Por dentro tiene dos rasgos que lo distinguen:</p>

<ul>
    <li><strong>Modelos abiertos.</strong> La empresa publica los pesos de sus modelos. Eso permite ejecutarlos en servidores propios o en un ordenador, sin pasar por DeepSeek.</li>
    <li><strong>Precio muy bajo.</strong> La web y la aplicación son gratuitas, y la API para desarrolladores cuesta una fracción de lo que cobran sus competidores.</li>
</ul>

<p>Si es la primera vez que te asomas a estas herramientas, empieza por <a href="/guias/que-es-la-inteligencia-artificial">qué es la inteligencia artificial</a>: lo que se cuenta allí sobre cómo funcionan y en qué fallan vale igual para DeepSeek.</p>

<h2 id="empezar">Empezar: web, aplicación y primera conversación</h2>

<p>Entra en chat.deepseek.com o instala la aplicación oficial y crea una cuenta con tu correo. Cuidado con las imitaciones: hay aplicaciones con nombres parecidos que no son de DeepSeek. Descárgala solo desde la tienda oficial y comprueba el desarrollador.</p>

<p>La primera conversación funciona como en cualquier asistente: cuanto más contexto le des, mejor responde. En lugar de «resume este artículo», prueba con «resume este artículo en cinco puntos para un director comercial que no tiene tiempo de leerlo, y señala qué datos convendría comprobar». Las técnicas generales están en la guía de <a href="/guias/como-escribir-prompts-efectivos">prompts efectivos</a>.</p>

<h2 id="modos">El modo de razonamiento y la búsqueda</h2>

<p>Bajo la caja de texto hay dos botones que cambian mucho el resultado:</p>

<ul>
    <li><strong>Razonamiento (DeepThink).</strong> El modelo «piensa» antes de responder y te enseña ese razonamiento paso a paso. Tarda más, pero acierta bastante más en problemas de lógica, cálculo, planificación o código. Leer el razonamiento es útil: muchas veces el error se ve ahí antes que en la respuesta.</li>
    <li><strong>Búsqueda.</strong> Consulta internet antes de responder y cita las páginas. Actívala para cualquier dato reciente; sin ella, el modelo responde con lo que aprendió durante su entrenamiento, que tiene fecha de corte.</li>
</ul>

<p>Una regla práctica: deja el razonamiento apagado para redactar o reformular textos, y enciéndelo cuando la respuesta dependa de pensar varios pasos seguidos.</p>

<h2 id="tareas">Para qué tareas rinde bien</h2>

<p>Donde DeepSeek destaca frente a su precio:</p>

<ul>
    <li><strong>Programación.</strong> Explicar código, encontrar errores, escribir funciones o traducir de un lenguaje a otro. Cómo encaja con el resto de herramientas está en la guía de <a href="/guias/ia-para-programar">IA para programar</a>.</li>
    <li><strong>Matemáticas y lógica.</strong> Comprobar un cálculo, plantear un problema de optimización o revisar el razonamiento de una hoja de cálculo.</li>
    <li><strong>Análisis estructurado.</strong> Comparar opciones con criterios, desmontar un argumento o planificar un proyecto por fases.</li>
</ul>

<p>Donde se queda por detrás: tiene menos funciones alrededor del modelo que ChatGPT (imágenes, voz avanzada, proyectos compartidos) y su estilo de redacción en español es correcto pero algo plano. Además, en temas políticamente sensibles para China sus respuestas están filtradas. Para comparar con las alternativas, mira <a href="/guias/como-usar-chatgpt">cómo usar ChatGPT</a> y <a href="/guias/como-usar-claude">cómo usar Claude</a>.</p>

<h2 id="datos">Tus datos: la parte que no conviene saltarse</h2>

<p>Según su propia política de privacidad, lo que escribes en la web y en la aplicación se almacena en servidores en China. Varias autoridades europeas de protección de datos han abierto investigaciones sobre DeepSeek y alguna ha llegado a bloquear su aplicación. No hace falta alarmarse, pero sí sacar la conclusión correcta: <strong>en la versión web, trata DeepSeek como un sitio público</strong>.</p>

<p>En la práctica:</p>

<ol>
    <li>No pegues datos personales de clientes, empleados o pacientes.</li>
    <li>No subas contratos, ofertas, nóminas ni documentación interna.</li>
    <li>Si tu empresa tiene una política de uso de IA, comprueba si DeepSeek está permitido antes de usarlo.</li>
    <li>Si necesitas trabajar con un documento real, anonimízalo primero.</li>
</ol>

<p>Estas reglas no son exclusivas de DeepSeek: valen para cualquier asistente gratuito. Lo explicamos con detalle en <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar la IA sin filtrar datos de clientes</a>, y si te toca redactar las normas de tu equipo, en <a href="/guias/politica-de-uso-de-ia-en-la-empresa">política de uso de IA en la empresa</a>.</p>

<h2 id="local">Usarlo en tu ordenador sin enviar nada</h2>

<p>Aquí está la gran ventaja de los modelos abiertos: puedes descargar una versión de DeepSeek y ejecutarla en tu propio equipo con programas como Ollama o LM Studio. Desconectado de internet, nada de lo que escribas sale del ordenador.</p>

<p>El precio es la potencia. Las versiones que caben en un portátil normal son modelos reducidos, más lentos y menos capaces que el de la web. Para resumir, clasificar o reformular documentos confidenciales suelen bastar; para problemas difíciles de razonamiento, se notan las diferencias. El paso a paso para instalarlo está en la guía de <a href="/guias/ia-local-privada-en-tu-ordenador">IA local y privada en tu ordenador</a>.</p>

<p>Si solo te quedas con una idea: DeepSeek es una herramienta muy capaz y gratuita para pensar, calcular y programar, siempre que lo que le escribas pudiera publicarse sin problema. Para lo confidencial, ejecútalo en local o usa una herramienta con garantías contractuales.</p>
HTML,
];
