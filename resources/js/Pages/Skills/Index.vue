<script setup>
import { Head, Link, router } from '@inertiajs/vue3'
import { ref, watch, computed } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import SkillCard from '@/Components/SkillCard.vue'

const props = defineProps({
    skills: Object,
    professions: Array,
    filters: Object,
    tools: Array,
})

const search = ref(props.filters?.q || '')
const selectedProfession = ref(props.filters?.profession || '')
const selectedTool = ref(props.filters?.tool || '')
const selectedDifficulty = ref(props.filters?.difficulty || '')
const selectedType = ref(props.filters?.type || '')
const selectedSort = ref(props.filters?.sort || 'top')
const searching = ref(false)

let searchTimeout = null
watch(search, () => {
    clearTimeout(searchTimeout)
    searching.value = true
    searchTimeout = setTimeout(() => applyFilters(), 300)
})

function applyFilters() {
    router.get(route('skills.index'), {
        q: search.value || undefined,
        profession: selectedProfession.value || undefined,
        tool: selectedTool.value || undefined,
        difficulty: selectedDifficulty.value || undefined,
        type: selectedType.value || undefined,
        sort: selectedSort.value,
    }, {
        preserveScroll: true,
        preserveState: true,
        replace: true,
        onFinish: () => { searching.value = false },
    })
}

function clearSearch() {
    search.value = ''
    applyFilters()
}

const difficultyOptions = [
    { value: '', label: 'Dificultad' },
    { value: 'beginner', label: 'Principiante' },
    { value: 'intermediate', label: 'Intermedio' },
    { value: 'advanced', label: 'Avanzado' },
]
const sortOptions = [
    { value: 'top', label: 'Más valoradas' },
    { value: 'new', label: 'Más recientes' },
    { value: 'trending', label: 'Trending' },
]

const itemListJsonLd = computed(() => JSON.stringify({
    '@context': 'https://schema.org',
    '@type': 'ItemList',
    'name': 'Explorar Skills de IA para profesionales',
    'description': 'Biblioteca de workflows, prompts y técnicas de IA para profesionales',
    'url': route('skills.index'),
    'itemListElement': (props.skills?.data ?? []).map((skill, i) => ({
        '@type': 'ListItem',
        'position': i + 1,
        'name': skill.title,
        'url': route('skills.show', { skill: skill.slug }),
    })),
}))
</script>

<template>
    <Head>
        <title>Explorar Skills de IA para profesionales — ia-skills</title>
        <meta name="description" content="Explora la biblioteca de workflows, prompts y técnicas de IA para profesionales. Filtrados por profesión, herramienta y dificultad." />
        <link rel="canonical" :href="route('skills.index')" />
        <meta property="og:type" content="website" />
        <meta property="og:url" :content="route('skills.index')" />
        <meta property="og:title" content="Explorar Skills de IA para profesionales — ia-skills" />
        <meta property="og:description" content="Explora la biblioteca de workflows, prompts y técnicas de IA para profesionales. Filtrados por profesión, herramienta y dificultad." />
        <meta property="og:image" content="/og-default.svg" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:image" content="/og-default.svg" />
    </Head>
    <component :is="'script'" type="application/ld+json" :innerHTML="itemListJsonLd" />

    <AppLayout>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-10">
            <!-- Header + search -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100 mb-4">Explorar skills de IA</h1>
                <div class="relative">
                    <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <input
                        v-model="search"
                        type="text"
                        placeholder="Buscar skills..."
                        class="w-full pl-10 pr-10 py-2.5 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 placeholder-gray-400 dark:placeholder-gray-500 focus:border-brand-400 focus:ring-2 focus:ring-brand-100 dark:focus:ring-brand-900/30 outline-none text-sm transition-colors"
                    />
                    <div class="absolute right-3 top-1/2 -translate-y-1/2 flex items-center">
                        <svg v-if="searching" class="animate-spin w-4 h-4 text-brand-400" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/>
                        </svg>
                        <button v-else-if="search" @click="clearSearch" type="button" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar filters -->
                <aside class="lg:w-52 shrink-0">
                    <div class="space-y-6 sticky top-20">
                        <!-- Sort -->
                        <div>
                            <p class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider mb-2">Ordenar</p>
                            <div class="flex flex-col gap-1">
                                <button
                                    v-for="opt in sortOptions"
                                    :key="opt.value"
                                    @click="selectedSort = opt.value; applyFilters()"
                                    :class="[
                                        'px-3 py-1.5 rounded-lg text-sm text-left transition-colors',
                                        selectedSort === opt.value ? 'bg-brand-50 dark:bg-brand-900/40 text-brand-700 dark:text-brand-300 font-medium' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700/50'
                                    ]"
                                >{{ opt.label }}</button>
                            </div>
                        </div>

                        <!-- Type -->
                        <div>
                            <p class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider mb-2">Tipo</p>
                            <div class="flex flex-col gap-1">
                                <button
                                    @click="selectedType = ''; applyFilters()"
                                    :class="['px-3 py-1.5 rounded-lg text-sm text-left transition-colors', !selectedType ? 'bg-brand-50 dark:bg-brand-900/40 text-brand-700 dark:text-brand-300 font-medium' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700/50']"
                                >Todos</button>
                                <button
                                    @click="selectedType = 'prompt'; applyFilters()"
                                    :class="['px-3 py-1.5 rounded-lg text-sm text-left transition-colors', selectedType === 'prompt' ? 'bg-brand-50 dark:bg-brand-900/40 text-brand-700 dark:text-brand-300 font-medium' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700/50']"
                                >Prompt / Workflow</button>
                                <button
                                    @click="selectedType = 'claude_skill'; applyFilters()"
                                    :class="['px-3 py-1.5 rounded-lg text-sm text-left transition-colors', selectedType === 'claude_skill' ? 'bg-violet-50 dark:bg-violet-900/40 text-violet-700 dark:text-violet-300 font-medium' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700/50']"
                                >🟣 Claude Skill</button>
                                <button
                                    @click="selectedType = 'claude_plugin'; applyFilters()"
                                    :class="['px-3 py-1.5 rounded-lg text-sm text-left transition-colors', selectedType === 'claude_plugin' ? 'bg-amber-50 dark:bg-amber-900/40 text-amber-700 dark:text-amber-300 font-medium' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700/50']"
                                >🟡 Claude Plugin</button>
                            </div>
                        </div>

                        <!-- Profession -->
                        <div>
                            <p class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider mb-2">Profesión</p>
                            <select
                                v-model="selectedProfession"
                                @change="applyFilters()"
                                class="w-full rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 text-sm px-3 py-2 outline-none focus:border-brand-400 transition-colors"
                            >
                                <option value="">Todas</option>
                                <option v-for="p in professions" :key="p.id" :value="p.slug">{{ p.name }}</option>
                            </select>
                        </div>

                        <!-- Tool -->
                        <div>
                            <p class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider mb-2">Herramienta</p>
                            <select
                                v-model="selectedTool"
                                @change="applyFilters()"
                                class="w-full rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 text-sm px-3 py-2 outline-none focus:border-brand-400 transition-colors"
                            >
                                <option value="">Todas</option>
                                <option v-for="t in tools" :key="t" :value="t">{{ t }}</option>
                            </select>
                        </div>

                        <!-- Difficulty -->
                        <div>
                            <p class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider mb-2">Dificultad</p>
                            <div class="flex flex-col gap-1">
                                <button
                                    v-for="opt in difficultyOptions"
                                    :key="opt.value"
                                    @click="selectedDifficulty = opt.value; applyFilters()"
                                    :class="['px-3 py-1.5 rounded-lg text-sm text-left transition-colors', selectedDifficulty === opt.value ? 'bg-brand-50 dark:bg-brand-900/40 text-brand-700 dark:text-brand-300 font-medium' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700/50']"
                                >{{ opt.label }}</button>
                            </div>
                        </div>
                    </div>
                </aside>

                <!-- Results -->
                <div class="flex-1 min-w-0">
                    <div class="flex items-center justify-between mb-4">
                        <p class="text-sm text-gray-500 dark:text-gray-400 dark:text-gray-500">{{ skills.total }} skills encontradas</p>
                        <Link :href="route('skills.create')" class="btn-primary text-xs">+ Compartir skill</Link>
                    </div>

                    <div v-if="skills.data.length" class="flex flex-col gap-3">
                        <SkillCard v-for="skill in skills.data" :key="skill.id" :skill="skill" />
                    </div>
                    <div v-else class="text-center py-20 text-gray-400 dark:text-gray-500">
                        <p class="text-lg">No hay skills con esos filtros.</p>
                        <button @click="search=''; selectedProfession=''; selectedTool=''; selectedDifficulty=''; selectedType=''; applyFilters()" class="mt-4 text-sm text-brand-600 hover:underline">
                            Limpiar filtros
                        </button>
                    </div>

                    <!-- Pagination -->
                    <div v-if="skills.last_page > 1" class="mt-8 flex justify-center gap-2 flex-wrap">
                        <Link
                            v-for="link in skills.links"
                            :key="link.label"
                            :href="link.url || '#'"
                            :class="[
                                'px-3 py-1.5 rounded-lg text-sm border transition-colors',
                                link.active ? 'bg-brand-600 text-white border-brand-600' : 'border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-400 dark:text-gray-500 hover:border-brand-300',
                                !link.url ? 'opacity-40 pointer-events-none' : ''
                            ]"
                            v-html="link.label"
                        />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
