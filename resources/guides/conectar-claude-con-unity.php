<?php

return [
    'title'          => 'Conectar Claude con Unity vía MCP',
    'navTitle'       => 'Claude + Unity MCP',
    'seoTitle'       => 'Cómo conectar Claude con Unity por MCP: guía paso a paso',
    'description'    => 'Configura Unity MCP para que Claude controle el editor: crea objetos, escribe scripts y modifica escenas desde el chat. Funciona con Claude Desktop y Claude Code.',
    'excerpt'        => 'Con Unity MCP le dices a Claude "crea un cubo rojo que gire" y lo hace directamente en tu escena. Sin copiar y pegar código. Sin cambiar de ventana.',
    'category'       => 'Tutorial',
    'published'      => '2026-09-23',
    'updated'        => '2026-09-23',
    'readingMinutes' => 5,
    'words'          => 850,
    'about'          => 'Claude',
    'related'        => ['empezar-con-claude-code', 'plugins-y-mcp-en-claude-code', 'que-es-un-agente-de-ia'],
    'toc'            => [
        'que-es'      => 'Qué es Unity MCP y para qué sirve',
        'requisitos'  => 'Requisitos',
        'instalar'    => 'Activar Unity MCP en el editor',
        'configurar'  => 'Conectar Claude Desktop o Claude Code',
        'usar'        => 'Cómo usarlo',
        'limites'     => 'Lo que puede y lo que no puede hacer',
    ],
    'faq'            => [
        '¿Funciona con versiones de Unity anteriores a la 6?' => 'El paquete oficial de Unity MCP solo está disponible a partir de Unity 6000.0.42f1. En versiones anteriores, la pestaña Window > Unity MCP no aparece. Existe algún paquete de terceros que backportea la funcionalidad, pero no está mantenido oficialmente.',
        '¿Puedo usar Claude Code en lugar de Claude Desktop?' => 'Sí. En Claude Code, añade el servidor MCP con el mismo comando que usarías en Claude Desktop pero mediante `claude mcp add` o editando directamente el archivo de configuración del proyecto.',
        '¿Es gratuito?' => 'El paquete Unity MCP es gratuito. Lo que tiene coste es el uso de la API de Claude: necesitas una suscripción de Claude Pro, Max o Team, o crédito de API en la consola de Anthropic.',
        '¿Puede escribir código en mi proyecto automáticamente?' => 'Sí. Claude puede crear scripts de C#, añadirlos a GameObjects y modificar sus valores. Revisa siempre el código antes de ejecutarlo en el editor, especialmente si el script toca archivos o hace llamadas de red.',
        '¿Funciona en Mac?' => 'Sí, tanto Claude Desktop como Unity 6 funcionan en macOS. La ruta del archivo de configuración de Claude Desktop cambia: en Mac está en ~/Library/Application Support/Claude/claude_desktop_config.json.',
    ],
    'ctaTitle'       => 'Aprende a sacarle más partido a Claude Code',
    'ctaBody'        => 'Unity MCP es un caso de uso de los servidores MCP de Claude Code. Si quieres entender cómo funcionan los MCP en general y qué otros servidores puedes conectar, lee <a href="/guias/plugins-y-mcp-en-claude-code">Plugins y MCP en Claude Code</a>.',
    'body'           => <<<'HTML'
<p>MCP (Model Context Protocol) es un estándar abierto que permite a Claude conectarse con herramientas externas: bases de datos, editores de código, aplicaciones de diseño. Unity 6 incluye un servidor MCP oficial que le da a Claude acceso directo al editor: puede crear GameObjects, escribir scripts, modificar materiales y consultar el estado de la escena sin que tú tengas que copiar y pegar nada.</p>

<h2 id="que-es">Qué es Unity MCP y para qué sirve</h2>

<p>Cuando conectas Claude al editor de Unity vía MCP, puedes hacer cosas como estas directamente desde el chat:</p>

<ul>
    <li>"Crea un cubo rojo en la posición (0, 1, 0) y añádele un Rigidbody."</li>
    <li>"Escribe un script que haga rotar este objeto 90 grados por segundo."</li>
    <li>"Dime cuántos objetos hay en la escena activa y cuáles tienen el tag Enemy."</li>
    <li>"Cambia el material de todos los objetos con el nombre 'Pared' por uno azul semitransparente."</li>
</ul>

<p>Claude actúa como un asistente que tiene las manos dentro del editor. No es magia: ejecuta las mismas operaciones que tú harías desde el menú o desde código, pero a tu orden y en lenguaje natural.</p>

<h2 id="requisitos">Requisitos</h2>

<ul>
    <li><strong>Unity 6000.0.42f1 o superior.</strong> El servidor MCP está integrado en Unity 6. En versiones anteriores no está disponible.</li>
    <li><strong>Claude Desktop</strong> (o Claude Code 1.0+). Descarga Claude Desktop desde <code>claude.ai/download</code>.</li>
    <li><strong>uv</strong>, el gestor de entornos de Python. Instálalo con: <code>pip install uv</code> (o <code>brew install uv</code> en Mac).</li>
    <li>Una suscripción de Claude activa (Pro, Max o Team).</li>
</ul>

<h2 id="instalar">Activar Unity MCP en el editor</h2>

<p>Abre tu proyecto en Unity 6 y ve a <strong>Window → Unity MCP</strong>. Se abre una ventana con el estado del servidor. Haz clic en <strong>Start Server</strong>: Unity levanta un servidor local en el puerto 6400 por defecto y te muestra la ruta del socket.</p>

<p>Deja esa ventana abierta mientras trabajas. El servidor se detiene cuando cierras Unity.</p>

<h2 id="configurar">Conectar Claude Desktop o Claude Code</h2>

<p>Claude Desktop necesita saber que existe ese servidor MCP. Abre el archivo de configuración:</p>

<ul>
    <li><strong>Windows:</strong> <code>%APPDATA%\Claude\claude_desktop_config.json</code></li>
    <li><strong>Mac:</strong> <code>~/Library/Application Support/Claude/claude_desktop_config.json</code></li>
</ul>

<p>Si el archivo no existe, créalo. Añade (o fusiona con lo que ya tengas) este bloque:</p>

<pre><code>{
  "mcpServers": {
    "unity": {
      "command": "uv",
      "args": [
        "run",
        "--with",
        "mcp-unity",
        "python",
        "-m",
        "mcp_unity"
      ]
    }
  }
}</code></pre>

<p>Guarda el archivo y <strong>reinicia Claude Desktop</strong>. En la barra inferior del chat debería aparecer un icono de herramientas con "unity" listado.</p>

<p>Si usas <strong>Claude Code</strong> en lugar de Claude Desktop, ejecuta en la terminal:</p>

<pre><code>claude mcp add unity -- uv run --with mcp-unity python -m mcp_unity</code></pre>

<h2 id="usar">Cómo usarlo</h2>

<p>Con Unity abierto y el servidor activo, abre Claude Desktop y empieza a pedir cosas en lenguaje natural. Algunos ejemplos que funcionan bien:</p>

<ul>
    <li><strong>Crear objetos:</strong> "Añade una esfera con el nombre 'Planeta' en el centro de la escena."</li>
    <li><strong>Scripts:</strong> "Escribe un script de movimiento básico con WASD y asígnalo al GameObject llamado 'Player'."</li>
    <li><strong>Consultas:</strong> "¿Qué componentes tiene el objeto seleccionado ahora mismo?"</li>
    <li><strong>Modificaciones en masa:</strong> "Pon todos los objetos con el tag 'Enemigo' en la capa 'Enemies'."</li>
</ul>

<p>Claude llama a las herramientas MCP, Unity las ejecuta y el resultado aparece en la escena al instante.</p>

<h2 id="limites">Lo que puede y lo que no puede hacer</h2>

<p>Unity MCP da acceso a la mayoría de operaciones del editor, pero tiene límites reales:</p>

<ul>
    <li><strong>Puede:</strong> crear y modificar GameObjects, escribir y asignar scripts, cambiar materiales y colores, leer la jerarquía de la escena, guardar la escena.</li>
    <li><strong>No puede:</strong> ejecutar el juego en Play Mode de forma autónoma, importar assets externos, acceder a las preferencias del editor ni modificar el ProjectSettings.</li>
</ul>

<p>El punto más importante: Claude escribe el código C# que tú le pides, pero no lo compila ni lo prueba. Revisa siempre los scripts antes de darles al Play, especialmente si acceden a archivos del disco o hacen llamadas de red.</p>
HTML,
];
