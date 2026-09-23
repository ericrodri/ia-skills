<script setup>
import { Head, Link, router } from '@inertiajs/vue3'
import { ref, watch } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import SkillCard from '@/Components/SkillCard.vue'

// El copy editorial y las FAQ llegan del servidor (App\Support\ProfessionContent)
// para que el FAQPage de datos estructurados se emita en el HTML inicial.
const props = defineProps({
    profession: Object,
    skills: Object,
    content: { type: Object, default: null },
    guides: { type: Array, default: () => [] },
    filters: { type: Object, default: () => ({}) },
    // Landings profesión × tarea con contenido suficiente (App\Support\ProfessionTasks)
    tasks: { type: Array, default: () => [] },
    collections: { type: Array, default: () => [] },
})

const search = ref(props.filters?.q || '')
const searching = ref(false)

// Mismo comportamiento que el buscador de /skills: 300 ms de margen para no
// disparar una petición por tecla.
let searchTimeout = null
watch(search, () => {
    clearTimeout(searchTimeout)
    searching.value = true
    searchTimeout = setTimeout(() => applySearch(), 300)
})

function applySearch() {
    router.get(route('professions.show', props.profession.slug), {
        q: search.value || undefined,
    }, {
        preserveScroll: true,
        preserveState: true,
        replace: true,
        onFinish: () => { searching.value = false },
    })
}

function clearSearch() {
    search.value = ''
}
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
            <!-- Tareas y colecciones de la profesión -->
            <div v-if="tasks.length || collections.length" class="mb-8 space-y-4">
                <div v-if="tasks.length" class="flex flex-wrap items-center gap-2">
                    <span class="text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-gray-500 mr-1">Por tarea</span>
                    <Link
                        v-for="task in tasks"
                        :key="task.slug"
                        :href="task.url"
                        class="px-3 py-1.5 rounded-lg text-sm border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-300 hover:border-brand-300 hover:text-brand-700 dark:hover:text-brand-400 transition-colors"
                    >{{ task.name }} <span class="text-xs text-gray-400">{{ task.count }}</span></Link>
                </div>
                <Link
                    v-for="c in collections"
                    :key="c.url"
                    :href="c.url"
                    class="flex items-center justify-between gap-4 rounded-xl border border-brand-100 dark:border-brand-800/50 bg-brand-50/60 dark:bg-brand-900/10 px-4 py-3 hover:border-brand-300 transition-colors"
                >
                    <span>
                        <span class="text-xs font-semibold uppercase tracking-wide text-brand-600 dark:text-brand-400">Colección</span>
                        <span class="block text-sm font-medium text-gray-900 dark:text-gray-100">{{ c.title }}</span>
                    </span>
                    <span class="text-brand-600 dark:text-brand-400" aria-hidden="true">→</span>
                </Link>
            </div>

            <!-- Buscador dentro de la profesión -->
            <div class="relative mb-6">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                <input
                    v-model="search"
                    type="search"
                    :placeholder="`Buscar en skills de ${profession.name}...`"
                    :aria-label="`Buscar en skills de ${profession.name}`"
                    class="w-full pl-10 pr-10 py-2.5 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 placeholder-gray-400 dark:placeholder-gray-500 focus:border-brand-400 focus:ring-2 focus:ring-brand-100 dark:focus:ring-brand-900/30 outline-none text-sm transition-colors"
                />
                <div class="absolute right-3 top-1/2 -translate-y-1/2 flex items-center">
                    <svg v-if="searching" class="animate-spin w-4 h-4 text-brand-400" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/>
                    </svg>
                    <button v-else-if="search" @click="clearSearch" type="button" aria-label="Limpiar búsqueda" class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>

            <p v-if="filters?.q" class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                {{ skills.total }} {{ skills.total === 1 ? 'resultado' : 'resultados' }} para «{{ filters.q }}»
            </p>

            <div v-if="skills.data.length" class="flex flex-col gap-3">
                <SkillCard
                    v-for="skill in skills.data"
                    :key="skill.id"
                    :skill="skill"
                />
            </div>

            <!-- Sin resultados de búsqueda: la profesión sí tiene skills -->
            <div v-else-if="filters?.q" class="text-center py-16 text-gray-400 dark:text-gray-500">
                <p class="text-lg font-medium">Ninguna skill de {{ profession.name }} coincide con «{{ filters.q }}».</p>
                <div class="mt-4 flex flex-wrap items-center justify-center gap-4 text-sm">
                    <button @click="clearSearch" class="text-brand-600 dark:text-brand-400 hover:underline">
                        Ver todas las skills de {{ profession.name }}
                    </button>
                    <Link :href="route('skills.index', { q: filters.q })" class="text-brand-600 dark:text-brand-400 hover:underline">
                        Buscar «{{ filters.q }}» en todas las profesiones →
                    </Link>
                </div>
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
