<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills480Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Gestionar campañas de marketing con equipos remotos usando IA',
                'description'      => 'Usa IA para coordinar equipos de marketing distribuidos: planifica sprints de campaña, rastrea el progreso y facilita la comunicación asíncrona entre zonas horarias.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de marketing con experiencia en la gestión de equipos remotos distribuidos globalmente y en el uso de IA para mantener la coordinación, la creatividad y la productividad en entornos sin oficina física.

**tarea principal:**
Lidero un equipo de marketing de 6-12 personas distribuido en diferentes países y zonas horarias. Quiero implementar IA para que la coordinación sea más fluida, los proyectos avancen sin reuniones constantes y los resultados sean mejores y más predecibles.

**instrucción: Bloque 1 — Planificación de sprints de campaña con IA**
Diseña el sistema de planificación de marketing para equipos remotos:
- Estructura de sprint de marketing de 2 semanas: qué incluye, quién participa, cómo se documenta
- Cómo usar IA para descomponer una campaña grande en tareas concretas con estimaciones de tiempo
- Plantilla de briefing de campaña que la IA puede completar a partir de los objetivos de negocio
- Sistema de priorización de tareas: cómo el equipo decide qué va primero cuando trabajan de manera autónoma
- Kick-off asíncrono: cómo arrancar un sprint sin necesidad de una reunión de 2 horas

Crea el template de planificación de sprint de campaña que enviará mi equipo cada dos semanas.

**instrucción: Bloque 2 — Comunicación asíncrona efectiva**
Construye el sistema de comunicación para el equipo remoto de marketing:
- Reglas de oro de la comunicación asíncrona: qué va en Slack, qué en email, qué en documentos, qué merece una reunión
- Cómo usar IA para generar resúmenes ejecutivos de actualizaciones largas que el equipo puede leer en 2 minutos
- Plantillas de actualización de estado semanal: formato estándar para que cada miembro del equipo comparta su progreso
- Sistema de decisiones asíncronas: cómo tomar decisiones de campaña sin necesitar una reunión (con plazos y criterios claros)

**instrucción: Bloque 3 — Seguimiento de progreso con IA**
Implementa el sistema de tracking de campañas:
- Dashboard de campañas en tiempo real: qué métricas debe mostrar y cómo configurar alertas automáticas
- Weekly review asíncrono: plantilla de revisión de resultados que el equipo completa por su cuenta
- Cómo usar IA para identificar cuellos de botella y predecir retrasos antes de que ocurran
- Sistema de semáforo: verde/amarillo/rojo para el estado de cada campaña activa

**instrucción: Bloque 4 — Detección de riesgos y resolución de bloqueos**
Construye el sistema de gestión de riesgos en campañas remotas:
- Las 10 señales de alarma más comunes de que una campaña está en riesgo de no entregarse a tiempo
- Proceso de escalación: cuándo y cómo escalar un problema sin crear drama en el equipo
- Cómo usar IA para analizar los bloqueos más frecuentes y proponer mejoras sistémicas
- Protocolo de crisis de campaña: qué hacer cuando algo sale mal y el equipo está distribuido

**instrucción: Bloque 5 — Retrospectivas inteligentes**
Diseña el proceso de mejora continua del equipo:
- Formato de retrospectiva asíncrona mensual de 20 minutos (sin reunión larga)
- Cómo usar IA para analizar las retrospectivas anteriores y detectar patrones recurrentes
- Sistema de mejoras: cómo priorizar los cambios de proceso y hacer seguimiento de su implementación
- Celebración de logros en remoto: rituales de equipo que mantienen la moral alta sin necesitar presencia física

**objetivo final:** Un sistema de coordinación de marketing remoto que permita al equipo operar con autonomía plena, entregar campañas de alta calidad a tiempo y mejorar continuamente sin necesitar más de 3 horas de reuniones síncronas por semana.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Sistema de coordinación de equipos de marketing remotos con IA: sprints, tracking y comunicación asíncrona',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Planificación automática de sprints de desarrollo con IA',
                'description'      => 'Usa IA para planificar sprints de ingeniería, estimar tiempos con precisión, detectar riesgos técnicos y facilitar retrospectivas de equipo distribuido.',
                'prompt_content'   => <<<'EOT'
Actúa como un engineering manager y experto en metodologías ágiles con experiencia en equipos de desarrollo remotos, especializado en el uso de IA para hacer que los sprints sean más predecibles, los equipos más autónomos y las retrospectivas más accionables.

**tarea:**
Lidero un equipo de ingeniería de 5-15 desarrolladores trabajando en remoto. Quiero implementar IA en todo el proceso de gestión de sprints: desde la planificación hasta la retrospectiva, pasando por el seguimiento diario y la gestión de riesgos técnicos.

**instrucción: Módulo 1 — Sprint planning con IA**
Construye el proceso de planificación de sprint potenciado por IA:
- Cómo usar IA para descomponer épicas en user stories bien definidas con criterios de aceptación claros
- Estimación de puntos de historia: técnica de estimación asistida por IA que considera la velocidad histórica del equipo y la complejidad técnica
- Detección de dependencias: cómo identificar con IA las dependencias entre tareas que pueden bloquear el sprint
- Asignación inteligente: cómo usar el perfil de habilidades del equipo para asignar tareas de manera óptima
- Definición de capacidad: calculadora de capacidad de sprint que considera vacaciones, reuniones y tiempo de revisión

Crea el proceso de sprint planning de 3 horas para un equipo de 8 desarrolladores que trabajan en remoto en distintas zonas horarias.

**instrucción: Módulo 2 — Daily standup asíncrono con IA**
Diseña el sistema de standup diario sin reunión:
- Formato estándar de actualización diaria: qué hice ayer, qué hago hoy, qué me bloquea (en menos de 200 palabras)
- Cómo usar IA para agregar las actualizaciones del equipo y generar un resumen ejecutivo para el manager
- Sistema de detección de bloqueos: cómo identificar automáticamente cuando alguien lleva más de 24h bloqueado
- Protocolo de resolución de bloqueos: proceso asíncrono para desbloquear sin esperar a la siguiente reunión

**instrucción: Módulo 3 — Seguimiento de progreso y detección de riesgos**
Implementa el sistema de tracking técnico con IA:
- Métricas de sprint en tiempo real: velocity, burndown, bugs introducidos, deuda técnica acumulada
- Alertas tempranas de riesgo de entrega: cuándo el burndown sugiere que no se completará el sprint
- Análisis de calidad: cómo usar IA para revisar pull requests y detectar patrones de código problemático
- Gestión de alcance: proceso para negociar el scope del sprint cuando aparecen imprevistos técnicos

**instrucción: Módulo 4 — Gestión de deuda técnica con IA**
Construye el sistema de gestión de deuda técnica en equipos remotos:
- Cómo cuantificar y priorizar la deuda técnica usando IA
- Proceso de "deuda budget": qué porcentaje de cada sprint debe ir a reducir deuda
- Comunicación de deuda técnica al product manager y al negocio (en lenguaje no técnico)
- Roadmap de mejoras técnicas: cómo planificar la reducción de deuda a largo plazo

**instrucción: Módulo 5 — Retrospectivas inteligentes con IA**
Diseña el sistema de mejora continua:
- Formato de retrospectiva asíncrona de 30 minutos: qué salió bien, qué mejorar, qué experimentar
- Cómo usar IA para analizar las retrospectivas de los últimos 3 meses y detectar patrones sistémicos
- Sistema de action items: cómo convertir las conclusiones de la retro en mejoras medibles con responsables y fechas
- Seguimiento de mejoras: cómo verificar en el siguiente sprint que los cambios propuestos se implementaron

**objetivo final:** Un equipo de ingeniería remoto que entrega el 85% de los compromisos de sprint, tiene una velocidad predecible y mejora continuamente su forma de trabajar con mínima intervención del management.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Sistema de gestión de sprints de ingeniería con IA para equipos de desarrollo remotos',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Coordinar proyectos de diseño en remoto con IA y flujos asíncronos',
                'description'      => 'Usa IA para gestionar proyectos creativos con equipos distribuidos: brief automatizado, feedback asíncrono estructurado y seguimiento de iteraciones de diseño.',
                'prompt_content'   => <<<'EOT'
Actúa como un design manager con experiencia en la coordinación de equipos creativos remotos y en el uso de IA para hacer que los procesos de diseño sean más eficientes, los feedbacks más accionables y los proyectos más predecibles.

**tarea:**
Lidero un equipo de diseño distribuido en diferentes zonas horarias y quiero implementar IA para que los proyectos fluyan mejor sin necesidad de constantes reuniones de sincronización que interrumpen el tiempo de trabajo profundo de los diseñadores.

**instrucción: Sección 1 — Sistema de briefs automatizados**
Construye el proceso de brief de diseño potenciado por IA:
- Plantilla de brief de diseño completa: objetivos, audiencia, restricciones, referencias y criterios de éxito
- Cómo usar IA para expandir un brief corto del cliente en un documento detallado que el diseñador puede ejecutar de manera autónoma
- Checklist de brief: qué preguntas responder antes de empezar cualquier proyecto para evitar reprocesos
- Cómo distribuir el brief al equipo de manera asíncrona con todas las aclaraciones anticipadas

Crea un template de brief de diseño completo para un proyecto de identidad de marca con todos los campos necesarios.

**instrucción: Sección 2 — Proceso de feedback asíncrono estructurado**
Diseña el sistema de feedback creativo sin reuniones:
- Framework de feedback constructivo: cómo dar retroalimentación específica, accionable y respetuosa por escrito
- Plantilla de presentación de trabajo al cliente: cómo estructurar un entregable para que el cliente dé feedback útil sin una llamada
- Proceso de iteración documentada: cómo mantener el histórico de versiones y decisiones de diseño
- Manejo de feedback contradictorio: cómo usar IA para analizar feedbacks de múltiples stakeholders y priorizar los cambios

**instrucción: Sección 3 — Seguimiento de proyectos creativos con IA**
Implementa el sistema de tracking de proyectos de diseño:
- Fases estándar de un proyecto de diseño y las entregas de cada fase
- Dashboard de proyectos: cómo visualizar el estado de múltiples proyectos simultáneos en un vistazo
- Alertas de desviación: cuándo y cómo alertar al cliente de un retraso antes de que se convierta en crisis
- Gestión de revisiones: cuántas rondas de revisión incluye cada proyecto y cómo manejar las adicionales

**instrucción: Sección 4 — Colaboración creativa asíncrona**
Construye el sistema de colaboración remota para el equipo creativo:
- Cómo usar IA para generar moodboards y referencias visuales a partir de una descripción textual
- Sistema de critique asíncrono: cómo organizar revisiones de trabajo del equipo sin reunión
- Documentación de decisiones de diseño: por qué se eligió cada opción (para evitar discutir lo ya decidido)
- Onboarding de nuevos diseñadores remotos al equipo: cómo transferir el conocimiento de estilo y proceso

**instrucción: Sección 5 — Retrospectivas creativas con IA**
Diseña el proceso de mejora de equipo:
- Retrospectiva de proyecto: qué aprendemos de cada proyecto completado
- Análisis de calidad: cómo usar IA para revisar el trabajo entregado y detectar patrones de mejora
- Biblioteca de soluciones: cómo documentar y reutilizar las soluciones de diseño más exitosas
- Celebración de logros creativos: rituales de equipo que reconocen el trabajo de calidad en remoto

**objetivo final:** Un equipo de diseño remoto que produce trabajo de alta calidad de manera predecible, con mínimas reuniones y con un proceso de feedback que reduce los reprocesos en un 50%.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar proyectos creativos remotos con IA: briefs automatizados, feedback asíncrono y seguimiento',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestionar equipos de ventas remotos con IA: forecast y coaching',
                'description'      => 'Usa IA para coordinar equipos de ventas distribuidos: pipeline review automatizado, coaching personalizado con datos y forecast predictivo.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de ventas con experiencia en la gestión de equipos comerciales remotos y en el uso de IA para reemplazar la supervisión constante por un sistema de datos e insights que empodera a los vendedores a autogestionarse.

**tarea:**
Lidero un equipo de ventas de 8-20 personas distribuido en diferentes regiones. Quiero implementar IA para mejorar el forecast, personalizar el coaching de cada vendedor y reducir las reuniones de pipeline review sin perder visibilidad ni control del proceso comercial.

**instrucción: Bloque 1 — Pipeline review automatizado con IA**
Diseña el sistema de revisión de pipeline sin reuniones largas:
- Plantilla de actualización de oportunidades que cada vendedor completa semanalmente en 15 minutos
- Cómo usar IA para analizar las actualizaciones y generar un resumen ejecutivo del pipeline para el director
- Alertas automáticas de oportunidades en riesgo: señales que indican que un deal necesita atención inmediata
- Score de calidad del pipeline: cómo usar IA para evaluar la solidez de cada oportunidad (basado en actividad, interlocutores, urgencia, fit)

Crea el proceso de pipeline review semanal de 30 minutos para un equipo de 10 vendedores remotos.

**instrucción: Bloque 2 — Coaching personalizado con IA**
Construye el sistema de desarrollo de vendedores basado en datos:
- Análisis de grabaciones de llamadas: cómo usar IA para identificar los patrones de los mejores vendedores y las áreas de mejora de cada uno
- Plan de desarrollo individual: cómo crear un plan de coaching personalizado basado en los datos de actividad y conversión de cada vendedor
- Roleplay con IA: cómo practicar escenarios de venta difíciles con IA para preparar a los vendedores
- 1:1 efectivo de 30 minutos: estructura de la reunión individual que maximiza el impacto del coaching

**instrucción: Bloque 3 — Forecast predictivo con IA**
Implementa la previsión de ventas inteligente:
- Variables históricas que mejor predicen el cierre en mi equipo (ciclo de venta, tamaño de deal, industria, interlocutores, actividad)
- Modelo de probabilidad de cierre ponderada por IA: cómo calcular el forecast más preciso que el "feeling" del vendedor
- Análisis de commit vs. pipeline: qué oportunidades el vendedor pone en commit y cuán fiables son históricamente
- Dashboard de forecast para el VP de ventas: cómo presentar el número con confianza y contexto

**instrucción: Bloque 4 — Comunicación y cultura de equipo remoto**
Construye la cultura de equipo a distancia:
- Rituales de equipo asíncronos que mantienen el espíritu de competición sano sin microgestión
- Tablero de leaderboard: cómo mostrar métricas de actividad y cierre de manera que motive sin crear toxicidad
- Celebración de logros en remoto: cómo reconocer un gran cierre para que todo el equipo lo viva
- Onboarding de nuevos vendedores remotos: proceso de ramping de 90 días con hitos y soporte de IA

**instrucción: Bloque 5 — Retrospectiva comercial con IA**
Diseña el proceso de mejora continua del equipo de ventas:
- Revisión mensual de win/loss: análisis con IA de por qué se ganaron o perdieron los deals del mes
- Benchmarking interno: cómo comparar métricas entre vendedores para identificar mejores prácticas replicables
- Ajuste de proceso: cuándo y cómo cambiar el playbook de ventas basándose en datos, no en intuición

**objetivo final:** Un equipo de ventas remoto que opera con autonomía, mejora continuamente su rendimiento con coaching basado en datos y entrega un forecast con un margen de error inferior al 10%.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar equipos de ventas remotos con IA: pipeline review, coaching con datos y forecast',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestionar el roadmap de producto con equipos remotos usando IA',
                'description'      => 'Usa IA para priorizar el backlog, planificar releases en equipos distribuidos, detectar riesgos de entrega y facilitar la alineación asíncrona con stakeholders.',
                'prompt_content'   => <<<'EOT'
Actúa como un Head of Product con experiencia en la gestión de roadmaps de producto con equipos de ingeniería, diseño y negocio distribuidos en múltiples zonas horarias, y con especialización en el uso de IA para hacer que la toma de decisiones de producto sea más rápida y basada en datos.

**tarea:**
Gestiono el roadmap de un producto digital con un equipo remoto. El mayor desafío es mantener la alineación entre todos los equipos, priorizar lo correcto bajo incertidumbre y comunicar el plan de manera que todos entiendan el "por qué" detrás de cada decisión. Quiero usar IA para hacer todo esto mejor y más rápido.

**instrucción: Módulo 1 — Priorización del backlog con IA**
Construye el sistema de priorización de producto:
- Framework de priorización: cómo combinar impacto de negocio, esfuerzo técnico, confianza y urgencia estratégica en un score único
- Cómo usar IA para analizar el feedback de usuarios, los datos de uso y las peticiones de ventas y extraer los temas más críticos
- Proceso de priorización mensual: quién participa, qué datos se necesitan, cómo se documenta la decisión
- Comunicación de prioridades: cómo explicar al equipo de ingeniería y a los stakeholders por qué se prioriza lo que se prioriza

Crea la plantilla de scoring de priorización que usaré con mi equipo el próximo trimestre.

**instrucción: Módulo 2 — Planificación de releases en equipos distribuidos**
Diseña el proceso de planificación de release con equipos remotos:
- Cómo descomponer una iniciativa grande en milestones con fechas realistas para un equipo distribuido
- Proceso de estimación colaborativa asíncrona: cómo obtener estimaciones de ingeniería sin necesitar una reunión de planning de 4 horas
- Dependencias entre equipos: cómo identificar y gestionar las dependencias cuando el equipo trabaja en diferentes horarios
- Plan de contingencia: cómo definir qué se puede sacrificar si el tiempo escasea (scope buffer predefinido)

**instrucción: Módulo 3 — Detección de riesgos de entrega con IA**
Implementa el sistema de gestión de riesgos de producto:
- Las 10 señales de que un release está en riesgo de retrasarse
- Cómo usar IA para analizar el burndown del equipo y predecir con 2 semanas de antelación si habrá retraso
- Proceso de gestión de riesgo: cómo comunicar un riesgo a stakeholders sin crear pánico
- Decisiones difíciles: cuándo cambiar la fecha vs. reducir el scope vs. aumentar recursos

**instrucción: Módulo 4 — Alineación asíncrona con stakeholders**
Construye el sistema de comunicación de producto:
- Product newsletter semanal: formato de actualización de 5 minutos para todo el negocio
- Reunión de roadmap trimestral: cómo presentar el plan de 90 días a liderazgo de manera que genere confianza
- Gestión de peticiones de stakeholders: proceso para recibir, evaluar y comunicar las peticiones sin interrumpir al equipo
- OKRs de producto: cómo conectar las features del roadmap con los objetivos de negocio de manera visible para todos

**instrucción: Módulo 5 — Retrospectivas de producto con IA**
Diseña el proceso de aprendizaje continuo:
- Post-mortem de feature: qué aprendemos cuando algo no funciona como esperábamos
- Análisis de impacto de release: cómo medir si lo que construimos consiguió el resultado esperado
- Proceso de iteración: cómo decidir cuándo mejorar lo existente vs. construir algo nuevo
- Documentación de decisiones: cómo registrar el contexto de cada decisión importante para que el equipo entienda la historia del producto

**objetivo final:** Un proceso de gestión de producto remoto que entrega releases predecibles, mantiene al equipo alineado sin microgestión y aprende continuamente de los resultados para mejorar la precisión de las decisiones futuras.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar roadmap de producto con equipos remotos usando IA: priorización, planning y alineación',
                'vote_score'       => 50,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestionar equipos remotos de RRHH con IA y procesos asíncronos',
                'description'      => 'Usa IA para coordinar procesos de selección distribuidos, mantener la cultura en remoto, automatizar onboarding y hacer seguimiento del bienestar del equipo.',
                'prompt_content'   => <<<'EOT'
Actúa como un Head of People con experiencia en la gestión de equipos de RRHH distribuidos globalmente y en el uso de IA para mantener la calidad de los procesos de talento y la coherencia cultural en organizaciones completamente remotas.

**tarea:**
Gestiono el área de RRHH de una empresa totalmente remota con empleados en múltiples países. El reto es mantener la calidad de los procesos de selección, onboarding y desarrollo con un equipo de RRHH también distribuido, mientras mantengo una cultura fuerte sin un espacio físico compartido.

**instrucción: Sección 1 — Coordinación del proceso de selección distribuido**
Construye el sistema de reclutamiento para equipos remotos:
- Proceso de selección 100% asíncrono: cómo avanzar a los candidatos sin necesitar reuniones síncronas entre entrevistadores
- Cómo usar IA para analizar CVs y hacer el primer filtrado basándose en criterios objetivos predefinidos
- Plantilla de evaluación de candidatos: cómo estandarizar el feedback de los entrevistadores para que sea comparable
- Coordinación de paneles de entrevista: cómo organizar a 4-5 entrevistadores distribuidos en distintas zonas horarias
- Decisión final: proceso de consenso asíncrono para elegir al candidato sin necesitar una reunión de debrief larga

**instrucción: Sección 2 — Onboarding remoto estructurado con IA**
Diseña el proceso de incorporación para empleados remotos:
- Plan de onboarding de 90 días: qué debe aprender, conocer y producir el nuevo empleado en cada fase
- Cómo usar IA para personalizar el plan de onboarding según el rol y la experiencia del nuevo empleado
- Sistema de buddy/mentor: cómo emparejar a nuevos empleados con compañeros experimentados y hacer seguimiento de la relación
- Check-ins automatizados: secuencia de pulse surveys en los días 7, 30, 60 y 90 para detectar problemas de integración temprano

**instrucción: Sección 3 — Cultura y bienestar en remoto con IA**
Construye el sistema de cultura remota:
- Rituales de equipo asíncronos que crean sentido de pertenencia: qué funciona, qué no y por qué
- Cómo usar IA para analizar el sentiment de los empleados a partir de encuestas de clima y comunicaciones internas (preservando la privacidad)
- Sistema de reconocimiento en remoto: cómo celebrar logros de manera que todo el equipo se entere y se sienta parte
- Detección de burnout temprana: señales de alerta en empleados remotos y cómo intervenir de manera proactiva

**instrucción: Sección 4 — Seguimiento del rendimiento en remoto**
Implementa el sistema de performance management distribuido:
- OKRs para empleados remotos: cómo definir objetivos que midan resultados, no horas de trabajo
- Check-in quincenal de desarrollo: formato de 1:1 de 30 minutos que mantiene la conexión y el progreso
- Revisión de rendimiento anual asíncrona: proceso que recoge perspectivas de múltiples fuentes sin sesgo de visibilidad
- Planes de mejora de rendimiento (PIP) en remoto: cómo gestionar bajo rendimiento cuando no puedes ver al empleado

**instrucción: Sección 5 — Métricas de people en remoto con IA**
Define el sistema de medición del equipo:
- KPIs del área de RRHH remoto: tiempo de contratación, calidad de contratación, satisfacción de onboarding, eNPS, rotación voluntaria
- Dashboard mensual de people metrics para el liderazgo
- Cómo usar IA para identificar predictores de rotación con 60-90 días de antelación
- Benchmarking de métricas contra empresas remotas comparables del sector

**objetivo final:** Un área de RRHH remota que opera con la misma calidad y coherencia que una presencial, usando IA para escalar los procesos sin perder el toque humano que hace que los empleados quieran quedarse.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Coordinar procesos de RRHH en remoto con IA: selección asíncrona, onboarding y cultura',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestionar equipos financieros remotos con IA y cierres automatizados',
                'description'      => 'Usa IA para coordinar el cierre contable mensual con equipos distribuidos, detectar anomalías, automatizar reporting y facilitar la comunicación financiera asíncrona.',
                'prompt_content'   => <<<'EOT'
Actúa como un CFO con experiencia en la gestión de equipos financieros y contables distribuidos globalmente, y en el uso de IA para reducir los tiempos de cierre, mejorar la precisión de los datos y mantener el control financiero en entornos completamente remotos.

**tarea:**
Gestiono un equipo financiero distribuido en diferentes países con distintas normativas contables y zonas horarias. El mayor reto es coordinar el cierre mensual, garantizar la calidad de los datos y comunicar los resultados financieros a tiempo. Voy a usar IA para hacer todo esto más eficiente.

**instrucción: Bloque 1 — Coordinación del cierre mensual con IA**
Diseña el proceso de cierre contable distribuido:
- Checklist de cierre mensual: todas las tareas, responsables, plazos y dependencias
- Cómo usar IA para identificar automáticamente las tareas del mes anterior que quedaron pendientes
- Sistema de semáforo de cierre: verde (completado), amarillo (en progreso, en plazo), rojo (en riesgo de retraso)
- Protocolo de coordinación asíncrona: cómo gestionar el cierre cuando el equipo trabaja en distintas zonas horarias

Crea el timeline de cierre mensual de 10 días hábiles con todas las tareas y su secuencia.

**instrucción: Bloque 2 — Detección de anomalías con IA**
Implementa el sistema de control de calidad financiero:
- Cómo usar IA para detectar transacciones anómalas, asientos inconsistentes y variaciones no justificadas
- Análisis de varianza automatizado: cómo generar el análisis de desviaciones presupuestarias en minutos
- Conciliaciones inteligentes: automatización de las conciliaciones bancarias y entre libros
- Alertas de compliance: cómo detectar automáticamente operaciones que requieren revisión por normativa

**instrucción: Bloque 3 — Reporting automatizado con IA**
Construye el sistema de informes financieros:
- Dashboard financiero mensual para el CEO: 5 métricas clave en una sola vista
- Pack de cierre para el consejo: estructura del informe ejecutivo de 10 páginas generado con IA
- Comentarios narrativos automatizados: cómo usar IA para escribir la explicación de los resultados en lenguaje de negocio
- Reporting multi-entidad: cómo consolidar estados financieros de múltiples subsidiarias con IA

**instrucción: Bloque 4 — Comunicación financiera asíncrona**
Diseña el sistema de comunicación del equipo financiero:
- Reunión de cierre semanal de 30 minutos: agenda estándar para mantener el ritmo sin alargar las reuniones
- Actualización asíncrona de progreso: plantilla diaria de 5 minutos durante el período de cierre
- Comunicación de resultados a los líderes de área: cómo enviar los P&L de cada departamento con contexto comprensible para no financieros
- Gestión de peticiones ad hoc: proceso para priorizar y responder a las solicitudes de análisis sin interrumpir el cierre

**instrucción: Bloque 5 — Mejora continua del proceso financiero con IA**
Construye el sistema de optimización:
- KPIs del departamento financiero: días de cierre, tasa de error, satisfacción de los stakeholders internos
- Post-mortem de cierre: qué salió mal, qué tomó más tiempo del previsto y cómo evitarlo el próximo mes
- Automatización progresiva: roadmap de automatización de tareas repetitivas del equipo financiero
- Benchmarking: cómo comparar métricas de eficiencia del departamento financiero con el sector

**objetivo final:** Reducir el tiempo de cierre mensual de 10 a 5 días hábiles y eliminar el 90% de los errores de datos mediante la automatización inteligente, liberando al equipo financiero para trabajo de análisis y valor estratégico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Coordinar cierre contable y reporting financiero con equipos remotos usando IA',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestionar proyectos legales complejos con equipos remotos y IA',
                'description'      => 'Usa IA para coordinar la gestión de asuntos legales complejos con equipos distribuidos: seguimiento de plazos, revisión de documentos y comunicación asíncrona con clientes.',
                'prompt_content'   => <<<'EOT'
Actúa como un Managing Partner con experiencia en la gestión de despachos de abogados con equipos distribuidos, y en el uso de IA para mejorar la eficiencia operativa sin comprometer la calidad jurídica ni la confidencialidad.

**tarea:**
Gestiono un equipo legal distribuido en diferentes ciudades o países que maneja asuntos legales complejos con múltiples partes, plazos críticos y documentación extensa. Quiero usar IA para coordinar mejor el trabajo, reducir el riesgo de errores y mejorar la comunicación con los clientes.

**instrucción: Sección 1 — Gestión de asuntos legales con IA**
Construye el sistema de gestión de matter (asunto legal):
- Estructura estándar de matter: fases, tareas, responsables, plazos y documentos por tipo de asunto (M&A, litigación, contratos, compliance)
- Cómo usar IA para generar el plan de trabajo de un asunto nuevo a partir del brief del cliente
- Sistema de seguimiento de plazos: alertas automáticas de vencimientos procesales, contractuales y regulatorios
- Gestión del equipo de asunto: cómo coordinar socios, asociados y paralegales que trabajan en remoto en el mismo caso

**instrucción: Sección 2 — Revisión y gestión documental con IA**
Implementa el sistema de gestión de documentos legales:
- Cómo usar IA para hacer una primera revisión de contratos: identificar cláusulas relevantes, riesgos y comparar con el estándar de mercado
- Due diligence asistida por IA: cómo organizar y analizar grandes volúmenes de documentación en operaciones corporativas
- Control de versiones: sistema para gestionar las versiones de un contrato en negociación con múltiples partes
- Biblioteca de precedentes: cómo usar IA para clasificar y recuperar los mejores documentos del despacho para cada situación

**instrucción: Sección 3 — Comunicación asíncrona con clientes**
Diseña el sistema de comunicación cliente-despacho:
- Protocolo de actualización al cliente: con qué frecuencia, en qué formato y a través de qué canal
- Plantilla de informe de situación de asunto: resumen ejecutivo para clientes no juristas
- Portal del cliente: cómo estructurar el acceso asíncrono del cliente a sus documentos y el estado de su asunto
- Gestión de preguntas urgentes del cliente en remoto: protocolo de respuesta cuando el abogado responsable no está disponible

**instrucción: Sección 4 — Control de calidad y riesgo en remoto**
Construye el sistema de supervisión de calidad legal:
- Revisión de trabajo en remoto: cómo un socio supervisa el trabajo de asociados distribuidos sin leer cada documento
- Checklist de calidad por tipo de trabajo: qué debe verificar el abogado antes de enviar cualquier documento al cliente
- Gestión de conflictos de interés: proceso automatizado para verificar conflictos en nuevos asuntos
- Protocolo de crisis: qué hacer cuando hay un error legal o un plazo en riesgo y el equipo está distribuido

**instrucción: Sección 5 — Retrospectivas de asunto con IA**
Diseña el proceso de aprendizaje continuo:
- Post-matter review: qué aprendemos de cada asunto completado (para mejorar el proceso y el conocimiento)
- Análisis de rentabilidad: cómo medir si el asunto fue rentable y qué lo afectó
- Documentación de lecciones aprendidas: cómo transferir el conocimiento del asunto a la base de conocimiento del despacho
- Feedback del cliente: proceso estructurado de recogida de feedback al cerrar un asunto

**objetivo final:** Un despacho legal remoto que opera con la misma rigurosidad y coordinación que uno presencial, usando IA para gestionar la complejidad sin sacrificar la calidad jurídica ni la relación de confianza con el cliente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar asuntos legales complejos con equipos remotos usando IA: plazos, documentos y cliente',
                'vote_score'       => 25,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestionar equipos de customer success remotos con IA y salud de cliente',
                'description'      => 'Usa IA para coordinar CSMs distribuidos, automatizar el seguimiento de health scores, detectar riesgos de churn y facilitar escalaciones efectivas en equipos remotos.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP de Customer Success con experiencia en la gestión de equipos de CSMs distribuidos en múltiples regiones y en el uso de IA para mantener la calidad del servicio al cliente y la visibilidad del estado de la cartera en entornos completamente remotos.

**tarea:**
Gestiono un equipo de 10-25 Customer Success Managers distribuidos en diferentes países y husos horarios, que gestiona una cartera de cientos de clientes. El mayor reto es mantener la calidad del servicio, detectar riesgos de churn con antelación y coordinar escalaciones cuando los problemas cruzan equipos. Quiero usar IA para hacerlo mejor.

**instrucción: Módulo 1 — Sistema de health score automatizado**
Construye el sistema de monitorización del estado de clientes:
- Las 8 señales más predictivas de churn en una cartera SaaS (con peso de cada una en el score total)
- Cómo automatizar la recopilación de datos para el health score: uso del producto, tickets de soporte, engagement con comunicaciones, NPS, frecuencia de login
- Categorías de salud: verde (sano), amarillo (en riesgo), rojo (crítico) con criterios objetivos para cada una
- Proceso de revisión de health score: con qué frecuencia revisar, quién actúa en cada categoría y cómo

Crea la fórmula de health score para mi producto con los pesos de cada variable y el proceso de cálculo mensual.

**instrucción: Módulo 2 — Coordinación del equipo de CSMs remotos**
Diseña el sistema de gestión del equipo distribuido:
- Distribución de cartera: cómo asignar cuentas a CSMs considerando zona horaria, idioma, tamaño y sector
- Reunión de equipo semanal de 45 minutos: agenda estándar para revisar riesgos de churn, compartir mejores prácticas y coordinar escalaciones
- Actualización asíncrona de cartera: plantilla semanal de cada CSM para informar del estado de sus cuentas clave
- Onboarding de nuevos CSMs remotos: proceso de ramping de 60 días con hitos y mentoring de un CSM senior

**instrucción: Módulo 3 — Detección y gestión de riesgos de churn**
Implementa el sistema de gestión de cuentas en riesgo:
- Protocolo de cuenta roja: qué hacer en las primeras 48 horas cuando una cuenta entra en riesgo crítico
- Plan de rescate de cliente: estructura del plan de acción para recuperar un cliente que ha expresado intención de no renovar
- Cómo usar IA para analizar las interacciones con el cliente y proponer la intervención más efectiva
- Escalación efectiva: cuándo y cómo involucrar al VP, al equipo de producto o a un ejecutivo de la empresa en una crisis de cliente

**instrucción: Módulo 4 — QBR y comunicación de valor asíncrona**
Construye el sistema de comunicación periódica con clientes:
- Quarterly Business Review (QBR) asíncrono: cómo entregar el valor de una QBR sin necesitar una reunión de 2 horas
- Executive briefing mensual: cómo enviar un resumen de valor al sponsor ejecutivo del cliente que refuerce la renovación
- Proceso de preparación de QBR con IA: cómo generar el análisis de uso, el ROI del cliente y las recomendaciones en 30 minutos
- Gestión de múltiples idiomas: cómo coordinar cuando los CSMs y los clientes hablan distintos idiomas

**instrucción: Módulo 5 — Retrospectivas y mejora continua en CS remoto**
Diseña el proceso de aprendizaje del equipo:
- Post-mortem de churn: qué aprendemos de cada cliente perdido y cómo evitar que vuelva a ocurrir
- Biblioteca de mejores prácticas: cómo documentar y compartir las técnicas de éxito entre los CSMs del equipo
- Coaching de CSMs con datos: cómo usar el análisis de la cartera de cada CSM para personalizar su desarrollo profesional
- Métricas de equipo: NRR, churn rate, tiempo de resolución de tickets, NPS, y satisfacción del equipo de CS

**objetivo final:** Un equipo de CS remoto que mantiene un NRR superior al 110%, detecta el churn con 90 días de antelación y opera con tanta visibilidad y coordinación que el VP puede gestionar una cartera de 500 clientes con 15 CSMs distribuidos globalmente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar equipos de CS remotos con IA: health scores, detección de churn y coordinación de CSMs',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestionar proyectos freelance con IA: planificación, seguimiento y clientes remotos',
                'description'      => 'Usa IA para planificar proyectos freelance, hacer seguimiento de entregas, gestionar clientes en remoto y prevenir los problemas más comunes de scope creep y retrasos.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de productividad para freelancers de alto rendimiento, especializado en el uso de IA para transformar la gestión de proyectos de una actividad caótica y reactiva en un sistema predecible que protege el tiempo del freelancer y deleita al cliente.

**tarea:**
Como freelancer, gestiono múltiples proyectos simultáneos con clientes en diferentes países y zonas horarias. Los mayores problemas que enfrento son el scope creep, los retrasos, la gestión de expectativas y la comunicación asíncrona con clientes que quieren respuestas inmediatas. Quiero usar IA para solucionar todo esto.

**instrucción: Paso 1 — Planificación de proyecto con IA**
Construye el sistema de planificación para proyectos freelance:
- Cómo usar IA para descomponer cualquier proyecto en tareas con estimaciones realistas
- Template de plan de proyecto de una página que comparto con el cliente al inicio
- Sistema de buffer de tiempo: cuánto tiempo extra añadir para absorber cambios sin afectar la fecha de entrega
- Definición de entregables: cómo documentar con precisión qué está incluido y qué no para prevenir el scope creep

Crea el proceso de kick-off de proyecto que hago con cada cliente nuevo en los primeros 3 días.

**instrucción: Paso 2 — Seguimiento asíncrono con el cliente**
Diseña el sistema de comunicación remota con clientes:
- Actualización semanal de proyecto: plantilla de 200 palabras que mantiene al cliente informado sin necesitar llamadas
- Proceso de aprobación asíncrona: cómo obtener sign-off del cliente en entregables sin necesitar una reunión
- Sistema de preguntas: cómo agrupar todas las dudas en un documento único para no interrumpir al cliente constantemente
- Canal de comunicación de urgencias: cómo diferenciar lo urgente de lo importante para que el cliente no te bombardee por Slack

**instrucción: Paso 3 — Gestión del scope creep con IA**
Implementa el sistema de protección del alcance:
- Detección de scope creep: cómo identificar cuando una petición del cliente está fuera del alcance acordado
- Script de respuesta al scope creep: cómo decir "eso no está incluido" de manera profesional que preserve la relación
- Sistema de change orders: plantilla de solicitud de cambio de alcance con precio adicional y plazo
- Política de revisiones: cuántas rondas de revisión incluye el proyecto y qué pasa cuando se superan

**instrucción: Paso 4 — Gestión del tiempo y productividad personal**
Construye el sistema de productividad del freelancer:
- Cómo usar IA para planificar la semana de trabajo con múltiples proyectos simultáneos
- Sistema de time blocking: cómo proteger el tiempo de trabajo profundo de las interrupciones de clientes
- Tracking de horas: cómo registrar el tiempo de manera eficiente y usarlo para mejorar las estimaciones futuras
- Gestión de la energía: cuándo hacer el trabajo más creativo y cuándo el administrativo

**instrucción: Paso 5 — Retrospectiva de proyecto con IA**
Diseña el proceso de aprendizaje continuo:
- Post-project review: qué aprendemos de cada proyecto para mejorar las estimaciones, el proceso y la relación con el cliente
- Análisis de rentabilidad: cuánto gané por hora real de trabajo en este proyecto y por qué
- Feedback del cliente: cómo pedir testimonio y referidos al cerrar un proyecto exitoso
- Mejora de plantillas: cómo actualizar los contratos, briefs y plantillas basándose en los problemas encontrados

**objetivo final:** Un sistema de gestión de proyectos freelance que reduce el estrés, elimina las sorpresas, mantiene a los clientes felices y permite aumentar el número de proyectos simultáneos en un 30% sin trabajar más horas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar proyectos freelance con IA: planificación, clientes remotos y prevención de scope creep',
                'vote_score'       => 55,
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
