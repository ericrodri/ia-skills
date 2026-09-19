<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills551Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Gestión ágil de campañas de marketing con IA',
                'description'      => 'Aplica metodologías ágiles y sprints de marketing para lanzar campañas iterativas más rápido, usando IA para priorizar iniciativas y medir resultados en tiempo real.',
                'prompt_content'   => <<<'EOT'
Actúa como un Agile Marketing Manager con experiencia en metodologías ágiles aplicadas a equipos de marketing digital. Tu objetivo es diseñar un sistema de trabajo ágil para un equipo de marketing de 8 personas que actualmente trabaja por proyectos trimestrales y necesita moverse a ciclos de entrega más rápidos.

objetivo: Implementar un framework de marketing ágil que permita al equipo lanzar experimentos, medir resultados y pivotar en ciclos de 2 semanas, usando IA para priorizar el backlog y analizar el rendimiento de cada sprint.

contexto: El equipo tiene dificultades para adaptarse rápidamente a cambios del mercado. Las campañas se planifican con 3 meses de antelación y resultan obsoletas antes de lanzarse. La dirección exige más velocidad y experimentación sin aumentar el presupuesto.

tarea 1 — Estructura del equipo ágil de marketing:
Define los roles dentro del equipo ágil de marketing: Marketing Product Owner (gestiona el backlog de iniciativas), Scrum Master de marketing (facilita ceremonias y elimina bloqueos), y equipo multidisciplinar (SEO, paid media, contenido, diseño, analítica). Describe las responsabilidades de cada rol y cómo interactúan.

tarea 2 — Backlog de marketing y priorización con IA:
Explica cómo construir y mantener el backlog de iniciativas de marketing: formato de las user stories de marketing (como [segmento], quiero [acción de marketing] para [resultado de negocio]), sistema de puntuación con IA basado en impacto estimado, esfuerzo requerido, urgencia y alineación estratégica, y proceso de refinamiento semanal del backlog.

tarea 3 — Sprint de marketing de 2 semanas:
Diseña la estructura del sprint de marketing: sprint planning (selección de iniciativas del backlog, definición del sprint goal), daily standup de marketing (qué publiqué ayer, qué publicaré hoy, qué me bloquea), revisión del sprint con resultados medibles, y retrospectiva para mejorar el proceso del equipo.

tarea 4 — IA para análisis de rendimiento en tiempo real:
Describe cómo usar IA para monitorizar el rendimiento de las campañas durante el sprint: dashboards automatizados con alertas cuando una campaña supera o no alcanza los KPIs, análisis de causa raíz automático cuando los resultados son negativos, recomendaciones de ajuste de presupuesto entre canales en tiempo real, y predicción del rendimiento al final del sprint basada en los datos actuales.

tarea 5 — Experimentación y growth hacking ágil:
Define el proceso de experimentación rápida: estructura de hipótesis (creemos que [cambio] producirá [resultado] porque [razón]), diseño de A/B tests que puedan ejecutarse dentro de un sprint, criterios de éxito medibles antes de empezar el experimento, y proceso de decisión para escalar o descartar el experimento basado en los datos.

tarea 6 — Integración con el resto de la empresa:
Explica cómo el equipo de marketing ágil colabora con producto, ventas y dirección: demostraciones del sprint abiertas a stakeholders, gestión de peticiones urgentes de la dirección sin romper el sprint, sincronización con los sprints del equipo de producto para coordinar lanzamientos, y reporting ejecutivo en formato OKR con actualización quincenal.

Formato de respuesta: Incluye las ceremonias en formato de agenda concreta con duración, las historias de usuario en formato estándar, y los criterios de priorización en tabla con pesos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Implementar metodologías ágiles en equipos de marketing con IA para priorización y análisis',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Optimización de sprints de desarrollo con IA y Scrum avanzado',
                'description'      => 'Mejora la eficiencia de los sprints de desarrollo usando IA para estimar historias, detectar bloqueos, predecir velocidad y optimizar la capacidad del equipo.',
                'prompt_content'   => <<<'EOT'
Actúa como un Scrum Master senior y coach ágil con experiencia en equipos de desarrollo de software de alto rendimiento. Tu objetivo es diseñar un sistema de mejora continua de sprints que incorpore inteligencia artificial para tomar decisiones más precisas sobre planificación, capacidad y detección de riesgos.

contexto: El equipo de desarrollo tiene 7 personas (2 seniors, 3 mids, 1 junior, 1 QA). La velocidad media es de 45 story points por sprint de 2 semanas pero con alta varianza (entre 28 y 62 puntos). El 30% de las historias no se completan dentro del sprint y pasan al siguiente, afectando la previsibilidad de entrega al cliente.

tarea 1 — Estimación de historias con IA:
Diseña un proceso de estimación augmentada con IA: análisis automático de la descripción de la historia para sugerir un rango de estimación basado en historias similares completadas en el pasado, comparación con el histórico de complejidad por tipo de tarea (API, UI, base de datos, integración), y asistente para el planning poker que muestra referencias históricas cuando hay alta dispersión en las estimaciones del equipo.

tarea 2 — Planificación de sprint con IA:
Explica cómo usar IA para optimizar la planificación: predicción de la capacidad real del sprint teniendo en cuenta vacaciones, festivos y dependencias conocidas, detección de historias con dependencias técnicas que deben secuenciarse correctamente, análisis de riesgo de cada historia (¿tiene dependencias externas? ¿hay incertidumbre técnica alta?), y sugerencia de la combinación óptima de historias para maximizar el valor entregado respetando la capacidad.

tarea 3 — Monitorización del sprint con IA:
Define el sistema de seguimiento diario del sprint: burndown chart con predicción de velocidad y alerta temprana cuando el equipo va a no cumplir el objetivo, detección automática de historias bloqueadas basada en el tiempo sin actualizaciones en Jira o Azure DevOps, análisis de los standups diarios para identificar impedimentos recurrentes, y dashboard de salud del sprint con semáforo para el Scrum Master.

tarea 4 — Retrospectivas basadas en datos:
Diseña un proceso de retrospectiva aumentada con datos: análisis automático de las métricas del sprint (velocidad, throughput, escapees, deuda técnica generada), identificación de patrones negativos recurrentes (¿siempre hay bloqueos los jueves? ¿las historias de integración siempre se retrasan?), generación de preguntas de retrospectiva personalizadas basadas en los datos del sprint, y seguimiento automático de los action items de retrospectivas anteriores.

tarea 5 — Gestión de la deuda técnica con IA:
Propón un sistema de gestión de deuda técnica integrado con el proceso ágil: categorización automática de la deuda técnica detectada durante el sprint, cálculo del interés acumulado de no resolverla (impacto en velocidad futura), recomendación de cuántos story points dedicar a deuda técnica por sprint, y visualización de la evolución de la deuda técnica en el tiempo.

tarea 6 — Predicción de entregas y comunicación con stakeholders:
Define cómo usar IA para mejorar la comunicación de plazos: predicción de la fecha de finalización de épicas basada en velocidad histórica e historias pendientes, simulación Monte Carlo para dar rangos de confianza en las fechas de entrega, generación automática del informe de estado semanal para stakeholders con lenguaje no técnico, y alertas proactivas cuando hay riesgo de no cumplir un hito importante.

Formato de respuesta: Incluye ejemplos de outputs de IA (predicciones, alertas, recomendaciones), métricas en tabla con fórmulas de cálculo, y el flujo del sprint completo en formato de timeline.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Mejorar la eficiencia y previsibilidad de los sprints de desarrollo con herramientas de IA',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Design sprints acelerados con IA para equipos de diseño',
                'description'      => 'Adapta la metodología Google Design Sprint incorporando IA para generar ideas, prototipar más rápido y validar conceptos con usuarios en 5 días.',
                'prompt_content'   => <<<'EOT'
Actúa como un facilitador experto en Design Sprints y Design Thinking con experiencia en equipos de producto y diseño. Tu objetivo es diseñar una versión acelerada del Google Design Sprint que incorpore herramientas de inteligencia artificial en cada fase para reducir el tiempo de validación de ideas de 5 días a 3 días.

objetivo: Crear una metodología de Design Sprint aumentada con IA que un equipo de 5-7 personas pueda ejecutar para validar una hipótesis de producto o resolver un problema de diseño crítico en 3 días de trabajo intensivo.

contexto: Los Design Sprints tradicionales consumen mucho tiempo en la generación de ideas y en la creación de prototipos. Las herramientas de IA generativa pueden acelerar la ideación, la creación de wireframes y el análisis de resultados de los tests de usuario, liberando al equipo para enfocarse en las decisiones estratégicas.

tarea 1 — Día 1: Comprender y definir el problema con IA:
Diseña las actividades del primer día: mapa del problema con análisis automático de datos de usuario existentes (comentarios de soporte, reseñas, NPS), entrevistas con expertos sintetizadas por IA en los puntos clave, generación automática del mapa de empatía a partir de datos cualitativos, y definición del sprint question con facilitación IA que propone variaciones y ayuda a afinar el foco.

tarea 2 — Día 1 tarde / Día 2 mañana: Ideación acelerada:
Describe el proceso de ideación con IA: técnica Crazy 8s aumentada donde la IA genera 8 variaciones de cada concepto del participante para inspirar más ideas, análisis de soluciones existentes en el mercado con IA (benchmarking automático), síntesis de las ideas del grupo en clusters temáticos, y storyboard de la solución ganadora con sugerencias de IA para los pasos del flujo.

tarea 3 — Día 2: Prototipado con IA generativa:
Explica cómo acelerar el prototipado: generación de wireframes de baja fidelidad a partir de la descripción textual del storyboard usando IA, creación de copy y microcopy del prototipo con IA (textos de botones, mensajes de error, onboarding), generación de datos de prueba realistas para el prototipo, y conversión del prototipo de papel a prototipo digital interactivo en Figma con plugins de IA.

tarea 4 — Día 3 mañana: Reclutamiento y preparación del test:
Define el proceso de reclutamiento acelerado de usuarios para el test: criterios de perfil de usuario para el test, búsqueda automática de usuarios en la base de datos existente de clientes con IA, guión de entrevista generado por IA adaptado al prototipo específico, y configuración del entorno de test remoto (Lookback, Maze, UserTesting).

tarea 5 — Día 3 tarde: Tests de usuario y análisis con IA:
Diseña el proceso de test y síntesis: realización de 5 tests de usuario en sesiones de 30 minutos, transcripción automática con IA, análisis de sentimiento y detección de patrones de confusión o frustración, generación automática del resumen de hallazgos con puntos de consenso y disenso, y mapa de calor de clicks en el prototipo digital.

tarea 6 — Decisión y siguientes pasos:
Define el proceso de toma de decisión post-sprint: criterios de go/no-go basados en los hallazgos del test, recomendaciones de la IA sobre qué elementos del prototipo validaron la hipótesis y cuáles no, plan de iteración para el siguiente sprint si los resultados son parcialmente positivos, y presentación ejecutiva del sprint en 10 minutos con los hallazgos clave.

Formato de respuesta: Organiza por día y por bloque horario con duración exacta. Incluye las herramientas de IA específicas recomendadas para cada actividad y ejemplos de outputs de cada fase.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Ejecutar Design Sprints acelerados en 3 días usando IA generativa en ideación y prototipado',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Pipeline de ventas ágil con IA y metodología Kanban',
                'description'      => 'Implementa un sistema de ventas basado en Kanban con IA para gestionar el pipeline, priorizar oportunidades y predecir el cierre de deals.',
                'prompt_content'   => <<<'EOT'
Actúa como un Sales Operations Manager especializado en metodologías ágiles y optimización de procesos de ventas. Tu objetivo es diseñar un sistema de gestión del pipeline de ventas basado en Kanban, potenciado con inteligencia artificial, para un equipo de 10 comerciales B2B.

contexto: El equipo de ventas gestiona una cartera de 300 oportunidades activas en cualquier momento. Los comerciales tienen dificultades para saber en qué oportunidades enfocarse y cuándo actuar. El CRM está lleno de datos pero nadie los analiza de forma sistemática. La tasa de win rate es del 22% y el objetivo es llegar al 30%.

tarea 1 — Diseño del tablero Kanban de ventas:
Define la estructura del tablero Kanban para el pipeline de ventas: columnas (Prospecto identificado, Primer contacto realizado, Necesidad calificada, Propuesta enviada, Negociación, Cierre ganado / perdido / postpuesto), criterios claros de Definition of Done para mover una oportunidad entre columnas, límites de WIP (Work in Progress) por columna para evitar cuellos de botella, y política de expedited lane para oportunidades estratégicas urgentes.

tarea 2 — IA para priorización de oportunidades:
Describe el sistema de scoring de oportunidades con IA: variables que determinan el score (tamaño del deal, probabilidad de cierre estimada por IA, fit con el ICP, señales de intención del comprador, velocidad de movimiento en el pipeline, tiempo desde el último contacto), actualización automática del score en tiempo real, y alertas al comercial cuando una oportunidad de alto valor lleva más de X días sin movimiento.

tarea 3 — Predicción de cierre con IA:
Explica cómo implementar un modelo predictivo de cierre de ventas: datos de entrada (características del deal, comportamiento del cliente, historial de interacciones, perfil de la empresa), modelo de machine learning entrenado con el histórico de deals ganados y perdidos, probabilidad de cierre por deal actualizada semanalmente, y forecast del pipeline total para el mes y el trimestre con intervalos de confianza.

tarea 4 — Ceremonias ágiles para el equipo de ventas:
Adapta las ceremonias ágiles al equipo comercial: daily standup de 15 minutos (qué llamada/reunión hice ayer, qué tengo hoy, qué me bloquea), revisión semanal del pipeline con análisis de IA de las oportunidades que requieren atención, retrospectiva mensual con datos de win/loss rate por etapa del pipeline, y sprint de prospección quincenal con meta de nuevas oportunidades cualificadas.

tarea 5 — Automatización de seguimientos con IA:
Define el sistema de seguimiento automatizado: detección de oportunidades sin actividad en el plazo esperado según la etapa, generación de borrador de email de seguimiento personalizado con IA basado en el contexto de la oportunidad, sugerencia de siguiente acción óptima (llamada, demo, propuesta, escalado a dirección), y registro automático de interacciones en el CRM a partir de emails y llamadas grabadas.

tarea 6 — Análisis de win/loss y mejora continua:
Diseña el proceso de análisis de deals ganados y perdidos: encuesta automática post-deal a los clientes (por qué compraron o por qué no), análisis de IA de los patrones comunes en deals ganados vs. perdidos, identificación de las etapas del pipeline con mayor tasa de abandono, y generación mensual de recomendaciones para mejorar el playbook de ventas basadas en los datos.

Formato de respuesta: Incluye el tablero Kanban en formato texto con columnas y WIP limits, la fórmula de scoring en tabla con pesos, y los dashboards de métricas con ejemplos de valores.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar el pipeline de ventas B2B con Kanban e IA para priorización y predicción de cierre',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Roadmap de producto ágil con OKRs e IA de priorización',
                'description'      => 'Diseña y gestiona un roadmap de producto basado en OKRs usando IA para priorizar el backlog, detectar conflictos de capacidad y comunicar la estrategia a stakeholders.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Director con experiencia en gestión de producto ágil y frameworks de OKRs. Tu objetivo es diseñar un sistema de planificación y gestión del roadmap de producto que combine OKRs, metodología ágil e inteligencia artificial para tomar mejores decisiones de priorización.

contexto: La empresa tiene 3 equipos de producto (Squad A: adquisición, Squad B: activación, Squad C: retención) con un total de 18 personas entre producto, diseño e ingeniería. Existe tensión constante entre las peticiones de los stakeholders internos (ventas, marketing, dirección) y las necesidades de los usuarios detectadas en investigación. El roadmap trimestral se modifica a menudo en el primer mes de cada trimestre, generando frustración en los equipos.

tarea 1 — Sistema de OKRs para producto:
Define la estructura de OKRs a tres niveles: OKRs de empresa (estrategia anual), OKRs de producto (resultado de los equipos en el trimestre), y OKRs de squad (contribución de cada equipo). Explica el proceso de cascada de OKRs de arriba abajo y de alineación de abajo arriba, y cómo detectar cuando un OKR de squad no contribuye a ningún OKR de empresa.

tarea 2 — Backlog de producto y priorización con IA:
Diseña el sistema de gestión del backlog: estructura de épicas, features e historias de usuario, modelo de scoring con IA que evalúa cada iniciativa según: impacto estimado en el OKR objetivo, esfuerzo de implementación, confianza en el impacto estimado (basada en datos disponibles), urgencia estratégica, y deuda técnica generada. Incluye el proceso de refinamiento mensual del backlog.

tarea 3 — Roadmap por horizontes temporales:
Explica la gestión del roadmap en tres horizontes: H1 (próximos 3 meses: comprometido, con detalle de épicas y squads), H2 (3-6 meses: probable, con dirección estratégica pero sin compromisos de fecha), y H3 (6-12 meses: posible, con visión estratégica de hacia dónde va el producto). Define cómo la IA ayuda a mantener la coherencia entre horizontes y a detectar conflictos de dependencias.

tarea 4 — Gestión de stakeholders y peticiones:
Diseña el proceso para gestionar las peticiones de los stakeholders: formulario estándar de petición con campos mínimos (problema del usuario, impacto en negocio estimado, urgencia, alternativas consideradas), análisis automático de IA para comparar la petición con las iniciativas ya en el backlog y detectar duplicidades, criterio de aceptación o rechazo con justificación basada en datos, y comunicación transparente del estado de cada petición.

tarea 5 — Planificación trimestral de capacidad:
Define el proceso de planificación de capacity para el trimestre: inventario de capacidad por squad (restando vacaciones, tiempo de soporte, deuda técnica, y reuniones), asignación de iniciativas del backlog a squads respetando la capacidad real, detección automática de conflictos de dependencias entre squads, y plan de contingencia para las iniciativas que no caben en el trimestre.

tarea 6 — Comunicación y revisión del roadmap:
Propón el sistema de comunicación del roadmap: formato del roadmap para distintas audiencias (C-level: resultados de negocio, engineering: épicas técnicas, ventas: funcionalidades con fechas orientativas), cadencia de revisión y actualización (revisión trimestral profunda, revisión mensual ligera, actualización semanal del estado de las épicas en curso), y proceso de cambio del roadmap con impacto mínimo en los equipos.

Formato de respuesta: Incluye el template de OKRs en formato tabla, la fórmula de scoring de iniciativas con pesos, y el formato del roadmap por horizontes en representación visual de texto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Planificar y priorizar el roadmap de producto con OKRs, metodología ágil e IA',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Agile HR: gestión ágil de personas y equipos con IA',
                'description'      => 'Aplica metodologías ágiles a los procesos de RRHH: onboarding, evaluación del desempeño, planes de desarrollo y gestión del cambio organizacional con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un Head of People con experiencia en transformación ágil de departamentos de Recursos Humanos. Tu objetivo es diseñar un modelo de Agile HR que adapte los principios de las metodologías ágiles a los procesos de gestión de personas, potenciado con herramientas de inteligencia artificial.

objetivo: Transformar los procesos de RRHH de ciclos anuales rígidos (evaluación anual, plan de formación anual) a ciclos cortos de feedback continuo y mejora iterativa que aumenten el engagement y el desarrollo de los empleados.

contexto: La empresa tiene 200 empleados distribuidos en 20 equipos. Los procesos de RRHH actuales son burocráticamente pesados: la evaluación anual de desempeño tarda 3 meses, el plan de formación se decide en enero y apenas se ejecuta, y el onboarding de nuevos empleados dura 3 semanas sin estructura clara.

tarea 1 — Evaluación continua del desempeño con IA:
Diseña el sistema de evaluación continua en sustitución de la evaluación anual: ciclos de feedback quincenal entre empleado y manager (check-in de 30 minutos), 360 feedback semestral asistido por IA (análisis de los comentarios, detección de patrones, sugerencias de desarrollo), OKRs individuales trimestrales alineados con los de equipo y empresa, y dashboard personal del empleado con su progreso en tiempo real.

tarea 2 — Onboarding ágil en 4 sprints:
Define el proceso de onboarding estructurado en sprints de 2 semanas: Sprint 1 (cultura y herramientas), Sprint 2 (el rol y el equipo), Sprint 3 (primer proyecto real supervisado), Sprint 4 (autonomía con soporte). Para cada sprint define los objetivos de aprendizaje, las actividades, las personas clave con las que el nuevo empleado debe interactuar, y los criterios de éxito medibles.

tarea 3 — Planes de desarrollo personalizados con IA:
Explica cómo la IA personaliza los planes de desarrollo individual: análisis de las competencias actuales del empleado (autoevaluación + evaluación del manager), comparación con el perfil objetivo de su rol y nivel, identificación de los gaps más relevantes para el desarrollo profesional, recomendación de recursos de formación (cursos, libros, proyectos internos, mentoring) ordenados por impacto y tiempo disponible, y seguimiento del progreso con ajuste dinámico del plan.

tarea 4 — Gestión ágil del cambio organizacional:
Diseña el proceso de gestión del cambio con enfoque ágil: diagnóstico de la resistencia al cambio con encuestas de pulso semanales analizadas por IA, identificación de early adopters y detractores clave, comunicación iterativa del cambio con ciclos cortos de feedback de los empleados, ajuste de la estrategia de cambio basado en los datos de adopción, y métricas de adopción del cambio en tiempo real.

tarea 5 — Clima laboral y engagement con IA:
Propón el sistema de medición y mejora del engagement: encuestas de pulso semanales de 5 preguntas (rotatorias para evitar fatiga), análisis de sentimiento con IA de los comentarios abiertos, detección temprana de señales de desenganche o riesgo de rotación, dashboard de clima por equipo para los managers, y plan de acción automático sugerido por IA cuando un equipo muestra señales de alarma.

tarea 6 — RRHH como equipo ágil:
Define cómo el propio equipo de RRHH opera con metodología ágil: backlog de iniciativas de personas, sprints de 2 semanas para proyectos de RRHH, métricas de impacto del departamento (time to hire, tiempo de onboarding hasta productividad, eNPS, tasa de retención, inversión en formación por empleado), y revisión trimestral de la estrategia de personas alineada con los OKRs de empresa.

Formato de respuesta: Incluye el calendario de ceremonias de RRHH ágil, los templates de check-in y 360 feedback, y las métricas del departamento en tabla con frecuencia de medición y responsable.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Transformar los procesos de RRHH con metodologías ágiles e IA para mejorar el engagement y el desarrollo',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Presupuestación ágil y rolling forecast con IA para finanzas',
                'description'      => 'Sustituye el presupuesto anual rígido por un modelo de presupuestación ágil con revisiones trimestrales y forecast continuo potenciado por IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un CFO o Director Financiero con experiencia en transformación de los procesos de planificación financiera hacia modelos más ágiles y orientados a datos. Tu objetivo es diseñar un modelo de presupuestación ágil con rolling forecast que reemplace el ciclo presupuestario anual tradicional.

contexto: La empresa actualmente dedica 3 meses al año a elaborar el presupuesto anual. El presupuesto queda obsoleto en el primer trimestre debido a cambios del mercado. Los managers gestionan contra el presupuesto de enero sin adaptarse a la realidad cambiante. El equipo financiero pasa más tiempo preparando informes de desviación que analizando el negocio.

tarea 1 — Modelo de rolling forecast con IA:
Define la estructura del rolling forecast a 12 meses móviles: actualización mensual de la proyección financiera completa (P&L, cash flow, balance simplificado), drivers de negocio que alimentan automáticamente el modelo (unidades vendidas, precio medio, tasa de churn, headcount), modelo de IA que predice los drivers futuros basándose en tendencias históricas y señales externas (macro, estacionalidad, pipeline comercial), y proceso de revisión y ajuste mensual en 2 días en lugar de 3 semanas.

tarea 2 — Presupuestación basada en drivers, no en líneas de coste:
Explica la transición de un presupuesto línea a línea a un modelo basado en drivers: identificación de los 5-10 drivers principales que determinan el 80% de los ingresos y costes, construcción de las relaciones causales entre drivers y resultados financieros, y cómo la IA ayuda a calibrar automáticamente las relaciones cuando los datos reales difieren de lo previsto.

tarea 3 — Zero-Based Budgeting ágil:
Diseña un proceso de Zero-Based Budgeting por ciclos: en lugar de revisar toda la empresa cada año, rotar el análisis de base cero por departamentos (25% de la empresa por trimestre), justificación de cada partida de gasto desde cero con análisis de ROI, priorización de inversiones con modelo de scoring de IA, y eliminación automática de gastos sin justificación clara de impacto en negocio.

tarea 4 — Alertas y anomalías con IA:
Define el sistema de monitorización financiera en tiempo real: detección automática de desviaciones significativas respecto al forecast (más de X% en cualquier línea material), análisis de causa raíz automático (¿es una desviación de volumen, precio o mix?), alertas priorizadas para el CFO con el impacto estimado en el resultado anual, y simulación automática del impacto de la desviación en el cierre del año si no se toman medidas correctoras.

tarea 5 — Reporting financiero ágil:
Propón el modelo de reporting financiero adaptado a la velocidad ágil: cierre mensual en 3 días hábiles (frente a los 10 días habituales), dashboard ejecutivo actualizado en tiempo real con los KPIs financieros clave, narrativa del mes generada automáticamente por IA explicando las variaciones más relevantes en lenguaje no técnico, y scorecards por departamento con semáforo de desviación respecto al objetivo.

tarea 6 — Gobierno financiero ágil:
Define el modelo de toma de decisiones financieras ágil: proceso de aprobación de inversiones no presupuestadas (threshold de aprobación por nivel jerárquico, análisis de ROI automático con IA, decisión en máximo 48 horas para inversiones operativas), revisión trimestral de estrategia financiera en lugar de revisión anual, y proceso de realocación de presupuesto entre departamentos cuando cambian las prioridades estratégicas.

Formato de respuesta: Incluye el calendario del ciclo de presupuestación ágil, el template del dashboard ejecutivo en formato texto, y el proceso de aprobación de inversiones en diagrama de flujo textual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Implementar un modelo de presupuestación ágil con rolling forecast e IA para equipos financieros',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión ágil de proyectos legales con IA y metodología Kanban',
                'description'      => 'Aplica Kanban y herramientas de IA al departamento legal para gestionar asuntos, contratos y proyectos regulatorios con mayor transparencia y eficiencia.',
                'prompt_content'   => <<<'EOT'
Actúa como un Legal Operations Manager con experiencia en transformación digital de departamentos jurídicos. Tu objetivo es diseñar un sistema de gestión ágil para el departamento legal de una empresa mediana usando Kanban, métricas de gestión de proyectos y herramientas de IA para mejorar la visibilidad y la eficiencia.

contexto: El departamento legal tiene 5 abogados internos que gestionan contratos, asuntos litigiosos, cumplimiento normativo, propiedad intelectual y consultas de negocio. Los abogados trabajan de forma aislada sin visibilidad del trabajo de los demás. El negocio se queja de los tiempos de respuesta y de no saber cuándo estará listo un contrato. El departamento no tiene métricas de su propio rendimiento.

tarea 1 — Sistema Kanban para el departamento legal:
Define el tablero Kanban para gestión de asuntos legales: columnas adaptadas al flujo legal (Solicitud recibida, Análisis inicial, En proceso, Revisión / aprobación, Entregado, Archivado), tipología de tarjetas por tipo de asunto (contrato, litigio, consulta, regulatorio, M&A), políticas de clase de servicio (urgente: 24h, estándar: 5 días, complejo: planificado), y límites de WIP por abogado para evitar la multitarea excesiva.

tarea 2 — IA para revisión y generación de contratos:
Diseña el flujo de trabajo de contratos con IA: análisis automático de contratos recibidos (identificación de cláusulas no estándar, riesgos jurídicos destacados, comparación con la posición estándar de la empresa), generación de primeras versiones de contratos estándar (NDAs, acuerdos de servicio, contratos de distribución) basadas en los parámetros de la solicitud, y redlining asistido por IA con sugerencias de redacción alternativa para cláusulas problemáticas.

tarea 3 — Gestión de plazos y alertas con IA:
Explica el sistema de gestión de deadlines legales: calendario de vencimientos automático (plazos procesales, renovaciones de contratos, plazos de cumplimiento regulatorio), alertas escalonadas (30 días, 7 días, 1 día antes del vencimiento), priorización automática de la cola de trabajo basada en proximidad de plazos y complejidad estimada del asunto, y sistema de delegación automática cuando un abogado está sobrecargado.

tarea 4 — Métricas de Legal Operations:
Define el sistema de métricas para el departamento legal: cycle time por tipo de asunto (tiempo desde solicitud hasta entrega), throughput semanal (número de asuntos cerrados), tiempo de respuesta a consultas urgentes, coste por asunto (para comparar con externalización), tasa de satisfacción del cliente interno (encuesta tras cada entrega), y evolución de la carga de trabajo por abogado para detectar desequilibrios.

tarea 5 — Autoservicio legal para el negocio:
Diseña un portal de autoservicio legal para reducir las consultas repetitivas: biblioteca de contratos estándar que los managers pueden personalizar con un asistente de IA, sistema de preguntas frecuentes legales con respuestas validadas por el departamento, flujo de solicitud estructurado para nuevos asuntos (en lugar de emails informales), y proceso de aprobación rápida para contratos de bajo riesgo por debajo de un umbral de valor.

tarea 6 — Gestión del conocimiento legal con IA:
Propón el sistema de gestión del conocimiento del departamento: repositorio centralizado de posiciones de la empresa por área jurídica (actualizado automáticamente con cada asunto cerrado), extracción automática de cláusulas tipo de contratos negociados para actualizar los templates, briefings regulatorios automatizados cuando hay cambios normativos relevantes para el negocio, y base de datos de precedentes internos consultable con búsqueda semántica.

Formato de respuesta: Incluye el diseño del tablero Kanban en formato texto, el catálogo de métricas en tabla con frecuencia y responsable, y el flujo del portal de autoservicio en diagrama de pasos numerados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Digitalizar y hacer más ágil la gestión de proyectos del departamento legal con Kanban e IA',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Equipos de soporte ágiles con IA: sprints de mejora continua',
                'description'      => 'Aplica metodologías ágiles al equipo de customer support para mejorar continuamente la calidad del servicio, reducir el tiempo de resolución y aumentar el NPS.',
                'prompt_content'   => <<<'EOT'
Actúa como un Customer Support Director con experiencia en metodologías ágiles aplicadas a equipos de atención al cliente. Tu objetivo es diseñar un modelo de operación ágil para un equipo de soporte de 20 agentes que gestiona 3.000 tickets al mes y tiene un NPS de soporte de 34 que necesitan elevar a 55.

contexto: El equipo de soporte trabaja de forma reactiva: responde tickets pero no tiene tiempo ni proceso para analizar los patrones, mejorar los procesos y crear contenido de autoservicio. Los agentes están frustrados porque resuelven los mismos problemas repetidamente. Los clientes se quejan de tiempos de espera y de tener que explicar su problema varias veces.

tarea 1 — Estructura ágil del equipo de soporte:
Define la organización ágil del equipo de soporte: squads especializados por tipo de cliente o producto (con no más de 5 agentes cada uno), roles de Support Lead (responsable del sprint y de la calidad), Quality Coach (análisis de conversaciones y formación), y Knowledge Manager (base de conocimiento y autoservicio). Define las responsabilidades de cada rol y la interfaz entre squads.

tarea 2 — Sprint de mejora de soporte de 2 semanas:
Diseña la estructura del sprint de mejora continua: sprint planning (análisis de las causas raíz de los tickets de la última quincena con IA, selección de los 3 problemas más frecuentes a resolver, definición de acciones concretas: nuevo artículo de ayuda, mejora de un proceso, formación específica), seguimiento diario de las acciones, y sprint review con métricas de impacto de las mejoras.

tarea 3 — IA para triaje y enrutamiento de tickets:
Explica el sistema de triaje automático con IA: clasificación del ticket por tipo de problema, urgencia y complejidad, asignación automática al agente con las habilidades y disponibilidad adecuadas, detección de tickets similares en el historial para sugerir la solución al agente antes de que empiece a investigar, y escalado automático a nivel 2 cuando el modelo detecta alta complejidad técnica o cliente en riesgo de churn.

tarea 4 — Asistente de IA para los agentes:
Define las capacidades del copiloto de IA para los agentes de soporte: sugerencia de respuesta basada en el historial del cliente y tickets similares anteriores, generación de borrador de respuesta que el agente revisa y personaliza, extracción automática de la solución de la base de conocimiento más relevante, resumen del historial del cliente en 3 líneas antes de empezar la conversación, y detección de sentimiento negativo del cliente para alertar al agente de que debe ser especialmente empático.

tarea 5 — Análisis de calidad con IA:
Propón el sistema de QA automatizado del soporte: análisis de una muestra del 20% de tickets por IA según rúbrica de calidad (empatía, claridad de la solución, tiempo de resolución, seguimiento), scorecard individual por agente actualizado semanalmente, identificación automática de los patrones de errores más frecuentes del equipo para diseñar formaciones específicas, y detección de mejores prácticas en las conversaciones con mayor puntuación de satisfacción.

tarea 6 — Estrategia de deflexión y autoservicio:
Diseña el proceso de reducción de tickets mediante autoservicio: análisis semanal con IA de los 10 topics más frecuentes de tickets para convertirlos en artículos de ayuda, chatbot de primer nivel que resuelve el 30% de las consultas simples sin intervención humana, mejora continua del chatbot basada en las conversaciones donde el usuario finalmente abre ticket a pesar del chat, y programa de comunidad de usuarios para soporte entre pares.

Formato de respuesta: Incluye el sprint de mejora en formato de agenda detallada, las métricas del equipo en tabla con valores actuales y objetivos, y el árbol de decisión del triaje automático en formato textual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementar sprints de mejora continua y IA en equipos de customer support para elevar el NPS',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestión de proyectos freelance con IA y metodologías ágiles',
                'description'      => 'Organiza y gestiona múltiples proyectos freelance simultáneos usando Kanban personal, estimación con IA, gestión de clientes y control de rentabilidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de productividad especializado en freelancers y profesionales independientes. Tu objetivo es diseñar un sistema de gestión de proyectos completo para un freelancer que trabaja en 4-6 proyectos simultáneos con distintos clientes, usando herramientas de IA y metodologías ágiles adaptadas al trabajo individual.

contexto: El freelancer tiene dificultades para gestionar múltiples proyectos a la vez: no sabe en qué trabajar primero, los proyectos se retrasan porque no hay visibilidad del estado real, los clientes piden actualizaciones constantemente interrumpiendo el trabajo profundo, y la rentabilidad de los proyectos es difusa porque el tiempo no se registra de forma sistemática.

tarea 1 — Sistema Kanban personal para múltiples proyectos:
Define el tablero Kanban personal adaptado al freelancer: estructura de columnas que funcione para múltiples proyectos simultáneos (Inbox, Esta semana, En proceso [máx. 1-2 tareas], Esperando respuesta del cliente, Entregado), código de color por proyecto/cliente, límite de WIP estricto para proteger el trabajo en profundidad, y política de gestión de solicitudes urgentes del cliente que interrumpen el plan de la semana.

tarea 2 — Estimación de proyectos con IA:
Explica cómo usar IA para mejorar la estimación de proyectos: base de datos personal de proyectos pasados con horas reales vs. estimadas por tipo de tarea, análisis de los factores que sistemáticamente hacen que los proyectos se retrasen (cambios de alcance, iteraciones de diseño, revisiones del cliente), generación de estimación ajustada para un nuevo proyecto basada en el histórico similar, y detección temprana de scope creep durante la ejecución del proyecto.

tarea 3 — Planificación semanal y daily planning:
Define el ritual de planificación semanal del freelancer: revisión del estado de todos los proyectos activos el lunes por la mañana (30 minutos), priorización de tareas de la semana con IA (considerando deadlines, horas disponibles, estado emocional y dificultad de las tareas), time-blocking del calendario con sesiones de trabajo profundo de 90 minutos, y revisión rápida de 15 minutos cada mañana para ajustar el plan del día.

tarea 4 — Gestión de clientes y comunicación proactiva:
Diseña el sistema de gestión de la relación con los clientes: template de actualización de proyecto semanal generado automáticamente por IA con el estado actual, entregables de la semana y próximos pasos (enviado cada viernes sin necesidad de que el cliente pregunte), proceso de gestión de cambios de alcance (detección, valoración del impacto en tiempo y precio, propuesta de extensión al cliente), y onboarding del nuevo cliente en la primera semana del proyecto.

tarea 5 — Control de rentabilidad en tiempo real:
Define el sistema de control financiero del proyecto freelance: registro de tiempo automático integrado con el Kanban (tiempo por tarea y por proyecto), cálculo en tiempo real de la rentabilidad del proyecto (ingresos – tiempo dedicado × tarifa hora interna), alerta cuando el proyecto está consumiendo más horas de las presupuestadas, y análisis mensual de la rentabilidad por tipo de proyecto y por cliente para decidir en qué especializarse.

tarea 6 — Retrospectiva de proyecto y mejora continua:
Propón el proceso de cierre y retrospectiva de cada proyecto: checklist de entrega al cliente, encuesta de satisfacción de 3 preguntas, análisis personal de qué salió bien y qué mejorar (estimación, comunicación, calidad del trabajo), actualización de la base de datos de estimaciones con los datos reales del proyecto, y definición de una mejora concreta a implementar en el siguiente proyecto similar.

Formato de respuesta: Incluye el diseño del tablero Kanban con ejemplos concretos, el template de actualización semanal al cliente listo para usar, y la tabla de control de rentabilidad con fórmulas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestionar múltiples proyectos freelance con Kanban personal, IA de estimación y control de rentabilidad',
                'vote_score'       => 40,
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
