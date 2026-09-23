<script setup>
import { Head, Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

defineProps({
    collections: { type: Array, default: () => [] },
})
</script>

<template>
    <Head>
        <title>Colecciones de skills de IA — ia-skills</title>
    </Head>

    <AppLayout>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-10">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100">Colecciones</h1>
            <p class="mt-2 max-w-2xl text-gray-500 dark:text-gray-400">
                Packs de skills seleccionados para resolver un objetivo de principio a fin. Cada colección sigue el orden en que conviene usarlas, y puedes instalarlas todas de una vez en Claude Code.
            </p>

            <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <li v-for="c in collections" :key="c.slug">
                    <Link :href="c.url" class="block h-full rounded-2xl border border-gray-200 dark:border-gray-700 p-5 hover:border-brand-300 dark:hover:border-brand-500 hover:shadow-sm transition-all group">
                        <p class="text-xs font-semibold uppercase tracking-wide text-brand-600 dark:text-brand-400">{{ c.profession ?? 'General' }} · {{ c.count }} skills</p>
                        <h2 class="mt-2 font-semibold text-gray-900 dark:text-gray-100 group-hover:text-brand-700 dark:group-hover:text-brand-400">{{ c.title }}</h2>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400 line-clamp-3">{{ c.description }}</p>
                    </Link>
                </li>
            </ul>
        </div>
    </AppLayout>
</template>
