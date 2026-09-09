<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills286Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'SEO content strategy: el contenido que posiciona y convierte al mismo tiempo',
                'description'      => 'Diseña una estrategia de contenidos que optimice el posicionamiento orgánico y el embudo de conversión de forma simultánea, alineando intención de búsqueda con objetivos de negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de contenidos SEO con más de diez años de experiencia ayudando a marcas B2B y B2C a construir tráfico orgánico sostenible y convertirlo en ingresos medibles.

Voy a compartirte el contexto de mi negocio y necesito que me ayudes a desarrollar una estrategia de contenidos SEO completa que no solo posicione en buscadores, sino que también mueva a los usuarios a través del embudo de conversión.

Mi negocio es: [describe tu empresa, producto o servicio, mercado objetivo y ticket medio]
Mi situación actual de SEO es: [tráfico mensual aproximado, número de keywords posicionadas, dominio authority si lo conoces]
Mi objetivo principal es: [visibilidad, leads, ventas directas, reconocimiento de marca]

Con este contexto, necesito que me guíes en:

**1. Auditoría de intención de búsqueda**
Explícame cómo clasificar las keywords de mi sector por intención (informacional, navegacional, transaccional, comercial) y qué tipo de contenido sirve mejor a cada una. Dame un framework para mapear las búsquedas de mi audiencia con cada etapa del funnel: conciencia, consideración y decisión.

**2. Arquitectura de contenidos y clústers temáticos**
Muéstrame cómo estructurar pillar pages y topic clusters para que Google entienda mi autoridad temática. Explica qué criterios uso para elegir el tema pilar, qué páginas de soporte debo crear y cómo debe ser el enlazado interno para maximizar la transferencia de autoridad.

**3. Briefing de contenido orientado a la conversión**
Dame una plantilla de briefing para mis redactores o para mí mismo que incluya: keyword principal y secundarias, intención de búsqueda, longitud estimada, estructura de encabezados (H1, H2, H3), llamadas a la acción recomendadas, elementos de prueba social que debo incluir y formato de contenido (guía, listicle, comparativa, caso de uso).

**4. Optimización on-page que combina SEO y UX**
Indica los elementos críticos de optimización on-page que no solo mejoran el ranking sino que reducen la tasa de rebote y aumentan el tiempo en página: estructura de encabezados, densidad de keywords, uso de negritas, longitud de párrafos, imágenes con alt text descriptivo, videos incrustados, tablas de contenido, FAQ al final del artículo.

**5. Métricas de seguimiento y ciclo de mejora continua**
Dime qué KPIs debo monitorizar mensualmente para saber si mi estrategia de contenidos SEO funciona: posiciones medias, CTR en Search Console, tráfico orgánico, páginas por sesión, tasa de conversión desde orgánico, tiempo medio hasta la primera conversión asistida. Explícame cómo interpretar estos datos para priorizar actualizaciones y nuevas piezas de contenido.

**6. Calendario editorial SEO**
Ayúdame a construir un calendario editorial de 90 días basado en los criterios anteriores. Indica cuántos artículos nuevos, cuántas actualizaciones de contenido existente y qué ratio entre contenido de tráfico (informacional) y contenido de conversión (transaccional y comercial) debo mantener según mi etapa de madurez SEO.

Presenta toda la estrategia de forma estructurada, con ejemplos concretos aplicables a mi sector, y señala los tres errores más comunes que cometen los equipos de marketing al intentar integrar SEO y conversión en la misma pieza de contenido.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'         => 'Estrategia de contenidos que posiciona en Google y convierte visitantes en clientes',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Technical SEO para developers: lo que el backend debe saber sobre posicionamiento',
                'description'      => 'Domina los aspectos técnicos del SEO que dependen del equipo de desarrollo: crawlability, indexación, rendimiento y estructura de datos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de SEO técnico especializado en trabajar junto a equipos de desarrollo para implementar mejoras de posicionamiento a nivel de código, arquitectura y servidor.

Soy desarrollador backend/fullstack y quiero entender en profundidad qué decisiones técnicas afectan al SEO de una aplicación web. Mi objetivo es ser el puente entre el equipo de marketing y la infraestructura técnica.

Mi stack tecnológico es: [describe tu stack: lenguaje, framework, tipo de rendering —SSR, SPA, SSG—, CDN, servidor]
El sitio tiene aproximadamente: [número de páginas indexables, tráfico mensual estimado]
Los problemas actuales que sospecho son: [lentitud, páginas duplicadas, errores de crawl, falta de datos estructurados]

Con este contexto, necesito que me expliques:

**1. Crawlability e indexación controlada**
Detalla cómo Google rastrea un sitio y qué controles técnicos tengo disponibles: robots.txt, directivas noindex/nofollow, etiquetas canonical, sitemaps XML con prioridades y frecuencias. Explícame cuándo usar cada uno y qué errores comunes de configuración bloquean páginas importantes o desperdician crawl budget.

**2. Rendering y SEO: SSR vs SPA vs SSG**
Explícame en detalle cómo Google indexa aplicaciones JavaScript: cuándo renderiza con Googlebot, qué diferencia hay entre el indexado de una SPA pura, una app con SSR (Next.js, Nuxt) o un sitio estático. Dime qué debo hacer si mi aplicación actual es una SPA y quiero mejorar la indexación sin reescribir todo el frontend.

**3. Core Web Vitals desde el backend**
Describe cada métrica CWV (LCP, INP, CLS) desde la perspectiva de un developer de backend y servidor: cómo el TTFB afecta al LCP, cómo la gestión de imágenes desde el servidor o CDN impacta en el CLS, qué optimizaciones de caché, compresión y HTTP/2 o HTTP/3 mejoran directamente los scores en PageSpeed Insights.

**4. Datos estructurados (Schema.org) y por qué el desarrollador es el responsable real**
Explícame los tipos de schema más relevantes (Article, Product, FAQ, BreadcrumbList, Organization, LocalBusiness) y cómo implementarlos correctamente en JSON-LD. Dime qué errores de implementación invalidan los rich results y cómo validarlos programáticamente antes de un deploy.

**5. Arquitectura de URLs y manejo de redirects**
Detalla las mejores prácticas para estructuras de URLs amigables con el SEO, cómo gestionar redirects 301 y 302, qué sucede con la autoridad de enlace en cada tipo de redirect, cómo implementar correctamente la paginación con rel=next/prev o parámetros canónicos, y cómo manejar parámetros de URL de campañas sin crear contenido duplicado.

**6. Monitorización técnica automatizada**
Dime qué herramientas y scripts puedo incorporar en el pipeline de CI/CD para detectar regresiones de SEO técnico antes de que lleguen a producción: validación de metadatos, comprobación de canonicals, tests de rendimiento con Lighthouse CLI, verificación de sitemaps y alertas de errores de cobertura en Search Console.

Incluye ejemplos de código concretos donde sea relevante y señala los cinco errores de implementación técnica que más impacto negativo tienen en el posicionamiento orgánico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 35,
                'use_case'         => 'Implementar mejoras de SEO técnico desde el equipo de desarrollo',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Visual SEO: imágenes, Core Web Vitals y la UX que Google premia',
                'description'      => 'Aprende a optimizar el trabajo visual para el posicionamiento: imágenes, tipografía, layout y experiencia de usuario que Google considera señales de calidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en UX y SEO visual que ayuda a diseñadores a entender cómo sus decisiones de diseño afectan directamente al posicionamiento en buscadores y a la experiencia del usuario que Google mide y premia.

Soy diseñador UI/UX y quiero entender qué aspectos de mi trabajo tienen impacto en el SEO para poder colaborar mejor con los equipos de marketing y desarrollo cuando se habla de posicionamiento orgánico.

El tipo de proyectos en los que trabajo es: [e-commerce, producto SaaS, portal de contenidos, landing pages corporativas]
Las herramientas que uso son: [Figma, Adobe XD, Webflow, etc.]
Mi mayor duda actual sobre SEO visual es: [velocidad de carga de imágenes, diseño responsive, accesibilidad, CLS]

Necesito que me expliques en detalle:

**1. Optimización de imágenes sin perder calidad visual**
Explícame los formatos modernos (WebP, AVIF) y cuándo usarlos. Detalla las dimensiones y resoluciones recomendadas para los distintos breakpoints, el uso de srcset y sizes en HTML, la importancia del lazy loading y qué imágenes deben estar above the fold con carga prioritaria. Dime cómo escribir alt text que sea descriptivo para accesibilidad y también relevante para el SEO sin caer en keyword stuffing.

**2. Cumulative Layout Shift (CLS) y diseño estable**
Explícame qué causa el CLS desde la perspectiva del diseño: elementos sin dimensiones definidas, fuentes web que cambian el layout al cargar (FOUT/FOIT), banners dinámicos, anuncios sin espacio reservado, embeds de redes sociales. Dime qué debo especificar en mis entregables de diseño (aspect-ratios, dimensiones fijas para contenedores de imagen, font-display) para que el equipo de desarrollo implemente páginas sin CLS.

**3. Tipografía web y rendimiento**
Detalla cómo la elección de fuentes afecta al rendimiento: número de variantes a cargar, self-hosting vs Google Fonts, font subsetting, preload de fuentes críticas. Explícame cómo diseñar una jerarquía tipográfica que también sirva como señal de estructura semántica para Google (H1 único, H2 para secciones principales, H3 para subsecciones).

**4. Diseño responsive y Mobile-First Indexing**
Explícame qué significa que Google indexe el sitio desde la versión móvil y qué implica para el diseño: que el contenido visible en mobile debe ser equivalente al de desktop, que los menús hamburguesa ocultan texto pero Google lo lee, que los botones deben cumplir el tamaño mínimo de toque de 48x48px. Dame una checklist de diseño responsive enfocada en SEO.

**5. Señales de experiencia de usuario (Page Experience)**
Explica cómo el diseño influye en métricas de comportamiento que Google considera señales de calidad: bounce rate, scroll depth, tiempo en página, número de páginas por sesión. Dime qué patrones de diseño aumentan el engagement (tabla de contenido clickable, imágenes ilustrativas cada 300 palabras, CTAs contextuales) y cuáles lo perjudican (interstitials agresivos, popups inmediatos, contenido por encima del fold demasiado escaso).

**6. Accesibilidad como SEO**
Detalla la intersección entre accesibilidad web (WCAG 2.1) y SEO: contraste de color mínimo, texto alternativo en imágenes, orden lógico del DOM, uso correcto de ARIA labels, navegación por teclado. Explícame por qué mejorar la accesibilidad también mejora el posicionamiento y cómo incorporo estas consideraciones en el proceso de diseño sin duplicar el trabajo.

Incluye ejemplos visuales descritos en texto y dame un checklist final de los diez puntos de SEO visual que debo revisar antes de entregar cualquier diseño al equipo de desarrollo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'         => 'Diseñar interfaces que cumplan con los criterios de Page Experience de Google',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'SEO para ventas: cómo el posicionamiento orgánico alimenta el pipeline comercial',
                'description'      => 'Entiende cómo el tráfico orgánico genera oportunidades de venta, cómo colaborar con el equipo de marketing SEO y cómo usar el contenido posicionado en el proceso comercial.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de ventas con experiencia en modelos inbound y en el uso de contenido SEO como herramienta de prospección, calificación y cierre.

Soy comercial o responsable de ventas y quiero entender cómo el SEO genera oportunidades reales para mi pipeline y cómo puedo aprovechar el contenido que ya está posicionado en Google para mejorar mis resultados de ventas.

Mi sector es: [B2B SaaS, servicios profesionales, e-commerce B2C, etc.]
Mi ciclo de venta típico es: [número de días y número de interacciones antes del cierre]
Mi mayor reto actual es: [prospección en frío, calificación de leads, diferenciación de competidores, cierre]

Necesito que me expliques:

**1. Cómo el SEO construye el pipeline sin esfuerzo comercial directo**
Explícame el viaje del comprador desde que hace una búsqueda en Google hasta que se convierte en un lead cualificado. Dime qué tipo de búsquedas realizan los compradores en cada etapa (informacional al principio, comparativa en el medio, transaccional al final) y cómo el contenido posicionado los captura y los cualifica antes de que un comercial intervenga.

**2. Usar el contenido SEO en el proceso de venta**
Dame estrategias concretas para incorporar artículos, guías y comparativas posicionadas en mi proceso comercial: cómo enviar un artículo relevante durante el nurturing para avanzar la conversación, cómo usar el contenido como material de apoyo en demos y propuestas, cómo compartir casos de uso posicionados para reducir objeciones de precio o diferenciación.

**3. Prospección inbound y señales de intención de compra**
Explícame cómo identificar leads de alta intención entre los visitantes del sitio web: qué páginas visitas indican que alguien está cerca de comprar (pricing, comparativas, páginas de producto), cómo herramientas de intent data o de tracking de visitas web pueden alertarme de que una empresa ha visitado nuestro sitio, y cómo priorizar el seguimiento en base a esas señales.

**4. Colaboración entre ventas y el equipo de contenidos SEO**
Dime cómo puedo aportar valor al equipo de marketing para mejorar el contenido que más ayuda a ventas: cómo trasladar las objeciones más comunes que escucho en las demos para que se conviertan en artículos SEO, cómo comunicar qué páginas de la competencia están atacando en las conversaciones comerciales, qué preguntas frecuentes del cliente deberían convertirse en contenido posicionado.

**5. Métricas que unen SEO con resultados de ventas**
Explícame cómo medir el impacto del canal orgánico en el pipeline: ratio de leads orgánicos vs leads de otros canales, tasa de conversión de lead orgánico a oportunidad, tiempo de ciclo de venta de leads inbound vs outbound, MRR o ingresos atribuidos al canal orgánico. Dime cómo presentar estos datos a la dirección para justificar la inversión en contenidos.

**6. Social selling y contenido SEO ampliado**
Dime cómo puedo aprovechar el contenido que ya está posicionado en Google para construir mi marca personal en LinkedIn y otras redes: cómo resumir artículos técnicos en posts de valor, cómo usar los rankings de Google como prueba de autoridad ("nuestro artículo sobre X aparece en posición 1"), cómo combinar el inbound orgánico con el outreach personalizado para maximizar la tasa de respuesta.

Dame un plan de acción de 30 días para que un comercial empiece a integrar el canal SEO en su proceso de ventas sin depender de que el equipo de marketing cambie nada en su estrategia actual.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 20,
                'use_case'         => 'Aprovechar el tráfico orgánico para generar y calificar oportunidades de venta',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'SEO como canal de producto: integrar el orgánico en la estrategia de adquisición',
                'description'      => 'Define cómo el SEO encaja en la estrategia de crecimiento del producto, qué métricas importan y cómo priorizar iniciativas de posicionamiento junto a otros canales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Manager con experiencia en estrategias de crecimiento orgánico y en la integración del canal SEO dentro del modelo de adquisición de producto.

Soy PM y necesito entender cómo incorporar el SEO como canal de adquisición dentro de la estrategia de crecimiento del producto, cómo priorizar iniciativas SEO frente a otras y cómo medir su impacto real en el negocio.

Mi producto es: [describe el producto, el modelo de negocio y la etapa actual —early stage, growth, scale—]
El canal SEO actualmente representa: [porcentaje del tráfico y de los registros o conversiones]
Mi stack de crecimiento incluye: [paid, social, email, referral, PLG, etc.]

Necesito que me ayudes a entender:

**1. SEO en el modelo de adquisición: dónde encaja y cuándo priorizarlo**
Explícame cuándo tiene sentido apostar por el SEO como canal principal de adquisición versus cuándo es un canal secundario. Dime qué características del producto, del mercado y del estado de madurez de la empresa determinan si el orgánico debe ser una prioridad en el roadmap o un complemento. Explica la diferencia entre SEO de contenidos (blog, guías), SEO programático (páginas generadas a escala) y SEO transaccional (páginas de producto, landing pages de categoría).

**2. SEO programático para productos con grandes catálogos o casos de uso**
Explícame qué es el SEO programático y cuándo tiene sentido para un producto SaaS o marketplace: generación de miles de páginas a partir de datos estructurados (ciudades, integraciones, casos de uso, comparativas). Dime cómo evaluar si mi producto tiene el potencial para una estrategia programática, cuáles son los riesgos (contenido thin, penalizaciones) y cómo ejecutarlo bien.

**3. Métricas SEO para un PM: más allá del tráfico**
Define qué KPIs de SEO son relevantes para un PM orientado a producto y negocio: tráfico orgánico segmentado por intención (informacional vs transaccional), tasa de activación de usuarios que llegan desde orgánico, LTV del usuario adquirido por SEO vs otros canales, coste por adquisición efectivo del canal orgánico incluyendo el coste del equipo de contenidos o del desarrollo de páginas programáticas.

**4. Priorización de iniciativas SEO en el roadmap**
Dame un framework para evaluar y priorizar iniciativas SEO junto a otras apuestas del roadmap: cómo estimar el impacto potencial de una iniciativa SEO (volumen de búsqueda * tasa de conversión estimada * valor medio del usuario), cómo asignar esfuerzo (engineering time + content time), cuándo bloquear otros proyectos para ejecutar mejoras técnicas de SEO que no podemos diferir.

**5. Construir la función SEO dentro de un equipo de producto**
Explícame cómo organizan los equipos de crecimiento de productos exitosos la función SEO: cuándo tiene sentido contratar un SEO in-house, cuándo es suficiente con un consultor externo, qué debe saber el PM para supervisar la ejecución, qué herramientas necesita el equipo (Ahrefs, Semrush, Search Console, Screaming Frog, herramientas de datos estructurados).

**6. Experimentos SEO y ciclo de aprendizaje**
Dime cómo aplicar una mentalidad de experimentación al SEO: cómo lanzar micro-experimentos de contenido para validar demanda antes de invertir en una categoría, cómo medir el impacto de cambios on-page con pruebas controladas (antes/después en grupos de páginas similares), cómo documentar aprendizajes SEO para que el equipo acumule conocimiento a lo largo del tiempo.

Termina con una hoja de ruta de 90 días para un PM que quiere convertir el SEO en un canal de adquisición medible y escalable.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 35,
                'use_case'         => 'Incorporar el SEO como canal de adquisición en la estrategia de producto',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'SEO para employer branding: posicionar la marca empleadora en búsquedas',
                'description'      => 'Aplica estrategias SEO para que tu empresa aparezca en las búsquedas de candidatos talentosos, reduciendo la dependencia de portales de empleo de pago.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en employer branding y SEO de recursos humanos que ayuda a empresas a posicionar su marca empleadora en los resultados de búsqueda para atraer candidatos de calidad de forma orgánica.

Trabajo en el área de talento o RRHH y quiero que nuestra empresa aparezca de forma destacada cuando los profesionales que nos interesan buscan empleo, información sobre nuestra cultura o noticias sobre la empresa en Google.

Nuestra empresa es: [tamaño, sector, ubicación principal, perfiles que más necesitamos contratar]
Nuestra presencia digital actual es: [página de carreras, LinkedIn, Glassdoor, Kununu, Indeed]
Nuestro mayor reto es: [atraer candidatos técnicos, competir con grandes corporaciones, mejorar la calidad de las candidaturas espontáneas]

Necesito que me expliques:

**1. Qué buscan los candidatos en Google y cómo capturarlos**
Explícame las principales búsquedas que hacen los profesionales cuando consideran cambiar de trabajo: "[empresa] opiniones", "[empresa] cómo es trabajar", "[puesto] + [ciudad] empresas", "mejores empresas para trabajar en [sector]", "cultura empresa [nombre]". Dime qué contenido debo crear para aparecer en cada una de estas búsquedas y cómo posicionar narrativas positivas de la cultura de la empresa.

**2. Optimización de la página de carreras**
Detalla cómo debe estar estructurada y optimizada una página de carreras para SEO: URLs limpias por oferta de empleo, metadatos únicos para cada puesto, datos estructurados JobPosting de Schema.org para rich results en Google Jobs, velocidad de carga, versión mobile, descripción de la cultura, sección de beneficios y testimonios de empleados como contenido indexable.

**3. Contenido de employer branding que posiciona**
Dame una estrategia de contenidos para la sección de blog o recursos de la página de carreras: artículos sobre el día a día de los distintos equipos, guías de entrevistas en nuestra empresa, posts de empleados sobre su experiencia, reports de cultura y satisfacción del equipo. Explícame cómo este contenido genera tráfico orgánico de candidatos pasivos que aún no están buscando activamente pero sí investigando empresas.

**4. Gestión de reputación en buscadores**
Explícame cómo monitorizar y gestionar lo que aparece cuando alguien busca el nombre de nuestra empresa en Google: cómo responder a reseñas negativas en Glassdoor o Kunuden de forma que el propio mensaje de respuesta mejore la percepción, cómo posicionar contenido positivo propio por encima de resultados negativos de terceros, cómo establecer alertas automáticas para menciones de marca.

**5. LinkedIn y su sinergia con el SEO**
Dime cómo el perfil de empresa en LinkedIn contribuye al posicionamiento en Google: qué elementos del perfil de empresa indexa Google, cómo los artículos publicados en LinkedIn pueden posicionarse en buscadores externos, cómo coordinar el contenido de la página de carreras con la comunicación de LinkedIn para crear una narrativa de employer branding coherente y con mayor cobertura orgánica.

**6. Métricas de SEO para employer branding**
Define qué KPIs debo monitorizar para medir el éxito del SEO de employer branding: tráfico orgánico a la página de carreras segmentado por keyword, impresiones y clics en Google Jobs, tasa de candidatura desde el tráfico orgánico vs. portales de pago, coste por candidatura de calidad orgánico vs. portales pagados, ratio de candidaturas espontáneas mes a mes.

Dame un plan de 60 días para lanzar una estrategia de employer branding SEO desde cero en una empresa que actualmente no tiene prácticamente presencia orgánica para búsquedas de empleo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'         => 'Atraer candidatos de calidad mediante posicionamiento orgánico de la marca empleadora',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'ROI del SEO: cómo calcular y comunicar el retorno de la inversión en orgánico',
                'description'      => 'Aprende a cuantificar el valor económico del canal SEO, construir el modelo financiero y presentarlo a la dirección de forma convincente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista financiero especializado en marketing digital que ayuda a equipos de finanzas y dirección a entender, medir y comunicar el retorno de la inversión en SEO y contenidos orgánicos.

Trabajo en finanzas o soy CFO/Director Financiero y necesito entender el valor real del canal SEO para nuestra empresa, cómo calcularlo de forma rigurosa y cómo integrarlo en los modelos de planificación financiera junto a otros canales de marketing.

Nuestra empresa tiene: [volumen de ingresos aproximado, modelo de negocio, canales de marketing activos]
Nuestra inversión en SEO actualmente es: [coste del equipo de contenidos, agencia o freelances, herramientas, horas de desarrollo]
El tráfico orgánico mensual es: [visitas mensuales aproximadas y conversiones atribuidas]

Necesito que me ayudes a construir:

**1. Modelo de valoración del tráfico orgánico**
Explícame los métodos principales para calcular el valor económico del tráfico SEO: el método del coste equivalente en SEM (¿cuánto costaría comprar ese mismo tráfico en Google Ads?), el método de ingresos atribuidos directo (conversiones * valor medio del pedido o cliente), y el método del LTV proyectado para negocios de suscripción. Dame las fórmulas exactas y los datos que necesito para aplicar cada método.

**2. Cálculo del ROI del SEO incluyendo todos los costes**
Detalla todos los costes que debo incluir en el denominador del ROI del SEO para que el cálculo sea honesto: costes de personal (tiempo de redactores, SEO in-house, revisión de dirección), costes de agencia o freelance, herramientas (Semrush, Ahrefs, GSC premium, plataforma de CMS), coste de oportunidad del tiempo de desarrollo invertido en mejoras técnicas, y costes de link building si los hay. Explícame cómo distribuir los costes fijos entre el canal orgánico y el resto de canales cuando son compartidos.

**3. Atribución del canal SEO en modelos multitáctil**
Explícame los modelos de atribución y cuál es el más adecuado para el canal SEO (first touch, last touch, lineal, decay, basado en datos). Dime por qué el SEO suele estar infravalorado en modelos de atribución de último clic y cómo presentar la atribución de primer toque o lineal para mostrar el papel real del orgánico en la generación de pipeline, especialmente en ciclos de venta largos.

**4. Proyección financiera del SEO a 12-36 meses**
Dame un framework para proyectar el crecimiento del canal orgánico y su impacto en ingresos: cómo proyectar el crecimiento del tráfico orgánico basándome en la inversión actual y el histórico, cómo convertir esas proyecciones de tráfico en leads o transacciones, y cómo traducirlas a ingresos proyectados con intervalos de confianza para presentar escenarios conservador, base y optimista a la junta directiva.

**5. Benchmark del canal SEO versus otros canales de marketing**
Explícame cómo comparar el coste por adquisición, el LTV del cliente y el payback period del canal SEO frente a paid search, paid social y outbound. Dime qué ventajas estructurales tiene el orgánico (coste marginal decreciente, activo que se aprecia con el tiempo, no sujeto a inflación de subasta) y cuáles son sus desventajas (latencia hasta resultados, dependencia de cambios de algoritmo) para presentar una visión equilibrada a la dirección.

**6. Dashboard financiero del canal orgánico**
Diseña la estructura de un dashboard mensual para la dirección financiera que muestre el rendimiento del canal SEO desde una perspectiva económica: inversión total del mes, valor del tráfico generado, conversiones y revenue atribuido, CAC del canal, proyección acumulada vs. objetivo anual, y comparativa con el coste equivalente en SEM. Dime qué herramientas conectar (Google Analytics, Search Console, CRM) y cómo automatizar el reporte mensual.

Cierra con las tres preguntas que me hará el CEO o el consejo cuando presente el ROI del SEO y cómo responder a cada una con datos sólidos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 40,
                'use_case'         => 'Construir el modelo financiero del SEO y comunicar su ROI a la dirección',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'SEO para despachos: posicionar servicios jurídicos en búsquedas locales y especializadas',
                'description'      => 'Estrategia SEO específica para abogados y despachos que quieren captar clientes mediante posicionamiento en búsquedas locales y de especialidad jurídica.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de marketing jurídico y SEO local especializado en ayudar a abogados y despachos a posicionarse en Google para captar clientes en su área geográfica y especialidad práctica.

Soy abogado o gestor de marketing de un despacho y quiero desarrollar una estrategia SEO que nos permita aparecer cuando potenciales clientes buscan nuestros servicios en Google, sin incurrir en prácticas que puedan vulnerar las normas deontológicas de nuestra jurisdicción.

El despacho tiene: [número de abogados, especialidades principales: mercantil, laboral, civil, penal, familia, inmobiliario, etc.]
Nuestra ubicación principal y radio de captación es: [ciudad o región]
Nuestra situación digital actual es: [si tenemos web, si estamos en Google Business, qué tráfico tenemos aproximadamente]

Necesito que me expliques:

**1. SEO local para despachos: Google Business y búsquedas geolocalizadas**
Explícame cómo optimizar el perfil de Google Business del despacho: categorías correctas para servicios legales, horarios, descripción con keywords locales, gestión de reseñas (cómo solicitarlas éticamente, cómo responder a negativas), publicación de posts de actualidad jurídica, fotos del despacho y del equipo. Dime también cómo posicionar el despacho en el Local Pack de Google para búsquedas como "abogado laboral en [ciudad]" o "despacho mercantil [barrio/zona]".

**2. Arquitectura de la web jurídica orientada al SEO**
Diseña la estructura de páginas que debe tener la web de un despacho para posicionar cada especialidad de forma independiente: página principal, páginas de práctica por área (una URL por especialidad), páginas de subsecciones (ej: dentro de laboral: despidos, EREs, accidentes laborales), blog jurídico, página del equipo con bios individuales indexables, página de contacto con datos NAP consistentes. Explícame qué debe incluir cada página para posicionarse.

**3. Keyword research para servicios jurídicos**
Dame un framework para identificar las keywords más valiosas para un despacho jurídico: búsquedas de urgencia alta ("abogado para despido improcedente urgente"), búsquedas de comparación ("mejores abogados laboralistas [ciudad]"), búsquedas informacionales que capturan clientes en etapa temprana ("¿cuándo prescriben las deudas?"), búsquedas long-tail ultra-específicas con alta intención de contratar. Explícame cómo evaluar la dificultad de posicionamiento y el volumen de cada tipo.

**4. Contenido jurídico que posiciona y genera confianza**
Explícame cómo construir un blog jurídico que posicione en Google y al mismo tiempo demuestre autoridad y expertise: qué temas tratar (preguntas frecuentes que hace el cliente, cambios legislativos recientes, casos prácticos anonimizados, guías paso a paso de procesos legales comunes), cómo estructurar cada artículo para SEO (metadatos, schema Article, FAQ al final, CTA ético hacia una consulta), y con qué frecuencia publicar para que Google lo considere un recurso actualizado.

**5. Autoridad de dominio y construcción de enlaces en el sector jurídico**
Explícame cómo construir autoridad de dominio de forma ética en el sector legal: publicaciones en revistas jurídicas digitales, colaboraciones con colegios de abogados, menciones en medios locales, directorios especializados de abogados (Abogados.es, Martindale-Hubbell, Lex Mundi), participación como fuente experta en medios de comunicación para obtener backlinks de calidad. Detalla qué prácticas de link building debo evitar porque violan las políticas de Google o las normas deontológicas.

**6. Cumplimiento deontológico en el marketing SEO**
Explícame qué restricciones deontológicas afectan al marketing de servicios jurídicos en España (y en general) y cómo asegurarse de que la estrategia SEO las respeta: prohibición de publicidad engañosa, restricciones en la promesa de resultados, limitaciones en la captación directa de clientes, uso ético de testimonios y reseñas, tratamiento de datos personales de clientes en el sitio web conforme al RGPD.

Entrégame un plan de acción de 90 días para que un despacho mediano sin estrategia SEO actual empiece a captar clientes de forma orgánica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'         => 'Captar clientes para el despacho mediante posicionamiento local y de especialidad en Google',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Help center SEO: documentación que deflecta tickets y aparece en Google',
                'description'      => 'Optimiza tu centro de ayuda para posicionarse en búsquedas de soporte, reducir el volumen de tickets y mejorar la satisfacción del cliente con respuestas de autoservicio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en customer success y SEO de documentación de producto que ayuda a equipos de soporte a construir centros de ayuda que aparecen en Google y reducen el volumen de contactos entrantes.

Trabajo en un equipo de Customer Success o Soporte y quiero que nuestro centro de ayuda sea un activo SEO que aparezca cuando los clientes buscan soluciones a sus problemas en Google, reduciendo los tickets y mejorando la experiencia de autoservicio.

Nuestro producto es: [describe el software o servicio, el tipo de cliente y los problemas de soporte más frecuentes]
Nuestro centro de ayuda actual es: [plataforma que usamos —Zendesk, Intercom, Notion, web propia—, número de artículos aproximado]
El volumen de tickets mensual es: [número aproximado y los tres temas más recurrentes]

Necesito que me ayudes a construir:

**1. Arquitectura del centro de ayuda orientada al SEO**
Explícame cómo estructurar un centro de ayuda para que Google lo entienda y lo indexe correctamente: jerarquía de categorías y subcategorías con URLs limpias y descriptivas, artículos con títulos que reflejen exactamente la búsqueda del usuario ("cómo cancelar mi suscripción" en lugar de "gestión de cuenta"), enlazado interno entre artículos relacionados, sitemap específico del help center. Dime qué plataformas de help center tienen mejor soporte SEO nativo.

**2. Keyword research basado en los tickets de soporte**
Explícame cómo convertir los tickets de soporte en un goldmine de keywords: cómo analizar el lenguaje exacto que usan los clientes en sus tickets (no el lenguaje técnico del producto), cómo usar Google Search Console para ver qué búsquedas ya llevan tráfico al help center y cuáles podrían llegar si crease más contenido, cómo priorizar qué artículos crear primero basándome en el volumen de tickets y el volumen de búsqueda simultáneamente.

**3. Estructura del artículo perfecto del help center**
Dame la plantilla del artículo ideal de ayuda que posiciona en Google y resuelve el problema del usuario sin que tenga que contactar con soporte: título con la keyword exacta del problema, resumen de una línea con la solución, cuerpo con pasos numerados y capturas de pantalla, sección FAQ al final para long-tail keywords relacionadas, vídeo embebido cuando sea más claro que el texto, enlace a artículos relacionados y CTA para contactar si no se resuelve el problema.

**4. Datos estructurados para el help center**
Explícame qué schemas de Schema.org debo implementar en los artículos del centro de ayuda: HowTo para guías paso a paso (con el potencial de aparecer como rich result), FAQPage para secciones de preguntas frecuentes, Article para contenido general. Dime cómo implementarlos si uso una plataforma de help center como Zendesk o Intercom (con limitaciones de control sobre el HTML) versus si tenemos control total sobre el código.

**5. Métricas de éxito del help center SEO**
Define los KPIs que debo monitorizar para saber si el help center está cumpliendo su doble función de SEO y deflexión de tickets: tráfico orgánico al help center segmentado por artículo, tasa de deflexión (porcentaje de usuarios que visitaron el help center y no abrieron un ticket), tasa de resolución self-service, ticket ratio (tickets / usuarios activos mes a mes), posición media de los artículos en Search Console para las búsquedas de soporte clave.

**6. Mantenimiento y actualización del contenido de soporte**
Dime cómo establecer un proceso de revisión y actualización del help center que lo mantenga fresco para Google y útil para los clientes: cómo identificar artículos desactualizados (fecha de última actualización, cambios recientes en el producto, aumento de tickets sobre ese tema), cómo gestionar artículos que quedan obsoletos tras un cambio de producto (redirect o actualización), cómo involucrar al equipo de producto para que actualice el help center cada vez que lanza una nueva funcionalidad.

Entrégame una checklist de 20 puntos para auditar el estado SEO de un help center existente y priorizar las mejoras con mayor impacto en deflexión de tickets.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'         => 'Crear un centro de ayuda que posicione en Google y reduzca el volumen de tickets',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'SEO del freelance: aparecer cuando el cliente busca tu especialidad',
                'description'      => 'Construye tu presencia orgánica como freelance para que los clientes te encuentren en Google cuando buscan tu especialidad, reduciendo la dependencia de plataformas de intermediación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de marketing personal y SEO especializado en ayudar a profesionales independientes a construir presencia orgánica que genere leads cualificados sin depender de plataformas como Upwork, Fiverr o LinkedIn Premium.

Soy freelance o consultor independiente y quiero que mis potenciales clientes me encuentren en Google cuando buscan alguien con mi especialidad. Necesito una estrategia SEO realista para ejecutar en solitario o con recursos muy limitados.

Mi especialidad es: [describe qué haces, para quién, qué resultados logras]
Mi presencia digital actual es: [portfolio web, LinkedIn, Behance, GitHub, perfil en plataformas de freelancing]
El tipo de cliente que busco es: [empresas medianas, startups, agencias que subcontratan, particulares]

Necesito que me expliques:

**1. La web del freelance como activo SEO**
Explícame cómo debe estar estructurada la web de un freelance para posicionar en búsquedas de clientes: página de inicio con la propuesta de valor clara y las keywords principales ("diseñador UI para startups en Madrid"), página de servicios con una subpágina por servicio específico (cada una optimizada para su keyword), portfolio con casos de estudio que incluyan texto indexable (no solo imágenes), blog o sección de recursos, y página de contacto con datos claros. Dime qué plataforma elegir según mis objetivos SEO (WordPress, Webflow, Squarespace) y por qué.

**2. Keyword research para el freelance: las búsquedas de los clientes**
Explícame cómo encontrar las palabras clave exactas que usan los clientes cuando buscan un freelance de mi especialidad: herramientas gratuitas (Google Suggest, People Also Ask, Search Console), cómo combinar especialidad + ubicación + tipo de proyecto ("copywriter email marketing ecommerce"), cómo encontrar nichos de long-tail con poca competencia pero alta intención de contratar, y cómo validar si hay volumen de búsqueda real antes de apostar por una keyword.

**3. Posicionamiento local vs. posicionamiento de nicho**
Explícame cuándo me interesa más el SEO local (aparecer en búsquedas de mi ciudad) versus el SEO de nicho (aparecer en búsquedas especializadas de mi sector independientemente de la ubicación): criterios para decidir según mi tipo de servicio (presencial vs. remoto), cómo optimizar para búsquedas locales con Google Business aunque sea un freelance sin oficina física, y cómo construir autoridad de nicho con contenido especializado que me posicione como referente en mi sector.

**4. Casos de estudio y portfolio optimizado para SEO**
Explícame cómo escribir casos de estudio de mis proyectos anteriores que posicionen en Google y al mismo tiempo convenzan a nuevos clientes: estructura recomendada (contexto, problema, solución, resultados cuantificados, tecnologías o metodologías usadas), keywords a incluir naturalmente, cómo conseguir que el cliente autorice publicar el caso, cómo anonimizar cuando no puedo nombrar al cliente, y cómo usar los testimonios del cliente como contenido indexable.

**5. Blog del freelance como motor de leads**
Dime cómo un blog bien enfocado puede generar leads cualificados de forma constante: qué temas tratar (resolver las dudas de mi cliente objetivo sobre cómo contratar mi tipo de servicio, guías de mi especialidad que demuestren expertise, behind the scenes de mi trabajo), con qué frecuencia publicar cuando soy un solo profesional con tiempo limitado, cómo distribuir el contenido para que llegue más lejos que solo el tráfico orgánico directo.

**6. Autoridad y backlinks como freelance**
Explícame cómo construir autoridad de dominio con recursos y red limitados: publicar como guest en blogs de mi sector, participar como ponente en eventos y conseguir que enlacen mi web, ser mencionado en directorios de freelances o recursos de mi sector, colaborar con otros freelances complementarios en contenidos que enlacen mutuamente, conseguir menciones en newsletters del sector. Dime qué acciones priorizaría si solo puedo dedicar dos horas al mes a la construcción de enlaces.

Dame un plan de SEO de 6 meses para un freelance que empieza desde cero con una web nueva y presupuesto mínimo, con acciones concretas semana a semana para los primeros 30 días.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 20,
                'use_case'         => 'Generar leads cualificados como freelance mediante posicionamiento orgánico en Google',
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
