<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills204Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Productividad en marketing: hacer más con menos',
                'description'      => 'El equipo de marketing que trabaja con recursos limitados: sistemas de priorización, automatización de tareas repetitivas y los rituales que mantienen el foco en lo que mueve el marcador.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de marketing con experiencia construyendo equipos de marketing eficientes en empresas donde los recursos nunca son suficientes para todo lo que se quiere hacer. Voy a explorar contigo cómo multiplicar el output del equipo de marketing sin añadir headcount.

Mi contexto: [describe la situación de tu equipo: tamaño, canales activos, el mayor cuello de botella de productividad que tienes ahora mismo y el output que sientes que deberías producir con los recursos que tienes]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. El problema de la productividad en marketing: por qué los equipos siempre van a remolque**
Los equipos de marketing tienen una tendencia estructural a llenarse de trabajo de poco impacto: el informe que nadie lee, la campaña que lleva tres rondas de revisión por un cambio menor, el canal que sigue activo aunque no genere resultados. Explícame las causas raíz de la baja productividad en marketing: el sesgo hacia la actividad (hacer muchas cosas) en lugar de hacia el impacto (hacer las cosas que mueven el marcador), la falta de un sistema de priorización que el equipo aplique de forma consistente y la tendencia a aceptar más proyectos de los que el equipo puede ejecutar bien.

**2. El sistema de priorización: decidir qué no hacer**
La productividad no empieza por hacer más rápido: empieza por hacer menos pero mejor. Explícame cómo construir el sistema de priorización del equipo de marketing: el framework de evaluación de iniciativas que el equipo usa para decidir qué entra al roadmap y qué no (criterios como el impacto esperado en los objetivos de negocio, el esfuerzo de ejecución y la urgencia), el proceso de revisión del portfolio de iniciativas activas que elimina el trabajo zombie (proyectos que nadie ha cancelado formalmente aunque ya no tengan prioridad) y la disciplina del "sí-sólo-si" (aceptar una nueva iniciativa solo si se sabe cuál se va a quitar).

**3. La automatización de las tareas repetitivas**
El equipo de marketing invierte una cantidad enorme de tiempo en tareas que no requieren pensamiento estratégico: reportes recurrentes, publicaciones en redes sociales, correos de seguimiento, actualización de calendarios editoriales. Explícame cómo identificar y automatizar las tareas repetitivas de marketing: el proceso de auditoría del tiempo del equipo para identificar las tareas que se repiten con mayor frecuencia, las herramientas y los flujos de automatización más efectivos para las tareas de marketing más comunes (automatización de reporting con herramientas de BI, automatización de publicación en redes con herramientas de scheduling, automatización de nurturing con la plataforma de marketing automation), y cómo implementar la automatización sin que el equipo pierda el control de lo que se está publicando y enviando.

**4. Los rituales del equipo que mantienen el foco**
Los rituales del equipo determinan cómo se distribuye el tiempo y la atención. Los rituales mal diseñados consumen tiempo sin añadir valor; los bien diseñados mantienen al equipo alineado y enfocado en lo que importa. Explícame el sistema de rituales para un equipo de marketing productivo: la reunión semanal de equipo que revisa el progreso en los objetivos principales y desbloquea los impedimentos (no más de 45 minutos), el proceso de planificación de sprint de marketing que distribuye la capacidad del equipo entre las iniciativas de mayor prioridad, la revisión mensual de resultados que conecta las acciones del equipo con los outcomes de negocio, y los rituales de aprendizaje que convierten los experimentos fallidos en conocimiento reutilizable.

**5. El tiempo de trabajo profundo en marketing**
El trabajo de marketing de mayor calidad —la estrategia, el análisis en profundidad, el copy que realmente conecta— requiere bloques de trabajo profundo sin interrupciones. El entorno de trabajo moderno está diseñado para destruir ese tiempo. Explícame cómo proteger el tiempo de trabajo profundo en el equipo de marketing: el diseño del calendario del equipo que reserva bloques de tiempo para trabajo concentrado (sin reuniones ni Slack), las convenciones de comunicación del equipo que distinguen lo urgente de lo que puede esperar, y la cultura que valora el trabajo profundo por encima de la hiperactividad visible.

**6. Las métricas de productividad del equipo de marketing**
No se puede mejorar lo que no se mide. Propón el sistema de métricas de productividad del equipo de marketing: las métricas de output (número de piezas de contenido producidas, campañas lanzadas, experimentos ejecutados), las métricas de impacto (pipeline generado, contribución al revenue, leads por canal), y las métricas de eficiencia (coste por lead, tiempo de producción de campañas, ratio de reutilización de contenido). El proceso de revisión periódica que convierte los datos de productividad en mejoras concretas del proceso.

Quiero concreción: las herramientas que más impacto tienen en la productividad de los equipos de marketing, los cambios que puedo implementar esta semana y los errores más comunes de los equipos que intentan mejorar su productividad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Multiplicar el output del equipo de marketing sin añadir headcount a través de sistemas y rituales',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Deep work para developers',
                'description'      => 'Protege el tiempo de concentración en un entorno lleno de interrupciones: técnicas para crear bloques de trabajo profundo, gestión de Slack y reuniones, y los sistemas que permiten entrar en estado de flow con regularidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un senior developer con experiencia protegiendo el tiempo de trabajo profundo en entornos de trabajo modernos llenos de interrupciones, reuniones y notificaciones. Voy a explorar contigo cómo construir un sistema de trabajo que permita entrar en estado de flow con regularidad.

Mi contexto: [describe tu entorno de trabajo: remoto, presencial u híbrido, el tipo de trabajo que haces (backend, frontend, full-stack, sistemas), las interrupciones más frecuentes que sufres y cuánto tiempo de concentración ininterrumpida consigues en un día típico]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. Por qué el deep work es especialmente crítico para los developers**
El trabajo de programación es uno de los que más se beneficia del estado de concentración profunda y uno de los que más sufre con las interrupciones. Explícame la neurociencia del trabajo profundo aplicada al desarrollo de software: cuánto tiempo tarda un developer en alcanzar el estado de concentración óptima después de una interrupción (el coste real de cada notificación de Slack), la diferencia entre el trabajo de alta concentración (diseñar una arquitectura, resolver un bug complejo, escribir código nuevo) y el trabajo de baja concentración (revisar PRs sencillas, responder preguntas de soporte, actualizar documentación), y por qué el entorno de trabajo moderno está estructuralmente diseñado para destruir el tiempo de concentración.

**2. El diseño del calendario: crear los bloques de deep work**
El tiempo de concentración no ocurre por accidente: hay que diseñarlo activamente en el calendario. Explícame cómo diseñar el calendario de un developer para maximizar el tiempo de trabajo profundo: el bloqueo proactivo de bloques de trabajo profundo en el calendario (cómo hacerlos visibles para el equipo sin generar conflictos), la agrupación de las reuniones en bloques del calendario que dejan días o medias jornadas completas libres de interrupciones, el principio de los días sin reuniones (y cómo negociarlo con el equipo y el manager), y la gestión de los compromisos de disponibilidad para el resto del equipo que no destruya el tiempo de concentración.

**3. La gestión de Slack y las comunicaciones asíncronas**
Slack y las herramientas de comunicación similares son los mayores destructores de tiempo de concentración del developer moderno. Explícame cómo gestionar las comunicaciones asíncronas sin estar permanentemente disponible: la configuración de Slack que reduce las interrupciones al mínimo (silenciar canales no críticos, configurar las notificaciones para que solo interrumpan en casos de verdadera urgencia, usar el Do Not Disturb de forma sistemática durante los bloques de trabajo profundo), el protocolo de comunicación del equipo que define qué requiere respuesta inmediata y qué puede esperar, y cómo comunicar la propia disponibilidad al equipo de forma que no genera expectativas de respuesta inmediata permanente.

**4. Las técnicas para entrar en estado de flow**
El estado de flow no se puede forzar, pero se puede cultivar con las condiciones y los rituales correctos. Explícame las técnicas que ayudan al developer a alcanzar el estado de concentración óptima: el ritual de inicio de sesión de trabajo profundo que señala al cerebro que es momento de concentrarse (técnica pomodoro adaptada, música o ruido blanco, apagado de notificaciones, cierre de tabs no relevantes), la gestión del entorno físico que reduce las interrupciones externas, las estrategias para retomar el trabajo profundo rápidamente después de una interrupción inevitable, y el trabajo con el ciclo de energía personal (los momentos del día donde la concentración llega más fácilmente).

**5. La gestión de las reuniones: el mayor ladrón de tiempo del developer**
Las reuniones son necesarias pero tienden a proliferar hasta ocupar toda la jornada del developer. Explícame cómo gestionar las reuniones de forma que protejan el tiempo de trabajo profundo: el criterio para aceptar o rechazar una invitación a reunión (¿añado valor irreemplazable?, ¿podría resolverse de forma asíncrona?), las técnicas para acortar las reuniones a las que sí se asiste (la reunión sin agenda no merece asistencia, la reunión de 30 minutos casi siempre puede hacerse en 20), el diseño de la arquitectura de reuniones del sprint (standup, planning, review, retrospectiva) que concentra todas las reuniones en los momentos menos productivos para el trabajo profundo, y cómo negociar con el manager y el equipo un modelo de disponibilidad en reuniones que proteja el tiempo de concentración.

**6. El sistema completo: la semana ideal del developer**
Los principios aislados no bastan: se necesita un sistema completo y sostenible. Ayúdame a diseñar la semana ideal del developer que maximiza el tiempo de trabajo profundo: la distribución de los días entre trabajo profundo (mañanas completas sin reuniones, días sin reuniones) y trabajo de coordinación (reuniones agrupadas, revisión de PRs, soporte al equipo), el sistema de gestión de tareas que separa el trabajo de alta concentración del trabajo de baja concentración, el ritual de cierre del día que desconecta del trabajo y procesa las tareas pendientes, y el proceso de revisión semanal que evalúa si el sistema está funcionando y qué hay que ajustar.

Quiero concreción: la configuración específica de Slack y del calendario, los scripts de conversación para negociar el tiempo de concentración con el equipo y los managers, y los experimentos que puedo hacer esta semana para recuperar tiempo de work profundo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir un sistema de trabajo que protege el tiempo de concentración y permite entrar en estado de flow con regularidad',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Productividad del diseñador: sistemas y atajos',
                'description'      => 'El diseñador que entrega más y mejor: sistemas de organización de archivos, librerías de componentes reutilizables y los atajos en Figma que multiplican la velocidad de ejecución.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un senior designer con experiencia construyendo sistemas de trabajo que multiplican la velocidad de ejecución sin sacrificar la calidad, con conocimiento profundo de Figma y del flujo de trabajo del diseñador moderno. Voy a explorar contigo cómo construir un sistema de productividad para diseñadores.

Mi contexto: [describe tu situación: tipo de trabajo de diseño que haces (UI, UX, branding, motion), las herramientas principales que usas, el mayor cuello de botella de productividad que tienes y el tipo de proyectos que domina tu agenda]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. El problema de la productividad del diseñador**
Los diseñadores tienden a invertir tiempo en trabajo que podría hacerse más rápido con los sistemas correctos: buscar el color exacto de la guía de estilo, reconstruir el mismo componente de botón para el decimoquinto proyecto, hacer el mismo ajuste de espaciado en doscientas pantallas de una vez. Explícame las causas raíz de la baja productividad del diseñador: el trabajo sin sistemas (cada proyecto empieza desde cero en lugar de partir de una base sólida), la falta de automatización de las tareas repetitivas y el tiempo que se consume en el trabajo de baja concentración (ajustes menores, revisiones de formato) en lugar del trabajo de alta concentración (conceptualización, toma de decisiones de experiencia).

**2. El sistema de organización de archivos y proyectos**
Un sistema de organización claro multiplica la velocidad de trabajo porque elimina el tiempo de búsqueda y el de reconstrucción de contexto cuando se retoma un proyecto. Explícame cómo construir el sistema de organización de archivos de diseño: la estructura de carpetas en Figma que funciona para proyectos de distintos tamaños (cómo organizar los frames, las páginas y los componentes de forma consistente), el sistema de nomenclatura de capas que hace que cualquier persona del equipo pueda entender la estructura sin explicación, la gestión del versionado de los archivos de diseño (cuándo crear una nueva versión vs. cuando hacer un duplicado vs. cuando sobrescribir), y los archivos de arranque (starter files) que permiten iniciar cualquier proyecto nuevo desde una base sólida.

**3. Las librerías de componentes: el multiplicador de productividad más poderoso**
Una librería de componentes bien construida puede reducir el tiempo de diseño de nuevas features a la mitad o menos. Explícame cómo construir y mantener una librería de componentes en Figma que realmente multiplique la productividad: la diferencia entre los componentes de propósito general (que van a la librería compartida) y los de propósito específico (que viven en el archivo del proyecto), las best practices de estructura de componentes en Figma (el uso de variantes, las propiedades de componente, el auto-layout), el proceso de mantenimiento de la librería que la mantiene actualizada sin que se convierta en una carga, y cómo manejar la transición cuando el design system evoluciona y hay que actualizar los componentes en proyectos existentes.

**4. Los atajos de teclado y las técnicas de velocidad en Figma**
El dominio de los atajos de teclado y las técnicas avanzadas de Figma puede duplicar la velocidad de trabajo del diseñador. Explícame las técnicas de velocidad que más impacto tienen: los atajos de teclado esenciales de Figma que el diseñador debe tener automatizados (los más usados para selección, alineación, distribución, agrupación, tipografía y colores), el uso del menú de acciones rápidas para ejecutar cualquier acción sin moverse del teclado, las técnicas de selección avanzada (selección por tipo de elemento, selección de todos los elementos similares), el uso de los plugins de Figma que más tiempo ahorran (cuáles son los realmente útiles y cuáles son ruido), y las técnicas de auto-layout avanzadas que eliminan el ajuste manual de elementos.

**5. El flujo de trabajo del diseñador productivo**
La productividad no es solo velocidad técnica: es el diseño del flujo de trabajo completo que minimiza el tiempo perdido entre tareas. Explícame el flujo de trabajo del diseñador productivo: el ritual de inicio de proyecto que define el scope, establece los archivos y activa los sistemas antes de empezar a diseñar, la técnica de trabajo en bloques de tiempo para las distintas fases del proceso de diseño (exploración, refinamiento, entrega), la gestión de las revisiones y el feedback que reduce las rondas de iteración innecesarias, y el proceso de handoff a desarrollo que minimiza las preguntas y los malentendidos.

**6. Automatizar el trabajo repetitivo del diseño**
Hay tareas del diseñador que se repiten con tanta frecuencia que la automatización tiene un retorno enorme. Explícame las oportunidades de automatización del trabajo de diseño: los plugins de Figma que automatizan la generación de variantes, el relleno de datos ficticios (para mockups realistas sin trabajo manual) y la exportación de assets en múltiples formatos, el uso de variables y tokens para que los cambios globales (un cambio de color primario, un ajuste de tipografía) se propaguen automáticamente a todo el diseño, y las integraciones entre Figma y otras herramientas (sistemas de gestión de contenido, herramientas de prototipado) que reducen el trabajo duplicado.

Quiero concreción: la lista de los atajos de Figma que más tiempo ahorran, los plugins que uso en todos mis proyectos y el sistema de organización de archivos que puedo implementar esta semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Multiplicar la velocidad de trabajo del diseñador con sistemas de organización, librerías y técnicas avanzadas de Figma',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Time management para comerciales: más tiempo de venta',
                'description'      => 'El vendedor que protege su tiempo para las actividades que generan ingresos: los bloques de prospección, la gestión del pipeline sin ahogarse en el CRM y las rutinas que mantienen la productividad al final del quarter.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con experiencia ayudando a los equipos comerciales a optimizar el uso de su tiempo para maximizar el tiempo de venta real y el pipeline generado. Voy a explorar contigo cómo construir el sistema de gestión del tiempo del vendedor productivo.

Mi contexto: [describe tu situación: tipo de venta (inside sales, field sales, enterprise, SMB), el ciclo de venta típico, las actividades que más tiempo te consumen y el porcentaje de tu jornada que estimas que dedicas a actividades que generan ingresos directamente]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. El problema del tiempo del vendedor: por qué el 65% no se dedica a vender**
Los estudios del sector muestran que los vendedores dedican menos de un tercio de su jornada a actividades de venta directa. El resto lo consumen en administración, reuniones internas, actualizaciones del CRM y trabajo que no genera ingresos. Explícame las causas raíz de este problema: el CRM como sumidero de tiempo (el diseño de los procesos de CRM que exige más actualizaciones de las que aportan valor), las reuniones internas que proliferan sin que nadie las cuestione, el trabajo administrativo que el vendedor hace y que podría delegarse o automatizarse, y el sesgo hacia la actividad visible (hacer muchas llamadas, mandar muchos emails) en lugar de hacia la efectividad (las conversaciones que realmente avanzan el pipeline).

**2. Las actividades de venta que más impacto tienen: de qué hay que proteger el tiempo**
No todas las actividades de venta son igualmente productivas. Explícame cómo identificar y proteger el tiempo para las actividades de mayor impacto: la prospección proactiva en los segmentos del ICP (que genera el pipeline futuro pero siempre pierde ante la urgencia del pipeline actual), las conversaciones de descubrimiento de alta calidad (que determinan si la oportunidad es real y cómo ganarla), las propuestas y presentaciones para las oportunidades del stage correcto del pipeline (no para cualquier oportunidad que llame la atención), y el mantenimiento de las relaciones con los clientes actuales que tienen potencial de expansión.

**3. Los bloques de tiempo del vendedor productivo**
El vendedor productivo diseña su semana en bloques de tiempo dedicados a tipos específicos de actividad. Explícame el diseño del calendario del vendedor de alto rendimiento: el bloque diario de prospección (el tiempo sagrado que no se cancela por nada) con la hora del día que maximiza la tasa de conexión para llamadas en frío, los bloques de seguimiento de pipeline (para las oportunidades activas que requieren avance esta semana), el tiempo de preparación de las conversaciones de alto valor (la investigación y la personalización que multiplica la efectividad de las reuniones más importantes), y cómo gestionar los imprevistos (llamadas entrantes, solicitudes urgentes de clientes) sin destruir la estructura de la semana.

**4. El CRM como herramienta de trabajo, no como obligación administrativa**
El CRM es la herramienta más odiada y más subutilizada del vendedor. Explícame cómo convertir el CRM en una herramienta que ayuda en lugar de estorba: el diseño del proceso de actualización del CRM que minimiza el tiempo administrativo sin sacrificar la calidad del dato (actualización inmediatamente después de cada conversación, campos obligatorios mínimos que aportan valor al vendedor, no solo al manager), las integraciones del CRM con el email y el calendario que automatizan las actualizaciones, el uso del CRM para gestionar proactivamente el pipeline (los filtros y las vistas que muestran exactamente qué oportunidades necesitan acción esta semana), y la diferencia entre el CRM como herramienta de control (que genera resistencia) y como herramienta de gestión del negocio propio (que genera adopción).

**5. Las rutinas que mantienen la productividad bajo presión**
El final del quarter es el momento donde la productividad del vendedor se desploma: la presión genera caos, el caos genera decisiones malas y las decisiones malas destruyen el pipeline del siguiente quarter. Explícame las rutinas que mantienen la efectividad del vendedor bajo presión: el ritual de planificación semanal que revisa el pipeline y define las tres prioridades de la semana, el proceso de cierre de oportunidades que distingue las que pueden cerrarse con esfuerzo razonable de las que es mejor postponer al siguiente quarter, las técnicas de gestión de energía y de estado mental que mantienen la calidad de las conversaciones aunque el estrés sea alto, y el análisis de pipeline que detecta con suficiente antelación si el quarter está en riesgo y qué acciones pueden cambiar el resultado.

**6. Automatizar el trabajo administrativo de ventas**
El vendedor moderno tiene acceso a herramientas que pueden automatizar una parte significativa del trabajo administrativo. Explícame cómo automatizar las tareas de ventas que no requieren juicio humano: las secuencias de emails de seguimiento que mantienen el contacto con las oportunidades sin que el vendedor tenga que recordar mandar cada email manualmente, el uso de la IA para preparar el contexto de las reuniones (investigación del cliente, noticias recientes, resumen de interacciones previas), las herramientas de inteligencia conversacional que transcriben y resumen las llamadas de ventas, y la automatización del reporting de actividad que elimina el tiempo de actualización manual de métricas.

Quiero concreción: el diseño de la semana ideal del vendedor, las herramientas que más impacto tienen en la productividad comercial y los cambios que puedo implementar esta semana para recuperar tiempo de venta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Recuperar tiempo para las actividades que generan ingresos y construir las rutinas del vendedor de alto rendimiento',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product manager sin tiempo: sistemas de priorización bajo presión',
                'description'      => 'El PM que recibe más peticiones de las que puede atender: frameworks de priorización (RICE, ICE, Kano), rituales para proteger el tiempo estratégico y el arte de decir que no sin destruir relaciones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP of Product con experiencia ayudando a product managers a gestionar la presión de un entorno donde las peticiones siempre superan la capacidad del equipo, y donde el PM está en el centro de todos los conflictos de priorización. Voy a explorar contigo cómo construir el sistema de productividad y priorización del PM.

Mi contexto: [describe tu situación: tipo de producto, tamaño del equipo de producto, las principales fuentes de demanda de tu tiempo (stakeholders internos, equipo de ingeniería, clientes, CEO) y el mayor problema de productividad que tienes en este momento]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. El problema estructural del PM: por qué siempre hay más trabajo del que se puede hacer**
El product manager vive en un entorno estructuralmente sobrecargado: es el punto de confluencia de las necesidades del cliente, las capacidades de ingeniería, los objetivos de negocio y las expectativas de ventas, CS y marketing. Explícame las causas raíz del problema de productividad del PM: la falta de ownership claro sobre lo que es tarea del PM vs. lo que es tarea de otros roles, la tendencia a aceptar todas las peticiones por miedo a decepcionar a los stakeholders, la ausencia de un sistema de priorización que permita tomar decisiones rápidas y justificadas, y el coste de la priorización reactiva (siempre respondiendo a la urgencia en lugar de construyendo lo estratégicamente importante).

**2. Los frameworks de priorización que realmente funcionan**
Hay docenas de frameworks de priorización para el PM; la mayoría son más complicados de aplicar de lo que valen. Explícame los frameworks que realmente funcionan en la práctica: el RICE (Reach, Impact, Confidence, Effort) como framework de priorización de features con una fórmula concreta y sus limitaciones, el ICE (Impact, Confidence, Ease) como versión simplificada para la priorización rápida, el modelo Kano para clasificar las features entre las que deleitan, las que se esperan y las indiferentes, y el árbol de oportunidades de Teresa Torres como marco para conectar las peticiones de los stakeholders con los outcomes de negocio en lugar de evaluarlas de forma aislada.

Para cada framework, dame cuándo usarlo, cómo aplicarlo en menos de 15 minutos y sus limitaciones reales.

**3. El sistema de gestión de peticiones: el inbox del PM**
El PM moderno recibe peticiones por Slack, por email, en reuniones, en el pasillo y en las notas del one-on-one con el CEO. Sin un sistema para capturar y procesar estas peticiones, el trabajo del PM se convierte en una carrera de obstáculos. Explícame el sistema de gestión de peticiones del PM: la bandeja de entrada única para todas las peticiones (independientemente del canal por el que llegan), el proceso de triage rápido que clasifica las peticiones en pendientes de evaluación, en evaluación, descartadas y aceptadas, la cadencia de revisión del backlog que asegura que ninguna petición se pierde y que todas reciben respuesta, y la comunicación con los stakeholders que gestionó las expectativas sobre cuándo y cómo se toman las decisiones de priorización.

**4. El arte de decir que no sin destruir relaciones**
Decir que no es la habilidad más importante del PM y la que más se subestima en la formación. Un PM que dice sí a todo no tiene estrategia: tiene una lista de peticiones. Explícame cómo decir que no de forma que el stakeholder entienda y respete la decisión: la diferencia entre el "no" definitivo (esta petición no va a entrar al roadmap) y el "no ahora" (no es la prioridad en este momento pero puede serlo en el futuro), los frameworks de comunicación del no que incluyen el reconocimiento del problema del stakeholder, la explicación del criterio de priorización y la alternativa (si existe), y cómo gestionar la escalada cuando el stakeholder no acepta el no y va al manager o al CEO.

**5. Proteger el tiempo estratégico del PM**
El mayor ladrón del tiempo del PM es el trabajo operativo: las reuniones de stakeholders, las preguntas del equipo de ingeniería, los bugs que necesitan decisión urgente. Si el PM no protege tiempo para pensar estratégicamente, el producto pierde dirección. Explícame cómo proteger el tiempo estratégico: el bloqueo de tiempo semanal para el trabajo de discovery y de estrategia (sin reuniones, sin Slack, sin interrupciones), la delegación de las decisiones operativas al equipo de ingeniería y diseño (con los frameworks que les permiten tomar decisiones de forma autónoma en los casos más comunes), y la gestión de la disponibilidad con los stakeholders que crea expectativas realistas sobre cuándo pueden obtener tiempo del PM.

**6. Los rituales del PM productivo**
Los rituales del PM determinan cómo distribuye su atención y su energía. Los rituales bien diseñados mantienen la cabeza clara y el trabajo organizado; los mal diseñados generan la sensación permanente de estar corriendo sin avanzar. Propón el sistema de rituales del PM: la revisión semanal del backlog y de los objetivos (30 minutos, cada lunes por la mañana), el one-on-one con los stakeholders principales que mantiene el alineamiento sin necesitar reuniones reactivas, el proceso de revisión mensual del roadmap que evalúa si las apuestas siguen siendo válidas, y el ritual de cierre de semana que procesa los pendientes y prepara la semana siguiente.

Quiero concreción: los scripts de conversación para decir que no, la plantilla de triage de peticiones y el diseño de la semana ideal del PM que deja espacio para el trabajo estratégico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir el sistema de priorización y gestión del tiempo del PM que opera bajo presión constante',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Productividad de RRHH: automatizar lo administrativo para enfocarse en lo estratégico',
                'description'      => 'El equipo de personas que usa la tecnología para eliminar el trabajo administrativo repetitivo y dedicar más tiempo a las conversaciones y decisiones que generan impacto real.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de people operations con experiencia construyendo equipos de RRHH eficientes que usan la tecnología para automatizar el trabajo administrativo y dedicar el tiempo liberado a las iniciativas de mayor impacto. Voy a explorar contigo cómo transformar la productividad del equipo de personas.

Mi contexto: [describe la situación de tu equipo: número de personas en RRHH, número de empleados a los que das servicio, las herramientas de RRHH que tienes y el trabajo administrativo que más tiempo consume actualmente]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. El problema estructural de RRHH: demasiado trabajo operativo, poco estratégico**
Los equipos de personas suelen dedicar el 70-80% de su tiempo a trabajo administrativo: procesar contratos, responder preguntas de los empleados sobre nóminas y beneficios, gestionar el onboarding y el offboarding, coordinar procesos de revisión de desempeño. Explícame por qué RRHH acaba atrapado en el trabajo operativo: la ausencia de sistemas que automaticen las tareas repetitivas, la tendencia de los empleados a contactar directamente con RRHH para preguntas que tienen respuesta en la documentación, y la presión de responder a todo de forma inmediata aunque no sea urgente. Los costes reales de este modelo: el trabajo estratégico que no se hace (el desarrollo del talento, el diseño de la cultura, la planificación de la fuerza de trabajo) porque el equipo está absorbido por lo operativo.

**2. El mapa de automatización: qué puede automatizarse y qué no**
Antes de automatizar, es necesario saber qué merece ser automatizado. Explícame el proceso de identificación de las oportunidades de automatización en RRHH: la metodología de auditoría del tiempo del equipo (identificar las tareas que se repiten con mayor frecuencia y el tiempo que consumen), la clasificación de las tareas en automatizables (respuesta a preguntas frecuentes, flujos de firma de documentos, notificaciones de proceso), semiautomatizables (el gestor recibe el borrador automatizado y lo revisa antes de enviar) y no automatizables (las conversaciones difíciles, el coaching, el apoyo en momentos de conflicto). Para cada categoría, las herramientas y los enfoques más adecuados.

**3. Automatizar el onboarding y el offboarding**
El onboarding y el offboarding son los procesos de RRHH que más tiempo consumen y más oportunidades de automatización tienen. Explícame cómo automatizar estos procesos sin perder la calidez que el nuevo empleado o el que se va necesita: el flujo de onboarding automático que dispara la creación de cuentas, el envío de documentación, el agendado de reuniones de bienvenida y el envío de los primeros mensajes del manager y del equipo, el checklist digital que asegura que cada paso del onboarding se completa sin que RRHH tenga que perseguir a nadie, y el proceso de offboarding que garantiza la devolución de los equipos, la baja de los accesos y la entrevista de salida de forma ordenada y sin omisiones.

**4. El portal de autoservicio: reducir las preguntas directas a RRHH**
La mayoría de las preguntas que los empleados hacen a RRHH tienen respuesta en la documentación de la empresa. Si los empleados encuentran la respuesta antes de preguntar, el tiempo de RRHH se libera para el trabajo de mayor valor. Explícame cómo construir el portal de autoservicio que realmente usan los empleados: el diseño de la base de conocimiento que contiene respuestas a las preguntas más frecuentes de forma accesible y actualizada, el chatbot o asistente de IA que puede responder la mayoría de las preguntas básicas sin intervención humana, y el proceso de escalación que conecta al empleado con un humano cuando el autoservicio no es suficiente.

**5. Automatizar los procesos de revisión y feedback**
Los procesos de gestión del desempeño y de feedback son una de las mayores cargas administrativas del equipo de RRHH. Explícame cómo automatizar sin deshumanizar: la automatización de los recordatorios y los flujos del proceso de revisión (quién debe completar qué, para cuándo, con qué formato), el dashboard de progreso del proceso que muestra en tiempo real qué completaciones están pendientes, el envío automático de las encuestas de clima y el procesamiento de los resultados, y cómo usar la automatización para asegurar que el proceso se ejecuta de forma consistente en toda la organización sin que RRHH tenga que perseguir a los managers.

**6. Redirigir el tiempo liberado hacia el trabajo estratégico**
Automatizar el trabajo administrativo es el primer paso; el segundo es asegurarse de que el tiempo liberado se invierte en iniciativas de mayor impacto. Explícame cómo redireccionar el tiempo del equipo de personas hacia el trabajo estratégico: el proceso de planificación del tiempo del equipo de RRHH que distingue el trabajo operativo (que debe minimizarse) del trabajo táctico (que debe ejecutarse de forma eficiente) y del trabajo estratégico (que debe protegerse), las iniciativas de mayor impacto en las que invertir el tiempo liberado (el desarrollo del liderazgo, el diseño de la cultura, el workforce planning), y cómo comunicar al negocio el valor de tener un equipo de RRHH que puede trabajar en iniciativas estratégicas.

Quiero concreción: las herramientas específicas que más impacto tienen en la productividad de RRHH, el proceso de implementación del autoservicio y los cambios que puedo hacer esta semana para empezar a liberar tiempo del equipo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Automatizar el trabajo administrativo de RRHH para liberar tiempo hacia las iniciativas de mayor impacto',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Eficiencia en el cierre contable y los procesos financieros',
                'description'      => 'Acelera el mes-cierre y los procesos financieros recurrentes: automatización, estandarización y los rituales que reducen el tiempo del cierre mensual sin sacrificar la calidad del dato.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Controller o director financiero con experiencia transformando procesos de cierre contable que tardaban semanas en procesos ágiles que se completan en días sin sacrificar la calidad de los datos financieros. Voy a explorar contigo cómo acelerar el cierre mensual y los procesos financieros recurrentes.

Mi contexto: [describe la situación actual: cuántos días tarda el cierre mensual, el tamaño del equipo financiero, el ERP o sistema contable que usas y los principales cuellos de botella que retrasan el proceso]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. Diagnosticar el cierre mensual: dónde se pierde el tiempo**
Antes de mejorar el cierre, necesitamos entender con precisión dónde se pierde el tiempo. Explícame el proceso de diagnóstico: el mapeo del proceso de cierre actual (cada tarea, quién la hace, cuánto tarda, de qué depende), la identificación de los cuellos de botella críticos (las tareas que retrasan todo lo que viene después), las causas raíz de los retrasos más frecuentes (datos que llegan tarde de otras áreas, conciliaciones manuales que consumen horas, aprobaciones que esperan a personas no disponibles), y la diferencia entre los retrasos evitables (que se resuelven con automatización o con mejor coordinación) y los estructurales (que requieren cambios en el modelo operativo).

**2. El cierre continuo: de cerrar al final a cerrar durante el mes**
El modelo de cierre tradicional acumula todo el trabajo para los últimos días del mes. El cierre continuo distribuye el trabajo durante todo el mes para que el proceso de cierre final sea una verificación, no una carrera. Explícame cómo implementar el cierre continuo: las tareas de cierre que pueden realizarse durante el mes (conciliaciones bancarias diarias o semanales, revisión de las facturas pendientes de recibir, actualización de las provisiones), el proceso de revisión intermedia en la mitad del mes que detecta anomalías con tiempo de corregirlas, y el diseño del proceso de cierre final que se convierte en una validación rápida en lugar de en un trabajo de emergencia.

**3. Automatizar las conciliaciones y los procesos repetitivos**
Las conciliaciones bancarias, la conciliación entre el libro mayor y los libros auxiliares, la conciliación de cuentas intercompañía: todos son procesos que se repiten mes a mes con la misma lógica. Explícame las oportunidades de automatización del cierre: las herramientas de automatización de conciliaciones que comparan automáticamente los extractos bancarios con el libro mayor (BlackLine, Trintech, o las funcionalidades de automatización del propio ERP), los scripts y las macros que automatizan los informes recurrentes, la automatización de los flujos de aprobación que eliminan los cuellos de botella de la aprobación manual, y el uso de la IA para detectar automáticamente las anomalías contables que requieren revisión humana.

**4. El paquete de cierre estandarizado: consistencia que acelera**
La variabilidad en el proceso de cierre es uno de los mayores destructores de eficiencia. Cuando cada mes el equipo hace las cosas de forma ligeramente diferente, el tiempo de ejecución se dispara. Explícame cómo construir el paquete de cierre estandarizado: el checklist de cierre con cada tarea documentada, su owner, su plazo y su criterio de completitud, las plantillas estandarizadas para los documentos de cierre (las conciliaciones, los análisis de varianza, el paquete de cierre para la dirección), el proceso de documentación de los asientos de cierre que hace que cualquier persona del equipo pueda ejecutarlos, y la revisión de calidad del paquete de cierre que detecta errores antes de que se presenten a la dirección.

**5. La coordinación con el resto de la organización**
El cierre financiero no es responsabilidad exclusiva del equipo de finanzas: depende de que otras áreas entreguen información a tiempo. Explícame cómo mejorar la coordinación con el resto de la organización para el cierre: el calendario de cierre compartido con las fechas límite para que cada área entregue su información, las notificaciones automáticas que recuerdan a cada área sus compromisos antes de las fechas límite, el proceso de escalación cuando una área no entrega a tiempo y el impacto en el cierre, y cómo construir la cultura de puntualidad en el cierre que hace que el resto de la organización entienda que sus retrasos tienen costes reales para el equipo de finanzas.

**6. El reporting financiero ágil: de los datos al insight más rápido**
La velocidad del cierre solo importa si los datos llegan a los tomadores de decisiones en el momento en que los necesitan. Explícame cómo construir el proceso de reporting financiero ágil: el diseño del paquete de cierre para la dirección que comunica los datos más importantes de forma clara y accionable (en lugar del informe de cien páginas que nadie lee completo), la automatización de los dashboards financieros que se actualizan en tiempo real con los datos del ERP, y el proceso de análisis de varianza que identifica rápidamente las desviaciones relevantes y su explicación.

Quiero concreción: el timeline realista de reducción del cierre de X días a Y días, las herramientas que más impacto tienen en la automatización del cierre y el proceso de implementación paso a paso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Acelerar el cierre mensual y los procesos financieros recurrentes sin sacrificar la calidad del dato',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Productividad jurídica: gestión de la carga de trabajo en el despacho',
                'description'      => 'El abogado que gestiona múltiples clientes y asuntos simultáneamente: sistemas de gestión de asuntos, delegación eficaz y las herramientas que mantienen el control sin vivir en el correo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un socio de despacho o director de operaciones jurídicas con experiencia construyendo sistemas de gestión de la carga de trabajo que permiten a los abogados atender múltiples asuntos simultáneamente sin perder calidad ni quemarse. Voy a explorar contigo cómo construir el sistema de productividad del profesional jurídico.

Mi contexto: [describe tu situación: tipo de práctica (despacho, departamento jurídico in-house, freelance legal), número de asuntos activos, el principal cuello de botella de productividad y las herramientas que usas actualmente]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. El problema de la carga de trabajo del abogado**
El abogado trabaja en múltiples asuntos simultáneamente, con clientes que tienen expectativas de disponibilidad inmediata, plazos que no se pueden incumplir y un trabajo que requiere concentración profunda pero se interrumpe constantemente. Explícame las causas raíz de la baja productividad del abogado: la gestión reactiva del trabajo (responder a lo que llega en lugar de planificar lo que hay que hacer), la ausencia de un sistema de seguimiento de asuntos que permite saber en todo momento el estado de cada asunto y los próximos pasos, la tendencia a gestionar el trabajo por correo electrónico (el correo como gestor de tareas es un sistema caótico que garantiza que las cosas se pierden), y el exceso de centralización en el abogado senior que crea un cuello de botella y no permite delegar eficazmente.

**2. El sistema de gestión de asuntos**
El sistema de gestión de asuntos es la columna vertebral de la productividad jurídica. Explícame cómo diseñar e implementar un sistema que funcione: la herramienta de practice management (los criterios para elegir entre Clio, Mycase, Actionstep u otras, o para crear un sistema propio con herramientas generalistas como Notion o Asana), la estructura de la ficha de asunto que contiene toda la información relevante (cliente, objeto del asunto, documentación clave, estado actual, próximas acciones, plazos, time tracking), el proceso de actualización del asunto que hace que la información esté siempre actualizada sin que sea una carga para el abogado, y el sistema de alertas de plazos que garantiza que ningún plazo procesal o contractual se pasa por alto.

**3. La delegación eficaz en el entorno jurídico**
La delegación es la palanca de productividad más poderosa y más subutilizada en los despachos. Muchos abogados senior hacen trabajo que podría hacer un junior porque no tienen el sistema para delegar de forma que garantice la calidad. Explícame cómo construir la capacidad de delegación eficaz: el diseño de los documentos de instrucciones para cada tipo de tarea que se delega (qué información necesita el junior para ejecutar sin necesitar preguntar constantemente), el proceso de revisión del trabajo delegado que asegura la calidad sin que el socio tenga que rehacerlo, el feedback que ayuda al junior a crecer y reduce los errores en las próximas delegaciones, y el sistema de seguimiento que permite al socio saber el estado del trabajo delegado sin necesitar interrumpir al junior.

**4. La gestión del correo electrónico en la práctica jurídica**
El correo electrónico es la herramienta de comunicación dominante en la práctica jurídica y uno de los mayores destructores de productividad. Explícame cómo gestionar el correo de forma que no absorba toda la jornada: el sistema de procesamiento del correo en bloques de tiempo (en lugar de responder a cada email en el momento en que llega), las reglas de filtrado y las carpetas que organizan el correo por asunto y por urgencia, los templates de respuesta para las comunicaciones más frecuentes con clientes y contrapartes, y la política de comunicación con los clientes que gestiona sus expectativas de tiempo de respuesta sin que el abogado esté permanentemente conectado.

**5. La planificación del tiempo en la práctica jurídica**
El abogado sin un sistema de planificación trabaja siempre en modo reactivo: respondiendo a lo que llega, apagando incendios, postergando el trabajo importante que no es urgente. Explícame el sistema de planificación semanal del abogado productivo: el ritual de inicio de semana que revisa todos los asuntos activos y define las tres acciones más importantes de cada uno para la semana, la programación de los bloques de trabajo concentrado para las tareas de mayor concentración (redacción de escritos, análisis jurídico, negociaciones importantes), el diseño del calendario que agrupa las reuniones con clientes y las llamadas en bloques que preservan la concentración para el trabajo sustantivo, y el proceso de cierre de semana que revisa el progreso y prepara la semana siguiente.

**6. Las herramientas de productividad jurídica**
La tecnología puede multiplicar la productividad del abogado si se elige e implementa correctamente. Explícame las categorías de herramientas más impactantes: las herramientas de gestión de asuntos y time tracking (cuáles elegir según el tipo de práctica), las herramientas de automatización de documentos (generación automática de contratos y escritos a partir de plantillas y datos del asunto), las bases de datos jurídicas con búsqueda por IA que aceleran la investigación legal, y las herramientas de IA para la revisión de contratos y la extracción de información de documentos que reducen el tiempo de los procesos de due diligence.

Quiero concreción: el diseño del sistema de gestión de asuntos que puedo implementar esta semana, las herramientas que más impacto tienen en la productividad jurídica y los rituales de planificación que puedo adoptar de inmediato.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir el sistema de gestión de la carga de trabajo que permite al abogado ser productivo sin quemarse',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Productividad del Customer Success Manager',
                'description'      => 'El CSM que gestiona una cartera grande sin perder calidad: sistemas de seguimiento, templates de comunicación y las rutinas que permiten hacer el trabajo de alto valor sin ahogarse en las tareas operativas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia construyendo sistemas de trabajo que permiten a los CSMs gestionar carteras grandes sin perder calidad en la relación con los clientes. Voy a explorar contigo cómo construir el sistema de productividad del Customer Success Manager.

Mi contexto: [describe tu situación: número de cuentas que gestionas, ACV promedio, las herramientas de CS que usas y el mayor problema de productividad que tienes en este momento]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. El problema estructural del CSM: demasiadas cuentas, demasiadas tareas**
El CSM vive atrapado entre las tareas operativas (responder emails de clientes, preparar QBRs, documentar interacciones en la plataforma de CS) y el trabajo de alto valor que realmente mueve el NRR (construir relaciones con los sponsors, identificar oportunidades de expansión, intervenir a tiempo en las cuentas en riesgo). Explícame las causas raíz de la baja productividad del CSM: la gestión reactiva de la cartera (siempre respondiendo a lo que llega en lugar de siendo proactivo con las cuentas que más lo necesitan), la ausencia de sistemas que automaticen o estandaricen las tareas repetitivas (cada QBR construido desde cero, cada email personalizado manualmente aunque el mensaje sea el mismo), y la dificultad de priorizar en una cartera donde todas las cuentas parecen urgentes.

**2. El sistema de priorización de la cartera**
No todas las cuentas merecen la misma atención en cada semana. El CSM productivo tiene un sistema que le dice dónde invertir el tiempo. Explícame cómo construir el sistema de priorización de la cartera: el health score como herramienta principal de priorización (las cuentas en rojo tienen prioridad sobre las verdes, con independencia del ruido que generen), la matriz de priorización que combina el health score con el potencial de expansión y el momento de la renovación (cuánto tiempo queda), el proceso de revisión semanal de la cartera que actualiza las prioridades y define las tres cuentas más críticas de la semana, y cómo gestionar las peticiones urgentes de clientes sin abandonar las prioridades estratégicas de la cartera.

**3. Los templates y los playbooks: estandarizar el trabajo repetitivo**
Gran parte del trabajo del CSM es repetitivo: el email de bienvenida al nuevo cliente, el QBR trimestral, el email de renovación proactiva, el plan de adopción para los primeros 90 días. Con los templates correctos, este trabajo que antes tardaba horas puede hacerse en minutos. Explícame cómo construir la biblioteca de templates del CSM: los tipos de comunicación que merecen un template (los que se repiten más de dos veces por mes con la misma estructura), el diseño de templates que se sienten personales aunque sean estandarizados (las variables que el CSM personaliza vs. el bloque de texto que es siempre igual), el proceso de mantenimiento de los templates que los mantiene actualizados cuando el producto o el proceso cambia, y cómo conseguir que el equipo de CS use los templates de forma consistente en lugar de reinventar la rueda en cada interacción.

**4. El sistema de seguimiento de cuentas: saber en todo momento dónde está cada cliente**
El CSM con una cartera grande necesita un sistema que le permita saber, en cualquier momento, el estado de cada cuenta sin tener que revisar cien notas en la plataforma de CS. Explícame cómo construir el sistema de seguimiento: el diseño de la nota de cuenta estándar que resume el estado actual, los próximos pasos y los riesgos de cada cliente (de forma que cualquier persona del equipo pueda hacer un handover en 10 minutos), el proceso de actualización de la cuenta después de cada interacción significativa (qué se documenta, cuánta profundidad, en qué formato), y el sistema de recordatorios proactivos que asegura que ninguna cuenta se queda sin contacto por más tiempo del definido en el modelo de cobertura.

**5. La reunión de QBR productiva: preparación y ejecución eficiente**
El QBR es la reunión más importante del CSM y la que más tiempo consume preparar. Con el sistema correcto, la preparación puede reducirse de cuatro horas a cuarenta y cinco minutos sin perder calidad. Explícame cómo diseñar el proceso de QBR eficiente: la plantilla de QBR que incluye los datos que se actualizan automáticamente desde la plataforma de CS (métricas de uso, health score, tickets de soporte), la sección de análisis que el CSM prepara (las observaciones cualitativas sobre la salud de la relación, los logros del último trimestre, los riesgos identificados), y el proceso de reunión que convierte el QBR en una conversación de valor en lugar de una revisión de datos que el cliente ya tiene.

**6. Los rituales de productividad del CSM**
Los rituales semanales del CSM determinan cómo distribuye su atención a lo largo de la semana. Sin rituales, el CSM trabaja siempre en modo reactivo. Propón el sistema de rituales del CSM productivo: el ritual del lunes de revisión de la cartera (30 minutos para revisar el health score de todas las cuentas y definir las tres más críticas de la semana), el bloque diario de comunicaciones proactivas (el tiempo sagrado para contactar a los clientes que necesitan atención antes de que ellos contacten al CSM), el proceso de cierre del viernes que actualiza las notas de cuenta de las interacciones de la semana y prepara la agenda de la siguiente, y el ritual mensual de revisión de la cartera que evalúa la tendencia del NRR y detecta los patrones de riesgo.

Quiero concreción: el diseño de la semana ideal del CSM, los templates más importantes que debo construir primero y el sistema de priorización que puedo implementar esta semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Gestionar una cartera grande de clientes sin perder calidad usando sistemas, templates y rituales de productividad',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Productividad del freelance autónomo',
                'description'      => 'Cuando no hay manager que ponga plazos: sistemas de autogestión, time tracking, rituales de planificación semanal y la mentalidad que diferencia al freelance productivo del que siempre va a remolque.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor especializado en productividad para freelancers con experiencia ayudando a profesionales independientes a construir los sistemas de autogestión que les permiten entregar un trabajo excelente sin quemarse. Voy a explorar contigo cómo construir el sistema de productividad del freelance autónomo.

Mi contexto: [describe tu situación: tipo de servicio, número de clientes activos, las herramientas que usas, el mayor problema de productividad que tienes y si trabajas en remoto, en casa, en coworking o en un mix]

Trabaja conmigo en profundidad en los siguientes bloques:

**1. El reto único de la productividad del freelance**
La productividad del freelance es un reto diferente al del empleado: no hay estructura externa que organice el trabajo, no hay manager que dé prioridades, no hay equipo que genere el ritmo de trabajo. El freelance tiene total libertad y esa libertad es una trampa. Explícame los retos específicos de la productividad del freelance: la dificultad de establecer y mantener límites entre el tiempo de trabajo y el tiempo personal (sin horario fijo, el trabajo lo invade todo o la procrastinación lo devora), la tendencia a aceptar proyectos que no caben en el calendario por miedo a perder ingresos, el efecto fiesta-hambruna (meses de sobrecarga seguidos de meses de sequía por no haber mantenido el pipeline mientras se estaba ejecutando), y la falta de los rituales y las estructuras que en el trabajo corporativo ocurren solos (el standup, la reunión de planning, el feedback del manager).

**2. El sistema de gestión de proyectos del freelance**
El freelance trabaja en múltiples proyectos simultáneamente para distintos clientes, cada uno con sus plazos, sus entregables y su nivel de urgencia. Sin un sistema de gestión, el freelance trabaja en lo que tiene más presente en la mente, no en lo más importante. Explícame cómo construir el sistema de gestión de proyectos del freelance: la herramienta de gestión de tareas y proyectos que funciona para el freelance (los criterios para elegir entre Notion, Todoist, Linear, Asana u otras, o para construir un sistema propio), la estructura de proyecto que incluye los entregables, los plazos, los hitos intermedios y el tiempo estimado de cada tarea, el proceso de planificación semanal que distribuye el trabajo entre los días disponibles de forma realista, y el sistema de seguimiento de proyectos que permite saber en todo momento el estado de cada cliente.

**3. El time tracking: la herramienta que transforma la productividad del freelance**
El time tracking es la práctica que más información aporta sobre la productividad del freelance y la que más frecuentemente se ignora. Explícame por qué el time tracking es fundamental y cómo implementarlo: el valor de rastrear el tiempo por proyecto y por tipo de tarea (descubrir que una categoría de proyectos es mucho menos rentable de lo que parecía, identificar las tareas que consumen más tiempo del estimado sistemáticamente), las herramientas de time tracking que tienen la menor fricción de uso (Toggl, Harvest, Clockify), el proceso de revisión semanal de los datos de time tracking que convierte los números en decisiones (¿debo ajustar mis estimaciones?, ¿debo ajustar mi pricing?, ¿estoy dedicando demasiado tiempo a trabajo no facturable?), y cómo usar el time tracking sin que se convierta en una obsesión que añade estrés.

**4. Los rituales de planificación: la estructura que el freelance debe crearse**
El freelance no tiene los rituales de planificación que vienen incluidos en el trabajo corporativo. Tiene que crearlos. Explícame los rituales que debe tener cualquier freelance productivo: el ritual de planificación semanal del domingo o lunes (revisar todos los proyectos activos, identificar los entregables de la semana, distribuir el trabajo en los días disponibles con buffer realista para los imprevistos), el ritual de inicio del día de trabajo (los primeros 10 minutos que orientan la jornada hacia las prioridades en lugar de hacia el correo o las redes sociales), el ritual de cierre del día (procesar los pendientes, actualizar el estado de los proyectos, preparar el trabajo del día siguiente), y el ritual mensual de revisión del negocio (ingresos, pipeline, tiempo invertido, rentabilidad por proyecto).

**5. La gestión de las interrupciones y la concentración profunda**
El freelance tiene más control sobre su entorno que el empleado, pero ese control no significa que sepa usarlo bien. Explícame cómo el freelance puede crear las condiciones para el trabajo de concentración profunda: el diseño del entorno físico de trabajo que minimiza las distracciones (tanto si trabajas en casa como en un coworking), la gestión de las notificaciones del móvil y del ordenador durante los bloques de trabajo concentrado, las técnicas de gestión del tiempo que funcionan para el freelance (el método Pomodoro adaptado al tipo de trabajo, los bloques de trabajo temático que agrupan tareas similares para reducir el coste de cambio de contexto), y cómo gestionar la tendencia a la procrastinación que aparece cuando el trabajo es difícil o cuando hay proyectos que generan ansiedad.

**6. La mentalidad del freelance productivo**
La productividad del freelance no es solo un problema de sistemas y herramientas: es un problema de mentalidad. Explícame la mentalidad que diferencia al freelance productivo del que siempre va a remolque: la relación saludable con la incertidumbre (el flujo de trabajo del freelance nunca es predecible, y la ansiedad por la incertidumbre destruye la productividad), la disciplina de mantener el pipeline mientras se está ejecutando (los proyectos del mes que viene se consiguen trabajando ahora, no cuando los proyectos actuales terminan), el equilibrio entre la flexibilidad (una de las grandes ventajas del freelance) y la estructura (sin la cual la flexibilidad se convierte en caos), y el proceso de revisión periódica de los sistemas de productividad para ajustarlos cuando cambia el tipo de trabajo o la etapa del negocio.

Quiero concreción: los sistemas que más impacto tienen en la productividad del freelance, las herramientas mínimas que necesito para empezar y el diseño de una semana ideal que sea sostenible a largo plazo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir los sistemas y rituales de autogestión del freelance que permiten producir trabajo excelente sin quemarse',
                'vote_score'       => 47,
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
