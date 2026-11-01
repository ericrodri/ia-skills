@extends('layouts.site')

@section('content')
    {{-- Pensada para imprimir: «Guardar como PDF» en el diálogo del navegador
         produce el documento. Al imprimir se ocultan cabecera, pie y botones. --}}
    <style>
        @media print {
            header, footer, .no-print { display: none !important; }
            body { background: #fff !important; color: #111 !important; }
            .pack-skill { break-inside: avoid-page; }
            .pack-skill + .pack-skill { break-before: page; }
            .pack-prompt { background: #f6f6f6 !important; color: #111 !important; border-color: #ddd !important; }
            a { color: #111 !important; text-decoration: none !important; }
        }
    </style>

    <div class="max-w-3xl mx-auto px-4 sm:px-6 py-12">
        <p class="text-sm font-semibold uppercase tracking-wider text-brand-600 dark:text-brand-400">ia-skills · Pack de skills</p>
        <h1 class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">
            Las {{ $skills->count() }} mejores skills de IA para {{ $profession->name }}
        </h1>
        <p class="mt-3 text-gray-600 dark:text-gray-400">
            Las skills más votadas por la comunidad para {{ $profession->name }}, con el prompt completo.
            Copia cada uno en Claude, ChatGPT o Gemini y rellena los campos entre [corchetes] con tus datos.
        </p>

        <div class="no-print mt-6 flex flex-wrap gap-3">
            <button type="button" onclick="window.print()" class="btn-primary">Guardar como PDF</button>
            <a href="{{ route('professions.show', $profession) }}" class="btn-secondary">Ver todas las skills de {{ $profession->name }}</a>
        </div>
        <p class="no-print mt-2 text-xs text-gray-500 dark:text-gray-400">
            En el diálogo de impresión, elige «Guardar como PDF» como destino.
        </p>

        <h2 class="mt-10 text-lg font-semibold text-gray-900 dark:text-white">Índice</h2>
        <ol class="mt-3 list-decimal pl-6 space-y-1 text-sm text-gray-700 dark:text-gray-300">
            @foreach($skills as $skill)
                <li><a href="#skill-{{ $loop->iteration }}" class="hover:text-brand-600 dark:hover:text-brand-400">{{ $skill->title }}</a></li>
            @endforeach
        </ol>

        @foreach($skills as $skill)
            <section id="skill-{{ $loop->iteration }}" class="pack-skill mt-12 pt-8 border-t border-gray-200 dark:border-gray-700">
                <p class="text-xs font-semibold text-gray-500 dark:text-gray-400">{{ $loop->iteration }} · {{ $skill->tool_name }}</p>
                <h2 class="mt-1 text-xl font-bold text-gray-900 dark:text-white">{{ $skill->title }}</h2>
                <p class="mt-2 text-gray-600 dark:text-gray-400">{{ $skill->description }}</p>
                @if($skill->use_case)
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400"><strong>Cuándo usarla:</strong> {{ $skill->use_case }}</p>
                @endif
                <pre class="pack-prompt mt-4 whitespace-pre-wrap break-words rounded-xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 p-4 text-sm leading-relaxed text-gray-800 dark:text-gray-200 font-mono">{{ $skill->prompt_content }}</pre>
                <p class="mt-3 text-sm">
                    <a href="{{ route('skills.show', $skill->slug) }}" class="text-brand-600 dark:text-brand-400 hover:underline">{{ route('skills.show', $skill->slug) }}</a>
                </p>
            </section>
        @endforeach

        <p class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-700 text-sm text-gray-500 dark:text-gray-400">
            Cada lunes te enviamos las skills más votadas de la semana y las guías nuevas. Más skills para {{ $profession->name }} en
            <a href="{{ route('professions.show', $profession) }}" class="text-brand-600 dark:text-brand-400 hover:underline">{{ route('professions.show', $profession) }}</a>.
        </p>
    </div>
@endsection
