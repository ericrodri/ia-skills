<?php

return [
    'title' => 'Cómo estudiar con IA sin que piense por ti',
    'navTitle' => 'Estudiar con IA',
    'seoTitle' => 'Cómo estudiar con IA: métodos y prompts',
    'description' => 'Usa ChatGPT, Claude o Gemini para entender, repasar y prepararte exámenes de verdad: técnicas que funcionan, prompts listos y los usos que te perjudican.',
    'excerpt' => 'La IA puede ser el mejor profesor particular que has tenido o la forma más rápida de llegar al examen sin saber nada. La diferencia no está en la herramienta, sino en si le pides respuestas o le pides que te haga pensar.',
    'category' => 'Práctica',
    'published' => '2026-09-28',
    'updated' => '2026-09-28',
    'readingMinutes' => 7,
    'words' => 1226,
    'about' => 'Uso de la inteligencia artificial para estudiar',
    'related' => ['resolver-problemas-de-matematicas-con-ia', 'aprender-ingles-con-ia', 'tfg-con-ia', 'ia-para-profesores', 'resumir-documentos-largos-con-ia', 'alucinaciones-de-la-ia', 'como-escribir-prompts-efectivos', 'gemini-notebook-antes-notebooklm'],
    'toc' => [
        'trampa' => 'La trampa de la respuesta rápida',
        'tecnicas' => 'Cuatro técnicas que funcionan',
        'prompts' => 'Prompts para cada momento',
        'apuntes' => 'Estudiar con tus propios apuntes',
        'errores' => 'Cuándo no fiarse',
        'normas' => 'Lo que está permitido y lo que no',
        'rutina' => 'Una rutina de estudio con IA',
    ],
    'faq' => [
        '¿Qué IA es mejor para estudiar?' => 'Cualquiera de los asistentes generalistas sirve: ChatGPT, Claude, Gemini o Copilot. Más que la marca importa poder subir tus apuntes y que responda basándose en ellos. Para trabajar solo con tus documentos, herramientas como el cuaderno de Gemini (antes NotebookLM) reducen mucho las invenciones.',
        '¿Es malo usar ChatGPT para hacer los deberes?' => 'Si le pides la respuesta y la copias, sí: el ejercicio existe para que practiques, y te saltas justo esa parte. Si lo usas para que te explique el paso en el que te atascas o para corregir lo que ya has hecho, es una ayuda excelente. La prueba es sencilla: ¿podrías repetir el ejercicio sin la IA delante?',
        '¿Se dan cuenta los profesores si uso IA?' => 'Muchas veces sí, aunque no por los detectores, que fallan a menudo. Se nota porque el texto no se parece a cómo escribes, porque no sabes explicar lo que has entregado o porque incluye datos que no se vieron en clase. Lo más seguro es preguntar qué uso está permitido y declararlo.',
        '¿Puede la IA hacerme un resumen del temario?' => 'Sí, pero leer un resumen hecho por otro enseña poco. Es más útil hacer tú el resumen y pedirle a la IA que lo compare con el texto original y te diga qué has dejado fuera o qué has entendido mal.',
        '¿Sirve la IA para preparar exámenes de oposiciones?' => 'Sirve para generar preguntas de repaso, explicarte un tema de otra forma y practicar el desarrollo de temas. Con la legislación hay que ir con cuidado: los modelos confunden versiones de una norma y citan artículos que no existen. Comprueba siempre el texto en el boletín oficial.',
    ],
    'ctaTitle' => 'Skills de aprendizaje y formación',
    'ctaBody' => 'Planes de estudio, aprendizaje de idiomas, tutorías o educación STEM: busca «aprendizaje» o «educación» en el <a href="/skills">catálogo de skills</a> para encontrar instrucciones ya probadas.',
    'body' => <<<'HTML'
<p>Aprender cuesta. Esa frase, que suena a abuela, es lo que dice casi toda la investigación sobre el estudio: recordamos lo que nos obliga a esforzarnos, no lo que leemos cómodamente. La IA puede quitarte ese esfuerzo o ponerlo en el sitio justo. Esta guía va de lo segundo.</p>

<h2 id="trampa">La trampa de la respuesta rápida</h2>

<p>Pedirle a un asistente que resuelva un ejercicio da una sensación muy convincente de haberlo entendido. Lees la solución, cada paso tiene sentido y pasas al siguiente. El problema aparece en el examen, cuando nadie te da el primer paso. Entender una solución y ser capaz de producirla son dos cosas distintas.</p>

<p>La regla práctica: <strong>usa la IA después de intentarlo, no en lugar de intentarlo</strong>. Primero haces tú el ejercicio, el esquema o la redacción, aunque salga mal. Luego le pides que te ayude donde te has atascado.</p>

<h2 id="tecnicas">Cuatro técnicas que funcionan</h2>

<figure>
<table>
    <thead>
        <tr><th>Técnica</th><th>Qué es</th><th>Cómo ayuda la IA</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Recuperación</strong></td><td>Intentar recordar sin mirar</td><td>Te hace preguntas sobre el tema y corrige tus respuestas</td></tr>
        <tr><td><strong>Explicar con tus palabras</strong></td><td>Contar el tema como si se lo enseñaras a alguien</td><td>Hace de alumno y te señala lo que has explicado mal</td></tr>
        <tr><td><strong>Repaso espaciado</strong></td><td>Volver al tema en días distintos</td><td>Te prepara tarjetas de repaso a partir de tus apuntes</td></tr>
        <tr><td><strong>Ejemplos variados</strong></td><td>Ver el mismo concepto en contextos distintos</td><td>Genera ejercicios nuevos del mismo tipo</td></tr>
    </tbody>
</table>
</figure>

<p>Las cuatro tienen algo en común: eres tú quien produce. La IA pregunta, corrige y propone; no te da el resultado hecho.</p>

<h2 id="prompts">Prompts para cada momento</h2>

<p><strong>Cuando no entiendes algo</strong></p>
<pre><code>Estoy en 1.º de Bachillerato y no entiendo qué es una derivada.
Explícamelo con un ejemplo cotidiano, sin fórmulas al principio.
Después hazme una pregunta para comprobar si lo he entendido. No
sigas hasta que responda.</code></pre>

<p><strong>Cuando te atascas en un ejercicio</strong></p>
<pre><code>Este es el ejercicio y esto es lo que he hecho yo: [tu intento].
No me des la solución. Dime solo en qué paso me he equivocado y
dame una pista para seguir.</code></pre>

<p><strong>Para repasar antes de un examen</strong></p>
<pre><code>Hazme 10 preguntas sobre este tema, de una en una, de más fácil a más
difícil. Espera mi respuesta antes de pasar a la siguiente. Al final,
dime qué partes tengo que repasar.</code></pre>

<p><strong>Para comprobar si sabes explicarlo</strong></p>
<pre><code>Voy a explicarte la fotosíntesis como si tú tuvieras 12 años. Cuando
termine, dime qué he explicado mal, qué me he dejado y qué pregunta
me haría un profesor para pillarme.</code></pre>

<p><strong>Para escribir mejor, no para que escriba por ti</strong></p>
<pre><code>Te paso mi redacción. No la reescribas. Señala las tres frases menos
claras y explícame por qué lo son, para que las corrija yo.</code></pre>

<p>La frase clave en casi todos es «no me des la solución» o «espera mi respuesta». Sin ella, el modelo tiende a resolverlo todo de golpe. Hay más ideas sobre cómo pedir las cosas en la guía de <a href="/guias/como-escribir-prompts-efectivos">prompts efectivos</a>.</p>

<h2 id="apuntes">Estudiar con tus propios apuntes</h2>

<p>La IA responde mejor, y se equivoca menos, cuando trabaja sobre un texto concreto en lugar de sobre lo que «sabe». Sube tus apuntes, el tema del libro o las diapositivas del profesor y pídele que responda solo a partir de ellos. Así las preguntas de repaso se ajustan a lo que entra en el examen y no a lo que el modelo cree que debería entrar.</p>

<p>Para eso funcionan especialmente bien las herramientas pensadas para trabajar con documentos, como el cuaderno de Gemini, que se explica en <a href="/guias/gemini-notebook-antes-notebooklm">Gemini Notebook</a>. Y si el material es muy largo, conviene leer antes <a href="/guias/resumir-documentos-largos-con-ia">cómo resumir documentos largos</a>: con textos extensos los modelos se saltan partes sin avisar.</p>

<h2 id="errores">Cuándo no fiarse</h2>

<ul>
    <li><strong>Datos concretos</strong>: fechas, nombres, cifras, citas. Los modelos los inventan con total seguridad. La guía sobre <a href="/guias/alucinaciones-de-la-ia">alucinaciones</a> explica por qué pasa.</li>
    <li><strong>Cálculos largos</strong>: pueden fallar en una operación intermedia y llegar a un resultado incorrecto muy bien explicado. Cómo comprobarlos está en <a href="/guias/resolver-problemas-de-matematicas-con-ia">resolver problemas de matemáticas con IA</a>.</li>
    <li><strong>Legislación y normas</strong>: mezclan versiones y citan artículos que no existen.</li>
    <li><strong>Lo que dijo tu profesor</strong>: la IA no estuvo en clase. Si el profesor enfoca un tema de una forma concreta, manda lo que dijo él.</li>
</ul>

<p>Ante la duda, contrasta con el libro o los apuntes. Si la IA y el libro no coinciden, lo más probable es que se equivoque la IA.</p>

<h2 id="normas">Lo que está permitido y lo que no</h2>

<p>Cada centro y cada profesor pone sus reglas, y cada vez más lo hacen por escrito. Hay tres situaciones típicas:</p>

<ul>
    <li><strong>Prohibido</strong>: la tarea evalúa justo lo que la IA haría por ti. Usarla es copiar.</li>
    <li><strong>Permitido para ayudarte</strong>: buscar ideas, entender un concepto, revisar la ortografía. El trabajo tiene que ser tuyo.</li>
    <li><strong>Permitido y declarado</strong>: puedes usarla, pero tienes que explicar cómo. Es lo habitual en la universidad y en los trabajos de fin de grado, como se detalla en la guía del <a href="/guias/tfg-con-ia">TFG con IA</a>.</li>
</ul>

<p>Si no está claro, pregunta. Es mucho mejor que tener que explicar después por qué tu trabajo se parece al de otros tres compañeros.</p>

<h2 id="rutina">Una rutina de estudio con IA</h2>

<ol>
    <li><strong>Lee el tema tú</strong> y subraya lo que no entiendas.</li>
    <li><strong>Pregunta a la IA solo por lo subrayado</strong>, pidiéndole ejemplos y una pregunta de comprobación.</li>
    <li><strong>Haz tu esquema o resumen</strong> sin ayuda.</li>
    <li><strong>Pídele que lo compare con el tema</strong> y te diga qué falta.</li>
    <li><strong>Al día siguiente, deja que te haga preguntas</strong> sin mirar los apuntes.</li>
    <li><strong>Repite el paso anterior</strong> unos días después, centrándote en lo que fallaste.</li>
</ol>

<p>Es más lento que pedirle un resumen y leerlo. También es la única de las dos formas que funciona el día del examen. Con los idiomas pasa lo mismo, y ahí el modo de voz cambia las reglas: tienes un método completo en <a href="/guias/aprender-ingles-con-ia">aprender inglés con IA</a>.</p>
HTML,
];
