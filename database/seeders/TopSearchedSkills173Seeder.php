<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills173Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing analytics avanzado',
                'description'       => 'Más allá de Google Analytics: construye el stack de analytics que te da la visión completa del cliente, desde el primer clic hasta el último touchpoint antes de comprar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en marketing analytics con experiencia implementando stacks de medición para empresas de ecommerce y SaaS. Necesito que me ayudes a diseñar e implementar un sistema de analytics de marketing que me dé visibilidad real del rendimiento de mis campañas, más allá de los informes estándar de Google Analytics.

**Mi contexto actual:**
- Tipo de negocio: [ecommerce / SaaS / lead generation / otro]
- Canales de marketing activos: [Google Ads, Meta, SEO, email, afiliados, otros]
- Volumen mensual de visitas: [rango aproximado]
- Herramientas de analytics actuales: [GA4, Looker Studio, otro]
- Ticket medio o LTV del cliente: [rango]
- Ciclo de compra: [inmediato / días / semanas / meses]
- Mayor problema de medición actual: [atribución / datos fragmentados / informes lentos / otro]

**Diseña para mí:**

1. **El stack de analytics completo**
   - Las herramientas que necesito para cubrir todo el customer journey (desde el primer clic hasta la retención)
   - Cuándo GA4 es suficiente y cuándo necesito un CDP o una herramienta de analytics de producto
   - Cómo conectar los datos de CRM con los datos de marketing para ver el ROI real
   - El modelo de datos que permite el análisis entre canales sin silos

2. **Atribución multi-touch**
   - Los modelos de atribución que existen y cuándo usar cada uno (first click, last click, linear, data-driven)
   - Cómo implementar atribución multi-touch sin depender solo de las cookies de terceros
   - El impacto de iOS 14+ y la desaparición de las cookies en la atribución
   - Soluciones de modelado probabilístico para los gaps de datos

3. **Setup de eventos y tracking avanzado**
   - Los eventos que debo trackear obligatoriamente para tener analytics útiles
   - Implementación de tracking server-side: cuándo vale la pena y cómo hacerlo
   - Google Tag Manager avanzado: triggers, variables y la arquitectura de tags que no rompe nada
   - Cómo auditar el tracking existente para encontrar los datos que se están perdiendo

4. **Informes y dashboards que toman decisiones**
   - Las métricas de marketing que realmente importan (y las vanity metrics que hay que ignorar)
   - El dashboard semanal del equipo de marketing: qué mostrar y cómo leerlo
   - Análisis de cohortes de clientes: cómo hacerlo con los datos de marketing
   - El informe mensual para el management: ROI por canal, CAC, LTV, ROAS real

5. **Experimentación y mejora continua**
   - Cómo configurar un programa de A/B testing robusto con los datos de analytics
   - Análisis de embudos de conversión: dónde se va el tráfico y por qué
   - Segmentación de audiencias basada en comportamiento para personalización
   - Cómo usar los datos de analytics para mejorar las pujas en Google y Meta

6. **Privacidad y compliance**
   - Implementación de consentimiento de cookies que no destruya los datos
   - Analytics respetuosos con la privacidad: alternativas a GA4 (Plausible, Matomo, Fathom)
   - Cómo mantener la calidad de los datos en un mundo sin cookies de terceros
   - GDPR y analytics: qué datos se pueden recoger y cuáles no

Dame un plan de implementación priorizado en 3 fases, con las herramientas concretas, los costes aproximados y el impacto esperado en la calidad de las decisiones de marketing.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar un stack completo de marketing analytics con atribución multi-touch y dashboards de toma de decisiones.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Data engineering para developers',
                'description'       => 'Construye los pipelines que mueven y transforman datos: ELT vs ETL, dbt, Airflow, Spark y los proyectos de ingeniería de datos que alimentan los analytics de la empresa.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un data engineer senior con experiencia construyendo pipelines de datos a escala para empresas de producto. Necesito que me ayudes a entender la arquitectura de datos moderna y a construir los pipelines que alimentan los analytics de la empresa.

**Mi perfil y contexto:**
- Background técnico: [developer backend / full stack / sin experiencia en datos]
- Lenguajes que domino: [Python / Scala / SQL / otros]
- Infraestructura actual: [AWS / GCP / Azure / on-premise]
- Fuentes de datos que debo integrar: [bases de datos relacionales, APIs, logs, eventos, archivos]
- Destino de los datos: [data warehouse, lago de datos, dashboards de BI]
- Volumen aproximado de datos: [GB/día, TB/día]
- Herramientas que ya tenemos: [Airflow, Spark, Kafka, dbt, ninguna]

**Explícame y ayúdame a construir:**

1. **Arquitectura de datos moderna**
   - ELT vs ETL: cuál usar y en qué situaciones
   - Data Lakehouse: qué es y cuándo tiene sentido frente a data warehouse clásico
   - Las capas de la arquitectura de datos (staging, raw, transformed, serving)
   - Medallion architecture (Bronze, Silver, Gold): cómo organizar los datos

2. **Pipelines con dbt**
   - Qué es dbt y por qué ha cambiado la ingeniería de datos en los últimos 5 años
   - Estructura de un proyecto dbt: models, tests, seeds, snapshots, macros
   - Cómo escribir transformaciones en SQL con dbt y mantenerlas testeadas
   - dbt en producción: scheduling, CI/CD, documentación automática

3. **Orquestación con Airflow**
   - Conceptos básicos de Airflow: DAGs, operators, tasks, sensors
   - Cómo diseñar un DAG robusto que no falle en producción
   - Mejores prácticas de Airflow: idempotencia, manejo de errores, retries
   - Alternativas modernas a Airflow (Prefect, Dagster) y cuándo considerarlas

4. **Procesamiento a escala con Spark**
   - Cuándo Spark es la respuesta y cuándo es overkill
   - PySpark vs. Spark SQL: cuándo usar cada uno
   - Optimización de jobs de Spark: particionamiento, caching, broadcast joins
   - Spark Structured Streaming para datos en tiempo real

5. **Calidad de datos e ingeniería de fiabilidad**
   - Tests de datos: qué validar y cómo automatizarlo (Great Expectations, dbt tests)
   - Observabilidad de datos: data lineage, alertas, SLAs de pipelines
   - Cómo gestionar los cambios de esquema sin romper los pipelines
   - Estrategias de backfill cuando un pipeline ha fallado silenciosamente

6. **Data warehouse moderno**
   - BigQuery, Snowflake, Redshift, Databricks: cuándo usar cada uno
   - Modelado dimensional: dimensiones, hechos, star schema, snowflake schema
   - Optimización de costes en los data warehouses cloud
   - El proyecto de datos de BI: cómo estructurarlo para que los analistas puedan trabajar solos

Dame un proyecto de ejemplo end-to-end (desde la extracción hasta el dashboard) con el código relevante en Python y SQL para cada componente, y el orden en el que construiría el stack si empezara desde cero mañana.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir pipelines de datos modernos con dbt, Airflow y Spark para alimentar analytics empresariales.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de dashboards efectivos',
                'description'       => 'Diseña dashboards que la gente realmente usa: los principios de diseño de la información, la jerarquía visual y los errores que hacen que los dashboards con mucha data no comuniquen nada.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en diseño de información y visualización de datos con experiencia diseñando dashboards para equipos ejecutivos y operativos. Necesito que me ayudes a diseñar un dashboard que la gente realmente consulte y que permita tomar decisiones, no solo un informe bonito que nadie abre.

**Mi contexto:**
- Dashboard que necesito diseñar: [describe brevemente su propósito]
- Audiencia principal: [C-suite / equipo de marketing / equipo operativo / todos]
- Herramienta de visualización: [Looker Studio / Tableau / Power BI / Metabase / otra]
- Métricas que debo mostrar: [lista las principales]
- Fuentes de datos: [GA4, CRM, base de datos, sheets, otras]
- Problema con los dashboards actuales: [nadie los usa / demasiada información / datos incorrectos / lento]
- Frecuencia de consulta esperada: [diaria / semanal / mensual]

**Diseña y explícame:**

1. **Los principios del buen diseño de dashboards**
   - La diferencia entre un dashboard operativo y uno estratégico y cómo diseñar cada uno
   - El principio de la carga cognitiva: por qué menos siempre es más en los dashboards
   - Jerarquía visual: cómo guiar el ojo del usuario hacia lo más importante
   - Los errores de diseño más comunes (demasiados colores, gráficos 3D, números sin contexto)

2. **Selección del tipo de gráfico correcto**
   - Cuándo usar barras, líneas, áreas, tablas, KPI cards, mapas de calor y dispersión
   - Los gráficos que engañan (el gráfico de tarta, el eje Y cortado, la escala logarítmica sin avisar)
   - Cómo visualizar tendencias, comparaciones, distribuciones y relaciones
   - Visualización de datos de tiempo real vs. datos históricos

3. **Arquitectura de la información del dashboard**
   - Cómo estructurar el dashboard en secciones lógicas (de lo macro a lo micro)
   - El flujo de lectura: cómo el usuario recorre el dashboard y qué ve primero
   - Cuántos KPIs mostrar en la primera pantalla (sin scroll)
   - Drill-down y filtros: cuándo añadirlos y cuándo complican más de lo que ayudan

4. **Color, tipografía y diseño visual**
   - Paleta de colores para dashboards: cuántos colores usar y cómo elegirlos
   - Color para significado (rojo = malo, verde = bueno) y sus limitaciones
   - Tipografía en dashboards: tamaños, pesos y legibilidad en pantalla
   - Modo oscuro vs. modo claro: cuándo usar cada uno

5. **Contexto y anotaciones que hacen los datos comprensibles**
   - Cómo añadir contexto a los números (comparación con período anterior, objetivo, benchmark)
   - Anotaciones de eventos en las líneas de tiempo (lanzamiento de campaña, cambio de precio)
   - Alertas visuales: cuándo el número es bueno, cuándo es malo y cuándo es normal
   - Texto explicativo en el dashboard: cuánto y dónde

6. **El proceso de diseño y validación del dashboard**
   - Cómo entrevistar a los stakeholders antes de diseñar el dashboard
   - El boceto en papel antes de abrir la herramienta de BI
   - Testing con usuarios: cómo saber si el dashboard funciona antes de lanzarlo
   - Cómo mantener el dashboard actualizado y relevante con el tiempo

Dame el wireframe textual del dashboard para mi caso de uso, con las secciones, los gráficos específicos y el texto de los títulos y etiquetas que usaría. Termina con la lista de los 5 errores que debo evitar a toda costa.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar dashboards de datos efectivos que la audiencia realmente consulta para tomar decisiones.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Sales intelligence basada en datos',
                'description'       => 'Usa los datos para identificar oportunidades, priorizar el pipeline y predecir el cierre: las herramientas y los análisis que separan los equipos de ventas que superan quota de los que no.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de revenue operations con experiencia implementando sistemas de sales intelligence para equipos de ventas B2B. Necesito que me ayudes a construir un sistema de inteligencia de ventas basado en datos que ayude a mi equipo a priorizar el pipeline, identificar oportunidades y predecir el cierre con mayor precisión.

**Mi contexto:**
- Tamaño del equipo de ventas: [número de AEs y SDRs]
- CRM que usamos: [Salesforce / HubSpot / Pipedrive / otro]
- ARR actual y objetivo: [rango aproximado]
- Ciclo de ventas medio: [semanas o meses]
- Número de oportunidades activas en pipeline: [rango]
- Mayor problema de pipeline: [pipeline inflado / forecast inexacto / priorización manual / otro]
- Herramientas de sales intelligence que ya tenemos: [LinkedIn Sales Navigator, ZoomInfo, Apollo, ninguna]

**Diseña para mí:**

1. **El modelo de ICP (Ideal Customer Profile) basado en datos**
   - Cómo analizar los datos de clientes actuales para definir el ICP con precisión
   - Las señales de la empresa (firmográficos, tecnográficos) que predicen el éxito
   - Cómo construir un scoring de cuentas objetivo con los datos disponibles
   - El proceso de enriquecimiento de datos de cuentas y contactos

2. **Signals de intención y momento de compra**
   - Las señales de intención de compra que se pueden detectar con datos (visitas al sitio web, contenido consumido, búsquedas, job postings)
   - Herramientas de intent data: Bombora, G2, 6sense y cuándo invertir en ellas
   - Cómo usar las señales de LinkedIn para identificar el momento de contacto
   - La combinación de señales que mejor predice la disposición a comprar

3. **Scoring de oportunidades y priorización del pipeline**
   - Cómo construir un modelo de scoring de oportunidades en el CRM
   - Los factores que más predicen el cierre en B2B (BANT, MEDDIC, engagement)
   - Cómo detectar las oportunidades estancadas antes de que se enfríen definitivamente
   - Reglas de pipeline hygiene: cuándo marcar una oportunidad como perdida

4. **Forecast de ventas más preciso**
   - Los métodos de forecasting que funcionan en B2B (pipeline coverage, historical conversion, AI-based)
   - Cómo ajustar el forecast por etapa, rep, segmento y tipo de deal
   - Las señales de riesgo en el pipeline que el manager debe monitorizar
   - Cómo hacer una revisión de pipeline semanal que mejore el forecast sin consumir todo el tiempo del equipo

5. **Análisis de win/loss**
   - Cómo hacer un análisis de win/loss que realmente mejore el proceso de ventas
   - Qué preguntar en las entrevistas de win/loss para obtener insights accionables
   - Cómo categorizar y analizar las razones de pérdida para encontrar patrones
   - Cómo compartir los insights de win/loss con producto, marketing y el equipo de ventas

6. **El dashboard de sales intelligence**
   - Las métricas del dashboard de RevOps que el equipo de ventas consulta cada día
   - Alertas automáticas del CRM: cuándo notificar al rep y cuándo al manager
   - Cómo medir la efectividad del stack de sales intelligence
   - El ROI de las herramientas de sales intelligence: cómo calcularlo y presentarlo

Dame ejemplos de los campos del CRM que necesito configurar, las fórmulas de scoring que puedo implementar sin herramientas adicionales y el proceso de revisión de pipeline que implementaría desde el primer lunes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir un sistema de sales intelligence basado en datos para priorizar pipeline y mejorar el forecast.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product analytics en profundidad',
                'description'       => 'Más allá del pageview: eventos, funnels de conversión, cohort analysis y los análisis que revelan por qué los usuarios se van antes de completar el flujo clave del producto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product analyst con experiencia en empresas de producto digital B2C y B2B. Necesito que me ayudes a construir el sistema de analytics de producto que permite entender el comportamiento de los usuarios y tomar decisiones de producto basadas en datos, no en intuición.

**Mi contexto:**
- Tipo de producto: [app web / app móvil / SaaS B2B / marketplace / otro]
- Estado actual del producto: [early stage / growth / madurez]
- Herramienta de analytics de producto: [Mixpanel / Amplitude / Heap / PostHog / GA4 / ninguna]
- Principal flujo que quiero analizar: [onboarding / activación / retención / monetización / otro]
- Métrica norte del producto (North Star Metric): [indica cuál es o si no la tienes]
- Mayor problema de datos actual: [no tenemos tracking / los datos no son fiables / no sé cómo analizarlos]

**Diseña y enséñame:**

1. **La estrategia de eventos de producto**
   - Qué es un evento y cuál es la taxonomía de eventos que necesito implementar
   - Los eventos críticos que todo producto debe trackear (onboarding, activación, retención, monetización)
   - Naming conventions para eventos que escalan sin volverse un caos
   - Cómo decidir qué trackear vs. qué dejar sin trackear (el riesgo del over-tracking)

2. **El plan de implementación del tracking**
   - Cómo documentar el tracking plan antes de implementar
   - La diferencia entre tracking del cliente (frontend) y tracking del servidor (backend) y cuándo usar cada uno
   - Herramientas de validación de eventos en tiempo real durante el desarrollo
   - Cómo mantener el tracking plan actualizado cuando el producto evoluciona

3. **Análisis de funnels de conversión**
   - Cómo construir y analizar funnels de conversión que revelan los cuellos de botella
   - La diferencia entre un funnel lineal y un funnel explorado (Sankey diagram)
   - Segmentación de funnels: cómo los resultados cambian por dispositivo, canal, cohorte
   - Cómo priorizar en qué paso del funnel trabajar para maximizar el impacto

4. **Cohort analysis y retención**
   - Qué es el cohort analysis y por qué es la métrica de retención más honesta
   - Cómo leer una tabla de cohortes y qué patrones debes buscar
   - Retention curves: cómo identificar si el producto tiene Product-Market Fit
   - Las acciones de producto que mejoran la retención en la semana 1, semana 4 y mes 3

5. **Análisis de comportamiento de usuarios**
   - Segmentación de usuarios por comportamiento vs. por demografía
   - Identificación de los power users: qué hacen distinto y cómo replicarlo
   - Path analysis: qué rutas siguen los usuarios antes de convertir o abandonar
   - Session recordings y heatmaps: cuándo son útiles y cuándo son una distracción

6. **Métricas de producto y North Star Metric**
   - Cómo definir la North Star Metric correcta para mi producto
   - El árbol de métricas: cómo conectar las métricas del equipo con la North Star
   - Las métricas lagging vs. leading y cómo usarlas en la toma de decisiones
   - Cómo presentar los analytics de producto al equipo de producto y al management

Dame el plan de tracking (los primeros 20 eventos que implementaría) para un producto del tipo que describí, el dashboard de producto semanal con las métricas clave y las preguntas de análisis que respondería en los primeros 90 días.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Implementar analytics de producto con eventos, funnels y cohort analysis para tomar decisiones basadas en datos.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'HRIS y datos de personas en RRHH',
                'description'       => 'Los sistemas de información de RRHH que consolidan los datos de empleados: selección, retribución, formación y los análisis que solo son posibles cuando los datos están en un solo lugar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de People Analytics con experiencia implementando HRIS y construyendo el modelo de datos de RRHH para empresas de entre 200 y 2000 empleados. Necesito que me ayudes a seleccionar, implementar y sacar partido al sistema de información de RRHH de nuestra empresa.

**Contexto de la empresa:**
- Número de empleados: [indica cuántos]
- Países donde operamos: [lista los países]
- Sistemas de RRHH actuales: [lista los que tienes, aunque sean hojas de Excel]
- Procesos de RRHH que queremos digitalizar: [selección / onboarding / nómina / formación / evaluación / todos]
- Presupuesto aproximado por empleado al año para tecnología de RRHH: [rango]
- Mayor dolor actual: [datos dispersos / procesos manuales / falta de informes / compliance / otro]
- Decisiones de negocio que queremos tomar con datos de personas: [rotación / planificación de plantilla / coste salarial / otros]

**Necesito tu ayuda con:**

1. **Selección del HRIS correcto**
   - El mapa del mercado de HRIS: categorías de soluciones (all-in-one vs. best-of-breed)
   - Las soluciones más relevantes para empresas de nuestro tamaño (Factorial, Personio, BambooHR, Workday, SuccessFactors)
   - Los criterios de selección que importan (integraciones, localización España/LATAM, usabilidad, precio)
   - Cómo hacer el proceso de selección de HRIS sin que se convierta en un proyecto de 18 meses

2. **El modelo de datos de personas**
   - Qué datos de empleado son imprescindibles y cuáles son nice-to-have
   - Cómo estructurar el organigrama en el sistema para que soporte las reorganizaciones
   - Datos de selección: qué guardar del ATS y cómo conectarlo con el HRIS
   - Datos de compensación: estructura salarial, histórico de revisiones y equidad retributiva

3. **Integración del stack de RRHH**
   - El sistema de registro (source of truth) de los datos de empleados
   - Cómo integrar nómina, ATS, LMS y el HRIS sin duplicar datos
   - Sincronización con Active Directory / Google Workspace para el provisioning automático
   - APIs y automatizaciones que eliminan el trabajo manual de RRHH

4. **People analytics y reporting**
   - Los informes de RRHH que debe tener cualquier empresa (headcount, rotación, coste salarial, time-to-hire)
   - Análisis de rotación: cómo predecir quién va a irse antes de que ocurra
   - Equidad salarial: cómo analizar las diferencias de compensación con datos
   - El informe mensual de personas para el comité de dirección: qué incluir y qué omitir

5. **Cumplimiento y protección de datos en el HRIS**
   - Datos de empleados y GDPR: qué se puede guardar, durante cuánto tiempo y con qué bases legales
   - Auditoría de accesos: quién puede ver qué datos de empleados y por qué
   - Documentación legal en el HRIS: contratos, nóminas, documentos de formación
   - Notificación de brechas de seguridad de datos de empleados

6. **Implementación y adopción del HRIS**
   - Cómo hacer la migración de datos históricos sin perder información
   - El plan de formación y comunicación para que los empleados y managers usen el sistema
   - Métricas de adopción del HRIS: cómo saber si la herramienta se está usando bien
   - Gobernanza del sistema: quién es el owner de los datos y del sistema a largo plazo

Dame una comparativa de 3 HRIS para nuestro perfil de empresa, el plan de implementación en fases y las 5 métricas de personas que empezaría a medir desde el primer día con los datos del sistema.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Seleccionar, implementar y sacar partido a un HRIS para centralizar los datos de personas y habilitar people analytics.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'BI financiero para el CFO',
                'description'       => 'Construye el modelo de datos financiero que permite el análisis en tiempo real: las dimensiones, los cubos OLAP y los dashboards que el CFO necesita para tomar decisiones sin esperar al cierre del mes.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director financiero con experiencia en la implementación de sistemas de business intelligence financiero para empresas medianas y grandes. Necesito que me ayudes a construir el sistema de BI financiero que permita al equipo directivo tomar decisiones con datos en tiempo real, sin tener que esperar al cierre mensual.

**Contexto de la empresa:**
- Tipo de empresa: [industrial / retail / SaaS / servicios / holding / otro]
- Tamaño: [empleados y facturación aproximada]
- ERP actual: [SAP / Navision / Sage / Oracle / otro / ninguno]
- Herramientas de BI: [Power BI / Tableau / Looker / Excel / ninguna]
- Frecuencia del cierre contable: [mensual / trimestral]
- Mayor problema actual: [datos lentos / falta de granularidad / datos incorrectos / silos de información]
- Decisiones que necesito acelerar: [pricing / presupuesto / tesorería / M&A / operaciones]

**Diseña para mí:**

1. **La arquitectura del BI financiero**
   - El modelo de datos financiero: cómo estructurar las dimensiones y los hechos para el análisis
   - Tiempo real vs. near real-time vs. datos del cierre: cuándo necesito qué
   - Cómo conectar el ERP con el data warehouse para el análisis
   - El modelo de datos de P&L, balance y cash flow que permite el drill-down

2. **Los KPIs financieros que importan**
   - Los KPIs del dashboard del CFO: métricas de rentabilidad, liquidez, eficiencia y crecimiento
   - Cómo calcular el EBITDA ajustado, el Free Cash Flow y el Working Capital desde los datos brutos del ERP
   - Métricas financieras por segmento, producto, región y canal
   - Los indicadores adelantados (leading indicators) que predicen el resultado del mes antes de que cierre

3. **Análisis de P&L multidimensional**
   - Cómo construir un P&L por dimensión (producto, región, canal, cliente) en el BI
   - Análisis de varianza: real vs. presupuesto vs. año anterior con explicación de las desviaciones
   - Análisis de márgenes: bruto, contribución y EBITDA por línea de negocio
   - Cómo hacer el P&L gerencial vs. el P&L contable y por qué son distintos

4. **Tesorería y cash flow en tiempo real**
   - El dashboard de tesorería que el CFO revisa cada mañana
   - Cash flow forecast: cómo construir el modelo de previsión de liquidez a 13 semanas
   - Working capital management: el análisis de días de cobro, pago e inventario
   - Posición bancaria consolidada: cómo agregar múltiples cuentas y entidades en tiempo real

5. **Presupuesto y forecast en el BI**
   - Cómo integrar el presupuesto anual en el data warehouse para la comparativa real vs. budget
   - Rolling forecast: qué es y cómo implementarlo en el BI financiero
   - Driver-based forecasting: cómo conectar los drivers operativos con las proyecciones financieras
   - Escenarios financieros: cómo construir el mejor caso, el peor caso y el caso base en el BI

6. **Reporting para el board y los inversores**
   - El informe mensual del board: estructura, métricas y el nivel de detalle adecuado
   - Covenants financieros: cómo monitorizar el cumplimiento en tiempo real
   - Reporting para inversores de capital riesgo: las métricas que exigen los fondos
   - Auditoría y trazabilidad: cómo asegurar que los datos del BI son auditables

Dame la estructura del modelo de datos financiero (tablas de hechos y dimensiones), el dashboard del CFO con los 12 KPIs principales y el roadmap de implementación del BI financiero en 6 meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir el sistema de BI financiero que permite análisis en tiempo real y elimina la dependencia del cierre mensual.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal analytics para el departamento jurídico',
                'description'       => 'Mide el departamento legal: cost per matter, tiempo de respuesta, volumen por tipo y los datos que permiten argumentar el presupuesto y la contratación de recursos ante el CFO.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director jurídico con experiencia implementando sistemas de legal operations y analytics en departamentos legales corporativos. Necesito que me ayudes a construir el sistema de métricas y analytics que permita gestionar el departamento legal como un departamento estratégico de la empresa, con datos que justifiquen las decisiones ante el CFO y el CEO.

**Contexto del departamento legal:**
- Tamaño del equipo: [número de abogados internos, si hay paralegals]
- Tipo de empresa: [industrial / tecnología / financiero / retail / otro]
- Principales áreas de trabajo: [contratos / laboral / M&A / regulatorio / litigación / propiedad industrial]
- Sistemas de gestión actuales: [matter management, Excel, ninguno]
- Externo vs. interno: [% de trabajo que se externaliza a despachos externos]
- Mayor dolor actual: [no sé cuánto cuestan los asuntos / no puedo justificar el presupuesto / demasiado tiempo en contratos / otro]
- Objetivo del proyecto de analytics: [justificar headcount / reducir costes externos / mejorar SLAs / todo]

**Diseña para mí:**

1. **El modelo de datos del departamento legal**
   - Qué datos debo capturar de cada asunto (matter) para el análisis
   - La taxonomía de asuntos legales: cómo clasificar el trabajo para el análisis
   - Datos de tiempo: cómo registrar las horas sin una cultura de facturación por horas
   - Datos de coste: facturas de externos, costes internos estimados y el coste total de cada asunto

2. **Cost per matter y eficiencia del departamento**
   - Cómo calcular el coste real de un contrato, un litigio o una operación corporativa
   - Benchmarking del coste legal: cómo saber si pagas demasiado a los despachos externos
   - Análisis de la eficiencia de interno vs. externo: qué conviene más hacer dentro
   - El coste legal como % de revenue: la métrica que el CFO entiende

3. **SLAs y tiempo de respuesta**
   - Los SLAs que debe comprometerse el departamento legal (tiempo de respuesta a contratos, revisiones, consultas)
   - Cómo medir el tiempo de ciclo de los contratos (desde la solicitud hasta la firma)
   - Análisis de cuellos de botella: dónde se retrasan los asuntos y por qué
   - Cómo comunicar internamente los SLAs para gestionar las expectativas del cliente interno

4. **Volumen y capacidad del departamento**
   - Análisis de carga de trabajo por abogado: cómo identificar quién está saturado
   - Predicción de la demanda legal: cómo anticipar los picos de trabajo
   - El argumento de datos para contratar un nuevo abogado interno
   - Cómo demostrar que el departamento legal no es un centro de coste sino de valor

5. **Gestión de despachos externos con datos**
   - Los KPIs que debo medir a los despachos externos que contrato
   - Cómo hacer un análisis de convergencia de proveedores legales (reducir el número de despachos)
   - Revisión de facturas de despachos externos: qué errores de facturación son más comunes
   - Negociación de honorarios con datos: cómo usar el histórico para conseguir mejores condiciones

6. **El informe del departamento legal para el management**
   - El reporting mensual del departamento legal para el CEO y el CFO
   - Cómo presentar el valor del departamento legal más allá de los costes
   - Riesgo legal: cómo cuantificar y comunicar la exposición jurídica de la empresa
   - El presupuesto del departamento legal: cómo construirlo y defenderlo con datos

Dame las métricas del dashboard de legal operations con las fórmulas de cálculo, el proceso de captura de datos que puedo implementar sin un sistema de matter management caro y la presentación de 5 slides que usaría para justificar mi presupuesto ante el CFO.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Implementar legal analytics para medir la eficiencia del departamento jurídico y justificar recursos ante el management.',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer intelligence: vista única del cliente',
                'description'       => 'Consolida todos los datos del cliente en una vista única: product usage, soporte, NPS, contratos y las señales que predicen churn o expansión antes de que ocurran.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia construyendo sistemas de customer intelligence para empresas SaaS B2B con carteras de entre 200 y 2000 clientes. Necesito que me ayudes a construir la vista única del cliente que consolide todos los datos relevantes y me permita predecir churn y oportunidades de expansión antes de que ocurran.

**Contexto:**
- Tipo de producto: [SaaS B2B / plataforma / servicios / otro]
- Tamaño de la cartera: [número de cuentas activas]
- ARR total gestionado: [rango aproximado]
- Segmentos de cliente: [Enterprise / Mid-market / SMB]
- Fuentes de datos actuales: [CRM, product analytics, soporte, NPS, contratos, facturación]
- Sistema de CS actual: [Gainsight / ChurnZero / Vitally / Planhat / manual / ninguno]
- Mayor problema de datos: [silos / falta de señales de churn / health scores inexactos / otro]

**Diseña para mí:**

1. **La arquitectura de customer intelligence**
   - Qué sistemas debo integrar para tener la vista única del cliente (CDP, CRM, product analytics, support)
   - El modelo de datos de la cuenta: qué campos son imprescindibles en el perfil del cliente
   - Cómo consolidar datos de múltiples fuentes sin que la información sea contradictoria
   - El sistema de registro (source of truth) de los datos del cliente

2. **El health score que realmente predice churn**
   - Por qué los health scores estándar no funcionan y cómo construir el tuyo propio
   - Las señales de product usage que predicen churn: login frequency, feature adoption, session depth
   - Señales de soporte como indicadores de riesgo: ticket volume, CSAT, tiempo de resolución
   - Señales relacionales: engagement con el CSM, asistencia a QBRs, respuesta al NPS

3. **Predicción de churn con datos**
   - Cómo construir un modelo predictivo de churn sin ser data scientist
   - Las señales de churn que aparecen 60-90 días antes de la cancelación
   - Segmentación de clientes en riesgo: cómo priorizar la intervención
   - El playbook de recuperación de cuentas en riesgo: cuándo y cómo actuar

4. **Identificación de oportunidades de expansión**
   - Las señales de producto que predicen el upsell (usage hitting limits, adoption de features premium)
   - Cómo identificar las cuentas con mayor potencial de expansión en la cartera actual
   - El modelo de propensity to buy para el equipo de CS
   - Cómo convertir las señales de expansión en conversaciones de negocio

5. **NPS y voz del cliente integrada**
   - Cómo integrar el NPS en el sistema de customer intelligence (no solo como número, sino como señal)
   - CSAT de soporte como señal de riesgo: qué thresholds disparan una alerta
   - Las entrevistas cualitativas y cómo estructurarlas para que alimenten el sistema de datos
   - Customer Advisory Board: cómo usar los insights cualitativos para el producto y la retención

6. **El dashboard de customer intelligence**
   - La vista de portfolio: cómo ver toda la cartera con el health score y el riesgo de un vistazo
   - La vista de cuenta: qué debe mostrar el perfil de cliente que el CSM abre cada día
   - Alertas automáticas: qué eventos disparan una notificación al CSM
   - El informe mensual de salud de la cartera para el VP de CS y el CEO

Dame el esquema del health score con las métricas y pesos que usaría para mi tipo de producto, las 10 señales de churn más predictivas que debo empezar a trackear y el proceso de alert-to-action que el equipo de CS debe seguir cuando un cliente entra en riesgo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir el sistema de customer intelligence con vista única del cliente que predice churn y expansión.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Freelance en data y business intelligence',
                'description'       => 'El nicho del consultor de datos independiente: los proyectos de BI que contratan las pymes y medianas empresas, las herramientas que dominan el mercado y las tarifas del sector.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de datos independiente con 7 años de experiencia trabajando como freelance para pymes y medianas empresas en proyectos de business intelligence y analytics. Necesito que me ayudes a posicionarme como consultor de datos freelance, a entender qué proyectos existen en el mercado y a construir una práctica independiente sostenible.

**Mi perfil:**
- Background técnico: [analista de datos / developer / finance / otro]
- Herramientas que domino: [SQL / Python / Power BI / Tableau / Excel / otras]
- Experiencia total en datos: [años]
- Sector de especialización (si tengo): [retail / finanzas / SaaS / manufacturing / ninguno aún]
- Modelo de trabajo deseado: [100% freelance / compatibilizar con empleo / consultoría part-time]
- Tarifa actual o esperada: [rango por hora o por proyecto]
- Tipo de cliente objetivo: [pymes / medianas empresas / startups / enterprise]

**Necesito que me expliques:**

1. **El mercado de consultoría de datos para empresas medianas**
   - Qué tipos de proyectos de datos contratan las pymes y medianas empresas
   - La demanda real del mercado: por qué muchas empresas prefieren un consultor externo a contratar
   - Los sectores con más demanda de consultoría de datos en España y Latinoamérica
   - Los proyectos de entrada (low ticket) vs. los proyectos recurrentes (MRR de consultoría)

2. **El posicionamiento del consultor de datos freelance**
   - Generalista vs. especialista: qué funciona mejor en datos para ganar clientes
   - Cómo elegir la especialización que maximiza la tarifa y la demanda
   - El nicho de la "analítica para pymes sin departamento de datos": cómo posicionarse aquí
   - Cómo comunicar el valor de los datos a un cliente que no tiene cultura data-driven

3. **Las herramientas que dan trabajo en el mercado**
   - El stack de herramientas que más proyectos genera en el mercado actual
   - Power BI vs. Tableau vs. Looker Studio: en qué segmento predomina cada uno
   - SQL y Python: los mínimos técnicos que necesita cualquier consultor de datos
   - Las certificaciones que tienen valor real en el mercado (no las que son solo papel)

4. **Estructura de proyectos y propuestas**
   - Los tipos de proyectos más comunes: auditoría de datos, implementación de BI, formación, analítica recurrente
   - Cómo estructurar una propuesta de consultoría de datos que el cliente entienda y apruebe
   - Fixed price vs. time & materials en proyectos de datos: cuándo usar cada modelo
   - Cómo evitar el scope creep en proyectos de datos (que siempre tienen tendencia a crecer)

5. **Tarifas y modelo de negocio**
   - Las tarifas del consultor de datos freelance en España: por hora, por día y por proyecto
   - Cómo posicionarte para subir la tarifa: las palancas que te permiten cobrar más
   - El modelo de retainer de analytics: cómo conseguir ingresos recurrentes como consultor de datos
   - Costes del consultor freelance en datos: herramientas, formación, estructura

6. **Captación de clientes y construcción de reputación**
   - Los canales que funcionan para captar los primeros clientes como consultor de datos
   - LinkedIn para consultores de datos: qué tipo de contenido atrae a los decisores
   - Las asociaciones y comunidades donde están los clientes que contratan consultoría de datos
   - Cómo construir un portfolio de proyectos de datos cuando empiezas sin clientes reales

Dame los primeros 5 proyectos tipo que podría proponer a empresas de mi entorno, la estructura de la propuesta de consultoría que usaría y el plan de los primeros 6 meses para conseguir los primeros 3 clientes de pago.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Construir una práctica de consultoría de datos freelance: posicionamiento, proyectos, tarifas y captación de clientes.',
                'vote_score'        => 44,
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
