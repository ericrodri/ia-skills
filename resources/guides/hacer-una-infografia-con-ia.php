<?php

return [
    'title' => 'Cómo hacer una infografía con IA: del dato al diseño sin errores',
    'navTitle' => 'Hacer una infografía con IA',
    'seoTitle' => 'Cómo hacer una infografía con IA: pasos y prompts',
    'description' => 'Cómo hacer una infografía con ChatGPT, Gemini, Claude o Canva: guion, datos, diseño y revisión, con prompts y los errores que más se repiten.',
    'excerpt' => 'La IA dibuja infografías vistosas en segundos, pero casi todas fallan en lo mismo: cifras inventadas y textos con faltas dentro de la imagen. El truco es separar el contenido del diseño y que la IA haga cada parte por su lado.',
    'category' => 'Práctica',
    'published' => '2026-10-29',
    'updated' => '2026-10-29',
    'readingMinutes' => 7,
    'words' => 1191,
    'about' => 'Uso de asistentes y generadores de inteligencia artificial para preparar el contenido y el diseño de una infografía para clase, trabajo o redes sociales',
    'related' => ['hacer-un-cartel-con-ia', 'presentaciones-con-ia', 'mapas-mentales-y-esquemas-con-ia', 'crear-imagenes-con-ia', 'ia-para-redes-sociales', 'alucinaciones-de-la-ia'],
    'toc' => [
        'que-falla' => 'Lo que suele fallar',
        'guion' => 'Primero el guion, después el diseño',
        'datos' => 'Los datos: de dónde salen',
        'diseno' => 'Diseñarla: tres caminos',
        'revisar' => 'Revisar antes de publicar',
        'usos' => 'Ideas según el uso',
    ],
    'faq' => [
        '¿Qué IA hace infografías gratis?' => 'Canva, Piktochart, Fotor o el editor de imágenes de CapCut tienen generadores con plan gratuito, normalmente con límites de descargas o plantillas. ChatGPT, Gemini y Claude sirven gratis para preparar el texto y la estructura, que es la mitad del trabajo.',
        '¿Puede ChatGPT hacer una infografía completa?' => 'Puede generar una imagen con aspecto de infografía, pero el texto dentro de la imagen suele salir con errores y las cifras no siempre coinciden con las que le diste. Para algo que vayas a entregar o publicar, usa la imagen como boceto y monta la versión final en un editor.',
        '¿Cómo evito que la IA invente datos en la infografía?' => 'Dale tú los datos con su fuente y pídele que no añada ninguno más. Después compara cifra por cifra la infografía con la tabla original. Si le pides que busque los datos, exige el enlace de cada uno y ábrelo.',
        '¿Qué tamaño debe tener una infografía?' => 'Depende de dónde se vea: vertical de 1080 × 1350 píxeles para Instagram, 1080 × 1920 para historias, A4 o A3 si se va a imprimir y horizontal si va dentro de una presentación. Decídelo antes de diseñar, porque cambia cuánto texto cabe.',
        '¿Puedo usar en el trabajo una infografía hecha con IA?' => 'En general sí, si los datos son correctos y no copias marcas ni ilustraciones protegidas. Revisa las condiciones de la herramienta y, si la infografía es para un cliente, cuéntale cómo se ha hecho.',
    ],
    'ctaTitle' => 'Skills para diseñar y explicar datos',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay instrucciones para resumir datos, redactar textos breves y preparar piezas visuales, pensadas para <a href="/profesiones/diseno">diseño</a> y <a href="/profesiones/marketing">marketing</a>.',
    'body' => <<<'HTML'
<p>Una infografía cuenta una idea con pocos datos y mucho orden visual. Se usan en clase, en informes de empresa, en redes sociales y en carteles informativos, y desde que existen los generadores de imágenes hay quien espera que la IA la haga entera con una sola frase. A veces sale algo bonito, pero rara vez sale algo correcto. Esta guía explica cómo repartir el trabajo para que la IA te ahorre horas sin colarte errores.</p>

<h2 id="que-falla">Lo que suele fallar</h2>

<p>Si pides «hazme una infografía sobre el reciclaje en España» a un generador de imágenes, verás tres problemas casi siempre:</p>

<ul>
    <li><strong>Cifras inventadas</strong>: porcentajes redondos y verosímiles que no salen de ninguna fuente. Es el fallo que explicamos en <a href="/guias/alucinaciones-de-la-ia">las alucinaciones de la IA</a>, y en una infografía es peor porque el dato es el protagonista.</li>
    <li><strong>Texto roto</strong>: palabras con letras cambiadas, tildes que faltan o frases cortadas. Los modelos de imagen han mejorado mucho escribiendo, pero en textos largos siguen fallando.</li>
    <li><strong>Demasiado contenido</strong>: diez bloques, cinco iconos por bloque y nada que destaque. Una buena infografía tiene un mensaje principal y entre tres y seis apoyos.</li>
</ul>

<p>La solución es la misma que en un <a href="/guias/hacer-un-cartel-con-ia">cartel hecho con IA</a>: separar el contenido del diseño y comprobar cada parte.</p>

<h2 id="guion">Primero el guion, después el diseño</h2>

<p>Antes de abrir ninguna herramienta de diseño, pide a ChatGPT, Gemini o Claude un guion en texto. Este prompt funciona bien:</p>

<blockquote>«Quiero hacer una infografía vertical para [PÚBLICO] sobre [TEMA]. Te paso los datos que tengo con su fuente. Propón: un titular de menos de ocho palabras, el mensaje principal en una frase, entre tres y cinco bloques con un dato y una explicación de menos de quince palabras cada uno, y la fuente al pie. Usa solo mis datos; si falta alguno, dime cuál en lugar de inventarlo. Sugiere también qué tipo de gráfico o icono iría en cada bloque.»</blockquote>

<p>Revisa el guion con calma. Es el momento barato para cambiar el orden, quitar un bloque o reescribir un titular. Si el tema es complejo y no sabes qué bloques poner, empieza por un esquema: en <a href="/guias/mapas-mentales-y-esquemas-con-ia">mapas mentales y esquemas con IA</a> explicamos cómo ordenar un tema antes de convertirlo en algo visual.</p>

<h2 id="datos">Los datos: de dónde salen</h2>

<p>Una infografía sin fuente no vale para un trabajo de clase ni para la web de una empresa. Tienes dos opciones:</p>

<ol>
    <li><strong>Traer tú los datos</strong> de una fuente fiable (el INE, Eurostat, un informe oficial o tus propias ventas) y pegarlos en la conversación. Es lo más seguro.</li>
    <li><strong>Pedir a la IA que los busque</strong> con un modo de búsqueda o de investigación, exigiendo el enlace de cada cifra. Abre los enlaces: a veces el dato existe, pero es de otro año o de otro país. La guía de <a href="/guias/investigar-con-ia-deep-research">investigar con IA</a> explica cómo hacerlo con método.</li>
</ol>

<p>Si tus datos están en una hoja de cálculo, pídele que te diga qué tres cifras cuentan mejor la historia y qué gráfico usar para cada una: barras para comparar, línea para la evolución en el tiempo, un número grande para un dato que impresiona por sí solo. Evita los gráficos de tarta con más de cuatro porciones.</p>

<h2 id="diseno">Diseñarla: tres caminos</h2>

<p><strong>1. Editor con IA (lo más práctico).</strong> Canva, Piktochart o Fotor tienen generadores de infografías: pegas el guion, eliges un estilo y te proponen un diseño editable. La ventaja es que el texto es texto de verdad, así que puedes corregirlo y cambiar cifras sin rehacer nada.</p>

<p><strong>2. Imagen generada como boceto.</strong> Si quieres algo más original, genera la composición con un modelo de imagen y monta encima el texto en el editor. Un prompt útil:</p>

<blockquote>«Ilustración vertical para una infografía sobre [TEMA], estilo plano y limpio, paleta de [COLORES], con cuatro zonas vacías en columna para colocar texto después y un icono sencillo en cada zona. Sin texto ni letras en la imagen.»</blockquote>

<p>Pedir «sin texto» evita las faltas dentro de la imagen. En <a href="/guias/crear-imagenes-con-ia">crear imágenes con IA</a> tienes más ideas para describir estilos y colores.</p>

<p><strong>3. Código o diagrama.</strong> Para infografías con muchos datos, Claude o ChatGPT pueden generar la infografía como una página HTML o un gráfico que luego exportas a imagen. Es la opción más precisa con los números, porque los dibuja a partir de los datos y no los imagina.</p>

<h2 id="revisar">Revisar antes de publicar</h2>

<p>Dedica cinco minutos a esta lista antes de entregarla o publicarla:</p>

<ul>
    <li>Cada cifra coincide con la fuente, incluidos año y unidad.</li>
    <li>Las barras y porcentajes son proporcionales: una barra del 40 % no puede ser el doble de larga que una del 30 %.</li>
    <li>No hay faltas: pásale el texto final a la IA para <a href="/guias/corregir-ortografia-con-ia">corregir la ortografía</a>.</li>
    <li>Se lee desde el móvil sin hacer zoom.</li>
    <li>La fuente aparece al pie y, si la IA ha generado imágenes, no imitan logos ni personajes con derechos; en <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">derechos de las imágenes con IA</a> explicamos qué puedes usar.</li>
</ul>

<h2 id="usos">Ideas según el uso</h2>

<p><strong>Para clase</strong>: una infografía resume muy bien un tema para estudiar o exponer. Hazla tú a partir de tus apuntes y usa la IA para ordenar y corregir; si es un trabajo evaluado, pregunta al profesor qué uso de IA acepta.</p>

<p><strong>Para el trabajo</strong>: resultados del trimestre, el proceso de alta de un cliente o las novedades de un producto. Si va dentro de un documento más largo, mira cómo hacer <a href="/guias/presentaciones-con-ia">presentaciones con IA</a> o <a href="/guias/hacer-un-informe-con-ia">un informe con IA</a> y reutiliza el mismo guion.</p>

<p><strong>Para redes sociales</strong>: las infografías en carrusel funcionan bien en Instagram y LinkedIn. Divide el guion en una diapositiva por bloque y termina con una que invite a guardar o compartir. La guía de <a href="/guias/ia-para-redes-sociales">IA para redes sociales</a> tiene más formatos que se comparten.</p>
HTML,
];
