<script setup>
import { Head, Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

defineProps({
    tools: { type: Array, default: () => [] },
})
</script>

<template>
    <Head>
        <title>Prompts por herramienta — ia-skills</title>
    </Head>

    <AppLayout>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 py-10">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100">Prompts por herramienta</h1>
            <p class="mt-3 text-lg text-gray-600 dark:text-gray-400">
                Cada prompt está escrito pensando en un asistente. Elige el que usas y verás los que mejor funcionan en él.
            </p>

            <ul class="mt-8 grid gap-4 sm:grid-cols-3">
                <li v-for="t in tools" :key="t.slug">
                    <Link :href="t.url" class="block h-full rounded-xl border border-gray-200 dark:border-gray-700 p-5 hover:border-brand-300 dark:hover:border-brand-500 transition-colors">
                        <p class="font-semibold text-gray-900 dark:text-gray-100">{{ t.heading }}</p>
                        <p class="mt-1 text-xs font-medium text-brand-600 dark:text-brand-400">{{ t.countLabel }} fichas</p>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400 line-clamp-4">{{ t.description }}</p>
                    </Link>
                </li>
            </ul>

            <p class="mt-8 text-sm text-gray-500 dark:text-gray-400">
                ¿Buscas por tarea? Mira las <Link :href="route('professions.index')" class="text-brand-600 dark:text-brand-400 hover:underline">profesiones</Link>
                o las <Link :href="route('collections.index')" class="text-brand-600 dark:text-brand-400 hover:underline">colecciones</Link>.
            </p>
        </div>
    </AppLayout>
</template>
