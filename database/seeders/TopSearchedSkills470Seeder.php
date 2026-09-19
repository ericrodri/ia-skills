<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills470Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Agentes IA para automatizar campañas de marketing',
                'description'      => 'Diseña y despliega agentes de IA que automaticen flujos completos de marketing: generación de contenido, segmentación, envío y análisis de campañas sin intervención manual.',
                'prompt_content'   => <<<'EOT'
Eres un experto en automatización de marketing con agentes de inteligencia artificial. Tu objetivo es ayudarme a diseñar un sistema de agentes autónomos que automaticen los flujos de trabajo más repetitivos de mi equipo de marketing.

**Contexto y objetivo:**
Quiero pasar de un marketing manual y reactivo a un sistema semi-autónomo donde los agentes de IA gestionen las tareas repetitivas: investigación de audiencias, generación de variantes de contenido, programación de publicaciones, análisis de rendimiento y optimización de campañas. El equipo humano se concentra en la estrategia y la creatividad.

**Paso 1 — Auditoría de tareas automatizables:**
Analiza conmigo qué tareas de marketing son candidatas para automatización con agentes:

Categoría A — Completamente automatizable:
- Generación de variantes de copy para A/B testing
- Redimensionamiento y adaptación de creatividades por formato
- Programación de publicaciones en redes sociales
- Compilación de reportes de rendimiento semanales
- Monitoreo de menciones de marca y competidores

Categoría B — Parcialmente automatizable (agente propone, humano aprueba):
- Segmentación de audiencias para campañas
- Selección de creatividades para publicación
- Respuesta a comentarios de la comunidad
- Propuestas de nuevo contenido basadas en tendencias

Categoría C — Requiere creatividad humana pero con asistencia de IA:
- Estrategia de campaña
- Narrativa de marca
- Gestión de crisis de comunicación

**Paso 2 — Diseño de agentes de marketing:**
Para cada área, diseña un agente con:

**Agente de Contenido:**
- Función: generar variantes de copy, titulares y descripciones
- Entradas: brief de campaña, audiencia objetivo, tono de marca, canal
- Salidas: 5 variantes de copy por formato, calificadas por criterios de marca
- Integraciones: Google Docs, Notion, sistema de aprobación
- Criterios de autonomía: qué puede publicar solo vs. qué requiere aprobación

**Agente de Análisis y Reporte:**
- Función: compilar datos de rendimiento y generar insights
- Entradas: métricas de todas las plataformas (Meta, Google, LinkedIn, email)
- Salidas: reporte semanal, alertas de anomalías, recomendaciones de optimización
- Integraciones: APIs de plataformas publicitarias, Google Analytics, CRM

**Agente de Investigación de Tendencias:**
- Función: monitorear tendencias del sector y proponer contenido relevante
- Entradas: palabras clave del sector, competidores, fuentes RSS
- Salidas: briefings diarios de tendencias, oportunidades de contenido, alertas de competidores

**Agente de Segmentación:**
- Función: analizar datos de clientes y proponer segmentos para campañas
- Entradas: datos del CRM, comportamiento web, historial de compras
- Salidas: segmentos etiquetados, propuesta de mensajes por segmento

**Paso 3 — Orquestación multi-agente:**
Diseña el flujo de trabajo donde los agentes colaboran:
1. El Agente de Tendencias detecta una oportunidad
2. El Agente de Segmentación identifica la audiencia más receptiva
3. El Agente de Contenido genera el copy y creatividades
4. El humano aprueba la campaña en 10 minutos
5. El Agente de Análisis mide el rendimiento y retroalimenta al sistema

Dibuja el diagrama de flujo de este proceso con las decisiones humanas claramente marcadas.

**Paso 4 — Implementación técnica:**
Para cada agente, especifica:
- Herramientas de IA recomendadas (Claude API, Make, Zapier, n8n)
- APIs necesarias y autenticación
- Estructura de prompts del agente (system prompt, user prompt, output format)
- Mecanismo de memoria y contexto entre ejecuciones
- Gestión de errores y fallbacks cuando el agente falla

**Paso 5 — Gobierno y control:**
Diseña el sistema de supervisión:
- Dashboard de actividad de los agentes
- Alertas cuando un agente toma una acción inesperada
- Métricas de rendimiento de los agentes vs. trabajo manual previo
- Proceso de mejora continua de los prompts del agente

**Entregables:**
Al final quiero tener: el diseño completo de 4 agentes de marketing, el diagrama de orquestación, los system prompts de cada agente y un plan de implementación en 8 semanas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar un sistema de agentes autónomos que automaticen las tareas repetitivas de marketing y liberen al equipo para trabajo estratégico.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Orquestación de agentes IA para workflows de desarrollo',
                'description'      => 'Implementa sistemas multi-agente que automaticen flujos de desarrollo: revisión de código, generación de tests, documentación automática y despliegues inteligentes.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ingeniería de software y en la implementación de sistemas multi-agente para automatizar flujos de trabajo de desarrollo. Tu objetivo es ayudarme a diseñar e implementar agentes autónomos que mejoren la productividad del equipo de desarrollo.

**Visión del sistema:**
Quiero un sistema donde agentes de IA trabajen en paralelo con el equipo de desarrollo: uno revisa el código antes que el humano, otro genera tests automáticamente, otro actualiza la documentación cuando cambia el código, y otro coordina los despliegues. Los desarrolladores se concentran en la lógica de negocio y la arquitectura.

**Paso 1 — Mapa de flujos de trabajo automatizables:**
Analiza el ciclo de desarrollo estándar (feature branch → PR → review → merge → deploy) e identifica dónde los agentes añaden más valor:

Antes del PR:
- Lint y formateo automático
- Análisis estático de seguridad
- Generación de tests unitarios para código nuevo
- Sugerencias de refactoring

Durante el PR:
- Revisión de código: bugs, anti-patrones, violaciones de arquitectura
- Validación de cobertura de tests
- Revisión de documentación (¿el código nuevo está documentado?)
- Generación automática del changelog

Después del merge:
- Actualización de documentación técnica
- Notificación a dependientes del cambio
- Monitoreo post-deploy de errores

**Paso 2 — Diseño de cada agente:**

**Agente de Revisión de Código (Code Reviewer):**
- Función: revisar PRs antes del review humano para dar feedback inicial
- Entradas: diff del PR, contexto del repositorio, estándares de código del equipo
- Salidas: lista de issues por severidad (crítico, advertencia, sugerencia), comentarios inline en el PR
- Integraciones: GitHub/GitLab API, acceso de solo lectura al repositorio
- System prompt: incluye los estándares de código del equipo, arquitectura del sistema, anti-patrones conocidos

**Agente de Testing (Test Generator):**
- Función: generar tests unitarios y de integración para código nuevo
- Entradas: función o módulo nuevo, fixtures existentes, framework de testing del proyecto
- Salidas: tests generados listos para revisión humana, con casos edge cubiertos
- Integraciones: sistema de archivos del repositorio, CI/CD pipeline

**Agente de Documentación (Docs Updater):**
- Función: actualizar documentación técnica cuando cambia el código
- Entradas: diff del código, documentación existente de la función/módulo
- Salidas: borrador de documentación actualizada para revisión
- Integraciones: wiki técnica, README, docstrings

**Agente de Despliegue (Deploy Coordinator):**
- Función: coordinar y supervisar despliegues con rollback automático
- Entradas: artefacto a desplegar, métricas de salud del sistema, umbral de rollback
- Salidas: reporte de deploy, alertas de anomalías, rollback automático si se superan umbrales
- Integraciones: plataforma de cloud (AWS/GCP/Azure), sistemas de monitoreo (Datadog, Grafana)

**Paso 3 — Orquestación multi-agente con LangGraph / CrewAI:**
Diseña el flujo de orquestación donde los agentes colaboran:

Flujo de PR:
1. Developer abre PR
2. Agente de Testing genera tests automáticamente (en paralelo)
3. Agente de Revisión analiza el código (en paralelo)
4. Agente de Documentación verifica que el código está documentado (en paralelo)
5. El sistema consolida los resultados y crea un comment resumen en el PR
6. Human reviewer recibe el PR con el análisis completo

Para cada flujo, especifica:
- Qué agentes corren en paralelo vs. secuencialmente
- Cómo se pasa el contexto entre agentes
- Mecanismo de fallback si un agente falla
- Timeout y manejo de errores

**Paso 4 — Implementación técnica:**
Proporciona:
- Comparativa de frameworks: LangGraph vs. CrewAI vs. AutoGen para este caso de uso
- Estructura de proyecto recomendada para el código de los agentes
- Plantilla de system prompt para el Agente de Revisión de Código
- Ejemplo de código Python para el flujo básico de PR con dos agentes
- Integración con GitHub Actions para disparar los agentes automáticamente

**Paso 5 — Métricas y mejora continua:**
Define cómo medir el impacto de los agentes:
- Tiempo de ciclo del PR (antes vs. después)
- Issues encontrados por el agente vs. por el reviewer humano
- Cobertura de tests generados automáticamente vs. escribir tests manualmente
- Tiempo de deploy con y sin el agente coordinador

**Entregables:**
Plan de implementación en 10 semanas, arquitectura del sistema, system prompts de los 4 agentes y métricas de éxito.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 75,
                'use_case'         => 'Implementar agentes de IA que automaticen revisión de código, generación de tests, documentación y despliegues para acelerar el ciclo de desarrollo.',
                'vote_score'       => 50,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Agentes IA para automatizar flujos de diseño y producción',
                'description'      => 'Diseña agentes autónomos que automaticen la producción de assets de diseño, adaptación de formatos, control de calidad de marca y generación de variantes para campañas.',
                'prompt_content'   => <<<'EOT'
Eres un experto en automatización de producción de diseño usando agentes de inteligencia artificial. Tu objetivo es ayudarme a diseñar un sistema de agentes que automaticen las tareas de producción más repetitivas del equipo de diseño.

**El problema de la producción de diseño:**
El equipo de diseño dedica entre el 40% y el 60% del tiempo a tareas de producción: adaptar una creatividad a 20 formatos diferentes, generar variantes de color para diferentes mercados, verificar que los assets cumplen las guías de marca, comprimir y renombrar archivos para entrega. Este tiempo podría dedicarse a diseño estratégico y creativo.

**Paso 1 — Identificación de tareas de producción automatizables:**

Alta automatización (el agente lo hace solo):
- Adaptación de un diseño master a múltiples formatos (stories, feed, banner, etc.)
- Compresión y optimización de imágenes para web
- Renombrado de archivos según convención de nomenclatura
- Generación de paletas de color alternativas manteniendo el contraste WCAG
- Exportación de assets desde Figma según especificaciones

Automatización asistida (el agente propone, el diseñador aprueba):
- Verificación de cumplimiento de guías de marca (colores, tipografía, espaciado)
- Sugerencias de mejora de legibilidad y accesibilidad
- Generación de variantes de copy para A/B testing visual
- Propuesta de imágenes de stock relevantes para un concepto

**Paso 2 — Diseño de agentes de producción:**

**Agente de Adaptación de Formatos:**
- Función: tomar un diseño master y generar automáticamente todas las variantes de formato
- Entradas: diseño master en Figma, lista de formatos objetivo (dimensiones, proporciones)
- Salidas: todos los formatos generados, listos para revisión en Figma
- Integraciones: Figma API, plantillas de formatos por cliente o campaña

**Agente de Control de Calidad de Marca:**
- Función: revisar que los assets cumplen las guías de marca antes de la entrega
- Entradas: asset a revisar, guías de marca del cliente (colores hex, tipografías, espaciados)
- Salidas: reporte de conformidad con issues marcados (colores incorrectos, tipografía no autorizada, etc.)
- Integraciones: sistema de archivos de diseño, guía de marca en formato estructurado

**Agente de Generación de Variantes:**
- Función: generar variantes de color, texto o composición para testing
- Entradas: diseño base, dimensiones de variación (color: 3 opciones, headline: 5 variantes)
- Salidas: galería de variantes numeradas para que el diseñador seleccione
- Integraciones: Figma API, herramientas de generación de imagen (cuando aplique)

**Agente de Entrega y Nomenclatura:**
- Función: preparar el paquete de entrega final con la estructura y nomenclatura correcta
- Entradas: carpeta con assets finales, convención de nomenclatura del cliente
- Salidas: carpeta de entrega con todos los archivos renombrados, comprimidos y organizados
- Integraciones: sistema de archivos, Google Drive o Dropbox API

**Paso 3 — Orquestación de producción:**
Diseña el flujo completo de producción de una campaña:
1. Diseñador termina el diseño master y activa el workflow
2. Agente de Adaptación genera todos los formatos (paralelo)
3. Agente de QC de Marca verifica cada asset (paralelo)
4. El sistema consolida los resultados y marca los assets que requieren revisión humana
5. Diseñador revisa solo los assets con issues (20% del tiempo anterior)
6. Agente de Entrega prepara el paquete final

**Paso 4 — Implementación técnica:**
Proporciona:
- Herramientas recomendadas: Make.com, n8n o Zapier para orquestar
- Figma API: endpoints clave para leer y escribir diseños
- Ejemplo de workflow en Make.com para la adaptación de formatos
- Estructura de los system prompts para el Agente de QC de Marca
- Costes estimados de API por campaña

**Paso 5 — Métricas de impacto:**
Define cómo medir el valor de los agentes:
- Tiempo de producción por campaña (antes vs. después)
- Issues de marca detectados automáticamente vs. llegados al cliente
- Porcentaje de assets entregados sin revisión humana
- Satisfacción del equipo de diseño (liberar tiempo creativo)

**Entregables:**
Plan de implementación en 6 semanas, diseño de los 4 agentes, un workflow de Make.com documentado para la adaptación de formatos y métricas de éxito.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Automatizar la producción de assets de diseño con agentes para liberar tiempo creativo y reducir errores de marca.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Agentes IA para automatizar el proceso de ventas B2B',
                'description'      => 'Implementa agentes autónomos que automaticen la prospección, calificación, seguimiento y análisis de deals en el proceso de ventas B2B.',
                'prompt_content'   => <<<'EOT'
Eres un experto en automatización de ventas con agentes de inteligencia artificial. Tu objetivo es ayudarme a diseñar un sistema de agentes que automaticen las tareas repetitivas del proceso de ventas B2B, para que el equipo comercial pueda dedicar más tiempo a cerrar deals y construir relaciones.

**El problema del proceso de ventas manual:**
Un vendedor B2B dedica menos del 35% de su tiempo a vender. El resto lo consume en investigación de prospectos, redacción de emails de seguimiento, actualización del CRM, preparación de propuestas y análisis de datos. Los agentes de IA pueden automatizar gran parte de este trabajo.

**Paso 1 — Mapa del proceso de ventas y oportunidades de automatización:**

Prospección (automatización alta):
- Investigación de empresas objetivo: size, industria, noticias recientes, tech stack
- Identificación de contactos con poder de decisión en LinkedIn
- Generación de mensajes de prospección personalizados por vertical
- Secuencias de seguimiento automatizadas por canal

Calificación (automatización media):
- Scoring de leads basado en comportamiento y perfil
- Análisis de fit entre el prospecto y el ICP (Ideal Customer Profile)
- Generación de preguntas de calificación personalizadas por cuenta

Gestión del pipeline (automatización alta):
- Actualización automática del CRM después de cada interacción
- Alertas de deals en riesgo (sin actividad en X días)
- Resúmenes de llamadas y next steps automáticos

Cierre y propuesta (automatización media):
- Generación del primer borrador de propuesta basada en la información del deal
- Personalización de materiales de presentación por industria del cliente
- Análisis de probabilidad de cierre basado en señales del deal

**Paso 2 — Diseño de agentes de ventas:**

**Agente de Investigación de Cuentas (Account Researcher):**
- Función: antes de una llamada, generar un briefing completo de la cuenta
- Entradas: nombre de la empresa y del contacto, URL del sitio web
- Salidas: resumen ejecutivo (empresa, industria, tamaño, noticias recientes, tech stack probable), perfil del contacto (LinkedIn, historial, contexto), preguntas sugeridas para la llamada
- Integraciones: LinkedIn API, web scraping, bases de datos de empresas (Apollo, Clearbit)

**Agente de Prospección y Outreach:**
- Función: generar y enviar secuencias de outreach personalizadas
- Entradas: lista de cuentas objetivo, plantilla de mensaje, datos de la cuenta
- Salidas: emails y mensajes de LinkedIn personalizados por cuenta, programados para envío
- Integraciones: Gmail/Outlook API, LinkedIn Sales Navigator, Lemlist o Instantly

**Agente de CRM y Pipeline:**
- Función: mantener el CRM actualizado automáticamente después de cada interacción
- Entradas: notas de reunión, email de seguimiento, registro de llamada
- Salidas: deal actualizado en el CRM (etapa, próximos pasos, fecha de seguimiento, notas)
- Integraciones: Salesforce, HubSpot o Pipedrive API

**Agente de Propuestas:**
- Función: generar el primer borrador de propuesta comercial
- Entradas: información del deal (cliente, problema, solución acordada, pricing)
- Salidas: propuesta estructurada en formato Word/PDF lista para personalizar
- Integraciones: Google Docs, plantillas de propuesta del equipo

**Paso 3 — Flujo de trabajo multi-agente:**
Diseña el flujo completo de un deal desde prospección hasta propuesta:
1. Vendedor añade cuenta a la lista objetivo
2. Agente de Investigación genera el briefing de la cuenta (automático)
3. Agente de Outreach envía secuencia personalizada (automático con aprobación)
4. El prospecto responde y acepta una reunión
5. Agente de Investigación actualiza el briefing con nueva información (automático)
6. Después de la reunión, el vendedor dicta notas y el Agente de CRM actualiza el deal (automático)
7. Agente de Propuestas genera el borrador de propuesta (automático)
8. Vendedor revisa, personaliza y envía la propuesta

**Paso 4 — Implementación técnica:**
Proporciona:
- Comparativa de herramientas: Clay vs. Apollo vs. Lemlist para el stack de prospección
- Integración de Claude API con el CRM para el Agente de CRM
- Plantilla de system prompt para el Agente de Investigación de Cuentas
- Ejemplo de workflow en Make.com para el flujo post-reunión
- Costes mensuales estimados por volumen de deals

**Plan de implementación:**
Roadmap de 8 semanas con hitos y métricas de éxito: tiempo dedicado a tareas administrativas reducido, tasa de respuesta de outreach mejorada, tiempo de actualización del CRM.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Automatizar la investigación de cuentas, outreach, actualización del CRM y generación de propuestas para que los vendedores se concentren en cerrar.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Agentes IA para automatizar el discovery y priorización de producto',
                'description'      => 'Diseña agentes autónomos que automaticen la recopilación de feedback de usuarios, síntesis de insights, priorización de features y generación de PRDs.',
                'prompt_content'   => <<<'EOT'
Eres un experto en Product Management y automatización de flujos de trabajo de producto con agentes de IA. Tu objetivo es ayudarme a diseñar un sistema de agentes que automaticen el proceso de discovery, desde la recopilación de feedback hasta la generación del PRD inicial.

**El reto del PM sobrecargado:**
Los Product Managers pasan demasiado tiempo en tareas que podrían automatizarse: leer y clasificar feedback de usuarios, compilar datos de múltiples fuentes (Intercom, App Store reviews, encuestas, NPS), organizar insights para las sesiones de priorización y generar el borrador inicial de los PRDs. Los agentes de IA pueden hacerse cargo de estas tareas, permitiendo que el PM se concentre en tomar decisiones estratégicas.

**Paso 1 — Fuentes de feedback y datos a integrar:**
Identifica todas las fuentes de información del producto:
- Tickets de soporte y Intercom conversations
- Reviews de App Store y Google Play
- Respuestas a encuestas NPS y CSAT
- Entrevistas de usuario (transcripciones)
- Datos de uso y analytics (feature adoption, funnel drop-off)
- Peticiones de clientes en el CRM
- Feedback interno del equipo de ventas y CS

**Paso 2 — Diseño de agentes de producto:**

**Agente de Síntesis de Feedback (Feedback Synthesizer):**
- Función: agregar y clasificar feedback de todas las fuentes de forma continua
- Entradas: tickets de soporte, reviews, encuestas, transcripciones de entrevistas
- Salidas: informe semanal de temas emergentes, frecuencia por tema, exemplos representativos de citas de usuarios, severidad y urgencia estimada
- Integraciones: Intercom API, App Store Connect, SurveyMonkey, Dovetail

**Agente de Análisis de Comportamiento (Behavior Analyst):**
- Función: detectar patrones en los datos de uso y alertar sobre anomalías
- Entradas: eventos de analytics (Mixpanel, Amplitude, PostHog), datos de funnel
- Salidas: reporte de features con bajo adoption, puntos de drop-off del funnel, oportunidades de mejora de retención, alertas cuando una métrica cae por debajo del umbral
- Integraciones: Mixpanel o Amplitude API, Google Analytics

**Agente de Priorización (Prioritization Assistant):**
- Función: proponer una priorización de backlog basada en los datos recopilados
- Entradas: backlog actual, insights del Feedback Synthesizer, datos del Behavior Analyst, objetivos del trimestre
- Salidas: backlog priorizado con justificación basada en datos, mapa de impacto vs. esfuerzo, sugerencias de qué descubrimiento necesita cada item antes de desarrollarlo
- Integraciones: Jira, Linear o Productboard

**Agente de PRD (PRD Generator):**
- Función: generar el borrador inicial de un PRD para una feature priorizada
- Entradas: descripción de la feature, insights de usuarios relevantes, métricas de éxito del objetivo
- Salidas: PRD completo con secciones: problema, usuarios afectados, solución propuesta, casos de uso, criterios de aceptación, métricas de éxito, riesgos
- Integraciones: Google Docs, Notion

**Paso 3 — Flujo de trabajo multi-agente:**
Diseña el ciclo de discovery automatizado:

Ciclo continuo (diario/semanal):
1. Agente de Feedback agrega y clasifica nuevo feedback (automático, diario)
2. Agente de Comportamiento detecta anomalías y tendencias (automático, diario)
3. El PM recibe un briefing de 5 minutos cada lunes con los insights más relevantes

Ciclo de priorización (mensual/trimestral):
1. PM activa el ciclo de priorización
2. Agente de Priorización analiza todos los inputs y propone el backlog priorizado
3. PM revisa y ajusta la priorización en una sesión de 60 minutos (en lugar de 3 horas)
4. Para cada feature top-5, el Agente de PRD genera el borrador
5. PM refina los PRDs con su criterio y contexto

**Paso 4 — Implementación técnica:**
Proporciona:
- Arquitectura técnica del sistema: qué herramientas, cómo se conectan
- System prompt del Agente de Síntesis de Feedback (detallado)
- Ejemplo de informe semanal de feedback generado por el agente
- Plantilla de PRD que el agente genera
- Herramientas: Zapier vs. n8n para la orquestación

**Métricas de éxito:**
- Tiempo del PM en tareas de síntesis de información reducido
- Tiempo de generación del PRD inicial reducido
- Cobertura de fuentes de feedback aumentada
- Sesiones de priorización más cortas y basadas en datos

**Entregables:**
Arquitectura completa del sistema, system prompts de los 4 agentes, plan de implementación en 8 semanas y ejemplo de cada entregable generado por los agentes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 70,
                'use_case'         => 'Automatizar la síntesis de feedback, análisis de comportamiento y generación de PRDs para que el PM se concentre en decisiones estratégicas.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Agentes IA para automatizar procesos de RRHH y people ops',
                'description'      => 'Implementa agentes autónomos que automaticen el screening de candidatos, onboarding, análisis de feedback de empleados y generación de reportes de people analytics.',
                'prompt_content'   => <<<'EOT'
Eres un experto en People Operations y automatización de procesos de RRHH con agentes de inteligencia artificial. Tu objetivo es ayudarme a diseñar agentes que automaticen los flujos más repetitivos del departamento para que el equipo de RRHH se concentre en iniciativas estratégicas de talento.

**El impacto del tiempo en RRHH:**
Los equipos de RRHH dedican entre el 50% y el 70% de su tiempo a tareas administrativas y repetitivas: revisar CVs, responder emails de candidatos, preparar materiales de onboarding, compilar datos de encuestas de clima y generar reportes. La automatización con agentes puede liberar ese tiempo para la gestión del talento, la cultura y el desarrollo de personas.

**Paso 1 — Mapa de procesos automatizables:**

Selección y Recruiting:
- Pre-screening de CVs según los criterios del rol
- Respuestas automáticas a candidatos (confirmación, rechazo con feedback, avance)
- Programación de entrevistas coordinando agendas
- Compilación de notas de entrevistas en el ATS

Onboarding:
- Generación del plan de onboarding personalizado por rol
- Envío automático de materiales en el momento correcto
- Seguimiento de tareas del checklist de onboarding
- Encuesta automática de feedback de la primera semana

People Analytics:
- Compilación de datos de múltiples fuentes (HRIS, encuestas, performance)
- Generación de reportes mensuales de métricas de talento
- Alertas de equipos con métricas de riesgo (engagement bajo, alta rotación, etc.)

**Paso 2 — Diseño de agentes de RRHH:**

**Agente de Screening de Candidatos:**
- Función: pre-filtrar CVs según criterios del rol y enviar respuestas automáticas
- Entradas: CV del candidato, job description, criterios de evaluación del hiring manager
- Salidas: scorecard del candidato (ajuste de perfil, experiencia, habilidades), recomendación (avanzar / en espera / descartar), email de respuesta personalizado
- Integraciones: ATS (Workable, Greenhouse, Lever), email del equipo

**Agente de Onboarding:**
- Función: gestionar automáticamente el proceso de onboarding del nuevo empleado
- Entradas: datos del nuevo empleado (rol, departamento, manager, fecha de inicio)
- Salidas: plan de onboarding generado, emails programados con materiales por etapa, checklist de tareas para el manager y el empleado, encuesta de feedback de 30 días
- Integraciones: HRIS, Google Workspace, Slack, sistema de tickets IT

**Agente de Análisis de Clima:**
- Función: analizar los resultados de encuestas de engagement y generar insights accionables
- Entradas: respuestas de encuesta de clima (anonimizadas), datos históricos, benchmarks del sector
- Salidas: resumen ejecutivo con temas principales, equipos con mayor riesgo, comparativa histórica, recomendaciones de acción prioritarias
- Integraciones: Culture Amp, Lattice o herramienta de encuestas interna

**Agente de People Analytics:**
- Función: compilar y analizar métricas de RRHH para el reporte mensual
- Entradas: datos del HRIS (headcount, rotación, absentismo, tiempo de contratación)
- Salidas: dashboard de métricas actualizado, alertas de desviaciones, narrativa ejecutiva del mes
- Integraciones: HRIS (BambooHR, Personio, Workday), Google Data Studio o Power BI

**Paso 3 — Orquestación del flujo de recruiting:**
Diseña el flujo completo de un proceso de selección con agentes:
1. Hiring manager crea la oferta en el ATS
2. Agente genera el job description optimizado (basado en plantillas internas)
3. Candidato aplica
4. Agente de Screening pre-filtra en 2 minutos y envía respuesta automática
5. RRHH revisa candidatos marcados como "avanzar" en 30 minutos (no 3 horas)
6. Se programa la entrevista automáticamente
7. Después de las entrevistas, el Agente compila las notas y genera el resumen
8. Decision y oferta enviada por RRHH

**Paso 4 — Implementación técnica:**
Proporciona:
- Arquitectura técnica: herramientas (Make.com, Zapier, Clay para recruiting)
- System prompt del Agente de Screening (con criterios configurables por rol)
- Ejemplo de scorecard generado automáticamente
- GDPR y privacidad: consideraciones de datos en los agentes de RRHH
- Modelo de costes estimados por volumen de procesos

**Plan de implementación:**
Roadmap de 10 semanas y métricas de éxito: tiempo de contratación, tiempo de RRHH en screening, satisfacción de candidatos (NPS de proceso), NPS de onboarding de nuevos empleados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Automatizar el screening de candidatos, onboarding y people analytics para liberar al equipo de RRHH de tareas administrativas.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Agentes IA para automatizar análisis financiero y reporting',
                'description'      => 'Diseña agentes autónomos que automaticen la consolidación de datos financieros, análisis de variaciones, generación de reportes y alertas de desviaciones presupuestarias.',
                'prompt_content'   => <<<'EOT'
Eres un experto en finanzas corporativas y automatización de flujos de análisis financiero con agentes de IA. Tu objetivo es ayudarme a diseñar agentes que automaticen la recopilación, análisis y presentación de información financiera, para que el equipo de finanzas se concentre en el análisis de valor y la toma de decisiones.

**El problema del departamento financiero manual:**
Los equipos de finanzas dedican entre el 60% y el 80% de su tiempo al cierre mensual a tareas manuales: extraer datos de múltiples sistemas, consolidar en Excel, detectar errores, generar los reportes y preparar las presentaciones. El tiempo para analizar e interpretar los números es mínimo. Los agentes de IA pueden transformar este ratio.

**Paso 1 — Identificación de procesos automatizables:**

Recopilación de datos:
- Extracción de datos del ERP (SAP, Oracle, Sage) y consolidación
- Cruce de datos entre sistemas (ERP, CRM, sistema de nóminas)
- Validación automática de cuadres y conciliaciones

Análisis y reportes:
- Análisis de variaciones (real vs. presupuesto, real vs. forecast)
- Generación del P&L, balance y flujo de caja en formato estándar
- Narrativa financiera explicando las variaciones más relevantes
- Proyecciones de forecast actualizadas con los últimos datos

Alertas y control:
- Alertas de desviaciones sobre umbrales definidos
- Monitoreo de KPIs financieros en tiempo real
- Detección de transacciones anómalas para revisión

**Paso 2 — Diseño de agentes financieros:**

**Agente de Consolidación de Datos (Data Consolidator):**
- Función: extraer y consolidar datos financieros de todos los sistemas de forma automática
- Entradas: credenciales de acceso a ERP, CRM, sistema de nóminas, bancos
- Salidas: dataset consolidado y validado, log de discrepancias detectadas, tiempo de consolidación vs. manual
- Integraciones: API del ERP, Open Banking APIs, Google Sheets o Power BI

**Agente de Análisis de Variaciones (Variance Analyst):**
- Función: comparar real vs. presupuesto y generar la narrativa explicativa
- Entradas: datos financieros reales del período, presupuesto y forecast anterior
- Salidas: tabla de variaciones por partida, análisis de las 5 variaciones más relevantes con hipótesis de causa, semáforo de alertas (verde/amarillo/rojo), recomendaciones de acción
- Configuración: umbrales de materialidad personalizables por partida

**Agente de Reporte Ejecutivo (Report Generator):**
- Función: generar el paquete de reporte financiero mensual listo para presentar
- Entradas: datos financieros consolidados del período
- Salidas: reporte en formato estándar (P&L, Balance, Cash Flow), slides ejecutivas con gráficos, narrativa del mes en lenguaje no financiero para el comité de dirección
- Integraciones: Google Slides, PowerPoint, Power BI

**Agente de Forecast y Proyecciones (Forecast Updater):**
- Función: actualizar el forecast del año con los datos más recientes y los inputs del equipo
- Entradas: datos reales del período, drivers del negocio actualizados, inputs de los líderes de área
- Salidas: forecast actualizado por línea de P&L, análisis de escenarios (base, optimista, pesimista), análisis de sensibilidad de las variables clave

**Paso 3 — Flujo del cierre mensual con agentes:**
Diseña cómo los agentes transforman el proceso de cierre:

Día 1-2 del cierre (antes manual: 4-5 días):
1. Agente de Consolidación extrae y consolida todos los datos (automático, 2 horas vs. 2 días)
2. Sistema detecta discrepancias y alerta a contabilidad
3. Contabilidad resuelve las discrepancias y valida

Día 3 del cierre (antes manual: 2 días):
4. Agente de Variaciones genera el análisis de desviaciones
5. Agente de Reporte genera el primer borrador del reporte mensual
6. Equipo de finanzas revisa, ajusta la narrativa y valida

Día 4 del cierre:
7. Agente de Forecast actualiza las proyecciones
8. Directora de Finanzas prepara la presentación al comité en 2 horas

**Paso 4 — Implementación técnica:**
Proporciona:
- Herramientas recomendadas: Alteryx, Power Automate o Python para la orquestación
- Consideraciones de seguridad en el manejo de datos financieros con agentes de IA
- System prompt del Agente de Análisis de Variaciones
- Ejemplo de narrativa financiera generada automáticamente
- Modelo de gobierno: qué puede hacer el agente solo vs. qué requiere aprobación humana

**Métricas de éxito:**
- Tiempo de cierre mensual reducido
- Horas de trabajo manual en consolidación reducidas
- Errores detectados antes de la presentación al comité
- Tiempo del CFO en preparación de presentaciones reducido

Nota: todos los outputs de los agentes deben ser revisados por el equipo financiero antes de su comunicación externa o toma de decisiones significativas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 70,
                'use_case'         => 'Automatizar la consolidación de datos, análisis de variaciones y generación de reportes financieros para acelerar el cierre mensual.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Agentes IA para automatizar revisión de contratos y compliance',
                'description'      => 'Diseña agentes autónomos que automaticen la revisión inicial de contratos, extracción de cláusulas clave, verificación de cumplimiento normativo y generación de alertas legales.',
                'prompt_content'   => <<<'EOT'
Eres un experto en Legal Operations y automatización de flujos de trabajo legal con agentes de IA. Tu objetivo es ayudarme a diseñar agentes que automaticen las tareas repetitivas del departamento legal: revisión inicial de contratos, extracción de datos, seguimiento de obligaciones y alertas de compliance.

**El reto de la automatización legal:**
Los departamentos legales son los más reacios a la automatización porque los errores tienen consecuencias graves. Pero también son los que más tiempo dedican a tareas repetitivas: revisar el mismo tipo de contrato decenas de veces, extraer las mismas cláusulas para una base de datos, hacer seguimiento de fechas de vencimiento y obligaciones. Los agentes de IA pueden hacerse cargo del trabajo de extracción y revisión inicial, mientras el abogado se concentra en el análisis y la decisión.

**Paso 1 — Tareas legales automatizables (con supervisión humana):**

Revisión de contratos (automatización asistida):
- Revisión inicial de NDA para identificar cláusulas problemáticas
- Extracción de datos clave de contratos (partes, fechas, obligaciones, penalizaciones)
- Comparación de un contrato recibido con el estándar del departamento
- Resumen ejecutivo de un contrato largo en 1 página

Gestión de obligaciones:
- Extracción y calendario de todas las obligaciones contractuales
- Alertas de vencimientos y renovaciones
- Seguimiento del estado de cumplimiento de cada obligación

Compliance y regulación:
- Verificación de que los contratos nuevos cumplen la normativa vigente
- Alertas cuando una normativa nueva afecta contratos existentes
- Generación del checklist de compliance para nuevas iniciativas de negocio

**Paso 2 — Diseño de agentes legales:**

**Agente de Revisión de Contratos (Contract Reviewer):**
- Función: hacer la revisión inicial de un contrato antes que el abogado
- Entradas: contrato en PDF o Word, tipo de contrato, posición de la empresa (cliente/proveedor)
- Salidas: resumen de 1 página del contrato, mapa de cláusulas clave (partes, precio, duración, terminación, limitación de responsabilidad, confidencialidad, ley aplicable), lista de cláusulas que se desvían del estándar (con nivel de riesgo), preguntas sugeridas para la negociación
- Configuración: el equipo legal define qué cláusulas son "rojas" (nunca aceptar), "amarillas" (negociar) y "verdes" (aceptar)

**Agente de Extracción de Datos Contractuales (Contract Data Extractor):**
- Función: crear y mantener una base de datos de todos los contratos activos
- Entradas: contratos firmados en el archivo
- Salidas: base de datos estructurada con campos clave de cada contrato, alertas de vencimientos próximos (60-30-15 días), resumen de obligaciones pendientes por contrato
- Integraciones: SharePoint o Google Drive, Airtable o Notion para la base de datos

**Agente de Compliance (Compliance Checker):**
- Función: verificar que un contrato nuevo o una iniciativa cumplen la normativa aplicable
- Entradas: descripción de la iniciativa o contrato, normativas aplicables configuradas
- Salidas: checklist de cumplimiento (RGPD, PCI-DSS, normativas sectoriales), riesgos identificados, documentación requerida, contactos de referencia (DPO, asesor fiscal, etc.)
- Configuración: el equipo legal mantiene un catálogo de normativas aplicables y sus requisitos

**Agente de Seguimiento de Obligaciones (Obligation Tracker):**
- Función: monitorear y alertar sobre obligaciones contractuales próximas
- Entradas: base de datos de contratos y obligaciones extraída
- Salidas: digest semanal de obligaciones próximas, alertas urgentes de vencimientos, reporte mensual de estado de cumplimiento
- Integraciones: email, Slack, calendario del equipo legal

**Paso 3 — Flujo de revisión de contrato con agentes:**
Diseña el proceso de revisión de un contrato recibido:
1. Contrato llega por email al buzón de contratos
2. Agente de Extracción crea el registro en la base de datos (automático)
3. Agente de Revisión genera el análisis inicial con riesgos identificados (automático, 5 minutos)
4. Abogado recibe el análisis y se concentra en los puntos marcados como "rojo" y "amarillo"
5. Abogado negocia con criterio y conocimiento del análisis
6. Contrato firmado → Agente extrae obligaciones y las añade al tracker
7. Agente de Obligaciones envía alertas cuando se acercan fechas clave

**Paso 4 — Consideraciones éticas y de riesgo:**
Define claramente:
- Qué pueden hacer los agentes de forma autónoma (extracción, clasificación, alertas)
- Qué siempre requiere revisión de un abogado (análisis de riesgo, negociación, firma)
- Cómo gestionar los datos confidenciales de los contratos (cifrado, acceso, retención)
- Disclaimer obligatorio: el agente asiste, no reemplaza el criterio legal profesional

**Plan de implementación:**
Roadmap de 10 semanas, empezando por el Agente de Extracción (el de menor riesgo y mayor impacto inmediato) y evolucionando hacia el Agente de Revisión. Métricas de éxito: tiempo de revisión inicial de contratos, contratos sin alertas de vencimiento perdidas, horas de abogado en revisión rutinaria reducidas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Automatizar la revisión inicial de contratos, extracción de datos y seguimiento de obligaciones para liberar tiempo del equipo legal.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Agentes IA para automatizar el soporte al cliente y escalados',
                'description'      => 'Implementa agentes autónomos que gestionen tickets de primer nivel, clasifiquen y enruten escalados, y generen respuestas personalizadas en tiempo real.',
                'prompt_content'   => <<<'EOT'
Eres un experto en Customer Support Operations y automatización de flujos de atención al cliente con agentes de IA. Tu objetivo es ayudarme a diseñar un sistema de agentes que gestione tickets de primer nivel, enrute escalados inteligentemente y reduzca el tiempo de resolución sin sacrificar la calidad de la experiencia del cliente.

**El desafío del volumen de soporte:**
Los equipos de soporte reciben cientos o miles de tickets semanales. Entre el 40% y el 60% son preguntas repetitivas que podrían resolverse automáticamente. El equipo humano dedica tiempo valioso a clasificar, enrutar y responder tickets básicos, en lugar de concentrarse en los casos complejos que realmente necesitan su experiencia.

**Paso 1 — Clasificación de tickets por automatizabilidad:**

Completamente automatizable:
- Preguntas sobre estado de pedido / suscripción
- Reseteo de contraseña y acceso a cuenta
- Consultas sobre precios y planes
- Solicitudes de facturas y documentos
- Preguntas de FAQ estándar

Asistido por IA (agente propone, agente humano revisa y envía):
- Consultas técnicas con múltiples posibles causas
- Problemas de integración con sistemas del cliente
- Quejas de facturación
- Solicitudes de feature

Solo humano:
- Reclamaciones formales o amenazas de escalado legal
- Clientes enterprise con SLA especial
- Crisis de servicio o incidencias de alta severidad
- Solicitudes de cancelación en clientes de alto valor

**Paso 2 — Diseño de agentes de soporte:**

**Agente de Clasificación y Enrutado (Triage Agent):**
- Función: clasificar cada ticket entrante y enrutarlo al canal correcto
- Entradas: ticket del cliente (asunto, cuerpo, historial del cliente)
- Salidas: categoría del ticket, prioridad (urgente/normal/baja), enrutamiento (auto-respuesta / agente humano / especialista), resumen del contexto del cliente para el agente humano
- Tiempo objetivo: clasificación en menos de 30 segundos de recibido el ticket

**Agente de Respuesta Automática (Auto-Responder):**
- Función: resolver tickets de primer nivel sin intervención humana
- Entradas: ticket clasificado como automatizable, base de conocimiento de soporte, historial del cliente
- Salidas: respuesta personalizada al cliente, ticket cerrado con nota interna, métricas de resolución
- Configuración: la base de conocimiento de soporte es el único contexto permitido — el agente no improvisa

**Agente de Asistencia al Agente (Agent Assist):**
- Función: proponer la respuesta para que el agente humano revise y envíe
- Entradas: ticket asignado al agente, historial del cliente, base de conocimiento
- Salidas: borrador de respuesta con referencias a la documentación usada, acciones sugeridas (escalar, ofrecer descuento, contactar técnico), alerta si el cliente tiene historial de churn risk
- Objetivo: el agente humano revisa y envía en menos de 2 minutos, no escribe desde cero

**Agente de Análisis de Calidad (QA Analyst):**
- Función: revisar una muestra de respuestas y medir la calidad del servicio
- Entradas: tickets cerrados de la semana (muestra aleatoria)
- Salidas: scorecard de calidad por agente (tono, precisión, resolución), issues recurrentes de calidad, recomendaciones de coaching, alertas de respuestas con riesgo legal o de reputación

**Paso 3 — Flujo de trabajo con agentes:**
Diseña el proceso para un ticket entrante:
1. Cliente envía ticket
2. Agente de Clasificación categoriza y enruta en 30 segundos
3a. Si es automatizable: Agente de Respuesta resuelve y cierra (cliente recibe respuesta en 2 minutos)
3b. Si requiere humano: Agente de Asistencia prepara el borrador y el contexto del cliente
4. Agente humano revisa el borrador, personaliza si es necesario y envía
5. Agente de QA revisa una muestra semanal y genera el reporte

**Paso 4 — Implementación técnica:**
Proporciona:
- Integración con Zendesk, Intercom o Freshdesk (cuál recomiendas y por qué)
- System prompt del Agente de Clasificación con ejemplos de categorías
- System prompt del Agente de Respuesta con instrucciones de seguridad (qué nunca puede decir el agente)
- Métricas de calidad de los agentes: cómo medir que el agente auto-responde correctamente
- Plan de rollout gradual: empezar con el 10% del volumen y escalar

**Métricas de éxito:**
- First Response Time (FRT) reducido
- Tasa de resolución en primer contacto (FCR) mejorada
- CSAT de tickets resueltos por agente vs. por humano
- Tiempo medio de manejo por ticket reducido
- Porcentaje de tickets resueltos sin intervención humana (objetivo del 40-50%)

**Plan de implementación:**
Roadmap de 8 semanas, empezando por el Agente de Clasificación, luego el de Asistencia y finalmente el de Respuesta Automática. Cada fase incluye criterios de éxito antes de avanzar a la siguiente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Automatizar el triage, respuesta de primer nivel y asistencia a agentes de soporte para reducir tiempos de respuesta y aumentar la satisfacción del cliente.',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Agentes IA para automatizar el negocio freelance',
                'description'      => 'Diseña agentes personales que automaticen la captación de clientes, gestión de proyectos, facturación y seguimiento de pagos en tu negocio como freelancer.',
                'prompt_content'   => <<<'EOT'
Eres un experto en productividad y automatización para profesionales independientes. Tu objetivo es ayudarme a diseñar un sistema de agentes personales de IA que automaticen las tareas administrativas de mi negocio freelance, para que pueda dedicar más tiempo al trabajo que me genera ingresos y menos a la gestión del negocio.

**El problema del freelancer como gestor de su propio negocio:**
Como freelancer, además de hacer el trabajo de tu especialidad, eres el director comercial, el administrativo, el de RRHH y el de finanzas. Esas funciones de gestión consumen entre el 20% y el 30% de tu tiempo cada semana: propuestas, seguimiento de clientes, facturación, búsqueda de nuevos proyectos. Los agentes de IA pueden hacerse cargo de gran parte de ese trabajo.

**Diagnóstico de tu situación:**
Para diseñar tu sistema personalizado, responde:
- ¿Cuántos clientes activos tienes simultáneamente?
- ¿Cuáles son tus mayores pérdidas de tiempo administrativo?
- ¿Qué herramientas usas actualmente (gestión de proyectos, facturación, email)?
- ¿Cuánto tiempo dedicas por semana a captar nuevos clientes?
- ¿Cuánto tiempo tardas en generar y enviar una propuesta?

**Paso 1 — Mapa de tareas administrativas del freelancer:**

Captación y ventas:
- Monitoreo de plataformas de proyectos (Upwork, Malt, LinkedIn)
- Redacción de propuestas personalizadas
- Seguimiento de propuestas enviadas sin respuesta

Gestión de proyectos:
- Creación de briefings estructurados con el cliente
- Envío de actualizaciones de estado del proyecto
- Seguimiento de hitos y entregables

Administración y finanzas:
- Generación de facturas
- Seguimiento de pagos pendientes
- Compilación de gastos para la declaración trimestral

Comunicación con clientes:
- Respuesta a emails fuera del horario de trabajo
- Confirmación de reuniones y agendas
- Envío de materiales y entregables

**Paso 2 — Diseño de agentes para el freelancer:**

**Agente de Propuestas (Proposal Generator):**
- Función: generar el borrador de propuesta comercial en minutos
- Entradas: descripción del proyecto del cliente, tipo de proyecto, presupuesto objetivo
- Salidas: propuesta estructurada (resumen ejecutivo, alcance, metodología, timeline, precio, condiciones), personalizada con el nombre del cliente y sus puntos de dolor específicos
- Ahorro estimado: de 3-4 horas a 30 minutos por propuesta

**Agente de Seguimiento de Clientes (Client Follow-Up):**
- Función: gestionar el seguimiento proactivo de propuestas y proyectos
- Entradas: CRM personal con estado de propuestas y proyectos
- Salidas: email de seguimiento personalizado cuando una propuesta lleva X días sin respuesta, recordatorio de actualización de proyecto semanal, alerta de hitos próximos
- Integraciones: Gmail, Notion o Airtable como CRM personal

**Agente de Administración (Admin Assistant):**
- Función: gestionar la administración del negocio de forma autónoma
- Entradas: registro de proyectos activos, tarifas, plazos de pago
- Salidas: factura generada automáticamente al finalizar un hito, recordatorio de pago cuando supera X días, compilación mensual de ingresos y gastos
- Integraciones: facturación (Holded, Facturascuadradas), banco (Open Banking API)

**Agente de Captación (Lead Scout):**
- Función: monitorear oportunidades y alertar cuando aparezcan proyectos relevantes
- Entradas: criterios de proyectos ideales (industria, tipo de trabajo, presupuesto mínimo, ubicación)
- Salidas: digest diario de oportunidades filtradas con puntuación de ajuste, borrador de mensaje de presentación personalizado para las mejores oportunidades
- Integraciones: LinkedIn, Malt, Upwork (vía scraping o APIs disponibles)

**Paso 3 — Flujo de trabajo semanal con agentes:**
Diseña la rutina semanal del freelancer aumentado por IA:

Lunes (30 minutos en lugar de 2 horas):
1. Agente de Captación envía el digest de oportunidades de la semana
2. Freelancer selecciona las 2-3 más interesantes
3. Agente de Propuestas genera los borradores para las seleccionadas

Miércoles (15 minutos):
4. Agente de Seguimiento envía actualizaciones de proyecto a todos los clientes activos
5. Freelancer revisa y personaliza si es necesario

Viernes (20 minutos):
6. Agente de Administración genera las facturas de hitos completados
7. Agente de Seguimiento envía recordatorios de pago pendiente (si aplica)
8. Agente compila el resumen financiero de la semana

**Paso 4 — Implementación para el freelancer:**
Proporciona:
- Stack de herramientas accesible y de bajo coste: Zapier/Make + Claude API + Notion/Airtable
- Coste mensual estimado del sistema completo (objetivo: menos de 50€/mes)
- Instrucciones paso a paso para configurar el Agente de Propuestas (el de mayor ROI)
- Plantilla de system prompt para el Agente de Propuestas
- Cómo empezar con el mínimo esfuerzo: el primer agente que deberías implementar y por qué

**Plan de implementación de 4 semanas:**
- Semana 1: Agente de Propuestas (el de mayor impacto inmediato)
- Semana 2: Agente de Seguimiento de Clientes
- Semana 3: Agente de Administración básico (facturas)
- Semana 4: Integración y automatización del flujo semanal completo

Objetivo final: recuperar 5-8 horas semanales de trabajo administrativo para dedicarlas a proyectos de clientes o a la captación estratégica.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Automatizar la administración del negocio freelance con agentes personales que gestionen propuestas, seguimiento de clientes, facturación y captación.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
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
