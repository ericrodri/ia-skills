<?php

return [
    'title' => 'GEO: cómo conseguir que ChatGPT y Perplexity citen tu web',
    'navTitle' => 'GEO: aparecer en ChatGPT',
    'seoTitle' => 'GEO: cómo aparecer en ChatGPT y Perplexity',
    'description' => 'La búsqueda ya no acaba en Google. Qué es GEO, en qué se diferencia del SEO clásico, qué revisar en tu web para que los motores generativos te citen y cómo medir si está funcionando.',
    'excerpt' => 'Cada vez más gente pregunta a ChatGPT lo que antes buscaba en Google, y en esa respuesta solo aparecen tres o cuatro fuentes. Esto es lo que hay que tener en orden para ser una de ellas.',
    'category' => 'Método',
    'published' => '2026-08-27',
    'updated' => '2026-08-27',
    'readingMinutes' => 10,
    'words' => 1750,
    'about' => 'Generative Engine Optimization',
    'related' => ['como-escribir-prompts-efectivos', 'automatizar-tareas-con-ia-en-el-trabajo', 'prompts-de-ia-por-profesion'],
    'toc' => [
        'que-es' => 'Qué es GEO y por qué aparece ahora',
        'diferencias' => 'En qué se diferencia del SEO de siempre',
        'como-eligen' => 'Cómo elige un motor generativo a quién cita',
        'tecnico' => 'La parte técnica: que puedan leerte',
        'escribir' => 'Cómo escribir para que te citen',
        'medir' => 'Cómo medir algo que no sale en Analytics',
        'errores' => 'Errores que se están pagando caros',
    ],
    'faq' => [
        '¿El GEO sustituye al SEO?' => 'No: se apoya en él. Los motores generativos se nutren en buena parte de páginas que ya están indexadas y bien posicionadas, así que una web que no rastrea ni indexa bien tampoco será citada. GEO es una capa encima —estructura, claridad, datos verificables— no un reemplazo.',
        '¿Sirve de algo el archivo llms.txt?' => 'Sirve como mapa: un índice en Markdown que le dice a un modelo qué páginas tuyas importan y de qué van. Si tu web ya tiene datos estructurados y una arquitectura clara, aporta poco. Si partes de cero en ese terreno, es media hora de trabajo, no tiene riesgo y da un punto de entrada limpio. No es un estándar oficial ni garantiza nada.',
        '¿Cuánto se tarda en notar resultados?' => 'Para consultas de cola larga y muy específicas, entre uno y dos meses desde que la parte técnica está en orden. Para consultas competidas, de tres a seis. Los modelos se actualizan por ciclos y la mayoría de las citas vienen de búsquedas en vivo, así que lo que más acelera es tener contenido indexable y actualizado.',
        '¿Debo bloquear a los bots de IA en robots.txt?' => 'Es una decisión de negocio, no técnica. Si vives de la publicidad en tus páginas, cada respuesta generada es una visita que no recibes. Si vives de que te descubran —catálogos, software, servicios profesionales—, ser citado es un canal de captación nuevo y bloquearlos te deja fuera. No hay una respuesta única.',
        '¿Cómo sé si ChatGPT está enviándome visitas?' => 'Míralo por referrer en tu analítica: los dominios de los asistentes aparecen como origen. Es una medida a la baja, porque muchas citas se leen sin hacer clic. Complétala preguntando directamente a los asistentes por tu categoría, de forma periódica, y anotando si sales y con qué se te describe.',
    ],
    'ctaTitle' => 'Prompts de SEO y contenido listos para usar',
    'ctaBody' => 'Auditar contenido, agrupar consultas por intención o redactar briefings son tareas que se delegan bien. En <a href="/profesiones/marketing">Marketing</a> están los prompts de SEO y contenido mejor valorados; si además tocas la parte técnica, mira los de <a href="/profesiones/desarrollo">Desarrollo</a>.',
    'body' => <<<'HTML'
<p>Durante veinte años el trabajo consistió en salir arriba en una lista de diez enlaces azules. Esa lista sigue existiendo, pero ha dejado de ser el único sitio donde la gente encuentra respuestas: una parte creciente de las consultas termina en un asistente que responde directamente y cita tres o cuatro fuentes.</p>

<p>La aritmética cambia por completo. Donde antes había diez posiciones útiles en primera página, ahora hay tres o cuatro huecos de cita. Y quien no está en esos huecos no existe para esa consulta.</p>

<h2 id="que-es">Qué es GEO y por qué aparece ahora</h2>

<p>GEO —<em>generative engine optimization</em>— es el trabajo de conseguir que los motores generativos usen tu contenido y te nombren cuando responden. Verás la misma idea etiquetada como AEO (optimización para motores de respuesta) o como «SEO para LLM»; el trabajo detrás es prácticamente el mismo.</p>

<p>Aparece ahora porque han coincidido dos cosas: los asistentes conversacionales se han vuelto un punto de entrada habitual a la información, y casi todos han incorporado búsqueda en vivo, así que ya no dependen solo de lo que memorizaron durante el entrenamiento. Eso significa que una página publicada hoy puede ser citada mañana, cosa que hace tres años no pasaba.</p>

<h2 id="diferencias">En qué se diferencia del SEO de siempre</h2>

<figure>
<table>
    <thead>
        <tr><th></th><th>SEO clásico</th><th>GEO</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Qué se disputa</strong></td><td>Una posición en una lista</td><td>Ser una de las fuentes citadas</td></tr>
        <tr><td><strong>Unidad que compite</strong></td><td>La página entera</td><td>El párrafo o la tabla concreta</td></tr>
        <tr><td><strong>Consulta típica</strong></td><td>Dos o tres palabras</td><td>Una pregunta larga y con contexto</td></tr>
        <tr><td><strong>Qué premia</strong></td><td>Autoridad, enlaces, relevancia</td><td>Claridad, datos concretos, estructura</td></tr>
        <tr><td><strong>Cómo se mide</strong></td><td>Posición media, clics, impresiones</td><td>Frecuencia de cita y cómo te describen</td></tr>
    </tbody>
</table>
</figure>

<p>La fila que más cambia el trabajo diario es la segunda. Al motor generativo no le sirve tu página: le sirve el trozo que responde. Si la respuesta a «cuánto cuesta X» está repartida entre la introducción, un apartado a mitad de página y una nota al pie, ese trozo no existe y no te citarán, aunque la página esté la primera en Google.</p>

<h2 id="como-eligen">Cómo elige un motor generativo a quién cita</h2>

<p>Simplificando el proceso a lo que importa: el asistente reformula tu pregunta en varias consultas, recupera páginas, extrae de cada una los fragmentos que parecen responder y compone la respuesta citando de dónde salió cada afirmación.</p>

<p>De ahí se deducen las tres condiciones para entrar:</p>

<ol>
    <li><strong>Que puedan leerte.</strong> Si tu contenido solo existe después de ejecutar JavaScript, o si el bot está bloqueado, no hay nada que extraer.</li>
    <li><strong>Que el fragmento se sostenga solo.</strong> Un párrafo que empieza con «como decíamos antes» es inservible fuera de contexto.</li>
    <li><strong>Que haya algo concreto que citar.</strong> Una cifra, un plazo, una tabla comparativa, un procedimiento numerado. Las afirmaciones vagas no se citan porque no aportan nada a la respuesta.</li>
</ol>

<h2 id="tecnico">La parte técnica: que puedan leerte</h2>

<p>Antes de escribir una línea nueva, revisa esto. Es aburrido y es lo que más suele fallar.</p>

<ul>
    <li><strong>El HTML inicial trae el contenido.</strong> Si trabajas con una aplicación de una sola página, comprueba lo que se sirve antes de ejecutar JavaScript. Muchos rastreadores de IA no renderizan. Si tu <code>&lt;h1&gt;</code>, tu descripción y tu texto principal solo aparecen tras el JavaScript, para esos bots tu página está vacía.</li>
    <li><strong>Los bots de IA no están bloqueados.</strong> Revisa <code>robots.txt</code> y también las reglas de tu CDN o cortafuegos, que es donde se cae la mayoría sin enterarse. Los agentes a mirar hoy son <code>GPTBot</code>, <code>ClaudeBot</code>, <code>PerplexityBot</code>, <code>Google-Extended</code> y <code>Bingbot</code>.</li>
    <li><strong>Datos estructurados donde toca.</strong> <code>Organization</code> en todo el sitio, <code>Article</code> con fecha de publicación y actualización en el contenido editorial, <code>FAQPage</code> donde de verdad haya preguntas, <code>BreadcrumbList</code> para dar jerarquía. No es magia: es decirle a la máquina qué es cada cosa en lugar de esperar a que lo deduzca.</li>
    <li><strong>Sitemap sano y fechas reales.</strong> Un <code>lastmod</code> que miente entrena a los rastreadores a ignorarlo.</li>
    <li><strong>Un <code>llms.txt</code>, si quieres.</strong> Un índice en Markdown con tus páginas importantes y una línea de qué es cada una. No es estándar oficial ni garantiza nada, pero cuesta media hora y no rompe nada.</li>
</ul>

<h2 id="escribir">Cómo escribir para que te citen</h2>

<p>Cinco cambios en la forma de redactar que se notan más que cualquier otra cosa:</p>

<p><strong>1. Responde en la primera frase del apartado.</strong> El titular plantea una pregunta y el párrafo siguiente la contesta entera, sin preámbulo. Todo lo demás —matices, ejemplos, excepciones— va después. Si tu primer párrafo es una introducción sobre lo mucho que ha cambiado el sector, has desperdiciado el único trozo que se iba a leer.</p>

<p><strong>2. Titula con la pregunta literal.</strong> «Cuánto cuesta ejecutar un agente de IA» funciona mejor que «Consideraciones económicas». El titular es lo que empareja tu contenido con la consulta.</p>

<p><strong>3. Sustituye lo vago por lo concreto.</strong> «Considerablemente más rápido» no se cita nunca. «De 40 minutos a 6» sí. Si no tienes el dato, mide algo o cuenta un caso real; ese es exactamente el tipo de material que no puede generarse solo.</p>

<p><strong>4. Haz párrafos autosuficientes.</strong> Que cada uno se entienda arrancado de la página. Repite el sujeto en lugar de arrastrar un pronombre desde tres párrafos atrás.</p>

<p><strong>5. Usa tablas y listas para lo comparable.</strong> Una tabla de tres columnas es la forma más densa y extraíble de responder a «cuál es la diferencia entre», que es media internet.</p>

<p>Esto no es una técnica nueva: es escribir con la estructura que ya pedías en un buen <a href="/guias/como-escribir-prompts-efectivos">prompt</a>. Contexto claro, afirmación concreta, formato explícito.</p>

<h2 id="medir">Cómo medir algo que no sale en Analytics</h2>

<p>La medición es la parte incómoda: buena parte del valor son citas que nadie clica. Tres medidas que sí se pueden llevar:</p>

<ul>
    <li><strong>Tráfico por origen.</strong> Filtra en tu analítica las visitas cuyo referente sean los dominios de los asistentes. Es la punta del iceberg, pero es la única cifra dura que vas a tener.</li>
    <li><strong>Auditoría periódica de citas.</strong> Escoge quince preguntas que un cliente tuyo haría de verdad y lánzalas una vez al mes en dos o tres asistentes. Anota si sales, en qué posición del texto y con qué frase se te describe. Ese registro, tres meses seguidos, dice más que cualquier herramienta.</li>
    <li><strong>Peticiones de los rastreadores.</strong> En los registros del servidor, cuántas veces pasan <code>GPTBot</code> o <code>ClaudeBot</code> y por qué páginas. Si no pasan, el problema es técnico y no de contenido.</li>
</ul>

<p>Las dos primeras se automatizan bien: lanzar quince preguntas, guardar respuestas y comparar con el mes anterior es justo el tipo de tarea repetitiva y verificable que conviene delegar, con el método de <a href="/guias/automatizar-tareas-con-ia-en-el-trabajo">automatizar tareas con IA</a>.</p>

<h2 id="errores">Errores que se están pagando caros</h2>

<ol>
    <li><strong>Bloquear a los bots de IA sin pensarlo.</strong> Tiene sentido para un medio que vive de la publicidad. Para casi todos los demás negocios es cerrarse un canal de descubrimiento.</li>
    <li><strong>Publicar en masa contenido generado.</strong> Lo que se cita es lo que aporta algo que no estaba: datos propios, experiencia, comparativas hechas de verdad. Cien artículos intercambiables no producen ninguna cita y sí degradan la percepción del sitio.</li>
    <li><strong>Confiar el contenido al renderizado en cliente.</strong> El error técnico más caro y el más invisible, porque en tu navegador se ve perfecto.</li>
    <li><strong>Datos estructurados que no coinciden con la página.</strong> Marcar como FAQ preguntas que el usuario no ve es motivo de penalización, no un atajo.</li>
    <li><strong>Abandonar el SEO clásico.</strong> Las citas salen mayoritariamente de páginas indexadas y bien posicionadas. Quien deja caer lo básico se queda fuera de las dos listas a la vez.</li>
</ol>
HTML,
];
