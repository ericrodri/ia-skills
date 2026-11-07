<?php

return [
    'title' => 'Prompts para editar fotos con ChatGPT y Gemini: más de 40 listos para copiar',
    'navTitle' => 'Prompts para editar fotos',
    'seoTitle' => 'Prompts para editar fotos con ChatGPT y Gemini',
    'description' => 'Más de 40 prompts para editar fotos con ChatGPT y Gemini: mejorar la calidad, quitar personas, unir fotos o cambiar el fondo sin que cambie la cara.',
    'excerpt' => 'Pedirle a ChatGPT o a Gemini que edite una foto funciona sorprendentemente bien… hasta que te cambia la cara. La diferencia está en cómo se pide. Aquí tienes la regla que lo evita, una plantilla base y más de cuarenta prompts listos para copiar, ordenados por lo que quieres hacer.',
    'category' => 'Práctica',
    'published' => '2026-11-02',
    'updated' => '2026-11-02',
    'readingMinutes' => 7,
    'words' => 1145,
    'about' => 'Instrucciones (prompts) para editar fotografías con ChatGPT y Gemini',
    'related' => ['editar-fotos-con-ia', 'borrar-personas-de-una-foto-con-ia', 'mejorar-calidad-de-una-foto-con-ia', 'restaurar-fotos-antiguas-con-ia', 'crear-imagenes-con-ia', 'quitar-el-fondo-de-una-foto-con-ia', 'imagenes-con-ia-derechos-y-uso-comercial'],
    'toc' => [
        'regla' => 'La regla que evita que te cambie la cara',
        'plantilla' => 'La plantilla base',
        'arreglar' => 'Arreglar y mejorar una foto',
        'escena' => 'Cambiar la escena',
        'personas' => 'Juntar personas en una foto',
        'probar' => 'Probar cambios en ti antes de hacerlos',
        'estilos' => 'Estilos, dibujos y creatividad',
        'negocio' => 'Para tu negocio',
        'limites' => 'Lo que no deberías hacer',
    ],
    'faq' => [
        '¿Qué IA es mejor para editar fotos, ChatGPT o Gemini?' => 'Las dos editan fotos a partir de instrucciones. Gemini suele respetar mejor la cara y los detalles de la foto original cuando el cambio es pequeño, y ChatGPT es muy bueno en cambios de estilo y en imágenes con texto. Si una no te convence con una foto concreta, prueba la misma instrucción en la otra.',
        '¿Cómo hago para que la IA no me cambie la cara?' => 'Di primero lo que debe quedar igual y después el único cambio que quieres: «Mantén exactamente la cara, la expresión y el tono de piel; cambia solo el fondo». Pide los cambios de uno en uno y, si la cara empieza a cambiar tras varias ediciones, vuelve a empezar con la foto original en un chat nuevo.',
        '¿Se pueden editar fotos con IA gratis?' => 'Sí. ChatGPT y Gemini permiten editar fotos en su plan gratuito, con un número limitado de imágenes al día. Para un uso ocasional es suficiente; si editas muchas fotos seguidas, notarás el límite.',
        '¿Puedo editar fotos de otras personas con IA?' => 'Solo con su permiso, y nunca para hacerles decir o hacer algo que no han hecho. Si una imagen editada de una persona real parece una foto auténtica y la vas a publicar, indica que está modificada con IA.',
        '¿Por qué la foto pierde calidad después de varias ediciones?' => 'Cada edición genera la imagen de nuevo y se acumulan pequeños cambios. Para varios cambios, pídelos todos de una vez en una instrucción clara o parte siempre de la foto original. Guarda la original aparte por si tienes que empezar de nuevo.',
    ],
    'ctaTitle' => 'Más prompts de imagen',
    'ctaBody' => 'Todas estas fichas y más están en <a href="/profesiones/diseno">Diseño</a>. Si lo que necesitas es crear imágenes desde cero, empieza por <a href="/guias/crear-imagenes-con-ia">crear imágenes con IA</a>.',
    'body' => <<<'HTML'
<p>ChatGPT y Gemini ya editan fotos a partir de una frase: subes la imagen, dices lo que quieres y en unos segundos la tienes. El problema es lo que hacen por su cuenta: suavizar la piel, cambiar un gesto, «mejorar» una cara hasta que deja de ser la tuya. Casi siempre se evita pidiéndolo de otra manera.</p>

<p>Esta página reúne todos los prompts de edición de fotos del catálogo, ordenados por lo que quieres hacer. Cada enlace lleva a una ficha con el texto completo listo para copiar, los huecos que tienes que rellenar y qué hacer si el resultado no convence.</p>

<h2 id="regla">La regla que evita que te cambie la cara</h2>

<p><strong>Primero lo que no debe cambiar, después el único cambio que quieres.</strong> Los modelos de imagen tienden a rehacer toda la foto; decirles qué es intocable antes de pedir nada reduce mucho los cambios no deseados.</p>

<ul>
    <li><strong>Mal:</strong> «Pon un fondo de playa».</li>
    <li><strong>Bien:</strong> «Mantén exactamente la cara, la expresión, el pelo, la ropa y la postura. Cambia solo el fondo por una playa al atardecer, con la luz coherente con la de la persona».</li>
</ul>

<p>Tres hábitos que ayudan tanto como la regla: pide los cambios de uno en uno, guarda siempre la foto original y, si tras varias ediciones la imagen se degrada, empieza un chat nuevo con la original. Hay una ficha entera dedicada a esto: <a href="/skills/prompt-para-que-gemini-no-cambie-la-cara-al-editar-una-foto">prompt para que Gemini no cambie la cara al editar una foto</a>.</p>

<h2 id="plantilla">La plantilla base</h2>

<p>Si no encuentras la ficha exacta para lo que quieres hacer, esta estructura funciona para casi cualquier edición:</p>

<blockquote>«Edita esta foto. Mantén exactamente [la cara, la expresión, el tono de piel, la ropa, el encuadre]. Cambia solo [el cambio concreto]. El resultado debe ser realista, con la misma luz y la misma calidad que el original. Si no puedes hacerlo sin inventar detalles importantes, dímelo.»</blockquote>

<h2 id="arreglar">Arreglar y mejorar una foto</h2>

<ul>
    <li><a href="/skills/como-pedirle-a-chatgpt-que-mejore-la-calidad-de-una-imagen-y-la-amplie-a-alta-resolucion">Mejorar la calidad de una foto borrosa o pixelada</a> y ampliarla.</li>
    <li><a href="/skills/prompt-para-arreglar-una-foto-oscura-o-a-contraluz-con-ia-sin-que-parezca-editada">Arreglar una foto oscura o a contraluz</a> sin que parezca editada.</li>
    <li><a href="/skills/prompt-para-hacer-que-una-foto-del-movil-parezca-hecha-con-camara-profesional">Que una foto del móvil parezca hecha con cámara profesional</a>, con el fondo desenfocado.</li>
    <li><a href="/skills/prompt-para-retocar-un-retrato-con-ia-sin-efecto-plastico">Retocar un retrato sin efecto plástico</a>.</li>
    <li><a href="/skills/prompt-para-quitar-los-reflejos-de-las-gafas-en-una-foto-con-ia">Quitar los reflejos de las gafas</a>.</li>
    <li><a href="/skills/prompt-para-arreglar-una-foto-de-grupo-con-ia-ojos-cerrados-alguien-que-no-mira-o-salio-movido">Arreglar una foto de grupo</a>: ojos cerrados o alguien que no mira.</li>
    <li><a href="/skills/prompt-para-quitar-personas-u-objetos-de-una-foto-con-chatgpt-o-gemini">Quitar personas u objetos</a> de una foto.</li>
    <li><a href="/skills/prompt-para-quitar-la-fecha-un-texto-o-un-objeto-pequeno-de-una-foto-con-ia">Quitar la fecha, un texto o un objeto pequeño</a>.</li>
    <li><a href="/skills/prompt-para-restaurar-fotos-antiguas-o-danadas-con-chatgpt-o-gemini">Restaurar fotos antiguas o dañadas</a> y <a href="/skills/prompt-para-colorear-una-foto-en-blanco-y-negro-de-forma-realista">colorear una foto en blanco y negro</a>.</li>
</ul>

<p>Si quieres entender qué se puede recuperar y qué no en una foto vieja, lo explicamos en <a href="/guias/restaurar-fotos-antiguas-con-ia">restaurar fotos antiguas con IA</a>.</p>

<h2 id="escena">Cambiar la escena</h2>

<ul>
    <li><a href="/skills/prompt-para-cambiar-el-fondo-de-una-foto-con-ia-y-que-la-luz-encaje">Cambiar el fondo</a> y que la luz encaje.</li>
    <li><a href="/skills/prompt-para-ampliar-una-foto-con-ia-o-pasarla-de-horizontal-a-vertical-para-historias">Ampliar una foto o pasarla de horizontal a vertical</a> para historias.</li>
    <li><a href="/skills/prompt-para-cambiar-la-estacion-o-la-hora-de-una-foto-con-ia-nieve-atardecer-o-noche">Cambiar la estación o la hora</a>: nieve, atardecer o noche.</li>
    <li><a href="/skills/prompt-para-animar-una-foto-con-ia-y-darle-movimiento-sutil">Animar una foto</a> con un movimiento sutil.</li>
</ul>

<h2 id="personas">Juntar personas en una foto</h2>

<ul>
    <li><a href="/skills/prompt-para-unir-a-dos-personas-en-una-foto-con-ia">Unir a dos personas en una foto</a>, con luz y escala coherentes.</li>
    <li><a href="/skills/prompt-para-hacer-una-foto-de-pareja-con-ia-para-aniversario-o-san-valentin">Foto de pareja</a> para un aniversario o San Valentín.</li>
    <li><a href="/skills/prompt-para-hacer-una-foto-familiar-con-ia-juntando-fotos-de-varias-personas">Foto familiar juntando fotos de varias personas</a>.</li>
    <li><a href="/skills/prompt-para-hacer-una-sesion-de-fotos-con-ia-6-poses-y-escenarios-con-la-misma-persona">Sesión de fotos con IA</a>: seis poses y escenarios con la misma persona.</li>
    <li><a href="/skills/prompt-para-hacer-una-foto-profesional-para-linkedin-o-el-curriculum-a-partir-de-un-selfie">Foto profesional para LinkedIn o el currículum</a> a partir de un selfie.</li>
    <li><a href="/skills/prompt-para-hacer-una-foto-estilo-polaroid-con-ia-a-partir-de-tus-fotos">Foto estilo Polaroid</a> con marco blanco y flash, también juntando a dos personas.</li>
    <li><a href="/skills/prompt-para-preparar-una-foto-de-carnet-con-ia-fondo-blanco-encuadre-y-luz">Foto tipo carnet</a> con fondo blanco, para usos que no son oficiales.</li>
</ul>

<h2 id="probar">Probar cambios en ti antes de hacerlos</h2>

<ul>
    <li><a href="/skills/prompt-para-probarte-un-corte-o-un-color-de-pelo-en-tu-foto-antes-de-ir-a-la-peluqueria">Probarte un corte o un color de pelo</a> antes de ir a la peluquería.</li>
    <li><a href="/skills/prompt-para-probarte-ropa-en-tu-foto-con-ia-ve-como-te-queda-un-look-antes-de-comprarlo">Probarte ropa</a> antes de comprarla.</li>
    <li><a href="/skills/prompt-para-ver-como-queda-un-tatuaje-sobre-tu-piel-antes-de-hacertelo">Ver cómo queda un tatuaje sobre tu piel</a>, y <a href="/skills/prompt-para-disenar-un-tatuaje-y-su-plantilla-stencil-para-el-tatuador">diseñarlo con su plantilla</a> para el tatuador.</li>
    <li><a href="/skills/prompt-para-envejecer-o-rejuvenecer-una-foto-con-ia-como-te-verias-dentro-de-30-anos">Envejecer o rejuvenecer una foto</a>.</li>
</ul>

<h2 id="estilos">Estilos, dibujos y creatividad</h2>

<ul>
    <li><a href="/skills/prompt-para-convertir-tu-foto-en-una-figura-de-accion-coleccionable-con-ia">Convertir tu foto en una figura de acción coleccionable</a>.</li>
    <li><a href="/skills/prompt-para-hacer-una-caricatura-a-partir-de-una-foto-con-chatgpt">Caricatura a partir de una foto</a>.</li>
    <li><a href="/skills/prompt-para-convertir-tu-foto-en-un-retrato-de-los-anos-80-con-ia">Retrato de los años 80</a>, con peinado, ropa y fondo de época.</li>
    <li><a href="/skills/prompt-para-convertir-una-foto-en-ilustracion-de-animacion-japonesa-clasica-dibujada-a-mano">Ilustración de animación japonesa clásica</a>.</li>
    <li><a href="/skills/prompt-para-convertir-una-foto-en-dibujo-a-lapiz-o-acuarela-con-ia">Dibujo a lápiz o acuarela</a>.</li>
    <li><a href="/skills/prompt-para-hacer-un-retrato-de-tu-mascota-como-un-cuadro-clasico">Retrato de tu mascota como un cuadro clásico</a>.</li>
    <li><a href="/skills/prompt-para-crear-stickers-personalizados-para-whatsapp-a-partir-de-tus-fotos">Stickers para WhatsApp con tus fotos</a>.</li>
    <li><a href="/skills/prompt-para-hacer-una-foto-o-tarjeta-de-cumpleanos-personalizada-con-ia">Foto o tarjeta de cumpleaños personalizada</a>.</li>
    <li><a href="/skills/prompt-para-convertir-un-boceto-o-un-dibujo-en-una-imagen-realista-con-ia">Convertir un boceto o un dibujo en imagen realista</a>.</li>
    <li><a href="/skills/prompt-para-crear-una-imagen-realista-con-ia-que-no-parezca-hecha-con-ia">Crear una imagen realista que no parezca hecha con IA</a>.</li>
    <li><a href="/skills/prompt-para-crear-un-personaje-que-salga-igual-en-varias-imagenes-con-ia">Un personaje que salga igual en varias imágenes</a>.</li>
    <li><a href="/skills/prompt-para-sacar-el-prompt-de-una-imagen-y-poder-recrearla-con-ia">Sacar el prompt de una imagen</a> para recrearla.</li>
</ul>

<h2 id="negocio">Para tu negocio</h2>

<ul>
    <li><a href="/skills/prompt-para-hacer-fotos-de-producto-con-ia-para-tu-tienda-online-o-vinted">Fotos de producto</a> para tu tienda online o Vinted.</li>
    <li><a href="/skills/prompt-para-mejorar-la-foto-de-un-plato-para-la-carta-google-maps-o-glovo">Mejorar la foto de un plato</a> para la carta, Google Maps o Glovo.</li>
    <li><a href="/skills/prompt-para-amueblar-con-ia-la-foto-de-un-piso-vacio-para-el-anuncio-de-venta-o-alquiler">Amueblar la foto de un piso vacío</a> para el anuncio.</li>
    <li><a href="/skills/prompt-para-decorar-una-habitacion-a-partir-de-una-foto-estilo-paleta-muebles-y-presupuesto">Decorar una habitación a partir de una foto</a> y <a href="/skills/prompt-para-render-realista-de-un-espacio-a-partir-de-un-plano-o-una-foto">render realista desde un plano</a>.</li>
    <li><a href="/skills/prompt-para-hacer-un-logo-con-chatgpt-o-gemini-propuestas-variantes-y-que-hacer-despues">Hacer un logo</a> y <a href="/skills/prompt-para-vectorizar-un-logo-o-dibujo-con-ia-limpiar-la-imagen-y-pasarla-a-vector">vectorizarlo</a>.</li>
</ul>

<p>Antes de usar cualquiera de estas imágenes en publicidad o en un producto, revisa qué permite tu plan y qué derechos tienes sobre lo generado: está en <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">imágenes con IA: derechos y uso comercial</a>.</p>

<h2 id="limites">Lo que no deberías hacer</h2>

<ul>
    <li><strong>Editar fotos de otras personas sin su permiso</strong>, y menos para que parezca que hicieron o dijeron algo que no ocurrió.</li>
    <li><strong>Presentar como real una imagen modificada</strong> que lo parece: si una foto editada de una persona real se puede confundir con una auténtica, indica que está hecha con IA. En la Unión Europea es obligatorio desde agosto de 2026.</li>
    <li><strong>Quitar marcas de agua o firmas</strong> de fotos ajenas: identifican a su autor.</li>
    <li><strong>Usar fotos editadas en documentos oficiales</strong> (DNI, pasaporte, permisos): deben ser fotos reales sin retoques.</li>
</ul>

<p>Cómo reconocer una imagen manipulada, y por qué cada vez cuesta más, está en <a href="/guias/detectar-imagenes-hechas-con-ia">detectar imágenes hechas con IA</a>. Y si lo que buscas es qué herramienta usar para cada tipo de edición, está en <a href="/guias/editar-fotos-con-ia">editar fotos con IA</a>.</p>
HTML,
];
