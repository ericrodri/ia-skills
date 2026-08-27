@extends('layouts.site')

@section('content')
    <section class="bg-gradient-to-b from-brand-50 to-white dark:from-gray-800 dark:to-gray-900 border-b border-gray-100 dark:border-gray-800">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 py-14">
            <nav aria-label="Migas de pan" class="flex items-center gap-2 text-sm text-gray-400 dark:text-gray-500 mb-4">
                <a href="{{ route('home') }}" class="hover:text-brand-600 dark:hover:text-brand-400">Inicio</a>
                <span>/</span>
                <span class="text-gray-700 dark:text-gray-300">Guías</span>
            </nav>
            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">Guías de IA para profesionales</h1>
            <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                Cómo usar la inteligencia artificial en tu trabajo sin humo: qué es un skill, qué es un agente de IA,
                cómo se escribe un prompt que funciona, qué prompts merecen la pena en cada profesión y cómo automatizar
                lo que hoy te come el día. Guías escritas para gente que trabaja, no para gente que colecciona novedades.
            </p>
        </div>
    </section>

    <section class="max-w-3xl mx-auto px-4 sm:px-6 py-12">
        <div class="grid gap-4">
            @foreach($guides as $guide)
                <article class="rounded-xl border border-gray-200 dark:border-gray-700 p-6 hover:border-brand-300 dark:hover:border-brand-500 transition-colors bg-white dark:bg-gray-800">
                    <p class="text-xs font-semibold uppercase tracking-wide text-brand-600 dark:text-brand-400">{{ $guide['category'] }}</p>
                    <h2 class="mt-2 text-xl font-bold text-gray-900 dark:text-white">
                        <a href="{{ route('guides.show', ['slug' => $guide['slug']]) }}" class="hover:text-brand-700 dark:hover:text-brand-400">{{ $guide['title'] }}</a>
                    </h2>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">{{ $guide['excerpt'] }}</p>
                    <p class="mt-3 text-xs text-gray-400 dark:text-gray-500">
                        {{ $guide['readingMinutes'] }} min de lectura · actualizada el
                        {{ \Illuminate\Support\Carbon::parse($guide['updated'])->locale('es')->translatedFormat('j F Y') }}
                    </p>
                </article>
            @endforeach
        </div>

        <div class="guide-callout mt-12">
            <p class="font-semibold text-gray-900 dark:text-white">¿Buscas algo listo para copiar?</p>
            <p class="mt-2 text-gray-600 dark:text-gray-300">
                Las guías explican el método. El catálogo tiene el trabajo hecho:
                <a class="font-medium text-brand-700 dark:text-brand-400 underline" href="{{ route('skills.index') }}">más de {{ $skillsCount }} skills y prompts</a>
                organizados por profesión y ordenados por los votos de la comunidad.
            </p>
            <ul class="mt-4 flex flex-wrap gap-2">
                @foreach($footerProfessions as $profession)
                    <li>
                        <a href="{{ route('professions.show', ['profession' => $profession['slug']]) }}"
                           class="inline-flex items-center gap-1.5 rounded-full border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-3 py-1 text-xs font-medium text-gray-700 dark:text-gray-300 hover:border-brand-300 dark:hover:border-brand-500">
                            {{ $profession['name'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
