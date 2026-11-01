<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- SEO renderizado en servidor (ver App\Support\Seo) --}}
    @include('partials.seo')

    @include('partials.favicons')
    <link rel="alternate" type="application/rss+xml" title="ia-skills — últimas skills de IA" href="{{ route('feed') }}">

    @include('partials.font-preload')

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
    <!-- Theme inline script to prevent FOUC -->
    <script>
        if (localStorage.theme === 'light') {
            document.documentElement.classList.remove('dark')
        } else {
            document.documentElement.classList.add('dark')
        }
    </script>
</head>

<body class="font-sans antialiased dark:bg-gray-900 dark:text-gray-100">
    @inertia
    @include('partials.seo-fallback')
</body>

</html>
