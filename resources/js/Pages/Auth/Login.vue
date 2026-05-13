<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import InputError from '@/Components/InputError.vue'
import { Head, Link, useForm } from '@inertiajs/vue3'

defineProps({
    canResetPassword: { type: Boolean },
    status: { type: String },
})

const form = useForm({
    email: '',
    password: '',
    remember: false,
})

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    })
}
</script>

<template>
    <GuestLayout>
        <Head title="Entrar" />

        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-xl font-bold text-gray-900 dark:text-white">Bienvenido de nuevo</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Accede a tu cuenta para continuar</p>
        </div>

        <!-- Status message (password reset, etc.) -->
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

            <!-- Password -->
            <div>
                <div class="flex items-center justify-between mb-1">
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Contraseña
                    </label>
                    <Link
                        v-if="canResetPassword"
                        :href="route('password.request')"
                        class="text-xs text-brand-600 dark:text-brand-400 hover:underline"
                    >
                        ¿Olvidaste tu contraseña?
                    </Link>
                </div>
                <input
                    id="password"
                    v-model="form.password"
                    type="password"
                    required
                    autocomplete="current-password"
                    placeholder="••••••••"
                    class="w-full rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-3.5 py-2.5 text-sm text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-colors"
                    :class="{ 'border-red-400 dark:border-red-500': form.errors.password }"
                />
                <InputError :message="form.errors.password" class="mt-1.5" />
            </div>

            <!-- Remember me -->
            <label class="flex items-center gap-2 cursor-pointer select-none">
                <input
                    v-model="form.remember"
                    type="checkbox"
                    class="h-4 w-4 rounded border-gray-300 dark:border-gray-600 text-brand-600 focus:ring-brand-500 bg-white dark:bg-gray-800"
                />
                <span class="text-sm text-gray-600 dark:text-gray-400">Recordarme</span>
            </label>

            <!-- Submit -->
            <button
                type="submit"
                class="btn-primary w-full justify-center py-2.5 mt-2"
                :class="{ 'opacity-60 cursor-not-allowed': form.processing }"
                :disabled="form.processing"
            >
                <span v-if="form.processing">Entrando…</span>
                <span v-else>Entrar</span>
            </button>
        </form>

        <!-- Register link -->
        <p class="mt-6 text-center text-sm text-gray-500 dark:text-gray-400">
            ¿No tienes cuenta?
            <Link :href="route('register')" class="font-medium text-brand-600 dark:text-brand-400 hover:underline">
                Regístrate gratis
            </Link>
        </p>
    </GuestLayout>
</template>
