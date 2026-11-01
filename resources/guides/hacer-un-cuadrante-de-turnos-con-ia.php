<?php

return [
    'title' => 'Cómo hacer un cuadrante de turnos con IA en Excel o Google Sheets',
    'navTitle' => 'Cuadrante de turnos con IA',
    'seoTitle' => 'Cómo hacer un cuadrante de turnos con IA',
    'description' => 'Haz el cuadrante de turnos de tu equipo con ChatGPT, Gemini o Claude: reglas, rotaciones, descansos legales, plantilla en Excel o Sheets y cómo revisarlo.',
    'excerpt' => 'Cuadrar turnos a mano cada mes es un rompecabezas: vacaciones, libranzas, fines de semana repartidos y descansos que marca la ley. La IA lo resuelve bien si le das las reglas claras y le pides una hoja de cálculo, no un dibujo. Así se hace y así se comprueba.',
    'category' => 'Práctica',
    'published' => '2026-11-01',
    'updated' => '2026-11-01',
    'readingMinutes' => 7,
    'words' => 1217,
    'about' => 'Elaboración de cuadrantes de turnos de trabajo con asistentes de inteligencia artificial y hojas de cálculo, respetando los descansos mínimos de la normativa laboral española',
    'related' => ['ia-en-excel-y-google-sheets', 'organizar-tu-tiempo-con-ia', 'ia-para-autonomos-y-pymes', 'usar-ia-sin-filtrar-datos-de-clientes', 'automatizar-tareas-con-ia-en-el-trabajo', 'entender-tu-nomina-con-ia'],
    'toc' => [
        'por-que' => 'Por qué la IA ayuda con los turnos',
        'reglas' => 'Paso 1: escribir las reglas',
        'pedir' => 'Paso 2: pedir el cuadrante como tabla',
        'revisar' => 'Paso 3: revisarlo con fórmulas',
        'legal' => 'Los descansos que marca la ley',
        'privacidad' => 'Privacidad y equipo',
    ],
    'faq' => [
        '¿Qué IA es mejor para hacer cuadrantes de turnos?' => 'ChatGPT, Gemini y Claude sirven si les das las reglas por escrito. Los que pueden ejecutar código y devolver un archivo Excel o CSV te ahorran copiar a mano. Gemini en Google Sheets y Copilot en Excel trabajan directamente sobre la hoja.',
        '¿Cuántas horas de descanso debe haber entre turnos?' => 'En España, el Estatuto de los Trabajadores fija un mínimo de 12 horas entre el final de una jornada y el comienzo de la siguiente, y un descanso semanal mínimo de día y medio ininterrumpido. Tu convenio colectivo puede mejorarlo o regular excepciones, así que revísalo.',
        '¿La IA puede repartir los fines de semana de forma justa?' => 'Sí, si se lo pides como regla explícita, por ejemplo «nadie trabaja más de dos fines de semana seguidos y todos trabajan el mismo número al mes, con una diferencia máxima de uno». Después compruébalo con una fórmula de recuento por persona.',
        '¿Puedo pegar los datos de mis empleados en ChatGPT?' => 'Evítalo. Para cuadrar turnos basta con iniciales o códigos y la disponibilidad. No metas bajas médicas, motivos de ausencias ni datos personales; si las cuentas son de empresa, sigue la política interna de uso de IA.',
        '¿Sirve para turnos rotativos de mañana, tarde y noche?' => 'Sí. Indica el orden de rotación, cuántas personas necesitas en cada franja y las restricciones, como no pasar de noche a mañana sin descanso suficiente. Pide primero el patrón de rotación y luego el cuadrante del mes.',
    ],
    'ctaTitle' => 'Skills para gestionar equipos',
    'ctaBody' => 'En <a href="/profesiones/rrhh">RR. HH.</a> hay skills de planificación de plantilla, onboarding y políticas internas, y en <a href="/profesiones/freelancers">Freelancers</a> otras pensadas para pequeños negocios; también puedes buscar «planificación» en el <a href="/skills">catálogo</a>.',
    'body' => <<<'HTML'
<p>Quien lleva un bar, una tienda, una clínica o un equipo de atención al cliente conoce el ritual: cada mes, una tarde entera cuadrando turnos para que haya gente suficiente en cada franja, que nadie trabaje todos los domingos y que las vacaciones encajen. Es un problema de reglas y combinaciones, justo el tipo de tarea que la IA resuelve bien. Esta guía explica cómo hacer un cuadrante de turnos con ChatGPT, Gemini o Claude y, sobre todo, cómo comprobar que está bien antes de colgarlo en la pared.</p>

<h2 id="por-que">Por qué la IA ayuda con los turnos</h2>

<p>Un cuadrante es una tabla de personas por días que tiene que cumplir muchas condiciones a la vez. A mano, cada cambio obliga a revisar todo. Con la IA describes las condiciones una vez y le pides propuestas, cambios («Ana se va de vacaciones del 10 al 16, rehazlo») y comprobaciones. Lo que no hace sola es conocer tu negocio: si no le dices que los sábados por la tarde entra el doble de gente, no lo tendrá en cuenta.</p>

<p>Hay una trampa: no le pidas el cuadrante «en imagen» ni en un generador de imágenes. Saldrá bonito y con días mal puestos. Pídelo siempre como tabla o como archivo de hoja de cálculo.</p>

<h2 id="reglas">Paso 1: escribir las reglas</h2>

<p>La calidad del cuadrante depende de esta lista. Escríbela antes de abrir el chat, separando lo obligatorio de lo deseable:</p>

<ul>
    <li><strong>Franjas y mínimos</strong>: horarios de cada turno y cuántas personas hacen falta en cada uno, por día de la semana.</li>
    <li><strong>Personas</strong>: iniciales, horas de contrato a la semana y qué turnos puede hacer cada una.</li>
    <li><strong>Ausencias</strong>: vacaciones y días ya pedidos.</li>
    <li><strong>Reglas obligatorias</strong>: descansos mínimos, máximo de días seguidos, lo que diga tu convenio.</li>
    <li><strong>Preferencias</strong>: reparto justo de fines de semana, quién prefiere mañanas, que no coincidan dos personas nuevas solas.</li>
</ul>

<h2 id="pedir">Paso 2: pedir el cuadrante como tabla</h2>

<blockquote>«Necesito el cuadrante de turnos de diciembre de 2026 para una cafetería. Turnos: mañana de 7:00 a 15:00 y tarde de 15:00 a 23:00. Mínimos: 2 personas por turno de lunes a jueves y 3 de viernes a domingo. Personas: AM, JL y RP a 40 h; CS y DV a 20 h, solo tardes. DV está de vacaciones del 22 al 31. Reglas obligatorias: 12 horas de descanso entre turnos, dos días libres seguidos por semana, máximo 5 días seguidos de trabajo. Preferencia: fines de semana repartidos por igual. Devuélvelo como tabla con una fila por persona y una columna por día (M, T o L de libre) y, debajo, el total de horas por persona y semana. Si alguna regla no se puede cumplir, dímelo en vez de saltártela.»</blockquote>

<p>La última frase es importante: si faltan personas para cubrir los mínimos, prefieres saberlo a que la IA lo esconda. Si el asistente puede ejecutar código, pídele directamente el archivo Excel o CSV; si no, copia la tabla y pégala en la hoja. En <a href="/guias/ia-en-excel-y-google-sheets">IA en Excel y Google Sheets</a> explicamos las tres formas de trabajar con hojas de cálculo y qué ventaja tiene cada una.</p>

<p>Para turnos rotativos de mañana, tarde y noche, ve en dos pasos: primero pide el patrón de rotación de cuatro o seis semanas que cumpla los descansos, y después aplícalo al calendario real con las vacaciones.</p>

<h2 id="revisar">Paso 3: revisarlo con fórmulas</h2>

<p>Nunca des por bueno el cuadrante porque la IA diga que cumple las reglas: a veces afirma que sí y no es verdad. La forma rápida de comprobarlo es añadir unas pocas fórmulas a la hoja y dejar que hagan el trabajo:</p>

<blockquote>«En esta hoja, las filas son personas y las columnas, días, con M, T o L. Dame fórmulas para: contar cuántas personas hay en cada turno cada día y marcar en rojo los días por debajo del mínimo; contar los fines de semana trabajados por persona; y detectar cuando alguien hace tarde un día y mañana el siguiente.»</blockquote>

<p>Con eso, cualquier cambio posterior se revisa solo. Si cada mes repites el mismo proceso, puedes guardar las reglas en un proyecto o asistente con instrucciones fijas y pedir solo lo que cambia; en <a href="/guias/automatizar-tareas-con-ia-en-el-trabajo">automatizar tareas con IA en el trabajo</a> hay más ideas para quitarte tareas repetidas.</p>

<h2 id="legal">Los descansos que marca la ley</h2>

<p>En España, el Estatuto de los Trabajadores fija, entre otras cosas, <strong>12 horas mínimas entre el final de una jornada y el inicio de la siguiente</strong>, un <strong>descanso semanal de día y medio ininterrumpido</strong> como mínimo, un máximo general de 9 horas ordinarias al día y la obligación de registrar la jornada. Los convenios colectivos pueden cambiar varias de estas reglas, por ejemplo cómo se acumula el descanso semanal, así que la referencia es tu convenio. Pide a la IA que te ayude a encontrar los artículos que aplican, pero léelos tú en el texto oficial: es justo el tipo de dato que puede inventar.</p>

<p>Y recuerda que las horas del cuadrante acaban en la nómina: si alguien te pregunta por nocturnidad o festivos trabajados, en <a href="/guias/entender-tu-nomina-con-ia">entender tu nómina con IA</a> se explica cómo leer cada concepto.</p>

<h2 id="privacidad">Privacidad y equipo</h2>

<ul>
    <li><strong>Usa iniciales o códigos</strong>, no nombres completos, y nunca metas bajas médicas ni los motivos de una ausencia: para cuadrar turnos basta con «no disponible». Más en <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar IA sin filtrar datos de clientes</a>.</li>
    <li><strong>Pregunta antes de publicar</strong>. Comparte el borrador con el equipo un par de días antes; corregir un cambio pedido a tiempo cuesta un minuto con la IA.</li>
    <li><strong>Guarda el criterio</strong>. Si alguien pregunta por qué le tocan tres domingos, poder enseñar las reglas que has usado evita discusiones.</li>
</ul>

<p>Un buen cuadrante no es el que hace la IA, es el que cumple las reglas, cubre el negocio y el equipo entiende. La IA te ahorra la tarde de combinaciones; la revisión sigue siendo tuya.</p>
HTML,
];
