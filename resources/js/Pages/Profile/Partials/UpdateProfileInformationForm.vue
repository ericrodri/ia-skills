<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Link, useForm, usePage } from '@inertiajs/vue3';

const props = defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
    // username, bio y preferencias de email (ProfileController::edit)
    profile: {
        type: Object,
        default: () => ({}),
    },
});

const user = usePage().props.auth.user;

const form = useForm({
    name: user.name,
    email: user.email,
    username: props.profile.username ?? '',
    bio: props.profile.bio ?? '',
    notify_by_email: props.profile.notify_by_email ?? true,
    newsletter_opt_in: props.profile.newsletter_opt_in ?? false,
});
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Información del perfil
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Tu nombre, tu perfil público de autor y los emails que quieres recibir.
            </p>
        </header>

        <form
            @submit.prevent="form.patch(route('profile.update'))"
            class="mt-6 space-y-6"
        >
            <div>
                <InputLabel for="name" value="Nombre" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div>
                <InputLabel for="username" value="Nombre de usuario" />

                <div class="mt-1 flex rounded-md shadow-sm">
                    <span class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 px-3 text-sm text-gray-500 dark:text-gray-400">/autores/</span>
                    <TextInput
                        id="username"
                        type="text"
                        class="block w-full rounded-l-none"
                        v-model="form.username"
                        required
                        autocomplete="off"
                    />
                </div>
                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                    Es la dirección de tu perfil público.
                    <Link v-if="profile.username" :href="route('authors.show', profile.username)" class="underline hover:text-brand-600">Ver mi perfil</Link>
                </p>

                <InputError class="mt-2" :message="form.errors.username" />
            </div>

            <div>
                <InputLabel for="bio" value="Bio (opcional)" />

                <textarea
                    id="bio"
                    v-model="form.bio"
                    rows="3"
                    maxlength="300"
                    placeholder="A qué te dedicas y para qué usas la IA. Aparece en tu perfil público."
                    class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm"
                />
                <p class="mt-1 text-xs text-gray-400 text-right">{{ form.bio.length }}/300</p>

                <InputError class="mt-2" :message="form.errors.bio" />
            </div>

            <fieldset class="space-y-3">
                <legend class="text-sm font-medium text-gray-700 dark:text-gray-300">Emails</legend>
                <label class="flex items-start gap-2.5 text-sm text-gray-600 dark:text-gray-400 cursor-pointer">
                    <input v-model="form.notify_by_email" type="checkbox" class="mt-0.5 rounded border-gray-300 dark:border-gray-600 text-brand-600 focus:ring-brand-500" />
                    <span>Avisarme cuando revisen mis skills o alguien las comente o responda a mis comentarios.</span>
                </label>
                <label class="flex items-start gap-2.5 text-sm text-gray-600 dark:text-gray-400 cursor-pointer">
                    <input v-model="form.newsletter_opt_in" type="checkbox" class="mt-0.5 rounded border-gray-300 dark:border-gray-600 text-brand-600 focus:ring-brand-500" />
                    <span>Recibir el resumen semanal con las skills y guías nuevas (los lunes).</span>
                </label>
            </fieldset>

            <div v-if="mustVerifyEmail && user.email_verified_at === null">
                <p class="mt-2 text-sm text-gray-800 dark:text-gray-200">
                    Tu email no está verificado.
                    <Link
                        :href="route('verification.send')"
                        method="post"
                        as="button"
                        class="rounded-md text-sm text-gray-600 dark:text-gray-400 underline hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    >
                        Reenviar el email de verificación.
                    </Link>
                </p>

                <div
                    v-show="status === 'verification-link-sent'"
                    class="mt-2 text-sm font-medium text-green-600"
                >
                    Te hemos enviado un nuevo enlace de verificación.
                </div>
            </div>

            <div class="flex items-center gap-4">
                <PrimaryButton :disabled="form.processing">Guardar</PrimaryButton>

                <Transition
                    enter-active-class="transition ease-in-out"
                    enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out"
                    leave-to-class="opacity-0"
                >
                    <p
                        v-if="form.recentlySuccessful"
                        class="text-sm text-gray-600 dark:text-gray-400"
                    >
                        Guardado.
                    </p>
                </Transition>
            </div>
        </form>
    </section>
</template>
