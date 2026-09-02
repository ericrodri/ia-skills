<?php

return [
    'title' => 'Cómo usar IA sin filtrar datos de clientes',
    'navTitle' => 'IA sin filtrar datos de clientes',
    'seoTitle' => 'IA y datos de clientes: qué puedes poner en el prompt y qué no',
    'description' => 'Qué datos de clientes puedes escribir en un chat de IA y cuáles no, con la Regla de 2 que marca la AEPD para los agentes y la lista de comprobación.',
    'excerpt' => 'La duda no es si la IA es legal, es qué escribes en la caja de texto. Los cuatro cajones en los que clasificar un dato antes de pegarlo, el umbral que marca la AEPD para los agentes y las medidas que caben en una empresa pequeña.',
    'category' => 'Cumplimiento',
    'published' => '2026-09-01',
    'updated' => '2026-09-01',
    'readingMinutes' => 14,
    'words' => 2237,
    'about' => 'Protección de datos e inteligencia artificial',
    'related' => ['ai-act-obligaciones-empresas', 'politica-de-uso-de-ia-en-la-empresa', 'ia-para-reuniones-y-actas'],
    'toc' => [
        'la-pregunta' => 'La pregunta no es «¿es legal usar IA?»',
        'que-pasa' => 'Qué pasa con lo que escribes en el prompt',
        'cuatro-cajones' => 'Clasifica antes de pegar: cuatro cajones',
        'regla-de-2' => 'La Regla de 2: el umbral de la AEPD para agentes',
        'shadow-leak' => 'La fuga que no parece una fuga',
        'medidas' => 'Medidas que sí caben en una empresa pequeña',
        'contrato' => 'Qué mirar en el contrato del proveedor',
        'checklist' => 'Lista de comprobación antes de abrir el chat',
    ],
    'faq' => [
        '¿Puedo pegar el correo de un cliente en ChatGPT para que me ayude a responder?' => 'Puedes, si antes le quitas lo que identifica a esa persona y lo que no hace falta para la tarea. Para redactar una respuesta a una queja no se necesita el nombre completo, el DNI ni el número de pedido: se necesita el problema. Sustituye los identificadores por marcadores del tipo [CLIENTE] o [PEDIDO] y pega solo eso. El resultado es igual de bueno y el dato personal no sale de tu ordenador.',
        '¿Vale con anonimizar el nombre?' => 'No siempre. Un dato deja de ser personal solo si la persona ya no es identificable, y a veces basta el contexto para reidentificarla: «el único cliente de Soria que factura más de un millón» no lleva nombre y señala a una empresa concreta. Cuando la combinación de datos restantes apunta a alguien, la seudonimización reduce el riesgo pero no te saca del RGPD.',
        '¿Qué cambia si uso un plan de empresa en vez de la versión gratuita?' => 'Cambia lo que el proveedor puede hacer con lo que escribes. Los planes de empresa suelen excluir por contrato el uso de tus datos para entrenar modelos y permiten firmar el contrato de encargado de tratamiento que exige el artículo 28 del RGPD. La versión gratuita rara vez ofrece ninguna de las dos cosas, y sin ellas no puedes tratar datos de clientes en esa herramienta.',
        '¿La AEPD ha dicho algo concreto sobre agentes de IA?' => 'Sí. En febrero de 2026 publicó unas orientaciones sobre inteligencia artificial agéntica desde la perspectiva de protección de datos: setenta y seis páginas que describen las vulnerabilidades propias de los agentes —memoria, autonomía, acceso a servicios externos—, las amenazas asociadas y un catálogo de medidas para responsables y encargados de tratamiento. Es la referencia más concreta que hay hoy en español.',
        '¿Hace falta una evaluación de impacto para usar un agente de IA?' => 'No en todos los casos. La AEPD es explícita en que ser una tecnología nueva no obliga por sí solo a hacer una EIPD: depende del tratamiento concreto en el que se incorpore el agente y del tipo de sistema. Lo que sí obliga es a rehacer el análisis de riesgo, porque meter un agente cambia la naturaleza del tratamiento.',
        '¿Y si un empleado ya ha pegado datos de clientes en un chat?' => 'Primero, mira si se ha producido una violación de seguridad de datos personales, porque si la hay tienes setenta y dos horas para notificarla. Después, revisa si la herramienta permite borrar la conversación y desactivar el historial. Y por último, escribe la norma que faltaba: casi siempre esto pasa porque nadie había dicho qué se podía pegar y qué no.',
    ],
    'ctaTitle' => 'Prompts que no te obligan a elegir entre útil y prudente',
    'ctaBody' => 'En el catálogo hay skills escritas con el dato mínimo en mente: plantillas con marcadores en lugar de datos reales, listas de comprobación y flujos revisables. Empieza por <a href="/profesiones/legal">Legal</a>, <a href="/profesiones/customer-support">Atención al cliente</a> o <a href="/profesiones/rrhh">RRHH</a>.',
    'body' => <<<'HTML'
<p>La escena se repite en cualquier oficina: alguien copia el correo de un cliente entero —nombre, teléfono, número de pedido, la queja y de paso la firma con el cargo— y lo pega en un chat de IA para que le ayude a redactar la respuesta. Tarda quince segundos y sale bien. El problema no es que salga mal; es que sale bien y por eso se repite mil veces.</p>

<p>Esta guía no va de si la inteligencia artificial es legal. Lo es. Va de la única decisión que toma de verdad cada persona de tu equipo varias veces al día: qué escribe en esa caja de texto.</p>

<h2 id="la-pregunta">La pregunta no es «¿es legal usar IA?»</h2>

<p>El RGPD no menciona la inteligencia artificial y no le hace falta. Lo que regula es el tratamiento de datos personales, y da igual que lo haga una hoja de cálculo, un becario o un modelo de lenguaje. Los principios son los mismos de siempre: necesitas una base jurídica, tratas solo los datos imprescindibles, informas a quien corresponde y proteges lo que guardas.</p>

<p>Lo que sí cambia con la IA es la <strong>facilidad</strong>. Enviar la base de datos de clientes a un tercero antes requería una decisión consciente y probablemente un correo con adjunto. Ahora requiere Ctrl+V. Cuando el coste de hacer algo baja a cero, la política deja de ser un documento y pasa a ser un hábito: si no está claro qué se puede pegar, se pegará todo.</p>

<p>El artículo 24 del RGPD pone la obligación en el sitio incómodo: el responsable del tratamiento tiene que aplicar medidas técnicas y organizativas apropiadas <em>y poder demostrarlo</em>, teniendo en cuenta la naturaleza, el ámbito, el contexto y los fines del tratamiento. Demostrarlo, no tener buenas intenciones.</p>

<h2 id="que-pasa">Qué pasa con lo que escribes en el prompt</h2>

<p>Hay tres destinos posibles para lo que escribes, y conviene saber en cuál estás:</p>

<ul>
    <li><strong>Se procesa y se descarta.</strong> El proveedor genera la respuesta y no conserva el contenido más allá de un periodo corto de retención por abuso o seguridad. Es lo habitual en los planes de empresa y de API.</li>
    <li><strong>Se conserva en el historial.</strong> Queda en tu cuenta, accesible para quien entre en ella, e incluido en cualquier copia de seguridad. No es una fuga, pero sí es una copia más de un dato que quizá no deberías tener duplicado.</li>
    <li><strong>Se usa para mejorar el modelo.</strong> Es lo que más asusta y lo que suele estar desactivado por contrato en los planes de pago para empresas. En las versiones gratuitas o de consumo, muchas veces está activado por defecto.</li>
</ul>

<p>La diferencia entre el primer caso y el tercero no la decide la tecnología: la decide el contrato que has firmado y la casilla que nadie ha ido a mirar en la configuración. Es la primera media hora de trabajo que merece la pena hacer.</p>

<p>Para el uso individual, la Agencia Española de Protección de Datos publicó un decálogo con una recomendación tajante: no compartir con herramientas de IA datos como el nombre completo, la dirección, el teléfono, el DNI o el NIE, ni imágenes de personas, ni información sensible de tipo médico, financiero o contractual, ni la geolocalización. Es un buen punto de partida para redactar la norma interna, porque está escrito en un idioma que se entiende sin abogado.</p>

<h2 id="cuatro-cajones">Clasifica antes de pegar: cuatro cajones</h2>

<p>Toda la política de uso cabe en cuatro categorías. Si tu equipo interioriza estas cuatro, has resuelto el noventa por ciento del riesgo:</p>

<figure>
<table>
    <thead>
        <tr><th>Cajón</th><th>Qué contiene</th><th>Qué se hace con ello</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>1. Público</strong></td><td>Lo que ya está en tu web, en el BOE o en una nota de prensa</td><td>Se pega tal cual, sin pensarlo</td></tr>
        <tr><td><strong>2. Interno no personal</strong></td><td>Procedimientos, plantillas, código propio, cifras agregadas</td><td>Se pega solo en herramientas con contrato de empresa</td></tr>
        <tr><td><strong>3. Personal</strong></td><td>Nombres, correos, teléfonos, DNI, historial de un cliente</td><td>Se sustituye por marcadores antes de pegar</td></tr>
        <tr><td><strong>4. Especialmente protegido</strong></td><td>Salud, ideología, afiliación sindical, orientación sexual, datos de menores, biometría</td><td>No se pega. Punto</td></tr>
    </tbody>
</table>
</figure>

<p>El cajón 3 es donde está el trabajo real, porque es el que la gente cree que necesita para que la respuesta sea buena. Casi nunca lo necesita. Prueba a comparar estos dos prompts:</p>

<pre><code>Mal:
Responde a esta queja de María Jiménez Ortega (maria.jimenez@ejemplo.es,
612 345 678), pedido 45-9912 del 14 de agosto: dice que el sofá llegó
con la tela rasgada y que ya llamó dos veces.

Bien:
Responde a esta queja de un cliente: recibió un sofá con la tela
rasgada y ya ha contactado dos veces sin respuesta. Tono: disculpa
directa, solución concreta, sin excusas. Deja [NOMBRE] y [PEDIDO]
como marcadores para rellenar.</code></pre>

<p>La segunda versión da una respuesta igual de buena o mejor, porque el modelo se centra en lo que importa en vez de repetir un número de pedido. Y el dato personal no ha salido de tu equipo. Esto es el principio de minimización del RGPD aplicado a la práctica: no es una traba burocrática, es que la mayoría de las veces el dato sobraba.</p>

<h2 id="regla-de-2">La Regla de 2: el umbral de la AEPD para agentes</h2>

<p>Todo lo anterior vale mientras la IA solo responde. Cuando pasa a actuar —leer tu correo, consultar el CRM, enviar respuestas— el análisis cambia, y aquí la AEPD ha dado la referencia más concreta que existe en español: sus orientaciones sobre inteligencia artificial agéntica desde la perspectiva de protección de datos, publicadas en febrero de 2026.</p>

<p>De ese documento, lo más útil para decidir rápido es lo que llaman la <strong>Regla de 2</strong>. Viene de una regla de ciberseguridad de navegadores formulada en 2021 y reformulada después para agentes. Se apoya en tres capacidades:</p>

<ol>
    <li><strong>Procesar automáticamente información que no controlas.</strong> Correos que entran de fuera, páginas web, documentos que envía un tercero.</li>
    <li><strong>Acceder a información sensible.</strong> Los sistemas internos, el CRM, los archivos del usuario, datos personales.</li>
    <li><strong>Ejecutar acciones automáticas.</strong> Enviar, escribir, publicar, modificar registros, dentro o fuera de la organización.</li>
</ol>

<p>La regla dice: <strong>un agente no debería tener las tres a la vez.</strong> Con dos se puede trabajar; con tres tienes una configuración que no debería permitirse. El ejemplo que usa la propia Agencia es un agente que responde correos automáticamente: si recibe correo sin garantías de que no traiga un ataque o una manipulación, además puede acceder sin restricciones a información sensible del usuario, y además puede iniciar acciones por su cuenta, tienes las tres.</p>

<p>Lo práctico de la regla es que te dice qué quitar, no solo que hay riesgo. Si tu agente lee correo externo y accede a datos sensibles, quítale la acción automática y mete revisión humana. Si accede a datos sensibles y actúa, entonces asegura la integridad de lo que entra. Si lee de fuera y actúa, córtale el acceso a los datos personales.</p>

<h2 id="shadow-leak">La fuga que no parece una fuga</h2>

<p>Hay un patrón que las mismas orientaciones describen y que casi nadie tiene en el radar: la exfiltración por goteo, o <em>shadow leak</em>. No hay un incidente, no salta ninguna alarma y ninguna respuesta concreta parece problemática. Lo que pasa es que a base de consultas fragmentadas y aparentemente inocuas, cada una autorizada, alguien va reconstruyendo información confidencial pieza a pieza.</p>

<p>Es un riesgo específico de los sistemas con memoria y con acceso amplio, y explica por qué la respuesta correcta no es solo «que no diga cosas secretas». Las medidas que apunta la AEPD van por otro lado: compartimentar la memoria del agente para que un tratamiento no vea el de al lado, fijar plazos de retención estrictos, poder desactivar el almacenamiento en memoria y aplicar una política selectiva de no registrar según qué.</p>

<h2 id="medidas">Medidas que sí caben en una empresa pequeña</h2>

<p>El catálogo completo de la Agencia es largo y está pensado también para organizaciones grandes. Estas son las que dan más protección por hora invertida si eres pequeño:</p>

<ul>
    <li><strong>Lectura amplia, escritura estrecha.</strong> Que el agente consulte lo que necesite, pero que enviar, borrar, publicar o pagar pase por una persona.</li>
    <li><strong>Cortacircuitos y límites de pasos.</strong> Mecanismos que paran la ejecución al detectar anomalías: bucles, desviación del objetivo, acceso masivo a datos. Un tope duro de pasos es la versión pobre y funciona.</li>
    <li><strong>El principio de los cuatro ojos.</strong> Para procesos automáticos con impacto real sobre personas, doble verificación por dos personas distintas. Cuesta poco y evita el sesgo de automatización, que es la tendencia a validar sin mirar.</li>
    <li><strong>Golden testing.</strong> Un juego fijo de casos con la respuesta correcta ya escrita, que se pasa cada vez que cambias el modelo o el prompt. Es la única forma de enterarte de que algo ha empeorado antes de que lo note un cliente.</li>
    <li><strong>Reversibilidad.</strong> Antes de dar una capacidad nueva al agente, pregunta cómo se deshace lo que haga. Si no hay respuesta, esa capacidad va con revisión humana.</li>
</ul>

<h2 id="contrato">Qué mirar en el contrato del proveedor</h2>

<p>Cuatro cosas, y se comprueban en una tarde:</p>

<ol>
    <li><strong>Contrato de encargado de tratamiento.</strong> El artículo 28 del RGPD lo exige cuando el proveedor trata datos personales por tu cuenta. Si no te lo ofrecen, esa herramienta no es para datos de clientes.</li>
    <li><strong>Uso para entrenamiento.</strong> Que esté excluido por escrito, no solo desactivado en un menú que cualquiera puede volver a activar.</li>
    <li><strong>Dónde se procesa.</strong> Si hay transferencia internacional, qué mecanismo la ampara.</li>
    <li><strong>Retención y borrado.</strong> Cuánto tiempo se conserva el contenido de las conversaciones y cómo se solicita su eliminación, que es lo que necesitarás el día que alguien ejerza su derecho de supresión.</li>
</ol>

<h2 id="checklist">Lista de comprobación antes de abrir el chat</h2>

<p>Cinco preguntas. Si alguna se responde «no lo sé», ahí está el trabajo pendiente:</p>

<ol>
    <li>¿En qué cajón de los cuatro está lo que voy a pegar?</li>
    <li>¿Necesito de verdad ese dato para que la respuesta sea útil, o va por inercia?</li>
    <li>¿La herramienta tiene contrato de empresa y el entrenamiento desactivado por escrito?</li>
    <li>Si esto es un agente y no un chat: ¿tiene las tres capacidades de la Regla de 2 a la vez?</li>
    <li>¿Podría explicar esta decisión en una inspección sin ponerme rojo?</li>
</ol>

<p>Cuando estas cinco están escritas y todo el mundo las conoce, la conversación deja de ser «la IA es peligrosa» y pasa a ser un procedimiento más. Que es exactamente lo que debería haber sido desde el principio.</p>

<p>El paso siguiente es ponerlo por escrito para el equipo: en <a href="/guias/politica-de-uso-de-ia-en-la-empresa">política de uso de IA en la empresa</a> está la plantilla y lo que exige la norma europea. Y si lo que tienes delante no es un chat sino algo que actúa por su cuenta, conviene entender antes <a href="/guias/que-es-un-agente-de-ia">qué es exactamente un agente de IA</a>.</p>

<p><em>Esta guía resume normativa y orientaciones públicas a fecha de 1 de septiembre de 2026. No es asesoramiento jurídico: para un tratamiento concreto, la validación corresponde a un profesional.</em></p>
HTML,
];
