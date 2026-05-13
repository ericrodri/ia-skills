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
})

function submit() {
    form.post(route('skills.store'))
}

const difficultyOptions = [
    { value: 'beginner', label: 'Principiante', desc: 'Fácil de implementar' },
    { value: 'intermediate', label: 'Intermedio', desc: 'Requiere algo de práctica' },
    { value: 'advanced', label: 'Avanzado', desc: 'Para usuarios expertos' },
]
</script>

<template>
    <Head>
        <title>Compartir skill — ia-skills</title>
    </Head>

    <AppLayout>
        <div class="max-w-2xl mx-auto px-4 sm:px-6 py-12">
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Compartir una skill</h1>
                <p class="mt-1 text-gray-500 dark:text-gray-400 dark:text-gray-500 text-sm">Ayuda a la comunidad compartiendo un workflow o prompt que te funciona en tu trabajo.</p>
            </div>

            <form @submit.prevent="submit" class="space-y-6">
                <!-- Profession -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5">Profesión *</label>
                    <select v-model="form.profession_id" class="w-full rounded-xl border border-gray-200 dark:border-gray-700 px-4 py-2.5 text-sm focus:border-brand-400 focus:ring-2 focus:ring-brand-100 outline-none transition-colors">
                        <option value="">Selecciona una profesión</option>
                        <option v-for="p in professions" :key="p.id" :value="p.id">{{ p.name }}</option>
                    </select>
                    <p v-if="form.errors.profession_id" class="mt-1 text-xs text-red-500">{{ form.errors.profession_id }}</p>
                </div>

                <!-- Title -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5">Título *</label>
                    <input
                        v-model="form.title"
                        type="text"
                        placeholder="Ej: Genera 10 variaciones de copy para Facebook Ads"
                        maxlength="200"
                        class="w-full rounded-xl border border-gray-200 dark:border-gray-700 px-4 py-2.5 text-sm focus:border-brand-400 focus:ring-2 focus:ring-brand-100 outline-none transition-colors"
                    />
                    <div class="flex justify-between mt-1">
                        <p v-if="form.errors.title" class="text-xs text-red-500">{{ form.errors.title }}</p>
                        <p class="text-xs text-gray-400 dark:text-gray-500 ml-auto">{{ form.title.length }}/200</p>
                    </div>
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5">Descripción *</label>
                    <textarea
                        v-model="form.description"
                        rows="2"
                        placeholder="¿Qué hace esta skill y cuándo usarla? (máx. 1000 caracteres)"
                        maxlength="1000"
                        class="w-full rounded-xl border border-gray-200 dark:border-gray-700 px-4 py-2.5 text-sm focus:border-brand-400 focus:ring-2 focus:ring-brand-100 outline-none resize-none transition-colors"
                    />
                    <p v-if="form.errors.description" class="mt-1 text-xs text-red-500">{{ form.errors.description }}</p>
                </div>

                <!-- Tool -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5">Herramienta *</label>
                    <div class="flex flex-wrap gap-2">
                        <button
                            v-for="t in tools"
                            :key="t"
                            type="button"
                            @click="form.tool_name = t"
                            :class="['px-3 py-1.5 rounded-lg text-sm border transition-colors', form.tool_name === t ? 'bg-brand-600 text-white border-brand-600' : 'border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-400 dark:text-gray-500 hover:border-brand-300']"
                        >{{ t }}</button>
                    </div>
                    <p v-if="form.errors.tool_name" class="mt-1 text-xs text-red-500">{{ form.errors.tool_name }}</p>
                </div>

                <!-- Prompt content -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5">Prompt / Workflow *</label>
                    <p class="text-xs text-gray-400 dark:text-gray-500 mb-2">Usa [TEXTO EN MAYÚSCULAS] para marcar los campos que el usuario debe rellenar.</p>
                    <textarea
                        v-model="form.prompt_content"
                        rows="10"
                        placeholder="Escribe aquí el prompt completo..."
                        class="w-full rounded-xl border border-gray-200 dark:border-gray-700 px-4 py-3 text-sm font-mono focus:border-brand-400 focus:ring-2 focus:ring-brand-100 outline-none resize-y transition-colors"
                    />
                    <p v-if="form.errors.prompt_content" class="mt-1 text-xs text-red-500">{{ form.errors.prompt_content }}</p>
                </div>

                <!-- Difficulty + Time -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5">Dificultad *</label>
                        <div class="space-y-2">
                            <label
                                v-for="opt in difficultyOptions"
                                :key="opt.value"
                                :class="['flex items-center gap-3 p-3 rounded-xl border cursor-pointer transition-colors', form.difficulty === opt.value ? 'border-brand-400 bg-brand-50' : 'border-gray-200 dark:border-gray-700 hover:border-gray-300 dark:border-gray-600']"
                            >
                                <input type="radio" :value="opt.value" v-model="form.difficulty" class="text-brand-600" />
                                <div>
                                    <p class="text-sm font-medium text-gray-800 dark:text-gray-200">{{ opt.label }}</p>
                                    <p class="text-xs text-gray-400 dark:text-gray-500">{{ opt.desc }}</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5">Tiempo estimado (minutos)</label>
                        <input
                            v-model="form.estimated_minutes"
                            type="number"
                            min="1"
                            max="480"
                            placeholder="Ej: 5"
                            class="w-full rounded-xl border border-gray-200 dark:border-gray-700 px-4 py-2.5 text-sm focus:border-brand-400 focus:ring-2 focus:ring-brand-100 outline-none transition-colors"
                        />
                        <p v-if="form.errors.estimated_minutes" class="mt-1 text-xs text-red-500">{{ form.errors.estimated_minutes }}</p>
                    </div>
                </div>

                <!-- Use case -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1.5">Caso de uso real <span class="text-gray-400 dark:text-gray-500 font-normal">(opcional)</span></label>
                    <textarea
                        v-model="form.use_case"
                        rows="2"
                        placeholder="¿Cuándo usas esto exactamente? Ej: Al iniciar una campaña de lanzamiento..."
                        maxlength="500"
                        class="w-full rounded-xl border border-gray-200 dark:border-gray-700 px-4 py-2.5 text-sm focus:border-brand-400 focus:ring-2 focus:ring-brand-100 outline-none resize-none transition-colors"
                    />
                </div>

                <!-- Submit -->
                <div class="flex items-center gap-4 pt-2">
                    <button
                        type="submit"
                        :disabled="form.processing"
                        class="btn-primary px-6 py-2.5 disabled:opacity-50"
                    >
                        {{ form.processing ? 'Publicando...' : 'Publicar skill' }}
                    </button>
                    <p class="text-xs text-gray-400 dark:text-gray-500">Se publicará inmediatamente y será visible para la comunidad.</p>
                </div>
            </form>
        </div>
    </AppLayout>
</template>
