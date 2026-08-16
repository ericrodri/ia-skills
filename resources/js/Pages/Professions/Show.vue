<script setup>
import { Head, Link } from '@inertiajs/vue3'
import { computed } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import SkillCard from '@/Components/SkillCard.vue'

const props = defineProps({
    profession: Object,
    skills: Object,
})

const professionContent = {
    marketing: {
        intro: `El marketing impulsado por IA ya no es el futuro: es lo que separa a los equipos que escalan de los que se quedan atrás. Con los prompts correctos puedes automatizar la investigación de competidores, generar estrategias de contenido completas, optimizar campañas en tiempo real y analizar el comportamiento de tus audiencias con una profundidad que antes requería un equipo entero de analistas.

Estos prompts están diseñados por y para profesionales del marketing que trabajan con presupuestos reales, objetivos de negocio concretos y las herramientas del día a día: Meta Ads, Google Analytics, HubSpot, Mailchimp. No son prompts genéricos — son workflows probados que producen outputs accionables.`,
        faq: [
            { q: '¿Para qué sirven los prompts de IA en marketing?', a: 'Para automatizar tareas repetitivas como la redacción de copies, el análisis de métricas, la investigación de keywords o la planificación de campañas. Cada prompt es un workflow completo que guía a la IA para producir un output de calidad profesional.' },
            { q: '¿Qué herramientas de IA funcionan mejor para marketing?', a: 'Claude es especialmente bueno para análisis estratégico, redacción larga y estructurada, y razonamiento complejo. ChatGPT funciona bien para copies cortos y brainstorming. Todos los prompts de ia-skills funcionan con cualquiera de las dos herramientas.' },
            { q: '¿Necesito saber programar para usar estos prompts?', a: 'No. Los prompts están diseñados para usarse directamente en Claude, ChatGPT u otras IAs conversacionales. Solo necesitas copiar el prompt, rellenar los campos marcados con [corchetes] con tu información y enviar.' },
            { q: '¿Con qué frecuencia se añaden nuevos prompts de marketing?', a: 'La comunidad de ia-skills añade nuevos prompts cada semana. Los mejor valorados por la comunidad aparecen primero en el listado.' },
        ],
    },
    desarrollo: {
        intro: `La IA está redefiniendo cómo los equipos de desarrollo diseñan arquitecturas, escriben código, hacen code review y resuelven problemas complejos. Los mejores ingenieros no usan la IA para que escriba código por ellos — la usan como un compañero de trabajo que puede razonar sobre decisiones técnicas, revisar implementaciones y generar alternativas en segundos.

Estos prompts cubren el ciclo completo del desarrollo de software moderno: desde la arquitectura de sistemas distribuidos hasta el debugging de bugs en producción, pasando por la optimización de bases de datos, la seguridad de aplicaciones y la gestión de la deuda técnica. Diseñados para ingenieros que quieren outputs técnicos precisos, con código real y razonamiento sólido.`,
        faq: [
            { q: '¿Estos prompts funcionan con cualquier lenguaje de programación?', a: 'Sí. La mayoría de prompts son agnósticos al lenguaje — puedes especificar Python, TypeScript, Go, Java o cualquier otro en el campo correspondiente del prompt. Algunos prompts están diseñados específicamente para un lenguaje o framework y lo indican en el título.' },
            { q: '¿Puedo usar estos prompts para code review?', a: 'Absolutamente. Hay prompts específicos para code review que guían a la IA para revisar tu código con criterios de calidad, seguridad, rendimiento y mantenibilidad.' },
            { q: '¿Son útiles para arquitectura de sistemas, no solo para escribir código?', a: 'Sí, y es uno de los casos de uso más potentes. Claude en particular es muy capaz de razonar sobre trade-offs de arquitectura, evaluar alternativas técnicas y documentar decisiones de diseño.' },
            { q: '¿Funcionan para DevOps e infraestructura además de desarrollo de aplicaciones?', a: 'Sí. Hay prompts específicos para IaC con Terraform, CI/CD pipelines, Kubernetes, observabilidad y seguridad de infraestructura.' },
        ],
    },
    diseno: {
        intro: `El diseño asistido por IA no reemplaza el criterio del diseñador — lo amplifica. Puedes generar briefs de diseño completos, evaluar la usabilidad de una interfaz contra los heurísticos de Nielsen, estructurar un sistema de diseño escalable o preparar el handoff a desarrollo en una fracción del tiempo habitual.

Estos prompts están construidos para diseñadores UX/UI, product designers y brand designers que trabajan con Figma, quieren producir entregables de calidad profesional y necesitan una herramienta que entienda la diferencia entre diseño centrado en el usuario y diseño bonito. Cada prompt produce un output estructurado, accionable y listo para usar con tu equipo.`,
        faq: [
            { q: '¿Estos prompts sirven para UX research además de diseño visual?', a: 'Sí. Hay prompts específicos para investigación con usuarios, síntesis de insights, mapeo del customer journey y diseño de tests de usabilidad.' },
            { q: '¿Puedo usarlos si trabajo en diseño de marca, no solo de producto?', a: 'Sí. Hay prompts para branding, identidad visual, diseño de packaging, sistemas de ilustración y estrategia de marca, además de los prompts de UX/UI.' },
            { q: '¿Funcionan bien con Figma?', a: 'Los prompts generan outputs en texto estructurado que puedes usar directamente en tu flujo de trabajo con Figma: especificaciones de componentes, guías de estilos, criterios de aceptación para el handoff, etc.' },
            { q: '¿Son útiles para diseñadores junior o solo para seniors?', a: 'Para ambos, pero de forma diferente. Los juniors los usan para aprender frameworks de diseño probados. Los seniors los usan para acelerar la documentación y los entregables que consumen tiempo.' },
        ],
    },
    ventas: {
        intro: `Las mejores personas de ventas no trabajan más horas — trabajan con mejores herramientas. La IA te permite preparar cada llamada con un análisis del prospecto en minutos, generar secuencias de outreach personalizadas, estructurar propuestas adaptadas a cada decisor y gestionar el pipeline con datos, no con intuición.

Estos prompts cubren todo el ciclo de ventas B2B: desde la prospección y el primer contacto hasta el cierre, las negociaciones complejas y la expansión de cuenta. Están diseñados para vendedores que trabajan con procesos de venta consultivos, tickets medios-altos y ciclos de decisión largos donde la preparación y la personalización marcan la diferencia entre ganar y perder.`,
        faq: [
            { q: '¿Estos prompts sirven para ventas B2C o solo para B2B?', a: 'La mayoría están optimizados para entornos B2B con procesos de decisión complejos. Algunos son aplicables a B2C de ticket alto, pero si vendes a consumidores masivos, el enfoque de personalización profunda puede no ser el más eficiente.' },
            { q: '¿Funcionan para SDRs o solo para Account Executives?', a: 'Para ambos. Hay prompts específicos para prospección y generación de pipeline (más orientados a SDRs) y otros para gestión de oportunidades, negociación y cierre (más orientados a AEs).' },
            { q: '¿Puedo usar estos prompts para preparar mis argumentarios de venta?', a: 'Sí, y es uno de los casos de uso más valorados. Los prompts de gestión de objeciones, elevator pitch y demo de producto producen argumentarios específicos para tu producto y mercado.' },
            { q: '¿Funcionan con mi CRM?', a: 'Los prompts generan texto estructurado que puedes pegar en tu CRM, en tus emails, o en tus propuestas. No se integran directamente con el CRM, pero el output está pensado para encajar en flujos de trabajo comerciales reales.' },
        ],
    },
    'product-management': {
        intro: `El product management moderno exige tomar decisiones constantemente con información incompleta, alinear a múltiples stakeholders con intereses distintos y comunicar con claridad tanto a nivel estratégico como táctico. La IA no toma las decisiones por ti — te da el framework, el análisis y el primer borrador para que tú puedas enfocarte en el juicio que solo un PM con contexto puede aportar.

Estos prompts cubren las responsabilidades core del product manager: discovery, roadmapping, priorización, métricas, experimentación, comunicación con stakeholders y gestión del equipo de desarrollo. Diseñados para PMs que trabajan en entornos ágiles, con datos reales y la presión de entregar valor a usuarios y negocio simultáneamente.`,
        faq: [
            { q: '¿Estos prompts sirven para CPOs o también para PMs individuales?', a: 'Para todos los niveles. Los PMs individuales los usan para el trabajo táctico del día a día (PRDs, user stories, análisis de métricas). Los CPOs y Heads of Product los usan para comunicación estratégica, roadmaps y frameworks de priorización a nivel de portfolio.' },
            { q: '¿Funcionan para productos B2B y B2C?', a: 'Sí. La mayoría son agnósticos al modelo de negocio. Donde hay diferencias importantes (métricas, ciclos de discovery, gestión de stakeholders), los prompts lo indican y ofrecen enfoques específicos.' },
            { q: '¿Hay prompts específicos para el trabajo con ingeniería y diseño?', a: 'Sí. Hay prompts para design sprints, gestión de dependencias técnicas, priorización de deuda técnica, handoff de requirements y facilitación de reuniones de refinamiento.' },
            { q: '¿Son útiles para productos en etapa early o solo para productos maduros?', a: 'Para ambas etapas, pero con énfasis distinto. En early stage son más valiosos los prompts de discovery, validación y métricas de activación. En productos maduros, los de optimización, experimentación y expansión.' },
        ],
    },
    rrhh: {
        intro: `Los equipos de Recursos Humanos enfrentan un reto único: gestionar el activo más complejo e impredecible de cualquier organización — las personas — mientras gestionan también los procesos administrativos, el cumplimiento legal y las expectativas de negocio. La IA puede liberarte de la carga operativa para que puedas enfocarte en el trabajo que realmente requiere inteligencia humana: construir cultura, desarrollar líderes y tomar decisiones que afectan a las personas.

Estos prompts cubren el ciclo completo de la gestión de personas: atracción de talento, selección, onboarding, desarrollo, evaluación del desempeño, compensación, bienestar y offboarding. Diseñados para profesionales de RRHH que quieren combinar el rigor metodológico con la empatía que el trabajo con personas exige.`,
        faq: [
            { q: '¿Estos prompts sirven para empresas pequeñas o solo para grandes corporaciones?', a: 'Para ambas, y en muchos casos son más valiosos para equipos pequeños de RRHH donde una persona tiene que cubrir múltiples roles. Los prompts se adaptan al contexto de la empresa que describes en los campos del prompt.' },
            { q: '¿Hay prompts específicos para el trabajo remoto y equipos distribuidos?', a: 'Sí. La gestión de equipos remotos, el onboarding en remoto, la cultura en entornos distribuidos y la comunicación interna en equipos que no comparten oficina son temas cubiertos explícitamente.' },
            { q: '¿Los prompts de evaluación del desempeño generan las evaluaciones directamente?', a: 'Generan frameworks, plantillas y guías de calibración. La evaluación final de cada persona requiere el juicio del manager y del equipo de RRHH — la IA proporciona la estructura, no el contenido personal.' },
            { q: '¿Son adecuados para startups sin departamento de RRHH formal?', a: 'Especialmente para ellas. Un founder o manager sin experiencia en RRHH puede usar estos prompts para implementar prácticas profesionales de gestión de personas desde el principio.' },
        ],
    },
    finanzas: {
        intro: `La inteligencia financiera no es solo saber leer un balance — es la capacidad de traducir los números en decisiones de negocio. La IA acelera el análisis, automatiza los modelos repetitivos y te ayuda a comunicar insights financieros complejos con la claridad que los decisores necesitan para actuar.

Estos prompts cubren las responsabilidades del profesional financiero moderno: análisis de estados financieros, construcción de modelos, gestión de tesorería, control presupuestario, valoración de empresas y due diligence. Diseñados para CFOs, controllers, analistas financieros y directivos no financieros que necesitan tomar decisiones con datos reales, no con intuiciones.`,
        faq: [
            { q: '¿Estos prompts generan modelos de Excel directamente?', a: 'Los prompts generan la estructura, las fórmulas y la lógica del modelo en texto. Puedes trasladarlo a Excel o Sheets manualmente o pedir a la IA que genere código para Google Apps Script o Python que construya el modelo.' },
            { q: '¿Son útiles para PYMEs además de para grandes empresas?', a: 'Sí. Hay prompts específicos para las necesidades financieras de PYMEs: financiación alternativa, gestión de tesorería con recursos limitados, control de costes operativos y relación con el banco.' },
            { q: '¿Los prompts de valoración de startups son adecuados para founders?', a: 'Sí, especialmente para founders que se preparan para una ronda de financiación. Los prompts explican los métodos de valoración, cómo argumentarlos ante inversores y qué factores afectan a la valoración en cada etapa.' },
            { q: '¿Funcionan para análisis de empresas cotizadas?', a: 'Sí. Los prompts de análisis de estados financieros y benchmarking competitivo funcionan tanto con empresas privadas (usando datos del Registro Mercantil) como con cotizadas (usando sus informes anuales y earnings reports).' },
        ],
    },
    legal: {
        intro: `El derecho nunca ha sido más complejo ni más relevante para el negocio que ahora. La IA puede ayudarte a investigar jurisprudencia, redactar primeros borradores de contratos, analizar riesgos legales y comunicar conceptos jurídicos a no-abogados con la claridad que la toma de decisiones empresarial exige.

Estos prompts están diseñados para abogados, asesores jurídicos y directivos que trabajan con contratos, cumplimiento normativo y decisiones con implicaciones legales en el contexto español y europeo. Cubren las áreas más relevantes del derecho empresarial: contratos, propiedad intelectual, protección de datos, derecho laboral, societario y mercantil.`,
        faq: [
            { q: '¿Estos prompts pueden reemplazar el asesoramiento de un abogado?', a: 'No. Los prompts son una herramienta de investigación, redacción de borradores y análisis preliminar. Para decisiones legales con consecuencias económicas o jurídicas significativas, siempre debes consultar a un abogado cualificado.' },
            { q: '¿Los contratos generados por la IA son legalmente válidos?', a: 'Los borradores generados son puntos de partida que deben ser revisados y adaptados por un profesional del derecho. La IA puede cometer errores en aspectos técnicos o no conocer la jurisprudencia más reciente.' },
            { q: '¿Estos prompts están adaptados al derecho español?', a: 'Sí. Los prompts que tratan temas como contratos laborales, RGPD, derecho societario o propiedad intelectual están orientados al marco legal español y europeo, aunque siempre debes verificar con legislación actualizada.' },
            { q: '¿Son útiles para startups tech que quieren cumplir con el RGPD?', a: 'Sí. Hay prompts específicos para RGPD en desarrollo de software, políticas de privacidad, gestión del consentimiento y el análisis de impacto en la protección de datos (DPIA).' },
        ],
    },
    'customer-support': {
        intro: `El soporte al cliente ha evolucionado de ser un centro de costes a ser uno de los principales diferenciadores competitivos en mercados donde el producto en sí se ha comoditizado. La IA amplifica la capacidad del equipo de CS para resolver problemas más rápido, identificar patrones en el feedback de usuarios y construir los sistemas de autoservicio que reducen el volumen de contacto.

Estos prompts cubren el trabajo real del equipo de Customer Support y Customer Success: gestión de tickets, escalaciones, métricas, onboarding de clientes, retención, NPS y la voz del cliente como input para el producto. Diseñados para Support Managers, CS Leads y agentes que quieren hacer un trabajo de mayor impacto con los recursos que tienen.`,
        faq: [
            { q: '¿Estos prompts sirven para soporte técnico además de soporte general?', a: 'Sí. Aunque muchos prompts son agnósticos al tipo de soporte, hay contenido específico para soporte técnico de software, SaaS y productos digitales.' },
            { q: '¿Hay prompts para implementar chatbots o IA en el soporte?', a: 'Sí. Hay prompts sobre cómo implementar automatización con IA en el flujo de soporte, qué casos de uso automatizar primero y cómo medir el impacto sin sacrificar la calidad de la experiencia.' },
            { q: '¿Son útiles para equipos pequeños de soporte (1-5 personas)?', a: 'Especialmente para ellos. Un equipo pequeño puede usar estos prompts para implementar sistemas y métricas de calidad profesional sin un headcount dedicado a operations.' },
            { q: '¿Los prompts de métricas incluyen las fórmulas de cálculo?', a: 'Sí. Los prompts de métricas (NPS, CES, CSAT, FRT, resolution rate) incluyen las fórmulas, los benchmarks del sector y cómo interpretar los resultados para tomar decisiones.' },
        ],
    },
    freelancers: {
        intro: `Trabajar por cuenta propia es gestionar simultáneamente un negocio de marketing, ventas, finanzas, operaciones y entrega de servicio — todo tú solo. La IA es el compañero de negocio que los freelancers nunca han podido permitirse: siempre disponible, sin ego, capaz de razonar sobre cualquier aspecto de tu negocio y producir entregables de calidad en minutos.

Estos prompts están diseñados para freelancers, consultores independientes y solopreneurs que quieren construir un negocio sostenible, no solo una fuente de ingresos inestable. Cubren los temas que más preocupan a los profesionales independientes: captación de clientes, pricing, contratos, gestión financiera, productividad y crecimiento sin perder la libertad que hace atractivo el trabajo independiente.`,
        faq: [
            { q: '¿Estos prompts sirven para cualquier tipo de freelance o son específicos de algún sector?', a: 'Son aplicables a cualquier profesional independiente: diseñadores, desarrolladores, consultores, copywriters, fotógrafos, coaches, etc. Los prompts te piden que especifiques tu sector y tipo de servicio, y el output se adapta.' },
            { q: '¿Hay prompts sobre fiscalidad del autónomo en España?', a: 'Sí. Hay prompts específicos sobre la gestión fiscal del autónomo en España: IVA, IRPF, cotización a la Seguridad Social y cómo organizar las finanzas para no tener sorpresas en la declaración.' },
            { q: '¿Funcionan para freelancers que empiezan o solo para los que ya tienen cartera de clientes?', a: 'Para ambos. Los que empiezan encontrarán más valor en los prompts de posicionamiento, propuesta de valor y captación de clientes. Los que ya tienen cartera, en los de pricing, escalabilidad y diversificación de ingresos.' },
            { q: '¿Son útiles para pasar de empleado a freelance?', a: 'Sí. La transición de empleado a freelance tiene retos específicos (facturación, captación inicial, gestión de la incertidumbre de ingresos) que varios prompts abordan directamente.' },
        ],
    },
}

const content = computed(() => professionContent[props.profession.slug] || null)

const faqSchema = computed(() => {
    if (!content.value?.faq?.length) return null
    return JSON.stringify({
        '@context': 'https://schema.org',
        '@type': 'FAQPage',
        'mainEntity': content.value.faq.map(({ q, a }) => ({
            '@type': 'Question',
            'name': q,
            'acceptedAnswer': { '@type': 'Answer', 'text': a },
        })),
    })
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
    <component v-if="faqSchema" :is="'script'" type="application/ld+json" :innerHTML="faqSchema" />
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

        <!-- Intro SEO content -->
        <div v-if="content?.intro" class="max-w-6xl mx-auto px-4 sm:px-6 pt-8 pb-2">
            <div class="bg-gray-50 dark:bg-gray-800/50 rounded-2xl p-6 border border-gray-100 dark:border-gray-700">
                <p v-for="(paragraph, i) in content.intro.split('\n\n')" :key="i" class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed" :class="i > 0 ? 'mt-3' : ''">{{ paragraph }}</p>
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
        <!-- FAQ -->
        <div v-if="content?.faq?.length" class="max-w-6xl mx-auto px-4 sm:px-6 pb-16">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-5">Preguntas frecuentes sobre prompts de IA para {{ profession.name }}</h2>
            <div class="space-y-3">
                <details
                    v-for="(item, i) in content.faq"
                    :key="i"
                    class="group rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 overflow-hidden"
                >
                    <summary class="flex items-center justify-between px-5 py-4 cursor-pointer list-none select-none">
                        <span class="text-sm font-medium text-gray-900 dark:text-gray-100 pr-4">{{ item.q }}</span>
                        <svg class="w-4 h-4 text-gray-400 shrink-0 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </summary>
                    <div class="px-5 pb-4 text-sm text-gray-600 dark:text-gray-400 leading-relaxed border-t border-gray-100 dark:border-gray-800 pt-3">
                        {{ item.a }}
                    </div>
                </details>
            </div>
        </div>

    </AppLayout>
</template>
