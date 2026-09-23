<script setup>
import { Head, Link, router } from '@inertiajs/vue3'
import { computed, ref } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import SkillCard from '@/Components/SkillCard.vue'

const props = defineProps({
    rankings: { type: Object, required: true },
    professions: { type: Array, default: () => [] },
    selectedProfession: { type: String, default: null },
})

const tabs = computed(() => [
    { key: 'trending', label: 'Tendencia esta semana', hint: 'Más votos netos en los últimos 7 días' },
    { key: 'saved', label: 'Más guardadas', hint: 'Las que más gente se ha llevado a su biblioteca' },
    { key: 'top', label: 'Más votadas', hint: 'Votos acumulados desde siempre' },
    { key: 'newest', label: 'Nuevas', hint: 'Recién publicadas' },
].filter(t => props.rankings[t.key]?.length))

const active = ref(tabs.value[0]?.key ?? 'top')
const activeTab = computed(() => tabs.value.find(t => t.key === active.value))

function selectProfession(slug) {
    router.get(route('rankings.index'), slug ? { profesion: slug } : {}, { preserveScroll: true })
}

const formatNumber = (n) => new Intl.NumberFormat('es-ES').format(n ?? 0)
</script>

<template>
    <Head>
        <title>Ranking de skills de IA — ia-skills</title>
    </Head>

    <AppLayout>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-10">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100">Ranking</h1>
            <p class="mt-2 text-gray-500 dark:text-gray-400">Lo que la comunidad está votando, guardando y usando.</p>

            <!-- Filtro por profesión -->
            <div class="mt-6 flex flex-wrap gap-2">
                <button
                    @click="selectProfession(null)"
                    :class="['px-3 py-1.5 rounded-lg text-sm border transition-colors', !selectedProfession ? 'bg-brand-600 text-white border-brand-600' : 'border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-400 hover:border-brand-300']"
                >Todas</button>
                <button
                    v-for="p in professions"
                    :key="p.slug"
                    @click="selectProfession(p.slug)"
                    :class="['px-3 py-1.5 rounded-lg text-sm border transition-colors', selectedProfession === p.slug ? 'bg-brand-600 text-white border-brand-600' : 'border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-400 hover:border-brand-300']"
                >{{ p.name }}</button>
            </div>

            <div class="mt-8 lg:flex gap-10">
                <section class="flex-1 min-w-0">
                    <div role="tablist" class="flex flex-wrap gap-1 border-b border-gray-100 dark:border-gray-800">
                        <button
                            v-for="tab in tabs"
                            :key="tab.key"
                            role="tab"
                            :aria-selected="active === tab.key"
                            @click="active = tab.key"
                            :class="['px-3 py-2 text-sm -mb-px border-b-2 transition-colors', active === tab.key ? 'border-brand-600 text-brand-700 dark:text-brand-400 font-medium' : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200']"
                        >{{ tab.label }}</button>
                    </div>
                    <p v-if="activeTab" class="mt-3 mb-4 text-xs text-gray-400 dark:text-gray-500">{{ activeTab.hint }}</p>

                    <ol v-if="activeTab" class="flex flex-col gap-3">
                        <li v-for="(skill, i) in rankings[active]" :key="skill.id" class="flex items-start gap-3">
                            <span class="w-7 pt-4 text-right text-sm font-bold tabular-nums" :class="i < 3 ? 'text-brand-600 dark:text-brand-400' : 'text-gray-300 dark:text-gray-600'">{{ i + 1 }}</span>
                            <div class="flex-1 min-w-0">
                                <SkillCard :skill="skill" />
                                <p v-if="active === 'trending'" class="mt-1 ml-1 text-xs text-green-600 dark:text-green-400">+{{ skill.metric }} votos esta semana</p>
                                <p v-else-if="active === 'saved'" class="mt-1 ml-1 text-xs text-gray-400 dark:text-gray-500">{{ formatNumber(skill.saves_count) }} guardadas</p>
                            </div>
                        </li>
                    </ol>
                    <p v-else class="py-16 text-center text-gray-400 dark:text-gray-500">Todavía no hay datos suficientes para este ranking.</p>
                </section>

                <!-- Autores -->
                <aside v-if="rankings.authors.length" class="lg:w-72 shrink-0 mt-10 lg:mt-0">
                    <h2 class="font-semibold text-gray-900 dark:text-gray-100 mb-4">Autores destacados</h2>
                    <ol class="space-y-3">
                        <li v-for="(a, i) in rankings.authors" :key="a.username" class="flex items-center gap-3">
                            <span class="w-5 text-right text-xs font-bold text-gray-300 dark:text-gray-600 tabular-nums">{{ i + 1 }}</span>
                            <div class="w-8 h-8 rounded-full bg-brand-100 dark:bg-brand-900/40 text-brand-700 dark:text-brand-300 text-sm font-semibold flex items-center justify-center shrink-0">{{ a.name.charAt(0).toUpperCase() }}</div>
                            <div class="min-w-0">
                                <Link :href="route('authors.show', a.username)" class="text-sm font-medium text-gray-900 dark:text-gray-100 hover:text-brand-600 dark:hover:text-brand-400 truncate block">
                                    {{ a.name }} <span v-if="a.is_verified_expert" class="text-brand-500" title="Experto verificado">✓</span>
                                </Link>
                                <p class="text-xs text-gray-400 dark:text-gray-500 tabular-nums">{{ formatNumber(a.skills) }} skills · {{ formatNumber(a.votes) }} votos</p>
                            </div>
                        </li>
                    </ol>
                    <div class="mt-8 p-4 rounded-xl bg-brand-50 dark:bg-brand-900/20 border border-brand-100 dark:border-brand-800/50 text-sm">
                        <p class="font-medium text-brand-900 dark:text-brand-200">¿Quieres aparecer aquí?</p>
                        <p class="mt-1 text-brand-800/80 dark:text-brand-300/80">Comparte los prompts que te funcionan. Los votos de la comunidad hacen el resto.</p>
                        <Link :href="route('skills.create')" class="mt-3 inline-flex btn-primary text-xs">Compartir una skill</Link>
                    </div>
                </aside>
            </div>
        </div>
    </AppLayout>
</template>
