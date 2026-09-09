<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills229Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Personal branding del profesional de marketing',
                'description'       => 'El marketer que es su propia marca: la presencia en LinkedIn, el contenido de opinión y la reputación profesional que atrae ofertas, clientes y oportunidades sin buscarlas activamente.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en personal branding para profesionales del marketing con experiencia ayudando a marketers a construir una presencia digital que genera oportunidades inbound sin necesidad de buscarlas activamente. Necesito tu ayuda para diseñar mi estrategia de personal branding como profesional de marketing.

Mi contexto:
- Especialidad de marketing en la que trabajo: [SEO, performance, brand, contenidos, growth, product marketing, etc.]
- Años de experiencia y nivel actual: [junior / mid / senior / director / VP]
- Presencia digital actual: [sin LinkedIn activo / perfil básico / publico ocasionalmente / ya tengo cierta audiencia]
- Objetivo principal del personal branding: [atraer ofertas de trabajo / conseguir clientes como freelance / posicionarme como referente / construir una audiencia para un futuro proyecto]
- Principal bloqueo para publicar contenido: [no sé de qué hablar / no tengo tiempo / miedo a parecer presuntuoso / no sé cómo escribir en LinkedIn]

Con ese contexto, dame:

1. LA ESTRATEGIA DE POSICIONAMIENTO: DE QUÉ HABLAS Y POR QUÉ
¿Cómo encuentro el nicho de contenido que me diferencia como profesional de marketing en un LinkedIn lleno de marketers que publican lo mismo? Explícame el proceso de definición del posicionamiento personal: la intersección entre lo que sabes mejor que la mayoría (tu expertise diferencial), lo que el mercado busca y valora (las preguntas que la gente hace en comunidades de marketing), y lo que te interesa genuinamente hablar durante años sin aburrirte. Dame el ejercicio concreto para identificar los tres o cuatro temas en los que puedo ser una voz diferencial, y cómo definir el punto de vista propio que hace que mi contenido sea reconocible y no genérico.

2. EL PERFIL DE LINKEDIN QUE POSICIONA: CADA CAMPO IMPORTA
¿Cómo optimizo mi perfil de LinkedIn para que quien llega a él entienda en diez segundos por qué merece la pena seguirme y contactarme? Dame la guía de optimización de cada campo del perfil: el titular que no dice solo el cargo sino el problema que resuelvo o la perspectiva que ofrezco, el about que cuenta mi historia de forma que conecta con la audiencia que quiero atraer (sin que sea solo un CV en prosa), la sección de experiencia que destaca los resultados y el impacto (no las responsabilidades), los skills y endorsements que refuerzan el posicionamiento, y la foto y el banner que comunican profesionalidad sin ser genéricos.

3. LA ESTRATEGIA DE CONTENIDO: QUÉ PUBLICAR Y CON QUÉ FRECUENCIA
¿Qué tipos de contenido funcionan mejor para un profesional de marketing que quiere construir autoridad en LinkedIn sin dedicar horas al día? Dame el sistema de contenido sostenible: los formatos que mejor funcionan para el posicionamiento de autoridad (análisis de campañas, opiniones sobre tendencias del sector, lecciones aprendidas de proyectos reales, detrás de las bambalinas de tu trabajo), la frecuencia realista que construye audiencia sin que la calidad baje (por qué tres posts de calidad a la semana superan a un post diario mediocre), el calendario editorial que hace que el contenido fluya sin bloqueo creativo, y cómo reutilizar el trabajo del día a día como materia prima del contenido sin revelar información confidencial.

4. EL CONTENIDO DE OPINIÓN: LA PALANCA DE AUTORIDAD MÁS POTENTE
¿Por qué el contenido de opinión genera más credibilidad que el contenido educativo y cómo escribirlo sin caer en la polémica vacía? Explícame la diferencia entre el post de opinión que posiciona (tiene un punto de vista claro, argumentado con datos o experiencia, que desafía una idea establecida del sector) y el post de opinión que irrita (provocación sin sustancia, clickbait negativo). Dame el proceso de construcción de un post de opinión: cómo identificar las ideas convencionales del sector que puedo rebatir con mi experiencia, cómo estructurar el argumento de forma que sea convincente sin ser arrogante, y cómo manejar el desacuerdo en los comentarios de forma que refuerce mi credibilidad en lugar de destruirla.

5. CONSTRUIR AUDIENCIA: DE 0 A LOS PRIMEROS 5.000 SEGUIDORES
¿Cuál es la estrategia para construir audiencia en LinkedIn cuando empiezo desde cero o casi desde cero? Dame el plan de crecimiento de audiencia en las tres fases: la fase de arranque donde el contenido de calidad no basta y necesito la interacción activa con otras cuentas para ganar visibilidad (a quién comentar, cómo comentar para que mi nombre se recuerde), la fase de crecimiento donde el algoritmo empieza a distribuir mi contenido a audiencias nuevas y cómo capitalizar ese momento, y la fase de consolidación donde la audiencia ya crece de forma orgánica y el foco cambia de crecer a profundizar la relación. ¿Cuánto tiempo realista tarda cada fase?

6. MONETIZAR LA AUDIENCIA: CÓMO EL PERSONAL BRANDING SE CONVIERTE EN OPORTUNIDADES REALES
¿Cómo se convierte la audiencia de LinkedIn en ofertas de trabajo, clientes freelance, colaboraciones o proyectos propios? Dame el mapa de conversión de audiencia a oportunidades: cómo diseño el perfil para que sea evidente qué tipo de oportunidades acepto (consultoría, charlas, proyectos freelance, posiciones de empleo), cómo uso el contenido para señalar mis disponibilidad sin parecerlo, cómo gestiono el inbound de oportunidades sin que consuma todo mi tiempo, y cómo evalúo cuándo una audiencia de LinkedIn es suficientemente grande para lanzar un servicio propio (newsletter de pago, consultoría, curso, comunidad).

7. MÉTRICAS Y EVOLUCIÓN: CÓMO SABER SI EL PERSONAL BRANDING ESTÁ FUNCIONANDO
¿Cómo mido si mi estrategia de personal branding está generando el impacto correcto o si necesito cambiar de enfoque? Dame el sistema de métricas de personal branding: las métricas que indican crecimiento de audiencia (seguidores, impresiones, alcance), las que indican autoridad (comentarios de calidad, compartidos de referentes del sector, menciones en otros contenidos), las que indican conversión (mensajes directos con oportunidades, invitaciones a charlas, solicitudes de consultoría), y cómo revisar la estrategia cada trimestre para ajustar el posicionamiento sin perder la continuidad que construye reconocimiento.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar la estrategia de personal branding del profesional de marketing: posicionamiento, contenido en LinkedIn y conversión de audiencia en oportunidades reales.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Developer advocacy: ser la voz de la comunidad técnica',
                'description'       => 'El developer advocate que construye relaciones entre su empresa y la comunidad de developers: las charlas, el contenido técnico y la presencia en eventos que genera confianza y adopción del producto.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en developer relations y developer advocacy con experiencia construyendo programas de DevRel en empresas de tecnología desde early-stage hasta escala. Necesito tu ayuda para diseñar mi estrategia como developer advocate o para construir la función de DevRel en mi empresa.

Mi contexto:
- Rol actual o que quiero ocupar: [developer advocate individual / head of DevRel / engineering con responsabilidades de DevRel / founder que hace DevRel]
- Producto o plataforma que representa: [API, SDK, framework, infraestructura, herramienta de desarrollo, etc.]
- Comunidad de developers a la que me dirijo: [describe el perfil: lenguaje, stack, nivel, sector]
- Estado actual del programa de DevRel: [no existe / empezando desde cero / ya hay actividades pero sin estrategia / programa establecido que necesita escalar]
- Principal objetivo del DevRel ahora mismo: [generar adopción del producto / construir credibilidad técnica / aumentar la comunidad / retener a los developers actuales]

Con ese contexto, dame:

1. QUÉ ES EL DEVELOPER ADVOCACY Y POR QUÉ ES DIFERENTE DEL MARKETING TÉCNICO
¿Cuál es la diferencia fundamental entre el developer advocacy y el marketing técnico y por qué los developers detectan inmediatamente cuál es cuál? Explícame el principio central del DevRel: el developer advocate trabaja para la comunidad de developers aunque lo pague la empresa (su credibilidad depende de que la comunidad lo perciba como alguien que los representa, no como alguien que los vende), por qué los developers son el público más resistente al marketing convencional y más receptivo al contenido técnico honesto, y cómo el developer advocate equilibra los intereses de la empresa (adopción del producto) con los de la comunidad (aprender, resolver problemas reales, conectar con otros developers).

2. EL CONTENIDO TÉCNICO QUE CONSTRUYE CREDIBILIDAD: QUÉ CREAR Y CÓMO
¿Qué tipos de contenido técnico generan más confianza y adopción entre los developers? Dame el sistema de contenido técnico de un developer advocate: los tutoriales y guías de inicio rápido que reducen el tiempo hasta el primer éxito con el producto (por qué la experiencia del developer en los primeros treinta minutos determina la adopción a largo plazo), los posts técnicos en profundidad que resuelven problemas reales de la comunidad (cómo los identifico escuchando en Stack Overflow, GitHub Issues, Discord, Reddit), los vídeos y livestreams que muestran el producto en acción con casos de uso reales, y los posts de opinión técnica que posicionan al advocate como alguien con criterio y no solo como portavoz de la empresa.

3. CHARLAS EN CONFERENCIAS Y MEETUPS: CÓMO HACERLAS BIEN
¿Cómo diseño y ejecuto charlas técnicas que la comunidad recuerda y que generan adopción del producto sin que parezcan un pitch de ventas? Dame el proceso completo de la charla de developer advocate: cómo identificar los temas que la comunidad de developers quiere escuchar (la diferencia entre la charla que el marketing quiere y la que la audiencia necesita), cómo construir el abstract que los comités de conferencias aceptan, la estructura de la charla que combina valor técnico real con la historia del producto de forma que no rechina, cómo hacer el live coding que funciona bajo presión sin que el demo falle en el peor momento, y cómo aprovechar la charla para generar contenido adicional (post, vídeo, repositorio de GitHub) que multiplica su impacto más allá del evento.

4. CONSTRUIR COMUNIDAD: DISCORD, GITHUB Y LOS CANALES QUE FUNCIONAN
¿Cómo construyo y mantengo una comunidad activa de developers alrededor del producto? Dame la estrategia de community building para DevRel: los canales donde los developers de mi stack están activamente (Discord versus Slack versus Reddit versus GitHub Discussions según el tipo de comunidad), cómo arrancar una comunidad desde cero cuando nadie quiere ser el primero en unirse, las prácticas de moderación y engagement que mantienen la comunidad activa sin que dependa de mí para estar viva, cómo gestionar el feedback negativo de la comunidad de forma que refuerce la confianza (los developers respetan más al advocate que reconoce los problemas del producto y los lleva al equipo de producto que al que los defiende), y cómo medir la salud de la comunidad.

5. EL FEEDBACK LOOP: CÓMO EL DEVREL MEJORA EL PRODUCTO
¿Cómo convierto el feedback de la comunidad de developers en inputs concretos para el equipo de producto e ingeniería? Dame el sistema de feedback loop del DevRel: cómo recojo el feedback de la comunidad de forma sistemática (los problemas recurrentes en Discord, los issues más votados en GitHub, los comentarios en los tutoriales), cómo lo proceso y lo priorizo antes de llevarlo al equipo de producto (la diferencia entre el feedback que refleja una necesidad real y el que es ruido), cómo participo en el planning de producto para que la voz de la comunidad tenga peso en las decisiones, y cómo cierro el loop con la comunidad cuando el feedback genera un cambio (por qué comunicar esto bien multiplica la confianza y la participación).

6. MÉTRICAS DE DEVREL: CÓMO DEMOSTRAR EL VALOR AL NEGOCIO
¿Cómo mido el impacto del developer advocacy de forma que el CEO y el CFO lo entiendan sin caer en métricas de vanidad? Dame el sistema de métricas de DevRel: las métricas de awareness (reach del contenido técnico, asistentes a charlas, tamaño de la comunidad), las de adopción (nuevas registraciones al producto atribuidas a canales de DevRel, tiempo hasta el primer éxito de los developers que entran por canales de DevRel), las de retención y engagement de la comunidad (DAU/MAU del Discord, contribuciones al repositorio, ratio de preguntas respondidas por la comunidad sin intervención del equipo), y cómo construir el caso de negocio del DevRel cuando la empresa quiere cortar el presupuesto porque el impacto no es evidente.

7. PERSONAL BRANDING DEL DEVELOPER ADVOCATE: SER RECONOCIDO EN LA COMUNIDAD
¿Cómo construyo mi propia marca como developer advocate de forma que mi credibilidad en la comunidad sea un activo tanto para la empresa como para mí? Dame la estrategia de personal branding del developer advocate: cómo publicar contenido técnico propio que no está solo ligado al producto de la empresa (por qué el advocate que solo habla del producto de su empresa tiene menos credibilidad que el que tiene opiniones técnicas propias), cómo participar en proyectos open source que refuerzan mi credibilidad técnica, cómo construir relaciones auténticas con otros developer advocates y con los referentes técnicos de la comunidad, y cómo gestionar la transición cuando cambio de empresa sin perder el capital de relaciones construido.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar la estrategia de developer advocacy: contenido técnico, charlas, comunidad y feedback loop que genera adopción y credibilidad en la comunidad de developers.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Influencia del diseñador en la organización',
                'description'       => 'El diseñador que cambia cómo la empresa toma decisiones: las técnicas de influencia sin autoridad, la educación de stakeholders y el proceso de construir credibilidad que hace que el punto de vista del diseño sea escuchado en la sala de decisiones.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en liderazgo de diseño y en la influencia organizacional del diseñador con experiencia ayudando a profesionales del diseño a tener impacto más allá de la entrega de assets. Necesito tu ayuda para construir mi influencia como diseñador en la organización y para que el punto de vista del diseño sea escuchado donde se toman las decisiones.

Mi contexto:
- Rol actual: [diseñador individual / design lead / head of design / UX researcher / product designer]
- Tamaño y tipo de empresa: [startup / empresa mediana / corporación / agencia]
- Relación actual con producto y negocio: [somos ejecutores / colaboramos en la definición / tenemos asiento en las decisiones estratégicas]
- Principal bloqueo a la influencia del diseño ahora mismo: [nos piden pantallas sin explicar el problema / nuestras propuestas se cambian sin argumentos / no nos incluyen en las reuniones clave / el CEO tiene demasiada opinión sobre el diseño]
- Objetivo: [tener más peso en el planning de producto / cambiar el proceso de toma de decisiones / conseguir más recursos para el equipo de diseño / ser incluido en decisiones estratégicas]

Con ese contexto, dame:

1. POR QUÉ LOS DISEÑADORES PIERDEN INFLUENCIA: LAS CAUSAS RAÍZ
¿Por qué los equipos de diseño con talento técnico excepcional a menudo tienen poca influencia sobre las decisiones de producto y de negocio? Explícame las causas raíz de la falta de influencia del diseño en las organizaciones: el diseñador que entrega soluciones sin haber participado en la definición del problema (y por eso siempre llega tarde a las conversaciones importantes), el diseño que se presenta como estética y no como argumento de negocio (por qué los stakeholders no financieros no valoran lo que no entienden), la falta de métricas que conecten el diseño con resultados de negocio (el diseño que no puede demostrar su impacto no puede justificar su inversión), y el diseñador que acepta las decisiones malas en silencio en lugar de articular su desacuerdo con datos.

2. INFLUENCIA SIN AUTORIDAD: LAS TÉCNICAS QUE FUNCIONAN
¿Cómo influyo en las decisiones de producto y de negocio cuando no tengo autoridad formal sobre las personas que toman esas decisiones? Dame las técnicas de influencia sin autoridad aplicadas al diseño: cómo usar el proceso de diseño como herramienta de alineación (los talleres de definición de problema que crean ownership compartido antes de proponer soluciones), cómo presentar las opciones de diseño en términos de trade-offs de negocio que los stakeholders entienden (no como "me gusta esto más" sino como "esta opción maximiza la conversión a costa de la retención"), cómo usar los datos de usuario y las métricas de producto como argumento irrebatible frente a las opiniones subjetivas, y cómo construir alianzas con PM y con engineering para que el diseño tenga voz en las conversaciones donde no estamos invitados.

3. EDUCAR A LOS STAKEHOLDERS: CÓMO HACER QUE EL NEGOCIO VALORE EL DISEÑO
¿Cómo cambio la percepción del diseño en la organización de "los que hacen las pantallas bonitas" a "los que resuelven problemas que impactan en el negocio"? Dame el plan de educación de stakeholders: cómo diseño las presentaciones de diseño para que el CEO o el CPO entiendan el valor sin necesitar formación previa en UX (la diferencia entre mostrar el proceso y mostrar el impacto), cómo uso las métricas de negocio para conectar las decisiones de diseño con los resultados que la organización mide (retención, conversión, NPS, tiempo hasta el primer valor), cómo comparto los insights de usuario de forma regular con el equipo de producto y de negocio para que el diseño sea percibido como el guardián del conocimiento del usuario, y cómo celebro los éxitos del diseño en términos que la organización reconoce.

4. DEFENDER EL DISEÑO EN LAS REUNIONES: CÓMO RESPONDER A LAS CRÍTICAS
¿Cómo defiendo las decisiones de diseño cuando en las reuniones hay opiniones contrarias de stakeholders con más jerarquía? Dame el protocolo de defensa del diseño: cómo diferenciar el feedback válido basado en datos de usuario o en criterios de negocio del feedback que es preferencia estética personal, cómo responder a la crítica del CEO que dice que prefiere otro color o que el botón debería estar más arriba sin crear conflicto pero sin ceder sin argumento, cómo usar el prototipo y el test de usuario como árbitro objetivo de las disputas de diseño (el usuario tiene más autoridad que cualquier opinión interna), y cómo gestionar la situación donde el stakeholder tiene la última palabra y el diseño se cambia a peor: cuándo ceder, cuándo insistir y cuándo documentar el desacuerdo para aprender de las consecuencias.

5. CONSTRUIR CREDIBILIDAD: EL LARGO PLAZO DE LA INFLUENCIA
¿Cómo construyo la credibilidad que hace que mi punto de vista sea buscado en lugar de tolerado? Dame el plan de construcción de credibilidad del diseñador en la organización: el portfolio interno de decisiones de diseño con impacto demostrable (los proyectos donde el diseño cambió una métrica de negocio y puedo demostrarlo con números), la presencia en las reuniones de planning y de estrategia donde el diseño normalmente no está (cómo consigo la invitación y cómo aporto valor cuando estoy allí), la relación de confianza con el CPO o con el CEO que hace que el diseño sea consultado en decisiones estratégicas antes de que sean decisiones tomadas, y el proceso de mentoría de otros diseñadores que multiplica mi influencia a través del equipo.

6. EL DESIGN SEAT AT THE TABLE: CÓMO CONSEGUIRLO Y MANTENERLO
¿Qué significa tener un asiento real en la mesa de decisiones y cómo lo consigo? Explícame la diferencia entre estar invitado a las reuniones y tener voz que se escucha: el diseñador que está en todas las reuniones pero no cambia ninguna decisión versus el diseñador que participa en pocas reuniones pero cuando habla el resultado cambia. Dame el proceso de escalar la influencia del diseño: cómo me posiciono como partner estratégico del CPO y del CEO (no como proveedor interno de pantallas), cómo propongo iniciativas de diseño alineadas con los objetivos de negocio en lugar de esperar que me asignen trabajo, cómo uso los OKRs del equipo de diseño para demostrar que el diseño contribuye a los resultados de la empresa, y qué decisiones estratégicas debería liderar el diseño en una empresa madura (la arquitectura de información del producto, la estrategia de design system, la investigación de usuario como input del roadmap).

7. PERSONAL BRANDING DEL DISEÑADOR COMO PALANCA DE INFLUENCIA INTERNA
¿Cómo mi reputación externa como diseñador refuerza mi influencia dentro de la organización? Dame la estrategia de personal branding del diseñador que refuerza su posición interna: cómo compartir el trabajo de diseño en comunidades profesionales (Dribbble, Behance, LinkedIn, conferencias de diseño) de forma que la organización perciba el valor de tenerte, cómo participar en eventos del sector como ponente o como jurado que refuerza tu credibilidad interna, cómo usar el reconocimiento externo para justificar internamente inversiones en el equipo de diseño o en el proceso, y cómo equilibrar la visibilidad externa con el discreto trabajo de influencia interna que es donde realmente cambian las cosas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir influencia organizacional como diseñador: técnicas de persuasión sin autoridad, educación de stakeholders y credibilidad que hace que el punto de vista del diseño sea escuchado en las decisiones clave.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Thought leadership en ventas: el comercial que es referente',
                'description'       => 'El vendedor que genera inbound siendo un referente en su sector: el contenido que posiciona, las conferencias donde participa y la reputación que hace que los clientes prefieran comprarle a él antes de saber el precio.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en thought leadership para profesionales de ventas con experiencia ayudando a comerciales y líderes de ventas a construir una reputación de referente en su sector que genera oportunidades inbound. Necesito tu ayuda para construir mi posicionamiento como profesional de ventas que es conocido y buscado en su nicho.

Mi contexto:
- Sector o tipo de ventas en el que trabajo: [SaaS B2B, servicios profesionales, ventas enterprise, ventas transaccionales, etc.]
- Nivel actual: [SDR / AE / senior AE / sales manager / VP of Sales / director comercial]
- Presencia actual: [sin presencia digital / perfil de LinkedIn básico / publico ocasionalmente / ya tengo algo de audiencia]
- Objetivo principal: [abrir puertas con clientes que ya me conocen / atraer talento de ventas al equipo / generar oportunidades directas sin depender del marketing / posicionarme para un cambio de carrera]
- Sector o nicho al que quiero llegar con el contenido: [describe el perfil de tu audiencia ideal]

Con ese contexto, dame:

1. POR QUÉ EL THOUGHT LEADERSHIP CAMBIA EL PROCESO DE VENTA
¿Por qué un vendedor que es referente en su sector cierra deals con mayor facilidad y a mejores precios que uno que no lo es? Explícame la psicología del comprador moderno: cómo el comprador B2B investiga a los vendedores antes de aceptar reunirse con ellos (LinkedIn, Google, podcast, referencias de colegas), por qué el vendedor que el comprador ya conoce como referente empieza la conversación de venta desde una posición de confianza mientras que el desconocido empieza desde la resistencia, y cómo el thought leadership acorta el ciclo de venta, eleva el precio medio del contrato y reduce la dependencia de las llamadas en frío que cada vez funcionan peor.

2. EL POSICIONAMIENTO: QUÉ TEMAS SON TUYOS
¿Cómo elijo los temas en los que voy a construir mi autoridad como profesional de ventas sin perderme en la generalidad? Dame el proceso de definición del posicionamiento de thought leadership para un vendedor: la intersección entre tu experiencia real de ventas (los sectores donde has trabajado, los tipos de comprador que conoces mejor, los procesos de venta que dominas), los temas que el mercado busca activamente (las preguntas que tus compradores se hacen, los retos que mencionan en las conversaciones de discovery, los temas que los líderes de ventas discuten en comunidades), y el punto de vista propio que te diferencia (por qué no es suficiente repetir lo que dicen los libros de ventas populares y cómo articular una perspectiva basada en tu experiencia real).

3. EL CONTENIDO QUE POSICIONA: FORMATOS Y ESTRATEGIA
¿Qué tipos de contenido funcionan mejor para un profesional de ventas que quiere construir autoridad en LinkedIn? Dame la estrategia de contenido para el vendedor referente: los posts de análisis de situaciones de venta reales con lecciones concretas (la historia de la negociación que salió mal y lo que aprendí, sin revelar información confidencial del cliente), los posts de opinión sobre tendencias del sector de ventas (el futuro de las ventas B2B, el impacto de la IA en los equipos comerciales, el declive del outbound tradicional y las alternativas), los posts que comparten frameworks y herramientas propias de ventas que el vendedor ha desarrollado en su práctica (el proceso de discovery que uso, la estructura del email que abre conversaciones), y los posts que conectan con compradores compartiendo perspectivas sobre sus retos.

4. SOCIAL SELLING: CONVERTIR LA AUDIENCIA EN PIPELINE
¿Cómo uso la audiencia de LinkedIn para generar oportunidades de venta reales sin que parezca que todo el contenido es un pitch disfrazado? Dame el sistema de social selling basado en thought leadership: la diferencia entre el contenido que construye audiencia (de valor, sin agenda de venta) y las conversaciones que generan oportunidades (cómo identificar a los buyers que interactúan con mi contenido y cómo iniciar una conversación que no rompe la confianza), cómo uso el contenido como excusa para contactar con compradores potenciales (compartirles un post relevante para su situación en lugar del cold email genérico), cómo estructuro el DM que abre una conversación de negocio después de que alguien interactúa con mi contenido, y cómo mantengo la autenticidad del thought leadership cuando el objetivo final es vender.

5. LAS CONFERENCIAS Y LOS EVENTOS: CÓMO USARLOS PARA POSICIONARSE
¿Cómo uso mi participación en conferencias y eventos de sector para reforzar mi posicionamiento como referente de ventas? Dame la estrategia de presencia en eventos: cómo identificar los eventos donde están mis compradores y mis peers (la diferencia entre los eventos de ventas donde solo hay otros vendedores y los eventos de sector donde están los compradores), cómo conseguir un slot como ponente cuando todavía no soy conocido (el abstract que los comités aceptan, cómo usar el contenido publicado como credencial), cómo maximizar el networking en los eventos (las conversaciones que quiero tener y con quién), y cómo usar la experiencia del evento como materia prima de contenido para LinkedIn que amplifica el alcance más allá de los asistentes.

6. EL VENDEDOR REFERENTE DESDE UNA EMPRESA: CÓMO ALINEAR EL PERSONAL BRANDING CON LOS OBJETIVOS DE LA EMPRESA
¿Cómo construyo mi marca personal como vendedor sin entrar en conflicto con mi empleador actual? Dame el marco de alineación entre el personal branding del vendedor y los objetivos de la empresa: qué tipo de contenido refuerza tanto mi marca personal como la de la empresa (los casos de éxito de clientes que me posicionan a mí y generan leads para la empresa, los insights de mercado que demuestran que mi empresa entiende el sector), qué contenido es neutro y no hay conflicto (los frameworks de ventas generales, las opiniones sobre tendencias del mercado), y cómo gestionar las situaciones donde mi punto de vista en LinkedIn podría estar en tensión con el posicionamiento de la empresa. ¿Cómo hablo con mi manager sobre el personal branding antes de empezar?

7. MÉTRICAS: CÓMO SÉ QUE EL THOUGHT LEADERSHIP ESTÁ GENERANDO OPORTUNIDADES
¿Cómo mido si mi estrategia de thought leadership está generando oportunidades de venta reales y no solo likes en LinkedIn? Dame el sistema de métricas del vendedor referente: las métricas de audiencia (seguidores, impresiones, engagement), las de reconocimiento (menciones, invitaciones a charlas, citas de mi contenido por otros referentes), las de pipeline directamente atribuibles al thought leadership (oportunidades donde el comprador menciona que me conocía de LinkedIn, reuniones que se abren porque alguien ha compartido mi contenido), y cómo reporto el impacto del personal branding a mi manager o a la dirección de ventas para que lo apoyen en lugar de verlo como una distracción.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir el posicionamiento de thought leadership del vendedor que genera inbound: contenido que posiciona, social selling y conversión de audiencia en pipeline.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'PM thought leadership: construir autoridad en producto',
                'description'       => 'El product manager que tiene opinión y la comparte: el contenido de producto, los frameworks propios y la presencia en la comunidad que construye reputación y atrae oportunidades fuera de la empresa.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en personal branding para product managers con experiencia ayudando a PMs a construir una presencia pública que refuerza su carrera, atrae oportunidades y contribuye a la comunidad de producto. Necesito tu ayuda para desarrollar mi thought leadership como product manager.

Mi contexto:
- Nivel actual como PM: [APM / PM / senior PM / principal PM / director of product / CPO]
- Tipo de producto en el que trabajo: [B2B SaaS, consumer, marketplace, plataforma, producto interno, etc.]
- Especialidad o área de expertise dentro del producto: [growth, discovery, plataforma, mobile, B2B enterprise, etc.]
- Presencia digital actual: [sin presencia / perfil de LinkedIn básico / publico ocasionalmente / ya tengo audiencia]
- Objetivo del thought leadership: [escalar a senior o director / atraer ofertas de otras empresas / construir credibilidad para lanzar un producto propio / contribuir a la comunidad de PM]

Con ese contexto, dame:

1. POR QUÉ EL PM CON OPINIÓN PÚBLICA AVANZA MÁS RÁPIDO
¿Cuál es el impacto concreto del thought leadership en la carrera de un product manager? Explícame los mecanismos: el PM que publica contenido de producto es evaluado por los reclutadores y los hiring managers antes de la primera entrevista (su contenido es su portfolio de pensamiento de producto), el PM que es referente en LinkedIn recibe oportunidades de trabajo antes de que se publiquen porque los hiring managers ya lo conocen, el PM que comparte sus frameworks y su forma de pensar el producto construye credibilidad que acelera las conversaciones con inversores si quiere lanzar su propio producto, y el PM que contribuye a la comunidad recibe feedback que mejora su pensamiento de producto más rápido que el que trabaja en silencio.

2. EL POSICIONAMIENTO DEL PM: EN QUÉ ERES DIFERENTE
¿Cómo encuentro el nicho temático donde puedo ser una voz diferencial en una comunidad de PM que ya está saturada de contenido genérico? Dame el proceso de definición del posicionamiento del PM: la combinación única de tu experiencia (el tipo de producto, el sector, el stage de la empresa, los problemas que has resuelto) que no tiene nadie más, los temas donde tu perspectiva difiere de la sabiduría convencional de la comunidad de PM (por qué el desacuerdo con las ideas establecidas es más memorable que el contenido de consenso), los frameworks que has desarrollado en tu práctica real que resuelven problemas que otros PMs tienen, y cómo articular tu punto de vista de forma que sea reconocible y consistente.

3. EL CONTENIDO DE PRODUCTO QUE GENERA REPUTACIÓN
¿Qué tipos de contenido construyen más autoridad para un PM en LinkedIn, Twitter o en el newsletter propio? Dame el sistema de contenido del PM thought leader: los posts de detrás de las bambalinas del proceso de producto (la historia del feature que desarrollé, la decisión de roadmap que tomé con datos incompletos y por qué), los análisis de productos de terceros que demuestran criterio de producto (el teardown de la experiencia de un producto conocido, el análisis de la estrategia de producto de una empresa), los frameworks propios que resuelven problemas concretos de PM (mi proceso de discovery, mi forma de escribir PRDs, mi sistema de priorización), y los posts de opinión sobre el futuro del rol de PM y de la gestión de productos.

4. LOS FRAMEWORKS PROPIOS: EL ACTIVO MÁS VALIOSO DEL PM
¿Por qué los PMs que crean y nombran frameworks propios construyen una autoridad que dura más que el contenido genérico? Explícame la mecánica del framework como herramienta de thought leadership: cómo identifico los problemas recurrentes de mi práctica de PM que tienen una solución sistemática (los que resuelvo con el mismo proceso cada vez), cómo convierto ese proceso en un framework nombrado y explicable en tres pasos que otros PMs pueden aplicar, cómo lo publico de forma que sea atribuible a mí (el nombre, el diagrama, el ejemplo de aplicación), y cómo lo refino con el feedback de la comunidad para que sea más útil y más preciso. Dame ejemplos de PMs que han construido autoridad con frameworks propios y qué hicieron bien.

5. NEWSLETTER Y CONTENIDO LARGO: EL SIGUIENTE NIVEL
¿Cuándo tiene sentido lanzar un newsletter o un blog de producto y cómo lo construyo sin que muera en el tercer número? Dame el proceso de lanzamiento de un newsletter de producto: la validación del tema (cómo sé que hay una audiencia que quiere leer sobre mi perspectiva de producto antes de comprometer el tiempo), el formato que es sostenible a largo plazo (la frecuencia, la longitud, la estructura que puedo mantener además de mi trabajo como PM), las estrategias de distribución que hacen que el newsletter crezca más allá de mis contactos actuales, y cómo el newsletter se convierte en el centro de mi thought leadership que amplifica el impacto de todo el contenido que publico en otras plataformas.

6. PARTICIPAR EN LA COMUNIDAD DE PM: DÓNDE Y CÓMO
¿Cómo construyo relaciones reales en la comunidad de PM que refuerzan mi thought leadership y abren oportunidades? Dame el mapa de la comunidad de producto donde vale la pena estar: las conferencias de producto (Mind the Product, ProductSummit, los eventos locales) y cómo participar como ponente cuando todavía no soy conocido, las comunidades online de PM (Slack groups, Discord, comunidades específicas de tipos de producto), los podcasts de producto donde participar como invitado, y la estrategia de relaciones con otros PMs que es genuina y no oportunista. ¿Cuánto tiempo debería dedicar a la comunidad cada semana sin que afecte al trabajo?

7. CONVERTIR EL THOUGHT LEADERSHIP EN OPORTUNIDADES CONCRETAS
¿Cómo convierto la audiencia y la reputación construida en oportunidades de carrera, de consultoría o de negocio? Dame el sistema de conversión de thought leadership en oportunidades: cómo optimizo mi perfil de LinkedIn para que quien llega desde mi contenido entienda qué tipo de oportunidades acepto, cómo gestiono el inbound de recruiters y de empresas que quieren contratarme después de haber visto mi contenido (el filtro que uso para no perder tiempo con oportunidades que no encajan), cómo hago el outreach a empresas que me interesan usando mi contenido como credencial que elimina el cold approach, y cómo evalúo cuándo la audiencia es suficientemente grande para lanzar servicios de consultoría, un curso de PM o mi propio producto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Desarrollar el thought leadership del PM: posicionamiento, frameworks propios, contenido de producto y conversión de audiencia en oportunidades de carrera.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'El CHRO como influencer organizacional',
                'description'       => 'El director de personas que tiene voz pública: el contenido sobre el futuro del trabajo, la presencia en medios de HR y la reputación que hace que la empresa sea vista como líder en gestión de personas antes de que los candidatos soliciten el puesto.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en personal branding para líderes de Recursos Humanos con experiencia ayudando a CHROs, directores de personas y HR leaders a construir una presencia pública que refuerza el employer brand de la empresa y su propia autoridad profesional. Necesito tu ayuda para desarrollar mi voz pública como líder de personas.

Mi contexto:
- Rol actual: [HRBP senior / HR manager / director de personas / VP of People / CHRO]
- Tamaño y sector de la empresa: [startup / scale-up / mediana empresa / corporación / sector específico]
- Temáticas de HR en las que tengo más experiencia: [talent acquisition, culture, compensation, learning and development, DEI, future of work, people analytics, etc.]
- Presencia digital actual: [sin presencia / perfil de LinkedIn básico / publico ocasionalmente / ya tengo audiencia]
- Objetivo del thought leadership: [reforzar el employer brand de la empresa / posicionarme para el siguiente paso en mi carrera / atraer talento a mi empresa / contribuir a la comunidad de HR]

Con ese contexto, dame:

1. POR QUÉ EL CHRO CON VOZ PÚBLICA ATRAE MEJOR TALENTO
¿Por qué el director de personas que tiene presencia pública y opinión sobre el futuro del trabajo es un activo para el employer brand de la empresa? Explícame la mecánica: el candidato que evalúa una oferta de trabajo investiga a la persona de personas que va a definir su experiencia de empleado, el CHRO que publica sobre cultura, desarrollo y bienestar ofrece al candidato una ventana auténtica a la experiencia interna antes de que entre, y la empresa cuyo líder de HR es reconocido como referente en el sector atrae talento que busca líderes de los que aprender. ¿Cuál es la diferencia entre el employer branding institucional de la empresa y el employer branding personal del CHRO?

2. LOS TEMAS QUE POSICIONAN AL LÍDER DE PERSONAS
¿Sobre qué debe hablar el director de personas para construir autoridad en la comunidad de HR sin limitarse a compartir artículos de terceros? Dame el mapa de temas de thought leadership para el líder de HR: los temas que generan más engagement en la comunidad (el futuro del trabajo y el teletrabajo, la IA y el impacto en los roles de HR, la gestión del bienestar y el burnout, la diversidad e inclusión más allá de las cuotas, la compensación total y la transparencia salarial), los temas donde la experiencia propia es el argumento más potente (la transformación cultural que lideré, el proceso de contratación que rediseñamos y el resultado, la crisis de retención que gestionamos), y los temas de opinión que generan debate (las posiciones que desafían la práctica establecida de HR con argumentos basados en datos).

3. LA ESTRATEGIA DE CONTENIDO DEL LÍDER DE PERSONAS EN LINKEDIN
¿Cómo construyo una estrategia de contenido sostenible como líder de HR que tenga impacto sin comprometer la confidencialidad de la empresa? Dame el sistema de contenido: los formatos que mejor funcionan para el thought leadership de HR (las historias de situaciones reales con lección aprendida, los análisis de datos de mercado laboral con perspectiva propia, los frameworks de gestión de personas que he desarrollado en mi práctica, las opiniones sobre tendencias del sector), cómo hablo de la cultura y los valores de mi empresa de forma auténtica sin que suene a comunicado de marketing, cómo comparto aprendizajes de situaciones difíciles (conflictos, reorganizaciones, salidas de personas clave) sin revelar información confidencial, y la frecuencia y el formato de publicación que genera comunidad.

4. EMPLOYER BRANDING A TRAVÉS DEL LIDERAZGO PERSONAL
¿Cómo alineó mi voz pública con la estrategia de employer branding de la empresa sin perder la autenticidad? Dame el marco de alineación entre el personal branding del CHRO y el employer brand corporativo: los temas donde mi voz personal amplifica el mensaje institucional de forma más creíble que la comunicación corporativa (la cultura de empresa contada por quien la lidera suena más auténtica que el texto de la web de Careers), cómo involucro al equipo de personas en la creación de contenido que humaniza la empresa (los posts sobre el equipo de HR y su trabajo, las historias de desarrollo de personas internas), y cómo mido el impacto del thought leadership del CHRO en las métricas de employer branding (tráfico a la página de empleo, calidad de candidaturas, NPS de candidatos).

5. PRESENCIA EN MEDIOS Y CONFERENCIAS DE HR
¿Cómo amplío mi influencia más allá de LinkedIn participando en medios de recursos humanos y en conferencias del sector? Dame la estrategia de presencia en medios y eventos de HR: los medios de referencia en HR donde publicar artículos de opinión (HR Magazine, SHRM, medios locales del sector), las conferencias de HR donde conseguir un slot como ponente (cómo construyo el abstract que los comités aceptan usando mi experiencia real y los resultados de mi empresa), los podcasts de HR donde participar como invitado experto, y cómo gestionar las entrevistas en medios sobre temas sensibles de HR (la política de teletrabajo, los despidos, los procesos de transformación cultural) sin comprometer a la empresa ni perder mi autenticidad.

6. COMMUNITY BUILDING: CONSTRUIR RED EN LA COMUNIDAD DE HR
¿Cómo construyo relaciones reales con otros líderes de HR que me hacen mejor profesional y amplían mi influencia? Dame el mapa de la comunidad de HR donde vale la pena estar: las comunidades de CHROs y HR leaders (grupos cerrados de LinkedIn, asociaciones profesionales de RRHH, grupos de Slack privados de HR leaders), los eventos de networking de HR donde la calidad de las conversaciones supera a la del contenido formal, cómo construyo relaciones de reciprocidad con otros líderes de HR (el benchmarking entre CHROs, el intercambio de prácticas de referencia, el soporte en situaciones de crisis), y cómo gestiono la relación con los consultores y proveedores de HR que pueden ser aliados estratégicos sin que la relación se convierta en publicidad encubierta.

7. CONVERTIR LA AUTORIDAD EN IMPACTO: MÁS ALLÁ DE LA EMPRESA ACTUAL
¿Cómo el thought leadership del CHRO se convierte en oportunidades que van más allá del rol actual? Dame el mapa de oportunidades del líder de personas con voz pública: el rol de consejero o advisor de otras empresas en materia de cultura y personas, la participación en boards de empresas donde la perspectiva de personas es un activo, la consultoría independiente para empresas que quieren transformar su cultura o sus prácticas de HR, la participación en iniciativas de sector o en organismos de regulación laboral, y la posibilidad de lanzar contenido propio (newsletter, podcast, libro) que se convierte en un activo independiente de la empresa actual.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir la voz pública del líder de personas: thought leadership en HR, employer branding personal y conversión de autoridad en impacto organizacional.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'El CFO con voz pública',
                'description'       => 'El director financiero que comparte su perspectiva: el contenido de finanzas corporativas, la presencia en foros de inversores y la reputación que refuerza la credibilidad de la empresa ante los mercados y los analistas.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en comunicación financiera y en el personal branding de directores financieros con experiencia ayudando a CFOs y líderes financieros a construir una presencia pública que refuerza la credibilidad de la empresa y su propia autoridad profesional. Necesito tu ayuda para desarrollar mi voz pública como director financiero.

Mi contexto:
- Rol actual: [controller / finance manager / director financiero / VP Finance / CFO]
- Tipo de empresa: [startup / scale-up / empresa mediana privada / empresa cotizada / fondo de inversión]
- Audiencia a la que quiero llegar: [otros CFOs y líderes financieros / inversores y analistas / equipo directivo de otras empresas / comunidad de emprendedores / medios financieros]
- Presencia digital actual: [sin presencia / perfil de LinkedIn básico / publico ocasionalmente / participo en algunos foros]
- Objetivo: [reforzar la credibilidad de la empresa ante inversores / posicionarme para el siguiente paso en mi carrera / contribuir a la comunidad de finanzas / atraer talento financiero]

Con ese contexto, dame:

1. POR QUÉ EL CFO CON VOZ PÚBLICA AÑADE VALOR A LA EMPRESA
¿Cuál es el impacto concreto de que el director financiero tenga presencia pública y opinión sobre las finanzas corporativas? Explícame los mecanismos: la empresa cuyo CFO es reconocido como referente transmite mayor credibilidad ante inversores y analistas antes de la primera reunión formal, el CFO que publica sobre la gestión financiera de la empresa (sin revelar información confidencial) ofrece transparencia que genera confianza en el mercado, y el líder financiero con autoridad pública atrae talento financiero de mayor calidad porque los profesionales quieren trabajar con referentes del sector de los que aprender. ¿Cuándo la voz pública del CFO puede generar riesgos para la empresa y cómo los gestiono?

2. LOS TEMAS QUE PUEDE ABORDAR EL CFO SIN RIESGO REGULATORIO
¿Sobre qué puede hablar un director financiero públicamente sin comprometer información privilegiada o confidencial de la empresa? Dame el mapa de temas seguros y de alto valor para el thought leadership del CFO: los temas de finanzas corporativas genéricos (la gestión de la tesorería en entornos de tipos altos, la optimización del capital de trabajo, el proceso de planificación financiera estratégica, la relación del CFO con el board), los temas de liderazgo financiero (la transformación del equipo de finanzas, la implementación de herramientas de FP&A, el rol del CFO en la estrategia de empresa), los temas de mercado y tendencias (el impacto de la inflación en los márgenes, las tendencias de valoración en el sector, el contexto macroeconómico y sus implicaciones para la gestión financiera), y los límites que nunca debo cruzar (guidance forward-looking, información sobre resultados antes de su publicación oficial, comentarios sobre M&A en proceso).

3. LA ESTRATEGIA DE CONTENIDO DEL CFO: FORMATOS Y PLATAFORMAS
¿Qué formatos de contenido funcionan mejor para un director financiero que quiere construir autoridad sin parecer que está haciendo marketing de sí mismo? Dame el sistema de contenido del CFO: los posts de LinkedIn con perspectiva propia sobre tendencias financieras (cómo un dato macroeconómico impacta en la gestión del negocio, la lectura del CFO sobre los resultados de una empresa cotizada del sector), los artículos de opinión en medios financieros y de negocio (Harvard Business Review, Financial Times, medios sectoriales), la participación en podcasts de finanzas corporativas y de liderazgo, y la estrategia de frecuencia y tono que sea consistente con el perfil de seriedad y rigor que se espera del director financiero. ¿Cómo evito que el contenido del CFO suene corporativo y aburrido sin perder la seriedad?

4. LA COMUNICACIÓN CON INVERSORES Y ANALISTAS: MÁS ALLÁ DEL REPORTING
¿Cómo usa el CFO la presencia pública para mejorar la relación con inversores y analistas más allá de los reportings formales? Dame el marco de comunicación del CFO con la comunidad inversora: la participación en conferencias de inversores (cómo preparo la presentación que va más allá del deck de resultados y construye la narrativa estratégica de la empresa), la participación en roadshows y eventos de la industria donde el CFO habla como referente del sector (no solo como representante de su empresa), cómo uso el contenido de LinkedIn para mantener la presencia ante la comunidad inversora entre los períodos formales de comunicación, y cómo gestiono el equilibrio entre la transparencia que genera confianza y la cautela que requiere la regulación de mercados de valores.

5. EL CFO EN LOS MEDIOS: CÓMO MANEJAR LAS ENTREVISTAS Y LAS SOLICITUDES
¿Cómo gestiono las solicitudes de medios de comunicación financieros y de negocio sin comprometer a la empresa? Dame el proceso de gestión de medios del CFO: cómo construyo relaciones con periodistas financieros de forma proactiva (siendo fuente de contexto sobre el sector, no solo sobre mi empresa), cómo preparo una entrevista en medios financieros (los mensajes clave que quiero transmitir, las preguntas incómodas que pueden surgir y cómo responderlas, los límites de lo que puedo y no puedo comentar), cómo gestiono la situación donde un medio me pide comentar sobre resultados o sobre movimientos corporativos antes de que haya comunicación oficial, y cómo uso la cobertura en medios como activo de credibilidad ante inversores y stakeholders internos.

6. NETWORKING EN LA COMUNIDAD DE CFOs: LOS FOROS QUE IMPORTAN
¿Cuáles son los foros y las comunidades donde los directores financieros construyen relaciones de valor real? Dame el mapa de la comunidad de CFOs: las asociaciones profesionales de directores financieros (ACODI en España, FEI en Estados Unidos, ICAEW en Reino Unido, las equivalentes locales), los grupos cerrados de CFOs en LinkedIn y los foros privados donde se comparten prácticas de referencia sin que la información salga al mercado, los eventos de CFOs organizados por grandes bancos y firmas de consultoría que son espacios de networking de alta calidad, y la estrategia de relaciones con otros CFOs que es genuina y no oportunista. ¿Cuál es el valor de la red de CFOs para la gestión diaria de la función financiera?

7. CONSTRUIR LA CARRERA DEL CFO CON THOUGHT LEADERSHIP
¿Cómo el thought leadership acelera el desarrollo de la carrera del director financiero y abre oportunidades más allá del rol actual? Dame el mapa de oportunidades del CFO con voz pública: el rol de consejero independiente (la presencia en consejos de administración de empresas donde la perspectiva financiera es un activo clave), las oportunidades de private equity y venture capital (los fondos que buscan operational partners con experiencia en CFO para el portfolio), la transición de CFO a CEO (cómo el thought leadership construye la credibilidad de liderazgo estratégico que requiere el rol de CEO), y las oportunidades de consultoría e interim management para el CFO que quiere diversificar su impacto más allá de una sola empresa.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Desarrollar la voz pública del CFO: temas seguros de thought leadership, comunicación con inversores y construcción de autoridad que refuerza la credibilidad de la empresa.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'El abogado influencer: construir autoridad jurídica online',
                'description'       => 'El abogado que genera mandatos con su presencia digital: los artículos de opinión jurídica, las charlas y la estrategia de personal branding que construye reputación de experto sin violar las restricciones deontológicas.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en marketing jurídico y en el personal branding de abogados con experiencia ayudando a profesionales del derecho a construir una presencia digital que genera mandatos y reputación sin violar las normas deontológicas de la abogacía. Necesito tu ayuda para desarrollar mi autoridad jurídica online.

Mi contexto:
- Especialidad jurídica: [derecho mercantil, laboral, tributario, penal, civil, tecnología y datos, propiedad intelectual, startup y venture capital, etc.]
- Tipo de práctica: [socio de despacho / abogado por cuenta ajena / abogado de empresa / abogado independiente / counsel en despacho]
- Presencia digital actual: [sin presencia / perfil de LinkedIn básico / blog jurídico con pocos lectores / ya tengo audiencia en redes]
- Tipo de cliente al que quiero llegar: [empresas / startups / particulares de alto patrimonio / inversores / pymes / sector específico]
- Principal objetivo: [generar mandatos directos / construir reputación para ser referido por otros abogados / posicionarme para captar socios de despacho / atraer clientes internacionales]

Con ese contexto, dame:

1. EL MARKETING JURÍDICO Y LAS RESTRICCIONES DEONTOLÓGICAS: EL MARCO LEGAL
¿Qué puede y qué no puede hacer un abogado para promocionarse públicamente sin violar las normas deontológicas del Consejo General de la Abogacía? Explícame el marco deontológico del marketing jurídico en España: las restricciones sobre la publicidad de servicios jurídicos (qué está prohibido: la comparación con otros despachos, los testimonios de clientes que garantizan resultados, la publicidad engañosa sobre honorarios), qué está permitido (los artículos de divulgación jurídica, las conferencias y seminarios, la presencia en directorios jurídicos, el contenido en redes sociales de naturaleza informativa), y cómo otros países de referencia han liberalizado las normas de marketing jurídico y qué podemos aprender. ¿Cuál es el principio general que guía todo el marketing jurídico ético?

2. EL CONTENIDO JURÍDICO QUE GENERA AUTORIDAD Y MANDATOS
¿Qué tipo de contenido jurídico construye más autoridad y genera más contactos de potenciales clientes? Dame el sistema de contenido jurídico: los artículos de análisis de legislación nueva o de jurisprudencia relevante que posicionan al abogado como el primero en explicar los cambios que afectan a sus clientes (el abogado que publica el análisis de la nueva normativa el mismo día en que se aprueba tiene una ventaja enorme), los artículos de opinión jurídica con posición propia sobre cuestiones controvertidas (la tesis propia, el argumento jurídico desarrollado, la crítica constructiva a una sentencia o a una ley), los casos prácticos anonimizados que ilustran cómo se resuelven problemas jurídicos concretos, y los artículos de divulgación que explican el derecho en lenguaje que el cliente no abogado entiende.

3. LINKEDIN PARA ABOGADOS: LAS ESPECIFICIDADES DEL SECTOR JURÍDICO
¿Cómo uso LinkedIn de forma efectiva como abogado respetando las particularidades de la profesión? Dame la guía de LinkedIn para abogados: cómo optimizo el perfil para que el potencial cliente que busca mi especialidad me encuentre y entienda por qué soy el abogado correcto para su problema, cómo presento los casos sin revelar información confidencial del cliente (la técnica del case study anonimizado que ilustra la experiencia sin identificar al cliente), cómo muestro los reconocimientos y rankings jurídicos (Legal 500, Chambers, Best Lawyers) de forma que refuerzan la credibilidad sin parecer ostentoso, y cómo construyo una red de contactos en LinkedIn que incluye tanto a potenciales clientes como a abogados de otras especialidades que pueden referirme mandatos.

4. EL ARTÍCULO JURÍDICO: DE LA ACADEMIA A LA INFLUENCIA PRÁCTICA
¿Cómo escribo artículos jurídicos que sean rigurosos para la comunidad legal pero accesibles para el cliente empresarial que toma decisiones? Dame el proceso de escritura del artículo jurídico que posiciona: la diferencia entre el artículo académico que solo leen otros abogados y el artículo de opinión jurídica que lee el director jurídico o el CEO de la empresa que necesita asesoramiento, cómo estructuro el artículo para que el lector no jurista entienda las implicaciones prácticas sin necesitar la formación jurídica para valorar el análisis, dónde publicar los artículos según el tipo de audiencia que quiero alcanzar (medios generalistas de negocio, medios especializados del sector del cliente, publicaciones jurídicas de referencia, el propio blog del despacho), y cómo uso los artículos publicados como activo en el proceso de desarrollo de negocio.

5. CHARLAS Y CONFERENCIAS: EL ABOGADO EN EL ESCENARIO
¿Cómo uso la participación en charlas, jornadas y conferencias para construir autoridad jurídica y generar contactos? Dame la estrategia de presencia en eventos para abogados: los eventos donde debo estar según mi especialidad y el tipo de cliente al que me dirijo (las jornadas organizadas por asociaciones empresariales del sector, las conferencias jurídicas de mi especialidad, los eventos de startups y tecnología si me dedico al sector), cómo consigo invitaciones para hablar en los eventos correctos cuando todavía no soy conocido (el abstract que los organizadores aceptan, cómo uso las publicaciones previas como credencial), cómo diseño la charla que combina rigor jurídico con aplicabilidad práctica para una audiencia de empresarios, y cómo maximizo el networking después de la charla.

6. EL DESPACHO COMO MARCA: CÓMO ALINEA EL PERSONAL BRANDING CON LA IMAGEN DEL DESPACHO
¿Cómo desarrollo mi marca personal sin que entre en conflicto con la política de comunicación del despacho? Dame el marco de alineación entre el personal branding del abogado y la marca del despacho: cómo obtengo el apoyo de los socios directores para la estrategia de visibilidad (el argumento de que mi visibilidad personal genera mandatos para el despacho, no solo para mí), qué contenido debo publicar siempre bajo la marca del despacho versus qué contenido puede ir bajo mi nombre personal, cómo comparto los logros del despacho (casos ganados, rankings, nuevos clientes) sin revelar información confidencial y respetando la política de comunicación, y cómo negocio con el despacho el tiempo y los recursos para la actividad de desarrollo de negocio y de presencia pública.

7. CONVERTIR LA AUTORIDAD EN MANDATOS: EL PROCESO DE CAPTACIÓN
¿Cómo el thought leadership jurídico se convierte en mandatos concretos y cómo gestiono el proceso de captación de forma ética? Dame el proceso de conversión de la presencia pública en clientes: cómo diseño el primer contacto con un potencial cliente que me ha conocido a través del contenido (la conversación que empieza desde la confianza porque ya me conoce), cómo estructura la primera reunión con un potencial cliente que viene referido por mi reputación (la escucha del problema, la presentación de mi enfoque, la propuesta de honorarios), cómo gestiono el seguimiento después de la primera reunión sin parecer desesperado por conseguir el mandato, y cómo cultivo las relaciones con clientes actuales para que sean la fuente de mandatos y referencias más rentable de mi práctica.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir autoridad jurídica online: contenido que posiciona, presencia en eventos y captación de mandatos dentro del marco deontológico de la abogacía.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS thought leadership: ser la voz del customer success',
                'description'       => 'El profesional de customer success que comparte su conocimiento: el contenido sobre retención, los frameworks propios y la presencia en comunidades de CS que construye reputación y abre puertas.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en personal branding para profesionales de customer success con experiencia ayudando a CSMs, managers de CS y líderes de la función a construir una presencia pública que genera reconocimiento en la comunidad y oportunidades de carrera. Necesito tu ayuda para desarrollar mi thought leadership en customer success.

Mi contexto:
- Rol actual en CS: [CSM / senior CSM / CS team lead / CS manager / VP of Customer Success / Chief Customer Officer]
- Tipo de producto y mercado: [SaaS B2B, plataforma, enterprise, mid-market, SMB, etc.]
- Especialidad dentro de CS: [onboarding, adoption, retention, expansion, health scoring, CS operations, CS strategy, etc.]
- Presencia digital actual: [sin presencia / perfil de LinkedIn básico / publico ocasionalmente / ya tengo audiencia en comunidades de CS]
- Objetivo: [avanzar en mi carrera dentro de CS / cambiar de empresa / contribuir a la comunidad / posicionarme para un rol de liderazgo / crear mi propio contenido de CS]

Con ese contexto, dame:

1. POR QUÉ EL CS THOUGHT LEADER AVANZA MÁS EN SU CARRERA
¿Cuál es el impacto concreto del thought leadership en la carrera del profesional de customer success? Explícame los mecanismos específicos del sector: el CS es una función relativamente nueva donde los roles de liderazgo no tienen décadas de candidatos establecidos (hay menos competencia por las posiciones que en ventas o marketing), el VP of CS que contrata busca a personas que piensan sobre el trabajo (el candidato con artículos publicados sobre retención o health scoring llega a la entrevista con una ventaja enorme sobre el candidato sin huella digital), y el CSM que es conocido en la comunidad recibe oportunidades de las empresas más interesantes antes de que publiquen las posiciones. ¿Cuánto tiempo tarda en materializarse el impacto en la carrera?

2. EL POSICIONAMIENTO DEL CS THOUGHT LEADER: EN QUÉ ESPECIALIDAD
¿Cómo elijo el área de customer success en la que quiero construir autoridad sin dispersarme en la generalidad? Dame el proceso de definición del posicionamiento: la intersección entre tu experiencia práctica más profunda (el área de CS donde has resuelto más problemas reales), los temas que la comunidad de CS busca activamente (los debates en Slack groups de CS, las preguntas recurrentes en Gainsight Pulse, los temas de las charlas más seguidas en las conferencias de CS), y el punto de vista propio que te diferencia (por qué reproducir los frameworks de Gainsight o de Salesforce no construye autoridad y cómo desarrollar una perspectiva propia basada en tu experiencia). Dame ejemplos de nichos de CS donde hay oportunidad de posicionarse.

3. EL CONTENIDO DE CS QUE GENERA RECONOCIMIENTO EN LA COMUNIDAD
¿Qué tipos de contenido construyen más autoridad para un profesional de CS en LinkedIn y en las comunidades especializadas? Dame el sistema de contenido del CS thought leader: los posts con historias reales de gestión de cuentas que incluyen el problema, la solución y el resultado medible (cómo recuperé una cuenta en riesgo de churn, el proceso de onboarding que redujo el time-to-value a la mitad), los posts de análisis de las métricas de CS con perspectiva propia (qué me enseña el churn de este trimestre sobre el segmento de clientes, por qué el NPS no es suficiente para predecir el churn), los frameworks de CS que he desarrollado en mi práctica (mi proceso de health scoring, mi playbook de renovación, mi metodología de QBR), y los posts de opinión sobre el futuro del customer success (el impacto de la IA en el rol del CSM, el debate sobre si CS debe estar bajo revenue o bajo producto).

4. LAS COMUNIDADES DE CS: DÓNDE ESTAR Y CÓMO PARTICIPAR
¿Cuáles son las comunidades de customer success donde vale la pena construir presencia y cómo participo de forma que genere reconocimiento? Dame el mapa de la comunidad de CS: las comunidades principales (Customer Success Collective, Gain Grow Retain, Success Coach, CS in Focus, las comunidades de Gainsight y Totango), cómo participo de forma que aporto valor en lugar de solo consumir (las preguntas que respondo, los recursos que comparto, las perspectivas que añado a los debates), cómo uso la participación en comunidades para identificar a los líderes de CS de las empresas más interesantes antes de que abran posiciones, y cómo construyo relaciones en comunidades online que se convierten en relaciones profesionales reales.

5. LAS CONFERENCIAS DE CS: GAINSIGHT PULSE Y MÁS ALLÁ
¿Cómo participo en las conferencias de customer success para construir reconocimiento y relaciones? Dame la estrategia de presencia en eventos de CS: las conferencias de referencia (Gainsight Pulse, SaaStr, Customer Success Summit, las conferencias locales del sector), cómo consigo un slot como ponente cuando todavía no soy un referente establecido (el abstract que los comités aceptan, cómo uso el contenido publicado como credencial, cómo propongo temas de los que hay poca representación en el programa), cómo diseño la charla de CS que combina metodología práctica con resultados medibles que la audiencia puede aplicar directamente, y cómo maximizo el networking en los eventos (con quién quiero hablar y cómo lo gestiono).

6. LOS FRAMEWORKS PROPIOS: EL ACTIVO MÁS VALIOSO DEL CS THOUGHT LEADER
¿Por qué los profesionales de CS que crean y nombran frameworks propios construyen una autoridad que dura más que el contenido genérico? Explícame la mecánica del framework en CS: cómo identifico los procesos de CS que ejecuto de forma sistemática y que resuelven problemas que otros CSMs tienen (mi proceso de onboarding, mi metodología de health scoring, mi playbook de renovación), cómo convierto ese proceso en un framework nombrado y explicable que otros CSMs puedan aplicar, cómo lo publico y lo difundo de forma que sea atribuible a mí, y cómo el framework se convierte en un activo que genera tráfico, seguidores y reconocimiento de forma sostenida. Dame ejemplos de frameworks de CS que han generado autoridad significativa a sus creadores.

7. CONVERTIR EL THOUGHT LEADERSHIP EN OPORTUNIDADES CONCRETAS
¿Cómo el reconocimiento en la comunidad de CS se convierte en oportunidades de carrera, de consultoría o de formación? Dame el sistema de conversión de thought leadership en oportunidades: cómo optimizo mi perfil de LinkedIn para que quien llega desde mi contenido entienda exactamente qué tipo de rol o de oportunidad busco, cómo gestiono el inbound de reclutadores y de empresas interesantes que me contactan después de ver mi contenido (el filtro que me permite evaluar rápidamente si la oportunidad encaja), cómo hago el outreach a las empresas que me interesan usando mi contenido como credencial que elimina el cold apply, y cuándo tiene sentido lanzar servicios de consultoría, formación o coaching de CS como fuente de ingresos adicional o principal.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Desarrollar el thought leadership del profesional de CS: frameworks propios, presencia en comunidades y conversión de reconocimiento en oportunidades de carrera.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Personal branding del freelance: ser conocido en tu nicho',
                'description'       => 'El freelance que no necesita buscar clientes porque los clientes le buscan a él: la estrategia de contenido, la visibilidad en comunidades y la reputación que convierte la expertise en un imán de oportunidades.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en personal branding y marketing para freelancers con experiencia ayudando a profesionales independientes a construir una reputación en su nicho que genera inbound de clientes de calidad sin necesidad de buscarlos activamente. Necesito tu ayuda para construir mi marca personal como freelance.

Mi contexto:
- Tipo de servicio freelance que ofrezco: [diseño, desarrollo web, copywriting, consultoría de marketing, fotografía, traducción, consultoría legal, finanzas para pymes, etc.]
- Nicho o especialidad dentro del servicio: [describe con qué tipo de cliente o proyecto trabajas mejor]
- Años de experiencia y nivel actual de ingresos: [empezando / establecido pero quiero crecer / ya tengo buenos ingresos pero dependo del outreach activo]
- Presencia digital actual: [sin web / web básica / perfil en plataformas de freelance / LinkedIn con poca actividad / ya tengo algo de contenido]
- Principal objetivo del personal branding: [dejar de hacer outbound frío / subir las tarifas / atraer clientes de mayor tamaño / especializarme más / salir de las plataformas de freelance con comisión]

Con ese contexto, dame:

1. POR QUÉ EL PERSONAL BRANDING TRANSFORMA EL NEGOCIO DEL FREELANCE
¿Qué impacto tiene el personal branding en la economía del freelance y por qué los freelancers con reputación cobran entre el doble y el triple que los que no la tienen? Explícame los mecanismos: el cliente que te busca porque ya te conoce negocia menos el precio que el cliente al que has tenido que convencer, el freelance conocido en su nicho puede elegir los proyectos que acepta (mientras que el desconocido acepta lo que llega), y el cliente que llega por recomendación o por el contenido tiene un lifetime value mayor porque llega con más confianza y menos fricción. ¿Cuánto tiempo realista tarda el personal branding en generar resultados económicos tangibles para un freelance?

2. EL POSICIONAMIENTO: DEFINIR TU NICHO CON PRECISIÓN
¿Por qué los freelancers generalistas ganan menos y tienen más dificultad para crecer que los especialistas y cómo encuentro mi nicho sin renunciar a demasiado trabajo? Dame el proceso de definición del nicho del freelance: la intersección entre lo que haces mejor que la mayoría (tu habilidad diferencial), el tipo de cliente con el que disfrutas más trabajando (y que paga mejor), y el problema específico que resuelves para ese cliente (cuanto más específico el problema, más fácil es que el cliente te busque cuando lo tiene). Explícame cómo el nicho no reduce el mercado sino que lo hace más accesible, y dame el proceso para validar que el nicho que he elegido tiene demanda suficiente antes de posicionarme completamente.

3. LA WEB DEL FREELANCE: EL CUARTEL GENERAL DE TU MARCA
¿Qué debe tener la web de un freelance para que convierta visitas en consultas de potenciales clientes? Dame la estructura de la web del freelance con personal branding sólido: la propuesta de valor en el primer scroll que responde en una frase quién soy, para quién trabajo y qué resultado genero (no una lista de servicios genéricos), el portfolio con casos de estudio que muestran el problema del cliente, el proceso que seguí y el resultado medible (por qué un caso de estudio bien escrito vale más que diez logos de clientes), la sección de testimonios que son específicos y cuentan el antes y el después (no el genérico "es muy profesional"), la página de servicios que filtra al cliente que no encaja y atraé al que sí, y el proceso de contacto que cualifica al potencial cliente antes de que llegue la primera reunión.

4. LA ESTRATEGIA DE CONTENIDO DEL FREELANCE: QUÉ PUBLICAR Y DÓNDE
¿Qué tipos de contenido generan más inbound para un freelance y en qué plataformas debe estar según su nicho? Dame el sistema de contenido del freelance con personal branding: los contenidos que demuestran expertise (los artículos que resuelven el problema específico de tu cliente ideal, los tutoriales que muestran tu proceso de trabajo, los análisis de casos reales de tu sector), los contenidos que humanizan al freelance (el detrás de las bambalinas de un proyecto, los aprendizajes del trabajo independiente, la perspectiva personal sobre el sector), y la selección de plataformas según el nicho (LinkedIn para servicios B2B, Instagram para diseño y creatividad, YouTube para tutoriales técnicos, Twitter/X para tecnología y startups, el newsletter para la audiencia más comprometida). ¿Cuántas plataformas puede gestionar un freelance solo de forma efectiva?

5. LAS COMUNIDADES: DÓNDE ESTÁN TUS CLIENTES Y CÓMO ESTAR AHÍ
¿Cómo uso la participación en comunidades online y offline para generar visibilidad y referencias en mi nicho? Dame el mapa de comunidades para el freelance: las comunidades de los potenciales clientes (grupos de Slack, comunidades de Discord, grupos de LinkedIn del sector de tu cliente ideal) donde estar presente de forma que aportas valor sin ser percibido como un vendedor, las comunidades de freelancers de tu especialidad donde las referencias entre colegas son una fuente importante de trabajo, los eventos presenciales del nicho donde los mejores proyectos se cierran en la conversación informal, y la estrategia de participación que construye relaciones genuinas en lugar de presencia superficial. ¿Cuánto tiempo dedico a comunidades versus a crear contenido propio?

6. EL BOCA A BOCA DIGITAL: CONVERTIR CLIENTES EN EMBAJADORES
¿Cómo diseño la experiencia del cliente de forma que genere referencias activas en lugar de esperar a que hablen bien de mí de forma pasiva? Dame el sistema de referrals del freelance: el proceso de entrega que supera las expectativas del cliente en los momentos clave (el onboarding del proyecto, el momento de la entrega, el seguimiento post-proyecto), cómo pido el testimonio cuando el cliente está en su momento de mayor satisfacción y cómo lo uso en la web y en el contenido, cómo diseño el programa de referrals que incentiva a los clientes actuales a recomendar activamente (la comisión por referral, el agradecimiento especial, el acceso prioritario a mi agenda), y cómo mantengo el contacto con exclientes de forma que sea valiosa para ellos y genere oportunidades de trabajo repetido y de referencias.

7. SUBIR LAS TARIFAS CON EL PERSONAL BRANDING: LA MECÁNICA DEL PRECIO
¿Cómo uso el personal branding para subir las tarifas sin perder clientes actuales y para atraer clientes que pagan más sin necesidad de negociar? Dame el proceso de reposicionamiento de precio del freelance: cómo el personal branding cambia la conversación de precio (el cliente que te busca por tu reputación pregunta cómo trabajas antes de preguntar cuánto cobras), cómo subo las tarifas a los clientes existentes de forma que no genera conflicto (la comunicación del aumento, el timing correcto, cómo lo justifico con el valor demostrado), cómo diseño la estructura de precios que maximiza el ingreso por proyecto (la propuesta de valor que hace que el precio más alto sea el más razonable), y cómo identifico el momento en que el personal branding ha generado suficiente demanda para dejar de aceptar proyectos por debajo de mi tarifa objetivo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Construir el personal branding del freelance que genera inbound: posicionamiento de nicho, estrategia de contenido y conversión de reputación en clientes que pagan más sin negociar.',
                'vote_score'        => 47,
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
