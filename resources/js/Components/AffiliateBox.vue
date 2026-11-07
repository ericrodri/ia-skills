<script setup>
// Recuadro «Herramientas que usa esta skill» con enlace de afiliado
// (App\Support\Affiliates). El enlace pasa por /ir/{tool}, que cuenta el clic.
// Mismo diseño que resources/views/partials/affiliate-box.blade.php.
defineProps({
    tools: { type: Array, required: true },
    disclosure: { type: String, required: true },
})
</script>

<template>
    <section v-if="tools.length" class="mt-8 rounded-2xl border border-gray-100 dark:border-gray-800 p-5" aria-labelledby="affiliate-tools-title">
        <h2 id="affiliate-tools-title" class="text-sm font-semibold text-gray-900 dark:text-gray-100">Herramientas que usa esta skill</h2>
        <div v-for="tool in tools" :key="tool.slug" class="mt-3 flex flex-col sm:flex-row sm:items-center gap-3 sm:justify-between">
            <div>
                <p class="font-medium text-gray-900 dark:text-white">{{ tool.name }}</p>
                <p class="text-sm text-gray-600 dark:text-gray-400">{{ tool.blurb }}</p>
            </div>
            <a :href="tool.href" target="_blank" rel="sponsored noopener" class="btn-secondary shrink-0 justify-center">{{ tool.cta }} ↗</a>
        </div>
        <p class="mt-4 text-xs text-gray-400 dark:text-gray-500">{{ disclosure }}</p>
    </section>
</template>
