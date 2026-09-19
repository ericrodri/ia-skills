<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills549Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Analítica de marketing y atribución multicanal con IA',
                'description'       => 'Domina la analítica de marketing y la atribución multicanal usando IA: construye modelos de atribución que miden el impacto real de cada canal, analiza los datos de primera mano de tus clientes y toma decisiones de inversión publicitaria basadas en evidencia.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en analítica de marketing y ciencia de datos aplicada al marketing digital, con experiencia en el diseño de modelos de atribución multicanal, el análisis de datos de comportamiento de clientes y la construcción de sistemas de reporting que permiten a los equipos de marketing tomar decisiones de inversión más inteligentes.

instrucción: Ayúdame a diseñar un sistema de analítica de marketing y atribución multicanal para una empresa de comercio electrónico que invierte 150.000€ mensuales en marketing digital en múltiples canales (Google Ads, Meta Ads, email marketing, SEO, afiliados, influencers) y que no tiene visibilidad clara de qué canal genera realmente los clientes de mayor valor y qué parte del presupuesto se puede optimizar.

Desarrolla los siguientes componentes del sistema:

**1. Arquitectura de datos de marketing y tracking**
Define la infraestructura de datos: implementación de Google Analytics 4 con el tracking de eventos clave del funnel de compra (vista de producto, añadir al carrito, inicio del checkout, compra completada, registro de usuario), configuración de la API de conversiones de Meta y Google para el envío de eventos server-side que sobrevive a los bloqueadores de anuncios y al impacto de iOS 14, sistema de UTM parametrization consistente para todos los canales pagados y orgánicos, y estrategia de identificación del cliente (email hash, Customer Data Platform) para conectar las interacciones del mismo usuario en múltiples dispositivos y sesiones.

**2. Modelos de atribución y sus implicaciones para las decisiones**
Define los distintos modelos de atribución y cuándo usar cada uno: atribución de último clic (simple pero ignora el papel de los canales de descubrimiento), atribución de primer clic (útil para medir el impacto en la captación), atribución basada en datos con Google Analytics 4 (usa machine learning para distribuir el crédito según el impacto real de cada interacción en la conversión), y modelos de marketing mix modeling (MMM) que miden el impacto de la inversión en cada canal incluyendo medios offline y efectos de largo plazo. Define cuándo cada modelo es más apropiado y cómo interpretar las diferencias entre modelos para tomar mejores decisiones.

**3. Análisis de la calidad de los clientes captados por canal**
Define el sistema de análisis de calidad: cálculo del Customer Lifetime Value (LTV) segmentado por el canal de primera adquisición (los clientes captados por qué canal tienen mayor LTV, menor tasa de devolución, mayor frecuencia de compra repetida), análisis de cohorte de los clientes por canal de captación y fecha de alta para entender cómo evoluciona su comportamiento en los 12 meses siguientes a la primera compra, y modelo de predicción del LTV del nuevo cliente en los primeros 90 días de vida usando los datos de comportamiento de las primeras interacciones (número de visitas, categorías exploradas, tiempo en el sitio).

**4. Dashboard de marketing con métricas accionables**
Define el sistema de reporting: dashboard ejecutivo de marketing con los indicadores clave de cada canal (gasto, ingresos atribuidos, ROAS por modelo de atribución, coste por adquisición, ROAS ajustado por LTV del cliente), dashboard operativo para el equipo de medios de pago con el rendimiento diario de cada campaña y grupo de anuncios (CTR, CPC, tasa de conversión, coste por conversión), y alertas automáticas que notifican al equipo cuando el rendimiento de una campaña se desvía significativamente del benchmark histórico en las últimas 48 horas.

**5. Experimentos de incrementalidad y medición del impacto real**
Define el sistema de medición incremental: diseño de tests de geo-lift para medir el impacto real de los canales de brand awareness (TV, display, influencers) en las ventas orgánicas de las zonas donde se activa vs. las zonas de control donde no se invierte, tests de hold-out para medir cuántas ventas se habrían producido igualmente sin la inversión en retargeting (clientes que iban a convertir de todas formas), y análisis de la correlación entre la inversión en canales de awareness y el aumento de las búsquedas de marca en Google (indicador de la contribución real del canal al brand building).

**6. Optimización de la mezcla de inversión con IA**
Define el proceso de optimización del presupuesto: modelo de respuesta de cada canal a la inversión (curva de saturación: cómo cambia el retorno marginal a medida que se aumenta el gasto en cada canal), algoritmo de optimización del mix de canales que distribuye el presupuesto entre los canales para maximizar el revenue total dado un presupuesto fijo o un objetivo de ROAS mínimo, proceso de revisión mensual del mix de canales con los datos del modelo de atribución y de los experimentos de incrementalidad, y forecast del impacto en ventas de distintos escenarios de presupuesto para el próximo trimestre.

Proporciona un ejemplo del dashboard mensual de marketing con los indicadores más relevantes y el proceso de revisión mensual de la inversión por canal usando los datos del modelo de atribución y los experimentos de incrementalidad.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Sistema de analítica de marketing y atribución multicanal para e-commerce',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Arquitectura de datos y pipelines ETL modernos con IA',
                'description'       => 'Diseña y construye arquitecturas de datos modernas y pipelines ETL/ELT usando IA: data warehouses en la nube, lakehouse architectures, orquestación de pipelines de datos, data quality y observabilidad para organizaciones data-driven.',
                'prompt_content'    => <<<'EOT'
Actúa como un Data Engineer y arquitecto de datos senior, con experiencia en el diseño e implementación de arquitecturas de datos modernas para empresas medianas y grandes, usando herramientas del ecosistema cloud (AWS, GCP, Azure) y del stack de datos moderno (dbt, Airflow, Spark, Snowflake, BigQuery), e integrando inteligencia artificial para automatizar la gestión de la calidad de los datos y el descubrimiento del catálogo.

instrucción: Ayúdame a diseñar la arquitectura de datos completa para una empresa de retail omnicanal con presencia física y digital que quiere construir una plataforma de datos centralizada que integre los datos de sus sistemas operacionales (ERP, CRM, POS de tienda, plataforma de e-commerce, sistema de logística) y los haga disponibles para el equipo de analítica y para los modelos de IA de la empresa.

Desarrolla los siguientes componentes de la arquitectura:

**1. Diseño del data warehouse en la nube y el modelo de datos**
Define la arquitectura del repositorio central de datos: selección del data warehouse cloud (Snowflake, BigQuery o Redshift) con los criterios de decisión para el caso de uso específico del retail (volumen de datos, concurrencia de usuarios, integración con herramientas de BI), diseño del modelo dimensional del data warehouse con las principales entidades del negocio (dimensión de clientes, dimensión de productos, dimensión de tiendas, hechos de transacciones de venta, hechos de inventario, hechos de comportamiento web), y estrategia de particionado y clustering de las tablas de mayor volumen para optimizar el coste y el rendimiento de las consultas analíticas.

**2. Pipelines de ingestión de datos desde las fuentes operacionales**
Define los patrones de integración para cada fuente: Change Data Capture (CDC) para los datos del ERP y el CRM que requieren sincronización en tiempo casi real (nuevos pedidos, cambios de stock, actualizaciones de clientes), ingestión batch diaria de los datos del POS de tienda (consolidación de las ventas del día anterior de los 50 puntos de venta) con manejo de errores y reintentos automáticos, streaming de los eventos de comportamiento del sitio web (clicks, vistas de producto, añadir al carrito) usando Kafka o Kinesis, y extracción de los datos de las APIs de terceros (datos de marketing de Google y Meta, datos logísticos del operador).

**3. Transformaciones con dbt y capa semántica**
Define el proceso de transformación de datos: estructura de los proyectos de dbt con las capas de transformación (staging: limpieza y tipado de los datos crudos de cada fuente; intermediate: unificación y enriquecimiento; marts: tablas dimensionales y de hechos optimizadas para el análisis), prácticas de testing de datos en dbt (tests de unicidad, no nulidad, valores aceptables, referential integrity) que garantizan la calidad de los datos en cada capa, documentación automática del catálogo de datos con dbt docs, y estrategia de materialización (tablas, vistas, tablas incrementales) para optimizar el coste de computación.

**4. Orquestación de pipelines con Airflow o equivalente**
Define el sistema de orquestación: diseño del DAG (grafo acíclico dirigido) principal con las dependencias entre los pipelines de ingestión, transformación y carga, estrategia de gestión de errores y reintentos (número de reintentos, alertas al equipo de datos cuando un pipeline falla más de N veces), optimización de los recursos de computación (concurrencia de tareas, workers asignados a cada tipo de pipeline), y monitorización de la latencia de los pipelines (tiempo desde que los datos se generan en la fuente hasta que están disponibles en el data warehouse para el análisis).

**5. Data quality y observabilidad**
Define el sistema de garantía de calidad de los datos: implementación de una herramienta de data observability (Monte Carlo, Bigeye, o dbt Cloud) que detecta automáticamente anomalías en los datos (cambios inesperados en el volumen de filas, en la distribución de valores, en la tasa de nulos), definición de los Service Level Objectives (SLOs) de calidad de datos para las tablas más críticas del negocio (tiempo máximo de latencia, tasa máxima de nulos, porcentaje mínimo de transacciones reconciliadas con el ERP), y proceso de gestión de incidentes de datos (quién es el owner de cada dominio de datos, cómo se escalan los problemas, cómo se comunican a los usuarios del data warehouse).

**6. Gobierno del dato y catálogo de datos**
Define el sistema de gestión del conocimiento sobre los datos: catálogo de datos centralizado (DataHub, Atlan o Alation) donde los usuarios del negocio pueden descubrir qué datos existen, qué significa cada campo, quién es el owner del dato y cuál es su calidad, políticas de control de acceso a los datos sensibles (datos personales de clientes bajo RGPD, datos financieros con acceso restringido al área de finanzas), proceso de gestión del ciclo de vida de los datos (política de retención, anonimización de los datos personales tras el periodo de conservación legal), y proceso de solicitud de nuevos datos o nuevos modelos de datos para nuevos casos de uso del negocio.

Proporciona el diagrama de la arquitectura de datos completa con los componentes técnicos en cada capa (ingestión, almacenamiento, transformación, consumo) y el plan de implementación por fases con los hitos de los primeros 6 meses.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Arquitectura de datos completa para empresa de retail omnicanal',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Visualización de datos y dashboards ejecutivos con IA',
                'description'       => 'Diseña dashboards ejecutivos y visualizaciones de datos que comunican insights de negocio de forma clara y accionable usando IA: principios de diseño de información, selección de los gráficos correctos para cada tipo de dato y creación de narrativas visuales.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en visualización de datos y diseño de información, con experiencia en el diseño de dashboards ejecutivos, informes analíticos y visualizaciones de datos que transforman datos complejos en narrativas visuales claras que permiten a los directivos tomar mejores decisiones de negocio.

instrucción: Ayúdame a diseñar el sistema de dashboards y visualizaciones de datos para una empresa de servicios financieros medianos que quiere mejorar radicalmente la calidad de sus reportes de negocio: los informes actuales son tablas de Excel con cientos de filas que nadie lee, y la dirección toma decisiones con datos desactualizados y sin contexto histórico.

Desarrolla los siguientes aspectos del sistema de visualización:

**1. Principios de diseño de dashboards efectivos**
Define las reglas fundamentales del diseño de información aplicadas a los dashboards de negocio: principio de carga cognitiva mínima (eliminar todo elemento visual que no añada información: bordes innecesarios, colores decorativos, sombras, fondos de colores), jerarquía visual que guía la atención del lector hacia los indicadores más importantes antes de los secundarios, uso correcto del color en los dashboards de negocio (colores semánticos para el estado: verde/rojo/naranja, paleta neutra para el contexto, máximo 4-5 colores distintos por dashboard), y principio de contexto obligatorio para cada indicador (toda cifra debe compararse con algo: el objetivo, el período anterior, la misma cifra del año pasado, el benchmark del sector).

**2. Selección del tipo de gráfico correcto para cada análisis**
Define el mapa de decisión de gráficos: comparación entre categorías en un momento (barras verticales u horizontales según el número de categorías), evolución de un indicador en el tiempo (línea para tendencias continuas, barra para comparaciones discretas mes a mes), distribución de los datos (histograma para la distribución de frecuencias, boxplot para comparar distribuciones entre grupos), parte de un todo (gráfico de área para la composición en el tiempo, treemap para la proporción de muchas categorías), y correlación entre dos variables (scatter plot con línea de tendencia, mapa de calor para matrices de correlación). Define los casos de uso más frecuentes en los dashboards financieros y el gráfico recomendado para cada uno.

**3. Diseño del dashboard ejecutivo de negocio**
Define la estructura del dashboard principal de la alta dirección: panel de KPIs principales en la primera fila (5-7 indicadores clave del negocio con su variación vs. el mes anterior y vs. el objetivo anual), visualización de la tendencia de los últimos 12 meses de los indicadores principales (línea de tiempo con el target marcado y las áreas de cumplimiento vs. incumplimiento coloreadas), desglose de los indicadores principales por las dimensiones más relevantes (por línea de producto, por zona geográfica, por segmento de cliente), y sección de alertas y comentarios del analista con los 3-5 insights más relevantes del período.

**4. Diseño de dashboards operativos por área de negocio**
Define los dashboards específicos para cada área: dashboard de ventas (pipeline por etapa, conversión por comercial, tickets medios, forecast del trimestre vs. el objetivo), dashboard financiero (P&L mensual con variación vs. presupuesto, cash flow semanal, principales partidas de coste con semáforo de estado), dashboard de operaciones (tiempo de ciclo de los procesos clave, tasa de incidencias, capacidad utilizada vs. disponible), y dashboard de clientes (NPS por segmento, tasa de churn, evolución del LTV por cohorte). Para cada dashboard, define los indicadores, el gráfico recomendado y la frecuencia de actualización.

**5. Narrativa de datos y storytelling con datos**
Define el proceso de construcción de narrativas de datos: estructura del informe analítico mensual para la dirección (situación actual, qué ha cambiado, por qué ha cambiado, qué implica para las decisiones), uso de anotaciones y callouts en los gráficos para guiar la interpretación del lector hacia los insights más relevantes sin que tenga que analizar el gráfico por su cuenta, técnica de la pirámide invertida para los informes analíticos (conclusión principal primero, evidencia de soporte después), y uso de IA para generar automáticamente el texto de interpretación de los indicadores clave basándose en los datos actuales y el histórico.

**6. Implementación técnica y gobierno de los dashboards**
Define el stack tecnológico y el proceso de mantenimiento: selección de la herramienta de BI (Tableau, Power BI, Looker, Metabase) con los criterios de decisión para el caso de la empresa (número de usuarios, fuentes de datos, necesidades de embedding, presupuesto), proceso de desarrollo y validación de nuevos dashboards con los usuarios finales antes de publicarlos (prototipo en baja fidelidad, feedback de los usuarios, iteración, publicación), sistema de gobierno de los dashboards (quién es el owner de cada dashboard, proceso de solicitud de cambios, proceso de deprecación de dashboards obsoletos), y proceso de formación de los usuarios en la lectura e interpretación de los dashboards.

Proporciona el diseño detallado del dashboard ejecutivo de negocio con la descripción de cada sección, los indicadores incluidos y el tipo de gráfico recomendado para cada uno, siguiendo los principios de diseño de información descritos.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema de dashboards ejecutivos y visualización de datos para empresa de servicios financieros',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Sales analytics y forecasting de ventas con IA',
                'description'       => 'Transforma los datos de ventas en ventaja competitiva usando IA: modelos de forecasting de ventas, análisis del pipeline comercial, identificación de los mejores clientes potenciales y optimización de los territorios y cuotas del equipo comercial.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en sales analytics y revenue operations, con experiencia en el diseño de sistemas de análisis del pipeline comercial, modelos de forecasting de ventas y herramientas de inteligencia de datos para equipos de ventas B2B que quieren usar los datos para vender más y de forma más eficiente.

instrucción: Ayúdame a diseñar un sistema de sales analytics y forecasting para una empresa de software B2B con 30 comerciales, un ciclo de venta de 3 meses, un ticket medio de 25.000€ anuales y un CRM (Salesforce) que está lleno de datos desactualizados porque el equipo no lo usa correctamente. El objetivo es pasar de un sistema de previsión de ventas basado en el "olfato" del director comercial a un modelo basado en datos con un margen de error del 10%.

Desarrolla los siguientes componentes del sistema:

**1. Higiene del CRM y calidad de los datos del pipeline**
Define el proceso de limpieza y mantenimiento de los datos de ventas: auditoría del CRM actual para identificar oportunidades duplicadas, etapas del pipeline mal configuradas, campos clave vacíos y oportunidades bloqueadas en fases tempranas sin actividad reciente, definición de los campos obligatorios en cada etapa del pipeline (información mínima que el comercial debe completar para que la oportunidad avance a la siguiente fase), proceso de gobernanza del CRM (quién es el responsable de la calidad de los datos, qué alertas existen para las oportunidades sin actividad, cómo se gestiona el stale pipeline), y dashboard de salud del CRM para el director comercial con las métricas de uso del CRM por comercial.

**2. Modelo de probabilidad de cierre con IA**
Define el sistema de scoring de oportunidades: variables predictoras del cierre de una oportunidad (antigüedad de la oportunidad, número de contactos involucrados del lado del comprador, número de demos realizadas, presupuesto confirmado, competidores identificados, engagement con los contenidos de propuesta enviados), entrenamiento de un modelo de machine learning con el histórico de oportunidades ganadas y perdidas que asigna una probabilidad de cierre a cada oportunidad activa basada en estas variables, y uso de la probabilidad ajustada del modelo vs. la probabilidad subjetiva del comercial para identificar las oportunidades sobre-estimadas o subestimadas que requieren atención del manager.

**3. Sistema de forecasting de ventas**
Define el modelo de previsión de ventas: forecast basado en la suma del pipeline ponderado por la probabilidad de cierre del modelo (más fiable que la ponderación subjetiva del comercial), forecast basado en las tasas de conversión históricas por etapa del pipeline (cuántas oportunidades en etapa 3 se convierten en ventas en los próximos 90 días), modelo de forecasting predictivo con IA que incorpora la estacionalidad histórica, el ritmo de generación de nuevas oportunidades y los indicadores adelantados de demanda, y proceso de revisión semanal del forecast con el equipo comercial (pipeline review) para identificar y resolver los bloqueos en las oportunidades más importantes.

**4. Análisis del rendimiento comercial individual y del equipo**
Define el sistema de análisis del equipo de ventas: métricas de actividad por comercial (número de llamadas, emails, demos, propuestas enviadas por semana), métricas de eficiencia del proceso (tasa de conversión entre etapas del pipeline, tiempo medio en cada etapa, tamaño medio del ticket ganado), análisis de los patrones de los mejores comerciales vs. la media del equipo para identificar los comportamientos más predictivos del éxito, y sistema de benchmarking individual que muestra a cada comercial cómo está su rendimiento vs. sus compañeros y vs. los top performers de la empresa.

**5. Identificación de oportunidades de crecimiento en la cartera existente**
Define el sistema de análisis de la cartera de clientes: modelo de propensión a la compra adicional (upsell y cross-sell) que identifica los clientes actuales con mayor probabilidad de comprar más, basado en su patrón de uso del producto, su volumen de compra histórico y las características que tienen en común con los clientes que ya expandieron su contrato, modelo de predicción de churn que identifica los clientes con mayor riesgo de cancelación en los próximos 90 días para que el equipo de customer success intervenga de forma proactiva, y análisis de los segmentos de clientes con mayor LTV para enfocar el esfuerzo de prospección de nuevos clientes en las empresas que tienen el mismo perfil.

**6. Optimización de territorios y cuotas con datos**
Define el proceso de asignación de recursos comerciales: análisis del potencial de mercado de cada territorio basado en datos externos (número de empresas objetivo por sector y tamaño, inversión tecnológica del sector) para identificar los territorios infra-penetrados con mayor oportunidad, modelo de distribución equitativa de las cuotas anuales por comercial basado en el potencial del territorio y el histórico de rendimiento de cada uno, y proceso de revisión y ajuste trimestral de los territorios y las cuotas en función del rendimiento real vs. el esperado.

Proporciona el modelo de datos del pipeline de ventas con los campos imprescindibles en cada etapa para el forecasting fiable, y el proceso de pipeline review semanal con las preguntas que el director comercial debe hacer a cada comercial para validar el estado real de cada oportunidad.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Sistema de forecasting y analytics de ventas B2B con modelo de probabilidad de cierre',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product analytics y toma de decisiones basadas en datos con IA',
                'description'       => 'Lidera el desarrollo de producto con datos usando IA: diseña el sistema de métricas del producto, analiza el comportamiento de los usuarios, diseña experimentos A/B y convierte los datos en decisiones de producto que mejoran la retención y la monetización.',
                'prompt_content'    => <<<'EOT'
Actúa como un Product Manager y analista de producto experto, con experiencia en el diseño de sistemas de métricas de producto, el análisis del comportamiento de usuarios y la cultura de experimentación en empresas tecnológicas que toman decisiones de producto basadas en datos, usando inteligencia artificial para automatizar el análisis y detectar patrones de comportamiento de usuario no obvios.

instrucción: Ayúdame a diseñar el sistema completo de product analytics y experimentación para una aplicación de finanzas personales con 500.000 usuarios activos mensuales, que quiere pasar de tomar decisiones de producto basadas en la opinión del equipo a una cultura de product analytics donde cada decisión relevante está respaldada por datos y los cambios al producto se validan mediante experimentos controlados antes de lanzarlos a toda la base de usuarios.

Desarrolla los siguientes componentes del sistema:

**1. Definición del árbol de métricas del producto**
Define el sistema de métricas jerárquico del producto: North Star Metric que captura el valor que la app entrega a los usuarios y su correlación con los ingresos a largo plazo (para una app de finanzas personales puede ser el número de usuarios que alcanzan al menos un objetivo financiero en los primeros 90 días), métricas de producto que conducen a la North Star (activación: % de nuevos usuarios que conectan al menos una cuenta bancaria y crean un presupuesto en la primera semana; engagement: frecuencia de uso semanal y número de funcionalidades activas por usuario; retención: % de usuarios que siguen activos a los 30 y 90 días; monetización: % de usuarios premium y revenue per user), y métricas de guardia que el equipo monitoriza para asegurar que las mejoras en las métricas principales no vienen a costa de degradar la experiencia del usuario.

**2. Implementación del tracking de eventos y la instrumentación del producto**
Define la arquitectura de datos de comportamiento del usuario: diseño del plan de tracking con los eventos clave a instrumentar en el producto (onboarding: cada paso del proceso de registro y conexión de cuentas; feature adoption: qué funcionalidades usa cada usuario y con qué frecuencia; conversión: los pasos del funnel hacia la suscripción de pago), elección e implementación de la herramienta de analítica de producto (Mixpanel, Amplitude, PostHog, o Heap según el caso), estrategia de identificación del usuario que permite conectar los eventos anónimos (antes del registro) con los eventos autenticados (después del registro) para un análisis completo del funnel de activación, y proceso de validación de la calidad del tracking (verificar que los eventos se disparan correctamente y que los datos son consistentes antes de usarlos para decisiones).

**3. Análisis del funnel y diagnóstico de puntos de fricción**
Define el proceso de análisis del comportamiento del usuario: análisis del funnel de onboarding paso a paso para identificar en qué momento los nuevos usuarios abandonan el proceso de alta y qué porcentaje completa cada paso, análisis de cohorte de retención por semana de registro para entender si la retención está mejorando o empeorando con el tiempo y qué cohortes tienen mejor retención (las captadas por qué canal, las que usaron qué funcionalidad en la primera semana), análisis de las rutas de navegación de los usuarios con mayor retención vs. los que abandonan para identificar los comportamientos que predicen el éxito del usuario, y análisis de las sessiones de grabación de usuarios reales (con Hotjar o FullStory) para entender el contexto cualitativo detrás de los patrones de abandono detectados en los datos.

**4. Sistema de A/B testing y experimentación**
Define el framework de experimentación del producto: proceso de priorización de los experimentos a lanzar (hipótesis de mejora, tamaño del efecto esperado, tamaño de muestra necesario para detectarlo, duración del test), implementación técnica del sistema de A/B testing (feature flags, asignación aleatoria de usuarios a variantes, control de la contaminación entre experimentos), análisis estadístico correcto de los resultados (significancia estadística, intervalos de confianza, corrección por múltiples comparaciones cuando se miden varios indicadores), y proceso de toma de decisión post-test (cuándo lanzar, cuándo iterar, cuándo abandonar una hipótesis y bajo qué criterios).

**5. Análisis del ciclo de vida del usuario y estrategias de retención**
Define el sistema de análisis de la retención: análisis de la curva de retención y su relación con el número de funcionalidades activas por usuario (qué funcionalidades, cuando se adoptan en los primeros 7 días, predicen una mayor retención a 30 días), segmentación de los usuarios en función de su fase del ciclo de vida (nuevos, activados, comprometidos, en riesgo de abandono, dormidos) con acciones de retención específicas para cada segmento, modelo predictivo de churn que identifica los usuarios con mayor probabilidad de dejar de usar la app en los próximos 14 días basándose en señales de comportamiento (reducción de la frecuencia de uso, abandono de funcionalidades clave), y sistema de notificaciones personalizadas para la retención que usa los datos de comportamiento para decidir qué mensaje enviar a cada usuario en qué momento.

**6. Cultura de datos y proceso de decisión basado en evidencia**
Define el sistema de gobernanza de las decisiones de producto: proceso de product brief basado en datos (todo cambio al producto requiere un análisis de los datos actuales, una hipótesis clara y la definición de cómo se va a medir el éxito antes de empezar el desarrollo), revisión semanal del equipo de producto con el estado de los experimentos en curso y los resultados de los tests recientes, biblioteca de experimentos documentados con las hipótesis, los resultados y los aprendizajes de cada test (para que el conocimiento generado no se pierda cuando cambian las personas), y proceso de democratización de los datos (acceso de todo el equipo de producto y diseño a las herramientas de analítica para que cada persona pueda explorar los datos sin depender del equipo de datos).

Proporciona el árbol de métricas completo de la app de finanzas personales con la definición de cada métrica, su fuente de datos y el proceso de cálculo, y el formato del product brief basado en datos que el equipo usa antes de desarrollar cualquier cambio significativo al producto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Sistema de product analytics y cultura de experimentación para app de finanzas personales',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'People analytics y gestión del talento basada en datos con IA',
                'description'       => 'Usa datos e IA para tomar mejores decisiones sobre el talento de tu organización: analiza los indicadores de rotación, predice qué empleados tienen mayor riesgo de abandono, mide el impacto de la formación y diseña políticas de compensación basadas en evidencia.',
                'prompt_content'    => <<<'EOT'
Actúa como un Director de Recursos Humanos especializado en people analytics y la toma de decisiones basadas en datos en el ámbito de la gestión del talento, con experiencia en el diseño de sistemas de métricas de RRHH, modelos predictivos de rotación y sistemas de medición del impacto de las iniciativas de gestión de personas.

instrucción: Ayúdame a construir un sistema de people analytics para una empresa de tecnología con 300 empleados que quiere dejar de gestionar su talento de forma reactiva (atendiendo las bajas cuando ya se producen) y pasar a una gestión proactiva basada en datos que le permita anticipar los problemas de retención, medir el impacto real de sus iniciativas de RRHH y tomar decisiones de compensación y desarrollo basadas en evidencia.

Desarrolla los siguientes componentes del sistema:

**1. Definición del cuadro de mando de RRHH**
Define los indicadores clave de la gestión del talento: indicadores de adquisición de talento (tiempo medio de cobertura de vacantes por familia de puestos, calidad de la contratación medida en rendimiento en la evaluación de los 6 meses, coste por contratación por canal de captación, ratio oferta/aceptación por seniority y familia de puestos), indicadores de retención (tasa de rotación voluntaria total y por departamento, antigüedad media de las bajas voluntarias, tasa de rotación de los empleados de alto rendimiento por separado de la media), indicadores de desempeño y desarrollo (tasa de finalización de planes de formación, puntuación media en las evaluaciones de desempeño por departamento, % de promociones internas vs. contrataciones externas para roles de liderazgo), y indicadores de cultura y compromiso (eNPS, puntuación de las encuestas de clima por departamento, tasa de participación en las encuestas).

**2. Modelo predictivo de riesgo de abandono**
Define el sistema de predicción de la rotación: variables predictoras del abandono voluntario en el sector tecnológico (tiempo desde la última promoción o subida salarial, rendimiento en la última evaluación vs. la anterior, número de meses sin cambio de proyecto o responsabilidades, diferencia entre el salario del empleado y el mercado para su perfil, variación en la participación en encuestas de clima y en actividades del equipo), proceso de entrenamiento del modelo con el histórico de bajas de los últimos 3 años, y sistema de puntuación de riesgo individual que actualiza el score de cada empleado mensualmente y alerta al manager y al business partner de RRHH cuando el score supera el umbral crítico.

**3. Análisis de las causas de la rotación y las palancas de retención**
Define el proceso de diagnóstico: análisis estadístico de la correlación entre la rotación y los distintos factores de gestión (relación con el manager, compensación, oportunidades de desarrollo, flexibilidad, proyecto en el que trabaja), encuesta de salida estructurada con preguntas estandarizadas que permite acumular datos comparables entre los empleados que se marchan y analizar las causas reales de la rotación, análisis de la retención por cohorte de incorporación para identificar si hay algo en el proceso de onboarding o en los primeros años que predice el abandono posterior, y modelo de medición del coste real de la rotación para la empresa (coste de reclutamiento, pérdida de productividad durante la vacante, coste del onboarding del nuevo empleado, curva de aprendizaje hasta el nivel de productividad del empleado que se fue).

**4. Analytics de la compensación y equidad salarial**
Define el sistema de análisis de compensación: análisis de la posición competitiva de los salarios de la empresa vs. el mercado por familia de puestos y nivel de seniority (usando datos de encuestas de compensación del sector tecnológico como Radford o Mercer), análisis de la equidad interna de la compensación para detectar diferencias de salario injustificadas entre empleados con el mismo nivel de responsabilidad y rendimiento, y modelo de evaluación del impacto de las subidas salariales en la retención (correlación entre la magnitud de la subida recibida y la probabilidad de permanencia en los 12 meses siguientes).

**5. Medición del impacto de las iniciativas de RRHH**
Define el sistema de evaluación del ROI de las políticas de personas: diseño de experimentos naturales para medir el impacto de los programas de formación en el rendimiento posterior de los participantes (comparando con un grupo de control de empleados equivalentes que no participaron), análisis del impacto del programa de mentoring en la retención y la progresión profesional de los mentorizados vs. los empleados sin mentor, medición del impacto del modelo de trabajo flexible en la productividad, la retención y la satisfacción por departamento, y proceso de evaluación pre-post de cualquier nueva iniciativa de RRHH que permita atribuir los cambios observados a la iniciativa y no a otros factores.

**6. Gobernanza de los datos de personas y privacidad**
Define el marco de ética y privacidad del people analytics: política de transparencia con los empleados sobre qué datos se recogen, para qué se usan y quién tiene acceso (el empleado debe saber que existe el modelo de riesgo de abandono y que puede afectar a las decisiones de su manager), control de acceso a los datos personales de los empleados (qué datos puede ver el manager directo, el business partner de RRHH y el HR director), cumplimiento del RGPD en el tratamiento de datos de empleados (base legal del tratamiento, derechos del empleado a acceder y rectificar sus datos, plazo de conservación), y proceso de revisión ética de los modelos predictivos para detectar y corregir sesgos que puedan discriminar a grupos de empleados protegidos.

Proporciona el cuadro de mando mensual de RRHH con los indicadores clave y el proceso de revisión mensual con el Comité de Dirección, incluyendo cómo presentar los datos de rotación y los resultados del modelo predictivo de riesgo de abandono de forma accionable para los directores de área.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Sistema de people analytics y predicción de rotación para empresa tecnológica de 300 personas',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Business intelligence y reporting financiero con IA',
                'description'       => 'Transforma el reporting financiero de tu organización usando IA y herramientas de Business Intelligence: automatiza los informes de gestión, construye el P&L dinámico, integra múltiples fuentes de datos y genera narrativas automáticas de los resultados financieros.',
                'prompt_content'    => <<<'EOT'
Actúa como un Director Financiero y especialista en Business Intelligence, con experiencia en el diseño de sistemas de reporting financiero automatizado, la construcción de modelos de P&L dinámicos y la implementación de herramientas de BI (Power BI, Tableau, Looker) para equipos financieros que quieren pasar de los informes de Excel manuales a un sistema de datos en tiempo real que libere tiempo del equipo para el análisis y la toma de decisiones.

instrucción: Ayúdame a diseñar e implementar un sistema de Business Intelligence financiero para una empresa de distribución con 80 millones de euros de facturación, presencia en 5 países y un equipo de finanzas de 8 personas que actualmente dedica 15 días al mes a consolidar datos de distintos sistemas (ERP, CRM, hojas de Excel) para generar los informes de gestión mensuales que el comité de dirección recibe con 3 semanas de retraso.

Desarrolla los siguientes componentes del sistema:

**1. Diagnóstico del reporting actual y diseño del sistema objetivo**
Define el proceso de auditoría del sistema de reporting: mapa de los informes de gestión actuales (qué informes se producen, qué datos necesitan, cuánto tiempo tarda cada uno, quién los usa y para qué decisiones), identificación de las fuentes de datos de cada informe (qué sistemas alimentan cada informe: ERP para las ventas y los costes, CRM para el pipeline comercial, hojas de Excel para los ajustes manuales, herramientas de consolidación de los 5 países), análisis del tiempo invertido por el equipo en la producción de cada informe vs. el tiempo dedicado al análisis y las recomendaciones, y diseño del sistema de reporting objetivo (qué informes se van a automatizar completamente, cuáles se van a simplificar y cuáles requieren siempre revisión humana).

**2. Integración de datos financieros en el data warehouse**
Define la arquitectura de integración de datos: conectores de los sistemas operacionales al data warehouse (ERP SAP o equivalente: extracción diaria de las transacciones contables, las ventas y los pagos; CRM: extracción semanal del pipeline y las órdenes de compra confirmadas), proceso de consolidación de los datos de los 5 países en una moneda y un plan de cuentas común, gestión de las diferencias de tipo de cambio entre los países (valoración de las transacciones en divisa local y conversión a euros a tipo de cierre del mes), y tratamiento de los ajustes manuales de cierre (provisions, accruals, intercompany eliminations) en el pipeline de datos para que el P&L automatizado incluya todos los ajustes sin intervención manual.

**3. Diseño del P&L dinámico y el cuadro de mando financiero**
Define la estructura del reporting financiero automatizado: P&L mensual con el desglose por línea de negocio, país y canal de distribución, con la comparativa vs. el presupuesto y vs. el mismo período del año anterior y el cálculo automático de las desviaciones (en valor absoluto y en porcentaje), balance de situación mensual con los indicadores clave de liquidez y solvencia (días de cobro, días de pago, nivel de inventario en días de venta, ratio de endeudamiento), y estado de cash flow mensual con el desglose de las variaciones de tesorería por actividad operativa, inversión y financiación.

**4. Automatización de los comentarios de gestión con IA**
Define el sistema de generación de narrativas: modelo de IA que analiza automáticamente las variaciones del P&L vs. el presupuesto y vs. el año anterior e identifica las desviaciones más relevantes por magnitud y por dirección inesperada, generación del primer borrador de los comentarios de gestión en formato ejecutivo (bullet points con la variación, la causa y la recomendación de acción) que el Controller o el CFO revisa y enriquece antes del envío al comité de dirección, y proceso de aprendizaje del sistema con el feedback del equipo financiero sobre la calidad de las narrativas generadas automáticamente para mejorarlas en los siguientes ciclos de cierre.

**5. Planificación financiera y forecasting integrado**
Define el sistema de previsión financiera conectado con el reporting: proceso de presupuestación anual bottom-up asistido por IA (el sistema genera la base del presupuesto proyectando las tendencias históricas y el equipo ajusta los supuestos de negocio), rolling forecast trimestral que actualiza las previsiones del año en función de los resultados reales de los meses transcurridos y los cambios en el pipeline comercial, y análisis de sensibilidad en tiempo real que muestra el impacto en el P&L de final de año de distintos escenarios (si las ventas del Q4 son un 10% por debajo del presupuesto, si el tipo de cambio varía un 5%, si el coste de las materias primas sube un 8%).

**6. Gobierno del dato financiero y control de calidad**
Define el proceso de cierre y validación de los datos financieros: checklist de cierre mensual automatizado que verifica la completitud de los datos antes de publicar el reporting (todas las filiales han cargado sus datos, los saldos intercompany están cuadrados, el balance de situación está equilibrado), proceso de conciliación automática entre los datos del data warehouse y el ERP para detectar diferencias en los saldos contables que puedan indicar errores en el proceso de integración, y acceso controlado a los datos financieros según el rol del usuario (el director de cada país ve sus datos y los consolidados; el comité de dirección ve el consolidado total; el Controller ve todo con el detalle de cuentas contables).

Proporciona el calendario de cierre mensual rediseñado con el proceso automatizado (de 15 días a 5 días de cierre) y el formato del informe de gestión mensual para el comité de dirección con los indicadores clave, los comentarios de gestión y las recomendaciones de acción.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Sistema de BI financiero automatizado para empresa de distribución multi-país',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Gobernanza de datos y cumplimiento del RGPD con IA',
                'description'       => 'Diseña el marco de gobernanza de datos y cumplimiento del RGPD de tu organización usando IA: registro de actividades de tratamiento, evaluaciones de impacto, gestión de brechas de seguridad y automatización del cumplimiento en los sistemas de datos.',
                'prompt_content'    => <<<'EOT'
Actúa como un abogado especializado en protección de datos y un Data Governance Officer, con experiencia en el diseño e implementación de marcos de gobernanza de datos y cumplimiento del Reglamento General de Protección de Datos (RGPD) para empresas medianas y grandes en España y la Unión Europea, usando herramientas de automatización y legaltech para hacer el cumplimiento más eficiente y menos costoso.

instrucción: Ayúdame a diseñar un marco completo de gobernanza de datos y cumplimiento del RGPD para una empresa de salud digital con 150 empleados que gestiona datos de salud de sus usuarios (categoría especial de datos bajo el RGPD), tiene clientes empresariales (B2B) que acceden a los datos de sus empleados y usa servicios cloud de terceros para el procesamiento de los datos.

Desarrolla los siguientes componentes del marco:

**1. Registro de actividades de tratamiento y mapeo de datos**
Define el proceso de inventario de datos: metodología de mapeo de todos los tratamientos de datos personales de la organización (qué datos se recogen, de quién, para qué finalidad, con qué base legal, durante cuánto tiempo, quién tiene acceso, a qué terceros se transfieren), proceso de entrevistas con los responsables de cada área funcional para descubrir los tratamientos de datos no documentados, construcción y mantenimiento del Registro de Actividades de Tratamiento (RAT) en el formato requerido por el RGPD (art. 30), y proceso de actualización del RAT cuando se implementan nuevos tratamientos o se modifican los existentes.

**2. Bases legales para el tratamiento de datos de salud**
Define el análisis de las bases legales aplicables: condiciones específicas del artículo 9 del RGPD para el tratamiento de datos de salud (categoría especial) que pueden aplicar al modelo de negocio de la empresa (consentimiento explícito del usuario, necesidad para la prestación de servicios sanitarios, interés legítimo de salud pública), diseño del proceso de recogida del consentimiento explícito para los tratamientos que lo requieren (granularidad del consentimiento, información al usuario, mecanismo de retirada del consentimiento), y gestión del tratamiento de los datos de salud de los empleados de los clientes B2B (distinción entre responsable del tratamiento compartido y encargado del tratamiento, obligaciones en el contrato de encargo de tratamiento).

**3. Evaluaciones de impacto en protección de datos (EIPD)**
Define el proceso de EIPD para los tratamientos de alto riesgo: criterios para determinar cuándo es obligatorio realizar una EIPD (tratamiento a gran escala de datos de salud, uso de sistemas de scoring o perfilado de usuarios, tratamientos con nuevas tecnologías de mayor riesgo), metodología de la EIPD (descripción del tratamiento, evaluación de la necesidad y proporcionalidad, identificación y evaluación de los riesgos para los derechos y libertades de los afectados, medidas de mitigación), proceso de consulta previa a la AEPD cuando la EIPD identifica un riesgo residual alto que no puede mitigarse, y proceso de revisión periódica de las EIPDs existentes cuando cambian los tratamientos o el contexto de riesgo.

**4. Gestión de los derechos de los interesados**
Define el sistema de atención a los derechos de los usuarios: proceso de recepción, verificación de identidad y respuesta a las solicitudes de ejercicio de derechos (acceso, rectificación, supresión, limitación, portabilidad, oposición) en los plazos legales (1 mes con posibilidad de prórroga a 3 meses para solicitudes complejas), sistema automatizado de búsqueda y extracción de todos los datos de un usuario en los distintos sistemas de la empresa para responder a las solicitudes de acceso o supresión sin depender de búsquedas manuales en cada sistema, y proceso de gestión de las solicitudes de portabilidad de los datos de salud del usuario a otro proveedor de salud digital.

**5. Gestión de brechas de seguridad y notificación a la AEPD**
Define el protocolo de respuesta a incidentes: proceso de detección, clasificación y escalada interna de las brechas de seguridad de datos personales, criterios para determinar cuándo una brecha de seguridad debe notificarse a la AEPD (en 72 horas desde su conocimiento) y cuándo debe notificarse a los interesados afectados (cuando la brecha entraña un alto riesgo para sus derechos y libertades), diseño del formulario de notificación a la AEPD con los campos requeridos por el RGPD y el proceso de actualización de la notificación a medida que se conocen más detalles del incidente, y proceso de análisis post-incidente para implementar las mejoras necesarias y evitar la repetición.

**6. Gobernanza de datos y cumplimiento en los sistemas tecnológicos**
Define el marco de privacidad desde el diseño (Privacy by Design): proceso de revisión de privacidad de los nuevos proyectos tecnológicos antes de su desarrollo (identificación de los datos personales involucrados, validación de la base legal, implementación de las medidas de seguridad adecuadas), gestión de los contratos con los encargados del tratamiento (proveedores cloud como AWS, Azure, proveedores de software SaaS) con las cláusulas contractuales tipo exigidas por el RGPD, política de transferencias internacionales de datos a países fuera de la UE (mecanismos de transferencia: decisión de adecuación, cláusulas contractuales tipo, normas corporativas vinculantes), y proceso de evaluación continua del cumplimiento mediante auditorías periódicas internas y externas.

Proporciona una checklist de cumplimiento del RGPD para la implantación de un nuevo sistema de gestión de datos de salud y el modelo de política de privacidad para el sitio web y la app de la empresa que cumple con los requisitos de información de los artículos 13 y 14 del RGPD.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Marco de gobernanza de datos y RGPD para empresa de salud digital',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Analítica de CX y optimización del soporte al cliente con IA',
                'description'       => 'Mejora la experiencia del cliente y la eficiencia del equipo de soporte usando analítica de datos e IA: análisis del comportamiento de los clientes en el journey, predicción de contactos, optimización de los tiempos de resolución y medición del impacto del soporte en la retención.',
                'prompt_content'    => <<<'EOT'
Actúa como un experto en Customer Experience Analytics y optimización de operaciones de soporte al cliente, con experiencia en el diseño de sistemas de analítica de CX, la implementación de herramientas de inteligencia artificial en los centros de atención al cliente y la demostración del impacto económico del servicio de soporte en la retención y el crecimiento del negocio.

instrucción: Ayúdame a diseñar un sistema de analítica de la experiencia del cliente y optimización del soporte para una empresa de SaaS B2B con 5.000 clientes activos, un equipo de soporte de 25 agentes y un equipo de customer success de 10 personas, que quiere reducir el tiempo medio de resolución de tickets en un 30%, mejorar el CSAT en 10 puntos y demostrar el ROI del equipo de soporte en la retención de clientes.

Desarrolla los siguientes componentes del sistema:

**1. Framework de métricas de CX y soporte**
Define el sistema completo de indicadores: métricas operativas del soporte (volumen de tickets por día y canal, tiempo de primera respuesta por canal y prioridad, tiempo de resolución por tipo de incidencia, tasa de resolución en el primer contacto, tasa de reapertura de tickets resueltos), métricas de satisfacción del cliente (CSAT post-resolución, CES Customer Effort Score que mide el esfuerzo que el cliente percibe que tiene que hacer para resolver su problema, NPS del equipo de soporte separado del NPS de producto), métricas de impacto en el negocio (correlación entre el CSAT y la tasa de renovación del contrato, impacto de los tickets no resueltos en el tiempo acordado en la probabilidad de churn), y métricas de eficiencia del equipo (tickets resueltos por agente y hora, coste por resolución por canal, tasa de utilización de los agentes).

**2. Análisis del comportamiento de los clientes antes de contactar con soporte**
Define el sistema de análisis de la experiencia pre-contacto: análisis de las páginas del centro de ayuda y la documentación visitadas por los clientes en los 30 minutos anteriores a abrir un ticket (qué artículos de ayuda no resuelven el problema del cliente y llevan al contacto con soporte), análisis del uso del producto en los 7 días anteriores al primer contacto de un nuevo cliente con soporte (qué funcionalidades generan más fricción y errores en los usuarios nuevos), y modelo predictivo de contacto que identifica los clientes con mayor probabilidad de contactar con soporte en los próximos 7 días basándose en las señales de su comportamiento en el producto, para que el equipo de customer success intervenga proactivamente antes de que el cliente tenga que pedir ayuda.

**3. Clasificación y enrutamiento inteligente de tickets con IA**
Define el sistema de gestión inteligente de las solicitudes de soporte: modelo de clasificación automática del tipo de incidencia (error técnico, duda sobre el producto, solicitud de nueva funcionalidad, queja sobre la facturación) y la prioridad (bloqueante, alta, media, baja) basándose en el texto del ticket y el contexto del cliente (plan de suscripción, número de usuarios activos, antigüedad), enrutamiento automático al agente con el skill set más adecuado para resolver cada tipo de incidencia y con menor carga de trabajo en ese momento, y detección automática de los tickets que pueden resolverse con una respuesta automatizada (preguntas frecuentes, solicitudes de reenvío de factura, cambios de contraseña) sin intervención del agente.

**4. Sistema de asistencia al agente con IA**
Define las herramientas de IA que mejoran la productividad del agente: sugerencia de respuestas basadas en el tipo de incidencia y las respuestas que mejor CSAT han generado para incidencias similares en el pasado, acceso inmediato al historial completo del cliente (tickets anteriores, interacciones con customer success, uso del producto, plan y ciclo de facturación) sin tener que buscar en múltiples sistemas, herramienta de detección del sentimiento del cliente en el ticket para que el agente sepa antes de responder si el cliente está frustrado y debe adaptar el tono de la respuesta, y sistema de QA automático que analiza las respuestas del agente antes de enviarlas y sugiere mejoras en la claridad, el tono y la precisión de la información.

**5. Análisis del impacto del soporte en la retención**
Define el sistema de medición del ROI del soporte: análisis de la correlación entre la experiencia de soporte (CSAT, tiempo de resolución, número de contactos para resolver el mismo problema) y la probabilidad de renovación del contrato a los 6 y 12 meses, cuantificación del impacto económico de mejorar el CSAT en 10 puntos en la tasa de renovación y en el revenue recurrente de la empresa (modelo de valor del equipo de soporte), análisis del impacto de los tickets no resueltos en el tiempo SLA acordado en la probabilidad de churn, y modelo de cálculo del coste de los tickets evitables (los que se habrían resuelto con una mejor documentación, con una mejora del onboarding o con una corrección de un bug del producto).

**6. Optimización de la fuerza laboral y la planificación de la capacidad**
Define el sistema de gestión de la capacidad del equipo de soporte: modelo de previsión del volumen de tickets por canal, día de la semana y hora del día (análisis de la estacionalidad del volumen de soporte correlacionada con los eventos del ciclo de vida del cliente: renovaciones, lanzamientos de nuevas funcionalidades, inicio de mes cuando los clientes acceden a la factura), sistema de planificación de turnos que alinea la capacidad disponible de agentes con el volumen previsto de tickets para cada franja horaria, y análisis de la relación entre el nivel de staffing (% de tickets respondidos en el tiempo SLA acordado) y los indicadores de satisfacción del cliente para definir el nivel de servicio óptimo.

Proporciona el dashboard de soporte para el director del equipo con los indicadores diarios y semanales más relevantes, y el modelo de análisis de correlación entre la experiencia de soporte y la tasa de renovación del contrato con el método de cálculo del ROI del equipo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Sistema de analítica de CX y optimización del soporte para empresa SaaS B2B',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Consultoría freelance de datos y analítica empresarial con IA',
                'description'       => 'Construye una práctica de consultoría independiente en datos y analítica empresarial usando IA: define tu especialización, desarrolla metodologías propias, capta clientes empresariales y escala tu capacidad de análisis con herramientas de inteligencia artificial.',
                'prompt_content'    => <<<'EOT'
Actúa como un mentor de negocio para consultores freelance de datos y analítica, con experiencia en ayudar a data analysts, data scientists y data engineers a construir prácticas de consultoría independiente rentables y diferenciadas, dirigidas a empresas medianas que necesitan el nivel de expertise de las grandes consultoras a un coste accesible para su tamaño.

instrucción: Ayúdame a construir una práctica de consultoría freelance especializada en analítica empresarial y datos para empresas medianas en España. Tengo 7 años de experiencia como Data Analyst y Senior Analytics Engineer en empresas de comercio electrónico y SaaS, con expertise en SQL, dbt, Python, Power BI y modelado de datos. Quiero llegar a los 8.000€ mensuales de ingresos en los próximos 12 meses trabajando con 3-4 clientes simultáneos en proyectos de entre 2.000 y 5.000€ mensuales cada uno.

Desarrolla los siguientes aspectos de mi negocio:

**1. Definición del nicho y la propuesta de valor**
Ayúdame a definir mi posicionamiento específico en el mercado de la consultoría de datos: análisis de los nichos disponibles para un perfil con mi experiencia (consultoría de analytics engineering y data stack moderno para empresas que están migrando de Excel a dbt y BigQuery; diseño e implementación de dashboards de negocio en Power BI o Looker para directivos que necesitan datos en tiempo real; consultoría de marketing analytics y atribución multicanal para empresas de e-commerce; data strategy y road map de datos para startups en fase de crecimiento que necesitan construir su primera infraestructura de datos). Para cada nicho, analiza el tipo de cliente ideal, el ticket medio, la frecuencia de proyectos y la competencia de consultoras y agencias que ya operan en ese espacio.

**2. Portfolio de servicios y proceso de entrega**
Define el catálogo de servicios con su metodología y su precio de referencia: auditoría de datos y diagnóstico (2-3 semanas, análisis del estado actual de los datos de la empresa, diagnóstico de los problemas y hoja de ruta de mejora, entregable: informe ejecutivo + presentación de hallazgos), implementación del data stack (proyecto de 2-4 meses para implementar el pipeline completo desde las fuentes al data warehouse con dbt, con dashboards finales en la herramienta de BI del cliente), retainer de analytics mensual (mantenimiento y evolución del data stack del cliente, generación de los informes de gestión mensuales, análisis ad-hoc según las necesidades del negocio), y formación al equipo interno del cliente en analítica de datos (taller de 2 días para capacitar al equipo en el uso de las herramientas de datos y en la lectura e interpretación de los dashboards).

**3. Uso de IA para multiplicar la capacidad de análisis y producción**
Define el sistema de trabajo con IA que me permite gestionar más clientes simultáneos: uso de GitHub Copilot o equivalente para acelerar la escritura de SQL y Python (generación de primeras versiones de queries y transformaciones de dbt a partir de la descripción en lenguaje natural del análisis que quiero hacer), uso de IA para documentar automáticamente los modelos de dbt y los dashboards de Power BI a partir del código y los comentarios (reduciendo el tiempo de documentación de horas a minutos), generación de los primeros borradores de los informes de análisis y las presentaciones ejecutivas para los clientes a partir de los datos y los gráficos generados, y automatización de las tareas repetitivas de cada proyecto (extracción semanal de métricas, actualización de informes de rendimiento, alertas automáticas al cliente cuando un indicador supera un umbral).

**4. Captación de clientes y desarrollo de negocio**
Define la estrategia de captación de los primeros clientes y el crecimiento posterior: estrategia de LinkedIn para generar inbound leads de directores de marketing, CFOs y CEOs de empresas medianas (publicar análisis de casos de negocio donde los datos mejoran decisiones concretas, compartir tutoriales de herramientas de datos en el lenguaje del directivo no técnico), alianzas con agencias de marketing digital y consultoras de negocio que necesitan un socio de datos para completar su oferta de servicios, proceso de gestión del boca a boca y de los referidos de clientes satisfechos (cómo pedir referidos de forma sistemática sin resultar agresivo), y estrategia de contenido en YouTube o en un podcast sobre analítica para empresas como canal de educación del mercado y generación de leads inbound.

**5. Gestión del negocio y modelo financiero**
Define los procesos de gestión de la práctica de consultoría: estructura de honorarios (tarifa diaria vs. precio por proyecto vs. retainer mensual; cuándo usar cada modelo y cuáles son las ventajas e inconvenientes de cada uno para el consultor y para el cliente), sistema de gestión de proyectos y facturación (cómo gestionar el scope creep, cómo documentar los avances semanales para el cliente, cuándo y cómo facturar según el tipo de proyecto), gestión de la tesorería como autónomo con ingresos variables (fondo de liquidez mínimo, planificación de las cargas fiscales trimestrales), y modelo de crecimiento del negocio más allá del trabajo individual (cuándo tiene sentido subcontratar a otros freelancers para proyectos de mayor escala, cómo gestionar una red de colaboradores sin que se convierta en una carga de gestión).

**6. Posicionamiento como experto y visibilidad en el mercado**
Define la estrategia de marca personal: perfil de LinkedIn optimizado como consultor de datos con casos de éxito cuantificados (qué métricas mejoré para cada cliente, sin revelar información confidencial), estrategia de publicación de contenido de valor en LinkedIn (3-4 posts semanales que demuestren mi expertise con ejemplos prácticos de problemas de datos que he resuelto), participación como ponente en meetups de la comunidad de datos (DataBeers, PyData, dbt meetups) para ganar visibilidad entre pares y entre potenciales clientes del ecosistema tecnológico, y creación de un repositorio público de plantillas y herramientas de analítica en GitHub que demuestre mi nivel técnico y genera leads inbound del ecosistema tecnológico.

Incluye el plan de los primeros 60 días para conseguir el primer cliente de retainer mensual, con las acciones concretas de captación y el proceso de propuesta y cierre del primer contrato.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Práctica de consultoría freelance de datos y analytics para empresas medianas',
                'vote_score'        => 35,
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
