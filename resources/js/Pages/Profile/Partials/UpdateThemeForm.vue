<script setup>
import { ref, watch, onMounted } from 'vue';

const theme = ref('dark');

onMounted(() => {
    theme.value = localStorage.theme || 'dark';
});

watch(theme, (newTheme) => {
    if (newTheme === 'system') {
        localStorage.removeItem('theme');
        document.documentElement.classList.add('dark');
    } else {
        localStorage.theme = newTheme;
        if (newTheme === 'dark') {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    }
});
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Apariencia
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Personaliza la apariencia de la plataforma indicando tu preferencia de modo de color.
            </p>
        </header>

        <div class="mt-6 flex flex-col sm:flex-row gap-4">
            <label class="flex items-center gap-3 cursor-pointer p-4 border rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors" :class="theme === 'light' ? 'border-brand-500 bg-brand-50/50 dark:border-brand-500 dark:bg-brand-900/20' : 'border-gray-200 dark:border-gray-700'">
                <input type="radio" v-model="theme" value="light" class="text-brand-600 focus:ring-brand-500 h-4 w-4" />
                <span class="text-gray-900 dark:text-gray-100 font-medium">Claro</span>
            </label>

            <label class="flex items-center gap-3 cursor-pointer p-4 border rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors" :class="theme === 'dark' ? 'border-brand-500 bg-brand-50/50 dark:border-brand-500 dark:bg-brand-900/20' : 'border-gray-200 dark:border-gray-700'">
                <input type="radio" v-model="theme" value="dark" class="text-brand-600 focus:ring-brand-500 h-4 w-4" />
                <span class="text-gray-900 dark:text-gray-100 font-medium">Oscuro</span>
            </label>

            <label class="flex items-center gap-3 cursor-pointer p-4 border rounded-xl hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors" :class="theme === 'system' ? 'border-brand-500 bg-brand-50/50 dark:border-brand-500 dark:bg-brand-900/20' : 'border-gray-200 dark:border-gray-700'">
                <input type="radio" v-model="theme" value="system" class="text-brand-600 focus:ring-brand-500 h-4 w-4" />
                <span class="text-gray-900 dark:text-gray-100 font-medium">Sistema</span>
            </label>
        </div>
    </section>
</template>
