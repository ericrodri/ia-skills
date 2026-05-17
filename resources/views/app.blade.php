<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'IA Skills') }}</title>

    <!-- SEO global defaults (overridden per-page via @inertiaHead) -->
    <meta property="og:site_name" content="ia-skills">
    <meta property="og:locale" content="es_ES">
    <meta property="og:image" content="{{ config('app.url') }}/og-default.svg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="ia-skills — Workflows de IA para profesionales">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@iaskills_com">
    <meta name="twitter:image" content="{{ config('app.url') }}/og-default.svg">

    <link rel="icon" type="image/svg+xml" href="/favicon.svg">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" crossorigin>
    <link rel="preload" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /></noscript>

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
</body>

</html>