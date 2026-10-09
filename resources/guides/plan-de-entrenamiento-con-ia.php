<?php

return [
    'title' => 'Cómo hacer un plan de entrenamiento con IA que se adapte a ti semana a semana',
    'navTitle' => 'Plan de entrenamiento con IA',
    'seoTitle' => 'Plan de entrenamiento con IA: rutina y progresión',
    'description' => 'Cómo pedir a la IA una rutina de gimnasio o de casa: qué datos darle, cómo ajustar la progresión cada semana y cuándo hace falta un profesional.',
    'excerpt' => 'Pedirle a ChatGPT «una rutina para ganar músculo» da la misma rutina que a todo el mundo. La IA hace planes razonables si le cuentas tu punto de partida, y planes buenos si cada semana le devuelves lo que has hecho de verdad.',
    'category' => 'Práctica',
    'published' => '2026-10-09',
    'updated' => '2026-10-09',
    'readingMinutes' => 7,
    'words' => 1211,
    'about' => 'Planificación de rutinas de ejercicio y entrenamiento de fuerza con asistentes de inteligencia artificial',
    'related' => ['menu-semanal-con-ia', 'como-escribir-prompts-efectivos', 'alucinaciones-de-la-ia', 'gpts-proyectos-y-skills', 'ia-en-excel-y-google-sheets', 'herramientas-de-ia-gratis'],
    'toc' => [
        'que-hace-bien' => 'Qué hace bien y qué no',
        'los-datos' => 'Los datos que necesita',
        'el-plan' => 'Pedir el plan',
        'progresion' => 'La progresión: el registro manda',
        'reutilizar' => 'No explicarlo todo cada semana',
        'seguridad' => 'Lesiones, dolor y salud',
    ],
    'faq' => [
        '¿Qué IA es mejor para hacer una rutina de gimnasio?' => 'Cualquier asistente general sirve: ChatGPT, Gemini, Claude o Copilot hacen rutinas sensatas en su versión gratuita. La calidad depende de los datos que le das y de que le devuelvas tu registro cada semana. Las aplicaciones de entrenamiento con IA tienen la ventaja de guardar el historial de cargas sin que tengas que copiarlo.',
        '¿Es seguro seguir una rutina hecha por ChatGPT?' => 'Para una persona sana que empieza con cargas moderadas, una rutina bien pedida suele ser razonable. El riesgo está en lo que la IA no ve: la técnica con la que haces cada ejercicio, los dolores que no le cuentas y las enfermedades que no conoce. Si tienes una lesión, una enfermedad crónica o hace años que no te mueves, pide antes opinión a tu médico o a un fisioterapeuta.',
        '¿Puede la IA corregirme la técnica?' => 'Solo de forma limitada. Puede explicar los puntos clave de un ejercicio y, si le subes un vídeo o una foto, señalar errores evidentes. Pero no sustituye a un entrenador que te vea moverte en directo, sobre todo en sentadilla, peso muerto y ejercicios por encima de la cabeza, donde un fallo de técnica se paga.',
        '¿Sirve para entrenar en casa sin material?' => 'Sí. Dile qué tienes, aunque sea solo una esterilla, unas bandas elásticas o una silla, y cuánto espacio. Pide que la progresión se haga con más repeticiones, más lentitud o variantes más difíciles, ya que no puedes subir peso.',
        '¿Puede hacerme también la dieta?' => 'Puede proponer menús equilibrados y ayudarte a organizar la compra, como contamos en la guía del menú semanal. Para objetivos concretos de peso, o si tienes alguna enfermedad, el plan de alimentación debe hacerlo un dietista-nutricionista.',
    ],
    'ctaTitle' => 'Instrucciones que se reutilizan',
    'ctaBody' => 'Un plan de entrenamiento es una instrucción que repites cada semana con datos nuevos. En el <a href="/skills">catálogo de skills</a> hay instrucciones probadas para planificar y hacer seguimiento, por ejemplo en <a href="/profesiones/freelancers">autónomos</a> y <a href="/profesiones/rrhh">recursos humanos</a>.',
    'body' => <<<'HTML'
<p>Pedirle a ChatGPT «una rutina para ganar músculo» da la misma rutina que a todo el mundo: cuatro días, un par de ejercicios por grupo muscular, tres o cuatro series de ocho a doce repeticiones. No está mal, pero no es tuya. La IA hace planes razonables si le cuentas tu punto de partida, y planes buenos si cada semana le devuelves lo que has hecho de verdad. Esta guía explica las dos cosas.</p>

<h2 id="que-hace-bien">Qué hace bien y qué no</h2>

<ul>
    <li><strong>Hace bien</strong>: repartir los días según el tiempo que tienes, elegir ejercicios para el material disponible, equilibrar empujes y tirones, proponer alternativas si una máquina está ocupada y explicar para qué sirve cada cosa.</li>
    <li><strong>Hace mal, sin ayuda</strong>: saber cuánto peso mueves, porque no te ha visto entrenar; ajustar la carga si no le dices cómo fue la semana anterior; y darse cuenta de que un ejercicio te molesta en la rodilla si no se lo cuentas.</li>
</ul>

<p>En resumen, escribe el plan, pero no te acompaña en el gimnasio. El seguimiento depende de ti.</p>

<h2 id="los-datos">Los datos que necesita</h2>

<p>Antes de pedir nada, ten claro:</p>

<ul>
    <li><strong>Objetivo</strong>: ganar fuerza, ganar músculo, perder grasa, correr tu primera carrera de diez kilómetros o simplemente moverte más. Uno principal; si pides cuatro a la vez, el plan no servirá para ninguno.</li>
    <li><strong>Punto de partida</strong>: cuánto tiempo llevas entrenando y, si ya entrenas, qué pesos mueves en los ejercicios básicos.</li>
    <li><strong>Tiempo real</strong>: días por semana y minutos por sesión que vas a cumplir, no los que te gustaría.</li>
    <li><strong>Material</strong>: gimnasio completo, gimnasio pequeño, mancuernas en casa o nada.</li>
    <li><strong>Limitaciones</strong>: lesiones, dolores, ejercicios que no te gustan.</li>
    <li><strong>Lo que haces fuera</strong>: si juegas al pádel dos veces por semana o vas al trabajo andando, cuenta.</li>
</ul>

<h2 id="el-plan">Pedir el plan</h2>

<p>Un ejemplo con todo el contexto:</p>

<blockquote>«Tengo 38 años, llevo seis meses yendo al gimnasio sin plan fijo. Quiero ganar fuerza. Puedo entrenar tres días por semana, 60 minutos como máximo. Gimnasio completo. Ahora hago sentadilla con 60 kg a 8 repeticiones y press de banca con 50 kg a 8. Tuve una tendinitis en el hombro derecho hace un año y el press por encima de la cabeza me molesta. Haz un plan de ocho semanas, en una tabla por día, con series, repeticiones, descanso y cómo subir el peso de una semana a otra. Explica en una línea por qué eliges cada ejercicio.»</blockquote>

<p>Después ajusta lo que no encaje: «el miércoles no puedo, pásalo al jueves», «cambia el peso muerto convencional por una variante con barra hexagonal». Corregir es más rápido que empezar de nuevo, y cómo pedir las cosas con precisión está en <a href="/guias/como-escribir-prompts-efectivos">cómo escribir prompts efectivos</a>.</p>

<p>Si una recomendación te parece rara, pregunta por qué. Los modelos a veces dan cifras con mucha seguridad y poco fundamento, por las razones que explicamos en <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>.</p>

<h2 id="progresion">La progresión: el registro manda</h2>

<p>Aquí está la diferencia entre un plan que funciona y uno que se abandona en la tercera semana. La IA no sabe cómo te fue el lunes. Si no se lo dices, la semana cuatro será una suposición.</p>

<ol>
    <li><strong>Anota cada sesión</strong>: ejercicio, peso, repeticiones de cada serie y lo duro que fue, del 1 al 10. Una nota en el móvil o una hoja de cálculo sirve; si usas hoja, la guía de <a href="/guias/ia-en-excel-y-google-sheets">IA en Excel y Google Sheets</a> explica cómo sacarle partido.</li>
    <li><strong>Al final de la semana, pégalo</strong> y pide: «Este es mi registro. Ajusta la semana que viene: sube el peso donde fue fácil, mantenlo donde fallé repeticiones y dime si algo indica que necesito descansar.»</li>
    <li><strong>Cuenta lo que no está en los números</strong>: dormiste mal, tuviste una semana de mucho trabajo, te molestó la espalda. Cambia la recomendación.</li>
</ol>

<p>Las aplicaciones de entrenamiento con IA hacen este paso solas porque guardan tu historial. Con un asistente general lo haces tú, a cambio de no pagar suscripción y de entender por qué cambia cada cosa.</p>

<h2 id="reutilizar">No explicarlo todo cada semana</h2>

<p>Repetir edad, objetivo, material y lesión del hombro cada domingo es lo que hace que muchos lo dejen. Dos soluciones:</p>

<ul>
    <li><strong>La memoria del asistente</strong>: ChatGPT, Gemini y Claude pueden recordar datos entre conversaciones. Díselo una vez.</li>
    <li><strong>Un proyecto o un GPT</strong> con tus datos, el plan actual y el registro adjuntos. Así cada semana solo pegas lo nuevo. Cómo montarlo está en <a href="/guias/gpts-proyectos-y-skills">GPTs, proyectos y skills</a>.</li>
</ul>

<p>Si además organizas las comidas con IA, puedes pedir que el <a href="/guias/menu-semanal-con-ia">menú semanal</a> tenga en cuenta los días de entrenamiento: más hidratos antes de una sesión dura, cenas sencillas los días que llegas tarde.</p>

<h2 id="seguridad">Lesiones, dolor y salud</h2>

<p>Para una persona sana que empieza con cargas moderadas, una rutina bien pedida suele ser razonable. Hay casos en los que no basta:</p>

<ul>
    <li><strong>Dolor que no es cansancio</strong>: un pinchazo, dolor en una articulación o algo que empeora de una sesión a otra. Para y consulta, no le pidas a la IA que te diga si es grave.</li>
    <li><strong>Enfermedades y medicación</strong>: problemas de corazón, tensión alta, diabetes, embarazo. Habla antes con tu médico.</li>
    <li><strong>Volver tras una lesión</strong>: la vuelta la marca un fisioterapeuta. La IA puede ayudarte después a organizar los ejercicios que te haya dado.</li>
    <li><strong>Técnica en ejercicios con mucha carga</strong>: sentadilla, peso muerto, press. Un par de sesiones con un entrenador que te vea compensan cualquier plan.</li>
</ul>

<p>En esos casos la IA sigue siendo útil para lo aburrido: convertir las pautas del profesional en un calendario, recordarte la progresión y llevar el registro. Pásale sus indicaciones y pídele que las respete al pie de la letra.</p>
HTML,
];
