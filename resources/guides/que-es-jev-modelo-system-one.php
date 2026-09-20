<?php

return [
    'title' => 'Qué es Jev: el primer modelo «System One» y para qué sirve',
    'navTitle' => 'Qué es Jev',
    'seoTitle' => 'Qué es Jev: el modelo System One',
    'description' => 'Jev no escribe texto: recibe un estado y devuelve decisiones tipadas con su probabilidad. Qué es, cómo se usa y qué conviene mirar con lupa.',
    'excerpt' => 'TypeSafe AI presentó Jev en septiembre de 2026 como una categoría nueva de modelo. No genera texto: devuelve decisiones que tu código puede consumir. Esto es lo que hay, con las cifras y las dudas.',
    'category' => 'Fundamentos',
    'published' => '2026-09-20',
    'updated' => '2026-09-20',
    'readingMinutes' => 11,
    'words' => 1782,
    'about' => 'Jev, el modelo System One de TypeSafe AI, y la categoría de modelos de decisión tipada',
    'related' => ['que-es-un-agente-de-ia', 'alucinaciones-de-la-ia', 'automatizar-tareas-con-ia-en-el-trabajo', 'crear-tu-herramienta-con-ia-sin-programar', 'plugins-y-mcp-en-claude-code'],
    'toc' => [
        'que-es' => 'Qué es Jev en una frase',
        'system-one' => 'Qué quiere decir «System One»',
        'api' => 'Cómo se usa: el API en veinte líneas',
        'numeros' => 'Los números que publican',
        'lupa' => 'Lo que conviene mirar con lupa',
        'cuando' => 'Cuándo encaja y cuándo no',
        'nombre' => 'De dónde sale el nombre',
    ],
    'faq' => [
        '¿Jev sustituye a ChatGPT o a Claude?' => 'No, y su propia empresa insiste en eso. Jev no genera texto: no sirve para redactar, para conversar ni para producir nada de formato libre. Lo que hace es la decisión que hoy le pides a un modelo grande metida dentro de un JSON —clasificar, enrutar, puntuar, extraer un campo— y que se cobra lenta y cara. Lo razonable es verlos como piezas distintas del mismo sistema, no como alternativas.',
        '¿De verdad no alucina?' => 'Depende de qué entiendas por alucinar. La garantía real es de formato: si declaras que la respuesta es una de tres opciones, la respuesta será una de esas tres y nunca un texto inventado ni un tipo incorrecto. Eso es verificable y es distinto de la validación posterior que se hace con un modelo normal. Pero elegir siempre una opción válida no significa elegir la correcta: puede equivocarse igual que cualquier clasificador, y así lo han señalado ya los primeros análisis independientes.',
        '¿Qué es eso de la probabilidad calibrada?' => 'Que junto a cada respuesta te devuelve cuánta confianza tiene y cómo reparte la probabilidad entre las opciones. Un modelo calibrado es el que, cuando dice 0,8, acierta aproximadamente el 80 % de las veces. Es lo que te permite escribir la regla de negocio del tipo «si la confianza pasa de 0,9 actúo solo, y si no lo mando a un humano», que con un modelo de texto tienes que improvisar.',
        '¿Cuánto cuesta y cómo se prueba?' => 'La tarifa publicada es de 0,042 dólares por millón de tokens de entrada, con la salida a cero, frente al rango de 0,20 a 10 dólares de los modelos de texto. Se prueba con su SDK de Python y una llamada a su endpoint; el ejemplo mínimo cabe en veinte líneas y está más abajo. Como con cualquier proveedor nuevo, lo sensato es medir contra tu propio conjunto de casos antes de mover nada en producción.',
        '¿Merece la pena mirarlo ahora o esperar?' => 'Mirarlo sí, migrar no. Es un producto de cinco días con cifras que solo ha publicado el fabricante y sin verificación independiente todavía. Lo que sí tiene sentido hacer ya es identificar en tu sistema las llamadas a un modelo grande que solo devuelven una etiqueta o un número: esa lista te sirve igual aunque Jev acabe sin cuajar, porque es donde estás pagando precio de redacción por un trabajo de clasificación.',
    ],
    'ctaTitle' => 'Skills de desarrollo votadas por quien las usa',
    'ctaBody' => 'Clasificación, extracción y automatización con modelos, con el prompt y el contexto ya resueltos: <a href="/profesiones/desarrollo">Desarrollo</a>. Para la parte de datos y evaluación, mira <a href="/profesiones/analisis-de-datos">Análisis de datos</a>.',
    'body' => <<<'HTML'
<p>El 15 de septiembre de 2026, una empresa llamada TypeSafe AI presentó <strong>Jev</strong> y, de paso, se inventó una categoría para meterlo: los <em>System One models</em>. La idea es bastante menos abstracta de lo que suena, y merece cinco minutos aunque no escribas código, porque describe un problema que tiene cualquiera que haya puesto un modelo en producción.</p>

<p>Aviso antes de empezar: esto se anunció hace cinco días. Todas las cifras que siguen las publica el fabricante y todavía no hay verificación independiente. Lo señalo donde toca.</p>

<h2 id="que-es">Qué es Jev en una frase</h2>

<p>Jev es un modelo que <strong>no escribe texto</strong>. Le pasas un estado —un correo, un registro, lo que sea— y un conjunto de preguntas con sus tipos declarados, y te devuelve las respuestas ya tipadas, cada una con su probabilidad y su nivel de confianza.</p>

<p>Su fundador lo describe como «una llamada a función con inteligencia de frontera»: entra estado sin estructurar, salen decisiones tipadas y probabilísticas. Si has integrado alguna vez un modelo grande para que te clasifique tickets, reconocerás el problema que ataca: pides una etiqueta, te devuelve un párrafo amable con la etiqueta dentro, y acabas escribiendo un <em>parser</em> y un reintento para cuando el JSON viene torcido.</p>

<h2 id="system-one">Qué quiere decir «System One»</h2>

<p>El nombre remite a la distinción que popularizó Kahneman entre el pensamiento rápido y automático y el lento y deliberativo. Trasladado a software:</p>

<figure>
<table>
    <thead>
        <tr><th></th><th>Tarea «System One»</th><th>Tarea «System Two»</th></tr>
    </thead>
    <tbody>
        <tr><td>Ejemplos</td><td>Clasificar, enrutar, puntuar, extraer un campo, decidir si algo pasa un filtro</td><td>Redactar, razonar en varios pasos, planificar, programar</td></tr>
        <tr><td>Volumen</td><td>Altísimo: miles de decisiones por minuto</td><td>Bajo: unas pocas por sesión</td></tr>
        <tr><td>Salida</td><td>Una etiqueta, un número, un booleano</td><td>Texto de formato libre</td></tr>
        <tr><td>Con qué se hace hoy</td><td>Un modelo de texto al que le pides que responda solo con JSON</td><td>Un modelo de texto, que es para lo que está</td></tr>
    </tbody>
</table>
</figure>

<p>La tesis de TypeSafe es que la primera columna se está resolviendo con la herramienta de la segunda, y que eso se paga en latencia, en dinero y en fragilidad. Es una observación difícil de discutir: hay muchísimo sistema en producción cuyo «uso de IA» consiste en pedirle a un modelo de miles de millones de parámetros que conteste <code>true</code> o <code>false</code>.</p>

<h2 id="api">Cómo se usa: el API en veinte líneas</h2>

<p>Lo más aclaratorio es mirar la forma de la llamada. Se instala con <code>pip install typesafe-sdk</code> y la petición mínima es esta:</p>

<pre><code>from typesafe_sdk import Choice, Noul, Score, TypeSafeClient

client = TypeSafeClient()
response = client.system_one(
    state="Llevo tres dias intentando conectar mi cuenta de Stripe...",
    questions={
        "departamento": Choice(
            instructions="Que equipo deberia atender esto",
            criteria={
                "tecnico": "Errores o problemas de integracion",
                "facturacion": "Cobros, planes y recibos",
            },
        ),
    },
)</code></pre>

<p>Y la respuesta:</p>

<pre><code>{
  "model": "jev-1.13.0",
  "answers": {
    "departamento": {
      "choice": "tecnico",
      "confidence": 0.78,
      "probabilities": { "tecnico": 0.85, "facturacion": 0.15 }
    }
  }
}</code></pre>

<p>Hay tres tipos de pregunta: <strong>Choice</strong> (elegir entre opciones), <strong>Score</strong> (puntuar en una escala) y <strong>Noul</strong> (un valor entre 0 y 1, el caso sí/no). Se pueden mezclar en la misma llamada, y según la documentación cada pregunta se evalúa en paralelo y de forma aislada contra el mismo estado.</p>

<p>Ese detalle es el que más cambia la forma de diseñar: no estás encadenando un prompt tras otro sobre el mismo texto, estás haciendo veinte preguntas independientes de una vez. Y lo que vuelve es un diccionario, no una cadena que haya que interpretar.</p>

<h2 id="numeros">Los números que publican</h2>

<p>Todos salen del anuncio de la empresa. Los reproduzco tal cual y con esa advertencia por delante.</p>

<figure>
<table>
    <thead>
        <tr><th>Métrica</th><th>Jev</th><th>Modelos de texto actuales</th></tr>
    </thead>
    <tbody>
        <tr><td>Latencia de extremo a extremo</td><td>70 ms – 500 ms</td><td>3 s – 329 s</td></tr>
        <tr><td>Coste de entrada</td><td>0,042 $ / MTok</td><td>0,20 $ – 10 $ / MTok</td></tr>
        <tr><td>Coste de salida</td><td>Gratis</td><td>Unas 5 veces el de entrada</td></tr>
        <tr><td>Factor de velocidad</td><td colspan="2">40x – 200x según la tarea</td></tr>
        <tr><td>En flujos de trabajo de su evaluación</td><td colspan="2">193,6x más rápido y 444,6x más barato</td></tr>
    </tbody>
</table>
</figure>

<p>Por debajo hay tres piezas que describen sin entrar en detalle: una arquitectura nueva, un muestreador paralelo y un método de entrenamiento al que llaman <strong>RLCD</strong>, <em>Reinforcement Learning for Calibrated Decisions</em>. Frente al RLHF clásico, que optimiza para que la respuesta le guste a una persona, este optimiza para que <strong>la probabilidad declarada sea honesta</strong>. Tiene sentido: si tu producto es un número de confianza, lo que tienes que vender es que ese número signifique algo.</p>

<p>La demostración con la que se presentaron es Jev jugando al Doom: recibe el estado del juego y devuelve la decisión tipada del siguiente movimiento. En la comparativa que enseñaron, 0,114 segundos frente a 8,566 de un modelo de frontera en la misma tarea. Es una demo elegida por ellos, con todo lo que eso implica, pero ilustra bien la idea: una interfaz pensada para máquinas, no para personas.</p>

<h2 id="lupa">Lo que conviene mirar con lupa</h2>

<p><strong>1. El «0 % de alucinaciones» no es lo que parece.</strong> Es una garantía de esquema, no un resultado empírico: si declaras tres opciones, te devuelve una de las tres, y nunca un tipo inválido. Eso es real y es útil. Pero como señaló <em>The Register</em> al cubrir el lanzamiento, devolver una respuesta estructurada con su probabilidad no impide que esa respuesta sea incorrecta. Un clasificador que siempre contesta algo válido y a veces se equivoca sigue siendo un clasificador que se equivoca. Si esperabas que el problema de fondo desapareciera, no: sigue siendo el de siempre, explicado en la <a href="/guias/alucinaciones-de-la-ia">guía sobre alucinaciones</a>.</p>

<p><strong>2. No hay verificación independiente.</strong> Cinco días después del anuncio, todos los números son los del fabricante. No hay <em>benchmarks</em> de terceros, ni casos de producción publicados por nadie que no cobre de ellos.</p>

<p><strong>3. Es un proveedor nuevo.</strong> Cuarenta millones de financiación y un fundador con pedigrí —Diogo Almeida, ex-OpenAI, coautor del trabajo de RLHF— no son lo mismo que años de disponibilidad demostrada. Si te planteas meterlo en un camino crítico, la pregunta no es si el modelo es bueno, es qué haces el día que el endpoint no responde.</p>

<p><strong>4. Tiene límites duros.</strong> No sirve para generar texto, ni para conversación, ni para salidas abiertas. Y hay un tope de 255 opciones por pregunta en una sola etapa, que descarta de entrada la clasificación contra catálogos grandes sin trocear el problema.</p>

<h2 id="cuando">Cuándo encaja y cuándo no</h2>

<p>La forma rápida de saber si esto te toca: busca en tu código las llamadas a un modelo donde el <em>prompt</em> termina con alguna variante de «responde solo con una de estas opciones». Cada una de ellas es un candidato.</p>

<ul>
    <li><strong>Encaja</strong> en enrutado de tickets y correos, moderación, clasificación de intención, puntuación de <em>leads</em>, extracción de campos concretos de un documento, filtros de calidad sobre lotes grandes y cualquier «if inteligente» que se ejecute miles de veces al día.</li>
    <li><strong>No encaja</strong> en redactar, resumir, conversar, programar ni en nada donde la salida sea un texto que va a leer una persona. Para eso siguen estando los modelos de siempre, y el criterio para elegir entre ellos está en la <a href="/guias/claude-vs-chatgpt-para-trabajar">comparativa de Claude y ChatGPT</a>.</li>
</ul>

<p>Si no escribes código, la lectura útil es otra: es la primera señal clara de que el mercado empieza a separar «IA para hablar con personas» de «IA para decidir dentro de un programa». Hasta ahora todo se hacía con la misma herramienta porque era la única que había. El trabajo previo —identificar qué decisiones repetitivas tomas y cuáles se pueden delegar— es exactamente el de la <a href="/guias/automatizar-tareas-con-ia-en-el-trabajo">guía de automatizar tareas con IA</a>, y no cambia porque salga un modelo nuevo.</p>

<h2 id="nombre">De dónde sale el nombre</h2>

<p>Jev viene de la <strong>paradoja de Jevons</strong>: cuando una tecnología se vuelve mucho más eficiente, el consumo total no baja, sube, porque de repente compensa usarla en sitios donde antes no salía a cuenta. Es la apuesta explícita de la empresa: si una decisión con IA cuesta la mitésima parte y tarda milisegundos, se van a meter en sitios donde hoy nadie pondría una llamada a un modelo.</p>

<p>Puede pasar. También puede no pasar, y el propio periodista de <em>The Register</em> apuntó la objeción evidente: la paradoja de Jevons funciona cuando hay demanda latente esperando a que baje el precio, y está por ver que la haya en este caso. Es la pregunta abierta y no se responde con una nota de prensa; se responde dentro de unos meses, mirando quién lo ha puesto en producción y si sigue ahí.</p>
HTML,
];
