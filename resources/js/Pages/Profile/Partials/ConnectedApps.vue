<script setup>
import { router } from '@inertiajs/vue3'

// Aplicaciones con permiso por OAuth (ProfileController::edit → connectedApps).
defineProps({
    apps: { type: Array, default: () => [] },
})

const date = (iso) => iso ? new Date(iso).toLocaleDateString('es-ES', { day: 'numeric', month: 'long', year: 'numeric' }) : null

function disconnect(app) {
    if (!confirm(`¿Desconectar «${app.name}»? Dejará de poder leer tus skills. Si vuelves a conectarla, te pedirá permiso otra vez.`)) return
    router.delete(route('profile.apps.disconnect', app.id), { preserveScroll: true })
}
</script>

<template>
    <section id="aplicaciones" class="scroll-mt-20">
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Aplicaciones conectadas</h2>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Las que tienen permiso para leer tus skills, como Claude. Desconectar una le quita el acceso al momento.</p>
        </header>

        <p v-if="!apps.length" class="mt-5 text-sm text-gray-500 dark:text-gray-400">Ninguna todavía.</p>

        <ul v-else class="mt-5 divide-y divide-gray-100 dark:divide-gray-700 rounded-xl border border-gray-200 dark:border-gray-700">
            <li v-for="app in apps" :key="app.id" class="flex items-center justify-between gap-4 px-4 py-3">
                <div class="min-w-0">
                    <p class="text-sm font-medium text-gray-900 dark:text-gray-100 truncate">{{ app.name }} <span v-if="app.host" class="font-normal text-gray-400">· {{ app.host }}</span></p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">
                        Conectada el {{ date(app.connected_at) }}<template v-if="app.last_used_at"> · último uso el {{ date(app.last_used_at) }}</template>
                    </p>
                </div>
                <button type="button" @click="disconnect(app)" class="shrink-0 text-sm text-red-500 hover:underline">Desconectar</button>
            </li>
        </ul>
    </section>
</template>
