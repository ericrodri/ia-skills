<?php

return [
    'title' => 'Qué es un agente de IA y en qué se diferencia de un chatbot',
    'navTitle' => 'Qué es un agente de IA',
    'seoTitle' => 'Qué es un agente de IA: guía práctica en español',
    'description' => 'Un agente de IA no responde: ejecuta. Qué lo diferencia de un chatbot, qué necesita para funcionar, en qué tareas rinde de verdad y dónde conviene no dejarlo solo.',
    'excerpt' => 'La diferencia entre un chatbot y un agente no está en el modelo, está en si puede tocar tus herramientas. Esto es lo que cambia cuando le das esa capacidad, y lo que conviene vigilar.',
    'category' => 'Fundamentos',
    'published' => '2026-08-27',
    'updated' => '2026-08-27',
    'readingMinutes' => 8,
    'words' => 1420,
    'about' => 'Agentes de IA',
    'related' => ['plugins-y-mcp-en-claude-code', 'automatizar-tareas-con-ia-en-el-trabajo', 'politica-de-uso-de-ia-en-la-empresa'],
    'toc' => [
        'que-es' => 'Qué es un agente de IA',
        'chatbot-vs-agente' => 'Chatbot, asistente y agente: las diferencias',
        'como-funciona' => 'El bucle que hace que un agente sea un agente',
        'que-necesita' => 'Qué necesita un agente para servir de algo',
        'casos' => 'Tareas donde un agente rinde de verdad',
        'limites' => 'Dónde no conviene dejarlo solo',
        'empezar' => 'Cómo empezar sin montar una infraestructura',
    ],
    'faq' => [
        '¿Un agente de IA es lo mismo que ChatGPT?' => 'No. ChatGPT es una interfaz de chat: tú preguntas, responde y ahí acaba. Se convierte en agente cuando le das herramientas con las que actuar —leer tus archivos, llamar a una API, ejecutar comandos— y le dejas encadenar varios pasos por su cuenta hasta terminar la tarea. El modelo de lenguaje es solo el motor; el agente es el motor más las manos.',
        '¿Necesito programar para usar un agente de IA?' => 'Para usar uno ya montado, no: herramientas como Claude Code o los agentes integrados en las suites de trabajo se configuran escribiendo texto. Para construir uno a medida que se conecte a los sistemas internos de tu empresa sí hace falta perfil técnico, sobre todo para decidir permisos y gestionar los fallos.',
        '¿Qué diferencia hay entre un agente y una automatización de toda la vida?' => 'Una automatización clásica sigue un camino fijo: si pasa A, haz B. Un agente decide el camino en cada ejecución según lo que se encuentra. Eso lo hace mejor para tareas con variabilidad —clasificar correos ambiguos, resumir documentos distintos cada vez— y peor para procesos donde quieres exactamente el mismo resultado siempre.',
        '¿Es seguro darle acceso a mis herramientas?' => 'Depende de qué permisos le des y de si hay revisión humana antes de las acciones irreversibles. La regla práctica: lectura amplia, escritura estrecha. Que pueda consultar todo lo que necesite, pero que enviar, borrar, publicar o pagar requiera tu confirmación explícita.',
        '¿Cuánto cuesta ejecutar un agente?' => 'Bastante más que una consulta de chat, porque el agente llama al modelo una vez por cada paso del bucle. Una tarea que en chat te cuesta una consulta puede costar quince o veinte en modo agente. Compensa cuando el tiempo humano que ahorra vale más que esa diferencia, lo que deja fuera casi todo lo que se hace a mano en menos de cinco minutos.',
    ],
    'ctaTitle' => 'Dale a tu agente instrucciones que ya funcionan',
    'ctaBody' => 'Un agente vale lo que valen las instrucciones que le das. En el catálogo hay skills y prompts escritos y votados por quien los usa a diario: empieza por <a href="/profesiones/desarrollo">Desarrollo</a>, <a href="/profesiones/customer-support">Atención al cliente</a> o <a href="/profesiones/finanzas">Finanzas</a>, las tres áreas donde los agentes están dando resultados más claros.',
    'body' => <<<'HTML'
<p>«Agente de IA» se ha convertido en la etiqueta que todo producto se pone encima desde que dejó de bastar con decir «con inteligencia artificial». Se la ponen chatbots de atención al cliente que llevan seis años funcionando igual, y se la ponen sistemas que de verdad hacen cosas. Conviene saber distinguirlos, porque el valor y el riesgo son completamente distintos.</p>

<p>La diferencia no está en el modelo. Detrás de un chatbot decente y de un agente serio puede haber exactamente el mismo modelo de lenguaje. Está en otra cosa.</p>

<h2 id="que-es">Qué es un agente de IA</h2>

<p>Un agente de IA es un sistema que recibe un objetivo —no una pregunta— y trabaja hasta cumplirlo: decide qué pasos dar, ejecuta acciones sobre herramientas reales, mira el resultado y corrige el rumbo si hace falta.</p>

<p>Las tres palabras que importan de esa definición:</p>

<ul>
    <li><strong>Objetivo.</strong> «Revisa los tickets sin responder de esta semana y contesta los que sean dudas de facturación» es un objetivo. «¿Cómo respondo a un cliente enfadado?» es una pregunta.</li>
    <li><strong>Herramientas.</strong> El agente puede leer un archivo, consultar una base de datos, llamar a una API, ejecutar un comando. Sin herramientas solo puede generar texto, y entonces no es un agente.</li>
    <li><strong>Iteración.</strong> Encadena pasos por su cuenta. Si el primer intento falla, lo ve y prueba otra cosa, sin que tú tengas que escribir el siguiente mensaje.</li>
</ul>

<h2 id="chatbot-vs-agente">Chatbot, asistente y agente: las diferencias</h2>

<figure>
<table>
    <thead>
        <tr><th></th><th>Chatbot</th><th>Asistente</th><th>Agente</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Qué recibe</strong></td><td>Una pregunta</td><td>Una petición concreta</td><td>Un objetivo</td></tr>
        <tr><td><strong>Qué devuelve</strong></td><td>Una respuesta</td><td>Un entregable: texto, código, análisis</td><td>Una tarea terminada en tus sistemas</td></tr>
        <tr><td><strong>Toca herramientas</strong></td><td>No</td><td>A veces, si se lo pides paso a paso</td><td>Sí, por decisión propia</td></tr>
        <tr><td><strong>Quién elige el siguiente paso</strong></td><td>Tú</td><td>Tú</td><td>Él</td></tr>
        <tr><td><strong>Cuándo termina</strong></td><td>Al responder</td><td>Al entregar</td><td>Cuando cumple el objetivo o se atasca</td></tr>
        <tr><td><strong>Si se equivoca</strong></td><td>Lees algo falso</td><td>Reescribes el entregable</td><td>Hay que deshacer acciones reales</td></tr>
    </tbody>
</table>
</figure>

<p>Esa última fila es la que no aparece en las presentaciones de producto y la que más debería pesar en la decisión. Un chatbot que se inventa una respuesta te hace perder cinco minutos. Un agente que se la inventa con permisos de escritura manda cuarenta correos equivocados.</p>

<h2 id="como-funciona">El bucle que hace que un agente sea un agente</h2>

<p>Por dentro casi todos los agentes hacen lo mismo, repetido:</p>

<ol>
    <li><strong>Observar.</strong> Lee el objetivo y el estado actual: los archivos, la respuesta de la última llamada, el error que acaba de salir.</li>
    <li><strong>Decidir.</strong> El modelo elige la siguiente acción entre las herramientas disponibles, o decide que ya ha terminado.</li>
    <li><strong>Actuar.</strong> Esa herramienta se ejecuta de verdad.</li>
    <li><strong>Incorporar el resultado.</strong> Lo que devuelva —incluido el fallo— entra en el contexto y arranca la siguiente vuelta.</li>
</ol>

<p>De este bucle salen dos consecuencias que explican casi todos los comportamientos raros que verás.</p>

<p><strong>El contexto se llena.</strong> Cada vuelta añade texto. En tareas largas el agente empieza a olvidar el principio o a repetir pasos que ya había hecho. Por eso funcionan mejor las tareas acotadas: quince pasos, no doscientos.</p>

<p><strong>Los errores se acumulan.</strong> Si en el paso tres interpreta mal un dato, los pasos cuatro a diez trabajan sobre esa interpretación. Nadie comprueba a mitad de camino salvo que tú lo pongas.</p>

<h2 id="que-necesita">Qué necesita un agente para servir de algo</h2>

<p>Tres piezas, y las tres se descuidan por igual.</p>

<p><strong>Herramientas con buena descripción.</strong> El agente elige entre ellas leyendo su descripción, igual que decide cargar un skill leyendo la suya. Una herramienta llamada <code>consultar_datos</code> con la descripción «consulta datos» se usará mal o no se usará. El estándar que se ha impuesto para conectar herramientas externas es <a href="/guias/plugins-y-mcp-en-claude-code">MCP</a>, y ahí la calidad de las descripciones es la mitad del trabajo.</p>

<p><strong>Instrucciones sobre el criterio, no solo sobre el formato.</strong> «Contesta los tickets de facturación» deja fuera lo importante: qué hacer si el cliente pide un reembolso, cuándo escalar a una persona, qué tono usar con una cuenta que lleva dos años con nosotros. Eso es justo lo que resuelve <a href="/guias/que-son-los-skills-de-claude-code">un skill</a>: un procedimiento fijo que el agente carga cuando toca.</p>

<p><strong>Un perímetro de permisos.</strong> Lectura amplia, escritura estrecha. Que consulte lo que necesite; que enviar, borrar, publicar o pagar pase por ti. Esto no es una recomendación de manual: es la diferencia entre un incidente y una anécdota.</p>

<h2 id="casos">Tareas donde un agente rinde de verdad</h2>

<p>El patrón común de las que salen bien: <strong>muchos pasos mecánicos, criterio claro y resultado verificable</strong>.</p>

<ul>
    <li><strong>Desarrollo.</strong> Reproducir un bug a partir del informe, localizar la causa y proponer el parche con su test. El resultado se verifica solo: o los tests pasan o no.</li>
    <li><strong>Atención al cliente.</strong> Triar la bandeja: clasificar, buscar el pedido en el sistema, redactar el borrador de respuesta y dejarlo en cola para revisión humana.</li>
    <li><strong>Finanzas y operaciones.</strong> Conciliar facturas contra extractos y sacar solo las discrepancias. El trabajo aburrido es el 95 %; el criterio, el 5 %.</li>
    <li><strong>Marketing.</strong> Rastrear qué han publicado cinco competidores este mes y devolver un resumen con enlaces, no con impresiones.</li>
    <li><strong>Recursos humanos.</strong> Cribar candidaturas contra criterios escritos de antemano, dejando por escrito por qué descarta cada una.</li>
</ul>

<p>En cuatro de los cinco casos el entregable es un borrador o una lista para revisar, no una acción consumada. Ese es el punto dulce hoy.</p>

<h2 id="limites">Dónde no conviene dejarlo solo</h2>

<ul>
    <li><strong>Decisiones con consecuencia legal o económica directa.</strong> Aprobar un gasto, firmar, despedir, publicar precios. Que prepare el expediente; que decida una persona.</li>
    <li><strong>Tareas donde el error es silencioso.</strong> Si un fallo no se nota hasta el cierre trimestral, el agente necesita comprobación intermedia obligatoria.</li>
    <li><strong>Procesos que exigen un resultado idéntico siempre.</strong> Para eso hay scripts, y son más baratos, más rápidos y auditables.</li>
    <li><strong>Datos que no pueden salir de casa.</strong> Antes de conectar nada, mira qué se envía al proveedor del modelo y qué política de retención tiene.</li>
</ul>

<h2 id="empezar">Cómo empezar sin montar una infraestructura</h2>

<p>No hace falta un proyecto de seis meses. La ruta corta:</p>

<ol>
    <li><strong>Elige una tarea que hagas cada semana y odies.</strong> Con pasos claros y un resultado que puedas comprobar de un vistazo.</li>
    <li><strong>Escríbela como procedimiento</strong>, con criterios y casos límite. Si no eres capaz de explicársela por escrito a alguien que entra nuevo, el agente tampoco la va a entender.</li>
    <li><strong>Empieza en modo borrador.</strong> Que prepare, no que ejecute. Durante dos semanas lo revisas todo.</li>
    <li><strong>Cuenta los fallos.</strong> Si en veinte ejecuciones no ha metido la pata en nada irreversible, amplía permisos en un solo punto. Si ha fallado, arregla las instrucciones, no el modelo.</li>
</ol>

<p>El método completo, con los controles que conviene dejar puestos antes de soltarle la mano, está en <a href="/guias/automatizar-tareas-con-ia-en-el-trabajo">cómo automatizar tareas con IA en el trabajo</a>.</p>

<p>Y si el agente va a trabajar con datos de la empresa, la conversación pendiente no es técnica: es qué permisos tiene, con qué datos y quién responde de lo que haga. Eso se resuelve por escrito, con una <a href="/guias/politica-de-uso-de-ia-en-la-empresa">política de uso de IA</a>.</p>
HTML,
];
