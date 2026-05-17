<script setup>
import { Head, Link } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import SkillCard from '@/Components/SkillCard.vue'

defineProps({
    profession: Object,
    skills: Object,
})
</script>

<template>
    <Head>
        <title>Skills de IA para {{ profession.name }} — ia-skills</title>
        <meta name="description" :content="`Los mejores workflows y prompts de IA para ${profession.name}. ${profession.skills_count ?? ''} skills validadas por la comunidad.`" />
        <link rel="canonical" :href="route('professions.show', { profession: profession.slug })" />
        <meta property="og:type" content="website" />
        <meta property="og:url" :content="route('professions.show', { profession: profession.slug })" />
        <meta property="og:title" :content="`Skills de IA para ${profession.name} — ia-skills`" />
        <meta property="og:description" :content="`Los mejores workflows y prompts de IA para ${profession.name}. ${profession.skills_count ?? ''} skills validadas por la comunidad.`" />
        <meta property="og:image" :content="route('og.profession', { profession: profession.slug })" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" :content="`Skills de IA para ${profession.name} — ia-skills`" />
        <meta name="twitter:description" :content="`Los mejores workflows y prompts de IA para ${profession.name}. Validados por la comunidad.`" />
        <meta name="twitter:image" :content="route('og.profession', { profession: profession.slug })" />
    </Head>

    <!-- BreadcrumbList + ItemList combinados -->
    <component :is="'script'" type="application/ld+json" :innerHTML='JSON.stringify({
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Profesiones", "item": route("professions.index") },
            { "@type": "ListItem", "position": 2, "name": profession.name, "item": route("professions.show", { profession: profession.slug }) }
        ]
    })' />
    <component :is="'script'" type="application/ld+json" :innerHTML='JSON.stringify({
        "@context": "https://schema.org",
        "@type": "ItemList",
        "name": `Skills de IA para ${profession.name}`,
        "description": `Los mejores workflows y prompts de IA para ${profession.name}`,
        "url": route("professions.show", { profession: profession.slug }),
        "numberOfItems": profession.skills_count ?? 0,
        "itemListElement": (skills?.data ?? []).map((skill, i) => ({
            "@type": "ListItem",
            "position": i + 1,
            "name": skill.title,
            "url": route("skills.show", { skill: skill.slug }),
        })),
    })' />

    <AppLayout>
        <!-- Header -->
        <div class="bg-gradient-to-b from-brand-50 to-white dark:from-gray-800 dark:to-gray-900 border-b border-gray-100 dark:border-gray-700">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 py-10">
                <div class="flex items-center gap-2 text-sm text-gray-400 dark:text-gray-500 mb-4">
                    <Link :href="route('professions.index')" class="hover:text-brand-600 dark:hover:text-brand-400 transition-colors">Profesiones</Link>
                    <span>/</span>
                    <span class="text-gray-700 dark:text-gray-300">{{ profession.name }}</span>
                </div>
                <div class="flex items-start gap-4">
                    <span class="text-4xl">{{ profession.icon }}</span>
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Skills de IA para {{ profession.name }}</h1>
                        <p class="mt-1.5 text-gray-500 dark:text-gray-400">{{ profession.description }}</p>
                        <p class="mt-2 text-sm font-medium text-brand-600 dark:text-brand-400">{{ profession.skills_count }} skills</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skills list -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 py-10">
            <div v-if="skills.data.length" class="flex flex-col gap-3">
                <SkillCard
                    v-for="skill in skills.data"
                    :key="skill.id"
                    :skill="skill"
                />
            </div>
            <div v-else class="text-center py-20 text-gray-400 dark:text-gray-500">
                <p class="text-lg font-medium">Aún no hay skills para esta profesión.</p>
                <Link :href="route('skills.create')" class="btn-primary mt-4">Sé el primero en compartir →</Link>
            </div>

            <!-- Pagination -->
            <div v-if="skills.last_page > 1" class="mt-8 flex justify-center gap-2">
                <Link
                    v-for="link in skills.links"
                    :key="link.label"
                    :href="link.url || '#'"
                    :class="[
                        'px-3 py-1.5 rounded-lg text-sm border transition-colors',
                        link.active ? 'bg-brand-600 text-white border-brand-600' : 'border-gray-200 dark:border-gray-700 text-gray-600 dark:text-gray-300 hover:border-brand-300 dark:hover:border-brand-500',
                        !link.url ? 'opacity-40 pointer-events-none' : ''
                    ]"
                    v-html="link.label"
                />
            </div>
        </div>
    </AppLayout>
</template>
