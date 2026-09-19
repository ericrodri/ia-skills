<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills596Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing musical con IA para artistas y sellos discográficos',
                'description'      => 'Aplica la inteligencia artificial para diseñar campañas de marketing musical que aumenten el número de oyentes, seguidores y reproducciones de un artista o sello discográfico.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing musical y estrategia digital para la industria fonográfica. Necesito tu ayuda para crear una estrategia de marketing completa impulsada por inteligencia artificial para un artista musical o sello discográfico que quiere aumentar su audiencia y monetizar su música de forma más eficiente.

Perfil del proyecto:
Trabajo como responsable de marketing de un artista emergente (o un sello independiente con 3-5 artistas) en el género de la música urbana, el indie pop o el flamenco fusión. Tenemos presencia en las principales plataformas de streaming pero necesitamos acelerar el crecimiento de oyentes mensuales y mejorar la conversión de oyentes casuales a fans comprometidos.

Objetivo principal:
Diseña una estrategia de marketing musical con IA que integre análisis de datos de streaming, contenido generado con IA y campañas segmentadas para los distintos perfiles de oyente.

Módulo 1 - Análisis de audiencia con datos de streaming:
Explica cómo usar los datos de Spotify for Artists, Apple Music for Artists y YouTube Analytics para construir un perfil detallado de la audiencia actual. Define las métricas más importantes: demografía por edad, género y país, las ciudades con mayor concentración de oyentes, los momentos del día y los contextos de escucha (listas de reproducción de workout, de trabajo, de fiesta), y las canciones con mayor y menor retención. Describe cómo la IA puede cruzar estos datos para identificar los mercados con mayor potencial de crecimiento y los géneros adyacentes donde el artista tiene oportunidad de expansión.

Módulo 2 - Estrategia de contenido con IA para redes sociales:
Diseña un sistema de producción de contenido musical con IA. Para TikTok: cómo identificar los formatos de vídeo y los desafíos (challenges) que mejor funcionan con el estilo del artista, cómo crear hooks de 3 segundos que inviten a usar el fragmento de canción en contenido de terceros y cómo analizar qué momentos de una canción tienen más potencial viral. Para Instagram: la estrategia de Reels con contenido detrás de cámaras, la narrativa de stories para el lanzamiento de un sencillo y el diseño del feed visual como elemento de marca artística. Para YouTube: la estrategia de vídeos musicales complementarios (lyric videos, acoustic sessions, making-of) para maximizar el tiempo de visualización.

Módulo 3 - Lanzamiento de sencillo con IA:
Propón el plan de lanzamiento de 8 semanas para un nuevo sencillo. Semanas 1-2 (pre-lanzamiento): generación de expectativa mediante contenido fragmentado, campañas de pre-save en Spotify y Apple Music, y pitching a playlists editoriales de las plataformas. Semanas 3-4 (lanzamiento): estrategia de publicación coordinada en todas las plataformas, campaña de publicidad de pago en Meta y TikTok segmentada por los perfiles de audiencia identificados, y activación de fan base para reposteos y creación de UGC (contenido generado por usuarios). Semanas 5-8 (post-lanzamiento): análisis de resultados, optimización de campañas de pago según rendimiento y estrategia de longtail para mantener el sencillo activo en playlists algorítmicas.

Módulo 4 - Pitching a playlists editoriales y algorítmicas:
Explica el proceso de pitching a las plataformas de streaming. Describe cómo preparar la hoja de datos del artista (pitch sheet) con la información que necesita Spotify Editorial o Apple Music para considerar una canción. Analiza cómo funcionan los algoritmos de Spotify (Release Radar, Discover Weekly, Radio) y qué comportamientos de oyente generan más señales positivas para el algoritmo. Propón estrategias concretas para aumentar la tasa de guardado de una canción, el ratio de escucha completa y las reproducciones en contextos que el algoritmo valora más.

Módulo 5 - Monetización y fidelización de fans:
Diseña la estrategia de monetización más allá del streaming. Analiza las opciones de merchandise personalizado generado con IA (diseños de camisetas, pósters), las plataformas de membresía para fans (Patreon, Bandcamp), la estrategia de live streaming de conciertos con ticketing exclusivo para fans, y las oportunidades de sincronización (uso de música en publicidad, cine y videojuegos). Para cada canal, establece las métricas de seguimiento y el objetivo de ingresos en los primeros 12 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estrategia de marketing digital musical con IA para artistas emergentes',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de herramientas musicales con inteligencia artificial',
                'description'      => 'Diseña y programa aplicaciones y plugins musicales que usan IA para asistir a productores, compositores y músicos en su proceso creativo y de producción.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de software especializado en aplicaciones de audio, procesamiento de señales digitales (DSP) y machine learning aplicado a la música. Necesito tu guía técnica completa para desarrollar herramientas musicales que usen inteligencia artificial para asistir a productores musicales y compositores.

Contexto del proyecto:
Quiero construir una suite de herramientas de software para producción musical que integren modelos de IA. El objetivo es que un productor pueda usar estas herramientas para acelerar su flujo de trabajo, explorar nuevas posibilidades creativas y mejorar la calidad técnica de sus producciones sin necesidad de conocimientos avanzados de teoría musical o ingeniería de sonido.

Objetivo de la sesión:
Define la arquitectura técnica, los modelos de IA relevantes y el plan de desarrollo para al menos tres herramientas musicales con IA.

Herramienta 1 - Generador de acordes y armonías con IA:
Diseña una herramienta que sugiera progresiones de acordes y armonías basándose en un acorde inicial, el género musical seleccionado y el estado emocional deseado. Describe cómo entrenar o usar un modelo de lenguaje musical (como MusicLM o modelos basados en transformers entrenados en MIDI) para generar progresiones contextualmente apropiadas. Detalla la arquitectura de la interfaz de usuario: cómo el músico introduce el acorde semilla, cómo se muestran las sugerencias con notación musical y diagramas de guitarra o piano, y cómo se exporta el resultado como MIDI para usar en cualquier DAW.

Herramienta 2 - Separador de stems con IA:
Describe la implementación de un separador de pistas de audio basado en redes neuronales (similar a Spleeter de Deezer o Demucs de Meta). Explica los fundamentos del modelo de separación de fuentes (source separation), cómo preparar el dataset de entrenamiento (pistas mezcladas y sus stems originales), la arquitectura de la red neuronal (U-Net para espectrogramas o modelos en el dominio del tiempo) y cómo optimizar el modelo para funcionar en tiempo real o con baja latencia. Proporciona un ejemplo de código en Python usando PyTorch que ilustre la inferencia sobre un archivo de audio.

Herramienta 3 - Masterizador automático con IA:
Diseña un sistema de masterización automática que analice una mezcla y aplique procesamiento de audio para alcanzar los estándares de loudness y calidad de las plataformas de streaming. Describe el pipeline de procesamiento: análisis espectral del audio de entrada, comparación con un conjunto de referencias del género, aplicación de EQ dinámico, compresor multibanda y limitador final para alcanzar el nivel LUFS objetivo. Explica cómo el modelo de IA aprende qué ajustes aplicar según el género y el estilo de la canción.

Herramienta 4 - Integración como plugin VST/AU:
Explica cómo empaquetar estas herramientas como plugins VST3 o AudioUnit para que funcionen dentro de los DAWs más populares (Ableton Live, Logic Pro, FL Studio). Describe el framework de desarrollo (JUCE en C++ es el estándar de la industria), cómo comunicar el plugin con el modelo de IA (inferencia local con ONNX Runtime o llamada a API en la nube) y las consideraciones de latencia que son críticas para el uso en tiempo real. Incluye el flujo de trabajo de publicación en plataformas de plugins y la estrategia de licenciamiento (freemium, suscripción mensual).

Herramienta 5 - API pública para desarrolladores musicales:
Propón el diseño de una API REST que exponga las capacidades de IA de la suite a otros desarrolladores de aplicaciones musicales. Define los endpoints principales: análisis de audio (BPM, tonalidad, timbre), generación de melodías por prompts en lenguaje natural, y recomendación de samples compatibles. Incluye la documentación de autenticación, los límites de velocidad según plan de suscripción y los ejemplos de código en Python y JavaScript para las integraciones más comunes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Desarrollo de software musical con IA: plugins VST, separación de stems y masterización',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de identidad visual para artistas musicales con IA',
                'description'      => 'Crea la identidad visual completa de un artista musical usando herramientas de IA generativa para portadas de álbumes, materiales promocionales y presencia digital coherente.',
                'prompt_content'   => <<<'EOT'
Eres un director de arte especializado en la industria musical, con experiencia en el diseño de identidades visuales para artistas, sellos discográficos y festivales de música. Necesito tu guía completa para crear la identidad visual de un artista musical usando herramientas de diseño asistidas por inteligencia artificial.

Contexto del proyecto:
Un artista musical emergente (solista o grupo) acaba de firmar con un sello independiente y necesita una identidad visual profesional y cohesionada que lo diferencie en un mercado saturado. El artista tiene un sonido definido (puede ser electrónico, alternativo, R&B o cualquier género que elijas para este ejercicio) pero no tiene aún una imagen visual clara.

Objetivo del proyecto:
Diseñar un sistema de identidad visual completo que sea aplicable en todos los puntos de contacto del artista: plataformas de streaming, redes sociales, merchandising, escenario y prensa.

Fase 1 - Briefing creativo y concepto visual:
Describe el proceso de briefing que debes hacer al artista antes de comenzar a diseñar. Propón las 15 preguntas clave que te ayudarán a entender su visión, sus referencias visuales, los artistas con cuya estética conecta y los valores que quiere transmitir. Después, explica cómo traducir las respuestas del briefing en un concepto visual (mood, paleta de colores, tipografía y estilo fotográfico) y cómo presentarlo al artista para su validación antes de invertir tiempo en el diseño.

Fase 2 - Uso de IA generativa en el proceso de diseño:
Describe el flujo de trabajo creativo con herramientas de IA generativa (Midjourney, Stable Diffusion, Adobe Firefly o DALL-E) integradas en el proceso profesional de diseño. Explica cómo redactar prompts efectivos para generar referencias visuales y explorar estilos sin coste de producción fotográfica. Detalla cómo usar la IA para generar variaciones de un concepto de portada de álbum, texturas y fondos para materiales de marketing, y elementos gráficos para el merchandise. Incluye los límites éticos y legales del uso de imágenes generadas con IA en materiales comerciales de la industria musical.

Fase 3 - Sistema de identidad visual completo:
Define los elementos del sistema de identidad visual que debes entregar. El logotipo del artista (wordmark, símbolo o combinación de ambos) con sus variantes en positivo y negativo. La paleta de colores con los valores hexadecimales y sus equivalentes en Pantone para impresión. La tipografía principal y secundaria con sus usos específicos (titulares, cuerpo de texto, créditos). El estilo fotográfico con las directrices de edición y filtros de color que unifiquen todas las fotos del artista. Los elementos gráficos de apoyo (texturas, formas, ilustraciones) que completan el sistema.

Fase 4 - Aplicaciones del sistema visual:
Describe cómo aplicar el sistema de identidad en los formatos más importantes de la industria musical. Para plataformas de streaming: la portada del álbum o EP en formato cuadrado 3000x3000 píxeles con los requisitos técnicos de Spotify y Apple Music. Para redes sociales: las plantillas de Instagram (feed, stories, highlights covers), TikTok y YouTube (thumbnail, banner del canal y pantalla final). Para prensa y booking: el EPK (Electronic Press Kit) con los elementos visuales, el rider técnico del escenario y el banner para festivales. Para merchandise: diseños de camisetas, gorras y bolsas que adapten el sistema visual a objetos físicos.

Fase 5 - Guía de uso de la identidad (brand book):
Explica cómo documentar el sistema visual en un brand book que el artista, su equipo y terceros (agencias de publicidad, organizadores de festivales) puedan usar correctamente. Define las secciones del brand book: historia del concepto visual, reglas de uso del logotipo (espacios de seguridad, tamaños mínimos, fondos permitidos), paleta de colores con instrucciones de uso, ejemplos de aplicación correcta e incorrecta de la identidad, y el tono visual en fotografía y vídeo. Describe cómo entregar todos los archivos (vectoriales, rasterizados, en distintos formatos de color) de forma organizada.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Identidad visual de artista musical con IA generativa',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas y licencias musicales con IA para sellos y editoras',
                'description'      => 'Usa la IA para optimizar el proceso de venta de licencias musicales, identificar oportunidades de sincronización y maximizar los ingresos por derechos de autor.',
                'prompt_content'   => <<<'EOT'
Eres un experto en licencias musicales, sincronización y ventas de derechos de autor en la industria fonográfica. Necesito tu ayuda para construir un proceso de ventas y licenciamiento musical optimizado con inteligencia artificial que maximice los ingresos de un catálogo musical.

Contexto del negocio:
Gestiono el departamento de licencias de un sello discográfico independiente o una editora musical con un catálogo de entre 500 y 5.000 canciones de distintos géneros y épocas. Los ingresos provienen de sincronización (música en publicidad, cine, series y videojuegos), derechos de interpretación y reproducción mecánica, licencias de master para remixes y covers, y licencias de uso en contenido digital (YouTube, redes sociales, podcasts).

Objetivo de la sesión:
Diseña un sistema de ventas y licencias musicales impulsado por IA que aumente los ingresos del catálogo en un 40% en 18 meses.

Área 1 - Catalogación inteligente del catálogo con IA:
Describe cómo usar la IA para analizar y catalogar el catálogo musical de forma que sea más fácil de buscar y licenciar. El sistema debe ser capaz de etiquetar automáticamente cada canción con: género, subgénero y microtrends sonoros (lo que está buscando el mercado ahora), el tempo y la tonalidad (útil para sincronización), la energía emocional de la canción (épico, melancólico, alegre, tenso), los posibles usos en sincronización (spot de coche, trailer de película, escena romántica, montaje deportivo) y las similitudes con canciones de referencia que se licencian bien en el mercado. Explica qué APIs de análisis de audio (Essentia, AcousticBrainz o modelos propios) pueden hacer este análisis de forma automatizada.

Área 2 - Identificación de oportunidades de sincronización con IA:
Propón un sistema de prospección activa de oportunidades de sincronización asistido por IA. El sistema debe monitorizar: las producciones audiovisuales en fase de post-producción en España y Latinoamérica (series de Netflix, HBO, Prime Video, Movistar+ y cine independiente), las campañas publicitarias de grandes anunciantes que buscan música para sus spots, los videojuegos en desarrollo que necesitan bandas sonoras, y los creadores de contenido en YouTube y TikTok con más de 100.000 seguidores que usan música con licencia. Para cada tipo de oportunidad, describe el proceso de contacto y el pitch de licencia más efectivo.

Área 3 - Automatización del proceso de cotización y contrato:
Diseña el sistema de generación automática de propuestas de licencia. Cuando llega una solicitud de licencia, la IA debe determinar automáticamente el precio orientativo según el tipo de uso (sincronización en TV prime time vs. publicidad en redes sociales), el territorio y la duración del contrato, el perfil del licenciatario (agencia internacional vs. pequeño productor independiente) y el histórico de licencias similares del catálogo. Describe también cómo la IA asiste en la generación del borrador del contrato de licencia con las cláusulas estándar y las variables específicas de cada acuerdo.

Área 4 - Seguimiento de cobros y derechos con IA:
Explica cómo usar la IA para gestionar la complejidad del cobro de derechos. El sistema debe consolidar automáticamente los reportes de ingresos de las sociedades de gestión colectiva (SGAE, PROMUSICAE, AIE), las plataformas de streaming (Spotify, Apple Music, Amazon, YouTube), las compañías de sincronización y las plataformas de licencias digitales (Musicbed, Artlist, Epidemic Sound). Debe identificar discrepancias entre los usos detectados y los pagos recibidos, generar reclamaciones automáticas cuando detecta usos no licenciados mediante fingerprinting de audio, y producir un informe mensual consolidado de ingresos por fuente, por artista y por canción.

Área 5 - Estrategia de precios dinámicos:
Propón un modelo de precios dinámicos para el catálogo musical que ajuste las tarifas según la demanda del mercado, la tendencia del género (si el reggaeton está en su pico, las licencias de reggaeton deben costar más), el rendimiento histórico de cada canción en plataformas de streaming y el nivel de exclusividad requerida por el cliente. Describe cómo comunicar los precios dinámicos a los clientes de forma transparente y cómo negociar licencias de catálogo (bulk licensing) con plataformas que quieren acceso a múltiples canciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Sistema de ventas y licencias musicales optimizado con IA',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management para plataformas de streaming musical con IA',
                'description'      => 'Define la estrategia de producto, las funcionalidades de IA y las métricas de una plataforma de streaming musical para maximizar la retención y el engagement de los usuarios.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager con experiencia en plataformas de streaming de entretenimiento y aplicaciones de consumo de música. Necesito tu ayuda para definir la estrategia de producto de una plataforma de streaming musical que quiere competir con Spotify y Apple Music usando la personalización por IA como su principal diferenciador.

Contexto del producto:
La plataforma tiene 2 millones de usuarios activos mensuales y un catálogo de 80 millones de canciones. La tasa de retención a 30 días es del 55% y queremos llevarla al 72% en 12 meses. Los usuarios churn principalmente porque no encuentran música nueva que les guste, perciben las recomendaciones como repetitivas y no sienten que la plataforma los "entiende" tan bien como sus oyentes en Spotify.

Objetivo de la sesión:
Construye el plan de producto para los próximos cuatro trimestres centrado en el uso de IA para mejorar la personalización y la retención.

Eje estratégico 1 - Diagnóstico del problema de retención:
Describe el proceso de discovery para entender profundamente por qué los usuarios abandonan la plataforma. Propón las métricas de comportamiento que analizarías en los datos (la correlación entre los patrones de escucha y la probabilidad de churn, los momentos del journey del usuario donde el abandono es más frecuente, las diferencias de comportamiento entre usuarios que renuevan y los que cancelan). Diseña las entrevistas de usuario para entender los aspectos emocionales del abandono que los datos no capturan.

Eje estratégico 2 - Roadmap de personalización con IA:
Define las iniciativas de IA para mejorar la personalización en cuatro trimestres. Trimestre 1: mejora del modelo de recomendaciones con embeddings de usuario más ricos (incorporando el contexto de escucha, la hora del día y el estado de ánimo declarado). Trimestre 2: playlists generadas por IA en tiempo real adaptadas al momento exacto del usuario (despertador, gym, trabajo, cena romántica). Trimestre 3: sistema de descubrimiento de artistas emergentes personalizado que exponga al usuario a música nueva con alta probabilidad de gustarle antes de que sea mainstream. Trimestre 4: radio personalizada infinita con transiciones inteligentes entre canciones que mantenga al usuario en estado de flujo.

Eje estratégico 3 - Funcionalidades sociales y comunidad:
Analiza cómo las funcionalidades sociales pueden complementar la IA para mejorar la retención. Propón el diseño de producto de tres funcionalidades: los perfiles de oyente donde el usuario puede compartir su personalidad musical generada por IA (su "audio identity"), los clubs de escucha donde grupos de amigos construyen playlists colaborativas guiadas por IA, y el sistema de recomendaciones entre personas reales (friend recommendations) que combine la opinión humana con el filtrado colaborativo de la IA.

Eje estratégico 4 - Monetización y modelo freemium:
Diseña la estrategia de monetización que maximice el LTV (lifetime value) de cada usuario. Define qué funcionalidades de IA son parte del tier gratuito (gancho para la conversión) y cuáles son exclusivas del tier premium (razón para pagar). Propón el precio óptimo del tier premium en España y Latinoamérica. Diseña el flow de conversión de free a premium centrado en el momento en que el usuario experimenta el valor de la IA (el "aha moment" que justifica el pago). Analiza también la oportunidad de un tier familiar con perfiles de IA individualizados para cada miembro.

Eje estratégico 5 - Experiencia del creador musical:
La retención de catálogo musical de calidad depende de que los artistas perciban valor en la plataforma. Diseña las herramientas de producto para artistas y sellos discográficos: el dashboard de analytics con datos de IA sobre qué tipo de oyentes escuchan cada canción y en qué contextos, las herramientas de pitching a playlists algorítmicas con feedback de la IA sobre qué características aumentarían las probabilidades de selección, y el sistema de pagos de royalties con desglose por tipo de reproducción (reproducción premium, free, radio algorítmica, playlist editorial).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Estrategia de producto y retención para plataforma de streaming musical con IA',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de talento artístico y RRHH para sellos discográficos con IA',
                'description'      => 'Usa la IA para optimizar la búsqueda y desarrollo de talento musical, la gestión de contratos artísticos y el bienestar de los artistas firmados en un sello discográfico.',
                'prompt_content'   => <<<'EOT'
Eres un directivo de recursos humanos y desarrollo de talento con experiencia en la industria musical y los sellos discográficos. Necesito tu ayuda para diseñar un sistema de gestión de talento artístico impulsado por inteligencia artificial para un sello discográfico independiente.

Contexto del sello:
Dirijo el área de A&R (Artists and Repertoire) y gestión de personas de un sello independiente con 15 artistas firmados, un equipo interno de 25 personas (producción, marketing, distribución, legal) y una red de colaboradores externos (productores, ingenieros de sonido, managers independientes). Nuestro principal reto es identificar talento emergente antes que la competencia y retener a los artistas de éxito que reciben ofertas de sellos majors.

Objetivo de la sesión:
Diseña el sistema de gestión de talento artístico del sello para los próximos tres años.

Bloque 1 - Scouting de talento con IA:
Describe cómo implementar un sistema de detección de talento emergente basado en datos. El sistema debe monitorizar de forma continua: el crecimiento orgánico en plataformas de streaming (tasa de crecimiento de oyentes mensuales, velocidad de acumulación de seguidores en Spotify y Apple Music), la tracción en redes sociales (TikTok views de canciones sin promoción pagada, menciones orgánicas en YouTube), la actividad en directo (número de conciertos, ciudades donde toca, capacidad de las salas) y las señales de comunidad (engagement de los fans, comentarios en redes, base de suscriptores en newsletters). Define los umbrales y alertas que señalizan que un artista merece una escucha activa del equipo de A&R.

Bloque 2 - Evaluación y selección de artistas:
Propón el proceso de evaluación de artistas candidatos a firmar con el sello. Describe el scorecard de evaluación que combina criterios cuantitativos (datos de streaming y redes sociales) con criterios cualitativos (calidad artística, potencial de desarrollo, compatibilidad con la visión del sello, actitud de trabajo). Define el proceso de due diligence artística: cuántos proyectos publicados debes escuchar, qué preguntas hacer en el primer encuentro con el artista, cómo evaluar la solidez de su base de fans y cómo verificar que no tiene compromisos contractuales previos que compliquen la firma.

Bloque 3 - Diseño de contratos artísticos:
Describe los elementos esenciales de un contrato de grabación moderno adaptado a la era del streaming. Analiza los distintos modelos contractuales: el contrato 360 (donde el sello participa en todas las fuentes de ingresos del artista), el contrato de licencia de masters (menos invasivo, el artista mantiene la propiedad de sus grabaciones), el contrato de distribución y el acuerdo de joint venture para artistas con mayor poder de negociación. Explica cómo la IA puede asistir en la negociación de los términos: análisis de contratos similares en el mercado, simulación del impacto económico de distintas estructuras de royalties y detección de cláusulas desfavorables.

Bloque 4 - Desarrollo profesional y bienestar de artistas:
Diseña el programa de desarrollo integral para los artistas firmados. El programa debe incluir: formación en gestión económica personal (muchos artistas no saben gestionar sus ingresos cuando empiezan a ganar dinero), mentoría artística con productores y compositores veteranos, apoyo en salud mental (el sector musical tiene altas tasas de ansiedad y depresión, especialmente en artistas emergentes bajo presión), y desarrollo de habilidades de comunicación para gestionar su marca personal y sus redes sociales de forma sostenible. Para cada área, propón qué recursos específicos ofrece el sello y cómo los personaliza según las necesidades de cada artista.

Bloque 5 - Retención y gestión de la relación artista-sello:
Describe el sistema de gestión de la relación con los artistas firmados para prevenir los conflictos y las rupturas contractuales. Propón la cadencia de reuniones de seguimiento entre el artista y su A&R manager, el sistema de feedback sobre el plan de desarrollo artístico, cómo gestionar los momentos críticos (cuando un artista recibe una oferta mejor de un sello major, cuando hay una crisis de reputación, cuando un proyecto fracasa comercialmente) y cómo construir una cultura de sello donde los artistas se sientan parte de una comunidad y no simplemente clientes de un servicio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Sistema de scouting, desarrollo y retención de talento artístico con IA',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión financiera de royalties y derechos musicales con IA',
                'description'      => 'Aplica la IA para optimizar la gestión, cobro y análisis de royalties musicales, derechos de autor y distribución de ingresos en la industria fonográfica.',
                'prompt_content'   => <<<'EOT'
Eres un director financiero especializado en la industria musical con amplia experiencia en la gestión de derechos de autor, royalties y modelos de ingresos del sector fonográfico. Necesito tu ayuda para construir un sistema de gestión financiera de royalties musicales impulsado por inteligencia artificial.

Contexto financiero:
Gestiono las finanzas de un sello discográfico independiente con un catálogo de 2.000 grabaciones y 50 artistas bajo contrato. Los ingresos anuales son de aproximadamente 3 millones de euros, procedentes de múltiples fuentes: streaming (60%), sincronización (15%), distribución física (8%), derechos de interpretación pública (10%) y licencias digitales (7%). La complejidad de la gestión de royalties, con reportes de más de 30 fuentes distintas, consume una cantidad desproporcionada del tiempo del equipo financiero.

Objetivo de la sesión:
Diseña el sistema de gestión financiera de royalties que use IA para automatizar el 80% del proceso administrativo y proporcionar insights estratégicos sobre el rendimiento del catálogo.

Área financiera 1 - Consolidación y normalización de reportes:
Describe la arquitectura del sistema de ingesta de datos financieros de royalties. El sistema debe recibir e interpretar automáticamente los formatos de reporte de las principales fuentes: los archivos CSV o XML de Spotify Loud & Clear, los reportes de Apple Music, los extractos de SGAE, AIE y PROMUSICAE, los estados de cuenta de las distribuidoras (DistroKid, CD Baby, Amuse), los reportes de YouTube Content ID y los contratos de sincronización de productoras audiovisuales. Explica cómo la IA normaliza los datos de estos formatos heterogéneos en un modelo de datos unificado y cómo detecta automáticamente discrepancias entre lo declarado y lo esperado.

Área financiera 2 - Liquidación de royalties a artistas:
Diseña el sistema de cálculo y liquidación de royalties a los artistas firmados. El sistema debe aplicar automáticamente los términos específicos de cada contrato artístico (porcentaje de royalty de grabación, si hay un advance que recuperar antes de pagar, las retenciones por territorio, las deducciones por packaging y promoción si las hay). Describe cómo la IA verifica que el cálculo es correcto antes de procesarlo, cómo genera el extracto de royalties que el artista recibirá con el desglose por canción y por fuente, y cómo gestiona las reclamaciones del artista cuando no está de acuerdo con el cálculo.

Área financiera 3 - Análisis de rentabilidad del catálogo:
Propón un modelo de análisis de rentabilidad por canción, por álbum y por artista que use IA para identificar patrones y oportunidades. El análisis debe incluir: el ROI de cada inversión de producción (cuánto costó grabar el álbum vs. los ingresos generados hasta la fecha), la evolución de los ingresos por streaming a lo largo del tiempo (identificando canciones que están creciendo vs. declinando), la comparativa de rendimiento entre géneros del catálogo y la identificación de canciones del catálogo que tienen potencial de sincronización no explotado basándose en sus características sonoras y el mercado actual.

Área financiera 4 - Detección de royalties no cobrados:
Describe cómo la IA puede identificar royalties que el sello tiene derecho a cobrar pero que no ha recibido. Incluye: la monitorización de usos de canciones en plataformas digitales mediante fingerprinting de audio para detectar usos no licenciados, la comparación entre los usos declarados por las plataformas y los usos detectados de forma independiente, el seguimiento de las reclamaciones de sincronización pendientes de cobro y la identificación de territorios donde las canciones se están usando pero los royalties de interpretación pública no están siendo cobrados correctamente. Propón el proceso de reclamación automatizada para recuperar estos ingresos.

Área financiera 5 - Previsión de tesorería y planificación:
Diseña el modelo de forecasting de ingresos de royalties a 12 meses. Explica cómo la IA construye el modelo predictivo basándose en las tendencias históricas de ingresos de cada fuente, la estacionalidad del streaming (diciembre es un mes de alto consumo, agosto puede caer en España), el lanzamiento de nuevos proyectos del catálogo que impactarán en los ingresos futuros, y los cambios en las tarifas de royalties de las plataformas. Describe cómo este forecasting se integra en el presupuesto anual del sello y en la planificación de las inversiones en nuevas grabaciones y en el desarrollo de artistas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Sistema de gestión y análisis de royalties musicales con IA',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos y derechos musicales con IA para abogados del entretenimiento',
                'description'      => 'Usa la IA para analizar, redactar y negociar contratos musicales, gestionar derechos de autor y proteger los intereses de artistas y sellos discográficos.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho del entretenimiento, propiedad intelectual y contratos musicales en España. Necesito tu guía jurídica completa para usar la inteligencia artificial en la práctica del derecho musical, desde el análisis de contratos hasta la gestión de derechos de autor en la era del streaming y la IA generativa.

Contexto profesional:
Ejerzo como abogado especializado en la industria musical, asesorando tanto a artistas emergentes como a sellos discográficos independientes. Mi práctica incluye la redacción y negociación de contratos de grabación, contratos de edición musical, contratos de management, acuerdos de licencia y la gestión de disputas por derechos de autor. La IA generativa está transformando el sector y necesito entender su impacto jurídico.

Objetivo de la sesión:
Construye un marco jurídico completo para el ejercicio del derecho musical en la era de la IA.

Área jurídica 1 - Análisis de contratos musicales con IA:
Describe cómo usar herramientas de IA para el análisis eficiente de contratos musicales. Explica el proceso de revisión asistida por IA de un contrato de grabación estándar: identificación automática de las cláusulas más favorables al sello vs. las más favorables al artista, comparación con las condiciones del mercado en España y los contratos tipo de la industria (PROMUSICAE, FAM), detección de cláusulas ambiguas que pueden generar disputas futuras y análisis de las implicaciones económicas de los términos de royalties. Define los límites del uso de IA en el análisis jurídico: qué puede delegar a la IA y qué requiere siempre el criterio del abogado.

Área jurídica 2 - Derechos de autor en la música generada con IA:
Analiza el marco jurídico de la música generada total o parcialmente con inteligencia artificial. En España, conforme a la Ley de Propiedad Intelectual y la directiva europea de derechos de autor, ¿puede la música generada por IA tener protección de derechos de autor? ¿Quién sería el titular: el desarrollador de la IA, el usuario que redactó el prompt, o nadie? Aborda los casos concretos más frecuentes en la industria: el artista que usa IA para generar una melodía de base y después la desarrolla, el uso de IA para crear variaciones de una canción existente (¿infracción o obra derivada?), y el sello que usa IA para generar música de fondo sin artistas identificables.

Área jurídica 3 - Contratos para la era del streaming y las plataformas digitales:
Actualiza las cláusulas contractuales tradicionales de la industria musical para la realidad actual. Explica qué cláusulas deben incluir los contratos de grabación modernos respecto a los derechos de streaming (¿cómo se define el royalty de streaming, qué es una reproducción completa, cómo se gestionan los ingresos de playlists patrocinadas?), los derechos de sincronización en plataformas de vídeo corto (TikTok, Instagram Reels, YouTube Shorts), el uso de la imagen y la música del artista en contenido generado por IA de terceros, y la distribución de ingresos cuando una canción es usada para entrenar modelos de IA. Proporciona ejemplos de redacción de cláusulas específicas.

Área jurídica 4 - Resolución de disputas y litigación en la industria musical:
Describe las principales disputas jurídicas en la industria musical y cómo la IA asiste en su resolución. Aborda los casos de plagio musical (¿cómo se determina la similitud substancial entre dos canciones?, ¿qué papel tienen los expertos en análisis musical con IA?), las disputas entre artistas y sellos por incumplimiento contractual, los conflictos de atribución de créditos de composición (el fenómeno de los "ghost writers" en el urbano) y la gestión de contenido en plataformas (reclamaciones DMCA, disputas en YouTube Content ID). Para cada tipo de disputa, describe la estrategia jurídica recomendada y cómo la IA puede ayudar a construir el caso.

Área jurídica 5 - Protección internacional de derechos y territorialidad:
Aborda la gestión de derechos musicales en el contexto internacional. Explica cómo funciona el sistema de recíproca entre sociedades de gestión colectiva de distintos países (SGAE, ASCAP, PRS for Music, SOCAN) para el cobro de royalties de interpretación pública. Describe las diferencias en la protección de derechos de autor entre Europa, Estados Unidos y los principales mercados de habla hispana. Analiza las implicaciones jurídicas de contratar con plataformas de streaming con sede en Estados Unidos desde España y la aplicación del Reglamento europeo sobre portabilidad de contenidos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Marco jurídico para contratos musicales y derechos de autor en la era de la IA',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención a fans y comunidades musicales con IA',
                'description'      => 'Diseña un sistema de gestión de comunidades de fans musicales impulsado por IA que mejore el engagement, la experiencia del fan y el apoyo al artista.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión de comunidades digitales y experiencia de fan (fanbase management) en la industria musical. Necesito tu ayuda para diseñar un sistema de gestión de la comunidad de fans de un artista musical impulsado por inteligencia artificial que mejore el engagement, la experiencia del fan y los ingresos del artista.

Contexto del proyecto:
Gestiono la comunidad online de un artista musical con 500.000 seguidores en Instagram, 300.000 en TikTok, 200.000 en YouTube y 150.000 suscriptores en su newsletter. La comunidad es activa pero dispersa en múltiples plataformas, el equipo del artista (2 personas de comunicación) no puede atender todos los mensajes y comentarios, y el artista quiere construir una relación más directa y auténtica con sus fans más comprometidos.

Objetivo de la sesión:
Diseña el sistema de gestión de fans del artista para los próximos 12 meses.

Componente 1 - Segmentación y conocimiento de la base de fans:
Describe cómo usar la IA para segmentar la comunidad de fans en distintos niveles de compromiso y perfiles. Define las categorías de fan: el super fan o stannies (que compra todo, asiste a todos los conciertos y defiende al artista online), el fan habitual (escucha regularmente, asiste a algunos conciertos), el fan ocasional (le gusta el artista pero no lo sigue activamente) y el descubridor reciente (acaba de conocer al artista). Para cada segmento, describe las señales de comportamiento que lo identifican en los datos disponibles y las acciones de engagement más efectivas para moverlo hacia un mayor compromiso.

Componente 2 - Sistema de atención y respuesta con IA:
Diseña el sistema de gestión de mensajes y comentarios asistido por IA. El sistema debe clasificar automáticamente los mensajes entrantes por tipo (pregunta sobre el artista, comentario positivo, crítica, solicitud de colaboración, reporte de spam o comportamiento tóxico), priorizar los que requieren respuesta urgente del equipo humano, generar respuestas sugeridas para los mensajes más frecuentes (en el tono y el estilo del artista), y gestionar automáticamente las situaciones de moderación (comentarios ofensivos, spam, bots). Describe cómo asegurarte de que las respuestas generadas por IA nunca resulten genéricas o impersonales y cómo mantener la voz auténtica del artista.

Componente 3 - Fan club y membresía exclusiva:
Propón el diseño del programa de membresía premium para los fans más comprometidos. Define los beneficios exclusivos por nivel: acceso anticipado a entradas de conciertos, contenido detrás de cámaras en tiempo real, chats periódicos con el artista, merchandise exclusivo disponible solo para miembros y la posibilidad de votar sobre decisiones creativas del artista (portada del próximo single, setlist del concierto). Describe cómo la IA personaliza la experiencia de cada miembro basándose en su historial de interacciones, sus canciones favoritas y los patrones de participación en la comunidad.

Componente 4 - Gestión de crisis y reputación online:
Describe el protocolo de gestión de crisis de reputación online con IA para el artista. El sistema debe monitorizar en tiempo real las menciones del artista en redes sociales, foros y medios, detectar automáticamente si hay una narrativa negativa que está ganando tracción (una polémica, rumores falsos, una campaña de hate organizada), clasificar la gravedad de la situación y alertar al equipo con el contexto completo y las recomendaciones de respuesta. Para distintos tipos de crisis (rumor de relaciones personales, acusación de plagio, polémica por declaraciones, ataque de fans de otro artista), propón el árbol de decisión de respuesta y los mensajes modelo.

Componente 5 - Análisis de sentimiento y salud de la comunidad:
Diseña el cuadro de mandos de análisis de sentimiento y salud de la comunidad que el equipo del artista revisa semanalmente. Incluye: el índice de sentimiento global de los comentarios en cada plataforma, las tendencias de los temas de conversación más frecuentes entre fans (qué canciones están generando más conversación, qué aspectos del artista generan más polarización), el nivel de toxicidad de la comunidad (porcentaje de comentarios negativos entre fans o hacia terceros) y las señales de comunidades de fans que están declinando vs. creciendo. Define las acciones correctivas que el artista puede tomar cuando el análisis detecta una tendencia preocupante.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestión de comunidades de fans musicales con IA para artistas',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Producción musical freelance con IA para productores independientes',
                'description'      => 'Usa la IA como copiloto creativo y de negocio para un productor musical freelance que quiere escalar su trabajo, encontrar clientes y monetizar su talento de forma sostenible.',
                'prompt_content'   => <<<'EOT'
Eres un productor musical freelance senior y emprendedor de la industria musical con experiencia en el mercado independiente español y latinoamericano. Necesito tu ayuda para construir mi negocio como productor musical freelance usando la inteligencia artificial como ventaja competitiva para escalar mi trabajo sin perder la calidad ni la autenticidad artística.

Mi situación actual:
Soy productor musical con 5 años de experiencia, especializado en música urbana y pop. He producido canciones para artistas independientes con hasta 10 millones de streams por canción. Trabajo desde mi home studio y quiero pasar de facturar 2.000 euros al mes a 6.000 euros al mes en los próximos 18 meses, sin contratar a nadie más.

Objetivo de la sesión:
Diseña el plan de negocio y las estrategias de uso de IA para triplicar mis ingresos como productor freelance.

Área de negocio 1 - Posicionamiento y marca personal del productor:
Ayúdame a definir mi posicionamiento único como productor en un mercado muy competitivo. Analiza los distintos modelos de posicionamiento de productores exitosos: el productor especialista en un subgénero muy específico (reggeaton old school, flamenco fusión, hyperpop), el productor generalista pero con una firma sonora reconocible, el productor que trabaja exclusivamente con artistas emergentes en fase de desarrollo, y el productor que ofrece también servicios de co-escritura y dirección artística. Ayúdame a elegir mi posicionamiento basándome en mis fortalezas actuales y el mercado donde tengo más oportunidades. Diseña los mensajes de marca y el perfil de Instagram y LinkedIn que comuniquen ese posicionamiento de forma efectiva.

Área de negocio 2 - Catálogo de servicios y estructura de precios:
Diseña el catálogo de servicios del productor con precios diferenciados. Servicio 1: producción completa de beat desde cero para un sencillo (precio entre 500 y 2.000 euros según el nivel del artista). Servicio 2: producción y co-escritura de canción completa con letter incluida (precio entre 1.500 y 5.000 euros). Servicio 3: suscripción mensual de beats exclusivos para un artista en desarrollo (precio entre 800 y 1.500 euros al mes). Servicio 4: consultoría de dirección artística y A&R para sellos y managers (precio por proyecto). Para cada servicio, define el alcance exacto, los entregables, los plazos y las condiciones de propiedad de los masters y de los derechos de edición.

Área de negocio 3 - Uso de IA en el proceso de producción:
Describe cómo integrar la IA en el flujo de trabajo de producción musical de forma que aumente la velocidad sin comprometer la calidad. Explica el uso de IA para: generación de referencias y mood boards sonoros a partir de la descripción del artista en lenguaje natural, análisis de las tendencias de producción en el género objetivo (qué BPMs, qué estructuras de canción y qué elementos sonoros dominan el top 50 del género), corrección de mezcla asistida con sugerencias de EQ y compresión, y la generación de variaciones de un hook o de una sección de la canción para presentar opciones al artista. Establece los límites éticos de uso de la IA: qué parte del proceso debe ser siempre 100% humana para mantener la autenticidad artística.

Área de negocio 4 - Captación de clientes y crecimiento del negocio:
Propón las estrategias de captación de nuevos clientes artistas para el productor freelance. Estrategia 1: construcción de autoridad en TikTok e Instagram mostrando el proceso de producción (¿qué tipo de contenido de "making of" genera más conversiones en clientes?). Estrategia 2: marketplace de beats (BeatStars, Airbit) como canal de ingresos pasivos y de captación de clientes para producciones personalizadas. Estrategia 3: alianzas con managers, agentes de booking y coaches de artistas que pueden recomendar el productor a sus clientes. Estrategia 4: participación en programas de desarrollo de artistas de sellos independientes y académicos de música. Para cada estrategia, define las acciones concretas de los primeros 30 días y las métricas de seguimiento.

Área de negocio 5 - Gestión del negocio freelance y escalabilidad:
Describe cómo gestionar el negocio de producción musical como una empresa, no como un hobby. Cubre: la estructura legal óptima en España (autónomo vs. SL, deducción de gastos del home studio), la gestión financiera con separación de royalties creativos y fees de producción, el sistema de contratos para proteger los derechos sobre las producciones (qué incluir en el contrato de producción para evitar disputas sobre la propiedad de los masters y los derechos de publicación), el sistema de gestión de proyectos para trabajar con varios artistas simultáneamente sin perder la calidad, y el roadmap hacia la escalabilidad: cuándo y cómo contratar al primer colaborador (co-productor, ingeniero de mezcla) sin comprometer la rentabilidad del negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Plan de negocio para productor musical freelance con IA como ventaja competitiva',
                'vote_score'       => 46,
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
