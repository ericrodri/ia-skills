<?php

return [
    'title' => 'Herramientas SEO gratis que sí sirven, y para qué usar cada una',
    'navTitle' => 'Herramientas SEO gratis',
    'seoTitle' => 'Herramientas SEO gratis que sí sirven',
    'description' => 'Las herramientas SEO gratuitas que cubren casi todo el trabajo: Search Console, PageSpeed, Screaming Frog, Bing Webmaster Tools y cómo sumar la IA.',
    'excerpt' => 'Para una web pequeña o mediana, las herramientas de pago son un lujo, no un requisito. Con media docena de herramientas gratuitas y un asistente de IA se cubre casi todo: saber qué pasa en Google, encontrar errores técnicos, elegir búsquedas y vigilar a la competencia.',
    'category' => 'Herramientas',
    'published' => '2026-09-26',
    'updated' => '2026-09-26',
    'readingMinutes' => 7,
    'words' => 1211,
    'about' => 'Herramientas SEO gratuitas',
    'related' => ['google-search-console-guia', 'auditoria-seo-tecnica', 'keyword-research-con-ia', 'analisis-de-competencia-seo', 'medir-el-trafico-de-ia', 'datos-estructurados-para-ia'],
    'toc' => [
        'base' => 'Las imprescindibles',
        'tecnico' => 'Para revisar la parte técnica',
        'keywords' => 'Para elegir qué búsquedas atacar',
        'competencia' => 'Para mirar a la competencia',
        'ia' => 'Dónde encaja la IA',
        'pago' => 'Cuándo merece la pena pagar',
        'kit' => 'El kit mínimo según tu caso',
    ],
    'faq' => [
        '¿Se puede hacer SEO sin pagar ninguna herramienta?' => 'Sí, sobre todo en webs pequeñas y medianas. Search Console, PageSpeed Insights, la prueba de resultados enriquecidos y la versión gratuita de Screaming Frog cubren el diagnóstico técnico y el seguimiento. Lo que se echa de menos sin pagar son los datos de la competencia: volúmenes de búsqueda precisos, enlaces de otras webs y posiciones de terceros.',
        '¿Cuál es la herramienta SEO gratuita más importante?' => 'Google Search Console, sin discusión. Es la única que da datos reales de Google sobre tu web: por qué búsquedas apareces, cuántos clics recibes, qué páginas están indexadas y qué errores encuentra Google. Todas las demás son estimaciones o comprobaciones puntuales.',
        '¿Sirve ChatGPT como herramienta SEO?' => 'Sirve para trabajar con datos, no para inventarlos. Es muy útil para agrupar búsquedas, redactar títulos, revisar si un texto responde a una pregunta o analizar un listado exportado de Search Console. No sirve para decirte volúmenes de búsqueda o posiciones: no tiene esos datos y, si se los pides, puede inventarlos.',
        '¿Las versiones gratuitas de Semrush o Ahrefs merecen la pena?' => 'Para consultas puntuales, sí. Ahrefs Webmaster Tools es gratis para tus propias webs verificadas y da un informe de enlaces y una auditoría técnica bastante completos. Las cuentas gratuitas de Semrush permiten unas pocas consultas al día, suficientes para mirar de vez en cuando a un competidor, pero no para trabajar a diario.',
        '¿Qué herramienta gratuita uso para medir la velocidad?' => 'PageSpeed Insights. Da dos tipos de datos: los de laboratorio, que simulan una carga, y los de campo, que vienen de usuarios reales de Chrome. Los que cuentan para Google son los de campo. Si tu web tiene poco tráfico y no hay datos de campo, usa el informe de laboratorio como orientación.',
    ],
    'ctaTitle' => 'Prompts para sacarle más partido a tus datos de SEO',
    'ctaBody' => 'Analizar una exportación de Search Console, agrupar búsquedas o convertir una auditoría en tareas: en <a href="/profesiones/marketing">Marketing</a> están los prompts de SEO mejor valorados.',
    'body' => <<<'HTML'
<p>Las listas de «las 50 mejores herramientas SEO» tienen un problema: meten en el mismo saco lo imprescindible y lo que usarás una vez. En la práctica, casi todo el SEO de una web pequeña o mediana se hace con seis o siete herramientas gratuitas. Esta guía explica cuáles son, qué hace cada una y cuándo tiene sentido empezar a pagar.</p>

<h2 id="base">Las imprescindibles</h2>

<figure>
<table>
    <thead>
        <tr><th>Herramienta</th><th>Para qué sirve</th><th>Por qué es imprescindible</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Google Search Console</strong></td><td>Búsquedas, clics, indexación, errores</td><td>Son los datos reales de Google sobre tu web</td></tr>
        <tr><td><strong>Bing Webmaster Tools</strong></td><td>Lo mismo, para Bing</td><td>Bing alimenta también las respuestas de varios asistentes de IA</td></tr>
        <tr><td><strong>Google Analytics 4</strong></td><td>Qué hacen las visitas una vez dentro</td><td>Conecta el tráfico con conversiones</td></tr>
        <tr><td><strong>PageSpeed Insights</strong></td><td>Velocidad y Core Web Vitals</td><td>Muestra datos de usuarios reales de Chrome</td></tr>
    </tbody>
</table>
</figure>

<p>Si solo vas a configurar una, que sea Search Console. Casi todas las preguntas de SEO («¿por qué ha bajado el tráfico?», «¿qué debería publicar?», «¿Google ve esta página?») se responden primero ahí. La configuración paso a paso está en la guía de <a href="/guias/google-search-console-guia">Google Search Console</a>.</p>

<p>Bing Webmaster Tools suele quedar en el olvido, y es un error: tiene poco tráfico propio en España, pero su índice es la base de varios buscadores y asistentes. Se puede importar la configuración desde Search Console en un par de minutos.</p>

<h2 id="tecnico">Para revisar la parte técnica</h2>

<ul>
    <li><strong>Screaming Frog SEO Spider.</strong> Rastrea tu web como lo haría Google y te enseña títulos duplicados, enlaces rotos, redirecciones, páginas sin <code>canonical</code> o con <code>noindex</code>. La versión gratuita llega a 500 URL, suficiente para la mayoría de webs pequeñas.</li>
    <li><strong>Prueba de resultados enriquecidos y validador de Schema.</strong> Comprueban si los datos estructurados de una página son correctos y si pueden generar resultados enriquecidos. Más en la guía de <a href="/guias/datos-estructurados-para-ia">datos estructurados</a>.</li>
    <li><strong>Lighthouse</strong>, dentro de las herramientas de desarrollo de Chrome. Útil para probar cambios de rendimiento antes de publicarlos.</li>
    <li><strong>Inspección de URL de Search Console.</strong> Enseña el HTML que Google renderiza. Es la forma más rápida de saber si tu contenido depende de JavaScript que Google no ejecuta.</li>
</ul>

<p>Con estas cuatro puedes hacer una revisión técnica completa. El orden en que conviene mirar cada cosa está en la <a href="/guias/auditoria-seo-tecnica">auditoría SEO técnica</a>.</p>

<h2 id="keywords">Para elegir qué búsquedas atacar</h2>

<ul>
    <li><strong>Tus propios datos de Search Console.</strong> La mejor fuente de ideas y la más ignorada: las búsquedas por las que ya apareces en posiciones de la 8 a la 20 son las más fáciles de mejorar.</li>
    <li><strong>Planificador de palabras clave de Google Ads.</strong> Da volúmenes en rangos amplios sin gastar dinero, aunque necesitas una cuenta de Ads.</li>
    <li><strong>Google Trends.</strong> No da volúmenes, pero compara términos y enseña estacionalidad. Sirve para saber si una búsqueda sube o baja.</li>
    <li><strong>Los propios resultados de Google.</strong> Autocompletar, «Otras preguntas de los usuarios» y búsquedas relacionadas. Gratis y con la intención de búsqueda a la vista.</li>
</ul>

<p>El método para convertir todo eso en una lista de temas priorizada está en la guía de <a href="/guias/keyword-research-con-ia">keyword research con IA</a>.</p>

<h2 id="competencia">Para mirar a la competencia</h2>

<p>Aquí es donde lo gratuito se queda más corto, porque los datos de otras webs solo los tienen las herramientas de pago. Aun así:</p>

<ul>
    <li><strong>Ahrefs Webmaster Tools</strong> es gratis para las webs que verificas. No sirve para espiar a otros, pero da tu perfil de enlaces con bastante detalle.</li>
    <li><strong>Las cuentas gratuitas de Semrush o Ahrefs</strong> permiten unas pocas consultas al día. Suficiente para una revisión puntual de un competidor.</li>
    <li><strong>Screaming Frog sobre la web del competidor</strong> te da su estructura, sus títulos y cuántas páginas dedica a cada tema.</li>
</ul>

<p>Cómo combinar todo esto en un análisis útil está en la guía de <a href="/guias/analisis-de-competencia-seo">análisis de la competencia SEO</a>.</p>

<h2 id="ia">Dónde encaja la IA</h2>

<p>Un asistente de IA no sustituye a ninguna de estas herramientas, pero multiplica lo que sacas de ellas. La regla es simple: <strong>los datos salen de las herramientas; la IA los ordena y los interpreta</strong>.</p>

<ul>
    <li><strong>Exporta y analiza.</strong> Una exportación de Search Console con mil búsquedas es ilegible a mano. Un asistente la agrupa por tema e intención en un minuto.</li>
    <li><strong>Convierte informes en tareas.</strong> Pega el resultado de un rastreo y pide una lista priorizada de arreglos.</li>
    <li><strong>No le pidas cifras.</strong> Volúmenes, posiciones o número de enlaces que no le hayas dado, se los inventará. Es el tipo de error que describe la guía de <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>.</li>
</ul>

<p>Y ahora hay una métrica nueva que vigilar: cuántas visitas llegan desde ChatGPT, Perplexity o Gemini. Se mide con GA4, como explica <a href="/guias/medir-el-trafico-de-ia">cómo medir el tráfico que llega desde la IA</a>.</p>

<h2 id="pago">Cuándo merece la pena pagar</h2>

<ul>
    <li><strong>Cuando la competencia es el centro del trabajo:</strong> seguir posiciones de otros, analizar sus enlaces o encontrar búsquedas por las que ellos aparecen y tú no.</li>
    <li><strong>Cuando la web supera las 500 URL</strong> y necesitas rastrearla entera con regularidad.</li>
    <li><strong>Cuando gestionas varios clientes</strong> y el tiempo que ahorran los informes automáticos vale más que la suscripción.</li>
</ul>

<p>Si no estás en ninguno de esos casos, probablemente no lo necesitas todavía.</p>

<h2 id="kit">El kit mínimo según tu caso</h2>

<figure>
<table>
    <thead>
        <tr><th>Caso</th><th>Kit gratuito</th></tr>
    </thead>
    <tbody>
        <tr><td>Blog o web de servicios</td><td>Search Console, GA4, PageSpeed Insights y un asistente de IA</td></tr>
        <tr><td>Tienda online</td><td>Lo anterior, más Screaming Frog, la prueba de resultados enriquecidos y Merchant Center</td></tr>
        <tr><td>Negocio local</td><td>Search Console, Perfil de Empresa de Google y Bing Places</td></tr>
        <tr><td>Web nueva</td><td>Search Console y Bing Webmaster Tools desde el primer día, aunque aún no haya datos</td></tr>
    </tbody>
</table>
</figure>

<p>Resumido: Search Console es la base, PageSpeed y Screaming Frog cubren lo técnico, tus propios datos son la mejor fuente de búsquedas y la IA sirve para analizarlo todo más rápido. Paga solo cuando necesites datos de otros.</p>
HTML,
];
