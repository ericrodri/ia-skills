<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills555Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de marketing omnicanal para retail y ecommerce con IA',
                'description'      => 'Diseña una estrategia de marketing integrada que conecte la experiencia de compra online y offline para maximizar ventas y fidelización de clientes en retail.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Marketing especializado en retail omnicanal y comercio electrónico, con experiencia en la integración de experiencias de compra físicas y digitales, automatización de marketing y personalización a escala.

Contexto de la empresa:
- Tipo de retailer: [Moda, electrónica, hogar, alimentación, deportes, etc.]
- Canales actuales: [Tiendas físicas (número), ecommerce propio, marketplaces, app móvil]
- Volumen de clientes: [Base de clientes activos, transacciones mensuales]
- Ticket promedio: [Valor de la compra media online y offline]
- Presupuesto de marketing: [Porcentaje sobre ventas o cifra mensual]
- Madurez omnicanal actual: [Sin integración / Integración básica / Omnicanal avanzado]

Objetivo: Crear una estrategia de marketing que integre todos los canales de venta y comunicación, personalizando la experiencia del cliente en cada punto de contacto para aumentar la conversión y el valor de vida del cliente (LTV).

Desarrolla la estrategia completa:

1. DIAGNÓSTICO DE LA EXPERIENCIA OMNICANAL
- Mapa del Customer Journey actual: puntos de contacto online y offline y su secuencia típica
- Identificación de fricciones y desconexiones entre canales
- Análisis de los patrones de compra: clientes puramente online, puramente offline y omnicanal
- Benchmark de mejores prácticas omnicanal del sector (ejemplos por tipo de retailer)
- Brecha entre experiencia actual y experiencia objetivo

2. ESTRATEGIA DE DATOS Y PERFIL UNIFICADO DEL CLIENTE
- Fuentes de datos a integrar: POS, ecommerce, app, email, redes sociales, programa de fidelización
- Arquitectura de Customer Data Platform (CDP) o equivalente para unificar perfiles
- Política de recopilación de datos con consentimiento (cookieless, first-party data)
- Segmentación avanzada: RFM enriquecida con comportamiento multicanal
- Personalización en tiempo real: qué datos usar y en qué momentos del journey

3. ESTRATEGIA POR CANAL
Para cada canal define objetivos, tácticas y KPIs:
- Tienda física: cómo usar datos digitales para personalizar la experiencia presencial
- Ecommerce: optimización de conversión, personalización de homepage y producto, recuperación de carritos
- App móvil: push notifications personalizadas, programa de loyalty gamificado, click-and-collect
- Email marketing: segmentación avanzada, automatizaciones por comportamiento, flujos de lifecycle
- Redes sociales: social commerce, UGC, retargeting dinámico con catálogo de productos
- Marketplaces: estrategia de pricing, gestión de reseñas, publicidad dentro de plataforma

4. AUTOMATIZACIONES DE MARKETING CLAVE
Define los 10 flujos automáticos más importantes:
- Bienvenida a nuevo cliente online (secuencia 7 días)
- Recuperación de carrito abandonado (3 touchpoints en 48 horas)
- Post-compra: confirmación, envío, entrega, review y upsell
- Reactivación de clientes inactivos (sin compra en 90 días)
- Programa de fidelización: puntos, niveles, recompensas y notificaciones
- Cumpleaños y fechas especiales
- Browse abandonment: visitaron producto sin añadir al carrito
- Replenishment: recordatorio de recompra para productos de consumo recurrente
- Campaña de referidos: invitar a amigos con incentivo
- Cross-sell inteligente basado en historial de compra

5. ESTRATEGIA DE PROMOCIONES Y CALENDARIO RETAIL
- Arquitectura de promociones: descuentos, bundles, envío gratuito, regalos
- Calendario de campañas: Black Friday, Navidad, Reyes, Día de la Madre, back to school
- Personalización de ofertas: cómo adaptar el descuento al segmento sin erosionar margen
- Gestión de la escasez y urgencia: mejores prácticas y errores a evitar
- A/B testing de ofertas: qué testear y cómo interpretar resultados

6. MÉTRICAS Y ATRIBUCIÓN OMNICANAL
- KPIs por canal y métricas de integración (tasa de compra omnicanal, LTV por segmento)
- Modelo de atribución multitoque para entender el peso real de cada canal
- Dashboard de marketing omnicanal: datos clave para revisión semanal
- Análisis de cohortes: comportamiento de clientes por mes de adquisición
- ROAS por canal y eficiencia del mix de inversión

7. PLAN DE IMPLEMENTACIÓN
- Fase 1 (Mes 1-2): integración de datos y segmentación básica
- Fase 2 (Mes 3-4): automatizaciones core y personalización básica
- Fase 3 (Mes 5-6): personalización avanzada y optimización de canal pagado
- Recursos necesarios: equipo, tecnología y presupuesto por fase

Entrega la estrategia con ejemplos de asuntos de email, segmentos de audiencia definidos y calendario editorial del primer trimestre.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Marketing omnicanal integrado para retail y comercio electrónico',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura de plataforma ecommerce escalable con IA',
                'description'      => 'Diseña la arquitectura técnica de una plataforma de comercio electrónico escalable que soporte picos de tráfico, personalización y operaciones omnicanal.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software especializado en plataformas de comercio electrónico a gran escala, con experiencia en arquitecturas headless, microservicios para retail y optimización de rendimiento bajo picos de tráfico como Black Friday o lanzamientos de producto.

Contexto del proyecto:
- Tipo de comercio: [B2C, B2B, marketplace, DTC directo a consumidor]
- Volumen actual y objetivo: [Pedidos por día, usuarios concurrentes en pico]
- Stack actual (si existe): [Magento, Shopify, WooCommerce, custom]
- Canales de venta: [Web, app móvil, marketplaces, punto de venta físico]
- Requisitos especiales: [Internacionalización, multi-divisa, catálogos complejos, suscripciones]
- Equipo de desarrollo: [Número de devs, perfiles, metodología]

Objetivo: Diseñar una arquitectura robusta, escalable y mantenible que soporte el crecimiento del negocio, los picos de demanda y la evolución hacia capacidades omnicanal avanzadas.

Desarrolla la arquitectura completa:

1. DECISIÓN ARQUITECTÓNICA FUNDAMENTAL
Analiza las tres opciones principales con pros y contras para el contexto:
- Plataforma SaaS all-in-one (Shopify Plus, BigCommerce B2B, Salesforce Commerce)
- Headless commerce con frontend desacoplado (Next.js + Medusa, Remix + Commerce Layer)
- Arquitectura custom con microservicios especializados
Recomendación justificada basada en el contexto del proyecto

2. COMPONENTES PRINCIPALES Y RESPONSABILIDADES
Define cada servicio con sus responsabilidades, tecnologías recomendadas e interfaces:
- Catálogo de productos: gestión de SKUs, variantes, precios, inventario
- Motor de búsqueda y descubrimiento: Elasticsearch/Algolia, filtros facetados, búsqueda semántica
- Carrito y sesión: persistencia, cálculo de precios, cupones y promociones
- Checkout y pagos: flujo optimizado, pasarelas de pago (Stripe, Redsys, Braintree), fraud detection
- Gestión de pedidos (OMS): estados, fulfillment, devoluciones, multi-almacén
- Inventario en tiempo real: sincronización omnicanal, reservas, alertas de stock
- Motor de personalización y recomendaciones: algoritmos de recomendación por comportamiento
- Sistema de notificaciones: email transaccional, SMS, push, webhooks

3. INTEGRACIÓN CON SISTEMAS EXTERNOS
Estrategia de integración y herramientas para:
- ERP: sincronización de inventario, precios y datos de clientes
- CRM / CDP: perfil unificado del cliente para personalización
- WMS (almacén): transmisión de pedidos y confirmación de envío
- Transportistas: integración con APIs de shipping (Correos, MRW, DHL, UPS)
- Marketplaces: Amazon, El Corte Inglés, Miravia (sincronización de catálogo y pedidos)
- Plataformas de marketing: email, push, retargeting

4. RENDIMIENTO Y ESCALABILIDAD
- Estrategia de CDN para assets estáticos y páginas cacheadas
- Caché multinivel: CDN, aplicación, base de datos
- Arquitectura de base de datos para alta concurrencia: réplicas de lectura, sharding
- Queue y procesamiento asíncrono para operaciones no críticas (emails, reportes, sincronizaciones)
- Auto-scaling en cloud: definición de triggers y comportamiento durante picos
- Pruebas de carga: cómo simular Black Friday antes de que ocurra

5. EXPERIENCIA DEL CLIENTE Y PERFORMANCE WEB
- Core Web Vitals: objetivos y técnicas para cumplirlos en ecommerce
- Estrategia de imágenes: formatos modernos, lazy loading, responsive images
- Optimización del checkout: reducción de pasos, guest checkout, one-click recompra
- PWA y app nativa: cuándo tiene sentido cada opción
- Accesibilidad (WCAG 2.1) en el flujo de compra: por qué importa y cómo implementarla

6. SEGURIDAD EN ECOMMERCE
- Protección de datos de pago: PCI-DSS y tokenización
- Prevención de fraude: señales de riesgo, verificación de dirección, 3DS2
- Protección contra bots: scraping, credential stuffing, cart hoarding
- WAF y protección DDoS para tráfico de pico
- Gestión segura de credenciales y secrets en entorno cloud

7. PLAN DE MIGRACIÓN O LANZAMIENTO
Para proyectos de migración:
- Estrategia de migración de datos: clientes, historial de pedidos, catálogo, SEO
- Migración de SEO: redirects, preservación de posiciones
- Plan de rollback en caso de problemas
- Período de funcionamiento paralelo y criterios de corte definitivo

Para nuevos proyectos:
- MVP técnico en 3 meses: qué incluir y qué dejar para después
- Fases de crecimiento de la arquitectura

Incluye diagramas de arquitectura descritos en texto estructurado, decisiones de diseño justificadas y estimaciones de costo de infraestructura cloud para distintos volúmenes de tráfico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseño de arquitectura técnica para plataformas de comercio electrónico escalables',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencia de compra digital para ecommerce con IA',
                'description'      => 'Optimiza el diseño de la experiencia de compra en una tienda online para maximizar la conversión, reducir el abandono y crear una experiencia memorable.',
                'prompt_content'   => <<<'EOT'
Actúa como un UX Designer especializado en comercio electrónico y optimización de la conversión (CRO), con experiencia en el diseño de experiencias de compra que equilibran la estética de marca con la máxima eficacia comercial.

Contexto de la tienda:
- Tipo de producto: [Moda, electrónica, hogar, alimentación gourmet, cosmética, etc.]
- Público objetivo: [Perfil demográfico y psicográfico del comprador principal]
- Tasa de conversión actual: [Porcentaje actual vs. objetivo]
- Principales páginas con alta tasa de abandono: [Producto, carrito, checkout, búsqueda]
- Dispositivo predominante: [Mobile-first, desktop, mixto]
- Plataforma: [Shopify, Magento, WooCommerce, desarrollo a medida]

Objetivo: Rediseñar la experiencia de compra digital para aumentar la tasa de conversión, reducir el abandono de carrito y mejorar la satisfacción del cliente durante el proceso de compra.

Desarrolla el análisis y propuesta de diseño completa:

1. AUDITORÍA DE LA EXPERIENCIA ACTUAL
- Framework heurístico de evaluación de ecommerce (10 criterios con puntuación)
- Análisis del funnel: dónde se producen las mayores caídas y por qué
- Revisión de grabaciones de sesión: patrones de comportamiento más comunes
- Análisis de búsquedas internas: qué buscan los usuarios y si lo encuentran
- Benchmark de las tres tiendas de referencia del sector con mejores prácticas identificadas

2. REDISEÑO DE LA PÁGINA DE PRODUCTO (PDP)
La página de producto es el corazón del ecommerce. Define:
- Jerarquía visual: orden y peso de cada elemento (imágenes, precio, CTA, descripción)
- Galería de imágenes: número óptimo, ángulos, zoom, video de producto, realidad aumentada
- Información de precio: formato, precios tachados, ahorro destacado, precio por unidad
- Selector de variantes (talla, color, cantidad): mejores prácticas de interacción
- CTA principal: texto, color, posición, comportamiento sticky en mobile
- Social proof: reseñas, calificaciones, número de compras, preguntas y respuestas
- Disponibilidad y urgencia: stock bajo, entregas, devoluciones gratuitas
- Sección de productos relacionados y recomendaciones

3. OPTIMIZACIÓN DEL CARRITO
- Diseño del mini-carrito lateral (drawer) vs. página de carrito completa
- Elementos que reducen el abandono: resumen de pedido claro, costos de envío visibles
- Módulo de descuento: cómo diseñarlo sin que distraiga del flujo de compra
- Recomendaciones de upsell en el carrito sin interrumpir la compra
- Barra de progreso hacia envío gratuito: diseño e impacto en ticket medio

4. REDISEÑO DEL CHECKOUT
El checkout es donde más dinero se pierde. Optimiza:
- Estructura de pasos: one-page checkout vs. multipaso con barra de progreso
- Guest checkout vs. login: cuándo mostrar cada opción y cómo diseñarlo
- Formularios: longitud mínima, autocompletado, validación en tiempo real, diseño mobile
- Resumen de pedido persistente y accesible durante todo el proceso
- Métodos de pago: orden de presentación, wallets (Apple Pay, Google Pay, Bizum)
- Trust signals en checkout: certificado SSL visible, logos de métodos de pago, garantías
- Página de confirmación de pedido: elementos que refuerzan la satisfacción y el cross-sell

5. OPTIMIZACIÓN PARA MOBILE
El móvil supera al desktop en tráfico en retail. Define:
- Gestos táctiles: swipe en galería, doble toque en zoom, deslizamiento de variantes
- Teclados contextuales para formularios: numérico para tarjeta, email para login
- Thumb zone: posición óptima de CTAs en pantallas de distintos tamaños
- Velocidad de carga: imágenes optimizadas, skeleton screens, infinite scroll vs. paginación
- Bottom navigation: elementos fijos y su jerarquía en mobile

6. PERSONALIZACIÓN Y RECOMENDACIONES VISUALES
- Algoritmos de recomendación y cómo traducirlos en componentes de UI
- Personalización de la homepage según comportamiento previo
- Búsqueda visual: cómo diseñar la interfaz de búsqueda por imagen
- Historial de navegación y lista de deseos: diseño y accesibilidad
- Email transaccional: diseño de confirmación de pedido y seguimiento de envío

7. SISTEMA DE PRUEBAS Y OPTIMIZACIÓN
- Priorización de pruebas A/B: qué testear primero según impacto esperado
- Métricas de éxito para cada prueba: qué mide si el rediseño funcionó
- Duración mínima de las pruebas para resultados estadísticamente significativos
- Plan de optimización continua: ciclo mensual de análisis, hipótesis, test y aprendizaje

Entrega el análisis con wireframes descritos en detalle, justificación de cada decisión de diseño en base a datos o mejores prácticas del sector, y lista priorizada de mejoras por impacto en conversión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Optimización de la experiencia de compra y conversión en tiendas online',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de ventas en marketplaces y canales digitales con IA',
                'description'      => 'Diseña una estrategia completa para vender en Amazon, marketplaces locales y redes sociales de forma rentable, optimizando listings y publicidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en ventas en marketplaces y comercio social con experiencia en gestión de cuentas de vendedor en Amazon, plataformas europeas y estrategias de venta a través de redes sociales como Instagram Shopping y TikTok Shop.

Contexto del vendedor:
- Tipo de producto: [Categoría, precio, margen bruto, peso y dimensiones]
- Canales actuales: [Amazon, eBay, Miravia, El Corte Inglés Online, propio ecommerce]
- Volumen de ventas mensual: [Unidades y facturación por canal]
- Estructura de precios: [PVP, precio de coste, margen deseado]
- Competencia en marketplace: [Número de competidores, precio más bajo del mercado]
- Equipo: [Número de personas gestionando marketplaces]

Objetivo: Maximizar las ventas y rentabilidad en marketplaces y canales digitales mediante una estrategia de listings optimizados, precios dinámicos, publicidad eficiente y gestión de reputación.

Desarrolla la estrategia completa:

1. ANÁLISIS DE OPORTUNIDAD POR MARKETPLACE
Para cada plataforma relevante, evalúa:
- Volumen de mercado para la categoría del producto
- Estructura de comisiones y costos logísticos (FBA vs. FBM en Amazon, equivalentes en otros)
- Nivel de competencia y posibilidad de ganar la Buy Box o posición destacada
- Requisitos de entrada: documentación, imágenes, nivel de servicio mínimo
- Recomendación de prioridad: por cuál empezar y en qué orden expandirse

2. OPTIMIZACIÓN DE LISTINGS (SEO EN MARKETPLACE)
Para el listing de cada producto define:
- Investigación de palabras clave: herramientas a usar y criterios de selección (volumen, competencia, relevancia)
- Título optimizado: estructura, longitud y elementos obligatorios por marketplace
- Bullet points / características clave: qué incluir en cada punto y cómo redactarlos
- Descripción y A+ Content (Amazon): estructura narrativa y elementos visuales
- Backend keywords: palabras que no caben en el texto visible
- Imágenes: número óptimo, tipo de fotografía principal, infográficos, imágenes de lifestyle
- Precio inicial y estrategia de posicionamiento

3. GESTIÓN DE PRECIOS Y RENTABILIDAD
- Cálculo de rentabilidad por unidad: precio de coste, comisión, logística, publicidad, devoluciones
- Estrategia de precio para ganar la Buy Box en Amazon sin guerra de precios destructiva
- Repricing dinámico: herramientas y reglas de precio mínimo y máximo
- Gestión de promociones: Deals de Amazon, cupones, descuentos por cantidad
- Análisis de estacionalidad: ajuste de precios en temporadas alta y baja

4. ESTRATEGIA DE PUBLICIDAD EN MARKETPLACE
Para Amazon Advertising (o equivalente en otros marketplaces):
- Estructura de campañas: Sponsored Products, Sponsored Brands, Sponsored Display
- Selección de palabras clave: match types, negativas, segmentación por competidor
- Estrategia de bids: qué automatizar y qué controlar manualmente
- Budget diario y distribución entre campañas
- Métricas clave: ACoS, TACoS, ROAS, CTR, CVR
- Ciclo de optimización semanal: qué revisar y qué cambiar

5. GESTIÓN DE RESEÑAS Y REPUTACIÓN
- Estrategia legítima para conseguir primeras reseñas de forma ética
- Proceso de seguimiento post-venta para maximizar reseñas positivas
- Gestión de reseñas negativas: cómo responder para proteger la marca
- Atención al cliente dentro del marketplace: tiempos de respuesta y plantillas
- Plan de acción para recuperar cuenta suspendida (prevención y reactivación)

6. EXPANSIÓN INTERNACIONAL EN MARKETPLACES
- Criterios para decidir qué mercados internacionales priorizar
- Amazon Pan-European FBA: ventajas, requisitos y riesgos
- Localización de listings: traducción profesional vs. automática, adaptación cultural
- Gestión de IVA y cumplimiento fiscal en ventas transfronterizas (OSS, IOSS)
- Logística para mercados internacionales: Amazon Global Logistics vs. operadores locales

7. SOCIAL COMMERCE Y CANALES EMERGENTES
- TikTok Shop: cómo configurar la tienda y estrategia de contenido para ventas
- Instagram Shopping y Facebook Shops: integración con el catálogo y publicidad
- Influencer marketing para ecommerce: tipos de colaboración y métricas de ROI
- Live shopping: cómo diseñar una sesión de venta en directo efectiva

Entrega la estrategia con ejemplos de listings optimizados, estructura de campañas publicitarias y plantilla de cálculo de rentabilidad por unidad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Ventas en Amazon, marketplaces y canales de social commerce',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Estrategia de producto para app de compra móvil en retail',
                'description'      => 'Define la estrategia y roadmap de producto para una aplicación móvil de retail que mejore la experiencia de compra y aumente la fidelización.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Manager con experiencia en aplicaciones móviles de retail y comercio electrónico, con dominio de las mejores prácticas de apps de compra, programas de fidelización digitales y personalización del cliente.

Contexto del producto:
- Retailer: [Tipo de tienda, número de tiendas físicas, presencia online]
- App actual: [Existe o es nueva, descargas, DAU/MAU, rating en stores]
- Funcionalidades actuales: [Lista de lo que hace la app ahora]
- Principales quejas de usuarios: [Reviews negativas o feedback del Customer Support]
- Objetivo de negocio de la app: [Aumentar frecuencia de compra, fidelización, omnicanalidad]
- Equipo de desarrollo: [iOS nativa, Android nativa, React Native, Flutter]

Objetivo: Definir la estrategia de producto y el roadmap para una app móvil de retail que maximice el engagement, la conversión y la fidelización del cliente.

Desarrolla el plan completo:

1. INVESTIGACIÓN DE USUARIOS Y BENCHMARK
- Análisis de reviews de la app actual en App Store y Google Play: patrones de crítica y elogio
- Entrevistas con usuarios activos e inactivos: guía de preguntas para entender el uso real
- Benchmark de las mejores apps de retail: Zara, El Corte Inglés, Primark, Nike, Sephora
- Jobs-to-be-done del usuario de apps de retail: qué problema real resuelve la app
- Segmentación de usuarios: heavy users, compradores ocasionales, usuarios que solo consultan

2. DIAGNÓSTICO DE MÉTRICAS ACTUALES
- Funnel de activación: instalación → registro → primera compra
- Retención: D1, D7, D30, churn rate mensual
- Engagement: sesiones por usuario activo, duración media de sesión, pantallas por sesión
- Conversión: tasa de compra desde la app vs. web móvil
- Identificación de las tres métricas que más impactan en los objetivos de negocio

3. FUNCIONALIDADES ESTRATÉGICAS POR ÁREA
Para cada área, prioriza las funcionalidades más impactantes:

Descubrimiento y búsqueda:
- Búsqueda visual: apuntar con la cámara para encontrar productos similares
- Filtros inteligentes y búsqueda por lenguaje natural
- Personalización de home basada en historial de navegación y compra

Programa de fidelización:
- Wallet de puntos y recompensas con visualización motivacional
- Gamificación: retos, rachas, niveles, badges exclusivos
- Notificaciones personalizadas de recompensas y ofertas por expirar

Experiencia en tienda física:
- Modo tienda: localización de productos, disponibilidad en tienda específica
- Scan & Go: escanear productos con el móvil para pagar sin caja
- Click-and-collect: reserva online, recogida en tienda, notificaciones de estado

Experiencia post-compra:
- Seguimiento de pedido en tiempo real dentro de la app
- Devoluciones iniciadas desde la app con código QR para tienda
- Historial de compras con repetición de pedido con un toque

4. MONETIZACIÓN Y GENERACIÓN DE VALOR
- Cómo la app aumenta el LTV del cliente vs. canal web
- Notificaciones push: estrategia de personalización para maximizar CTR sin saturar
- Programa de referidos integrado en la app
- App-exclusives: ofertas y productos solo disponibles para usuarios de la app

5. ROADMAP DE 12 MESES
- Q1: corrección de bugs críticos y mejoras de rendimiento (necesario antes de cualquier feature)
- Q2: programa de fidelización renovado y personalización básica
- Q3: integración con tienda física (scan, stock en tiempo real, click-and-collect)
- Q4: búsqueda visual y personalización avanzada

Para cada trimestre: objetivo de producto, KPI de éxito, funcionalidades incluidas y recursos de desarrollo necesarios.

6. ASO (APP STORE OPTIMIZATION)
- Optimización de ficha en App Store y Google Play: título, descripción, keywords
- Estrategia de screenshots y video de preview
- Gestión de reviews: cómo responder y solicitar valoraciones positivas
- Seguimiento de posicionamiento para keywords clave del sector

7. MÉTRICAS Y NORTH STAR METRIC
- Propuesta de North Star Metric para una app de retail con justificación
- Árbol de métricas: cómo las métricas de activación, engagement y retención se conectan con el NSM
- Dashboard de producto: datos a revisar semanalmente y mensualmente
- Criterios de éxito para cada funcionalidad lanzada

Entrega el roadmap en formato tabla por trimestres con justificación de priorización y ejemplos de notificaciones push personalizadas para los segmentos de usuarios definidos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Estrategia de producto para apps móviles de retail y fidelización',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del talento en ecommerce y retail digital con IA',
                'description'      => 'Diseña un modelo de gestión del capital humano para equipos de ecommerce y retail digital, desde la atracción del talento especializado hasta el desarrollo de competencias digitales.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Recursos Humanos especializado en empresas de retail y comercio electrónico, con experiencia en la captación de perfiles digitales escasos en el mercado, gestión de equipos en entornos de alta rotación estacional y desarrollo de cultura de innovación en organizaciones de retail.

Contexto de la empresa:
- Tipo de retailer: [Moda, electrónica, alimentación, farmacia, etc.]
- Tamaño del equipo de ecommerce y digital: [Número de personas y perfiles]
- Perfiles más demandados y difíciles de encontrar: [Data Analysts, Performance Marketers, UX Designers, etc.]
- Rotación actual: [Porcentaje anual voluntaria]
- Presupuesto de formación por empleado: [Anual]
- Retos principales de RRHH: [Captación, retención, digitalización de plantilla, liderazgo]

Objetivo: Construir un modelo de gestión del talento que atraiga, desarrolle y retenga a los mejores profesionales del ecosistema digital de retail.

Desarrolla el modelo con los siguientes módulos:

1. ATRACCIÓN DE TALENTO DIGITAL ESCASO
- Employer branding para captar perfiles de ecommerce: cómo posicionarse frente a startups y grandes tech
- Estrategia de sourcing no convencional: comunidades de marketing digital, hackathons, redes de alumni universitarios
- Employee Value Proposition (EVP) para perfiles digitales: qué valoran más allá del salario
- Proceso de selección ágil: cómo reducir el time-to-hire para perfiles muy demandados
- Pruebas técnicas y de portafolio: diseño de retos relevantes y no invasivos para cada perfil
- Onboarding digital: primeros 30-60-90 días para garantizar integración y productividad rápida

2. MODELO DE COMPETENCIAS PARA RETAIL DIGITAL
Define el framework de competencias por área:
- Equipo de ecommerce: analítica de datos, gestión de plataformas, optimización de conversión
- Equipo de marketing digital: performance, contenidos, SEO/SEM, redes sociales
- Equipo de operaciones y logística: gestión de inventario, última milla, experiencia post-compra
- Equipo de customer experience: atención multicanal, voz del cliente, NPS
- Liderazgo en retail digital: pensamiento data-driven, agilidad, innovación centrada en cliente
- Descripción de niveles de dominio y planes de carrera para cada área

3. GESTIÓN ESTACIONAL Y PLANIFICACIÓN DE PLANTILLA
El retail tiene picos estacionales que requieren planificación especial:
- Modelo de plantilla flexible para picos (Black Friday, Navidad, rebajas)
- Estrategia de trabajo temporal vs. fijo en perfiles operativos y digitales
- Formación acelerada para incorporaciones estacionales
- Planificación de turnos y capacidad en logística y atención al cliente
- Métricas de productividad ajustadas por temporada

4. DESARROLLO Y FORMACIÓN CONTINUA
- Plan de upskilling en competencias digitales para la plantilla de tienda física
- Itinerarios formativos por perfil: desde analista junior hasta mánager de ecommerce
- Mentoring inverso: empleados jóvenes enseñando tecnología a líderes experimentados
- Presupuesto de formación externa: criterios de aprobación y seguimiento de ROI
- Gestión del conocimiento: cómo capturar y compartir aprendizajes de campañas y proyectos

5. RETENCIÓN Y BIENESTAR EN RETAIL DIGITAL
- Factores de abandono específicos de perfiles digitales en retail (oportunidades externas, falta de reto, liderazgo)
- Encuesta de pulse mensual: preguntas cortas para detectar riesgo de fuga temprano
- Plan de carrera personalizado: conversaciones de desarrollo trimestral
- Beneficios relevantes para perfiles digitales: flexibilidad, formación, descuento de empleado
- Gestión del burnout en equipos de ecommerce durante temporadas altas

6. CULTURA OMNICANAL Y COLABORACIÓN ENTRE EQUIPOS
- Cómo eliminar los silos entre equipo online y equipo de tienda
- Estructura organizativa: centralizado vs. matricial vs. equipos de producto autónomos
- Rituales de equipo que refuerzan la cultura data-driven e innovadora
- Proceso de innovación: cómo estructurar el tiempo para que los equipos puedan experimentar
- Comunicación interna en organizaciones de retail con trabajo distribuido

7. KPIs DE GESTIÓN DEL TALENTO
- Métricas de atracción: coste por contratación, tiempo de cobertura, calidad de candidatos
- Métricas de desarrollo: porcentaje con plan de carrera activo, horas de formación, avance en competencias
- Métricas de retención: rotación voluntaria por perfil, NPS del empleado, absentismo
- Dashboard de RRHH mensual para la Dirección: indicadores con umbral de alerta

Incluye plantillas de entrevista por perfil, encuesta de clima laboral y estructura de conversación de desarrollo individual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Captación y desarrollo de talento digital en empresas de retail y ecommerce',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero y rentabilidad en ecommerce con IA',
                'description'      => 'Construye un modelo financiero completo para evaluar y optimizar la rentabilidad de un negocio de comercio electrónico por canal, producto y cliente.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director Financiero con especialización en empresas de comercio electrónico y retail digital, con experiencia en el análisis de unit economics de ecommerce, modelado de rentabilidad por canal y toma de decisiones de inversión basadas en datos.

Contexto del negocio:
- Tipo de ecommerce: [Moda, electrónica, hogar, alimentación, suscripciones, etc.]
- Canales de venta: [Tienda propia, Amazon, marketplaces, redes sociales]
- Facturación anual: [Rango actual y objetivo]
- Margen bruto promedio: [Porcentaje sobre ventas]
- Situación financiera: [Rentable, en break-even, inversión de crecimiento]
- Inversores o autofinanciado: [Tipo de financiación]

Objetivo: Construir un modelo financiero que permita entender la rentabilidad real del negocio por canal, producto y cliente, y tomar decisiones de inversión basadas en datos.

Desarrolla el modelo con los siguientes componentes:

1. UNIT ECONOMICS DEL ECOMMERCE
Las métricas fundamentales de cualquier negocio online:
- Costo de Adquisición de Cliente (CAC): cómo calcularlo correctamente incluyendo todos los costos de marketing y ventas, desglosado por canal
- Valor de Vida del Cliente (LTV): metodología de cálculo, benchmark por sector, LTV/CAC ratio objetivo
- Margen de contribución por pedido: precio de venta menos costo de producto, envío, devolución, fulfillment, pago y marketing atribuido
- Payback period: cuánto tiempo tarda en recuperarse el CAC
- Análisis de cohortes: cómo el LTV evoluciona en el tiempo para diferentes grupos de clientes

2. ESTRUCTURA DE COSTOS DEL ECOMMERCE
Mapeo completo de costos con su comportamiento:
- Costos de producto: coste de compra, mermas, obsolescencia, cobertura de stock
- Logística: almacenamiento, picking/packing, envío de salida, devoluciones (tasa y costo unitario)
- Plataforma y tecnología: ecommerce, ERP, CRM, herramientas de marketing, integraciones
- Marketing y publicidad: desglose por canal (SEM, social, email, influencers, SEO)
- Personal: equipo de marketing, operaciones, customer service, IT
- Costos financieros y de medios de pago: comisiones de pasarela, devoluciones de cargo, financiación
- Estructura de costos fijos vs. variables y punto de equilibrio

3. RENTABILIDAD POR CANAL DE VENTA
Análisis comparativo de cada canal:
- Canal propio (ecommerce.com): margen completo pero mayor costo de adquisición
- Amazon: comisiones, coste FBA/FBM, inversión en publicidad, restricciones de precio
- Otros marketplaces: estructura de comisiones, visibilidad, posición competitiva
- Redes sociales (Instagram, TikTok): ROAS real y costo de contenido incluido
- Comparativa de rentabilidad neta por canal y recomendación de mix óptimo

4. RENTABILIDAD POR CATEGORÍA Y PRODUCTO
- Análisis ABC de productos: cuáles generan el 80% de la rentabilidad
- Margen de contribución por SKU: identifica los productos que drenan rentabilidad
- Gestión de stock: rotación, cobertura, capital inmovilizado, riesgo de obsolescencia
- Decisiones de catálogo: discontinuar, relanzar o potenciar según rentabilidad
- Pricing estratégico: elasticidad precio-demanda por categoría

5. PLANIFICACIÓN FINANCIERA Y TEMPORALIDAD
El ecommerce tiene estacionalidad extrema:
- Modelo de cash flow mensual con estacionalidad (Black Friday, Navidad, rebajas)
- Necesidades de capital circulante en períodos pico: cómo financiar el stock anticipado
- Planificación de inversión en marketing por temporada: cuándo subir y bajar el presupuesto
- Gestión de tesorería: cómo mantener liquidez entre el pago a proveedores y el cobro de ventas
- Líneas de financiación específicas para ecommerce: revenue-based financing, factoring de marketplace

6. DASHBOARD FINANCIERO DEL CEO DE ECOMMERCE
Define los 12 indicadores que deben estar en el tablero mensual:
- Facturación y crecimiento vs. período anterior y objetivo anual
- Margen bruto y contribución neta
- CAC y LTV por canal, LTV/CAC ratio
- ROAS por canal de marketing
- Tasa de devolución y su impacto en margen
- Rotación de stock e inventario en euros
- Cash flow operativo y días de efectivo disponibles
- NPS del cliente como leading indicator de LTV futuro

7. ANÁLISIS DE ESCENARIOS Y DECISIONES DE INVERSIÓN
- Escenario de crecimiento acelerado: cuánto capital necesitas para duplicar la facturación
- Escenario de optimización de rentabilidad: medidas para mejorar el margen sin sacrificar crecimiento
- ROI de inversiones en tecnología, logística y marketing
- Decisión de internacionalización: modelo financiero simplificado para evaluar un nuevo mercado

Entrega el modelo con fórmulas y ejemplos numéricos ilustrativos, rangos de referencia para cada métrica según el tipo de ecommerce y recomendaciones accionables para mejorar la rentabilidad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Análisis financiero y unit economics para negocios de comercio electrónico',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento legal para ecommerce y protección del consumidor digital',
                'description'      => 'Analiza los requisitos legales aplicables a una tienda online y diseña los textos y procedimientos necesarios para operar en cumplimiento con la normativa de consumo digital.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho del consumo, comercio electrónico y protección de datos, con experiencia en el asesoramiento a tiendas online sobre el cumplimiento de la normativa europea y española de comercio a distancia.

Contexto de la tienda online:
- Tipo de productos: [Moda, electrónica, alimentación, cosméticos, servicios digitales, etc.]
- Mercados donde vende: [España, Europa, internacional]
- Tipo de cliente: [B2C, B2B o mixto]
- Volumen de ventas anual: [Rango para determinar obligaciones de IVA OSS]
- Canal de venta: [Tienda propia, marketplace como vendedor, ambos]
- Situación actual: [Primera vez / Revisión / Incumplimiento detectado]

Objetivo: Identificar todos los requisitos legales aplicables y proporcionar los textos y procedimientos necesarios para operar con pleno cumplimiento legal.

Desarrolla el análisis y documentación completa:

1. MAPA DE OBLIGACIONES LEGALES
Identifica y prioriza todos los requisitos aplicables:
- Ley de Servicios de Sociedad de la Información y de Comercio Electrónico (LSSI)
- Real Decreto Legislativo 1/2007 (Ley General para la Defensa de los Consumidores)
- Reglamento (UE) 2016/679 (GDPR) y LOPDGDD española
- Reglamento de Mercados Digitales (DMA) si aplica por tamaño
- Directiva Omnibus 2022: nuevas obligaciones sobre reseñas y precios rebajados
- Normativa de IVA en comercio electrónico: OSS, IOSS, umbrales por país
- Regulaciones específicas por categoría de producto (cosméticos, alimentación, electrónica, juguetes)

2. AVISO LEGAL
Redacta el aviso legal completo con todos los elementos obligatorios:
- Datos de identificación del titular (persona física o jurídica)
- Información sobre el prestador de servicios de la sociedad de la información
- Propiedad intelectual e industrial: titularidad y condiciones de uso del contenido
- Limitación de responsabilidad por contenido de terceros y enlaces externos
- Jurisdicción y ley aplicable

3. POLÍTICA DE PRIVACIDAD Y PROTECCIÓN DE DATOS
Redacta una política completa que incluya:
- Responsable del tratamiento e información de contacto del DPO (si procede)
- Datos personales que se recopilan y finalidad de cada tratamiento
- Base legitimadora de cada tratamiento (consentimiento, contrato, interés legítimo)
- Destinatarios y transferencias internacionales de datos
- Plazo de conservación de datos por finalidad
- Derechos del usuario (ARSOLP) y cómo ejercerlos
- Cookies: tipos utilizadas, finalidad y gestión del consentimiento (banner conforme a AEPD)

4. CONDICIONES GENERALES DE VENTA
Redacta las condiciones generales completas para consumidores (B2C):
- Proceso de contratación online: pasos, confirmación y formación del contrato
- Información precontractual obligatoria: precio total, impuestos, gastos de envío
- Formas de pago aceptadas y seguridad del proceso de pago
- Plazos de entrega y gestión de retrasos
- Derecho de desistimiento: 14 días, excepciones, modelo de formulario, efectos
- Política de devoluciones: plazos, condiciones, quién asume los costos de envío de retorno
- Garantía legal de conformidad: 3 años (desde enero 2022), procedimiento de reclamación
- Resolución de conflictos: mediación, plataforma ODR europea, jurisdicción competente

5. DIRECTIVA OMNIBUS: OBLIGACIONES SOBRE PRECIOS
La Directiva Omnibus introduce requisitos específicos:
- Cómo mostrar correctamente los precios rebajados (precio más bajo de los últimos 30 días)
- Transparencia sobre reseñas: verificar que son de compradores reales
- Personalización de precios mediante algoritmos: obligación de informar al consumidor
- Clasificación de resultados en buscadores internos: criterios de relevancia

6. COOKIES Y CONSENTIMIENTO
Auditoría y configuración compliant del banner de cookies:
- Inventario de cookies por tipo: técnicas, analíticas, marketing, redes sociales
- Requisitos del banner según criterios de la AEPD 2023
- Gestión del consentimiento: granular, previo, informado y revocable
- Registro de consentimientos y política de retención
- Herramientas de CMP (Consent Management Platform) recomendadas

7. GESTIÓN DE RECLAMACIONES Y ATENCIÓN AL CONSUMIDOR
Obligaciones específicas en comercio electrónico:
- Información sobre servicio de atención al cliente (canal, horario, tiempo de respuesta)
- Hoja de reclamaciones electrónica: cómo implementarla
- Plataforma ODR (Online Dispute Resolution) de la UE: obligación de enlace y uso
- Sistema de mediación o arbitraje de consumo adherido
- Protocolo interno de gestión de reclamaciones y plazos de resolución

Entrega los textos legales completos listos para adaptar con los datos específicos de la empresa, más una checklist de cumplimiento para auto-auditoría mensual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Textos legales y cumplimiento normativo para tiendas online en España y Europa',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente para ecommerce con IA y automatización',
                'description'      => 'Diseña un sistema de atención al cliente para tiendas online que combine automatización inteligente con atención humana para resolver incidencias de compra de forma eficiente.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Customer Experience especializado en comercio electrónico, con experiencia en la implementación de sistemas de atención al cliente que equilibran la eficiencia operativa con la satisfacción del comprador online.

Contexto de la tienda:
- Tipo de ecommerce: [Moda, electrónica, hogar, alimentación, etc.]
- Volumen de pedidos mensuales: [Número]
- Tasa de contacto actual: [Porcentaje de pedidos que generan una consulta de CS]
- Canales de atención actuales: [Email, chat, teléfono, redes sociales, WhatsApp]
- Principales motivos de contacto: [Estado del pedido, devoluciones, incidencias de entrega, dudas de talla/modelo]
- Equipo actual de CS: [Número de agentes, horario de cobertura, temporalidad]

Objetivo: Diseñar un sistema de atención al cliente que reduzca la tasa de contacto evitable, resuelva el mayor número de consultas de forma automatizada y garantice una experiencia de alto nivel en los casos que requieren intervención humana.

Desarrolla el sistema completo:

1. ANÁLISIS DE CONTACTABILIDAD Y CATEGORIZACIÓN
- Inventario de todos los tipos de consulta con su frecuencia y complejidad
- Clasificación en tres niveles: L1 (autoservicio), L2 (automatizable), L3 (agente humano)
- Identificación de consultas evitables: originadas por malas descripciones de producto, guías de tallas, información de envío poco clara
- Plan de reducción de contactabilidad: cambios en la web y comunicaciones que eliminan consultas antes de que lleguen
- Análisis de la carga de trabajo por hora del día y día de la semana para optimizar turnos

2. PORTAL DE AUTOSERVICIO DEL CLIENTE
Funcionalidades del área privada del cliente para resolver sin agente:
- Seguimiento de pedido en tiempo real integrado con transportista
- Inicio de devolución y solicitud de etiqueta de retorno en línea
- Seguimiento del estado del reembolso o cambio de producto
- Modificación de pedido antes de preparación (dirección, variante, cancelación)
- Centro de ayuda: FAQ por categoría de producto y proceso de compra
- Guías visuales: cómo devolver, cómo medir para elegir talla, cómo montar el producto

3. CHATBOT Y AUTOMATIZACIÓN DE CS
Diseña el chatbot para ecommerce:
- Casos de uso para automatización completa (sin agente): estado del pedido, política de devoluciones, horarios de entrega, información de producto
- Flujos de conversación para los 8 motivos de contacto más frecuentes
- Integración con sistemas: OMS para estado de pedido, transportistas para seguimiento, ERP para disponibilidad
- Cuándo y cómo transferir al agente humano: criterios y datos que se pasan en la transferencia
- Personalización: el chatbot conoce el historial de compra del cliente identificado
- Gestión de emociones del cliente: cómo responder cuando el cliente expresa frustración

4. GESTIÓN DE DEVOLUCIONES Y RECLAMACIONES
El proceso de devolución es el momento de la verdad en ecommerce:
- Flujo completo de devolución: solicitud online, recogida o envío, recepción, inspección, reembolso
- Política clara y comunicada: plazos, condiciones del producto, coste del envío de retorno
- Gestión de excepciones: devolucion fuera de plazo, producto sin embalaje original, artículos defectuosos
- Reembolso proactivo: cómo sorprender al cliente con rapidez en la resolución
- Gestión de reclamaciones al transportista: proceso y comunicación con el cliente afectado

5. GESTIÓN OMNICANAL DE CASOS
- Sistema de ticketing unificado: todos los canales en una sola vista del agente
- Visión 360° del cliente: historial de pedidos, contactos previos, segmento, LTV
- SLAs por canal y prioridad: tiempos de primera respuesta y de resolución
- Gestión de redes sociales y reseñas: protocolo de respuesta pública y privada
- Escalada interna: cuándo involucrar a logística, finanzas o dirección

6. PROGRAMA DE CALIDAD Y FORMACIÓN DEL EQUIPO
- Calibraciones de calidad: cómo evaluar las interacciones con criterios objetivos
- Plantillas y respuestas estándar: banco de respuestas por motivo de contacto (con personalización requerida)
- Formación continua: nuevo catálogo, política de temporada, picos como Black Friday
- Gestión del equipo temporal en picos: onboarding acelerado y supervisión reforzada
- Bienestar del agente: cómo prevenir el burnout en temporadas de alta demanda

7. MÉTRICAS Y OPTIMIZACIÓN
- KPIs operativos: tasa de contacto, FCR (First Contact Resolution), AHT, backlog
- KPIs de satisfacción: CSAT post-interacción, NPS, tasa de recompra de clientes que contactaron
- Análisis de causas raíz: cómo convertir los motivos de contacto en mejoras del producto o la web
- Reporte mensual de CS: datos clave para la dirección con insights accionables
- Objetivo de automatización: porcentaje de consultas resueltas sin agente humano

Entrega el sistema con scripts de chatbot para los 5 motivos de contacto más frecuentes, plantillas de respuesta por canal y dashboard de métricas para el responsable de CS.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Sistema de atención al cliente eficiente para tiendas online',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelancer especializado en consultoría de ecommerce y optimización de tiendas online',
                'description'      => 'Construye tu negocio como consultor freelance de ecommerce, ofreciendo servicios de auditoría, optimización de conversión y estrategia digital a tiendas online.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocio freelance especializado en consultoría de ecommerce, con experiencia asesorando a consultores independientes que quieren construir una práctica rentable ayudando a tiendas online a crecer y ser más rentables.

Contexto del consultor:
- Experiencia previa: [Años en ecommerce, herramientas dominadas, sectores en los que trabajaste]
- Especialización: [CRO, marketing digital, marketplaces, operaciones, tecnología, todos]
- Mercado objetivo: [PYME con tienda online, marcas DTC, retailers en digitalización]
- Situación actual: [Recién independizado / Primeros clientes / Quiere escalar]
- Objetivo de facturación mensual: [Cifra meta]
- Modalidad de trabajo: [Remoto, presencial, mixto; idiomas de trabajo]

Objetivo: Construir un negocio freelance de consultoría de ecommerce con ingresos predecibles, proyectos de alto valor y clientes que repiten y refieren.

Desarrolla el plan completo de negocio:

1. POSICIONAMIENTO Y ESPECIALIZACIÓN
- Por qué el consultor de ecommerce generalista compite en precio mientras que el especialista cobra premium
- Cómo elegir tu nicho: por tipo de tienda (DTC, marketplace, B2B), por plataforma (Shopify, Magento, WooCommerce), por fase de crecimiento (lanzamiento, escala, internacionalización) o por servicio (CRO, performance marketing, operaciones)
- Propuesta de valor única en tres frases: qué haces, para quién y qué resultado concreto consigues
- Perfil de LinkedIn y web personal: estructura y mensajes clave para atraer al cliente ideal
- Cómo usar IA como ventaja competitiva en tus entregas: análisis más rápido, mejores recomendaciones, mayor personalización

2. CATÁLOGO DE SERVICIOS Y PRECIOS
Para cada servicio define el entregable exacto, duración y precio:
- Auditoría de ecommerce (5 días): análisis de conversión, SEO, experiencia de compra, análisis de datos
- Informe de diagnóstico: 20-40 páginas con hallazgos priorizados y plan de acción
- Consultoría estratégica mensual: reuniones, revisión de métricas, recomendaciones
- Proyecto de CRO: proceso de hipótesis, tests A/B, análisis de resultados en 3 meses
- Estrategia de marketplaces: setup, optimización de listings y publicidad en Amazon
- Consultoría de plataforma: migración de Shopify a otro CMS o viceversa
- Formación interna: talleres para equipos de marketing y ecommerce del cliente
- Precio por hora vs. precio por proyecto vs. retainer: cuándo usar cada modelo

3. GENERACIÓN DE CLIENTES
Estrategias específicas para atraer clientes de ecommerce:
- LinkedIn para consultores de ecommerce: qué publicar semanalmente para atraer decisores
- Casos de éxito detallados: estructura con problema, proceso, resultado numérico
- Comunidades de ecommerce: foros, grupos de Facebook, Slack, eventos del sector
- Alianzas con agencias de desarrollo web y marketing que no hacen consultoría
- Referidos de clientes satisfechos: cómo estructurar el programa y cuándo pedirlos
- Cold outreach a dueños de tienda: mensaje inicial, seguimiento y propuesta

4. PROCESO COMERCIAL Y PROPUESTA
- Reunión de descubrimiento gratuita: cómo estructurarla para identificar dolor y presupuesto
- Propuesta de consultoría de ecommerce: estructura de 5-8 páginas que genera confianza
- Cómo presentar el precio de la consultoría en términos de ROI (si mejoras la conversión un 20%, cuánto vale eso)
- Gestión de la objeción "prefiero contratar a alguien interno"
- Cierre y siguientes pasos: cómo evitar que la propuesta quede en el aire

5. ENTREGA DE SERVICIOS CON CALIDAD Y ESCALABILIDAD
- Metodología propia de auditoría de ecommerce: proceso reproducible y documentado
- Plantillas de entregables: informe de auditoría, roadmap de optimización, reporte mensual
- Herramientas esenciales: analítica web (GA4, Hotjar), research de keywords (Semrush/Ahrefs), A/B testing (VWO/AB Tasty)
- Gestión del tiempo: cuántas horas reales dedica cada servicio para no perder rentabilidad
- Cuándo subcontratar: diseñadores, desarrolladores, copywriters, analistas de datos
- Productización del conocimiento: cómo crear plantillas, checklists y frameworks que aceleren la entrega

6. PROTECCIÓN LEGAL Y CONTRATOS
- Contrato de consultoría de ecommerce: cláusulas esenciales
- Propuesta con alcance definido: cómo evitar el scope creep que destruye la rentabilidad
- Política de pagos: anticipo, hitos, pago final; herramientas de facturación
- NDA y protección de información confidencial del cliente
- Gestión de clientes difíciles: cómo terminar un proyecto con profesionalidad

7. ESCALA Y CRECIMIENTO DEL NEGOCIO FREELANCE
- De consultor individual a proveedor de referencia para múltiples clientes simultáneos
- Modelo de retainer mensual: cómo convertir proyectos de auditoría en relaciones a largo plazo
- Creación de activos de conocimiento: newsletter, canal de YouTube, curso online para ingresos adicionales
- Cuándo contratar un junior o asociado: señales y proceso
- Ingresos mensuales proyectados para los primeros 12 meses y mix de servicios recomendado

Entrega el plan con plantilla de propuesta de auditoría, correo de cold outreach a dueño de tienda y descripción de servicios lista para la web o LinkedIn.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Negocio freelance de consultoría y optimización de tiendas online',
                'vote_score'       => 42,
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
