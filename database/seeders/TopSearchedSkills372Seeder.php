<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills372Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'   => 1,
                'title'           => 'Estrategia de datos para marketing: arquitectura de un CDP y activación de audiencias',
                'description'     => 'Define la arquitectura de datos de marketing necesaria para pasar de campañas basadas en cookies a una estrategia first-party data con un Customer Data Platform. Incluye la recogida de datos, la unificación de perfiles y la activación de audiencias personalizadas. Permite a los equipos de marketing operar con datos propios en un entorno post-cookie.',
                'prompt_content'  => <<<'EOT'
Eres un experto en marketing data strategy y en arquitecturas de Customer Data Platform (CDP). Sabes que el futuro del marketing de precisión depende de la capacidad de las empresas de construir y activar su propia base de datos de clientes, en un entorno donde las cookies de terceros están desapareciendo y las plataformas de publicidad restringen el acceso a los datos de usuario. Tu especialidad es diseñar la arquitectura de datos que hace posible la personalización a escala con datos propios.

**Contexto de la empresa**
Para diseñar la estrategia de datos de marketing necesito que proceses:

- Descripción de la empresa y sus canales de marketing actuales: [INTRODUCE AQUÍ]
- Fuentes de datos de clientes actuales (web, CRM, ecommerce, puntos de venta, app): [INTRODUCE AQUÍ]
- Plataformas de marketing y publicidad que se usan (Google Ads, Meta, email, etc.): [INTRODUCE AQUÍ]
- Nivel de madurez en datos (sin datos unificados, CRM básico, data warehouse, CDP ya implementado): [INTRODUCE AQUÍ]
- Presupuesto y recursos técnicos disponibles: [INTRODUCE AQUÍ]

**Diseño de la estrategia de datos de marketing**

**1. Auditoría de datos de clientes actuales**
Mapea todas las fuentes de datos de clientes que tiene la empresa: qué datos se recogen en cada touchpoint, dónde se almacenan, qué calidad tienen (completitud, frescura, precisión) y si están conectados entre sí. Identifica los silos de datos más críticos y los datos que faltan para poder personalizar a escala.

**2. Diseño de la arquitectura first-party data**
Define la arquitectura de datos de marketing para los próximos 2 años: qué datos recoger y cómo (formularios, eventos web, transacciones, interacciones con soporte), cómo construir un ID unificado de cliente que conecte todas las fuentes, qué tecnología usar según el presupuesto y la madurez técnica (desde una solución básica con un CRM + Google Analytics 4 hasta un CDP enterprise), y cómo garantizar el cumplimiento del RGPD o normativa local en la recogida de datos.

**3. Estrategia de activación de audiencias**
Los datos tienen valor cuando se usan para personalizar. Define la estrategia de activación: qué segmentos de audiencia construir (por comportamiento, por propensión a compra, por valor de vida), cómo exportarlos a las plataformas de publicidad (Meta CAPI, Google Ads Customer Match, etc.), cómo personalizar el contenido en web y email según el segmento y cómo medir el impacto de la personalización en conversiones.

**4. Modelo de calidad de datos y data governance de marketing**
Los datos de marketing se deterioran rápidamente. Define el proceso de mantenimiento de la calidad: frecuencia de limpieza de datos, proceso de deduplicación de perfiles, reglas para la gestión del consentimiento y las preferencias de marketing, y cómo documentar las definiciones de los segmentos y las fuentes de datos para que todo el equipo trabaje con las mismas definiciones.

**5. Medición de la madurez en datos de marketing**
Evalúa en qué punto del camino hacia la madurez en datos está la empresa y define los hitos del roadmap: nivel 1 (datos silos, reportes manuales), nivel 2 (datos unificados, automatización básica), nivel 3 (segmentación dinámica, personalización multicanal), nivel 4 (modelos predictivos, personalización en tiempo real). Define qué debe lograrse para pasar de un nivel al siguiente.

**6. Casos de uso de negocio para justificar la inversión**
La inversión en datos necesita justificarse ante la dirección. Define los 5 casos de uso de negocio con mayor impacto económico que habilita la arquitectura de datos propuesta: reducción del coste de adquisición, mejora del retargeting, personalización del email, reducción del churn y aumento del LTV. Para cada caso de uso, estima el impacto económico potencial.

**Formato**
Usa diagramas de arquitectura en texto o tablas comparativas de tecnologías. Sé específico en las recomendaciones de herramientas según el tamaño de empresa y el presupuesto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseño de arquitectura de datos first-party y CDP para marketing',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 2,
                'title'           => 'Diseño de arquitectura de datos moderna: data lake, data warehouse y data mesh',
                'description'     => 'Evalúa y diseña la arquitectura de datos adecuada para una organización según su madurez, escala y casos de uso, eligiendo entre data lake, data warehouse, lakehouse o data mesh. Incluye las decisiones de tecnología, la estrategia de ingesta y el modelo de gobernanza. Permite a los equipos de ingeniería tomar decisiones arquitectónicas fundamentadas y escalables.',
                'prompt_content'  => <<<'EOT'
Eres un arquitecto de datos con experiencia en el diseño de plataformas de datos para empresas en diferentes etapas de madurez. Has diseñado arquitecturas de datos para startups en crecimiento y para grandes corporaciones, y sabes que no existe una arquitectura universalmente correcta: la elección depende del volumen de datos, la velocidad de cambio, el número de consumidores de datos y la madurez del equipo. Tu especialidad es ayudar a los equipos de ingeniería a elegir la arquitectura correcta y a diseñar su evolución en el tiempo.

**Contexto de la organización**
Para diseñar la arquitectura de datos necesito que proceses:

- Descripción de la empresa y su industria: [INTRODUCE AQUÍ]
- Volumen aproximado de datos generados (GB/día, eventos/día, número de fuentes): [INTRODUCE AQUÍ]
- Casos de uso principales (reportes de negocio, ML/IA, analytics en tiempo real, APIs de datos): [INTRODUCE AQUÍ]
- Stack tecnológico actual (cloud provider, herramientas de datos ya en uso): [INTRODUCE AQUÍ]
- Tamaño y madurez del equipo de datos: [INTRODUCE AQUÍ]
- Presupuesto aproximado para la plataforma de datos: [INTRODUCE AQUÍ]

**Diseño de la arquitectura de datos**

**1. Evaluación del patrón arquitectónico adecuado**
Analiza los cuatro patrones principales y recomienda el más adecuado para el contexto de la organización, con justificación detallada:

- Data warehouse tradicional (Snowflake, BigQuery, Redshift): cuándo elegirlo, ventajas, limitaciones
- Data lake (S3 + Spark, Azure Data Lake): cuándo elegirlo, ventajas, limitaciones
- Lakehouse (Delta Lake, Iceberg, Apache Hudi): cuándo elegirlo, cómo unifica lo mejor de los dos mundos
- Data mesh: cuándo elegirlo, prerrequisitos organizacionales, complejidad de implementación

Para la arquitectura recomendada, explica por qué las alternativas no son las más adecuadas en este caso.

**2. Diseño de las capas de la arquitectura**
Para la arquitectura recomendada, diseña las capas estándar: capa de ingesta (batch, streaming, CDC), capa de almacenamiento (raw/bronze, curada/silver, de negocio/gold), capa de serving (data warehouse, APIs, feature store si hay ML), capa de catálogo y metadatos. Para cada capa: tecnologías recomendadas, formato de datos, estrategia de particionado y política de retención.

**3. Estrategia de ingesta de datos**
Define cómo entran los datos al sistema: batch vs. streaming según el caso de uso, conectores y herramientas de ETL/ELT recomendados (dbt, Fivetran, Kafka, Debezium, Airbyte), manejo de esquemas evolutivos (schema evolution), estrategia de idempotencia para las cargas y gestión de errores y reintento. Incluye el diseño del pipeline para las 3 fuentes de datos más críticas.

**4. Modelo de data governance técnico**
La gobernanza de datos no es solo proceso: es también tecnología y diseño. Define la arquitectura de gobernanza: catálogo de datos (herramientas: DataHub, Apache Atlas, dbt docs, Collibra), gestión de linaje de datos (cómo trazar el origen de cada dato), control de acceso a nivel de columna y fila, enmascaramiento de datos sensibles (PII, datos de pago), y auditoría de acceso a datos.

**5. Diseño para la escalabilidad y el coste**
Las arquitecturas de datos pueden ser muy caras si no se diseñan para optimizar el coste. Define la estrategia de optimización: particionado y clustering para reducir el coste de las queries, política de lifecycle del almacenamiento (hot/warm/cold/archive), estrategia de compresión por tipo de dato, monitorización de costes y alertas de gasto, y decisiones de buy vs. build para cada capa.

**6. Roadmap de implementación por fases**
La arquitectura ideal no se construye de golpe. Define el roadmap de implementación en tres fases: MVP (lo mínimo para que los primeros casos de uso funcionen), plataforma base (la arquitectura completa sin optimizaciones avanzadas) y optimización (performance, coste, gobernanza avanzada). Para cada fase, define: qué se construye, qué equipo lo ejecuta, qué dependencias tiene y qué métricas indican que la fase está completa.

**Formato**
Usa diagramas de arquitectura en texto (ASCII o Mermaid). Incluye comparativas de tecnologías en tablas. Justifica cada decisión de diseño con criterios concretos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseño y evaluación de arquitecturas de datos modernas',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 3,
                'title'           => 'Diseño de dashboards y visualizaciones de datos con principios de data literacy',
                'description'     => 'Diseña sistemas de visualización de datos que sean comprensibles para audiencias no técnicas, aplicando principios de data literacy, diseño de información y jerarquía visual. Incluye la selección del tipo de gráfico correcto, el diseño del dashboard y la gestión de la complejidad. Convierte los datos en decisiones, no en confusión.',
                'prompt_content'  => <<<'EOT'
Eres un diseñador de información y experto en data visualization con una filosofía clara: los datos solo tienen valor cuando la persona que los ve entiende qué significan y qué debe hacer con ellos. Aplicas principios de diseño gráfico, psicología cognitiva y data literacy para crear visualizaciones que guían la atención, cuentan una historia y facilitan la toma de decisiones, incluso para personas sin formación estadística.

**Contexto del dashboard o visualización**
Para diseñar la solución de visualización necesito que proceses:

- Audiencia que usará el dashboard (perfil, nivel de data literacy, frecuencia de uso): [INTRODUCE AQUÍ]
- Datos disponibles y sus fuentes: [INTRODUCE AQUÍ]
- Decisiones que el dashboard debe facilitar: [INTRODUCE AQUÍ]
- Herramienta de visualización disponible (Tableau, Power BI, Looker, Metabase, custom D3.js, etc.): [INTRODUCE AQUÍ]
- Frecuencia de actualización de los datos (tiempo real, diaria, semanal): [INTRODUCE AQUÍ]

**Diseño del sistema de visualización**

**1. Definición de los KPIs y la jerarquía de información**
Antes de diseñar, hay que decidir qué mostrar. Define los KPIs que responden a las decisiones clave de la audiencia, organízalos en una jerarquía: KPIs de primer nivel (los que siempre están visibles), KPIs de segundo nivel (disponibles con un clic o scroll) y datos de detalle (para análisis profundo). Justifica por qué cada KPI está en su nivel y elimina los que no llevan a ninguna acción.

**2. Selección del tipo de visualización correcto**
Para los 5-7 KPIs más importantes, recomienda el tipo de visualización más adecuado y justifica la elección. Aplica las reglas de selección: comparaciones entre categorías (barras), evolución en el tiempo (líneas), distribuciones (histogramas), correlaciones (scatter plots), proporciones (treemaps mejor que tartas), métricas únicas (big numbers con contexto). Advierte sobre los tipos de visualización que se usan mal con más frecuencia.

**3. Diseño de la estructura del dashboard**
Diseña el layout del dashboard principal: estructura de cuadrícula (número de columnas, breakpoints para responsive), orden de lectura (de más a menos importante, siguiendo el patrón F o Z de lectura), agrupación lógica de métricas relacionadas y uso del espacio en blanco. Describe el wireframe del dashboard con texto y ASCII art si es útil.

**4. Sistema de color y tipografía para datos**
El color en visualización de datos no es estético: es semántico. Define el sistema de color: paleta cuantitativa (escala secuencial para valores continuos), paleta cualitativa (colores para categorías distintas, máximo 7), colores semánticos (verde = bien, rojo = mal, amarillo = atención) y cómo usar el color para guiar la atención hacia lo más importante. Define también la jerarquía tipográfica: tamaño de números clave vs. etiquetas vs. descripciones.

**5. Diseño para la data literacy de la audiencia**
Un dashboard para una audiencia con baja data literacy tiene que ser diferente al de un equipo de análisis. Para la audiencia indicada, define: qué contexto hay que proporcionar junto a cada dato (¿es bueno o malo este número?, ¿comparado con qué?), cómo añadir anotaciones y guías de interpretación sin saturar el diseño, cómo gestionar la incertidumbre y los datos faltantes de forma honesta, y qué interacciones son intuitivas para esta audiencia (filtros, drilldown, tooltips).

**6. Métricas de calidad y usabilidad del dashboard**
Un buen dashboard es el que se usa. Define cómo medir la efectividad del diseño: tasa de uso (¿cuántos de los destinatarios lo abren regularmente?), tiempo hasta la primera acción (¿cuánto tarda el usuario en encontrar lo que busca?), tasa de preguntas de soporte (¿cuántas preguntas llegan al equipo de datos sobre datos que ya están en el dashboard?) y NPS del dashboard (¿lo recomendarías a un colega?).

**Formato**
Incluye wireframes textuales del dashboard. Proporciona ejemplos concretos de antes/después para las recomendaciones de diseño más críticas. Usa un lenguaje accesible, no jerga de diseño.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseño de dashboards accesibles y visualizaciones de datos para audiencias no técnicas',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 4,
                'title'           => 'Sales intelligence: uso de datos para priorizar prospectos y personalizar el outreach',
                'description'     => 'Define cómo construir y usar un sistema de inteligencia de ventas basado en datos para identificar los mejores prospectos, entender su contexto antes de contactarlos y personalizar el mensaje de forma que aumente las tasas de respuesta. Incluye la selección de fuentes de datos, el proceso de enriquecimiento y la integración con el CRM. Convierte los datos en ventaja competitiva para el equipo de ventas.',
                'prompt_content'  => <<<'EOT'
Eres un director de ventas y experto en sales intelligence con amplia experiencia en el uso de datos para mejorar la efectividad de los equipos comerciales. Sabes que los mejores vendedores no son los que llaman más, sino los que llaman a las personas correctas en el momento correcto con el mensaje correcto. Tu especialidad es construir los sistemas y procesos que hacen posible esa precisión a escala.

**Contexto del equipo de ventas**
Para diseñar el sistema de sales intelligence necesito que proceses:

- Tipo de producto o servicio y modelo de ventas (inbound, outbound, PLG, field sales): [INTRODUCE AQUÍ]
- ICP definido (sector, tamaño de empresa, cargo del decisor): [INTRODUCE AQUÍ]
- Herramientas actuales del equipo (CRM, LinkedIn Sales Navigator, herramientas de prospección): [INTRODUCE AQUÍ]
- Tamaño del equipo de ventas: [INTRODUCE AQUÍ]
- Métricas actuales de outreach (tasa de respuesta, tasa de apertura de emails, conexiones aceptadas en LinkedIn): [INTRODUCE AQUÍ]

**Diseño del sistema de sales intelligence**

**1. Fuentes de datos para la inteligencia de ventas**
Define las fuentes de datos que el equipo debe usar para construir el perfil de un prospecto antes de contactarlo. Clasifícalas en: datos de empresa (tamaño, sector, financiación, tecnologías usadas, noticias recientes, ofertas de empleo), datos de persona (cargo, historial profesional, publicaciones y contenido, grupos y comunidades), señales de compra (visitas al sitio web, interacción con contenido de la empresa, menciones de competidores) y datos de contexto (eventos del sector, cambios regulatorios, tendencias de mercado). Para cada fuente, indica las herramientas disponibles y el coste aproximado.

**2. Proceso de enriquecimiento de prospectos**
Define el proceso estándar para enriquecer un prospecto antes de contactarlo: qué buscar en LinkedIn, qué buscar en Google News sobre la empresa, qué herramientas usar para encontrar el email verificado, cómo usar las ofertas de trabajo como señal de intención (si buscan un Head of X es que X es una prioridad), y cómo integrar todo esto en el CRM de forma estructurada. Define el tiempo máximo que debe invertirse en el enriquecimiento de un prospecto por tier (5 min para tier C, 15 min para tier B, 30 min para tier A).

**3. Modelo de scoring de prospectos basado en datos**
Diseña el modelo de scoring para priorizar el trabajo del equipo de ventas. Define las variables de fit (¿el prospecto encaja en el ICP?) y las variables de timing (¿el prospecto está buscando una solución ahora?). Para cada variable, define el peso en el scoring total y cómo se recoge el dato (automáticamente vs. manualmente). Establece los umbrales de scoring que definen los tiers A, B y C.

**4. Personalización del outreach basada en datos**
La personalización no es poner el nombre del prospecto en el email: es demostrar que has hecho la tarea. Define el framework de personalización por nivel de esfuerzo: personalización de nivel 1 (basada en atributos del ICP, escalable), nivel 2 (basada en datos específicos de la empresa del prospecto, semi-escalable) y nivel 3 (basada en investigación profunda de la persona y el momento, solo para tier A). Para cada nivel, da un ejemplo de primer párrafo de email que demuestre la personalización.

**5. Integración de la sales intelligence en el flujo de trabajo del CRM**
Los datos solo tienen valor si están donde el vendedor los necesita en el momento de usarlos. Define cómo estructurar el CRM para que recoja y muestre la inteligencia de ventas: campos personalizados para las señales de compra, campos de enriquecimiento, proceso de actualización periódica de los datos, automatizaciones que alertan al vendedor cuando hay una señal de compra nueva en una cuenta y cómo documentar el historial de investigación para que el equipo comparta el conocimiento.

**6. Métricas de efectividad de la sales intelligence**
Define cómo medir si el sistema está funcionando: comparación de tasas de respuesta antes y después del enriquecimiento, tasa de conversión por tier de scoring, tiempo invertido en investigación vs. impacto en las tasas de conversión, y ROI del sistema (ingresos generados gracias a la inteligencia vs. coste de herramientas y tiempo). Establece los umbrales de éxito.

**Formato**
Incluye ejemplos concretos de emails personalizados y de fichas de prospecto en el CRM. Usa tablas para los modelos de scoring y las comparativas de herramientas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construcción de un sistema de sales intelligence para priorizar y personalizar el outreach',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 5,
                'title'           => 'Data governance para productos digitales: de la recogida al uso responsable de datos de usuarios',
                'description'     => 'Define la estrategia de datos del producto desde la perspectiva del Product Manager, estableciendo qué datos recoger, cómo protegerlos, cómo usarlos para mejorar el producto y cómo asegurar el cumplimiento normativo. Incluye el diseño del plan de tracking, la gestión del consentimiento y los principios de data minimization. Construye productos que usan datos con responsabilidad.',
                'prompt_content'  => <<<'EOT'
Eres un Product Manager especializado en product analytics y data governance. Sabes que los productos digitales modernos dependen de los datos para mejorar, pero que el acceso irresponsable a los datos del usuario genera riesgos legales, reputacionales y de confianza. Tu especialidad es ayudar a los equipos de producto a diseñar estrategias de datos que sean a la vez útiles para el negocio y respetuosas con la privacidad del usuario.

**Contexto del producto**
Para diseñar la estrategia de datos del producto necesito que proceses:

- Descripción del producto y sus funcionalidades principales: [INTRODUCE AQUÍ]
- Tipo de usuario y datos personales que el producto recopila actualmente: [INTRODUCE AQUÍ]
- Mercados donde opera el producto (relevante para la normativa: UE, EE.UU., etc.): [INTRODUCE AQUÍ]
- Herramientas de analytics actuales (Mixpanel, Amplitude, Google Analytics, custom): [INTRODUCE AQUÍ]
- Casos de uso de los datos (mejora del producto, personalización, ventas, publicidad): [INTRODUCE AQUÍ]

**Estrategia de datos del producto**

**1. Plan de tracking: qué medir y por qué**
El primer problema de datos en los productos es medir demasiado o medir lo incorrecto. Define el plan de tracking basado en las decisiones de producto que necesitas tomar: qué eventos son esenciales para medir el funnel de activación, qué propiedades de usuario son necesarias para la segmentación, qué métricas de engagement reflejan el valor que el usuario obtiene del producto y qué datos son agradables de tener pero no llevan a ninguna decisión. Elimina del plan todo lo que no tenga un caso de uso claro.

**2. Principios de data minimization y privacidad por diseño**
Define los principios que guiarán la recogida de datos del producto: recoger solo lo necesario (data minimization), definir la finalidad antes de recoger el dato (purpose limitation), dar al usuario control sobre sus datos (portabilidad, derecho al olvido), anonimizar o agregar los datos cuando sea posible antes de analizarlos, y no compartir datos con terceros sin una justificación clara y el consentimiento del usuario.

**3. Diseño del sistema de consentimiento**
El consentimiento no es solo un banner de cookies: es un sistema que gestiona qué datos puede procesar el producto para qué finalidad. Diseña el sistema completo: qué categorías de datos requieren consentimiento explícito, cómo presentar las opciones al usuario de forma comprensible (sin dark patterns), cómo almacenar y auditar las preferencias de consentimiento, cómo retirar el acceso a los datos cuando el usuario revoca el consentimiento y cómo impacta el estado del consentimiento en las funcionalidades del producto.

**4. Data governance del equipo de producto**
Los datos del producto los usan diferentes personas con diferentes niveles de acceso. Define la política de governance interna: quién tiene acceso a qué datos y con qué herramientas, proceso de solicitud de acceso a datos sensibles, reglas para el uso de datos de usuarios reales en entornos de desarrollo y test (siempre anonimizados), y proceso de revisión de privacidad para nuevas features (Privacy Review checklist).

**5. Gestión de incidentes de datos**
Tarde o temprano ocurre un problema con los datos: un bug que recoge más datos de los que debía, un acceso no autorizado o una fuga de datos. Define el plan de respuesta a incidentes de datos: cómo detectarlos (qué alertas), quién es el responsable de la respuesta (Data Protection Officer si aplica, equipo legal, comunicación), qué pasos seguir en las primeras 72 horas (especialmente crítico en Europa con el RGPD), cómo comunicarlo a los usuarios afectados y cómo documentar el incidente y las medidas correctoras.

**6. Métricas de calidad de datos del producto**
Los datos del producto solo son útiles si son de calidad. Define el sistema de monitoring de calidad de datos: completitud (¿llegan todos los eventos esperados?), precisión (¿los valores son correctos?), consistencia (¿los mismos eventos se registran igual en todos los dispositivos?), frescura (¿los datos están actualizados?) y latencia (¿cuánto tiempo tarda un evento en estar disponible para el análisis?). Define las alertas y los procesos de corrección.

**Formato**
Usa checklists para los procesos de revisión. Proporciona plantillas para el plan de tracking y para la Privacy Review checklist. Sé específico en las implicaciones del RGPD cuando el producto opera en Europa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseño de la estrategia de datos y governance para productos digitales',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 6,
                'title'           => 'People analytics: diseño de una estrategia de datos para RRHH',
                'description'     => 'Define cómo construir una función de people analytics en una empresa, desde la recogida de datos de empleados hasta la generación de insights que mejoran las decisiones de talento. Incluye las métricas esenciales, las fuentes de datos, el modelo de governance y los casos de uso de mayor impacto. Permite a RRHH pasar de decisiones intuitivas a decisiones basadas en evidencia.',
                'prompt_content'  => <<<'EOT'
Eres un experto en people analytics y en el uso de datos para mejorar la gestión del talento. Sabes que RRHH ha pasado históricamente de gestionar datos de manera reactiva y manual a tener la oportunidad de construir una función analítica que informe decisiones estratégicas de talento: quién contratar, quién está en riesgo de irse, qué formación tiene mayor impacto, cómo estructurar los equipos para maximizar el rendimiento. Tu especialidad es construir esta capacidad analítica de forma pragmática, adaptada a los recursos de cada organización.

**Contexto de la empresa**
Para diseñar la estrategia de people analytics necesito que proceses:

- Tamaño de la empresa (número de empleados): [INTRODUCE AQUÍ]
- Herramientas de RRHH actuales (HRIS, ATS, LMS, encuestas de engagement): [INTRODUCE AQUÍ]
- Madurez actual en datos de personas (sin datos estructurados, Excel, sistema básico, HRIS completo): [INTRODUCE AQUÍ]
- Casos de uso prioritarios (retención, selección, formación, diversidad, rendimiento): [INTRODUCE AQUÍ]
- Recursos disponibles (persona dedicada a analytics, presupuesto de herramientas): [INTRODUCE AQUÍ]

**Diseño de la estrategia de people analytics**

**1. Mapa de datos de personas disponibles**
Audita las fuentes de datos de personas que existen en la organización: datos estructurados en el HRIS (demografía, cargo, salario, antigüedad, ausencias, formación completada), datos del proceso de selección en el ATS, datos de rendimiento (evaluaciones, OKRs), datos de engagement (encuestas de clima, eNPS, pulso), datos de formación y datos de sistemas externos (LinkedIn, glassdoor si está disponible). Evalúa la calidad y la completitud de cada fuente.

**2. Casos de uso de people analytics por impacto**
Define los casos de uso de people analytics ordenados por impacto potencial y por viabilidad según los datos disponibles: predicción de churn de empleados de alto rendimiento, análisis de las causas del absentismo, efectividad de los canales de reclutamiento por calidad de contratación, correlación entre formación e indicadores de rendimiento, análisis de equidad salarial, y análisis de diversidad en la pipeline de promociones. Para cada caso de uso, define qué datos necesita y qué decisión facilita.

**3. Arquitectura de datos de personas**
Define cómo estructurar la base de datos de personas para habilitar el análisis: qué sistema es el master of record para cada tipo de dato, cómo integrar las diferentes fuentes (sincronización en tiempo real, batch diario, exportación manual), qué modelo de datos usar (schema simplificado con las entidades clave: empleado, cargo, formación, evaluación, evento laboral), y qué herramientas de analytics usar según el presupuesto y la madurez del equipo.

**4. Data governance específico para datos de personas**
Los datos de personas son especialmente sensibles. Define el modelo de governance: quién puede acceder a qué datos (managers ven su equipo, RRHH ve toda la empresa, dirección ve agregados), cómo anonimizar los datos en los informes para proteger la privacidad individual (nunca publicar datos de grupos de menos de 5-10 personas), cómo gestionar el consentimiento de los empleados para el uso de sus datos en analytics, y cómo cumplir con el RGPD en el contexto de los datos de empleados.

**5. Dashboard de people analytics para la dirección**
Diseña el dashboard mínimo viable de people analytics para la dirección de la empresa: métricas esenciales (headcount por departamento, turnover rate, time-to-hire, eNPS, coste de la rotación), cómo visualizarlas (tipo de gráfico, periodicidad de actualización), qué contexto y benchmarks del sector incluir, y cómo estructurar el informe mensual de RRHH para que comunique insights, no solo datos.

**6. Roadmap de madurez en people analytics**
La función de people analytics se construye progresivamente. Define el roadmap en cuatro etapas: nivel 1 - reporting (datos estructurados, KPIs básicos automatizados), nivel 2 - análisis descriptivo (tendencias, comparativas, benchmarks), nivel 3 - análisis predictivo (modelos de riesgo de churn, predicción de rendimiento) y nivel 4 - prescriptivo (recomendaciones automáticas de acción). Para cada nivel, define los prerrequisitos de datos, herramientas y equipo necesarios.

**Formato**
Usa tablas para los modelos de datos y los casos de uso. Incluye una checklist de governance para los datos de empleados. Sé específico en las limitaciones legales del uso de datos de personas en entornos europeos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseño de una función de people analytics y gestión de datos de talento',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 7,
                'title'           => 'Estrategia de datos financieros: MDM, calidad de datos y reporting regulatorio',
                'description'     => 'Define la arquitectura de master data management (MDM) para los datos financieros de una organización, garantizando la consistencia, la trazabilidad y la calidad de los datos que alimentan el reporting regulatorio, los estados financieros y los modelos de riesgo. Incluye la gestión de datos maestros, los procesos de reconciliación y los controles de calidad. Reduce el riesgo de errores en el reporting financiero.',
                'prompt_content'  => <<<'EOT'
Eres un CFO y arquitecto de datos financieros con experiencia en empresas que operan bajo requisitos regulatorios estrictos (IFRS, SOX, Basilea, GDPR financiero). Sabes que la calidad de los datos financieros no es un problema técnico: es un problema de gobierno corporativo. Un error en el dato maestro de una cuenta puede propagarse a cientos de informes y generar sanciones regulatorias, decisiones erróneas o auditorías fallidas. Tu especialidad es construir los sistemas y procesos que garantizan la integridad de los datos financieros de extremo a extremo.

**Contexto de la organización**
Para diseñar la estrategia de datos financieros necesito que proceses:

- Tipo de empresa y sector (financiero, industrial, retail, etc.): [INTRODUCE AQUÍ]
- Requisitos regulatorios aplicables: [INTRODUCE AQUÍ]
- Sistemas financieros actuales (ERP, subledgers, herramientas de consolidación): [INTRODUCE AQUÍ]
- Principales problemas de datos financieros que existen hoy (duplicados, inconsistencias, datos faltantes): [INTRODUCE AQUÍ]
- Tamaño del equipo de finanzas y del equipo de datos: [INTRODUCE AQUÍ]

**Diseño de la estrategia de datos financieros**

**1. Diagnóstico de calidad de datos financieros**
Antes de diseñar la solución, hay que entender el problema. Define el proceso de diagnóstico de calidad de datos: qué dimensiones de calidad evaluar (completitud, precisión, consistencia, unicidad, validez, actualidad), cómo realizar el inventario de entidades financieras críticas (plan de cuentas, centros de coste, entidades legales, clientes, proveedores, proyectos), y cómo cuantificar el impacto económico de los problemas de calidad actuales (tiempo de reconciliación, errores en el reporting, ajustes post-cierre).

**2. Diseño del sistema de Master Data Management (MDM) financiero**
Define la arquitectura de MDM para las entidades financieras críticas: plan de cuentas unificado, jerarquía de centros de coste y entidades legales, maestro de clientes y proveedores. Para cada entidad maestra, define: sistema de record (quién es la fuente de verdad), proceso de creación y modificación (aprobaciones, validaciones), proceso de sincronización con los sistemas dependientes y política de mantenimiento (quién y cuándo revisa los datos maestros).

**3. Controles de calidad de datos en el proceso de cierre financiero**
El cierre financiero mensual o trimestral es el momento de mayor riesgo de datos. Diseña el sistema de controles: controles automáticos (validaciones en el ERP antes de publicar asientos), controles de reconciliación (cuadre entre subledgers y libro mayor, cuadre entre sistemas), controles analíticos (variaciones fuera de rango que activan una alerta), y el proceso de gestión de excepciones (quién investiga, en qué plazo y cómo documentar la resolución).

**4. Arquitectura de datos para el reporting regulatorio**
El reporting regulatorio (IFRS, Sox, Basilea, Solvencia II, etc.) impone requisitos de trazabilidad que la mayoría de arquitecturas de datos financieros no pueden satisfacer. Diseña la arquitectura que garantiza la auditabilidad: linaje de datos completo (desde el dato de origen hasta el dato publicado en el informe), versionado de los datos históricos (nunca sobreescribir, siempre añadir versión), segregación de la preparación y la aprobación del dato, y registro de auditoría inmutable (quién cambió qué dato, cuándo y por qué).

**5. Democratización de los datos financieros con control de acceso**
Los datos financieros deben ser accesibles para quien los necesita para tomar decisiones, pero protegidos para evitar usos inapropiados. Define el modelo de acceso: qué datos pueden ver los managers de negocio (su P&L, su presupuesto, sus KPIs), qué datos son exclusivos del equipo de finanzas, cómo gestionar el acceso a datos sensibles (salarios, márgenes por cliente, información de M&A), y cómo construir un portal de self-service financiero que reduzca las peticiones ad-hoc al equipo de finanzas.

**6. KPIs de calidad de datos financieros**
Define las métricas que demuestran que la estrategia de datos financieros está funcionando: tasa de errores detectados post-cierre (objetivo: cero), tiempo de reconciliación (objetivo: reducción del 50% en 12 meses), tasa de datos maestros duplicados (objetivo: <1%), tiempo de respuesta a peticiones de auditoría (objetivo: <24 horas) y coste del proceso de cierre (objetivo: reducción sostenida año a año).

**Formato**
Usa diagramas de flujo en texto para los procesos de control. Incluye tablas comparativas de herramientas de MDM. Sé específico en los requisitos de cada normativa regulatoria cuando sea relevante.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'MDM y governance de datos financieros para reporting regulatorio',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 8,
                'title'           => 'Arquitectura de datos bajo RGPD: data flows, registros de tratamiento y transferencias internacionales',
                'description'     => 'Define la arquitectura de datos de una organización desde el prisma del cumplimiento del RGPD, incluyendo el mapeo de flujos de datos, el registro de actividades de tratamiento, la gestión de transferencias internacionales y la implementación de los derechos de los interesados. Permite a los equipos legales y técnicos diseñar sistemas que cumplen con la normativa desde el diseño.',
                'prompt_content'  => <<<'EOT'
Eres un abogado especializado en derecho de protección de datos y un arquitecto de datos con experiencia en el diseño de sistemas que cumplen con el RGPD (Reglamento General de Protección de Datos). Sabes que el cumplimiento del RGPD no es una cuestión de checkbox: es una decisión de diseño que debe tomarse desde el principio del desarrollo de cualquier sistema que procese datos personales. Tu especialidad es traducir los requisitos legales del RGPD en decisiones técnicas concretas de arquitectura de datos.

**Contexto de la organización**
Para diseñar la arquitectura de datos bajo RGPD necesito que proceses:

- Descripción de la organización y los datos personales que procesa: [INTRODUCE AQUÍ]
- Sistemas principales que contienen datos personales (CRM, ERP, plataforma de marketing, app, etc.): [INTRODUCE AQUÍ]
- Países donde se procesan los datos y si hay transferencias fuera de la UE/EEE: [INTRODUCE AQUÍ]
- Terceros con los que se comparten datos (proveedores de cloud, herramientas SaaS, agencias): [INTRODUCE AQUÍ]
- Estado actual del cumplimiento del RGPD (sin medidas formales, parcialmente implementado, auditado): [INTRODUCE AQUÍ]

**Diseño de la arquitectura de datos bajo RGPD**

**1. Mapeo de flujos de datos personales**
El primer paso del cumplimiento del RGPD es saber exactamente qué datos personales se procesan. Diseña el proceso de mapeo: cómo identificar todos los sistemas que contienen datos personales, cómo documentar los flujos de datos entre sistemas (data flows), qué información capturar para cada flujo (tipo de dato, finalidad del tratamiento, base legal, destinatarios, plazo de conservación), y cómo mantener este mapa actualizado cuando cambia la arquitectura.

**2. Registro de Actividades de Tratamiento (RAT)**
El artículo 30 del RGPD exige mantener un registro de las actividades de tratamiento. Diseña el RAT completo para la organización: qué actividades de tratamiento existen (marketing, gestión de clientes, gestión de empleados, análisis, etc.), para cada actividad qué información debe incluir el registro (responsable, finalidad, categorías de datos, destinatarios, transferencias internacionales, plazos de conservación, medidas de seguridad), y cómo gestionar el RAT como documento vivo que se actualiza con cada cambio de sistema.

**3. Base legal y gestión del consentimiento**
Cada tratamiento de datos personales necesita una base legal. Para cada actividad de tratamiento identificada, define: qué base legal es la más adecuada (consentimiento, contrato, obligación legal, interés legítimo), si se usa el consentimiento, cómo debe recogerse (granular, informado, libre, específico), cómo almacenar y auditar las preferencias de consentimiento, y cómo gestionar la retirada del consentimiento en todos los sistemas.

**4. Gestión de transferencias internacionales**
Si los datos se transfieren fuera de la UE/EEE, el RGPD impone requisitos adicionales. Para cada transferencia identificada, define: el mecanismo de adecuación aplicable (Decisión de adecuación de la Comisión, Cláusulas Contractuales Tipo, Binding Corporate Rules), cómo documentar la transferencia en el RAT, qué evaluación del impacto de la transferencia (TIA) es necesaria tras la sentencia Schrems II, y qué garantías adicionales son necesarias si el país destino no ofrece el nivel de protección equivalente.

**5. Implementación técnica de los derechos de los interesados**
El RGPD otorga a los individuos derechos sobre sus datos que la arquitectura técnica debe poder satisfacer. Define la implementación técnica de cada derecho: acceso (cómo generar un informe completo de todos los datos de una persona en todos los sistemas), rectificación (cómo propagar una corrección a todos los sistemas), supresión o "derecho al olvido" (cómo eliminar o anonimizar los datos de una persona en todos los sistemas sin romper la integridad referencial), portabilidad (en qué formato exportar los datos) y oposición (cómo gestionar la exclusión del marketing o del perfilado). Incluye los plazos legales de respuesta para cada derecho.

**6. Evaluación de Impacto en la Protección de Datos (EIPD/DPIA)**
Algunos tratamientos de datos de alto riesgo requieren una Evaluación de Impacto (DPIA) antes de implementarlos. Define: qué criterios determinan si un tratamiento requiere DPIA (artículo 35 del RGPD y directrices del EDPB), el proceso para realizar una DPIA (descripción del tratamiento, evaluación de la necesidad, evaluación de los riesgos, medidas para mitigarlos), y quién debe participar en la DPIA (DPO, equipo técnico, equipo legal, negocio).

**Nota legal**
Este análisis es orientativo y no reemplaza el asesoramiento de un especialista en protección de datos para tu situación específica. El RGPD se aplica de forma diferente según el tipo de tratamiento y el sector.

**Formato**
Usa tablas para el RAT y para el mapa de flujos de datos. Incluye checklists para la DPIA y para la implementación de los derechos. Diferencia claramente las obligaciones legales de las buenas prácticas recomendadas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Cumplimiento del RGPD en la arquitectura de datos de una organización',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 9,
                'title'           => 'Uso de datos de clientes para mejorar el Customer Success: health scores y señales de expansión',
                'description'     => 'Define cómo construir un sistema de datos para el equipo de Customer Success que permita priorizar la atención, detectar clientes en riesgo y identificar oportunidades de expansión. Incluye el diseño del health score, las señales de comportamiento y la integración con el CRM. Permite al equipo de CS pasar de una gestión reactiva a una gestión proactiva y escalable.',
                'prompt_content'  => <<<'EOT'
Eres un experto en Customer Success Operations y en el diseño de sistemas de datos para equipos de CS. Sabes que el mayor desafío de un equipo de Customer Success en crecimiento es la escalabilidad: no puedes dedicar el mismo tiempo a todos los clientes, y si no tienes datos para priorizar, terminas gestionando en modo reactivo, apagando fuegos en lugar de prevenirlos. Tu especialidad es construir los sistemas de datos que permiten al equipo de CS ser proactivo y operar a escala.

**Contexto del equipo de CS**
Para diseñar el sistema de datos de Customer Success necesito que proceses:

- Tipo de producto y modelo de negocio (SaaS, servicios, marketplace): [INTRODUCE AQUÍ]
- Número de clientes activos y distribución (muchas cuentas pequeñas, pocas cuentas grandes, mix): [INTRODUCE AQUÍ]
- Herramientas actuales (CRM, plataforma de CS, herramientas de analytics del producto): [INTRODUCE AQUÍ]
- Datos de comportamiento del producto disponibles (eventos trackeados, métricas de uso): [INTRODUCE AQUÍ]
- Métricas de CS actuales (NRR, churn rate, tasa de expansión): [INTRODUCE AQUÍ]

**Diseño del sistema de datos de Customer Success**

**1. Diseño del Customer Health Score**
El health score es el KPI central del sistema de datos de CS. Diseña el modelo de health score para tu base de clientes: qué dimensiones incluir (uso del producto, satisfacción, relación, valor obtenido, riesgo financiero), cómo ponderarlas según su correlación con el churn o la expansión, qué datos concretos alimentan cada dimensión (métricas de uso del producto, frecuencia de login, NPS, tickets abiertos, contactos de negocio, estado del pago), y cómo escalar el score (0-100, con zonas de riesgo, alerta y salud).

**2. Señales de riesgo de churn**
Antes de que un cliente cancele, siempre hay señales. Define el catálogo de señales de riesgo que deben monitorizar el sistema y el equipo de CS: señales de comportamiento (caída del uso, abandono de features críticas, login infrecuente), señales relacionales (falta de respuesta, cambio del champion, quejas recurrentes en soporte), señales de negocio (dificultades financieras del cliente, reestructuración, fusión) y señales de contexto (entra un competidor en el sector del cliente). Para cada señal: cómo detectarla, tiempo de respuesta esperado y protocolo de intervención.

**3. Señales de oportunidad de expansión**
Los clientes que están listos para expandir también envían señales. Define el catálogo de señales de expansión: uso intensivo de features del tier actual, solicitudes de funcionalidades del tier superior, crecimiento del equipo del cliente (nuevas contrataciones en LinkedIn), éxito demostrado con el producto (casos de uso nuevos, resultados publicados), y solicitudes de integración con otras herramientas. Para cada señal, define el protocolo de contacto de expansión.

**4. Segmentación de clientes para priorización del CS**
Con datos, el equipo de CS puede priorizar en lugar de atender igual a todos. Define el modelo de segmentación: tier estratégico (basado en ARR y potencial de expansión), tier de salud (basado en el health score), tier de riesgo (basado en probabilidad de churn en los próximos 90 días), y modelo de atención por segmento (qué tipo de CS atiende a cada segmento, con qué frecuencia y a través de qué canal).

**5. Dashboard de CS Operations**
Define el dashboard que el equipo de CS y el director de CS deben ver diariamente: clientes en zona roja del health score (acción inmediata requerida), clientes en zona de expansión (oportunidad de upsell activa), métricas de portfolio (distribución de clientes por health score, NRR por segmento, tasa de churn por tier), y KPIs del equipo (número de intervenciones, tiempo de respuesta, tasa de rescate de cuentas en riesgo).

**6. Roadmap de madurez del sistema de datos de CS**
El sistema de datos de CS se construye por etapas. Define el roadmap: nivel 1 - datos básicos (CRM con datos de cuenta actualizados, health score manual), nivel 2 - datos de producto integrados (health score automatizado con datos de uso), nivel 3 - segmentación dinámica y alertas automáticas, nivel 4 - modelos predictivos de churn y expansión. Para cada nivel, define las herramientas necesarias, el tiempo de implementación y el impacto esperado en las métricas de CS.

**Formato**
Incluye la fórmula del health score con los pesos. Usa tablas para el catálogo de señales. Proporciona el esquema del dashboard con los módulos que incluye.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseño de health scores y sistemas de datos para Customer Success escalable',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 10,
                'title'           => 'Democratización de datos para freelancers: cómo usar analytics sin ser data scientist',
                'description'     => 'Enseña a los profesionales independientes a tomar decisiones de negocio basadas en datos usando herramientas accesibles, sin necesidad de conocimientos técnicos avanzados. Incluye el seguimiento de métricas de negocio freelance, el análisis de clientes y proyectos, y la visualización de datos para comunicar valor. Convierte los datos en ventaja competitiva para el freelancer.',
                'prompt_content'  => <<<'EOT'
Eres un consultor de negocio freelance y entusiasta de los datos. Sabes que los freelancers toman la mayoría de sus decisiones de negocio de forma intuitiva: qué clientes aceptar, qué precio cobrar, en qué servicios especializarse, cuándo subir tarifas. Pero las mismas herramientas de datos que usan las grandes empresas están disponibles para cualquier profesional independiente, muchas veces de forma gratuita. Tu especialidad es enseñar a los freelancers a usar datos sin necesidad de ser data scientists.

**Contexto del freelancer**
Para diseñar la estrategia de datos del negocio freelance necesito que proceses:

- Tipo de servicio freelance y número de clientes activos: [INTRODUCE AQUÍ]
- Modelo de facturación (por hora, por proyecto, retainer mensual): [INTRODUCE AQUÍ]
- Herramientas que ya usas (facturación, gestión de proyectos, email, CRM básico): [INTRODUCE AQUÍ]
- Principales decisiones de negocio que te gustaría tomar con más datos: [INTRODUCE AQUÍ]
- Nivel de comodidad con hojas de cálculo o Excel (básico, medio, avanzado): [INTRODUCE AQUÍ]

**Sistema de datos para el negocio freelance**

**1. Las 10 métricas esenciales de un negocio freelance**
Define las métricas que todo freelancer debería seguir de forma sistemática: ingresos mensuales brutos y netos, tasa de ocupación (horas facturadas vs. horas disponibles), ingreso por hora efectivo (incluyendo el tiempo no facturado de gestión y ventas), número de clientes activos y distribución del revenue por cliente, tasa de conversión de propuestas enviadas, tasa de renovación o repetición de clientes, coste de adquisición de clientes (tiempo invertido en ventas + costes de marketing), tiempo de pago medio, margen por tipo de proyecto y net promoter score informal. Para cada métrica, explica cómo calcularla con datos básicos.

**2. Sistema de seguimiento de datos con herramientas accesibles**
Diseña el sistema de seguimiento de datos adaptado al nivel de madurez indicado: desde una hoja de cálculo en Google Sheets hasta herramientas como Notion, Airtable o el CRM básico que ya usa el freelancer. Define la estructura de datos: tabla de clientes (campos esenciales), tabla de proyectos (ingresos, horas, tipo, estado), tabla de propuestas (enviadas, aceptadas, rechazadas, en seguimiento) y tabla de gastos (por categoría). Incluye las fórmulas básicas de Google Sheets para calcular automáticamente las métricas esenciales.

**3. Análisis de la rentabilidad por cliente y tipo de proyecto**
No todos los clientes ni todos los proyectos son igual de rentables, aunque facturen lo mismo. Define el proceso de análisis de rentabilidad: cómo calcular el ingreso por hora real de cada cliente (incluyendo reuniones, revisiones, comunicación administrativa), cómo identificar qué tipos de proyectos tienen mayor margen y menor fricción, y cómo usar este análisis para tomar decisiones de qué clientes priorizar, qué tipos de proyectos aceptar y cuándo subir tarifas a clientes poco rentables.

**4. Visualización de datos para comunicar valor a clientes**
Los datos no son solo para las decisiones internas: son también una herramienta para comunicar el valor que el freelancer genera. Define cómo usar datos para construir informes de impacto para los clientes: qué métricas incluir (resultados del proyecto, hitos alcanzados, comparación con objetivos), cómo visualizarlas de forma sencilla (Google Slides, Canva, Notion), y cuándo enviar un informe de progreso que fortalezca la relación y justifique la renovación.

**5. Forecasting y planificación financiera del negocio freelance**
La incertidumbre de los ingresos es el mayor riesgo del trabajo freelance. Define el proceso de forecasting básico: cómo proyectar los ingresos de los próximos 3 meses (contratos existentes + probabilidad de renovación + pipeline de nuevos clientes), cómo establecer un colchón de seguridad mínimo (meses de gastos cubiertos), cómo planificar las épocas de menor actividad y cuándo la proyección de ingresos justifica subir tarifas o invertir en un nuevo servicio.

**6. Toma de decisiones basada en datos para el freelancer**
Define un proceso de revisión de datos mensual y trimestral para el negocio freelance: qué revisar cada mes (ingresos, ocupación, pipeline), qué revisar cada trimestre (rentabilidad por cliente, posicionamiento, evolución de tarifas), qué preguntas hacerse al revisar los datos y cómo convertir los insights en decisiones de negocio concretas. Incluye una plantilla de la revisión mensual con las preguntas que el freelancer debe responder con sus datos.

**Formato**
Usa un lenguaje accesible para no-técnicos. Incluye fórmulas de Google Sheets cuando sea útil. Proporciona plantillas de hojas de cálculo en formato texto que el freelancer pueda replicar directamente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Sistema de métricas y decisiones basadas en datos para freelancers',
                'vote_score'       => 35,
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
