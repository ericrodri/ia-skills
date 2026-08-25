<script setup>
import { ref, computed } from 'vue'
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
    hasApiToken: { type: Boolean, default: false },
    apiTokenPrefix: { type: String, default: null },
    apiTokenLastUsedAt: { type: String, default: null },
    // Solo llega en la respuesta inmediata a "generar": después ya no existe en claro.
    plainTextApiToken: { type: String, default: null },
})

const copied = ref(false)

const endpointUrl = computed(() =>
    props.plainTextApiToken
        ? `https://ia-skills.com/api/v1/saved-skills?api_key=${props.plainTextApiToken}`
        : null
)

const lastUsedLabel = computed(() => {
    if (!props.apiTokenLastUsedAt) return 'Sin usar todavía'
    return `Último uso: ${new Date(props.apiTokenLastUsedAt).toLocaleString('es-ES')}`
})

const generateForm = useForm({})
const revokeForm = useForm({})

function generate() {
    if (props.hasApiToken && !confirm('Al regenerar, la clave actual dejará de funcionar. ¿Continuar?')) {
        return
    }
    generateForm.post(route('profile.api-token.generate'), { preserveScroll: true })
}

function revoke() {
    if (confirm('¿Seguro que quieres revocar la API key? Dejarán de funcionar todas las integraciones que la usen.')) {
        revokeForm.delete(route('profile.api-token.revoke'), { preserveScroll: true })
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
            <!-- Clave recién generada: única oportunidad de copiarla -->
            <div v-if="plainTextApiToken" class="space-y-4">
                <div class="rounded-lg bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-700 px-4 py-3">
                    <p class="text-sm font-medium text-amber-800 dark:text-amber-300">
                        Copia esta URL ahora: no volveremos a mostrarla.
                    </p>
                    <p class="mt-1 text-xs text-amber-700 dark:text-amber-400">
                        Solo guardamos un hash de la clave, así que no podemos recuperarla. Si la pierdes, genera otra.
                    </p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Endpoint</label>
                    <div class="flex items-center gap-2">
                        <div class="flex-1 rounded-lg border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 px-3 py-2 font-mono text-xs text-gray-700 dark:text-gray-300 overflow-x-auto">
                            {{ endpointUrl }}
                        </div>
                        <button type="button" @click="copyEndpoint" class="shrink-0 btn-secondary text-sm px-3 py-2">
                            {{ copied ? '✓ Copiado' : 'Copiar' }}
                        </button>
                    </div>
                </div>

                <div class="rounded-lg bg-brand-50 dark:bg-brand-900/20 border border-brand-100 dark:border-brand-800 px-4 py-3 text-sm text-brand-800 dark:text-brand-300 space-y-1">
                    <p class="font-medium">¿Cómo usarlo?</p>
                    <p>Pégale esta URL a cualquier IA (Claude, ChatGPT, Gemini…) con el mensaje:</p>
                    <p class="font-mono text-xs bg-white dark:bg-gray-900 rounded px-2 py-1 mt-1 text-gray-700 dark:text-gray-300">
                        "Fetch this URL and show me my saved skills in a summary"
                    </p>
                </div>
            </div>

            <!-- Hay una clave activa, pero ya no es visible -->
            <div v-else-if="hasApiToken" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Clave activa</label>
                    <div class="rounded-lg border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 px-3 py-2 font-mono text-xs text-gray-700 dark:text-gray-300">
                        {{ apiTokenPrefix ? `${apiTokenPrefix}${'•'.repeat(40)}` : '••••••••' }}
                    </div>
                    <p class="mt-1.5 text-xs text-gray-400 dark:text-gray-500">{{ lastUsedLabel }}</p>
                </div>

                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Por seguridad solo guardamos un hash de tu clave. Si ya no la tienes a mano, genera una nueva.
                </p>

                <div class="flex items-center gap-4 pt-1">
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

            <!-- Sin clave -->
            <div v-else>
                <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                    No tienes ninguna API key activa. Genera una para poder usar el endpoint.
                </p>
                <button @click="generate" :disabled="generateForm.processing" class="btn-primary">
                    Generar API key
                </button>
            </div>
        </div>
    </section>
</template>
