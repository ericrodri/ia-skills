<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills279Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'LinkedIn para marketers: generar leads y oportunidades con contenido',
                'description'      => 'Sistema para que un profesional de marketing construya presencia en LinkedIn que genere leads, proyectos y oportunidades de forma consistente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing B2B y social selling que ha construido su propia marca personal en LinkedIn con más de 50.000 seguidores y genera el 60% de sus oportunidades de negocio a través de la plataforma. Conoces las mecánicas del algoritmo de LinkedIn desde dentro, sabes qué tipo de contenido funciona para cada objetivo y tienes un sistema probado para convertir seguidores en conversaciones y conversaciones en oportunidades.

Necesito tu ayuda para construir mi presencia en LinkedIn como profesional de marketing.

Mi situación:
- Especialidad de marketing: [content marketing, paid, SEO, branding, automatización, etc.]
- Objetivo principal en LinkedIn: [generar leads, conseguir empleo, visibilidad en el sector, otros]
- Situación actual del perfil: [desde cero, perfil básico existente, ya activo pero sin resultados]
- Audiencia objetivo: [a quién quieres llegar: CMOs, directores de marketing, CEOs de pymes, etc.]
- Tipo de contenido más cómodo para crear: [texto, vídeo, carruseles, análisis de datos]
- Tiempo disponible semanalmente: [horas que puedes dedicar a LinkedIn]
- Mayor miedo o bloqueo: [qué te impide ser más activo en la plataforma]

Con este contexto, ayúdame a construir mi sistema de LinkedIn:

**1. Optimización del perfil como página de aterrizaje**
El perfil de LinkedIn es la primera impresión. Audita y optimiza cada sección con un objetivo claro: el titular no es tu cargo sino una propuesta de valor, el extracto es un texto de venta que conecta con los problemas de tu audiencia objetivo, la sección de experiencia destaca resultados concretos y no responsabilidades genéricas, las recomendaciones cuentan la historia que quieres que cuenten y la foto y el banner comunican visualmente quién eres. Dame instrucciones específicas para mejorar cada sección de mi perfil para mi objetivo concreto.

**2. Posicionamiento y nicho de contenido**
La trampa más común en LinkedIn es intentar hablar de todo para todos. Diseña mi posicionamiento: qué tema o área de marketing voy a hacer mía de forma consistente, cómo diferenciarse del ruido de contenido genérico de marketing, qué perspectiva o punto de vista único puedo aportar que sea genuino y no forzado y cómo elegir los temas de contenido que sirvan simultáneamente a mi audiencia y a mis objetivos profesionales.

**3. Sistema de creación de contenido**
La consistencia es la clave de LinkedIn y la razón por la que la mayoría abandona. Diseña un sistema de contenido que incluya: qué publicar (formatos y tipos de contenido que funcionan para mi objetivo), con qué frecuencia publicar para ser relevante sin agotar la audiencia, cómo generar ideas de forma continua sin quedarse en blanco, cómo crear contenido en lotes para no depender de la inspiración del día y cómo adaptar el contenido a diferentes formatos (texto largo, carrusel, vídeo corto, encuesta) sin duplicar el trabajo.

**4. Contenido que genera leads como marketer**
Como profesional de marketing, tienes credibilidad para hablar de lo que haces. Diseña una estrategia de contenido específica para generar leads: casos de estudio de proyectos propios (con los límites de confidencialidad), análisis de campañas reales con resultados concretos, frameworks y metodologías que usas en tu trabajo, opiniones sobre tendencias del sector basadas en experiencia real y contenido que demuestra tu proceso de pensamiento. Para cada tipo, indica cómo estructurarlo para que genere conversaciones y no solo likes.

**5. Gestión de la comunidad y el networking**
LinkedIn no es broadcasting sino conversación. Diseña un sistema de engagement que incluya: cómo comentar de forma que aporte valor y aumente tu visibilidad, cómo identificar y conectar con las personas que importan para tus objetivos, cómo gestionar los mensajes directos para convertir conexiones en conversaciones reales, cómo construir relaciones con creadores de contenido de tu sector y cómo mantener las conversaciones importantes sin que se pierdan.

**6. Conversión de visibilidad a oportunidades**
La visibilidad en LinkedIn no tiene valor si no genera resultados concretos. Diseña el sistema de conversión: cómo pasar de una conversación de comentarios a una conversación privada de forma natural, cómo presentar tus servicios o tu valor sin que parezca spam, cómo crear contenido que filtre activamente a tu cliente ideal y cómo medir si LinkedIn está generando las oportunidades que buscas (métricas más allá de los likes y los seguidores).

**7. Plan de los primeros 90 días**
Empieza de forma estructurada y no te pierdas en la táctica del día a día. Diseña un plan de acción para los primeros 90 días: semana a semana, qué hacer en cada fase (optimización de perfil, primeras publicaciones, construcción de red inicial, primeros resultados a esperar). Incluye qué métricas revisar cada semana para saber si vas por buen camino y cuándo tiene sentido ajustar la estrategia.

Dame un plan que genere resultados reales, no uno que me haga famoso en LinkedIn pero no me genere ninguna oportunidad concreta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Construir una presencia en LinkedIn que genere leads y oportunidades reales para un profesional de marketing de forma consistente.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'LinkedIn para developers: usar la red profesional sin sentirse un vendedor',
                'description'      => 'Cómo un desarrollador construye presencia en LinkedIn de forma auténtica que abra oportunidades sin tener que autopromocionarse de forma incómoda.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un developer senior con una presencia activa en LinkedIn que ha conseguido su trabajo actual y varios proyectos freelance a través de la plataforma, sin haberse convertido nunca en un influencer de contenido de carrera ni en un vendedor de sueños. Conoces la incomodidad que sienten muchos developers con las redes profesionales y tienes un enfoque honesto y técnico para construir visibilidad que respeta la personalidad introvertida típica del developer.

Necesito tu ayuda para construir mi presencia en LinkedIn como desarrollador de software.

Mi perfil:
- Stack tecnológico principal: [lenguajes, frameworks y áreas de especialización]
- Años de experiencia: [y tipo de empresas o proyectos]
- Objetivo en LinkedIn: [trabajo nuevo, freelance, visibilidad técnica, networking, proyectos open source]
- Situación actual: [sin perfil, perfil básico, algo activo pero sin estrategia]
- Mayor resistencia a LinkedIn: [qué te genera rechazo de la plataforma]
- Tiempo disponible: [horas semanales máximo que quieres dedicar]

Con este contexto, ayúdame a construir una presencia en LinkedIn que sea auténtica:

**1. Por qué LinkedIn importa para developers (aunque no te guste)**
Antes de la estrategia, dame los argumentos honestos: qué tipo de oportunidades se abren con una presencia activa en LinkedIn que no llegan de otras formas (GitHub, comunidades técnicas), cómo un buen perfil reduce el tiempo que dedicas a buscar trabajo o clientes, qué tan diferentes son los developers que están activos en LinkedIn versus los que no lo están en términos de oportunidades que reciben y qué nivel mínimo de actividad tiene impacto real sin consumir demasiado tiempo.

**2. El perfil del developer que atrae oportunidades**
El perfil de LinkedIn de un developer debe hablar a dos audiencias: recruiters que buscan tu stack y responsables técnicos que quieren saber si eres bueno. Optimiza cada sección: titular que no diga solo "Software Engineer en [empresa]" sino que transmita tu especialidad y tu diferenciador, extracto que cuente qué problemas resuelves y con qué tecnologías, experiencia que muestre proyectos y resultados concretos y no solo responsabilidades, y sección de skills que refleje tu stack real ordenado por relevancia.

**3. Contenido técnico que un developer puede publicar sin fingir**
Los developers tienden a pensar que no tienen nada interesante que publicar. Diseña una estrategia de contenido basada en lo que ya haces: documentar decisiones técnicas que tomaste en proyectos reales, explicar conceptos técnicos de forma que otros developers o no técnicos lo entiendan, compartir lo que aprendiste resolviendo un problema difícil, mostrar proyectos personales con el proceso no solo el resultado y opinar sobre tendencias tecnológicas con criterio propio basado en experiencia real. Para cada tipo, indica el formato más natural para publicarlo.

**4. Frecuencia y tiempo mínimos con impacto real**
No necesitas publicar cada día para que LinkedIn funcione. Diseña un sistema de mínima intervención máxima efectividad: qué frecuencia de publicación tiene impacto real (datos reales, no los que dice LinkedIn), cuánto tiempo lleva producir contenido técnico de calidad, cómo aprovechar el trabajo del día a día como fuente de contenido sin trabajo extra y cómo mantener la presencia en períodos de mucha carga de trabajo.

**5. Networking que no parece networking**
Los developers suelen rechazar el networking porque se asocia con falsedad. Diseña una estrategia de conexión que sea auténtica: cómo conectar con personas del sector de forma que tenga sentido (contribuciones técnicas, eventos, comentarios en contenido relevante), cómo mantener conversaciones técnicas en LinkedIn que sean genuinamente interesantes, cómo interactuar con el contenido de otros de forma que aporte valor y no sea solo consumo pasivo y cómo cultivar relaciones con recruiters sin que sea incómodo.

**6. LinkedIn para conseguir trabajo o proyectos**
Dependiendo de tu objetivo, la estrategia cambia. Para búsqueda de empleo: cómo configurar el perfil para que los recruiters correctos te encuentren, cómo activar las señales de disponibilidad sin comprometer tu trabajo actual y cómo responder a propuestas no deseadas de forma educada y eficiente. Para freelance o proyectos: cómo mostrar el tipo de proyectos que buscas, cómo generar confianza en tu expertise técnico antes del primer contacto y cómo convertir conversaciones en propuestas sin presión.

**7. Plan de 60 días para developers que empiezan desde cero**
Diseña un plan concreto y realista para los primeros dos meses: qué hacer la primera semana (perfil), qué hacer el primer mes (primeras publicaciones y primeras conexiones relevantes), qué hacer el segundo mes (sistema de contenido sostenible y primeros resultados). Incluye qué no hacer (errores típicos de developers en LinkedIn que generan rechazo) y cuándo esperar ver los primeros resultados concretos del esfuerzo.

Quiero un sistema que respete mi tiempo y mi forma de ser. No me pidas que me convierta en un influencer de contenido de carrera.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Construir una presencia auténtica en LinkedIn para developers que abra oportunidades sin requerir convertirse en influencer de contenido.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'LinkedIn para diseñadores: mostrar el proceso, no solo el resultado final',
                'description'      => 'Cómo un diseñador construye una presencia en LinkedIn que muestra el pensamiento de diseño, no solo el portfolio visual, para atraer proyectos y oportunidades.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador senior con una presencia activa en LinkedIn que genera consultas de clientes y oportunidades laborales de forma consistente. Has aprendido que lo que diferencia a un diseñador en LinkedIn no es mostrar los mejores resultados visuales sino mostrar el proceso de pensamiento: cómo llegas a las decisiones de diseño, qué problemas resuelves y por qué tus soluciones funcionan. Conoces cómo adaptar el contenido visual para que funcione en una plataforma de texto como LinkedIn.

Necesito tu ayuda para construir mi presencia en LinkedIn como diseñador.

Mi perfil:
- Especialidad de diseño: [UX/UI, gráfico, branding, producto, motion, ilustración, etc.]
- Tipo de trabajo que buscas: [empleo, clientes freelance, colaboraciones, visibilidad del sector]
- Situación actual en LinkedIn: [sin perfil, básico, algo activo]
- Audiencia objetivo: [startups, agencias, grandes empresas, estudios creativos, etc.]
- Restricciones de confidencialidad: [si puedes mostrar proyectos de clientes o tienes NDA]
- Tiempo disponible: [horas semanales]

Con este contexto, diseña mi estrategia de LinkedIn para diseñadores:

**1. El error del diseñador en LinkedIn: solo mostrar resultados**
El mayor error de los diseñadores en LinkedIn es publicar imágenes bonitas sin contexto. Explica por qué eso no funciona: qué busca un cliente o empleador cuando ve el portfolio de un diseñador en LinkedIn, por qué el proceso importa más que el resultado para generar confianza, cómo mostrar el pensamiento de diseño sin revelar información confidencial de clientes y qué tipo de contenido de diseño genera más conversaciones y conexiones reales.

**2. Perfil que transmite criterio de diseño**
El perfil de un diseñador debe demostrar criterio, no solo habilidades. Optimiza cada sección: foto y banner que comuniquen tu estilo sin que parezca un portfolio de Behance, titular que describa qué problemas resuelves y para quién, extracto que cuente cómo piensas sobre el diseño y qué te diferencia de otros diseñadores y experiencia que use los proyectos para demostrar el proceso de razonamiento, no solo listar herramientas.

**3. Tipos de contenido que funcionan para diseñadores**
Diseña una estrategia de contenido basada en los formatos que más funcionan para diseñadores en LinkedIn: deconstrucción de decisiones de diseño en proyectos propios, análisis de diseño de otras marcas o productos (con criterio, no solo crítica), proceso de un proyecto desde el brief hasta la solución final, reflexiones sobre los errores de diseño más comunes y cómo evitarlos, tendencias de diseño con opinión propia basada en experiencia y behind the scenes del trabajo de diseño que la gente nunca ve. Para cada tipo, indica cómo estructurarlo y qué longitud funciona mejor.

**4. Contenido visual que funciona en LinkedIn**
LinkedIn es una plataforma de texto pero el diseñador tiene ventaja con el contenido visual. Diseña una estrategia para el contenido visual: cómo hacer que una imagen de diseño genere conversación (con copy que contextualiza), cómo crear carruseles que cuenten una historia de proceso, cómo adaptar el estilo visual de tus publicaciones para que sean reconocibles como tuyas y cómo mostrar trabajo con restricciones de NDA usando alternativas (proyectos propios, proyectos conceptuales, proyectos con clientes que han dado permiso).

**5. Demostrar expertise de diseño sin ser pedante**
Los diseñadores a veces caen en el error de escribir para otros diseñadores en lugar de para sus clientes. Diseña contenido que: demuestre expertise de diseño de forma que lo entienda un fundador o un director de marketing (tu cliente potencial), explique el valor del buen diseño en términos de negocio, traduzca el lenguaje de diseño al lenguaje de resultados que importan a quien paga y genere confianza en tu criterio sin necesidad de listar premios o certificaciones.

**6. Networking para diseñadores**
Los diseñadores tienen una red natural de potenciales clientes y colaboradores. Diseña una estrategia de red que incluya: cómo conectar con product managers, fundadores y directores de marketing que son potenciales clientes, cómo colaborar con otros creativos de forma que sea mutuamente beneficioso, cómo interactuar con el contenido de clientes potenciales de forma auténtica y cómo construir relaciones con recruiters de agencias y empresas de producto donde quieres trabajar.

**7. De la visibilidad al proyecto o empleo**
La visibilidad no paga las facturas; los proyectos sí. Diseña el sistema de conversión: qué señales en el perfil y el contenido hacen que un cliente o empleador dé el paso de contactarte, cómo responder a los primeros mensajes de interés de forma que avancen hacia una conversación real, cómo presentar tu disponibilidad y servicios sin que parezca desesperado y cómo medir si LinkedIn está generando resultados concretos en términos de conversaciones, propuestas y proyectos.

Quiero un sistema que muestre quién soy como diseñador de forma auténtica, no uno que me convierta en un publicista de mi propio trabajo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Construir una presencia en LinkedIn para diseñadores que muestre el proceso de diseño y genere oportunidades reales.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Social selling en LinkedIn: el sistema que convierte conexiones en ventas',
                'description'      => 'Sistema probado de social selling en LinkedIn para profesionales de ventas que quieren generar pipeline de forma consistente sin parecer un bot de spam.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director comercial con experiencia en social selling B2B que ha generado millones en pipeline a través de LinkedIn. Conoces la diferencia entre el social selling que genera relaciones reales y pipeline de calidad y el que solo consigue que la gente te silencie. Tienes un sistema probado que equilibra automatización y personalización, construye credibilidad antes de pedir nada y convierte conversaciones en reuniones de ventas de forma natural.

Necesito tu ayuda para construir mi sistema de social selling en LinkedIn.

Mi contexto:
- Producto o servicio que vendo: [descripción breve]
- Perfil del cliente ideal: [cargo, sector, tamaño de empresa, geografía]
- Ciclo de venta: [duración aproximada y número de stakeholders]
- Situación actual en LinkedIn: [perfil básico, algo activo, activo pero sin resultados en ventas]
- Cuota de pipeline que necesito generar desde LinkedIn: [porcentaje o número aproximado]
- Tiempo disponible para LinkedIn: [horas semanales]
- Mayor frustración con LinkedIn hasta ahora: [mensajes sin respuesta, sin conversaciones, etc.]

Con este contexto, diseña mi sistema de social selling:

**1. Perfil de ventas que vende antes de la primera conversación**
El perfil de LinkedIn debe hacer el trabajo de ventas antes de que interactúes. Optimiza cada sección para el comprador: titular enfocado en el valor que generas para el cliente (no en tu cargo), extracto que hable de los problemas del cliente y de cómo los resuelves, experiencia que muestre resultados de clientes y no responsabilidades tuyas y recomendaciones de clientes que cuenten el impacto real de trabajar contigo. Dame instrucciones específicas para mi tipo de venta y audiencia.

**2. Sistema de identificación y segmentación de prospectos**
El social selling escalable requiere un sistema de identificación de prospectos. Diseña el proceso: cómo usar las herramientas de búsqueda de LinkedIn para identificar prospectos que encajan con el perfil ideal, cómo priorizar los prospectos según señales de intención o timing (cambio de trabajo, expansión de la empresa, publicación de contenido relevante), cómo organizar el seguimiento para no perder ningún prospecto caliente y cómo mantener una pipeline de social selling con diferentes etapas de calentamiento.

**3. Estrategia de contenido como herramienta de ventas**
El contenido es el activo de social selling que trabaja cuando tú no estás. Diseña una estrategia de contenido orientada a ventas: qué publicar para generar credibilidad con tu audiencia de clientes potenciales, cómo usar casos de estudio y resultados de clientes sin revelar información confidencial, cómo publicar contenido que genere conversaciones con prospectos de forma natural y cómo posicionarte como experto en el problema que tu producto o servicio resuelve.

**4. Secuencias de conexión y mensajes que obtienen respuesta**
El mayor problema del social selling es que la mayoría de los mensajes se ignoran. Diseña secuencias de contacto que funcionen: cómo solicitar conexiones de forma que acepten, cómo hacer el primer mensaje después de conectar que no parezca spam, qué tipo de interacción previa (comentar, reaccionar) aumenta la tasa de respuesta antes de enviar un mensaje directo, cuándo es apropiado hablar de lo que vendes y cuándo no y cómo gestionar el seguimiento sin ser pesado.

**5. Conversaciones que avanzan hacia la reunión**
El objetivo del social selling no es hacer una venta por mensaje sino conseguir una conversación real. Diseña el camino desde la conexión inicial hasta la reunión: cómo mantener conversaciones de valor que no sean solo sobre tu producto, cómo identificar cuándo un prospecto está listo para una conversación más profunda, cómo proponer una reunión de forma natural que no parezca una trampa de ventas y cómo gestionar a los prospectos que muestran interés pero no acaban de dar el paso.

**6. Automatización con personalización**
La escala en social selling requiere cierta automatización, pero la automatización sin personalización genera spam. Diseña un sistema que equilibre ambos: qué se puede automatizar sin perder la autenticidad, dónde la personalización manual es imprescindible, cómo usar las herramientas de automatización de LinkedIn de forma que cumpla con los términos del servicio y qué nivel de personalización mínimo hace que un mensaje parezca genuino.

**7. Métricas de social selling y optimización continua**
El social selling mejora con la iteración sistemática. Define las métricas que importan: tasa de aceptación de conexiones, tasa de respuesta de mensajes, tasa de conversión de conversación a reunión, número de oportunidades generadas desde LinkedIn y porcentaje del pipeline atribuible al canal. Para cada métrica, indica cuál es un benchmark razonable para mi tipo de venta y cómo mejorarla si está por debajo.

Quiero un sistema que genere pipeline real, no un sistema de vanity metrics de LinkedIn.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Construir un sistema de social selling en LinkedIn que genere pipeline B2B de forma consistente y escalable.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'LinkedIn del PM: construir credibilidad en la comunidad de producto',
                'description'      => 'Cómo un product manager construye presencia en LinkedIn que demuestra criterio de producto, genera conversaciones de calidad y abre oportunidades profesionales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Head of Product con una presencia activa en la comunidad de producto en LinkedIn. Has construido tu reputación compartiendo aprendizajes genuinos de producto que han resonado tanto con PMs como con fundadores y directores de empresa. Conoces la trampa del contenido de producto genérico que no diferencia a nadie y sabes cómo publicar desde la experiencia real de forma que genere conversaciones de valor.

Necesito tu ayuda para construir mi presencia en LinkedIn como product manager.

Mi contexto:
- Nivel de PM: [junior, mid, senior, principal, head of product]
- Tipo de producto: [B2B/B2C, SaaS, marketplace, app, etc.]
- Objetivo en LinkedIn: [buscar nuevo empleo, construir red, visibilidad en el sector, thought leadership]
- Situación actual: [sin presencia, básico, algo activo pero sin estrategia clara]
- Fortaleza de PM en la que más confianza tengo: [discovery, estrategia, datos, liderazgo, etc.]
- Tiempo disponible: [horas semanales]

Con este contexto, diseña mi estrategia de LinkedIn para PMs:

**1. El reto del PM en LinkedIn: visibilidad sin portfolio visible**
El trabajo del PM es notoriamente difícil de mostrar: no diseñas, no codificas y tus decisiones más importantes son confidenciales. Explica cómo resolver este reto: qué sí puedes compartir sin violar la confidencialidad de tu empresa, cómo mostrar criterio de producto sin revelar datos internos, cómo hablar de tus decisiones y aprendizajes de forma que sea útil para otros y qué tipo de contenido de producto genera más credibilidad y conversaciones reales.

**2. Perfil del PM que atrae a las empresas correctas**
El perfil de LinkedIn de un PM debe hablar a dos audiencias: otros PMs que valoran el criterio de producto y fundadores o directores que buscan a alguien que resuelva sus problemas. Optimiza cada sección: titular que describe cómo piensas sobre producto y no solo tu cargo, extracto que cuente tu perspectiva de producto y el tipo de problemas que te apasiona resolver, experiencia que muestre el impacto del trabajo de producto (métricas, decisiones, aprendizajes) y skills que reflejan las capacidades reales de un PM senior.

**3. Contenido de producto que demuestra criterio real**
Hay demasiado contenido de producto genérico en LinkedIn. Diseña una estrategia de contenido que sea genuinamente diferente: análisis de decisiones de producto de empresas reales con tu perspectiva (qué habrías hecho igual y diferente), aprendizajes de proyectos propios con el contexto suficiente para que sean útiles, marcos y metodologías que usas de verdad con los matices reales de aplicarlos, opiniones sobre tendencias de producto basadas en experiencia y no en artículos de Medium y preguntas genuinas a la comunidad de producto que generen debate intelectual real.

**4. Frecuencia y formato para PMs ocupados**
Los PMs están extremadamente ocupados y el contenido de LinkedIn no puede ser una segunda jornada. Diseña un sistema eficiente: qué frecuencia mínima tiene impacto real para un PM, cómo convertir el trabajo del día a día en contenido de LinkedIn sin trabajo adicional, qué formatos son más eficientes de producir para un PM (texto largo versus carrusel versus vídeo) y cómo mantener la presencia en períodos de alta intensidad de trabajo.

**5. Construir red de producto que aporte valor real**
La comunidad de producto en LinkedIn es activa pero heterogénea. Diseña una estrategia de red que sea selectiva: con qué tipos de perfiles conectar de forma prioritaria (otros PMs, fundadores, inversores, diseñadores, engineers), cómo interactuar con el contenido de otros de forma que aporte valor y no sea solo engagement vacío, cómo encontrar y conectar con los mejores PMs de tu sector y cómo mantener conversaciones de producto que sean genuinamente enriquecedoras.

**6. LinkedIn para buscar empleo como PM**
Si el objetivo es cambiar de empresa, la estrategia es diferente. Diseña el sistema para: cómo activar la búsqueda de forma discreta (sin que tu empresa actual lo sepa), qué señales en el perfil y el contenido atraen a los mejores empleadores para tu perfil, cómo usar el contenido de producto como filtro para atraer a las empresas que valoran tu forma de pensar y cómo gestionar el proceso de búsqueda a través de LinkedIn de forma eficiente (contactar con hiring managers, responder a recruiters, generar referidos internos).

**7. De la visibilidad al thought leadership**
El thought leadership de producto no es publicar muchos posts; es publicar los correctos. Diseña el camino hacia convertirte en una voz relevante de la comunidad de producto: cómo identificar los temas donde puedes aportar una perspectiva genuinamente diferente, cómo construir un punto de vista consistente a lo largo del tiempo, cómo colaborar con otros líderes de producto de forma que sea mutuamente beneficioso y qué señales indican que estás construyendo la reputación correcta en la comunidad.

Dame un sistema que construya mi reputación de producto de forma genuina, no uno que me convierta en un publicador de contenido de autoayuda disfrazado de producto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Construir presencia y credibilidad en LinkedIn como product manager mostrando criterio real sin revelar información confidencial.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'LinkedIn para RRHH: atraer talento y construir la marca empleadora',
                'description'      => 'Estrategia para que un profesional de RRHH use LinkedIn para atraer candidatos de calidad, construir la marca empleadora y posicionarse como referente en gestión de personas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de talento que ha construido una presencia activa en LinkedIn que le permite atraer candidatos pasivos de calidad, generar visibilidad para la empresa como empleadora y posicionarse como un referente en la comunidad de recursos humanos. Conoces la diferencia entre publicar ofertas de trabajo en LinkedIn y construir una presencia que hace que los mejores candidatos quieran trabajar en tu empresa.

Necesito tu ayuda para construir mi presencia en LinkedIn como profesional de RRHH.

Mi contexto:
- Rol en RRHH: [reclutador, talent acquisition, HR business partner, director de personas, etc.]
- Tipo de empresa: [startup, pyme, corporación, sectorial]
- Perfiles que más cuesta atraer: [qué tipos de talento son más difíciles de reclutar]
- Objetivo principal: [atraer candidatos, marca empleadora, visibilidad personal, red de reclutadores]
- Situación actual en LinkedIn: [básico, algo activo, sin estrategia]
- Tiempo disponible: [horas semanales para LinkedIn]

Con este contexto, diseña mi estrategia de LinkedIn para RRHH:

**1. El doble rol del profesional de RRHH en LinkedIn**
El profesional de RRHH tiene una posición única en LinkedIn: es al mismo tiempo embajador de la empresa como empleadora y constructor de su propia marca personal. Explica cómo gestionar estos dos objetivos sin que interfieran: cuándo publicar como representante de la empresa y cuándo como profesional independiente, cómo separar la marca personal de la marca empleadora sin contradecirlas y cómo construir credibilidad personal que refuerce la percepción de la empresa como buen lugar para trabajar.

**2. Perfil que inspira confianza en candidatos y profesionales del sector**
El perfil de un profesional de RRHH debe convencer a dos audiencias: candidatos potenciales que evalúan si confiar en el proceso de selección y profesionales del sector que evalúan su expertise en gestión de personas. Optimiza cada sección para ambas audiencias: titular que transmite tu especialidad en personas, extracto que muestra tu filosofía de gestión de talento y qué hace especial a tu empresa, experiencia que demuestra impacto en las personas y en los resultados de negocio y recomendaciones de candidatos y profesionales que has desarrollado.

**3. Contenido que atrae talento pasivo**
Los mejores candidatos no están buscando activamente. Diseña una estrategia de contenido para atraerlos: cómo mostrar la cultura de la empresa de forma auténtica (no solo los valores del PDF), cómo humanizar a los equipos y a los líderes de la empresa, cómo compartir aprendizajes sobre gestión de personas que resuenen con los profesionales que quieres atraer, cómo hablar de las posiciones abiertas de forma que sean atractivas para candidatos pasivos y cómo generar conversaciones sobre vida laboral y cultura que posicionen a tu empresa como referente.

**4. Employer branding orgánico desde RRHH**
El employer branding no puede ser solo publicidad: debe reflejar una realidad. Diseña una estrategia de employer branding orgánico desde LinkedIn que incluya: cómo involucrar a los empleados como embajadores de la marca empleadora sin presionarlos, cómo documentar y compartir momentos auténticos de la cultura de la empresa, cómo gestionar las críticas públicas (Glassdoor, comentarios en LinkedIn) de forma constructiva y cómo construir una narrativa de employer branding coherente a lo largo del tiempo.

**5. Reclutamiento activo a través de LinkedIn**
LinkedIn es la mayor base de datos de talento profesional del mundo. Diseña un sistema de reclutamiento activo que incluya: cómo usar las herramientas de búsqueda para encontrar candidatos que no están buscando activamente, cómo hacer mensajes de contacto que generen respuesta (la mayoría se ignoran), cómo construir pipelines de talento para posiciones que se abren recurrentemente y cómo usar el contenido publicado como filtro para atraer a los candidatos correctos antes de que abras la posición.

**6. Red de profesionales de RRHH y talento**
La red de RRHH en LinkedIn es una de las más activas. Diseña una estrategia para construirla: qué comunidades de RRHH y talento vale la pena cultivar, cómo construir relaciones con otros reclutadores para intercambiar candidatos de forma ética, cómo conectar con los mejores profesionales de cada área para tener acceso a ellos cuando abra una posición relevante y cómo mantenerse al día sobre tendencias de gestión de personas a través de LinkedIn.

**7. Métricas de impacto de LinkedIn en talento**
Medir si LinkedIn está funcionando para RRHH es más complejo que contar likes. Define las métricas que importan: calidad de candidatos inbound atribuibles a LinkedIn, reducción de tiempo de cobertura de posiciones, incremento de solicitudes espontáneas de calidad, visibilidad de las ofertas de trabajo y alcance del contenido de employer branding. Incluye cómo presentar estas métricas al equipo directivo para justificar la inversión de tiempo en la plataforma.

Quiero una estrategia que mejore realmente la calidad del talento que llega a la empresa, no solo que aumente el número de seguidores.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Construir una presencia en LinkedIn para profesionales de RRHH que atraiga talento de calidad y refuerce la marca empleadora.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'LinkedIn para financieros: visibilidad en un sector que no suele hablar',
                'description'      => 'Cómo un profesional de finanzas construye presencia en LinkedIn de forma que genere oportunidades sin comprometer la discreción y reserva propias del sector.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO con una presencia activa en LinkedIn que ha conseguido construir reputación en el sector financiero sin revelar información confidencial de sus empresas ni perder la credibilidad que exige el mundo de las finanzas. Conoces el equilibrio difícil entre la visibilidad necesaria para abrir oportunidades y la discreción que requiere el perfil financiero. Tienes un sistema para compartir conocimiento financiero de valor sin traspasar esa línea.

Necesito tu ayuda para construir mi presencia en LinkedIn como profesional de finanzas.

Mi perfil:
- Rol financiero: [CFO, controller, analista, director financiero, tesorero, consultor]
- Sector: [tecnología, industrial, servicios, financiero, startup, etc.]
- Objetivo en LinkedIn: [empleo, visibilidad como asesor, red de contactos, thought leadership]
- Situación actual: [sin presencia, básico, algo activo]
- Mayor preocupación: [confidencialidad, imagen profesional, no saber qué compartir]
- Tiempo disponible: [horas semanales]

Con este contexto, diseña mi estrategia de LinkedIn para financieros:

**1. Por qué los financieros suelen brillar por su ausencia en LinkedIn**
Antes de la estrategia, analiza los frenos específicos del profesional financiero en LinkedIn: cultura de discreción y confidencialidad del sector, miedo a parecer demasiado comercial o autopromocionarse, incertidumbre sobre qué se puede compartir sin comprometer la empresa, percepción de que LinkedIn es para vendedores y marketers, no para financieros, y riesgo reputacional de opinar sobre temas financieros de forma pública. Para cada freno, propón cómo superarlo de forma que mantenga la credibilidad del perfil financiero.

**2. Perfil financiero que transmite rigor y confianza**
La credibilidad es el activo más importante del profesional financiero. Optimiza el perfil para transmitirla: titular que describa tu especialidad y el valor que generas sin hipérboles, extracto que muestre tu perspectiva sobre las finanzas y los problemas empresariales que abordas, experiencia que use métricas de impacto cuando la confidencialidad lo permite y recomendaciones de colegas y superiores que refuercen tu reputación técnica y de criterio. Dame instrucciones específicas para mi tipo de rol y objetivos.

**3. Qué puede publicar un financiero sin comprometer la confidencialidad**
Este es el mayor bloqueo del financiero en LinkedIn. Define claramente qué es publicable y qué no: conocimiento financiero genérico aplicado a casos de empresa (sin datos reales de tu empresa), análisis de situaciones financieras de empresas cotizadas o con información pública, reflexiones sobre metodologías de análisis financiero, tendencias del entorno macroeconómico aplicadas a la gestión empresarial, aprendizajes de la carrera financiera y errores propios que generen aprendizaje y perspectivas sobre la evolución del rol CFO y la función financiera. Para cada categoría, indica cómo publicarlo de forma que añada valor y sea apropiado para el sector.

**4. Formatos de contenido que funcionan para financieros**
El profesional financiero tiende a ser analítico y riguroso, y ese estilo puede funcionar muy bien en LinkedIn si se adapta correctamente. Diseña una estrategia de formato: análisis con datos públicos presentados de forma visual, marcos de análisis financiero con ejemplos prácticos, opiniones sobre noticias económicas con perspectiva de CFO o controller y posts narrativos sobre decisiones financieras complejas. Para cada formato, indica cómo estructurarlo para que sea accesible para no financieros sin perder la sustancia.

**5. Networking financiero estratégico**
La comunidad financiera en LinkedIn tiene redes bien definidas. Diseña una estrategia de networking: con qué perfiles conectar de forma prioritaria (otros CFOs, inversores, consultores financieros, banqueros, auditores), cómo interactuar con el contenido de referentes financieros de forma que construya credibilidad, cómo construir relaciones con headhunters especializados en perfiles financieros y cómo mantener contacto con la comunidad financiera sin dedicar tiempo excesivo.

**6. LinkedIn para oportunidades financieras específicas**
Dependiendo de tu objetivo, la estrategia cambia. Para búsqueda de posición CFO: cómo mostrar criterio estratégico además de capacidad técnica, qué tipo de contenido atrae a consejos de administración y accionistas. Para consultoría o advisory financiero: cómo generar confianza como asesor externo, qué casos de uso (sin datos confidenciales) demuestran el impacto de tu trabajo. Para visibilidad como inversor o business angel: cómo posicionarte en el ecosistema de inversión sin comprometer tu posición actual.

**7. Plan de 6 meses para financieros que empiezan desde cero**
Diseña un plan gradual y conservador, acorde con el perfil del profesional financiero: el primer mes (optimización del perfil y primeras conexiones estratégicas), el segundo y tercer mes (primeras publicaciones de bajo riesgo para calibrar respuesta), el cuarto y quinto mes (contenido más frecuente y engagement con la comunidad) y el sexto mes (evaluación de resultados y ajuste de la estrategia). Incluye qué métricas revisar y cuándo es razonable esperar los primeros resultados concretos.

Quiero una estrategia que construya mi reputación financiera de forma sólida y duradera, coherente con los estándares del sector.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Construir una presencia en LinkedIn para financieros que genere oportunidades manteniendo la discreción y credibilidad del sector.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'LinkedIn para abogados: construir reputación sin parecer demasiado comercial',
                'description'      => 'Estrategia para que un abogado construya presencia en LinkedIn que genere clientes y oportunidades sin perder la seriedad y discreción propias de la profesión jurídica.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado senior que ha construido una reputación sólida en LinkedIn como referente en su especialidad jurídica. Has encontrado el equilibrio entre visibilidad y discreción, entre generar negocio y mantener la seriedad que requiere la profesión jurídica y entre hablar de derecho de forma que sea útil para el cliente sin dar asesoramiento jurídico gratuito. Conoces las reglas deontológicas sobre publicidad y sabes cómo actuar dentro de ellas.

Necesito tu ayuda para construir mi presencia en LinkedIn como abogado.

Mi perfil:
- Especialidad jurídica: [mercantil, laboral, fiscal, procesal, propiedad intelectual, etc.]
- Tipo de práctica: [socio de despacho, asociado, abogado de empresa, independiente]
- Clientes objetivo: [empresas, particulares, startups, pymes, grandes corporaciones]
- Objetivo en LinkedIn: [atraer clientes, visibilidad como referente, red de contactos, empleo]
- Situación actual: [sin presencia, básico, algo activo]
- Preocupación principal: [deontología, confidencialidad, imagen profesional, no saber qué publicar]

Con este contexto, diseña mi estrategia de LinkedIn para abogados:

**1. La tensión entre marketing jurídico y deontología profesional**
Los abogados tienen restricciones deontológicas específicas sobre la publicidad y la captación de clientes que varían por jurisdicción. Antes de diseñar la estrategia, explica: qué está permitido y qué no en la comunicación jurídica en LinkedIn según las normas deontológicas generales, cómo compartir conocimiento jurídico de forma útil sin que constituya asesoramiento jurídico gratuito que cree responsabilidad, cómo hablar de casos y experiencias sin violar el secreto profesional y cómo diferenciarse comercialmente respetando la dignidad de la profesión.

**2. Perfil jurídico que genera confianza inmediata**
El cliente que busca abogado en LinkedIn está evaluando confianza antes que precio. Optimiza cada sección para generarla: titular que describe tu especialidad de forma clara y sin jargon innecesario, extracto que describe los problemas del cliente que resuelves y tu forma de trabajar (no los años de experiencia del despacho), experiencia que muestra sectores y tipos de asuntos sin revelar datos confidenciales y recomendaciones de clientes que cuenten el impacto de tu trabajo desde su perspectiva.

**3. Contenido jurídico que atrae clientes sin dar asesoramiento gratuito**
El mayor desafío del abogado en LinkedIn es generar contenido útil sin asumir responsabilidad jurídica. Diseña una estrategia de contenido que funcione: explicaciones de cambios legislativos relevantes para tu cliente objetivo con sus implicaciones prácticas, análisis de decisiones judiciales importantes de forma accesible para no juristas, casos de uso de aspectos jurídicos en el mundo empresarial, alertas sobre riesgos jurídicos que no se suelen considerar y perspectivas sobre tendencias que afectan a tu especialidad. Para cada tipo, indica cómo estructurarlo para que aporte valor sin crear obligaciones jurídicas.

**4. Visibilidad sin perder seriedad**
Hay una forma de comunicar en LinkedIn que genera credibilidad jurídica y otra que la destruye. Diseña las reglas de estilo para tu comunicación: tono apropiado para la profesión sin ser aburrido o inaccesible, cómo explicar el derecho en términos que el cliente no jurista entienda, qué formatos de contenido funcionan para un perfil jurídico (texto reflexivo, análisis de casos, vídeos breves explicativos) y qué evitar (sensacionalismo, clickbait, opiniones sobre casos en curso de alta visibilidad mediática).

**5. Red jurídica estratégica**
La comunidad jurídica en LinkedIn es activa. Diseña una estrategia de red que sea estratégicamente útil: con qué perfiles conectar de forma prioritaria (clientes potenciales en el sector que te interesa, otros abogados para derivaciones mutuas, profesionales con los que colaboras habitualmente), cómo interactuar con el contenido de referentes jurídicos de tu especialidad y cómo mantener presencia en la comunidad jurídica sin consumir tiempo excesivo.

**6. Generación de negocio jurídico a través de LinkedIn**
El objetivo final es generar clientes o posicionarse para mejores oportunidades. Diseña el sistema de conversión: cómo hacer que el contenido lleve a conversaciones privadas, cómo gestionar las consultas que llegan por LinkedIn (qué responder, qué no responder y cuándo proponer una reunión de consulta), cómo convertir una relación de LinkedIn en una reunión de asesoramiento y cómo medir si LinkedIn está generando negocio real.

**7. Plan de construcción de reputación a 12 meses**
La reputación jurídica se construye lentamente y debe ser sólida. Diseña un plan de 12 meses: los primeros tres meses (optimización del perfil y primeras publicaciones de prueba), el segundo trimestre (regularización de la frecuencia de publicación y construcción de la red), el tercer trimestre (profundización en los temas que más resuenan con la audiencia) y el cuarto trimestre (evaluación de resultados y definición de la estrategia del año siguiente). Incluye expectativas realistas sobre cuándo empezar a ver los primeros resultados.

Quiero una estrategia que construya mi reputación jurídica de forma coherente con los valores de la profesión y con mi forma de ejercer el derecho.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Construir una presencia en LinkedIn para abogados que genere clientes y reputación sin comprometer la deontología ni la seriedad profesional.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'LinkedIn del CSM: visibilidad en la comunidad de customer success',
                'description'      => 'Cómo un customer success manager construye presencia en LinkedIn que le posiciona como referente en CS, expande su red y abre oportunidades de carrera.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con una presencia activa en la comunidad de CS en LinkedIn. Has construido una red de miles de profesionales de CS y generas regularmente conversaciones de valor sobre retención de clientes, gestión de cuentas y el futuro del rol. Conoces qué tipo de contenido resuena con la comunidad de CS y cómo construir visibilidad que tenga impacto real en la carrera.

Necesito tu ayuda para construir mi presencia en LinkedIn como customer success manager.

Mi perfil:
- Nivel en CS: [CSM junior, CSM, senior CSM, team lead, CS manager, VP CS]
- Tipo de empresa y producto: [SaaS B2B, plataforma, tecnología, etc.]
- Objetivo en LinkedIn: [nuevo empleo, visibilidad en la comunidad de CS, red de contactos, thought leadership]
- Situación actual: [sin presencia, básico, algo activo pero sin estrategia]
- Habilidad o perspectiva de CS que más valoro en mí: [qué crees que eres especialmente bueno]
- Tiempo disponible: [horas semanales]

Con este contexto, diseña mi estrategia de LinkedIn para CS:

**1. La oportunidad del CSM en LinkedIn**
La comunidad de CS en LinkedIn es relativamente joven y activa, lo que significa que hay más oportunidad de destacar que en disciplinas más saturadas. Explica el panorama actual: qué tipo de contenido domina la comunidad de CS en LinkedIn, qué nichos están menos cubiertos y representan una oportunidad, qué perfiles de CS tienen más visibilidad y por qué y qué tipo de presencia en LinkedIn tiene mayor impacto para un CSM en las distintas etapas de la carrera.

**2. Perfil del CSM que atrae a los mejores empleadores y clientes**
El perfil de CS debe demostrar la capacidad de generar resultados para los clientes. Optimiza cada sección: titular que va más allá de "Customer Success Manager en [empresa]" para transmitir tu especialidad y tu impacto, extracto que cuente tu filosofía de CS y qué hace que tus clientes renueven y expandan, experiencia que muestre métricas de retención, NRR y satisfacción cuando sea posible y recomendaciones de clientes y colegas que validen tu capacidad de impacto.

**3. Contenido de CS que genera conversaciones reales**
Hay mucho contenido de CS genérico en LinkedIn. Diseña una estrategia de contenido que sea genuinamente diferente: aprendizajes de gestión de clientes difíciles (sin identificar al cliente), casos de éxito de cómo ayudaste a un cliente a lograr un resultado importante, perspectivas sobre tendencias en customer success basadas en experiencia real, marcos de trabajo que usas en tu día a día con los matices de aplicarlos en la realidad y preguntas a la comunidad de CS que generen debate intelectual genuino. Para cada tipo, indica cómo publicarlo de forma que sea útil y resonante.

**4. Posicionarte en el debate de CS**
Hay debates activos en la comunidad de CS sobre el futuro del rol, la relación entre CS y ventas, la automatización del CS y la medición del impacto. Diseña una estrategia para participar en estos debates de forma que construya tu reputación: cómo tener una perspectiva propia (no solo repetir los consensos del sector), cómo expresar desacuerdo con respeto, cómo responder a los posts de líderes de CS de forma que añada valor y no sea solo adulación y cómo iniciar debates propios sobre temas donde tienes perspectiva genuina.

**5. Red de CS estratégica**
La comunidad de CS en LinkedIn incluye perfiles de muy diferentes niveles y perspectivas. Diseña una estrategia de red: con quién conectar de forma prioritaria (otros CSMs para aprendizaje mutuo, VPs de CS de empresas donde quieres trabajar, fundadores de SaaS que son potenciales clientes, líderes de opinión de CS), cómo construir relaciones con personas que admiras en la comunidad de CS y cómo mantener conversaciones de valor con tu red sin que sea solo consumo de contenido.

**6. LinkedIn para crecer en la carrera de CS**
Dependiendo de tu objetivo de carrera, la estrategia cambia. Para buscar empleo como CSM: cómo mostrar el impacto de tu trabajo en retención y expansión de forma que los hiring managers lo entiendan, cómo activar la red para referidos internos. Para ascender a manager de CS: cómo mostrar capacidad de liderazgo además de habilidades de gestión de cuentas. Para hacer la transición de CS a producto, ventas o consultoría: cómo reformular tu experiencia de CS en el lenguaje del nuevo rol.

**7. Sistema de contenido sostenible para CSMs ocupados**
Los CSMs gestionan muchos clientes y el tiempo es escaso. Diseña un sistema de mínimo esfuerzo máximo impacto: qué frecuencia de publicación tiene impacto real para un CSM, cómo convertir las situaciones del día a día con clientes en contenido (respetando la confidencialidad), qué hacer en las semanas de alta intensidad para no perder el momentum y cómo medir si el tiempo invertido en LinkedIn está generando los resultados de carrera que buscas.

Quiero construir visibilidad en la comunidad de CS de forma que tenga impacto real en mi carrera, no solo acumular seguidores del sector.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Construir presencia y credibilidad en LinkedIn para CSMs que quieren posicionarse en la comunidad de customer success y abrir oportunidades de carrera.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'LinkedIn del freelance: el perfil y el contenido que atrae proyectos',
                'description'      => 'Sistema para que un profesional independiente convierta LinkedIn en su principal canal de generación de proyectos sin depender de plataformas de intermediación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior que genera el 70% de sus proyectos a través de LinkedIn. Has construido un sistema que convierte tu presencia en la plataforma en un flujo predecible de conversaciones con clientes potenciales, sin spam, sin mensajes de venta agresivos y sin convertirte en un influencer de contenido de productividad o emprendimiento. Tu enfoque es demostrar expertise real y construir confianza antes de que el cliente necesite contratar a alguien.

Necesito tu ayuda para convertir LinkedIn en mi principal canal de generación de proyectos freelance.

Mi contexto:
- Tipo de servicio: [diseño, desarrollo, consultoría, redacción, formación, etc.]
- Cliente ideal: [tipo de empresa, sector, tamaño, cargo de la persona que contrata]
- Situación actual en LinkedIn: [sin presencia, básico, algo activo]
- Canal actual de proyectos: [dónde consigues clientes ahora mismo]
- Mayor problema de captación actual: [dependencia de plataformas, pocas referencias, proyectos irregulares]
- Tiempo disponible para LinkedIn: [horas semanales]
- Tarifa aproximada: [rango por hora o por proyecto]

Con este contexto, diseña mi sistema de LinkedIn para freelance:

**1. Por qué LinkedIn puede reemplazar las plataformas de intermediación**
Las plataformas de freelance (Upwork, Fiverr, etc.) compiten por precio y te convierten en un commodity. LinkedIn te permite diferenciarte por valor y acceder directamente a clientes que pagan tarifas premium. Explica concretamente la diferencia: qué tipo de clientes encuentras en LinkedIn que no están en las plataformas, por qué el cliente de LinkedIn suele ser de mayor calidad y presupuesto, qué ventajas competitivas tiene el freelance que construye presencia en LinkedIn versus el que depende de las plataformas y cuánto tiempo lleva construir un flujo de clientes sostenible desde LinkedIn.

**2. El perfil del freelance que vende sin vender**
El perfil de LinkedIn de un freelance es la herramienta de ventas más importante. Optimiza cada elemento para convertir visitas en conversaciones: titular que describe exactamente qué haces y para quién (no "profesional creativo" sino algo específico que tu cliente buscaría), extracto que habla de los problemas del cliente que resuelves y el impacto que generas (con resultados concretos si es posible), experiencia que se presenta como portfolio de proyectos y resultados y sección "featured" que muestra los mejores trabajos o testimonios. Dame instrucciones específicas para mi tipo de servicio y cliente.

**3. Contenido que atrae al cliente adecuado**
El mejor contenido para un freelance es el que filtra: atrae a los clientes correctos y disuade a los que no encajan. Diseña una estrategia de contenido específica para mi servicio: cómo mostrar el proceso de trabajo (que genera confianza en la metodología), cómo compartir resultados de proyectos pasados sin violar la confidencialidad, cómo demostrar expertise en los problemas del cliente objetivo y cómo crear contenido que posicione mi tarifa premium como obvia y no como cara. Para cada tipo de contenido, indica cómo estructurarlo para que genere conversaciones de clientes potenciales.

**4. Estrategia de visibilidad con el cliente ideal**
No basta con publicar; tu contenido debe llegar a las personas que contratan. Diseña una estrategia para llegar al cliente ideal: cómo identificar y conectar con los perfiles que toman decisiones de compra en tu nicho, cómo interactuar con el contenido de clientes potenciales de forma que seas visible para ellos, cómo aparecer en las búsquedas de LinkedIn que hace tu cliente cuando necesita tu servicio y cómo usar los grupos y comunidades relevantes para tu sector.

**5. Sistema de conversión de conexiones a proyectos**
La visibilidad sin conversión no paga las facturas. Diseña el funnel de conversión completo: cómo pasar de que alguien comente tu post a una conversación privada, qué decir en el primer mensaje para que la conversación avance hacia una propuesta, cómo gestionar los leads fríos (personas que te siguen pero no te contactan) y cuándo y cómo presentar tu disponibilidad y tarifas de forma que no asuste al cliente ni te posicione demasiado barato.

**6. Testimonios y prueba social en LinkedIn**
El mayor activo del freelance en LinkedIn son las recomendaciones de clientes satisfechos. Diseña un sistema para: cómo y cuándo pedir recomendaciones a los clientes (el momento y la forma correcta), qué pedirles que digan (para que la recomendación sea útil para clientes futuros), cómo compartir testimonios de clientes en el contenido sin que parezca autopromoción y cómo construir credibilidad con casos de éxito cuando eres nuevo y tienes pocos proyectos.

**7. Plan de 90 días para construir flujo de proyectos**
Diseña un plan concreto y ejecutable para los primeros 90 días: las primeras dos semanas (perfil, primeras conexiones estratégicas), el primer mes (primeras publicaciones y primeras conversaciones), el segundo mes (sistema de contenido regular y primeros proyectos atribuibles a LinkedIn) y el tercer mes (optimización basada en resultados y crecimiento de la cadencia). Incluye expectativas realistas sobre cuándo llegan los primeros proyectos y cómo saber si el sistema está funcionando.

Quiero un sistema que me haga independiente de las plataformas y me dé proyectos de mayor calidad y precio. No quiero ser un influencer; quiero ser un freelance con agenda llena.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Construir un sistema de generación de proyectos freelance a través de LinkedIn que reduzca la dependencia de plataformas de intermediación.',
                'vote_score'       => 48,
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
