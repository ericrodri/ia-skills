@php
    /**
     * Metadatos SEO renderizados en el servidor.
     *
     * Inertia sin SSR inyecta los `<Head>` solo en el cliente, así que este
     * parcial es lo único que ven los crawlers que no ejecutan JavaScript
     * (Bingbot, GPTBot, ClaudeBot, previews de WhatsApp/LinkedIn...).
     */
    $seo = $seo ?? \App\Support\Seo::normalize([]);
@endphp
<title inertia>{{ $seo['title'] }}</title>
@if($seo['description'])
<meta name="description" content="{{ $seo['description'] }}">
@endif
<link rel="canonical" href="{{ $seo['canonical'] }}">
<meta name="robots" content="{{ $seo['robots'] }}">
@if($seo['prev'])
<link rel="prev" href="{{ $seo['prev'] }}">
@endif
@if($seo['next'])
<link rel="next" href="{{ $seo['next'] }}">
@endif

<meta property="og:type" content="{{ $seo['ogType'] }}">
<meta property="og:site_name" content="{{ \App\Support\Seo::SITE_NAME }}">
<meta property="og:locale" content="{{ $seo['locale'] }}">
<meta property="og:url" content="{{ $seo['canonical'] }}">
<meta property="og:title" content="{{ $seo['title'] }}">
@if($seo['description'])
<meta property="og:description" content="{{ $seo['description'] }}">
@endif
<meta property="og:image" content="{{ $seo['ogImage'] }}">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="{{ $seo['ogImageAlt'] }}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@iaskills_com">
<meta name="twitter:title" content="{{ $seo['title'] }}">
@if($seo['description'])
<meta name="twitter:description" content="{{ $seo['description'] }}">
@endif
<meta name="twitter:image" content="{{ $seo['ogImage'] }}">
<meta name="twitter:image:alt" content="{{ $seo['ogImageAlt'] }}">

@foreach($seo['schema'] as $schema)
<script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endforeach
