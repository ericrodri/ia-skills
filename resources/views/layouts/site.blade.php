<!DOCTYPE html>
<html lang="es" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('partials.seo')

    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="alternate" type="application/rss+xml" title="ia-skills — últimas skills de IA" href="{{ route('feed') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"></noscript>

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
                <div class="flex items-center gap-8">
                    <a href="{{ route('home') }}" class="flex items-center gap-2 font-bold text-gray-900 dark:text-white hover:text-brand-600 dark:hover:text-brand-400 transition-colors">
                        <span class="text-brand-600 dark:text-brand-500 text-lg">⚡</span>
                        <span>ia-skills</span>
                    </a>
                    <div class="hidden md:flex items-center gap-1">
                        <a href="{{ route('skills.index') }}" class="px-3 py-1.5 text-sm text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white rounded-lg transition-colors">Explorar</a>
                        <a href="{{ route('professions.index') }}" class="px-3 py-1.5 text-sm text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white rounded-lg transition-colors">Profesiones</a>
                        <a href="{{ route('guides.index') }}" class="px-3 py-1.5 text-sm font-semibold text-brand-700 dark:text-brand-400 rounded-lg transition-colors">Guías</a>
                        <a href="{{ route('how-it-works') }}" class="px-3 py-1.5 text-sm text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white rounded-lg transition-colors">Cómo funciona</a>
                    </div>
                </div>
                <a href="{{ route('skills.index') }}" class="btn-primary">Explorar skills</a>
            </nav>
        </header>

        <main class="flex-1">
            @yield('content')
        </main>

        <footer class="border-t border-gray-100 dark:border-gray-800 mt-16">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 py-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4 text-sm">
                <div>
                    <p class="font-bold text-gray-900 dark:text-white flex items-center gap-2"><span class="text-brand-600 dark:text-brand-500">⚡</span> ia-skills</p>
                    <p class="mt-3 text-gray-500 dark:text-gray-400">La biblioteca colaborativa de prompts y skills de IA para profesionales, organizada por profesión.</p>
                </div>
                <div>
                    <p class="font-semibold text-gray-900 dark:text-white">Explorar</p>
                    <ul class="mt-3 space-y-2 text-gray-500 dark:text-gray-400">
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400" href="{{ route('skills.index') }}">Todas las skills</a></li>
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400" href="{{ route('professions.index') }}">Profesiones</a></li>
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400" href="{{ route('guides.index') }}">Guías</a></li>
                        <li><a class="hover:text-brand-600 dark:hover:text-brand-400" href="{{ route('how-it-works') }}">Cómo funciona</a></li>
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
</body>

</html>
