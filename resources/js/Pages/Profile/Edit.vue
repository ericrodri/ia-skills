<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ApiTokenForm from './Partials/ApiTokenForm.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import UpdateThemeForm from './Partials/UpdateThemeForm.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    mustVerifyEmail: { type: Boolean },
    status: { type: String },
    apiToken: { type: String, default: null },
});
</script>

<template>
    <Head title="Perfil" />

    <AppLayout>
        <div class="py-12 bg-gray-50/50 dark:bg-gray-900/50">
            <div class="mx-auto max-w-4xl space-y-6 sm:px-6 lg:px-8">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-6 px-4 sm:px-0">Perfil y ajustes</h1>
                
                <div
                    class="bg-white p-4 shadow-sm border border-gray-100 sm:rounded-xl sm:p-8 dark:bg-gray-800 dark:border-gray-700"
                >
                    <UpdateThemeForm class="max-w-xl" />
                </div>

                <div
                    class="bg-white p-4 shadow-sm border border-gray-100 sm:rounded-xl sm:p-8 dark:bg-gray-800 dark:border-gray-700"
                >
                    <UpdateProfileInformationForm
                        :must-verify-email="mustVerifyEmail"
                        :status="status"
                        class="max-w-xl"
                    />
                </div>

                <div
                    class="bg-white p-4 shadow-sm border border-gray-100 sm:rounded-xl sm:p-8 dark:bg-gray-800 dark:border-gray-700"
                >
                    <UpdatePasswordForm class="max-w-xl" />
                </div>

                <div
                    class="bg-white p-4 shadow-sm border border-gray-100 sm:rounded-xl sm:p-8 dark:bg-gray-800 dark:border-gray-700"
                >
                    <ApiTokenForm :api-token="apiToken" class="max-w-xl" />
                </div>

                <div
                    class="bg-white dark:bg-gray-800 p-4 shadow-sm border border-gray-100 dark:border-gray-800 sm:rounded-xl sm:p-8"
                >
                    <DeleteUserForm class="max-w-xl" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
