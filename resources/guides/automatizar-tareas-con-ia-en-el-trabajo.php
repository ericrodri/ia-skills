<?php

return [
    'title' => 'Cómo automatizar tareas con IA en el trabajo sin romper nada',
    'navTitle' => 'Automatizar con IA',
    'seoTitle' => 'Cómo automatizar tareas con IA en el trabajo (método)',
    'description' => 'Método en cinco pasos para elegir qué tareas automatizar con IA y cuáles no tocar, cómo medir si ha servido y qué controles poner antes.',
    'excerpt' => 'Casi todo el mundo automatiza la tarea equivocada: la que es fácil de automatizar en lugar de la que cuesta tiempo. Un método para elegir bien y no dejar bombas activadas.',
    'category' => 'Método',
    'published' => '2026-08-25',
    'updated' => '2026-08-27',
    'readingMinutes' => 7,
    'words' => 1210,
    'about' => 'Automatización con IA',
    'related' => ['que-es-un-agente-de-ia', 'ia-en-excel-y-google-sheets', 'ia-para-reuniones-y-actas'],
    'toc' => [
        'inventario' => 'Paso 1: inventario honesto de tu semana',
        'que-automatizar' => 'Paso 2: qué automatizar y qué no tocar',
        'niveles' => 'Paso 3: los tres niveles de automatización',
        'controles' => 'Paso 4: los controles que evitan sustos',
        'medir' => 'Paso 5: medir si ha servido de algo',
        'ejemplos' => 'Cuatro ejemplos por profesión',
    ],
    'faq' => [
        '¿Qué tarea conviene automatizar primero?' => 'La más frecuente entre las que puedes revisar de un vistazo. Frecuencia alta para que el ahorro se note, y revisión fácil para que un error se detecte antes de tener consecuencias. Nunca empieces por la tarea más crítica.',
        '¿Cuánto tiempo se tarda en ver resultados?' => 'Si eliges una tarea semanal, la primera versión suele funcionar el mismo día y quedar afinada en dos o tres usos. Si al tercer intento sigue sin funcionar, casi siempre es que la tarea estaba mal delimitada, no que la herramienta no llegue.',
        '¿Y si la IA se equivoca en algo que ya se ha enviado al cliente?' => 'Ese escenario se evita en el diseño, no con más prompt: cualquier paso que salga de tu organización lleva revisión humana. La automatización llega hasta el borrador; el envío lo aprueba una persona.',
        '¿Tengo que avisar a mi equipo o a mis clientes de que uso IA?' => 'A tu equipo, sí: una automatización que solo tú entiendes es una dependencia oculta. Con clientes depende del contrato y del sector; en trabajos donde se factura criterio profesional, conviene ser transparente sobre qué parte del proceso está asistida.',
        '¿Cómo evito que la automatización se rompa en silencio?' => 'Ponle una comprobación visible: un resumen semanal de lo que hizo, un contador, un mensaje cuando no encuentre datos. Lo peligroso no es que falle, es que falle sin que nadie se entere durante dos meses.',
    ],
    'ctaTitle' => 'Empieza por una tarea de tu profesión',
    'ctaBody' => 'El catálogo está organizado por profesión precisamente para esto: encuentra la tarea que repites, coge el prompt probado y automatiza esa. Una sola, bien.',
    'body' => <<<'HTML'
<p>La conversación sobre automatización con IA casi siempre empieza por la herramienta y casi siempre debería empezar por la libreta. Antes de elegir con qué, hay que decidir qué; y ese orden explica por qué tanta gente monta cosas impresionantes que no ahorran una hora.</p>

<h2 id="inventario">Paso 1: inventario honesto de tu semana</h2>

<p>Durante cinco días laborables, apunta cada tarea que hagas más de una vez y cuánto te ha llevado. Sin estimar de memoria: la memoria infravalora sistemáticamente lo que se hace en trozos de diez minutos.</p>

<p>Al final de la semana tendrás una lista que suele sorprender. Las tareas que más tiempo consumen casi nunca son las que uno recuerda como pesadas; son las pequeñas que ocurren doce veces: contestar el mismo tipo de correo, reformatear un informe, pasar notas a limpio, preparar el mismo resumen para tres personas distintas.</p>

<p>Ordena por <strong>tiempo total a la semana</strong>, no por lo mucho que te fastidie cada una.</p>

<h2 id="que-automatizar">Paso 2: qué automatizar y qué no tocar</h2>

<p>Puntúa cada tarea de la lista con tres criterios, de 1 a 3:</p>

<ul>
    <li><strong>Frecuencia.</strong> ¿Cuántas veces por semana?</li>
    <li><strong>Regularidad.</strong> ¿Se hace igual cada vez o depende del caso?</li>
    <li><strong>Coste de un error.</strong> ¿Se corrige en un minuto o llega al cliente?</li>
</ul>

<p>Los candidatos buenos son frecuencia alta, regularidad alta y coste de error bajo. Empieza por ahí, aunque el ahorro no sea espectacular: lo que buscas en la primera automatización es aprender el método con red.</p>

<p>Y hay cosas que conviene no automatizar, al menos no del todo:</p>

<ul>
    <li>Lo que <strong>solo pasa una vez</strong>. Escribir la automatización cuesta más que hacerlo a mano.</li>
    <li>Lo que exige <strong>criterio con consecuencias personales</strong>: evaluaciones de desempeño, decisiones de despido, valoración de un candidato. La IA puede preparar el material; la decisión no se delega.</li>
    <li>Lo que <strong>no sabes verificar</strong>. Si no distingues un resultado correcto de uno plausible, automatizarlo es multiplicar el error.</li>
    <li>Lo que <strong>compromete datos ajenos</strong> sin haber revisado antes qué has firmado con quien te los dio.</li>
</ul>

<h2 id="niveles">Paso 3: los tres niveles de automatización</h2>

<p>No todo es «lo hace un robot solo». Hay tres niveles y el salto entre ellos multiplica el riesgo:</p>

<figure>
<table>
    <thead><tr><th>Nivel</th><th>Cómo funciona</th><th>Riesgo</th><th>Bueno para</th></tr></thead>
    <tbody>
        <tr><td><strong>1. Asistido</strong></td><td>Tú lanzas la tarea con un prompt guardado y revisas el resultado</td><td>Mínimo</td><td>Empezar. El 80 % del ahorro está aquí</td></tr>
        <tr><td><strong>2. Procedimentado</strong></td><td>Un skill fija el procedimiento y el formato; tú sigues aprobando</td><td>Bajo</td><td>Tareas de equipo, consistencia</td></tr>
        <tr><td><strong>3. Encadenado</strong></td><td>Se dispara solo, lee de un sistema y escribe en otro</td><td>Alto</td><td>Solo cuando 1 y 2 llevan meses funcionando</td></tr>
    </tbody>
</table>
</figure>

<p>La tentación es saltar al nivel 3 porque es el que se ve en las demos. La realidad es que el nivel 1 bien hecho —un prompt bueno, guardado, con contexto— ya recupera la mayor parte del tiempo, y no puede hacer nada irreversible.</p>

<p>El nivel 2 es donde entran los <a href="/guias/que-son-los-skills-de-claude-code">skills</a>: cuando la tarea ya funciona y lo que quieres es que salga igual siempre, y que le salga igual a tus compañeros. El nivel 3 requiere conexiones a sistemas externos, y ahí conviene leer primero la parte de permisos de <a href="/guias/plugins-y-mcp-en-claude-code">plugins y MCP</a>.</p>

<h2 id="controles">Paso 4: los controles que evitan sustos</h2>

<p>Cuatro controles cubren casi todos los escenarios malos:</p>

<ol>
    <li><strong>Nada sale sin revisión humana.</strong> Correos, publicaciones, facturas, mensajes a clientes: la automatización produce el borrador, la persona aprueba el envío.</li>
    <li><strong>Regla explícita para los huecos.</strong> Di siempre qué hacer cuando falte un dato: «si no consta, escribe SIN DATO y no continúes». Sin esa regla, el hueco se rellena con algo verosímil.</li>
    <li><strong>Rastro de lo que hizo.</strong> Un registro, aunque sea un documento donde se apunta cada ejecución. Sin rastro no se puede auditar un error tres semanas después.</li>
    <li><strong>Un dueño con nombre.</strong> Cada automatización tiene una persona responsable de revisarla. Las que no tienen dueño se rompen y siguen funcionando mal durante meses.</li>
</ol>

<h2 id="medir">Paso 5: medir si ha servido de algo</h2>

<p>Dos números, medidos antes y después:</p>

<ul>
    <li><strong>Minutos por ejecución</strong>, incluyendo el tiempo de revisar y corregir. Este es el número que suele desmontar entusiasmos: si tardas veinte minutos en arreglar lo que salió en dos, no has automatizado nada.</li>
    <li><strong>Porcentaje de resultados usables sin retocar.</strong> Si es menor del 70 %, el problema está en el prompt o en la definición de la tarea, no en el modelo.</li>
</ul>

<p>Revísalos al mes. Y si un mes después nadie usa la automatización, bórrala. Una automatización abandonada es deuda: alguien la encontrará en un año y no sabrá si puede tocarla.</p>

<h2 id="ejemplos">Cuatro ejemplos por profesión</h2>

<ul>
    <li><strong><a href="/profesiones/customer-support">Soporte</a>:</strong> clasificar los tickets entrantes por tipo y urgencia con criterios escritos, y proponer un primer borrador de respuesta para los cinco casos más repetidos. Revisión humana antes de enviar.</li>
    <li><strong><a href="/profesiones/marketing">Marketing</a>:</strong> convertir un artículo en cinco piezas para redes con el ángulo cambiado, no el mismo texto recortado. Nivel 1, sin misterio.</li>
    <li><strong><a href="/profesiones/finanzas">Finanzas</a>:</strong> preparar el comentario de las desviaciones del mes a partir del cierre, con la regla de no interpretar nada que no esté en los datos. Los números se verifican siempre.</li>
    <li><strong><a href="/profesiones/rrhh">RRHH</a>:</strong> redactar la descripción de una vacante a partir de las funciones reales y de los criterios de evaluación, para que ambas cosas digan lo mismo. La valoración de candidatos, fuera.</li>
</ul>

<p>Dos tareas se repiten en el inventario de casi cualquier puesto y tienen guía propia, porque cada una esconde su propia trampa: pelearse con una hoja de cálculo —donde la IA escribe la fórmula bien y calcula mal, explicado en <a href="/guias/ia-en-excel-y-google-sheets">IA en Excel y Google Sheets</a>— y redactar el acta de una reunión, en <a href="/guias/ia-para-reuniones-y-actas">IA para reuniones</a>.</p>

<p>Elige una. Una sola, la más frecuente y la más fácil de revisar. Cuando esa funcione y hayas medido el ahorro —con línea base y contando el tiempo de revisar, como se explica en <a href="/guias/medir-si-la-ia-ahorra-tiempo">cómo medir si la IA te está ahorrando tiempo de verdad</a>—, pasa a la siguiente. El error más común en esto no es técnico: es intentar automatizar seis cosas a la vez y quedarse sin ninguna acabada.</p>

<p>Y si la tarea que has elegido tiene demasiados pasos para resolverla con un prompt suelto, lo que necesitas es un agente que los encadene por su cuenta: cómo funcionan y hasta dónde conviene dejarlos solos está en <a href="/guias/que-es-un-agente-de-ia">qué es un agente de IA</a>.</p>

<p>Un último apunte si esto va a salir de tu portátil: en cuanto una automatización toca datos de clientes o envía algo al exterior, deja de ser una decisión personal. Lo que conviene tener escrito —qué datos, qué herramientas, quién aprueba— está en <a href="/guias/politica-de-uso-de-ia-en-la-empresa">política de uso de IA en la empresa</a>.</p>
HTML,
];
