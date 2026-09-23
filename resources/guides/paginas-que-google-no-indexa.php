<?php

return [
    'title' => 'Google no indexa mis páginas: cómo saber por qué y qué hacer',
    'navTitle' => 'Páginas sin indexar',
    'seoTitle' => 'Google no indexa mi página: qué hacer',
    'description' => 'Qué significa cada motivo del informe de indexación de Search Console y qué hacer con «Descubierta» y «Rastreada: actualmente sin indexar».',
    'excerpt' => 'Publicas y no aparece. El informe de Search Console dice «Descubierta: actualmente sin indexar» y ahí se acaba la explicación. Esto es lo que hay detrás de cada motivo y qué se arregla en cada caso.',
    'category' => 'Método',
    'published' => '2026-09-22',
    'updated' => '2026-09-22',
    'readingMinutes' => 10,
    'words' => 1605,
    'about' => 'Indexación en Google y diagnóstico de páginas no indexadas',
    'related' => ['google-search-console-guia', 'auditoria-seo-tecnica', 'diagnosticar-caida-de-trafico-seo', 'enlazado-interno-y-arquitectura-web', 'migracion-web-sin-perder-seo', 'seo-programatico-con-ia', 'canibalizacion-de-keywords'],
    'toc' => [
        'confirmar' => 'Primero: confirma que no está indexada',
        'informe' => 'Dónde mirar: el informe de indexación',
        'motivos' => 'Los motivos, traducidos',
        'grises' => 'Los dos estados que no son un error',
        'rastreo' => 'Presupuesto de rastreo: cuándo importa',
        'plan' => 'El plan, en orden',
        'errores' => 'Errores que alargan el problema',
    ],
    'faq' => [
        '¿Cuánto tarda Google en indexar una página nueva?' => 'De un día a varias semanas, y la propia documentación de Google lo deja en ese rango porque depende del sitio. En una web con publicación frecuente, enlaces internos desde páginas que ya reciben visitas y un sitemap al día, lo normal son horas o pocos días. En un dominio nuevo sin enlaces entrantes, semanas es un plazo perfectamente normal y no indica ningún fallo.',
        '¿Sirve de algo el botón «Solicitar indexación»?' => 'Sirve para avisar de una URL concreta, y está bien usarlo cuando publicas algo importante o cuando acabas de corregir un problema. No sirve como método: tiene una cuota diaria pequeña, no garantiza la indexación y no arregla la causa. Si tienes 400 páginas sin indexar, el botón no es la herramienta; el problema es de enlazado, de calidad o de arquitectura.',
        '¿Qué significa exactamente «Descubierta: actualmente sin indexar»?' => 'Que Google conoce la URL —la ha visto en tu sitemap o en un enlace— pero todavía no la ha rastreado. Casi siempre significa que ha decidido que no le compensa gastar rastreo ahí de momento, por señales del sitio entero más que de esa página. Las causas habituales son un dominio con poca autoridad, muchas URLs nuevas a la vez, la página sin enlaces internos, o un servidor lento que hace que Google modere el ritmo.',
        '¿Es malo tener páginas sin indexar?' => 'Depende de cuáles. Un sitio sano tiene una parte de sus URLs fuera del índice a propósito: paginaciones, filtros, páginas de agradecimiento, versiones con parámetros. El problema es cuando fuera del índice están páginas que quieres posicionar. Antes de alarmarte por un número, filtra el informe por las URLs que te importan.',
        '¿El sitemap hace que se indexe?' => 'No. El sitemap ayuda a descubrir URLs, que es el primer paso y no el último: una página puede estar en el sitemap y quedarse en «Descubierta» indefinidamente. Es útil que esté limpio —solo URLs indexables, con respuesta 200, canónicas de sí mismas—, porque un sitemap lleno de redirecciones y de páginas con noindex gasta credibilidad. Pero la indexación se gana con enlaces y con contenido que merezca estar.',
    ],
    'ctaTitle' => 'Prompts de auditoría y diagnóstico votados por profesionales',
    'ctaBody' => 'Revisar exportaciones de Search Console y priorizar arreglos: <a href="/profesiones/analisis-de-datos">Análisis de datos</a>. Para tocar redirecciones, robots y renderizado sin romper nada: <a href="/profesiones/desarrollo">Desarrollo</a>.',
    'body' => <<<'HTML'
<p>Es la situación más frustrante del SEO porque no hay nada que optimizar: la página simplemente no existe para Google. Y el informe que debería explicarlo usa etiquetas que parecen un diagnóstico cuando en realidad son una descripción. Esto es lo que significa cada una y qué se arregla en cada caso.</p>

<h2 id="confirmar">Primero: confirma que no está indexada</h2>

<p>Mucho «no me indexa» es en realidad «no posiciono», que es otro problema con otras soluciones. Dos comprobaciones en un minuto:</p>

<ol>
    <li><strong>Busca la URL exacta</strong> con <code>site:tudominio.com/la-ruta</code>. Si aparece, está indexada y lo que tienes es un problema de posicionamiento, no de indexación.</li>
    <li><strong>Inspecciona la URL en Search Console.</strong> Pega la dirección en la barra superior. Te dirá si está en el índice, cuándo se rastreó por última vez, qué URL considera Google canónica y qué vio al renderizar. Ese último dato es el que más veces resuelve el caso de golpe.</li>
</ol>

<p>Si es la primera vez que abres la herramienta, cómo darla de alta y qué informes merecen tu tiempo está en la <a href="/guias/google-search-console-guia">guía de Google Search Console</a>.</p>

<p>Si la inspección dice que la canónica elegida por Google es otra URL distinta de la tuya, no tienes una página sin indexar: tienes una duplicidad, y se trata como tal.</p>

<h2 id="informe">Dónde mirar: el informe de indexación</h2>

<p>En Search Console, <em>Indexación → Páginas</em> divide todas las URLs conocidas en indexadas y no indexadas, y agrupa las segundas por motivo. Tres cosas que conviene saber antes de leerlo:</p>

<ul>
    <li><strong>Los números van con retraso.</strong> Reflejan el último rastreo, no el estado de hoy. Después de un arreglo, el informe tarda días o semanas en moverse.</li>
    <li><strong>Una parte de lo no indexado es correcta.</strong> Redirecciones, páginas con <code>noindex</code> deliberado, alternativas con canónica: están fuera del índice porque así debe ser.</li>
    <li><strong>Prioriza por motivo y por páginas que importan</strong>, nunca por volumen. Diez fichas de producto sin indexar valen más que dos mil URLs de filtros.</li>
</ul>

<h2 id="motivos">Los motivos, traducidos</h2>

<figure>
<table>
    <thead>
        <tr><th>Motivo del informe</th><th>Qué está pasando</th><th>Qué hacer</th></tr>
    </thead>
    <tbody>
        <tr><td>El archivo robots.txt ha bloqueado la URL</td><td>Has prohibido el rastreo</td><td>Quitar la regla si la página debe posicionar</td></tr>
        <tr><td>La URL se ha marcado como «noindex»</td><td>Etiqueta o cabecera que excluye la página</td><td>Retirarla; revisar si viene de una plantilla</td></tr>
        <tr><td>Error del servidor (5xx)</td><td>El servidor falló al servirla</td><td>Logs del servidor; a veces solo bajo carga</td></tr>
        <tr><td>No se ha encontrado (404)</td><td>La URL no existe</td><td>Redirigir si tuvo tráfico; si no, correcto</td></tr>
        <tr><td>Soft 404</td><td>Responde 200 con contenido vacío o de error</td><td>Devolver 404 real o poner contenido</td></tr>
        <tr><td>Página con redirección</td><td>Redirige a otra URL</td><td>Nada, salvo que no debiera redirigir</td></tr>
        <tr><td>Página alternativa con etiqueta canónica adecuada</td><td>Duplicado señalado por ti</td><td>Nada: funciona como esperas</td></tr>
        <tr><td>Duplicada: Google ha elegido una versión canónica diferente a la del usuario</td><td>Ignora tu canonical</td><td>Diferenciar el contenido o aceptar la elección</td></tr>
        <tr><td>Duplicada: el usuario no ha indicado ninguna versión canónica</td><td>Varias copias sin señal</td><td>Declarar la canónica</td></tr>
        <tr><td>Descubierta: actualmente sin indexar</td><td>La conoce y no la ha rastreado</td><td>Enlaces internos y señales del sitio</td></tr>
        <tr><td>Rastreada: actualmente sin indexar</td><td>La ha leído y ha decidido no incluirla</td><td>Problema de valor de la página</td></tr>
    </tbody>
</table>
</figure>

<p>Los siete primeros son técnicos: tienen una causa concreta, se arreglan y desaparecen. Los dos últimos no son errores y son los que generan casi todas las preguntas.</p>

<h2 id="grises">Los dos estados que no son un error</h2>

<p><strong>«Descubierta: actualmente sin indexar»</strong> significa que Google tiene la URL apuntada y no ha ido a verla. Es un juicio sobre tu sitio, no sobre esa página, porque ni siquiera la ha leído. Lo que suele haber detrás:</p>

<ul>
    <li>Muchas URLs publicadas de golpe, típico de catálogos y de páginas generadas a escala.</li>
    <li>La página no recibe ningún enlace interno desde una sección que Google visite a menudo.</li>
    <li>El servidor responde lento y Google reduce el ritmo de rastreo para no tumbarlo.</li>
    <li>Dominio joven o con poca señal externa: se le asigna poco rastreo y se gasta en lo que ya conoce.</li>
</ul>

<p>La palanca real aquí es el enlazado interno: una página huérfana en el sitemap es una recomendación sin aval. Cómo repartir esos enlaces está en la <a href="/guias/enlazado-interno-y-arquitectura-web">guía de enlazado interno y arquitectura</a>, y si el volumen viene de páginas generadas en serie, el criterio para decidir cuáles merecen existir está en la <a href="/guias/seo-programatico-con-ia">guía de SEO programático</a>.</p>

<p><strong>«Rastreada: actualmente sin indexar»</strong> es distinto y peor: Google ha leído la página y ha decidido que no aporta nada que no tenga ya. No hay arreglo técnico. Las tres causas habituales son contenido casi idéntico a otra página tuya o de un tercero, una página muy fina —una ficha con dos frases, un listado sin texto— o un texto correcto pero sin nada propio, que es donde acaban muchos artículos generados en serie. La diferencia entre un texto publicable y uno que aporta está desarrollada en la <a href="/guias/eeat-experiencia-contenido-con-ia">guía de E-E-A-T</a> y en la de <a href="/guias/escribir-contenido-seo-con-ia">escribir contenido SEO con IA</a>.</p>

<h2 id="rastreo">Presupuesto de rastreo: cuándo importa</h2>

<p>El presupuesto de rastreo se invoca mucho más de lo que se aplica. En un sitio de menos de unos miles de URLs que responde rápido, no es el problema: Google rastrea todo lo que quieres y el motivo de que algo no esté indexado es otro.</p>

<p>Empieza a importar cuando el sitio genera muchas más URLs de las que tiene contenido: filtros combinables, ordenaciones, paginaciones infinitas, buscadores internos indexables, parámetros de campañas. Ahí el rastreo se va en variaciones y las páginas nuevas se quedan esperando.</p>

<p>La señal para comprobarlo es la proporción del informe: si tienes 300 páginas útiles y 40.000 URLs conocidas, el diagnóstico está hecho. La solución no es pedir más rastreo, es generar menos URLs —bloquear combinaciones de filtros, quitar del sitemap lo que no debe posicionar, evitar enlazar internamente lo que no quieres que se rastree—.</p>

<h2 id="plan">El plan, en orden</h2>

<ol>
    <li><strong>Separa lo que quieres indexar de lo que no.</strong> Exporta el informe y marca cada grupo. Sin esto, se trabaja a ciegas.</li>
    <li><strong>Arregla primero lo técnico</strong>: robots, noindex heredados de plantillas, 5xx, soft 404 y cadenas de redirecciones. Es lo rápido y lo que da resultado seguro.</li>
    <li><strong>Resuelve las duplicidades.</strong> Si Google elige otra canónica, o diferencias el contenido o consolidas; el árbol de decisión está en la <a href="/guias/canibalizacion-de-keywords">guía de canibalización</a>.</li>
    <li><strong>Ataca «Descubierta» con enlaces internos</strong> desde las páginas que ya reciben tráfico, y limpia el sitemap para que solo contenga URLs indexables.</li>
    <li><strong>Ataca «Rastreada» con contenido.</strong> Elige las veinte páginas que más te importen y hazlas merecer el índice. Con el resto, decide si deben existir.</li>
    <li><strong>Vuelve a mirar a las tres semanas.</strong> Antes de ese plazo el informe no tiene datos nuevos que contarte.</li>
</ol>

<h2 id="errores">Errores que alargan el problema</h2>

<ul>
    <li><strong>Pedir indexación en bucle</strong> en lugar de quitar la causa. Gasta días y no cambia la decisión.</li>
    <li><strong>Bloquear en robots.txt una página que quieres desindexar.</strong> Si Google no puede rastrearla, no lee el <code>noindex</code> y puede seguir apareciendo. El orden es: permitir el rastreo, poner noindex, esperar, y solo después bloquear si hace falta.</li>
    <li><strong>Meterlo todo en el sitemap</strong>, incluidas redirecciones y páginas excluidas, como si el volumen ayudara.</li>
    <li><strong>Tratar «Rastreada: actualmente sin indexar» como un fallo técnico.</strong> Es la respuesta más cara de todas, porque se pasan meses revisando cabeceras cuando lo que falta es contenido.</li>
    <li><strong>Mirar el total en vez de las páginas que importan.</strong> El número global de un sitio con filtros no significa casi nada.</li>
</ul>

<p>Resumido: lo técnico se arregla en una tarde, lo demás es un juicio de valor de Google sobre si tu página merece un sitio en el índice. Distinguir cuál de los dos tienes delante es la mitad del trabajo.</p>
HTML,
];
