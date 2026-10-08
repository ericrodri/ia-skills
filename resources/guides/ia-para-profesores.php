<?php

return [
    'title' => 'IA para profesores: qué delegar, qué no y prompts para el aula',
    'navTitle' => 'IA para profesores',
    'seoTitle' => 'IA para profesores: usos y prompts para el aula',
    'description' => 'Cómo usar la IA como docente: preparar clases, adaptar materiales, crear rúbricas y dar feedback sin perder el criterio. Con prompts listos y límites claros.',
    'excerpt' => 'La mayoría de docentes ya usa la IA para algo, casi siempre sin formación y a escondidas. Esta guía ordena dónde ahorra horas de verdad, dónde conviene no delegar nada y cómo pedirle las cosas para que el resultado sirva en una clase real.',
    'category' => 'Práctica',
    'published' => '2026-09-28',
    'updated' => '2026-09-28',
    'readingMinutes' => 8,
    'words' => 1359,
    'about' => 'Uso de la inteligencia artificial por el profesorado',
    'related' => ['resolver-problemas-de-matematicas-con-ia', 'estudiar-con-ia', 'tfg-con-ia', 'se-nota-si-un-texto-lo-escribe-una-ia', 'como-escribir-prompts-efectivos', 'usar-ia-sin-filtrar-datos-de-clientes', 'alucinaciones-de-la-ia'],
    'toc' => [
        'donde-ahorra' => 'Dónde ahorra tiempo de verdad',
        'que-no' => 'Lo que no conviene delegar',
        'contexto' => 'El contexto que la IA no tiene',
        'prompts' => 'Cinco prompts para el día a día',
        'alumnos' => 'Datos de alumnos: la línea roja',
        'trabajos' => 'Qué hacer con los trabajos hechos con IA',
        'empezar' => 'Por dónde empezar esta semana',
    ],
    'faq' => [
        '¿Qué IA es mejor para profesores?' => 'Para preparar materiales sirve cualquier asistente generalista (ChatGPT, Claude, Gemini o Copilot). Si tu centro trabaja con Google Workspace o Microsoft 365, usa el asistente incluido en esa licencia: suele ser la opción que el centro permite y la que menos problemas da con los datos. Las plataformas específicas para docentes aportan plantillas, pero debajo usan los mismos modelos.',
        '¿Puedo corregir exámenes con IA?' => 'Puedes usarla para detectar errores frecuentes, proponer comentarios o comprobar que aplicas la rúbrica igual a todos. La nota la tienes que poner tú: el modelo se equivoca con respuestas poco habituales, no conoce al alumno y no responde ante una reclamación. Además, subir exámenes con nombre a una herramienta no autorizada por el centro es un problema de protección de datos.',
        '¿Los detectores de IA sirven para saber si un alumno ha copiado?' => 'No como prueba. Fallan en los dos sentidos: marcan textos humanos como generados, sobre todo de alumnos que escriben en una segunda lengua, y dejan pasar textos generados y retocados. Úsalos, como mucho, como un aviso para hablar con el alumno, nunca como base de una sanción.',
        '¿Es legal usar ChatGPT en clase con menores?' => 'Depende de la herramienta y de la edad. Muchas exigen una edad mínima o el consentimiento de las familias, y el centro es responsable de las herramientas que impone a los alumnos. Antes de pedir a una clase que use una IA, consulta la política del centro y de la administración educativa, y prioriza las que el centro ya tiene contratadas.',
        '¿La IA va a sustituir a los profesores?' => 'Puede hacer parte del trabajo de preparación y dar explicaciones individuales a cualquier hora, pero no sustituye lo que hace que un alumno aprenda: alguien que le conoce, le exige y le acompaña. Lo que sí cambia es qué tareas ocupan tu tiempo.',
    ],
    'ctaTitle' => 'Skills para el trabajo docente',
    'ctaBody' => 'Diseño instruccional, evaluación, tutorización o formación corporativa: busca «educación» en el <a href="/skills">catálogo de skills</a> o entra en <a href="/profesiones/rrhh">RR. HH.</a> y <a href="/profesiones/freelancers">Freelancers</a>, donde están los de formación.',
    'body' => <<<'HTML'
<p>Un docente dedica una parte enorme de su semana a tareas que no son dar clase: preparar materiales, adaptar actividades para alumnos con necesidades distintas, redactar comunicaciones, corregir. La IA ayuda mucho en esa parte, y muy poco en la otra. El error más común no es usarla demasiado, sino usarla en el sitio equivocado: pedirle que corrija y dejarle a uno la preparación, cuando lo sensato es justo al revés.</p>

<h2 id="donde-ahorra">Dónde ahorra tiempo de verdad</h2>

<figure>
<table>
    <thead>
        <tr><th>Tarea</th><th>Qué hace bien la IA</th><th>Qué te toca a ti</th></tr>
    </thead>
    <tbody>
        <tr><td>Adaptar un texto</td><td>Reescribirlo en tres niveles de lectura, con glosario</td><td>Comprobar que no ha cambiado el contenido</td></tr>
        <tr><td>Crear ejercicios</td><td>Generar variantes de un mismo tipo de problema</td><td>Resolverlos: siempre sale alguno mal planteado</td></tr>
        <tr><td>Rúbricas</td><td>Dar una primera versión con niveles y descriptores</td><td>Ajustarla a lo que de verdad vas a evaluar</td></tr>
        <tr><td>Situaciones de aprendizaje</td><td>Proponer ideas, contextos y secuencias</td><td>Elegir la que encaja con tu grupo</td></tr>
        <tr><td>Comunicaciones</td><td>Redactar correos a familias con el tono adecuado</td><td>Los datos concretos y el envío</td></tr>
        <tr><td>Preguntas de repaso</td><td>Sacar preguntas de un tema o de tus propios apuntes</td><td>Descartar las que no se dieron en clase</td></tr>
    </tbody>
</table>
</figure>

<p>La regla que se repite: la IA produce un primer borrador en segundos y tú lo conviertes en algo usable en diez minutos. Si el borrador te obliga a rehacerlo entero, el problema suele estar en lo que le pediste, no en la herramienta.</p>

<h2 id="que-no">Lo que no conviene delegar</h2>

<ul>
    <li><strong>La nota.</strong> Puede ayudarte a aplicar una rúbrica, pero la calificación tiene que ser tuya y defendible ante una reclamación.</li>
    <li><strong>El dato sin comprobar.</strong> Los modelos inventan fechas, autores y citas con total seguridad. En materias de contenido, una ficha con un error se multiplica por treinta alumnos. La guía sobre <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a> explica cómo detectarlas.</li>
    <li><strong>Los informes sobre un alumno.</strong> Un informe de evaluación o una comunicación delicada con una familia necesita a alguien que conozca al alumno. La IA puede ayudarte con la redacción, no con el juicio.</li>
    <li><strong>La programación entera.</strong> Una programación didáctica generada de golpe suena bien y no se parece a tu centro. Úsala por partes.</li>
</ul>

<h2 id="contexto">El contexto que la IA no tiene</h2>

<p>La diferencia entre una actividad genérica y una que funciona en tu aula está en el contexto. Antes de pedir nada, dale al modelo lo que sabría un compañero que te sustituye un día:</p>

<ul>
    <li><strong>Curso y edad</strong>, y el nivel real del grupo, no el oficial.</li>
    <li><strong>Qué se ha visto ya</strong> y qué vocabulario conocen.</li>
    <li><strong>Tiempo disponible</strong>: una sesión de 50 minutos no es un proyecto de tres semanas.</li>
    <li><strong>Necesidades concretas</strong>: alumnos con dificultades de lectura, recién llegados que no dominan el idioma, altas capacidades.</li>
    <li><strong>Formato de salida</strong>: una tabla, una ficha para imprimir, diez preguntas tipo test con la respuesta marcada.</li>
</ul>

<p>Si repites el mismo contexto cada semana, guárdalo en un proyecto o en unas instrucciones fijas. Cómo hacerlo en cada herramienta está en la guía de <a href="/guias/gpts-proyectos-y-skills">GPTs, proyectos y skills</a>.</p>

<h2 id="prompts">Cinco prompts para el día a día</h2>

<p><strong>1. Adaptar un texto a tres niveles</strong></p>
<pre><code>Te paso un texto de Ciencias para 2.º de ESO. Reescríbelo en tres
versiones: nivel inicial (frases cortas, vocabulario básico), nivel
medio y nivel avanzado. No cambies ningún dato. Añade al final de cada
versión un glosario de cinco términos.</code></pre>

<p><strong>2. Ejercicios con variantes</strong></p>
<pre><code>Crea 8 problemas de proporcionalidad para 1.º de ESO, en contextos
cotidianos (compras, recetas, deporte). Dificultad creciente. Da la
solución paso a paso de cada uno en una sección aparte.</code></pre>

<p><strong>3. Rúbrica</strong></p>
<pre><code>Diseña una rúbrica para una exposición oral de 5 minutos en 4.º de
ESO. Criterios: contenido, estructura, expresión oral y uso del apoyo
visual. Cuatro niveles por criterio, con descriptores observables, sin
adjetivos vagos como "adecuado".</code></pre>

<p><strong>4. Feedback a partir de tus notas</strong></p>
<pre><code>Estos son mis apuntes rápidos sobre la redacción de un alumno: [notas].
Conviértelos en un comentario de 80 palabras dirigido al alumno: empieza
por lo que ha hecho bien, señala dos cosas concretas que mejorar y
termina con una tarea para la próxima vez. Tono cercano.</code></pre>

<p><strong>5. Detectar errores frecuentes</strong></p>
<pre><code>Te paso 20 respuestas anónimas a la misma pregunta. Agrúpalas por el
tipo de error que cometen y dime qué concepto parece no haberse
entendido. No pongas notas.</code></pre>

<p>Hay muchas más plantillas en la guía de <a href="/guias/como-escribir-prompts-efectivos">cómo escribir prompts efectivos</a>; el método es el mismo para cualquier materia.</p>

<h2 id="alumnos">Datos de alumnos: la línea roja</h2>

<p>Los datos de alumnos, y más si son menores, son de los más protegidos que existen. Antes de pegar nada en una herramienta:</p>

<ul>
    <li><strong>Quita nombres y cualquier dato identificativo.</strong> Para detectar errores frecuentes no hace falta saber de quién es cada respuesta.</li>
    <li><strong>Nunca subas informes psicopedagógicos, diagnósticos ni datos de salud</strong> a una cuenta personal.</li>
    <li><strong>Usa las herramientas que el centro tiene contratadas</strong>, que suelen venir con condiciones que excluyen el uso de los datos para entrenar.</li>
</ul>

<p>Los mismos principios que se aplican a los datos de clientes en una empresa sirven aquí; están resumidos en <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">cómo usar la IA sin filtrar datos</a>.</p>

<h2 id="trabajos">Qué hacer con los trabajos hechos con IA</h2>

<p>Prohibir la IA en los trabajos para casa no funciona, y los detectores tampoco: fallan con suficiente frecuencia como para que no puedan sostener una sanción, como se explica en <a href="/guias/se-nota-si-un-texto-lo-escribe-una-ia">¿se nota si un texto lo escribe una IA?</a>. Lo que sí funciona es cambiar la tarea:</p>

<ul>
    <li><strong>Evalúa el proceso</strong>, no solo el resultado: esquemas, borradores, una breve defensa oral.</li>
    <li><strong>Pide cosas que la IA no sabe</strong>: lo que se dijo en clase, una experiencia del alumno, datos de su entorno.</li>
    <li><strong>Deja claro qué uso está permitido</strong> en cada tarea: ninguno, solo para buscar ideas, o libre pero declarado.</li>
    <li><strong>Enseña a usarla bien.</strong> Tus alumnos van a usarla igual; mejor que aprendan a preguntarle para entender que para copiar. La guía de <a href="/guias/estudiar-con-ia">cómo estudiar con IA</a> está pensada para pasársela.</li>
</ul>

<h2 id="empezar">Por dónde empezar esta semana</h2>

<ol>
    <li>Elige una tarea que repitas todas las semanas y te aburra: fichas de repaso, correos, adaptaciones.</li>
    <li>Escribe un prompt con el contexto de tu grupo y guárdalo.</li>
    <li>Revisa el resultado con lupa las tres primeras veces. Anota qué corriges y añádelo al prompt.</li>
    <li>Cuando el borrador te salga casi bien a la primera, pasa a la siguiente tarea.</li>
</ol>

<p>En un mes tendrás cuatro o cinco plantillas que te ahorran horas, y un criterio propio sobre dónde la IA te ayuda y dónde prefieres hacerlo tú.</p>
HTML,
];
