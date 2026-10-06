<?php

return [
    'title' => 'Editar fotos con IA: quitar fondos, objetos y retocar sin saber Photoshop',
    'navTitle' => 'Editar fotos con IA',
    'seoTitle' => 'Editar fotos con IA: herramientas y trucos',
    'description' => 'Cómo editar fotos con IA: quitar el fondo o un objeto, mejorar la luz y cambiar detalles con Gemini, Google Fotos o Photoshop, y cuándo hay que etiquetarlo.',
    'excerpt' => 'Quitar a un desconocido de una foto o cambiar el fondo de un producto ya no exige saber Photoshop: basta con pedirlo por escrito. Esto es lo que funciona, con qué herramienta y dónde están los límites.',
    'category' => 'Práctica',
    'published' => '2026-10-03',
    'updated' => '2026-10-03',
    'readingMinutes' => 7,
    'words' => 1101,
    'about' => 'Edición y retoque de fotografías con herramientas de inteligencia artificial',
    'related' => ['foto-de-perfil-profesional-con-ia', 'crear-imagenes-con-ia', 'imagenes-con-ia-derechos-y-uso-comercial', 'prompts-para-diseno-grafico', 'seo-para-tiendas-online', 'ia-para-redes-sociales', 'herramientas-de-ia-gratis'],
    'toc' => [
        'que-cambia' => 'Qué ha cambiado: editar hablando',
        'herramientas' => 'Qué herramienta usar para cada cosa',
        'tareas' => 'Las cinco ediciones más útiles',
        'instrucciones' => 'Cómo pedirlo para que salga bien',
        'productos' => 'Fotos de producto para tu tienda',
        'limites' => 'Límites: lo que no deberías editar',
    ],
    'faq' => [
        '¿Cuál es la mejor IA gratis para editar fotos?' => 'Para ediciones por instrucciones de texto, Gemini (con su modelo de imagen conocido como Nano Banana) ofrece uso gratuito con límites. Google Fotos y la galería de muchos móviles incluyen borrador mágico y mejoras automáticas sin coste. Para quitar fondos hay herramientas web gratuitas como remove.bg o el propio Canva.',
        '¿Cómo quito el fondo de una foto con IA?' => 'Sube la foto a Gemini, ChatGPT, Canva o una herramienta específica y pide «quita el fondo y déjalo transparente» o «pon el producto sobre fondo blanco liso». Descarga el resultado en PNG si necesitas transparencia y revisa los bordes del pelo o de objetos finos, que son los que más fallan.',
        '¿Se puede quitar a una persona de una foto con IA?' => 'Sí. El borrador mágico de Google Fotos, la limpieza de la galería de Samsung o iPhone y el relleno generativo de Photoshop eliminan personas u objetos y reconstruyen el fondo. Funciona mejor con fondos sencillos; con fondos complejos puede dejar texturas raras que conviene revisar con zoom.',
        '¿La IA cambia la cara de las personas al editar?' => 'Los modelos recientes mantienen mejor el parecido, pero tras varias ediciones seguidas pueden alterar rasgos sutilmente. Si la foto es de una persona real y se va a publicar, compárala con la original antes y evita retoques que cambien su aspecto sin su permiso.',
        '¿Hay que avisar de que una foto está editada con IA?' => 'Un retoque de luz o la eliminación de un objeto no suele requerir aviso. Si la edición crea una escena que no ocurrió o muestra a una persona real haciendo algo que no hizo, el Reglamento europeo de IA obliga a etiquetarla como contenido manipulado. Muchas herramientas añaden además una marca de agua invisible.',
    ],
    'ctaTitle' => 'Instrucciones para diseño e imagen',
    'ctaBody' => 'En el <a href="/skills">catálogo de skills</a> hay prompts para retoque, fotos de producto y redes sociales. Mira los de <a href="/profesiones/diseno">diseño</a> y <a href="/profesiones/marketing">marketing</a>.',
    'body' => <<<'HTML'
<p>Durante años, quitar a un turista del fondo de una foto o poner un producto sobre fondo blanco exigía saber usar Photoshop o pagar a alguien que supiera. Hoy basta con subir la imagen y escribir lo que quieres. El resultado no siempre es perfecto, pero para la mayoría de usos cotidianos y de pequeño negocio es más que suficiente. Esta guía explica qué herramienta conviene para cada tarea, cómo pedirlo para que salga bien y qué ediciones conviene evitar.</p>

<h2 id="que-cambia">Qué ha cambiado: editar hablando</h2>

<p>Las herramientas clásicas te obligaban a seleccionar, enmascarar y retocar a mano. Las nuevas entienden instrucciones en lenguaje natural: «quita el cable de la esquina», «haz que parezca que está atardeciendo», «cambia la camiseta a azul marino». El modelo modifica solo esa parte y conserva el resto, incluida la luz y la cara de las personas, algo que hasta hace poco fallaba mucho.</p>

<p>Editar una foto existente y crear una imagen desde cero son tareas distintas, aunque las hagan las mismas herramientas. Si lo que quieres es generar una imagen nueva, tienes la guía de <a href="/guias/crear-imagenes-con-ia">crear imágenes con IA</a>. Y si lo que buscas es un retrato para LinkedIn o el currículum, está en <a href="/guias/foto-de-perfil-profesional-con-ia">foto de perfil profesional con IA</a>.</p>

<h2 id="herramientas">Qué herramienta usar para cada cosa</h2>

<ul>
    <li><strong>Gemini (Nano Banana):</strong> la opción más cómoda para editar por instrucciones de texto. Tiene uso gratuito con límites y mantiene bien el parecido de las personas entre ediciones.</li>
    <li><strong>ChatGPT:</strong> también edita imágenes que le subes, con buenos resultados en cambios de estilo y composición.</li>
    <li><strong>Google Fotos y la galería del móvil:</strong> borrador mágico, mejora de luz y desenfoque de fondo en dos toques. Ideal para fotos personales.</li>
    <li><strong>Photoshop con relleno generativo:</strong> para trabajos profesionales donde necesitas control fino por capas. Puede usar modelos propios de Adobe o de terceros.</li>
    <li><strong>Canva:</strong> quitar fondos y adaptar fotos a formatos de redes sin salir de la plantilla.</li>
</ul>

<p>Varias de estas opciones tienen planes gratuitos suficientes para empezar. Las repasamos en <a href="/guias/herramientas-de-ia-gratis">herramientas de IA gratis</a>.</p>

<h2 id="tareas">Las cinco ediciones más útiles</h2>

<ol>
    <li><strong>Quitar el fondo</strong> o sustituirlo por uno liso. Revisa siempre el pelo y los bordes finos.</li>
    <li><strong>Eliminar objetos o personas</strong>: papeleras, cables, gente que pasaba. Funciona mejor con fondos sencillos.</li>
    <li><strong>Arreglar la luz</strong>: fotos oscuras, contraluces, tonos amarillentos de interior.</li>
    <li><strong>Ampliar el encuadre</strong> para adaptar una foto vertical a formato horizontal, o al revés, sin recortar al protagonista.</li>
    <li><strong>Restaurar fotos antiguas</strong>: quitar arañazos, mejorar la nitidez o colorear. Ten en cuenta que la IA «inventa» detalles para rellenar; el resultado es una interpretación, no la foto original recuperada.</li>
</ol>

<h2 id="instrucciones">Cómo pedirlo para que salga bien</h2>

<p>Tres reglas que ahorran intentos:</p>

<ul>
    <li><strong>Di qué cambiar y qué conservar.</strong> «Quita a la persona de la izquierda. No toques la cara ni la ropa de la mujer del centro.»</li>
    <li><strong>Un cambio por instrucción.</strong> Si pides cinco cosas a la vez, alguna saldrá mal y no sabrás cuál corregir.</li>
    <li><strong>Describe el resultado, no la técnica.</strong> «Que parezca una foto hecha con luz natural de mañana» funciona mejor que «sube la exposición un 20 %».</li>
</ul>

<p>Si tras tres o cuatro ediciones la imagen empieza a degradarse o los rostros cambian, vuelve a la original y pide todo de nuevo en menos pasos. Hay más instrucciones de este tipo en <a href="/guias/prompts-para-diseno-grafico">prompts para diseño gráfico</a>.</p>

<h2 id="productos">Fotos de producto para tu tienda</h2>

<p>Para una tienda pequeña, la IA permite pasar de una foto hecha con el móvil a una imagen de catálogo decente:</p>

<blockquote>«Pon este producto sobre fondo blanco puro, con una sombra suave debajo. No cambies el color, la forma ni la etiqueta del producto.»</blockquote>

<p>La última frase es clave: la IA tiende a «embellecer», y un producto que en la foto parece distinto al que llega a casa genera devoluciones y reclamaciones. Para fotos de ambiente (el producto en una cocina, en una mesa de oficina), puedes generar el fondo, pero el producto debe seguir siendo el real. Cómo aprovechar después esas imágenes para posicionar está en <a href="/guias/seo-para-tiendas-online">SEO para tiendas online</a>, y para adaptarlas a cada red, en <a href="/guias/ia-para-redes-sociales">IA para redes sociales</a>.</p>

<h2 id="limites">Límites: lo que no deberías editar</h2>

<ul>
    <li><strong>Fotos de personas sin su permiso</strong>, sobre todo para cambiar su aspecto, su ropa o ponerlas en situaciones que no ocurrieron. Puede vulnerar su derecho a la propia imagen e incluso ser delito.</li>
    <li><strong>Documentos y pruebas</strong>: tickets, facturas, fotos de daños para un seguro. Manipularlos es fraude, lo haga una persona o una IA.</li>
    <li><strong>Imágenes con contenido manipulado que se publican como reales.</strong> Desde agosto de 2026, el Reglamento europeo de IA exige etiquetar los contenidos generados o manipulados que puedan pasar por auténticos.</li>
</ul>

<p>Las dudas sobre si puedes usar comercialmente una imagen editada o generada, y de quién es, están resueltas en <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">imágenes con IA: derechos y uso comercial</a>. Y si te encuentras con una foto tuya manipulada, la guía de <a href="/guias/estafas-con-ia-deepfakes-y-suplantacion">deepfakes y suplantación</a> explica cómo actuar.</p>
HTML,
];
