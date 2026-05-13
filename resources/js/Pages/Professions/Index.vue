<script setup>
import { Head, Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

defineProps({ professions: Array })
</script>

<template>
    <Head>
        <title>Skills de IA por profesión — ia-skills</title>
        <meta name="description" content="Explora skills de IA organizadas por profesión: marketing, desarrollo, diseño, ventas, RRHH y más." />
        <link rel="canonical" :href="route('professions.index')" />
        <meta property="og:type" content="website" />
        <meta property="og:url" :content="route('professions.index')" />
        <meta property="og:title" content="Skills de IA por profesión — ia-skills" />
        <meta property="og:description" content="Explora skills de IA organizadas por profesión: marketing, desarrollo, diseño, ventas, RRHH y más." />
        <meta property="og:image" content="/og-default.svg" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:image" content="/og-default.svg" />
    </Head>

    <AppLayout>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-12">
            <div class="mb-10">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Explora por profesión</h1>
                <p class="mt-2 text-gray-500 dark:text-gray-400">Skills de IA adaptadas a cada rol profesional, validadas por la comunidad.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <Link
                    v-for="p in professions"
                    :key="p.id"
                    :href="route('professions.show', p.slug)"
                    class="flex items-start gap-4 p-5 rounded-xl border border-gray-200 dark:border-gray-700 dark:bg-gray-800/50 hover:border-brand-300 dark:hover:border-brand-500 hover:shadow-sm transition-all group"
                >
                    <span class="text-3xl mt-0.5 shrink-0">{{ p.icon }}</span>
                    <div>
                        <h2 class="font-semibold text-gray-900 dark:text-gray-100 group-hover:text-brand-600 dark:group-hover:text-brand-400 transition-colors">{{ p.name }}</h2>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400 line-clamp-2">{{ p.description }}</p>
                        <span class="mt-2 inline-block text-xs font-medium text-brand-600 dark:text-brand-400">
                            {{ p.skills_count }} skills →
                        </span>
                    </div>
                </Link>
            </div>
        </div>
    </AppLayout>
</template>
