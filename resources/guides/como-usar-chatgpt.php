<?php

return [
    'title' => 'Cómo usar ChatGPT: guía práctica para sacarle partido en el trabajo',
    'navTitle' => 'Cómo usar ChatGPT',
    'seoTitle' => 'Cómo usar ChatGPT: guía práctica para el trabajo',
    'description' => 'Cómo usar ChatGPT paso a paso: la cuenta, cómo pedirle las cosas, subir archivos, usar proyectos e instrucciones y evitar los errores de principiante.',
    'excerpt' => 'Casi todo el mundo ha probado ChatGPT; muy poca gente lo usa bien. La diferencia no está en trucos secretos, sino en cuatro o cinco hábitos que convierten un buscador parlanchín en una herramienta de trabajo.',
    'category' => 'Fundamentos',
    'published' => '2026-09-28',
    'updated' => '2026-09-28',
    'readingMinutes' => 6,
    'words' => 1076,
    'about' => 'Uso práctico de ChatGPT en el entorno profesional',
    'related' => ['vale-la-pena-pagar-chatgpt-plus', 'chatgpt-vs-gemini', 'como-usar-claude', 'como-usar-gemini', 'como-usar-deepseek', 'herramientas-de-ia-gratis', 'como-escribir-prompts-efectivos', 'gpts-proyectos-y-skills', 'claude-vs-chatgpt-para-trabajar', 'errores-al-usar-ia-en-el-trabajo', 'alucinaciones-de-la-ia'],
    'toc' => [
        'empezar' => 'Empezar: cuenta y configuración',
        'pedir' => 'Cómo pedirle las cosas',
        'funciones' => 'Las funciones que más se desaprovechan',
        'tareas' => 'Cinco tareas para empezar mañana',
        'errores' => 'Errores de principiante',
    ],
    'faq' => [
        '¿Cómo se usa ChatGPT por primera vez?' => 'Entra en chatgpt.com o descarga la aplicación, crea una cuenta con tu correo y escribe tu petición en el cuadro de texto como si se la explicaras a un compañero. Antes de usarlo para trabajar, abre la configuración, revisa las opciones de privacidad y rellena las instrucciones personalizadas con tu profesión y cómo quieres que te responda.',
        '¿ChatGPT se puede usar sin cuenta?' => 'Sí, se puede usar sin registrarse con funciones más limitadas. Con una cuenta gratuita tienes acceso a más funciones, a un historial de conversaciones y a la memoria, así que para uso habitual compensa registrarse.',
        '¿Qué no debo preguntarle a ChatGPT?' => 'No le confíes datos personales de otras personas, información confidencial de tu empresa ni contraseñas. Y no te fíes sin comprobar de datos, cifras, citas o referencias legales y médicas: ChatGPT puede inventarlos con total seguridad.',
        '¿ChatGPT busca en internet?' => 'Sí. Cuando la pregunta lo requiere, o si se lo pides, busca en la web y cita las páginas que ha consultado. Conviene abrir esas fuentes y comprobar que dicen lo que el resumen afirma.',
        '¿Qué diferencia hay entre un proyecto y un GPT?' => 'Un proyecto agrupa conversaciones, archivos e instrucciones sobre un mismo tema para tu propio uso. Un GPT es un asistente configurado con unas instrucciones y archivos fijos que puedes reutilizar o compartir con otras personas. Los proyectos son para organizar tu trabajo; los GPT, para repetir una tarea siempre igual.',
    ],
    'ctaTitle' => 'Prompts de ChatGPT listos para tu profesión',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay cientos de instrucciones probadas que puedes pegar en ChatGPT o convertir en un GPT. Empieza por tu <a href="/profesiones">profesión</a>.',
    'body' => <<<'HTML'
<p>ChatGPT se puede usar en dos minutos y se tarda semanas en usarlo bien. La mayoría de gente se queda en la primera fase: pregunta algo, recibe una respuesta genérica y concluye que «está bien, pero no es para tanto». Esta guía recoge lo que marca la diferencia en el uso profesional. Casi todo sirve igual para <a href="/guias/como-usar-claude">Claude</a>, <a href="/guias/como-usar-gemini">Gemini</a> o Copilot. Si aún no has decidido cuál usar, empieza por <a href="/guias/chatgpt-vs-gemini">ChatGPT o Gemini</a>.</p>

<h2 id="empezar">Empezar: cuenta y configuración</h2>

<p>Entra en chatgpt.com o instala la aplicación de móvil o de escritorio y crea una cuenta. La versión gratuita basta para aprender; qué incluye y dónde se queda corta está en la guía de <a href="/guias/herramientas-de-ia-gratis">herramientas de IA gratis</a>.</p>

<p>Antes de la primera conversación de trabajo, dedica cinco minutos a la configuración:</p>

<ol>
    <li><strong>Privacidad.</strong> En los ajustes de controles de datos, decide si quieres que tus conversaciones se usen para mejorar los modelos. Si vas a tratar temas de trabajo, desactívalo.</li>
    <li><strong>Instrucciones personalizadas.</strong> Cuéntale quién eres y cómo quieres las respuestas. Se aplican a todas las conversaciones.</li>
    <li><strong>Memoria.</strong> ChatGPT puede recordar datos entre conversaciones. Es útil, pero revisa de vez en cuando qué ha guardado.</li>
</ol>

<p>Un ejemplo de instrucciones personalizadas:</p>
<pre><code>Soy responsable de marketing en una empresa de software B2B de
40 personas. Respóndeme en español de España, sin rodeos, con listas
cuando haya varios puntos. Si te falta información para hacer bien
una tarea, pregúntame antes de responder. Si no estás seguro de un
dato, dilo.</code></pre>

<h2 id="pedir">Cómo pedirle las cosas</h2>

<p>La regla que más mejora los resultados: <strong>explícaselo como a un compañero nuevo</strong>, listo pero sin contexto. Una buena petición tiene cuatro piezas:</p>

<ul>
    <li><strong>Contexto</strong>: para quién es, qué situación hay detrás.</li>
    <li><strong>Tarea</strong>: qué quieres exactamente.</li>
    <li><strong>Formato</strong>: extensión, estructura, tono.</li>
    <li><strong>Material</strong>: el texto, los datos o el ejemplo sobre el que trabajar.</li>
</ul>

<p>No es lo mismo «escríbeme un correo para un cliente» que esto:</p>
<pre><code>Tengo que responder a un cliente que se queja de que su pedido llegó
con tres días de retraso. Fue culpa de la empresa de transporte, pero
no quiero echar balones fuera. Escribe una respuesta breve, cordial y
que ofrezca un 10 % de descuento en el próximo pedido. Este es su
correo: [pega el correo]</code></pre>

<p>Y la segunda regla: <strong>no te quedes con la primera respuesta</strong>. Pide cambios concretos («más corto», «quita el segundo párrafo», «menos formal») igual que corregirías a una persona. Hay más técnicas en la guía de <a href="/guias/como-escribir-prompts-efectivos">prompts efectivos</a>.</p>

<h2 id="funciones">Las funciones que más se desaprovechan</h2>

<ul>
    <li><strong>Subir archivos.</strong> Puedes adjuntar PDF, hojas de cálculo, presentaciones o imágenes y pedirle que los resuma, compare o analice. Con una hoja de cálculo, puede hacer cálculos y gráficos de verdad, no a ojo.</li>
    <li><strong>Proyectos.</strong> Agrupan conversaciones, archivos e instrucciones sobre un mismo tema. Si trabajas con un cliente o un producto concreto, crea un proyecto y no tendrás que repetir el contexto cada vez.</li>
    <li><strong>GPTs.</strong> Asistentes que configuras una vez para una tarea repetitiva. Cuándo compensa cada opción lo explica la guía de <a href="/guias/gpts-proyectos-y-skills">GPTs, proyectos y skills</a>.</li>
    <li><strong>Búsqueda y research.</strong> Para preguntas sobre datos actuales, pídele que busque. Para un informe con muchas fuentes, la <a href="/guias/investigar-con-ia-deep-research">investigación profunda</a> trabaja varios minutos por su cuenta.</li>
    <li><strong>Voz.</strong> En el móvil puedes dictarle o mantener una conversación hablada. Muy útil para ordenar ideas mientras caminas o preparar una presentación en voz alta.</li>
    <li><strong>Imágenes.</strong> Genera y edita imágenes en la misma conversación. Cómo pedirlas está en <a href="/guias/crear-imagenes-con-ia">crear imágenes con IA</a>.</li>
</ul>

<h2 id="tareas">Cinco tareas para empezar mañana</h2>

<ol>
    <li><strong>Resumir un documento largo</strong> y pedirle las tres decisiones que implica.</li>
    <li><strong>Preparar una reunión</strong>: pégale el orden del día y pídele las preguntas que deberías llevar resueltas.</li>
    <li><strong>Revisar un texto tuyo</strong> antes de enviarlo: «señala lo que no se entiende, sin reescribirlo».</li>
    <li><strong>Analizar una hoja de cálculo</strong>: «¿qué tres cosas llaman la atención en estos datos?».</li>
    <li><strong>Hacer de abogado del diablo</strong>: «Estas son mis razones para lanzar este producto. Dame los cinco mejores argumentos en contra».</li>
</ol>

<p>Si quieres un plan más ordenado, el <a href="/guias/aprender-ia-desde-cero-plan-de-30-dias">plan de 30 días para aprender IA desde cero</a> va de lo básico a lo avanzado con un ejercicio al día. Y si te topas a menudo con el límite del plan gratuito, en <a href="/guias/vale-la-pena-pagar-chatgpt-plus">¿vale la pena pagar ChatGPT Plus?</a> te ayudamos a decidir.</p>

<h2 id="errores">Errores de principiante</h2>

<ul>
    <li><strong>Usarlo como Google.</strong> Preguntas de dos palabras dan respuestas genéricas. ChatGPT rinde con contexto.</li>
    <li><strong>Creerse todo.</strong> Puede inventar datos, citas y referencias con total seguridad. Comprueba lo que vayas a usar; la guía de <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a> explica cómo.</li>
    <li><strong>Conversaciones eternas.</strong> Tras muchos mensajes sobre temas distintos, las respuestas empeoran. Abre una conversación nueva para cada tarea.</li>
    <li><strong>Pegar datos confidenciales.</strong> Anonimiza nombres, importes e identificadores antes.</li>
    <li><strong>Enviar el texto tal cual.</strong> Se nota. Úsalo como borrador y dale tu voz.</li>
</ul>

<p>Hay una lista más larga, con ejemplos reales, en <a href="/guias/errores-al-usar-ia-en-el-trabajo">errores al usar IA en el trabajo</a>. Pero si te quedas con una sola idea, que sea esta: ChatGPT no es un oráculo, es un colaborador rápido que necesita que le expliques bien las cosas y que revises lo que entrega.</p>
HTML,
];
