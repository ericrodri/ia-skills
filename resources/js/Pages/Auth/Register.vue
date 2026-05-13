<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import InputError from '@/Components/InputError.vue'
import { Head, Link, useForm } from '@inertiajs/vue3'

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
})

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    })
}
</script>

<template>
    <GuestLayout>
        <Head title="Crear cuenta" />

        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-xl font-bold text-gray-900 dark:text-white">Crea tu cuenta</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Únete a la comunidad de profesionales de IA</p>
        </div>

        <form @submit.prevent="submit" class="space-y-4">
            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                    Nombre
                </label>
                <input
                    id="name"
                    v-model="form.name"
                    type="text"
                    required
                    autofocus
                    autocomplete="name"
                    placeholder="Tu nombre"
                    class="w-full rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-3.5 py-2.5 text-sm text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-colors"
                    :class="{ 'border-red-400 dark:border-red-500': form.errors.name }"
                />
                <InputError :message="form.errors.name" class="mt-1.5" />
            </div>

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
                    autocomplete="username"
                    placeholder="tu@email.com"
                    class="w-full rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-3.5 py-2.5 text-sm text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-colors"
                    :class="{ 'border-red-400 dark:border-red-500': form.errors.email }"
                />
                <InputError :message="form.errors.email" class="mt-1.5" />
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                    Contraseña
                </label>
                <input
                    id="password"
                    v-model="form.password"
                    type="password"
                    required
                    autocomplete="new-password"
                    placeholder="Mínimo 8 caracteres"
                    class="w-full rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-3.5 py-2.5 text-sm text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-colors"
                    :class="{ 'border-red-400 dark:border-red-500': form.errors.password }"
                />
                <InputError :message="form.errors.password" class="mt-1.5" />
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                    Confirmar contraseña
                </label>
                <input
                    id="password_confirmation"
                    v-model="form.password_confirmation"
                    type="password"
                    required
                    autocomplete="new-password"
                    placeholder="Repite la contraseña"
                    class="w-full rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-3.5 py-2.5 text-sm text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-colors"
                    :class="{ 'border-red-400 dark:border-red-500': form.errors.password_confirmation }"
                />
                <InputError :message="form.errors.password_confirmation" class="mt-1.5" />
            </div>

            <!-- Submit -->
            <button
                type="submit"
                class="btn-primary w-full justify-center py-2.5 mt-2"
                :class="{ 'opacity-60 cursor-not-allowed': form.processing }"
                :disabled="form.processing"
            >
                <span v-if="form.processing">Creando cuenta…</span>
                <span v-else>Crear cuenta</span>
            </button>

            <!-- Terms note -->
            <p class="text-center text-xs text-gray-400 dark:text-gray-500">
                Al registrarte aceptas compartir skills con la comunidad de forma constructiva.
            </p>
        </form>

        <!-- Login link -->
        <p class="mt-6 text-center text-sm text-gray-500 dark:text-gray-400">
            ¿Ya tienes cuenta?
            <Link :href="route('login')" class="font-medium text-brand-600 dark:text-brand-400 hover:underline">
                Inicia sesión
            </Link>
        </p>
    </GuestLayout>
</template>
