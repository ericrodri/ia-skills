<?php

return [
    'title' => 'Enlazado interno: la arquitectura que decide qué posiciona',
    'navTitle' => 'Enlazado interno',
    'seoTitle' => 'Enlazado interno: guía práctica',
    'description' => 'Cómo auditar el enlazado interno de una web, encontrar páginas huérfanas y decidir qué enlazar desde dónde. Con método, no con un plugin que enlaza solo.',
    'excerpt' => 'Es la única palanca de SEO que controlas al cien por cien y la que casi nadie revisa. Aquí está el método para auditarla en una tarde y decidir los enlaces uno a uno.',
    'category' => 'Método',
    'published' => '2026-09-20',
    'updated' => '2026-09-20',
    'readingMinutes' => 11,
    'words' => 1831,
    'about' => 'El enlazado interno y la arquitectura de la información como palanca de posicionamiento',
    'related' => ['actualizar-contenido-antiguo-con-ia', 'auditoria-seo-tecnica', 'seo-programatico-con-ia', 'escribir-contenido-seo-con-ia', 'datos-estructurados-para-ia'],
    'toc' => [
        'importa' => 'Por qué decide más de lo que parece',
        'modelo' => 'El modelo mental: tres señales y una distancia',
        'auditar' => 'Cómo auditar el tuyo en una tarde',
        'decidir' => 'Qué enlazar desde dónde',
        'ia' => 'Dónde ayuda la IA y dónde estorba',
        'errores' => 'Errores que se repiten',
        'revision' => 'La revisión trimestral en quince minutos',
    ],
    'faq' => [
        '¿Cuántos enlaces internos debe llevar una página?' => 'No hay un número. Google retiró hace años el consejo de «menos de cien enlaces por página» de su documentación precisamente porque era arbitrario. El criterio útil es otro: cada enlace del cuerpo debería responder a una pregunta que le surge al lector en ese punto exacto del texto. Si un artículo de mil quinientas palabras tiene cinco o seis enlaces así, va sobrado. Si tiene treinta, casi seguro que hay una plantilla metiéndolos sola y ninguno significa nada.',
        '¿El anchor text interno puede penalizarme por sobreoptimización?' => 'Los filtros de anchor text sobreoptimizado están pensados para enlaces externos, que es donde hay incentivo económico para manipular. En enlaces internos el riesgo real no es la penalización, es la ambigüedad: si veinte páginas enlazan a destinos distintos con el texto «más información», has desperdiciado veinte señales. Usa como texto la consulta que resuelve la página de destino, escrita de forma que encaje en la frase.',
        '¿Sirve de algo el bloque de «artículos relacionados» del final?' => 'Sirve para que la página no quede huérfana y para que el rastreador llegue, y poco más. Es un enlace que el lector ve cuando ya ha decidido irse y que todas las páginas de la plantilla reparten igual. El enlace que mueve la aguja es el del cuerpo, en el párrafo donde el lector se está haciendo esa pregunta. Ten los dos, pero no cuentes el automático como trabajo hecho.',
        '¿Qué hago con las páginas huérfanas que no merecen enlaces?' => 'Si nadie encuentra una razón natural para enlazarlas desde el contenido existente, esa es la respuesta sobre su valor. Mételas en el ciclo de decisión de contenido: actualizar, fusionar con la página que sí tiene enlaces, o retirar con redirección. Mantener una página viva solo porque existe es cómo se acumulan los cientos de URLs que luego se rastrean sin que nadie las lea.',
        '¿Cambia algo el enlazado interno para la visibilidad en IA?' => 'Cambia el motivo, no la técnica. Los rastreadores de los modelos hacen lo mismo que Googlebot: seguir enlaces de HTML normales desde las páginas que ya conocen. Una página a la que solo se llega por un buscador interno o por JavaScript es invisible para ambos. Lo que sí es específico de la IA es que el texto del enlace y el párrafo que lo rodea aportan contexto sobre de qué va el destino, y eso ayuda a que se cite la página correcta.',
    ],
    'ctaTitle' => 'Prompts de SEO revisados por gente que vive de esto',
    'ctaBody' => 'Auditoría de contenido, clasificación por intención y briefings, votados por profesionales: <a href="/profesiones/marketing">Marketing</a>. Para la parte de rastreo y plantillas, mira <a href="/profesiones/desarrollo">Desarrollo</a>.',
    'body' => <<<'HTML'
<p>El enlazado interno es la única señal de posicionamiento que controlas por completo. No dependes de que nadie te enlace, ni de un presupuesto, ni de un algoritmo que cambia cada trimestre: decides tú, desde tu CMS, en cinco minutos. Y es justo por eso que casi nadie lo revisa. Lo que se puede hacer cuando sea acaba no haciéndose nunca.</p>

<p>Esta guía es el método que usamos para auditar el enlazado de un sitio, decidir enlaces uno a uno y no volver a tocarlo hasta el trimestre siguiente.</p>

<h2 id="importa">Por qué decide más de lo que parece</h2>

<p>La documentación de Google es explícita en un punto que suena obvio y se incumple todo el rato: <strong>cada página que te importe tiene que tener un enlace desde al menos otra página de tu sitio</strong>, y ese enlace tiene que ser un <code>&lt;a&gt;</code> con <code>href</code>. Lo que no se enlaza así, sencillamente, no se rastrea con fiabilidad.</p>

<p>A partir de ahí, el enlazado interno hace tres trabajos a la vez:</p>

<figure>
<table>
    <thead>
        <tr><th>Trabajo</th><th>Qué decide</th><th>Se rompe cuando…</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Descubrimiento</strong></td><td>Que una URL llegue a rastrearse</td><td>La página solo se alcanza por buscador interno, filtro o JavaScript</td></tr>
        <tr><td><strong>Reparto de relevancia</strong></td><td>Cuál de tus páginas se considera la principal para un tema</td><td>Diez páginas enlazan al mismo tema y cada una apunta a un destino distinto</td></tr>
        <tr><td><strong>Contexto</strong></td><td>De qué entiende el buscador que va el destino</td><td>Todos los enlaces dicen «leer más» o «aquí»</td></tr>
    </tbody>
</table>
</figure>

<p>Los tres fallan en silencio. No hay ningún aviso en Search Console que diga «esta página lleva ocho meses sin un solo enlace entrante». Por eso conviene auditarlo a mano de vez en cuando.</p>

<h2 id="modelo">El modelo mental: tres señales y una distancia</h2>

<p>Para decidir enlaces sin perderse en teoría, basta con mirar cuatro cosas de cada página:</p>

<ul>
    <li><strong>Enlaces entrantes internos.</strong> Cuántas páginas tuyas la enlazan. Cero es el número que hay que cazar; uno, si ese uno es el bloque automático del pie, es prácticamente cero.</li>
    <li><strong>Profundidad de clic.</strong> Cuántos clics desde la portada. Lo que vive a cuatro o cinco clics se rastrea menos y más tarde. No porque haya un umbral mágico, sino porque la profundidad es el síntoma de que nada importante enlaza ahí.</li>
    <li><strong>Texto del enlace.</strong> Qué dicen los enlaces que apuntan a esa página. Si los agrupas y no forman una idea clara, el buscador tampoco la tiene.</li>
    <li><strong>Coherencia del destino.</strong> Para cada tema, una sola página debería ser el destino por defecto. Si no la tienes decidida, tus enlaces la están decidiendo por ti, y mal.</li>
</ul>

<p>Ese cuarto punto es el que más tráfico mueve y el que más se ignora. Cuando dos páginas propias compiten por la misma intención, el reparto de enlaces internos suele ser la causa, no la consecuencia.</p>

<h2 id="auditar">Cómo auditar el tuyo en una tarde</h2>

<p>No hace falta comprar nada. El orden importa más que la herramienta.</p>

<h3>1. Saca la lista real de URLs</h3>

<p>Tu sitemap es lo que tú crees que tienes. Un rastreo es lo que hay. Pasa un rastreador de escritorio (Screaming Frog en su versión gratuita llega para quinientas URLs, que cubre la mayoría de sitios pequeños) y exporta dos informes: <em>Inlinks</em> y <em>Crawl Depth</em>.</p>

<h3>2. Cruza con el sitemap para encontrar huérfanas</h3>

<p>Las URLs que están en el sitemap y no aparecen en el rastreo son huérfanas: existen, las declaras, y no hay forma de llegar a ellas navegando. Es el hallazgo más rentable de toda la auditoría porque se arregla con un enlace.</p>

<pre><code>comm -13 &lt;(sort urls-rastreadas.txt) &lt;(sort urls-sitemap.txt)</code></pre>

<h3>3. Cruza con Search Console</h3>

<p>Exporta las consultas de los últimos tres meses y agrúpalas por consulta, no por página. Si una misma consulta trae impresiones a dos o más URLs tuyas, tienes un destino sin decidir. Esa lista, ordenada por impresiones, es tu orden de trabajo.</p>

<h3>4. Revisa los textos de enlace</h3>

<p>Del informe de <em>Inlinks</em>, filtra por página de destino y mira la columna de anchor. Busca dos patrones: enlaces genéricos («aquí», «este artículo») y anchors que describen un tema que la página de destino ya no trata porque la reescribiste hace un año.</p>

<h2 id="decidir">Qué enlazar desde dónde</h2>

<p>La regla que mejor aguanta: <strong>el enlace se escribe desde la página que tiene la duda, no desde la que tiene la respuesta</strong>. Es decir, se trabaja hacia atrás. Eliges la página que quieres reforzar, buscas en tu propio sitio las páginas que hablan de temas adyacentes, y en cada una encuentras el párrafo donde el lector se hace exactamente esa pregunta.</p>

<p>Para encontrar esos párrafos, la búsqueda de Google sobre tu propio dominio sigue siendo lo más rápido:</p>

<pre><code>site:tudominio.com "expresión exacta del tema"</code></pre>

<p>Lo que obtienes es la lista de páginas que ya mencionan el tema sin enlazarlo. Cada una es un enlace natural esperando a ser puesto.</p>

<figure>
<table>
    <thead>
        <tr><th>Tipo de página</th><th>Hacia dónde enlaza</th><th>Cuántos enlaces del cuerpo</th></tr>
    </thead>
    <tbody>
        <tr><td>Pilar (tema amplio)</td><td>A sus páginas de detalle, en el párrafo que las introduce</td><td>Uno por subtema, sin bloque de lista</td></tr>
        <tr><td>Detalle (consulta concreta)</td><td>Al pilar, una vez, arriba; y a dos o tres hermanas</td><td>3–6</td></tr>
        <tr><td>Comercial (producto, servicio)</td><td>Recibe enlaces; emite pocos y solo a prueba o documentación</td><td>1–3</td></tr>
        <tr><td>Noticia o actualidad</td><td>Al contenido evergreen que da contexto</td><td>2–4</td></tr>
    </tbody>
</table>
</figure>

<p>Y una regla de higiene: un enlace por destino y por página. El segundo enlace a la misma URL en el mismo texto no aporta nada y en la mayoría de motores solo cuenta el primer anchor.</p>

<h2 id="ia">Dónde ayuda la IA y dónde estorba</h2>

<p>Aquí conviene separar dos usos que se venden como el mismo.</p>

<p><strong>Donde ayuda:</strong> en la parte de búsqueda y agrupación, que es trabajo mecánico sobre datos que ya tienes. Pegarle el export de consultas de Search Console y pedirle que agrupe por intención saca los conflictos de destino en un minuto. Pasarle la lista de títulos y URLs de tu sitio y pedirle candidatos de enlace para una página concreta funciona bien, siempre que tú verifiques cada sugerencia. El método completo de agrupación está en la <a href="/guias/keyword-research-con-ia">guía de keyword research con IA</a>.</p>

<p><strong>Donde estorba:</strong> los plugins que insertan enlaces automáticamente al detectar una palabra. Producen exactamente el patrón que quieres evitar: enlaces en mitad de frases donde el lector no tenía ninguna duda, anchors idénticos repetidos por todo el sitio y destinos elegidos por coincidencia de cadena. Si ya tienes uno instalado, revisa su informe antes de dar por bueno tu enlazado: suele ser la fuente de la mitad de los problemas de la auditoría.</p>

<p>Un aviso que aplica siempre que le pidas a un modelo que proponga enlaces sobre tu sitio: se inventará URLs que suenan plausibles. Pásale la lista real de tus URLs en el prompt y comprueba cada una antes de publicar. El porqué está en la <a href="/guias/alucinaciones-de-la-ia">guía sobre alucinaciones</a>.</p>

<h2 id="errores">Errores que se repiten</h2>

<ul>
    <li><strong>Confundir el menú con la arquitectura.</strong> El menú resuelve la navegación de la portada hacia abajo. La arquitectura es lo que pasa entre páginas del mismo nivel, y eso solo lo construye el cuerpo del texto.</li>
    <li><strong>Enlazar con JavaScript.</strong> Un <code>onclick</code> sobre un <code>&lt;div&gt;</code> no es un enlace para ningún rastreador. Si el sitio es una SPA, comprueba qué ve un cliente sin JavaScript antes de dar nada por hecho: la <a href="/guias/auditoria-seo-tecnica">auditoría técnica</a> explica cómo.</li>
    <li><strong>Dejar los enlaces de la versión antigua.</strong> Cuando fusionas o reescribes una página, los enlaces que apuntaban a la vieja siguen ahí, encadenando redirecciones. Actualiza el destino en origen, no solo la redirección.</li>
    <li><strong>Enlazar todo a la portada.</strong> La portada no necesita enlaces internos: los tiene todos. Los que hacen falta apuntan hacia abajo.</li>
    <li><strong>Añadir enlaces sin quitar ninguno.</strong> Una página con cuarenta enlaces en el cuerpo no tiene una arquitectura fuerte; tiene una lista de la compra.</li>
</ul>

<h2 id="revision">La revisión trimestral en quince minutos</h2>

<p>Una vez hecha la auditoría inicial, esto es todo lo que hay que repetir:</p>

<ol>
    <li>Rastrea el sitio y exporta <em>Crawl Depth</em>. ¿Hay algo nuevo a más de tres clics que debería estar más cerca?</li>
    <li>Cruza sitemap contra rastreo. ¿Páginas huérfanas nuevas? Suelen ser las publicadas en el último trimestre.</li>
    <li>En Search Console, filtra las cinco consultas con más impresiones y comprueba que cada una tiene una sola URL respondiendo.</li>
    <li>Para cada página publicada en el trimestre, busca con <code>site:</code> dos sitios donde enlazarla desde contenido anterior. Dos, no diez.</li>
</ol>

<p>Es una tarea de mantenimiento, no un proyecto. Lo que la hace rentable es que se haga; lo que la hace inútil es convertirla en una auditoría de cien páginas que nadie va a leer. Si al terminar el trimestre solo has puesto doce enlaces bien puestos, el trimestre ha ido bien.</p>
HTML,
];
