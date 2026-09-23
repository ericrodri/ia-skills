<script setup>
import { Head, Link } from '@inertiajs/vue3'
import { ref } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import SkillCard from '@/Components/SkillCard.vue'

const props = defineProps({
    collection: { type: Object, required: true },
    skills: { type: Array, default: () => [] },
    installScript: { type: String, default: '' },
    // Instrucción para pegar en Claude Code (SkillMarkdown::installPrompt)
    installPrompt: { type: String, default: '' },
    others: { type: Array, default: () => [] },
})

const copied = ref('')

function copy(kind) {
    const text = {
        claude: props.installPrompt,
        install: props.installScript,
        prompts: props.skills.map((s, i) => `## ${i + 1}. ${s.title}\n\n${s.prompt_content}`).join('\n\n---\n\n'),
    }[kind]

    navigator.clipboard.writeText(text)
    copied.value = kind
    setTimeout(() => copied.value = '', 2000)
}
</script>

<template>
    <Head>
        <title>{{ collection.title }} — ia-skills</title>
    </Head>

    <AppLayout>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 py-10">
            <nav class="flex items-center gap-2 text-sm text-gray-400 dark:text-gray-500 mb-6" aria-label="Migas de pan">
                <Link :href="route('collections.index')" class="hover:text-brand-600">Colecciones</Link>
                <span>/</span>
                <span class="text-gray-600 dark:text-gray-400 truncate">{{ collection.title }}</span>
            </nav>

            <p v-if="collection.profession" class="text-xs font-semibold uppercase tracking-wide text-brand-600 dark:text-brand-400">
                <Link :href="route('professions.show', collection.profession.slug)" class="hover:underline">{{ collection.profession.name }}</Link>
                · {{ skills.length }} skills
            </p>
            <h1 class="mt-2 text-3xl font-bold text-gray-900 dark:text-gray-100">{{ collection.title }}</h1>
            <p class="mt-3 text-lg text-gray-600 dark:text-gray-400">{{ collection.description }}</p>
            <p class="mt-4 text-gray-600 dark:text-gray-400 leading-relaxed">{{ collection.intro }}</p>

            <!-- Acciones del pack -->
            <div class="mt-6 rounded-xl border border-violet-200 dark:border-violet-800 bg-violet-50/60 dark:bg-violet-900/10 p-4">
                <div class="flex flex-wrap items-center justify-between gap-3">
                    <div>
                        <p class="text-sm font-semibold text-violet-900 dark:text-violet-200">Instala el pack completo en Claude Code</p>
                        <p class="text-xs text-violet-700 dark:text-violet-400">Copia la instrucción, pégala en Claude Code y él instala las {{ skills.length }} skills por ti.</p>
                    </div>
                    <div class="flex gap-2">
                        <button @click="copy('claude')" class="px-3 py-1.5 rounded-lg text-xs font-semibold bg-violet-600 hover:bg-violet-700 text-white transition-colors">
                            {{ copied === 'claude' ? 'Copiado' : 'Pídeselo a Claude Code' }}
                        </button>
                        <button @click="copy('prompts')" class="px-3 py-1.5 rounded-lg text-xs font-semibold border border-violet-300 dark:border-violet-700 text-violet-700 dark:text-violet-300 hover:bg-violet-100 dark:hover:bg-violet-900/40 transition-colors">
                            {{ copied === 'prompts' ? 'Copiado' : 'Copiar todos los prompts' }}
                        </button>
                    </div>
                </div>
                <details class="mt-3 group">
                    <summary class="cursor-pointer list-none text-xs text-violet-700 dark:text-violet-400 hover:underline">Prefiero hacerlo desde la terminal</summary>
                    <div class="mt-2 flex items-start gap-2">
                        <pre class="flex-1 min-w-0 max-h-40 overflow-auto bg-gray-900 text-gray-100 rounded-lg px-3 py-2 text-[11px] font-mono whitespace-pre">{{ installScript }}</pre>
                        <button @click="copy('install')" class="shrink-0 px-3 py-1.5 rounded-lg text-xs font-medium border border-violet-300 dark:border-violet-700 text-violet-700 dark:text-violet-300 hover:bg-violet-100 dark:hover:bg-violet-900/40 transition-colors">
                            {{ copied === 'install' ? 'Copiado' : 'Copiar' }}
                        </button>
                    </div>
                </details>
            </div>

            <ol class="mt-10 flex flex-col gap-4">
                <li v-for="(skill, i) in skills" :key="skill.id" class="flex items-start gap-3">
                    <span class="w-7 pt-4 text-right text-sm font-bold text-brand-600 dark:text-brand-400 tabular-nums">{{ i + 1 }}</span>
                    <div class="flex-1 min-w-0"><SkillCard :skill="skill" /></div>
                </li>
            </ol>

            <section v-if="others.length" class="mt-14">
                <h2 class="font-semibold text-gray-900 dark:text-gray-100 mb-4">Otras colecciones</h2>
                <ul class="grid gap-3 sm:grid-cols-3">
                    <li v-for="c in others" :key="c.slug">
                        <Link :href="c.url" class="block h-full rounded-xl border border-gray-200 dark:border-gray-700 p-4 hover:border-brand-300 dark:hover:border-brand-500 transition-colors">
                            <p class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ c.title }}</p>
                            <p class="mt-1 text-xs text-gray-400 dark:text-gray-500">{{ c.count }} skills</p>
                        </Link>
                    </li>
                </ul>
            </section>
        </div>
    </AppLayout>
</template>
