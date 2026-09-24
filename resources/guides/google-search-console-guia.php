<?php

return [
    'title' => 'Google Search Console: la guía para usarlo de verdad',
    'navTitle' => 'Google Search Console',
    'seoTitle' => 'Google Search Console: guía práctica',
    'description' => 'Cómo dar de alta tu web, qué informes de Search Console mirar cada semana y cómo sacar oportunidades del informe de rendimiento sin perderte en avisos.',
    'excerpt' => 'Es la única herramienta que te cuenta qué ve Google de tu web con datos del propio Google, y es gratis. Casi todo el mundo la instala y luego solo mira la gráfica de clics. Esto es lo que merece tu tiempo y en qué orden.',
    'category' => 'Método',
    'published' => '2026-09-23',
    'updated' => '2026-09-23',
    'readingMinutes' => 10,
    'words' => 1732,
    'about' => 'Google Search Console',
    'related' => ['posicionar-una-web-nueva-en-google', 'paginas-que-google-no-indexa', 'diagnosticar-caida-de-trafico-seo', 'titulos-y-meta-descriptions-que-consiguen-clics', 'medir-el-trafico-de-ia', 'keyword-research-con-ia', 'auditoria-seo-tecnica'],
    'toc' => [
        'que-es' => 'Qué es y qué no es',
        'alta' => 'Darla de alta: dominio o prefijo de URL',
        'rendimiento' => 'El informe de rendimiento, bien leído',
        'oportunidades' => 'Tres búsquedas de oportunidades que funcionan',
        'resto' => 'El resto de informes: cuáles importan',
        'rutina' => 'La rutina: semanal, mensual y cuando algo pasa',
        'ia' => 'Delegar el análisis en una IA',
        'errores' => 'Errores habituales',
    ],
    'faq' => [
        '¿Search Console es lo mismo que Google Analytics?' => 'No. Search Console mide lo que pasa en Google antes del clic: en qué búsquedas apareces, cuántas veces, en qué posición y cuántos hacen clic. Analytics mide lo que pasa en tu web después del clic, venga de donde venga la visita. Por eso sus cifras de visitas desde Google nunca coinciden del todo, y por eso conviene usar las dos.',
        '¿Por qué no veo todas las consultas?' => 'Porque Google oculta las consultas que hace muy poca gente, por privacidad. En sitios pequeños o de nicho esa parte oculta puede ser la mayoría de los clics. El total de la parte superior del informe sí las incluye; la tabla de consultas no. No es un error de tu cuenta.',
        '¿Cuánto tiempo guarda los datos?' => 'Dieciséis meses en la interfaz. Si quieres un histórico más largo tienes que sacarlo tú: exportando cada mes, con la API o con la exportación masiva a BigQuery. Conviene montarlo pronto, porque lo que no guardes a tiempo no se recupera.',
        '¿Cada cuánto se actualizan los datos?' => 'El informe de rendimiento va con unos dos días de retraso, aunque existe una vista de las últimas 24 horas con datos casi en tiempo real. Los informes de indexación y de experiencia se mueven más despacio: tras un arreglo pueden tardar semanas en reflejarlo.',
        '¿El Modo IA y los AI Overviews salen en Search Console?' => 'Sus clics e impresiones cuentan dentro del total de búsqueda web del informe de rendimiento, mezclados con el resto. Para verlos aparte está el informe de IA generativa, que da impresiones por página pero no clics ni consultas.',
    ],
    'ctaTitle' => 'Prompts para analizar Search Console sin hojas de cálculo eternas',
    'ctaBody' => 'Clasificar consultas, detectar páginas con muchas impresiones y pocos clics o preparar el informe mensual: <a href="/profesiones/marketing">Marketing</a> y <a href="/profesiones/analisis-de-datos">Análisis de datos</a> tienen los prompts mejor valorados para ese trabajo.',
    'body' => <<<'HTML'
<p>Search Console es gratis, la da Google y tiene datos que ninguna herramienta de pago puede tener: las búsquedas reales por las que apareces, las veces que te han visto y lo que Google piensa de cada una de tus URLs. Aun así, en la mayoría de las webs se usa para una sola cosa: mirar si la gráfica de clics sube o baja.</p>

<p>Esta guía va de lo contrario: qué mirar, en qué orden y qué decisiones salen de cada informe.</p>

<h2 id="que-es">Qué es y qué no es</h2>

<p>Search Console es el panel donde Google te cuenta cómo ve tu sitio. Tiene tres tipos de información:</p>

<ul>
    <li><strong>Rendimiento:</strong> por qué búsquedas apareces, cuántas veces, en qué posición media y cuántos clics recibes.</li>
    <li><strong>Estado técnico:</strong> qué páginas están indexadas y cuáles no, con el motivo; cómo va la experiencia de página; si los datos estructurados tienen errores.</li>
    <li><strong>Avisos:</strong> acciones manuales, problemas de seguridad y cambios importantes que Google te comunica por correo.</li>
</ul>

<p>Lo que no es: no es una herramienta de palabras clave de la competencia, no mide conversiones y no te dice qué hace la gente dentro de tu web. Para eso está la analítica. La comparación útil es esta: Search Console cuenta lo que pasa antes del clic y Analytics lo que pasa después.</p>

<h2 id="alta">Darla de alta: dominio o prefijo de URL</h2>

<p>Al crear la propiedad, Google te pregunta por uno de dos tipos. La elección importa más de lo que parece:</p>

<figure>
<table>
    <thead>
        <tr><th></th><th>Propiedad de dominio</th><th>Prefijo de URL</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Qué cubre</strong></td><td>Todo el dominio: http y https, con y sin www, todos los subdominios</td><td>Solo las URLs que empiezan exactamente por esa dirección</td></tr>
        <tr><td><strong>Verificación</strong></td><td>Un registro TXT en el DNS</td><td>Archivo HTML, metaetiqueta, Analytics o Tag Manager</td></tr>
        <tr><td><strong>Cuándo usarla</strong></td><td>Siempre, como propiedad principal</td><td>Como complemento, para aislar una sección o un idioma</td></tr>
    </tbody>
</table>
</figure>

<p>La recomendación es crear la de dominio aunque cueste cinco minutos más pedir el acceso al DNS. Con una de prefijo es fácil perderse datos sin saberlo: la versión sin www, un subdominio de blog o el tráfico que aún llega por http. Si además tienes secciones grandes, como <code>/blog/</code> o <code>/en/</code>, añade una propiedad de prefijo para cada una: los informes salen filtrados y los límites de exportación se aplican por propiedad.</p>

<p>Después de verificar, envía el sitemap en <em>Indexación → Sitemaps</em> y da acceso a quien lo necesite desde <em>Ajustes → Usuarios y permisos</em>, con permiso restringido si solo tiene que mirar.</p>

<h2 id="rendimiento">El informe de rendimiento, bien leído</h2>

<p>Es donde se pasa el 80 % del tiempo útil. Tiene cuatro métricas y conviene activarlas todas a la vez, porque solas engañan:</p>

<ul>
    <li><strong>Clics:</strong> visitas desde Google a tu web.</li>
    <li><strong>Impresiones:</strong> veces que un resultado tuyo apareció en una página de resultados que el usuario llegó a ver.</li>
    <li><strong>CTR:</strong> clics divididos entre impresiones.</li>
    <li><strong>Posición media:</strong> la media de la posición más alta que ocupó tu sitio en cada búsqueda. Es la métrica más citada y la que peor se interpreta: una página que sale la 3 en una búsqueda y la 60 en otra tiene «posición media 31» y no está en ninguno de los dos sitios.</li>
</ul>

<p>Debajo de la gráfica están las pestañas que la hacen útil: <strong>Consultas, Páginas, Países, Dispositivos, Apariencia en búsquedas y Fechas</strong>. El truco que más rinde es combinarlas con filtros: filtra por una página y mira sus consultas, o filtra por una consulta y mira qué páginas compiten por ella. Si salen dos o más URLs tuyas turnándose para la misma búsqueda, tienes una <a href="/guias/canibalizacion-de-keywords">canibalización</a>.</p>

<p>Dos matices antes de sacar conclusiones. El primero, que los totales incluyen las consultas anónimas y la tabla no, así que la suma de filas nunca da el total. El segundo, que Google reconoció un fallo que infló las impresiones entre mayo de 2025 y abril de 2026: si comparas contra ese periodo, las impresiones de antes están sobreestimadas.</p>

<h2 id="oportunidades">Tres búsquedas de oportunidades que funcionan</h2>

<p><strong>1. Muchas impresiones, poco CTR.</strong> Ordena las páginas por impresiones y mira las que tienen un CTR claramente por debajo del resto en posiciones parecidas. Google ya te enseña; la gente no hace clic. Casi siempre el arreglo está en el resultado que se ve, y el método para reescribirlo está en la guía de <a href="/guias/titulos-y-meta-descriptions-que-consiguen-clics">títulos y meta descriptions que consiguen clics</a>. Si la consulta tiene un AI Overview encima, el problema es otro, y lo cuenta la guía de <a href="/guias/ai-overviews-caida-de-clics">AI Overviews y caída de clics</a>.</p>

<p><strong>2. Posiciones entre la 5 y la 15.</strong> Filtra por posición media (el filtro no existe como tal: exporta y filtra fuera, o pídeselo a una IA). Son páginas que Google considera relevantes pero no las mejores. Una actualización seria —datos nuevos, una sección que falta, mejores enlaces internos— mueve estas páginas más que cualquier contenido nuevo. El proceso está en <a href="/guias/actualizar-contenido-antiguo-con-ia">actualizar contenido antiguo con IA</a>.</p>

<p><strong>3. Consultas por las que apareces sin haberlo buscado.</strong> Filtra una página y lee sus consultas. Aparecerán búsquedas que no habías previsto y que la página responde a medias. Son la mejor fuente de ideas que existe, porque vienen con demanda demostrada. Si ves un grupo con una <a href="/guias/intencion-de-busqueda-en-seo">intención distinta</a> a la de la página, eso pide una página propia.</p>

<h2 id="resto">El resto de informes: cuáles importan</h2>

<ul>
    <li><strong>Inspección de URL.</strong> La barra de arriba. Pega una URL y te dice si está indexada, qué canónica ha elegido Google y cómo la ve al renderizarla. Resuelve más dudas que cualquier otro informe.</li>
    <li><strong>Indexación → Páginas.</strong> Qué URLs están fuera del índice y por qué. Cada motivo tiene un tratamiento distinto, y están explicados uno a uno en la guía de <a href="/guias/paginas-que-google-no-indexa">páginas que Google no indexa</a>.</li>
    <li><strong>Experiencia → Core Web Vitals.</strong> Agrupa URLs parecidas y te dice si pasan los umbrales de carga, respuesta y estabilidad con datos de usuarios reales. Útil para priorizar plantillas, no para perseguir cada décima.</li>
    <li><strong>Mejoras.</strong> Errores de datos estructurados por tipo. Si usas marcado, revísalo tras cada cambio de plantilla.</li>
    <li><strong>Enlaces.</strong> Enlaces externos e internos por página. Sirve para detectar páginas importantes con pocos enlaces internos.</li>
    <li><strong>Discover.</strong> Clics e impresiones en el feed de Google, separados de la búsqueda. Solo aparece a partir de cierto volumen; qué contenido entra ahí está en la guía de <a href="/guias/google-discover-como-aparecer">Google Discover</a>.</li>
    <li><strong>Acciones manuales y Seguridad.</strong> Deberían estar vacíos. Si no lo están, es lo primero.</li>
    <li><strong>IA generativa.</strong> Impresiones en AI Overviews, Modo IA y Discover, por página. Cómo interpretarlo está en la guía de <a href="/guias/medir-el-trafico-de-ia">medir el tráfico de IA</a>.</li>
</ul>

<h2 id="rutina">La rutina: semanal, mensual y cuando algo pasa</h2>

<figure>
<table>
    <thead>
        <tr><th>Cuándo</th><th>Qué mirar</th><th>Tiempo</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Cada semana</strong></td><td>Gráfica de rendimiento de 28 días contra el periodo anterior; correos de Search Console</td><td>10 minutos</td></tr>
        <tr><td><strong>Cada mes</strong></td><td>Las tres búsquedas de oportunidades; informe de páginas; exportación para tu histórico</td><td>1–2 horas</td></tr>
        <tr><td><strong>Tras publicar o cambiar algo</strong></td><td>Inspección de URL de lo publicado; sitemap sin errores</td><td>5 minutos</td></tr>
        <tr><td><strong>Cuando cae el tráfico</strong></td><td>El protocolo completo de la <a href="/guias/diagnosticar-caida-de-trafico-seo">guía de diagnóstico de caídas</a></td><td>Una tarde</td></tr>
    </tbody>
</table>
</figure>

<p>Mirar el dato a diario no está en la tabla a propósito. El informe tiene ruido de varios días y la revisión diaria acaba produciendo decisiones sobre ese ruido.</p>

<h2 id="ia">Delegar el análisis en una IA</h2>

<p>La interfaz enseña mil filas por tabla. Para un análisis serio, exporta consultas y páginas de los últimos tres meses y pásale el archivo a un asistente con instrucciones concretas. Funciona bien para:</p>

<ul>
    <li>Agrupar cientos de consultas por tema y por intención.</li>
    <li>Marcar las páginas con CTR anómalo para su posición.</li>
    <li>Detectar consultas repartidas entre varias URLs.</li>
    <li>Redactar el resumen mensual con los cambios que importan.</li>
</ul>

<p>Dos precauciones. Pide que cite las filas en las que basa cada conclusión, porque un modelo con una tabla grande delante puede inventar una cifra con toda naturalidad; el motivo está en la guía de <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>. Y no mezcles periodos en el mismo archivo sin una columna que los distinga. El método completo para trabajar con exportaciones está en la guía de <a href="/guias/keyword-research-con-ia">keyword research con IA</a>.</p>

<h2 id="errores">Errores habituales</h2>

<ul>
    <li><strong>Tener solo la propiedad de prefijo</strong> y no enterarte de lo que pasa en la versión con www o en el subdominio.</li>
    <li><strong>Obsesionarse con la posición media</strong> del sitio entero. Es una media de cosas que no se pueden promediar.</li>
    <li><strong>Leer la tabla de consultas como si fuera el total.</strong> Falta la parte anónima.</li>
    <li><strong>Comparar un mes contra el anterior</strong> en un sector estacional. Compara contra el mismo periodo del año pasado.</li>
    <li><strong>No guardar histórico.</strong> A los dieciséis meses los datos desaparecen, y justo cuando necesitas comparar dos años no los tienes.</li>
    <li><strong>Ignorar los correos.</strong> Search Console avisa de subidas de errores de indexación y de problemas de seguridad. Es la alarma gratuita más fiable que vas a tener.</li>
</ul>

<p>Si solo vas a hacer una cosa después de leer esto, que sea la primera búsqueda de oportunidades: páginas con muchas impresiones y poco CTR. Es el trabajo con mejor retorno por hora que ofrece el SEO, y la herramienta te lo da ordenado.</p>
HTML,
];
