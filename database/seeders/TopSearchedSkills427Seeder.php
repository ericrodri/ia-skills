<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills427Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Planificación estratégica de marketing anual con IA',
                'description'       => 'Diseña el plan de marketing anual de tu empresa usando inteligencia artificial para analizar datos históricos, identificar oportunidades de crecimiento y asignar presupuesto con criterio estratégico.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de estrategia de marketing con más de 10 años de experiencia ayudando a empresas a diseñar planes de marketing anuales basados en datos. Tu misión es guiarme paso a paso para construir el plan de marketing del próximo año usando inteligencia artificial como palanca estratégica y operativa.

Antes de comenzar, necesito que me preguntes:
- Tipo de empresa y sector (B2B, B2C, ecommerce, SaaS, marketplace)
- Tamaño del equipo de marketing y presupuesto aproximado disponible
- Canales que ya utilizamos y cuáles generan más resultados
- Objetivos de negocio del próximo año: facturación, número de clientes, mercados
- Principales retos que enfrentamos: captación, retención, reconocimiento de marca, eficiencia

Con esa información, desarrolla un plan estructurado en los siguientes bloques:

1. DIAGNÓSTICO DEL AÑO ANTERIOR
   - Marco para analizar qué campañas y canales funcionaron y cuáles no
   - Cómo usar IA (ChatGPT, Claude, Gemini) para revisar datos de Google Analytics, CRM y redes sociales e identificar patrones
   - Análisis de competidores: cómo monitorizar su actividad y extraer aprendizajes
   - Evaluación del ROI por canal y por campaña

2. DEFINICIÓN DE OBJETIVOS SMART CON IA
   - Cómo utilizar IA para convertir objetivos de negocio en objetivos de marketing medibles
   - Frameworks de OKRs aplicados a marketing con ejemplos concretos
   - Cómo calibrar objetivos realistas comparando con benchmarks del sector
   - Definición del North Star Metric del equipo de marketing para el año

3. ESTRATEGIA DE CANALES Y ASIGNACIÓN DE PRESUPUESTO
   - Cómo usar IA para modelar escenarios de distribución de presupuesto según el retorno esperado
   - Matriz de canales: qué canales priorizar para captación, nurturing y retención
   - Modelo de atribución: cómo asignar valor correctamente a cada canal con herramientas de IA
   - Plan de contenido editorial anual: cómo usar IA para generar el calendario temático

4. PLAN DE CAMPAÑAS TRIMESTRAL
   - Estructura de campaña por trimestre alineada con los hitos de negocio
   - Cómo usar IA para generar briefs de campaña, copies de anuncios y variantes de mensajes
   - Planificación de lanzamientos, estacionalidad y eventos del sector
   - Sistema de alertas y revisiones periódicas para ajustar el plan

5. KPIs, CUADRO DE MANDO Y REVISIÓN
   - Los 10 KPIs esenciales del plan de marketing anual
   - Cómo construir un dashboard automatizado usando IA y herramientas de BI
   - Cadencia de revisión: qué revisar cada semana, cada mes y cada trimestre
   - Proceso de ajuste del plan cuando los resultados se desvían del objetivo

6. EQUIPO Y RECURSOS
   - Cómo evaluar si el equipo actual puede ejecutar el plan o necesita refuerzo
   - Qué tareas delegar a IA y herramientas de automatización para ganar capacidad
   - Plan de formación del equipo en habilidades de IA aplicadas a marketing

Al finalizar, entrega un resumen ejecutivo del plan en formato tabla con: objetivo, canal, inversión, KPI principal y responsable. Este plan debe ser accionable desde el primer día del año y revisable de forma ágil.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Construir el plan de marketing anual completo con análisis de datos, objetivos, presupuesto y calendario de campañas.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Roadmap técnico anual de producto con IA',
                'description'       => 'Diseña el roadmap técnico de tu equipo de desarrollo para el próximo año usando IA para priorizar iniciativas, estimar esfuerzos y alinear tecnología con los objetivos de negocio.',
                'prompt_content'    => <<<'EOT'
Eres un CTO o Engineering Manager con experiencia en planificación estratégica de equipos de desarrollo. Tu misión es ayudarme a construir el roadmap técnico anual de mi equipo usando inteligencia artificial para mejorar la calidad de las decisiones, reducir incertidumbre y comunicar el plan de forma clara a la organización.

Antes de empezar, pregúntame:
- Stack tecnológico actual y principales sistemas o plataformas que mantenemos
- Tamaño del equipo de desarrollo y estructura (squads, áreas de especialización)
- Deuda técnica conocida y su impacto actual en la velocidad del equipo
- Objetivos de producto o negocio que el equipo debe soportar el próximo año
- Restricciones: presupuesto, contrataciones previstas, dependencias con otros equipos

Con esa base, construye el roadmap técnico en los siguientes apartados:

1. INVENTARIO TÉCNICO Y AUDITORÍA DE DEUDA
   - Cómo usar IA para catalogar los sistemas existentes y clasificarlos por criticidad, deuda técnica y riesgo
   - Marco para evaluar qué refactorizar, qué reescribir y qué desestimar
   - Cómo cuantificar la deuda técnica en términos de velocidad perdida e impacto en el negocio
   - Priorización de las acciones técnicas pendientes vs. nuevas funcionalidades

2. ALINEACIÓN TECNOLOGÍA-NEGOCIO
   - Proceso para traducir los objetivos de negocio en iniciativas técnicas concretas
   - Cómo usar IA para identificar qué decisiones técnicas tendrán mayor impacto en los KPIs de negocio
   - Framework de decisión para evaluar construir vs. comprar vs. integrar
   - Cómo comunicar el roadmap técnico a stakeholders no técnicos

3. ESTIMACIÓN Y PLANIFICACIÓN DE CAPACIDAD
   - Técnicas de estimación con IA: cómo usar modelos de lenguaje para revisar historias de usuario y sugerir esfuerzos
   - Planificación de capacidad del equipo: cómo calcular la velocidad real disponible descontando reuniones, soporte y vacaciones
   - Gestión de la incertidumbre en las estimaciones: rangos, buffer y revisión iterativa
   - Dependencias externas: cómo identificarlas y planificar alrededor de ellas

4. ESTRUCTURA DEL ROADMAP POR TRIMESTRE
   - Q1: Estabilización, reducción de deuda técnica prioritaria y fundaciones para las iniciativas del año
   - Q2-Q3: Entrega de iniciativas de mayor impacto estratégico
   - Q4: Consolidación, preparación de infraestructura para el año siguiente y retrospectiva técnica
   - Cómo usar IA para redactar las épicas y los criterios de aceptación de cada iniciativa

5. SEGURIDAD, ESCALABILIDAD E INFRAESTRUCTURA
   - Plan de mejoras de seguridad y compliance técnico para el año
   - Cómo evaluar si la infraestructura actual puede soportar el crecimiento previsto
   - Plan de migración o actualización de dependencias críticas
   - Estrategia de observabilidad: métricas, logs, alertas y SLOs

6. MÉTRICAS DEL EQUIPO Y SEGUIMIENTO
   - Los KPIs técnicos clave para medir el progreso del roadmap: DORA metrics, tiempo de ciclo, cobertura de tests
   - Cómo construir un dashboard de salud técnica del equipo con IA
   - Cadencia de revisión del roadmap: ajustes trimestrales y comunicación de cambios
   - Proceso de retrospectiva técnica anual para alimentar el siguiente ciclo de planificación

Finaliza generando un resumen del roadmap en formato tabla con: iniciativa, objetivo de negocio que soporta, trimestre de entrega, esfuerzo estimado y riesgo principal.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Crear el roadmap técnico anual con priorización de deuda técnica, iniciativas estratégicas y métricas de equipo.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Plan estratégico de diseño y marca anual con IA',
                'description'       => 'Define la estrategia de diseño y evolución de marca para el próximo año con ayuda de IA, desde la auditoría visual hasta la planificación de recursos y entregas.',
                'prompt_content'    => <<<'EOT'
Eres un Director de Diseño o Brand Strategist con experiencia en la planificación de equipos creativos y sistemas de diseño. Tu misión es ayudarme a construir el plan estratégico anual del área de diseño, incluyendo la evolución de la marca, los sistemas de diseño y los recursos necesarios para ejecutar los proyectos del año.

Primero, pregúntame:
- Tipo de empresa y en qué etapa se encuentra la marca (startup, scale-up, empresa establecida)
- Composición del equipo de diseño y herramientas que utilizamos (Figma, Adobe, etc.)
- Estado actual de nuestro sistema de diseño o design system
- Principales proyectos de producto o marketing previstos para el año
- Retos que enfrenta el equipo: velocidad de entrega, consistencia de marca, alineación con negocio

Con esa información, desarrolla el plan en estos bloques:

1. AUDITORÍA DE MARCA Y SISTEMA DE DISEÑO
   - Cómo usar IA para analizar la coherencia visual de la marca en todos los touchpoints
   - Evaluación del design system actual: qué componentes faltan, qué está desactualizado
   - Análisis de la competencia visual: tendencias de diseño en el sector para 2025-2026
   - Identificación de los mayores puntos de fricción entre diseño y desarrollo

2. ESTRATEGIA DE EVOLUCIÓN DE MARCA
   - Marco para decidir si el año requiere un refresh de marca, una evolución o un rebranding
   - Cómo usar IA para explorar direcciones de diseño y generar referencias visuales
   - Plan de actualización del sistema de diseño: tokens, tipografía, paleta, iconografía
   - Estrategia de implementación gradual del nuevo sistema sin romper la coherencia actual

3. PLANIFICACIÓN DE PROYECTOS Y RECURSOS
   - Cómo priorizar los proyectos de diseño según su impacto estratégico
   - Estimación de esfuerzo con IA: cómo analizar proyectos anteriores similares para calibrar tiempos
   - Plan de capacidad del equipo: entregables por trimestre y gestión de picos de demanda
   - Proceso de onboarding de nuevos diseñadores o freelancers al sistema de diseño

4. INTEGRACIÓN DE IA EN EL FLUJO DE TRABAJO DE DISEÑO
   - Herramientas de IA para generación de imágenes, prototipado rápido y exploración de conceptos
   - Cómo usar IA para acelerar la fase de investigación y síntesis de user research
   - Automatización de tareas repetitivas: redimensionado de assets, generación de variantes, documentación
   - Guías de uso de IA generativa que preserven la identidad y valores de la marca

5. MÉTRICAS DE DISEÑO Y PRESENTACIÓN AL NEGOCIO
   - KPIs del área de diseño: tiempo de entrega, satisfacción de stakeholders, consistencia de marca
   - Cómo comunicar el valor del diseño en términos de negocio a dirección y marketing
   - Sistema de feedback y revisión del trabajo creativo durante el año
   - Proceso de retrospectiva del equipo de diseño para mejorar de forma continua

Termina con un calendario visual en formato tabla con los proyectos principales del año, el trimestre de entrega, los recursos asignados y el objetivo estratégico que cubre cada proyecto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar el plan anual del equipo de diseño con auditoría de marca, hoja de ruta del design system y planificación de recursos.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Planificación de objetivos de ventas anuales con IA',
                'description'       => 'Construye el plan de ventas anual con inteligencia artificial para definir cuotas por representante, diseñar el pipeline y proyectar los ingresos con escenarios optimista, base y conservador.',
                'prompt_content'    => <<<'EOT'
Eres un Director de Ventas o Sales Operations Manager con experiencia en planificación de equipos comerciales de alto rendimiento. Tu misión es ayudarme a construir el plan de ventas anual, desde la fijación de cuotas hasta la gestión del pipeline, usando inteligencia artificial para basar cada decisión en datos históricos y benchmarks del sector.

Antes de comenzar, necesito que me preguntes:
- Modelo de ventas: inbound, outbound, inside sales, field sales, channel partners
- Tamaño del equipo de ventas y estructura (SDRs, AEs, CSMs, Sales Managers)
- Objetivo de facturación del próximo año y de dónde debe venir el crecimiento
- Datos históricos clave: tasa de conversión por etapa, ACV promedio, ciclo de venta, churn
- Mercados o segmentos que vamos a atacar el próximo año

Con esa información, construye el plan de ventas en estos apartados:

1. ANÁLISIS DEL RENDIMIENTO HISTÓRICO
   - Cómo usar IA para revisar los datos del CRM e identificar los patrones de cierre más potentes
   - Análisis de pérdidas: por qué perdimos las oportunidades que no cerramos y qué aprender
   - Ranking de representantes: quiénes superaron cuota, quiénes no y por qué
   - Identificación de los segmentos, sectores y casos de uso que generaron mejor retorno

2. MODELADO DE OBJETIVOS Y CUOTAS
   - Cómo calcular la cuota individual a partir del objetivo global con un modelo de cobertura (ramp-up, attrition, buffer)
   - Uso de IA para simular escenarios: si el equipo rinde al 80%, 100% o 120% de la cuota, ¿cómo impacta el revenue?
   - Estructura de incentivos y comisiones alineada con los objetivos del año
   - Cómo fijar OTEs (On-Target Earnings) competitivos usando datos del sector

3. DISEÑO DEL PIPELINE Y LA COBERTURA
   - Cálculo de la cobertura de pipeline necesaria: cuántas oportunidades abiertas necesitamos para cerrar el objetivo
   - Cómo usar IA para analizar la velocidad del pipeline y detectar cuellos de botella
   - Plan de generación de pipeline por canal: outbound, inbound, partner, referral
   - Criterios de calificación de oportunidades actualizados para el año

4. PLAN DE HABILITACIÓN Y FORMACIÓN
   - Qué habilidades debe desarrollar el equipo de ventas para vender el producto o propuesta actual
   - Cómo usar IA para generar materiales de sales enablement: playbooks, objection handling, propuestas tipo
   - Plan de onboarding para nuevas incorporaciones al equipo
   - Cadencia de coaching individual y reuniones de equipo durante el año

5. FORECAST Y SEGUIMIENTO
   - Sistema de forecast semanal y mensual con ajustes por confianza del representante
   - Cómo usar IA para mejorar la precisión del forecast analizando el historial de estimaciones vs. resultados reales
   - Dashboard de ventas: métricas clave que el equipo debe ver cada semana
   - Plan de acciones correctivas cuando el pipeline o el cierre se desvía del objetivo

Entrega al final un resumen ejecutivo con: objetivo anual, cuota media por representante, cobertura de pipeline necesaria, tasa de conversión objetivo y principales palancas de crecimiento para el año.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Definir el plan de ventas anual con cuotas, modelado de pipeline y forecast por escenarios.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Planificación del roadmap de producto anual con IA',
                'description'       => 'Define el roadmap de producto para el próximo año con inteligencia artificial, alineando las iniciativas con los objetivos de negocio, el feedback de usuarios y la capacidad del equipo.',
                'prompt_content'    => <<<'EOT'
Eres un Chief Product Officer o Product Manager Senior con amplia experiencia en la planificación de roadmaps de producto en empresas de tecnología. Tu misión es ayudarme a construir el roadmap de producto anual de forma estructurada, conectando cada iniciativa con los objetivos de negocio y con evidencia real de usuarios.

Para comenzar, necesito que me preguntes:
- Tipo de producto: SaaS, marketplace, app móvil, plataforma B2B, ecommerce
- Etapa del producto: early stage, product-market fit, escala, madurez
- Objetivos de negocio del próximo año: revenue, retención, expansión de mercado, reducción de churn
- Estado del backlog actual: qué iniciativas ya tenemos identificadas y en qué estado están
- Estructura del equipo de producto y desarrollo y su capacidad real de entrega

Con esa información, construye el roadmap en estos bloques:

1. REVISIÓN ESTRATÉGICA Y DIAGNÓSTICO
   - Cómo usar IA para analizar el feedback de usuarios del último año: tickets de soporte, reviews, encuestas NPS
   - Evaluación del impacto de las iniciativas entregadas el año anterior
   - Análisis competitivo: qué están lanzando los competidores y qué brechas hay en el mercado
   - Identificación de los tres problemas más críticos que el producto debe resolver este año

2. DEFINICIÓN DE LA VISIÓN Y LOS TEMAS ESTRATÉGICOS
   - Cómo construir una visión de producto para el año en una sola frase clara y ambiciosa
   - Definición de 3 a 5 temas estratégicos que agrupan todas las iniciativas del roadmap
   - Alineación de los temas de producto con los OKRs de la empresa
   - Cómo usar IA para generar y refinar la narrativa del roadmap para diferentes audiencias

3. PRIORIZACIÓN DE INICIATIVAS
   - Frameworks de priorización con IA: RICE, ICE, value vs. effort, kano model
   - Cómo usar IA para estimar el impacto potencial de cada iniciativa usando datos históricos
   - Diferenciación entre must-have, should-have y nice-to-have para el año
   - Cómo involucrar a ventas, marketing y customer success en la priorización sin que el roadmap se convierta en una lista de peticiones

4. ESTRUCTURA TRIMESTRAL DEL ROADMAP
   - Q1: fundaciones, trabajo técnico necesario y las primeras victorias rápidas
   - Q2-Q3: iniciativas de mayor impacto estratégico con entrega iterativa
   - Q4: consolidación, reducción de deuda de producto y preparación del siguiente ciclo
   - Cómo usar IA para redactar problem statements y criterios de éxito para cada iniciativa

5. COMUNICACIÓN Y GESTIÓN DE EXPECTATIVAS
   - Cómo presentar el roadmap a diferentes stakeholders: CEO, inversores, ventas, clientes
   - Gestión de las peticiones urgentes sin romper el roadmap comprometido
   - Proceso de actualización y comunicación de cambios en el roadmap durante el año
   - Cómo usar IA para generar release notes, updates de producto y comunicaciones internas

6. MÉTRICAS Y REVISIÓN
   - North Star Metric del producto y métricas por área de producto
   - Sistema de medición del impacto de cada iniciativa entregada
   - Cadencia de revisión del roadmap: ajustes trimestrales con datos

Finaliza con una tabla resumen del roadmap con: iniciativa, tema estratégico, trimestre, métrica de éxito y nivel de confianza en la estimación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Definir el roadmap de producto anual con priorización basada en datos, temas estratégicos y comunicación a stakeholders.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Plan estratégico de recursos humanos anual con IA',
                'description'       => 'Diseña el plan estratégico de RRHH para el próximo año usando IA para alinear la gestión del talento con los objetivos de negocio, planificar la plantilla y mejorar la experiencia del empleado.',
                'prompt_content'    => <<<'EOT'
Eres un Chief People Officer o HR Business Partner con experiencia en la planificación estratégica de talento en empresas en crecimiento. Tu misión es ayudarme a construir el plan estratégico de recursos humanos para el próximo año, usando inteligencia artificial para basar cada decisión en datos de personas y en los objetivos de negocio.

Antes de empezar, pregúntame:
- Tamaño de la empresa y sectores o funciones con mayor crecimiento previsto
- Principales retos de talento actuales: retención, captación, rendimiento, cultura
- Objetivos de contratación del próximo año: número de posiciones y áreas prioritarias
- Estado actual de la experiencia del empleado: eNPS, onboarding, feedback
- Herramientas de RRHH disponibles: ATS, HRIS, plataforma de performance, formación

Con esa información, desarrolla el plan de RRHH en los siguientes bloques:

1. DIAGNÓSTICO DE TALENTO Y CULTURA
   - Cómo usar IA para analizar encuestas de clima, datos de rotación y feedback de salida
   - Identificación de los factores que más influyen en la retención y el compromiso del equipo
   - Análisis de brechas de habilidades: qué capacidades necesita la empresa para cumplir los objetivos y cuáles no tiene hoy
   - Mapa de riesgo de talento: roles críticos con alto riesgo de rotación o difíciles de cubrir

2. PLANIFICACIÓN DE PLANTILLA
   - Cómo calcular las necesidades de contratación por área para el próximo año
   - Uso de IA para modelar escenarios de crecimiento de plantilla y su impacto en el presupuesto de personas
   - Estrategia de fuentes de talento: a quién contratar, dónde buscar y qué perfiles priorizar
   - Plan de ramp-up: tiempo medio hasta productividad plena por rol y cómo reducirlo

3. DESARROLLO, FORMACIÓN Y PLANES DE CARRERA
   - Cómo usar IA para identificar qué formación tiene mayor impacto en el rendimiento y la retención
   - Diseño del plan de desarrollo anual: programas de liderazgo, upskilling técnico, habilidades de IA
   - Proceso de planes de carrera personalizados con apoyo de IA para escalar la conversación individual
   - Cómo medir el impacto de la formación en el rendimiento del equipo

4. PERFORMANCE Y COMPENSACIÓN
   - Modelo de evaluación del rendimiento para el año: criterios, frecuencia, calibración
   - Cómo usar IA para apoyar el proceso de feedback continuo y las revisiones de rendimiento
   - Estrategia de compensación y beneficios competitivos: cómo hacer benchmarking de mercado con IA
   - Diseño de planes de reconocimiento e incentivos no monetarios

5. EXPERIENCIA DEL EMPLEADO Y CULTURA
   - Plan de mejora del onboarding para los nuevos empleados del año
   - Iniciativas de cultura y engagement para el año: eventos, rituales de equipo, programas de bienestar
   - Cómo usar IA para personalizar la experiencia del empleado a escala
   - Plan de comunicación interna: transparencia, frecuencia y canales para el equipo

6. MÉTRICAS DE RRHH Y SEGUIMIENTO
   - Los 10 KPIs de RRHH más importantes para medir el éxito del plan
   - Cómo construir un dashboard de datos de personas con IA
   - Revisiones trimestrales del plan y proceso de ajuste según los resultados

Entrega al final un resumen del plan con: iniciativa, objetivo de negocio que soporta, responsable, trimestre y métrica de éxito.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Construir el plan estratégico de RRHH anual con planificación de plantilla, desarrollo del talento y métricas de personas.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Presupuesto y planificación financiera anual con IA',
                'description'       => 'Construye el presupuesto anual y el modelo financiero de tu empresa usando inteligencia artificial para proyectar ingresos, controlar costes y simular escenarios.',
                'prompt_content'    => <<<'EOT'
Eres un CFO o Finance Manager con experiencia en la planificación financiera de empresas en crecimiento. Tu misión es ayudarme a construir el presupuesto anual y el modelo financiero del próximo año, usando inteligencia artificial para mejorar la calidad de las proyecciones, identificar riesgos y presentar los resultados de forma clara a la dirección y a los inversores.

Antes de empezar, necesito que me preguntes:
- Modelo de negocio y principales fuentes de ingreso
- Tamaño de la empresa y estado financiero actual: rentabilidad, burn rate, runway si aplica
- Estructura de costes: qué porcentaje son costes fijos vs. variables
- Objetivos de negocio del próximo año que tienen impacto financiero directo
- Herramientas financieras disponibles: ERP, hojas de cálculo, software de FP&A

Con esa base, construye el plan financiero en los siguientes apartados:

1. ANÁLISIS DEL EJERCICIO ANTERIOR
   - Cómo usar IA para revisar las desviaciones entre presupuesto y real del año anterior
   - Identificación de los principales impulsores de ingreso y coste que afectaron más a los resultados
   - Lecciones aprendidas del proceso de presupuestación anterior
   - Puntos de partida más fiables para las proyecciones del nuevo año

2. PROYECCIÓN DE INGRESOS
   - Cómo usar IA para construir un modelo de ingresos bottom-up por segmento, producto o canal
   - Tres escenarios: conservador, base y optimista con los supuestos de cada uno
   - Análisis de sensibilidad: qué variables impactan más en el revenue (precio, volumen, churn, expansión)
   - Estacionalidad y eventos del año que afectan al patrón de ingresos

3. PLANIFICACIÓN DE COSTES Y OPEX
   - Cómo desglosar y proyectar los costes por área: personal, marketing, tecnología, operaciones, G&A
   - Identificación de los costes con mayor variabilidad y cómo modelarlos con IA
   - Plan de eficiencia: qué costes se pueden optimizar sin impactar el crecimiento
   - Análisis de make vs. buy: cuándo subcontratar es más eficiente que contratar

4. CAPEX E INVERSIONES ESTRATÉGICAS
   - Cómo evaluar y priorizar las inversiones estratégicas del año con criterios financieros (ROI, payback, VPN)
   - Plan de inversión en tecnología, infraestructura o expansión
   - Proceso de aprobación de inversiones no planificadas durante el año

5. CASHFLOW Y GESTIÓN DE LIQUIDEZ
   - Proyección mensual de cashflow para el año con escenarios
   - Plan de gestión de liquidez: umbrales de alerta y acciones de contingencia
   - Estrategia de financiación si el plan requiere capital adicional

6. REPORTING Y SEGUIMIENTO
   - Estructura del informe financiero mensual para la dirección
   - Cómo usar IA para automatizar el análisis de desviaciones y generar comentarios del mes
   - Proceso de reforecast trimestral para ajustar las proyecciones con la información real
   - Dashboard financiero clave para el equipo directivo

Entrega al final una tabla con el presupuesto anual resumido por área, los supuestos principales de cada línea y las métricas financieras clave del año: ingresos, EBITDA, margen y cashflow.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Construir el presupuesto anual y modelo financiero con proyección de ingresos, escenarios y plan de cashflow.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Plan de gestión legal y compliance anual con IA',
                'description'       => 'Diseña el plan anual de gestión legal y cumplimiento normativo de tu empresa usando IA para identificar riesgos regulatorios, priorizar acciones y gestionar contratos de forma más eficiente.',
                'prompt_content'    => <<<'EOT'
Eres un General Counsel o Legal Operations Manager con experiencia en la gestión jurídica de empresas tecnológicas en crecimiento. Tu misión es ayudarme a construir el plan anual de gestión legal y compliance, usando inteligencia artificial para optimizar los procesos jurídicos, anticipar riesgos normativos y garantizar el cumplimiento en todos los mercados donde opera la empresa.

Para comenzar, necesito que me preguntes:
- Sector y mercados en los que opera la empresa (UE, EE.UU., LATAM, otros)
- Estructura legal del grupo: entidades, jurisdicciones y socios jurídicos externos
- Principales actividades que generan exposición legal: contratos con clientes, datos personales, propiedad intelectual, laboral
- Normativas que ya tenemos identificadas como prioritarias: RGPD, AI Act, PCI-DSS, SOC2, otras
- Tamaño del equipo legal interno y volumen de trabajo jurídico actual

Con esa información, construye el plan legal y de compliance en los siguientes bloques:

1. MAPA DE RIESGOS LEGALES Y NORMATIVOS
   - Cómo usar IA para identificar los principales riesgos legales del negocio según el sector y los mercados
   - Mapa de normativas aplicables y su estado de cumplimiento actual
   - Análisis de las novedades regulatorias previstas para el año que afectan al negocio
   - Priorización de los riesgos según probabilidad e impacto

2. GESTIÓN DE CONTRATOS Y OPERACIONES LEGALES
   - Cómo usar IA para revisar, analizar y resumir contratos complejos
   - Plan de actualización de los contratos estándar de la empresa: con clientes, proveedores, empleados
   - Sistema de gestión del ciclo de vida del contrato: desde la negociación hasta la renovación o terminación
   - Cómo automatizar con IA la generación de contratos tipo y NDAs

3. PLAN DE COMPLIANCE Y PROTECCIÓN DE DATOS
   - Plan de acción para el cumplimiento del RGPD y el AI Act para el año
   - Auditoría de los tratamientos de datos personales y actualización del registro de actividades
   - Revisión de las políticas de privacidad, cookies y consentimiento
   - Plan de formación en compliance para el equipo: qué deben saber todos los empleados

4. PROPIEDAD INTELECTUAL Y MARCA
   - Revisión y actualización del portfolio de marcas registradas y dominios
   - Estrategia de protección de la propiedad intelectual en los nuevos mercados
   - Cómo usar IA para monitorizar el uso indebido de la marca o de activos de PI
   - Plan de gestión de los contenidos generados con IA y su impacto en los derechos de PI

5. GESTIÓN DE ASUNTOS LEGALES Y LITIGIOS
   - Sistema de seguimiento de reclamaciones, disputas y asuntos en curso
   - Cuándo gestionar internamente y cuándo contratar asesoramiento externo
   - Cómo usar IA para investigar jurisprudencia y preparar argumentarios legales
   - Presupuesto para asesores externos y estrategia de gestión de los costes legales

6. MÉTRICAS LEGALES Y REPORTING
   - KPIs del área legal: tiempo de respuesta, contratos revisados, incidencias de compliance
   - Informe trimestral de riesgos legales para el comité de dirección
   - Proceso de revisión y actualización del plan legal durante el año

Entrega al final una tabla con las iniciativas legales del año, la normativa que cubre, el trimestre de ejecución, el responsable y el nivel de riesgo que mitiga.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar el plan anual legal y de compliance con mapa de riesgos normativos, gestión de contratos y protección de datos.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Estrategia anual de atención al cliente con IA',
                'description'       => 'Define la estrategia de customer success y soporte al cliente para el próximo año usando IA para reducir el churn, mejorar el NPS y escalar la atención sin aumentar el coste.',
                'prompt_content'    => <<<'EOT'
Eres un VP de Customer Success o Director de Atención al Cliente con experiencia en la construcción de equipos de soporte de alto rendimiento en empresas SaaS y de servicios. Tu misión es ayudarme a diseñar la estrategia anual de atención al cliente, usando inteligencia artificial para mejorar la experiencia del usuario, reducir el churn y escalar la operación de forma eficiente.

Antes de empezar, pregúntame:
- Tipo de producto o servicio y perfil del cliente (B2B, B2C, tamaño de cliente)
- Volumen de tickets mensuales y canales de soporte actuales: email, chat, teléfono, self-service
- Métricas actuales: NPS, CSAT, tiempo de primera respuesta, tasa de resolución en primer contacto
- Principales causas de churn identificadas y relación actual del CS con la retención
- Herramientas de soporte disponibles: Zendesk, Intercom, Freshdesk u otras

Con esa información, construye la estrategia anual en los siguientes bloques:

1. DIAGNÓSTICO Y ANÁLISIS DEL AÑO ANTERIOR
   - Cómo usar IA para analizar los tickets del año anterior e identificar las causas raíz más frecuentes
   - Análisis de los clientes que abandonaron: qué señales previas había que no detectamos
   - Identificación de los momentos de mayor fricción en el journey del cliente
   - Benchmarking de NPS, CSAT y tiempos de respuesta frente al sector

2. REDUCCIÓN DE CHURN Y EXPANSIÓN DE CUENTA
   - Modelo predictivo de churn con IA: qué variables predicen mejor el abandono
   - Plan de intervención proactiva con clientes en riesgo
   - Estrategia de expansión: cómo el equipo de CS puede contribuir al upsell y cross-sell
   - Programa de clientes estratégicos: atención diferenciada para las cuentas de mayor valor

3. ESCALA DE LA OPERACIÓN CON IA
   - Cómo implementar un bot de soporte con IA para resolver las consultas más frecuentes
   - Creación de una base de conocimiento inteligente que los agentes y los clientes puedan usar
   - Routing inteligente de tickets: cómo priorizar y asignar automáticamente según el tipo y la urgencia
   - Plantillas de respuesta generadas con IA para reducir el tiempo de gestión sin perder calidad

4. EXPERIENCIA DEL CLIENTE Y ONBOARDING
   - Rediseño del onboarding del cliente usando IA para personalizarlo según el perfil y los objetivos
   - Plan de comunicación proactiva: qué mensajes enviar y cuándo durante el ciclo de vida del cliente
   - Programa de formación y educación del cliente: webinars, tutoriales, contenido de ayuda
   - Cómo usar IA para segmentar clientes y personalizar la experiencia a escala

5. EQUIPO Y OPERACIONES
   - Plan de capacidad del equipo de CS para el año: cuántos agentes necesitamos y en qué canales
   - Cómo usar IA para acelerar el onboarding y la formación de nuevos agentes
   - Proceso de QA del soporte: cómo revisar y mejorar la calidad de las interacciones con IA
   - Gestión del bienestar del equipo de soporte: prevención del burnout y rotación

6. MÉTRICAS Y REPORTING
   - KPIs del área de CS: NPS, CSAT, CES, churn rate, revenue retention, tiempo de respuesta
   - Dashboard de customer health para el equipo
   - Informe mensual de voz del cliente para la dirección y el equipo de producto

Entrega al final un plan de acción trimestral con las iniciativas más importantes, la métrica que impacta cada una y el objetivo cuantitativo para el año.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar la estrategia anual de customer success con reducción de churn, escala con IA y métricas de experiencia del cliente.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Plan de negocio freelance anual con IA',
                'description'       => 'Diseña tu plan de negocio como freelancer para el próximo año usando IA para fijar objetivos de facturación, diversificar clientes, posicionarte como experto y gestionar tu tiempo de forma eficiente.',
                'prompt_content'    => <<<'EOT'
Eres un coach de negocio especializado en freelancers y profesionales independientes con experiencia ayudando a diseñar planes de negocio que combinan claridad estratégica con acción práctica. Tu misión es ayudarme a construir el plan de negocio de mi actividad freelance para el próximo año, usando inteligencia artificial como herramienta de apoyo en cada fase de la planificación.

Antes de empezar, necesito que me preguntes:
- Especialidad o servicio que ofrezco y tipo de clientes a los que sirvo
- Facturación del año anterior y objetivo de facturación para el próximo año
- Número de clientes activos y estructura de ingresos: proyectos, retainers, productos digitales
- Tiempo disponible para trabajar y cuánto dedico hoy a captación vs. entrega
- Principales retos: captación de nuevos clientes, precios, productividad, posicionamiento

Con esa información, construye el plan en los siguientes bloques:

1. REVISIÓN DEL AÑO ANTERIOR
   - Cómo usar IA para analizar qué clientes y proyectos generaron más valor y cuáles consumieron demasiado tiempo
   - Evaluación de los ingresos: ¿cuánto vino de clientes recurrentes vs. proyectos nuevos?
   - Identificación de los servicios o nichos donde tienes mejor retorno por hora trabajada
   - Lecciones que debes aplicar en la planificación del nuevo año

2. OBJETIVOS Y MODELO DE NEGOCIO
   - Cómo usar IA para calcular el objetivo de facturación mensual necesario para cubrir costes y ahorrar
   - Diseño del mix de ingresos ideal: proyectos puntuales, retainers mensuales y posibles productos digitales
   - Fijación del precio objetivo por hora o por proyecto y cómo justificarlo ante los clientes
   - Número máximo de clientes simultáneos que puedes gestionar sin perder calidad

3. POSICIONAMIENTO Y CAPTACIÓN
   - Cómo usar IA para definir tu propuesta de valor diferenciada y tu mensaje de marca personal
   - Plan de contenido para LinkedIn u otras plataformas: temas, frecuencia y formato
   - Estrategia de captación: referencias, outreach, inbound, plataformas freelance
   - Cómo usar IA para redactar propuestas comerciales más convincentes y adaptadas a cada cliente

4. PRODUCTIVIDAD Y GESTIÓN DEL TIEMPO
   - Diseño de la semana ideal: bloques de trabajo profundo, reuniones, captación y administración
   - Tareas que puedes automatizar con IA para ganar tiempo: informes, propuestas, seguimiento de clientes
   - Sistema de gestión de proyectos y comunicación con clientes para freelancers
   - Cómo establecer límites y decir no a proyectos que no encajan con tu plan

5. FINANZAS PERSONALES Y PROFESIONALES
   - Cómo separar finanzas personales y del negocio y qué porcentaje reservar para impuestos y ahorro
   - Plan de facturación y cobro: plazos, anticipos y gestión de impagados
   - Inversiones en formación, herramientas y marketing para el año
   - Fondo de emergencia para meses con menos proyectos

6. REVISIÓN Y AJUSTE DURANTE EL AÑO
   - Revisión mensual de facturación, pipeline y satisfacción del cliente
   - Cómo usar IA para hacer el balance trimestral y ajustar el plan
   - Indicadores de alerta que señalan que hay que cambiar algo: poco pipeline, precios bajos, demasiado tiempo en administración

Termina con un resumen del plan con: objetivo de facturación anual, número de clientes objetivo, precio medio por proyecto, las tres iniciativas de captación principales del año y las dos herramientas de IA que vas a integrar en tu flujo de trabajo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar el plan de negocio freelance anual con objetivos de facturación, posicionamiento y gestión del tiempo.',
                'vote_score'        => 41,
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
