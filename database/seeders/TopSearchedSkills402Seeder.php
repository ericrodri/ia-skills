<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills402Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Gestión de campañas de marketing con IA y Notion como centro de operaciones',
                'description'       => 'Construye un sistema en Notion potenciado con IA para planificar, ejecutar y analizar campañas de marketing desde un único lugar.',
                'prompt_content'    => <<<'EOT'
objetivo: Diseñar un sistema completo de gestión de campañas de marketing usando Notion como hub central e IA integrada para automatizar la planificación de contenidos, el seguimiento de resultados y la generación de insights.

contexto del rol:
Eres un marketing operations manager con experiencia en construir sistemas de trabajo escalables. Has visto cómo los equipos de marketing pierden horas cada semana buscando información dispersa en Slack, hojas de cálculo, Google Docs y plataformas de social media. Tu solución: un sistema centralizado en Notion que usa IA para reducir el trabajo manual y mantener a todo el equipo alineado.

tarea principal:
Diseña el sistema completo de gestión de marketing en Notion con IA integrada, especificando qué bases de datos crear, cómo conectarlas, qué automatizaciones configurar y cómo usar la IA en cada fase del trabajo.

arquitectura del sistema en Notion:

Base de datos 1 — Calendario editorial maestro:
Propiedades esenciales: título de la pieza, canal (blog, email, LinkedIn, Instagram, Twitter/X, YouTube), fecha de publicación, estado (idea, en desarrollo, revisión, programado, publicado), responsable, objetivo de negocio vinculado, y métricas de resultado post-publicación.
Vistas necesarias: calendario mensual para visión general, tabla por canal para equilibrar la distribución, tablero kanban por estado para gestión del flujo, y filtro por responsable para cada miembro del equipo.

Base de datos 2 — Hub de campañas:
Cada campaña como página maestra que agrupa: objetivo principal con KPI y target, presupuesto total y distribución por canal, timeline con fases y milestones, contenidos vinculados de la base de datos editorial, resultados y análisis post-campaña, y aprendizajes para campañas futuras.

Base de datos 3 — Biblioteca de assets y recursos:
Guía de marca actualizada, plantillas de copy por tipo de pieza, imágenes y recursos visuales con metadatos para búsqueda, y mensajes clave aprobados por campaña.

integración de IA en el flujo de trabajo:

Uso de IA en la fase de planificación:
Prompt para generar el plan de contenidos del mes siguiente: el sistema toma los objetivos del trimestre, los eventos del calendario, los resultados del mes anterior y el tema central de la campaña, y genera un borrador de calendario editorial con 20-30 ideas de contenido distribuidas por canal, con el objetivo de cada pieza y el momento óptimo de publicación.

Uso de IA en la creación de contenido:
Para cada entrada del calendario, el sistema tiene plantillas de prompt que generan: el brief de la pieza (ángulo, audiencia, mensaje clave, CTA), el primer borrador del copy adaptado al canal y al tono de marca, y 3 variantes del titular o asunto para test A/B. El redactor o el gestor revisa y ajusta, reduciendo el tiempo de creación en un 50-70%.

Uso de IA en el análisis de resultados:
Al final de cada campaña o cada mes, el sistema agrega los datos de rendimiento y usa IA para: identificar qué tipos de contenido funcionaron mejor por canal, detectar patrones en los mejores performers (hora, formato, longitud, tono), generar hipótesis para el próximo período, y redactar el informe de resultados para el equipo o para el cliente.

automatizaciones a configurar (con Notion + Zapier o Make):
- Cuando una pieza pasa a estado "programado": notificación automática al responsable con checklist de publicación
- Cuando se publica una pieza: creación automática de tarea de seguimiento de métricas a los 7 días
- Cuando se añade una nueva idea al calendario: asignación automática de responsable según el canal
- Resumen semanal automatizado: cada lunes a las 9h, resumen del estado de todas las campañas activas

instrucciones de output:
Diseña el sistema completo con:
- Estructura exacta de cada base de datos (propiedades, tipos, opciones de select)
- Fórmulas de Notion útiles para el sistema (días restantes, % de progreso, semáforo de estado)
- Los 5 prompts de IA más útiles para el día a día del equipo de marketing
- Guía de onboarding: cómo implementar el sistema en 2 semanas
- Plantilla de revisión semanal de 15 minutos con el sistema

restricciones:
- El sistema debe funcionar para un equipo de 1-5 personas (no sobredimensionar)
- Las automatizaciones deben ser configurables sin conocimientos de programación
- El sistema no puede depender de IA para decisiones estratégicas, solo para tareas operativas

formato de entrega:
Responde con secciones claramente numeradas. Incluye un ejemplo concreto del calendario editorial de un mes para una marca de software de RRHH, generado con el sistema descrito.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Sistema centralizado de gestión de marketing en Notion con IA integrada para equipos de 1 a 5 personas',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Sprint planning asistido por IA para equipos de desarrollo ágil',
                'description'       => 'Usa IA para preparar, ejecutar y documentar sprints de desarrollo más eficientes: estimaciones, distribución de carga y detección de riesgos antes de empezar.',
                'prompt_content'    => <<<'EOT'
objetivo: Diseñar un sistema de sprint planning asistido por IA que ayude a los equipos de desarrollo ágil a preparar sprints más realistas, detectar riesgos tempranamente y documentar las decisiones de forma que el equipo pueda mejorar sus estimaciones con el tiempo.

contexto del rol:
Eres un Scrum Master o Engineering Manager con experiencia en equipos de 3-10 desarrolladores. Has vivido el ciclo repetitivo de sobrecompromisos en planning, firefighting a mitad de sprint y retrospectivas donde siempre se llega a las mismas conclusiones. Tu objetivo: romper ese ciclo con datos y con IA.

tarea principal:
Diseña el sistema completo de sprint planning asistido por IA, desde la preparación del backlog hasta el cierre del sprint, especificando los prompts exactos a usar en cada momento.

fases del sistema:

Fase 1 — Preparación del backlog antes de la planning (2-3 días antes):
El Engineering Manager o el lead comparte con IA: las historias de usuario candidatas al sprint, la capacidad del equipo (horas disponibles, vacaciones, reducción por reuniones), y el historial de velocidad de los últimos 3-4 sprints.

El prompt de preparación de backlog genera:
- Análisis de cada historia: complejidad estimada, dependencias detectadas, preguntas sin responder que bloquearían el desarrollo
- Detección de historias que son demasiado grandes para el sprint y propuesta de cómo dividirlas
- Identificación de deuda técnica relacionada con las historias candidatas
- Score de riesgo por historia (alto/medio/bajo) con la justificación

Fase 2 — Facilitación de la sesión de planning:
Durante la planning, el facilitador usa IA como herramienta de soporte en tiempo real:
- Para cada historia: prompt que genera las preguntas de clarificación más importantes que el equipo debería resolver antes de estimar
- Para el debate de estimación: cuando hay discrepancia grande entre estimaciones del equipo, prompt que analiza las razones más comunes de esa discrepancia y sugiere preguntas para alinear
- Para el sprint goal: prompt que toma las historias seleccionadas y propone 3 formulaciones del sprint goal que comuniquen el valor del sprint de forma clara

Fase 3 — Distribución de carga y detección de riesgos:
Una vez definido el alcance del sprint, el sistema usa IA para:
- Calcular la distribución de carga por desarrollador según sus áreas de especialización y las historias asignadas
- Detectar cuellos de botella: historias que solo puede hacer una persona o que tienen dependencias externas
- Identificar el camino crítico del sprint (la secuencia de tareas que determina si el sprint termina a tiempo)
- Generar el plan de contingencia: si X historia se bloquea, qué se puede adelantar o reordenar

Fase 4 — Documentación automática de la planning:
Al final de la sesión, el sistema genera automáticamente:
- Acta de sprint: sprint goal, historias comprometidas, criterios de aceptación resumidos, riesgos identificados y mitigaciones acordadas
- Tablero inicial del sprint con las historias organizadas por semana y por desarrollador
- Checklist de dependencias externas y responsable de su seguimiento

Fase 5 — Daily standup asistido:
El sistema mantiene un registro de actualizaciones del equipo y usa IA para:
- Generar el resumen del standup para quien no pudo asistir
- Detectar patrones de bloqueo recurrente (si el mismo desarrollador reporta el mismo bloqueador más de 2 días)
- Actualizar automáticamente el burndown chart y alertar si el sprint va desviado

Fase 6 — Retrospectiva asistida por IA:
Al cierre del sprint, el sistema analiza: velocidad real vs. comprometida, historias no completadas y sus razones, tiempo real invertido vs. estimado por tipo de historia. La IA genera: las tendencias de las últimas 4 retrospectivas, hipótesis sobre causas raíz de los problemas recurrentes, y propuestas de experimentos para el próximo sprint.

instrucciones de output:
Diseña el sistema con:
- Los 8 prompts exactos más importantes (uno por momento clave del ciclo)
- Herramientas necesarias y cómo integrarlas (Jira o Linear + Notion + IA)
- Métricas del sistema: cómo medir si el sprint planning asistido por IA mejora los resultados
- Guía de implementación en 4 sprints: cómo introducir el sistema gradualmente sin disrumpir al equipo

restricciones:
- El sistema nunca decide el alcance del sprint; lo decide el equipo con los datos del sistema
- Las estimaciones de IA son una referencia, no un mandato
- El sistema no reemplaza las ceremonias ágiles; las hace más eficientes
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Mejora del proceso de sprint planning con IA para reducir sobrecompromiso y detectar riesgos temprano',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Gestión de proyectos de diseño con IA: del brief al entregable final',
                'description'       => 'Usa IA y herramientas de gestión para estructurar proyectos de diseño, gestionar revisiones y entregar en plazo sin perder la calidad creativa.',
                'prompt_content'    => <<<'EOT'
objetivo: Construir un sistema de gestión de proyectos de diseño que use IA para automatizar las tareas operativas (estimaciones, gestión de revisiones, comunicación con clientes) y libere al diseñador para concentrarse en el trabajo creativo.

contexto del rol:
Eres un diseñador senior o design lead que ha aprendido a la fuerza que las habilidades de gestión de proyectos son tan importantes como las creativas. Has perdido clientes por mala comunicación, has entregado tarde por subestimar el tiempo de revisiones, y has entregado trabajo que no era lo que el cliente necesitaba por no haber gestionado bien el brief inicial.

tarea principal:
Diseña el sistema completo de gestión de proyectos de diseño con IA, desde la recepción del brief hasta el cierre del proyecto, incluyendo herramientas, prompts y flujos de comunicación.

fases del sistema:

Fase 1 — Recepción y validación del brief:
Cuando llega un nuevo proyecto, antes de aceptarlo o presupuestarlo, el sistema usa IA para analizar el brief del cliente e identificar:
- Ambigüedades que deben resolverse antes de empezar (qué no está definido)
- Señales de scope creep futuro (solicitudes vagas que se expandirán)
- Inconsistencias entre el objetivo declarado y los requerimientos específicos
- Preguntas que el diseñador debe hacer en la reunión de kick-off

El sistema genera automáticamente la lista de preguntas para la reunión de kick-off y el checklist de información necesaria antes de poder presupuestar.

Fase 2 — Estimación y propuesta:
El diseñador introduce los parámetros del proyecto (tipo, complejidad, número de iteraciones incluidas, entregables) y la IA genera:
- Estimación de horas por fase del proyecto con rango (optimista/realista/pesimista)
- Identificación de los factores de riesgo que pueden alargar el proyecto
- Propuesta de estructura de fases con entregables y puntos de revisión
- Recomendación de número de rondas de revisión incluidas según el tipo de proyecto

Fase 3 — Kick-off y configuración del proyecto:
Tras aprobar la propuesta, el sistema genera automáticamente:
- Documento de proyecto en Notion con objetivos, entregables, timeline y reglas de revisión
- Email de kick-off para el cliente con todo lo que necesita saber antes de empezar
- Carpeta de activos del proyecto con estructura estándar
- Hitos de pago vinculados a las fases del proyecto

Fase 4 — Gestión de revisiones:
Este es el punto más crítico. El sistema estructura el proceso de revisión:
- Plantilla de solicitud de feedback para el cliente (con instrucciones de cómo dar feedback accionable)
- IA que procesa el feedback del cliente y lo convierte en lista de cambios priorizada y sin ambigüedades
- Seguimiento de qué cambios están dentro del scope y cuáles son adicionales (para el control de scope creep)
- Comunicación automática cuando se solicitan cambios fuera de scope: propuesta de presupuesto adicional generada por IA

Fase 5 — Comunicación proactiva con el cliente:
El sistema envía automáticamente:
- Update semanal con el estado del proyecto (% de avance por fase)
- Alerta cuando un entregable está listo para revisión
- Recordatorio al cliente cuando una revisión lleva más de X días sin respuesta
- Alerta interna cuando el proyecto se desvía del timeline para tomar acción antes del vencimiento

Fase 6 — Cierre y retrospectiva:
Al entregar el proyecto final:
- Entrega formal con todos los archivos organizados y con guía de uso
- Encuesta de satisfacción del cliente generada por IA (personalizada para el tipo de proyecto)
- Retrospectiva interna: horas reales vs. estimadas, rondas de revisión reales vs. planificadas, aprendizajes para el próximo proyecto similar

instrucciones de output:
Diseña el sistema con:
- Los 10 prompts más útiles para el día a día de un diseñador que gestiona sus propios proyectos
- Plantilla de Notion para gestión de proyectos de diseño (estructura completa)
- Plantillas de emails de comunicación con el cliente para cada fase
- Sistema de control de scope creep: cómo detectarlo y cómo comunicarlo sin dañar la relación
- Guía de estimación por tipo de proyecto (branding, UI, web, motion)

restricciones:
- El sistema no puede reemplazar la relación humana con el cliente
- Las estimaciones de IA son orientativas; el diseñador siempre tiene la última palabra
- Los emails automáticos deben ser revisados antes de enviarse en situaciones delicadas
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema de gestión de proyectos de diseño con IA para diseñadores que gestionan sus propios proyectos',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Pipeline de ventas inteligente con IA y CRM: nunca pierdas un deal por seguimiento',
                'description'       => 'Diseña un sistema de gestión del pipeline de ventas con IA que prioriza automáticamente los deals, genera los próximos pasos y alerta antes de que un deal se enfríe.',
                'prompt_content'    => <<<'EOT'
objetivo: Construir un sistema de gestión del pipeline de ventas que use IA para mantener todos los deals activos con el seguimiento correcto, priorizar el tiempo del comercial en los deals con mayor probabilidad de cierre y detectar señales de riesgo antes de perder una oportunidad.

contexto del rol:
Eres un director comercial o Account Executive con cartera de 30-80 deals activos simultáneos. Sabes que en ventas B2B el problema más frecuente no es la falta de leads sino la falta de seguimiento consistente: los deals se enfrían porque el comercial estaba ocupado, no porque el prospecto no tuviera interés. La IA puede resolver exactamente ese problema.

tarea principal:
Diseña el sistema completo de pipeline con IA, desde la configuración del CRM hasta los prompts de seguimiento, incluyendo cómo el sistema prioriza el trabajo diario del comercial.

arquitectura del sistema:

Configuración del CRM con IA (HubSpot, Salesforce o Pipedrive):
El sistema mantiene para cada deal: etapa actual del pipeline con fecha de entrada, próxima acción comprometida con fecha, última interacción (tipo, fecha, resumen), score de probabilidad de cierre (calculado por IA), y señales de riesgo detectadas.

El sistema de scoring de deals usa IA para evaluar:
- Engagement del prospecto: frecuencia y calidad de las respuestas
- Velocidad de avance: ¿cuánto tiempo lleva en la etapa actual vs. el promedio histórico?
- Señales de compra: han pedido propuesta, han incluido a un decisor adicional, han preguntado por implementación
- Señales de riesgo: no responde en X días, ha cancelado reuniones, ha pedido "pausar el proceso"

rutina de trabajo diaria asistida por IA:
Cada mañana el sistema genera para el comercial:
- Lista priorizada de deals por trabajar hoy (basada en scoring y próximas acciones vencidas)
- Para cada deal: resumen del estado, la última interacción, el contexto relevante y la acción recomendada para hoy
- Alerta de deals sin actividad en más de X días según la etapa (los tiempos de inactividad crítica varían por etapa)
- Deals que han superado el tiempo promedio de cada etapa y están en riesgo de enfriamiento

prompts de IA para cada momento del ciclo:

Para preparar una llamada de follow-up:
El comercial introduce: el deal, la última interacción, el objetivo de la llamada, y los obstáculos conocidos. La IA genera: 3 ángulos de apertura según el contexto, las preguntas de discovery pendientes, las objeciones más probables con respuestas preparadas, y el paso siguiente concreto a proponer al cierre de la llamada.

Para escribir el email de follow-up post-reunión:
El comercial introduce las notas de la reunión. La IA genera: el email completo con resumen de lo acordado, los compromisos de ambas partes, el siguiente paso con fecha concreta, y el asunto del email. El comercial revisa y envía.

Para reactivar un deal frío:
El comercial selecciona el deal. La IA genera: análisis de por qué probablemente se enfrió, 3 mensajes de reactivación con diferentes ángulos (nuevo ángulo de valor, cambio en el contexto del mercado, recurso de utilidad), y la recomendación de canal (email, LinkedIn, WhatsApp, llamada).

Para preparar la propuesta económica:
El comercial introduce el alcance acordado. La IA genera: el documento de propuesta personalizado basado en la plantilla estándar, incorporando el lenguaje del prospecto, sus prioridades específicas y los casos de uso de su sector.

dashboard de pipeline para el director comercial:
- Forecast del mes y trimestre con probabilidad ponderada por etapa
- Deals en riesgo: los que están en semáforo rojo por inactividad o tiempo en etapa
- Análisis de velocidad del pipeline: comparativa entre comerciales y entre períodos
- Ratio de conversión por etapa y tendencia histórica

instrucciones de output:
Diseña el sistema con:
- Los 6 prompts exactos más útiles para el día a día del comercial
- Configuración de campos y automatizaciones en HubSpot o Pipedrive
- Criterios de scoring de deals: tabla con variables y pesos
- Política de follow-up por etapa: tiempo máximo sin contacto, canal recomendado, tipo de mensaje
- Métricas del sistema: cómo medir si el sistema mejora la tasa de cierre y el ciclo de venta

restricciones:
- El sistema no decide el precio ni los términos de la negociación
- Las comunicaciones con el cliente siempre las revisa el comercial antes de enviar
- El scoring es orientativo: el comercial puede sobrescribir la prioridad con contexto cualitativo
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Gestión proactiva del pipeline de ventas B2B con IA para maximizar la tasa de cierre y reducir deals perdidos por inactividad',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Roadmap de producto asistido por IA: de los datos al plan trimestral',
                'description'       => 'Construye tu roadmap trimestral con IA integrando feedback de usuarios, OKRs del negocio y capacidad del equipo para tomar decisiones de priorización basadas en datos.',
                'prompt_content'    => <<<'EOT'
objetivo: Diseñar un proceso de creación y mantenimiento del roadmap de producto que use IA para procesar y sintetizar datos de múltiples fuentes, generar opciones estratégicas y comunicar las decisiones de priorización al equipo y a los stakeholders.

contexto del rol:
Eres un Product Manager o Head of Product con responsabilidad sobre el roadmap de un producto SaaS con 1.000-50.000 usuarios. Gestionas la tensión constante entre las solicitudes del equipo de ventas, el feedback de usuarios, las iniciativas estratégicas y la capacidad real del equipo de ingeniería. La IA puede ayudarte a estructurar ese caos en decisiones coherentes.

tarea principal:
Diseña el sistema completo de gestión del roadmap con IA, desde la recopilación de inputs hasta la comunicación del plan trimestral.

fases del proceso:

Fase 1 — Recopilación y síntesis de inputs (2 semanas antes del inicio de trimestre):
El sistema agrega información de múltiples fuentes:
- Feedback de usuarios: tickets de soporte, NPS verbatim, entrevistas de usuario transcritas, reviews de app store
- Input de ventas: features más solicitadas en el proceso de venta, razones de pérdida de deals por falta de funcionalidad
- Datos de producto: features más usadas, tasas de activación por flujo, dropouts en el onboarding
- OKRs del trimestre: los objetivos de negocio ya definidos por liderazgo
- Deuda técnica: lista priorizada del equipo de ingeniería

La IA procesa todos estos inputs y genera:
- Top 15 temas por frecuencia e impacto ponderado
- Relación de cada tema con los OKRs del trimestre
- Dependencias entre temas (hacer A permite desbloquear B)
- Score de oportunidad por tema (combinando impacto potencial y esfuerzo estimado)

Fase 2 — Sesión de priorización estratégica:
El PM facilita una sesión con el equipo de liderazgo. La IA actúa como soporte:
- Para cada iniciativa candidata: IA genera el análisis de impacto en OKRs, alternativas consideradas y riesgos
- Para comparar iniciativas: IA usa el framework RICE (Reach, Impact, Confidence, Effort) con los datos disponibles
- Para la decisión de trade-offs: IA presenta los escenarios "si hacemos A no hacemos B" con las consecuencias de cada elección

Fase 3 — Construcción del roadmap:
El sistema genera el roadmap en tres horizontes:
- Ahora (próximas 6 semanas): iniciativas en desarrollo o listas para empezar, con detalle de scope
- Próximo (7-13 semanas): iniciativas priorizadas y en preparación, con diseño en curso
- Después (14+ semanas): iniciativas estratégicas en exploración, sin compromiso de fecha

Para cada iniciativa incluye: problema que resuelve, segmento de usuario beneficiado, métrica de éxito (cómo sabremos que funcionó), OKR al que contribuye, y dependencias técnicas o de diseño.

Fase 4 — Comunicación del roadmap a stakeholders:
El sistema genera versiones del roadmap adaptadas para cada audiencia:
- Para el equipo de ingeniería: roadmap técnico con dependencias y estimaciones
- Para el equipo de ventas: roadmap comercial con fechas tentativas y valor para el cliente
- Para la junta o inversores: roadmap estratégico en viñetas de negocio sin tecnicismos
- Para los usuarios (si aplica): public roadmap en lenguaje de usuario, sin compromisos de fecha exacta

Fase 5 — Mantenimiento semanal del roadmap:
El sistema ayuda al PM a mantener el roadmap actualizado:
- Alerta cuando una iniciativa se desvía del plan y propone ajuste del roadmap
- Revisión quincenal automatizada: ¿siguen siendo válidas las prioridades o ha cambiado el contexto?
- Registro de decisiones: cada cambio al roadmap se documenta con la razón y la fecha, para auditoría y aprendizaje

instrucciones de output:
Diseña el sistema con:
- Los 5 prompts más importantes para el proceso de priorización
- Plantilla de roadmap en Notion o Linear (estructura completa con propiedades)
- Framework de scoring personalizable para diferentes tipos de producto
- Guía de comunicación del roadmap para cada tipo de stakeholder
- Protocolo de gestión de "peticiones urgentes" que llegan mid-trimestre

restricciones:
- El roadmap nunca puede tener compromisos de fecha en el horizonte "después"
- Toda iniciativa debe tener una métrica de éxito definida antes de entrar al horizonte "ahora"
- Las decisiones de priorización las toma siempre el PM, no la IA
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Proceso completo de creación y comunicación del roadmap trimestral de producto con soporte de IA',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Onboarding de nuevos empleados con IA: de la firma al pleno rendimiento',
                'description'       => 'Diseña un proceso de onboarding personalizado con IA que acelere la integración de nuevos empleados y reduzca el tiempo hasta el pleno rendimiento.',
                'prompt_content'    => <<<'EOT'
objetivo: Crear un sistema de onboarding de nuevos empleados que use IA para personalizar el plan de incorporación según el rol y el perfil de cada persona, automatizar la comunicación y el seguimiento, y medir el progreso hacia el pleno rendimiento de forma continua.

contexto del rol:
Eres un HR Business Partner o People Operations Manager en una empresa de 50-500 empleados. Sabes que un onboarding bien ejecutado reduce el tiempo hasta pleno rendimiento de 9 meses a 5-6 meses y multiplica la retención en el primer año. También sabes que la mayoría de los onboardings son una lista de tareas administrativas disfrazada de proceso de integración.

tarea principal:
Diseña el sistema completo de onboarding con IA, desde la semana anterior a la llegada del empleado hasta los 90 días de incorporación.

fases del sistema:

Fase 0 — Pre-boarding (1 semana antes de la llegada):
El sistema usa IA para generar el plan de onboarding personalizado del nuevo empleado basándose en: su rol, nivel de experiencia, equipo al que se incorpora, y resultados esperados en los primeros 30/60/90 días.

El plan incluye:
- Itinerario de la primera semana hora a hora (reuniones, formaciones, tiempo de exploración autónoma)
- Lista de personas clave con las que debe reunirse en los primeros 30 días y el objetivo de cada reunión
- Recursos de aprendizaje priorizados (documentos, vídeos, herramientas) ordenados de más a menos urgente
- Primer proyecto o tarea real que puede completar en las primeras 2 semanas para sentir progreso rápido

El sistema envía automáticamente al nuevo empleado, antes de llegar:
- Email de bienvenida personalizado con el itinerario de su primera semana
- Accesos a los sistemas que puede explorar antes de empezar
- Contexto sobre la empresa, el equipo y el rol en un formato digestible

Fase 1 — Primera semana (inmersión cultural y técnica):
El sistema gestiona la logística del onboarding automáticamente:
- Convocatoria de todas las reuniones del plan de la primera semana
- Recordatorios para los compañeros asignados como buddies o mentores
- Checklist diario para el nuevo empleado y para su manager
- Encuesta de pulso al final de cada día (2 preguntas, 2 minutos): ¿qué fue bien? ¿qué te generó confusión?

La IA procesa las respuestas de las encuestas diarias y alerta al HR y al manager si detecta señales de desconexión o de necesidades no cubiertas.

Fase 2 — Primeros 30 días (ramp-up):
El sistema genera para el manager el plan de 1:1s de onboarding con temas sugeridos para cada semana:
- Semana 1: expectativas del rol y primeras impresiones
- Semana 2: primeros proyectos y recursos necesarios
- Semana 3: feedback bidireccional temprano
- Semana 4: revisión de los primeros 30 días y ajuste del plan

El sistema genera automáticamente el documento de "30 days review": logros de las primeras 4 semanas, brechas identificadas, ajustes al plan de 60 y 90 días.

Fase 3 — 60 y 90 días (integración plena):
Cada 30 días el sistema genera:
- Revisión del progreso contra los objetivos del período
- Encuesta de satisfacción con el onboarding (para mejorar el proceso)
- Plan de desarrollo para el período siguiente
- Evaluación de readiness: indicadores de que el empleado está en pleno rendimiento

Fase 4 — Cierre del onboarding y transfer al proceso regular:
Al cumplir los 90 días, el sistema genera:
- Informe de onboarding completo para RRHH con métricas del proceso
- Plan de desarrollo individual para los próximos 6 meses
- Transferencia al ciclo regular de 1:1s y evaluaciones de desempeño

instrucciones de output:
Diseña el sistema con:
- Estructura de la base de datos de onboarding en Notion (para todos los nuevos empleados)
- Los 5 prompts más importantes para personalizar el plan de onboarding por rol
- Plantillas de emails y comunicaciones automáticas para cada hito
- Métricas del sistema: cómo medir la calidad del onboarding (tiempo a pleno rendimiento, satisfacción, retención a 12 meses)
- Guía de implementación: cómo pasar del onboarding actual a este sistema en 1 mes

restricciones:
- El sistema no puede reemplazar el contacto humano; gestiona la logística para que los humanos tengan más tiempo para la relación
- Las encuestas de pulso deben ser anónimas para garantizar respuestas honestas
- El plan de onboarding es un punto de partida, no un mandato rígido
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema de onboarding personalizado con IA que reduce el tiempo hasta pleno rendimiento de nuevos empleados',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Control presupuestario con IA: del Excel al sistema de alerta temprana',
                'description'       => 'Construye un sistema de control y seguimiento presupuestario con IA que detecta desviaciones antes de que se conviertan en problemas y genera alertas accionables.',
                'prompt_content'    => <<<'EOT'
objetivo: Diseñar un sistema de control presupuestario que use IA para automatizar el seguimiento de desviaciones, detectar patrones de gasto problemáticos antes de que sean críticos y generar alertas accionables para el equipo directivo.

contexto del rol:
Eres un controller financiero o CFO de una empresa de 20-200 empleados con presupuesto anual de 1M€ a 20M€. Has vivido la situación en que a final de trimestre aparecen desviaciones que eran visibles semanas antes pero nadie las procesó a tiempo. Tu objetivo: convertir el control presupuestario de un ejercicio retrospectivo en un sistema de alerta temprana.

tarea principal:
Diseña el sistema completo de control presupuestario con IA, desde la configuración inicial hasta el proceso mensual de cierre y reporting.

arquitectura del sistema:

Configuración inicial — Presupuesto base y KPIs:
El sistema importa el presupuesto anual estructurado por: centro de coste, departamento, categoría de gasto, y mes. Establece los umbrales de alerta para cada categoría: alerta amarilla (desviación > 10%), alerta roja (desviación > 20%). El sistema también registra los estacionalidades esperadas: qué meses el gasto en ciertas categorías es naturalmente más alto.

Proceso de captura de datos (semanal o quincenal):
El sistema se conecta con la contabilidad (Holded, Sage, Xero) o ingesta manualmente los datos de gasto real. La IA realiza automáticamente:
- Clasificación de gastos en la categoría correcta del presupuesto (algunos gastos no categorizados correctamente)
- Detección de gastos inusuales (importes fuera del patrón histórico, proveedores nuevos, categorías no presupuestadas)
- Proyección del cierre mensual basada en el ritmo de gasto actual

Sistema de alertas inteligentes:
Las alertas no son solo sobre desviaciones; la IA contextualiza cada una:
- Alerta con causa probable (si Viajes supera el 130% del presupuesto en marzo, ¿hay un evento o conferencia que lo explique?)
- Alerta con impacto proyectado anual (una desviación del 15% en abril tiene X€ de impacto si se mantiene el resto del año)
- Alerta con opciones de mitigación (qué acciones están disponibles para compensar la desviación)
- Distinción entre desviaciones por timing (gasto adelantado) y desviaciones reales (gasto no presupuestado)

Proceso mensual de cierre asistido por IA:
Al cierre de cada mes, el sistema genera:
- Reconciliación automática de gastos: real vs. presupuesto vs. forecast
- Análisis de varianzas por categoría con explicación de las más significativas
- Actualización del forecast anual: proyección del año completo basada en real acumulado + tendencias
- Identificación de cuentas o centros de coste con desviaciones sistemáticas que requieren revisión del presupuesto

Reporting ejecutivo automatizado:
El sistema genera automáticamente tres formatos de reporte:
- Para el CFO (diario/semanal): dashboard de semáforos por categoría con alertas activas
- Para los responsables de departamento (mensual): reporte de su centro de coste con desviaciones y proyección
- Para el CEO y la junta (mensual): resumen ejecutivo de 1 página con los 3 mensajes clave del mes financiero

Análisis predictivo de riesgo:
La IA identifica categorías de gasto con riesgo elevado de desviación futura basándose en:
- Contratos con cláusulas de revisión de precio próximas
- Gastos variables con tendencia alcista en los últimos 3 meses
- Departamentos que históricamente se desvían en el H2 del año
- Impacto de variables externas conocidas (inflación, tipo de cambio si aplica)

instrucciones de output:
Diseña el sistema con:
- Estructura de la base de datos presupuestaria (categorías, centros de coste, niveles de alerta)
- Los 5 prompts de IA más útiles para el análisis mensual
- Plantilla de dashboard de control presupuestario (en Notion o Google Sheets con IA)
- Protocolo de gestión de desviaciones: quién se notifica, en qué plazo, qué acción se espera
- Guía de implementación: cómo migrar el control presupuestario actual a este sistema sin disrumpir el cierre mensual

restricciones:
- El sistema nunca aprueba gastos ni pagos de forma autónoma
- Los datos financieros deben estar en entorno seguro con acceso controlado por rol
- Las proyecciones siempre incluyen los supuestos sobre los que se calculan
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Sistema de control presupuestario con IA que convierte el seguimiento retroactivo en alertas tempranas accionables',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Gestión de casos legales con IA: desde la apertura hasta el archivo',
                'description'       => 'Diseña un sistema de gestión de asuntos legales con IA que automatice el seguimiento de plazos, la organización documental y la comunicación con clientes.',
                'prompt_content'    => <<<'EOT'
objetivo: Construir un sistema de gestión de asuntos legales que use IA para automatizar las tareas de seguimiento y organización, reducir el riesgo de vencimiento de plazos procesales, y mejorar la comunicación con los clientes durante todo el proceso.

contexto del rol:
Eres un abogado en un despacho de 2 a 15 abogados con una cartera de 50 a 300 asuntos activos. El mayor riesgo de responsabilidad profesional en tu despacho son los plazos procesales no registrados o mal calculados. El mayor generador de insatisfacción de los clientes es la falta de comunicación proactiva sobre el estado de su asunto.

tarea principal:
Diseña el sistema completo de gestión de asuntos con IA, desde la apertura del expediente hasta el archivo, con especial atención al control de plazos y la comunicación con el cliente.

módulos del sistema:

Módulo 1 — Apertura de expediente asistida por IA:
Cuando se abre un nuevo asunto, el sistema genera automáticamente:
- Ficha del cliente con todos los datos relevantes extraídos del formulario de intake
- Resumen del asunto (partes, objeto, primera valoración del riesgo)
- Lista de documentos necesarios para la primera fase del asunto (según el tipo de procedimiento)
- Identificación de los primeros plazos críticos a registrar

La IA analiza la documentación inicial del cliente y genera:
- Cronología de los hechos relevantes
- Preguntas adicionales para el abogado responsable (información que falta para completar la valoración)
- Primera propuesta de estrategia procesal con alternativas

Módulo 2 — Sistema de control de plazos:
Este es el módulo más crítico. El sistema mantiene un registro completo de todos los plazos con:
- Fecha del plazo con la base legal que lo establece
- Fecha de alerta (X días antes, configurable por tipo de plazo)
- Responsable de la acción
- Estado (pendiente, completado, prorrogado)

La IA calcula automáticamente plazos derivados: cuando se registra la notificación de una sentencia, el sistema calcula automáticamente el plazo de recurso, el plazo de firmeza si no se recurre, y las fechas de alerta para cada uno. El sistema nunca asume un plazo; siempre lo registra explícitamente y requiere confirmación del abogado.

Módulo 3 — Organización documental inteligente:
El sistema organiza todos los documentos del expediente con:
- Clasificación automática por tipo (demanda, contestación, providencia, sentencia, contrato, etc.)
- Extracción de metadatos clave (fecha, partes, juzgado, número de procedimiento)
- Generación de resumen de cada documento en 3-5 puntos clave
- Índice del expediente actualizado automáticamente

La IA también detecta: documentos que faltan según el estado procesal del asunto, incoherencias entre documentos (ej. fechas que no cuadran), y documentos que requieren acción del abogado.

Módulo 4 — Comunicación proactiva con el cliente:
El sistema gestiona la comunicación de forma que el cliente siempre esté informado sin necesidad de llamar:
- Update automático cuando hay una resolución, notificación o movimiento relevante en el asunto
- Resumen mensual del estado del asunto para asuntos de larga duración
- Alerta proactiva antes de actuaciones relevantes (vistas, plazos para aportar documentación)
- Todos los updates generados por IA, revisados por el abogado antes de enviarse

Módulo 5 — Reporting y facturación asistida:
El sistema registra automáticamente el tiempo invertido en cada asunto (mediante timers o registro manual post-acción) y genera:
- Informe de horas por asunto para facturación
- Minuta automática basada en el tiempo registrado y las tarifas del despacho
- Resumen de rentabilidad por asunto (horas invertidas vs. honorarios cobrados)

instrucciones de output:
Diseña el sistema con:
- Estructura completa de la ficha de expediente (campos obligatorios y opcionales)
- Flujo de alertas de plazos: tipos de alerta, canales (email, SMS, app), escalado si no se confirma
- Los 6 prompts de IA más útiles en el día a día del despacho
- Plantillas de comunicación con el cliente para los 5 momentos más frecuentes del asunto
- Guía de implementación: cómo migrar los expedientes actuales al sistema sin interrumpir el trabajo

restricciones críticas:
- El sistema nunca puede marcar un plazo como cumplido sin confirmación del abogado responsable
- La IA nunca da asesoramiento jurídico directamente al cliente; prepara borradores para revisión del abogado
- Los datos del expediente están bajo secreto profesional: acceso restringido y trazabilidad de quién accede a qué
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Sistema de gestión de asuntos legales con IA para controlar plazos, organizar expedientes y comunicar con clientes',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Gestión de tickets de soporte con IA y Notion: del caos al sistema',
                'description'       => 'Construye un sistema de gestión de incidencias de Customer Success con IA que prioriza automáticamente, distribuye la carga y genera insights para mejorar el producto.',
                'prompt_content'    => <<<'EOT'
objetivo: Diseñar un sistema de gestión de tickets de Customer Success que use IA para automatizar la clasificación y priorización de incidencias, distribuir la carga de trabajo equitativamente y generar insights que retroalimenten al equipo de producto.

contexto del rol:
Eres el responsable de un equipo de Customer Success de 3-10 personas con un volumen de 50-500 tickets semanales. Tu equipo pasa demasiado tiempo en tareas manuales de clasificación y enrutamiento, lo que reduce el tiempo disponible para el trabajo de alto valor: resolver problemas complejos y construir relaciones con clientes estratégicos.

tarea principal:
Diseña el sistema completo de gestión de tickets con IA, desde la recepción hasta el cierre, con foco en la eficiencia del equipo y la satisfacción del cliente.

arquitectura del sistema:

Módulo 1 — Recepción y clasificación automática:
Cuando llega un ticket (por email, chat, formulario), la IA lo clasifica automáticamente en:
- Tipo: bug, pregunta de uso, solicitud de feature, problema de facturación, queja, otro
- Urgencia: crítica (servicio caído o pérdida de datos), alta (funcionalidad principal bloqueada), media (workaround disponible), baja (cosmético o informativo)
- Sentimiento del cliente: frustrado, neutro, satisfecho
- Complejidad estimada: simple (respuesta estándar), media (requiere investigación), alta (requiere escalar o involucrar ingeniería)

La clasificación automática tiene una tasa de error esperada del 5-10%; el agente asignado la corrige en los primeros segundos de abrir el ticket si no es correcta.

Módulo 2 — Enrutamiento inteligente:
El sistema asigna el ticket al agente más adecuado basándose en:
- Especialización del agente (hay tickets de billing, técnicos, de producto)
- Carga de trabajo actual de cada agente (tickets abiertos, tiempo en cola)
- Historial del cliente: si ya ha interactuado con un agente específico, se prefiere la continuidad
- Urgencia del ticket vs. disponibilidad del agente más especializado

Módulo 3 — Asistencia en tiempo real al agente:
Cuando el agente abre un ticket, el sistema le muestra:
- Contexto del cliente: plan, tiempo como cliente, historial de tickets previos, ARR si aplica
- Solución sugerida basada en tickets similares resueltos previamente
- Links a la documentación relevante
- Plantillas de respuesta pre-generadas adaptadas al contexto (el agente elige, modifica y envía)

Para tickets complejos, la IA genera un análisis de causa raíz probable y los pasos de diagnóstico recomendados.

Módulo 4 — Gestión de escalados:
El sistema detecta automáticamente cuándo escalar:
- Si el agente no ha actualizado el ticket en más de X horas según la urgencia
- Si el cliente ha respondido con frustración creciente después de 2 intercambios
- Si el problema requiere acceso a sistemas o información que el agente de primer nivel no tiene
- Si el cliente es de tier enterprise o tiene ARR por encima del umbral configurado

Al escalar, el sistema genera el briefing completo para el receptor del escalado: sin necesidad de leer el hilo completo.

Módulo 5 — Métricas e insights de calidad:
El sistema genera semanalmente:
- Distribución de tickets por tipo, urgencia y complejidad (para detectar cambios en el patrón)
- Tiempos de resolución por tipo de ticket y por agente
- CSAT por tipo de problema y por agente (para coaching)
- Top 10 problemas de la semana con volumen y tendencia

Módulo 6 — Retroalimentación al equipo de producto:
El sistema genera mensualmente un informe para el Product Manager con:
- Los 15 problemas más frecuentes agrupados semánticamente
- Issues que han aumentado de volumen semana a semana (señal de problema emergente)
- Features cuya ausencia ha causado pérdida de cliente (extraído del contexto de tickets de churn)
- Bugs confirmados sin resolución y su impacto acumulado en clientes afectados

instrucciones de output:
Diseña el sistema con:
- Estructura de la base de datos de tickets en Notion (campos, opciones de select, relaciones)
- Los 5 prompts de IA más útiles para el equipo de CS en el día a día
- Plantillas de respuesta para los 10 tipos de ticket más frecuentes
- Dashboard de métricas semanales: qué medir y cómo presentarlo al equipo
- Guía de implementación: cómo migrar de un sistema reactivo al sistema proactivo descrito

restricciones:
- Las respuestas automáticas al cliente siempre pasan por revisión humana antes de enviarse
- El sistema no puede cerrar un ticket como resuelto sin confirmación del cliente o del agente
- Los datos de clientes accesibles en el sistema tienen acceso controlado por rol
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema de gestión de tickets de Customer Success con IA para equipos de 3 a 10 agentes',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Sistema de gestión de clientes freelance con IA: proyectos, pagos y relaciones',
                'description'       => 'Construye el sistema de gestión de tu negocio freelance con IA y Notion: seguimiento de proyectos, cobros, pipeline de nuevos clientes y satisfacción.',
                'prompt_content'    => <<<'EOT'
objetivo: Diseñar el sistema operativo completo de un negocio freelance usando Notion como hub central e IA como asistente de operaciones, para gestionar proyectos activos, cobros, pipeline de nuevos clientes y la relación con clientes recurrentes desde un único lugar.

contexto del rol:
Eres un freelancer con 2-10 clientes activos simultáneos y una facturación mensual de 3.000€ a 15.000€. Tu mayor problema no es conseguir proyectos sino gestionarlos todos al mismo tiempo sin que nada se caiga: plazos, entregas, facturas sin cobrar, seguimientos pendientes y oportunidades de nuevos proyectos que se pierden porque no tienes sistema.

tarea principal:
Diseña el sistema completo de operaciones freelance con IA, especificando la estructura de Notion, las automatizaciones, los prompts de IA y el flujo de trabajo semanal.

arquitectura del sistema en Notion:

Base de datos 1 — Clientes:
Para cada cliente: datos de contacto, sector, historia de la relación (cuándo empezamos, proyectos anteriores, preferencias de comunicación), facturación histórica, potencial de crecimiento, y estado de la relación (activo, inactivo, prospecto).
La IA genera automáticamente: resumen de cada cliente en 3 puntos, la fecha del próximo contacto recomendado (para clientes recurrentes, un check-in cada X semanas aunque no haya proyecto activo), y alertas de aniversario de relación para enviar un mensaje de fidelización.

Base de datos 2 — Proyectos:
Para cada proyecto: cliente vinculado, descripción del alcance, fecha de inicio y fin acordada, entregables con fechas parciales, estado por fase, horas invertidas vs. estimadas, facturación vinculada, y aprendizajes al cierre.
Vistas: tablero kanban por estado (por cotizar, en negociación, en ejecución, en revisión, cerrado), timeline para ver la carga futura, y lista de proyectos por cliente.

Base de datos 3 — Facturación y cobros:
Para cada factura: proyecto vinculado, importe, fecha de emisión, fecha de vencimiento, estado (pendiente, cobrada, vencida sin cobrar), y notas de gestión de cobro.
El sistema alerta automáticamente: 7 días antes del vencimiento (recordatorio amable), el día del vencimiento (follow-up), y 7 días después si no está cobrada (gestión de mora).

Base de datos 4 — Pipeline de nuevos proyectos:
Para cada oportunidad: origen del lead (referido, LinkedIn, plataforma, inbound), descripción del proyecto, presupuesto estimado, probabilidad de cierre, próxima acción con fecha, y historial de contactos.

flujo de trabajo semanal con IA:

Lunes — Revisión semanal (30 minutos):
El sistema genera el resumen de la semana: proyectos activos con su estado y próximas entregas, facturas pendientes de cobro, oportunidades del pipeline con acciones vencidas, y clientes que llevan más de X semanas sin contacto.
La IA genera la agenda priorizada de la semana: qué es urgente vs. importante, en qué proyecto enfocarse y cuándo.

Viernes — Cierre semanal (20 minutos):
El sistema registra el progreso de la semana y la IA genera: el resumen de horas por proyecto (para control de rentabilidad), las tareas pendientes que pasan a la siguiente semana, y si hay facturas que emitir por milestones alcanzados.

integración de IA en las operaciones diarias:

Para gestión de proyectos:
- Al iniciar un proyecto: la IA genera el plan de trabajo detallado con hitos, entregables y fechas basándose en el scope acordado
- Durante el proyecto: cuando hay un riesgo de desviación de plazo, la IA genera el email de comunicación proactiva al cliente
- Al cerrar un proyecto: la IA genera la retrospectiva (qué fue bien, qué mejorar, tiempo real vs. estimado) y el email de cierre y solicitud de testimonial

Para gestión de cobros:
- La IA genera los emails de recordatorio de pago adaptados al contexto (primer recordatorio suave, segundo más directo, tercer escalado)
- Cuando hay un cobro atrasado, la IA ayuda a redactar la comunicación de gestión de mora que mantiene la relación mientras protege el cobro

Para desarrollo de negocio:
- La IA identifica oportunidades de upsell en proyectos activos (basándose en el scope y las necesidades del cliente detectadas)
- La IA genera los emails de reactivación para clientes inactivos con ángulo de valor relevante para su sector
- Para cada nueva propuesta, la IA genera el documento completo basándose en el brief del cliente y el histórico de proyectos similares

instrucciones de output:
Diseña el sistema con:
- Estructura completa de cada base de datos en Notion (propiedades, tipos, relaciones entre bases de datos)
- Los 8 prompts de IA más útiles para las operaciones diarias del freelancer
- Flujo de trabajo semanal detallado: qué revisar, qué actualizar y qué delegar a la IA cada día
- Plantillas de emails para los 6 situaciones más frecuentes (bienvenida, entrega, cobro, cierre, reactivación, referral)
- Métricas del negocio que el sistema rastrea: ingresos mensuales, tasa de clientes recurrentes, tiempo promedio de cobro, rentabilidad por proyecto

restricciones:
- El sistema es una herramienta, no una excusa para evitar el contacto humano con los clientes
- Las propuestas y contratos siempre los revisa el freelancer antes de enviar
- Los datos de clientes y proyectos deben estar protegidos (acceso solo desde dispositivos propios)
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 45,
                'use_case'          => 'Sistema operativo completo para negocios freelance con Notion e IA: proyectos, cobros y desarrollo de negocio',
                'vote_score'        => 48,
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
