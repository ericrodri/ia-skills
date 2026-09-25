<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-50 dark:bg-gray-950 px-4 transition-colors duration-200">

        <!-- Logo -->
        <Link :href="route('home')" class="flex items-center gap-2 mb-8 group">
            <img src="/logo.png?v=2" alt="" width="36" height="36" class="w-9 h-9">
            <span class="text-xl font-bold text-gray-900 dark:text-white group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors">
                ia-skills
            </span>
        </Link>

        <!-- Card -->
        <div class="w-full max-w-md bg-white dark:bg-gray-900 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-800 px-8 py-8 transition-colors duration-200">
            <slot />
        </div>

        <!-- Back to home -->
        <p class="mt-6 text-sm text-gray-400 dark:text-gray-500">
            <Link :href="route('home')" class="hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                ← Volver al inicio
            </Link>
        </p>
    </div>
</template>
