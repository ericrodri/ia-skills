<script setup>
import { Head, Link, router, usePage } from '@inertiajs/vue3'
import { ref } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import axios from 'axios'

import { computed } from 'vue'

const props = defineProps({
    skill: Object,
    userVote: { type: Number, default: null },
    userSaved: { type: Boolean, default: false },
})

const jsonLd = computed(() => JSON.stringify({
    '@context': 'https://schema.org',
    '@type': 'HowTo',
    'name': props.skill.title,
    'description': props.skill.description,
    'tool': [{ '@type': 'HowToTool', 'name': props.skill.tool_name }],
    ...(props.skill.author ? {
        'author': { '@type': 'Person', 'name': props.skill.author.name }
    } : {}),
    'datePublished': props.skill.created_at,
    'dateModified': props.skill.updated_at,
}))

const page = usePage()
const auth = page.props.auth

const voteScore = ref(props.skill.vote_score)
const currentVote = ref(props.userVote)
const saved = ref(props.userSaved)
const savesCount = ref(props.skill.saves_count)
const commentContent = ref('')
const copied = ref(false)
const opencodeCopied = ref(false)
const showAIMenu = ref(false)
const aiToast = ref('')

const difficultyLabel = { beginner: 'Principiante', intermediate: 'Intermedio', advanced: 'Avanzado' }
const difficultyClass = { beginner: 'badge-difficulty-beginner', intermediate: 'badge-difficulty-intermediate', advanced: 'badge-difficulty-advanced' }

const resourceTypeLabel = { claude_skill: 'Skill', claude_plugin: 'Plugin' }
const resourceTypeClass = {
    claude_skill:  'bg-violet-50 dark:bg-violet-900/30 text-violet-700 dark:text-violet-300 border border-violet-200 dark:border-violet-700',
    claude_plugin: 'bg-amber-50 dark:bg-amber-900/30 text-amber-700 dark:text-amber-300 border border-amber-200 dark:border-amber-700',
}
const resourceTypeInfo = {
    claude_skill:  'Un Skill es un archivo Markdown (SKILL.md) que enseña a Claude Code un comportamiento específico. Se instala clonando un repositorio en ~/.claude/skills/ y se activa con /nombre-del-skill.',
    claude_plugin: 'Un Plugin es una extensión instalada mediante el sistema oficial de plugins de Claude Code (claude plugin install). Puede incluir hooks, scripts y configuraciones más complejas que un Skill.',
}

const showTypeInfo = ref(false)

async function vote(value) {
    if (!auth?.user) { router.visit(route('login')); return }
    const { data } = await axios.post(route('skills.vote', props.skill.slug), { value })
    voteScore.value = data.vote_score
    currentVote.value = data.user_vote
}

async function toggleSave() {
    if (!auth?.user) { router.visit(route('login')); return }
    const { data } = await axios.post(route('skills.save', props.skill.slug))
    saved.value = data.saved
    savesCount.value = data.saves_count
}

function copyPrompt() {
    navigator.clipboard.writeText(props.skill.prompt_content)
    copied.value = true
    setTimeout(() => copied.value = false, 2000)
}

function openInClaude() {
    const fullPrompt = `Genérame la skill "${props.skill.title}":\n\n${props.skill.prompt_content}`
    const encoded = encodeURIComponent(fullPrompt)
    const desktopUrl = 'claude://claude.ai/new?q=' + encoded
    const webUrl = 'https://claude.ai/new?q=' + encoded

    window.location.href = desktopUrl

    const fallback = setTimeout(() => {
        window.open(webUrl, '_blank', 'noopener,noreferrer')
    }, 2000)

    window.addEventListener('visibilitychange', () => {
        if (document.visibilityState === 'hidden') clearTimeout(fallback)
    }, { once: true })
}

function openInTool(toolId) {
    showAIMenu.value = false
    const fullPrompt = `Genérame la skill "${props.skill.title}":\n\n${props.skill.prompt_content}`
    const encoded = encodeURIComponent(fullPrompt)

    // Herramientas que aceptan ?q= para pre-cargar el prompt automáticamente
    const withParam = {
        chatgpt:    `https://chatgpt.com/?q=${encoded}`,
        gemini:     `https://gemini.google.com/app?q=${encoded}`,
        copilot:    `https://copilot.microsoft.com/?q=${encoded}`,
        perplexity: `https://www.perplexity.ai/search?q=${encoded}`,
    }
    // Fallback si la URL es demasiado larga
    const fallback = {
        chatgpt:    'https://chatgpt.com/',
        gemini:     'https://gemini.google.com/app',
        copilot:    'https://copilot.microsoft.com/',
        perplexity: 'https://www.perplexity.ai/',
    }
    const names = {
        chatgpt: 'ChatGPT', gemini: 'Gemini', copilot: 'Copilot', perplexity: 'Perplexity',
    }

    // Los navegadores y servidores suelen tener límite ~8000 chars de URL.
    // Usamos 4000 como umbral conservador para garantizar compatibilidad.
    const url = withParam[toolId]
    if (url.length <= 4000) {
        // El prompt cabe en la URL → se carga automáticamente al abrir
        window.open(url, '_blank', 'noopener,noreferrer')
        aiToast.value = `✓ Abriendo ${names[toolId]} con el prompt cargado`
    } else {
        // Prompt demasiado largo → copiamos y abrimos sin param
        navigator.clipboard.writeText(fullPrompt)
        window.open(fallback[toolId], '_blank', 'noopener,noreferrer')
        aiToast.value = `Prompt copiado — pégalo en ${names[toolId]} (Ctrl+V)`
    }
    setTimeout(() => aiToast.value = '', 4000)
}

function openInOpenCode() {
    const fullPrompt = `Genérame la skill "${props.skill.title}":\n\n${props.skill.prompt_content}`
    const encoded = encodeURIComponent(fullPrompt)

    // Use append deep link - inserts text into current session prompt input
    window.open(`opencode://append?text=${encoded}`, '_blank')
}

function submitComment() {
    if (!commentContent.value.trim()) return
    router.post(route('comments.store', props.skill.slug), { content: commentContent.value }, {
        preserveScroll: true,
        onSuccess: () => { commentContent.value = '' }
    })
}
</script>

<template>
    <Head>
        <title>{{ skill.title }} — ia-skills</title>
        <meta name="description" :content="skill.description" />
        <link rel="canonical" :href="route('skills.show', { skill: skill.slug })" />
        <meta property="og:type" content="article" />
        <meta property="og:url" :content="route('skills.show', { skill: skill.slug })" />
        <meta property="og:title" :content="`${skill.title} — ia-skills`" />
        <meta property="og:description" :content="skill.description" />
        <meta property="og:image" content="/og-default.svg" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" :content="`${skill.title} — ia-skills`" />
        <meta name="twitter:description" :content="skill.description" />
        <meta name="twitter:image" content="/og-default.svg" />
    </Head>
    <component :is="'script'" type="application/ld+json" v-text="jsonLd" />
        <component :is="'script'" type="application/ld+json" :innerHTML='JSON.stringify({
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [
                { "@type": "ListItem", "position": 1, "name": "Skills", "item": route("skills.index") },
                { "@type": "ListItem", "position": 2, "name": skill.profession?.name, "item": route("professions.show", { profession: skill.profession?.slug }) },
                { "@type": "ListItem", "position": 3, "name": skill.title, "item": route("skills.show", { skill: skill.slug }) }
            ]
        })' />

    <AppLayout>
        <!-- Toast notificación otras IAs -->
        <Transition enter-active-class="transition ease-out duration-200" enter-from-class="opacity-0 translate-y-2" enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150" leave-from-class="opacity-100" leave-to-class="opacity-0">
            <div v-if="aiToast" class="fixed bottom-6 left-1/2 -translate-x-1/2 z-50 flex items-center gap-2 px-4 py-3 bg-gray-900 dark:bg-gray-100 text-white dark:text-gray-900 text-sm font-medium rounded-xl shadow-xl">
                <svg class="w-4 h-4 text-green-400 dark:text-green-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                {{ aiToast }}
            </div>
        </Transition>

        <!-- Banner de estado para el autor / admin -->
        <div v-if="skill.status === 'draft'" class="bg-amber-50 dark:bg-amber-900/20 border-b border-amber-200 dark:border-amber-700">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 py-3 flex items-center gap-3 text-sm">
                <span class="text-amber-600 dark:text-amber-400 text-lg">⏳</span>
                <div>
                    <span class="font-semibold text-amber-800 dark:text-amber-300">Pendiente de revisión.</span>
                    <span class="text-amber-700 dark:text-amber-400 ml-1">Solo tú puedes ver esta skill hasta que sea aprobada por el equipo.</span>
                </div>
            </div>
        </div>
        <div v-if="skill.status === 'rejected'" class="bg-red-50 dark:bg-red-900/20 border-b border-red-200 dark:border-red-700">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 py-3 text-sm">
                <div class="flex items-center gap-3">
                    <span class="text-red-500 text-lg">✕</span>
                    <div>
                        <span class="font-semibold text-red-800 dark:text-red-300">Skill rechazada.</span>
                        <span class="text-red-700 dark:text-red-400 ml-1">No cumple nuestras normas de publicación.</span>
                    </div>
                </div>
                <div v-if="skill.rejection_reason" class="mt-2 ml-8 p-3 bg-red-100 dark:bg-red-900/30 rounded-lg text-red-800 dark:text-red-300">
                    <span class="font-medium">Motivo: </span>{{ skill.rejection_reason }}
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 py-10">
            <!-- Breadcrumb -->
            <div class="flex items-center gap-2 text-sm text-gray-400 dark:text-gray-500 mb-6">
                <Link :href="route('skills.index')" class="hover:text-brand-600 transition-colors">Skills</Link>
                <span>/</span>
                <Link :href="route('professions.show', skill.profession.slug)" class="hover:text-brand-600 transition-colors">{{ skill.profession.name }}</Link>
                <span>/</span>
                <span class="text-gray-600 dark:text-gray-400 dark:text-gray-500 truncate">{{ skill.title }}</span>
            </div>

            <div class="lg:flex gap-10">
                <!-- Main content -->
                <article class="flex-1 min-w-0">
                    <!-- Badges -->
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="badge-tool">{{ skill.tool_name }}</span>

                        <!-- Plugin / Skill badge con tooltip explicativo -->
                        <span
                            v-if="skill.resource_type && skill.resource_type !== 'prompt'"
                            class="relative inline-flex items-center gap-1 text-xs font-medium px-2 py-0.5 rounded-md cursor-pointer"
                            :class="resourceTypeClass[skill.resource_type]"
                            @click="showTypeInfo = !showTypeInfo"
                        >
                            {{ resourceTypeLabel[skill.resource_type] }}
                            <svg class="w-3 h-3 opacity-60" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </span>

                        <span :class="difficultyClass[skill.difficulty]" class="badge">{{ difficultyLabel[skill.difficulty] }}</span>
                        <span v-if="skill.estimated_minutes" class="badge bg-gray-50 dark:bg-gray-900 text-gray-500 dark:text-gray-400 dark:text-gray-500">⏱ {{ skill.estimated_minutes }} min</span>
                    </div>

                    <!-- Info box: diferencia Plugin vs Skill -->
                    <Transition enter-active-class="transition ease-out duration-150" enter-from-class="opacity-0 -translate-y-1" enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-100" leave-from-class="opacity-100" leave-to-class="opacity-0">
                        <div
                            v-if="showTypeInfo && skill.resource_type !== 'prompt'"
                            class="mb-4 p-3 rounded-xl text-xs leading-relaxed"
                            :class="skill.resource_type === 'claude_plugin'
                                ? 'bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-700 text-amber-800 dark:text-amber-300'
                                : 'bg-violet-50 dark:bg-violet-900/20 border border-violet-200 dark:border-violet-700 text-violet-800 dark:text-violet-300'"
                        >
                            <p class="font-semibold mb-1">¿Qué es un {{ resourceTypeLabel[skill.resource_type] }} de Claude Code?</p>
                            <p>{{ resourceTypeInfo[skill.resource_type] }}</p>
                            <div class="mt-2 pt-2 border-t border-current border-opacity-20 flex gap-4">
                                <span><strong>Skill</strong> — archivo SKILL.md · se instala con git clone · se activa con /nombre</span>
                                <span class="text-current opacity-40">|</span>
                                <span><strong>Plugin</strong> — extensión oficial · se instala con claude plugin install · activo en todo Claude Code</span>
                            </div>
                        </div>
                    </Transition>

                    <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-gray-100 leading-tight">{{ skill.title }}</h1>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 dark:text-gray-500 leading-relaxed">{{ skill.description }}</p>

                    <!-- Use case -->
                    <div v-if="skill.use_case" class="mt-5 p-4 bg-brand-50 rounded-xl border border-brand-100">
                        <p class="text-xs font-semibold text-brand-700 uppercase tracking-wider mb-1">Caso de uso</p>
                        <p class="text-sm text-brand-800">{{ skill.use_case }}</p>
                    </div>

                    <!-- Instalación rápida para Plugins y Skills de Claude Code -->
                    <div v-if="skill.resource_type === 'claude_plugin'" class="mt-6 p-4 rounded-xl bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-700">
                        <p class="text-xs font-semibold text-amber-700 dark:text-amber-400 uppercase tracking-wider mb-2">Instalación — Plugin de Claude Code</p>
                        <pre class="text-xs text-amber-900 dark:text-amber-200 font-mono whitespace-pre-wrap">claude plugin marketplace add {{ skill.slug.split('-').pop() }}
claude plugin install {{ skill.slug.split('-').pop() }}@marketplace</pre>
                        <p class="mt-2 text-xs text-amber-700 dark:text-amber-400">Consulta el workflow completo más abajo para los comandos exactos de este plugin.</p>
                    </div>

                    <div v-else-if="skill.resource_type === 'claude_skill'" class="mt-6 p-4 rounded-xl bg-violet-50 dark:bg-violet-900/20 border border-violet-200 dark:border-violet-700">
                        <p class="text-xs font-semibold text-violet-700 dark:text-violet-400 uppercase tracking-wider mb-2">Instalación — Skill de Claude Code</p>
                        <pre class="text-xs text-violet-900 dark:text-violet-200 font-mono whitespace-pre-wrap">mkdir -p ~/.claude/skills
git clone &lt;repo&gt; ~/.claude/skills/nombre-del-skill</pre>
                        <p class="mt-2 text-xs text-violet-700 dark:text-violet-400">El repo exacto y los pasos detallados están en el workflow de abajo.</p>
                    </div>

                    <!-- Prompt -->
                    <div class="mt-8">
                        <div class="flex items-center justify-between mb-3">
                            <h2 class="font-semibold text-gray-900 dark:text-gray-100">Prompt / Workflow</h2>
                            <div class="flex items-center gap-2">

                                <!-- Split button: Abrir en Claude + dropdown otras IAs -->
                                <div class="relative flex">
                                    <!-- Botón principal: Claude -->
                                    <button
                                        @click="openInClaude"
                                        class="flex items-center gap-1.5 px-3 py-1.5 rounded-l-lg bg-[#D97757] hover:bg-[#c46440] text-white text-xs font-semibold transition-colors"
                                        title="Abrir en la app de Claude (o en la web si no está instalada)"
                                    >
                                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm0 3c1.657 0 3 1.343 3 3s-1.343 3-3 3-3-1.343-3-3 1.343-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
                                        Abrir en Claude
                                    </button>
                                    <!-- Dropdown trigger -->
                                    <button
                                        @click.stop="showAIMenu = !showAIMenu"
                                        class="flex items-center px-1.5 py-1.5 rounded-r-lg bg-[#c46440] hover:bg-[#b05530] text-white border-l border-[#b05530] transition-colors"
                                        title="Abrir en otra IA"
                                    >
                                        <svg class="w-3 h-3 transition-transform" :class="showAIMenu ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                                    </button>

                                    <!-- Dropdown menu -->
                                    <div
                                        v-if="showAIMenu"
                                        v-click-outside="() => showAIMenu = false"
                                        class="absolute top-full right-0 mt-1.5 w-48 bg-white dark:bg-gray-900 rounded-xl border border-gray-200 dark:border-gray-700 shadow-lg z-20 py-1 overflow-hidden"
                                    >
                                        <p class="px-3 py-1.5 text-[10px] font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider">Otras IAs</p>

                                        <button @click="openInTool('chatgpt')" class="w-full flex items-center gap-2.5 px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors text-left">
                                            <span class="text-base">🟢</span>
                                            <span class="font-medium">ChatGPT</span>
                                            <span class="ml-auto text-[10px] text-gray-400">copia prompt</span>
                                        </button>
                                        <button @click="openInTool('gemini')" class="w-full flex items-center gap-2.5 px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors text-left">
                                            <span class="text-base">🔵</span>
                                            <span class="font-medium">Gemini</span>
                                            <span class="ml-auto text-[10px] text-gray-400">copia prompt</span>
                                        </button>
                                        <button @click="openInTool('copilot')" class="w-full flex items-center gap-2.5 px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors text-left">
                                            <span class="text-base">🟣</span>
                                            <span class="font-medium">Copilot</span>
                                            <span class="ml-auto text-[10px] text-gray-400">copia prompt</span>
                                        </button>
                                        <button @click="openInTool('perplexity')" class="w-full flex items-center gap-2.5 px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors text-left">
                                            <span class="text-base">⚫</span>
                                            <span class="font-medium">Perplexity</span>
                                            <span class="ml-auto text-[10px] text-gray-400">copia prompt</span>
                                        </button>

                                        <div class="border-t border-gray-100 dark:border-gray-800 mt-1 pt-1">
                                            <button @click="openInOpenCode; showAIMenu = false" class="w-full flex items-center gap-2.5 px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors text-left">
                                                <span class="text-base">🟪</span>
                                                <span class="font-medium">OpenCode</span>
                                                <span class="ml-auto text-[10px] text-gray-400">deep link</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Copiar -->
                                <button @click="copyPrompt" class="flex items-center gap-1.5 text-xs text-gray-500 dark:text-gray-400 hover:text-brand-600 dark:hover:text-brand-400 transition-colors">
                                    <svg v-if="!copied" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                                    <svg v-else class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    {{ copied ? 'Copiado' : 'Copiar' }}
                                </button>
                            </div>
                        </div>
                        <pre class="bg-gray-900 text-gray-100 rounded-xl p-5 text-sm leading-relaxed overflow-x-auto whitespace-pre-wrap font-mono">{{ skill.prompt_content }}</pre>
                    </div>

                    <!-- Author -->
                    <div class="mt-8 flex items-center gap-3 pb-8 border-b border-gray-100 dark:border-gray-800">
                        <div class="w-9 h-9 rounded-full bg-brand-100 text-brand-700 font-semibold flex items-center justify-center text-sm shrink-0">
                            {{ skill.author.name.charAt(0).toUpperCase() }}
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                {{ skill.author.name }}
                                <span v-if="skill.author.is_verified_expert" class="ml-1 text-brand-500 text-xs" title="Experto verificado">✓ Experto</span>
                            </p>
                            <p class="text-xs text-gray-400 dark:text-gray-500">{{ skill.author.reputation }} puntos de reputación</p>
                        </div>
                    </div>

                    <!-- Comments -->
                    <section class="mt-8">
                        <h2 class="font-semibold text-gray-900 dark:text-gray-100 mb-5">{{ skill.comments.length }} comentarios</h2>

                        <!-- Add comment -->
                        <div v-if="auth?.user" class="mb-8">
                            <textarea
                                v-model="commentContent"
                                placeholder="Comparte tu experiencia con esta skill..."
                                rows="3"
                                class="w-full rounded-xl border border-gray-200 dark:border-gray-700 px-4 py-3 text-sm focus:border-brand-400 focus:ring-2 focus:ring-brand-100 outline-none resize-none transition-colors"
                            />
                            <button @click="submitComment" class="mt-2 btn-primary text-sm">Publicar comentario</button>
                        </div>
                        <div v-else class="mb-8 p-4 bg-gray-50 dark:bg-gray-900 rounded-xl text-sm text-gray-500 dark:text-gray-400 dark:text-gray-500">
                            <Link :href="route('login')" class="text-brand-600 font-medium hover:underline">Inicia sesión</Link> para comentar.
                        </div>

                        <div class="space-y-5">
                            <div v-for="comment in skill.comments" :key="comment.id" class="flex gap-3">
                                <div class="w-8 h-8 rounded-full bg-gray-100 dark:bg-gray-900 text-gray-600 dark:text-gray-400 dark:text-gray-500 font-semibold flex items-center justify-center text-xs shrink-0 mt-0.5">
                                    {{ comment.user.name.charAt(0).toUpperCase() }}
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 mb-1">
                                        <span class="text-sm font-medium text-gray-900 dark:text-gray-100">{{ comment.user.name }}</span>
                                        <span class="text-xs text-gray-400 dark:text-gray-500">{{ new Date(comment.created_at).toLocaleDateString('es-ES') }}</span>
                                    </div>
                                    <p class="text-sm text-gray-700 dark:text-gray-300 leading-relaxed">{{ comment.content }}</p>
                                    <!-- Replies -->
                                    <div v-if="comment.replies?.length" class="mt-3 pl-4 border-l-2 border-gray-100 dark:border-gray-800 space-y-3">
                                        <div v-for="reply in comment.replies" :key="reply.id" class="flex gap-2">
                                            <div class="w-6 h-6 rounded-full bg-gray-100 dark:bg-gray-900 text-gray-600 dark:text-gray-400 dark:text-gray-500 font-semibold flex items-center justify-center text-xs shrink-0">
                                                {{ reply.user.name.charAt(0).toUpperCase() }}
                                            </div>
                                            <div>
                                                <span class="text-xs font-medium text-gray-900 dark:text-gray-100">{{ reply.user.name }}</span>
                                                <p class="text-xs text-gray-700 dark:text-gray-300 mt-0.5">{{ reply.content }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>

                <!-- Sidebar actions -->
                <aside class="lg:w-48 shrink-0 mt-8 lg:mt-0">
                    <div class="sticky top-20 flex flex-col gap-3">
                        <!-- Vote -->
                        <div class="flex lg:flex-col items-center gap-2 p-4 rounded-xl border border-gray-200 dark:border-gray-700">
                            <button
                                @click="vote(1)"
                                :class="['w-10 h-10 rounded-lg flex items-center justify-center transition-colors', currentVote === 1 ? 'bg-brand-600 text-white' : 'bg-gray-50 dark:bg-gray-900 text-gray-500 dark:text-gray-400 dark:text-gray-500 hover:bg-brand-50 hover:text-brand-600']"
                            >
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z" clip-rule="evenodd"/></svg>
                            </button>
                            <span class="text-xl font-bold text-gray-900 dark:text-gray-100 lg:text-2xl">{{ voteScore }}</span>
                            <button
                                @click="vote(-1)"
                                :class="['w-10 h-10 rounded-lg flex items-center justify-center transition-colors', currentVote === -1 ? 'bg-red-500 text-white' : 'bg-gray-50 dark:bg-gray-900 text-gray-500 dark:text-gray-400 dark:text-gray-500 hover:bg-red-50 hover:text-red-500']"
                            >
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z" clip-rule="evenodd"/></svg>
                            </button>
                        </div>

                        <!-- Save -->
                        <button
                            @click="toggleSave"
                            :class="['w-full flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl text-sm font-medium border transition-colors', saved ? 'bg-brand-50 border-brand-300 text-brand-700' : 'border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-400 dark:text-gray-500 hover:border-brand-300 hover:bg-brand-50']"
                        >
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10.75 2.75a.75.75 0 00-1.5 0v8.614L6.295 8.235a.75.75 0 10-1.09 1.03l4.25 4.5a.75.75 0 001.09 0l4.25-4.5a.75.75 0 00-1.09-1.03l-2.955 3.129V2.75z"/><path d="M3.5 12.75a.75.75 0 00-1.5 0v2.5A2.75 2.75 0 004.75 18h10.5A2.75 2.75 0 0018 15.25v-2.5a.75.75 0 00-1.5 0v2.5c0 .69-.56 1.25-1.25 1.25H4.75c-.69 0-1.25-.56-1.25-1.25v-2.5z"/></svg>
                            {{ saved ? 'Guardada' : 'Guardar' }}
                        </button>

                        <!-- Stats -->
                        <div class="p-4 rounded-xl border border-gray-100 dark:border-gray-800 bg-gray-50 dark:bg-gray-900 space-y-2 text-sm">
                            <div class="flex justify-between text-gray-500 dark:text-gray-400 dark:text-gray-500">
                                <span>Vistas</span><span class="font-medium text-gray-700 dark:text-gray-300">{{ skill.views_count }}</span>
                            </div>
                            <div class="flex justify-between text-gray-500 dark:text-gray-400 dark:text-gray-500">
                                <span>Guardadas</span><span class="font-medium text-gray-700 dark:text-gray-300">{{ savesCount }}</span>
                            </div>
                            <div class="flex justify-between text-gray-500 dark:text-gray-400 dark:text-gray-500">
                                <span>Versión</span><span class="font-medium text-gray-700 dark:text-gray-300">v{{ skill.version }}</span>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </AppLayout>
</template>
