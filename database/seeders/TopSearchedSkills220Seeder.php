<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills220Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'YouTube como canal de marketing',
                'description'      => 'Construye la presencia de la marca en YouTube: estrategia de contenido para vídeo de largo formato, SEO de YouTube y proceso de producción que genera consistencia sin necesitar un equipo de producción televisiva.',
                'prompt_content'   => <<<'PROMPT'
Eres un estratega de contenido especializado en YouTube para marcas y negocios. Necesito que me ayudes a construir una presencia sólida y sostenible en YouTube que genere visibilidad, autoridad y resultados de negocio reales.

Mi contexto:
- Marca o negocio: [describe brevemente qué haces o vendes]
- Público objetivo: [perfil del espectador ideal, intereses, problemas que tiene]
- Objetivo principal en YouTube: [notoriedad de marca, generación de leads, educación, ventas directas]
- Recursos disponibles: [cámara, micrófono, software de edición, horas semanales que puedes dedicar]
- Canal actual: [si ya existe, URL e historial; si no, partimos de cero]
- Competidores o referentes en YouTube: [menciona 2-3 canales que admires o compitan contigo]

Con esa información, quiero que me entregues:

1. ESTRATEGIA DE CONTENIDO Y POSICIONAMIENTO DEL CANAL
Define el nicho exacto del canal: qué tipo de vídeos publicarás, qué promesa le haces al espectador y qué te diferencia de los canales similares ya existentes. Propón los tres pilares de contenido del canal (los grandes temas que tratarás de forma recurrente) y explica la lógica detrás de esa elección. Dame también el nombre ideal del canal, la descripción optimizada y las palabras clave de posicionamiento.

2. SEO DE YOUTUBE: ENCONTRAR Y CONQUISTAR KEYWORDS
Explícame el proceso completo de investigación de palabras clave para YouTube: cómo encontrar términos con suficiente volumen de búsqueda pero sin una competencia imposible, cómo usar herramientas gratuitas y de pago para validarlos y cómo aplicar esas keywords en el título, la descripción y las etiquetas de cada vídeo. Dame un ejemplo completo con un vídeo concreto del canal, mostrando el título optimizado, la descripción de 500 palabras y la lista de etiquetas.

3. FORMATO Y ESTRUCTURA DE LOS VÍDEOS
Define el formato ideal para los vídeos del canal según el público y el objetivo: duración recomendada, estructura del guion (hook, desarrollo, llamada a la acción), ritmo de edición y estilo visual. Explica cómo diseñar un gancho (hook) en los primeros 30 segundos que reduzca el abandono temprano y cómo terminar el vídeo de forma que impulse la suscripción y el visionado del siguiente.

4. PROCESO DE PRODUCCIÓN SOSTENIBLE
Diseña un flujo de trabajo de producción realista para una persona o un equipo pequeño: desde la idea hasta la publicación. Incluye las herramientas mínimas necesarias para producir vídeos con calidad profesional sin un presupuesto de televisión, los tiempos estimados por fase y los atajos de producción que no comprometen la calidad percibida.

5. CALENDARIO EDITORIAL Y FRECUENCIA
Propón un calendario editorial para los primeros tres meses: cuántos vídeos publicar, en qué días y a qué horas. Explica por qué la consistencia es más importante que la frecuencia y cómo crear un colchón de vídeos grabados antes de lanzar el canal para no depender de publicar en tiempo real.

6. MÉTRICAS Y OPTIMIZACIÓN CONTINUA
Define las métricas clave que debo seguir en YouTube Studio: CTR (click-through rate) del thumbnail, retención media de audiencia, suscriptores por vídeo y tráfico de búsqueda orgánico. Explícame cómo interpretar estos datos para tomar decisiones editoriales y qué umbrales son señales de alarma frente a señales de éxito en un canal en fase de crecimiento.

Termina con un plan de acción para las primeras cuatro semanas, incluyendo las tareas concretas de cada semana para pasar de cero a tener los primeros tres vídeos publicados y optimizados.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar la estrategia completa de un canal de YouTube para una marca o negocio',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'GitHub como plataforma de visibilidad para developers',
                'description'      => 'Usa GitHub para construir tu reputación técnica: el README perfecto del proyecto open source, los patterns de contribución y la estrategia de GitHub que atrae estrellas, forks y oportunidades profesionales.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en developer branding y en la construcción de presencia técnica en GitHub. Quiero que me ayudes a transformar mi perfil y mis repositorios en una plataforma de visibilidad que genere oportunidades profesionales reales.

Mi contexto:
- Perfil de GitHub actual: [URL o describe el estado actual: repos públicos, stars, followers]
- Stack tecnológico principal: [lenguajes, frameworks, herramientas que dominas]
- Objetivo de visibilidad: [encontrar trabajo, atraer colaboradores, ser reconocido en la comunidad, conseguir clientes]
- Proyectos actuales: [describe tus repositorios más relevantes o los que quieres destacar]
- Tiempo disponible para contribuir semanalmente: [horas]

Con esa información, quiero que me entregues:

1. PERFIL DE GITHUB: EL ESCAPARATE DEL DEVELOPER
Analiza qué debe tener un perfil de GitHub de alto impacto: la foto, el bio, los links externos, los repositorios fijados y el README especial del perfil (el repositorio con tu nombre de usuario). Dame una plantilla del README de perfil con secciones, ejemplos de código embebido, badges de tecnologías y llamadas a la acción. Explica qué genera más impressions y qué hace que los recruiters y otros developers quieran seguirte.

2. EL README PERFECTO PARA UN PROYECTO OPEN SOURCE
Diseña la estructura del README ideal para un proyecto que quiero que crezca en estrellas y contribuciones. Incluye: badge de licencia, demo o screenshot, instalación rápida, ejemplos de uso, documentación de la API pública, guía de contribución, roadmap y agradecimientos. Explica qué secciones son imprescindibles versus opcionales y dame un ejemplo completo para un proyecto de tipo [describe tu proyecto].

3. ESTRATEGIA DE CONTRIBUCIÓN: EL GRÁFICO VERDE
Explícame los patterns de contribución que maximizan la visibilidad en GitHub: la diferencia entre commits en repositorios propios y contribuciones externas, cómo contribuir a proyectos relevantes de tu stack para aparecer en el radar de sus mantenedores y qué tipos de contribución (issues, PRs, reviews, documentación) generan más valor de reputación. Dame un plan de contribución semanal realista.

4. GITHUB ACTIONS Y AUTOMATIZACIÓN COMO SEÑAL DE CALIDAD
Explica cómo usar GitHub Actions no solo para CI/CD sino como señal de profesionalidad: los workflows que demuestran que sabes trabajar en producción (tests automáticos, linting, releases semánticos, publicación de paquetes). Dame ejemplos de workflows para un proyecto en mi stack que impresionen a quien visita el repositorio.

5. POSICIONAMIENTO TEMÁTICO Y COMUNIDAD
Define un nicho temático en GitHub que sea coherente con mi stack y mi objetivo: qué tipo de proyectos crear, a qué organizaciones contribuir y cómo participar en la comunidad (comentarios en issues, GitHub Discussions) para ser reconocido como experto en ese área. Explica cómo el posicionamiento temático acelera el crecimiento orgánico de followers.

6. DE GITHUB A OPORTUNIDADES PROFESIONALES
Explícame cómo cerrar el ciclo entre visibilidad en GitHub y oportunidades concretas: cómo enlazar el perfil desde LinkedIn, el CV y la web personal, cómo mencionar los proyectos en entrevistas y cómo usar el portfolio de GitHub para negociar salario o tarifas. Dame los tres proyectos tipo que más impresionan en una entrevista técnica según el nivel de experiencia.

Finaliza con un roadmap de 90 días con hitos medibles: qué número de stars, followers y contribuciones deberías tener al final del primer trimestre si ejecutas el plan correctamente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir reputación técnica y visibilidad profesional en GitHub',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Behance y Dribbble: el portfolio online del diseñador',
                'description'      => 'Estrategia de publicación en Behance y Dribbble para diseñadores de producto y gráficos: el tipo de contenido, las métricas y las prácticas que hacen que el portfolio trabaje por ti y atraiga oportunidades.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en posicionamiento de diseñadores en plataformas de portfolio como Behance y Dribbble. Necesito que me ayudes a construir una presencia online que me genere oportunidades reales: entrevistas, clientes o colaboraciones.

Mi contexto:
- Especialidad de diseño: [UI/UX, branding, ilustración, motion, gráfico, producto...]
- Nivel de experiencia: [junior, mid, senior, freelance con años de experiencia]
- Proyectos disponibles para publicar: [cuántos y de qué tipo]
- Objetivo principal: [encontrar trabajo en empresa, conseguir clientes freelance, ganar visibilidad en la comunidad]
- Perfiles actuales: [Behance y/o Dribbble URL, o partimos de cero]

Con esa información, quiero que me entregues:

1. BEHANCE VS DRIBBBLE: CUÁNDO USAR CADA PLATAFORMA
Explica las diferencias fundamentales entre Behance y Dribbble en términos de audiencia, algoritmo y tipo de contenido que funciona en cada una. Define cuál es la plataforma prioritaria para mi perfil y objetivo, y cómo usar ambas de forma complementaria sin duplicar el esfuerzo. Incluye los casos en que una plataforma es claramente superior a la otra.

2. CURACIÓN DEL PORTFOLIO: QUÉ PUBLICAR Y QUÉ DESCARTAR
Explícame el proceso de curación de un portfolio: cuántos proyectos son el número óptimo, cómo elegir cuáles publicar entre los que tengo, cómo ordenarlos para que el primero que vean sea el que mejor me representa y qué tipo de proyectos debo evitar aunque técnicamente sean buenos. Define también cómo gestionar el dilema de publicar proyectos de clientes con NDA.

3. PRESENTACIÓN DE CASO DE ESTUDIO EN BEHANCE
Diseña la estructura ideal de un case study en Behance: la portada que genera clicks, la narrativa de proceso (problema, investigación, iteraciones, solución final), las imágenes de presentación de alta calidad y el texto que contextualiza sin aburrir. Dame un template de case study adaptado a mi especialidad con secciones, tipos de imagen y longitud recomendada.

4. SHOTS DE DRIBBBLE QUE GENERAN FOLLOWS Y LIKES
Explica qué hace que un shot de Dribbble funcione en el algoritmo: dimensiones, paleta de color, nivel de detalle, descripción y tags. Dame los formatos de shot más efectivos actualmente (UI components, branding mockups, micro-interactions, illustrations) y cómo producir contenido de Dribbble de forma eficiente reutilizando elementos de proyectos reales.

5. OPTIMIZACIÓN PARA BÚSQUEDA Y DESCUBRIMIENTO
Define la estrategia de keywords y tags para que mis proyectos aparezcan en búsquedas relevantes en Behance y Dribbble. Explica cómo funciona el algoritmo de cada plataforma, qué señales de engagement importan más y cómo el calendario de publicación afecta al alcance inicial de cada pieza.

6. MÉTRICAS QUE DEMUESTRAN QUE EL PORTFOLIO FUNCIONA
Define las métricas que indican que el portfolio está generando las oportunidades correctas: no solo views y likes sino contactos recibidos, perfiles de los visitantes y conversiones. Explícame cómo configurar Google Analytics en Behance, cómo interpretar las estadísticas de Dribbble y cuál es el ratio de views-a-contacto que puedo esperar con un portfolio bien ejecutado.

Termina con un plan de publicación para los primeros dos meses: cuántos proyectos publicar, en qué orden y con qué cadencia para maximizar el impacto del lanzamiento del portfolio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Publicar y optimizar el portfolio de diseño en Behance y Dribbble',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'LinkedIn para ventas: el perfil que vende',
                'description'      => 'Construye el perfil de LinkedIn del comercial que genera inbound: el titular que posiciona, el resumen que convierte y la estrategia de contenido que hace que los compradores lleguen solos pidiendo una conversación.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en social selling y en la optimización de perfiles de LinkedIn para profesionales de ventas. Quiero que me ayudes a transformar mi perfil en una máquina de generación de oportunidades inbound que atraiga a los compradores correctos.

Mi contexto:
- Qué vendo: [producto, servicio, solución]
- Perfil del comprador ideal (ICP): [industria, tamaño de empresa, cargo del decisor]
- Mi cargo actual y empresa: [título y sector]
- Objetivo con LinkedIn: [generar leads, crear reputación, encontrar nuevos empleadores, construir pipeline]
- Estado actual del perfil: [URL o describe el número de conexiones, nivel de actividad]

Con esa información, quiero que me entregues:

1. EL TITULAR: LOS 220 CARACTERES QUE LO CAMBIAN TODO
Explica por qué el titular de LinkedIn es el elemento más importante del perfil para un comercial y cómo escribir uno que posicione claramente el valor que aportas al comprador, no tu cargo interno. Dame tres versiones del titular para mi perfil: una conservadora, una más agresiva en propuesta de valor y una que use un formato de resultados (ayudo a X a conseguir Y). Explica qué criterios usar para elegir la mejor.

2. EL RESUMEN (ABOUT): LA CARTA DE VENTAS DEL PERFIL
Diseña el resumen del perfil siguiendo una estructura de copywriting que convierta: el hook inicial, el problema que resuelvo, los resultados que consigo con clientes reales (con métricas), cómo trabajo y una llamada a la acción clara. Dame un ejemplo completo adaptado a mi sector, en primera persona, con entre 250 y 300 palabras. Incluye también cómo cerrar el resumen con la información de contacto correcta.

3. SECCIONES ESTRATÉGICAS: EXPERIENCIA, SKILLS Y RECOMENDACIONES
Explica cómo escribir la sección de experiencia de un comercial para que cada rol cuente una historia de resultados, no una descripción de tareas. Define las skills más relevantes para aparecer en búsquedas de recruiters y compradores, y cómo solicitar recomendaciones de clientes y managers que funcionen como prueba social y aumenten la credibilidad del perfil.

4. ESTRATEGIA DE CONTENIDO PARA EL COMERCIAL
Define el tipo de contenido que un profesional de ventas debe publicar en LinkedIn para atraer compradores: las categorías de posts que funcionan (casos de éxito, insights del sector, errores comunes del comprador, reflexiones sobre el proceso de compra), la frecuencia ideal y el formato más efectivo actualmente (texto largo, carrusel, vídeo corto). Dame una plantilla de post para cada categoría con el hook, el desarrollo y el cierre.

5. SOCIAL SELLING INDEX Y SEÑALES DE ACTIVIDAD
Explica el LinkedIn Social Selling Index (SSI): qué mide, qué puntuación es óptima para un comercial y qué acciones concretas mejoran cada uno de los cuatro pilares (marca profesional, encontrar personas, interactuar con insights, construir relaciones). Dame un plan de actividad diaria de 20-30 minutos que mejore el SSI de forma sostenida.

6. DE PERFIL A PIPELINE: CONVERTIR VISITAS EN CONVERSACIONES
Explica la estrategia de outreach desde LinkedIn que complementa el perfil optimizado: cuándo y cómo enviar solicitudes de conexión con nota, cómo hacer seguimiento de quién visita el perfil, cómo usar LinkedIn Sales Navigator si está disponible y cómo iniciar conversaciones que no parezcan spam pero que generen reuniones reales.

Termina con un checklist de los 20 cambios que debo hacer esta semana en el perfil, ordenados por impacto esperado en la generación de inbound.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Optimizar el perfil de LinkedIn de un comercial para generar inbound y pipeline',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product Hunt y comunidades de producto para el lanzamiento',
                'description'      => 'Lanza tu producto en Product Hunt y otras comunidades de product managers: la estrategia de lanzamiento, la preparación de materiales y el proceso de activar la comunidad que convierte un lanzamiento en trending.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en product launches y en la dinámica de comunidades como Product Hunt, Hacker News y los foros de product management. Quiero que me ayudes a diseñar y ejecutar el lanzamiento de mi producto de forma que maximice el impacto, los votos y la tracción inicial.

Mi contexto:
- Producto: [describe brevemente qué hace y a quién va dirigido]
- Estado actual: [beta privada, ya tiene usuarios, MVP, producto maduro con nueva feature...]
- Audiencia objetivo: [perfil del usuario ideal, dónde está online]
- Fecha objetivo de lanzamiento: [si tienes una fecha en mente]
- Recursos disponibles: [equipo, budget para outreach, red de contactos en la comunidad]

Con esa información, quiero que me entregues:

1. PREPARACIÓN DEL LANZAMIENTO EN PRODUCT HUNT: LAS 4 SEMANAS PREVIAS
Diseña el plan de preparación completo para las cuatro semanas antes del lanzamiento en Product Hunt: cómo construir la página del producto (tagline, descripción, media, primer comentario del maker), cómo reclutar un hunter con audiencia relevante, cómo preparar a tu comunidad para el día del lanzamiento y qué materiales visuales producir (GIFs de demo, screenshots, vídeo de presentación).

2. EL DÍA DEL LANZAMIENTO: HORA A HORA
Explica la estrategia de ejecución del día del lanzamiento: a qué hora de San Francisco publicar para maximizar la exposición, cómo coordinar el outreach inicial para conseguir los primeros votos en las primeras horas (que determinan si apareces en la home), cómo responder los comentarios de Product Hunt para mantener el engagement y cómo comunicar el lanzamiento en paralelo en otras plataformas.

3. COMUNIDADES COMPLEMENTARIAS: HN, REDDIT Y SLACK
Define la estrategia para lanzar en Hacker News (Show HN), los subreddits relevantes y los grupos de Slack de product managers. Explica las normas no escritas de cada comunidad, cómo adaptar el mensaje de lanzamiento a cada una, qué horarios funcionan mejor y cómo evitar que te marquen como spam en comunidades donde el autopromoción directa está penalizada.

4. ACTIVACIÓN DE LA COMUNIDAD PROPIA
Diseña la estrategia de activación de tu comunidad propia (usuarios beta, lista de email, seguidores en redes): cuándo comunicarles el lanzamiento, qué pedirles exactamente (votar, comentar, compartir), cómo facilitarles la acción con un mensaje pre-redactado y cómo usar el lanzamiento para convertir usuarios pasivos en evangelistas activos.

5. RELACIONES PÚBLICAS Y NEWSLETTERS DE PRODUCTO
Explica cómo conseguir cobertura en newsletters relevantes del ecosistema de producto (TLDR, Product Hunt newsletter, newsletters sectoriales): el proceso de outreach a editores, el comunicado de prensa adaptado a la startup y los periodistas y newsletteros que cubren lanzamientos de producto en tu categoría.

6. POST-LANZAMIENTO: CAPITALIZAR EL MOMENTUM
Define qué hacer en los 7 días después del lanzamiento: cómo usar el badge de Product Hunt, cómo hacer seguimiento de los usuarios que llegaron durante el lanzamiento, cómo convertir el tráfico puntual en usuarios retenidos y cómo documentar los aprendizajes del lanzamiento para el siguiente.

Termina con un timeline visual semana a semana desde hoy hasta 7 días después del lanzamiento, con las tareas críticas de cada semana y quién debería ser responsable de cada una.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Planificar y ejecutar el lanzamiento de un producto en Product Hunt y comunidades de producto',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'LinkedIn como plataforma de employer branding',
                'description'      => 'Usa LinkedIn para construir la marca empleadora: la estrategia de contenido del equipo de personas, el tipo de publicaciones que atraen candidatos y las métricas que demuestran el ROI.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en employer branding y en el uso estratégico de LinkedIn para la atracción de talento. Quiero que me ayudes a construir una presencia de employer brand en LinkedIn que reduzca el tiempo de contratación y mejore la calidad de los candidatos que llegan de forma orgánica.

Mi contexto:
- Empresa: [tamaño, sector, cultura, ubicación o modelo de trabajo (remoto/presencial/híbrido)]
- Perfil de candidato que queremos atraer: [cargo, experiencia, habilidades, valores]
- Estado actual del employer brand en LinkedIn: [página de empresa, número de seguidores, actividad]
- Recursos disponibles: [quién puede crear contenido, presupuesto para LinkedIn ads si aplica]
- Problemas actuales de atracción: [lentitud del proceso, pocas candidaturas, candidatos no cualificados...]

Con esa información, quiero que me entregues:

1. AUDIT DE LA PÁGINA DE EMPRESA EN LINKEDIN
Explica qué elementos de la página de empresa de LinkedIn son críticos para el employer brand: la imagen de portada, el about, los valores, las secciones de life y jobs, y las páginas de showcase. Define el estándar de una página de empresa excelente desde el punto de vista del candidato y dame una lista de mejoras específicas que debo implementar.

2. ESTRATEGIA DE CONTENIDO DE EMPLOYER BRAND
Define los cuatro pilares de contenido de employer brand en LinkedIn que atraen candidatos: cultura y valores, día a día del equipo, oportunidades de crecimiento y propósito de la empresa. Para cada pilar, dame tres ideas de post concretas con el formato recomendado (texto, imagen, vídeo, carrusel), el tono y el ángulo narrativo. Explica cómo hacer que los propios empleados sean los protagonistas del contenido.

3. PROGRAMA DE EMPLOYEE ADVOCACY
Diseña un programa de employee advocacy que convierta a los empleados en amplificadores del employer brand: cómo motivar a los empleados a compartir contenido sobre la empresa, qué facilitarles (post pre-redactados, contenido para recompartir), cómo gestionarlo sin que parezca forzado y cómo medir el alcance orgánico que genera el programa.

4. LINKEDIN JOBS Y LA ESTRATEGIA DE PUBLICACIÓN DE OFERTAS
Explica cómo redactar ofertas de trabajo en LinkedIn que atraigan candidatos cualificados: la estructura del job post, el tono, la información que los candidatos realmente quieren saber (salario, modelo de trabajo, proceso de selección) y las keywords que mejoran el posicionamiento en búsquedas. Incluye una plantilla de oferta de trabajo adaptada a mi perfil de candidato objetivo.

5. MÉTRICAS DE EMPLOYER BRAND EN LINKEDIN
Define el dashboard de métricas de employer brand en LinkedIn: seguidores de la página, alcance del contenido, ratio de engagement, candidaturas orgánicas generadas y coste por candidato comparado con el canal de pago. Explica cómo atribuir candidaturas al employer brand cuando el candidato llega por múltiples canales y cuáles son los benchmarks sectoriales.

6. LINKEDIN TALENT INSIGHTS Y COMPETITIVE INTELLIGENCE
Explica cómo usar LinkedIn Talent Insights para entender el mercado de talento: dónde están los candidatos que busco, de qué empresas vienen, qué habilidades tienen y cómo mi empresa se posiciona frente a la competencia en la batalla por el talento. Dame una guía práctica para extraer inteligencia competitiva del mercado laboral desde LinkedIn.

Termina con un plan de contenido para los primeros 30 días: las publicaciones concretas, los responsables y las fechas, para que el equipo de personas tenga un calendario ejecutable desde mañana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar la estrategia de employer branding en LinkedIn para atraer talento cualificado',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Twitter/X y LinkedIn para el profesional de finanzas',
                'description'      => 'Construye audiencia en redes como analista financiero o CFO: el tipo de contenido financiero que funciona, el tono y los temas que posicionan como referente en el ecosistema financiero online.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en comunicación financiera y en la construcción de presencia en redes sociales para profesionales del sector financiero. Quiero que me ayudes a construir una audiencia relevante en Twitter/X y LinkedIn que me posicione como referente en mi área de especialización.

Mi contexto:
- Especialización financiera: [análisis de inversiones, FP&A, corporate finance, mercados, contabilidad, VC, PE...]
- Cargo actual y empresa (o si soy independiente): [describe tu posición]
- Audiencia objetivo: [a quién quiero llegar: otros financieros, inversores, CEOs, estudiantes de finanzas]
- Objetivo de la presencia en redes: [reputación, networking, encontrar oportunidades, lanzar un newsletter, captar clientes]
- Restricciones: [si hay compliance o políticas de comunicación de tu empresa que debes respetar]

Con esa información, quiero que me entregues:

1. POSICIONAMIENTO: EL NICHO FINANCIERO QUE DEBES OCUPAR
Define el nicho temático exacto que debo ocupar en función de mi especialización y el hueco que existe en la conversación financiera online en español. Explica por qué un nicho específico crece más rápido que un perfil generalista de finanzas, y propón tres opciones de posicionamiento distintas con sus pros, contras y audiencia potencial.

2. TWITTER/X: EL FORMATO QUE FUNCIONA PARA FINANZAS
Explica las dinámicas específicas de Twitter/X para contenido financiero: los threads que explican conceptos complejos, los hot takes sobre noticias del mercado, los análisis de resultados empresariales y los hilos de recursos educativos. Dame cinco plantillas de tweet/thread con el hook, la estructura y el cierre. Explica también cómo usar $cashtags y las listas de Twitter para el networking en el ecosistema financiero.

3. LINKEDIN: EL ANÁLISIS QUE GENERA CREDIBILIDAD
Define el tipo de contenido de LinkedIn que posiciona a un profesional de finanzas: el análisis de mercado con opinión propia, la explicación de un concepto técnico para no financieros, el caso de éxito propio y la reflexión sobre las tendencias del sector. Dame tres estructuras de post con el título, el desarrollo y el cierre que generen debate y comentarios de calidad.

4. COMPLIANCE Y COMUNICACIÓN RESPONSABLE
Explica las restricciones legales y deontológicas que aplican a los profesionales financieros en redes sociales: la diferencia entre información y consejo de inversión, las disclaimers necesarios, cómo hablar de mercados sin incurrir en responsabilidad y cómo gestionar las políticas de comunicación de tu empresa si trabajas en una institución financiera regulada.

5. CONSTRUIR AUDIENCIA: LAS PALANCAS DE CRECIMIENTO
Define las estrategias de crecimiento de audiencia específicas para el perfil financiero: la participación en conversaciones de cuentas grandes del sector, las colaboraciones con otros divulgadores financieros, los formatos de contenido con mayor viralidad (hilos educativos, predicciones, análisis de earnings) y el uso estratégico de trending topics financieros para ganar visibilidad.

6. MONETIZACIÓN Y OPORTUNIDADES DERIVADAS DE LA AUDIENCIA
Explica cómo convertir la audiencia en oportunidades profesionales o de negocio: el newsletter de pago, la consultoría o el asesoramiento como extensión natural de la audiencia, las oportunidades de ponente y los medios que buscan expertos como fuentes. Dame un roadmap de monetización en función del tamaño de la audiencia, desde los primeros 1.000 seguidores hasta los 50.000.

Termina con un plan de contenido semanal para los próximos 60 días: los temas de cada semana, el formato y la plataforma donde publicar cada pieza.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir audiencia en redes sociales como profesional de finanzas',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Redes sociales para abogados: construir autoridad online',
                'description'      => 'El abogado que usa LinkedIn para generar mandatos: contenido jurídico riguroso sin ser incomprensible, restricciones deontológicas aplicables y la estrategia que construye reputación sin prometer resultados.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en marketing jurídico y en la construcción de reputación online para abogados y despachos. Quiero que me ayudes a desarrollar una presencia en LinkedIn y otras redes que construya autoridad jurídica, atraiga mandatos y respete las normas deontológicas de la abogacía.

Mi contexto:
- Especialidad jurídica: [mercantil, laboral, penal, civil, propiedad intelectual, startup law, fiscal, etc.]
- Tipo de despacho o posición: [abogado individual, socio de despacho, in-house, recién colegiado]
- Cliente objetivo: [empresas, particulares, startups, grandes corporaciones]
- Presencia digital actual: [web, LinkedIn, blog, ninguna]
- Restricciones deontológicas específicas de tu colegio: [si las conoces, descríbelas]

Con esa información, quiero que me entregues:

1. MARCO DEONTOLÓGICO: LO QUE PUEDES Y NO PUEDES HACER
Explica las restricciones deontológicas que aplican a la comunicación comercial de los abogados en España: la publicidad permitida por el Estatuto General de la Abogacía, las restricciones sobre promesas de resultado, las menciones a clientes y casos, el uso de rankings y premios y las particularidades de cada colegio de abogados. Dame un checklist de lo que debo revisar antes de publicar cualquier contenido.

2. POSICIONAMIENTO: EL NICHO JURÍDICO QUE TE DIFERENCIA
Define el posicionamiento de autoridad que debo construir en mi especialidad: el ángulo temático que me diferencia de otros abogados del mismo área, el tipo de cliente al que dirijo el contenido y el tono que mezcla rigor jurídico con accesibilidad para el no jurista. Explica por qué el posicionamiento en un nicho específico genera más mandatos que el perfil de abogado generalista en redes.

3. CONTENIDO JURÍDICO QUE FUNCIONA EN LINKEDIN
Define los formatos de contenido jurídico que generan autoridad y engagement en LinkedIn: la explicación de una sentencia reciente con sus implicaciones prácticas, el análisis de un cambio normativo, el caso hipotético ilustrativo, las preguntas frecuentes de tus clientes y las reflexiones sobre la práctica jurídica. Dame cinco plantillas de post adaptadas a mi especialidad, con el hook, el desarrollo jurídico y el cierre con llamada a la acción que no prometa resultados.

4. EL PERFIL DE LINKEDIN DEL ABOGADO QUE ATRAE CLIENTES
Diseña el perfil de LinkedIn óptimo para un abogado que quiere generar mandatos: el titular que posiciona la especialidad sin prometer resultados, el resumen en primera persona que genera confianza, las secciones de experiencia y formación que demuestran credenciales y las recomendaciones de clientes que funcionan como testimonios legalmente seguros. Dame el texto completo del titular y el resumen adaptados a mi perfil.

5. BLOG JURÍDICO Y SEO PARA ABOGADOS
Explica la estrategia de contenido de largo formato (blog o newsletter) para abogados: los temas que generan tráfico orgánico de potenciales clientes, la estructura de un artículo jurídico bien optimizado para SEO y cómo equilibrar la profundidad técnica con la legibilidad para el cliente que no es abogado. Dame diez ideas de artículo con el título SEO, el público objetivo y el objetivo de cada uno.

6. DE CONTENIDO A MANDATO: EL PROCESO DE CONVERSIÓN
Explica cómo convertir la visibilidad en mandatos reales: cómo gestionar los mensajes directos de potenciales clientes de forma deontológicamente correcta, cómo estructurar la primera conversación con un lead que llega desde LinkedIn, qué información dar gratis versus qué guardar para la relación profesional y cómo hacer seguimiento sin resultar intrusivo.

Termina con un plan de acción para los primeros 90 días: qué publicar, con qué frecuencia y cómo medir si la estrategia está generando mandatos o solo seguidores.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir autoridad online y generar mandatos desde LinkedIn siendo abogado',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Comunidades online para customer success professionals',
                'description'      => 'Las comunidades donde los CS managers aprenden, comparten y se contratan: foros, grupos de LinkedIn y Discord donde ocurre la conversación sobre el futuro del customer success.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en el ecosistema profesional de customer success y en las comunidades online donde se concentra el conocimiento, las oportunidades y las conversaciones más relevantes de la disciplina. Quiero que me ayudes a identificar las comunidades correctas para mi perfil y a sacarles el máximo provecho.

Mi contexto:
- Nivel de experiencia en CS: [recién llegado al sector, CSM con 2-3 años, CS manager, VP of CS]
- Tipo de empresa donde trabajo o busco trabajar: [SaaS B2B, enterprise, startup, PLG...]
- Objetivo en las comunidades: [aprender, hacer networking, encontrar trabajo, reclutar, compartir conocimiento]
- Idioma preferido: [español, inglés o ambos]
- Tiempo disponible para participar en comunidades: [horas por semana]

Con esa información, quiero que me entregues:

1. EL MAPA DE COMUNIDADES DE CUSTOMER SUCCESS
Lista y describe las comunidades más activas y valiosas para profesionales de customer success: los grupos de LinkedIn (CSM Central, Customer Success Network, etc.), los Slack y Discord (Gain Grow Retain, CS Insider, Success Coaching), los foros especializados, los subreddits y las comunidades de habla hispana si existen. Para cada comunidad indica el tamaño aproximado, el tipo de conversación que predomina, el nivel de actividad y el perfil mayoritario de sus miembros.

2. CÓMO ELEGIR LAS COMUNIDADES CORRECTAS PARA TU PERFIL
Define los criterios para elegir en qué dos o tres comunidades concentrar el esfuerzo: el alineamiento con tu nivel de experiencia, el tipo de empresas y sectores que tienen presencia, la ratio de signal-to-noise (contenido útil vs ruido) y el tipo de oportunidades que se generan en cada una. Dame una recomendación específica para mi perfil de las comunidades en las que debería estar activo.

3. CÓMO PARTICIPAR SIN RESULTAR UN LURKER NI UN SPAM
Explica la estrategia de participación que genera reputación en una comunidad de CS: la diferencia entre lurker (que solo consume) y contribuidor activo, cómo hacer la primera intervención en una comunidad nueva, qué tipo de preguntas y respuestas generan más reconocimiento y cómo compartir contenido propio sin que parezca autopromoción. Dame ejemplos de intervenciones de alto valor en una comunidad de CS.

4. CONSTRUIR REPUTACIÓN COMO REFERENTE EN LA COMUNIDAD
Define el proceso de convertirse en un referente conocido dentro de una comunidad de customer success: los formatos de contenido que funcionan mejor (checklists, frameworks propios, análisis de casos reales anonimizados, resúmenes de libros del sector), la frecuencia de contribución óptima y cómo pasar de ser un miembro más a ser la persona a la que preguntan cuando surge un problema específico.

5. COMUNIDADES COMO CANAL DE BÚSQUEDA DE EMPLEO Y RECLUTAMIENTO
Explica cómo usar las comunidades de CS para encontrar trabajo o para reclutar talento: cómo las ofertas de trabajo se publican en estas comunidades antes de llegar a LinkedIn, cómo hacer visible tu disponibilidad sin resultar desesperado, cómo usar la red de la comunidad para hacer referidos y cómo evaluar el fit cultural de una empresa a través de cómo participan sus empleados en la comunidad.

6. CONFERENCIAS Y EVENTOS DEL ECOSISTEMA CS
Lista los eventos y conferencias del mundo de customer success: los globales (Pulse Conference, CS100 Summit), los europeos y los de habla hispana si existen. Para cada evento indica el perfil de asistente, el coste aproximado y si tiene una comunidad online asociada. Explica cómo preparar la asistencia a un evento para que el networking sea productivo y cómo mantener las relaciones generadas después del evento.

Termina con un plan de los primeros 30 días en las comunidades que me hayas recomendado: las acciones concretas de cada semana para pasar de desconocido a miembro activo con reputación emergente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Identificar y aprovechar las mejores comunidades online de customer success',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Plataformas de freelancing: Upwork, Toptal y más',
                'description'      => 'Las plataformas donde los freelancers encuentran clientes: la estrategia para cada una, cómo construir el perfil que gana y el paso del trabajo en plataforma al trabajo directo con clientes que pagan más.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en estrategia para freelancers y en el funcionamiento de las principales plataformas de trabajo independiente. Quiero que me ayudes a elegir las plataformas correctas para mi perfil, construir los perfiles que ganan proyectos y trazar el camino desde el trabajo en plataforma hasta los clientes directos que pagan tarifas más altas.

Mi contexto:
- Especialidad como freelance: [desarrollo, diseño, marketing, redacción, consultoría, finanzas, legal...]
- Nivel de experiencia: [recién llegado al freelancing, 1-3 años, freelance senior]
- Tarifa actual o deseada: [por hora o por proyecto]
- Idioma de trabajo: [español, inglés o ambos]
- Objetivo: [conseguir los primeros clientes, escalar la tarifa, salir de las plataformas, combinar plataforma con directo]

Con esa información, quiero que me entregues:

1. EL MAPA DE PLATAFORMAS: CUÁL ES PARA TI
Compara las principales plataformas de freelancing y define cuál se adapta mejor a mi perfil: Upwork (el mercado general más grande), Toptal (la red de élite del 3% superior), Malt (fuerte en Europa y España), Fiverr (proyectos de precio fijo), Freelancer.com y las plataformas especializadas según mi sector. Para cada plataforma indica el tipo de cliente que la usa, el nivel de competencia, la comisión y el perfil de freelance que tiene más éxito.

2. EL PERFIL QUE GANA PROYECTOS EN UPWORK
Diseña el perfil de Upwork óptimo para mi especialidad: el título que aparece en búsquedas y destaca entre decenas de competidores, el overview que engancha al cliente en los primeros tres segundos, las habilidades y tests que mejoran el posicionamiento en el algoritmo, el portfolio de proyectos pasados y la tarifa inicial que maximiza las posibilidades de conseguir el primer proyecto con reseña. Incluye las estrategias de la JSS (Job Success Score) y cómo protegerla desde el inicio.

3. CÓMO PASAR EL PROCESO DE TOPTAL
Explica el proceso de selección de Toptal y cómo prepararse para cada fase: el test técnico inicial, la entrevista con un experto de tu área, el proyecto de prueba con un cliente real y la incorporación a la red. Define qué nivel real de experiencia y habilidades se necesita para pasar, cuánto tiempo lleva el proceso y qué hace que un candidato sea rechazado aunque sea técnicamente bueno.

4. CÓMO GANAR EL PRIMER PROYECTO Y CONSTRUIR REPUTACIÓN RÁPIDO
Diseña la estrategia para conseguir los primeros proyectos en una plataforma nueva: la táctica de la tarifa de entrada (cuánto bajar sin destruir el valor percibido), cómo escribir propuestas que destacan entre decenas de competidores, cómo seleccionar los proyectos correctos para los que hacer propuesta y cómo gestionar el primer proyecto para maximizar la valoración del cliente.

5. DE LA PLATAFORMA AL CLIENTE DIRECTO: LA ESTRATEGIA DE SALIDA
Explica el proceso de transición desde el trabajo en plataformas al trabajo directo con clientes que pagan tarifas sin comisión de plataforma: cuándo es el momento correcto para intentarlo (número mínimo de clientes recurrentes, volumen de ingresos), cómo proponer la relación directa a clientes de plataforma sin violar los términos de servicio, cómo encontrar nuevos clientes directos en paralelo y cómo gestionar el periodo de transición donde necesitas ingresos de los dos canales.

6. PROTEGER LOS INGRESOS Y ESCALAR LA TARIFA
Define la estrategia para aumentar la tarifa gradualmente sin perder clientes: cuándo y cómo comunicar una subida de tarifa a clientes recurrentes, cómo posicionar la especialización como justificación del incremento de precio y cómo construir el portfolio y los casos de éxito que justifican una tarifa premium frente a los competidores más baratos de la plataforma.

Termina con un plan de acción de 90 días: semana a semana, desde crear el perfil en la plataforma elegida hasta conseguir el primer cliente de pago y la primera valoración de cinco estrellas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Elegir plataformas de freelancing, construir el perfil y escalar hacia clientes directos',
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
