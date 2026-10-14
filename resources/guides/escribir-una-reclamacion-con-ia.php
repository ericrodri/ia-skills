<?php

return [
    'title' => 'Escribir una reclamación con IA: cartas, recursos y quejas que se toman en serio',
    'navTitle' => 'Escribir una reclamación con IA',
    'seoTitle' => 'Cómo escribir una reclamación con IA',
    'description' => 'Cómo usar ChatGPT, Gemini o Claude para redactar una carta de reclamación, alegar una multa o reclamar un vuelo o una compra, sin inventar leyes ni datos.',
    'excerpt' => 'Una reclamación bien escrita es clara, cronológica y pide algo concreto. La IA es muy buena dándole esa forma a tu enfado. Lo que no puede hacer es saberse tu caso ni garantizar que la ley que cita existe: eso lo pones y lo compruebas tú.',
    'category' => 'Práctica',
    'published' => '2026-10-14',
    'updated' => '2026-10-14',
    'readingMinutes' => 7,
    'words' => 1153,
    'about' => 'Redacción de reclamaciones y escritos de consumo con asistentes de inteligencia artificial',
    'related' => ['escribir-correos-con-ia', 'alucinaciones-de-la-ia', 'comprar-con-ia-black-friday', 'usar-ia-sin-filtrar-datos-de-clientes', 'como-escribir-prompts-efectivos', 'resumir-documentos-largos-con-ia'],
    'toc' => [
        'que-hace-bien' => 'Qué hace bien la IA (y qué no)',
        'preparar' => 'Antes de escribir: reúne los hechos',
        'prompt' => 'El prompt para la reclamación',
        'casos' => 'Casos habituales',
        'leyes' => 'Cuidado con las leyes inventadas',
        'enviar' => 'Enviarla y hacer el seguimiento',
    ],
    'faq' => [
        '¿Puedo usar ChatGPT para escribir una carta de reclamación?' => 'Sí, y suele quedar mejor que una escrita en caliente: ordena los hechos, mantiene un tono firme y educado y termina con una petición concreta. Revisa siempre las fechas, los importes y cualquier norma que cite antes de enviarla.',
        '¿La IA puede recurrir una multa por mí?' => 'Puede ayudarte a redactar las alegaciones a partir de los hechos y de las pruebas que tengas, pero el escrito lo presentas tú y eres responsable de lo que dice. Comprueba el plazo en la propia notificación: en las multas de tráfico suele ser de 20 días naturales.',
        '¿Es fiable lo que dice la IA sobre mis derechos como consumidor?' => 'Es un buen punto de partida, no una fuente. Los asistentes pueden citar artículos que no existen o normas de otro país. Pide que enlace la fuente oficial y compruébala, o consulta en la oficina de consumo de tu ayuntamiento o comunidad autónoma.',
        '¿Qué datos personales no debo dar a la IA al redactar una reclamación?' => 'Para redactar no hace falta tu DNI, tu número de cuenta ni tu dirección completa. Escribe marcadores como [DNI] o [DIRECCIÓN] y rellénalos tú en el documento final, fuera del chat.',
        '¿Cuándo necesito un abogado en lugar de la IA?' => 'Cuando hay mucho dinero en juego, plazos judiciales, un despido, una herencia o la otra parte ya ha contestado con argumentos legales. La IA sirve para entender el problema y preparar preguntas, pero no sustituye el consejo de un profesional.',
    ],
    'ctaTitle' => 'Escribir con claridad cuando hay un problema',
    'ctaBody' => 'Las mismas técnicas sirven en el otro lado del mostrador, para responder reclamaciones de clientes. En el <a href="/skills">catálogo de skills</a> hay instrucciones de <a href="/profesiones/customer-support">atención al cliente</a> y <a href="/profesiones/legal">legal</a> para redactar respuestas claras.',
    'body' => <<<'HTML'
<p>Un vuelo cancelado, un pedido que nunca llegó, una factura de la luz que no cuadra o una multa que crees injusta. Lo difícil de reclamar no suele ser tener razón, sino explicarlo de forma que la otra parte lo tome en serio. Los asistentes de IA son muy buenos en eso: convierten una historia desordenada y un enfado comprensible en un escrito claro, firme y educado. Esta guía explica cómo usarlos sin caer en sus dos trampas: inventar datos y citar leyes que no existen.</p>

<h2 id="que-hace-bien">Qué hace bien la IA (y qué no)</h2>

<ul>
    <li><strong>Bien</strong>: ordenar los hechos en orden cronológico, quitar el tono agresivo, estructurar el escrito y cerrar con una petición concreta.</li>
    <li><strong>Bien</strong>: explicarte en lenguaje llano qué dice una notificación, un contrato o unas condiciones generales que le pegues.</li>
    <li><strong>Con cuidado</strong>: citar leyes, artículos, plazos e importes de compensación. Puede acertar, pero también <a href="/guias/alucinaciones-de-la-ia">inventar</a> un artículo con total seguridad.</li>
    <li><strong>Nunca</strong>: rellenar hechos que no le has contado. Si no sabe la fecha, la inventará si no le dices lo contrario.</li>
</ul>

<h2 id="preparar">Antes de escribir: reúne los hechos</h2>

<p>La reclamación será tan buena como la información que le des. Apunta antes de abrir el chat:</p>

<ul>
    <li><strong>Qué pasó</strong>, con fechas y horas.</li>
    <li><strong>Números de referencia</strong>: pedido, factura, reserva, expediente.</li>
    <li><strong>Qué has hecho ya</strong>: llamadas, correos, respuestas recibidas.</li>
    <li><strong>Qué pruebas tienes</strong>: fotos, capturas, justificantes.</li>
    <li><strong>Qué quieres conseguir</strong>: devolución, reparación, compensación, anulación.</li>
</ul>

<p>No necesitas dar tus datos personales. Usa marcadores como [NOMBRE], [DNI] o [Nº DE CUENTA] y rellénalos después en el documento, fuera del chat.</p>

<h2 id="prompt">El prompt para la reclamación</h2>

<blockquote>«Ayúdame a redactar una reclamación formal a una tienda online. Hechos: compré una lavadora el 3 de octubre (pedido [Nº PEDIDO]), llegó el 9 con la puerta rota, lo comuniqué por chat ese mismo día con fotos y me dijeron que abrirían una incidencia; desde entonces no me responden. Quiero que me la cambien por una nueva en un plazo de 10 días o que me devuelvan el dinero. Tono firme y educado, máximo una página. Usa solo los hechos que te doy; si falta algo importante, pregúntamelo en lugar de inventarlo. No cites leyes concretas.»</blockquote>

<p>La última instrucción es importante: primero consigue un escrito claro solo con los hechos. Las referencias legales, si hacen falta, se añaden después y comprobadas.</p>

<p>Luego pide una revisión crítica: «Lee la reclamación como si fueras el departamento de atención al cliente. ¿Qué te haría ignorarla o darle largas? Corrígelo».</p>

<h2 id="casos">Casos habituales</h2>

<ul>
    <li><strong>Compras online</strong>. En la Unión Europea tienes, con carácter general, 14 días naturales para desistir de una compra a distancia sin dar explicaciones, y la garantía cubre los defectos del producto. Pide a la IA que distinga si tu caso es un desistimiento o un defecto, porque se reclaman de forma distinta.</li>
    <li><strong>Vuelos</strong>. Por retrasos largos, cancelaciones o denegación de embarque en vuelos que salen de la UE o los opera una aerolínea europea, el Reglamento 261/2004 fija compensaciones de 250, 400 o 600 euros según la distancia, salvo circunstancias extraordinarias. La IA puede ayudarte a calcular cuál te corresponde y redactar la reclamación a la aerolínea.</li>
    <li><strong>Multas de tráfico</strong>. Pega el texto de la notificación (sin tus datos) y pide que te explique qué te imputan, qué plazo tienes y qué alegaciones tendrían sentido con tus pruebas. Recuerda que pagar con descuento suele implicar renunciar a alegar.</li>
    <li><strong>Suministros y telefonía</strong>. Pide que compare la factura con tu contrato y señale cargos que no cuadran. Luego redacta la reclamación al servicio de atención al cliente, que es el primer paso obligatorio antes de acudir al organismo correspondiente.</li>
    <li><strong>Bancos</strong>. La reclamación va primero al servicio de atención al cliente de la entidad; si no responden o no estás de acuerdo, puedes acudir al Banco de España. La IA te ayuda a dejar por escrito qué cargo discutes y por qué.</li>
</ul>

<p>Si el problema es con una compra presencial, pide siempre la hoja de reclamaciones en el propio establecimiento; la IA puede ayudarte a resumir los hechos en el espacio limitado del formulario.</p>

<h2 id="leyes">Cuidado con las leyes inventadas</h2>

<p>Una reclamación que cita un artículo inexistente pierde toda credibilidad, y en un escrito ante la administración puede perjudicarte. Si quieres incluir referencias legales:</p>

<ul>
    <li>Usa un asistente con búsqueda en internet y pide que enlace la fuente oficial (BOE, diario oficial de la UE, web del organismo).</li>
    <li>Abre el enlace y comprueba que el artículo dice lo que el asistente afirma.</li>
    <li>Ante la duda, quítala: una reclamación clara con hechos y pruebas funciona igual de bien sin citas.</li>
</ul>

<p>Para dudas sobre tus derechos, las oficinas municipales de información al consumidor (OMIC) y los servicios de consumo de tu comunidad autónoma asesoran gratis.</p>

<h2 id="enviar">Enviarla y hacer el seguimiento</h2>

<ul>
    <li><strong>Envíala por un canal que deje constancia</strong>: formulario con número de referencia, correo electrónico o burofax si el asunto es importante.</li>
    <li><strong>Guarda una copia</strong> con la fecha de envío y las pruebas adjuntas.</li>
    <li><strong>Apunta el plazo</strong> que has dado y pide a la IA un segundo escrito, más firme, por si no responden.</li>
    <li><strong>Escala si no hay respuesta</strong>: arbitraje de consumo, el organismo regulador del sector o, si el importe lo justifica, un abogado.</li>
</ul>

<p>Muchas de estas comunicaciones son correos; en <a href="/guias/escribir-correos-con-ia">escribir correos con IA</a> tienes más técnicas para ajustar el tono. Y si la reclamación viene de una compra de esta temporada, revisa también <a href="/guias/comprar-con-ia-black-friday">comprar con IA en Black Friday</a> para evitar el problema la próxima vez.</p>
HTML,
];
