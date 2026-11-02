<?php

return [
    'title' => 'Cómo hacer que la IA escriba como un humano: el prompt y las frases que la delatan',
    'navTitle' => 'Que la IA escriba como un humano',
    'seoTitle' => 'Cómo hacer que la IA escriba como un humano',
    'description' => 'Las frases y estructuras que delatan un texto de ChatGPT, el prompt para evitarlas y el truco que más funciona: darle ejemplos de cómo escribes tú.',
    'excerpt' => '«En el mundo actual», «es importante destacar», tres viñetas por bloque y un resumen al final. Se reconoce a la primera, y se evita con un prompt bien hecho y una revisión de cinco minutos.',
    'category' => 'Fundamentos',
    'published' => '2026-11-02',
    'updated' => '2026-11-02',
    'readingMinutes' => 10,
    'words' => 1610,
    'about' => 'Cómo conseguir que un texto escrito con inteligencia artificial suene natural',
    'related' => ['se-nota-si-un-texto-lo-escribe-una-ia', 'como-escribir-prompts-efectivos', 'parafrasear-textos-con-ia', 'escribir-correos-con-ia', 'chatgpt-siempre-te-da-la-razon', 'corregir-ortografia-con-ia'],
    'toc' => [
        'por-que' => 'Por qué un texto de IA se reconoce',
        'tics' => 'Las frases y estructuras que la delatan',
        'prompt' => 'El prompt para que escriba como una persona',
        'ejemplos' => 'Lo que más funciona: tus propios textos',
        'antes-despues' => 'Un ejemplo, antes y después',
        'revision' => 'La revisión de cinco minutos',
        'limites' => 'Lo que este método no hace',
    ],
    'faq' => [
        '¿Cuál es el mejor prompt para que la IA escriba como un humano?' => 'Uno que diga qué evitar y no solo qué tono quieres. Pedir «escribe de forma natural» apenas cambia nada; prohibir las frases hechas típicas, la estructura de tres bloques, las conclusiones que repiten lo dicho y los elogios al lector cambia mucho. Funciona todavía mejor si añades dos o tres textos tuyos como ejemplo de estilo, porque el modelo imita un ejemplo con más precisión que una descripción.',
        '¿Qué palabras usa mucho ChatGPT en español?' => 'Las que más se repiten son arranques como «en el mundo actual» o «en la era digital», muletillas como «es importante destacar», «cabe señalar» o «en definitiva», adjetivos de folleto como «fundamental», «crucial» o «apasionante», la fórmula «no solo… sino también», y los cierres que empiezan por «en resumen». Más que cada palabra suelta, lo que delata es la acumulación y la estructura: todo ordenado en grupos de tres y con la misma longitud.',
        '¿Se puede hacer que un texto de IA no lo detecten los detectores?' => 'Un texto con frases más irregulares y sin muletillas suele puntuar más bajo en los detectores, pero ninguno es fiable en ninguna de las dos direcciones, así que no conviene plantearlo como objetivo. Si el texto es un trabajo académico o una prueba donde el uso de IA no está permitido, el problema no es el estilo sino la norma, y ningún prompt lo resuelve.',
        '¿Sirven las herramientas que «humanizan» textos?' => 'Cambian palabras por sinónimos y rompen la longitud de las frases, y a veces empeoran el texto: sustituyen términos precisos por otros que no significan lo mismo. Además, pegar en ellas un documento de trabajo es sacarlo de tu empresa por una vía que nadie ha revisado. Da mejor resultado pedir el texto bien desde el principio y revisarlo tú.',
        '¿Funciona igual en ChatGPT, Gemini y Claude?' => 'Sí. Los tres tienen tics parecidos, aunque cada uno con sus preferencias, y los tres obedecen bien una lista de cosas que evitar. Si escribes a menudo con IA, guarda la lista en las instrucciones personalizadas o en un proyecto para no pegarla cada vez.',
    ],
    'ctaTitle' => 'El prompt completo, listo para copiar',
    'ctaBody' => 'La lista completa de cosas que evitar, con variantes para correos, publicaciones y textos largos, está en el <a href="/skills/prompt-para-que-chatgpt-escriba-como-un-humano-sin-frases-de-ia">prompt para que ChatGPT escriba como un humano</a>. Si ya tienes el texto escrito, el <a href="/skills/prompt-para-corregir-la-ortografia-y-la-gramatica-de-un-texto-sin-cambiar-tu-estilo">prompt para corregir un texto sin cambiar tu estilo</a> lo pule sin reescribirlo.',
    'body' => <<<'HTML'
<p>Le pides a ChatGPT un correo para tu equipo y empieza así: «En el dinámico entorno actual, es fundamental mantenernos alineados». Nadie de tu equipo escribe así. Nadie, en realidad, escribe así, y por eso se nota a la primera.</p>

<p>Pedirle que «escriba de forma más natural» apenas lo arregla: cambia dos adjetivos y deja la estructura igual. Lo que sí funciona es decirle exactamente qué evitar, enseñarle cómo escribes tú y dedicar cinco minutos a revisar. Esta guía va de esas tres cosas.</p>

<h2 id="por-que">Por qué un texto de IA se reconoce</h2>

<p>Un modelo de lenguaje elige en cada paso una continuación probable. Por eso tiende a la frase hecha, al adjetivo esperado y a la estructura que ha visto miles de veces en textos parecidos. Además, en su ajuste final aprendió que las respuestas ordenadas, completas y amables se valoran bien, así que equilibra todo: tres ideas, tres viñetas, una conclusión que lo resume.</p>

<p>Ninguna de esas cosas está mal por separado. Lo que delata es que estén todas a la vez y siempre. Una persona escribe frases de longitud desigual, se salta partes que le parecen obvias, mete un ejemplo propio y a veces termina sin conclusión. El texto generado, por defecto, no hace nada de eso.</p>

<h2 id="tics">Las frases y estructuras que la delatan</h2>

<p>En español, estos son los tics más reconocibles:</p>

<figure>
<table>
    <thead>
        <tr><th>Tic</th><th>Ejemplos</th></tr>
    </thead>
    <tbody>
        <tr><td>Arranques de ensayo escolar</td><td>«En el mundo actual», «en la era digital», «en un entorno cada vez más competitivo»</td></tr>
        <tr><td>Muletillas de relleno</td><td>«Es importante destacar», «cabe señalar», «vale la pena mencionar»</td></tr>
        <tr><td>Adjetivos de folleto</td><td>«Fundamental», «crucial», «apasionante», «revolucionario», «sin precedentes»</td></tr>
        <tr><td>Fórmulas de contraste</td><td>«No solo… sino también», «no se trata de… sino de»</td></tr>
        <tr><td>Grupos de tres</td><td>Tres adjetivos seguidos, tres viñetas por bloque, tres bloques por texto</td></tr>
        <tr><td>Preguntas retóricas con respuesta</td><td>«¿El resultado? Un aumento del 20 %.»</td></tr>
        <tr><td>Cierres que repiten</td><td>«En resumen», «en definitiva», seguido de lo que ya se ha dicho</td></tr>
        <tr><td>Halagos y fórmulas de chat</td><td>«¡Gran pregunta!», «espero que te sea útil», «no dudes en preguntar»</td></tr>
        <tr><td>Formato excesivo</td><td>Negritas en cada frase, títulos en un correo de cuatro líneas, emojis al principio de cada viñeta</td></tr>
    </tbody>
</table>
</figure>

<p>Hay un tic más difícil de ver y que pesa más que todos: el texto <strong>no dice nada concreto</strong>. Ninguna cifra, ningún nombre, ningún caso. Vale para cualquier empresa y cualquier lector, y eso es lo que de verdad hace que suene a máquina. Lo explicamos con más detalle en <a href="/guias/se-nota-si-un-texto-lo-escribe-una-ia">si se nota que un texto lo ha escrito una IA</a>.</p>

<h2 id="prompt">El prompt para que escriba como una persona</h2>

<p>La clave es convertir la tabla anterior en instrucciones. Una versión corta que puedes añadir a cualquier petición:</p>

<blockquote>
<p>Escribe como lo haría una persona que conoce el tema y tiene prisa. Frases de longitud variada, algunas muy cortas. Vocabulario corriente. No uses «en el mundo actual», «es importante destacar», «cabe señalar», «en resumen», «fundamental» ni «crucial». No agrupes las ideas de tres en tres. No uses preguntas retóricas. No termines con un resumen de lo dicho ni con una frase de despedida amable. No uses negritas, títulos ni emojis salvo que te los pida. Si te falta un dato concreto, déjalo entre corchetes en lugar de rellenar con generalidades.</p>
</blockquote>

<p>La última frase es la más útil. En lugar de inventar un «aumentar significativamente la eficiencia», el modelo escribe «reducir el tiempo de cierre de [X] a [Y] días», y tú rellenas el dato real. El texto gana precisión y suena a alguien que sabe de lo que habla.</p>

<p>Si escribes a menudo con IA, guarda esta lista en las instrucciones personalizadas de ChatGPT, en las de Gemini o en un proyecto de Claude para no pegarla cada vez. La versión completa, con variantes para correos, publicaciones de LinkedIn y textos largos, está en el <a href="/skills/prompt-para-que-chatgpt-escriba-como-un-humano-sin-frases-de-ia">prompt para que ChatGPT escriba como un humano</a>.</p>

<h2 id="ejemplos">Lo que más funciona: tus propios textos</h2>

<p>Describir un estilo con adjetivos («cercano pero profesional») da resultados vagos, porque cada uno entiende esas palabras a su manera. Un ejemplo, en cambio, el modelo lo imita con mucha precisión.</p>

<p>Pega dos o tres textos tuyos del mismo tipo que el que quieres, por ejemplo correos que hayas enviado, y añade:</p>

<blockquote>
<p>Estos son textos míos. Fíjate en la longitud de las frases, cómo empiezo y cómo termino, el vocabulario y lo que no hago nunca. Escribe el nuevo texto con ese mismo estilo. No copies frases de los ejemplos.</p>
</blockquote>

<p>Con esto desaparece la mayoría de los tics sin necesidad de prohibirlos uno a uno, porque tus textos no los tienen. Funciona especialmente bien en correos, mensajes y publicaciones, que es donde más se nota la diferencia entre tu voz y la del asistente. Para correos en concreto, hay más ideas en <a href="/guias/escribir-correos-con-ia">escribir correos con IA</a>.</p>

<h2 id="antes-despues">Un ejemplo, antes y después</h2>

<p>Petición: un mensaje al equipo para avisar de que la reunión de los lunes pasa a los martes.</p>

<p><strong>Sin instrucciones:</strong></p>

<blockquote>
<p>¡Hola, equipo! Espero que estéis teniendo una semana fantástica. Quería informaros de un cambio importante: a partir de la próxima semana, nuestra reunión semanal pasará a celebrarse los martes. Este cambio nos permitirá no solo prepararnos mejor, sino también comenzar la semana con mayor enfoque. ¡Gracias por vuestra flexibilidad y compromiso!</p>
</blockquote>

<p><strong>Con el prompt y un correo tuyo como ejemplo:</strong></p>

<blockquote>
<p>Hola a todos: desde la semana que viene la reunión de los lunes pasa al martes, misma hora. Así tenemos el lunes para cerrar lo pendiente del viernes y llegamos con datos. Si a alguien le choca con algo, decídmelo antes del jueves.</p>
</blockquote>

<p>El segundo es más corto, tiene un motivo concreto en lugar de «mayor enfoque» y una petición clara al final. No hace falta que suene «humano»: basta con que suene a quien lo firma.</p>

<h2 id="revision">La revisión de cinco minutos</h2>

<p>Incluso con buen prompt, un repaso rápido mejora mucho el texto. Puedes hacerlo tú o pedírselo al propio asistente en un segundo paso:</p>

<ol>
    <li><strong>Lee la primera y la última frase.</strong> Son las que más delatan. Si la primera es una introducción general o la última un resumen, bórralas: casi siempre el texto mejora sin ellas.</li>
    <li><strong>Busca la tabla de arriba.</strong> Cualquier muletilla de la lista, fuera.</li>
    <li><strong>Rompe un grupo de tres.</strong> Si hay tres viñetas, quédate con dos o pásalas a una frase.</li>
    <li><strong>Añade algo que solo sepas tú.</strong> Un dato, un nombre, una opinión. Un solo detalle concreto cambia la impresión de todo el texto.</li>
    <li><strong>Léelo en voz alta.</strong> Lo que no dirías hablando, cámbialo.</li>
</ol>

<p>Si prefieres que lo haga la IA: «Revisa este texto con esta lista de tics y corrige solo los que encuentres. No cambies nada más.» La última frase evita que reescriba todo el texto de nuevo.</p>

<h2 id="limites">Lo que este método no hace</h2>

<p>Un texto sin tics no se convierte en un texto tuyo. Si la idea, los datos y la opinión no los has puesto tú, el resultado será un texto genérico bien escrito, que es mejor que un texto genérico mal escrito pero sigue sin decir nada propio. La forma de que un texto escrito con IA suene a ti es darle tu material: tus notas, tus cifras, tus ejemplos.</p>

<p>Tampoco sirve para esquivar una norma. Si un trabajo de clase o una prueba de selección no permite usar IA, cambiar el estilo no lo hace aceptable, y los detectores no son fiables en ninguna de las dos direcciones como para jugar a eso. Donde sí está permitido, y es en la mayoría de trabajos, lo que se espera es exactamente esto: que la herramienta te ahorre la redacción y tú respondas del contenido.</p>
HTML,
];
