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
let lastTrackedUrl = null;
router.on('navigate', (event) => {
    const url = event.detail.page.url;
    if (url === lastTrackedUrl || !navigator.sendBeacon) return;
    const data = new URLSearchParams({ p: url, r: lastTrackedUrl === null ? document.referrer : '' });
    lastTrackedUrl = url;
    navigator.sendBeacon('/hola', data);
});

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
