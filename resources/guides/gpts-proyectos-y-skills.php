<?php

return [
    'title' => 'GPTs, proyectos y skills: dejar de reescribir el mismo prompt',
    'navTitle' => 'GPTs, proyectos y skills',
    'seoTitle' => 'GPT personalizado, proyecto o skill: cuál necesitas',
    'description' => 'Cuatro formas de guardar un prompt para no repetirlo: instrucciones, proyecto, GPT y skill. Qué resuelve cada una y cuándo se queda corta.',
    'excerpt' => 'Casi todo el mundo que usa IA a diario tiene el mismo problema: el prompt bueno existe, funcionó, y ahora está enterrado en una conversación de hace tres semanas. El arreglo no es escribir mejor, es guardar mejor.',
    'category' => 'Método',
    'published' => '2026-09-05',
    'updated' => '2026-09-05',
    'readingMinutes' => 11,
    'words' => 1829,
    'about' => 'Reutilización de instrucciones en asistentes de IA mediante GPTs, proyectos y skills',
    'related' => ['que-son-los-skills-de-claude-code', 'como-escribir-prompts-efectivos', 'agent-skills-estandar-abierto'],
    'toc' => [
        'problema' => 'El prompt bueno siempre está en otra conversación',
        'cuatro-niveles' => 'Cuatro niveles de reutilización',
        'cual' => 'Cuál te toca: tres preguntas',
        'anatomia' => 'Qué contiene una instrucción reutilizable que aguanta',
        'ficheros' => 'El adjunto que cambia el resultado, y el que lo estropea',
        'equipo' => 'Cuando lo comparte un equipo: la parte que nadie planifica',
        'errores' => 'Cinco errores que hacen inútil el activo',
        'empezar' => 'Por dónde empezar esta semana',
    ],
    'faq' => [
        '¿Qué diferencia hay entre un GPT y un proyecto de ChatGPT?' => 'Un GPT es un asistente empaquetado y compartible: tiene nombre, instrucciones fijas, ficheros de referencia y se puede publicar para que otros lo usen tal cual. Un proyecto es un espacio de trabajo: agrupa conversaciones sobre un mismo asunto, con instrucciones e historial propios, y está pensado para que tú vuelvas a él, no para distribuirlo. La regla corta: si el activo lo va a usar mucha gente sin tocarlo, GPT; si lo vas a usar tú durante semanas sobre un tema que evoluciona, proyecto.',
        '¿Qué es un skill y en qué se diferencia de un GPT?' => 'Un skill es una carpeta con instrucciones en Markdown que el asistente carga solo cuando la tarea lo requiere, y que puede llevar dentro ficheros y scripts. La diferencia práctica está en tres cosas: se activa por contexto en lugar de elegirlo tú en un menú, vive en un repositorio y por tanto se versiona y se revisa como código, y no está atado a un único proveedor desde que el formato es abierto. Un GPT es una entrada en un catálogo; un skill es un artefacto que se despliega.',
        '¿Cómo hago que la IA recuerde las instrucciones de mi empresa?' => 'Sacándolas de la conversación y poniéndolas donde se apliquen solas. Las instrucciones personalizadas de la cuenta valen para preferencias tuyas de siempre; las de un proyecto, para un contexto concreto; un GPT o un skill, para algo que otros van a usar. Lo que no funciona es pegar el mismo bloque al principio de cada chat: se degrada, cada persona guarda su versión y nadie sabe cuál es la buena. Ese es el síntoma que indica que toca subir un nivel.',
        '¿Cuántos ficheros debo subir a un GPT o un proyecto?' => 'Menos de los que apetece. El error habitual es cargar veinte documentos «por si acaso»: la recuperación empeora porque hay más material parecido entre sí, y las respuestas empiezan a mezclar versiones antiguas con vigentes. Tres a cinco documentos limpios, vigentes y sin duplicados dan mejor resultado que veinte con tres generaciones del mismo manual. Si un fichero no lo abriría un compañero nuevo en su primera semana, probablemente tampoco debería estar ahí.',
        '¿Merece la pena crear un GPT personalizado o basta con un prompt guardado?' => 'Depende de cuántas veces al mes se ejecute y de cuánta gente lo use. Para algo que haces tú dos veces al mes, un prompt en una nota es suficiente y montar un activo es sobreingeniería. A partir de una vez por semana, o en cuanto lo usa una segunda persona, el prompt guardado empieza a costar más de lo que ahorra: se copia mal, se edita a mano y nadie sabe qué versión es la buena. Ese cruce es el momento de empaquetarlo.',
        '¿Se pueden versionar y revisar estos activos como código?' => 'Los skills sí, y esa es su ventaja principal: al ser ficheros de texto en un repositorio, pasan por pull request, tienen historial y se puede saber quién cambió qué y por qué. Los GPTs y los proyectos se editan en una interfaz web sin historial visible ni revisión previa, así que la disciplina hay que ponerla fuera: mantener el texto de las instrucciones en un fichero versionado y tratar la interfaz como el sitio donde se publica, no donde se escribe.',
    ],
    'ctaTitle' => 'Mil prompts ya empaquetados por profesión',
    'ctaBody' => 'El catálogo es exactamente esto aplicado a escala: instrucciones probadas, listas para pegar en un proyecto o convertir en skill. Empieza por <a href="/profesiones/marketing">Marketing</a>, <a href="/profesiones/desarrollo">Desarrollo</a> o <a href="/profesiones/rrhh">RRHH</a>.',
    'body' => <<<'HTML'
<p>Hace tres semanas escribiste el prompt que por fin devolvía el informe con el formato correcto. Lo recuerdas: llevaba el contexto de la empresa, dos ejemplos y la instrucción rara que arreglaba el tono. Hoy lo necesitas otra vez y no aparece. Está en alguna conversación de un jueves, entre otras cuarenta.</p>

<p>Así que lo reescribes de memoria. Sale peor. Y el mes que viene volverás a reescribirlo, un poco peor todavía.</p>

<h2 id="problema">El prompt bueno siempre está en otra conversación</h2>

<p>Este ciclo tiene un nombre poco glamuroso: el trabajo no se acumula. Cada conversación empieza de cero, así que el conocimiento que vas ganando sobre cómo hablarle al modelo se evapora en el historial en lugar de convertirse en algo que puedas usar mañana.</p>

<p>Los síntomas son fáciles de reconocer, y si te ves en dos de estos tres, el problema ya está instalado:</p>

<ul>
    <li>Empiezas los chats importantes pegando un bloque de contexto que has copiado de otro chat.</li>
    <li>Tienes un documento, una nota o un canal donde guardas «prompts buenos» que nadie más consulta.</li>
    <li>Dos personas de tu equipo hacen la misma tarea con instrucciones distintas, y ninguna sabe cuál funciona mejor.</li>
</ul>

<p>La solución no es escribir prompts más elaborados. Es sacarlos de la conversación y ponerlos en un sitio donde se apliquen solos.</p>

<h2 id="cuatro-niveles">Cuatro niveles de reutilización</h2>

<p>Hay cuatro contenedores distintos, y se confunden constantemente porque los nombres comerciales cambian cada seis meses. Lo que no cambia es lo que resuelve cada uno.</p>

<figure>
<table>
    <thead>
        <tr><th>Nivel</th><th>Qué es</th><th>Alcance</th><th>Cuándo se queda corto</th></tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>1. Instrucciones de cuenta</strong></td>
            <td>Preferencias que se aplican a todas tus conversaciones</td>
            <td>Solo tú, en todo</td>
            <td>En cuanto una tarea necesita reglas propias que estorban en el resto</td>
        </tr>
        <tr>
            <td><strong>2. Proyecto</strong></td>
            <td>Espacio con instrucciones, ficheros e historial propios</td>
            <td>Tú (o tu equipo) en un tema</td>
            <td>Cuando hay que distribuirlo a gente que no debe poder editarlo</td>
        </tr>
        <tr>
            <td><strong>3. GPT o asistente publicado</strong></td>
            <td>Asistente empaquetado con nombre, instrucciones y ficheros</td>
            <td>Cualquiera con el enlace</td>
            <td>Cuando necesitas versionado, revisión o salir de un solo proveedor</td>
        </tr>
        <tr>
            <td><strong>4. Skill</strong></td>
            <td>Carpeta con Markdown, ficheros y scripts que el modelo carga bajo demanda</td>
            <td>Repositorio, equipo, CI</td>
            <td>Cuando la tarea deja de ser texto y necesita permisos y datos en vivo</td>
        </tr>
    </tbody>
</table>
</figure>

<p>Los tres primeros niveles se eligen desde un menú: tú decides qué asistente abrir. El cuarto funciona al revés, y ese es su rasgo distintivo: <strong>el skill se activa cuando la tarea encaja con su descripción</strong>, sin que nadie lo seleccione. Por eso su descripción importa tanto como su contenido, algo que está desarrollado en la guía sobre <a href="/guias/que-son-los-skills-de-claude-code">qué son los skills</a>.</p>

<p>Por encima del cuarto nivel hay un quinto que conviene nombrar para no confundirlo: conectar el asistente a sistemas reales —tu CRM, tu base de datos, tus tickets— mediante MCP. Eso ya no es reutilizar un prompt, es darle acceso, con las decisiones de permisos que eso arrastra. Va aparte, en la <a href="/guias/plugins-y-mcp-en-claude-code">guía de plugins y MCP</a>.</p>

<h2 id="cual">Cuál te toca: tres preguntas</h2>

<p>La elección se resuelve casi siempre con tres respuestas, y en este orden.</p>

<p><strong>¿Cuántas veces al mes se ejecuta?</strong> Por debajo de dos, no empaquetes nada: una nota con el prompt es suficiente y cualquier otra cosa es sobreingeniería. Entre dos y ocho, un proyecto. Por encima de ocho, o si forma parte de un proceso, merece un activo con nombre.</p>

<p><strong>¿Quién más lo usa?</strong> Solo tú: proyecto. Tu equipo, con permiso para adaptarlo: proyecto compartido. Gente que debe usarlo sin modificarlo, incluida gente que se incorpora: GPT o skill. Esta pregunta pesa más que la anterior, porque es la que decide si hace falta que el activo tenga una versión canónica.</p>

<p><strong>¿Necesita evolucionar con control?</strong> Si el activo codifica algo que cambia —la política de descuentos, el tono de marca, el formato del informe trimestral— y equivocarse tiene coste, necesitas historial y revisión. Eso hoy solo lo dan bien los skills, porque son ficheros en un repositorio. Un GPT editado a mano por cuatro personas en tres meses es una deuda esperando.</p>

<p>Un atajo que funciona en la mayoría de las organizaciones: <strong>los proyectos son para explorar, los skills para lo que ya está decidido</strong>. Trabajas en un proyecto hasta que las instrucciones se estabilizan y entonces lo conviertes en skill.</p>

<h2 id="anatomia">Qué contiene una instrucción reutilizable que aguanta</h2>

<p>Un prompt de conversación y una instrucción reutilizable se escriben distinto, y no es cuestión de longitud. El prompt de conversación puede dar cosas por supuestas porque tú estás delante para corregir. La instrucción reutilizable se ejecuta sin ti.</p>

<p>Lo que no puede faltar:</p>

<ol>
    <li><strong>Cuándo aplica y cuándo no.</strong> La frontera explícita evita que el activo se use para lo que no sirve. En un skill esto va en la descripción y es lo que decide si se carga.</li>
    <li><strong>El contexto estable.</strong> Quién es la empresa, a quién le hablas, qué vocabulario se usa y cuál está prohibido. Todo lo que hoy pegas a mano cada vez.</li>
    <li><strong>El formato de salida, descrito hasta el detalle aburrido.</strong> Secciones, orden, longitud, qué va en tabla. Aquí la ambigüedad se paga cada ejecución.</li>
    <li><strong>Uno o dos ejemplos completos.</strong> Un ejemplo bueno hace más que tres párrafos de explicación, y es lo primero que se omite por prisa.</li>
    <li><strong>Qué hacer cuando falta información.</strong> Sin esta regla, el modelo rellena el hueco. Con ella —«si falta el dato, márcalo como PENDIENTE y sigue»— el hueco queda visible.</li>
    <li><strong>Un criterio de terminado.</strong> Tres o cuatro comprobaciones que el propio modelo aplica antes de devolver. Sube la calidad media sin coste.</li>
</ol>

<p>El punto cinco es el que más devuelve y el que casi nadie escribe. Un activo compartido se ejecuta a menudo con menos contexto del que tú tenías cuando lo probaste, así que la pregunta no es qué hace con la información completa, sino qué hace cuando le falta la mitad.</p>

<h2 id="ficheros">El adjunto que cambia el resultado, y el que lo estropea</h2>

<p>Poder adjuntar documentos es lo que convierte un asistente genérico en uno que conoce tu casa. También es donde más rápido se degrada.</p>

<p>La intuición dice que más material es mejor contexto. En la práctica ocurre lo contrario a partir de cierto punto: cuando hay veinte documentos parecidos entre sí, la recuperación empieza a devolver el fragmento equivocado, y como la respuesta sigue sonando segura, el error no se ve. El caso típico es el manual con tres versiones: el modelo cita la de 2024 con el mismo aplomo que la vigente.</p>

<p>Tres reglas que evitan casi todo:</p>

<ul>
    <li><strong>Un documento por asunto, en su versión vigente.</strong> Si hay dos versiones, borra una. No hay ninguna configuración que arregle esto.</li>
    <li><strong>Documentos con estructura, no volcados.</strong> Un PDF escaneado sin texto o una exportación de mil páginas sin encabezados aportan ruido. Un documento con títulos claros se recupera bien.</li>
    <li><strong>Fecha visible dentro del propio documento.</strong> Así, cuando el modelo cita, la cita trae su fecha y tú puedes detectar que viene de material caducado.</li>
</ul>

<p>Y una precaución que no es técnica: lo que subes a un asistente compartido lo ve todo el que tenga acceso al asistente, no todo el que tenga acceso al documento original. Los permisos del sistema de ficheros no viajan con el adjunto. Es la vía más común de filtración interna involuntaria, y está tratada en la guía de <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar IA sin filtrar datos de clientes</a>.</p>

<h2 id="equipo">Cuando lo comparte un equipo: la parte que nadie planifica</h2>

<p>Compartir un activo es fácil. Mantenerlo vivo es lo que falla, y falla siempre por el mismo sitio: nadie es dueño.</p>

<p>El patrón que se repite: alguien monta un GPT excelente, el equipo lo adopta, funciona tres meses. Cambia la política de precios. El GPT sigue diciendo lo anterior. Nadie lo actualiza porque no está claro de quién es, y como sigue respondiendo con seguridad, tardan seis semanas en darse cuenta. Para entonces la gente ya ha vuelto a escribir sus propios prompts.</p>

<p>Cuatro cosas evitan ese final, y son baratas si se ponen desde el principio:</p>

<ul>
    <li><strong>Un responsable con nombre</strong>, escrito dentro del propio activo. No un equipo: una persona.</li>
    <li><strong>Fecha de última revisión visible en la salida.</strong> Que cada respuesta arrastre «instrucciones revisadas el [fecha]» hace evidente lo caducado sin que nadie audite nada.</li>
    <li><strong>Un sitio donde reportar fallos</strong>, aunque sea un canal. Sin eso, quien detecta el error simplemente deja de usarlo y no lo cuenta.</li>
    <li><strong>Revisión en el calendario</strong>, trimestral. Diez minutos. Si no está en el calendario, no ocurre.</li>
</ul>

<p>Cuando el activo es un skill en un repositorio, tres de esas cuatro salen gratis: el responsable es quien aparece en el historial, los cambios pasan por revisión y el fallo se reporta como una incidencia. Es la razón práctica por la que el formato de fichero gana al formato de interfaz web en cuanto hay más de dos personas implicadas.</p>

<h2 id="errores">Cinco errores que hacen inútil el activo</h2>

<figure>
<table>
    <thead>
        <tr><th>Error</th><th>Qué provoca</th><th>Arreglo</th></tr>
    </thead>
    <tbody>
        <tr><td>Instrucciones de trescientas líneas</td><td>El modelo prioriza mal y se salta la mitad</td><td>Una tarea por activo; si hay dos, son dos activos</td>
        </tr>
        <tr><td>Descripción vaga</td><td>El skill no se activa nunca, o se activa siempre</td><td>Nombrar los términos concretos con los que la gente pide la tarea</td></tr>
        <tr><td>Reglas contradictorias acumuladas</td><td>Salida inconsistente entre ejecuciones</td><td>Releer entero al editar, no solo añadir al final</td></tr>
        <tr><td>Ejemplos inventados</td><td>Copia el estilo del ejemplo falso, no el tuyo</td><td>Usar una salida real que te pareciera buena</td></tr>
        <tr><td>Sin regla para datos que faltan</td><td>Rellena huecos con lo plausible</td><td>«Si falta X, escribe PENDIENTE y continúa»</td></tr>
    </tbody>
</table>
</figure>

<p>El primero es el más frecuente con diferencia. Un activo que empieza resolviendo una tarea acaba, a fuerza de parches, intentando resolver seis, y a partir de ahí no resuelve bien ninguna. La señal de alarma es tener que explicar a alguien «úsalo, pero para lo de los informes ignora la parte de arriba».</p>

<h2 id="empezar">Por dónde empezar esta semana</h2>

<p>No hace falta un plan. Hace falta una tarea concreta y una hora.</p>

<ol>
    <li><strong>Elige la tarea que más repites.</strong> No la más importante: la más repetida. Suele ser un resumen, un informe o un tipo de correo.</li>
    <li><strong>Busca la última vez que salió bien</strong> y recupera ese prompt del historial. Ese es el borrador, no lo escribas de nuevo.</li>
    <li><strong>Añádele lo que falta:</strong> cuándo aplica, qué hacer si falta un dato, cómo debe ser la salida, un ejemplo real.</li>
    <li><strong>Ponlo en un proyecto</strong> y úsalo una semana sin tocarlo. Anota cada vez que tengas que corregir algo a mano.</li>
    <li><strong>Corrige con esas notas y decide:</strong> si solo lo usas tú, se queda como proyecto; si lo va a usar alguien más, se convierte en skill.</li>
</ol>

<p>La parte que hace que esto funcione es el paso cuatro, y es la que se salta todo el mundo. Un activo se afina con lo que falla en uso real, no con lo que uno imagina al escribirlo. Una semana de anotar correcciones vale más que una tarde entera puliendo el texto en abstracto.</p>

<p>Y la regla que queda por encima de todas: <strong>si has escrito el mismo prompt tres veces, ya no es un prompt, es una herramienta a medio hacer</strong>. Lo único que falta es sacarla de la conversación.</p>
HTML,
];
