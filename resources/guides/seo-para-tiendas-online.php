<?php

return [
    'title' => 'SEO para tiendas online: categorías, fichas de producto y filtros',
    'navTitle' => 'SEO para tiendas online',
    'seoTitle' => 'SEO para tiendas online: categorías y fichas',
    'description' => 'Cómo posicionar un ecommerce: qué búsquedas ganan categorías y fichas, descripciones con IA sin duplicar, filtros, productos agotados y Merchant Center.',
    'excerpt' => 'En una tienda online el SEO no se juega en el blog: se juega en las categorías y en las fichas. Y los problemas típicos no son de contenido, sino de filtros que generan miles de URLs, productos agotados y descripciones copiadas del fabricante.',
    'category' => 'Método',
    'published' => '2026-09-24',
    'updated' => '2026-09-24',
    'readingMinutes' => 9,
    'words' => 1477,
    'about' => 'SEO para ecommerce',
    'related' => ['intencion-de-busqueda-en-seo', 'datos-estructurados-para-ia', 'canibalizacion-de-keywords', 'enlazado-interno-y-arquitectura-web', 'paginas-que-google-no-indexa', 'seo-programatico-con-ia'],
    'toc' => [
        'donde-se-juega' => 'Dónde se juega el SEO de una tienda',
        'categorias' => 'Categorías: la página que más vende',
        'fichas' => 'Fichas de producto',
        'descripciones-ia' => 'Descripciones con IA sin duplicar',
        'filtros' => 'Filtros y navegación facetada',
        'agotados' => 'Productos agotados y descatalogados',
        'datos' => 'Datos estructurados y Merchant Center',
        'orden' => 'Por dónde empezar',
    ],
    'faq' => [
        '¿Qué posiciona mejor, la categoría o la ficha de producto?' => 'Depende de la búsqueda. Las consultas genéricas como «zapatillas de trail» las ganan casi siempre las categorías, porque el usuario quiere comparar. Las consultas con modelo concreto, referencia o marca y modelo las ganan las fichas. Asignar cada tipo de búsqueda a su tipo de página es la primera decisión del SEO de una tienda.',
        '¿Puedo usar la descripción del fabricante?' => 'Puedes, pero no te ayuda a posicionar: la misma descripción está en cientos de tiendas y Google elegirá una sola versión para mostrar, normalmente la de un sitio con más autoridad. Para los productos que más importan, merece la pena escribir una descripción propia con datos de uso, dudas frecuentes y comparación con alternativas.',
        '¿Qué hago con un producto agotado?' => 'Si va a volver, deja la página publicada, indica que está agotado y marca la disponibilidad en los datos estructurados. Si no va a volver y hay un sustituto claro, redirige con un 301 a ese producto o a su categoría. Si no hay sustituto, un 404 o un 410 está bien; lo que no conviene es redirigir todo a la página de inicio.',
        '¿Hay que indexar las páginas de filtros?' => 'Solo las que corresponden a búsquedas reales, como una categoría filtrada por marca o por un atributo que la gente busca. El resto de combinaciones debería quedar fuera del rastreo para no gastar el presupuesto de rastreo de Google en URLs sin valor.',
        '¿El blog sirve para algo en un ecommerce?' => 'Sí, para las búsquedas informativas previas a la compra, como guías de talla, comparativas o cómo elegir. Esas páginas atraen tráfico que todavía no está listo para comprar y, bien enlazadas, pasan autoridad a las categorías. Lo que no debe hacer el blog es competir con las categorías por la misma palabra clave.',
    ],
    'ctaTitle' => 'Prompts para fichas y categorías',
    'ctaBody' => 'Descripciones de producto con datos propios, textos de categoría o análisis de la competencia: en <a href="/profesiones/marketing">Marketing</a> están los prompts de SEO y ecommerce mejor valorados.',
    'body' => <<<'HTML'
<p>Una tienda online tiene un problema que no tiene un blog: cientos o miles de páginas muy parecidas entre sí, generadas por un sistema, con textos que a menudo no ha escrito nadie de la casa. El SEO de una tienda consiste, en gran parte, en poner orden en eso.</p>

<p>Esta guía va por partes: qué página ataca qué búsqueda, cómo trabajar categorías y fichas, cómo usar IA para las descripciones sin crear contenido duplicado y cómo resolver los tres problemas técnicos que aparecen en casi todas las tiendas.</p>

<h2 id="donde-se-juega">Dónde se juega el SEO de una tienda</h2>

<p>Cada tipo de búsqueda tiene su tipo de página. Asignarlos bien evita que dos páginas se peleen por lo mismo:</p>

<figure>
<table>
    <thead>
        <tr><th>Búsqueda</th><th>Ejemplo</th><th>Página que debe ganarla</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Genérica de producto</strong></td><td>zapatillas de trail</td><td>Categoría</td></tr>
        <tr><td><strong>Con atributo</strong></td><td>zapatillas de trail impermeables</td><td>Subcategoría o filtro indexable</td></tr>
        <tr><td><strong>Modelo concreto</strong></td><td>Salomon Speedcross 6</td><td>Ficha de producto</td></tr>
        <tr><td><strong>Informativa</strong></td><td>cómo elegir zapatillas de trail</td><td>Guía del blog</td></tr>
    </tbody>
</table>
</figure>

<p>La tabla es una aplicación directa de la <a href="/guias/intencion-de-busqueda-en-seo">intención de búsqueda</a>: quien busca algo genérico quiere comparar opciones, y la página que se lo permite es la categoría. Cuando una guía del blog o una ficha acaba compitiendo con la categoría por su palabra principal, tienes una <a href="/guias/canibalizacion-de-keywords">canibalización</a>.</p>

<h2 id="categorias">Categorías: la página que más vende</h2>

<p>En la mayoría de tiendas, las categorías concentran el tráfico orgánico con intención de compra. Y suelen ser las páginas más descuidadas: un listado de productos y nada más. Cuatro mejoras con impacto:</p>

<ol>
    <li><strong>Título y H1 con la búsqueda principal.</strong> «Zapatillas de trail» y no «Colección Outdoor». El nombre interno de la categoría no es cómo busca la gente.</li>
    <li><strong>Un texto breve arriba, útil abajo.</strong> Dos o tres líneas sobre el listado que ayuden a elegir, y una sección más larga debajo con criterios de compra y dudas frecuentes. Nada de párrafos de relleno con la palabra clave repetida.</li>
    <li><strong>Enlaces a subcategorías.</strong> Si hay subcategorías con búsquedas propias, enlázalas desde la categoría con su nombre exacto. La estructura de la tienda es tu <a href="/guias/enlazado-interno-y-arquitectura-web">arquitectura web</a>.</li>
    <li><strong>Paginación rastreable.</strong> Cada página del listado debe tener su propia URL y su propia canonical, con enlaces normales entre ellas. Un «cargar más» que depende solo de JavaScript deja productos sin descubrir.</li>
</ol>

<h2 id="fichas">Fichas de producto</h2>

<p>Una ficha compite por búsquedas de modelo concreto, donde la intención de compra es máxima y la competencia son otras tiendas que venden lo mismo. Lo que diferencia una ficha que posiciona:</p>

<ul>
    <li><strong>Información que el fabricante no da.</strong> Cómo talla, con qué se combina, para quién no es, fotos propias del producto en uso.</li>
    <li><strong>Opiniones de clientes.</strong> Son contenido original que se actualiza solo y responden dudas que no se te habrían ocurrido.</li>
    <li><strong>Precio, disponibilidad y envío visibles.</strong> En el HTML inicial y en los datos estructurados, no cargados después por JavaScript.</li>
    <li><strong>Variantes resueltas.</strong> Si cada color o talla tiene su URL, decide cuál es la canonical. Si no tienen búsquedas propias, lo habitual es una sola URL con un selector.</li>
</ul>

<h2 id="descripciones-ia">Descripciones con IA sin duplicar</h2>

<p>La IA es muy útil para escribir fichas a escala, y también la forma más rápida de llenar una tienda de textos intercambiables. La diferencia está en qué le das:</p>

<ol>
    <li><strong>Datos, no el nombre del producto.</strong> Ficha técnica, opiniones de clientes, preguntas que llegan al servicio de atención, notas del equipo que lo ha probado. Con eso la IA redacta algo propio; con solo el nombre, reescribe lo que ya existe.</li>
    <li><strong>Una plantilla de estructura, no de frases.</strong> Define qué bloques lleva una ficha (para quién es, qué lo diferencia, cómo talla, cuidados) y deja que el texto de cada bloque salga de los datos.</li>
    <li><strong>Revisión por muestreo.</strong> Lee una de cada diez antes de publicar. Los errores de la IA en fichas son especialmente caros: una medida inventada genera devoluciones. Las <a href="/guias/alucinaciones-de-la-ia">alucinaciones</a> no avisan.</li>
    <li><strong>Prioriza.</strong> Empieza por los productos que más venden o más impresiones tienen. Reescribir un catálogo de diez mil referencias a la vez no es una estrategia, es un riesgo.</li>
</ol>

<p>Es la misma lógica que se aplica a las páginas generadas en serie, y los límites están bien explicados en la guía de <a href="/guias/seo-programatico-con-ia">SEO programático</a>.</p>

<h2 id="filtros">Filtros y navegación facetada</h2>

<p>Los filtros de talla, color, marca y precio son útiles para el usuario y un problema para Google: cada combinación puede generar una URL, y una tienda de mil productos puede acabar con cientos de miles de URLs rastreables que no aportan nada.</p>

<p>Google publicó en diciembre de 2024 una guía específica sobre este problema. La idea práctica es separar dos tipos de filtros:</p>

<ul>
    <li><strong>Filtros con búsqueda propia.</strong> «Zapatillas de trail Salomon» o «vestidos de lino» tienen demanda. Merecen una URL limpia, un título y un texto propios, e indexarse como una subcategoría más.</li>
    <li><strong>El resto de combinaciones.</strong> Ordenar por precio, filtrar por talla 42 y color azul a la vez, rangos de precio. Lo recomendable es que no se rastreen: bloquear esos parámetros en robots.txt o implementarlos con fragmentos de URL (<code>#</code>), que Google no rastrea como páginas distintas.</li>
</ul>

<p>Si Search Console te muestra miles de páginas «Rastreada: actualmente sin indexar» con parámetros en la URL, casi siempre es esto. El diagnóstico completo está en la guía de <a href="/guias/paginas-que-google-no-indexa">páginas que Google no indexa</a>.</p>

<h2 id="agotados">Productos agotados y descatalogados</h2>

<p>Es la decisión que más se repite en una tienda y la que más se resuelve mal. La regla depende de si el producto vuelve:</p>

<ul>
    <li><strong>Agotado temporalmente.</strong> Mantén la página publicada, indica que no hay stock, ofrece aviso de reposición y alternativas, y marca <code>OutOfStock</code> en los datos estructurados.</li>
    <li><strong>Descatalogado con sustituto.</strong> Redirige con un 301 al modelo nuevo o a la categoría más cercana.</li>
    <li><strong>Descatalogado sin sustituto.</strong> Un 404 o un 410 está bien. Redirigir todo a la página de inicio es peor: Google suele tratarlo como un 404 de todos modos y el usuario no encuentra lo que buscaba.</li>
</ul>

<h2 id="datos">Datos estructurados y Merchant Center</h2>

<p>Las fichas deberían llevar marcado <code>Product</code> con su <code>Offer</code>: precio, moneda, disponibilidad y, si las tienes, valoraciones. Google lo usa para mostrar precio y estrellas en los resultados, y los asistentes de IA para responder comparativas. Cómo se construye está en la guía de <a href="/guias/datos-estructurados-para-ia">datos estructurados</a>.</p>

<p>Además, Google Merchant Center permite publicar el catálogo en las fichas gratuitas de Google Shopping sin pagar anuncios. Para muchas tiendas pequeñas es el canal orgánico con menos competencia, y el mismo feed sirve después para campañas si las haces.</p>

<h2 id="orden">Por dónde empezar</h2>

<ol>
    <li><strong>Mapa de búsquedas y páginas.</strong> Lista las veinte búsquedas con más demanda de tu sector y asigna a cada una la página que debe ganarla. Si no existe, créala; si hay dos, elige una.</li>
    <li><strong>Filtros.</strong> Comprueba cuántas URLs con parámetros rastrea Google y corta las que no tienen búsqueda.</li>
    <li><strong>Categorías principales.</strong> Título, texto útil y enlaces a subcategorías.</li>
    <li><strong>Fichas que más venden.</strong> Descripción propia, opiniones y datos estructurados completos.</li>
    <li><strong>Blog para las dudas de compra.</strong> Guías informativas que enlacen a las categorías.</li>
</ol>

<p>Resumido: en una tienda el SEO consiste en que cada búsqueda tenga una página clara que la responda y en que Google no se pierda por el camino entre miles de URLs que no deberían existir.</p>
HTML,
];
