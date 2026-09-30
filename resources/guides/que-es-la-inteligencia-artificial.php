<?php

return [
    'title' => 'Qué es la inteligencia artificial: explicado sin tecnicismos',
    'navTitle' => 'Qué es la inteligencia artificial',
    'seoTitle' => 'Qué es la inteligencia artificial, explicado fácil',
    'description' => 'Qué es la inteligencia artificial, cómo funciona ChatGPT por dentro, qué tipos de IA existen, qué sabe hacer y qué no, y cómo empezar a usarla en tu trabajo.',
    'excerpt' => 'La inteligencia artificial no piensa como una persona ni es magia: es software que aprende patrones a partir de muchos datos. Entender cómo funciona explica por qué acierta tanto y por qué a veces se inventa las cosas.',
    'category' => 'Fundamentos',
    'published' => '2026-09-30',
    'updated' => '2026-09-30',
    'readingMinutes' => 7,
    'words' => 1192,
    'about' => 'Inteligencia artificial: definición, funcionamiento y usos prácticos',
    'related' => ['aprender-ia-desde-cero-plan-de-30-dias', 'que-es-un-agente-de-ia', 'alucinaciones-de-la-ia', 'como-usar-chatgpt', 'va-la-ia-a-sustituir-mi-trabajo', 'herramientas-de-ia-gratis'],
    'toc' => [
        'definicion' => 'Una definición que se entiende',
        'como-funciona' => 'Cómo funciona un asistente como ChatGPT',
        'tipos' => 'Tipos de inteligencia artificial',
        'que-hace' => 'Qué hace bien y qué hace mal',
        'trabajo' => 'Qué significa para tu trabajo',
        'empezar' => 'Cómo empezar',
    ],
    'faq' => [
        '¿Qué es la inteligencia artificial en palabras sencillas?' => 'Es software capaz de hacer tareas que antes solo podía hacer una persona, como entender un texto, reconocer una imagen o redactar una respuesta. En lugar de seguir reglas escritas a mano, aprende patrones a partir de enormes cantidades de ejemplos y los usa para responder a situaciones nuevas.',
        '¿Cómo funciona ChatGPT?' => 'ChatGPT es un modelo de lenguaje: durante su entrenamiento leyó una cantidad enorme de texto y aprendió a predecir qué palabra encaja a continuación en cada contexto. Después se ajustó con ejemplos y valoraciones de personas para que responda como un asistente útil. Cuando le escribes, genera la respuesta palabra a palabra, eligiendo en cada paso la continuación más adecuada.',
        '¿Qué tipos de inteligencia artificial hay?' => 'Una forma útil de clasificarla es por lo que hace: la IA predictiva estima lo que va a pasar (ventas, fraudes, averías), la IA de reconocimiento identifica cosas en imágenes, voz o texto, y la IA generativa crea contenido nuevo, como textos, imágenes, audio o código. ChatGPT, Claude y Gemini son IA generativa.',
        '¿La inteligencia artificial piensa?' => 'No como una persona. No tiene intenciones, experiencias ni comprensión del mundo en el sentido humano. Lo que hace es calcular respuestas muy probables a partir de lo que aprendió, y eso produce resultados que parecen razonados. Por eso puede resolver un problema complejo y, un momento después, afirmar algo falso con total seguridad.',
        '¿Qué ejemplos de inteligencia artificial uso ya sin saberlo?' => 'El filtro de correo basura, las recomendaciones de series y compras, el corrector y el teclado predictivo del móvil, la búsqueda de caras en la galería de fotos, los traductores automáticos, los asistentes de voz y las rutas del navegador del coche. Todos usan inteligencia artificial desde hace años.',
    ],
    'ctaTitle' => 'Del concepto a la práctica',
    'ctaBody' => 'La mejor forma de entender la IA es usarla en una tarea real. En el <a href="/skills">catálogo de skills</a> tienes instrucciones listas para tu día a día, ordenadas por <a href="/profesiones">profesión</a>.',
    'body' => <<<'HTML'
<p>La inteligencia artificial lleva años en tu móvil, en tu correo y en las recomendaciones de tu plataforma de series. Lo que cambió con ChatGPT, a finales de 2022, es que por primera vez cualquiera podía hablar con ella en lenguaje normal y pedirle trabajo de verdad. Esta guía explica qué es, cómo funciona por dentro sin una sola fórmula y, sobre todo, qué implica para alguien que quiere usarla en su trabajo.</p>

<h2 id="definicion">Una definición que se entiende</h2>

<p>La <strong>inteligencia artificial (IA)</strong> es software capaz de hacer tareas que hasta hace poco solo podía hacer una persona: entender un texto, reconocer una cara, traducir, resumir, redactar o detectar una operación sospechosa.</p>

<p>La diferencia con el software de siempre está en cómo se construye. Un programa tradicional sigue reglas que alguien ha escrito a mano: «si el importe supera 1.000 euros, pide autorización». Un sistema de IA <strong>aprende las reglas a partir de ejemplos</strong>: le enseñas millones de operaciones marcadas como fraude o no fraude y él mismo descubre los patrones que las distinguen, incluidos algunos que ninguna persona habría sabido formular.</p>

<p>Esa forma de aprender se llama <strong>aprendizaje automático</strong> (en inglés, <em>machine learning</em>), y la mayor parte de lo que hoy llamamos IA se basa en una variante concreta, las redes neuronales, que funcionan mejor cuantos más datos y más capacidad de cálculo tienen.</p>

<h2 id="como-funciona">Cómo funciona un asistente como ChatGPT</h2>

<p>ChatGPT, Claude, Gemini y compañía son <strong>modelos de lenguaje</strong>. Su funcionamiento se resume en tres pasos:</p>

<ol>
    <li><strong>Entrenamiento.</strong> El modelo lee una cantidad enorme de texto (libros, webs, código, artículos) y aprende a predecir qué palabra encaja a continuación en cada contexto. Para hacerlo bien tiene que captar gramática, datos del mundo, estilos y formas de razonar.</li>
    <li><strong>Ajuste.</strong> Después, personas le enseñan con ejemplos y valoraciones a comportarse como un asistente: seguir instrucciones, contestar con claridad, negarse a lo que no debe hacer.</li>
    <li><strong>Respuesta.</strong> Cuando le escribes, genera la respuesta pieza a pieza, eligiendo en cada paso la continuación más adecuada según tu mensaje y todo lo que habéis hablado.</li>
</ol>

<p>Dos consecuencias prácticas de esto. La primera: el modelo no «busca» la respuesta en una base de datos, la <strong>construye</strong>, y por eso puede inventar datos que suenan perfectamente creíbles. Lo explicamos en <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>. La segunda: la calidad de lo que te devuelve depende mucho de lo que le das. Cuanto más contexto y mejores instrucciones, mejor resultado; de ahí la importancia de aprender a <a href="/guias/como-escribir-prompts-efectivos">escribir buenos prompts</a>.</p>

<h2 id="tipos">Tipos de inteligencia artificial</h2>

<p>Hay muchas clasificaciones académicas, pero para uso práctico basta con esta:</p>

<ul>
    <li><strong>IA predictiva.</strong> Estima lo que va a pasar: qué cliente se dará de baja, cuánto venderás en diciembre, qué máquina va a fallar. Lleva décadas en banca, seguros y logística.</li>
    <li><strong>IA de reconocimiento.</strong> Identifica cosas en imágenes, sonido o texto: caras, matrículas, voz, el idioma de un documento, si un correo es basura.</li>
    <li><strong>IA generativa.</strong> Crea contenido nuevo: textos, imágenes, audio, vídeo o código. Es la que ha popularizado ChatGPT y la que más está cambiando el trabajo de oficina. Para imágenes, lo contamos en <a href="/guias/crear-imagenes-con-ia">crear imágenes con IA</a>.</li>
    <li><strong>Agentes de IA.</strong> Una evolución reciente: sistemas que no solo responden, sino que ejecutan tareas de varios pasos por su cuenta, como buscar, rellenar un formulario o modificar archivos. Lo explicamos en <a href="/guias/que-es-un-agente-de-ia">qué es un agente de IA</a>.</li>
</ul>

<p>Seguramente también hayas oído hablar de la «IA general», una inteligencia capaz de igualar a una persona en cualquier tarea. Hoy no existe, y los expertos no se ponen de acuerdo en si llegará ni cuándo.</p>

<h2 id="que-hace">Qué hace bien y qué hace mal</h2>

<p>La IA generativa actual es muy buena en:</p>

<ul>
    <li>Redactar, reescribir, resumir y traducir textos.</li>
    <li>Explicar un tema a tu nivel y responder a preguntas de seguimiento.</li>
    <li>Ordenar información desordenada: notas, correos, transcripciones.</li>
    <li>Escribir y revisar código, fórmulas de Excel o consultas.</li>
    <li>Dar ideas y primeros borradores en segundos.</li>
</ul>

<p>Y falla de forma previsible en:</p>

<ul>
    <li><strong>Datos exactos sin fuente</strong>: cifras, citas, referencias, fechas.</li>
    <li><strong>Información muy reciente</strong>, salvo que busque en la web.</li>
    <li><strong>Criterio y responsabilidad</strong>: no conoce a tu cliente ni responde de las decisiones.</li>
    <li><strong>Tareas que requieren acceso a tus sistemas</strong>, salvo que se lo des expresamente.</li>
</ul>

<p>Los fallos más frecuentes al usarla en la oficina están recogidos en <a href="/guias/errores-al-usar-ia-en-el-trabajo">errores al usar IA en el trabajo</a>.</p>

<h2 id="trabajo">Qué significa para tu trabajo</h2>

<p>La pregunta que más se repite es si la IA va a quitarnos el empleo. La respuesta corta: sustituye tareas antes que profesiones. Redactar el primer borrador, resumir una reunión o clasificar consultas ya se hace en minutos; decidir, negociar y responder ante un cliente sigue siendo trabajo humano. Lo analizamos con calma en <a href="/guias/va-la-ia-a-sustituir-mi-trabajo">¿va la IA a sustituir mi trabajo?</a> y, tarea por tarea, en <a href="/guias/que-tareas-de-tu-profesion-automatiza-la-ia">qué tareas de tu profesión automatiza la IA</a>.</p>

<p>Si tienes empresa, además hay obligaciones legales: el reglamento europeo de IA ya se aplica. Lo resumimos en <a href="/guias/ai-act-obligaciones-empresas">AI Act: obligaciones para empresas</a>.</p>

<h2 id="empezar">Cómo empezar</h2>

<p>No hace falta saber programar ni entender las matemáticas. Elige un asistente gratuito, por ejemplo con la guía de <a href="/guias/como-usar-chatgpt">cómo usar ChatGPT</a>, y pruébalo con una tarea que hagas cada semana. Si prefieres un camino ordenado, sigue el <a href="/guias/aprender-ia-desde-cero-plan-de-30-dias">plan de 30 días para aprender IA desde cero</a>.</p>

<p>Si solo te quedas con una idea: la inteligencia artificial no piensa, predice. Es una herramienta extraordinaria para producir borradores y ordenar información, y necesita a alguien con criterio que revise lo que entrega.</p>
HTML,
];
