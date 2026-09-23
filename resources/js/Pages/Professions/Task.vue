<script setup>
import { Head, Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import SkillCard from '@/Components/SkillCard.vue'
import Pagination from '@/Components/Pagination.vue'

// Landing profesión × tarea. El copy sale de resources/data/profession-tasks.json.
defineProps({
    profession: { type: Object, required: true },
    task: { type: Object, required: true },
    skills: { type: Object, required: true },
    siblings: { type: Array, default: () => [] },
    guides: { type: Array, default: () => [] },
})
</script>

<template>
    <Head>
        <title>{{ task.heading }} ({{ profession.name }}) — ia-skills</title>
    </Head>

    <AppLayout>
        <div class="bg-gradient-to-b from-brand-50 to-white dark:from-gray-800 dark:to-gray-900 border-b border-gray-100 dark:border-gray-800">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 py-10">
                <nav class="flex flex-wrap items-center gap-2 text-sm text-gray-400 dark:text-gray-500 mb-4" aria-label="Migas de pan">
                    <Link :href="route('professions.index')" class="hover:text-brand-600">Profesiones</Link>
                    <span>/</span>
                    <Link :href="route('professions.show', profession.slug)" class="hover:text-brand-600">{{ profession.name }}</Link>
                    <span>/</span>
                    <span class="text-gray-700 dark:text-gray-300 capitalize">{{ task.name }}</span>
                </nav>
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">{{ task.heading }}</h1>
                <p class="mt-1 text-sm font-medium text-brand-600 dark:text-brand-400">{{ skills.total }} skills para {{ profession.name }}</p>
                <p class="mt-4 max-w-3xl text-gray-600 dark:text-gray-400 leading-relaxed">{{ task.intro }}</p>
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-10 lg:flex gap-10">
            <section class="flex-1 min-w-0">
                <div class="flex flex-col gap-3">
                    <SkillCard v-for="skill in skills.data" :key="skill.id" :skill="skill" />
                </div>
                <Pagination :paginator="skills" />
            </section>

            <aside class="lg:w-64 shrink-0 mt-10 lg:mt-0 space-y-8">
                <div v-if="siblings.length">
                    <h2 class="text-sm font-semibold text-gray-900 dark:text-gray-100 mb-3">Otras tareas de {{ profession.name }}</h2>
                    <ul class="space-y-2">
                        <li v-for="t in siblings" :key="t.slug">
                            <Link :href="t.url" class="text-sm text-gray-600 dark:text-gray-400 hover:text-brand-600 dark:hover:text-brand-400 capitalize">{{ t.name }} <span class="text-xs text-gray-400">({{ t.count }})</span></Link>
                        </li>
                        <li>
                            <Link :href="route('professions.show', profession.slug)" class="text-sm font-medium text-brand-600 dark:text-brand-400 hover:underline">Todas las de {{ profession.name }} →</Link>
                        </li>
                    </ul>
                </div>
                <div v-if="guides.length">
                    <h2 class="text-sm font-semibold text-gray-900 dark:text-gray-100 mb-3">Guías</h2>
                    <ul class="space-y-3">
                        <!-- Guías = Blade: <a>, no <Link> -->
                        <li v-for="g in guides" :key="g.url">
                            <a :href="g.url" class="text-sm text-gray-700 dark:text-gray-300 hover:text-brand-600 dark:hover:text-brand-400">{{ g.title }}</a>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
    </AppLayout>
</template>
