import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    build: {
        // No vaciar public/build al empezar a compilar: en producción, mientras
        // `npm run build` trabajaba, el manifest no existía y todas las
        // páginas daban 500 ("Vite manifest not found"). Así se sigue
        // sirviendo la versión anterior hasta que la nueva está escrita. Los
        // archivos viejos los limpia el deploy (.github/workflows/deploy.yml).
        emptyOutDir: false,
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
});
