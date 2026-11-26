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

// Con sesión, «Guardadas» tiene su propio botón junto a «Compartir skill»
// (visible también en el móvil), así que sobra en la lista de enlaces.
const desktopNav = computed(() => auth.value?.user
    ? primaryNav.value.filter((item) => item.route !== 'skills.saved')
    : primaryNav.value)

// Sección activa, igual que en layouts/site.blade.php (`active` es el patrón
// de ruta de SiteData::primaryNav(), p. ej. 'professions.*'). Sin negrita: el
// cambio de ancho movería la barra, que con sesión iniciada va justa.
const isActive = (item) => route().current(item.active)
const activeClass = 'text-brand-700 dark:text-brand-400 bg-brand-50 dark:bg-brand-900/20'
const idleClass = 'text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50'

// Alta en el resumen semanal sin cuenta (NewsletterController::subscribe).
// Los usuarios registrados se suscriben desde su perfil.
const newsletter = useForm({ email: '', website: '', source: 'footer' })
const newsletterSent = ref(false)

function subscribe() {
    // La ficha antibots se lee al enviar: así es la de la última visita.
    newsletter.transform((data) => ({ ...data, _ft: page.props.formToken })).post(route('newsletter.subscribe'), {
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
                <div class="flex items-center gap-4">
                    <Link :href="route('home')" class="shrink-0 whitespace-nowrap flex items-center gap-2 font-bold text-gray-900 dark:text-white hover:text-brand-600 dark:hover:text-brand-400 transition-colors">
                        <img src="/logo.png?v=2" alt="" width="28" height="28" class="w-7 h-7">
                        <span :class="auth?.user ? 'hidden min-[400px]:inline' : 'hidden min-[360px]:inline'">ia-skills</span>
                    </Link>
                    <div class="hidden xl:flex items-center gap-1">
                        <!--
                            Los enlaces salen de SiteData::primaryNav(). Los que no
                            son páginas Inertia (las guías) usan <a>: con <Link>,
                            Inertia intentaría interpretar el HTML de Blade como
                            una respuesta suya.
                        -->
                        <component
                            v-for="item in desktopNav"
                            :key="item.route"
                            :is="item.inertia ? Link : 'a'"
                            :href="item.href"
                            :aria-current="isActive(item) ? 'page' : undefined"
                            class="whitespace-nowrap px-3 py-1.5 text-sm rounded-lg transition-colors"
                            :class="isActive(item) ? activeClass : idleClass"
                        >
                            {{ item.label }}
                        </component>
                    </div>
                </div>

                <!-- gap-2 en el móvil: con sesión iniciada (menú, Guardadas,
                     Compartir y avatar) en 375 px no cabe con gap-3 y el menú
                     se monta sobre el logo. -->
                <div class="shrink-0 whitespace-nowrap flex items-center gap-2 sm:gap-3">
                    <!-- Menú móvil: por debajo de xl el nav principal está oculto
                         (con sesión iniciada no cabe entero en 1024-1279 px). -->
                    <button
                        @click="showMobileNav = !showMobileNav"
                        class="order-last xl:hidden p-1.5 rounded-lg text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors"
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
                            title="Administración"
                            class="hidden sm:inline-flex items-center px-3 py-1.5 text-xs font-semibold rounded-lg bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-400 hover:bg-amber-200 dark:hover:bg-amber-900/50 transition-colors"
                        >
                            🛡
                        </Link>

                        <!-- Guardadas a la vista: es lo primero que busca quien vuelve
                             tras guardar una ficha. En el móvil, solo el icono. -->
                        <Link
                            :href="route('skills.saved')"
                            class="flex items-center gap-1.5 p-1.5 sm:px-3 text-sm rounded-lg transition-colors"
                            :class="route().current('skills.saved')
                                ? 'font-semibold text-brand-700 dark:text-brand-400 bg-brand-50 dark:bg-brand-900/20'
                                : 'text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-800/50'"
                            aria-label="Skills guardadas"
                            title="Skills guardadas"
                        >
                            <svg class="w-5 h-5 sm:w-4 sm:h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                            </svg>
                            <span class="hidden sm:inline">Guardadas</span>
                        </Link>

                        <Link :href="route('skills.create')" class="btn-primary">
                            <span>+ Compartir<span class="hidden sm:inline"> skill</span></span>
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
                                <!-- En el móvil el botón de admin de la barra no cabe: aquí sí. -->
                                <Link
                                    v-if="auth.user.is_admin"
                                    :href="route('admin.skills.index')"
                                    @click="showUserMenu = false"
                                    class="sm:hidden block px-4 py-2 text-sm font-semibold text-amber-700 dark:text-amber-400 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors"
                                >
                                    🛡 Administración
                                </Link>
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
                                <!-- /mcp es Blade, no Inertia: enlace normal -->
                                <a
                                    v-if="$page.props.nav?.mcp"
                                    :href="$page.props.nav.mcp"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors"
                                >
                                    Conectar con Claude
                                </a>
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
                class="xl:hidden border-t border-gray-100 dark:border-gray-800 px-4 sm:px-6 py-2"
            >
                <component
                    v-for="item in primaryNav"
                    :key="item.route"
                    :is="item.inertia ? Link : 'a'"
                    :href="item.href"
                    @click="showMobileNav = false"
                    :aria-current="isActive(item) ? 'page' : undefined"
                    class="block px-2 py-2.5 text-sm transition-colors"
                    :class="isActive(item) ? 'text-brand-700 dark:text-brand-400 font-medium' : 'text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white'"
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
                        <Link :href="route('tools.index')" class="hover:text-gray-900 dark:hover:text-white transition-colors">Herramientas</Link>
                        <Link :href="route('rankings.index')" class="hover:text-gray-900 dark:hover:text-white transition-colors">Ranking</Link>
                        <a href="/guias" class="hover:text-gray-900 dark:hover:text-white transition-colors">Guías</a>
                        <a href="/feed.xml" class="hover:text-gray-900 dark:hover:text-white transition-colors">RSS</a>
                        <!-- /mcp es Blade, no Inertia: enlace normal -->
                        <a v-if="$page.props.nav?.mcp" :href="$page.props.nav.mcp" class="hover:text-gray-900 dark:hover:text-white transition-colors">Usar en Claude (MCP)</a>
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

                <p class="mt-8 text-xs text-gray-400 dark:text-gray-500">
                    © {{ new Date().getFullYear() }} ia-skills.com ·
                    <!-- Misma dirección que Seo::INSTAGRAM -->
                    <a href="https://www.instagram.com/ia_skills/" rel="me noopener" target="_blank" class="hover:text-gray-900 dark:hover:text-white transition-colors">Instagram</a>
                </p>
            </div>
        </footer>
    </div>
</template>
