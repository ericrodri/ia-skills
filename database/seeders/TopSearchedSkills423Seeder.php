<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills423Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Tendencias de IA en marketing digital para 2025 y 2026',
                'description'       => 'Analiza las tendencias de inteligencia artificial que están transformando el marketing digital y diseña una hoja de ruta para adoptarlas en tu organización.',
                'prompt_content'    => <<<'EOT'
Eres consultor de marketing digital y tecnología con experiencia en adopción de IA. Tu misión es ayudarme a entender qué tendencias de IA están cambiando el marketing en 2025-2026 y cómo trasladarlas a acciones concretas para mi equipo y mis campañas.

Contexto que necesito de ti antes de comenzar:
- Tipo de empresa: B2B, B2C, ecommerce, SaaS, marketplace, media
- Tamaño del equipo de marketing y nivel de madurez tecnológica actual
- Canales de marketing principales: SEO, SEM, social, email, content, performance
- Mayor desafío actual: atribución, personalización, eficiencia operativa, creatividad, datos

Con esa información, analiza y desarrolla:

1. TENDENCIAS DE IA EN MARKETING 2025-2026
   - IA generativa en creatividad: cómo está cambiando la producción de contenido, imagen, video y audio para marketing. Qué ya funciona, qué está sobre-prometido
   - Personalización hipergranular: segmentación dinámica en tiempo real basada en comportamiento, contexto y predicción de intención. Diferencias con la personalización tradicional
   - Search Generative Experience (SGE) y AEO (Answer Engine Optimization): cómo optimizar para las respuestas de IA en lugar de solo para los resultados de búsqueda
   - Agentes de IA en marketing automation: qué tareas pueden automatizar los agentes de IA (campaña completa de email, A/B testing autónomo, gestión de bids en SEM)
   - First-party data e IA: cómo la desaparición de las cookies de terceros impulsa el uso de IA sobre datos propios
   - Atribución con IA: modelos de atribución multitáctil basados en machine learning vs. modelos de última interacción

2. MAPA DE IMPACTO POR CANAL
   Para cada canal principal (SEO, SEM, email, social, content, performance):
   - Qué cambia con la IA en 2025 (específico, no genérico)
   - Herramientas de IA líderes en ese canal con casos de uso reales
   - Habilidades que el equipo necesita desarrollar
   - Quick win para implementar en los próximos 30 días

3. HOJA DE RUTA DE ADOPCIÓN
   - Evaluación del nivel de madurez actual en IA (escala 1-5)
   - Plan de 90 días: qué adoptar primero según el impacto esperado y la complejidad de implementación
   - Plan de 12 meses: iniciativas de mayor envergadura (datos, plataforma, equipo)
   - Cómo medir el ROI de la adopción de IA en marketing: métricas antes y después

4. IMPACTO EN EL EQUIPO Y LAS HABILIDADES
   - Roles de marketing que más van a cambiar en los próximos 2 años
   - Habilidades nuevas que el equipo de marketing debe desarrollar: prompting, análisis de datos, comprensión de modelos de IA
   - Cómo gestionar la resistencia al cambio cuando se introduce IA en el flujo de trabajo
   - Marco de decisión: qué tareas automatizar con IA vs. qué mantener con criterio humano

5. CASOS DE USO CONCRETOS
   - 5 casos de uso de IA en marketing con ROI demostrado en 2024-2025
   - Para cada caso: descripción, herramienta usada, resultado esperado, inversión requerida, tiempo de implementación
   - Ejemplo de flujo de trabajo "antes y después de IA" para el canal más relevante de mi caso

6. RIESGOS Y CONSIDERACIONES ÉTICAS
   - Riesgos de depender excesivamente de IA en marketing: pérdida de voz de marca, errores de IA que dañan la reputación
   - Regulación de IA en publicidad: qué está cambiando en la UE y en EE.UU.
   - Transparencia con el cliente: cuándo y cómo comunicar el uso de IA en la creación de contenido
   - Sesgos en IA para marketing: cómo detectarlos y mitigarlos

Entrega: informe ejecutivo de tendencias con hoja de ruta de adopción y casos de uso priorizados, listo para presentar al CMO y al equipo de marketing.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Entender las tendencias de IA en marketing 2025 y diseñar un plan de adopción concreto para el equipo.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Evolución de IA en desarrollo de software en 2025',
                'description'       => 'Analiza cómo la IA está transformando el ciclo completo de desarrollo de software en 2025 y diseña una estrategia de adopción para tu equipo de ingeniería.',
                'prompt_content'    => <<<'EOT'
Eres engineering manager o CTO con experiencia en adopción de herramientas de IA para equipos de desarrollo. Tu objetivo es analizar el estado actual de la IA en el desarrollo de software, identificar qué tendencias son reales y cuáles están sobre-prometidas, y diseñar una estrategia de adopción para tu equipo.

Información previa necesaria:
- Tamaño del equipo de ingeniería y stack tecnológico principal
- Herramientas de IA que ya usa el equipo (si las hay): Copilot, Cursor, Codeium, Tabnine, etc.
- Tipo de producto: web app, API, móvil, datos/ML, infraestructura, embedded
- Principal reto del equipo: velocidad de entrega, deuda técnica, calidad, onboarding de nuevos desarrolladores

Con esa información, desarrolla:

1. ESTADO DE LA IA EN DESARROLLO 2025
   - Code completion y generation: qué puede hacer realmente un asistente de código en 2025 vs. 2023
   - Agentes de desarrollo autónomos: qué son Devin, SWE-agent y similares, en qué tareas funcionan bien y en cuáles fallan
   - AI-assisted code review: herramientas que revisan código, detectan bugs y sugieren mejoras automáticamente
   - Testing con IA: generación de tests unitarios, de integración y de e2e; evaluación de cobertura
   - Documentación automática: generación de docstrings, READMEs y diagramas de arquitectura
   - Debugging asistido: cómo la IA está cambiando el proceso de depuración y resolución de errores

2. IMPACTO EN LA PRODUCTIVIDAD
   - Datos reales de productividad con asistentes de código: qué dicen los estudios de GitHub, Google y otros
   - En qué tareas la IA multiplica la productividad (generación de boilerplate, tests, refactoring rutinario)
   - En qué tareas la IA añade poco valor o puede ser contraproducente (arquitectura compleja, seguridad, lógica de negocio crítica)
   - Cómo medir el impacto de la IA en la productividad de tu equipo: métricas objetivas

3. HERRAMIENTAS Y COMPARATIVA 2025
   - Comparativa de los principales asistentes de código: Cursor, GitHub Copilot, JetBrains AI, Codeium, Continue
   - Criterios de evaluación: calidad de sugerencias, contexto de proyecto completo, integración con el stack, precio, privacidad del código
   - Herramientas especializadas: IA para infraestructura (IaC), IA para seguridad (SAST/DAST), IA para datos
   - Cómo hacer un POC de 2 semanas para evaluar una herramienta de IA en el equipo

4. ESTRATEGIA DE ADOPCIÓN
   - Fase 1 (0-30 días): adopción individual de asistentes de código, sin cambios en el proceso
   - Fase 2 (30-90 días): integración en el flujo de trabajo del equipo, pair programming con IA, code review asistido
   - Fase 3 (90-180 días): experimentación con agentes para tareas más complejas
   - Gestión del cambio: cómo convencer a desarrolladores escépticos, cómo gestionar preocupaciones de calidad y seguridad

5. SEGURIDAD Y GOBERNANZA
   - Riesgos de usar IA en el desarrollo: fuga de código propietario, vulnerabilidades en código generado, licencias de código de entrenamiento
   - Política de uso de IA en el equipo: qué está permitido, qué requiere revisión, qué está prohibido
   - Herramientas para detectar código generado por IA con vulnerabilidades de seguridad
   - Compliance: cómo asegurar que el uso de IA cumple con los requisitos legales y contractuales del cliente

6. EL DESARROLLADOR DEL FUTURO
   - Qué habilidades cobran más valor en un mundo con IA: pensamiento sistémico, arquitectura, revisión crítica de código generado, prompting efectivo
   - Qué habilidades pierden valor y cómo gestionar esa transición en el equipo
   - Cómo incorporar la IA en el proceso de entrevistas y evaluación de candidatos
   - Plan de formación para el equipo: qué aprender primero y cómo practicar

Entrega: informe técnico con comparativa de herramientas, estrategia de adopción en 3 fases y política de uso de IA, listo para el equipo de ingeniería.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Analizar las tendencias de IA en desarrollo de software de 2025 y diseñar una estrategia de adopción para el equipo de ingeniería.',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Tendencias de IA generativa en diseño creativo para 2025',
                'description'       => 'Explora cómo la IA generativa está transformando el diseño gráfico, UX y branding en 2025, y define qué herramientas adoptar y cómo mantener tu ventaja creativa.',
                'prompt_content'    => <<<'EOT'
Eres director creativo o diseñador senior con experiencia en la adopción de nuevas tecnologías en el proceso creativo. Tu objetivo es analizar el impacto real de la IA generativa en el diseño en 2025, separar la realidad del hype y definir cómo integrar estas herramientas para potenciar tu trabajo sin perder tu voz creativa.

Información necesaria para personalizar el análisis:
- Especialización: diseño gráfico, UX/UI, branding, motion, ilustración, fotografía, diseño editorial
- Tipo de clientes o proyectos habituales
- Herramientas de diseño actuales y nivel de experimentación con IA
- Principal preocupación sobre la IA: competencia, calidad, autoría, flujo de trabajo

Con esa información, desarrolla:

1. ESTADO DE LA IA GENERATIVA EN DISEÑO 2025
   - Generación de imágenes: dónde está Midjourney, Adobe Firefly, DALL-E, Stable Diffusion en 2025; qué ha mejorado y qué sigue fallando (manos, tipografía, coherencia de personajes)
   - Diseño UI con IA: herramientas que generan interfaces a partir de un prompt o de un brief; estado real de Galileo AI, Uizard, Figma AI
   - Branding con IA: generadores de identidad visual, logos, paletas; cuándo son útiles y cuándo son insuficientes
   - Motion y video con IA: Runway, Sora, Kling; casos de uso reales en producción de contenido de marca
   - Edición de imagen asistida: Photoshop AI, Lightroom AI; cómo están cambiando el retoque y la composición

2. HERRAMIENTAS CLAVE Y COMPARATIVA
   - Top 10 herramientas de IA para diseñadores en 2025: para qué sirven, precio, curva de aprendizaje, integración con el flujo existente
   - Herramientas que han demostrado ROI real vs. herramientas que siguen siendo experimento
   - Cómo elegir qué herramienta probar primero según tu especialización
   - Integración de IA en Adobe Creative Cloud y Figma: qué funcionalidades usar hoy

3. IMPACTO EN EL PROCESO CREATIVO
   - Exploración y concepto: cómo usar IA para generar y evaluar referencias e ideas antes de la fase de producción
   - Producción: tareas donde la IA acelera el trabajo sin comprometer la calidad (variantes, adaptaciones de formato, corrección)
   - Presentación al cliente: cómo usar IA para generar mockups y visualizaciones previas más rápido
   - Iteración y feedback: cómo la IA ayuda a generar variantes basadas en el feedback del cliente

4. VENTAJA COMPETITIVA Y VOZ CREATIVA
   - Cómo diferenciarse cuando todos tienen acceso a las mismas herramientas de IA
   - El papel del criterio editorial: por qué el ojo del diseñador es más valioso que nunca
   - Dirección de arte de IA: el diseñador como director creativo que guía y edita la IA en lugar de ejecutar
   - Construir un estilo propio con IA: cómo entrenar o guiar modelos para generar en tu estilo

5. CONSIDERACIONES ÉTICAS Y LEGALES
   - Derechos de autor en imágenes generadas con IA: qué dice la ley en la UE y en EE.UU. en 2025
   - Uso de imágenes de artistas sin consentimiento en el entrenamiento: cómo tomar una postura consciente
   - Transparencia con el cliente: cuándo y cómo comunicar que se ha usado IA en el proceso
   - Crédito y autoría: cómo atribuir el trabajo cuando hay IA involucrada

6. PLAN DE ADOPCIÓN PARA EL ESTUDIO O FREELANCE
   - Qué herramientas adoptar en los próximos 30 días (quick wins con bajo riesgo)
   - Cómo experimentar con IA sin disrumpir los proyectos activos de clientes
   - Formación del equipo: cómo enseñar a otros diseñadores a usar IA de forma efectiva
   - Cómo posicionarte ante los clientes como diseñador que usa IA para darles más valor (no menos)

7. EL DISEÑADOR DE 2026
   - Habilidades que ganarán valor: dirección creativa, estrategia, comprensión del cliente, criterio estético
   - Cómo adaptar tu propuesta de valor y tus tarifas en un mercado con IA generalizada

Entrega: análisis de tendencias con guía de herramientas y plan de adopción personalizado, listo para compartir con el equipo o con clientes curiosos sobre tu proceso.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Explorar las tendencias de IA generativa en diseño 2025 y definir cómo adoptarlas sin perder la voz creativa.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'IA en ventas y CRM: tendencias clave para 2025',
                'description'       => 'Analiza las tendencias de IA que están transformando las ventas B2B y B2C en 2025 y diseña un plan para que tu equipo comercial las adopte y mejore sus resultados.',
                'prompt_content'    => <<<'EOT'
Eres director comercial o VP de Ventas con experiencia en la transformación digital de equipos de ventas. Tu misión es analizar qué está cambiando en las ventas gracias a la IA en 2025 y definir un plan de acción para que tu equipo lo adopte y mejore su rendimiento sin aumentar el headcount.

Información necesaria para personalizar el análisis:
- Modelo de ventas: inbound, outbound, inside sales, field sales, canal indirecto, PLG
- Sector y ticket medio de las oportunidades
- CRM actual: Salesforce, HubSpot, Pipedrive u otro
- Mayor reto del equipo: prospección, cualificación, ciclo largo, follow-up, forecasting

Con esa información, desarrolla:

1. TENDENCIAS DE IA EN VENTAS 2025
   - Prospección con IA: cómo los agentes de IA están cambiando la búsqueda de leads, la identificación de ICP y el enriquecimiento de datos (herramientas como Clay, Apollo, Cognism con IA)
   - Outreach personalizado a escala: generación de emails y mensajes de LinkedIn ultra-personalizados con IA; qué funciona y qué genera spam
   - Lead scoring predictivo: modelos de ML que predicen qué leads tienen mayor probabilidad de convertir y en qué plazo
   - Sales coaching con IA: análisis de llamadas (Gong, Chorus, Salesloft) para mejorar las habilidades del equipo
   - Forecasting con IA: modelos predictivos de pipeline que superan la intuición del manager en precisión
   - Deal intelligence: IA que alerta sobre oportunidades en riesgo o sobre el momento óptimo para hacer seguimiento

2. IA EN EL CRM
   - Automatización de entrada de datos: cómo eliminar la carga administrativa de los SDRs y AEs con IA
   - Resumen automático de reuniones y próximas acciones en el CRM
   - Scoring de cuenta y contacto en tiempo real dentro del CRM
   - Recomendaciones de siguiente mejor acción para cada deal
   - Integración de señales externas (cambios de trabajo, noticias de la empresa, rondas de financiación) en el CRM

3. IMPACTO EN LOS ROLES DE VENTAS
   - SDR aumentado por IA: qué parte del outbound puede automatizar la IA vs. qué sigue requiriendo el toque humano
   - AE con IA: cómo usar IA para preparar reuniones, generar propuestas y hacer seguimiento más efectivo
   - Sales manager con IA: coaching automatizado, revisión de pipeline asistida, forecasting más preciso
   - Qué perfiles de ventas serán más demandados en 2026 y qué habilidades priorizar

4. HERRAMIENTAS CLAVE Y COMPARATIVA
   - Stack de ventas con IA en 2025: prospección, engagement, conversación, coaching, forecasting, contratos
   - Para cada categoría: las 2-3 herramientas líderes, qué hace cada una, precio orientativo, integración con el CRM
   - Cómo evitar la sobrecarga de herramientas: principio de "fewer tools, deeper use"

5. PLAN DE ADOPCIÓN PARA EL EQUIPO
   - Diagnóstico: qué tareas del ciclo de ventas consumen más tiempo y son más susceptibles de automatización
   - Fase 1 (30 días): adopción de asistente de IA para outreach y resumen de llamadas
   - Fase 2 (60 días): lead scoring predictivo y alertas de deal intelligence
   - Fase 3 (90 días): forecasting con IA y coaching automatizado
   - Gestión del cambio: cómo convencer a los vendedores escépticos con datos de mejora de cuota

6. MÉTRICAS DE ÉXITO
   - KPIs de ventas antes y después de adoptar IA: tasa de respuesta en outreach, conversion rate por etapa, tiempo del ciclo, win rate, forecast accuracy
   - Cómo atribuir las mejoras a la IA y no a otros factores
   - Dashboard de ventas con IA: qué ver cada semana para medir el impacto

Entrega: informe de tendencias con plan de adopción en 3 fases y comparativa de herramientas, listo para presentar al equipo de ventas y al CEO.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Analizar las tendencias de IA en ventas 2025 y definir un plan de adopción para mejorar el rendimiento del equipo comercial.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product management impulsado por IA: roadmap 2025',
                'description'       => 'Analiza cómo la IA está transformando el rol del product manager en 2025, desde el discovery hasta el go-to-market, y diseña tu roadmap personal de adopción.',
                'prompt_content'    => <<<'EOT'
Eres product manager senior o Director of Product en una empresa de software. Tu objetivo es analizar cómo la IA está cambiando el trabajo del PM en 2025, identificar las herramientas y metodologías más impactantes y diseñar un plan personal para adoptar IA en tu trabajo diario y en los procesos de tu equipo.

Información previa necesaria:
- Tipo de producto: B2B SaaS, consumer app, plataforma, marketplace, producto de datos
- Tamaño del equipo de producto: solo, equipo pequeño (2-5 PMs), equipo grande (5+ PMs)
- Principal reto del PM: discovery, priorización, comunicación con stakeholders, métricas, ejecución
- Herramientas de PM actuales: Jira, Linear, Productboard, Notion, Amplitude, etc.

Con esa información, desarrolla:

1. TRANSFORMACIÓN DEL ROL DE PM EN 2025
   - Qué tareas del PM está automatizando la IA en 2025: síntesis de research, análisis de feedback de usuarios, redacción de PRDs, análisis de datos de uso
   - Qué tareas del PM se vuelven más importantes con IA: estrategia, empatía con el usuario, alineación de stakeholders, toma de decisiones con incertidumbre
   - El PM como "director de orquesta de IA": cómo supervisar y dirigir herramientas de IA en lugar de ejecutar las tareas manualmente
   - El PM técnico en 2025: por qué entender cómo funcionan los sistemas de IA es ventaja competitiva para un PM

2. IA EN CADA FASE DEL CICLO DE PRODUCTO
   - Discovery: análisis automático de entrevistas de usuario, síntesis de feedback de Intercom/Zendesk, análisis de reseñas de competidores, detección de oportunidades con IA
   - Definición: generación de PRDs a partir de notas de discovery, user stories automáticas, aceptance criteria, análisis de impacto técnico
   - Priorización: modelos de scoring asistidos por IA, análisis de impacto en métricas, detección de inconsistencias en el roadmap
   - Ejecución: análisis automático de métricas de lanzamiento, detección de anomalías, alertas de regresión
   - Go-to-market: generación de release notes, materials de formación interna, comunicaciones al cliente

3. HERRAMIENTAS DE PM IMPULSADAS POR IA
   - Herramientas de discovery y research: Dovetail AI, Grain, Otter.ai para análisis de entrevistas; ProductSense, Kraftful para análisis de feedback
   - Herramientas de definición: GitHub Copilot para escribir especificaciones técnicas, ChatGPT/Claude para PRDs
   - Herramientas de analytics con IA: Amplitude AI, Mixpanel AI Explain, PostHog para detección automática de insights
   - Gestión de roadmap con IA: Productboard AI, Aha! con IA
   - Para cada herramienta: caso de uso concreto, tiempo ahorrado estimado, limitaciones

4. EL PM COMO DISEÑADOR DE PRODUCTOS DE IA
   - Cómo diseñar features de IA para el propio producto: qué hace que una feature de IA sea buena para el usuario
   - Evaluación de modelos de IA: cómo un PM sin background técnico puede evaluar si un modelo de IA hace lo que debe
   - Métricas para features de IA: accuracy, latencia, adopción, confianza del usuario
   - Gestión de la deuda de datos: cómo priorizar la infraestructura de datos necesaria para las features de IA

5. PLAN DE ADOPCIÓN PERSONAL
   - Semana 1-2: adoptar un asistente de IA para las 3 tareas que más tiempo consumen (síntesis, redacción, análisis)
   - Mes 1: integrar análisis de feedback con IA en el proceso de discovery
   - Mes 2-3: experimentar con herramientas de analytics con IA para detección automática de insights
   - Mes 4-6: liderar la adopción de IA en el equipo completo de producto

6. COMUNICACIÓN Y LIDERAZGO CON IA
   - Cómo usar IA para preparar reuniones de stakeholders más efectivas
   - Generación de narrativa de producto con IA: cómo contar la estrategia de forma convincente
   - Uso de IA para alinear al equipo: resúmenes de decisiones, follow-ups automáticos, documentación de contexto

7. EL PM EN 2026
   - Habilidades que más se valoran en un PM en un mundo con IA: pensamiento sistémico, capacidad de síntesis, liderazgo sin autoridad, comprensión de IA
   - Cómo diferenciarte como PM en un mercado donde la IA hace gran parte del trabajo operativo

Entrega: guía completa de IA para product managers con análisis de herramientas, plan de adopción personal y visión del rol en 2026.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Analizar cómo la IA transforma el rol del PM en 2025 y diseñar un plan de adopción para trabajar más rápido y mejor.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Transformación de RRHH con IA: tendencias clave 2025',
                'description'       => 'Analiza cómo la IA está transformando los procesos de recursos humanos en 2025, desde el reclutamiento hasta la gestión del talento, y diseña un plan de adopción para tu organización.',
                'prompt_content'    => <<<'EOT'
Eres CHRO o Director de RRHH con experiencia en transformación digital de la función de personas. Tu objetivo es analizar el estado real de la IA en RRHH en 2025, identificar qué está funcionando y qué no, y diseñar una estrategia de adopción que mejore los procesos sin comprometer la experiencia del empleado ni la ética.

Información necesaria:
- Tamaño de la organización: startup (<50), PYME (50-500), empresa grande (500+)
- Subprocesos de RRHH con mayor presión: reclutamiento, onboarding, formación, evaluación, retención, nómina
- Herramientas de HRIS actuales: Workday, SAP SuccessFactors, BambooHR, Personio, etc.
- Principal preocupación sobre la IA en RRHH: bias, privacidad de empleados, pérdida del toque humano, regulación

Con esa información, desarrolla:

1. ESTADO DE LA IA EN RRHH EN 2025
   - Reclutamiento con IA: screening de CVs, matching de candidatos, chatbots de selección, análisis de video entrevistas; qué está regulado y qué no
   - Onboarding inteligente: chatbots de bienvenida, personalización del plan de incorporación, seguimiento automático del progreso
   - Gestión del rendimiento: feedback continuo asistido por IA, detección de empleados en riesgo de desenganche, recomendaciones de desarrollo
   - Formación adaptativa: LMS con IA que personaliza el contenido según el perfil y el progreso del empleado
   - Análisis de personas (People Analytics): predicción de rotación, análisis de clima organizacional, identificación de líderes emergentes
   - Nómina y compensación: automatización de cálculos, benchmarking salarial con IA, gestión de beneficios personalizados

2. REGULACIÓN Y ÉTICA EN 2025
   - EU AI Act: qué sistemas de IA en RRHH caen bajo la categoría de "alto riesgo" y qué obligaciones implica
   - Transparencia algorítmica: qué deben saber los empleados y candidatos sobre los sistemas de IA que los evalúan
   - Bias en IA para reclutamiento: casos reales, cómo auditarlo, qué hacer cuando se detecta
   - Privacidad y RGPD: qué datos de empleados puede procesar la IA y con qué base legal
   - Cómo construir un comité de ética de IA para RRHH en tu organización

3. HERRAMIENTAS Y COMPARATIVA
   - Top herramientas de IA para RRHH en 2025 por categoría: reclutamiento (Greenhouse AI, Lever AI, HireVue), onboarding, LMS, people analytics
   - Para cada herramienta: qué hace exactamente, precio orientativo, integración con HRIS, riesgos conocidos
   - Cómo evaluar una herramienta de IA para RRHH: criterios de selección incluyendo auditoría de bias y cumplimiento regulatorio

4. IMPACTO EN EL ROL DE RRHH
   - Tareas de RRHH que la IA puede automatizar total o parcialmente: screening, scheduling, reporting, FAQ de empleados
   - Tareas que se vuelven más estratégicas: diseño cultural, gestión de conflictos, desarrollo de liderazgo, experiencia del empleado
   - El HR Business Partner del futuro: de generalist ejecutor a consultor estratégico de personas
   - Habilidades nuevas para el equipo de RRHH: análisis de datos, comprensión de IA, diseño de experiencias

5. PLAN DE ADOPCIÓN PARA LA FUNCIÓN DE RRHH
   - Diagnóstico: auditoría de procesos actuales para identificar dónde la IA aporta más valor con menos riesgo
   - Fase 1 (0-60 días): automatización de tareas administrativas y repetitivas sin impacto directo en decisiones sobre personas
   - Fase 2 (60-120 días): soporte de IA en reclutamiento y onboarding con revisión humana obligatoria
   - Fase 3 (120-180 días): people analytics predictivo y formación adaptativa
   - Cómo gestionar la comunicación interna sobre el uso de IA en RRHH

6. MÉTRICAS DE ÉXITO
   - KPIs de la transformación: tiempo de cobertura de vacantes, coste por contratación, time to productivity en onboarding, eNPS, tasa de rotación por segmento
   - Cómo medir el ROI de la IA en RRHH y comunicarlo al CEO y al board

Entrega: informe ejecutivo de tendencias de IA en RRHH con plan de adopción ético y métricas de impacto, listo para presentar a la dirección.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Analizar las tendencias de IA en RRHH 2025 y diseñar una estrategia de adopción ética y efectiva para la función de personas.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'IA en finanzas corporativas y análisis: tendencias 2025',
                'description'       => 'Analiza cómo la IA está transformando el análisis financiero, el FP&A y el control de gestión en 2025, y define qué adoptar para mejorar la calidad y velocidad de las decisiones financieras.',
                'prompt_content'    => <<<'EOT'
Eres CFO, director financiero o analista de FP&A en una empresa mediana o grande. Tu objetivo es analizar las tendencias de IA que están transformando las finanzas corporativas en 2025, separar las herramientas que ya tienen ROI demostrado de las que siguen siendo promesas, y diseñar un plan de adopción para tu equipo financiero.

Información necesaria antes de comenzar:
- Tamaño de la empresa y sector
- Función principal de tu equipo: FP&A, controlling, treasury, M&A, auditoría interna
- Herramientas financieras actuales: ERP (SAP, Oracle, NetSuite), herramientas de BI, Excel, plataformas de FP&A
- Mayor reto actual: calidad del forecasting, velocidad del cierre mensual, análisis de varianzas, reporting al board

Con esa información, desarrolla:

1. TENDENCIAS DE IA EN FINANZAS CORPORATIVAS 2025
   - FP&A con IA: modelos de forecasting con machine learning que superan los modelos lineales tradicionales; driver-based planning asistido por IA
   - Cierre mensual acelerado: automatización de conciliaciones, detección de anomalías contables, clasificación automática de transacciones
   - Análisis de varianzas con lenguaje natural: consultar datos financieros con preguntas en español o inglés en lugar de construir queries en SQL
   - Detección de fraude y riesgo: modelos de anomalía para detectar transacciones inusuales, gastos fuera de política, riesgo de crédito de clientes
   - Auditoría interna con IA: revisión de 100% de transacciones vs. muestras aleatorias, detección de patrones de riesgo
   - M&A y valoración: análisis de información no estructurada en due diligence, modelos de valoración comparativa

2. HERRAMIENTAS DE IA PARA FINANZAS EN 2025
   - Plataformas de FP&A con IA: Anaplan, Pigment, Cube, Mosaic; qué hace la IA en cada una, precio, complejidad de implementación
   - BI con IA: Power BI Copilot, Tableau Pulse, Looker AI; análisis en lenguaje natural sobre datos financieros
   - Automatización de procesos financieros: herramientas de OCR e IA para facturas (Rossum, Infrrd), conciliaciones (ReconArt con IA)
   - Excel con IA: Microsoft 365 Copilot para modelos financieros; qué puede hacer y qué sigue requiriendo criterio humano
   - Para cada categoría: comparativa de herramientas, criterios de selección, casos de uso más frecuentes

3. IMPACTO EN EL EQUIPO FINANCIERO
   - Tareas de finanzas que la IA puede automatizar en 2025: generación de informes estándar, conciliaciones rutinarias, consolidación de datos de múltiples fuentes, responder preguntas básicas de análisis
   - Tareas que requieren juicio financiero humano: interpretación de resultados, comunicación al board, decisiones de inversión y financiación, análisis de escenarios estratégicos
   - El analista financiero del futuro: cuáles son las habilidades más valoradas cuando la IA hace el trabajo rutinario
   - Cómo reorientar el equipo hacia análisis de mayor valor añadido

4. FORECASTING Y PLANIFICACIÓN CON IA
   - Por qué los modelos de ML superan a los modelos lineales en forecasting financiero en muchos contextos
   - Cuándo la IA predice peor que un analista humano (contextos con disrupciones, cambios de modelo de negocio, datos históricos insuficientes)
   - Cómo validar un modelo de forecasting de IA: qué métricas usar (MAPE, RMSE, bias) y cómo interpretarlas para no financieros
   - Scenario planning con IA: cómo generar y evaluar múltiples escenarios de forma más rápida

5. GOBERNANZA Y RIESGOS
   - Riesgos de usar IA en finanzas: modelos que funcionan bien en el pasado pero fallan en condiciones nuevas, sesgo en datos históricos, explicabilidad para el auditor
   - Qué controles internos añadir cuando la IA participa en procesos financieros
   - Cómo documentar el uso de IA para satisfacer a los auditores externos y los reguladores
   - Privacidad de datos financieros: qué datos se pueden enviar a herramientas de IA en la nube y cuáles no

6. PLAN DE ADOPCIÓN
   - Fase 1 (0-60 días): automatización de reporting estándar y conciliaciones con menor riesgo
   - Fase 2 (60-120 días): forecasting asistido por IA con validación humana
   - Fase 3 (120-180 días): análisis en lenguaje natural y FP&A colaborativo con IA

Entrega: informe de tendencias con comparativa de herramientas, plan de adopción y guía de gobernanza, listo para presentar al CFO y al equipo financiero.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Analizar las tendencias de IA en finanzas corporativas 2025 y definir qué adoptar para mejorar el forecasting y el análisis.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'LegalTech e IA: tendencias para profesionales del derecho 2025',
                'description'       => 'Analiza el estado real de la IA en el sector legal en 2025, qué herramientas LegalTech tienen impacto demostrado y cómo adoptarlas sin comprometer la calidad del servicio.',
                'prompt_content'    => <<<'EOT'
Eres abogado senior, socio de un despacho o director jurídico de empresa que quiere entender el impacto real de la IA en la práctica legal en 2025. Tu objetivo es analizar las tendencias de LegalTech con IA, identificar qué herramientas merecen ser adoptadas ahora y cuáles son todavía hype, y diseñar un plan de adopción que mejore la eficiencia sin comprometer la calidad y el cumplimiento ético.

Información necesaria para personalizar el análisis:
- Tipo de práctica: despacho, departamento legal interno, asesoría, tribunal, academia
- Área de especialización: corporativo, litigación, laboral, M&A, compliance, penal, inmobiliario
- Jurisdicción principal: España, Latinoamérica, internacional
- Principal dolor en el trabajo diario: gestión documental, research legal, redacción, facturación, captación de clientes

Con esa información, desarrolla:

1. ESTADO DE LA IA EN EL DERECHO EN 2025
   - Research legal con IA: herramientas que analizan jurisprudencia, doctrina y legislación (vLex AI, Lumi, Lexis+ AI, Westlaw Precision); qué pueden hacer y cuáles son sus límites
   - Revisión y análisis de contratos: herramientas de contract review (ContractPodAi, LegalSifter, Kira); precisión real, tipos de cláusulas que detectan bien y mal
   - Redacción asistida de documentos legales: generadores de contratos, escritos y cláusulas; cuándo son útiles y cuándo generan riesgos
   - Due diligence con IA: análisis de grandes volúmenes de documentación en M&A o litigación; herramientas y casos de uso reales
   - Predicción de resultados judiciales: hasta dónde llega la IA en predecir sentencias y cuáles son las limitaciones éticas y metodológicas
   - Automatización de tareas administrativas: facturación de tiempos, gestión de plazos, intake de clientes

2. HERRAMIENTAS LEGALTECH CON IA EN 2025
   - Top herramientas por categoría con adopción real en España y Latinoamérica
   - Para cada herramienta: qué hace exactamente, precio orientativo, nivel de madurez, tipo de despacho/empresa al que se adapta mejor
   - Herramientas de IA general con uso legal avanzado: Claude, GPT-4, Gemini aplicados a research y redacción legal
   - Cómo evaluar una herramienta LegalTech: criterios de selección incluyendo precisión, explicabilidad, cumplimiento de RGPD y secreto profesional

3. RESPONSABILIDAD PROFESIONAL Y ÉTICA
   - El abogado sigue siendo responsable: qué significa usar IA con responsabilidad profesional en el contexto legal
   - Casos de hallucination de IA en documentos legales: qué ocurrió y cómo evitarlo (verificación de citas, fuentes primarias)
   - Secreto profesional y confidencialidad: qué datos del cliente pueden enviarse a herramientas de IA en la nube
   - Colegios de abogados y regulación del uso de IA: qué dicen los colegios españoles y las bar associations en 2025
   - Deber de competencia tecnológica: en qué jurisdicciones el abogado tiene obligación de conocer las herramientas tecnológicas disponibles

4. IMPACTO EN LA PRÁCTICA LEGAL
   - Tareas que la IA puede asumir en gran medida: primera revisión de contratos, research de jurisprudencia básica, redacción de documentos estándar
   - Tareas que requieren criterio jurídico humano: estrategia procesal, negociación, asesoramiento en situaciones ambiguas, relación con el cliente
   - Impacto en los modelos de facturación: cómo la IA afecta al billable hour y qué modelos alternativos emergen (precio fijo, value-based)
   - El paralegal aumentado por IA: cómo cambia el rol de apoyo en un despacho

5. PLAN DE ADOPCIÓN PARA EL DESPACHO
   - Fase 1 (0-30 días): adoptar IA para research legal y redacción de documentos estándar
   - Fase 2 (30-90 días): automatizar el intake de clientes y la gestión administrativa
   - Fase 3 (90-180 días): contract review automatizado y due diligence asistido
   - Política de uso de IA en el despacho: qué incluir, cómo comunicarla al equipo y a los clientes
   - Formación del equipo: qué aprender primero y cómo practicar con casos reales pero de bajo riesgo

6. POSICIONAMIENTO ANTE EL CLIENTE
   - Cómo comunicar el uso de IA al cliente: transparencia, valor añadido, garantías de calidad
   - Cómo diferenciarse en un mercado donde todos tienen acceso a las mismas herramientas
   - Servicios nuevos que la IA hace posibles: contratos automatizados de bajo coste para autónomos, compliance monitoring continuo, análisis preventivo de riesgos legales

Entrega: informe de tendencias LegalTech 2025 con análisis de herramientas, guía ética de uso y plan de adopción para el despacho o departamento legal.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Analizar las tendencias de LegalTech con IA en 2025 y definir una estrategia de adopción responsable para el despacho.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Atención al cliente con IA: el futuro del CS en 2025',
                'description'       => 'Analiza cómo la IA está transformando la atención al cliente en 2025 y diseña una estrategia para implementarla en tu equipo de soporte sin perder la calidad de la experiencia.',
                'prompt_content'    => <<<'EOT'
Eres director de Customer Support o VP de Customer Experience. Tu objetivo es analizar el estado real de la IA en la atención al cliente en 2025, qué herramientas tienen impacto demostrado y cómo construir una estrategia de IA que mejore la experiencia del cliente y la eficiencia del equipo sin reducir la calidad percibida.

Información necesaria para personalizar el análisis:
- Tipo de producto o servicio: SaaS, ecommerce, fintech, telecomunicaciones, retail, travel
- Volumen aproximado de interacciones por mes y canales principales: email, chat, teléfono, redes sociales
- Herramientas de soporte actuales: Zendesk, Intercom, Freshdesk, Salesforce Service Cloud
- Mayor reto del equipo: tiempo de primera respuesta, resolución en primer contacto, escalaciones, costes, CSAT

Con esa información, desarrolla:

1. ESTADO DE LA IA EN CS EN 2025
   - Chatbots de nueva generación: diferencias entre chatbots basados en reglas (2020) y agentes de IA conversacionales (2025); qué pueden resolver sin intervención humana
   - AI-assisted agents: cómo la IA ayuda al agente humano en tiempo real (sugerencias de respuesta, acceso a información, resumen del historial del cliente)
   - Automated ticket resolution: qué porcentaje de tickets pueden resolverse automáticamente según el sector y tipo de consulta
   - Sentiment analysis en tiempo real: detección de clientes frustrados y escalación proactiva
   - Voice AI: agentes de voz con IA para soporte telefónico; estado real en 2025 (latencia, naturalidad, casos de uso)
   - Proactive support: cómo la IA detecta problemas antes de que el cliente contacte

2. HERRAMIENTAS Y COMPARATIVA
   - Plataformas de soporte con IA nativa: Intercom Fin, Zendesk AI, Freshworks Freddy, Salesforce Einstein Service
   - Soluciones especializadas de AI support: Forethought, Kodif, Aisera
   - Para cada herramienta: qué hace la IA exactamente, tasa de resolución autónoma real, integraciones, precio por conversación o por agente, limitaciones
   - Cómo evaluar una herramienta de AI CS: métricas de evaluación, período de prueba recomendado, criterios de go/no-go

3. DISEÑO DEL MODELO HUMAN + AI
   - Modelo de escalación: qué resuelve la IA, qué escala al agente, cuándo escalar sin que el cliente lo pida
   - Experiencia del cliente en el traspaso IA → humano: cómo hacer que la transición sea fluida y no frustrante
   - El agente aumentado: cómo cambia el rol del agente cuando tiene IA como copiloto
   - Canales donde la IA funciona mejor (chat asíncrono) vs. peor (queja emocional, situación compleja)

4. IMPLEMENTACIÓN Y GESTIÓN DEL CAMBIO
   - Cómo hacer el piloto: segmento de consultas a automatizar primero (menor complejidad, mayor volumen), KPIs del piloto, criterio de éxito
   - Entrenamiento del modelo: qué datos necesita la IA para funcionar bien (historial de tickets, base de conocimiento, FAQs)
   - Gestión del equipo: cómo comunicar la llegada de la IA al equipo de agentes, cómo reubicar a las personas cuyas tareas se automatizan
   - QA de la IA: proceso de revisión de conversaciones gestionadas por IA para detectar errores y sesgos

5. MÉTRICAS Y ROI
   - KPIs de CS antes y después de adoptar IA: CSAT, FCR, AHT (Average Handling Time), tiempo de primera respuesta, coste por ticket, volumen de escalaciones
   - Cómo calcular el ROI de la IA en CS: ahorro en coste de agentes vs. inversión en herramientas vs. impacto en CSAT/churn
   - Métricas de la IA: tasa de resolución autónoma, tasa de containment, escalaciones evitadas, errores del bot

6. TENDENCIAS EMERGENTES EN CS PARA 2026
   - Agentes de CS totalmente autónomos: qué está pasando en empresas que han avanzado más
   - CS predictivo y proactivo: de reaccionar a anticipar
   - Personalización extrema: cómo el historial completo del cliente, procesado por IA, cambia cada interacción
   - El equipo de CS en 2026: nuevos roles (AI trainer, conversation designer, quality AI analyst)

Entrega: informe de tendencias de IA en CS con guía de implementación, comparativa de herramientas y plan de transformación del equipo, listo para presentar al VP de CX y al CEO.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Analizar las tendencias de IA en atención al cliente 2025 y diseñar una estrategia human+AI para mejorar el CSAT y la eficiencia.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Freelancing en la era de la IA: oportunidades y estrategia 2025',
                'description'       => 'Analiza cómo la IA está transformando el mercado de trabajo freelance en 2025 y diseña una estrategia para diferenciarte, escalar tus ingresos y proteger tu negocio en este nuevo contexto.',
                'prompt_content'    => <<<'EOT'
Eres freelancer profesional o consultor independiente que quiere entender cómo la IA está cambiando el mercado de trabajo autónomo en 2025 y definir una estrategia para no solo sobrevivir sino prosperar en este nuevo entorno. Tu objetivo es analizar las tendencias reales, identificar las oportunidades que crea la IA para los freelancers y construir un plan concreto para los próximos 12 meses.

Información necesaria para personalizar el análisis:
- Especialidad: diseño, desarrollo, marketing, copywriting, consultoría, traducción, fotografía, formación u otra
- Tiempo como freelancer y nivel de ingresos actual (bajo/medio/alto)
- Principales plataformas de captación de clientes: Upwork, Malt, LinkedIn, referencias, web propia
- Mayor preocupación sobre la IA: competencia de bots, reducción de tarifas, desaparición del servicio

Con esa información, desarrolla:

1. IMPACTO DE LA IA EN EL MERCADO FREELANCE EN 2025
   - Qué servicios freelance están siendo más afectados por la IA: tareas repetitivas de bajo valor (primeras versiones de textos genéricos, traducciones básicas, código boilerplate)
   - Qué servicios siguen siendo altamente demandados y difíciles de automatizar: criterio editorial, estrategia, relación con el cliente, creatividad contextual, consultoría compleja
   - Nuevos servicios que la IA crea para freelancers: entrenamiento de modelos, prompt engineering, curación de outputs de IA, auditoría de contenido generado
   - Cómo está cambiando el precio: dónde las tarifas bajan (commodities) y dónde suben (expertos que usan IA)
   - El mercado de las plataformas: cómo Upwork, Fiverr y Malt están respondiendo a la IA en 2025

2. LA VENTAJA COMPETITIVA DEL FREELANCER EN LA ERA DE LA IA
   - Por qué el cliente todavía prefiere un humano para muchas tareas: confianza, contexto, responsabilidad, relación
   - El freelancer como "director de orquesta de IA": cómo posicionarte como experto que usa IA para darte más valor al cliente, no menos
   - Especialización profunda: por qué la IA refuerza el valor del nicho frente al generalista
   - Conocimiento del cliente: cómo construir un conocimiento de tu cliente que la IA no puede replicar (historia, cultura, objetivos, no negociables)
   - Tu red y reputación: por qué las referencias siguen siendo la fuente de negocio más resistente a la IA

3. CÓMO USAR LA IA PARA ESCALAR TU NEGOCIO FREELANCE
   - Producción más rápida: qué partes de tu proceso puedes acelerar con IA sin sacrificar calidad (investigación, primeros borradores, variantes, revisión)
   - Cómo reposicionar el tiempo ahorrado con IA: aceptar más proyectos, mejorar la calidad o trabajar menos horas
   - Nuevos servicios que puedes ofrecer usando IA: qué servicios de mayor valor te habilita la IA que antes no podías ofrecer en solitario
   - Automatización del negocio: qué procesos administrativos automatizar con IA (propuestas, seguimiento, facturación, onboarding de clientes)

4. ESTRATEGIA DE POSICIONAMIENTO Y PRECIOS
   - Cómo comunicar a los clientes que usas IA de forma transparente y como ventaja diferencial
   - Revisión de tu propuesta de valor: qué parte de lo que haces es difícilmente replicable por la IA
   - Modelo de precios en 2025: por proyecto, por valor generado o por retainer; cuál se adapta mejor en un entorno con IA
   - Cómo justificar tarifas más altas siendo un freelancer que usa IA: el argumento del resultado vs. el argumento del tiempo

5. NUEVAS OPORTUNIDADES DE NEGOCIO
   - Servicios emergentes en alta demanda para freelancers con conocimiento de IA: AI content auditor, prompt specialist, AI implementation consultant, LLM trainer, synthetic data creator
   - Cómo evaluar si una nueva oportunidad de IA encaja con tu especialidad y experiencia
   - Plataformas y comunidades donde se concentra la demanda de estos nuevos servicios
   - Cómo pivotar gradualmente sin abandonar tu base de clientes actual

6. PLAN DE ACCIÓN PARA LOS PRÓXIMOS 12 MESES
   - Mes 1-3: adoptar IA en tu proceso de producción, medir el impacto en calidad y tiempo
   - Mes 4-6: reposicionar tu oferta, actualizar tu web y materiales de ventas para incluir IA como diferenciador
   - Mes 7-9: lanzar al menos un nuevo servicio habilitado por IA
   - Mes 10-12: evaluar el impacto en ingresos, satisfacción del cliente y calidad de vida; decidir si escalar
   - Hábito semanal: cómo mantenerse al día con la evolución de la IA sin dedicarle más de 2 horas a la semana

7. PROTECCIÓN Y RESILIENCIA
   - Diversificación de clientes y servicios para reducir la dependencia de cualquier categoría afectada por la IA
   - Cómo construir activos propios (audiencia, producto, metodología propia) que no dependan de plataformas
   - Señales de que un servicio está siendo commoditizado y cuándo es el momento de pivotar

Entrega: análisis de tendencias y plan estratégico de 12 meses para el freelancer en la era de la IA, con acciones concretas para cada trimestre.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Entender el impacto de la IA en el mercado freelance 2025 y diseñar una estrategia para diferenciarse y crecer.',
                'vote_score'        => 49,
                'resource_type'     => 'prompt',
            ],
        ];
        foreach ($skills as $data) {
            $slug = Str::slug($data['title']);
            if (Skill::where('slug', $slug)->exists()) {
                $this->command->info("Skipping: {$data['title']}");
                continue;
            }
            Skill::create(array_merge($data, [
                'user_id'     => $admin->id,
                'slug'        => $slug,
                'status'      => 'published',
                'version'     => 1,
                'views_count' => rand(80, 400),
                'saves_count' => rand(5, 30),
            ]));
            $this->command->info("Created: {$data['title']}");
        }
    }
}
