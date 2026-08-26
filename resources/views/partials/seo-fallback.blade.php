@php
    /**
     * Versión sin JavaScript del contenido principal.
     *
     * La app es una SPA con Inertia y sin SSR: el HTML inicial no contiene texto.
     * Googlebot ejecuta JavaScript y lo ve, pero Bingbot, GPTBot, ClaudeBot,
     * PerplexityBot y los previsualizadores de enlaces no siempre. Este bloque
     * reproduce el mismo contenido que la página muestra (título, descripción,
     * enlaces y, en una ficha, el prompt) — no añade contenido distinto del
     * visible, así que no es contenido oculto para posicionar.
     */
    $fallback = $seo['fallback'] ?? null;
@endphp
@if($fallback)
    <noscript>
        <h1>{{ $fallback['heading'] }}</h1>
        @foreach($fallback['paragraphs'] ?? [] as $paragraph)
            <p>{{ $paragraph }}</p>
        @endforeach
        @if(! empty($fallback['pre']))
            <pre>{{ $fallback['pre'] }}</pre>
        @endif
        @if(! empty($fallback['links']))
            <ul>
                @foreach($fallback['links'] as $label => $href)
                    <li><a href="{{ $href }}">{{ $label }}</a></li>
                @endforeach
            </ul>
        @endif
        <ul>
            <li><a href="{{ route('skills.index') }}">Todas las skills de IA</a></li>
            <li><a href="{{ route('professions.index') }}">Skills por profesión</a></li>
            <li><a href="{{ route('guides.index') }}">Guías</a></li>
            <li><a href="{{ route('how-it-works') }}">Cómo funciona</a></li>
        </ul>
    </noscript>
@endif
