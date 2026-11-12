<script setup>
import { Head, Link, router, usePage } from '@inertiajs/vue3'
import { ref, nextTick, onMounted, onBeforeUnmount } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import AffiliateBox from '@/Components/AffiliateBox.vue'
import SkillPackOffer, { markPackOffered, packOfferAllowed } from '@/Components/SkillPackOffer.vue'
import axios from 'axios'
import { lineDiff } from '@/utils/lineDiff'
import { promptFields, fillPrompt, promptSegments } from '@/utils/promptFields'

import { computed } from 'vue'

const props = defineProps({
    skill: Object,
    versions: { type: Array, default: () => [] },
    userVote: { type: Number, default: null },
    userSaved: { type: Boolean, default: false },
    canEdit: { type: Boolean, default: false },
    // Solo su autor y mientras nadie más la ve (privada, borrador o rechazada).
    canDelete: { type: Boolean, default: false },
    // SKILL.md instalable: { name, url, command } (App\Support\SkillMarkdown)
    install: { type: Object, default: null },
    // Enlazado interno (App\Support\RelatedContent). Las guías son Blade:
    // se enlazan con <a>, nunca con <Link>.
    guides: { type: Array, default: () => [] },
    neighbours: { type: Array, default: () => [] },
    // «Siguiente paso» bajo el prompt: { skills: [{slug, title}], guide: {url, title, excerpt} | null }
    nextStep: { type: Object, default: () => ({ skills: [], guide: null }) },
    // Herramientas con enlace de afiliado que menciona la ficha (App\Support\Affiliates)
    affiliateTools: { type: Array, default: () => [] },
    affiliateDisclosure: { type: String, default: '' },
    // Skill privada: { viaLink, url }. url (el enlace para compartir) solo
    // llega al autor; viaLink indica que quien la ve llegó con ese enlace.
    share: { type: Object, default: null },
})

// Qué botones se usan en la ficha (App\Support\SkillActions). Sin cookies ni
// datos de nadie; los navegadores automatizados que se declaran no avisan.
function track(action) {
    if (!navigator.sendBeacon || navigator.webdriver) return
    navigator.sendBeacon('/hola/accion', new URLSearchParams({ s: props.skill.slug, a: action }))
}

// Mucha gente no pulsa «Copiar»: selecciona el prompt y hace Ctrl+C. Se
// cuenta una vez por visita y solo si se copia un trozo con sustancia.
let manualCopyTracked = false
function onManualCopy() {
    if (manualCopyTracked) return
    const selected = String(window.getSelection?.() ?? '').trim()
    if (selected.length < 40) return
    manualCopyTracked = true
    track('copiar_mano')
    offerPack()
}

// Tras copiar, el pack de la profesión a cambio del email (SkillPackOffer).
// Una vez por visita, nunca a usuarios con cuenta (eligen en su perfil).
const showPackOffer = ref(false)
function offerPack() {
    if (page.props.auth?.user || !props.skill.profession || !packOfferAllowed()) return
    markPackOffered()
    showPackOffer.value = true
    track('pack_visto')
}

function closePackOffer() {
    showPackOffer.value = false
    track('pack_cerrar')
}

// Instalar como Skill de Claude Code
const installCopied = ref('')
const installActions = { prompt: 'claude_code', mcp: 'mcp', command: 'terminal' }

// kind: 'prompt' (instrucción para Claude Code) o 'command' (terminal)
function copyInstall(kind) {
    track(installActions[kind])
    navigator.clipboard.writeText(props.install[kind])
    installCopied.value = kind
    setTimeout(() => installCopied.value = '', 2000)
}

// Diff de versiones: el contenido se pide bajo demanda
const diffOpen = ref(false)
const diffLoading = ref(false)
const diffData = ref(null)
const diffError = ref('')

const diffLines = computed(() => {
    if (!diffData.value) return []
    return lineDiff(diffData.value.previous?.prompt_content ?? '', diffData.value.prompt_content)
})

const diffStats = computed(() => ({
    added: diffLines.value.filter(l => l.type === 'added').length,
    removed: diffLines.value.filter(l => l.type === 'removed').length,
}))

async function openDiff(version) {
    diffOpen.value = true
    diffLoading.value = true
    diffError.value = ''
    diffData.value = null
    try {
        // Quien llega con el enlace de una privada necesita el mismo token para el historial.
        const token = props.share?.viaLink ? new URLSearchParams(window.location.search).get('token') : null
        const { data } = await axios.get(route('skills.versions.show', { skill: props.skill.slug, version, ...(token ? { token } : {}) }))
        diffData.value = data
    } catch {
        diffError.value = 'No se pudo cargar esta versión.'
    } finally {
        diffLoading.value = false
    }
}

const page = usePage()
const auth = page.props.auth

// Skill privada: solo la ve su autor (SkillPolicy) y quien tenga su enlace.
// Sin votos, guardados ni comentarios.
const isPrivate = computed(() => props.skill.status === 'private')

const shareCopied = ref(false)
function copyShareLink() {
    navigator.clipboard.writeText(props.share.url)
    shareCopied.value = true
    setTimeout(() => shareCopied.value = false, 2000)
}

function deleteSkill() {
    if (!confirm(`¿Eliminar «${props.skill.title}»? Se borra para siempre, también su historial, y su enlace deja de funcionar.`)) return
    router.delete(route('skills.destroy', props.skill.slug))
}

function resetShareLink() {
    if (!confirm('¿Cambiar el enlace? Quien tenga el actual dejará de poder abrir esta skill y su SKILL.md.')) return
    router.post(route('skills.share.reset', props.skill.slug), {}, { preserveScroll: true })
}

const voteScore = ref(props.skill.vote_score)
const currentVote = ref(props.userVote)
const saved = ref(props.userSaved)
const savesCount = ref(props.skill.saves_count)
const commentContent = ref('')
const copied = ref(false)
const showAIMenu = ref(false)
const aiToast = ref('')

const difficultyLabel = { beginner: 'Principiante', intermediate: 'Intermedio', advanced: 'Avanzado' }
const difficultyClass = { beginner: 'badge-difficulty-beginner', intermediate: 'badge-difficulty-intermediate', advanced: 'badge-difficulty-advanced' }

const resourceTypeLabel = { claude_skill: 'Skill', claude_plugin: 'Plugin', mcp_server: 'MCP' }
const resourceTypeClass = {
    claude_skill:  'bg-violet-50 dark:bg-violet-900/30 text-violet-700 dark:text-violet-300 border border-violet-200 dark:border-violet-700',
    claude_plugin: 'bg-amber-50 dark:bg-amber-900/30 text-amber-700 dark:text-amber-300 border border-amber-200 dark:border-amber-700',
    mcp_server:    'bg-sky-50 dark:bg-sky-900/30 text-sky-700 dark:text-sky-300 border border-sky-200 dark:border-sky-700',
}
const resourceTypeInfo = {
    claude_skill:  'Un Skill es un archivo Markdown (SKILL.md) que enseña a Claude Code un comportamiento específico. Se instala clonando un repositorio en ~/.claude/skills/ y se activa con /nombre-del-skill.',
    claude_plugin: 'Un Plugin es una extensión instalada mediante el sistema oficial de plugins de Claude Code (claude plugin install). Puede incluir hooks, scripts y configuraciones más complejas que un Skill.',
    mcp_server:    'Un servidor MCP conecta Claude Code con una herramienta o una fuente de datos externa (documentos, una base de datos, una web). Se añade con claude mcp add y Claude lo usa cuando necesita esos datos.',
}

const showTypeInfo = ref(false)

// Huecos del prompt ([actividad], [año]…): se rellenan sobre la ficha y todos
// los botones (copiar, abrir en una IA) usan ya el prompt rellenado. Lo que
// escribe el visitante no sale de su navegador.
const fields = computed(() => promptFields(props.skill.prompt_content))
const values = ref({})
const showFields = ref(false)
const filledCount = computed(() => fields.value.filter(f => values.value[f.key]?.trim()).length)
const filledPrompt = computed(() => fillPrompt(props.skill.prompt_content, values.value))
const segments = computed(() => promptSegments(props.skill.prompt_content, values.value))
let trackedFill = false

function openFields(key = null) {
    if (!showFields.value) track('adaptar')
    showFields.value = true
    if (key) nextTick(() => document.getElementById(fieldId(key))?.focus())
}

function fieldId(key) {
    return 'hueco-' + fields.value.findIndex(f => f.key === key)
}

function onFieldInput() {
    if (!trackedFill && filledCount.value > 0) {
        trackedFill = true
        track('rellenar')
    }
}

function clearFields() {
    values.value = {}
}

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
    track('copiar')
    navigator.clipboard.writeText(filledPrompt.value)
    copied.value = true
    setTimeout(() => copied.value = false, 2000)
    offerPack()
}

// Un prompt se manda tal cual, igual que al copiarlo. Las skills, plugins y
// MCP llevan delante la petición de generarla.
const isPromptFicha = computed(() => (props.skill.resource_type ?? 'prompt') === 'prompt')
const promptToSend = computed(() => isPromptFicha.value
    ? filledPrompt.value
    : `Genérame la skill "${props.skill.title}":\n\n${filledPrompt.value}`)

// El botón principal abre la IA para la que está escrita la ficha: la
// mayoría de visitas llegan a prompts de ChatGPT y Gemini, y «Abrir en
// ChatGPT», escondido en el desplegable, se usaba más que «Abrir en Claude».
const AI_TOOLS = [
    { id: 'claude', name: 'Claude', emoji: '🟠', hint: 'app o web', color: 'bg-[#D97757] hover:bg-[#c46440]' },
    { id: 'chatgpt', name: 'ChatGPT', emoji: '🟢', hint: 'precarga prompt', color: 'bg-[#10a37f] hover:bg-[#0d8a6b]' },
    { id: 'gemini', name: 'Gemini', emoji: '🔵', hint: 'copia prompt', color: 'bg-[#1a73e8] hover:bg-[#1558b0]' },
    { id: 'copilot', name: 'Copilot', emoji: '🟣', hint: 'precarga prompt', color: 'bg-[#6b4fbb] hover:bg-[#5a3fa6]' },
    { id: 'perplexity', name: 'Perplexity', emoji: '⚫', hint: 'precarga prompt', color: 'bg-[#20808d] hover:bg-[#1a6b76]' },
]
const TOOL_BY_NAME = { ChatGPT: 'chatgpt', Gemini: 'gemini', Copilot: 'copilot', Perplexity: 'perplexity' }
const primaryTool = computed(() => AI_TOOLS.find(t => t.id === (TOOL_BY_NAME[props.skill.tool_name] ?? 'claude')))
const otherTools = computed(() => AI_TOOLS.filter(t => t.id !== primaryTool.value.id))

function openIn(id) {
    showAIMenu.value = false
    if (id === 'claude') openInClaude()
    else openInTool(id)
}

// En el móvil, los botones de copiar y abrir quedan fijos abajo: el prompt
// suele ser más largo que la pantalla. El body deja sitio para que la barra
// no tape el pie de la página.
onMounted(() => { if (isPromptFicha.value) document.body.classList.add('pb-20', 'sm:pb-0') })
onBeforeUnmount(() => document.body.classList.remove('pb-20', 'sm:pb-0'))

function openInClaude() {
    track('abrir_claude')
    const fullPrompt = promptToSend.value
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
    track('abrir_' + toolId)
    showAIMenu.value = false
    const fullPrompt = promptToSend.value
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

    // Gemini no soporta prefill por URL: gemini.google.com/app ignora ?q= y abre
    // un chat vacío. No hay parámetro alternativo, así que va siempre por copiar.
    const noPrefill = ['gemini']

    // Los navegadores y servidores suelen tener límite ~8000 chars de URL.
    // Usamos 4000 como umbral conservador para garantizar compatibilidad.
    const url = withParam[toolId]
    if (url.length <= 4000 && !noPrefill.includes(toolId)) {
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
    track('abrir_opencode')
    const fullPrompt = promptToSend.value
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
    </Head>

    <AppLayout>
        <!-- Toast notificación otras IAs -->
        <Transition enter-active-class="transition ease-out duration-200" enter-from-class="opacity-0 translate-y-2" enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150" leave-from-class="opacity-100" leave-to-class="opacity-0">
            <div v-if="aiToast" class="fixed bottom-24 sm:bottom-6 left-1/2 -translate-x-1/2 z-50 flex items-center gap-2 px-4 py-3 bg-gray-900 dark:bg-gray-100 text-white dark:text-gray-900 text-sm font-medium rounded-xl shadow-xl">
                <svg class="w-4 h-4 text-green-400 dark:text-green-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                {{ aiToast }}
            </div>
        </Transition>

        <!-- Banner de estado para el autor / admin -->
        <div v-if="isPrivate && share?.viaLink" class="bg-gray-50 dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 py-3 flex flex-wrap items-center gap-x-3 gap-y-1 text-sm">
                <span class="text-lg" aria-hidden="true">🔒</span>
                <span class="font-semibold text-gray-800 dark:text-gray-200">Skill privada compartida contigo.</span>
                <span class="text-gray-600 dark:text-gray-400">Solo la ve quien tiene este enlace: no aparece en la web ni en los buscadores.</span>
            </div>
        </div>
        <div v-else-if="isPrivate" class="bg-gray-50 dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 py-3 text-sm">
                <div class="flex flex-wrap items-center gap-x-3 gap-y-1">
                    <span class="text-lg" aria-hidden="true">🔒</span>
                    <span class="font-semibold text-gray-800 dark:text-gray-200">Skill privada.</span>
                    <span class="text-gray-600 dark:text-gray-400">No aparece en la web ni en los buscadores. Solo la ves tú y quien tenga su enlace.</span>
                    <Link :href="route('dashboard')" class="text-brand-600 dark:text-brand-400 hover:underline">Ver todas mis skills privadas</Link>
                </div>
                <div v-if="share?.url" class="mt-3 sm:ml-8">
                    <label for="share-link" class="block text-xs font-medium text-gray-600 dark:text-gray-400 mb-1">Enlace para compartirla con tu equipo (pueden verla e instalarla sin cuenta)</label>
                    <div class="flex flex-col sm:flex-row gap-2">
                        <input id="share-link" type="text" readonly :value="share.url" @focus="$event.target.select()"
                            class="flex-1 min-w-0 rounded-lg border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-xs font-mono text-gray-700 dark:text-gray-300" />
                        <div class="flex gap-2 shrink-0">
                            <button type="button" @click="copyShareLink" class="btn-primary text-sm">{{ shareCopied ? 'Copiado' : 'Copiar enlace' }}</button>
                            <button type="button" @click="resetShareLink" class="px-3 py-1.5 text-sm rounded-lg border border-gray-300 dark:border-gray-700 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">Cambiar enlace</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                        <Link v-if="page.props.nav?.tools?.[skill.tool_name]" :href="route('tools.show', page.props.nav.tools[skill.tool_name])" class="badge-tool hover:opacity-80 transition-opacity">{{ skill.tool_name }}</Link>
                        <span v-else class="badge-tool">{{ skill.tool_name }}</span>

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
                                : skill.resource_type === 'mcp_server'
                                ? 'bg-sky-50 dark:bg-sky-900/20 border border-sky-200 dark:border-sky-700 text-sky-800 dark:text-sky-300'
                                : 'bg-violet-50 dark:bg-violet-900/20 border border-violet-200 dark:border-violet-700 text-violet-800 dark:text-violet-300'"
                        >
                            <p class="font-semibold mb-1">{{ skill.resource_type === 'mcp_server' ? '¿Qué es un servidor MCP?' : `¿Qué es un ${resourceTypeLabel[skill.resource_type]} de Claude Code?` }}</p>
                            <p>{{ resourceTypeInfo[skill.resource_type] }}</p>
                            <div class="mt-2 pt-2 border-t border-current border-opacity-20 flex gap-4">
                                <span><strong>Skill</strong> — archivo SKILL.md · se instala con git clone · se activa con /nombre</span>
                                <span class="text-current opacity-40">|</span>
                                <span><strong>Plugin</strong> — extensión oficial · se instala con claude plugin install · activo en todo Claude Code</span>
                            </div>
                        </div>
                    </Transition>

                    <div class="flex items-start justify-between gap-4">
                        <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-gray-100 leading-tight">{{ skill.title }}</h1>
                        <div v-if="canEdit || canDelete" class="shrink-0 flex flex-col sm:flex-row gap-2">
                        <Link
                            v-if="canEdit"
                            :href="route('skills.edit', skill.slug)"
                            class="shrink-0 mt-1 inline-flex items-center gap-1.5 rounded-lg border border-gray-200 dark:border-gray-700 px-3 py-1.5 text-sm font-medium text-gray-600 dark:text-gray-300 hover:border-brand-300 hover:text-brand-600 dark:hover:border-brand-500 dark:hover:text-brand-400 transition-colors"
                        >
                            <span aria-hidden="true">✏️</span> Editar
                        </Link>
                        <button
                            v-if="canDelete"
                            type="button"
                            @click="deleteSkill"
                            class="shrink-0 mt-1 inline-flex items-center gap-1.5 rounded-lg border border-gray-200 dark:border-gray-700 px-3 py-1.5 text-sm font-medium text-gray-600 dark:text-gray-300 hover:border-red-300 hover:text-red-600 dark:hover:border-red-500 dark:hover:text-red-400 transition-colors"
                        >
                            <span aria-hidden="true">🗑</span> Eliminar
                        </button>
                        </div>
                    </div>
                    <p class="mt-3 text-gray-600 dark:text-gray-400 dark:text-gray-500 leading-relaxed">{{ skill.description }}</p>

                    <!-- Use case -->
                    <div v-if="skill.use_case" class="mt-5 p-4 bg-brand-50 dark:bg-brand-900/20 rounded-xl border border-brand-100 dark:border-brand-800/50">
                        <p class="text-xs font-semibold text-brand-700 dark:text-brand-400 uppercase tracking-wider mb-1">Caso de uso</p>
                        <p class="text-sm text-brand-800 dark:text-brand-200">{{ skill.use_case }}</p>
                    </div>

                    <!-- Instalación rápida para Plugins y Skills de Claude Code -->
                    <!--
                        Cada skill o plugin de terceros se instala distinto (marketplace
                        de plugins, `npx skills add`, copia manual), así que aquí no se
                        inventa un comando: se remite a la sección de instalación de la
                        ficha, que es la que lleva los comandos verificados del repo.
                    -->
                    <div v-if="skill.resource_type === 'claude_plugin'" class="mt-6 p-4 rounded-xl bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-700">
                        <p class="text-xs font-semibold text-amber-700 dark:text-amber-400 uppercase tracking-wider mb-1">Plugin de Claude Code</p>
                        <p class="text-sm text-amber-900 dark:text-amber-200">Se instala desde Claude Code con los comandos de la sección <strong>Instalación</strong> de abajo, tal y como los publica su autor.</p>
                    </div>

                    <div v-else-if="skill.resource_type === 'mcp_server'" class="mt-6 p-4 rounded-xl bg-sky-50 dark:bg-sky-900/20 border border-sky-200 dark:border-sky-700">
                        <p class="text-xs font-semibold text-sky-700 dark:text-sky-400 uppercase tracking-wider mb-1">Servidor MCP</p>
                        <p class="text-sm text-sky-900 dark:text-sky-200">Se conecta a Claude Code con los comandos de la sección <strong>Instalación</strong> de abajo, tal y como los publica su autor.</p>
                    </div>

                    <div v-else-if="skill.resource_type === 'claude_skill'" class="mt-6 p-4 rounded-xl bg-violet-50 dark:bg-violet-900/20 border border-violet-200 dark:border-violet-700">
                        <p class="text-xs font-semibold text-violet-700 dark:text-violet-400 uppercase tracking-wider mb-1">Skill de Claude Code</p>
                        <p class="text-sm text-violet-900 dark:text-violet-200">Se instala con los comandos de la sección <strong>Instalación</strong> de abajo, tal y como los publica su autor.</p>
                    </div>

                    <!-- Prompt -->
                    <div class="mt-8">
                        <div class="flex flex-wrap items-center justify-between gap-3 mb-3">
                            <h2 class="font-semibold text-gray-900 dark:text-gray-100">Prompt / Workflow</h2>
                            <div class="flex flex-wrap items-center gap-2">
                                <!-- Copiar: la acción más usada, y casi siempre a mano porque
                                     el botón apenas se veía. Ahora es el principal. -->
                                <button
                                    @click="copyPrompt"
                                    class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-lg bg-brand-600 hover:bg-brand-700 text-white text-sm font-semibold transition-colors"
                                >
                                    <svg v-if="!copied" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                                    <svg v-else class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    {{ copied ? '¡Copiado!' : 'Copiar prompt' }}
                                </button>

                                <!-- Abrir en la IA de la ficha + desplegable con las demás -->
                                <div class="relative flex">
                                    <button
                                        @click="openIn(primaryTool.id)"
                                        :class="primaryTool.color"
                                        class="flex items-center gap-1.5 px-3 py-2 rounded-l-lg text-white text-sm font-semibold transition-colors"
                                        :title="`Abrir en ${primaryTool.name} con el prompt`"
                                    >
                                        Abrir en {{ primaryTool.name }}
                                    </button>
                                    <button
                                        @click.stop="showAIMenu = !showAIMenu"
                                        :class="primaryTool.color"
                                        class="flex items-center px-2 py-2 rounded-r-lg text-white border-l border-white/25 transition-colors"
                                        title="Abrir en otra IA"
                                        aria-label="Abrir en otra IA"
                                    >
                                        <svg class="w-3 h-3 transition-transform" :class="showAIMenu ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                                    </button>

                                    <div
                                        v-if="showAIMenu"
                                        v-click-outside="() => showAIMenu = false"
                                        class="absolute top-full right-0 mt-1.5 w-52 bg-white dark:bg-gray-900 rounded-xl border border-gray-200 dark:border-gray-700 shadow-lg z-20 py-1 overflow-hidden"
                                    >
                                        <p class="px-3 py-1.5 text-[10px] font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider">Otras IA</p>
                                        <button
                                            v-for="t in otherTools"
                                            :key="t.id"
                                            @click="openIn(t.id)"
                                            class="w-full flex items-center gap-2.5 px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors text-left"
                                        >
                                            <span class="text-base">{{ t.emoji }}</span>
                                            <span class="font-medium">{{ t.name }}</span>
                                            <span class="ml-auto text-[10px] text-gray-400">{{ t.hint }}</span>
                                        </button>
                                        <div class="border-t border-gray-100 dark:border-gray-800 mt-1 pt-1">
                                            <button @click="openInOpenCode(); showAIMenu = false" class="w-full flex items-center gap-2.5 px-3 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors text-left">
                                                <span class="text-base">🟪</span>
                                                <span class="font-medium">OpenCode</span>
                                                <span class="ml-auto text-[10px] text-gray-400">enlace directo</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Huecos del prompt: se rellenan aquí y los botones de arriba
                             mandan ya el prompt completo (utils/promptFields.js) -->
                        <div v-if="fields.length" class="mb-3 rounded-xl border border-amber-200 dark:border-amber-800/60 bg-amber-50/70 dark:bg-amber-900/10">
                            <button
                                v-if="!showFields"
                                type="button"
                                @click="openFields()"
                                class="w-full flex items-center justify-between gap-3 px-4 py-2.5 text-left"
                            >
                                <span class="text-sm text-amber-900 dark:text-amber-200">
                                    <strong>{{ fields.length === 1 ? '1 dato por rellenar' : `${fields.length} datos por rellenar` }}</strong>
                                    <span class="hidden sm:inline"> · los botones enviarán el prompt ya completo</span>
                                </span>
                                <span class="shrink-0 text-xs font-semibold px-2.5 py-1 rounded-lg bg-amber-500 hover:bg-amber-600 text-white transition-colors">Rellenar aquí</span>
                            </button>
                            <div v-else class="p-4">
                                <div class="flex items-center justify-between gap-3 mb-3">
                                    <p class="text-sm font-semibold text-amber-900 dark:text-amber-200">
                                        Tus datos <span class="font-normal text-amber-700 dark:text-amber-400">· {{ filledCount }} de {{ fields.length }}</span>
                                    </p>
                                    <div class="flex items-center gap-3 text-xs">
                                        <button v-if="filledCount" type="button" @click="clearFields" class="text-amber-700 dark:text-amber-400 hover:underline">Borrar</button>
                                        <button type="button" @click="showFields = false" class="text-amber-700 dark:text-amber-400 hover:underline">Ocultar</button>
                                    </div>
                                </div>
                                <div class="grid gap-3 sm:grid-cols-2">
                                    <div v-for="field in fields" :key="field.key" :class="field.long ? 'sm:col-span-2' : ''">
                                        <label :for="fieldId(field.key)" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">{{ field.label }}</label>
                                        <textarea
                                            v-if="field.long"
                                            :id="fieldId(field.key)"
                                            v-model="values[field.key]"
                                            @input="onFieldInput"
                                            rows="3"
                                            :placeholder="field.hint"
                                            class="w-full rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-3 py-2 text-sm text-gray-900 dark:text-gray-100 placeholder-gray-400 focus:border-brand-400 focus:ring-2 focus:ring-brand-100 dark:focus:ring-brand-900 outline-none"
                                        />
                                        <input
                                            v-else
                                            :id="fieldId(field.key)"
                                            v-model="values[field.key]"
                                            @input="onFieldInput"
                                            type="text"
                                            :placeholder="field.hint"
                                            class="w-full rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-3 py-2 text-sm text-gray-900 dark:text-gray-100 placeholder-gray-400 focus:border-brand-400 focus:ring-2 focus:ring-brand-100 dark:focus:ring-brand-900 outline-none"
                                        />
                                        <div v-if="field.options.length" class="mt-1.5 flex flex-wrap gap-1.5">
                                            <button
                                                v-for="option in field.options"
                                                :key="option"
                                                type="button"
                                                @click="values[field.key] = option; onFieldInput()"
                                                class="text-xs px-2 py-0.5 rounded-full border transition-colors"
                                                :class="values[field.key] === option
                                                    ? 'border-brand-400 bg-brand-50 text-brand-700 dark:bg-brand-900/30 dark:text-brand-300'
                                                    : 'border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-400 hover:border-brand-300'"
                                            >{{ option }}</button>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 text-xs text-gray-500 dark:text-gray-400">Lo que escribes no sale de tu navegador. Los datos que dejes vacíos se envían entre corchetes, para que se los des a la IA.</p>
                            </div>
                        </div>
                        <div class="relative">
                            <button
                                type="button"
                                @click="copyPrompt"
                                class="absolute top-2.5 right-2.5 z-10 inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md bg-white/10 hover:bg-white/20 text-gray-100 text-xs font-medium transition-colors"
                            >{{ copied ? '¡Copiado!' : 'Copiar' }}</button>
                            <pre class="bg-gray-900 text-gray-100 rounded-xl p-5 pt-12 text-sm leading-relaxed overflow-x-auto whitespace-pre-wrap font-mono" @copy="onManualCopy"><template v-for="(seg, i) in segments" :key="i"><span v-if="seg.key" role="button" tabindex="0" @click="openFields(seg.key)" @keydown.enter="openFields(seg.key)" class="cursor-pointer rounded px-0.5" :class="seg.filled ? 'bg-emerald-400/20 text-emerald-200' : 'bg-amber-400/20 text-amber-200 hover:bg-amber-400/30'" :title="seg.filled ? 'Cambiar este dato' : 'Rellenar este dato'">{{ seg.text }}</span><template v-else>{{ seg.text }}</template></template></pre>
                        </div>
                    </div>

                    <SkillPackOffer v-if="showPackOffer" :profession="skill.profession" @close="closePackOffer" />

                    <AffiliateBox :tools="affiliateTools" :disclosure="affiliateDisclosure" />

                    <!-- Siguiente paso: la mayoría llega desde Google a una ficha y se va
                         tras usarla. Aquí, sin bajar, las fichas de la misma tarea y la guía. -->
                    <section v-if="nextStep.skills.length || nextStep.guide" class="mt-6 rounded-xl border border-gray-100 dark:border-gray-800 p-4">
                        <h2 class="text-sm font-semibold text-gray-900 dark:text-gray-100">Siguiente paso</h2>
                        <ul v-if="nextStep.skills.length" class="mt-3 space-y-2">
                            <li v-for="s in nextStep.skills" :key="s.slug" class="flex gap-2 text-sm">
                                <span class="text-brand-500 shrink-0" aria-hidden="true">→</span>
                                <Link :href="route('skills.show', s.slug)" @click="track('siguiente')" class="text-gray-700 dark:text-gray-300 hover:text-brand-600 dark:hover:text-brand-400 transition-colors">{{ s.title }}</Link>
                            </li>
                        </ul>
                        <!-- Guías = Blade: <a>, no <Link> -->
                        <a
                            v-if="nextStep.guide"
                            :href="nextStep.guide.url"
                            @click="track('siguiente')"
                            class="mt-3 block rounded-lg bg-gray-50 dark:bg-gray-900 px-3 py-2.5 hover:bg-brand-50 dark:hover:bg-brand-900/20 transition-colors"
                        >
                            <span class="block text-xs text-gray-400 dark:text-gray-500">Guía</span>
                            <span class="block text-sm font-medium text-gray-800 dark:text-gray-200">{{ nextStep.guide.title }}</span>
                        </a>
                    </section>

                    <!-- Usar como Skill de Claude Code: SKILL.md generado desde la ficha -->
                    <div v-if="install && skill.resource_type === 'prompt'" class="mt-6 p-4 rounded-xl border border-violet-200 dark:border-violet-800 bg-violet-50/60 dark:bg-violet-900/10">
                        <div class="flex flex-wrap items-start justify-between gap-3">
                            <div class="min-w-0">
                                <p class="text-sm font-semibold text-violet-900 dark:text-violet-200">Úsalo como Skill de Claude Code</p>
                                <p class="mt-0.5 text-xs text-violet-700 dark:text-violet-400">
                                    Instálalo una vez y Claude lo aplicará solo cuando lo necesites, o llámalo con <code class="font-mono">/{{ install.name }}</code>.
                                </p>
                            </div>
                            <div class="shrink-0 flex gap-2">
                                <button
                                    @click="copyInstall('prompt')"
                                    class="px-3 py-1.5 rounded-lg text-xs font-semibold bg-violet-600 hover:bg-violet-700 text-white transition-colors"
                                    title="Copia una instrucción para pegar en Claude Code"
                                >{{ installCopied === 'prompt' ? 'Copiado: pégalo en Claude Code' : 'Pídeselo a Claude Code' }}</button>
                                <a
                                    :href="install.url"
                                    :download="`${skill.slug}-SKILL.md`"
                                    @click="track('skill_md')"
                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-semibold border border-violet-300 dark:border-violet-700 text-violet-700 dark:text-violet-300 hover:bg-violet-100 dark:hover:bg-violet-900/40 transition-colors"
                                >
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                                    SKILL.md
                                </a>
                            </div>
                        </div>
                        <details v-if="install.mcp" class="mt-3">
                            <summary class="cursor-pointer list-none text-xs text-violet-700 dark:text-violet-400 hover:underline">Que Claude Code busque e instale solo (MCP)</summary>
                            <p class="mt-2 text-[11px] text-violet-700/80 dark:text-violet-400/80">
                                Registra el catálogo una vez y Claude podrá buscar e instalar skills durante la conversación, sin volver a pasar por la web.
                                <a href="/mcp" class="underline hover:no-underline">Cómo funciona</a>
                            </p>
                            <div class="mt-2 flex items-stretch gap-2">
                                <pre class="flex-1 min-w-0 bg-gray-900 text-gray-100 rounded-lg px-3 py-2 text-xs font-mono overflow-x-auto whitespace-nowrap">{{ install.mcp }}</pre>
                                <button
                                    @click="copyInstall('mcp')"
                                    class="shrink-0 px-3 rounded-lg text-xs font-medium border border-violet-300 dark:border-violet-700 text-violet-700 dark:text-violet-300 hover:bg-violet-100 dark:hover:bg-violet-900/40 transition-colors"
                                >{{ installCopied === 'mcp' ? 'Copiado' : 'Copiar' }}</button>
                            </div>
                        </details>

                        <details class="mt-3">
                            <summary class="cursor-pointer list-none text-xs text-violet-700 dark:text-violet-400 hover:underline">Prefiero hacerlo desde la terminal</summary>
                            <div class="mt-2 flex items-stretch gap-2">
                                <pre class="flex-1 min-w-0 bg-gray-900 text-gray-100 rounded-lg px-3 py-2 text-xs font-mono overflow-x-auto whitespace-nowrap">{{ install.command }}</pre>
                                <button
                                    @click="copyInstall('command')"
                                    class="shrink-0 px-3 rounded-lg text-xs font-medium border border-violet-300 dark:border-violet-700 text-violet-700 dark:text-violet-300 hover:bg-violet-100 dark:hover:bg-violet-900/40 transition-colors"
                                >{{ installCopied === 'command' ? 'Copiado' : 'Copiar' }}</button>
                            </div>
                            <p class="mt-2 text-[11px] text-violet-700/80 dark:text-violet-400/80">
                                macOS, Linux o WSL. En Windows sin WSL, descarga el archivo y guárdalo en <code class="font-mono">%USERPROFILE%\.claude\skills\{{ install.name }}\SKILL.md</code>.
                            </p>
                        </details>
                    </div>

                    <!-- Historial de versiones -->
                    <details v-if="versions.length > 1" class="mt-6 group">
                        <summary class="cursor-pointer list-none flex items-center gap-2 text-sm font-medium text-gray-600 dark:text-gray-400 hover:text-brand-600 dark:hover:text-brand-400 transition-colors">
                            <span class="text-xs transition-transform group-open:rotate-90" aria-hidden="true">▶</span>
                            Historial de versiones
                            <span class="text-xs font-normal text-gray-400 dark:text-gray-500">({{ versions.length }} versiones · actual v{{ skill.version }})</span>
                        </summary>
                        <ol class="mt-4 space-y-3 border-l-2 border-gray-100 dark:border-gray-800 pl-4">
                            <li v-for="v in versions" :key="v.id" class="text-sm">
                                <div class="flex items-baseline gap-2 flex-wrap">
                                    <span
                                        class="font-mono text-xs px-1.5 py-0.5 rounded"
                                        :class="v.version === skill.version
                                            ? 'bg-brand-100 dark:bg-brand-900/40 text-brand-700 dark:text-brand-300 font-semibold'
                                            : 'bg-gray-100 dark:bg-gray-800 text-gray-500 dark:text-gray-400'"
                                    >v{{ v.version }}</span>
                                    <span class="text-gray-700 dark:text-gray-300">{{ v.changelog || 'Sin descripción de cambios' }}</span>
                                    <button
                                        type="button"
                                        @click="openDiff(v.version)"
                                        class="text-xs font-medium text-brand-600 dark:text-brand-400 hover:underline"
                                    >{{ v.version === 1 ? 'Ver contenido' : 'Ver cambios' }}</button>
                                </div>
                                <p class="mt-0.5 text-xs text-gray-400 dark:text-gray-500">
                                    {{ v.editor?.name ?? 'Autor desconocido' }} ·
                                    {{ new Date(v.created_at).toLocaleDateString('es-ES', { day: 'numeric', month: 'short', year: 'numeric' }) }}
                                </p>
                            </li>
                        </ol>
                    </details>

                    <!-- Author -->
                    <div class="mt-8 flex items-center gap-3 pb-8 border-b border-gray-100 dark:border-gray-800">
                        <div class="w-9 h-9 rounded-full bg-brand-100 text-brand-700 font-semibold flex items-center justify-center text-sm shrink-0">
                            {{ skill.author.name.charAt(0).toUpperCase() }}
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                <Link
                                    v-if="skill.author.username"
                                    :href="route('authors.show', skill.author.username)"
                                    class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors"
                                >{{ skill.author.name }}</Link>
                                <template v-else>{{ skill.author.name }}</template>
                                <span v-if="skill.author.is_verified_expert" class="ml-1 text-brand-500 text-xs" title="Experto verificado">✓ Experto</span>
                            </p>
                            <p class="text-xs text-gray-400 dark:text-gray-500">{{ skill.author.reputation }} puntos de reputación</p>
                        </div>
                    </div>

                    <!-- Enlazado interno: vecinas de la profesión y guías (RelatedContent) -->
                    <section v-if="neighbours.length || guides.length" class="mt-8 pb-8 border-b border-gray-100 dark:border-gray-800 grid gap-6 sm:grid-cols-2">
                        <div v-if="neighbours.length">
                            <h2 class="text-sm font-semibold text-gray-900 dark:text-gray-100 mb-3">Más prompts para {{ skill.profession.name }}</h2>
                            <ul class="space-y-2.5">
                                <li v-for="n in neighbours" :key="n.slug">
                                    <Link :href="route('skills.show', n.slug)" class="text-sm text-gray-700 dark:text-gray-300 hover:text-brand-600 dark:hover:text-brand-400 line-clamp-2 transition-colors">{{ n.title }}</Link>
                                </li>
                            </ul>
                        </div>
                        <div v-if="guides.length">
                            <h2 class="text-sm font-semibold text-gray-900 dark:text-gray-100 mb-3">Guías relacionadas</h2>
                            <ul class="space-y-3">
                                <li v-for="g in guides" :key="g.url">
                                    <!-- Guías = Blade: <a>, no <Link> -->
                                    <a :href="g.url" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-brand-600 dark:hover:text-brand-400 transition-colors">{{ g.title }}</a>
                                    <p class="text-xs text-gray-400 dark:text-gray-500 line-clamp-2 mt-0.5">{{ g.excerpt }}</p>
                                </li>
                            </ul>
                        </div>
                    </section>

                    <!-- Comments (una privada no tiene comunidad: ni comentarios, ni votos, ni guardados) -->
                    <section v-if="!isPrivate" id="comentarios" class="mt-8 scroll-mt-20">
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
                        <template v-if="!isPrivate">
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
                        </template>

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
        <!-- Móvil: copiar y abrir siempre a mano, el prompt suele ocupar más que la pantalla -->
        <div
            v-if="isPromptFicha"
            class="sm:hidden fixed inset-x-0 bottom-0 z-40 flex gap-2 border-t border-gray-200 dark:border-gray-800 bg-white/95 dark:bg-gray-900/95 backdrop-blur px-4 pt-3 pb-[calc(0.75rem+env(safe-area-inset-bottom))]"
        >
            <button type="button" @click="copyPrompt" class="flex-1 rounded-xl bg-brand-600 active:bg-brand-700 text-white text-sm font-semibold py-2.5">
                {{ copied ? '¡Copiado!' : 'Copiar prompt' }}
            </button>
            <button type="button" @click="openIn(primaryTool.id)" :class="primaryTool.color" class="flex-1 rounded-xl text-white text-sm font-semibold py-2.5">
                Abrir en {{ primaryTool.name }}
            </button>
        </div>
    </AppLayout>

    <Teleport to="body">
        <!-- Diff de versiones -->
        <div v-if="diffOpen" class="fixed inset-0 z-50 flex items-start justify-center p-4 sm:p-6 overflow-y-auto" @click.self="diffOpen = false">
            <div class="fixed inset-0 bg-black/50 backdrop-blur-sm" @click="diffOpen = false" />
            <div class="relative w-full max-w-3xl my-4 bg-white dark:bg-gray-900 rounded-2xl shadow-2xl ring-1 ring-gray-200 dark:ring-gray-700 flex flex-col" role="dialog" aria-modal="true" aria-labelledby="diff-title">
                <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100 dark:border-gray-800">
                    <div>
                        <h2 id="diff-title" class="text-base font-semibold text-gray-900 dark:text-gray-100">
                            <template v-if="diffData">
                                v{{ diffData.version }}<template v-if="diffData.previous"> frente a v{{ diffData.previous.version }}</template>
                            </template>
                            <template v-else>Historial de versiones</template>
                        </h2>
                        <p v-if="diffData" class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">
                            {{ diffData.changelog || 'Sin descripción de cambios' }}
                            <template v-if="diffData.previous"> · <span class="text-green-600 dark:text-green-400">+{{ diffStats.added }}</span> <span class="text-red-500">−{{ diffStats.removed }}</span> líneas</template>
                        </p>
                    </div>
                    <button @click="diffOpen = false" class="w-8 h-8 flex items-center justify-center rounded-lg text-gray-400 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors" aria-label="Cerrar">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
                <div class="px-6 py-5 max-h-[70vh] overflow-y-auto">
                    <p v-if="diffLoading" class="text-sm text-gray-400">Cargando…</p>
                    <p v-else-if="diffError" class="text-sm text-red-500">{{ diffError }}</p>
                    <pre v-else-if="diffData && !diffData.previous" class="bg-gray-900 text-gray-100 rounded-xl p-4 text-xs leading-relaxed whitespace-pre-wrap font-mono">{{ diffData.prompt_content }}</pre>
                    <div v-else-if="diffData" class="rounded-xl overflow-hidden border border-gray-200 dark:border-gray-700 font-mono text-xs leading-relaxed">
                        <div
                            v-for="(line, i) in diffLines"
                            :key="i"
                            class="px-3 whitespace-pre-wrap break-words"
                            :class="{
                                'bg-green-50 dark:bg-green-900/20 text-green-800 dark:text-green-300': line.type === 'added',
                                'bg-red-50 dark:bg-red-900/20 text-red-700 dark:text-red-300 line-through decoration-red-300/60': line.type === 'removed',
                                'text-gray-600 dark:text-gray-400': line.type === 'same',
                            }"
                        ><span class="select-none inline-block w-4 text-gray-400" aria-hidden="true">{{ line.type === 'added' ? '+' : line.type === 'removed' ? '−' : ' ' }}</span>{{ line.text || ' ' }}</div>
                    </div>
                </div>
            </div>
        </div>
    </Teleport>
</template>
