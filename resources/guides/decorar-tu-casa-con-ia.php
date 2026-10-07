<?php

return [
    'title' => 'Decorar tu casa con IA: ver el cambio antes de comprar nada, sin creerte todo lo que dibuja',
    'navTitle' => 'Decorar tu casa con IA',
    'seoTitle' => 'Decorar tu casa con IA: guía práctica',
    'description' => 'Cómo decorar tu casa con IA: qué foto subir, cómo pedir el rediseño de una habitación, cómo pasar de la imagen a muebles reales y qué no puede decidir la IA.',
    'excerpt' => 'Una foto del salón y una frase bastan para ver cómo quedaría en tonos tierra, con otra luz o sin ese sofá. Cómo pedirlo para que respete tu casa, cómo pasar de la imagen a una lista de compra que quepa y dónde termina lo que la IA puede decidir.',
    'category' => 'Práctica',
    'published' => '2026-10-07',
    'updated' => '2026-10-07',
    'readingMinutes' => 7,
    'words' => 1098,
    'about' => 'Decoración e interiorismo doméstico con generación y edición de imágenes por inteligencia artificial',
    'related' => ['editar-fotos-con-ia', 'crear-imagenes-con-ia', 'prompts-para-diseno-grafico', 'imagenes-con-ia-derechos-y-uso-comercial', 'alucinaciones-de-la-ia', 'herramientas-de-ia-gratis'],
    'toc' => [
        'para-que-sirve' => 'Para qué sirve',
        'la-foto' => 'La foto de partida',
        'pedirlo' => 'Cómo pedir el rediseño',
        'de-la-imagen-a-la-tienda' => 'De la imagen a la tienda',
        'limites' => 'Lo que la IA no puede decidir',
    ],
    'faq' => [
        '¿Qué IA sirve para decorar una habitación a partir de una foto?' => 'Cualquier asistente que edite imágenes, como ChatGPT o Gemini, puede cambiar el estilo de una habitación a partir de una foto tuya. También hay aplicaciones específicas de interiorismo con estilos predefinidos, y algunas tiendas de muebles ofrecen apps que colocan sus productos en una foto de tu casa. Para empezar, un asistente general es suficiente y gratuito.',
        '¿Puedo decorar mi casa con IA gratis?' => 'Sí. Los planes gratuitos de los asistentes que editan imágenes permiten varias ediciones al día, de sobra para probar dos o tres estilos en una habitación. Las aplicaciones especializadas suelen dar unas pocas imágenes gratis y cobran a partir de ahí. Para la lista de compra y el presupuesto basta cualquier chat gratuito.',
        '¿Los muebles que aparecen en la imagen existen?' => 'Normalmente no. La IA dibuja muebles verosímiles, no productos concretos de una tienda, y no respeta medidas reales. Usa la imagen como referencia de estilo, colores y distribución, y luego busca piezas parecidas en las tiendas, comprobando las medidas en tu casa antes de comprar.',
        '¿Puede la IA diseñar una reforma de mi casa?' => 'Puede ayudarte a imaginarla y a preparar la conversación con profesionales, pero no sustituye a un arquitecto ni a un aparejador. No sabe qué muros son de carga, por dónde van las instalaciones ni qué permisos exige tu ayuntamiento. Para tirar tabiques, mover la cocina o cambiar baños, hace falta un proyecto y, a menudo, una licencia de obra.',
        '¿Es seguro subir fotos de mi casa a la IA?' => 'Revisa qué se ve antes de subirlas: documentos, fotos familiares, la vista desde la ventana o cualquier detalle que permita saber dónde vives. Recorta o tapa lo que no haga falta. Comprueba también si el servicio usa tus imágenes para entrenar y desactívalo si puedes; con los asistentes conocidos suele estar en los ajustes de privacidad.',
    ],
    'ctaTitle' => 'Instrucciones de diseño que ya funcionan',
    'ctaBody' => 'Lo que aprendes pidiendo un salón sirve para cualquier imagen. En el <a href="/skills">catálogo de skills</a> hay instrucciones probadas de diseño y edición visual, por ejemplo en <a href="/profesiones/diseno">diseño</a> y <a href="/profesiones/marketing">marketing</a>.',
    'body' => <<<'HTML'
<p>Decidir si el sofá verde quedará bien, si merece la pena pintar una pared o qué lámpara pide el salón es difícil con la imaginación sola. La IA permite verlo antes: subes una foto de la habitación, describes el cambio y en unos segundos tienes una imagen de cómo podría quedar. Es una herramienta estupenda para decidir. Lo que no es, aunque lo parezca, es un plano ni un catálogo: dibuja muebles que no existen y no conoce las medidas de tu casa.</p>

<h2 id="para-que-sirve">Para qué sirve</h2>

<ul>
    <li><strong>Probar estilos</strong> sobre tu propia habitación: nórdico, mediterráneo, industrial, más cálido o más minimalista.</li>
    <li><strong>Probar colores</strong> de pared, suelos, cortinas o textiles antes de comprar pintura.</li>
    <li><strong>Ver distribuciones</strong>: el sofá en la otra pared, la mesa junto a la ventana.</li>
    <li><strong>Ponerse de acuerdo</strong> en casa: una imagen evita discusiones que con palabras no se resuelven.</li>
    <li><strong>Preparar la lista de compra</strong> y el presupuesto a partir de la imagen que te gusta.</li>
</ul>

<h2 id="la-foto">La foto de partida</h2>

<p>La IA respeta mejor la habitación cuanto mejor la ve. Antes de hacer la foto:</p>

<ul>
    <li><strong>Luz de día</strong>, con las persianas subidas y las luces apagadas, para que no aparezcan dominantes amarillas.</li>
    <li><strong>Desde una esquina</strong> y a la altura del pecho, para que se vean dos paredes y el suelo.</li>
    <li><strong>Recoge</strong>: ropa, cables y papeles confunden al modelo y aparecen transformados en cosas raras.</li>
    <li><strong>Sin datos personales</strong>: documentos, fotos familiares o la vista por la ventana que permita saber dónde vives. Recorta lo que no haga falta.</li>
</ul>

<h2 id="pedirlo">Cómo pedir el rediseño</h2>

<p>Lo más importante es decir qué no debe tocar. Si no, la IA moverá la ventana, cambiará el tamaño de la habitación o añadirá una chimenea. Esta instrucción funciona bien con ChatGPT o Gemini:</p>

<blockquote>«Redecora este salón en estilo mediterráneo, con tonos arena y blanco roto, fibras naturales y plantas. Mantén exactamente la forma de la habitación, las paredes, la ventana, la puerta, el suelo y el radiador. Conserva el sofá, pero cambia la tapicería a lino claro. Sustituye la mesa de centro y añade una alfombra y una lámpara de pie. Luz natural de tarde, sin personas.»</blockquote>

<p>Trucos que ayudan:</p>

<ul>
    <li><strong>Un cambio por petición</strong> cuando quieras afinar: primero el color de las paredes, luego los textiles.</li>
    <li><strong>Vuelve a la foto original</strong> si la imagen se aleja de tu casa. Cada edición encadenada deforma un poco más la habitación.</li>
    <li><strong>Pide dos o tres variantes</strong> del mismo estilo para comparar, en lugar de quedarte con la primera.</li>
    <li><strong>Usa referencias</strong>: puedes subir una foto de un salón que te guste y pedir que aplique ese estilo al tuyo.</li>
</ul>

<p>Las mismas técnicas sirven para cualquier imagen; hay más en <a href="/guias/editar-fotos-con-ia">editar fotos con IA</a> y en <a href="/guias/prompts-para-diseno-grafico">prompts para diseño gráfico</a>.</p>

<h2 id="de-la-imagen-a-la-tienda">De la imagen a la tienda</h2>

<p>La imagen es una referencia de estilo, no una lista de productos: los muebles que aparecen casi nunca existen tal cual y sus proporciones no están pensadas para tus metros. Para pasar a algo que puedas comprar:</p>

<ol>
    <li><strong>Mide</strong> la habitación, las paredes libres, la altura y el paso de puertas y ventanas. Anota también dónde están los enchufes y los radiadores.</li>
    <li><strong>Pide la lista</strong> al mismo asistente, con tus medidas: «A partir de esta imagen, haz una lista de las piezas que habría que comprar, con medidas máximas para que quepan en un salón de 4,20 × 3,60 m dejando 80 cm de paso, y un presupuesto orientativo por pieza para un total de 1.500 €».</li>
    <li><strong>Busca piezas parecidas</strong> en las tiendas. Algunas tienen aplicaciones que colocan sus muebles en una foto de tu casa, útiles para comprobar el tamaño.</li>
    <li><strong>Marca en el suelo</strong> con cinta de carrocero el espacio de los muebles grandes antes de pedirlos. Es la prueba que la IA no puede hacer por ti.</li>
</ol>

<p>Los precios que dé el asistente son orientativos y pueden estar desactualizados o inventados, como explicamos en <a href="/guias/alucinaciones-de-la-ia">alucinaciones de la IA</a>: confírmalos en la tienda.</p>

<h2 id="limites">Lo que la IA no puede decidir</h2>

<ul>
    <li><strong>Reformas</strong>: tirar un tabique, mover la cocina o cambiar un baño exige saber qué muros son de carga y por dónde van las instalaciones, y a menudo una licencia del ayuntamiento. La imagen sirve para explicar lo que quieres a un profesional, no para decidir si se puede hacer.</li>
    <li><strong>Colores reales</strong>: la pantalla engaña. Pide una muestra de pintura y pruébala en la pared con la luz de tu casa.</li>
    <li><strong>Materiales y calidades</strong>: la imagen no sabe si ese suelo aguanta humedad o si esa tela resiste a un perro.</li>
    <li><strong>Anuncios</strong>: si vendes o alquilas, no publiques la habitación redecorada como si fuera real. Puede presentarse como propuesta, dejándolo claro; las dudas sobre uso de imágenes generadas están en <a href="/guias/imagenes-con-ia-derechos-y-uso-comercial">imágenes con IA: derechos y uso comercial</a>.</li>
</ul>
HTML,
];
