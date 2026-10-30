<?php

return [
    'title' => 'Cómo hacer un examen tipo test con IA: preguntas, distractores y plantilla de respuestas',
    'navTitle' => 'Hacer un examen tipo test con IA',
    'seoTitle' => 'Cómo hacer un examen tipo test con IA, paso a paso',
    'description' => 'Crea preguntas tipo test con ChatGPT, Gemini o Claude a partir de tu temario: distractores creíbles, niveles de dificultad, plantilla y exportación a Moodle.',
    'excerpt' => 'Pedir «diez preguntas tipo test sobre la Revolución francesa» da un examen que se aprueba por descarte. Un buen test necesita tu temario, distractores que se parezcan a la respuesta y una revisión pregunta a pregunta. Así se hace, tanto si lo pones como si lo estudias.',
    'category' => 'Práctica',
    'published' => '2026-10-30',
    'updated' => '2026-10-30',
    'readingMinutes' => 7,
    'words' => 1113,
    'about' => 'Uso de asistentes de inteligencia artificial para generar, revisar y exportar preguntas de opción múltiple a partir de un temario propio',
    'related' => ['ia-para-profesores', 'estudiar-con-ia', 'preparar-oposiciones-con-ia', 'alucinaciones-de-la-ia', 'mapas-mentales-y-esquemas-con-ia', 'resumir-documentos-largos-con-ia'],
    'toc' => [
        'material' => 'Empieza por el material, no por el tema',
        'prompt' => 'El prompt que funciona',
        'distractores' => 'Distractores: lo que separa un buen test',
        'revisar' => 'Revisar cada pregunta',
        'exportar' => 'Pasarlo a Moodle, Google Forms o Kahoot',
        'estudiar' => 'Si eres estudiante: test para repasar',
    ],
    'faq' => [
        '¿Qué IA es mejor para crear preguntas tipo test?' => 'ChatGPT, Claude y Gemini lo hacen bien si les das el temario. Gemini es cómodo si trabajas con Google Forms y Classroom, y hay herramientas específicas que generan el test desde un PDF, pero la calidad depende más del material y de la revisión que de la herramienta.',
        '¿Puede la IA equivocarse en la respuesta correcta?' => 'Sí, y pasa más de lo que parece: marca como correcta una opción dudosa o deja dos respuestas válidas. Pide que justifique cada respuesta citando el apartado del temario y revisa todas antes de usarlas.',
        '¿Cuántas opciones debe tener una pregunta tipo test?' => 'Lo habitual son cuatro opciones con una sola correcta. Tres opciones bien pensadas funcionan mejor que cinco con dos de relleno, porque los distractores absurdos no miden nada.',
        '¿Se puede importar un test hecho con IA en Moodle?' => 'Sí. Pide a la IA las preguntas en formato GIFT o Aiken, guárdalas en un archivo de texto y usa la opción de importar preguntas del banco de Moodle. Haz primero una prueba con dos o tres preguntas.',
        '¿Cómo se calcula la penalización por respuesta incorrecta?' => 'La fórmula habitual resta una fracción igual a 1 entre el número de opciones menos una: con cuatro opciones, cada fallo resta un tercio de acierto. Así contestar al azar no sube la nota de media.',
    ],
    'ctaTitle' => 'Skills para preparar material docente',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay instrucciones para generar ejercicios, rúbricas y resúmenes a partir de tus propios apuntes, útiles para formación interna en <a href="/profesiones/rrhh">recursos humanos</a> y para <a href="/profesiones/freelancers">formadores independientes</a>.',
    'body' => <<<'HTML'
<p>Hacer un examen tipo test lleva más tiempo del que parece: escribir veinte preguntas claras, con tres opciones falsas que no se descarten a la primera y una plantilla sin errores puede ocupar una tarde. Con IA se hace en una fracción de ese tiempo, siempre que no le pidas el examen a ciegas. Esta guía sirve a profesores, formadores de empresa y a estudiantes que quieren ponerse a prueba antes del examen de verdad.</p>

<h2 id="material">Empieza por el material, no por el tema</h2>

<p>Si escribes «hazme un test de Biología de 3.º de ESO», la IA pregunta lo que ella cree que entra, con su nivel y su vocabulario. Las preguntas saldrán correctas en general y desajustadas con lo que has explicado. La diferencia la marca subirle <strong>tu material</strong>: el tema del libro, tus apuntes, las diapositivas o el manual de formación.</p>

<p>Si el documento es largo, trabaja por temas o por apartados. Un test sobre cuarenta páginas acaba preguntando casi todo sobre las diez primeras. En <a href="/guias/resumir-documentos-largos-con-ia">resumir documentos largos con IA</a> explicamos cómo trocear un texto sin perder detalles.</p>

<h2 id="prompt">El prompt que funciona</h2>

<p>Un buen prompt para un examen tipo test dice para quién es, sobre qué, cuántas preguntas, con qué dificultad y en qué formato:</p>

<blockquote>«Con el material que te adjunto, crea 15 preguntas tipo test para alumnos de [CURSO]. Cuatro opciones por pregunta y una sola correcta. Reparte la dificultad así: 5 de recordar un dato, 6 de entender un concepto y 4 de aplicarlo a un caso. No preguntes nada que no esté en el material. Al final, una tabla con la respuesta correcta de cada pregunta y el apartado del material que la justifica.»</blockquote>

<p>Pedir el apartado que justifica cada respuesta es lo más útil del prompt: te permite comprobar rápido y obliga a la IA a anclarse en el texto en vez de completar con lo que sabe. Si es la primera vez que preparas material con IA, la guía de <a href="/guias/ia-para-profesores">IA para profesores</a> cubre también rúbricas, adaptaciones y comentarios a los alumnos.</p>

<h2 id="distractores">Distractores: lo que separa un buen test</h2>

<p>Las opciones falsas se llaman distractores, y son donde peor trabaja la IA por defecto. Tiende a poner una opción absurda, otra demasiado larga o una que repite palabras de la pregunta. El alumno no sabe la respuesta y acierta igual. Pídele expresamente:</p>

<ul>
    <li><strong>Errores reales</strong>: «Cada opción falsa debe corresponder a un error que cometen de verdad los alumnos con este tema».</li>
    <li><strong>Misma forma</strong>: las cuatro opciones con una longitud y una estructura parecidas.</li>
    <li><strong>Nada de «todas las anteriores»</strong> ni de «ninguna de las anteriores», que suelen delatar la respuesta.</li>
    <li><strong>Posición repartida</strong>: que la correcta no caiga casi siempre en la b o en la c.</li>
</ul>

<p>Un truco que funciona: después de generarlas, pide a la IA que haga el test como un alumno que no ha estudiado y que diga qué preguntas acertaría solo por descarte. Esas son las que tienes que rehacer.</p>

<h2 id="revisar">Revisar cada pregunta</h2>

<p>Un examen tipo test no admite errores: una pregunta con dos respuestas válidas acaba en reclamación. La IA puede marcar como correcta una opción equivocada o inventar un dato con total seguridad, el fallo que explicamos en <a href="/guias/alucinaciones-de-la-ia">las alucinaciones de la IA</a>. Repasa cada pregunta con esta lista:</p>

<ol>
    <li>La respuesta marcada es correcta según tu material, no según la IA.</li>
    <li>Ninguna otra opción es defendible.</li>
    <li>El enunciado se entiende sin leer las opciones.</li>
    <li>No hay dobles negaciones ni trampas de redacción.</li>
    <li>La pregunta mide algo que has explicado y que importa.</li>
</ol>

<p>Cuenta con descartar o rehacer dos o tres preguntas de cada quince. Es normal, y sigue siendo mucho más rápido que escribirlas desde cero.</p>

<h2 id="exportar">Pasarlo a Moodle, Google Forms o Kahoot</h2>

<p>Copiar las preguntas a mano en la plataforma es lo que más tiempo se come después. Pide el formato directamente:</p>

<ul>
    <li><strong>Moodle</strong>: «Dame las preguntas en formato GIFT». Lo pegas en un archivo de texto y lo importas desde el banco de preguntas. El formato Aiken también vale y es más sencillo.</li>
    <li><strong>Google Forms</strong>: activa el modo cuestionario y pide una tabla con pregunta, opciones y respuesta correcta para copiar más rápido.</li>
    <li><strong>Kahoot</strong>: admite importar desde una hoja de cálculo con su plantilla. Pide a la IA una tabla con esas columnas y con opciones de menos de 75 caracteres.</li>
    <li><strong>Papel</strong>: pide dos modelos con el orden de preguntas y opciones cambiado, y la plantilla de cada uno.</li>
</ul>

<p>Haz siempre una prueba de importación con dos o tres preguntas antes de subir el examen entero.</p>

<h2 id="estudiar">Si eres estudiante: test para repasar</h2>

<p>Hacerse preguntas a uno mismo es de las técnicas de estudio que mejor funcionan, mucho más que releer. La IA lo hace fácil, con una condición: que no te dé las soluciones antes de tiempo.</p>

<blockquote>«Con estos apuntes, hazme 10 preguntas tipo test de una en una. Espera a que conteste cada una, dime si he acertado y, si fallo, explícame por qué en dos líneas. Al final, dime qué apartados tengo que repasar.»</blockquote>

<p>Repite el test unos días después y pide preguntas nuevas sobre lo que fallaste. Si preparas unas oposiciones, en <a href="/guias/preparar-oposiciones-con-ia">preparar oposiciones con IA</a> tienes prompts para test con el estilo de cada convocatoria, y en <a href="/guias/estudiar-con-ia">estudiar con IA</a> el resto de técnicas para que la IA te haga pensar en vez de pensar por ti.</p>
HTML,
];
