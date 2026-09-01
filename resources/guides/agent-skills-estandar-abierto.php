<?php

return [
    'title' => 'Agent Skills: el estándar abierto de skills para agentes de IA',
    'navTitle' => 'Agent Skills: el estándar abierto',
    'seoTitle' => 'Agent Skills: qué es el estándar de SKILL.md y dónde funciona',
    'description' => 'Un skill escrito una vez funciona en Claude Code, Cursor, Copilot y ChatGPT. Qué dice la especificación de Agent Skills y dónde lo busca cada herramienta.',
    'excerpt' => 'Escribir un SKILL.md dejó de ser cosa de una sola herramienta. Esto es lo que dice la especificación palabra por palabra, en qué carpeta lo busca cada agente y qué campos sobreviven al cambio de producto.',
    'category' => 'Fundamentos',
    'published' => '2026-09-01',
    'updated' => '2026-09-01',
    'readingMinutes' => 13,
    'words' => 2104,
    'about' => 'Agent Skills',
    'related' => ['que-son-los-skills-de-claude-code', 'como-crear-un-skill-para-claude-code', 'plugins-y-mcp-en-claude-code'],
    'toc' => [
        'que-es' => 'Qué es Agent Skills y por qué se convirtió en estándar',
        'anatomia' => 'La anatomía de un skill: un archivo y tres carpetas',
        'frontmatter' => 'El frontmatter, campo por campo y con sus límites',
        'divulgacion' => 'Divulgación progresiva: los tres niveles de carga',
        'donde-funciona' => 'Dónde lo busca cada herramienta',
        'portabilidad' => 'Qué se rompe al mover un skill de una herramienta a otra',
        'validar' => 'Validarlo antes de compartirlo',
        'empezar' => 'Por dónde empezar hoy',
    ],
    'faq' => [
        '¿Qué es exactamente Agent Skills?' => 'Es un formato abierto para empaquetar conocimiento y procedimientos que un agente de IA carga cuando los necesita. En la práctica, una carpeta con un archivo SKILL.md dentro: cabecera YAML con el nombre y la descripción, y debajo las instrucciones en Markdown. Lo desarrolló Anthropic, lo publicó como estándar abierto y hoy lo implementan decenas de productos, entre ellos Cursor, GitHub Copilot, VS Code, Gemini CLI, Codex y ChatGPT.',
        '¿Un skill escrito para Claude Code funciona en Cursor?' => 'El cuerpo sí, casi siempre, porque son instrucciones en Markdown. Lo que puede no viajar es el frontmatter: fuera de Claude Code solo se pueden usar los campos de la especificación (name, description, license, compatibility, metadata y allowed-tools). Los campos propios de un producto los ignora el resto, y lo que cambia de verdad es la carpeta donde hay que dejarlo.',
        '¿Cuál es la diferencia entre un skill y un servidor MCP?' => 'Un skill aporta instrucciones: le dice al agente cómo hacer algo que ya puede hacer. Un servidor MCP aporta capacidades: le da acceso a un sistema al que antes no llegaba. Un skill es un archivo de texto en una carpeta; un MCP es un proceso que hay que ejecutar y autenticar. Se complementan, y de hecho un skill suele explicar cómo usar bien las herramientas que expone un MCP.',
        '¿Cuánto debe ocupar un SKILL.md?' => 'La especificación recomienda mantener el cuerpo por debajo de 5.000 tokens y el archivo por debajo de 500 líneas. Lo que no quepa ahí va a archivos aparte dentro de la misma carpeta, que el agente lee solo si le hacen falta. El motivo es de coste: el nombre y la descripción se cargan siempre, así que la disciplina en la cabecera se paga en todas las sesiones.',
        '¿Dónde dejo el skill para que lo vean varias herramientas a la vez?' => 'En .agents/skills/ dentro del repositorio, y en ~/.agents/skills/ para los tuyos personales. Es la ruta que comparten Cursor, VS Code con Copilot y Codex. Claude Code no lee esa carpeta: usa .claude/skills/ y ~/.claude/skills/, así que en una máquina con varias herramientas lo práctico es un enlace simbólico entre ambas.',
        '¿Hay que registrar el skill en algún sitio?' => 'No. No hay registro central ni proceso de aprobación: el agente descubre los skills leyendo las carpetas que tiene configuradas al arrancar. Publicarlo es dejarlo en un repositorio, y compartirlo dentro de un equipo es versionarlo con el proyecto.',
    ],
    'ctaTitle' => 'Skills escritos en español y listos para copiar',
    'ctaBody' => 'La especificación te dice el formato; lo que cuesta es el contenido. En el catálogo hay skills y prompts escritos por gente que los usa a diario, ordenados por votos y por profesión: empieza por <a href="/profesiones/desarrollo">Desarrollo</a>, <a href="/profesiones/marketing">Marketing</a> o <a href="/profesiones/legal">Legal</a>.',
    'body' => <<<'HTML'
<p>Durante un año, escribir un <code>SKILL.md</code> significaba escribirlo para Claude Code. Ya no. El formato se publicó como estándar abierto y hoy lo implementan una cuarentena larga de productos: Cursor, GitHub Copilot, VS Code, Gemini CLI, Codex, ChatGPT, OpenCode, Goose, Kiro, JetBrains Junie, Amp, Roo Code, Factory, Tabnine o Laravel Boost, entre otros.</p>

<p>Eso cambia la aritmética de escribir uno. Antes invertías una tarde en un procedimiento atado a una herramienta que quizá dejabas de usar en seis meses. Ahora el mismo archivo sobrevive al cambio de producto, y lo que se queda por el camino son detalles de configuración, no el contenido.</p>

<p>Esta guía es la especificación traducida a lo que hace falta saber para escribir uno que funcione en más de un sitio. Los datos vienen de la especificación oficial y de la documentación de cada producto, consultadas el 1 de septiembre de 2026.</p>

<h2 id="que-es">Qué es Agent Skills y por qué se convirtió en estándar</h2>

<p>Un skill es una carpeta con instrucciones que un agente carga solo cuando le hacen falta. El problema que resuelve es viejo y muy concreto: los agentes son capaces pero no saben cómo se hacen las cosas <em>en tu casa</em>. Cómo se revisa una cláusula en tu despacho, qué formato tiene un informe en tu empresa, qué pasos lleva desplegar en tu infraestructura.</p>

<p>Ese conocimiento se puede meter en el prompt de sistema, pero entonces se paga en cada mensaje, aunque la conversación vaya de otra cosa. La alternativa era pegarlo a mano cada vez. Un skill lo empaqueta en un archivo versionado que el agente abre bajo demanda.</p>

<p>El formato lo desarrolló Anthropic y lo liberó como estándar abierto. La razón de que lo adoptaran los competidores no es generosidad: es que el coste de implementarlo es ridículo —leer carpetas y parsear un YAML— y el beneficio es heredar todo el material que ya existía escrito.</p>

<h2 id="anatomia">La anatomía de un skill: un archivo y tres carpetas</h2>

<p>La estructura completa que define la especificación cabe en seis líneas:</p>

<pre><code>mi-skill/
├── SKILL.md          # Obligatorio: metadatos + instrucciones
├── scripts/          # Opcional: código ejecutable
├── references/       # Opcional: documentación de apoyo
├── assets/           # Opcional: plantillas, imágenes, datos
└── ...               # Cualquier otro archivo o carpeta</code></pre>

<p>Solo <code>SKILL.md</code> es obligatorio. Las tres carpetas son convenciones, no requisitos: puedes meter lo que quieras dentro de la carpeta del skill, pero si respetas los nombres, cualquiera que abra el repositorio entiende el reparto sin preguntar.</p>

<p>El criterio para separar en carpetas no es estético, es de contexto. Lo que va en <code>references/</code> el agente lo lee solo si el trabajo lo pide; lo que va en el cuerpo de <code>SKILL.md</code> se carga entero en cuanto el skill se activa. Un manual de 4.000 palabras dentro del cuerpo se paga cada vez que el skill entra en juego, aunque solo hiciera falta el párrafo tercero.</p>

<h2 id="frontmatter">El frontmatter, campo por campo y con sus límites</h2>

<p>La cabecera YAML va entre marcas <code>---</code> al principio del archivo. Solo dos campos son obligatorios:</p>

<figure>
<table>
    <thead>
        <tr><th>Campo</th><th>Obligatorio</th><th>Restricción</th></tr>
    </thead>
    <tbody>
        <tr><td><code>name</code></td><td>Sí</td><td>1-64 caracteres. Solo minúsculas, números y guiones. Ni empieza ni acaba en guion, ni lleva guiones consecutivos. Debe coincidir con el nombre de la carpeta.</td></tr>
        <tr><td><code>description</code></td><td>Sí</td><td>1-1024 caracteres. No vacía. Dice qué hace el skill y cuándo usarlo.</td></tr>
        <tr><td><code>license</code></td><td>No</td><td>Nombre de la licencia o referencia a un archivo de licencia incluido.</td></tr>
        <tr><td><code>compatibility</code></td><td>No</td><td>Máximo 500 caracteres. Requisitos de entorno: producto previsto, paquetes de sistema, acceso a red.</td></tr>
        <tr><td><code>metadata</code></td><td>No</td><td>Mapa libre de claves y valores de texto, para datos propios que lee tu propio tooling.</td></tr>
        <tr><td><code>allowed-tools</code></td><td>No</td><td>Cadena separada por espacios con herramientas preaprobadas. Marcado como experimental: el soporte varía entre productos.</td></tr>
    </tbody>
</table>
</figure>

<p>Un skill mínimo válido es esto y nada más:</p>

<pre><code>---
name: revision-de-contratos
description: Revisa contratos de prestación de servicios y señala cláusulas de riesgo. Úsalo cuando el usuario comparta un contrato, un borrador o mencione revisión legal de un acuerdo.
---

Instrucciones aquí.</code></pre>

<p>De los seis campos, el que decide si el skill sirve de algo es <code>description</code>, y casi nadie le dedica el tiempo que merece. Es lo único que el agente tiene delante cuando decide si activarlo o no: si dice «ayuda con contratos», no se activará ante «mírate este borrador de acuerdo marco». La especificación es explícita en que debe describir <strong>qué hace y cuándo usarlo</strong>, e incluir palabras clave que ayuden a reconocer la tarea. Tienes 1.024 caracteres. Usa unos cuantos.</p>

<p>El detalle que más falla en la práctica: <code>name</code> tiene que coincidir con el nombre de la carpeta. Renombrar la carpeta y olvidar el YAML deja un skill que el validador rechaza y que algunos clientes sencillamente ignoran sin avisar.</p>

<h2 id="divulgacion">Divulgación progresiva: los tres niveles de carga</h2>

<p>El mecanismo que hace que tener treinta skills instalados no arruine cada sesión se llama divulgación progresiva, y funciona en tres escalones:</p>

<ol>
    <li><strong>Metadatos (~100 tokens).</strong> Al arrancar, el agente carga solo el <code>name</code> y la <code>description</code> de cada skill disponible. Lo justo para saber cuál puede venir a cuento.</li>
    <li><strong>Instrucciones (menos de 5.000 tokens recomendados).</strong> Cuando una tarea encaja con la descripción, se lee el cuerpo entero de <code>SKILL.md</code>.</li>
    <li><strong>Recursos (bajo demanda).</strong> Los archivos de <code>scripts/</code>, <code>references/</code> y <code>assets/</code> solo se abren si las instrucciones llevan al agente hasta ellos.</li>
</ol>

<p>La recomendación operativa que se deriva: mantén <code>SKILL.md</code> por debajo de 500 líneas y saca el material de referencia a archivos aparte. Y al referenciarlos, usa rutas relativas desde la raíz del skill y mantenlas a un nivel de profundidad; las cadenas de referencias anidadas hacen que el agente vaya abriendo archivos sin control.</p>

<blockquote>
<p>Regla de bolsillo: el nivel 1 se paga en todas las sesiones, el nivel 2 en las sesiones donde el skill se activa, y el nivel 3 casi nunca. Escribe cada cosa en el nivel más barato donde siga siendo útil.</p>
</blockquote>

<h2 id="donde-funciona">Dónde lo busca cada herramienta</h2>

<p>Aquí es donde se acaba la portabilidad automática. El formato es el mismo, pero cada producto mira en sus propias carpetas. Estas son las rutas según la documentación oficial de cada uno, consultadas el 1 de septiembre de 2026:</p>

<figure>
<table>
    <thead>
        <tr><th>Herramienta</th><th>En el proyecto</th><th>Personal</th><th>Invocación explícita</th></tr>
    </thead>
    <tbody>
        <tr><td>Claude Code</td><td><code>.claude/skills/</code></td><td><code>~/.claude/skills/</code></td><td><code>/nombre-del-skill</code></td></tr>
        <tr><td>Cursor</td><td><code>.agents/skills/</code><br><code>.cursor/skills/</code></td><td><code>~/.agents/skills/</code><br><code>~/.cursor/skills/</code></td><td><code>/</code> en el chat del agente</td></tr>
        <tr><td>VS Code / Copilot</td><td><code>.github/skills/</code><br><code>.claude/skills/</code><br><code>.agents/skills/</code></td><td><code>~/.copilot/skills/</code><br><code>~/.claude/skills/</code><br><code>~/.agents/skills/</code></td><td><code>/</code> en el chat</td></tr>
        <tr><td>Codex / ChatGPT</td><td><code>.agents/skills/</code></td><td><code>~/.agents/skills/</code></td><td><code>$skill</code> en Codex, <code>@skill</code> en ChatGPT</td></tr>
    </tbody>
</table>
</figure>

<p>Lee la tabla en vertical y sale la conclusión práctica: <strong><code>.agents/skills/</code> es el denominador común.</strong> Cursor, VS Code con Copilot y Codex la leen los tres. Si vas a dejar skills en un repositorio compartido por un equipo que no usa todo el mundo la misma herramienta, esa es la carpeta.</p>

<p>Claude Code es la excepción: no lee <code>.agents/skills/</code>. Sí acepta, en cambio, que la carpeta del skill sea un enlace simbólico a otro sitio del disco, así que la salida limpia en una máquina con varias herramientas es tener el contenido en un único lugar y enlazarlo desde <code>.claude/skills/</code>. Y en el sentido contrario, VS Code sí lee <code>.claude/skills/</code>, con lo que un repositorio que ya tenga skills de Claude Code funciona en Copilot sin tocar nada.</p>

<h2 id="portabilidad">Qué se rompe al mover un skill de una herramienta a otra</h2>

<p>El cuerpo del archivo viaja bien: son instrucciones en Markdown y ningún producto las interpreta de forma especial. Lo que no viaja igual es el frontmatter, porque cada uno ha añadido campos propios por encima de la especificación.</p>

<p>Claude Code acepta bastantes más de los seis del estándar —control de quién puede invocar el skill, ejecución en un subagente, inyección de contexto dinámico—, pero fuera de Claude Code solo puedes contar con los seis. Las subidas a claude.ai y la API de Skills, de hecho, aceptan exactamente <code>name</code>, <code>description</code>, <code>license</code>, <code>compatibility</code>, <code>metadata</code> y <code>allowed-tools</code>.</p>

<p>Cursor añade los suyos (<code>paths</code> para limitar el skill a ciertos archivos, <code>icon</code>, <code>color</code>), y VS Code otros distintos (<code>argument-hint</code>, <code>user-invocable</code>, <code>context: fork</code>). Coinciden en uno: <code>disable-model-invocation</code>, para que el skill solo se active si lo pides tú. Un campo desconocido no suele romper nada —se ignora—, pero tampoco hace nada, y ahí está el riesgo: un skill que dependía de <code>paths</code> para no activarse fuera de sitio se activará en todas partes en cuanto lo muevas.</p>

<p>Tres reglas para escribir uno pensado para viajar:</p>

<ul>
    <li><strong>No dependas del frontmatter para acotar.</strong> Si el skill solo debe usarse en cierto contexto, dilo en la <code>description</code> con palabras, no en un campo que la mitad de los clientes ignora.</li>
    <li><strong>Cuidado con <code>allowed-tools</code>.</strong> Los nombres de las herramientas no son los mismos entre productos, y el campo está marcado como experimental. Escribe el skill para que funcione aunque ninguna herramienta esté preaprobada.</li>
    <li><strong>Declara el entorno en <code>compatibility</code>.</strong> Si tu skill necesita <code>git</code>, Python o acceso a internet, ponlo ahí en vez de dejar que falle en la máquina de otro. Aunque el cliente no actúe sobre el campo, lo lee la persona que instala el skill.</li>
</ul>

<h2 id="validar">Validarlo antes de compartirlo</h2>

<p>Hay una biblioteca de referencia, <code>skills-ref</code>, en el repositorio del estándar. Comprueba que el frontmatter es válido y que se respetan las reglas de nombres:</p>

<pre><code>skills-ref validate ./mi-skill</code></pre>

<p>Merece la pena pasarlo antes de publicar nada, porque los tres errores que más se repiten los caza todos: el <code>name</code> que no coincide con la carpeta, las mayúsculas o los guiones consecutivos en el nombre, y la descripción vacía o de tres palabras. Ninguno de los tres da error visible al usar el skill: simplemente el agente no lo activa nunca y tú das por hecho que el modelo no se entera.</p>

<h2 id="empezar">Por dónde empezar hoy</h2>

<p>Si no tienes ninguno escrito, el mejor primer skill no es el más ambicioso: es el procedimiento que ya has pegado tres veces esta semana en un chat. Sácalo a una carpeta, ponle una descripción que diga cuándo aplica, y déjalo en <code>.agents/skills/</code> si trabajas con varias herramientas o en <code>.claude/skills/</code> si solo usas Claude Code.</p>

<p>A partir de ahí, el orden natural es: <a href="/guias/como-crear-un-skill-para-claude-code">cómo se escribe uno que se active cuando toca</a>, <a href="/guias/que-son-los-skills-de-claude-code">en qué se diferencia de un prompt y de un plugin</a>, y <a href="/guias/plugins-y-mcp-en-claude-code">cuándo el problema no se resuelve con instrucciones sino con un servidor MCP</a>.</p>

<p>Y antes de escribir el tuyo desde cero, mira si ya existe. En el <a href="/skills">catálogo</a> hay material en español por profesión que se copia y se adapta en menos tiempo del que cuesta redactar una buena descripción.</p>
HTML,
];
