<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
    // Paginador de Laravel serializado (links, last_page)
    paginator: { type: Object, required: true },
})
</script>

<template>
    <nav v-if="paginator.last_page > 1" class="mt-8 flex justify-center gap-2 flex-wrap" aria-label="Paginación">
        <Link
            v-for="link in paginator.links"
            :key="link.label"
            :href="link.url || '#'"
            preserve-scroll
            :class="[
                'px-3 py-1.5 rounded-lg text-sm border transition-colors',
                link.active ? 'bg-brand-600 text-white border-brand-600' : 'border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-400 hover:border-brand-300',
                !link.url ? 'opacity-40 pointer-events-none' : '',
            ]"
            v-html="link.label"
        />
    </nav>
</template>
