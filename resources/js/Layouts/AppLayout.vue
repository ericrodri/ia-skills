<script setup>
import { Link, router, usePage } from '@inertiajs/vue3'
import { computed, ref } from 'vue'

const page = usePage()
const auth = computed(() => page.props.auth)
const showUserMenu = ref(false)

function logout() {
    showUserMenu.value = false
    router.post(route('logout'))
}
</script>

<template>
    <div class="min-h-screen flex flex-col bg-white dark:bg-gray-900 transition-colors duration-200">
        <!-- Nav -->
        <header class="sticky top-0 z-50 bg-white/90 dark:bg-gray-900/90 backdrop-blur-sm border-b border-gray-100 dark:border-gray-800 transition-colors duration-200">
            <nav class="max-w-6xl mx-auto px-4 sm:px-6 h-14 flex items-center justify-between">
                <div class="flex items-center gap-8">
                    <Link :href="route('home')" class="flex items-center gap-2 font-bold text-gray-900 dark:text-white hover:text-brand-600 dark:hover:text-brand-400 transition-colors">
                        <span class="text-brand-600 dark:text-brand-500 text-lg">⚡</span>
                        <span>ia-skills</span>
                    </Link>
                    <div class="hidden md:flex items-center gap-1">
                        <Link :href="route('skills.index')" class="px-3 py-1.5 text-sm text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50 rounded-lg transition-colors">
                            Explorar
                        </Link>
                        <Link :href="route('professions.index')" class="px-3 py-1.5 text-sm text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50 rounded-lg transition-colors">
                            Profesiones
                        </Link>
                        <Link :href="route('how-it-works')" class="px-3 py-1.5 text-sm text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50 rounded-lg transition-colors">
                            Cómo funciona
                        </Link>
                        <Link :href="route('skills.saved')" class="px-3 py-1.5 text-sm text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50 rounded-lg transition-colors">
                            Guardadas
                        </Link>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <template v-if="auth?.user">
                        <Link
                            v-if="auth.user.is_admin"
                            :href="route('admin.skills.index')"
                            class="px-3 py-1.5 text-xs font-semibold rounded-lg bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-400 hover:bg-amber-200 dark:hover:bg-amber-900/50 transition-colors"
                        >
                            🛡 Admin
                        </Link>

                        <Link :href="route('skills.create')" class="btn-primary">
                            + Compartir skill
                        </Link>

                        <!-- Avatar + dropdown -->
                        <div class="relative" v-click-outside="() => showUserMenu = false">
                            <button
                                @click="showUserMenu = !showUserMenu"
                                class="w-8 h-8 rounded-full bg-brand-100 dark:bg-brand-900/30 text-brand-700 dark:text-brand-300 text-sm font-semibold flex items-center justify-center hover:bg-brand-200 dark:hover:bg-brand-900/50 transition-colors"
                            >
                                {{ auth.user.name.charAt(0).toUpperCase() }}
                            </button>
                            <div
                                v-if="showUserMenu"
                                class="absolute right-0 mt-2 w-44 bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700 rounded-xl shadow-lg py-1 z-50"
                            >
                                <Link
                                    :href="route('profile.edit')"
                                    @click="showUserMenu = false"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors"
                                >
                                    Mi perfil
                                </Link>
                                <Link
                                    :href="route('skills.saved')"
                                    @click="showUserMenu = false"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors"
                                >
                                    Skills guardadas
                                </Link>
                                <hr class="my-1 border-gray-100 dark:border-gray-700" />
                                <button
                                    @click="logout"
                                    class="w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors"
                                >
                                    Cerrar sesión
                                </button>
                            </div>
                        </div>
                    </template>
                    <template v-else>
                        <Link :href="route('login')" class="btn-secondary">
                            Entrar
                        </Link>
                        <Link :href="route('register')" class="btn-primary">
                            Registrarse
                        </Link>
                    </template>
                </div>
            </nav>
        </header>

        <!-- Flash messages -->
        <div v-if="$page.props.flash?.success" class="bg-green-50 dark:bg-green-900/30 border-b border-green-200 dark:border-green-800 transition-colors duration-200">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 py-2 text-sm text-green-700 dark:text-green-400">
                {{ $page.props.flash.success }}
            </div>
        </div>

        <!-- Main -->
        <main class="flex-1">
            <slot />
        </main>

        <!-- Footer -->
        <footer class="border-t border-gray-100 dark:border-gray-800 mt-20 transition-colors duration-200">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 py-10">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6">
                    <div>
                        <div class="flex items-center gap-2 font-bold text-gray-900 dark:text-white mb-1">
                            <span class="text-brand-600 dark:text-brand-500">⚡</span> ia-skills
                        </div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">La biblioteca colaborativa de workflows de IA para profesionales.</p>
                    </div>
                    <nav class="flex flex-wrap gap-x-6 gap-y-2 text-sm text-gray-500 dark:text-gray-400">
                        <Link :href="route('skills.index')" class="hover:text-gray-900 dark:hover:text-white transition-colors">Explorar</Link>
                        <Link :href="route('professions.index')" class="hover:text-gray-900 dark:hover:text-white transition-colors">Profesiones</Link>
                        <Link :href="route('how-it-works')" class="hover:text-gray-900 dark:hover:text-white transition-colors">Cómo funciona</Link>
                        <Link :href="route('skills.saved')" class="hover:text-gray-900 dark:hover:text-white transition-colors">Guardadas</Link>
                        <Link v-if="!auth?.user" :href="route('register')" class="hover:text-gray-900 dark:hover:text-white transition-colors">Registrarse</Link>
                    </nav>
                </div>
                <p class="mt-8 text-xs text-gray-400 dark:text-gray-500">© {{ new Date().getFullYear() }} ia-skills.com</p>
            </div>
        </footer>
    </div>
</template>
