<script setup>
import { Head, Link, router, useForm } from '@inertiajs/vue3'
import { ref } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'

const props = defineProps({
    skills: Object,
    counts: Object,
    filters: Object,
})

const rejectingSkill = ref(null)
const rejectForm = useForm({ reason: '' })

function approve(skill) {
    router.post(route('admin.skills.approve', skill.id), {}, {
        preserveScroll: true,
    })
}

function openReject(skill) {
    rejectingSkill.value = skill
    rejectForm.reason = ''
}

function submitReject() {
    rejectForm.post(route('admin.skills.reject', rejectingSkill.value.id), {
        preserveScroll: true,
        onSuccess: () => {
            rejectingSkill.value = null
            rejectForm.reset()
        },
    })
}

function setStatus(status) {
    router.get(route('admin.skills.index'), { status }, { preserveState: true })
}

const statusLabels = {
    draft: 'Pendientes de revisión',
    published: 'Publicadas',
    rejected: 'Rechazadas',
}

const difficultyLabel = { beginner: 'Principiante', intermediate: 'Intermedio', advanced: 'Avanzado' }
</script>

<template>
    <Head><title>Moderación de Skills — Admin</title></Head>

    <AppLayout>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-10">

            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Panel de moderación</h1>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Revisa y aprueba las skills enviadas por la comunidad.</p>
            </div>

            <!-- Tabs de estado -->
            <div class="flex gap-2 mb-6 border-b border-gray-200 dark:border-gray-700">
                <button
                    v-for="(label, key) in statusLabels"
                    :key="key"
                    @click="setStatus(key)"
                    :class="[
                        'px-4 py-2.5 text-sm font-medium border-b-2 -mb-px transition-colors',
                        filters.status === key
                            ? 'border-brand-600 text-brand-600 dark:text-brand-400 dark:border-brand-400'
                            : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200'
                    ]"
                >
                    {{ label }}
                    <span class="ml-1.5 px-1.5 py-0.5 rounded-full text-xs font-semibold"
                        :class="filters.status === key ? 'bg-brand-100 text-brand-700 dark:bg-brand-900/40 dark:text-brand-300' : 'bg-gray-100 text-gray-500 dark:bg-gray-800 dark:text-gray-400'">
                        {{ counts[key] }}
                    </span>
                </button>
            </div>

            <!-- Lista de skills -->
            <div v-if="skills.data.length" class="flex flex-col gap-4">
                <div
                    v-for="skill in skills.data"
                    :key="skill.id"
                    class="bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 p-5"
                >
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex-1 min-w-0">
                            <!-- Meta -->
                            <div class="flex flex-wrap items-center gap-2 text-xs text-gray-400 dark:text-gray-500 mb-2">
                                <span class="font-medium text-brand-600 dark:text-brand-400">{{ skill.profession.name }}</span>
                                <span>·</span>
                                <span>{{ skill.tool_name }}</span>
                                <span>·</span>
                                <span>{{ difficultyLabel[skill.difficulty] }}</span>
                                <span>·</span>
                                <span>por <strong class="text-gray-600 dark:text-gray-300">{{ skill.author.name }}</strong> ({{ skill.author.email }})</span>
                                <span>·</span>
                                <span>{{ new Date(skill.created_at).toLocaleDateString('es-ES') }}</span>
                            </div>

                            <!-- Título -->
                            <h2 class="font-semibold text-gray-900 dark:text-gray-100 text-lg">{{ skill.title }}</h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400 line-clamp-2">{{ skill.description }}</p>

                            <!-- Prompt preview -->
                            <pre class="mt-3 bg-gray-50 dark:bg-gray-900 rounded-lg p-3 text-xs text-gray-700 dark:text-gray-300 line-clamp-4 overflow-hidden font-mono whitespace-pre-wrap">{{ skill.prompt_content }}</pre>

                            <!-- Razón de rechazo si existe -->
                            <div v-if="skill.rejection_reason" class="mt-3 p-3 bg-red-50 dark:bg-red-900/20 rounded-lg border border-red-200 dark:border-red-800">
                                <p class="text-xs font-semibold text-red-600 dark:text-red-400 mb-1">Motivo de rechazo:</p>
                                <p class="text-xs text-red-700 dark:text-red-300">{{ skill.rejection_reason }}</p>
                            </div>
                        </div>

                        <!-- Acciones -->
                        <div class="flex flex-col gap-2 shrink-0">
                            <Link
                                :href="route('skills.show', skill.slug)"
                                target="_blank"
                                class="px-3 py-1.5 text-xs font-medium rounded-lg border border-gray-200 dark:border-gray-600 text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors text-center"
                            >
                                Ver skill ↗
                            </Link>
                            <button
                                v-if="filters.status !== 'published'"
                                @click="approve(skill)"
                                class="px-3 py-1.5 text-xs font-semibold rounded-lg bg-green-600 hover:bg-green-700 text-white transition-colors"
                            >
                                ✓ Aprobar
                            </button>
                            <button
                                v-if="filters.status !== 'rejected'"
                                @click="openReject(skill)"
                                class="px-3 py-1.5 text-xs font-semibold rounded-lg bg-red-600 hover:bg-red-700 text-white transition-colors"
                            >
                                ✕ Rechazar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Empty state -->
            <div v-else class="text-center py-20 text-gray-400 dark:text-gray-500">
                <p class="text-4xl mb-3">{{ filters.status === 'draft' ? '🎉' : '📭' }}</p>
                <p class="text-lg font-medium">
                    {{ filters.status === 'draft' ? 'No hay skills pendientes de revisión.' : 'No hay skills en este estado.' }}
                </p>
            </div>

            <!-- Pagination -->
            <div v-if="skills.last_page > 1" class="mt-8 flex justify-center gap-2">
                <Link
                    v-for="link in skills.links"
                    :key="link.label"
                    :href="link.url || '#'"
                    :class="[
                        'px-3 py-1.5 rounded-lg text-sm border transition-colors',
                        link.active ? 'bg-brand-600 text-white border-brand-600' : 'border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-300 hover:border-brand-300',
                        !link.url ? 'opacity-40 pointer-events-none' : ''
                    ]"
                    v-html="link.label"
                />
            </div>
        </div>

        <!-- Modal de rechazo -->
        <Teleport to="body">
            <div v-if="rejectingSkill" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm">
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl w-full max-w-md p-6">
                    <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Rechazar skill</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                        Indica el motivo para que el autor pueda corregirla y volver a enviarla.
                    </p>
                    <p class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-3 bg-gray-50 dark:bg-gray-900 rounded-lg px-3 py-2">
                        "{{ rejectingSkill.title }}"
                    </p>
                    <textarea
                        v-model="rejectForm.reason"
                        rows="4"
                        placeholder="Ej: El prompt contiene código potencialmente malicioso. Por favor, revisa las secciones X e Y."
                        class="w-full rounded-xl border border-gray-200 dark:border-gray-600 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 px-4 py-3 text-sm focus:border-brand-400 focus:ring-2 focus:ring-brand-100 outline-none resize-none"
                    />
                    <p v-if="rejectForm.errors.reason" class="text-xs text-red-500 mt-1">{{ rejectForm.errors.reason }}</p>
                    <div class="flex gap-3 mt-4">
                        <button
                            @click="submitReject"
                            :disabled="rejectForm.processing || !rejectForm.reason.trim()"
                            class="flex-1 py-2.5 rounded-xl bg-red-600 hover:bg-red-700 disabled:opacity-50 text-white text-sm font-semibold transition-colors"
                        >
                            Confirmar rechazo
                        </button>
                        <button
                            @click="rejectingSkill = null"
                            class="flex-1 py-2.5 rounded-xl border border-gray-200 dark:border-gray-600 text-gray-600 dark:text-gray-300 text-sm font-medium hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors"
                        >
                            Cancelar
                        </button>
                    </div>
                </div>
            </div>
        </Teleport>
    </AppLayout>
</template>
