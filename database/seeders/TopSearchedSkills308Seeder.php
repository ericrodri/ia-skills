<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills308Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Data culture en marketing: construir el equipo que toma decisiones con datos',
                'description'       => 'Transforma el equipo de marketing en uno verdaderamente data-driven: define los KPIs que importan, construye dashboards accionables y crea los rituales de decisión que hacen que los datos guíen cada campaña.',
                'prompt_content'    => <<<'PROMPT'
Eres un director de marketing analítico con experiencia en transformar equipos creativos en equipos orientados a datos sin destruir la intuición creativa que los hace efectivos. Necesito que me ayudes a construir una cultura de datos real en mi equipo de marketing.

**Mi contexto:**
- Tamaño del equipo de marketing: [número de personas]
- Nivel actual de madurez analítica: [no miramos datos / miramos pero no decidimos con ellos / somos parcialmente data-driven]
- Stack de herramientas actual: [Google Analytics, HubSpot, Salesforce, Meta Ads Manager, etc.]
- Principal problema: [no sabemos qué métricas mirar / los datos no llegan a tiempo / el equipo no confía en los datos / falta de herramientas]
- Tipo de marketing: [B2B / B2C / e-commerce / SaaS / generación de leads]

Desarrolla una guía completa para construir la cultura de datos:

**1. Diagnóstico de la madurez analítica del equipo**
Explica cómo evaluar el estado actual de la cultura de datos en el equipo de marketing usando un modelo de madurez de cuatro niveles: reactivo (solo miran los datos cuando algo va mal), descriptivo (reportan lo que pasó), predictivo (anticipan tendencias) y prescriptivo (los datos informan cada decisión antes de ejecutarla). Define las señales de diagnóstico para cada nivel y cómo identificar en cuál está el equipo ahora mismo.

**2. Los KPIs de marketing que realmente importan**
Diseña la jerarquía de métricas de marketing correcta: métricas de negocio (revenue, CAC, LTV, ROI de marketing), métricas de canal (CPC, tasa de conversión, coste por lead cualificado), y métricas de actividad (impresiones, clics, aperturas de email). Explica la trampa de las vanity metrics y cómo convencer al equipo y a la dirección de dejar de reportar las métricas que se ven bien pero no predicen el negocio. Cuáles son las 5-7 métricas máximas que un equipo de marketing debería monitorizar de manera semanal.

**3. Construcción del dashboard de marketing**
Detalla cómo construir un dashboard de marketing efectivo: la diferencia entre un dashboard operativo (para el equipo, diario) y un dashboard ejecutivo (para la dirección, semanal o mensual), qué herramientas usar según el presupuesto (Google Looker Studio gratuito, Tableau, Power BI, o dashboards nativos de HubSpot/Salesforce), cómo organizar el dashboard para que cuente una historia en lugar de mostrar un montón de números, qué visualizaciones usar para cada tipo de métrica.

**4. El modelo de atribución correcto para marketing**
Explica los modelos de atribución de marketing y cuándo usar cada uno: last-click (simple pero engañoso), first-click (útil para medir awareness), multi-touch lineal, data-driven attribution con machine learning, y el modelo de atribución en marketing B2B con ciclos de venta largos donde participan múltiples canales a lo largo de semanas o meses. Cómo elegir el modelo correcto según el tipo de negocio y las capacidades del equipo.

**5. Rituales de datos en el equipo de marketing**
Describe los rituales que institutcionalizan la toma de decisiones basada en datos: la reunión semanal de métricas (30 minutos, qué revisar, quién presenta, qué decisiones se toman en esa sesión), el sprint de análisis posterior a cada campaña (qué funcionó, qué no, qué cambiamos la próxima vez), la revisión mensual de KPIs con la dirección (cómo presentar los datos de manera ejecutiva), el proceso de hipótesis y experimento antes de lanzar cualquier iniciativa mayor.

**6. Experimentación y testing como cultura**
Explica cómo instalar la mentalidad de experimento en el equipo de marketing: cómo formular una hipótesis correcta antes de un test, diseño de A/B tests con significancia estadística suficiente, cómo priorizar qué experimentos correr primero (impacto esperado vs facilidad de implementación), cómo documentar y compartir los aprendizajes de cada test para que el equipo aprenda de manera acumulativa, cuántos tests se pueden correr en paralelo sin contaminar los resultados.

**7. Democratización de los datos en marketing**
Detalla cómo hacer que cada miembro del equipo de marketing pueda acceder y trabajar con datos sin depender de un analista o del equipo de datos: formación básica en SQL para marketers, herramientas de self-service analytics como Metabase o Looker, cómo definir un diccionario de datos para que todos usen las mismas definiciones de métricas, el papel del marketing ops como el puente entre el equipo de datos y el equipo de marketing.

**8. Datos y creatividad: el falso dilema**
Explica cómo los datos y la creatividad se potencian mutuamente en lugar de excluirse: los datos para identificar el problema (qué mensaje no está resonando, qué segmento tiene más potencial) y la creatividad para resolverlo, cómo usar los datos cualitativos (entrevistas, encuestas, grabaciones de sesión) junto con los cuantitativos para entender el "porqué" detrás de los números, los ejemplos de las mejores campañas de marketing de los últimos años que combinaron análisis riguroso con ejecución creativa brillante.

Termina con un plan de transformación de 90 días: las acciones prioritarias para los primeros 30 días (definir métricas, instalar herramientas básicas), los cambios de proceso en los siguientes 30 días (rituales de datos) y los primeros resultados medibles a los 90 días que indicarán que la cultura de datos está arraigando.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Transformar el equipo de marketing en uno data-driven con KPIs, dashboards y rituales de decisión',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Data engineering: construir los pipelines que alimentan las decisiones de negocio',
                'description'       => 'Diseña pipelines de datos robustos y escalables: arquitectura de data warehouse, orquestación con dbt y Airflow, calidad de datos y entrega de datos confiables que el negocio pueda usar para decidir.',
                'prompt_content'    => <<<'PROMPT'
Eres un data engineer senior con experiencia en la construcción de plataformas de datos para empresas en fase de crecimiento. Necesito que me ayudes a diseñar e implementar una arquitectura de data engineering que sea robusta, escalable y que realmente sirva para tomar decisiones de negocio.

**Mi contexto:**
- Fase de la empresa: [startup / scale-up / empresa establecida]
- Volumen de datos actual: [gigabytes / terabytes / petabytes]
- Fuentes de datos principales: [CRM, base de datos de producto, APIs externas, eventos de usuario, etc.]
- Stack tecnológico actual: [bases de datos, cloud provider, herramientas existentes]
- Equipo de datos: [solo yo / 2-3 personas / equipo mayor]
- Principal problema: [los datos no son confiables / no hay una fuente única de verdad / los pipelines se rompen constantemente / los analistas no pueden acceder a los datos que necesitan]

Desarrolla una guía completa de data engineering orientada al impacto de negocio:

**1. La arquitectura de datos correcta para tu fase**
Explica las arquitecturas de datos más comunes y cuándo usar cada una: la arquitectura ETL clásica (Extract, Transform, Load), el enfoque ELT moderno donde la transformación ocurre dentro del warehouse, la arquitectura Medallion (Bronze/Silver/Gold) popularizada por Databricks, y el Data Lakehouse que combina la flexibilidad del data lake con las capacidades analíticas del warehouse. Cómo elegir la arquitectura correcta según el volumen de datos, el equipo disponible y los casos de uso del negocio.

**2. El data warehouse moderno**
Detalla las opciones de data warehouse cloud y cuándo elegir cada una: Snowflake (flexibilidad y separación de compute y storage), BigQuery (serverless, integración con Google ecosystem, pricing por query), Redshift (si ya estás en AWS), DuckDB (para análisis local o equipos pequeños). Cómo diseñar el esquema del warehouse: star schema vs snowflake schema, la importancia de las tablas de dimensiones y hechos, cómo manejar los cambios de esquema sin romper los pipelines existentes (Slowly Changing Dimensions).

**3. Ingesta de datos con herramientas modernas**
Explica las herramientas de ingesta de datos y cuándo usar cada una: Fivetran y Airbyte para la ingesta de datos de fuentes SaaS sin código, Kafka para streaming de eventos en tiempo real, Debezium para Change Data Capture (CDC) desde bases de datos transaccionales, APIs personalizadas para fuentes que no tienen conector estándar. Cómo gestionar la ingesta incremental vs la carga completa, y cuándo cada enfoque es el correcto.

**4. Transformaciones con dbt**
Profundiza en dbt como estándar de la industria para transformaciones SQL en el data warehouse: la estructura de proyectos de dbt (models, tests, sources, seeds, snapshots), cómo organizar los modelos en capas (staging, intermediate, marts), la importancia de los tests en dbt (not_null, unique, accepted_values, relationships), cómo documentar los modelos para que los analistas entiendan qué hay en cada tabla, dbt Cloud vs dbt Core y cuándo usar cada uno.

**5. Orquestación con Apache Airflow**
Explica cómo diseñar y gestionar pipelines de datos con Apache Airflow: la estructura de un DAG (Directed Acyclic Graph), cómo manejar las dependencias entre tareas, los operadores más usados (PythonOperator, BashOperator, SparkSubmitOperator), cómo gestionar los reintentos y el manejo de errores, las mejores prácticas para evitar los problemas más comunes (DAGs que tardan demasiado, tareas que fallan silenciosamente). Alternativas modernas a Airflow: Prefect, Dagster y cuándo considerarlas.

**6. Calidad de datos: el problema que destruye la confianza**
Detalla un framework de data quality que garantice que los datos que llegan al negocio son correctos y confiables: las dimensiones de calidad de datos (completitud, unicidad, validez, consistencia, oportunidad), herramientas de data quality como Great Expectations, dbt tests y Monte Carlo, cómo implementar alertas cuando los datos están fuera de los rangos esperados, el proceso de gestión de incidentes de datos (data incident management) para cuando algo falla.

**7. Data observability y monitorización de pipelines**
Explica cómo construir visibilidad sobre el estado de los pipelines de datos: métricas de pipeline (latencia, tasa de éxito, volumen de filas procesadas), dashboards de observabilidad de datos, herramientas como Monte Carlo, Bigeye o Datafold para detectar anomalías automáticamente, cómo comunicar el estado del pipeline de datos a los stakeholders de negocio de manera comprensible para no-técnicos.

**8. Datos en tiempo real vs datos en batch**
Describe cuándo necesitas datos en tiempo real y cuándo el batch es suficiente: los casos de uso que requieren streaming (detección de fraude, personalización en tiempo real, alertas operativas), los casos donde el batch diario o cada hora es perfectamente válido (reporting, análisis de tendencias, ML training), el coste y la complejidad adicional del streaming y cómo justificarlo ante el negocio, herramientas de procesamiento en streaming (Apache Kafka, Flink, Spark Streaming, AWS Kinesis).

**9. Governance y seguridad de datos**
Detalla las prácticas de data governance que todo data engineer debe implementar: control de acceso basado en roles (RBAC) en el warehouse, enmascaramiento de datos sensibles (PII, datos financieros), linaje de datos para entender de dónde vienen los datos y cómo se transforman, cumplimiento con GDPR y otras regulaciones de privacidad en los pipelines, el catálogo de datos como herramienta para que el negocio sepa qué datos están disponibles.

Termina con una arquitectura de referencia completa para una empresa en fase de crecimiento con el stack tecnológico recomendado, el diagrama de flujo de los datos desde las fuentes hasta el consumo, y el orden en que implementarías cada capa si partieras desde cero hoy.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Diseñar e implementar pipelines de datos robustos que alimentan decisiones de negocio confiables',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Data-informed design: incorporar los datos en el proceso creativo sin matar la intuición',
                'description'       => 'Aprende a combinar el análisis cuantitativo y cualitativo con la intuición del diseñador: métricas de UX, A/B testing de diseño y un proceso de decisión que mejora los resultados sin convertirte en esclavo de los datos.',
                'prompt_content'    => <<<'PROMPT'
Eres un director de UX con experiencia en organizaciones donde el diseño compite por recursos con el desarrollo y el negocio, y has aprendido a usar los datos para defender las decisiones de diseño y mejorar los resultados sin sacrificar la visión creativa. Necesito que me ayudes a incorporar los datos en mi proceso de diseño.

**Mi contexto:**
- Rol actual: [UX designer, product designer, design lead, etc.]
- Tipo de producto: [app móvil, web app, e-commerce, SaaS, etc.]
- Acceso a datos cuantitativos: [Google Analytics, Mixpanel, Amplitude, ninguno]
- Acceso a datos cualitativos: [sesiones de usuario, encuestas, entrevistas, ninguno]
- Principal problema: [mis diseños se rechazan sin datos que los respalden / no sé qué medir / los datos contradicen mi intuición y no sé qué hacer]
- Nivel de experiencia con datos: [básico / intermedio / avanzado]

Desarrolla una guía completa de design data literacy:

**1. La diferencia entre data-driven y data-informed**
Explica la distinción fundamental entre diseño data-driven (los datos dictan el diseño) y diseño data-informed (los datos informan el diseño): por qué el diseño puramente data-driven puede optimizar para métricas locales y destruir la experiencia global (el problema de optimizar el botón y perder el usuario), por qué ignorar los datos lleva a decisiones basadas en la opinión del hipopótamo (HiPPO: Highest Paid Person's Opinion), y cómo encontrar el equilibrio donde los datos guían pero la intuición del diseñador da forma a la solución.

**2. Las métricas de UX que realmente importan**
Define la jerarquía de métricas de UX: métricas de negocio (conversión, retención, ingresos), métricas de experiencia (tasa de error, tiempo para completar tarea, satisfacción medida con CSAT o NPS), y métricas de engagement (sesiones, tiempo en pantalla, funcionalidades usadas). El framework HEART de Google (Happiness, Engagement, Adoption, Retention, Task Success) para medir la calidad de la experiencia. Cómo elegir las métricas correctas según el tipo de producto y el problema de diseño.

**3. Análisis cuantitativo para diseñadores**
Explica las técnicas de análisis cuantitativo que todo diseñador debe dominar: análisis de funnels para identificar dónde abandonan los usuarios en un proceso, mapas de calor y grabaciones de sesión con herramientas como Hotjar o FullStory, análisis de cohortes para entender cómo se comportan los usuarios a lo largo del tiempo, análisis de eventos con herramientas de product analytics como Mixpanel o Amplitude. Cómo interpretar los datos sin tener conocimientos estadísticos avanzados.

**4. Investigación cualitativa como complemento indispensable**
Detalla cómo combinar los datos cuantitativos (el "qué") con la investigación cualitativa (el "porqué"): entrevistas contextuales para entender el problema detrás del número, pruebas de usabilidad moderadas y no moderadas para observar cómo los usuarios interactúan con el diseño, diarios de usuario para entender el comportamiento fuera del contexto del producto, análisis de tickets de soporte y reseñas como fuente de investigación cualitativa rápida.

**5. A/B testing para diseñadores**
Explica el proceso correcto de A/B testing en diseño: cómo formular una hipótesis de diseño correcta (basada en un problema observado, no en preferencias estéticas), los conceptos estadísticos mínimos que el diseñador necesita entender (significancia estadística, tamaño de muestra, duración del test), cómo interpretar los resultados cuando la variante gana, pierde o el resultado no es estadísticamente significativo, las limitaciones del A/B testing en diseño (no testa la solución correcta al problema equivocado).

**6. Cómo usar los datos para defender las decisiones de diseño**
Detalla cómo construir el business case para las decisiones de diseño usando datos: presentar los datos de usuario que identifican el problema antes de proponer la solución, cuantificar el impacto esperado de una mejora de diseño en términos de negocio, cómo responder a la pregunta "¿tienes datos que respalden esto?" cuando no tienes un A/B test pero sí tienes investigación cualitativa, cómo comunicar los resultados de los tests de diseño a stakeholders no técnicos.

**7. El proceso de diseño data-informed paso a paso**
Define un proceso de diseño que integra los datos de manera estructurada: fase de descubrimiento (análisis de datos para identificar el problema, investigación cualitativa para entenderlo), fase de definición (priorización de problemas basada en impacto medido), fase de ideación (benchmarks y patrones basados en datos de la industria), fase de prototipado (prototipos que hipotetan sobre métricas concretas), fase de validación (pruebas con usuarios y medición post-lanzamiento).

**8. Cuando los datos contradicen la intuición**
Explica qué hacer en las situaciones más difíciles: cuando el A/B test dice que la versión "fea" convierte mejor, cuando los usuarios dicen que les encanta el diseño pero los datos muestran abandono, cuando el equipo de producto pide optimizar una métrica que daña la experiencia a largo plazo, cuando los datos muestran lo que usuarios hacen pero no lo que necesitan. La importancia de cuestionar las métricas correctas, no solo maximizarlas.

**9. Herramientas de data literacy para el diseñador**
Detalla el stack de herramientas que debe dominar un diseñador data-informed: herramientas de analytics de producto (Amplitude, Mixpanel, Google Analytics 4), herramientas de investigación cualitativa (Maze, UserTesting, Lookback), herramientas de análisis de sesión (Hotjar, FullStory, Microsoft Clarity), herramientas de A/B testing (Optimizely, VWO, LaunchDarkly), y hojas de cálculo y SQL básico para el diseñador que quiere explorar datos por cuenta propia.

Termina con un plan de 60 días para empezar a incorporar los datos en el proceso de diseño actual, comenzando por las herramientas más accesibles y los análisis más fáciles de implementar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Integrar datos cuantitativos y cualitativos en el proceso de diseño para tomar mejores decisiones',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Sales data literacy: el comercial que entiende sus métricas y las usa para vender más',
                'description'       => 'Domina las métricas de ventas que realmente predicen el rendimiento: entiende tu pipeline, optimiza tu conversión por etapa y toma decisiones de prospección basadas en datos para cerrar más negocio.',
                'prompt_content'    => <<<'PROMPT'
Eres un director de ventas con experiencia en la transformación de equipos comerciales en equipos data-driven, que usan las métricas no para reportar al manager sino para mejorar sus propias decisiones de prospección y cierre. Necesito que me ayudes a entender y usar mejor los datos de ventas.

**Mi contexto:**
- Tipo de venta: [B2B / B2C / inside sales / field sales / canal]
- Ticket medio: [rango]
- Ciclo de venta promedio: [duración]
- CRM que uso: [Salesforce, HubSpot, Pipedrive, otro]
- Nivel actual con datos: [no miro métricas / reviso el dashboard del CRM pero no sé qué hacer con ello / soy medianamente analítico]
- Principal problema comercial: [pipeline insuficiente / muchas oportunidades que no cierran / no sé dónde pierde tiempo el equipo]

Desarrolla una guía completa de sales data literacy:

**1. El pipeline como modelo predictivo**
Explica cómo entender el pipeline de ventas como un modelo predictivo, no como un inventario de oportunidades: la diferencia entre el pipeline real (oportunidades con probabilidad real de cerrar) y el pipeline wish list (oportunidades que el comercial no quiere dar por perdidas), cómo calcular el pipeline coverage necesario para alcanzar la cuota (regla general 3x para venta transaccional, hasta 5x para enterprise), por qué la salud del pipeline importa más que el tamaño del pipeline.

**2. Las métricas de ventas que todo comercial debe dominar**
Define la jerarquía de métricas de ventas desde la actividad hasta el resultado: métricas de actividad (llamadas, emails, reuniones), métricas de pipeline (oportunidades creadas, velocidad del pipeline, pipeline coverage), métricas de conversión (tasa de conversión entre etapas, tasa de conversión lead-to-deal), métricas de resultado (quota attainment, ASP, ciclo de venta, win rate). Cuáles mirar diariamente, semanalmente y mensualmente.

**3. Análisis de conversión por etapa**
Explica cómo analizar las tasas de conversión entre cada etapa del funnel de ventas para identificar el cuello de botella real: cómo calcular la tasa de conversión de cada etapa, cómo comparar tu tasa de conversión personal con la media del equipo para identificar dónde estás por debajo, qué preguntas hacerse cuando la conversión cae en una etapa específica (¿es un problema de cualificación, de propuesta, de precio, de timing?), cómo usar este análisis para priorizar en qué etapa mejorar primero.

**4. Análisis de win/loss**
Detalla cómo hacer un análisis de win/loss riguroso: cómo registrar los motivos de pérdida en el CRM de manera estandarizada (evitar el cajón de sastre "perdido por precio"), cómo hacer entrevistas de win/loss con compradores y perdedores para entender los motivos reales vs los que declaran, cómo analizar los patrones en los deals ganados (tamaño de empresa, industria, champion, tiempo hasta primer contacto) para replicarlos, cómo usar los motivos de pérdida para mejorar la cualificación temprana.

**5. Forecasting desde el punto de vista del comercial**
Explica cómo hacer un forecast honesto y metodológico, no uno que infle las expectativas del manager: los métodos de forecasting (pipeline-based, stage-based, AI-based del CRM), cómo categorizar las oportunidades con honestidad (commit, best case, pipeline), el rol de la conversación de forecast con el manager como herramienta de coaching, por qué un forecast honesto pero conservador es mejor que uno optimista que nunca se cumple.

**6. Productividad comercial basada en datos**
Detalla cómo usar los datos de actividad para optimizar la productividad personal: cómo calcular el valor de cada tipo de actividad (cuántas llamadas se necesitan para generar una reunión, cuántas reuniones para generar una propuesta, cuántas propuestas para cerrar un deal), cómo usar este modelo para planificar la semana de manera que garantice alcanzar la cuota al final del mes, la trampa de optimizar el volumen de actividad cuando el problema es la calidad.

**7. Segmentación de clientes con datos**
Explica cómo usar los datos del CRM y del negocio para identificar el perfil de cliente ideal: análisis de los deals ganados para identificar los atributos comunes (tamaño, industria, tech stack, cargo del comprador), análisis del LTV por segmento para priorizar los clientes más valiosos a largo plazo, cómo usar los datos de propensión (señales de intención, eventos trigger como financiación recibida, expansión) para priorizar la prospección.

**8. El comercial como analista de su propio negocio**
Describe la mentalidad del comercial que trata su territorio como si fuera un negocio propio: revisión mensual de métricas personales vs objetivos, identificación de los 20% de actividades o segmentos que generan el 80% del resultado, decisiones de inversión de tiempo basadas en datos (en qué industrias, en qué tamaños de empresa, en qué canales de prospección invertir el tiempo limitado), cómo presentar el análisis de tu propio pipeline en el one-on-one con el manager de manera que genere conversaciones de coaching útiles.

Termina con una plantilla de revisión semanal de métricas que el comercial pueda completar en 15 minutos y que le dé claridad sobre qué hacer de manera diferente en la siguiente semana para estar en camino de alcanzar la cuota.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Usar las métricas de ventas para optimizar el pipeline, la conversión y la productividad comercial',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product data culture: construir un equipo de producto que decide con datos',
                'description'       => 'Establece una cultura de datos en el equipo de producto: define las métricas norte, crea rituales de decisión basados en evidencia y construye la infraestructura analítica que permite iterar rápido y con confianza.',
                'prompt_content'    => <<<'PROMPT'
Eres un CPO con experiencia en la construcción de organizaciones de producto data-driven que han escalado desde producto inicial hasta crecimiento sostenido. Necesito que me ayudes a construir una cultura de datos genuina en mi equipo de producto.

**Mi contexto:**
- Tamaño del equipo de producto: [PMs, diseñadores, ingenieros]
- Fase del producto: [pre-PMF / post-PMF / crecimiento / madurez]
- Stack de analytics actual: [herramientas de product analytics disponibles]
- Nivel de madurez de datos en el equipo: [sin datos / datos básicos / tracking parcial / analytics maduro]
- Principal problema: [el equipo no confía en los datos / no sabemos qué medir / los datos no llegan a tiempo / tomamos decisiones por opinión]

Desarrolla una guía completa para construir la cultura de datos en producto:

**1. La North Star Metric y el árbol de métricas**
Explica cómo definir la North Star Metric (NSM) del producto: la métrica única que mejor captura el valor que el producto entrega a los usuarios y que predice el crecimiento a largo plazo, cómo diferenciar la NSM de las métricas de vanidad y de los KPIs de negocio, ejemplos por tipo de producto (Spotify: tiempo de escucha; Airbnb: noches reservadas; Slack: mensajes enviados por equipo), cómo construir el árbol de métricas que muestra las palancas que mueven la NSM hacia arriba o hacia abajo.

**2. El framework de métricas para el equipo de producto**
Diseña el sistema de métricas de producto en tres niveles: métricas de salud del producto (engagement, retención, activación), métricas de equipo (métricas específicas del squad que conectan con la NSM), y métricas de feature (el impacto medido de cada lanzamiento). Cómo alinear las métricas de equipo con los OKRs de la empresa sin crear una proliferación de métricas que paraliza el análisis.

**3. Instrumentación y tracking de eventos**
Detalla el proceso de definir e implementar el tracking de eventos correcto: el plan de analytics como documento vivo que define qué eventos se trackean, sus propiedades y cuándo dispararlos, las convenciones de nomenclatura para que el tracking sea consistente y mantenible, cómo priorizar qué trackear primero cuando los recursos de instrumentación son limitados, la deuda técnica de analytics y cómo gestionarla. Herramientas de gestión del plan de tracking (Avo, Segment Protocols, Amplitude Data).

**4. Rituales de datos en el equipo de producto**
Describe los rituales que deben existir en un equipo de producto data-driven: el weekly metrics review del squad (quién lo facilita, qué métricas revisar, qué decisiones se toman en esa sesión), el análisis post-lanzamiento de cada feature (impacto medido vs hipótesis inicial), la revisión mensual de retención y engagement con toda la organización de producto, el proceso de priorización de backlog basado en impacto esperado y evidencia de usuario.

**5. Investigación cuantitativa y cualitativa en producto**
Explica cómo combinar los métodos de investigación cuantitativos y cualitativos para entender completamente el comportamiento del usuario: análisis de cohortes para entender la retención, análisis de funnels para identificar el drop-off en onboarding, análisis de features para ver cuáles se usan y cuáles no, complementados con entrevistas de usuario para entender el porqué, sesiones de usabilidad para identificar la fricción, y análisis de soporte para ver los puntos de dolor más frecuentes.

**6. Experimentación como músculo del equipo**
Detalla cómo construir la capacidad de experimentación en el equipo de producto: infraestructura técnica para A/B testing (feature flags, plataforma de experimentos), el proceso de diseño de experimentos (hipótesis, métricas primarias y secundarias, tamaño de muestra, duración), cómo interpretar los resultados (no solo si la variante gana sino qué aprendemos en cualquier caso), el repositorio de experimentos como memoria organizacional, cuántos experimentos se pueden correr en paralelo sin contaminar los resultados.

**7. Self-service analytics para el equipo de producto**
Describe cómo habilitar al equipo de producto para que explore datos de manera autónoma sin depender de un analista de datos: herramientas de product analytics con interfaz visual (Amplitude, Mixpanel, Heap), cuadernos de análisis compartidos en Jupyter o Mode para exploración más avanzada, dashboards de auto-servicio en Metabase o Looker Studio, formación básica en SQL para PMs que quieren explorar datos sin intermediarios.

**8. Datos en la toma de decisiones de producto**
Explica el proceso de decisión de producto data-informed: cómo documentar las decisiones con la evidencia que las respalda (PRD con sección de datos), cómo distinguir cuándo hay suficiente evidencia para decidir vs cuándo necesitas más investigación, cómo comunicar las decisiones de producto con datos a la dirección y a los stakeholders de negocio, qué hacer cuando los datos contradicen la visión del product leader.

Termina con un plan de implementación de 6 meses para construir la infraestructura analítica y la cultura de datos en el equipo de producto, con hitos medibles que permitan saber si el equipo está progresando hacia ser genuinamente data-informed.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Construir una cultura de datos en el equipo de producto con métricas, rituales y experimentación',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'People analytics culture: democratizar los datos de talento en la organización',
                'description'       => 'Construye una práctica de people analytics madura: define las métricas de talento que importan, crea dashboards para managers y dirección, y usa los datos para anticipar el riesgo de fuga y mejorar las decisiones de gestión de personas.',
                'prompt_content'    => <<<'PROMPT'
Eres un director de People Operations con experiencia en la construcción de prácticas de people analytics en empresas de tecnología en crecimiento. Necesito que me ayudes a construir una cultura de datos de talento que ayude a la dirección y a los managers a tomar mejores decisiones sobre las personas.

**Mi contexto:**
- Tamaño de la empresa: [número de empleados]
- Sector: [tecnología, servicios, industria, etc.]
- Herramientas de RRHH actuales: [HRIS, ATS, plataforma de evaluación de desempeño]
- Nivel de madurez de datos en RRHH: [solo datos básicos en Excel / HRIS con algunos reportes / analytics básico / analytics avanzado]
- Principal problema de talento: [alta rotación no anticipada / contratación lenta / falta de datos para decisiones de compensación / managers sin datos sobre su equipo]

Desarrolla una guía completa de people analytics:

**1. El caso de negocio del people analytics**
Explica por qué los datos de talento son una ventaja competitiva: el coste real de la rotación (entre 50% y 200% del salario anual del empleado según el nivel), el impacto de una mala contratación en la productividad del equipo, la diferencia entre las empresas que anticipan los problemas de talento con datos y las que los descubren cuando ya es tarde. Cómo calcular el ROI de invertir en capacidad de people analytics para presentarlo a la dirección.

**2. Las métricas de talento que toda organización debe monitorizar**
Define la jerarquía de métricas de personas: métricas de flujo (tasa de contratación, tiempo hasta cubrir vacante, tasa de rotación voluntaria e involuntaria, tasa de retención a 90 días de los nuevos), métricas de calidad (calidad de la contratación medida a 6 meses, tasa de éxito en el período de prueba, performance distribution), métricas de engagement (eNPS, participación en encuestas de clima, tasa de utilización de beneficios), y métricas de diversidad e inclusión. Cuándo y con qué frecuencia revisar cada una.

**3. El dashboard de people analytics para dirección**
Detalla cómo construir el dashboard ejecutivo de personas: las 6-8 métricas de talento que la dirección debe revisar mensualmente, cómo visualizar la rotación por equipo y departamento para identificar patrones, cómo mostrar la evolución de la headcount vs el plan de contratación, el índice de salud organizacional como indicador de riesgo, cómo presentar los datos de personas de manera que generen conversaciones y decisiones, no solo conformismo.

**4. El dashboard de manager**
Describe el panel de people analytics específico para managers: métricas de su equipo (engagement, distribución de desempeño, antigüedad media, ratio de rotación en los últimos 12 meses), alertas de riesgo de fuga basadas en señales de comportamiento, datos de tiempo hasta cubrir cada vacante en su área, información de compensación vs mercado para las conversaciones de retención. Cómo formarles para interpretar y actuar sobre los datos de su equipo.

**5. Modelos predictivos de riesgo de fuga**
Explica cómo construir o implementar modelos de predicción de rotación: las variables que más predicen el riesgo de fuga (tiempo sin promoción, brecha salarial vs mercado, cambio de manager reciente, falta de feedback estructurado, señales en las encuestas de clima, reducción en la participación en actividades de equipo), cómo construir un modelo básico en una hoja de cálculo sin necesidad de machine learning, cuándo escalar a un modelo de ML real y las herramientas que lo facilitan (HRIS con módulos predictivos).

**6. Analytics de contratación**
Detalla cómo usar los datos para mejorar el proceso de contratación: análisis del funnel de selección para identificar dónde se pierden los mejores candidatos, tasa de conversión por fuente (LinkedIn, referidos, ATS, agencias) para optimizar el presupuesto de contratación, análisis de tiempo por etapa para identificar los cuellos de botella que alargan el proceso, correlación entre los evaluadores del proceso y la calidad de la contratación a 6 meses, análisis de la diversidad en el pipeline vs en las contrataciones finales.

**7. Compensación basada en datos**
Explica cómo usar los datos de mercado y los datos internos para tomar decisiones de compensación más justas y competitivas: cómo hacer benchmarking de salarios con fuentes fiables (encuestas sectoriales, Glassdoor, LinkedIn Salary, Radford), análisis de equidad interna para detectar brechas de compensación injustificadas, cómo definir bandas salariales basadas en datos y cómo usarlas en los procesos de revisión, la conexión entre la transparencia de compensación y la retención.

**8. Privacidad y ética en el people analytics**
Detalla las consideraciones éticas y legales que todo profesional de RRHH debe tener en cuenta al trabajar con datos de personas: cumplimiento con el RGPD y la normativa laboral en la recopilación y uso de datos de empleados, la diferencia entre monitorización aceptable y vigilancia invasiva, cómo comunicar a los empleados qué datos se recogen y para qué, la importancia del consentimiento informado, cómo evitar que los modelos predictivos refuercen sesgos existentes (especialmente en contratación y promoción).

Termina con un roadmap de implementación de people analytics en 6 meses: qué datos recopilar y limpiar primero, qué dashboards construir en qué orden, cómo conseguir el buy-in de los managers para que usen los datos, y cómo medir el impacto de la práctica de people analytics en las métricas de negocio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Construir una práctica de people analytics para anticipar rotación y mejorar decisiones de talento',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Financial data governance: calidad de datos, fuentes únicas de verdad y reporting confiable',
                'description'       => 'Establece un marco de gobierno de datos financieros: define fuentes únicas de verdad, asegura la calidad de los datos, elimina las versiones múltiples de verdad y construye un reporting financiero en el que todos confían.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO con experiencia en la implementación de marcos de gobierno de datos financieros en empresas medianas y grandes que han sufrido los problemas de múltiples versiones de verdad, datos inconsistentes y un reporting en el que nadie confía. Necesito que me ayudes a establecer un marco de gobierno de datos financieros robusto.

**Mi contexto:**
- Tamaño de la empresa: [facturación y número de empleados]
- Sistemas financieros actuales: [ERP, sistema de contabilidad, herramientas de BI]
- Principal problema de datos: [cada departamento tiene sus propias cifras / el reporting tarda demasiado en cerrarse / los datos del ERP no coinciden con los del CRM / la dirección no confía en los datos]
- Equipo de finanzas: [número de personas, si hay analistas de datos en el equipo]
- Nivel de madurez de datos: [todo en Excel / ERP implementado con reporting básico / BI implementado / datos distribuidos sin gobernanza]

Desarrolla un marco completo de gobierno de datos financieros:

**1. El problema de las múltiples versiones de verdad**
Explica por qué las organizaciones acaban con múltiples versiones de la misma métrica financiera: el revenue del CRM no coincide con el del ERP, el EBITDA del CFO no coincide con el del CEO, los datos de ventas del comercial no coinciden con los de finanzas. Las causas raíz de este problema (diferentes definiciones, fuentes de datos distintas, timing de reconocimiento diferente, transformaciones manuales con errores) y el coste real para la organización en términos de decisiones equivocadas y tiempo perdido en reconciliaciones.

**2. El marco de gobierno de datos financieros**
Define los componentes de un marco de gobierno de datos financieros efectivo: políticas (quién puede definir qué métricas y cómo), procesos (cómo se validan y aprueban los cambios en las definiciones), personas (los data owners y data stewards para cada dominio financiero), y tecnología (las herramientas que hacen cumplir las políticas). La diferencia entre el gobierno de datos financieros (reporting externo, contabilidad) y el gobierno de datos de gestión (reporting interno, KPIs de negocio).

**3. Definición y documentación de métricas financieras**
Detalla el proceso de definir y documentar las métricas financieras de manera inequívoca: el diccionario de datos financiero (nombre de la métrica, definición precisa, fórmula de cálculo, fuente de datos, responsable de la definición, casos especiales y exclusiones), cómo gestionar los desacuerdos sobre la definición de una métrica (quién tiene la última palabra), cómo comunicar las definiciones a toda la organización y asegurarse de que se usan de manera consistente, cómo gestionar los cambios de definición sin destruir la comparabilidad histórica.

**4. La fuente única de verdad (SSOT)**
Explica cómo implementar el concepto de Single Source of Truth para los datos financieros: qué sistema debe ser la fuente autoritativa para cada tipo de dato (el ERP para los datos contables, el CRM para los datos de ventas, el data warehouse como punto de integración), cómo manejar las discrepancias entre sistemas durante la transición, cómo establecer las reglas de reconciliación cuando los datos no coinciden exactamente entre sistemas, cómo comunicar a la organización qué sistema usar para qué tipo de consulta.

**5. Calidad de datos financieros**
Detalla un framework de data quality específico para datos financieros: las dimensiones de calidad críticas en finanzas (exactitud, completitud, consistencia, oportunidad), controles de calidad automatizados (validaciones en la entrada de datos, controles de balance, alertas de anomalías), el proceso de reconciliación y cierre mensual como control de calidad, cómo manejar y documentar las correcciones de datos cuando se detectan errores, el reporting de calidad de datos para la dirección.

**6. Automatización del reporting financiero**
Explica cómo pasar del reporting manual en Excel al reporting automatizado: el inventario de reportes existentes (cuáles son críticos, cuáles se pueden eliminar, cuáles se pueden automatizar), las herramientas de BI para el reporting financiero (Power BI, Tableau, Looker, con sus ventajas y limitaciones para finanzas), cómo diseñar el modelo de datos del warehouse financiero para que los reportes sean fáciles de construir y mantener, el proceso de validación del reporting automatizado para ganarse la confianza de la dirección.

**7. Control de acceso y seguridad de datos financieros**
Detalla las políticas de control de acceso necesarias para datos financieros sensibles: el principio de mínimo privilegio aplicado a datos financieros, quién puede ver qué nivel de detalle (transaccional vs agregado vs consolidado), la gestión de accesos para auditores externos, cómo manejar los datos de compensación y beneficios que deben ser accesibles para RRHH pero no para el negocio general, las pistas de auditoría para cumplimiento regulatorio.

**8. Cultura de datos en el equipo de finanzas**
Explica cómo construir la cultura de datos dentro del departamento de finanzas: la formación en herramientas de datos para analistas financieros (SQL básico, herramientas de BI), el proceso de business partnering donde el analista financiero ayuda a las áreas de negocio a entender sus propios datos, cómo gestionar la resistencia al cambio cuando hay personas que han construido su valor en gestionar datos de manera manual, el rol del controller como guardián de la integridad de los datos financieros.

Termina con un plan de implementación del marco de gobierno de datos financieros priorizado por el impacto más rápido: qué resolver primero (la fuente única de verdad o el diccionario de métricas), cómo conseguir el apoyo de la dirección para la inversión necesaria, y los hitos que demuestran el progreso en los primeros 6 meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Establecer gobernanza de datos financieros con fuente única de verdad y reporting confiable',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal data management: gestionar datos jurídicos con rigor y cumplimiento',
                'description'       => 'Implementa un sistema de gestión de datos jurídicos: organiza la información de expedientes y clientes, asegura el cumplimiento con el RGPD, y usa los datos para mejorar la eficiencia del despacho y la calidad del servicio.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de gestión para despachos de abogados especializado en la transformación digital y la implementación de sistemas de gestión de datos jurídicos. Necesito que me ayudes a implementar un sistema de gestión de datos que mejore la eficiencia del despacho y asegure el cumplimiento normativo.

**Mi contexto:**
- Tipo de despacho: [individual / boutique especializada / mediano generalista / grande]
- Especialidad jurídica: [mercantil, laboral, fiscal, litigación, etc.]
- Sistema actual de gestión: [papel y carpetas / Excel / software jurídico básico / sistema avanzado]
- Principal problema: [expedientes desorganizados / falta de visibilidad sobre el estado de los asuntos / dificultad para cumplir con el RGPD / informes de gestión manuales y poco fiables]
- Número de abogados: [cantidad]

Desarrolla un marco completo de gestión de datos jurídicos:

**1. El valor estratégico de los datos en el despacho**
Explica por qué la gestión de datos es una ventaja competitiva para los despachos de abogados: los datos de expedientes como activo para mejorar la eficiencia y la calidad del trabajo, el historial de precedentes y resoluciones como base de conocimiento que reduce el tiempo de investigación, los datos de rentabilidad por asunto para tomar mejores decisiones de precios y recursos, los datos de cliente para identificar oportunidades de venta cruzada de servicios. El coste de la mala gestión de datos en el sector legal: expedientes perdidos, plazos incumplidos, facturación incorrecta.

**2. Los datos que debe gestionar un despacho de abogados**
Define las categorías de datos que el despacho debe gestionar de manera estructurada: datos de cliente (datos de contacto, historial de relación comercial, comunicaciones, documentos firmados), datos de expediente (partes, objeto, estado procesal, plazos, documentos, horas trabajadas), datos de oponentes y contrapartes (para detectar conflictos de interés), datos de proveedores y peritos, y datos de gestión interna (facturación, cobros, rentabilidad). La importancia del catálogo de datos como inventario de qué datos existen y dónde están.

**3. Software de gestión jurídica: selección e implementación**
Detalla los criterios para elegir el software de gestión de asuntos jurídicos adecuado: funcionalidades imprescindibles (gestión de expedientes, control de plazos, facturación de tiempo, gestión documental), funcionalidades deseables (portal del cliente, integración con Lexnet, agenda procesal automática), consideraciones técnicas (cloud vs on-premise, integración con el correo, movilidad), y opciones del mercado español (Minerva, Wolters Kluwer, Dictum, Abacus). El proceso de implementación sin perder el hilo de los asuntos activos.

**4. Gestión de plazos y alertas procesales**
Explica cómo implementar un sistema robusto de gestión de plazos procesales que minimice el riesgo de preclusión: la integración con los calendarios judiciales oficiales, el sistema de alertas escalonadas (30 días, 7 días, 24 horas), la doble verificación entre el abogado responsable y el equipo de soporte, cómo manejar los plazos que dependen de notificaciones que aún no se han recibido, el registro de plazos como evidencia de la diligencia del despacho en caso de reclamación.

**5. Gestión documental jurídica**
Detalla el sistema de gestión documental para un despacho: la taxonomía de documentos jurídicos por tipo y fase procesal, los metadatos que debe tener cada documento para que sea localizable (cliente, asunto, tipo, fecha, versión, estado), las políticas de nomenclatura de archivos para mantener la coherencia entre abogados, el sistema de versiones para documentos que se editan múltiples veces (contratos, escrituras, escritos procesales), las políticas de retención y destrucción de documentos según la normativa.

**6. RGPD en el despacho de abogados**
Explica las obligaciones específicas de cumplimiento con el RGPD para despachos: el registro de actividades de tratamiento (qué datos personales se tratan, con qué base jurídica, durante cuánto tiempo, con quién se comparten), la gestión de los derechos de los interesados (acceso, rectificación, supresión, portabilidad), las cláusulas de confidencialidad y encargado de tratamiento con los proveedores tecnológicos que acceden a datos de clientes, las medidas de seguridad técnicas y organizativas requeridas, cómo manejar una brecha de seguridad de datos personales en el contexto del secreto profesional.

**7. Reporting de gestión del despacho**
Define los informes de gestión que todo despacho necesita para tomar decisiones: el informe de rentabilidad por asunto (horas trabajadas vs facturadas vs cobradas), el informe de pipeline de nuevos asuntos y previsión de ingresos, el análisis de morosidad y gestión del cobro, el informe de carga de trabajo por abogado para detectar desequilibrios, el análisis de fuentes de captación de clientes para optimizar el marketing. Cómo construir estos informes cuando el punto de partida es solo Excel.

**8. Gestión del conocimiento jurídico**
Detalla cómo convertir la experiencia jurídica acumulada en el despacho en un activo de conocimiento estructurado: la base de datos de jurisprudencia y resoluciones relevantes para la especialidad, el repositorio de modelos de documentos jurídicos (contratos, escritos, dictámenes), el banco de argumentos jurídicos documentados por línea de práctica, los aprendizajes de los asuntos finalizados como lecciones para casos similares futuros. Cómo asegurarse de que el conocimiento del despacho no se pierde cuando un abogado se va.

Termina con un plan de implementación por fases: qué implementar primero (cumplimiento RGPD como prioridad obligatoria, gestión de plazos como prioridad de riesgo, reporting como prioridad de gestión), con plazos y responsables para cada fase.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Implementar gestión de datos jurídicos con cumplimiento RGPD y reporting de gestión del despacho',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS data culture: el equipo que usa datos para anticiparse a los problemas del cliente',
                'description'       => 'Construye una práctica de datos en Customer Success: define los health scores, crea alertas de riesgo de churn, mide el impacto de las acciones de CS y usa los datos para pasar de reactivo a proactivo.',
                'prompt_content'    => <<<'PROMPT'
Eres un VP de Customer Success con experiencia en la construcción de organizaciones de CS data-driven que han reducido el churn significativamente mediante el uso sistemático de datos para anticiparse a los problemas del cliente. Necesito que me ayudes a construir una cultura de datos real en mi equipo de CS.

**Mi contexto:**
- Tipo de producto: [SaaS B2B / B2C / plataforma / herramienta de datos]
- Modelo de CS: [high-touch / tech-touch / híbrido según segmento]
- Stack de CS actual: [CRM, herramienta de CS como Gainsight/ChurnZero/Totango, product analytics]
- Nivel de madurez de datos en CS: [sin datos estructurados / health scores básicos / datos avanzados pero sin cultura de uso]
- Principal problema: [el churn nos sorprende / los CSMs no usan los datos disponibles / no sabemos qué acciones de CS tienen impacto real / el forecasting de renovación es poco fiable]

Desarrolla una guía completa de CS data culture:

**1. El caso del CS proactivo vs reactivo**
Explica la diferencia fundamental entre un equipo de CS reactivo (que responde cuando el cliente tiene un problema) y uno proactivo (que identifica el riesgo antes de que el cliente lo sienta): el coste de la reactividad en términos de churn evitable, el valor de anticipar el problema para el cliente (la experiencia positiva de que el equipo de CS les contacta antes de que tengan que pedir ayuda), por qué el CS proactivo solo es posible con datos y cómo justificar la inversión en capacidad analítica ante la dirección.

**2. El customer health score**
Detalla cómo construir un health score de cliente efectivo: las dimensiones que debe incluir (uso del producto, engagement con el equipo de CS, satisfacción medida con NPS o CSAT, estado de la relación comercial, deuda técnica o soporte pendiente), cómo ponderar cada dimensión según su poder predictivo del churn, cómo validar el health score comparando las predicciones históricas con los resultados reales de renovación, cómo evitar los health scores que se ven bien pero no predicen nada (el problema del health score cosmético).

**3. Señales de riesgo de churn**
Define el catálogo de señales de riesgo que debe monitorizar el equipo de CS: señales de uso (caída en el DAU/MAU, reducción de features utilizadas, aumento de errores), señales de relación (respuestas lentas a los emails, cancelación de reuniones de QBR, cambio de champion en el cliente), señales comerciales (factura impagada, downsell reciente, NPS negativo en la última encuesta), señales externas (noticias de problemas financieros del cliente, cambio de CEO o dirección). Cómo construir el sistema de alertas automáticas cuando estas señales se activan.

**4. Métricas de CS que importan**
Define las métricas clave para el equipo de CS: métricas de retención (Gross Revenue Retention, Net Revenue Retention, churn rate por cohorte), métricas de salud (distribución de clientes por segmento de health score, evolución del health score medio de la cartera), métricas de actividad del equipo (tiempo de primera respuesta, cobertura de QBRs, NPS de la gestión del CSM), métricas de impacto (correlación entre intervenciones de CS y cambios en el health score). Cuáles reportar a la dirección y cuáles usar internamente en el equipo.

**5. El forecasting de renovaciones**
Detalla cómo construir un proceso de forecasting de renovaciones confiable: cómo categorizar las renovaciones en el pipeline (verde: alta confianza, amarillo: incertidumbre, rojo: en riesgo), los factores que más predicen la probabilidad de renovación según los datos históricos del equipo, cómo construir el forecast mensual y trimestral que la dirección pueda usar para la planificación financiera, cómo gestionar las sorpresas (churns que no estaban en rojo) para mejorar el modelo de predicción.

**6. Datos para el QBR basado en valor**
Explica cómo usar los datos para transformar el Quarterly Business Review de una reunión de actualización a una conversación de valor: cómo preparar el deck de QBR con datos de uso real del cliente (no datos genéricos del producto), cómo calcular el ROI que el cliente está obteniendo del producto en términos de su negocio, cómo identificar las oportunidades de expansión a partir de los datos de uso, cómo usar los datos para anclar la conversación de renovación en el valor demostrado.

**7. Rituales de datos en el equipo de CS**
Describe los rituales que institucionalizan el uso de datos en el CS: el weekly risk review (revisión de los clientes en rojo y amarillo y las acciones planificadas), el análisis de churn mensual (autopsia de cada cliente perdido para identificar las señales que se debían haber detectado antes), la revisión trimestral de la cartera (evolución de la distribución de health scores, tendencias de uso), el one-on-one del CSM con el manager usando datos de su cartera para el coaching.

**8. Herramientas de CS analytics**
Detalla el stack de herramientas de datos para un equipo de CS maduro: plataformas de CS (Gainsight, ChurnZero, Totango, Planhat) con sus ventajas para segmentos distintos, cómo integrar los datos del CRM, del producto y de la plataforma de CS en una visión unificada del cliente, herramientas de encuesta (Delighted, Wootric) para medir NPS y CSAT de manera sistemática, dashboards de CS en Looker o Tableau para la visibilidad del equipo directivo.

Termina con un plan de 90 días para pasar de un CS reactivo a uno proactivo basado en datos: qué implementar primero (el health score básico, las alertas de riesgo, o los rituales de datos), cómo conseguir el buy-in de los CSMs que ven los datos como una carga adicional en lugar de una herramienta de trabajo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Construir un CS proactivo usando health scores, alertas de churn y rituales de datos',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Cultura de datos del freelance: métricas que mejoran las decisiones del negocio',
                'description'       => 'Define y monitoriza las métricas clave de tu negocio freelance: ingresos, rentabilidad por cliente, ocupación y pipeline, para tomar decisiones basadas en datos que te permitan crecer de manera sostenible.',
                'prompt_content'    => <<<'PROMPT'
Eres un coach de negocios para freelancers con experiencia en ayudar a profesionales independientes a pasar de gestionar su negocio por intuición a gestionarlo con datos, mejorando su rentabilidad y reduciendo la incertidumbre financiera. Necesito que me ayudes a construir una cultura de datos para mi negocio freelance.

**Mi contexto:**
- Especialidad freelance: [diseño, desarrollo, consultoría, copywriting, etc.]
- Facturación anual aproximada: [rango]
- Número de clientes activos simultáneos: [cantidad]
- Herramientas actuales: [Excel, Notion, herramienta de facturación, CRM, ninguna]
- Principal problema: [no sé cuánto voy a ingresar el próximo mes / tengo proyectos poco rentables sin saberlo / no sé cuándo necesito buscar nuevos clientes / mi precio no está basado en ningún dato]

Desarrolla una guía completa de gestión de datos para el freelance:

**1. Por qué los datos son especialmente importantes para el freelance**
Explica los riesgos específicos de gestionar un negocio freelance sin datos: el feast-or-famine cycle (abundancia y escasez alternadas porque no se ve venir la falta de trabajo), los proyectos que parecen rentables pero al calcular el tiempo real resultan en una tarifa por hora muy baja, los clientes que absorben demasiado tiempo con scope creep no detectado, la incertidumbre financiera que genera estrés y malas decisiones. Cómo el control de datos convierte la incertidumbre del freelance en predictibilidad gestionable.

**2. Las métricas fundamentales del negocio freelance**
Define las métricas esenciales que todo freelance debe monitorizar: ingresos mensuales y anuales (reales vs objetivo), tarifa efectiva por hora trabajada (no la tarifa declarada sino lo que realmente se gana por cada hora incluyendo el tiempo no facturable), margen por proyecto y por cliente (ingresos menos tiempo invertido a tarifa de coste), tasa de ocupación (porcentaje de las horas disponibles que están siendo facturas), y pipeline de proyectos (valor total de proyectos en negociación y su probabilidad de cierre). Cuándo revisar cada una.

**3. El seguimiento de tiempo como base de todo**
Explica por qué el tracking de tiempo es la base de datos más importante para el freelance: cómo registrar el tiempo de manera honesta (incluyendo reuniones, revisiones, comunicación con el cliente, no solo trabajo de producción), herramientas de tracking de tiempo (Toggl, Harvest, Clockify), cómo categorizar el tiempo (facturable, no facturable por tipo: ventas, administración, formación, marketing), la revelación que supone para muchos freelancers ver cuánto tiempo no facturable tienen realmente.

**4. Análisis de rentabilidad por proyecto y cliente**
Detalla cómo calcular la rentabilidad real de cada proyecto: ingresos del proyecto divididos por horas totales invertidas, comparación con la tarifa objetivo, identificación de qué fases o tipos de trabajo son más rentables dentro de un proyecto, análisis de qué clientes son más rentables (no siempre los que pagan más son los más rentables si requieren mucho tiempo de gestión). Cómo usar este análisis para decidir qué tipos de proyectos priorizar y cuáles rechazar o subir de precio.

**5. Previsión de ingresos y gestión del pipeline**
Explica cómo construir una previsión de ingresos para los próximos 3 meses: el pipeline de proyectos como herramienta de previsión (proyectos confirmados + probabilidad ponderada de los proyectos en negociación), cómo identificar cuándo hay un riesgo de caída de ingresos con suficiente antelación para actuar, las señales que indican que es hora de prospectar nuevos clientes (porcentaje de ocupación por debajo del 80% previsto para el próximo mes), el cálculo del colchón financiero que necesita un freelance para gestionar la irregularidad de ingresos.

**6. La tarifa correcta basada en datos**
Detalla el proceso de calcular y ajustar la tarifa del freelance con datos: el cálculo de la tarifa mínima viable (costes fijos + costes variables + salario objetivo dividido entre las horas facturables anuales), la comparación con el mercado (benchmarks de tarifa para la especialidad, nivel y tipo de cliente), cómo la tasa de ocupación informa la decisión de subir la tarifa (si estás al 100% de ocupación durante 3 meses es hora de subir), el impacto de especializarse en el nicho correcto sobre la tarifa que puedes cobrar.

**7. Dashboard del freelance: sencillo pero efectivo**
Describe cómo construir un dashboard de gestión para el freelance en una herramienta simple (una hoja de cálculo de Google Sheets, Notion o Airtable): las métricas a monitorizar mensualmente (ingresos facturados, ingresos cobrados, horas trabajadas por cliente, tarifa efectiva del mes, ocupación), el pipeline de proyectos con estado y probabilidad de cierre, el análisis anual de qué clientes y tipos de proyecto han sido más rentables para informar la estrategia del próximo año.

**8. Datos para tomar mejores decisiones de negocio**
Explica cómo usar los datos para las decisiones estratégicas del freelance: cuándo es el momento correcto para subir tarifas (basado en ocupación y demanda, no en intuición), cómo decidir si rechazar un proyecto con precio bajo o aceptarlo para mantener la ocupación, cómo identificar el tipo de cliente con el que trabajas mejor (más rentable, menos estrés, más largo plazo) para orientar el marketing hacia él, cómo usar los datos históricos de tiempo para hacer mejores estimaciones en los presupuestos futuros y evitar la pérdida de rentabilidad por infraestimación.

**9. Herramientas de gestión para el freelance**
Detalla el stack mínimo de herramientas de datos para el freelance: una herramienta de tracking de tiempo (Toggl Track gratuito para empezar), una herramienta de facturación con reporting (Holded, Quipu o Factusol en España), una hoja de cálculo o herramienta de gestión del pipeline (Notion, Trello o incluso Google Sheets), y cómo integrarlas para que el esfuerzo de recopilar datos sea mínimo y la visión del negocio sea completa.

Termina con la rutina mensual de revisión de datos del freelance: qué revisar en 30 minutos al final de cada mes, qué preguntas responder con esos datos y qué decisión tomar en función de los resultados.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir un sistema de métricas del negocio freelance para tomar mejores decisiones con datos',
                'vote_score'        => 45,
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
