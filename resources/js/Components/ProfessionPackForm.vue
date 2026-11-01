<script setup>
import { ref } from 'vue'
import { useForm, usePage } from '@inertiajs/vue3'

// Regalo a cambio del email: pide el pack imprimible de la profesión
// (App\Support\ProfessionPack). El alta pasa por el mismo doble opt-in que
// el resto de formularios de la newsletter (NewsletterController::subscribe).
const props = defineProps({
    profession: { type: Object, required: true },
})

const page = usePage()
const form = useForm({ email: '', website: '', source: `pack:${props.profession.slug}` })
const sent = ref(false)

function submit() {
    form.post(route('newsletter.subscribe'), {
        preserveScroll: true,
        onSuccess: () => {
            sent.value = !page.props.flash?.error
            if (sent.value) form.reset('email')
        },
    })
}
</script>

<template>
    <div class="rounded-2xl border border-brand-200 dark:border-brand-800/60 bg-brand-50 dark:bg-brand-900/10 p-6 sm:flex sm:items-center sm:justify-between gap-8">
        <div class="sm:max-w-md">
            <p class="text-xs font-semibold uppercase tracking-wider text-brand-600 dark:text-brand-400">Gratis en PDF</p>
            <h2 class="mt-1 text-lg font-bold text-gray-900 dark:text-white">Las 20 mejores skills de IA para {{ profession.name }}</h2>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Los prompts completos de las skills más votadas, en un documento para guardar o imprimir.
                Te lo enviamos al confirmar tu email y te apuntamos al resumen semanal, del que puedes darte de baja con un clic.
                <!-- Página Blade: <a>, no <Link> -->
                <a :href="route('legal.privacy') + '#finalidades'" class="underline hover:text-gray-900 dark:hover:text-white">Privacidad</a>
            </p>
        </div>
        <p v-if="sent" class="mt-4 sm:mt-0 text-sm font-medium text-green-700 dark:text-green-400" role="status">
            Revisa tu email: el enlace al pack llega al confirmar.
        </p>
        <form v-else @submit.prevent="submit" class="mt-4 sm:mt-0 flex flex-col gap-1 sm:w-96">
            <div class="flex gap-2">
                <label :for="`pack-email-${profession.slug}`" class="sr-only">Tu email</label>
                <input
                    :id="`pack-email-${profession.slug}`"
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
