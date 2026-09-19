<?php

return [
    'title' => 'Keyword research con IA: de volumen a intención',
    'navTitle' => 'Keyword research con IA',
    'seoTitle' => 'Keyword research con IA: guía práctica',
    'description' => 'Cómo usar la IA para agrupar palabras clave por intención y encontrar huecos sin que te invente volúmenes: flujo de seis pasos, prompts y errores caros.',
    'excerpt' => 'La IA es extraordinaria ordenando mil palabras clave por intención y pésima diciéndote cuánta gente las busca. Separar esas dos cosas es casi todo el método: aquí está el flujo completo, con los prompts y con la parte que no se delega.',
    'category' => 'Práctica',
    'published' => '2026-09-18',
    'updated' => '2026-09-18',
    'readingMinutes' => 11,
    'words' => 1813,
    'about' => 'Investigación de palabras clave asistida por IA',
    'related' => ['seo-programatico-con-ia', 'ai-overviews-caida-de-clics', 'escribir-contenido-seo-con-ia', 'aparecer-en-chatgpt-y-perplexity-geo', 'alucinaciones-de-la-ia'],
    'toc' => [
        'que-cambia' => 'Qué ha cambiado en la investigación de palabras clave',
        'no-delegar' => 'Lo primero: lo que la IA no puede darte',
        'flujo' => 'El flujo de seis pasos',
        'prompts' => 'Los prompts que hacen el trabajo',
        'clusters' => 'De lista de palabras a mapa de contenidos',
        'validar' => 'Cómo validar antes de escribir nada',
        'errores' => 'Errores que salen caros',
    ],
    'faq' => [
        '¿Puede la IA darme volúmenes de búsqueda?' => 'No, y este es el error más caro de todos. Un modelo de lenguaje no tiene acceso al volumen de búsqueda salvo que se lo des tú o que use una herramienta conectada. Si se lo preguntas a secas, te dará cifras con aspecto perfectamente creíble que se ha inventado, porque completar patrones es exactamente lo que hace. Los volúmenes salen del planificador de anuncios, de Search Console o de una herramienta de pago; la IA se encarga de ordenar y clasificar lo que esas fuentes devuelven.',
        '¿Entonces para qué sirve la IA en keyword research?' => 'Para cuatro cosas en las que es mejor que una persona con prisa: generar variantes semánticas y formulaciones que no se te habrían ocurrido, agrupar cientos o miles de términos en racimos temáticos coherentes, clasificar cada consulta por intención real y detectar qué huecos tiene tu cobertura frente a la de un competidor. Todo eso es trabajo de ordenar, no de inventar datos.',
        '¿Sigue teniendo sentido la palabra clave como unidad?' => 'Cada vez menos como unidad de trabajo y todavía sí como señal. Las consultas se han alargado y vuelto conversacionales, y una página ya no posiciona por un término sino por un tema entero. Lo práctico es trabajar por racimos de intención —un tema, sus preguntas y sus variantes— y usar las palabras clave sueltas como termómetro de demanda, no como objetivo.',
        '¿Hay que hacer investigación aparte para ChatGPT y Perplexity?' => 'No una investigación aparte, sí una capa más. Las consultas que la gente escribe en un asistente son más largas, más específicas y con más contexto personal que las que teclea en un buscador. La forma barata de cubrirlas es convertir cada racimo en las preguntas literales que alguien haría en una conversación y asegurarte de que tu contenido las responde en la primera frase del apartado correspondiente.',
        '¿Cuánto tarda este flujo?' => 'Para un sitio mediano, entre cuatro y seis horas repartidas: una para exportar y limpiar datos, dos para la clasificación asistida, una para revisar a mano lo que el modelo ha puesto en la casilla equivocada y otra para convertirlo en calendario. Hecho a mano, el mismo trabajo son dos o tres días, y la parte que se ahorra es precisamente la más mecánica.',
    ],
    'ctaTitle' => 'Prompts de SEO listos, votados por quien vive de esto',
    'ctaBody' => 'Los prompts de clasificación por intención, auditoría de cobertura y briefing de contenido están en <a href="/profesiones/marketing">Marketing</a>. Si además llevas la parte de datos o de implementación, mira <a href="/profesiones/desarrollo">Desarrollo</a> y <a href="/profesiones/freelancers">Freelancers</a>.',
    'body' => <<<'HTML'
<p>La investigación de palabras clave se ha partido en dos trabajos que antes iban juntos. Uno es conseguir datos fiables de demanda, que sigue necesitando herramientas con datos reales. El otro es dar sentido a esos datos —agrupar, clasificar, priorizar, detectar lo que falta— y ese, que era el que se comía los días, se delega bien.</p>

<p>Quien mezcla los dos acaba con un documento lleno de cifras inventadas. Quien los separa se ahorra dos tercios del tiempo sin perder rigor.</p>

<h2 id="que-cambia">Qué ha cambiado en la investigación de palabras clave</h2>

<p>Tres cosas, y ninguna es la herramienta:</p>

<ul>
    <li><strong>Las consultas se han alargado.</strong> La gente ha aprendido a preguntar con contexto porque los asistentes lo premian. «Mejor CRM» se ha convertido en «qué CRM le sirve a una consultora de cinco personas que factura por horas». Un listado de términos de dos palabras ya no describe la demanda.</li>
    <li><strong>La unidad que compite es el tema, no el término.</strong> Una página bien hecha posiciona para cientos de variantes que nunca escribiste. Optimizar por término suelto produce páginas casi idénticas que se canibalizan entre ellas.</li>
    <li><strong>El clic ya no viene garantizado con la posición.</strong> Una parte de la demanda informativa se resuelve en la propia página de resultados, así que el volumen de búsqueda ha dejado de ser un buen indicador de tráfico esperable. Los números y el detalle están en la guía de <a href="/guias/ai-overviews-caida-de-clics">AI Overviews y la caída de clics</a>.</li>
</ul>

<p>De ahí sale el cambio de criterio que ordena todo lo demás: <strong>se empieza por la intención y se termina por el volumen</strong>, no al revés.</p>

<h2 id="no-delegar">Lo primero: lo que la IA no puede darte</h2>

<p>Antes del método, la advertencia, porque es donde se pierde la credibilidad de un informe entero.</p>

<figure>
<table>
    <thead>
        <tr><th>Tarea</th><th>¿Se delega?</th><th>Por qué</th></tr>
    </thead>
    <tbody>
        <tr><td>Volumen de búsqueda</td><td><strong>No</strong></td><td>El modelo no lo sabe y lo inventa con total naturalidad</td></tr>
        <tr><td>Dificultad de posicionamiento</td><td><strong>No</strong></td><td>Depende de datos de enlaces que no tiene</td></tr>
        <tr><td>Qué posiciona hoy tu competidor</td><td><strong>Solo con navegación</strong></td><td>Sin buscar en vivo, responde con lo que recuerda del entrenamiento</td></tr>
        <tr><td>Agrupar por tema</td><td><strong>Sí</strong></td><td>Es semántica pura, su terreno</td></tr>
        <tr><td>Clasificar por intención</td><td><strong>Sí</strong></td><td>Clasificación con criterio explícito y verificable</td></tr>
        <tr><td>Detectar huecos de cobertura</td><td><strong>Sí</strong></td><td>Comparar dos listas largas es trabajo mecánico</td></tr>
        <tr><td>Generar variantes y preguntas</td><td><strong>Sí</strong></td><td>Produce formulaciones que a una persona no se le ocurren</td></tr>
    </tbody>
</table>
</figure>

<p>La regla que resume la tabla: <strong>la IA ordena datos, no los produce</strong>. Si una celda de tu hoja tiene un número que no ha salido de una fuente identificable, ese número no existe. El mecanismo por el que un modelo rellena huecos con material plausible está explicado en la guía de <a href="/guias/alucinaciones-de-la-ia">alucinaciones</a>, y los volúmenes de búsqueda son uno de sus casos favoritos.</p>

<h2 id="flujo">El flujo de seis pasos</h2>

<ol>
    <li><strong>Reúne la materia prima.</strong> Exporta las consultas de Search Console de los últimos doce meses, las de tu buscador interno si lo tienes, las del planificador de palabras clave y, si trabajas con una herramienta de pago, las de tu competidor más parecido. Con eso ya tienes datos reales; todo lo que venga después es ordenarlos.</li>
    <li><strong>Limpia y normaliza.</strong> Fuera marca propia, fuera duplicados, fuera consultas de una sola impresión. Este paso lo hace un modelo en un minuto sobre el CSV pegado y a mano cuesta una hora.</li>
    <li><strong>Clasifica por intención.</strong> Cuatro casillas: descubrir, comparar, decidir y resolver un problema concreto de quien ya es cliente. Pide la clasificación con una columna extra de justificación en cinco palabras, que es lo que te permite auditar el resultado sin releerlo entero.</li>
    <li><strong>Agrupa en racimos.</strong> Que el modelo proponga grupos temáticos y les ponga nombre. Un racimo bien formado es una página; dos racimos que se solapan al 80 % son una página, no dos.</li>
    <li><strong>Cruza con lo que ya tienes.</strong> Dale la lista de tus URL con sus títulos y pídele el mapa: qué racimo está cubierto y con qué página, cuál está cubierto por dos —canibalización— y cuál no lo está.</li>
    <li><strong>Prioriza y calendariza.</strong> Ordena por demanda real (dato de herramienta), cercanía al negocio (criterio tuyo) y esfuerzo (criterio tuyo). La IA puede proponer el orden; la decisión es tuya porque solo tú sabes qué vendes.</li>
</ol>

<h2 id="prompts">Los prompts que hacen el trabajo</h2>

<p>Tres prompts cubren el 90 % del flujo. Los tres tienen la misma estructura: contexto, datos, criterio explícito y formato de salida. Es el patrón que describe la guía de <a href="/guias/como-escribir-prompts-efectivos">prompts efectivos</a> aplicado aquí.</p>

<p><strong>Clasificación por intención.</strong> «Eres analista SEO. Te paso un CSV con consultas e impresiones. Clasifica cada una en: DESCUBRIR (busca entender qué es), COMPARAR (evalúa opciones), DECIDIR (listo para contratar o comprar) o USAR (ya es cliente y tiene un problema). Devuelve el CSV con dos columnas nuevas: intencion y justificacion (máximo cinco palabras). No inventes consultas que no estén en la lista. Si una consulta es ambigua, márcala como AMBIGUA en lugar de forzar una casilla.»</p>

<p>La última frase es la que más ahorra: sin ella, el modelo reparte lo dudoso a voleo y tú no te enteras.</p>

<p><strong>Agrupación en racimos.</strong> «Con el CSV clasificado, propón racimos temáticos. Cada racimo debe poder cubrirse con una sola página. Devuelve: nombre del racimo, intención dominante, consulta principal, consultas secundarias y una frase con la promesa de la página. Si dos racimos se solapan en más de la mitad de sus consultas, fúndelos y dilo.»</p>

<p><strong>Auditoría de cobertura.</strong> «Te paso dos listas: mis racimos y mis URL actuales con título y primer párrafo. Devuelve una tabla con: racimo, URL que lo cubre o VACÍO, y si hay más de una URL compitiendo por el mismo racimo. Ordena por impresiones perdidas. No propongas contenido nuevo todavía.»</p>

<p>Ese «no propongas contenido nuevo todavía» evita el comportamiento más molesto de estos modelos, que es saltar a las soluciones antes de terminar el diagnóstico.</p>

<h2 id="clusters">De lista de palabras a mapa de contenidos</h2>

<p>Un racimo no es una página hasta que responde a tres preguntas: quién lo busca, qué decide después de leerlo y qué tienes tú que no tenga el que ya está primero.</p>

<p>La tercera es la que separa un calendario editorial útil de una lista de deberes. Si la respuesta es «nada, pero lo explicaré mejor», esa página va a competir en el peor terreno posible: el del contenido resumible que la propia página de resultados sustituye. Si la respuesta es un dato propio, una comparativa hecha de verdad o una herramienta, tienes algo.</p>

<p>Del mapa salen tres tipos de trabajo, y conviene etiquetarlos porque cuestan cosas distintas:</p>

<ul>
    <li><strong>Crear</strong>: racimo sin cobertura y con demanda. Lo más caro y lo que más tarda.</li>
    <li><strong>Consolidar</strong>: dos o tres páginas compitiendo por el mismo racimo. Lo más rentable a corto plazo y casi siempre lo que más se pospone.</li>
    <li><strong>Ampliar</strong>: página que cubre el racimo a medias. Añadir el apartado que falta suele mover más que un artículo nuevo.</li>
</ul>

<h2 id="validar">Cómo validar antes de escribir nada</h2>

<p>Media hora de comprobaciones antes de encargar diez artículos:</p>

<ol>
    <li><strong>Busca las cinco consultas principales de cada racimo</strong> y mira qué devuelve realmente el buscador. Si lo que sale son fichas de producto y tú ibas a escribir una guía, la intención no es la que creías.</li>
    <li><strong>Comprueba si hay bloque de respuesta generada</strong> en esas consultas. Si lo hay en todas, calcula el tráfico esperable a la baja y decide si sigue compensando.</li>
    <li><strong>Verifica los volúmenes</strong> de los racimos que vayan a la cabecera del calendario. No todos: los que van a consumir presupuesto.</li>
    <li><strong>Pregunta las consultas en un asistente</strong> y anota a quién cita. Esa es tu lista real de competidores en el otro tablero, la que describe la <a href="/guias/aparecer-en-chatgpt-y-perplexity-geo">guía de GEO</a>.</li>
</ol>

<h2 id="errores">Errores que salen caros</h2>

<ol>
    <li><strong>Aceptar volúmenes generados.</strong> Un informe con cifras inventadas es peor que no tener informe, porque orienta decisiones con aire de rigor.</li>
    <li><strong>Una página por palabra clave.</strong> Produce decenas de páginas casi iguales que se quitan posiciones entre ellas y que encajan en la definición de contenido a escala sin valor, como explica la guía de <a href="/guias/escribir-contenido-seo-con-ia">contenido SEO con IA</a>. Si el plan pasa por generar cientos de páginas a partir de un conjunto de datos, la forma de hacerlo sin quemar el dominio está en <a href="/guias/seo-programatico-con-ia">SEO programático con IA</a>.</li>
    <li><strong>No auditar la clasificación.</strong> Un modelo clasifica mil consultas en dos minutos y se equivoca en unas cuantas. Revisar cincuenta al azar cuesta diez minutos y te dice si puedes fiarte del resto.</li>
    <li><strong>Priorizar por volumen.</strong> La consulta de mil búsquedas que no compra vale menos que la de treinta que sí. La cercanía al negocio no está en ninguna herramienta.</li>
    <li><strong>Quedarse en la lista.</strong> El entregable no es una hoja de cálculo: es un calendario con páginas asignadas y una promesa por página. Lo demás es trabajo que nadie ejecuta.</li>
</ol>
HTML,
];
