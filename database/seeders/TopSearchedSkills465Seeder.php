<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills465Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Campañas de marketing turístico hiperpersonalizadas con IA',
                'description'      => 'Diseña campañas de marketing para destinos turísticos y experiencias de viaje usando IA para personalizar el mensaje, el canal y el momento según el perfil del viajero.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing digital turístico y personalización con IA. Tu misión es ayudarme a diseñar campañas de marketing para el sector turístico que usen la inteligencia artificial para adaptar el mensaje, el canal y el momento de comunicación al perfil y el estado de planificación de cada viajero potencial.

**Contexto de mi negocio turístico**

Antes de comenzar, cuéntame:
- ¿Qué tipo de negocio turístico tienes? (destino, hotel, agencia de viajes, tour operador, plataforma de experiencias, aerolínea, etc.)
- ¿Cuál es tu mercado objetivo? (turismo nacional, europeo, internacional, por nicho: aventura, lujo, familias, solo travel, etc.)
- ¿Qué canales de marketing usas actualmente? (email, redes sociales, paid media, metabuscadores, OTAs)
- ¿Tienes datos de comportamiento de tus clientes anteriores? (historial de reservas, preferencias, temporadas)
- ¿Cuál es el principal objetivo de la campaña? (notoriedad de destino, generación de reservas, fidelización, recuperación post-temporada)

**Estrategia de marketing turístico personalizado con IA**

Etapa 1 — Segmentación avanzada del viajero con IA:
El marketing turístico tradicional segmenta por demografía. La IA permite ir mucho más allá:
- Segmentación por intención de viaje: la IA identifica en qué fase de planificación está cada viajero (inspiración, consideración, decisión, pre-viaje, durante el viaje, post-viaje) y adapta el mensaje a cada fase
- Segmentación por psicografía de viaje: el tipo de viajero (aventurero, cultural, relax, gastrónomo, familia, lujo, presupuesto) determina qué experiencias y mensajes resuenan más
- Segmentación por señales de comportamiento: qué páginas visita, qué destinos busca, qué tipo de alojamiento mira, si abandona el proceso de reserva

Etapa 2 — Contenido personalizado por fase del viajero:
La IA puede generar variaciones de contenido para cada segmento y fase:

Fase de inspiración (el viajero sueña pero no ha elegido destino):
- Contenido visual e inmersivo que despierte el deseo de visitar el destino
- Vídeos y carruseles de experiencias únicas generadas con IA adaptadas al tipo de viajero
- Historias de otros viajeros similares al perfil del usuario

Fase de consideración (el viajero compara destinos y opciones):
- Contenido comparativo: por qué tu destino o producto es la mejor opción para su perfil
- Reviews y testimoniales de viajeros similares, gestionados y amplificados con IA
- Calculadoras de viaje interactivas que la IA personaliza según el presupuesto y preferencias del usuario

Fase de decisión (el viajero está listo para reservar):
- Ofertas personalizadas basadas en el historial de búsqueda y el perfil del viajero
- Urgencia genuina: disponibilidad real, precios que cambian según la demanda
- Remarketing hiperpersonalizado: el anuncio muestra exactamente el hotel, el destino o la experiencia que el usuario miró pero no reservó

Fase post-reserva y pre-viaje:
- Comunicaciones de preparación del viaje personalizadas con información relevante para ese viajero específico
- Upselling inteligente: la IA identifica qué experiencias adicionales son más relevantes para cada viajero basándose en su perfil y destino

Fase post-viaje (fidelización y UGC):
- Solicitudes de review personalizadas en el momento óptimo
- Programas de fidelización adaptados a las preferencias de cada viajero
- Campañas de reactivación con ofertas basadas en el historial del viajero

Etapa 3 — Personalización multicanal con IA:
- Email: asuntos y contenidos generados con IA adaptados al destino y tipo de viaje de cada suscriptor
- Redes sociales: contenido visual generado con IA adaptado al tipo de viajero que más interactúa en cada plataforma
- Paid media: creatividades dinámicas generadas con IA para cada combinación de audiencia y destino
- Web: personalización de la homepage y las páginas de destino según el origen del visitante, su historial y su perfil

Etapa 4 — Medición y optimización con IA:
La IA no solo personaliza: también aprende y mejora:
- Atribución multicanal: la IA identifica qué combinación de canales y mensajes lleva a la reserva
- Optimización de gasto publicitario: la IA redistribuye el presupuesto en tiempo real hacia los canales y audiencias con mejor rendimiento
- Predicción de temporada: modelos de IA que anticipan la demanda por destino y temporada para planificar las campañas con antelación

**Entregables**

Genera para mi estrategia de marketing turístico:
1. Un mapa de segmentación del viajero con los perfiles principales y los mensajes clave para cada uno
2. Un calendario de contenido de 30 días con temas, formatos y canales para cada segmento de viajero
3. Cinco variaciones de copy de email para la fase de inspiración, adaptadas a los principales perfiles de viajero
4. Un plan de remarketing turístico para recuperar a los usuarios que abandonaron el proceso de reserva
5. Un dashboard de KPIs de marketing turístico con las métricas clave para cada fase del journey del viajero

El marketing turístico con IA no es solo más eficiente: crea la sensación de que la marca turística entiende exactamente qué tipo de viaje sueñas y cómo ayudarte a hacerlo realidad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar campañas de marketing turístico personalizadas con IA adaptadas al perfil y la fase de planificación de cada viajero',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Sistemas de recomendación de destinos y actividades turísticas con IA',
                'description'      => 'Diseña e implementa un motor de recomendación turístico con IA que sugiera destinos, alojamientos y actividades personalizadas según el perfil y el historial del viajero.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de software especializado en sistemas de recomendación con machine learning y desarrollo de plataformas turísticas digitales. Tu misión es ayudarme a diseñar e implementar un motor de recomendación turístico con IA que personalice las sugerencias de destinos, alojamientos, actividades y restaurantes para cada viajero.

**Contexto del proyecto**

Para comenzar el diseño técnico, cuéntame:
- ¿Qué tipo de plataforma turística estás construyendo? (OTA, metabuscador, app de viajes, marketplace de experiencias, plataforma de hoteles)
- ¿Cuántos usuarios activos tienes o esperas tener?
- ¿Qué datos de usuarios tienes disponibles? (historial de reservas, búsquedas, valoraciones, preferencias declaradas, comportamiento en la plataforma)
- ¿Cuál es tu stack tecnológico? (lenguaje, framework, infraestructura cloud)
- ¿Tienes experiencia previa con sistemas de recomendación o es un proyecto desde cero?

**Arquitectura del sistema de recomendación turístico**

Nivel 1 — Tipos de recomendación según los datos disponibles:

Recomendación basada en contenido (Content-Based Filtering):
Recomiendes destinos o actividades similares a los que el usuario ya ha visto, reservado o valorado positivamente. Requiere tener una buena representación vectorial de cada ítem turístico (destino, hotel, actividad) con sus atributos: tipo, clima, precio, nivel de actividad, cultura, distancia.

Recomendación colaborativa (Collaborative Filtering):
Recomiendas basándote en el comportamiento de usuarios similares al perfil actual. "Viajeros como tú también disfrutaron de..." Funciona mejor con volumen de datos de interacciones (reservas, clics, valoraciones).

Recomendación híbrida:
La combinación de ambas supera a cada enfoque por separado. La mayoría de los sistemas de recomendación turístico maduros (Booking, Airbnb, TripAdvisor) usan enfoques híbridos.

Recomendación con LLMs:
Los grandes modelos de lenguaje permiten recomendaciones conversacionales: el usuario describe en lenguaje natural qué tipo de viaje quiere y el sistema entiende la intención y recomienda en consecuencia, sin depender de que el usuario haga búsquedas exactas.

Nivel 2 — Pipeline de datos para el sistema de recomendación:
Recopilación de datos de comportamiento del usuario:
- Clics en destinos y alojamientos
- Tiempo de permanencia en páginas de destino
- Búsquedas realizadas
- Reservas completadas y canceladas
- Valoraciones y reviews
- Wishlist y guardados

Enriquecimiento del perfil del viajero:
- Preferencias declaradas en el onboarding
- Inferencia de preferencias a partir del comportamiento
- Segmentación por tipo de viajero

Representación vectorial del inventario turístico:
- Embeddings de destinos y alojamientos que capturen similitudes semánticas
- Actualización continua con nuevas valoraciones y comportamientos

Nivel 3 — Implementación técnica:

Para un MVP de sistema de recomendación turístico:
- Matrix factorization (SVD) para collaborative filtering si tienes suficiente historial de interacciones
- Embeddings de destinos con sentence transformers para content-based filtering
- Una capa de recomendación conversacional con la API de Claude o GPT-4 para la interfaz de lenguaje natural
- Redis o una base de datos vectorial (Pinecone, Weaviate, Chroma) para serving en tiempo real de las recomendaciones

Para escalar el sistema:
- A/B testing de los diferentes algoritmos de recomendación
- Evaluación offline con métricas de ranking: NDCG, MAP, precision@k
- Evaluación online: CTR de las recomendaciones, tasa de conversión a reserva

Nivel 4 — Experiencia de usuario del sistema de recomendación:
El mejor sistema de recomendación falla si la experiencia de usuario es mala:
- Explicabilidad: "Te recomendamos este destino porque..." genera más confianza y clics que una caja negra
- Diversidad: evitar que el sistema recomiende siempre lo mismo o caiga en filter bubbles
- Serendipity: incluir un componente de sorpresa grata para mantener el engagement
- Control del usuario: permitir al viajero indicar preferencias explícitas y ajustar las recomendaciones

**Entregables**

Genera para mi proyecto:
1. Un diagrama de arquitectura del sistema de recomendación con los componentes clave
2. Una especificación técnica del modelo de datos del viajero y del ítem turístico para el sistema de recomendación
3. Un plan de implementación en tres fases: MVP con datos mínimos, escala y personalización avanzada
4. Un framework de evaluación del sistema de recomendación con las métricas offline y online clave
5. Una guía de los cinco mejores modelos y librerías open source para sistemas de recomendación turístico, con sus pros y contras

El sistema de recomendación turístico con IA transforma la búsqueda de viajes de una tarea abrumadora en una experiencia de descubrimiento personalizado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar e implementar un motor de recomendación turístico con IA que personalice destinos, alojamientos y actividades para cada viajero',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias turísticas inmersivas con IA generativa',
                'description'      => 'Usa la IA generativa para diseñar materiales visuales, narrativas y experiencias inmersivas que hagan irresistible el destino o producto turístico ante el viajero potencial.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador creativo especializado en experiencias turísticas y el uso de IA generativa para crear materiales visuales y narrativos que inspiren a los viajeros y hagan irresistible un destino o producto turístico. Tu misión es ayudarme a usar la IA generativa para elevar la presencia visual y narrativa de mi propuesta turística.

**Contexto del proyecto de diseño**

Para comenzar, cuéntame:
- ¿Qué estás promoviendo? (destino, hotel, resort, agencia de aventura, turismo gastronómico, turismo cultural, experiencias de bienestar, etc.)
- ¿Cuál es el público objetivo? (mochileros, parejas, familias, viajeros de lujo, nómadas digitales, grupos de amigos)
- ¿Cuáles son los canales de comunicación principales? (Instagram, web, email, TikTok, catálogos digitales, ferias de turismo)
- ¿Qué tipo de materiales necesitas? (fotografía, vídeo, ilustración, copywriting, guías de viaje, branded content)
- ¿Tienes ya fotografía o vídeo de calidad del destino o producto, o partes prácticamente desde cero?

**Aplicaciones de IA generativa en el diseño de experiencias turísticas**

Aplicación 1 — Fotografía e imágenes con IA:
La IA generativa puede transformar la forma en que produces imágenes para el marketing turístico:
- Generación de imágenes conceptuales de destinos para campañas de inspiración antes de realizar una sesión fotográfica real
- Enriquecimiento de fotografía existente: añadir luz de atardecer, eliminar elementos no deseados, adaptar el ambiente visual al estilo de la marca
- Creación de variaciones estacionales: mostrar el mismo destino en diferentes épocas del año, o en diferentes condiciones meteorológicas ideales, sin necesidad de múltiples sesiones fotográficas
- Generación de imágenes de lifestyle para mostrar al viajero ideal disfrutando del producto turístico

Herramientas recomendadas: Midjourney para imágenes de alta calidad artística, DALL·E 3 para integración con workflows de texto a imagen, Adobe Firefly para integración con Photoshop y flujos de trabajo profesionales, Stable Diffusion para uso local y personalización avanzada.

Aplicación 2 — Vídeo y motion con IA:
El vídeo es el formato rey en marketing turístico. La IA está transformando su producción:
- Generación de vídeos cortos de destino a partir de fotografías estáticas con herramientas de text-to-video
- Creación de narrativas visuales dinámicas para Reels, TikTok y Stories
- Generación de voice-over en múltiples idiomas con IA para adaptar el mismo vídeo a diferentes mercados sin coste adicional
- Subtitulado automático y traducción de vídeos con IA para ampliar el alcance internacional

Aplicación 3 — Narrativa y copywriting turístico con IA:
Las palabras crean el deseo de viajar antes que la imagen. La IA puede ayudarte a escalar la producción de contenido:
- Descripciones evocadoras de destinos y alojamientos que activen todos los sentidos del lector
- Guías de viaje personalizadas generadas con IA según el tipo de viajero y sus intereses
- Stories de Instagram con narrativa cinematográfica generada con IA
- Textos de web en múltiples idiomas adaptados culturalmente, no solo traducidos
- Scripts de vídeo para YouTube y TikTok que cuenten la historia del destino de forma auténtica y entretenida

Aplicación 4 — Experiencias interactivas con IA:
La IA generativa permite crear experiencias de preventa inmersivas:
- Tours virtuales narrados con IA: el usuario puede hacer preguntas sobre el destino o el hotel y la IA responde de forma contextual mientras navega por el tour virtual
- Planificadores de viaje interactivos: el usuario describe su viaje ideal y la IA genera un itinerario visual personalizado con imágenes y descripción de cada experiencia
- Chatbots de destino con personalidad: un asistente de IA con la voz y el tono del destino que responde preguntas de viajeros potenciales de forma atractiva

Aplicación 5 — Identidad visual coherente con IA:
- Generación y mantenimiento de una paleta de colores, tipografías y estilos visuales coherentes con la marca del destino o producto turístico
- Creación de assets de marca para diferentes canales manteniendo la coherencia visual
- Generación de creatividades para paid media en múltiples formatos y tamaños de forma automatizada

**Flujo de trabajo de producción de contenido turístico con IA**

Semana 1: Define el brief visual y narrativo del destino con la ayuda de la IA (mood board, paleta, tono, arquetipos de viajero).
Semana 2: Genera las primeras imágenes conceptuales con Midjourney o DALL·E. Itera hasta lograr el estilo correcto.
Semana 3: Produce el copy de las principales páginas web y materiales de marketing con Claude.
Semana 4: Crea los primeros assets para redes sociales y paid media usando los materiales generados.

**Entregables**

Genera para mi proyecto de diseño turístico:
1. Un brief creativo de marca turística con los prompts de IA para generar el mood board visual
2. Diez prompts de Midjourney optimizados para generar imágenes del estilo de tu destino o producto turístico
3. Una guía de copywriting turístico con la estructura y el tono para cada tipo de contenido (web, redes, email, guías)
4. Un calendario de producción de contenido turístico con IA para los primeros 90 días
5. Un sistema de gestión de assets visuales de IA para mantener la coherencia de marca en todos los canales

La IA generativa no reemplaza la autenticidad del destino: la hace visible y atractiva para el viajero exacto que quieres atraer.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Usar IA generativa para crear materiales visuales, narrativas y experiencias inmersivas que hagan irresistible el destino turístico',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Revenue management y pricing dinámico en turismo con IA',
                'description'      => 'Implementa estrategias de revenue management y pricing dinámico en hoteles, aerolíneas o agencias usando IA para maximizar ingresos en cada temporada y canal de venta.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en revenue management turístico y pricing dinámico con IA. Tu misión es ayudarme a implementar una estrategia de revenue management avanzada que use la inteligencia artificial para optimizar los precios, la distribución y la ocupación de mi negocio turístico en tiempo real.

**Contexto de mi negocio turístico**

Para comenzar el análisis, cuéntame:
- ¿Qué tipo de negocio turístico tienes? (hotel, cadena hotelera, apartamentos turísticos, aerolínea, tour operador, empresa de alquiler de vehículos)
- ¿Cuántas unidades tienes? (habitaciones, asientos, vehículos)
- ¿Cuál es tu mix actual de canales de venta? (web directa, OTAs, GDS, agencias, MICE)
- ¿Utilizas ya algún sistema de revenue management o gestionas los precios de forma manual?
- ¿Cuáles son las temporadas altas y bajas de tu negocio y cuál es el problema más crítico? (overbooking en temporada alta, bajo fill rate en temporada baja, márgenes erosionados por comisiones de OTAs)

**Framework de revenue management con IA**

Pilar 1 — Previsión de demanda con IA:
La base de cualquier estrategia de revenue management es predecir correctamente la demanda futura:
- Modelos de previsión de demanda que integran datos históricos de ocupación, datos de reservas on-the-books, eventos locales, festividades, tendencias de búsqueda (Google Trends, metabuscadores), datos meteorológicos y señales macroeconómicas
- La IA puede procesar todas estas fuentes de datos simultáneamente y generar previsiones de demanda con un horizonte de 365 días actualizado en tiempo real
- Segmentación de la demanda: la IA diferencia entre segmentos (leisure, business, grupos, MICE) y predice la demanda de cada segmento por separado para optimizar el mix

Pilar 2 — Pricing dinámico con IA:
Una vez que tienes la previsión de demanda, la IA optimiza el precio en tiempo real:
- Estrategia de precios por segmento: la IA define diferentes precios para cada segmento según su disposición a pagar y la sensibilidad al precio
- Pricing por canal: el precio puede variar según el canal (web directa con precio best available rate, OTAs con comisiones incorporadas, corporativo con tarifas negociadas)
- Pricing por anticipación: la IA ajusta los precios según el tiempo que falta para la llegada y la velocidad de absorción de la demanda
- Pricing de última hora: estrategias para maximizar la ocupación en los últimos días sin canibalizar ingresos a mayor plazo
- Competitive pricing: la IA monitorea los precios de los competidores en tiempo real y te alerta o ajusta automáticamente tu precio en función de la paridad o la diferenciación estratégica

Pilar 3 — Gestión del inventario y restricciones con IA:
El revenue management no es solo precio: también es gestionar qué inventario vendes, a quién y cuándo:
- Minimum Length of Stay (MinLOS): la IA define automáticamente las restricciones de estancia mínima para los períodos de alta demanda para maximizar el RevPAR
- Close to Arrival (CTA) y Close to Departure (CTD): la IA cierra la venta de ciertas fechas en ciertos canales cuando la probabilidad de ocupación completa es alta
- Overbooking óptimo: modelos de cancelación y no-show con IA que permiten calcular el nivel de overbooking que maximiza los ingresos sin generar problemas operativos

Pilar 4 — Optimización de canales de distribución:
- Análisis de rentabilidad neta por canal: la IA calcula el margen neto de cada canal incluyendo comisiones, costes de transacción y el valor del cliente captado
- Estrategia de channel mix: la IA recomienda cómo distribuir el inventario entre canales para maximizar el ingreso neto, priorizando el canal directo cuando la rentabilidad lo justifica
- Paridad de precios: monitoreo automático con IA de la paridad de precios entre canales para cumplir con los acuerdos con OTAs y evitar penalizaciones

Pilar 5 — KPIs de revenue management con IA:
Mide el rendimiento con las métricas estándar del sector:
- RevPAR (Revenue Per Available Room o unidad equivalente)
- ADR (Average Daily Rate) y su evolución respecto al año anterior
- Ocupación y pick-up (ritmo de reservas)
- RevPAB (Revenue Per Available Booking) para canales de distribución
- NetRevPAR (ingresos netos después de comisiones y costes de distribución)

**Herramientas de IA para revenue management turístico**

Sistemas de Revenue Management (RMS): IDeaS Revenue Solutions, Duetto, Atomize, RoomPriceGenie para hoteles independientes y pequeñas cadenas. Amadeus Revenue Intelligence para aerolíneas y grandes cadenas.
Rate shopping y monitoreo competitivo: OTA Insight (ahora Lighthouse), RateGain.
Previsión de demanda: Flyr para aerolíneas, Demand360 de STR para hoteles.

**Entregables**

Genera para mi negocio turístico:
1. Un modelo de previsión de demanda simplificado con las variables clave que debes incorporar y cómo ponderarlas
2. Una estrategia de pricing dinámico para los próximos 90 días basada en el contexto de mi negocio
3. Una matriz de tarifas por segmento y canal con las reglas de pricing recomendadas
4. Un dashboard de KPIs de revenue management con las métricas diarias, semanales y mensuales a monitorear
5. Un checklist de implementación de revenue management con IA para un negocio turístico de mi tamaño

El revenue management con IA no es solo subir precios cuando hay demanda: es maximizar los ingresos totales de cada unidad disponible en cada momento, canal y segmento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementar revenue management y pricing dinámico en negocios turísticos usando IA para optimizar ingresos por canal, temporada y segmento',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Desarrollo de productos turísticos digitales con IA',
                'description'      => 'Diseña y lanza nuevos productos turísticos digitales usando IA: desde el análisis de tendencias de viaje hasta el diseño de la experiencia y la validación con viajeros reales.',
                'prompt_content'   => <<<'EOT'
Eres un product manager especializado en el sector turístico digital con experiencia en el uso de IA para identificar oportunidades de producto, diseñar nuevas experiencias de viaje y validar propuestas con usuarios reales. Tu misión es ayudarme a usar la IA como copiloto en el proceso de desarrollo de nuevos productos turísticos digitales.

**Contexto del producto turístico**

Para comenzar, cuéntame:
- ¿Qué tipo de producto turístico digital quieres desarrollar? (app de viajes, plataforma de experiencias, servicio de planificación personalizado, marketplace de guías, producto de turismo sostenible, etc.)
- ¿A qué viajero va dirigido? (mochileros, viajeros de lujo, nómadas digitales, turismo familiar, grupos de aventura)
- ¿Cuál es el problema concreto del viajero que quieres resolver?
- ¿Cuáles son las plataformas existentes que actualmente "resuelven" ese problema aunque sea parcialmente?
- ¿Tienes ya alguna validación inicial con usuarios o es una idea en fase muy temprana?

**Framework de desarrollo de producto turístico digital con IA**

Fase 1 — Identificación de oportunidades con IA:
La IA puede ayudarte a identificar tendencias y gaps de mercado en el sector turístico antes que la competencia:
- Análisis de tendencias de viaje: la IA procesa datos de Google Trends, búsquedas en Booking y Airbnb, publicaciones en redes sociales y artículos de tendencias turísticas para identificar qué tipos de viaje están ganando popularidad
- Análisis de reviews y feedback negativo de productos turísticos existentes: la IA identifica las quejas más frecuentes en Tripadvisor, App Store y Google Play para detectar necesidades no cubiertas
- Análisis competitivo profundo: la IA analiza las funcionalidades, precios y valoraciones de los productos turísticos digitales existentes para encontrar el espacio de oportunidad

Fase 2 — Definición del problema y la propuesta de valor:
Una vez identificada la oportunidad, define con precisión el problema:
- La IA ayuda a articular el "job to be done" del viajero: qué progreso quiere conseguir y qué obstáculos se lo impiden actualmente
- Generación de múltiples propuestas de valor con IA: diferentes formas de abordar el mismo problema para explorar el espacio de solución
- Validación conceptual con IA: análisis de qué propuesta de valor tiene más probabilidad de resonar con el segmento objetivo basándose en datos de comportamiento del viajero

Fase 3 — Diseño del producto con IA:
Con el problema claramente definido, diseña el producto:
- Generación del mapa de features con IA: qué funcionalidades mínimas necesita el producto para resolver el problema del viajero y qué features adicionales lo diferenciarán
- Diseño del core loop del producto: ¿qué hace el usuario cada vez que abre el producto y qué valor obtiene en cada sesión?
- Customer journey del viajero en el producto: desde el descubrimiento hasta la fidelización
- Prototipado rápido con IA: wireframes y flujos de usuario generados con IA en horas para validar con usuarios reales

Fase 4 — Validación con viajeros reales:
La IA puede acelerar el ciclo de validación:
- Generación de guías de entrevista de usuario adaptadas al tipo de producto turístico que estás desarrollando
- Análisis de feedback de tests de usuario: la IA sintetiza el feedback de entrevistas y tests de usabilidad para identificar los patrones más significativos
- A/B testing automatizado de diferentes versiones del producto con análisis de IA

Fase 5 — Monetización y go-to-market:
- Modelos de monetización más efectivos para productos turísticos digitales: comisión por reserva, suscripción, freemium, white label para agencias o destinos
- Análisis de pricing con IA: qué precio están dispuestos a pagar los viajeros objetivo
- Estrategia de distribución: canales de adquisición de usuarios para productos turísticos digitales (OTAs, SEO de viajes, social media, partnerships con destinos)

Fase 6 — Iteración post-lanzamiento con IA:
- Análisis de retención y engagement con IA para identificar dónde se pierde el usuario y por qué
- Priorización del backlog con IA basándose en el comportamiento real de los usuarios tras el lanzamiento
- Detección de comportamientos no anticipados que pueden revelar nuevas oportunidades de producto

**Tendencias actuales en productos turísticos digitales con IA (2025-2026)**

Planificación de viajes con IA conversacional: asistentes que crean itinerarios personalizados en segundos a partir de una conversación natural.
Turismo regenerativo y sostenible con IA: plataformas que miden y compensan la huella de carbono del viaje, conectan con experiencias de impacto positivo local.
Nómadas digitales: herramientas de gestión integral del estilo de vida nómada, desde visados hasta espacios de coworking.
Turismo de salud y bienestar: plataformas de reserva de retiros de bienestar, wellness travel y experiencias de salud mental a través del viaje.

**Entregables**

Genera para mi proyecto:
1. Un análisis de tendencias del sector turístico digital con las cinco oportunidades de producto más relevantes para el próximo año
2. Un Product Brief de una página para el producto turístico digital que estoy desarrollando
3. Un mapa de features priorizadas (MoSCoW) para el MVP del producto
4. Un guión de entrevista de validación de usuario de diez preguntas específicas para mi producto turístico
5. Un plan de lanzamiento de 90 días con los hitos clave y las métricas de éxito del MVP

El mejor producto turístico digital es el que el viajero siente que lo entiende mejor que cualquier agente de viajes tradicional: porque ha aprendido de millones de viajes anteriores.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Usar IA para identificar oportunidades, diseñar y validar nuevos productos turísticos digitales centrados en el viajero',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de plantillas estacionales en hostelería con IA',
                'description'      => 'Aplica IA en la planificación, contratación y gestión de plantillas estacionales en hoteles y restaurantes para optimizar costes laborales y mantener la calidad del servicio.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión de recursos humanos en el sector turístico y hostelero, especializado en la aplicación de IA para optimizar la planificación y gestión de plantillas estacionales. Tu misión es ayudarme a usar la IA para hacer más eficiente y humana la gestión del talento en un negocio turístico con alta estacionalidad.

**Contexto de mi negocio hostelero**

Para comenzar, cuéntame:
- ¿Qué tipo de negocio hostelero tienes? (hotel de playa, hotel de ciudad, resort, restaurante de temporada, parque temático, etc.)
- ¿Cuántos empleados tienes en temporada alta versus baja?
- ¿Cuáles son tus temporadas y cuándo necesitas incorporar o reducir plantilla?
- ¿Qué perfiles son los más difíciles de contratar en temporada? (servicio en sala, recepción, cocina, animación, mantenimiento)
- ¿Cuál es el mayor desafío: encontrar personal, retenerlo durante la temporada, o gestionar la calidad del servicio con plantilla nueva?

**Sistema de gestión de plantilla estacional con IA**

Módulo 1 — Previsión de necesidades de plantilla con IA:
La base de una buena gestión de plantilla estacional es prever correctamente cuánto personal necesitas en cada momento:
- Modelos de previsión de ocupación y afluencia con IA que predicen la demanda semana a semana con 3-6 meses de antelación
- La IA traduce las previsiones de ocupación en necesidades de plantilla por turno, departamento y nivel de skill
- Alertas tempranas: si la previsión de demanda cambia (por meteorología, eventos locales, cambios macroeconómicos), la IA ajusta las necesidades de personal automáticamente
- Optimización del ratio personal-cliente por departamento basado en estándares de calidad de servicio

Módulo 2 — Reclutamiento estacional acelerado con IA:
La contratación de plantilla estacional tiene plazos muy ajustados. La IA puede acelerar el proceso:
- Generación de ofertas de empleo estacional atractivas con IA adaptadas al perfil buscado y a las plataformas de publicación (LinkedIn, InfoJobs, redes de hostelería)
- Cribado automatizado de candidatos: la IA filtra y prioriza candidatos según la experiencia en hostelería, la disponibilidad y la localización
- Contratación de ex-empleados de temporadas anteriores: la IA identifica y contacta proactivamente a los mejores empleados de temporadas pasadas antes de que los contrate la competencia
- Aceleración del proceso de entrevistas: la IA genera las preguntas más relevantes para cada perfil hostelero y puede realizar una primera criba de candidatos por vídeo

Módulo 3 — Onboarding rápido y efectivo para temporada:
Un empleado de temporada tiene días, no semanas, para llegar a la productividad plena:
- Materiales de onboarding generados con IA: guías del establecimiento, manual de servicio, procedimientos y estándares de calidad adaptados a cada puesto
- Módulos de formación acelerada con IA: los empleados nuevos acceden a formación en tablet o móvil antes de su primer turno, en formato microlearning de máximo 15 minutos por módulo
- Chatbot de onboarding: el empleado nuevo puede preguntar cualquier duda sobre procedimientos, políticas o el establecimiento a cualquier hora sin necesitar interrumpir a un supervisor

Módulo 4 — Planificación de turnos y gestión de horarios con IA:
La planificación de turnos en hostelería es compleja: hay que equilibrar la demanda prevista, la normativa laboral, las preferencias del personal y los costes:
- La IA genera la planificación de turnos semanal en minutos, optimizando según la ocupación prevista, los costes laborales, los descansos legales y las preferencias del personal
- Gestión de ausencias y sustituciones: cuando hay una baja de última hora, la IA identifica automáticamente quién puede cubrirla según disponibilidad y skill
- Alertas de coste laboral: la IA monitorea el coste de plantilla en tiempo real y alerta cuando se prevé una desviación respecto al presupuesto

Módulo 5 — Retención del talento estacional:
El gran reto del sector: mantener al personal durante toda la temporada y conseguir que vuelva la siguiente:
- Encuestas de clima rápidas: la IA analiza el sentimiento del equipo en tiempo real con encuestas breves de una o dos preguntas semanales
- Alertas de riesgo de abandono: la IA detecta señales de insatisfacción o intención de salida antes de que el empleado lo comunique
- Programas de retención: bonus de permanencia hasta el final de la temporada, reconocimiento automatizado de hitos y buen rendimiento, promesa de vuelta la temporada siguiente

Módulo 6 — Evaluación y offboarding de temporada:
Al final de la temporada, la IA ayuda a gestionar el cierre del ciclo:
- Evaluaciones de rendimiento rápidas generadas con IA para cada empleado de temporada
- Clasificación del talento: identificación de los empleados con quienes quieres mantener el contacto para la próxima temporada
- Gestión del offboarding: comunicaciones de cierre, documentación final y compromisos para la siguiente temporada

**Entregables**

Genera para mi negocio hostelero:
1. Un modelo de previsión de necesidades de plantilla por departamento y semana para la próxima temporada
2. Una oferta de empleo estacional tipo para los tres perfiles más demandados en mi establecimiento
3. Un plan de onboarding de cinco días para personal de temporada con los módulos de formación clave
4. Un sistema de planificación de turnos simplificado con las reglas de optimización que debe aplicar la IA
5. Un protocolo de retención de personal estacional con las acciones de las semanas 2, 4, 6 y 8 de la temporada

La gestión de plantilla estacional con IA no es solo eficiencia operativa: es la diferencia entre un equipo que se siente valorado y da lo mejor de sí mismo, y uno que sobrevive la temporada y no vuelve.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Usar IA para planificar, contratar y gestionar plantillas estacionales en hoteles y restaurantes de forma más eficiente',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Optimización de precios dinámicos en hoteles y aerolíneas con IA',
                'description'      => 'Aplica modelos de IA para optimizar el pricing dinámico en el sector turístico, maximizando el ingreso por unidad disponible en cada momento, canal y segmento de cliente.',
                'prompt_content'   => <<<'EOT'
Eres un experto en análisis financiero y revenue management para el sector turístico, con especialización en modelos de pricing dinámico con inteligencia artificial. Tu misión es ayudarme a construir un marco analítico para optimizar los precios de mi negocio turístico usando IA, maximizando el ingreso neto en cada momento y segmento.

**Contexto financiero y operativo**

Para comenzar el análisis, cuéntame:
- ¿Qué tipo de negocio tienes? (hotel independiente, cadena hotelera, aerolínea, plataforma de apartamentos, empresa de alquiler de vehículos, tour operador)
- ¿Cuál es tu estructura de costes? ¿Cuánto es coste fijo y cuánto es variable por unidad vendida?
- ¿En qué rango de precios trabajas actualmente y cómo fijas los precios? (manualmente, con paridad respecto a competidores, con un RMS básico)
- ¿Cuáles son tus principales segmentos de cliente y cuál es la diferencia en su disposición a pagar?
- ¿Cuál es tu RevPAR o yield actual y cuánto crees que podrías mejorarlo?

**Marco de optimización de pricing dinámico con IA**

Dimensión 1 — Modelado de la demanda:
El pricing dinámico eficaz depende de un buen modelo de demanda. La IA puede incorporar:
- Datos históricos de ocupación y precios propios
- Elasticidad precio-demanda por segmento: cuánto cae la demanda cuando subes el precio un 10% en cada segmento
- Factores externos: estacionalidad, festivos, eventos locales, clima, paridades con el año anterior
- Señales de demanda en tiempo real: velocidad de reservas (pick-up), búsquedas en metabuscadores, comportamiento en la web propia
- Competencia: precios de los establecimientos o aerolíneas competidores en tiempo real

La IA integra todas estas variables para generar una previsión de demanda con granularidad diaria o incluso horaria, según el tipo de negocio.

Dimensión 2 — Optimización del precio por segmento:
La clave del pricing dinámico avanzado es la diferenciación por segmento:
- Segmento leisure: alta sensibilidad al precio, reserva con mucha anticipación, responde bien a early bird. Precio más bajo pero alto volumen.
- Segmento business: baja sensibilidad al precio, reserva con poca anticipación, valora la disponibilidad y la flexibilidad. Precio más alto.
- Segmento grupos y MICE: volumen alto, negociación de tarifa, requiere bloqueo anticipado de inventario. Margen más bajo pero predictibilidad.
- Segmento OTAs: precio competitivo necesario para el posicionamiento, pero erosión de margen por comisiones. La IA calcula el precio neto óptimo por OTA.

La IA genera el precio óptimo para cada segmento en cada momento, balanceando maximización del ingreso total con la ocupación objetivo.

Dimensión 3 — Gestión del inventario y la capacidad:
El pricing dinámico no opera en el vacío: debe coordinarse con la gestión del inventario:
- Nested inventory: la IA decide cuántas unidades reservar para cada segmento en cada período
- Overbooking óptimo: la IA calcula el nivel de overbooking que maximiza ingresos teniendo en cuenta la probabilidad histórica de cancelaciones y no-shows
- Close-outs: la IA decide cuándo cerrar la venta a ciertos segmentos o canales para proteger el inventario para segmentos de mayor valor

Dimensión 4 — Análisis de rentabilidad neta por canal:
El precio bruto no es lo que importa: importa el margen neto después de comisiones y costes de distribución:
- Cálculo del RevPAR neto por canal: web directa, OTAs principales, GDS, grupos, directo telefónico
- La IA optimiza el mix de canales para maximizar el RevPAR neto, no el bruto
- Análisis del coste de adquisición del cliente por canal y su impacto en el LTV

Dimensión 5 — Impacto financiero del pricing dinámico:
Cuantifica el impacto financiero de implementar pricing dinámico con IA:
- Incremento esperado de RevPAR: normalmente entre el 5% y el 15% en el primer año
- Reducción de temporada baja: el pricing correcto puede suavizar los picos y valles de ocupación
- Mejora del mix de segmentos: mayor proporción de reservas de alto valor y menor dependencia de OTAs

**Herramientas y datos necesarios**

Para implementar pricing dinámico con IA necesitas:
- Datos históricos: mínimo dos años de datos de ocupación, precios y segmentación
- Feed de competidores: herramienta de rate shopping (OTA Insight, RateGain, Duetto)
- Integración con el PMS o el sistema de reservas para actualizar precios en tiempo real
- Un RMS (Revenue Management System) con IA o, para negocios más pequeños, herramientas como RoomPriceGenie o Atomize

**Entregables**

Genera para mi análisis financiero:
1. Un modelo de elasticidad precio-demanda simplificado para mis principales segmentos de cliente
2. Una matriz de pricing por segmento y canal con las reglas de ajuste dinámico recomendadas
3. Un análisis de rentabilidad neta por canal con el benchmark de comisiones del sector
4. Un modelo de impacto financiero del pricing dinámico: cuánto podría incrementar mi RevPAR neto en 12 meses
5. Un plan de implementación de pricing dinámico con IA adaptado al tamaño y los recursos de mi negocio

El pricing dinámico con IA no es cobrar más a tus clientes: es cobrar el precio justo en cada momento, para cada cliente, a través del canal correcto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir modelos de pricing dinámico con IA para maximizar el ingreso neto por unidad disponible en negocios turísticos',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal del uso de datos de viajeros e IA en el sector turístico',
                'description'      => 'Analiza el marco legal aplicable al uso de datos personales de viajeros e inteligencia artificial en negocios turísticos, y diseña un programa de compliance adaptado.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho turístico, protección de datos y regulación de inteligencia artificial. Tu misión es ayudarme a entender y cumplir con el marco legal aplicable al uso de datos personales de viajeros y sistemas de IA en mi negocio turístico.

**Contexto de mi negocio turístico**

Para comenzar el análisis legal, cuéntame:
- ¿Qué tipo de negocio turístico tienes? (hotel, agencia de viajes, OTA, plataforma de experiencias, aerolínea, empresa de alquiler de vehículos)
- ¿En qué países recopilas datos de viajeros y dónde están ubicados tus servidores?
- ¿Qué datos de viajeros recopilas actualmente? (datos de contacto, pasaportes, pagos, preferencias, comportamiento en la web, localización)
- ¿Qué sistemas de IA utilizas en tu negocio? (chatbots, motores de recomendación, pricing dinámico, reconocimiento facial para check-in, análisis de sentimiento de reviews)
- ¿Has tenido ya alguna solicitud de ejercicio de derechos ARCO o alguna inspección de la autoridad de control?

**Marco legal aplicable al turismo y la IA**

Bloque 1 — RGPD y datos de viajeros:
El sector turístico es uno de los que más datos personales procesa. El RGPD impone obligaciones específicas:

Datos especialmente sensibles en turismo:
- Datos de pasaporte y DNI: datos necesarios para el check-in en hoteles y el embarque en aerolíneas. Requieren base legal y medidas de seguridad reforzadas.
- Datos de salud: necesidades dietéticas, alergias, necesidades de accesibilidad. Son datos de categoría especial que requieren consentimiento explícito.
- Datos biométricos: el reconocimiento facial para el check-in o el embarque es un dato biométrico de categoría especial con restricciones muy estrictas.
- Datos de localización: el tracking de movimientos del viajero dentro del hotel o el destino requiere base legal y transparencia.
- Datos de menores: especialmente relevante en turismo familiar.

Obligaciones RGPD para negocios turísticos:
- Registro de actividades de tratamiento: inventario de todos los tratamientos de datos de viajeros
- Evaluación de Impacto en Protección de Datos (EIPD): obligatoria para tratamientos de alto riesgo como reconocimiento facial o perfilado masivo de viajeros
- Nombrar un DPD (Delegado de Protección de Datos) si procesas datos a gran escala o de categorías especiales
- Garantizar los derechos de los viajeros: acceso, rectificación, supresión, portabilidad, limitación y oposición

Bloque 2 — EU AI Act en el sector turístico:
El EU AI Act tiene implicaciones específicas para los sistemas de IA usados en turismo:

Sistemas de IA prohibidos o de alto riesgo en turismo:
- Reconocimiento facial en espacios públicos para identificación de viajeros: prohibido salvo excepciones muy específicas
- Sistemas de scoring de viajeros con efectos discriminatorios: un sistema que niegue servicios a viajeros basándose en su perfil podría ser de alto riesgo
- Chatbots que no se identifiquen como IA: el EU AI Act exige que los sistemas de IA conversacional se identifiquen como tales

Obligaciones para sistemas de IA en turismo:
- Transparencia: los viajeros deben saber cuándo están interactuando con IA
- Supervisión humana: para las decisiones que afectan significativamente al viajero (como una denegación de reserva o una queja), debe existir revisión humana disponible

Bloque 3 — Normativa específica del sector turístico:
Además del RGPD y el EU AI Act, el turismo tiene normativa sectorial propia:
- Libro de registro de viajeros: obligación de comunicar los datos de los huéspedes a las fuerzas de seguridad en España y otros países
- Normativa sobre partes de viajeros: plazos y requisitos para la comunicación de datos a las autoridades
- Normativa de protección del consumidor turístico: transparencia en la información precontractual, condiciones de cancelación y modificación
- Normativa de pagos turísticos: PSD2 y requisitos de autenticación reforzada para pagos online

Bloque 4 — Transferencias internacionales de datos:
El turismo es internacional y los datos de los viajeros fluyen a través de fronteras:
- Las transferencias de datos de viajeros europeos a sistemas en Estados Unidos requieren las garantías adecuadas bajo el EU-US Data Privacy Framework
- Las OTAs y GDS globales deben garantizar que los datos de viajeros europeos se tratan conforme al RGPD independientemente de dónde estén los servidores

**Plan de compliance turístico con IA**

Fase 1 — Inventario y evaluación:
- Mapeo de todos los datos de viajeros que recopilas, su base legal y sus flujos
- Inventario de sistemas de IA en uso y su clasificación bajo el EU AI Act

Fase 2 — Implementación de medidas:
- Actualización de la política de privacidad para incluir el uso de IA y los derechos de los viajeros
- Implementación de consentimientos granulares para usos opcionales de datos (marketing, perfilado, cookies)
- Medidas de seguridad técnica para los datos más sensibles

Fase 3 — Comunicación a viajeros:
- Avisos de privacidad claros en cada punto de recopilación de datos: web de reservas, check-in, app
- Procedimiento de ejercicio de derechos accesible y con plazos de respuesta garantizados

**Entregables**

Genera para mi negocio turístico:
1. Un mapa de tratamientos de datos de viajeros con la base legal y las medidas de seguridad para cada uno
2. Una checklist de compliance RGPD específica para negocios turísticos
3. Un aviso de privacidad para viajeros actualizado con el uso de IA, listo para adaptar
4. Un procedimiento de atención a solicitudes de derechos ARCO de viajeros
5. Una guía de los sistemas de IA en turismo que requieren EIPD y los pasos para realizarla

El compliance en turismo no es solo evitar multas: es construir la confianza del viajero, que es el activo más valioso de cualquier negocio turístico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Analizar el marco legal del RGPD y el EU AI Act aplicado al sector turístico y diseñar un programa de compliance para negocios de viajes',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al viajero 24/7 con IA: chatbots y asistentes virtuales en turismo',
                'description'      => 'Diseña e implementa un asistente virtual turístico con IA que atienda a viajeros antes, durante y después del viaje, aumentando la satisfacción y reduciendo el coste de soporte.',
                'prompt_content'   => <<<'EOT'
Eres un experto en customer experience turística y diseño de asistentes virtuales con IA para el sector turístico. Tu misión es ayudarme a diseñar e implementar un asistente virtual de viajes que atienda a los viajeros en todos los momentos del journey: desde la inspiración y la reserva hasta la postventa y la fidelización.

**Contexto de mi negocio turístico**

Para comenzar el diseño, cuéntame:
- ¿Qué tipo de negocio turístico tienes? (hotel, aerolínea, agencia de viajes, plataforma de reservas, empresa de experiencias, destino turístico)
- ¿En qué canales interactúas actualmente con tus viajeros? (web, app, WhatsApp, email, teléfono, redes sociales)
- ¿Cuáles son las consultas más frecuentes de los viajeros antes, durante y después del viaje?
- ¿En qué idiomas necesitas atender a tus viajeros?
- ¿Cuál es el volumen de consultas de soporte que recibes por semana?

**Diseño del asistente virtual turístico con IA**

Fase 1 — Definición del rol y la personalidad del asistente:
Un asistente virtual turístico no es solo un bot de FAQ: es la voz de tu marca ante el viajero en los momentos más importantes. Define:
- El nombre y la personalidad del asistente: ¿es formal o cercano? ¿Es experto local o asistente de viaje generalista?
- El tono de comunicación: coherente con el posicionamiento de tu marca turística
- Los idiomas que el asistente debe manejar con fluidez
- Los límites de lo que el asistente puede resolver y cuándo deriva al equipo humano

Fase 2 — Mapeo de los casos de uso por momento del journey:

Antes del viaje (inspiración y planificación):
- Responder preguntas sobre el destino: clima, qué llevar, visa, moneda, costumbres locales
- Ayudar a planificar el itinerario: qué ver, qué hacer, cuánto tiempo dedicar a cada actividad
- Comparar opciones de alojamiento y actividades
- Resolver dudas sobre el proceso de reserva y condiciones de cancelación

Durante el proceso de reserva:
- Guiar al usuario paso a paso por el proceso de reserva
- Resolver dudas sobre disponibilidad, precios y políticas
- Hacer upselling de servicios adicionales de forma natural (upgrade de habitación, traslados, experiencias)
- Recuperar reservas abandonadas: el asistente detecta cuando un usuario abandona el proceso y ofrece ayuda personalizada

Antes del viaje (pre-arrival):
- Enviar información de preparación personalizada según el destino y tipo de viaje
- Recordatorios de documentación necesaria
- Información de acceso y llegada al establecimiento
- Upselling de experiencias y servicios del destino

Durante el viaje (in-stay o in-trip):
- Guía local en tiempo real: restaurantes, transporte, atracciones, horarios
- Gestión de incidencias: el viajero puede reportar un problema y el asistente activa el protocolo de resolución
- Solicitudes de servicio (housekeeping, room service, información de actividades)
- Alertas meteorológicas o de seguridad relevantes para el destino

Después del viaje (post-trip):
- Solicitud de valoración o review en el momento óptimo
- Gestión de reclamaciones post-viaje de forma empática y eficiente
- Programa de fidelización: la IA personaliza la siguiente oferta basándose en el viaje realizado

Fase 3 — Tecnología y canales del asistente turístico:
- WhatsApp Business con IA: el canal más universal para viajeros internacionales, con alta tasa de apertura y respuesta
- Chat en web y app: integrado en el proceso de reserva y en la plataforma de gestión del viaje
- Voz en teléfono: asistente de voz con IA para los viajeros que prefieren llamar, especialmente en situaciones de urgencia o estrés
- Integración con el PMS, el sistema de reservas y el CRM: el asistente accede a la reserva del viajero para dar respuestas personalizadas y no genéricas

Fase 4 — Multilingüismo y sensibilidad cultural:
El sector turístico es global. El asistente debe:
- Detectar automáticamente el idioma del viajero y responder en el mismo idioma
- Adaptar el tono y el contenido a las sensibilidades culturales de cada mercado
- Manejar terminología turística específica de cada destino o producto

Fase 5 — Métricas de éxito del asistente turístico:
- Tasa de resolución autónoma: porcentaje de consultas resueltas sin intervención humana (objetivo: mayor del 65%)
- CSAT del asistente: satisfacción específica con la experiencia del asistente virtual
- Impacto en la reserva: incremento de conversión atribuible al asistente en el proceso de reserva
- Net Promoter Score post-viaje: correlación entre el uso del asistente y el NPS final del viajero

**Entregables**

Genera para mi negocio turístico:
1. Un mapa de casos de uso del asistente virtual turístico con las respuestas tipo para cada uno
2. Un árbol de conversación para los cinco flujos de consulta más frecuentes antes del viaje
3. Un protocolo de gestión de incidencias en destino con los pasos que gestiona el asistente y cuándo escala a humanos
4. Una guía de personalidad y tono del asistente para los tres mercados principales de tu negocio
5. Un plan de implementación de cuatro fases del asistente virtual turístico, desde el piloto hasta el despliegue multicanal completo

El asistente virtual turístico con IA no es un sustituto del servicio humano: es el servicio que nunca cierra, que habla todos los idiomas y que hace que el viajero se sienta acompañado en cada momento de su viaje.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar e implementar un asistente virtual con IA que atienda a viajeros en todos los momentos del journey turístico',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Guías turísticos y consultores de viaje freelance potenciados por IA',
                'description'      => 'Usa la IA para ampliar tu oferta como guía turístico o consultor de viaje freelance: crea experiencias únicas, materiales personalizados y gestiona tu negocio con más eficiencia.',
                'prompt_content'   => <<<'EOT'
Eres un experto en negocios turísticos para profesionales independientes y en el uso de IA para ampliar la oferta de valor de guías turísticos y consultores de viaje freelance. Tu misión es ayudarme a usar la inteligencia artificial para diferenciarse en el mercado, crear experiencias únicas para mis clientes y gestionar mi negocio con más eficiencia como profesional independiente del turismo.

**Contexto de mi actividad freelance turística**

Para personalizar la estrategia, cuéntame:
- ¿Cuál es tu especialidad como guía o consultor de viaje? (turismo cultural, aventura, gastronómico, de lujo, sostenible, turismo accesible, etc.)
- ¿En qué destino o destinos operas principalmente?
- ¿Cuál es tu cliente típico? (familias, viajeros solos, parejas, grupos corporativos, viajeros senior, nómadas digitales)
- ¿Qué servicios ofreces actualmente? (tours guiados, planificación de viajes personalizados, consultoría de ruta, gestión de grupos)
- ¿Cuál es el principal desafío de tu negocio? (captar nuevos clientes, diferenciarte de la competencia, escalar sin perder calidad, gestionar la estacionalidad)

**Cómo la IA transforma el negocio del guía y consultor de viaje freelance**

Área 1 — Diseño de experiencias únicas con IA:
La IA puede ayudarte a crear experiencias turísticas más ricas, personalizadas y memorables:
- Investigación profunda del destino: la IA puede procesar cientos de fuentes (libros de historia, guías locales, artículos académicos, blogs de viajeros) para que puedas ofrecer historias e insights que los guías genéricos no conocen
- Personalización del tour según el cliente: describe el perfil de tu cliente a la IA y ella genera las adaptaciones del recorrido, el nivel de detalle histórico, el ritmo y los puntos de parada más adecuados para ese perfil específico
- Creación de tours temáticos únicos: la IA puede ayudarte a desarrollar experiencias temáticas diferenciadas (gastronomía local secreta, arquitectura modernista oculta, turismo literario, historia oral de los barrios) con el guión completo, las paradas y las historias
- Itinerarios personalizados a medida: cuando un cliente te pide un viaje personalizado, la IA te ayuda a construir el itinerario en minutos, adaptado a sus intereses, presupuesto y tiempo disponible

Área 2 — Materiales para el cliente con IA:
Como freelance turístico, los materiales que entregas al cliente son parte de tu propuesta de valor:
- Guías de viaje personalizadas: la IA genera guías de viaje diseñadas específicamente para el viaje de cada cliente, con información del destino, recomendaciones de restaurantes, consejos prácticos y un itinerario detallado, todo en el idioma del cliente
- Materiales de preparación pre-viaje: email de bienvenida personalizado, lista de qué llevar, información sobre el destino adaptada al tipo de viajero
- Cuaderno de viaje digital: la IA puede generar un cuaderno de viaje personalizado con los highlights del tour que el cliente se lleva como recuerdo
- Contenido post-viaje: la IA ayuda a generar el resumen del viaje o el álbum de fotos con texto descriptivo para que el cliente lo comparta en redes sociales

Área 3 — Marketing y captación de clientes con IA:
- Perfil de LinkedIn y web personal: la IA optimiza tu presencia digital para atraer a los clientes correctos
- Contenido para redes sociales: la IA genera ideas de contenido y capiones para compartir tu expertise del destino en Instagram, TikTok y YouTube, posicionándote como referente
- Reviews y gestión de reputación: la IA puede ayudarte a responder reviews en TripAdvisor, Google y otras plataformas de forma rápida, personal y profesional
- Email marketing: secuencias de emails automatizados con IA para mantener el contacto con clientes anteriores y generar repetición y referidos

Área 4 — Gestión del negocio freelance con IA:
La IA también puede ayudarte con la parte administrativa de tu negocio:
- Presupuestos y propuestas: la IA genera propuestas de tour o de planificación de viaje personalizadas para cada consulta en minutos
- Contratos de servicios turísticos: la IA genera contratos adaptados al tipo de servicio y cliente
- Gestión de pagos y facturación: automatización de recordatorios y seguimiento de pagos
- Planificación de temporada: la IA analiza tu historial de bookings y te sugiere cuándo hacer promociones, cuándo subir precios y cuándo invertir en marketing

Área 5 — Formación continua y actualización del conocimiento con IA:
Como profesional independiente del turismo, estar actualizado es una ventaja competitiva:
- La IA sintetiza las últimas noticias y tendencias del turismo en tu destino o especialidad
- Resúmenes de libros y artículos especializados que amplíen tu conocimiento del destino
- Preparación de temas complejos: cuando un cliente pregunta sobre historia, arte, gastronomía o arquitectura, la IA te ayuda a profundizar en el tema de forma rápida

**Entregables**

Genera para mi práctica de guía o consultor de viaje freelance:
1. Un guión de tour temático de tres horas para tu especialidad y destino, con historias, paradas y puntos de interés seleccionados por la IA
2. Una guía de viaje personalizada tipo de 10-15 páginas para uno de tus clientes modelo
3. Un perfil de LinkedIn optimizado con IA para atraer a tu cliente ideal como guía o consultor de viaje
4. Una propuesta comercial tipo para servicios de planificación de viaje personalizado, con las secciones y el copy base
5. Un plan de contenido mensual para redes sociales con diez ideas de posts que demuestren tu expertise del destino

La IA no reemplaza al guía turístico: lo convierte en el más preparado, el más personalizado y el más eficiente del mercado, liberando tiempo para hacer lo que solo él puede hacer: crear conexiones humanas auténticas entre el viajero y el destino.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Usar IA para ampliar la oferta, crear mejores experiencias y gestionar el negocio freelance de guías turísticos y consultores de viaje',
                'vote_score'       => 41,
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
