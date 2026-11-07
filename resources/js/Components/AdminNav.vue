<script setup>
import { Link } from '@inertiajs/vue3'

// Pestañas del área de administración. El botón «Admin» de la cabecera lleva
// a moderación; desde aquí se pasa a la analítica sin añadir más botones.
const tabs = [
    { label: 'Moderación', route: 'admin.skills.index' },
    { label: 'Analítica', route: 'admin.analytics' },
]
</script>

<template>
    <nav class="mb-6 flex gap-4 border-b border-gray-100 dark:border-gray-800 text-sm" aria-label="Administración">
        <Link
            v-for="tab in tabs"
            :key="tab.route"
            :href="route(tab.route)"
            :class="[
                '-mb-px border-b-2 pb-2',
                route().current(tab.route)
                    ? 'border-brand-500 font-semibold text-gray-900 dark:text-white'
                    : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white',
            ]"
        >{{ tab.label }}</Link>
    </nav>
</template>
