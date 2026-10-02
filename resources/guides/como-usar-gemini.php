<?php

return [
    'title' => 'Cómo usar Gemini: guía práctica para trabajar con la IA de Google',
    'navTitle' => 'Cómo usar Gemini',
    'seoTitle' => 'Cómo usar Gemini: guía práctica para el trabajo',
    'description' => 'Cómo usar Gemini paso a paso: la cuenta, cómo pedirle las cosas, los Gems, la conexión con Gmail, Docs y Drive, y cuándo te conviene más que ChatGPT.',
    'excerpt' => 'Gemini no es solo otro chat: su ventaja está en que ya vive dentro de Gmail, Docs, Drive y el buscador. Si trabajas con herramientas de Google, aprender a usarlo bien te ahorra copiar y pegar todo el día.',
    'category' => 'Fundamentos',
    'published' => '2026-09-29',
    'updated' => '2026-09-29',
    'readingMinutes' => 8,
    'words' => 1241,
    'about' => 'Uso práctico de Google Gemini en el entorno profesional',
    'related' => ['chatgpt-vs-gemini', 'como-usar-chatgpt', 'herramientas-de-ia-gratis', 'gemini-notebook-antes-notebooklm', 'ia-en-excel-y-google-sheets', 'como-escribir-prompts-efectivos', 'claude-vs-chatgpt-para-trabajar'],
    'toc' => [
        'empezar' => 'Empezar: cuenta y ajustes',
        'pedir' => 'Cómo pedirle las cosas',
        'google' => 'Su punto fuerte: Gmail, Docs y Drive',
        'gems' => 'Gems: asistentes para tareas repetidas',
        'cuando' => '¿Gemini, ChatGPT o Claude?',
        'errores' => 'Errores habituales',
    ],
    'faq' => [
        '¿Cómo se empieza a usar Gemini?' => 'Entra en gemini.google.com o abre la aplicación de Gemini en el móvil e inicia sesión con tu cuenta de Google. No hace falta instalar nada más ni dar una tarjeta: escribe tu petición en el cuadro de texto y Gemini responde. Antes de usarlo para trabajar, revisa en los ajustes qué actividad guarda y si quieres conectar tus aplicaciones de Google.',
        '¿Gemini es gratis?' => 'Sí, hay una versión gratuita con cuenta de Google que basta para la mayoría de tareas cotidianas. Los planes de pago de Google dan acceso a los modelos más potentes, más límite de uso y más integración con Gmail y Docs. Si tu empresa usa Google Workspace, puede que ya lo tengas incluido.',
        '¿Gemini puede leer mis correos de Gmail?' => 'Solo si conectas Gmail en los ajustes de aplicaciones de Gemini, o si lo usas desde el panel lateral de Gmail. Entonces puede buscar, resumir y redactar sobre tus correos. Puedes desconectarlo cuando quieras.',
        '¿Qué es un Gem de Gemini?' => 'Un Gem es un asistente personalizado: le das unas instrucciones fijas, y si quieres algunos archivos, y lo reutilizas cada vez que haces esa tarea. Es el equivalente a los GPT de ChatGPT.',
        '¿Es mejor Gemini o ChatGPT?' => 'Depende de dónde trabajes. Si tu día pasa por Gmail, Docs, Sheets y Drive, Gemini tiene la ventaja de estar ya dentro. Para tareas sueltas de redacción o análisis los resultados son parecidos, y lo más sensato es probar la misma tarea en los dos y quedarte con el que mejor te funcione.',
    ],
    'ctaTitle' => 'Instrucciones listas para convertir en Gems',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay cientos de instrucciones probadas por profesión que puedes pegar en Gemini o guardar como un Gem. Empieza por tu <a href="/profesiones">profesión</a>.',
    'body' => <<<'HTML'
<p>Gemini es el asistente de inteligencia artificial de Google. Como chat funciona igual que ChatGPT o Claude: escribes, responde. Lo que lo distingue es dónde está: dentro de Gmail, Docs, Sheets, Drive, el buscador y Android. Si tu trabajo ya pasa por esas herramientas, Gemini puede leer el correo, el documento o la hoja en la que estás sin que tengas que copiar nada. Esta guía se centra en el uso profesional; lo básico de cómo pedirle cosas a una IA sirve igual en cualquier asistente.</p>

<h2 id="empezar">Empezar: cuenta y ajustes</h2>

<p>Entra en gemini.google.com o instala la aplicación en el móvil e inicia sesión con tu cuenta de Google. La versión gratuita sirve para aprender; qué incluye frente a otras opciones sin coste está en la guía de <a href="/guias/herramientas-de-ia-gratis">herramientas de IA gratis</a>.</p>

<p>Antes de la primera conversación de trabajo, revisa tres cosas en los ajustes:</p>

<ol>
    <li><strong>Actividad.</strong> Decide si Google guarda tus conversaciones y durante cuánto tiempo. Si vas a tratar temas de trabajo con una cuenta personal, conviene limitarlo.</li>
    <li><strong>Aplicaciones conectadas.</strong> Aquí eliges si Gemini puede consultar Gmail, Drive, Calendar y otras apps. Actívalas solo si las vas a usar.</li>
    <li><strong>Instrucciones guardadas.</strong> Cuéntale quién eres y cómo quieres las respuestas, para no repetirlo en cada conversación.</li>
</ol>

<p>Si tu empresa usa Google Workspace, pregunta antes al responsable de sistemas: puede que Gemini ya esté incluido con condiciones de privacidad distintas a las de la cuenta personal, y que haya normas internas sobre qué datos puedes usar. La guía de <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar IA sin filtrar datos de clientes</a> explica qué revisar.</p>

<h2 id="pedir">Cómo pedirle las cosas</h2>

<p>Aquí no hay diferencias con otros asistentes: <strong>explícaselo como a un compañero nuevo</strong>. Contexto, tarea, formato y el material sobre el que trabajar. Compara «hazme un resumen» con esto:</p>
<pre><code>Soy jefa de proyecto en una consultora. Resume el documento adjunto
para el director general, que no ha seguido el proyecto. Máximo diez
líneas: qué se ha hecho, qué está en riesgo y qué decisión necesitamos
de él antes del viernes.</code></pre>

<p>Y no te quedes con la primera respuesta: pide cambios concretos. Hay más técnicas en la guía de <a href="/guias/como-escribir-prompts-efectivos">prompts efectivos</a>.</p>

<p>Dos detalles propios de Gemini. El primero: debajo de cada respuesta hay una opción para <strong>comprobarla con la Búsqueda de Google</strong>, que marca qué frases encuentran respaldo en la web y cuáles no. Úsala con datos y cifras. El segundo: puedes pedirle que <strong>busque en tus archivos</strong> mencionando la aplicación, por ejemplo «busca en mi Drive el último presupuesto de este cliente».</p>

<h2 id="google">Su punto fuerte: Gmail, Docs y Drive</h2>

<p>Donde Gemini aporta más que la competencia es dentro de las herramientas de Google, desde el panel lateral o conectándolas en el chat:</p>

<ul>
    <li><strong>Gmail.</strong> Resumir un hilo largo antes de contestar, buscar «qué me dijo el proveedor sobre los plazos» sin recordar el asunto, o redactar una respuesta a partir de dos líneas tuyas.</li>
    <li><strong>Docs.</strong> Pedir un primer borrador, reescribir un párrafo con otro tono o preguntar «¿qué contradicciones hay en este documento?».</li>
    <li><strong>Sheets.</strong> Crear fórmulas describiéndolas, limpiar datos o pedir un análisis rápido. Lo explicamos con ejemplos en <a href="/guias/ia-en-excel-y-google-sheets">IA en Excel y Google Sheets</a>.</li>
    <li><strong>Drive.</strong> Preguntar sobre varios documentos a la vez sin abrirlos. Para trabajar a fondo con un conjunto fijo de fuentes, el cuaderno de Gemini (antes NotebookLM) va mejor; lo contamos en <a href="/guias/gemini-notebook-antes-notebooklm">Gemini Notebook</a>.</li>
    <li><strong>Calendar y Meet.</strong> Preparar reuniones y obtener notas y tareas al terminar. Cómo aprovecharlo está en <a href="/guias/ia-para-reuniones-y-actas">IA para reuniones y actas</a>.</li>
</ul>

<p>Para informes con muchas fuentes, la función de investigación profunda trabaja varios minutos por su cuenta y entrega un documento con enlaces. Cuándo compensa y cómo revisarlo lo explica la guía de <a href="/guias/investigar-con-ia-deep-research">investigar con IA</a>.</p>

<h2 id="gems">Gems: asistentes para tareas repetidas</h2>

<p>Si repites una tarea cada semana (responder a presupuestos, revisar contratos de alquiler, preparar publicaciones), crea un <strong>Gem</strong>: un asistente con unas instrucciones fijas y, si quieres, archivos de referencia. Un ejemplo:</p>
<pre><code>Eres el revisor de propuestas comerciales de una agencia de diseño.
Cuando te pase una propuesta, señala: precios sin justificar, plazos
poco realistas, frases vagas y lo que falta respecto a nuestra
plantilla (adjunta). No reescribas la propuesta: solo la lista de
problemas, ordenada por gravedad.</code></pre>

<p>Es la misma idea que los GPT de ChatGPT o los proyectos y skills de Claude; cuándo conviene cada opción está en <a href="/guias/gpts-proyectos-y-skills">GPTs, proyectos y skills</a>.</p>

<h2 id="cuando">¿Gemini, ChatGPT o Claude?</h2>

<p>Para redactar, resumir o pensar en voz alta, los tres dan resultados parecidos y cambian de posición con cada versión. La elección práctica depende de tu entorno:</p>

<ul>
    <li><strong>Gemini</strong>, si tu trabajo vive en Gmail, Docs y Drive, o si usas un móvil Android.</li>
    <li><strong>Copilot</strong>, si tu empresa trabaja con Outlook, Word y Teams; lo explicamos en <a href="/guias/microsoft-365-copilot-en-el-trabajo">Microsoft 365 Copilot</a>.</li>
    <li><strong>ChatGPT o Claude</strong>, para trabajo fuera de un paquete de oficina concreto. Hay una guía de <a href="/guias/como-usar-chatgpt">cómo usar ChatGPT</a> y una comparativa de <a href="/guias/claude-vs-chatgpt-para-trabajar">Claude y ChatGPT</a>. Si dudas entre Gemini y ChatGPT, mira <a href="/guias/chatgpt-vs-gemini">ChatGPT o Gemini</a>.</li>
</ul>

<p>Lo más fiable es hacer tu tarea más habitual en dos asistentes durante una semana y quedarte con el que menos tengas que corregir.</p>

<h2 id="errores">Errores habituales</h2>

<ul>
    <li><strong>Conectarlo todo sin pensar.</strong> Dar acceso a Gmail y Drive es cómodo, pero revisa qué hay ahí antes de pedirle búsquedas amplias.</li>
    <li><strong>Creerse las cifras.</strong> Gemini puede inventar datos con total seguridad. Usa la comprobación con la Búsqueda y lee la guía de <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>.</li>
    <li><strong>Confundirlo con el buscador.</strong> Las respuestas con IA del buscador de Google no son lo mismo que una conversación con Gemini: para trabajo con contexto, usa el chat.</li>
    <li><strong>Enviar sin revisar.</strong> Un borrador de Gemini en Gmail es un punto de partida. Dale tu voz antes de pulsar enviar.</li>
</ul>

<p>Si solo te quedas con una idea: la ventaja de Gemini no es que sea más listo, es que ya está donde trabajas. Aprovéchala para dejar de copiar y pegar, y revisa lo que entrega como revisarías el trabajo de un compañero.</p>
HTML,
];
