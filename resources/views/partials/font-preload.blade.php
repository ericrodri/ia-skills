{{-- Inter se sirve desde public/build (ver resources/css/app.css). Se precarga
     solo el subconjunto latino, que es el que usa la web en español. --}}
<link rel="preload" as="font" type="font/woff2" crossorigin href="{{ Vite::asset('node_modules/@fontsource-variable/inter/files/inter-latin-wght-normal.woff2') }}">
