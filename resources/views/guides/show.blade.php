@extends('layouts.site')

@section('content')
    <article>
        <header class="bg-gradient-to-b from-brand-50 to-white dark:from-gray-800 dark:to-gray-900 border-b border-gray-100 dark:border-gray-800">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 py-12">
                <nav aria-label="Migas de pan" class="flex flex-wrap items-center gap-2 text-sm text-gray-400 dark:text-gray-500 mb-4">
                    <a href="{{ route('home') }}" class="hover:text-brand-600 dark:hover:text-brand-400">Inicio</a>
                    <span>/</span>
                    <a href="{{ route('guides.index') }}" class="hover:text-brand-600 dark:hover:text-brand-400">Guías</a>
                    <span>/</span>
                    <span class="text-gray-700 dark:text-gray-300">{{ $guide['navTitle'] ?? $guide['title'] }}</span>
                </nav>
                <p class="text-xs font-semibold uppercase tracking-wide text-brand-600 dark:text-brand-400">{{ $guide['category'] }}</p>
                <h1 class="mt-2 text-3xl sm:text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">{{ $guide['title'] }}</h1>
                <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">{{ $guide['excerpt'] }}</p>
                <p class="mt-4 text-xs text-gray-400 dark:text-gray-500">
                    {{ $guide['readingMinutes'] }} min de lectura · actualizada el
                    <time datetime="{{ $guide['updated'] }}">{{ \Illuminate\Support\Carbon::parse($guide['updated'])->locale('es')->translatedFormat('j F Y') }}</time>
                </p>
            </div>
        </header>

        <div class="max-w-3xl mx-auto px-4 sm:px-6 py-10">
            @if(! empty($guide['toc']))
                <nav aria-label="Contenido de la guía" class="rounded-xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800/60 p-5 mb-10">
                    <p class="text-sm font-semibold text-gray-900 dark:text-white">En esta guía</p>
                    <ol class="mt-3 space-y-1.5 text-sm list-decimal pl-5 text-gray-600 dark:text-gray-400">
                        @foreach($guide['toc'] as $anchor => $label)
                            <li><a class="hover:text-brand-600 dark:hover:text-brand-400 underline decoration-gray-300 dark:decoration-gray-600 underline-offset-2" href="#{{ $anchor }}">{{ $label }}</a></li>
                        @endforeach
                    </ol>
                </nav>
            @endif

            <div class="guide-content">
                {!! $guide['body'] !!}
            </div>

            @if(! empty($guide['faq']))
                <section class="mt-14">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Preguntas frecuentes</h2>
                    <div class="mt-6 divide-y divide-gray-100 dark:divide-gray-800">
                        @foreach($guide['faq'] as $question => $answer)
                            <div class="py-5">
                                <h3 class="font-semibold text-gray-900 dark:text-white">{{ $question }}</h3>
                                <p class="mt-2 text-gray-600 dark:text-gray-400">{{ $answer }}</p>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif

            <section class="guide-callout mt-14">
                <p class="font-semibold text-gray-900 dark:text-white">{{ $guide['ctaTitle'] ?? 'Pasa de la teoría al catálogo' }}</p>
                <p class="mt-2 text-gray-600 dark:text-gray-300">{!! $guide['ctaBody'] ?? 'Explora las skills que la comunidad ha votado como las más útiles y cópialas en un clic.' !!}</p>
                <div class="mt-4 flex flex-wrap gap-3">
                    <a href="{{ route('skills.index') }}" class="btn-primary">Explorar {{ $skillsCount }} skills &rarr;</a>
                    <a href="{{ route('professions.index') }}" class="btn-secondary">Ver por profesión</a>
                </div>
            </section>

            @if(! empty($related))
                <section class="mt-14">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white">Sigue leyendo</h2>
                    <ul class="mt-4 grid gap-3">
                        @foreach($related as $item)
                            <li class="rounded-xl border border-gray-200 dark:border-gray-700 p-4 hover:border-brand-300 dark:hover:border-brand-500 transition-colors">
                                <a href="{{ route('guides.show', ['slug' => $item['slug']]) }}" class="font-semibold text-gray-900 dark:text-white hover:text-brand-700 dark:hover:text-brand-400">{{ $item['title'] }}</a>
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">{{ $item['excerpt'] }}</p>
                            </li>
                        @endforeach
                    </ul>
                </section>
            @endif
        </div>
    </article>
@endsection
