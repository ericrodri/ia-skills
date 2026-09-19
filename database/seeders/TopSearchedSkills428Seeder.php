<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills428Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Automatización de operaciones de marketing con IA',
                'description'       => 'Identifica qué tareas del equipo de marketing se pueden automatizar con IA, diseña los flujos de trabajo y selecciona las herramientas adecuadas para ganar eficiencia sin perder calidad.',
                'prompt_content'    => <<<'EOT'
Eres un experto en marketing operations y automatización con experiencia ayudando a equipos de marketing a trabajar de forma más eficiente usando inteligencia artificial. Tu misión es ayudarme a identificar qué procesos internos de mi equipo de marketing se pueden automatizar con IA, cómo diseñar los flujos de trabajo y cómo medir el impacto en la productividad.

Antes de comenzar, necesito que me preguntes:
- Tamaño y estructura del equipo de marketing y las áreas que lo componen
- Herramientas actuales de marketing: CRM, plataforma de email, gestión de redes sociales, analítica
- Las tres tareas que más tiempo consumen al equipo actualmente
- Nivel de madurez tecnológica del equipo: cómo de cómodo se siente usando herramientas de IA
- Presupuesto aproximado disponible para nuevas herramientas de automatización

Con esa información, construye el plan de automatización en los siguientes bloques:

1. AUDITORÍA DE TAREAS Y PROCESOS ACTUALES
   - Metodología para mapear todas las tareas del equipo de marketing y estimar el tiempo que consumen
   - Clasificación de las tareas: alto volumen y bajo valor (candidatas a automatizar), creativas y estratégicas (mantener humanas), mixtas (apoyo de IA)
   - Cómo usar IA para analizar los procesos actuales e identificar los cuellos de botella y duplicidades
   - Priorización de qué automatizar primero según el impacto en tiempo y la facilidad de implementación

2. AUTOMATIZACIÓN DE CREACIÓN DE CONTENIDO
   - Flujo de trabajo para la generación de borradores de contenido con IA: briefing, generación, revisión humana, publicación
   - Herramientas de IA para redacción de copies de anuncios, emails, posts y artículos
   - Cómo crear una biblioteca de prompts del equipo para generar contenido consistente con la voz de la marca
   - Proceso de control de calidad y edición humana antes de publicar contenido generado con IA

3. AUTOMATIZACIÓN DE ANÁLISIS E INFORMES
   - Cómo usar IA para generar el informe de rendimiento de campañas de forma automática
   - Configuración de alertas inteligentes cuando una métrica cae por debajo del umbral esperado
   - Análisis automático de los datos de Google Analytics, plataformas de ads y redes sociales
   - Dashboard de marketing con actualización automática y narrativa generada por IA

4. AUTOMATIZACIÓN DE LA GESTIÓN DE REDES SOCIALES
   - Flujo de trabajo para planificar, generar y programar contenido de redes sociales con IA
   - Monitorización automática de menciones, comentarios y tendencias del sector
   - Proceso de moderación asistida por IA: filtrado de spam, priorización de respuestas urgentes
   - Cómo mantener la autenticidad de la marca cuando se usa IA en redes sociales

5. AUTOMATIZACIÓN DEL EMAIL MARKETING Y NURTURING
   - Cómo usar IA para escribir secuencias de emails de nurturing personalizadas por segmento
   - Flujo de lead scoring automático basado en el comportamiento del usuario
   - Personalización dinámica del contenido del email según el perfil y el comportamiento
   - Pruebas A/B automatizadas de asuntos, copies y CTAs

6. IMPLEMENTACIÓN Y GESTIÓN DEL CAMBIO
   - Plan de adopción de las herramientas de IA en el equipo: formación, guías de uso y onboarding
   - Cómo gestionar la resistencia del equipo al cambio cuando se introducen procesos automatizados
   - Métricas para medir el impacto de la automatización: horas ahorradas, velocidad de entrega, calidad
   - Revisión trimestral de los flujos automatizados y proceso de mejora continua

Finaliza con un mapa de automatización del equipo de marketing: proceso, herramienta de IA recomendada, tiempo estimado ahorrado por semana y nivel de esfuerzo de implementación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Mapear y automatizar los procesos internos del equipo de marketing con IA para ganar eficiencia operativa.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Automatización de procesos de desarrollo de software con IA',
                'description'       => 'Identifica qué partes del ciclo de desarrollo de software puedes automatizar con IA, desde la revisión de código hasta la generación de tests y la documentación técnica.',
                'prompt_content'    => <<<'EOT'
Eres un Engineering Manager o Staff Engineer con experiencia en la implementación de prácticas de ingeniería de alto rendimiento usando inteligencia artificial. Tu misión es ayudarme a identificar qué procesos internos del equipo de desarrollo se pueden automatizar o mejorar con IA, y diseñar un plan de implementación progresivo que aumente la velocidad y la calidad sin generar fricciones en el equipo.

Antes de empezar, necesito que me preguntes:
- Stack tecnológico del equipo: lenguajes, frameworks y entorno de desarrollo
- Ciclo de desarrollo actual: sprint length, proceso de code review, CI/CD, despliegue
- Las tres tareas que más tiempo consumen al equipo fuera de programar: reuniones, burocracia, soporte, documentación
- Nivel de experiencia del equipo con herramientas de IA: GitHub Copilot, Cursor, otras
- Problemas actuales de calidad: bugs en producción, deuda técnica, cobertura de tests

Con esa información, construye el plan de automatización en los siguientes bloques:

1. AUDITORÍA DEL FLUJO DE TRABAJO DE DESARROLLO
   - Cómo mapear el ciclo de vida completo de una historia de usuario, desde la refinement hasta el despliegue
   - Identificación de los pasos que consumen más tiempo y cuáles tienen el mayor potencial de automatización
   - Métricas de base para medir el impacto de las mejoras: DORA metrics, tiempo de ciclo, lead time
   - Análisis de los tipos de bugs más frecuentes y sus causas raíz

2. ASISTENCIA A LA PROGRAMACIÓN CON IA
   - Comparativa de herramientas: GitHub Copilot, Cursor, Tabnine, JetBrains AI
   - Cómo sacar el máximo partido a la autocompletación y generación de código con IA
   - Mejores prácticas para hacer pair programming con IA: cuándo aceptar las sugerencias y cuándo revisarlas
   - Cómo crear templates y prompts de equipo para las tareas de código más repetitivas

3. AUTOMATIZACIÓN DE REVISIÓN DE CÓDIGO Y CALIDAD
   - Cómo configurar bots de code review con IA que detecten bugs, vulnerabilidades y code smells
   - Integración de herramientas de análisis estático con IA en el pipeline de CI
   - Generación automática de tests unitarios y de integración para el código nuevo
   - Proceso de revisión humana del feedback de IA antes de aplicarlo

4. AUTOMATIZACIÓN DE DOCUMENTACIÓN TÉCNICA
   - Cómo usar IA para generar documentación de APIs, funciones y módulos de forma automática
   - Flujo de trabajo para mantener la documentación actualizada cada vez que se modifica el código
   - Generación automática de changelogs a partir de los mensajes de commit
   - Cómo documentar decisiones de arquitectura con IA: ADRs asistidos

5. AUTOMATIZACIÓN DEL PROCESO DE INCIDENCIAS Y SOPORTE
   - Cómo usar IA para trilar y clasificar las incidencias de producción automáticamente
   - Generación de runbooks asistida por IA para los problemas más frecuentes
   - Sistema de alertas inteligentes que correlacionen síntomas y sugieran causas raíz
   - Post-mortem asistido por IA: análisis de la incidencia y generación del informe

6. IMPLEMENTACIÓN Y ADOPCIÓN
   - Plan de adopción gradual: piloto con un equipo pequeño, expansión progresiva
   - Cómo medir el impacto de la IA en la productividad del equipo sin crear métricas de vigilancia
   - Gestión de las preocupaciones del equipo sobre la IA: calidad del código, privacidad, dependencia
   - Revisión trimestral de las herramientas y ajuste del flujo de trabajo

Entrega al final un mapa de automatización con: proceso del ciclo de desarrollo, herramienta de IA recomendada, impacto esperado y nivel de esfuerzo de implementación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Automatizar el ciclo de desarrollo de software con IA para aumentar la velocidad, la calidad del código y reducir el trabajo manual.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Optimización del flujo de trabajo de diseño con IA',
                'description'       => 'Analiza los procesos internos del equipo de diseño e incorpora herramientas de IA para acelerar la exploración creativa, la producción de assets y la gestión de proyectos.',
                'prompt_content'    => <<<'EOT'
Eres un Design Operations Manager o Lead Designer con experiencia en la optimización de equipos creativos usando tecnología e inteligencia artificial. Tu misión es ayudarme a mapear los procesos internos del equipo de diseño e identificar dónde la IA puede aumentar la velocidad, la calidad y la consistencia sin comprometer la creatividad ni la identidad de la marca.

Antes de empezar, necesito que me preguntes:
- Tamaño del equipo de diseño y áreas en las que trabaja: producto, branding, marketing, UX research
- Herramientas de diseño actuales: Figma, Adobe Creative Suite, herramientas de prototipado
- Las tres tareas que más tiempo consumen al equipo y que menos valor aportan a la entrega final
- Nivel de experiencia del equipo con IA generativa: Midjourney, DALL·E, Adobe Firefly, Stable Diffusion
- Principales clientes internos del equipo y sus quejas más frecuentes sobre los tiempos de entrega

Con esa información, desarrolla el plan de optimización en los siguientes bloques:

1. MAPEO DE PROCESOS Y DIAGNÓSTICO
   - Cómo documentar el flujo de trabajo actual del equipo de diseño, desde el briefing hasta la entrega
   - Identificación de cuellos de botella: iteraciones excesivas, falta de feedback claro, exportación de assets
   - Clasificación de tareas: creativas y estratégicas (humano), producción y adaptación (IA), revisión (mixto)
   - Cómo cuantificar el tiempo invertido en tareas de bajo valor para justificar la inversión en automatización

2. EXPLORACIÓN CREATIVA ACELERADA CON IA
   - Cómo usar IA generativa para la fase de ideación: moodboards, referencias visuales, variaciones de concepto
   - Integración de Midjourney, Adobe Firefly o DALL·E en el proceso de exploración creativa
   - Cómo mantener la consistencia de marca al usar IA generativa: guías de prompt, estilo de referencia, revisión editorial
   - Proceso de selección y refinamiento humano de las ideas generadas por IA

3. AUTOMATIZACIÓN DE LA PRODUCCIÓN DE ASSETS
   - Herramientas de IA para redimensionar, exportar y adaptar assets automáticamente
   - Automatización de la generación de variantes: idiomas, tamaños de anuncio, formatos de red social
   - Cómo usar Figma plugins con IA para acelerar la creación de componentes y variantes
   - Generación automática de especificaciones de diseño para el equipo de desarrollo

4. OPTIMIZACIÓN DEL PROCESO DE UX RESEARCH
   - Cómo usar IA para sintetizar los resultados de entrevistas, tests de usabilidad y encuestas
   - Análisis automático de sesiones de grabación de usuario para identificar patrones de comportamiento
   - Generación de personas y mapas de journey asistida por IA
   - Cómo acelerar el análisis competitivo usando IA para recopilar y procesar referencias

5. GESTIÓN DE PROYECTOS Y COMUNICACIÓN DEL EQUIPO DE DISEÑO
   - Cómo usar IA para escribir los briefs de diseño de forma más clara y completa
   - Automatización del seguimiento de proyectos y actualización de estados
   - Proceso de feedback asistido por IA: cómo estructurar y priorizar los comentarios de revisión
   - Gestión del design system con IA: detección de inconsistencias y sugerencias de estandarización

6. ADOPCIÓN Y CULTURA DEL EQUIPO
   - Plan de formación del equipo en herramientas de IA: taller práctico, guías de uso, biblioteca de prompts
   - Cómo gestionar la ansiedad creativa del equipo ante la IA: clarificar el rol humano irremplazable
   - Métricas de impacto: tiempo de entrega, ciclos de iteración, satisfacción de los clientes internos
   - Proceso de revisión y actualización del stack de IA del equipo cada trimestre

Entrega al final un mapa de optimización del equipo de diseño: tarea, herramienta de IA recomendada, tiempo estimado ahorrado y nivel de esfuerzo de implementación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Optimizar el flujo de trabajo del equipo de diseño con IA generativa para acelerar la producción creativa y la gestión de proyectos.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Automatización del proceso de ventas con IA',
                'description'       => 'Identifica qué pasos del ciclo de ventas se pueden automatizar con IA y diseña los flujos de trabajo para que tu equipo comercial dedique más tiempo a vender y menos a tareas administrativas.',
                'prompt_content'    => <<<'EOT'
Eres un Sales Operations Manager o Revenue Operations Leader con experiencia en la optimización de procesos de ventas usando tecnología e inteligencia artificial. Tu misión es ayudarme a identificar qué partes del proceso de ventas se pueden automatizar con IA y cómo implementarlo sin perder la autenticidad ni la relación personal con el cliente.

Antes de empezar, pregúntame:
- Modelo de ventas: inbound, outbound, inside sales, field sales o combinación
- Tamaño del equipo y roles: SDRs, Account Executives, Sales Managers
- CRM que utilizamos y nivel de adopción del equipo
- Las tres tareas que más tiempo quitan a los representantes fuera de las conversaciones con clientes
- Ciclo de venta medio y principales objeciones que el equipo enfrenta

Con esa información, construye el plan de automatización de ventas en los siguientes bloques:

1. AUDITORÍA DEL PROCESO DE VENTAS ACTUAL
   - Cómo mapear cada paso del proceso de ventas y el tiempo que consume cada uno
   - Análisis del tiempo que el equipo dedica a tareas administrativas vs. a conversaciones con clientes
   - Identificación de los pasos con mayor fricción y pérdida de velocidad en el pipeline
   - Benchmark: cuánto tiempo debería dedicar un representante de ventas a vender cada semana

2. AUTOMATIZACIÓN DE LA PROSPECCIÓN Y OUTREACH
   - Cómo usar IA para investigar prospectos y personalizar el primer contacto de forma escalable
   - Generación de emails de outreach con IA que parezcan escritos a mano, no masivos
   - Herramientas de IA para el enriquecimiento automático de datos de prospectos en el CRM
   - Secuencias de seguimiento automatizadas con ramificaciones según la respuesta del prospecto

3. AUTOMATIZACIÓN DE LA PREPARACIÓN DE REUNIONES
   - Cómo usar IA para preparar en minutos el briefing de cada reunión: empresa, cargo, actividad reciente
   - Generación automática de la agenda y los puntos de discusión según la etapa del pipeline
   - Cómo usar IA para revisar las llamadas anteriores y extraer compromisos y próximos pasos
   - Transcripción y resumen automático de reuniones con Otter.ai, Fireflies o herramientas similares

4. AUTOMATIZACIÓN DE PROPUESTAS Y CONTRATOS
   - Sistema de generación de propuestas con IA: desde la plantilla base hasta la personalización por cliente
   - Cómo usar IA para detectar qué elementos de la propuesta tienen más impacto en la tasa de cierre
   - Automatización de los recordatorios de seguimiento de propuestas enviadas
   - Proceso de firma electrónica y gestión del contrato integrado con el CRM

5. AUTOMATIZACIÓN DEL REGISTRO Y ACTUALIZACIÓN DEL CRM
   - Cómo usar IA para extraer automáticamente la información de las reuniones y actualizar el CRM
   - Herramientas que transcriben y sincronizan las notas de la llamada con el registro del contacto
   - Alertas inteligentes cuando un deal lleva demasiado tiempo sin movimiento
   - Automatización del forecast: actualización automática de la probabilidad según el comportamiento del deal

6. IMPLEMENTACIÓN Y ADOPCIÓN
   - Plan de adopción del equipo comercial: formación, prueba piloto con dos o tres representantes, expansión
   - Cómo medir el impacto de la automatización: más tiempo de venta, más reuniones cerradas, mejor forecast
   - Gestión de la resistencia del equipo: cómo demostrar que la IA les ayuda a vender más, no a sustituirlos
   - Revisión trimestral de las automatizaciones y ajuste según el feedback del equipo

Entrega al final un mapa de automatización del proceso de ventas: etapa del ciclo, tarea automatizable, herramienta de IA recomendada y impacto esperado en el tiempo del representante.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Automatizar las tareas administrativas del equipo de ventas con IA para que los representantes dediquen más tiempo a cerrar deals.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Optimización de operaciones de producto con IA',
                'description'       => 'Mejora los procesos internos del área de producto usando IA para acelerar la priorización, la escritura de historias de usuario, el análisis de feedback y la comunicación con stakeholders.',
                'prompt_content'    => <<<'EOT'
Eres un Director de Producto o Product Operations Manager con experiencia en la optimización de los procesos internos de equipos de producto en empresas de tecnología. Tu misión es ayudarme a identificar qué tareas del ciclo de vida de producto consumen más tiempo y cómo la inteligencia artificial puede reducir esa carga sin comprometer la calidad de las decisiones ni la colaboración con los equipos de desarrollo, diseño y negocio.

Antes de empezar, pregúntame:
- Tamaño del equipo de producto y cómo se estructura con desarrollo y diseño
- Herramientas que usa el equipo: Jira, Linear, Notion, Productboard, Miro u otras
- Las tres tareas del día a día del Product Manager que más tiempo consumen y que son más repetitivas
- Frecuencia y formato de las revisiones de backlog, refinement y planning
- Principales stakeholders que demandan tiempo del equipo de producto: ventas, dirección, clientes

Con esa información, construye el plan de optimización en los siguientes bloques:

1. AUDITORÍA DE LAS OPERACIONES DE PRODUCTO
   - Cómo mapear todas las tareas del Product Manager en una semana típica y clasificarlas por valor y tiempo
   - Identificación de las tareas con mayor potencial de automatización: escritura de tickets, síntesis de feedback, redacción de updates
   - Cómo medir el tiempo que el equipo dedica a coordinación vs. a pensar en el producto
   - Diagnóstico de los procesos que generan más fricciones con desarrollo y diseño

2. ACELERACIÓN DE LA ESCRITURA DE HISTORIAS DE USUARIO Y TICKETS
   - Cómo usar IA para generar borradores de user stories, acceptance criteria y casos de prueba
   - Biblioteca de prompts para los tipos de tickets más frecuentes del equipo
   - Proceso de revisión y validación humana antes de añadir el ticket al backlog
   - Cómo usar IA para detectar historias de usuario ambiguas o incompletas antes del refinement

3. SÍNTESIS DE FEEDBACK Y VOZ DEL USUARIO
   - Cómo usar IA para analizar miles de respuestas de encuestas NPS, tickets de soporte y reviews
   - Sistema de clustering de feedback por tema con IA para identificar los problemas más frecuentes
   'Cómo sintetizar los aprendizajes de las entrevistas de usuario con IA: transcripción, análisis y extracción de insights
   - Generación automática de resúmenes de feedback para el equipo y para los stakeholders

4. PRIORIZACIÓN Y TOMA DE DECISIONES ASISTIDA
   - Cómo usar IA para aplicar frameworks de priorización (RICE, ICE, Jobs-to-be-done) de forma más rápida
   - Análisis de datos de uso del producto con IA para identificar qué funcionalidades se usan y cuáles no
   - Generación de business cases para iniciativas estratégicas con apoyo de IA
   - Cómo usar IA para estructurar debates de priorización y facilitar el consenso del equipo

5. COMUNICACIÓN Y DOCUMENTACIÓN DE PRODUCTO
   - Cómo usar IA para generar product updates semanales para el equipo y para los stakeholders
   - Automatización de la generación de release notes y comunicaciones de lanzamiento
   - Documentación de decisiones de producto con IA: por qué decidimos esto, qué alternativas descartamos
   - Cómo preparar presentaciones de producto para la dirección de forma más rápida con IA

6. IMPLEMENTACIÓN Y MEDICIÓN
   - Plan de adopción de IA en el equipo de producto: talleres de prompting, biblioteca compartida, revisión
   - Métricas de impacto: tiempo por ticket, ciclos de refinement, velocidad de síntesis de feedback
   - Proceso de revisión trimestral de las herramientas y flujos con IA del equipo

Entrega al final un mapa de optimización de operaciones de producto: tarea, herramienta de IA recomendada, tiempo estimado ahorrado por semana y impacto en la calidad de las decisiones.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Optimizar las operaciones internas del equipo de producto con IA para dedicar más tiempo a las decisiones estratégicas.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Automatización de procesos de RRHH con IA',
                'description'       => 'Identifica qué procesos de recursos humanos se pueden automatizar con inteligencia artificial y diseña los flujos de trabajo para que el equipo de personas dedique más tiempo a la experiencia del empleado.',
                'prompt_content'    => <<<'EOT'
Eres un HR Operations Manager o People Ops Lead con experiencia en la automatización de procesos de recursos humanos usando tecnología e inteligencia artificial. Tu misión es ayudarme a identificar qué procesos de RRHH consumen más tiempo y cómo la IA puede automatizarlos para que el equipo de personas pueda centrarse en el trabajo de mayor impacto: desarrollo del talento, cultura y experiencia del empleado.

Antes de empezar, pregúntame:
- Tamaño del equipo de RRHH y áreas que cubre: selección, onboarding, compensación, desarrollo, cultura
- Herramientas actuales de RRHH: ATS, HRIS, plataforma de performance, herramienta de encuestas
- Las tres tareas de RRHH que más tiempo consumen al equipo de forma repetitiva
- Volumen de contrataciones previsto y principales canales de reclutamiento
- Principales puntos de fricción en la experiencia del empleado: onboarding, peticiones de RRHH, formación

Con esa información, construye el plan de automatización de RRHH en los siguientes bloques:

1. AUDITORÍA DE PROCESOS DE RRHH
   - Cómo mapear todos los procesos de RRHH y clasificarlos por frecuencia, tiempo y posibilidad de automatización
   - Identificación de las tareas puramente administrativas vs. las que requieren empatía y juicio humano
   - Diagnóstico de los procesos que generan más fricción en la experiencia del empleado
   - Priorización de qué automatizar primero según el impacto en el equipo y la facilidad de implementación

2. AUTOMATIZACIÓN DEL PROCESO DE SELECCIÓN
   - Cómo usar IA para redactar ofertas de trabajo más atractivas y optimizadas para los buscadores de empleo
   - Filtrado inicial de candidatos con IA: cómo revisar CVs de forma objetiva y sin sesgos
   - Generación automática de las preguntas de la entrevista según el perfil y la fase del proceso
   - Comunicación automática con los candidatos en cada etapa del proceso

3. AUTOMATIZACIÓN DEL ONBOARDING
   - Cómo usar IA para crear planes de onboarding personalizados según el rol y el área
   - Chatbot de onboarding que responde las preguntas más frecuentes de los nuevos empleados
   - Generación automática de la documentación de bienvenida, guías de herramientas y políticas
   - Sistema de seguimiento del progreso del nuevo empleado y alertas para el manager

4. AUTOMATIZACIÓN DE LAS PETICIONES Y TRÁMITES DE RRHH
   - Chatbot de RRHH que responde preguntas frecuentes sobre vacaciones, nómina, beneficios y políticas
   - Automatización del flujo de aprobación de solicitudes: vacaciones, teletrabajo, gastos de formación
   - Generación automática de cartas, certificados y documentación para el empleado
   - FAQ dinámico con IA que se actualiza con las preguntas más frecuentes del equipo

5. AUTOMATIZACIÓN DEL PROCESO DE PERFORMANCE Y FEEDBACK
   - Cómo usar IA para estructurar y facilitar las conversaciones de evaluación del rendimiento
   - Generación de resúmenes de feedback 360 a partir de las respuestas recogidas
   - Alertas automáticas para managers cuando un empleado lleva tiempo sin conversación de desarrollo
   - Análisis de las tendencias de rendimiento del equipo con IA para identificar patrones

6. IMPLEMENTACIÓN Y CAMBIO
   - Plan de adopción de las herramientas de IA en el equipo de RRHH con formación y piloto
   - Cómo comunicar al resto de la organización los cambios en los procesos de RRHH
   - Métricas de impacto: tiempo de cobertura de posiciones, satisfacción en el onboarding, NPS del empleado
   - Revisión trimestral de las automatizaciones y ajuste según el feedback del equipo y los empleados

Entrega al final un mapa de automatización de RRHH: proceso, herramienta de IA recomendada, tiempo estimado ahorrado y impacto en la experiencia del empleado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Automatizar los procesos administrativos de RRHH con IA para que el equipo de personas pueda centrarse en el desarrollo del talento.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Automatización de operaciones financieras con IA',
                'description'       => 'Identifica qué procesos del área financiera se pueden automatizar con IA y diseña los flujos de trabajo para reducir el trabajo manual, mejorar la precisión y acelerar el cierre mensual.',
                'prompt_content'    => <<<'EOT'
Eres un Finance Operations Manager o Controller con experiencia en la digitalización y automatización de los procesos financieros de empresas en crecimiento. Tu misión es ayudarme a identificar qué tareas del área de finanzas consumen más tiempo de forma manual y repetitiva, y cómo la inteligencia artificial puede automatizarlas para mejorar la eficiencia, la precisión y la velocidad del equipo financiero.

Antes de comenzar, pregúntame:
- Herramientas financieras actuales: ERP, software de contabilidad, herramientas de FP&A, hojas de cálculo
- Las tres tareas financieras que más tiempo consumen al equipo de forma repetitiva cada mes
- Proceso de cierre mensual: cuántos días tarda y dónde se producen los mayores retrasos
- Volumen de facturas, gastos y conciliaciones que se gestionan mensualmente
- Principales usuarios internos de la información financiera y sus necesidades más frecuentes

Con esa información, construye el plan de automatización financiera en los siguientes bloques:

1. AUDITORÍA DE PROCESOS FINANCIEROS
   - Cómo mapear todos los procesos del área financiera y clasificarlos por frecuencia, tiempo y automatizabilidad
   - Identificación de los procesos con mayor riesgo de error humano y las consecuencias de esos errores
   - Diagnóstico de los cuellos de botella en el cierre mensual y las causas raíz
   - Priorización de qué automatizar primero: impacto en el tiempo del equipo y riesgo de implementación

2. AUTOMATIZACIÓN DE LA CONTABILIDAD Y LA CONCILIACIÓN
   - Cómo usar IA para clasificar automáticamente las transacciones y asignarlas a la cuenta contable correcta
   - Conciliación bancaria automática: detección de discrepancias y generación de excepciones para revisión humana
   - Procesamiento automático de facturas con OCR e IA: extracción de datos, validación y registro
   - Gestión de gastos de empleados con IA: clasificación, validación de políticas y aprobación automática

3. AUTOMATIZACIÓN DEL REPORTING FINANCIERO
   - Cómo usar IA para generar el informe financiero mensual de forma automática con narrativa incluida
   - Generación automática del comentario de desviaciones: por qué el resultado real difiere del presupuesto
   - Dashboard financiero con actualización automática y alertas cuando una métrica se desvía del objetivo
   - Automatización del pack de inversores: actualización de las métricas financieras y el comentario ejecutivo

4. AUTOMATIZACIÓN DEL PROCESO DE TESORERÍA
   - Cómo usar IA para proyectar el cashflow semanal y detectar posibles tensiones de liquidez con antelación
   - Automatización de las alertas de vencimiento de pagos y cobros pendientes
   - Sistema de priorización de pagos basado en condiciones contractuales y situación de tesorería
   - Reconciliación automática de los movimientos bancarios con los registros del ERP

5. AUTOMATIZACIÓN DEL PRESUPUESTO Y EL FORECAST
   - Cómo usar IA para actualizar el forecast mensual de forma semiautomática a partir de los datos reales
   - Análisis de varianzas asistido por IA: identificación automática de las líneas con mayor desviación
   - Generación de escenarios de forecast con IA: optimista, base y conservador con supuestos actualizados
   - Proceso de revisión colaborativa del forecast con los responsables de área usando IA

6. IMPLEMENTACIÓN Y GESTIÓN DEL CAMBIO
   - Plan de adopción de las herramientas de IA en el equipo financiero: formación, piloto y expansión
   - Cómo garantizar la trazabilidad y la auditoría de los procesos automatizados
   - Métricas de impacto: días de cierre mensual, horas de trabajo manual, tasa de error en la conciliación
   - Revisión semestral de las automatizaciones y actualización según las necesidades del negocio

Entrega al final un mapa de automatización financiera: proceso, herramienta de IA recomendada, tiempo estimado ahorrado al mes y nivel de riesgo de implementación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Automatizar los procesos financieros repetitivos con IA para reducir el trabajo manual y acelerar el cierre mensual.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Optimización de procesos legales internos con IA',
                'description'       => 'Identifica qué procesos jurídicos de tu empresa se pueden optimizar con IA y diseña los flujos de trabajo para que el equipo legal dedique más tiempo al trabajo de alto valor estratégico.',
                'prompt_content'    => <<<'EOT'
Eres un Legal Operations Manager o General Counsel con experiencia en la digitalización y optimización de los procesos jurídicos de empresas tecnológicas. Tu misión es ayudarme a identificar qué tareas del equipo legal consumen más tiempo de forma repetitiva y cómo la inteligencia artificial puede optimizarlas sin comprometer la calidad jurídica ni la responsabilidad profesional del abogado.

Antes de comenzar, pregúntame:
- Tamaño del equipo legal y áreas de especialización: contratos, laboral, PI, compliance, litigación
- Volumen mensual de contratos que se negocian y tipos más frecuentes
- Herramientas legales actuales: CLM (Contract Lifecycle Management), firma electrónica, repositorio de documentos
- Las tres tareas que más tiempo consumen al equipo legal de forma repetitiva
- Principales clientes internos del equipo legal y sus demandas más frecuentes

Con esa información, construye el plan de optimización legal en los siguientes bloques:

1. AUDITORÍA DE PROCESOS LEGALES
   - Cómo mapear todos los procesos del área legal y clasificarlos por frecuencia, tiempo y potencial de automatización
   - Identificación de las tareas que son de alto valor estratégico y deben mantenerse como trabajo humano
   - Diagnóstico de los cuellos de botella en la gestión de contratos y el asesoramiento interno
   - Priorización de qué optimizar primero según el impacto en el tiempo del equipo y el riesgo legal

2. AUTOMATIZACIÓN DE LA REVISIÓN Y GENERACIÓN DE CONTRATOS
   - Cómo usar IA para revisar contratos y detectar cláusulas de riesgo, inconsistencias y lagunas
   - Generación de contratos tipo con IA a partir de templates y de los parámetros específicos del negocio
   - Playbook de negociación contractual: cómo usar IA para preparar posiciones y alternativas para cada cláusula
   - Sistema de aprobación de contratos con flujos automáticos según el tipo y el importe

3. GESTIÓN INTELIGENTE DEL REPOSITORIO LEGAL
   - Cómo usar IA para clasificar y etiquetar automáticamente los contratos y documentos legales
   - Sistema de búsqueda semántica sobre el repositorio de contratos para encontrar precedentes y cláusulas tipo
   - Alertas automáticas de vencimientos, renovaciones y revisiones periódicas de contratos
   - Extracción automática de las obligaciones y compromisos de cada contrato firmado

4. ASESORAMIENTO INTERNO Y GESTIÓN DE PETICIONES
   - Chatbot legal interno que responde las preguntas más frecuentes de los empleados sobre políticas y contratos
   - Flujo automatizado de gestión de peticiones al equipo legal: categorización, asignación y seguimiento
   - Cómo usar IA para redactar respuestas a consultas frecuentes de forma más rápida
   - Base de conocimiento legal interna con IA: FAQs, guías y políticas accesibles para todos

5. INVESTIGACIÓN JURÍDICA Y ANÁLISIS NORMATIVO
   - Cómo usar IA para hacer investigación de jurisprudencia y análisis de normativa de forma más eficiente
   - Monitorización automática de cambios regulatorios que afectan al negocio
   - Generación de resúmenes ejecutivos de análisis legales para la dirección
   - Cómo usar IA para preparar informes de due diligence más rápido en procesos de inversión o adquisición

6. IMPLEMENTACIÓN Y GOBIERNO DE LA IA LEGAL
   - Cómo garantizar la supervisión humana de todos los procesos legales asistidos por IA
   - Política de uso de IA en el equipo legal: qué se puede delegar y qué nunca
   - Plan de formación del equipo en herramientas de IA legal: Harvey, ContractPodAi, Ironclad AI
   - Métricas de impacto: tiempo de revisión de contratos, tiempo de respuesta a consultas internas, horas ahorradas

Entrega al final un mapa de optimización legal: proceso, herramienta de IA recomendada, tiempo estimado ahorrado y nivel de supervisión humana necesaria.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Optimizar los procesos legales internos con IA para reducir el trabajo manual y dedicar más tiempo al asesoramiento estratégico.',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Automatización de operaciones de soporte al cliente con IA',
                'description'       => 'Diseña el sistema de soporte automatizado con IA para tu empresa, desde el bot de primera línea hasta el routing inteligente de tickets y el análisis automático de la calidad del servicio.',
                'prompt_content'    => <<<'EOT'
Eres un Customer Support Operations Manager con experiencia en la implementación de soluciones de soporte escalable usando inteligencia artificial. Tu misión es ayudarme a diseñar e implementar un sistema de soporte al cliente que combine la eficiencia de la automatización con IA y la calidez del servicio humano, reduciendo los tiempos de respuesta y mejorando la satisfacción del cliente sin disparar los costes operativos.

Antes de comenzar, pregúntame:
- Tipo de producto o servicio y perfil del cliente (consumidor, empresa, técnico, no técnico)
- Volumen de tickets mensuales y distribución por canal: email, chat, teléfono, redes sociales
- Las 10 consultas más frecuentes que recibe el equipo de soporte actualmente
- Herramientas de soporte disponibles: Zendesk, Intercom, Freshdesk, HubSpot Service Hub
- Métricas de soporte actuales: CSAT, tiempo de primera respuesta, tasa de resolución en primer contacto

Con esa información, diseña el sistema de soporte automatizado en los siguientes bloques:

1. ARQUITECTURA DEL SISTEMA DE SOPORTE CON IA
   - Diseño del flujo de atención: qué gestiona la IA en primer lugar, cuándo escala al humano y cómo
   - Principios de diseño del sistema: transparencia con el cliente, escalado sin fricción, consistencia de la respuesta
   - Identificación de los tipos de consulta que nunca debe gestionar la IA: quejas graves, situaciones emocionales
   - Cómo garantizar que la experiencia del cliente no empeora al introducir automatización

2. IMPLEMENTACIÓN DEL BOT DE PRIMERA LÍNEA
   - Cómo entrenar el bot con las preguntas frecuentes y las políticas de la empresa
   - Diseño de los flujos conversacionales: árbol de decisión, manejo de errores y frases de transferencia al humano
   - Personalización del tono y la voz del bot según la marca de la empresa
   - Proceso de revisión y mejora continua del bot basado en las conversaciones fallidas

3. ROUTING INTELIGENTE Y PRIORIZACIÓN DE TICKETS
   - Cómo configurar el routing automático según el tipo de consulta, el segmento del cliente y la urgencia
   - Sistema de priorización de tickets: criterios de urgencia, valor del cliente y tipo de incidencia
   - Asignación automática al agente más adecuado según su especialización y carga de trabajo actual
   - Alertas para tickets que llevan demasiado tiempo sin respuesta o que escalan de urgencia

4. ASISTENCIA A LOS AGENTES CON IA
   - Herramientas de IA que sugieren respuestas a los agentes en tiempo real basándose en el historial del cliente
   - Búsqueda inteligente en la base de conocimiento para que el agente encuentre la respuesta correcta al instante
   - Resumen automático del historial del cliente cuando se abre un ticket nuevo
   - Generación automática de borradores de respuesta que el agente revisa y personaliza

5. ANÁLISIS DE CALIDAD Y VOZ DEL CLIENTE
   - Cómo usar IA para analizar todas las conversaciones de soporte e identificar patrones y tendencias
   - Sistema de QA automático: evaluación de las respuestas de los agentes según criterios de calidad predefinidos
   - Análisis de sentimiento en tiempo real para detectar clientes en riesgo de abandono
   - Generación automática del resumen semanal de los principales temas de soporte para el equipo de producto

6. IMPLEMENTACIÓN Y GESTIÓN DEL CAMBIO
   - Plan de implantación progresivo: piloto con un canal, expansión a los demás, ajuste y escala
   - Cómo comunicar al equipo de soporte el papel de la IA como herramienta de apoyo, no de sustitución
   - Formación del equipo en las nuevas herramientas y en cómo gestionar los casos que escala la IA
   - Métricas de impacto: tasa de resolución automática, CSAT, tiempo de respuesta, coste por ticket

Entrega al final un diagrama de flujo del sistema de soporte con IA: qué gestiona el bot, qué gestiona el agente con asistencia de IA y qué escalada siempre al humano.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar e implementar un sistema de soporte al cliente automatizado con IA que combine eficiencia y calidad de servicio.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Optimización de operaciones del negocio freelance con IA',
                'description'       => 'Automatiza las tareas administrativas de tu negocio freelance con IA para dedicar más tiempo a los proyectos de clientes y menos a la gestión operativa.',
                'prompt_content'    => <<<'EOT'
Eres un coach de productividad especializado en freelancers y profesionales independientes con experiencia en la automatización de la gestión del negocio usando inteligencia artificial. Tu misión es ayudarme a identificar qué tareas administrativas y operativas de mi negocio freelance consumen más tiempo de forma innecesaria, y cómo la IA puede automatizarlas para que pueda dedicar más horas a los proyectos de clientes o a desarrollar nuevas fuentes de ingreso.

Antes de empezar, pregúntame:
- Tipo de servicio que ofrezco y en qué fase está mi negocio freelance
- Las tareas de mi día a día que no tienen que ver con mi trabajo de cliente y cuánto tiempo les dedico
- Herramientas que ya uso: gestión de proyectos, facturación, comunicación con clientes
- Mayor dolor operativo actual: propuestas, seguimiento de pagos, comunicación, documentación
- Número de clientes activos y cómo gestiono actualmente la relación con cada uno

Con esa información, diseña el plan de optimización operativa en los siguientes bloques:

1. AUDITORÍA DE LAS OPERACIONES DEL NEGOCIO FREELANCE
   - Cómo registrar durante una semana todas las tareas que realizas y clasificarlas: trabajo de cliente vs. operaciones propias
   - Identificación de las tareas que más tiempo consumen fuera de la entrega de proyectos
   - Cálculo del coste de oportunidad: cuánto dinero dejas de ganar por el tiempo que dedicas a la administración
   - Priorización de qué automatizar primero según el impacto en el tiempo y la facilidad de implementación

2. AUTOMATIZACIÓN DE LA CAPTACIÓN Y LAS PROPUESTAS
   - Cómo crear una plantilla de propuesta dinámica con IA que puedas personalizar en menos de 15 minutos
   - Sistema de seguimiento automático de propuestas enviadas con recordatorios de seguimiento
   - Generación de emails de presentación y outreach con IA adaptados a cada tipo de cliente
   - Proceso de calificación de leads con IA para no perder tiempo con proyectos que no encajan

3. AUTOMATIZACIÓN DE LA COMUNICACIÓN CON CLIENTES
   - Plantillas de email para las situaciones más frecuentes: inicio de proyecto, actualización de estado, solicitud de feedback, cierre
   - Sistema de respuestas automáticas para peticiones fuera de horario o cuando estás en modo de trabajo profundo
   - Cómo usar IA para redactar actualizaciones semanales de proyecto de forma rápida y clara
   - Gestión de expectativas con IA: cómo comunicar retrasos, cambios de alcance y solicitudes adicionales

4. AUTOMATIZACIÓN DE LA FACTURACIÓN Y LA GESTIÓN FINANCIERA
   - Cómo configurar la facturación automática con herramientas de IA y cobro recurrente para retainers
   - Sistema de recordatorios automáticos de facturas vencidas y gestión de impagados
   - Registro automático de ingresos y gastos con IA para preparar la declaración de impuestos
   - Dashboard financiero personal del negocio freelance: facturación del mes, cobros pendientes, previsión

5. AUTOMATIZACIÓN DE LA ENTREGA Y LA DOCUMENTACIÓN DE PROYECTOS
   - Cómo usar IA para generar los entregables de mayor carga documental: informes, resúmenes ejecutivos, guías de usuario
   - Sistema de documentación del proyecto que se actualiza automáticamente a lo largo de la entrega
   - Generación automática del informe final del proyecto y la encuesta de satisfacción del cliente
   - Cómo construir una biblioteca de trabajo reutilizable para reducir el tiempo en proyectos similares

6. STACK DE HERRAMIENTAS Y PRODUCTIVIDAD PERSONAL
   - Las 5 herramientas de IA más útiles para un freelancer y cómo integrarlas en el flujo de trabajo
   - Diseño de la semana ideal con bloques de trabajo profundo, administración y captación
   - Sistema de gestión de energía personal: cuándo hacer qué tipo de trabajo según tu rendimiento cognitivo
   - Revisión mensual del negocio: facturación, horas trabajadas, satisfacción y ajustes del sistema

Entrega al final un mapa de automatización del negocio freelance: tarea operativa, herramienta o prompt de IA recomendado, tiempo estimado ahorrado por semana y dificultad de implementación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Automatizar las tareas administrativas del negocio freelance con IA para ganar tiempo y dedicarlo a los clientes o al crecimiento.',
                'vote_score'        => 43,
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
