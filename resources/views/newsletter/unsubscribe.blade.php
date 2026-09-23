@extends('layouts.site')

@section('content')
    <div class="max-w-xl mx-auto px-4 sm:px-6 py-20 text-center">
        @if($done)
            <p class="text-4xl" aria-hidden="true">✓</p>
            <h1 class="mt-4 text-2xl font-bold text-gray-900 dark:text-white">Te has dado de baja</h1>
            <p class="mt-3 text-gray-600 dark:text-gray-400">
                No volverás a recibir el resumen semanal en {{ $user->email }}. Los avisos sobre tus propias skills
                (aprobaciones, comentarios) se gestionan aparte desde tu perfil.
            </p>
            <div class="mt-8 flex flex-wrap justify-center gap-3">
                <a href="{{ route('skills.index') }}" class="btn-primary">Explorar {{ $skillsCount }} skills</a>
                <a href="{{ route('profile.edit') }}" class="btn-secondary">Mis preferencias</a>
            </div>
        @else
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">¿Darte de baja del resumen semanal?</h1>
            <p class="mt-3 text-gray-600 dark:text-gray-400">
                Dejarás de recibir el email de los lunes con las skills y guías nuevas en {{ $user->email }}.
            </p>
            <form method="POST" action="{{ $action }}" class="mt-8">
                <button type="submit" class="btn-primary">Sí, darme de baja</button>
            </form>
            <p class="mt-4 text-sm text-gray-400 dark:text-gray-500">
                <a href="{{ route('home') }}" class="underline hover:text-brand-600">No, quiero seguir recibiéndolo</a>
            </p>
        @endif
    </div>
@endsection
