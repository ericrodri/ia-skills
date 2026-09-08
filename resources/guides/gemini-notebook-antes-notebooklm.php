<?php

return [
    'title' => 'Gemini Notebook (antes NotebookLM): un cuaderno por expediente',
    'navTitle' => 'Gemini Notebook',
    'seoTitle' => 'Gemini Notebook (antes NotebookLM): guía para trabajar',
    'description' => 'NotebookLM ahora es Gemini Notebook: responde solo con lo que subes y cita la fuente. Cómo montar un cuaderno por expediente y qué preguntarle.',
    'excerpt' => 'La diferencia entre esta herramienta y un chat cualquiera cabe en una frase: aquí el modelo no puede contarte nada que no esté en los documentos que tú has subido, y cada afirmación viene con el sitio exacto de donde salió.',
    'category' => 'Herramientas',
    'published' => '2026-09-08',
    'updated' => '2026-09-08',
    'readingMinutes' => 9,
    'words' => 1516,
    'about' => 'Gemini Notebook (anteriormente NotebookLM) como herramienta de trabajo documental anclada en fuentes',
    'related' => ['resumir-documentos-largos-con-ia', 'alucinaciones-de-la-ia', 'investigar-con-ia-deep-research'],
    'toc' => [
        'que-es' => 'Qué es, en una frase',
        'cambio-de-nombre' => 'El cambio de nombre: qué cambia y qué no',
        'por-que-cita' => 'Por qué las citas cambian el tipo de trabajo que puedes hacer',
        'un-cuaderno-por-expediente' => 'Un cuaderno por expediente, no un cuaderno para todo',
        'montarlo' => 'Cómo se monta un cuaderno que sirve',
        'preguntas' => 'Las preguntas que aprovechan la herramienta',
        'limites' => 'Los límites que hay que conocer antes',
        'cuando-no' => 'Cuándo no es la herramienta',
    ],
    'faq' => [
        '¿NotebookLM ha cambiado de nombre?' => 'Sí. Google anunció el 16 de julio de 2026 que NotebookLM pasa a llamarse Gemini Notebook, dentro del movimiento de agrupar sus productos de IA bajo la marca Gemini. Es un cambio de nombre y de integración, no de producto: los cuadernos que ya tenías siguen ahí, las fuentes no hay que volver a subirlas y no existe ninguna herramienta de reemplazo que aprender. Sigue siendo una aplicación independiente centrada en investigar sobre documentos propios, con la diferencia de que ahora se sincroniza con la app de Gemini y se acerca al resto del ecosistema de Google.',
        '¿Para qué sirve Gemini Notebook en el trabajo?' => 'Para trabajar sobre un corpus cerrado de documentos con la garantía de que las respuestas salen de ahí y no de internet. Los casos que mejor funcionan en oficina son los que tienen forma de expediente: un cliente con su contrato, sus anexos y su correspondencia; una normativa con sus guías de aplicación; un producto con sus entrevistas de usuario y sus especificaciones. En vez de buscar en qué documento estaba aquello, preguntas y te responde citando el documento y el punto exacto.',
        '¿Gemini Notebook es gratis?' => 'Hay una versión gratuita utilizable con una cuenta de Google, y planes de pago —Google AI Pro y Ultra— que amplían los límites de uso y reciben antes las funciones nuevas. La ejecución de código nativa para análisis de datos sobre tus propias fuentes, anunciada junto al cambio de nombre, empezó por los usuarios de Ultra y ciertos clientes de Workspace antes de extenderse a los de Pro. Para probar si la herramienta encaja con tu forma de trabajar, la versión gratuita basta de sobra.',
        '¿Qué diferencia hay entre Gemini Notebook y ChatGPT o Claude para documentos?' => 'El anclaje. Un chat generalista con archivos adjuntos mezcla lo que le subes con lo que aprendió durante el entrenamiento, y no distingue entre ambas cosas al responder. Gemini Notebook responde a partir de las fuentes del cuaderno y señala de cuál sale cada afirmación, lo que hace verificable la respuesta en segundos. A cambio pierde flexibilidad: no aporta conocimiento externo, no razona sobre lo que no le has dado y no sustituye a un chat cuando lo que necesitas es precisamente una opinión de fuera.',
        '¿Puedo subir documentos confidenciales a Gemini Notebook?' => 'La pregunta correcta no es sobre la herramienta sino sobre la cuenta. Lo que determina el tratamiento de esos documentos es si estás en una cuenta personal gratuita o en una cuenta de Workspace corporativa con contrato de tratamiento de datos firmado, porque las condiciones no son las mismas. En cuenta personal, subir el expediente completo de un cliente con nombres, importes y condiciones contractuales es una cesión que probablemente no cubre ningún acuerdo. En Workspace corporativo el marco es el que la organización ya haya aceptado.',
        '¿Se puede fiar uno de los resúmenes de Gemini Notebook?' => 'Más que de los de un chat generalista, y aun así conviene comprobar. El anclaje en fuentes reduce mucho el tipo de error más común —la afirmación inventada que suena bien— pero no elimina otros dos: que interprete mal un documento ambiguo, y que responda con seguridad basándose en una fuente que tú subiste y que estaba desactualizada. Lo que la herramienta te da no es la garantía de que la respuesta sea correcta, es la posibilidad de comprobarla en diez segundos en lugar de en diez minutos. Ese cambio de coste es lo que hace que la comprobación se haga de verdad.',
    ],
    'ctaTitle' => 'Cuadernos y expedientes, por profesión',
    'ctaBody' => 'Trabajar sobre un corpus cerrado es la forma habitual de operar en varias profesiones del catálogo: expedientes y contratos en <a href="/profesiones/legal">Legal</a>, documentación de producto en <a href="/profesiones/product-management">Product Management</a> y bases de conocimiento en <a href="/profesiones/customer-support">Customer Support</a>.',
    'body' => <<<'HTML'
<p>Hay una diferencia entre esta herramienta y un chat cualquiera, y cabe en una frase: <strong>aquí el modelo no puede contarte nada que no esté en los documentos que tú has subido</strong>, y cada afirmación llega con el sitio exacto del que salió.</p>

<p>Parece una limitación. Es la razón entera por la que merece la pena.</p>

<h2 id="que-es">Qué es, en una frase</h2>

<p>Gemini Notebook es un cuaderno al que subes un conjunto de fuentes —PDF, documentos, hojas, páginas web, transcripciones— y sobre el que preguntas. Responde solo con ese material y enseña de dónde saca cada cosa. Puede además generar resúmenes, mapas de las ideas y versiones en audio o vídeo del contenido, pero eso es el envoltorio; el núcleo es el anclaje.</p>

<p>Google la ha empujado desde el principio como herramienta de estudio, y de ahí que casi todo lo que se encuentra escrito hable de apuntes y oposiciones. Es un desperdicio: el uso profesional es más obvio y menos explorado, porque el trabajo de oficina está lleno de corpus cerrados sobre los que uno se pasa la vida buscando en qué documento estaba aquello.</p>

<h2 id="cambio-de-nombre">El cambio de nombre: qué cambia y qué no</h2>

<p>El 16 de julio de 2026 Google anunció que NotebookLM pasaba a llamarse <strong>Gemini Notebook</strong>. Como todo rebranding, generó tres semanas de gente buscando qué había pasado con su herramienta.</p>

<p>Lo importante es lo que no cambió: es el mismo producto. Los cuadernos siguen donde estaban, las fuentes no hay que volver a subirlas, no hay migración ni herramienta de reemplazo. Sigue siendo una aplicación independiente centrada en investigar sobre material propio, y no se ha fundido dentro del chat de Gemini.</p>

<p>Lo que sí cambió va en dos direcciones:</p>

<ul>
    <li><strong>Integración.</strong> Los cuadernos se sincronizan con la app de Gemini, y el contenido se acerca al resto del ecosistema de Google, incluida la búsqueda.</li>
    <li><strong>Ejecución de código.</strong> La novedad funcional del anuncio: el cuaderno puede escribir y ejecutar código para hacer análisis de datos sobre tus propias fuentes. Empezó por los usuarios de Ultra y algunos clientes de Workspace, con extensión posterior a los de Pro. Es lo que convierte un cuaderno lleno de hojas de cálculo en algo más que un buscador.</li>
</ul>

<p>Si alguien de tu equipo pregunta por NotebookLM, la respuesta corta es que no ha desaparecido, se llama distinto.</p>

<h2 id="por-que-cita">Por qué las citas cambian el tipo de trabajo que puedes hacer</h2>

<p>El problema de fondo de usar un chat generalista con documentos adjuntos no es que se equivoque: es que <strong>mezcla lo que le has dado con lo que aprendió en su entrenamiento y no distingue entre las dos cosas al responder</strong>. Cuando te dice que el contrato prevé un preaviso de treinta días, no sabes si eso está en el contrato o si es lo habitual en contratos parecidos. Ese es exactamente el mecanismo descrito en la guía sobre <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>.</p>

<p>Con un cuaderno anclado, la respuesta lleva pegada la referencia. El cambio no es que la respuesta sea siempre correcta —no lo es— sino que <strong>comprobarla pasa de costar diez minutos a costar diez segundos</strong>. Y esa diferencia de coste es lo que determina si la comprobación se hace o se deja para nunca.</p>

<p>Consecuencia práctica: hay trabajos que solo se pueden delegar a una herramienta que cite. Cualquier cosa que vaya a acabar en un consejo profesional, un informe con firma o una decisión sobre dinero necesita trazabilidad, no fluidez.</p>

<h2 id="un-cuaderno-por-expediente">Un cuaderno por expediente, no un cuaderno para todo</h2>

<p>El error más frecuente es montar un cuaderno gigante con todo lo de la empresa dentro. Funciona mal por la misma razón por la que funciona mal una carpeta con dos mil ficheros: cuando el corpus mezcla materias, las respuestas se vuelven vagas y las citas te llevan a documentos que no venían al caso.</p>

<p>La unidad correcta es el <strong>expediente</strong>: un conjunto de documentos que se consultan juntos porque tratan del mismo asunto.</p>

<figure>
<table>
    <thead>
        <tr><th>Perfil</th><th>Un cuaderno por…</th><th>Fuentes que lleva dentro</th></tr>
    </thead>
    <tbody>
        <tr><td>Despacho jurídico</td><td>Asunto o cliente</td><td>Contrato, anexos, correspondencia, escritos, normativa aplicable</td></tr>
        <tr><td>Compras</td><td>Proveedor</td><td>Ofertas, condiciones, SLA, histórico de incidencias</td></tr>
        <tr><td>Producto</td><td>Iniciativa</td><td>Entrevistas de usuario, especificación, analítica, notas de investigación</td></tr>
        <tr><td>Consultoría</td><td>Proyecto</td><td>Documentación del cliente, entregables previos, actas de seguimiento</td></tr>
        <tr><td>Cumplimiento</td><td>Norma</td><td>Texto legal, guías del regulador, política interna, informes de auditoría</td></tr>
        <tr><td>Soporte</td><td>Producto o versión</td><td>Documentación, notas de versión, incidencias frecuentes, guiones internos</td></tr>
    </tbody>
</table>
</figure>

<p>Con esa granularidad aparece la ventaja real: el cuaderno se convierte en la memoria del expediente. Quien entra nuevo en el asunto pregunta en vez de leerse cuatrocientas páginas, y cada respuesta le dice qué página leer.</p>

<h2 id="montarlo">Cómo se monta un cuaderno que sirve</h2>

<p>Cuatro decisiones, todas en los primeros diez minutos.</p>

<ol>
    <li><strong>Elige las fuentes con criterio de exclusión.</strong> La pregunta no es qué puedo subir sino qué sobra. Cada documento irrelevante añade ruido a todas las respuestas futuras. Fuera borradores, versiones antiguas y material de otro asunto.</li>
    <li><strong>Marca la versión de todo lo que tenga versiones.</strong> Si el contrato tiene tres redacciones, sube solo la vigente, o sube las tres con el nombre del fichero indicando cuál es cuál. Un cuaderno con dos versiones indistinguibles del mismo documento da respuestas contradictorias y ambas citadas.</li>
    <li><strong>Añade una fuente propia con el contexto que no está en ningún documento.</strong> Un texto corto: quién es quién, qué se decidió fuera de acta, qué criterio se aplica en las dudas. Es la fuente que más se acaba citando.</li>
    <li><strong>Comprueba con tres preguntas cuya respuesta ya conoces.</strong> Antes de fiarte del cuaderno para lo que no sabes, verifica que acierta en lo que sí sabes. Si falla una de las tres, el problema casi siempre son las fuentes, no el modelo.</li>
</ol>

<h2 id="preguntas">Las preguntas que aprovechan la herramienta</h2>

<p>«Hazme un resumen» desperdicia el anclaje: un resumen es justo lo que cualquier chat hace bien. Lo que aquí sale mejor que en ningún otro sitio son las preguntas que <strong>cruzan documentos</strong> o que <strong>buscan ausencias</strong>.</p>

<pre><code>¿En qué se contradicen entre sí las fuentes de este cuaderno?
Dame cada contradicción con las dos citas enfrentadas.

¿Qué obligaciones asumimos nosotros según estos documentos, y
en cuál está cada una? Sepáralas por plazo.

De todo lo que el cliente pidió en las actas, ¿qué no aparece
recogido en la especificación?

Ordena cronológicamente lo que ocurrió según la correspondencia,
señalando las fechas que solo aparecen en un documento.

Si tuviera que defender la posición contraria usando solo estas
fuentes, ¿con qué párrafos lo haría?</code></pre>

<p>Merece la pena arrastrar a todas ellas una coletilla que reduce mucho el relleno: <em>«si algo no está en las fuentes, dilo en vez de completarlo»</em>. La herramienta está diseñada para respetarla, pero pedirlo explícitamente la hace mucho más literal.</p>

<p>La última pregunta de la lista —construir el argumento contrario— es la que más rendimiento da y la que casi nadie usa. Un corpus revisado por quien lo montó tiende a leerse siempre igual; obligar a leerlo al revés es la forma barata de encontrar el agujero antes de que lo encuentre otro.</p>

<h2 id="limites">Los límites que hay que conocer antes</h2>

<ul>
    <li><strong>No aporta nada de fuera.</strong> Si la respuesta correcta exige conocimiento que no subiste, no la vas a obtener, y eso es una virtud hasta que dejas de darte cuenta de que lo es. Para lo contrario están las herramientas de <a href="/guias/investigar-con-ia-deep-research">investigación con IA</a>.</li>
    <li><strong>Hereda la fecha de tus fuentes.</strong> Un cuaderno de cumplimiento montado hace ocho meses responde con la normativa de hace ocho meses, con total seguridad y con cita. Es el fallo más silencioso de todos.</li>
    <li><strong>Sigue interpretando.</strong> Anclar no es entender. Ante un documento ambiguo elegirá una lectura, y la citará igual de convencido.</li>
    <li><strong>La calidad de la salida es la del corpus.</strong> Un cuaderno con escaneos malos o tablas convertidas a la fuerza produce respuestas malas y no avisa.</li>
    <li><strong>La cuenta manda sobre el contenido.</strong> Cuenta personal y cuenta de Workspace corporativa no tienen el mismo marco de tratamiento de datos. Antes de subir expedientes de clientes conviene tener resuelto lo que plantea <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar IA sin filtrar datos de clientes</a>.</li>
</ul>

<h2 id="cuando-no">Cuándo no es la herramienta</h2>

<p>Tres casos claros en los que conviene usar otra cosa:</p>

<p><strong>Cuando lo que necesitas es una opinión de fuera.</strong> Revisar si tu propuesta se sostiene frente a lo que hace el mercado exige conocimiento externo. Un cuaderno cerrado solo puede decirte que tu propuesta es coherente consigo misma.</p>

<p><strong>Cuando el documento es uno y corto.</strong> Montar un cuaderno para un PDF de doce páginas es ceremonia innecesaria; pégalo en un chat. La guía sobre <a href="/guias/resumir-documentos-largos-con-ia">resumir documentos largos</a> cubre dónde está la frontera.</p>

<p><strong>Cuando el resultado tiene que ser un entregable con formato.</strong> El cuaderno es para consultar y entender, no para producir la presentación final. Ese trabajo pertenece a otro tipo de herramienta: los <a href="/guias/agentes-de-escritorio-cowork-chatgpt-work">agentes de escritorio</a> que operan sobre tus carpetas y devuelven ficheros.</p>

<p>Dicho todo lo cual, la razón por la que esta herramienta merece un hueco fijo en el trabajo de oficina es sencilla y no tiene que ver con la IA: <strong>obliga a decidir qué documentos forman un asunto</strong>. Casi nadie tiene eso ordenado, y el día que lo ordenas descubres que la mitad del tiempo que perdías buscando no era un problema de búsqueda.</p>
HTML,
];
