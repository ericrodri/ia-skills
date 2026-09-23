{{--
    Alta en el resumen semanal sin cuenta (doble opt-in, ver NewsletterController).
    Uso: @include('partials.newsletter-form', ['source' => 'guia:'.$guide['slug']])
--}}
<section id="newsletter" class="scroll-mt-20 rounded-2xl border border-brand-100 dark:border-brand-800/50 bg-brand-50/60 dark:bg-brand-900/10 p-6">
    <h2 class="text-lg font-bold text-gray-900 dark:text-white">Recibe las mejores skills cada lunes</h2>
    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
        Un email a la semana con las skills de IA más votadas y las guías nuevas. Sin spam, baja con un clic.
    </p>

    @if(session('newsletter_status'))
        <p @class([
            'mt-4 text-sm font-medium',
            'text-red-600 dark:text-red-400' => session('newsletter_error'),
            'text-green-700 dark:text-green-400' => ! session('newsletter_error'),
        ]) role="status">{{ session('newsletter_status') }}</p>
    @else
        <form method="POST" action="{{ route('newsletter.subscribe') }}" class="mt-4 flex flex-col sm:flex-row gap-2">
            @csrf
            <input type="hidden" name="source" value="{{ $source ?? '' }}">
            {{-- Honeypot: invisible para personas, los bots lo rellenan --}}
            <div class="hidden" aria-hidden="true">
                <label>No rellenes este campo <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
            </div>
            <label for="newsletter-email" class="sr-only">Tu email</label>
            <input
                id="newsletter-email"
                type="email"
                name="email"
                required
                autocomplete="email"
                placeholder="tu@email.com"
                value="{{ old('email') }}"
                class="flex-1 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-4 py-2.5 text-sm text-gray-900 dark:text-gray-100 placeholder-gray-400 focus:border-brand-400 focus:ring-2 focus:ring-brand-100 outline-none"
            >
            <button type="submit" class="btn-primary justify-center">Suscribirme</button>
        </form>
        @error('email')
            <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
        @enderror
        <p class="mt-2 text-xs text-gray-400 dark:text-gray-500">
            Te enviaremos un email para confirmar. Solo lo usamos para este resumen.
            <a href="{{ route('legal.privacy') }}#finalidades" class="underline hover:text-brand-600">Política de privacidad</a>
        </p>
    @endif
</section>
