<?php

return [
    'title' => 'Preparar una entrevista de trabajo con IA (y qué hace la IA al otro lado)',
    'navTitle' => 'Entrevista de trabajo con IA',
    'seoTitle' => 'Preparar una entrevista de trabajo con IA: método',
    'description' => 'Cómo preparar una entrevista con IA: investigación, banco de preguntas y simulacro. Y qué hace la IA al otro lado, incluido lo que puedes exigir.',
    'excerpt' => 'En casi todo proceso hay ya dos IAs: la que usas tú para prepararte y la que usa la empresa para filtrar. Método de preparación con prompts que funcionan, qué evalúan las entrevistas grabadas y qué derechos tienes cuando una máquina participa en la decisión.',
    'category' => 'Práctica',
    'published' => '2026-09-15',
    'updated' => '2026-09-15',
    'readingMinutes' => 11,
    'words' => 1904,
    'about' => 'Preparación de entrevistas de trabajo con inteligencia artificial',
    'related' => ['cv-y-carta-de-presentacion-con-ia', 'ai-act-obligaciones-empresas', 'va-la-ia-a-sustituir-mi-trabajo'],
    'toc' => [
        'el-otro-lado' => 'Qué hace la IA al otro lado de la mesa',
        'derechos' => 'Lo que puedes exigir cuando decide una máquina',
        'preparacion' => 'La preparación que sí mueve la aguja',
        'prompts' => 'Cuatro prompts que hacen el trabajo',
        'historias' => 'Tus historias: extraerlas, no inventarlas',
        'grabadas' => 'Entrevistas grabadas y asíncronas',
        'en-vivo' => '¿Puedo usar IA durante la entrevista?',
        'despues' => 'Después: la parte que casi nadie hace',
    ],
    'faq' => [
        '¿Cómo preparo una entrevista de trabajo con ChatGPT o Claude?' => 'En cuatro pasos, y el orden importa. Uno: pegas la oferta y tu CV y pides las quince preguntas más probables, ordenadas por riesgo para tu perfil. Dos: escribes tú las respuestas en bruto, sin pulir. Tres: abres un simulacro pidiéndole que actúe como entrevistador, una pregunta cada vez, sin adelantarse. Cuatro: pides crítica concreta de cada respuesta: qué no se entiende, qué falta de contexto, dónde falta un número. La parte que funciona es la tercera y la cuarta; pedir respuestas modelo y memorizarlas es justo lo que se nota.',
        '¿Las empresas usan IA para las entrevistas?' => 'Cada vez más, en tres puntos distintos: cribado automático de currículos frente a la descripción del puesto, entrevistas asíncronas grabadas con evaluación asistida, y resumen o puntuación de las entrevistas en vivo transcritas. Lo habitual es que la máquina ordene y descarte en las primeras fases y que la decisión final siga siendo humana, entre otras cosas porque en la UE la normativa empuja en esa dirección.',
        '¿Es legal que me evalúe una IA en un proceso de selección?' => 'Es legal con condiciones. El Reglamento europeo de IA clasifica los sistemas usados para selección y promoción de personal como de alto riesgo, lo que obliga a supervisión humana efectiva, información al candidato y control de sesgos. Además, el RGPD te da derecho a no quedar sujeto a una decisión basada únicamente en tratamiento automatizado con efectos significativos, y a obtener intervención humana. En la práctica: puedes preguntar si hay IA en el proceso y pedir revisión humana de un descarte.',
        '¿Se nota si preparo la entrevista con IA?' => 'No se nota la preparación; se nota la memorización. Una respuesta trabajada con ayuda suena bien y se sostiene cuando repreguntan. Una respuesta escrita por un modelo y aprendida se cae en la primera pregunta de seguimiento, porque el detalle concreto —el nombre del cliente, la cifra, lo que salió mal— no estaba en el texto. Prepara el material y las historias, nunca el guion literal.',
        '¿Puedo usar ChatGPT durante la entrevista?' => 'En una entrevista en vivo, no: la latencia se ve, la mirada se ve y varias empresas lo tratan como motivo de descarte inmediato. En una prueba técnica asíncrona depende de lo que te digan; si la instrucción es que no se use y lo haces, el problema ya no es la IA sino la honestidad. Cuando esté permitido, dilo abiertamente y explica cómo la usaste: en muchos puestos eso puntúa a favor.',
        '¿Qué preguntas hago yo al final?' => 'Las que no puedes responder leyendo la web, que son las únicas que demuestran preparación. Cómo se mide el éxito en ese puesto a los seis meses, qué se ha intentado antes y no funcionó, por qué está vacante la plaza, qué decisión reciente del equipo salió mal y qué aprendieron. Y una específica de tu oficio que solo alguien que conoce el sector sabría hacer.',
    ],
    'ctaTitle' => 'Prompts de RRHH y de candidato, probados',
    'ctaBody' => 'En el catálogo hay skills y prompts para las dos caras del proceso: preparar candidaturas y diseñar procesos de selección que no descarten a quien no toca. Mira <a href="/profesiones/rrhh">RRHH</a>, <a href="/profesiones/ventas">Ventas</a> y <a href="/profesiones/freelancers">Freelancers</a>.',
    'body' => <<<'HTML'
<p>En casi cualquier proceso de selección de 2026 hay dos inteligencias artificiales participando. Una la usas tú para prepararte. La otra la usa la empresa para decidir si llegas a hablar con una persona.</p>

<p>Esta guía va de las dos, porque prepararse sin saber qué hay al otro lado es preparar la mitad.</p>

<h2 id="el-otro-lado">Qué hace la IA al otro lado de la mesa</h2>

<p>Tres puntos del embudo, con implicaciones muy distintas para ti:</p>

<figure>
<table>
    <thead>
        <tr><th>Fase</th><th>Qué hace la IA</th><th>Qué significa para ti</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Cribado</strong></td><td>Compara tu CV con la descripción del puesto y ordena candidaturas</td><td>El vocabulario de la oferta importa: si el puesto dice «facturación recurrente» y tú escribes «ingresos suscripción», puedes no aparecer</td></tr>
        <tr><td><strong>Entrevista asíncrona</strong></td><td>Grabas respuestas a preguntas fijas; se transcriben y se resumen o puntúan</td><td>Se evalúa sobre todo el contenido transcrito: estructura y concreción pesan más que el carisma</td></tr>
        <tr><td><strong>Entrevista en vivo</strong></td><td>Transcribe, resume y genera un informe para el comité</td><td>Lo que quede en el resumen es lo que se discutirá. Repite lo importante con palabras claras</td></tr>
        <tr><td><strong>Decisión</strong></td><td>Ordena y recomienda; en Europa no debería decidir sola</td><td>Tienes derecho a intervención humana si te descarta un sistema automatizado</td></tr>
    </tbody>
</table>
</figure>

<p>La consecuencia práctica más útil de toda esta tabla es una sola: <strong>habla en frases que sobrevivan a un resumen</strong>. Una respuesta con un dato, un verbo de acción y un resultado llega intacta al informe. Una anécdota encantadora de tres minutos sin cifras se convierte en una línea vaga.</p>

<h2 id="derechos">Lo que puedes exigir cuando decide una máquina</h2>

<p>En la Unión Europea esto no es terreno libre. El Reglamento de IA clasifica los sistemas empleados para <strong>selección, cribado y promoción de personal como de alto riesgo</strong>, con obligaciones de supervisión humana efectiva, gestión de sesgos e información a las personas afectadas. En paralelo, el RGPD reconoce el derecho a no quedar sujeto a decisiones basadas <em>únicamente</em> en tratamiento automatizado que produzcan efectos significativos, y a obtener intervención humana, explicación e impugnación.</p>

<p>Traducido a lo que puedes hacer sin sonar conflictivo:</p>

<ul>
    <li>Preguntar, en la primera toma de contacto, si el proceso incluye evaluación automatizada y en qué fase. Es una pregunta normal y se responde.</li>
    <li>Si te descartan en una fase automatizada, pedir por escrito revisión humana. Suele bastar con un correo breve y educado.</li>
    <li>Ejercer acceso a los datos tratados en tu candidatura, incluida la puntuación, si la hubo.</li>
</ul>

<p>Qué obliga exactamente y en qué plazos está desarrollado en <a href="/guias/ai-act-obligaciones-empresas">AI Act: qué obliga a tu empresa</a>. Si eres tú quien monta el proceso de selección, esa guía es lectura obligatoria antes de contratar ninguna herramienta.</p>

<h2 id="preparacion">La preparación que sí mueve la aguja</h2>

<p>El error más extendido es pedirle al modelo las respuestas y aprendérselas. Es la forma más rápida de sonar a folleto y de caerse en la primera repregunta. La preparación que funciona usa la IA para tres cosas —investigar, provocar y criticar— y nunca para hablar por ti.</p>

<ol>
    <li><strong>Investigación (30 minutos).</strong> Qué hace la empresa, cómo gana dinero, qué ha cambiado en el último año, quién compite, qué problema resuelve el puesto. Con búsqueda activada y verificando lo que importe: los modelos confunden empresas con nombres parecidos con una facilidad notable.</li>
    <li><strong>Banco de preguntas (20 minutos).</strong> Las quince más probables para <em>tu</em> perfil y esa oferta, ordenadas por riesgo. Las tres primeras suelen ser los agujeros de tu CV, y son justo las que nadie prepara.</li>
    <li><strong>Material en bruto (60 minutos, tú solo).</strong> Escribes tus respuestas sin pulir, con nombres, cifras y fechas reales. Este paso no se delega: es el único que aporta información que el modelo no tiene.</li>
    <li><strong>Simulacro (30 minutos).</strong> Entrevistador estricto, una pregunta cada vez, con repreguntas. Aquí es donde se descubre qué respuestas no se sostienen.</li>
    <li><strong>Crítica (20 minutos).</strong> Sobre lo que respondiste: qué no se entiende, qué falta, dónde falta un número, qué sonó a tópico.</li>
</ol>

<p>Menos de tres horas, y la diferencia con presentarse «a ver qué preguntan» es enorme.</p>

<h2 id="prompts">Cuatro prompts que hacen el trabajo</h2>

<p><strong>1. Banco de preguntas con los puntos débiles marcados</strong></p>

<p>«Te paso una oferta de empleo y mi CV. Dame las 15 preguntas más probables de esta entrevista, ordenadas de mayor a menor riesgo <em>para mi perfil concreto</em>. Para cada una, una línea diciendo por qué es arriesgada en mi caso. No escribas respuestas todavía.»</p>

<p><strong>2. El simulacro, que es el prompt que más rinde</strong></p>

<p>«Vas a entrevistarme para este puesto. Actúa como [director de marketing exigente y con poco tiempo]. Hazme <em>una</em> pregunta y espera mi respuesta. Si contesto de forma vaga o sin datos, repregunta como lo haría alguien que conoce el oficio. No me des feedback hasta que yo escriba FIN. No escribas mis respuestas.»</p>

<p>Las dos últimas instrucciones son las importantes: sin ellas el modelo se adelanta y te resuelve la entrevista, que es exactamente lo que no quieres.</p>

<p><strong>3. Crítica de una respuesta concreta</strong></p>

<p>«Esta es mi respuesta a [pregunta]: [pega]. Critícala como lo haría quien tiene que defenderme ante un comité: qué no se entiende sin contexto, qué afirmación no está respaldada por un dato, qué sobra y qué falta. No la reescribas.»</p>

<p>El «no la reescribas» evita el atajo. Si la reescribe, la memorizarás, y se notará.</p>

<p><strong>4. Preguntas para el final</strong></p>

<p>«Con lo que sabes de esta empresa y este puesto, dame 8 preguntas que yo pueda hacer al final y que no se respondan leyendo su web. Que dos sean incómodas pero legítimas.»</p>

<h2 id="historias">Tus historias: extraerlas, no inventarlas</h2>

<p>El 80 % de las preguntas de comportamiento se responden con cinco o seis historias bien contadas, reutilizadas y adaptadas. El trabajo consiste en tenerlas listas.</p>

<p>Estructura clásica, que funciona porque sobrevive al resumen: <strong>situación, qué había en juego, qué hiciste tú</strong> —tú, no el equipo— <strong>y qué resultado medible salió</strong>. Si no hay número, sirve un antes y después concreto.</p>

<p>Un uso excelente de la IA aquí: dictarle veinte minutos de trabajo tuyo sin estructura —proyectos, líos, cosas que arreglaste— y pedirle que identifique qué historias hay ahí dentro y a qué tipo de pregunta responde cada una. Es un trabajo de extracción sobre material que aportas tú, y lo hace muy bien.</p>

<p>Lo que nunca: pedirle que invente el ejemplo. Aparte del problema evidente, se derrumba a la segunda repregunta, y cualquier entrevistador decente repregunta.</p>

<p>Ese material se aprovecha además para la candidatura escrita, con el método de <a href="/guias/cv-y-carta-de-presentacion-con-ia">CV y carta de presentación con IA</a>.</p>

<h2 id="grabadas">Entrevistas grabadas y asíncronas</h2>

<p>Cada vez más frecuentes en volumen alto: preguntas fijas, tiempo tasado, sin nadie al otro lado. Cuatro cosas que cambian:</p>

<ul>
    <li><strong>Escríbete un guion de puntos, no de frases.</strong> Cuatro viñetas visibles fuera de cámara. Leer se nota de inmediato.</li>
    <li><strong>Empieza por la conclusión.</strong> Sin tiempo de calentamiento: primera frase, respuesta directa; después el ejemplo.</li>
    <li><strong>Cuida audio y luz antes que el fondo.</strong> Si la transcripción sale mal, tu respuesta se evalúa rota.</li>
    <li><strong>Usa las palabras del puesto.</strong> No por trucar nada: porque quien lea el resumen busca esos conceptos.</li>
</ul>

<h2 id="en-vivo">¿Puedo usar IA durante la entrevista?</h2>

<p>La respuesta honesta, sin rodeos: <strong>en vivo, no</strong>. La pausa para leer se ve, la mirada desplazada se ve, y la respuesta suena distinta del resto de la conversación. Varias empresas lo tratan ya como descarte inmediato y algunas plataformas monitorizan el cambio de ventana.</p>

<p>En pruebas técnicas asíncronas depende de lo que te digan. Si permiten herramientas, úsalas y explica cómo: en muchos puestos de 2026 <em>saber usarlas bien puntúa</em>. Si dicen que no y las usas, el problema deja de ser tecnológico.</p>

<p>Hay un matiz que sí es legítimo y conviene conocer: si tienes una discapacidad o una condición que afecta a la comunicación, puedes solicitar ajustes razonables, y eso incluye apoyos digitales. Se pide antes, no se hace a escondidas durante.</p>

<h2 id="despues">Después: la parte que casi nadie hace</h2>

<p>Nada más colgar, cinco minutos: qué preguntaron exactamente, dónde te atascaste, qué no supiste responder. Esa lista es la mejor preparación que vas a tener para la siguiente entrevista, en esa empresa o en otra, y a las dos horas ya no la recuerdas igual.</p>

<p>Con esas notas, dos usos concretos: preparar la siguiente ronda atacando justo los puntos flojos, y redactar el correo de seguimiento —breve, con una aportación real sobre algo que se habló, no un agradecimiento genérico—.</p>

<p>Y si el proceso no sale, el registro sigue valiendo. Tres entrevistas anotadas dicen más sobre qué tienes que reforzar que cualquier consejo general, incluido este.</p>
HTML,
];
