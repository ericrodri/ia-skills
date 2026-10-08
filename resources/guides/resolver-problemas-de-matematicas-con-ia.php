<?php

return [
    'title' => 'Cómo resolver problemas de matemáticas con IA sin que te dé el resultado mal (ni te quite aprender)',
    'navTitle' => 'Matemáticas con IA',
    'seoTitle' => 'Resolver problemas de matemáticas con IA',
    'description' => 'Cómo resolver problemas de matemáticas con IA: qué herramienta usar, cómo pedir los pasos, cómo comprobar el resultado y cómo aprender sin copiar.',
    'excerpt' => 'Una foto del ejercicio y en segundos tienes la solución explicada paso a paso. A veces bien, y a veces con un error en el tercer paso que arrastra todo lo demás. Cómo usarla para entender el problema y cómo pillarla cuando se equivoca.',
    'category' => 'Práctica',
    'published' => '2026-10-08',
    'updated' => '2026-10-08',
    'readingMinutes' => 7,
    'words' => 1136,
    'about' => 'Resolución y aprendizaje de problemas de matemáticas con asistentes de inteligencia artificial',
    'related' => ['estudiar-con-ia', 'alucinaciones-de-la-ia', 'ia-para-profesores', 'como-escribir-prompts-efectivos', 'ia-en-excel-y-google-sheets', 'tfg-con-ia'],
    'toc' => [
        'por-que-falla' => 'Por qué la IA se equivoca en matemáticas',
        'herramientas' => 'Qué herramienta usar',
        'como-pedir' => 'Cómo pedirlo',
        'comprobar' => 'Cómo comprobar el resultado',
        'aprender' => 'Usarla para aprender, no para copiar',
        'padres' => 'Si eres padre o madre',
    ],
    'faq' => [
        '¿Qué IA resuelve mejor problemas de matemáticas?' => 'Los modelos de razonamiento de ChatGPT, Gemini y Claude resuelven bien la mayoría de problemas de secundaria, bachillerato y primeros cursos de universidad, sobre todo si pueden ejecutar código para los cálculos. Para comprobar un resultado concreto, Wolfram Alpha sigue siendo la referencia, y Photomath o Google Lens son prácticos para hacer una foto del ejercicio.',
        '¿Puedo hacer una foto a un ejercicio y que la IA lo resuelva?' => 'Sí. ChatGPT, Gemini, Claude, Google Lens y Photomath leen fotos de ejercicios, también escritos a mano si la letra es clara. Antes de fiarte de la solución, comprueba que ha copiado bien el enunciado: un signo o un exponente mal leído cambia todo el problema.',
        '¿Es fiable la IA para matemáticas?' => 'Bastante, pero no del todo. Explica bien el planteamiento y acierta en la mayoría de ejercicios típicos, pero puede equivocarse en una operación intermedia o leer mal el enunciado y llegar a un resultado incorrecto con una explicación muy convincente. Comprueba siempre el resultado sustituyendo en el enunciado o con otra herramienta.',
        '¿Es trampa usar la IA para hacer los deberes de matemáticas?' => 'Copiar la solución sin entenderla no te ayuda en el examen, donde no tendrás la IA. Usarla para que te explique un paso que no entiendes, te dé pistas o te ponga ejercicios parecidos es una forma muy buena de estudiar. Si el profesor ha dado normas sobre el uso de IA, mandan sus normas.',
        '¿Hay alguna IA gratis para resolver matemáticas?' => 'Sí. Los planes gratuitos de ChatGPT, Gemini y Claude, Google Lens, Photomath y la versión gratuita de Wolfram Alpha permiten resolver y comprobar ejercicios. Las versiones de pago añaden más uso de los modelos de razonamiento y, en algunas, explicaciones paso a paso más detalladas.',
    ],
    'ctaTitle' => 'Instrucciones para estudiar mejor',
    'ctaBody' => 'Pedir pistas en lugar de soluciones es una instrucción que se puede guardar y reutilizar. En el <a href="/skills">catálogo de skills</a> hay instrucciones probadas para análisis y cálculo, por ejemplo en <a href="/profesiones/analisis-de-datos">análisis de datos</a> y <a href="/profesiones/finanzas">finanzas</a>.',
    'body' => <<<'HTML'
<p>Haces una foto del ejercicio, la subes a un chat y en unos segundos tienes la solución explicada paso a paso. Funciona sorprendentemente bien en la mayoría de los casos. El problema es el resto: cuando la IA lee mal un exponente o se equivoca en una resta del tercer paso, llega a un resultado falso con la misma seguridad y la misma explicación ordenada. Esta guía explica qué herramienta usar, cómo pedir la solución, cómo comprobarla y cómo aprovecharla para aprender.</p>

<h2 id="por-que-falla">Por qué la IA se equivoca en matemáticas</h2>

<p>Un modelo de lenguaje no calcula como una calculadora: predice el texto más probable. Los modelos de razonamiento actuales piensan por pasos antes de responder y muchos ejecutan código para hacer las cuentas, lo que ha reducido mucho los errores. Aun así, siguen fallando en tres situaciones:</p>

<ul>
    <li><strong>Leer mal el enunciado</strong>: un 2 que parece una z, un signo menos que no ve en la foto, un paréntesis que se salta.</li>
    <li><strong>Una operación intermedia</strong>: el planteamiento es correcto y el error está en un cálculo a mitad de camino. Todo lo que viene después es coherente y está mal.</li>
    <li><strong>Problemas poco habituales</strong>: en los ejercicios típicos acierta mucho; en un problema de olimpiada o con un enunciado ambiguo, mucho menos.</li>
</ul>

<p>Es la misma razón por la que se inventa datos en otros temas, como explicamos en <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>.</p>

<h2 id="herramientas">Qué herramienta usar</h2>

<table>
    <thead>
        <tr><th>Herramienta</th><th>Fuerte en</th><th>Úsala para</th></tr>
    </thead>
    <tbody>
        <tr><td>ChatGPT, Gemini, Claude</td><td>Explicar el planteamiento y adaptarse a tu nivel</td><td>Entender un problema, pedir pistas, ejercicios parecidos</td></tr>
        <tr><td>Google Lens, Photomath</td><td>Leer el ejercicio con la cámara y dar los pasos</td><td>Ejercicios de cálculo típicos de colegio e instituto</td></tr>
        <tr><td>Wolfram Alpha</td><td>Cálculo exacto, no predice texto</td><td>Comprobar un resultado, una derivada, una integral o una gráfica</td></tr>
        <tr><td>GeoGebra</td><td>Representar funciones y figuras</td><td>Ver gráficamente si una solución tiene sentido</td></tr>
    </tbody>
</table>

<p>La combinación que mejor funciona es un asistente para entender y una herramienta de cálculo para comprobar. Si los datos están en una hoja de cálculo, la ayuda con fórmulas está en <a href="/guias/ia-en-excel-y-google-sheets">IA en Excel y Google Sheets</a>.</p>

<h2 id="como-pedir">Cómo pedirlo</h2>

<p>«Resuelve esto» da la solución. Si quieres que además sea fiable y te sirva, pide algo más:</p>

<blockquote>«Te paso un ejercicio de 4.º de ESO. Primero copia el enunciado tal como lo lees en la foto para que compruebe que está bien. Después resuélvelo paso a paso, explicando en una frase por qué haces cada paso. Al final, comprueba el resultado sustituyéndolo en el enunciado.»</blockquote>

<p>Tres detalles marcan la diferencia:</p>

<ul>
    <li><strong>Que copie el enunciado primero</strong>. Así detectas en diez segundos si ha leído mal la foto, que es el error más frecuente.</li>
    <li><strong>Que diga tu nivel</strong>. Un ejercicio de ecuaciones se puede resolver con lo que se da en 2.º de ESO o con herramientas de universidad. Si no le dices el curso, puede usar un método que tu profesor no acepta.</li>
    <li><strong>Que compruebe el resultado</strong>. Pedirlo explícitamente hace que detecte algunos de sus propios errores.</li>
</ul>

<p>Más formas de dar contexto están en <a href="/guias/como-escribir-prompts-efectivos">cómo escribir prompts efectivos</a>.</p>

<h2 id="comprobar">Cómo comprobar el resultado</h2>

<p>No hace falta rehacer el ejercicio. Basta con una de estas comprobaciones:</p>

<ul>
    <li><strong>Sustituir</strong>: mete la solución en la ecuación o en el enunciado y mira si cuadra. Es la comprobación más rápida y la más segura.</li>
    <li><strong>Otra herramienta</strong>: pasa el mismo cálculo por Wolfram Alpha o por una calculadora. Si no coinciden, revisa paso a paso dónde se separan.</li>
    <li><strong>Sentido común</strong>: una velocidad de 3.000 km/h para un ciclista o una probabilidad de 1,4 delatan el error sin hacer ninguna cuenta.</li>
    <li><strong>Preguntar por el paso dudoso</strong>: «En el paso 3, ¿de dónde sale ese 12? Rehaz esa operación». Si cambia el resultado, desconfía del conjunto.</li>
</ul>

<h2 id="aprender">Usarla para aprender, no para copiar</h2>

<p>En el examen no tendrás la IA. Si solo copias soluciones, el día del examen descubrirás que no sabes hacerlo. Estas peticiones convierten la IA en un profesor particular:</p>

<ul>
    <li><strong>Pistas en lugar de solución</strong>: «No me des la respuesta. Dime solo cuál sería el primer paso y espera a que lo intente».</li>
    <li><strong>Encontrar tu error</strong>: «Este es mi desarrollo. No lo resuelvas: dime en qué línea está el fallo y por qué».</li>
    <li><strong>Ejercicios parecidos</strong>: «Ponme tres ejercicios del mismo tipo, de menos a más difícil, sin soluciones. Te las pido cuando termine».</li>
    <li><strong>Explicarlo de otra manera</strong>: «No entiendo por qué se cambia el signo al pasar al otro lado. Explícamelo con un ejemplo con números».</li>
</ul>

<p>Más técnicas para estudiar con IA sin hacerse trampas a uno mismo están en <a href="/guias/estudiar-con-ia">estudiar con IA</a>.</p>

<h2 id="padres">Si eres padre o madre</h2>

<p>Si tu hijo te pide ayuda con un problema que ya no recuerdas cómo se hacía, la IA te ayuda a ponerte al día en cinco minutos: «Explícame cómo se resuelven los sistemas de ecuaciones por sustitución, como a alguien que lo dio hace veinte años». Así puedes acompañarle sin darle la solución.</p>

<p>Y si te preocupa que la use para copiar, la respuesta no es prohibirla: es pedirle que te explique a ti cómo lo ha resuelto. Si sabe explicarlo, ha aprendido, venga la ayuda de donde venga.</p>
HTML,
];
