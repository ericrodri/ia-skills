<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills130Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'SEO para e-commerce',
                'description'       => 'Optimiza páginas de producto, categorías y schema de Product para llevar tráfico orgánico cualificado a tu tienda online.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor experto en SEO especializado en comercio electrónico con más de diez años de experiencia auditando y posicionando tiendas online en España y Latinoamérica. Voy a compartirte la URL de mi tienda (o la descripción de mi catálogo) y necesito que me guíes paso a paso en la estrategia SEO completa para e-commerce.

**Análisis inicial que necesito:**

Empieza evaluando la arquitectura de la información: cómo está organizada la jerarquía de categorías, subcategorías y páginas de producto. Dime si la estructura de URLs es limpia, si existe canonicalización correcta entre variantes de producto (tallas, colores) y si las breadcrumbs implementan correctamente el schema BreadcrumbList de Schema.org.

**Optimización de páginas de producto:**

Para cada tipo de página de producto, explícame cómo redactar títulos únicos que combinen la marca, el modelo, la categoría y el atributo diferenciador sin superar los 60 caracteres. Dame una plantilla para las meta-descriptions que destaquen el precio, la disponibilidad o el envío gratuito como gancho de CTR. Explica cómo estructurar el contenido de la ficha: heading H1 con keyword principal, descripción larga con LSI keywords, especificaciones técnicas en tabla, sección de reseñas y preguntas frecuentes generadas desde la intención de búsqueda de cola larga.

**Schema de Product:**

Detalla el marcado JSON-LD mínimo que debo implementar para que Google muestre rich snippets: precio, disponibilidad (InStock / OutOfStock), rating agregado (AggregateRating), SKU y marca. Incluye el campo «offers» con priceCurrency, priceValidUntil y la URL canónica. Explica las diferencias entre marcar un producto simple y un producto con variantes (ItemList + Product anidado).

**Páginas de categoría:**

Explica cómo optimizar las páginas de categoría más allá del listado de productos: texto editorial SEO en la parte superior (sin ocultar con «leer más» hasta que Google lo indexe), facetas de filtro con parámetros canónicos o noindex para evitar contenido duplicado, y paginación correcta con rel=next/prev o canonical a la página principal de categoría.

**Link building y autoridad para e-commerce:**

Dame tres tácticas específicas de link building para tiendas online: relaciones con medios de consumo y lifestyle, estrategia de producto de regalo para reseñas editoriales y creación de contenido de blog que atraiga enlaces naturales desde buscadores de deals y comparadores.

**Core Web Vitals aplicados al e-commerce:**

Identifica los puntos de mejora de LCP, CLS e INP más comunes en tiendas online: imágenes de producto sin lazy-load correcto, carruseles que causan layout shift, scripts de tracking que bloquean el hilo principal y el impacto de las fuentes tipográficas web.

**Seguimiento y métricas:**

Por último, dime qué métricas debo monitorizar en Google Search Console y Google Analytics 4 para e-commerce: impresiones y CTR por tipo de página, tasa de conversión por canal orgánico, ratio de páginas de producto indexadas vs crawleadas, y las alertas que debo configurar para detectar caídas de indexación tras cambios de catálogo.

Dame la respuesta estructurada por secciones y, cuando sea relevante, incluye ejemplos de código HTML/JSON-LD y plantillas de texto que pueda adaptar directamente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Auditoría y estrategia SEO completa para tiendas online',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Arquitectura de e-commerce backend',
                'description'       => 'Diseña los patrones de backend para carrito, inventario, pagos y gestión de pedidos que escalan desde el primer cliente hasta el Black Friday.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un arquitecto de software con experiencia en sistemas de comercio electrónico de alta disponibilidad. Necesito diseñar la arquitectura backend de una tienda online que empiece con tráfico moderado pero que deba soportar picos de hasta cincuenta veces la carga normal en eventos como el Black Friday o el lanzamiento de un producto viral.

**Módulo de carrito:**

Explícame las dos estrategias principales para persistir el carrito: almacenamiento en sesión (Redis) versus carrito persistido en base de datos vinculado al usuario. Analiza los trade-offs de cada enfoque en términos de consistencia, recuperación de carrito abandonado y rendimiento bajo carga. ¿Cómo gestiono el carrito para usuarios anónimos que luego se registran? ¿Qué estrategia de merge uso?

**Gestión de inventario:**

Describe los patrones para evitar overselling en escenarios de alta concurrencia. Explica la diferencia entre reservas optimistas (decremento al confirmar pago) y pesimistas (reserva al añadir al carrito con TTL). ¿Cuándo uso row-level locking en PostgreSQL versus un sistema de cola con worker exclusivo? Añade el patrón de inventario distribuido cuando hay múltiples almacenes o fulfillment centers.

**Procesamiento de pagos:**

Detalla la integración con proveedores de pago (Stripe, Redsys, PayPal) siguiendo el patrón de intención de pago: cómo creo la payment intent en el servidor, cómo confirmo del lado del cliente sin exponer claves privadas y cómo gestiono el webhook de confirmación de forma idempotente para no procesar el mismo pago dos veces. Incluye el manejo de 3DS2 y el flujo de reembolso.

**Gestión de pedidos (order management):**

Diseña la máquina de estados de un pedido: pending_payment → paid → processing → shipped → delivered → refunded / cancelled. ¿Qué eventos dispara cada transición? ¿Cómo implemento este patrón con event sourcing para tener auditoría completa? Explica cómo delego notificaciones (email, SMS, push) a workers asíncronos sin bloquear el flujo de checkout.

**Escalabilidad para picos de tráfico:**

Explica cómo preparar la arquitectura para el Black Friday: read replicas de base de datos para consultas de catálogo, caching de precios y stock con Redis (con invalidación selectiva cuando cambia el inventario), rate limiting en el endpoint de checkout y colas de procesamiento de pedidos con backpressure.

**Base de datos:**

Dame el esquema relacional mínimo viable con las tablas products, product_variants, inventory, carts, cart_items, orders, order_items, payments y las claves foráneas e índices necesarios para las consultas más frecuentes.

**APIs y contratos:**

¿Qué endpoints REST (o mutaciones GraphQL) debo exponer para el frontend? Describe los contratos de request/response del flujo crítico: añadir al carrito, iniciar checkout, confirmar pago y consultar estado del pedido. Incluye los códigos de error esperados y cómo el frontend debe manejar cada uno.

Estructura la respuesta con diagramas de flujo en texto (ASCII o Mermaid), ejemplos de schema SQL y pseudocódigo cuando sea necesario para ilustrar los patrones.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 90,
                'use_case'          => 'Diseño de arquitectura backend escalable para tiendas online',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'UX para e-commerce y reducción del abandono de carrito',
                'description'       => 'Diseña el embudo de compra que reduce el abandono del carrito optimizando imágenes de producto, elementos de confianza, checkout y recuperación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un diseñador UX especializado en comercio electrónico con experiencia demostrando mejoras de conversión medibles en tiendas online de España y Latinoamérica. Voy a describir mi tienda y necesito un análisis completo del embudo de compra y un plan de mejora priorizado por impacto.

**Diagnóstico del embudo actual:**

Empieza haciendo las preguntas clave que necesitas para entender la situación: ¿cuál es la tasa de conversión actual? ¿En qué paso del funnel se produce el mayor abandono? ¿Tenemos mapas de calor o grabaciones de sesión disponibles? ¿Cuál es el dispositivo mayoritario de los usuarios (mobile vs desktop)?

**Ficha de producto:**

Explica las mejores prácticas de diseño para la ficha de producto: la jerarquía visual de imágenes (galería principal, imágenes de detalle, vídeo de producto, foto de escala), el posicionamiento del botón de añadir al carrito (above the fold en desktop, sticky CTA en mobile), y cómo organizar la información: precio, disponibilidad, selector de variantes, descripción corta, beneficios, especificaciones y reseñas.

**Elementos de confianza:**

Dame un inventario completo de los elementos de confianza que más impactan en la conversión: badges de pago seguro, sellos de calidad, política de devoluciones visible sin hacer clic, testimonios con foto y verificación de compra, contador de unidades en stock («Solo quedan 3»), valoraciones con distribución de estrellas y número de reseñas, y el indicador de «otros usuarios están viendo este producto».

**Diseño del checkout:**

Detalla el diseño del flujo de checkout que minimiza la fricción: ¿cuántos pasos son óptimos? ¿Cómo implemento el guest checkout sin penalizar el registro? ¿Qué campos elimino del formulario de dirección para reducir el tiempo de cumplimentación? Explica el diseño del resumen de pedido siempre visible, el indicador de progreso y los mensajes de error en tiempo real en los campos del formulario.

**Recuperación del carrito abandonado:**

Diseña la estrategia de recuperación multicanal: email de recuperación (timing, asunto, contenido, llamada a la acción), retargeting en redes sociales con el producto abandonado, notificación push (si el usuario la autorizó) y el popup de exit-intent en desktop para capturar el email antes de que el usuario salga.

**Optimización mobile:**

Detalla los patrones específicos para mobile: el carousel de imágenes de producto táctil, el teclado numérico para campos de cantidad y tarjeta, el sticky header con el carrito y el CTA, y los errores de usabilidad más comunes en el checkout mobile (campos demasiado pequeños, no autocompletar la dirección, paso de pago que redirige fuera de la app).

**Pruebas A/B:**

Propón un plan de tres pruebas A/B priorizadas por facilidad de implementación e impacto esperado en la tasa de conversión, con las métricas que debo medir en cada prueba y el tamaño muestral mínimo para obtener resultados estadísticamente significativos.

Estructura el análisis con mockups en texto (descripción de layout), checklist de elementos por página y quick wins que puedo implementar esta semana sin rediseño completo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Reducción del abandono de carrito y optimización del embudo de compra',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Ventas en marketplaces: Amazon, MercadoLibre y Etsy',
                'description'       => 'Posiciona productos, gestiona reseñas y maximiza la visibilidad dentro del algoritmo de los principales marketplaces.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en ventas en marketplaces con experiencia gestionando cuentas de vendedor en Amazon (España y México), MercadoLibre y Etsy. Voy a compartirte mi catálogo de productos y necesito una estrategia completa para maximizar ventas en estos canales.

**Elección del marketplace:**

Empieza ayudándome a decidir en qué marketplace(s) debo enfocar mis esfuerzos. Analiza el fit entre mi tipo de producto (handmade, industrial, nicho creativo, electrónica, moda…) y la audiencia de cada plataforma. Dame los criterios de decisión: márgenes mínimos viables después de comisiones, volumen de búsquedas estimado por categoría y los requisitos de entrada de cada marketplace.

**Optimización del listing (algoritmo A9/A10 de Amazon):**

Explica los factores de ranking del algoritmo de Amazon: relevancia del título y bullets, velocidad de ventas, tasa de conversión, reseñas y su puntuación, y el impacto del PPC en el ranking orgánico. Dame plantillas para el título (marca + modelo + atributo clave + casos de uso), bullets (5 beneficios con keyword al inicio) y descripción con HTML básico.

**Backend keywords de Amazon:**

Detalla la estrategia de palabras clave para los campos ocultos: cómo identificarlas con herramientas como Helium 10 o Jungle Scout, el límite de bytes, qué NO incluir (palabras del título, marca registrada de competidores) y cómo monitorizar qué keywords me generan ventas.

**Algoritmo de MercadoLibre:**

Explica las diferencias con Amazon: el peso del precio en el posicionamiento, cómo el stack de Reputación del vendedor afecta la visibilidad, la importancia de las preguntas respondidas rápidamente, el envío MercadoEnvíos como factor de ranking y la estrategia de publicidad MercadoAds.

**Etsy para productos artesanales:**

Detalla las particularidades de Etsy: el rol de las fotos de estilo de vida (no solo product shots), el uso de los 13 tags con palabras de cola larga, la importancia de las reseñas y cómo pedirlas correctamente, y la estrategia de Etsy Ads con presupuesto limitado.

**Gestión de reseñas:**

Diseña un proceso para maximizar las reseñas positivas: email de seguimiento post-venta (qué decir y cuándo enviarlo), cómo responder reseñas negativas de forma que otros compradores vean profesionalidad, y las prácticas que están prohibidas en cada plataforma (no pedir reseñas a cambio de compensación).

**Estrategia de precio:**

Explica el repricing dinámico: cuándo tiene sentido automatizarlo, cómo calcular el precio mínimo viable incluyendo comisiones del marketplace, coste de publicidad (ACoS objetivo), fulfillment y el margen mínimo deseado. ¿Cómo compito en precio sin destruir mis márgenes?

**Métricas clave del vendedor:**

Dame un dashboard de las métricas que debo revisar semanalmente: tasa de conversión por listing, ACoS (Advertising Cost of Sales), Buy Box percentage en Amazon, tasa de defectos de cuenta y el índice de rotación de inventario.

Organiza la respuesta por marketplace con tablas comparativas cuando sea relevante y un plan de acción priorizado para las primeras cuatro semanas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Estrategia de ventas y posicionamiento en Amazon, MercadoLibre y Etsy',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product management en un marketplace de dos lados',
                'description'       => 'Navega los retos únicos de hacer producto cuando compradores y vendedores tienen intereses que a veces se contraponen.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Product Manager senior con experiencia en plataformas de dos lados (marketplaces, plataformas de servicios). Estoy construyendo un marketplace y necesito entender los retos únicos de gestionar producto cuando tengo dos tipos de usuarios con intereses que a veces se contraponen.

**El problema fundamental del marketplace:**

Explícame el problema del huevo y la gallina: ¿cómo consigo vendedores sin compradores y compradores sin vendedores? Dame las estrategias clásicas para romper este círculo: fake-it-til-you-make-it (contenido sembrado), single-player mode (valor para un solo lado), foco geográfico o de nicho, y la estrategia del subsidio a uno de los lados.

**Métricas duales:**

¿Cómo defino el éxito cuando tengo dos tipos de clientes? Explica las métricas North Star de un marketplace: GMV (Gross Merchandise Volume), take rate, liquidez (ratio de compradores activos / vendedores activos), tiempo hasta primera transacción por nuevo vendedor y NPS diferenciado por lado. ¿Cuándo optimizo para un lado y cuándo para el equilibrio?

**Conflictos de interés:**

Dame ejemplos concretos de conflictos entre compradores y vendedores y cómo los gestiono como PM: el comprador quiere precios bajos / el vendedor quiere margen; el comprador quiere devoluciones fáciles / el vendedor quiere evitar abusos; el comprador quiere velocidad / el vendedor quiere tiempo para preparar el pedido. ¿Cómo decido cuándo favor a quién?

**Trust and Safety:**

Explica el sistema de confianza del marketplace: el rol de las reseñas bidireccionales, los sistemas de verificación de identidad, la política de resolución de disputas, el seguro de compra y cómo diseño los incentivos para que ambos lados se comporten bien sin policía constante.

**Priorización con dos backlogs:**

¿Cómo gestiono un backlog cuando cada feature puede ayudar a un lado y perjudicar al otro? Dame un framework de priorización que incorpore el impacto en ambos lados, el efecto en el equilibrio del marketplace y los riesgos de desintermediación (cuando compradores y vendedores se van fuera de la plataforma).

**Diseño de la take rate:**

Explica las estrategias de monetización del marketplace: comisión sobre transacción (fija vs porcentual), membresía del vendedor, publicidad dentro de la plataforma, servicios de valor añadido (fulfillment, financiación, seguros). ¿Cómo fijo la take rate sin alejar a los mejores vendedores?

**Comunicación con stakeholders:**

¿Cómo presento el roadmap a inversores cuando el progreso de un marketplace se mide de forma diferente a un SaaS tradicional? Dame la narrativa de métricas que muestra la salud del marketplace y el camino hacia la liquidez y la escala.

Incluye frameworks visuales (en texto) para los principales trade-offs y casos de uso reales de marketplaces conocidos (Airbnb, Etsy, Fiverr, Wallapop) que ilustren cada punto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 70,
                'use_case'          => 'Estrategia de producto para marketplaces de dos lados',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Talento en e-commerce: perfiles difíciles de encontrar',
                'description'       => 'Atrae y retén data analysts, growth hackers y especialistas en logística en empresas de comercio electrónico.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Director de Personas con experiencia en empresas de e-commerce en crecimiento. Necesito ayuda para encontrar, evaluar y retener los perfiles más escasos y críticos del sector: analistas de datos, growth hackers y especialistas en logística y operaciones.

**Mapa de perfiles críticos en e-commerce:**

Empieza describiéndome los cinco perfiles más difíciles de encontrar en empresas de comercio electrónico y por qué escasean: qué habilidades combinadas requieren, dónde suelen estar trabajando actualmente y qué salarios de mercado manejan en España y Latinoamérica.

**Perfil: Data Analyst / E-commerce Analyst:**

Explica las habilidades técnicas reales que necesito (SQL avanzado, Python o R para análisis, Google Analytics 4, herramientas de BI como Looker o Power BI) versus las que suenan bien en el papel pero no son críticas. Dame las preguntas de entrevista técnica que distinguen a un analista que sabe SQL básico de uno que puede hacer análisis de cohortes de retención, RFM de clientes y análisis de cesta de la compra.

**Perfil: Growth Hacker / Performance Marketer:**

Define exactamente qué habilidades combina este perfil en e-commerce: SEM (Google Ads, Meta Ads, TikTok Ads), atribución multicanal, CRO y email marketing automatizado. ¿Cómo evalúo en la entrevista si de verdad ha gestionado presupuestos significativos con ROAS positivo o si solo ha ejecutado campañas básicas supervisado por una agencia?

**Perfil: Especialista en Logística / Supply Chain:**

Describe las competencias del especialista en logística de e-commerce: negociación con transportistas, gestión de almacén (WMS), coordinación de fulfillment centers, gestión de devoluciones y los ratios que sabe manejar (coste por envío, tasa de entrega a tiempo, tasa de devoluciones).

**Estrategia de sourcing:**

¿Dónde encuentro estos perfiles? Dame canales específicos más allá de LinkedIn: comunidades de Slack de e-commerce, eventos (Meet Commerce, E-show), grupos de Facebook y Telegram, bootcamps que forman estos perfiles, y la estrategia de employer branding que atrae a candidatos pasivos.

**Evaluación y prueba técnica:**

Diseña una prueba técnica de toma a casa de menos de cuatro horas para cada uno de los tres perfiles, que sea representativa del trabajo real y no genérica. Incluye los criterios de evaluación que uso para diferenciar candidatos excelentes de buenos.

**Retención:**

¿Qué hace que estos perfiles se vayan? Explica los factores de retención específicos del sector e-commerce: acceso a datos reales y autonomía para explorar, stack tecnológico moderno, visibilidad de impacto en métricas de negocio, progresión de carrera y el salario variable ligado a KPIs de negocio.

Dame una guía de contratación para cada perfil con job description tipo, preguntas de entrevista, prueba técnica y onboarding recomendado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Contratación y retención de perfiles técnicos de e-commerce',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Unit economics del e-commerce',
                'description'       => 'Calcula CAC, LTV, margen bruto por canal y construye el modelo de rentabilidad que muestra si tu tienda escala o pierde dinero por volumen.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CFO con experiencia en empresas de e-commerce que han pasado por fases de crecimiento agresivo y necesitaban entender si su modelo de negocio era rentable o estaban creciendo para perder más dinero. Necesito construir el modelo de unit economics de mi tienda online.

**Definición de la unidad de análisis:**

Explícame por qué en e-commerce la unidad no es el pedido sino el cliente a lo largo del tiempo. ¿Cuál es la diferencia entre analizar el margen por pedido y analizar el LTV del cliente? ¿Cuándo tiene sentido adquirir un cliente por encima del margen del primer pedido?

**Coste de Adquisición de Cliente (CAC):**

Ayúdame a calcular el CAC real, no solo el de marketing: incluye el coste del equipo de marketing, la tecnología (plataforma de e-mail, CRM, herramientas de analítica), las devoluciones de los primeros pedidos y el coste del servicio al cliente en la fase de onboarding. ¿Cómo calculo el CAC por canal (Google Ads, Meta Ads, SEO, email, marketplace) y qué me dice la diferencia entre ellos?

**Lifetime Value (LTV):**

Detalla el cálculo del LTV: frecuencia de compra promedio, valor del pedido promedio, margen bruto por pedido y tasa de churn de clientes. Dame la fórmula simple y la fórmula avanzada con descuento temporal. ¿Cómo segmento el LTV por cohorte de adquisición, canal de origen y categoría de producto?

**Margen bruto por canal:**

Explica cómo construyo la cuenta de resultados por canal de venta: tienda propia, Amazon, MercadoLibre y ventas al por mayor. Incluye las comisiones de marketplace, los costes de shipping, el coste de fulfillment y las devoluciones en cada canal para obtener el margen neto real.

**El modelo de rentabilidad a escala:**

Construye conmigo el modelo que muestra si mi negocio escala de forma rentable: ¿en qué punto el margen de contribución por cliente supera el CAC? ¿Cuál es el payback period (meses para recuperar el CAC) y qué nivel es saludable en e-commerce? ¿Cómo cambia el unit economics cuando escalo: el CAC sube, el LTV mejora por recompra o el margen baja por descuentos de volumen?

**Señales de alerta:**

Dame los indicadores que me dicen que estoy «creciendo para perder»: LTV/CAC menor de 3, payback period mayor de doce meses, margen bruto que cae mientras crecen los ingresos, alta concentración de clientes de un solo pedido y coste de devoluciones que destruye el margen de categorías concretas.

**Dashboard financiero:**

Diseña el dashboard de unit economics que reviso mensualmente: las métricas clave por canal, la evolución de las cohortes de clientes, el margen de contribución total y por categoría, y las palancas de mejora ordenadas por impacto.

Dame ejemplos numéricos con dos escenarios (negocio sano vs negocio que aparenta crecer pero pierde) para que pueda comparar y entender dónde está el mío.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 75,
                'use_case'          => 'Modelo de unit economics y rentabilidad para tiendas online',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal del e-commerce en España y LATAM',
                'description'       => 'Política de devoluciones, derechos del consumidor, marketplace liability y cumplimiento de la normativa de comercio electrónico.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en derecho del comercio electrónico con experiencia en España (normativa europea) y Latinoamérica (México, Colombia, Argentina, Chile). Necesito entender el marco legal completo que afecta a mi tienda online y qué documentos y procesos debo tener en orden para operar con seguridad jurídica.

**Marco normativo en España:**

Explícame las normas principales que afectan a las tiendas online en España: la LSSI (Ley de Servicios de la Sociedad de la Información), la LGDCU (Ley General para la Defensa de los Consumidores y Usuarios), el RGPD para protección de datos y el nuevo Reglamento de Mercados Digitales (DMA) y Reglamento de Servicios Digitales (DSA) de la UE. ¿Qué parte de cada norma impacta directamente en mi operación diaria?

**Derecho de desistimiento:**

Detalla las obligaciones sobre el derecho de desistimiento en España y la UE: el plazo de 14 días naturales, cómo informar al consumidor antes de la compra, el formulario normalizado de desistimiento, las excepciones (productos personalizados, contenido digital descargado) y el proceso de reembolso incluyendo los costes de devolución.

**Política de devoluciones:**

Ayúdame a redactar una política de devoluciones que sea legalmente correcta, clara para el consumidor y razonable para el negocio: qué debe incluir obligatoriamente, qué puedo limitar y qué no, cómo gestionar las devoluciones de productos defectuosos (garantía legal de 3 años en España) versus las devoluciones por desistimiento.

**Marco en Latinoamérica:**

Compara las obligaciones del comercio electrónico en México (PROFECO, NOM-051), Colombia (Estatuto del Consumidor), Argentina (Ley de Defensa del Consumidor) y Chile (Ley del Consumidor). ¿Cuáles son las diferencias más relevantes en plazos de devolución, garantías y requisitos de información precontractual?

**Marketplace liability:**

Si opero como marketplace (facilito ventas de terceros), explícame mi exposición legal: ¿soy responsable de los productos defectuosos que venden terceros en mi plataforma? ¿Qué ocurre con el fraude de vendedores? ¿Qué cláusulas debo incluir en el contrato con vendedores para limitar mi responsabilidad y qué sistemas de verificación me protegen?

**Privacidad y cookies:**

Dame los requisitos de la política de privacidad para un e-commerce bajo el RGPD: los datos que recojo en el proceso de compra, las bases legales del tratamiento, los terceros con los que comparto datos (pasarelas de pago, transportistas, plataformas de publicidad) y cómo debo configurar el banner de cookies para cumplir con la guía de la AEPD.

**Documentos que debo tener:**

Dame un checklist legal completo: Aviso Legal, Política de Privacidad, Política de Cookies, Condiciones Generales de Venta, Política de Devoluciones, acuerdo con vendedores (si soy marketplace) y los registros que debo mantener para demostrar el consentimiento del usuario.

Redacta los puntos clave de cada documento con el lenguaje que debe incluir, de forma que pueda usarlo como base para la revisión con un abogado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 60,
                'use_case'          => 'Cumplimiento legal de tiendas online en España y LATAM',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Soporte en e-commerce: devoluciones, reclamaciones y picos de temporada',
                'description'       => 'Gestiona devoluciones, fraude y los picos de soporte de temporada alta sin escalar el equipo ilimitadamente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Director de Customer Experience con experiencia en empresas de e-commerce que han gestionado temporadas de Black Friday, Navidad y rebajas sin que el equipo de soporte colapse. Necesito diseñar un sistema de soporte escalable para mi tienda online.

**Diagnóstico de la operación actual:**

Empieza haciendo un diagnóstico: ¿cuáles son los motivos de contacto más frecuentes en e-commerce (estado del pedido, devolución, producto dañado, falta de entrega, fraude, problemas de pago)? ¿Cuál es la distribución típica por canal (email, chat, teléfono, redes sociales) y cómo varía en temporada alta?

**Gestión de devoluciones:**

Diseña el proceso de devolución de principio a fin: el portal de autoservicio para que el cliente inicie la devolución sin contactar al equipo, los criterios de aceptación automática versus revisión manual, el proceso de inspección del producto devuelto, los tiempos de reembolso y cómo comunico el estado al cliente en cada paso. ¿Cómo detecto y gestiono el fraude de devoluciones (devolver el producto incorrecto, usar el producto antes de devolver)?

**Gestión de reclamaciones:**

Dame el árbol de decisión para las reclamaciones más comunes: pedido no recibido (¿investigación con transportista o reenvío directo?), producto defectuoso (¿reparación, reenvío o reembolso?), producto incorrecto, daño en el transporte y problemas con el pago. Define los umbrales de autorización por nivel de agente y los casos que escalan al supervisor.

**Prevención y detección de fraude:**

Explica las señales de fraude en e-commerce que debe reconocer el equipo de soporte: pedidos desde IPs sospechosas, patrones de devolución abusiva, uso de tarjetas robadas (chargebacks), y la coordinación con el equipo de pagos. ¿Cómo documento y reporto patrones de fraude para mejorar los filtros automáticos?

**Preparación para temporada alta:**

Diseña el plan de capacidad para el Black Friday y la campaña de Navidad: la previsión de volumen de contactos (basada en el ratio histórico de contactos por pedido), la contratación temporal de agentes, los materiales de formación acelerada para nuevos agentes (las veinte situaciones más frecuentes con respuesta tipo) y el sistema de monitorización en tiempo real para detectar picos inesperados.

**Self-service y automatización:**

¿Qué porcentaje del volumen de contactos puedo resolver con autoservicio? Dame las categorías que se prestan a automatización: rastreo del pedido en tiempo real, inicio de devolución, FAQ dinámica con búsqueda, chatbot para consultas de estado y los límites donde el bot debe escalar a humano.

**Métricas de soporte en e-commerce:**

Define el dashboard que mido semanalmente: CSAT post-resolución, tiempo de primera respuesta por canal, tasa de resolución en primer contacto (FCR), tasa de contacto por pedido, coste por contacto y NPS separado de la experiencia de compra versus la experiencia de soporte.

Dame un plan de acción por fases: lo que implemento antes de mi próxima campaña de temporada (cuatro semanas), lo que construyo en los siguientes tres meses y lo que es una inversión para el siguiente año.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Operación de soporte escalable para e-commerce en temporada alta',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Consultor de e-commerce freelance: modelo de negocio y clientes',
                'description'       => 'Lanza y mantén proyectos de e-commerce como freelance: servicios, precios, retención y las plataformas más demandadas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de e-commerce freelance con cartera de clientes consolidada y experiencia pasando de proyectos únicos a relaciones de retención mensual. Quiero construir o mejorar mi negocio de consultoría de e-commerce y necesito una guía completa del modelo de negocio.

**Definición de la propuesta de valor:**

Ayúdame a definir mi especialización: ¿qué es mejor, ser el generalista de e-commerce que hace de todo o el especialista en un área concreta (SEO para tiendas, CRO, implementación de Shopify, estrategia en marketplaces, automatización de marketing)? Explica los trade-offs de cada posicionamiento en términos de precio, competencia y facilidad de encontrar clientes.

**Servicios y estructura de precios:**

Diseña el catálogo de servicios de un consultor de e-commerce: auditorías (tienda completa, SEO, conversión, analítica), proyectos de lanzamiento (montar la tienda desde cero en Shopify / WooCommerce / PrestaShop), integraciones (ERP, CRM, pasarelas de pago, logística), y servicios de retención mensual (gestión de campañas, reporting, optimización continua). Dame rangos de precio de mercado en España y Latinoamérica para cada uno.

**Las plataformas más demandadas:**

¿En qué plataformas debo especializarme para maximizar la demanda de clientes? Compara Shopify (ideal para quién, márgenes del partner program), WooCommerce (cuándo tiene sentido frente a Shopify), PrestaShop (relevancia actual en España), Magento/Adobe Commerce (proyectos enterprise), y las plataformas de marketplaces (Amazon Seller Central, MercadoLibre). ¿Vale la pena hacerse partner certificado de alguna?

**Cómo conseguir los primeros clientes:**

Dame las estrategias de prospección que funcionan en e-commerce: LinkedIn targeting a CEOs y directores de marketing de PYMES con tienda online, partnerships con agencias de diseño web que no hacen e-commerce, apariciones en podcasts del sector, y el caso de estudio del primer cliente como base de toda la estrategia de contenido.

**Gestión de proyectos de lanzamiento:**

Detalla el proceso de un proyecto de lanzamiento de tienda online: discovery (qué preguntas hago al cliente para definir el scope), propuesta económica con hitos de pago, fases del proyecto (arquitectura, diseño, desarrollo, migración de datos, testing, lanzamiento), y cómo gestiono el scope creep que invariablemente aparece.

**Conversión a retención mensual:**

Explica cómo convierto un proyecto puntual en un contrato de retención: qué servicios de valor continuo ofrezco (gestión de campañas, análisis mensual de datos, optimización CRO, soporte técnico), cómo lo precio (tarifa plana vs horas), y el pitch que uso al final del proyecto para proponer la continuidad.

**Protección legal del freelance:**

¿Qué contratos necesito? Dame las cláusulas imprescindibles en el contrato de servicios de e-commerce: definición de entregables, propiedad intelectual del código, confidencialidad, condiciones de pago (anticipo mínimo del 40%), límite de responsabilidad y la cláusula de mantenimiento post-lanzamiento.

Dame un plan de noventa días para pasar de cero o de proyectos dispersos a una cartera de tres clientes en retención mensual con ingresos predecibles.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 40,
                'use_case'          => 'Modelo de negocio y captación de clientes para consultores de e-commerce',
                'vote_score'        => 33,
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
