<?php

return [
    'title' => 'Por qué la IA empeora en conversaciones largas: la ventana de contexto',
    'navTitle' => 'La ventana de contexto',
    'seoTitle' => 'Por qué la IA empeora en conversaciones largas',
    'description' => 'Qué es la ventana de contexto, por qué el modelo se vuelve peor mucho antes de llenarla y qué hacer para que no te pase en medio de un trabajo.',
    'excerpt' => 'No es impresión tuya: a partir de cierto punto el modelo olvida lo que acordasteis, repite errores corregidos y contesta peor. Qué es la ventana de contexto, por qué el problema aparece mucho antes de llenarla y cómo trabajar para que no te arruine una tarde.',
    'category' => 'Fundamentos',
    'published' => '2026-09-17',
    'updated' => '2026-09-17',
    'readingMinutes' => 10,
    'words' => 1680,
    'about' => 'Ventana de contexto y degradación del rendimiento en modelos de lenguaje',
    'related' => ['como-escribir-prompts-efectivos', 'resumir-documentos-largos-con-ia', 'alucinaciones-de-la-ia'],
    'toc' => [
        'que-es' => 'Qué es la ventana de contexto',
        'no-es-memoria' => 'Por qué no es memoria, aunque lo parezca',
        'context-rot' => 'El hallazgo incómodo: empeora mucho antes de llenarse',
        'sintomas' => 'Los cuatro síntomas, y qué significa cada uno',
        'que-hacer' => 'Qué hacer: siete hábitos',
        'reinicio' => 'Cómo reiniciar sin perder el trabajo',
        'documentos' => 'El caso especial de los documentos largos',
    ],
    'faq' => [
        '¿Qué es la ventana de contexto de una IA?' => 'Es todo lo que el modelo puede tener delante al generar una respuesta: las instrucciones del sistema, tu conversación entera, los archivos que has adjuntado y lo que él mismo ha ido escribiendo. Se mide en tokens, fragmentos de palabra que en español vienen a ser unas tres cuartas partes de una palabra. Cuando la conversación excede ese límite, lo más antiguo se descarta o se resume, y el modelo deja de tener acceso literal a ello.',
        '¿Cuántas palabras caben en una ventana de contexto?' => 'Depende del modelo, y los tamaños han crecido mucho: los modelos actuales de uso general van de unos cientos de miles de tokens a más de un millón en las versiones ampliadas. Como regla mental, 100.000 tokens son del orden de 70.000 u 80.000 palabras en español, es decir un libro corto. El número exacto importa menos de lo que parece, porque el rendimiento cae mucho antes de rozar el techo.',
        '¿Por qué la IA se olvida de lo que le dije antes?' => 'Por dos motivos distintos que conviene no mezclar. Uno: si la conversación superó la ventana, esa parte ya no está y no hay nada que recordar. Dos, mucho más frecuente: sigue estando, pero enterrada entre miles de tokens, y el modelo reparte mal la atención. El segundo caso es el traicionero, porque el dato está ahí y aun así la respuesta lo ignora.',
        '¿Qué es el context rot?' => 'El nombre que se le ha dado a la degradación medible del rendimiento a medida que crece la entrada, aunque quepa de sobra. La investigación de Chroma que popularizó el término probó 18 modelos punteros y encontró el mismo patrón en todos: la precisión baja según se alarga el contexto, con caídas notables mucho antes de llegar al límite anunciado. No es un fallo de un modelo concreto, es cómo funcionan hoy.',
        '¿Es mejor una conversación larga o varias cortas?' => 'Varias cortas, casi siempre. Una conversación por tarea, con el contexto necesario al principio, produce mejores resultados que un hilo eterno donde se mezclan cinco asuntos. La excepción es cuando el trabajo acumula decisiones que dependen unas de otras; incluso ahí conviene resumir y reiniciar cada cierto tiempo en lugar de dejar que el hilo crezca sin control.',
        '¿Sirve de algo adjuntar el documento entero?' => 'Solo si vas a preguntar sobre todo él. Adjuntar 200 páginas para preguntar por el apartado 4 empeora la respuesta: añade miles de tokens de ruido que compiten por la atención del modelo. Si sabes qué parte importa, pega esa parte. Cuando el documento es grande de verdad y hay que consultarlo muchas veces, la herramienta adecuada es un cuaderno de fuentes como Gemini Notebook, no un adjunto en el chat.',
    ],
    'ctaTitle' => 'Menos hilo eterno, más instrucción guardada',
    'ctaBody' => 'La mejor forma de no arrastrar contexto es no tener que reescribirlo: guarda tus instrucciones como skill y empieza limpio cada vez. Tienes cientos ya escritas en el catálogo por <a href="/profesiones">profesión</a>.',
    'body' => <<<'HTML'
<p>Empieza bien. Le explicas el proyecto, acordáis un tono, corriges un par de cosas y funciona. Dos horas después, el mismo modelo, en el mismo chat, vuelve a proponerte lo que descartasteis al principio, se inventa un dato que estaba tres mensajes más arriba y contesta con una vaguedad que no habría firmado al empezar.</p>

<p>No se ha estropeado, no es tu imaginación y no es que se haya «cansado». Es un comportamiento medido, sistemático y común a todos los modelos, y una vez que entiendes de dónde viene se esquiva con cuatro hábitos.</p>

<h2 id="que-es">Qué es la ventana de contexto</h2>

<p>Un modelo de lenguaje no recuerda nada entre una respuesta y la siguiente. Lo que hace es leer de nuevo, cada vez, todo lo que hay en la conversación y generar la continuación. Ese «todo» es la ventana de contexto, e incluye cuatro cosas:</p>

<ul>
    <li>Las instrucciones del sistema, que tú no ves, y las instrucciones personalizadas que hayas configurado.</li>
    <li>Todos los mensajes de la conversación, los tuyos y los suyos.</li>
    <li>Los archivos adjuntos y lo que haya traído de una búsqueda o de una herramienta.</li>
    <li>Lo que está generando en este momento.</li>
</ul>

<p>Se mide en <em>tokens</em>, fragmentos de palabra. En español, una regla de bolsillo razonable es que <strong>1.000 tokens equivalen más o menos a 700 palabras</strong>. Los modelos actuales anuncian ventanas que van de unos cientos de miles de tokens hasta más de un millón en sus versiones ampliadas: un libro entero, sobre el papel.</p>

<h2 id="no-es-memoria">Por qué no es memoria, aunque lo parezca</h2>

<p>La diferencia importa porque explica los fallos raros. Cuando la conversación supera el límite, el sistema no avisa: va descartando o resumiendo lo más antiguo para hacer sitio. Tú sigues viendo tus mensajes iniciales en la pantalla, pero el modelo ya no los tiene delante. De ahí esa sensación de estar hablando con alguien que ha perdido el hilo mientras tú miras el hilo entero.</p>

<p>Algunos productos añaden encima una memoria entre conversaciones —recuerdan tu nombre, tu empresa, tus preferencias— y eso confunde todavía más. Son dos cosas distintas: <strong>la memoria guarda unos pocos hechos sobre ti; la ventana de contexto es lo que el modelo lee para esta respuesta concreta</strong>. Que recuerde a qué te dedicas no significa que tenga presente lo que acordasteis hace cuarenta mensajes.</p>

<h2 id="context-rot">El hallazgo incómodo: empeora mucho antes de llenarse</h2>

<p>Lo esperable sería que un modelo funcionara igual de bien hasta rozar su límite y fallara ahí. No es lo que ocurre.</p>

<p>La investigación que popularizó el término <em>context rot</em>, publicada por Chroma en 2025, probó 18 modelos punteros midiendo una misma tarea a distintas longitudes de entrada, con la dificultad constante y variando solo cuánto texto había alrededor. El resultado fue consistente en los 18: <strong>la precisión cae a medida que crece la entrada, y la caída empieza mucho antes del techo anunciado</strong>. Un modelo con ventana de 200.000 tokens puede estar rindiendo claramente peor a 50.000.</p>

<p>Dos detalles de ese trabajo que cambian cómo conviene trabajar:</p>

<ul>
    <li><strong>Los distractores pesan.</strong> Texto relacionado pero irrelevante hace más daño que texto claramente ajeno. Meter tres versiones parecidas de un mismo documento es peor que meter una.</li>
    <li><strong>La degradación es silenciosa.</strong> No hay mensaje de error ni aviso. El modelo sigue respondiendo con el mismo aplomo, y esa seguridad constante mientras la calidad baja es exactamente el terreno donde aparecen <a href="/guias/alucinaciones-de-la-ia">las alucinaciones</a>.</li>
</ul>

<p>Conclusión práctica: <strong>una ventana grande es un techo, no una recomendación</strong>. Que quepa un libro no significa que convenga meterlo.</p>

<h2 id="sintomas">Los cuatro síntomas, y qué significa cada uno</h2>

<figure>
<table>
    <thead>
        <tr><th>Lo que ves</th><th>Qué está pasando</th><th>Qué hacer</th></tr>
    </thead>
    <tbody>
        <tr><td>Repite una propuesta que ya descartasteis</td><td>La instrucción quedó enterrada o se ha salido de la ventana</td><td>Vuelve a decirla, en el mensaje actual y en una línea</td></tr>
        <tr><td>Contesta más genérico que al principio</td><td>Atención repartida entre demasiado material</td><td>Conversación nueva con solo lo que importa</td></tr>
        <tr><td>Mezcla datos de dos asuntos distintos</td><td>Interferencia entre temas del mismo hilo</td><td>Un hilo por tarea, sin excepciones</td></tr>
        <tr><td>Reintroduce un error que ya corregisteis</td><td>La corrección quedó lejos y pesa menos que el patrón original</td><td>Convierte la corrección en regla explícita al reiniciar</td></tr>
    </tbody>
</table>
</figure>

<p>Los cuatro tienen el mismo remedio de fondo, y es el que más cuesta aplicar porque parece un paso atrás: <strong>reducir lo que hay delante del modelo</strong>.</p>

<h2 id="que-hacer">Qué hacer: siete hábitos</h2>

<ol>
    <li><strong>Un hilo por tarea.</strong> El chat eterno es cómodo y caro. Abrir conversaciones nuevas no pierde nada que importe, porque lo que importa lo vas a reescribir en tres líneas.</li>
    <li><strong>Lo esencial, al principio y al final.</strong> Si tienes que pegar material largo, pon la instrucción antes y repítela en una frase después. Es lo que peor sobrevive cuando el contexto crece.</li>
    <li><strong>Pega el fragmento, no el documento.</strong> Si sabes que la respuesta está en el apartado 4, adjuntar las 200 páginas solo añade competencia por la atención.</li>
    <li><strong>Una sola versión de cada cosa.</strong> Nada de tres borradores parecidos «por si acaso». Son distractores, que es justo la categoría que más daño hace.</li>
    <li><strong>Pide el estado antes de seguir.</strong> «Resume en diez puntos las decisiones que hemos tomado» es un diagnóstico gratuito: si el resumen se deja algo importante, ya sabes que esa parte ha dejado de existir para él.</li>
    <li><strong>Reinicia al notar el primer síntoma, no al tercero.</strong> Seguir insistiendo en un hilo degradado cuesta más tiempo que empezar limpio.</li>
    <li><strong>Guarda las instrucciones fuera del chat.</strong> Lo que repites en cada conversación no debería escribirse a mano cada vez: eso es exactamente lo que resuelven <a href="/guias/gpts-proyectos-y-skills">los proyectos, los GPTs y los skills</a>.</li>
</ol>

<h2 id="reinicio">Cómo reiniciar sin perder el trabajo</h2>

<p>El reinicio da pereza porque parece que tiras dos horas de conversación. En realidad tiras el ruido y te quedas con lo bueno, y lleva dos minutos:</p>

<ol>
    <li>En el hilo viejo, pide: <em>«Resume el estado de este trabajo para retomarlo en una conversación nueva: objetivo, decisiones tomadas, restricciones que te he dado, qué queda pendiente. Sin relleno.»</em></li>
    <li>Abre un chat nuevo y pega ese resumen, más la versión actual del entregable.</li>
    <li>Añade, en una lista corta, las correcciones que más te costó conseguir. Son las primeras que se pierden.</li>
    <li>Sigue desde ahí.</li>
</ol>

<p>Notarás la mejora en la primera respuesta. El mismo modelo, con el mismo objetivo, vuelve a ser preciso porque ha dejado de leer mil mensajes para contestar a uno.</p>

<h2 id="documentos">El caso especial de los documentos largos</h2>

<p>Con contratos, informes o expedientes hay una tentación evidente: subirlo todo y preguntar. Funciona para lo literal —encontrar una cláusula, localizar una cifra— y funciona bastante mal para lo que de verdad se pide en el trabajo: comparar, sintetizar, detectar lo que falta. Eso exige tener presente todo el documento a la vez, y es justo lo que se degrada.</p>

<p>Tres alternativas, por orden de esfuerzo:</p>

<ul>
    <li><strong>Trocear por secciones</strong> y preguntar por cada una, consolidando tú al final. Aburrido y muy fiable.</li>
    <li><strong>Un cuaderno de fuentes</strong> como <a href="/guias/gemini-notebook-antes-notebooklm">Gemini Notebook</a>, pensado para consultar un corpus muchas veces sin arrastrarlo en cada mensaje.</li>
    <li><strong>Resumen en dos pasadas:</strong> primero extraes los puntos, luego trabajas sobre los puntos. Cómo hacerlo sin perder lo importante está en <a href="/guias/resumir-documentos-largos-con-ia">la guía de resúmenes</a>.</li>
</ul>

<p>Y la comprobación que no deberías saltarte nunca: <strong>si el documento importa, verifica contra el original al menos una afirmación de las que te dé</strong>. No porque el modelo mienta a propósito, sino porque el error, cuando llega, llega con el mismo tono seguro que los aciertos.</p>
HTML,
];
