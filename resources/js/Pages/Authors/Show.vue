<script setup>
import { Head } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import SkillCard from '@/Components/SkillCard.vue'
import Pagination from '@/Components/Pagination.vue'

const props = defineProps({
    author: { type: Object, required: true },
    stats: { type: Object, required: true },
    skills: { type: Object, required: true },
})

const formatNumber = (n) => new Intl.NumberFormat('es-ES').format(n ?? 0)
const memberSince = new Date(props.author.created_at).toLocaleDateString('es-ES', { month: 'long', year: 'numeric' })
</script>

<template>
    <Head>
        <title>{{ author.name }} — ia-skills</title>
    </Head>

    <AppLayout>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 py-10">
            <header class="flex flex-col sm:flex-row sm:items-center gap-5 pb-8 border-b border-gray-100 dark:border-gray-800">
                <div class="w-16 h-16 rounded-full bg-brand-100 dark:bg-brand-900/40 text-brand-700 dark:text-brand-300 text-2xl font-bold flex items-center justify-center shrink-0">
                    {{ author.name.charAt(0).toUpperCase() }}
                </div>
                <div class="flex-1 min-w-0">
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100">
                        {{ author.name }}
                        <span v-if="author.is_verified_expert" class="ml-1 align-middle text-sm font-medium text-brand-600 dark:text-brand-400" title="Experto verificado">✓ Experto</span>
                    </h1>
                    <p class="text-sm text-gray-400 dark:text-gray-500">@{{ author.username }} · en ia-skills desde {{ memberSince }}</p>
                    <p v-if="author.bio" class="mt-2 text-gray-600 dark:text-gray-400">{{ author.bio }}</p>
                </div>
            </header>

            <dl class="grid grid-cols-3 gap-3 my-8">
                <div class="rounded-xl border border-gray-200 dark:border-gray-700 p-4">
                    <dt class="text-xs text-gray-500 dark:text-gray-400">Skills publicadas</dt>
                    <dd class="text-2xl font-bold text-gray-900 dark:text-gray-100 tabular-nums">{{ formatNumber(stats.skills) }}</dd>
                </div>
                <div class="rounded-xl border border-gray-200 dark:border-gray-700 p-4">
                    <dt class="text-xs text-gray-500 dark:text-gray-400">Votos recibidos</dt>
                    <dd class="text-2xl font-bold text-gray-900 dark:text-gray-100 tabular-nums">{{ formatNumber(stats.votes) }}</dd>
                </div>
                <div class="rounded-xl border border-gray-200 dark:border-gray-700 p-4">
                    <dt class="text-xs text-gray-500 dark:text-gray-400">Veces guardadas</dt>
                    <dd class="text-2xl font-bold text-gray-900 dark:text-gray-100 tabular-nums">{{ formatNumber(stats.saves) }}</dd>
                </div>
            </dl>

            <h2 class="font-semibold text-gray-900 dark:text-gray-100 mb-4">Skills de {{ author.name }}</h2>
            <div v-if="skills.data.length" class="flex flex-col gap-3">
                <SkillCard v-for="skill in skills.data" :key="skill.id" :skill="skill" />
            </div>
            <p v-else class="text-gray-400 dark:text-gray-500 py-10 text-center">Todavía no ha publicado ninguna skill.</p>

            <Pagination :paginator="skills" />
        </div>
    </AppLayout>
</template>
