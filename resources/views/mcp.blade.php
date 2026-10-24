@extends('layouts.site')

{{--
    /mcp — el catálogo dentro de Claude Code.

    Es la página que se comparte fuera (registro oficial de MCP, directorios,
    redes), así que todo el contenido va en el HTML. El único JavaScript es el
    botón de copiar, y el comando se ve y se selecciona igual sin él.

    Lo que se afirma aquí sobre datos enviados tiene que cuadrar con lo que hace
    tools/ia-skills-cli (src/api.mjs) y con la política de privacidad.
--}}

@section('content')
    <article class="max-w-3xl mx-auto px-4 sm:px-6 py-12">
        <p class="text-xs font-semibold uppercase tracking-wide text-brand-600 dark:text-brand-400">Claude Code · MCP</p>
        <h1 class="mt-2 text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">
            ia-skills dentro de Claude Code
        </h1>
        <p class="mt-4 text-lg text-gray-600 dark:text-gray-300">
            Conecta el catálogo con un comando y Claude podrá buscar, leer e instalar por su cuenta
            {{ $skillsCount }} prompts y skills de IA en español, sin que tengas que volver a abrir la web.
        </p>

        {{-- Comando --}}
        <div class="mt-8 rounded-2xl border border-violet-200 dark:border-violet-800 bg-violet-50/60 dark:bg-violet-900/10 p-5">
            <p class="text-sm font-semibold text-violet-900 dark:text-violet-200">Pégalo en tu terminal</p>
            <div class="mt-3 flex items-stretch gap-2">
                <pre id="mcp-command" class="flex-1 min-w-0 bg-gray-900 text-gray-100 rounded-lg px-4 py-3 text-sm font-mono overflow-x-auto whitespace-nowrap">{{ $command }}</pre>
                <button
                    type="button"
                    data-copy="#mcp-command"
                    class="shrink-0 px-4 rounded-lg text-sm font-semibold bg-violet-600 hover:bg-violet-700 text-white transition-colors"
                >Copiar</button>
            </div>
            <p class="mt-3 text-xs text-violet-700 dark:text-violet-400">
                Necesitas <a href="https://code.claude.com/docs/es/overview" class="underline" rel="noopener">Claude Code</a>
                y Node.js 18 o superior. No hace falta cuenta en ia-skills ni clave de API.
            </p>
        </div>

        <div class="guide-content mt-12">
            <h2 id="como-se-usa">Cómo se usa</h2>
            <p>
                No hay comandos que aprender. Trabajas con Claude como siempre y, cuando una tarea encaja con algo del
                catálogo, Claude lo busca. Por ejemplo:
            </p>
            <blockquote>
                <p><strong>Tú:</strong> Tengo que revisar un contrato de arrendamiento de un local antes de firmarlo.</p>
                <p><strong>Claude:</strong> busca en ia-skills, encuentra un prompt de revisión de contratos de arrendamiento comercial, te lo enseña y, si le dices que sí, lo instala como skill para que lo uses las próximas veces con un comando.</p>
            </blockquote>
            <p>
                Antes de instalar nada, Claude te pide confirmación: el servidor escribe un archivo en tu equipo y eso
                siempre lo decides tú.
            </p>

            <h2 id="que-puede-hacer">Qué puede hacer Claude con él</h2>
            <ul>
                <li><strong>Buscar</strong> en el catálogo por tarea, profesión o tipo, y ver los resultados más relevantes.</li>
                <li><strong>Leer</strong> el prompt completo de una skill antes de decidir si te sirve.</li>
                <li><strong>Instalarla</strong> como skill de Claude Code, para todos tus proyectos o solo para el actual.</li>
            </ul>
            <p>
                Una skill instalada se guarda en <code>~/.claude/skills/</code> y se activa escribiendo su nombre tras una
                barra, o sola cuando Claude detecta que encaja con lo que pides.
            </p>

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
            <h2 id="terminal">¿Prefieres la terminal?</h2>
            <p>El mismo paquete funciona como herramienta de línea de comandos, sin pasar por Claude:</p>
            <pre><code>npx {{ $package }} search "revisar contratos"
npx {{ $package }} install &lt;slug&gt;</code></pre>
            <p>
                <code>search</code> lista resultados con su slug, e <code>install</code> descarga la skill en
                <code>~/.claude/skills/</code>. Con <code>--project</code> la guarda solo en el proyecto actual.
            </p>

            <h2 id="preguntas">Preguntas frecuentes</h2>

            <h3>¿Es gratis?</h3>
            <p>Sí. El servidor, el catálogo y la API son gratuitos y no necesitan registro.</p>

            <h3>¿Qué datos envía?</h3>
            <p>
                Solo el texto de búsqueda que Claude decide enviar —por ejemplo, «revisar contrato de arrendamiento»—
                y el nombre de la skill que pides leer o instalar. Nunca la conversación completa ni tus archivos.
                Las peticiones van a la API pública de ia-skills.com, que trata los datos técnicos de cada petición
                como se explica en la <a href="{{ route('legal.privacy') }}">política de privacidad</a>.
            </p>

            <h3>¿Funciona fuera de Claude Code?</h3>
            <p>
                Funciona con cualquier cliente compatible con MCP que admita servidores locales por
                <code>stdio</code>. El comando de arriba es el de Claude Code; en otros clientes, el servidor se arranca
                con <code>npx -y {{ $package }} mcp</code>.
            </p>

            <h3>¿Cómo lo quito?</h3>
            <p>Con <code>claude mcp remove ia-skills</code>. Las skills que ya instalaste siguen en <code>~/.claude/skills/</code> hasta que borres su carpeta.</p>

            <h3>¿Puedo ver el código?</h3>
            <p>
                Sí, es código abierto: está en
                <a href="https://github.com/ericrodri/ia-skills/tree/main/tools/ia-skills-cli" rel="noopener">GitHub</a>
                y publicado en <a href="https://www.npmjs.com/package/{{ $package }}" rel="noopener">npm</a>
                con procedencia verificada, que acredita desde qué commit se publicó cada versión.
            </p>
        </div>

        <div class="mt-12 flex flex-wrap gap-3">
            <a href="{{ route('skills.index') }}" class="btn-primary">Explorar el catálogo</a>
            <a href="{{ route('how-it-works') }}" class="btn-secondary">Cómo funciona ia-skills</a>
        </div>
    </article>

    <script>
        // Botón de copiar. El comando sigue visible y seleccionable sin JavaScript.
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
