<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills189Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'SEO de contenidos para SaaS y B2B',
                'description'      => 'Atrae tráfico orgánico cualificado con contenido: el keyword research para B2B, la arquitectura de contenidos y el proceso de producción que genera leads de forma sostenida.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en SEO de contenidos para empresas SaaS y B2B con experiencia construyendo máquinas de contenido que generan tráfico orgánico cualificado mes a mes. Conoces la diferencia entre el tráfico que nunca convierte y el tráfico que llena el pipeline de ventas.

Quiero construir una estrategia de SEO de contenidos para mi empresa. Para asesorarte bien, primero pregúntame:

1. ¿Qué problema resuelve tu producto o servicio y a quién se lo vendes (ICP: sector, tamaño de empresa, cargo del decisor)?
2. ¿Tienes ya algún blog o contenido publicado? ¿Cuál es tu tráfico orgánico actual aproximado?
3. ¿Cuáles son las palabras clave o temas por los que te gustaría posicionarte?
4. ¿Cuánto contenido puedes producir al mes (en términos de recursos: escritores, tiempo del equipo, presupuesto)?
5. ¿Cuáles son tus competidores directos y sabes si tienen una estrategia de contenidos activa?

Con esas respuestas, diseña la estrategia completa:

**1. Keyword research para B2B: encontrar lo que busca tu ICP**
El keyword research para B2B es radicalmente diferente al de B2C porque los volúmenes son menores pero la intención comercial es mucho más alta. Define la metodología: el análisis de las palabras clave que buscan los decisores en cada etapa del funnel (TOFU: conocimiento del problema; MOFU: evaluación de soluciones; BOFU: comparativa de productos y términos de marca), las herramientas para encontrarlas (Semrush, Ahrefs, Answer the Public, las sugerencias de Google), el análisis del contenido de los competidores para identificar los gaps, y cómo priorizar el listado de keywords según el potencial de tráfico, la dificultad de posicionamiento y la intención comercial.

**2. Arquitectura de contenidos: el árbol que posiciona**
Una estrategia de contenidos sin arquitectura es una colección de artículos sueltos. Define el modelo de topic clusters: el contenido pilar (la guía definitiva sobre el problema principal que resuelves, 3.000-5.000 palabras, que posiciona para la keyword principal), los artículos satélite que cubren subtemas relacionados y enlazan al pilar, y las páginas de producto o landing pages que son el destino final de la conversión. Explica cómo la estructura de enlaces internos entre pilar y satélites concentra autoridad en las páginas más importantes.

**3. El proceso de producción de contenido que escala**
El mayor cuello de botella del SEO de contenidos es producir contenido de calidad de forma consistente. Define el proceso editorial: el brief de contenido que garantiza la alineación entre SEO y calidad (la keyword objetivo, la intención de búsqueda, la estructura recomendada, los competidores a superar, las fuentes de datos originales), el flujo de revisión que mantiene la calidad sin crear dependencia de una sola persona, el calendario editorial y las herramientas de gestión (Notion, Airtable, un simple Trello). Incluye cuándo tiene sentido usar redactores externos o IA asistida con revisión interna.

**4. Contenido que convierte: el SEO al servicio del pipeline**
El tráfico orgánico sin conversión es vanidad. Define las estrategias que convierten el tráfico en leads: los lead magnets dentro del contenido (calculadoras, templates, checklists descargables que piden email), los CTAs que llevan al lector al siguiente paso del funnel según la intención de búsqueda del artículo, el contenido BOFU (comparativas, casos de éxito, páginas de alternativas a la competencia) que captura a compradores que están a punto de tomar una decisión, y la medición de la atribución de contenido a pipeline en el CRM.

**5. Link building para SaaS y B2B: la autoridad que posiciona**
El contenido sin links no posiciona en mercados competitivos. Define la estrategia de link building específica para B2B: el contenido que naturalmente atrae enlaces (estudios con datos originales, herramientas gratuitas, investigaciones del sector), las tácticas de outreach para conseguir menciones en publicaciones del sector, el guest posting estratégico en medios que lee tu ICP, y las alianzas de contenido con empresas complementarias (no competidoras) que comparten tu audiencia.

**6. Medición y optimización del SEO de contenidos**
Define el sistema de medición que conecta el SEO con el negocio: las métricas de SEO puro (posición media, impresiones, CTR en Google Search Console; tráfico orgánico y páginas de aterrizaje en GA4), las métricas de conversión (leads orgánicos, tasa de conversión de artículos a lead, coste por lead orgánico vs. paid), y el proceso de optimización de contenido existente (actualizar artículos con caída de posición, añadir secciones que cubran preguntas no respondidas, mejorar el CTR con meta titles más atractivos).

Termina con el plan de los primeros tres meses: los temas prioritarios para empezar, la cadencia de publicación recomendada y los hitos que indican que la estrategia está funcionando antes de ver resultados de tráfico significativos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construcción de una estrategia de SEO de contenidos para empresas SaaS y B2B que genera leads de forma orgánica.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'SEO técnico para aplicaciones web modernas',
                'description'      => 'Resuelve los problemas de SEO específicos de SPAs, SSR y apps JavaScript: el renderizado, el Core Web Vitals y las optimizaciones técnicas que diferencian a los developers que entienden de SEO.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de software especializado en SEO técnico con experiencia resolviendo los problemas de posicionamiento que son específicos de las aplicaciones web modernas: las SPAs con React, Vue o Angular, las aplicaciones con renderizado en servidor (SSR), los frameworks como Next.js o Nuxt, y los sitios con JavaScript pesado donde el SEO mal implementado puede hacer que Google no indexe nada.

Necesito auditar o mejorar el SEO técnico de mi aplicación. Para asesorarte bien, primero pregúntame:

1. ¿Qué stack estás usando: SPA pura (React/Vue/Angular con CSR), SSR (Next.js, Nuxt, SvelteKit), SSG (sitio generado estáticamente), o una aplicación híbrida?
2. ¿Cuáles son los problemas de indexación que ya has detectado o sospechas que tienes?
3. ¿Has revisado los Core Web Vitals en Google Search Console? ¿Qué puntuaciones tienes?
4. ¿Tienes JavaScript que bloquea el renderizado o recursos de terceros que impactan la velocidad de carga?
5. ¿Qué herramientas de SEO técnico has usado ya (Screaming Frog, Google Search Console, PageSpeed Insights)?

Con esas respuestas, desarrolla la auditoría y el plan de mejoras:

**1. El problema del renderizado en SPAs: por qué Google puede no estar indexando tu contenido**
El mayor problema de SEO en aplicaciones JavaScript es que Googlebot puede no ver el contenido si depende de JavaScript para renderizarse. Explica el problema en profundidad: la diferencia entre CSR (el HTML que llega al bot está vacío hasta que JavaScript lo rellena), SSR (el HTML llega ya renderizado desde el servidor), SSG (las páginas se generan en build time) e ISR (generación incremental). Define el diagnóstico: cómo comprobar qué ve Googlebot realmente con la herramienta de Inspección de URLs de Search Console vs. lo que ve un usuario, y las señales que indican que hay un problema de renderizado (páginas indexadas pero sin contenido, bajo CTR de páginas que deberían posicionar).

**2. Core Web Vitals: las métricas de rendimiento que son factor de ranking**
Los Core Web Vitals son métricas de experiencia de usuario que Google usa como señal de ranking. Define qué mide cada una y cómo mejorarla: LCP (Largest Contentful Paint, el tiempo hasta que el elemento más grande es visible; optimización: precarga de imágenes, servidor rápido, eliminación de recursos que bloquean el renderizado), CLS (Cumulative Layout Shift, el desplazamiento del contenido mientras carga; optimización: dimensiones explícitas en imágenes y videos, fuentes de sistema o preload de web fonts), INP (Interaction to Next Paint, la respuesta a la interacción del usuario; optimización: no bloquear el hilo principal, dividir las tareas JavaScript largas).

**3. Optimización de la velocidad de carga en aplicaciones modernas**
La velocidad de carga no es solo una métrica de SEO, es una métrica de negocio. Define las técnicas específicas para aplicaciones JavaScript modernas: el code splitting para cargar solo el JavaScript necesario para cada página, el lazy loading de imágenes y componentes, la optimización de imágenes (formato WebP/AVIF, srcset para responsive, CDN para distribución), la estrategia de caché (Cache-Control, Service Workers), la eliminación de JavaScript y CSS no utilizado y la reducción del TTFB (Time to First Byte) con un CDN edge y un servidor de origen rápido.

**4. Gestión dinámica de metadatos y datos estructurados**
En una aplicación JavaScript, los metadatos deben actualizarse con cada cambio de ruta. Define la implementación correcta: cómo gestionar el title, la description, los Open Graph tags y el canonical en Next.js (Metadata API), en Nuxt (useHead), en Vue puro (vue-meta) y en React sin framework (react-helmet). Añade la implementación de datos estructurados (JSON-LD) para los tipos de schema más relevantes según el tipo de aplicación (Product, Article, Organization, BreadcrumbList, FAQPage) y cómo validarlos con el Rich Results Test de Google.

**5. Rastreabilidad: el sitemap, el robots.txt y la estructura de URLs**
Ayuda a Googlebot a rastrear e indexar tu sitio eficientemente. Define las mejores prácticas: el sitemap XML generado dinámicamente (especialmente crítico en sitios con miles de URLs dinámicas), el robots.txt que bloquea las páginas que no deben indexarse (paneles de admin, páginas de pago, duplicados), la gestión de URLs canónicas para evitar contenido duplicado, la implementación de hreflang para aplicaciones multiidioma y la estructura de URLs SEO-friendly (sin parámetros innecesarios, con slugs descriptivos).

**6. Monitorización y alertas de SEO técnico**
Un problema de SEO técnico puede destruir posiciones antes de que lo detectes. Define el sistema de monitorización: las alertas en Google Search Console que detectan caídas de indexación o de cobertura, la monitorización del rendimiento de Core Web Vitals en campo (no solo en lab) con el CrUX report, las herramientas de crawling periódico (Screaming Frog, Sitebulb) que detectan errores 404, redirecciones rotas o metadatos duplicados, y las alertas de posición para las keywords más importantes.

Termina con el checklist de SEO técnico que deberías revisar antes de cada deployment importante de la aplicación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Auditoría y optimización de SEO técnico en aplicaciones web modernas con JavaScript y frameworks SPA/SSR.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño web optimizado para SEO',
                'description'      => 'Las decisiones de diseño que afectan al posicionamiento: la estructura de navegación, las imágenes, la velocidad de carga y la experiencia de usuario que Google también valora.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador web con especialización en la intersección entre diseño y SEO. Entiendes que el diseño no es solo estético: cada decisión de navegación, tipografía, imagen y estructura de página tiene implicaciones en cómo Google rastrea, interpreta y posiciona el sitio, y en cómo los usuarios interactúan con él, lo que a su vez también es una señal de calidad para Google.

Necesito que mi diseño web sea también una ventaja en SEO. Para asesorarte bien, primero pregúntame:

1. ¿Qué tipo de sitio es: corporativo, e-commerce, blog/contenidos, portfolio, SaaS o landing page de producto?
2. ¿Estás diseñando desde cero o evaluando un diseño existente que quieres optimizar?
3. ¿Cuáles son las páginas más importantes que necesitan posicionar bien?
4. ¿Tienes datos de velocidad de carga actual (Core Web Vitals, PageSpeed Score)?
5. ¿Cuáles son los problemas de SEO o de experiencia de usuario que ya has detectado?

Con esas respuestas, desarrolla la guía de diseño SEO-optimizado:

**1. Jerarquía visual y estructura semántica: lo que ve el usuario y lo que lee Google**
El diseño comunica la jerarquía de la información al usuario; el HTML semántico comunica esa misma jerarquía a Google. Define cómo alinear ambas: el H1 único por página que coincide con la keyword principal y con el elemento visualmente más prominente, los H2 y H3 que organizan el contenido y corresponden a los subseciones visuales, los párrafos cortos con buena legibilidad (interlineado generoso, anchura de columna óptima para lectura) que reducen el bounce rate, y la evitación de texto en imágenes que Google no puede leer.

**2. Navegación y arquitectura de la información SEO-friendly**
La navegación no es solo UX, es la señal que le dices a Google sobre qué páginas son más importantes. Define el diseño de navegación óptimo: la navegación principal que incluye las páginas más estratégicas (no más de 7 elementos en el menú principal), el breadcrumb de migas de pan que mejora la rastreabilidad y aparece en los resultados de búsqueda como rich result, el footer con enlaces a las páginas de segundo nivel que el menú principal no puede incluir, y la gestión de los enlaces de texto (anchor text descriptivo, no "haz clic aquí") que transmiten relevancia temática.

**3. Imágenes: el activo que más pesa y más penaliza si se hace mal**
Las imágenes son el componente más crítico para el rendimiento y también una oportunidad de posicionamiento en Google Images. Define las decisiones de diseño correctas: el formato moderno (WebP o AVIF en lugar de JPEG/PNG para una reducción del 30-50% en peso sin pérdida visible de calidad), las dimensiones explícitas en el HTML que evitan el CLS, el atributo alt descriptivo que es la única forma de comunicarle a Google el contenido de la imagen, el lazy loading para las imágenes fuera del viewport inicial, y la política de imágenes de fondo en CSS vs. etiqueta img (solo img es indexable y puede posicionar en Google Images).

**4. Velocidad de carga desde el diseño: las decisiones que marcan la diferencia**
El diseñador toma decisiones que el desarrollador no puede deshacer sin cambiar el diseño. Define las decisiones de diseño que impactan directamente en la velocidad: la elección de las tipografías web (cuántas fuentes, cuántos pesos, si una fuente del sistema podría servir), el número y peso de los recursos de terceros (scripts de chat, analytics, widgets de redes sociales, que suman segundos de carga), el uso de animaciones y efectos que consumen recursos del main thread afectando al INP, y el diseño del above the fold que debe cargar en menos de 2,5 segundos para un buen LCP.

**5. Diseño responsive y mobile-first para Google**
Google indexa con un bot móvil, así que si el diseño móvil es deficiente, el posicionamiento sufre aunque el diseño de escritorio sea perfecto. Define el enfoque mobile-first: diseñar primero para la pantalla más pequeña y escalar hacia arriba (no lo contrario), asegurar que los elementos táctiles (botones, links) tienen al menos 48px de área táctil, que el texto es legible sin zoom (mínimo 16px), que no hay contenido oculto en móvil que sí esté en escritorio (Google lo penaliza como contenido que el usuario no puede ver), y que los interstitials y popups no bloquean el contenido en móvil.

**6. UX como señal indirecta de SEO: el comportamiento del usuario que Google mide**
Google no mide directamente el UX de tu sitio, pero sí mide señales que correlacionan con él. Define las decisiones de diseño que mejoran las señales: el CTR en los resultados de búsqueda (que depende del diseño del title y la meta description, pero también de los rich snippets que una implementación de schema bien hecha activa), el tiempo en página (que mejora con un diseño que facilita la lectura y la exploración del contenido), el scroll depth (contenido bien estructurado que invita a seguir leyendo) y la tasa de rebote (páginas que responden a lo que el usuario buscaba, con un diseño que no distrae ni frustra).

Termina con el checklist de revisión SEO que aplicarías a cada página nueva antes de publicarla.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Decisiones de diseño web que mejoran el posicionamiento SEO sin sacrificar la estética ni la experiencia de usuario.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Contenido de ventas que posiciona en Google',
                'description'      => 'El blog corporativo como herramienta de ventas: los artículos que atraen al comprador en cada etapa del funnel y convierten el tráfico orgánico en pipeline de ventas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en content marketing para ventas B2B con experiencia creando contenido que no solo posiciona en Google sino que atrae al tipo de comprador correcto en el momento adecuado de su proceso de decisión y lo guía hacia la conversación de ventas. Conoces la diferencia entre el contenido que genera tráfico y el que genera pipeline.

Quiero usar el contenido para apoyar el proceso de ventas de mi empresa. Para asesorarte bien, primero pregúntame:

1. ¿Qué vendes y cuál es el ciclo de venta típico (días, semanas, meses)?
2. ¿Cuántas personas están involucradas en la decisión de compra y cuáles son sus roles?
3. ¿Cuáles son las objeciones más comunes que el equipo de ventas encuentra en el proceso?
4. ¿Tienes ya contenido publicado y, si es así, qué tipo de contenido genera más conversaciones de ventas?
5. ¿Cuáles son tus competidores principales y sabes si tienen estrategia de contenidos?

Con esas respuestas, diseña la estrategia de contenido de ventas que posiciona:

**1. El mapa de contenido por etapa del funnel de ventas**
Cada etapa del proceso de compra requiere un tipo de contenido diferente con una intención de búsqueda diferente. Define el mapa completo: el contenido TOFU que atrae a compradores que acaban de identificar el problema (artículos sobre síntomas y consecuencias del problema que resuelves, posicionando para búsquedas de problema no de solución), el contenido MOFU que acompaña a compradores que evalúan opciones (guías de comparativa de enfoques, calculadoras de ROI, casos de éxito de empresas similares), y el contenido BOFU que captura a compradores en el momento de decisión (páginas de alternativas a la competencia, comparativas directas, testimonios con métricas específicas, demos y trials).

**2. Las páginas de alternativas: el contenido BOFU que más convierte**
Las páginas de "Alternativa a [competidor]" o "[Tu marca] vs [Competidor]" son el contenido con mayor intención comercial que puedes crear. Define cómo escribirlas bien: la honestidad que genera credibilidad (no decir que eres mejor en todo, sino en qué eres mejor y para qué perfil de cliente), los datos objetivos de comparativa (funcionalidades, precios, integraciones), las reseñas de terceros como prueba social, y cómo posicionarlas para búsquedas altamente competitivas pero con altísima tasa de conversión.

**3. Los casos de éxito que venden solos**
Un caso de éxito bien escrito hace el trabajo de un buen vendedor a escala. Define la estructura del caso de éxito que convierte: la empresa protagonista con la que el lector se identifica (sector, tamaño, problema específico), el problema antes de tu solución en términos cuantitativos (métricas reales del antes), el proceso de implementación sin glamurizar la complejidad, y los resultados después con cifras específicas y atribuibles a tu producto. Explica cómo adaptar el mismo caso para distintos formatos: artículo de blog, página dedicada, PDF descargable, vídeo, post de LinkedIn.

**4. El contenido que el equipo de ventas necesita (y generalmente no tiene)**
El equipo de ventas tiene objeciones recurrentes que podrían estar resueltas con contenido. Define el proceso de colaboración entre contenido y ventas: la entrevista mensual al equipo de ventas para recoger las preguntas y objeciones más frecuentes, la conversión de cada objeción en un artículo o recurso (el FAQ que responde antes de que el prospecto lo pregunte, el comparativo que desmonta el argumento del competidor, la guía técnica que responde a las dudas del equipo de IT), y el proceso de distribución del contenido al equipo de ventas para que lo usen en sus conversaciones.

**5. Keyword research orientado a comprador, no a volumen**
El SEO para ventas prioriza la intención comercial sobre el volumen. Define la metodología: cómo identificar las keywords que usan los compradores en cada etapa (no los curiosos que nunca van a comprar), el análisis de las búsquedas relacionadas con la competencia (quien busca "alternativa a [competidor]" está listo para comprar), las keywords de problema que indican reconocimiento de necesidad, y cómo ignorar las keywords de alto volumen que traen tráfico que nunca convierte y concentrar los recursos en las de menor volumen pero mayor valor comercial.

**6. Medición del contenido como generador de pipeline**
Define cómo conectar el contenido con el CRM para medir su impacto real en las ventas: la atribución multicanal que registra qué artículos leyó el lead antes de convertir, el tracking de las páginas vistas por los leads durante el proceso de venta (las visitas al blog de un lead activo son señales de interés que el equipo de ventas debería ver), el análisis de qué contenido aparece en el camino de los deals ganados vs. los perdidos, y cómo usar este análisis para priorizar la producción de nuevo contenido.

Termina con los cinco tipos de contenido que recomendarías publicar primero para un equipo de ventas B2B que tiene poco tiempo y quiere el mayor impacto posible en el pipeline.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Estrategia de contenido B2B que posiciona en Google y genera pipeline de ventas medible.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product-led SEO',
                'description'      => 'El producto como generador de contenido SEO: las páginas de landing generadas programáticamente, el contenido UGC y los patrones de product-led growth que generan millones de páginas indexables.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en product-led SEO con experiencia diseñando estrategias donde el propio producto genera el contenido que posiciona en Google a escala: las páginas de landing programáticas, el contenido generado por usuarios, los directorios y las herramientas gratuitas que atraen tráfico orgánico cualificado sin necesidad de un equipo de contenido grande.

Quiero usar el producto para generar SEO de forma sistemática. Para asesorarte bien, primero pregúntame:

1. ¿Qué tipo de producto es y qué tipo de datos genera o almacena el producto (perfiles de usuario, proyectos, listados, transacciones, reseñas)?
2. ¿Cuántos usuarios activos tienes y qué genera cada uno dentro del producto?
3. ¿Tienes ya alguna estrategia de páginas programáticas o de UGC indexable?
4. ¿Cuáles son las búsquedas que hacen tus usuarios potenciales antes de descubrir tu producto?
5. ¿Tienes capacidad técnica para implementar generación programática de páginas o necesitas soluciones más simples?

Con esas respuestas, diseña la estrategia de product-led SEO:

**1. Las páginas programáticas: el motor de tráfico que escala solo**
Las páginas generadas programáticamente son el núcleo del product-led SEO. Explica cómo construirlas: la identificación de los patrones de datos del producto que se pueden convertir en páginas indexables (perfiles de empresas en un directorio, comparativas de herramientas, rankings de ciudades, listados por categoría o sector), la plantilla de página que es suficientemente única para que Google no la trate como contenido duplicado (el reto principal de las páginas programáticas), y la arquitectura de URLs que escala sin comprometer el rendimiento ni la rastreabilidad.

**2. El contenido UGC como activo de SEO**
El contenido generado por usuarios es el activo de SEO más escalable que existe porque crece con el producto sin inversión de equipo. Define cómo diseñar el producto para maximizar el UGC indexable: los perfiles públicos de usuario con su contenido (Behance para diseñadores, GitHub para developers), las reseñas y opiniones que generan long-tail keywords de forma orgánica, los foros y comunidades integradas en el producto, y las páginas de proyecto o portfolio que los usuarios comparten orgánicamente. Incluye las consideraciones de moderación y calidad que evitan que el contenido UGC penalice el sitio.

**3. Las herramientas gratuitas como imán de backlinks y tráfico**
Las herramientas gratuitas son el lead magnet del product-led SEO: atraen a tu usuario ideal, demuestran el valor de tu producto y generan backlinks naturales de forma masiva. Define cómo diseñar una herramienta gratuita efectiva: la herramienta que resuelve una tarea pequeña que tu producto principal resuelve de forma completa (el calculador de ROI del software de proyecto management, el generador de firma de email de la herramienta de email marketing, el comprobador de SEO básico de la plataforma de SEO), el diseño que naturalmente lleva al usuario del resultado gratis a la solución completa de pago, y cómo optimizar la página de la herramienta para posicionarla.

**4. El SEO de los marketplaces y directorios integrados en el producto**
Si tu producto conecta oferta y demanda, las páginas de perfil de proveedor y las páginas de categoría son una mina de SEO. Define el modelo de marketplace SEO: las páginas de perfil de vendedor o profesional optimizadas para búsquedas de nombre o especialidad, las páginas de categoría ("fotógrafos de bodas en Barcelona", "abogados especializados en startups en Madrid") que capturan búsquedas locales y de nicho de altísima intención, y la estrategia de incentivos para que los proveedores completen sus perfiles (el perfil completo posiciona mejor, lo que beneficia a ambos).

**5. La arquitectura técnica del product-led SEO a escala**
Millones de páginas generadas por el producto crean desafíos técnicos únicos. Define las soluciones: la paginación y los crawl budgets (cómo asegurarse de que Googlebot rastrea las páginas más valiosas primero), la calidad mínima de página que evita que Google las trate como thin content (el umbral de palabras y señales de utilidad que una página programática debe alcanzar), la gestión de páginas obsoletas (usuarios inactivos, contenido eliminado) con redirecciones o noindex, y el monitoreo de la indexación a escala con Search Console API.

**6. Métricas del product-led SEO y el loop de crecimiento**
Define el modelo de crecimiento donde el SEO y el producto se retroalimentan: el tráfico orgánico que trae nuevos usuarios, los nuevos usuarios que crean contenido que genera más tráfico, y las métricas que miden el loop (páginas indexadas por usuario activo, tráfico orgánico por página programática, tasa de conversión de visitante orgánico a usuario registrado, CAC orgánico vs. paid). Explica cómo usar estos datos para priorizar las inversiones en producto que tienen mayor impacto en el SEO.

Termina con los tres ejemplos más exitosos de product-led SEO que conoces, con las métricas que los hacen destacar y la lección principal que se puede aplicar a un producto B2B o B2C de tamaño medio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseño de estrategias de product-led SEO con páginas programáticas, UGC y herramientas gratuitas como motor de tráfico.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Employer branding con SEO',
                'description'      => 'Posiciona a la empresa como empleadora ideal en Google: las páginas de careers, el contenido sobre cultura y las estrategias que atraen talento de forma orgánica sin pagar por cada candidato.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en employer branding con conocimientos de SEO y marketing de contenidos aplicado a la atracción de talento. Has ayudado a empresas a construir una presencia orgánica que atrae a los candidatos ideales antes de que empiecen a buscar trabajo, y conoces la diferencia entre el contenido de employer branding que solo gusta al equipo y el que realmente convierte visitantes en candidatos.

Quiero atraer talento de forma orgánica con SEO y employer branding. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el perfil de talento que más necesitas atraer: tecnología, comercial, operaciones, diseño u otros?
2. ¿Tienes ya una página de careers en tu sitio web y qué tráfico orgánico recibe?
3. ¿Cuáles son las fortalezas reales de trabajar en tu empresa que los candidatos más valoran?
4. ¿Cuáles son tus principales competidores en la guerra por el talento y tienes idea de qué hacen ellos?
5. ¿Cuánto contenido sobre cultura y vida en la empresa ya publicas (blog, LinkedIn, Glassdoor)?

Con esas respuestas, diseña la estrategia de employer branding con SEO:

**1. La página de careers como activo de SEO estratégico**
La mayoría de las páginas de careers son un listado de vacantes sin más. Define cómo construir una página de careers que posiciona y convierte: la página raíz /careers con contenido sobre la empresa como empleadora (no solo vacantes), la arquitectura de subpáginas por departamento o por perfil (/careers/engineering, /careers/sales) que capturan búsquedas específicas, las páginas de oficina o ciudad para el talento que busca trabajo en una ubicación específica, y la optimización para las búsquedas de alta intención como "trabajar en [empresa]", "[empresa] cultura", "[empresa] salario".

**2. Las keywords que busca el candidato pasivo antes de postularse**
El candidato ideal a menudo no está buscando trabajo activamente, pero sí está buscando información sobre las mejores empresas de su sector. Define la estrategia de keyword research para employer branding: las búsquedas de empresa ("cómo es trabajar en [empresa]", "[empresa] reviews", "[empresa] beneficios"), las búsquedas de sector ("mejores empresas de tecnología en España para trabajar"), las búsquedas de rol ("salario medio desarrollador backend España 2024", que atraen a candidatos que evalúan sus opciones), y cómo el contenido que responde a estas búsquedas posiciona la empresa antes de que el candidato decida buscar trabajo.

**3. Contenido de cultura que es honesto y que posiciona**
El contenido de employer branding que nadie lee es el que suena a folleto corporativo. Define el tipo de contenido que funciona: los artículos de "un día en la vida de" escritos por empleados reales con detalles concretos (no descripciones genéricas de "cultura colaborativa"), los posts técnicos del equipo de ingeniería que atraen a developers que quieren trabajar con gente que publica sobre lo que hace, los behind the scenes de decisiones difíciles que muestran la cultura de forma auténtica, y las entrevistas de empleados en distintas etapas de su carrera que responden las preguntas que todo candidato tiene.

**4. Glassdoor, LinkedIn y las plataformas de reputación como SEO**
Google indexa y muestra en sus resultados el contenido de Glassdoor, LinkedIn Jobs y Indeed. Define la estrategia en cada plataforma: la gestión activa del perfil de Glassdoor (responder a reseñas negativas de forma constructiva, actualizar la información de beneficios, pedir a empleados satisfechos que dejen reseñas), la optimización del perfil de empresa en LinkedIn con las keywords que buscan los candidatos, y la consistencia del mensaje de employer branding entre el sitio propio y las plataformas externas.

**5. El contenido técnico como herramienta de atracción de talento tech**
Para atraer a developers e ingenieros, el mejor contenido de employer branding es el que muestra lo que hacen técnicamente. Define la estrategia de employer branding técnico: el engineering blog con artículos sobre los desafíos técnicos que resuelve el equipo, las contribuciones a proyectos open source que generan visibilidad en la comunidad, las charlas en conferencias técnicas de los miembros del equipo, y el contenido sobre el stack y las decisiones de arquitectura que le dice a un developer cómo es trabajar realmente. Para cada formato, explica cómo posicionarlo en Google y en los canales donde está el talento técnico.

**6. Medición del employer branding con SEO**
Define las métricas que conectan el contenido de employer branding con el proceso de selección: el tráfico orgánico a la página de careers y las páginas de cultura, la tasa de conversión de visitante a candidato, el porcentaje de candidatos que mencionan el contenido como factor que les motivó a postularse, la calidad de los candidatos que llegan de forma orgánica vs. los de plataformas de pago (tasa de avance en el proceso, tasa de oferta aceptada), y el employer brand index en plataformas como Glassdoor o LinkedIn (rating, número de seguidores, alcance de las publicaciones).

Termina con el plan de contenido de employer branding de los primeros seis meses: los temas prioritarios, los formatos recomendados y los canales de distribución para llegar al perfil de candidato descrito.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Estrategia de employer branding con SEO para atraer talento de forma orgánica y reducir el coste de adquisición de candidatos.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Posicionamiento orgánico para servicios financieros',
                'description'      => 'El SEO en el sector más competitivo de internet: las restricciones de Google YMYL, la autoridad que necesita un sitio de finanzas y el contenido que posiciona sin violar la normativa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en SEO para el sector financiero con experiencia construyendo presencia orgánica para bancos, fintech, aseguradoras, asesores financieros y plataformas de inversión. Conoces las particularidades de un sector donde Google aplica los estándares más exigentes de calidad (YMYL) y donde la normativa limita lo que se puede publicar.

Quiero mejorar el posicionamiento orgánico de mi empresa de servicios financieros. Para asesorarte bien, primero pregúntame:

1. ¿Qué tipo de servicio financiero ofreces: banca, inversión, seguros, préstamos, fintech, asesoría financiera o planificación patrimonial?
2. ¿A qué perfil de cliente te diriges: particulares, autónomos o empresas? ¿Y con qué nivel de sofisticación financiera?
3. ¿Cuál es tu situación actual en Google: tienes presencia orgánica, estás empezando desde cero o has sufrido penalizaciones?
4. ¿Cuáles son las keywords o temas para los que quieres posicionarte?
5. ¿Cuál es la estructura legal de tu empresa y qué autorizaciones regulatorias tienes (esto afecta a lo que puedes publicar legalmente)?

Con esas respuestas, diseña la estrategia de SEO para servicios financieros:

**1. YMYL y E-E-A-T: las reglas del juego en finanzas**
Google aplica sus estándares más exigentes en los sectores que pueden afectar la salud financiera de las personas: Your Money or Your Life (YMYL). Define qué significa esto en la práctica: por qué el contenido financiero necesita un nivel de autoridad mucho mayor que otros sectores, cómo Google evalúa la Experience, Expertise, Authoritativeness y Trustworthiness (E-E-A-T) de un sitio financiero (credenciales de los autores, información de la empresa, citas en medios de referencia, reseñas externas), y las señales concretas que el sitio debe mostrar para que Google confíe en él (número de regulación, equipo con credenciales visibles, disclaimer legal apropiado).

**2. La estrategia de contenido que cumple con la normativa y posiciona**
En finanzas el contenido está limitado por la regulación. Define cómo crear contenido que posiciona sin violar las reglas: la diferencia entre contenido informativo (que puedes publicar) y contenido que constituye asesoramiento financiero (que requiere licencia o disclaimers específicos), cómo escribir sobre productos de inversión, seguros o crédito de forma que sea útil para el lector y posicione en Google sin crear responsabilidad legal, y el proceso de revisión legal del contenido antes de publicarlo sin que frene la cadencia de producción.

**3. El keyword research financiero: intención y competencia**
Las keywords financieras son algunas de las más competitivas y más caras en PPC, lo que las hace muy valiosas en orgánico. Define la metodología: la segmentación de keywords por nivel de intención (informativa: "cómo funciona un plan de pensiones"; comercial: "mejor plan de pensiones 2024"; transaccional: "abrir plan de pensiones online"), la evaluación de la dificultad real de posicionamiento en keywords donde los primeros resultados son siempre los grandes bancos o los comparadores, y la estrategia para encontrar las oportunidades de keywords financieras con menor dificultad y alta intención comercial donde una empresa mediana puede competir.

**4. La autoridad de dominio en finanzas: cómo construirla**
Sin autoridad de dominio, ninguna cantidad de contenido posiciona en finanzas. Define la estrategia de construcción de autoridad: los medios financieros y económicos donde conseguir menciones y backlinks (los periodistas que cubren el sector y cómo llegar a ellos), la estrategia de PR digital (estudios con datos originales del sector, informes de mercado, herramientas gratuitas que atraen links naturalmente), las certificaciones y asociaciones sectoriales cuya mención en el sitio añade credibilidad, y la optimización del perfil de la empresa en Google Business Profile y en los directorios de empresas financieras reguladas.

**5. SEO local para servicios financieros con presencia física**
Si tienes oficinas o asesores que atienden a clientes locales, el SEO local es una oportunidad enorme. Define la estrategia: la optimización de Google Business Profile para cada oficina (categoría, descripción con keywords, gestión de reseñas, posts de actividad), las páginas de landing local en el sitio web optimizadas para búsquedas como "asesor financiero en [ciudad]" o "hipoteca en [ciudad]", la consistencia del NAP (nombre, dirección, teléfono) en todos los directorios, y la estrategia de reseñas que es especialmente delicada en servicios financieros por las restricciones de algunos reguladores.

**6. Medición del SEO financiero: más allá del tráfico**
Define las métricas que conectan el SEO con los objetivos de negocio en finanzas: el tráfico orgánico segmentado por tipo de página (informativa vs. de producto) y su conversión a lead o a cliente, el coste de adquisición orgánica vs. el coste en Google Ads para las mismas keywords (la diferencia suele ser de 10x o más en finanzas, donde el CPC puede superar los 50 euros), el valor del cliente adquirido por canal orgánico, y la monitorización de las posiciones para las keywords más estratégicas con alertas de cambios significativos.

Termina con las tres oportunidades de SEO que en tu experiencia están más infraexplotadas en el sector financiero y que podrían marcar la diferencia en los próximos 12 meses para una empresa que empieza a invertir en orgánico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Estrategia de SEO para empresas de servicios financieros con las restricciones YMYL y regulatorias del sector.',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marketing de contenidos y SEO para despachos de abogados',
                'description'      => 'El despacho de abogados que genera clientes con contenido: las prácticas de SEO local, el contenido de autoridad jurídica y la estrategia que posiciona a los abogados que escriben lo que sus clientes buscan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en marketing digital para despachos de abogados y profesionales jurídicos con experiencia construyendo presencia orgánica en Google para bufetes de distintas especialidades y tamaños. Conoces las restricciones deontológicas del marketing jurídico, la naturaleza YMYL del contenido legal y las oportunidades concretas que el SEO local y el contenido de autoridad crean para los despachos.

Quiero usar el SEO y el marketing de contenidos para generar clientes para mi despacho. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es la especialidad del despacho: civil, penal, laboral, mercantil, familia, inmobiliario, fiscal, startups u otra?
2. ¿El despacho atiende a particulares, a empresas o a ambos?
3. ¿En qué geografía opera principalmente: una ciudad, una comunidad autónoma o a nivel nacional?
4. ¿Tienes ya web y qué tráfico orgánico recibes aproximadamente?
5. ¿Conoces las normas deontológicas del colegio de abogados de tu jurisdicción sobre publicidad?

Con esas respuestas, diseña la estrategia de marketing de contenidos y SEO para el despacho:

**1. El mapa de búsquedas que hacen tus clientes potenciales**
Las personas que necesitan un abogado hacen búsquedas muy específicas y a menudo en momentos de crisis. Define la tipología de búsquedas para la especialidad del despacho: las búsquedas de problema ("qué pasa si no pago la hipoteca", "me han despedido sin causa"), las búsquedas de solución ("abogado despido improcedente", "abogado divorcio express"), las búsquedas locales ("abogado laboralista en Barcelona"), y las búsquedas de coste ("cuánto cuesta un abogado de familia"). Para cada tipo, explica la intención, el volumen aproximado y la estrategia de contenido óptima.

**2. SEO local: ser el abogado que aparece en Google Maps**
Para la mayoría de los despachos que trabajan con particulares o pymes locales, el SEO local es la oportunidad más inmediata. Define la estrategia completa: la optimización del perfil de Google Business Profile (categorías, descripción con keywords, horario, fotos, gestión de reseñas), las páginas de landing local en el sitio web ("abogado laboral en [ciudad]" con contenido específico de la ciudad y del juzgado local), la consistencia de NAP en directorios legales (Iclex, Wolters Kluwer, ElAbogado), y la estrategia de reseñas respetando las limitaciones deontológicas (el cliente puede dar testimonio de su experiencia con el servicio, no de la calidad del asesoramiento).

**3. El contenido jurídico que posiciona y que genera consultas**
El contenido legal que posiciona en Google es el que responde a las preguntas que la gente hace en los momentos de mayor angustia. Define el tipo de contenido que funciona: los artículos que explican en lenguaje sencillo los derechos del ciudadano ante situaciones comunes (el trabajador que le piden firmar un ERTE, el inquilino al que le suben el alquiler, el consumidor con un producto defectuoso), las guías paso a paso del proceso legal (cómo funciona un juicio de familia, qué pasa en una vista por despido), y los artículos de actualidad jurídica que explican los cambios de ley y sus consecuencias prácticas. Para cada tipo, explica la intención de búsqueda que captura y el paso de conversión hacia el contacto.

**4. La autoridad jurídica en Google: E-E-A-T para abogados**
Google trata el contenido legal como YMYL y exige señales de autoridad muy claras. Define cómo construir la autoridad del despacho y de los abogados en el sitio: las páginas de autor con la formación, colegiación y especialización de cada abogado (con número de colegiado visible), las menciones en prensa especializada como fuente de opinión jurídica, las publicaciones en revistas del sector, la participación en conferencias y eventos del bar, y el marcado schema de LegalService y Person que ayuda a Google a entender quién hay detrás del contenido.

**5. Las restricciones deontológicas del marketing jurídico**
La publicidad de abogados está regulada por los códigos deontológicos de los colegios. Define el marco de cumplimiento: las restricciones sobre el uso de superlatives y comparaciones con otros abogados, las limitaciones sobre la comunicación de honorarios, las normas sobre testimonios de clientes (generalmente permitidos si son sobre el servicio, no sobre el resultado), las restricciones sobre la comunicación publicitaria en ciertas especialidades, y cómo hacer marketing efectivo dentro de estos límites. Recomienda consultar con el colegio de abogados correspondiente para las normas específicas de cada jurisdicción.

**6. Medición del ROI del marketing jurídico**
Define cómo conectar el SEO con el negocio del despacho: el tracking de las consultas que llegan por búsqueda orgánica (el formulario de contacto, la llamada que menciona "te encontré en Google", la dirección IP de origen de los leads), la tasa de conversión de consulta a cliente según el canal de origen, el valor del cliente por especialidad (litigios de empresa valen más que consultas de familia básicas), y el coste de adquisición orgánico vs. el coste de la publicidad en directorios o Google Ads para keywords jurídicas (que son extremadamente caras).

Termina con el plan de los primeros seis meses: las primeras diez páginas o artículos que publicarías para la especialidad descrita, justificando la elección de cada uno con la búsqueda que captura y el cliente que atrae.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Estrategia de SEO y marketing de contenidos para despachos de abogados que quieren generar clientes de forma orgánica.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Base de conocimiento optimizada para SEO',
                'description'      => 'Convierte el help center en un activo de SEO: la estructura, el contenido y la optimización que hace que la documentación de soporte aparezca en Google cuando los clientes buscan soluciones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en SEO con experiencia específica en la optimización de bases de conocimiento, centros de ayuda y documentación técnica para empresas SaaS y software. Has convertido help centers que solo servían a usuarios existentes en activos de SEO que atraen nuevos usuarios y reducen el churn al mismo tiempo.

Quiero que mi base de conocimiento o centro de ayuda posicione en Google. Para asesorarte bien, primero pregúntame:

1. ¿Qué plataforma usas para el help center: Zendesk Guide, Intercom, Notion público, GitBook, una base de conocimiento personalizada o tu propio sistema?
2. ¿Cuántos artículos tienes publicados actualmente y cuál es el volumen de tráfico orgánico que recibe el help center?
3. ¿Cuáles son las búsquedas para las que más te interesaría posicionarte: búsquedas de problemas con tu producto, búsquedas genéricas del sector o búsquedas de comparativa con competidores?
4. ¿Cuántos tickets de soporte recibes mensualmente y cuáles son los problemas más frecuentes?
5. ¿El help center está en un subdominio (help.tuempresa.com) o en un subdirectorio (tuempresa.com/help)?

Con esas respuestas, diseña la estrategia de SEO para el help center:

**1. Arquitectura del help center: la estructura que Google entiende**
La mayoría de los help centers tienen una arquitectura plana que dificulta el rastreo y la comprensión temática de Google. Define la arquitectura óptima: la organización por categorías que refleja los grandes temas del producto (no la estructura interna de la empresa), la jerarquía de artículos que va de lo general a lo específico, los hubs temáticos que concentran la autoridad en los temas más importantes, y la navegación entre artículos relacionados con enlaces internos que mantienen al usuario y a Googlebot moviéndose dentro del help center.

**2. Keyword research para documentación de soporte**
Los usuarios buscan soluciones a problemas, no nombres de funcionalidades internas. Define la metodología de keyword research para el help center: cómo encontrar las búsquedas reales que hacen tus usuarios cuando tienen un problema (las preguntas frecuentes del equipo de soporte son un goldmine), la diferencia entre las búsquedas de usuarios existentes (que ya conocen el producto) y las búsquedas de prospectos (que describen el problema sin conocer tu solución), y cómo optimizar los títulos de los artículos para capturar ambas. Incluye las herramientas de keyword research y cómo interpretar los resultados.

**3. Estructura de cada artículo para SEO y para el usuario**
Un artículo de help center bien estructurado responde la pregunta en los primeros párrafos y proporciona el contexto necesario después. Define la plantilla de artículo que posiciona: el título en formato pregunta o solución ("Cómo [hacer X]", "[Error Y]: cómo solucionarlo"), el párrafo de introducción que resume la respuesta antes de desarrollarla (featured snippet optimizado), la estructura de encabezados que organiza los pasos o conceptos, las imágenes y vídeos con sus atributos alt descriptivos, y el cierre con artículos relacionados que mantienen al usuario en el help center.

**4. Subdominio vs. subdirectorio: la decisión técnica que más importa**
Esta es una de las decisiones de arquitectura con mayor impacto en el SEO del help center. Explica la diferencia: el help center en subdominio (help.empresa.com) es tratado por Google como un sitio separado, lo que divide la autoridad de dominio; el help center en subdirectorio (empresa.com/help) concentra toda la autoridad en el dominio principal. Define cuándo tiene sentido cada opción, los pasos para migrar de subdominio a subdirectorio si es la decisión correcta, y cómo configurar la plataforma de help center elegida para cada opción.

**5. El help center como deflector de tickets y generador de SEO**
Un help center que posiciona en Google beneficia a dos objetivos a la vez: atrae usuarios nuevos y reduce los tickets de soporte. Define la estrategia de deflexión activa: la medición de qué artículos reducen tickets en las categorías más costosas de soporte, el proceso de convertir los tickets recurrentes en artículos del help center, el chatbot del soporte que sugiere artículos antes de permitir abrir un ticket, y la métrica de "artículos vistos antes de abrir ticket" que mide la efectividad del help center como deflector. Incluye cómo presentar este impacto al equipo directivo para justificar la inversión en SEO del help center.

**6. Monitorización y mejora continua de la documentación**
Un help center que no se actualiza pierde valor SEO y daña la experiencia del usuario. Define el proceso de mantenimiento: la auditoría periódica de artículos con tráfico decreciente (que indica obsolescencia o cambios en el algoritmo), las señales dentro del help center que indican que un artículo no es útil (alto bounce rate, la calificación negativa de ¿fue útil este artículo?, los tickets que llegan justo después de ver el artículo), y el calendario de revisión alineado con los ciclos de release del producto (cada feature nueva o cambio de UX requiere actualizar la documentación).

Termina con los cinco artículos que deberías optimizar primero en cualquier help center basándote en su potencial de impacto en tráfico orgánico y en reducción de tickets.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Optimización SEO de bases de conocimiento y centros de ayuda para atraer nuevos usuarios y reducir el volumen de soporte.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Posicionamiento personal con SEO para freelances',
                'description'      => 'El freelance que aparece primero en Google cuando sus clientes ideales buscan un profesional: el sitio web, el blog y las estrategias de link building que generan clientes pasivamente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en marketing digital para profesionales independientes con experiencia ayudando a freelances de distintas disciplinas a construir una presencia orgánica en Google que genera consultas de clientes de forma pasiva. Sabes que el freelance que aparece primero en Google para la búsqueda correcta tiene una ventaja competitiva que ningún amount de networking puede igualar.

Quiero posicionarme en Google para atraer clientes como freelance. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es tu especialidad como freelance y cómo describirías en una frase el cliente ideal que quieres atraer?
2. ¿Tienes ya un sitio web personal y, si es así, qué tráfico orgánico recibe aproximadamente?
3. ¿Sabes para qué búsquedas apareces actualmente en Google y cuáles son las búsquedas para las que te gustaría aparecer?
4. ¿Produces ya contenido de algún tipo (blog, newsletter, vídeos, posts de LinkedIn)?
5. ¿Cuáles son tus competidores en Google, es decir, qué buscaría un cliente potencial para encontrar a alguien como tú?

Con esas respuestas, diseña la estrategia de posicionamiento personal con SEO:

**1. Las keywords que busca tu cliente ideal**
Tu cliente busca en Google de formas muy específicas. Define el keyword research para el freelance: las búsquedas de perfil profesional ("consultor de marketing freelance para startups", "diseñador UX freelance Barcelona"), las búsquedas de servicio específico ("alguien que haga [tarea concreta]"), las búsquedas de problema que el cliente tiene antes de saber que necesita un freelance como tú ("cómo mejorar la tasa de conversión de mi ecommerce"), y cómo priorizar las keywords según su intención comercial y la facilidad de posicionamiento para un dominio personal nuevo. Incluye las herramientas de keyword research y cómo usarlas sin presupuesto.

**2. El sitio web del freelance que convierte visitantes en clientes**
El sitio personal es el centro de tu SEO. Define la arquitectura óptima: la página de inicio que en cinco segundos deja claro quién eres, a quién ayudas y qué resultado obtienes (con la keyword principal en el H1), la página de servicios detallada que responde todas las preguntas que un cliente tiene antes de contactar (con keywords de servicio específicas), la página de "sobre mí" que humaniza sin diluir el mensaje de negocio, las páginas de casos de éxito o portfolio que son el contenido más persuasivo y con mayor potencial de posicionamiento long-tail, y el blog que genera tráfico orgánico a largo plazo.

**3. El blog del freelance como motor de clientes**
El blog no es un diario personal ni una demostración de lo mucho que sabes; es la herramienta que posiciona en las búsquedas que hacen tus clientes antes de decidir contratar a alguien. Define la estrategia de contenido: los artículos que responden las preguntas que tus clientes tienen antes de contratarte (y que demuestran tu expertise de paso), el equilibrio entre artículos informativos (que atraen tráfico) y artículos de servicio (que convierten), la cadencia realista para un freelance que trabaja solo (un artículo bien escrito al mes es mejor que cuatro mediocres), y cómo cada artículo incluye un call to action natural hacia el contacto.

**4. SEO local para el freelance que trabaja con clientes en su ciudad**
Si tus clientes prefieren trabajar con alguien local, el SEO local es tu palanca más rápida. Define la estrategia: la optimización del perfil de Google Business Profile como profesional autónomo (la categoría correcta, la descripción optimizada, la gestión de reseñas de clientes anteriores), las páginas de landing local en el sitio web ("consultor de ventas freelance en Madrid"), y la presencia en directorios de profesionales que tienen autoridad y que Google muestra en los resultados locales.

**5. Link building para el freelance: cómo conseguir que te citen sin presupuesto**
El link building de un profesional independiente se basa en la autoridad de su expertise, no en el presupuesto. Define las tácticas que funcionan: el guest posting en publicaciones del sector donde trabajan tus clientes (que además te pone delante de la audiencia correcta), la aparición como fuente experta en artículos de prensa o newsletters del sector, los recursos gratuitos (templates, checklist, calculadoras) que otros publican y enlazan, las colaboraciones con freelances complementarios que se mencionan mutuamente, y el perfil optimizado en directorios de profesionales con alta autoridad (LinkedIn, Clutch, Fiverr si aplica, directorios de colegios profesionales).

**6. Medición del posicionamiento personal y el ROI del SEO**
Define cómo un freelance mide el impacto de su SEO en el negocio: las herramientas gratuitas para monitorizar posiciones (Google Search Console, Ubersuggest básico), cómo rastrear qué clientes llegan desde Google (la pregunta "¿cómo me encontraste?" en el formulario de contacto o en la llamada de descubrimiento), el valor en euros de los clientes que llegan de forma orgánica en un año (el argumento para invertir tiempo en SEO), y cómo equilibrar el tiempo dedicado al SEO con el tiempo dedicado a proyectos de clientes sin que ninguno de los dos sufra.

Termina con el plan de acción de los primeros 90 días para un freelance que empieza desde cero: las acciones por semana que construyen la base del posicionamiento orgánico y los primeros hitos que indican que la estrategia está funcionando.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Estrategia de SEO personal para que el freelance aparezca en Google y reciba consultas de clientes de forma orgánica.',
                'vote_score'       => 49,
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
