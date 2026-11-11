<?php

return [
    'title' => 'Cómo conectar ia-skills a Claude: tus prompts dentro del chat',
    'navTitle' => 'Conectar ia-skills a Claude',
    'seoTitle' => 'Conectar ia-skills a Claude: conector paso a paso',
    'description' => 'Añade ia-skills como conector en Claude y pídele prompts del catálogo o tus skills privadas sin salir del chat. Paso a paso, gratis y sin instalar nada.',
    'excerpt' => 'Con el conector de ia-skills, Claude busca y lee los prompts por ti: los del catálogo y, si quieres, también tus skills privadas. Se configura en dos minutos y no hay que instalar nada.',
    'category' => 'Tutorial',
    'published' => '2026-11-11',
    'updated' => '2026-11-11',
    'readingMinutes' => 7,
    'words' => 1140,
    'about' => 'Claude',
    'related' => ['plugins-y-mcp-en-claude-code', 'como-usar-claude', 'que-son-los-skills-de-claude-code', 'empezar-con-claude-code'],
    'toc' => [
        'que-es' => 'Qué es el conector de ia-skills',
        'requisitos' => 'Qué necesitas',
        'catalogo' => 'Añadir el conector en Claude',
        'privadas' => 'Iniciar sesión para usar tus skills privadas',
        'usar' => 'Cómo usarlo en una conversación',
        'claude-code' => 'En Claude Code',
        'seguridad' => 'Seguridad: qué puede ver y qué no',
        'problemas' => 'Si algo no funciona',
    ],
    'faq' => [
        '¿Cuesta algo?' => 'No. El conector de ia-skills es gratis, igual que la cuenta. Lo único que necesitas es una cuenta de Claude: el plan gratuito permite añadir un conector personalizado, y los de pago, más.',
        '¿Puede Claude cambiar o borrar mis skills?' => 'No. El conector solo lee: puede buscar skills y leer sus prompts, nada más. Para crear, editar o borrar una skill tienes que entrar en ia-skills.com.',
        '¿Mi equipo puede usar mis skills privadas desde su Claude?' => 'No: cada conector ve las skills de quien inició sesión. Para pasarle una skill a alguien, usa el enlace para compartir de su ficha.',
        '¿Cómo le quito el acceso a Claude?' => 'En tu perfil de ia-skills, en «Aplicaciones conectadas», pulsa «Desconectar». Deja de poder leer tus skills al momento. También puedes quitar el conector desde los ajustes de Claude.',
        '¿Funciona con ChatGPT u otros asistentes?' => 'El conector usa MCP, un estándar abierto, así que funciona en cualquier asistente que admita servidores MCP remotos. Esta guía explica Claude porque es donde lo hemos probado.',
    ],
    'ctaTitle' => 'Guarda tus prompts para usarlos desde Claude',
    'ctaBody' => 'Crea una cuenta gratis, guarda tus prompts como skills privadas y úsalas desde Claude iniciando sesión en el conector. Si todavía no sabes qué guardar, empieza por el <a href="/skills">catálogo</a>.',
    'body' => <<<'HTML'
<p>Si usas los prompts de ia-skills, lo normal es abrir la web, buscar el prompt, copiarlo y pegarlo en Claude. Con el conector te ahorras ese ir y venir: le pides a Claude «búscame un prompt para revisar contratos» y él lo busca en ia-skills, lo lee y lo usa en la misma conversación.</p>

<h2 id="que-es">Qué es el conector de ia-skills</h2>

<p>Un conector es una forma de darle a Claude acceso a un servicio externo. Por debajo usa MCP (Model Context Protocol), el estándar abierto con el que Claude se conecta a herramientas y datos. Si quieres entender MCP con más detalle, lo explicamos en <a href="/guias/plugins-y-mcp-en-claude-code">Plugins y MCP en Claude Code</a>.</p>

<p>El conector de ia-skills le da a Claude tres herramientas:</p>

<ul>
<li><strong>Buscar skills:</strong> busca en el catálogo por tarea y profesión, ordenado por popularidad.</li>
<li><strong>Leer una skill:</strong> trae el prompt completo, con sus campos entre [corchetes] para rellenar.</li>
<li><strong>Mis skills:</strong> solo si inicias sesión. Lista tus propias skills, también las privadas.</li>
</ul>

<p>Solo lee. Claude no puede crear, cambiar ni borrar nada en tu cuenta.</p>

<h2 id="requisitos">Qué necesitas</h2>

<ul>
<li><strong>Una cuenta de Claude.</strong> Los conectores personalizados están disponibles en todos los planes, también en el gratuito, que permite añadir uno.</li>
<li><strong>Para el catálogo público:</strong> nada más. No hace falta cuenta en ia-skills.</li>
<li><strong>Para tus skills privadas:</strong> una cuenta gratis en ia-skills.com con alguna skill guardada como privada.</li>
</ul>

<p>Es la misma dirección para todo: tú eliges al añadirlo si inicias sesión en ia-skills (catálogo y tus skills) o no (solo el catálogo).</p>

<h2 id="catalogo">Añadir el conector en Claude</h2>

<p>La dirección del conector es:</p>

<pre><code>https://ia-skills.com/api/mcp</code></pre>

<ol>
<li>En Claude, en la web o en la app de escritorio, abre <strong>Personalizar → Conectores</strong> (en inglés, <em>Customize → Connectors</em>). También puedes ir directamente a <a href="https://claude.ai/customize/connectors" rel="noopener">claude.ai/customize/connectors</a>.</li>
<li>Pulsa <strong>Añadir</strong> y elige <strong>conector personalizado</strong> (<em>Add custom connector</em>).</li>
<li>De nombre, pon <strong>ia-skills</strong>. En la dirección del servidor, pega la de arriba y continúa.</li>
<li>Cuando te pregunte por la autenticación, elige <strong>iniciar sesión</strong> si quieres usar tus skills privadas, o <strong>sin inicio de sesión</strong> (<em>No sign in</em>) si solo quieres el catálogo público.</li>
<li>Pulsa <strong>Añadir</strong>. Ya aparece en tu lista de conectores.</li>
</ol>

<h2 id="privadas">Iniciar sesión para usar tus skills privadas</h2>

<p>Las skills privadas son prompts que guardas en ia-skills solo para ti, sin publicarlos. Si al añadir el conector eliges iniciar sesión, pasa esto:</p>

<ol>
<li>Claude abre una ventana de ia-skills. Si no tienes la sesión iniciada, entra con tu cuenta, o créala gratis en ese momento.</li>
<li>Verás qué pide Claude: buscar y leer el catálogo y tus skills, también las privadas. Nada de crear, cambiar o borrar, ni de ver tu email.</li>
<li>Pulsa <strong>Permitir acceso</strong>. La ventana se cierra y vuelves a Claude con el conector listo.</li>
</ol>

<p>No hay que copiar ninguna clave. Claude renueva el permiso solo mientras lo uses, y en tu perfil de ia-skills, en <strong>Aplicaciones conectadas</strong>, ves qué aplicaciones tienen acceso y puedes desconectarlas cuando quieras.</p>

<p>Si usas una herramienta que no permite iniciar sesión, tu perfil también puede darte una dirección con una clave personal. Trátala como una contraseña.</p>

<h2 id="usar">Cómo usarlo en una conversación</h2>

<p>En una conversación nueva, pulsa el <strong>+</strong> de abajo a la izquierda, entra en <strong>Conectores</strong> y activa ia-skills. Después pídeselo con tus palabras:</p>

<ul>
<li>«Búscame en ia-skills un prompt para preparar una entrevista de trabajo.»</li>
<li>«Usa mi skill de propuestas comerciales con este cliente: …»</li>
<li>«¿Qué skills privadas tengo guardadas?»</li>
</ul>

<p>La primera vez que Claude use una herramienta del conector te pedirá permiso. Como solo lee, puedes permitirlo siempre sin riesgo.</p>

<p>Un consejo: los prompts del catálogo tienen campos entre [corchetes] para tus datos. Dale a Claude esos datos en el mismo mensaje y te ahorras una vuelta de preguntas. Si no sabes qué poner, en <a href="/guias/como-escribir-prompts-efectivos">cómo escribir prompts efectivos</a> explicamos qué contexto ayuda más.</p>

<h2 id="claude-code">En Claude Code</h2>

<p>En Claude Code el conector se añade con un comando. Para el catálogo público:</p>

<pre><code>claude mcp add --transport http ia-skills https://ia-skills.com/api/mcp</code></pre>

<p>Para usar también tus skills privadas, añade esta otra dirección, que pide iniciar sesión:</p>

<pre><code>claude mcp add --transport http ia-skills https://ia-skills.com/api/mcp/cuenta</code></pre>

<p>Después, dentro de Claude Code, escribe <code>/mcp</code>, elige ia-skills y sigue los pasos para iniciar sesión: se abrirá ia-skills en tu navegador para que des permiso. Si lo que quieres es instalar las skills como archivos en tu proyecto, mira <a href="/guias/que-son-los-skills-de-claude-code">qué son los skills de Claude Code</a>.</p>

<h2 id="seguridad">Seguridad: qué puede ver y qué no</h2>

<ul>
<li><strong>Sin iniciar sesión,</strong> el conector solo ve las skills publicadas, las mismas que cualquiera ve en la web.</li>
<li><strong>Con la sesión iniciada,</strong> ve además tus propias skills, también las privadas. Nunca las privadas de otra persona.</li>
<li><strong>Solo lee.</strong> No puede crear, cambiar ni borrar skills, ni ver tu email ni tu contraseña.</li>
<li><strong>Le quitas el acceso cuando quieras</strong> desde «Aplicaciones conectadas» en tu perfil. Si no lo usas en 60 días, el permiso caduca solo.</li>
</ul>

<p>Claude se conecta a ia-skills desde los servidores de Anthropic, no desde tu ordenador. Lo que haga con el contenido que lee se rige por las condiciones de Anthropic, como el resto de tu conversación.</p>

<h2 id="problemas">Si algo no funciona</h2>

<ul>
<li><strong>Claude dice que no puede conectarse:</strong> revisa que la dirección esté entera, sin espacios al final. Si le quitaste el acceso desde tu perfil, quita el conector en Claude y añádelo de nuevo para volver a darle permiso.</li>
<li><strong>Claude no usa el conector:</strong> comprueba que está activado en esa conversación desde el botón <strong>+</strong> y dile explícitamente «busca en ia-skills».</li>
<li><strong>No encuentra una skill tuya:</strong> seguramente añadiste el conector sin iniciar sesión. Quítalo y vuelve a añadirlo eligiendo iniciar sesión.</li>
<li><strong>Al iniciar sesión sale «No se puede completar la conexión»:</strong> vuelve a Claude y repite el proceso. Si se repite, quita el conector y añádelo otra vez.</li>
<li><strong>No te deja añadir otro conector:</strong> en el plan gratuito de Claude solo cabe uno. Quita el que no uses.</li>
</ul>
HTML,
];
