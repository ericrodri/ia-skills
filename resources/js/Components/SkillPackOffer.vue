<script setup>
import { ref } from 'vue'
import { useForm, usePage } from '@inertiajs/vue3'

// Oferta de un pack justo después de copiar el prompt, que es cuando la ficha
// acaba de demostrar que sirve. Recuadro en la página, nunca una ventana
// encima. Mismo alta con doble opt-in que ProfessionPackForm. Qué pack se
// ofrece lo decide el servidor (SkillController::packOffer): el del tema de
// la ficha (fotos, "tema:fotos:ficha") o el de su profesión ("pack:{slug}:ficha").
const props = defineProps({
    offer: { type: Object, required: true },
})

const emit = defineEmits(['close'])

const page = usePage()
const form = useForm({ email: '', website: '', source: props.offer.source })
const sent = ref(false)

function submit() {
    form.transform((data) => ({ ...data, _ft: page.props.formToken })).post(route('newsletter.subscribe'), {
        preserveScroll: true,
        preserveState: true,
        onSuccess: () => {
            sent.value = !page.props.flash?.error
            if (sent.value) {
                form.reset('email')
                remember('done')
            }
        },
    })
}

function close() {
    remember('closed')
    emit('close')
}

// El navegador puede no dejar guardar nada (modo privado): entonces la
// oferta vuelve a salir en la siguiente visita, sin más.
function remember(state) {
    try {
        localStorage.setItem('packOffer', JSON.stringify({ state, at: Date.now() }))
    } catch {}
}
</script>

<script>
const CLOSED_DAYS = 14

// Estado del módulo: sobrevive a la navegación entre fichas (Inertia no
// recarga la página), así que la oferta sale una sola vez por visita.
let offeredThisVisit = false

export function markPackOffered() {
    offeredThisVisit = true
}

// ¿Se puede mostrar? No dos veces en la misma visita, ni a quien ya se
// apuntó desde aquí, ni a quien la cerró hace menos de dos semanas.
export function packOfferAllowed() {
    if (offeredThisVisit) return false
    try {
        const saved = JSON.parse(localStorage.getItem('packOffer') || 'null')
        if (!saved) return true
        if (saved.state === 'done') return false
        return Date.now() - saved.at > CLOSED_DAYS * 86400000
    } catch {
        return true
    }
}
</script>

<template>
    <div class="mt-3 rounded-xl border border-brand-200 dark:border-brand-800/60 bg-brand-50 dark:bg-brand-900/10 p-4" role="region" aria-label="Pack de prompts gratis">
        <div class="flex items-start justify-between gap-3">
            <div class="min-w-0">
                <p class="text-sm font-semibold text-gray-900 dark:text-white">¿Te ha servido? {{ offer.headline }}</p>
                <p class="mt-0.5 text-xs text-gray-600 dark:text-gray-400">
                    En un PDF para guardar o imprimir. Te lo mandamos al confirmar tu email, junto con el resumen semanal de prompts nuevos.
                    Te das de baja con un clic.
                    <!-- Página Blade: <a>, no <Link> -->
                    <a :href="route('legal.privacy') + '#finalidades'" class="underline hover:text-gray-900 dark:hover:text-white">Privacidad</a>
                </p>
            </div>
            <button
                type="button"
                @click="close"
                class="shrink-0 -m-1 p-1 rounded text-gray-400 hover:text-gray-600 dark:hover:text-gray-200"
                aria-label="Cerrar"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
        <p v-if="sent" class="mt-3 text-sm font-medium text-green-700 dark:text-green-400" role="status">
            Revisa tu email: el enlace al pack llega al confirmar.
        </p>
        <form v-else @submit.prevent="submit" class="mt-3 flex flex-col gap-1">
            <div class="flex gap-2">
                <label for="pack-offer-email" class="sr-only">Tu email</label>
                <input
                    id="pack-offer-email"
                    v-model="form.email"
                    type="email"
                    required
                    autocomplete="email"
                    placeholder="tu@email.com"
                    class="flex-1 min-w-0 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-3 py-2 text-sm text-gray-900 dark:text-gray-100 placeholder-gray-400 focus:border-brand-400 focus:ring-2 focus:ring-brand-100 outline-none"
                />
                <!-- Honeypot: invisible para personas, los bots lo rellenan -->
                <input v-model="form.website" type="text" name="website" tabindex="-1" autocomplete="off" class="hidden" aria-hidden="true" />
                <button type="submit" :disabled="form.processing" class="btn-primary shrink-0 disabled:opacity-50">Quiero el pack</button>
            </div>
            <p v-if="form.errors.email" class="text-xs text-red-500">{{ form.errors.email }}</p>
            <p v-else-if="page.props.flash?.error" class="text-xs text-red-500">{{ page.props.flash.error }}</p>
        </form>
    </div>
</template>
