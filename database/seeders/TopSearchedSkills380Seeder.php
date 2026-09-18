<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills380Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Podcast como canal de marketing de contenidos: estrategia y crecimiento de audiencia',
                'description'      => 'Aprende a diseñar y ejecutar una estrategia de podcast orientada a marketing de contenidos: definición de formato, crecimiento de audiencia, distribución multicanal y conversión de oyentes en leads cualificados.',
                'prompt_content'   => <<<'EOT'
Actúa como un estratega de contenidos especializado en podcasting para marcas y empresas. Voy a lanzar o escalar un podcast corporativo como canal de marketing y necesito una estrategia completa desde el concepto hasta la distribución.

CONTEXTO
El podcast es uno de los canales de contenido de mayor crecimiento y fidelización, pero muchas marcas lanzan podcasts sin estrategia clara y los abandonan en los primeros 10 episodios. Este ejercicio diseña una estrategia sostenible y orientada a resultados de negocio.

FASE 1 — DEFINICIÓN ESTRATÉGICA DEL PODCAST
Antes de grabar el primer episodio, define el fundamento estratégico:
- Objetivo del podcast: ¿brand awareness, generación de leads, posicionamiento de autoridad, retención de clientes, reclutamiento de talento? Cómo varía la estrategia según el objetivo
- Audiencia objetivo: crea un "oyente ideal" con sus hábitos de consumo de audio, preguntas recurrentes y problemas que el podcast debe resolver
- Propuesta de valor única: qué hace diferente a este podcast del resto en su categoría — cómo articular esa diferencia en una sola frase
- Alineación con el funnel de marketing: cómo el podcast se integra con el blog, las newsletters, los webinars y las redes sociales

FASE 2 — DISEÑO DEL FORMATO
El formato define la experiencia del oyente:
- Tipos de formato: entrevistas, monólogos educativos, debates, narrativa documental, formato Q&A — ventajas y desventajas de cada uno para objetivos de marketing
- Duración óptima según el formato y la audiencia objetivo
- Frecuencia de publicación: semanal, quincenal, por temporadas — impacto en el crecimiento de audiencia y sostenibilidad de producción
- Estructura del episodio: cómo diseñar una plantilla repetible que facilite la producción y mejore la experiencia del oyente
- Temporadas temáticas: ventajas de estructurar el podcast en temporadas para aumentar el binge listening

FASE 3 — BRANDING SONORO E IDENTIDAD
- Nombre del podcast: criterios para un nombre memorable, buscable y posicionable
- Jingle o música de entrada: briefing para el compositor y características sonoras que deben reflejar la marca
- Voz y tono: cómo traducir la personalidad de marca al lenguaje hablado
- Diseño de portada: especificaciones técnicas y elementos visuales que maximizan el CTR en plataformas de podcast
- Templates de comunicación: cómo describir el podcast en cada plataforma de distribución para maximizar el descubrimiento

FASE 4 — ESTRATEGIA DE DISTRIBUCIÓN Y GROWTH
- Plataformas prioritarias según la audiencia objetivo: Spotify, Apple Podcasts, Google Podcasts, iVoox — cómo optimizar el perfil en cada una
- SEO para podcasts: cómo optimizar títulos, descripciones y show notes para búsquedas dentro y fuera de las plataformas
- Cross-promotion: cómo usar otros canales de la marca (email, redes sociales, blog) para crecer la audiencia del podcast
- Estrategia de lanzamiento: por qué publicar 3-5 episodios el día del lanzamiento y cómo maximizar el impacto inicial
- Colaboración y co-marketing: intercambio de menciones con otros podcasts complementarios

FASE 5 — CONVERSIÓN Y MÉTRICAS
- Cómo incluir CTAs en los episodios sin interrumpir la experiencia: lead magnets, demos, newsletters
- Métricas clave: descargas, retención por episodio, suscriptores, tráfico referido al sitio web — cómo interpretar cada una
- Atribución: cómo medir el impacto del podcast en el pipeline de ventas y en los KPIs de marketing
- Monetización indirecta: cómo el podcast acelera el cierre de ventas y reduce el ciclo de compra

FORMATO DE RESPUESTA
Estructura la respuesta en las cinco fases. Incluye un calendario editorial de los primeros 12 episodios con temas, ángulos y CTAs, y una tabla de métricas de podcast con los benchmarks del sector para cada indicador.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar estrategia de podcast corporativo como canal de marketing',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Podcast técnico para desarrolladores: diseño de formato y estrategia de crecimiento',
                'description'      => 'Aprende a crear y escalar un podcast orientado a la comunidad de desarrollo de software: selección de temas técnicos, formato de episodios, captación de invitados relevantes y estrategias de distribución en comunidades tech.',
                'prompt_content'   => <<<'EOT'
Actúa como un creador de contenido técnico con experiencia en podcasts para comunidades de desarrollo de software, devrel y tech evangelism. Voy a lanzar o mejorar un podcast técnico dirigido a desarrolladores y necesito una estrategia específica para esta audiencia exigente.

CONTEXTO
Los desarrolladores son una audiencia difícil de conquistar con contenido superficial. Valoran la profundidad técnica, odian el marketing disfrazado de contenido, y consumen podcasts principalmente durante el desplazamiento o mientras realizan tareas repetitivas. Este ejercicio diseña un podcast que gane su respeto y confianza.

BLOQUE 1 — DEFINICIÓN DEL NICHO TÉCNICO
La elección del nicho es la decisión más importante:
- Opciones de nicho: fullstack, backend, frontend, mobile, DevOps/SRE, seguridad, arquitectura, open source, startups tech, IA/ML — cómo evaluar la competencia y el tamaño de audiencia en cada uno
- El nicho por lenguaje o ecosistema: pros y contras de especializarse en Python, JavaScript, Rust, Go, etc.
- El nicho por nivel: junior/mid, senior, tech leads, CTOs — cómo varía el contenido según el nivel
- Cómo validar el nicho antes de producir: comunidades, foros, tendencias de búsqueda

BLOQUE 2 — FORMATOS QUE FUNCIONAN CON AUDIENCIAS TÉCNICAS
- Deep dives técnicos: cómo estructurar un episodio sobre una tecnología o concepto específico
- Entrevistas a ingenieros: qué preguntas generan las respuestas más valiosas (errores reales, decisiones de arquitectura, post-mortems)
- "Pair listening": análisis en directo de código, PRs o arquitecturas — cómo ejecutarlo bien en audio
- Episodios de noticias técnicas: cómo hacer que el contenido de actualidad sea relevante más allá de la semana de publicación
- Formato de temporadas temáticas: ejemplos de temporadas que han funcionado (ej: "Sistemas distribuidos", "Optimización de rendimiento")

BLOQUE 3 — CAPTACIÓN DE INVITADOS TÉCNICOS DE CALIDAD
- Cómo identificar a los ingenieros que tienen historias valiosas que contar (no solo los más famosos)
- El pitch de invitación: qué debe incluir para que un ingeniero ocupado diga que sí
- Preparación del invitado: qué información enviar y qué preguntas compartir con antelación para maximizar la calidad técnica
- Cómo gestionar invitados que no son comunicadores naturales
- Construcción de red: cómo cada episodio abre la puerta al siguiente invitado

BLOQUE 4 — PRODUCCIÓN Y DISTRIBUCIÓN EN COMUNIDADES TECH
- Equipamiento mínimo recomendado y flujo de trabajo de edición para contenido técnico
- Show notes técnicas: cómo escribir notas que sean un recurso de referencia por sí mismas (con links, snippets de código, definiciones)
- Distribución en comunidades: Reddit, Hacker News, newsletters técnicas, Discord servers, Slack communities — estrategia para cada canal
- Transcript como SEO: por qué los transcripts completos y bien editados son el mayor activo de SEO de un podcast técnico
- Clips y teaser: cómo extraer momentos técnicos de alto valor para redes sociales

BLOQUE 5 — MÉTRICAS Y MONETIZACIÓN EN PODCASTS TÉCNICOS
- Métricas de éxito para un podcast técnico: escuchas por episodio, retención, tráfico web referido, menciones en comunidades
- Monetización ética: patrocinadores que la audiencia técnica respeta (herramientas dev, plataformas cloud, cursos técnicos)
- Integración con un repositorio GitHub o documentación técnica complementaria
- Cómo usar el podcast para construir una comunidad en Discord o foro propio

FORMATO DE RESPUESTA
Desarrolla los cinco bloques con profundidad técnica. Incluye una lista de los 20 mejores temas de episodios para un podcast técnico nuevo, ordenados por potencial de crecimiento de audiencia, y un template de show notes técnicas con todas las secciones recomendadas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear y hacer crecer un podcast dirigido a desarrolladores de software',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de identidad sonora y branding para podcast creativo',
                'description'      => 'Aprende a diseñar la identidad sonora, visual y narrativa de un podcast creativo: desde el nombre y la portada hasta la música, el tono de voz y la experiencia de marca que diferencia al podcast en plataformas saturadas.',
                'prompt_content'   => <<<'EOT'
Actúa como un director creativo especializado en identidad de marca para medios de audio y podcasts. Voy a diseñar o rediseñar la identidad completa de un podcast creativo y necesito un proceso de branding riguroso adaptado al medio sonoro.

CONTEXTO
El podcast como medio tiene características únicas de branding: la portada es el primer punto de contacto visual en plataformas de streaming, pero la experiencia real es completamente auditiva. El branding debe funcionar en ambas dimensiones y crear reconocimiento en un mercado con millones de podcasts.

SECCIÓN 1 — ESTRATEGIA DE MARCA DEL PODCAST
Antes de diseñar cualquier elemento visual o sonoro:
- Arquetipos de marca para podcasts: el Explorador, el Sabio, el Creador, el Compañero — cómo elegir el arquetipo que mejor representa la propuesta de valor
- Personalidad de marca: define 5 atributos de personalidad del podcast y su opuesto para delimitar el territorio de marca
- La promesa del podcast: qué transformación experimenta el oyente de principio a fin de cada episodio
- Diferenciación: análisis de los 3 podcasts competidores más relevantes y cómo posicionarse de manera única respecto a ellos

SECCIÓN 2 — IDENTIDAD VERBAL Y NAMING
- Criterios para el nombre del podcast: memorabilidad, buscabilidad, disponibilidad de dominio y handle en redes, pronunciabilidad en diferentes idiomas
- Tipologías de nombres: descriptivos, evocadores, abstractos, nombres propios, acrónimos — ventajas para podcasts en cada categoría
- Tagline del podcast: cómo construir una frase que capture la esencia en menos de 10 palabras
- Tono editorial: define el espectro entre formal/informal, serio/humor, íntimo/distante y cómo se traduce en el lenguaje hablado del presentador
- Vocabulario de marca: palabras que el podcast usa habitualmente y palabras que evita

SECCIÓN 3 — IDENTIDAD SONORA
La identidad sonora es el elemento más diferencial y el más descuidado:
- Música de entrada (intro): briefing completo para un compositor — tempo, instrumentación, duración, emoción que debe transmitir, referencias musicales
- Transiciones y camas musicales: cómo usar la música dentro del episodio para guiar al oyente
- La voz del presentador: matices a trabajar — ritmo, énfasis, pausas, nivel de energía — que construyen la identidad sonora
- Efectos sonoros de marca: sonidos identificadores que se repiten en cada episodio (como el sonido de notificación de WhatsApp para la marca)
- Música de cierre: cómo debe diferenciarse de la intro y qué emoción debe dejar en el oyente

SECCIÓN 4 — IDENTIDAD VISUAL PARA PLATAFORMAS DE AUDIO
La portada del podcast es el único punto de contacto visual en plataformas de streaming:
- Especificaciones técnicas: dimensiones, formatos de archivo, resolución mínima para todas las plataformas
- Principios de diseño para portadas de podcast: legibilidad en miniatura (50x50px), contraste, tipografía
- Los 5 errores más comunes en portadas de podcast y cómo evitarlos
- Sistema de portadas por temporada: cómo mantener coherencia visual mientras se diferencia cada temporada
- Diseño de assets complementarios: imágenes para episodios individuales, stories para Instagram, thumbnails para clips en YouTube

SECCIÓN 5 — EXPERIENCIA DE MARCA EN CADA PUNTO DE CONTACTO
- Perfil en plataformas: cómo optimizar la descripción del podcast en Apple Podcasts, Spotify e iVoox para que refuerce la identidad de marca
- Show notes: estructura y tono que refuerzan la identidad visual y verbal
- Newsletter del podcast: cómo extender la experiencia de marca al email
- Comunidad: cómo el tono y las normas de la comunidad (Discord, Telegram) son parte de la identidad

FORMATO DE RESPUESTA
Desarrolla las cinco secciones con detalle. Incluye una plantilla de brand book básico para podcasts con todas las secciones que debe contener, y un brief de diseño de portada listo para enviar a un diseñador o para trabajar en Canva o Figma.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar identidad sonora, visual y narrativa de un podcast',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Podcast de ventas: monetización, generación de leads y posicionamiento de autoridad',
                'description'      => 'Aprende a crear un podcast orientado a ventas que genere leads cualificados, posicione al presentador como autoridad en su sector y se monetice de manera efectiva a través de patrocinios, ofertas directas y partnerships comerciales.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor especializado en podcasts como herramienta de ventas y generación de negocio, con experiencia asesorando a equipos comerciales y vendedores independientes. Voy a crear un podcast que sirva como canal de ventas y posicionamiento y necesito una estrategia completa.

CONTEXTO
El podcast es uno de los canales más efectivos para la generación de leads B2B y el posicionamiento de autoridad en ventas: los oyentes pasan entre 20 y 45 minutos de atención focalizada con el presentador en cada episodio, lo que crea un nivel de confianza difícil de replicar en otros canales. Este ejercicio diseña un podcast que genere negocio de manera consistente.

MÓDULO 1 — POSICIONAMIENTO DEL PODCAST COMO HERRAMIENTA DE VENTAS
- Define el perfil exacto del oyente ideal en términos de cargo, sector, problema de negocio y momento de compra
- Alineación del podcast con el proceso de ventas: cómo el podcast reduce la fricción en cada etapa del funnel (conciencia, consideración, decisión)
- El podcast como "warm calling": cómo los leads que llegan habiendo escuchado el podcast convierten a tasas superiores y en menos tiempo
- Estrategia de contenido basada en las objeciones de ventas más frecuentes: cada episodio responde a una objeción real del proceso comercial

MÓDULO 2 — FORMATO OPTIMIZADO PARA CONVERSIÓN
- El formato de entrevista a clientes: por qué los casos de éxito en formato conversacional generan más confianza que los white papers
- Episodios de "behind the scenes": cómo mostrar el proceso y la metodología sin revelar los secretos aumenta el deseo de compra
- Formato de solución de problemas en directo: tomar el problema de un oyente y resolverlo en el episodio
- Cómo incluir CTAs de manera natural en episodios de 20-40 minutos sin que el oyente sienta que está escuchando un anuncio largo

MÓDULO 3 — CAPTACIÓN DE INVITADOS COMO ESTRATEGIA COMERCIAL
Invitar a un prospect como invitado es una de las tácticas de prospección más efectivas:
- El "podcast as a door opener": cómo usar la invitación al podcast para conseguir reuniones con prospectos que no responden al email comercial
- Cómo estructurar el episodio con un prospecto para que sea valioso para el oyente pero también mueva la conversación comercial
- La propuesta de invitación: plantilla de email que convierte con alta tasa de respuesta
- Post-episodio: cómo la publicación del episodio abre la conversación de seguimiento comercial de manera natural

MÓDULO 4 — MONETIZACIÓN DEL PODCAST
Fuentes de monetización directas e indirectas:
- Patrocinios: cómo conseguir el primer patrocinador, qué incluir en el media kit, cómo fijar precios basados en CPM (coste por mil escuchas)
- Ofertas propias: cómo estructurar las menciones de productos y servicios propios en cada episodio
- Contenido premium: episodios exclusivos, comunidades de pago, cursos derivados del podcast
- Afiliación: recomendación de herramientas y productos con comisión — qué plataformas y cómo integrarlo sin perder credibilidad
- Masterminds y eventos: cómo el podcast es la palanca de captación para programas de alto valor

MÓDULO 5 — MÉTRICAS DE VENTAS PARA PODCASTS
Más allá de las descargas, las métricas que importan en un podcast orientado a ventas:
- Leads generados desde el podcast (con URL de seguimiento o pregunta en el formulario)
- Tasa de conversión de oyentes vs. leads de otros canales
- Pipeline atribuido al podcast: clientes que mencionan el podcast como punto de contacto en el CRM
- Tiempo de ciclo de ventas para leads de podcast vs. otros canales
- NPS de clientes que escuchaban el podcast antes de comprar

FORMATO DE RESPUESTA
Estructura la respuesta en los cinco módulos. Incluye una plantilla de media kit de podcast para ventas de patrocinios, un template de email de invitación a prospectos y un dashboard de métricas de conversión de podcast con las fórmulas de cálculo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Usar el podcast como canal de ventas, leads y monetización',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Podcast de producto: estrategia de contenido, distribución y posicionamiento',
                'description'      => 'Aprende a diseñar un podcast orientado a product management que posicione al equipo de producto como referente en el sector, facilite el reclutamiento de talento y construya una comunidad de usuarios y practitioners.',
                'prompt_content'   => <<<'EOT'
Actúa como un Head of Product con experiencia en creación de contenido para comunidades de producto y DevRel (developer relations). Voy a crear o mejorar un podcast de producto y necesito una estrategia que conecte el contenido del podcast con los objetivos del equipo de producto.

CONTEXTO
Los podcasts de producto tienen múltiples audiencias potenciales: usuarios del producto, practitioners de product management, inversores y prensa tech, y candidatos a puestos en el equipo. Una estrategia bien diseñada puede servir a todas estas audiencias simultáneamente o elegir un foco específico para maximizar el impacto.

DIMENSIÓN 1 — OBJETIVOS Y AUDIENCIAS DEL PODCAST DE PRODUCTO
Define el propósito del podcast de producto:

Opción A — Podcast orientado a la comunidad de PM:
- Posicionamiento de la empresa como thought leader en product management
- Atracción de talento: PMs que escuchan el podcast quieren trabajar en esa empresa
- Contenido: metodologías, frameworks, decisiones de producto, post-mortems

Opción B — Podcast orientado a usuarios y clientes:
- Educación sobre el producto y sus casos de uso
- Reducción del churn por mayor comprensión del valor del producto
- Contenido: casos de éxito, tutoriales en audio, roadmap discussions, sesiones Q&A

Opción C — Podcast orientado a partners y ecosistema:
- Construcción del ecosistema de integraciones y partners
- Contenido: casos de integración, historias de partners, API use cases

Ayúdame a elegir la opción según los objetivos de negocio y diseñar la estrategia para la opción elegida.

DIMENSIÓN 2 — FORMATO Y ESTRUCTURA DE EPISODIOS
Para un podcast de producto:
- La entrevista al usuario: cómo estructurar una conversación que extraiga insights de producto valiosos y que sea entretenida para los oyentes
- El "product teardown" en audio: análisis crítico de decisiones de producto propias o de la competencia
- Episodios de roadmap: cómo comunicar la dirección del producto de manera que genere expectativa sin comprometer fechas
- Sesiones de preguntas y respuestas: cómo recopilar y seleccionar preguntas de la comunidad para maximizar el valor del episodio
- Post-mortems y lessons learned: cómo hablar de fracasos de producto de manera que construya autoridad en lugar de erosionarla

DIMENSIÓN 3 — INTEGRACIÓN CON EL CICLO DE PRODUCTO
El podcast como herramienta de discovery y validación:
- Cómo usar episodios del podcast para validar hipótesis de producto con la audiencia antes de construir
- Cierre del loop: cómo publicar episodios que den feedback visible a los usuarios sobre cómo sus aportaciones han influido en el producto
- El podcast como canal de user research cualitativo: técnicas para extraer insights de las preguntas y comentarios de oyentes
- Integración con el changelog del producto: cómo hacer que las actualizaciones importantes tengan un episodio de podcast que las contextualice

DIMENSIÓN 4 — DISTRIBUCIÓN Y CRECIMIENTO EN COMUNIDADES DE PRODUCTO
- Comunidades clave: Product Hunt, Mind the Product, Lenny's Newsletter ecosystem, ProductTalk, Reddit r/ProductManagement
- Estrategia de guest appearance: cómo conseguir que PMs conocidos acepten aparecer en el podcast
- Cross-promotion con newsletters de producto: cómo conseguir menciones en las newsletters más leídas del sector
- Clips y highlights para LinkedIn: qué tipo de momentos del episodio funcionan mejor en la red social dominante para PMs

DIMENSIÓN 5 — MÉTRICAS DE IMPACTO EN PRODUCTO Y NEGOCIO
- Métricas de audiencia: descargas, oyentes únicos, retención por episodio
- Métricas de negocio: leads de reclutamiento atribuidos al podcast, tráfico de referencia al sitio web, menciones en redes sociales
- Métricas de comunidad: crecimiento del canal de Discord o Slack tras cada episodio, tasa de participación de oyentes
- Cómo reportar el impacto del podcast a la dirección de la empresa

FORMATO DE RESPUESTA
Desarrolla las cinco dimensiones. Incluye un calendario editorial de 16 semanas con títulos de episodios, formatos y objetivos específicos, y un template de episodio de entrevista a usuario con la guía de preguntas completa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar un podcast de producto para comunidad, reclutamiento o usuarios',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Podcast interno de empresa: cultura organizacional y comunicación de liderazgo',
                'description'      => 'Diseña y ejecuta un podcast interno como herramienta de comunicación corporativa, transmisión de cultura organizacional y liderazgo en empresas distribuidas o con múltiples sedes. Cubre formato, distribución, participación de líderes y métricas de engagement.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de People & Culture con experiencia en comunicación interna y transformación cultural en empresas de 200 a 5.000 empleados. Voy a crear un podcast interno para nuestra organización y necesito una estrategia completa que maximice el engagement y el impacto cultural.

CONTEXTO
Los canales tradicionales de comunicación interna (email, intranets, boletines) tienen tasas de lectura bajas y no logran transmitir la voz, la emoción y la autenticidad que construye cultura. Un podcast interno es especialmente valioso en empresas distribuidas, con trabajo remoto o con múltiples turnos, donde no todos pueden asistir a los town halls.

CAPÍTULO 1 — DIAGNÓSTICO Y DISEÑO ESTRATÉGICO
Antes de lanzar el podcast:
- Qué problemas de comunicación interna debe resolver el podcast: desinformación, desconexión entre equipos, falta de visibilidad del liderazgo, resistencia al cambio
- Audiencia interna: cómo varía la estrategia para empleados de oficina vs. trabajadores en campo o producción
- Integración con el plan de comunicación interna: cómo el podcast complementa (no sustituye) a los town halls, la intranet y los canales de mensajería
- Gobernanza del podcast: quién decide los temas, quién graba, quién aprueba el contenido antes de la publicación

CAPÍTULO 2 — FORMATOS PARA COMUNICACIÓN INTERNA
- El episodio de liderazgo: el CEO o un director habla directamente a la plantilla — cómo hacerlo auténtico y no corporativo
- El episodio de equipo: cada departamento o squad presenta sus proyectos y aprendizajes — formato y cadencia recomendada
- El episodio de cultura: historias de empleados, valores en acción, reconocimientos — cómo evitar que suene forzado o propagandístico
- El episodio de cambio: comunicación de reestructuraciones, cambios de estrategia, fusiones — cómo usar el podcast para gestionar la incertidumbre
- El episodio de bienvenida: episodio introductorio para nuevas incorporaciones que transmite la cultura y los valores desde el primer día

CAPÍTULO 3 — PARTICIPACIÓN DE LÍDERES Y EMPLEADOS
- Cómo conseguir que los líderes (especialmente los más ocupados o menos cómodos con el micrófono) participen regularmente
- Preparación de directivos para el podcast: guía de preparación para que sean naturales y auténticos
- Participación de empleados: cómo abrir el podcast a contribuciones de toda la organización sin perder coherencia
- Gestión de temas sensibles: cómo tratar resultados económicos negativos, despidos o crisis en un podcast interno

CAPÍTULO 4 — DISTRIBUCIÓN INTERNA Y ACCESIBILIDAD
- Plataformas de distribución interna: apps privadas de podcast (Spotify for Podcasters privado, Podbean, Buzzsprout con acceso restringido), intranet, correo electrónico
- Accesibilidad: transcripciones automáticas para empleados con discapacidad auditiva, subtítulos en versión vídeo
- Notificación de nuevos episodios: cómo integrar el lanzamiento con Slack, Teams o el correo interno
- Archivo histórico: cómo organizar los episodios pasados para que sean un recurso de onboarding y cultura

CAPÍTULO 5 — MÉTRICAS DE ENGAGEMENT Y CULTURA
- Métricas de consumo: tasa de escucha, episodios completos vs. abandonados, picos de escucha por horario
- Métricas de cultura: encuestas de pulso vinculadas a los episodios, menciones del podcast en conversaciones internas, participación voluntaria de empleados
- Métricas de negocio: reducción del tiempo de onboarding, mejora en el eNPS (Employee Net Promoter Score), reducción de la desinformación en momentos de cambio
- Cómo presentar el ROI del podcast interno a la dirección financiera

FORMATO DE RESPUESTA
Estructura la respuesta en los cinco capítulos. Incluye un plan de lanzamiento de 8 semanas con las tareas clave, una guía de preparación para líderes invitados y un template de encuesta de escucha para empleados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear y gestionar un podcast interno de comunicación y cultura organizacional',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Podcast financiero: estrategia de contenido para autoridad y captación de audiencia',
                'description'      => 'Aprende a crear un podcast financiero que eduque, genere confianza y posicione al presentador o la marca como referente en finanzas personales, inversión o finanzas corporativas, cumpliendo con las restricciones regulatorias del sector.',
                'prompt_content'   => <<<'EOT'
Actúa como un estratega de contenido especializado en medios financieros y fintech, con experiencia en la creación de podcasts que combinan rigor técnico, accesibilidad para el oyente y cumplimiento regulatorio. Voy a crear un podcast en el ámbito financiero y necesito una estrategia completa.

CONTEXTO REGULATORIO Y EDITORIAL
El contenido financiero tiene restricciones únicas: no puede constituir asesoramiento de inversión sin la habilitación regulatoria correspondiente, debe incluir advertencias de riesgo apropiadas y tiene que equilibrar el rigor técnico con la accesibilidad. Este ejercicio diseña una estrategia que maximiza el valor educativo dentro de esos límites.

PILAR 1 — POSICIONAMIENTO Y NICHO EN EL ECOSISTEMA DE PODCASTS FINANCIEROS
El mercado de podcasts financieros es muy competitivo:
- Análisis del panorama: podcasts de finanzas personales, inversión, trading, economía macro, fintech, criptoactivos, finanzas corporativas — cómo diferenciarse en cada nicho
- Perfil del oyente objetivo: nivel de conocimiento financiero, objetivos (aprender, tomar decisiones, entretenerse), momento vital (estudiante, profesional, jubilado)
- Propuesta de valor diferencial: qué ángulo o perspectiva no está siendo cubierto por los podcasts líderes del sector
- Marco regulatorio básico: qué puede y qué no puede decir un podcast financiero sin licencia de asesoramiento

PILAR 2 — TIPOS DE CONTENIDO QUE FUNCIONAN EN FINANZAS
- Educación progresiva: cómo diseñar una currícula de episodios que lleve al oyente desde conceptos básicos hasta temas avanzados
- Análisis de actualidad económica: cómo interpretar eventos macroeconómicos de manera que sea útil para el oyente, no solo informativa
- Entrevistas a expertos: qué tipo de preguntas generan respuestas que van más allá de lo que ya está en los libros de texto
- Historias de inversores y errores financieros: el formato de "caso práctico" en podcasts financieros — por qué los fracasos generan más engagement que los éxitos
- Episodios de herramientas y recursos: análisis de productos financieros, plataformas de inversión, aplicaciones de gestión financiera

PILAR 3 — CREDIBILIDAD Y GESTIÓN DE LA CONFIANZA
En finanzas, la confianza es el activo más valioso:
- Cómo construir credibilidad progresivamente cuando no se parte de una reputación establecida
- Transparencia sobre la posición propia: cuándo y cómo declarar posiciones de inversión propias cuando se habla de un activo
- Cómo manejar la incertidumbre y los pronósticos sin parecer que se está dando asesoramiento
- La regla de las tres fuentes: cómo verificar datos y cifras antes de publicarlos
- Rectificación y actualización: cómo gestionar cuando un episodio publicado contiene un error

PILAR 4 — MONETIZACIÓN EN PODCASTS FINANCIEROS
- Patrocinios apropiados para podcasts financieros: qué patrocinadores acepta la audiencia y cuáles dañan la credibilidad
- Productos digitales: cursos, guías, plantillas de análisis — cómo diseñarlos como extensión natural del podcast
- Membresía o suscripción: qué contenido premium está dispuesta a pagar la audiencia financiera
- Afiliación con plataformas financieras: comisiones de referencia con brokers, robo-advisors, herramientas de análisis — marco ético y regulatorio
- Consultoría derivada del podcast: cómo el podcast genera oportunidades de consultoría para empresas

PILAR 5 — DISTRIBUCIÓN Y CRECIMIENTO EN LA AUDIENCIA FINANCIERA
- Comunidades financieras en redes sociales donde el podcast tiene mayor impacto: Twitter/X FinTwit, Reddit r/personalfinanzas, grupos de Telegram de inversión
- Estrategia de SEO para contenido financiero: cómo posicionar los episodios en búsquedas relacionadas con decisiones financieras de alta intención
- Colaboración con influencers financieros: cómo proponer colaboraciones de valor mutuo
- Presencia en eventos y conferencias financieras como canal de crecimiento de audiencia

FORMATO DE RESPUESTA
Desarrolla los cinco pilares. Incluye un análisis de los 10 podcasts financieros de referencia en español con sus fortalezas y debilidades, y un calendario editorial de 20 episodios con temas, formatos y métricas objetivo para cada uno.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Crear un podcast financiero con autoridad, rigor y cumplimiento regulatorio',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Podcast jurídico: estrategia de contenido para captación de clientes y autoridad de marca',
                'description'      => 'Aprende a crear un podcast legal que posicione al despacho o abogado como referente en su especialidad, genere leads cualificados y eduque al cliente potencial respetando las normas deontológicas de la abogacía.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor especializado en marketing jurídico y creación de contenido para despachos de abogados, con conocimiento de las normas deontológicas que regulan la comunicación de los profesionales del derecho. Voy a crear un podcast jurídico y necesito una estrategia completa adaptada al sector legal.

CONTEXTO DEONTOLÓGICO Y COMERCIAL
Los abogados tienen restricciones específicas en su comunicación comercial: no pueden garantizar resultados, deben mantener la confidencialidad de los clientes, no pueden hacer publicidad comparativa desleal y deben preservar la dignidad de la profesión. Al mismo tiempo, el marketing de contenidos es una de las pocas estrategias de captación que los colegios de abogados permiten sin restricciones. El podcast es, en este contexto, una herramienta de marketing jurídico de alto valor.

SECCIÓN 1 — POSICIONAMIENTO DEL PODCAST JURÍDICO
- Especialidades jurídicas con mayor potencial de podcast: derecho laboral, derecho mercantil y empresarial, derecho de familia, derecho penal económico, derecho digital, startups y emprendimiento, derecho inmobiliario, propiedad intelectual — análisis de demanda y competencia en cada nicho
- Audiencia del podcast jurídico: particulares en situación de necesidad legal, empresarios que necesitan asesoramiento preventivo, otros profesionales jurídicos, estudiantes de derecho — cómo varía el contenido según la audiencia
- Diferenciación: el abogado generalista vs. el especialista ultra-focalizado — por qué el podcasting favorece la especialización
- Marco deontológico básico: qué puede y no puede decirse en un podcast jurídico sin infringir las normas colegiales

SECCIÓN 2 — FORMATOS DE CONTENIDO JURÍDICO
- Episodios educativos: explicación de conceptos jurídicos complejos en lenguaje accesible — técnica de "el cliente de la cafetería"
- Análisis de novedades legislativas: cómo comentar una nueva ley o sentencia relevante de manera que sea útil para el oyente no abogado
- Casos anónimos: análisis de situaciones jurídicas reales (anonimizadas y con el consentimiento del cliente) que ilustran cómo funciona el derecho en la práctica
- Entrevistas a otros profesionales del derecho o a profesionales que trabajan con abogados (notarios, economistas, compliance officers)
- Episodios de prevención jurídica: los errores más comunes que cometen empresas y particulares y cómo evitarlos

SECCIÓN 3 — CAPTACIÓN DE CLIENTES A TRAVÉS DEL PODCAST
El podcast jurídico funciona en el top del funnel:
- Cómo convertir oyentes en leads: oferta de primera consulta gratuita, lead magnets jurídicos (checklist, guía, plantilla de contrato), newsletter de novedades legales
- La señal del oyente caliente: oyentes que escuchan 5+ episodios antes de contactar — cómo crear contenido que acelere ese proceso
- SEO para podcasts jurídicos: cómo posicionar episodios para búsquedas de alta intención ("¿puedo reclamar si...?", "¿qué pasa si no pago...?")
- Integración con el sitio web del despacho: transcripciones, artículos derivados de los episodios, formulario de contacto contextual

SECCIÓN 4 — INVITADOS Y COLABORACIONES
- Cómo seleccionar invitados que aporten credibilidad sin que el episodio sea percibido como publicidad encubierta
- La entrevista al cliente satisfecho: cómo estructurarla para que sea un poderoso testimonio sin revelar información confidencial
- Colaboración con podcasts no jurídicos pero complementarios: podcasts de emprendimiento, RRHH, finanzas donde el abogado puede aparecer como experto
- Participación en medios de comunicación: cómo usar el podcast como trampolín para colaboraciones en radio, televisión y prensa

SECCIÓN 5 — PRODUCCIÓN Y DISTRIBUCIÓN CON RECURSOS LIMITADOS
Los despachos de abogados suelen tener recursos limitados para contenido:
- Setup mínimo para producir un podcast jurídico de calidad desde el despacho
- Proceso de producción eficiente: cómo grabar y publicar un episodio en menos de 3 horas incluyendo edición básica
- Reutilización del contenido del podcast: artículo de blog, newsletter, hilo de Twitter/X, clip de LinkedIn — máximo retorno del tiempo invertido
- Cadencia sostenible: por qué publicar con menos frecuencia pero de manera consistente es mejor que ser irregular

FORMATO DE RESPUESTA
Desarrolla las cinco secciones con profundidad. Incluye una lista de los 25 mejores títulos de episodios para un podcast jurídico nuevo (para diferentes especialidades), y un template de episodio de análisis de novedad legislativa con la estructura completa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear un podcast jurídico para captación de clientes y autoridad de marca',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Podcast de casos de éxito: estrategia para fidelización y reducción del churn',
                'description'      => 'Aprende a crear un podcast de casos de éxito de clientes que refuerce la percepción de valor del producto, acelere la adopción, reduzca el churn y genere prueba social para el equipo de ventas.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP of Customer Success con experiencia en la creación de programas de contenido orientados a la retención de clientes y a la generación de prueba social. Voy a crear un podcast de casos de éxito de clientes y necesito una estrategia que maximice el impacto en retención y ventas.

CONTEXTO
Los testimoniales escritos tienen cada vez menos credibilidad. Un podcast de casos de éxito permite que el propio cliente cuente su historia en su propia voz, con todos los matices, emociones y detalles que un escrito no puede capturar. Además, el cliente protagonista se convierte en embajador de la marca al compartir el episodio en su propia red.

MÓDULO 1 — SELECCIÓN Y CAPTACIÓN DE CLIENTES PROTAGONISTAS
- Criterios para identificar al cliente ideal para protagonizar un episodio: métricas de éxito comprobables, disposición para hablar públicamente, relevancia para el buyer persona objetivo, tamaño y sector de la empresa
- Proceso de captación: cómo proponer la participación de un cliente en el podcast — quién lo propone, cuándo y cómo
- La propuesta de valor para el cliente: por qué participar en el podcast beneficia al propio cliente (visibilidad, posicionamiento personal del contacto, herramienta de marketing para su empresa)
- Gestión de negativas: qué hacer cuando un cliente con gran historia no quiere participar públicamente — alternativas como el episodio anónimo o el formato Q&A

MÓDULO 2 — ESTRUCTURA DEL EPISODIO DE CASO DE ÉXITO
Un episodio de caso de éxito efectivo sigue una estructura narrativa, no una entrevista de marketing:
- El contexto del antes: cuál era el problema o la situación antes de implementar la solución — cómo hacer que el oyente se identifique
- El proceso de evaluación y decisión: cómo llegó el cliente al producto, qué alternativas evaluó, qué le hizo elegir esta solución
- La implementación: los retos de la puesta en marcha, quién estuvo involucrado, cuánto tiempo llevó
- Los resultados concretos: métricas específicas de impacto — cómo obtenerlas del cliente antes de grabar y cómo presentarlas de manera impactante
- El aprendizaje y el consejo: qué le diría el cliente a otro profesional en su misma situación

MÓDULO 3 — PRODUCCIÓN Y PREPARACIÓN DEL CLIENTE
- Guía de preparación para el cliente: qué información preparar, qué datos tener a mano, cómo será la grabación
- Cómo conducir la entrevista para extraer las mejores respuestas: preguntas abiertas, técnica del "¿puedes contarme más sobre eso?", manejo del silencio
- Producción básica: qué setup de audio pedir al cliente si grava de forma remota
- Edición orientada a impacto: qué cortar y qué mantener para que el episodio sea a la vez auténtico y efectivo como herramienta de ventas

MÓDULO 4 — DISTRIBUCIÓN Y ACTIVACIÓN DEL CLIENTE EMBAJADOR
El cliente protagonista es el mejor canal de distribución:
- Cómo preparar al cliente para que comparta el episodio en sus propias redes: assets, copy sugerido, timing
- Distribución interna en el equipo de ventas: cómo integrar los episodios en el proceso de ventas (pre-call, propuesta, seguimiento)
- Distribución en canales propios: newsletter de clientes, onboarding, base de conocimiento, sala de prensa
- Amplificación en redes sociales: clips de 60-90 segundos con la cita más impactante del cliente

MÓDULO 5 — IMPACTO EN CHURN Y RETENCIÓN
- Cómo el proceso de grabación del episodio en sí mismo refuerza la relación con el cliente y reduce el riesgo de churn
- Métricas de impacto del podcast en retención: health score de clientes que han participado vs. los que no
- Uso del podcast en las conversaciones de renovación: cómo el episodio es un argumento de renovación
- Programas de reconocimiento vinculados al podcast: cómo convertir la participación en el podcast en un hito del programa de éxito del cliente

FORMATO DE RESPUESTA
Desarrolla los cinco módulos. Incluye una guía completa de 25 preguntas para la entrevista de caso de éxito, organizadas por etapa de la historia (antes, durante, después), y un email de invitación al cliente con la propuesta de participación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear podcast de casos de éxito para retención, churn y prueba social',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Podcast personal como herramienta de marca profesional para freelancers',
                'description'      => 'Aprende a usar un podcast personal para construir tu marca profesional como independiente, atraer clientes de mayor calidad, aumentar tus tarifas y crear una comunidad que amplifique tu reputación en tu sector.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de marca personal especializado en profesionales independientes que usan el contenido como canal de captación y posicionamiento. Voy a crear un podcast personal para construir mi marca como freelancer y necesito una estrategia completa que sea sostenible con mis recursos actuales.

CONTEXTO
El podcast personal es el canal de contenido que mejor compensa para un freelancer: requiere menos tiempo de producción que el vídeo, genera más intimidad que el texto y permite demostrar profundidad de conocimiento de una manera que los perfiles de LinkedIn o las webs de portfolio no pueden igualar. Cuando un cliente potencial ha escuchado 5 episodios de tu podcast, llega a la primera reunión casi convencido.

BLOQUE 1 — DEFINICIÓN DE LA MARCA PERSONAL A TRAVÉS DEL PODCAST
- Cómo el podcast externaliza y hace audible tu posicionamiento profesional: qué dice de ti el hecho de hablar sobre ciertos temas de cierta manera
- Identificación del "punto de vista único": qué perspectiva o enfoque tienes sobre tu especialidad que no comparten la mayoría de profesionales en tu campo
- La intersección de especialidad y personalidad: cómo tu experiencia, valores e historia personal se convierten en el diferenciador del podcast
- Qué temas incluir y cuáles evitar para que el podcast construya exactamente el perfil de cliente que quieres atraer

BLOQUE 2 — FORMATO ADAPTADO A LOS RECURSOS DEL FREELANCER
Los freelancers tienen tiempo limitado — el podcast debe ser sostenible:
- El episodio de monólogo corto (10-20 minutos): por qué es el formato más sostenible para un independiente y cómo no sonar a conferencia grabada
- La entrevista estratégica: cómo elegir invitados que sean prospectos, referentes de tu sector o complementarios a tus servicios
- El formato de "pensamiento en voz alta": cómo compartir tu proceso de trabajo, tus decisiones y tus aprendizajes de manera que genere confianza
- Frecuencia realista: qué cadencia puedes mantener durante 12 meses sin burnout y cómo comunicarla a tu audiencia
- Batch recording: cómo grabar varios episodios en una sola sesión para ganar eficiencia

BLOQUE 3 — ESTRATEGIA DE CONTENIDO ORIENTADA A CLIENTES
Cada episodio debe acercar al oyente ideal a contratar tus servicios:
- El mapa de contenido del buyer journey: qué episodios responden a las preguntas que hace el cliente en cada etapa (conciencia, consideración, decisión)
- Temas que atraen al cliente equivocado y cómo evitarlos
- Cómo incluir tu proceso de trabajo y tu metodología en episodios de contenido sin que parezca un anuncio
- El episodio de "con quién trabajo mejor": cómo usar el podcast para filtrar proactivamente a los clientes que no encajan con tu perfil

BLOQUE 4 — CRECIMIENTO DE AUDIENCIA CON RECURSOS MÍNIMOS
Sin presupuesto de marketing, el crecimiento requiere estrategia:
- La estrategia de invitado reciproco: aparecer en otros podcasts de tu sector como invitado experto — cómo conseguir esas invitaciones
- LinkedIn como canal de distribución principal para freelancers: cómo convertir cada episodio en 3-5 piezas de contenido de LinkedIn
- La newsletter del podcast: por qué capturar emails de oyentes es más valioso que acumular descargas
- Comunidad pequeña y comprometida vs. audiencia grande y pasiva: por qué para un freelancer 100 oyentes correctos valen más que 10.000 genéricos

BLOQUE 5 — CONVERSIÓN DE OYENTES EN CLIENTES
- El CTA del podcast para freelancers: cómo mencionar tus servicios de manera natural y sin sonar comercial
- La secuencia de bienvenida al oyente nuevo: cómo automatizar un proceso de bienvenida que lleve al oyente de episodio 1 a solicitar información de tus servicios
- El episodio de "cómo trabajo": el tipo de contenido que más solicitudes directas genera y cómo estructurarlo
- Métricas que importan para un freelancer: no las descargas sino las solicitudes de servicio, el cambio en la percepción de valor y la calidad de los clientes que llegan

FORMATO DE RESPUESTA
Organiza la respuesta en los cinco bloques. Incluye un plan de los primeros 20 episodios con títulos y enfoques específicos para una especialidad a elegir (diseñador UX, consultor de marketing, desarrollador backend, o la que el usuario indique), y una plantilla de email de propuesta para aparecer como invitado en otro podcast del sector.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear un podcast personal para construir marca y atraer clientes como freelancer',
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
