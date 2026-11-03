<?php

return [
    'title' => 'Cuánta agua y energía gasta ChatGPT: los datos reales por pregunta',
    'navTitle' => 'Agua y energía de la IA',
    'seoTitle' => 'Cuánta agua y energía gasta ChatGPT por pregunta',
    'description' => 'Cuánta agua y electricidad gasta una pregunta a ChatGPT o Gemini según los datos publicados, por qué no coinciden y dónde está el impacto real.',
    'excerpt' => 'Unas cifras dicen que cada pregunta a ChatGPT gasta media botella de agua; otras, cinco gotas. Las dos vienen de fuentes serias. La diferencia está en qué se cuenta y qué se deja fuera.',
    'category' => 'Fundamentos',
    'published' => '2026-11-03',
    'updated' => '2026-11-03',
    'readingMinutes' => 9,
    'words' => 1544,
    'about' => 'El consumo de agua y energía de la inteligencia artificial generativa',
    'related' => ['que-es-la-inteligencia-artificial', 'ia-local-privada-en-tu-ordenador', 'cual-es-la-mejor-ia', 'como-usar-chatgpt', 'chatgpt-no-funciona', 'va-la-ia-a-sustituir-mi-trabajo'],
    'toc' => [
        'por-que' => 'Por qué la IA gasta agua',
        'cifras' => 'Las cifras publicadas por pregunta',
        'diferencias' => 'Por qué unas cifras y otras no coinciden',
        'comparar' => 'Comparado con otras cosas que haces',
        'total' => 'Dónde está el impacto de verdad',
        'que-hacer' => 'Qué puedes hacer tú',
    ],
    'faq' => [
        '¿Cuánta agua gasta una pregunta a ChatGPT?' => 'Según Sam Altman, el director de OpenAI, una consulta media gasta unos 0,32 mililitros, una fracción de una cucharadita, aunque no explicó cómo se calculó. Google midió para Gemini una mediana de 0,26 mililitros por pregunta de texto, unas cinco gotas. Los estudios independientes que hablan de medio litro por cada pocas decenas de respuestas cuentan además el agua usada para producir la electricidad y se hicieron con modelos y centros de datos anteriores, menos eficientes.',
        '¿Por qué ChatGPT gasta agua?' => 'Porque funciona en centros de datos llenos de servidores que se calientan y hay que refrigerar. Muchos usan sistemas que evaporan agua para enfriar el aire, y esa agua no vuelve al río. Además, las centrales que producen la electricidad que consumen también usan agua. Cuanto más calor hace donde está el centro de datos, más agua necesita.',
        '¿Cuánta energía consume una pregunta a ChatGPT?' => 'Unos 0,3 vatios hora según las estimaciones publicadas: OpenAI habla de 0,34 Wh por consulta media y Google de 0,24 Wh por pregunta de texto mediana en Gemini. Es más o menos lo que gasta una bombilla LED encendida un par de minutos. Las respuestas largas, los modelos que razonan, las imágenes y sobre todo los vídeos gastan bastante más.',
        '¿Es peor para el medio ambiente usar ChatGPT que buscar en Google?' => 'Una pregunta a un asistente de IA gasta más que una búsqueda tradicional, pero las dos cantidades son pequeñas comparadas con otros usos cotidianos, como ver vídeo en streaming. El impacto que preocupa no es el de cada persona, sino la suma: miles de millones de consultas al día y los centros de datos nuevos que se construyen para atenderlas, a veces en zonas con poca agua.',
        '¿Gasta más energía generar imágenes con IA que escribir texto?' => 'Sí. Generar una imagen exige bastante más cálculo que responder con texto, y un vídeo, muchísimo más, porque son decenas de imágenes por segundo. Repetir la misma imagen diez veces hasta que sale bien multiplica el gasto por diez, así que pedirla bien a la primera es también la opción más eficiente.',
    ],
    'ctaTitle' => 'Pedirlo bien a la primera también ahorra',
    'ctaBody' => 'Cada vez que repites una respuesta o regeneras una imagen, el gasto se multiplica. Los prompts del <a href="/skills">catálogo de skills</a> están probados para que salga bien al primer intento, y en <a href="/guias/como-escribir-prompts-efectivos">cómo escribir prompts efectivos</a> explicamos cómo escribir los tuyos.',
    'body' => <<<'HTML'
<p>«Cada vez que le preguntas algo a ChatGPT se gasta una botella de agua.» La frase circula desde 2023 y se repite en clase, en el trabajo y en redes. En 2025, OpenAI y Google publicaron sus propias cifras, y dicen algo muy distinto: unas pocas gotas por pregunta.</p>

<p>Ninguna de las dos se ha inventado nada. Miden cosas distintas, en momentos distintos. Entender qué cuenta cada una es la única forma de saber cuánto gasta de verdad usar la IA, y dónde está el problema.</p>

<h2 id="por-que">Por qué la IA gasta agua</h2>

<p>ChatGPT, Gemini o Claude no funcionan en tu móvil: cada pregunta viaja a un centro de datos, una nave llena de servidores con chips especializados que hacen el cálculo y devuelven la respuesta. Esos chips consumen electricidad y se calientan mucho.</p>

<p>El agua aparece en dos sitios:</p>

<ul>
    <li><strong>En la refrigeración.</strong> Muchos centros de datos enfrían el aire evaporando agua, como un botijo a lo grande. El agua que se evapora no se recupera. Cuanto más calor hace donde está el centro, más agua necesita.</li>
    <li><strong>En la electricidad.</strong> Las centrales térmicas y nucleares usan agua para refrigerarse. Parte del agua que «gasta» la IA está en realidad en la central que produce la energía, a veces a cientos de kilómetros.</li>
</ul>

<p>A eso se suma el entrenamiento: antes de responder a nadie, un modelo grande pasa semanas o meses calculando en miles de chips. El entrenamiento de GPT-3, en 2020, se estimó en torno a 1.300 megavatios hora, el consumo anual de más de cien hogares. Los modelos actuales son bastante mayores.</p>

<h2 id="cifras">Las cifras publicadas por pregunta</h2>

<figure>
<table>
    <thead>
        <tr><th>Fuente</th><th>Energía por pregunta</th><th>Agua por pregunta</th><th>Qué incluye</th></tr>
    </thead>
    <tbody>
        <tr><td>OpenAI (Sam Altman, junio de 2025)</td><td>0,34 Wh</td><td>Unos 0,32 ml</td><td>Consulta media; no publicó el método</td></tr>
        <tr><td>Google (agosto de 2025)</td><td>0,24 Wh</td><td>0,26 ml, unas cinco gotas</td><td>Pregunta de texto mediana en Gemini; agua de refrigeración del propio centro</td></tr>
        <tr><td>Epoch AI (febrero de 2025)</td><td>Unos 0,3 Wh</td><td>No calculado</td><td>Estimación independiente para una consulta típica a GPT-4o</td></tr>
        <tr><td>Universidad de California en Riverside (2023)</td><td>No es el foco</td><td>Medio litro por cada pocas decenas de respuestas</td><td>Modelo GPT-3; incluye el agua usada para producir la electricidad</td></tr>
    </tbody>
</table>
</figure>

<p>La cifra de Google es la más detallada: es la primera vez que una gran empresa publica una medición con metodología, y según ella el gasto por pregunta se redujo 33 veces entre mayo de 2024 y mayo de 2025 gracias a modelos y chips más eficientes. La de OpenAI encaja con la estimación independiente de Epoch AI, pero se publicó sin explicar cómo se calculó.</p>

<h2 id="diferencias">Por qué unas cifras y otras no coinciden</h2>

<p>La distancia entre «cinco gotas» y «media botella» se explica por tres decisiones:</p>

<ol>
    <li><strong>Qué agua se cuenta.</strong> Google cuenta el agua que se evapora en sus centros de datos. El estudio de Riverside suma también el agua que usan las centrales eléctricas para producir esa energía, que puede ser varias veces mayor.</li>
    <li><strong>Qué modelo y qué año.</strong> El estudio de 2023 se hizo con GPT-3 y datos de eficiencia de entonces. Los chips y los modelos de 2025 gastan bastante menos por respuesta.</li>
    <li><strong>Qué pregunta.</strong> La mediana de Google es una pregunta de texto típica. Una respuesta larga, un documento de cien páginas, un modelo que razona durante un minuto o una investigación en profundidad gastan muchas veces más. Las cifras por pregunta son un punto de partida, no el gasto de tu conversación concreta.</li>
</ol>

<p>Hay un cuarto factor menos visible: las cifras de las empresas no tienen auditoría externa y dejan fuera el entrenamiento, la fabricación de los chips y tu propio dispositivo. Varios investigadores las consideran razonables para lo que miden y a la vez incompletas para lo que importa.</p>

<h2 id="comparar">Comparado con otras cosas que haces</h2>

<p>Con las cifras de 2025, una pregunta de texto gasta unos 0,3 Wh:</p>

<ul>
    <li><strong>Una bombilla LED de 10 W</strong> encendida unos dos minutos.</li>
    <li><strong>Unos segundos de televisión</strong>: Google lo comparó con menos de nueve segundos.</li>
    <li><strong>Una hora de vídeo en streaming</strong> se estimó en decenas de vatios hora, el equivalente a centenares de preguntas de texto.</li>
</ul>

<p>Para el agua, las cinco gotas por pregunta son muy poco al lado de lo que cuesta producir los alimentos o la ropa: un kilo de carne o unos vaqueros se miden en miles de litros. Con estas cifras, el uso de texto de una persona normal es una parte mínima de su huella.</p>

<p>Eso no vale para todo. <strong>Generar imágenes gasta bastante más que el texto, y un vídeo, muchísimo más</strong>, porque son decenas de imágenes por cada segundo. Repetir la misma imagen diez veces hasta que sale bien multiplica el gasto por diez.</p>

<h2 id="total">Dónde está el impacto de verdad</h2>

<p>Si cada pregunta gasta tan poco, ¿por qué preocupa? Por la suma y por el lugar.</p>

<p>La Agencia Internacional de la Energía calculó que los centros de datos consumieron unos 415 teravatios hora en 2024, alrededor del 1,5 % de la electricidad mundial, y que en 2030 pasarán de 900, más o menos lo que consume hoy Japón entero. La IA es la principal razón de ese crecimiento. Con miles de millones de consultas al día, las gotas se convierten en millones de litros.</p>

<p>Y el agua no se gasta en un promedio mundial, sino en un sitio concreto. Un centro de datos que evapora agua en una zona con sequía compite con la agricultura y con el consumo de las casas. En España, los grandes centros de datos proyectados en Aragón y otras regiones han abierto ese debate. Por eso cada vez más centros nuevos usan refrigeración en circuito cerrado o por aire, que gasta menos agua a cambio de algo más de electricidad.</p>

<p>La otra cara es la eficiencia: el gasto por pregunta ha bajado muy deprisa, y una parte de la investigación se dedica precisamente a hacer modelos más pequeños que respondan igual de bien. Si eso compensa el aumento del uso es la gran pregunta abierta.</p>

<h2 id="que-hacer">Qué puedes hacer tú</h2>

<p>Dejar de usar la IA no es la única opción. Hay costumbres que reducen el gasto y además dan mejores resultados:</p>

<ul>
    <li><strong>Pide bien a la primera.</strong> Un prompt claro evita cinco intentos. Es la medida que más ahorra, sobre todo con imágenes. Lo explicamos en <a href="/guias/como-escribir-prompts-efectivos">cómo escribir prompts efectivos</a>.</li>
    <li><strong>Usa el modelo rápido para lo sencillo.</strong> Los modelos que razonan y la investigación en profundidad gastan mucho más; resérvalos para lo que lo necesita.</li>
    <li><strong>No regeneres por regenerar.</strong> Corregir una parte concreta gasta menos que pedir la respuesta entera otra vez.</li>
    <li><strong>No uses un asistente para lo que resuelve una búsqueda.</strong> La hora de un tren o el horario de una tienda no necesitan un modelo de lenguaje.</li>
    <li><strong>Considera un modelo local</strong> para tareas repetitivas: funciona en tu ordenador con su propia electricidad, como contamos en la guía de <a href="/guias/ia-local-privada-en-tu-ordenador">IA local y privada</a>.</li>
</ul>

<p>La respuesta corta a la pregunta del principio: una pregunta de texto a ChatGPT gasta muy poca agua y muy poca energía, bastante menos de lo que dice la famosa botella. Lo que sí es grande es el total, y dónde se construyen los centros de datos que lo hacen posible.</p>
HTML,
];
