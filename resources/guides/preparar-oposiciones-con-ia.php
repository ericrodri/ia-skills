<?php

return [
    'title' => 'Preparar oposiciones con IA: temario, test y supuestos prácticos',
    'navTitle' => 'Preparar oposiciones con IA',
    'seoTitle' => 'Preparar oposiciones con IA: test y temario',
    'description' => 'Cómo usar ChatGPT, Gemini o Claude para estudiar el temario, generar test, ensayar supuestos y el oral sin fiarte de leyes inventadas por la IA.',
    'excerpt' => 'La IA no va a aprobar la oposición por ti, pero puede ser un preparador incansable que te pregunta el tema a las once de la noche. La condición es una: que trabaje siempre sobre el texto oficial y no sobre lo que cree recordar.',
    'category' => 'Práctica',
    'published' => '2026-10-13',
    'updated' => '2026-10-13',
    'readingMinutes' => 7,
    'words' => 1165,
    'about' => 'Preparación de oposiciones con asistentes de inteligencia artificial',
    'related' => ['estudiar-con-ia', 'alucinaciones-de-la-ia', 'gemini-notebook-antes-notebooklm', 'mapas-mentales-y-esquemas-con-ia', 'resumir-documentos-largos-con-ia', 'pasar-audio-a-texto-con-ia'],
    'toc' => [
        'regla' => 'La regla de oro: el BOE manda',
        'temario' => 'Montar el temario con la IA',
        'test' => 'Generar test como los del examen',
        'desarrollo' => 'Temas de desarrollo y supuestos prácticos',
        'oral' => 'Ensayar el oral',
        'plan' => 'Planificar meses de estudio',
        'limites' => 'Lo que no debes delegar',
    ],
    'faq' => [
        '¿Qué IA es mejor para preparar oposiciones?' => 'Sirve cualquiera de las grandes (ChatGPT, Gemini, Claude o Copilot) siempre que le subas tus documentos. Las que permiten trabajar sobre un conjunto fijo de PDF, como los cuadernos de Gemini o los proyectos de ChatGPT y Claude, son las más cómodas, porque responden con tu temario y no con lo que recuerdan de internet.',
        '¿Puedo fiarme de lo que dice la IA sobre una ley?' => 'No sin comprobarlo. Los modelos mezclan versiones antiguas y nuevas de una norma, inventan números de artículo y confunden plazos. Úsala para explicar y preguntar, pero contrasta cada dato con el texto consolidado del BOE o del boletín autonómico.',
        '¿Puede la IA crear test de oposiciones?' => 'Sí, y es uno de sus mejores usos. Pídele preguntas tipo test con cuatro opciones a partir de un tema que tú le subas, con la respuesta correcta y el artículo exacto que la justifica. Así puedes comprobar cada pregunta y descartar las que estén mal planteadas.',
        '¿Sirve la IA para corregir un supuesto práctico?' => 'Sirve como primera corrección: detecta si te falta una norma aplicable, si la estructura es confusa o si no respondes a lo que se pregunta. No sustituye a un preparador que conozca los criterios del tribunal de tu convocatoria.',
        '¿Es gratis preparar oposiciones con IA?' => 'Los planes gratuitos bastan para explicaciones y test cortos. Si vas a subir temarios completos cada día, los límites de uso y de tamaño de archivo se notan, y un plan de pago (unos 20 euros al mes) suele salir más barato que cualquier academia.',
    ],
    'ctaTitle' => 'Prompts para estudiar mejor',
    'ctaBody' => 'Generar preguntas, resumir normas o explicar un concepto difícil son tareas que se repiten cada día. En el <a href="/skills">catálogo de skills</a> encontrarás instrucciones listas para estudiar, resumir documentos largos y preparar exámenes.',
    'body' => <<<'HTML'
<p>Quien prepara una oposición pasa meses con un temario enorme, muchas veces sin nadie que le pregunte la lección. Un asistente de IA puede cubrir buena parte de ese hueco: te examina, te explica el artículo que no entiendes y te corrige un supuesto a cualquier hora. Pero en oposiciones hay un riesgo que no existe en otras materias: la respuesta tiene que ser exacta, al número de artículo y al día de plazo. Esta guía explica cómo aprovechar la IA sin que te enseñe una ley que no existe.</p>

<h2 id="regla">La regla de oro: el BOE manda</h2>

<p>Un modelo de lenguaje no consulta el BOE cuando le preguntas; responde con lo que aprendió durante su entrenamiento. Eso significa que puede:</p>

<ul>
    <li>Citarte la redacción anterior a la última reforma.</li>
    <li>Inventar un número de artículo que suena razonable.</li>
    <li>Cambiar un plazo de diez días por quince con total seguridad.</li>
</ul>

<p>Es el fenómeno que explicamos en <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>, y en un examen tipo test cuesta puntos. La solución es sencilla: <strong>trabaja siempre sobre tus documentos</strong>. Descarga el texto consolidado de cada norma del BOE (o del boletín de tu comunidad) y tus temas en PDF, súbelos al asistente y pídele que responda solo con ellos:</p>

<blockquote>«Responde únicamente con los documentos que te he subido. Cita siempre el artículo exacto. Si algo no aparece en ellos, dime que no está en lugar de suponerlo.»</blockquote>

<h2 id="temario">Montar el temario con la IA</h2>

<p>Lo más cómodo es crear un espacio fijo con tu material: un cuaderno en Gemini (lo explicamos en <a href="/guias/gemini-notebook-antes-notebooklm">Gemini Notebook</a>), un proyecto en ChatGPT o en Claude. Subes la legislación y los temas una vez y todas las conversaciones parten de ahí.</p>

<p>Con el material cargado, pídele trabajo de estudio, no de sustitución:</p>

<ul>
    <li><strong>Esquemas</strong> de cada tema con la estructura de la ley; si estudias mejor de forma visual, sigue con <a href="/guias/mapas-mentales-y-esquemas-con-ia">mapas mentales con IA</a>.</li>
    <li><strong>Tablas de plazos, órganos y porcentajes</strong>, que son el material clásico de las preguntas trampa.</li>
    <li><strong>Comparaciones</strong> entre figuras parecidas: «diferencias entre recurso de alzada y de reposición, en una tabla».</li>
    <li><strong>Explicaciones con ejemplos</strong> del artículo que se te resiste.</li>
</ul>

<p>Si tu temario es muy extenso, divídelo en bloques; en <a href="/guias/resumir-documentos-largos-con-ia">resumir documentos largos</a> explicamos por qué los asistentes pierden detalle cuando les das demasiado de golpe.</p>

<h2 id="test">Generar test como los del examen</h2>

<p>Los test son la prueba más común y la IA los genera muy bien si se lo pides con precisión:</p>

<blockquote>«A partir del tema 7 que te he subido, crea 15 preguntas tipo test con cuatro opciones y una sola correcta, al estilo de las oposiciones de auxiliar administrativo del Estado. Incluye distractores que se parezcan a la respuesta correcta (plazos cercanos, órganos parecidos). No me des las soluciones hasta que te conteste.»</blockquote>

<p>Después, pide la corrección con el artículo que justifica cada respuesta y compruébalo tú en el texto. Las preguntas que la IA no pueda justificar con un artículo concreto, descártalas. Otro truco útil: pega exámenes de convocatorias anteriores y pide «diez preguntas nuevas con el mismo estilo y dificultad».</p>

<h2 id="desarrollo">Temas de desarrollo y supuestos prácticos</h2>

<p>Para los exámenes escritos, la IA funciona como un corrector paciente. Escribe tú el tema o el supuesto, en el tiempo real del examen, y luego pégalo:</p>

<blockquote>«Actúa como miembro de un tribunal de oposición. Evalúa mi respuesta a este supuesto práctico: ¿identifico todas las normas aplicables?, ¿la estructura es clara?, ¿respondo a todas las preguntas? Señala los errores, pero no reescribas el texto.»</blockquote>

<p>Pedir que no lo reescriba es importante: el objetivo es que aprendas a redactarlo tú. También puedes pedirle que invente supuestos nuevos a partir de casos reales de tu ámbito, que es justo lo que más escasea en los manuales.</p>

<h2 id="oral">Ensayar el oral</h2>

<p>En las oposiciones con exposición oral (docentes, cuerpos jurídicos, técnicos superiores) puedes usar el modo de voz de ChatGPT o Gemini como tribunal: expón el tema y pide que te haga preguntas de seguimiento. Si prefieres analizarlo después, grábate y transcribe la exposición con lo que explicamos en <a href="/guias/pasar-audio-a-texto-con-ia">pasar audio a texto</a>; luego pide a la IA que compare lo que dijiste con el esquema del tema y te diga qué te dejaste.</p>

<h2 id="plan">Planificar meses de estudio</h2>

<p>Dale el número de temas, la fecha aproximada del examen y las horas reales que tienes cada día, y pide un calendario con vueltas de repaso:</p>

<blockquote>«Tengo 60 temas, examen en mayo y 3 horas al día de lunes a viernes. Haz un plan con una primera vuelta, dos vueltas de repaso y una semana de simulacros al final. Deja un día libre a la semana para recuperar retrasos.»</blockquote>

<p>Revísalo cada mes con lo que has avanzado de verdad. Las técnicas de repaso espaciado y autoevaluación que funcionan están en <a href="/guias/estudiar-con-ia">estudiar con IA</a>.</p>

<h2 id="limites">Lo que no debes delegar</h2>

<ul>
    <li><strong>La comprobación de la norma</strong>: cada dato que memorices tiene que salir del boletín oficial, no del chat.</li>
    <li><strong>La última hora de la convocatoria</strong>: bases, temario actualizado y fechas se consultan en la publicación oficial.</li>
    <li><strong>La memorización</strong>: leer resúmenes de la IA da sensación de dominio, pero solo responder sin mirar demuestra que lo sabes.</li>
    <li><strong>Tus datos personales</strong>: no hace falta subir tu DNI ni la solicitud para estudiar.</li>
</ul>

<p>Bien usada, la IA es un compañero de estudio que nunca se cansa de preguntarte. Mal usada, es una fuente de errores que se aprenden de memoria. La diferencia está en que trabaje siempre sobre el texto oficial.</p>
HTML,
];
