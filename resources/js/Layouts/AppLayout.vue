<script setup>
import { Link, router, useForm, usePage } from '@inertiajs/vue3'
import { computed, ref } from 'vue'

const page = usePage()
const auth = computed(() => page.props.auth)
const showUserMenu = ref(false)
const showMobileNav = ref(false)

// Fuente única: App\Support\SiteData::primaryNav(), compartida por
// HandleInertiaRequests. El mismo array alimenta layouts/site.blade.php, así
// que añadir un enlace aquí lo añade también en las guías.
const primaryNav = computed(() => page.props.nav?.primary ?? [])

// Alta en el resumen semanal sin cuenta (NewsletterController::subscribe).
// Los usuarios registrados se suscriben desde su perfil.
const newsletter = useForm({ email: '', website: '', source: 'footer' })
const newsletterSent = ref(false)

function subscribe() {
    newsletter.post(route('newsletter.subscribe'), {
        preserveScroll: true,
        onSuccess: () => {
            newsletterSent.value = !page.props.flash?.error
            if (newsletterSent.value) newsletter.reset('email')
        },
    })
}

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
                        <img src="/logo.png?v=2" alt="" width="28" height="28" class="w-7 h-7">
                        <span>ia-skills</span>
                    </Link>
                    <div class="hidden lg:flex items-center gap-1">
                        <!--
                            Los enlaces salen de SiteData::primaryNav(). Los que no
                            son páginas Inertia (las guías) usan <a>: con <Link>,
                            Inertia intentaría interpretar el HTML de Blade como
                            una respuesta suya.
                        -->
                        <component
                            v-for="item in primaryNav"
                            :key="item.route"
                            :is="item.inertia ? Link : 'a'"
                            :href="item.href"
                            class="px-3 py-1.5 text-sm text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50 rounded-lg transition-colors"
                        >
                            {{ item.label }}
                        </component>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <!-- Menú móvil: por debajo de md el nav principal está oculto -->
                    <button
                        @click="showMobileNav = !showMobileNav"
                        class="lg:hidden p-1.5 -ml-1 rounded-lg text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors"
                        :aria-expanded="showMobileNav"
                        aria-controls="mobile-nav"
                        aria-label="Menú de navegación"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                :d="showMobileNav ? 'M6 18L18 6M6 6l12 12' : 'M4 6h16M4 12h16M4 18h16'"
                            />
                        </svg>
                    </button>

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
                                    :href="route('dashboard')"
                                    @click="showUserMenu = false"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors"
                                >
                                    Mi panel
                                </Link>
                                <Link
                                    v-if="auth.user.username"
                                    :href="route('authors.show', auth.user.username)"
                                    @click="showUserMenu = false"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors"
                                >
                                    Perfil público
                                </Link>
                                <Link
                                    :href="route('profile.edit')"
                                    @click="showUserMenu = false"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors"
                                >
                                    Ajustes
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

            <!-- Panel del menú móvil: mismos enlaces que el nav de escritorio -->
            <div
                v-if="showMobileNav"
                id="mobile-nav"
                class="lg:hidden border-t border-gray-100 dark:border-gray-800 px-4 sm:px-6 py-2"
            >
                <component
                    v-for="item in primaryNav"
                    :key="item.route"
                    :is="item.inertia ? Link : 'a'"
                    :href="item.href"
                    @click="showMobileNav = false"
                    class="block px-2 py-2.5 text-sm text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white transition-colors"
                >
                    {{ item.label }}
                </component>
            </div>
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
                            <img src="/logo.png?v=2" alt="" width="24" height="24" class="w-6 h-6" loading="lazy"> ia-skills
                        </div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">La biblioteca colaborativa de workflows de IA para profesionales.</p>
                    </div>
                    <nav class="flex flex-wrap gap-x-6 gap-y-2 text-sm text-gray-500 dark:text-gray-400">
                        <Link :href="route('skills.index')" class="hover:text-gray-900 dark:hover:text-white transition-colors">Explorar</Link>
                        <Link :href="route('professions.index')" class="hover:text-gray-900 dark:hover:text-white transition-colors">Profesiones</Link>
                        <Link :href="route('collections.index')" class="hover:text-gray-900 dark:hover:text-white transition-colors">Colecciones</Link>
                        <Link :href="route('rankings.index')" class="hover:text-gray-900 dark:hover:text-white transition-colors">Ranking</Link>
                        <a href="/guias" class="hover:text-gray-900 dark:hover:text-white transition-colors">Guías</a>
                        <a href="/feed.xml" class="hover:text-gray-900 dark:hover:text-white transition-colors">RSS</a>
                        <Link :href="route('how-it-works')" class="hover:text-gray-900 dark:hover:text-white transition-colors">Cómo funciona</Link>
                        <Link :href="route('skills.saved')" class="hover:text-gray-900 dark:hover:text-white transition-colors">Guardadas</Link>
                        <Link v-if="!auth?.user" :href="route('register')" class="hover:text-gray-900 dark:hover:text-white transition-colors">Registrarse</Link>
                        <a :href="route('legal.privacy')" class="hover:text-gray-900 dark:hover:text-white transition-colors">Privacidad</a>
                    </nav>
                </div>
                <div v-if="!auth?.user" id="newsletter" class="mt-8 pt-8 border-t border-gray-100 dark:border-gray-800 sm:flex sm:items-center sm:justify-between gap-6">
                    <div>
                        <p class="text-sm font-semibold text-gray-900 dark:text-white">Las mejores skills, cada lunes</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">
                            Un email a la semana con lo más votado y las guías nuevas. Baja con un clic.
                            <!-- Página Blade: <a>, no <Link> -->
                            <a :href="route('legal.privacy') + '#finalidades'" class="underline hover:text-gray-900 dark:hover:text-white">Privacidad</a>
                        </p>
                    </div>
                    <p v-if="newsletterSent" class="mt-3 sm:mt-0 text-sm font-medium text-green-700 dark:text-green-400" role="status">
                        Revisa tu email para confirmar la suscripción.
                    </p>
                    <form v-else @submit.prevent="subscribe" class="mt-3 sm:mt-0 flex flex-col gap-1 sm:w-96">
                        <div class="flex gap-2">
                            <label for="footer-newsletter-email" class="sr-only">Tu email</label>
                            <input
                                id="footer-newsletter-email"
                                v-model="newsletter.email"
                                type="email"
                                required
                                autocomplete="email"
                                placeholder="tu@email.com"
                                class="flex-1 min-w-0 rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 px-3 py-2 text-sm text-gray-900 dark:text-gray-100 placeholder-gray-400 focus:border-brand-400 focus:ring-2 focus:ring-brand-100 outline-none"
                            />
                            <!-- Honeypot: invisible para personas, los bots lo rellenan -->
                            <input v-model="newsletter.website" type="text" name="website" tabindex="-1" autocomplete="off" class="hidden" aria-hidden="true" />
                            <button type="submit" :disabled="newsletter.processing" class="btn-primary shrink-0 disabled:opacity-50">Suscribirme</button>
                        </div>
                        <p v-if="newsletter.errors.email" class="text-xs text-red-500">{{ newsletter.errors.email }}</p>
                        <p v-else-if="$page.props.flash?.error" class="text-xs text-red-500">{{ $page.props.flash.error }}</p>
                    </form>
                </div>

                <p class="mt-8 text-xs text-gray-400 dark:text-gray-500">© {{ new Date().getFullYear() }} ia-skills.com</p>
            </div>
        </footer>
    </div>
</template>
