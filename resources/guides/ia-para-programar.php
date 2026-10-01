<?php

return [
    'title' => 'IA para programar: qué herramienta usar y cómo trabajar con ella',
    'navTitle' => 'IA para programar',
    'seoTitle' => 'IA para programar: herramientas y cómo usarlas',
    'description' => 'Qué IA usar para programar: chat, autocompletado en el editor o agentes como Claude Code. Cómo pedirle código, revisarlo y no perder el control del proyecto.',
    'excerpt' => 'La IA ya escribe buena parte del código de muchos equipos. La diferencia entre ganar tiempo y acumular deuda técnica no está en la herramienta que elijas, sino en cómo le pides las cosas y cómo revisas lo que entrega.',
    'category' => 'Práctica',
    'published' => '2026-10-01',
    'updated' => '2026-10-01',
    'readingMinutes' => 7,
    'words' => 1141,
    'about' => 'Uso de herramientas de inteligencia artificial para escribir, revisar y mantener código',
    'related' => ['claude-code-vs-cursor', 'empezar-con-claude-code', 'que-son-los-skills-de-claude-code', 'como-usar-deepseek', 'plugins-y-mcp-en-claude-code', 'crear-tu-herramienta-con-ia-sin-programar'],
    'toc' => [
        'tipos' => 'Tres formas de programar con IA',
        'elegir' => 'Qué herramienta elegir según lo que haces',
        'pedir' => 'Cómo pedirle código',
        'revisar' => 'Revisar lo que entrega',
        'proyecto' => 'Darle contexto del proyecto',
        'aprender' => 'Si estás aprendiendo a programar',
    ],
    'faq' => [
        '¿Cuál es la mejor IA para programar?' => 'No hay una sola. Para dudas puntuales y fragmentos de código basta un chat como ChatGPT, Claude o DeepSeek. Para el día a día dentro del editor, un asistente integrado como GitHub Copilot o Cursor. Para tareas largas que tocan varios ficheros, un agente como Claude Code. Muchos programadores combinan dos de estas formas.',
        '¿Hay IA gratis para programar?' => 'Sí. Los chats de ChatGPT, Claude, Gemini y DeepSeek tienen planes gratuitos que escriben y explican código. GitHub Copilot ofrece un nivel gratuito con un número limitado de sugerencias al mes, y existen modelos abiertos que puedes ejecutar en tu ordenador. Los agentes que trabajan sobre todo el proyecto suelen requerir un plan de pago.',
        '¿La IA va a sustituir a los programadores?' => 'Está cambiando el trabajo más que eliminándolo. La IA escribe código rápido, pero alguien tiene que decidir qué construir, dividir el problema, revisar lo que genera y responder cuando falla en producción. Los perfiles que mejor se adaptan son los que saben revisar y dirigir el trabajo de la IA, no solo escribir código.',
        '¿Es seguro el código que genera la IA?' => 'No por defecto. Puede usar librerías desactualizadas, introducir vulnerabilidades como inyecciones SQL o inventarse funciones que no existen. Trátalo como el código de un compañero nuevo: revísalo, ejecuta los tests y pasa las mismas comprobaciones de seguridad que al resto del proyecto.',
        '¿Puedo aprender a programar con IA?' => 'Sí, si la usas como profesor y no como atajo. Pídele que te explique el código línea a línea, que te proponga ejercicios y que revise tus soluciones sin darte la respuesta directamente. Si dejas que escriba todo, avanzarás rápido al principio y te atascarás en cuanto algo falle.',
    ],
    'ctaTitle' => 'Skills de desarrollo listas para usar',
    'ctaBody' => 'En la sección de <a href="/profesiones/desarrollo">desarrollo</a> hay skills para revisar código, escribir tests, documentar y depurar que puedes instalar en Claude Code o adaptar a tu asistente.',
    'body' => <<<'HTML'
<p>Programar con inteligencia artificial ya no es un experimento: es como trabaja una parte creciente de los equipos de desarrollo. Pero «usar IA para programar» abarca cosas muy distintas, desde pegar un error en un chat hasta dejar que un agente modifique veinte ficheros mientras tú revisas otra cosa. Esta guía ordena las opciones y, sobre todo, explica la parte que decide si ganas tiempo o acumulas problemas: cómo pedir y cómo revisar.</p>

<h2 id="tipos">Tres formas de programar con IA</h2>

<ol>
    <li><strong>El chat.</strong> ChatGPT, Claude, Gemini o DeepSeek en el navegador. Pegas código o un error y preguntas. Es la forma más sencilla y gratuita, pero el asistente solo ve lo que le pegas.</li>
    <li><strong>El asistente en el editor.</strong> GitHub Copilot, Cursor y similares viven dentro de tu editor: completan líneas mientras escribes, responden preguntas sobre el fichero abierto y aplican cambios pequeños. Ven más contexto que el chat y no te sacan del flujo de trabajo.</li>
    <li><strong>El agente.</strong> Herramientas como Claude Code reciben una tarea («añade paginación al listado de pedidos y sus tests»), leen el proyecto, editan varios ficheros, ejecutan los tests y corrigen hasta que pasan. Tú defines y revisas; el agente ejecuta. Qué es exactamente un agente lo explicamos en <a href="/guias/que-es-un-agente-de-ia">qué es un agente de IA</a>.</li>
</ol>

<h2 id="elegir">Qué herramienta elegir según lo que haces</h2>

<ul>
    <li><strong>Escribes código de vez en cuando</strong> (scripts, fórmulas, automatizaciones): el chat basta. DeepSeek y Claude programan muy bien en sus versiones gratuitas; mira <a href="/guias/como-usar-deepseek">cómo usar DeepSeek</a> si buscas una opción sin coste.</li>
    <li><strong>Programas a diario en un proyecto</strong>: un asistente en el editor para el trabajo fino y un agente para las tareas que tocan muchas partes. La comparación detallada entre las dos opciones más usadas está en <a href="/guias/claude-code-vs-cursor">Claude Code frente a Cursor</a>.</li>
    <li><strong>No programas, pero quieres una herramienta propia</strong>: hay un camino sin escribir código, explicado en <a href="/guias/crear-tu-herramienta-con-ia-sin-programar">crear tu herramienta con IA sin programar</a>.</li>
</ul>

<p>Antes de elegir, comprueba qué permite tu empresa. Pegar código propietario en un chat gratuito puede incumplir el contrato con un cliente.</p>

<h2 id="pedir">Cómo pedirle código</h2>

<p>La IA programa tan bien como bien le describes el problema. Compara «hazme un login» con esto:</p>
<pre><code>Proyecto en Laravel 12 con PostgreSQL. Necesito que el formulario de
acceso bloquee la cuenta 15 minutos tras 5 intentos fallidos desde la
misma IP. Usa el limitador de peticiones que trae el framework, no
añadas paquetes. Escribe también un test que compruebe el bloqueo.
Antes de escribir código, dime qué ficheros vas a tocar.</code></pre>

<p>Cuatro hábitos que mejoran mucho el resultado:</p>

<ol>
    <li><strong>Di la tecnología y la versión.</strong> Sin eso, la IA mezcla sintaxis de versiones distintas.</li>
    <li><strong>Pon las restricciones</strong>: qué librerías sí y cuáles no, el estilo del proyecto, el rendimiento que necesitas.</li>
    <li><strong>Pide un plan antes del código</strong> en cualquier tarea que no sea trivial. Corregir un plan cuesta un minuto; corregir doscientas líneas, una tarde.</li>
    <li><strong>Divide las tareas grandes.</strong> Cinco peticiones pequeñas y revisadas salen mejor que una enorme.</li>
</ol>

<h2 id="revisar">Revisar lo que entrega</h2>

<p>El código de la IA suele compilar y parecer razonable, que es justo lo que lo hace peligroso. Los fallos más habituales:</p>

<ul>
    <li><strong>Funciones o parámetros inventados</strong> que no existen en la librería. Es la versión técnica de las <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>.</li>
    <li><strong>Huecos de seguridad</strong>: consultas sin parametrizar, permisos que no se comprueban, secretos escritos en el código.</li>
    <li><strong>Soluciones que funcionan en el caso feliz</strong> y fallan con datos vacíos, nulos o muy grandes.</li>
    <li><strong>Cambios de más</strong>: reescribe código que no le pediste tocar.</li>
</ul>

<p>La defensa es la misma que con cualquier compañero: lee el diff entero, ejecuta los tests y no aceptes nada que no entiendas. Si no puedes explicar qué hace una línea, pregúntale a la propia IA antes de fusionarla.</p>

<h2 id="proyecto">Darle contexto del proyecto</h2>

<p>La diferencia entre un asistente genérico y uno que trabaja como tu equipo es el contexto. Los agentes permiten dejarlo escrito: un fichero con las convenciones del proyecto, los comandos para ejecutar los tests y las cosas que nunca debe hacer. En Claude Code eso se completa con skills, instrucciones reutilizables para tareas concretas como revisar un pull request o escribir una migración; lo explicamos en <a href="/guias/que-son-los-skills-de-claude-code">qué son los skills de Claude Code</a>. Si nunca lo has usado, el punto de partida es <a href="/guias/empezar-con-claude-code">empezar con Claude Code</a>.</p>

<p>Y para que el agente consulte tu base de datos, tu gestor de incidencias o tu documentación sin copiar y pegar, están los conectores MCP: <a href="/guias/plugins-y-mcp-en-claude-code">plugins y MCP en Claude Code</a>.</p>

<h2 id="aprender">Si estás aprendiendo a programar</h2>

<p>La IA es un profesor paciente y disponible a cualquier hora, pero también la forma más rápida de no aprender. Úsala para que te explique, no para que haga por ti:</p>

<ul>
    <li>Pídele que comente un código línea a línea.</li>
    <li>Escribe tú la solución y pídele que la revise sin darte la correcta.</li>
    <li>Cuando algo falle, pregúntale cómo diagnosticarlo antes de pedirle el arreglo.</li>
</ul>

<p>Más ideas para estudiar con estas herramientas en <a href="/guias/estudiar-con-ia">estudiar con IA</a>.</p>

<p>Si solo te quedas con una idea: la IA escribe el código, pero la responsabilidad sigue siendo tuya. Pide con precisión, revisa como si lo hubiera escrito alguien que acaba de llegar al equipo y no fusiones nada que no entiendas.</p>
HTML,
];
