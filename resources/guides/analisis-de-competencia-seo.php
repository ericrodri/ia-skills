<?php

return [
    'title' => 'Análisis de la competencia SEO: cómo hacerlo paso a paso',
    'navTitle' => 'Análisis de competencia SEO',
    'seoTitle' => 'Análisis de la competencia SEO paso a paso',
    'description' => 'Cómo analizar a tu competencia en Google: quiénes compiten de verdad por tus búsquedas, qué temas cubren y tú no, por qué ganan y qué copiar.',
    'excerpt' => 'Tu competencia en Google no es la misma que en el mercado. Es quien aparece por las búsquedas que te interesan, y a menudo es un blog, un foro o un medio que no vende nada. Analizarla bien consiste en encontrar qué cubren ellos que tú no y por qué Google les prefiere.',
    'category' => 'Método',
    'published' => '2026-09-26',
    'updated' => '2026-09-26',
    'readingMinutes' => 7,
    'words' => 1141,
    'about' => 'Análisis de la competencia en buscadores',
    'related' => ['keyword-research-con-ia', 'intencion-de-busqueda-en-seo', 'autoridad-tematica-y-clusters-de-contenido', 'herramientas-seo-gratis', 'posicionar-una-web-nueva-en-google', 'menciones-de-marca-y-enlaces'],
    'toc' => [
        'quien' => 'Paso 1: quién compite de verdad',
        'serp' => 'Paso 2: leer los resultados',
        'huecos' => 'Paso 3: los temas que te faltan',
        'por-que' => 'Paso 4: por qué ganan',
        'enlaces' => 'Paso 5: enlaces y menciones',
        'ia' => 'Cómo usar la IA en el análisis',
        'plan' => 'Convertirlo en un plan',
    ],
    'faq' => [
        '¿Cuántos competidores hay que analizar?' => 'Entre tres y cinco por tema. Más que eso produce tablas enormes que nadie lee. Elige los que aparecen con más frecuencia en los primeros resultados de tus búsquedas principales, aunque no sean tus competidores comerciales.',
        '¿Se puede analizar la competencia sin herramientas de pago?' => 'En buena parte, sí. Los resultados de Google, un rastreo con la versión gratuita de Screaming Frog y unas pocas consultas en las cuentas gratuitas de Semrush o Ahrefs dan para un análisis sólido. Lo que cuesta más sin pagar es ver con detalle los enlaces de otras webs y las búsquedas por las que aparecen.',
        '¿Copiar lo que hace la competencia funciona?' => 'Copiar la estructura de temas y el formato que Google premia, sí. Copiar el contenido, no: una página que dice lo mismo que las diez que ya existen no tiene motivo para ganarles. El análisis sirve para saber qué base mínima hay que cubrir y dónde aportar algo que ellos no tienen.',
        '¿Cada cuánto conviene repetir el análisis?' => 'Una revisión completa una o dos veces al año, y una mirada rápida después de cada core update de Google o cuando notes que un competidor nuevo empieza a aparecer por tus búsquedas. Los resultados cambian más de lo que parece.',
        '¿Qué hago si me gana una web enorme como Wikipedia o Amazon?' => 'No intentes ganarle en su terreno. Busca las búsquedas más concretas del mismo tema, donde esas webs no tienen una página específica y aparecen solo por autoridad. Ahí una página que responde exactamente a la pregunta tiene opciones reales.',
    ],
    'ctaTitle' => 'Prompts para analizar a tu competencia',
    'ctaBody' => 'Comparar la cobertura de temas, resumir por qué gana una página o preparar un informe para un cliente: en <a href="/profesiones/marketing">Marketing</a> están los prompts de SEO que mejor funcionan.',
    'body' => <<<'HTML'
<p>La mayoría de análisis de competencia se quedan en una tabla con el número de enlaces y el tráfico estimado de tres webs. Eso dice quién es más grande, pero no qué hacer. Un análisis útil responde tres preguntas: quién aparece por las búsquedas que me interesan, qué temas cubren que yo no, y por qué Google les prefiere cuando cubrimos lo mismo.</p>

<h2 id="quien">Paso 1: quién compite de verdad</h2>

<p>Tu competencia en Google no es tu competencia comercial. Es quien aparece por tus búsquedas. Para una clínica dental pueden ser otras clínicas, pero también un portal de salud, un comparador de precios y un foro.</p>

<ol>
    <li>Elige de diez a veinte búsquedas importantes para tu negocio, de las que salen de tu <a href="/guias/keyword-research-con-ia">keyword research</a>.</li>
    <li>Busca cada una en una ventana privada y apunta los diez primeros resultados.</li>
    <li>Cuenta cuántas veces aparece cada dominio. Los tres a cinco que más se repiten son tu competencia real.</li>
</ol>

<p>Si usas una herramienta de pago, este paso lo hace sola con el informe de «competidores orgánicos». Pero hacerlo a mano una vez obliga a mirar los resultados, y eso es la mitad del análisis.</p>

<h2 id="serp">Paso 2: leer los resultados</h2>

<p>Antes de mirar webs, mira la página de resultados. Te dice qué tipo de respuesta quiere Google para cada búsqueda:</p>

<ul>
    <li><strong>El tipo de página que gana.</strong> ¿Guías largas, fichas de producto, listados, vídeos? Si los diez resultados son comparativas, un artículo de opinión no va a entrar. Es la <a href="/guias/intencion-de-busqueda-en-seo">intención de búsqueda</a>.</li>
    <li><strong>Los elementos que hay.</strong> AI Overviews, mapa local, «Otras preguntas de los usuarios», vídeos. Cada uno es una forma distinta de aparecer y quita espacio a los resultados normales.</li>
    <li><strong>Las debilidades.</strong> Resultados de hace años, foros sin respuesta clara, páginas que no responden a lo que se busca. Ahí es donde se entra.</li>
</ul>

<h2 id="huecos">Paso 3: los temas que te faltan</h2>

<p>Este es el paso con más valor. Se trata de encontrar los temas que tu competencia cubre y tú no:</p>

<ol>
    <li><strong>Saca la lista de páginas de cada competidor.</strong> Su sitemap (normalmente en <code>/sitemap.xml</code>) o un rastreo con Screaming Frog te da todas sus URL y títulos.</li>
    <li><strong>Agrúpalas por tema.</strong> Con una IA es cuestión de minutos: pega los títulos y pide que los agrupe.</li>
    <li><strong>Compara con tu web.</strong> Los temas que aparecen en dos o tres competidores y no en tu web son los huecos que Google probablemente espera que cubras.</li>
</ol>

<p>Las herramientas de pago tienen un informe de «brecha de palabras clave» que hace lo mismo con datos de posiciones. El resultado es parecido: una lista de temas para completar tu <a href="/guias/autoridad-tematica-y-clusters-de-contenido">cluster de contenido</a>.</p>

<h2 id="por-que">Paso 4: por qué ganan</h2>

<p>Para las búsquedas en las que un competidor te supera con una página sobre el mismo tema, compara las dos páginas con esta lista:</p>

<figure>
<table>
    <thead>
        <tr><th>Qué mirar</th><th>La pregunta</th></tr>
    </thead>
    <tbody>
        <tr><td>Respuesta</td><td>¿Responde antes y más claro a lo que se busca?</td></tr>
        <tr><td>Cobertura</td><td>¿Trata subtemas o preguntas que tú no?</td></tr>
        <tr><td>Experiencia</td><td>¿Tiene datos propios, ejemplos reales, fotos, un autor que sabe del tema?</td></tr>
        <tr><td>Formato</td><td>¿Usa tablas, pasos o vídeo donde tú tienes solo texto?</td></tr>
        <tr><td>Actualidad</td><td>¿Está más al día?</td></tr>
        <tr><td>Enlazado interno</td><td>¿Le llegan más enlaces desde su propia web?</td></tr>
        <tr><td>Técnico</td><td>¿Carga más rápido, tiene datos estructurados?</td></tr>
    </tbody>
</table>
</figure>

<p>Casi siempre la diferencia está en las tres primeras filas, no en las últimas. Lo que Google llama <a href="/guias/eeat-experiencia-contenido-con-ia">E-E-A-T</a> pesa más que la velocidad de carga.</p>

<h2 id="enlaces">Paso 5: enlaces y menciones</h2>

<p>Si tu contenido es igual o mejor y aun así pierdes, la diferencia suele estar fuera de la página: el competidor tiene más enlaces y menciones de otras webs. Para verlo:</p>

<ul>
    <li>Consulta sus dominios de referencia en una cuenta gratuita de Semrush o Ahrefs.</li>
    <li>Fíjate en el tipo, no solo en el número: asociaciones, medios del sector, directorios, colaboraciones.</li>
    <li>Busca los que puedes conseguir tú también. Si todos tus competidores están en el mismo directorio profesional, probablemente tú también deberías.</li>
</ul>

<p>Cómo conseguir esas menciones sin comprar enlaces está en la guía de <a href="/guias/menciones-de-marca-y-enlaces">menciones de marca y enlaces</a>.</p>

<h2 id="ia">Cómo usar la IA en el análisis</h2>

<p>La IA ahorra la parte más pesada: ordenar listas largas y comparar textos. Tres usos que funcionan bien:</p>

<ul>
    <li><strong>Agrupar URL y títulos</strong> de los competidores por tema y señalar cuáles no tienes.</li>
    <li><strong>Comparar dos páginas</strong>: pega la tuya y la del competidor y pide qué preguntas responde la suya que la tuya no.</li>
    <li><strong>Resumir el patrón</strong> de los diez primeros resultados de una búsqueda: tipo de página, longitud, formato, subtemas comunes.</li>
</ul>

<p>Lo que no debe hacer es darte datos de tráfico o enlaces de otras webs sin que tú se los pases: no los tiene y los inventará. Qué herramientas te dan esos datos gratis está en la guía de <a href="/guias/herramientas-seo-gratis">herramientas SEO gratis</a>.</p>

<h2 id="plan">Convertirlo en un plan</h2>

<p>Un análisis que acaba en un documento que nadie vuelve a abrir no sirve de nada. Termina con tres listas cortas:</p>

<ol>
    <li><strong>Páginas nuevas:</strong> los temas del paso 3, ordenados por interés para tu negocio.</li>
    <li><strong>Páginas que mejorar:</strong> las del paso 4, con lo que les falta.</li>
    <li><strong>Enlaces que buscar:</strong> los sitios del paso 5 donde tiene sentido estar.</li>
</ol>

<p>Resumido: identifica quién aparece de verdad por tus búsquedas, lee qué tipo de respuesta premia Google, encuentra los temas que te faltan y averigua por qué ganan donde ya compites. Copia la cobertura y el formato; nunca el contenido.</p>
HTML,
];
