<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills193Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing mix modeling',
                'description'      => 'Atribuye correctamente el impacto de cada canal en los resultados de negocio: la metodología estadística, las herramientas open source y cómo usar el MMM para reasignar el presupuesto de marketing con datos.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en econometría aplicada al marketing y en marketing mix modeling (MMM). Voy a darte información sobre mi empresa y mis canales de marketing, y necesito que me ayudes a diseñar e interpretar un modelo MMM completo.

**Contexto de mi negocio:**
[DESCRIBE TU EMPRESA: sector, tamaño, canales de marketing que usas, presupuesto aproximado, ciclo de venta, métricas de negocio que quieres predecir — ventas, leads, revenue, etc.]

**Datos disponibles:**
[INDICA QUÉ DATOS TIENES: series temporales de gasto por canal, datos de ventas, variables externas como estacionalidad o precio del competidor, frecuencia de los datos —diaria, semanal, mensual—]

---

Ayúdame con lo siguiente:

**1. Diseño del modelo**

Explícame cómo estructurar el modelo MMM para mi caso:
- Qué variables independientes incluir (paid media, estacionalidad, precio, eventos especiales, variables macroeconómicas)
- Cómo modelar el adstock: el efecto retardado de la publicidad en el tiempo con el parámetro de decaimiento y la función de saturación
- Cuándo usar transformaciones logarítmicas, Box-Cox o potencia para linealizar las relaciones
- Qué tamaño mínimo de dataset necesito y cómo manejar la multicolinealidad entre canales

**2. Herramientas open source**

Guíame a través de las opciones principales:
- **Robyn** (Meta): cuándo usarlo, cómo configurar los hiperparámetros, cómo interpretar los gráficos de Pareto de presupuesto óptimo
- **Lightweight MMM** (Google): sus ventajas bayesianas, cómo definir los priors de adstock y saturación
- **PyMC-Marketing**: para quienes prefieren control total sobre el modelo bayesiano
- Criterios para elegir entre estas herramientas según mi caso

**3. Validación del modelo**

Cómo saber si el modelo es fiable:
- Métricas de ajuste: R², MAPE, NRMSE y qué valores son aceptables
- Backtesting: cómo reservar un período de validación out-of-sample
- Decomposición de baseline vs. paid: cómo interpretar qué parte de las ventas es orgánica y qué parte es incremental
- Las señales de alerta que indican que el modelo está sobreajustado o mal especificado

**4. Optimización de presupuesto**

La parte más valiosa: cómo usar el MMM para tomar decisiones:
- Cómo construir la curva de respuesta marginal de cada canal
- Cómo usar el budget optimizer para encontrar el reparto óptimo dado un presupuesto fijo
- Cómo simular escenarios: qué pasa si aumento TV un 20% y reduzco social un 10%
- Cómo actualizar el modelo trimestralmente sin perder la continuidad histórica

**5. Comunicación con stakeholders**

El modelo técnicamente correcto que nadie entiende no cambia nada:
- Cómo explicar el ROI incremental por canal a un CFO que no conoce la econometría
- Qué dashboard construir para que el equipo de marketing tome decisiones basadas en el modelo
- Cómo gestionar las expectativas: qué puede y qué no puede predecir un MMM

**6. Integración con otras metodologías**

El MMM no vive en aislamiento:
- Cómo complementar el MMM con experimentos controlados (geo-lift tests) para calibrar los priors
- Cómo reconciliar el MMM con el attribution multi-touch para tener una visión completa
- Cuándo confiar más en el MMM que en el attribution basado en clics y por qué

Termina con un plan de implementación de 12 semanas para un equipo de marketing que nunca ha hecho MMM, con los hitos clave y los errores más comunes que debe evitar.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar, implementar e interpretar un modelo de marketing mix modeling para reasignar el presupuesto de marketing con rigor estadístico.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Ingeniería de datos para productos',
                'description'      => 'Construye los pipelines de datos que alimentan las features y los modelos del producto: los patrones de arquitectura, las herramientas (dbt, Airflow, Spark) y las decisiones de diseño que afectan a la escalabilidad.',
                'prompt_content'   => <<<'PROMPT'
Eres un arquitecto de datos senior con experiencia en construir plataformas de datos para productos digitales. Necesito diseñar la infraestructura de datos que soporte las features analíticas y los modelos de ML de mi producto.

**Mi contexto:**
[DESCRIBE TU PRODUCTO: tipo de aplicación, volumen de datos, eventos por día, fuentes de datos principales, equipo de ingeniería disponible, stack tecnológico actual]

**Objetivos:**
[QUÉ QUIERES HABILITAR: recomendaciones personalizadas, detección de fraude, análisis de comportamiento, predicciones de churn, features de inteligencia en el producto, etc.]

---

Diseña la arquitectura completa de datos para mi caso:

**1. Ingesta y captura de eventos**

La base de todo: capturar los datos correctamente desde el principio:
- Diseño del esquema de eventos: la estructura que hace que los datos sean útiles en el futuro, con propiedades de contexto, identidad y negocio bien definidas
- Event tracking plan: cómo documentar qué se trackea, por qué, quién es el owner y cuándo se depreca
- SDK de tracking vs. API server-side: cuándo usar cada uno y las implicaciones de privacidad y fiabilidad
- Cómo gestionar la identidad del usuario a través de sesiones, dispositivos y el estado pre/post login

**2. Arquitectura del data warehouse**

Dónde vive todo:
- Comparativa BigQuery vs. Snowflake vs. Redshift vs. Databricks para mi caso concreto
- Modelo de datos: raw layer, staging y marts, con el diseño de los fact y dimension tables más importantes para mi producto
- Estrategias de particionamiento y clustering para optimizar el coste y la velocidad de las queries
- Gestión del schema evolution: cómo añadir columnas y cambiar tipos sin romper los pipelines existentes

**3. Transformaciones con dbt**

El corazón del stack moderno:
- Cómo organizar el proyecto dbt: la estructura de carpetas, los naming conventions y las capas de transformación
- Los tests esenciales: not_null, unique, relationships y cómo escribir tests de negocio custom
- Materialización: cuándo usar table, view, incremental y snapshot
- Cómo documentar los modelos para que todo el equipo entienda qué hace cada tabla

**4. Orquestación y pipelines**

Airflow, Prefect o Dagster: cuál elegir y cómo configurarlo:
- Diseño de los DAGs para mi caso: las dependencias, los retries y el manejo de errores
- Cómo gestionar las credenciales y los secrets en los pipelines
- Monitorización: las alertas que necesito para saber que los pipelines están funcionando antes de que alguien lo reporte
- El ciclo de vida de los datos: particiones, retención y archivado

**5. Datos en tiempo real**

Cuando el batch no es suficiente:
- Cuándo necesito realmente streaming y cuándo el near-real-time con micro-batches es suficiente
- Kafka vs. Kinesis vs. Pub/Sub: la comparativa honesta para mi escala
- Cómo construir el serving layer para features que el producto necesita con latencia baja
- Feature stores: cuándo tiene sentido y qué herramientas usar (Feast, Tecton, Hopsworks)

**6. Calidad de datos y observabilidad**

Los datos malos son peores que no tener datos:
- Data contracts: cómo formalizar los acuerdos entre productores y consumidores de datos
- Herramientas de data quality: Great Expectations, dbt tests, Monte Carlo
- Data lineage: cómo saber qué tabla afecta a qué feature del producto
- El proceso para investigar y corregir anomalías en producción sin pánico

**7. Gobierno y privacidad**

Lo que no puedes ignorar:
- PII: cómo identificarlo, tokenizarlo o anonimizarlo en el pipeline
- GDPR/CCPA: el derecho al olvido en un data warehouse y cómo implementarlo técnicamente
- Control de accesos: el principio de mínimo privilegio en los datos

Termina con un roadmap de 6 meses para construir esta infraestructura desde cero con un equipo pequeño, priorizando qué construir primero según el impacto en el producto.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar la arquitectura de datos completa que alimenta las features analíticas y los modelos ML de un producto digital.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Design analytics: medir el impacto del diseño',
                'description'      => 'Establece las métricas que demuestran el valor del diseño: los KPIs de UX, las herramientas de análisis de comportamiento (Hotjar, FullStory) y los dashboards que hablan el lenguaje del negocio.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en diseño estratégico y en la medición del impacto del diseño en los resultados de negocio. Necesito construir un sistema de métricas que demuestre el valor del diseño en mi organización y que me ayude a tomar mejores decisiones de diseño.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de producto, equipo de diseño, herramientas disponibles, relación actual con el equipo de producto y negocio, madurez analítica de la organización]

---

Ayúdame a construir el sistema completo de design analytics:

**1. El framework de métricas de UX**

Las métricas que importan y por qué:
- **HEART framework** (Google): Happiness, Engagement, Adoption, Retention, Task success — cómo aplicarlo a mi producto concreto con señales y métricas específicas
- **System Usability Scale (SUS)** y **Net Promoter Score de UX**: cuándo usarlos y cómo interpretarlos
- Métricas de eficiencia: tiempo de tarea, tasa de error, tasa de abandono en flujos críticos
- Cómo conectar las métricas de UX con los KPIs de negocio: el mapa que muestra por qué mejorar la usabilidad afecta al revenue

**2. Análisis cuantitativo del comportamiento**

Las herramientas y cómo extraer insights de ellas:
- **Hotjar**: cómo usar los heatmaps, recordings y funnels para identificar los puntos de fricción más impactantes
- **FullStory** y **LogRocket**: el análisis de rage clicks, dead clicks y errores de JavaScript que revelan problemas de UX invisible
- **Google Analytics / Mixpanel**: los informes de comportamiento que todo diseñador debería revisar semanalmente
- Cómo priorizar qué flujos analizar primero cuando todo parece importante

**3. Investigación cuantitativa escalable**

La investigación que produce datos comparables en el tiempo:
- Encuestas en el producto: cuándo mostrarlas, qué preguntar y cómo evitar el sesgo de respuesta
- First-click testing y tree testing sin necesidad de laboratorio de usabilidad
- Benchmark de usabilidad: cómo crear una línea base y medir la mejora entre versiones
- A/B testing desde la perspectiva del diseñador: qué experimentos tienen sentido y cuáles son trampas

**4. El dashboard de diseño**

La visualización que habla el lenguaje del negocio:
- Qué incluir en el dashboard que el equipo directivo mirará: las métricas de UX traducidas a impacto económico
- El dashboard operativo para el equipo de diseño: las métricas de proceso y calidad
- Cómo automatizar la recogida de datos para que el dashboard se actualice solo
- Los formatos de presentación de datos de UX que resultan más persuasivos con stakeholders no técnicos

**5. Medir el impacto de los cambios de diseño**

El antes y el después que justifica la inversión:
- Cómo diseñar el proceso de medición antes de lanzar un rediseño
- Separar la señal del ruido: cuánto tiempo necesito esperar y qué métricas son suficientemente sensibles
- Cómo documentar el impacto de forma que se acumule en el tiempo y construya el caso para más recursos de diseño
- El case study interno: la estructura que convierte un proyecto de diseño en un argumento de inversión

**6. Design debt y calidad del sistema de diseño**

Las métricas que los diseñadores raramente rastrean pero que importan:
- Cobertura del design system: qué porcentaje de la UI usa componentes del sistema
- Consistencia visual: cómo medirla de forma cuantitativa
- Velocidad de entrega: de brief a handoff, y cómo mejora con una buena infraestructura de diseño
- Accesibilidad: las métricas automáticas (Lighthouse, axe) y cómo integrarlas en el proceso

**7. Construir la cultura data-driven en el equipo de diseño**

El sistema que no cambia el comportamiento no sirve de nada:
- Cómo integrar el análisis de datos en el proceso de diseño semanal sin que se sienta como burocracia
- Qué datos revisar antes de empezar un proyecto y cómo influye en las decisiones de diseño
- Cómo presentar hallazgos de data en los design critiques para que el equipo los integre

Termina con un plan de 90 días para implementar este sistema desde cero, con los quick wins que demuestran valor en las primeras dos semanas y los pasos para construir la capacidad analítica del equipo de diseño a largo plazo.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir un sistema de métricas de UX que conecta el impacto del diseño con los resultados de negocio y justifica la inversión en diseño.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sales analytics y revenue intelligence',
                'description'      => 'Analiza el pipeline, la conversión y la productividad del equipo de ventas: las métricas que predicen el resultado del quarter y los insights que el manager de ventas necesita ver cada semana.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en sales operations y revenue intelligence con experiencia en equipos de ventas B2B. Necesito construir el sistema analítico que me permita entender el rendimiento del equipo, predecir el resultado del quarter y tomar mejores decisiones como manager de ventas.

**Mi contexto:**
[DESCRIBE TU EQUIPO: número de comerciales, modelo de ventas —inbound/outbound/PLG—, ciclo de venta promedio, ACV, CRM que usas, herramientas de sales engagement, tamaño del equipo de RevOps si lo tienes]

---

Diseña el sistema completo de sales analytics para mi caso:

**1. Las métricas fundamentales del pipeline**

Lo que hay que mirar todos los días:
- Pipeline coverage: cuánto pipeline necesito por cada euro de cuota y cómo varía según el stage y la calidad del lead
- Velocity del pipeline: la fórmula completa (número de oportunidades × win rate × ACV ÷ ciclo de venta) y cómo cada palanca afecta al resultado
- Pipeline aging: cuánto tiempo lleva cada oportunidad en cada stage y cuándo declarar una oportunidad como estancada
- Weighted pipeline vs. commit: las diferencias, cuándo usar cada uno para el forecast y por qué el weighted solo es útil si las probabilidades son realistas

**2. Análisis de conversión**

Dónde se rompe el embudo:
- Win rate por stage, por comercial, por segmento, por industria y por fuente de lead — los 5 cuts que revelan dónde hay oportunidades de mejora
- Loss analysis: por qué se pierden las oportunidades, cómo categorizar las razones y qué patrones emergen cuando los analizas con suficiente volumen
- Competitive win rate: qué competidores te ganan más y en qué circunstancias
- Cómo identificar las oportunidades que estadísticamente tienen más probabilidad de cerrarse y enfocar el coaching ahí

**3. Productividad del equipo de ventas**

Lo que diferencia a los top performers:
- Las actividades que predicen el resultado: llamadas, emails, demos, propuestas — cuál correlaciona más con el cierre en tu modelo de ventas específico
- Ramp time: cuánto tarda un nuevo comercial en alcanzar el 100% de productividad y qué factores lo aceleran
- Quota attainment distribution: la curva que revela si el problema es el equipo o la cuota
- Time allocation: dónde gasta el tiempo el equipo de ventas y cuánto de eso es tiempo de venta real vs. administración

**4. Forecasting**

La predicción que el CEO necesita poder confiar:
- Los modelos de forecast: bottom-up por rep, top-down por segmento y el modelo estadístico basado en datos históricos de conversión
- Cómo calibrar el forecast con el historial de accuracy de cada comercial
- El commit call semanal: la estructura que produce mejores predicciones en menos tiempo
- Cómo mejorar el forecast accuracy trimestre a trimestre y qué métricas rastrear para saber si estás mejorando

**5. Segmentación y priorización**

No todos los clientes valen lo mismo:
- ICP scoring: cómo puntuar los leads y cuentas según su ajuste al perfil de cliente ideal y usarlo para priorizar el esfuerzo
- Análisis de la base instalada: qué clientes tienen mayor potencial de expansión y cómo priorizarlos
- Territory analysis: si el rendimiento por territorio es equitativo o si hay desequilibrios de oportunidad que afectan la comparación entre comerciales

**6. El dashboard semanal del manager**

Lo que necesitas ver cada lunes por la mañana:
- El one-pager que muestra el estado del quarter: pipeline, forecast, actividad y tendencias en una sola vista
- Las alertas automáticas que te dicen qué oportunidades están en riesgo sin tener que revisar una a una
- El scorecard de cada comercial: el resumen que hace que el 1:1 semanal sea más productivo y más enfocado en lo que importa

**7. RevOps y el stack tecnológico**

Cómo construir la infraestructura:
- Qué configurar en el CRM para que los datos sean fiables: los campos obligatorios, los procesos de higiene y la automatización que elimina el trabajo manual
- Integración con herramientas de BI: Tableau, Looker o Power BI para el equipo que quiere más flexibilidad que los reports nativos del CRM
- Revenue intelligence tools: Clari, Gong, Chorus — cuándo tienen sentido según el tamaño del equipo

Termina con las 5 métricas más importantes que revisarías cada semana si solo pudieras mirar 5, y el razonamiento detrás de esa elección.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir el sistema de métricas y dashboards que permite al manager de ventas predecir el quarter y tomar mejores decisiones de coaching.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product analytics avanzado',
                'description'      => 'Más allá del funnel básico: la segmentación de usuarios, el análisis de cohortes, la retención por feature y los experimentos multivariante que mejoran el producto con datos reales.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en product analytics con experiencia en productos digitales de consumo y B2B. Necesito profundizar en las técnicas analíticas avanzadas que van más allá de los funnels básicos para entender realmente el comportamiento de mis usuarios y mejorar el producto con datos.

**Mi producto:**
[DESCRIBE TU PRODUCTO: tipo de aplicación, DAU/MAU aproximados, modelo de negocio —freemium, suscripción, transaccional—, herramientas de analytics que usas, nivel de madurez analítica del equipo]

**El problema que quiero resolver:**
[QUÉ PREGUNTA QUIERES RESPONDER: por qué los usuarios no activan, qué features retienen más, por qué cae la retención en el día 30, qué segmentos convierten mejor, etc.]

---

Ayúdame a dominar las técnicas de product analytics avanzado:

**1. Análisis de cohortes**

La técnica más reveladora para entender la retención:
- Cohortes de retención: cómo leerlas, qué patrones buscar y cómo diferenciar un problema de activación de un problema de retención a largo plazo
- Cohortes de comportamiento: agrupar usuarios por la primera acción que realizaron y ver si influye en la retención
- Cohortes de producto: cómo comparar cohortes antes y después de un cambio de producto para medir su impacto real en la retención
- El análisis de smiles y curves: interpretar las formas de las curvas de retención y qué dicen sobre el valor que entrega el producto

**2. Segmentación de usuarios**

No todos los usuarios son iguales:
- Segmentación comportamental: los clusters que emergen cuando agrupas a los usuarios por cómo usan el producto, no solo por sus atributos demográficos
- Power users: cómo identificarlos, qué hacen diferente y qué puedes aprender de ellos para mejorar la activación del resto
- Usuarios en riesgo: las señales de comportamiento que predicen el churn con suficiente antelación para intervenir
- Segmentación por jobs-to-be-done: cómo conectar los segmentos de comportamiento con los trabajos funcionales que el producto les resuelve

**3. Feature analytics**

Más allá del adoption rate:
- Feature engagement: DAU, frecuencia de uso, profundidad de uso — las tres dimensiones que definen si una feature tiene tracción real
- Feature stickiness: la relación entre el uso de una feature y la retención del usuario, la pregunta de si la feature importa o si simplemente la usan los usuarios que ya estaban retenidos
- Feature discovery: qué porcentaje de usuarios encuentra cada feature, en qué momento y a través de qué camino
- Cómo hacer la decisión de deprecar una feature con datos y no con intuición

**4. Análisis de activación**

El momento más crítico del journey:
- El aha moment: cómo encontrarlo empíricamente analizando qué acciones en las primeras 24-48 horas correlacionan con la retención a 30 días
- Activation funnel: los pasos, las tasas de conversión y cómo identificar el cuello de botella más impactante
- Time to value: cuánto tarda el usuario en experimentar el valor central del producto y cómo reducir ese tiempo
- Onboarding experiments: cómo diseñar y medir los experimentos de activación con el rigor estadístico suficiente

**5. Experimentación avanzada**

Más allá del A/B test básico:
- Diseño de experimentos: cómo calcular el sample size necesario, cuánto tiempo esperar y qué métricas son lo suficientemente sensibles para detectar cambios reales
- Tests multivariante: cuándo tiene sentido, cómo controlar la múltiple comparación y cómo interpretar las interacciones entre variantes
- Switchback experiments y synthetic control: para cuando el A/B clásico no es aplicable
- Cómo construir una cultura de experimentación que permita lanzar más tests con más rigor sin que el proceso ahogue la velocidad

**6. Análisis del funnel de conversión**

Para productos con modelo freemium o de prueba gratuita:
- Drop-off analysis: por qué la gente no completa el setup, no convierte al plan de pago o no renueva
- Análisis de la sesión antes de la conversión: qué hizo el usuario en las 48 horas previas a pagar
- Cohort-based conversion: cómo varía la conversión según la cohorte de adquisición y qué dice eso sobre la calidad del tráfico

**7. Construir la infraestructura analítica del equipo de producto**

El sistema que escala:
- El event tracking plan: la documentación viva que hace que los datos sean confiables y el equipo sepa qué medir para cada initiative
- Las métricas del product team: OKRs de producto, north star metric y métricas de input — cómo diseñar el sistema de métricas que alinea al equipo
- Data democratization: cómo hacer que los PMs puedan responder sus propias preguntas de datos sin depender siempre de un analista

Termina con el análisis concreto que realizarías esta semana para responder la pregunta de negocio que describí al principio, con el SQL o la configuración en la herramienta específica que uso.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Aplicar técnicas avanzadas de product analytics — cohortes, segmentación, feature analytics y experimentación — para mejorar la retención y la activación.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'People analytics: datos para decisiones de personas',
                'description'      => 'Usa los datos de RRHH para tomar mejores decisiones: la predicción de fuga de talento, el análisis de eficacia del recruiting y las métricas que convierten RRHH en un socio estratégico.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en people analytics y en el uso estratégico de datos para la gestión de personas. Necesito construir la capacidad analítica en RRHH que permita tomar mejores decisiones sobre talento, recruiting y organización con evidencia en lugar de intuición.

**Mi contexto:**
[DESCRIBE TU ORGANIZACIÓN: tamaño de la empresa, sector, tamaño del equipo de RRHH, herramientas de HRIS que usas, madurez analítica actual, qué decisiones de personas quieres mejorar con datos]

---

Diseña el sistema completo de people analytics para mi organización:

**1. Los fundamentos: qué datos tienes y qué puedes hacer con ellos**

El inventario de datos de personas:
- Los datos del HRIS: demografía, antigüedad, movimientos, compensación, performance ratings, ausencias
- Los datos de recruiting: fuentes de candidatos, tiempo en cada fase, offer acceptance rate, time-to-hire por perfil
- Los datos de engagement: encuestas de clima, pulse surveys, resultados de 360
- Los datos de negocio: performance individual si está disponible, objetivos, proyectos

**2. Predicción de fuga de talento**

La palanca de retención más potente:
- Las señales que predicen la salida antes de que suceda: qué variables del HRIS correlacionan históricamente con la rotación voluntaria
- Cómo construir un modelo de flight risk sin caer en el determinismo o en la discriminación algorítmica
- El score de riesgo de fuga: cómo usarlo para priorizar las conversaciones de retención sin que se convierta en una profecía autocumplida
- Las intervenciones que funcionan: qué acciones tienen mayor impacto en la retención una vez identificado el riesgo

**3. Análisis de eficacia del recruiting**

Contratar bien es la decisión de personas más importante:
- Quality of hire: cómo medirlo conectando los datos del proceso de selección con el performance posterior del candidato contratado
- Sourcing analytics: qué canales producen los mejores candidatos, no solo el mayor volumen
- Funnel de recruiting: las tasas de conversión por fase, por recruiter, por tipo de perfil y cómo identificar dónde se rompe el proceso
- Predicción del tiempo de cobertura: cómo estimar cuánto tardará cubrir una posición según el historial de posiciones similares

**4. Análisis de compensación y equidad**

Los datos que protegen a la empresa y a los empleados:
- Pay equity analysis: cómo detectar brechas salariales por género, origen o edad ajustadas por puesto, nivel y antigüedad
- Bandas salariales basadas en datos: cómo construirlas usando benchmarks de mercado y datos internos
- Compa-ratio y position in range: las métricas que dicen si cada persona está bien posicionada en su banda y las implicaciones para la retención

**5. Análisis de performance y potencial**

Más allá de la calibración subjetiva:
- Distribución de performance ratings: si la campana de distribución es real o si hay sesgos sistemáticos por manager, departamento o demografía
- Correlación entre performance y retención: los datos que muestran si estás perdiendo a los mejores o si la rotación es sana
- Identificación de high potentials con datos: qué comportamientos y trayectorias predicen el desempeño futuro en roles de mayor responsabilidad

**6. Engagement y cultura con datos**

Pasar de la encuesta anual al pulso continuo:
- Diseño de una encuesta de engagement que mida lo que importa y sea estadísticamente confiable
- Análisis de los resultados: cómo ir más allá del score agregado y encontrar los segmentos con más necesidad de atención
- eNPS: cómo calcularlo, interpretarlo y hacer seguimiento de las tendencias
- Correlación entre engagement y negocio: los datos que muestran el impacto del clima laboral en la productividad, la retención y la satisfacción del cliente

**7. El dashboard ejecutivo de personas**

La herramienta que convierte RRHH en socio estratégico:
- Las métricas que el CEO y el board necesitan ver: headcount, attrition, time-to-hire, costes de personal y ROI de las iniciativas de RRHH
- El workforce planning dashboard: la visión de la plantilla futura según los planes de negocio
- Cómo presentar datos de personas con el rigor y la sensibilidad que requieren — privacidad, anonimización y ética del dato

**8. Ética y privacidad en people analytics**

Los límites que no debes cruzar:
- RGPD aplicado a los datos de empleados: qué puedes almacenar, procesar y cómo gestionar el consentimiento
- Algoritmos de RRHH y sesgos: cómo auditar los modelos para que no perpetúen discriminación histórica
- Cuándo los datos no deben sustituir al juicio humano y cómo combinar ambos

Termina con las 3 iniciativas de people analytics de mayor impacto que abordarías primero en mi organización, con el razonamiento y el plan de implementación.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir la capacidad de people analytics que permite predecir la fuga de talento, mejorar el recruiting y convertir RRHH en un socio estratégico basado en datos.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Financial modeling avanzado',
                'description'      => 'Construye modelos financieros sofisticados: los modelos de valoración (DCF, comparables), los modelos operativos y las técnicas de sensibilidad y escenarios que hacen que los modelos sean útiles en condiciones de incertidumbre.',
                'prompt_content'   => <<<'PROMPT'
Eres un analista financiero senior con experiencia en investment banking, private equity y finanzas corporativas. Necesito construir modelos financieros sofisticados que resistan el escrutinio de inversores, directivos y banqueros.

**Mi caso:**
[DESCRIBE TU SITUACIÓN: si estás valorando una empresa para M&A, levantando capital, haciendo un análisis de inversión, construyendo el modelo operativo de tu empresa, o preparando un business case interno. Incluye el sector, el tamaño aproximado de la empresa y el propósito del modelo]

---

Guíame a través del financial modeling avanzado para mi caso:

**1. Arquitectura del modelo**

Un modelo bien construido se mantiene y se audita:
- La estructura de sheets: assumptions, inputs, cálculos, outputs y dashboards — la separación que hace los modelos mantenibles
- Coding conventions: nombres de variables, colores de celda por tipo, protección de rangos y documentación inline
- Cómo diseñar un modelo que escale: modular, con un solo punto de verdad para cada input y sin fórmulas hardcoded en el medio de los cálculos
- Los errores estructurales más comunes que hacen que los modelos fallen en el momento menos oportuno

**2. El modelo de tres estados**

La base de cualquier modelo financiero:
- Income statement: los drivers de revenue más apropiados para mi sector (price × volume, cohort-based, ARR/MRR para SaaS) y cómo proyectarlos con rigor
- Balance sheet: los working capital drivers, el ciclo de conversión de caja y cómo proyectar los activos fijos con las inversiones previstas
- Cash flow statement: el método indirecto, el FCFF y el FCFE, y por qué la caja es la métrica que no miente
- Cómo hacer que los tres estados cuadren automáticamente y cómo diagnosticar cuando no cuadran

**3. Modelos de valoración**

Las técnicas que el mercado usa para poner precio:
- **DCF (Discounted Cash Flow)**: cómo proyectar el FCFF, calcular el WACC con rigor —la beta, la estructura de capital, el tax shield— y estimar el terminal value con el método de perpetuidad y el múltiplo de salida
- **Trading comparables**: cómo seleccionar el peer group, ajustar los múltiplos por diferencias de crecimiento y márgenes, y construir la tabla de comps que no induce a error
- **Transaction comparables (precedent transactions)**: el ajuste por control premium, la diferencia entre EV/EBITDA en diferentes entornos de tipos y cómo encontrar las transacciones relevantes
- **LBO model**: la estructura de capital, las fuentes y usos, el modelo de deuda con amortización y sweep, y cómo calcular la TIR del sponsor

**4. Análisis de sensibilidad y escenarios**

El modelo sin sensibilidad no sirve para tomar decisiones:
- Sensitivity tables de una y dos variables: qué variables combinar para que la tabla sea informativa y no decorativa
- Análisis de escenarios: cómo construir el caso base, el caso optimista y el caso de estrés con narrativa coherente detrás de cada uno
- Tornado chart: las variables que más afectan al resultado del modelo y por qué es tan importante para comunicar el riesgo
- Monte Carlo simulation en Excel: cómo implementarla con @RISK o con macros para tener una distribución de probabilidad del valor en lugar de un número puntual

**5. Modelos operativos específicos por sector**

Cada sector tiene sus drivers únicos:
- SaaS/tech: el modelo de ARR con cohorts, NRR, CAC payback y LTV/CAC — las métricas que los inversores de growth esperan ver
- Retail/consumer: el modelo unit economics por tienda, el four-wall EBITDA y la expansión con capex por apertura
- Inmobiliario: el modelo de cash flows por activo, la NOI yield, el cap rate y el modelo de financiación con deuda hipotecaria
- Industria/manufactura: el modelo de capacidad, utilización, throughput y el análisis de make vs. buy

**6. Presentación y comunicación del modelo**

Un modelo brillante que no se entiende no convence:
- El bridge chart: cómo mostrar la evolución de un KPI de un año a otro descomponiendo el efecto de cada driver
- El waterfall de valoración: cómo mostrar de dónde viene el valor y por qué no todo el EV llega a los accionistas
- Cómo presentar el rango de valoración sin que parezca que el modelo da cualquier respuesta — la honestidad intelectual en la presentación de resultados
- El executive summary de una página que sintetiza el modelo para quien no va a leer el Excel

Termina con una revisión del modelo que estoy construyendo: dame los 5 checks de calidad que debo hacer antes de compartirlo con un inversor o con el comité de dirección.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Construir modelos financieros sofisticados —valoración DCF, LBO, trading comps— con la arquitectura, los análisis de sensibilidad y la presentación que resisten el escrutinio profesional.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal analytics y gestión de riesgos con datos',
                'description'      => 'Aplica el análisis de datos a la práctica jurídica: la predicción de litigios, el análisis de precedentes y las herramientas que ayudan a los despachos a tomar mejores decisiones con datos.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en legal analytics y en la aplicación de metodologías de datos a la práctica jurídica. Necesito entender cómo los datos pueden mejorar las decisiones en mi despacho o departamento legal, desde la gestión del riesgo hasta la estrategia procesal.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: si eres de un despacho o de un departamento legal interno, las áreas de práctica —litigación, M&A, laboral, compliance, contratos—, el tamaño del equipo, las herramientas tecnológicas que ya usas]

---

Guíame a través del legal analytics aplicado a mi práctica:

**1. Análisis de jurisprudencia y precedentes**

Más allá de la búsqueda tradicional en bases de datos:
- Cómo usar las herramientas de legal analytics (Lex Machina, Westlaw Analytics, Docket Alarm) para analizar el historial de decisiones de un juez concreto, un tribunal o un árbitro
- Análisis de precedentes: qué factores han sido más predictivos de la decisión en casos similares al mío
- Timing analysis: cuánto tarda el tribunal en resolver, qué fases del proceso se alargan más y cómo afecta al presupuesto del cliente
- Cómo usar estos insights para tomar decisiones estratégicas: si litigar o negociar, ante qué tribunal presentar, qué argumentos priorizar

**2. Predicción de resultados judiciales**

La pregunta más difícil: qué va a pasar:
- Los modelos de predicción de resultados: qué variables incluyen, cuál es su precisión real y cómo interpretarlos sin sobreestimar su fiabilidad
- Análisis del juez: el historial de decisiones en casos similares, el porcentaje de sentencias a favor del demandante vs. el demandado, la receptividad a determinados argumentos
- Análisis del oponente: el perfil del despacho contrario, su estrategia histórica y sus debilidades procesales
- Cómo presentar un análisis de probabilidades a un cliente sin crear falsas certezas ni generar pánico innecesario

**3. Gestión del riesgo legal con datos**

Para los departamentos jurídicos internos:
- Legal risk mapping: cómo identificar, cuantificar y priorizar los riesgos legales de la empresa usando datos de litigación histórica, cambios regulatorios y exposición contractual
- Provisiones para litigios: los modelos actuariales que ayudan a calcular las reservas con mayor precisión
- Compliance analytics: cómo usar los datos de incidentes y sanciones del sector para identificar los riesgos regulatorios emergentes antes de que lleguen a tu empresa
- El dashboard de riesgo legal para el comité de dirección: las métricas que el CEO y el CFO necesitan entender sin necesidad de ser abogados

**4. Contract analytics**

Los contratos como datos:
- Cómo usar las herramientas de contract analytics (Kira, Luminance, Ironclad Analytics) para extraer insights de grandes volúmenes de contratos
- Due diligence acelerada: cómo el machine learning identifica las cláusulas de riesgo en centenares de contratos en horas en lugar de semanas
- Contract portfolio analysis: el análisis de la cartera de contratos de la empresa para identificar exposiciones agregadas, vencimientos y oportunidades de renegociación
- Estándares de contratación basados en datos: qué cláusulas resultan más conflictivas históricamente y cómo simplificar los contratos para reducir la fricción y el coste de negociación

**5. Legal operations y eficiencia**

Los datos que mejoran el rendimiento del departamento legal:
- Matter management analytics: el coste por asunto, el tiempo de resolución, la eficiencia por abogado y la comparación con benchmarks del sector
- Spend analytics: cómo analizar el gasto en asesoría externa para identificar despachos, prácticas y tipologías de asuntos que se pueden optimizar
- Billing analytics: la detección de patrones de facturación anómalos en los despachos externos usando datos históricos
- El modelo de make vs. buy: qué tipo de trabajo legal tiene más sentido internalizar y qué tiene sentido externalizar basándose en coste, complejidad y volumen

**6. Herramientas y tecnología**

El stack de legal analytics:
- Plataformas específicas de legal analytics: Lex Machina (litigación US), Relativity Analytics (e-discovery), DISCO (revisión de documentos), y sus equivalentes para el mercado español/europeo
- Cómo construir capacidades básicas de analytics con herramientas generalistas: Power BI conectado al sistema de gestión de expedientes, o Python para el análisis de texto jurídico
- Los criterios para evaluar y seleccionar herramientas de legal tech: el ROI realista, las curvas de adopción y los errores de implementación más comunes

Termina con las 3 iniciativas de legal analytics de mayor impacto que abordarías primero en mi práctica específica, con los recursos necesarios y el tiempo estimado para ver resultados.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Aplicar el análisis de datos a la práctica jurídica para mejorar la estrategia procesal, la gestión del riesgo legal y la eficiencia del departamento jurídico.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Churn prediction y customer health scoring',
                'description'      => 'Construye los modelos que predicen cuándo un cliente va a cancelar antes de que lo haga: las señales, los algoritmos y el proceso de intervención temprana que salva contratos.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en customer success analytics y en la construcción de modelos predictivos de churn para empresas SaaS y de suscripción. Necesito diseñar el sistema completo de predicción de churn y health scoring que permita intervenir antes de que los clientes cancelen.

**Mi contexto:**
[DESCRIBE TU PRODUCTO Y CLIENTES: tipo de producto SaaS o de suscripción, tamaño típico de cliente —SMB, mid-market, enterprise—, ARR aproximado, ciclo de contrato habitual, señales de uso que ya tienes disponibles, herramientas de CS que usas]

---

Diseña el sistema completo de churn prediction y customer health para mi caso:

**1. Las señales que predicen el churn**

Antes de construir el modelo, entender qué importa:
- Señales de uso: la caída en los logins, el abandono de features críticas, la reducción del número de usuarios activos — cómo identificar los patrones de uso que históricamente preceden a la cancelación
- Señales de sentimiento: los tickets de soporte, el NPS bajo, las conversaciones de renovación tensas — y cómo transformar datos cualitativos en señales cuantificables
- Señales relacionales: los cambios de interlocutor en el cliente, la respuesta a los QBRs, el engagement con los emails de CS
- Señales externas: noticias de layoffs, cambios de liderazgo, adquisiciones o problemas financieros del cliente que no vienen de los datos de producto

**2. El modelo de customer health score**

La puntuación que resume el estado de cada cuenta:
- Los componentes del health score: cómo seleccionar las dimensiones (producto, relación, outcomes, negocio) y asignar pesos basados en datos históricos de churn
- La fórmula del health score: cómo combinar las señales en una puntuación única, qué escala usar y cómo definir los umbrales de riesgo (verde/amarillo/rojo)
- Validación del modelo: cómo saber si el health score realmente predice el churn o si solo refleja el optimismo del CSM
- Cómo actualizar el modelo cuando el producto cambia o las señales dejan de ser relevantes

**3. Modelos predictivos de churn**

La ingeniería detrás de la predicción:
- Feature engineering: qué variables crear a partir de los datos crudos de uso para alimentar el modelo (métricas de tendencia, ratios, percentiles respecto al peer group)
- Algoritmos apropiados para el churn prediction: logistic regression como baseline, random forest, gradient boosting — cuándo cada uno tiene ventajas y cómo interpretar sus outputs
- El problema del class imbalance: el churn suele ser una clase minoritaria y cómo gestionarlo con oversampling, undersampling o ajuste de los pesos de clase
- Evaluación del modelo: AUC-ROC, precision-recall, lift charts — qué métricas importan más según el coste relativo de los falsos positivos y falsos negativos en mi contexto

**4. El proceso de intervención temprana**

El modelo sin proceso de respuesta no salva contratos:
- Segmentación de cuentas en riesgo: no todos los clientes en rojo requieren la misma respuesta — cómo priorizar según ARR, probabilidad de churn y coste de retención
- El playbook de intervención: qué hace el CSM cuando detecta una cuenta en riesgo — la secuencia de acciones, los mensajes y las escalaciones
- Save plays: las ofertas, descuentos y cambios de plan que tienen mayor historial de éxito en la retención de cuentas en riesgo — y cómo evitar que el save play enseñe a los clientes a amenazar con cancelar para obtener descuentos
- Medición de la efectividad de las intervenciones: cómo saber si el proceso de retención está funcionando y qué ajustar

**5. Integración con las herramientas del equipo de CS**

Para que el modelo se use, tiene que estar donde trabaja el equipo:
- Integración con el CRM y el CS platform: cómo llevar el health score a Salesforce, HubSpot, Gainsight o ChurnZero para que sea visible en el flujo de trabajo diario
- Alertas automáticas: las notificaciones que activan el proceso de intervención sin que el CSM tenga que revisar un dashboard
- El reporte semanal de riesgo: cómo presentar el estado de la cartera al liderazgo de CS con los datos correctos y sin alarmismo innecesario

**6. Métricas del programa de retención**

Cómo saber si el sistema funciona:
- Net Revenue Retention (NRR): la métrica maestra y cómo descomponerla en sus componentes de churn, contracción, expansión y reactivación
- Gross Revenue Retention (GRR): lo que mide el churn puro sin el efecto de la expansión
- Churn rate por segmento: por tamaño de cuenta, por industria, por cohorte de adquisición y por uso del producto
- Cómo establecer targets de retención realistas según el historial y el tipo de producto

Termina con el plan de implementación para los primeros 90 días: cómo construir la v1 del health score con los datos disponibles hoy, aunque sean imperfectos, y cómo iterarlo a medida que se acumula más información.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar el sistema completo de predicción de churn y customer health scoring que permite intervenir antes de que los clientes cancelen y mejorar la retención.',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Analytics para el negocio freelance',
                'description'      => 'Analiza tu propio negocio como si fuera una empresa: las métricas de pipeline, conversión y rentabilidad por proyecto que revelan qué clientes, qué servicios y qué canales te dan más retorno.',
                'prompt_content'   => <<<'PROMPT'
Eres un asesor de negocio especializado en ayudar a freelancers y consultores independientes a entender y mejorar sus números. Necesito analizar mi negocio con la misma profundidad con la que analizaría una empresa, para tomar mejores decisiones sobre qué clientes aceptar, qué servicios ofrecer y cómo crecer.

**Mi contexto:**
[DESCRIBE TU NEGOCIO FREELANCE: tipo de servicio, años de experiencia, rango de tarifas, número de clientes activos, canales de adquisición —referidos, LinkedIn, web propia, plataformas—, herramientas de gestión que usas]

---

Ayúdame a construir el sistema de analytics para mi negocio freelance:

**1. Las métricas financieras que sí importan**

Más allá de "cuánto facturé este mes":
- **Revenue efectivo vs. facturado**: la diferencia cuando hay impagos, descuentos tardíos o proyectos que se alargan sin compensación adicional
- **Tarifa efectiva por hora**: el cálculo honesto que divide el ingreso real entre todas las horas trabajadas —incluyendo reuniones no facturadas, revisiones ilimitadas y tiempo administrativo
- **Margen por proyecto**: si tienes costes directos —herramientas, subcontratistas, licencias— qué margen te queda realmente y cuáles son los proyectos más rentables
- **Revenue recurrente vs. proyectos únicos**: la proporción que determina la estabilidad de tu negocio y cómo mejorarla

**2. Análisis del pipeline y la conversión**

El embudo de ventas del freelancer:
- Cómo registrar y analizar cada oportunidad: las fuentes de leads, las tasas de conversión por etapa y el tiempo medio desde el primer contacto hasta el contrato firmado
- Win rate por tipo de proyecto, por tipo de cliente y por canal de adquisición: los datos que revelan dónde tienes más tracción y dónde estás perdiendo el tiempo
- Por qué rechazas propuestas: el análisis de los proyectos que declinaste y si fue la decisión correcta en retrospectiva
- Precio y win rate: la curva que muestra cómo afecta tu tarifa a la probabilidad de conversión y dónde está el punto óptimo

**3. Segmentación de clientes**

No todos los clientes valen lo mismo:
- **Análisis RFM para freelancers**: Recencia (cuándo fue el último proyecto), Frecuencia (cuántos proyectos) y Valor monetario (cuánto ha facturado cada cliente)
- Los clientes que valen más de lo que parece: los que refieren, los que renuevan, los que pagan rápido y los que respetan el alcance
- Los clientes que cuestan más de lo que aportan: el cliente pequeño con exigencias de enterprise, el que siempre pide revisiones extras, el que paga tarde
- Cómo usar este análisis para decidir a qué clientes priorizar, a cuáles subir la tarifa y a cuáles no renovar

**4. Análisis de canales de adquisición**

Dónde viene el negocio realmente:
- Tracking del origen de cada proyecto: sin esto, todo lo demás es especulación
- ROI por canal: si inviertes tiempo o dinero en LinkedIn, en tu web o en networking, cuánto negocio genera cada canal en términos de valor facturado
- Calidad de lead por canal: no solo cuántos proyectos vienen de cada fuente sino cuáles son más rentables, más alineados con tu ICP y más fáciles de gestionar
- El canal de referidos: el análisis de quién te refiere más y cómo cultivar esas relaciones estratégicamente

**5. Análisis de tiempo y productividad**

El recurso que no se puede comprar:
- Time tracking honesto: las herramientas (Toggl, Harvest, Clockify) y la disciplina de registrar todo, incluyendo el trabajo que no facturarás
- Distribución del tiempo: qué porcentaje de tu tiempo es billable y qué porcentaje es administración, marketing, aprendizaje y tiempo no productivo
- Capacidad y pipeline: cuántos proyectos puedes gestionar simultáneamente sin deteriorar la calidad y cómo usarlo para planificar la carga de trabajo
- El análisis estacional: los meses de alta y baja demanda histórica para planificar vacaciones, formación e inversiones en el negocio

**6. El dashboard del freelancer**

Las métricas que revisarías cada semana:
- Revenue del mes actual vs. objetivo y comparación con el mismo mes del año anterior
- Pipeline: el valor total de las oportunidades activas ponderado por probabilidad de cierre
- Cashflow: el forecast de cobros de los próximos 60 días y las facturas vencidas
- Tarifa efectiva por hora de la última semana y comparación con el objetivo

**7. Planificación y objetivos**

Usar los datos para decidir el futuro:
- Cómo establecer objetivos de revenue que sean retadores pero realistas basándote en tu historial y en tu capacidad
- Análisis de escenarios: qué pasa si subo la tarifa un 20%, si reduzco el número de clientes o si añado un servicio productizado
- El break-even de las inversiones en el negocio: cuánto negocio adicional necesitas generar para justificar una formación, una herramienta o la contratación de un colaborador

Termina construyendo conmigo la hoja de cálculo mínima viable: las pestañas exactas que necesito, las columnas de cada pestaña y las fórmulas clave para tener el control financiero de mi negocio freelance sin que se convierta en un trabajo a tiempo completo.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir el sistema de métricas y dashboards que permite al freelancer entender qué clientes, servicios y canales le dan más rentabilidad y tomar mejores decisiones de negocio.',
                'vote_score'       => 42,
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
