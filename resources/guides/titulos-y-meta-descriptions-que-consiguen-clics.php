<?php

return [
    'title' => 'Title y meta description: cómo escribirlos para ganar clics',
    'navTitle' => 'Title y meta description',
    'seoTitle' => 'Title y meta description que consiguen clics',
    'description' => 'Longitud real, por qué Google reescribe tus títulos, qué poner en la meta description y cómo subir el CTR de páginas que ya posicionan.',
    'excerpt' => 'Es la única parte de tu página que la gente lee antes de decidir si entra. Si ya posicionas y no te hacen clic, el problema suele estar en dos líneas de texto. Así se escriben, se prueban y se miden.',
    'category' => 'Método',
    'published' => '2026-09-23',
    'updated' => '2026-09-23',
    'readingMinutes' => 9,
    'words' => 1484,
    'about' => 'Etiqueta title, meta description y CTR orgánico',
    'related' => ['google-search-console-guia', 'intencion-de-busqueda-en-seo', 'ai-overviews-caida-de-clics', 'escribir-contenido-seo-con-ia', 'actualizar-contenido-antiguo-con-ia', 'canibalizacion-de-keywords'],
    'toc' => [
        'por-que' => 'Por qué dos líneas valen tanto',
        'title' => 'El title: qué hace y cómo se escribe',
        'reescritura' => 'Por qué Google cambia tu título',
        'description' => 'La meta description: qué hace y qué no',
        'plantillas' => 'Patrones que funcionan',
        'proceso' => 'El proceso: de Search Console al cambio',
        'ia' => 'Usar IA sin que se note',
        'errores' => 'Errores que cuestan clics',
    ],
    'faq' => [
        '¿Cuántos caracteres debe tener el title?' => 'Google no corta por caracteres sino por anchura, en torno a 600 píxeles en escritorio. En la práctica eso son unos 50 o 60 caracteres. Más largo no penaliza, pero se corta con puntos suspensivos y lo que quede detrás no se ve. Pon lo importante al principio y trata el final como opcional.',
        '¿La meta description influye en el posicionamiento?' => 'No directamente: Google dejó claro hace años que no la usa como factor de ranking. Influye en el clic, que es lo que te interesa. Una página que posiciona igual pero recibe más clics trae más visitas, y eso es lo que mide el negocio.',
        '¿Por qué Google no muestra mi meta description?' => 'Porque elige el fragmento que mejor responde a cada búsqueda, y a menudo lo saca del propio texto de la página. Pasa mucho con consultas distintas a la principal de la página. Los estudios de Ahrefs encontraron que Google reescribe la mayoría de las descripciones. No es un error: escribe una buena igualmente, porque es la que sale en la consulta principal y en muchas redes sociales.',
        '¿Cada cuánto puedo cambiar un title?' => 'Las veces que quieras, pero da tiempo para medir. Google tiene que volver a rastrear la página y después hacen falta al menos dos o tres semanas de datos para comparar el CTR. Cambiarlo cada pocos días impide saber qué funcionó.',
        '¿Debe coincidir el title con el H1?' => 'No tiene que ser idéntico, pero sí decir lo mismo. El H1 puede ser más largo o más natural; el title, más compacto y con la búsqueda principal al principio. Si prometen cosas distintas, Google tiende a reescribir el título usando el encabezado.',
    ],
    'ctaTitle' => 'Prompts para reescribir títulos y descripciones por lotes',
    'ctaBody' => 'Generar variantes de title por intención, auditar descripciones duplicadas o priorizar páginas por CTR: en <a href="/profesiones/marketing">Marketing</a> están los prompts de SEO y copy mejor valorados.',
    'body' => <<<'HTML'
<p>El title y la meta description son el anuncio gratuito de cada página. Es lo que se ve en Google antes del clic, y en muchas webs es también lo menos trabajado: un título que repite el H1, una descripción que nadie escribió y que Google rellena como puede.</p>

<p>Cuando una página ya posiciona, mejorar esas dos líneas es de lo más rentable que se puede hacer en SEO. No mueve la posición; mueve cuánta gente entra desde la posición que ya tienes.</p>

<h2 id="por-que">Por qué dos líneas valen tanto</h2>

<p>Haz una cuenta con tus propios datos. Una página con 20.000 impresiones al mes y un CTR del 2 % trae 400 visitas. Si el mismo resultado pasa al 3,5 %, trae 700. Nadie ha escrito una palabra más del artículo ni ha conseguido un enlace: solo ha cambiado lo que el usuario lee en la lista.</p>

<p>Por eso la primera búsqueda de oportunidades en la guía de <a href="/guias/google-search-console-guia">Google Search Console</a> es precisamente esa: páginas con muchas impresiones y un CTR bajo para su posición.</p>

<h2 id="title">El title: qué hace y cómo se escribe</h2>

<p>La etiqueta <code>&lt;title&gt;</code> tiene dos funciones. Le dice a Google de qué va la página, y es una señal de relevancia. Y es, casi siempre, el texto azul grande que ve el usuario. Lo segundo es lo que más se descuida.</p>

<p>Reglas que funcionan:</p>

<ul>
    <li><strong>La búsqueda principal, al principio.</strong> No por el algoritmo, sino porque el ojo busca las palabras que acaba de escribir.</li>
    <li><strong>Unos 50–60 caracteres.</strong> El corte real es por anchura, en torno a 600 píxeles en escritorio. Las mayúsculas y las letras anchas ocupan más.</li>
    <li><strong>Una promesa concreta.</strong> «Guía de Search Console» describe; «Search Console: qué informes mirar cada semana» promete algo que el usuario quiere.</li>
    <li><strong>Encaja con la intención.</strong> Si quien busca quiere comparar, el título dice «comparativa» o «A frente a B»; si quiere hacer algo, dice «cómo» o «paso a paso». Cómo leer esa intención en la propia página de resultados está en la guía de <a href="/guias/intencion-de-busqueda-en-seo">intención de búsqueda</a>.</li>
    <li><strong>La marca, al final o fuera.</strong> Google ya muestra el nombre del sitio encima del resultado. Repetirlo en el title gasta espacio, salvo que la marca sea el motivo del clic.</li>
</ul>

<h2 id="reescritura">Por qué Google cambia tu título</h2>

<p>Desde 2021 Google reescribe los títulos que considera poco útiles para el usuario, y suele tirar del H1, de otros encabezados o del texto de enlaces que apuntan a la página. Lo hace sobre todo en estos casos:</p>

<ul>
    <li>El title es demasiado largo y se cortaría a media frase.</li>
    <li>Está relleno de palabras clave repetidas.</li>
    <li>Es genérico o igual en muchas páginas: «Inicio», «Producto», «Blog | Mi empresa».</li>
    <li>No coincide con lo que dice el H1 o el contenido.</li>
    <li>Tiene un dato caducado, como un año que ya pasó.</li>
</ul>

<p>Si ves que Google muestra otro título, no lo tomes como un castigo: es una pista de lo que considera más claro. Muchas veces la solución es alinear el title con el H1 y acortarlo.</p>

<h2 id="description">La meta description: qué hace y qué no</h2>

<p>La meta description no ayuda a posicionar. Su único trabajo es convencer. Google la usa como fragmento cuando responde bien a la búsqueda y la sustituye por un trozo del texto cuando no, algo que ocurre en la mayoría de los casos según los estudios de Ahrefs.</p>

<p>Aun así merece la pena escribirla, por tres motivos: es la que aparece en la consulta principal de la página, la usan muchas redes y aplicaciones de mensajería al compartir un enlace, y te obliga a resumir para qué sirve la página, que es un buen ejercicio en sí.</p>

<ul>
    <li><strong>Entre 120 y 155 caracteres.</strong> En móvil se corta antes, así que lo esencial va en los primeros cien.</li>
    <li><strong>Amplía el title, no lo repite.</strong> Si el título dice qué, la descripción dice qué vas a encontrar y para quién.</li>
    <li><strong>Algo concreto.</strong> Un número, un plazo, un criterio, lo que incluye. «Todo lo que necesitas saber» no dice nada.</li>
    <li><strong>Única en cada página.</strong> Las descripciones duplicadas en plantillas son las primeras que Google ignora.</li>
</ul>

<h2 id="plantillas">Patrones que funcionan</h2>

<figure>
<table>
    <thead>
        <tr><th>Intención</th><th>Patrón de title</th><th>Qué debe decir la descripción</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Aprender</strong></td><td>Tema: el ángulo concreto</td><td>Qué preguntas resuelve y en qué orden</td></tr>
        <tr><td><strong>Hacer</strong></td><td>Cómo + tarea, paso a paso</td><td>Cuántos pasos, qué necesitas, cuánto se tarda</td></tr>
        <tr><td><strong>Comparar</strong></td><td>A frente a B: cuál elegir según tu caso</td><td>Criterios usados y para quién gana cada uno</td></tr>
        <tr><td><strong>Comprar o contratar</strong></td><td>Producto o servicio + diferencial + lugar</td><td>Precio o rango, plazo, garantía, prueba</td></tr>
        <tr><td><strong>Resolver un problema</strong></td><td>Síntoma: por qué pasa y qué hacer</td><td>La causa más común y la primera comprobación</td></tr>
    </tbody>
</table>
</figure>

<p>Son puntos de partida, no fórmulas. Si todas tus páginas acaban sonando igual, has cambiado un problema por otro.</p>

<h2 id="proceso">El proceso: de Search Console al cambio</h2>

<ol>
    <li><strong>Exporta páginas y consultas</strong> de los últimos tres meses desde el informe de rendimiento.</li>
    <li><strong>Marca las páginas con CTR bajo para su posición.</strong> Compáralas con otras tuyas en posiciones parecidas; los promedios de sector sirven poco.</li>
    <li><strong>Descarta las que tienen un AI Overview encima.</strong> Ahí el problema no es tu título y el tratamiento es otro, el de la guía de <a href="/guias/ai-overviews-caida-de-clics">AI Overviews y caída de clics</a>.</li>
    <li><strong>Busca tú mismo la consulta principal</strong> y mira tu resultado junto a los de al lado. Muchas veces el motivo salta a la vista: un año viejo, un título cortado o uno que promete menos que los demás.</li>
    <li><strong>Reescribe diez páginas, no cien.</strong> Anota la fecha del cambio.</li>
    <li><strong>Compara el CTR a las tres o cuatro semanas</strong> contra el mismo periodo anterior, mirando solo la consulta principal para que no te confundan las demás.</li>
</ol>

<p>Si al revisar consultas ves dos páginas tuyas turnándose para la misma búsqueda, cambiar títulos no lo arregla: es una <a href="/guias/canibalizacion-de-keywords">canibalización</a> y se resuelve antes.</p>

<h2 id="ia">Usar IA sin que se note</h2>

<p>Un asistente es muy bueno generando variantes y muy malo eligiendo. Úsalo así:</p>

<ul>
    <li>Dale la consulta principal, las cinco consultas secundarias con más impresiones, el H1 y un resumen de la página.</li>
    <li>Pide diez títulos de menos de 60 caracteres, cada uno con un ángulo distinto (práctico, comparativo, de problema, con dato).</li>
    <li>Pide que te explique qué intención cubre cada uno. Descarta los que prometen algo que la página no tiene.</li>
    <li>Elige tú, y ajusta a mano el tono.</li>
</ul>

<p>Los modelos tienden a usar las mismas muletillas —«guía definitiva», «todo lo que necesitas saber», «descubre»— y en una lista de resultados donde la mitad están escritos igual eso hace que tu resultado desaparezca. La guía de <a href="/guias/escribir-contenido-seo-con-ia">contenido SEO con IA</a> tiene más sobre cómo evitarlo.</p>

<h2 id="errores">Errores que cuestan clics</h2>

<ul>
    <li><strong>Prometer lo que la página no da.</strong> Sube el clic un tiempo y luego la gente vuelve a la lista, que es peor.</li>
    <li><strong>Mayúsculas, emojis y exclamaciones</strong> para llamar la atención. Google suele quitarlos y, si los deja, restan credibilidad.</li>
    <li><strong>Años en el título que nadie actualiza.</strong> Un «2024» en 2026 es un motivo claro para no hacer clic.</li>
    <li><strong>Títulos de plantilla en páginas generadas</strong> que solo cambian una palabra. Google acaba reescribiéndolos todos.</li>
    <li><strong>Medir con días de datos.</strong> El CTR fluctúa; decide con semanas.</li>
</ul>

<p>Resumido: una página que posiciona y no recibe clics tiene casi siempre un problema de mensaje, no de algoritmo. Diez títulos bien reescritos al mes, medidos con paciencia, dan más visitas que muchos artículos nuevos.</p>
HTML,
];
