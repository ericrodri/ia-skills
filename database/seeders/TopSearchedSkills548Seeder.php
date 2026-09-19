<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills548Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing de audiencias y contenidos para medios digitales con IA',
                'description'       => 'Domina el marketing de audiencias para plataformas de medios y entretenimiento digital usando IA: estrategias de captación de suscriptores, retención de audiencias, crecimiento en redes sociales y monetización del contenido para creadores y medios digitales.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en marketing digital especializado en la industria de los medios y el entretenimiento, con experiencia en el crecimiento de audiencias para plataformas de streaming, podcasts, newsletters, canales de YouTube y medios digitales nativos, usando inteligencia artificial para personalizar la comunicación y maximizar el engagement.

instrucción: Ayúdame a diseñar una estrategia de marketing de audiencias para una plataforma de contenido digital de entretenimiento que publica series de documentales originales y podcasts sobre cultura y tecnología, que tiene actualmente 80.000 suscriptores en su newsletter y 200.000 seguidores en redes sociales, y que quiere doblar su audiencia activa y lanzar un modelo de membresía de pago en los próximos 12 meses.

Desarrolla los siguientes componentes de la estrategia:

**1. Segmentación de audiencias y análisis del perfil del seguidor ideal**
Define el proceso de conocimiento profundo de la audiencia actual: análisis de los datos demográficos e intereses de los suscriptores de la newsletter y los seguidores de cada red social, identificación de los segmentos de audiencia con mayor engagement (qué tipo de contenido genera más apertura de emails, más tiempo de visualización, más comentarios y compartidos), uso de IA para analizar los comentarios y las respuestas de la audiencia y extraer los temas y formatos que generan mayor resonancia, y definición del perfil del seguidor ideal (quién es, qué consume, qué le mueve a suscribirse y a pagar).

**2. Estrategia de crecimiento de audiencia por canal**
Define el plan de crecimiento en cada canal: YouTube (estrategia de SEO de vídeo para posicionarse en búsquedas relevantes, cadencia de publicación, formatos de vídeo con mayor tasa de conversión a suscriptor), podcast (distribución en las principales plataformas, estrategia de colaboraciones con otros podcasters de la audiencia objetivo, SEO en Spotify y Apple Podcasts), newsletter (optimización de la landing de suscripción, campañas de lead magnet con contenido exclusivo, estrategia de referidos tipo Morning Brew), y redes sociales (estrategia de contenido nativo por plataforma: cortos de YouTube, clips de podcast para Instagram Reels y TikTok, hilos de Twitter/X con los principales insights de cada episodio).

**3. Estrategia de contenido con IA para multiplicar la producción**
Define cómo usar IA para aumentar el volumen de contenido sin perder la voz editorial: proceso de repurposing de cada pieza de contenido original (del episodio de podcast a clips para redes sociales, newsletter de resumen, hilo de Twitter, artículo de blog), uso de IA para generar los títulos, las descripciones y los thumbnails más efectivos para YouTube (testando diferentes variantes con A/B testing automático), herramientas de IA para la transcripción y el subtitulado automático de vídeos y podcasts en múltiples idiomas, y sistema de análisis de tendencias de contenido con IA para identificar los temas con mayor demanda en la audiencia objetivo antes de producirlos.

**4. Diseño y lanzamiento del modelo de membresía**
Define la estrategia de monetización vía suscripción: estructura de los niveles de membresía (gratis con acceso limitado, premium con todo el contenido, supporter con acceso + comunidad + merchandising), beneficios exclusivos para suscriptores de pago que justifican el precio (contenido exclusivo, acceso anticipado a nuevos episodios, sesiones de preguntas con los creadores, foro privado de la comunidad), estrategia de lanzamiento del modelo de pago con los suscriptores actuales (oferta de precio fundador para los primeros 1.000 suscriptores, campaña de comunicación de la razón de ser del modelo de membresía), y objetivo de conversión del 3% de la audiencia gratuita a la membresía de pago en los primeros 6 meses.

**5. Email marketing y retención de la audiencia activa**
Define el sistema de comunicación con los suscriptores: secuencia de bienvenida para los nuevos suscriptores de la newsletter (serie de 5 emails que introduce la misión, el equipo, el mejor contenido y la propuesta de membresía), newsletter semanal con el resumen del mejor contenido de la semana y recomendaciones personalizadas según los intereses del suscriptor, campaña de reactivación para los suscriptores inactivos (los que no han abierto un email en 90 días), y análisis de la tasa de churn de los suscriptores de pago con acciones de retención específicas para los patrones de abandono más frecuentes.

**6. Medición del rendimiento de la estrategia de audiencia**
Define el framework de métricas: indicadores de crecimiento de audiencia (nuevos suscriptores por canal, tasa de crecimiento semanal vs. objetivo), indicadores de engagement (tasa de apertura de newsletter, tiempo de visualización medio en YouTube, tasa de retención de episodios de podcast), indicadores de monetización (tasa de conversión de gratuito a pago, revenue mensual por suscriptor, tasa de churn mensual de la membresía), y dashboard mensual con el análisis del rendimiento y las recomendaciones de ajuste de la estrategia para el mes siguiente.

Proporciona un calendario editorial de los primeros 3 meses con los temas de contenido, los canales de distribución y las acciones de marketing para el lanzamiento de la membresía, y el modelo de email de lanzamiento para los suscriptores actuales de la newsletter.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Estrategia de crecimiento de audiencia y lanzamiento de membresía para medio digital',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Plataformas de streaming y distribución de contenido con IA',
                'description'       => 'Diseña y escala plataformas de distribución de contenido digital usando IA: arquitectura de sistemas de streaming de vídeo y audio, CDN, sistemas de recomendación personalizados, gestión de derechos digitales y analítica de audiencias.',
                'prompt_content'    => <<<'EOT'
Actúa como un arquitecto de software especializado en plataformas de distribución de contenido digital y streaming, con experiencia en el diseño de sistemas de vídeo on demand (VOD), audio streaming y plataformas de podcast que sirven a millones de usuarios concurrentes, y en la integración de inteligencia artificial para personalizar la experiencia del oyente y del espectador.

instrucción: Ayúdame a diseñar la arquitectura técnica de una plataforma de streaming de vídeo y audio para una productora de contenido independiente que quiere distribuir su catálogo de series documentales y podcasts directamente a sus suscriptores sin depender de plataformas de terceros (YouTube, Spotify), con un modelo de suscripción de pago y un sistema de recomendación personalizado.

Desarrolla los siguientes componentes de la arquitectura:

**1. Arquitectura de ingestión y procesamiento de contenido**
Define el pipeline de contenido desde la producción hasta la distribución: sistema de ingestión de archivos de vídeo en alta resolución (4K RAW) y de audio (WAV 48kHz), pipeline de transcodificación automática a múltiples resoluciones y formatos (HLS, DASH para vídeo; MP3, AAC, OGG para audio) optimizados para distintos tipos de conexión y dispositivo, generación automática de miniaturas (thumbnails) y de chapitres del vídeo con IA, extracción automática de la transcripción del audio con modelos de speech-to-text, y sistema de metadatos del contenido (título, descripción, etiquetas, personas, lugares) enriquecido con IA.

**2. Infraestructura de delivery y CDN**
Define la arquitectura de distribución: diseño de la red de entrega de contenido (CDN) para garantizar baja latencia y alta disponibilidad en los mercados objetivo (España y Latinoamérica), estrategia de almacenamiento del contenido en múltiples regiones geográficas (AWS S3 multi-region, Cloudflare R2), adaptive bitrate streaming para ajustar automáticamente la calidad del stream según el ancho de banda del usuario, y diseño del sistema de caché de los contenidos más populares para reducir los costes de transferencia de datos y mejorar el tiempo de carga.

**3. Sistema de gestión de derechos digitales (DRM) y acceso**
Define el sistema de protección del contenido: implementación de DRM para el contenido de vídeo premium (Widevine para Android y Chrome, FairPlay para iOS y Safari, PlayReady para Windows), gestión de las licencias de reproducción con tiempo de expiración y vinculación al dispositivo, sistema de download offline con cifrado del contenido descargado, y control de la concurrencia de streams simultáneos por cuenta de suscriptor.

**4. Motor de recomendación personalizada con IA**
Diseña el sistema de recomendaciones: modelo de collaborative filtering basado en el historial de reproducción de usuarios similares, modelo de content-based filtering basado en los atributos del contenido (género, temática, duración, nivel de profundidad) y las preferencias declaradas del usuario, sistema de exploración-explotación que equilibra las recomendaciones de contenido conocido con el descubrimiento de nuevo contenido de nicho, y recomendación del momento óptimo de consumo (notificación push en el momento en que el usuario suele consumir contenido según su historial).

**5. Analítica de audiencias y comportamiento del usuario**
Define el sistema de métricas de contenido: tracking del comportamiento de reproducción (tasa de inicio, tasa de finalización, puntos de abandono, pausas y saltos en el contenido), análisis de la retención de episodios por segundo del audio/vídeo para identificar los momentos de mayor y menor engagement, correlación entre el engagement con el contenido y la probabilidad de renovación de la suscripción, y dashboard de analítica del catálogo para el equipo editorial que muestra el rendimiento de cada pieza de contenido y las recomendaciones de mejora.

**6. Arquitectura del sistema de suscripción y pagos**
Define la infraestructura de monetización: integración con pasarelas de pago (Stripe para tarjeta de crédito, PayPal, SEPA para domiciliación bancaria), gestión del ciclo de vida de la suscripción (alta, renovación automática, cancelación, pausa), sistema de gestión de pruebas gratuitas con conversión a pago, y arquitectura del modelo de facturación con soporte para múltiples monedas y países, gestión de los impuestos locales (IVA en España, impuestos en Latinoamérica) y generación automática de facturas para los suscriptores.

Proporciona una estimación de costes de infraestructura mensual para 50.000 suscriptores activos que consumen una media de 8 horas de contenido al mes, con el desglose por componente (almacenamiento, CDN, procesamiento, base de datos) y las recomendaciones de optimización de costes.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Plataforma de streaming propia con DRM, recomendaciones y analítica para productora independiente',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de identidad visual y UX para plataformas de entretenimiento con IA',
                'description'       => 'Crea experiencias visuales y de usuario memorables para plataformas de entretenimiento digital usando IA: diseño de la identidad visual de medios y creadores, interfaces de plataformas de contenido, thumbnails que disparan el CTR y sistemas de diseño escalables.',
                'prompt_content'    => <<<'EOT'
Actúa como un diseñador de experiencia de usuario y diseñador gráfico especializado en la industria del entretenimiento y los medios digitales, con experiencia en el diseño de plataformas de vídeo, podcast y newsletters que compiten por la atención del usuario en un entorno de alta saturación de contenido.

instrucción: Ayúdame a diseñar la identidad visual completa y la experiencia de usuario de una nueva plataforma de contenido digital que publica documentales y podcasts de largo formato sobre cultura contemporánea, tecnología y sociedad, dirigida a un público adulto de 28-45 años con alto nivel de educación e intereses en el pensamiento crítico y el análisis de fondo.

Desarrolla los siguientes aspectos del diseño:

**1. Identidad visual y sistema de marca**
Define los elementos del sistema de identidad: concepto creativo de la marca que refleja los valores de la plataforma (rigor, profundidad, perspectiva independiente), diseño del logotipo con sus variantes (principal, compacto, ícono de app), paleta de colores que transmite credibilidad y modernidad sin ser corporativa o fría (colores primarios, secundarios y de acento, con sus valores hexadecimales y sus nombres propios), sistema tipográfico con la familia de fuentes para titulares, texto de cuerpo y UI, y guía de uso del tono visual en los distintos contextos (app, web, redes sociales, materiales impresos).

**2. Diseño de thumbnails y portadas que maximizan el CTR**
Define el sistema visual del contenido: plantillas de thumbnail para documentales de vídeo que equilibran el impacto visual con la legibilidad del título en dispositivos móviles, portadas de episodios de podcast que son reconocibles en la pequeña miniatura de Spotify y Apple Podcasts, sistema de variantes de thumbnail para A/B testing automático con IA (prueba de diferentes imágenes de fondo, colores de texto y posiciones del título), y guía de estilo para que los thumbnails de todos los episodios sean coherentes con la marca sin ser repetitivos.

**3. Diseño de la interfaz de la plataforma web y app**
Define la arquitectura visual de la interfaz: diseño de la home page de la plataforma con la jerarquía de contenido que maximiza el descubrimiento (destacado editorial, series en curso, recomendaciones personalizadas, lo más popular), diseño del player de vídeo y audio con los controles y funcionalidades que espera el usuario de contenido de largo formato (marcadores de capítulos, velocidad de reproducción, modo de solo audio para los documentales), diseño de las páginas de detalle del contenido (sinopsis, episodios, creadores, contenido relacionado), y diseño del área de cuenta del suscriptor (gestión de la suscripción, historial de reproducción, lista de seguimiento).

**4. Sistema de diseño y componentes de UI**
Define el design system de la plataforma: librería de componentes de UI reutilizables (botones, tarjetas de contenido, inputs de formulario, modales, navegación) con sus variantes de estado (hover, active, disabled, loading), sistema de espaciado y grid que garantiza la coherencia visual en todas las páginas, guía de uso de las animaciones y transiciones de la interfaz (duración, easing, propósito), y documentación del design system para el equipo de desarrollo en Figma o equivalente.

**5. Diseño de la comunicación visual en redes sociales**
Define el sistema de contenido visual para cada red social: plantillas de clips de vídeo para Instagram Reels y TikTok (proporciones, uso de subtítulos, colores del branding), formato de las cards de cita y de los datos destacados para Instagram Stories y posts estáticos, diseño de los banners de portada de YouTube con la frecuencia de actualización recomendada, y guía de estilo para las imágenes de acompañamiento de los hilos de Twitter/X que mantienen la coherencia visual de la marca.

**6. Diseño accesible e inclusivo de la plataforma**
Define los estándares de accesibilidad aplicados al diseño: contraste de color mínimo AA (4.5:1 para texto normal, 3:1 para texto grande) en todos los componentes de la interfaz en modo claro y oscuro, diseño de la interfaz con tamaños de objetivo táctil mínimos de 44x44px para usuarios en dispositivos móviles, uso de jerarquías tipográficas que permiten a los lectores de pantalla navegar el contenido de forma lógica, y diseño del reproductor de media con controles accesibles por teclado y compatibles con tecnologías asistivas.

Proporciona un moodboard del concepto visual con referencias de plataformas y publicaciones que comparten la estética objetivo, y un checklist de diseño para evaluar cada nueva pieza de contenido antes de publicarla (thumbnail, descripción, etiquetas) que maximice el CTR y la coherencia de marca.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Identidad visual y UX para plataforma de contenido cultural de largo formato',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Monetización y venta de publicidad en medios digitales con IA',
                'description'       => 'Maximiza los ingresos publicitarios de un medio o plataforma digital usando IA: estrategias de venta de publicidad directa, programmatic advertising, branded content, patrocinios de podcast y modelos de revenue diversificado para medios independientes.',
                'prompt_content'    => <<<'EOT'
Actúa como un director de ventas publicitarias y monetización para medios digitales, con experiencia en el desarrollo de estrategias de ingresos para publicaciones digitales, podcasts y plataformas de vídeo independientes que compiten con los grandes medios por los presupuestos publicitarios de los anunciantes.

instrucción: Ayúdame a diseñar una estrategia integral de monetización publicitaria para un medio digital independiente que tiene 500.000 usuarios únicos mensuales, 150.000 suscriptores de newsletter y produce 4 podcasts con una media de 80.000 descargas semanales por episodio, y que quiere diversificar sus fuentes de ingresos más allá de la publicidad programática y reducir su dependencia de Google AdSense.

Desarrolla los siguientes componentes de la estrategia:

**1. Análisis del inventario publicitario y su valor de mercado**
Define el inventario disponible y su precio de mercado: formatos de display en la web (leaderboard, half page, sticky footer) con los CPMs históricos y el benchmarking vs. medios de nicho similares, formatos de publicidad en la newsletter (patrocinio dedicado, mención editorial, banner de footer) con los CPMs y la tasa de clicks esperada, formatos de publicidad en los podcasts (mid-roll, pre-roll, host-read ad) con el coste por mil descargas (CPM) de referencia para cada categoría temática, y análisis del perfil de la audiencia como argumento de venta (datos demográficos, poder adquisitivo, intención de compra) para justificar un precio premium frente a medios masivos.

**2. Estrategia de venta directa y construcción del equipo comercial**
Define el proceso de venta directa de publicidad: identificación de las categorías de anunciantes con mayor afinidad con la audiencia del medio (finanzas personales, tecnología, formación y cursos online, salud y bienestar, turismo experiencial), proceso de prospección y contacto con los responsables de marketing de las marcas objetivo, construcción de los media kits y las propuestas comerciales personalizadas por categoría de anunciante, y uso de IA para identificar qué marcas están invirtiendo en publicidad en medios de nicho similares y no están aún en el radar del equipo comercial.

**3. Branded content y patrocinios de largo plazo**
Define la estrategia de colaboraciones editoriales con las marcas: diseño de los formatos de branded content que no comprometen la credibilidad editorial (series de episodios de podcast patrocinados por una marca, reportajes en profundidad sobre el sector del anunciante, newsletters temáticas con aportación de expertos de la marca), política editorial de transparencia en el branded content (declaración clara de la relación comercial con el patrocinador), y proceso de venta de los patrocinios de temporada de los podcasts (paquetes de 13 episodios, con exclusividad de categoría y co-marketing en redes sociales del medio).

**4. Publicidad programática y header bidding**
Define la estrategia de publicidad automatizada: configuración del header bidding con los principales SSPs (Google Ad Manager, Prebid, Amazon TAM) para maximizar el yield del inventario de display no vendido directamente, estrategia de floor prices por sección y tipo de contenido para evitar la devaluación del inventario, uso de los datos de primera mano de la audiencia (segmentos de interés, comportamiento de lectura) para crear audience segments vendibles a los anunciantes vía programmatic direct, y análisis mensual del mix entre venta directa y programática para optimizar el revenue total del inventario.

**5. Diversificación de ingresos más allá de la publicidad**
Define las fuentes de ingresos complementarias: modelo de suscripción de membresía para lectores que quieren apoyar el medio y acceder a contenido exclusivo (complementario a la publicidad, no excluyente), eventos presenciales y online patrocinados por marcas del sector (conferencias, webinars, podcasts en directo), cursos y formación sobre los temas de expertise del medio monetizados directamente a los lectores, y venta de datos de audiencia anonimizados a través de clean rooms para anunciantes que quieren activar audiencias de terceros respetando el RGPD.

**6. Medición del rendimiento comercial y reporting para los anunciantes**
Define el sistema de reporting: métricas de campaña para los anunciantes de publicidad directa (impresiones verificadas, CTR, viewability, conversiones atribuidas), sistema de reporting post-campaña del branded content (alcance de los episodios, menciones en redes sociales, tráfico referido al anunciante), análisis mensual del RPM (revenue por mil pageviews) por sección y formato para identificar las oportunidades de mejora del yield, y dashboard de revenue del equipo comercial con el pipeline de ventas, el presupuesto anunciado y el forecast de ingresos para el trimestre.

Proporciona un media kit tipo para la venta directa a anunciantes de tecnología y un modelo de propuesta de patrocinio de temporada para uno de los podcasts del medio.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Estrategia de monetización publicitaria diversificada para medio digital independiente',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product management para plataformas de entretenimiento y streaming con IA',
                'description'       => 'Diseña y gestiona productos digitales de entretenimiento usando IA: plataformas de streaming de vídeo y audio, apps de podcast, plataformas de gaming y herramientas para creadores de contenido que resuelven necesidades reales de los usuarios.',
                'prompt_content'    => <<<'EOT'
Actúa como un Product Manager senior especializado en plataformas de entretenimiento digital y streaming, con experiencia en la gestión de productos de consumo masivo que compiten por la atención y el tiempo del usuario en un mercado altamente saturado, y en el uso de datos de comportamiento de usuario e inteligencia artificial para tomar decisiones de producto.

instrucción: Ayúdame a diseñar y gestionar la evolución de producto de una plataforma de podcast que tiene 2 millones de oyentes activos mensuales y quiere lanzar un modelo de suscripción premium con funcionalidades exclusivas, mejorar la retención de oyentes y aumentar el tiempo de escucha medio por usuario en un 25% en los próximos 12 meses.

Desarrolla los siguientes aspectos de la gestión del producto:

**1. Diagnóstico del producto actual y oportunidades de mejora**
Define el proceso de análisis de la situación actual: análisis del funnel de activación (% de usuarios que completan el onboarding, escuchan el primer episodio completo, vuelven al día siguiente), análisis de la retención a 7, 14 y 30 días para identificar en qué momento del journey el usuario abandona con mayor frecuencia, análisis de los patrones de uso de los segmentos de usuarios con mayor retención vs. los que abandonan (qué hacen diferente los usuarios que se quedan), y análisis de los datos cualitativos (reseñas en los app stores, respuestas a encuestas de satisfacción) para complementar los datos cuantitativos con el contexto del usuario.

**2. Diseño del modelo de suscripción premium**
Define la propuesta de valor del tier de pago: identificación de las funcionalidades que los usuarios más comprometidos echarían de menos si no las tuvieran (escucha sin anuncios, descarga offline, acceso anticipado a nuevos episodios, velocidad de reproducción variable, marcadores y notas de episodio), proceso de validación de la disposición a pagar mediante encuestas de willingness to pay y análisis de los modelos de monetización de competidores (Spotify Premium, Apple Podcasts, Pocket Casts), definición del precio del plan premium y la estructura de descuentos (anual vs. mensual, plan familiar, plan estudiantil), y estrategia de conversión de usuarios gratuitos a premium.

**3. Sistema de descubrimiento y recomendación de contenido**
Define el motor de descubrimiento: análisis de los patrones de consumo actuales para identificar los principales problemas de descubrimiento (¿qué buscan los usuarios y no encuentran?, ¿cuándo abandonan la búsqueda sin escuchar?), diseño del sistema de recomendación personalizada basado en el historial de escucha, los intereses declarados y el comportamiento de usuarios similares, y prueba de distintos formatos de recomendación (lista curada por el equipo editorial, algoritmo puro, combinación híbrida) para identificar cuál genera mayor engagement y mayor tiempo de escucha.

**4. Funcionalidades para creadores de podcast**
Define el portfolio de herramientas para los podcasters que publican en la plataforma: dashboard de analítica de audiencia con métricas detalladas de cada episodio (descargas, retención de escucha por minuto, fuentes de descubrimiento), herramientas de monetización para creadores (suscripción de pago al podcast individual, venta de contenido exclusivo, donaciones de oyentes), sistema de distribución inteligente que recomienda los momentos óptimos de publicación y los hashtags y descripciones que maximizan el alcance, y tools de comunidad para que los creadores interactúen con sus oyentes más comprometidos.

**5. Roadmap del producto para los próximos 12 meses**
Define las fases del roadmap: Q1 (mejoras de retención: onboarding personalizado, sistema de recomendaciones mejorado, notificaciones inteligentes de nuevos episodios), Q2 (lanzamiento del plan premium: funcionalidades sin anuncios y offline, early access), Q3 (funcionalidades sociales: listas de escucha compartidas, clipper de momentos favoritos, integración con redes sociales), Q4 (herramientas para creadores premium: analítica avanzada, monetización directa). Para cada trimestre, define las métricas de éxito y los criterios para ajustar el roadmap.

**6. Framework de decisiones de producto basado en datos**
Define el proceso de priorización: sistema de scoring de iniciativas de producto (impacto esperado en las métricas clave, confianza en el estimado, esfuerzo de implementación, alineación estratégica), proceso de A/B testing continuo para todas las funcionalidades de impacto relevante (tamaño de muestra mínimo, duración del test, criterios de decisión), ciclo de revisión mensual del roadmap con los datos de las métricas clave y los aprendizajes de los tests en curso, y proceso de comunicación del roadmap y las decisiones de producto al equipo (ingeniería, diseño, contenido, marketing).

Proporciona el análisis de las 5 principales oportunidades de mejora para aumentar el tiempo de escucha medio por usuario, con el impacto estimado de cada una y el esfuerzo de implementación, siguiendo el formato de un product brief ejecutivo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Gestión de producto y lanzamiento de suscripción premium en plataforma de podcast',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión del talento creativo en la industria del entretenimiento con IA',
                'description'       => 'Atrae, desarrolla y retiene el talento creativo de la industria del entretenimiento y los medios digitales usando IA: reclutamiento de guionistas, editores, creadores y periodistas, gestión de equipos creativos remotos y desarrollo de la cultura de empresa.',
                'prompt_content'    => <<<'EOT'
Actúa como un Director de Recursos Humanos especializado en la industria del entretenimiento, los medios digitales y la economía creativa, con experiencia en la gestión de equipos creativos (guionistas, editores de vídeo, productores de podcast, periodistas y creadores de contenido) en entornos de trabajo remoto y de alta presión creativa.

instrucción: Ayúdame a diseñar un sistema integral de gestión del talento creativo para una empresa de medios digitales independiente con 35 empleados (redactores, editores de vídeo, productores de podcast, diseñadores y desarrolladores) y un equipo adicional de 20 colaboradores freelance recurrentes, que trabajan completamente en remoto y quiere mejorar su employer brand en el ecosistema creativo digital para captar el mejor talento sin competir en salario con las grandes plataformas.

Desarrolla los siguientes componentes del sistema:

**1. Employer branding para talento creativo**
Define la estrategia de atracción de talento: propuesta de valor al empleado creativo diferenciada (autonomía editorial, proyectos con impacto cultural, flexibilidad total de horario y lugar de trabajo, comunidad de pares con alto nivel de expertise), presencia en las plataformas donde busca empleo el talento creativo digital (LinkedIn, Twitter/X, foros y comunidades de periodismo y producción de vídeo), alianzas con escuelas de comunicación, periodismo y producción audiovisual para captación de perfiles junior con alto potencial creativo, y proceso de referidos del equipo actual como principal fuente de talento senior.

**2. Proceso de selección para roles creativos**
Define el proceso de evaluación adaptado a los perfiles creativos: prueba de portafolio como filtro inicial (criterios de evaluación del trabajo previo por rol: pieza escrita, episodio de podcast producido, vídeo editado, diseño editorial), entrevista de trabajo en vivo (escribir un titular y un gancho de 200 palabras en 20 minutos para un redactor, editar una secuencia corta para un editor de vídeo) que evalúa el proceso creativo real del candidato, entrevista cultural con miembros del equipo creativo para evaluar el fit con los valores editoriales del medio, y uso de IA para analizar el portafolio de los candidatos (consistencia del tono, calidad técnica, alineación con el estilo editorial del medio) antes de la entrevista humana.

**3. Onboarding de talento creativo remoto**
Define el programa de incorporación para el equipo remoto: semana 1 de inmersión editorial (conocimiento del archivo de contenido del medio, las guías de estilo, las audiencias objetivo y los procesos de producción), proceso de mentoría con un editor senior durante el primer mes que revisa el primer proyecto del nuevo incorporado con feedback detallado, sistema de buddy para la integración cultural y el conocimiento de los procesos informales del equipo, y retroalimentación estructurada a los 30, 60 y 90 días con el responsable directo y el equipo de personas para detectar y resolver problemas de adaptación temprano.

**4. Desarrollo de la cultura creativa en equipos remotos**
Define las iniciativas de cohesión y cultura: rituales de equipo que mantienen la conexión en remoto (reunión editorial semanal de 45 minutos donde el equipo comparte los proyectos en curso y los aprendizajes de la semana, canal de Slack de inspiración donde cada persona comparte el mejor contenido que ha consumido esa semana), retiro presencial del equipo dos veces al año para proyectos colaborativos y construcción de vínculos personales, proceso de reconocimiento del trabajo excepcional (mención en el all-hands mensual, bono de proyecto, oportunidad de liderar un proyecto de mayor visibilidad), y gestión de los conflictos creativos y las diferencias de criterio editorial con un proceso claro de toma de decisión final.

**5. Gestión del rendimiento en roles creativos**
Define el sistema de evaluación adaptado a la naturaleza del trabajo creativo: métricas cuantitativas de producción por rol (piezas publicadas, tiempo de producción por episodio, satisfacción de la audiencia medida en engagement), métricas cualitativas de impacto creativo (calidad editorial evaluada por el editor jefe, originalidad de los enfoques, capacidad de mejora a partir del feedback), proceso de revisión trimestral con foco en el crecimiento profesional y no solo en el rendimiento pasado, y sistema de feedback continuo entre pares (peer review de proyectos) que complementa la evaluación del manager.

**6. Gestión de colaboradores freelance y economía de proyectos**
Define el sistema de gestión de la red de freelancers: base de datos de colaboradores recurrentes con su portfolio, disponibilidad, tarifas y evaluaciones de proyectos anteriores, proceso de onboarding simplificado para los nuevos freelancers (guía de estilo, proceso de entrega, tarifas y condiciones de pago), sistema de asignación de proyectos que prioriza a los colaboradores con mayor rendimiento en proyectos similares, y estrategia de fidelización de los mejores freelancers (tarifa preferente, acceso prioritario a proyectos de mayor visibilidad, reconocimiento en los créditos del contenido).

Proporciona un ejemplo de oferta de empleo para un Productor de Podcast Senior y el protocolo de feedback editorial semanal que el equipo usa para mejorar la calidad del contenido de forma continua.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Gestión del talento creativo remoto en medio digital independiente',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Modelos de negocio y finanzas para medios digitales con IA',
                'description'       => 'Diseña modelos de negocio sostenibles y gestiona las finanzas de un medio digital usando IA: análisis de los ingresos por suscripción y publicidad, control de costes de producción de contenido, previsiones financieras y estrategias de rentabilidad.',
                'prompt_content'    => <<<'EOT'
Actúa como un director financiero y consultor de modelos de negocio especializado en la industria de los medios digitales, con experiencia en el análisis financiero y la estrategia de crecimiento de publicaciones digitales, podcasts, newsletters de pago y plataformas de contenido independientes que buscan la sostenibilidad financiera a largo plazo.

instrucción: Ayúdame a diseñar el modelo financiero y la estrategia de negocio de un medio digital independiente que actualmente genera 180.000€ anuales (60% de publicidad programática y directa, 30% de membresías, 10% de eventos), tiene 25 empleados y freelancers, y quiere alcanzar los 400.000€ de ingresos anuales y la rentabilidad neta positiva en los próximos 24 meses cambiando el mix de ingresos para reducir la dependencia de la publicidad.

Desarrolla los siguientes componentes del análisis financiero y la estrategia:

**1. Diagnóstico financiero del modelo actual**
Define el análisis de la situación de partida: desglose de la cuenta de resultados actual (ingresos por fuente, costes directos de producción de contenido por formato, costes de estructura: personal, tecnología, marketing), análisis del margen por línea de negocio (margen bruto de la publicidad directa vs. programática, coste de adquisición de un suscriptor de membresía vs. su LTV, rentabilidad de cada evento organizado), y diagnóstico de los cuellos de botella financieros que limitan el crecimiento (¿cuál es el coste marginal de producir más contenido?, ¿cuál es el límite de suscriptores que el equipo actual puede atender sin contratar?).

**2. Diseño del nuevo mix de ingresos objetivo**
Define la estrategia de diversificación de ingresos hacia un mix más sostenible: objetivo de mix a 24 meses (membresías al 50%, publicidad premium directa al 30%, eventos y formación al 15%, licencias de contenido y branded content al 5%), plan para escalar las membresías (estrategia de conversión, precio, beneficios, comunicación), plan para reducir la dependencia de la publicidad programática (impacto de la pérdida de cookies de terceros, estrategia de datos de primera mano para venta directa), y análisis del impacto de cada cambio en el modelo de ingresos en el P&L mensual durante los 24 meses.

**3. Modelo financiero de la suscripción de membresía**
Define el modelo de crecimiento de las membresías: métricas clave del modelo de suscripción (MRR, churn mensual, LTV, CAC, ratio LTV/CAC), simulación de distintos escenarios de crecimiento de suscriptores (conservador, base, optimista) con el impacto en el MRR y en la valoración del medio, análisis de la cohorte de suscriptores actuales (retención por cohorte de alta, motivos de cancelación, impacto de las campañas de retención en el churn), y plan de inversión en marketing de adquisición de suscriptores con el CAC máximo sostenible según el LTV objetivo.

**4. Gestión de costes de producción y eficiencia operativa**
Define el sistema de control de costes: análisis del coste por pieza de contenido por formato (artículo de largo formato, episodio de podcast, vídeo documental, newsletter), identificación de las ineficiencias en los procesos de producción que aumentan el coste por pieza sin mejorar la calidad, uso de IA para reducir el coste de producción de determinados formatos (transcripción automática, generación de primeros borradores, subtitulado, SEO automático), y modelo de economías de escala que proyecta cómo el coste por pieza va a bajar a medida que el volumen de producción crece.

**5. Estrategia de captación de inversión o financiación**
Define las opciones de financiación para el crecimiento: bootstrapping vs. inversión externa (análisis de los inversores especializados en medios digitales independientes: fondos de impacto, fondos de media, family offices con interés en el sector), modelo de financiación participativa de los lectores (crowdfunding de membresías fundadoras, co-propiedad de los lectores como cooperativa de medios), y análisis de las ayudas públicas disponibles para medios digitales independientes en España (ayudas del Ministerio de Cultura, convocatorias de la UE para medios de comunicación, bonificaciones de la Seguridad Social para empresas culturales).

**6. Cuadro de mando financiero y previsiones a 24 meses**
Define el sistema de reporting financiero: P&L mensual con el seguimiento de cada línea de ingresos y costes vs. el presupuesto, dashboard de las métricas clave del modelo de suscripción (MRR, nuevas altas, cancelaciones, churn, expansión de revenue), previsión financiera a 24 meses con los hitos de inversión (contratación de nuevo personal, nuevas herramientas tecnológicas) y los umbrales de rentabilidad de cada línea de negocio, y análisis de sensibilidad que muestra el impacto en el resultado neto de diferentes escenarios de crecimiento de membresías y de churn.

Proporciona el modelo de P&L mensual en una hoja de cálculo con las fórmulas de proyección y los escenarios de crecimiento, y el análisis del punto de equilibrio de la línea de membresías (número mínimo de suscriptores de pago necesario para cubrir los costes fijos del equipo editorial).
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Modelo financiero y estrategia de diversificación de ingresos para medio digital independiente',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Derechos de autor y contratos en la industria del entretenimiento con IA',
                'description'       => 'Navega el marco legal de la propiedad intelectual y los contratos en la industria del entretenimiento digital usando IA: derechos de autor en contenido generado con IA, contratos de producción audiovisual, licencias de música y gestión de derechos en plataformas digitales.',
                'prompt_content'    => <<<'EOT'
Actúa como un abogado especializado en propiedad intelectual y derecho del entretenimiento, con experiencia en el asesoramiento a productoras audiovisuales, sellos discográficos, plataformas de streaming, creadores de contenido y medios digitales sobre la protección y la gestión de sus derechos de autor en el entorno digital, incluyendo las implicaciones legales del uso de inteligencia artificial en la creación de contenido.

instrucción: Ayúdame a diseñar un marco legal completo de gestión de la propiedad intelectual para una productora audiovisual independiente que produce documentales originales, podcasts y contenido para marcas, y que quiere proteger su catálogo, gestionar correctamente los contratos con su equipo creativo y los talents, y navegar el complejo entorno de los derechos de autor en la distribución digital.

Desarrolla los siguientes componentes del marco legal:

**1. Protección de la propiedad intelectual del catálogo**
Define las estrategias de protección: registro de los títulos y la identidad visual de las series y podcasts en la Oficina Española de Patentes y Marcas (OEPM) para prevenir el uso no autorizado, depósito legal de las obras audiovisuales en el Registro de la Propiedad Intelectual como prueba de titularidad y fecha de creación, gestión de los derechos morales y económicos de los autores que participan en cada producción (derecho de paternidad, derecho a la integridad de la obra, derechos de reproducción, distribución, comunicación pública y transformación), y estrategia de vigilancia y defensa ante infracciones de los derechos de la productora en plataformas digitales.

**2. Contratos con el equipo creativo y los colaboradores**
Define los modelos de contrato para cada perfil del equipo: contrato de trabajo a tiempo completo con clausula de cesión de derechos de propiedad intelectual de las obras creadas en el ejercicio de las funciones del puesto, contrato de obra y servicio con freelancers que incluye la cesión de todos los derechos de explotación de la obra entregada a la productora (derechos exclusivos, globales, perpetuos y para todos los medios conocidos o por conocer), contrato de colaboración con co-autores de documentales donde se regula la coautoría y la distribución de los derechos y las regalías, y cláusulas específicas para el contenido generado con herramientas de IA (quién es el autor, cómo se acredita, qué derechos son transferibles).

**3. Derechos de autor en el contenido generado con IA**
Define el estado actual del marco legal de la IA y los derechos de autor: posición actual de la legislación española y europea sobre la titularidad de las obras generadas total o parcialmente por IA (el contenido puramente generado por IA no es protegible por derechos de autor en la UE; el contenido en el que la IA es una herramienta con aporte creativo humano significativo sí puede serlo), implicaciones legales del uso de contenido con derechos de autor de terceros para entrenar modelos de IA (el debate actual en la UE y en España sobre el text and data mining y las excepciones de la Directiva de Derechos de Autor en el Mercado Único Digital), y recomendaciones prácticas para la productora sobre cómo usar herramientas de IA en su proceso de producción minimizando los riesgos de infracción.

**4. Licencias de música y sincronización**
Define el régimen de derechos musicales aplicable a las producciones audiovisuales: tipos de derechos sobre una obra musical (derechos de autor sobre la composición gestionados por SGAE, derechos de fonograma sobre la grabación gestionados por AGEDI/AIE), proceso de obtención de la licencia de sincronización para usar una canción en un documental o podcast (contacto con el editor musical y el sello discográfico, negociación del fee y las condiciones), alternativas al uso de música comercial que simplifican la gestión de derechos (música bajo licencias Creative Commons, música libre de derechos, bibliotecas de música de producción), y gestión de los derechos musicales en la distribución de las producciones en plataformas de streaming (Content ID de YouTube, reclamaciones de Spotify).

**5. Contratos de distribución con plataformas digitales**
Define las cláusulas clave de los acuerdos de distribución: análisis de las condiciones de los contratos con las principales plataformas de distribución (YouTube, Spotify, Vimeo, plataformas de VOD) en cuanto a la cesión de derechos, la exclusividad, las ventanas de distribución y la liquidación de regalías, derechos mínimos que la productora debe conservar para poder relicenciar el contenido en otros mercados o formatos en el futuro (derechos de adaptación, doblaje, subtitulado, remake), y estrategia de ventanas de distribución que maximiza el valor del catálogo (exclusividad de plataforma en la primera ventana, distribución libre en la segunda ventana).

**6. Gestión de reclamaciones y resolución de conflictos de derechos**
Define el protocolo de respuesta a conflictos: proceso de respuesta a las reclamaciones de derechos de autor en YouTube (Content ID), Spotify y otras plataformas, gestión de las notificaciones de infracción (DMCA takedowns) recibidas por la productora y el proceso de contra-notificación cuando la reclamación no está fundamentada, y proceso de resolución extrajudicial de conflictos de derechos de autor entre la productora y sus colaboradores o competidores.

Proporciona un modelo de contrato de cesión de derechos para freelancers creativos (guionista, compositor, director de fotografía) y las recomendaciones sobre cómo documentar el proceso creativo cuando se usan herramientas de IA para defender la autoría humana de la obra.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Marco legal de propiedad intelectual y contratos para productora audiovisual independiente',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Moderación de comunidades y soporte a creadores con IA',
                'description'       => 'Diseña sistemas de moderación de comunidades digitales y soporte a creadores de contenido usando IA: moderación automática de comentarios y contenido, gestión de reportes de abuso, soporte técnico a creadores y análisis del clima de la comunidad.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en gestión de comunidades digitales y soporte a creadores de contenido, con experiencia en el diseño de sistemas de moderación y soporte para plataformas de entretenimiento, redes de creadores y comunidades de fans, usando inteligencia artificial para escalar la moderación sin perder la calidad y el sentido de comunidad.

instrucción: Ayúdame a diseñar un sistema completo de moderación de comunidades y soporte a creadores para una plataforma de podcast que tiene 2 millones de oyentes activos, 500 podcasters activos que publican contenido en la plataforma y una comunidad de comentarios y reseñas que genera 50.000 interacciones diarias.

Desarrolla los siguientes componentes del sistema:

**1. Estrategia de moderación de contenido y comentarios con IA**
Define el sistema de moderación automatizada: modelo de IA para la detección automática de contenido que viola las normas de la comunidad (discurso de odio, desinformación, spam, contenido sexual no consentido, doxing), sistema de moderación en cascada (filtro automático para el contenido claramente prohibido, cola de revisión humana para el contenido en zona gris, publicación inmediata del contenido claramente aceptable), gestión de los falsos positivos (proceso de apelación accesible para el creador o el usuario sancionado), y calibración continua del modelo de moderación con los feedback de los moderadores humanos para reducir los errores.

**2. Sistema de reportes de abuso y gestión de incidentes**
Define el proceso de gestión de denuncias: diseño del formulario de reporte de abuso con las categorías de infracción más frecuentes y los campos que permiten al equipo de moderación tomar la decisión con la información mínima necesaria, priorización automática de los reportes según la gravedad del tipo de infracción y el número de denuncias recibidas sobre el mismo contenido, protocolo de investigación de los reportes que incluye el análisis del contexto del comentario, el historial del usuario denunciado y la evaluación de la intención, y proceso de comunicación con el denunciante sobre la resolución de su reporte.

**3. Normas de la comunidad y educación de usuarios**
Define el marco normativo de la comunidad: redacción de las normas de la comunidad en un lenguaje accesible y con ejemplos claros de lo que está y no está permitido (en lugar de terminología legal), sistema de onboarding de nuevos usuarios que introduce las normas de la comunidad de forma contextual durante los primeros usos de la plataforma, programa de educación continua de la comunidad (posts del equipo de la plataforma sobre las normas más frecuentemente infringidas y el por qué de cada regla), y proceso de advertencia graduada para los usuarios que infringen las normas por primera vez (advertencia, restricción temporal, suspensión permanente).

**4. Soporte técnico y editorial a los creadores de podcast**
Define el sistema de soporte a los podcasters: helpdesk multicanal para los creadores (centro de ayuda self-service con artículos y tutoriales de vídeo sobre las funcionalidades de la plataforma, chat de soporte en tiempo real para problemas técnicos urgentes, email de soporte para consultas no urgentes), uso de IA para clasificar y priorizar las solicitudes de soporte de los creadores según la urgencia y el impacto en su audiencia, y equipo de account managers dedicados a los podcasters con mayor audiencia (los 50 creadores más escuchados de la plataforma) para un soporte proactivo y personalizado.

**5. Análisis del clima de la comunidad y detección temprana de crisis**
Define el sistema de monitorización de la salud de la comunidad: análisis de sentimiento en tiempo real de los comentarios y reseñas de la plataforma para detectar cambios negativos en el tono de la conversación, alertas automáticas cuando un tema o episodio específico genera una concentración inusual de reportes o comentarios negativos, análisis de las conversaciones en redes sociales sobre la plataforma y sus creadores para detectar controversias que pueden llegar a la plataforma, y proceso de respuesta del equipo de comunidad ante situaciones de crisis (comunicado de la plataforma, intervención de moderación adicional, comunicación con el creador involucrado).

**6. Métricas de salud de la comunidad y calidad del soporte**
Define el sistema de métricas: indicadores de salud de la comunidad (ratio de comentarios positivos vs. negativos, tasa de participación de los oyentes en las reseñas, NPS de la comunidad), indicadores de calidad de la moderación (tiempo de respuesta a los reportes de abuso, tasa de apelaciones exitosas como proxy de errores de moderación, satisfacción de los usuarios con la resolución de su reporte), indicadores de calidad del soporte a creadores (tiempo de primera respuesta, tasa de resolución en el primer contacto, satisfacción del creador con el soporte recibido), y proceso de revisión mensual de las métricas con el equipo de moderación y soporte para identificar mejoras.

Proporciona un ejemplo del flujo de moderación de un comentario que contiene contenido potencialmente problemático (descripción del proceso desde la detección hasta la resolución, con los criterios de decisión en cada paso) y las normas de la comunidad de la plataforma en formato publicable.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema de moderación y soporte a creadores para plataforma de podcast con 2M de oyentes',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Carrera freelance como creador de contenido y productor digital con IA',
                'description'       => 'Construye una carrera sostenible como creador de contenido o productor digital independiente usando IA: define tu nicho, desarrolla tu audiencia, diversifica tus fuentes de ingresos y gestiona el negocio de la creación de contenido como una empresa.',
                'prompt_content'    => <<<'EOT'
Actúa como un mentor de negocios para creadores de contenido y productores digitales independientes, con experiencia en ayudar a periodistas, guionistas, editores de vídeo y productores de podcast a construir una carrera freelance sostenible económicamente y con impacto en su campo, usando las herramientas de inteligencia artificial disponibles para multiplicar su capacidad de producción y gestión.

instrucción: Ayúdame a construir una carrera freelance como creador de contenido especializado en tecnología e innovación. Tengo 5 años de experiencia como periodista en un medio digital y quiero combinar la producción de mi propio podcast y newsletter con proyectos de branded content y consultoría de comunicación para empresas de tecnología, y alcanzar los 4.000€ mensuales de ingresos en los próximos 12 meses.

Desarrolla los siguientes aspectos de mi carrera freelance:

**1. Definición del posicionamiento y la propuesta de valor**
Ayúdame a definir mi especialización específica dentro del ecosistema de creadores de tecnología: ¿debería enfocarme en la divulgación de inteligencia artificial para una audiencia de profesionales no técnicos que necesitan entender el impacto en su sector, en el análisis de startups y tendencias de emprendimiento tecnológico para inversores y fundadores, en el periodismo de datos y visualización aplicado a tecnología y sociedad, o en el contenido de marketing tecnológico para empresas que necesitan comunicar conceptos técnicos a clientes no técnicos? Para cada nicho, analiza el tamaño de la audiencia potencial en español, el tipo de cliente que pagaría por mis servicios y la competencia existente.

**2. Construcción de la audiencia propia**
Define la estrategia de crecimiento de mi audiencia: podcast de entrevistas a referentes del ecosistema tecnológico español e hispanoamericano (formato, duración, cadencia de publicación, distribución en plataformas), newsletter semanal con el análisis de las noticias más relevantes de tecnología e innovación de la semana con mi perspectiva editorial (plataforma, estrategia de crecimiento, proceso de producción), presencia en LinkedIn como plataforma principal de distribución del contenido del podcast y la newsletter (tipo de posts, frecuencia, estrategia de engagement), y estrategia de colaboraciones con otros creadores del nicho para el crecimiento cruzado de audiencias.

**3. Uso de IA para multiplicar la producción de contenido**
Define el sistema de producción con IA: flujo de trabajo para producir el podcast (preparación del guión de entrevista con IA, transcripción automática del episodio con Whisper, generación de clips para redes sociales con IA, artículo de resumen del episodio para el blog generado a partir de la transcripción), proceso de producción de la newsletter con IA (curación de las noticias más relevantes de la semana con herramientas de monitorización, generación del primer borrador de cada análisis, edición y fact-checking humano final), y herramientas de IA para el SEO del podcast y la newsletter (títulos optimizados, descripciones con palabras clave, etiquetas).

**4. Diversificación de ingresos como creador**
Define la estrategia de monetización con múltiples fuentes: patrocinios del podcast (tarifas por episodio según el número de descargas, cómo buscar y convencer a los primeros patrocinadores de tecnología), membresía de pago de la newsletter (qué contenido exclusivo justifica el pago, precio, plataforma de gestión: Substack, Beehiiv, Ghost), proyectos de branded content para empresas tecnológicas (newsletters y episodios de podcast patrocinados por la empresa, contenido educativo para sus clientes, artículos de liderazgo de pensamiento firmados por el CEO), y consultoría de comunicación y content strategy para startups de tecnología que necesitan construir su audiencia.

**5. Captación de clientes para branded content y consultoría**
Define la estrategia de desarrollo de negocio: cómo llegar a los responsables de marketing y comunicación de startups y scale-ups de tecnología que necesitan mis servicios de branded content, proceso de propuesta comercial para un proyecto de branded content (qué incluye, cómo se presenta, cuál es el precio mínimo aceptable por un proyecto y por qué), estrategia de LinkedIn para generar leads inbound de empresas interesadas en mis servicios (publicar análisis de casos de éxito de mis proyectos, compartir insights sobre comunicación tecnológica), y modelo de contrato y condiciones de trabajo para proyectos de branded content que protegen mi independencia editorial.

**6. Gestión del negocio de la creación de contenido**
Define los procesos de gestión del negocio: estructura legal recomendada (autónomo vs. SL), gestión de la facturación y el IRPF como autónomo freelance con clientes empresariales, sistema de gestión del tiempo y la producción (planning semanal para equilibrar la producción de contenido propio con los proyectos de clientes sin burnout), proceso de evaluación trimestral de las fuentes de ingresos (cuáles están creciendo, cuáles no valen el tiempo invertido, cuáles escalar), y plan de inversión en herramientas y equipamiento (micrófono, software de edición, herramientas de IA) que se amortiza en el modelo financiero del primer año.

Incluye el plan de los primeros 90 días con los hitos semanales para lanzar el podcast, la newsletter y conseguir el primer cliente de branded content, y una plantilla de propuesta comercial para un proyecto de patrocinio de podcast de 13 episodios.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Carrera freelance como creador de contenido de tecnología con podcast, newsletter y branded content',
                'vote_score'        => 38,
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
