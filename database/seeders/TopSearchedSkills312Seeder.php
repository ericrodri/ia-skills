<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills312Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Liderazgo remoto de equipos de marketing y creativos',
                'description'      => 'Aprende a liderar equipos de marketing y creativos distribuidos geográficamente: comunicación asíncrona efectiva, rituales de cultura virtual, gestión del rendimiento a distancia y cómo mantener la energía creativa del equipo cuando no comparten espacio físico. Construye un equipo remoto de alto rendimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Marketing con ocho años de experiencia liderando equipos creativos completamente remotos y distribuidos en múltiples zonas horarias. Has gestionado equipos de entre cinco y veinticinco personas entre diseñadores, copywriters, gestores de redes sociales y analistas en Europa, América Latina y Asia. Tu objetivo es enseñarme a liderar con eficacia un equipo de marketing remoto.

CONTEXTO DEL EQUIPO DE MARKETING REMOTO
Liderar equipos creativos en remoto presenta desafíos únicos que no existen en entornos de oficina: la creatividad se nutre de la energía colectiva y el intercambio informal de ideas, los proyectos creativos requieren iteraciones rápidas y feedback en tiempo real, y la distancia puede hacer que los miembros del equipo se sientan aislados y desconectados del propósito. Necesito estrategias concretas para superar estas barreras.

PARTE 1 — COMUNICACIÓN ASÍNCRONA EN EQUIPOS CREATIVOS
Diseña el sistema de comunicación para un equipo de marketing remoto:
- Principio de asincronía por defecto: por qué la mayoría de la comunicación en un equipo remoto debe ser escrita y asíncrona, con reuniones síncronas solo para lo que realmente lo requiere
- Stack de comunicación para marketing remoto: Slack para comunicación en tiempo real, Loom para actualizaciones de video asíncronas, Notion o Confluence para documentación, Figma para revisión de creatividades
- Normas de respuesta esperada: cuándo se espera respuesta en menos de dos horas, cuándo en menos de 24 horas y cuándo es aceptable esperar hasta el siguiente día laborable según el tipo de mensaje y canal
- Cómo compartir contexto en briefs escritos para que el equipo creativo pueda trabajar de forma autónoma sin necesidad de constantes aclaraciones síncronas
- Feedback creativo escrito: cómo dar feedback a diseños, copys y campañas de forma estructurada y constructiva en comentarios de Figma, Notion o documentos compartidos

PARTE 2 — RITUALES DE EQUIPO Y CULTURA VIRTUAL
Crea una cultura de equipo sólida sin espacio físico compartido:
- Kick-off de sprint remoto: cómo iniciar cada sprint de dos semanas con energía y alineación a través de una sesión de vídeo de 45 minutos con agenda estructurada
- Daily asíncrono: en lugar de una reunión diaria, cada miembro del equipo publica su actualización en Slack antes de las 10 de la mañana (qué hice ayer, qué hago hoy, bloqueantes)
- Retro virtual mensual: cómo facilitar una retrospectiva de equipo efectiva en remoto usando herramientas como Miro o FigJam con dinámicas de participación anónima
- Momentos de conexión humana: channels de Slack de hobbies, café virtual quincenal de 15 minutos sin agenda de trabajo, celebraciones de victorias del equipo, cumpleaños y logros personales
- Onboarding remoto para nuevos miembros del equipo de marketing: cómo integrar a una persona nueva en la cultura y los proyectos cuando no pueden conocer al equipo en persona

PARTE 3 — GESTIÓN DEL RENDIMIENTO EN REMOTO
Evalúa y mejora el rendimiento sin visibilidad directa:
- Output-based management: cómo pasar de medir presencia y actividad a medir resultados y entregas — los criterios claros de éxito por rol que sustituyen a la vigilancia
- OKRs trimestrales para el equipo de marketing: cómo alinear el trabajo de cada miembro con los objetivos del equipo y de la empresa, revisables cada dos semanas
- One-on-ones semanales en remoto: estructura de 30 minutos con el orden del día fijo (estado de proyectos, bloqueantes, desarrollo profesional, feedback bidireccional)
- Cómo detectar señales de bajo rendimiento o desconexión en un equipo remoto: patrones de comunicación, calidad de entregables, participación en reuniones
- Conversaciones difíciles en remoto: cómo tener una conversación de feedback negativo o corrección de rumbo de forma empática y efectiva en una videollamada

PARTE 4 — CREATIVIDAD Y COLABORACIÓN DISTRIBUIDA
Mantén la energía creativa en un equipo disperso:
- Brainstorming remoto efectivo: herramientas y dinámicas para sesiones de ideación virtuales que produzcan tantas ideas como las presenciales (FigJam, Miro, Mentimeter, round-robin asíncrono)
- Design critiques virtuales: cómo estructurar sesiones de revisión de creatividades que sean constructivas, respetuosas y eficientes en 60 minutos de videollamada
- Documentación de la voz de marca y guías de estilo: por qué en un equipo remoto la documentación de criterios creativos es crítica para mantener la consistencia sin supervisión constante
- Cómo gestionar proyectos con múltiples revisiones: sistema de versionado en Figma, flujos de aprobación claros y criterios de cuándo una revisión se hace de forma síncrona vs. asíncrona

PARTE 5 — BIENESTAR Y PREVENCIÓN DEL BURNOUT EN REMOTO
Cuida la salud mental y física del equipo:
- Señales de burnout en equipos remotos: patrones que identifican agotamiento antes de que se convierta en crisis (cambios en comunicación, calidad del trabajo, disponibilidad)
- Política de desconexión real: cómo asegurarte de que el equipo tiene límites claros entre trabajo y vida personal cuando trabajan desde casa
- Tiempo de enfoque protegido: cómo implementar políticas de "no meeting days" o bloques de trabajo profundo que protejan el tiempo de producción creativa
- Flexibilidad de horario para equipos con múltiples zonas horarias: cómo establecer las horas de solapamiento mínimas necesarias y dejar el resto del tiempo flexible

FORMATO DE ENTREGA
1. Stack de comunicación completo para equipo de marketing remoto: herramientas, canales y normas de uso
2. Plantilla de daily asíncrono en Slack: formato, hora de publicación y protocolo de respuesta
3. Agenda de one-on-one semanal de 30 minutos con preguntas guía por sección
4. Guía de onboarding remoto de 30 días para nuevos miembros del equipo de marketing
5. Checklist de bienestar del equipo remoto: indicadores a revisar en la retrospectiva mensual
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Gestión y liderazgo de equipos creativos distribuidos',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Gestión de equipos de desarrollo distribuidos globalmente',
                'description'      => 'Domina las técnicas de liderazgo para equipos de ingeniería distribuidos en múltiples países y zonas horarias: comunicación técnica asíncrona, ceremonies remotas efectivas, código review distribuido, gestión de la deuda técnica en equipos dispersos y construcción de confianza con ingenieros que nunca has conocido en persona.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Engineering Manager o CTO con experiencia de más de diez años gestionando equipos de desarrollo completamente distribuidos en múltiples países. Has coordinado ingenieros en Europa, América Latina, India y Sudeste Asiático, gestionando diferencias de hasta doce horas entre los miembros del equipo. Tu objetivo es enseñarme a liderar un equipo de ingeniería distribuido de alto rendimiento.

CONTEXTO DEL EQUIPO DISTRIBUIDO
Los equipos de ingeniería distribuidos enfrentan desafíos únicos: las decisiones técnicas requieren discusión y contexto que se pierde en la comunicación asíncrona, el code review puede ser un cuello de botella entre zonas horarias, la deuda técnica es más difícil de gestionar cuando el equipo no comparte el mismo contexto y la construcción de confianza es más lenta sin interacción presencial.

PARTE 1 — INGENIERÍA DISTRIBUIDA: PRINCIPIOS FUNDAMENTALES
Establece los fundamentos del equipo de desarrollo remoto:
- Documentation-first culture: por qué en un equipo distribuido la documentación no es opcional — Architecture Decision Records (ADRs), READMEs exhaustivos, runbooks de operaciones y guías de contribución
- Asynchronous-first engineering: cómo estructurar el trabajo de desarrollo para que los ingenieros en distintas zonas horarias puedan trabajar de forma independiente sin bloqueos constantes
- Working agreements del equipo distribuido: acuerdos explícitos sobre horarios de solapamiento, tiempo máximo de respuesta por tipo de comunicación, protocolo de escalación de bloqueantes
- Trunk-based development y feature flags: cómo las prácticas de integración continua reducen los conflictos de merge y los problemas de coordinación entre ingenieros distribuidos

PARTE 2 — CEREMONIAS ÁGILES EN EQUIPOS DISTRIBUIDOS
Adapta las ceremonias de Scrum a la distribución geográfica:
- Sprint planning remoto efectivo: cómo preparar el contexto antes de la reunión para que el tiempo síncrono se use solo en discusión y decisión, no en presentación
- Daily standup asíncrono: uso de herramientas como Geekbot, Standuply o un canal de Slack con formato estructurado para eliminar la reunión diaria obligatoria y sus problemas de zona horaria
- Sprint review remota: cómo demostrar el trabajo completado a stakeholders distribuidos con demos grabadas + sesión de Q&A en vivo para quien pueda asistir
- Retrospectiva distribuida: dinámicas para retrospectivas síncronas que respeten las zonas horarias (rotating meeting times) y alternativas asíncronas con FigJam o Parabol

PARTE 3 — CODE REVIEW Y COLABORACIÓN TÉCNICA DISTRIBUIDA
Optimiza el proceso técnico para equipos distribuidos:
- Asynchronous code review: cómo estructurar los pull requests para que el revisor tenga todo el contexto necesario sin preguntas de seguimiento (descripción detallada, screenshots, vídeo Loom de demostración para cambios complejos)
- SLAs de code review: establecer que cada PR debe recibir un primer review en menos de 24 horas hábiles, con priorización clara de PRs bloqueantes
- Pair programming remoto: cuándo vale la pena hacer pair programming síncrono (onboarding, depuración de bugs complejos, decisiones de arquitectura) y cómo hacerlo efectivamente con VS Code Live Share o Tuple
- Architecture review asíncrono: cómo proponer y revisar cambios arquitectónicos importantes usando RFC (Request for Comments) documentos que permiten feedback asíncrono antes de la implementación

PARTE 4 — CONSTRUCCIÓN DE CONFIANZA Y COHESIÓN DE EQUIPO
Crea cultura de equipo sin espacio físico:
- Conocimiento interpersonal distribuido: cómo construir la confianza y el conocimiento mutuo que en oficina surge naturalmente de conversaciones informales (user manual personal, pairing rotativo, coffee chats aleatorios)
- Offsite anual del equipo: por qué invertir en un encuentro presencial anual de toda la empresa es el mejor gasto de team building para equipos distribuidos — cómo planificarlo
- Celebraciones en remoto: cómo celebrar victorias del equipo, lanzamientos y logros individuales de forma que se sientan genuinos y no forzados
- Gestión de conflictos técnicos en remoto: cómo resolver desacuerdos técnicos entre ingenieros que no se conocen en persona de forma constructiva y sin escalar a problemas de relación

PARTE 5 — PRODUCTIVIDAD Y BIENESTAR DEL EQUIPO TÉCNICO REMOTO
Optimiza la productividad individual y colectiva:
- Tiempo de enfoque profundo protegido: cómo implementar políticas de "no meeting time" para los ingenieros y qué métricas usar para medir el tiempo de desarrollo real vs. tiempo en reuniones
- Métricas de salud del equipo distribuido: DORA metrics (deployment frequency, lead time for changes, change failure rate, time to restore service) como medida objetiva de la efectividad del equipo
- Ergonomía y setup remoto: cómo la empresa puede apoyar a los ingenieros a tener un entorno de trabajo productivo y ergonómicamente correcto desde casa
- Señales de desconexión y burnout en ingenieros remotos: caída en la calidad del código, disminución de la participación en code reviews, respuestas más cortas en la comunicación escrita

FORMATO DE ENTREGA
1. Working agreements template para equipos de ingeniería distribuidos: todas las decisiones que el equipo debe tomar explícitamente al formarse
2. Checklist de un pull request ideal para equipos distribuidos: qué debe incluir la descripción, tests y documentación
3. Agenda de sprint planning remoto de dos horas con tareas de preparación pre-reunión
4. Guía de onboarding remoto para ingenieros: semana a semana durante los primeros 30 días
5. DORA metrics dashboard: cómo implementar el seguimiento de las cuatro métricas clave de ingeniería en tu stack de DevOps
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Liderazgo técnico de equipos de ingeniería distribuidos globalmente',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Dirección de equipos de diseño en entornos completamente remotos',
                'description'      => 'Aprende a dirigir un equipo de diseño UX/UI distribuido: cómo mantener la coherencia visual y de experiencia cuando los diseñadores trabajan de forma independiente, gestión del sistema de diseño en remoto, critique sessions virtuales efectivas y cómo construir la confianza creativa necesaria para que el equipo tome decisiones de diseño autónomas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Design Director con experiencia liderando equipos de diseño UX/UI completamente remotos en agencias de producto digital y startups de crecimiento rápido. Has gestionado entre cuatro y veinte diseñadores distribuidos entre Europa, América Latina y Estados Unidos. Tu objetivo es enseñarme a dirigir un equipo de diseño remoto que produzca trabajo de alta calidad de forma consistente.

CONTEXTO DEL EQUIPO DE DISEÑO REMOTO
Liderar un equipo de diseño en remoto presenta desafíos específicos de la disciplina creativa: la coherencia visual es crítica pero difícil de mantener cuando los diseñadores trabajan de forma independiente, el feedback creativo requiere conversación y contexto que se puede perder en los comentarios escritos, y la cultura de diseño — que incluye valores estéticos, principios de experiencia de usuario y criterios de calidad — es difícil de transmitir sin la proximidad física.

PARTE 1 — SISTEMA DE DISEÑO COMO INFRAESTRUCTURA DE TRABAJO REMOTO
El sistema de diseño es la columna vertebral del equipo distribuido:
- Por qué el sistema de diseño es más crítico en remoto que en presencial: cuando los diseñadores no comparten contexto informal del día a día, la documentación de las decisiones de diseño evita inconsistencias y reinvención constante
- Estructura del sistema de diseño para equipos remotos: librería de componentes en Figma, documentación de principios de diseño en Notion, guía de voz y tono, tokens de diseño y su gestión
- Proceso de contribución al sistema de diseño en equipo distribuido: cómo proponer nuevos componentes, quién revisa y aprueba las adiciones, cómo se comunican los cambios al equipo
- System design reviews asíncronos: cómo revisar propuestas de nuevos patrones o modificaciones del sistema de forma asíncrona con FigJam y comentarios estructurados en Figma

PARTE 2 — DESIGN CRITIQUE VIRTUAL EFECTIVA
Transforma las critique sessions en experiencias valiosas en remoto:
- Estructura de la critique virtual de 60 minutos: presentación del contexto por el diseñador (5 minutos), tiempo de revisión silenciosa individual con comentarios en Figma (15 minutos), ronda de feedback estructurado por participante (30 minutos), síntesis y próximos pasos (10 minutos)
- Normas de la critique virtual: cómo dar feedback específico y accionable en lugar de opiniones vagas, regla de justificar todo comentario con el principio de diseño o el dato de usuario que lo respalda
- Critique asíncrona para decisiones de bajo riesgo: cuándo una critique síncrona es necesaria y cuándo basta con una ronda de comentarios en Figma con plazo de 48 horas
- Gestión de voces dominantes en la critique virtual: cómo facilitar que todos los miembros del equipo participen con igual peso independientemente de su antigüedad o carácter

PARTE 3 — GESTIÓN DEL TRABAJO CREATIVO EN REMOTO
Coordina proyectos de diseño complejos de forma distribuida:
- Briefs de diseño exhaustivos: qué información debe incluir un brief para que el diseñador pueda trabajar de forma autónoma sin constantes preguntas (contexto del problema, usuario objetivo, métricas de éxito, restricciones, referencias visuales, entregables y plazos)
- Check-ins de progreso asíncronos: en lugar de reuniones de seguimiento, cómo el diseñador comparte actualizaciones de progreso con capturas o videos cortos en Slack o Loom
- Gestión de dependencias de diseño con desarrollo: cómo comunicar el estado de las especificaciones de diseño al equipo de desarrollo cuando no están en el mismo espacio físico
- Cómo manejar el feedback del cliente o stakeholder en remoto para que el diseñador no quede en medio de conversaciones contradictorias sin soporte del Director

PARTE 4 — CULTURA CREATIVA Y CRECIMIENTO EN EQUIPOS REMOTOS
Construye una identidad creativa colectiva sin oficina:
- Inspiración colectiva remota: cómo crear rituales de compartición de referencias visuales, tendencias y proyectos que inspiren al equipo (channel de inspiración en Slack, sesión mensual de "Qué estamos viendo")
- Feedback de crecimiento y desarrollo para diseñadores en remoto: cómo dar feedback de carrera en one-on-ones que aborde la dimensión artística y la técnica de forma constructiva
- Exposición al trabajo de otros equipos: cómo asegurarse de que los diseñadores en remoto tienen visibilidad del trabajo de toda la empresa (demos de producto, all-hands, documentación de proyectos)
- Mentoring remoto: cómo estructurar una relación de mentoría entre un diseñador senior y un junior cuando trabajan en distintas ciudades o países

PARTE 5 — HERRAMIENTAS Y PROCESOS PARA DISEÑO REMOTO
Stack tecnológico para equipos de diseño distribuidos:
- Herramientas de diseño colaborativo: Figma como plataforma central, sus funcionalidades de colaboración en tiempo real, comentarios estructurados y gestión de versiones
- Handoff a desarrollo en remoto: Figma Dev Mode, Zeplin, o Storybook como puentes entre diseño e ingeniería cuando no comparten espacio
- Gestión de proyectos de diseño: cómo usar Linear, Notion o Jira para gestionar el backlog de diseño con visibilidad para todo el equipo
- User research remota: cómo organizar y documentar investigación de usuarios de forma colaborativa para que todos los diseñadores del equipo accedan y aprendan de los hallazgos

FORMATO DE ENTREGA
1. Plantilla de brief de diseño completo para proyectos remotos con todas las secciones necesarias
2. Guía de design critique virtual: reglas de participación, estructura de la sesión y plantilla de feedback
3. Sistema de contribución al design system para equipos distribuidos: proceso, criterios de aprobación y comunicación de cambios
4. Plan de onboarding de diseñador remoto: primeras cuatro semanas con hitos claros y mentoring estructurado
5. Stack de herramientas recomendado para equipos de diseño remotos con casos de uso de cada herramienta
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Gestión y dirección de equipos de diseño UX/UI en remoto',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Liderazgo de fuerza de ventas remota de alto rendimiento',
                'description'      => 'Aprende a liderar y motivar equipos de ventas completamente remotos: cómo mantener la energía y competitividad sin la presión natural de la sala de ventas, gestión del pipeline de forma distribuida, coaching comercial virtual efectivo y construcción de una cultura de ventas sólida en entornos sin espacio físico compartido.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Ventas con experiencia liderando equipos comerciales remotos en empresas SaaS B2B y de servicios profesionales. Has construido y escalado equipos de ventas completamente distribuidos de entre cinco y treinta comerciales en mercados de España, México, Colombia y Argentina. Tu objetivo es enseñarme a liderar un equipo de ventas remoto de alto rendimiento.

CONTEXTO DEL LIDERAZGO COMERCIAL REMOTO
Los equipos de ventas presentan desafíos especiales en remoto: la energía competitiva de la sala de ventas desaparece, el coaching comercial requiere observar interacciones con clientes que no siempre son visibles en remoto, la motivación y el orgullo de equipo son más difíciles de mantener, y los comerciales pueden sentirse aislados sin el apoyo natural de los compañeros. Necesito estrategias específicas para este contexto.

PARTE 1 — ESTRUCTURA Y COMUNICACIÓN DEL EQUIPO DE VENTAS REMOTO
Diseña el sistema operativo del equipo comercial distribuido:
- Reunión de pipeline semanal remota: 60 minutos de revisión de pipeline con todos los comerciales — cómo estructurarla para que sea valiosa y no una sesión de reporte burocrático
- Daily de ventas asíncrono: actualización diaria en Slack con tres datos (deals avanzados ayer, actividades del día, bloqueantes) que crea visibilidad sin reunión diaria
- CRM como sistema de verdad: cómo asegurarte de que el CRM (Salesforce, HubSpot) está actualizado diariamente por todos los comerciales y es la fuente de información para todas las decisiones
- Protocolos de escalación en remoto: cuándo un comercial debe escalar a su manager una situación con un cliente potencial y cómo hacerlo de forma ágil sin necesitar una reunión síncrona

PARTE 2 — COACHING COMERCIAL VIRTUAL
Desarrolla las habilidades de tu equipo sin presencia física:
- Call recording y análisis: cómo usar herramientas como Gong, Chorus o Wingman para grabar y analizar llamadas de ventas — permite coaching basado en evidencia real sin acompañar las llamadas
- Sesiones de coaching individual semanales de 30 minutos: estructura con revisión de una llamada grabada, feedback específico y desarrollo de una habilidad concreta
- Role-playing virtual: cómo practicar objeciones, demos y presentaciones en sesiones síncronas cortas de 20 minutos usando el modelo de práctica deliberada
- Peer coaching entre comerciales: cómo estructurar el intercambio de mejores prácticas entre los miembros del equipo para que se conviertan en una fuente de aprendizaje mutuo

PARTE 3 — MOTIVACIÓN Y CULTURA EN VENTAS REMOTA
Mantén la energía competitiva sin sala de ventas:
- Visibilidad de resultados en tiempo real: tablero de métricas en Slack o en pantalla compartida que muestra el progreso de cada comercial hacia su cuota — el equivalente digital del marcador en la sala de ventas
- Competiciones y gamificación remota: cómo organizar challenges comerciales de corta duración (una semana) que creen competitividad sana y energía de equipo
- Celebraciones de victorias en remoto: cómo celebrar deals cerrados de forma que se sienta genuino y motivador para todo el equipo (canal de Slack dedicado a victorias, reconocimiento público en el all-hands semanal)
- One-on-ones de desarrollo de carrera: sesión mensual separada del coaching operativo para hablar de aspiraciones de carrera, desarrollo de habilidades y plan de crecimiento del comercial

PARTE 4 — ONBOARDING DE COMERCIALES EN REMOTO
Integra y forma a nuevos comerciales de forma distribuida:
- Ramping plan de 90 días para comerciales remotos: hitos claros por semana (conocimiento del producto, proceso de ventas, primeras llamadas acompañadas, primera cuota parcial)
- Buddy system: asignar un comercial experimentado como compañero del nuevo durante los primeros 30 días para resolver dudas rápidas sin depender del manager
- Formación de producto remota: cómo diseñar un programa de formación de producto en video (Loom, Notion) que el comercial pueda consumir de forma autónoma y asíncrona
- Primera semana de onboarding remoto: agenda hora a hora de los primeros cinco días para que el nuevo comercial se sienta bienvenido, orientado y productivo desde el primer día

PARTE 5 — MÉTRICAS Y GESTIÓN DEL RENDIMIENTO COMERCIAL REMOTO
Gestiona el rendimiento sin visibilidad directa:
- Métricas de actividad vs. métricas de resultado: en remoto es fácil caer en el error de medir actividades (número de llamadas, emails enviados) en lugar de resultados — cómo encontrar el equilibrio correcto
- Pipeline health indicators: métricas que indican la salud futura del pipeline antes de que se vean en los resultados de cuota (edad de las oportunidades, ratio de avance por etapa, forecast accuracy)
- Performance improvement plan en remoto: cómo gestionar un comercial que no está alcanzando sus objetivos de forma empática, estructurada y con seguimiento efectivo a distancia
- Reconocimiento y consecuencias en remoto: cómo el equipo directivo puede reforzar positiva y negativamente los comportamientos deseados cuando no hay presencia física

FORMATO DE ENTREGA
1. Plantilla de reunión de pipeline semanal remota: agenda, datos necesarios y protocolo de participación
2. Ramping plan de 90 días para comerciales remotos con hitos semanales y criterios de éxito
3. Checklist de coaching basado en grabación de llamadas: las diez dimensiones que analizar en cada sesión
4. Sistema de visibilidad de resultados en Slack: configuración del channel de victorias y marcador de cuota
5. One-on-one template mensual de desarrollo de carrera para comerciales remotos
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construcción y liderazgo de equipos comerciales remotos de alto rendimiento',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product leadership en equipos de producto remotos y distribuidos',
                'description'      => 'Aprende a liderar la función de producto en equipos distribuidos: cómo mantener la visión y el contexto de producto alineados entre PMs, diseñadores e ingenieros remotos, facilitar product discovery en remoto, gestionar el roadmap de forma transparente y construir una cultura de producto orientada al impacto sin proximidad física.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief Product Officer o VP of Product con experiencia liderando organizaciones de producto completamente distribuidas. Has construido y escalado equipos de producto — con Product Managers, diseñadores y analistas — en múltiples países, coordinando con ingeniería y negocio a distancia. Tu objetivo es enseñarme a ejercer el liderazgo de producto de forma efectiva en un entorno remoto.

CONTEXTO DEL LIDERAZGO DE PRODUCTO REMOTO
El liderazgo de producto requiere transmitir visión, contexto y criterio de priorización a personas que deben tomar docenas de decisiones al día. En remoto, esto es especialmente desafiante porque el contexto se transmite principalmente de forma escrita, las discusiones de estrategia son más difíciles de facilitar en vídeollamada y el alineamiento entre equipos requiere esfuerzo explícito que en la oficina ocurre de forma natural y casual.

PARTE 1 — VISIÓN Y ESTRATEGIA DE PRODUCTO EN REMOTO
Transmite y mantiene alineada la visión del producto:
- Product vision document: cómo escribir y mantener actualizado un documento de visión del producto que sirva como norte para todas las decisiones del equipo distribuido (problema que resolvemos, para quién, por qué importa, cómo el mundo es mejor cuando tenemos éxito)
- Product strategy memo: cómo comunicar los cambios de estrategia o las decisiones difíciles de priorización a través de un documento escrito que invite al feedback antes de ser definitivo — el modelo de comunicación escrita de Amazon
- All-hands de producto mensual: cómo organizar una reunión mensual de 60 minutos para toda la organización de producto con actualizaciones de métricas, aprendizajes clave y preguntas del equipo
- Contexto de usuario en remoto: cómo asegurarse de que todos los PMs y diseñadores del equipo tienen acceso regular a investigación de usuarios real, incluso cuando no pueden hacer guerrilla research presencial

PARTE 2 — PRODUCT DISCOVERY EN EQUIPOS DISTRIBUIDOS
Organiza el proceso de descubrimiento a distancia:
- Remote design sprints: cómo facilitar un design sprint de cinco días completamente remoto usando Miro, FigJam y Zoom con prototipos de baja fidelidad probados con usuarios reales
- User interviews remotas: cómo organizar, moderar y sintetizar entrevistas de usuario cuando el investigador, el observador y el usuario están en distintas ciudades o países
- Async research synthesis: cómo crear un sistema compartido de hallazgos de usuario (en Notion o Confluence) que todos los PMs y diseñadores puedan consultar y enriquecer de forma continua
- Product sense en equipos remotos: cómo transmitir el criterio de diseño de producto y la sensibilidad de usuario a PMs junior que no pueden aprender por ósmosis en una oficina

PARTE 3 — ROADMAP Y PRIORIZACIÓN DISTRIBUIDOS
Gestiona el roadmap con transparencia en remoto:
- Roadmap as a living document: cómo mantener un roadmap en Notion o Linear que sea accesible para toda la organización (ingeniería, diseño, marketing, ventas) con el contexto de por qué cada iniciativa está priorizada
- Priorización remota con múltiples stakeholders: cómo facilitar sesiones de priorización con líderes de distintos departamentos que no están en el mismo lugar usando voting asíncrono con contexto
- Ceremony de roadmap trimestral remota: cómo organizar la revisión y actualización del roadmap trimestral con todo el equipo de liderazgo, desde la preparación asíncrona hasta la sesión síncrona de decisión
- Comunicación de cambios de prioridad en remoto: cómo comunicar que una iniciativa se retrasa o se cancela de forma que el equipo entienda el razonamiento y mantenga la confianza en el proceso de decisión

PARTE 4 — LIDERAZGO DE PRODUCT MANAGERS EN REMOTO
Desarrolla y gestiona PMs distribuidos:
- One-on-ones semanales de Product Manager: estructura de 45 minutos con revisión de los principales proyectos, bloqueantes, desarrollo de competencias de PM y feedback bidireccional
- PM reviews remotas: cómo revisar y dar feedback sobre el trabajo de producto (documentos de estrategia, user stories, análisis de métricas) de forma asíncrona con comentarios estructurados
- Calibración de criterio de producto entre PMs distribuidos: cómo alinear el juicio de producto de varios PMs que trabajan en distintos squads y no comparten contexto diario (product principles documentados, revisiones cruzadas de decisiones)
- Crecimiento de carrera de PMs remotos: cómo crear oportunidades de visibilidad y desarrollo para los PMs del equipo cuando no hay presencia física que los exponga naturalmente a otros líderes de la organización

PARTE 5 — MÉTRICAS Y CULTURA DE IMPACTO EN REMOTO
Construye un equipo orientado a resultados:
- North Star Metric y métricas de equipo: cómo definir y comunicar las métricas que importan de forma que cada PM entienda cómo su trabajo contribuye al resultado de negocio
- Product review mensual distribuida: revisión de métricas de producto con todo el equipo de liderazgo — cómo estructurarla para que sea honesta, aprendiente y orientada a la acción
- Cultura de experimentación en remoto: cómo construir un sistema de hipótesis, experimentos y aprendizajes que funcione cuando los equipos no comparten espacio y el contexto de cada experimento debe documentarse exhaustivamente
- Accountability sin microgestión: cómo los product leaders en remoto pueden saber que sus equipos están tomando buenas decisiones sin vigilar el proceso constantemente

FORMATO DE ENTREGA
1. Plantilla de product vision document con secciones obligatorias y ejemplos de empresas de referencia
2. Agenda de all-hands de producto mensual remoto de 60 minutos con dinámicas de participación
3. Sistema de product discovery remoto: proceso semana a semana desde la hipótesis hasta la decisión de construir
4. Roadmap template para equipos distribuidos con columnas de contexto, prioridad, estado y responsable
5. Framework de one-on-one para Product Managers: preguntas por dimensión (estrategia, ejecución, desarrollo de carrera, bienestar)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Liderazgo de la organización de producto en entornos distribuidos',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Cultura organizacional y RRHH para empresas completamente remotas',
                'description'      => 'Diseña y gestiona la cultura de una organización completamente remota: rituales de equipo virtuales, políticas de trabajo asíncrono, procesos de evaluación de desempeño distribuidos, bienestar de empleados remotos y construcción de pertenencia sin espacio físico compartido. Aprende a hacer que las personas se sientan parte de algo más grande que su pantalla.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief People Officer o Head of Culture con experiencia construyendo la cultura y los sistemas de RRHH de empresas completamente remotas desde sus primeras fases hasta la madurez. Has trabajado en empresas nativas remotas con entre veinte y doscientas personas distribuidas en más de diez países. Tu objetivo es enseñarme a construir una cultura organizacional sólida y procesos de People escalables en una empresa totalmente remota.

CONTEXTO DE LA EMPRESA REMOTA
Las empresas completamente remotas enfrentan el reto de construir pertenencia, cultura y comunidad sin el espacio físico que en las empresas tradicionales es el contenedor natural de la cultura. No hay pasillos donde se producen conversaciones informales, no hay cafetería donde se construyen amistades, no hay lenguaje corporal en las interacciones del día a día. Todo debe construirse de forma explícita e intencional.

PARTE 1 — FUNDAMENTOS DE CULTURA REMOTA
Establece los pilares de la cultura de trabajo remoto:
- Culture document: cómo escribir un documento de cultura explícito (similar al de GitLab, Basecamp o Automattic) que describa los valores, las normas de trabajo y las expectativas de comportamiento en una empresa remota
- Async-first culture: por qué el trabajo asíncrono es el pilar más importante de la cultura remota y cómo implementarlo — escritura como primera forma de comunicación, reuniones como última opción, grabación de video para contexto complejo
- Trust by default: cómo construir una cultura de confianza radical donde los empleados son responsables de sus resultados sin vigilancia de presencia o actividad
- Documentación como cultura: por qué en las mejores empresas remotas documentar el conocimiento es considerado tan importante como el trabajo técnico, y cómo crear incentivos para que todos contribuyan

PARTE 2 — RITUALES Y CEREMONIAS DE CULTURA VIRTUAL
Construye conexión humana a distancia:
- All-hands mensual: cómo organizar una reunión de toda la empresa de 60-90 minutos que sea informativa, energizante y conecte a las personas con la misión (estructura, participación, segmento de preguntas)
- Retiro anual de empresa: por qué el encuentro presencial anual es la inversión más rentable en cultura para empresas remotas — cómo planificarlo, qué actividades incluir y cómo maximizar la conexión humana
- Rituales virtuales de equipo: check-ins de energía al inicio de la semana, social hours asíncronas (comparte algo personal en el canal de equipo), random coffee chats con Donut.ai o herramienta similar
- Celebraciones en remoto: cómo celebrar hitos de la empresa (primer millón de facturación, aniversarios, lanzamientos de producto) de forma memorable y colectiva cuando el equipo está distribuido

PARTE 3 — POLÍTICAS DE TRABAJO PARA EMPRESAS REMOTAS
Define las reglas explícitas que hacen funcionar el trabajo remoto:
- Política de trabajo asíncrono: horario de solapamiento mínimo requerido, tiempo de respuesta esperado por canal y tipo de mensaje, qué merece una reunión y qué puede resolverse con un mensaje o documento
- Política de comunicación escrita: estándares de calidad para la comunicación escrita (mensajes con contexto completo, documentos con estructura clara, threads en lugar de mensajes sueltos)
- Política de reuniones: cómo reducir el número de reuniones, quién puede convocar reuniones y con qué criterios, qué debe incluir toda convocatoria de reunión, cómo declinar reuniones innecesarias
- Política de "no online presence" pressure: cómo comunicar explícitamente que los empleados no están obligados a estar visiblemente activos en Slack en horario laboral y que el rendimiento se mide por resultados

PARTE 4 — EVALUACIÓN DE DESEMPEÑO Y DESARROLLO EN REMOTO
Gestiona la carrera de los empleados a distancia:
- Performance review remota: cómo diseñar un proceso de evaluación de desempeño que funcione sin observación directa — criterios de evaluación basados en outputs, auto-evaluación guiada, feedback de 360 grados asíncrono
- Career ladders documentados: por qué en empresas remotas las expectativas de cada nivel de cada rol deben estar documentadas explícitamente — no puede haber ambigüedad que en la oficina se resolvería de forma informal
- Promotion process transparente: cómo documentar los criterios de promoción y el proceso de decisión para que los empleados entiendan cómo crecer en la empresa
- Learning & Development en remoto: cómo apoyar el desarrollo profesional de los empleados remotos con presupuesto de formación individual, acceso a plataformas de aprendizaje y tiempo protegido para el desarrollo

PARTE 5 — BIENESTAR Y PREVENCIÓN DEL BURNOUT EN EMPRESAS REMOTAS
Protege la salud mental y física del equipo distribuido:
- Política de descanso real: cómo asegurarte de que los empleados realmente desconectan durante las vacaciones y el fin de semana — expectativas explícitas, ausencia de mensajes durante vacaciones de managers, unlimited PTO con mínimo garantizado
- Ergonomía y espacio de trabajo: qué incluir en el stipend de home office (escritorio, silla ergonómica, monitor, auriculares, conexión a internet) y cómo gestionarlo administrativamente
- Salud mental en remoto: acceso a sesiones de psicología o coaching, días de salud mental sin necesidad de justificación médica, entrenamiento a managers para detectar señales de burnout
- Comunidad interna: cómo crear canales y espacios de comunidad virtual (grupos de interés, clubs de lectura, grupos de ejercicio, grupos de padres) que den sentido de pertenencia más allá del trabajo

FORMATO DE ENTREGA
1. Plantilla de culture document para empresas remotas: secciones obligatorias con ejemplos de empresas referentes
2. Política de trabajo asíncrono completa: normas de comunicación, tiempos de respuesta y criterios de reunión
3. Guía de organización del retiro anual de empresa: timeline de planificación, actividades recomendadas y presupuesto estimado
4. Performance review template para empresas remotas: auto-evaluación, peer feedback y evaluación de manager
5. Bienestar toolkit: checklist de políticas de bienestar, stipend de home office y recursos de salud mental
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construcción de cultura y procesos de People en empresas nativas remotas',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión remota de equipos financieros y de control de gestión',
                'description'      => 'Aprende a liderar equipos de finanzas, contabilidad y control de gestión en entornos remotos: cómo garantizar la precisión y los plazos de cierre contable a distancia, gestionar la confidencialidad de la información financiera en remoto, coordinar auditorías externas distribuidas y mantener los controles internos cuando el equipo trabaja desde casa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO o Director Financiero con experiencia gestionando departamentos de finanzas, contabilidad y control de gestión completamente remotos en empresas de tecnología y servicios. Has dirigido cierres contables mensuales, auditorías anuales y transformaciones financieras con equipos distribuidos en múltiples países y sin acceso a oficina. Tu objetivo es enseñarme a gestionar un equipo financiero remoto de forma efectiva.

CONTEXTO DE LAS FINANZAS EN REMOTO
El departamento financiero presenta desafíos únicos en remoto: los cierres contables tienen plazos estrictos que requieren coordinación precisa entre múltiples personas, la confidencialidad de la información financiera es crítica y más difícil de garantizar en entornos domésticos, y los controles internos deben ser más explícitos y auditables cuando no hay supervisión física. Además, la relación con auditores externos requiere un nivel de documentación y acceso digital que no era necesario cuando todos estaban en la misma oficina.

PARTE 1 — CIERRE CONTABLE REMOTO
Gestiona el cierre mensual y anual de forma distribuida:
- Checklist de cierre mensual distribuido: lista detallada de todas las tareas del cierre con responsable, plazo y dependencias — visible para todo el equipo en tiempo real en Notion o Google Sheets
- Sincronización de cierre: reunión diaria de 15 minutos durante los cinco días de cierre para identificar bloqueantes y reasignar recursos si alguien está retrasado
- Acceso remoto seguro a sistemas contables: cómo garantizar que los contables tienen acceso al ERP, al banking y a los sistemas de conciliación desde su domicilio con los controles de seguridad necesarios (VPN, MFA, gestión de accesos)
- Documentación de procedimientos: por qué en finanzas remotas cada proceso debe estar documentado paso a paso — el cierre contable no puede depender del conocimiento tácito de una persona

PARTE 2 — CONTROLES INTERNOS EN ENTORNOS REMOTOS
Mantén la integridad financiera sin presencia física:
- Segregación de funciones en remoto: cómo mantener la separación entre quien aprueba y quien ejecuta pagos cuando no hay presencia física que dificulte la connivencia
- Autorización de pagos digitales: flujos de aprobación multinivel en el ERP o en herramientas como Tipalti, Bill.com o Coupa que garantizan la trazabilidad sin documentos físicos
- Reconocimiento de fraude remoto: señales de alerta de fraude financiero que son específicas del entorno remoto (phishing de pagos urgentes, suplantación de directivos, acceso no autorizado a sistemas)
- Auditoría de controles internos en remoto: cómo documentar y demostrar a los auditores externos que los controles internos funcionan correctamente cuando no hay evidencia física de su aplicación

PARTE 3 — GESTIÓN DE AUDITORÍAS EXTERNAS EN REMOTO
Coordina procesos de auditoría con equipos distribuidos:
- PBC (Prepared by Client) list digital: cómo gestionar la lista de documentación solicitada por los auditores en una plataforma colaborativa (SharePoint, Box, Google Drive) con control de versiones y trazabilidad de accesos
- Virtual data room: cómo configurar y gestionar un espacio digital seguro para compartir documentación confidencial con auditores externos durante la auditoría anual
- Reuniones de auditoría remotas: cómo preparar y participar en walkthrough de procesos con los auditores a través de videollamada — qué documentación tener a mano, cómo presentar los controles
- Tax compliance remoto: cómo gestionar las obligaciones fiscales de empleados que trabajan desde distintos países — riesgos de establecimiento permanente, retenciones de salario y coordinación con asesores fiscales locales

PARTE 4 — CONFIDENCIALIDAD Y SEGURIDAD EN FINANZAS REMOTAS
Protege la información financiera en entornos domésticos:
- Política de pantalla limpia: qué información financiera no debe visualizarse en espacios compartidos o con cámaras de videollamada visibles
- Gestión de documentos físicos en remoto: qué documentos con datos financieros sensibles (estados bancarios, nóminas, contratos) no deben imprimirse en casa y deben gestionarse exclusivamente de forma digital
- Gestión de accesos y principio de mínimo privilegio: cómo garantizar que cada miembro del equipo financiero solo tiene acceso a la información que necesita para su función
- Incidentes de seguridad en remoto: protocolo de actuación cuando un empleado financiero remoto pierde un dispositivo, sufre un acceso no autorizado o cae en un phishing

PARTE 5 — LIDERAZGO Y DESARROLLO DEL EQUIPO FINANCIERO REMOTO
Gestiona el rendimiento y el desarrollo a distancia:
- One-on-ones financieros: cómo estructurar las sesiones semanales de 30 minutos con cada miembro del equipo para abordar tanto la gestión operativa (estado de proyectos, bloqueantes) como el desarrollo de carrera
- Formación continua en remoto: cómo mantener al equipo actualizado en normativa contable, fiscal y regulatoria cuando no hay formaciones presenciales — cursos online, webinars de asociaciones profesionales, sesiones internas de conocimiento compartido
- Métricas de productividad del equipo financiero: cómo medir el rendimiento de un equipo de finanzas en remoto más allá de los plazos de cierre (calidad de los reportes, satisfacción de los stakeholders internos, número de incidencias o correcciones post-cierre)
- Construcción de equipo en finanzas: cómo crear sentido de equipo y cultura en un departamento históricamente centrado en procesos y plazos

FORMATO DE ENTREGA
1. Checklist de cierre mensual distribuido con responsables, plazos y dependencias — lista para adaptar a tu empresa
2. Política de controles internos para entornos remotos: los diez controles mínimos indispensables
3. Guía de gestión de auditoría remota: preparación de PBC list, configuración de virtual data room y protocolo de reuniones con auditores
4. Política de seguridad de información financiera para empleados remotos
5. Plan de desarrollo de equipo financiero remoto: formación, one-on-ones y métricas de rendimiento
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestión de equipos financieros y contables en entornos totalmente remotos',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Coordinación de equipos jurídicos distribuidos en trabajo remoto',
                'description'      => 'Gestiona equipos legales remotos manteniendo la calidad jurídica, la confidencialidad y los plazos procesales: comunicación segura entre abogados, gestión de asuntos urgentes a distancia, coordinación con juzgados y organismos públicos de forma remota, y mantenimiento de la cohesión del equipo en un entorno de alta presión y trabajo distribuido.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Socio Director o General Counsel con experiencia coordinando departamentos legales y despachos de abogados completamente remotos. Has gestionado equipos de entre tres y veinte abogados distribuidos en múltiples ciudades y países, coordinando litigación, asesoría corporativa y cumplimiento normativo sin compartir espacio físico. Tu objetivo es enseñarme a coordinar un equipo jurídico remoto de forma efectiva.

CONTEXTO DE LAS ESPECIALIDADES JURÍDICAS EN REMOTO
El trabajo jurídico en remoto presenta desafíos especiales: los plazos procesales son estrictos e improrrogables (lo que en la oficina se resolvería con un vistazo al compañero de despacho, en remoto requiere sistemas explícitos de alerta), la confidencialidad del secreto profesional es más difícil de garantizar en entornos domésticos, y la coordinación con juzgados, registros y organismos públicos requiere procesos digitales que no todos los organismos tienen implementados.

PARTE 1 — GESTIÓN DE ASUNTOS Y PLAZOS EN REMOTO
Sistema de gestión de la cartera legal distribuida:
- Software de gestión de despacho en la nube: plataformas como Lextools, iAbogado, Clio o Actionstep para gestionar asuntos, plazos, documentos y tiempo desde cualquier lugar con acceso seguro
- Sistema de alertas de plazos: cómo configurar alertas automáticas de plazos procesales con suficiente antelación para que el abogado responsable y su supervisor reciban notificación, incluyendo protocolo de escalación si el plazo se acerca sin que el asunto esté resuelto
- Daily de asuntos urgentes: reunión de 15 minutos cada mañana para revisar los asuntos con plazo inmediato y los incidentes inesperados del día anterior
- Protocolos de guardia: cómo organizar la disponibilidad fuera de horario para asuntos urgentes (detenciones, medidas cautelares urgentes, notificaciones inesperadas) cuando el equipo trabaja en remoto

PARTE 2 — SEGURIDAD Y CONFIDENCIALIDAD EN EQUIPOS LEGALES REMOTOS
Protege el secreto profesional en entornos distribuidos:
- Herramientas de comunicación segura: qué plataformas pueden usarse para comunicar información confidencial de clientes en remoto y cuáles no (nunca WhatsApp personal, siempre canales cifrados corporativos como Microsoft Teams con DLP o Signal for Teams)
- Política de pantalla limpia en remoto: cómo garantizar que la documentación confidencial de clientes no sea visible en videollamadas o a familiares en el domicilio
- Gestión documental segura: plataformas de DMS (Document Management System) con control de accesos, auditoría de descargas y cifrado en reposo para documentos legales de clientes
- Firma electrónica y documentos remotos: cómo gestionar el proceso de firma de contratos, poderes notariales y documentos legales sin presencia física (DocuSign, Signaturit, certificados digitales)

PARTE 3 — COORDINACIÓN CON JUZGADOS Y ORGANISMOS PÚBLICOS
Gestiona las relaciones institucionales en remoto:
- Procuradores y representación procesal: cómo coordinar con procuradores de distintas ciudades cuando el abogado no puede desplazarse, incluyendo instrucciones claras y documentación completa
- Lexnet y presentación telemática: cómo optimizar el uso de la plataforma telemática de los juzgados para presentaciones de escritos y notificaciones electrónicas de forma remota
- Registro mercantil, propiedad y notarías: qué trámites pueden gestionarse completamente online y cuáles requieren presencia física — cómo planificar los desplazamientos necesarios de forma eficiente
- Comunicación con organismos reguladores: CNMC, CNMV, AEPD — cómo gestionar los expedientes administrativos de forma remota con los representantes del despacho en cada ciudad

PARTE 4 — TRABAJO EN EQUIPO Y CALIDAD JURÍDICA EN REMOTO
Mantén la calidad y coherencia del trabajo jurídico distribuido:
- Peer review de escritos y documentos: proceso de revisión cruzada entre abogados antes de presentar documentos judiciales o entregar asesoramiento al cliente — cómo hacerlo de forma asíncrona con comentarios estructurados
- Knowledge management jurídico remoto: cómo capturar el conocimiento de los abogados en wikis de cláusulas preferidas, criterios de negociación y estrategias de litigación que son accesibles para todo el equipo distribuido
- Formación continua del equipo legal en remoto: cómo organizar sesiones de formación interna (case studies, análisis de jurisprudencia reciente, talleres de especialidad) de forma que sean efectivas en formato virtual
- Mentoring de abogados junior en remoto: cómo transmitir el criterio jurídico y el know-how del despacho a los abogados en formación cuando no pueden aprender por proximidad física con los socios

PARTE 5 — BIENESTAR DEL EQUIPO JURÍDICO REMOTO
Gestiona la presión y el estrés del trabajo legal en remoto:
- Desconexión real en el trabajo jurídico: cómo establecer límites de disponibilidad en una profesión donde los clientes y los plazos crean presión constante de disponibilidad permanente
- Gestión del estrés en litigación remota: el juicio, la vista oral o la negociación crítica son momentos de alta tensión — cómo el equipo se apoya mutuamente de forma remota en esos momentos
- Rituales de equipo en el despacho remoto: cómo mantener la cohesión y el sentido de pertenencia en una profesión individual que en la oficina ya presentaba dificultades de trabajo en equipo
- Reconocimiento del trabajo bien hecho en remoto: cómo celebrar los éxitos procesales y los buenos resultados para los clientes de forma que el equipo lo perciba como genuino y motivador

FORMATO DE ENTREGA
1. Checklist de plazos procesales: sistema de alertas con responsables y protocolo de escalación
2. Política de confidencialidad para abogados remotos: herramientas permitidas, prohibidas y recomendadas
3. Proceso de peer review de documentos jurídicos: formato de revisión asíncrona con comentarios estructurados
4. Guía de coordinación con procuradores remotos: instrucciones estándar, documentación mínima y protocolo de comunicación
5. Plan de onboarding de abogado junior en remoto: primeras ocho semanas con mentoring estructurado y criterios de evaluación
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Coordinación eficiente de equipos jurídicos en entornos remotos',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Liderazgo de equipos de Customer Success distribuidos globalmente',
                'description'      => 'Gestiona equipos de Customer Success distribuidos en múltiples zonas horarias y países: cobertura de clientes sin huecos de atención, onboarding de CSMs remotos, gestión del rendimiento basada en outcomes, y construcción de la cultura de equipo centrada en el cliente cuando los CSMs nunca se reúnen en persona.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP of Customer Success con experiencia construyendo y escalando equipos de CS completamente remotos en empresas SaaS B2B con clientes globales. Has gestionado equipos de entre cinco y cuarenta CSMs distribuidos en Europa, América del Norte y Latinoamérica, garantizando cobertura de clientes en múltiples zonas horarias sin perder la calidad de la atención. Tu objetivo es enseñarme a liderar un equipo de Customer Success distribuido de forma efectiva.

CONTEXTO DEL EQUIPO DE CS DISTRIBUIDO
Un equipo de Customer Success distribuido globalmente puede ser una ventaja competitiva enorme (cobertura de clientes en múltiples husos horarios, diversidad cultural para atender clientes internacionales) o una fuente de caos operativo (falta de coordinación, inconsistencia en la calidad de atención, CSMs que no saben qué están haciendo sus compañeros). La diferencia está en el sistema operativo del equipo.

PARTE 1 — ESTRUCTURA DE COBERTURA GLOBAL
Diseña el modelo de cobertura de clientes distribuida:
- Follow-the-sun model para CS: cómo distribuir la cobertura de clientes entre equipos en distintas zonas horarias para que siempre haya un CSM disponible en horario de atención
- Handoff entre regiones: protocolo de transferencia de información entre el equipo de una región y el de la siguiente cuando un asunto queda pendiente al final del día
- Segmentación de cartera por región y zona horaria: criterios para asignar cuentas a CSMs según la ubicación del cliente, el idioma y la cultura, y el tamaño del contrato
- Escalación global: cómo gestionar una crisis de cliente que comienza en una zona horaria y requiere respuesta de varias regiones coordinadas

PARTE 2 — ONBOARDING DE CSMS EN REMOTO
Integra a nuevos CSMs en el equipo distribuido:
- Programa de onboarding de 60 días para CSM remoto: semana a semana con objetivos claros de conocimiento del producto, procesos internos, cartera asignada y primeras interacciones con clientes
- Buddy system global: asignar a cada nuevo CSM un compañero experimentado de otra región para facilitar la integración cultural y el conocimiento del equipo global
- Certificación interna de CSM: programa de certificación que el nuevo CSM debe completar antes de gestionar cuentas de forma autónoma (conocimiento del producto, procesos de onboarding de clientes, herramientas de CS, playbooks de renovación)
- Primera interacción con clientes en remoto: cómo supervisar de forma no intrusiva las primeras llamadas de cliente de un CSM nuevo a través de grabaciones, escucha en silencio o revisión de notas post-llamada

PARTE 3 — GESTIÓN DEL RENDIMIENTO DE CSMs REMOTOS
Evalúa y mejora el desempeño a distancia:
- North Star metrics del CSM: las métricas que definen el éxito de un CSM (NRR de su cartera, health score promedio de sus cuentas, tasa de renovación, expansión de cuentas, CSAT/NPS de sus clientes)
- Coaching de CS en remoto: cómo usar grabaciones de llamadas de cliente para dar feedback específico sobre la calidad de la conversación — lo que escuchas, lo que el cliente sintió, qué haría diferente
- Pipeline review de renovaciones en remoto: reunión semanal de 30 minutos por región para revisar las renovaciones del trimestre, identificar riesgos y coordinar estrategias
- Performance improvement para CSMs en remoto: cómo estructurar un plan de mejora de rendimiento con objetivos quincenales, soporte del manager y criterios claros de evaluación

PARTE 4 — CULTURA DE EQUIPO Y CONOCIMIENTO COMPARTIDO
Construye comunidad entre CSMs distribuidos:
- Weekly team standup virtual: reunión de 30 minutos cada lunes con todos los CSMs del equipo global para compartir victorias de la semana, aprendizajes y novedades del producto o del mercado
- Playbook wiki colaborativo: cómo construir y mantener actualizado el playbook de CS (tácticas de onboarding, scripts de conversación, estrategias de expansión, respuestas a objeciones) con contribuciones de todos los CSMs del equipo
- CSM Spotlight: programa mensual donde un CSM del equipo presenta un caso de éxito o un aprendizaje a todo el equipo para distribuir el conocimiento tácito entre regiones
- Cross-regional collaboration: cómo identificar y aprovechar oportunidades en las que CSMs de distintas regiones pueden apoyarse mutuamente (cuenta global que tiene subsidiarias en múltiples países, expertise específico de un CSM en un sector)

PARTE 5 — HERRAMIENTAS Y PROCESOS DEL EQUIPO DE CS REMOTO
Stack tecnológico para Customer Success distribuido:
- CRM y CS platform: Salesforce + Gainsight, HubSpot + ChurnZero, o Totango como plataformas centrales que dan visibilidad global del estado de todos los clientes a todos los CSMs
- Customer health score centralizado: cómo configurar un health score que todos los CSMs calculen de la misma manera para que los datos sean comparables entre regiones y carteras
- Herramientas de comunicación del equipo de CS: Slack con channels por región y por tipo de asunto, Zoom para llamadas de cliente, Loom para actualizaciones asíncronas, Notion para documentación del equipo
- Métricas globales de CS: cómo crear un dashboard que agregue el rendimiento de todas las regiones y permita al VP de CS ver el estado del equipo global en una sola vista

FORMATO DE ENTREGA
1. Modelo de cobertura follow-the-sun: mapa de regiones, horarios de atención y protocolo de handoff
2. Plan de onboarding de CSM remoto de 60 días con hitos por semana y criterios de certificación
3. Plantilla de pipeline review de renovaciones: agenda, datos necesarios y protocolo de escalación de riesgos
4. Estructura del playbook de CS colaborativo: secciones, contribuciones por tipo de CSM y proceso de actualización
5. Global CS Dashboard: las métricas que deben verse por CSM, por región y a nivel global
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestión global de equipos de Customer Success distribuidos',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Coordinación de equipos de freelancers distribuidos en proyectos complejos',
                'description'      => 'Aprende a coordinar equipos de freelancers distribuidos en proyectos complejos como freelancer senior o consultor independiente: gestión de expectativas entre colaboradores externos, comunicación asíncrona efectiva, entrega coordinada de trabajo de varios autores, y construcción de relaciones de confianza con colaboradores que no conoces en persona.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor independiente o freelancer senior con experiencia coordinando proyectos complejos con equipos de colaboradores freelance distribuidos. Has gestionado proyectos de entre dos y veinte personas (diseñadores, desarrolladores, redactores, fotógrafos, traductores) trabajando de forma simultánea y asíncrona, entregando proyectos de alta calidad a clientes que pagan por el resultado coordinado. Tu objetivo es enseñarme a coordinar equipos de freelancers distribuidos de forma profesional y eficiente.

CONTEXTO DE LA COORDINACIÓN DE FREELANCERS
Coordinar a otros freelancers como freelancer senior es radicalmente diferente a gestionar empleados: no hay relación de jerarquía clara, los colaboradores tienen otros clientes y compromisos, la calidad del trabajo es variable y difícil de garantizar sin supervisión directa, y la coordinación de entregas simultáneas de múltiples personas es logísticamente compleja. Sin embargo, hacerlo bien permite asumir proyectos mucho más grandes y rentables que los que podrías hacer en solitario.

PARTE 1 — SELECCIÓN Y ONBOARDING DE COLABORADORES FREELANCE
Construye tu red de colaboradores de confianza:
- Criterios de selección de colaboradores freelance: cómo evaluar a otros freelancers para colaborar (calidad del portfolio, recomendaciones de clientes comunes, puntualidad en entregas anteriores, comunicación clara y proactiva)
- Contratos entre freelancers: por qué necesitas un contrato de colaboración incluso con personas de confianza — qué cláusulas son indispensables (plazos, calidad esperada, confidencialidad, derechos de autor, condiciones de pago)
- Briefing de colaboradores: cómo redactar un brief tan claro que el colaborador pueda trabajar de forma autónoma sin preguntas constantes — objetivo del proyecto, audiencia, criterios de éxito, restricciones, ejemplos de referencia, entregables y formato
- Onboarding de un nuevo colaborador: cómo asegurarte de que entiende el cliente, el proyecto, los estándares de calidad y el proceso de trabajo antes de empezar a facturar horas

PARTE 2 — COMUNICACIÓN ASÍNCRONA EN EQUIPOS DE FREELANCERS
Coordina a personas que tienen su propio ritmo de trabajo:
- Canales de comunicación para proyectos con freelancers: Slack workspace de proyecto, email para comunicaciones formales, Notion para documentación compartida, herramienta de gestión de proyecto (Asana, Linear, Trello) para tareas y plazos
- Normas de comunicación asíncrona con colaboradores externos: tiempo máximo de respuesta esperado, qué información debe incluir cada actualización de progreso, cuándo es necesaria una llamada síncrona
- Check-ins de progreso sin microgestión: cómo obtener actualizaciones regulares del estado de cada colaborador sin parecer controlador ni desconfiado — petición de check-in en hito, no de reporte horario
- Gestión de colaboradores silenciosos: qué hacer cuando un colaborador no responde en el tiempo esperado o no envía actualizaciones de progreso

PARTE 3 — GESTIÓN DE CALIDAD CON COLABORADORES EXTERNOS
Garantiza la calidad del trabajo entregado por otros:
- Criterios de aceptación claros: cómo definir por escrito en el brief qué significa un entregable "correcto" — especificaciones técnicas, criterios estéticos, métricas de rendimiento esperadas
- Proceso de revisión de entregables de colaboradores: primera revisión propia del entregable antes de mostrárselo al cliente, sesión de feedback estructurado con el colaborador, segunda entrega con correcciones
- Cómo dar feedback a un colaborador freelance de forma constructiva sin dañar la relación: ser específico sobre qué cambiar y por qué, sin juzgar la capacidad global del colaborador
- Cuándo rechazar un entregable: criterios claros para devolver un trabajo y qué implicaciones tiene para el pago y el plazo del proyecto

PARTE 4 — COORDINACIÓN DE ENTREGAS SIMULTÁNEAS
Gestiona la interdependencia entre colaboradores:
- Mapa de dependencias del proyecto: qué entregables dependen de otros y en qué orden — qué bloquea a quién y cómo minimizar tiempos muertos
- Buffer de tiempo para revisión y ajustes: cómo planificar siempre un margen de al menos el 20% sobre el plazo del colaborador para absorber retrasos e iteraciones sin comprometer la entrega al cliente
- Integración de entregables de distintos colaboradores: cuando el resultado final del proyecto combina trabajo de varios freelancers (diseño + copy + desarrollo), cómo gestionar la integración de forma que el resultado sea coherente
- Plan B por colaborador: siempre tener identificado un colaborador alternativo para cada especialidad crítica del proyecto por si el principal falla en el plazo comprometido

PARTE 5 — PAGOS Y RELACIONES COMERCIALES CON COLABORADORES
Gestiona la parte financiera y de relación a largo plazo:
- Modelo de pago a colaboradores freelance: cuándo pagar (50% al inicio, 50% a la entrega vs. hitos parciales vs. pago total post-entrega) y cómo negociarlo según el volumen de colaboración y la confianza acumulada
- Márgenes del proyecto con colaboradores: cómo calcular el coste total de los colaboradores, los costes indirectos de coordinación y gestión, y el margen que necesitas para que el proyecto sea rentable para ti
- Construcción de relaciones de colaboración a largo plazo: cómo convertir a los mejores colaboradores en un equipo virtual estable que prefiera trabajar contigo antes que buscar otros clientes
- Retroalimentación post-proyecto: cómo dar y pedir feedback al final de cada colaboración para mejorar el proceso en el siguiente proyecto y fortalecer la relación profesional

FORMATO DE ENTREGA
1. Plantilla de brief de colaboración para freelancers: todas las secciones con ejemplos para proyectos creativos y técnicos
2. Checklist de onboarding de colaborador freelance: información que debe tener antes de empezar a trabajar
3. Plantilla de contrato de colaboración entre freelancers: cláusulas mínimas indispensables
4. Sistema de seguimiento de proyecto con múltiples colaboradores: tablero en Notion o Asana con dependencias y plazos por persona
5. Calculadora de precio de proyecto con colaboradores: cómo calcular el precio al cliente sumando costes de colaboradores, margen de coordinación y margen de beneficio
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Gestión de proyectos complejos con equipos de freelancers distribuidos',
                'vote_score'       => 36,
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
