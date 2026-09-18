<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills299Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'B2B social media: LinkedIn, Twitter/X y las plataformas que generan pipeline',
                'description'      => 'Diseña una estrategia de redes sociales B2B que genera pipeline de ventas real, no solo seguidores: contenido, cadencia, formatos y conversión.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en marketing B2B con especialización en estrategia de contenido para redes sociales. Has ayudado a empresas de SaaS, consultoría y servicios profesionales a construir presencia en LinkedIn y otras plataformas que genera leads calificados de forma consistente, no solo vanity metrics de seguidores y likes.

Voy a compartirte información sobre mi empresa y necesito que me ayudes a diseñar una estrategia de social media B2B que conecte directamente con la generación de pipeline.

**Contexto de la empresa:**
- Tipo de empresa: [producto SaaS, consultoría, agencia, servicios profesionales, etc.]
- Producto o servicio que vendo: [descripción breve]
- Comprador objetivo (ICP): [cargo, industria, tamaño de empresa]
- Ciclo de venta típico: [duración y etapas]
- Equipo que va a producir contenido: [solo yo, un equipo de marketing, los fundadores, etc.]
- Plataformas donde ya tengo presencia: [LinkedIn, Twitter/X, YouTube, etc.]
- Objetivo principal en los próximos seis meses: [awareness, generación de leads, nurturing de pipeline existente]

**Lo que necesito:**

Primero, ayúdame a elegir las plataformas correctas. No voy a estar en todas partes. Analiza mi ICP y mi contexto y dime:
- En qué plataforma está mi comprador cuando busca información sobre el problema que resuelvo
- Qué plataforma tiene mejor ratio entre esfuerzo de producción y alcance en mi segmento
- LinkedIn vs Twitter/X: las diferencias reales de audiencia, formato y ciclo de conversión para B2B
- Si hay plataformas no obvias que merezca la pena considerar para mi industria específica

Segundo, diseña la estrategia de contenido para la plataforma principal. Dame:
- Los tres o cuatro pilares de contenido que voy a trabajar: los temas donde mi empresa tiene autoridad y mi comprador tiene interés
- La mezcla de formatos: cuándo texto largo, cuándo carrusel, cuándo video corto, cuándo encuesta, cuándo caso de cliente. Qué funciona para B2B en este momento
- La cadencia realista: cuántas publicaciones a la semana puedo mantener con calidad sin quemar al equipo
- El arco de contenido: cómo planifico el contenido en ciclos de cuatro u ocho semanas para que cuente una historia coherente

Tercero, explícame la conexión entre contenido y pipeline:
- Cómo diseño llamadas a la acción que lleven del contenido a una conversación de ventas sin parecer spam
- El lead magnet de social: qué tipo de contenido descargable o recurso vale la pena ofrecer en redes para capturar datos
- La transición de seguidor a oportunidad: el journey típico de un comprador B2B desde que ve mi primer post hasta que pide una demo
- Cómo uso el contenido de redes para nutrir oportunidades que ya están en el pipeline

Cuarto, diseña el proceso de producción de contenido:
- Cómo capturo ideas de contenido de forma continua (de ventas, de clientes, de preguntas frecuentes, de tendencias)
- El flujo de producción semanal: de la idea a la publicación con mínimo tiempo de fricción
- Cómo distribuyo una pieza de contenido grande (artículo, caso de éxito, webinar) en múltiples formatos para distintas plataformas
- Las herramientas que recomendarías para mi contexto: programación, análisis, creación de imágenes

Quinto, dame el sistema de medición de la estrategia:
- Las métricas que muestran que el contenido está generando pipeline real: no solo alcance sino atribución a oportunidades
- Cómo hago el seguimiento de qué contenido influyó en las oportunidades cerradas
- Los indicadores adelantados que me dicen si voy por buen camino antes de ver el impacto en ventas
- La revisión mensual del rendimiento: qué analizo, qué ajusto, qué abandono

Dame un plan concreto para el primer mes: qué publico, cuándo y con qué objetivo. Hazlo ejecutable, no teórico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 38,
                'use_case'         => 'Diseñar estrategia de social media B2B que conecta contenido con generación de pipeline real',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Developer advocacy en redes: construir comunidad técnica con contenido auténtico',
                'description'      => 'Diseña una estrategia de contenido para developer advocacy en redes sociales que construye comunidad técnica genuina, autoridad y confianza entre desarrolladores.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en developer relations y developer advocacy con experiencia construyendo comunidades técnicas para empresas de infraestructura, herramientas de desarrollo, APIs y plataformas. Entiendes que los desarrolladores son la audiencia más escéptica ante el marketing tradicional: detectan el contenido corporativo y la autopromoción a distancia, pero responden profundamente al conocimiento genuino, la transparencia técnica y el contenido que les hace mejores en su trabajo.

Voy a contarte sobre mi empresa y mi rol y necesito que me ayudes a construir una presencia de developer advocacy en redes sociales que sea auténtica, técnicamente relevante y que genere tracción real en la comunidad de desarrolladores.

**Contexto:**
- Tipo de empresa y producto: [API, herramienta de desarrollo, framework, infraestructura, plataforma cloud, etc.]
- Audiencia objetivo de desarrolladores: [backend, frontend, fullstack, DevOps, data engineers, etc.]
- Lenguajes o tecnologías en las que se mueve mi audiencia: [Python, JavaScript, Rust, Go, etc.]
- Mi perfil como developer advocate: [soy ingeniero, vengo de marketing técnico, etc.]
- Plataformas donde quiero construir presencia: [Twitter/X, LinkedIn, GitHub, YouTube, Dev.to, etc.]
- Objetivo principal: [awareness del producto, adopción, construcción de comunidad, feedback técnico]

**Lo que necesito:**

Primero, ayúdame a entender qué tipo de contenido valoran los desarrolladores en redes y qué rechaza. El developer advocacy tiene unas reglas específicas que son distintas al marketing B2B convencional:
- El contenido que sí funciona: tutoriales honestos, debug en vivo, comparaciones directas incluyendo puntos débiles propios, lecciones aprendidas, arquitecturas reales con compromisos reales
- El contenido que falla: press releases disfrazados de posts, comparaciones donde siempre gana el propio producto, casos de éxito sin métricas reales, entradas de blog de cinco párrafos sin código
- Cómo comunico las limitaciones y los bugs de mi producto de forma que genere confianza en lugar de alarma
- La diferencia entre ser advocate de mi empresa y ser una voz genuina de la comunidad técnica

Segundo, diseña los pilares de contenido técnico para mi contexto:
- El contenido educativo puro: cómo enseño conceptos de mi dominio sin necesariamente hablar de mi producto
- El contenido de producto transparente: cómo explico decisiones de arquitectura, trade-offs y evolución del producto
- El contenido de comunidad: cómo amplífico el trabajo de otros, reconozco contribuciones, señalo recursos externos valiosos
- El contenido de experiencias: lo que aprendí, lo que falló, lo que cambió mi forma de pensar

Tercero, explícame la mecánica de construcción de comunidad en cada plataforma:
- Twitter/X: los hilos técnicos que funcionan, la cadencia de interacción con la comunidad, cómo construyo relaciones con influencers técnicos relevantes
- LinkedIn: cómo adapto el contenido técnico para una audiencia que incluye también a decision makers no técnicos
- GitHub: cómo la actividad en GitHub (issues, PRs, discussions) construye credibilidad que se traduce en presencia en otras redes
- Comunidades de nicho: Discord, Slack, foros, subreddits donde está mi audiencia específica

Cuarto, diseña el proceso de producción de contenido técnico sostenible:
- Cómo extraigo contenido de mi trabajo diario: de los bugs que resuelvo, de las preguntas de los usuarios, de las decisiones de diseño
- Cómo produzco demos y tutoriales técnicos de calidad sin un equipo de producción de video
- El balance entre el tiempo dedicado a crear contenido y el tiempo dedicado a construir el producto
- Cómo coordino el contenido de developer advocacy con el equipo de producto y de marketing

Quinto, dame el sistema para medir el impacto de la estrategia de developer advocacy:
- Métricas de comunidad: seguidores, engagement, menciones, contribuciones de la comunidad al producto
- Métricas de negocio: signups atribuibles al contenido, activación de usuarios provenientes de redes, calidad del feedback técnico recibido
- Señales cualitativas: apariciones en podcasts técnicos, menciones en artículos de otros, contribuciones open source
- Cómo reporto el impacto del developer advocacy a la dirección de la empresa en términos que entiendan

Incluye ejemplos de developer advocates que admiras y qué hacen bien que puedo adaptar a mi contexto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir presencia auténtica de developer advocacy en redes sociales técnicas',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Visual social media B2B: el contenido visual que funciona en contextos profesionales',
                'description'      => 'Diseña un sistema de contenido visual para redes sociales B2B que comunica con autoridad, diferencia la marca y encaja con el gusto estético de una audiencia profesional.',
                'prompt_content'   => <<<'PROMPT'
Eres un diseñador especializado en contenido visual para redes sociales en contextos B2B. Has creado sistemas de contenido para agencias, firmas de consultoría, empresas de software y servicios profesionales donde el contenido visual debe transmitir a la vez expertise, credibilidad y personalidad de marca. Entiendes que el B2B no significa aburrido, sino que significa comunicar de forma que resuene con profesionales que consumen contenido con poco tiempo y alto nivel de exigencia.

Voy a compartirte el contexto de mi empresa y necesito que me ayudes a diseñar un sistema de contenido visual para redes sociales B2B que sea coherente, escalable y efectivo.

**Contexto de la empresa:**
- Tipo de empresa: [consultoría, SaaS, agencia, servicios profesionales, etc.]
- Audiencia objetivo: [cargo, industria, nivel de seniority]
- Tono y personalidad de marca actual: [formal, accesible, disruptiva, académica, etc.]
- Plataformas principales: [LinkedIn, Twitter/X, Instagram profesional, etc.]
- Recursos disponibles: [diseñador dedicado, yo mismo, Canva, Figma, herramientas de IA para imágenes]
- Tipo de contenido que publican hoy: [texto plano, capturas de pantalla, fotos de stock, etc.]

**Lo que necesito:**

Primero, ayúdame a entender qué estética visual funciona en B2B y por qué:
- La diferencia entre el contenido visual B2C (emocional, aspiracional, lifestyle) y el B2B (claro, denso en información, orientado a ideas)
- Los formatos que generan más engagement en LinkedIn según el tipo de contenido: carruseles, infografías estáticas, capturas de datos, ilustraciones conceptuales
- Errores visuales comunes en B2B: stock photos genéricas, tipografía corporativa aburrida, infografías que intentan meter demasiado, diseño inconsistente
- El diseño como señal de credibilidad: cómo la calidad visual comunica la calidad del trabajo

Segundo, diseña el sistema visual de contenido para mis redes:
- La paleta de colores para redes sociales: la misma que la marca pero adaptada a las especificidades de cada plataforma (fondos oscuros de LinkedIn, feeds de Twitter)
- La tipografía del contenido social: fuentes que funcionan en pantallas de móvil a tamaño reducido, jerarquía de texto en carruseles
- Los templates base que voy a usar: el post de cita o insight, el carrusel de pasos o lista, la infografía de estadística, la portada de artículo, el anuncio de contenido nuevo
- El estilo fotográfico e ilustrativo: si uso fotos de personas (y cómo hacerlas auténticas), ilustraciones vectoriales, mockups de producto, capturas de pantalla con estilo

Tercero, dame guías de diseño para los formatos más usados en B2B:
- El carrusel de LinkedIn: estructura narrativa de diapositivas, tamaño óptimo, cuántas diapositivas, la primera imagen como gancho y la última como CTA
- La infografía de datos: cómo presento estadísticas de forma visualmente atractiva sin mentir con los gráficos
- La cita o insight: diseños de cita que destacan en el feed sin ser genéricos ni parecer plantilla de motivación
- El anuncio de webinar o evento: jerarquía visual que comunica fecha, tema, ponente y CTA de forma clara en tres segundos

Cuarto, diseña el flujo de producción de contenido visual:
- El sistema de templates en Canva o Figma: cómo lo organizo para que cualquier persona del equipo pueda producir contenido coherente
- El proceso de aprobación rápida: cómo evito que el diseño se convierta en un cuello de botella en la cadencia de publicación
- La biblioteca de assets: dónde guardo y cómo organizo iconos, fotografías, datos y materiales reutilizables
- El flujo de creación con IA generativa: cuándo usar Midjourney, DALL-E o similares y cuándo evitarlo en contextos B2B serios

Quinto, dame criterios de evaluación del contenido visual:
- Cómo miro un post antes de publicarlo para asegurarme de que cumple los estándares de calidad y marca
- Las métricas de rendimiento del contenido visual vs el contenido de texto puro en mis plataformas
- Cómo itero el sistema visual basándome en los datos de rendimiento
- Cada cuánto tiempo refrescar el look del contenido para que no envejezca visualmente

Dame especificaciones concretas que pueda usar para crear los primeros templates o para briefear a un diseñador freelance.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar sistema visual coherente para redes sociales B2B con templates y flujo de producción',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Social selling B2B: transformar la presencia social en conversaciones de venta',
                'description'      => 'Domina el social selling en LinkedIn y otras plataformas: cómo construir credibilidad, generar leads y abrir conversaciones de venta sin parecer spam.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en social selling B2B con experiencia entrenando a equipos comerciales en el uso estratégico de LinkedIn y otras redes para generar pipeline de ventas. Has trabajado con vendedores de SaaS, consultoría, servicios financieros y tecnología que han transformado su presencia digital en una máquina de generación de oportunidades sin depender exclusivamente de la prospección fría.

Voy a compartirte mi contexto y necesito que me ayudes a diseñar una estrategia de social selling que genere conversaciones de venta reales sin dañar mi reputación profesional.

**Contexto:**
- Mi rol: [ejecutivo de ventas, SDR, account manager, director comercial, consultor independiente]
- Qué vendo: [tipo de producto o servicio, ticket medio, ciclo de venta]
- Mi ICP (perfil de cliente ideal): [cargo, industria, tamaño de empresa]
- Mi presencia actual en LinkedIn: [número de conexiones, nivel de actividad, SSI si lo conoces]
- El problema que tengo con la prospección actual: [respuestas bajas en cold outreach, falta de leads inbound, dificultad para llegar a decision makers, etc.]
- El tiempo que puedo dedicar al social selling: [minutos u horas por día]

**Lo que necesito:**

Primero, ayúdame a entender qué es el social selling real y qué no es:
- La diferencia entre social selling (construir relaciones y credibilidad que facilitan la venta) y spam social (enviar InMails masivos o comentar en posts para vender)
- Por qué el perfil de LinkedIn es el primer paso y el más ignorado: cómo transformo mi perfil de currículum a propuesta de valor para mi ICP
- El Social Selling Index de LinkedIn: qué mide, por qué importa y cómo mejorarlo de forma genuina
- Las expectativas realistas: el social selling no reemplaza al cold outreach, lo complementa y lo calienta

Segundo, diseña mi estrategia de construcción de presencia personal:
- La optimización del perfil: titular orientado al valor que aporto a mis clientes (no a mi cargo), sobre mí escrito para mi ICP, experiencia contada como resultados conseguidos para clientes
- La estrategia de conexiones: cómo construyo mi red de forma estratégica. Con quién conectar, cómo personalizar las solicitudes y cuándo esperar antes de vender
- El contenido que voy a publicar: los temas en los que voy a posicionarme como referente. Cuántos posts a la semana y qué formatos para mi audiencia
- La estrategia de comentarios: cómo interactúo de forma valiosa en posts de mi ICP y de influencers de mi industria para que me descubran

Tercero, diseña el proceso de prospección social:
- Cómo uso las señales de intención en LinkedIn: quién ha visitado mi perfil, quién ha interactuado con mi contenido, quién ha comentado en posts relevantes
- El proceso de warm outreach: cómo paso de la interacción social al mensaje directo de forma natural sin parecer oportunista
- La secuencia de primer mensaje: qué digo en el primer InMail o mensaje para que tenga una tasa de respuesta alta. Qué no hacer nunca
- Cómo uso el contenido como pretexto de conversación: "vi que interactuaste con mi post sobre X, me dio curiosidad tu perspectiva sobre…"

Cuarto, dame el sistema de gestión del social selling en el día a día:
- La rutina diaria de quince a treinta minutos que genera resultados sin consumir toda mi jornada
- Cómo registro y hago seguimiento de las interacciones sociales que se convierten en oportunidades
- Cómo integro el social selling con mi CRM para no perder conversaciones prometedoras
- Cómo coordino el social selling personal con el contenido corporativo de la empresa

Quinto, dame el marco de medición:
- Las métricas que uso para evaluar si mi social selling está funcionando: solicitudes de conexión aceptadas, tasa de respuesta a mensajes, conversaciones abiertas, reuniones agendadas, oportunidades atribuidas
- El tiempo necesario antes de ver resultados y qué esperar en cada fase
- Cómo ajusto la estrategia si tras 60 días no veo conversiones

Dame un plan de acción para los primeros 30 días: qué hago exactamente cada semana para arrancar el motor.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 32,
                'use_case'         => 'Implementar estrategia de social selling en LinkedIn que genera pipeline sin spam',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product social media: cómo las empresas de producto construyen comunidad de usuarios',
                'description'      => 'Diseña la estrategia de redes sociales de un producto digital centrada en construir comunidad de usuarios, generar feedback y crear embajadores orgánicos.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en marketing de producto y construcción de comunidades de usuarios para empresas de software y aplicaciones. Has trabajado con equipos de producto en etapas desde beta privada hasta madurez para diseñar estrategias de redes sociales que construyen bases de usuarios leales, generan feedback de calidad y crean el ciclo de comunidad que impulsa el crecimiento orgánico.

Voy a compartirte el contexto de mi producto y necesito que me ayudes a diseñar una estrategia de redes sociales centrada en la comunidad de usuarios, no solo en la adquisición.

**Contexto del producto:**
- Tipo de producto: [app, SaaS, herramienta, plataforma, extensión, etc.]
- Audiencia de usuarios: [perfil, necesidades principales]
- Etapa actual: [beta, lanzamiento, crecimiento, madurez]
- Tamaño de la base de usuarios actual: [aproximado]
- Canales actuales de comunicación con usuarios: [Twitter, Discord, email, etc.]
- Objetivos de comunidad: [feedback de producto, reducción de churn, embajadores, crecimiento boca a boca, etc.]

**Lo que necesito:**

Primero, ayúdame a entender la diferencia entre social media de empresa y social media de producto:
- El tono de voz de un producto vs el de una empresa: cómo el producto puede ser más cercano, más experimental y más honesto
- Build in public: qué significa compartir el proceso de construcción del producto públicamente, cuándo tiene sentido y cuándo no
- La gestión de la comunidad de usuarios como función de producto: por qué la retroalimentación de la comunidad debe llegar directamente al roadmap
- Los riesgos de una comunidad de usuarios activa: cómo manejar las críticas públicas, los feature requests imposibles y los usuarios tóxicos

Segundo, diseña la estrategia de contenido de comunidad para mi producto:
- El contenido de transparencia: changelogs, actualizaciones, decisiones de roadmap. Cómo lo comparto de forma que genere engagement y no solo informes
- El contenido de usuarios: cómo amplifico los casos de uso de mis usuarios, los testimonios espontáneos, los usos creativos del producto que yo no había imaginado
- El contenido educativo de producto: tutoriales, tips, features escondidas, workflows avanzados que convierten usuarios básicos en power users
- El contenido de comunidad pura: preguntas, encuestas, debates sobre los problemas que mi producto resuelve más allá de hablar del producto en sí

Tercero, diseña la arquitectura de comunidad:
- Las plataformas donde construyo la comunidad y por qué: Twitter para conversaciones públicas, Discord para comunidad estrecha, LinkedIn si el usuario es profesional, Reddit si hay subreddit relevante
- El rol del equipo de producto en las redes: el CEO que comparte el camino, el PM que pregunta y escucha, el equipo de soporte que resuelve en público
- El programa de embajadores: cómo identifico y nutro a los usuarios más activos para convertirlos en promotores
- El ciclo de feedback: cómo lo que los usuarios dicen en redes llega al equipo de producto de forma estructurada

Cuarto, diseña el lanzamiento de features y actualizaciones en redes:
- El anuncio de feature: cómo presento una actualización de producto de forma que genere emoción y adopción real, no solo likes
- El drip de información previo al lanzamiento: cómo creo anticipación sin prometer lo que no sé si voy a entregar
- Cómo manejo los fallos y los rollbacks públicamente: la comunicación de crisis de producto en redes
- El post-lanzamiento: cómo amplifico el éxito con los primeros casos de uso reales

Quinto, dame el sistema de medición de la estrategia de comunidad:
- Métricas de comunidad: crecimiento de seguidores de usuarios reales (no bots), tasa de engagement, menciones espontáneas, NPS de comunidad
- Métricas de producto: cuánto del feedback de redes se convierte en cambios de producto, cuántos usuarios activos vienen de la comunidad
- Métricas de crecimiento: cuánto del crecimiento es atribuible a la comunidad vs otros canales
- La revisión trimestral: qué miro, qué ajusto, qué experimentos lanzo

Dame un plan concreto para los primeros 60 días de construcción de comunidad desde cero o desde una base pequeña.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 38,
                'use_case'         => 'Construir comunidad de usuarios en redes sociales que genera feedback y embajadores orgánicos',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'HR social media: atraer talento con contenido de cultura y employer brand',
                'description'      => 'Diseña una estrategia de employer branding en redes sociales que atrae candidatos de calidad compartiendo la cultura real de la empresa, no una versión idealizada.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en employer branding y estrategia de talento con especialización en redes sociales. Has ayudado a empresas desde startups hasta corporaciones a construir una presencia auténtica en redes que atrae candidatos alineados con la cultura, reduce el tiempo de contratación y mejora la calidad de las candidaturas. Tu filosofía es clara: el employer brand que funciona muestra la empresa real, no el folleto de RRHH.

Voy a compartirte el contexto de mi empresa y necesito que me ayudes a diseñar una estrategia de HR social media que atraiga el talento que necesitamos.

**Contexto de la empresa:**
- Tipo de empresa y sector: [startup, PYME, corporación, tecnología, consultoría, etc.]
- Tamaño actual y plan de contratación: [número de empleados actuales, perfiles que contratas con más frecuencia]
- Cultura de empresa real: [cómo describirías la cultura honestamente, incluyendo virtudes y áreas de mejora]
- Presencia actual en redes: [LinkedIn de empresa, perfiles de empleados, Glassdoor, etc.]
- El candidato que más te cuesta atraer: [perfil técnico, nivel senior, especialidad escasa, etc.]
- El principal problema de atracción: [poca visibilidad, mala reputación de marca, competencia con empresas más conocidas, etc.]

**Lo que necesito:**

Primero, ayúdame a definir la propuesta de valor del empleado (EVP) que va a guiar toda la comunicación:
- La EVP honesta: qué es genuinamente bueno en trabajar en mi empresa que no encontrarías en otras. No el "somos como una familia" genérico, sino lo específico y verificable
- Los segmentos de candidatos: el mismo puesto puede tener candidatos con perfiles de motivación muy distintos. Cómo adapto el mensaje a cada uno
- Lo que no somos: qué tipo de candidato no va a encajar en mi cultura y cómo lo comunico con honestidad para evitar contrataciones malas que cuestan más que el proceso

Segundo, diseña la estrategia de contenido de employer brand para LinkedIn:
- Los pilares de contenido: detrás de los escenarios, vida en el equipo, proyectos de los que estamos orgullosos, aprendizajes y fracasos, el crecimiento de las personas
- El contenido de los empleados: cómo activo a mis empleados como voces auténticas sin obligarlos ni crear contenido corporativo disfrazado de personal
- La cadencia y formatos: cuántos posts a la semana, mezcla entre contenido de empresa y contenido de vacantes, tipos de formatos que funcionan en LinkedIn para employer brand
- La estética visual: cómo muestro la empresa real (fotos auténticas vs producidas, diseño que comunica la personalidad de la cultura)

Tercero, diseña el contenido específico para las ofertas de empleo:
- La descripción de puesto que atrae en LinkedIn: cómo reescribo una oferta aburrida de RRHH en contenido que genera candidaturas y compartidos
- El anuncio de "estamos creciendo": cómo comunico las vacantes de forma atractiva sin que parezca publicidad de portal de empleo
- El caso del empleado: cómo presento a alguien del equipo que ocupa el rol que busco para que los candidatos se vean reflejados
- La candidatura espontánea: cómo genero un flujo constante de candidatos que quieren trabajar conmigo aunque no tengan vacante activa

Cuarto, diseña el plan de activación de empleados como embajadores:
- Cómo creo un programa de employee advocacy que sea voluntario y genuino
- Los tipos de contenido que los empleados pueden compartir cómodamente sin sentirse un megáfono corporativo
- Cómo facilito la creación de contenido para los empleados que quieren participar pero no saben qué publicar
- El reconocimiento de los empleados que participan sin crear presión sobre los que no quieren

Quinto, dame el sistema de medición del employer branding en redes:
- Métricas de visibilidad: alcance del contenido de employer brand entre el público objetivo (candidatos potenciales)
- Métricas de atracción: candidaturas espontáneas, candidaturas a través de LinkedIn, calidad de las candidaturas recibidas
- Métricas de reputación: valoraciones en Glassdoor y LinkedIn, menciones espontáneas de la empresa como lugar de trabajo
- Cómo conecto el employer branding con el coste y tiempo de contratación

Dame un plan de los primeros 90 días con acciones concretas semana a semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 38,
                'use_case'         => 'Diseñar estrategia de employer branding en redes sociales que atrae candidatos de calidad',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Financial content en redes: educar al mercado y construir reputación experta',
                'description'      => 'Diseña una estrategia de contenido financiero en redes sociales que construye reputación de expertise, educa al mercado y genera oportunidades de negocio respetando la regulación.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en marketing de contenidos para el sector financiero con profundo conocimiento de las restricciones regulatorias y la ética en la comunicación financiera. Has asesorado a gestoras de fondos, asesores financieros, family offices y empresas de fintech en la construcción de presencia en redes sociales que es a la vez educativa, atractiva y legalmente sólida. Entiendes que en finanzas, la credibilidad tarda años en construirse y segundos en destruirse.

Voy a compartirte el contexto de mi empresa o perfil y necesito que me ayudes a diseñar una estrategia de contenido financiero en redes que construya reputación experta de forma sostenible.

**Contexto:**
- Tipo de empresa o perfil: [gestora de fondos, asesor financiero independiente, fintech, banco, consultora financiera, CFO de empresa no financiera, etc.]
- Audiencia objetivo: [inversores particulares, inversores institucionales, empresas, directores financieros, etc.]
- Regulación que aplica a mi comunicación: [MiFID II, normativa CNMV, SEC, etc. o "no sé exactamente"]
- Plataformas donde quiero construir presencia: [LinkedIn, Twitter/X, YouTube, newsletter, etc.]
- Temas de expertise en los que tengo autoridad real: [gestión de carteras, planificación fiscal, M&A, tesorería corporativa, etc.]
- Objetivo principal: [generar leads, construir reputación, educar al mercado, atraer talento, etc.]

**Lo que necesito:**

Primero, ayúdame a entender el marco regulatorio de la comunicación financiera en redes:
- Qué se considera comunicación de marketing financiero sujeta a regulación y qué es contenido educativo libre
- Las menciones obligatorias y advertencias que debo incluir según el tipo de contenido
- La diferencia entre asesoramiento financiero (regulado, no puedo darlo en redes sin cumplir requisitos) y educación financiera (libre)
- Los errores de comunicación financiera más comunes en redes que generan sanciones regulatorias o problemas reputacionales
- Nota: no soy tu abogado, dame el marco general y dime qué preguntar a tu compliance team

Segundo, diseña los pilares de contenido financiero para mi caso:
- El contenido educativo: cómo enseño conceptos financieros complejos de forma accesible sin simplificarlos de forma engañosa
- El contenido de análisis y perspectiva: cómo comparto mi visión del mercado o de una tendencia sin que se interprete como recomendación de inversión
- El contenido de proceso y metodología: cómo explico cómo pienso y cómo trabajo sin revelar información confidencial de clientes
- El contenido de contexto y datos: cómo uso estadísticas, datos económicos e investigación para posicionarme como fuente de información fiable

Tercero, diseña el tono y el estilo de comunicación para finanzas:
- La precisión técnica sin jerga: cómo escribo para una audiencia no especializada sin perder el rigor que me da credibilidad ante los especialistas
- La opinión con matices: cómo expreso mis perspectivas de mercado de forma que genere debate intelectual sin comprometer mi neutralidad fiduciaria
- El manejo de la incertidumbre: cómo comunico lo que no sé de forma que refuerce mi credibilidad en lugar de erosionarla
- Cuándo no publicar: situaciones de mercado (alta volatilidad, eventos de riesgo sistémico) donde el silencio o la máxima cautela es la mejor opción

Cuarto, diseña el proceso de creación y aprobación de contenido:
- Quién aprueba el contenido antes de publicarlo y con qué criterios
- El archivo y registro de todo el contenido publicado (obligatorio en muchas jurisdicciones reguladas)
- Cómo gestiono los comentarios y preguntas de la audiencia sin caer en asesoramiento individualizado no autorizado
- La gestión de la crisis de reputación: qué hago si un post genera una controversia o una queja regulatoria

Quinto, dame el sistema de medición de la estrategia de contenido financiero:
- Métricas de credibilidad: menciones en medios, invitaciones a hablar en eventos, citas por parte de otros profesionales
- Métricas de audiencia: crecimiento de la red de conexiones relevantes, engagement de perfiles de decisores
- Métricas de negocio: leads inbound atribuibles al contenido, reuniones solicitadas por prospectos que vienen del contenido
- El retorno esperado y el tiempo necesario: cómo calibro las expectativas para no abandonar antes de ver resultados

Dame un plan de los primeros seis meses con una cadencia realista y los primeros diez temas de contenido que publicaría en mi caso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 42,
                'use_case'         => 'Diseñar estrategia de contenido financiero en redes que construye reputación respetando la regulación',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal content en redes: el despacho que comparte conocimiento para generar mandatos',
                'description'      => 'Diseña una estrategia de contenido jurídico en LinkedIn y otras redes que posiciona el despacho como referente de expertise y genera mandatos sin violar la ética profesional.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en marketing jurídico y posicionamiento de despachos de abogados con conocimiento de los códigos deontológicos y las restricciones publicitarias de la profesión legal en España y la Unión Europea. Has asesorado a firmas de todas las especialidades (mercantil, laboral, fiscal, penal económico, propiedad intelectual) en la construcción de presencia en redes que genera mandatos sin comprometer la dignidad profesional ni la confidencialidad del cliente.

Voy a compartirte el contexto de mi despacho y necesito que me diseñes una estrategia de contenido jurídico en redes sociales que sea efectiva y éticamente sólida.

**Contexto del despacho:**
- Especialidad jurídica principal: [mercantil, laboral, fiscal, procesal civil, penal, familia, etc.]
- Tipo de cliente objetivo: [empresas (sector y tamaño), particulares de alta renta, startups, etc.]
- Tamaño del despacho: [socio único, boutique, firma mediana]
- Presencia actual en redes: [LinkedIn personal, LinkedIn de empresa, Twitter, sin presencia]
- Restricciones que me preocupan: [qué partes del código deontológico me generan dudas]
- Objetivo principal: [generar mandatos directos, posicionarme como referente, atraer talento jurídico]

**Lo que necesito:**

Primero, ayúdame a entender el marco deontológico de la publicidad jurídica en España:
- Las restricciones del Estatuto General de la Abogacía y el código deontológico sobre publicidad: qué está prohibido, qué está permitido y qué está en zona gris
- La diferencia entre marketing de contenidos jurídicos (compartir conocimiento) y publicidad de servicios (prohibida o limitada)
- Qué tipo de resultados pasados puedo mencionar y en qué términos para no incumplir la confidencialidad ni crear expectativas ilegítimas
- Las menciones y advertencias que debo incluir en el contenido jurídico (no es asesoramiento legal, consulte a un profesional, etc.)

Segundo, diseña los pilares de contenido jurídico para mi especialidad:
- El análisis de novedades legislativas y jurisprudenciales: cómo explico una sentencia importante o un cambio normativo de forma que mi cliente ideal entienda las implicaciones prácticas para su negocio o situación
- El contenido preventivo: cómo enseño a mi cliente objetivo a evitar los problemas jurídicos que yo resuelvo. El paradox de la prevención como generador de confianza
- El contenido de proceso: cómo explico cómo funciona un procedimiento jurídico sin que nadie crea que puede hacerlo solo
- El contenido de tendencias: cómo me posiciono en los debates jurídicos y regulatorios de mi especialidad

Tercero, diseña el tono y el formato adecuado para contenido jurídico en LinkedIn:
- El lenguaje accesible sin perder el rigor: cómo traduzco conceptos jurídicos complejos sin distorsionarlos
- El formato de post que funciona: texto con estructura clara, carrusel explicativo, comentario a una noticia, análisis de sentencia
- La gestión de la controversia jurídica: cómo expreso una opinión sobre una cuestión legal debatida sin que se use contra mí profesionalmente
- La respuesta a los comentarios: cómo gestiono las preguntas concretas de la audiencia sin caer en asesoramiento jurídico gratuito no solicitado

Cuarto, diseña la conexión entre el contenido y la generación de mandatos:
- El recorrido del potencial cliente: desde que lee mi contenido hasta que me llama, qué etapas recorre y cómo el contenido facilita cada una
- Los contenidos que más decantan hacia el contacto: cuáles generan más solicitudes de consulta y por qué
- El CTA sutil y profesional: cómo invito al contacto sin que parezca publicidad ni comprometa la dignidad del despacho
- El seguimiento de contactos generados por redes: cómo registro y gestiono los prospectos que llegan por el contenido

Quinto, dame el plan de implementación:
- La cadencia realista de publicación que un abogado puede mantener con una agenda cargada
- Los primeros cinco temas de contenido para mi especialidad que publicaría esta semana
- Cómo delego o externalizo parte de la producción sin perder el tono de voz y el rigor técnico
- Las métricas de éxito a seis y doce meses

Incluye ejemplos de despachos o abogados que lo están haciendo bien en España o Europa y qué podemos aprender de ellos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar estrategia de contenido jurídico en LinkedIn que genera mandatos respetando la deontología',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'CS content marketing: el equipo de éxito que comparte conocimiento públicamente',
                'description'      => 'Diseña una estrategia de content marketing liderada por el equipo de Customer Success que reduce el churn, mejora la adopción y construye comunidad de usuarios comprometidos.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en Customer Success y content marketing con experiencia transformando equipos de CS en motores de contenido que reducen el churn, mejoran la adopción y generan pipeline de expansión. Tu especialidad es convertir el conocimiento que el equipo de CS acumula en las conversaciones con clientes en contenido que beneficia a toda la base de usuarios y posiciona a la empresa como referente en su categoría.

Voy a contarte sobre mi empresa y mi equipo de CS y necesito que me ayudes a diseñar una estrategia de CS content marketing que genere impacto real.

**Contexto:**
- Tipo de producto: [SaaS B2B, plataforma, herramienta, app]
- Tamaño del equipo de CS: [número de CSMs]
- Base de clientes: [número aproximado, tipo de empresas]
- Métricas de CS actuales: [churn rate, NRR, NPS]
- Problema principal en CS: [adopción baja de features, churn en los primeros 90 días, cuentas que no crecen, etc.]
- Canales de comunicación con clientes actuales: [email, webinars, base de conocimiento, etc.]
- Objetivo del content marketing de CS: [reducir churn, aumentar adopción, generar expansión, construir comunidad]

**Lo que necesito:**

Primero, ayúdame a entender por qué el equipo de CS es una fuente privilegiada de contenido:
- Los CSMs tienen acceso a los problemas reales de los clientes, los casos de uso creativos que nadie documentó y las preguntas que todo el mundo tiene pero nadie hace en la base de conocimiento
- La diferencia entre el contenido de marketing (orientado a vender) y el contenido de CS (orientado a hacer exitoso al cliente que ya compró)
- Cómo el contenido de CS crea un efecto de red: un cliente que usa mejor el producto retiene más, expande más y recomienda más

Segundo, diseña los pilares de contenido del equipo de CS:
- Las guías de adopción profunda: los tutoriales avanzados, los workflows menos conocidos, las integraciones que marcan la diferencia
- Las historias de clientes: los casos de éxito contados por el CSM que los vivió, con métricas reales y el proceso detallado
- Las preguntas frecuentes escaladas a contenido: cómo cada pregunta repetida de soporte se convierte en un artículo, un video o un post
- El contenido de comunidad: los retos del sector que van más allá del producto, donde el equipo de CS aporta perspectiva como consejeros

Tercero, diseña los canales y formatos del CS content marketing:
- La base de conocimiento como SEO: cómo la documentación técnica del producto se convierte en contenido que atrae a futuros clientes con las mismas preguntas
- Los webinars de adopción: los webinars de producto que no solo muestran features sino que enseñan workflows completos de valor para el cliente
- La newsletter de clientes: el boletín mensual que mantiene a los clientes informados de novedades, casos de uso y recursos. Cómo la hago que la gente abra y lea
- Las redes sociales del equipo de CS: cómo los CSMs comparten perspectivas y conocimiento en LinkedIn de forma que atrae tanto a clientes actuales como a prospectos

Cuarto, diseña el proceso de producción del contenido con el equipo de CS:
- Cómo capturo sistemáticamente las pepitas de contenido del equipo: las notas de reuniones, los tickets de soporte, las llamadas de renovación
- El flujo de producción que no mata la agenda del CSM: cuántas horas a la semana, quién revisa, quién publica
- La colaboración con marketing: cómo el contenido de CS se integra en la estrategia de marketing de contenidos sin perder su autenticidad
- El incentivo para el equipo de CS: por qué contribuir al contenido les beneficia profesionalmente

Quinto, dame el sistema de medición del impacto del CS content marketing:
- Métricas de adopción: cuántos clientes usan un feature después de ver el contenido que lo explica
- Métricas de retención: diferencia en churn entre clientes que consumen el contenido y los que no
- Métricas de expansión: oportunidades de upsell generadas por el contenido que muestra casos de uso avanzados
- Métricas de soporte: reducción en tickets de las mismas preguntas después de publicar contenido que las responde

Dame un plan de 90 días para arrancar el programa de CS content marketing con un equipo de CS que nunca ha publicado contenido antes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 38,
                'use_case'         => 'Convertir el conocimiento del equipo de CS en contenido que reduce churn y mejora adopción',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Redes sociales del freelance B2B: el contenido que atrae proyectos premium',
                'description'      => 'Diseña tu estrategia de presencia en redes sociales como freelance B2B para atraer proyectos de alta calidad, eliminar la búsqueda activa de clientes y posicionarte como referente en tu especialidad.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en marketing personal para freelancers y consultores independientes con experiencia asesorando a profesionales de diseño, tecnología, marketing, consultoría estratégica y comunicación en la construcción de una presencia en redes sociales que atrae proyectos de alta calidad de forma consistente. Tu filosofía es que el mejor freelance no busca clientes: construye una presencia tan clara y valiosa que los clientes correctos llegan a él.

Voy a contarte sobre mi situación como freelance y necesito que me ayudes a diseñar una estrategia de redes sociales que me posicione como referente en mi especialidad y atraiga proyectos premium sin buscarlos activamente.

**Contexto:**
- Mi especialidad: [diseño UX, desarrollo backend, consultoría de marketing, copywriting, fotografía corporativa, etc.]
- Mi nicho o industria de clientes: [startups de tecnología, empresas de moda, sector salud, etc.]
- Tipo de proyectos que quiero atraer: [estratégicos y de alto impacto, no de ejecución puntual]
- Ticket medio actual: [aproximado] y ticket medio que quiero alcanzar: [objetivo]
- Mi presencia actual: [qué tienes en LinkedIn, Twitter, web personal, portfolio, etc.]
- El problema que tengo hoy: [poco volumen de oportunidades entrantes, proyectos de bajo valor, clientes equivocados, etc.]

**Lo que necesito:**

Primero, ayúdame a entender el posicionamiento antes de la estrategia de contenido:
- Por qué los freelancers que cobran el doble que la media no trabajan el doble: cómo el posicionamiento de expertise crea una categoría propia
- La diferencia entre posicionarte como ejecutor (hago lo que me pides) vs posicionarte como experto (sé lo que necesitas aunque no lo sepas todavía)
- Cómo defino mi nicho con la suficiente especificidad para ser el mejor del mundo en algo concreto, pero sin ser tan estrecho que los proyectos escaseen
- Mi propuesta de valor única: qué combinación de experiencia, perspectiva y método me hace diferente en mi especialidad

Segundo, diseña los pilares de contenido para mi perfil de freelance:
- El contenido de expertise: lo que sé sobre mi especialidad que la mayoría de mis potenciales clientes no sabe. No secretos, sino perspectiva de profesional que solo tiene quien ha hecho el trabajo muchas veces
- El contenido de proceso: cómo trabajo, cómo tomo decisiones, cómo pienso un proyecto. Hace que el cliente entienda el valor antes de contratarme
- El contenido de resultados: casos reales de proyectos, siempre con el permiso del cliente, con métricas concretas y aprendizajes honestos
- El contenido de perspectiva de industria: las tendencias de mi especialidad, los cambios que veo venir, los debates en los que tengo una opinión fundamentada

Tercero, diseña la plataforma principal y el formato de contenido que mejor funciona para mi caso:
- Cuál es la plataforma donde está mi cliente ideal cuando está buscando a alguien como yo
- El formato que combina mejor con mi especialidad: texto largo reflexivo, carrusel de aprendizajes, thread de proceso, portfolio visual
- La cadencia realista: cuántas veces por semana puedo publicar con calidad sin que el contenido compita con el trabajo de cliente
- Cómo conecto el contenido con mi portfolio y mi web para que quien llegue a mis redes pueda contratar fácilmente

Cuarto, diseña el sistema de conversión de seguidor a cliente:
- Cuándo y cómo invitar a una conversación a alguien que interactúa con mi contenido sin parecer oportunista
- El CTA que funciona para un freelance premium: cómo presento mis servicios de forma que filtre a los clientes de bajo valor
- La primera consulta o discovery call: cómo la diseño para que sea valiosa para el potencial cliente aunque no me contrate
- El sistema de gestión de las oportunidades que entran por redes: cómo las califico y las priorizo sin perder nada

Quinto, dame el plan de construcción de presencia para los primeros seis meses:
- Los primeros 30 días: establecer las bases del perfil, publicar las primeras piezas de posicionamiento
- Los 60 días siguientes: construir el hábito de publicación, empezar a interactuar con la comunidad relevante
- Los últimos 90 días: evaluar qué tipo de contenido genera más resonancia con el cliente ideal y doblar la apuesta

Dame métricas de éxito para cada fase y los criterios para decidir si la estrategia está funcionando o necesita ajuste.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 32,
                'use_case'         => 'Construir presencia en redes sociales como freelance B2B que atrae proyectos premium sin buscarlos',
                'vote_score'       => 43,
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
