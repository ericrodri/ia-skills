<?php

return [
    'title' => 'SEO programático con IA: escalar sin caer en spam',
    'navTitle' => 'SEO programático con IA',
    'seoTitle' => 'SEO programático con IA sin caer en spam',
    'description' => 'Publicar cientos de páginas generadas hunde sitios desde 2026. Qué separa un proyecto programático que funciona de uno que se lleva por delante el dominio.',
    'excerpt' => 'Generar mil páginas nunca ha sido tan barato ni tan peligroso. La diferencia entre un proyecto que rinde durante años y uno que desaparece en una actualización cabe en tres preguntas.',
    'category' => 'Método',
    'published' => '2026-09-19',
    'updated' => '2026-09-19',
    'readingMinutes' => 10,
    'words' => 1631,
    'about' => 'SEO programático y contenido a escala con inteligencia artificial',
    'related' => ['enlazado-interno-y-arquitectura-web', 'escribir-contenido-seo-con-ia', 'keyword-research-con-ia', 'eeat-experiencia-contenido-con-ia', 'auditoria-seo-tecnica', 'datos-estructurados-para-ia'],
    'toc' => [
        'que-es' => 'Qué es el SEO programático',
        'politica' => 'La línea que Google sí persigue',
        'test' => 'El test de las tres preguntas',
        'dato' => 'Sin dato propio no hay proyecto',
        'plantilla' => 'Cómo se construye la plantilla',
        'lanzamiento' => 'Cómo se lanza sin quemarlo',
        'errores' => 'Lo que hunde un proyecto entero',
    ],
    'faq' => [
        '¿El SEO programático está muerto?' => 'No, lo que está muerto es la variante perezosa: una plantilla, una lista de ciudades o de palabras y mil URL sin nada dentro que las diferencie. Los proyectos que siguen funcionando son los que se apoyan en datos que solo ellos tienen —inventario real, precios en vivo, fichas verificadas, contenido aportado por usuarios— y que servirían igual aunque no existieran los buscadores.',
        '¿Cuántas páginas puedo publicar de golpe?' => 'Menos de las que te apetece. Publicar cincuenta, esperar seis u ocho semanas y mirar qué se indexa y qué recibe impresiones cuesta poco y evita el escenario caro. Si de esas cincuenta se indexa el 80 % y una parte recibe visitas, tienes permiso para seguir; si se indexa el 20 %, el problema es el contenido y multiplicarlo por diez solo multiplica el problema.',
        '¿Google sabe que las páginas son generadas?' => 'La pregunta correcta es otra, porque la política no habla de cómo se produce el texto sino de si la página aporta valor. Se puede generar con plantilla y ser útil, y se puede escribir a mano y ser basura. Lo que los sistemas detectan bien es la similitud entre páginas y la ausencia de señales de uso: si cien URL comparten el 95 % del texto y ninguna retiene a nadie, el origen da igual.',
        '¿Qué pasa si ya he publicado cientos de páginas vacías?' => 'Se poda antes de seguir publicando. Lo habitual es quedarse con las que tienen impresiones o dato propio, fusionar las que se solapan y devolver un 410 o un redirect a las que no aportan nada. La evaluación es del sitio en conjunto, así que dejar el peso muerto publicado le resta a las páginas buenas. La recuperación tras una poda seria suele tardar entre uno y tres meses.',
        '¿Necesito un programador para hacer esto?' => 'Para un proyecto pequeño, no: una hoja de cálculo con los datos, un generador de páginas y un poco de paciencia bastan, y hay herramientas que lo montan sin escribir código. Para algo que se actualice solo a partir de una base de datos, sí conviene. El trabajo difícil de todas formas no es técnico: es conseguir el dato que hace única a cada página.',
    ],
    'ctaTitle' => 'Prompts para trabajar a escala sin publicar basura',
    'ctaBody' => 'Generación de plantillas, control de calidad por lotes y auditoría de cobertura: <a href="/profesiones/marketing">Marketing</a> y <a href="/profesiones/desarrollo">Desarrollo</a>.',
    'body' => <<<'HTML'
<p>El SEO programático consiste en generar muchas páginas a partir de una plantilla y un conjunto de datos: una por ciudad, por modelo, por combinación de servicio y zona. Funciona desde hace quince años y ha sido la base de medio sector del comercio electrónico y de los comparadores.</p>

<p>Lo que ha cambiado no es la técnica, es el coste de la materia prima. Cuando escribir mil descripciones costaba un mes de trabajo, había un filtro natural. Ahora cuesta una tarde, y el resultado ha sido una avalancha de páginas idénticas que Google ha empezado a barrer en bloque.</p>

<h2 id="que-es">Qué es el SEO programático</h2>

<p>Tres piezas: un conjunto de datos con una fila por página, una plantilla que convierte cada fila en una página completa, y un sistema que las publica y las enlaza entre sí. Los casos clásicos siguen siendo los mejores:</p>

<ul>
    <li><strong>Directorios con fichas verificadas.</strong> Una página por negocio, con datos que alguien ha comprobado.</li>
    <li><strong>Comparadores con precios en vivo.</strong> El dato cambia solo y eso es exactamente lo que hace útil la página.</li>
    <li><strong>Catálogos con inventario real.</strong> Disponibilidad, características, existencias.</li>
    <li><strong>Contenido aportado por la comunidad.</strong> Una página por elemento, donde el contenido lo pone la gente.</li>
</ul>

<p>Y el caso que ya no funciona: «servicio + ciudad» multiplicado por doscientas ciudades, con el mismo texto y el nombre cambiado. Eso es la definición de libro de lo que se persigue.</p>

<h2 id="politica">La línea que Google sí persigue</h2>

<p>La política se llama abuso de contenido a escala, existe desde 2024 y se reforzó con la actualización principal de marzo de 2026. Su texto es deliberadamente agnóstico respecto a la herramienta: castiga <strong>generar muchas páginas de poco valor cuyo fin principal es manipular posiciones</strong>, se hayan producido con IA, con automatización o a mano.</p>

<p>Los tres patrones que más caídas concentran:</p>

<figure>
<table>
    <thead>
        <tr><th>Patrón</th><th>Por qué cae</th></tr>
    </thead>
    <tbody>
        <tr><td>Generación masiva sin revisión editorial</td><td>Nadie ha leído lo que se publicó; se nota en la primera muestra</td></tr>
        <tr><td>Plantilla con sustitución de variables</td><td>El 95 % del texto es idéntico entre páginas</td></tr>
        <tr><td>Agregar datos de terceros sin añadir contexto</td><td>La página no aporta nada que no esté ya en la fuente</td></tr>
    </tbody>
</table>
</figure>

<p>Las caídas documentadas en sitios afectados van del 50 % al 90 % del tráfico, y llegan de dos maneras: una degradación algorítmica silenciosa, que se ve como una bajada en la curva, o una acción manual, que aparece con aviso en Search Console. La primera es más común y más difícil de diagnosticar.</p>

<h2 id="test">El test de las tres preguntas</h2>

<p>Antes de escribir una línea de código, contesta esto por escrito. Si alguna respuesta flojea, el proyecto no está listo:</p>

<ol>
    <li><strong>¿Qué tiene esta página que no tenga ninguna otra de mi sitio?</strong> Si la respuesta es «el nombre de la ciudad», no hay proyecto. Tiene que haber un dato, un precio, una lista, una comparación o una aportación humana que solo esté ahí.</li>
    <li><strong>¿Existiría esta página si no existieran los buscadores?</strong> Es la pregunta más incómoda y la más útil. Un directorio de fontaneros verificados en Zaragoza tendría sentido aunque nadie buscara: alguien lo usaría. Una página titulada «fontanero barato Zaragoza 2026» con cuatro párrafos genéricos, no.</li>
    <li><strong>¿Podría alguien pasar dos minutos en ella?</strong> No hace falta que sean cinco. Pero si el visitante entiende en tres segundos que ahí no hay nada, el sistema lo va a saber por las señales de uso mucho antes de que lo sepas tú.</li>
</ol>

<h2 id="dato">Sin dato propio no hay proyecto</h2>

<p>Este es el punto donde se decide todo, y donde la IA <strong>no</strong> ayuda: el dato hay que tenerlo. Las fuentes que funcionan son las de siempre:</p>

<ul>
    <li><strong>Lo que genera tu operación.</strong> Precios, disponibilidad, plazos, resultados, histórico.</li>
    <li><strong>Lo que aportan las personas.</strong> Opiniones, configuraciones, casos, votos. Es el más defendible porque no se puede copiar.</li>
    <li><strong>Lo que compilas y verificas tú.</strong> Un conjunto de datos público es materia prima de todos; lo que lo convierte en tuyo es la verificación, la normalización y lo que añades encima.</li>
    <li><strong>Lo que mides.</strong> Pruebas, comparativas, mediciones propias repetidas en el tiempo.</li>
</ul>

<p>Un ejemplo cercano: este sitio publica alrededor de mil fichas, una por habilidad de IA. Lo que las diferencia no es el texto de la plantilla, sino que cada una contiene un prompt que ha escrito una persona concreta, con sus votos, sus comentarios y sus versiones. Esa es la parte que no se puede generar; la plantilla solo la presenta.</p>

<p>De ahí sale la regla: <strong>el papel de la IA en un proyecto programático es el del redactor de la plantilla y el del control de calidad, nunca el de la fuente de datos</strong>. Si el contenido único lo produce el modelo, lo único que tienes son mil variaciones del mismo párrafo.</p>

<h2 id="plantilla">Cómo se construye la plantilla</h2>

<ol>
    <li><strong>Empieza por el racimo de intención</strong>, no por la lista de palabras. Una página por intención real, no por variante del término: el método está en la guía de <a href="/guias/keyword-research-con-ia">keyword research con IA</a>.</li>
    <li><strong>Escribe tres páginas a mano.</strong> Completas, buenas, con sus datos. Son la referencia de calidad y el material con el que se diseña la plantilla. Quien salta este paso acaba descubriendo el problema en la página 400.</li>
    <li><strong>Extrae el esqueleto de esas tres.</strong> Qué partes son fijas, cuáles dependen del dato y cuáles solo aparecen si hay dato suficiente. Una sección vacía es peor que una sección ausente.</li>
    <li><strong>Pon un mínimo de datos para publicar.</strong> Si una fila no llega, esa página no se genera. Es la regla que más caídas evita y la que más se incumple.</li>
    <li><strong>Varía la estructura, no solo el texto.</strong> Que una ficha con cinco opiniones y otra sin ninguna se vean distintas de verdad.</li>
    <li><strong>Enlaza entre sí con criterio.</strong> Relacionadas por dato compartido, no por listado alfabético al pie.</li>
    <li><strong>Marca cada página</strong> con el tipo que le corresponde, como explica la guía de <a href="/guias/datos-estructurados-para-ia">datos estructurados</a>.</li>
</ol>

<h2 id="lanzamiento">Cómo se lanza sin quemarlo</h2>

<p>Por lotes y midiendo, siempre:</p>

<ol>
    <li><strong>Lote de 50.</strong> Publica, envía el sitemap y espera de seis a ocho semanas.</li>
    <li><strong>Mira tres números:</strong> porcentaje indexado, páginas con al menos una impresión y páginas con al menos un clic. Si lo indexado no llega al 60 %, el problema es de calidad, no de rastreo.</li>
    <li><strong>Lee diez páginas al azar</strong> como si fueras un visitante. Este paso no se delega y detecta lo que ninguna métrica enseña.</li>
    <li><strong>Amplía por factor de tres,</strong> no de cien.</li>
    <li><strong>Revisa la salud técnica al escalar:</strong> un sitemap roto o una redirección mal puesta convierte quinientas páginas en invisibles sin previo aviso. La <a href="/guias/auditoria-seo-tecnica">auditoría técnica</a> tiene la lista, y el reparto de enlaces entre las páginas generadas —que es lo que decide cuáles se rastrean— está en la guía de <a href="/guias/enlazado-interno-y-arquitectura-web">enlazado interno</a>.</li>
</ol>

<p>Merece la pena insistir en esto último con un caso propio: durante semanas nuestro sitemap devolvió un error de servidor por un problema de caché que nada tenía que ver con el contenido. Resultado, mil fichas perfectamente válidas sin descubrir. En un proyecto programático la parte técnica no es un detalle: es la mitad del trabajo.</p>

<h2 id="errores">Lo que hunde un proyecto entero</h2>

<ol>
    <li><strong>Publicar mil páginas de golpe.</strong> Si están mal, te enteras cuando ya afecta a todo el dominio.</li>
    <li><strong>Un solo párrafo variable.</strong> Cambiar el nombre de la ciudad en dos frases no diferencia nada.</li>
    <li><strong>Generar el dato con el modelo.</strong> Precios, valoraciones y estadísticas inventadas: incorrecto, penalizable y detectable.</li>
    <li><strong>No leer ninguna página.</strong> Diez lecturas al azar por lote cuestan veinte minutos.</li>
    <li><strong>Ignorar la firma y la fiabilidad.</strong> A escala también hay que dejar claro quién está detrás y de dónde salen los datos: es lo que separa un directorio útil de un vertedero, y está desarrollado en la guía de <a href="/guias/eeat-experiencia-contenido-con-ia">E-E-A-T</a>.</li>
    <li><strong>No podar nunca.</strong> Las páginas que llevan un año sin una impresión no están esperando su momento: están restando.</li>
</ol>
HTML,
];
