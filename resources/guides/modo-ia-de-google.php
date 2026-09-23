<?php

return [
    'title' => 'Modo IA de Google: qué es y qué cambia para tu web',
    'navTitle' => 'Modo IA de Google',
    'seoTitle' => 'Modo IA de Google: qué cambia para tu web',
    'description' => 'Cómo funciona el Modo IA de Google, en qué se diferencia de los AI Overviews, cómo se mide en Search Console y qué hacer para que tu web aparezca citada.',
    'excerpt' => 'Desde octubre de 2025 en España hay una pestaña en Google que no enseña diez enlaces: conversa. El Modo IA cambia qué búsquedas llegan a tu web y cómo se miden. Esto es lo que se sabe, lo que no y qué hacer mientras tanto.',
    'category' => 'Método',
    'published' => '2026-09-23',
    'updated' => '2026-09-23',
    'readingMinutes' => 9,
    'words' => 1467,
    'about' => 'Modo IA de Google (AI Mode)',
    'related' => ['ai-overviews-caida-de-clics', 'aparecer-en-chatgpt-y-perplexity-geo', 'medir-el-trafico-de-ia', 'google-search-console-guia', 'datos-estructurados-para-ia', 'eeat-experiencia-contenido-con-ia'],
    'toc' => [
        'que-es' => 'Qué es el Modo IA',
        'diferencias' => 'Modo IA frente a AI Overviews',
        'como-elige' => 'Cómo elige las fuentes',
        'medir' => 'Cómo se mide',
        'que-hacer' => 'Qué hacer para aparecer',
        'controlar' => 'Si prefieres no aparecer',
        'errores' => 'Lo que no hace falta hacer',
    ],
    'faq' => [
        '¿Desde cuándo está el Modo IA en España?' => 'Google empezó a desplegarlo en España el 8 de octubre de 2025, junto con una cincuentena de países más y 36 idiomas nuevos. Aparece como una opción dentro de la página de resultados y en las aplicaciones de Google para Android e iOS.',
        '¿Hace falta optimizar algo especial para el Modo IA?' => 'Google dice que no: para aparecer basta con que la página esté indexada y pueda mostrar un fragmento en la búsqueda normal. No hay marcado, archivo ni etiqueta específicos. En la práctica, lo que más pesa es lo de siempre, llevado más lejos: páginas que resuelven una parte concreta de una pregunta mejor que nadie.',
        '¿Puedo ver en Search Console los clics del Modo IA?' => 'Los clics y las impresiones del Modo IA cuentan dentro del total de búsqueda web del informe de rendimiento, pero no se pueden separar ahí. Para ver en qué páginas apareces en respuestas generativas está el informe de IA generativa, que da impresiones por página y no da consultas.',
        '¿Bloquear Google-Extended me saca del Modo IA?' => 'No. Google-Extended controla si tu contenido se usa para entrenar y mejorar los modelos Gemini, no si aparece en las funciones de IA de la búsqueda. Para limitar lo que Google muestra de tu página en esas funciones se usan las mismas directivas de fragmento que en la búsqueda normal.',
        '¿El Modo IA va a sustituir a la búsqueda normal?' => 'De momento convive con ella: es una pestaña opcional y la mayoría de las búsquedas siguen pasando por los resultados de siempre, a menudo con un AI Overview encima. Lo razonable es tratarlo como un canal más que crece, y medirlo, no como el fin del tráfico orgánico.',
    ],
    'ctaTitle' => 'Prompts para preparar contenido que se cite',
    'ctaBody' => 'Auditar qué preguntas cubre una página, reescribir secciones para que respondan solas o comprobar en qué respuestas apareces: en <a href="/profesiones/marketing">Marketing</a> están los prompts de SEO y contenido mejor valorados.',
    'body' => <<<'HTML'
<p>El Modo IA es la respuesta de Google a ChatGPT y Perplexity dentro del propio buscador. Escribes una pregunta larga, Google responde con un texto generado y enlaces a las fuentes, y puedes seguir preguntando sobre lo mismo. No hay diez resultados azules, o no como protagonistas.</p>

<p>Para quien tiene una web, la pregunta es práctica: qué parte de mis visitas pasa por ahí, cómo se entera Google de que existo en ese formato y qué puedo hacer. Vamos por partes.</p>

<h2 id="que-es">Qué es el Modo IA</h2>

<p>Es un modo de búsqueda conversacional basado en Gemini. Google lo lanzó en Estados Unidos en 2025 y empezó a desplegarlo en España el 8 de octubre de ese año. Se accede desde un botón en la página de resultados y desde las aplicaciones móviles, y admite texto, voz e imágenes.</p>

<p>Su rasgo técnico más importante es lo que Google llama <em>query fan-out</em>, descomposición de la consulta: en lugar de buscar tu pregunta tal cual, la divide en subpreguntas, lanza muchas búsquedas a la vez y compone la respuesta con lo que encuentra. Si preguntas «qué portátil me compro para editar vídeo con 1.200 euros», por debajo se buscan cosas como requisitos de edición, modelos en ese rango, comparativas y opiniones.</p>

<p>Google dice que las preguntas en el Modo IA son dos o tres veces más largas que en la búsqueda tradicional. Ese dato explica casi todo lo que viene después.</p>

<h2 id="diferencias">Modo IA frente a AI Overviews</h2>

<p>Se confunden a menudo y funcionan distinto:</p>

<figure>
<table>
    <thead>
        <tr><th></th><th>AI Overviews</th><th>Modo IA</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Dónde aparece</strong></td><td>Encima de los resultados normales, solo en algunas búsquedas</td><td>En una pestaña o modo aparte que el usuario elige</td></tr>
        <tr><td><strong>Formato</strong></td><td>Un resumen corto y cerrado</td><td>Una conversación con preguntas de seguimiento</td></tr>
        <tr><td><strong>Tipo de consulta</strong></td><td>Cualquiera, sobre todo informativas</td><td>Largas, con matices, comparativas, de planificación</td></tr>
        <tr><td><strong>Resultados normales</strong></td><td>Siguen debajo</td><td>Pasan a segundo plano</td></tr>
    </tbody>
</table>
</figure>

<p>La consecuencia es que afectan a búsquedas distintas. Los AI Overviews se comen el clic de las preguntas sencillas, y cómo se nota eso en tus datos está en la guía de <a href="/guias/ai-overviews-caida-de-clics">AI Overviews y la caída de clics</a>. El Modo IA, en cambio, se lleva preguntas complejas que antes se repartían en cinco o seis búsquedas. Esa persona antes visitaba varias webs; ahora puede no visitar ninguna, o visitar una sola con mucha más intención.</p>

<h2 id="como-elige">Cómo elige las fuentes</h2>

<p>Google no publica el mecanismo exacto, pero de lo que sí ha contado se deducen tres cosas útiles:</p>

<ol>
    <li><strong>Parte del índice de siempre.</strong> Las subconsultas se resuelven con la búsqueda normal, así que una página que no está indexada o que no posiciona para nada relacionado no tiene por dónde entrar.</li>
    <li><strong>Premia la parte concreta, no la página entera.</strong> Como la pregunta se trocea, lo que se cita es la página que mejor responde a un trozo: un requisito, una comparación, un dato. Una página que habla de todo un poco compite peor que una que resuelve una subpregunta a fondo.</li>
    <li><strong>Busca variedad.</strong> Google ha dicho que intenta mostrar un abanico más amplio de fuentes que en la búsqueda clásica. Eso abre una puerta a webs medianas con información específica que en los diez azules nunca salían.</li>
</ol>

<p>Es la misma lógica que se aplica a los asistentes externos, y el trabajo que funciona en ChatGPT o Perplexity funciona aquí casi sin cambios. Está desarrollado en la guía de <a href="/guias/aparecer-en-chatgpt-y-perplexity-geo">cómo aparecer en ChatGPT y Perplexity</a>.</p>

<h2 id="medir">Cómo se mide</h2>

<p>La medición es el punto débil, y conviene saber exactamente qué tienes:</p>

<ul>
    <li><strong>Informe de rendimiento de Search Console.</strong> Los clics e impresiones del Modo IA van incluidos en el total de búsqueda web, mezclados con el resto. No hay un filtro para separarlos.</li>
    <li><strong>Informe de IA generativa.</strong> Da impresiones por página en AI Overviews, Modo IA y Discover. Sirve para saber dónde apareces, no cuánto te trae. La lectura de este informe está en la guía de <a href="/guias/medir-el-trafico-de-ia">medir el tráfico de IA</a>.</li>
    <li><strong>Tu analítica.</strong> Las visitas desde el Modo IA llegan como tráfico orgánico de Google; no se distinguen por la fuente.</li>
</ul>

<p>Lo práctico es vigilar una señal indirecta: páginas cuyas impresiones en el informe de IA generativa suben mientras los clics del informe normal no cambian. Si además usas bien la herramienta en general, con la rutina de la guía de <a href="/guias/google-search-console-guia">Google Search Console</a>, verás estos movimientos a tiempo.</p>

<h2 id="que-hacer">Qué hacer para aparecer</h2>

<p>No hay un truco específico, y quien lo venda está vendiendo humo. Lo que sí hay es una lista de cosas que ya eran buenas prácticas y ahora pesan más:</p>

<ol>
    <li><strong>Cubre las subpreguntas.</strong> Para cada página importante, apunta las cinco o seis preguntas en las que se descompondría una consulta larga sobre ese tema. Cada una debería tener una respuesta clara, en un párrafo que se entienda solo, bajo un encabezado que la nombre.</li>
    <li><strong>Pon datos que no estén en otra parte.</strong> Precios reales, medidas, pruebas propias, casos. Cuando diez fuentes dicen lo mismo, el modelo cita a una cualquiera; cuando tú tienes el dato, te cita a ti.</li>
    <li><strong>Escribe comparativas de verdad.</strong> El Modo IA recibe muchas preguntas del tipo «A o B para mi caso». Una tabla con criterios explícitos y una recomendación por perfil es exactamente lo que necesita citar.</li>
    <li><strong>Deja claro quién escribe y por qué sabe.</strong> Autoría, experiencia y fuentes. Es la parte de la <a href="/guias/eeat-experiencia-contenido-con-ia">guía de E-E-A-T</a> que más se nota en respuestas generadas.</li>
    <li><strong>Cuida lo técnico básico.</strong> Que la página se indexe, que el contenido esté en el HTML y no dependa de JavaScript, y que los <a href="/guias/datos-estructurados-para-ia">datos estructurados</a> describan bien qué es cada cosa.</li>
</ol>

<h2 id="controlar">Si prefieres no aparecer</h2>

<p>Hay contenidos que no te interesa ver resumidos: material de pago, información sensible o textos que pierden el sentido sin contexto. Las herramientas son las mismas que para los fragmentos normales:</p>

<ul>
    <li><code>nosnippet</code> en la etiqueta meta robots impide mostrar fragmentos de la página, también en las funciones de IA.</li>
    <li><code>data-nosnippet</code> en un elemento concreto excluye solo esa parte.</li>
    <li><code>max-snippet</code> limita la longitud del fragmento.</li>
</ul>

<p>El coste es real: esas directivas afectan también a cómo sales en la búsqueda normal. Y el error más común es pensar que bloquear <code>Google-Extended</code> en robots.txt te saca del Modo IA; no lo hace, porque ese agente solo controla el uso de tu contenido para entrenar Gemini.</p>

<h2 id="errores">Lo que no hace falta hacer</h2>

<ul>
    <li><strong>Crear páginas «para el Modo IA».</strong> Google usa el mismo índice. Una página duplicada con otro enfoque solo te crea una <a href="/guias/canibalizacion-de-keywords">canibalización</a>.</li>
    <li><strong>Rellenar con preguntas y respuestas genéricas.</strong> Un bloque de FAQ con respuestas que están en todas partes no aporta nada que citar.</li>
    <li><strong>Reescribirlo todo en tono conversacional.</strong> El modelo no necesita que le hables como un chatbot; necesita respuestas claras y datos.</li>
    <li><strong>Dar el tráfico orgánico por muerto.</strong> El Modo IA crece, pero es opcional y convive con la búsqueda clásica. Abandonar lo que funciona por lo que se intuye es la peor apuesta de las dos.</li>
</ul>

<p>Resumido: el Modo IA no pide otra web, pide una más precisa. Si cada página importante responde bien a las preguntas concretas de su tema, con datos propios, estarás en buena posición para las dos búsquedas, la de siempre y la que conversa.</p>
HTML,
];
