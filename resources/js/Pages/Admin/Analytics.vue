<script setup>
import { Head, Link } from '@inertiajs/vue3'
import { computed, ref } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import AdminNav from '@/Components/AdminNav.vue'

// Panel de la analítica propia (App\Support\Analytics::report).
const props = defineProps({
    report: { type: Object, required: true },
    ranges: { type: Array, required: true },
})

const fmt = new Intl.NumberFormat('es-ES')
const n = (v) => fmt.format(v)

function change(current, previous) {
    if (!previous) return null
    return Math.round(((current - previous) / previous) * 100)
}

const tiles = computed(() => {
    const t = props.report.totals
    return [
        { label: 'Visitantes', value: n(t.visitors), change: change(t.visitors, t.prevVisitors), hint: 'Suma de visitantes únicos de cada día' },
        { label: 'Páginas vistas', value: n(t.views), change: change(t.views, t.prevViews) },
        { label: 'Páginas por visitante', value: String(t.perVisitor).replace('.', ',') },
    ]
})

// Gráfico de barras: visitantes por día.
const W = 720
const H = 180
const PAD_B = 22
const series = computed(() => props.report.series)
const maxVisitors = computed(() => Math.max(1, ...series.value.map((d) => d.visitors)))
const bars = computed(() => {
    const count = series.value.length
    const slot = W / count
    const width = Math.max(2, slot - 2)
    return series.value.map((d, i) => {
        const h = Math.round((d.visitors / maxVisitors.value) * (H - PAD_B - 8))
        return { ...d, x: i * slot + 1, y: H - PAD_B - h, w: width, h, slotX: i * slot, slot }
    })
})
const tickEvery = computed(() => Math.ceil(series.value.length / 8))
const hovered = ref(null)

function dayLabel(iso, long = false) {
    const d = new Date(iso + 'T00:00:00')
    return d.toLocaleDateString('es-ES', long ? { weekday: 'short', day: 'numeric', month: 'short' } : { day: 'numeric', month: 'short' })
}

const share = (part, rows) => {
    const total = rows.reduce((s, r) => s + r.views, 0)
    return total ? Math.round((part / total) * 100) : 0
}

const deviceNames = { mobile: 'Móvil', desktop: 'Ordenador', tablet: 'Tableta' }
</script>

<template>
    <AppLayout>
        <Head title="Analítica" />

        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-8 space-y-8">
            <AdminNav />
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Analítica</h1>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Visitas reales (con JavaScript), sin bots ni cookies. Tus visitas como admin no cuentan.</p>
                </div>
                <nav class="flex gap-1 rounded-xl bg-gray-100 dark:bg-gray-800 p-1 text-sm" aria-label="Periodo">
                    <Link
                        v-for="r in ranges"
                        :key="r"
                        :href="route('admin.analytics', { dias: r })"
                        preserve-scroll
                        :class="[
                            'px-3 py-1.5 rounded-lg',
                            r === report.days ? 'bg-white dark:bg-gray-700 font-semibold text-gray-900 dark:text-white shadow-sm' : 'text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white',
                        ]"
                    >{{ r }} días</Link>
                </nav>
            </div>

            <!-- Cifras -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div v-for="t in tiles" :key="t.label" class="rounded-2xl border border-gray-100 dark:border-gray-800 p-5" :title="t.hint">
                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ t.label }}</p>
                    <p class="mt-1 text-3xl font-bold text-gray-900 dark:text-white tabular-nums">{{ t.value }}</p>
                    <p v-if="t.change !== null && t.change !== undefined" class="mt-1 text-xs text-gray-500 dark:text-gray-400">
                        <span :class="t.change >= 0 ? 'text-green-700 dark:text-green-400' : 'text-red-600 dark:text-red-400'">
                            {{ t.change >= 0 ? '▲' : '▼' }} {{ Math.abs(t.change) }} %
                        </span>
                        frente a los {{ report.days }} días anteriores
                    </p>
                </div>
            </div>

            <!-- Visitantes por día -->
            <section class="rounded-2xl border border-gray-100 dark:border-gray-800 p-5">
                <h2 class="font-semibold text-gray-900 dark:text-white">Visitantes por día</h2>
                <div class="relative mt-4">
                    <svg :viewBox="`0 0 ${W} ${H}`" class="w-full h-auto" role="img" :aria-label="`Visitantes por día en los últimos ${report.days} días`" @mouseleave="hovered = null">
                        <line :x1="0" :x2="W" :y1="H - PAD_B" :y2="H - PAD_B" class="stroke-gray-200 dark:stroke-gray-700" stroke-width="1" />
                        <g v-for="(b, i) in bars" :key="b.day">
                            <rect :x="b.x" :y="b.y" :width="b.w" :height="b.h" rx="2" :class="hovered === i ? 'fill-brand-700 dark:fill-brand-300' : 'fill-brand-500 dark:fill-brand-400'" />
                            <rect :x="b.slotX" :y="0" :width="b.slot" :height="H - PAD_B" fill="transparent" @mouseenter="hovered = i" @focus="hovered = i" tabindex="0" />
                            <text v-if="i % tickEvery === 0" :x="b.slotX + b.slot / 2" :y="H - 6" text-anchor="middle" class="fill-gray-400 text-[10px]">{{ dayLabel(b.day) }}</text>
                        </g>
                    </svg>
                    <div
                        v-if="hovered !== null"
                        class="pointer-events-none absolute -top-2 rounded-lg bg-gray-900 dark:bg-gray-100 px-3 py-2 text-xs text-white dark:text-gray-900 shadow-lg"
                        :style="{ left: `${((bars[hovered].slotX + bars[hovered].slot / 2) / W) * 100}%`, transform: 'translate(-50%, -100%)' }"
                    >
                        <p class="font-semibold capitalize">{{ dayLabel(bars[hovered].day, true) }}</p>
                        <p>{{ n(bars[hovered].visitors) }} visitantes · {{ n(bars[hovered].views) }} páginas</p>
                    </div>
                </div>
            </section>

            <div class="grid gap-6 lg:grid-cols-3">
                <!-- Páginas -->
                <section class="lg:col-span-2 rounded-2xl border border-gray-100 dark:border-gray-800 p-5">
                    <h2 class="font-semibold text-gray-900 dark:text-white">Páginas más vistas</h2>
                    <table class="mt-3 w-full text-sm">
                        <thead class="text-left text-xs text-gray-500 dark:text-gray-400">
                            <tr><th class="py-2 font-medium">Página</th><th class="py-2 font-medium text-right">Visitantes</th><th class="py-2 font-medium text-right">Vistas</th></tr>
                        </thead>
                        <tbody>
                            <tr v-for="p in report.pages" :key="p.label" class="border-t border-gray-100 dark:border-gray-800">
                                <td class="py-2 pr-3 max-w-0 w-full">
                                    <a :href="p.label" target="_blank" rel="noopener" class="block truncate text-gray-700 dark:text-gray-300 hover:text-brand-600" :title="p.label">{{ p.label }}</a>
                                </td>
                                <td class="py-2 text-right tabular-nums text-gray-900 dark:text-white">{{ n(p.visitors) }}</td>
                                <td class="py-2 pl-3 text-right tabular-nums text-gray-500 dark:text-gray-400">{{ n(p.views) }}</td>
                            </tr>
                            <tr v-if="!report.pages.length"><td colspan="3" class="py-6 text-center text-gray-400">Todavía no hay visitas registradas.</td></tr>
                        </tbody>
                    </table>
                </section>

                <div class="space-y-6">
                    <!-- Procedencia -->
                    <section class="rounded-2xl border border-gray-100 dark:border-gray-800 p-5">
                        <h2 class="font-semibold text-gray-900 dark:text-white">De dónde llegan</h2>
                        <ul class="mt-3 space-y-2 text-sm">
                            <li v-for="s in report.sources" :key="s.label ?? 'directo'">
                                <div class="flex justify-between gap-3">
                                    <span class="truncate text-gray-700 dark:text-gray-300">{{ s.label ?? 'Directo o desconocido' }}</span>
                                    <span class="tabular-nums text-gray-900 dark:text-white">{{ share(s.views, report.sources) }} %</span>
                                </div>
                                <div class="mt-1 h-1.5 rounded-full bg-gray-100 dark:bg-gray-800"><div class="h-1.5 rounded-full bg-brand-500 dark:bg-brand-400" :style="{ width: share(s.views, report.sources) + '%' }" /></div>
                            </li>
                        </ul>
                    </section>

                    <!-- Dispositivos -->
                    <section class="rounded-2xl border border-gray-100 dark:border-gray-800 p-5">
                        <h2 class="font-semibold text-gray-900 dark:text-white">Dispositivos</h2>
                        <ul class="mt-3 space-y-2 text-sm">
                            <li v-for="d in report.devices" :key="d.label" class="flex justify-between">
                                <span class="text-gray-700 dark:text-gray-300">{{ deviceNames[d.label] ?? d.label }}</span>
                                <span class="tabular-nums text-gray-900 dark:text-white">{{ share(d.views, report.devices) }} %</span>
                            </li>
                        </ul>
                    </section>

                    <!-- Afiliados -->
                    <section class="rounded-2xl border border-gray-100 dark:border-gray-800 p-5">
                        <h2 class="font-semibold text-gray-900 dark:text-white">Clics en afiliados</h2>
                        <ul v-if="report.affiliates.tools.length" class="mt-3 space-y-2 text-sm">
                            <li v-for="a in report.affiliates.tools" :key="a.label" class="flex justify-between">
                                <span class="text-gray-700 dark:text-gray-300">{{ a.label }}</span>
                                <span class="tabular-nums text-gray-900 dark:text-white">{{ n(a.clicks) }}</span>
                            </li>
                        </ul>
                        <p v-else class="mt-3 text-sm text-gray-400">Sin clics en este periodo.</p>
                        <template v-if="report.affiliates.pages.length">
                            <p class="mt-4 text-xs font-medium text-gray-500 dark:text-gray-400">Desde qué páginas</p>
                            <ul class="mt-2 space-y-1.5 text-xs">
                                <li v-for="p in report.affiliates.pages" :key="p.label + p.tool" class="flex justify-between gap-3">
                                    <a :href="p.label" target="_blank" rel="noopener" class="truncate text-gray-600 dark:text-gray-400 hover:text-brand-600" :title="p.label">{{ p.label }}</a>
                                    <span class="tabular-nums text-gray-900 dark:text-white">{{ n(p.clicks) }}</span>
                                </li>
                            </ul>
                        </template>
                    </section>

                    <!-- Campañas -->
                    <section v-if="report.campaigns.length" class="rounded-2xl border border-gray-100 dark:border-gray-800 p-5">
                        <h2 class="font-semibold text-gray-900 dark:text-white">Campañas (utm_source)</h2>
                        <ul class="mt-3 space-y-2 text-sm">
                            <li v-for="c in report.campaigns" :key="c.label" class="flex justify-between">
                                <span class="text-gray-700 dark:text-gray-300">{{ c.label }}</span>
                                <span class="tabular-nums text-gray-900 dark:text-white">{{ n(c.visitors) }}</span>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
