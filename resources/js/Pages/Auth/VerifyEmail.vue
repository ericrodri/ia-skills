<script setup>
import { computed } from 'vue'
import GuestLayout from '@/Layouts/GuestLayout.vue'
import { Head, Link, useForm } from '@inertiajs/vue3'

const props = defineProps({
    status: { type: String },
})

const form = useForm({})

const submit = () => {
    form.post(route('verification.send'))
}

const verificationLinkSent = computed(() => props.status === 'verification-link-sent')
</script>

<template>
    <GuestLayout>
        <Head title="Verifica tu correo" />

        <!-- Header -->
        <div class="mb-6 text-center">
            <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-brand-50 dark:bg-brand-900/20 text-2xl">
                📧
            </div>
            <h1 class="text-xl font-bold text-gray-900 dark:text-white">Verifica tu correo</h1>
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                Hemos enviado un enlace de verificación a tu dirección de correo. Revisa tu bandeja de entrada y haz clic en el enlace para activar tu cuenta.
            </p>
        </div>

        <!-- Success -->
        <div v-if="verificationLinkSent" class="mb-4 rounded-lg bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 px-4 py-3 text-sm text-green-700 dark:text-green-400">
            ✓ Hemos enviado un nuevo enlace de verificación a tu correo.
        </div>

        <form @submit.prevent="submit" class="space-y-3">
            <!-- Resend -->
            <button
                type="submit"
                class="btn-primary w-full justify-center py-2.5"
                :class="{ 'opacity-60 cursor-not-allowed': form.processing }"
                :disabled="form.processing"
            >
                <span v-if="form.processing">Enviando…</span>
                <span v-else>Reenviar correo de verificación</span>
            </button>

            <!-- Logout -->
            <Link
                :href="route('logout')"
                method="post"
                as="button"
                class="w-full text-center text-sm text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 transition-colors py-2"
            >
                Cerrar sesión
            </Link>
        </form>
    </GuestLayout>
</template>
