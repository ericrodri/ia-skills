<?php

return [
    'title' => 'Cómo usar Claude: guía práctica para trabajar con la IA de Anthropic',
    'navTitle' => 'Cómo usar Claude',
    'seoTitle' => 'Cómo usar Claude: guía práctica para el trabajo',
    'description' => 'Cómo usar Claude paso a paso: la cuenta, cómo pedirle las cosas, proyectos, artefactos, conectores y skills, y cuándo te conviene más que ChatGPT.',
    'excerpt' => 'Claude destaca con documentos largos, textos cuidados y trabajo por proyectos. Esta guía explica cómo empezar, qué funciones merece la pena aprender primero y qué errores evitar.',
    'category' => 'Fundamentos',
    'published' => '2026-09-30',
    'updated' => '2026-09-30',
    'readingMinutes' => 9,
    'words' => 1433,
    'about' => 'Uso práctico de Claude, el asistente de IA de Anthropic, en el entorno profesional',
    'related' => ['claude-vs-chatgpt-para-trabajar', 'gpts-proyectos-y-skills', 'que-son-los-skills-de-claude-code', 'como-usar-chatgpt', 'como-usar-gemini', 'como-escribir-prompts-efectivos'],
    'toc' => [
        'empezar' => 'Empezar: cuenta, planes y ajustes',
        'pedir' => 'Cómo pedirle las cosas',
        'documentos' => 'Su punto fuerte: documentos largos',
        'proyectos' => 'Proyectos: el contexto que no se pierde',
        'artefactos' => 'Artefactos, conectores y skills',
        'cuando' => '¿Claude, ChatGPT o Gemini?',
        'errores' => 'Errores habituales',
    ],
    'faq' => [
        '¿Cómo se empieza a usar Claude?' => 'Entra en claude.ai o descarga la aplicación para el móvil o el ordenador y crea una cuenta con tu correo o con Google. No hace falta instalar nada más: escribe tu petición en español y Claude responde en español. Antes de usarlo para trabajar, añade en los ajustes unas instrucciones sobre quién eres y cómo quieres las respuestas.',
        '¿Claude es gratis?' => 'Sí, hay un plan gratuito que permite conversar, subir archivos y crear artefactos, con un límite de mensajes que se reinicia cada pocas horas. Los planes de pago dan más uso, acceso a los modelos más potentes y funciones como la investigación a fondo y más conectores. Las empresas tienen planes de equipo con condiciones de privacidad propias.',
        '¿Qué es un proyecto en Claude?' => 'Un proyecto es un espacio de trabajo con instrucciones y documentos propios. Todo lo que subes al proyecto está disponible en cada conversación que abres dentro de él, así que no tienes que volver a explicar el contexto ni adjuntar los mismos archivos una y otra vez.',
        '¿Qué diferencia hay entre Claude y Claude Code?' => 'Claude es el asistente de chat que se usa desde la web y las aplicaciones. Claude Code es la versión para trabajar con código y archivos en tu ordenador: lee un proyecto entero, ejecuta comandos y hace cambios. Para tareas de oficina basta con Claude; si programas o quieres automatizar trabajo con archivos, Claude Code va más lejos.',
        '¿Claude entrena con mis conversaciones?' => 'Depende del plan y de tus ajustes de privacidad. En las cuentas personales puedes decidir en los ajustes si tus conversaciones se usan para mejorar los modelos; los planes de empresa no entrenan con tus datos por defecto. Revisa esa opción antes de pegar información de clientes.',
    ],
    'ctaTitle' => 'Instrucciones listas para tus proyectos de Claude',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay cientos de instrucciones probadas por profesión que puedes pegar en un proyecto de Claude o instalar como skill. Empieza por tu <a href="/profesiones">profesión</a>.',
    'body' => <<<'HTML'
<p>Claude es el asistente de inteligencia artificial de Anthropic. Como chat funciona igual que ChatGPT o Gemini: escribes y responde. Donde se distingue es en tres cosas: maneja documentos muy largos sin perder el hilo, escribe con un tono bastante natural en español y está pensado para trabajar por proyectos, con contexto que se mantiene entre conversaciones. Esta guía se centra en el uso profesional desde la web y las aplicaciones; si lo que quieres es programar, la guía de <a href="/guias/empezar-con-claude-code">empezar con Claude Code</a> es tu punto de partida.</p>

<h2 id="empezar">Empezar: cuenta, planes y ajustes</h2>

<p>Entra en claude.ai o instala la aplicación en el móvil o el ordenador y crea una cuenta. Está en español desde el primer momento: no hay que configurar el idioma. El plan gratuito basta para aprender y para uso ocasional; si lo usas a diario, notarás el límite de mensajes antes que en otros asistentes, y ahí es donde el plan de pago compensa. Qué da cada opción sin coste está comparado en la guía de <a href="/guias/herramientas-de-ia-gratis">herramientas de IA gratis</a>.</p>

<p>Antes de la primera conversación de trabajo, revisa tres cosas en los ajustes:</p>

<ol>
    <li><strong>Preferencias personales.</strong> Cuéntale en dos o tres frases quién eres, a qué te dedicas y cómo quieres las respuestas (más cortas, sin listas, con ejemplos). Se aplica a todas las conversaciones.</li>
    <li><strong>Privacidad.</strong> Decide si tus conversaciones pueden usarse para mejorar los modelos. Si vas a tratar temas de clientes con una cuenta personal, desactívalo y lee antes la guía de <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar IA sin filtrar datos de clientes</a>.</li>
    <li><strong>Estilos.</strong> Puedes elegir o crear un estilo de respuesta (conciso, formal, explicativo) y cambiarlo según la tarea sin reescribir tus instrucciones.</li>
</ol>

<h2 id="pedir">Cómo pedirle las cosas</h2>

<p>La regla es la misma que con cualquier asistente: <strong>explícaselo como a un compañero nuevo y competente</strong>. Contexto, tarea, formato y el material sobre el que trabajar. Claude responde especialmente bien a las peticiones detalladas y a los ejemplos del resultado que buscas. Compara «mejora este texto» con esto:</p>
<pre><code>Soy responsable de comunicación de una cooperativa agrícola. Reescribe
el texto adjunto para la newsletter de socios: tono cercano, sin
tecnicismos, máximo 250 palabras. Mantén todas las fechas y cifras.
Al final, dime qué frases has eliminado y por qué.</code></pre>

<p>Dos costumbres que marcan la diferencia con Claude. La primera: <strong>pídele que pregunte antes de empezar</strong> si le falta información («antes de redactar, hazme las preguntas que necesites»). La segunda: cuando la respuesta no te convenza, di qué falla en concreto en lugar de pedir «otra versión». Hay más técnicas en la guía de <a href="/guias/como-escribir-prompts-efectivos">prompts efectivos</a>.</p>

<h2 id="documentos">Su punto fuerte: documentos largos</h2>

<p>Claude admite documentos muy extensos en una sola conversación: contratos, informes anuales, actas de un año entero o varios PDF a la vez. Eso lo hace muy útil para tareas como estas:</p>

<ul>
    <li><strong>Revisar un contrato</strong> y pedir una lista de cláusulas que cambian respecto a la versión anterior.</li>
    <li><strong>Resumir un informe</strong> para alguien concreto: el director, un cliente, el equipo técnico. Cómo hacerlo sin perder lo importante está en <a href="/guias/resumir-documentos-largos-con-ia">resumir documentos largos con IA</a>.</li>
    <li><strong>Cruzar varios documentos</strong>: «¿en qué se contradicen estas tres propuestas?».</li>
    <li><strong>Analizar datos</strong> de un Excel o un CSV: Claude puede ejecutar código para calcular, filtrar y hacer gráficos, y te enseña cómo lo ha hecho.</li>
</ul>

<p>Un aviso: que el documento quepa no significa que todo reciba la misma atención. En conversaciones muy largas conviene empezar de nuevo con un resumen; lo explicamos en la guía de <a href="/guias/ventana-de-contexto-conversaciones-largas">ventana de contexto</a>.</p>

<h2 id="proyectos">Proyectos: el contexto que no se pierde</h2>

<p>Si trabajas de forma continuada en algo (un cliente, una oposición, un libro, una línea de producto), crea un <strong>proyecto</strong>. Le das unas instrucciones fijas y subes los documentos de referencia una sola vez; cada conversación nueva dentro del proyecto ya los conoce. Un ejemplo de instrucciones:</p>
<pre><code>Este proyecto es para el cliente Hotel Mirador. En la carpeta están su
manual de marca, las tarifas de 2026 y las últimas diez reseñas.
Escribe siempre con su tono (cercano, sin exclamaciones), no inventes
servicios que no aparezcan en el manual y avisa si una petición
contradice las tarifas.</code></pre>

<p>Es la misma idea que los GPT de ChatGPT o los Gems de Gemini; cuándo conviene cada opción está en <a href="/guias/gpts-proyectos-y-skills">GPTs, proyectos y skills</a>.</p>

<h2 id="artefactos">Artefactos, conectores y skills</h2>

<p>Tres funciones que conviene conocer una vez domines lo básico:</p>

<ul>
    <li><strong>Artefactos.</strong> Cuando pides un documento, una tabla, un diagrama o una pequeña aplicación, Claude lo abre en un panel aparte que puedes editar, descargar o compartir. Muchas personas construyen así calculadoras o formularios sin saber programar, como contamos en <a href="/guias/crear-tu-herramienta-con-ia-sin-programar">crear tu herramienta con IA sin programar</a>.</li>
    <li><strong>Conectores.</strong> Permiten a Claude consultar tus herramientas: Google Drive, Gmail, el calendario, Notion y muchas más. Actívalos solo los que vayas a usar. La tecnología que hay detrás, MCP, se explica en <a href="/guias/plugins-y-mcp-en-claude-code">plugins y MCP</a>.</li>
    <li><strong>Skills.</strong> Son paquetes de instrucciones y archivos que enseñan a Claude a hacer una tarea concreta a tu manera: preparar un informe con tu plantilla, revisar textos con tu guía de estilo. Qué son y cómo se crean está en la guía de <a href="/guias/que-son-los-skills-de-claude-code">qué son los skills</a>.</li>
</ul>

<p>Para informes con muchas fuentes, la función de investigación trabaja varios minutos por su cuenta y entrega un documento con enlaces; cuándo compensa está en <a href="/guias/investigar-con-ia-deep-research">investigar con IA</a>.</p>

<h2 id="cuando">¿Claude, ChatGPT o Gemini?</h2>

<p>Para redactar, resumir o pensar en voz alta, los tres dan resultados parecidos y cambian de posición con cada versión. La elección práctica depende de lo que hagas:</p>

<ul>
    <li><strong>Claude</strong>, si trabajas con documentos largos, textos que deben sonar bien o código, y si te organizas por proyectos.</li>
    <li><strong>ChatGPT</strong>, si necesitas generar imágenes a menudo, usar la voz o quieres el ecosistema más amplio. Lo explicamos en <a href="/guias/como-usar-chatgpt">cómo usar ChatGPT</a>.</li>
    <li><strong>Gemini</strong>, si tu trabajo vive en Gmail, Docs y Drive; lo contamos en <a href="/guias/como-usar-gemini">cómo usar Gemini</a>.</li>
</ul>

<p>La comparativa por tareas, con criterios concretos, está en <a href="/guias/claude-vs-chatgpt-para-trabajar">Claude o ChatGPT para trabajar</a>. Lo más fiable sigue siendo hacer tu tarea más habitual en dos asistentes durante una semana y quedarte con el que menos tengas que corregir.</p>

<h2 id="errores">Errores habituales</h2>

<ul>
    <li><strong>Gastar el límite en conversaciones eternas.</strong> Cada mensaje en un hilo larguísimo consume más. Abre conversaciones nuevas por tarea y usa proyectos para no repetir el contexto.</li>
    <li><strong>Subir documentos sin decir qué buscas.</strong> «Aquí tienes el contrato» da una respuesta genérica; «señala las cláusulas de penalización y plazos» da una útil.</li>
    <li><strong>Creerse las citas y las cifras.</strong> Claude también puede equivocarse con seguridad. Pídele que indique de qué parte del documento sale cada dato y lee la guía de <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>.</li>
    <li><strong>No reutilizar lo que funciona.</strong> Si una instrucción te ha dado un buen resultado, guárdala en un proyecto o conviértela en un skill.</li>
</ul>

<p>Si solo te quedas con una idea: Claude rinde más cuanto mejor contexto le das, y los proyectos existen para que ese contexto se lo des una sola vez.</p>
HTML,
];
