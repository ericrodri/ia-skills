<?php

return [
    'title' => 'Datos estructurados en 2026: qué marcar y qué no',
    'navTitle' => 'Datos estructurados',
    'seoTitle' => 'Datos estructurados: qué marcar en 2026',
    'description' => 'Marcar con schema no compra citas en la IA: hay un estudio que lo midió. Qué tipos siguen mereciendo la pena, cómo generar el JSON-LD con IA y cómo validarlo.',
    'excerpt' => 'El marcado con Schema.org se vende hoy como la llave para que la IA te cite. Los datos dicen otra cosa. Aquí está lo que sí consigue, lo que no, y el orden en el que conviene implementarlo.',
    'category' => 'Método',
    'published' => '2026-09-19',
    'updated' => '2026-09-19',
    'readingMinutes' => 10,
    'words' => 1667,
    'about' => 'Datos estructurados Schema.org y búsqueda con IA',
    'related' => ['seo-para-tiendas-online', 'auditoria-seo-tecnica', 'aparecer-en-chatgpt-y-perplexity-geo', 'llms-txt-sirve-para-algo', 'seo-local-con-ia', 'ai-overviews-caida-de-clics'],
    'toc' => [
        'para-que' => 'Para qué sirve el marcado hoy',
        'estudio' => 'Lo que midió el estudio de 1.885 páginas',
        'que-marcar' => 'Qué marcar y en qué orden',
        'con-ia' => 'Generar el JSON-LD con IA sin inventar propiedades',
        'validar' => 'Cómo validarlo antes de publicar',
        'como-lo-hacemos' => 'Cómo está montado en este sitio',
        'errores' => 'Errores que cuestan avisos o posiciones',
    ],
    'faq' => [
        '¿Los datos estructurados hacen que la IA me cite?' => 'No por sí solos, y conviene decirlo claro porque se vende lo contrario. El estudio más serio que hay hasta ahora siguió 1.885 páginas que añadieron JSON-LD entre agosto de 2025 y marzo de 2026 y no encontró subida de citas en ninguna plataforma; en AI Overviews midió incluso una bajada del 4,6 %, pequeña pero estadísticamente significativa. Lo que sí hace el marcado es asegurar que una máquina interpreta bien qué es cada cosa de tu página, que es una condición previa, no una palanca.',
        '¿Entonces para qué lo pongo?' => 'Para los resultados enriquecidos, que siguen existiendo y siguen dando clics: estrellas de valoración, precio y disponibilidad, migas de pan, fechas de eventos, recetas, empleos. Google confirmó en 2026 que Schema.org sigue siendo valioso para eso aunque no haga falta ningún marcado especial para las respuestas generativas. Es decir: se implementa por el beneficio clásico, no por la promesa nueva.',
        '¿Qué tipo de marcado debería poner primero?' => 'Organization y BreadcrumbList en todo el sitio, porque son baratos y afectan a cómo se entiende tu marca y tu estructura. Después, el tipo que corresponda a tu contenido principal: Product si vendes, Article si publicas, LocalBusiness si atiendes en un sitio físico, JobPosting si publicas empleo. El resto casi siempre es esfuerzo con poco retorno.',
        '¿Sigue sirviendo el marcado de FAQ?' => 'Como fuente de resultado enriquecido, apenas: Google lo restringió a sitios de administración pública y salud, así que la mayoría no verá el desplegable en resultados. Como descripción estructurada de que tu página responde preguntas concretas, sigue siendo información limpia y barata de emitir. Nosotros lo mantenemos por eso, sin esperar nada de él en el listado de resultados.',
        '¿Puede penalizarme un marcado mal hecho?' => 'Marcar algo que no está visible en la página, inflar valoraciones o declarar precios que no son los reales sí puede acarrear una acción manual por spam de datos estructurados, y aparece en Search Console. Un error técnico —una propiedad mal escrita, una fecha en formato raro— no penaliza: simplemente hace que no te consideren apto para el resultado enriquecido. La regla es sencilla: marca lo que la persona ve, con los mismos valores.',
    ],
    'ctaTitle' => 'Prompts de SEO técnico revisados por profesionales',
    'ctaBody' => 'Generación y auditoría de JSON-LD, revisión de plantillas y checklists de publicación: <a href="/profesiones/desarrollo">Desarrollo</a> y <a href="/profesiones/marketing">Marketing</a>.',
    'body' => <<<'HTML'
<p>Desde que las respuestas generativas se comieron una parte de los clics, el marcado con Schema.org se ha vuelto a vender como la llave maestra: márcalo todo y la IA te citará. Es una promesa cómoda y no se sostiene con los datos que hay hoy.</p>

<p>Lo que sigue separa las tres cosas que la gente mezcla: lo que el marcado consigue de verdad, lo que no consigue, y el orden en el que conviene implementarlo si el tiempo es limitado.</p>

<h2 id="para-que">Para qué sirve el marcado hoy</h2>

<p>Los datos estructurados son una capa de JSON-LD que le dice a una máquina qué es cada cosa de tu página: esto es un producto, esto su precio, esto una valoración media, esto el autor del artículo. Sirven para tres cosas y ninguna es mágica:</p>

<ul>
    <li><strong>Optar a resultados enriquecidos.</strong> Estrellas, precio, disponibilidad, migas de pan, fechas. Es el beneficio directo y medible: mismo puesto, más superficie en pantalla y más clics.</li>
    <li><strong>Eliminar ambigüedad.</strong> Un precio dentro de <code>offers.price</code> no se puede confundir con un número suelto en un párrafo. Para un sistema que extrae datos, eso es la diferencia entre entender y adivinar.</li>
    <li><strong>Dejar constancia de entidades.</strong> Quién publica, quién firma, con qué otras entidades se relaciona. Es la parte que conecta con la <a href="/guias/eeat-experiencia-contenido-con-ia">discusión sobre E-E-A-T</a>: no la demuestra, pero la hace legible.</li>
</ul>

<h2 id="estudio">Lo que midió el estudio de 1.885 páginas</h2>

<p>Aquí está el dato que falta en casi todos los artículos sobre el tema. Ahrefs siguió 1.885 páginas que añadieron JSON-LD entre agosto de 2025 y marzo de 2026 y comparó sus citas en asistentes antes y después. El resultado: <strong>ninguna subida relevante en ninguna plataforma</strong>, y en AI Overviews una caída del 4,6 %, pequeña pero estadísticamente significativa.</p>

<p>Enfrente hay cifras mucho más entusiastas circulando —un 73 % más de probabilidad de ser seleccionado, un 317 % más de citas combinando marcado y contenido multimodal— que salen de paneles de terceros sin grupo de control. Cuando un estudio con antes y después dice una cosa y una correlación sin control dice la contraria, la apuesta razonable es la primera.</p>

<p>La postura oficial encaja con eso: Google confirmó en 2026 que el marcado sigue siendo valioso para resultados enriquecidos <em>aunque no hace falta ningún marcado especial</em> para aparecer en las respuestas generativas.</p>

<figure>
<table>
    <thead>
        <tr><th>Expectativa</th><th>Realidad medida</th></tr>
    </thead>
    <tbody>
        <tr><td>«Con schema me cita ChatGPT»</td><td>No hay evidencia; el estudio con control no la encuentra</td></tr>
        <tr><td>«Con schema subo de posición»</td><td>No es factor de ranking; lo que cambia es el aspecto del resultado</td></tr>
        <tr><td>«Con schema salgo con estrellas y precio»</td><td>Sí, si el tipo es apto y los datos son visibles en la página</td></tr>
        <tr><td>«Sin schema soy invisible para la IA»</td><td>Falso: los asistentes leen el texto, no el JSON-LD</td></tr>
    </tbody>
</table>
</figure>

<h2 id="que-marcar">Qué marcar y en qué orden</h2>

<p>Con tiempo limitado, este es el orden que maximiza retorno:</p>

<ol>
    <li><strong><code>Organization</code> en todo el sitio.</strong> Nombre, logo, URL, perfiles oficiales. Una vez, en la plantilla base, y con un <code>@id</code> estable al que puedan apuntar los demás bloques.</li>
    <li><strong><code>BreadcrumbList</code> en cada página interior.</strong> Barato, sale en resultados y describe tu arquitectura mejor que ninguna otra señal.</li>
    <li><strong>El tipo principal de tu contenido.</strong> <code>Product</code> con <code>offers</code> si vendes (el resto del trabajo de una tienda está en la guía de <a href="/guias/seo-para-tiendas-online">SEO para tiendas online</a>); <code>Article</code> con autor y fechas si publicas; <code>LocalBusiness</code> con horario y dirección si atiendes en un local —lo que además alimenta las recomendaciones de los asistentes, como cuenta la guía de <a href="/guias/seo-local-con-ia">SEO local con IA</a>—; <code>JobPosting</code>, <code>Event</code> o <code>Recipe</code> si es lo tuyo.</li>
    <li><strong><code>ItemList</code> en los listados.</strong> Categorías, colecciones, índices. Describe el conjunto en vez de dejar que se infiera de un montón de enlaces.</li>
    <li><strong><code>FAQPage</code>, con expectativas bajas.</strong> Ya casi no genera desplegable en resultados, pero cuesta cero si ya tienes las preguntas escritas.</li>
</ol>

<p>Y una regla que ahorra discusiones: <strong>si no está visible en la página, no se marca</strong>. El marcado describe el contenido, no lo sustituye ni lo adorna.</p>

<h2 id="con-ia">Generar el JSON-LD con IA sin inventar propiedades</h2>

<p>Este es uno de los trabajos donde un modelo de lenguaje rinde bien: es transformación de formato con un esquema conocido. También es uno donde alucina con elegancia, inventando propiedades que suenan perfectas y no existen en el vocabulario.</p>

<p>El prompt que evita casi todos los problemas tiene cuatro piezas: tipo exacto, datos reales pegados, prohibición explícita de rellenar huecos y formato de salida.</p>

<p><strong>Prompt base.</strong> «Genera JSON-LD de tipo Product para esta ficha. Te pego el HTML visible. Usa solo propiedades del vocabulario oficial de Schema.org para ese tipo. Si un dato no está en el HTML, omite la propiedad: no la inventes ni pongas un valor de ejemplo. Devuelve solo el bloque JSON, sin explicación.»</p>

<p>Las dos frases centrales son las que hacen el trabajo. Sin ellas obtendrás un <code>aggregateRating</code> de 4,8 sobre 127 opiniones en una ficha que no tiene ni una, que es exactamente el tipo de marcado que sí acarrea una acción manual. El mecanismo por el que un modelo rellena huecos con material verosímil está explicado en la guía de <a href="/guias/alucinaciones-de-la-ia">alucinaciones</a>.</p>

<p>Dos usos más donde compensa:</p>

<ul>
    <li><strong>Auditar lo que ya tienes.</strong> Pégale el JSON-LD actual y pídele que liste propiedades obsoletas, valores que no cuadran con el HTML y campos recomendados que faltan.</li>
    <li><strong>Convertir la plantilla, no la página.</strong> Si tienes mil fichas, lo que se genera una vez es la función que produce el bloque; pedir mil bloques uno a uno es tirar tiempo y dinero. La lógica es la misma que en el <a href="/guias/seo-programatico-con-ia">SEO programático</a>.</li>
</ul>

<h2 id="validar">Cómo validarlo antes de publicar</h2>

<p>Media hora, en este orden:</p>

<ol>
    <li><strong>Validador de resultados enriquecidos</strong> para saber si tu tipo es apto y qué falta. Los avisos amarillos son propiedades recomendadas; los rojos, impedimentos reales.</li>
    <li><strong>Validador de Schema.org</strong> para la sintaxis y las propiedades inventadas, que es donde caza los errores de los modelos.</li>
    <li><strong>Compara con la página renderizada.</strong> Cada valor del JSON tiene que existir en el HTML que ve la persona. Si tu sitio pinta el contenido con JavaScript, comprueba también que el bloque llega en el HTML inicial: en una aplicación sin renderizado en servidor es fácil emitirlo solo en cliente, y ahí no lo ve nadie. Cómo detectarlo está en la <a href="/guias/auditoria-seo-tecnica">auditoría técnica</a>.</li>
    <li><strong>Search Console, dos semanas después.</strong> El informe de mejoras dice qué se ha validado de verdad. Es el único veredicto que cuenta.</li>
</ol>

<h2 id="como-lo-hacemos">Cómo está montado en este sitio</h2>

<p>Por si sirve de referencia concreta: este sitio es una aplicación de página única, así que todo el marcado se emite desde el servidor, nunca desde los componentes de la interfaz. Cada página comparte un bloque de <code>Organization</code> con identificador estable, sus migas de pan, el tipo que le corresponde —<code>Article</code> en las guías, <code>ItemList</code> en los listados— y un <code>FAQPage</code> cuando hay preguntas de verdad.</p>

<p>La regla interna es que el marcado no vive en dos sitios: si estuviera también en el cliente se duplicaría, y un bloque duplicado con valores distintos es peor que ninguno. Merece la pena revisar esto en cualquier proyecto con framework moderno, porque es el fallo más común y el más silencioso.</p>

<h2 id="errores">Errores que cuestan avisos o posiciones</h2>

<ol>
    <li><strong>Marcar lo que no se ve.</strong> Valoraciones sin opiniones, precios que no son los del carrito, autores inventados. Es la vía rápida a una acción manual.</li>
    <li><strong>Copiar un bloque de ejemplo con sus datos.</strong> Pasa más de lo que parece: fichas en producción declarando ser un producto de demostración a 19,99 €.</li>
    <li><strong>Emitirlo solo en el cliente.</strong> Si el bloque aparece después de ejecutar JavaScript, media internet no lo lee.</li>
    <li><strong>Marcarlo todo.</strong> Veinte tipos anidados no multiplican nada; multiplican el mantenimiento y la probabilidad de contradicciones.</li>
    <li><strong>Esperar que sustituya al contenido.</strong> El marcado describe lo que hay. Si lo que hay no aporta nada, el JSON-LD no lo arregla.</li>
</ol>
HTML,
];
