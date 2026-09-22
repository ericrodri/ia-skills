<?php

return [
    'title' => 'Auditoría SEO técnica: el checklist que mueve la aguja',
    'navTitle' => 'Auditoría SEO técnica',
    'seoTitle' => 'Auditoría SEO técnica: checklist 2026',
    'description' => 'En qué orden mirar las cosas: indexación, renderizado de JavaScript, Core Web Vitals y datos estructurados. Con los umbrales reales y qué parte se delega.',
    'excerpt' => 'Casi todas las auditorías técnicas empiezan por donde no toca y acaban en un informe de doscientos avisos que nadie ejecuta. Este es el orden que sí importa, con los umbrales que se miden de verdad y la parte que conviene delegar.',
    'category' => 'Método',
    'published' => '2026-09-18',
    'updated' => '2026-09-18',
    'readingMinutes' => 12,
    'words' => 2056,
    'about' => 'Auditoría SEO técnica',
    'related' => ['paginas-que-google-no-indexa', 'diagnosticar-caida-de-trafico-seo', 'enlazado-interno-y-arquitectura-web', 'datos-estructurados-para-ia', 'medir-el-trafico-de-ia', 'aparecer-en-chatgpt-y-perplexity-geo', 'ai-overviews-caida-de-clics', 'escribir-contenido-seo-con-ia'],
    'toc' => [
        'orden' => 'El orden importa más que la herramienta',
        'indexacion' => 'Capa 1: que puedan llegar e indexarte',
        'render' => 'Capa 2: que vean el contenido sin ejecutar JavaScript',
        'vitals' => 'Capa 3: Core Web Vitals, con los umbrales reales',
        'estructurados' => 'Capa 4: datos estructurados que no mienten',
        'arquitectura' => 'Capa 5: arquitectura y enlazado interno',
        'con-ia' => 'Qué parte de esto se delega en un modelo',
        'informe' => 'Cómo entregar el informe para que se ejecute',
    ],
    'faq' => [
        '¿Cada cuánto hay que hacer una auditoría técnica?' => 'Una completa al año y una revisión corta cada trimestre basta para la mayoría de sitios. Lo que sí conviene es la vigilancia continua de cuatro señales: páginas indexadas, errores de rastreo, Core Web Vitals en datos de campo y cobertura de datos estructurados. Un despliegue puede romper cualquiera de las cuatro un martes por la tarde, y descubrirlo en la auditoría anual sale carísimo.',
        '¿Cuáles son los umbrales de Core Web Vitals?' => 'Tres métricas y tres umbrales para considerarse «bueno»: LCP igual o menor a 2,5 segundos, INP igual o menor a 200 milisegundos y CLS igual o menor a 0,1. Lo que casi siempre se olvida es cómo se evalúan: sobre usuarios reales de Chrome, en el percentil 75 y en una ventana de 28 días. Por eso un informe de laboratorio en verde puede convivir con datos de campo en rojo, y los que cuentan son los de campo.',
        '¿INP sustituyó a FID?' => 'Sí, INP reemplazó por completo a First Input Delay en marzo de 2024 como métrica de interactividad. El cambio no fue cosmético: FID medía solo el retraso de la primera interacción, mientras que INP mide la respuesta a lo largo de toda la visita. Muchos sitios que iban sobrados con FID suspenden con INP, y la causa suele ser la misma: demasiado JavaScript ejecutándose en el hilo principal después de la carga.',
        '¿Una web hecha con JavaScript posiciona bien?' => 'Puede posicionar en Google, que renderiza, y lo tiene mucho más difícil en el resto de sitios donde hoy conviene aparecer. Buena parte de los rastreadores de IA no ejecutan JavaScript: si tu texto, tu H1 y tu descripción solo existen después del JavaScript, para ellos tu página está vacía. La solución no es abandonar el framework, es servir en el HTML inicial el contenido que quieres que se lea, aunque la interactividad llegue después.',
        '¿Vale la pena pasar una herramienta de rastreo si ya uso Search Console?' => 'Sí, porque ven cosas distintas. Search Console te dice qué ha hecho Google con tus páginas; un rastreador te dice qué hay en tu sitio, incluidas las páginas que Google todavía no ha visto, las cadenas de redirecciones, los enlaces rotos y las plantillas con el mismo título repetido cuatrocientas veces. El diagnóstico bueno sale de cruzar las dos fuentes, no de elegir una.',
    ],
    'ctaTitle' => 'La parte repetitiva de una auditoría se delega bien',
    'ctaBody' => 'Clasificar avisos por impacto, redactar las incidencias para el equipo técnico o generar el JSON-LD de una plantilla son tareas mecánicas. Los prompts están en <a href="/profesiones/desarrollo">Desarrollo</a> y en <a href="/profesiones/marketing">Marketing</a>.',
    'body' => <<<'HTML'
<p>La auditoría técnica típica termina en una hoja con doscientos avisos ordenados por severidad según la herramienta, que nadie del equipo de desarrollo va a ejecutar porque no hay forma de saber cuáles de los doscientos cambian algo. El problema no es la herramienta: es que se ha auditado sin un orden de dependencias.</p>

<p>Hay un orden, y es bastante estricto, porque cada capa solo tiene sentido si la anterior está resuelta.</p>

<h2 id="orden">El orden importa más que la herramienta</h2>

<figure>
<table>
    <thead>
        <tr><th>Capa</th><th>Pregunta que responde</th><th>Si falla…</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>1. Acceso e indexación</strong></td><td>¿Pueden llegar y guardar la página?</td><td>Nada de lo demás importa</td></tr>
        <tr><td><strong>2. Renderizado</strong></td><td>¿Ven el contenido sin ejecutar JavaScript?</td><td>Existes para Google y no para los asistentes</td></tr>
        <tr><td><strong>3. Rendimiento</strong></td><td>¿La experiencia real es aceptable?</td><td>Pierdes conversión y algo de posición</td></tr>
        <tr><td><strong>4. Datos estructurados</strong></td><td>¿Entienden qué es cada cosa?</td><td>Pierdes resultados enriquecidos y contexto</td></tr>
        <tr><td><strong>5. Arquitectura</strong></td><td>¿Hay camino hasta lo importante?</td><td>Tienes páginas huérfanas que nadie encuentra</td></tr>
    </tbody>
</table>
</figure>

<p>Optimizar el rendimiento de una página que está bloqueada por <code>robots.txt</code> es trabajo tirado. Ordenar la auditoría por esta escalera evita ese desperdicio y, de paso, produce un informe con prioridades defendibles.</p>

<p>Esta misma escalera sirve de lista de descarte cuando el tráfico ya ha caído y hay que encontrar la causa; el orden completo, incluyendo las causas que no son técnicas, está en la <a href="/guias/diagnosticar-caida-de-trafico-seo">guía de diagnóstico de caídas de tráfico</a>.</p>

<h2 id="indexacion">Capa 1: que puedan llegar e indexarte</h2>

<p>Cinco comprobaciones, en este orden:</p>

<ol>
    <li><strong><code>robots.txt</code> y reglas del CDN.</strong> Revisa las dos cosas. La mayoría de bloqueos accidentales no están en el fichero, están en una regla de cortafuegos o en una limitación de tasa que devuelve 429 a los rastreadores. En el fichero se ve; en el CDN hay que ir a mirar.</li>
    <li><strong>Etiquetas <code>noindex</code> supervivientes.</strong> El clásico eterno: el <code>noindex</code> del entorno de pruebas que sube a producción con el despliegue. Cuesta un minuto comprobarlo y explica más caídas de tráfico que cualquier actualización de algoritmo.</li>
    <li><strong>Canónicas coherentes.</strong> Que cada página apunte a sí misma salvo que haya un motivo, que no haya cadenas de canónica a canónica y que la versión canónica sea indexable. Una canónica que apunta a una página con <code>noindex</code> es una forma silenciosa de desindexar una sección entera.</li>
    <li><strong>Sitemap sano.</strong> Solo URL indexables, con código 200, sin redirecciones, y con <code>lastmod</code> verdadero. Un <code>lastmod</code> que miente enseña a los rastreadores a ignorarlo, y recuperar esa confianza cuesta meses.</li>
    <li><strong>Códigos de estado y redirecciones.</strong> Cadenas de más de un salto, bucles, y sobre todo páginas que devuelven 200 diciendo «no encontrado» en el texto. Esas últimas son las peores porque ninguna herramienta las marca sola.</li>
</ol>

<p>Estas cinco comprobaciones resuelven los motivos técnicos del informe de indexación. Los dos que no son técnicos —«Descubierta» y «Rastreada: actualmente sin indexar»— no se arreglan aquí y tienen su propio diagnóstico en la <a href="/guias/paginas-que-google-no-indexa">guía de páginas que Google no indexa</a>.</p>

<p>Contrasta el resultado con el informe de páginas de Search Console. Si tu rastreador ve 4.000 URL y Google tiene 900 indexadas, ahí está el diagnóstico antes de mirar ninguna otra capa.</p>

<h2 id="render">Capa 2: que vean el contenido sin ejecutar JavaScript</h2>

<p>Esta capa ha pasado de ser un detalle a ser decisiva, y el motivo no es Google: es que una parte creciente de las visitas nace en un asistente, y buena parte de los rastreadores de IA no renderizan JavaScript.</p>

<p>La comprobación es de treinta segundos: pide el HTML de tu página como lo pediría un bot, sin ejecutar nada, y búscalo. ¿Está el <code>&lt;h1&gt;</code>? ¿Está el texto del artículo? ¿Está la descripción? ¿Está el enlace canónico? Si la respuesta a alguna es que no, para ese rastreador tu página está en blanco.</p>

<p>El caso más habitual es una aplicación de una sola página donde todo el contenido viaja en un JSON y se pinta en el cliente. No hace falta rehacerla: basta con emitir desde el servidor lo que tiene que ser legible —title, descripción, canónica, datos estructurados y una versión textual del contenido visible— y dejar que el JavaScript se encargue de la interactividad. Es el mismo principio que describe la parte técnica de la <a href="/guias/aparecer-en-chatgpt-y-perplexity-geo">guía de GEO</a>.</p>

<p>Dos comprobaciones más en esta capa: que los enlaces internos sean etiquetas <code>&lt;a href&gt;</code> de verdad —un <code>div</code> con un manejador de clic no es un enlace para nadie que no ejecute JavaScript— y que la paginación y los filtros no dependan exclusivamente del JavaScript para llegar al contenido profundo.</p>

<h2 id="vitals">Capa 3: Core Web Vitals, con los umbrales reales</h2>

<figure>
<table>
    <thead>
        <tr><th>Métrica</th><th>Qué mide</th><th>Umbral «bueno»</th><th>Causa habitual del suspenso</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>LCP</strong></td><td>Cuándo aparece el elemento principal</td><td>≤ 2,5 s</td><td>Imagen de cabecera sin optimizar o servidor lento</td></tr>
        <tr><td><strong>INP</strong></td><td>Respuesta a las interacciones, toda la visita</td><td>≤ 200 ms</td><td>Demasiado JavaScript en el hilo principal</td></tr>
        <tr><td><strong>CLS</strong></td><td>Cuánto se mueve el contenido al cargar</td><td>≤ 0,1</td><td>Imágenes y anuncios sin dimensiones reservadas</td></tr>
    </tbody>
</table>
</figure>

<p>La parte que casi nadie cuenta es cómo se evalúan: sobre <strong>usuarios reales de Chrome</strong>, en el <strong>percentil 75</strong> y en una <strong>ventana de 28 días</strong>. De ahí salen las dos consecuencias prácticas que más confusión evitan.</p>

<p>La primera: un informe de laboratorio en verde no significa nada si los datos de campo están en rojo. El laboratorio mide un ordenador potente con buena conexión; el campo mide a tu público con su móvil de hace tres años en el metro. Audita siempre con datos de campo y usa el laboratorio solo para diagnosticar la causa.</p>

<p>La segunda: si arreglas algo hoy, el dato tarda hasta cuatro semanas en reflejarlo del todo, porque la ventana es móvil. Quien despliega un arreglo el lunes y da marcha atrás el jueves porque «no ha servido de nada» está tirando trabajo bueno.</p>

<p>INP es la métrica que más suspensos nuevos ha producido desde que sustituyó a FID en marzo de 2024, y el motivo es estructural: FID medía el retraso de la primera interacción y INP mide la respuesta durante toda la visita. Los sitios cargados de etiquetas de terceros y de JavaScript que sigue trabajando después de pintar la página pasaban el primero y suspenden el segundo.</p>

<h2 id="estructurados">Capa 4: datos estructurados que no mienten</h2>

<p>El marcado sirve para decirle a la máquina qué es cada cosa en lugar de esperar a que lo deduzca. Conviene tener la expectativa calibrada —no compra citas en los asistentes, y hay un estudio que lo midió—, pero sigue decidiendo el aspecto de tu resultado: el detalle está en la guía de <a href="/guias/datos-estructurados-para-ia">datos estructurados</a>.</p>

<ul>
    <li><strong><code>Organization</code></strong> en todo el sitio, con el nombre, el logotipo y los perfiles oficiales. Es lo que consolida quién eres como entidad.</li>
    <li><strong><code>Article</code></strong> en contenido editorial, con fecha de publicación, fecha de actualización y autor real.</li>
    <li><strong><code>BreadcrumbList</code></strong> para dar jerarquía explícita.</li>
    <li><strong><code>FAQPage</code></strong> solo donde el usuario vea de verdad esas preguntas en la página. Marcar preguntas invisibles es motivo de acción manual, no un atajo.</li>
    <li><strong><code>Product</code>, <code>JobPosting</code>, <code>Event</code>…</strong> según el tipo de sitio, y siempre con datos que coincidan con lo que se ve.</li>
</ul>

<p>La regla que resume la capa entera: <strong>el marcado describe la página, no la mejora</strong>. En cuanto dice algo que la página no dice, deja de ser una ventaja y pasa a ser un riesgo.</p>

<h2 id="arquitectura">Capa 5: arquitectura y enlazado interno</h2>

<p>Tres comprobaciones que descubren más problemas de los que parece:</p>

<ol>
    <li><strong>Profundidad de clic.</strong> Cuántos clics hay desde la portada hasta cada página importante. Más de tres es una señal de que algo relevante está enterrado.</li>
    <li><strong>Páginas huérfanas.</strong> URL que están en el sitemap y no recibe ningún enlace interno. Se crean solas cada vez que alguien publica algo y no lo enlaza desde ninguna parte.</li>
    <li><strong>Canibalización.</strong> Varias páginas compitiendo por la misma intención, que es un problema de contenido con síntomas técnicos. Se detecta cruzando consultas de Search Console con URL, y el método está en la guía de <a href="/guias/keyword-research-con-ia">keyword research con IA</a>. Cuando la causa de fondo es el reparto de enlaces internos, se corrige antes en la <a href="/guias/enlazado-interno-y-arquitectura-web">arquitectura de enlazado</a> que reescribiendo el texto.</li>
</ol>

<h2 id="con-ia">Qué parte de esto se delega en un modelo</h2>

<p>La detección sigue siendo de las herramientas y el criterio sigue siendo tuyo. Lo que se delega bien es lo de en medio:</p>

<ul>
    <li><strong>Clasificar y priorizar avisos.</strong> Dale el CSV del rastreo y pide que agrupe los avisos por causa raíz y los ordene por impacto estimado, con una justificación de una línea por grupo. Un informe de doscientos avisos se convierte en ocho problemas.</li>
    <li><strong>Redactar las incidencias.</strong> Convertir cada problema en un ticket con contexto, ejemplo reproducible y criterio de aceptación es escritura estructurada, no análisis.</li>
    <li><strong>Generar y revisar JSON-LD.</strong> Producir el marcado de una plantilla a partir del HTML real y comprobar que cada campo tiene reflejo visible en la página.</li>
    <li><strong>Explicar el porqué al equipo de negocio.</strong> Traducir «INP de 480 ms en el percentil 75» a por qué se pierden pedidos.</li>
</ul>

<p>Lo que no se delega: decidir qué se arregla primero con el presupuesto que hay. Y conviene desconfiar de cualquier cifra que el modelo aporte por su cuenta —umbrales, porcentajes de mejora, volúmenes—, por el motivo que explica la guía de <a href="/guias/alucinaciones-de-la-ia">alucinaciones</a>: rellenar huecos con material plausible es exactamente lo que hace.</p>

<h2 id="informe">Cómo entregar el informe para que se ejecute</h2>

<p>Un informe técnico que nadie ejecuta no es un informe, es un documento. Cuatro reglas que cambian la tasa de ejecución más que cualquier hallazgo:</p>

<ol>
    <li><strong>Ocho problemas, no doscientos avisos.</strong> Agrupa por causa raíz: cuarenta páginas con el mismo título repetido son un problema de plantilla, no cuarenta incidencias.</li>
    <li><strong>Cada problema con su coste y su efecto esperado.</strong> «Dos horas de front, arregla el CLS de la plantilla de producto» se prioriza; «mejorar CLS» se pospone indefinidamente.</li>
    <li><strong>Una comprobación de verificación por problema.</strong> Qué hay que mirar para saber que está resuelto, y cuándo se podrá mirar —recordando la ventana de 28 días de los datos de campo—.</li>
    <li><strong>Una línea base guardada.</strong> Páginas indexadas, Core Web Vitals de campo, impresiones y errores de rastreo el día de la auditoría. Sin esa foto, dentro de tres meses nadie podrá decir si sirvió de algo, que es la conversación que decide si habrá presupuesto la próxima vez. La medición de la parte de IA está en <a href="/guias/medir-el-trafico-de-ia">cómo medir el tráfico que llega desde la IA</a>.</li>
</ol>
HTML,
];
