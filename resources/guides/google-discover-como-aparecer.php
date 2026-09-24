<?php

return [
    'title' => 'Google Discover: cómo aparecer y por qué el tráfico sube y baja',
    'navTitle' => 'Google Discover',
    'seoTitle' => 'Google Discover: cómo aparecer y conseguir tráfico',
    'description' => 'Qué es Google Discover, qué cambió con su core update de 2026, qué requisitos técnicos tiene y cómo medirlo en Search Console sin confundirlo con el orgánico.',
    'excerpt' => 'Discover puede mandarte más visitas en un día que la búsqueda en un mes, y quitártelas igual de rápido. No se posiciona con palabras clave: se gana con temas, imágenes y confianza. Esto es lo que funciona después del update de 2026.',
    'category' => 'Método',
    'published' => '2026-09-24',
    'updated' => '2026-09-24',
    'readingMinutes' => 9,
    'words' => 1421,
    'about' => 'Google Discover',
    'related' => ['google-search-console-guia', 'eeat-experiencia-contenido-con-ia', 'diagnosticar-caida-de-trafico-seo', 'titulos-y-meta-descriptions-que-consiguen-clics', 'autoridad-tematica-y-clusters-de-contenido', 'medir-el-trafico-de-ia'],
    'toc' => [
        'que-es' => 'Qué es Discover y en qué se diferencia de la búsqueda',
        'update-2026' => 'Qué cambió con el update de 2026',
        'requisitos' => 'Requisitos técnicos',
        'contenido' => 'Qué contenido entra',
        'medir' => 'Cómo medirlo',
        'volatilidad' => 'Por qué sube y baja',
        'errores' => 'Errores que te sacan del feed',
    ],
    'faq' => [
        '¿Hay que hacer algo para darse de alta en Discover?' => 'No. No existe registro ni etiqueta especial: cualquier página indexada que cumpla las políticas de contenido de Google puede aparecer. Lo que sí conviene es permitir imágenes grandes con max-image-preview:large, porque sin ellas las tarjetas son pequeñas y reciben muchos menos clics.',
        '¿Por qué no veo el informe de Discover en Search Console?' => 'El informe solo aparece cuando la propiedad alcanza un mínimo de impresiones en Discover. Si no lo ves, lo normal es que tu web todavía no haya salido en el feed con suficiente frecuencia, no que haya un error de configuración.',
        '¿Las palabras clave sirven para Discover?' => 'Muy poco. Discover no responde a una consulta sino a los intereses que Google atribuye a cada usuario, así que lo que cuenta es el tema de la página, su actualidad y su calidad. El título importa, pero por su capacidad de despertar interés sin exagerar, no por incluir una keyword.',
        '¿Discover sirve para webs que no son medios?' => 'Sí, aunque en menor medida. Tiendas, blogs profesionales y webs de servicios aparecen con guías, novedades de su sector o contenido de temporada. Lo que casi nunca funciona es el contenido comercial puro, como fichas de producto o páginas de precios.',
        '¿Se puede recuperar el tráfico de Discover tras una caída?' => 'A veces vuelve solo, porque el feed es volátil por naturaleza. Si la caída coincide con un update y no se recupera en semanas, la vía es la misma que en la búsqueda: menos piezas recicladas, más contenido original de los temas en los que la web tiene experiencia demostrada, y títulos que prometan lo que la página cumple.',
    ],
    'ctaTitle' => 'Prompts para planificar contenido de actualidad',
    'ctaBody' => 'Detectar temas con tirón, proponer ángulos originales o revisar que un titular no sea clickbait: en <a href="/profesiones/marketing">Marketing</a> están los prompts de contenido y SEO mejor valorados.',
    'body' => <<<'HTML'
<p>Google Discover es el feed de artículos que aparece en la aplicación de Google y en la página de inicio de Google en el móvil. Nadie busca nada: Google decide qué enseñar a cada persona según lo que sabe de sus intereses. Para muchos medios es la primera fuente de tráfico, y para casi todos es la más imprevisible.</p>

<p>Esta guía explica cómo funciona, qué cambió con el update de 2026 y qué hacer para aparecer sin depender de él.</p>

<h2 id="que-es">Qué es Discover y en qué se diferencia de la búsqueda</h2>

<p>La diferencia de fondo es que en la búsqueda hay una consulta y en Discover no. Eso cambia las reglas:</p>

<figure>
<table>
    <thead>
        <tr><th></th><th>Búsqueda</th><th>Discover</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Qué lo activa</strong></td><td>Una consulta del usuario</td><td>Los intereses que Google atribuye al usuario</td></tr>
        <tr><td><strong>Qué pesa más</strong></td><td>Relevancia para la consulta</td><td>Tema, actualidad, imagen y calidad del sitio</td></tr>
        <tr><td><strong>Vida del tráfico</strong></td><td>Estable durante meses</td><td>Picos de uno a tres días</td></tr>
        <tr><td><strong>Contenido típico</strong></td><td>Respuestas, guías, fichas</td><td>Novedades, historias, guías con gancho</td></tr>
    </tbody>
</table>
</figure>

<p>Por eso las <a href="/guias/keyword-research-con-ia">palabras clave</a> apenas cuentan aquí. Lo que cuenta es que Google entienda de qué va tu web, que te considere fiable en ese tema y que la pieza sea lo bastante nueva o atractiva como para enseñarla sin que nadie la haya pedido.</p>

<h2 id="update-2026">Qué cambió con el update de 2026</h2>

<p>El 5 de febrero de 2026 Google lanzó el primer core update dedicado solo a Discover. Empezó por los usuarios en inglés de Estados Unidos, con la expansión a otros países e idiomas anunciada para después. La dirección que describió Google tiene tres ejes:</p>

<ol>
    <li><strong>Más contenido local.</strong> Prioridad a las webs del país del usuario frente a las extranjeras que tratan el mismo tema.</li>
    <li><strong>Menos sensacionalismo.</strong> Los titulares que exageran o esconden el dato para forzar el clic pierden visibilidad.</li>
    <li><strong>Más profundidad y experiencia.</strong> Se favorece el contenido original y reciente de sitios con experiencia demostrada en cada tema, frente a los textos reescritos a partir de otros.</li>
</ol>

<p>El tercer punto es el que más ha dolido. Muchas webs vivían de reescribir la noticia del día con un titular llamativo, y ese modelo es justo el que el update castiga. Las que han resistido suelen tener un foco temático estrecho y firmas reconocibles, lo que se explica en la guía de <a href="/guias/eeat-experiencia-contenido-con-ia">E-E-A-T</a>.</p>

<h2 id="requisitos">Requisitos técnicos</h2>

<p>No hace falta darse de alta. Cualquier página indexada que cumpla las políticas de contenido puede aparecer. Pero hay cuatro detalles que marcan la diferencia:</p>

<ul>
    <li><strong>Imágenes grandes.</strong> Google recomienda imágenes de al menos 1.200 píxeles de ancho y permitir su uso a tamaño grande con <code>max-image-preview:large</code> en la meta robots. Sin eso, la tarjeta sale con una miniatura y la tasa de clics cae mucho.</li>
    <li><strong>Imagen relevante, no el logotipo.</strong> La imagen principal debe representar el contenido. Los logotipos y las imágenes genéricas de banco rinden peor.</li>
    <li><strong>Título fiel.</strong> El título de la página es el que aparece en la tarjeta. Tiene que despertar interés y cumplir lo que promete; en la guía de <a href="/guias/titulos-y-meta-descriptions-que-consiguen-clics">títulos que consiguen clics</a> está cómo equilibrar las dos cosas.</li>
    <li><strong>Fecha y autor visibles.</strong> Discover da mucho peso a la actualidad. Una fecha clara en la página y en los <a href="/guias/datos-estructurados-para-ia">datos estructurados</a> ayuda a que Google sepa cuándo es nuevo.</li>
</ul>

<h2 id="contenido">Qué contenido entra</h2>

<p>Lo que mejor funciona en Discover tiene algo que contar ahora y está escrito por alguien que sabe del tema. En la práctica, cuatro tipos:</p>

<ol>
    <li><strong>Novedades de tu sector con análisis propio.</strong> No la noticia reescrita, sino qué significa para tu lector.</li>
    <li><strong>Guías de temporada.</strong> La declaración de la renta en abril, las rebajas en enero, la vuelta al cole en septiembre.</li>
    <li><strong>Datos o pruebas originales.</strong> Encuestas, comparativas probadas a mano, cifras que no están en otro sitio.</li>
    <li><strong>Historias con un protagonista.</strong> Casos concretos, entrevistas, experiencias.</li>
</ol>

<p>Lo que casi nunca entra es el contenido comercial: fichas de producto, categorías o páginas de servicios. Si tu web es una tienda, Discover es un canal para el blog, no para el catálogo; el catálogo se trabaja con lo que cuenta la guía de <a href="/guias/seo-para-tiendas-online">SEO para tiendas online</a>.</p>

<p>El foco temático pesa. Una web que publica siempre sobre lo mismo entra mejor que una que toca de todo, porque Google puede asociarla con un interés concreto. Es la misma lógica de la <a href="/guias/autoridad-tematica-y-clusters-de-contenido">autoridad temática</a> aplicada al feed.</p>

<h2 id="medir">Cómo medirlo</h2>

<p>Search Console tiene un informe propio de Discover, separado del de búsqueda, con clics, impresiones y CTR por página. Solo aparece cuando la propiedad supera un mínimo de impresiones, así que en webs pequeñas puede no existir todavía. El manejo general de la herramienta está en la guía de <a href="/guias/google-search-console-guia">Google Search Console</a>.</p>

<p>En tu analítica es otra historia. Las visitas de Discover llegan a veces como orgánico de Google y a veces como tráfico directo, según desde dónde abra el usuario la tarjeta. Si ves picos de tráfico directo a artículos recientes, casi siempre es Discover.</p>

<p>Desde 2026 el informe de rendimiento de IA generativa incluye también las funciones generativas de Discover, como los resúmenes de varias fuentes en el feed. La forma de leerlo está en la guía de <a href="/guias/medir-el-trafico-de-ia">medir el tráfico de IA</a>.</p>

<h2 id="volatilidad">Por qué sube y baja</h2>

<p>Discover es volátil por diseño. Cada pieza tiene una vida de uno a tres días y el feed de cada usuario cambia constantemente. Una semana buena puede duplicar el tráfico de la web y la siguiente devolverlo a cero sin que hayas tocado nada.</p>

<p>Dos consecuencias prácticas:</p>

<ul>
    <li><strong>No lo metas en la previsión.</strong> Si el negocio depende de Discover, depende de algo que no controlas. Úsalo como extra sobre una base de búsqueda estable.</li>
    <li><strong>Separa Discover al analizar caídas.</strong> Una bajada de tráfico total que viene solo de Discover no es un problema de posicionamiento. Mira los dos informes por separado antes de sacar conclusiones, como se explica en la guía de <a href="/guias/diagnosticar-caida-de-trafico-seo">diagnosticar una caída de tráfico</a>.</li>
</ul>

<h2 id="errores">Errores que te sacan del feed</h2>

<ul>
    <li><strong>Titulares clickbait.</strong> «No creerás lo que pasó» y sus variantes son lo primero que el update de 2026 penaliza.</li>
    <li><strong>Reescribir lo que ya publicaron otros.</strong> Sin dato, análisis o fuente propia, la pieza no tiene por qué salir en lugar del original.</li>
    <li><strong>Cambiar la fecha sin cambiar el contenido.</strong> Actualizar la fecha de un artículo viejo para que parezca nuevo es fácil de detectar y erosiona la confianza. Si actualizas, actualiza de verdad, con el método de la guía de <a href="/guias/actualizar-contenido-antiguo-con-ia">actualizar contenido antiguo</a>.</li>
    <li><strong>Publicar de todo.</strong> Cada tema fuera de tu foco diluye la asociación entre tu web y un interés concreto.</li>
    <li><strong>Saturar la página de anuncios.</strong> Google cuenta la experiencia de página entre las señales de calidad, y un lector que llega desde el feed y se encuentra un muro de anuncios no vuelve.</li>
</ul>

<p>Resumido: Discover recompensa a las webs que tienen algo propio que contar sobre un tema concreto, con imágenes grandes y titulares honestos. No se puede forzar, pero sí se puede dejar de hacer lo que te saca.</p>
HTML,
];
