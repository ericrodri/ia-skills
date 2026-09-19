<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills513Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'IA para productividad y gestión del tiempo en marketing',
                'description'      => 'Aprende a usar IA para construir un sistema de productividad personal como profesional de marketing: second brain digital, time blocking inteligente, priorización de tareas y automatización de las partes repetitivas del trabajo.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en productividad personal y gestión del tiempo especializado en profesionales de marketing digital, con experiencia en los métodos GTD, time blocking, deep work y en la integración de IA como asistente de productividad. Quiero construir un sistema de productividad personalizado para mi trabajo como profesional de marketing.

**Mi contexto:**
Trabajo en marketing, ya sea como freelancer, en un equipo interno o en una agencia. Mi día está fragmentado entre reuniones, campañas, creación de contenido, análisis de datos, informes y comunicación constante. Necesito un sistema que me ayude a trabajar con más foco, menos estrés y mejores resultados.

**Instrucción 1 — Construir mi second brain de marketing con IA:**
Diseña la arquitectura de un second brain digital para un profesional de marketing que incluya:
- Captura: cómo capturar con IA ideas de campañas, referencias de competencia, artículos relevantes e insights de clientes sin interrumpir el flujo de trabajo
- Organización: sistema de categorías para un marketer (por cliente, por canal, por tipo de contenido, por proyecto)
- Procesamiento: protocolo semanal para convertir las notas capturadas en acciones, briefs o ideas de campaña desarrolladas
- Recuperación: cómo usar IA para encontrar rápidamente una referencia, una idea anterior o un dato de rendimiento que necesito ahora

**Instrucción 2 — Time blocking inteligente para marketers:**
Crea un sistema de planificación semanal con time blocking diseñado para la realidad caótica del marketing:
- Bloques de deep work: cuándo y cómo proteger el tiempo para crear campañas, estrategias y contenido de calidad
- Bloques de gestión: reuniones, emails, Slack, revisión de métricas agrupados para minimizar la fragmentación
- Bloques de aprendizaje: mantenerse al día con tendencias, herramientas y cambios de algoritmos
- Cómo usar IA para planificar la semana en 15 minutos cada domingo y ajustar sobre la marcha cuando todo explota

**Instrucción 3 — Priorización de tareas de marketing con IA:**
Dame un sistema de priorización específico para marketers que incluya:
- Matriz de priorización para las típicas tensiones del marketing: urgente vs importante, campaña activa vs estrategia a largo plazo, petición del CEO vs plan del equipo
- Protocolo de inbox cero para email y mensajes de clientes: cómo usar IA para clasificar, responder y delegar
- Revisión diaria de 10 minutos: las 3 preguntas que debo hacerme cada mañana para enfocar el día
- Cómo decir no elegantemente a peticiones que rompen el foco sin dañar las relaciones

**Instrucción 4 — Automatización de tareas repetitivas de marketing:**
Identifica las 10 tareas más repetitivas en el trabajo de un marketer y dame el protocolo de automatización con IA para cada una:
- Reportes de campañas: cómo automatizar la extracción y narrativa de resultados semanales
- Respuestas a comentarios y mensajes en redes sociales: cuándo y cómo usar IA sin perder la voz humana
- Briefing de contenido: cómo generar briefs de calidad a partir de un objetivo y un público objetivo
- Research de competencia: automatizar la vigilancia semanal de competidores con IA

**Instrucción 5 — Gestión de la energía y el deep work en marketing:**
Diseña un protocolo de gestión de energía y deep work para marketers que incluya:
- Cómo identificar mis picos de energía cognitiva y alinearlos con las tareas más creativas y estratégicas
- Rituales de entrada y salida del deep work: cómo preparar el entorno y la mente para trabajar con máximo foco
- Gestión de la distracción digital: herramientas y protocolos para trabajar en marketing sin que las propias redes sociales te distraigan
- Recuperación activa: cómo usar los tiempos de menor energía para tareas de mantenimiento y aprendizaje

Termina con un plan de implementación de 30 días para pasar de un sistema de trabajo reactivo a uno proactivo y enfocado, con los cambios más pequeños que generan el mayor impacto en productividad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir un sistema de productividad personal con IA para marketers: second brain, time blocking, automatización y deep work.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'IA para productividad de desarrolladores y gestión del deep work',
                'description'      => 'Aprende a usar IA para maximizar el tiempo de coding de calidad, gestionar interrupciones, automatizar tareas administrativas del desarrollo y construir un sistema personal que te permita entrar en estado de flujo más rápido y por más tiempo.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en productividad de ingeniería de software con experiencia en los principios de deep work aplicados al desarrollo, en técnicas de gestión del tiempo para entornos ágiles y en el uso de IA como asistente de productividad técnica. Quiero construir un sistema de trabajo que maximice mi output de código de calidad.

**Mi contexto:**
Soy desarrollador de software, ya sea individual contributor o tech lead. Mi mayor enemigo para la productividad son las interrupciones constantes (Slack, reuniones, code reviews, preguntas del equipo), la fragmentación del tiempo y la procrastinación ante tareas técnicas complejas. Quiero usar IA para proteger mi tiempo de coding y ser más eficiente en todo lo demás.

**Instrucción 1 — Sistema de second brain técnico con IA:**
Diseña la arquitectura de un second brain para desarrolladores que incluya:
- Captura de conocimiento técnico: cómo documentar con IA lo que aprendo en cada problema resuelto, para no volver a perder el mismo tiempo
- Organización de notas técnicas: arquitectura de un sistema de notas de código, decisiones de diseño (ADRs), soluciones a problemas recurrentes y referencias de librerías
- Base de conocimiento personal: cómo construir una wiki personal de mis soluciones favoritas, snippets y patrones de diseño
- Cómo usar IA para recuperar contexto técnico antes de retomar un proyecto después de varios días sin tocarlo

**Instrucción 2 — Gestión del tiempo y las interrupciones en el desarrollo:**
Crea un protocolo de gestión del tiempo para desarrolladores que incluya:
- Time blocking para coding de calidad: cómo estructurar la semana para tener al menos 4 horas diarias de deep coding sin interrupciones
- Protocolo de gestión de Slack y mensajes: cómo responder sin estar disponible constantemente
- Gestión de reuniones: cómo reducir el número, la duración y el impacto de las reuniones en el foco de desarrollo
- Sistema de queues de trabajo: cómo gestionar la lista de tareas técnicas sin que el caos de prioridades decida por ti

**Instrucción 3 — Priorización técnica con IA:**
Dame un sistema de priorización para la lista de tareas de un desarrollador que considere:
- Impacto técnico vs esfuerzo: matriz para priorizar bugs, features, refactors y deuda técnica
- Dependencias y bloqueadores: cómo identificar y atacar lo que desbloquea a más personas primero
- Batching de tareas similares: agrupar code reviews, pequeñas correcciones, documentation updates para hacerlos juntos
- Cómo usar IA para hacer el planning técnico del sprint en 20 minutos con una checklist de calidad

**Instrucción 4 — Automatización de tareas administrativas del desarrollo:**
Identifica las tareas administrativas más costosas en el trabajo de un desarrollador y dame el protocolo de automatización con IA:
- Escritura de pull request descriptions: cómo generar descripciones útiles y contextuales automáticamente
- Documentación de código: protocolo para documentar con IA mientras se desarrolla, no después
- Preparación de demos y presentaciones técnicas para stakeholders no técnicos
- Gestión de issues y tickets: cómo usar IA para escribir, clasificar y estimar tickets de manera más eficiente

**Instrucción 5 — Entrar en estado de flujo más rápido:**
Diseña un ritual de inicio de sesión de coding de deep work con IA que incluya:
- Preparación del entorno: cómo organizar el workspace, los archivos y el contexto antes de empezar
- Calentamiento técnico: el ejercicio mental de 5 minutos que prepara el cerebro para la tarea compleja
- Gestión de la mente errante: qué hacer cuando te bloqueas para retomar el foco sin perder el hilo
- Cierre de sesión de coding: cómo capturar el estado actual del trabajo para retomarlo fácilmente mañana

Termina con las 8 distracciones más comunes que reducen la productividad de un desarrollador y la estrategia específica para eliminar o reducir cada una con ayuda de IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Maximizar el tiempo de coding de calidad con IA: second brain técnico, gestión de interrupciones y automatización de tareas administrativas.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'IA para productividad de diseñadores y gestión de proyectos creativos',
                'description'      => 'Aprende a usar IA para organizar tu flujo de trabajo creativo, automatizar las partes administrativas del diseño, proteger el tiempo de trabajo profundo y gestionar múltiples proyectos sin sacrificar la calidad ni el bienestar.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de productividad creativa especializado en diseñadores de producto, UX/UI y comunicación, con experiencia en la integración de IA en flujos de trabajo creativos y en la gestión del equilibrio entre la demanda de los clientes y el espacio mental necesario para la creatividad. Quiero construir un sistema de trabajo que me permita diseñar mejor y con menos estrés.

**Mi contexto:**
Soy diseñador/a de producto, UX/UI, gráfico o de comunicación. Mi trabajo requiere alternar entre pensamiento creativo profundo y tareas operativas (feedback, revisiones, entregas, presentaciones, gestión de archivos). La fragmentación del tiempo es mi mayor enemigo creativo y necesito un sistema que lo resuelva.

**Instrucción 1 — Sistema de organización de proyectos creativos con IA:**
Diseña un sistema de gestión de proyectos de diseño que incluya:
- Estructura de carpetas y archivos: cómo organizar los proyectos para que cualquier persona del equipo (o yo en 6 meses) pueda entender el estado y el proceso
- Brief de proyecto: plantilla de brief que uso para clarificar expectativas con el cliente ANTES de empezar, reduciendo revisiones
- Control de versiones creativo: cómo nombrar versiones de diseño para no perder nada y comunicar el progreso claramente
- Sistema de archivo de proyectos terminados: qué guardar, qué descartar y cómo recuperar elementos de proyectos anteriores

**Instrucción 2 — Time blocking para el trabajo creativo:**
Crea un sistema de planificación semanal para diseñadores que incluya:
- Bloques de deep design: cuándo y cómo proteger el tiempo para el trabajo creativo de alta concentración
- Bloques de feedback y revisiones: cómo agrupar todas las rondas de revisión para no interrumpir el flujo creativo
- Bloques de exploración y aprendizaje: tiempo dedicado a explorar nuevas referencias, herramientas y tendencias
- Cómo negociar el calendario con clientes y managers para proteger el tiempo creativo sin parecer poco disponible

**Instrucción 3 — Automatización de tareas administrativas del diseño:**
Identifica las tareas más repetitivas del trabajo de un diseñador y dame el protocolo de automatización con IA:
- Presentación de diseños a clientes: cómo generar automáticamente la narrativa y las notas de presentación
- Respuesta a feedback de clientes: cómo usar IA para responder feedback de manera estructurada y constructiva
- Generación de handoff para desarrollo: cómo documentar con IA las especificaciones de diseño para el equipo técnico
- Creación de moodboards y referencias: cómo usar IA para investigar y organizar referencias visuales rápidamente

**Instrucción 4 — Gestión de la energía creativa:**
Dame un protocolo de gestión de energía creativa que incluya:
- Cómo identificar mis mejores momentos del día para el trabajo creativo más exigente
- Rituales de entrada al estado de flujo creativo: qué hace que mi creatividad fluya y cómo reproducirlo intencionalmente
- Técnicas para superar el bloqueo creativo con IA: cómo usar IA cuando me quedo sin ideas o cuando todas las ideas me parecen mediocres
- Recuperación creativa: cómo recargar cuando el trabajo de encargo ha agotado mi energía creativa

**Instrucción 5 — Gestión de múltiples clientes y proyectos simultáneos:**
Diseña un sistema para gestionar múltiples proyectos de diseño en paralelo sin perder el hilo de ninguno:
- Dashboard de proyectos: cómo mantener una visión de todos los proyectos activos, sus deadlines y su estado
- Cambio de contexto eficiente: protocolo para pasar de un proyecto a otro perdiendo el mínimo tiempo de calentamiento
- Gestión de expectativas con clientes cuando hay retrasos o cambios de prioridad
- Cómo usar IA para preparar el briefing de retoma de un proyecto del que llevas días alejado

Termina con los 6 hábitos de productividad que tienen los diseñadores más creativos y prolíficos, y cómo adoptar cada uno con ayuda de IA sin que suponga una carga adicional.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Organizar proyectos creativos, proteger el tiempo de deep design y automatizar tareas administrativas con IA para diseñadores.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'IA para productividad en ventas y optimización del tiempo comercial',
                'description'      => 'Aprende a usar IA para maximizar el tiempo de venta real, automatizar las partes administrativas del proceso comercial, priorizar oportunidades de alto impacto y construir rutinas de alto rendimiento para comerciales y directores de ventas.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de ventas y experto en productividad comercial con experiencia en la optimización del tiempo de representantes de ventas y directores comerciales, en la automatización del proceso de ventas con IA y en la construcción de rutinas de alto rendimiento para equipos comerciales. Quiero construir un sistema de productividad de ventas que maximice mi tiempo de venta activo y mis resultados.

**Mi contexto:**
Soy representante de ventas, account executive o director comercial. El tiempo es mi único recurso real y lo pierdo en tareas que no generan revenue: logging en el CRM, preparación de propuestas, emails de seguimiento, reporting, reuniones internas. Quiero usar IA para recuperar ese tiempo y dedicarlo a lo que realmente importa: vender.

**Instrucción 1 — Auditoría del tiempo de venta con IA:**
Diseña una auditoría de tiempo comercial que me ayude a identificar dónde van realmente mis horas:
- Categorías de actividades: tiempo de venta activo (llamadas, demos, negociaciones), administración (CRM, emails, propuestas), reuniones internas, desplazamientos, formación
- Cómo usar IA para analizar mi historial de actividad y calcular el porcentaje de tiempo en cada categoría
- Benchmark de referencia: cuánto tiempo debería dedicar un top performer a cada categoría
- Plan de acción para recuperar tiempo de administración y convertirlo en tiempo de venta

**Instrucción 2 — Automatización del proceso de ventas con IA:**
Identifica las tareas más costosas en tiempo del proceso de ventas y dame el protocolo de automatización:
- Logging en el CRM: cómo usar IA para generar automáticamente notas de reunión y actualizar el CRM tras cada interacción
- Emails de seguimiento: sistema de plantillas inteligentes que se personalizan con el contexto de cada deal
- Preparación de propuestas comerciales: cómo generar el 80% de una propuesta con IA en 20 minutos
- Research de prospecto: protocolo de investigación de una empresa y un contacto en 10 minutos con IA

**Instrucción 3 — Priorización del pipeline con IA:**
Diseña un sistema de priorización diaria y semanal del pipeline que incluya:
- Revisión diaria de 15 minutos: qué deals requieren acción hoy, a quién llamo primero y por qué
- Señales de prioridad: engagement del prospecto, urgencia declarada, tamaño del deal, probabilidad de cierre
- Gestión del pipeline con IA: cómo identificar deals zombies (sin movimiento real) y cómo decidir si invertir más o descartar
- Planning de la semana comercial: cómo organizar llamadas, demos, seguimientos y prospección para maximizar el output

**Instrucción 4 — Rutinas de alto rendimiento para vendedores:**
Diseña una rutina diaria de alto rendimiento para un profesional de ventas que incluya:
- Rutina de inicio del día (30 minutos): revisión del pipeline, preparación de las 3 interacciones más importantes del día y mindset
- Bloques de prospección activa: cuándo y cómo hacer el outreach de calidad sin que lo urgente aplaste lo importante
- Rutina de cierre del día (15 minutos): actualización del CRM, preparación del día siguiente, reflexión sobre qué funcionó
- Gestión de la energía en ventas: cómo mantener el nivel de energía y entusiasmo en un trabajo de rechazo constante

**Instrucción 5 — Second brain comercial con IA:**
Diseña un sistema de gestión del conocimiento comercial que incluya:
- Biblioteca de objecciones y respuestas: cómo capturar y organizar las mejores respuestas a las objecciones más frecuentes
- Casos de éxito y referencias: cómo tener siempre a mano la historia de cliente correcta para cada situación
- Inteligencia competitiva: cómo actualizar y acceder rápidamente a información sobre la competencia durante una venta
- Aprendizajes de deals perdidos: protocolo de análisis post-mortem para no perder el mismo deal dos veces

Termina con los 7 cambios de comportamiento que transforman a un vendedor promedio en un top performer, y cómo la IA puede acelerar la adopción de cada uno.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Maximizar el tiempo de venta activo, automatizar la administración comercial y construir rutinas de alto rendimiento con IA.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'IA para productividad de product managers y gestión del tiempo estratégico',
                'description'      => 'Aprende a usar IA para gestionar la agenda caótica de un product manager, priorizar entre urgencias y estrategia, automatizar la documentación de producto y construir un sistema que te permita pensar con claridad mientras ejecutas con velocidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en productividad para product managers con experiencia en la gestión del rol más interrumpido y demandado de la organización, en técnicas de priorización estratégica y en el uso de IA para automatizar la documentación y la comunicación de producto. Quiero construir un sistema de trabajo que me permita ser estratégico sin dejar de ejecutar.

**Mi contexto:**
Soy Product Manager o Head of Product. Mi mayor desafío de productividad es que todo el mundo necesita algo de mí: engineering tiene preguntas de specs, ventas quiere features para cerrar deals, el CEO tiene nuevas ideas, los usuarios tienen bugs y peticiones, y yo necesito pensar en la estrategia de largo plazo en medio de todo este caos.

**Instrucción 1 — Sistema de captura y gestión de información de producto:**
Diseña un sistema de second brain para product managers que incluya:
- Captura centralizada: cómo recopilar con IA insights de usuarios, ideas de features, peticiones de stakeholders y decisiones tomadas en un único lugar organizado
- Procesamiento semanal: protocolo de 1 hora para procesar lo capturado y convertirlo en acciones, tickets o actualizaciones del roadmap
- Gestión de las decisiones de producto: cómo documentar con IA cada decisión importante, sus alternativas consideradas y los datos que la respaldaron
- Acceso rápido al contexto: cómo recuperar el estado de un proyecto o una decisión de hace 3 meses en menos de 2 minutos

**Instrucción 2 — Time blocking estratégico para PMs:**
Crea un sistema de planificación semanal para product managers que proteja el tiempo estratégico:
- Bloques de estrategia y visión: tiempo protegido para pensar en el largo plazo sin reuniones ni interrupciones
- Bloques de discovery: tiempo dedicado a hablar con usuarios, analizar métricas y entender el problema
- Bloques de ejecución: acompañamiento al equipo de desarrollo, revisión de specs, unblocking
- Bloques de stakeholder management: reuniones de alineación, actualizaciones de roadmap, gestión de expectativas
- Cómo proteger estos bloques cuando todo el mundo quiere reuniones contigo a cualquier hora

**Instrucción 3 — Automatización de la documentación de producto:**
Identifica las tareas de documentación más costosas para un PM y dame el protocolo de automatización con IA:
- PRDs (Product Requirements Documents): cómo generar la estructura y el primer borrador con IA a partir de un brief de problema
- Notas de reunión y decisiones: cómo transcribir y sintetizar reuniones técnicas con IA en un formato accionable
- Actualizaciones de roadmap: cómo comunicar cambios de prioridad de manera clara a diferentes audiencias (técnicos, ejecutivos, ventas)
- Release notes y changelogs: cómo generar automáticamente comunicaciones de lanzamiento de features desde las specs técnicas

**Instrucción 4 — Priorización y gestión de la demanda entrante:**
Dame un sistema para gestionar el flujo constante de peticiones que recibe un PM:
- Protocolo de intake de nuevas peticiones: cómo evaluar rápidamente con IA si una petición merece análisis profundo o puede rechazarse educadamente
- Gestión de las peticiones de ventas: protocolo para evaluar peticiones de feature para cerrar deals específicos
- Comunicación del no: cómo rechazar o posponer una petición de manera que el stakeholder se sienta escuchado y comprenda la razón
- Weekly digest: cómo consolidar todas las peticiones de la semana en un resumen ejecutivo para el equipo de producto

**Instrucción 5 — Reflexión estratégica y aprendizaje continuo con IA:**
Diseña un ritual de reflexión para product managers que incluya:
- Revisión semanal de producto: qué preguntas estratégicas debo responder cada semana para asegurarme de que el producto avanza en la dirección correcta
- Retrospectiva mensual de decisiones: cómo revisar las decisiones del mes anterior con IA y extraer aprendizajes
- Radar de tendencias: cómo mantenerme al día con las tendencias del sector, la competencia y las necesidades de los usuarios en 30 minutos semanales
- Espacio de pensamiento estratégico: cómo usar IA como interlocutor para desarrollar y refinar ideas estratégicas

Termina con los 5 hábitos que distinguen a los mejores product managers del mundo en términos de productividad y gestión del tiempo, y cómo adoptarlos usando IA como acelerador.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar el caos del rol de PM con IA: second brain, time blocking estratégico, documentación automatizada y priorización.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'IA para productividad en RRHH y gestión eficiente del tiempo de personas',
                'description'      => 'Aprende a usar IA para automatizar las tareas más repetitivas de RRHH, gestionar la agenda de un departamento de personas de alto impacto y construir sistemas que te permitan enfocarte en el trabajo estratégico de talento.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en productividad aplicada al área de RRHH y gestión de personas, con experiencia en la automatización de procesos de recursos humanos con IA, en la gestión del tiempo en un departamento que atiende simultáneamente las necesidades de empleados, managers y dirección. Quiero construir un sistema de productividad que libere tiempo para el trabajo de RRHH de alto impacto.

**Mi contexto:**
Soy directora/director de RRHH, HR Business Partner o técnico/a de personas. Mi trabajo combina tareas muy operativas (contratos, nóminas, onboarding, administración) con trabajo estratégico (desarrollo de talento, cultura, cambio organizacional). La trampa es que las urgencias operativas siempre ganan al trabajo estratégico.

**Instrucción 1 — Sistema de gestión del conocimiento de RRHH con IA:**
Diseña un second brain para profesionales de RRHH que incluya:
- Captura de información de empleados y conversaciones sensibles: cómo documentar con IA conversaciones de desarrollo, feedback de evaluaciones y planes de acción manteniendo la confidencialidad
- Base de conocimiento de políticas y procedimientos: cómo usar IA para responder preguntas frecuentes de empleados sin tener que buscar el documento cada vez
- Seguimiento de compromisos adquiridos: sistema para no perder ningún compromiso tomado con empleados o managers
- Inteligencia de talento: cómo organizar la información sobre el potencial y las aspiraciones de los empleados para tenerla siempre a mano en conversaciones clave

**Instrucción 2 — Automatización de procesos de RRHH con IA:**
Identifica los 8 procesos más repetitivos del área de RRHH y dame el protocolo de automatización con IA para cada uno:
- Onboarding de nuevos empleados: cómo automatizar la comunicación, los documentos y el seguimiento del proceso
- Solicitudes de empleados (vacaciones, certificados, información): sistema de atención automatizada para las preguntas más frecuentes
- Preparación de entrevistas: cómo generar preguntas de entrevista personalizadas al puesto y al candidato con IA
- Evaluaciones de desempeño: cómo usar IA para generar borradores de evaluación a partir de datos y notas del manager

**Instrucción 3 — Time blocking para RRHH estratégico:**
Diseña una planificación semanal para profesionales de RRHH que proteja el tiempo de alto impacto:
- Bloques de trabajo estratégico: desarrollo de programas de talento, cultura, análisis de datos de personas
- Bloques de acompañamiento a managers: coaching, conversaciones de desarrollo, gestión de conflictos
- Bloques de administración: contratos, nóminas, documentación — agrupados para minimizar el impacto en el día
- Bloques de escucha activa: conversaciones con empleados, pulso de la organización, detección temprana de problemas
- Cómo gestionar las urgencias de RRHH (conflictos, bajas, despidos) sin que destruyan la planificación

**Instrucción 4 — Comunicación de RRHH eficiente con IA:**
Dame un sistema de comunicación para el departamento de RRHH que incluya:
- Plantillas de comunicación para los momentos más frecuentes: bienvenida, evaluaciones, promociones, bajas, cambios organizativos
- Protocolo de comunicación sensible: cómo usar IA para preparar conversaciones difíciles (despidos, feedback duro, conflictos)
- Newsletter interna de RRHH: cómo generar un comunicado mensual de personas con IA en 30 minutos
- Documentación de políticas: cómo transformar políticas de empresa en textos claros y comprensibles para todos los empleados

**Instrucción 5 — Métricas de productividad del área de RRHH:**
Diseña un sistema de medición de la productividad y el impacto del departamento de RRHH que incluya:
- Tiempo dedicado a trabajo operativo vs estratégico: cómo medir y mejorar este ratio mes a mes
- Velocidad de procesos clave: tiempo de contratación, tiempo de onboarding hasta productividad, tiempo de resolución de conflictos
- Satisfacción interna: NPS de empleados sobre el servicio de RRHH, calidad percibida del apoyo del departamento
- Impacto estratégico: correlación entre iniciativas de RRHH y métricas de negocio (retención, productividad, engagement)

Termina con los 5 cambios de sistema de trabajo que más liberan tiempo a los profesionales de RRHH y cómo implementar cada uno en menos de una semana con ayuda de IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Automatizar procesos repetitivos de RRHH con IA y liberar tiempo para el trabajo estratégico de talento y cultura.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'IA para productividad financiera y automatización del trabajo del CFO',
                'description'      => 'Aprende a usar IA para acelerar el ciclo de cierre financiero, automatizar el reporting, gestionar mejor el tiempo estratégico del CFO y construir sistemas que permitan al equipo financiero pasar de ejecutar a analizar y decidir.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en productividad financiera y automatización de procesos de FP&A (Financial Planning & Analysis) con experiencia en la implementación de IA en departamentos financieros para reducir ciclos de cierre, mejorar la calidad del análisis y liberar tiempo para el trabajo de alto valor. Quiero transformar la manera de trabajar de mi equipo financiero.

**Mi contexto:**
Soy CFO, director financiero o controller de una empresa. Mi equipo dedica demasiado tiempo a recopilar datos, hacer conciliaciones manuales y preparar informes que llegan tarde y no generan el impacto que deberían. Necesito un sistema que automatice lo mecánico para que mi equipo pueda enfocarse en el análisis y en apoyar las decisiones del negocio.

**Instrucción 1 — Auditoría del tiempo del equipo financiero con IA:**
Diseña una auditoría de productividad para el departamento financiero que identifique:
- Actividades de alto valor (análisis, modelado, asesoramiento estratégico): cuánto tiempo deberían representar y cuánto representan ahora
- Actividades mecánicas automatizables (extracción de datos, conciliaciones, formateo de informes): candidatas prioritarias a eliminar con IA
- Actividades de coordinación (reuniones de cierre, revisiones de datos, aprobaciones): cómo optimizar sin eliminarlas
- Plan de transformación: hoja de ruta de 90 días para pasar de un equipo ejecutor a uno analítico

**Instrucción 2 — Automatización del ciclo de cierre mensual:**
Dame un protocolo de automatización del cierre mensual con IA que incluya:
- Extracción y validación de datos: cómo configurar alertas de calidad de datos que detecten anomalías automáticamente
- Conciliaciones automatizadas: qué conciliaciones se pueden automatizar al 100% y cuáles necesitan revisión humana
- Generación del primer borrador del P&L: cómo usar IA para generar la narrativa de variaciones a partir de los datos
- Pack de presentación al board: automatizar el 70% de la preparación del pack mensual dejando a los analistas la interpretación y las recomendaciones

**Instrucción 3 — Second brain financiero con IA:**
Diseña un sistema de gestión del conocimiento financiero que incluya:
- Captura de decisiones financieras: cómo documentar con IA cada decisión importante, los supuestos utilizados y los datos de respaldo
- Base de supuestos de modelos: sistema para mantener actualizados los supuestos macro, sectoriales y de negocio que alimentan los modelos
- Biblioteca de modelos y plantillas: cómo organizar y recuperar fácilmente los modelos financieros del equipo
- Inteligencia competitiva financiera: cómo mantener actualizada la información financiera pública de los principales competidores

**Instrucción 4 — Time blocking estratégico para el CFO:**
Crea un sistema de gestión del tiempo para el CFO que incluya:
- Bloques de visión estratégica: tiempo protegido para pensar en la estructura financiera a largo plazo, oportunidades de inversión y gestión del capital
- Bloques de asesoramiento al CEO y directivos: conversaciones de apoyo a decisiones estratégicas del negocio
- Bloques de gestión del equipo financiero: desarrollo del equipo, revisión de calidad, eliminación de bloqueadores
- Gestión de urgencias financieras: cómo manejar crisis de liquidez, auditorías imprevistas o peticiones urgentes del board sin destruir la planificación

**Instrucción 5 — Comunicación financiera eficiente con IA:**
Dame un sistema de comunicación financiera que incluya:
- Plantillas de narrativa financiera: cómo generar con IA el comentario de los resultados mensuales en 30 minutos
- Presentaciones al board: cómo estructurar y preparar una presentación financiera de alta calidad con IA
- Comunicación de finanzas a no financieros: protocolo para traducir los números en historias de negocio que entiendan ventas, marketing y operaciones
- Email ejecutivo de resultados: plantilla del email quincenal del CFO al equipo directivo con el estado financiero de la empresa

Termina con los 6 procesos financieros que más tiempo roban a los equipos de finanzas y que la IA puede reducir en más del 50%, con el protocolo específico para cada uno.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Automatizar el ciclo de cierre financiero, optimizar el tiempo del CFO y transformar el equipo financiero con IA.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'IA para productividad en despachos jurídicos y gestión del tiempo legal',
                'description'      => 'Aprende a usar IA para automatizar las tareas más repetitivas del trabajo jurídico, gestionar el tiempo de manera eficiente en un entorno de alta presión y construir sistemas que permitan a abogados y equipos legales enfocarse en el trabajo de alto valor.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de productividad especializado en despachos de abogados y departamentos jurídicos in-house, con experiencia en la automatización de procesos legales con IA, en la gestión del tiempo billable y en la construcción de sistemas de trabajo que aumenten la rentabilidad sin sacrificar la calidad jurídica. Quiero transformar la productividad de mi práctica legal.

**Mi contexto:**
Soy abogado en un despacho, abogado in-house o director jurídico. El tiempo es mi principal activo (en muchos casos es el activo que facturamos directamente). Sin embargo, una gran parte de mi jornada se va en tareas de bajo valor: búsqueda de documentos, formateo de contratos, research repetitivo, gestión de emails y reuniones de coordinación. Quiero recuperar ese tiempo.

**Instrucción 1 — Auditoría del tiempo jurídico con IA:**
Diseña una auditoría de tiempo para despachos de abogados que clasifique las actividades en:
- Trabajo jurídico de alto valor (estrategia legal, negociación, argumentación): qué porcentaje de la jornada debería representar y cómo aumentarlo
- Trabajo jurídico de valor medio (redacción estándar, research, revisión de documentos): cómo hacerlo más eficiente con IA
- Trabajo administrativo (formateo, filing, coordinación, emails): cómo reducirlo al mínimo o automatizarlo
- Plan de recuperación de tiempo: acciones concretas para redistribuir el tiempo hacia el trabajo de mayor valor

**Instrucción 2 — Automatización del trabajo jurídico con IA:**
Identifica las 8 tareas más repetitivas del trabajo legal y dame el protocolo de automatización con IA:
- Research jurídico: cómo usar IA para hacer una primera búsqueda de jurisprudencia y doctrina en 10 minutos en lugar de 2 horas
- Contratos estándar: cómo generar el primer borrador de contratos recurrentes (NDA, servicios, compraventa) con IA y revisarlo en lugar de crearlo desde cero
- Due diligence: cómo usar IA para revisar grandes volúmenes de documentos y extraer los puntos clave
- Correspondencia jurídica: plantillas de comunicaciones frecuentes que se personalizan con IA en segundos

**Instrucción 3 — Sistema de second brain jurídico:**
Diseña un sistema de gestión del conocimiento legal que incluya:
- Biblioteca de precedentes y cláusulas: cómo organizar y recuperar rápidamente las mejores cláusulas y argumentos de trabajos anteriores
- Gestión de plazos y obligaciones: sistema con alertas de IA para no perder nunca un plazo procesal o contractual
- Base de conocimiento jurídico: cómo capturar y organizar el aprendizaje de cada asunto para no partir de cero en el siguiente caso similar
- Gestión de clientes: cómo mantener un registro actualizado del estado de cada asunto y los próximos pasos

**Instrucción 4 — Time blocking en un entorno jurídico de alta presión:**
Crea un sistema de planificación del tiempo para abogados que incluya:
- Bloques de trabajo jurídico profundo: cómo proteger tiempo para el trabajo que requiere máxima concentración (redacción de demandas, preparación de juicios, negociaciones complejas)
- Gestión de urgencias del cliente: cómo manejar las urgencias legales sin que destruyan la planificación del día
- Gestión de emails y llamadas de cliente: protocolo de respuesta que mantenga la satisfacción del cliente sin estar disponible las 24 horas
- Planificación de la semana jurídica: cómo organizar la agenda de un abogado en 20 minutos cada lunes por la mañana

**Instrucción 5 — Productividad en la gestión del despacho:**
Para socios y directores de despacho, dame un sistema de gestión del negocio jurídico con IA que incluya:
- Seguimiento de la rentabilidad por asunto y por cliente: cómo saber qué trabajo es realmente rentable y cuál no
- Gestión de la carga de trabajo del equipo: cómo distribuir asuntos de manera óptima con IA
- Desarrollo de negocio: cómo usar IA para identificar oportunidades de upsell y nuevas materias para clientes existentes
- Formación continua del equipo: sistema de actualización jurídica eficiente para todo el despacho

Termina con los 5 cambios de sistema de trabajo que más aumentan la rentabilidad y la satisfacción de los abogados, según estudios de productividad en despachos de éxito, y cómo implementarlos con IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Automatizar tareas jurídicas repetitivas, gestionar el tiempo billable y construir un second brain legal con IA.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'IA para productividad en atención al cliente y gestión eficiente del soporte',
                'description'      => 'Aprende a usar IA para gestionar el volumen de soporte de manera eficiente, automatizar respuestas a consultas frecuentes, priorizar tickets de alto impacto y construir sistemas que mejoren tanto la productividad del equipo como la satisfacción del cliente.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en operaciones de customer support y productividad de equipos de atención al cliente, con experiencia en la implementación de IA para gestionar volúmenes altos de tickets, reducir el tiempo de resolución y mejorar la experiencia del cliente sin aumentar el tamaño del equipo. Quiero construir un sistema de soporte más eficiente.

**Mi contexto:**
Soy manager de customer success, director de soporte o responsable de atención al cliente. Mi equipo está saturado de tickets, los tiempos de respuesta son altos y la satisfacción del cliente está bajando. Al mismo tiempo, el trabajo más valioso (resolver problemas complejos, construir relaciones, identificar mejoras de producto) se pierde entre la avalancha de consultas repetitivas.

**Instrucción 1 — Auditoría de productividad del equipo de soporte con IA:**
Diseña una auditoría de eficiencia del equipo de soporte que analice:
- Clasificación de tickets por tipo: consultas repetitivas que se pueden automatizar, problemas técnicos que necesitan especialista, problemas de relación que necesitan touch humano
- Métricas de rendimiento actual: tiempo de primera respuesta, tiempo de resolución, reaperturas, escalaciones
- Benchmark de referencia: qué métricas debería tener un equipo de soporte de alto rendimiento de mi tamaño
- Oportunidades de mejora: las 3 acciones con mayor impacto en eficiencia que puedo tomar en los próximos 30 días

**Instrucción 2 — Automatización de respuestas con IA:**
Crea un sistema de automatización de soporte que incluya:
- Categorización automática de tickets: cómo usar IA para clasificar y priorizar tickets en el momento que llegan
- Respuestas automáticas de calidad: protocolo para crear respuestas automáticas que no parezcan robots — cómo personalizarlas con el contexto del ticket
- Base de conocimiento dinámica: cómo construir y mantener actualizada una base de conocimiento que la IA use para responder
- Cuándo escalar a humano: criterios claros para que la IA sepa cuándo transferir al agente humano sin generar frustración

**Instrucción 3 — Herramientas de productividad para agentes de soporte:**
Diseña un sistema de productividad individual para agentes de customer support que incluya:
- Gestión de la bandeja de tickets: cómo organizar el trabajo diario para atender el mayor número de clientes con la mejor calidad
- Plantillas inteligentes: cómo usar IA para generar respuestas personalizadas a partir de plantillas base en segundos
- Gestión de tickets complejos: protocolo para abordar problemas de varios pasos sin perder el hilo ni al cliente
- Gestión de la energía emocional: cómo mantener la actitud de servicio cuando llevas 50 tickets difíciles en el día

**Instrucción 4 — Priorización y gestión del volumen de soporte:**
Dame un sistema de priorización de soporte que incluya:
- Matriz de prioridad: cómo combinar urgencia del cliente, impacto en el negocio y complejidad del problema para ordenar la cola
- SLAs inteligentes: cómo definir tiempos de respuesta diferentes según el tipo de cliente, el canal y la gravedad del problema
- Gestión de picos de demanda: protocolo para cuando el volumen de tickets supera la capacidad del equipo
- Redistribución inteligente: cómo asignar tickets con IA al agente más cualificado para cada tipo de problema

**Instrucción 5 — De soporte reactivo a servicio proactivo:**
Diseña un sistema de customer success proactivo con IA que incluya:
- Detección temprana de problemas: cómo usar IA para identificar clientes que van a necesitar soporte antes de que lo pidan
- Comunicaciones proactivas: cuándo y cómo contactar al cliente antes de que tenga un problema
- Ciclo de mejora continua: cómo convertir los tickets de soporte en insights de producto y en mejoras que reduzcan el volumen futuro
- Medición del impacto del soporte proactivo: cómo demostrar al negocio el ROI de invertir en proactividad vs reactividad

Termina con los 6 cambios de proceso que más reducen el volumen de tickets de soporte en los primeros 90 días, con el impacto esperado en métricas de satisfacción y productividad del equipo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Automatizar el soporte repetitivo, priorizar tickets de alto impacto y construir un equipo de atención al cliente más productivo con IA.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'IA para productividad y gestión del tiempo del freelancer',
                'description'      => 'Aprende a usar IA para construir un sistema de productividad personal como freelancer: second brain para proyectos, time blocking inteligente, automatización de tareas repetitivas y gestión de la energía para trabajar menos horas con mejores resultados.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de productividad especializado en freelancers y profesionales independientes, con experiencia en la gestión del tiempo cuando no hay un jefe ni una estructura que te organice, en técnicas de deep work aplicadas al trabajo autónomo y en el uso de IA como asistente de productividad personal. Quiero construir un sistema de trabajo que me permita ser más productivo sin trabajar más horas.

**Mi contexto:**
Soy freelancer o consultor independiente. Mi mayor desafío de productividad es que soy mi propio jefe, y eso significa que nadie gestiona mi tiempo por mí. Tengo que producir trabajo de calidad para los clientes, gestionar el negocio (facturas, propuestas, captación) y seguir desarrollándome, todo sin perder la cabeza. Necesito un sistema que funcione en la soledad del trabajo independiente.

**Instrucción 1 — Construir mi second brain de freelancer con IA:**
Diseña la arquitectura de un sistema de gestión del conocimiento personal para freelancers que incluya:
- Captura mientras trabajo: cómo registrar con IA ideas, aprendizajes, referencias y oportunidades sin interrumpir el flujo de trabajo
- Organización por proyecto y cliente: estructura de carpetas y notas para tener siempre el contexto de cada proyecto en 30 segundos
- Base de conocimiento reutilizable: cómo capturar soluciones, metodologías y respuestas a preguntas frecuentes de clientes para no reinventar la rueda
- Revisión semanal: protocolo de 30 minutos cada viernes para procesar lo capturado y preparar la semana siguiente

**Instrucción 2 — Time blocking inteligente para freelancers:**
Crea un sistema de planificación semanal para el trabajo independiente que incluya:
- Bloques de trabajo cliente (deep work): cómo proteger las horas de mayor energía para el trabajo que facturo
- Bloques de gestión del negocio: propuestas, facturación, comunicación con clientes, administración
- Bloques de captación y marketing: actividades para seguir creciendo el negocio sin clientes actuales
- Bloques de desarrollo personal: formación, comunidad, experimentación con nuevas herramientas
- Cómo planificar la semana en 15 minutos los domingos con IA y no improvisar cada mañana

**Instrucción 3 — Automatización de las tareas repetitivas del freelancer:**
Identifica las tareas más repetitivas del trabajo freelance y dame el protocolo de automatización con IA:
- Propuestas comerciales: cómo generar el 80% de una propuesta personalizada en 20 minutos con IA
- Gestión de emails con clientes: sistema de plantillas inteligentes para los tipos de comunicación más frecuentes
- Onboarding de nuevos clientes: automatización de la documentación, contratos y briefing inicial
- Informes de avance a clientes: cómo generar actualizaciones de proyecto profesionales y claras con IA en 10 minutos
- Facturación y seguimiento de pagos: automatizar recordatorios y seguimiento sin conversaciones incómodas

**Instrucción 4 — Gestión de la energía y el deep work en solitario:**
Dame un protocolo de gestión de energía para freelancers que incluya:
- Diseño del entorno de trabajo: cómo configurar el espacio físico y digital para entrar en modo de máxima concentración
- Rituales de inicio del día de trabajo autónomo: el ritual de 15 minutos que separa el modo "en casa" del modo "trabajando"
- Gestión de la procrastinación: por qué los freelancers procrastinan más y las técnicas específicas para superarla con IA
- Prevención del burnout: señales de alerta de agotamiento y el sistema de recuperación que no destroce el negocio

**Instrucción 5 — Equilibrio entre trabajo cliente y negocio propio:**
El gran reto del freelancer es el feast and famine cycle: cuando hay proyectos no hay tiempo para captar, cuando captas no hay tiempo para proyectos. Dame un sistema para resolverlo con IA que incluya:
- Regla de inversión de tiempo: qué porcentaje del tiempo semanal dedicar a cada categoría (trabajo cliente, negocio, desarrollo)
- Sistema de captación en piloto automático: cómo usar IA para mantener activo el canal de nuevos clientes con solo 30 minutos a la semana
- Gestión de la agenda cuando hay demasiado trabajo: cómo decir no a proyectos adicionales sin dañar las relaciones
- Gestión de la agenda cuando hay poco trabajo: cómo usar el tiempo libre para crear activos de largo plazo

Termina con un plan de 30 días para implementar este sistema de productividad desde cero, con una tarea por día que sea pequeña, concreta y acumulativa, hasta tener un sistema completo funcionando al final del mes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir un sistema de productividad completo como freelancer con IA: second brain, time blocking, automatización y gestión de la energía.',
                'vote_score'       => 50,
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
