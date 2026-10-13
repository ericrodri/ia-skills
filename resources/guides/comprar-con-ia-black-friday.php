<?php

return [
    'title' => 'Comprar con IA en Black Friday: comparar precios y elegir sin errores',
    'navTitle' => 'Comprar con IA en Black Friday',
    'seoTitle' => 'Comprar con IA en Black Friday y comparar precios',
    'description' => 'Cómo usar ChatGPT, Gemini o Perplexity para elegir qué comprar, comparar precios, detectar falsos descuentos y evitar las tiendas fraudulentas.',
    'excerpt' => 'Los asistentes de IA ya recomiendan productos, comparan modelos y en algunos países permiten comprar sin salir del chat. Son muy útiles para decidir qué necesitas; para el precio exacto y la tienda, hay que comprobarlo siempre fuera.',
    'category' => 'Práctica',
    'published' => '2026-10-13',
    'updated' => '2026-10-13',
    'readingMinutes' => 6,
    'words' => 992,
    'about' => 'Uso de asistentes de inteligencia artificial para comparar productos y precios en compras online',
    'related' => ['como-usar-perplexity', 'estafas-con-ia-deepfakes-y-suplantacion', 'alucinaciones-de-la-ia', 'investigar-con-ia-deep-research', 'cual-es-la-mejor-ia', 'que-es-un-agente-de-ia'],
    'toc' => [
        'para-que' => 'Para qué sirve la IA al comprar',
        'necesidad' => 'Antes de mirar ofertas: qué necesitas',
        'comparar' => 'Comparar modelos sin perderse',
        'precio' => 'Precios y falsos descuentos',
        'tiendas' => 'Tiendas fiables y estafas',
        'agentes' => 'Comprar dentro del chat',
    ],
    'faq' => [
        '¿Qué IA es mejor para comparar precios?' => 'Las que buscan en internet en tiempo real y enlazan sus fuentes, como Perplexity, Gemini o ChatGPT con búsqueda activada. Aun así, el precio que muestran puede estar desfasado: ábrelo siempre en la tienda antes de decidir.',
        '¿Puede la IA decirme si un descuento de Black Friday es real?' => 'Puede ayudarte a comprobarlo si le pides que busque el historial de precios del producto o si le das tú los datos de un comparador de precios. Por sí sola no conoce el precio de hace un mes, y sin buscar puede inventarlo.',
        '¿Se puede comprar directamente desde ChatGPT o Gemini?' => 'En algunos países y con algunas tiendas sí: el asistente muestra el producto y permite pagar sin salir del chat. La disponibilidad cambia rápido y varía por país, así que revisa qué tienda vende realmente, el precio final con envío y las condiciones de devolución antes de pagar.',
        '¿Cómo uso la IA para saber si una tienda online es fiable?' => 'Pídele que busque opiniones recientes, datos de la empresa y avisos de fraude sobre ese dominio concreto. Completa la comprobación tú: dirección y CIF en el aviso legal, métodos de pago con protección y antigüedad del dominio.',
        '¿Las recomendaciones de la IA son publicidad?' => 'Los asistentes dicen no cobrar por ordenar productos, pero se basan en reseñas y artículos de internet, muchos con enlaces de afiliados. Pide siempre los pros y contras y las fuentes, y desconfía si todo parece positivo.',
    ],
    'ctaTitle' => 'Instrucciones para decidir mejor',
    'ctaBody' => 'Comparar opciones con criterios claros sirve igual para un portátil que para elegir proveedor. En el <a href="/skills">catálogo de skills</a> encontrarás prompts de <a href="/profesiones/analisis-de-datos">análisis</a> y <a href="/profesiones/ventas">ventas</a> para tablas comparativas y decisiones de compra.',
    'body' => <<<'HTML'
<p>El Black Friday es la semana en la que más gente compra cosas que no había planeado, a menudo con descuentos menos generosos de lo que parecen. Los asistentes de IA pueden ser un buen aliado: te ayudan a aclarar qué necesitas, a comparar modelos con calma y a detectar ofertas sospechosas. También pueden equivocarse con un precio o recomendar un producto que ya no se vende. Esta guía explica cómo usarlos para comprar mejor, no para comprar más.</p>

<h2 id="para-que">Para qué sirve la IA al comprar</h2>

<p>La IA es muy buena en lo que más cuesta de una compra: entender las diferencias técnicas y ordenar la información. Es menos fiable en lo que cambia cada hora:</p>

<ul>
    <li><strong>Bien</strong>: explicar qué significa cada especificación, comparar modelos, resumir reseñas, preparar una lista de criterios.</li>
    <li><strong>Con cuidado</strong>: precios, existencias, gastos de envío y fechas de las ofertas. Comprueba siempre en la tienda.</li>
</ul>

<p>Para todo lo que dependa de datos actuales, usa un asistente con búsqueda en internet que cite sus fuentes; por eso <a href="/guias/como-usar-perplexity">Perplexity</a> o Gemini suelen funcionar mejor que un modelo sin conexión, que puede <a href="/guias/alucinaciones-de-la-ia">inventar</a> precios con total seguridad.</p>

<h2 id="necesidad">Antes de mirar ofertas: qué necesitas</h2>

<p>La mejor forma de no gastar de más es decidir qué buscas antes de que empiecen las ofertas. Cuéntale a la IA tu uso real:</p>

<blockquote>«Quiero un portátil para teletrabajar con Office y videollamadas, algo de edición de fotos y que pese poco porque viajo. Presupuesto máximo 900 euros. ¿Qué especificaciones mínimas necesito y en cuáles no merece la pena gastar más?»</blockquote>

<p>Guarda esa lista de requisitos. Cuando veas una oferta, la comparas con ella y no con el porcentaje de descuento.</p>

<h2 id="comparar">Comparar modelos sin perderse</h2>

<p>Con dos o tres candidatos, pide una tabla:</p>

<blockquote>«Compara estos tres modelos en una tabla: [modelos exactos]. Columnas: pantalla, batería real según reseñas, peso, puertos, garantía y principales quejas de los usuarios. Indica la fuente de cada dato y marca los que no hayas podido comprobar.»</blockquote>

<ul>
    <li><strong>Usa el nombre exacto del modelo</strong>: muchas marcas venden versiones casi idénticas con referencias distintas, a veces fabricadas solo para estas fechas.</li>
    <li><strong>Pide los puntos débiles</strong>, no solo las ventajas.</li>
    <li><strong>Para decisiones caras</strong>, una investigación más larga con las funciones que explicamos en <a href="/guias/investigar-con-ia-deep-research">investigar con IA</a> merece la pena.</li>
</ul>

<h2 id="precio">Precios y falsos descuentos</h2>

<p>El truco más común del Black Friday es inflar el precio de referencia para que el descuento parezca mayor. La IA te ayuda a detectarlo, pero necesita datos:</p>

<ul>
    <li>Consulta el historial de precios en un comparador o una extensión de seguimiento de precios.</li>
    <li>Pega esos datos en el chat y pide: «¿Este precio es realmente más bajo que el de los últimos tres meses?».</li>
    <li>Pide que calcule el <strong>precio final</strong> con envío, accesorios necesarios y extensión de garantía si la ofrecen.</li>
</ul>

<p>Recuerda que en la Unión Europea, cuando una tienda anuncia una rebaja, el precio anterior que muestra debe ser el más bajo de los 30 días previos. Si la cifra tachada no cuadra con el historial, desconfía.</p>

<h2 id="tiendas">Tiendas fiables y estafas</h2>

<p>En estas fechas se multiplican las tiendas falsas con precios imposibles, anuncios en redes con descuentos del 80 % y mensajes que suplantan a empresas de reparto. Algunos se hacen ya con imágenes y textos generados por IA muy convincentes. Antes de pagar en una tienda que no conoces:</p>

<blockquote>«Busca información sobre la tienda [dominio]: antigüedad, datos de la empresa, opiniones recientes y avisos de fraude. Si no encuentras datos verificables, dímelo.»</blockquote>

<p>Y comprueba tú mismo el aviso legal, los métodos de pago (desconfía de transferencias y bizum a particulares) y que el dominio no imite al de una marca conocida con una letra cambiada. Más señales en <a href="/guias/estafas-con-ia-deepfakes-y-suplantacion">estafas con IA</a>.</p>

<h2 id="agentes">Comprar dentro del chat</h2>

<p>Los asistentes empiezan a funcionar como <a href="/guias/que-es-un-agente-de-ia">agentes</a>: muestran productos con precio, permiten pagar sin salir de la conversación o incluso vigilan un precio y avisan cuando baja. La disponibilidad depende del país y de la tienda, y cambia cada pocos meses. Si lo usas:</p>

<ul>
    <li><strong>Mira quién vende</strong> realmente el producto: la tienda gestiona el envío y las devoluciones, no el asistente.</li>
    <li><strong>Revisa el precio final</strong> en la pantalla de pago.</li>
    <li><strong>No des más permisos de los necesarios</strong> ni guardes tu tarjeta en servicios que no conoces.</li>
    <li><strong>Confirma tú cada compra</strong>; no dejes que un agente compre de forma automática.</li>
</ul>

<p>La regla para este Black Friday: deja que la IA piense contigo qué te conviene, y comprueba con tus propios ojos el precio, la tienda y las condiciones antes de pagar.</p>
HTML,
];
