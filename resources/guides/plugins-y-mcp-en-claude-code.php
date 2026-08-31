<?php

return [
    'title' => 'Plugins y MCP en Claude Code: qué son y cuándo usar cada uno',
    'navTitle' => 'Plugins y MCP',
    'seoTitle' => 'Plugins y MCP en Claude Code: qué son y cuándo usarlos',
    'description' => 'Skill, plugin y servidor MCP resuelven problemas distintos. Qué hace cada pieza, cómo se instalan, cuándo merece la pena y qué revisar antes de dar permisos.',
    'excerpt' => 'Un skill enseña un procedimiento. Un plugin empaqueta varias piezas. Un MCP conecta con el mundo exterior. Confundirlos es la causa habitual de montajes que nadie mantiene.',
    'category' => 'Herramientas',
    'published' => '2026-08-24',
    'updated' => '2026-08-26',
    'readingMinutes' => 7,
    'words' => 1120,
    'about' => 'Model Context Protocol',
    'related' => ['que-son-los-skills-de-claude-code', 'como-crear-un-skill-para-claude-code', 'automatizar-tareas-con-ia-en-el-trabajo'],
    'toc' => [
        'tres-piezas' => 'Tres piezas, tres problemas distintos',
        'plugins' => 'Plugins: empaquetar lo que ya funciona',
        'mcp' => 'MCP: conectar con el mundo exterior',
        'cuando' => 'Cuándo usar cada cosa',
        'seguridad' => 'Lo que hay que revisar antes de dar permisos',
        'empezar' => 'Por dónde empezar sin liarla',
    ],
    'faq' => [
        '¿Qué significa MCP?' => 'Model Context Protocol. Es un estándar abierto para que un asistente de IA se conecte a herramientas y fuentes de datos externas —una base de datos, un gestor de incidencias, un sistema de archivos— sin que haga falta una integración distinta para cada combinación de modelo y herramienta.',
        '¿Necesito un MCP para usar skills?' => 'No, son cosas independientes. Un skill son instrucciones; un MCP es una conexión con un sistema externo. Puedes usar skills durante meses sin instalar ningún MCP.',
        '¿Un plugin puede ejecutar código en mi máquina?' => 'Sí, y por eso la instalación merece la misma cautela que cualquier dependencia: un plugin puede traer scripts y automatismos que se disparan solos. Instala desde fuentes que puedas auditar y revisa qué trae antes de activarlo.',
        '¿Qué es la inyección de prompt y por qué me afecta al usar MCP?' => 'Es cuando un contenido que el asistente lee —una incidencia, un correo, una página web— incluye instrucciones dirigidas al propio asistente. Si ese asistente tiene permisos para escribir o borrar, un texto malicioso puede intentar aprovecharlos. Con MCP conectados, todo lo que llega de fuera se debe tratar como datos, nunca como órdenes.',
        '¿Merece la pena montar esto si trabajo solo?' => 'Los skills sí, desde el primer día. Los MCP, solo cuando estés copiando datos a mano entre dos sistemas varias veces por semana. Si no hay ese trasiego, el montaje cuesta más de lo que ahorra.',
    ],
    'ctaTitle' => 'Skills y plugins que la comunidad ya usa',
    'ctaBody' => 'En el catálogo puedes filtrar por tipo de recurso para ver solo skills instalables o solo plugins, con el detalle de qué hacen y cómo se instalan.',
    'body' => <<<'HTML'
<p>Los tres términos aparecen en la misma frase constantemente y se usan como si fueran intercambiables. No lo son, y confundirlos lleva a dos errores caros: montar un servidor MCP para algo que resolvía un archivo de texto, o pelearse durante horas con un prompt para algo que necesitaba acceso real a un sistema.</p>

<h2 id="tres-piezas">Tres piezas, tres problemas distintos</h2>

<figure>
<table>
    <thead><tr><th></th><th>Skill</th><th>Plugin</th><th>Servidor MCP</th></tr></thead>
    <tbody>
        <tr><td><strong>Qué aporta</strong></td><td>Conocimiento: cómo se hace una tarea</td><td>Distribución: varias piezas en un paquete</td><td>Capacidad: acceso a un sistema externo</td></tr>
        <tr><td><strong>Contiene</strong></td><td>Instrucciones en Markdown</td><td>Skills, comandos, automatismos, MCP</td><td>Un servicio con herramientas y datos</td></tr>
        <tr><td><strong>Problema que resuelve</strong></td><td>«Lo explico igual cada vez»</td><td>«Quiero que mi equipo lo tenga todo»</td><td>«Los datos están en otro sitio»</td></tr>
        <tr><td><strong>Coste de mantener</strong></td><td>Bajo</td><td>Medio</td><td>Alto</td></tr>
        <tr><td><strong>Riesgo</strong></td><td>Bajo</td><td>Medio: puede ejecutar cosas</td><td>Alto: credenciales y permisos</td></tr>
    </tbody>
</table>
</figure>

<p>La progresión natural es de izquierda a derecha, y conviene no saltarse pasos. Casi nadie necesita empezar por la derecha.</p>

<h2 id="plugins">Plugins: empaquetar lo que ya funciona</h2>

<p>Un plugin es un paquete instalable que puede incluir varias cosas a la vez: uno o más skills, comandos propios, automatismos que se disparan al ocurrir algo (por ejemplo, formatear al guardar) y la configuración de servidores MCP.</p>

<p>Se instalan desde el menú <code>/plugin</code>, que lista los marketplaces configurados. La ventaja frente a mandar instrucciones por Slack es evidente: se versiona, se actualiza y todo el equipo tiene la misma versión.</p>

<p>El momento de empaquetar en plugin llega cuando se cumplen dos condiciones:</p>

<ul>
    <li>Tienes <strong>tres o más skills</strong> que se usan juntos y que se explican mal por separado.</li>
    <li>Hay <strong>más de una persona</strong> que los necesita, y ya te has cansado de explicar la instalación.</li>
</ul>

<p>Si tienes un skill y trabajas solo, un plugin es burocracia. Deja el skill en <code>.claude/skills/</code> y sigue con tu vida.</p>

<h2 id="mcp">MCP: conectar con el mundo exterior</h2>

<p>MCP —Model Context Protocol— es un estándar abierto que resuelve un problema de combinatoria. Antes, cada asistente necesitaba una integración propia para cada herramienta: N modelos por M herramientas, N×M integraciones. Con un protocolo común, cada herramienta expone un servidor y cualquier asistente compatible puede usarlo.</p>

<p>En la práctica, un servidor MCP le da al asistente tres tipos de cosas:</p>

<ul>
    <li><strong>Herramientas</strong> que puede invocar: consultar una tabla, crear una incidencia, buscar en una wiki.</li>
    <li><strong>Recursos</strong> que puede leer: archivos, documentos, registros.</li>
    <li><strong>Plantillas de instrucciones</strong> que el servidor propone para su dominio.</li>
</ul>

<p>Lo interesante no es la conexión en sí, es lo que habilita: dejar de ser el humano que copia datos de un sistema a otro. «Mira las incidencias abiertas de esta semana, agrúpalas por causa raíz y escribe el resumen para el comité» es una tarea que sin MCP implica exportar un CSV, y con MCP no implica nada.</p>

<p>El precio es real: hay que instalar y mantener el servidor, gestionar credenciales y decidir permisos. Por eso el criterio es sencillo: <strong>monta un MCP cuando el trasiego manual de datos te cueste más de una hora a la semana.</strong> Por debajo de eso, no compensa.</p>

<h2 id="cuando">Cuándo usar cada cosa</h2>

<p>Las señales que indican qué necesitas de verdad:</p>

<ul>
    <li><strong>«Lo explico igual cada vez»</strong> → skill.</li>
    <li><strong>«Cada uno lo hace a su manera»</strong> → skill en el repositorio del proyecto.</li>
    <li><strong>«Explicar la instalación me lleva media hora»</strong> → plugin.</li>
    <li><strong>«Exporto este informe cada lunes para pegarlo en otro sitio»</strong> → MCP.</li>
    <li><strong>«Tengo que abrir cuatro pestañas para responder una pregunta»</strong> → MCP.</li>
    <li><strong>«El resultado sale bien pero en un formato distinto cada vez»</strong> → no necesitas nada de esto: necesitas fijar el formato en el prompt.</li>
</ul>

<h2 id="seguridad">Lo que hay que revisar antes de dar permisos</h2>

<p>Un asistente con acceso de escritura a tus sistemas es un asistente que puede equivocarse con consecuencias. Cuatro reglas que evitan la mayoría de los disgustos:</p>

<ol>
    <li><strong>Lectura primero.</strong> Empieza con permisos de solo lectura y añade escritura cuando tengas evidencia de que hace falta. La mayoría del valor está en leer y correlacionar.</li>
    <li><strong>Todo lo que entra son datos, no órdenes.</strong> Una incidencia, un correo o una página web pueden contener texto redactado para que el asistente lo interprete como instrucción. Si un contenido externo «pide» borrar algo, enviar algo o cambiar permisos, eso se enseña al humano, no se ejecuta.</li>
    <li><strong>Credenciales acotadas.</strong> Un token de servicio con el alcance mínimo, no tu usuario de administrador. Y rotable.</li>
    <li><strong>Confirmación en lo irreversible.</strong> Borrar, enviar, publicar, pagar: que siempre pase por una confirmación humana explícita, aunque ralentice.</li>
</ol>

<p>Con los plugins, la analogía útil es la de una dependencia de software: instalas código de un tercero que se ejecutará en tu máquina. Lo mismo que harías con un paquete de npm o de Composer —mirar quién lo mantiene, qué trae, si está actualizado— aplica aquí.</p>

<h2 id="empezar">Por dónde empezar sin liarla</h2>

<ol>
    <li><strong>Semana 1:</strong> un skill para la tarea que más repites. Nada más.</li>
    <li><strong>Semana 2:</strong> dos o tres skills más y mueve al repositorio los que afecten al equipo.</li>
    <li><strong>Semana 3:</strong> mira si algún flujo se repite lo suficiente para empaquetarlo en plugin.</li>
    <li><strong>Cuando duela de verdad:</strong> el MCP del sistema entre el que estás copiando datos a mano. Solo lectura al principio.</li>
</ol>

<p>Si estás en la casilla de salida, empieza por <a href="/guias/que-son-los-skills-de-claude-code">qué son los skills</a> y por el catálogo de <a href="/profesiones/desarrollo">skills para desarrollo</a>, que es donde hay más recursos de este tipo ya probados.</p>

<p>Si aún no tienes la herramienta instalada, empieza por <a href="/guias/empezar-con-claude-code">los primeros pasos con Claude Code</a>: los plugins y los MCP rinden cuando ya hay un proyecto que responde y un <code>CLAUDE.md</code> con lo básico.</p>
HTML,
];
