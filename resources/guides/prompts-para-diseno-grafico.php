<?php

return [
    'title' => 'Prompts para diseño gráfico: 10 ejemplos para ChatGPT y otras IA',
    'navTitle' => 'Prompts para diseño gráfico',
    'seoTitle' => 'Prompts para diseño gráfico con ChatGPT: 10 ejemplos',
    'description' => '10 prompts para diseño gráfico listos para copiar en ChatGPT, Claude o Gemini: brief, logo, paleta, tipografía, carteles, packaging y crítica de una pieza.',
    'excerpt' => 'ChatGPT no va a diseñar tu logo, pero sí puede ahorrarte la mitad del trabajo que hay alrededor: entender el encargo, abrir territorios, justificar una paleta o revisar una pieza con ojos frescos. Diez prompts probados, con la estructura que los hace funcionar.',
    'category' => 'Catálogo',
    'published' => '2026-09-25',
    'updated' => '2026-09-25',
    'readingMinutes' => 11,
    'words' => 1735,
    'about' => 'Prompts para diseño gráfico',
    'related' => ['como-escribir-prompts-efectivos', 'imagenes-con-ia-derechos-y-uso-comercial', 'prompts-de-ia-por-profesion'],
    'toc' => [
        'que-hace-bien' => 'Qué hace bien la IA en diseño gráfico',
        'estructura' => 'La estructura de un buen prompt de diseño',
        'brief' => 'Prompts para el brief',
        'logo' => 'Prompts para logos e identidad',
        'color-tipografia' => 'Prompts para color y tipografía',
        'piezas' => 'Prompts para carteles, redes y packaging',
        'critica' => 'Prompt para revisar una pieza',
        'imagenes' => 'Cuando lo que quieres es una imagen',
        'errores' => 'Errores habituales',
    ],
    'faq' => [
        '¿Qué IA es mejor para diseño gráfico, ChatGPT, Claude o Midjourney?' => 'Depende de la tarea. Para el trabajo de texto que rodea al diseño —briefs, conceptos, justificación de una paleta, crítica de una pieza— ChatGPT, Claude y Gemini rinden de forma parecida si el prompt es bueno. Para generar imágenes de exploración, Midjourney sigue dando más control estético y ChatGPT resulta más cómodo cuando necesitas texto legible dentro de la imagen o iterar conversando.',
        '¿Puede ChatGPT diseñar un logo?' => 'Puede generar imágenes con aspecto de logo, pero no un logo profesional: sale en mapa de bits, sin construcción geométrica, sin versiones reducidas ni monocromas y, sin intervención humana, sin protección de derechos de autor. Úsalo para explorar territorios y bocetos rápidos; el logo final se dibuja en vectorial.',
        '¿Los prompts funcionan igual en inglés que en español?' => 'Para las tareas de texto, sí: puedes escribir en español sin perder calidad. En los generadores de imagen, el inglés sigue dando resultados algo más predecibles con términos técnicos de estilo, luz o encuadre, así que merece la pena probar las dos versiones.',
        '¿Puedo usar comercialmente lo que genera la IA?' => 'Depende de la herramienta, del plan y del país, y en España una imagen generada sin intervención creativa humana difícilmente tiene protección de derechos de autor. Si la pieza va a un cliente, revisa las condiciones del proveedor y evita pedir estilos de artistas vivos o marcas reconocibles.',
        '¿Cuándo conviene convertir estos prompts en un skill?' => 'Cuando repites el mismo tipo de encargo. Si cada semana preparas creatividades para redes de la misma marca, guardar el contexto de marca, las restricciones y el formato de salida como un skill te evita pegarlo cada vez y hace que todas las propuestas salgan con el mismo criterio.',
    ],
    'ctaTitle' => 'Más prompts de diseño gráfico, votados por diseñadores',
    'ctaBody' => 'En <a href="/profesiones/diseno/diseno-grafico">prompts de IA para diseño gráfico</a> están los que la comunidad ha probado para logos, carteles, paletas y packaging. Y en <a href="/profesiones/diseno">Diseño</a>, los de UX/UI, branding y design systems.',
    'body' => <<<'HTML'
<p>La mayoría de las listas de «prompts para diseño gráfico» son en realidad prompts para generar imágenes bonitas. Sirven para una captura en redes, pero no para el trabajo de un diseñador, que casi nunca empieza por la imagen: empieza por entender qué necesita el cliente, qué no ha dicho y qué va a rechazar.</p>

<p>Esta guía reúne diez prompts para ChatGPT, Claude o Gemini pensados para ese trabajo real, y explica la estructura que los hace funcionar para que puedas escribir los tuyos.</p>

<h2 id="que-hace-bien">Qué hace bien la IA en diseño gráfico</h2>

<p>Conviene tener claro el reparto antes de pedir nada:</p>

<figure>
<table>
    <thead>
        <tr><th>Tarea</th><th>La IA ayuda a…</th><th>Sigue siendo tuyo</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Brief</strong></td><td>Ordenar lo que dijo el cliente y detectar lo que falta</td><td>Decidir qué se prioriza</td></tr>
        <tr><td><strong>Concepto</strong></td><td>Abrir muchos territorios en poco tiempo</td><td>Elegir el que tiene recorrido</td></tr>
        <tr><td><strong>Color y tipografía</strong></td><td>Proponer combinaciones y comprobar contraste</td><td>El ojo final sobre la pieza</td></tr>
        <tr><td><strong>Piezas</strong></td><td>Jerarquía, copy, variantes por formato</td><td>La composición y el arte final</td></tr>
        <tr><td><strong>Revisión</strong></td><td>Una segunda mirada estructurada</td><td>Aceptar o descartar cada comentario</td></tr>
    </tbody>
</table>
</figure>

<p>Dicho de otro modo: la IA es muy buena generando opciones y argumentos, y bastante mala tomando decisiones visuales. Úsala para llegar antes y con más criterio a la mesa de trabajo, no para saltártela.</p>

<h2 id="estructura">La estructura de un buen prompt de diseño</h2>

<p>Los prompts que funcionan en diseño tienen las mismas piezas que un buen brief. Si falta alguna, el modelo la rellena con lo más genérico que conoce, y lo genérico en diseño es exactamente lo que no quieres:</p>

<ol>
    <li><strong>Marca y público.</strong> Qué es, a quién se dirige y cómo quiere que la perciban. Tres adjetivos con su contrario ayudan mucho: «cercana pero no infantil».</li>
    <li><strong>Pieza y soporte.</strong> Cartel A3, post de 1080×1350, etiqueta de 7×10 cm. El formato cambia todo.</li>
    <li><strong>Restricciones.</strong> Colores obligatorios, tipografías corporativas, textos legales, presupuesto de impresión.</li>
    <li><strong>Lo que ya se descartó.</strong> Si el cliente odia el verde, dilo. Ahorra una ronda entera.</li>
    <li><strong>Formato de salida.</strong> Tabla, lista numerada, tres opciones con pros y contras. Pide lo que vas a poder usar.</li>
</ol>

<p>Es la misma lógica que explicamos en <a href="/guias/como-escribir-prompts-efectivos">cómo escribir prompts efectivos</a>, aplicada al lenguaje del diseño. Los corchetes de los ejemplos son los huecos que tienes que rellenar.</p>

<h2 id="brief">Prompts para el brief</h2>

<h3>1. Convertir la conversación con el cliente en un brief</h3>

<pre><code>Actúa como director de arte. Te pego mis notas de la reunión
con un cliente. Conviértelas en un brief de diseño con estos
apartados: objetivo de la pieza, público, mensaje principal,
tono (3 adjetivos y su contrario), entregables con formato y
medidas, restricciones y fecha.

Después, lista las preguntas que tendría que hacerle al
cliente porque las notas no las responden.

Notas: [pega aquí tus notas]</code></pre>

<p>La segunda parte es la que más valor tiene: las preguntas que faltan son las que acaban en una tercera ronda de cambios.</p>

<h3>2. Traducir adjetivos vagos a decisiones visuales</h3>

<pre><code>El cliente quiere que su marca sea «moderna, cercana y
premium». Es [tipo de negocio] y su público es [público].
Para cada adjetivo, dime qué decisiones visuales concretas
lo transmiten y cuáles lo contradicen, en tipografía, color,
composición y fotografía. Señala dónde entran en conflicto
entre sí y cómo lo resolverías.</code></pre>

<h2 id="logo">Prompts para logos e identidad</h2>

<h3>3. Territorios conceptuales antes de bocetar</h3>

<pre><code>Voy a diseñar el logo de [nombre], [qué hace] para
[público]. Valores: [valores]. Competidores directos:
[competidores].

Propón 6 territorios conceptuales distintos. Para cada uno:
idea central en una frase, tipo de símbolo (tipográfico,
icónico, abstracto, emblema), referencias visuales que
buscaría en un moodboard y el riesgo principal. Evita los
clichés del sector: [clichés, p. ej. hojas en una marca eco].</code></pre>

<h3>4. Evaluar propuestas de logo con criterio</h3>

<pre><code>Te adjunto tres propuestas de logo para [marca]. Evalúa cada
una según: legibilidad a 16 px y a 5 metros, funcionamiento
en una sola tinta, distinción frente a [competidores],
coherencia con el brief ([resumen del brief]) y facilidad
para construir un sistema a partir de ella. Da una
puntuación de 1 a 5 por criterio y justifícala en una frase.
No me digas cuál te gusta más: dime cuál cumple mejor.</code></pre>

<p>Funciona con ChatGPT, Claude o Gemini subiendo las imágenes. La última línea importa: sin ella el modelo tiende a elogiar las tres.</p>

<h2 id="color-tipografia">Prompts para color y tipografía</h2>

<h3>5. Paleta con justificación y contraste</h3>

<pre><code>Propón una paleta para [marca] con un color principal, dos
secundarios, un acento y dos neutros. Dame los valores HEX,
el papel de cada color y por qué encaja con el tono
[tono]. Indica qué combinaciones de texto y fondo cumplen
un contraste de 4,5:1 (WCAG AA) y cuáles solo sirven para
titulares grandes. Formato: tabla.</code></pre>

<p>Comprueba siempre el contraste con una herramienta aparte: los modelos lo calculan razonablemente bien, pero no siempre.</p>

<h3>6. Pareja tipográfica</h3>

<pre><code>Necesito una pareja tipográfica para [uso: web, editorial,
packaging] de una marca [tono]. Solo fuentes con licencia
libre para uso comercial (Google Fonts o similares).
Propón 4 parejas: titular y texto, por qué funcionan juntas,
en qué tamaños se leen mal y una alternativa si la licencia
del cliente lo permite.</code></pre>

<h2 id="piezas">Prompts para carteles, redes y packaging</h2>

<h3>7. Jerarquía de un cartel</h3>

<pre><code>Diseño un cartel [medidas] para [evento o producto]. Este es
todo el texto que el cliente quiere incluir: [texto].
Ordénalo en 3 niveles de jerarquía, propón qué recortar sin
perder información esencial y describe dos composiciones
distintas (dónde va cada bloque y qué ocupa más superficie).
Se tiene que entender en 3 segundos a [distancia].</code></pre>

<h3>8. Serie de creatividades para redes</h3>

<pre><code>Prepara una serie de 6 creatividades para Instagram
(1080×1350) de [marca] para [objetivo de la campaña]. Para
cada una: titular de menos de 8 palabras, idea visual,
elemento que se repite en toda la serie para darle
coherencia y variación respecto a la anterior. Devuélvelo
en tabla. Restricciones de marca: [colores, tipografías].</code></pre>

<h3>9. Packaging</h3>

<pre><code>Voy a diseñar el packaging de [producto] que se vende en
[lineal de supermercado, tienda online, tienda de
especialidad]. Dime qué información es obligatoria en
[país], qué tiene que verse de frente a 1,5 metros y qué
puede ir en el lateral. Propón tres enfoques de diseño y,
para cada uno, cómo se diferenciaría en el lineal frente a
[competidores].</code></pre>

<p>Contrasta siempre la parte legal con la normativa vigente o con el cliente: es justo el tipo de dato en el que un modelo puede <a href="/guias/alucinaciones-de-la-ia">inventarse</a> un requisito con total seguridad.</p>

<h2 id="critica">Prompt para revisar una pieza</h2>

<h3>10. Crítica estructurada a partir de una captura</h3>

<pre><code>Te adjunto una pieza terminada: [tipo de pieza] para
[público y objetivo]. Revísala como lo haría un director de
arte exigente, en este orden: jerarquía y punto de entrada,
legibilidad, uso del color, espaciado y alineaciones,
coherencia con la marca. Para cada punto, qué funciona, qué
no y un cambio concreto. Termina con los 3 cambios que más
mejorarían la pieza, ordenados por impacto.</code></pre>

<p>No sustituye a la mirada de un compañero, pero es una segunda opinión inmediata a cualquier hora, y suele detectar problemas de alineación y jerarquía que tú ya no ves de tanto mirar el archivo.</p>

<h2 id="imagenes">Cuando lo que quieres es una imagen</h2>

<p>ChatGPT y Gemini generan imágenes dentro de la conversación, y Midjourney sigue siendo la referencia para explorar estilos. Para moodboards, bocetos de concepto o maquetas de presentación son muy útiles. Un prompt de imagen que funciona describe, por este orden:</p>

<ul>
    <li><strong>Sujeto:</strong> qué aparece y qué está haciendo.</li>
    <li><strong>Composición:</strong> encuadre, punto de vista, espacio libre para el texto.</li>
    <li><strong>Estilo:</strong> técnica y referencias genéricas («ilustración plana de dos tintas», «fotografía de producto sobre fondo continuo»).</li>
    <li><strong>Luz y color:</strong> la paleta que ya decidiste, no la que invente la herramienta.</li>
    <li><strong>Formato:</strong> proporción y uso final.</li>
</ul>

<p>Evita pedir el estilo de un ilustrador vivo o elementos de marcas reconocibles si la imagen va a acabar en una pieza comercial. En <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">imágenes con IA: derechos y uso comercial</a> está explicado qué se puede hacer y qué no.</p>

<h2 id="errores">Errores habituales</h2>

<ul>
    <li><strong>Pedir «un diseño moderno».</strong> Sin marca, público ni restricciones, el resultado es la media de internet.</li>
    <li><strong>Quedarse con la primera respuesta.</strong> Pide seis opciones y descarta cinco: ahí está el valor.</li>
    <li><strong>Usar la imagen generada como arte final.</strong> Mapa de bits, resolución limitada y detalles que no aguantan una impresión en grande.</li>
    <li><strong>Pegar datos del cliente sin revisar.</strong> Antes de subir un brief confidencial, comprueba qué plan tienes y si los datos se usan para entrenar.</li>
    <li><strong>Repetir el mismo contexto cada vez.</strong> Si trabajas siempre con la misma marca, guarda el contexto como proyecto o como <a href="/guias/que-son-los-skills-de-claude-code">skill</a> y deja de pegarlo.</li>
</ul>

<p>El patrón que mejor funciona es sencillo: la IA abre opciones y pone argumentos encima de la mesa, y tú decides. Así se gana tiempo sin que todas tus piezas acaben pareciendo hechas por la misma máquina.</p>
HTML,
];
