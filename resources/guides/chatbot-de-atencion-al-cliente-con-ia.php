<?php

return [
    'title' => 'Montar un chatbot de atención al cliente con IA',
    'navTitle' => 'Chatbot de atención al cliente',
    'seoTitle' => 'Chatbot de atención al cliente con IA',
    'description' => 'Cuándo compensa, qué resuelve y qué no, cuánto cuesta de verdad entre plataforma y desarrollo a medida, y el plan de seis semanas para ponerlo en producción.',
    'excerpt' => 'Un chatbot bien montado se come el 70 % de las consultas repetidas y deja las difíciles a quien sabe resolverlas. Uno mal montado enfada a los clientes y acaba desconectado en tres meses. La diferencia se decide antes de contratar nada.',
    'category' => 'Práctica',
    'published' => '2026-09-18',
    'updated' => '2026-09-18',
    'readingMinutes' => 11,
    'words' => 1829,
    'about' => 'Chatbots de atención al cliente con inteligencia artificial',
    'related' => ['ia-para-autonomos-y-pymes', 'usar-ia-sin-filtrar-datos-de-clientes', 'automatizar-sin-programar-n8n-make-zapier', 'que-es-un-agente-de-ia'],
    'toc' => [
        'cuando-compensa' => 'Cuándo compensa y cuándo no',
        'que-resuelve' => 'Qué resuelve de verdad y qué no',
        'opciones' => 'Plataforma o desarrollo a medida',
        'costes' => 'Cuánto cuesta, con números',
        'implantacion' => 'Un plan de seis semanas',
        'fallos' => 'Los cinco fallos que lo hunden',
        'obligaciones' => 'Lo que la ley te obliga a hacer',
        'medir' => 'Qué medir para saber si funciona',
    ],
    'faq' => [
        '¿Cuánto cuesta montar un chatbot de atención al cliente?' => 'Por plataforma de suscripción, los precios publicados en 2026 se mueven entre 0,50 € y 2 € por conversación resuelta, más una cuota base. Por desarrollo a medida, los integradores españoles manejan rangos de unos 4.000 € para un caso simple de un canal y un proceso, hasta 12.000 € o más cuando hay varios canales, integración con el CRM o el stock y voz. La operación posterior añade entre 50 € y 300 € al mes de consumo de modelo más la infraestructura. El punto donde el desarrollo propio empieza a salir más barato que la suscripción suele estar entre 500 y 800 resoluciones mensuales.',
        '¿Qué porcentaje de consultas puede resolver solo?' => 'En las implantaciones que se documentan bien, entre el 70 % y el 80 % de las consultas repetitivas: estado del pedido, horarios, devoluciones, precios, citas, dudas de producto que están en tu documentación. Ojo con la letra pequeña: es el 70-80 % de las repetitivas, no del total. Si en tu negocio la mitad de los contactos son casos particulares, el techo real es mucho más bajo y hay que dimensionar el proyecto con esa cifra, no con la del folleto.',
        '¿En cuánto tiempo se recupera la inversión?' => 'Los plazos que se publican van de tres a ocho meses, y dependen casi por completo de una sola variable: cuántas conversaciones repetitivas atiendes hoy. Con 200 contactos al mes, ningún chatbot se paga solo y el motivo para ponerlo es otro —atender fuera de horario, por ejemplo—. Con 3.000, el cálculo sale solo. Haz la cuenta con tu volumen antes de pedir ninguna propuesta.',
        '¿Hay que avisar al cliente de que está hablando con una máquina?' => 'Sí. El Reglamento europeo de IA impone obligaciones de transparencia a los sistemas que interactúan directamente con personas: hay que informar de que se está interactuando con una IA, salvo que resulte evidente para un usuario razonablemente atento. En la práctica se resuelve con una línea al abrir la conversación y con un nombre que no simule ser una persona del equipo. Es barato de cumplir y caro de incumplir.',
        '¿Y los datos de los clientes?' => 'Es la parte que más se descuida. Todo lo que el cliente escriba en ese chat entra en un sistema que probablemente sea de un tercero, y ahí aplican tanto la protección de datos como tus propios compromisos de confidencialidad. Lo mínimo: contrato de encargado de tratamiento con el proveedor, saber en qué región se procesa, política de retención definida y filtrado de lo que se envía al modelo. Un chatbot que registre números de tarjeta en su historial es un problema serio, no un fallo menor.',
    ],
    'ctaTitle' => 'Prompts de atención al cliente listos para adaptar',
    'ctaBody' => 'Guiones de respuesta, clasificación de tickets, tono de marca y escalado a humano son la materia prima de un buen asistente. En <a href="/profesiones/customer-support">Atención al cliente</a> están los prompts mejor valorados; si lo montas tú, mira también <a href="/profesiones/desarrollo">Desarrollo</a> y <a href="/profesiones/freelancers">Freelancers</a>.',
    'body' => <<<'HTML'
<p>La conversación sobre chatbots ha cambiado de sitio. Ya no va de si la máquina entiende —eso está resuelto— sino de si el proyecto se sostiene: cuántas consultas se come de verdad, qué pasa con las que no, cuánto cuesta mantenerlo y qué se rompe cuando el cliente se enfada.</p>

<p>Casi todo lo que decide ese resultado se decide antes de contratar nada.</p>

<h2 id="cuando-compensa">Cuándo compensa y cuándo no</h2>

<p>Hay una cuenta de servilleta que evita la mayoría de los proyectos fallidos. Necesitas tres números que ya tienes: cuántos contactos recibes al mes, qué proporción son preguntas repetidas y cuánto tiempo se va en cada una.</p>

<figure>
<table>
    <thead>
        <tr><th>Situación</th><th>¿Compensa?</th><th>Motivo real</th></tr>
    </thead>
    <tbody>
        <tr><td>Más de 1.000 contactos/mes, mayoría repetitivos</td><td><strong>Sí, claramente</strong></td><td>El ahorro de horas paga el proyecto en meses</td></tr>
        <tr><td>Entre 300 y 1.000, con picos</td><td><strong>Depende</strong></td><td>Suele compensar por cobertura fuera de horario, no por ahorro</td></tr>
        <tr><td>Menos de 300 y muy variados</td><td><strong>No todavía</strong></td><td>Cada caso es distinto: el chatbot no tiene qué automatizar</td></tr>
        <tr><td>Pocos contactos pero de alto valor</td><td><strong>No</strong></td><td>Interponer una máquina entre tú y un cliente grande cuesta más de lo que ahorra</td></tr>
    </tbody>
</table>
</figure>

<p>La fila que más gente ignora es la última. En negocios donde cada conversación puede valer varios miles de euros, la atención es parte del producto. Ahí la IA rinde por detrás —preparando respuestas, resumiendo el historial, redactando el seguimiento— y no delante.</p>

<h2 id="que-resuelve">Qué resuelve de verdad y qué no</h2>

<p>Las cifras que se publican hablan de un 70-80 % de resolución, y la letra pequeña importa: es el 70-80 % de las consultas <em>repetitivas</em>, no del total de contactos. Si en tu negocio seis de cada diez conversaciones son casos particulares, tu techo real está en torno al 30 % del total, y el proyecto hay que dimensionarlo con esa cifra.</p>

<p>Lo que un asistente bien montado resuelve sin drama: estado de un pedido, horarios y ubicaciones, política de devoluciones, precios y planes, disponibilidad, reserva y cambio de citas, dudas de producto que estén en tu documentación, recogida de datos previos a un contacto humano.</p>

<p>Lo que no conviene que resuelva solo, aunque técnicamente pueda: reclamaciones e incidencias con cliente enfadado, cualquier cosa con dinero de por medio —reembolsos, cargos, facturación—, decisiones que comprometan a la empresa, y todo lo que sea excepción a tu propia política. En esos casos el trabajo del asistente es identificar rápido y escalar bien, no intentarlo.</p>

<p>Y una idea que ahorra discusiones: un asistente que dice «esto te lo resuelve una persona, te paso» en cinco segundos es mejor producto que uno que da tres rodeos y acaba en lo mismo. La frustración no la produce el bot: la produce el bucle.</p>

<h2 id="opciones">Plataforma o desarrollo a medida</h2>

<figure>
<table>
    <thead>
        <tr><th></th><th>Plataforma de suscripción</th><th>Desarrollo a medida</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Puesta en marcha</strong></td><td>Días</td><td>Semanas</td></tr>
        <tr><td><strong>Coste inicial</strong></td><td>Bajo o nulo</td><td>Miles de euros</td></tr>
        <tr><td><strong>Coste variable</strong></td><td>Por conversación resuelta</td><td>Consumo de modelo, muy inferior</td></tr>
        <tr><td><strong>Integraciones</strong></td><td>Las que trae</td><td>Las que necesites</td></tr>
        <tr><td><strong>Control de los datos</strong></td><td>El del proveedor</td><td>El tuyo</td></tr>
        <tr><td><strong>Dependencia</strong></td><td>Alta: migrar cuesta</td><td>Baja, si está bien hecho</td></tr>
    </tbody>
</table>
</figure>

<p>El criterio de decisión no es filosófico, es de volumen. Por debajo de unas 500-800 resoluciones al mes, la suscripción casi siempre sale más barata que pagar un desarrollo y mantenerlo. Por encima, el coste por resolución hace que el desarrollo propio se amortice en meses.</p>

<p>Hay una tercera vía que se lleva bien con negocios pequeños: montarlo sobre una herramienta de automatización sin programar, conectando el modelo con tu CRM y tu canal de mensajería. Cuesta días, no semanas, y el mantenimiento lo puede llevar alguien de dentro. Las ventajas y los límites de ese enfoque están en la guía de <a href="/guias/automatizar-sin-programar-n8n-make-zapier">automatizar sin programar</a>.</p>

<h2 id="costes">Cuánto cuesta, con números</h2>

<p>Rangos publicados en España durante 2026. Tómalos como órdenes de magnitud para preparar una conversación con proveedores, no como presupuesto:</p>

<ul>
    <li><strong>Plataforma de suscripción:</strong> entre 0,50 € y 2 € por conversación resuelta, más cuota base.</li>
    <li><strong>Desarrollo a medida simple</strong> —un canal, un proceso, sin integraciones—: en torno a 4.000 €.</li>
    <li><strong>Desarrollo multicanal</strong> con integración a CRM o stock y voz: hasta 12.000 € o más.</li>
    <li><strong>Operación mensual:</strong> de 50 € a 300 € de consumo de modelo, más 30-100 € de infraestructura.</li>
    <li><strong>Retorno documentado:</strong> entre tres y ocho meses, según volumen.</li>
</ul>

<p>Falta una partida que no aparece en ninguna propuesta y que es la que decide si el proyecto sobrevive: <strong>el mantenimiento del contenido</strong>. Alguien tiene que revisar cada semana las conversaciones que fallaron y actualizar la base de conocimiento. Son dos o tres horas semanales el primer trimestre y una a la semana después. Si nadie las tiene asignadas, el asistente se degrada solo a medida que cambian tus precios, tus plazos y tu catálogo.</p>

<h2 id="implantacion">Un plan de seis semanas</h2>

<figure>
<table>
    <thead>
        <tr><th>Semana</th><th>Qué se hace</th><th>Entregable</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>1</strong></td><td>Clasificar 300 conversaciones reales por tipo y frecuencia</td><td>La lista de lo que hay que automatizar, ordenada</td></tr>
        <tr><td><strong>2</strong></td><td>Escribir la base de conocimiento de los diez casos más frecuentes</td><td>Respuestas correctas, aprobadas por quien sabe</td></tr>
        <tr><td><strong>3</strong></td><td>Montaje, tono de marca y reglas de escalado</td><td>Asistente funcionando en pruebas</td></tr>
        <tr><td><strong>4</strong></td><td>Pruebas internas con casos reales, incluidos los difíciles</td><td>Lista de fallos y ajustes</td></tr>
        <tr><td><strong>5</strong></td><td>Piloto con una fracción del tráfico y un humano vigilando</td><td>Datos reales de resolución y escalado</td></tr>
        <tr><td><strong>6</strong></td><td>Ajuste, apertura y rutina semanal de revisión</td><td>En producción, con dueño asignado</td></tr>
    </tbody>
</table>
</figure>

<p>La semana 1 es la que se salta todo el mundo y la que decide el resultado. Sin la clasificación de conversaciones reales estarás automatizando lo que crees que te preguntan, que nunca coincide con lo que te preguntan. Clasificar 300 conversaciones es además trabajo mecánico y verificable: se delega bien en un modelo, revisando una muestra.</p>

<h2 id="fallos">Los cinco fallos que lo hunden</h2>

<ol>
    <li><strong>No hay salida a humano visible.</strong> El fallo número uno, con diferencia. La opción de hablar con una persona tiene que estar a un clic desde el principio, no escondida tras tres intentos fallidos.</li>
    <li><strong>Inventa cuando no sabe.</strong> Un asistente conectado a tu documentación se equivoca poco; uno que responde de memoria se inventa plazos y condiciones con enorme aplomo. Que conteste solo desde fuentes tuyas y que diga «no lo sé» es una decisión de diseño, no una limitación. El mecanismo está explicado en la guía de <a href="/guias/alucinaciones-de-la-ia">alucinaciones</a>.</li>
    <li><strong>Se queda congelado.</strong> Cambias los plazos de envío y el asistente sigue dando los antiguos durante cuatro meses. Es el fallo que más reclamaciones genera.</li>
    <li><strong>Simula ser una persona.</strong> Además de ser dudoso legalmente, es contraproducente: el cliente lo descubre siempre y la sensación de engaño arrastra a la marca entera.</li>
    <li><strong>Nadie mira las conversaciones.</strong> El registro de lo que la gente pregunta y el asistente no resuelve es el mejor material de producto que vas a tener, y casi siempre se queda sin leer.</li>
</ol>

<h2 id="obligaciones">Lo que la ley te obliga a hacer</h2>

<p>Dos frentes, los dos manejables si se piensan antes.</p>

<p><strong>Transparencia.</strong> El Reglamento europeo de IA exige informar a las personas de que están interactuando con un sistema de IA, salvo que sea evidente. Se cumple con una línea al abrir la conversación y evitando nombres y fotos que simulen a alguien del equipo. El contexto completo de qué obliga a quién está en la guía de <a href="/guias/ai-act-obligaciones-empresas">obligaciones del AI Act</a>.</p>

<p><strong>Datos personales.</strong> Todo lo que el cliente escriba pasa por un proveedor: hace falta contrato de encargado de tratamiento, saber dónde se procesa, definir cuánto tiempo se guarda y filtrar lo que no debería salir de casa. El criterio práctico para decidir qué se puede enviar a un modelo de terceros y qué no está en <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">usar IA sin filtrar datos de clientes</a>.</p>

<h2 id="medir">Qué medir para saber si funciona</h2>

<ul>
    <li><strong>Tasa de resolución sin humano</strong>, separando las consultas repetitivas del total. Las dos cifras, siempre juntas.</li>
    <li><strong>Tiempo hasta la primera respuesta útil</strong>, que es lo que el cliente percibe como buena atención.</li>
    <li><strong>Escalados y su motivo.</strong> El motivo importa más que el número: es tu lista de mejoras ordenada.</li>
    <li><strong>Satisfacción al cerrar</strong>, con una sola pregunta. Si baja respecto a la atención humana, hay algo roto aunque la resolución suba.</li>
    <li><strong>Horas liberadas del equipo</strong>, convertidas en coste. Es el número que decide si hay segunda fase, y conviene medirlo como plantea <a href="/guias/medir-si-la-ia-ahorra-tiempo">medir si la IA ahorra tiempo</a>.</li>
</ul>

<p>Un último apunte sobre ambición. Lo que aquí se describe es un asistente que responde y escala; el salto a un agente que además ejecuta —cambia un pedido, emite un reembolso, modifica una reserva— multiplica el valor y también el riesgo, y pide controles distintos. Qué cambia exactamente en ese salto está en la guía de <a href="/guias/que-es-un-agente-de-ia">qué es un agente de IA</a>.</p>
HTML,
];
