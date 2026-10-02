<?php

return [
    'title' => 'Cómo usar Grok: qué aporta y qué ajustes cambiar antes',
    'navTitle' => 'Cómo usar Grok',
    'seoTitle' => 'Cómo usar Grok: guía práctica y privacidad',
    'description' => 'Cómo usar Grok, la IA de xAI: dónde está, qué hace bien con la actualidad de X, qué ajustes de privacidad cambiar y por qué no conviene para el trabajo.',
    'excerpt' => 'Grok es el asistente de xAI, la empresa de Elon Musk, y vive dentro de X. Su punto fuerte es la actualidad; su punto débil, la privacidad y las polémicas. Esto es lo que conviene saber antes de usarlo.',
    'category' => 'Herramientas',
    'published' => '2026-10-02',
    'updated' => '2026-10-02',
    'readingMinutes' => 7,
    'words' => 1107,
    'about' => 'Uso práctico del asistente de inteligencia artificial Grok de xAI y sus ajustes de privacidad',
    'related' => ['como-usar-chatgpt', 'como-usar-perplexity', 'usar-ia-sin-filtrar-datos-de-clientes', 'herramientas-de-ia-gratis', 'como-usar-deepseek', 'alucinaciones-de-la-ia'],
    'toc' => [
        'que-es' => 'Qué es Grok',
        'empezar' => 'Dónde está y cómo empezar',
        'actualidad' => 'Su punto fuerte: lo que está pasando ahora',
        'privacidad' => 'Los ajustes de privacidad que conviene cambiar',
        'imagenes' => 'Imágenes: la parte polémica',
        'trabajo' => '¿Sirve para el trabajo?',
    ],
    'faq' => [
        '¿Qué es Grok?' => 'Grok es el asistente de inteligencia artificial de xAI, la empresa de Elon Musk. Funciona como ChatGPT o Gemini: le escribes y responde, resume, razona o genera imágenes. Su particularidad es que está integrado en la red social X y puede consultar lo que se publica allí en tiempo real.',
        '¿Grok es gratis?' => 'Tiene un uso gratuito con límites, tanto en grok.com y su aplicación como dentro de X. Los modelos más capaces, más mensajes y algunas funciones de imagen y voz requieren una suscripción de pago, sea la de X Premium o la propia de Grok.',
        '¿Grok usa mis datos para entrenar?' => 'Por defecto, xAI puede usar tus publicaciones públicas de X y tus conversaciones con Grok para mejorar sus modelos. Puedes oponerte desde los ajustes de privacidad de X (en el apartado de Grok y colaboradores externos) y desde la configuración de grok.com. En España, la autoridad a la que reclamar es la AEPD.',
        '¿Es fiable Grok para informarse de la actualidad?' => 'Es rápido, pero no fiable por sí solo. Al apoyarse en publicaciones de X, puede repetir rumores, bulos o rectificaciones a medias de una noticia que aún está pasando. Úsalo para saber de qué se habla y comprueba los datos en medios o fuentes oficiales antes de darlos por buenos.',
        '¿Es mejor Grok o ChatGPT?' => 'Para la actualidad en redes, Grok responde antes. Para casi todo lo demás (redactar, analizar documentos, trabajar en equipo, garantías para empresas), ChatGPT, Claude o Gemini están más maduros y ofrecen planes con controles de privacidad pensados para el trabajo.',
    ],
    'ctaTitle' => 'Prompts que funcionan en cualquier asistente',
    'ctaBody' => 'Las instrucciones del <a href="/skills">catálogo de skills</a> sirven igual en Grok, ChatGPT o Claude. Busca la de tu <a href="/profesiones">profesión</a> y ajústala a tu caso.',
    'body' => <<<'HTML'
<p>Grok es el asistente que más titulares genera por motivos que no tienen que ver con lo bien que responde. Llega a España dentro de X, en su propia aplicación y hasta en los coches Tesla, y mucha gente lo prueba sin saber muy bien qué es ni qué hace con lo que le escribe. Esta guía va a lo práctico: para qué sirve de verdad, qué ajustes cambiar el primer día y por qué no lo recomendamos para tareas de trabajo con datos reales.</p>

<h2 id="que-es">Qué es Grok</h2>

<p>Grok es el asistente de inteligencia artificial de <strong>xAI</strong>, la empresa de Elon Musk, que se integró con X (antes Twitter). Por fuera se parece al resto: una caja de texto, conversaciones, un modo de razonamiento y generación de imágenes. Lo que lo distingue es su acceso a lo que se publica en X en tiempo real y un tono que la propia empresa vende como más desenfadado y menos filtrado.</p>

<p>Si vienes de cero, primero conviene entender cómo funcionan estos modelos y en qué fallan. Está en <a href="/guias/que-es-la-inteligencia-artificial">qué es la inteligencia artificial</a>.</p>

<h2 id="empezar">Dónde está y cómo empezar</h2>

<p>Hay tres puertas de entrada:</p>

<ul>
    <li><strong>Dentro de X:</strong> el icono de Grok en la barra de la aplicación o la web. También puedes pedirle que explique una publicación concreta.</li>
    <li><strong>grok.com y su aplicación:</strong> separadas de la red social, con historial propio.</li>
    <li><strong>Integraciones:</strong> en algunos coches y dispositivos, sobre todo por voz.</li>
</ul>

<p>El uso gratuito tiene límites de mensajes y de modelos. Para probarlo basta. Las reglas para pedir bien son las mismas que en cualquier asistente: contexto, objetivo y formato de salida. Las tienes en la guía de <a href="/guias/como-escribir-prompts-efectivos">prompts efectivos</a>.</p>

<h2 id="actualidad">Su punto fuerte: lo que está pasando ahora</h2>

<p>Donde Grok aporta algo que los demás no dan igual de rápido es en la conversación del momento. Preguntas útiles:</p>

<ul>
    <li>«¿Qué se está diciendo en X sobre el lanzamiento de este producto? Separa quejas, elogios y dudas.»</li>
    <li>«Resume las reacciones de los periodistas económicos a la subida de tipos de hoy.»</li>
    <li>«¿Qué opinan los usuarios de nuestra competencia sobre su nuevo precio?»</li>
</ul>

<p>Para marketing, comunicación o atención al cliente, sirve como termómetro rápido. Pero un termómetro no es un dato: X no representa a toda la población, y en una noticia que todavía está pasando circulan rumores y bulos que Grok puede repetir con total seguridad. Antes de citar nada, compruébalo. Por qué pasa esto y cómo detectarlo está en <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>. Si lo que buscas es una respuesta con fuentes verificables, <a href="/guias/como-usar-perplexity">Perplexity</a> encaja mejor.</p>

<h2 id="privacidad">Los ajustes de privacidad que conviene cambiar</h2>

<p>Por defecto, xAI puede usar tus publicaciones públicas en X y tus conversaciones con Grok para entrenar sus modelos. Si no quieres, cámbialo:</p>

<ol>
    <li>En X, entra en <em>Configuración y privacidad</em> › <em>Privacidad y seguridad</em> y busca el apartado de Grok y colaboradores externos. Desmarca la opción que permite usar tus datos para entrenamiento.</li>
    <li>En grok.com o su aplicación, revisa la configuración de datos y desactiva la mejora del modelo con tus conversaciones.</li>
    <li>Borra las conversaciones que no necesites guardar.</li>
</ol>

<p>Las autoridades europeas de protección de datos tienen abiertas investigaciones sobre cómo xAI trata los datos de los usuarios de la UE. En España, si tienes una queja, la autoridad competente es la AEPD. Aunque cambies los ajustes, la regla de oro sigue en pie: no escribas nada que no publicarías.</p>

<h2 id="imagenes">Imágenes: la parte polémica</h2>

<p>Grok genera y edita imágenes, con menos restricciones que otros asistentes. A principios de 2026, esa permisividad se usó de forma masiva para crear imágenes sexuales no consentidas de personas reales, lo que llevó a la Comisión Europea y a varios reguladores a abrir investigaciones, y a xAI a endurecer sus filtros.</p>

<p>Dos ideas claras: crear o difundir imágenes íntimas de una persona sin su consentimiento puede ser delito, la haga quien la haga; y si te ocurre a ti, guarda pruebas y denuncia. Cómo actuar está en la guía de <a href="/guias/estafas-con-ia-deepfakes-y-suplantacion">estafas con IA, deepfakes y suplantación</a>. Para imágenes de uso profesional, las condiciones de uso comercial importan más que la herramienta; lo explicamos en <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">imágenes con IA: derechos y uso comercial</a>.</p>

<h2 id="trabajo">¿Sirve para el trabajo?</h2>

<p>Para seguir la conversación pública sobre tu sector, sí, con verificación. Para el resto, preferimos otras opciones, y no por la calidad de las respuestas:</p>

<ul>
    <li>Sus planes para empresas están menos maduros que los de ChatGPT, Claude, Gemini o Copilot, que ofrecen contratos de tratamiento de datos y controles para administradores.</li>
    <li>Las investigaciones abiertas en la UE hacen difícil justificar su uso ante un responsable de protección de datos.</li>
    <li>Su tono «sin filtros» es un riesgo si el texto acaba en manos de un cliente.</li>
</ul>

<p>Si en tu equipo se está usando, lo sensato es que figure en vuestra <a href="/guias/politica-de-uso-de-ia-en-la-empresa">política de uso de IA</a>, con la misma regla que para cualquier asistente gratuito: nada de datos de clientes ni información interna. El detalle de esa regla está en <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar la IA sin filtrar datos de clientes</a>. Y para elegir el asistente principal, empieza por <a href="/guias/como-usar-chatgpt">cómo usar ChatGPT</a> o la comparativa <a href="/guias/chatgpt-vs-gemini">ChatGPT o Gemini</a>.</p>
HTML,
];
