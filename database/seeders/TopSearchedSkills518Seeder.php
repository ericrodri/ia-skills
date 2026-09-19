<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills518Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Social listening con IA: monitorización de marca y análisis de conversaciones en tiempo real',
                'description'      => 'Aprende a usar IA para monitorizar lo que se dice de tu marca en redes sociales, analizar el sentimiento de las conversaciones e identificar tendencias emergentes antes que tu competencia.',
                'prompt_content'   => <<<'EOT'
Actúa como un estratega de marketing digital especializado en social listening e inteligencia de marca, con amplia experiencia en el uso de herramientas de monitorización de redes sociales, análisis de sentimiento y detección de tendencias para marcas de consumo y B2B.

objetivo: Diseñar e implementar un sistema de social listening con IA para mi marca que me permita monitorizar conversaciones en tiempo real, analizar el sentimiento del mercado y tomar decisiones de marketing basadas en datos de redes sociales.

Contexto de mi marca:
- Sector y tipo de empresa: [B2B, B2C, sector de actividad]
- Redes sociales prioritarias: [Instagram, X/Twitter, LinkedIn, TikTok, YouTube, foros, etc.]
- Idiomas a monitorizar: [español, inglés, otros]
- Herramientas de social listening disponibles: [Brandwatch, Mention, Sprout Social, Talkwalker, u otras]
- Principal necesidad de inteligencia: [reputación de marca, detección de crisis, análisis de competidores, identificación de influencers, tendencias de producto]

Desarrolla el sistema en los siguientes bloques:

BLOQUE 1 — Configuración del sistema de escucha y palabras clave
Diseña la arquitectura de búsqueda del sistema de social listening: lista de palabras clave primarias (nombre de marca, productos, portavoces), keywords secundarias (categoría de producto, sector, términos de dolor del cliente), y keywords negativas para filtrar el ruido. Explica cómo estructurar las búsquedas booleanas para capturar las conversaciones relevantes sin sobrecargar el sistema con resultados irrelevantes.

BLOQUE 2 — Análisis de sentimiento y clasificación automática con IA
Explica cómo usar IA para clasificar automáticamente las menciones por sentimiento (positivo, negativo, neutro), por tema (producto, servicio, precio, competidor, campaña) y por urgencia (mención de crisis potencial vs. conversación ordinaria). Incluye cómo calibrar el modelo para el lenguaje coloquial, el sarcasmo y los emojis habituales en cada red social.

BLOQUE 3 — Identificación de tendencias emergentes y conversaciones virales
Diseña un proceso para detectar tendencias emergentes en las conversaciones sobre mi sector antes de que sean masivas. Define los umbrales de volumen y velocidad de crecimiento que deben activar una alerta, cómo distinguir una tendencia real de un pico de ruido puntual y cómo convertir esa información en una oportunidad de contenido o campaña.

BLOQUE 4 — Benchmarking de competidores en redes sociales
Crea un framework de análisis de competidores en redes sociales: qué métricas comparar (share of voice, sentimiento medio, temas de conversación dominantes, tiempo de respuesta a clientes, engagement rate), con qué frecuencia generar el informe y cómo presentar los hallazgos al equipo directivo de forma accionable.

BLOQUE 5 — Detección y gestión de crisis de reputación online
Diseña un protocolo de alerta temprana para crisis de reputación en redes: define los indicadores que señalan una crisis emergente (pico de menciones negativas, hashtag adverso en tendencia, amplificación por cuentas de gran alcance), el árbol de decisión para evaluar la gravedad, y el protocolo de respuesta en las primeras 2 horas con roles y mensajes asignados.

BLOQUE 6 — Informes de inteligencia de redes y presentación ejecutiva
Diseña la estructura del informe semanal y mensual de social listening: resumen ejecutivo de 5 líneas, gráfico de evolución de sentimiento, top 5 conversaciones relevantes de la semana, hallazgo de competidor más relevante, recomendación de acción inmediata y métricas de seguimiento respecto al período anterior.

Entrega al final un dashboard de indicadores clave de social listening con los 8 KPIs que debe monitorizar el equipo de marketing cada semana, con benchmarks de referencia del sector.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar un sistema de social listening con IA para monitorizar la reputación de marca en tiempo real',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de herramientas de social listening con IA y APIs de redes sociales',
                'description'      => 'Construye tu propia solución de análisis de redes sociales con IA: integración de APIs, procesamiento de lenguaje natural, análisis de sentimiento y dashboards de datos en tiempo real.',
                'prompt_content'   => <<<'EOT'
Actúa como un ingeniero de datos y desarrollador backend especializado en el procesamiento de datos de redes sociales, con experiencia en la integración de APIs de plataformas sociales, modelos de procesamiento de lenguaje natural (NLP) y arquitecturas de datos en tiempo real para social intelligence.

tarea: Diseñar e implementar una arquitectura técnica para una herramienta de social listening propia que use IA para analizar conversaciones en redes sociales, detectar sentimiento y generar alertas automáticas.

Stack tecnológico preferido:
- Lenguaje backend: [Python, Node.js, u otro]
- Base de datos: [PostgreSQL, MongoDB, Elasticsearch, u otra]
- Infraestructura: [AWS, GCP, Azure, servidor propio]
- APIs de redes sociales disponibles: [X/Twitter API v2, Instagram Graph API, YouTube Data API, Reddit API, etc.]
- Nivel de procesamiento: [batch diario, near real-time, real-time estricto]

Desarrolla la guía técnica en los siguientes módulos:

MÓDULO 1 — Arquitectura del sistema de social listening
Diseña la arquitectura de alto nivel del sistema: capa de ingesta de datos (conectores a APIs de redes sociales), capa de procesamiento y enriquecimiento (NLP, análisis de sentimiento, clasificación de temas), capa de almacenamiento (base de datos analítica y caché), capa de alertas y notificaciones, y capa de visualización (dashboard o API para frontend). Explica las decisiones de diseño clave y los trade-offs entre coste, latencia y complejidad.

MÓDULO 2 — Integración con APIs de redes sociales
Explica cómo conectarse a las APIs más relevantes: X/Twitter API v2 (streaming endpoint para tiempo real, search endpoint para histórico), Instagram Graph API (menciones, hashtags), YouTube Data API (comentarios, transcripciones), y Reddit API (posts y comentarios de subreddits específicos). Para cada API, detalla los límites de tasa, los datos disponibles y cómo manejar la autenticación OAuth 2.0.

MÓDULO 3 — Pipeline de procesamiento de lenguaje natural con IA
Diseña el pipeline de NLP para procesar las menciones en tiempo real: limpieza y normalización del texto, detección de idioma, análisis de sentimiento (modelo preentrenado vs. fine-tuning propio), extracción de entidades nombradas (marcas, personas, productos, ubicaciones), clasificación de temas y detección de intención del usuario. Recomienda librerías y modelos específicos (spaCy, Transformers, BERT, etc.) según el caso de uso.

MÓDULO 4 — Sistema de alertas y detección de anomalías
Implementa un sistema de detección de anomalías que identifique picos inusuales en el volumen de menciones o en el ratio de sentimiento negativo. Explica cómo definir las líneas base de actividad normal, qué algoritmos de detección de anomalías son más adecuados para series temporales de redes sociales (Z-score, ARIMA, Isolation Forest) y cómo generar alertas por email, Slack o webhook.

MÓDULO 5 — Almacenamiento, indexación y consulta eficiente
Diseña el esquema de base de datos para almacenar millones de menciones de forma que las consultas analíticas sean rápidas. Explica cuándo usar PostgreSQL con índices GIN para búsqueda de texto completo, cuándo optar por Elasticsearch para búsquedas complejas y cómo estructurar una arquitectura de datos fría (histórico en S3/objeto) y caliente (últimos 30 días en base de datos operacional).

MÓDULO 6 — API y dashboard de visualización
Diseña la API REST que expone los datos procesados al frontend: endpoints para métricas agregadas, consulta de menciones filtradas, evolución temporal de sentimiento y top temas. Define cómo construir un dashboard de tiempo real con actualizaciones via WebSocket o SSE, qué gráficos son más útiles para analistas de marketing y cómo exportar informes en PDF o CSV.

Entrega un plan de implementación de 3 sprints de 2 semanas cada uno, con las tareas prioritarias de cada sprint y los criterios de aceptación técnicos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir una herramienta propia de social listening con APIs de redes sociales y modelos de NLP',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de dashboards de social media analytics con IA: datos claros para decisiones rápidas',
                'description'      => 'Crea dashboards de análisis de redes sociales visualmente impactantes y fáciles de interpretar, usando IA para seleccionar las métricas correctas y diseñar visualizaciones que cuenten una historia clara.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de experiencia de datos (data experience designer) especializado en la creación de dashboards de social media analytics, con experiencia en visualización de datos, diseño de interfaces para analistas de marketing y comunicación de insights a audiencias no técnicas.

objetivo: Diseñar un sistema de dashboards de redes sociales que transforme datos complejos en visualizaciones claras y accionables para equipos de marketing, comunicación y dirección.

Contexto del proyecto:
- Audiencias del dashboard: [analistas de marketing, directores de comunicación, CEO, clientes externos, etc.]
- Redes sociales a incluir: [Instagram, LinkedIn, X/Twitter, TikTok, YouTube, Facebook]
- Herramienta de visualización disponible: [Looker Studio, Tableau, Power BI, Figma para prototipo, etc.]
- Frecuencia de actualización requerida: [tiempo real, diaria, semanal]
- Nivel de detalle requerido: [ejecutivo de alto nivel, analítico detallado, operativo de comunidad]

Desarrolla el proyecto de diseño en los siguientes bloques:

BLOQUE 1 — Arquitectura de información del sistema de dashboards
Define la jerarquía de dashboards: un dashboard ejecutivo de una sola pantalla con los 5 KPIs más importantes, un dashboard de rendimiento por red social con métricas detalladas de cada plataforma, un dashboard de análisis de contenido (qué tipos de posts funcionan mejor), y un dashboard de escucha social (sentimiento, menciones, share of voice). Para cada nivel, define la audiencia, la frecuencia de consulta y el dispositivo de visualización principal (escritorio, móvil, pantalla de TV).

BLOQUE 2 — Selección y jerarquización de métricas por red social
Define las métricas esenciales para cada red social y explica cómo priorizarlas según el objetivo de negocio. Para Instagram: alcance, impresiones, tasa de engagement, crecimiento de seguidores, rendimiento de stories vs. feed vs. reels. Para LinkedIn: impresiones orgánicas, clics, tasa de conversión a visitas al perfil de empresa, alcance por tipo de contenido. Para X/Twitter: menciones, RT, sentiment score. Explica cómo evitar las métricas de vanidad que no aportan valor real.

BLOQUE 3 — Diseño visual de componentes del dashboard
Diseña los patrones visuales principales del dashboard: tarjetas de KPI con valor actual, variación respecto al período anterior y mini sparkline de tendencia; gráficos de líneas para evolución temporal del engagement; mapas de calor para identificar mejores días y horas de publicación; gráficos de barras horizontales para comparación de rendimiento por tipo de contenido. Define la paleta de colores, la tipografía y las reglas de uso del color para indicar estados positivo, neutro y negativo.

BLOQUE 4 — Narrativa visual y storytelling de datos
Explica cómo diseñar un dashboard que cuente una historia, no solo que muestre números. Define cómo ordenar los elementos para guiar la atención del lector: primero el resumen ejecutivo, luego el contexto, después el detalle. Incluye cómo añadir anotaciones automáticas que destaquen eventos relevantes (lanzamiento de campaña, pico de menciones, cambio de algoritmo) directamente sobre las líneas de tendencia.

BLOQUE 5 — Diseño responsive y accesibilidad
Define cómo adaptar el dashboard para escritorio, tablet y móvil sin perder claridad. Establece las reglas de accesibilidad: contraste mínimo de colores, alternativas textuales para gráficos, modo de alto contraste para daltonismo y tamaño mínimo de texto para pantallas pequeñas. Explica cómo exportar el dashboard como PDF de presentación ejecutiva manteniendo la coherencia visual.

BLOQUE 6 — Interactividad y filtros de exploración de datos
Diseña los filtros y controles de interactividad: selector de rango de fechas con comparativa de período anterior, filtro por red social, filtro por tipo de contenido y filtro por campaña. Explica cómo diseñar los filtros para que sean intuitivos para usuarios no técnicos y cómo gestionar los estados vacíos o de carga de datos para que el dashboard nunca parezca roto.

Entrega un wireframe textual detallado del dashboard ejecutivo principal con la posición exacta de cada elemento, las métricas mostradas y el tipo de gráfico o componente usado para cada una.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar dashboards de social media analytics claros y accionables para equipos de marketing',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'IA para identificar leads y oportunidades de venta en redes sociales',
                'description'      => 'Usa IA y social listening para encontrar clientes potenciales en redes sociales: detecta señales de compra, inicia conversaciones relevantes y convierte la escucha social en pipeline de ventas.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de ventas B2B especializado en social selling y en el uso de inteligencia de redes sociales para la identificación y cualificación de leads, con experiencia en la construcción de pipelines de ventas a partir de señales de intención detectadas en plataformas como LinkedIn, X/Twitter y comunidades online.

tarea: Diseñar un sistema de social selling con IA que me permita identificar prospectos con intención de compra en redes sociales, iniciar conversaciones de valor y convertir la escucha social en oportunidades reales de negocio.

Contexto de ventas:
- Tipo de producto o servicio que vendo: [describe brevemente tu oferta]
- Mercado objetivo: [B2B, B2C, sector, tamaño de empresa, cargo del decisor]
- Ciclo de venta habitual: [corto, medio, largo plazo]
- Redes sociales más relevantes para tu buyer: [LinkedIn, X/Twitter, Reddit, grupos de Facebook, etc.]
- Volumen de leads que necesitas generar mensualmente: [indica el objetivo]

Desarrolla el sistema en los siguientes bloques:

BLOQUE 1 — Identificación de señales de intención de compra en redes
Define las señales digitales que indican que un prospecto está en fase de evaluación o compra: publicaciones sobre problemas que tu producto resuelve, preguntas en grupos y comunidades sobre soluciones como la tuya, menciones de competidores con tono crítico, cambios de cargo o empresa que abren una ventana de oportunidad y participación en eventos o webinars de tu sector. Para cada señal, diseña la búsqueda booleana o el filtro de social listening que la detecta.

BLOQUE 2 — Cualificación automática de leads con IA
Diseña un sistema de scoring de leads sociales que puntúe cada prospecto identificado según: cargo e influencia en la decisión de compra, actividad en redes (frecuencia y tipo de publicaciones), señales de intención detectadas, tamaño y sector de la empresa y nivel de interacción previa con tu contenido. Define los umbrales de puntuación que clasifican a un prospecto como frío, templado o caliente.

BLOQUE 3 — Estrategia de primer contacto social
Para cada nivel de temperatura de prospecto, diseña la secuencia de primer contacto: para prospectos fríos, inicio con interacción de valor en su contenido (comentario relevante, compartir con reflexión); para prospectos templados, mensaje directo personalizado que conecte con una publicación reciente; para prospectos calientes, propuesta directa de conversación con propuesta de valor clara. Genera 3 plantillas de mensaje de primer contacto adaptables para LinkedIn y X/Twitter.

BLOQUE 4 — Construcción de autoridad y atracción de leads inbound
Diseña una estrategia de contenido que posicione al vendedor como referente en el sector y atraiga a los prospectos de forma orgánica: qué tipo de posts publicar en LinkedIn (reflexiones de industria, casos de uso, datos del sector, preguntas que generan debate), con qué frecuencia y cómo usar los comentarios estratégicos en publicaciones de líderes de opinión para ganar visibilidad ante la audiencia objetivo.

BLOQUE 5 — Integración del social selling en el proceso de ventas
Define cómo integrar la información obtenida de redes sociales en el CRM: qué campos capturar del perfil social del prospecto, cómo documentar las interacciones en redes como actividades de ventas y cómo usar esa información en la primera reunión para personalizar la conversación y demostrar que conoces su contexto.

BLOQUE 6 — Métricas de social selling y optimización continua
Establece los KPIs del programa de social selling: número de prospectos identificados semanalmente, tasa de aceptación de conexiones, tasa de respuesta a mensajes directos, tasa de conversión de interacción social a reunión, coste por lead social vs. canales tradicionales y tiempo desde primer contacto social hasta cierre. Define la cadencia de revisión y ajuste de la estrategia.

Entrega un plan de acción de 30 días para un vendedor B2B que empieza a incorporar el social selling en su rutina diaria de prospección, con las actividades específicas de cada semana.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir un sistema de social selling con IA para identificar y cualificar leads en redes sociales',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product analytics en redes sociales con IA: del dato de usuario a la decisión de producto',
                'description'      => 'Usa IA para analizar el comportamiento de usuarios en redes sociales y convertir ese conocimiento en decisiones de producto: qué funcionalidades construir, qué mensajes funcionan y qué segmentos priorizar.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager orientado a datos con experiencia en el uso de analytics de redes sociales para informar decisiones de roadmap de producto, definir mensajes de posicionamiento y priorizar segmentos de usuario en productos digitales y plataformas de consumo.

objetivo: Diseñar un sistema de product analytics basado en datos de redes sociales que me permita tomar mejores decisiones de producto: qué construir, cómo comunicarlo y a quién dirigirme primero.

Contexto del producto:
- Tipo de producto: [app, plataforma SaaS, marketplace, producto de consumo, etc.]
- Fase actual: [pre-lanzamiento, crecimiento, madurez, expansión]
- Principal hipótesis de producto actual: [qué estás intentando validar o mejorar]
- Redes sociales donde está tu audiencia: [LinkedIn, Reddit, X/Twitter, TikTok, comunidades especializadas]
- Mayor duda de producto ahora mismo: [qué funcionalidad construir, a qué segmento priorizar, cómo mejorar la retención, etc.]

Desarrolla el framework en los siguientes módulos:

MÓDULO 1 — Escucha de usuario en redes para descubrimiento de producto
Diseña un proceso de descubrimiento continuo basado en social listening: cómo monitorizar conversaciones sobre el problema que resuelve mi producto en Reddit, grupos de LinkedIn y comunidades especializadas, cómo identificar el lenguaje exacto que usan los usuarios para describir su frustración (clave para el copywriting del producto) y cómo convertir esas conversaciones en insights de producto estructurados mediante síntesis con IA.

MÓDULO 2 — Análisis de feedback de usuario en redes y reseñas
Explica cómo analizar de forma sistemática el feedback de usuarios en redes sociales, reseñas de app stores y comentarios en plataformas de review (Product Hunt, G2, Capterra): clasificación automática por tema (UX, funcionalidades, precio, soporte, rendimiento), extracción de los patrones de queja más frecuentes, identificación de funcionalidades más solicitadas y detección de casos de uso no anticipados por el equipo de producto.

MÓDULO 3 — Segmentación de usuario basada en señales sociales
Define cómo usar datos de redes sociales para identificar y caracterizar los segmentos de usuario de mayor valor: qué comunidades frecuentan, qué líderes de opinión siguen, qué contenido consumen, qué herramientas mencionan y qué vocabulario usan para hablar de sus problemas. Explica cómo usar estos perfiles para personalizar la comunicación de producto y priorizar el roadmap según el segmento de mayor potencial de adopción.

MÓDULO 4 — Validación de hipótesis de producto con datos sociales
Diseña un proceso para validar hipótesis de producto antes de construir: cómo usar búsquedas en redes para estimar el tamaño del mercado interesado en una funcionalidad, cómo hacer encuestas rápidas en LinkedIn o X/Twitter, cómo analizar las reacciones de la comunidad ante anuncios de competidores que hayan lanzado funcionalidades similares y cómo interpretar el volumen de búsquedas de un término para estimar la demanda real.

MÓDULO 5 — Competitive intelligence de producto en redes
Crea un framework de inteligencia competitiva basado en redes sociales: cómo monitorizar los lanzamientos de funcionalidades de competidores, cómo analizar el sentimiento de sus usuarios ante cada actualización, cómo identificar las quejas más frecuentes sobre productos competidores (oportunidades de diferenciación) y cómo detectar startups emergentes en tu espacio antes de que crezcan.

MÓDULO 6 — Integración de insights sociales en el proceso de producto
Define cómo incorporar los insights de redes sociales en las reuniones de planificación de producto: qué formato usar para presentar los hallazgos al equipo (resumen semanal de voz del cliente, informe mensual de inteligencia competitiva), cómo ponderar los datos sociales frente a los datos de producto internos (analytics, NPS, churn) y cómo evitar que el ruido de redes sesgue las decisiones estratégicas.

Entrega una plantilla de informe mensual de product intelligence basada en redes sociales que pueda usar el equipo de producto para sus sesiones de planificación de roadmap.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Usar datos de redes sociales con IA para informar decisiones de roadmap y posicionamiento de producto',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Employer branding y monitorización de reputación en redes sociales con IA',
                'description'      => 'Gestiona la reputación de tu empresa como empleadora en redes sociales con IA: monitoriza lo que dicen los empleados y candidatos, potencia tu marca empleadora y atrae talento de forma orgánica.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de recursos humanos especializado en employer branding y gestión de la reputación corporativa como empleadora, con experiencia en el uso de social listening para monitorizar la percepción de la empresa en plataformas de empleo, redes profesionales y redes sociales generales.

tarea: Diseñar una estrategia de employer branding digital con IA que me permita monitorizar la reputación de mi empresa como empleadora, mejorar la percepción de candidatos y empleados, y atraer talento de forma orgánica a través de redes sociales.

Contexto de la empresa:
- Sector y tamaño de la empresa: [indica el sector y el número de empleados]
- Principales plataformas de employer branding: [LinkedIn, Glassdoor, Indeed, Instagram, Infojobs, etc.]
- Situación actual de la reputación: [sin datos, reseñas mixtas, mayoritariamente positiva o negativa]
- Perfiles de talento que necesito atraer: [perfiles técnicos, comerciales, creativos, directivos, etc.]
- Principal reto de atracción de talento: [poca notoriedad como empleadora, competencia intensa, salarios no competitivos, etc.]

Desarrolla la estrategia en los siguientes bloques:

BLOQUE 1 — Auditoría de reputación digital como empleadora
Diseña un proceso de auditoría completa de la reputación de mi empresa como empleadora: cómo recopilar y analizar las reseñas en Glassdoor e Indeed (temas más frecuentes, sentimiento medio, evolución temporal), cómo monitorizar conversaciones en LinkedIn sobre la empresa como lugar de trabajo, cómo detectar publicaciones de ex-empleados en redes y cómo analizar la percepción de candidatos que no recibieron oferta.

BLOQUE 2 — Definición de la propuesta de valor al empleado (EVP)
Guíame para definir la Employee Value Proposition de mi empresa basándome en los datos de social listening y en entrevistas internas: qué valoran realmente los empleados actuales, qué diferencia a mi empresa de la competencia como lugar de trabajo, cómo formular el EVP de forma auténtica y creíble, y cómo adaptarlo para distintos perfiles de talento.

BLOQUE 3 — Estrategia de contenido de employer branding en redes
Diseña un plan de contenido mensual de employer branding para LinkedIn e Instagram: tipos de publicaciones (día a día en la oficina, presentación de empleados, proyectos del equipo, cultura de empresa, beneficios, eventos internos), formato recomendado para cada tipo, quién debe ser el protagonista (empleados reales vs. portavoces de RRHH) y cómo incentivar a los empleados para que sean embajadores de la marca en sus redes personales.

BLOQUE 4 — Gestión de reseñas negativas en plataformas de empleo
Diseña un protocolo para responder a reseñas negativas en Glassdoor e Indeed de forma constructiva: cómo reconocer el feedback sin defensividad, qué tono usar, cómo mostrar que se han tomado medidas concretas ante las críticas recurrentes y cómo transformar una reseña negativa en una demostración de cultura de mejora continua. Genera 5 respuestas modelo para distintos tipos de críticas (gestión, conciliación, salarios, crecimiento, cultura).

BLOQUE 5 — Programa de embajadores de marca entre empleados
Diseña un programa de employee advocacy para que los empleados más comprometidos difundan la marca empleadora en sus redes: cómo seleccionar a los embajadores, qué tipo de contenido compartir, cómo facilitarles materiales listos para publicar y cómo reconocer su contribución. Incluye una guía de buenas prácticas para empleados en redes sociales que proteja a la empresa sin coartar la autenticidad.

BLOQUE 6 — Métricas de employer branding y atracción de talento
Establece los KPIs que debo monitorizar trimestralmente: puntuación media en plataformas de empleo, ratio de candidaturas espontáneas, tasa de aceptación de ofertas de empleo, tiempo medio de cobertura de vacantes, coste por contratación, Net Promoter Score de empleados (eNPS) y tasa de retención a 12 meses. Define cómo relacionar estos indicadores con las acciones de employer branding.

Entrega un plan de acción de 6 meses con los hitos más importantes para transformar la reputación digital de mi empresa como empleadora.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir y gestionar el employer branding digital con social listening e IA',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de sentimiento financiero en redes sociales con IA para decisiones de inversión',
                'description'      => 'Aplica IA al análisis del sentimiento financiero en redes sociales: monitoriza la narrativa de mercado, detecta señales de riesgo reputacional y usa la inteligencia social para informar análisis de inversión.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista financiero especializado en inteligencia de mercados y análisis de sentimiento, con experiencia en el uso de datos de redes sociales, foros financieros y plataformas de noticias para detectar tendencias de mercado, evaluar el riesgo reputacional de activos y complementar el análisis fundamental con señales de sentimiento social.

objetivo: Desarrollar un framework de análisis de sentimiento financiero en redes sociales que me permita detectar narrativas de mercado emergentes, evaluar el riesgo reputacional de empresas en cartera y usar señales sociales como complemento al análisis cuantitativo.

Contexto del análisis:
- Tipo de activos seguidos: [acciones individuales, sectores específicos, criptomonedas, bonos corporativos]
- Fuentes de información habituales: [Bloomberg, Reuters, informes de analistas, foros como Reddit/r/investing, X/Twitter financiero]
- Objetivo principal del análisis de sentimiento: [detección de riesgo, identificación de oportunidades, gestión de cartera, comunicación a inversores]
- Horizonte temporal de inversión: [corto plazo trading, medio plazo, largo plazo value investing]

Desarrolla el framework en los siguientes bloques:

BLOQUE 1 — Fuentes de señales de sentimiento financiero en redes
Identifica y evalúa las mejores fuentes de señales de sentimiento para el análisis financiero: X/Twitter financiero (cuentas de analistas, traders, directivos), Reddit (r/investing, r/wallstreetbets, foros sectoriales), StockTwits, Seeking Alpha, YouTube financiero y Telegram de inversores. Para cada fuente, explica el tipo de señal que produce, su fiabilidad histórica y cómo filtrar el ruido de la manipulación deliberada (pump and dump, desinformación coordinada).

BLOQUE 2 — Análisis de sentimiento narrativo con IA
Explica cómo usar IA para analizar las narrativas de mercado en redes sociales: identificación de los temas dominantes que rodean a un activo (crecimiento, competencia, regulación, gestión), detección de cambios en el tono narrativo antes de movimientos de precio significativos, análisis de la coherencia entre el sentimiento en redes y los fundamentales del negocio y detección de narrativas coordinadas vs. orgánicas.

BLOQUE 3 — Monitorización de riesgo reputacional corporativo
Diseña un sistema de monitorización de riesgo reputacional para empresas en cartera: alertas ante escándalos de governance, controversias ESG, conflictos laborales con viralización en redes, demandas de consumidores o acusaciones de fraude que emerjan en redes antes de llegar a los medios tradicionales. Define los umbrales de alerta y el protocolo de revisión de la posición cuando se activa una alerta.

BLOQUE 4 — Correlación entre sentimiento social y performance del activo
Explica cómo analizar la correlación histórica entre el sentimiento en redes y la evolución del precio de un activo: cómo definir el índice de sentimiento, cómo medir la correlación con lag temporal (el sentimiento predice el precio con X días de adelanto), qué casos de uso son más robustos (volatilidad implícita, eventos de corto plazo, momentum) y cuáles son las trampas estadísticas más frecuentes en este tipo de análisis.

BLOQUE 5 — Integración del sentimiento social en el proceso de inversión
Define cómo incorporar las señales de sentimiento social en tu proceso de toma de decisiones: como factor de confirmación de una tesis de inversión fundamentada, como señal de alerta para revisar una posición existente, como filtro para identificar activos con momentum narrativo positivo y cómo documentar el análisis de sentimiento en los memorandos de inversión para el comité.

BLOQUE 6 — Herramientas y automatización del análisis de sentimiento
Evalúa las herramientas disponibles para el análisis de sentimiento financiero: Bloomberg Terminal (Social Velocity), Refinitiv Eikon, plataformas especializadas como Accern, Quiver Quantitative o alternativas open source con Python (VADER, FinBERT). Define una arquitectura mínima viable de análisis de sentimiento para un analista individual con presupuesto limitado.

Entrega una plantilla de informe de análisis de sentimiento para un activo concreto, con la estructura, las fuentes a consultar y los criterios de interpretación de las señales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Analizar el sentimiento financiero en redes sociales con IA para complementar el análisis de inversión',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Monitorización de riesgos legales y reputacionales en redes sociales con IA',
                'description'      => 'Usa IA para detectar riesgos legales emergentes en redes sociales: menciones que puedan derivar en reclamaciones, violaciones de propiedad intelectual, difamación y crisis de reputación con impacto jurídico.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho digital y gestión de riesgos reputacionales con experiencia en la identificación y gestión de crisis legales originadas en redes sociales, incluyendo reclamaciones de consumidores, violaciones de propiedad intelectual, difamación online y cumplimiento de normativas de comunicaciones comerciales.

tarea: Diseñar un sistema de monitorización legal de redes sociales con IA que detecte riesgos jurídicos emergentes antes de que escalen, y un protocolo de respuesta que minimice la exposición legal de mi organización.

Contexto de la organización:
- Tipo de empresa y sector: [startup tecnológica, empresa de consumo, institución financiera, etc.]
- Principales riesgos legales de tu sector en redes: [reclamaciones de consumidores, violaciones de IP, publicidad engañosa, comentarios de empleados, etc.]
- Presencia en redes de la empresa: [canales propios y menciones orgánicas habituales]
- Recursos legales disponibles: [departamento legal interno, asesoría externa, sin recursos específicos]
- Jurisdicción principal: [España, UE, internacional]

Desarrolla el sistema en los siguientes módulos:

MÓDULO 1 — Tipología de riesgos legales en redes sociales
Clasifica y explica los principales tipos de riesgo legal que pueden originarse en redes sociales para mi tipo de empresa: reclamaciones masivas de consumidores amplificadas en redes, acusaciones de publicidad engañosa o comparativa ilícita, publicación de información confidencial o secretos empresariales por parte de empleados o ex-empleados, violaciones de derechos de imagen o propiedad intelectual en contenido publicado por la empresa o por usuarios, y acusaciones de discriminación o conducta inapropiada contra directivos de la empresa.

MÓDULO 2 — Configuración del sistema de alerta legal en redes
Diseña el sistema de monitorización legal: palabras clave y combinaciones que deben activar alertas de riesgo jurídico (nombre de la empresa + términos de reclamación, quejas sobre productos con terminología de responsabilidad, menciones de demanda o denuncia), criterios de priorización de alertas según gravedad potencial y protocolo de escalado desde el equipo de comunidad al departamento legal.

MÓDULO 3 — Protocolo de evaluación de riesgo ante una alerta
Define el proceso de evaluación jurídica ante una alerta en redes: quién debe revisar la alerta en las primeras dos horas, qué criterios determinan si una publicación tiene potencial de escalar a reclamación formal (volumen de amplificación, credibilidad de la fuente, base fáctica de la acusación, capacidad de organización de los afectados), y qué acciones inmediatas están permitidas y cuáles deben evitarse para no agravar la situación.

MÓDULO 4 — Gestión legal de contenido problemático publicado por terceros
Explica los mecanismos legales disponibles para gestionar contenido problemático publicado por terceros en redes: solicitudes de retirada a la plataforma (notice and takedown bajo la DSA en la UE), acciones por difamación o calumnia, solicitudes de identificación del autor anónimo y procedimientos de preservación de evidencia digital para una eventual acción judicial. Define cuándo cada mecanismo es adecuado y cuál es el coste-beneficio de cada opción.

MÓDULO 5 — Compliance de comunicaciones en redes sociales
Diseña una guía de compliance para el equipo de marketing y comunicación que prevenga los riesgos legales más frecuentes en las publicaciones de la empresa: requisitos de identificación de publicidad (influencer marketing, publicaciones patrocinadas), afirmaciones sobre productos que pueden constituir publicidad engañosa, uso de música, imágenes y vídeos con derechos de autor, menciones de testimonios y casos de éxito de clientes y comunicaciones durante períodos de silencio bursátil para empresas cotizadas.

MÓDULO 6 — Plan de comunicación de crisis con perspectiva legal
Diseña un protocolo de comunicación de crisis en redes sociales que equilibre la gestión de reputación con la protección legal: qué decir, qué no decir y cuándo hablar para no crear nuevas exposiciones jurídicas. Incluye las situaciones en que el silencio puede ser la mejor estrategia, cuándo una disculpa pública puede agravar la responsabilidad civil y cómo coordinar la respuesta pública con la estrategia legal paralela.

Entrega un checklist de riesgo legal de redes sociales que el equipo de marketing pueda consultar antes de publicar cualquier contenido sensible.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Detectar y gestionar riesgos legales originados en redes sociales con monitorización por IA',
                'vote_score'       => 26,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'IA para detectar y gestionar crisis de atención al cliente en redes sociales',
                'description'      => 'Diseña un sistema de atención al cliente en redes sociales con IA que detecte quejas virales a tiempo, responda con rapidez y convierta las crisis en oportunidades de fidelización.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de atención al cliente digital especializado en la gestión de quejas en redes sociales, con experiencia en la implantación de sistemas de social customer care, protocolos de gestión de crisis de cliente y uso de IA para la clasificación y priorización de menciones en plataformas de alto volumen.

objetivo: Diseñar un sistema completo de atención al cliente en redes sociales con IA que me permita detectar quejas antes de que se viralicen, responder con la velocidad y el tono adecuados y medir el impacto de la atención en la satisfacción y fidelización de los clientes.

Contexto del negocio:
- Tipo de empresa y sector: [ecommerce, servicios, telecomunicaciones, banca, etc.]
- Volumen de menciones en redes: [estimación diaria o mensual]
- Canales de redes sociales activos: [X/Twitter, Instagram, Facebook, LinkedIn, TikTok]
- Equipo de atención disponible: [número de personas, horario de cobertura]
- Mayor reto de atención en redes: [tiempo de respuesta, tono inconsistente, quejas virales, falta de resolución en primera respuesta]

Desarrolla el sistema en los siguientes bloques:

BLOQUE 1 — Sistema de detección y clasificación de quejas con IA
Diseña el sistema de monitorización de menciones en redes que clasifique automáticamente cada interacción por: tipo (queja, consulta, elogio, sugerencia, mención neutral), urgencia (crisis potencial, queja urgente, queja estándar, consulta informativa), canal y visibilidad (alcance de la cuenta que publica, potencial viral del contenido) y tema del problema (producto, entrega, pago, atención recibida, etc.). Define los SLA de respuesta para cada combinación de tipo y urgencia.

BLOQUE 2 — Protocolo de detección temprana de crisis viral
Define los indicadores que señalan que una queja individual puede convertirse en una crisis viral: número de respuestas o retweets en las primeras dos horas, amplificación por cuentas con más de 10.000 seguidores, aparición de un hashtag adverso en tendencia local y cobertura por parte de medios o influencers. Diseña el árbol de decisión de escalado y los roles responsables de activar el protocolo de crisis.

BLOQUE 3 — Generación de respuestas con IA manteniendo el tono de marca
Explica cómo usar IA para generar borradores de respuesta personalizados que mantengan el tono de voz de la marca: empático pero resolutivo, sin admisiones de responsabilidad innecesarias, con llamada a la acción clara (DM, formulario, teléfono). Genera 5 respuestas modelo para los tipos de queja más frecuentes en mi sector, adaptadas para publicación pública en redes y para seguimiento por mensaje privado.

BLOQUE 4 — Gestión de clientes insatisfechos en redes y recuperación
Diseña un protocolo de recuperación de clientes que han tenido una experiencia negativa y la han expresado en redes: cómo pasar de la respuesta pública al canal privado, qué ofrecer como resolución según la gravedad del problema, cuándo y cómo hacer un gesto de buena voluntad que convierta al cliente enfadado en embajador de la marca, y qué documentar para evitar que el mismo problema se repita.

BLOQUE 5 — Formación del equipo de social customer care
Diseña un programa de formación para el equipo de atención en redes sociales: cómo interpretar el contexto emocional de una queja en redes, cuándo actuar y cuándo esperar, cómo gestionar comentarios agresivos o desproporcionados sin escalar el conflicto, cómo coordinar con otros departamentos (logística, legal, producto) y cómo mantener la calidad de respuesta cuando el volumen es alto.

BLOQUE 6 — Métricas de social customer care y mejora continua
Establece los KPIs del sistema de atención en redes: tiempo medio de primera respuesta por canal, tasa de resolución en primera respuesta, evolución del sentimiento de las menciones después de la interacción con el equipo de atención, Net Promoter Score de clientes atendidos en redes vs. canales tradicionales y número de crisis virales evitadas por intervención temprana.

Entrega un guion de formación de una hora para el equipo de social customer care con los casos prácticos más frecuentes de tu sector.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestionar quejas y crisis de atención al cliente en redes sociales con IA y protocolos de respuesta rápida',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Auditoría de presencia digital y social listening freelance con IA para empresas',
                'description'      => 'Guía para freelancers que ofrecen servicios de auditoría de redes sociales y social listening: metodología, entregables, precios y captación de clientes en el mercado B2B.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de marketing digital freelance especializado en auditorías de presencia digital y servicios de social listening para empresas, con experiencia en la estructuración de propuestas de consultoría, la entrega de informes de alto valor y la captación de clientes B2B en sectores como retail, banca, salud, tecnología y productos de consumo.

tarea: Ayudarme a estructurar y lanzar un servicio freelance de auditoría de presencia digital y social listening para empresas medianas y grandes, con una metodología clara, entregables diferenciadores y una estrategia de captación de clientes efectiva.

Mi perfil profesional:
- Experiencia en marketing digital y redes sociales: [describe tus competencias actuales]
- Herramientas de social listening que dominas: [Brandwatch, Mention, Sprout Social, Talkwalker, Pulsar, otras]
- Experiencia previa con clientes B2B: [si tienes casos de éxito, menciónalos brevemente]
- Tipo de empresa cliente objetivo: [sector, tamaño, cargo del decisor de compra]
- Tarifa actual o deseada: [por proyecto, por hora o retainer mensual]

Desarrolla el plan en los siguientes bloques:

BLOQUE 1 — Diseño de la propuesta de servicio de auditoría digital
Diseña la metodología de auditoría de presencia digital en 5 fases: análisis inicial de la presencia en redes (canales activos, métricas de base, tono y frecuencia de publicación), análisis de sentimiento y reputación online (reseñas, menciones espontáneas, share of voice), benchmarking de competidores, identificación de oportunidades de mejora y plan de acción priorizado. Para cada fase, define los entregables, el tiempo estimado y el valor que aporta al cliente.

BLOQUE 2 — Catálogo de servicios de social listening para empresas
Crea un catálogo de servicios diferenciados en tres niveles de inversión: servicio básico (auditoría puntual de reputación online, informe de una sola vez), servicio avanzado (monitorización mensual con informe y alertas de crisis) y servicio premium (social intelligence completo con competitive intelligence, análisis de tendencias del sector y acceso a dashboard en tiempo real). Para cada nivel, define precio orientativo, entregables y perfil de cliente ideal.

BLOQUE 3 — Metodología de entrega de informes de alto valor
Diseña la estructura del informe de auditoría que entrego a los clientes: resumen ejecutivo de una página con los 5 hallazgos más relevantes, análisis detallado de reputación por plataforma, análisis de competidores con visualizaciones comparativas, identificación de 3 oportunidades de mejora prioritarias y plan de acción con hoja de ruta trimestral. Explica cómo presentar los datos de forma que sean comprensibles para directivos no especializados en digital.

BLOQUE 4 — Estrategia de captación de clientes B2B
Diseña una estrategia de captación de los primeros 5 clientes empresariales: cómo posicionar el servicio en LinkedIn como herramienta estratégica de gestión del riesgo reputacional (no solo como marketing), qué sectores tienen mayor disposición a pagar por este tipo de servicios, cómo usar casos de éxito anonimizados de proyectos anteriores para generar confianza y cómo llegar a directores de marketing, directores de comunicación y directores de atención al cliente que son los compradores habituales de este tipo de servicio.

BLOQUE 5 — Herramientas y stack tecnológico del consultor freelance
Evalúa las herramientas de social listening más adecuadas para un freelance en función del presupuesto: opciones gratuitas y de bajo coste para empezar (Google Alerts, Mention gratuito, Talkwalker Free), opciones de gama media para proyectos de clientes pequeños y medianos, y cómo acceder a herramientas enterprise de forma temporal para proyectos grandes sin un contrato anual. Incluye herramientas complementarias para visualización de datos y entrega de informes.

BLOQUE 6 — Precios, contratos y gestión del cliente
Define la estructura de precios para cada tipo de servicio: cómo cobrar la auditoría puntual (precio fijo por proyecto), cómo estructurar el retainer mensual (qué incluir y qué queda fuera del alcance), cómo gestionar las revisiones del alcance y cómo protegerte ante clientes que amplían el trabajo sin ajustar el presupuesto. Genera una cláusula de alcance tipo que puedas incluir en tus contratos de consultoría.

Entrega un kit de inicio para el primer mes de actividad como consultor freelance de social listening, con las 10 acciones semanales más importantes para conseguir tu primer cliente pagador.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Lanzar servicios freelance de auditoría digital y social listening para empresas con IA',
                'vote_score'       => 34,
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
