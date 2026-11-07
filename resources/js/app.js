import '../css/app.css';
import './bootstrap';

import { createInertiaApp, router } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

// Analítica propia (App\Support\Analytics): un aviso por página vista, sin
// cookies. Se registra antes de arrancar Inertia para que cuente también la
// primera carga. La procedencia solo tiene sentido en esa primera página; la
// misma URL dos veces seguidas (un formulario que vuelve atrás) no cuenta.
//
// Solo se avisa cuando hay señal de una persona (ratón, toque, scroll o
// tecla): el primer día, la mitad de los avisos venían de navegadores
// automatizados que ejecutan JavaScript pero no interactúan. Los que se
// declaran automatizados (navigator.webdriver) no avisan nunca. El mismo
// criterio está en layouts/site.blade.php para las guías.
const HUMAN_EVENTS = ['pointermove', 'pointerdown', 'scroll', 'wheel', 'keydown', 'touchstart']
const tracking = !!navigator.sendBeacon && !navigator.webdriver
let human = false
let pending = null
let lastTrackedUrl = null

const sendView = ([url, referrer]) => navigator.sendBeacon('/hola', new URLSearchParams({ p: url, r: referrer }))

function markHuman() {
    if (human) return
    human = true
    HUMAN_EVENTS.forEach((e) => window.removeEventListener(e, markHuman, true))
    if (pending) sendView(pending)
    pending = null
}

if (tracking) {
    HUMAN_EVENTS.forEach((e) => window.addEventListener(e, markHuman, { capture: true, passive: true }))
}

router.on('navigate', (event) => {
    const url = event.detail.page.url
    if (!tracking || url === lastTrackedUrl) return
    // Si aún no ha interactuado, se guarda la primera procedencia.
    const referrer = lastTrackedUrl === null ? document.referrer : (pending?.[1] ?? '')
    lastTrackedUrl = url
    if (human) sendView([url, referrer])
    else pending = [url, referrer]
})

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)

        // Directiva global para cerrar dropdowns al clicar fuera
        app.directive('click-outside', {
            mounted(el, binding) {
                el._clickOutsideHandler = (event) => {
                    if (!el.contains(event.target)) binding.value(event)
                }
                document.addEventListener('click', el._clickOutsideHandler)
            },
            unmounted(el) {
                document.removeEventListener('click', el._clickOutsideHandler)
            },
        })

        return app.mount(el)
    },
    progress: {
        color: '#4B5563',
    },
});
