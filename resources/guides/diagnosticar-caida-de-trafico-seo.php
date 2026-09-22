<?php

return [
    'title' => 'Caída de tráfico SEO: cómo diagnosticarla en orden',
    'navTitle' => 'Diagnosticar una caída',
    'seoTitle' => 'Caída de tráfico SEO: diagnóstico',
    'description' => 'El orden para averiguar por qué ha bajado tu tráfico orgánico: descartar medición, técnico, core updates y pérdida de clics antes de tocar el contenido.',
    'excerpt' => 'El tráfico baja un 30 % y el primer impulso es reescribir algo. Casi siempre es el paso equivocado: en la mitad de los casos ni siquiera se ha perdido posición. Este es el orden correcto.',
    'category' => 'Método',
    'published' => '2026-09-21',
    'updated' => '2026-09-21',
    'readingMinutes' => 10,
    'words' => 1715,
    'about' => 'Diagnóstico de caídas de tráfico orgánico',
    'related' => ['paginas-que-google-no-indexa', 'migracion-web-sin-perder-seo', 'ai-overviews-caida-de-clics', 'canibalizacion-de-keywords', 'auditoria-seo-tecnica', 'actualizar-contenido-antiguo-con-ia', 'medir-el-trafico-de-ia', 'autoridad-tematica-y-clusters-de-contenido'],
    'toc' => [
        'antes' => 'Antes de mirar nada: dos preguntas',
        'medicion' => 'Paso 1: descartar que sea la medición',
        'forma' => 'Paso 2: la forma de la caída dice la causa',
        'clics' => 'Paso 3: ¿posiciones o clics?',
        'tecnico' => 'Paso 4: lo técnico',
        'update' => 'Paso 5: si fue un core update',
        'plan' => 'Qué hacer con el diagnóstico',
        'errores' => 'Lo que empeora la situación',
    ],
    'faq' => [
        '¿Cuánto tengo que esperar antes de preocuparme?' => 'Una caída de menos del 10 % durante menos de dos semanas casi nunca es nada: es variación normal, estacionalidad o ruido de muestreo. Lo que merece diagnóstico es una bajada sostenida más de tres semanas, o una bajada brusca de más del 20 % en pocos días. Actuar sobre el ruido es la causa más frecuente de convertir una oscilación en un problema real, porque los cambios que se hacen en pánico suelen empeorarla.',
        '¿Puedo recuperarme de un core update?' => 'Sí, pero no con un parche y no rápido. Google dice explícitamente que no hay nada que «arreglar» y que la recuperación viene de mejorar el sitio en conjunto; en la práctica lo que se ve es que la recuperación llega con el update siguiente, no entre updates, así que el plazo realista son meses. Lo que no funciona es reescribir veinte páginas en una semana y esperar el rebote: si el update premió cobertura y experiencia, eso no se produce en siete días.',
        '¿Y si bajan las impresiones pero no los clics?' => 'Suele ser bueno o irrelevante. Menos impresiones con los mismos clics significa que has dejado de aparecer en consultas que nunca te traían nada, que es lo que pasa cuando el buscador ajusta a quién enseña en la cola larga. Hay un caso particular en 2026: Google confirmó un error de registro que sobreestimó las impresiones entre mayo de 2025 y abril de 2026, así que una caída de impresiones en esa transición puede ser simplemente el dato volviendo a su nivel correcto.',
        '¿Sirve de algo pedir una revisión a Google?' => 'Solo si tienes una acción manual, y eso aparece dicho con esas palabras en Search Console, en el apartado de Acciones manuales. Son poco frecuentes. Si ese apartado está limpio, no hay ninguna revisión que pedir ni ningún formulario que rellenar: lo que ha cambiado es el algoritmo o tu web, y en ambos casos se arregla trabajando, no comunicando.',
        '¿Debo desindexar las páginas que han perdido tráfico?' => 'Casi nunca, y menos en caliente. Una página sin tráfico no perjudica al resto por existir; lo que perjudica es tener cientos de páginas vacías que nadie ha revisado nunca. La decisión de retirar contenido se toma con criterio y con datos de varios meses, no como reacción a una caída de tres semanas.',
    ],
    'ctaTitle' => 'Prompts de análisis y diagnóstico votados por profesionales',
    'ctaBody' => 'Cruces de Search Console, detección de anomalías y cuadros de mando: <a href="/profesiones/analisis-de-datos">Análisis de datos</a>. Para la parte de contenido y priorización, mira <a href="/profesiones/marketing">Marketing</a>.',
    'body' => <<<'HTML'
<p>Las caídas de tráfico se diagnostican casi siempre al revés. Se empieza por la hipótesis más cara —«el contenido ya no gusta a Google»— y se acaba reescribiendo páginas que estaban bien, mientras la causa real era un <code>noindex</code> desplegado por error o una etiqueta de analítica que dejó de disparar. El orden de abajo va de lo más barato de comprobar a lo más caro de arreglar, y ese orden es la mitad del trabajo.</p>

<h2 id="antes">Antes de mirar nada: dos preguntas</h2>

<p>Con las respuestas a estas dos, el diagnóstico se reduce a la mitad:</p>

<ul>
    <li><strong>¿Bajó todo o bajó una parte?</strong> Si bajan a la vez el tráfico directo, el de redes y el orgánico, el problema no es SEO: es medición o es el negocio. Si baja solo el orgánico, sigue.</li>
    <li><strong>¿Bajó de golpe o poco a poco?</strong> Una caída vertical de un día para otro apunta a algo binario: un despliegue, una redirección, un bloqueo. Una pendiente de semanas apunta a algo gradual: un update, pérdida de relevancia, competencia nueva.</li>
</ul>

<h2 id="medicion">Paso 1: descartar que sea la medición</h2>

<p>Es el primer paso porque es el más rápido y porque un porcentaje incómodo de «caídas» terminan aquí. Cuatro comprobaciones:</p>

<ol>
    <li><strong>Compara Analytics con Search Console.</strong> Si Search Console mantiene clics y Analytics los pierde, la caída es de medición: no has perdido visitas, has perdido el registro de visitas.</li>
    <li><strong>Revisa si hubo despliegue.</strong> Un contenedor de etiquetas que no se carga en una plantilla, un banner de consentimiento nuevo o un cambio de dominio de medición producen caídas limpias de un día para otro.</li>
    <li><strong>Mira el filtro y la propiedad.</strong> Cambios de filtros, de zona horaria o mirar una propiedad que solo cubre un subdominio explican bastantes sustos.</li>
    <li><strong>Ten presente el error de impresiones de Search Console.</strong> Google confirmó que un fallo de registro sobreestimó las impresiones desde el 13 de mayo de 2025 hasta el 27 de abril de 2026. Si tu «caída» es de impresiones y coincide con esa corrección, no es una pérdida de posiciones.</li>
</ol>

<h2 id="forma">Paso 2: la forma de la caída dice la causa</h2>

<p>La curva es el mejor indicio que hay. Con el rango de 16 meses en Search Console:</p>

<figure>
<table>
    <thead>
        <tr><th>Forma</th><th>Causa probable</th><th>Dónde confirmar</th></tr>
    </thead>
    <tbody>
        <tr><td>Vertical, en un día, sin recuperación</td><td>Técnico: <code>noindex</code>, robots.txt, redirección, caída del servidor</td><td>Informe de páginas indexadas</td></tr>
        <tr><td>Escalón en 1–2 semanas</td><td>Core update</td><td>Fechas de updates frente a tu curva</td></tr>
        <tr><td>Pendiente de meses</td><td>Contenido desactualizado o competencia</td><td>Consultas que pierden posición</td></tr>
        <tr><td>Impresiones estables, clics abajo</td><td>Pérdida de CTR: AI Overviews o nuevos elementos en la SERP</td><td>CTR por consulta</td></tr>
        <tr><td>Igual que el año pasado por estas fechas</td><td>Estacionalidad</td><td>Comparación año contra año</td></tr>
        <tr><td>Solo unas consultas, alternando URL</td><td>Canibalización</td><td>Pestaña de páginas por consulta</td></tr>
    </tbody>
</table>
</figure>

<p>La comparación año contra año merece insistencia: en la mayoría de sectores hay dos o tres semanas al año en las que el tráfico baja siempre, y cada año alguien las diagnostica como un problema nuevo.</p>

<h2 id="clics">Paso 3: ¿posiciones o clics?</h2>

<p>Esta distinción decide si hay algo que arreglar en tu web o no, y es la que más ha cambiado en los dos últimos años.</p>

<p>En Search Console, filtra por el periodo de la caída y compáralo con el anterior mirando cuatro métricas juntas: clics, impresiones, CTR y posición media. Hay dos escenarios muy distintos:</p>

<ul>
    <li><strong>Posición media peor.</strong> Has perdido ranking. Aquí sí hay trabajo de contenido, enlazado o técnico, y el resto de los pasos aplica.</li>
    <li><strong>Posición media igual, CTR abajo.</strong> Sigues donde estabas y te hacen menos clic. No has perdido relevancia: ha cambiado la página de resultados encima de ti.</li>
</ul>

<p>El segundo escenario es hoy la causa más habitual de caída sin pérdida de posiciones. Los resúmenes generados de Google aparecen ya en cerca de la mitad de las búsquedas, y en las consultas donde aparecen el CTR orgánico se hunde. Es un problema real pero es <em>otro</em> problema: no se arregla optimizando, se arregla decidiendo qué consultas dejan de ser un canal de tráfico y qué se hace con ellas. Está desarrollado en la <a href="/guias/ai-overviews-caida-de-clics">guía de AI Overviews</a>, y la parte de cuantificar qué llega desde asistentes, en la <a href="/guias/medir-el-trafico-de-ia">guía de medición del tráfico de IA</a>.</p>

<h2 id="tecnico">Paso 4: lo técnico</h2>

<p>Si la caída es vertical, esto va antes que cualquier hipótesis de contenido. El orden por probabilidad:</p>

<ol>
    <li><strong>Indexación.</strong> Search Console → Páginas. Mira si crecen de golpe las excluidas y por qué motivo. Un <code>noindex</code> heredado de un entorno de pruebas es el clásico absoluto. Qué significa cada motivo del informe está en la <a href="/guias/paginas-que-google-no-indexa">guía de páginas que Google no indexa</a>.</li>
    <li><strong>robots.txt.</strong> Compruébalo en vivo. Un <code>Disallow: /</code> desplegado desde staging tumba un sitio en 48 horas.</li>
    <li><strong>Redirecciones.</strong> Tras una migración, busca cadenas y bucles. Una cadena de tres saltos diluye y una a la home se trata como soft 404. Si la caída empieza justo el día del cambio, el repaso completo está en la <a href="/guias/migracion-web-sin-perder-seo">guía de migración web</a>.</li>
    <li><strong>Respuesta del servidor y rendimiento.</strong> Errores 5xx intermitentes durante el rastreo hacen caer páginas del índice sin aviso. El detalle de qué medir está en la <a href="/guias/auditoria-seo-tecnica">guía de auditoría técnica</a>.</li>
    <li><strong>Renderizado.</strong> Si el contenido depende de JavaScript, comprueba la versión renderizada, no el HTML que sirves. Un cambio de bundle puede dejar páginas vacías para un rastreador y perfectas para un humano.</li>
</ol>

<h2 id="update">Paso 5: si fue un core update</h2>

<p>Pon las fechas de los updates sobre tu curva. Si el escalón empieza dentro de la ventana de despliegue, ahí está la causa. En 2026 han ido cuatro: uno específico de Discover en febrero, un update de spam y un core update en marzo, y otro core update en mayo.</p>

<p>El de marzo de 2026 fue el más volátil registrado: según SE Ranking, el 79,5 % de los resultados del top 3 cambió de posición y cerca de una de cada cuatro páginas del top 10 desapareció del top 100. Con esa volatilidad, una caída fuerte en esas fechas no dice nada sobre la calidad de tu sitio en particular; dice que se recolocó el sector entero.</p>

<p>Lo útil no es saber que fue un update, es saber <strong>qué se movió dentro de tu sitio</strong>. Exporta las consultas de antes y de después y contesta tres preguntas: ¿cayeron todas las secciones o una?, ¿cayeron las páginas informativas o las comerciales?, ¿quién ocupa ahora tu sitio en las consultas perdidas? La respuesta a la tercera es la que orienta el trabajo, y suele apuntar a cobertura del tema y a experiencia demostrable, que es lo que estos updates vienen premiando: las palancas están en la <a href="/guias/autoridad-tematica-y-clusters-de-contenido">guía de autoridad temática</a> y en la <a href="/guias/eeat-experiencia-contenido-con-ia">de E-E-A-T</a>.</p>

<h2 id="plan">Qué hacer con el diagnóstico</h2>

<p>Terminado el diagnóstico, casi siempre quedan tres o cuatro causas candidatas y la tentación de atacarlas todas a la vez. No conviene:</p>

<ol>
    <li><strong>Arregla lo técnico ya.</strong> No tiene contrapartida y el efecto se ve en días.</li>
    <li><strong>Escribe lo que ha cambiado y cuándo.</strong> Un registro con fecha de cada intervención es lo único que permitirá saber, en seis semanas, qué funcionó.</li>
    <li><strong>Cambia una cosa a la vez</strong> en lo que sí es hipótesis, con dos o tres semanas entre cambios.</li>
    <li><strong>Prioriza por tráfico perdido, no por facilidad.</strong> Diez páginas concentran normalmente la mayor parte de la pérdida.</li>
    <li><strong>Vuelve a medir a las seis semanas</strong>, no a los siete días.</li>
</ol>

<h2 id="errores">Lo que empeora la situación</h2>

<ul>
    <li><strong>Reescribirlo todo la primera semana.</strong> Elimina la posibilidad de saber qué pasaba y añade variables nuevas.</li>
    <li><strong>Desindexar en caliente.</strong> Retirar páginas como reacción convierte una caída reversible en una pérdida permanente.</li>
    <li><strong>Comprar enlaces.</strong> Es la respuesta que más se vende ante una caída y la que menos tiene que ver con las causas de esta lista.</li>
    <li><strong>Cambiar de CMS o rediseñar.</strong> Una migración en medio de una caída suma sus propios problemas y hace imposible atribuir nada.</li>
    <li><strong>Mirar el dato a diario.</strong> Search Console tiene ruido de dos o tres días. La revisión diaria produce decisiones basadas en ruido.</li>
</ul>

<p>Tras hacer esto unas cuantas veces, el patrón se repite: la mitad de las caídas no eran caídas, una parte era técnica y barata de arreglar, y solo el resto exigía tocar el contenido. Empezar por el final de esa lista es lo que hace que un mes de trabajo no sirva para nada.</p>
HTML,
];
