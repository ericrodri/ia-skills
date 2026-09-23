<script setup>
import { Head, useForm } from '@inertiajs/vue3'
import { computed, ref } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'

const props = defineProps({
    professions: Array,
    tools: Array,
    // resources/data/skill-templates.json (App\Support\SkillTemplates)
    templates: { type: Array, default: () => [] },
})

const form = useForm({
    profession_id: '',
    title: '',
    description: '',
    prompt_content: '',
    tool_name: '',
    difficulty: 'beginner',
    estimated_minutes: '',
    use_case: '',
    resource_type: 'prompt',
})

const resourceTypeOptions = [
    { value: 'prompt',        label: 'Prompt / Workflow', desc: 'Prompt o flujo de trabajo', icon: '💬' },
    { value: 'claude_skill',  label: 'Claude Skill',      desc: 'Skill para Claude Code',    icon: '🟣' },
    { value: 'claude_plugin', label: 'Claude Plugin',     desc: 'Plugin para Claude Code',   icon: '🟡' },
]

function submit() {
    form.post(route('skills.store'))
}

// Plantillas: rellenan el formulario con un ejemplo con la estructura que
// funciona (situación, tarea, criterios, formato, límites).
const selectedTemplate = ref('')

function applyTemplate() {
    const template = props.templates.find(t => t.key === selectedTemplate.value)
    if (!template) return

    const hasContent = form.title || form.description || form.prompt_content
    if (hasContent && !window.confirm('La plantilla sustituirá el título, la descripción y el prompt que has escrito. ¿Continuar?')) {
        selectedTemplate.value = ''
        return
    }

    const profession = props.professions.find(p => p.slug === template.profession)
    if (profession) form.profession_id = profession.id

    form.title = template.title
    form.description = template.description
    form.use_case = template.use_case ?? ''
    form.prompt_content = template.prompt_content
    form.difficulty = template.difficulty ?? form.difficulty
    form.estimated_minutes = template.estimated_minutes ?? ''
    form.resource_type = 'prompt'
}

// Checklist de calidad en vivo: los mismos criterios con los que se revisa.
const checklist = computed(() => {
    const prompt = form.prompt_content ?? ''
    const placeholders = prompt.match(/\[[^\]]{3,80}\]/g) ?? []
    const unfilledTemplate = props.templates.some(t => t.prompt_content === prompt)

    return [
        { ok: form.title.trim().length >= 15 && form.title.trim().length <= 110, label: 'Título concreto (15-110 caracteres) que diga qué se obtiene' },
        { ok: form.description.trim().length >= 60, label: 'Descripción de al menos 60 caracteres: qué entra y qué sale' },
        { ok: prompt.trim().length >= 200, label: 'Prompt con suficiente contexto (200+ caracteres)' },
        { ok: placeholders.length > 0, label: 'Campos variables marcados entre [corchetes]' },
        { ok: /formato|tabla|lista|estructura|secciones|viñetas|palabras/i.test(prompt), label: 'Indica el formato de salida (tabla, lista, longitud…)' },
        { ok: form.use_case.trim().length > 0, label: 'Caso de uso real rellenado' },
        { ok: !unfilledTemplate, label: 'Adaptado: no es la plantilla tal cual' },
    ]
})

const checklistScore = computed(() => checklist.value.filter(c => c.ok).length)

const difficultyOptions = [
    { value: 'beginner', label: 'Principiante', desc: 'Fácil de implementar', icon: '🌱' },
    { value: 'intermediate', label: 'Intermedio', desc: 'Requiere algo de práctica', icon: '⚡' },
    { value: 'advanced', label: 'Avanzado', desc: 'Para usuarios expertos', icon: '🚀' },
]

const inputClass = 'w-full rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 placeholder-gray-400 dark:placeholder-gray-500 px-4 py-2.5 text-sm focus:border-brand-400 focus:ring-2 focus:ring-brand-100 dark:focus:ring-brand-900/30 outline-none transition-colors'
</script>

<template>
    <Head>
        <title>Compartir skill — ia-skills</title>
    </Head>

    <AppLayout>
        <div class="max-w-2xl mx-auto px-4 sm:px-6 py-12">

            <!-- Header -->
            <div class="mb-8">
                <div class="flex items-center gap-3 mb-3">
                    <div class="w-10 h-10 rounded-xl bg-brand-100 dark:bg-brand-900/40 flex items-center justify-center text-xl">⚡</div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Compartir una skill</h1>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Ayuda a la comunidad compartiendo un workflow o prompt que te funciona.</p>
                    </div>
                </div>
            </div>

            <!-- Plantillas -->
            <div v-if="templates.length" class="mb-8 rounded-2xl border border-brand-100 dark:border-brand-800/50 bg-brand-50/60 dark:bg-brand-900/10 p-5">
                <label for="template" class="block text-sm font-semibold text-gray-900 dark:text-gray-100">¿No sabes por dónde empezar? Parte de una plantilla</label>
                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Rellena el formulario con un ejemplo bien estructurado para tu profesión. Luego cámbialo por tu caso real.</p>
                <div class="mt-3 flex gap-2">
                    <select id="template" v-model="selectedTemplate" :class="inputClass">
                        <option value="">Elige una plantilla…</option>
                        <option v-for="t in templates" :key="t.key" :value="t.key">{{ t.label }}</option>
                    </select>
                    <button type="button" @click="applyTemplate" :disabled="!selectedTemplate" class="btn-primary shrink-0 disabled:opacity-50 disabled:cursor-not-allowed">Usar</button>
                </div>
            </div>

            <form @submit.prevent="submit" class="space-y-8">

                <!-- Sección 1: Categorización -->
                <div class="bg-white dark:bg-gray-800/60 rounded-2xl border border-gray-100 dark:border-gray-700 p-6 space-y-5">
                    <h2 class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Categorización</h2>

                    <!-- Profession -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5">Profesión <span class="text-red-400">*</span></label>
                        <select v-model="form.profession_id" :class="inputClass">
                            <option value="" disabled>Selecciona una profesión…</option>
                            <option v-for="p in professions" :key="p.id" :value="p.id">{{ p.name }}</option>
                        </select>
                        <p v-if="form.errors.profession_id" class="mt-1.5 text-xs text-red-500">{{ form.errors.profession_id }}</p>
                    </div>

                    <!-- Resource type -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Tipo <span class="text-red-400">*</span></label>
                        <div class="grid grid-cols-3 gap-2">
                            <label
                                v-for="opt in resourceTypeOptions"
                                :key="opt.value"
                                :class="[
                                    'flex flex-col items-center gap-1.5 p-3 rounded-xl border cursor-pointer transition-all text-center',
                                    form.resource_type === opt.value
                                        ? 'border-brand-400 bg-brand-50 dark:bg-brand-900/30 dark:border-brand-500'
                                        : 'border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 hover:border-gray-300 dark:hover:border-gray-500'
                                ]"
                            >
                                <input type="radio" :value="opt.value" v-model="form.resource_type" class="sr-only" />
                                <span class="text-xl">{{ opt.icon }}</span>
                                <span class="text-xs font-semibold" :class="form.resource_type === opt.value ? 'text-brand-700 dark:text-brand-300' : 'text-gray-700 dark:text-gray-300'">{{ opt.label }}</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500 leading-tight">{{ opt.desc }}</span>
                            </label>
                        </div>
                    </div>

                    <!-- Tool -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Herramienta <span class="text-red-400">*</span></label>
                        <div class="flex flex-wrap gap-2">
                            <button
                                v-for="t in tools"
                                :key="t"
                                type="button"
                                @click="form.tool_name = t"
                                :class="[
                                    'px-3.5 py-1.5 rounded-lg text-sm font-medium border transition-all',
                                    form.tool_name === t
                                        ? 'bg-brand-600 text-white border-brand-600 shadow-sm'
                                        : 'bg-white dark:bg-gray-700 border-gray-200 dark:border-gray-600 text-gray-600 dark:text-gray-300 hover:border-brand-300 dark:hover:border-brand-500'
                                ]"
                            >{{ t }}</button>
                        </div>
                        <p v-if="form.errors.tool_name" class="mt-1.5 text-xs text-red-500">{{ form.errors.tool_name }}</p>
                    </div>

                    <!-- Difficulty -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Dificultad <span class="text-red-400">*</span></label>
                        <div class="grid grid-cols-3 gap-2">
                            <label
                                v-for="opt in difficultyOptions"
                                :key="opt.value"
                                :class="[
                                    'flex flex-col items-center gap-1.5 p-3 rounded-xl border cursor-pointer transition-all text-center',
                                    form.difficulty === opt.value
                                        ? 'border-brand-400 bg-brand-50 dark:bg-brand-900/30 dark:border-brand-500'
                                        : 'border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 hover:border-gray-300 dark:hover:border-gray-500'
                                ]"
                            >
                                <input type="radio" :value="opt.value" v-model="form.difficulty" class="sr-only" />
                                <span class="text-xl">{{ opt.icon }}</span>
                                <span class="text-xs font-semibold" :class="form.difficulty === opt.value ? 'text-brand-700 dark:text-brand-300' : 'text-gray-700 dark:text-gray-300'">{{ opt.label }}</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500 leading-tight">{{ opt.desc }}</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Sección 2: Contenido -->
                <div class="bg-white dark:bg-gray-800/60 rounded-2xl border border-gray-100 dark:border-gray-700 p-6 space-y-5">
                    <h2 class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Contenido</h2>

                    <!-- Title -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5">Título <span class="text-red-400">*</span></label>
                        <input
                            v-model="form.title"
                            type="text"
                            placeholder="Ej: Genera 10 variaciones de copy para Facebook Ads"
                            maxlength="200"
                            :class="inputClass"
                        />
                        <div class="flex justify-between mt-1.5">
                            <p v-if="form.errors.title" class="text-xs text-red-500">{{ form.errors.title }}</p>
                            <p class="text-xs text-gray-400 dark:text-gray-500 ml-auto">{{ form.title.length }}/200</p>
                        </div>
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5">Descripción <span class="text-red-400">*</span></label>
                        <textarea
                            v-model="form.description"
                            rows="3"
                            placeholder="¿Qué hace esta skill y cuándo usarla?"
                            maxlength="1000"
                            :class="inputClass + ' resize-none'"
                        />
                        <div class="flex justify-between mt-1.5">
                            <p v-if="form.errors.description" class="text-xs text-red-500">{{ form.errors.description }}</p>
                            <p class="text-xs text-gray-400 dark:text-gray-500 ml-auto">{{ form.description.length }}/1000</p>
                        </div>
                    </div>

                    <!-- Prompt content -->
                    <div>
                        <div class="flex items-baseline justify-between mb-1.5">
                            <label class="text-sm font-medium text-gray-700 dark:text-gray-300">Prompt / Workflow <span class="text-red-400">*</span></label>
                            <span class="text-xs text-gray-400 dark:text-gray-500">Usa [TEXTO EN MAYÚSCULAS] para campos variables</span>
                        </div>
                        <textarea
                            v-model="form.prompt_content"
                            rows="12"
                            placeholder="Escribe aquí el prompt completo o el workflow paso a paso…"
                            :class="inputClass + ' font-mono resize-y'"
                        />
                        <p v-if="form.errors.prompt_content" class="mt-1.5 text-xs text-red-500">{{ form.errors.prompt_content }}</p>
                    </div>
                </div>

                <!-- Sección 3: Extras -->
                <div class="bg-white dark:bg-gray-800/60 rounded-2xl border border-gray-100 dark:border-gray-700 p-6 space-y-5">
                    <h2 class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Detalles adicionales</h2>

                    <!-- Estimated minutes -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5">
                            Tiempo estimado
                            <span class="text-gray-400 dark:text-gray-500 font-normal ml-1">(minutos, opcional)</span>
                        </label>
                        <input
                            v-model="form.estimated_minutes"
                            type="number"
                            min="1"
                            max="480"
                            placeholder="Ej: 5"
                            :class="inputClass"
                        />
                        <p v-if="form.errors.estimated_minutes" class="mt-1.5 text-xs text-red-500">{{ form.errors.estimated_minutes }}</p>
                    </div>

                    <!-- Use case -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5">
                            Caso de uso real
                            <span class="text-gray-400 dark:text-gray-500 font-normal ml-1">(opcional)</span>
                        </label>
                        <textarea
                            v-model="form.use_case"
                            rows="2"
                            placeholder="¿Cuándo usas esto exactamente? Ej: Al iniciar una campaña de lanzamiento…"
                            maxlength="500"
                            :class="inputClass + ' resize-none'"
                        />
                    </div>
                </div>

                <!-- Checklist de calidad -->
                <div class="rounded-2xl border border-gray-100 dark:border-gray-700 p-5">
                    <div class="flex items-center justify-between">
                        <h2 class="text-sm font-semibold text-gray-900 dark:text-gray-100">Antes de enviar</h2>
                        <span class="text-xs font-medium tabular-nums" :class="checklistScore === checklist.length ? 'text-green-600 dark:text-green-400' : 'text-gray-400'">{{ checklistScore }}/{{ checklist.length }}</span>
                    </div>
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Son los criterios con los que revisamos cada skill. No son obligatorios, pero las que los cumplen se aprueban antes.</p>
                    <ul class="mt-3 space-y-1.5 text-sm">
                        <li v-for="item in checklist" :key="item.label" class="flex items-start gap-2" :class="item.ok ? 'text-gray-700 dark:text-gray-300' : 'text-gray-400 dark:text-gray-500'">
                            <span class="mt-0.5 w-4 text-center" :class="item.ok ? 'text-green-500' : 'text-gray-300 dark:text-gray-600'" aria-hidden="true">{{ item.ok ? '✓' : '○' }}</span>
                            <span>{{ item.label }}</span>
                        </li>
                    </ul>
                </div>

                <!-- Submit -->
                <div class="flex items-center gap-4">
                    <button
                        type="submit"
                        :disabled="form.processing"
                        class="btn-primary px-8 py-2.5 disabled:opacity-50 disabled:cursor-not-allowed"
                    >
                        <span v-if="form.processing" class="flex items-center gap-2">
                            <svg class="animate-spin w-4 h-4" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/>
                            </svg>
                            Publicando…
                        </span>
                        <span v-else>Enviar skill</span>
                    </button>
                    <p class="text-xs text-gray-400 dark:text-gray-500">La revisaremos antes de publicarla y te avisaremos por email.</p>
                </div>

            </form>
        </div>
    </AppLayout>
</template>
