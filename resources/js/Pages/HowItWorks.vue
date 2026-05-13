<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Head, Link } from '@inertiajs/vue3'
import { ref, computed } from 'vue'

const activeAI = ref('claude')

const aiTools = [
    {
        id: 'claude',
        name: 'Claude',
        company: 'Anthropic',
        logo: '🟠',
        color: 'orange',
        badge: 'Recomendado',
        badgeColor: 'bg-orange-100 dark:bg-orange-900/30 text-orange-700 dark:text-orange-400',
        borderActive: 'border-orange-400 dark:border-orange-500',
        steps: [
            {
                icon: '📋',
                title: 'Copia el prompt',
                desc: 'Pulsa "Abrir en Claude" en cualquier skill. El prompt se carga automáticamente con el prefijo que le indica a Claude qué debe hacer.'
            },
            {
                icon: '✏️',
                title: 'Rellena las variables',
                desc: 'Sustituye los campos en [MAYÚSCULAS] con tu información real: tu empresa, producto, contexto específico.'
            },
            {
                icon: '⚡',
                title: 'Ejecuta y refina',
                desc: 'Claude genera el output estructurado. Puedes pedir ajustes en la misma conversación sin repetir el contexto.'
            },
        ],
        tip: 'Claude es especialmente bueno siguiendo estructuras complejas y generando outputs con múltiples secciones. Funciona muy bien con los prompts más avanzados de ia-skills.',
        url: 'https://claude.ai',
    },
    {
        id: 'chatgpt',
        name: 'ChatGPT',
        company: 'OpenAI',
        logo: '🟢',
        color: 'emerald',
        badge: 'Popular',
        badgeColor: 'bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-400',
        borderActive: 'border-emerald-400 dark:border-emerald-500',
        steps: [
            {
                icon: '📋',
                title: 'Copia el prompt completo',
                desc: 'Copia el prompt desde la skill. En ChatGPT, pégalo directamente en el chat de GPT-4o o GPT-4.'
            },
            {
                icon: '✏️',
                title: 'Personaliza antes de enviar',
                desc: 'Edita los campos [VARIABLE] en el prompt antes de enviarlo. ChatGPT no tiene sistema de variables nativo.'
            },
            {
                icon: '💾',
                title: 'Guarda como GPT personalizado',
                desc: 'Para skills que uses frecuentemente, crea un GPT personalizado con el prompt como instrucciones del sistema.'
            },
        ],
        tip: 'En ChatGPT puedes usar los prompts en la ventana de chat o configurarlos como GPTs. Los modelos GPT-4o y o1 dan los mejores resultados con prompts complejos.',
        url: 'https://chat.openai.com',
    },
    {
        id: 'gemini',
        name: 'Gemini',
        company: 'Google',
        logo: '🔵',
        color: 'blue',
        badge: 'Multimodal',
        badgeColor: 'bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-400',
        borderActive: 'border-blue-400 dark:border-blue-500',
        steps: [
            {
                icon: '📋',
                title: 'Pega el prompt en Gemini',
                desc: 'Abre gemini.google.com y pega el prompt directamente. Usa Gemini 1.5 Pro o Gemini 2.0 para mejores resultados.'
            },
            {
                icon: '✏️',
                title: 'Rellena el contexto',
                desc: 'Sustituye las variables [EN CORCHETES] con tu información. Gemini entiende bien el español y el contexto profesional.'
            },
            {
                icon: '🔗',
                title: 'Integra con Google Workspace',
                desc: 'Si usas Google Docs, Sheets o Gmail, puedes activar Gemini dentro de esas apps y usar los prompts de ia-skills directamente.'
            },
        ],
        tip: 'Gemini destaca cuando el prompt necesita procesar documentos de Google Drive o cuando trabajas en el ecosistema de Google Workspace. La versión Advanced (1.5 Pro) da mejores resultados.',
        url: 'https://gemini.google.com',
    },
    {
        id: 'copilot',
        name: 'Copilot',
        company: 'Microsoft',
        logo: '🟣',
        color: 'violet',
        badge: 'Integrado en Office',
        badgeColor: 'bg-violet-100 dark:bg-violet-900/30 text-violet-700 dark:text-violet-400',
        borderActive: 'border-violet-400 dark:border-violet-500',
        steps: [
            {
                icon: '📋',
                title: 'Usa el prompt en Copilot Chat',
                desc: 'Ve a copilot.microsoft.com o actívalo desde Edge. Pega el prompt completo con las variables ya rellenadas.'
            },
            {
                icon: '📄',
                title: 'Aprovecha el contexto de Office',
                desc: 'En Word, Excel o Teams, Copilot puede acceder a tus documentos. Indica al principio: "Basándote en [documento adjunto]..."'
            },
            {
                icon: '🔒',
                title: 'Ventaja en entornos corporativos',
                desc: 'Copilot M365 opera dentro del tenant de tu empresa con privacidad garantizada — ideal para skills con datos sensibles.'
            },
        ],
        tip: 'Microsoft Copilot es la mejor opción si tu empresa usa el stack M365. Las skills de ventas, finanzas y RRHH funcionan especialmente bien porque Copilot puede acceder a datos de Outlook, Teams y SharePoint.',
        url: 'https://copilot.microsoft.com',
    },
    {
        id: 'perplexity',
        name: 'Perplexity',
        company: 'Perplexity AI',
        logo: '⚫',
        color: 'gray',
        badge: 'Con búsqueda web',
        badgeColor: 'bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300',
        borderActive: 'border-gray-400 dark:border-gray-500',
        steps: [
            {
                icon: '📋',
                title: 'Pega el prompt con búsqueda activada',
                desc: 'En Perplexity, los prompts de ia-skills se potencian con búsqueda web en tiempo real. Activa el modo "Research" para análisis profundos.'
            },
            {
                icon: '🔍',
                title: 'Añade contexto de búsqueda',
                desc: 'Después de las variables, añade: "Investiga también datos actuales de [TEMA]" para que Perplexity complemente el prompt con información reciente.'
            },
            {
                icon: '📚',
                title: 'Cita fuentes automáticamente',
                desc: 'Perplexity añade referencias a sus outputs. Útil para skills de análisis de mercado, legal o finanzas donde necesitas fuentes verificables.'
            },
        ],
        tip: 'Perplexity es la mejor opción para skills que requieren información actualizada: análisis de competidores, noticias del sector, datos de mercado. Combina el prompt estructurado con búsqueda web en tiempo real.',
        url: 'https://perplexity.ai',
    },
]

const currentTool = computed(() => aiTools.find(t => t.id === activeAI.value))

const faqItems = [
    {
        q: '¿Qué son las IA skills?',
        a: 'Las IA skills son instrucciones estructuradas — prompts, workflows o extensiones — que permiten a profesionales obtener resultados específicos y repetibles con herramientas de inteligencia artificial como Claude, ChatGPT o Gemini. A diferencia de un prompt genérico, una skill está diseñada para un caso de uso concreto (redactar un brief, analizar un contrato, generar código) y puede reutilizarse indefinidamente con distintos datos de entrada.',
    },
    {
        q: '¿Para qué sirven las skills de inteligencia artificial?',
        a: 'Las skills de IA sirven para automatizar y acelerar tareas profesionales repetitivas: generación de contenido, análisis de documentos, escritura de código, investigación de mercado, atención al cliente y mucho más. En lugar de escribir instrucciones desde cero cada vez, usas una skill ya validada por la comunidad que produce resultados de alta calidad de forma consistente.',
    },
    {
        q: '¿Qué herramientas de IA puedo usar con estas skills?',
        a: 'La mayoría de skills funcionan con cualquier IA conversacional: Claude (Anthropic), ChatGPT (OpenAI), Gemini (Google) y Perplexity. Las skills de tipo "Claude Skill" o "Claude Plugin" son exclusivas de Claude Code, la herramienta de desarrollo de Anthropic. Cada skill indica con qué herramienta está optimizada.',
    },
    {
        q: '¿Las IA skills son gratuitas?',
        a: 'Sí, todas las skills de esta biblioteca son gratuitas. Puedes explorar, copiar y usar cualquier skill sin coste. Algunas skills requieren herramientas de IA de pago (como Claude Pro o ChatGPT Plus) para obtener los mejores resultados, pero la skill en sí siempre es de acceso libre.',
    },
    {
        q: '¿Necesito saber programar para usar las skills?',
        a: 'No. Las skills de tipo Prompt y Workflow son texto — copias el prompt, rellenas las variables con tu información y lo pegas en Claude, ChatGPT o cualquier IA. No hay código, ni instalaciones, ni configuraciones técnicas. Las skills de tipo "Claude Skill" o "Plugin" sí requieren usar la terminal, pero incluyen instrucciones de instalación paso a paso.',
    },
    {
        q: '¿Funcionan con la versión gratuita de Claude o ChatGPT?',
        a: 'Sí, la mayoría funcionan. Las skills marcadas como "avanzadas" dan mejores resultados con modelos de pago (Claude Sonnet/Opus, GPT-4o, Gemini Advanced) porque requieren razonamiento más complejo. Las skills de nivel principiante e intermedio funcionan bien con los modelos gratuitos.',
    },
    {
        q: '¿Puedo modificar una skill para adaptarla a mi caso?',
        a: 'Sí. Las skills son plantillas, no recetas cerradas. Puedes añadir variables, cambiar el idioma de salida, ajustar el tono o eliminar secciones que no necesites. Cuanto más adaptes la skill a tu contexto, mejor será el resultado.',
    },
    {
        q: '¿Qué diferencia hay entre un Prompt, un Skill y un Plugin?',
        a: 'Un Prompt es texto con instrucciones que copias y pegas en cualquier IA, sin instalación. Una Skill (Claude Skill) es un archivo SKILL.md que enseña a Claude Code un comportamiento específico, se instala con git clone y se activa con un comando /nombre. Un Plugin es una extensión instalada vía el marketplace oficial de Claude Code, más potente que una Skill: puede incluir hooks y scripts, y permanece activo en todas las sesiones.',
    },
    {
        q: '¿Cómo sé que las skills son seguras?',
        a: 'Todas las skills pasan por un proceso de revisión humana antes de publicarse. Nuestro equipo verifica que el contenido sea seguro, profesional y útil. Rechazamos cualquier skill que contenga instrucciones maliciosas, código ejecutable peligroso o contenido que pueda usarse para dañar a terceros.',
    },
]

const faqJsonLd = computed(() => JSON.stringify({
    '@context': 'https://schema.org',
    '@type': 'FAQPage',
    'mainEntity': faqItems.map(item => ({
        '@type': 'Question',
        'name': item.q,
        'acceptedAnswer': { '@type': 'Answer', 'text': item.a },
    })),
}))
</script>

<template>
    <AppLayout>
        <Head>
            <title>Cómo funciona ia-skills — Aprende a usar skills de IA</title>
            <meta name="description" content="Descubre cómo importar, usar y compartir skills de IA con ia-skills. Guía paso a paso para sacar el máximo partido a tus herramientas de IA." />
            <link rel="canonical" :href="route('how-it-works')" />
            <meta property="og:type" content="website" />
            <meta property="og:url" :content="route('how-it-works')" />
            <meta property="og:title" content="Cómo funciona ia-skills — Aprende a usar skills de IA" />
            <meta property="og:description" content="Descubre cómo importar, usar y compartir skills de IA con ia-skills." />
            <meta property="og:image" content="/og-default.svg" />
            <meta name="twitter:card" content="summary_large_image" />
            <meta name="twitter:image" content="/og-default.svg" />
        </Head>
        <div class="bg-white dark:bg-gray-900 transition-colors">

            <!-- Hero -->
            <section class="max-w-4xl mx-auto px-4 sm:px-6 pt-16 pb-12 text-center">
                <div class="inline-flex items-center gap-2 px-3 py-1 bg-brand-50 dark:bg-brand-900/30 text-brand-700 dark:text-brand-300 text-xs font-medium rounded-full mb-6">
                    ⚡ Guía completa
                </div>
                <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 dark:text-white mb-5 leading-tight">
                    ¿Qué es una <span class="text-brand-600 dark:text-brand-400">skill de IA</span><br>y cómo te ayuda?
                </h1>
                <p class="text-lg text-gray-500 dark:text-gray-400 max-w-2xl mx-auto leading-relaxed">
                    Una skill es un prompt profesional diseñado para que cualquier IA produzca un resultado de experto en tu área.
                    Sin prompts vagos, sin prueba y error. Solo resultados.
                </p>
            </section>

            <!-- What is a skill -->
            <section class="max-w-5xl mx-auto px-4 sm:px-6 pb-20">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
                            El problema con los prompts genéricos
                        </h2>
                        <p class="text-gray-500 dark:text-gray-400 mb-4 leading-relaxed">
                            Cuando le pides a una IA <em>"hazme un análisis de mercado"</em>, el resultado es mediocre —
                            porque la IA no sabe tu sector, tu audiencia, ni qué decisión necesitas tomar con ese análisis.
                        </p>
                        <p class="text-gray-500 dark:text-gray-400 leading-relaxed">
                            Una skill soluciona eso. Incluye el rol experto, las preguntas de contexto correctas y
                            el formato de salida exacto que necesitas. La IA pasa de ser genérica a ser tu consultor especializado.
                        </p>
                    </div>
                    <div class="space-y-3">
                        <!-- Bad example -->
                        <div class="rounded-xl border border-red-200 dark:border-red-900/50 bg-red-50 dark:bg-red-900/10 p-4">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-red-500 text-sm font-semibold">❌ Prompt genérico</span>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-400 font-mono">"Hazme un análisis de la competencia"</p>
                            <p class="text-xs text-red-600 dark:text-red-400 mt-2">→ Output vago, sin estructura, no accionable</p>
                        </div>
                        <!-- Good example -->
                        <div class="rounded-xl border border-green-200 dark:border-green-900/50 bg-green-50 dark:bg-green-900/10 p-4">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-green-600 dark:text-green-400 text-sm font-semibold">✅ Skill de ia-skills</span>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-400 font-mono leading-relaxed">
                                "Actúa como un analista de mercado senior... <br>
                                Mi empresa: [EMPRESA] <br>
                                Competidor a analizar: [COMPETIDOR] <br>
                                ## 1. PERFIL DEL COMPETIDOR <br>
                                ## 2. VENTAJAS/DEBILIDADES..."
                            </p>
                            <p class="text-xs text-green-600 dark:text-green-400 mt-2">→ Análisis estructurado, accionable, nivel consultor</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Anatomy of a skill -->
            <section class="bg-gray-50 dark:bg-gray-800/50 py-20 transition-colors">
                <div class="max-w-5xl mx-auto px-4 sm:px-6">
                    <div class="text-center mb-12">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">Anatomía de una skill</h2>
                        <p class="text-gray-500 dark:text-gray-400">Cada skill tiene cuatro partes que trabajan juntas</p>
                    </div>
                    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="bg-white dark:bg-gray-900 rounded-xl border border-gray-200 dark:border-gray-700 p-5 transition-colors">
                            <div class="w-10 h-10 rounded-lg bg-brand-100 dark:bg-brand-900/30 flex items-center justify-center text-xl mb-3">🎭</div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Rol experto</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Le dice a la IA que actúe como un profesional específico con experiencia concreta. Esto cambia completamente la calidad del output.</p>
                        </div>
                        <div class="bg-white dark:bg-gray-900 rounded-xl border border-gray-200 dark:border-gray-700 p-5 transition-colors">
                            <div class="w-10 h-10 rounded-lg bg-violet-100 dark:bg-violet-900/30 flex items-center justify-center text-xl mb-3">📝</div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Variables de contexto</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Campos en [CORCHETES] que tú rellenas con tu información real. Hacen que la skill sea reutilizable por cualquier profesional.</p>
                        </div>
                        <div class="bg-white dark:bg-gray-900 rounded-xl border border-gray-200 dark:border-gray-700 p-5 transition-colors">
                            <div class="w-10 h-10 rounded-lg bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center text-xl mb-3">📐</div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Estructura de output</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Secciones con ## encabezados, tablas, listas. Indica a la IA exactamente cómo debe organizar su respuesta.</p>
                        </div>
                        <div class="bg-white dark:bg-gray-900 rounded-xl border border-gray-200 dark:border-gray-700 p-5 transition-colors">
                            <div class="w-10 h-10 rounded-lg bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center text-xl mb-3">🎯</div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-1">Caso de uso</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Describe cuándo y para qué usar la skill. Te ayuda a saber si es la herramienta correcta para tu situación concreta.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- How to use: 3 steps -->
            <section class="max-w-5xl mx-auto px-4 sm:px-6 py-20">
                <div class="text-center mb-12">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">Cómo usar una skill en 3 pasos</h2>
                    <p class="text-gray-500 dark:text-gray-400">De cero a resultado profesional en menos de 5 minutos</p>
                </div>
                <div class="relative">
                    <!-- Connector line -->
                    <div class="hidden md:block absolute top-10 left-[calc(16.66%-1px)] right-[calc(16.66%-1px)] h-0.5 bg-gradient-to-r from-brand-200 via-brand-400 to-brand-200 dark:from-brand-900/50 dark:via-brand-600/50 dark:to-brand-900/50"></div>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center relative">
                            <div class="w-20 h-20 rounded-2xl bg-brand-600 dark:bg-brand-500 flex items-center justify-center text-3xl mx-auto mb-4 shadow-lg shadow-brand-500/20">
                                🔍
                            </div>
                            <div class="absolute top-0 right-0 md:top-2 md:right-auto md:left-[calc(50%+2rem)] w-6 h-6 rounded-full bg-white dark:bg-gray-900 border-2 border-brand-400 flex items-center justify-center text-xs font-bold text-brand-600 dark:text-brand-400 hidden md:flex">1</div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Encuentra la skill</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed">
                                Busca por profesión o usa el buscador. Filtra por dificultad y tiempo estimado para encontrar la que encaja con tu situación.
                            </p>
                        </div>
                        <div class="text-center relative">
                            <div class="w-20 h-20 rounded-2xl bg-brand-600 dark:bg-brand-500 flex items-center justify-center text-3xl mx-auto mb-4 shadow-lg shadow-brand-500/20">
                                ✏️
                            </div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Rellena las variables</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed">
                                Sustituye los campos en [CORCHETES] con tu información real. Cuanto más específico seas, mejor será el resultado de la IA.
                            </p>
                        </div>
                        <div class="text-center relative">
                            <div class="w-20 h-20 rounded-2xl bg-brand-600 dark:bg-brand-500 flex items-center justify-center text-3xl mx-auto mb-4 shadow-lg shadow-brand-500/20">
                                🚀
                            </div>
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-2">Obtén el resultado</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400 leading-relaxed">
                                Pulsa "Abrir en Claude" o copia el prompt. La IA genera un output estructurado, accionable y listo para usar.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- AI Tools section -->
            <section class="bg-gray-50 dark:bg-gray-800/50 py-20 transition-colors">
                <div class="max-w-5xl mx-auto px-4 sm:px-6">
                    <div class="text-center mb-10">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">
                            Compatible con todas las IAs del mercado
                        </h2>
                        <p class="text-gray-500 dark:text-gray-400">
                            Las skills de ia-skills funcionan con cualquier IA. Aquí tienes la guía específica para cada una.
                        </p>
                    </div>

                    <!-- AI selector tabs -->
                    <div class="flex flex-wrap justify-center gap-2 mb-8">
                        <button
                            v-for="tool in aiTools"
                            :key="tool.id"
                            @click="activeAI = tool.id"
                            :class="[
                                'flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-medium transition-all border-2',
                                activeAI === tool.id
                                    ? tool.borderActive + ' bg-white dark:bg-gray-900 text-gray-900 dark:text-white shadow-sm'
                                    : 'border-transparent bg-white dark:bg-gray-900 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:border-gray-200 dark:hover:border-gray-700'
                            ]"
                        >
                            <span>{{ tool.logo }}</span>
                            <span>{{ tool.name }}</span>
                            <span v-if="activeAI === tool.id" :class="['text-xs px-1.5 py-0.5 rounded-md font-medium', tool.badgeColor]">
                                {{ tool.badge }}
                            </span>
                        </button>
                    </div>

                    <!-- Tool detail panel -->
                    <template v-for="tool in aiTools" :key="tool.id">
                        <div v-if="activeAI === tool.id" class="bg-white dark:bg-gray-900 rounded-2xl border border-gray-200 dark:border-gray-700 p-6 sm:p-8 transition-colors">
                            <div class="flex items-start justify-between gap-4 mb-8">
                                <div>
                                    <div class="flex items-center gap-3 mb-1">
                                        <span class="text-3xl">{{ tool.logo }}</span>
                                        <h3 class="text-xl font-bold text-gray-900 dark:text-white">{{ tool.name }}</h3>
                                        <span :class="['text-xs px-2 py-0.5 rounded-full font-medium', tool.badgeColor]">{{ tool.badge }}</span>
                                    </div>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ tool.company }}</p>
                                </div>
                                <a
                                    :href="tool.url"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="hidden sm:inline-flex items-center gap-1.5 px-4 py-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 text-sm font-medium hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors"
                                >
                                    Abrir {{ tool.name }} ↗
                                </a>
                            </div>

                            <div class="grid sm:grid-cols-3 gap-4 mb-6">
                                <div v-for="(step, i) in tool.steps" :key="i" class="flex gap-3">
                                    <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-gray-100 dark:bg-gray-800 flex items-center justify-center text-base">
                                        {{ step.icon }}
                                    </div>
                                    <div>
                                        <p class="text-sm font-semibold text-gray-900 dark:text-white mb-0.5">
                                            <span class="text-gray-400 dark:text-gray-600 mr-1">{{ i + 1 }}.</span>{{ step.title }}
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400 leading-relaxed">{{ step.desc }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-brand-50 dark:bg-brand-900/20 rounded-xl p-4 border border-brand-100 dark:border-brand-900/40">
                                <p class="text-sm text-brand-800 dark:text-brand-300 leading-relaxed">
                                    <span class="font-semibold">💡 Pro tip:</span> {{ tool.tip }}
                                </p>
                            </div>
                        </div>
                    </template>
                </div>
            </section>

            <!-- Tipos: Prompt vs Claude Skill vs Claude Plugin -->
            <section class="max-w-5xl mx-auto px-4 sm:px-6 py-20">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center gap-2 px-3 py-1 bg-violet-50 dark:bg-violet-900/30 text-violet-700 dark:text-violet-300 text-xs font-medium rounded-full mb-4">
                        🧩 Claude Code
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">
                        Tres tipos de skills: Prompt, Skill y Plugin
                    </h2>
                    <p class="text-gray-500 dark:text-gray-400 max-w-2xl mx-auto">
                        No todas las skills funcionan igual. Las que llevan el badge <strong class="text-violet-600 dark:text-violet-400">Skill</strong> o <strong class="text-amber-600 dark:text-amber-400">Plugin</strong> son extensiones para Claude Code, la herramienta de IA para desarrolladores de Anthropic — y se instalan de forma diferente.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-6 mb-10">
                    <!-- Prompt -->
                    <div class="bg-white dark:bg-gray-900 rounded-2xl border-2 border-gray-200 dark:border-gray-700 p-6 transition-colors">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl bg-brand-100 dark:bg-brand-900/30 flex items-center justify-center text-xl">📋</div>
                            <div>
                                <p class="font-bold text-gray-900 dark:text-white">Prompt</p>
                                <p class="text-xs text-gray-400 dark:text-gray-500">El tipo más común</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-4 leading-relaxed">
                            Un texto con instrucciones que copias y pegas en cualquier IA. No requiere instalación ni configuración. Funciona con Claude, ChatGPT, Gemini o cualquier otra.
                        </p>
                        <div class="space-y-2 text-xs">
                            <div class="flex items-center gap-2 text-gray-500 dark:text-gray-400"><span class="text-green-500">✓</span> Sin instalación</div>
                            <div class="flex items-center gap-2 text-gray-500 dark:text-gray-400"><span class="text-green-500">✓</span> Compatible con cualquier IA</div>
                            <div class="flex items-center gap-2 text-gray-500 dark:text-gray-400"><span class="text-green-500">✓</span> Listo en segundos</div>
                        </div>
                        <div class="mt-4 p-3 bg-gray-50 dark:bg-gray-800 rounded-lg">
                            <p class="text-xs font-mono text-gray-500 dark:text-gray-400">Copias → Pegas → Ejecutas</p>
                        </div>
                    </div>

                    <!-- Claude Skill -->
                    <div class="bg-white dark:bg-gray-900 rounded-2xl border-2 border-violet-300 dark:border-violet-700 p-6 transition-colors relative">
                        <div class="absolute -top-3 left-5">
                            <span class="text-xs font-semibold px-2 py-0.5 rounded-md bg-violet-100 dark:bg-violet-900/50 text-violet-700 dark:text-violet-300 border border-violet-200 dark:border-violet-700">Skill</span>
                        </div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl bg-violet-100 dark:bg-violet-900/30 flex items-center justify-center text-xl">📄</div>
                            <div>
                                <p class="font-bold text-gray-900 dark:text-white">Claude Code Skill</p>
                                <p class="text-xs text-gray-400 dark:text-gray-500">Archivo SKILL.md</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-4 leading-relaxed">
                            Un archivo Markdown (SKILL.md) que enseña a Claude Code un comportamiento específico. Se activa con un comando <code class="text-violet-600 dark:text-violet-400">/nombre</code> dentro de Claude Code.
                        </p>
                        <div class="space-y-2 text-xs">
                            <div class="flex items-center gap-2 text-gray-500 dark:text-gray-400"><span class="text-violet-500">→</span> Solo para Claude Code</div>
                            <div class="flex items-center gap-2 text-gray-500 dark:text-gray-400"><span class="text-violet-500">→</span> Instalación vía <code>git clone</code></div>
                            <div class="flex items-center gap-2 text-gray-500 dark:text-gray-400"><span class="text-violet-500">→</span> Se activa con <code>/skill-name</code></div>
                        </div>
                        <div class="mt-4 p-3 bg-violet-50 dark:bg-violet-900/20 rounded-lg">
                            <p class="text-xs font-mono text-violet-700 dark:text-violet-400">git clone repo ~/.claude/skills/nombre</p>
                        </div>
                    </div>

                    <!-- Claude Plugin -->
                    <div class="bg-white dark:bg-gray-900 rounded-2xl border-2 border-amber-300 dark:border-amber-700 p-6 transition-colors relative">
                        <div class="absolute -top-3 left-5">
                            <span class="text-xs font-semibold px-2 py-0.5 rounded-md bg-amber-100 dark:bg-amber-900/50 text-amber-700 dark:text-amber-300 border border-amber-200 dark:border-amber-700">Plugin</span>
                        </div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-xl bg-amber-100 dark:bg-amber-900/30 flex items-center justify-center text-xl">🔌</div>
                            <div>
                                <p class="font-bold text-gray-900 dark:text-white">Claude Code Plugin</p>
                                <p class="text-xs text-gray-400 dark:text-gray-500">Extensión oficial</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-4 leading-relaxed">
                            Una extensión instalada a través del sistema oficial de plugins de Claude Code. Puede incluir hooks, scripts y configuraciones complejas. Activo de forma global en todas las sesiones.
                        </p>
                        <div class="space-y-2 text-xs">
                            <div class="flex items-center gap-2 text-gray-500 dark:text-gray-400"><span class="text-amber-500">→</span> Solo para Claude Code</div>
                            <div class="flex items-center gap-2 text-gray-500 dark:text-gray-400"><span class="text-amber-500">→</span> Instalación vía marketplace</div>
                            <div class="flex items-center gap-2 text-gray-500 dark:text-gray-400"><span class="text-amber-500">→</span> Activo en todo Claude Code</div>
                        </div>
                        <div class="mt-4 p-3 bg-amber-50 dark:bg-amber-900/20 rounded-lg">
                            <p class="text-xs font-mono text-amber-700 dark:text-amber-400">claude plugin install nombre@marketplace</p>
                        </div>
                    </div>
                </div>

                <!-- Comparison table -->
                <div class="bg-gray-50 dark:bg-gray-800/50 rounded-2xl border border-gray-200 dark:border-gray-700 overflow-hidden">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th class="text-left px-5 py-3 text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider w-1/4"></th>
                                <th class="text-center px-4 py-3 text-xs font-semibold text-gray-600 dark:text-gray-300 uppercase tracking-wider">Prompt</th>
                                <th class="text-center px-4 py-3 text-xs font-semibold text-violet-600 dark:text-violet-400 uppercase tracking-wider">Skill</th>
                                <th class="text-center px-4 py-3 text-xs font-semibold text-amber-600 dark:text-amber-400 uppercase tracking-wider">Plugin</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            <tr>
                                <td class="px-5 py-3 text-gray-600 dark:text-gray-400 font-medium">Requiere instalación</td>
                                <td class="text-center px-4 py-3 text-green-500">No</td>
                                <td class="text-center px-4 py-3 text-gray-500">git clone</td>
                                <td class="text-center px-4 py-3 text-gray-500">claude plugin install</td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-900/50">
                                <td class="px-5 py-3 text-gray-600 dark:text-gray-400 font-medium">Compatible con</td>
                                <td class="text-center px-4 py-3 text-gray-500">Cualquier IA</td>
                                <td class="text-center px-4 py-3 text-gray-500">Claude Code</td>
                                <td class="text-center px-4 py-3 text-gray-500">Claude Code</td>
                            </tr>
                            <tr>
                                <td class="px-5 py-3 text-gray-600 dark:text-gray-400 font-medium">Se activa</td>
                                <td class="text-center px-4 py-3 text-gray-500">Manual (copiar)</td>
                                <td class="text-center px-4 py-3 text-gray-500">/comando</td>
                                <td class="text-center px-4 py-3 text-gray-500">Siempre activo</td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-900/50">
                                <td class="px-5 py-3 text-gray-600 dark:text-gray-400 font-medium">Complejidad</td>
                                <td class="text-center px-4 py-3 text-gray-500">Simple</td>
                                <td class="text-center px-4 py-3 text-gray-500">Media</td>
                                <td class="text-center px-4 py-3 text-gray-500">Alta</td>
                            </tr>
                            <tr>
                                <td class="px-5 py-3 text-gray-600 dark:text-gray-400 font-medium">Perfil de usuario</td>
                                <td class="text-center px-4 py-3 text-gray-500">Cualquier profesional</td>
                                <td class="text-center px-4 py-3 text-gray-500">Desarrollador</td>
                                <td class="text-center px-4 py-3 text-gray-500">Desarrollador</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- How to CREATE a skill -->
            <section class="max-w-5xl mx-auto px-4 sm:px-6 py-20">
                <div class="grid md:grid-cols-2 gap-12 items-start">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-violet-50 dark:bg-violet-900/30 text-violet-700 dark:text-violet-300 text-xs font-medium rounded-full mb-4">
                            ✨ Para contribuidores
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">
                            Cómo crear una skill que aporte valor
                        </h2>
                        <p class="text-gray-500 dark:text-gray-400 mb-6 leading-relaxed">
                            Las mejores skills no se inventan — se descubren. Piensa en una tarea que repites en tu trabajo
                            y que tardas en explicar cada vez. Ahí está tu skill.
                        </p>
                        <div class="space-y-4">
                            <div class="flex gap-3">
                                <div class="w-7 h-7 rounded-full bg-violet-100 dark:bg-violet-900/30 text-violet-700 dark:text-violet-400 text-xs font-bold flex items-center justify-center flex-shrink-0 mt-0.5">1</div>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white text-sm">Identifica la tarea recurrente</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Algo que haces al menos una vez al mes y que otros en tu profesión también hacen.</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="w-7 h-7 rounded-full bg-violet-100 dark:bg-violet-900/30 text-violet-700 dark:text-violet-400 text-xs font-bold flex items-center justify-center flex-shrink-0 mt-0.5">2</div>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white text-sm">Define el rol experto</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">¿Qué tipo de profesional haría esta tarea perfectamente? "Actúa como un [ROL] con [X] años de experiencia en [ÁREA]..."</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="w-7 h-7 rounded-full bg-violet-100 dark:bg-violet-900/30 text-violet-700 dark:text-violet-400 text-xs font-bold flex items-center justify-center flex-shrink-0 mt-0.5">3</div>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white text-sm">Lista las variables de contexto</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">¿Qué información mínima necesita saber la IA? Ponla como campos [EN CORCHETES] para que sea reutilizable.</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="w-7 h-7 rounded-full bg-violet-100 dark:bg-violet-900/30 text-violet-700 dark:text-violet-400 text-xs font-bold flex items-center justify-center flex-shrink-0 mt-0.5">4</div>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white text-sm">Diseña el output con secciones</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Usa ## encabezados para estructurar la respuesta. La IA sigue la estructura que tú definas.</p>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <div class="w-7 h-7 rounded-full bg-violet-100 dark:bg-violet-900/30 text-violet-700 dark:text-violet-400 text-xs font-bold flex items-center justify-center flex-shrink-0 mt-0.5">5</div>
                                <div>
                                    <p class="font-medium text-gray-900 dark:text-white text-sm">Prueba y ajusta</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Ejecútala 3 veces con datos diferentes. Si el output siempre es útil sin retrabajo, tu skill está lista.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Template example -->
                    <div>
                        <p class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider mb-3">Plantilla base</p>
                        <div class="bg-gray-900 dark:bg-gray-950 rounded-xl p-5 font-mono text-sm overflow-x-auto border border-gray-800">
                            <div class="text-gray-400 mb-3 text-xs">// Tu skill empieza así 👇</div>
                            <div class="space-y-1 leading-relaxed">
                                <p><span class="text-violet-400">Actúa como</span> <span class="text-amber-300">un [ROL] con [X] años</span></p>
                                <p><span class="text-violet-400">de experiencia en</span> <span class="text-amber-300">[ÁREA ESPECÍFICA]</span><span class="text-gray-400">.</span></p>
                                <p class="mt-3 text-gray-400">// Variables de contexto</p>
                                <p><span class="text-emerald-400">- Mi empresa:</span> <span class="text-amber-300">[EMPRESA]</span></p>
                                <p><span class="text-emerald-400">- Objetivo:</span> <span class="text-amber-300">[OBJETIVO]</span></p>
                                <p><span class="text-emerald-400">- Contexto:</span> <span class="text-amber-300">[CONTEXTO]</span></p>
                                <p class="mt-3 text-gray-400">// Estructura del output</p>
                                <p><span class="text-blue-400">## 1. SECCIÓN PRINCIPAL</span></p>
                                <p class="text-gray-500 pl-3">- Punto 1</p>
                                <p class="text-gray-500 pl-3">- Punto 2</p>
                                <p><span class="text-blue-400">## 2. ANÁLISIS</span></p>
                                <p class="text-gray-500 pl-3">Tabla: Col A | Col B | Col C</p>
                                <p><span class="text-blue-400">## 3. PLAN DE ACCIÓN</span></p>
                                <p class="text-gray-500 pl-3">Prioridad | Acción | Fecha</p>
                            </div>
                        </div>
                        <div class="mt-4 p-4 bg-amber-50 dark:bg-amber-900/20 rounded-xl border border-amber-200 dark:border-amber-900/40">
                            <p class="text-sm text-amber-800 dark:text-amber-300">
                                <span class="font-semibold">⚠️ Importante:</span> Las skills se revisan antes de publicarse.
                                No incluyas código ejecutable, datos personales ni contenido que pueda usarse maliciosamente.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FAQ -->
            <component :is="'script'" type="application/ld+json" :innerHTML="faqJsonLd" />
            <section class="bg-gray-50 dark:bg-gray-800/50 py-20 transition-colors">
                <div class="max-w-3xl mx-auto px-4 sm:px-6">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2 text-center">Preguntas frecuentes</h2>
                    <p class="text-center text-sm text-gray-500 dark:text-gray-400 mb-8">Todo lo que necesitas saber sobre las skills de inteligencia artificial</p>
                    <div class="space-y-4">
                        <details
                            v-for="item in faqItems"
                            :key="item.q"
                            class="bg-white dark:bg-gray-900 rounded-xl border border-gray-200 dark:border-gray-700 transition-colors group"
                        >
                            <summary class="px-5 py-4 cursor-pointer font-medium text-gray-900 dark:text-white flex items-center justify-between list-none">
                                {{ item.q }}
                                <span class="text-gray-400 group-open:rotate-180 transition-transform shrink-0 ml-3">▾</span>
                            </summary>
                            <p class="px-5 pb-4 text-sm text-gray-500 dark:text-gray-400 leading-relaxed">{{ item.a }}</p>
                        </details>
                    </div>
                </div>
            </section>

            <!-- CTA -->
            <section class="max-w-3xl mx-auto px-4 sm:px-6 py-20 text-center">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">
                    ¿Tienes una skill que te funciona?
                </h2>
                <p class="text-gray-500 dark:text-gray-400 mb-8 leading-relaxed">
                    Compártela con la comunidad y ayuda a miles de profesionales a trabajar mejor con IA.
                    Cada skill publicada lleva tu nombre y construye tu reputación.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                    <Link :href="route('skills.create')" class="btn-primary text-base px-6 py-3">
                        + Compartir mi skill
                    </Link>
                    <Link :href="route('skills.index')" class="btn-secondary text-base px-6 py-3">
                        Explorar skills →
                    </Link>
                </div>
            </section>

        </div>
    </AppLayout>
</template>
