<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills330Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de SEO local y optimización de Google Business Profile',
                'description'      => 'Aprende a diseñar e implementar una estrategia de SEO local completa que ponga tu negocio en los primeros resultados del "mapa" de Google para búsquedas relevantes en tu área. Optimiza tu ficha de Google Business Profile, construye citas locales consistentes y genera reseñas de forma ética. Captura clientes en el momento exacto en que te buscan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor especializado en SEO local con experiencia en estrategias de posicionamiento para negocios con presencia física o cobertura geográfica definida. Ayúdame a diseñar e implementar una estrategia de SEO local completa que me permita aparecer en los primeros resultados cuando mis clientes potenciales buscan mis servicios en mi zona.

**Contexto:**
Tengo un negocio con presencia local (tienda física, restaurante, clínica, despacho, empresa de servicios a domicilio u otro) y quiero mejorar mi visibilidad en búsquedas locales, especialmente en el "Local Pack" (los 3 resultados con mapa que aparecen en Google) y en Google Maps.

**Pilar 1 — Optimización de Google Business Profile (GBP)**
Guíame para optimizar mi ficha al máximo nivel:
- Información básica: cómo completar cada campo con precisión (nombre exacto de empresa, categoría principal y categorías secundarias más relevantes, descripción optimizada con palabras clave locales de 750 caracteres, horario actualizado y festivos)
- Categorías: cómo elegir la categoría principal más específica y relevante (no la más genérica) y hasta 9 categorías secundarias complementarias; dónde encontrar la lista completa de categorías disponibles
- Atributos: qué atributos de perfil activar según el tipo de negocio (accesibilidad, métodos de pago, servicios, certificaciones); cómo los atributos influyen en las búsquedas por filtro
- Fotos y vídeos: cantidad mínima recomendada, tipos de fotos que Google prioriza (exterior, interior, equipo, productos, trabajos realizados), frecuencia de actualización
- Posts de GBP: tipos de publicaciones (novedades, ofertas, eventos), frecuencia óptima, cómo redactar posts que incluyan la palabra clave local sin resultar spam
- Preguntas y respuestas: cómo sembrar las preguntas más frecuentes con respuestas propias antes de que lleguen las de los usuarios

**Pilar 2 — Investigación de palabras clave locales**
Define el mapa de búsquedas locales de mi negocio:
- Tipos de búsqueda local: "servicio + ciudad" (albañil Barcelona), "servicio cerca de mí" (dentista cerca de mí), búsquedas de navegación (nombre del negocio), búsquedas de comparación (mejor + servicio + ciudad)
- Cómo usar Google Keyword Planner, Google Trends y el completado automático de Google para identificar variantes locales reales
- Intención de búsqueda local: cómo distinguir intención informacional (quiero saber) de intención transaccional (quiero contratar) y priorizar las transaccionales
- Long tail local: combinaciones de servicio + barrio/zona + calificador ("fisioterapeuta zona norte Madrid económico") con menos competencia y mayor intención de compra
- Cómo construir un mapa de palabras clave agrupado por página de destino: qué landing pages locales necesito crear para cubrir el territorio

**Pilar 3 — Citas locales NAP y consistencia de datos**
La base de la confianza local de Google:
- Qué es una cita local: cualquier mención online del nombre, dirección y teléfono (NAP - Name, Address, Phone) de tu negocio
- Por qué la consistencia exacta del NAP en todas las plataformas es crítica para el SEO local: cómo una dirección con "Calle" vs "C/" puede generar señales contradictorias
- Directorios locales prioritarios en España: Google Business Profile, Páginas Amarillas, Bing Places, Apple Maps, Yelp, TripAdvisor (si aplica), directorios sectoriales, Cámaras de Comercio, ayuntamientos, asociaciones de comerciantes
- Proceso de auditoría de citas existentes: cómo buscar tus citas actuales y detectar inconsistencias (búsqueda avanzada en Google, herramientas como Moz Local o Whitespark)
- Estrategia de construcción de citas: cómo priorizar los directorios por autoridad de dominio y relevancia local/sectorial

**Pilar 4 — Estrategia de reseñas y gestión de reputación**
Las reseñas son el factor de ranking local más visible:
- Por qué las reseñas importan en SEO local: impacto en el ranking del Local Pack, en el CTR y en la conversión
- Cómo solicitar reseñas de forma ética y efectiva: el momento óptimo para pedir (después de un servicio exitoso), el canal (enlace directo de Google, email, WhatsApp), el mensaje exacto que convierte sin sonar insistente
- Proceso de respuesta a reseñas: cómo responder a reseñas positivas (personalización, mención del servicio y la ubicación, invitación a volver) y cómo gestionar reseñas negativas (sin confrontación, reconociendo el problema, ofreciendo solución offline)
- Diversificación de plataformas de reseñas: además de Google, cuáles priorizar según el sector (TripAdvisor para hostelería, Booking para alojamiento, Doctoralia para salud, Habitissimo para reformas)
- Qué NO hacer: nunca comprar reseñas, nunca ofrecer descuentos a cambio de reseñas, nunca pedir a empleados que dejen reseñas desde sus cuentas personales

**Pilar 5 — Contenido hiperlocal y SEO on-page para búsquedas locales**
Crea páginas que rankeen para búsquedas locales de alta conversión:
- Estructura de landing page local: cómo construir una página por zona de servicio (si cubres varias ciudades o barrios) con contenido genuinamente diferenciado (no duplicado con el nombre de ciudad cambiado)
- Datos estructurados (Schema.org): LocalBusiness markup con todos los campos relevantes (nombre, dirección, teléfono, horario, coordenadas GPS, precio aproximado, área de servicio); cómo implementarlo y validarlo
- Menciones de ubicación en el contenido: cómo incluir referencias naturales a vecindarios, monumentos locales, rutas y referencias geográficas que refuercen la relevancia local
- Blog hiperlocal: tipos de contenido que atraen tráfico local cualificado (guías del barrio, noticias locales relevantes para tu sector, eventos en los que participas, colaboraciones con negocios locales)
- Señales de proximidad: cómo el embed del mapa de Google en tu web, el botón de "cómo llegar" y los enlaces desde webs locales refuerzan la señal de ubicación para Google

**Formato de salida:**
Organiza la respuesta en cinco pilares numerados con subsecciones claras. Para cada acción de optimización, indica el impacto estimado en ranking local (alto/medio/bajo) y la dificultad de implementación. Proporciona una checklist de auditoría de GBP con los 20 puntos más importantes. Añade un plan de acción de primeros 90 días para un negocio local que empieza desde cero en SEO local.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Posicionamiento local en Google para negocios con presencia física',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'SEO técnico local: estructura web, velocidad y datos estructurados',
                'description'      => 'Implementa las bases técnicas de SEO local en tu web para maximizar la visibilidad en búsquedas geográficas. Aprende a configurar datos estructurados de negocio local, optimizar la velocidad de carga en móvil, estructurar URLs locales y resolver los errores técnicos más frecuentes que penalizan el ranking local. Código y configuraciones listas para aplicar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en SEO técnico con experiencia específica en optimización para búsquedas locales. Guíame para implementar todas las optimizaciones técnicas que necesita una web de negocio local para rankear en el Local Pack de Google y en las búsquedas con intención geográfica.

**Contexto:**
Soy desarrollador o responsable técnico de la web de un negocio local o una agencia que gestiona varias webs de clientes locales. Quiero asegurarme de que la infraestructura técnica de la web esté perfectamente optimizada para el SEO local, más allá de los contenidos y las citas externas.

**Área técnica 1 — Datos estructurados para negocio local (Schema.org)**
Implementa el markup que Google usa para entender tu negocio:
- LocalBusiness schema: estructura JSON-LD completa para un negocio local, con todos los campos relevantes: @type (elige el subtipo más específico: Restaurant, MedicalClinic, LegalService, HomeAndConstructionBusiness, etc.), name, address (con addressLocality, addressRegion, postalCode, streetAddress), telephone, openingHoursSpecification (formato correcto con dayOfWeek, opens, closes), geo (latitude y longitude exactas), url, image, priceRange, currenciesAccepted, paymentAccepted, areaServed
- Errores comunes en el markup de LocalBusiness: cómo detectarlos con el Rich Results Test y el Schema Markup Validator de Google
- FAQ schema para preguntas frecuentes locales: cómo añadir preguntas relacionadas con la ubicación ("¿Dónde están ubicados?", "¿A qué zonas dan servicio?")
- Review schema: cuándo incluirlo, qué restricciones impone Google sobre las reseñas marcadas con schema y cómo evitar penalizaciones
- BreadcrumbList schema: importancia para la estructura de navegación de webs con múltiples ubicaciones

**Área técnica 2 — Estructura de URLs y arquitectura de sitio para SEO local**
Diseña la arquitectura de información correcta:
- URL structure para negocios con una sola ubicación: cuándo incluir la ciudad en la URL raíz (/fontanero-madrid vs /fontanero/madrid) y por qué importa
- Arquitectura para negocios con múltiples ubicaciones: carpetas por ciudad (/ciudades/barcelona/ vs subdominios barcelona.empresa.com) — cuándo usar cada estructura y qué señales SEO envía
- Landing pages de servicio + localización: cómo estructurar la URL (/servicio-fontaneria-gracia-barcelona/) y cómo evitar la canibalización si tienes páginas similares para zonas cercanas
- Evitar contenido duplicado en webs multiubicación: qué es la duplicación de landing pages locales, cómo detectarla con Screaming Frog y cómo resolverla con canonical tags o contenido genuinamente diferenciado
- Hreflang para negocios que operan en múltiples países o regiones con diferente idioma/variante

**Área técnica 3 — Velocidad de carga y Core Web Vitals para SEO local**
Las señales de velocidad tienen un impacto directo en el ranking móvil:
- Por qué la velocidad importa especialmente en SEO local: el 76% de las búsquedas locales se realizan desde móvil y el usuario está a punto de visitar un lugar físico
- Core Web Vitals y SEO local: LCP (Largest Contentful Paint), FID/INP (Interaction to Next Paint) y CLS (Cumulative Layout Shift) — umbrales recomendados y cómo medirlos con PageSpeed Insights y Search Console
- Optimizaciones de velocidad de mayor impacto para webs locales: lazy loading de imágenes, conversión a WebP/AVIF, eliminación de render-blocking resources, uso de caché del navegador, compresión Gzip/Brotli
- Google Maps embed y velocidad: cómo incrustar el mapa sin penalizar la velocidad de carga (técnica de lazy load del iframe o uso de imagen estática con enlace al mapa)
- Mobile-first para webs locales: cómo auditar la versión móvil con DevTools, qué errores de usabilidad móvil penalizan en Search Console (botones demasiado juntos, texto demasiado pequeño, contenido más ancho que la pantalla)

**Área técnica 4 — Señales de ubicación on-page y crawlabilidad**
Refuerza las señales geográficas en el código:
- NAP en el código HTML: dónde colocar el nombre, dirección y teléfono en el footer de la web; uso de microdatos inline vs JSON-LD separado
- Embed de Google Maps en la página de contacto: cómo hacerlo correctamente, importancia de que el pin coincida exactamente con la dirección del GBP
- Sitemap XML para webs locales: qué URLs incluir y cuáles excluir (noindex, páginas de admin, parámetros de URL), cómo enviar el sitemap a Google Search Console
- robots.txt y crawlabilidad: errores frecuentes que bloquean el acceso de Google a páginas importantes de webs locales (bloqueo de imágenes, bloqueo de JavaScript)
- Canonical tags para evitar duplicados: cuándo y cómo usarlas en webs locales con filtros de búsqueda o parámetros de URL

**Área técnica 5 — Herramientas y monitorización del SEO técnico local**
Construye un sistema de seguimiento:
- Google Search Console para SEO local: cómo configurar la propiedad, qué informes son más relevantes (rendimiento con filtros de búsqueda local, cobertura de índice, experiencia en página), cómo interpretar las impresiones y clics para búsquedas locales
- Screaming Frog para auditoría técnica: qué errores buscar prioritariamente en webs locales (enlaces rotos, meta descriptions duplicadas, H1 ausente, imágenes sin alt)
- Google Search Console + Google Business Profile integración: cómo ver el rendimiento de la ficha de GBP dentro de Search Console
- Alertas automáticas: cómo configurar alertas en Google Analytics 4 y Search Console para detectar caídas súbitas de tráfico local
- Auditoría técnica periódica: frecuencia recomendada (mensual para webs activas, trimestral para webs estables) y checklist de los 15 puntos técnicos a revisar

**Formato de salida:**
Organiza la respuesta en cinco áreas técnicas numeradas. Proporciona el código JSON-LD completo del LocalBusiness schema con un ejemplo funcional. Incluye comandos o configuraciones específicas para los errores técnicos más frecuentes. Añade una checklist de auditoría técnica de SEO local con 20 puntos organizados por impacto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementación técnica de SEO local en webs de negocios',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño web orientado al SEO local y experiencia de usuario local',
                'description'      => 'Aprende a diseñar webs de negocios locales que conviertan visitantes en clientes combinando principios de UX, señales de confianza locales y optimización para búsquedas geográficas. Crea landing pages de ubicación que rankeen y conviertan. Diseña experiencias digitales que complementen y refuercen la presencia física del negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador web especializado en webs de negocios locales con experiencia en la intersección entre UX, conversión y SEO local. Guíame para diseñar webs de negocios locales que atraigan tráfico orgánico geográfico y conviertan a los visitantes en clientes o visitas al negocio físico.

**Contexto:**
Soy diseñador o agencia que crea webs para negocios locales (restaurantes, clínicas, servicios del hogar, tiendas, despachos profesionales). Quiero diseñar webs que no solo sean visualmente atractivas sino que estén optimizadas para el SEO local y para convertir las visitas en contactos, llamadas, reservas o visitas físicas.

**Bloque 1 — Estructura y jerarquía de información para la web de un negocio local**
Define la arquitectura de información óptima:
- Páginas imprescindibles: inicio, servicios (una por servicio principal si hay competencia), sobre nosotros, contacto, zona de servicio o ubicación; cuándo añadir blog y cuándo no vale la pena
- Señales de localización en el diseño: dónde y cómo mostrar la dirección, el teléfono y el horario en el layout (header siempre visible, footer, página de contacto); por qué el número de teléfono debe ser texto (no imagen) y estar en enlace tel:
- Embed del mapa: cómo integrarlo en la página de contacto sin sacrificar la velocidad, tamaño óptimo, qué mostrar en el pin (logotipo o foto del local)
- Llamadas a la acción (CTAs) orientadas a la conversión local: "Llámanos ahora", "Reserva tu cita", "Pídenos presupuesto", "Cómo llegar"; qué CTA funciona mejor según el tipo de negocio y en qué posición del layout
- Estructura de la home page para negocio local: hero con propuesta de valor local clara + zona de servicio + CTA principal, sección de servicios, señales de confianza, reseñas destacadas, información de contacto y mapa

**Bloque 2 — Señales de confianza y elementos de credibilidad local**
Los visitantes locales necesitan confiar antes de contactar:
- Fotos reales del negocio: exterior reconocible, interior acogedor, equipo con nombres y roles, trabajos realizados (antes/después para servicios); por qué las fotos de stock destruyen la confianza local
- Reseñas de Google en la web: cómo integrarlas (widget nativo de Google, PlaceID, herramientas como Elfsight) y dónde posicionarlas para máximo impacto
- Logotipos de asociaciones, certificaciones y premios locales: cámara de comercio, colegios profesionales, certificaciones de calidad, menciones en medios locales
- Sección "Sobre nosotros" para negocios locales: cómo contar la historia del negocio enfatizando el arraigo local (años en el barrio, fundadores del lugar, valores comunitarios); formato recomendado (texto + foto del equipo real)
- Badges de garantía y compromisos: "Presupuesto sin compromiso", "Respuesta en 24h", "X años en el sector"; cómo diseñarlos visualmente para que sean creíbles sin parecer genéricos

**Bloque 3 — Landing pages de ubicación y servicio**
El componente más importante para el SEO local:
- Cuándo crear landing pages separadas por ubicación: si el negocio cubre varias zonas, ciudades o barrios con búsquedas diferenciadas; umbral de volumen de búsqueda para justificar una página dedicada
- Estructura de la landing page de ubicación: H1 con keyword local, introducción con mención de la zona, sección de servicios en esa zona, señales de confianza específicas de la zona (trabajos realizados en el área, testimoniales de clientes del barrio), información de contacto y mapa centrado en esa zona
- Cómo evitar el contenido duplicado entre landing pages similares: qué diferencia real aporta cada página (número de trabajos realizados en la zona, datos específicos, fotos locales, testimoniales del área)
- Diseño adaptativo de las landing pages de zona: cómo reutilizar el layout base con componentes de contenido variables sin duplicar la estructura CSS ni el HTML estático

**Bloque 4 — Experiencia móvil para usuarios en búsqueda local**
El usuario en búsqueda local suele estar en la calle con el móvil:
- Velocidad en móvil como prioridad absoluta: qué sacrificar en la versión móvil para ganar velocidad (animaciones, imágenes decorativas, scripts no esenciales)
- Click to call prominente: el número de teléfono como elemento fijo en pantalla (barra inferior o header sticky) en la versión móvil; por qué es el CTA más valioso para negocios locales
- Formularios en móvil: campos mínimos necesarios (nombre, teléfono, servicio), tipo de teclado apropiado (tel para teléfonos, email para correos), autocompletar activado
- Directions CTA: botón de "Cómo llegar" que abre Google Maps directamente con las coordenadas del negocio; cómo generar la URL de Google Maps para el botón
- Botón de WhatsApp: cuándo y cómo integrarlo (wa.me/XXXXXXXXX con mensaje pre-rellenado relevante); posición óptima en el layout móvil

**Bloque 5 — Métricas de conversión local y análisis del comportamiento**
Mide si el diseño está convirtiendo visitas locales en clientes:
- Conversiones a trackear en Google Analytics 4 para negocio local: clic en número de teléfono, clic en email, envío de formulario de contacto, clic en "Cómo llegar", reserva completada
- Cómo configurar el tracking de clics en teléfono en GA4: evento con event_name "phone_click" y parámetros de página y número
- Heatmaps para webs de negocios locales: qué herramientas usar (Hotjar, Microsoft Clarity gratuito) y qué patrones de comportamiento buscar (dónde hacen clic, hasta dónde hacen scroll, en qué abandonan)
- Tests A/B para CTAs locales: cómo testear variantes de texto y posición del CTA principal; qué métricas usar como objetivo del test
- Informe mensual de conversión para el cliente: qué datos presentar (visitas, tasa de conversión, número de leads, coste por lead si hay paid) y cómo visualizarlos de forma comprensible

**Formato de salida:**
Organiza la respuesta en cinco bloques numerados. Para cada elemento de diseño, indica el impacto esperado en conversión y en SEO local (alto/medio/bajo). Proporciona una estructura de wireframe de home page para negocio local con la descripción de cada sección. Incluye una checklist de revisión de diseño web para negocio local con 15 puntos antes de lanzar la web.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseño web para negocios locales orientado a conversión y SEO',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Generación de leads locales con SEO y contenido hiperlocal',
                'description'      => 'Aprende a capturar leads de alta intención en tu área geográfica combinando SEO local, contenido hiperlocal y estrategias de conversión específicas para búsquedas con localización. Construye un sistema de captación de prospectos locales que funcione de forma continua sin depender exclusivamente de publicidad de pago. Ideal para equipos de ventas en empresas con cobertura territorial definida.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en generación de demanda local con experiencia en estrategias de captación de leads para negocios con cobertura geográfica definida. Ayúdame a construir un sistema de captación de leads locales basado en SEO y contenido hiperlocal que me permita llenar el pipeline de ventas con prospectos de alta intención de compra en mi área.

**Contexto:**
Soy responsable de ventas o de generación de demanda en una empresa que opera en una o varias zonas geográficas específicas (ciudad, provincia, región). Quiero reducir mi dependencia de los leads de pago (Google Ads, Meta Ads) y construir un canal orgánico local que genere prospectos de forma sostenida.

**Etapa 1 — Mapeo de la demanda local de mi producto o servicio**
Identifica dónde están las búsquedas locales de mayor intención:
- Cómo usar Google Keyword Planner filtrado por ubicación geográfica para identificar el volumen de búsqueda local de mis servicios en mi área objetivo
- Búsquedas de comparación local: "[mi servicio] vs [competidor]", "mejor [mi servicio] en [ciudad]", "[mi servicio] opiniones [ciudad]" — cómo rankear para estas búsquedas altamente transaccionales
- Búsquedas de "cerca de mí" y sin ciudad explícita: cómo capturarlas optimizando señales locales on-page y en GBP
- Búsquedas por problema local: "[problema que resuelvo] [ciudad]" (no directamente el nombre del servicio sino el síntoma o necesidad); cómo crear contenido que capture al cliente en la fase de problema antes que en la de solución
- Análisis de los competidores locales en búsqueda orgánica: qué palabras clave están capturando, qué páginas rankean para ellas y cómo crear contenido más completo y local para superarlos

**Etapa 2 — Arquitectura de contenido hiperlocal para generación de leads**
Diseña el sistema de contenidos que atrae prospectos locales:
- Páginas de servicio por zona: cómo estructurar y diferenciar una landing page por cada zona o barrio que cubres, evitando el contenido duplicado con datos y referencias genuinamente locales (empresas de la zona con las que has trabajado, referencias de proyectos en el área)
- Guías de compra con enfoque local: "[mi servicio] en [ciudad]: guía completa [año]" — contenido informacional que captura al prospecto en la fase de investigación y lo introduce en el embudo; cómo estructurarlo para que genere conversión (lead magnet, calculadora de precio, consulta gratuita)
- Contenido de comparación local: "Las X mejores empresas de [servicio] en [ciudad]" — incluyendo a tu propia empresa con reseñas propias; por qué este formato genera mucho tráfico cualificado
- Casos de éxito con referencia geográfica: cómo publicar estudios de caso de proyectos realizados en zonas específicas (con datos reales anonimizados o con permiso del cliente) para aparecer en búsquedas muy específicas
- Blog hiperlocal: tipos de posts que generan tráfico local con alta intención de compra (noticias del sector en tu ciudad, regulaciones locales que afectan a tus clientes, eventos del sector en tu región)

**Etapa 3 — Captación y conversión del tráfico local en leads**
Convierte las visitas en prospectos identificados:
- CTAs específicos para tráfico local: diferencia entre CTA de tráfico informacional (descarga de guía, suscripción a newsletter local) y CTA de tráfico transaccional (presupuesto, demo, llamada); cómo adaptar el CTA según la página
- Formularios de captación de leads locales: qué campo añadir al formulario para cualificar geográficamente al lead (código postal, ciudad, zona) y cómo usarlo para enrutar automáticamente al comercial de la zona
- Chat local con contexto geográfico: cómo personalizar los mensajes de chat o chatbot según la ciudad detectada por geolocalización del visitante
- Calculadoras de precio local: herramientas interactivas que estiman el coste del servicio según la zona (precio por metro cuadrado, distancia, cobertura) que capturan el email a cambio del resultado
- Urgencia local: cómo crear elementos de urgencia genuinamente locales ("Solo atendemos X proyectos simultáneos en [ciudad]", "Agenda cerrada en [zona] hasta [fecha]") que aumenten la conversión sin ser manipuladores

**Etapa 4 — Distribución y amplificación del contenido local**
El contenido necesita llegar a la audiencia local:
- SEO off-page local: cómo conseguir enlaces desde medios locales (periódicos digitales locales, blogs de sector en tu ciudad, asociaciones empresariales de la zona)
- Sindicación de contenido local: cómo publicar versiones resumidas de tu contenido en LinkedIn, Facebook e Instagram con enlace a la versión completa para amplificar el alcance local
- Relaciones con medios locales: cómo posicionarte como fuente experta para periodistas locales que cubren tu sector (registro en Help a Reporter Out, HARO en español; contacto directo con redacciones locales)
- Colaboraciones con negocios complementarios locales: co-creación de contenido con negocios que sirven a tu mismo cliente pero no compiten (intercambio de menciones, guías conjuntas, recomendaciones cruzadas)
- Comunidades locales online: dónde está tu audiencia local en grupos de Facebook, Nextdoor, foros de barrio, y cómo participar aportando valor sin hacer spam

**Etapa 5 — Medición del ROI del SEO local como canal de captación**
Cierra el bucle entre tráfico local y ventas:
- Cómo atribuir leads a búsquedas locales: configuración de UTMs en los enlaces de GBP, tracking de llamadas con número virtual dedicado al canal orgánico local
- Métricas clave del canal local orgánico: visitas desde búsqueda orgánica local, leads captados, tasa de conversión visita → lead, tasa de cierre lead local → cliente, ticket medio
- Comparativa de coste por lead: orgánico local vs Google Ads local vs Meta Ads local; cómo calcular el coste por lead orgánico (inversión en SEO y contenidos / leads generados)
- Dashboard de generación de demanda local: cómo construirlo en Looker Studio (antes Data Studio) con fuentes de GA4 y Search Console

**Formato de salida:**
Organiza la respuesta en cinco etapas numeradas con subsecciones. Proporciona una plantilla de arquitectura de contenido hiperlocal con tipos de página, intención de búsqueda y CTA recomendado. Incluye un ejemplo de brief de contenido para una landing page de servicio + zona. Añade una lista de 8 indicadores de que tu estrategia de SEO local está generando leads reales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Captación de leads locales mediante SEO y contenido orgánico',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Estrategia de crecimiento orgánico local para apps y productos digitales',
                'description'      => 'Diseña una estrategia de crecimiento orgánico local para productos digitales que quieren capturar mercados geográficos específicos. Aprende a combinar SEO local, ASO (App Store Optimization) con señales geográficas, contenido hiperlocal y partnerships territoriales para crecer en ciudades o regiones de forma sostenible sin depender solo de paid.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en growth con experiencia en estrategias de expansión geográfica para productos digitales. Ayúdame a diseñar una estrategia de crecimiento orgánico local para mi producto digital (app móvil, marketplace, plataforma SaaS o servicio online con cobertura territorial) que me permita ganar tracción en ciudades o regiones específicas de forma sostenible.

**Contexto:**
Soy Product Manager o responsable de crecimiento en un producto digital que opera en uno o varios mercados geográficos o que quiere expandirse a nuevas ciudades o regiones. Quiero construir un motor de crecimiento orgánico local que complemente o eventualmente reduzca la dependencia de la adquisición pagada.

**Vector 1 — SEO local para productos digitales**
Adapta el SEO local a la lógica de un producto digital:
- Diferencia entre SEO local de un negocio físico y SEO local de un producto digital: un producto digital no tiene una dirección única pero puede optimizar para intenciones de búsqueda geográficas
- Landing pages de ciudad: cómo crear páginas optimizadas por ciudad que muestren el valor del producto en ese mercado específico (datos de usuarios locales, casos de éxito locales, proveedores/partners disponibles en esa ciudad)
- Estrategia de contenido por mercado geográfico: guías locales de tu industria en cada ciudad objetivo; cómo este contenido posiciona el producto y captura a usuarios en la fase de consideración
- Búsquedas de comparación local: "[mi producto] vs [competidor local]", "[categoría del producto] [ciudad]" — cómo rankear para estas búsquedas sin un GBP (Google Business Profile no aplica a productos puramente digitales)
- Señales de localización para productos digitales: hreflang para productos en varios idiomas, sitemaps con URLs segmentadas por mercado, datos estructurados SoftwareApplication o WebApplication con areaServed

**Vector 2 — ASO local (App Store Optimization con señales geográficas)**
Para products con app móvil:
- Localización del metadata de la app: cómo adaptar el título, subtítulo y descripción de la app para cada mercado con palabras clave locales relevantes; diferencia entre traducción y localización SEO
- Screenshots y preview videos localizados: cómo usar imágenes de la app con referencias al mercado local (mapa de la ciudad, negocios o lugares reconocibles) para mejorar el CVR en cada storefront
- Calificaciones y reseñas locales: cómo estimular reseñas en el idioma y mercado correcto; impacto de las valoraciones locales en el ranking de búsqueda de la App Store en cada país/región
- Búsquedas locales en la App Store: cómo las palabras clave en búsquedas como "app fontaneros Madrid" o "delivery Barcelona" funcionan en la App Store y cómo optimizar para ellas
- Campañas de lanzamiento en un nuevo mercado: cómo un pico de descargas locales en la primera semana impacta positivamente en el ranking local de la App Store

**Vector 3 — Partnerships y distribución local**
El crecimiento local más rápido viene de canales existentes:
- Identificación de distribuidores de audiencia local: qué empresas, comunidades o medios ya tienen la atención de tus usuarios objetivo en cada ciudad (medios locales, asociaciones gremiales, influencers locales, negocios complementarios)
- Modelo de partnership local: integración técnica (API, widget) que los partners locales añaden a su web o app; programa de referidos con comisión local; acuerdos de co-marketing geográfico
- Embajadores locales: cómo identificar, reclutar y activar power users en cada ciudad que actúen como prescriptores locales; qué incentivos funcionan mejor (acceso anticipado, plan gratuito, visibilidad en el producto)
- Eventos y presencia física en los mercados objetivo: meetups, patrocinio de eventos del sector en la ciudad, presencia en ferias locales; cómo medir el impacto en métricas digitales de una acción offline local
- Distribución a través de canales institucionales: ayuntamientos, cámaras de comercio, asociaciones empresariales locales; cómo llegar a ellos y qué propuesta de valor funciona

**Vector 4 — Contenido hiperlocal y comunidad**
Construye relevancia local a través del contenido:
- Blog de ciudad: contenido editorial genuinamente útil para el mercado local que posiciona el producto como referente del sector en esa geografía; tipos de contenido que funcionan (ranking de mejores X en la ciudad, análisis del mercado local, entrevistas a actores locales del sector)
- Datos locales como activo de PR: cómo usar los datos propios del producto (transacciones, búsquedas, patrones de uso por ciudad) para generar notas de prensa con ángulo local que consigan cobertura en medios locales
- Comunidad local en redes sociales: grupos de Facebook o LinkedIn por ciudad, hashtags locales en Instagram, participación en foros y comunidades de la ciudad; cómo moderar y activar sin que parezca marketing corporativo
- User Generated Content local: cómo incentivar a los usuarios de cada ciudad a compartir su experiencia con el producto con referencias geográficas; cómo amplificar este contenido en los canales del producto

**Vector 5 — Métricas de crecimiento local y gestión del portfolio de mercados**
Gestiona la expansión geográfica con datos:
- Métricas de salud por mercado: usuarios activos en la ciudad, tasa de retención local (diferencia entre ciudades con red densa y ciudades con pocos usuarios), NPS por mercado, coste de adquisición orgánico local
- Fase de madurez del mercado: cómo clasificar cada ciudad en la que operas (early stage, crecimiento, madurez, saturación) y qué estrategia de crecimiento corresponde a cada fase
- Efecto de red local: cómo modelar el punto de inflexión a partir del cual el crecimiento local se vuelve autosostenido (marketplace: liquidez suficiente; red social: masa crítica de usuarios activos en la zona)
- Priorización de mercados: cómo decidir en qué ciudades concentrar los esfuerzos de SEO local, partnerships y contenido según el TAM local, la competencia y el momentum actual
- OKRs de crecimiento local: cómo estructurar objetivos trimestrales por mercado geográfico que estén alineados con los objetivos de crecimiento global del producto

**Formato de salida:**
Organiza la respuesta en cinco vectores numerados con subsecciones. Proporciona una plantilla de priorización de mercados locales con criterios de evaluación y pesos. Incluye un ejemplo de brief de landing page de ciudad para un producto digital. Añade un framework de fases de madurez del mercado con las métricas de referencia para cada fase y las acciones de crecimiento correspondientes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Expansión geográfica orgánica de productos digitales',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Employer branding local y visibilidad orgánica en búsquedas de empleo',
                'description'      => 'Construye la reputación de tu empresa como empleador en tu área geográfica para atraer talento local de forma orgánica. Optimiza tu presencia en LinkedIn, Glassdoor e Indeed para búsquedas de empleo locales, crea contenido que muestre la cultura de empresa y posiciona tu organización como el empleador preferido de tu sector en tu ciudad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en employer branding con experiencia en estrategias de atracción de talento local y posicionamiento orgánico en plataformas de empleo. Guíame para construir la reputación de mi empresa como empleador de referencia en mi zona geográfica, atrayendo candidatos cualificados de forma orgánica y sostenible.

**Contexto:**
Soy responsable de RRHH o talent acquisition en una empresa con presencia local. Tenemos dificultades para atraer talento en nuestra zona y dependemos demasiado de portales de pago o cazatalentos. Quiero construir una marca como empleador que haga que los mejores candidatos de la zona nos busquen a nosotros.

**Pilar 1 — Diagnóstico de la marca empleadora actual**
Evalúa el punto de partida de tu employer brand local:
- Cómo auditar tu presencia actual en plataformas de empleo: perfil de empresa en LinkedIn, Glassdoor, Indeed, Infojobs; qué información falta y qué imagen proyectan las reseñas actuales
- Análisis de las reseñas en Glassdoor y LinkedIn: cómo extraer patrones de lo que los empleados (actuales y anteriores) valoran y critican; qué temas aparecen con más frecuencia
- Benchmark local: qué empresas de tu sector y zona tienen mejor reputación como empleadoras; qué hacen de forma diferente en sus perfiles y comunicación
- Employee Net Promoter Score (eNPS): cómo medirlo internamente para conocer cuántos de tus empleados actuales recomendarían trabajar en tu empresa; este dato es la base del employer branding auténtico

**Pilar 2 — Propuesta de valor para el empleado (EVP) con ángulo local**
Define qué hace única a tu empresa como empleador en tu zona:
- Qué es el EVP (Employee Value Proposition) y cómo diferenciarlo del EVP de competidores en tu misma ciudad
- Componentes del EVP local: qué ofreces en términos de salario y beneficios (contexto de mercado local), desarrollo profesional, cultura y valores, impacto y propósito, y el factor de localización (cercanía, conocimiento del mercado local, arraigo en la comunidad)
- Cómo validar el EVP internamente antes de comunicarlo al exterior: focus group con empleados embajadores, encuestas de salida, entrevistas de incorporación
- Mensajes clave del EVP local para cada segmento de candidatos: recién graduados locales (¿es una empresa que da oportunidades?), profesionales senior (¿es un proyecto estable y estimulante?), candidatos que regresan a su ciudad (¿es un buen sitio para volver?)

**Pilar 3 — Optimización de perfiles de empresa en plataformas de empleo**
Posiciona tu empresa en las búsquedas de empleo locales:
- LinkedIn Company Page: cómo optimizar para búsquedas de empleo locales (ciudad en el perfil, descripciones con palabras clave del sector y la zona, sección "Life at Company" con fotos reales del equipo y la oficina)
- Glassdoor: cómo reclamar y optimizar el perfil, cómo responder a las reseñas (incluyendo las negativas) de forma que muestre cultura de mejora continua, cómo estimular reseñas de empleados satisfechos
- Indeed: SEO de las ofertas de trabajo (título exacto con ciudad, descripción con palabras clave que buscan los candidatos locales, beneficios específicos y mencionados en los primeros 100 palabras)
- Google for Jobs: cómo asegurarse de que las ofertas de empleo de tu web están indexadas en Google for Jobs con el schema correcto (JobPosting con hiringOrganization, jobLocation, datePosted)
- Perfiles sectoriales: directorios de empleo especializados en tu sector con presencia local fuerte (colegios profesionales, asociaciones de RRHH de la zona)

**Pilar 4 — Contenido de employer branding para atraer talento local**
Crea el contenido que convierte tu web y redes en imán de talento:
- Página de Trabaja con nosotros: qué secciones debe incluir (EVP, cultura en fotos reales, testimonios de empleados, proceso de selección transparente, ofertas vigentes, formulario de candidatura espontánea)
- LinkedIn: tipos de contenido que generan alcance orgánico entre candidatos locales (día en la vida de un empleado, hitos del equipo, apertura de nuevas posiciones con foto del equipo, cultura de empresa en momentos cotidianos)
- Embajadores de empresa: cómo identificar a los empleados más activos en redes y empoderarles para compartir contenido auténtico sobre la empresa; programa de employee advocacy sin convertirlo en obligación
- Contenido de reclutamiento en vídeo corto: testimonios de empleados de 60-90 segundos grabados con el móvil; por qué la autenticidad importa más que la producción en este formato
- Blog de cultura: artículos sobre la vida en la empresa, el sector y el mercado local de empleo escritos por los propios empleados; cómo posicionarlos en búsquedas de candidatos locales

**Pilar 5 — Métricas de employer branding local**
Mide el impacto de la estrategia en la atracción de talento:
- Métricas de visibilidad: visitas a la página de empleo, seguidores en LinkedIn, menciones de la empresa en búsquedas de empleo locales (Google Search Console), impresiones de las ofertas en Indeed y LinkedIn
- Métricas de calidad de candidatura: tasa de candidaturas orgánicas vs pagadas, ratio de candidatos cualificados sobre total, tiempo medio de cobertura de vacantes, coste por contratación
- Métricas de reputación: puntuación media en Glassdoor y Google, eNPS interno trimestral, tasa de referral (% de contrataciones que vienen por recomendación de empleados actuales)
- Informe trimestral de employer branding para RRHH: cómo estructurar el informe y qué datos presentar a la dirección para justificar la inversión en marca empleadora

**Formato de salida:**
Organiza la respuesta en cinco pilares numerados. Proporciona una plantilla de EVP local con los cinco componentes y ejemplos de mensajes para cada uno. Incluye una checklist de optimización del perfil de empresa en LinkedIn para employer branding. Añade una lista de los 5 errores más comunes en employer branding local y cómo evitarlos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Atracción de talento local mediante employer branding orgánico',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'SEO local para servicios financieros y gestión de reputación online',
                'description'      => 'Aprende a posicionar tu despacho de asesoría financiera, gestoría o servicio de contabilidad en las búsquedas locales de alto valor. Navega las restricciones específicas del sector financiero en publicidad y SEO, construye reputación online en plataformas especializadas y capta clientes locales que buscan servicios financieros de confianza en su área.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de SEO con experiencia específica en el sector de servicios financieros y profesionales regulados. Guíame para construir una presencia online local sólida para mi despacho o empresa de servicios financieros que me permita captar clientes locales de alto valor de forma orgánica y dentro de los límites regulatorios del sector.

**Contexto:**
Dirijo o gestiono el marketing de un negocio de servicios financieros locales: asesoría financiera, gestoría, despacho de contadores, firma de auditoría o empresa de planificación patrimonial. Quiero mejorar mi visibilidad online local pero soy consciente de que el sector financiero tiene regulaciones específicas sobre publicidad y comunicación que debo respetar.

**Módulo 1 — SEO local para servicios financieros: particularidades del sector**
Entiende el contexto específico de tu industria:
- Páginas YMYL (Your Money, Your Life): cómo Google aplica criterios de calidad más estrictos a webs de servicios financieros; importancia de demostrar E-E-A-T (Experiencia, Expertise, Autoridad, Confianza) en cada página
- Regulaciones de publicidad financiera: qué puedes y no puedes decir en tu web y perfiles (promesas de rentabilidad, comparaciones con la competencia, testimoniales en servicios de inversión); cómo mencionar las licencias y registros regulatorios (número de registro en CNMV, Banco de España, Colegio de Economistas)
- Búsquedas locales de alto valor en servicios financieros: "asesor financiero [ciudad]", "gestoría autónomos [barrio]", "declaración de la renta [ciudad]", "planificación patrimonial [zona]"; volumen de búsqueda, competencia y conversión esperada
- Estacionalidad del SEO financiero local: cuándo se disparan las búsquedas (campaña de renta, inicio de año fiscal, periodos de cotizaciones) y cómo preparar el contenido con antelación

**Módulo 2 — Google Business Profile para servicios financieros**
Optimiza la ficha para búsquedas locales de servicios profesionales:
- Categoría principal correcta: cómo elegir entre "Asesor financiero", "Gestoría", "Contable" o "Planificador financiero" y cuáles añadir como secundarias; impacto en las búsquedas en las que apareces
- Descripción del perfil con palabras clave locales y credenciales: cómo mencionar especialidades, tipos de cliente y zona de servicio sin hacer promesas que violen la normativa
- Fotografías que generan confianza en servicios financieros: oficina profesional, equipo con nombres y titulaciones, certificados y reconocimientos en la pared; por qué las fotos de stock son especialmente dañinas en este sector
- Posts de GBP para servicios financieros: tipo de contenido permitido (recordatorios de plazos fiscales, novedades regulatorias, cambios de ley que afectan a los clientes); cómo aportarvalor sin prometer resultados específicos
- Preguntas frecuentes de servicio financiero: cómo estructurar las FAQ más buscadas localmente ("¿Cuánto cobra una gestoría en [ciudad]?", "¿Qué documentos necesito para...?")

**Módulo 3 — Gestión de reputación online para servicios financieros**
La confianza es el factor de conversión más importante:
- Plataformas de reseñas relevantes para servicios financieros: Google Business Profile, Facebook, Yelp, directorios del colegio profesional local, Trustpilot (para fintech o servicios online)
- Cómo solicitar reseñas en un sector de relación discreta: las reseñas en finanzas son más difíciles de conseguir que en hostelería; estrategias respetuosas para pedirlas en el momento adecuado (después de una gestión exitosa, cierre de ejercicio, resolución de un problema)
- Cómo responder a reseñas negativas en servicios financieros: especial cuidado con la confidencialidad (nunca revelar datos del cliente en la respuesta); cómo responder de forma que muestre profesionalidad sin admitir errores que puedan tener implicaciones legales
- Monitorización de la reputación online: herramientas para recibir alertas cuando se menciona tu empresa (Google Alerts, Mention); cómo reaccionar ante menciones negativas en foros o redes

**Módulo 4 — Contenido de autoridad para servicios financieros locales**
El contenido es la clave para demostrar expertise local:
- Blog de asesoría financiera local: tipos de contenido que atraen clientes cualificados (guías fiscales adaptadas a la normativa autonómica, calendarios de obligaciones para autónomos y empresas de la zona, novedades de la normativa local)
- Cómo garantizar la exactitud del contenido financiero: quién debe revisar y firmar el contenido (el asesor titulado, no el becario); importancia de fecha de publicación y última actualización para la relevancia del contenido normativo
- Formato de contenido en servicios financieros: calculadoras (IRPF, módulos, IAE) como lead magnets; guías descargables en PDF sobre obligaciones fiscales; webinars informativos de normativa local
- Casos de estudio sin datos confidenciales: cómo narrar el éxito en una optimización fiscal o una planificación patrimonial de forma genérica (sector del cliente, ahorro porcentual, situación inicial vs final) sin revelar datos del cliente

**Módulo 5 — Estrategia de enlaces y autoridad local para servicios financieros**
Construye autoridad local con fuentes de confianza:
- Fuentes de enlaces de alta autoridad para el sector: webs de colegios de economistas, de abogados o de gestores; directorios de la Agencia Tributaria y organismos públicos; medios económicos locales (suplemento económico del periódico local)
- Cómo conseguir menciones en medios locales como experto financiero: cómo posicionarte como fuente de referencia para artículos de finanzas en el periódico local, radio y TV regional
- Colaboraciones con negocios locales complementarios: asesorías jurídicas, notarías, inmobiliarias, gestores de seguros — contenido co-creado, recomendaciones cruzadas, aparición en sus directorios de partners
- Participación en eventos locales: ponencias en la Cámara de Comercio, webinars de asociaciones empresariales de la zona, colaboración con incubadoras y aceleradoras locales

**Formato de salida:**
Organiza la respuesta en cinco módulos numerados. Proporciona una lista de tipos de contenido permitidos y prohibidos para servicios financieros en España. Incluye una plantilla de calendario de contenido estacional para una gestoría o asesoría fiscal con los picos de demanda y el contenido recomendado para cada período. Añade una checklist de optimización del GBP para servicios financieros con los 15 puntos más importantes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Posicionamiento local y reputación para servicios financieros',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'SEO local para despachos de abogados y servicios jurídicos',
                'description'      => 'Aprende a posicionar tu despacho de abogados o servicio jurídico en los primeros resultados locales para búsquedas de alta intención como "abogado laboralista Madrid" o "abogado divorcio Barcelona". Construye autoridad online dentro de los límites deontológicos de la abogacía, genera reseñas de confianza y capta clientes locales que te buscan en el momento más necesario.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de marketing digital especializado en el sector legal con conocimiento de las normas deontológicas aplicables a la publicidad de servicios jurídicos. Guíame para construir una presencia online local sólida para mi despacho de abogados que me permita captar clientes locales de forma orgánica, dentro de los límites deontológicos aplicables.

**Contexto:**
Dirijo o gestiono el marketing de un despacho de abogados, asesoría jurídica o bufete con presencia local. Quiero mejorar mi posicionamiento en búsquedas locales de alto valor pero sé que el sector legal tiene restricciones deontológicas sobre publicidad que debo conocer y respetar. Mi objetivo es aparecer cuando un cliente potencial busca un abogado de mi especialidad en mi ciudad.

**Parte 1 — Marco deontológico de la publicidad de abogados en España**
Entiende los límites antes de actuar:
- Normativa aplicable: Estatuto General de la Abogacía (Real Decreto 658/2001 actualizado) y el Código Deontológico del CGAE; qué dice sobre publicidad de servicios jurídicos
- Qué está prohibido: ofrecer resultados garantizados, hacer comparaciones con otros despachos que puedan ser denigrantes, captar clientes de forma engañosa, utilizar testimoniales que prometan resultados
- Qué está permitido: información sobre especialidades, zona de actuación, formación y experiencia del equipo, tarifas orientativas, contenido educativo sobre derecho
- Cómo citar el número de colegiado y el colegio de abogados en tu web: por qué es obligatorio y dónde colocarlo
- Redes sociales y deontología: qué tipo de contenido en LinkedIn, Instagram o YouTube está dentro de los límites (divulgación jurídica, noticias de jurisprudencia, procesos legales explicados sin asesoramiento individual)

**Parte 2 — Investigación de palabras clave locales para despachos**
Mapea las búsquedas de potenciales clientes:
- Tipología de búsqueda local jurídica: "abogado + especialidad + ciudad" (abogado laboral Madrid), "abogado + problema + ciudad" (abogado accidente tráfico Sevilla), "abogado + barrio" (abogado Gràcia Barcelona), búsquedas de urgencia ("abogado guardia" o "abogado urgente")
- Cómo usar Google Keyword Planner para identificar el volumen de búsqueda local por especialidad: qué especialidades tienen más búsquedas en tu ciudad
- Palabras clave de cola larga de alto valor: "abogado divorcio precio orientativo [ciudad]", "cuánto cuesta un abogado de herencias en [ciudad]", "abogado gratis turno oficio [ciudad]"
- Búsquedas de información como primera fase del funnel jurídico: el cliente busca primero información ("¿puedo despedir a un empleado por esto?") antes de buscar un abogado; cómo capturarlos en esa fase con contenido educativo

**Parte 3 — Google Business Profile y directorios jurídicos**
Optimiza tu presencia en las plataformas donde te buscan los clientes:
- Categorías de GBP para despachos: "Despacho de abogados" como categoría principal; categorías secundarias por especialidad (Abogado de familia, Abogado laboralista, Abogado de herencias); qué palabras clave incluir en la descripción
- Directorios jurídicos especializados con autoridad: Lexdir, Icuida, Confianza Online (para despachos con certificación), Abogados.com, directorios del Colegio de Abogados local; importancia de NAP consistente en todos
- Perfiles en plataformas de consultas jurídicas: iAbogado, Legálitas (para participación como colaborador), Nolo en mercados hispanohablantes; cómo estas plataformas pueden derivar clientes y generar enlaces hacia tu web
- Cómo gestionar el GBP de un despacho con varios abogados: una sola ficha para el despacho vs fichas para cada abogado; qué recomienda Google y cuándo tiene sentido tener perfiles individuales

**Parte 4 — Contenido jurídico local de autoridad**
Crea el contenido que posiciona tu despacho como referente:
- Blog jurídico local: tipos de artículos que posicionan para búsquedas de clientes locales (preguntas frecuentes sobre legislación autonómica, cambios normativos relevantes para tu ciudad, explicación de procesos judiciales en los juzgados de tu partido judicial)
- Formato del contenido jurídico: cómo escribir en lenguaje accesible sin perder rigor (evitar el lenguaje excesivamente técnico que aleja al cliente potencial); estructura de "pregunta → explicación → cuándo consultar a un abogado"
- Guías descargables por especialidad: "Guía del Divorciado en [Ciudad]: todo lo que necesitas saber sobre el proceso judicial"; cómo usarlas como lead magnet para capturar el email del prospecto
- Vídeos cortos de divulgación jurídica: temas locales relevantes (nueva normativa en tu comunidad autónoma, sentencias recientes de los juzgados de tu ciudad) en formato 60-90 segundos para LinkedIn o YouTube

**Parte 5 — Reseñas, reputación y medición del SEO local jurídico**
Cierra el ciclo de visibilidad y captación:
- Cómo conseguir reseñas en un sector de máxima confidencialidad: el cliente que gana un caso puede dejar reseña; cómo solicitarla respetando la discreción sin hacer referencia al asunto concreto
- Cómo responder reseñas de clientes insatisfechos: sin revelar información del caso (confidencialidad), sin admitir negligencia, mostrando disposición a resolver; fórmulas de respuesta neutras y profesionales
- Medición del impacto en captación: tracking de llamadas desde GBP, formularios de consulta desde la web, primer contacto desde búsqueda orgánica vs referido; cálculo del coste por lead orgánico vs pagado
- Informes de rendimiento SEO para el socio director: cómo presentar los datos de visibilidad, tráfico y leads captados de forma que justifiquen la inversión en marketing digital del despacho

**Formato de salida:**
Organiza la respuesta en cinco partes numeradas. Incluye una lista específica de lo que está permitido y prohibido en la publicidad jurídica según la normativa española. Proporciona una plantilla de calendario de contenido para un despacho especialista en derecho de familia con los picos de demanda estacionales y el contenido recomendado. Añade una checklist de SEO local para despachos de abogados con los 20 puntos más importantes, ordenados por impacto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Captación de clientes locales para despachos de abogados',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de reseñas y reputación online para crecimiento local del negocio',
                'description'      => 'Aprende a construir un sistema proactivo de gestión de reseñas que convierta la satisfacción de tus clientes en reputación online visible, factores de ranking local y fuente de crecimiento sostenido. Diseña procesos de solicitud de reseñas, respuesta a comentarios negativos y monitorización de la reputación que cualquier equipo de Customer Success pueda ejecutar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en gestión de reputación online y SEO local con experiencia diseñando sistemas de reseñas para negocios de consumo y servicios. Guíame para construir un programa completo de gestión de reseñas que mejore el ranking local de mi negocio, aumente la confianza de los potenciales clientes y convierta la satisfacción de mis clientes actuales en crecimiento orgánico visible.

**Contexto:**
Trabajo en Customer Success o en la gestión de un negocio con presencia local (puede ser una cadena con múltiples ubicaciones o un único establecimiento). Entiendo que las reseñas son uno de los factores de ranking más importantes para el Local Pack de Google, pero no tenemos un sistema proactivo para gestionarlas. Quiero cambiar eso.

**Fase 1 — Por qué las reseñas son el factor de ranking local más visible**
Entiende el impacto antes de actuar:
- Cómo Google usa las reseñas en el algoritmo local: cantidad (número total de reseñas), calidad (puntuación media ponderada), frecuencia (reseñas recientes tienen más peso) y relevancia (palabras clave en el texto de la reseña que coinciden con búsquedas)
- Impacto de las reseñas en el CTR y la conversión: cómo un negocio con 4,8 estrellas y 200 reseñas supera en clics a uno con 4,9 estrellas y 12 reseñas aunque ocupe la misma posición en el mapa
- El efecto de las reseñas en la conversión final: datos de comportamiento del consumidor local (porcentaje de usuarios que lee reseñas antes de contactar con un negocio local, impacto de la puntuación en la tasa de conversión)
- Diferencia entre plataformas de reseñas: Google (impacto directo en SEO local), TripAdvisor (hostelería y turismo), Trustpilot (e-commerce y servicios online), Doctoralia (salud), Habitissimo (reformas y hogar); qué plataformas priorizar según tu sector

**Fase 2 — Diseño del proceso de solicitud de reseñas**
Construye un sistema que genere reseñas de forma continua:
- El momento óptimo para pedir la reseña: inmediatamente después del servicio exitoso (cuando la satisfacción está en su punto más alto), no una semana después; cómo identificar el "momento mágico" en tu tipo de negocio
- Canales para solicitar reseñas por efectividad: enlace directo de Google enviado por WhatsApp (conversión más alta en negocios locales de servicio), email de seguimiento post-servicio, código QR en el local, tarjeta física entregada al pagar, mensaje de texto
- Cómo generar el enlace directo de reseña de Google: a través de Google Business Profile Manager, cómo acortarlo con un QR y cómo distribuirlo
- Plantilla de mensaje de solicitud de reseña por WhatsApp: estructura en 3 frases (personalización + motivo + enlace); cómo personalizarlo por tipo de servicio o cliente sin que parezca automatizado
- Frecuencia y volumen: cuántas reseñas nuevas por semana es un ritmo sostenible y natural para Google (un pico repentino puede activar filtros anti-spam); cómo construir un flujo constante

**Fase 3 — Respuesta a reseñas: el arte de la conversación pública**
Las respuestas son tan importantes como las reseñas:
- Por qué responder a TODAS las reseñas (positivas y negativas): señal a Google de un negocio activo; oportunidad de incluir palabras clave locales de forma natural; impacto positivo en la percepción de potenciales clientes que leen las respuestas
- Estructura de respuesta a reseña positiva: agradecimiento personalizado (sin copiar y pegar el mismo texto en todas) + mención del servicio específico + referencia geográfica local + invitación a volver
- Estructura de respuesta a reseña negativa: reconocimiento del problema sin admitir negligencia → disculpa sincera → oferta de solución offline (teléfono o email para resolverlo) → nunca confrontación ni justificación defensiva
- Cómo manejar reseñas falsas de competidores: proceso de reporte a Google, qué pruebas necesitas, tiempos de respuesta de Google, qué hacer si Google no la elimina
- Tono y longitud de las respuestas: informal pero profesional, extensión de 2-4 frases, sin copiar el texto de la reseña completo en la respuesta

**Fase 4 — Monitorización de la reputación multicanal**
No dejes que una reseña negativa te sorprenda:
- Configuración de alertas de Google: cómo crear una alerta de Google por el nombre de tu negocio y tus variantes (con y sin tildes, nombre legal vs nombre comercial) para recibir notificaciones cuando se menciona tu empresa online
- Herramientas de monitorización de reputación: Google Alerts (gratuito), Mention (freemium), ReviewTrackers o Podium (para gestión de reseñas multiubicación); cuándo escalar a herramientas de pago
- Proceso de escalada interna: qué tipo de reseña o mención requiere respuesta inmediata (reseña de 1 estrella en Google, mención en redes con muchos seguidores, artículo de prensa negativo) vs cuáles pueden esperar al ciclo diario
- Dashboard de reputación: cómo construir un panel simple en Google Sheets que agregue la puntuación media, número de reseñas nuevas por semana y distribución de estrellas por plataforma, actualizable manualmente o con Zapier

**Fase 5 — Programa de reputación a escala para múltiples ubicaciones**
Para negocios con varias tiendas o franquiciados:
- Cómo estandarizar el proceso de solicitud de reseñas en todas las ubicaciones sin que pierda la personalización local
- Responsabilidades de respuesta: quién responde en cada ubicación (el manager local vs el equipo central), con qué plantillas y con qué autonomía para personalizar
- Benchmarking interno de reputación: ranking de ubicaciones por puntuación media y número de reseñas; cómo usar los datos de las mejores ubicaciones para replicar sus prácticas en las que tienen peor reputación
- Incentivos internos para el equipo: cómo crear métricas de reputación en los KPIs del equipo de atención al cliente (número de reseñas conseguidas, puntuación media) sin crear incentivos perversos

**Formato de salida:**
Organiza la respuesta en cinco fases numeradas. Proporciona tres plantillas de mensaje de solicitud de reseña por WhatsApp para diferentes tipos de negocio (hostelería, servicios del hogar, servicios profesionales). Incluye cinco ejemplos de respuestas a reseñas negativas frecuentes con su versión "qué no decir" vs "cómo responder correctamente". Añade un cronograma de implementación de 30 días para poner en marcha el programa de reseñas desde cero.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Sistema de gestión de reseñas para crecimiento local',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Posicionamiento local como freelancer en Google Maps y directorios de servicios',
                'description'      => 'Aprende a construir una presencia local online como freelancer o autónomo que te posicione en búsquedas locales relevantes, te diferencie en directorios especializados y genere un flujo constante de clientes potenciales en tu área. Optimiza tu perfil de Google Business, tu presencia en directorios de freelancers locales y tu estrategia de contenido para captar clientes sin depender de plataformas de subasta de proyectos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de marketing local especializado en estrategias de visibilidad para profesionales independientes y autónomos. Guíame para construir una presencia online local sólida como freelancer que me posicione en los primeros resultados de búsqueda cuando clientes locales buscan mis servicios, sin depender exclusivamente de plataformas de intermediación que se llevan una comisión.

**Contexto:**
Soy freelancer o autónomo que ofrece servicios profesionales (diseño, desarrollo, marketing, fotografía, consultoría, formación u otros). Tengo presencia online básica pero no estoy apareciendo en las búsquedas locales relevantes ni en los directorios donde mis clientes potenciales me buscan. Quiero cambiar eso y construir un canal de captación local orgánico propio.

**Bloque 1 — Google Business Profile para freelancers: ¿puedes y cómo?**
Resuelve la duda más frecuente sobre GBP para autónomos:
- ¿Puede un freelancer sin local físico tener un perfil de GBP? Sí: perfil de Área de Servicio (Service Area Business); cómo configurarlo correctamente ocultando la dirección domiciliaria pero definiendo la zona de servicio
- Categoría correcta para cada tipo de freelancer: "Diseñador gráfico", "Desarrollador web", "Consultor de marketing", "Fotógrafo", "Formador empresarial" — cómo elegir la más específica y añadir hasta 9 secundarias
- Descripción del perfil: cómo redactar 750 caracteres que incluyan especialidad, zona de servicio, tipo de cliente al que sirves y diferenciadores; por qué mencionar los barrios y ciudades en las que trabajas habitualmente ayuda al ranking
- Fotos de un freelancer sin local: fotos de proyectos realizados, de ti trabajando (en reuniones con clientes, en el espacio de coworking, en eventos del sector), capturas de pantalla de tu trabajo (webs, diseños, infografías con fondo profesional)
- Posts de GBP para freelancers: qué publicar (proyectos completados, casos de éxito, novedades de tu especialidad con ángulo local, disponibilidad para nuevos proyectos en la zona)

**Bloque 2 — Directorios de servicios profesionales locales**
Más allá de Fiverr y Upwork: dónde encontrar clientes locales:
- Directorios de profesionales por sector con relevancia local: Domestika (para creativos), InfoJobs Autónomos, Habitissimo (para freelancers de reformas y hogar), colegios profesionales online (de diseñadores, de ingenieros, de psicólogos)
- Directorios horizontales de autónomos y freelancers en España: Cronoshare, Bark, Thumbtack (en mercados hispanohablantes), Nubelo (si sigue activo en tu sector), Zaask; cómo optimizar el perfil en cada uno para aparecer en búsquedas locales
- LinkedIn como directorio de profesionales locales: cómo optimizar tu perfil para búsquedas de "freelancer [especialidad] [ciudad]"; la importancia de la sección de ubicación, las habilidades y el extracto con palabras clave locales
- Cámaras de Comercio y asociaciones empresariales locales: directorios de proveedores de servicios que muchas empresas consultan para encontrar freelancers recomendados; cómo darse de alta y qué perfil crear
- Coworkings y espacios de trabajo compartido: muchos tienen directorios de miembros accesibles externamente; ser miembro de un coworking de tu ciudad también refuerza las señales de presencia local

**Bloque 3 — Posicionamiento web local para freelancers**
Tu web como generadora de leads locales sin intermediarios:
- URL y dominio con señal local: cuándo tiene sentido incluir la ciudad en el dominio o en la URL de la landing page (tu-especialidad-ciudad.com vs tu-nombre.com/consultoria-barcelona); pros y contras de cada enfoque
- Página de inicio optimizada para búsqueda local: título de página (H1) que incluya especialidad + ciudad, texto introductorio con referencias a tu zona de servicio, CTA directo (WhatsApp, formulario, Calendly), sección de clientes locales con los que has trabajado
- Testimoniales de clientes locales: por qué el origen del cliente (empresa de tu ciudad) añade relevancia local a tu página; cómo solicitar el testimonio y cómo presentarlo (nombre, empresa, ciudad, resultado obtenido)
- LocalBusiness schema para freelancers: cómo implementar el marcado JSON-LD con @type "ProfessionalService" o el más específico de tu sector, areaServed con las ciudades o zonas que cubres, priceRange orientativo

**Bloque 4 — Contenido local para posicionarte como experto de referencia**
Construye autoridad local que atraiga clientes sin perseguirlos:
- Blog o newsletter con ángulo local: cómo adaptar tu contenido de especialidad a la realidad de tu mercado local (tendencias de tu sector en tu ciudad, empresas locales que han hecho algo interesante en tu área, eventos del sector en tu zona)
- LinkedIn como canal de captación local: cómo crear contenido que sea relevante para las empresas de tu ciudad (casos de éxito con empresas locales, análisis del sector en tu región, noticias que afectan a las empresas de tu zona); cómo usar los filtros de búsqueda de LinkedIn para conectar con decisores en tu ciudad y sector objetivo
- Participación en comunidades locales de negocio: grupos de emprendedores locales en LinkedIn o Telegram, eventos de networking de tu ciudad (¿dónde se reúnen los dueños de empresas que podrían contratarte?), charlas en el coworking local o en la Cámara de Comercio
- Casos de éxito con referencia local: artículos o posts del tipo "Cómo ayudé a [tipo de empresa] de [ciudad] a conseguir [resultado]"; cómo proteger la confidencialidad del cliente mientras cuentas la historia de forma que posicione y venda

**Bloque 5 — Sistema de captación y conversión de clientes locales**
Cierra el ciclo de la presencia local en acción concretas de negocio:
- Proceso de respuesta rápida a consultas locales: por qué responder en menos de 2 horas multiplica la tasa de conversión a reunión; cómo configurar autorespuestas de WhatsApp Business y alertas de email cuando llega un formulario
- Primera llamada o reunión con un cliente local: qué preguntar para cualificar el proyecto, cómo posicionar tu valor diferencial vs las opciones más baratas de plataformas de subasta, cómo cerrar el siguiente paso concreto
- Estrategia de precios locales: cómo conocer los rangos de precio de tu especialidad en tu ciudad (preguntar en comunidades de freelancers, mirar Glassdoor para posiciones equivalentes a tiempo completo, testear con distintos niveles de precio)
- Seguimiento y re-captación: cómo mantener el contacto con clientes locales pasados para generar proyectos recurrentes y referidos; lista de correo de clientes locales pasados con envíos de valor (no solo ofertas)
- Métricas de tu canal de captación local: número de consultas entrantes por canal (GBP, web, LinkedIn, directorio), tasa de conversión a proyecto, ticket medio por tipo de cliente local; cómo usar estos datos para priorizar donde invertir tiempo de marketing

**Formato de salida:**
Organiza la respuesta en cinco bloques numerados con subsecciones. Proporciona una plantilla de perfil de Google Business Profile para un freelancer de servicios digitales (descripción de 750 caracteres con marcadores de posición para personalizar). Incluye una lista de los 10 directorios de freelancers y profesionales más relevantes en España con una puntuación de relevancia por tipo de servicio. Añade un plan de 60 días para construir la presencia local desde cero como freelancer.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Captación de clientes locales para freelancers sin depender de plataformas',
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
