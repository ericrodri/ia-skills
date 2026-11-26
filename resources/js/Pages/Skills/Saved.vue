<script setup>
import { Head, Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import SkillCard from '@/Components/SkillCard.vue'

defineProps({ skills: { type: Object, default: null }, hasApiToken: Boolean })
</script>

<template>
    <Head><title>Skills guardadas — ia-skills</title></Head>
    <AppLayout>
        <div class="max-w-3xl mx-auto px-4 sm:px-6 py-12">

            <!-- Estado guest -->
            <div v-if="skills === null" class="py-4">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-2">Skills guardadas</h1>
                <p class="text-gray-500 dark:text-gray-400 mb-10">Tu biblioteca personal de skills de IA, siempre a mano.</p>

                <div class="grid sm:grid-cols-3 gap-4 mb-10">
                    <div class="rounded-xl border border-gray-100 dark:border-gray-800 bg-gray-50 dark:bg-gray-800/50 p-5">
                        <div class="text-2xl mb-3">🔖</div>
                        <h3 class="font-semibold text-gray-900 dark:text-white text-sm mb-1">Guarda las que más usas</h3>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Marca cualquier skill con el botón guardar y tenlas siempre localizadas.</p>
                    </div>
                    <div class="rounded-xl border border-gray-100 dark:border-gray-800 bg-gray-50 dark:bg-gray-800/50 p-5">
                        <div class="text-2xl mb-3">⚡</div>
                        <h3 class="font-semibold text-gray-900 dark:text-white text-sm mb-1">Úsalas en segundos</h3>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Abre el prompt directamente en Claude, ChatGPT, Gemini o Copilot con un clic.</p>
                    </div>
                    <div class="rounded-xl border border-brand-100 dark:border-brand-800 bg-brand-50 dark:bg-brand-900/20 p-5">
                        <div class="text-2xl mb-3">🔌</div>
                        <h3 class="font-semibold text-gray-900 dark:text-white text-sm mb-1">Tenlas dentro de Claude</h3>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Con el conector MCP de ia-skills, Claude te trae tus guardadas con el prompt completo cuando se las pidas.</p>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-3">
                    <Link :href="route('register')" class="btn-primary px-6 py-2.5">
                        Crear cuenta gratis
                    </Link>
                    <Link :href="route('login')" class="btn-secondary px-6 py-2.5">
                        Ya tengo cuenta
                    </Link>
                </div>
            </div>

            <!-- Estado autenticado -->
            <template v-else>
                <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-6">Skills guardadas</h1>

                <!--
                    El conector MCP es la vía principal: con la sesión iniciada en
                    Claude, saved_skills (App\Support\McpConnector) devuelve estas
                    fichas sin copiar ninguna clave. La API key queda para las
                    herramientas que no permiten iniciar sesión.
                    /mcp y la guía son Blade, no Inertia: <a>, no <Link>.
                -->
                <div class="mb-6 flex items-start gap-3 rounded-xl border border-brand-100 dark:border-brand-800 bg-brand-50 dark:bg-brand-900/20 px-4 py-3">
                    <span class="text-lg shrink-0 mt-0.5">🔌</span>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-brand-800 dark:text-brand-300">Pídeselas a Claude sin salir de la conversación</p>
                        <p class="text-xs text-brand-600 dark:text-brand-400 mt-0.5">
                            Añade el conector MCP de ia-skills en Claude (web, escritorio, móvil o Claude Code) e inicia sesión. Después basta con decirle «usa mis guardadas de ia-skills» y te trae el prompt completo, sin copiar ni pegar.
                        </p>
                        <p class="text-xs text-brand-600 dark:text-brand-400 mt-2 flex flex-wrap gap-x-4 gap-y-1">
                            <a :href="$page.props.nav?.mcp ?? '/guias/conectar-ia-skills-a-claude'" class="font-medium hover:underline">Cómo conectarlo (2 minutos) →</a>
                            <Link :href="route('profile.edit') + '#api'" class="hover:underline">
                                {{ hasApiToken ? 'Ver tu API key' : 'API key' }} para otras herramientas
                            </Link>
                        </p>
                    </div>
                </div>

                <div v-if="skills.data.length" class="flex flex-col gap-3">
                    <SkillCard v-for="skill in skills.data" :key="skill.id" :skill="skill" />
                </div>
                <div v-else class="text-center py-20 text-gray-400 dark:text-gray-500">
                    <p class="text-lg">Aún no has guardado ninguna skill.</p>
                    <Link :href="route('skills.index')" class="btn-primary mt-4">Explorar skills</Link>
                </div>
            </template>

        </div>
    </AppLayout>
</template>
