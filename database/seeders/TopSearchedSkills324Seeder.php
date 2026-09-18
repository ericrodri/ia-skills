<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills324Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 - Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Gestión de reputación de marca en canales digitales: monitorización y respuesta',
                'description'      => 'Diseña un sistema completo de gestión de la reputación online de tu marca: desde la monitorización de menciones y el análisis del sentimiento hasta la respuesta estratégica a reseñas y crisis de reputación en redes sociales y plataformas de reviews.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en gestión de reputación online y comunicación digital con más de 12 años de experiencia protegiendo y construyendo la reputación de marcas de distintos sectores. Has gestionado crisis de reputación en redes sociales, desarrollado sistemas de monitorización y construido estrategias proactivas de reputación que han transformado la percepción pública de las marcas.

Necesito desarrollar un sistema completo de gestión de la reputación online para mi marca.

**Marco completo de gestión de reputación de marca:**

**1. Auditoría de reputación actual**
- ¿Cómo realizar una auditoría completa de la reputación online actual de mi marca?
- ¿En qué plataformas y fuentes debo buscar menciones: Google My Business, Trustpilot, redes sociales, foros del sector, medios de comunicación online, Reddit, comparadores de productos?
- ¿Cómo analizar el sentimiento de las menciones: positivo, negativo, neutro, y cómo priorizar los problemas detectados?
- Proporciona una plantilla de auditoría de reputación online con las dimensiones y métricas más importantes.
- ¿Cómo identificar las narrativas dominantes sobre mi marca y cuáles son falsas, exageradas o injustas?

**2. Sistema de monitorización continua**
- ¿Qué herramientas de monitorización de marca debo usar para distintos presupuestos (gratuitas: Google Alerts, Mention básico; de pago: Brandwatch, Sprinklr, Mention Pro)?
- ¿Cómo configurar alertas que filtren el ruido y me notifiquen solo las menciones realmente relevantes?
- Diseña un dashboard de reputación online con las métricas clave que debo monitorizar semanalmente: volumen de menciones, ratio positivo/negativo, share of voice, evolución del rating en plataformas de reviews.
- ¿Con qué frecuencia debo revisar cada tipo de fuente de reputación?
- ¿Cómo involucrar a los equipos de ventas, soporte y producto en la detección temprana de problemas de reputación?

**3. Gestión proactiva de reseñas y ratings**
- ¿Cómo construir una estrategia proactiva para generar reseñas positivas de manera ética y efectiva?
- ¿Qué momentos del journey del cliente son los más adecuados para solicitar una reseña?
- Proporciona templates de solicitud de reseña para diferentes canales: email post-compra, mensaje de seguimiento, SMS, solicitud en app.
- ¿Cómo responder a las reseñas positivas de manera que refuerce el vínculo con el cliente y demuestre que leemos y valoramos el feedback?
- ¿Cómo responder a las reseñas negativas de manera que proteja la reputación ante otros lectores, incluso cuando no puedas resolver completamente la queja?
- Proporciona un framework de respuesta a reseñas negativas con los pasos: reconocer, agradecer, disculparse si procede, ofrecer solución, invitar a continuar la conversación en privado.

**4. Gestión de crisis de reputación online**
- ¿Cómo identificar si una situación negativa es una queja puntual o una crisis de reputación que requiere respuesta urgente?
- Diseña un protocolo de gestión de crisis de reputación online con los pasos desde la detección hasta la resolución y el análisis post-crisis.
- ¿Cuándo responder públicamente a una crisis y cuándo es mejor manejarla en privado?
- ¿Cómo responder en redes sociales cuando la crisis involucra a un influencer o tiene potencial viral?
- ¿Cómo coordinar la respuesta entre el equipo de marketing, comunicación, legal y dirección durante una crisis?
- Proporciona ejemplos de respuestas bien y mal ejecutadas ante crisis de reputación online.

**5. Estrategia de contenidos para construir reputación proactiva**
- ¿Cómo usar el contenido orgánico (blog, redes sociales, YouTube, podcasts) para construir una reputación positiva que actúe como colchón ante posibles crisis futuras?
- ¿Cómo posicionar contenidos positivos sobre la marca en los primeros resultados de búsqueda de Google para que desplacen contenido negativo?
- ¿Cómo usar testimoniales, casos de éxito y user-generated content para reforzar la reputación de la marca?

**6. Métricas y reporting de reputación**
- ¿Cómo construir un informe mensual de reputación online que sea útil para la dirección?
- ¿Qué métricas demuestran el impacto financiero de la gestión de reputación: correlación entre NPS/rating y conversión, impacto en el coste de adquisición?

**Formato de respuesta:**
Organiza la respuesta en las 6 secciones con recomendaciones concretas, plantillas de respuesta y frameworks. Incluye ejemplos de respuestas a reseñas positivas y negativas, y un protocolo de crisis. Cierra con un plan de 90 días para construir un sistema robusto de gestión de reputación online.

Antes de responder, pregúntame sobre el tipo de negocio, el sector, las plataformas de reviews más relevantes para mi industria y si hemos tenido alguna crisis reciente de reputación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir un sistema de monitorización y gestión proactiva de la reputación de marca online',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],

            // 2 - Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Reputación del producto digital: gestión de reviews técnicas y presencia en comunidades',
                'description'      => 'Aprende a gestionar la reputación técnica de un producto de software en plataformas de reviews como G2, Capterra y Product Hunt, y a construir una presencia positiva en comunidades de desarrolladores como GitHub, Stack Overflow y Reddit.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en developer relations y gestión de reputación de productos de software. Has ayudado a empresas de software B2B y B2C a construir y proteger su reputación en plataformas de reviews técnicas, comunidades de desarrolladores y marketplaces de aplicaciones.

Necesito una estrategia completa para gestionar y mejorar la reputación online de mi producto de software.

**Marco de gestión de reputación para productos digitales:**

**1. Auditoría de reputación técnica del producto**
- ¿En qué plataformas debo monitorizar la reputación de mi producto de software?
  - Reviews de usuarios: G2, Capterra, Trustpilot, Google Play, App Store, Product Hunt
  - Comunidades técnicas: GitHub Issues, Stack Overflow, Reddit (r/sysadmin, r/devops, r/programming), Hacker News
  - Comunidades de profesionales: LinkedIn, Slack communities del sector
  - Medios especializados: blogs técnicos, newsletters del sector
- ¿Cómo realizar una auditoría de reputación que identifique los problemas recurrentes mencionados por los usuarios?
- Proporciona una plantilla de análisis de reviews de software que categorice el feedback por tipo de problema: UX/UI, performance, integraciones, precio, soporte.

**2. Estrategia de reviews en plataformas B2B (G2, Capterra)**
- ¿Cómo construir una estrategia de generación de reviews en G2 y Capterra que sea ética y efectiva?
- ¿Cuándo y cómo solicitar reviews a los clientes: los mejores momentos del journey del cliente, los mejores canales (email, in-app, CSM)?
- ¿Cómo responder a las reviews críticas en G2 o Capterra de manera que proteja la reputación ante otros compradores potenciales?
- ¿Cómo usar las reviews de la competencia para identificar oportunidades de posicionamiento?
- Proporciona una secuencia de emails para solicitar reviews a los clientes que maximice la tasa de respuesta.

**3. Gestión de la reputación en App Stores**
- ¿Cómo responder a las valoraciones de 1-2 estrellas en Google Play o App Store de manera constructiva y que impulse a los usuarios a actualizar su valoración?
- ¿Qué métricas de rating y reviews impactan en el posicionamiento en las tiendas de aplicaciones?
- ¿Cómo estructurar el proceso de solicitud de valoración dentro de la app para maximizar el rating promedio?

**4. Reputación en comunidades de desarrolladores**
- ¿Cómo construir una presencia positiva en GitHub: gestión de issues, calidad de la documentación, tiempo de respuesta, política de contribuciones?
- ¿Cómo gestionar los threads críticos sobre el producto en Stack Overflow, Reddit o Hacker News sin generar más controversia?
- ¿Cuándo un desarrollador de la empresa debe responder personalmente a una crítica en una comunidad y cuándo es mejor no hacerlo?
- Proporciona guidelines de participación en comunidades técnicas para el equipo de producto y desarrollo.

**5. Gestión de crisis de reputación técnica**
- ¿Cómo gestionar la reputación cuando el producto tiene una caída de servicio, una brecha de seguridad o un bug crítico?
- ¿Cuál es la estructura ideal de una comunicación de incidente que informe, tranquilice y mantenga la confianza de los usuarios?
- Proporciona una plantilla de comunicación de incidente para distintos canales: status page, Twitter/X, email, comunidades técnicas.
- ¿Cómo gestionar el post-mortem público de un incidente de manera que refuerce la confianza en el equipo?

**6. Construcción proactiva de reputación técnica**
- ¿Cómo usar el blog técnico, los webinars y las conferencias para construir reputación técnica positiva?
- ¿Cómo contribuir a proyectos de código abierto y comunidades técnicas de manera que refuerce la imagen del producto?

**Formato de respuesta:**
Organiza la respuesta en las 6 secciones con recomendaciones concretas, plantillas de respuesta y estrategias. Incluye ejemplos de comunicaciones de incidentes bien ejecutadas y plantillas de solicitud de reviews. Cierra con un plan de 90 días para mejorar la reputación técnica del producto.

Antes de responder, pregúntame sobre el tipo de producto (B2B SaaS, app móvil, developer tool, marketplace), el rating actual en las principales plataformas y cuáles son los problemas de reputación más frecuentes que enfrenta el producto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar la reputación de un producto de software en plataformas de reviews y comunidades técnicas',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],

            // 3 - Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Construcción de reputación online para estudios y profesionales del diseño',
                'description'      => 'Desarrolla una estrategia para construir y gestionar tu reputación online como diseñador o estudio creativo: desde la presencia en plataformas de portfolio hasta la gestión de reseñas en Clutch y la construcción de autoridad en comunidades de diseño.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de marca personal y reputación online especializado en profesionales y estudios de la industria creativa y del diseño. Has ayudado a diseñadores gráficos, estudios de UX y agencias creativas a construir una reputación online sólida que les ha permitido atraer mejores clientes, cobrar más y diferenciarse en un mercado saturado.

Necesito una estrategia completa para construir y gestionar mi reputación online como profesional o estudio de diseño.

**Marco de construcción de reputación para diseñadores:**

**1. Auditoría de presencia y reputación online actual**
- ¿Cómo auditar mi presencia online actual como diseñador o estudio: qué aparece en Google al buscar mi nombre o el nombre del estudio, qué dicen mis perfiles en plataformas de portfolio y reviews?
- ¿En qué plataformas debo tener presencia según mi tipo de trabajo y clientes objetivo: Behance, Dribbble, Awwwards, Clutch, Google My Business, LinkedIn, Instagram, Pinterest?
- ¿Cómo evaluar la calidad y consistencia de mi presencia actual en cada plataforma?
- Proporciona una checklist de auditoría de reputación online para diseñadores con los elementos críticos de cada plataforma.

**2. Estrategia de portfolio online como activo de reputación**
- ¿Cómo seleccionar y presentar los proyectos del portfolio para construir la reputación que quiero tener?
- ¿Cuántos proyectos debe tener un portfolio ideal y cómo equilibrar la variedad con la especialización?
- ¿Cómo presentar un caso de estudio de diseño que demuestre el proceso, el pensamiento y los resultados, no solo el resultado visual final?
- ¿Cómo incluir testimoniales de clientes en el portfolio de manera que sean creíbles y persuasivos?
- ¿Cuál es la mejor manera de estructurar la página web de un estudio o freelancer de diseño para maximizar la confianza del visitante?

**3. Gestión de reviews y referencias de clientes**
- ¿Cómo solicitar testimoniales y referencias a clientes satisfechos de manera profesional y sin que resulte incómodo?
- Proporciona templates de solicitud de testimonial para diferentes canales: email, conversación directa, LinkedIn.
- ¿En qué plataformas debo buscar activamente reviews para mi tipo de negocio de diseño: Clutch para B2B, Google My Business para clientes locales?
- ¿Cómo responder a una reseña negativa sobre el trabajo de diseño de manera que proteja mi reputación ante clientes potenciales?

**4. Construcción de autoridad en comunidades de diseño**
- ¿Cómo construir reputación y visibilidad en comunidades de diseño online: grupos de LinkedIn, comunidades de Slack del sector (Design Buddies, Hexagon UX), Twitter/X Design Community?
- ¿Qué tipo de contenido construye reputación de manera más efectiva para un diseñador: procesos de trabajo, opiniones sobre tendencias del sector, análisis de diseños conocidos, tutoriales?
- ¿Con qué frecuencia y en qué canales debo publicar contenido para construir autoridad sin que se convierta en una carga insostenible?
- ¿Cómo participar en concursos, premios y rankings de diseño para construir credenciales objetivas de reputación?

**5. Gestión de crisis de reputación para diseñadores**
- ¿Cómo gestionar situaciones de crisis de reputación específicas de la industria del diseño: acusación de plagio, queja pública de un cliente insatisfecho, controversia en redes sociales sobre un proyecto?
- ¿Cuándo responder públicamente y cuándo es mejor ignorar una crítica online?
- ¿Cómo proteger legalmente mi obra y mi reputación ante el uso no autorizado de mi trabajo?

**6. Estrategia de relaciones públicas digitales para diseñadores**
- ¿Cómo conseguir que mi trabajo sea publicado en medios de referencia del diseño: blogs, revistas y newsletters del sector?
- ¿Cómo construir relaciones con periodistas, bloggers y curators del mundo del diseño?
- ¿Cómo usar el hablar en conferencias, dar webinars o participar en podcasts para construir autoridad y reputación?

**Formato de respuesta:**
Organiza la respuesta en las 6 secciones con recomendaciones concretas, plantillas de comunicación y estrategias específicas para la industria del diseño. Incluye ejemplos de presentaciones de portfolio y testimoniales efectivos. Cierra con un plan de 6 meses para construir una reputación online sólida como diseñador o estudio.

Antes de responder, pregúntame sobre mi especialidad de diseño, el tipo de clientes que quiero atraer y cuál es el estado actual de mi presencia online.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir y gestionar la reputación online de un diseñador o estudio creativo para atraer mejores clientes',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],

            // 4 - Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Reputación online del vendedor: reviews, LinkedIn y social selling para generar confianza',
                'description'      => 'Construye una reputación online personal que acelere el proceso de ventas generando confianza antes del primer contacto. Aprende a gestionar tu presencia en LinkedIn, solicitar referencias de clientes y usar el social selling para posicionarte como referente en tu sector.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en social selling y construcción de reputación online para profesionales de ventas B2B. Has entrenado a equipos comerciales a transformar su presencia digital en una herramienta de generación de confianza que reduce la fricción en el proceso de ventas y mejora las tasas de respuesta y cierre.

Necesito una estrategia para construir una reputación online que me ayude a vender más y mejor.

**Marco de reputación online para profesionales de ventas:**

**1. Auditoría de presencia digital como vendedor**
- ¿Qué ve un prospecto cuando busca mi nombre en Google antes de aceptar una reunión conmigo?
- ¿Cómo evaluar la calidad de mi perfil de LinkedIn como herramienta de ventas: foto, titular, resumen, experiencia, recomendaciones, contenido publicado?
- ¿En qué otras plataformas debo tener presencia según mi sector y el perfil de mis clientes?
- Proporciona una checklist de auditoría de presencia digital para vendedores B2B.

**2. Optimización del perfil de LinkedIn como activo de ventas**
- ¿Cómo reescribir mi perfil de LinkedIn para que esté orientado al cliente (qué problemas resuelvo) y no a mí mismo (mi trayectoria)?
- Proporciona una estructura de perfil de LinkedIn optimizado para vendedores: foto profesional, titular basado en valor, resumen orientado al cliente, experiencia con resultados cuantificados, habilidades relevantes.
- ¿Cómo solicitar y gestionar las recomendaciones de LinkedIn para que sean específicas y persuasivas para mis clientes potenciales?
- ¿Cómo configurar el LinkedIn Social Selling Index (SSI) y qué impacto tiene en la visibilidad ante los prospectos?

**3. Generación de contenido que construye reputación de vendedor**
- ¿Qué tipo de contenido debo publicar en LinkedIn para construir reputación como experto en mi sector sin parecer solo que estoy vendiendo?
- Proporciona un calendario de contenido para un vendedor B2B que equilibre: insights del sector, casos de éxito, opiniones sobre tendencias, preguntas que generan debate.
- ¿Con qué frecuencia publicar para ser visible sin saturar a la red?
- ¿Cómo amplificar el contenido de mi empresa de manera que construya mi marca personal sin parecer un simple megáfono corporativo?

**4. Gestión de referencias y testimoniales de clientes**
- ¿Cómo solicitar referencias de clientes de manera sistemática sin que resulte incómodo o forzado?
- ¿Cuándo es el mejor momento del proceso de ventas o post-venta para pedir una referencia?
- Proporciona templates de solicitud de referencia para diferentes situaciones: cliente de larga data, cliente que acaba de cerrar un proyecto exitoso, cliente que ha dado feedback muy positivo.
- ¿Cómo usar las referencias de clientes existentes para abrir puertas en nuevas empresas dentro de la misma industria?
- ¿Cómo gestionar y nutrir la red de referencias para que sea una fuente constante de nuevos clientes?

**5. Social listening para ventas y reputación**
- ¿Cómo monitorizar las conversaciones online de mis prospectos y clientes para identificar oportunidades de venta y momentos para intervenir con valor?
- ¿Cómo usar las alertas de Google y las funcionalidades de LinkedIn para estar al tanto de los cambios en las empresas de mis prospectos: nuevos directivos, expansiones, lanzamientos?
- ¿Cómo interactuar con el contenido de los prospectos en LinkedIn de manera que construya relación antes del primer contacto de ventas?

**6. Gestión de la reputación ante feedback negativo de clientes**
- ¿Cómo gestionar situaciones donde un cliente ha tenido una experiencia negativa y lo ha expresado públicamente?
- ¿Cómo usar las críticas constructivas para mejorar mi proceso de ventas y comunicarlo de manera que refuerce mi reputación de profesional que aprende y mejora?

**Formato de respuesta:**
Organiza la respuesta en las 6 secciones con recomendaciones concretas, plantillas de perfil, templates de comunicación y estrategias de contenido. Incluye ejemplos de perfiles de LinkedIn bien optimizados y templates de solicitud de referencias. Cierra con un plan de 30 días para transformar tu presencia digital en una herramienta de ventas.

Antes de responder, pregúntame sobre mi industria, el tipo de clientes a los que vendo y cuál es el estado actual de mi presencia en LinkedIn.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir reputación online personal para generar confianza antes del primer contacto de ventas',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],

            // 5 - Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de la reputación del producto digital: de las reviews a la narrativa de marca',
                'description'      => 'Aprende a gestionar la reputación de tu producto digital de manera sistemática: desde la monitorización de reviews y sentimiento hasta la construcción de una narrativa de marca coherente que posicione el producto favorablemente frente a la competencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en gestión de producto con especialización en reputación de marca y posicionamiento competitivo. Has trabajado con equipos de producto en empresas SaaS B2B para desarrollar sistemas de gestión de reputación que convierten el feedback de usuarios en ventaja competitiva y construyen narrativas de marca que resisten las crisis.

Necesito desarrollar una estrategia de gestión de reputación online para mi producto digital.

**Marco de gestión de reputación de producto:**

**1. Sistema de escucha del mercado y monitorización de reputación**
- ¿Cómo construir un sistema de inteligencia de reputación que capture señales de distintas fuentes: reviews en G2/Capterra/App Store, menciones en redes sociales, threads en comunidades, artículos de medios?
- ¿Qué herramientas debo usar para monitorizar la reputación del producto con distintos niveles de presupuesto?
- ¿Cómo estructurar el proceso de revisión semanal de reputación para el equipo de producto?
- Diseña un dashboard de reputación de producto con las métricas más importantes: rating promedio por plataforma, volumen de reviews, NPS, menciones negativas de features específicas, comparativas con la competencia.
- ¿Cómo usar el análisis de reviews de la competencia para identificar oportunidades de diferenciación?

**2. Ciclo de feedback de reputación al roadmap**
- ¿Cómo convertir el feedback negativo recurrente en la reputación online en inputs accionables para el roadmap del producto?
- Proporciona un framework para categorizar y priorizar los problemas mencionados en reviews: bugs críticos, deficiencias de UX, features faltantes, problemas de precio o modelo de negocio.
- ¿Cómo cerrar el ciclo con los usuarios que dejaron reviews negativas cuando se ha resuelto el problema que mencionaron?
- ¿Cómo usar las mejoras del producto como oportunidades de PR positiva?

**3. Narrativa de marca y posicionamiento competitivo**
- ¿Cómo desarrollar una narrativa de marca del producto que sea auténtica, diferenciadora y resistente a los ataques de la competencia?
- ¿Cómo analizar las narrativas de los competidores y encontrar los espacios de posicionamiento que ellos no ocupan?
- Proporciona un framework para construir los mensajes clave del producto que sean consistentes en todos los canales: web, reviews, comunicaciones de ventas, materiales de marketing.
- ¿Cómo gestionar la narrativa cuando el producto está en una fase de transición o pivote?

**4. Gestión de crisis de reputación de producto**
- ¿Cómo gestionar situaciones de crisis de reputación específicas del ciclo de producto: lanzamiento fallido, bug crítico que afecta a muchos usuarios, brecha de seguridad, cambio de precios impopular, eliminación de una feature muy utilizada?
- Diseña un protocolo de respuesta ante crisis de reputación de producto con los roles, los pasos y los templates de comunicación.
- ¿Cómo comunicar los cambios impopulares (subidas de precio, cambios de interfaz) de manera que minimice el impacto en la reputación?
- ¿Cómo gestionar la presencia del CEO o del equipo de producto en las respuestas públicas durante una crisis?

**5. Programa de embajadores y construcción de comunidad**
- ¿Cómo identificar y cultivar a los usuarios más fieles para convertirlos en embajadores activos de la reputación del producto?
- ¿Cómo construir una comunidad de usuarios (foro, grupo de Slack, comunidad de Discord) que sea un activo de reputación?
- ¿Cómo usar los casos de éxito y testimoniales de clientes como herramientas de construcción de reputación?

**6. Métricas de reputación del producto y su impacto en el negocio**
- ¿Cómo demostrar a la dirección el impacto financiero de la reputación del producto: correlación entre rating y conversión, entre NPS y renovación, entre menciones negativas y churn?
- ¿Cómo establecer OKRs de reputación que sean medibles y accionables para el equipo de producto?

**Formato de respuesta:**
Organiza la respuesta en las 6 secciones con recomendaciones concretas, frameworks, plantillas de crisis y estrategias de posicionamiento. Incluye ejemplos de comunicaciones de crisis bien ejecutadas y un modelo de dashboard de reputación. Cierra con un plan de 90 días para construir un sistema maduro de gestión de reputación de producto.

Antes de responder, pregúntame sobre mi producto, el mercado que sirvo, el estado actual de la reputación online y cuáles son los principales problemas de reputación que enfrento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar sistemáticamente la reputación de un producto digital convirtiendo el feedback en ventaja competitiva',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],

            // 6 - RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Employer branding y gestión de reputación como empleador en Glassdoor y redes',
                'description'      => 'Diseña una estrategia de employer branding que construya una reputación positiva como empleador en plataformas como Glassdoor, LinkedIn y Jobteaser. Aprende a gestionar las reseñas de empleados, a comunicar la cultura corporativa y a convertir a los empleados en embajadores de la marca empleadora.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en employer branding y reputación como empleador con experiencia diseñando estrategias para empresas de distintos sectores y tamaños. Has transformado la percepción de empresas con problemas de reputación como empleador y has construido marcas empleadoras que atraen talento de manera orgánica y reducen el coste de adquisición de candidatos.

Necesito desarrollar una estrategia de gestión de reputación como empleador para mejorar nuestra capacidad de atraer y retener talento.

**Marco completo de employer branding y reputación como empleador:**

**1. Auditoría de reputación como empleador**
- ¿Cómo auditar la reputación actual como empleador: qué dicen los empleados actuales y ex-empleados en Glassdoor, LinkedIn, Indeed, Infojobs, foros del sector?
- ¿Cómo analizar las reseñas de empleados para identificar los patrones recurrentes de crítica y los puntos de orgullo más mencionados?
- ¿Cómo comparar nuestra reputación como empleador con la de los competidores directos en la guerra por el talento?
- Proporciona un framework de auditoría de employer brand que incluya fuentes online y fuentes internas (encuestas de clima, entrevistas de salida).
- ¿Cuál es la brecha entre cómo nos percibimos como empleador y cómo nos percibe el mercado de talento?

**2. Gestión de reseñas en Glassdoor e Indeed**
- ¿Cómo responder a las reseñas negativas en Glassdoor de manera que sea constructiva y proteja la imagen ante candidatos potenciales?
- Proporciona un framework de respuesta a reseñas: reconocer la perspectiva del empleado, agradecer el feedback, contextualizar si es necesario, explicar las mejoras implementadas, invitar al diálogo.
- ¿Cómo responder a las reseñas positivas para reforzar la cultura y demostrar que escuchamos?
- ¿Cuándo no responder a una reseña de Glassdoor y por qué?
- ¿Cómo aumentar el volumen de reseñas auténticas para que sean más representativas de la experiencia real del empleado?

**3. Construcción de la propuesta de valor como empleador (EVP)**
- ¿Cómo desarrollar una Employee Value Proposition (EVP) auténtica y diferenciadora basada en la experiencia real de los empleados?
- ¿Cuáles son los componentes de una EVP sólida: compensación, desarrollo profesional, cultura, impacto, flexibilidad, beneficios?
- ¿Cómo validar la EVP con empleados actuales para asegurar que refleja la realidad y no solo los deseos de la dirección?
- Proporciona una estructura de EVP con los elementos esenciales y cómo comunicarla en distintos canales.

**4. Programa de embajadores de marca empleadora**
- ¿Cómo identificar y cultivar a los empleados que más auténticamente pueden representar la cultura de la empresa en redes sociales?
- ¿Cómo diseñar un programa de employee advocacy que sea voluntario, auténtico y efectivo?
- ¿Qué tipo de contenido pueden compartir los empleados en LinkedIn y otras redes que construya reputación como empleador sin volverse corporativo o artificial?
- ¿Cómo usar las historias reales de empleados como activos de employer branding?

**5. Gestión de crisis de reputación como empleador**
- ¿Cómo gestionar situaciones que dañan la reputación como empleador: despidos masivos, denuncias en medios, viralización de un conflicto laboral, acusaciones de discriminación?
- Diseña un protocolo de respuesta ante crisis de employer brand con los pasos desde la detección hasta la gestión post-crisis.
- ¿Cómo comunicar internamente antes de hacerlo externamente para que los empleados no se enteren de las noticias difíciles por los medios?

**6. Métricas de employer brand y ROI**
- ¿Qué métricas demuestran el impacto de la inversión en employer branding: coste de contratación, tiempo de cobertura de vacantes, tasa de aceptación de ofertas, rating en Glassdoor, NPS de empleados?
- ¿Cómo construir un informe de employer brand para la dirección que demuestre el ROI?

**Formato de respuesta:**
Organiza la respuesta en las 6 secciones con recomendaciones concretas, frameworks de EVP, plantillas de respuesta a reseñas y estrategias de employee advocacy. Incluye ejemplos de respuestas bien ejecutadas en Glassdoor. Cierra con un plan de 12 meses para transformar la reputación como empleador.

Antes de responder, pregúntame sobre el sector, el tamaño de la empresa, el rating actual en Glassdoor y cuáles son los principales problemas de reputación que afectan a la atracción de talento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir y gestionar la reputación como empleador para atraer talento de manera orgánica',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],

            // 7 - Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Reputación financiera corporativa: gestión de la confianza con inversores y mercados',
                'description'      => 'Aprende a construir y proteger la reputación financiera de una empresa ante inversores, analistas, prestamistas y el mercado en general. Desde la comunicación de resultados hasta la gestión de rumores y la transparencia como herramienta de credibilidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en relaciones con inversores y comunicación financiera corporativa con experiencia trabajando con empresas cotizadas y no cotizadas en distintas industrias. Has gestionado la reputación financiera durante períodos de crisis, reestructuraciones y cambios de liderazgo, y entiendes cómo la percepción financiera afecta al coste de capital, a la capacidad de financiación y al valor de la empresa.

Necesito una estrategia para construir y proteger la reputación financiera de mi empresa ante los mercados y los stakeholders financieros.

**Marco de gestión de reputación financiera:**

**1. Diagnóstico de reputación financiera actual**
- ¿Cómo evaluar la reputación financiera actual de mi empresa: qué dicen los analistas, los inversores y los medios financieros sobre nuestra solidez y credibilidad?
- ¿Cuáles son las fuentes de información que los inversores y prestamistas usan para formar su opinión sobre una empresa: estados financieros, comunicados de prensa, cobertura mediática, calificaciones crediticias, comentarios en foros de inversión?
- ¿Cómo identificar las percepciones erróneas o negativas sobre la salud financiera de mi empresa y su origen?
- Proporciona un framework de auditoría de reputación financiera con las dimensiones más importantes: solvencia percibida, transparencia, gestión del equipo directivo, historial de cumplimiento de proyecciones.

**2. Estrategia de comunicación financiera que construye confianza**
- ¿Cuáles son los principios de la comunicación financiera que construye reputación a largo plazo: consistencia, transparencia, materialidad, proactividad?
- ¿Cómo diseñar la comunicación de resultados trimestrales o anuales para maximizar la credibilidad incluso en períodos de bajo rendimiento?
- ¿Cómo comunicar proyecciones y guidance financiero sin prometer en exceso y dañar la credibilidad cuando no se cumplen?
- Proporciona una estructura de comunicado de resultados que equilibre los hechos financieros con la narrativa estratégica.

**3. Gestión de la reputación ante noticias financieras adversas**
- ¿Cómo comunicar resultados por debajo de las expectativas sin destruir la confianza de los inversores?
- ¿Cómo gestionar la reputación ante situaciones de crisis financiera: necesidad de financiación urgente, covenant breach, retraso en el pago a proveedores, downgrade de calificación crediticia?
- Proporciona un protocolo de comunicación de crisis financiera con los pasos, los mensajes clave y los públicos prioritarios.
- ¿Cómo gestionar los rumores financieros (fusión, adquisición, dificultades de liquidez) que circulan sin confirmación oficial?

**4. Relaciones con inversores y analistas**
- ¿Cómo construir relaciones de confianza a largo plazo con los inversores institucionales clave?
- ¿Cómo gestionar las expectativas de los analistas para evitar sorpresas negativas que dañen la reputación?
- ¿Qué cadencia y formato de comunicación con inversores y analistas construye mejor la reputación de transparencia y gestión rigurosa?
- ¿Cómo preparar a los directivos para las preguntas difíciles en earnings calls y reuniones con inversores?

**5. Reputación financiera en medios y plataformas digitales**
- ¿Cómo gestionar la presencia en medios financieros: Bloomberg, Reuters, Financial Times, medios financieros nacionales?
- ¿Cómo monitorizar y responder a los comentarios negativos en foros de inversión online (Seeking Alpha, foros de bolsa)?
- ¿Cómo usar LinkedIn y otros canales digitales para construir credibilidad financiera a través de contenido de liderazgo del equipo directivo?

**6. Transparencia y reporting como herramienta de reputación**
- ¿Cómo usar la memoria anual, los informes de sostenibilidad y los reportes de gobierno corporativo como herramientas activas de construcción de reputación?
- ¿Qué nivel de transparencia proactiva sobre la situación financiera genera más confianza con cada tipo de stakeholder?

**Formato de respuesta:**
Organiza la respuesta en las 6 secciones con recomendaciones concretas, estructuras de comunicación, protocolos de crisis y estrategias de relación con inversores. Incluye ejemplos de comunicación de crisis financiera bien gestionada. Cierra con un plan de comunicación financiera anual para construir reputación sistemáticamente.

Antes de responder, pregúntame sobre el tipo de empresa (cotizada, privada, startup en fase de crecimiento), el sector y cuáles son los principales riesgos de reputación financiera que enfrenta actualmente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Construir y proteger la reputación financiera ante inversores, analistas y mercados',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],

            // 8 - Legal
            [
                'profession_id'    => 8,
                'title'            => 'Gestión de reputación online para despachos de abogados: reviews y presencia digital',
                'description'      => 'Desarrolla una estrategia de gestión de reputación online para tu despacho de abogados: desde la presencia en directorios jurídicos hasta la gestión de reseñas de clientes y la comunicación de tu expertise a través de contenido jurídico de valor.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de marketing jurídico y gestión de reputación online especializado en despachos de abogados. Has ayudado a despachos de distintos tamaños y especialidades a construir una presencia digital que genera confianza en los clientes potenciales, mejora el posicionamiento en buscadores y protege la reputación ante situaciones de crisis.

Necesito una estrategia de gestión de reputación online para mi despacho de abogados.

**Marco de reputación online para despachos jurídicos:**

**1. Auditoría de presencia y reputación digital del despacho**
- ¿Qué ve un cliente potencial cuando busca el nombre del despacho o de los abogados principales en Google?
- ¿En qué plataformas y directorios debo tener presencia como despacho de abogados: Google My Business, Lex, Abogados.es, LinkedIn, Trustpilot, Avvo (para mercado internacional)?
- ¿Cómo evaluar la calidad y consistencia de los perfiles en cada plataforma?
- ¿Cómo monitorizar las menciones online del despacho: Google Alerts, herramientas de monitorización de redes sociales?
- Proporciona una checklist de auditoría de reputación digital para despachos de abogados.

**2. Estrategia de reseñas para despachos con consideraciones deontológicas**
- ¿Qué restricciones deontológicas existen para la solicitud de testimoniales y reseñas en el sector legal en España?
- ¿Cómo solicitar reseñas de clientes satisfechos de manera que sea ética, conforme con las normas deontológicas y efectiva?
- Proporciona un proceso de solicitud de reseña adaptado a la sensibilidad del sector jurídico: momentos adecuados, canal de comunicación, tipo de feedback que puedo pedir.
- ¿Cómo responder a las reseñas negativas en Google My Business o directorios jurídicos sin violar la confidencialidad abogado-cliente?
- ¿Cómo gestionar una reseña claramente injusta o falsa de un ex-cliente que actúa de mala fe?

**3. Posicionamiento como experto jurídico para construir reputación**
- ¿Cómo usar el content marketing jurídico (artículos en el blog del despacho, publicaciones en LinkedIn, participación en medios) para construir una reputación de expertise?
- ¿Qué tipo de contenido jurídico genera más confianza en los clientes potenciales: análisis de cambios legislativos, casos prácticos anonimizados, guías de derechos del ciudadano, comentarios sobre sentencias relevantes?
- ¿Cómo cumplir con las restricciones deontológicas en la publicidad jurídica mientras se construye visibilidad?
- Proporciona un calendario editorial de contenido jurídico mensual adaptado a la especialidad del despacho.

**4. Gestión de crisis de reputación para abogados**
- ¿Cómo gestionar una crisis de reputación cuando un caso de alto perfil tiene mala prensa?
- ¿Cómo responder a acusaciones públicas de negligencia profesional respetando la confidencialidad y la deontología?
- ¿Cuándo es necesaria la intervención de un asesor de comunicación de crisis y cómo coordinar la respuesta jurídica con la comunicativa?
- Proporciona un protocolo de gestión de crisis de reputación para despachos con los pasos desde la detección hasta el post-crisis.

**5. Directorios jurídicos y rankings como activos de reputación**
- ¿Cuáles son los directorios jurídicos más relevantes para la reputación en España: Chambers, Legal 500, Best Lawyers, Expansión Jurídico?
- ¿Cómo preparar las candidaturas a rankings jurídicos para maximizar las posibilidades de reconocimiento?
- ¿Cómo usar los reconocimientos en rankings como parte de la estrategia de comunicación del despacho?

**6. Reputación digital de los socios como activo del despacho**
- ¿Cómo construir la reputación personal de los socios en LinkedIn y en medios del sector para que refuerce la marca del despacho?
- ¿Cómo coordinar la presencia digital individual de los abogados del despacho para que sea coherente con la identidad de marca del despacho?

**Formato de respuesta:**
Organiza la respuesta en las 6 secciones con recomendaciones concretas, plantillas de comunicación y estrategias adaptadas al sector jurídico. Incluye ejemplos de solicitudes de reseña, respuestas a feedback negativo y calendarios de contenido. Cierra con un plan de 6 meses para construir o mejorar la reputación online del despacho.

Antes de responder, pregúntame sobre la especialidad jurídica del despacho, el mercado objetivo (particulares, empresas, internacionales) y cuáles son los principales problemas de reputación que enfrenta actualmente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir y gestionar la reputación online de un despacho de abogados con sensibilidad deontológica',
                'vote_score'       => 26,
                'resource_type'    => 'prompt',
            ],

            // 9 - Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Reputación online basada en el éxito del cliente: de NPS a casos de éxito públicos',
                'description'      => 'Convierte los resultados de tus clientes en el motor de la reputación online de tu empresa. Aprende a transformar el NPS en contenido de reputación, a desarrollar casos de éxito que impulsen las ventas y a gestionar las plataformas de reviews con el equipo de Customer Success.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Customer Success y marketing de reputación con experiencia en empresas SaaS B2B. Has desarrollado programas que sistemáticamente convierten los buenos resultados de los clientes en activos de reputación: casos de éxito, testimoniales, reseñas en G2 y Capterra, y referencias que aceleran el proceso de ventas.

Necesito una estrategia para usar el éxito de nuestros clientes como motor de la reputación online de la empresa.

**Marco de reputación basada en Customer Success:**

**1. Convertir el NPS y el feedback en inteligencia de reputación**
- ¿Cómo analizar los resultados del NPS para identificar a los promotores que pueden ser fuente de reputación activa?
- ¿Qué preguntas de seguimiento debo hacer a los detractores del NPS para entender el problema y convertir la situación en una oportunidad de mejora de reputación?
- ¿Cómo usar el feedback de las encuestas de satisfacción para identificar los puntos de valor más percibidos por los clientes y enfatizarlos en la comunicación de reputación?
- Proporciona un flujo de trabajo para transformar los resultados del NPS en acciones concretas de gestión de reputación.
- ¿Cómo crear un ciclo virtuoso donde la mejora del producto impulsada por el feedback mejora el NPS y el NPS mejora la reputación?

**2. Programa sistemático de generación de reseñas**
- ¿Cómo diseñar un programa de generación de reseñas en G2, Capterra y Google que sea sistemático, ético y eficaz?
- ¿Cuál es el rol del CSM en la solicitud de reseñas y cómo hacerlo de manera natural dentro de la relación con el cliente?
- Proporciona un script de solicitud de reseña para que los CSMs lo usen en conversaciones con clientes: cuándo introducirlo, cómo frasearlo, cómo hacer seguimiento.
- ¿Cómo responder desde el equipo de Customer Success a las reseñas (positivas y negativas) en plataformas de reviews?
- ¿Cómo usar las reseñas obtenidas activamente en el proceso de ventas y en las conversaciones de renovación?

**3. Desarrollo de casos de éxito de clientes**
- ¿Cómo identificar qué clientes tienen historias de éxito que merezcan convertirse en casos de estudio publicados?
- Proporciona un proceso de desarrollo de caso de éxito desde la identificación del cliente hasta la publicación: propuesta al cliente, entrevista, redacción, revisión y aprobación, distribución.
- ¿Cuál es la estructura de un caso de éxito que sea útil como herramienta de ventas: problema, solución, resultados cuantificados, cita del cliente?
- ¿Cómo obtener el permiso del cliente para publicar métricas de negocio sin que se sientan expuestos?
- ¿Cómo adaptar el mismo caso de éxito para diferentes formatos: texto largo, one-pager, video testimonial, infografía?

**4. Gestión de referencias activas**
- ¿Cómo construir y gestionar un programa de referencias de clientes que el equipo de ventas pueda usar en el proceso comercial?
- ¿Cómo coordinar entre el equipo de CS y el de ventas para que las referencias se activen en el momento más estratégico?
- ¿Cómo compensar o reconocer a los clientes que participan activamente como referencias sin que parezca una compra de testimoniales?

**5. Gestión de la reputación cuando el cliente tiene una mala experiencia**
- ¿Cuál es el rol del CSM cuando un cliente expresa su insatisfacción públicamente en redes sociales o plataformas de reviews?
- ¿Cómo coordinar la respuesta pública con la resolución privada del problema para que el cliente actualice o añada contexto positivo a su reseña?
- Proporciona un protocolo de escalación y respuesta ante reseñas negativas de clientes que involucre al CSM, al equipo de soporte y a la dirección.

**6. Métricas de impacto de la reputación basada en CS**
- ¿Cómo medir el impacto de las reseñas, casos de éxito y referencias en las métricas de ventas: tasa de conversión de cuentas con reseñas vs. sin ellas, influencia de los casos de éxito en el ciclo de ventas?
- ¿Cómo construir un informe mensual de reputación basada en CS para la dirección?

**Formato de respuesta:**
Organiza la respuesta en las 6 secciones con recomendaciones concretas, scripts de conversación, plantillas de solicitud y estructuras de casos de éxito. Incluye un proceso de desarrollo de caso de éxito paso a paso. Cierra con un plan de 90 días para lanzar un programa de reputación basada en Customer Success.

Antes de responder, pregúntame sobre mi producto, el perfil de clientes, el NPS actual y si ya tenemos algún proceso de reseñas o casos de éxito en marcha.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Transformar los resultados de los clientes en activos de reputación: reseñas, casos de éxito y referencias',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],

            // 10 - Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Construcción y protección de reputación online para freelancers: de perfil a autoridad',
                'description'      => 'Desarrolla una estrategia integral para construir tu reputación online como profesional independiente: desde los perfiles en plataformas de freelancing hasta la gestión de reseñas de clientes y la construcción de autoridad en tu nicho que te permita cobrar más y atraer mejores proyectos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de negocio especializado en el crecimiento de carreras freelance con énfasis en la construcción de marca personal y reputación online. Has asesorado a cientos de profesionales independientes a transformar su presencia digital en un activo que genera confianza, atrae clientes de mayor calidad y justifica tarifas más altas.

Necesito una estrategia completa para construir y proteger mi reputación online como freelancer.

**Marco completo de reputación online para freelancers:**

**1. Auditoría de presencia y reputación online actual**
- ¿Qué ve un cliente potencial cuando busca mi nombre o mi especialidad en Google?
- ¿Cuál es la salud de mis perfiles en las plataformas más importantes para mi tipo de trabajo: Upwork, Fiverr, Toptal, Workana, LinkedIn, Behance/Dribbble (para diseñadores), GitHub (para desarrolladores)?
- ¿Cuántas reseñas tengo, cuál es mi rating promedio y qué dicen las reseñas sobre mis puntos fuertes y mis áreas de mejora?
- ¿Qué brecha existe entre la reputación que tengo y la que necesito para cobrar las tarifas que quiero?
- Proporciona una checklist de auditoría de reputación online para freelancers con los elementos más críticos en cada plataforma.

**2. Optimización de perfiles en plataformas de freelancing**
- ¿Cómo estructurar el perfil de Upwork o Fiverr para maximizar la tasa de conversión de visitas a consultas?
- ¿Cuáles son los elementos más importantes de un perfil de freelancer que genera confianza: foto profesional, titular específico y orientado al cliente, resumen de resultados, portfolio selectivo, reseñas destacadas?
- ¿Cómo redactar la descripción del perfil para posicionarme como especialista en un nicho (que cobra más) en lugar de generalista (que compite en precio)?
- ¿Cómo optimizar mi perfil para el algoritmo de búsqueda de las plataformas de freelancing?
- Proporciona una estructura de perfil de freelancer optimizado para Upwork con todos los elementos clave.

**3. Generación sistemática de reseñas de clientes**
- ¿Cómo solicitar reseñas a todos los clientes satisfechos de manera sistemática sin que sea incómodo?
- ¿Cuál es el mejor momento del proyecto para pedir una reseña: al entregar el trabajo, a las 2 semanas post-entrega, cuando el cliente menciona resultados positivos?
- Proporciona scripts de solicitud de reseña para diferentes situaciones: proyecto completado, cliente que ha dado feedback verbal muy positivo, cliente de larga data que nunca ha dejado reseña.
- ¿Cómo responder a las reseñas positivas de manera que refuerce la relación y sea útil para futuros clientes?
- ¿Cómo gestionar una reseña negativa en una plataforma de freelancing: cuándo y cómo responder, cuándo no responder?

**4. Construcción de autoridad en nicho**
- ¿Cómo pasar de ser un freelancer anónimo a ser una referencia reconocida en mi nicho de especialización?
- ¿Qué tipo de contenido construye autoridad más rápidamente para un freelancer: artículos de LinkedIn, newsletter, canal de YouTube, podcast, presencia en comunidades del sector?
- ¿Cómo participar en comunidades online (grupos de LinkedIn, Slack, Discord, Reddit) de manera que construya reputación sin parecer que solo busco clientes?
- ¿Cómo usar los proyectos completados para generar contenido de portfolio que demuestre resultados concretos más allá del trabajo estético?

**5. Gestión de situaciones que amenazan la reputación**
- ¿Cómo gestionar un cliente insatisfecho que amenaza con una reseña negativa para presionarte a hacer más trabajo sin cobrar?
- ¿Cómo responder cuando un cliente publica en redes sociales una crítica sobre el trabajo o el trato recibido?
- ¿Cómo proteger tu trabajo de clientes que lo usan sin pagar o que lo atribuyen a otros?
- ¿Cómo recuperarte de una reseña negativa injusta y asegurar que no define tu perfil?

**6. De la reputación en plataformas a la independencia de plataforma**
- ¿Cómo usar la reputación construida en plataformas de freelancing para migrar progresivamente a clientes directos que pagan más y generan más libertad?
- ¿Cómo construir una presencia fuera de las plataformas (web propia, LinkedIn, email list) que genere clientes sin depender del algoritmo?
- ¿Cómo usar los testimoniales de proyectos en plataformas en tu web personal y en materiales de venta directa?

**Formato de respuesta:**
Organiza la respuesta en las 6 secciones con recomendaciones concretas, scripts de comunicación, estructuras de perfil y estrategias de contenido. Incluye ejemplos de perfiles bien optimizados y plantillas de solicitud de reseña. Cierra con un plan de 90 días para transformar tu reputación online y acceder a proyectos de mayor calidad.

Antes de responder, pregúntame sobre mi especialidad, las plataformas donde tengo presencia actualmente, el número de reseñas que tengo y cuál es mi mayor dificultad para atraer clientes de mayor calidad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir una reputación online sólida que permita atraer mejores clientes y cobrar tarifas más altas como freelancer',
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
