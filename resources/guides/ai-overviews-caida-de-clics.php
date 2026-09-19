<?php

return [
    'title' => 'AI Overviews: por qué caen los clics y qué hacer',
    'navTitle' => 'AI Overviews y la caída de clics',
    'seoTitle' => 'AI Overviews: por qué caen tus clics',
    'description' => 'Qué dicen los estudios de Ahrefs y Seer sobre la caída de CTR con AI Overviews, a qué consultas afecta de verdad y qué hacer con las que ya no traen clics.',
    'excerpt' => 'Sigues saliendo el primero y las visitas bajan. No es una penalización: es que encima de tu resultado hay una respuesta que ya contesta la pregunta. Esto es lo que miden los estudios, a quién afecta de verdad y qué se puede hacer.',
    'category' => 'Método',
    'published' => '2026-09-18',
    'updated' => '2026-09-18',
    'readingMinutes' => 11,
    'words' => 1814,
    'about' => 'Google AI Overviews y CTR orgánico',
    'related' => ['eeat-experiencia-contenido-con-ia', 'medir-el-trafico-de-ia', 'aparecer-en-chatgpt-y-perplexity-geo', 'escribir-contenido-seo-con-ia', 'keyword-research-con-ia'],
    'toc' => [
        'que-cambia' => 'Qué ha cambiado en la página de resultados',
        'los-datos' => 'Qué dicen los datos y qué no dicen',
        'a-quien-afecta' => 'A qué consultas afecta y a cuáles no',
        'diagnostico' => 'Cómo saber si te está pasando a ti',
        'que-hacer' => 'Qué hacer con las consultas que ya no traen clics',
        'no-funciona' => 'Lo que no funciona',
        'plan' => 'Un plan de noventa días',
    ],
    'faq' => [
        '¿Cuánto CTR se pierde con un AI Overview encima?' => 'Depende del estudio y de la muestra. Ahrefs comparó 300.000 palabras clave —la mitad con AI Overview y la mitad informativas sin él— entre marzo de 2024 y marzo de 2025, y encontró un 34,5 % menos de CTR en la primera posición cuando había AI Overview. Seer Interactive, con su propia cartera de clientes, midió caídas mayores: del 1,76 % al 0,61 % de CTR orgánico. Las dos cifras miden cosas distintas sobre muestras distintas, así que el rango honesto es «entre un tercio y dos tercios de los clics, según el tipo de consulta».',
        '¿Es una penalización de Google?' => 'No. Tu posición no ha cambiado y tus impresiones probablemente hayan subido. Lo que ha cambiado es lo que hay por encima de tu resultado: un bloque que responde la pregunta y hace innecesario el clic. Por eso en Search Console se ve el patrón clásico de este fenómeno —impresiones planas o al alza, clics a la baja, posición media intacta— que no se parece en nada a una caída por actualización de algoritmo.',
        '¿Se ha estabilizado la caída?' => 'Parcialmente. Tras año y medio de descensos, los datos de Seer muestran un repunte del CTR orgánico en consultas con AI Overview entre diciembre de 2025 y febrero de 2026, de en torno al 1,3 % al 2,4 %. Es una recuperación real pero sigue muy por debajo del punto de partida, y conviene tratarla como un suelo nuevo, no como una vuelta a lo anterior.',
        '¿Sale a cuenta bloquear a Google para no aparecer en AI Overviews?' => 'No hay una forma de salir de AI Overviews sin salir también de la búsqueda normal: la directiva que los excluye afecta a los fragmentos que Google puede mostrar de tu página, así que también te deja sin fragmento destacado y con un resultado más pobre. En la práctica es cambiar una pérdida de clics por una pérdida mayor.',
        '¿Conviene entonces dejar de publicar contenido informativo?' => 'Conviene dejar de publicar contenido informativo que solo repite el consenso, que es justo lo que el bloque generado resume mejor que nadie. Lo que sigue trayendo clics es lo que la respuesta generada no puede contener: datos propios, herramientas, comparativas hechas de verdad, criterio de alguien que ha hecho el trabajo. El mismo material que hace que te citen.',
    ],
    'ctaTitle' => 'Prompts de SEO y analítica para el trabajo del día',
    'ctaBody' => 'Clasificar consultas por intención, cruzar Search Console con la analítica o redactar el informe mensual son tareas que se delegan bien. En <a href="/profesiones/marketing">Marketing</a> están los prompts de SEO y contenido mejor valorados; la parte técnica está en <a href="/profesiones/desarrollo">Desarrollo</a>.',
    'body' => <<<'HTML'
<p>El cuadro es siempre el mismo. Las impresiones en Search Console están igual o mejor que hace un año, la posición media no se ha movido, y los clics llevan meses cayendo. Nadie ha tocado la web y no hay ninguna penalización. Lo que hay es un bloque de respuesta generada encima de los diez resultados de siempre.</p>

<p>Esto no se arregla optimizando más. Se arregla entendiendo qué consultas se han vuelto improductivas y moviendo el esfuerzo a las que no.</p>

<h2 id="que-cambia">Qué ha cambiado en la página de resultados</h2>

<p>Durante veinte años el trato fue implícito: Google formulaba la pregunta y tú ponías la respuesta, a cambio de la visita. Los AI Overviews rompen ese trato en una parte del inventario. El buscador compone la respuesta a partir de varias fuentes, la muestra arriba del todo y cita a unas pocas con un enlace pequeño.</p>

<p>La consecuencia aritmética es inmediata: para las consultas donde aparece ese bloque, el número de usuarios que llega a mirar los resultados azules baja. No porque tu resultado sea peor, sino porque la pregunta ya está contestada antes de llegar a él. A principios de 2026 se estimaba que en torno al 68 % de las búsquedas en Estados Unidos terminaban sin ningún clic.</p>

<h2 id="los-datos">Qué dicen los datos y qué no dicen</h2>

<p>Hay dos estudios que se citan constantemente y que conviene separar, porque miden cosas distintas y la diferencia importa.</p>

<figure>
<table>
    <thead>
        <tr><th></th><th>Ahrefs</th><th>Seer Interactive</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Muestra</strong></td><td>300.000 palabras clave: 150.000 con AI Overview y 150.000 informativas sin él</td><td>Cartera propia de clientes, miles de consultas por sector</td></tr>
        <tr><td><strong>Fuente</strong></td><td>Datos agregados de Search Console, escritorio</td><td>Search Console de los clientes</td></tr>
        <tr><td><strong>Comparación</strong></td><td>Marzo de 2024 frente a marzo de 2025</td><td>Serie mensual continuada</td></tr>
        <tr><td><strong>Resultado</strong></td><td>−34,5 % de CTR en la primera posición</td><td>CTR orgánico del 1,76 % al 0,61 %</td></tr>
    </tbody>
</table>
</figure>

<p>El dato más útil de Ahrefs no es el titular, es el detalle: el CTR de la primera posición en consultas informativas <em>sin</em> AI Overview también bajó, de 0,056 a 0,031. Es decir, una parte de la caída no es culpa del bloque generado: la página de resultados lleva años llenándose de elementos que se comen el clic. Quien atribuya el cien por cien de su caída a los AI Overviews se va a equivocar al decidir qué hacer.</p>

<p>El de Seer aporta la otra mitad: la caída es mucho más profunda en la parte comercial del embudo, donde el CTR de los anuncios se desplomó del 19,7 % al 6,34 %. Y también aporta la buena noticia, que casi nadie cuenta: entre diciembre de 2025 y febrero de 2026 el CTR orgánico en consultas con AI Overview repuntó de alrededor del 1,3 % al 2,4 %. La sangría no es indefinida, pero el suelo nuevo está muy por debajo del anterior.</p>

<p>Conclusión operativa: trabaja con un rango, no con una cifra. Entre un tercio y dos tercios de los clics de una consulta informativa competida, según sector y tipo de pregunta.</p>

<h2 id="a-quien-afecta">A qué consultas afecta y a cuáles no</h2>

<p>La pérdida no se reparte por igual. Se concentra con bastante precisión en un tipo de consulta:</p>

<ul>
    <li><strong>Definiciones y «qué es».</strong> Es el peor sitio donde estar. La respuesta cabe en tres frases y el bloque generado la da entera.</li>
    <li><strong>Datos sueltos.</strong> Conversiones, fechas, cifras, requisitos. Nadie va a hacer clic para leer un número que ya ve.</li>
    <li><strong>Cómo se hace algo sencillo.</strong> Cinco pasos que caben en una lista se resumen sin pérdida.</li>
</ul>

<p>Y se nota mucho menos, o nada, en:</p>

<ul>
    <li><strong>Consultas con marca.</strong> Quien busca tu nombre quiere tu web, no un resumen.</li>
    <li><strong>Transaccionales.</strong> Comprar, contratar, reservar, descargar. El bloque no puede completar la tarea.</li>
    <li><strong>Consultas donde la respuesta es un juicio.</strong> «Merece la pena», «cuál elijo en mi caso», «qué falla de verdad». Un resumen del consenso no le vale a quien está decidiendo con dinero encima de la mesa.</li>
    <li><strong>Herramientas, calculadoras, catálogos y datos consultables.</strong> No son texto: son algo que se usa.</li>
</ul>

<p>Esa lista es, en la práctica, el mapa de hacia dónde mover el esfuerzo editorial.</p>

<h2 id="diagnostico">Cómo saber si te está pasando a ti</h2>

<p>Media hora de Search Console bien gastada vale más que cualquier estimación de sector:</p>

<ol>
    <li><strong>Compara doce meses contra doce meses</strong>, no mes contra mes, para no confundir estacionalidad con tendencia estructural.</li>
    <li><strong>Ordena por pérdida de clics</strong> y quédate con las cincuenta consultas que más han caído.</li>
    <li><strong>Marca las que mantienen impresiones y posición.</strong> Ese es el patrón: si pierdes clics con impresiones estables y posición estable, no es un problema de posicionamiento.</li>
    <li><strong>Clasifícalas por intención</strong> con los tipos del apartado anterior. Vas a ver que casi todas las pérdidas se concentran en el grupo informativo.</li>
    <li><strong>Añade el informe de IA generativa</strong> que Search Console abrió a todos los sitios en 2026: te dice en qué páginas apareces dentro de las respuestas generadas, aunque todavía no te dé clics ni consultas. Cómo leerlo está en la <a href="/guias/medir-el-trafico-de-ia">guía de medición del tráfico de IA</a>.</li>
</ol>

<p>Los pasos 2 a 4 son exactamente el tipo de trabajo repetitivo y verificable que conviene delegar en un modelo con el CSV exportado delante, con el método de la <a href="/guias/keyword-research-con-ia">investigación de palabras clave con IA</a>.</p>

<h2 id="que-hacer">Qué hacer con las consultas que ya no traen clics</h2>

<p>Hay cuatro salidas y las cuatro son legítimas según el caso.</p>

<p><strong>1. Dejar de perseguirlas.</strong> Suena a derrota y es la decisión más rentable en muchos casos. Si una consulta trae mil impresiones y doce clics, y el bloque generado responde mejor que tú, el esfuerzo de mantener esa página rinde más en otra parte. Mantenla actualizada porque alimenta tus citas, pero no le dediques campañas.</p>

<p><strong>2. Convertirlas en material que no se puede resumir.</strong> Es la salida más productiva. Una tabla comparativa con datos que has medido tú, una calculadora, una plantilla descargable, un estudio con muestra propia. Todo eso genera visitas precisamente porque el resumen no lo sustituye: lo cita.</p>

<p><strong>3. Aspirar a la cita en lugar de al clic.</strong> Si vas a estar en el bloque de todas formas, más vale ser una de las fuentes citadas: el clic residual desde una cita es escaso, pero la marca se lleva la asociación. Aquí manda el trabajo de estructura y concreción que describe la <a href="/guias/aparecer-en-chatgpt-y-perplexity-geo">guía de GEO</a>.</p>

<p><strong>4. Bajar por el embudo.</strong> Si te estás quedando sin tráfico informativo, la cobertura de tus consultas comparativas, de precio y de «para quién es esto» probablemente esté sin trabajar. Ahí es donde el clic sobrevive y donde además convierte.</p>

<p>Un apunte de medición: si dejas de contar visitas y no pones nada en su lugar, vas a tomar decisiones a ciegas durante un año. Cambia el indicador antes de cambiar la estrategia, no después, con la lógica de <a href="/guias/medir-si-la-ia-ahorra-tiempo">medir si algo ahorra tiempo de verdad</a>.</p>

<h2 id="no-funciona">Lo que no funciona</h2>

<ol>
    <li><strong>Publicar más de lo mismo.</strong> Si el problema es que tu contenido es resumible, cincuenta artículos más igual de resumibles no lo arreglan. Además es el perfil exacto que persigue la política de abuso de contenido a escala, como cuenta la guía de <a href="/guias/escribir-contenido-seo-con-ia">contenido SEO con IA</a>.</li>
    <li><strong>Bloquear fragmentos para no aparecer.</strong> Te saca del bloque generado y también del fragmento destacado y de una parte del resultado normal. Cambias una pérdida por otra mayor.</li>
    <li><strong>Reescribir la misma página cada trimestre.</strong> Cambiar las palabras de sitio no cambia el motivo por el que no te hacen clic.</li>
    <li><strong>Mirar solo la posición media.</strong> Es el indicador que peor envejece: puede estar perfecta mientras el negocio se cae.</li>
    <li><strong>Esperar a que vuelva.</strong> El repunte de principios de 2026 es real y es pequeño. Planificar sobre la hipótesis de que esto se revierte es planificar sobre un deseo.</li>
</ol>

<h2 id="plan">Un plan de noventa días</h2>

<figure>
<table>
    <thead>
        <tr><th>Semanas</th><th>Qué se hace</th><th>Qué tienes al final</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>1–2</strong></td><td>Diagnóstico en Search Console y clasificación por intención de las 50 consultas que más caen</td><td>Saber qué parte de la caída es estructural</td></tr>
        <tr><td><strong>3–4</strong></td><td>Medición: canal de asistentes en la analítica, informe de IA generativa, auditoría de citas</td><td>Un cuadro de mando que no depende solo del clic</td></tr>
        <tr><td><strong>5–8</strong></td><td>Reconversión de las diez páginas con más impresiones y menos clics en material no resumible</td><td>Piezas que se citan y que además se visitan</td></tr>
        <tr><td><strong>9–12</strong></td><td>Cobertura de la parte comparativa y transaccional que falte</td><td>Tráfico donde el clic sigue existiendo</td></tr>
    </tbody>
</table>
</figure>

<p>Noventa días es el plazo mínimo razonable para ver movimiento, porque los datos de Search Console necesitan semanas para consolidar y las decisiones editoriales tardan en indexarse. Lo que no conviene es esperar noventa días sin haber montado antes la medición: es el único paso que, si se retrasa, invalida todos los demás.</p>
HTML,
];
