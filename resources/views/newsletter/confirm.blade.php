@extends('layouts.site')

@section('content')
    <div class="max-w-xl mx-auto px-4 sm:px-6 py-20 text-center">
        @if($done)
            <p class="text-4xl" aria-hidden="true">✓</p>
            <h1 class="mt-4 text-2xl font-bold text-gray-900 dark:text-white">¡Suscripción confirmada!</h1>
            <p class="mt-3 text-gray-600 dark:text-gray-400">
                Desde el próximo lunes recibirás en {{ $email }} las skills más votadas de la semana y las guías nuevas.
                Cada email lleva un enlace para darte de baja con un clic.
            </p>
            <div class="mt-8 flex flex-wrap justify-center gap-3">
                <a href="{{ route('skills.index') }}" class="btn-primary">Explorar {{ $skillsCount }} skills</a>
                <a href="{{ route('guides.index') }}" class="btn-secondary">Leer las guías</a>
            </div>
        @else
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Confirma tu suscripción</h1>
            <p class="mt-3 text-gray-600 dark:text-gray-400">
                Pulsa el botón para empezar a recibir el resumen semanal en {{ $email }}.
            </p>
            {{-- Botón y no confirmación directa en el GET: los escáneres de
                 enlaces del correo abren la URL y confirmarían solos. --}}
            <form method="POST" action="{{ $action }}" class="mt-8">
                @csrf
                <button type="submit" class="btn-primary">Confirmar suscripción</button>
            </form>
        @endif
    </div>
@endsection
