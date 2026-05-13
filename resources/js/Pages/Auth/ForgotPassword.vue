<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import InputError from '@/Components/InputError.vue'
import { Head, Link, useForm } from '@inertiajs/vue3'

defineProps({
    status: { type: String },
})

const form = useForm({
    email: '',
})

const submit = () => {
    form.post(route('password.email'))
}
</script>

<template>
    <GuestLayout>
        <Head title="Recuperar contraseña" />

        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-xl font-bold text-gray-900 dark:text-white">Recupera tu contraseña</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                Introduce tu correo y te enviaremos un enlace para crear una nueva contraseña.
            </p>
        </div>

        <!-- Success status -->
        <div v-if="status" class="mb-4 rounded-lg bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 px-4 py-3 text-sm text-green-700 dark:text-green-400">
            {{ status }}
        </div>

        <form @submit.prevent="submit" class="space-y-4">
            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                    Correo electrónico
                </label>
                <input
                    id="email"
                    v-model="form.email"
                    type="email"
                    required
                    autofocus
                    autocomplete="username"
                    placeholder="tu@email.com"
                    class="w-full rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-3.5 py-2.5 text-sm text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-colors"
                    :class="{ 'border-red-400 dark:border-red-500': form.errors.email }"
                />
                <InputError :message="form.errors.email" class="mt-1.5" />
            </div>

            <!-- Submit -->
            <button
                type="submit"
                class="btn-primary w-full justify-center py-2.5"
                :class="{ 'opacity-60 cursor-not-allowed': form.processing }"
                :disabled="form.processing"
            >
                <span v-if="form.processing">Enviando…</span>
                <span v-else>Enviar enlace de recuperación</span>
            </button>
        </form>

        <!-- Back to login -->
        <p class="mt-6 text-center text-sm text-gray-500 dark:text-gray-400">
            <Link :href="route('login')" class="font-medium text-brand-600 dark:text-brand-400 hover:underline">
                ← Volver al inicio de sesión
            </Link>
        </p>
    </GuestLayout>
</template>
