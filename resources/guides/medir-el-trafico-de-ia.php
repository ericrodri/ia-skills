<?php

return [
    'title' => 'Cómo medir el tráfico que te llega desde la IA',
    'navTitle' => 'Medir el tráfico de IA',
    'seoTitle' => 'Medir el tráfico que llega desde la IA',
    'description' => 'El canal de asistentes de IA en la analítica, el informe de IA generativa de Search Console y la auditoría de citas: qué mide cada uno y qué se te escapa.',
    'excerpt' => 'Una parte creciente de tus visitas viene de una conversación con un asistente, y la mayoría aterriza en tu analítica como tráfico directo. Estas son las tres fuentes que hay que montar y lo que cada una deja fuera.',
    'category' => 'Método',
    'published' => '2026-09-18',
    'updated' => '2026-09-18',
    'readingMinutes' => 11,
    'words' => 1786,
    'about' => 'Medición del tráfico procedente de asistentes de IA',
    'related' => ['modo-ia-de-google', 'google-search-console-guia', 'menciones-de-marca-y-enlaces', 'seo-local-con-ia', 'ai-overviews-caida-de-clics', 'aparecer-en-chatgpt-y-perplexity-geo', 'medir-si-la-ia-ahorra-tiempo', 'auditoria-seo-tecnica'],
    'toc' => [
        'por-que-no-lo-ves' => 'Por qué no lo estás viendo',
        'analitica' => 'Paso 1: el canal de asistentes en la analítica',
        'search-console' => 'Paso 2: el informe de IA generativa de Search Console',
        'logs' => 'Paso 3: los registros del servidor',
        'citas' => 'Paso 4: la auditoría de citas',
        'cuadro' => 'Un cuadro de mando de cinco números',
        'trampas' => 'Trampas al interpretar estos datos',
    ],
    'faq' => [
        '¿Por qué mi tráfico de ChatGPT aparece como directo?' => 'Porque una parte grande de esas sesiones llega sin cabecera de referente: la aplicación de escritorio, la app móvil y ciertos flujos de enlace no la envían, y sin referente la analítica no tiene nada que clasificar y lo manda al cajón de directo. Las estimaciones publicadas en 2026 sitúan entre un 35 % y un 70 % la proporción de sesiones de asistentes que se pierden así, según la herramienta y el perfil de usuario. Por eso lo que veas en el canal de IA es siempre un suelo, no la cifra real.',
        '¿El canal nativo de la analítica lo resuelve?' => 'Lo mejora mucho y no lo resuelve. Desde mayo de 2026 existe un canal de asistentes de IA en la agrupación de canales predeterminada, que clasifica automáticamente las sesiones cuyo referente reconoce y les asigna un medio propio. Dos límites: no es retroactivo, así que tu histórico sigue repartido entre referencia y directo, y la lista de asistentes reconocidos es corta, de modo que conviene mantener una agrupación personalizada en paralelo para cubrir los que falten.',
        '¿Search Console ya me dice cuánto tráfico me manda la IA?' => 'Te dice dónde apareces, no cuánto te traen. El informe de rendimiento de IA generativa, anunciado en junio de 2026 y disponible para todos los sitios desde finales de agosto, aísla las impresiones en AI Overviews, en AI Mode y en las funciones generativas de Discover, desglosadas por página, país, dispositivo y fecha. Es visibilidad, no valor: para saber qué hace esa gente cuando llega necesitas cruzarlo con tu analítica.',
        '¿Cuánto tráfico de IA es normal recibir?' => 'Poco todavía, y creciendo rápido. Las mediciones de 2026 sitúan las sesiones procedentes de asistentes en torno al 1 % del tráfico web total, con un crecimiento de varias veces interanual. Si tu sitio va de software, servicios profesionales o decisiones de compra complejas, tu proporción será bastante mayor que la media; si vives de tráfico informativo generalista, probablemente menor y con más pérdida por el lado del buscador.',
        '¿Merece la pena montar esto si mi tráfico de IA es del 1 %?' => 'Sí, por dos motivos. El primero es que se monta una vez y tarda una tarde. El segundo es que la decisión que de verdad importa —dónde pones el esfuerzo editorial el año que viene— necesita una serie histórica: si empiezas a medir cuando el canal ya sea grande, no vas a tener con qué comparar y vas a justificar presupuesto con anécdotas.',
    ],
    'ctaTitle' => 'Automatiza el informe, no la interpretación',
    'ctaBody' => 'Lanzar quince preguntas al mes contra tres asistentes, guardar respuestas y comparar con el mes anterior es trabajo repetitivo y verificable. Los prompts de analítica e informes están en <a href="/profesiones/marketing">Marketing</a>; los de scripts y automatización, en <a href="/profesiones/desarrollo">Desarrollo</a>.',
    'body' => <<<'HTML'
<p>Hay una conversación que se repite en todas las reuniones de marketing desde hace un año: alguien dice que la IA está trayendo clientes, alguien contesta que eso no sale en los datos, y los dos tienen razón. Sale poco en los datos porque la mayor parte llega disfrazada de tráfico directo.</p>

<p>Montar la medición cuesta una tarde. Dejarla para más adelante cuesta un año de decisiones a ciegas.</p>

<h2 id="por-que-no-lo-ves">Por qué no lo estás viendo</h2>

<p>Una visita se clasifica por la cabecera de referente que envía el navegador. Cuando alguien hace clic en una cita dentro de la aplicación de escritorio de un asistente, o dentro de la app del móvil, o en ciertos flujos de enlace, esa cabecera no viaja. La analítica recibe una visita sin origen y la manda al cajón de directo, junto a quien tecleó tu dominio de memoria.</p>

<p>Las estimaciones publicadas en 2026 sitúan esa pérdida entre el 35 % y el 70 % de las sesiones procedentes de asistentes. Es un margen enorme, y esa es la primera conclusión operativa: <strong>cualquier cifra de tráfico de IA que veas es un suelo</strong>. Sirve para ver tendencia, no para repartir presupuesto al céntimo.</p>

<p>La segunda conclusión es que hace falta triangular. Ninguna fuente sola te da la foto: la analítica ve las visitas que llegan, Search Console ve las apariciones en las respuestas de Google, los registros del servidor ven a los rastreadores y la auditoría manual ve lo que dicen de ti los asistentes. Las cuatro juntas sí dibujan algo.</p>

<h2 id="analitica">Paso 1: el canal de asistentes en la analítica</h2>

<p>Desde mayo de 2026, la agrupación de canales predeterminada de Google Analytics incluye un canal propio para asistentes de IA. Cuando se reconoce el referente, la sesión recibe un medio reservado y cae en ese canal sin que haya que configurar nada. Empezó a poblarse en los informes estándar a lo largo de junio.</p>

<p>Dos límites que conviene tener claros antes de enseñarle el informe a nadie:</p>

<ul>
    <li><strong>No es retroactivo.</strong> Todo lo anterior sigue repartido entre referencia y directo, así que no vas a poder comparar con el año pasado dentro de ese canal.</li>
    <li><strong>La lista de asistentes reconocidos es corta</strong> y no coincide siempre con lo que la documentación anuncia. Hay asistentes con cuota relevante que no entran por defecto.</li>
</ul>

<p>Por eso sigue mereciendo la pena una agrupación de canales personalizada en paralelo, con una regla sobre el origen que capture los dominios de los asistentes que te importan. Cinco minutos de trabajo que te dan control sobre qué entra y qué no, y que puedes explicar en una reunión sin depender de la caja negra.</p>

<p>Un apunte de reparto para calibrar expectativas: en los datos de 2026, el tráfico de referencia procedente de asistentes está muy concentrado —ChatGPT se lleva alrededor de tres cuartas partes, y Gemini, Perplexity, Copilot y Claude se reparten el resto—. Si tu informe muestra un reparto muy distinto, casi siempre es un problema de configuración, no una peculiaridad de tu público.</p>

<h2 id="search-console">Paso 2: el informe de IA generativa de Search Console</h2>

<p>Este es el añadido más importante del año para quien trabaja SEO. Google anunció en junio de 2026 un informe de rendimiento específico para sus funciones generativas y terminó de desplegarlo a todos los sitios a finales de agosto.</p>

<figure>
<table>
    <thead>
        <tr><th></th><th>Qué te da</th><th>Qué no te da</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Superficies</strong></td><td>AI Overviews, AI Mode y funciones generativas de Discover</td><td>Asistentes que no son de Google</td></tr>
        <tr><td><strong>Métrica</strong></td><td>Impresiones: cuántas veces apareces</td><td>Desglose de clics y CTR propios de la superficie</td></tr>
        <tr><td><strong>Desgloses</strong></td><td>Página, país, dispositivo y fecha</td><td>Consulta</td></tr>
        <tr><td><strong>Para qué sirve</strong></td><td>Saber qué páginas tuyas usa Google al responder</td><td>Valorar en euros ese canal</td></tr>
    </tbody>
</table>
</figure>

<p>La ausencia de desglose por consulta es la limitación que más duele, porque impide saber <em>a qué pregunta</em> estás respondiendo cuando apareces. Aun así, el informe resuelve la discusión más frecuente de todas: si tus páginas están o no dentro de las respuestas generadas. Antes de agosto de 2026 eso solo se podía estimar; ahora se mira.</p>

<p>La lectura útil es cruzada: ordena tus páginas por impresiones en el informe generativo y compáralas con sus clics en el informe normal. Las páginas con muchas impresiones generativas y pocos clics son tus piezas «citadas pero no visitadas», y son exactamente las que hay que reconvertir en material que no se deje resumir, con el criterio de la guía de <a href="/guias/ai-overviews-caida-de-clics">AI Overviews y la caída de clics</a>.</p>

<h2 id="logs">Paso 3: los registros del servidor</h2>

<p>Los dos pasos anteriores miden a personas. Este mide a máquinas, y responde a una pregunta que ninguna herramienta de analítica contesta: <strong>¿te están leyendo siquiera?</strong></p>

<p>En los registros de acceso de tu servidor o de tu CDN, filtra por los agentes de los rastreadores de IA y cuenta peticiones por día y por sección. Tres lecturas inmediatas:</p>

<ul>
    <li><strong>Si no aparecen</strong>, tienes un problema técnico —bloqueo en <code>robots.txt</code>, regla de cortafuegos, limitación de tasa del CDN— y ninguna cantidad de contenido nuevo lo va a arreglar. Cómo revisarlo está en la guía de <a href="/guias/robots-txt-y-bots-de-ia">robots.txt y bots de IA</a>.</li>
    <li><strong>Si aparecen pero solo pasan por la portada</strong>, tu enlazado interno o tu sitemap no les está dando camino hacia dentro.</li>
    <li><strong>Si pasan mucho por secciones que no te interesan</strong>, estás gastando presupuesto de rastreo en páginas que no quieres que representen a tu marca.</li>
</ul>

<p>Esta parte y las comprobaciones de indexación son el mismo trabajo, y están desarrolladas en la <a href="/guias/auditoria-seo-tecnica">auditoría SEO técnica</a>.</p>

<h2 id="citas">Paso 4: la auditoría de citas</h2>

<p>Es la parte manual y la que más información da por hora invertida, porque mide lo que ninguna herramienta ve: <em>qué dicen de ti</em> cuando te mencionan.</p>

<p>El procedimiento cabe en cinco líneas. Elige quince preguntas que un cliente tuyo haría de verdad —no consultas de dos palabras, preguntas completas con contexto—. Lánzalas una vez al mes en tres asistentes distintos, en sesión limpia y sin historial. Anota si sales, en qué lugar de la respuesta, con qué frase se te describe y a quién citan en tu lugar cuando no sales. Guarda la respuesta entera, no solo el veredicto. Compara con el mes anterior.</p>

<p>Tres meses de ese registro valen más que cualquier panel comprado, por un motivo concreto: te da la lista real de con quién compites en ese tablero, que casi nunca coincide con la lista de quien te compite en el buscador. El trabajo de conseguir estar en esas respuestas es el de la <a href="/guias/aparecer-en-chatgpt-y-perplexity-geo">guía de GEO</a>, y el indicador que lo anticipa —cuántas veces te nombran fuera de tu web— se sigue con el método de <a href="/guias/menciones-de-marca-y-enlaces">menciones de marca y enlaces</a>.</p>

<p>Lanzar las quince preguntas, guardar respuestas y comparar es repetitivo y verificable, o sea, el perfil exacto de tarea que conviene delegar con el método de <a href="/guias/automatizar-tareas-con-ia-en-el-trabajo">automatizar tareas con IA</a>. La interpretación no: esa es la parte que justifica el informe.</p>

<h2 id="cuadro">Un cuadro de mando de cinco números</h2>

<figure>
<table>
    <thead>
        <tr><th>Número</th><th>De dónde sale</th><th>Cada cuánto</th></tr>
    </thead>
    <tbody>
        <tr><td>Sesiones desde asistentes</td><td>Canal de IA de la analítica</td><td>Mensual</td></tr>
        <tr><td>Conversiones desde asistentes</td><td>Mismo canal, con el objetivo asociado</td><td>Mensual</td></tr>
        <tr><td>Impresiones en funciones generativas</td><td>Informe de IA generativa de Search Console</td><td>Mensual</td></tr>
        <tr><td>Peticiones de rastreadores de IA</td><td>Registros del servidor o del CDN</td><td>Mensual</td></tr>
        <tr><td>Tasa de aparición en 15 preguntas</td><td>Auditoría manual de citas</td><td>Mensual</td></tr>
    </tbody>
</table>
</figure>

<p>Cinco números, una hoja, media hora al mes. El segundo es el que cambia las conversaciones de presupuesto: el tráfico de asistentes suele ser poco en volumen y notablemente mejor en calidad, porque llega ya informado y con la decisión medio tomada. Si solo miras sesiones, ese canal parecerá irrelevante durante otro año más. La lógica de elegir el indicador antes que la herramienta está en <a href="/guias/medir-si-la-ia-ahorra-tiempo">medir si la IA ahorra tiempo</a>.</p>

<h2 id="trampas">Trampas al interpretar estos datos</h2>

<ol>
    <li><strong>Tratar el suelo como si fuera la cifra.</strong> Con entre un tercio y dos tercios de sesiones sin referente, tu canal de IA está infravalorado por definición. Dilo en el informe, con esas palabras.</li>
    <li><strong>Comparar contra un histórico que no existe.</strong> El canal nativo no es retroactivo. Cualquier crecimiento espectacular en sus primeros meses es en parte reclasificación, no captación nueva.</li>
    <li><strong>Confundir impresiones generativas con visitas.</strong> Son visibilidad. Muy valiosa y completamente distinta.</li>
    <li><strong>Auditar citas con tu sesión de siempre.</strong> El historial y la personalización contaminan el resultado. Sesión limpia, o estás midiendo tu propio reflejo.</li>
    <li><strong>Montar el panel y no cambiar nada.</strong> La medición solo vale si alguien va a decidir con ella qué se escribe el trimestre que viene.</li>
</ol>
HTML,
];
