<?php

return [
    'title' => 'Traducir con IA: cómo pedirlo bien y cuándo no fiarse',
    'navTitle' => 'Traducir con IA',
    'seoTitle' => 'Traducir con IA: cómo hacerlo bien y cuándo no fiarse',
    'description' => 'Cómo traducir con IA textos de trabajo: qué herramienta usar, cómo pedirlo con contexto y glosario, cómo revisarlo y cuándo contratar a un profesional.',
    'excerpt' => 'Los asistentes de IA traducen mejor que los traductores automáticos de hace unos años, pero cometen errores más difíciles de ver: el texto suena perfecto y dice otra cosa. Esta guía explica cómo sacarles partido sin llevarte sorpresas.',
    'category' => 'Práctica',
    'published' => '2026-09-29',
    'updated' => '2026-09-29',
    'readingMinutes' => 7,
    'words' => 1140,
    'about' => 'Traducción de textos profesionales con inteligencia artificial',
    'related' => ['escribir-correos-con-ia', 'resumir-documentos-largos-con-ia', 'alucinaciones-de-la-ia', 'usar-ia-sin-filtrar-datos-de-clientes', 'como-escribir-prompts-efectivos', 'como-usar-chatgpt'],
    'toc' => [
        'herramienta' => 'Traductor automático o asistente de IA',
        'pedir' => 'Cómo pedir una buena traducción',
        'glosario' => 'Glosario y estilo para textos recurrentes',
        'revisar' => 'Cómo revisarla sin saber el idioma',
        'profesional' => 'Cuándo hace falta un traductor profesional',
        'usos' => 'Usos que ahorran más tiempo',
    ],
    'faq' => [
        '¿Cuál es la mejor IA para traducir?' => 'Para frases sueltas y documentos con formato, un traductor automático como DeepL o Google Traductor es rápido y conserva la maquetación. Para textos donde importan el tono, el público o la terminología, un asistente como ChatGPT, Claude o Gemini da mejores resultados porque puedes explicarle el contexto y pedirle cambios.',
        '¿Es fiable traducir con ChatGPT?' => 'Para entender un texto o preparar un borrador, sí. El riesgo es que la traducción suene natural y cambie el sentido: omite una negación, suaviza una obligación o inventa una frase que no estaba. Todo lo que vaya a publicarse o tenga consecuencias debe revisarlo alguien que conozca el idioma.',
        '¿Puedo traducir un contrato con IA?' => 'Puedes usarla para entender de qué trata un contrato en otro idioma. Para firmarlo, presentarlo ante una administración o usarlo en un juicio necesitas una traducción revisada por un profesional y, a menudo, una traducción jurada.',
        '¿Cómo traduzco un documento entero con IA sin perder el formato?' => 'Los traductores automáticos permiten subir archivos de Word, PDF o PowerPoint y devuelven el documento traducido con el formato original. Los asistentes de IA traducen bien el texto, pero suelen perder la maquetación, así que conviene usarlos para el contenido y pegar el resultado en el documento.',
        '¿Es seguro subir documentos a un traductor con IA?' => 'Depende de la herramienta y del plan. Las versiones gratuitas pueden usar el texto para mejorar sus modelos. Antes de traducir documentos con datos personales o confidenciales, revisa las condiciones o usa la versión de empresa que haya contratado tu organización.',
    ],
    'ctaTitle' => 'Instrucciones de traducción y redacción por profesión',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay instrucciones probadas para traducir, adaptar y revisar textos de trabajo. Filtra por tu <a href="/profesiones">profesión</a>.',
    'body' => <<<'HTML'
<p>Traducir es una de las tareas en las que la IA más ha mejorado. Un asistente actual entiende el contexto, respeta el tono y adapta expresiones que los traductores automáticos de hace unos años convertían en disparates. Pero sus errores han cambiado de naturaleza: antes una mala traducción se notaba; ahora el texto suena perfecto y, de vez en cuando, dice otra cosa. Usarla bien consiste en aprovechar la velocidad y saber dónde mirar.</p>

<h2 id="herramienta">Traductor automático o asistente de IA</h2>

<p>Hay dos tipos de herramienta, y cada una sirve para algo distinto:</p>

<ul>
    <li><strong>Traductores automáticos</strong> (DeepL, Google Traductor y similares). Rápidos, traducen documentos enteros conservando el formato y son consistentes. Ideales para entender un texto o traducir documentación larga y poco delicada.</li>
    <li><strong>Asistentes de IA</strong> (ChatGPT, Claude, Gemini, Copilot). Más lentos con documentos largos y suelen perder la maquetación, pero puedes explicarles para quién es el texto, pedirles que adapten en vez de traducir palabra por palabra y corregirlos en la conversación.</li>
</ul>

<p>Una combinación que funciona bien: el traductor automático para el primer paso de un documento largo y el asistente para pulir las partes que importan, como el titular, la llamada a la acción o el párrafo con el precio.</p>

<h2 id="pedir">Cómo pedir una buena traducción</h2>

<p>«Traduce esto al inglés» da una traducción correcta y plana. Una buena petición dice <strong>para quién es, dónde se va a publicar y qué tono tiene</strong>:</p>
<pre><code>Traduce al inglés británico este correo para un distribuidor de
Manchester con el que llevamos dos años trabajando. Tono cordial
pero profesional. Mantén los importes en euros. Si alguna expresión
no tiene equivalente natural, adáptala y dime al final qué has
cambiado y por qué.

[texto]</code></pre>

<p>Tres instrucciones que mejoran casi cualquier traducción:</p>
<ol>
    <li><strong>La variante del idioma:</strong> español de España o de México, inglés británico o estadounidense, portugués de Portugal o de Brasil.</li>
    <li><strong>Qué no se traduce:</strong> nombres de productos, marcas, cargos, citas literales.</li>
    <li><strong>Que te avise de las dudas</strong> en vez de resolverlas en silencio.</li>
</ol>

<p>Si el texto es de marketing, pide una <strong>adaptación</strong> y no una traducción: un eslogan traducido palabra por palabra rara vez funciona en otro mercado.</p>

<h2 id="glosario">Glosario y estilo para textos recurrentes</h2>

<p>Si traduces a menudo el mismo tipo de texto (fichas de producto, informes, respuestas a clientes), prepara un glosario con los términos de tu sector y cómo quieres traducirlos, y guárdalo en un proyecto, un GPT o un Gem junto a estas instrucciones:</p>
<pre><code>Traduce siempre del español al francés siguiendo este glosario.
Si un término del glosario aparece, usa exactamente la traducción
indicada. Tratamos de «vous» a los clientes. No traduzcas los
nombres de producto. Al final, lista los términos técnicos que no
estaban en el glosario para que los revise.

Glosario:
presupuesto = devis
plazo de entrega = délai de livraison
...</code></pre>

<p>Así evitas que el mismo término salga traducido de tres maneras distintas en el mismo catálogo. Cómo organizar estas instrucciones reutilizables lo explica la guía de <a href="/guias/gpts-proyectos-y-skills">GPTs, proyectos y skills</a>.</p>

<h2 id="revisar">Cómo revisarla sin saber el idioma</h2>

<p>Si dominas el idioma, lee la traducción entera. Si no, hay trucos que detectan la mayoría de problemas:</p>
<ul>
    <li><strong>Retrotraducción.</strong> En una conversación nueva, pide que traduzcan el resultado de vuelta a tu idioma y compáralo con el original. Las diferencias de sentido saltan a la vista.</li>
    <li><strong>Busca lo que más se estropea:</strong> negaciones, cifras, fechas (el orden día/mes cambia entre países), unidades, obligaciones («debe» frente a «puede») y nombres propios.</li>
    <li><strong>Compara longitudes.</strong> Si un párrafo traducido es mucho más corto, puede que falte algo; los asistentes a veces resumen sin avisar.</li>
    <li><strong>Pide una segunda opinión.</strong> Pasa el original y la traducción a otro asistente y pregúntale qué partes no son fieles.</li>
</ul>

<p>Por qué la IA a veces añade u omite frases con total seguridad lo explicamos en <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>.</p>

<h2 id="profesional">Cuándo hace falta un traductor profesional</h2>

<p>La IA no sustituye a un profesional cuando un error tiene consecuencias:</p>
<ul>
    <li>Contratos, condiciones legales y documentos para administraciones o tribunales, que a menudo exigen <strong>traducción jurada</strong>.</li>
    <li>Prospectos, instrucciones de seguridad y textos médicos.</li>
    <li>La web principal y las campañas de una empresa que entra en un mercado nuevo.</li>
    <li>Textos literarios o con mucho juego de palabras.</li>
</ul>

<p>Incluso ahí la IA ahorra dinero: muchos profesionales trabajan hoy revisando una traducción previa, lo que suele ser más rápido que traducir desde cero. Pregúntale a tu traductor si trabaja así.</p>

<p>Y recuerda que pegar un documento en un traductor es enviarlo a un tercero. Si contiene datos personales o información confidencial, revisa antes las condiciones; la guía de <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar IA sin filtrar datos de clientes</a> explica qué mirar.</p>

<h2 id="usos">Usos que ahorran más tiempo</h2>

<ul>
    <li><strong>Leer correos y documentos</strong> en idiomas que no dominas, pidiendo además un resumen: «tradúcelo y dime qué me piden y para cuándo». Para textos largos, combínalo con lo que contamos en <a href="/guias/resumir-documentos-largos-con-ia">resumir documentos largos</a>.</li>
    <li><strong>Responder en otro idioma:</strong> escribe tu respuesta en español y pide la versión en el idioma del cliente con el tono adecuado. Hay más ideas en <a href="/guias/escribir-correos-con-ia">escribir correos con IA</a>.</li>
    <li><strong>Subtítulos y transcripciones</strong> de vídeos y reuniones internacionales.</li>
    <li><strong>Fichas de producto</strong> para vender en otros países, con glosario y revisión de una muestra.</li>
</ul>

<p>La idea de fondo es sencilla: la IA traduce rápido y bien casi siempre. Tu trabajo es saber cuándo ese «casi» importa y dedicarle la revisión que merece.</p>
HTML,
];
