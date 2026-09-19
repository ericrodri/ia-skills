<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills477Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Análisis competitivo automatizado con IA para marketing',
                'description'       => 'Diseña un sistema de inteligencia competitiva que monitorice automáticamente a tus competidores: precios, mensajes, campañas, presencia en medios y cambios de estrategia en tiempo real.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en inteligencia competitiva y estrategia de marketing digital. Tu encargo es ayudarme a construir un sistema automatizado de análisis de la competencia que me proporcione ventaja estratégica continua, usando herramientas de IA para procesar y sintetizar grandes volúmenes de información sobre mis competidores.

**Contexto del análisis:**
[SECTOR, TUS COMPETIDORES DIRECTOS (3-5 nombres), TU POSICIÓN ACTUAL EN EL MERCADO, QUÉ DECISIONES ESTRATÉGICAS NECESITA INFORMAR ESTE ANÁLISIS]

**Bloque 1 — Mapa de inteligencia competitiva**

Define qué información necesitas recopilar sobre cada competidor:

1. **Dimensiones de análisis**: Organiza el monitoreo en cinco categorías:
   - Posicionamiento de producto: propuesta de valor, audiencias objetivo, diferenciadores comunicados, cambios de mensaje en los últimos seis meses.
   - Estrategia de precios: modelos de pricing, promociones activas, cambios de precio, opciones de pago.
   - Marketing y contenido: canales de adquisición, tipo de contenido, frecuencia de publicación, campañas de pago activas, palabras clave que pagan.
   - Producto y tecnología: nuevas funcionalidades anunciadas, actualizaciones, tecnologías usadas, integraciones.
   - Reputación y clientes: valoraciones en G2, Capterra, Google; menciones en medios; opiniones de empleados en Glassdoor.

2. **Fuentes de datos por dimensión**: Para cada dimensión, identifica las fuentes de datos accesibles públicamente y las herramientas que facilitan su extracción y análisis.

3. **Frecuencia de actualización óptima**: No toda la información cambia a la misma velocidad. Define qué monitorizar en tiempo real, qué semanalmente y qué mensualmente.

**Bloque 2 — Análisis de mensajes y posicionamiento**

Profundiza en el análisis de la comunicación de los competidores:

- **Análisis de páginas web y landing pages**: Examina el copy de la home, la página de precios y las páginas de producto de cada competidor. Identifica: propuesta de valor principal, palabras clave usadas repetidamente, beneficios enfatizados vs. funcionalidades técnicas, tono y personalidad de marca.

- **Análisis de anuncios activos**: Usa herramientas como Meta Ad Library, Google Ads Transparency y LinkedIn Ad Library para ver los anuncios activos de los competidores. Para cada anuncio encontrado, extrae: audiencia objetivo inferida, mensaje principal, oferta o gancho, llamada a la acción y duración estimada (señal de que funciona).

- **Análisis de contenido en redes sociales**: En los últimos 30 días, ¿qué tipo de contenido ha publicado cada competidor en LinkedIn, Instagram, Twitter/X y YouTube? ¿Qué contenido ha generado más engagement? ¿Qué temas evitan sistemáticamente?

- **Síntesis de posicionamiento**: Con todos estos datos, elabora un mapa de posicionamiento competitivo en dos ejes relevantes para mi sector. Identifica los espacios de posicionamiento no ocupados donde podría haber una oportunidad de diferenciación.

**Bloque 3 — Análisis de reseñas y voz del cliente**

Las reseñas de los competidores son una mina de insights:

- **Extracción de insights de reseñas**: Analiza las 50 reseñas más recientes de cada competidor en G2, Capterra o Trustpilot. Identifica: los tres elogios más frecuentes (señalan fortalezas que valoran los clientes), las tres críticas más frecuentes (señalan oportunidades para ti), y las características más mencionadas como razón de elección o abandono.

- **Análisis de sentimiento por funcionalidad**: ¿Qué funcionalidades específicas del competidor reciben críticas negativas? Estas son tus oportunidades de diferenciación inmediata.

- **Perfil del cliente insatisfecho del competidor**: ¿Quién son los clientes que se quejan más del competidor? ¿Son tu público objetivo? ¿Qué los haría cambiar de proveedor?

**Bloque 4 — Informe de inteligencia competitiva mensual**

Define la estructura del informe mensual para la dirección:

- Resumen ejecutivo (una página): cambios más relevantes del mes, amenazas detectadas y oportunidades identificadas.
- Semáforo de competidores: verde (sin cambios relevantes), amarillo (movimientos a vigilar), rojo (acción recomendada).
- Recomendaciones estratégicas: tres acciones concretas derivadas del análisis del mes, con responsable y plazo.
- Radar de tendencias del sector: ¿qué está pasando más allá de los competidores directos que puede afectar al mercado en los próximos tres a seis meses?

Proporciona una plantilla del informe mensual lista para completar y el prompt de síntesis que puedo usar con IA para generar el resumen ejecutivo a partir de los datos recopilados.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Construir un sistema automatizado de inteligencia competitiva que monitorice precios, mensajes, campañas y reputación de los competidores con IA.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Scraping inteligente con IA para análisis de mercado',
                'description'       => 'Diseña e implementa pipelines de extracción de datos de mercado usando web scraping ético, procesamiento con LLMs y almacenamiento estructurado para análisis competitivo automatizado.',
                'prompt_content'    => <<<'EOT'
Eres un ingeniero de datos especializado en extracción, procesamiento y análisis de datos de mercado usando técnicas de web scraping avanzado e inteligencia artificial. Tu encargo es guiarme en el diseño e implementación de un sistema de recopilación de datos de mercado que combine scraping ético, enriquecimiento con LLMs y generación de insights automatizados.

**Objetivo del sistema:**
[TIPO DE DATOS A RECOPILAR: precios de competidores, menciones en medios, datos de empleo, registros mercantiles, tendencias de búsqueda, valoraciones de productos]
[FUENTES OBJETIVO: sitios web públicos, APIs públicas, fuentes de datos abiertas]
[FRECUENCIA DE ACTUALIZACIÓN Y VOLUMEN ESTIMADO]

**Bloque 1 — Arquitectura del pipeline de datos**

Diseña la arquitectura completa del sistema:

1. **Capa de extracción**: Compara las opciones técnicas para el scraping:
   - Scrapy con middlewares personalizados: ideal para scraping masivo y configurable.
   - Playwright o Puppeteer: para sitios con JavaScript pesado que requieren renderizado de navegador.
   - APIs públicas y RSS: la fuente más estable y ética cuando están disponibles.
   - Servicios gestionados de scraping (Apify, Bright Data, ScrapingBee): cuando la infraestructura propia es inviable.
   Para cada opción, indica casos de uso óptimos, coste estimado a escala y limitaciones técnicas.

2. **Gestión de rate limiting y respeto de robots.txt**: Define las reglas de scraping ético: cómo leer e interpretar robots.txt, cómo implementar delays adaptativos, cómo rotar proxies sin violar términos de servicio y cómo identificarse correctamente en el user agent.

3. **Capa de almacenamiento**: ¿Dónde y cómo almacenar los datos brutos, los datos procesados y los insights generados? Define el esquema de datos para cada tipo de fuente, la estrategia de deduplicación y el modelo de versionado para datos históricos.

**Bloque 2 — Enriquecimiento con LLMs**

Los LLMs transforman datos no estructurados en inteligencia estructurada:

- **Extracción de entidades y relaciones**: Usa Claude o GPT-4 para extraer de textos no estructurados (artículos, reseñas, descripciones de productos) información estructurada: precios, características, empresas mencionadas, fechas, valoraciones.

- **Clasificación y categorización**: ¿Cómo clasificar automáticamente miles de menciones en categorías relevantes para el análisis? Define el prompt de clasificación, el esquema de categorías y el proceso de validación de la precisión.

- **Resumen y síntesis**: Para fuentes de texto largo (informes, artículos de prensa, threads de redes sociales), ¿cómo generar resúmenes estructurados que sean comparables entre sí? Define la estructura del resumen y el prompt de síntesis.

- **Detección de cambios relevantes**: ¿Cómo comparar el estado actual de una página web con el estado anterior para detectar cambios significativos? Define el algoritmo de detección y el prompt que evalúa si el cambio es relevante para el análisis.

**Bloque 3 — Código de implementación**

Proporciona código de referencia para los componentes críticos:

- **Spider de Scrapy con middleware de rate limiting**: Estructura de una araña para extraer datos de precios de un ecommerce, con manejo de paginación, extracción de datos con XPath/CSS selectors y exportación a JSON estructurado.

- **Pipeline de procesamiento con LLM**: Función en Python que toma un lote de textos scrapeados, los envía a la API de Claude para extracción de entidades, valida el formato JSON de respuesta y almacena el resultado en base de datos.

- **Sistema de alertas por cambio**: Script que compara la versión actual de una página con la última almacenada, calcula la similitud y dispara una notificación si la diferencia supera un umbral definido.

- **Generador de informe semanal**: Función que agrega los datos de la semana, solicita a Claude un análisis de tendencias y cambios relevantes, y formatea el resultado como un informe Markdown o HTML.

**Bloque 4 — Consideraciones legales y éticas**

El scraping tiene implicaciones legales que debes conocer:

- ¿Cuándo el scraping es legal y cuándo infringe los términos de servicio o la ley? Resume los principios clave y los casos de jurisprudencia relevantes (hiQ vs. LinkedIn, etc.).
- ¿Cómo manejar datos personales que puedas extraer accidentalmente? Principio de minimización de datos y eliminación automatizada.
- ¿Qué cláusulas incluir en los contratos con clientes que soliciten sistemas de scraping? Límites de uso y responsabilidades.
- Alternativas legales al scraping cuando no está permitido: APIs de pago, acuerdos de datos, proveedores de datos estructurados.

Proporciona el repositorio de código con estructura de proyecto completa para un sistema de scraping de inteligencia competitiva de nivel producción.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 70,
                'use_case'          => 'Diseñar e implementar un pipeline de scraping ético con procesamiento LLM para análisis de mercado y seguimiento automatizado de competidores.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Visualización de datos de mercado e inteligencia competitiva con IA',
                'description'       => 'Diseña dashboards e infografías de análisis competitivo que transformen datos de mercado complejos en visualizaciones claras, accionables y visualmente impactantes para decisores.',
                'prompt_content'    => <<<'EOT'
Eres un diseñador de información y especialista en visualización de datos con experiencia en inteligencia de negocio y análisis competitivo. Tu encargo es ayudarme a diseñar un sistema de visualización de datos de mercado que transforme la información bruta de la competencia y las tendencias del sector en dashboards e infografías que los decisores puedan interpretar de un vistazo.

**Contexto del proyecto:**
[TIPO DE DATOS A VISUALIZAR: precios, cuotas de mercado, tendencias de búsqueda, cobertura mediática, valoraciones de clientes, geografías]
[AUDIENCIA: dirección general, marketing, producto, inversores]
[HERRAMIENTAS DISPONIBLES: Figma, Tableau, Power BI, Looker, código propio con D3.js o Chart.js]

**Bloque 1 — Principios de diseño para datos de mercado**

Define los fundamentos de diseño para este tipo de datos:

1. **Jerarquía de información**: Los datos de mercado tienen múltiples niveles de granularidad. Define la jerarquía visual: qué información debe verse en dos segundos (headline number o tendencia principal), qué en 30 segundos (contexto y comparativa) y qué bajo demanda (detalle y drill-down).

2. **Elección del tipo de gráfico correcto**: Para cada tipo de análisis competitivo, ¿qué visualización funciona mejor?
   - Comparativa de precios entre competidores: gráfico de barras agrupadas vs. bubble chart vs. tabla con codificación de color.
   - Evolución de cuota de mercado en el tiempo: área apilada vs. líneas vs. alluvial/Sankey.
   - Posicionamiento competitivo: scatter plot de dos ejes vs. matriz 2x2 vs. radar chart.
   - Cobertura geográfica: mapa de calor vs. mapa de burbujas vs. tabla con banderas.
   - Análisis de sentimiento de reseñas: gauge vs. barras de sentimiento vs. word cloud con codificación de color.

3. **Codificación de color para inteligencia competitiva**: Define un sistema de color coherente que identifique visualmente a cada competidor, use semáforos (verde/amarillo/rojo) de forma consistente para indicar posición relativa y sea accesible para personas con daltonismo.

**Bloque 2 — Diseño del dashboard de inteligencia competitiva**

Diseña el dashboard principal para el equipo de dirección:

- **Vista ejecutiva (una pantalla, sin scroll)**: Define los cinco KPIs competitivos que deben estar siempre visibles. Para cada KPI, especifica: el dato que muestra, la comparativa de referencia (vs. mes anterior, vs. competidor principal, vs. objetivo), el formato visual y el umbral que dispara un color de alerta.

- **Módulo de evolución de precios**: Diseña la visualización para monitorizar los precios de todos los competidores en el tiempo. ¿Cómo detectar y destacar visualmente un cambio de precio? ¿Cómo mostrar la posición relativa de mi producto en el mercado de precios?

- **Módulo de presencia en medios**: Visualización del share of voice por competidor en el tiempo, desglosado por tipo de medio (prensa, blogs, redes sociales) y por tono (positivo, neutral, negativo).

- **Módulo de experiencia de cliente comparada**: Comparativa visual de valoraciones de clientes por categoría (facilidad de uso, soporte, relación calidad-precio) entre mi producto y los competidores. Usar un radar chart o barras horizontales con referencia a la media del sector.

**Bloque 3 — Infografías de análisis competitivo**

Las infografías son más efectivas que los dashboards para comunicar hallazgos a audiencias no técnicas:

- **Infografía de SWOT comparativo**: ¿Cómo representar visualmente el análisis SWOT de tres competidores de forma que sea comparable y no simplemente cuatro cuadrantes de texto?

- **Infografía de posicionamiento de mercado**: Visualización del mapa perceptual del sector, con la posición de cada competidor y los espacios en blanco de oportunidad.

- **Infografía de ficha de competidor**: Template de una página que resume a un competidor: identidad visual, propuesta de valor, métricas clave, fortalezas/debilidades, clientes referenciables y cambios recientes. Diseñada para actualización trimestral.

**Bloque 4 — Automatización de la generación de visualizaciones**

Define cómo la IA puede automatizar la creación de visualizaciones:

- **Prompts para generar código de visualización**: ¿Cómo instruir a un LLM para que genere código de Plotly, D3.js o Chart.js a partir de un dataset de análisis competitivo? Define el prompt tipo y las instrucciones de formato del dataset de entrada.
- **Generación automática de narrativa**: ¿Cómo hacer que la IA genere automáticamente el texto interpretativo que acompaña a cada visualización, destacando los hallazgos más relevantes?
- **Actualización automática de infografías**: ¿Cómo conectar una fuente de datos actualizada mensualmente con una plantilla de infografía para que se actualice sin intervención manual?

Proporciona mockups en texto de cada visualización principal y las especificaciones técnicas para implementarlas en la herramienta de mi elección.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar dashboards e infografías de inteligencia competitiva que transformen datos de mercado en visualizaciones accionables para decisores.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Inteligencia competitiva para equipos de ventas: convertir datos en argumentos',
                'description'       => 'Transforma el análisis de mercado y de competidores en herramientas de habilitación de ventas: battle cards, guiones de objeciones y argumentarios basados en datos reales del mercado.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en habilitación de ventas (sales enablement) y estrategia competitiva. Tu encargo es transformar el análisis de mercado y de competidores en herramientas prácticas que los vendedores puedan usar en sus conversaciones diarias para ganar más oportunidades y manejar objeciones con datos reales.

**Contexto del equipo de ventas:**
[PRODUCTO O SERVICIO QUE VENDES, COMPETIDORES PRINCIPALES, PERFIL DE COMPRADORES TÍPICOS, OBJECIONES MÁS FRECUENTES, CICLO DE VENTA PROMEDIO]

**Bloque 1 — Battle cards: el arma táctica del vendedor**

Las battle cards son el documento más utilizado en ventas competitivas. Crea una battle card completa para el competidor principal:

1. **Resumen del competidor (30 segundos)**: ¿Quiénes son? ¿A quién venden principalmente? ¿Cuál es su propuesta de valor diferencial? ¿En qué segmento de mercado son más fuertes?

2. **Cuándo los encontramos**: Las situaciones típicas en que aparecen en el proceso de venta. ¿En qué fase del ciclo? ¿Qué tipos de empresa los consideran? ¿Quién los suele recomendar dentro del comité de compra?

3. **Sus fortalezas reales (sé honesto)**: Las tres o cuatro ventajas genuinas del competidor que el cliente percibe. Conocer sus fortalezas reales te permite anticipar y contextualizar, no ignorar.

4. **Sus debilidades reales (basadas en reseñas y datos)**: Las tres o cuatro limitaciones más documentadas, preferiblemente con citas de reseñas reales de Trustpilot, G2 o Capterra. Nunca inventes debilidades: el comprador las verificará.

5. **Tabla de comparativa de funcionalidades**: Para las diez funcionalidades más importantes en la decisión de compra, indica con un sistema visual claro (completo, parcial, no disponible) la situación de tu producto vs. el competidor.

6. **Argumentos de diferenciación por tipo de comprador**: Para el decisor de negocio (CFO, CEO), para el usuario final y para el técnico evaluador, ¿cuál es el argumento de diferenciación más efectivo frente a este competidor?

**Bloque 2 — Manejo de objeciones basado en datos de mercado**

Las objeciones competitivas requieren respuestas basadas en evidencia, no en opiniones:

Define respuestas detalladas para las cinco objeciones competitivas más frecuentes:

- "El competidor X es más barato": ¿Cómo reencuadrar el precio en términos de coste total y ROI? ¿Qué datos de retorno de inversión puedes citar? ¿Hay costes ocultos del competidor que el cliente no ha considerado?

- "El competidor X tiene más funcionalidades": ¿Cómo distinguir entre funcionalidades que se usan y funcionalidades que generan complejidad? ¿Tienes datos de adoption rate de las funcionalidades que el cliente menciona?

- "El competidor X es el estándar del sector": ¿Qué datos de cuota de mercado, tendencias de adopción o casos de cambio puedes aportar? ¿Hay analistas que respalden una narrativa diferente?

- "Ya usamos el competidor X y estamos contentos": ¿Cómo explorar si "contentos" es el techo que han normalizado o si hay problemas que no han cuantificado? Preguntas de descubrimiento que abren la puerta al cambio.

- "El competidor X nos da un descuento del 40%": Cómo responder a una guerra de precios sin bajar el precio propio: qué incluye tu oferta que justifica el diferencial y cómo hacer visible ese valor.

**Bloque 3 — Guion de descubrimiento competitivo**

El momento en que el cliente menciona a un competidor es una oportunidad de conocer más:

Define diez preguntas de descubrimiento para cuando el cliente menciona que está evaluando a un competidor. Las preguntas deben:
- Ser genuinamente curiosas, no manipuladoras.
- Revelar el peso real de cada criterio en la decisión del cliente.
- Identificar si el cliente tiene una necesidad no cubierta por el competidor.
- Crear duda legítima sobre supuestas ventajas del competidor sin atacarlo directamente.

**Bloque 4 — Inteligencia de campo: el vendedor como fuente de datos**

Los vendedores son la fuente de inteligencia competitiva más valiosa y menos aprovechada:

- Define el proceso de captura de inteligencia competitiva de campo: qué información deben reportar los vendedores después de cada conversación donde apareció un competidor.
- Crea la plantilla de "informe de pérdida competitiva" que el vendedor completa cuando pierde una oportunidad frente a un competidor: datos del cliente, razón de la pérdida declarada, razón inferida y aprendizaje para la battle card.
- Define cómo agregar y sintetizar esa inteligencia de campo mensualmente para actualizar las battle cards con información real y actual.

Proporciona la battle card completa para el competidor principal que me indiques, lista para distribuir al equipo de ventas esta semana.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Crear battle cards, argumentarios de objeciones y herramientas de sales enablement basadas en inteligencia competitiva real y datos de mercado.',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Análisis de tendencias de mercado con IA para decisiones de producto',
                'description'       => 'Usa IA para identificar tendencias emergentes en tu mercado, validar hipótesis de producto con datos reales y anticipar movimientos competitivos que afectan a tu roadmap.',
                'prompt_content'    => <<<'EOT'
Eres un product manager con especialización en investigación de mercado y análisis de tendencias tecnológicas. Tu encargo es ayudarme a diseñar un proceso sistemático de análisis de tendencias de mercado usando inteligencia artificial, para que las decisiones de producto estén fundamentadas en evidencia y no en intuición o en la última conversación con un cliente.

**Contexto del producto y el mercado:**
[CATEGORÍA DE PRODUCTO, ETAPA DE MADUREZ DEL MERCADO (emergente, crecimiento, madurez), GEOGRAFÍAS OBJETIVO, CLIENTES ACTUALES Y POTENCIALES, PRINCIPALES PREGUNTAS ESTRATÉGICAS A RESPONDER]

**Bloque 1 — Framework de análisis de tendencias**

Define el sistema de monitorización de tendencias:

1. **Clasificación de tendencias por horizonte temporal**:
   - Señales débiles (18-36 meses para madurar): cambios en comportamiento de early adopters, papers académicos citados en industria, startups con financiación semilla en el tema.
   - Tendencias emergentes (6-18 meses): cobertura creciente en medios especializados, primeros productos comerciales, preguntas frecuentes en comunidades profesionales.
   - Tendencias establecidas (ya presentes): adoptadas por la mayoría del mercado, con métricas de adopción disponibles.
   Para cada categoría, define las fuentes de información más fiables y la frecuencia de monitorización.

2. **Matriz de relevancia de tendencias**: Para cada tendencia identificada, evalúa dos dimensiones: impacto potencial en tu mercado (bajo, medio, alto) y certeza de que se materializará (especulativa, probable, casi segura). Las tendencias de alto impacto y alta certeza deben estar en el roadmap; las de alto impacto e incertidumbre, en experimentos.

3. **Señales de validación de tendencias**: ¿Qué evidencias concretas confirman que una tendencia es real y no un hype pasajero? Define los cinco indicadores que buscas: crecimiento de búsquedas (Google Trends), volumen de financiación (Crunchbase), adopción de grandes empresas, cambios regulatorios y cambios en el comportamiento de compra de tus clientes.

**Bloque 2 — Análisis de tendencias con IA**

Define los prompts y procesos para usar IA en el análisis:

- **Síntesis de señales de mercado**: Proceso semanal para recopilar artículos, informes, posts de LinkedIn y transcripciones de podcasts relevantes, y sintetizarlos en un resumen de tendencias de dos páginas usando un LLM. Define el prompt de síntesis y la estructura del output.

- **Identificación de patrones en feedback de clientes**: ¿Cómo analizar con IA las transcripciones de entrevistas de usuario, tickets de soporte y reseñas para identificar necesidades no satisfechas que apuntan a tendencias de mercado?

- **Análisis de oferta de empleo de competidores**: Las ofertas de trabajo revelan las apuestas estratégicas de los competidores antes de que las anuncien. Define cómo monitorizar y analizar las ofertas de empleo de los principales competidores para inferir sus próximos movimientos.

- **Escenarios futuros con IA**: Para cada tendencia relevante, usa un LLM para generar tres escenarios posibles de evolución del mercado en 24 meses: optimista, base y pesimista. Define la estructura de cada escenario y cómo incorporarlos en las decisiones de roadmap.

**Bloque 3 — Validación de hipótesis de producto con datos de mercado**

Convierte las tendencias en hipótesis testables:

- **Marco de hipótesis**: Para cada tendencia identificada, formula una hipótesis de producto específica del tipo: "Si [la tendencia X continúa], entonces [nuestros clientes necesitarán Y], y podemos validarlo con [experimento Z]."

- **Fuentes de validación primaria**: Diseña el proceso de investigación cualitativa para validar hipótesis con clientes: guion de entrevista de 30 minutos para explorar una tendencia específica, criterios de selección de entrevistados y cómo evitar el sesgo de confirmación.

- **Fuentes de validación secundaria**: ¿Qué datos de terceros (Nielsen, Gartner, IDC, informes de inversión, datos de LinkedIn) puedes usar para validar hipótesis sin hacer tu propia investigación primaria?

- **Umbral de confianza para actuar**: ¿Cuánta evidencia necesitas antes de comprometer recursos del equipo en una tendencia? Define el criterio de decisión explícito.

**Bloque 4 — Integración con el proceso de roadmap**

La inteligencia de mercado tiene que llegar al roadmap de forma sistemática:

- Define el proceso mensual de revisión de tendencias con el equipo de producto: formato de la reunión, materiales preparados, decisiones que se toman.
- Crea el template del "memo de tendencia" que un PM usa para presentar una nueva tendencia al equipo directivo: una página con la tendencia, la evidencia, el impacto potencial y la recomendación de acción.
- Define cómo documentar las tendencias descartadas y el razonamiento, para evitar reevaluar continuamente las mismas señales.

Proporciona el sistema completo listo para implementar en la próxima sprint de planificación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar un sistema de análisis de tendencias de mercado con IA que informe decisiones de roadmap con evidencia real en lugar de intuición.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Benchmarking competitivo de salarios y cultura con IA',
                'description'       => 'Analiza sistemáticamente la propuesta de valor al empleado de los competidores: salarios, beneficios, cultura, políticas de trabajo remoto y reputación como empleador para mejorar la retención y atracción de talento.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en estrategia de talento y people analytics con experiencia en benchmarking competitivo de compensación y cultura organizacional. Tu encargo es ayudarme a diseñar un proceso sistemático de inteligencia competitiva sobre la propuesta de valor al empleado de los competidores, para que las decisiones de compensación, beneficios y cultura estén basadas en datos del mercado real.

**Contexto de la empresa:**
[SECTOR, TAMAÑO, GEOGRAFÍAS, PERFILES DE TALENTO CLAVE QUE NECESITAS ATRAER Y RETENER, COMPETIDORES EN EL MERCADO DE TALENTO]

**Bloque 1 — Fuentes de inteligencia de talento**

Define las fuentes de datos para el benchmarking:

1. **Datos de compensación públicos y semipúblicos**:
   - Glassdoor, LinkedIn Salary, Levels.fyi (para tecnología): cómo extraer y comparar datos de salario por rol, nivel de seniority y geografía.
   - Informes de compensación de consultoras (Mercer, Willis Towers Watson, Hay Group): qué cubren y cómo acceder a versiones gratuitas o parciales.
   - Ofertas de empleo como proxy de salario: ¿cuántas empresas publican rangos salariales y cómo extrapolar de las que no lo hacen?

2. **Datos de cultura y experiencia de empleado**:
   - Glassdoor: análisis sistemático de reseñas de empleados actuales y anteriores de los competidores. ¿Qué categorías analizar? ¿Cómo comparar puntuaciones ajustando por número de reseñas y antigüedad?
   - LinkedIn: análisis de tenure promedio (permanencia media), ratios de promoción interna y patrones de contratación externa que revelan la cultura de desarrollo.
   - Indeed y Kununu: fuentes complementarias con perfiles de empleados distintos.

3. **Señales cualitativas de cultura**:
   - Análisis de las páginas de "Trabaja con nosotros" y blogs de empresa de los competidores: ¿qué valores enfatizan? ¿Qué tipo de personas presentan? ¿Qué beneficios destacan?
   - Contenido de LinkedIn de empleados de los competidores: ¿cómo hablan de su empresa? ¿Con qué frecuencia comparten contenido de la empresa? (indicador de orgullo de pertenencia).
   - Ofertas de empleo como radiografía cultural: el lenguaje de las ofertas revela mucho sobre la cultura real.

**Bloque 2 — Análisis comparativo de compensación total**

Construye el marco de comparación de compensación:

- **Paquete de compensación total**: Para los cinco roles más críticos de tu empresa, compara con los competidores en todos los componentes: salario base, variable o bonus, acciones o participación (RSUs, opciones, phantom equity), beneficios monetizables (seguro médico, pensión, seguro de vida) y beneficios no monetizables (días de vacaciones, políticas de trabajo remoto, presupuesto de formación).

- **Posicionamiento de percentil**: Define en qué percentil del mercado quieres estar en cada componente de compensación. No tienes que estar en el percentil 75 en todo: define dónde compensas con otros elementos de la propuesta de valor.

- **Gap analysis**: Para cada rol y componente, ¿cuál es el gap actual entre tu posición y el competidor de referencia? ¿Cuál es el coste de cerrar ese gap?

**Bloque 3 — Análisis de reputación como empleador**

La reputación como empleador afecta directamente al coste y calidad de la atracción:

- **Employer Net Promoter Score inferido**: ¿Cómo calcular un eNPS aproximado de los competidores a partir de datos de Glassdoor? Define la fórmula y los benchmarks del sector.
- **Análisis de sentimiento de reseñas por categoría**: Liderazgo, compensación, cultura, oportunidades de desarrollo, equilibrio vida-trabajo y diversidad. ¿En qué categorías son más fuertes o débiles los competidores?
- **Tendencia temporal de la reputación**: ¿Está mejorando o deteriorando la reputación de cada competidor? ¿Qué eventos (despidos, cambios de liderazgo, cambios de política) correlacionan con cambios en las puntuaciones?

**Bloque 4 — Plan de acción para mejorar la propuesta de valor**

Convierte el benchmarking en decisiones:

- Priorización de mejoras de compensación y beneficios basada en el impacto en retención vs. el coste de implementación.
- Narrativa de employer brand que posicione tus diferenciadores reales: no lo que pagas sino lo que ofreces que los competidores no pueden (misión, tipo de proyectos, cultura de aprendizaje, flexibilidad).
- Proceso de revisión semestral del benchmarking y actualización de la política de compensación.

Proporciona las plantillas de análisis y los prompts de IA para automatizar la extracción y síntesis de datos de Glassdoor y LinkedIn.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar un proceso de benchmarking competitivo de salarios, beneficios y cultura usando datos públicos y IA para mejorar la propuesta de valor al empleado.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Informes de inteligencia de mercado para decisiones de inversión',
                'description'       => 'Genera informes estructurados de análisis de mercado y competidores para sustentar decisiones de inversión, M&A, entrada en nuevos mercados o pivotes estratégicos con datos verificables.',
                'prompt_content'    => <<<'EOT'
Eres un analista de mercado senior especializado en investigación de inversiones, análisis de industria y due diligence estratégico. Tu encargo es ayudarme a elaborar informes de inteligencia de mercado de calidad institucional que sustenten decisiones de inversión, fusiones y adquisiciones, entrada en nuevos mercados o pivotes estratégicos.

**Objetivo del informe:**
[TIPO DE DECISIÓN A SUSTENTAR: inversión en empresa, entrada en nuevo mercado, adquisición de competidor, pivote de modelo de negocio]
[MERCADO O SECTOR OBJETO DE ANÁLISIS]
[GEOGRAFÍA]
[PLAZO DE LA DECISIÓN]

**Sección 1 — Resumen ejecutivo**

Redacta un resumen ejecutivo de una página que incluya:
- La pregunta estratégica que el informe responde.
- Los tres hallazgos más relevantes con sus implicaciones para la decisión.
- La recomendación o conclusión principal con el nivel de confianza (alta, media o baja) y las principales asunciones.
- Los tres riesgos principales identificados que podrían invalidar la conclusión.

El resumen ejecutivo debe poder leerse de forma independiente y comunicar todo lo esencial en menos de dos minutos.

**Sección 2 — Tamaño y estructura del mercado**

Analiza el mercado con rigor metodológico:

1. **TAM, SAM y SOM**: Define y cuantifica el mercado total direccionable, el mercado servible y el mercado obtenible realista. Especifica la metodología de cálculo (top-down vs. bottom-up) y las fuentes de datos. Si los datos públicos no son directamente aplicables, describe el proceso de triangulación.

2. **Segmentación del mercado**: ¿Cómo está segmentado el mercado (por geografía, por tamaño de cliente, por caso de uso, por canal)? ¿Cuáles son los segmentos de mayor crecimiento? ¿Dónde está la mayor concentración de márgenes?

3. **Tasas de crecimiento históricas y proyectadas**: CAGR histórico de los últimos cinco años y proyecciones para los próximos cinco. Compara las proyecciones de al menos tres fuentes distintas (si están disponibles) y explica las discrepancias.

4. **Estacionalidad y ciclicidad**: ¿Cómo afectan los ciclos económicos a este mercado? ¿Hay patrones estacionales relevantes?

**Sección 3 — Análisis de la estructura competitiva**

Aplica los marcos analíticos estándar:

- **Fuerzas de Porter**: Analiza las cinco fuerzas con un nivel de detalle suficiente para que el análisis sea útil, no solo nominal. Para cada fuerza, concluye si es favorable, neutral o desfavorable para los incumbentes.

- **Mapa de posicionamiento competitivo**: Los principales jugadores del mercado clasificados por cuota de mercado estimada, posicionamiento de precio y segmento objetivo. Incluye tanto líderes establecidos como nuevos entrantes relevantes.

- **Análisis de rentabilidad del sector**: ¿Cuáles son los márgenes típicos en este mercado? ¿Quién captura la mayor parte del valor (fabricantes, distribuidores, plataformas, servicios complementarios)? ¿Ha habido compresión de márgenes en los últimos años?

- **Dinámica de consolidación**: ¿Está el mercado en proceso de consolidación o fragmentándose? ¿Cuántas operaciones de M&A se han producido en los últimos tres años y qué implica para las valoraciones?

**Sección 4 — Tendencias y factores de disrupción**

Identifica los vectores de cambio con mayor impacto:

- **Tendencias tecnológicas**: ¿Qué tecnologías están cambiando la estructura de costes, el modelo de distribución o la propuesta de valor en este mercado?
- **Cambios regulatorios**: ¿Qué regulaciones en curso o previstas pueden cambiar las reglas del juego en los próximos dos años?
- **Cambios en el comportamiento del comprador**: ¿Cómo están cambiando las preferencias, los canales de compra y los criterios de decisión?
- **Nuevos entrantes y modelos de negocio disruptivos**: ¿Hay startups o empresas de sectores adyacentes que estén atacando este mercado con un modelo diferente?

**Sección 5 — Riesgos y sensibilidades**

Define los riesgos que podrían invalidar la tesis:

Para los tres riesgos principales, especifica: descripción del riesgo, probabilidad de materialización (baja, media, alta), impacto si se materializa (bajo, medio, alto), indicadores tempranos de que el riesgo se está materializando y opciones de mitigación.

Proporciona el informe completo en formato estructurado listo para presentar a un comité de inversión o dirección general.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 70,
                'use_case'          => 'Elaborar informes de inteligencia de mercado de calidad institucional para sustentar decisiones de inversión, M&A o entrada en nuevos mercados.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Due diligence legal de competidores con IA',
                'description'       => 'Analiza el perfil legal y regulatorio de competidores o targets de adquisición: litigios, registros de propiedad intelectual, cumplimiento normativo, sanciones y riesgos legales emergentes.',
                'prompt_content'    => <<<'EOT'
Eres un abogado especializado en due diligence corporativo y análisis de riesgo legal. Tu encargo es ayudarme a diseñar un proceso sistemático de investigación legal y regulatoria sobre competidores, targets de adquisición o socios estratégicos, usando fuentes públicas y herramientas de IA para identificar riesgos antes de tomar decisiones estratégicas.

**Objetivo del análisis:**
[RAZÓN DEL ANÁLISIS: benchmarking competitivo, due diligence pre-adquisición, evaluación de socio estratégico, análisis de riesgo regulatorio del sector]
[EMPRESA O EMPRESAS A ANALIZAR]
[JURISDICCIONES RELEVANTES]
[PLAZO DEL ANÁLISIS]

**Bloque 1 — Investigación de litigios y conflictos legales**

Define el proceso de investigación de historial litigioso:

1. **Fuentes de información pública sobre litigios**:
   - Registros judiciales públicos: ¿qué bases de datos están disponibles en cada jurisdicción? En España: CENDOJ, BOE. En EE. UU.: PACER, CourtListener. En la UE: portales de cada país más el Tribunal General de la UE.
   - Menciones en prensa legal y económica: bases de datos de noticias, publicaciones jurídicas especializadas.
   - Informes anuales de empresas cotizadas: la sección de contingencias legales es obligatoria y extremadamente informativa.

2. **Clasificación de litigios por relevancia estratégica**: Una empresa puede tener cientos de litigios menores (impagos, laborales rutinarios) y dos o tres que pueden ser materiales para la decisión estratégica. Define los criterios para clasificar un litigio como material: cuantía, potencial de cambio de modelo de negocio, riesgo reputacional, precedente regulatorio.

3. **Análisis de litigios activos de mayor riesgo**: Para cada litigio material identificado, sintetiza: partes, objeto de la disputa, estado procesal, exposición económica estimada, probabilidad de resultado adverso (si hay información pública) e impacto en el negocio si se pierde.

**Bloque 2 — Propiedad intelectual y ventajas competitivas protegidas**

La cartera de PI es frecuentemente el activo más valioso de una empresa:

- **Búsqueda de patentes**: Proceso de búsqueda en Google Patents, EPO Espacenet y USPTO para identificar las patentes de un competidor. ¿Qué tecnologías está protegiendo? ¿En qué jurisdicciones? ¿Cuándo expiran las patentes clave?
- **Marcas registradas**: ¿Qué marcas tiene registradas? ¿Hay conflictos de marca con terceros (oposiciones, nulidades)? ¿Protege sus marcas en todos los mercados donde opera?
- **Secretos comerciales y software propietario**: ¿Qué elementos de su propuesta de valor pueden estar protegidos como secreto comercial? ¿Cómo identificar si una empresa se basa principalmente en ventajas de PI registrada o en know-how de equipo?
- **Riesgo de infracción**: ¿Existe riesgo de que su modelo de negocio o producto infrinja PI de terceros? ¿Hay demandas de patent trolls activas o históricas?

**Bloque 3 — Cumplimiento normativo y sanciones**

Investiga el track record regulatorio:

- **Sanciones administrativas**: ¿Ha sido sancionada la empresa por organismos reguladores? Fuentes: AEPD (España), ICO (UK), CNMV, CNMC, AEMPS, FDA (EE. UU.), FTC, SEC. Para cada sanción: organismo, motivo, cuantía, estado y si la empresa modificó su comportamiento.
- **Investigaciones en curso**: ¿Hay investigaciones administrativas abiertas que puedan materializarse en sanciones? Fuentes: press releases de reguladores, menciones en medios especializados.
- **Cumplimiento GDPR y privacidad**: Para empresas de tecnología, ¿ha habido brechas de datos notificadas? ¿Cuál ha sido la respuesta? ¿Hay quejas pendientes ante autoridades de protección de datos?
- **Cumplimiento laboral y social**: ¿Ha habido sanciones por incumplimiento de normativa laboral, igualdad, seguridad en el trabajo o responsabilidad social?

**Bloque 4 — Síntesis de riesgo legal y recomendaciones**

Concluye el análisis con un informe ejecutivo:

- **Semáforo de riesgo legal**: Verde (sin alertas significativas), amarillo (riesgos a monitorizar), rojo (riesgos que pueden afectar materialmente a la decisión).
- **Los tres riesgos legales más relevantes**: Con descripción, probabilidad de materialización, impacto potencial y recomendación de acción (profundizar en due diligence, negociar garantías contractuales, condicionar la operación, descartarla).
- **Gaps de información**: ¿Qué información relevante no está disponible públicamente y debería solicitarse en una due diligence formal?

Proporciona el proceso completo con las fuentes de búsqueda específicas para cada jurisdicción y los prompts de IA para sintetizar los hallazgos en el informe ejecutivo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 65,
                'use_case'          => 'Investigar el perfil legal de competidores o targets de adquisición: litigios, propiedad intelectual, sanciones regulatorias y riesgo de cumplimiento.',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Análisis de feedback de clientes para inteligencia competitiva en CS',
                'description'       => 'Extrae insights de mercado y señales competitivas de las conversaciones con clientes, tickets de soporte y encuestas NPS para informar la estrategia de producto y retención.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en experiencia del cliente y voice of customer (VoC) analytics. Tu encargo es ayudarme a convertir las conversaciones diarias de atención al cliente, las encuestas de satisfacción y los tickets de soporte en inteligencia de mercado accionable, identificando patrones competitivos, necesidades no atendidas y riesgos de churn antes de que se materialicen.

**Contexto del equipo de CS:**
[VOLUMEN DE INTERACCIONES MENSUALES, CANALES (email, chat, teléfono, redes sociales), HERRAMIENTAS DE CRM Y TICKETING, MÉTRICAS ACTUALES: NPS, CSAT, CHURN RATE]

**Bloque 1 — Sistema de captura de señales competitivas**

Los equipos de CS son la primera línea de inteligencia competitiva, pero raramente se aprovecha:

1. **Taxonomía de señales competitivas en conversaciones de cliente**: Define las categorías de información competitiva que pueden aparecer en interacciones de soporte:
   - Comparaciones directas: "En el competidor X esto funciona así..."
   - Solicitudes de funcionalidades presentes en competidores.
   - Menciones de que el cliente está evaluando alternativas.
   - Comentarios sobre precios de competidores.
   - Elogios a funcionalidades propias que el cliente no encontró en otro lugar.

2. **Proceso de captura estructurada**: ¿Cómo entrenar al equipo de CS para capturar estas señales sin interrumpir la resolución del problema del cliente? Define el campo en el CRM, la instrucción de captura y los ejemplos de cómo registrar la información.

3. **Análisis automático con IA**: ¿Cómo procesar automáticamente las transcripciones de conversaciones y tickets para detectar menciones competitivas? Define el prompt de análisis y la estructura de output que facilite la agregación posterior.

**Bloque 2 — Análisis de NPS y encuestas de satisfacción**

El NPS y el CSAT contienen mucha más información de la que habitualmente se extrae:

- **Segmentación de verbatim por perfil de cliente**: Los comentarios de los promotores (NPS 9-10), los neutrales (7-8) y los detractores (0-6) tienen significados muy diferentes. Define el proceso de análisis diferenciado y las preguntas que debes responder en cada segmento.

- **Análisis de churn risk en comentarios de detractores**: ¿Qué patrones lingüísticos predicen la cancelación inminente? Define los indicadores de riesgo y el proceso de seguimiento proactivo.

- **Identificación de necesidades no cubiertas**: Los comentarios de neutrales y promotores contienen frecuentemente menciones de funcionalidades deseadas o casos de uso no cubiertos. ¿Cómo extraer estas pepitas de manera sistemática?

- **Benchmarking competitivo a través del NPS**: Si tu NPS incluye preguntas de seguimiento, ¿cómo identificar qué aspectos específicos de la experiencia determinan la puntuación? ¿Dónde estás por encima o por debajo de las expectativas formadas por los competidores?

**Bloque 3 — Dashboard de inteligencia de cliente para CS y producto**

Define los outputs del sistema de análisis:

- **Informe semanal de señales competitivas**: Template de una página con: menciones de competidores más frecuentes esta semana, solicitudes de funcionalidades más repetidas, patrones de churn detectados y casos de éxito donde se superó a la competencia.

- **Alerta de riesgo de churn por cuenta**: Para cuentas enterprise o de alto valor, ¿qué combinación de señales activa una alerta que envía automáticamente al account manager? Define los disparadores y el protocolo de seguimiento.

- **Feed de inteligencia de producto**: Canal (Slack, correo) donde el equipo de CS envía mensajes semanalmente al equipo de producto con las cinco solicitudes de funcionalidades más repetidas, las cinco comparaciones con competidores más mencionadas y un caso de éxito destacado de la semana.

**Bloque 4 — Proceso de análisis con IA**

Define los prompts y flujos de trabajo para automatizar el análisis:

- **Prompt de síntesis de tickets semanales**: Instrucción para que un LLM analice un batch de 50-100 tickets de la semana y genere el informe de señales competitivas con las categorías definidas.
- **Prompt de análisis de verbatim de NPS**: Instrucción para clasificar comentarios de NPS por sentimiento, tema principal y si mencionan a algún competidor, generando una tabla estructurada como output.
- **Prompt de detección de riesgo de churn**: Análisis de una conversación individual para evaluar el nivel de riesgo de churn (bajo, medio, alto) con justificación y recomendación de acción.

Proporciona los prompts listos para usar, la plantilla del informe semanal y el proceso de implementación en el equipo de CS.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Transformar conversaciones de soporte, tickets y NPS en inteligencia competitiva y de mercado accionable para los equipos de producto y CS.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Servicios de investigación de mercado con IA para consultores independientes',
                'description'       => 'Ofrece servicios de inteligencia competitiva y análisis de mercado de alta calidad como freelancer usando IA para producir informes que compiten con los de grandes consultoras a una fracción del tiempo.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de negocio independiente con especialización en investigación de mercado e inteligencia competitiva. Tu encargo es ayudarme a construir un servicio de análisis de mercado para clientes corporativos que, usando herramientas de IA, me permita producir informes de alta calidad en el tiempo de un equipo pequeño y con la profundidad de una consultora especializada.

**Mi perfil como consultor:**
[ESPECIALIZACIÓN SECTORIAL, AÑOS DE EXPERIENCIA, TIPOS DE CLIENTES CON LOS QUE TRABAJO, SERVICIOS ACTUALES QUE OFREZCO]

**Bloque 1 — Definición de la oferta de servicios**

Diseña el catálogo de servicios de investigación de mercado con IA:

1. **Tipología de informes y su posicionamiento**:
   - **Informe express de competidor** (entrega en 48 horas): Perfil de un competidor específico con posicionamiento, precios, fortalezas, debilidades y movimientos recientes. Precio recomendado: 500-1.500€.
   - **Análisis de mercado sectorial** (entrega en una semana): TAM, estructura competitiva, tendencias y oportunidades para una decisión de entrada o expansión. Precio recomendado: 2.000-5.000€.
   - **Informe de due diligence de mercado** (entrega en dos semanas): Análisis profundo para decisiones de inversión o adquisición. Precio recomendado: 5.000-15.000€.
   - **Suscripción de inteligencia competitiva** (mensual o trimestral): Informe recurrente sobre el mercado y competidores del cliente. Precio recomendado: 800-2.500€ al mes.

2. **Propuesta de valor diferencial**: ¿Por qué contratar a un freelancer con IA vs. una consultora grande o un equipo interno? Define los tres argumentos de venta más potentes: velocidad, especialización sectorial y precio.

**Bloque 2 — Stack de herramientas y flujo de trabajo**

Define el sistema de producción de informes con IA:

- **Herramientas de recopilación de datos**: Para cada fuente de datos (web, noticias, registros mercantiles, redes sociales, bases de datos de empresas), especifica la herramienta o método de extracción más eficiente.
- **Flujo de trabajo con LLMs**: Define el proceso paso a paso para producir un informe de competidor en 48 horas:
  Paso 1: Definición de la pregunta y el alcance (con el cliente, 30 minutos).
  Paso 2: Recopilación de fuentes primarias (herramientas, 2-4 horas).
  Paso 3: Síntesis y análisis con IA (prompts definidos, 2-3 horas).
  Paso 4: Redacción del informe sobre la síntesis de IA (1-2 horas).
  Paso 5: Revisión, verificación de datos y maquetación (1-2 horas).
  Paso 6: Presentación al cliente (30-60 minutos).
- **Plantillas de prompts para cada tipo de análisis**: Define los prompts principales para síntesis de competidor, análisis SWOT, análisis de tendencias y resumen ejecutivo. Estos prompts son tu activo más valioso.

**Bloque 3 — Gestión de calidad y control de alucinaciones**

El mayor riesgo de los informes generados con IA es la información incorrecta:

- **Principio de verificación**: Cada dato factual en el informe (cuota de mercado, cifra de ingresos, número de empleados, precio de producto) debe tener una fuente verificada. Define el proceso de validación y cómo documentar las fuentes.
- **Disclaimer de metodología**: ¿Qué advertencias incluir en el informe sobre las fuentes, las limitaciones de los datos y el uso de IA en el proceso de análisis?
- **Proceso de revisión por el cliente**: ¿Cómo estructurar la revisión final para que el cliente valide supuestos clave antes de la entrega definitiva?
- **Política de actualizaciones**: Si después de entregar el informe sale información relevante, ¿cuál es tu política de actualización? Define las condiciones.

**Bloque 4 — Captación de clientes para servicios de investigación**

¿Cómo llegar a los clientes que necesitan estos servicios?

- **Perfil del comprador ideal**: ¿Quién dentro de una empresa corporativa compra servicios de investigación de mercado? (Directores de estrategia, directores de marketing, directores de producto, equipos de M&A). ¿Cómo llegar a ellos en LinkedIn?
- **Demostración de capacidad**: ¿Cómo publicar contenido que demuestre la calidad de tu análisis sin revelar trabajo confidencial de clientes? Define un plan de tres tipos de contenido mensual.
- **Propuesta comercial para un encargo de investigación**: Template de propuesta de dos páginas que especifique alcance, metodología, entregables, plazos y precio.
- **Red de derivación**: ¿Qué otros profesionales pueden referirte clientes? (Abogados M&A, asesores financieros, headhunters). ¿Cómo construir esa red de forma sistemática?

Proporciona el catálogo de servicios completo listo para publicar en mi web o LinkedIn, y los tres prompts de IA más importantes de mi flujo de trabajo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Construir un servicio de investigación de mercado e inteligencia competitiva como freelancer usando IA para producir informes de alta calidad de forma eficiente.',
                'vote_score'        => 53,
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
