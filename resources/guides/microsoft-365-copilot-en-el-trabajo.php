<?php

return [
    'title' => 'Microsoft 365 Copilot: qué hace de verdad en Word, Excel y Outlook',
    'navTitle' => 'Microsoft 365 Copilot',
    'seoTitle' => 'Microsoft 365 Copilot: qué hace y cuándo compensa',
    'description' => 'Hay seis productos llamados Copilot y solo uno se paga aparte. Qué hace en Word, Excel y Outlook, dónde falla y cuándo sale a cuenta la licencia.',
    'excerpt' => 'El problema de Copilot no es lo que hace: es que hay seis productos con ese nombre y casi nadie sabe cuál tiene contratado. Desambiguación, capacidades reales por aplicación, el riesgo de permisos que nadie mira antes de comprar y el cálculo de cuándo compensa.',
    'category' => 'Herramientas',
    'published' => '2026-09-15',
    'updated' => '2026-09-15',
    'readingMinutes' => 13,
    'words' => 2224,
    'about' => 'Microsoft 365 Copilot',
    'related' => ['ia-en-excel-y-google-sheets', 'ia-para-reuniones-y-actas', 'claude-vs-chatgpt-para-trabajar'],
    'toc' => [
        'que-copilot' => 'Primero: qué Copilot tienes',
        'como-funciona' => 'De dónde saca lo que sabe de tu empresa',
        'por-aplicacion' => 'Qué hace bien en cada aplicación',
        'donde-falla' => 'Dónde falla, y falla bastante',
        'permisos' => 'El problema de permisos que nadie mira antes de comprar',
        'precio' => 'Qué cuesta y cuándo compensa',
        'vs-chatgpt' => 'Copilot, ChatGPT o Claude: cuál para qué',
        'piloto' => 'Un piloto de seis semanas que sí decide',
    ],
    'faq' => [
        '¿Microsoft 365 Copilot es gratis?' => 'No, y aquí está casi toda la confusión. El Copilot gratuito —el de copilot.microsoft.com, el botón de Windows y el Copilot Chat que aparece dentro de las aplicaciones— te da un chat con modelos potentes y, en la versión incluida con las licencias de empresa, protección de datos comercial. Lo que se paga aparte es Microsoft 365 Copilot: la licencia que le permite leer tus correos, tus archivos de SharePoint y tus reuniones de Teams para trabajar con ellos. La diferencia no está en el modelo, está en el acceso a tus datos.',
        '¿Cuánto cuesta Microsoft 365 Copilot por usuario?' => 'El plan para empresa ronda los 30 $ por usuario y mes con compromiso anual, y el plan de negocio estaba en 18 $ como precio promocional hasta mediados de 2026, para pasar después a unos 21 $. Microsoft ha anunciado además subidas generales en los planes comerciales de Microsoft 365 a partir del 1 de julio de 2026. Consulta la página oficial de precios antes de presupuestar: estas cifras se mueven y cambian según país y tipo de contrato.',
        '¿Copilot puede leer todos los archivos de mi empresa?' => 'Puede leer todo aquello a lo que la persona que pregunta ya tenía acceso, ni un archivo más. El problema es que en la mayoría de organizaciones ese «ya tenía acceso» es mucho más amplio de lo que nadie cree, porque nunca se revisó. Copilot no rompe los permisos: los hace visibles de golpe. Auditar carpetas compartidas y enlaces abiertos es el paso previo obligatorio, no una tarea posterior.',
        '¿Copilot en Excel sirve para analizar datos de verdad?' => 'Sirve si los datos están limpios y en una tabla con nombre, con encabezados de una sola fila y sin celdas combinadas. En ese escenario explica fórmulas, genera las complicadas, resume, detecta patrones y monta gráficos sin que toques la sintaxis. Sobre una hoja real con datos sucios, rangos sueltos y subtotales intercalados rinde bastante peor que subir el archivo a un chat generalista y pedir el análisis.',
        '¿Qué diferencia hay entre Copilot Chat y Microsoft 365 Copilot?' => 'Copilot Chat es el chat incluido: responde, redacta y razona, pero no conoce el contenido de tu organización salvo lo que le pegues. Microsoft 365 Copilot es la licencia de pago que añade el acceso a tus correos, archivos, chats y reuniones, y con él los resúmenes de Teams, la redacción sobre documentos propios y el Modo Agente para generar documentos y presentaciones paso a paso.',
        '¿Compensa Copilot frente a pagar ChatGPT o Claude?' => 'Depende de si el valor está en el texto o en el contexto. Si lo que necesitas es escribir, analizar y razonar mejor, un chat generalista cuesta la mitad y suele rendir igual o más. Si el valor está en que la herramienta ya sepa qué se dijo en la reunión del martes y qué pone en el contrato que está en SharePoint, eso no lo replica una suscripción de chat sin que alguien se pase el día copiando y pegando. Muchas empresas acaban con las dos cosas: licencias de Copilot para quien vive en Outlook y Teams, y un chat generalista para quien produce.',
    ],
    'ctaTitle' => 'La licencia no escribe los prompts por ti',
    'ctaBody' => 'Copilot se paga por usuario, pero el rendimiento lo marca lo que le pides. En el catálogo hay prompts y skills probados por profesionales para las tareas donde más se usa: <a href="/profesiones/finanzas">Finanzas</a>, <a href="/profesiones/rrhh">RRHH</a>, <a href="/profesiones/ventas">Ventas</a> y <a href="/profesiones/product-management">Product Management</a>.',
    'body' => <<<'HTML'
<p>Microsoft le ha puesto el nombre «Copilot» a seis productos distintos, algunos incluidos y otros de pago, algunos que ven tus archivos y otros que no. El resultado previsible es que media empresa cree que ya tiene Copilot cuando tiene otro, y la otra media paga por uno que usa como si fuera el gratuito.</p>

<p>Así que antes de nada, la desambiguación. Es la parte más aburrida de esta guía y la que más dinero ahorra.</p>

<h2 id="que-copilot">Primero: qué Copilot tienes</h2>

<figure>
<table>
    <thead>
        <tr><th>Producto</th><th>Qué es</th><th>¿Ve tus datos?</th><th>Coste</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Copilot</strong> (web y Windows)</td><td>Chat de consumo con modelos de OpenAI</td><td>No</td><td>Gratis</td></tr>
        <tr><td><strong>Copilot Chat</strong></td><td>El mismo chat dentro de Word, Excel, PowerPoint, Outlook y OneNote, con protección de datos comercial</td><td>Solo lo que pegues o el archivo abierto, según el plan</td><td>Incluido en licencias de empresa</td></tr>
        <tr><td><strong>Microsoft 365 Copilot</strong></td><td>La licencia de pago: acceso a correo, archivos, chats y reuniones, Modo Agente y resúmenes de Teams</td><td>Sí, todo aquello a lo que tú ya accedías</td><td>Por usuario y mes</td></tr>
        <tr><td><strong>Copilot Studio</strong></td><td>Herramienta para construir agentes propios sobre datos de la empresa</td><td>Lo que le conectes</td><td>Aparte, por consumo</td></tr>
        <tr><td><strong>GitHub Copilot</strong></td><td>Asistente de programación en el editor</td><td>Tu código</td><td>Aparte</td></tr>
        <tr><td><strong>Security Copilot</strong></td><td>Agentes dentro de Defender, Intune y Purview para equipos de seguridad</td><td>Telemetría de seguridad</td><td>Aparte</td></tr>
    </tbody>
</table>
</figure>

<p>La frontera que importa es la tercera fila. Todo lo demás son variantes de «un chat»; <strong>Microsoft 365 Copilot es lo único que compra contexto</strong>, y el contexto es lo único que un chat generalista no puede darte sin que alguien copie y pegue durante media hora.</p>

<p>Regla rápida para saber cuál tienes: si le preguntas «¿qué correos importantes he recibido esta semana?» y te contesta con correos reales, tienes la licencia de pago. Si te explica cómo revisar tu bandeja, no.</p>

<h2 id="como-funciona">De dónde saca lo que sabe de tu empresa</h2>

<p>Conviene entenderlo porque explica casi todos sus aciertos y todos sus fallos. Cuando preguntas algo, Copilot no «sabe» nada de tu organización: busca. Recupera los correos, archivos y mensajes relevantes a los que tu usuario tiene acceso, los mete en el contexto del modelo junto a tu pregunta, y el modelo responde con eso delante.</p>

<p>De ahí se derivan tres consecuencias prácticas:</p>

<ul>
    <li><strong>Si el documento no está donde busca, no existe.</strong> Lo que vive en el disco duro de alguien, en un correo eliminado o en una herramienta de terceros no entra. Copilot es tan bueno como ordenado esté tu SharePoint.</li>
    <li><strong>Si la búsqueda recupera lo que no era, la respuesta sale mal con total aplomo.</strong> No se equivoca el modelo: se equivoca la recuperación, y el resultado es idéntico al de una alucinación —conviene tener presente <a href="/guias/alucinaciones-de-la-ia">por qué ocurren y cómo verificar</a>.</li>
    <li><strong>Si tus permisos son demasiado amplios, Copilot te lo va a demostrar.</strong> A eso vamos en un momento.</li>
</ul>

<h2 id="por-aplicacion">Qué hace bien en cada aplicación</h2>

<figure>
<table>
    <thead>
        <tr><th>Aplicación</th><th>Lo que hace bien</th><th>Lo que no conviene esperar</th></tr>
    </thead>
    <tbody>
        <tr><td><strong>Outlook</strong></td><td>Resumir hilos largos, redactar respuestas con el tono ajustado, extraer lo pendiente de una conversación de treinta correos</td><td>Que decida por ti qué es urgente: prioriza por señales superficiales</td></tr>
        <tr><td><strong>Teams</strong></td><td>Resumen de reunión, acuerdos y tareas con responsable, y ponerte al día de lo que te perdiste</td><td>Actas literales fiables si hay varios acentos o se solapan voces</td></tr>
        <tr><td><strong>Word</strong></td><td>Primer borrador a partir de un guion, reescrituras, cambio de tono, resumen de documentos largos, redacción basada en otros archivos tuyos</td><td>Un documento final publicable sin revisión: el borrador es correcto y genérico</td></tr>
        <tr><td><strong>Excel</strong></td><td>Explicar y generar fórmulas complejas, resumir, detectar patrones, gráficos y análisis en lenguaje natural sobre datos limpios</td><td>Trabajo fino sobre hojas desordenadas o con celdas combinadas</td></tr>
        <tr><td><strong>PowerPoint</strong></td><td>Convertir un documento en un esqueleto de presentación y aplicar plantilla corporativa</td><td>Un diseño que no haya que rehacer: la estructura sirve, el acabado no</td></tr>
    </tbody>
</table>
</figure>

<p>El <strong>Modo Agente</strong>, disponible en las aplicaciones de escritorio con la licencia de pago, sube un escalón: en lugar de devolverte un bloque de texto, va construyendo el documento o la presentación por pasos y te deja corregir el rumbo por el camino. Es útil para entregables largos con estructura conocida —una propuesta, un informe mensual— y sigue necesitando que alguien verifique cada dato que afirme.</p>

<p>Si el uso principal que te interesa son hojas de cálculo o reuniones, hay dos guías específicas que entran en el detalle del método, con Copilot y sin él: <a href="/guias/ia-en-excel-y-google-sheets">cómo usar la IA en Excel</a> y <a href="/guias/ia-para-reuniones-y-actas">IA para reuniones, transcribir y sacar las tareas</a>.</p>

<h2 id="donde-falla">Dónde falla, y falla bastante</h2>

<p>Los cuatro reproches que se repiten en todos los despliegues que acaban mal:</p>

<ol>
    <li><strong>La respuesta depende de la papelera.</strong> Un documento antiguo, mal titulado y nunca borrado puede ganar a la versión buena en la recuperación. Las organizaciones con SharePoint desordenado obtienen respuestas desordenadas, y suelen culpar al modelo.</li>
    <li><strong>Excel real no es Excel de demo.</strong> Las funciones más vistosas exigen tabla con nombre, encabezados de una fila y datos homogéneos. Casi ninguna hoja de trabajo cumple eso sin arreglarla antes.</li>
    <li><strong>Es un compañero mediocre para pensar.</strong> Está afinado para ser rápido y prudente dentro de las aplicaciones. Para análisis exigente, argumentación o texto con voz propia, los chats generalistas rinden mejor.</li>
    <li><strong>El listón de la adopción es alto.</strong> Es la queja más repetida: la gente prueba dos veces, obtiene un resumen mediocre y no vuelve. Sin una tarea concreta asignada por persona, las licencias se pagan y no se usan.</li>
</ol>

<h2 id="permisos">El problema de permisos que nadie mira antes de comprar</h2>

<p>Este apartado vale más que el resto de la guía junta, así que va sin rodeos.</p>

<p>Copilot respeta los permisos existentes: solo accede a lo que el usuario ya podía abrir. El problema es que en una empresa con diez años de SharePoint, Teams y enlaces «para cualquiera de la organización», <strong>lo que un empleado ya podía abrir es muchísimo más de lo que nadie imagina</strong>. Antes no importaba porque nadie iba a buscarlo. Ahora basta con preguntar «¿cuáles son las bandas salariales del equipo comercial?» para que lo que estaba archivado en una carpeta olvidada aparezca en dos segundos, bien redactado.</p>

<p>Copilot no crea el agujero: lo convierte en un buscador. La lista mínima antes de activar licencias:</p>

<ul>
    <li>Auditar sitios de SharePoint y Teams con acceso «toda la organización», sobre todo los de RRHH, dirección y finanzas.</li>
    <li>Caducar los enlaces de compartición abiertos y revisar los heredados.</li>
    <li>Aplicar etiquetas de confidencialidad a lo que de verdad lo sea, y comprobar que Copilot las respeta al generar contenido derivado.</li>
    <li>Empezar por un grupo piloto pequeño y mirar qué encuentra <em>antes</em> de abrirlo a toda la plantilla.</li>
</ul>

<p>Y la cara complementaria: qué puede escribir cada persona dentro del prompt, que es un asunto distinto y con obligaciones propias en Europa. Está desarrollado en <a href="/guias/usar-ia-sin-filtrar-datos-de-clientes">IA y datos de clientes</a> y encaja bien con <a href="/guias/politica-de-uso-de-ia-en-la-empresa">una política de uso escrita</a>.</p>

<h2 id="precio">Qué cuesta y cuándo compensa</h2>

<p>El orden de magnitud a mediados de 2026: el plan para empresa ronda los <strong>30 $ por usuario y mes</strong> con compromiso anual, y el plan de negocio estaba en <strong>18 $ como precio promocional</strong> hasta mediados de año, con paso posterior a unos 21 $. Microsoft ha anunciado además subidas en los planes comerciales de Microsoft 365 desde el <strong>1 de julio de 2026</strong>, que en algunos casos llegan a un tercio del precio anterior. Verifica siempre en la página oficial antes de presupuestar: estas cifras cambian por país y por tipo de contrato.</p>

<p>El cálculo de si compensa es elemental y casi nadie lo hace. Treinta dólares al mes son unos 360 al año por persona. Con un coste laboral de 25 € la hora, la licencia se paga con <strong>menos de veinte minutos de trabajo ahorrado al mes</strong>. Ese listón es bajísimo: para alguien que vive en Outlook y Teams se cruza en la primera semana.</p>

<p>El fallo no está en el umbral, está en el denominador: <strong>se compran licencias para todo el mundo</strong>, incluida gente que abre Word dos veces al mes. Ahí la licencia no se amortiza nunca. La decisión sensata es por perfil de uso, no por plantilla. Y la única forma de saberlo es medirlo con el método de <a href="/guias/medir-si-la-ia-ahorra-tiempo">medir si la IA ahorra tiempo</a>, con línea base antes de activar nada.</p>

<h2 id="vs-chatgpt">Copilot, ChatGPT o Claude: cuál para qué</h2>

<p>No es una competición, son categorías distintas. Copilot compra contexto interno; los chats generalistas compran capacidad de razonamiento y escritura por la mitad de precio.</p>

<ul>
    <li><strong>Copilot gana</strong> cuando la pregunta empieza por «según lo que hablamos en…», «en el contrato que está en…», «resume el hilo de…». Nadie va a copiar cuarenta correos en un chat.</li>
    <li><strong>Un chat generalista gana</strong> en escritura con voz propia, análisis largo, programación, investigación con fuentes y cualquier tarea donde el material lo aportas tú de una vez. La comparación por tarea está en <a href="/guias/claude-vs-chatgpt-para-trabajar">Claude vs ChatGPT para trabajar</a>.</li>
    <li><strong>Ninguno de los dos</strong> es la respuesta cuando lo que necesitas es que algo se ejecute solo entre varias herramientas: eso es <a href="/guias/automatizar-sin-programar-n8n-make-zapier">automatización</a>, y se monta aparte.</li>
</ul>

<h2 id="piloto">Un piloto de seis semanas que sí decide</h2>

<ol>
    <li><strong>Semana 0.</strong> Auditoría de permisos y enlaces abiertos. Sin esto no se activa nada.</li>
    <li><strong>Semana 1.</strong> Diez a quince personas de tres áreas distintas, elegidas por uso intensivo de Outlook y Teams, no por cargo. Cada una con <em>una</em> tarea semanal asignada.</li>
    <li><strong>Semanas 2 y 3.</strong> Uso normal. Se anota el tiempo por tarea con la revisión incluida y cada caso en que la respuesta fue incorrecta, con el motivo.</li>
    <li><strong>Semana 4.</strong> Sesión conjunta: qué prompts funcionaron. Los buenos se escriben y se comparten; los que dependen de improvisar no escalan.</li>
    <li><strong>Semanas 5 y 6.</strong> Medición estable y decisión por perfil: a quién se le renueva, a quién no, y qué tareas se quedan en un chat generalista más barato.</li>
</ol>

<p>La conclusión honesta de casi todos los pilotos bien hechos es la misma: Copilot es excelente para el 20 % de la plantilla que vive dentro de Microsoft 365 y prescindible para el resto. Comprarlo para todos sale caro; comprarlo para nadie deja fuera el único caso donde no hay alternativa real, que es el contexto interno.</p>
HTML,
];
