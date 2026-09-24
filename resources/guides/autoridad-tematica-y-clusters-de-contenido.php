<?php

return [
    'title' => 'Autoridad temática: cómo se construye con clusters de contenido',
    'navTitle' => 'Autoridad temática',
    'seoTitle' => 'Autoridad temática y clusters SEO',
    'description' => 'Qué es la autoridad temática, por qué pesa más que la autoridad de dominio y cómo montar pillars y clusters de contenido sin inflar el sitio.',
    'excerpt' => 'Publicar treinta artículos sobre treinta temas distintos no construye nada. Publicar treinta sobre uno, bien enlazados, sí. Esto es cómo se decide cuáles y en qué orden.',
    'category' => 'Método',
    'published' => '2026-09-21',
    'updated' => '2026-09-21',
    'readingMinutes' => 11,
    'words' => 1807,
    'about' => 'Autoridad temática y arquitectura de contenido en clusters',
    'related' => ['posicionar-una-web-nueva-en-google', 'enlazado-interno-y-arquitectura-web', 'canibalizacion-de-keywords', 'keyword-research-con-ia', 'eeat-experiencia-contenido-con-ia', 'seo-programatico-con-ia', 'actualizar-contenido-antiguo-con-ia'],
    'toc' => [
        'que-es' => 'Qué es y qué no es',
        'por-que' => 'Por qué pesa más que antes',
        'mapa' => 'Primero el mapa, luego los artículos',
        'estructura' => 'Pillar, clusters y la regla del enlace de vuelta',
        'cuanto' => 'Cuánto contenido hace falta de verdad',
        'orden' => 'En qué orden publicar',
        'medir' => 'Cómo saber si está funcionando',
        'errores' => 'Lo que la rompe',
    ],
    'faq' => [
        '¿Es lo mismo que la autoridad de dominio?' => 'No, y se confunden constantemente. La autoridad de dominio es una estimación comercial de la fuerza global de tu sitio, calculada por herramientas de terceros a partir de enlaces; Google ha repetido que no usa esa métrica. La autoridad temática describe algo distinto: si cubres un tema con la profundidad de quien lo conoce. Un dominio con métricas bajas puede ganar en su nicho a uno mucho más grande que solo ha escrito un artículo suelto sobre el asunto. Lo que sí es cierto es que los enlaces del propio nicho refuerzan la autoridad temática, mientras que los de directorios genéricos no la mueven.',
        '¿Cuántos artículos necesito para un cluster?' => 'Los que tenga el tema, no un número fijo. La pregunta correcta no es «cuántos» sino «qué preguntas quedan sin responder si alguien llega aquí sin saber nada». En temas estrechos son cinco o seis; en temas amplios pueden ser veinte. Lo que no funciona es decidir el número primero y rellenarlo después: así salen artículos que existen para completar una cuadrícula y que no responden nada que nadie pregunte.',
        '¿Cuánto tarda en notarse?' => 'De cuatro a ocho meses en un nicho concreto, siempre que se publique de forma constante y bien enlazado. En temas amplios o muy competidos, doce o más. Es de las cosas más lentas del SEO, y también de las que aguantan mejor los cambios de algoritmo, porque no dependen de una táctica concreta sino de la cobertura real del tema.',
        '¿Puedo tener autoridad en varios temas a la vez?' => 'Sí, pero no desde el principio. Lo razonable es consolidar uno hasta que traiga tráfico estable y solo entonces abrir el siguiente, preferiblemente adyacente. Abrir cinco temas a la vez con un sitio pequeño reparte el mismo esfuerzo en cinco frentes y ninguno llega a la profundidad que hace falta. Los sitios grandes lo hacen en paralelo porque tienen equipos en paralelo.',
        '¿Sirve generar el cluster entero con IA?' => 'Para el mapa, sí: agrupar consultas por intención y detectar huecos es exactamente lo que hace bien. Para el texto, el problema no es el idioma sino que un cluster generado sin experiencia real es indistinguible de los otros veinte iguales que ya existen, y ahí no hay nada que citar. El reparto útil es IA para la estructura y para los borradores, y criterio propio para lo que solo puedes saber tú: qué falla en la práctica, cuánto cuesta, qué pasó cuando lo probaste.',
    ],
    'ctaTitle' => 'Prompts de estrategia de contenidos votados por profesionales',
    'ctaBody' => 'Mapas de temas, briefings y calendarios editoriales: <a href="/profesiones/marketing">Marketing</a>. Para la parte de seguimiento y cuadros de mando, mira <a href="/profesiones/analisis-de-datos">Análisis de datos</a>.',
    'body' => <<<'HTML'
<p>Hay una pregunta que aparece siempre que un proyecto pequeño lleva un año publicando sin resultados: «¿escribo más o escribo mejor?». La respuesta suele ser ninguna de las dos. El problema habitual no es el volumen ni la calidad pieza a pieza, es que los cuarenta artículos publicados hablan de cuarenta cosas distintas y ninguno se apoya en otro.</p>

<h2 id="que-es">Qué es y qué no es</h2>

<p>La autoridad temática es el grado en que un buscador te trata como fuente competente <em>en un tema</em>, no en general. Se deduce de cuánto de ese tema cubres, de si esa cobertura es coherente y de si las páginas que lo tratan están conectadas entre sí.</p>

<p>Tres aclaraciones que ahorran discusiones:</p>

<ul>
    <li><strong>No es una métrica que Google publique.</strong> No hay un número que consultar. Lo que existe son efectos observables: que empieces a posicionar consultas del tema que no habías trabajado específicamente.</li>
    <li><strong>No es la autoridad de dominio.</strong> Esa es una estimación de una herramienta comercial, basada en enlaces, que Google no usa. Son cosas distintas y a veces apuntan en direcciones opuestas.</li>
    <li><strong>No es publicar mucho.</strong> Un sitio con mil páginas sobre mil temas tiene menos autoridad temática que uno con cincuenta sobre uno.</li>
</ul>

<h2 id="por-que">Por qué pesa más que antes</h2>

<p>Dos cosas han cambiado en los últimos dos años y las dos empujan en la misma dirección.</p>

<p>La primera son los core updates. El de marzo de 2026 fue el más volátil registrado hasta la fecha: según los datos de SE Ranking, el 79,5 % de los resultados del top 3 cambió de posición y casi una de cada cuatro páginas del top 10 salió por completo del top 100. En movimientos de esa magnitud lo que aguanta no son las páginas optimizadas una a una, son los sitios que cubren su tema entero. Quien tenía un único artículo afortunado en primera posición lo perdió; quien tenía el tema cubierto perdió una posición aquí y ganó dos allá.</p>

<p>La segunda es cómo funcionan las respuestas generadas. Para que un sistema te cite al responder sobre una entidad, tiene que reconocerte asociado a esa entidad. Y eso se construye apareciendo en el contexto del tema muchas veces, no una. Es la misma lógica que explica por qué las <a href="/guias/menciones-de-marca-y-enlaces">menciones de marca</a> correlacionan tanto: ser reconocible es previo a ser citado.</p>

<h2 id="mapa">Primero el mapa, luego los artículos</h2>

<p>El error de orden más caro es empezar por la lista de keywords. Una lista de keywords ordenada por volumen produce un calendario editorial, no una arquitectura. Lo que hace falta antes es el mapa del tema: todo lo que alguien necesita entender para resolver el problema completo, tenga volumen de búsqueda o no.</p>

<p>Una forma práctica de sacarlo, en una tarde:</p>

<ol>
    <li><strong>Escribe el problema del que quieres ser la referencia</strong> en una frase, con el sujeto concreto. No «marketing», sino «conseguir clientes siendo un despacho de dos personas».</li>
    <li><strong>Lista las preguntas reales</strong>, las que te hacen por teléfono. Entre veinte y cuarenta salen sin esfuerzo si trabajas en el sector.</li>
    <li><strong>Agrupa por intención</strong>, no por parecido de palabras: entender, comparar, decidir, ejecutar, arreglar. Cada grupo es un candidato a cluster.</li>
    <li><strong>Cruza con datos de búsqueda</strong> al final, no al principio. Sirve para priorizar el orden de publicación y para descubrir huecos que no habías pensado, no para decidir qué existe. El método está en la <a href="/guias/keyword-research-con-ia">guía de keyword research</a>.</li>
    <li><strong>Marca lo que solo puedes contar tú</strong>: cifras de tu operación, casos, precios reales. Esas son las piezas que nadie puede replicar y las que sostienen el resto.</li>
</ol>

<p>Del mapa sale una cosa que la lista de keywords no da: saber qué <em>no</em> vas a cubrir. Un cluster con fronteras claras es lo que evita que el sitio se vaya convirtiendo en un blog generalista.</p>

<h2 id="estructura">Pillar, clusters y la regla del enlace de vuelta</h2>

<p>La estructura es simple y lleva veinte años funcionando:</p>

<figure>
<table>
    <thead>
        <tr><th>Pieza</th><th>Qué cubre</th><th>Cuántas</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Pillar</strong></td><td>El tema completo, a nivel panorámico, con enlaces a cada sub-tema</td><td>1 por tema</td></tr>
        <tr><td><strong>Cluster</strong></td><td>Un sub-tema a fondo, con su propia intención de búsqueda</td><td>5–20 por pillar</td></tr>
        <tr><td><strong>Página de servicio o producto</strong></td><td>La conversión; recibe enlaces del cluster</td><td>Las que tengas</td></tr>
    </tbody>
</table>
</figure>

<p>Lo que hace que esto sea una arquitectura y no una carpeta es el enlazado: cada cluster enlaza al pillar, el pillar enlaza a cada cluster, y los clusters se enlazan entre sí cuando la relación es real. Sin el enlace de vuelta al pillar la estructura no existe para un rastreador, solo existe en tu hoja de cálculo. El detalle de cómo hacerlo —anchors, profundidad de clic, qué no hacer— está en la <a href="/guias/enlazado-interno-y-arquitectura-web">guía de enlazado interno</a>.</p>

<p>Un aviso que se paga caro al montar clusters rápido: si dos piezas responden a la misma intención, no tienes dos clusters, tienes una <a href="/guias/canibalizacion-de-keywords">canibalización</a>. Es el efecto secundario más común de esta estrategia y conviene revisarlo cada vez que se cierra un cluster.</p>

<h2 id="cuanto">Cuánto contenido hace falta de verdad</h2>

<p>Las recomendaciones que circulan —«2 o 3 pillars y 8 a 12 clusters en los primeros 90 días»— sirven como orden de magnitud y no como objetivo. El criterio útil es otro: <strong>el cluster está completo cuando alguien que llega sin saber nada puede resolver el problema entero sin salir de tu sitio</strong>. Si para el paso tres tiene que irse a otra web, ahí falta una pieza; si tienes cuatro artículos sobre el paso uno, ahí sobran tres.</p>

<p>Para un proyecto de una persona, un ritmo sostenible y suficiente es un pillar y dos o tres clusters al mes. Es menos de lo que prometen las agencias y bastante más de lo que la mayoría mantiene durante ocho meses seguidos, que es lo que hace falta.</p>

<h2 id="orden">En qué orden publicar</h2>

<p>El orden importa más de lo que parece, porque los primeros meses no traen tráfico y hay que evitar abandonar antes de que empiece.</p>

<ol>
    <li><strong>Primero las piezas de la intención más cercana al dinero</strong>, aunque tengan poco volumen: comparativas, «cómo elegir», precios. Traen pocas visitas y convierten, así que sostienen la moral y el presupuesto.</li>
    <li><strong>Después el pillar.</strong> Se escribe mejor cuando ya existen tres o cuatro clusters a los que enlazar, y se queda hueco si se escribe primero.</li>
    <li><strong>Luego la cobertura de abajo</strong>: las preguntas de entrada, las que tienen volumen y no convierten. Son las que construyen la señal de cobertura.</li>
    <li><strong>Al final, el mantenimiento.</strong> A partir del sexto mes, actualizar lo publicado rinde más que publicar nuevo; cómo decidirlo está en la <a href="/guias/actualizar-contenido-antiguo-con-ia">guía de actualización de contenido antiguo</a>.</li>
</ol>

<h2 id="medir">Cómo saber si está funcionando</h2>

<p>El indicador de que la autoridad temática se está construyendo no es el tráfico total, que sube por muchas razones. Son estos tres, todos disponibles en Search Console sin pagar nada:</p>

<ul>
    <li><strong>Consultas distintas por las que apareces dentro del tema.</strong> Filtra por la carpeta del cluster y cuenta consultas únicas mes a mes. Si crece más rápido que el número de artículos publicados, estás posicionando cosas que no has escrito específicamente: esa es la señal.</li>
    <li><strong>Posición media del conjunto, no de la página estrella.</strong> Una mejora de 18 a 12 en cincuenta consultas vale más que un primer puesto en una.</li>
    <li><strong>Cuántas páginas del cluster reciben al menos un clic al mes.</strong> Si de quince piezas solo tres tienen tráfico, la cobertura es aparente: hay doce páginas que existen para el mapa y para nadie más.</li>
</ul>

<h2 id="errores">Lo que la rompe</h2>

<ul>
    <li><strong>Cambiar de tema al tercer mes.</strong> Es el error que más proyectos mata. Ocho meses es el plazo; abandonar al tercero garantiza no llegar nunca con ningún tema.</li>
    <li><strong>Un artículo por keyword.</strong> Produce diez páginas para una intención y la <a href="/guias/canibalizacion-de-keywords">canibalización</a> consiguiente. Una intención, una página.</li>
    <li><strong>Clusters sin fronteras.</strong> Si el cluster crece hacia cualquier lado, deja de describir un tema. Vale más un tema cerrado que tres abiertos.</li>
    <li><strong>Cobertura sin experiencia.</strong> Cubrir el tema con texto genérico da la forma sin el fondo, y desde los updates de 2026 eso es exactamente lo que se cae. La parte de credenciales y experiencia real está en la <a href="/guias/eeat-experiencia-contenido-con-ia">guía de E-E-A-T</a>.</li>
    <li><strong>Pillars huérfanos.</strong> Un pillar al que no enlaza ningún cluster es una página larga, no una arquitectura.</li>
</ul>

<p>Lo incómodo de esta estrategia es que no tiene atajo y que el retorno llega tarde. Lo bueno es que, cuando llega, no depende de una táctica que el siguiente update pueda desactivar: depende de que seas, efectivamente, quien mejor cubre su tema.</p>
HTML,
];
