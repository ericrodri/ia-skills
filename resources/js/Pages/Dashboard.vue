<script setup>
import { Head, Link, usePage } from '@inertiajs/vue3'
import { computed } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import Pagination from '@/Components/Pagination.vue'

const props = defineProps({
    // Pendientes y rechazadas (todas) + publicadas (paginadas): ver DashboardController
    pending: { type: Array, default: () => [] },
    published: { type: Object, required: true },
    stats: { type: Object, required: true },
    recentComments: { type: Array, default: () => [] },
    preferences: { type: Object, default: () => ({}) },
})

const user = computed(() => usePage().props.auth.user)

const statusLabel = { draft: 'Pendiente de revisión', published: 'Publicada', rejected: 'Rechazada' }
const statusClass = {
    draft: 'bg-amber-50 dark:bg-amber-900/30 text-amber-700 dark:text-amber-300 border-amber-200 dark:border-amber-700',
    published: 'bg-green-50 dark:bg-green-900/30 text-green-700 dark:text-green-300 border-green-200 dark:border-green-700',
    rejected: 'bg-red-50 dark:bg-red-900/30 text-red-700 dark:text-red-300 border-red-200 dark:border-red-700',
}

// Las pendientes solo se muestran en la primera página del listado.
const skills = computed(() => [
    ...(props.published.current_page === 1 ? props.pending : []),
    ...props.published.data,
])

const statCards = computed(() => [
    { label: 'Publicadas', value: props.stats.published },
    { label: 'Votos recibidos', value: props.stats.votes },
    { label: 'Veces guardadas', value: props.stats.saves },
    { label: 'Vistas', value: props.stats.views },
])

const formatDate = (iso) => new Date(iso).toLocaleDateString('es-ES', { day: 'numeric', month: 'short', year: 'numeric' })
const formatNumber = (n) => new Intl.NumberFormat('es-ES').format(n ?? 0)
</script>

<template>
    <Head title="Mi panel" />

    <AppLayout>
        <div class="max-w-5xl mx-auto px-4 sm:px-6 py-10">
            <div class="flex flex-wrap items-end justify-between gap-4 mb-8">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Hola, {{ user.name }}</h1>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                        Tus skills, lo que han conseguido y lo que opina la comunidad.
                    </p>
                </div>
                <div class="flex flex-wrap gap-2">
                    <Link v-if="user.username" :href="route('authors.show', user.username)" class="btn-secondary text-sm">Ver mi perfil público</Link>
                    <Link :href="route('skills.create')" class="btn-primary text-sm">+ Compartir skill</Link>
                </div>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mb-10">
                <div v-for="card in statCards" :key="card.label" class="rounded-xl border border-gray-200 dark:border-gray-700 p-4">
                    <p class="text-2xl font-bold text-gray-900 dark:text-gray-100 tabular-nums">{{ formatNumber(card.value) }}</p>
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">{{ card.label }}</p>
                </div>
            </div>

            <div class="lg:flex gap-10">
                <!-- Mis skills -->
                <section class="flex-1 min-w-0">
                    <h2 class="font-semibold text-gray-900 dark:text-gray-100 mb-4">
                        Mis skills
                        <span v-if="stats.pending" class="ml-2 text-xs font-normal text-amber-600 dark:text-amber-400">{{ stats.pending }} pendiente{{ stats.pending === 1 ? '' : 's' }} de revisión</span>
                    </h2>

                    <div v-if="!skills.length" class="rounded-xl border border-dashed border-gray-300 dark:border-gray-700 p-8 text-center">
                        <p class="text-gray-600 dark:text-gray-400">Todavía no has compartido ninguna skill.</p>
                        <p class="mt-1 text-sm text-gray-400 dark:text-gray-500">¿Tienes un prompt que te ahorra tiempo cada semana? Es justo lo que buscamos.</p>
                        <Link :href="route('skills.create')" class="mt-4 inline-flex btn-primary text-sm">Compartir mi primera skill</Link>
                    </div>

                    <ul v-else class="divide-y divide-gray-100 dark:divide-gray-800 rounded-xl border border-gray-200 dark:border-gray-700">
                        <li v-for="skill in skills" :key="skill.id" class="p-4">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="text-[11px] font-medium px-2 py-0.5 rounded-md border" :class="statusClass[skill.status]">{{ statusLabel[skill.status] }}</span>
                                <span v-if="skill.profession" class="text-xs text-gray-400 dark:text-gray-500">{{ skill.profession.name }}</span>
                                <span class="text-xs text-gray-400 dark:text-gray-500">· v{{ skill.version }} · {{ formatDate(skill.created_at) }}</span>
                            </div>
                            <div class="mt-1.5 flex items-start justify-between gap-4">
                                <Link :href="route('skills.show', skill.slug)" class="font-medium text-gray-900 dark:text-gray-100 hover:text-brand-600 dark:hover:text-brand-400 line-clamp-2">{{ skill.title }}</Link>
                                <Link :href="route('skills.edit', skill.slug)" class="shrink-0 text-xs text-gray-500 dark:text-gray-400 hover:text-brand-600">Editar</Link>
                            </div>
                            <p v-if="skill.status === 'rejected' && skill.rejection_reason" class="mt-2 text-xs text-red-700 dark:text-red-300 bg-red-50 dark:bg-red-900/20 rounded-lg px-3 py-2">
                                <span class="font-semibold">Motivo:</span> {{ skill.rejection_reason }} — edítala y la revisaremos de nuevo.
                            </p>
                            <p v-if="skill.status === 'published'" class="mt-2 flex flex-wrap gap-x-4 gap-y-1 text-xs text-gray-500 dark:text-gray-400 tabular-nums">
                                <span>▲ {{ formatNumber(skill.vote_score) }} votos</span>
                                <span>{{ formatNumber(skill.saves_count) }} guardadas</span>
                                <span>{{ formatNumber(skill.views_count) }} vistas</span>
                                <span>{{ skill.comments_count }} comentarios</span>
                            </p>
                        </li>
                    </ul>

                    <Pagination :paginator="published" />
                </section>

                <aside class="lg:w-80 shrink-0 mt-10 lg:mt-0 space-y-8">
                    <!-- Comentarios recibidos -->
                    <section>
                        <h2 class="font-semibold text-gray-900 dark:text-gray-100 mb-4">Últimos comentarios</h2>
                        <p v-if="!recentComments.length" class="text-sm text-gray-400 dark:text-gray-500">Cuando alguien comente tus skills, lo verás aquí.</p>
                        <ul v-else class="space-y-4">
                            <li v-for="c in recentComments" :key="c.id" class="text-sm">
                                <p class="text-gray-700 dark:text-gray-300 line-clamp-3">«{{ c.content }}»</p>
                                <p class="mt-1 text-xs text-gray-400 dark:text-gray-500">
                                    {{ c.user?.name }} en
                                    <Link :href="route('skills.show', c.skill.slug) + '#comentarios'" class="text-brand-600 dark:text-brand-400 hover:underline">{{ c.skill.title }}</Link>
                                </p>
                            </li>
                        </ul>
                    </section>

                    <!-- Preferencias -->
                    <section class="rounded-xl border border-gray-200 dark:border-gray-700 p-4 text-sm">
                        <h2 class="font-semibold text-gray-900 dark:text-gray-100 mb-3">Avisos por email</h2>
                        <ul class="space-y-1.5 text-gray-600 dark:text-gray-400">
                            <li>{{ preferences.notify_by_email ? '✓' : '✕' }} Aprobaciones y comentarios en mis skills</li>
                            <li>{{ preferences.newsletter_opt_in ? '✓' : '✕' }} Resumen semanal de novedades</li>
                        </ul>
                        <Link :href="route('profile.edit')" class="mt-3 inline-block text-xs text-brand-600 dark:text-brand-400 hover:underline">Cambiar preferencias</Link>
                    </section>

                    <section class="text-sm">
                        <Link :href="route('skills.saved')" class="text-gray-600 dark:text-gray-400 hover:text-brand-600">
                            Tienes {{ stats.saved_by_me }} skill{{ stats.saved_by_me === 1 ? '' : 's' }} guardada{{ stats.saved_by_me === 1 ? '' : 's' }} →
                        </Link>
                    </section>
                </aside>
            </div>
        </div>
    </AppLayout>
</template>
