{{--
    Recuadro de herramientas con enlace de afiliado (App\Support\Affiliates).
    Mismo diseño que resources/js/Components/AffiliateBox.vue.
    Uso: @include('partials.affiliate-box', ['tools' => $tools, 'title' => '…'])
--}}
@if(! empty($tools))
    <section class="mt-14 rounded-2xl border border-gray-100 dark:border-gray-800 p-5" aria-labelledby="affiliate-tools-title">
        <h2 id="affiliate-tools-title" class="text-sm font-semibold text-gray-900 dark:text-gray-100">{{ $title ?? 'Herramientas para esta tarea' }}</h2>
        @foreach($tools as $tool)
            <div class="mt-3 flex flex-col sm:flex-row sm:items-center gap-3 sm:justify-between">
                <div>
                    <p class="font-medium text-gray-900 dark:text-white">{{ $tool['name'] }}</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ $tool['blurb'] }}</p>
                </div>
                <a href="{{ $tool['href'] }}" target="_blank" rel="sponsored noopener" data-afiliado class="btn-secondary shrink-0 justify-center">{{ $tool['cta'] }} ↗</a>
            </div>
        @endforeach
        <p class="mt-4 text-xs text-gray-400 dark:text-gray-500">{{ \App\Support\Affiliates::DISCLOSURE }}</p>
    </section>
    {{-- Marca el enlace como pulsado por una persona antes de seguirlo: el
         servidor solo cuenta los clics con la marca (los robots siguen el
         href sin ella). Ver App\Support\Affiliates::PRESSED. --}}
    <script>
        (function () {
            function mark(event) {
                var link = event.target.closest && event.target.closest('a[data-afiliado]');
                if (!link) return;
                var url = new URL(link.href, window.location.href);
                if (url.searchParams.get(@json(\App\Support\Affiliates::PRESSED)) === '1') return;
                url.searchParams.set(@json(\App\Support\Affiliates::PRESSED), '1');
                link.href = url.toString();
            }
            document.addEventListener('pointerdown', mark, true);
            document.addEventListener('click', mark, true);
        })();
    </script>
@endif
