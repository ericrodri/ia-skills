<script setup>
import { Head, Link, usePage } from '@inertiajs/vue3'
import { computed } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import SkillCard from '@/Components/SkillCard.vue'

defineProps({
    professions: Array,
    topSkills: Array,
})

const auth = usePage().props.auth
const shareRoute = computed(() => auth?.user ? route('skills.create') : route('register'))
</script>

<template>
    <Head>
        <title>ia-skills — Workflows de IA para profesionales</title>
        <meta name="description" content="Descubre cómo los mejores profesionales usan IA en su trabajo. Skills reales, workflows y prompts validados por la comunidad." />
        <link rel="canonical" :href="route('home')" />
        <meta property="og:type" content="website" />
        <meta property="og:url" :content="route('home')" />
        <meta property="og:title" content="ia-skills — Workflows de IA para profesionales" />
        <meta property="og:description" content="La biblioteca colaborativa de workflows de IA para profesionales." />
        <meta property="og:site_name" content="ia-skills" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="ia-skills — Workflows de IA para profesionales" />
        <meta name="twitter:description" content="Descubre cómo los mejores profesionales usan IA en su trabajo. Skills reales, workflows y prompts validados por la comunidad." />
    </Head>
    <component :is="'script'" type="application/ld+json" v-text='JSON.stringify({
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "ia-skills",
        "url": "https://ia-skills.com",
        "description": "La biblioteca colaborativa de workflows de IA para profesionales.",
        "potentialAction": {
            "@type": "SearchAction",
            "target": { "@type": "EntryPoint", "urlTemplate": "https://ia-skills.com/skills?q={search_term_string}" },
            "query-input": "required name=search_term_string"
        }
    })' />

    <AppLayout>
        <!-- Hero -->
        <section class="bg-gradient-to-b from-brand-50 to-white dark:from-gray-900 dark:to-gray-900 pt-16 pb-20">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 text-center">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-100 dark:bg-brand-900/30 text-brand-700 dark:text-brand-300 text-xs font-semibold mb-6">
                    Únete a la comunidad
                </div>
                <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 dark:text-white leading-tight tracking-tight">
                    Descubre cómo los mejores<br class="hidden sm:block" />
                    <span class="text-brand-600 dark:text-brand-500">profesionales usan IA</span>
                </h1>
                <p class="mt-5 text-lg text-gray-600 dark:text-gray-400 max-w-xl mx-auto">
                    Skills reales, workflows y prompts validados por la comunidad. Organizados por profesión, listos para usar.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row gap-3 justify-center">
                    <Link :href="route('skills.index')" class="btn-primary text-base px-6 py-3">
                        Explorar skills →
                    </Link>
                    <Link :href="shareRoute" class="btn-secondary text-base px-6 py-3">
                        Compartir mi skill
                    </Link>
                    <Link :href="route('how-it-works')" class="btn-secondary text-base px-6 py-3">
                        ¿Cómo funciona?
                    </Link>
                </div>
            </div>
        </section>

        <!-- Professions grid -->
        <section class="max-w-6xl mx-auto px-4 sm:px-6 py-16">
            <div class="flex items-baseline justify-between mb-8">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Explora por profesión</h2>
                <Link :href="route('professions.index')" class="text-sm text-brand-600 dark:text-brand-500 hover:text-brand-700 dark:hover:text-brand-400 font-medium">Ver todas →</Link>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3">
                <Link
                    v-for="p in professions"
                    :key="p.id"
                    :href="route('professions.show', p.slug)"
                    class="flex flex-col items-center gap-2 p-4 rounded-xl border border-gray-200 dark:border-gray-800 hover:border-brand-300 dark:hover:border-brand-600 hover:bg-brand-50 dark:hover:bg-gray-800/50 transition-all group text-center"
                >
                    <span class="text-2xl">{{ p.icon }}</span>
                    <span class="text-sm font-semibold text-gray-800 dark:text-gray-200 group-hover:text-brand-700 dark:group-hover:text-brand-400 transition-colors">{{ p.name }}</span>
                    <span class="text-xs text-gray-400 dark:text-gray-500">{{ p.skills_count }} skills</span>
                </Link>
            </div>
        </section>

        <!-- Top skills -->
        <section v-if="topSkills?.length" class="max-w-6xl mx-auto px-4 sm:px-6 pb-16">
            <div class="flex items-baseline justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Skills más valoradas</h2>
                <Link :href="route('skills.index')" class="text-sm text-brand-600 dark:text-brand-500 hover:text-brand-700 dark:hover:text-brand-400 font-medium">Ver todas →</Link>
            </div>
            <div class="flex flex-col gap-3">
                <SkillCard v-for="skill in topSkills" :key="skill.id" :skill="skill" />
            </div>
        </section>

        <!-- CTA banner -->
        <section class="bg-brand-600 dark:bg-brand-800 py-16">
            <div class="max-w-2xl mx-auto px-4 sm:px-6 text-center">
                <h2 class="text-3xl font-bold text-white">¿Tienes una skill que funciona?</h2>
                <p class="mt-3 text-brand-200 text-lg">Compártela con la comunidad y ayuda a miles de profesionales a trabajar mejor con IA.</p>
                <Link :href="shareRoute" class="mt-8 inline-flex items-center gap-2 px-6 py-3 bg-white dark:bg-gray-100 text-brand-700 dark:text-brand-900 font-semibold rounded-lg hover:bg-brand-50 dark:hover:bg-white transition-colors">
                    Compartir mi skill →
                </Link>
            </div>
        </section>
    </AppLayout>
</template>
