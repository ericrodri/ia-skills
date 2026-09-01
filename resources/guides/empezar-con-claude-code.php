<?php

return [
    'title' => 'Cómo instalar Claude Code y sacarle partido la primera semana',
    'navTitle' => 'Empezar con Claude Code',
    'seoTitle' => 'Cómo instalar Claude Code: guía de primeros pasos',
    'description' => 'Instalación en macOS, Linux y Windows, qué plan necesitas y los comandos que se usan de verdad. Y en qué orden aprenderlos para no abandonar.',
    'excerpt' => 'Instalarlo cuesta dos minutos. Lo que separa a quien lo deja en tres días de quien no vuelve atrás es el orden en que aprende cuatro cosas.',
    'category' => 'Tutorial',
    'published' => '2026-08-31',
    'updated' => '2026-08-31',
    'readingMinutes' => 11,
    'words' => 1950,
    'about' => 'Claude Code',
    'related' => ['que-son-los-skills-de-claude-code', 'como-crear-un-skill-para-claude-code', 'claude-code-vs-cursor'],
    'toc' => [
        'requisitos' => 'Qué necesitas antes de empezar',
        'instalar' => 'Instalar en macOS, Linux o Windows',
        'login' => 'Iniciar sesión: qué plan hace falta',
        'primera-sesion' => 'La primera sesión, paso a paso',
        'comandos' => 'Los comandos que se usan de verdad',
        'claude-md' => 'CLAUDE.md: el archivo que lo cambia todo',
        'permisos' => 'Permisos: hasta dónde le dejas llegar',
        'semana' => 'Un plan para la primera semana',
        'errores' => 'Errores de principiante que cuestan una tarde',
    ],
    'faq' => [
        '¿Claude Code es gratis?' => 'No tiene un plan gratuito propio: hace falta una suscripción de Claude (Pro, Max, Team o Enterprise) o una cuenta de la consola de desarrollador con crédito de API. En agosto de 2026, el plan Pro está en unos 17 $ al mes con pago anual y 20 $ al mes con pago mensual, y Max arranca en 100 $. Con suscripción pagas una cuota fija con límites de uso; con crédito de API pagas por consumo, que sale más caro si lo usas a diario.',
        '¿Funciona en Windows sin WSL?' => 'Sí. Hay instalador nativo para PowerShell y para CMD, y también paquete de WinGet. En Windows nativo conviene tener instalado Git para Windows: sin él, Claude Code usa PowerShell como shell en lugar de Bash, y algunos comandos que copies de tutoriales escritos para Linux fallarán por sintaxis. Si ya trabajas dentro de WSL, instálalo dentro de WSL y olvídate de esto.',
        '¿Necesito saber programar para usarlo?' => 'Ayuda, pero no es imprescindible para las tareas de lectura: preguntar qué hace un proyecto, buscar dónde está algo o resumir un cambio funciona sin escribir una línea. Para aceptar cambios en código sí necesitas entender lo suficiente para revisarlos; si no puedes revisar, no puedes aprobar. Fuera del código también sirve para trabajo con ficheros: renombrados masivos, conversiones, informes a partir de CSV.',
        '¿Puede modificar mis archivos sin que yo lo apruebe?' => 'Depende del modo de permisos en el que esté la sesión. En modo manual pide confirmación para cada edición y cada comando. En modo automático —el de arranque en las suscripciones Pro, Max y Team para sesiones interactivas de terminal— un clasificador revisa las acciones y la mayoría se ejecutan sin preguntarte. Se cambia de modo con Shift+Tab en cualquier momento, y en un repositorio con cambios sin confirmar conviene empezar por el manual.',
        '¿En qué se diferencia de usar Claude en el navegador?' => 'En que tiene acceso a tu proyecto y puede actuar: lee los archivos que necesita, ejecuta comandos, lanza los tests y hace commits. En el navegador tienes que pegarle el contexto a mano y copiar la respuesta de vuelta. Para preguntas sueltas el navegador va bien; para trabajar sobre un repositorio, la diferencia de tiempo es de otro orden.',
        '¿Se lleva mi código a algún sitio?' => 'Envía el contexto que necesita para responder: los archivos que lee y los resultados de los comandos que ejecuta, igual que cualquier asistente en la nube. No sube el repositorio entero. Si trabajas con código sujeto a acuerdos de confidencialidad, la conversación que toca tener es con quien firma esos acuerdos, y lo razonable es dejarlo escrito en la política interna antes de instalarlo en veinte portátiles.',
    ],
    'ctaTitle' => 'Lo primero que merece la pena instalar después',
    'ctaBody' => 'Un Claude Code recién instalado sabe de tu proyecto lo que lee. Los skills son la forma de darle procedimientos que no tenga que reinventar cada vez: mira los mejor valorados en <a href="/profesiones/desarrollo">Desarrollo</a>, o los de tu área si no escribes código.',
    'body' => <<<'HTML'
<p>Claude Code es un agente que trabaja desde la terminal sobre los archivos de tu proyecto: lee lo que necesita, propone cambios, ejecuta comandos y lanza los tests. La instalación son dos minutos. Lo que decide si a la semana sigues usándolo es otra cosa: el orden en que aprendes a darle contexto, a acotarle el permiso y a dejarle las instrucciones por escrito.</p>

<p>Esta guía va de eso. Primero los comandos exactos, luego el orden.</p>

<h2 id="requisitos">Qué necesitas antes de empezar</h2>

<ul>
    <li><strong>Una terminal abierta.</strong> Terminal o iTerm en macOS, cualquiera en Linux, PowerShell o CMD en Windows.</li>
    <li><strong>Un proyecto con el que trabajar.</strong> Vale cualquier carpeta con archivos; si además es un repositorio de Git, aprovecharás la mitad de lo bueno desde el primer día.</li>
    <li><strong>Una cuenta con acceso.</strong> Una suscripción de Claude (Pro, Max, Team o Enterprise) o una cuenta de la consola de desarrollador con crédito. Sin una de las dos, la instalación se completa pero no podrás iniciar sesión.</li>
</ul>

<h2 id="instalar">Instalar en macOS, Linux o Windows</h2>

<p>El instalador nativo es el camino recomendado y el único que se actualiza solo en segundo plano. Elige la línea de tu sistema:</p>

<p><strong>macOS, Linux o WSL:</strong></p>

<pre><code>curl -fsSL https://claude.ai/install.sh | bash</code></pre>

<p><strong>Windows, en PowerShell:</strong></p>

<pre><code>irm https://claude.ai/install.ps1 | iex</code></pre>

<p><strong>Windows, en CMD:</strong></p>

<pre><code>curl -fsSL https://claude.ai/install.cmd -o install.cmd &amp;&amp; install.cmd &amp;&amp; del install.cmd</code></pre>

<p>Si al pegar la línea de CMD te contesta que <code>&amp;&amp;</code> no es un separador válido, estás en PowerShell y no en CMD. Si al pegar la de PowerShell te dice que <code>irm</code> no se reconoce, es al contrario. El indicador lo delata: PowerShell muestra <code>PS C:\</code> y CMD solo <code>C:\</code>.</p>

<p>Si prefieres un gestor de paquetes, también están disponibles:</p>

<figure>
<table>
    <thead>
        <tr><th>Vía</th><th>Comando</th><th>Se actualiza solo</th></tr>
    </thead>
    <tbody>
        <tr><td>Instalador nativo</td><td>Las líneas de arriba</td><td>Sí</td></tr>
        <tr><td>Homebrew (macOS, Linux)</td><td><code>brew install --cask claude-code</code></td><td>No: <code>brew upgrade claude-code</code></td></tr>
        <tr><td>WinGet (Windows)</td><td><code>winget install Anthropic.ClaudeCode</code></td><td>No: <code>winget upgrade Anthropic.ClaudeCode</code></td></tr>
    </tbody>
</table>
</figure>

<p>Homebrew ofrece dos cascos: <code>claude-code</code> sigue el canal estable, que va aproximadamente una semana por detrás y se salta las versiones con regresiones graves, y <code>claude-code@latest</code> recibe cada versión en cuanto sale. Si te molesta que una herramienta cambie de comportamiento a media tarde, el estable es tu canal. En Debian, Fedora, RHEL y Alpine hay además paquetes para <code>apt</code>, <code>dnf</code> y <code>apk</code>.</p>

<p>Para comprobar que ha entrado:</p>

<pre><code>claude --version</code></pre>

<p>Debe imprimir un número de versión seguido de <code>(Claude Code)</code>.</p>

<h2 id="login">Iniciar sesión: qué plan hace falta</h2>

<p>Arranca una sesión y te pedirá autenticarte en el navegador:</p>

<pre><code>claude</code></pre>

<p>Sirven las cuentas de suscripción (Pro, Max, Team, Enterprise), las de la consola de desarrollador con crédito prepagado y el acceso a través de proveedores de nube corporativos. Para cambiar de cuenta más adelante, <code>/login</code> dentro de la sesión.</p>

<p>Sobre el dinero, con precios de agosto de 2026 consultados en la página oficial: Pro está en unos 17 $ al mes con pago anual y 20 $ con pago mensual; Max arranca en 100 $ con dos escalones de uso; los planes de equipo rondan los 20-25 $ por puesto. La regla práctica es sencilla: si vas a usarlo todos los días, la suscripción sale mejor que el crédito de API; si es para probar un par de tardes, el crédito te deja pagar solo lo que gastes.</p>

<h2 id="primera-sesion">La primera sesión, paso a paso</h2>

<p>Colócate en la carpeta del proyecto y arranca:</p>

<pre><code>cd /ruta/a/tu/proyecto
claude</code></pre>

<p>La tentación es pedirle inmediatamente que implemente algo. Es el error clásico. Las tres primeras peticiones deberían ser de lectura, porque son las que te enseñan a ti si te está entendiendo:</p>

<ol>
    <li><code>¿qué hace este proyecto?</code></li>
    <li><code>¿dónde está el punto de entrada y cómo se arranca en local?</code></li>
    <li><code>explícame la estructura de carpetas</code></li>
</ol>

<p>Si las respuestas son correctas, ya sabes que está leyendo el proyecto de verdad. Si son vagas, tienes un problema de contexto que ninguna instrucción posterior va a arreglar, y la solución está dos apartados más abajo.</p>

<p>El primer cambio que le pidas conviene que sea pequeño y verificable: renombrar una función, añadir una validación, escribir el test que falta. No «refactoriza el módulo de autenticación». Lo que buscas en ese primer cambio no es ahorrar tiempo, es ver cómo te presenta el diff y decidir cuánto vas a confiar.</p>

<h2 id="comandos">Los comandos que se usan de verdad</h2>

<p>Hay decenas. Estos son los que aparecen a diario:</p>

<figure>
<table>
    <thead>
        <tr><th>Comando</th><th>Qué hace</th></tr>
    </thead>
    <tbody>
        <tr><td><code>claude</code></td><td>Sesión interactiva en la carpeta actual</td></tr>
        <tr><td><code>claude "arregla el error de build"</code></td><td>Sesión interactiva con la petición ya escrita</td></tr>
        <tr><td><code>claude -p "explica esta función"</code></td><td>Una consulta y sale: ideal para encadenar en scripts</td></tr>
        <tr><td><code>claude -c</code></td><td>Continúa la última conversación de esta carpeta</td></tr>
        <tr><td><code>claude -r</code></td><td>Retoma una conversación anterior de la lista</td></tr>
        <tr><td><code>/clear</code></td><td>Vacía el historial sin cerrar la sesión</td></tr>
        <tr><td><code>/help</code></td><td>Lista comandos y skills disponibles</td></tr>
    </tbody>
</table>
</figure>

<p>De estos, el que más tiempo ahorra es <code>/clear</code>, y casi nadie lo usa al principio. Una conversación que arrastra dos horas de contexto irrelevante responde peor y cuesta más que una recién abierta. Cuando cambies de tarea, vacía.</p>

<p>El segundo es <code>-p</code>. Convierte la herramienta en algo que puedes meter dentro de un script o de un hook de Git: revisar el mensaje de un commit, resumir un diff, comprobar si un cambio toca ficheros sensibles.</p>

<h2 id="claude-md">CLAUDE.md: el archivo que lo cambia todo</h2>

<p>Un archivo <code>CLAUDE.md</code> en la raíz del proyecto se lee al empezar cada sesión. Es donde escribes lo que un compañero nuevo necesitaría saber y no puede deducir del código:</p>

<ul>
    <li>Cómo se arranca, cómo se pasan los tests y con qué comando exacto.</li>
    <li>Las convenciones que no son evidentes: dónde va la lógica de negocio, qué no se toca, cómo se nombran las cosas.</li>
    <li>Las trampas conocidas. Este es el apartado más valioso y el que nadie escribe: «la caché de este proyecto corrompe los objetos serializados, guarda solo escalares», «no lances el indexador sobre <code>vendor/</code>».</li>
</ul>

<p>Cada trampa que documentas es un error que no vuelve a repetirse. Empieza con diez líneas y añade una cada vez que tengas que corregir lo mismo por segunda vez; un archivo de doscientas líneas escrito de golpe se queda desfasado en dos semanas y nadie lo mira.</p>

<h2 id="permisos">Permisos: hasta dónde le dejas llegar</h2>

<p>La pregunta no es si confías en la herramienta, sino qué pasa si se equivoca en esta carpeta concreta. Con Shift+Tab cambias el modo de permisos de la sesión en cualquier momento, y esa es la tecla que conviene aprender el primer día:</p>

<ul>
    <li><strong>Manual:</strong> pide confirmación para cada edición y cada comando. Es lo que quieres en un repositorio con cambios sin confirmar, en producción o el día que lo instalas.</li>
    <li><strong>Automático:</strong> el modo de arranque en las suscripciones Pro, Max y Team para sesiones interactivas de terminal. Un clasificador revisa las acciones y la mayoría se ejecutan sin preguntarte. Va bien en una rama de trabajo con todo confirmado, donde <code>git diff</code> y <code>git checkout .</code> son tu red.</li>
    <li><strong>Planificación:</strong> lee y propone un plan sin tocar nada. Es el modo correcto para tareas grandes: primero acuerdas el plan, luego ejecutas.</li>
</ul>

<p>La regla que evita todos los disgustos no es un ajuste, es una costumbre: trabaja siempre en una rama, con el árbol limpio antes de empezar. Deshacer un cambio que no te gusta pasa a costar un comando.</p>

<h2 id="semana">Un plan para la primera semana</h2>

<ol>
    <li><strong>Día 1.</strong> Instalar, tres preguntas de lectura, un cambio pequeño en una rama.</li>
    <li><strong>Día 2.</strong> Escribir un <code>CLAUDE.md</code> de diez líneas: arranque, tests, dos convenciones.</li>
    <li><strong>Día 3.</strong> Git conversacional: pedirle el resumen de tus cambios, que redacte un mensaje de commit, que te explique un diff que no entiendes.</li>
    <li><strong>Día 4.</strong> Una tarea repetitiva completa de las que te tocan cada semana, con el método de <a href="/guias/automatizar-tareas-con-ia-en-el-trabajo">automatizar tareas con IA</a>.</li>
    <li><strong>Día 5.</strong> Convertir esa tarea en un skill, para no volver a explicarla nunca: <a href="/guias/como-crear-un-skill-para-claude-code">cómo crear un skill</a>.</li>
</ol>

<p>Si llegas al día 5 tienes ya el bucle completo: contexto en el proyecto, procedimiento guardado y una tarea menos en tu semana. A partir de ahí, lo demás —<a href="/guias/plugins-y-mcp-en-claude-code">plugins y conexiones MCP</a>— es acumular, no aprender.</p>

<h2 id="errores">Errores de principiante que cuestan una tarde</h2>

<ol>
    <li><strong>Pedir tareas enormes el primer día.</strong> «Migra esto a la nueva API» sin plan previo acaba en un diff de mil líneas que no puedes revisar y no te atreves a aceptar. Usa el modo de planificación.</li>
    <li><strong>No leer los diffs.</strong> Aprobar sin mirar funciona nueve veces y la décima te mete un cambio silencioso en un fichero de configuración. Si no vas a revisar, no aumentes los permisos.</li>
    <li><strong>Trabajar con el árbol sucio.</strong> Mezclar tus cambios a medias con los del agente convierte cualquier vuelta atrás en arqueología.</li>
    <li><strong>Arrastrar una conversación eterna.</strong> Sin <code>/clear</code>, el contexto se llena de ruido y la calidad de las respuestas baja sin que sepas por qué.</li>
    <li><strong>Repetir las mismas instrucciones cada día.</strong> Si has explicado tres veces la misma convención, no es un problema del modelo: es una línea que falta en <code>CLAUDE.md</code> o un <a href="/guias/que-son-los-skills-de-claude-code">skill</a> que no has escrito.</li>
</ol>
HTML,
];
