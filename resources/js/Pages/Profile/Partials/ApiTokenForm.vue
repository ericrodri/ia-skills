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

// Conector MCP (McpConnectorController). La forma recomendada es la dirección
// pública con inicio de sesión OAuth: Claude abre ia-skills, la persona da
// permiso y no hay que copiar ninguna clave. La clave en la ruta queda para
// herramientas que no admiten OAuth.
const publicUrl = `${origin}/api/mcp`
// Claude Code solo ofrece iniciar sesión si el servidor responde 401: por eso
// usa /cuenta, que lo exige.
const publicCommand = `claude mcp add --transport http ia-skills ${origin}/api/mcp/cuenta`
const keyUrl = computed(() => props.plainTextApiToken ? `${origin}/api/mcp/${props.plainTextApiToken}` : null)
const endpointUrl = computed(() => props.plainTextApiToken ? `${origin}/api/v1/saved-skills?api_key=${props.plainTextApiToken}` : null)

const lastUsedLabel = computed(() => {
    if (!props.apiTokenLastUsedAt) return 'Sin usar todavía'
    return `Último uso: ${new Date(props.apiTokenLastUsedAt).toLocaleString('es-ES')}`
})

const generateForm = useForm({})
const revokeForm = useForm({})

function generate() {
    if (props.hasApiToken && !confirm('Al generar una clave nueva, la actual y lo que la use dejarán de funcionar. ¿Continuar?')) {
        return
    }
    generateForm.post(route('profile.api-token.generate'), { preserveScroll: true })
}

function revoke() {
    if (confirm('¿Revocar la clave? Lo que la use dejará de funcionar. El conector con inicio de sesión no se ve afectado.')) {
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

        <div class="mt-6 space-y-5">
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Dirección del conector</label>
                <div class="flex items-center gap-2">
                    <div :class="boxClass">{{ publicUrl }}</div>
                    <button type="button" @click="copy('public', publicUrl)" class="shrink-0 btn-primary text-sm px-3 py-2">{{ copied === 'public' ? '✓ Copiada' : 'Copiar' }}</button>
                </div>
            </div>

            <div class="rounded-lg bg-brand-50 dark:bg-brand-900/20 border border-brand-100 dark:border-brand-800 px-4 py-3 text-sm text-brand-900 dark:text-brand-200 space-y-3">
                <div>
                    <p class="font-medium">En Claude (web o escritorio)</p>
                    <ol class="mt-1 list-decimal list-inside space-y-0.5 text-brand-800 dark:text-brand-300">
                        <li>Abre <strong>Personalizar → Conectores</strong> (<a href="https://claude.ai/customize/connectors" target="_blank" rel="noopener" class="underline">claude.ai/customize/connectors</a>), pulsa <strong>Añadir</strong> y elige <strong>conector personalizado</strong>.</li>
                        <li>Ponle de nombre <strong>ia-skills</strong> y pega la dirección de arriba.</li>
                        <li>En la autenticación, elige <strong>iniciar sesión</strong>. Claude te traerá a ia-skills para que le des permiso. Si solo quieres el catálogo público, elige <strong>sin inicio de sesión</strong>.</li>
                        <li>En una conversación, pulsa el <strong>+</strong> de abajo a la izquierda, entra en <strong>Conectores</strong> y actívalo.</li>
                    </ol>
                </div>
                <div>
                    <p class="font-medium">En Claude Code</p>
                    <div class="mt-1 flex items-center gap-2">
                        <div :class="boxClass">{{ publicCommand }}</div>
                        <button type="button" @click="copy('code', publicCommand)" class="shrink-0 btn-secondary text-sm px-3 py-2">{{ copied === 'code' ? '✓ Copiado' : 'Copiar' }}</button>
                    </div>
                    <p class="mt-1 text-xs text-brand-700 dark:text-brand-400">Después, en Claude Code, escribe <code>/mcp</code> y elige ia-skills para iniciar sesión.</p>
                </div>
                <p class="text-xs text-brand-700 dark:text-brand-400">Paso a paso y ejemplos de qué pedirle: <a href="/guias/conectar-ia-skills-a-claude" class="underline">cómo conectar ia-skills a Claude</a>.</p>
            </div>

            <!-- Clave personal: para herramientas sin OAuth -->
            <details class="group rounded-lg border border-gray-200 dark:border-gray-700 px-4 py-3" :open="!!plainTextApiToken">
                <summary class="cursor-pointer text-sm font-medium text-gray-700 dark:text-gray-300">Clave personal, para herramientas que no permiten iniciar sesión</summary>

                <div class="mt-4">
                    <!-- Clave recién generada: única oportunidad de copiarla -->
                    <div v-if="plainTextApiToken" class="space-y-4">
                        <div class="rounded-lg bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-700 px-4 py-3">
                            <p class="text-sm font-medium text-amber-800 dark:text-amber-300">Copia estas direcciones ahora: no volveremos a mostrarlas.</p>
                            <p class="mt-1 text-xs text-amber-700 dark:text-amber-400">Llevan tu clave: quien la tenga puede leer tus skills privadas. No la compartas. Si se filtra, genera otra y la anterior deja de funcionar.</p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Conector con tu clave</label>
                            <div class="flex items-center gap-2">
                                <div :class="boxClass">{{ keyUrl }}</div>
                                <button type="button" @click="copy('key', keyUrl)" class="shrink-0 btn-secondary text-sm px-3 py-2">{{ copied === 'key' ? '✓ Copiada' : 'Copiar' }}</button>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Tus skills guardadas en JSON</label>
                            <div class="flex items-center gap-2">
                                <div :class="boxClass">{{ endpointUrl }}</div>
                                <button type="button" @click="copy('endpoint', endpointUrl)" class="shrink-0 btn-secondary text-sm px-3 py-2">{{ copied === 'endpoint' ? '✓ Copiado' : 'Copiar' }}</button>
                            </div>
                        </div>
                    </div>

                    <!-- Hay una clave activa, pero ya no es visible -->
                    <div v-else-if="hasApiToken" class="space-y-3">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Clave activa</label>
                            <div class="rounded-lg border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 px-3 py-2 font-mono text-xs text-gray-700 dark:text-gray-300">
                                {{ apiTokenPrefix ? `${apiTokenPrefix}${'•'.repeat(40)}` : '••••••••' }}
                            </div>
                            <p class="mt-1.5 text-xs text-gray-400 dark:text-gray-500">{{ lastUsedLabel }}</p>
                        </div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Solo guardamos un resumen cifrado de tu clave, así que no podemos volver a enseñártela. Si no la tienes, genera una nueva.</p>
                        <div class="flex items-center gap-4">
                            <button @click="generate" :disabled="generateForm.processing" class="text-sm text-brand-600 dark:text-brand-400 hover:underline">Generar clave nueva</button>
                            <button @click="revoke" :disabled="revokeForm.processing" class="text-sm text-red-500 hover:underline">Revocar</button>
                        </div>
                    </div>

                    <!-- Sin clave -->
                    <div v-else>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Algunas herramientas no permiten iniciar sesión. Para ellas, genera una clave: te daremos una dirección del conector que ya la lleva.</p>
                        <button @click="generate" :disabled="generateForm.processing" class="btn-secondary text-sm">Generar clave</button>
                    </div>
                </div>
            </details>
        </div>
    </section>
</template>
