<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills425Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Dashboard de métricas de marketing con IA y visualización automática',
                'description'       => 'Construye un dashboard centralizado de métricas de marketing que agregue datos de múltiples canales, detecte anomalías con IA y genere insights automatizados para la toma de decisiones.',
                'prompt_content'    => <<<'EOT'
Eres experto en marketing analytics y visualización de datos. Tu misión es diseñar un dashboard de métricas de marketing que consolide los datos de todos los canales en una sola vista, use IA para detectar tendencias y anomalías, y genere recomendaciones automáticas para el equipo.

Antes de comenzar, necesito que me indiques:
- Canales de marketing activos: paid media, SEO, email, social media, contenido, eventos, afiliados
- Fuentes de datos disponibles: Google Analytics, plataformas de ads, CRM, herramienta de email marketing
- Objetivo principal del dashboard: reporte ejecutivo, optimización operativa del equipo, o presentación a inversores
- Frecuencia de uso: diario, semanal, mensual
- Herramientas de visualización disponibles: Looker Studio, Power BI, Tableau, Metabase, o se construye desde cero

Con esa información, genera:

1. ARQUITECTURA DEL DASHBOARD
   - Jerarquía de vistas: nivel ejecutivo (North Star Metrics), nivel gerencial (por canal) y nivel operativo (por campaña)
   - Métricas a incluir en cada nivel y por qué (justifica la relevancia de cada KPI)
   - Frecuencia de actualización de cada sección: tiempo real, diaria, semanal
   - Estructura de navegación: cómo el usuario va de lo general a lo específico en máximo 3 clics

2. MÉTRICAS CLAVE POR ÁREA
   Awareness y alcance: impresiones, alcance único, share of voice, branded search volume
   Adquisición: CPL, CPA, CAC por canal, tasa de conversión por etapa del funnel
   Retención: LTV, churn, tasa de reactivación, NPS, frecuencia de compra
   Rentabilidad: ROAS por canal, marketing efficiency ratio, payback period del CAC
   Contenido y SEO: tráfico orgánico, posicionamiento de keywords, engagement rate, tiempo en página

3. DETECCIÓN DE ANOMALÍAS CON IA
   - Qué métricas monitorizar con alertas automáticas y umbrales recomendados
   - Algoritmo de detección de anomalías: desviación estándar, series temporales, benchmarks históricos
   - Sistema de alertas: cuándo notificar al equipo (Slack, email) y con qué información contextual
   - Diferencia entre anomalía negativa (problema) y anomalía positiva (oportunidad)
   - Cómo evitar el "alert fatigue": priorización y agrupación de alertas

4. GENERACIÓN AUTOMÁTICA DE INSIGHTS
   - Plantilla de comentario semanal generado por IA: qué cambió, por qué podría ser y qué hacer
   - Correlaciones automáticas: qué variables están correlacionadas con las conversiones esta semana
   - Comparativas automáticas: esta semana vs. semana anterior, este mes vs. mismo mes año anterior, vs. objetivo
   - Detección de tendencias emergentes antes de que sean visibles en los reportes habituales

5. INTEGRACIÓN Y FUENTES DE DATOS
   - Mapa de integración: qué API conectar, frecuencia de extracción, transformaciones necesarias
   - Manejo de datos faltantes o inconsistentes entre fuentes
   - Modelo de datos unificado: cómo estandarizar métricas que cada plataforma calcula diferente (ej. conversiones en Google Ads vs. Facebook Ads vs. CRM)
   - Capa de atribución: modelo de atribución recomendado y sus limitaciones

6. REPORTE EJECUTIVO AUTOMATIZADO
   - Estructura del reporte semanal de una página para el CEO o CMO
   - Cómo generar el reporte narrativo con IA a partir de los datos del dashboard
   - Visualizaciones de alto impacto para audiencia ejecutiva: qué gráficos elegir y cuáles evitar
   - Presentación de OKRs de marketing: progreso vs. objetivo con semáforo visual

7. MANTENIMIENTO Y EVOLUCIÓN
   - Proceso de incorporación de nuevas métricas sin romper el dashboard
   - Auditoría trimestral de relevancia: qué métricas dejar de medir, cuáles añadir
   - Formación del equipo en el uso del dashboard: cómo leer los datos, cómo no interpretarlos mal

Entrega: especificación completa del dashboard con maquetas de cada vista en texto estructurado, lista para dar al equipo de datos o al analista.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Construir un dashboard de métricas de marketing con detección de anomalías y generación automática de insights.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Sistema de métricas de ingeniería con IA para equipos de desarrollo',
                'description'       => 'Implementa un sistema de métricas DORA y de ingeniería que mida el rendimiento del equipo de desarrollo, detecte cuellos de botella con IA y proporcione insights accionables para mejorar la velocidad y calidad del software.',
                'prompt_content'    => <<<'EOT'
Eres ingeniero de plataforma y experto en métricas de ingeniería de software. Tu objetivo es diseñar e implementar un sistema de métricas que mida de forma objetiva el rendimiento del equipo de desarrollo, identifique oportunidades de mejora y proporcione datos que respalden decisiones técnicas y de proceso.

Información necesaria antes de comenzar:
- Stack tecnológico: lenguajes, frameworks, plataforma cloud
- Herramientas de CI/CD: Jenkins, GitHub Actions, GitLab CI, CircleCI
- Sistema de gestión del trabajo: Jira, Linear, GitHub Issues, Azure DevOps
- Repositorios: monorepo vs. multirepo, número aproximado de repos activos
- Tamaño del equipo y estructura: squads, número de ingenieros, seniority mix
- Dolor principal actual: velocidad de entrega, calidad (bugs), fiabilidad de producción, o deuda técnica

Con esa información, genera:

1. MÉTRICAS DORA Y DE INGENIERÍA
   Cuatro métricas DORA con definición exacta y cómo medirlas en el stack dado:
   - Deployment Frequency: número de deploys a producción por día/semana por equipo
   - Lead Time for Changes: tiempo desde primer commit hasta deploy en producción
   - Change Failure Rate: porcentaje de deploys que causan incidente o requieren rollback
   - Time to Restore Service: tiempo medio de resolución de incidentes de producción
   Métricas adicionales de ingeniería: cycle time por ticket, PR review time, test coverage trend, technical debt ratio

2. ARQUITECTURA DE RECOLECCIÓN DE DATOS
   - Fuentes de datos: GitHub/GitLab API, Jira API, CI/CD webhooks, PagerDuty/OpsGenie
   - Pipeline de datos: eventos en tiempo real vs. batch nocturno, almacenamiento recomendado
   - Modelo de datos: esquema de tablas para almacenar eventos de git, deploys, incidentes y tickets
   - Código de ejemplo para extraer métricas de PR desde la API de GitHub o GitLab
   - Normalización: cómo combinar datos de múltiples repos y equipos en métricas comparables

3. DASHBOARD DE INGENIERÍA
   - Vista de equipo: tendencia de métricas DORA en los últimos 90 días, comparativa con benchmark de industria
   - Vista de PR: tiempo medio de review por autor y por reviewer, PRs con review time excesivo
   - Vista de pipeline: tasa de éxito y duración de builds por job, flakiness de tests
   - Vista de incidentes: MTTD, MTTR, frecuencia de incidentes, servicios más afectados
   - Vista de deuda técnica: evolución de code smells, cobertura de tests, violaciones de arquitectura

4. DETECCIÓN DE CUELLOS DE BOTELLA CON IA
   - Análisis automático de qué etapa del ciclo de entrega consume más tiempo
   - Identificación de PRs en espera de revisión más de X horas con alerta automática
   - Detección de patrones: ¿la tasa de fallos aumenta en deploys los viernes? ¿Hay un servicio con MTTR sistemáticamente alto?
   - Correlación entre prácticas del equipo y resultados: qué comportamientos se correlacionan con mejor rendimiento

5. BENCHMARKS E INTERPRETACIÓN
   - Benchmarks de industria para métricas DORA: qué es elite, high, medium, low performer
   - Cómo interpretar las métricas en contexto: qué factores explican variaciones (tamaño del equipo, tipo de producto, etapa del ciclo)
   - Trampas comunes: cómo evitar que las métricas se optimicen de forma dañina (gamification)
   - Cómo presentar las métricas al equipo sin crear un ambiente de vigilancia

6. MEJORA CONTINUA BASADA EN DATOS
   - Retrospectiva guiada por métricas: cómo usar los datos para identificar los 3 experimentos de mejora más prometedores
   - OKRs de ingeniería derivados de las métricas: cómo conectar métricas técnicas con objetivos de negocio
   - Experimentos de proceso: cómo medir el impacto de cambiar una práctica de ingeniería

7. IMPLEMENTACIÓN PROGRESIVA
   - Fase 1 (semana 1-2): instrumentación básica con datos ya disponibles (GitHub + CI/CD)
   - Fase 2 (mes 1): integración con Jira y primeros dashboards
   - Fase 3 (mes 2-3): alertas automáticas y análisis de tendencias con IA
   - Criterios de éxito del sistema de métricas: el equipo lo usa, no solo lo mira

Entrega: guía de implementación técnica con código de ejemplo, esquema de datos y configuración del dashboard, lista para el equipo de plataforma.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Implementar métricas DORA y de ingeniería para medir y mejorar el rendimiento del equipo de desarrollo.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Métricas de diseño y ROI de UX con dashboards visuales e IA',
                'description'       => 'Define y visualiza las métricas que demuestran el impacto del diseño UX en el negocio, creando dashboards que conecten las decisiones de diseño con resultados medibles.',
                'prompt_content'    => <<<'EOT'
Eres diseñador UX líder con experiencia en design operations y métricas de diseño. Tu misión es crear un sistema de métricas que demuestre el valor del diseño para el negocio, usando datos cuantitativos y cualitativos que conecten las decisiones de diseño con resultados de producto y negocio.

Antes de comenzar, necesito:
- Tipo de producto y etapa: startup temprana, producto en crecimiento, producto maduro
- Equipo de diseño: tamaño, roles (UX research, UI, product design, motion)
- Herramientas de analytics disponibles: Hotjar, FullStory, Amplitude, Mixpanel, UserTesting
- Principales stakeholders que necesitan ver el valor del diseño: CEO, CPO, VP Engineering
- Proyectos de diseño recientes para usar como casos de estudio de impacto

Con esa información, genera:

1. FRAMEWORK DE MÉTRICAS DE DISEÑO
   Métricas de calidad del diseño (proceso):
   - Design velocity: tiempo desde brief hasta entrega de diseño aprobado
   - Tasa de rework: porcentaje de designs que vuelven al diseñador después de QA o desarrollo
   - Cobertura del design system: porcentaje de componentes de UI que usan el sistema vs. diseños ad-hoc
   - Research coverage: porcentaje de features principales respaldadas por investigación con usuarios

   Métricas de impacto en el usuario:
   - Usability score (SUS o similar): antes y después de rediseños
   - Task completion rate y tiempo en tarea para flujos críticos
   - Error rate en formularios y flujos de conversión
   - CSAT de la experiencia por pantalla o flujo

   Métricas de impacto en negocio:
   - Aumento de conversión atribuible a mejoras de diseño (A/B tests)
   - Reducción de tickets de soporte por mejoras de UX
   - Impacto en NPS de cambios de diseño
   - Ahorro de tiempo de desarrollo por uso del design system

2. CÓMO ATRIBUIR IMPACTO AL DISEÑO
   - Metodología de experimentos controlados: cómo aislar el impacto de un cambio de diseño
   - Casos donde el diseño claramente causó el resultado vs. casos donde contribuyó
   - Cómo documentar el "before and after" de cada proyecto importante
   - Storytelling de datos: cómo presentar el impacto del diseño de forma convincente a ejecutivos

3. DASHBOARD DE DISEÑO
   - Vista para el equipo de diseño: velocidad, calidad del proceso, backlog de research
   - Vista para el CPO: cobertura del design system, health score de la experiencia de usuario
   - Vista ejecutiva: ROI de iniciativas de diseño, comparativa de conversión antes vs. después
   - Cómo construir el dashboard con Looker Studio u otra herramienta asequible para el equipo de diseño

4. INTEGRACIÓN DE DATOS CUALITATIVOS Y CUANTITATIVOS
   - Cómo combinar datos de usability tests, encuestas y analytics en una sola vista
   - Sistema de tagging de insights de research para poder rastrear su impacto a lo largo del tiempo
   - Repositorio de insights: Dovetail, Notion o sistema propio para centralizar aprendizajes de usuarios

5. REPORTE DE IMPACTO DEL DISEÑO
   - Estructura del reporte trimestral de diseño: qué se hizo, qué impacto tuvo, qué se aprendió
   - Cómo generar el narrative del reporte con IA a partir de datos y notas del equipo
   - One-pager de ROI del diseño para presentar en business reviews

6. MADUREZ DE DESIGN OPS
   - Modelo de madurez: de "diseño sin métricas" a "diseño data-driven"
   - Roadmap de implementación de métricas por etapa de madurez
   - Cómo convencer al equipo de diseño de instrumentar su trabajo cuando no están acostumbrados

Entrega: framework completo de métricas de diseño con dashboard, plantillas de reporte y guía de implementación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Demostrar el valor del diseño UX con métricas y dashboards que conectan decisiones de diseño con resultados de negocio.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Dashboard de pipeline de ventas con IA y análisis predictivo',
                'description'       => 'Construye un dashboard de ventas que analice el pipeline en tiempo real, prediga la probabilidad de cierre con IA y genere alertas para que los managers actúen proactivamente.',
                'prompt_content'    => <<<'EOT'
Eres director de ventas y experto en revenue operations. Tu objetivo es diseñar un dashboard de pipeline de ventas que proporcione visibilidad completa sobre el estado actual del negocio, prediga el resultado del mes o trimestre con modelos de IA y dé al equipo de ventas y a los managers la información exacta que necesitan para actuar.

Información necesaria para personalizar el dashboard:
- CRM actual: Salesforce, HubSpot, Pipedrive, u otro
- Modelo de ventas: B2B (SMB, mid-market, enterprise), B2C, o mixto
- Ciclo de ventas promedio y número de etapas del pipeline
- Tamaño del equipo de ventas: número de AEs, SDRs, managers
- Métricas que actualmente le faltan al equipo o que son difíciles de obtener

Con esa información, genera:

1. ESTRUCTURA DEL DASHBOARD POR AUDIENCIA
   Vista del AE (Account Executive):
   - Mi pipeline: deals por etapa, valor total, próximas acciones requeridas
   - Forecast personal: qué voy a cerrar este mes según el modelo de IA
   - Alertas: deals en riesgo que no se han tocado en más de 7 días, deals sin siguiente paso
   - Actividad: llamadas, emails y reuniones de esta semana vs. semana anterior

   Vista del Sales Manager:
   - Pipeline del equipo por rep: quién está en track, quién necesita ayuda
   - Forecast del equipo: proyección de cierre del mes con intervalo de confianza
   - Análisis de conversión por etapa: dónde se pierden los deals
   - Tabla de liderazgo: ranking de AEs por deals cerrados, pipeline generado, ratio de actividad

   Vista del VP de Ventas:
   - Revenue forecast del trimestre: bottom-up vs. top-down
   - Health del pipeline: cobertura (pipeline / cuota), velocidad, tamaño medio de deal
   - Análisis por segmento, industria, región o canal de origen

2. MODELO DE PROBABILIDAD DE CIERRE CON IA
   - Variables que predicen el cierre: días en la etapa, número de stakeholders contactados, actividad reciente, tamaño del deal vs. deal size promedio histórico
   - Construcción del modelo: regresión logística o gradient boosting sobre datos históricos del CRM
   - Score de probabilidad: qué significa un score de 70% en términos prácticos para el manager
   - Actualización del modelo: cuándo reentrenar, cómo validar que sigue siendo preciso
   - Diferencia entre el score de IA y la probabilidad que asigna el AE manualmente

3. ANÁLISIS DE PIPELINE HEALTH
   - Cobertura de pipeline: ratio óptimo entre pipeline total y cuota (típicamente 3-4x)
   - Velocidad del pipeline: tiempo medio por etapa vs. histórico y vs. deals ganados
   - Análisis de deals en riesgo: qué señales identifican un deal que va a perderse
   - Comparativa de win rate por: tipo de competidor, tamaño de empresa, industria, canal de origen
   - Deal aging: deals que llevan demasiado tiempo en el pipeline y están perdiendo probabilidad

4. FORECAST DE VENTAS
   - Método de forecast bottom-up: suma ponderada por probabilidad de IA
   - Método top-down: ajuste del manager sobre el bottom-up
   - Commit vs. best case vs. pipeline: tres escenarios de cierre del período
   - Exactitud histórica del forecast: cómo de preciso ha sido el modelo en los últimos 6 meses
   - Alerta temprana de miss: cuándo activar acciones correctivas si el forecast se aleja del objetivo

5. ANÁLISIS DE PÉRDIDAS Y APRENDIZAJE
   - Dashboard de lost deals: por qué se pierden, en qué etapa, contra quién
   - Win/loss rate por AE, por producto, por segmento: dónde son más fuertes
   - Análisis de ciclo de ventas ganados vs. perdidos: qué diferencia un deal ganado de uno perdido
   - Feedback loop: cómo usar los datos de pérdidas para mejorar el proceso y el pitch

6. AUTOMATIZACIÓN Y ALERTAS
   - Alerta de deal sin actividad: notificación al AE y al manager si un deal no se toca en X días
   - Alerta de deal en riesgo: bajada súbita de probabilidad, stagnation en una etapa
   - Resumen semanal automático para cada AE: su pipeline, sus próximas acciones, su forecast
   - Integración con Slack o Teams para notificaciones en tiempo real

Entrega: especificación completa del dashboard con mockups en texto, configuración del modelo de IA y plan de implementación en el CRM elegido.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Construir un dashboard de pipeline de ventas con predicción de cierre por IA y alertas proactivas.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'North Star Metric y sistema de métricas de producto con IA',
                'description'       => 'Define la North Star Metric de tu producto, construye el árbol de métricas completo y crea un sistema de seguimiento con IA que conecte las acciones del equipo con los resultados de negocio.',
                'prompt_content'    => <<<'EOT'
Eres product manager con experiencia en diseño de sistemas de métricas de producto. Tu misión es ayudar al equipo a definir la North Star Metric correcta, construir el árbol de métricas que la descompone y crear el sistema de seguimiento que permita tomar decisiones basadas en datos.

Antes de comenzar, necesito:
- Descripción del producto: qué hace, para quién, modelo de negocio
- Métricas que actualmente usa el equipo (aunque sean imperfectas)
- Etapa del producto: pre-PMF, crecimiento, madurez o defensa de posición
- Herramientas de analytics actuales y futuras
- Principales decisiones que necesitan respaldo de datos en los próximos 6 meses

Con esa información, genera:

1. DEFINICIÓN DE LA NORTH STAR METRIC
   - Qué es una North Star Metric y por qué el producto necesita una sola
   - Proceso de elección: 3 candidatas con sus pros y contras para este producto específico
   - Criterios de una buena NSM: mide valor al usuario, predice revenue a largo plazo, el equipo puede influir en ella
   - Ejemplos de NSM por tipo de producto: marketplace (GMV, transacciones), SaaS (weekly active teams), consumer (DAU, minutos consumidos)
   - Cuándo y cómo cambiar la NSM a medida que el producto evoluciona

2. ÁRBOL DE MÉTRICAS
   - Descomposición de la NSM en sus factores controlables (input metrics)
   - Segundo nivel: sub-métricas que explican cada input metric
   - Identificación de las 3-5 palancas de mayor impacto en la NSM
   - Métricas de guardia: qué no debe empeorar mientras se optimiza la NSM
   - Cómo visualizar el árbol de métricas de forma que el equipo entero lo entienda

3. SISTEMA DE INSTRUMENTACIÓN
   - Plan de eventos a trackear: qué acciones del usuario necesitan evento, naming convention, propiedades de cada evento
   - Taxonomía de eventos: cómo estructurar el naming para que escale con el producto
   - Priorización de instrumentación: qué eventos son críticos vs. nice-to-have
   - Validación de datos: cómo detectar si los eventos se están disparando correctamente

4. DASHBOARD DE PRODUCTO
   - Vista semanal del equipo de producto: NSM, inputs principales, tendencia, comparativa
   - Vista de experimentos: A/B tests activos, impacto estimado en la NSM, estado
   - Vista de cohortes: retención por cohorte de registro, tendencia de retención
   - Vista de funnel: conversión en cada etapa del ciclo de vida del usuario
   - Cómo organizar el dashboard para que se use diariamente y no se convierta en ruido

5. RITUALES DE MÉTRICAS
   - Reunión semanal de métricas: agenda, quién asiste, qué se decide
   - Monthly business review: cómo presentar el estado del producto al equipo de dirección
   - Revisión trimestral de OKRs: cómo conectar OKRs de producto con el árbol de métricas
   - Cultura data-driven: cómo pasar de "qué dice la intuición" a "qué dicen los datos"

6. USO DE IA EN EL SISTEMA DE MÉTRICAS
   - Detección automática de anomalías en la NSM y sus inputs
   - Generación de hipótesis: cuando la NSM cae, el modelo de IA sugiere posibles causas
   - Síntesis semanal: narrativa automática de qué pasó esta semana en el producto y por qué
   - Predicción de NSM: proyección a 4 semanas con intervalos de confianza

7. MADUREZ DE ANALYTICS DE PRODUCTO
   - Etapas de madurez: descriptivo (qué pasó), diagnóstico (por qué), predictivo (qué pasará), prescriptivo (qué hacer)
   - Dónde está el equipo ahora y cómo avanzar al siguiente nivel
   - Inversión necesaria en datos para llegar a cada nivel: herramientas, personas, procesos

Entrega: documento de North Star Metric y árbol de métricas completo, con plan de implementación del sistema de tracking.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Definir la North Star Metric y construir el sistema de métricas de producto que guíe las decisiones del equipo.',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Dashboard de People Analytics y métricas de RRHH con IA',
                'description'       => 'Construye un sistema de people analytics que centralice las métricas clave de recursos humanos, identifique riesgos de fuga de talento con IA y apoye la toma de decisiones estratégicas de personas.',
                'prompt_content'    => <<<'EOT'
Eres especialista en People Analytics y HR Technology. Tu objetivo es diseñar un sistema de métricas de RRHH que transforme los datos de personas en insights accionables, con modelos de IA que identifiquen riesgos y oportunidades antes de que se conviertan en problemas.

Información necesaria para personalizar el sistema:
- Tamaño de la organización: número de empleados, distribución geográfica, estructura
- HRIS actual: Workday, BambooHR, Personio, SuccessFactors, Factorial u otro
- Herramientas de encuestas de empleados: Glint, Culture Amp, Officevibe, encuestas ad-hoc
- Principales retos de RRHH actuales: rotación alta, dificultad de contratación, falta de diversidad, bajo engagement
- Audiencia del dashboard: CHRO, HR Business Partners, managers de área, o CEO

Con esa información, genera:

1. MÉTRICAS CLAVE DE PEOPLE ANALYTICS
   Adquisición de talento:
   - Time-to-hire, Time-to-fill, coste por contratación, fuente de candidatos (source of hire)
   - Tasa de oferta aceptada, calidad de la contratación a 90 días y 1 año
   - Diversidad del pipeline de candidatos por etapa del proceso

   Retención y rotación:
   - Tasa de rotación voluntaria e involuntaria por departamento, nivel y antigüedad
   - Rotación de top performers (separar rotación de bajo vs. alto rendimiento)
   - Índice de estabilidad del equipo: porcentaje de empleados con más de 1 año
   - Coste de la rotación: cómo calcularlo y presentarlo en términos económicos

   Engagement y experiencia del empleado:
   - eNPS (Employee Net Promoter Score) y tendencia
   - Índice de engagement de la encuesta de pulso
   - Participación en encuestas y tendencia (alta participación indica confianza)
   - Métricas de bienestar: absentismo, licencias por estrés, uso del programa de bienestar

   Rendimiento y desarrollo:
   - Tasa de compleción de evaluaciones de desempeño en plazo
   - Distribución de calificaciones: detección de sesgos del manager (tendencia central, efecto halo)
   - Tasa de internos promovidos vs. contrataciones externas para roles senior
   - Horas de formación por empleado y ROI de programas de desarrollo

2. MODELO PREDICTIVO DE FUGA DE TALENTO
   - Variables predictoras de rotación voluntaria: antigüedad, tiempo en el mismo rol, último aumento, puntuación de engagement, número de cambios de manager, feedback reciente
   - Modelo de riesgo de fuga: cómo construirlo con datos históricos del HRIS
   - Score de riesgo por empleado: qué significa un score alto y cómo actuar
   - Protocolo de retención: qué debe hacer el HRBP cuando recibe una alerta de riesgo alto
   - Consideraciones éticas: transparencia con managers, privacidad del empleado, sesgos del modelo

3. DASHBOARD DE PEOPLE ANALYTICS
   - Vista del CHRO: métricas estratégicas, tendencias de rotación, estado de los OKRs de RRHH
   - Vista del HRBP por área de negocio: datos de su población, comparativa con el resto de la empresa
   - Vista del manager: datos de su equipo sin datos individuales sensibles, señales de engagement
   - Frecuencia de actualización: qué métricas son en tiempo real, cuáles semanales, cuáles mensuales

4. ANÁLISIS DE EQUIDAD Y DIVERSIDAD
   - Métricas de DEI: distribución de género y diversidad por nivel, brecha salarial por género y etnia
   - Análisis de equidad en el proceso de evaluación: detección de sesgos estadísticos
   - Embudo de diversidad en contratación: en qué etapa se pierde la diversidad
   - Progresión de carrera equitativa: tasas de promoción por grupo demográfico

5. REPORTE EJECUTIVO DE PERSONAS
   - Estructura del informe trimestral de RRHH para el Comité de Dirección
   - Cómo conectar las métricas de personas con los resultados financieros del negocio
   - Narrativa de datos: cómo contar la historia de las personas de forma que resuene en el CEO y el CFO
   - Planes de acción: cómo presentar no solo datos sino recomendaciones con impacto estimado

6. PRIVACIDAD Y ÉTICA EN PEOPLE ANALYTICS
   - Qué datos se pueden usar y cuáles no, según GDPR y legislación laboral
   - Anonimización de datos en dashboards para proteger la privacidad individual
   - Gobernanza del modelo predictivo: quién tiene acceso, cómo se audita, cómo se apela

Entrega: framework completo de people analytics con especificación del dashboard, modelo de riesgo de rotación y protocolo de uso ético.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Construir un sistema de people analytics con predicción de rotación y métricas estratégicas de RRHH.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Dashboard financiero ejecutivo con IA y forecast automatizado',
                'description'       => 'Diseña un dashboard financiero que centralice P&L, cash flow y balance, con modelos de IA que generen forecasts automáticos, detecten desviaciones y recomienden acciones correctivas.',
                'prompt_content'    => <<<'EOT'
Eres director financiero (CFO) o controller con experiencia en FP&A (Financial Planning & Analysis). Tu misión es diseñar un dashboard financiero ejecutivo que proporcione una visión completa del estado económico de la empresa, con capacidad de forecast automatizado y detección de desviaciones asistida por IA.

Información necesaria para personalizar el dashboard:
- Tipo de empresa: startup, scaleup, empresa establecida; sector de actividad
- Herramienta de contabilidad: Sage, QuickBooks, Holded, Xero, SAP, Oracle
- Frecuencia de cierre contable: mensual, trimestral
- Complejidad financiera: múltiples entidades legales, monedas, divisiones de negocio
- Audiencia principal: CEO, inversores, consejo de administración, o CFO interno

Con esa información, genera:

1. ESTRUCTURA DEL DASHBOARD FINANCIERO
   Panel ejecutivo (una sola pantalla):
   - Revenue actual vs. presupuesto vs. año anterior (con semáforo de estado)
   - Margen bruto y EBITDA: valor absoluto y porcentaje, tendencia de 12 meses
   - Cash position: saldo actual, runway en meses (startup) o días de caja (empresa establecida)
   - Principales alertas del período: desviaciones significativas, impagos, obligaciones próximas

   Panel de P&L:
   - Cuenta de resultados mensual y acumulada vs. presupuesto: línea a línea
   - Análisis de varianza automático: qué partidas se desvían más y cuánto
   - Evolución del margen por línea de producto o división (si aplica)
   - Estacionalidad: comparativa con mismo período del año anterior

   Panel de Cash Flow:
   - Cash flow operativo, de inversión y financiero en el período
   - Bridge de caja: de dónde viene y a dónde va el dinero
   - Deudores y acreedores: aging de cobros pendientes y pagos próximos
   - Previsión de tesorería a 13 semanas

2. FORECAST AUTOMATIZADO CON IA
   - Modelos de forecast de ingresos: series temporales (ARIMA, Prophet) + factores externos
   - Variables de negocio para enriquecer el forecast: pipeline de ventas, estacionalidad, contratos firmados
   - Actualización automática del forecast al cerrar cada mes
   - Escenarios automáticos: optimista, base y pesimista con intervalos de confianza
   - Exactitud histórica del forecast: cómo medir y mejorar la precisión

3. ANÁLISIS DE DESVIACIONES CON IA
   - Detección automática de partidas con desviación significativa vs. presupuesto
   - Clasificación de la desviación: precio (vendemos a precio diferente), volumen (vendemos más o menos), mix (cambia el producto vendido), o gasto no planificado
   - Root cause analysis automatizado: qué factores explican la desviación
   - Priorización: qué desviaciones requieren acción inmediata vs. cuáles son temporales o esperadas

4. INDICADORES DE SALUD FINANCIERA
   - Ratios de liquidez: current ratio, quick ratio, cash ratio
   - Ratios de endeudamiento: D/E ratio, cobertura de intereses
   - Eficiencia: días de cobro (DSO), días de pago (DPO), rotación de inventario si aplica
   - Para startups: burn rate mensual, runway, eficiencia de capital (ARR / capital total captado)
   - Benchmarks sectoriales: cómo se compara la empresa con el sector

5. REPORTE PARA INVERSORES Y CONSEJO
   - Estructura del investor update mensual o trimestral
   - Métricas que quieren ver los inversores de cada etapa: seed, Serie A, Serie B+
   - Narrativa financiera: cómo explicar los números en contexto de estrategia
   - Cómo generar el reporte financiero narrativo automáticamente con IA a partir de los datos

6. IMPLEMENTACIÓN Y FUENTES DE DATOS
   - Integración con el software de contabilidad: exportación de datos, frecuencia, normalización
   - Modelo de datos financiero: cómo estructurar el plan de cuentas para que el dashboard funcione bien
   - Herramientas de construcción del dashboard: Looker Studio, Power BI, Cube, o plataforma de FP&A (Mosaic, Drivetrain, Pigment)
   - Mantenimiento: quién actualiza el presupuesto, quién mantiene el modelo de forecast

Entrega: especificación completa del dashboard financiero con arquitectura de datos, configuración del forecast y plantillas de reporte.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Diseñar un dashboard financiero ejecutivo con forecast automatizado y detección de desviaciones con IA.',
                'vote_score'        => 50,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'KPIs legales y métricas de departamento jurídico con IA',
                'description'       => 'Define y visualiza los KPIs del departamento legal que demuestren su valor estratégico al negocio, usando IA para analizar tiempos de respuesta, cargas de trabajo y riesgo legal acumulado.',
                'prompt_content'    => <<<'EOT'
Eres director jurídico (General Counsel) o jefe de departamento legal con visión estratégica. Tu objetivo es construir un sistema de métricas que permita gestionar el departamento legal como una unidad de negocio, demostrando su valor más allá del coste, e identificando riesgos y oportunidades con apoyo de IA.

Información necesaria para personalizar el sistema:
- Tipo de organización: empresa privada, cotizada, startup, despacho de abogados interno
- Tamaño del equipo legal: número de abogados internos, uso de externos, áreas de práctica
- Herramienta de gestión de asuntos: Legal Tracker, Matter, Clio, Excel, u otro
- Principales stakeholders que necesitan datos del departamento: CEO, CFO, Consejo
- Áreas de mayor carga de trabajo: contratos, M&A, litigación, compliance, propiedad intelectual

Con esa información, genera:

1. MÉTRICAS DE EFICIENCIA OPERATIVA LEGAL
   Gestión de asuntos:
   - Tiempo de respuesta a solicitudes internas por tipo y urgencia
   - Tiempo de ciclo de revisión y firma de contratos por tipo de contrato
   - Asuntos abiertos, cerrados y en espera por abogado y por área de práctica
   - Tasa de renegociación de contratos: contratos que vuelven con cambios vs. firmados en primera iteración

   Gestión de costes legales:
   - Coste total del departamento (interno + externo) vs. presupuesto
   - Distribución del gasto externo por firma, por materia, por tipo de asunto
   - Coste por asunto y comparativa histórica: ¿los asuntos similares cuestan más o menos que antes?
   - Tasa de uso de templates vs. revisiones desde cero: indicador de eficiencia

2. MÉTRICAS DE RIESGO LEGAL
   - Inventario de litigios: valor en disputa, probabilidad de pérdida estimada, provisiones constituidas
   - Mapa de riesgo regulatorio: normativas aplicables, estado de cumplimiento, fechas de vencimiento
   - Contratos próximos a vencer: renovaciones automáticas, cláusulas de revisión de precio, garantías caducando
   - Incidencias de compliance: número y gravedad de incumplimientos detectados en el período
   - Heat map de riesgo: qué áreas de negocio concentran más exposición legal

3. DASHBOARD LEGAL PARA LA DIRECCIÓN
   Vista del CFO (coste y riesgo):
   - Gasto legal total vs. presupuesto, tendencia, comparativa de industria
   - Provisiones para litigios y su evolución
   - Contratos activos por valor y vencimiento próximo

   Vista del CEO (valor estratégico):
   - Asuntos críticos en curso con estado resumido
   - Tiempo de ciclo de contratos comerciales: cuánto tarda el legal en no bloquear el negocio
   - Ahorro legal: negociaciones favorables, litigios evitados, contratos renegociados

   Vista del Director Legal (gestión del equipo):
   - Carga de trabajo por abogado: asuntos activos, tiempo estimado, urgencias pendientes
   - Productividad del equipo: asuntos cerrados por mes, tiempo medio de resolución
   - Pipeline de trabajo: solicitudes recibidas, en proceso, pendientes de respuesta

4. AUTOMATIZACIÓN CON IA
   - Clasificación automática de contratos al recibirlos: tipo, urgencia, abogado asignado
   - Extracción de cláusulas clave de contratos para alimentar el dashboard (fechas de vencimiento, obligaciones, penalizaciones)
   - Resumen automático del estado de cada litigio para el reporte mensual
   - Alertas automáticas de vencimientos de contratos, plazos procesales y renovaciones

5. REPORTE DE VALOR DEL DEPARTAMENTO LEGAL
   - Cómo cuantificar el valor del departamento más allá del coste: riesgos evitados, negociaciones favorables, velocidad de contratos
   - Estructura del informe trimestral del departamento legal al Consejo
   - Narrativa de datos: cómo explicar el impacto del legal en el lenguaje del negocio
   - Benchmarking: cómo comparar el departamento con organizaciones similares (ACC benchmarks)

6. IMPLEMENTACIÓN PROGRESIVA
   - Fase 1: métricas básicas con datos disponibles en el software actual
   - Fase 2: integración con CRM y herramientas de negocio para contextualizar el trabajo legal
   - Fase 3: IA para análisis de contratos y predicción de riesgo
   - Cómo involucrar al equipo legal en la adopción del sistema de métricas

Entrega: sistema completo de KPIs legales con dashboard, metodología de cálculo y reporte ejecutivo trimestral.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Demostrar el valor estratégico del departamento legal con métricas de eficiencia, riesgo y coste.',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Dashboard de Customer Success con métricas de salud del cliente e IA',
                'description'       => 'Construye un dashboard de customer success que centralice el health score de todos los clientes, prediga el churn con IA y dé al equipo las acciones exactas para mejorar la retención.',
                'prompt_content'    => <<<'EOT'
Eres VP de Customer Success con experiencia en modelos de health score y gestión de churn. Tu objetivo es diseñar un sistema de métricas de CS que permita al equipo gestionar proactivamente la cartera de clientes, identificar riesgos antes de que sea demasiado tarde y demostrar el impacto económico del customer success en el negocio.

Información necesaria para personalizar el sistema:
- Modelo de negocio: SaaS B2B, marketplace, servicio profesional, o mixto
- Segmentación de clientes: enterprise, mid-market, SMB, y criterios de segmentación
- Herramientas actuales: CRM (Salesforce, HubSpot), plataforma de CS (Gainsight, ChurnZero, Vitally), analytics de producto
- Señales de comportamiento de cliente que ya se rastrean en el producto
- Tamaño de la cartera por CSM y modelo de cobertura actual

Con esa información, genera:

1. MODELO DE HEALTH SCORE
   - Dimensiones del health score: adopción del producto, ROI obtenido, engagement con el equipo de CS, relación con stakeholders, estabilidad del contrato
   - Variables de adopción: DAU/WAU, profundidad de uso de features, número de usuarios activos / licencias contratadas
   - Variables de relación: NPS, CSAT de las últimas interacciones, tiempo desde último contacto, número de escalaciones
   - Variables de riesgo contractual: días hasta la renovación, historial de pagos, contratos de soporte vencidos
   - Ponderación de cada dimensión: cómo combinarlas en un score de 0 a 100
   - Actualización automática del score: frecuencia y fuentes de datos

2. SEGMENTACIÓN Y PRIORIZACIÓN
   - Matriz de riesgo vs. oportunidad: qué hacer con clientes sanos en riesgo de churn, expansión en clientes sanos, rescate de clientes en riesgo
   - Reglas de segmentación dinámica: cuándo un cliente pasa de verde a amarillo automáticamente
   - Capacidad de CS: cuántos clientes puede gestionar un CSM con cada modelo de cobertura
   - Priorización semanal: dado el health score de toda la cartera, ¿en qué 5 clientes debe enfocarse cada CSM esta semana?

3. PREDICCIÓN DE CHURN CON IA
   - Variables que más predicen el churn en los datos históricos de la empresa
   - Modelo de predicción: cuándo una combinación de señales genera una alerta de riesgo alto
   - Ventana de predicción: con cuánta antelación el modelo detecta el riesgo (objetivo: 90+ días antes de renovación)
   - Intervención basada en predicción: qué playbook se activa según el tipo y nivel de riesgo
   - Retroalimentación del modelo: cómo mejora su precisión con cada renovación o churn real

4. DASHBOARD DE CS
   Vista del CSM:
   - Mi cartera: health score de cada cliente, tendencia, próxima acción requerida, fecha de renovación
   - Alertas del día: clientes que bajaron de nivel de salud, hitos próximos, fechas de renovación en 90 días
   - Actividad: qué hice esta semana con cada cliente, próximas reuniones programadas

   Vista del Manager de CS:
   - Estado de la cartera: distribución por nivel de salud, tendencia de la semana
   - Riesgo de churn: ARR en riesgo total y por CSM
   - Rendimiento del equipo: NPS promedio, tiempo medio de resolución de escalaciones, tasa de retención por CSM

   Vista del VP / CRO:
   - Net Revenue Retention (NRR) y Gross Revenue Retention (GRR): actuales y proyectados
   - ARR en riesgo vs. ARR en oportunidad de expansión
   - Forecast de renovaciones del trimestre: probabilidad ponderada de renovar o no cada cuenta

5. MÉTRICAS FINANCIERAS DE CS
   - NRR (Net Revenue Retention): la métrica más importante de CS; cómo calcularlo y mejorar
   - GRR (Gross Revenue Retention): mide la retención sin contar expansión
   - Expansión revenue: upsell y cross-sell generado por el equipo de CS
   - CS-qualified leads: clientes que CS convierte en oportunidades de expansión para ventas
   - Coste de retención: cuánto cuesta retener a un cliente vs. cuánto vale

6. REPORTE EJECUTIVO DE CUSTOMER SUCCESS
   - Estructura del monthly CS review: estado de la cartera, renovaciones del mes, churn del mes, expansión, forecast
   - Cómo presentar el impacto económico del CS al CEO y al CFO
   - Análisis de cohortes: NRR por cohorte de contratación, de segmento, de canal de origen
   - Plan de mejora: si el NRR está por debajo del objetivo, qué acciones tienen mayor impacto

Entrega: sistema completo de métricas de CS con modelo de health score, configuración del dashboard y protocolo de intervención por nivel de riesgo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Construir un sistema de health score y predicción de churn para gestionar proactivamente la cartera de clientes.',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Dashboard de negocio freelance con métricas financieras e IA',
                'description'       => 'Crea un sistema de métricas y un dashboard personal para gestionar tu negocio freelance como una empresa: ingresos, rentabilidad por cliente, utilización del tiempo y proyecciones financieras asistidas por IA.',
                'prompt_content'    => <<<'EOT'
Eres freelancer profesional con un negocio consolidado que quieres gestionar con datos. Tu objetivo es construir un dashboard personal de métricas que te permita tomar decisiones de negocio informadas: qué clientes son más rentables, cuándo subir precios, si tienes capacidad para nuevos proyectos y cómo proyectar tus ingresos futuros.

Información necesaria para personalizar el sistema:
- Tipo de servicio: diseño, desarrollo, consultoría, copywriting, fotografía, marketing, otro
- Número de clientes activos actuales y tipo (proyecto puntual vs. retainer mensual)
- Herramienta actual de seguimiento: Excel, Notion, Toggl, herramienta de facturación u otra
- Tarifa actual: por hora, por proyecto, o mixto
- Objetivo de ingresos anuales y situación fiscal (autónomo, SL, LLC u otro)

Con esa información, genera:

1. MÉTRICAS CLAVE DEL NEGOCIO FREELANCE
   Ingresos y rentabilidad:
   - MRR (Monthly Recurring Revenue) si tienes retainers; ingresos proyectados si trabajas por proyecto
   - Ingreso por hora efectivo: ingresos totales / horas trabajadas (no solo horas facturables)
   - Margen neto: ingresos - gastos - impuestos estimados
   - Rentabilidad por cliente: qué clientes generan más dinero por hora dedicada

   Tiempo y capacidad:
   - Tasa de utilización: horas facturables / horas totales trabajadas (objetivo típico: 60-70%)
   - Distribución del tiempo: cliente A, cliente B, marketing propio, administración, formación
   - Capacidad disponible: ¿cuántas horas puedo dedicar a un nuevo cliente?
   - Lead time: tiempo medio desde propuesta hasta inicio de proyecto

   Cartera de clientes:
   - Concentración de ingresos: qué porcentaje viene del cliente principal (riesgo si es >50%)
   - Antigüedad media de los clientes: indicador de fidelización
   - Tasa de repetición: porcentaje de clientes que vuelven para un segundo proyecto
   - Pipeline de propuestas: valor total de propuestas enviadas y tasa de cierre

2. DASHBOARD PERSONAL EN NOTION, EXCEL O AIRTABLE
   - Estructura de la base de datos de clientes: campos necesarios (nombre, tipo de contrato, tarifa, horas dedicadas, facturas emitidas)
   - Vista de proyectos activos: estado, horas consumidas vs. presupuesto, entregables pendientes
   - Vista financiera mensual: ingresos, gastos, beneficio, impuestos reservados
   - Resumen de una página: los 5 números más importantes de tu negocio de un vistazo
   - Instrucciones detalladas para construir cada vista con la herramienta elegida

3. PROYECCIÓN DE INGRESOS CON IA
   - Modelo de forecast mensual: retainers fijos + proyectos en pipeline con probabilidad de cierre
   - Escenario conservador (solo retainers actuales), base (más proyectos en pipeline a 70%) y optimista
   - Cuándo es el momento correcto para subir tarifas: señales basadas en datos (utilización alta, tasa de aceptación alta, clientes de bajo valor)
   - Planificación de vacaciones: cuándo puedes ausentarte sin poner en riesgo el objetivo de ingresos

4. ANÁLISIS DE RENTABILIDAD POR CLIENTE
   - Cálculo del ingreso por hora real de cada cliente (incluyendo tiempo de gestión y reuniones)
   - Clasificación de clientes: clientes A (alta rentabilidad), B (media), C (baja rentabilidad o problemáticos)
   - Cuándo "despedir" a un cliente de bajo valor: criterios objetivos
   - Cómo usar los datos para negociar una subida de tarifa con datos en la mano

5. GESTIÓN FISCAL Y FINANCIERA
   - Porcentaje a reservar para impuestos según tu situación fiscal (estimación personalizada)
   - Separación de cuentas: cuenta de operaciones, cuenta de impuestos, cuenta de emergencias
   - Gastos deducibles que debes rastrear: software, hardware, formación, espacio de trabajo, seguros
   - Facturación internacional: consideraciones fiscales cuando cobras de clientes en el extranjero

6. AUTOMATIZACIÓN CON IA
   - Cómo usar IA para generar el resumen mensual de tu negocio a partir de los datos del dashboard
   - Detección automática de anomalías: mes con ingresos inusualmente bajos, cliente que no ha pagado en más de X días
   - IA para calcular la tarifa óptima para un nuevo proyecto basada en tu historial de proyectos similares
   - Recordatorios automáticos: seguimiento de propuestas, renovación de retainers, fechas de vencimiento de facturas

Entrega: sistema completo de métricas freelance con instrucciones de implementación paso a paso y plantilla del dashboard lista para usar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Gestionar el negocio freelance con datos: rentabilidad por cliente, proyección de ingresos y tasa de utilización.',
                'vote_score'        => 42,
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
