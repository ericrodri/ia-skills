<script setup>
import { Head, Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import SkillCard from '@/Components/SkillCard.vue'

// El copy editorial y las FAQ llegan del servidor (App\Support\ProfessionContent)
// para que el FAQPage de datos estructurados se emita en el HTML inicial.
defineProps({
    profession: Object,
    skills: Object,
    content: { type: Object, default: null },
    guides: { type: Array, default: () => [] },
})
</script>

<template>
    <Head>
        <title>Prompts de IA para {{ profession.name }} — ia-skills</title>
    </Head>

    <AppLayout>
        <!-- Header -->
        <div class="bg-gradient-to-b from-brand-50 to-white dark:from-gray-800 dark:to-gray-900 border-b border-gray-100 dark:border-gray-700">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 py-10">
                <div class="flex items-center gap-2 text-sm text-gray-400 dark:text-gray-500 mb-4">
                    <Link :href="route('professions.index')" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors">Profesiones</Link>
                    <span>/</span>
                    <span class="text-gray-700 dark:text-gray-300">{{ profession.name }}</span>
                </div>
                <div class="flex items-start gap-4">
                    <span class="text-4xl">{{ profession.icon }}</span>
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Skills de IA para {{ profession.name }}</h1>
                        <p class="mt-1.5 text-gray-500 dark:text-gray-400">{{ profession.description }}</p>
                        <p class="mt-2 text-sm font-medium text-brand-600 dark:text-brand-400">{{ profession.skills_count }} skills</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Intro SEO content -->
        <div v-if="content?.intro" class="max-w-6xl mx-auto px-4 sm:px-6 pt-8 pb-2">
            <div class="bg-gray-50 dark:bg-gray-800/50 rounded-2xl p-6 border border-gray-100 dark:border-gray-700">
                <p v-for="(paragraph, i) in content.intro" :key="i" class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed" :class="i > 0 ? 'mt-3' : ''">{{ paragraph }}</p>
            </div>
        </div>

        <!-- Skills list -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-10">
            <div v-if="skills.data.length" class="flex flex-col gap-3">
                <SkillCard
                    v-for="skill in skills.data"
                    :key="skill.id"
                    :skill="skill"
                />
            </div>
            <div v-else class="text-center py-20 text-gray-400 dark:text-gray-500">
                <p class="text-lg font-medium">Aún no hay skills para esta profesión.</p>
                <Link :href="route('skills.create')" class="btn-primary mt-4">Sé el primero en compartir →</Link>
            </div>

            <!-- Pagination -->
            <div v-if="skills.last_page > 1" class="mt-8 flex justify-center gap-2">
                <Link
                    v-for="link in skills.links"
                    :key="link.label"
                    :href="link.url || '#'"
                    :class="[
                        'px-3 py-1.5 rounded-lg text-sm border transition-colors',
                        link.active ? 'bg-brand-600 text-white border-brand-600' : 'border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-300 hover:border-brand-300 dark:hover:border-brand-500',
                        !link.url ? 'opacity-40 pointer-events-none' : ''
                    ]"
                    v-html="link.label"
                />
            </div>
        </div>
        <!-- FAQ -->
        <div v-if="content?.faq?.length" class="max-w-6xl mx-auto px-4 sm:px-6 pb-16">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-5">Preguntas frecuentes sobre prompts de IA para {{ profession.name }}</h2>
            <div class="space-y-3">
                <details
                    v-for="(item, i) in content.faq"
                    :key="i"
                    class="group rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 overflow-hidden"
                >
                    <summary class="flex items-center justify-between px-5 py-4 cursor-pointer list-none select-none">
                        <span class="text-sm font-medium text-gray-900 dark:text-gray-100 pr-4">{{ item.q }}</span>
                        <svg class="w-4 h-4 text-gray-400 shrink-0 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </summary>
                    <div class="px-5 pb-4 text-sm text-gray-600 dark:text-gray-400 leading-relaxed border-t border-gray-100 dark:border-gray-800 pt-3">
                        {{ item.a }}
                    </div>
                </details>
            </div>
        </div>

        <!-- Guías relacionadas (páginas Blade: enlaces normales, no <Link>) -->
        <div v-if="guides.length" class="max-w-6xl mx-auto px-4 sm:px-6 pb-16">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-5">Guías para sacarle partido a la IA en {{ profession.name }}</h2>
            <div class="grid gap-3 sm:grid-cols-3">
                <a
                    v-for="guide in guides"
                    :key="guide.url"
                    :href="guide.url"
                    class="block rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 p-4 hover:border-brand-300 dark:hover:border-brand-500 transition-colors"
                >
                    <span class="font-semibold text-sm text-gray-900 dark:text-white">{{ guide.title }}</span>
                    <span class="mt-1 block text-xs text-gray-500 dark:text-gray-400">{{ guide.excerpt }}</span>
                </a>
            </div>
        </div>

    </AppLayout>
</template>
