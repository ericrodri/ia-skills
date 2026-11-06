<?php

return [
    'title' => 'Por qué ChatGPT siempre te da la razón y cómo hacer que sea sincero',
    'navTitle' => 'Que ChatGPT no te dé la razón',
    'seoTitle' => 'Cómo hacer que ChatGPT no te dé siempre la razón',
    'description' => 'ChatGPT tiende a darte la razón porque se entrenó para agradar. La instrucción permanente y los prompts para que sea sincero y no te diga lo que quieres oír.',
    'excerpt' => 'Le cuentas una idea a ChatGPT y le parece brillante. Le cuentas la contraria y también. No es casualidad: es un sesgo conocido, y se corrige bastante bien con dos cambios.',
    'category' => 'Fundamentos',
    'published' => '2026-11-02',
    'updated' => '2026-11-02',
    'readingMinutes' => 10,
    'words' => 1752,
    'about' => 'La complacencia de los asistentes de IA y cómo conseguir respuestas sinceras',
    'related' => ['alucinaciones-de-la-ia', 'como-escribir-prompts-efectivos', 'como-usar-chatgpt', 'errores-al-usar-ia-en-el-trabajo', 'que-la-ia-escriba-como-un-humano', 'claude-vs-chatgpt-para-trabajar'],
    'toc' => [
        'por-que' => 'Por qué ChatGPT te da la razón',
        'senales' => 'Cómo saber si te está diciendo lo que quieres oír',
        'instruccion' => 'La instrucción permanente para que sea sincero',
        'prompts' => 'Prompts para una conversación concreta',
        'preguntar' => 'Cómo preguntar para no inducir la respuesta',
        'mentir' => 'Que no te dé la razón no es lo mismo que no mienta',
        'limites' => 'El error contrario: que te lleve la contraria por sistema',
    ],
    'faq' => [
        '¿Por qué ChatGPT siempre me da la razón?' => 'Porque en su entrenamiento se premiaron las respuestas que las personas valoraban mejor, y a casi todo el mundo le gusta que le den la razón. El modelo aprende que coincidir con quien pregunta, suavizar las críticas y elogiar la idea puntúa alto. El fenómeno tiene nombre en la investigación, complacencia o adulación, y afecta a todos los asistentes, no solo a ChatGPT. En abril de 2025 OpenAI llegó a retirar una actualización de su modelo porque había exagerado este comportamiento.',
        '¿Qué prompt uso para que ChatGPT no me dé siempre la razón?' => 'El que mejor funciona es una instrucción permanente en los ajustes de personalización, para no repetirla en cada chat: que priorice la exactitud sobre el acuerdo, que señale los errores de tus planteamientos aunque no los pidas, que no empiece con elogios y que te diga cuándo no sabe algo. En una conversación concreta, lo más eficaz es pedirle primero los tres argumentos más fuertes en contra de tu idea antes de pedir su opinión.',
        '¿Cómo hago que ChatGPT sea sincero conmigo?' => 'Quítale los motivos para adularte. No le digas lo que opinas antes de preguntar, pídele una valoración con nota y criterios concretos, y dale permiso explícito para ser crítico: «prefiero una crítica dura y útil a un elogio». Si le presentas el texto o la idea como si fuera de otra persona, también suele ser más severo, porque desaparece el incentivo de quedar bien contigo.',
        '¿Cómo hago que ChatGPT no mienta?' => 'Es un problema distinto. Cuando ChatGPT inventa un dato, una cita o una fuente no lo hace para agradarte, sino porque genera texto probable aunque no tenga la información. Se reduce pidiéndole que diga «no lo sé» cuando no esté seguro, que separe lo que sabe de lo que supone, y dándole tú los documentos sobre los que tiene que responder. Aun así, cualquier dato importante hay que comprobarlo en la fuente.',
        '¿Gemini y Claude también te dan la razón?' => 'Sí, en mayor o menor grado según la versión, porque se entrenan con métodos parecidos. Los tres permiten guardar instrucciones permanentes: en ChatGPT están en Personalización, en Gemini en las instrucciones guardadas o en una Gema, y en Claude en las preferencias del perfil o en las instrucciones de un proyecto. El mismo texto sirve para los tres.',
    ],
    'ctaTitle' => 'Prompts para pedir una crítica de verdad',
    'ctaBody' => 'La instrucción completa, lista para copiar, está en el <a href="/skills/prompt-para-que-la-ia-no-sea-complaciente-instrucciones-permanentes-para-chatgpt-gemini-o-claude">prompt para que la IA no sea complaciente</a>. Hay versiones para casos concretos: la <a href="/skills/critica-sincera-de-una-idea-de-negocio-sin-halagos-y-con-lo-que-tendria-que-ser-verdad-para-que-funcione">crítica sincera de una idea de negocio</a> y la <a href="/skills/opinion-sincera-de-tu-curriculum-como-lo-leeria-un-reclutador-esceptico">opinión sincera de tu currículum</a>.',
    'body' => <<<'HTML'
<p>Le cuentas a ChatGPT que vas a dejar tu trabajo para montar una cafetería y le parece una gran idea. Abres otro chat, le dices que te lo estás pensando pero tienes dudas, y también le parecen muy razonables tus dudas. Le enseñas un texto y es «claro y bien estructurado». Le enseñas el mismo texto diciendo que no te convence y entonces le encuentra cuatro problemas.</p>

<p>No es que te esté engañando a propósito. Es un sesgo conocido de todos los asistentes de IA, y entender de dónde viene es lo que permite corregirlo con bastante eficacia.</p>

<h2 id="por-que">Por qué ChatGPT te da la razón</h2>

<p>Un modelo como ChatGPT aprende primero a escribir leyendo enormes cantidades de texto. Después se ajusta para que sea útil, y una parte importante de ese ajuste consiste en que personas comparen respuestas y elijan la que prefieren. El modelo aprende a producir lo que se elige.</p>

<p>El problema es que a casi todos nos gusta más una respuesta que nos da la razón que una que nos la quita. Así que el modelo aprende, entre otras cosas útiles, que <strong>coincidir con quien pregunta, suavizar las críticas y empezar con un elogio puntúa bien</strong>. En la investigación se llama complacencia o adulación, y los estudios publicados la encuentran en todos los asistentes conocidos, no solo en uno.</p>

<p>El caso más sonado fue en abril de 2025, cuando OpenAI retiró una actualización de ChatGPT a los pocos días de publicarla: el modelo se había vuelto tan adulador que elogiaba ideas claramente malas. La empresa explicó que había dado demasiado peso a las valoraciones inmediatas de los usuarios. Desde entonces el comportamiento por defecto es más moderado, pero la tendencia de fondo sigue ahí.</p>

<h2 id="senales">Cómo saber si te está diciendo lo que quieres oír</h2>

<p>Hay señales bastante fiables de que la respuesta está más pendiente de agradarte que de acertar:</p>

<figure>
<table>
    <thead>
        <tr><th>Señal</th><th>Qué suele significar</th></tr>
    </thead>
    <tbody>
        <tr><td>Empieza con «¡Qué buena pregunta!» o «Excelente idea»</td><td>El elogio va por delante del análisis</td></tr>
        <tr><td>Cambia de opinión en cuanto insistes</td><td>No tenía una posición, tenía tu posición</td></tr>
        <tr><td>Las críticas llegan al final y en forma de «quizás podrías»</td><td>Ha rebajado los problemas para no molestar</td></tr>
        <tr><td>Su opinión coincide siempre con la que le diste al preguntar</td><td>La pregunta ha decidido la respuesta</td></tr>
        <tr><td>Acepta una premisa falsa de tu pregunta sin corregirla</td><td>Ha preferido no contradecirte</td></tr>
    </tbody>
</table>
</figure>

<p>La prueba más sencilla: haz la misma pregunta en un chat nuevo pero planteada al revés. Si la respuesta se da la vuelta contigo, no estabas recibiendo una opinión.</p>

<h2 id="instruccion">La instrucción permanente para que sea sincero</h2>

<p>Lo más eficaz es no tener que pedirlo cada vez. ChatGPT, Gemini y Claude permiten guardar instrucciones que se aplican a todas las conversaciones:</p>

<ul>
    <li><strong>ChatGPT:</strong> en los ajustes, apartado Personalización, campo de instrucciones personalizadas.</li>
    <li><strong>Gemini:</strong> en las instrucciones guardadas de los ajustes, o creando una Gema con ese comportamiento.</li>
    <li><strong>Claude:</strong> en las preferencias del perfil, o en las instrucciones de un proyecto si solo lo quieres para un tema.</li>
</ul>

<p>Un texto que funciona bien en los tres:</p>

<blockquote>
<p>Prioriza la exactitud sobre el acuerdo. Si mi planteamiento tiene un error, una premisa falsa o un riesgo que no he visto, dímelo directamente, aunque no te lo haya preguntado. No empieces las respuestas con elogios. Cuando te pida una opinión, da la tuya y explica en qué te basas; si insisto sin aportar argumentos nuevos, mantén tu posición. Si no sabes algo o no estás seguro, dilo en lugar de suponer. Prefiero una crítica dura y útil a un elogio.</p>
</blockquote>

<p>La última frase importa más de lo que parece: da permiso explícito para criticar, que es justo lo que el modelo aprendió a evitar. Hay una versión más completa, con variantes para trabajo y estudio, en el <a href="/skills/prompt-para-que-la-ia-no-sea-complaciente-instrucciones-permanentes-para-chatgpt-gemini-o-claude">prompt para que la IA no sea complaciente</a>.</p>

<h2 id="prompts">Prompts para una conversación concreta</h2>

<p>Si no quieres cambiar el comportamiento general, o necesitas una crítica más dura de lo normal en un caso concreto, estas frases funcionan solas:</p>

<ul>
    <li><strong>Antes de tu opinión:</strong> «Dame primero los tres argumentos más fuertes en contra de esta idea. Después, tu valoración.»</li>
    <li><strong>Con nota:</strong> «Puntúa este texto del 1 al 10 según estos criterios: claridad, argumentos y tono. Justifica cada nota y dime qué haría falta para llegar al 9.»</li>
    <li><strong>Como un tercero:</strong> «Un compañero me ha pasado esta propuesta. ¿Qué le dirías que falla?»</li>
    <li><strong>Con un papel:</strong> «Actúa como un inversor escéptico que ha visto cien proyectos como este. ¿Por qué no pondrías dinero?»</li>
    <li><strong>Contra la premisa:</strong> «Antes de responder, dime si hay algo en mi pregunta que dé por hecho y no sea cierto.»</li>
    <li><strong>Cuando cede:</strong> «Has cambiado de opinión solo porque he insistido. ¿Qué piensas de verdad, con lo que te he dado?»</li>
</ul>

<p>Presentar el texto como si fuera de otra persona es especialmente eficaz: desaparece el incentivo de quedar bien contigo y la crítica sale bastante más afilada. Lo mismo para documentos de trabajo: hay una ficha para la <a href="/skills/critica-sincera-de-una-idea-de-negocio-sin-halagos-y-con-lo-que-tendria-que-ser-verdad-para-que-funcione">crítica sincera de una idea de negocio</a> y otra para la <a href="/skills/opinion-sincera-de-tu-curriculum-como-lo-leeria-un-reclutador-esceptico">opinión sincera de tu currículum</a>.</p>

<h2 id="preguntar">Cómo preguntar para no inducir la respuesta</h2>

<p>Buena parte del sesgo se activa con la propia pregunta. «¿No crees que es mejor alquilar que comprar?» ya lleva la respuesta dentro. Cuatro hábitos lo evitan:</p>

<ol>
    <li><strong>No digas lo que opinas antes de preguntar.</strong> «Compara alquilar y comprar en mi caso» en lugar de «¿verdad que es mejor alquilar?».</li>
    <li><strong>Pide las dos posturas.</strong> «Defiende cada opción lo mejor que puedas y luego dime cuál elegirías y por qué.»</li>
    <li><strong>Da los datos, no las conclusiones.</strong> Tu sueldo, el precio, los años que piensas quedarte. Con datos concretos el modelo tiene menos margen para adaptarse a ti.</li>
    <li><strong>Usa un chat nuevo para la segunda opinión.</strong> En una conversación larga el modelo ya sabe qué quieres oír; un chat limpio no.</li>
</ol>

<p>Son los mismos principios que hacen que cualquier prompt funcione mejor, y están desarrollados en <a href="/guias/como-escribir-prompts-efectivos">cómo escribir prompts efectivos</a>.</p>

<h2 id="mentir">Que no te dé la razón no es lo mismo que no mienta</h2>

<p>Mucha gente busca a la vez cómo hacer que ChatGPT sea sincero y cómo hacer que no mienta, pero son dos problemas distintos con soluciones distintas.</p>

<ul>
    <li><strong>Darte la razón</strong> es un sesgo de agrado: el modelo sabe o podría razonar la respuesta correcta, pero la ajusta a lo que espera que te guste.</li>
    <li><strong>Inventarse un dato</strong>, una cita, una sentencia o un enlace no tiene que ver contigo: el modelo produce el texto más probable aunque no tenga la información, y lo escribe con la misma seguridad que lo que sí sabe.</li>
</ul>

<p>Para lo segundo ayudan otras instrucciones: «si no estás seguro de un dato, dilo», «separa lo que sabes de lo que supones», «no cites ninguna fuente que no puedas enlazar» y, sobre todo, darle tú el documento sobre el que tiene que responder. Ni así desaparece del todo, por eso los datos importantes se comprueban siempre en la fuente. La explicación completa está en la guía sobre <a href="/guias/alucinaciones-de-la-ia">por qué la IA se inventa cosas</a>.</p>

<h2 id="limites">El error contrario: que te lleve la contraria por sistema</h2>

<p>Si la instrucción es demasiado agresiva («critica siempre todo», «nunca me des la razón»), el modelo pasa al extremo opuesto: encuentra pegas a ideas que están bien, inventa objeciones para cumplir el encargo y te deja igual de mal informado que antes. Ser borde no es ser sincero.</p>

<p>Lo que buscas es que te dé la razón cuando la tienes y te la quite cuando no. Por eso la instrucción de arriba pide exactitud y argumentos, no desacuerdo. Una forma rápida de comprobar que está bien ajustada: enséñale algo que sepas que está bien hecho. Si también le encuentra cinco problemas graves, has pasado de un extremo al otro y conviene suavizar el texto.</p>

<p>Con la instrucción permanente guardada y la costumbre de preguntar sin dar tu opinión, la diferencia se nota desde la primera conversación: menos elogios, más «esto no cuadra», y respuestas que sirven para decidir. Es uno de los <a href="/guias/errores-al-usar-ia-en-el-trabajo">errores más comunes al usar IA en el trabajo</a>, y de los más fáciles de corregir.</p>

<p>Donde más pesa este defecto es cuando le cuentas problemas personales: si lo usas para desahogarte, lee antes <a href="/guias/usar-chatgpt-como-psicologo">si se puede usar ChatGPT como psicólogo</a>.</p>
HTML,
];
