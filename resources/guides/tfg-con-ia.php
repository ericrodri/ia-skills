<?php

return [
    'title' => 'TFG con IA: qué puedes usar, cómo declararlo y qué evitar',
    'navTitle' => 'TFG con IA',
    'seoTitle' => 'TFG con IA: qué se permite y cómo declararlo',
    'description' => 'Cómo usar ChatGPT o Claude en el TFG o el TFM sin arriesgar la nota: usos aceptados, cómo declarar la IA, citas inventadas y prompts para cada fase.',
    'excerpt' => 'Casi todas las universidades han pasado de prohibir la IA en el trabajo de fin de grado a permitirla con condiciones. Las condiciones son las que suspenden: usarla donde no toca, no declararlo o entregar una bibliografía que la IA se inventó.',
    'category' => 'Práctica',
    'published' => '2026-09-28',
    'updated' => '2026-09-28',
    'readingMinutes' => 8,
    'words' => 1274,
    'about' => 'Uso de la inteligencia artificial en trabajos de fin de grado y de máster',
    'related' => ['estudiar-con-ia', 'alucinaciones-de-la-ia', 'investigar-con-ia-deep-research', 'se-nota-si-un-texto-lo-escribe-una-ia', 'ia-para-profesores', 'resumir-documentos-largos-con-ia'],
    'toc' => [
        'normas' => 'Qué dicen las universidades',
        'usos' => 'Usos aceptados y usos que suspenden',
        'fases' => 'La IA en cada fase del TFG',
        'bibliografia' => 'El riesgo número uno: la bibliografía',
        'declarar' => 'Cómo declarar el uso de IA',
        'defensa' => 'La defensa: donde se nota todo',
    ],
    'faq' => [
        '¿Se puede usar ChatGPT para hacer el TFG?' => 'Para ayudarte, en la mayoría de universidades sí; para que lo escriba por ti, no. Lo habitual es que se permita usarla para buscar ideas, ordenar la estructura, revisar la redacción o entender un método, siempre que el contenido intelectual sea tuyo y declares cómo la has usado. La norma exacta está en la guía docente de la asignatura y en la normativa de tu universidad.',
        '¿Detectan los tribunales si el TFG está hecho con IA?' => 'Los detectores automáticos no son fiables y muchas universidades desaconsejan basar una sanción solo en ellos. Lo que sí detecta un tribunal es un trabajo que el autor no sabe defender, una bibliografía con referencias que no existen o un estilo que no cuadra con los borradores que vio el tutor.',
        '¿Qué pasa si no declaro que he usado IA?' => 'En las universidades con normativa sobre IA, no declararla cuando se ha usado se trata como una falta de integridad académica, igual que el plagio. Las consecuencias van desde suspender el trabajo hasta un expediente disciplinario. Declarar un uso razonable, en cambio, rara vez perjudica la nota.',
        '¿Cómo se cita a ChatGPT en APA?' => 'La norma APA propone citar a la empresa como autora, el año de la versión, el nombre de la herramienta con la versión entre paréntesis, la descripción entre corchetes y la dirección web. Por ejemplo: OpenAI. (2026). ChatGPT (versión del modelo) [Modelo de lenguaje extenso]. https://chatgpt.com. Aun así, conviene no usar la IA como fuente de datos: cita la fuente original que la respalda.',
        '¿Puede la IA hacer el análisis estadístico del TFG?' => 'Puede ayudarte a elegir la prueba adecuada, escribir el código en R o Python y explicarte los resultados. El análisis tienes que entenderlo y comprobarlo tú: si el tribunal te pregunta por qué usaste esa prueba, «me lo dijo la IA» no es una respuesta.',
    ],
    'ctaTitle' => 'Skills para investigar y escribir mejor',
    'ctaBody' => 'Revisión de literatura, análisis de datos o redacción académica: en <a href="/profesiones/analisis-de-datos">Análisis de datos</a> y en el <a href="/skills">catálogo de skills</a> hay instrucciones pensadas para trabajar con rigor.',
    'body' => <<<'HTML'
<p>Hace dos cursos la respuesta de muchas facultades a la IA en el trabajo de fin de grado era un «no» genérico. Hoy la mayoría de universidades españolas tiene una norma escrita, y casi todas dicen lo mismo con palabras distintas: puedes usarla como ayuda, tienes que decir cómo la has usado y el trabajo intelectual tiene que ser tuyo. Esta guía traduce eso a decisiones concretas. Sirve igual para un TFM.</p>

<h2 id="normas">Qué dicen las universidades</h2>

<p>Las normativas varían, pero suelen coincidir en cuatro puntos:</p>

<ul>
    <li><strong>El autor responde de todo</strong> lo que entrega, lo haya escrito él o una herramienta.</li>
    <li><strong>Hay que declarar el uso</strong>, normalmente en un apartado o anexo del trabajo.</li>
    <li><strong>No se permite delegar la parte sustancial</strong>: la pregunta de investigación, el análisis, las conclusiones.</li>
    <li><strong>El tutor puede fijar límites más estrictos</strong> para su trabajo.</li>
</ul>

<p>Antes de empezar, lee tres documentos: la normativa de tu universidad sobre IA, la guía docente del TFG de tu grado y lo que diga tu tutor. Si se contradicen, manda el más restrictivo. Y si tu tutor no ha dicho nada, pregúntale en la primera reunión: es una conversación mucho más fácil al principio que al final.</p>

<h2 id="usos">Usos aceptados y usos que suspenden</h2>

<figure>
<table>
    <thead>
        <tr><th>Suele estar aceptado</th><th>Suele estar prohibido o ser arriesgado</th></tr>
    </thead>
    <tbody>
        <tr><td>Proponer ideas para acotar el tema</td><td>Que elija la pregunta de investigación por ti</td></tr>
        <tr><td>Explicarte un método o un concepto</td><td>Redactar capítulos que entregas tal cual</td></tr>
        <tr><td>Sugerir una estructura de índice</td><td>Generar la bibliografía</td></tr>
        <tr><td>Revisar ortografía, estilo y claridad</td><td>Inventar o «completar» datos</td></tr>
        <tr><td>Ayudarte con el código del análisis</td><td>Interpretar resultados que no entiendes</td></tr>
        <tr><td>Traducir o resumir artículos para leerlos</td><td>Citar un artículo que solo has leído resumido</td></tr>
        <tr><td>Preparar preguntas para ensayar la defensa</td><td>No declarar nada de lo anterior</td></tr>
    </tbody>
</table>
</figure>

<p>La línea que separa las dos columnas es siempre la misma: la IA puede ayudarte a pensar y a expresar, pero no pensar ni afirmar por ti.</p>

<h2 id="fases">La IA en cada fase del TFG</h2>

<p><strong>Elegir y acotar el tema.</strong> Útil para pasar de «algo sobre redes sociales» a una pregunta abarcable:</p>
<pre><code>Estudio 4.º de Psicología. Me interesa el efecto de las redes sociales
en la autoestima de adolescentes. Propón cinco preguntas de
investigación abarcables en un TFG de 12 créditos, con datos que un
estudiante pueda recoger. Para cada una, di qué la haría difícil.</code></pre>

<p><strong>Revisión de literatura.</strong> Las herramientas de <a href="/guias/investigar-con-ia-deep-research">investigación profunda</a> ayudan a hacerse un mapa del tema, pero cada artículo que acabe en tu trabajo tienes que haberlo encontrado en una base de datos académica y haberlo leído. Para artículos largos, pide un resumen solo para decidir si lo lees entero.</p>

<p><strong>Metodología y análisis.</strong> Pídele que te explique las alternativas y por qué elegir una, no que decida:</p>
<pre><code>Tengo dos grupos de 40 personas y una variable ordinal. Explícame qué
pruebas estadísticas podría usar, qué supuestos tiene cada una y cómo
compruebo si mis datos los cumplen.</code></pre>

<p><strong>Redacción.</strong> Escribe tú el borrador, aunque sea torpe, y usa la IA para revisarlo:</p>
<pre><code>Te paso un párrafo de mi marco teórico. No lo reescribas. Señala
frases ambiguas, repeticiones y afirmaciones que necesitarían una cita.</code></pre>

<p>Así el texto sigue sonando a ti. Un trabajo reescrito entero por la IA tiene un estilo muy reconocible, como se explica en <a href="/guias/se-nota-si-un-texto-lo-escribe-una-ia">¿se nota si un texto lo escribe una IA?</a>.</p>

<h2 id="bibliografia">El riesgo número uno: la bibliografía</h2>

<p>Si pides a un asistente «artículos sobre X», te dará una lista con autores, años, revistas y títulos plausibles. Una parte puede no existir, y otra puede existir pero no decir lo que el modelo afirma. Es el error más frecuente en los TFG con IA, y el más fácil de detectar para un tribunal: basta con buscar una referencia.</p>

<ul>
    <li><strong>No saques referencias de un chat.</strong> Búscalas en Google Scholar, en la biblioteca de tu universidad o en las bases de datos de tu área.</li>
    <li><strong>Comprueba cada cita</strong> contra el texto original, no contra un resumen.</li>
    <li><strong>Usa un gestor de referencias</strong> (Zotero, Mendeley) para que las citas salgan de fuentes reales.</li>
</ul>

<p>Por qué los modelos inventan con tanta seguridad está explicado en la guía de <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>.</p>

<h2 id="declarar">Cómo declarar el uso de IA</h2>

<p>Si tu universidad tiene un modelo de declaración, úsalo. Si no, una buena declaración responde a cuatro preguntas:</p>

<ol>
    <li><strong>Qué herramienta</strong> usaste, con el nombre y la versión si la conoces.</li>
    <li><strong>Para qué</strong>: acotar el tema, revisar la redacción, depurar el código.</li>
    <li><strong>En qué partes</strong> del trabajo.</li>
    <li><strong>Cómo revisaste el resultado</strong>, dejando claro que asumes la responsabilidad del contenido.</li>
</ol>

<p>Un ejemplo breve:</p>
<pre><code>Para este trabajo he utilizado Claude (Anthropic) para revisar la
claridad de la redacción de los capítulos 2 y 4 y para depurar el
código de análisis en R. Las propuestas se han revisado y modificado
por el autor, que asume la responsabilidad de todo el contenido. No
se ha utilizado la IA para generar referencias ni datos.</code></pre>

<p>Guarda las conversaciones más relevantes. Si el tutor o el tribunal preguntan, poder enseñar cómo la usaste es la mejor defensa.</p>

<h2 id="defensa">La defensa: donde se nota todo</h2>

<p>Un TFG hecho en gran parte por la IA puede pasar la lectura. Casi nunca pasa la defensa. El tribunal pregunta por qué elegiste ese método, qué harías distinto o qué significa un resultado, y ahí no hay chat que ayude.</p>

<p>Donde la IA sí ayuda es en ensayarla:</p>
<pre><code>Eres miembro del tribunal de mi TFG. Te paso el resumen y las
conclusiones. Hazme las cinco preguntas más difíciles que harías, de
una en una, y valora mis respuestas con sinceridad.</code></pre>

<p>Si puedes responder a esas preguntas con soltura, el trabajo es tuyo, lo hayas escrito con ayuda o sin ella. Para el resto del curso, la guía de <a href="/guias/estudiar-con-ia">cómo estudiar con IA</a> aplica el mismo principio: que la herramienta te haga pensar, no que piense por ti.</p>
HTML,
];
