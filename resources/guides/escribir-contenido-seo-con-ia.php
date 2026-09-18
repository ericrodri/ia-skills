<?php

return [
    'title' => 'Escribir contenido SEO con IA sin que Google te hunda',
    'navTitle' => 'Contenido SEO con IA',
    'seoTitle' => '¿Google penaliza el contenido hecho con IA?',
    'description' => 'Google no penaliza por usar IA: penaliza la escala sin valor. Qué dice la política de abuso de contenido a escala y qué flujo aguanta las actualizaciones.',
    'excerpt' => 'La política de Google no distingue entre texto humano y texto de máquina: distingue entre contenido que aporta algo y contenido producido en masa para capturar tráfico. Dónde está esa línea, qué parte del trabajo SEO conviene delegar y cuál no, y el flujo que separa a los que suben de los que desaparecen en una actualización.',
    'category' => 'Método',
    'published' => '2026-09-15',
    'updated' => '2026-09-15',
    'readingMinutes' => 12,
    'words' => 2059,
    'about' => 'SEO y contenido generado con inteligencia artificial',
    'related' => ['ai-overviews-caida-de-clics', 'keyword-research-con-ia', 'aparecer-en-chatgpt-y-perplexity-geo', 'se-nota-si-un-texto-lo-escribe-una-ia', 'investigar-con-ia-deep-research'],
    'toc' => [
        'que-dice-google' => 'Qué dice la política de Google, literalmente',
        'por-que-se-hunden' => 'Qué tienen en común los sitios que se hunden',
        'donde-si-sirve' => 'Dónde la IA sí aporta en un flujo SEO',
        'valor-original' => 'Qué cuenta como valor original',
        'flujo' => 'Un flujo de siete pasos que aguanta actualizaciones',
        'geo' => 'El otro tablero: buscadores que responden sin enlazar',
        'checklist' => 'Checklist antes de darle a publicar',
    ],
    'faq' => [
        '¿Google penaliza el contenido generado con IA?' => 'No por ser generado con IA. La política de spam de Google es deliberadamente agnóstica al método: lo que sanciona es el abuso de contenido a escala, definido como generar muchas páginas cuyo propósito principal es manipular el posicionamiento y que aportan poco o ningún valor, sea el texto de una máquina, de una persona o copiado de otro sitio. La línea práctica no la marca la herramienta, la marca si alguien con criterio ha revisado, verificado y dado forma a eso para un lector real.',
        '¿Cómo detecta Google que un texto es de IA?' => 'La pregunta está mal planteada, porque Google no necesita detectarlo para actuar. Sus sistemas evalúan señales de calidad y de comportamiento: si la página responde a la intención, si aporta algo que no esté ya en los diez resultados anteriores, si el sitio tiene un propósito coherente, si la gente se queda. Un texto excelente escrito con IA pasa; un texto mediocre escrito a mano no. Los detectores comerciales son otra cosa y bastante menos fiable de lo que venden.',
        '¿Cuánto contenido puedo publicar sin que parezca abuso a escala?' => 'No hay un número. El volumen solo es un problema cuando se combina con ausencia de valor añadido y con un propósito evidente de capturar tráfico. Un medio con redacción publica cincuenta artículos al día sin problema; un blog corporativo que pasa de dos entradas al mes a doscientas páginas clonadas por ciudad tiene un problema, aunque las haya escrito una persona. Mira la proporción entre lo que publicas y lo que aportas, no la cifra absoluta.',
        '¿Hay que declarar que un artículo se ha escrito con IA?' => 'Google no lo exige como factor de posicionamiento. Sí exige que no engañes sobre la autoría ni simules experiencias que nadie ha tenido: inventarse un autor con biografía y foto de archivo para firmar contenido automatizado entra en terreno peligroso, y en la UE el Reglamento de IA empuja hacia la transparencia en contenido sintético. Lo sensato es firmar con una entidad real, indicar quién revisa y no fabricar personas.',
        '¿Sirve de algo reescribir textos antiguos con IA?' => 'Sirve si la reescritura añade algo —datos actualizados, un apartado que faltaba, ejemplos reales— y es contraproducente si solo cambia las palabras de sitio. Reescribir por reescribir tira el historial de una URL que funcionaba y no mejora nada. La actualización que sí mueve resultados es la que cambia el contenido, no la que cambia la redacción.',
        '¿La IA sirve para la investigación de palabras clave?' => 'Para agrupar, clasificar por intención y detectar huecos en tu cobertura, muy bien; es de las tareas donde más tiempo ahorra. Para volúmenes de búsqueda, no: los modelos los inventan con toda naturalidad. Los datos de volumen salen de herramientas con datos reales; la IA se encarga del trabajo de ordenar lo que esas herramientas devuelven.',
    ],
    'ctaTitle' => 'Prompts de contenido que no huelen a plantilla',
    'ctaBody' => 'La diferencia entre un texto que posiciona y uno que se hunde suele estar en el prompt y en quién lo revisa. En el catálogo hay skills y prompts de contenido votados por quien vive de esto: mira <a href="/profesiones/marketing">Marketing</a>, <a href="/profesiones/ventas">Ventas</a> y <a href="/profesiones/freelancers">Freelancers</a>.',
    'body' => <<<'HTML'
<p>La pregunta que se hace todo el mundo —«¿me penaliza Google si escribo con IA?»— lleva tres años obteniendo la misma respuesta oficial y tres años sin que nadie se la crea, porque en paralelo se ven sitios enteros desaparecer de un día para otro después de publicar en masa con IA.</p>

<p>Las dos cosas son ciertas a la vez, y entender por qué es todo lo que hace falta para no estar en el segundo grupo.</p>

<h2 id="que-dice-google">Qué dice la política de Google, literalmente</h2>

<p>La política de spam que importa aquí se llama <strong>abuso de contenido a escala</strong> (<em>scaled content abuse</em>) y está redactada con un cuidado que conviene leer despacio: sanciona generar <em>muchas</em> páginas cuyo <em>propósito principal</em> sea manipular el posicionamiento y que aporten <em>poco o ningún valor</em> al usuario, <strong>con independencia de cómo se hayan creado</strong> —máquina, persona o copia de otro sitio.</p>

<p>Esa última cláusula es la clave y la que casi todo el sector se salta. La política no menciona la IA como problema. Menciona tres cosas que tienen que darse a la vez:</p>

<figure>
<table>
    <thead>
        <tr><th>Condición</th><th>Qué significa</th><th>Cómo se evita</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Escala</strong></td><td>Muchas páginas producidas con el mismo molde</td><td>Publicar por hueco real, no por combinatoria de palabras clave</td></tr>
        <tr><td><strong>Propósito</strong></td><td>Existen para capturar búsquedas, no para responderlas</td><td>Que cada página tenga un lector concreto en mente</td></tr>
        <tr><td><strong>Ausencia de valor</strong></td><td>No aportan nada que no esté ya en los resultados</td><td>Datos, criterio o experiencia propios en cada pieza</td></tr>
    </tbody>
</table>
</figure>

<p>La guía oficial sobre IA generativa va en la misma dirección: es una herramienta legítima para investigar, estructurar, analizar y redactar, y el contenido asistido por IA puede posicionar perfectamente <em>cuando es útil, fiable, original y está hecho para personas</em>. Lo que no sobrevive es publicar sin revisión, a volumen, para cazar tráfico.</p>

<p>Junto a esa política conviven otras dos que se activaron con fuerza en las actualizaciones de 2026 y que pillan a sitios que creían estar limpios: el <strong>abuso de reputación del sitio</strong> —alojar contenido de terceros sin supervisión editorial para aprovechar la autoridad del dominio— y el <strong>abuso de dominios caducados</strong>, comprar un dominio con historial y reciclarlo para otra cosa.</p>

<h2 id="por-que-se-hunden">Qué tienen en común los sitios que se hunden</h2>

<p>Si miras los casos documentados de caídas grandes tras una actualización, el patrón se repite con una monotonía sospechosa. Y no es «usaron IA».</p>

<ul>
    <li><strong>Publicaron cientos de páginas en semanas</strong> sobre un abanico de temas que el sitio no había tocado nunca. La incoherencia temática es la señal más barata de detectar que existe.</li>
    <li><strong>Todas las páginas tienen la misma forma.</strong> Mismo número de apartados, mismo orden, misma extensión, mismas transiciones. Un molde repetido doscientas veces se ve desde satélite, lo llene quien lo llene.</li>
    <li><strong>Nadie verificó nada.</strong> Datos inventados, cifras sin fuente, herramientas que ya no existen, precios de hace dos años. Es lo que pasa cuando se publica sin que un humano compruebe: ese fallo concreto es tan predecible que merece su propia guía, <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>.</li>
    <li><strong>El contenido no contiene ninguna información nueva.</strong> Es una recombinación competente de los diez primeros resultados. Google lleva desde el <em>helpful content</em> midiendo exactamente eso.</li>
    <li><strong>Cero señales de quién está detrás.</strong> Sin autoría real, sin experiencia demostrable, sin nada que sostenga por qué ese sitio debería ser la respuesta.</li>
</ul>

<p>Ninguno de los cinco se arregla cambiando de herramienta ni «humanizando» el texto. Los cinco son problemas de proceso editorial, no de redacción.</p>

<h2 id="donde-si-sirve">Dónde la IA sí aporta en un flujo SEO</h2>

<p>La delegación sensata no es «escribe el artículo». Es todo lo que rodea al artículo, que además es donde se va la mayor parte de las horas.</p>

<figure>
<table>
    <thead>
        <tr><th>Tarea</th><th>¿Delegar?</th><th>Nota</th></tr>
    </thead>
    <tbody>
        <tr><td>Agrupar palabras clave por intención y tema</td><td>Sí, muy bien</td><td>Le das el volcado de la herramienta y te devuelve clústeres coherentes en minutos</td></tr>
        <tr><td>Detectar huecos de cobertura en tu web</td><td>Sí</td><td>Con el listado de URLs y títulos delante, encuentra lo que falta mejor que una hoja de cálculo</td></tr>
        <tr><td>Volúmenes de búsqueda y dificultad</td><td>Nunca</td><td>Se los inventa con total naturalidad. Salen de herramientas con datos reales</td></tr>
        <tr><td>Esqueleto y brief del artículo</td><td>Sí, con revisión</td><td>Tiende al orden previsible: reordena tú según lo que quieras defender</td></tr>
        <tr><td>Primer borrador</td><td>Con cuidado</td><td>Útil como material en bruto; peligroso como entregable</td></tr>
        <tr><td>Título, meta descripción y variantes</td><td>Sí</td><td>Diez opciones en treinta segundos, eliges tú</td></tr>
        <tr><td>Datos estructurados JSON-LD</td><td>Sí</td><td>Ahorra mucho tiempo y valídalo siempre con la herramienta oficial</td></tr>
        <tr><td>Enlazado interno</td><td>Sí</td><td>Con el mapa de contenidos delante propone enlaces que un humano no ve</td></tr>
        <tr><td>Traducción y adaptación a otros mercados</td><td>Sí, con revisor nativo</td><td>La calidad base es alta; los matices comerciales no</td></tr>
        <tr><td>La tesis del artículo</td><td>No</td><td>Si lo que dices lo puede decir cualquiera, no hay razón para posicionarte a ti</td></tr>
    </tbody>
</table>
</figure>

<p>Fíjate en el reparto: la IA se lleva lo mecánico y lo combinatorio, que es la mitad del calendario editorial. Lo que no se delega es la parte que justifica que la página exista.</p>

<h2 id="valor-original">Qué cuenta como valor original</h2>

<p>«Aporta valor» es el consejo más repetido y más inútil del sector porque nadie lo aterriza. En la práctica, solo hay cuatro fuentes de valor que un modelo no puede fabricar, y basta con una:</p>

<ol>
    <li><strong>Datos propios.</strong> Lo que mides tú y no está publicado: precios reales de tu mercado, resultados de tus clientes, una encuesta a cien personas, los tiempos de un proceso que ejecutas. Es la fuente más fuerte y la menos usada porque da trabajo.</li>
    <li><strong>Experiencia de primera mano.</strong> Haberlo hecho. Qué salió mal, qué se rompe a los tres meses, qué no cuenta la documentación. Es la primera «E» de E-E-A-T y es literalmente lo único que un modelo no tiene.</li>
    <li><strong>Criterio.</strong> Mojarse. «Esto no compensa por debajo de X», «esta herramienta sobra si ya tienes aquella». Un modelo por defecto no recomienda: enumera opciones equilibradas, que es la forma más elegante de no decir nada.</li>
    <li><strong>Formato que ahorra trabajo.</strong> La tabla comparativa que no existía, la calculadora, la plantilla descargable, el checklist. Convertir información dispersa en algo utilizable es valor aunque los datos sean públicos.</li>
</ol>

<p>Una página con al menos una de las cuatro aguanta las actualizaciones. Una página sin ninguna está compitiendo por ser la versión número once de lo mismo, y ahí el sitio con más autoridad gana siempre.</p>

<h2 id="flujo">Un flujo de siete pasos que aguanta actualizaciones</h2>

<ol>
    <li><strong>Elige el hueco, no la palabra clave.</strong> Antes de nada: ¿qué puedo decir yo aquí que no esté ya en los resultados? Si no hay respuesta, ese artículo no se escribe. Este filtro solo ya elimina la mitad de los calendarios editoriales y mejora el otro medio.</li>
    <li><strong>Investiga con fuentes y guárdalas.</strong> Con búsqueda activada y anotando de dónde sale cada dato. El método, en <a href="/guias/investigar-con-ia-deep-research">investigar con IA y verificar fuentes</a>.</li>
    <li><strong>Aporta tu material.</strong> Tus datos, tu experiencia, tu postura, en notas sueltas. Diez minutos de dictado bastan y es el paso que separa esta guía de las demás.</li>
    <li><strong>Estructura con la IA y reordena tú.</strong> El esqueleto que propone es correcto y previsible; muévelo para que lo importante vaya primero.</li>
    <li><strong>Redacta con tus notas dentro del prompt.</strong> No «escribe sobre X», sino «escribe esto con estos datos, esta postura y estos ejemplos». El salto de calidad está ahí y se explica en <a href="/guias/como-escribir-prompts-efectivos">cómo escribir prompts efectivos</a>.</li>
    <li><strong>Edita con tijeras.</strong> Fuera las frases que valdrían para cualquier tema, las conclusiones que repiten la introducción y los adjetivos que no aportan. Como referencia de qué patrones delatan un texto sin editar, <a href="/guias/se-nota-si-un-texto-lo-escribe-una-ia">qué miden los detectores en realidad</a>.</li>
    <li><strong>Verifica cada dato antes de publicar.</strong> Toda cifra, fecha, precio y nombre propio. Un dato falso no solo es un problema de posicionamiento.</li>
</ol>

<p>Este flujo no es más rápido que generar y publicar. Es más rápido que generar, publicar, desaparecer en una actualización y tener que rehacer el sitio entero.</p>

<h2 id="geo">El otro tablero: buscadores que responden sin enlazar</h2>

<p>Optimizar solo para los diez enlaces azules es planificar para un tablero que se está encogiendo. Una parte creciente de las consultas se resuelve dentro de la respuesta —en las vistas generales con IA de Google, en ChatGPT, en Perplexity— sin que nadie haga clic.</p>

<p>Lo interesante es que <strong>lo que funciona ahí refuerza lo anterior en lugar de contradecirlo</strong>: respuestas directas en el primer párrafo, datos concretos y citables, estructura clara con encabezados que son preguntas reales, y fuentes identificables. Un sistema generativo cita lo que puede resumir sin equivocarse, y eso premia exactamente el contenido específico y verificable que también aguanta en la búsqueda clásica. La táctica concreta está en <a href="/guias/aparecer-en-chatgpt-y-perplexity-geo">cómo aparecer en ChatGPT y Perplexity</a>.</p>

<p>Lo que sí contradice al tablero anterior es la aritmética: para una parte de las consultas informativas, el clic ya no llega aunque sigas el primero. Cuánto se pierde exactamente, en qué tipo de consulta y qué hacer con las páginas afectadas está en <a href="/guias/ai-overviews-caida-de-clics">AI Overviews y la caída de clics</a>. Y el trabajo previo —decidir qué temas merecen una página y cuáles no— se ha vuelto más selectivo por el mismo motivo: el método está en <a href="/guias/keyword-research-con-ia">keyword research con IA</a>.</p>

<h2 id="checklist">Checklist antes de darle a publicar</h2>

<ul>
    <li>¿Contiene al menos un dato, ejemplo o criterio que no esté en los diez primeros resultados?</li>
    <li>¿He verificado todas las cifras, fechas y nombres propios contra la fuente?</li>
    <li>¿Se entiende quién responde por esto y por qué sabe del tema?</li>
    <li>¿La primera respuesta útil está en los dos primeros párrafos, antes de cualquier rodeo?</li>
    <li>¿Se parece esta página a las otras veinte que he publicado este mes, en estructura y extensión?</li>
    <li>¿Enlaza a lo demás que tengo sobre el tema, y lo demás enlaza aquí?</li>
    <li>Si mañana Google dejara de existir, ¿esta página seguiría sirviéndole a alguien?</li>
</ul>

<p>La última es la que resume todas. La política de Google, traducida, dice justo eso: el contenido que solo existe porque existe un buscador es el que está en riesgo, y ese riesgo no cambia según quién teclee las palabras.</p>
HTML,
];
