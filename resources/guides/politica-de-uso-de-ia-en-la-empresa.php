<?php

return [
    'title' => 'Política de uso de IA en la empresa: qué escribir y qué exige la norma',
    'navTitle' => 'Política de uso de IA',
    'seoTitle' => 'Política de uso de IA en la empresa: guía y plantilla',
    'description' => 'Plantilla de una página y el método para redactar una política de uso de IA que la gente respete: qué datos, qué herramientas y quién aprueba.',
    'excerpt' => 'Tu equipo ya está usando IA, con política o sin ella. La diferencia entre tenerla y no tenerla es saber con qué datos y poder demostrarlo.',
    'category' => 'Método',
    'published' => '2026-08-31',
    'updated' => '2026-08-31',
    'readingMinutes' => 13,
    'words' => 2170,
    'about' => 'Gobernanza de la inteligencia artificial',
    'related' => ['ai-act-obligaciones-empresas', 'usar-ia-sin-filtrar-datos-de-clientes', 'automatizar-tareas-con-ia-en-el-trabajo'],
    'toc' => [
        'por-que' => 'Por qué dos páginas evitan casi todos los problemas',
        'norma' => 'Qué exige la norma a día de hoy',
        'inventario' => 'Paso 1: inventario de lo que ya se usa',
        'datos' => 'Paso 2: clasificar los datos, no las herramientas',
        'herramientas' => 'Paso 3: la lista de herramientas aprobadas',
        'decisiones' => 'Paso 4: quién aprueba y quién responde',
        'formacion' => 'Paso 5: formación y registro',
        'plantilla' => 'Plantilla de una página para copiar',
        'errores' => 'Errores que convierten la política en papel mojado',
    ],
    'faq' => [
        '¿Necesita una pyme de quince personas una política de IA?' => 'Sí, y le cuesta una mañana. No por la norma —aunque la obligación de alfabetización en IA aplica con independencia del tamaño— sino porque en una empresa de quince personas basta un contrato pegado en una herramienta gratuita para tener un problema con un cliente. Dos páginas bien escritas y firmadas resuelven el 90% del riesgo real.',
        '¿Puedo prohibir la IA y quedarme tranquilo?' => 'Puedes prohibirla, pero tranquilo no te vas a quedar. La prohibición sin alternativa produce uso en la sombra: la gente sigue usando herramientas desde el móvil y sin dejar rastro, que es exactamente el escenario que querías evitar. Una lista corta de herramientas aprobadas y una regla clara sobre datos funciona mejor que un «no» general.',
        '¿Los datos que pegamos se usan para entrenar modelos?' => 'Depende del proveedor, del plan y de la configuración, y cambia con el tiempo, así que no se puede responder de una vez para siempre. Los planes de empresa suelen ofrecer condiciones distintas de las de los planes de consumo en este punto. Lo que sí puedes hacer es dejarlo por escrito en la política: qué proveedor, con qué plan, qué dice su contrato y quién revisa que siga diciendo lo mismo cada seis meses.',
        '¿Qué cambió el 2 de agosto de 2026?' => 'Entraron en aplicación las obligaciones de transparencia del artículo 50 del Reglamento europeo de IA: informar cuando alguien está interactuando con un sistema de IA y etiquetar el contenido sintético. En España, la AESIA es la autoridad que supervisa el reglamento, y la AEPD sigue siendo la competente en protección de datos: los dos marcos se aplican a la vez.',
        '¿Hay que etiquetar todo el contenido hecho con IA?' => 'No todo, y aquí conviene leer el texto en vez de guiarse por titulares: las obligaciones de transparencia se centran en la interacción con sistemas de IA y en el contenido sintético —imagen, audio o vídeo generados o manipulados—, con matices según el caso de uso. Para trabajo interno ordinario no aplica lo mismo que para una campaña pública. Si publicas material generado de cara al cliente, esa es la conversación que toca tener con quien lleve el asunto legal.',
        '¿Quién responde si la IA se equivoca?' => 'La persona que firmó el trabajo y la empresa que lo entregó. Ninguna política traslada la responsabilidad al proveedor del modelo, y por eso el punto de revisión humana no es burocracia: es el mecanismo que hace que el error se detecte antes de salir. Una política que no dice quién revisa qué, no dice nada.',
    ],
    'ctaTitle' => 'La política dice qué se puede hacer; los prompts, cómo hacerlo bien',
    'ctaBody' => 'Una vez definido el marco, lo que falta es material aprobado que la gente use. En <a href="/profesiones/legal">Legal</a> y <a href="/profesiones/rrhh">Recursos Humanos</a> están los prompts mejor valorados para revisión documental, políticas internas y comunicación al equipo.',
    'body' => <<<'HTML'
<p>Tu equipo ya está usando inteligencia artificial. Con política o sin ella, alguien pegó ayer un contrato en un chat para que se lo resumiera, alguien redactó una oferta con un asistente y alguien más subió un CSV con datos de clientes. La pregunta no es si se usa, es si sabes con qué datos se está usando y si podrías demostrarlo si te lo preguntan.</p>

<p>Una política de uso de IA no es un documento de veinte páginas. Es una hoja que responde a cuatro preguntas —qué herramientas, con qué datos, quién aprueba y quién revisa— y un registro que demuestre que la gente la conoce.</p>

<p><em>Lo que sigue es un resumen divulgativo con fecha de agosto de 2026, no asesoramiento jurídico. Para decisiones concretas, consulta a quien lleve el asunto legal en tu organización.</em></p>

<h2 id="por-que">Por qué dos páginas evitan casi todos los problemas</h2>

<p>Los incidentes que se ven en las empresas casi nunca vienen de un algoritmo sofisticado. Vienen de cuatro cosas mundanas:</p>

<ul>
    <li><strong>Datos donde no debían estar.</strong> Información personal o confidencial pegada en una herramienta que nadie ha revisado.</li>
    <li><strong>Salida no revisada.</strong> Una cifra inventada que llega al cliente en un informe con el logo de la empresa.</li>
    <li><strong>Herramientas en la sombra.</strong> Quince suscripciones personales que nadie ha inventariado y que se van con la persona cuando se marcha.</li>
    <li><strong>Decisiones sin trazabilidad.</strong> Un descarte en un proceso de selección o una denegación de crédito sin poder explicar cómo se llegó ahí.</li>
</ul>

<p>Los cuatro se previenen con reglas cortas y comprobables. Ninguno se previene con un documento largo que nadie lee.</p>

<h2 id="norma">Qué exige la norma a día de hoy</h2>

<p>En la Unión Europea conviven dos marcos que se aplican a la vez: el Reglamento de IA y el Reglamento general de protección de datos. Cumplir uno no implica cumplir el otro. Las fechas que importan para una empresa que <em>usa</em> IA —no que la fabrica— son estas:</p>

<figure>
<table>
    <thead>
        <tr><th>Fecha</th><th>Qué aplica</th></tr>
    </thead>
    <tbody>
        <tr><td>2 de febrero de 2025</td><td>Prácticas prohibidas y obligación de alfabetización en IA del personal que usa estos sistemas (artículo 4)</td></tr>
        <tr><td>2 de agosto de 2026</td><td>Obligaciones de transparencia del artículo 50: informar de la interacción con IA y etiquetar contenido sintético</td></tr>
        <tr><td>2 de diciembre de 2027</td><td>Obligaciones de los sistemas de alto riesgo del Anexo III, aplazadas desde 2026 por el paquete Ómnibus Digital (Reglamento UE 2026/1744, en vigor el 27 de julio de 2026)</td></tr>
        <tr><td>2 de agosto de 2028</td><td>Alto riesgo del Anexo I: IA integrada en productos ya regulados</td></tr>
    </tbody>
</table>
</figure>

<p>Dos consecuencias prácticas. La primera: el aplazamiento del alto riesgo no aplaza lo que afecta a la mayoría de las empresas, que es la transparencia, la formación y las prohibiciones. La segunda: si usas IA en selección de personal, evaluación del desempeño, concesión de crédito o acceso a servicios esenciales, estás mirando la casilla de alto riesgo y esa conversación es más larga que esta guía.</p>

<p>En España la supervisión del reglamento recae en la AESIA, y la protección de datos sigue siendo competencia de la AEPD. Las sanciones del reglamento llegan, en el tramo más grave de las prácticas prohibidas, hasta el 7% de la facturación mundial anual. La cifra impresiona y casi nunca es el riesgo real de una pyme; el riesgo real es un cliente que te pregunta qué hiciste con sus datos y no tener respuesta.</p>

<h2 id="inventario">Paso 1: inventario de lo que ya se usa</h2>

<p>Antes de redactar nada, averigua qué hay. Se hace con una pregunta abierta y sin sanción, porque en cuanto huele a auditoría la gente deja de contarlo:</p>

<blockquote>
<p>«Estamos ordenando el uso de herramientas de IA. Dinos qué usas, para qué y si es cuenta personal o de empresa. No hay problema por lo que digas; sí lo habrá por lo que no sepamos.»</p>
</blockquote>

<p>Cruza las respuestas con dos fuentes objetivas: los gastos en tarjeta y, si es posible, las aplicaciones conectadas a las cuentas corporativas. Es normal encontrar el triple de herramientas de las que pensabas. También es normal descubrir que la mitad del uso está en una tarea que nadie sabía que se hacía a mano.</p>

<h2 id="datos">Paso 2: clasificar los datos, no las herramientas</h2>

<p>El error más común es escribir la política como una lista de herramientas permitidas. Se queda obsoleta en un mes. Lo que aguanta es una clasificación de datos, porque los datos no cambian de nombre cada trimestre. Tres niveles bastan:</p>

<figure>
<table>
    <thead>
        <tr><th>Nivel</th><th>Qué incluye</th><th>Regla</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Verde</strong></td><td>Información pública o interna sin datos personales ni secretos: documentación pública, textos de marketing, código de ejemplo</td><td>Uso libre con herramientas aprobadas</td></tr>
        <tr><td><strong>Ámbar</strong></td><td>Información interna sensible sin datos personales: cifras no publicadas, planes, código propietario</td><td>Solo en herramientas aprobadas con contrato de empresa; nunca en cuentas personales</td></tr>
        <tr><td><strong>Rojo</strong></td><td>Datos personales, salud, nóminas, información de clientes sujeta a confidencialidad, credenciales</td><td>Prohibido salvo autorización expresa y por escrito, con base legal identificada</td></tr>
    </tbody>
</table>
</figure>

<p>Una regla que la gente recuerda de verdad: <strong>si no lo enviarías por correo a un proveedor externo sin pensarlo, no lo pegues en una IA</strong>. No es jurídicamente exhaustiva, pero acierta en el 95% de los casos y se retiene después de una sola lectura, que es más de lo que consigue la mayoría de las políticas.</p>

<h2 id="herramientas">Paso 3: la lista de herramientas aprobadas</h2>

<p>Corta y con nombre y apellidos. Para cada herramienta, cuatro datos: para qué se aprueba, con qué nivel de datos, qué plan (el de empresa y el de consumo no tienen las mismas condiciones) y quién es el responsable interno. Añade una fila de «pendientes de evaluación» para que pedir una nueva sea un trámite de días y no una batalla.</p>

<p>Lo que aquí se decide de verdad es el camino de entrada: si aprobar una herramienta tarda tres meses, la política ya ha fracasado, porque el trabajo no espera. Un formulario de cinco preguntas y una respuesta en una semana mantiene el sistema vivo.</p>

<h2 id="decisiones">Paso 4: quién aprueba y quién responde</h2>

<p>Tres papeles, que en una empresa pequeña pueden recaer en dos personas:</p>

<ul>
    <li><strong>Responsable de la política.</strong> La mantiene, la revisa cada seis meses y decide en las dudas. Con nombre, no «el comité».</li>
    <li><strong>Aprobador de herramientas.</strong> Da el sí o el no sobre una petición nueva, con criterios escritos: qué datos toca, qué dice el contrato del proveedor, dónde se alojan los datos.</li>
    <li><strong>Revisor de la salida.</strong> Quien firma el trabajo. Aquí está la regla que evita el 90% de los incidentes visibles: <em>ningún resultado generado por IA sale de la empresa sin que una persona con criterio lo haya leído y se haga responsable</em>.</li>
</ul>

<p>Y una regla para los agentes, que es lo que viene ahora: cuanta más autonomía tiene un sistema, más importa qué permisos le has dado. Un asistente que solo lee es un riesgo de confidencialidad; uno que puede escribir, borrar o enviar es un riesgo operativo. La lógica de acotar permisos está desarrollada en <a href="/guias/que-es-un-agente-de-ia">qué es un agente de IA</a> y en los controles de <a href="/guias/automatizar-tareas-con-ia-en-el-trabajo">automatizar tareas con IA</a>.</p>

<h2 id="formacion">Paso 5: formación y registro</h2>

<p>La obligación de alfabetización en IA no exige un máster: exige que quien usa estos sistemas entienda lo que hace, sus límites y sus riesgos, de forma proporcionada al puesto. Lo que el artículo 4 dice exactamente y lo que se te puede pedir como evidencia está desglosado en la <a href="/guias/ai-act-obligaciones-empresas">guía del AI Act para empresas</a>. En la práctica, y para poder demostrarlo:</p>

<ol>
    <li><strong>Una sesión de una hora</strong> por área, con ejemplos de su trabajo real y no diapositivas genéricas.</li>
    <li><strong>Un documento de dos páginas</strong> —el que sale del apartado siguiente— enviado y con acuse de lectura.</li>
    <li><strong>Un registro sencillo:</strong> quién asistió, cuándo, qué versión de la política, qué herramientas estaban aprobadas en esa fecha. Una hoja de cálculo cumple.</li>
    <li><strong>Una revisión semestral</strong> con fecha en el calendario. Sin fecha no ocurre.</li>
</ol>

<h2 id="plantilla">Plantilla de una página para copiar</h2>

<p>Adáptala, ponle nombres y fechas, y hazla circular:</p>

<blockquote>
<p><strong>Política de uso de IA — [Empresa] — v1, [fecha]</strong></p>
<p><strong>1. Alcance.</strong> Aplica a toda persona que trabaje para [Empresa], incluidos colaboradores externos, cuando use sistemas de IA para tareas de la empresa.</p>
<p><strong>2. Herramientas aprobadas.</strong> [Lista con herramienta, uso, nivel de datos y responsable]. Para usar cualquier otra, solicítalo a [nombre] mediante [formulario]. Respuesta en [5] días laborables.</p>
<p><strong>3. Datos.</strong> Verde: uso libre en herramientas aprobadas. Ámbar: solo en herramientas aprobadas con plan de empresa. Rojo (datos personales, credenciales, información confidencial de clientes): prohibido sin autorización escrita de [nombre]. Regla rápida: si no lo enviarías por correo a un proveedor externo, no lo pegues en una IA.</p>
<p><strong>4. Revisión.</strong> Ningún contenido generado con IA se publica ni se envía a un cliente sin revisión de una persona responsable, que responde del resultado como de cualquier otro trabajo propio. Se verifican especialmente cifras, citas, nombres y referencias legales.</p>
<p><strong>5. Transparencia.</strong> [Indicar cuándo se informa al interlocutor de que interactúa con un sistema de IA y cómo se etiqueta el contenido sintético publicado].</p>
<p><strong>6. Decisiones sobre personas.</strong> No se usa IA como criterio único en selección, evaluación del desempeño ni decisiones disciplinarias. Cualquier uso de apoyo en estos ámbitos requiere autorización de [nombre] y queda documentado.</p>
<p><strong>7. Agentes y automatizaciones.</strong> Toda automatización que escriba, borre o envíe algo fuera de la empresa necesita aprobación previa, un responsable con nombre y un registro de lo que hace.</p>
<p><strong>8. Incidentes.</strong> Si crees que se han expuesto datos indebidamente, comunícalo a [nombre/correo] el mismo día. Comunicar de buena fe no conlleva sanción; ocultarlo, sí.</p>
<p><strong>9. Formación.</strong> Toda persona incluida en el alcance completa la sesión de alfabetización en IA antes de usar estas herramientas para trabajo con datos ámbar o rojos.</p>
<p><strong>9 bis. Datos de clientes.</strong> Antes de pegar nada que identifique a una persona, se sustituye por marcadores. El criterio completo, con los cuatro cajones de clasificación y el umbral que la AEPD marca para los agentes, está en <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">cómo usar IA sin filtrar datos de clientes</a>.</p>

<p><strong>10. Vigencia.</strong> Revisión cada seis meses. Responsable: [nombre]. Próxima revisión: [fecha].</p>
</blockquote>

<h2 id="errores">Errores que convierten la política en papel mojado</h2>

<ol>
    <li><strong>Escribirla como un documento legal.</strong> Si hace falta un abogado para saber si puedes pegar un correo de cliente, nadie la consultará: preguntarán al compañero de al lado.</li>
    <li><strong>Prohibir sin ofrecer alternativa.</strong> El uso no desaparece, se esconde. Y lo que se esconde no se puede supervisar.</li>
    <li><strong>Listar herramientas sin clasificar datos.</strong> La lista caduca; la clasificación aguanta años.</li>
    <li><strong>No poner nombres.</strong> «El área correspondiente aprobará» significa que nadie aprueba y que todo el mundo improvisa.</li>
    <li><strong>Olvidar a los agentes.</strong> Casi todas las políticas están escritas pensando en un chat, cuando el cambio de escala viene de sistemas que actúan solos. Los permisos son la parte que hay que revisar.</li>
    <li><strong>Redactarla y no volver a mirarla.</strong> Sin revisión semestral, en un año la política describe herramientas que ya nadie usa y no menciona las que usa todo el mundo.</li>
</ol>
HTML,
];
