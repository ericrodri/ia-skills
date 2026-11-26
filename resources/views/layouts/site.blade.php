<!DOCTYPE html>
<html lang="es" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('partials.seo')

    @include('partials.favicons')
    <link rel="alternate" type="application/rss+xml" title="ia-skills — últimas skills de IA" href="{{ route('feed') }}">

    @include('partials.font-preload')

    {{-- Solo CSS: estas páginas son HTML estático, no cargan el bundle de Vue --}}
    @vite('resources/css/app.css')

    <script>
        if (localStorage.theme === 'light') {
            document.documentElement.classList.remove('dark')
        } else {
            document.documentElement.classList.add('dark')
        }
    </script>
</head>

<body class="font-sans antialiased bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100">
    <div class="min-h-screen flex flex-col">
        <header class="sticky top-0 z-50 bg-white/90 dark:bg-gray-900/90 backdrop-blur-sm border-b border-gray-100 dark:border-gray-800">
            <nav class="max-w-6xl mx-auto px-4 sm:px-6 h-14 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <a href="{{ route('home') }}" class="shrink-0 whitespace-nowrap flex items-center gap-2 font-bold text-gray-900 dark:text-white hover:text-brand-600 dark:hover:text-brand-400 transition-colors">
                        <img src="/logo.png?v=2" alt="" width="28" height="28" class="w-7 h-7">
                        <span>ia-skills</span>
                    </a>
                    {{-- Enlaces desde App\Support\SiteData::primaryNav(), la misma
                         fuente que alimenta AppLayout.vue. No los dupliques aquí. --}}
                    {{-- Con sesión, «Guardadas» tiene su propio botón junto a «Compartir skill» (igual que en AppLayout.vue). --}}
                    <div class="hidden xl:flex items-center gap-1">
                        @foreach($primaryNav as $item)
                            @continue(auth()->check() && $item['route'] === 'skills.saved')
                            <a
                                href="{{ $item['href'] }}"
                                @class([
                                    'whitespace-nowrap px-2 2xl:px-3 py-1.5 text-sm rounded-lg transition-colors',
                                    'font-semibold text-brand-700 dark:text-brand-400' => request()->routeIs($item['active']),
                                    'text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white' => ! request()->routeIs($item['active']),
                                ])
                            >{{ $item['label'] }}</a>
                        @endforeach
                    </div>
                </div>

                {{-- Misma cabecera que AppLayout.vue (sesión, admin, avatar). Estas
                     páginas no se cachean por usuario: si algún día se cachea su
                     HTML, esta parte tiene que salir de la caché. --}}
                {{-- gap-2 en el móvil: con sesión no cabe con gap-3 (ver AppLayout.vue). --}}
                <div class="shrink-0 whitespace-nowrap flex items-center gap-2 sm:gap-3">
                    {{-- Menú móvil con <details>: estas páginas no cargan Vue, así que
                         el desplegable tiene que funcionar sin JavaScript. --}}
                    <details class="xl:hidden relative" data-close-outside>
                        <summary
                            class="list-none [&::-webkit-details-marker]:hidden cursor-pointer p-1.5 rounded-lg text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors"
                            aria-label="Menú de navegación"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </summary>
                        <div class="absolute right-0 top-full mt-2 w-56 bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 rounded-xl shadow-lg py-1 z-50">
                            @foreach($primaryNav as $item)
                                <a href="{{ $item['href'] }}" class="block px-4 py-2.5 text-sm text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors">{{ $item['label'] }}</a>
                            @endforeach
                        </div>
                    </details>

                    @auth
                        @if(auth()->user()->is_admin)
                            <a href="{{ route('admin.skills.index') }}" class="hidden sm:inline-flex items-center px-3 py-1.5 text-xs font-semibold rounded-lg bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-400 hover:bg-amber-200 dark:hover:bg-amber-900/50 transition-colors" title="Administración">🛡<span class="hidden 2xl:inline"> Admin</span></a>
                        @endif

                        <a
                            href="{{ route('skills.saved') }}"
                            class="flex items-center gap-1.5 p-1.5 sm:px-3 text-sm rounded-lg text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors"
                            aria-label="Skills guardadas"
                            title="Skills guardadas"
                        >
                            <svg class="w-5 h-5 sm:w-4 sm:h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                            </svg>
                            <span class="hidden sm:inline xl:hidden 2xl:inline">Guardadas</span>
                        </a>

                        <a href="{{ route('skills.create') }}" class="btn-primary"><span>+ Compartir<span class="hidden sm:inline"> skill</span></span></a>

                        <details class="relative" data-close-outside>
                            <summary
                                class="list-none [&::-webkit-details-marker]:hidden cursor-pointer w-8 h-8 rounded-full bg-brand-100 dark:bg-brand-900/30 text-brand-700 dark:text-brand-300 text-sm font-semibold flex items-center justify-center hover:bg-brand-200 dark:hover:bg-brand-900/50 transition-colors"
                                aria-label="Menú de usuario"
                            >{{ mb_strtoupper(mb_substr(auth()->user()->name, 0, 1)) }}</summary>
                            <div class="absolute right-0 mt-2 w-44 bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700 rounded-xl shadow-lg py-1 z-50">
                                {{-- En el móvil el botón de admin de la barra no cabe: aquí sí. --}}
                                @if(auth()->user()->is_admin)
                                    <a href="{{ route('admin.skills.index') }}" class="sm:hidden block px-4 py-2 text-sm font-semibold text-amber-700 dark:text-amber-400 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">🛡 Administración</a>
                                @endif
                                <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">Mi panel</a>
                                @if(auth()->user()->username)
                                    <a href="{{ route('authors.show', ['user' => auth()->user()->username]) }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">Perfil público</a>
                                @endif
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">Ajustes</a>
                                <a href="{{ route('skills.saved') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">Skills guardadas</a>
                                @if(\App\Support\SkillMarkdown::mcpAvailable())
                                    <a href="{{ route('mcp') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">Conectar con Claude</a>
                                @endif
                                <hr class="my-1 border-gray-100 dark:border-gray-700">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">Cerrar sesión</button>
                                </form>
                            </div>
                        </details>
                    @else
                        <a href="{{ route('login') }}" class="btn-secondary">Entrar</a>
                        <a href="{{ route('register') }}" class="btn-primary">Registrarse</a>
                    @endauth
                </div>
            </nav>
        </header>

        <main class="flex-1">
            @yield('content')
        </main>

        <footer class="border-t border-gray-100 dark:border-gray-800 mt-16">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 py-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4 text-sm">
                <div>
                    <p class="font-bold text-gray-900 dark:text-white flex items-center gap-2"><img src="/logo.png?v=2" alt="" width="24" height="24" class="w-6 h-6" loading="lazy"> ia-skills</p>
                    <p class="mt-3 text-gray-500 dark:text-gray-400">La biblioteca colaborativa de prompts y skills de IA para profesionales, organizada por profesión.</p>
                    <p class="mt-3"><a class="text-gray-500 dark:text-gray-400 hover:text-brand-600 dark:hover:text-brand-400" href="{{ \App\Support\Seo::INSTAGRAM }}" rel="me noopener" target="_blank">Síguenos en Instagram</a></p>
                </div>
                <div>
                    <p class="font-semibold text-gray-900 dark:text-white">Explorar</p>
                    <ul class="mt-3 space-y-2 text-gray-500 dark:text-gray-400">
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400" href="{{ route('skills.index') }}">Todas las skills</a></li>
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400" href="{{ route('professions.index') }}">Profesiones</a></li>
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400" href="{{ route('collections.index') }}">Colecciones</a></li>
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400" href="{{ route('tools.index') }}">Prompts por herramienta</a></li>
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400" href="{{ route('rankings.index') }}">Ranking</a></li>
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400" href="{{ route('guides.index') }}">Guías</a></li>
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400" href="{{ route('how-it-works') }}">Cómo funciona</a></li>
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400" href="{{ route('skills.saved') }}">Guardadas</a></li>
                        @if(\App\Support\SkillMarkdown::mcpAvailable())
                            <li><a class="hover:text-brand-600 dark:hover:text-brand-400" href="{{ route('mcp') }}">Usar en Claude (MCP)</a></li>
                        @endif
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400" href="{{ route('legal.privacy') }}">Privacidad</a></li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-gray-900 dark:text-white">Por profesión</p>
                    <ul class="mt-3 space-y-2 text-gray-500 dark:text-gray-400">
                        @foreach($footerProfessions ?? [] as $profession)
                            <li><a class="hover:text-brand-600 dark:hover:text-brand-400" href="{{ route('professions.show', ['profession' => $profession['slug']]) }}">Prompts de IA para {{ $profession['name'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-gray-900 dark:text-white">Guías</p>
                    <ul class="mt-3 space-y-2 text-gray-500 dark:text-gray-400">
                        @foreach(\App\Support\Guides::all() as $item)
                            <li><a class="hover:text-brand-600 dark:hover:text-brand-400" href="{{ route('guides.show', ['slug' => $item['slug']]) }}">{{ $item['navTitle'] ?? $item['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    {{-- Analítica propia, sin cookies (App\Support\Analytics). En las páginas Inertia lo hace app.js.
         Solo avisa tras una señal de persona (ratón, toque, scroll o tecla) y nunca desde navegadores automatizados. --}}
    <script>
        // Los desplegables <details> se cierran al pulsar fuera, como en AppLayout.vue.
        document.addEventListener('click', function (e) {
            document.querySelectorAll('details[data-close-outside][open]').forEach(function (d) {
                if (!d.contains(e.target)) d.removeAttribute('open')
            })
        })
    </script>
    <script>
        (function () {
            if (!navigator.sendBeacon || navigator.webdriver) return
            var events = ['pointermove', 'pointerdown', 'scroll', 'wheel', 'keydown', 'touchstart'], sent = false
            var data = new URLSearchParams({ p: location.pathname + location.search, r: document.referrer })
            function send() {
                if (sent) return
                sent = true
                events.forEach(function (e) { window.removeEventListener(e, send, true) })
                navigator.sendBeacon('/hola', data)
            }
            events.forEach(function (e) { window.addEventListener(e, send, { capture: true, passive: true }) })
        })()
    </script>
</body>

</html>
