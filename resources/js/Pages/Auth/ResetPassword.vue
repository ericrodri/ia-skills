<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import InputError from '@/Components/InputError.vue'
import { Head, useForm } from '@inertiajs/vue3'

const props = defineProps({
    email: { type: String, required: true },
    token: { type: String, required: true },
})

const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
})

const submit = () => {
    form.post(route('password.store'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    })
}
</script>

<template>
    <GuestLayout>
        <Head title="Nueva contraseña" />

        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-xl font-bold text-gray-900 dark:text-white">Crea una nueva contraseña</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Elige una contraseña segura para tu cuenta.</p>
        </div>

        <form @submit.prevent="submit" class="space-y-4">
            <!-- Email (readonly) -->
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
                    class="w-full rounded-lg border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800/50 px-3.5 py-2.5 text-sm text-gray-500 dark:text-gray-400 focus:outline-none cursor-default"
                    readonly
                />
                <InputError :message="form.errors.email" class="mt-1.5" />
            </div>

            <!-- New password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                    Nueva contraseña
                </label>
                <input
                    id="password"
                    v-model="form.password"
                    type="password"
                    required
                    autofocus
                    autocomplete="new-password"
                    placeholder="Mínimo 8 caracteres"
                    class="w-full rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-3.5 py-2.5 text-sm text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-colors"
                    :class="{ 'border-red-400 dark:border-red-500': form.errors.password }"
                />
                <InputError :message="form.errors.password" class="mt-1.5" />
            </div>

            <!-- Confirm password -->
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
                class="btn-primary w-full justify-center py-2.5"
                :class="{ 'opacity-60 cursor-not-allowed': form.processing }"
                :disabled="form.processing"
            >
                <span v-if="form.processing">Guardando…</span>
                <span v-else>Guardar nueva contraseña</span>
            </button>
        </form>
    </GuestLayout>
</template>
