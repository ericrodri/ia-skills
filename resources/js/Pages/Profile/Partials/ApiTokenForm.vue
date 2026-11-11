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

const origin = window.location.origin

// Conector MCP remoto (McpConnectorController): la clave va en la ruta porque
// los conectores de Claude no permiten añadir cabeceras.
const connectorUrl = computed(() => props.plainTextApiToken ? `${origin}/api/mcp/${props.plainTextApiToken}` : null)
const claudeCodeCommand = computed(() => connectorUrl.value ? `claude mcp add --transport http ia-skills ${connectorUrl.value}` : null)
const endpointUrl = computed(() => props.plainTextApiToken ? `${origin}/api/v1/saved-skills?api_key=${props.plainTextApiToken}` : null)

const lastUsedLabel = computed(() => {
    if (!props.apiTokenLastUsedAt) return 'Sin usar todavía'
    return `Último uso: ${new Date(props.apiTokenLastUsedAt).toLocaleString('es-ES')}`
})

const generateForm = useForm({})
const revokeForm = useForm({})

function generate() {
    if (props.hasApiToken && !confirm('Al generar una clave nueva, la actual y el conector que la usa dejarán de funcionar: tendrás que volver a añadirlo en Claude. ¿Continuar?')) {
        return
    }
    generateForm.post(route('profile.api-token.generate'), { preserveScroll: true })
}

function revoke() {
    if (confirm('¿Revocar la clave? El conector de Claude y cualquier integración que la use dejarán de funcionar.')) {
        revokeForm.delete(route('profile.api-token.revoke'), { preserveScroll: true })
    }
}

const copied = ref('')
function copy(kind, text) {
    if (!text) return
    navigator.clipboard.writeText(text)
    copied.value = kind
    setTimeout(() => copied.value = '', 2000)
}

const boxClass = 'flex-1 min-w-0 rounded-lg border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 px-3 py-2 font-mono text-xs text-gray-700 dark:text-gray-300 overflow-x-auto whitespace-nowrap'
</script>

<template>
    <section id="conector" class="scroll-mt-20">
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Conecta Claude con tus skills</h2>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Añade ia-skills como conector en Claude y pídele tus prompts sin salir de la conversación: «búscame mi prompt de contratos», «usa mi skill de propuestas». Ve tus skills privadas y el catálogo público. Solo lee: no puede cambiar ni borrar nada.
            </p>
        </header>

        <div class="mt-6">
            <!-- Clave recién generada: única oportunidad de copiarla -->
            <div v-if="plainTextApiToken" class="space-y-5">
                <div class="rounded-lg bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-700 px-4 py-3">
                    <p class="text-sm font-medium text-amber-800 dark:text-amber-300">Copia tu dirección ahora: no volveremos a mostrarla.</p>
                    <p class="mt-1 text-xs text-amber-700 dark:text-amber-400">Lleva tu clave personal: quien la tenga puede leer tus skills privadas. No la compartas. Si la pierdes o se filtra, genera otra y la anterior deja de funcionar.</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Dirección del conector</label>
                    <div class="flex items-center gap-2">
                        <div :class="boxClass">{{ connectorUrl }}</div>
                        <button type="button" @click="copy('connector', connectorUrl)" class="shrink-0 btn-primary text-sm px-3 py-2">{{ copied === 'connector' ? '✓ Copiada' : 'Copiar' }}</button>
                    </div>
                </div>

                <div class="rounded-lg bg-brand-50 dark:bg-brand-900/20 border border-brand-100 dark:border-brand-800 px-4 py-3 text-sm text-brand-900 dark:text-brand-200 space-y-3">
                    <div>
                        <p class="font-medium">En Claude (web, escritorio o móvil)</p>
                        <ol class="mt-1 list-decimal list-inside space-y-0.5 text-brand-800 dark:text-brand-300">
                            <li>Abre <strong>Ajustes → Conectores</strong> y pulsa <strong>Añadir conector personalizado</strong>.</li>
                            <li>Ponle de nombre <strong>ia-skills</strong> y pega la dirección de arriba. No hace falta nada más.</li>
                            <li>En una conversación, actívalo desde el botón de herramientas y pídele tus skills.</li>
                        </ol>
                    </div>
                    <div>
                        <p class="font-medium">En Claude Code</p>
                        <div class="mt-1 flex items-center gap-2">
                            <div :class="boxClass">{{ claudeCodeCommand }}</div>
                            <button type="button" @click="copy('code', claudeCodeCommand)" class="shrink-0 btn-secondary text-sm px-3 py-2">{{ copied === 'code' ? '✓ Copiado' : 'Copiar' }}</button>
                        </div>
                    </div>
                </div>

                <details class="text-sm">
                    <summary class="cursor-pointer text-gray-500 dark:text-gray-400">Otras integraciones: tus skills guardadas en JSON</summary>
                    <div class="mt-2 flex items-center gap-2">
                        <div :class="boxClass">{{ endpointUrl }}</div>
                        <button type="button" @click="copy('endpoint', endpointUrl)" class="shrink-0 btn-secondary text-sm px-3 py-2">{{ copied === 'endpoint' ? '✓ Copiado' : 'Copiar' }}</button>
                    </div>
                </details>
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
                    Por seguridad solo guardamos un resumen cifrado de tu clave, así que no podemos volver a enseñarte la dirección del conector. Si no la tienes a mano, genera una clave nueva: tendrás que volver a añadir el conector en Claude.
                </p>

                <div class="flex items-center gap-4 pt-1">
                    <button @click="generate" :disabled="generateForm.processing" class="text-sm text-brand-600 dark:text-brand-400 hover:underline">Generar clave nueva</button>
                    <button @click="revoke" :disabled="revokeForm.processing" class="text-sm text-red-500 hover:underline">Revocar</button>
                </div>
            </div>

            <!-- Sin clave -->
            <div v-else>
                <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">Para crear tu conector necesitas una clave personal. Se genera al momento.</p>
                <button @click="generate" :disabled="generateForm.processing" class="btn-primary">Crear mi conector</button>
            </div>
        </div>
    </section>
</template>
