<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills134Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Productividad del marketer',
                'description'      => 'Gestiona la carga de trabajo de un equipo de marketing que siempre tiene más proyectos que personas: priorización, delegación y los sistemas que escalan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de productividad especializado en equipos de marketing. El marketing tiene un problema particular de productividad: la demanda es infinita (siempre hay más campañas que lanzar, más contenido que crear, más canales que gestionar) y los recursos son siempre finitos. Quiero que me ayudes a construir el sistema de productividad que permita a mi equipo hacer más de lo que importa sin quemarse.

Empieza haciéndome las preguntas que necesitas:
- Tamaño del equipo y roles principales
- Cuáles son los proyectos o tipos de trabajo que más consumen tiempo
- Cuáles son los cuellos de botella habituales
- Qué herramientas de gestión usáis actualmente

Con esa información, construye el sistema:

**1. Diagnóstico de la carga de trabajo**
Antes de optimizar, necesito entender dónde va el tiempo. Diseña un ejercicio de time tracking de dos semanas para el equipo: qué categorías de trabajo registrar, cómo registrarlo sin que sea una carga y cómo analizar los resultados para identificar las actividades de mayor y menor valor.

**2. Framework de priorización para marketing**
En marketing, todo parece urgente. Diseña un framework de priorización específico para el contexto de marketing que permita tomar decisiones rápidas sobre qué hacer, qué delegar, qué retrasar y qué eliminar. Incluye cómo gestionar las peticiones de último momento que llegan de otras áreas.

**3. Gestión del calendario de contenido y campañas**
El calendario de marketing es la herramienta de planificación central. Cómo estructurarlo para que sea a la vez estratégico (qué vamos a comunicar y cuándo) y operativo (quién hace qué y cuándo). Incluye los horizontes de planificación: anual, trimestral, mensual y semanal.

**4. Sistema de gestión de proyectos para marketing**
Los proyectos de marketing tienen características particulares: múltiples stakeholders, dependencias externas (diseño, legal, producto), fechas de entrega inamovibles y ciclos de revisión y aprobación. Diseña el sistema de gestión que funcione para este contexto específico.

**5. Plantillas y activos reutilizables**
Cuánto tiempo pierde el equipo recreando desde cero lo que ya ha hecho antes. Diseña el sistema de gestión de activos y plantillas: qué debe estar estandarizado, cómo organizarlo para que sea usable (no solo exista), y cómo mantenerlo actualizado.

**6. Gestión de las revisiones y aprobaciones**
Las revisiones y aprobaciones son uno de los mayores cuellos de botella en marketing. Define un proceso claro: cuántas rondas son razonables, quién tiene poder de aprobación en cada tipo de material, cómo dar feedback de forma eficiente y cómo evitar el ciclo interminable de cambios menores.

**7. Ritmos de equipo que reducen reuniones**
Cómo sustituir las reuniones de coordinación ad hoc por ritmos predecibles: el standup que funciona, la revisión semanal de métricas, la retrospectiva mensual y el proceso de planning trimestral. Para cada uno: el formato, la duración, quién participa y el output esperado.

**8. Automatización de lo repetitivo**
Identifica las tareas repetitivas de marketing que pueden automatizarse parcial o totalmente: reporting, distribución de contenido, seguimiento de métricas, actualizaciones de estado. Para cada una, propón la herramienta o el proceso que la automatiza.

**9. Gestión de las peticiones de otras áreas**
Marketing recibe peticiones constantes de ventas, producto, RRHH y dirección. Cómo crear un proceso de intake que sea percibido como profesional y servicial pero que proteja la capacidad del equipo para hacer el trabajo de mayor impacto.

**10. Indicadores de salud del equipo**
Cómo medir si el sistema de productividad está funcionando: no solo el output (número de campañas lanzadas) sino también la salud del equipo (overtime, calidad del trabajo, capacidad de innovar). Los indicadores que debes monitorear mensualmente.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema de productividad para equipos de marketing con más proyectos que capacidad',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Deep work para developers',
                'description'      => 'Cómo proteger el tiempo de concentración en un entorno de reuniones y Slack: los sistemas que los mejores engineers usan para producir trabajo de calidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de productividad especializado en ingenieros de software. El developer moderno enfrenta una contradicción: su trabajo requiere bloques largos de concentración profunda, pero opera en entornos diseñados para la interrupción constante. Slack, reuniones, code reviews y preguntas de otros miembros del equipo fragmentan el día hasta hacerlo inútil para el trabajo profundo. Quiero construir el sistema que me permita producir trabajo de alta calidad de manera sostenible.

Empieza con las preguntas que necesitas para personalizar el sistema:
- Cuál es mi rol (IC, tech lead, engineering manager)
- Cuál es el mayor destructor de mi concentración ahora mismo
- Cuántas horas de trabajo profundo conseguiría en una semana ideal
- Cuántas consigo en realidad

Con esa base, construye el sistema:

**1. Diagnóstico de mis interrupciones actuales**
Antes de diseñar soluciones, necesito entender el problema real. Propón un ejercicio de una semana para documentar interrupciones: qué las causa, con qué frecuencia ocurren, cuánto tiempo cuesta recuperar el foco después de cada una. Los datos que necesito para argumentar el problema.

**2. Diseño del bloque de deep work**
El bloque de deep work es la unidad fundamental. Diseña el bloque ideal para un developer: duración óptima, qué hacer antes de empezar (rituales de entrada), cómo gestionar las distracciones durante el bloque y cómo terminarlo bien (rituales de salida). Incluye la ciencia detrás de las recomendaciones.

**3. Negociación con el entorno**
El problema no es solo personal sino estructural: el equipo espera disponibilidad. Cómo negociar la creación de bloques de deep work sin parecer que no soy un buen compañero de equipo. Los acuerdos de equipo que facilitan la concentración de todos.

**4. Gestión de Slack y comunicación asíncrona**
Slack es el principal destructor de concentración. Define mi protocolo personal: cuándo reviso Slack, cómo gestionar las expectativas de tiempo de respuesta, cómo usar los estados para comunicar disponibilidad, y cómo fomentar la cultura asíncrona en mi entorno.

**5. Optimización de las reuniones**
Las reuniones que no puedo eliminar necesito optimizarlas. Cómo agruparlas para proteger bloques largos, cómo prepararlas para que sean más cortas y más efectivas, y los criterios para decidir si una reunión puede ser un mensaje o un documento.

**6. Entorno de trabajo optimizado para el foco**
El entorno físico y digital afecta la calidad del foco. Diseña el setup óptimo: gestión de notificaciones del sistema, configuración del IDE para el flujo, los auriculares y el audio, la iluminación y el entorno físico, y la gestión de las distracciones digitales.

**7. Planificación de la semana para un developer**
Cómo planificar la semana para maximizar el deep work: qué días proteger para trabajo profundo, cómo distribuir las reuniones, cuándo hacer code reviews y tareas administrativas, y cómo gestionar la incertidumbre de los sprints ágiles.

**8. Gestión de la energía, no solo del tiempo**
La concentración profunda requiere energía cognitiva. Cómo gestionar la energía a lo largo del día: cuándo hacer el trabajo más difícil, cómo recuperarse entre bloques, la importancia del sueño y el ejercicio en la capacidad de concentración, y cómo detectar y gestionar el agotamiento cognitivo.

**9. El sistema de captura para no perder ideas**
Durante el trabajo profundo surgen ideas, tareas pendientes y distracciones internas. El sistema de captura que permite anotarlas y olvidarlas temporalmente sin romper el flujo.

**10. Métricas de deep work**
Cómo medir si estoy mejorando: horas de trabajo profundo por semana, calidad del output (no solo velocidad), satisfacción con el trabajo producido. Los indicadores que permiten ver la progresión y ajustar el sistema.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Sistema de deep work para developers que quieren proteger su tiempo de concentración en entornos con muchas interrupciones',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Gestión del tiempo del diseñador',
                'description'      => 'Equilibra el trabajo de ideación (que necesita tiempo largo) con el feedback constante y las reuniones: el calendario ideal del diseñador.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de productividad especializado en diseñadores. El trabajo de diseño tiene una paradoja de tiempo única: la ideación y el trabajo creativo de calidad requieren bloques largos y sin interrupciones, pero el diseñador vive en un ciclo constante de presentaciones, feedback, revisiones y coordinación con producto, desarrollo y negocio. Quiero construir el sistema de gestión del tiempo que respete las necesidades del trabajo creativo sin aislarme del equipo.

Empieza con las preguntas necesarias:
- Cuál es mi rol (diseñador individual, senior, lead, jefe de equipo)
- En qué fase suelo trabajar más (discovery, ideación, producción, handoff)
- Cuáles son mis mayores destructores de tiempo ahora
- Cuántos proyectos llevo en paralelo habitualmente

Con esa información, construye el sistema:

**1. Los dos modos del trabajo de diseño**
El diseño requiere dos modos de trabajo radicalmente diferentes: el modo generativo (ideación, exploración, conceptualización, donde necesitas largos bloques sin interrupciones) y el modo reactivo (feedback, revisiones, coordinación, donde puedes operar en bloques cortos). Diseña un sistema que diferencie y proteja estos dos modos.

**2. El calendario ideal del diseñador**
Cómo estructurar la semana para proteger el tiempo creativo sin dejar de ser colaborativo. Propón una distribución concreta: qué días o momentos del día son para trabajo profundo, cuándo agrupar reuniones y sesiones de feedback, cuándo revisar y responder mensajes. Incluye cómo adaptar este calendario a semanas con entregas.

**3. Gestión de los ciclos de feedback**
El feedback es parte esencial del trabajo de diseño, pero mal gestionado puede consumir todo el tiempo. Define el proceso de presentación y feedback ideal: cómo preparar una sesión de feedback para que sea eficiente, cómo documentar el feedback recibido, cómo priorizar qué implementar y cómo comunicar las decisiones de diseño cuando no vas a implementar un feedback.

**4. Gestión del portfolio de proyectos en paralelo**
La mayoría de los diseñadores llevan varios proyectos simultáneamente. Cómo gestionar el cambio de contexto entre proyectos, cómo documentar el estado de cada uno para retomarlo sin fricción y cómo comunicar a los stakeholders cuándo pueden esperar avances.

**5. El sistema de archivos y activos de diseño**
Cuánto tiempo pierde un diseñador buscando archivos, componentes y versiones anteriores. El sistema de organización de archivos de diseño que minimiza este tiempo: nomenclatura, estructura de carpetas, gestión de versiones, organización de la librería de componentes.

**6. Rituales de inicio y cierre del trabajo creativo**
El trabajo creativo no se enciende y apaga como un grifo. Diseña los rituales de inicio del bloque creativo (cómo entrar en el estado de flujo más rápido) y de cierre (cómo terminar un bloque de forma que sea fácil retomarlo al día siguiente).

**7. Gestión de la energía creativa**
La creatividad no es lineal: hay momentos del día y de la semana donde la calidad del pensamiento creativo es superior. Cómo identificar mis picos de energía creativa y planificar el trabajo más exigente en esos momentos. Qué hacer cuando la creatividad no fluye.

**8. Comunicación de tiempos y expectativas**
Uno de los mayores problemas del diseñador es que el trabajo creativo es invisible para quien no lo hace. Cómo comunicar cuánto tiempo lleva hacer algo bien (sin sonar a excusa), cómo gestionar las expectativas de plazos y cómo decir no a peticiones que comprometen la calidad.

**9. Automatización y reducción de trabajo repetitivo**
Qué tareas de producción se pueden automatizar o acelerar con herramientas: exportaciones, assets, documentación de handoff, presentaciones de diseño. El tiempo que recuperas de la producción mecánica es tiempo para el pensamiento creativo.

**10. Indicadores de productividad creativa**
Cómo saber si el sistema está funcionando: no solo las entregas (proyectos completados a tiempo) sino la calidad del trabajo y la satisfacción creativa. Los indicadores que distinguen estar ocupado de ser productivo en diseño.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Sistema de gestión del tiempo para diseñadores que necesitan equilibrar trabajo creativo con coordinación y feedback',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Productividad en ventas',
                'description'      => 'Maximiza las horas que pasan con clientes y minimiza el tiempo administrativo: los sistemas, herramientas y rutinas del vendedor de alto rendimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de ventas especializado en productividad comercial. El problema de productividad del vendedor es claro: el tiempo con clientes genera ingresos, el tiempo administrativo no. Sin embargo, la mayoría de los vendedores pasan menos del 30% del tiempo en actividades directamente relacionadas con la venta. Quiero construir el sistema que maximice mi tiempo de venta real y minimice todo lo demás.

Empieza con las preguntas necesarias:
- Mi rol comercial (hunter, farmer, account executive, inside sales, etc.)
- Cuánto tiempo estimo que paso actualmente en venta real vs. administrativo
- Cuáles son las tareas que más tiempo me consumen fuera de la venta
- Las herramientas de ventas que uso (CRM, etc.)

Con esa base, construye el sistema:

**1. Auditoría de tiempo comercial**
Antes de optimizar, necesito datos reales. Diseña un tracking de una semana que me ayude a entender exactamente dónde va mi tiempo: las categorías que debo registrar, cómo hacerlo sin que sea una carga y los benchmarks de referencia para saber si estoy por encima o por debajo de la media.

**2. El bloque de prospección protegido**
La prospección es la actividad más postergada del vendedor porque sus resultados son diferidos. Cómo estructurar el bloque diario de prospección para que sea intocable: cuándo hacerlo (y por qué importa el momento), cuánto tiempo dedicarle y cómo mantener la disciplina cuando el pipeline parece lleno.

**3. Optimización del CRM**
El CRM es la herramienta de productividad central del vendedor, pero muchos lo usan como un sistema de reporting para el manager en lugar de como una herramienta para el vendedor. Cómo usar el CRM para trabajar más rápido: las vistas que necesito, los campos que realmente uso, la rutina de actualización que sea mínima y suficiente.

**4. Plantillas y scripts que aceleran sin sonar automatizado**
Cuánto tiempo pierde el vendedor escribiendo emails desde cero o improvisando discursos. El sistema de plantillas para los momentos más repetitivos: secuencia de outreach, follow-up después de reunión, propuesta, cierre, win y loss. Para cada uno, el esqueleto y los puntos de personalización obligatoria.

**5. Gestión de la agenda comercial**
Cómo estructurar el día del vendedor para maximizar el tiempo de venta: cuándo hacer llamadas frías (el momento del día que maximiza las contestaciones), cuándo hacer seguimientos, cuándo trabajar propuestas, cuándo hacer administrativo. El día ideal del vendedor.

**6. Preparación de reuniones en tiempo mínimo**
La preparación es clave para una buena reunión de ventas, pero tampoco puedes pasar dos horas preparando cada call. El proceso de preparación de 15 minutos que cubre lo esencial: qué investigar sobre el cliente, qué repasar de la cuenta, qué objetivo me marco y las preguntas que no debo olvidar.

**7. Automatización del seguimiento**
El seguimiento sistemático es lo que separa a los vendedores de alto rendimiento de los demás, pero hacerlo bien requiere tiempo y disciplina. Qué partes del seguimiento pueden automatizarse (secuencias de email, recordatorios en CRM) y cuáles necesitan toque personal.

**8. Gestión del tiempo entre reuniones**
Qué hacer con los 20-30 minutos entre reuniones para que sean productivos en lugar de tiempo muerto: las tareas pequeñas de CRM, los follow-ups inmediatos, la preparación rápida de la siguiente reunión.

**9. El cierre del día del vendedor**
La rutina de 10-15 minutos al final del día que prepara el día siguiente: actualizar el CRM con los avances del día, registrar los compromisos asumidos, revisar la agenda de mañana y dejar preparadas las primeras tareas del día siguiente.

**10. Métricas de productividad comercial**
Más allá del pipeline y los ingresos, las métricas que miden si estoy siendo productivo: horas de venta real, número de actividades comerciales por día, ratio de conversión por etapa, velocidad de cierre. Cómo usarlas para identificar qué palanca tirar.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Sistema de productividad para vendedores que maximiza el tiempo de venta y minimiza el tiempo administrativo',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión del tiempo del PM',
                'description'      => 'El PM tiene miles de tareas pequeñas y ninguna palanca de control: los sistemas que permiten avanzar en lo estratégico sin perderse en lo táctico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de productividad especializado en product managers. El PM tiene un problema de productividad único: es responsable de casi todo pero no controla nada directamente. No escribe código, no diseña, no vende, y sin embargo cada una de esas disciplinas depende de sus decisiones, sus documentos y su coordinación. El resultado es un rol que tiende a ser reactivo, fragmentado y centrado en lo urgente en lugar de lo importante. Quiero construir el sistema que me permita avanzar en lo estratégico sin dejar de gestionar lo táctico.

Empieza con las preguntas que necesitas:
- Mi contexto: empresa, fase del producto, tamaño del equipo
- Cuántos productos o áreas gestiono simultáneamente
- Cuál es el mayor destructor de mi tiempo ahora mismo
- Cuánto tiempo dedico a escribir documentos estratégicos vs. reuniones y coordinación

Con esa información, construye el sistema:

**1. Los tres roles del PM y la gestión del tiempo**
El PM opera en tres niveles: estratégico (visión, roadmap, prioridades de largo plazo), táctico (sprint planning, gestión del backlog, decisiones del día a día) y operacional (coordinación, comunicación, desbloqueador). El problema es que lo operacional siempre sube porque es lo más urgente. Diseña el sistema para proteger tiempo en cada nivel.

**2. El bloque de pensamiento estratégico**
El trabajo estratégico del PM no tiene fecha de entrega inminente, por eso siempre se posterga. Cómo proteger bloques semanales para el trabajo estratégico: la discovery research, el análisis de datos, la actualización del roadmap, las decisiones de largo plazo. El ritual y la disciplina que mantienen este tiempo sagrado.

**3. Gestión de la bandeja de entrada del PM**
El PM recibe peticiones de todos: ingeniería, diseño, ventas, marketing, dirección, clientes. Sin un sistema claro, esto se convierte en caos reactivo. Diseña el proceso de intake: cómo recibir y registrar peticiones, cómo evaluarlas sin comprometerse inmediatamente y cómo comunicar las decisiones de priorización.

**4. Optimización de las reuniones del PM**
Las reuniones son el principal consumidor de tiempo del PM. Identifica los tipos de reuniones que existen en el rol: cuáles son imprescindibles, cuáles puedes reducir o eliminar, cuáles puedes delegar y cómo hacer más eficientes las que son inevitables. El calendario de reuniones ideal.

**5. El sistema de documentación que no te esclaviza**
La documentación es una de las responsabilidades del PM pero puede convertirse en un fin en sí misma. Qué documentos son realmente necesarios, cuáles son los más cortos que hacen el trabajo y cómo crear una cultura de lectura de documentos en el equipo.

**6. Gestión del backlog como herramienta, no como lista de deseos**
El backlog sin gestión activa se convierte en un cementerio de ideas. El sistema para mantener un backlog manejable: cómo categorizar, cuándo hacer limpieza, cómo comunicar que algo no va a hacerse y cómo evitar que el backlog crezca sin control.

**7. Decisiones rápidas vs. decisiones lentas**
No todas las decisiones del PM merecen el mismo tiempo. El framework para saber cuánto tiempo invertir en cada decisión: qué información necesito para decidir bien, cuándo es suficiente información para avanzar y cómo documentar las decisiones para que el equipo las pueda ejecutar sin seguir preguntando.

**8. Delegación de la ejecución sin perder el control**
El PM que hace demasiado pierde la perspectiva estratégica. Qué puede y debe delegar, cómo hacerlo con el nivel de contexto adecuado y cómo mantener visibilidad sin microgestionar.

**9. El cierre semanal del PM**
La rutina de 30-45 minutos al final de la semana que mantiene el control: revisar el estado de los proyectos en curso, actualizar al equipo y stakeholders, revisar las decisiones pendientes y planificar la semana siguiente con foco en lo estratégico.

**10. La mentalidad del PM productivo**
Más allá de las herramientas y los sistemas, la mentalidad que diferencia a los PMs que avanzan de los que están siempre ocupados: decir no como habilidad de producto, la diferencia entre avanzar y parecer ocupado, y cómo medir el impacto real en lugar del esfuerzo.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Sistema de gestión del tiempo para product managers que quieren avanzar en lo estratégico sin perderse en lo operacional',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Productividad del equipo de RRHH',
                'description'      => 'RRHH tiene trabajo recurrente y trabajo de proyecto: cómo gestionarlos sin que uno ahogue al otro.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de productividad especializado en equipos de RRHH. El equipo de recursos humanos tiene un reto de productividad particular: combina trabajo altamente recurrente y predecible (nóminas, altas y bajas, onboardings, ciclos de evaluación) con trabajo de proyecto más ambiguo (implantaciones de cultura, proyectos de desarrollo, iniciativas de bienestar). La trampa es que lo recurrente siempre tiene fecha y penalización si falla, mientras que lo estratégico puede esperar indefinidamente. Quiero construir el sistema que permita ejecutar los dos sin que ninguno comprometa al otro.

Empieza con las preguntas necesarias:
- Tamaño del equipo de RRHH y el número de empleados que gestiona
- Cuáles son los procesos recurrentes más intensivos en tiempo
- Qué proyectos estratégicos de RRHH están activos o pendientes
- Qué herramientas de RRHH y de gestión de proyectos usan

Con esa información, construye el sistema:

**1. Inventario y mapeo de la carga de trabajo**
Categoriza todo el trabajo del equipo de RRHH en: trabajo recurrente fijo (con fecha y consecuencia si falla), trabajo recurrente flexible (ciclos predecibles pero con más margen), trabajo de proyecto (con inicio y fin definidos), y trabajo reactivo (consultas, emergencias, peticiones). Estima el porcentaje del tiempo que consume cada categoría.

**2. Calendario de trabajo recurrente**
Para el trabajo recurrente, la clave es que no requiera pensamiento cada vez. Crea el calendario maestro de RRHH: todas las actividades recurrentes del año con sus fechas, los responsables, las dependencias y los tiempos de preparación. Este calendario debería permitir planificar la capacidad del equipo con semanas de antelación.

**3. Sistema de gestión de proyectos de RRHH**
Los proyectos de RRHH tienen características específicas: múltiples stakeholders internos, tiempos largos de implementación y cambios de prioridad frecuentes desde dirección. Diseña el sistema de gestión de proyectos adaptado a este contexto: la herramienta, el nivel de detalle y el ritmo de seguimiento.

**4. Gestión de la cola de peticiones**
RRHH recibe peticiones constantes de managers, empleados y dirección. Cómo crear un sistema de intake que registre todo, comunique plazos realistas y evite que las peticiones verbales se pierdan o generen compromisos no planificados.

**5. Automatización de procesos administrativos**
Cuántos procesos de RRHH son todavía manuales y repetitivos. Identifica los candidatos a automatización: onboarding digitalizado, flujos de aprobación, comunicaciones automáticas en hitos del ciclo de vida del empleado. El impacto de cada automatización en el tiempo del equipo.

**6. Ciclos de evaluación y desempeño sin caos**
Los ciclos de evaluación son el pico de trabajo más intenso del año para RRHH. Diseña el proceso de gestión del ciclo para que sea predecible y manejable: la planificación con suficiente antelación, la comunicación escalonada a managers, el soporte durante el ciclo y el análisis post-ciclo.

**7. Gestión del conocimiento de RRHH**
RRHH acumula mucho conocimiento implícito: políticas, procesos, casos precedente, interpretaciones de convenio. Cómo documentar y organizar este conocimiento para que cualquier miembro del equipo pueda dar respuestas consistentes sin depender de la persona que "sabe todo".

**8. Métricas de productividad para RRHH**
Más allá del tiempo hasta cubrir una vacante o el coste por contratación, qué métricas de productividad operacional debería monitorear el equipo de RRHH: tiempo de respuesta a peticiones, porcentaje de entregas de trabajo recurrente en plazo, capacidad disponible para trabajo de proyecto.

**9. Gestión de la carga en los picos estacionales**
RRHH tiene picos predecibles: incorporaciones de enero, el ciclo de evaluación de fin de año, el verano con vacaciones. Cómo planificar la capacidad para esos picos: qué se puede adelantar, qué se puede externalizar temporalmente y cómo comunicar la situación a la organización.

**10. El RRHH que se autogestiona**
El equipo de RRHH a veces olvida aplicarse a sí mismo las prácticas que promueve para el resto de la organización. Cómo usar las herramientas de gestión del desempeño, los one-on-ones y la cultura de feedback dentro del propio equipo de RRHH.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Sistema de productividad para equipos de RRHH que combinan trabajo recurrente y proyectos estratégicos',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Productividad en finanzas',
                'description'      => 'Cierra el mes más rápido, automatiza los informes recurrentes y libera tiempo para el análisis de valor añadido.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de productividad especializado en equipos financieros. Finanzas tiene uno de los peores ratios de trabajo de valor añadido vs. trabajo administrativo de toda la empresa: demasiado tiempo en recopilar datos, reconciliar, limpiar y formatear, y muy poco en el análisis que realmente informa las decisiones del negocio. Quiero construir el sistema que invierta esa proporción.

Empieza con las preguntas necesarias:
- El tamaño del equipo financiero y el tipo de empresa
- Cuántos días tarda el cierre mensual actualmente
- Cuáles son los informes recurrentes que más tiempo consumen
- Qué herramientas financieras y de BI usáis

Con esa información, construye el sistema:

**1. Auditoría del cierre mensual**
El cierre es el proceso más crítico y más costoso de tiempo en finanzas. Mapea el proceso actual paso a paso: cuánto tarda cada fase, dónde están los cuellos de botella, qué tareas son paralelas y cuáles son secuenciales, cuándo se generan los errores que hay que corregir. El objetivo es entender por qué tarda lo que tarda.

**2. Plan de aceleración del cierre**
Con el mapa del proceso, diseña el plan de aceleración. Las palancas habituales: qué estimaciones se pueden usar para cerrar antes y ajustar después, qué procesos se pueden mover al mes en curso en lugar de dejarlos para el cierre, qué automatizaciones reducen el trabajo manual, y cómo gestionar las dependencias con otras áreas.

**3. Automatización del reporting recurrente**
Los informes que se generan todos los meses de la misma manera son los mejores candidatos a automatización. Para cada informe recurrente, define: qué datos necesita, de dónde vienen, qué transformaciones hace y en qué formato sale. Con ese mapa, propón cómo automatizarlo con las herramientas disponibles.

**4. Estandarización de los modelos financieros**
Los modelos financieros que no están bien estructurados se convierten en cajas negras que nadie más puede usar o mantener. Las buenas prácticas de construcción de modelos que reducen el tiempo de mantenimiento y el riesgo de errores: separación de inputs, outputs y cálculos, documentación interna, control de versiones.

**5. Gestión de peticiones ad hoc**
Finanzas recibe peticiones de análisis ad hoc de toda la organización, muchas de ellas urgentes y mal definidas. Cómo gestionar estas peticiones: el proceso de clarificación antes de empezar, cómo estimar el esfuerzo, cómo priorizar cuando hay varios pedidos y cómo entregar análisis útiles aunque el tiempo sea limitado.

**6. Delegación y desarrollo del equipo**
Muchos directores financieros y controllers hacen análisis que podría hacer alguien más junior porque no han invertido en formar al equipo. El marco de delegación para finanzas: qué tareas son delegables con la formación adecuada, cómo crear los procesos documentados que permiten la delegación y cómo supervisar sin microgestionar.

**7. El calendario del equipo financiero**
Las fechas de cierre, los reporting packs, los presupuestos y las auditorías son predecibles. Diseña el calendario anual del equipo financiero que permite planificar la capacidad con antelación, anticipar los picos y proteger tiempo para el trabajo de análisis.

**8. Data quality como inversión de productividad**
La mayor fuente de tiempo perdido en finanzas es la mala calidad de los datos: conciliaciones manuales, datos inconsistentes entre sistemas, cifras que no cuadran. Cómo invertir tiempo ahora en mejorar la calidad de los datos para ahorrar mucho más tiempo después.

**9. Comunicación financiera eficiente**
Cuánto tiempo pierde finanzas explicando los números a personas que no entienden finanzas. Las técnicas de comunicación financiera que reducen el tiempo de presentación y aumentan la comprensión: visualizaciones, narrativas, el resumen ejecutivo antes que el detalle.

**10. De finanzas reactiva a finanzas proactiva**
El objetivo final es que finanzas deje de responder preguntas sobre el pasado y empiece a anticipar preguntas sobre el futuro. Cómo estructurar el trabajo para tener tiempo para el análisis predictivo, las alertas tempranas y las recomendaciones proactivas que hacen de finanzas un socio estratégico del negocio.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Sistema de productividad financiera para acelerar el cierre, automatizar reporting y liberar tiempo para análisis de valor',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión de la carga de trabajo legal',
                'description'      => 'Matter management, deadlines, priorización de asuntos urgentes vs. importantes y los sistemas que evitan que nada se caiga por las grietas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de productividad especializado en departamentos legales y despachos de abogados. El trabajo legal tiene características de productividad únicas y complicadas: deadlines estrictos con consecuencias graves si se incumplen, materias que requieren concentración profunda alternadas con urgencias que no pueden esperar, una carga de trabajo que es difícilmente predecible y clientes que esperan respuesta inmediata. Quiero construir el sistema que permita gestionar esta complejidad sin errores y sin burnout.

Empieza con las preguntas que necesitas:
- Mi rol (abogado interno, socio, asociado, jefe del departamento legal)
- El tipo de trabajo legal que predomina (transaccional, contencioso, contratos, compliance)
- Cuántos asuntos gestiono simultáneamente de media
- Cuál es mi mayor fuente de estrés en la gestión del trabajo

Con esa base, construye el sistema:

**1. Sistema de matter management**
El asunto (matter) es la unidad de trabajo del abogado. Necesito un sistema que capture todo lo relevante de cada asunto, permita rastrear su estado y me avise de los próximos pasos. Define la estructura de información de cada asunto, el flujo de trabajo desde apertura hasta cierre y cómo mantener el sistema actualizado sin que se convierta en burocracia.

**2. Gestión de deadlines legales**
En derecho, los deadlines no son negociables: un plazo procesal vencido puede costar el asunto o generar responsabilidad. Diseña el sistema de control de plazos: cómo registrar los plazos cuando se generan, qué sistema de alertas (cuántos días de antelación, escalonado), cómo verificar que los plazos críticos tienen backup y cómo gestionar los plazos cuando el volumen de trabajo pone en riesgo el cumplimiento.

**3. Priorización de asuntos: urgente vs. importante**
El abogado siempre tiene más asuntos activos de los que puede gestionar simultáneamente bien. Cómo priorizar: el framework para clasificar asuntos por urgencia y relevancia estratégica, cómo comunicar al cliente cuando no puede ser prioridad inmediata y cómo gestionar las expectativas sin comprometer la relación.

**4. Bloques de trabajo profundo en un entorno reactivo**
La redacción de contratos, los informes jurídicos y los escritos de demanda requieren concentración profunda. Sin embargo, el trabajo legal está lleno de interrupciones urgentes. Cómo proteger los bloques de trabajo profundo sin ser inaccesible para las urgencias reales.

**5. Gestión del correo electrónico legal**
El abogado promedio recibe volúmenes extraordinarios de correo con consecuencias legales. El sistema de gestión del email que diferencia lo urgente de lo importante, garantiza que nada relevante se pierda y permite responder en tiempos razonables sin que el correo domine el día.

**6. Documentación y conocimiento reutilizable**
Cuánto tiempo pierde el equipo legal recreando contratos, cláusulas y argumentos jurídicos desde cero. El sistema de gestión del conocimiento legal: biblioteca de clausulados estándar, modelos de contratos, precedentes de escritos, respuestas a consultas frecuentes. Cómo mantenerlo actualizado y cómo hacerlo usable.

**7. Delegación en el equipo legal**
El reparto del trabajo entre socios, asociados y paralegals determina en gran medida la productividad del departamento. El framework de delegación: qué tipo de trabajo debe hacer cada nivel, cómo dar instrucciones que no requieran corrección constante y cómo revisar el trabajo delegado de forma eficiente.

**8. Gestión de clientes y expectativas**
Gran parte del tiempo del abogado se va en actualizar a clientes, responder preguntas redundantes y gestionar la ansiedad del cliente. Cómo diseñar el sistema de comunicación con clientes que los mantiene informados sin requerir llamadas y emails constantes.

**9. Ritmos del equipo legal**
Las reuniones de equipo en un departamento legal tienen que ser más eficientes que en otros contextos porque el tiempo de los abogados tiene un coste directo. Los ritmos semanales y mensuales del equipo legal: qué reuniones son necesarias, con qué formato y qué duración.

**10. Control de calidad y prevención de errores**
En derecho, los errores tienen consecuencias graves. El sistema de control de calidad que previene errores sin añadir tiempo excesivo: las listas de verificación por tipo de trabajo, el proceso de revisión y el protocolo para los asuntos de mayor riesgo.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema de gestión de la carga de trabajo legal que controla plazos, prioriza asuntos y evita que nada se caiga por las grietas',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Productividad en customer success',
                'description'      => 'Gestiona una cartera de 50-200 cuentas sin perder calidad: los sistemas de priorización, las plantillas y los flujos que hacen sostenible el rol.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de productividad especializado en customer success managers. El CSM tiene un problema de productividad matemático: con carteras de 50 a 200 cuentas, es físicamente imposible dar a cada cuenta la atención que merece con métodos artesanales. El resultado son CSMs agotados que priorizan mal, reaccionan en lugar de anticipar y nunca tienen tiempo para el trabajo proactivo que genera expansión. Quiero construir el sistema escalable que me permita gestionar mi cartera con calidad sin quemarme.

Empieza con las preguntas necesarias:
- Cuántas cuentas gestiono y cuál es el ARR medio por cuenta
- Qué ratio de tiempo reactivo (problemas, tickets, consultas) vs. proactivo (QBRs, expansión) tengo ahora
- Qué herramientas uso (CRM, plataforma de CS, etc.)
- Cuál es el mayor destructor de mi tiempo actualmente

Con esa base, construye el sistema:

**1. Segmentación de la cartera**
No todas las cuentas merecen el mismo tiempo. Define el modelo de segmentación: los criterios para clasificar cuentas (ARR, salud, potencial de expansión, riesgo de churn, complejidad), los segmentos resultantes y el modelo de atención que corresponde a cada segmento: qué touchpoints, con qué frecuencia y con qué profundidad.

**2. Sistema de health scoring**
El health score es el indicador central del CSM. Diseña el modelo de health score para mi contexto: qué señales incluir (producto, engagement, soporte, relación, negocio del cliente), cómo ponderarlas, con qué frecuencia actualizarlo y qué umbrales disparan acciones. El objetivo es detectar el riesgo antes de que el cliente lo verbalice.

**3. El sistema de priorización semanal**
Cada semana tengo que decidir a cuáles de mis 50-200 cuentas dedico tiempo activo. El proceso de priorización semanal: cómo revisar el health score de toda la cartera en tiempo mínimo, cómo identificar las cuentas que necesitan acción urgente, las que merecen trabajo proactivo y las que pueden funcionar en modo autopiloto esta semana.

**4. Plantillas para los touchpoints más frecuentes**
El CSM repite muchos de los mismos tipos de comunicación con diferentes cuentas. Define el set de plantillas necesarias: check-in mensual, preparación del QBR, seguimiento de onboarding, alerta de riesgo, propuesta de expansión, renovación. Para cada una: el esqueleto, los puntos de personalización obligatoria y el objetivo de cada comunicación.

**5. El QBR escalable**
El QBR es la interacción de mayor valor del CSM pero también la más costosa en tiempo. Cómo hacer QBRs de calidad sin invertir 4 horas de preparación por cuenta: la estructura estándar, los datos que se generan automáticamente, las preguntas que siempre incluyes y las que personalizas según la cuenta.

**6. Gestión del trabajo reactivo**
Las consultas, los problemas y los escalados son inevitables. Cómo gestionar el trabajo reactivo sin que consuma todo el tiempo: el proceso de triaje, las respuestas estándar para los problemas más frecuentes, cuándo escalar y cuándo resolver directamente, y cómo usar cada incidencia para aprender sobre la cuenta.

**7. Automatización de los touchpoints de bajo valor**
Qué comunicaciones con los clientes pueden automatizarse sin perder calidad: los recordatorios, las comunicaciones de hitos del ciclo de vida, los reports automáticos. El objetivo es que el cliente reciba comunicación regular sin que cada una requiera tiempo manual del CSM.

**8. Gestión de la información de cuenta**
El CSM necesita acceder rápidamente al contexto de cada cuenta sin perder tiempo buscando. El sistema de documentación de cuenta: qué información registrar, dónde, cómo mantenerla actualizada y cómo estructurar las notas de cada interacción para que sean útiles después.

**9. Detección de oportunidades de expansión**
El trabajo proactivo de mayor impacto es identificar oportunidades de expansión antes de que el cliente las pida. Cómo sistematizar esta búsqueda: las señales que indican potencial de expansión, el proceso de identificación en la revisión semanal de cartera y el proceso de cualificación antes de implicar a ventas.

**10. Métricas de productividad del CSM**
Más allá del NRR y el churn, las métricas que miden si el sistema de productividad está funcionando: cobertura de QBRs, ratio de touchpoints proactivos vs. reactivos, tiempo de respuesta, número de cuentas en riesgo detectadas proactivamente. Cómo usar estas métricas para mejorar el sistema.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Sistema de productividad para CSMs que gestionan carteras de 50-200 cuentas con calidad y de forma sostenible',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Productividad como freelance sin jefe',
                'description'      => 'Sin estructura externa, construye la tuya: los ritmos, rutinas y sistemas de trabajo que permiten producir más sin trabajar más.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de productividad especializado en freelancers y trabajadores independientes. El freelance enfrenta el problema de productividad más difícil de todos: no tiene estructura externa. Sin horarios fijos, sin manager, sin equipo que le empuje, el freelance debe crear su propia disciplina desde cero. El resultado suele ser una mezcla de hiperproductividad culpable y procrastinación profunda, trabajo en horarios erráticos y la sensación permanente de que podría estar haciendo más. Quiero construir el sistema de productividad que me dé la estructura que necesito sin perder la libertad que buscaba cuando me independicé.

Empieza con las preguntas que necesitas:
- Qué tipo de trabajo freelance hago
- Cuántos clientes simultáneos gestiono habitualmente
- Cuál es mi mayor problema de productividad ahora (procrastinación, dispersión, trabajo nocturno, etc.)
- Qué he intentado antes y por qué no funcionó

Con esa información, construye el sistema:

**1. El diseño de mi semana ideal**
A diferencia del empleado, el freelance puede diseñar su semana. Pero la mayoría no lo hace y acaba con una semana reactiva determinada por los clientes. Diseña conmigo mi semana ideal: cuántas horas de trabajo profundo, cuándo hacer las llamadas con clientes, cuándo hacer administrativo, cuándo hacer desarrollo de negocio y cuándo descansar. La semana ideal como norte, no como corsé.

**2. La rutina de inicio del día**
Sin la obligación de fichar, la mañana puede convertirse en el mayor destructor de productividad del freelance. Diseña la rutina de inicio de trabajo que me ponga en modo productivo en el mínimo tiempo: el ritual de activación, el primer bloque de trabajo y la decisión de qué hacer antes de abrir el correo.

**3. Sistema de gestión de proyectos para un freelance**
Gestionar varios clientes simultáneamente sin un sistema es una receta para el caos: plazos que se solapan, compromisos que se olvidan, cambios de contexto constantes. El sistema de gestión de proyectos adaptado al freelance: simple, sostenible y que no requiera más tiempo de mantenimiento del que ahorra.

**4. El bloque de trabajo profundo del freelance**
El freelance tiene la ventaja de poder diseñar su día para el trabajo profundo, pero también tiene más distracciones potenciales (casa, gestiones personales). Cómo crear el entorno y los rituales que facilitan el estado de flujo: el setup, la duración óptima del bloque y la gestión de las interrupciones domésticas.

**5. Gestión del tiempo de los clientes**
Los clientes del freelance tienden a expandir sus demandas hasta llenar todo el tiempo disponible. Cómo gestionar el tiempo dedicado a cada cliente: el sistema de seguimiento de horas, cómo comunicar los límites de disponibilidad sin perder la relación y cómo gestionar las peticiones fuera de scope.

**6. Automatización de la gestión administrativa**
La facturación, los contratos, el seguimiento de pagos y la contabilidad básica consumen tiempo que podría ir a trabajo de cliente o a desarrollo de negocio. Qué procesos administrativos se pueden automatizar o simplificar al máximo: las herramientas, las plantillas y los sistemas que reducen el tiempo administrativo al mínimo.

**7. Desarrollo de negocio como hábito, no como crisis**
El mayor problema de flujo de trabajo del freelance es la alternancia entre "demasiado trabajo" y "sin trabajo": cuando hay proyectos, no hay tiempo para buscar nuevos; cuando terminan, empieza la búsqueda desesperada. Cómo integrar el desarrollo de negocio como un hábito semanal que mantiene el pipeline lleno sin dedicarle bloques masivos de tiempo.

**8. Gestión de la energía y la creatividad**
El freelance es su propio activo más valioso. Cómo gestionar la energía a lo largo del día, de la semana y del año: los patrones de energía que debo conocer sobre mí mismo, cómo planificar las vacaciones sin que el negocio se detenga y cómo recuperarse del agotamiento antes de que llegue al burnout.

**9. La rutina de cierre del día**
Sin un cierre claro, el trabajo del freelance se filtra a todas las horas. La rutina de cierre de jornada: el registro de lo que hice, el plan del día siguiente, el momento en que el trabajo termina. La separación psicológica entre trabajo y descanso que permite recuperarse de verdad.

**10. Revisión semanal para el freelance**
La revisión semanal es el hábito de productividad con mayor ROI para el freelance: 30-45 minutos que alinean lo que hice con lo que debería estar haciendo, identifican los problemas antes de que se agraven y mantienen la perspectiva estratégica. La estructura exacta de mi revisión semanal.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Sistema de productividad para freelancers que quieren estructura y ritmos sostenibles sin perder la libertad del trabajo independiente',
                'vote_score'       => 49,
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
