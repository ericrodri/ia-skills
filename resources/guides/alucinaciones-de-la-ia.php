<?php

return [
    'title' => 'Alucinaciones de la IA: por qué inventa con tanto aplomo',
    'navTitle' => 'Alucinaciones de la IA',
    'seoTitle' => 'Alucinaciones de la IA: por qué ocurren y cómo verificar',
    'description' => 'Un modelo no miente: rellena. Por qué el entrenamiento premia adivinar antes que callar, los cinco tipos de invención y el minuto que los caza.',
    'excerpt' => 'La respuesta inventada llega con el mismo tono seguro que la correcta, y ese es todo el problema: no hay ninguna señal en el texto que distinga una de otra. La señal hay que fabricarla desde fuera.',
    'category' => 'Fundamentos',
    'published' => '2026-09-04',
    'updated' => '2026-09-04',
    'readingMinutes' => 11,
    'words' => 1840,
    'about' => 'Alucinaciones de los modelos de lenguaje y verificación de sus respuestas',
    'related' => ['investigar-con-ia-deep-research', 'errores-al-usar-ia-en-el-trabajo', 'resumir-documentos-largos-con-ia'],
    'toc' => [
        'que-es' => 'Una alucinación no es una mentira: es un relleno',
        'por-que' => 'Por qué el entrenamiento premia adivinar antes que callar',
        'tipos' => 'Cinco tipos de invención, ordenados por lo que cuestan',
        'donde' => 'Las tareas donde una alucinación llega hasta el final',
        'reducir' => 'Lo que de verdad baja la tasa',
        'prompts' => 'Cuatro prompts que reducen la invención',
        'verificar' => 'El minuto de verificación',
        'rag' => 'Por qué la búsqueda web y RAG ayudan pero no cierran el problema',
        'regla' => 'La regla que queda',
    ],
    'faq' => [
        '¿Qué es una alucinación de la IA?' => 'Es una respuesta falsa formulada con la misma seguridad que una correcta. El nombre confunde, porque sugiere un fallo puntual del sistema, y no lo es: el modelo no consulta una base de datos ni comprueba nada, predice qué texto es plausible a continuación. Cuando lo plausible coincide con lo cierto, acierta; cuando no coincide, produce una frase igual de bien construida que resulta ser falsa. Desde dentro del modelo no hay diferencia entre los dos casos, y por eso el tono no cambia.',
        '¿Por qué la IA se inventa las cosas en lugar de decir que no lo sabe?' => 'Porque durante años se la ha medido con exámenes donde dejar en blanco puntúa igual que fallar. Si la nota solo cuenta aciertos, el modelo que siempre arriesga sale mejor parado que el que reconoce sus lagunas, y el entrenamiento refuerza esa conducta. OpenAI lo documentó con un ejemplo elocuente en sus propias comparativas: un modelo se abstuvo en el 1 % de las preguntas y falló en el 75 %, mientras que otro se abstuvo en el 52 % y hundió su tasa de error. Abstenerse no es debilidad; es lo que el sistema de puntuación castigaba.',
        '¿Se van a acabar las alucinaciones con modelos mejores?' => 'Se reducen, pero no desaparecen, y conviene planificar con esa premisa. Los modelos con razonamiento y con búsqueda integrada fallan bastante menos que los de hace dos años en preguntas de dato puro, y aun así los propios informes técnicos de los fabricantes publican tasas de error de dos dígitos en las pruebas de conocimiento factual sin acceso a la web. La causa es estructural: mientras el mecanismo sea predecir texto probable, habrá huecos que se rellenen con lo verosímil.',
        '¿Cómo detecto que una respuesta está inventada?' => 'No por cómo suena, porque ahí no hay pista. Las tres comprobaciones que más devuelven en menos tiempo: buscar literalmente entre comillas cualquier cita, título o referencia, porque si no existe en ningún sitio es inventada; rehacer a mano cualquier cuenta, ya que los errores aritméticos aparecen en operaciones que parecen triviales; y pedir la fuente por separado, en un mensaje nuevo, en lugar de aceptar la que venía en la respuesta. Un enlace que devuelve un 404 o que apunta a la portada de un sitio es la señal más frecuente.',
        '¿Los modelos alucinan más en español que en inglés?' => 'Sí, en temas locales, y el motivo es la cantidad de texto disponible. En preguntas sobre normativa española, convenios colectivos, jurisprudencia o administración autonómica hay muchísimo menos material de entrenamiento que sobre sus equivalentes estadounidenses, así que el modelo rellena con lo que se le parece: nombres de leyes plausibles, artículos que no existen, plazos importados de otro sistema. En esos temas conviene trabajar siempre con el documento oficial pegado en el contexto.',
        '¿Sirve de algo pedirle a la IA que no alucine?' => 'Poner «no inventes» apenas mueve la aguja, porque el modelo no distingue cuándo está inventando. Lo que sí funciona es cambiar la tarea: darle permiso explícito para responder «no aparece en el texto», pedirle que marque qué parte de la respuesta procede del material aportado y cuál de su conocimiento general, y exigir la cita literal antes que el resumen. No es una fórmula mágica, es reducir el espacio en el que rellenar sale barato.',
    ],
    'ctaTitle' => 'Prompts con la verificación incorporada',
    'ctaBody' => 'Los prompts que aguantan en producción llevan dentro la instrucción de citar y la de abstenerse. En el catálogo hay material escrito con esa costumbre para <a href="/profesiones/legal">Legal</a>, <a href="/profesiones/finanzas">Finanzas</a> y <a href="/profesiones/marketing">Marketing</a>.',
    'body' => <<<'HTML'
<p>Le pides tres sentencias sobre despido improcedente y te da tres, con tribunal, fecha y número de recurso. Dos existen. La tercera está escrita exactamente igual que las otras dos.</p>

<p>Ese es el problema entero, y no es que la máquina se equivoque: todas las herramientas se equivocan. Es que en el texto no hay ninguna marca que separe la respuesta buena de la inventada. El aplomo es idéntico, la sintaxis es idéntica y el formato es idéntico. La señal que necesitas no está dentro de la respuesta, así que tienes que ponerla tú desde fuera.</p>

<h2 id="que-es">Una alucinación no es una mentira: es un relleno</h2>

<p>Mentir requiere saber la verdad y decir otra cosa. Un modelo de lenguaje no está en esa situación en ningún momento. Lo que hace es estimar, palabra a palabra, qué continuación resulta más probable dado todo lo anterior. Cuando el tema está bien representado en su entrenamiento, lo probable y lo cierto coinciden casi siempre. Cuando hay un hueco —una ley autonómica poco citada, el organigrama de tu empresa, la cifra de un informe de nicho— el hueco se rellena igual, porque el mecanismo no tiene una opción de «aquí no hay nada».</p>

<p>De ahí sale la propiedad más incómoda: <strong>la confianza del texto no correlaciona con su exactitud</strong>. Un dato correcto y uno inventado se escriben con la misma cadencia. Cualquier método de trabajo que dependa de «ya se nota cuando algo va mal» está construido sobre una intuición que aquí no aplica.</p>

<h2 id="por-que">Por qué el entrenamiento premia adivinar antes que callar</h2>

<p>Hay una explicación menos conocida y bastante más útil que la del funcionamiento interno: durante años, la forma de medir a estos modelos ha castigado la prudencia.</p>

<p>Las comparativas de conocimiento factual funcionan como un examen tipo test sin penalización: cada respuesta correcta suma y una respuesta en blanco vale lo mismo que una equivocada, es decir, cero. Con ese sistema de puntuación, el modelo que contesta siempre saca mejor nota que el que reconoce sus lagunas, aunque falle mucho más. Y lo que puntúa alto es lo que el entrenamiento refuerza.</p>

<p>La comparación que OpenAI publicó en 2025 lo enseña sin adornos: un modelo se abstuvo en el 1 % de las preguntas y falló en el 75 %; otro se abstuvo en el 52 % y hundió su tasa de error. El segundo parece peor si solo miras aciertos, y es mucho mejor si lo que te importa es no publicar un dato falso.</p>

<p>Esto tiene una consecuencia práctica inmediata: <strong>un modelo que te dice «esto no lo sé» te está haciendo un favor</strong>, y conviene escribir las instrucciones para que le salga barato decirlo.</p>

<h2 id="tipos">Cinco tipos de invención, ordenados por lo que cuestan</h2>

<figure>
<table>
    <thead>
        <tr><th>Tipo</th><th>Cómo se manifiesta</th><th>Coste si se cuela</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Referencia fantasma</strong></td><td>Cita, sentencia, artículo o libro con autor y año verosímiles que no existe</td><td>Alto: es justo lo que revisa quien recibe el documento</td></tr>
        <tr><td><strong>Enlace roto o falso</strong></td><td>URL bien formada que devuelve un 404 o lleva a otra cosa</td><td>Alto en contenido publicado</td></tr>
        <tr><td><strong>Aritmética</strong></td><td>Sumas, porcentajes y variaciones mal calculadas en operaciones triviales</td><td>Muy alto: se proyecta en una reunión</td></tr>
        <tr><td><strong>Atribución</strong></td><td>Una afirmación cierta puesta en boca de quien no la dijo, o en la norma equivocada</td><td>Medio; alto en Legal y Comunicación</td></tr>
        <tr><td><strong>Omisión con apariencia de completitud</strong></td><td>El resumen deja fuera lo decisivo y no avisa de que falta</td><td>El más caro, porque es invisible</td></tr>
    </tbody>
</table>
</figure>

<p>El quinto no suele contarse como alucinación y es el que más decisiones tuerce, porque nada en la respuesta indica que falte algo. Está desarrollado en la guía de <a href="/guias/resumir-documentos-largos-con-ia">resumir documentos largos con IA</a>.</p>

<h2 id="donde">Las tareas donde una alucinación llega hasta el final</h2>

<p>Casi todo lo que se hace con IA se revisa antes de salir. El riesgo no está repartido por igual: se concentra en las tareas donde no tienes con qué contrastar.</p>

<figure>
<table>
    <thead>
        <tr><th>Riesgo bajo</th><th>Riesgo alto</th></tr>
    </thead>
    <tbody>
        <tr><td>Reescribir un texto que ya tienes</td><td>Pedir datos, cifras o fechas que no conoces</td></tr>
        <tr><td>Generar variantes de un asunto de correo</td><td>Preguntar por normativa, plazos o requisitos legales</td></tr>
        <tr><td>Clasificar o etiquetar material propio</td><td>Pedir referencias bibliográficas o jurisprudencia</td></tr>
        <tr><td>Traducir un párrafo corto</td><td>Resumir un documento que no vas a leer</td></tr>
        <tr><td>Escribir código que vas a ejecutar</td><td>Explicar una API sin abrir su documentación</td></tr>
    </tbody>
</table>
</figure>

<p>La columna de la izquierda es segura porque el error se ve. La de la derecha es peligrosa porque el error sale del sistema sin encontrarse por el camino con nadie capaz de detectarlo. Es la misma división que ordena los <a href="/guias/errores-al-usar-ia-en-el-trabajo">errores al usar IA en el trabajo</a>.</p>

<h2 id="reducir">Lo que de verdad baja la tasa</h2>

<p>Escribir «no inventes» en el prompt es lo primero que hace todo el mundo y casi lo que menos sirve, porque el modelo no sabe cuándo está inventando. Lo que sí mueve la aguja, por orden de impacto:</p>

<ol>
    <li><strong>Aportar el material en vez del tema.</strong> Con el documento pegado en el contexto, el modelo tiene de dónde leer y deja de rellenar. Es el cambio con más efecto de todos, y con diferencia.</li>
    <li><strong>Dar una salida explícita.</strong> «Si no aparece en el texto, responde: no aparece» convierte la abstención en una respuesta válida en lugar de en un fracaso.</li>
    <li><strong>Exigir la cita antes que la conclusión.</strong> Obligar a copiar la frase literal que sostiene cada afirmación, con página o apartado, hace que inventar cueste más que abstenerse.</li>
    <li><strong>Separar la generación de la comprobación.</strong> Preguntar en una conversación nueva, sin la respuesta anterior a la vista, evita que el modelo se dedique a defender lo que ya dijo.</li>
    <li><strong>Bajar la temperatura y subir la especificidad.</strong> Un encargo concreto tiene menos espacio para irse a la deriva que uno abierto.</li>
</ol>

<h2 id="prompts">Cuatro prompts que reducen la invención</h2>

<pre><code>1. PERMISO PARA NO SABER
Responde solo con lo que aparezca en el texto que te paso.
Si algo no aparece, escribe exactamente: NO APARECE EN EL TEXTO.
No completes con conocimiento general. [pega el documento]

2. SEPARAR FUENTE DE MEMORIA
Responde en dos bloques. BLOQUE A: lo que se deduce del material
que te he dado, con la frase literal que lo sostiene. BLOQUE B:
lo que añades de tu conocimiento general, marcado como no
verificado. Si el bloque B está vacío, dilo.

3. AUTOCRÍTICA EN FRÍO
Aquí tienes un texto. Enumera únicamente las afirmaciones
comprobables (cifras, fechas, nombres, normas, citas) y para
cada una di qué habría que consultar para verificarla.
No verifiques tú ni añadas nada nuevo.

4. GRADO DE CONFIANZA ÚTIL
Para cada dato de tu respuesta indica: [DOCUMENTO] si sale del
material aportado, [CONOCIDO] si es un hecho ampliamente
documentado, [DUDOSO] si no estarías seguro. Prefiero tres
datos marcados que diez sin marcar.</code></pre>

<p>El segundo es el que más rinde en el día a día, porque produce una lista corta y concreta de lo que hay que mirar en lugar de dejarte revisando el texto entero. El patrón general de instrucciones que se comportan así está en la <a href="/guias/como-escribir-prompts-efectivos">guía de prompts efectivos</a>.</p>

<h2 id="verificar">El minuto de verificación</h2>

<p>No hace falta auditar la respuesta completa. Hace falta mirar lo que, si está mal, te cuesta caro:</p>

<ul>
    <li><strong>Cada cita, entre comillas, en un buscador.</strong> Si no aparece literalmente en ningún sitio, no existe. Es la comprobación más rápida y la que más caza.</li>
    <li><strong>Cada enlace, abierto.</strong> No leído: abierto. Un 404 o una portada genérica delatan la referencia inventada.</li>
    <li><strong>Cada cuenta, rehecha.</strong> A mano o en una hoja. Los fallos aritméticos aparecen en operaciones que parecen demasiado simples para fallar.</li>
    <li><strong>Cada norma, contra el boletín oficial.</strong> Nunca contra otra respuesta del modelo.</li>
    <li><strong>Cada nombre propio.</strong> Personas, empresas, productos y cargos: es donde se cuela la atribución equivocada.</li>
</ul>

<p>Sesenta segundos bien gastados cubren la práctica totalidad de lo que llegaría hasta el destinatario final. Y si la tarea no admite ni ese minuto, es señal de que no era una tarea para delegar en un modelo.</p>

<h2 id="rag">Por qué la búsqueda web y RAG ayudan pero no cierran el problema</h2>

<p>Anclar el modelo a documentos reales —lo que se llama RAG, o simplemente activar la búsqueda web— reduce mucho la invención, porque le da texto que leer en vez de un hueco que rellenar. Es la mejora individual más grande disponible hoy y merece la pena usarla siempre que exista la opción.</p>

<p>Lo que no arregla son tres cosas, y conviene tenerlas presentes:</p>

<ul>
    <li><strong>La fuente puede ser mala.</strong> Un modelo que cita un foro con información desactualizada está fundamentando su respuesta correctamente en algo que es falso.</li>
    <li><strong>La síntesis sigue siendo generativa.</strong> El párrafo que junta cinco fuentes puede afirmar algo que no dice ninguna de las cinco.</li>
    <li><strong>La cita puede no sostener la frase.</strong> El enlace existe, el documento existe, y dentro no está lo que la respuesta dice que está. Es el fallo más difícil de ver, precisamente porque el enlace abre bien.</li>
</ul>

<p>Por eso la verificación no consiste en comprobar que hay fuente, sino en abrirla y buscar la frase.</p>

<h2 id="regla">La regla que queda</h2>

<p>Un modelo de lenguaje es un generador de texto plausible con una cobertura de conocimiento enorme y unos bordes que no puede ver. Trabajar bien con él consiste en no pedirle que haga de fuente.</p>

<p>La formulación corta, que sirve para casi cualquier tarea: <strong>úsalo para transformar información que ya tienes, no para obtener información que no tienes</strong>. Reescribir, resumir con la cita delante, estructurar, traducir, criticar, generar variantes: todo eso opera sobre material que aportas tú, y ahí el rendimiento es excelente. Preguntarle un dato que no puedes contrastar es usarlo como enciclopedia, y no lo es.</p>

<p>Cuando no quede más remedio que preguntar, deja escrito el permiso para dudar y gástate el minuto. Sale más barato que la corrección pública.</p>
HTML,
];
