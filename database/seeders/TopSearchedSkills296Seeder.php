<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills296Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Gestión del tiempo del CMO: cómo el líder de marketing protege lo estratégico',
                'description'      => 'Diseña el sistema de gestión del tiempo del director de marketing para proteger el trabajo estratégico sin descuidar lo operativo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach ejecutivo especializado en productividad y liderazgo con experiencia asesorando a directores de marketing y CMOs en empresas de crecimiento acelerado. Tu misión es ayudarme a diseñar un sistema de gestión del tiempo que me permita ejercer el liderazgo estratégico que requiere mi rol sin caer en la trampa de ser el gestor de tareas del equipo o el apagafuegos de turno.

Contexto de mi situación:
Soy [CMO / Director de Marketing / Head of Marketing] en una empresa de [sector] con [tamaño del equipo de marketing]. Mi mayor problema de tiempo es [demasiadas reuniones internas / presión constante de la operación que me impide pensar / equipo que me consulta cada decisión / dificultad para decir no a nuevas iniciativas / mezcla de tareas estratégicas y operativas sin separación clara].

Lo que necesito:

1. EL CALENDARIO IDEAL DEL CMO: CÓMO DISTRIBUIR LA SEMANA
Define la distribución semanal del tiempo para un CMO en una empresa en crecimiento. ¿Cuántas horas deben ir a trabajo estratégico profundo (sin interrupciones), a reuniones de dirección, a reuniones de equipo, a revisión de campañas y resultados, a desarrollo de equipo (one-on-ones, feedback), y a aprendizaje y benchmarking externo? Explica el principio de los bloques de tiempo y cómo defender estos bloques en el calendario compartido sin generar conflictos con el resto de la organización.

2. CLASIFICAR LAS DEMANDAS: ESTRATÉGICO VERSUS OPERATIVO
Una de las batallas del CMO es distinguir qué requiere su atención directa y qué puede ser delegado, pospuesto o eliminado. Define el sistema de clasificación de las demandas que llegan a lo largo del día: qué tipo de decisiones solo puede tomar el CMO (posicionamiento, presupuesto, mensajes clave, contrataciones senior), qué puede delegar con seguimiento (ejecución de campañas, gestión de proveedores, reportes de performance), qué puede delegar sin seguimiento (tareas operativas rutinarias), y qué puede eliminar o decir no (reuniones sin agenda, proyectos que no mueven las métricas clave, solicitudes externas que no aportan valor estratégico).

3. EL SISTEMA DE REUNIONES QUE NO DESTRUYE LA SEMANA
Las reuniones son el mayor ladrón de tiempo de un líder de marketing. Define el sistema de reuniones eficiente para el CMO: ritmo de reuniones de equipo (cuántas, con qué frecuencia, con qué agenda tipo), cómo hacer que los one-on-ones con cada directo sean productivos en treinta minutos, qué reuniones de dirección requieren tu presencia versus cuáles pueden cubrirse con un resumen escrito, y cómo gestionar las reuniones improvisadas y las urgencias que aparecen sin previo aviso.

4. PROTEGER EL TIEMPO DE PENSAMIENTO ESTRATÉGICO
El trabajo más valioso del CMO no ocurre en reuniones sino en bloques de reflexión profunda. ¿Cómo protejo ese tiempo en un entorno de alta presión? Define: cómo bloquear en el calendario al menos cuatro horas semanales de pensamiento estratégico sin interrupciones, qué tipo de trabajo se hace en esos bloques (revisión de estrategia, análisis competitivo, definición de mensajes, planificación de iniciativas futuras), y cómo comunicar al equipo que esas horas son intocables sin parecer inaccesible.

5. GESTIÓN DE LA ENERGÍA, NO SOLO DEL TIEMPO
El tiempo disponible no es el único recurso que hay que gestionar; la energía cognitiva es igual de importante. Define el sistema de gestión de energía para el CMO: cómo agrupar las tareas que requieren alta concentración en los momentos de pico energético (mañanas para la mayoría de las personas), cómo reservar las reuniones y el trabajo administrativo para los valles de energía, y cómo manejar la carga emocional de liderar un equipo creativo bajo presión sin que agote la capacidad de tomar buenas decisiones.

6. REVISIÓN SEMANAL: EL RITUAL QUE LO MANTIENE ALINEADO
Un CMO que no revisa su semana no controla su tiempo, lo gestiona el entorno. Define el ritual de revisión semanal de quince a treinta minutos: qué revisar (calendario de la próxima semana, OKRs del trimestre, estado de las iniciativas clave, compromisos adquiridos con el equipo), qué decisiones tomar (qué mover, qué cancelar, qué delegar esta semana), y cómo conectar el plan de la semana con los objetivos estratégicos del trimestre para no perderse en lo urgente.

Responde con un sistema concreto y accionable. Incluye ejemplos de cómo estructurar el calendario, plantillas de agenda para los ritmos de reuniones y frases concretas para proteger el tiempo sin generar conflicto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar el sistema de gestión del tiempo del CMO para proteger el trabajo estratégico',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Time management del tech lead: entre el código y las reuniones',
                'description'      => 'Gestiona el tiempo del tech lead para mantener la producción técnica individual sin descuidar el liderazgo del equipo de desarrollo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de ingeniería y liderazgo técnico con experiencia ayudando a tech leads y engineering managers a encontrar el equilibrio entre contribuir técnicamente y liderar su equipo. Tu misión es ayudarme a diseñar un sistema de gestión del tiempo que me permita seguir siendo un contribuidor técnico efectivo mientras ejerzo el liderazgo que necesita mi equipo.

Contexto de mi situación:
Soy tech lead o engineering manager en un equipo de [número de personas]. Mi stack tecnológico es [lenguajes y frameworks principales]. El mayor problema de tiempo que tengo es [paso demasiado tiempo en reuniones y no puedo programar / el equipo me interrumpe constantemente para pedir ayuda / no tengo tiempo para revisar el código con la profundidad necesaria / mezclo los roles de contribuidor y líder sin claridad sobre cuándo soy cada uno].

Lo que necesito:

1. EL MODELO DE DISTRIBUCIÓN DEL TIEMPO DEL TECH LEAD
Define el modelo de distribución del tiempo ideal para un tech lead según el tamaño y madurez del equipo. ¿Qué porcentaje del tiempo debe ir a código individual (diseño técnico, implementación, revisión de PRs difíciles), a liderazgo del equipo (code reviews, pair programming, mentoring, unblocking), a gestión del proyecto (planificación de sprint, estimaciones, comunicación con stakeholders), y a reuniones formales (stand-up, sprint planning, retrospectiva, one-on-ones)? ¿Cómo cambia esta distribución cuando el equipo crece de cinco a diez personas?

2. DEFENDER EL TIEMPO DE CÓDIGO: MAKER SCHEDULE
El tech lead que no programa pierde su capacidad técnica en meses. Define la estrategia para defender bloques de tiempo de código: cómo bloquear en el calendario al menos dos o tres bloques semanales de dos horas sin interrupciones para trabajo técnico profundo, cómo comunicar al equipo qué significa ese bloque y cómo manejar las interrupciones durante él (qué es urgente de verdad y qué puede esperar dos horas), y cómo elegir qué tareas técnicas hacen más por el equipo si las haces tú versus las que son más valiosas delegadas.

3. GESTIONAR LAS INTERRUPCIONES DEL EQUIPO
Las preguntas y bloqueos del equipo son el principal ladron de tiempo del tech lead. Define el sistema de gestión de interrupciones que educa al equipo sin bloquearles: las reglas de cuándo interrumpir al tech lead (urgencias de producción sí, dudas de implementación no) versus cuándo esperar a la próxima sesión de ayuda, cómo establecer las "office hours" técnicas (bloques de disponibilidad donde el equipo sabe que puede acudir), y cómo responder a las preguntas de forma que el equipo aprenda a resolver solo en lugar de depender del tech lead.

4. CODE REVIEWS: CÓMO HACERLOS BIEN SIN QUE SEAN UN CUELLO DE BOTELLA
El code review es una de las responsabilidades más valiosas del tech lead pero también una de las que más retrasan al equipo si no se gestionan bien. Define el sistema de code review eficiente: qué SLA de revisión es razonable (cuántas horas máximo entre PR abierto y primer feedback), cómo priorizar qué PRs revisa el tech lead personalmente versus cuáles delega a otros miembros senior, cómo hacer una revisión efectiva en veinte minutos (qué mirar primero, qué comentar en el PR versus qué hablar en una llamada), y cómo reducir el número de rondas de revisión con una buena descripción del PR y criterios de calidad documentados.

5. REUNIONES TÉCNICAS QUE NO SON UNA PÉRDIDA DE TIEMPO
El tech lead asiste a más reuniones que cualquier otro desarrollador. Define el sistema para que las reuniones técnicas sean eficientes: qué reuniones son imprescindibles (stand-up, sprint planning, tech design sessions, retrospectiva) y cuáles puedes delegar o recibir como resumen, cómo reducir el stand-up a quince minutos reales, cómo facilitar las sesiones de diseño técnico para que sean productivas en una hora y no dos, y cómo proteger el tiempo de los desarrolladores de tu equipo de las reuniones que no aportan valor técnico.

6. CRECIMIENTO TÉCNICO CONTINUO: CÓMO APRENDER SIENDO TECH LEAD
El mayor riesgo del tech lead es quedarse técnicamente obsoleto por falta de tiempo para aprender. Define el sistema de aprendizaje continuo del tech lead con tiempo limitado: cuánto tiempo reservar a la semana para aprendizaje técnico (documentación, artículos, experimentos pequeños), qué formato de aprendizaje funciona mejor con agenda apretada (podcast en el transporte, artículo durante el almuerzo, bloque de experimentación quincenal), y cómo hacer que los proyectos del equipo sean también oportunidades de aprender tecnologías o patrones nuevos.

Incluye ejemplos concretos de cómo estructurar una semana tipo, plantillas de agenda para las reuniones clave y criterios de decisión para priorizar entre demandas que compiten.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Gestionar el tiempo del tech lead para equilibrar la producción técnica y el liderazgo del equipo',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Gestión del tiempo del design lead: de la estrategia al pixel sin perderse',
                'description'      => 'Diseña el sistema de gestión del tiempo del líder de diseño para mantener el nivel de calidad visual mientras dirige el equipo y conecta con la estrategia de producto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de liderazgo especializado en equipos creativos con experiencia asesorando a design leads, head of design y directores de UX. Tu misión es ayudarme a construir un sistema de gestión del tiempo que me permita contribuir al trabajo de diseño individual, liderar al equipo y participar en las decisiones estratégicas de producto sin que ninguna de las tres responsabilidades devore a las otras dos.

Contexto de mi situación:
Soy [design lead / head of design / director de UX/UI] en un equipo de [número de diseñadores]. Trabajo en un entorno [agencia / producto / startup / corporativo]. Mi mayor problema de tiempo es [paso demasiado tiempo en revisiones y feedback y no tengo tiempo de diseñar yo mismo / me llaman a demasiadas reuniones de producto donde no puedo aportar valor de diseño real / no logro separar el trabajo creativo de las interrupciones del día / el equipo depende de mi validación para avanzar y eso me convierte en cuello de botella].

Lo que necesito:

1. LA DISTRIBUCIÓN DEL TIEMPO DEL DESIGN LEAD
Define el modelo de distribución semanal del tiempo para un design lead que equilibra las tres dimensiones del rol: contribución individual (diseño propio, exploración creativa, prototipado de conceptos estratégicos), liderazgo del equipo (revisiones de diseño, feedback, mentoring, desbloqueado de miembros del equipo) y participación estratégica (reuniones de producto, alineación con stakeholders, visión del sistema de diseño). Para un equipo de tres a cinco diseñadores, ¿qué porcentaje es razonable para cada dimensión? ¿Cómo cambia cuando el equipo crece a ocho o más personas?

2. PROTEGER EL TIEMPO CREATIVO PROFUNDO
El trabajo de diseño que requiere concentración profunda (exploración conceptual, construcción de sistemas, prototipado complejo) es incompatible con las interrupciones constantes. Define la estrategia para proteger los bloques de tiempo creativo: cómo comunicar en el equipo que esos bloques existen y qué significa para las solicitudes de revisión, cómo bloquear en el calendario dos o tres sesiones semanales de trabajo creativo sin interrupciones, y qué tipo de trabajo de diseño hacer en esos bloques para que el tiempo tenga el mayor impacto estratégico.

3. EL SISTEMA DE FEEDBACK Y REVISIÓN QUE NO BLOQUEA AL EQUIPO
Si todo el diseño del equipo pasa por el design lead antes de avanzar, el design lead se convierte en el cuello de botella. Define el sistema de revisión eficiente: cómo establecer criterios de calidad y principios de diseño claros que permitan al equipo auto-revisarse antes de escalar al lead, cuándo el feedback del design lead es imprescindible (decisiones de sistema de diseño, interfaces estratégicas, publicación al usuario) versus cuándo puede dar autonomía, y cómo estructurar las sesiones de critique de diseño en equipo para que sean una revisión colectiva eficiente y no una sesión de aprobación individual.

4. REUNIONES DE PRODUCTO: CUÁNDO ESTAR Y CUÁNDO NO
El design lead es llamado a más reuniones de las que puede atender productivamente. Define el criterio de selección de reuniones: qué reuniones de producto requieren la presencia del design lead (definición de nuevas funcionalidades, decisiones de UX con impacto alto, revisión de resultados de usabilidad), cuáles pueden cubrirse con un representante del equipo de diseño o con un resumen escrito, y cómo participar en las reuniones de producto de forma que el design lead aporte perspectiva de diseño real y no sea simplemente un asistente que toma notas.

5. EL SISTEMA DE DISEÑO COMO MULTIPLICADOR DE TIEMPO
Un sistema de diseño bien construido y mantenido libera tiempo para todo el equipo. Define la estrategia de inversión en el sistema de diseño desde la perspectiva de la gestión del tiempo: cuánto tiempo invertir en el mantenimiento del sistema de diseño semanalmente para que no se convierta en deuda técnica de diseño, cómo delegar la gestión del sistema de diseño a un miembro del equipo con los criterios correctos, y cómo medir si el sistema de diseño realmente está reduciendo el tiempo de producción o si se ha convertido en un proyecto en sí mismo que consume más tiempo del que ahorra.

6. GESTIONAR LA ENERGÍA CREATIVA
El trabajo creativo requiere un tipo particular de energía que se agota con las interrupciones y las reuniones. Define el sistema de gestión de energía creativa del design lead: cómo identificar los momentos del día en que la energía creativa es más alta y reservarlos para el trabajo de diseño propio, cómo recuperar la energía creativa después de un día intenso de reuniones y feedback (rituales de transición, descanso activo, cambio de contexto), y cómo manejar las semanas de lanzamiento o las fechas de entrega de alta presión sin deteriorar la calidad del trabajo ni la del liderazgo del equipo.

Proporciona ejemplos concretos de cómo estructurar la semana del design lead, qué decir cuando el equipo pide revisiones en bloques de trabajo profundo, y cómo facilitar las sesiones de critique de forma que sean eficientes sin perder la riqueza del feedback creativo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar el sistema de gestión del tiempo del design lead para equilibrar creación, liderazgo y estrategia',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Time management del comercial: priorizar para vender más en las mismas horas',
                'description'      => 'Diseña el sistema de gestión del tiempo del vendedor B2B para maximizar el tiempo frente al cliente y reducir el tiempo en tareas administrativas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de ventas con experiencia en la optimización de la productividad de equipos comerciales B2B. Tu misión es ayudarme a diseñar un sistema de gestión del tiempo que maximice el tiempo que paso activamente vendiendo (frente al cliente) y minimice el tiempo en tareas administrativas, reuniones internas y gestión del CRM que no generan pipeline directamente.

Contexto de mi situación:
Soy [Account Executive / BDR / Sales Manager / Comercial] en una empresa de [sector] con un ciclo de ventas de [duración media del ciclo]. Mi cuota es de [importe o número de cierres mensuales]. El principal problema de tiempo es que [paso demasiado tiempo actualizando el CRM / las reuniones internas me quitan tiempo de prospección / tengo muchos deals abiertos que gestionar pero no sé cuáles priorizar / la preparación de propuestas me consume tiempo desproporcionado].

Lo que necesito:

1. LA DISTRIBUCIÓN IDEAL DEL TIEMPO DEL COMERCIAL
Define el modelo de distribución del tiempo semanal para un Account Executive en ciclo de ventas complejo. ¿Cuánto tiempo debe ir a prospección activa (nuevas llamadas, emails de prospección, LinkedIn), a gestión del pipeline activo (seguimiento de deals, preparación de reuniones, envío de propuestas), a reuniones con clientes y prospectos, a administración del CRM y tareas administrativas, y a reuniones internas del equipo? Indica también los ratios de referencia: cuántas actividades de prospección generan una reunión cualificada, cuántas reuniones generan una propuesta, cuántas propuestas generan un cierre.

2. PRIORIZAR EL PIPELINE: DÓNDE PONER LA ENERGÍA
El comercial con muchos deals abiertos no puede gestionarlos todos con la misma intensidad. Define el sistema de priorización del pipeline: cómo clasificar los deals según probabilidad de cierre y tamaño del ticket (los cuadrantes que merecen alta inversión de tiempo), qué señales de un deal indican que es un callejón sin salida y hay que dejar de invertirle tiempo, y cómo hacer el recorte semanal de pipeline: revisar todos los deals en treinta minutos y decidir cuáles avanzan, cuáles se nutren a ritmo reducido y cuáles se descartan.

3. EL BLOQUE DE PROSPECCIÓN: CÓMO NO SALTÁRSELO NUNCA
La prospección es lo primero que sacrifica un comercial bajo presión, y es lo que destruye el pipeline futuro. Define el sistema para proteger el tiempo de prospección: en qué momento del día reservar el bloque de prospección y por qué (mañanas de lunes a miércoles para la mayoría), cuánto tiempo mínimo reservar por semana para prospección pura, cómo hacer la prospección más eficiente (secuencias automatizadas, listas de llamadas preparadas la noche anterior, investigación en lote en lugar de uno a uno), y cómo medir si el tiempo de prospección está generando los resultados correctos.

4. REDUCIR EL TIEMPO ADMINISTRATIVO SIN PERDER DATOS EN EL CRM
El CRM es una herramienta de ventas, no un sistema de reportes para el manager. ¿Cómo reduzco el tiempo de actualización del CRM sin sacrificar la calidad de los datos? Define: qué campos del CRM son realmente útiles para cerrar más (próximo paso con fecha, último contacto, probabilidad de cierre, objeción principal) versus cuáles son solo reporting para el management, cómo usar herramientas de automatización para capturar actividad sin introducción manual (sincronización de email, transcripción automática de llamadas), y cuándo en el día actualizar el CRM para que no interrumpa el tiempo de venta activa.

5. PREPARACIÓN DE REUNIONES: EFECTIVO EN QUINCE MINUTOS
Un comercial que pasa dos horas preparando cada reunión de ventas no puede escalar. Define el sistema de preparación eficiente: qué investigar antes de una primera reunión (sitio web, LinkedIn del interlocutor, últimas noticias de la empresa, tecnologías que usan), qué preparar antes de una reunión de seguimiento (resumen de la reunión anterior en tres puntos, objetivos de esta reunión, materiales de apoyo relevantes), y cómo construir plantillas de preparación reutilizables por tipo de reunión (discovery, demo, propuesta, cierre) para reducir el tiempo de preparación sin perder calidad.

6. GESTIÓN DE LA ENERGÍA EN UN ROL DE ALTA PRESIÓN
Las ventas son un rol de alta exigencia emocional y cognitiva. Define el sistema de gestión de energía del comercial: cómo manejar el rechazo y el no sin que agote la energía para la siguiente llamada, cómo distribuir las tareas de alta energía (llamadas de prospección en frío, reuniones de cierre) en los momentos de mayor rendimiento del día, y qué rituales de recuperación funcionan entre bloques de llamadas para mantener el nivel de energía y el tono positivo durante toda la jornada.

Proporciona ejemplos concretos de cómo estructurar la semana del comercial, qué decirle al manager cuando las reuniones internas devoran el tiempo de venta, y cómo manejar el equilibrio entre el pipeline presente y el futuro.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Gestionar el tiempo del comercial B2B para maximizar el tiempo frente al cliente y las ventas',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Calendario del PM: cómo organizar la semana para hacer trabajo de producto real',
                'description'      => 'Diseña el sistema de gestión del tiempo del product manager para proteger el trabajo de discovery y estrategia frente a la demanda constante de reuniones y stakeholders.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de producto con experiencia en la optimización de la productividad de product managers en empresas tecnológicas. Tu misión es ayudarme a diseñar un sistema de gestión del tiempo que me permita hacer trabajo real de producto (discovery, estrategia, escritura de specs, análisis de datos) sin que la agenda se llene completamente de reuniones de coordinación, demos y urgencias del equipo.

Contexto de mi situación:
Soy [PM / Senior PM / Group PM] en un [startup / scale-up / empresa tecnológica establecida]. Gestiono [uno o varios productos o features]. El equipo con el que trabajo incluye [número de ingenieros, diseñadores, QA aproximado]. Mi mayor problema de tiempo es [el calendario está lleno de reuniones y no tengo tiempo para pensar / los stakeholders me piden demos y actualizaciones constantemente / el equipo me bloquea con preguntas que me interrumpen / no tengo tiempo para hacer discovery con usuarios reales].

Lo que necesito:

1. LA DISTRIBUCIÓN IDEAL DEL TIEMPO DEL PM
Define el modelo de distribución semanal del tiempo para un product manager. ¿Cuánto tiempo debe ir a discovery y estrategia (entrevistas con usuarios, análisis de datos, definición de problemas), a escritura de documentación (PRDs, user stories, specs técnicas), a reuniones con el equipo de desarrollo (planning, grooming, stand-up, revisión técnica), a reuniones de stakeholders (demos, revisiones de roadmap, alineación con otras áreas), y a gestión del día a día (responder preguntas, desbloquear al equipo, seguimiento de métricas)? ¿Cómo cambia esta distribución entre la fase de discovery y la fase de delivery?

2. PROTEGER EL TIEMPO DE DISCOVERY Y PENSAMIENTO ESTRATÉGICO
El PM que solo entrega features sin discovery se convierte en un gestor de tickets. Define la estrategia para proteger el tiempo de trabajo estratégico: cómo bloquear dos a cuatro horas semanales para discovery sin interrupciones (entrevistas de usuario, análisis de feedback, revisión de métricas con profundidad), cómo comunicar al equipo y a los stakeholders que esas horas son tiempo de trabajo real y no disponibilidad para reuniones, y qué tipo de trabajo de discovery tiene más impacto en el corto plazo (hablar con usuarios que han churnado, analizar la funcionalidad más usada, revisar el NPS con profundidad).

3. EL SISTEMA DE REUNIONES DEL PM QUE NO DEVORA LA SEMANA
El PM puede fácilmente tener el calendario lleno con reuniones de coordinar a personas que coordinan a otras personas. Define el sistema de reuniones eficiente: qué reuniones de desarrollo son imprescindibles para el PM (sprint planning, grooming, demo del sprint, retrospectiva) y con qué frecuencia, cómo reducir el stand-up a quince minutos reales donde el PM aporta contexto y desbloquea, cómo gestionar las reuniones de stakeholders (cuántas, con qué frecuencia, qué información prepara el PM para que sean eficientes), y cómo manejar las solicitudes de demo improvisadas sin que destruyan la semana.

4. ESCRITURA DE SPECS Y PRDs: CÓMO HACERLO BIEN EN POCO TIEMPO
Escribir un PRD claro es uno de los trabajos de mayor impacto del PM pero también uno de los que más se pospone por falta de bloques de escritura. Define el proceso de escritura eficiente: cómo estructurar un PRD en un bloque de dos horas usando una plantilla estándar, qué nivel de detalle es suficiente para que el equipo empiece sin que sea excesivo para el momento de incertidumbre del proyecto, y cómo recopilar las preguntas del equipo sobre la spec antes de la reunión de grooming para no tener que editar el documento tres veces en el mismo día.

5. GESTIONAR LAS INTERRUPCIONES DEL EQUIPO Y LOS STAKEHOLDERS
El PM es la persona a la que todos acuden para obtener respuestas. Define el sistema de gestión de interrupciones: cómo establecer un canal de comunicación asíncrona con el equipo para preguntas que no son urgentes (Slack con normas de uso, documento de FAQs actualizable), cuándo responder sincrónicamente (urgencias de producción, decisiones que bloquean al equipo, preguntas con impacto en el sprint actual) versus cuándo diferir a la próxima reunión de grooming, y cómo manejar al stakeholder que quiere actualización diaria sin convertirte en su asistente personal.

6. LA REVISIÓN SEMANAL DEL PM: CONECTAR EL TRABAJO CON LA ESTRATEGIA
Sin una revisión semanal, el PM pierde la perspectiva y se convierte en gestor de tareas. Define el ritual de revisión semanal de treinta minutos del PM: qué revisar (estado de los OKRs del trimestre, métricas del producto, compromisos adquiridos con stakeholders, estado del discovery en curso), qué decidir (qué priorizar esta semana, qué mover del sprint, qué comunicar proactivamente a los stakeholders), y cómo conectar el plan de la semana con la estrategia del trimestre para que el trabajo diario tenga dirección estratégica.

Incluye ejemplos concretos de cómo estructurar la semana tipo del PM en fase de delivery versus en fase de discovery, y plantillas de agenda para las reuniones clave del ciclo de desarrollo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Organizar la semana del PM para proteger el discovery y la estrategia frente a las reuniones',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Time management en RRHH: administrar lo urgente sin perder lo importante',
                'description'      => 'Diseña el sistema de gestión del tiempo para profesionales de RRHH que equilibra la respuesta a las urgencias diarias con los proyectos estratégicos de personas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach especializado en productividad para profesionales de Recursos Humanos con experiencia en la gestión del tiempo en entornos de alta demanda operativa. Tu misión es ayudarme a construir un sistema de gestión del tiempo que me permita responder a las urgencias del día a día de RRHH sin sacrificar los proyectos estratégicos de largo plazo que transforman la cultura y la organización.

Contexto de mi situación:
Soy [HR Manager / HRBP / Responsable de RRHH] en una empresa de [sector] con [número de empleados]. El equipo de RRHH es de [número de personas]. El principal problema de tiempo es que [las urgencias de reclutamiento activo me consumen toda la semana / las consultas y reclamaciones de empleados me interrumpen constantemente / los proyectos estratégicos de cultura o desarrollo siempre se posponen por lo urgente / gestiono demasiados procesos administrativos que podrían automatizarse].

Lo que necesito:

1. EL MAPA DE DEMANDAS DE TIEMPO EN RRHH
Define los tipos de demandas de tiempo que gestiona un profesional de RRHH y cómo clasificarlas según urgencia e importancia: urgente e importante (incidente laboral, baja médica sin cobertura, conflicto entre empleados, proceso de selección bloqueado), no urgente pero importante (proyectos de cultura, formación, revisión salarial, diseño del proceso de onboarding), urgente pero no importante (consultas administrativas que podrían resolverse con documentación, solicitudes de información que alguien del equipo puede resolver), y ni urgente ni importante (reuniones informales que no requieren al HR senior, informes sin uso definido). Para cada cuadrante define la estrategia de respuesta y qué porcentaje del tiempo semanal debería ir a cada uno.

2. GESTIONAR LAS INTERRUPCIONES DE EMPLEADOS Y MANAGERS
RRHH es el departamento al que todos acuden con sus problemas. Define el sistema para gestionar las demandas de empleados y managers sin estar disponible para todos a todas horas: cómo establecer un canal de consultas estructurado (formulario, ticket, email a una dirección específica) para que las consultas sean asíncronas por defecto, cuándo la consulta requiere atención inmediata y sincrónica (incidentes de seguridad, situaciones de acoso, riesgo laboral) versus cuándo puede resolverse en las próximas veinticuatro a cuarenta y ocho horas, y cómo comunicar la disponibilidad de RRHH al equipo sin generar la percepción de que somos inaccesibles.

3. PROTEGER EL TIEMPO DE PROYECTOS ESTRATÉGICOS
Los proyectos de transformación de RRHH (nuevo modelo de evaluación del desempeño, programa de desarrollo de liderazgo, estrategia de employer branding) nunca tienen fecha de entrega urgente y por eso nunca se hacen. Define la estrategia para proteger el tiempo de los proyectos estratégicos: cómo bloquear en el calendario dos a cuatro horas semanales exclusivamente para proyectos estratégicos, cómo conectar esos proyectos con objetivos medibles del negocio para que tengan la misma legitimidad que las urgencias del día, y cómo gestionar al directivo que dice que "siempre hay algo más urgente" y bloquea el tiempo estratégico de RRHH.

4. RECLUTAMIENTO: CÓMO GESTIONAR MÚLTIPLES PROCESOS SIN PERDER CALIDAD
El reclutamiento activo puede devorar toda la semana de RRHH si no está bien estructurado. Define el sistema de gestión del tiempo en procesos de selección múltiples: cómo agrupar las actividades de reclutamiento en bloques (revisión de CVs en un bloque, llamadas de screening en otro, coordinación con managers en otro), qué parte del proceso puede delegar en los hiring managers sin perder la calidad, y cómo usar plantillas y automatización (ATS, plantillas de emails de seguimiento) para reducir el tiempo administrativo de cada proceso.

5. EL CIERRE MENSUAL DE RRHH: NÓMINA, INFORMES Y COMPLIANCE
El cierre mensual de RRHH es una presión recurrente que se gestiona mejor con un ritual estructurado. Define el checklist y el calendario de cierre mensual: qué tareas de nómina, contratos, altas y bajas, e informes de compliance hay que completar y en qué orden en los últimos cinco días del mes, cómo anticipar la carga del cierre bloqueando tiempo en el calendario con dos semanas de antelación, y qué tareas del cierre pueden delegarse o automatizarse para reducir el tiempo total del profesional de RRHH senior.

6. AUTOMATIZACIÓN Y HERRAMIENTAS: GANAR TIEMPO CON TECNOLOGÍA
Muchas tareas administrativas de RRHH son candidatas a automatización. Define las tres categorías de tareas que más tiempo consumen y que podrían automatizarse o simplificarse con tecnología: onboarding administrativo del nuevo empleado (contratos, alta en sistemas, acceso a herramientas), gestión de vacaciones y ausencias (solicitudes, aprobaciones, registro), y comunicaciones recurrentes de RRHH (recordatorios de formación, encuestas, comunicados de empresa). Para cada categoría indica qué herramientas o automatizaciones son recomendables y cuánto tiempo se puede recuperar.

Responde con un sistema concreto y accionable, con ejemplos de cómo estructurar la semana del profesional de RRHH y plantillas para los procesos más frecuentes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Gestionar el tiempo en RRHH para equilibrar urgencias operativas y proyectos estratégicos de personas',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión del tiempo del CFO: entre el cierre mensual y la estrategia',
                'description'      => 'Diseña el sistema de gestión del tiempo del director financiero para equilibrar las obligaciones operativas del ciclo contable con el trabajo estratégico de finanzas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach ejecutivo especializado en liderazgo financiero con experiencia asesorando a CFOs y directores financieros en empresas de mediana y gran capitalización. Tu misión es ayudarme a construir un sistema de gestión del tiempo que me permita liderar las finanzas estratégicas de la empresa sin que el ciclo de cierre mensual y las demandas operativas consuman toda mi capacidad de dirección.

Contexto de mi situación:
Soy [CFO / Director Financiero / Controller] en una empresa de [sector] con [facturación aproximada o número de empleados]. El equipo financiero tiene [número de personas]. El mayor problema de tiempo es que [el cierre mensual me absorbe durante dos semanas cada mes / las demandas de información del board y los inversores son impredecibles / el equipo me escala demasiadas decisiones que podrían resolver solos / no tengo tiempo para hacer planificación financiera estratégica].

Lo que necesito:

1. EL CICLO TEMPORAL DEL CFO: MENSUAL, TRIMESTRAL Y ANUAL
El CFO vive dentro de ciclos temporales predecibles que hay que planificar con anticipación. Define el mapa temporal completo: qué actividades ocurren en el cierre mensual (semana uno del mes siguiente: consolidación, ajustes, reporting), qué ocurre en el cierre trimestral (mayor profundidad, presentación al board, actualización del forecast), qué ocurre en el cierre anual (auditoría, memoria, planning del año siguiente) y qué actividades estratégicas deben ocurrir entre cierres (análisis de inversiones, evaluación de M&A, planificación de tesorería a largo plazo). Para cada ciclo, indica qué debe hacer el CFO personalmente y qué puede delegar con supervisión.

2. EL CIERRE MENSUAL: CÓMO REDUCIR EL TIEMPO SIN PERDER CALIDAD
Si el cierre mensual consume dos semanas cada mes, el CFO no puede hacer nada más durante ese tiempo. Define las estrategias para acelerar el cierre: estandarización del proceso de cierre con un checklist que el equipo sigue sin escalarlo al CFO, definición de un calendario de cierre con fechas límite por área (operaciones entrega los datos el día tres, consolidación está lista el día cinco, el CFO revisa del día cinco al siete), automatización de los informes de reporting más repetitivos (P&L, balance, cashflow en formato estándar), y qué nivel de materialidad permite al CFO firmar el cierre sin revisar cada línea.

3. PROTEGER EL TIEMPO ESTRATÉGICO: MÁS ALLÁ DEL REPORTING
Un CFO que solo cierra meses y reporta datos no está ejerciendo todo el valor que puede aportar. Define la estrategia para proteger el tiempo de finanzas estratégicas: cómo bloquear semanalmente cuatro a seis horas para análisis estratégico (modelado de escenarios, análisis de inversiones, revisión del plan a largo plazo), cómo gestionar las demandas de información del board y los inversores sin que sean imprevisibles (un calendario de comunicación predefinido reduce las solicitudes ad hoc), y qué tipo de análisis estratégico produce el mayor retorno de inversión de tiempo para el CFO (análisis de rentabilidad por producto, optimización del capital de trabajo, evaluación de oportunidades de M&A).

4. GESTIONAR LAS DEMANDAS DEL BOARD Y LOS INVERSORES
Las solicitudes de información del board y los inversores pueden aparecer en cualquier momento y son difíciles de rechazar. Define el sistema para gestionar estas demandas: cómo diseñar un paquete de información estándar que el board recibe mensualmente y que reduce las solicitudes ad hoc, cómo manejar la solicitud de información urgente sin dedicarle personalmente más tiempo del necesario (qué delega en el equipo, qué prepara el CFO personalmente), y cómo educar al board sobre el ciclo de disponibilidad de la información financiera para evitar solicitudes en momentos de máxima carga.

5. DELEGAR EN EL EQUIPO FINANCIERO SIN PERDER EL CONTROL
Un CFO que revisa cada número y aprueba cada decisión se convierte en el cuello de botella del departamento. Define el sistema de delegación eficiente en el equipo financiero: qué tipos de decisiones puede tomar el equipo sin necesidad de escalar (aprobación de gastos hasta un límite, decisiones de tesorería dentro del plan, ajustes contables de menor importancia), qué requiere la revisión del CFO pero no su tiempo completo (informes estándar que el CFO lee en quince minutos, análisis que el equipo prepara y el CFO valida), y qué requiere el tiempo y la atención profunda del CFO (decisiones de inversión, presentaciones al board, negociaciones financieras estratégicas).

6. EL RITMO DE COMUNICACIÓN INTERNA DEL CFO
El CFO se comunica con el CEO, el board, el equipo de dirección y el equipo financiero. Define el ritmo de comunicación eficiente: qué reuniones con el CEO son imprescindibles y con qué frecuencia, cómo estructurar la reunión semanal con el equipo financiero para que sea eficiente y no se convierta en un repaso de estado de todos los proyectos, y cómo comunicar proactivamente al equipo de dirección la situación financiera de la empresa sin que el CFO tenga que convocar una reunión cada vez que un dato cambia.

Incluye ejemplos de calendarios tipo para el cierre mensual, estructura de informes estándar que reducen las solicitudes ad hoc, y criterios de decisión para delegar sin perder el control financiero.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar el sistema de gestión del tiempo del CFO para equilibrar el ciclo contable y la estrategia financiera',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión del tiempo del abogado: facturar bien sin trabajar 80 horas semanales',
                'description'      => 'Diseña el sistema de gestión del tiempo del abogado para maximizar la facturación efectiva, reducir el trabajo no facturable y recuperar la calidad de vida profesional.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de productividad especializado en el sector legal con experiencia asesorando a abogados de firma y abogados internos que quieren mejorar su eficiencia sin sacrificar la calidad del trabajo. Tu misión es ayudarme a construir un sistema de gestión del tiempo que maximice mis horas facturables, reduzca el tiempo en tareas administrativas y no facturables, y me permita ejercer la abogacía con calidad y sostenibilidad.

Contexto de mi situación:
Soy [socio / asociado / abogado interno / abogado independiente] en [firma de abogados / empresa]. Mi especialidad es [área del derecho]. Mi estructura de trabajo incluye [facturación por horas / tarifa fija por asunto / combinación]. El mayor problema de tiempo es que [registro mal las horas y pierdo facturación / el trabajo no facturable (reuniones internas, desarrollo de negocio, formación) consume demasiado tiempo / los clientes me contactan a cualquier hora / no tengo límites claros entre vida laboral y personal].

Lo que necesito:

1. REGISTRO DE HORAS: EL SISTEMA QUE NO DUELE Y NO PIERDE FACTURACIÓN
La mayoría de los abogados que facturan por horas registran menos de lo que trabajan. Define el sistema de registro de horas que minimiza la pérdida: registro simultáneo a la tarea (no al final del día, que es cuando se pierden el cuarenta por ciento de las horas), qué herramienta o método usar para el registro en tiempo real (timer en el móvil, app de timetracking, hoja de registro por bloque de treinta minutos), cómo registrar los tiempos cortos que siempre se pierden (una llamada de diez minutos, una respuesta de email breve, una consulta de dos minutos), y cuándo hacer la revisión diaria del registro para completar lo que no se capturó al momento.

2. CLASIFICACIÓN DEL TIEMPO: FACTURABLE VERSUS NO FACTURABLE
El problema no es solo cuántas horas se trabajan sino cuántas son facturables. Define el sistema de clasificación y análisis del tiempo: qué tipos de trabajo son siempre facturables (trabajo para el cliente en el asunto: investigación, redacción, reuniones, llamadas), qué puede negociarse como facturable según el cliente y el asunto (coordinación interna del equipo que trabaja en el asunto, viaje para reunión del cliente), qué es claramente no facturable (desarrollo de negocio, formación, gestión interna, tiempo de administración), y cómo analizar semanalmente la ratio de horas facturables versus totales trabajadas para detectar ineficiencias.

3. ESTRUCTURA DE LA JORNADA: CUÁNDO HACER QUÉ
No todas las horas de trabajo son iguales en concentración y calidad. Define la estructura de jornada óptima para el abogado: mañanas para el trabajo de alta concentración que produce más valor (redacción de contratos, análisis jurídico complejo, preparación de argumentos), tardes para el trabajo de menor concentración (reuniones, llamadas, revisión de correo, coordinación con clientes), y cómo gestionar las urgencias que llegan a media mañana cuando estás en un bloque de concentración sin sacrificar la calidad del trabajo que estás haciendo.

4. GESTIÓN DE CLIENTES: DISPONIBILIDAD SIN ESCLAVITUD
El abogado que está disponible para el cliente a todas horas no es mejor que el que gestiona su disponibilidad con inteligencia. Define el sistema de gestión de la disponibilidad con clientes: cómo establecer canales y horarios de comunicación con el cliente desde el inicio del asunto (teléfono solo para urgencias reales, email con respuesta en veinticuatro horas como regla, reuniones programadas para avances no urgentes), cómo responder al cliente que exige respuesta inmediata sin crear dependencia insostenible, y cómo educar al cliente sobre qué es urgente de verdad (un plazo procesal que vence mañana) versus qué puede esperar veinticuatro horas.

5. EL TIEMPO NO FACTURABLE QUE SÍ IMPORTA: DESARROLLO DE NEGOCIO Y FORMACIÓN
El desarrollo de negocio y la formación son inversiones de tiempo que generan retorno a largo plazo. Define el sistema para gestionar este tiempo de forma estratégica: cuánto tiempo a la semana debe ir a desarrollo de negocio (para un asociado, para un socio), qué actividades de desarrollo de negocio producen más retorno por hora invertida (publicaciones, eventos focalizados, relaciones con clientes actuales versus eventos masivos), y cómo planificar el tiempo de formación continua sin que se convierta en un ideal que nunca se materializa.

6. LÍMITES Y SOSTENIBILIDAD: CÓMO TRABAJAR MENOS HORAS SIN GANAR MENOS
El mito del abogado que trabaja ochenta horas semanales destruye la salud y a largo plazo también la productividad y la calidad del trabajo. Define el sistema de límites sostenibles: cómo establecer un límite real de horas semanales (no el ideal sino el que puedo mantener durante un año sin quemarme), qué es lo primero que hay que eliminar para reducir horas sin perder facturación (trabajo no facturable mal gestionado, reuniones internas sin valor, tareas que el equipo podría hacer), y cómo comunicar los límites al cliente y al despacho sin parecer poco comprometido.

Proporciona ejemplos concretos con herramientas de registro de horas, plantillas de email para gestionar la disponibilidad con clientes, y el argumento que usar con el socio director cuando preguntan por qué no trabajas los sábados.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Optimizar el tiempo del abogado para maximizar horas facturables y recuperar sostenibilidad',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Time management del CSM: gestionar 50 cuentas sin perder de vista ninguna',
                'description'      => 'Diseña el sistema de gestión del tiempo del Customer Success Manager para atender una cartera amplia de cuentas con calidad y sin quemarse.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia en la optimización de la productividad de CSMs que gestionan carteras grandes de cuentas. Tu misión es ayudarme a construir un sistema de gestión del tiempo que me permita atender a mis cuentas con la calidad necesaria para retenerlas y expandirlas, sin que la amplitud de la cartera se convierta en una fuente de estrés constante y de cuentas que se pierden sin que me dé cuenta.

Contexto de mi situación:
Soy CSM y gestiono [número de cuentas] con un ARR gestionado de [importe aproximado]. Los contratos van de [rango de tamaño de ticket]. El principal problema de tiempo es que [no sé dónde centrar la energía / las cuentas más ruidosas acaparan todo mi tiempo y las silenciosas hacen churn sin aviso / el CRM no me ayuda a priorizar / el tiempo administrativo (resúmenes de reunión, actualizaciones de CRM) consume demasiado].

Lo que necesito:

1. SEGMENTACIÓN DE LA CARTERA: TIEMPO SEGÚN EL VALOR Y EL RIESGO
No todas las cuentas merecen la misma atención. Define el sistema de segmentación de la cartera que determina cuánto tiempo invertir en cada cliente: los criterios de clasificación (ARR, potencial de expansión, health score, tiempo hasta la renovación, nivel de adopción del producto), los tres o cuatro segmentos resultantes y el nivel de servicio que corresponde a cada uno (alta frecuencia de contacto proactivo, contacto regular mensual, contacto reactivo con monitorización de salud), y cuántas cuentas puede gestionar un CSM en cada segmento sin perder calidad.

2. EL SISTEMA DE MONITORIZACIÓN DE SALUD DE LA CARTERA
Si el CSM no tiene visibilidad del estado de toda la cartera, gestiona por urgencias y pierde cuentas en silencio. Define el sistema de monitorización de salud: qué métricas de salud monitoriza el CSM semanalmente para cada cuenta (uso del producto, tickets abiertos, NPS reciente, días hasta la renovación, último contacto), cómo automatizar la captura de estas señales en el CRM o en un dashboard para que la revisión sea rápida, y cómo hacer la revisión semanal de toda la cartera en treinta a cuarenta y cinco minutos (qué cuentas revisar en profundidad, cuáles solo hacer un escaneo rápido).

3. BLOQUES DE TIEMPO POR TIPO DE ACTIVIDAD
El CSM que trabaja de forma reactiva pierde la iniciativa. Define el sistema de bloques de tiempo semanales: bloque de outreach proactivo (contactar cuentas en riesgo o en expansión antes de que contacten ellas), bloque de preparación de reuniones (preparar las llamadas de la semana con los datos correctos), bloque de seguimiento post-reunión (actualizar el CRM, enviar el resumen acordado, registrar los próximos pasos), y bloque de trabajo interno (colaborar con producto, soporte y ventas sobre cuentas específicas). Para cada bloque indica la duración recomendada y en qué momento de la semana colocarlo.

4. PLANTILLAS Y AUTOMATIZACIÓN: RECUPERAR HORAS ADMINISTRATIVAS
El trabajo administrativo del CSM (actualizar el CRM, escribir resúmenes de reunión, preparar el QBR) puede consumir hasta el cuarenta por ciento del tiempo si no está bien sistematizado. Define las tres categorías de automatización y plantillas que más tiempo ahorran: plantillas de email para las comunicaciones más frecuentes (check-in proactivo, email de seguimiento de reunión, email de renovación próxima, alerta de salud), automatización del CRM (integración con calendario para capturar reuniones automáticamente, campos que se actualizan solos con datos de uso del producto), y plantilla de resumen de reunión de cliente que se completa en cinco minutos.

5. GESTIONAR LAS URGENCIAS SIN QUE DESTRUYAN EL PLAN
En una cartera grande, siempre hay una cuenta en crisis. Define el sistema para gestionar las urgencias sin que dominen la semana: cómo distinguir entre una urgencia real del cliente (un bug que bloquea su operativa, una amenaza de cancelación inminente) y una urgencia percibida (quieren saber cuándo sale una feature, quieren una reunión que podría ser un email), cuánto tiempo reservar a la semana para gestión de urgencias sin bloquear el plan (una o dos horas diarias), y cómo manejar al cliente que tiene urgencias permanentes con un protocolo de priorización que eduque al cliente sin deteriorar la relación.

6. PREVENIR EL BURNOUT DEL CSM: LÍMITES EN UNA CARTERA GRANDE
Gestionar cincuenta cuentas puede ser agotador si no hay un sistema claro. Define el sistema de límites sostenibles para el CSM: cómo medir si la cartera es demasiado grande para gestionarla con calidad (señales de alerta: cuentas que no has contactado en más de treinta días, renovaciones que llegan por sorpresa, NPS que desconoces), cómo comunicar al manager que la cartera supera la capacidad de atención de calidad (con datos, no con queja), y cómo diseñar la cobertura en vacaciones para que la cartera no sufra y el CSM pueda desconectarse realmente.

Incluye ejemplos concretos de plantillas de email, estructura del dashboard de salud de la cartera, y el sistema de revisión semanal de treinta minutos que cubre toda la cartera.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Gestionar el tiempo del CSM para atender una cartera amplia con calidad y sin quemarse',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestión del tiempo del freelance: horas vendidas vs horas invertidas',
                'description'      => 'Diseña el sistema de gestión del tiempo del freelance para maximizar las horas facturables, controlar el scope creep y recuperar la rentabilidad de cada proyecto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de negocio para freelancers con experiencia ayudando a profesionales independientes a recuperar el control de su tiempo y su rentabilidad. Tu misión es ayudarme a construir un sistema de gestión del tiempo que me permita conocer exactamente cuánto tiempo facturo versus cuánto tiempo invierto, detectar los proyectos y clientes que me quitan más de lo que me dan, y diseñar una jornada que me permita producir trabajo de calidad sin trabajar más horas de las que deberían.

Contexto de mi situación:
Soy freelance especializado en [área: diseño, desarrollo, redacción, consultoría, etc.]. Trabajo principalmente con [proyectos puntuales / retainers / combinación]. Mi tarifa es de [precio por hora o por proyecto]. El principal problema es que [acepto proyectos creyendo que tienen un alcance y luego me salen más largos de lo previsto / no registro bien el tiempo y al final del proyecto no sé si gané dinero / tengo clientes que consumen mucho tiempo fuera de lo contratado / alterno períodos de mucho trabajo con períodos de sequía porque no prospecto mientras ejecuto].

Lo que necesito:

1. EL REGISTRO DE TIEMPO COMO HERRAMIENTA DE NEGOCIO
El freelance que no registra el tiempo no tiene datos para tomar decisiones. Define el sistema mínimo de registro de tiempo que sea sostenible: qué herramienta usar (Toggl, Harvest, Clockify, u hoja de cálculo simple), cómo estructurar el registro por proyecto y cliente, qué categorías de tiempo registrar además del trabajo facturable (ventas y prospección, administración, formación, tiempo no facturable para el cliente), y cómo hacer el análisis mensual: rentabilidad por proyecto (horas reales versus horas presupuestadas), distribución del tiempo entre clientes, y ratio de horas facturables sobre el total de horas trabajadas.

2. PRESUPUESTAR CON PRECISIÓN: EVITAR EL PROYECTO QUE NUNCA TERMINA
La mayor causa de pérdida de rentabilidad del freelance es presupuestar mal. Define el sistema de estimación de tiempo para un proyecto: cómo desglosar el proyecto en tareas concretas y estimar cada una por separado, cómo añadir un buffer por tipo de proyecto (proyectos con muchos stakeholders necesitan más buffer que los proyectos independientes), cómo definir en el contrato qué incluye el precio acordado y qué activa una tarifa adicional (scope creep), y cómo gestionar la conversación con el cliente cuando el proyecto supera las horas presupuestadas y hay que explicar el desvío.

3. EL SCOPE CREEP: IDENTIFICARLO Y PONERLE PRECIO
El scope creep —el crecimiento no acordado del alcance del proyecto— es el enemigo número uno de la rentabilidad del freelance. Define el sistema para gestionar el scope creep: cómo identificar cuándo una solicitud del cliente está fuera del alcance original (frases que lo delatan: "¿y ya que estás...?", "solo una cosa más pequeña", "esto debería ser rápido"), cómo responder sin dañar la relación ("sí, lo añado, esto tiene un coste adicional de X euros o X horas"), y cómo prevenir el scope creep desde el principio con un contrato que define explícitamente qué está incluido y qué no.

4. LA JORNADA DEL FREELANCE: ESTRUCTURA SIN PERDER FLEXIBILIDAD
La libertad del freelance puede convertirse en su mayor trampa si no hay estructura. Define la estructura de jornada que equilibra la producción facturable, la prospección de nuevos clientes y la gestión del negocio: cuántas horas al día son razonables de trabajo facturable de calidad (seis a siete para la mayoría, menos si el trabajo requiere alta concentración), cuándo en el día hacer el trabajo de mayor dificultad versus el administrativo, y cómo separar los días de ejecución de los días de prospección y desarrollo de negocio para evitar el ciclo de trabajo-sequía-trabajo.

5. LA TRAMPA DE LA DISPONIBILIDAD PERMANENTE
El cliente que paga a un freelance tiende a tratarle como un empleado a tiempo completo. Define el sistema de límites de disponibilidad: cómo establecer las reglas de comunicación desde el primer contacto con el cliente (horarios de respuesta, canales de comunicación, tiempo máximo de respuesta), cómo manejar al cliente que envía mensajes de WhatsApp a las diez de la noche esperando respuesta inmediata, y cómo fijar el precio de la disponibilidad ampliada si el cliente necesita un nivel de respuesta más rápido del estándar.

6. REVISIÓN MENSUAL DE RENTABILIDAD: LA REUNIÓN CON TU NEGOCIO
El freelance que no revisa sus números no controla su negocio. Define el ritual de revisión mensual de treinta minutos: qué datos revisar (facturación total, tiempo trabajado por cliente y proyecto, ratio de horas facturables, deudores pendientes de cobro), qué decisiones tomar a partir de los datos (qué cliente es poco rentable por hora invertida, qué tipo de proyecto da mejores márgenes, si la tarifa actual cubre los costes y el objetivo de ingresos), y cómo usar esos datos para tomar decisiones en el siguiente mes (subir tarifa, rechazar un tipo de proyecto, priorizar la prospección de un tipo de cliente).

Escribe con tono práctico y directo. Proporciona plantillas de registro de tiempo, modelos de contrato con cláusula de scope creep, y el mensaje que enviar al cliente cuando hay que cobrar por trabajo adicional.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Gestionar el tiempo del freelance para maximizar la rentabilidad y controlar el scope creep',
                'vote_score'       => 46,
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
