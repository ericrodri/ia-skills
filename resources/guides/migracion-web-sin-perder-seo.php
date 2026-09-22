<?php

return [
    'title' => 'Migración web sin perder posicionamiento',
    'navTitle' => 'Migración web',
    'seoTitle' => 'Migración web sin perder SEO',
    'description' => 'Cambiar de dominio, de CMS o de estructura de URLs sin perder posicionamiento: inventario, mapa de redirecciones y qué vigilar después del cambio.',
    'excerpt' => 'Casi ninguna migración se hunde por un fallo del día del lanzamiento. Se hunde por lo que no se inventarió tres semanas antes. Este es el orden que evita la mayoría de los desastres.',
    'category' => 'Método',
    'published' => '2026-09-22',
    'updated' => '2026-09-22',
    'readingMinutes' => 11,
    'words' => 1742,
    'about' => 'Migraciones web y redirecciones sin pérdida de posicionamiento',
    'related' => ['paginas-que-google-no-indexa', 'auditoria-seo-tecnica', 'diagnosticar-caida-de-trafico-seo', 'enlazado-interno-y-arquitectura-web', 'canibalizacion-de-keywords', 'datos-estructurados-para-ia'],
    'toc' => [
        'tipos' => 'Qué tipo de migración es la tuya',
        'inventario' => 'El inventario previo',
        'redirecciones' => 'El mapa de redirecciones',
        'dia' => 'El día del cambio',
        'console' => 'Search Console y el cambio de dirección',
        'despues' => 'Las ocho semanas siguientes',
        'errores' => 'Errores que cuestan tráfico',
    ],
    'faq' => [
        '¿Cuánto tráfico se pierde en una migración bien hecha?' => 'Una caída temporal es normal incluso cuando todo está bien: Google tiene que volver a rastrear, procesar las redirecciones y transferir las señales, y eso lleva semanas. Lo esperable es una bajada en las primeras dos o tres semanas y una recuperación progresiva hasta el nivel anterior en un plazo de uno a tres meses según el tamaño del sitio. Lo que no es normal es que a los dos meses sigas a la mitad: eso ya no es el periodo de asentamiento, es un fallo sin detectar.',
        '¿Cuánto tiempo hay que mantener las redirecciones?' => 'Como mínimo un año, y en la práctica indefinidamente si no cuesta nada. Google avisa de que, tras un cambio de dirección, mantiene la relación entre los dos sitios durante 180 días, y en ese periodo las redirecciones deben seguir vivas. Pero hay enlaces externos, marcadores y documentos antiguos que seguirán apuntando a las URLs viejas durante años, y cada uno de ellos es tráfico y autoridad que se pierde si la redirección ya no existe.',
        '¿301 o 302?' => '301 para cualquier cambio definitivo, que es lo que es una migración. La 302 indica algo temporal y, aunque Google acaba interpretándola como permanente si se prolonga, mientras tanto mantiene indexada la URL antigua y retrasa la consolidación. Si tu servidor o tu CMS hacen 302 por defecto, compruébalo antes del lanzamiento: es uno de los fallos más habituales y no da ningún síntoma visible.',
        '¿Puedo aprovechar la migración para rediseñar y cambiar el contenido?' => 'Puedes, pero no deberías hacerlo a la vez. Si cambias URLs, plantilla y textos el mismo día y el tráfico baja, no tendrás forma de saber cuál de las tres cosas lo causó. Lo eficiente es migrar primero con el contenido intacto, esperar a que se estabilice —de cuatro a seis semanas— y rediseñar después. Cuando el calendario no lo permite, al menos deja sin tocar las veinte páginas que más tráfico traen.',
        '¿Y si migro solo de hosting o de HTTP a HTTPS?' => 'Un cambio de hosting sin cambiar URLs no es una migración SEO: si el dominio, las rutas y el contenido son idénticos, lo único que vigilas es que no haya caídas ni respuestas lentas durante el cambio de DNS. El paso a HTTPS sí lo es, aunque de las sencillas: redirección 301 de cada URL http a su equivalente https, canónicas y enlaces internos apuntando a https, y la propiedad nueva dada de alta en Search Console.',
    ],
    'ctaTitle' => 'Prompts de migración y control de calidad votados por profesionales',
    'ctaBody' => 'Generar y verificar mapas de redirecciones a partir de exportaciones: <a href="/profesiones/desarrollo">Desarrollo</a>. Para el seguimiento del tráfico antes y después: <a href="/profesiones/analisis-de-datos">Análisis de datos</a>.',
    'body' => <<<'HTML'
<p>Una migración es el único proyecto de SEO donde no se gana nada y se puede perder todo. Si sale bien, el tráfico queda como estaba; si sale mal, desaparecen años de trabajo en una tarde. Por eso el objetivo no es optimizar: es no romper.</p>

<h2 id="tipos">Qué tipo de migración es la tuya</h2>

<p>La palabra se usa para cosas que tienen poco que ver entre sí, y el riesgo cambia mucho según el caso:</p>

<figure>
<table>
    <thead>
        <tr><th>Cambio</th><th>Riesgo</th><th>Lo crítico</th></tr>
    </thead>
    <tbody>
        <tr><td>Solo de hosting, mismas URLs</td><td>Bajo</td><td>Que no haya caídas ni lentitud en el cambio de DNS</td></tr>
        <tr><td>De HTTP a HTTPS</td><td>Bajo</td><td>Redirección de cada URL y canónicas actualizadas</td></tr>
        <tr><td>Rediseño con las mismas URLs</td><td>Medio</td><td>Que no desaparezca contenido ni enlaces internos</td></tr>
        <tr><td>Cambio de estructura de URLs</td><td><strong>Alto</strong></td><td>El mapa de redirecciones, una a una</td></tr>
        <tr><td>Cambio de CMS</td><td><strong>Alto</strong></td><td>URLs, plantillas, metadatos y datos estructurados a la vez</td></tr>
        <tr><td>Cambio de dominio</td><td><strong>Alto</strong></td><td>Todo lo anterior más la herramienta de cambio de dirección</td></tr>
        <tr><td>Varios de estos el mismo día</td><td><strong>Muy alto</strong></td><td>No hacerlo, si se puede evitar</td></tr>
    </tbody>
</table>
</figure>

<p>La última fila es la que más veces explica una migración fallida. Cambiar de dominio, de CMS y de arquitectura a la vez multiplica los puntos de fallo y, sobre todo, hace imposible diagnosticar después: cuando el tráfico baja un 40 %, no hay forma de saber cuál de los tres cambios lo provocó.</p>

<h2 id="inventario">El inventario previo</h2>

<p>Todo lo que no esté anotado antes del cambio será imposible de reconstruir después, porque el sitio viejo ya no estará ahí para consultarlo. Antes de tocar nada, guarda cuatro cosas:</p>

<ol>
    <li><strong>Todas las URLs actuales</strong> con su código de respuesta, su título y su canónica. Un rastreo completo del sitio, exportado a una hoja. Esta es la base del mapa de redirecciones.</li>
    <li><strong>Las URLs que reciben tráfico.</strong> Exporta de Search Console 12 meses de páginas con clics e impresiones, y de tu analítica las páginas con visitas. La unión de las dos listas es lo que no puedes permitirte perder.</li>
    <li><strong>Las URLs con enlaces externos.</strong> Son las que concentran autoridad y a menudo no coinciden con las que más tráfico traen: una nota de prensa antigua puede no recibir visitas y sostener media docena de enlaces buenos.</li>
    <li><strong>Una foto del rendimiento actual.</strong> Clics, impresiones y posición media por página en los últimos 3 meses, guardados en un archivo. Sin esta referencia, dentro de seis semanas discutirás de memoria sobre si has perdido tráfico o no.</li>
</ol>

<p>Si vas a aprovechar para retirar contenido, este es el momento de decidirlo y no el día del lanzamiento. El criterio para saber qué se fusiona y qué se conserva está en la <a href="/guias/actualizar-contenido-antiguo-con-ia">guía de actualizar contenido antiguo</a>.</p>

<h2 id="redirecciones">El mapa de redirecciones</h2>

<p>Es el 80 % del trabajo y el único entregable que de verdad decide el resultado. Una hoja con dos columnas: URL antigua y URL nueva. Las reglas que la hacen funcionar:</p>

<ul>
    <li><strong>Una 301 por URL, al destino más parecido.</strong> No a la home, no a la categoría: a la página que responde a lo mismo que respondía la antigua. Una redirección a un destino que no equivale se trata como un error suave y pierde la señal igual que un 404.</li>
    <li><strong>Sin cadenas.</strong> Si la URL A redirigía ya a la B, la nueva regla debe llevar A directamente al destino final, no a B. Las cadenas heredadas de migraciones anteriores son la fuente de fallos más común en sitios con años.</li>
    <li><strong>Cuando no hay equivalente, decide explícitamente.</strong> Si el contenido desaparece y no hay sustituto razonable, un 410 o un 404 son la respuesta correcta y honesta. Redirigirlo a cualquier sitio para «no perder el enlace» solo genera ruido.</li>
    <li><strong>Prioriza por la lista de tráfico.</strong> Las mil URLs sin visitas pueden resolverse con reglas por patrón; las cien que traen el tráfico se revisan una a una, a mano.</li>
    <li><strong>Prueba el mapa antes del lanzamiento</strong>, en el entorno de preproducción, pasando la lista completa de URLs antiguas y comprobando que cada una devuelve 301 al destino esperado. No hay atajo para esto.</li>
</ul>

<h2 id="dia">El día del cambio</h2>

<p>Con el inventario y el mapa hechos, el lanzamiento es corto. Lista de verificación, en este orden:</p>

<ol>
    <li><strong>Quita el <code>noindex</code> y el bloqueo de robots del entorno nuevo.</strong> Es el fallo número uno de las migraciones: el sitio sale a producción con la configuración de preproducción y desaparece del índice en días.</li>
    <li><strong>Activa las redirecciones</strong> y comprueba una muestra de cincuenta URLs reales, incluidas las diez que más tráfico traen.</li>
    <li><strong>Revisa canónicas, títulos y descripciones</strong> en las plantillas nuevas: apuntando a las URLs nuevas y sin valores por defecto del CMS.</li>
    <li><strong>Comprueba los enlaces internos.</strong> Deben apuntar a las URLs nuevas directamente, no pasar por la redirección. El criterio de estructura está en la <a href="/guias/enlazado-interno-y-arquitectura-web">guía de enlazado interno</a>.</li>
    <li><strong>Verifica los datos estructurados</strong>, que suelen perderse al cambiar de plantilla sin que nadie lo note; lo que hay que conservar está en la <a href="/guias/datos-estructurados-para-ia">guía de datos estructurados</a>.</li>
    <li><strong>Sube el sitemap nuevo</strong> a Search Console, con las URLs nuevas y solo las indexables.</li>
    <li><strong>Deja el sitemap antiguo accesible unos días.</strong> Ayuda a que Google vuelva a pasar por las URLs viejas y encuentre las redirecciones antes.</li>
</ol>

<h2 id="console">Search Console y el cambio de dirección</h2>

<p>Si cambias de dominio, hay un paso extra que no se puede saltar. La herramienta de cambio de dirección de Search Console avisa a Google de que el sitio se ha mudado, y tiene condiciones concretas:</p>

<ul>
    <li>Las <strong>301 tienen que estar puestas antes</strong> de usarla; la herramienta comprueba que la home antigua redirige a la nueva y falla si no es así.</li>
    <li>Hay que <strong>verificar las dos propiedades</strong>, la antigua y la nueva, y abrirla en una propiedad de dominio, sin rutas.</li>
    <li>Google mantiene el aviso durante <strong>180 días</strong>, y en ese plazo las redirecciones deben seguir activas. Pasado ese tiempo deja de reconocer la relación entre los dos sitios.</li>
    <li>No se puede encadenar de inmediato: si acabas de mudar A a B, no pidas enseguida un cambio de B a C.</li>
</ul>

<p>Para migraciones dentro del mismo dominio —cambio de CMS, de estructura de URLs, paso a HTTPS— esta herramienta no aplica ni hace falta: las redirecciones y el sitemap nuevo hacen todo el trabajo.</p>

<h2 id="despues">Las ocho semanas siguientes</h2>

<p>La migración no termina el día del lanzamiento; termina cuando el tráfico vuelve a su sitio. Qué vigilar y cuándo:</p>

<ul>
    <li><strong>Primeras 72 horas:</strong> errores 404 y 5xx en los logs del servidor, a diario. Aquí aparecen las URLs que faltaban en el mapa, y cada una se arregla en minutos si se detecta ya.</li>
    <li><strong>Primera y segunda semana:</strong> el informe de indexación. Verás subir «Página con redirección» —eso es correcto— y debería empezar a crecer el número de páginas nuevas indexadas. Si las nuevas no entran, el diagnóstico está en la <a href="/guias/paginas-que-google-no-indexa">guía de páginas que Google no indexa</a>.</li>
    <li><strong>Semanas tres a seis:</strong> compara clics e impresiones por página contra la foto que guardaste. Trabaja por página, no por total: el agregado esconde qué secciones han caído.</li>
    <li><strong>Semana ocho:</strong> decisión. Si el tráfico ha vuelto al 90 % o más, la migración está cerrada. Si no, toca diagnóstico formal, y el orden para descartar causas está en la <a href="/guias/diagnosticar-caida-de-trafico-seo">guía de diagnóstico de caídas</a>.</li>
</ul>

<h2 id="errores">Errores que cuestan tráfico</h2>

<ul>
    <li><strong>Lanzar sin inventario.</strong> Sin la lista de URLs antiguas no hay mapa posible, y reconstruirla después es adivinar.</li>
    <li><strong>Redirigirlo todo a la home.</strong> Parece que conserva la autoridad y no conserva nada.</li>
    <li><strong>Dejar el <code>noindex</code> de preproducción.</strong> Barato de comprobar, carísimo de descubrir tarde.</li>
    <li><strong>Apagar las redirecciones a los tres meses</strong> «para limpiar». Los enlaces externos antiguos siguen llegando años después.</li>
    <li><strong>Migrar y rediseñar el mismo día.</strong> No por el riesgo técnico, sino porque destruye la posibilidad de diagnosticar.</li>
    <li><strong>Juzgar a los siete días.</strong> Revertir una migración correcta porque la primera semana bajó es la forma más cara de duplicar el daño.</li>
</ul>

<p>Dicho en una frase: una migración se gana en las tres semanas anteriores al lanzamiento, no en el lanzamiento. Lo que se improvisa ese día es precisamente lo que aparece en el informe de tráfico dos meses después.</p>
HTML,
];
