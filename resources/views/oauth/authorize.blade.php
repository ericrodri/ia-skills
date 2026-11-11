@extends('layouts.site')

{{--
    Pantalla de permiso del OAuth (OAuthAuthorizeController). El nombre de la
    aplicación lo declara ella misma al registrarse, así que se muestra como
    «se presenta como» y lo que se destaca es el dominio al que volverá.
--}}

@section('content')
    <div class="max-w-md mx-auto px-4 sm:px-6 py-16">
        <div class="rounded-2xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800/60 p-6 sm:p-8">
            <div class="flex items-center gap-3">
                <img src="/logo.png?v=2" alt="" width="40" height="40" class="w-10 h-10">
                <span class="text-2xl text-gray-300 dark:text-gray-600" aria-hidden="true">⇄</span>
                <span class="w-10 h-10 rounded-xl bg-gray-100 dark:bg-gray-700 flex items-center justify-center text-xl" aria-hidden="true">🔌</span>
            </div>

            <h1 class="mt-6 text-xl font-bold text-gray-900 dark:text-white">
                Conectar <span class="text-brand-600 dark:text-brand-400">{{ $client->name }}</span> con tu cuenta de ia-skills
            </h1>
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                Una aplicación que se presenta como «{{ $client->name }}» pide permiso para usar tu cuenta. Al aceptar volverás a
                <strong class="text-gray-800 dark:text-gray-200">{{ $redirectHost }}</strong>.
                Si no has empezado tú esta conexión, cancela.
            </p>

            <div class="mt-6">
                <p class="text-sm font-semibold text-gray-900 dark:text-gray-100">Podrá:</p>
                <ul class="mt-2 space-y-1.5 text-sm text-gray-700 dark:text-gray-300">
                    <li class="flex gap-2"><span class="text-green-500" aria-hidden="true">✓</span> Buscar y leer las skills del catálogo público.</li>
                    <li class="flex gap-2"><span class="text-green-500" aria-hidden="true">✓</span> Ver la lista de tus skills y leer sus prompts, también las privadas.</li>
                </ul>
                <p class="mt-4 text-sm font-semibold text-gray-900 dark:text-gray-100">No podrá:</p>
                <ul class="mt-2 space-y-1.5 text-sm text-gray-700 dark:text-gray-300">
                    <li class="flex gap-2"><span class="text-red-400" aria-hidden="true">✕</span> Crear, cambiar ni borrar nada.</li>
                    <li class="flex gap-2"><span class="text-red-400" aria-hidden="true">✕</span> Ver tu email, tu contraseña ni tus datos de la cuenta.</li>
                </ul>
            </div>

            <form method="POST" action="{{ route('oauth.authorize.decide') }}" class="mt-8 flex flex-col-reverse sm:flex-row gap-3">
                @csrf
                @foreach($params as $name => $value)
                    @if(is_string($value))
                        <input type="hidden" name="{{ $name }}" value="{{ $value }}">
                    @endif
                @endforeach
                <button type="submit" name="decision" value="deny" class="btn-secondary flex-1 justify-center">Cancelar</button>
                <button type="submit" name="decision" value="approve" class="btn-primary flex-1 justify-center">Permitir acceso</button>
            </form>

            <div class="mt-6 pt-5 border-t border-gray-100 dark:border-gray-700 text-xs text-gray-500 dark:text-gray-400 flex flex-wrap items-center gap-x-2 gap-y-1">
                <span>Has entrado como <strong class="text-gray-700 dark:text-gray-300">{{ auth()->user()->name }}</strong>.</span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="underline hover:text-gray-700 dark:hover:text-gray-200">¿No eres tú?</button>
                </form>
            </div>
        </div>

        <p class="mt-6 text-center text-xs text-gray-500 dark:text-gray-400">
            Puedes desconectarla cuando quieras desde
            <a href="{{ route('profile.edit') }}#aplicaciones" class="underline">tu perfil</a>.
        </p>
    </div>
@endsection
