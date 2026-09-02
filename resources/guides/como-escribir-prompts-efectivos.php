<?php

return [
    'title' => 'Cómo escribir prompts efectivos: la estructura que funciona',
    'navTitle' => 'Escribir buenos prompts',
    'seoTitle' => 'Cómo escribir prompts efectivos para IA (con ejemplos)',
    'description' => 'Las cinco piezas de un prompt que funciona, con ejemplos. Cómo dar contexto sin escribir una novela y qué hacer cuando el resultado falla.',
    'excerpt' => 'La diferencia entre un resultado mediocre y uno que puedes usar tal cual casi nunca está en la herramienta. Está en cinco decisiones que tomas al escribir la petición.',
    'category' => 'Fundamentos',
    'published' => '2026-08-22',
    'updated' => '2026-08-27',
    'readingMinutes' => 8,
    'words' => 1290,
    'about' => 'Prompt engineering',
    'related' => ['prompts-de-ia-por-profesion', 'ia-en-excel-y-google-sheets', 'que-son-los-skills-de-claude-code'],
    'toc' => [
        'por-que-falla' => 'Por qué falla un prompt normal',
        'cinco-piezas' => 'Las cinco piezas',
        'contexto' => 'Contexto: cuánto es suficiente',
        'formato' => 'Pedir el formato de salida',
        'ejemplos' => 'Un ejemplo vale más que tres párrafos',
        'iterar' => 'Cómo iterar sin empezar de cero',
        'checklist' => 'Checklist de 60 segundos',
    ],
    'faq' => [
        '¿Es mejor un prompt largo o uno corto?' => 'Ni una cosa ni la otra: lo que importa es la densidad. Un prompt largo lleno de contexto relevante funciona mejor que uno corto; un prompt largo lleno de cortesías y explicaciones sobre lo importante que es la tarea funciona peor. Elimina todo lo que no cambie la respuesta.',
        '¿Sirve de algo decirle "actúa como un experto en X"?' => 'Sirve poco por sí solo y mucho si concretas. "Actúa como SEO" apenas cambia nada. "Actúa como el SEO responsable de un ecommerce de 5.000 URLs que ha perdido un 30 % de tráfico tras una migración" sí, porque introduce restricciones y prioridades reales.',
        '¿Tengo que escribir en inglés para obtener mejores resultados?' => 'No para las tareas normales de trabajo. Los modelos actuales rinden bien en español. Escribe en el idioma en el que quieras el resultado: pedir en inglés algo que se publicará en español añade una traducción intermedia y con ella pérdidas de matiz.',
        '¿Por qué el mismo prompt da resultados distintos cada vez?' => 'Porque hay aleatoriedad en la generación. Si necesitas consistencia, fija el formato de salida con un ejemplo y añade criterios explícitos de decisión: cuanto menos margen dejes, menos varía el resultado.',
        '¿Cuándo conviene partir un prompt en varios pasos?' => 'Cuando la tarea incluye una decisión intermedia que quieres revisar. Pedir "investiga y luego escribe" en un solo mensaje te da un texto construido sobre una investigación que no has visto. Sepáralo y revisa el paso intermedio.',
    ],
    'ctaTitle' => 'Prompts ya escritos y probados',
    'ctaBody' => 'La teoría está bien, pero para las tareas habituales de cada profesión ya hay prompts escritos con esta estructura, con los campos variables marcados entre corchetes para que solo los rellenes.',
    'body' => <<<'HTML'
<p>Casi todo el mundo culpa a la herramienta. «Le he preguntado y me ha dado una respuesta genérica.» Sí: porque la pregunta también lo era.</p>

<p>Un prompt no es una búsqueda en Google con más palabras. Es un encargo. Y los encargos que salen bien tienen las mismas propiedades tanto si se le dan a una persona como a un modelo: contexto suficiente, un objetivo concreto, criterios de calidad y un formato de entrega.</p>

<h2 id="por-que-falla">Por qué falla un prompt normal</h2>

<p>Escribe alguien: <em>«Escríbeme un email para un cliente que no responde.»</em></p>

<p>El modelo no sabe qué vendes, cuánto vale el contrato, cuántas veces has escrito ya, si el silencio lleva tres días o tres semanas, ni si tu relación con esa persona es de tuteo o de usted. Con esa información —ninguna— sólo puede darte la media de todos los emails de seguimiento del mundo. Y la media es exactamente eso que reconoces al leerlo y no envías.</p>

<p>Lo que falta no es magia. Es información que tú tienes y no has escrito.</p>

<h2 id="cinco-piezas">Las cinco piezas</h2>

<p>Un prompt que funciona tiene estas cinco cosas. No hace falta que estén en este orden ni que se etiqueten, pero si falta alguna se nota.</p>

<ol>
    <li><strong>Situación.</strong> Quién eres, para quién es y qué ha pasado antes. Dos o tres frases bastan.</li>
    <li><strong>Tarea.</strong> Un verbo y un objeto. «Escribe», «clasifica», «revisa», «compara». Si tu prompt tiene tres verbos, tienes tres prompts.</li>
    <li><strong>Criterios.</strong> Qué hace bueno el resultado. Aquí va tu experiencia, y es la pieza que más gente se salta.</li>
    <li><strong>Formato.</strong> Cómo lo quieres: longitud, estructura, tono, en qué se va a pegar después.</li>
    <li><strong>Límites.</strong> Qué no debe hacer. Es más rápido prohibir tres cosas que corregirlas luego.</li>
</ol>

<p>El mismo encargo de antes, con las cinco piezas:</p>

<pre><code>Vendo software de gestión de turnos a clínicas dentales
pequeñas (2-5 sillones). Hace 12 días envié una propuesta
de 4.800 €/año a la responsable de administración de una
clínica de Valencia. Le gustó la demo. No ha respondido a
mi email de seguimiento de hace 6 días.

Escribe un email de tercer contacto.

Criterios:
- Que dé una salida digna: es posible que la decisión no
  dependa de ella y esté esperando a su socio.
- Aportar algo nuevo, no repetir la propuesta.
- Sin presión artificial: no hay descuento que caduque.

Formato: máximo 90 palabras, tono de tú, sin asunto
tipo "¿sigues ahí?".

No: no uses "solo quería hacer seguimiento" ni preguntes
si recibió el email anterior.</code></pre>

<p>Es más largo de escribir. Y produce un email que se puede enviar sin retocar, lo que en total cuesta menos tiempo.</p>

<h2 id="contexto">Contexto: cuánto es suficiente</h2>

<p>La duda habitual es cuánto contexto dar. El criterio práctico: <strong>incluye todo lo que cambiaría la respuesta si fuera distinto.</strong></p>

<p>El sector cambia la respuesta. El tamaño del cliente cambia la respuesta. Que sea el tercer contacto y no el primero cambia la respuesta. Que hoy sea jueves, no.</p>

<p>Un error frecuente en la dirección contraria: pegar veinte páginas de documentación por si acaso. El exceso de contexto irrelevante diluye lo importante y empeora el resultado. Si tienes que pegar un documento largo, di explícitamente qué parte importa: «de este contrato, me interesa solo la cláusula de rescisión y sus plazos».</p>

<h2 id="formato">Pedir el formato de salida</h2>

<p>Esta es la mejora con mejor relación esfuerzo/resultado de toda la guía, y la que menos gente aplica.</p>

<p>Si no dices el formato, obtendrás el formato por defecto: párrafos introductorios, listas con negritas y un cierre que resume lo que acabas de leer. Sirve para leerlo en el chat y no sirve para nada más.</p>

<p>Di dónde va a acabar el texto y el formato se resuelve solo:</p>

<ul>
    <li>«Para pegar en una celda de Excel: una sola línea, sin saltos.»</li>
    <li>«Para un mensaje de Slack: menos de 50 palabras, sin encabezados.»</li>
    <li>«Como CSV con estas columnas exactas: fecha, importe, categoría.»</li>
    <li>«Como tabla de tres columnas y sin texto antes ni después.»</li>
</ul>

<p>El caso de la hoja de cálculo tiene además una regla propia que conviene conocer antes de pedir nada: el modelo escribe fórmulas muy bien y calcula muy mal, así que el formato correcto casi nunca es un número. Está explicado en la <a href="/guias/ia-en-excel-y-google-sheets">guía de IA en Excel y Google Sheets</a>.</p>

<p>Y si te importa la consistencia entre ejecuciones, no describas el formato: enséñalo.</p>

<h2 id="ejemplos">Un ejemplo vale más que tres párrafos</h2>

<p>Dar uno o dos ejemplos del resultado que esperas es la técnica más eficaz que existe para fijar tono, longitud y estructura a la vez.</p>

<pre><code>Clasifica cada ticket con este formato exacto:

[URGENTE] Pago duplicado — cliente afectado, cobro doble
[NORMAL] Duda de facturación — sin impacto operativo
[BAJA] Sugerencia de mejora — sin acción inmediata

Ahora clasifica estos 20 tickets:</code></pre>

<p>Con esos tres ejemplos ya no hace falta explicar qué significa urgente, cuánto debe medir la descripción ni si va con guion o con dos puntos. Está todo demostrado.</p>

<h2 id="iterar">Cómo iterar sin empezar de cero</h2>

<p>Cuando el resultado no es el que querías, la reacción natural es reescribir el prompt entero. Es más rápido corregir sobre la marcha:</p>

<ul>
    <li><strong>Demasiado genérico:</strong> «Reescríbelo asumiendo que quien lo lee ya conoce el producto.»</li>
    <li><strong>Demasiado largo:</strong> «La mitad de palabras. No quites datos, quita adjetivos.»</li>
    <li><strong>Suena a IA:</strong> «Quita las tríadas, las negritas y las frases que empiezan por "en el mundo actual".»</li>
    <li><strong>Se ha inventado algo:</strong> «Marca con [?] cada afirmación que no puedas sostener con lo que te he dado.»</li>
    <li><strong>No sabes qué falta:</strong> «Antes de responder, hazme las tres preguntas que más cambiarían tu respuesta.» Esta última es la más útil de todas.</li>
</ul>

<p>Y cuando por fin funcione: <strong>guárdalo</strong>. Un prompt que ha funcionado dos veces es un activo. Si lo repites cada semana, conviértelo en un skill y deja de buscarlo. Cómo hacerlo está en <a href="/guias/como-crear-un-skill-para-claude-code">cómo crear un skill</a>.</p>

<h2 id="checklist">Checklist de 60 segundos</h2>

<p>Antes de enviar un prompt del que dependa algo, repasa esto:</p>

<ol>
    <li>¿He dicho para quién es y qué ha pasado antes?</li>
    <li>¿Hay un solo verbo principal?</li>
    <li>¿He escrito qué hace bueno el resultado, no solo qué quiero?</li>
    <li>¿He dicho dónde se va a pegar el resultado?</li>
    <li>¿He prohibido explícitamente lo que sé que va a hacer mal?</li>
    <li>¿He dicho qué hacer si le falta información, en vez de dejar que rellene huecos?</li>
</ol>

<p>Seis preguntas, medio minuto, y el resultado cambia lo suficiente como para que merezca la pena convertirlo en costumbre.</p>

<p>Para ver la estructura aplicada a casos concretos —marketing, desarrollo, ventas, RRHH, finanzas o legal— pasa por <a href="/guias/prompts-de-ia-por-profesion">prompts de IA por profesión</a>.</p>
HTML,
];
