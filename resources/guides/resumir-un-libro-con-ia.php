<?php

return [
    'title' => 'Resumir un libro con IA sin que se invente el argumento',
    'navTitle' => 'Resumir un libro con IA',
    'seoTitle' => 'Resumir un libro con IA (sin que se lo invente)',
    'description' => 'Cómo resumir un libro con ChatGPT, Gemini o Claude: por qué se inventa capítulos, cómo darle el texto, qué pedir para clase y cómo comprobarlo.',
    'excerpt' => 'Pedirle a ChatGPT «resúmeme este libro» funciona con los clásicos y falla con todo lo demás: mezcla personajes, inventa capítulos y da por buenos finales que no existen. Si le das el texto y le pides lo que de verdad necesitas, el resumen pasa de dudoso a útil.',
    'category' => 'Práctica',
    'published' => '2026-10-22',
    'updated' => '2026-10-22',
    'readingMinutes' => 7,
    'words' => 1118,
    'about' => 'Elaboración de resúmenes de libros, novelas y ensayos con ayuda de asistentes de inteligencia artificial para estudio y lectura',
    'related' => ['comentario-de-texto-con-ia', 'estudiar-con-ia', 'resumir-documentos-largos-con-ia', 'alucinaciones-de-la-ia', 'mapas-mentales-y-esquemas-con-ia', 'parafrasear-textos-con-ia', 'gemini-notebook-antes-notebooklm'],
    'toc' => [
        'problema' => 'Por qué se inventa los libros',
        'texto' => 'Darle el texto, no el título',
        'peticiones' => 'Qué pedir según para qué lo quieras',
        'clase' => 'Si es para un trabajo de clase',
        'comprobar' => 'Cómo comprobar el resumen',
    ],
    'faq' => [
        '¿Qué IA es mejor para resumir un libro?' => 'Para libros enteros conviene una herramienta que lea documentos largos sin perderse: Claude y Gemini aceptan textos muy extensos, y Gemini Notebook (antes NotebookLM) responde citando el fragmento exacto. ChatGPT también funciona bien si le subes el archivo. Más que el asistente, importa que trabaje sobre el texto y no de memoria.',
        '¿Puede la IA resumir un libro sin tener el texto?' => 'Solo si es muy conocido, y aun así con errores. Con clásicos y superventas suele acertar la trama general porque se ha escrito mucho sobre ellos, pero falla en detalles, en el orden de los capítulos y en libros recientes o poco conocidos, donde directamente se inventa el contenido.',
        '¿Se nota si un resumen está hecho con IA?' => 'Un resumen genérico, sí: frases vagas sobre «temas universales», ningún detalle concreto y a veces datos que no están en el libro. Los profesores lo detectan sobre todo cuando el resumen no encaja con lo que se ha trabajado en clase. Si lo usas, que sea como apoyo para escribir el tuyo.',
        '¿Puedo subir un libro en PDF a ChatGPT?' => 'Técnicamente sí, si el archivo no está protegido. Ten en cuenta que los libros tienen derechos de autor: usa ejemplares que tengas legalmente y para tu uso personal o de estudio, y no compartas el resumen como si fuera un sustituto del libro.',
        '¿Cuánto debe ocupar el resumen de un libro?' => 'Depende del uso. Para recordar de qué iba, cinco o diez líneas. Para un trabajo escolar, lo que pida el profesor, normalmente entre una y tres páginas. Una buena regla es pedir primero uno muy corto y luego ampliar las partes que necesites.',
    ],
    'ctaTitle' => 'Instrucciones para estudiar y leer mejor',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay instrucciones para resumir textos, preparar esquemas y repasar contenidos con preguntas, útiles para estudiar y también para <a href="/profesiones/rrhh">formación en empresas</a>.',
    'body' => <<<'HTML'
<p>«Resumen de un libro» es una de las búsquedas más repetidas de cada curso, y hoy casi todo el mundo prueba primero con un asistente. A veces sale bien y a veces el resultado es una mezcla convincente de lo que pasa en el libro y lo que no. La diferencia está en cómo se lo pides. Esta guía explica cómo sacar un resumen fiable con ChatGPT, Gemini o Claude, y cómo usarlo sin que te juegue una mala pasada en clase.</p>

<h2 id="problema">Por qué se inventa los libros</h2>

<p>Cuando pides «resúmeme <em>Nada</em> de Carmen Laforet» sin darle el texto, el asistente no lee el libro: reconstruye lo que recuerda de todo lo que se ha escrito sobre él. Con un clásico muy comentado, la trama general suele salir bien. Pero en cuanto bajas al detalle (qué pasa en el capítulo 7, cómo se llama la amiga de la protagonista, cómo termina) empieza a rellenar huecos con lo que le parece probable.</p>

<p>Con libros recientes, poco conocidos o de lectura obligatoria en un instituto concreto, el problema es peor: puede inventar un argumento completo con total seguridad. Es el fenómeno que se explica en <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>, y con los libros es especialmente traicionero porque el resultado suena verosímil.</p>

<h2 id="texto">Darle el texto, no el título</h2>

<p>La solución es que trabaje sobre el libro, no de memoria. Tienes varias opciones:</p>

<ul>
    <li><strong>Subir el archivo</strong> (PDF o ePub sin protección) a ChatGPT, Claude o Gemini. Los tres aceptan documentos largos; Claude y Gemini admiten textos especialmente extensos en una sola conversación.</li>
    <li><strong>Usar Gemini Notebook</strong> (antes NotebookLM): subes el libro y cada respuesta enlaza al fragmento del que sale. Es la forma más cómoda de comprobar lo que te dice; está explicado en <a href="/guias/gemini-notebook-antes-notebooklm">la guía de Gemini Notebook</a>.</li>
    <li><strong>Ir por capítulos</strong> si el libro es muy largo o la herramienta se pierde: pega un capítulo, pide su resumen, y al final pide uno general a partir de los resúmenes parciales. Las técnicas para textos extensos están en <a href="/guias/resumir-documentos-largos-con-ia">resumir documentos largos con IA</a>.</li>
    <li><strong>Tus propios apuntes</strong>: si ya lo has leído, dale tus notas o subrayados y pide que los ordene. Es lo más fiable de todo, porque la información sale de ti.</li>
</ul>

<p>Un apunte sobre derechos: usa ejemplares que tengas legalmente y para tu estudio. Subir un libro a un asistente para tu uso personal no es lo mismo que publicar el resumen como sustituto del libro.</p>

<h2 id="peticiones">Qué pedir según para qué lo quieras</h2>

<p>«Haz un resumen» es demasiado vago. Estas peticiones funcionan mejor, siempre con el texto adjunto:</p>

<ul>
    <li><strong>Para recordar de qué iba</strong>: «Resume este libro en diez líneas: planteamiento, nudo y desenlace. Solo lo que esté en el texto.»</li>
    <li><strong>Por capítulos</strong>: «Haz un resumen de dos o tres frases por capítulo, con el número de capítulo delante.»</li>
    <li><strong>Personajes</strong>: «Lista los personajes principales, qué papel tienen y cómo cambian a lo largo del libro, con un ejemplo de cada uno.»</li>
    <li><strong>Temas</strong>: «¿Cuáles son los tres temas principales? Para cada uno, cita un pasaje concreto que lo muestre.»</li>
    <li><strong>Ensayo o libro de no ficción</strong>: «Resume la tesis del autor, los argumentos principales en orden y las conclusiones. Separa lo que afirma el autor de los datos que aporta.»</li>
</ul>

<p>Pedir citas o referencias a capítulos es la mejor defensa contra los inventos: si no puede señalar dónde lo dice, probablemente no lo dice. Y si lo que quieres es repasar visualmente, puedes convertir el resumen en un esquema, como se cuenta en <a href="/guias/mapas-mentales-y-esquemas-con-ia">mapas mentales y esquemas con IA</a>.</p>

<h2 id="clase">Si es para un trabajo de clase</h2>

<p>Aquí conviene ser honesto con uno mismo. Un resumen copiado de la IA se detecta con facilidad: es genérico, no conecta con lo que se ha visto en clase y a veces incluye detalles que no están en el libro, que es lo primero que nota un profesor que sí lo ha leído. Además, te quedas sin lo que el trabajo pretendía: haber entendido el libro.</p>

<p>Usos que sí ayudan:</p>

<ul>
    <li>Leer el libro y pedir a la IA preguntas sobre cada capítulo para comprobar que lo has entendido.</li>
    <li>Escribir tu resumen y pedirle que señale qué te has dejado o qué está mal ordenado.</li>
    <li>Preguntarle por el contexto: la época, el autor, el movimiento literario.</li>
</ul>

<p>Si el texto final tiene que ser tuyo, reescríbelo con tus palabras; la diferencia entre reformular y copiar está explicada en <a href="/guias/parafrasear-textos-con-ia">parafrasear textos con IA</a>. Y para sacarle partido a la IA durante todo el curso, mira <a href="/guias/estudiar-con-ia">estudiar con IA</a>.</p>

<h2 id="comprobar">Cómo comprobar el resumen</h2>

<p>Antes de dar un resumen por bueno, haz estas tres comprobaciones rápidas:</p>

<ol>
    <li><strong>Nombres</strong>: busca en el libro dos o tres nombres de personajes o lugares que aparecen en el resumen.</li>
    <li><strong>El final</strong>: es lo que más se inventa cuando trabaja de memoria. Lee las últimas páginas del libro y compáralo.</li>
    <li><strong>Una cita al azar</strong>: si te da una frase entrecomillada, búscala en el texto. Si no aparece, desconfía del resto.</li>
</ol>

<p>Cinco minutos de comprobación bastan para separar un buen resumen de uno que te dejaría en evidencia.</p>
HTML,
];
