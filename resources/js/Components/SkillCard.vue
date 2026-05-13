<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
    skill: { type: Object, required: true },
})

const difficultyLabel = { beginner: 'Principiante', intermediate: 'Intermedio', advanced: 'Avanzado' }
const difficultyClass = { beginner: 'badge-difficulty-beginner', intermediate: 'badge-difficulty-intermediate', advanced: 'badge-difficulty-advanced' }

const resourceTypeLabel = { claude_skill: 'Skill', claude_plugin: 'Plugin' }
const resourceTypeClass = {
    claude_skill:  'bg-violet-50 dark:bg-violet-900/30 text-violet-700 dark:text-violet-300 border border-violet-200 dark:border-violet-700',
    claude_plugin: 'bg-amber-50 dark:bg-amber-900/30 text-amber-700 dark:text-amber-300 border border-amber-200 dark:border-amber-700',
}
</script>

<template>
    <article class="skill-card group">
        <!-- Vote score -->
        <div class="flex flex-col items-center gap-1 pt-0.5 min-w-[40px]">
            <div class="w-10 h-10 rounded-lg bg-gray-50 dark:bg-gray-800 group-hover:bg-brand-50 dark:group-hover:bg-brand-900/30 flex flex-col items-center justify-center transition-colors">
                <svg class="w-3.5 h-3.5 text-gray-400 dark:text-gray-500 group-hover:text-brand-500 dark:group-hover:text-brand-400 transition-colors" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z" clip-rule="evenodd" />
                </svg>
                <span class="text-xs font-semibold text-gray-700 dark:text-gray-300 group-hover:text-brand-600 dark:group-hover:text-brand-400 leading-none transition-colors">{{ skill.vote_score }}</span>
            </div>
        </div>

        <!-- Content -->
        <div class="flex-1 min-w-0">
            <div class="flex flex-wrap items-center gap-2 mb-1.5">
                <span class="badge-tool">{{ skill.tool_name }}</span>
                <span
                    v-if="skill.resource_type && skill.resource_type !== 'prompt'"
                    :class="resourceTypeClass[skill.resource_type]"
                    class="text-xs font-medium px-1.5 py-0.5 rounded-md"
                >{{ resourceTypeLabel[skill.resource_type] }}</span>
                <span :class="difficultyClass[skill.difficulty]" class="badge">{{ difficultyLabel[skill.difficulty] }}</span>
                <span v-if="skill.estimated_minutes" class="text-xs text-gray-400 dark:text-gray-500">{{ skill.estimated_minutes }} min</span>
            </div>

            <Link :href="route('skills.show', skill.slug)" class="block group/title">
                <h2 class="font-semibold text-gray-900 dark:text-gray-100 group-hover/title:text-brand-600 transition-colors line-clamp-2 leading-snug">
                    {{ skill.title }}
                </h2>
            </Link>

            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400 dark:text-gray-500 line-clamp-2">{{ skill.description }}</p>

            <div class="mt-3 flex items-center gap-4 text-xs text-gray-400 dark:text-gray-500">
                <Link v-if="skill.profession" :href="route('professions.show', skill.profession.slug)" class="hover:text-brand-600 transition-colors">
                    {{ skill.profession.name }}
                </Link>
                <span v-if="skill.comments_count !== undefined" class="flex items-center gap-1">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                    {{ skill.comments_count }}
                </span>
                <span v-if="skill.author" class="flex items-center gap-1">
                    por <span class="font-medium text-gray-600 dark:text-gray-400 dark:text-gray-500">{{ skill.author.name }}</span>
                    <span v-if="skill.author.is_verified_expert" class="text-brand-500" title="Experto verificado">✓</span>
                </span>
            </div>
        </div>
    </article>
</template>
