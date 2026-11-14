<script setup>
// Recuadro «Herramientas para esta tarea» con enlace de afiliado
// (App\Support\Affiliates). El enlace pasa por /ir/{tool}, que cuenta el clic.
// No dice «que usa esta skill»: algunas salen por el tema (Pixa), no porque
// la ficha las nombre.
// Mismo diseño que resources/views/partials/affiliate-box.blade.php.
defineProps({
    tools: { type: Array, required: true },
    disclosure: { type: String, required: true },
})

// Marca el enlace como pulsado por una persona justo antes de seguirlo
// (también con clic central, Ctrl+clic o Intro). El servidor solo cuenta los
// clics que llevan la marca: los robots siguen el href sin ella.
// Mismo nombre que App\Support\Affiliates::PRESSED.
function markPressed(event) {
    const link = event.currentTarget
    const url = new URL(link.href, window.location.href)
    if (url.searchParams.get('pulsado') !== '1') {
        url.searchParams.set('pulsado', '1')
        link.href = url.toString()
    }
}
</script>

<template>
    <section v-if="tools.length" class="mt-8 rounded-2xl border border-gray-100 dark:border-gray-800 p-5" aria-labelledby="affiliate-tools-title">
        <h2 id="affiliate-tools-title" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Herramientas para esta tarea</h2>
        <div v-for="tool in tools" :key="tool.slug" class="mt-3 flex flex-col sm:flex-row sm:items-center gap-3 sm:justify-between">
            <div>
                <p class="font-medium text-gray-900 dark:text-white">{{ tool.name }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">{{ tool.blurb }}</p>
            </div>
            <a :href="tool.href" target="_blank" rel="sponsored noopener" @pointerdown="markPressed" @click="markPressed" class="btn-secondary shrink-0 justify-center">{{ tool.cta }} ↗</a>
        </div>
        <p class="mt-4 text-xs text-gray-400 dark:text-gray-500">{{ disclosure }}</p>
    </section>
</template>
