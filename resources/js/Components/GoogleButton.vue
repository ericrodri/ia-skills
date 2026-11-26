<script setup>
// «Continuar con Google» (App\Http\Controllers\Auth\GoogleController). Solo
// aparece si el servidor tiene las claves (prop compartida googleLogin).
// Es un <a> normal, no un <Link>: la ida a Google es una visita completa.
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'

const props = defineProps({
    // Slug de la ficha que se quería guardar, para volver a ella guardada.
    guardar: { type: String, default: null },
})

const page = usePage()
const href = computed(() => route('google.redirect', props.guardar ? { guardar: props.guardar } : {}))
</script>

<template>
    <div v-if="page.props.googleLogin">
        <a
            :href="href"
            class="w-full flex items-center justify-center gap-2.5 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-3.5 py-2.5 text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors"
        >
            <svg class="w-4 h-4" viewBox="0 0 48 48" aria-hidden="true">
                <path fill="#FFC107" d="M43.6 20.5H42V20H24v8h11.3C33.7 32.7 29.2 36 24 36c-6.6 0-12-5.4-12-12s5.4-12 12-12c3.1 0 5.9 1.2 8 3.1l5.7-5.7C34 6.1 29.3 4 24 4 12.9 4 4 12.9 4 24s8.9 20 20 20 20-8.9 20-20c0-1.3-.1-2.4-.4-3.5z"/>
                <path fill="#FF3D00" d="M6.3 14.7l6.6 4.8C14.7 15.1 19 12 24 12c3.1 0 5.9 1.2 8 3.1l5.7-5.7C34 6.1 29.3 4 24 4 16.3 4 9.7 8.3 6.3 14.7z"/>
                <path fill="#4CAF50" d="M24 44c5.2 0 9.9-2 13.4-5.2l-6.2-5.2C29.2 35.1 26.7 36 24 36c-5.2 0-9.6-3.3-11.3-7.9l-6.5 5C9.5 39.6 16.2 44 24 44z"/>
                <path fill="#1976D2" d="M43.6 20.5H42V20H24v8h11.3c-.8 2.2-2.2 4.2-4.1 5.6l6.2 5.2C37 39.2 44 34 44 24c0-1.3-.1-2.4-.4-3.5z"/>
            </svg>
            Continuar con Google
        </a>
        <div class="my-4 flex items-center gap-3 text-xs text-gray-400 dark:text-gray-500">
            <span class="h-px flex-1 bg-gray-200 dark:bg-gray-700"></span>
            o con tu email
            <span class="h-px flex-1 bg-gray-200 dark:bg-gray-700"></span>
        </div>
    </div>
</template>
