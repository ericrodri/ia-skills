<script setup>
import { ref, computed } from 'vue'
import { useForm, usePage } from '@inertiajs/vue3'

const props = defineProps({
    apiToken: { type: String, default: null },
})

const page = usePage()
const copied = ref(false)
const showToken = ref(false)

const endpointUrl = computed(() =>
    props.apiToken
        ? `https://ia-skills.com/api/v1/saved-skills?api_key=${props.apiToken}`
        : null
)

const generateForm = useForm({})
const revokeForm = useForm({})

function generate() {
    generateForm.post(route('profile.api-token.generate'))
}

function revoke() {
    if (confirm('¿Seguro que quieres revocar la API key? Dejarán de funcionar todas las integraciones que la usen.')) {
        revokeForm.delete(route('profile.api-token.revoke'))
    }
}

function copyEndpoint() {
    if (!endpointUrl.value) return
    navigator.clipboard.writeText(endpointUrl.value)
    copied.value = true
    setTimeout(() => copied.value = false, 2000)
}
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">API de skills guardadas</h2>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Genera una clave para acceder a tus skills guardadas en formato JSON desde cualquier IA.
            </p>
        </header>

        <div class="mt-6">
            <!-- Sin token -->
            <div v-if="!apiToken">
                <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                    No tienes ninguna API key activa. Genera una para poder usar el endpoint.
                </p>
                <button
                    @click="generate"
                    :disabled="generateForm.processing"
                    class="btn-primary"
                >
                    Generar API key
                </button>
            </div>

            <!-- Con token -->
            <div v-else class="space-y-4">
                <!-- Endpoint URL -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                        Endpoint
                    </label>
                    <div class="flex items-center gap-2">
                        <div class="flex-1 flex items-center gap-2 rounded-lg border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 px-3 py-2 font-mono text-xs text-gray-700 dark:text-gray-300 overflow-x-auto">
                            <span v-if="showToken">{{ endpointUrl }}</span>
                            <span v-else>https://ia-skills.com/api/v1/saved-skills?api_key=••••••••</span>
                        </div>
                        <button
                            type="button"
                            @click="showToken = !showToken"
                            class="shrink-0 text-sm text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 transition-colors px-2 py-2"
                            :title="showToken ? 'Ocultar' : 'Mostrar'"
                        >
                            {{ showToken ? '🙈' : '👁' }}
                        </button>
                        <button
                            type="button"
                            @click="copyEndpoint"
                            class="shrink-0 btn-secondary text-sm px-3 py-2"
                        >
                            {{ copied ? '✓ Copiado' : 'Copiar' }}
                        </button>
                    </div>
                </div>

                <!-- Instrucciones rápidas -->
                <div class="rounded-lg bg-brand-50 dark:bg-brand-900/20 border border-brand-100 dark:border-brand-800 px-4 py-3 text-sm text-brand-800 dark:text-brand-300 space-y-1">
                    <p class="font-medium">¿Cómo usarlo?</p>
                    <p>Pégale esta URL a cualquier IA (Claude, ChatGPT, Gemini…) con el mensaje:</p>
                    <p class="font-mono text-xs bg-white dark:bg-gray-900 rounded px-2 py-1 mt-1 text-gray-700 dark:text-gray-300">
                        "Fetch this URL and show me my saved skills in a summary"
                    </p>
                </div>

                <!-- Acciones -->
                <div class="flex items-center gap-4 pt-2">
                    <button
                        @click="generate"
                        :disabled="generateForm.processing"
                        class="text-sm text-brand-600 dark:text-brand-400 hover:underline"
                    >
                        Regenerar clave
                    </button>
                    <button
                        @click="revoke"
                        :disabled="revokeForm.processing"
                        class="text-sm text-red-500 hover:underline"
                    >
                        Revocar
                    </button>
                </div>
            </div>
        </div>
    </section>
</template>
