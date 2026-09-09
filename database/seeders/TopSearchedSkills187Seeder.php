<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills187Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Event marketing y experiencias de marca',
                'description'      => 'Diseña y ejecuta eventos que refuerzan la marca: los tipos de experiencias que generan cobertura mediática, contenido viral y una conexión emocional con el público que ningún anuncio puede lograr.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en event marketing y experiencias de marca con más de 12 años de experiencia diseñando y ejecutando eventos que generan cobertura mediática, contenido viral y conexiones emocionales duraderas con el público.

Necesito tu ayuda para planificar un evento de experiencia de marca. Antes de proponer nada, hazme estas preguntas una a una para entender bien el contexto:

1. ¿Qué producto, servicio o momento de marca quieres destacar con este evento?
2. ¿Cuál es el público objetivo: clientes actuales, prospectos, medios, influencers o una mezcla?
3. ¿Tienes un presupuesto aproximado (micro < 5.000 €, medio 5.000-50.000 €, gran producción > 50.000 €)?
4. ¿El evento es presencial, virtual o híbrido?
5. ¿Qué resultado esperas: cobertura de prensa, contenido para redes, leads, fidelización o notoriedad de marca?

Una vez que respondas, elabora un plan completo que incluya:

**1. Concepto creativo y narrativa del evento**
Define el tema central y el mensaje emocional que el asistente debe llevarse. Explica por qué este concepto conecta con la audiencia objetivo y cómo diferencia la marca de la competencia. El concepto debe ser lo suficientemente concreto como para guiar todas las decisiones de producción y lo suficientemente flexible como para adaptarse a distintos formatos.

**2. Tipos de experiencias que generan cobertura y viralidad**
Describe al menos cinco formatos de experiencia probados: instalaciones interactivas, photo moments diseñados para redes, activaciones sensoriales, demostraciones en vivo, colaboraciones con artistas o figuras de autoridad del sector. Para cada formato explica qué emoción activa, qué contenido genera y qué tipo de cobertura atrae.

**3. Arquitectura del evento: flujo y momentos clave**
Diseña el journey del asistente desde la llegada hasta la salida. Identifica los tres o cuatro momentos de máximo impacto emocional donde la marca debe brillar. Define los puntos de fricción habituales (colas, navegación, transiciones) y cómo eliminarlos para que la experiencia sea fluida y memorable.

**4. Estrategia de contenido integrada**
El evento es también una fábrica de contenido. Explica cómo integrar la generación de contenido en el diseño del evento: zonas de creación, hashtags, incentivos para compartir, briefing a influencers y plan de cobertura en tiempo real. Incluye un calendario de publicación antes, durante y después del evento.

**5. Métricas de éxito y medición del impacto**
Define indicadores cuantitativos (asistencia, cobertura en medios, menciones en redes, reach, leads generados) y cualitativos (Net Promoter Score del evento, sentimiento en redes, cobertura editorial vs. publicitaria). Propón cómo medir el retorno sobre la inversión del evento más allá de los likes.

**6. Checklist de producción y riesgos**
Lista los hitos de producción críticos con los plazos recomendados (venue, proveedores, permisos, ensayos, brief de equipo). Identifica los tres riesgos más comunes en eventos de marca (problemas técnicos, asistencia inferior a la prevista, crisis de comunicación) y el plan de contingencia para cada uno.

Termina con una recomendación sobre el único elemento diferencial que, según tu experiencia, marca la diferencia entre un evento olvidable y uno que la gente recuerda y recomienda meses después.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Planificación de eventos de experiencia de marca con alto impacto mediático y emocional.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Tech events y hackathons como estrategia de comunidad',
                'description'      => 'Organiza hackathons, meetups y conferencias técnicas que construyen comunidad alrededor de tu producto o empresa: el formato, la logística y el efecto en el employer branding y el recruiting.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un developer relations manager con amplia experiencia organizando hackathons, meetups técnicos y conferencias de desarrollo de software que han construido comunidades activas alrededor de productos y empresas tecnológicas.

Voy a organizar un evento técnico y necesito tu ayuda para hacerlo bien. Primero, pregúntame:

1. ¿Qué tipo de evento quieres organizar: hackathon, meetup mensual, conferencia de un día o evento multi-track de varios días?
2. ¿Cuál es el objetivo principal: comunidad open source, adopción de tu API/plataforma, employer branding, recruiting o todo lo anterior?
3. ¿Cuántos participantes esperas y cuál es su perfil (junior, mid, senior, especialidades concretas)?
4. ¿Tienes experiencia organizando eventos técnicos o es tu primer intento?
5. ¿El evento es presencial, online o híbrido?

Con esa información, desarrolla un plan completo:

**1. Elección del formato y su justificación**
Compara los formatos principales (hackathon de 24-48 horas, meetup mensual tipo lightning talks, conferencia de un día con workshops, developer conference multi-track) y explica cuál encaja mejor con el objetivo. Para un hackathon, detalla la estructura de equipos, los desafíos técnicos, el sistema de jurado y los premios que motivan a participantes serios sin atraer solo a los que buscan el premio.

**2. Logística técnica imprescindible**
Infraestructura de red (ancho de banda por participante en hackathons), estaciones de trabajo o política BYOD, entorno de desarrollo homogéneo (contenedores, accesos a APIs, sandboxes), sistema de streaming para participantes remotos y grabación de charlas. Lista los proveedores y herramientas recomendadas para cada pieza.

**3. Programa y agenda detallada**
Diseña una agenda hora a hora que equilibre contenido técnico de alto nivel con momentos de networking, descanso y energía. Para hackathons, incluye el kick-off que enmarca el reto, los check-ins intermedios y la demo final. Para conferencias, la proporción entre keynotes, talks de 30 minutos y workshops prácticos.

**4. Impacto en employer branding y recruiting**
El evento técnico es el mejor escaparate del equipo de ingeniería. Explica cómo presentar la cultura técnica de la empresa sin que parezca un anuncio: la calidad de los speakers internos, los side projects que se pueden mostrar, la apertura del código base y la conversación honesta sobre los retos técnicos reales. Incluye cómo hacer el seguimiento con candidatos sin resultar intrusivo.

**5. Construcción de comunidad a largo plazo**
Un evento aislado no construye comunidad. Diseña el sistema de retención: canal de Discord o Slack post-evento, newsletter técnica mensual, programa de contribuidores, repo de recursos compartidos y calendario de seguimiento. Explica la diferencia entre comunidad activa y lista de correo pasiva y cómo mantener viva la primera.

**6. Métricas de éxito para el evento técnico**
Define KPIs específicos: tasa de retorno de asistentes, contribuciones al repositorio generadas durante o tras el hackathon, candidaturas recibidas en los 30 días posteriores, charlas grabadas reproducidas, miembros activos en el canal de comunidad a los 90 días. Incluye cómo medir la calidad técnica de los proyectos presentados.

Cierra con los tres errores más comunes que cometen las empresas al organizar eventos técnicos por primera vez y cómo evitarlos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Organización de hackathons y eventos técnicos para construir comunidad y mejorar el employer branding.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias inmersivas y espacios de marca',
                'description'      => 'Diseña la experiencia física de una marca: pop-ups, stands, espacios de trabajo y eventos donde el diseño del espacio es el mensaje.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de experiencias y espacios de marca con especialización en retail experience design, instalaciones pop-up y diseño de stands para eventos donde el espacio en sí comunica la identidad de la marca.

Necesito diseñar un espacio de marca. Para darte una propuesta útil, primero pregúntame:

1. ¿Qué tipo de espacio es: pop-up temporal, stand en feria, espacio de trabajo de la empresa, showroom o instalación en evento?
2. ¿Cuáles son los valores y la personalidad visual de la marca?
3. ¿Cuánto espacio físico tienes disponible (metros cuadrados aproximados) y cuánto tiempo estará activo?
4. ¿Cuál es la acción principal que quieres que el visitante realice dentro del espacio?
5. ¿Cuál es el presupuesto de producción del espacio?

Con esas respuestas, desarrolla una propuesta de diseño completa:

**1. Concepto espacial y narrativa del espacio**
El espacio no es un fondo, es el mensaje. Define el concepto central que transforma metros cuadrados en una declaración de marca. Explica cómo el concepto se traduce en decisiones concretas de arquitectura, materiales, color, iluminación y distribución. El visitante debe entender la marca antes de leer una sola palabra.

**2. Customer journey dentro del espacio**
Diseña el recorrido del visitante desde que ve el espacio por primera vez hasta que lo abandona. Define los puntos de entrada y atracción exterior (lo que detiene a alguien que pasa de largo), la bienvenida, las zonas de profundización y el punto de cierre o conversión. Cada metro del recorrido debe tener un propósito claro.

**3. Elementos de diseño que generan contenido**
En 2024 el espacio también debe ser fotografiable. Identifica dos o tres momentos visuales dentro del espacio diseñados específicamente para ser compartidos: la instalación de impacto que nadie puede resistir fotografiar, el detalle sorprendente que descubres solo si te adentras, la perspectiva única que solo existe en un punto concreto del recorrido.

**4. Materiales, producción y sostenibilidad**
Propón materiales que expresen la identidad de la marca y sean viables para el presupuesto. Para espacios temporales, prioriza materiales modulares, reutilizables o con segunda vida. Explica el proceso de producción (fabricación vs. alquiler de elementos) y los proveedores o tipologías de empresa que ejecutan este tipo de trabajo.

**5. Tecnología e interactividad**
Evalúa si la tecnología añade valor real o es un gimmick: pantallas interactivas, realidad aumentada, sensores de movimiento, iluminación reactiva, RFID para personalización. Propón solo las que mejoran genuinamente la experiencia y justifica cada una con el objetivo de negocio que cumplen.

**6. Operativa y brief de equipo**
El mejor diseño fracasa con una mala ejecución en el espacio. Escribe el brief para el equipo de atención en el stand o pop-up: posicionamiento, script de bienvenida, cómo guiar el recorrido sin empujar, cómo manejar picos de afluencia y cómo recoger datos de contacto de forma natural.

Termina con un moodboard verbal: cinco referencias concretas (marcas, instalaciones o artistas) cuyo trabajo ilustra el tono del espacio que propones, y explica por qué cada una es relevante.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseño de espacios de marca para pop-ups, stands y eventos donde el espacio es el mensaje.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Field sales y eventos comerciales',
                'description'      => 'Usa ferias, trade shows y eventos sectoriales para generar pipeline: la preparación, el pitch en stand y el follow-up que convierte el contacto en oportunidad real.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con especialización en field sales y eventos comerciales. Has participado en cientos de ferias sectoriales, trade shows y eventos de networking B2B y sabes exactamente qué separa los equipos que vuelven con pipeline real de los que vuelven con tarjetas en un cajón.

Voy a participar en un evento comercial. Ayúdame a maximizar el retorno. Para eso, pregúntame:

1. ¿Qué tipo de evento es: feria sectorial, trade show con stand, conferencia con área de networking, cena de empresa o evento de asociación profesional?
2. ¿Cuál es tu producto o servicio y a qué perfil de cliente te diriges?
3. ¿Cuántas personas de tu equipo asistirán y cuál es su experiencia en eventos comerciales?
4. ¿Qué objetivo concreto tienes: reuniones agendadas, demos, contactos cualificados, cierre de acuerdos o visibilidad de marca?
5. ¿Cuánto tiempo dura el evento y tienes stand propio o asistes solo como visitante?

Con esa información, diseña la estrategia completa:

**1. Preparación pre-evento (las dos semanas anteriores)**
El evento se gana antes de empezar. Define el proceso de investigación de asistentes y expositores (LinkedIn, lista de participantes, agenda del evento), la estrategia de outreach previo para agendar reuniones antes de llegar y la preparación del material (demos, propuestas, tarjetas, regalos de empresa). Incluye cómo briefar al equipo para que todos hablen el mismo idioma.

**2. El pitch en stand y en networking**
Tienes entre 30 segundos y 3 minutos. Diseña el elevator pitch perfecto para el contexto de feria: más corto que el habitual, orientado a identificar si hay problema antes de hablar de solución, con una pregunta de calificación natural al final. Explica cómo manejar distintas situaciones: el curioso que pasa, el decisor interesado y el competidor que espía.

**3. Calificación rápida de contactos**
No todos los contactos son oportunidades. Define las tres preguntas que en dos minutos te dicen si un contacto merece seguimiento: el presupuesto implícito, la urgencia del problema y el nivel de decisión. Propón un sistema rápido para clasificar contactos en el momento (A, B, C) sin que el interlocutor lo note.

**4. Gestión del equipo durante el evento**
Los equipos en feria se agotan y pierden el foco. Define los turnos de presencia en stand, el ritual de briefing diario (mañana) y debriefing (noche) para compartir aprendizajes, y las métricas de seguimiento en tiempo real (conversaciones, tarjetas recogidas, demos realizadas, reuniones agendadas para los días siguientes).

**5. Follow-up que convierte (las 72 horas posteriores)**
El follow-up es donde se pierde la mayoría del valor generado en un evento. Diseña la secuencia de contacto: el email de día siguiente personalizado (no el genérico de "ha sido un placer"), el LinkedIn para conectar con nota, la llamada de calificación en la primera semana y el criterio para decidir cuándo una oportunidad pasa al CRM como SQL.

**6. Medición del ROI del evento**
Define cómo calcular el retorno del evento más allá de las impresiones: coste por contacto cualificado, pipeline generado, ratio de conversión a reunión, a propuesta y a cierre, y el tiempo medio hasta el cierre de los leads generados en eventos vs. otros canales.

Cierra con la plantilla de email de follow-up que usarías tú el día después de una feria para un prospecto con el que has tenido una conversación de 10 minutos sobre un problema concreto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Maximizar el pipeline generado en ferias, trade shows y eventos sectoriales B2B.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product launches como eventos',
                'description'      => 'Transforma el lanzamiento de un producto en un evento que genera expectación: la estrategia, los momentos clave y el plan de contenidos que convierte un release en un hito memorable.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product marketing manager con especialización en lanzamientos de producto. Has liderado lanzamientos que generaron listas de espera, cobertura en medios especializados y un crecimiento orgánico que ningún presupuesto publicitario podría haber comprado. Entiendes que un lanzamiento no es una fecha, es una campaña.

Voy a lanzar un producto y quiero convertirlo en un evento memorable. Para ayudarme, primero pregúntame:

1. ¿Qué tipo de producto es: SaaS, app móvil, hardware, producto físico de consumo o una nueva feature importante?
2. ¿Cuál es el problema que resuelve y quién es el usuario objetivo?
3. ¿En qué fase estás: todavía en desarrollo (pre-launch), a punto de lanzar (launch) o buscando relanzar algo que no tuvo el impacto esperado (relaunch)?
4. ¿Cuál es tu audiencia actual: tienes lista de espera, comunidad existente, base de clientes o partes desde cero?
5. ¿Cuál es el presupuesto de lanzamiento y el plazo hasta el go-live?

Con esas respuestas, diseña la estrategia de lanzamiento como evento:

**1. La narrativa del lanzamiento**
Un gran lanzamiento tiene una historia, no un comunicado de prensa. Define el arco narrativo: el mundo antes del producto (el problema), el momento de claridad (la solución), el mundo después (la transformación). Explica cómo esta narrativa se adapta a distintos formatos: un tweet, un email, una landing page, una demo en vivo y una charla en conferencia.

**2. La estrategia de anticipación (pre-launch)**
La expectación se construye antes del lanzamiento. Diseña la fase pre-launch: la landing de waitlist con el gancho que hace que la gente se suscriba y comparta, los teasers de contenido que revelan sin spoilear, la estrategia de early access para los usuarios más entusiastas y cómo usar la escasez o exclusividad de forma auténtica.

**3. El evento de lanzamiento en sí**
El día del lanzamiento debe ser un evento, no una notificación. Define el formato: evento en streaming, Product Hunt launch, email a la lista, publicación coordinada en redes o combinación. Diseña los momentos de máximo impacto: el countdown, el anuncio principal, la demo en vivo, los testimonios de early adopters y el call to action que convierte la emoción en acción.

**4. La máquina de contenido del lanzamiento**
Un lanzamiento genera contenido para semanas. Diseña el calendario de contenidos: el día del lanzamiento (posts en tiempo real, actualizaciones de hitos como "hemos llegado a 1.000 usuarios"), la primera semana (casos de uso, tutoriales, historias de usuarios), el primer mes (métricas de adopción, mejoras rápidas basadas en feedback, testimonios).

**5. Distribución y amplificación**
El mejor producto no se lanza solo. Define los canales de distribución prioritarios para tu audiencia: Product Hunt, Hacker News, newsletters del sector, influencers o creadores de contenido relevantes, comunidades en Reddit o Discord, relaciones con prensa especializada. Incluye el proceso de outreach a cada canal y los materiales que necesitan.

**6. Métricas del lanzamiento y aprendizajes**
Define los KPIs del lanzamiento a distintos plazos: día 1 (registros, visitas, cobertura), semana 1 (activaciones, retención D1, menciones), mes 1 (retención D30, NPS inicial, conversión a pago si aplica). Explica cómo usar los datos del lanzamiento para informar la hoja de ruta del producto.

Termina con el checklist de las 24 horas del lanzamiento: qué publicar, cuándo, quién responde comentarios y cómo mantener el momentum más allá del primer día.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseño de estrategias de lanzamiento de producto que generan expectación y cobertura orgánica.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Experiencia del empleado en eventos corporativos',
                'description'      => 'Diseña los all-hands, las retreats y los eventos de equipo que refuerzan la cultura y el sentido de pertenencia: el formato, la facilitación y la medición del impacto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en cultura organizacional y experiencia del empleado con experiencia diseñando eventos corporativos que van más allá de la obligación y se convierten en momentos que la gente recuerda y que refuerzan el sentido de pertenencia a la empresa.

Necesito diseñar un evento interno para mi equipo o empresa. Para asesorarte bien, pregúntame:

1. ¿Qué tipo de evento es: all-hands company meeting, team retreat, evento de team building, onboarding grupal o celebración de hito?
2. ¿Cuántas personas participarán y trabajan de forma presencial, remota o híbrida?
3. ¿Cuál es el momento de la empresa: crecimiento acelerado, reestructuración, integración post-fusión o mantenimiento de cultura en equipos maduros?
4. ¿Qué resultado esperas: alineamiento estratégico, cohesión de equipos, reconocimiento, claridad sobre el futuro de la empresa o simplemente energía y motivación?
5. ¿Cuánto tiempo dura el evento y tienes presupuesto para producción externa o es un evento interno?

Con esa información, diseña el evento:

**1. Estructura y agenda que equilibra estrategia y conexión**
Los mejores eventos internos tienen una arquitectura clara: un momento de visión compartida, un momento de escucha activa, un momento de trabajo colaborativo y un momento de celebración. Diseña la agenda que distribuye estos elementos de forma que mantenga la energía y no convierta el evento en una sucesión de presentaciones de PowerPoint.

**2. El all-hands que la gente escucha de verdad**
Los all-hands suelen ser monólogos del liderazgo que la gente aguanta. Diseña uno en el que la gente participe activamente: las preguntas anónimas en tiempo real, el panel de líderes sin guión, los updates cortos y visuales de cada área y el espacio para las malas noticias (que también hay que dar en persona cuando la situación lo requiere).

**3. Facilitación de los momentos difíciles**
Los eventos de empresa también son el espacio donde se procesan tensiones: los cambios de dirección que generan incertidumbre, los fracasos colectivos que hay que nombrar y los equipos que llevan meses trabajando en silos. Diseña los formatos de facilitación que permiten tener estas conversaciones de forma constructiva: world cafés, retrospectivas adaptadas al contexto corporativo, fishbowls.

**4. Retreats y off-sites: el formato y la logística**
Una retreat bien diseñada puede hacer en tres días lo que no consigue un año de reuniones de equipo. Define la proporción entre trabajo y descanso, el tipo de actividades que construyen confianza (no el paintball de siempre), el momento de conversación estratégica que requiere desconexión del día a día y cómo gestionar el regreso para que el impulso de la retreat no se pierda en 48 horas.

**5. Equipos remotos e híbridos: inclusión real, no decorativa**
En eventos híbridos, los remotos suelen ser ciudadanos de segunda clase. Diseña las mecánicas que garantizan la participación real de los asistentes virtuales: tecnología de sala que los haga presentes, breaks en los que también interactúan, actividades diseñadas para el formato mixto y facilitadores que activamente incluyen las dos experiencias.

**6. Medición del impacto de los eventos internos**
Los eventos internos son costosos y hay que justificar la inversión. Define cómo medir el impacto: la encuesta post-evento (qué preguntas hacer y cuáles evitar), el eNPS antes y después, los indicadores de cultura a 90 días (retención, participación en iniciativas voluntarias, colaboración entre equipos) y cómo presentar estos resultados al liderazgo.

Cierra con la lista de los cinco errores más comunes en eventos corporativos que matan el engagement, con una alternativa concreta para cada uno.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseño de all-hands, retreats y eventos internos que refuerzan la cultura y el sentido de pertenencia.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Investor relations events',
                'description'      => 'Gestiona los roadshows, los earnings calls en vivo y los investor days que mantienen la confianza de los accionistas y analistas en momentos de incertidumbre.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de investor relations con experiencia en compañías cotizadas y en rondas de capital privado. Has gestionado roadshows en múltiples geografías, earnings calls trimestrales y investor days anuales en entornos de alta presión, donde cada palabra cuenta y donde la confianza de los inversores puede construirse o destruirse en una sola sesión.

Necesito preparar un evento para inversores. Para darte el mejor asesoramiento, primero pregúntame:

1. ¿Qué tipo de evento es: earnings call trimestral, investor day anual, roadshow de captación de capital, NDR (non-deal roadshow) o presentación a analistas?
2. ¿La empresa es cotizada en bolsa o de capital privado (VC/PE)?
3. ¿Cuál es el contexto: buenos resultados que hay que capitalizar, resultados por debajo de las expectativas que hay que gestionar, o una ronda de capital en proceso?
4. ¿A qué tipo de inversor te diriges: institucional (fondos, gestoras), retail (accionistas individuales), analistas de sell-side o inversores de capital riesgo?
5. ¿Cuál es el mensaje principal que quieres que los inversores se lleven de este evento?

Con esas respuestas, diseña la estrategia completa del evento:

**1. La narrativa financiera: más allá de los números**
Los inversores no compran números, compran confianza en la capacidad del equipo de generar valor en el futuro. Define la narrativa que conecta los resultados actuales con la visión a largo plazo: el mercado direccionable, la ventaja competitiva defensible, las palancas de crecimiento que aún no se han activado y la calidad del equipo. Explica cómo ordenar estos elementos para que el mensaje sea claro incluso para el inversor que dedica 10 minutos a la presentación.

**2. Estructura de la presentación para cada formato**
Cada formato tiene sus convenciones y sus expectativas. Define la estructura óptima para: el earnings call (resultados, guidance, Q&A con analistas), el investor day (visión a 3-5 años, presentaciones de los líderes de cada unidad de negocio, demo de producto si aplica, sesión de preguntas) y el roadshow (el pitch de 45 minutos que se repite 8 veces al día ante distintos audiencias). Incluye los materiales que se esperan en cada caso.

**3. Gestión de las malas noticias y de los momentos difíciles**
El test de un buen IR es cómo gestiona los resultados negativos. Define el protocolo para un earnings call con resultados por debajo del guidance: cuándo y cómo comunicar la desviación antes del evento, cómo estructurar la explicación (contexto, causa raíz, acciones correctoras, timeline), qué preguntas difíciles de analistas hay que anticipar y cómo responderlas sin mentir ni dar más información de la necesaria.

**4. El Q&A con analistas e inversores**
El Q&A es donde se pierde o se gana la credibilidad. Diseña el proceso de preparación: la lista de las 20 preguntas más probables, las respuestas modelo para las más sensibles, los mensajes que bajo ningún concepto se deben decir (forward-looking statements no validados, información material no pública) y la técnica para manejar preguntas hostiles o para las que no tienes respuesta en ese momento.

**5. Roadshow: la logística y la estrategia de audiencia**
Un roadshow es una maratón de ventas institucionales. Define cómo priorizar las reuniones (qué fondos visitar en cada ciudad, el equilibrio entre inversores actuales y potenciales), la gestión de la energía del management team a lo largo de semanas de viaje intensivo y cómo adaptar el pitch según el perfil del fondo (growth, value, quant, long-only, hedge fund).

**6. Seguimiento y gestión de la relación post-evento**
El evento es el comienzo de la conversación, no el final. Define el protocolo de seguimiento: las notas personalizadas a los inversores más relevantes, las respuestas a preguntas que quedaron pendientes, el sistema de CRM para IR y cómo mantener el acceso regular a los analistas entre los eventos trimestrales.

Cierra con los principios no negociables de comunicación con inversores que todo equipo de liderazgo debe interiorizar antes de enfrentarse a cualquier evento de IR.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Preparación y ejecución de roadshows, earnings calls e investor days para mantener la confianza de inversores.',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Conferencias legales y networking profesional',
                'description'      => 'Aprovecha las conferencias del sector jurídico para desarrollar negocio y mantenerte al día: la selección de eventos, la estrategia de networking y el ROI de tu presencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado senior con una práctica de desarrollo de negocio consolidada. Sabes que en el sector jurídico la reputación y las relaciones son el activo más valioso, y que las conferencias y eventos del sector son uno de los pocos contextos donde se construyen ambas cosas de forma eficiente si se saben aprovechar.

Quiero sacar más partido a las conferencias y eventos jurídicos. Antes de asesorarme, pregúntame:

1. ¿Cuál es tu especialidad jurídica y en qué tipo de firma trabajas (boutique, generalista, Big Law, departamento legal interno)?
2. ¿Cuál es tu objetivo en los eventos: captar nuevos clientes, fortalecer relaciones con clientes actuales, construir reputación como experto o mantenerte al día en tu área de práctica?
3. ¿Qué tipo de eventos frecuentas o te gustaría frecuentar: congresos de asociaciones profesionales, conferencias de industria, cenas de sector, eventos de barras de abogados?
4. ¿Con qué presupuesto y tiempo disponible cuentas para eventos al año?
5. ¿Qué no está funcionando en tu networking actual o qué resultado esperas que sea diferente?

Con esa información, desarrolla la estrategia completa:

**1. Selección de eventos donde vale la pena estar**
No todos los eventos merecen tu tiempo y presupuesto. Define el criterio de selección: la audiencia del evento (¿están tus clientes objetivo o solo otros abogados?), la reputación del evento en tu área de práctica, las oportunidades de visibilidad (ponencias, mesas redondas, publicaciones del programa), el formato de networking y la relación coste-oportunidad. Incluye cómo evaluar si un evento nuevo merece el riesgo de asistir.

**2. La estrategia de visibilidad: de asistente a ponente**
Asistir a un congreso te expone a 200 personas. Hablar en él te expone a 2.000 y te posiciona como experto. Define el proceso para conseguir ponencias en los eventos más relevantes de tu área: cómo identificar los comités de programa, cómo redactar la propuesta de charla que destaca sobre las demás, los temas que posicionan sin ser demasiado técnicos para la audiencia no especialista y cómo usar cada ponencia para generar contactos antes, durante y después del evento.

**3. Networking jurídico: la conversación que no parece venta**
En el entorno jurídico la venta directa en un evento es un error de tono. Define la técnica de networking que construye relaciones sin presionar: las preguntas que hacen hablar al otro sobre su práctica y sus desafíos, cómo identificar si hay una oportunidad de colaboración o de referral sin preguntarlo explícitamente, y el arte de la salida elegante de una conversación que no va a ningún sitio para maximizar el tiempo disponible.

**4. Cenas, cocktails y eventos informales**
Los eventos paralelos (cenas de patrocinadores, cocktails de apertura, almuerzos de trabajo) son donde se toman las decisiones de relación. Define cómo aprovecharlos: la investigación previa de quién asiste, la técnica para integrarte en conversaciones ya iniciadas, cómo manejar la conversación durante una cena de trabajo y el uso estratégico del vino y la comida para crear el contexto de conversación relajada que el entorno formal de la conferencia no permite.

**5. Formación continua y actualización en conferencias**
Las conferencias son también una oportunidad de formación que muchos abogados desaprovechan al priorizar el networking sobre el contenido. Define cómo equilibrar ambas: qué sesiones son imprescindibles para tu práctica, cómo tomar notas que sean útiles después (no una transcripción de las ponencias sino los tres aprendizajes accionables), y cómo compartir lo aprendido con el equipo para multiplicar el valor de la asistencia.

**6. Follow-up y conversión de contactos en relaciones**
El networking se pierde sin seguimiento. Define el protocolo de los 7 días posteriores: el LinkedIn con nota personalizada, el email que hace referencia a una conversación específica, el artículo que les envías porque recordaste que les interesaba, y el proceso de incorporación a tu CRM de relaciones con el contexto necesario para retomarlo en el siguiente evento. Define también cuándo una relación de evento está lista para una conversación de negocio.

Cierra con el calendario anual de eventos que recomendarías para un abogado de [su especialidad] que quiere construir una reputación sólida en los próximos tres años.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Estrategia de networking y desarrollo de negocio en conferencias y eventos del sector jurídico.',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer events y comunidades de usuarios',
                'description'      => 'Organiza user conferences, advisory boards y meetups de clientes que fortalecen la relación y generan upsell: el formato y la dinámica que hace que los clientes quieran volver.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de customer success con especialización en programas de comunidad de clientes. Has diseñado y gestionado user conferences, advisory boards de clientes estratégicos y programas de meetups regionales que han tenido un impacto medible en la retención, el upsell y el NPS de la empresa.

Quiero diseñar un programa de eventos para mis clientes. Para ayudarme bien, primero pregúntame:

1. ¿Qué tipo de evento o programa quieres crear: user conference anual, advisory board de clientes estratégicos, meetups regionales o programa de comunidad online?
2. ¿Cuántos clientes activos tienes y cuál es el perfil (empresa, tamaño, sector)?
3. ¿Cuál es el objetivo principal: retención y reducción de churn, upsell, feedback de producto, referencias o todo lo anterior?
4. ¿Tienes presupuesto para producción de evento o necesitas un formato de bajo coste?
5. ¿Has organizado antes eventos para clientes o es tu primera vez?

Con esas respuestas, diseña el programa completo:

**1. La user conference como hito anual de la relación**
Una user conference bien diseñada es el momento del año en que los clientes recuerdan por qué eligieron tu producto y descubren por qué seguir. Define la arquitectura: el keynote de visión de producto que genera expectación, las sesiones de casos de uso protagonizadas por clientes (que convierten a los mejores clientes en tus mejores vendedores), los workshops de hands-on para profundizar en funcionalidades avanzadas y el espacio de networking entre clientes que genera las conversaciones más valiosas del evento.

**2. El advisory board: cuando los mejores clientes co-diseñan el producto**
Un customer advisory board no es un focus group ni una sesión de quejas. Es un foro donde los clientes más estratégicos co-diseñan el futuro del producto y la empresa les da acceso privilegiado a cambio. Define los criterios de selección de los miembros (representatividad, nivel de engagement, diversidad de casos de uso), la dinámica de las sesiones (dos al año, con agenda co-creada), los compromisos mutuos y cómo gestionar las expectativas cuando el feedback no se puede implementar.

**3. Meetups regionales y comunidades locales**
Cuando los clientes se conocen entre sí, el churn baja. Los meetups regionales crean comunidad local y reducen el riesgo de que un cliente abandone porque siente que el proveedor es lejano. Define el formato (cena con ponencia de cliente, workshop práctico, visita a las oficinas de un cliente), el proceso para identificar champions locales que co-organicen el evento y cómo escalar el programa de meetups sin que el equipo de CS colapse.

**4. Comunidad online de clientes: el espacio entre eventos**
Los eventos crean momentos, la comunidad online mantiene la relación 365 días al año. Define la plataforma (Slack, Discord, Circle, comunidad nativa del producto), la estrategia de contenidos que mantiene la comunidad activa (preguntas de la semana, casos de éxito, acceso anticipado a releases, AMA con el equipo de producto), el programa de moderación y los incentivos para los miembros más activos.

**5. Oportunidades de upsell y expansión en eventos de clientes**
Los eventos de clientes son el contexto más natural para las conversaciones de expansión porque no son ventas, son conversaciones entre éxitos. Define cómo integrar el upsell en el evento sin que parezca una venta: las sesiones de "qué más puedes hacer con el producto" que los propios clientes avanzados protagonizan, las conversaciones 1:1 con el equipo de CS o de ventas integradas en el programa, y el seguimiento post-evento que convierte el entusiasmo del evento en una conversación de expansión calificada.

**6. Métricas de impacto de los programas de comunidad**
Define los KPIs que conectan los eventos de clientes con los resultados de negocio: retención de los clientes que asisten vs. los que no, NPS de clientes participantes en la comunidad vs. los que no, pipeline de upsell generado en los 90 días posteriores al evento y coste por cliente retenido vs. coste de adquisición de un nuevo cliente equivalente.

Termina con el discurso que darías al CEO para justificar la inversión en un programa de comunidad de clientes cuando el presupuesto está ajustado y el equipo de ventas reclama más recursos para adquisición.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseño de user conferences, advisory boards y comunidades de clientes que refuerzan la retención y generan upsell.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Speaking y ponencias como herramienta de captación para freelances',
                'description'      => 'El freelance que habla en conferencias para generar clientes: cómo proponer charlas, estructurarlas y convertir las preguntas del Q&A en conversaciones de negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior con una agenda llena gracias en gran parte a su presencia como ponente en conferencias del sector. Sabes que hablar en el escenario correcto delante de la audiencia correcta con el mensaje correcto puede generar más clientes en 45 minutos que seis meses de cold outreach, y sabes exactamente cómo construir esa máquina.

Quiero usar las ponencias como canal de captación de clientes. Para asesorarme, primero pregúntame:

1. ¿Cuál es tu especialidad como freelance y qué tipo de cliente buscas atraer?
2. ¿Tienes experiencia como ponente o es algo que quieres empezar desde cero?
3. ¿Cuál es tu objetivo a corto plazo: conseguir tu primera ponencia en un evento pequeño o acceder a conferencias de mayor visibilidad?
4. ¿Qué eventos del sector sigues o donde te gustaría hablar?
5. ¿Tienes contenido propio (estudios, metodologías, casos de éxito) que pueda ser la base de una charla?

Con esas respuestas, diseña la estrategia completa de speaking como canal de negocio:

**1. El posicionamiento del ponente**
Antes de proponer una charla, necesitas saber qué punto de vista único tienes que aportar. Define tu POV de ponente: la intersección entre lo que sabes mejor que nadie, lo que tu audiencia objetivo necesita escuchar y lo que los organizadores de eventos quieren en su programa. El ponente que habla sobre lo mismo que todos los demás no genera agenda, habla sobre las cosas incómodas o contraintuitivas de su área de expertise.

**2. Cómo proponer charlas que los organizadores aceptan**
La mayoría de propuestas de charla son rechazadas porque son demasiado genéricas o demasiado centradas en el ponente. Define la anatomía de una propuesta que destaca: el título que genera curiosidad, el abstract que promete una transformación concreta para el asistente, los datos de autoridad que demuestran que tienes algo que aportar y la adaptación al perfil de la audiencia de cada evento. Incluye la estrategia de outreach a los organizadores antes de enviar la propuesta.

**3. La estructura de la charla que genera clientes**
Una charla de captación no es un anuncio de tus servicios. Es una demostración en vivo de tu expertise que hace que la audiencia piense "necesito trabajar con esta persona". Define la estructura: el gancho de apertura que establece el problema mejor de lo que ellos mismos lo articularían, el framework o metodología que es tuyo y que solo puedes aprender trabajando contigo, los casos de éxito anónimos que prueban que funciona, y el cierre que deja a la audiencia con una victoria inmediata y la sensación de que hay mucho más que descubrir.

**4. El Q&A como sala de reuniones en público**
El Q&A no es un trámite, es la parte más valiosa de la ponencia para el negocio. Define cómo manejarlo: las preguntas que casi siempre aparecen en tu área y cómo convertirlas en una conversación que profundiza en el expertise (no que la corta con una respuesta de 30 segundos), cómo identificar en las preguntas al cliente potencial que está describiendo su problema, y cómo invitar a continuar la conversación de forma natural sin que parezca un cierre de venta.

**5. El after-talk: las conversaciones que generan negocio**
Las mejores conversaciones pasan después de la charla, cuando la gente se acerca. Define cómo manejar ese momento: la transición del escenario al networking, cómo gestionar la cola de personas que quieren hablar contigo sin perder la conversación más valiosa, la pregunta que hace que una conversación informal se convierta en una reunión agendada y cómo recoger contactos sin que parezca una recolección de leads.

**6. La amplificación del speaking más allá del evento**
Una charla que solo ven los asistentes al evento tiene un ROI limitado. Define cómo multiplicar el alcance: la grabación y publicación del vídeo, el artículo que desarrolla la charla en profundidad, el hilo de LinkedIn que la resume en formato redes, el podcast en el que expandes los puntos más resonantes y la newsletter que convierte la charla en contenido de suscriptores. El objetivo es que una ponencia de 45 minutos genere contenido durante tres meses.

Termina con el plan de acción para los próximos 90 días: las acciones concretas para conseguir la primera ponencia y construir la credibilidad de ponente desde cero si empiezas de cero, o para escalar a eventos más grandes si ya tienes algo de experiencia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Estrategia de speaking en conferencias para generar clientes como freelance.',
                'vote_score'       => 45,
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
