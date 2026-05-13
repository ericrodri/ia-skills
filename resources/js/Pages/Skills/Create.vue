<script setup>
import { Head, useForm } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

const props = defineProps({
    professions: Array,
    tools: Array,
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
                        <span v-else>Publicar skill</span>
                    </button>
                    <p class="text-xs text-gray-400 dark:text-gray-500">Se publicará y será visible para la comunidad.</p>
                </div>

            </form>
        </div>
    </AppLayout>
</template>
