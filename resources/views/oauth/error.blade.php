@extends('layouts.site')

@section('content')
    <div class="max-w-md mx-auto px-4 sm:px-6 py-16">
        <div class="rounded-2xl border border-red-200 dark:border-red-900/60 bg-white dark:bg-gray-800/60 p-6 sm:p-8">
            <h1 class="text-xl font-bold text-gray-900 dark:text-white">No se puede completar la conexión</h1>
            <p class="mt-3 text-sm text-gray-600 dark:text-gray-400">{{ $message }}</p>
            <p class="mt-4 text-sm"><a href="/guias/conectar-ia-skills-a-claude" class="text-brand-600 dark:text-brand-400 underline">Cómo conectar ia-skills a Claude</a></p>
        </div>
    </div>
@endsection
