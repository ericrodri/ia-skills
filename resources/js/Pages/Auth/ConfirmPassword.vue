<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import InputError from '@/Components/InputError.vue'
import { Head, useForm } from '@inertiajs/vue3'

const form = useForm({
    password: '',
})

const submit = () => {
    form.post(route('password.confirm'), {
        onFinish: () => form.reset(),
    })
}
</script>

<template>
    <GuestLayout>
        <Head title="Confirmar contraseña" />

        <!-- Header -->
        <div class="mb-6">
            <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-amber-50 dark:bg-amber-900/20 text-xl">
                🔒
            </div>
            <h1 class="text-xl font-bold text-gray-900 dark:text-white">Área segura</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                Confirma tu contraseña para continuar con esta acción.
            </p>
        </div>

        <form @submit.prevent="submit" class="space-y-4">
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                    Contraseña
                </label>
                <input
                    id="password"
                    v-model="form.password"
                    type="password"
                    required
                    autofocus
                    autocomplete="current-password"
                    placeholder="••••••••"
                    class="w-full rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-3.5 py-2.5 text-sm text-gray-900 dark:text-white placeholder-gray-400 dark:placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-colors"
                    :class="{ 'border-red-400 dark:border-red-500': form.errors.password }"
                />
                <InputError :message="form.errors.password" class="mt-1.5" />
            </div>

            <button
                type="submit"
                class="btn-primary w-full justify-center py-2.5"
                :class="{ 'opacity-60 cursor-not-allowed': form.processing }"
                :disabled="form.processing"
            >
                <span v-if="form.processing">Confirmando…</span>
                <span v-else>Confirmar</span>
            </button>
        </form>
    </GuestLayout>
</template>
