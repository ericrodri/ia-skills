<script setup>
import { Head, Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import SkillCard from '@/Components/SkillCard.vue'

defineProps({
    tool: { type: Object, required: true },
    images: { type: Array, default: () => [] },
    others: { type: Array, default: () => [] },
    otherTools: { type: Array, default: () => [] },
})
</script>

<template>
    <Head>
        <title>{{ tool.heading }} — ia-skills</title>
    </Head>

    <AppLayout>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 py-10">
            <nav class="flex items-center gap-2 text-sm text-gray-400 dark:text-gray-500 mb-6" aria-label="Migas de pan">
                <Link :href="route('tools.index')" class="hover:text-brand-600">Herramientas</Link>
                <span>/</span>
                <span class="text-gray-600 dark:text-gray-400 truncate">{{ tool.name }}</span>
            </nav>

            <p class="text-xs font-semibold uppercase tracking-wide text-brand-600 dark:text-brand-400">{{ tool.countLabel }} fichas</p>
            <h1 class="mt-2 text-3xl font-bold text-gray-900 dark:text-gray-100">{{ tool.heading }}</h1>
            <p class="mt-3 text-lg text-gray-600 dark:text-gray-400">{{ tool.description }}</p>
            <p v-for="(p, i) in tool.intro" :key="i" class="mt-4 text-gray-600 dark:text-gray-400 leading-relaxed">{{ p }}</p>

            <section v-if="images.length" class="mt-10">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Editar y crear imágenes</h2>
                <div class="mt-4 flex flex-col gap-3">
                    <SkillCard v-for="skill in images" :key="skill.id" :skill="skill" />
                </div>
            </section>

            <section v-if="others.length" class="mt-10">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100">{{ images.length ? 'Otros usos' : `Los más usados en ${tool.name}` }}</h2>
                <div class="mt-4 flex flex-col gap-3">
                    <SkillCard v-for="skill in others" :key="skill.id" :skill="skill" />
                </div>
            </section>

            <p v-if="images.length + others.length < tool.count" class="mt-6 text-sm">
                <Link :href="route('skills.index', { tool: tool.toolName })" class="font-medium text-brand-600 dark:text-brand-400 hover:underline">
                    Ver las {{ tool.countLabel }} fichas para {{ tool.name }} en el catálogo →
                </Link>
            </p>

            <section v-if="tool.faq?.length" class="mt-14">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Preguntas frecuentes</h2>
                <dl class="mt-4 divide-y divide-gray-100 dark:divide-gray-800">
                    <div v-for="f in tool.faq" :key="f.q" class="py-4">
                        <dt class="font-medium text-gray-900 dark:text-gray-100">{{ f.q }}</dt>
                        <dd class="mt-1.5 text-sm text-gray-600 dark:text-gray-400 leading-relaxed">{{ f.a }}</dd>
                    </div>
                </dl>
            </section>

            <section v-if="otherTools.length" class="mt-12">
                <h2 class="font-semibold text-gray-900 dark:text-gray-100 mb-3">Otras herramientas</h2>
                <div class="flex flex-wrap gap-2">
                    <Link
                        v-for="t in otherTools"
                        :key="t.url"
                        :href="t.url"
                        class="rounded-lg border border-gray-200 dark:border-gray-700 px-3 py-1.5 text-sm text-gray-700 dark:text-gray-300 hover:border-brand-300 hover:text-brand-600 dark:hover:border-brand-500 dark:hover:text-brand-400 transition-colors"
                    >{{ t.name }}</Link>
                </div>
            </section>
        </div>
    </AppLayout>
</template>
