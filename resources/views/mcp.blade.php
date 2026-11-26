@extends('layouts.site')

{{--
    /mcp — ia-skills dentro de Claude (conector MCP).

    Es la página que se comparte fuera (registro oficial de MCP, directorios,
    redes) y a la que lleva «Conectar con Claude» desde la cuenta, así que todo
    el contenido va en el HTML. El único JavaScript es el botón de copiar, y las
    direcciones se ven y se seleccionan igual sin él.

    Lo que se afirma aquí tiene que cuadrar con App\Support\McpConnector (qué
    herramientas hay y qué ve cada una), con tools/ia-skills-cli (src/api.mjs)
    y con la política de privacidad. El paso a paso largo, con los problemas
    habituales, está en la guía conectar-ia-skills-a-claude.
--}}

@section('content')
    @php($guide = route('guides.show', ['slug' => 'conectar-ia-skills-a-claude']))

    <article class="max-w-3xl mx-auto px-4 sm:px-6 py-12">
        <p class="text-xs font-semibold uppercase tracking-wide text-brand-600 dark:text-brand-400">Conector MCP · gratis</p>
        <h1 class="mt-2 text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">
            Usa ia-skills dentro de Claude
        </h1>
        <p class="mt-4 text-lg text-gray-600 dark:text-gray-300">
            Conecta ia-skills a Claude y pídele los prompts sin salir de la conversación: los {{ $skillsCount }} del catálogo,
            las fichas que has guardado y tus skills privadas. Se configura en dos minutos y no hay que instalar nada.
        </p>

        {{-- Claude web, escritorio y móvil: conector remoto (McpConnectorController) --}}
        <section id="claude" class="mt-8 rounded-2xl border border-brand-200 dark:border-brand-800 bg-brand-50/60 dark:bg-brand-900/10 p-5">
            <h2 class="text-base font-bold text-brand-900 dark:text-brand-200">En Claude: web, escritorio y móvil</h2>
            <p class="mt-1 text-sm text-gray-700 dark:text-gray-300">Esta es la dirección del conector:</p>
            <div class="mt-2 flex items-stretch gap-2">
                <pre id="mcp-remote" class="flex-1 min-w-0 bg-gray-900 text-gray-100 rounded-lg px-4 py-3 text-sm font-mono overflow-x-auto whitespace-nowrap">{{ route('api.mcp') }}</pre>
                <button
                    type="button"
                    data-copy="#mcp-remote"
                    class="shrink-0 px-4 rounded-lg text-sm font-semibold bg-brand-600 hover:bg-brand-700 text-white transition-colors"
                >Copiar</button>
            </div>
            <ol class="mt-4 space-y-2 text-sm text-gray-700 dark:text-gray-300 list-decimal pl-5">
                <li>En Claude, en la web o en la app de escritorio, abre <strong>Personalizar → Conectores</strong>, o entra directamente en <a href="https://claude.ai/customize/connectors" rel="noopener" class="underline">claude.ai/customize/connectors</a>.</li>
                <li>Pulsa <strong>Añadir</strong> y elige <strong>conector personalizado</strong>.</li>
                <li>De nombre pon <strong>ia-skills</strong> y pega la dirección de arriba.</li>
                <li>
                    Elige <strong>iniciar sesión</strong> para usar también tus guardadas y tus skills privadas: se abre ia-skills,
                    entras con tu cuenta (o con Google) y pulsas <strong>Permitir acceso</strong>. Si solo quieres el catálogo, elige
                    <strong>sin inicio de sesión</strong>.
                </li>
                <li>En cada conversación, actívalo desde el botón <strong>+</strong> → <strong>Conectores</strong>.</li>
            </ol>
            <p class="mt-3 text-xs text-gray-600 dark:text-gray-400">
                En el móvil no hace falta repetirlo: el conector que añades en la web aparece también en la app de Claude.
                El plan gratuito de Claude admite un conector personalizado. Si algo falla, la guía
                <a href="{{ $guide }}" class="underline">conectar ia-skills a Claude</a> explica los errores más habituales.
            </p>
        </section>

        {{-- Claude Code --}}
        <section id="claude-code" class="mt-6 rounded-2xl border border-gray-200 dark:border-gray-800 bg-gray-50 dark:bg-gray-800/40 p-5">
            <h2 class="text-base font-bold text-gray-900 dark:text-white">En Claude Code</h2>
            <p class="mt-1 text-sm text-gray-700 dark:text-gray-300">Con tus guardadas y tus skills privadas (pide iniciar sesión):</p>
            <pre class="mt-2 bg-gray-900 text-gray-100 rounded-lg px-4 py-3 text-sm font-mono overflow-x-auto whitespace-nowrap">claude mcp add --transport http ia-skills {{ route('api.mcp.account') }}</pre>
            <p class="mt-3 text-sm text-gray-700 dark:text-gray-300">
                Después escribe <code>/mcp</code> dentro de Claude Code, elige ia-skills y da permiso en el navegador.
                Si solo quieres el catálogo, sin cuenta:
            </p>
            <pre class="mt-2 bg-gray-900 text-gray-100 rounded-lg px-4 py-3 text-sm font-mono overflow-x-auto whitespace-nowrap">claude mcp add --transport http ia-skills {{ route('api.mcp') }}</pre>
        </section>

        <div class="guide-content mt-12">
            <h2 id="que-pedir">Qué le puedes pedir</h2>
            <p>No hay comandos que aprender: se lo pides con tus palabras y Claude decide cuándo usar ia-skills. Por ejemplo:</p>
            <ul>
                <li>«Búscame en ia-skills un prompt para preparar una entrevista de trabajo.»</li>
                <li>«Usa mis guardadas de ia-skills: la de propuestas comerciales, con este cliente: …»</li>
                <li>«¿Qué skills privadas tengo en ia-skills?»</li>
            </ul>
            <p>
                Los prompts tienen campos entre [corchetes] para tus datos. Dale a Claude esos datos en el mismo mensaje
                y te ahorras una vuelta de preguntas.
            </p>

            <h2 id="que-puede-ver">Qué puede ver y qué no</h2>
            <ul>
                <li><strong>Sin iniciar sesión,</strong> solo las skills publicadas, las mismas que ve cualquiera en la web.</li>
                <li><strong>Con la sesión iniciada,</strong> además tus fichas guardadas y tus propias skills, también las privadas. Nunca las privadas de otra persona.</li>
                <li><strong>Solo lee.</strong> No puede crear, cambiar ni borrar nada, ni ver tu email ni tu contraseña.</li>
                <li><strong>Le quitas el acceso cuando quieras</strong> desde «Aplicaciones conectadas» en tu perfil.</li>
            </ul>

            <h2 id="profesiones">Para qué profesiones</h2>
            <p>El catálogo está organizado por profesión y escrito en español:</p>
        </div>

        <ul class="mt-4 flex flex-wrap gap-2">
            @foreach($professions as $profession)
                <li>
                    <a href="{{ route('professions.show', ['profession' => $profession['slug']]) }}"
                       class="inline-block rounded-full border border-gray-200 dark:border-gray-700 px-3 py-1 text-sm text-gray-700 dark:text-gray-300 hover:border-brand-400 hover:text-brand-700 dark:hover:text-brand-400 transition-colors">
                        {{ $profession['name'] }}
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="guide-content mt-12">
            <h2 id="instalar">Instalar skills como archivos en tu equipo</h2>
            <p>
                Si usas Claude Code y quieres que Claude, además de leer los prompts, los instale como skills en tu
                equipo, usa la versión local. Necesitas <a href="https://code.claude.com/docs/es/overview" rel="noopener">Claude Code</a>
                y Node.js 18 o superior; no hace falta cuenta ni clave.
            </p>
        </div>

        <div class="mt-4 rounded-2xl border border-violet-200 dark:border-violet-800 bg-violet-50/60 dark:bg-violet-900/10 p-5">
            <div class="flex items-stretch gap-2">
                <pre id="mcp-command" class="flex-1 min-w-0 bg-gray-900 text-gray-100 rounded-lg px-4 py-3 text-sm font-mono overflow-x-auto whitespace-nowrap">{{ $command }}</pre>
                <button
                    type="button"
                    data-copy="#mcp-command"
                    class="shrink-0 px-4 rounded-lg text-sm font-semibold bg-violet-600 hover:bg-violet-700 text-white transition-colors"
                >Copiar</button>
            </div>
        </div>

        <div class="guide-content mt-6">
            <p>
                Trabajas con Claude como siempre y, cuando una tarea encaja con algo del catálogo, Claude lo busca, te lo
                enseña y, si le dices que sí, lo instala. Antes de instalar nada te pide confirmación, porque escribe un
                archivo en tu equipo. La skill se guarda en <code>~/.claude/skills/</code> y se activa escribiendo su
                nombre tras una barra, o sola cuando Claude ve que encaja con lo que pides.
            </p>

            <h3>¿Prefieres la terminal?</h3>
            <p>El mismo paquete funciona como herramienta de línea de comandos, sin pasar por Claude:</p>
            <pre><code>npx {{ $package }} search "revisar contratos"
npx {{ $package }} install &lt;slug&gt;</code></pre>
            <p>
                <code>search</code> lista resultados con su slug, e <code>install</code> descarga la skill en
                <code>~/.claude/skills/</code>. Con <code>--project</code> la guarda solo en el proyecto actual.
            </p>

            <h2 id="preguntas">Preguntas frecuentes</h2>

            <h3>¿Es gratis?</h3>
            <p>Sí. El conector, el catálogo y la cuenta de ia-skills son gratuitos. Para el catálogo ni siquiera hace falta registrarse.</p>

            <h3>¿Qué datos envía?</h3>
            <p>
                Solo el texto de búsqueda que Claude decide enviar —por ejemplo, «revisar contrato de arrendamiento»—
                y el nombre de la skill que pide leer o instalar. Nunca la conversación completa ni tus archivos.
                Las peticiones llegan a ia-skills.com, que trata los datos técnicos de cada petición
                como se explica en la <a href="{{ route('legal.privacy') }}">política de privacidad</a>.
            </p>

            <h3>¿Funciona con ChatGPT u otros asistentes?</h3>
            <p>
                El conector usa MCP, un estándar abierto, así que funciona en cualquier asistente que admita servidores
                MCP remotos (<code>{{ route('api.mcp') }}</code>). La versión local funciona en los clientes que
                admiten servidores por <code>stdio</code>: se arranca con <code>npx -y {{ $package }} mcp</code>.
                Lo hemos probado sobre todo en Claude.
            </p>

            <h3>¿Qué diferencia hay entre el conector y la versión local?</h3>
            <p>
                Los dos buscan y leen el catálogo. El conector no necesita instalar nada y, si inicias sesión, también
                ve tus guardadas y tus skills privadas. La versión local, además, puede instalar una skill como archivo
                en tu equipo (<code>~/.claude/skills/</code>), porque se ejecuta en él.
            </p>

            <h3>¿Cómo lo quito?</h3>
            <p>
                En Claude, desde <strong>Personalizar → Conectores</strong>. En Claude Code, con <code>claude mcp remove ia-skills</code>;
                las skills que ya instalaste siguen en <code>~/.claude/skills/</code> hasta que borres su carpeta.
            </p>

            <h3>¿Puedo ver el código?</h3>
            <p>
                Sí, es código abierto: está en
                <a href="https://github.com/ericrodri/ia-skills/tree/main/tools/ia-skills-cli" rel="noopener">GitHub</a>
                y publicado en <a href="https://www.npmjs.com/package/{{ $package }}" rel="noopener">npm</a>
                con procedencia verificada, que acredita desde qué commit se publicó cada versión.
            </p>
        </div>

        <div class="mt-12 flex flex-wrap gap-3">
            @guest
                <a href="{{ route('register') }}" class="btn-primary">Crear cuenta gratis</a>
            @else
                <a href="{{ route('skills.saved') }}" class="btn-primary">Ver mis guardadas</a>
            @endguest
            <a href="{{ route('skills.index') }}" class="btn-secondary">Explorar el catálogo</a>
        </div>
    </article>

    <script>
        // Botón de copiar. La dirección sigue visible y seleccionable sin JavaScript.
        document.querySelectorAll('[data-copy]').forEach((button) => {
            button.addEventListener('click', async () => {
                const source = document.querySelector(button.dataset.copy)
                try {
                    await navigator.clipboard.writeText(source.textContent.trim())
                    const label = button.textContent
                    button.textContent = 'Copiado'
                    setTimeout(() => { button.textContent = label }, 2000)
                } catch {
                    window.getSelection().selectAllChildren(source)
                }
            })
        })
    </script>
@endsection
