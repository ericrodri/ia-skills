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
    'words' => 1089,
    'about' => 'Claude',
    'related' => ['plugins-y-mcp-en-claude-code', 'como-usar-claude', 'que-son-los-skills-de-claude-code', 'empezar-con-claude-code'],
    'toc' => [
        'que-es' => 'Qué es el conector de ia-skills',
        'requisitos' => 'Qué necesitas',
        'catalogo' => 'Conectar el catálogo público',
        'privadas' => 'Conectar también tus skills privadas',
        'usar' => 'Cómo usarlo en una conversación',
        'claude-code' => 'En Claude Code',
        'seguridad' => 'Seguridad: qué puede ver y qué no',
        'problemas' => 'Si algo no funciona',
    ],
    'faq' => [
        '¿Cuesta algo?' => 'No. El conector de ia-skills es gratis, igual que la cuenta. Lo único que necesitas es una cuenta de Claude: el plan gratuito permite añadir un conector personalizado, y los de pago, más.',
        '¿Puede Claude cambiar o borrar mis skills?' => 'No. El conector solo lee: puede buscar skills y leer sus prompts, nada más. Para crear, editar o borrar una skill tienes que entrar en ia-skills.com.',
        '¿Mi equipo puede usar mis skills privadas desde su Claude?' => 'No con tu dirección personal: lleva tu clave y no debe salir de tu cuenta. Para pasarle una skill a alguien, usa el enlace para compartir de su ficha. Cada persona puede crear su propio conector con su cuenta.',
        '¿Qué hago si he compartido mi dirección por error?' => 'Entra en tu perfil de ia-skills y pulsa «Generar clave nueva». La dirección anterior deja de funcionar al momento. Después vuelve a añadir el conector en Claude con la dirección nueva.',
        '¿Funciona con ChatGPT u otros asistentes?' => 'El conector usa MCP, un estándar abierto, así que funciona en cualquier asistente que admita servidores MCP remotos. Esta guía explica Claude porque es donde lo hemos probado.',
    ],
    'ctaTitle' => 'Guarda tus prompts para usarlos desde Claude',
    'ctaBody' => 'Crea una cuenta gratis, guarda tus prompts como skills privadas y conéctalas a Claude desde tu perfil. Si todavía no sabes qué guardar, empieza por el <a href="/skills">catálogo</a>.',
    'body' => <<<'HTML'
<p>Si usas los prompts de ia-skills, lo normal es abrir la web, buscar el prompt, copiarlo y pegarlo en Claude. Con el conector te ahorras ese ir y venir: le pides a Claude «búscame un prompt para revisar contratos» y él lo busca en ia-skills, lo lee y lo usa en la misma conversación.</p>

<h2 id="que-es">Qué es el conector de ia-skills</h2>

<p>Un conector es una forma de darle a Claude acceso a un servicio externo. Por debajo usa MCP (Model Context Protocol), el estándar abierto con el que Claude se conecta a herramientas y datos. Si quieres entender MCP con más detalle, lo explicamos en <a href="/guias/plugins-y-mcp-en-claude-code">Plugins y MCP en Claude Code</a>.</p>

<p>El conector de ia-skills le da a Claude tres herramientas:</p>

<ul>
<li><strong>Buscar skills:</strong> busca en el catálogo por tarea y profesión, ordenado por popularidad.</li>
<li><strong>Leer una skill:</strong> trae el prompt completo, con sus campos entre [corchetes] para rellenar.</li>
<li><strong>Mis skills:</strong> solo en el conector personal. Lista tus propias skills, también las privadas.</li>
</ul>

<p>Solo lee. Claude no puede crear, cambiar ni borrar nada en tu cuenta.</p>

<h2 id="requisitos">Qué necesitas</h2>

<ul>
<li><strong>Una cuenta de Claude.</strong> Los conectores personalizados están disponibles en todos los planes, también en el gratuito, que permite añadir uno.</li>
<li><strong>Para el catálogo público:</strong> nada más. No hace falta cuenta en ia-skills.</li>
<li><strong>Para tus skills privadas:</strong> una cuenta gratis en ia-skills.com con alguna skill guardada como privada.</li>
</ul>

<p>Si tienes el plan gratuito de Claude y solo puedes añadir un conector, elige el personal: incluye el catálogo público y además tus skills.</p>

<h2 id="catalogo">Conectar el catálogo público</h2>

<p>La dirección del conector público es:</p>

<pre><code>https://ia-skills.com/api/mcp</code></pre>

<ol>
<li>En Claude, en la web o en la app de escritorio, abre <strong>Personalizar → Conectores</strong> (en inglés, <em>Customize → Connectors</em>). También puedes ir directamente a <a href="https://claude.ai/customize/connectors" rel="noopener">claude.ai/customize/connectors</a>.</li>
<li>Pulsa <strong>Añadir</strong> y elige <strong>conector personalizado</strong> (<em>Add custom connector</em>).</li>
<li>De nombre, pon <strong>ia-skills</strong>. En la dirección del servidor, pega la de arriba y continúa.</li>
<li>Cuando te pregunte por la autenticación, elige <strong>sin inicio de sesión</strong> (<em>No sign in</em>): el conector no la necesita.</li>
<li>Pulsa <strong>Añadir</strong>. Ya aparece en tu lista de conectores.</li>
</ol>

<h2 id="privadas">Conectar también tus skills privadas</h2>

<p>Las skills privadas son prompts que guardas en ia-skills solo para ti, sin publicarlos. Para que Claude las vea, necesitas tu dirección personal:</p>

<ol>
<li>Entra en ia-skills.com con tu cuenta y ve a tu perfil. En la sección <strong>Conecta Claude con tus skills</strong>, pulsa <strong>Crear mi conector</strong>. También llegas desde tu panel, con el enlace «Úsalas desde Claude».</li>
<li>Copia la dirección que aparece. Empieza por <code>https://ia-skills.com/api/mcp/</code> y sigue con tu clave personal.</li>
<li>Añádela en Claude con los mismos pasos del apartado anterior. Si ya tenías el conector público, quítalo: el personal ya incluye el catálogo.</li>
</ol>

<p>La dirección solo se muestra una vez, porque guardamos tu clave cifrada y no podemos recuperarla. Si la pierdes, genera una nueva desde el perfil.</p>

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

<p>Para tus skills privadas, cambia la dirección por la tuya personal. Tu perfil te enseña el comando ya preparado para copiarlo. Si lo que quieres es instalar las skills como archivos en tu proyecto, mira <a href="/guias/que-son-los-skills-de-claude-code">qué son los skills de Claude Code</a>.</p>

<h2 id="seguridad">Seguridad: qué puede ver y qué no</h2>

<ul>
<li><strong>Sin tu dirección personal,</strong> el conector solo ve las skills publicadas, las mismas que cualquiera ve en la web.</li>
<li><strong>Con tu dirección personal,</strong> ve además tus propias skills, también las privadas. Nunca las privadas de otra persona.</li>
<li><strong>Tu dirección es como una contraseña.</strong> No la pegues en documentos compartidos ni se la pases a nadie. Para compartir una skill concreta, usa el enlace para compartir de su ficha.</li>
<li><strong>Si se filtra,</strong> genera una clave nueva en tu perfil y la anterior deja de funcionar al momento.</li>
</ul>

<p>Claude se conecta a ia-skills desde los servidores de Anthropic, no desde tu ordenador. Lo que haga con el contenido que lee se rige por las condiciones de Anthropic, como el resto de tu conversación.</p>

<h2 id="problemas">Si algo no funciona</h2>

<ul>
<li><strong>Claude dice que no puede conectarse:</strong> revisa que la dirección esté entera, sin espacios al final. Si es la personal y generaste una clave nueva después, la antigua ya no vale: copia la nueva y vuelve a añadir el conector.</li>
<li><strong>Claude no usa el conector:</strong> comprueba que está activado en esa conversación desde el botón <strong>+</strong> y dile explícitamente «busca en ia-skills».</li>
<li><strong>No encuentra una skill tuya:</strong> asegúrate de que usas la dirección personal y no la pública. Con la pública, tus privadas no existen para Claude.</li>
<li><strong>No te deja añadir otro conector:</strong> en el plan gratuito de Claude solo cabe uno. Quita el que no uses.</li>
</ul>
HTML,
];
