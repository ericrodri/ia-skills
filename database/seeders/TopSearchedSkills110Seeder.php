<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills110Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Google Analytics 4 avanzado para marketing',
                'description'      => 'Configura GA4, interpreta los informes y toma decisiones de marketing con los datos que la mayoría de los equipos ignora.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en analytics de marketing con experiencia avanzada en Google Analytics 4 que ha ayudado a equipos de marketing a pasar de reportes descriptivos a análisis que cambian las decisiones de negocio.

Necesito tu ayuda para sacar el máximo partido a Google Analytics 4 en mi empresa. Proporciona el contexto de tu situación:

**Contexto del negocio y el uso actual de analytics:**
- Tipo de negocio y modelo: [e-commerce / SaaS / generación de leads / media]
- Tráfico mensual aproximado: [visitas o usuarios únicos]
- Nivel actual de uso de GA4: [recién configurado / uso básico / uso intermedio]
- Principal pregunta de negocio sin respuesta: [qué quieres saber que hoy no puedes saber]
- Canal de marketing principal: [SEO / SEM / social / email / directo]

Con este contexto, desarrolla una guía completa de GA4 avanzado:

**1. Auditoría de la configuración actual de GA4**
Explica cómo auditar si GA4 está correctamente configurado: verificación del tag, configuración de eventos de conversión, exclusión de tráfico interno, vinculación con Google Ads y Search Console, configuración de audiences para remarketing. Los errores de configuración más comunes que hacen que los datos sean incorrectos y cómo detectarlos y corregirlos.

**2. Eventos y conversiones que importan**
Más allá de los eventos automáticos de GA4, qué eventos personalizados debería medir según el tipo de negocio: para e-commerce (add to cart, begin checkout, purchase), para SaaS (sign up, trial start, feature usage, upgrade), para generación de leads (form start, form complete, call click, chat start). Cómo configurar cada evento con los parámetros correctos para que los datos sean útiles en los informes.

**3. Los informes de GA4 que la mayoría ignora**
Guía práctica de los informes más valiosos que el equipo de marketing debería revisar semanalmente: informe de caminos de usuario (user journey), análisis de cohortes de retención, informes de embudo de conversión, análisis de atribución, informes de audiencias. Para cada informe, qué pregunta responde y cómo interpretar los datos de forma accionable.

**4. Análisis de atribución con GA4**
Cómo usar los modelos de atribución de GA4 para entender qué canales realmente contribuyen a la conversión: la diferencia entre last-click, data-driven y los modelos intermedios, cómo usar el informe de rutas de conversión para ver la interacción de canales, cuándo confiar en el modelo data-driven y cuándo tiene demasiado poco volumen para ser fiable.

**5. Segmentos y audiencias para análisis más profundo**
Cómo crear segmentos de usuarios avanzados en GA4 para comparar el comportamiento de distintos grupos: compradores vs. no compradores, usuarios de alta frecuencia vs. ocasionales, usuarios que convirtieron en menos de una sesión vs. los que tardaron más. Cómo usar estos segmentos para identificar los patrones de comportamiento que predicen la conversión.

**6. Exportación a BigQuery y análisis avanzado**
Para quién tiene sentido la integración GA4-BigQuery, qué análisis se vuelven posibles que no son posibles en la interfaz de GA4, cómo empezar con las queries SQL más útiles para análisis de marketing incluso si no eres técnico. Las tres queries de BigQuery que todo equipo de marketing debería conocer.

**7. Dashboard de marketing con GA4 como fuente de datos**
Cómo construir un dashboard de marketing en Looker Studio conectado a GA4 que el equipo revise semanalmente: las métricas que deben estar en el dashboard, cómo estructurarlo para que cuente una historia en lugar de mostrar números, cómo automatizar el reporting para que no consuma tiempo del equipo cada semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Configurar y usar Google Analytics 4 de forma avanzada para tomar decisiones de marketing basadas en datos con los informes y métricas que más impactan.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'SQL para análisis de producto',
                'description'      => 'Las queries que todo developer debería saber para responder preguntas de negocio sin depender del equipo de datos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Data Engineer / Analytics Engineer con experiencia en startups que ha enseñado a developers a usar SQL para análisis de producto y que sabe cómo ir del dato en bruto a la insight que cambia una decisión de producto.

Necesito tu ayuda para aprender a usar SQL para análisis de producto de forma práctica. Proporciona el contexto de tu situación:

**Contexto técnico:**
- Base de datos que usas: [PostgreSQL / MySQL / BigQuery / Redshift / Snowflake / SQLite]
- Nivel de SQL actual: [básico / puedo hacer joins / uso CTEs y window functions]
- Tipo de producto: [SaaS / e-commerce / marketplace / app de consumo]
- Principal pregunta de negocio que quieres responder con SQL: [la pregunta concreta]

Con este contexto, proporciona una guía completa de SQL para análisis de producto:

**1. El modelo de datos de producto que necesitas entender**
Antes de las queries, la estructura de tablas que todo product developer debería conocer: tabla de usuarios, tabla de eventos, tabla de sesiones, tabla de subscripciones/pagos. Para cada tabla, las columnas más importantes, cómo se relacionan entre sí y los errores más comunes en el modelado que complican el análisis posterior.

**2. Métricas de activación**
Queries para medir cuántos usuarios completan el onboarding y llegan al "aha moment": porcentaje de usuarios que completan cada paso del onboarding, tiempo medio hasta la primera acción de valor, segmentación por fuente de adquisición, cohorte de signup. Incluye la query comentada línea a línea para que entiendas cada parte.

**3. Análisis de retención**
Las queries de retención que todo equipo de producto usa: retención de N-día (día 1, 7, 30), curva de retención por cohorte de registro, retención por segmento de usuario (plan, feature usage, geografía). Explica cómo interpretar una tabla de retención de cohortes y qué señales son buenas o malas.

**4. Análisis de funnel de conversión**
Cómo construir un funnel de conversión con SQL paso a paso: definir los pasos del funnel, calcular el porcentaje de usuarios que completan cada paso, identificar dónde está el mayor drop-off, segmentar el funnel por características del usuario para encontrar diferencias significativas. La diferencia entre funnels de primer toque y funnels de cualquier sesión.

**5. Feature adoption y análisis de uso**
Queries para medir el uso de funcionalidades: qué porcentaje de usuarios activos usa cada feature, frecuencia de uso de cada feature, correlación entre uso de features específicas y retención o conversión. Cómo usar estos datos para decidir qué features priorizar en el roadmap.

**6. Análisis de churn y predicción**
Queries para entender el churn: tasa de churn mensual y anual, segmentación del churn por características del cliente, señales de comportamiento que preceden al churn (leading indicators). Cómo construir un modelo básico de riesgo de churn con SQL que el equipo de CS pueda usar para intervenir a tiempo.

**7. CTEs y window functions para queries complejas**
Las técnicas de SQL avanzado más útiles para análisis de producto: CTEs para organizar queries complejas en pasos legibles, window functions para calcular métricas que necesitan contexto de filas anteriores (ranking, running totals, lag/lead para comparaciones). Incluye tres ejemplos reales de queries de producto que requieren estas técnicas con explicación detallada.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Aprender las queries SQL más importantes para análisis de producto: retención, funnels, feature adoption y churn sin depender del equipo de datos.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Métricas de diseño para demostrar impacto',
                'description'      => 'Mide el impacto del diseño con datos: task success rate, SUS score, tiempo de tarea y cómo presentar los resultados al negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Design Researcher con experiencia en conectar el trabajo de diseño con métricas de negocio y en presentar los resultados de diseño a stakeholders que toman decisiones basadas en datos y no en opiniones estéticas.

Necesito tu ayuda para construir un sistema de métricas que demuestre el impacto del diseño con datos. Proporciona el contexto de tu situación:

**Contexto del equipo y el producto:**
- Tipo de producto digital: [aplicación web / app móvil / e-commerce / SaaS]
- Tamaño del equipo de diseño: [número de diseñadores]
- Reto principal al medir el impacto: [los stakeholders no creen que el diseño afecta a los resultados / no tenemos metodología / no tenemos datos históricos]
- Área de diseño que quieres medir primero: [onboarding / flujo de compra / retención / accesibilidad]

Con este contexto, desarrolla un sistema completo de métricas de diseño:

**1. El framework HEART de Google para métricas de diseño**
Explica el framework HEART (Happiness, Engagement, Adoption, Retention, Task Success) con ejemplos concretos para el tipo de producto. Para cada dimensión: qué señales se pueden medir, qué métricas específicas propones, cómo recoger los datos y con qué herramientas. Explica cómo elegir las dos o tres dimensiones más relevantes para el negocio en lugar de medir todo.

**2. Task Success Rate y métricas de usabilidad**
Cómo medir la tasa de éxito de tareas en tests de usabilidad: diseño de los escenarios de test, criterios de éxito o fracaso para cada tarea, tamaño de muestra mínimo para resultados estadísticamente significativos. El SUS score (System Usability Scale): cómo administrarlo, cómo interpretarlo (el benchmark y qué significa cada rango) y cómo comparar resultados entre versiones del producto.

**3. Tiempo en tarea y análisis de fricción**
Cómo medir el tiempo que los usuarios tardan en completar tareas clave y convertirlo en métricas de negocio: si reducir el tiempo de checkout en X segundos aumenta la conversión en Y%, eso es un argumento de negocio, no de diseño. Cómo usar session recordings (Hotjar, FullStory, LogRocket) para identificar los momentos de fricción más costosos.

**4. Métricas cuantitativas de producto para diseñadores**
Las métricas de producto que el equipo de diseño debería entender y seguir: tasa de completado de onboarding, tiempo hasta la primera acción de valor, feature adoption rate, error rate en flujos críticos. Cómo acceder a estos datos (GA4, Mixpanel, Amplitude, SQL directo) y cómo conectarlos con las decisiones de diseño que los afectaron.

**5. NPS y CSAT: cómo usarlos bien**
La diferencia entre NPS (Net Promoter Score) y CSAT (Customer Satisfaction Score), cuándo usar cada uno y cómo evitar los errores más comunes: preguntar en el momento equivocado, no segmentar los resultados, no hacer follow-up cualitativo con los detractores. Cómo diseñar las encuestas para que los resultados sean accionables y no solo métricas de vanidad.

**6. Antes y después: cómo demostrar el impacto de un rediseño**
La metodología para medir el impacto de un cambio de diseño de forma rigurosa: establecer la línea de base antes del cambio, definir las métricas de éxito a priori, ejecutar el test A/B si es posible o usar comparación temporal si no lo es, interpretar los resultados con honestidad (incluyendo los cambios que no mejoraron nada). Cómo documentar el caso de estudio para uso interno y para el portfolio.

**7. Presentación de métricas de diseño a stakeholders**
Cómo estructurar una presentación de resultados de diseño para un CEO o un director de producto que no tiene contexto de metodología de diseño: empezar por el impacto en negocio, no por el proceso de diseño; usar visualizaciones claras de las métricas; conectar cada mejora de diseño con una métrica de negocio que le importe a la audiencia. La narrativa que convierte los datos en decisiones.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Construir un sistema de métricas de diseño que demuestre el impacto del trabajo de diseño en métricas de negocio y lo comunique de forma convincente a los stakeholders.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Análisis del pipeline de ventas con datos',
                'description'      => 'Usa los datos del CRM para identificar los patrones que predicen qué deals se van a cerrar y cuáles no.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Ventas con experiencia en Revenue Operations que ha construido sistemas de análisis de pipeline que permiten a los equipos de ventas tomar decisiones basadas en datos en lugar de instinto.

Necesito tu ayuda para analizar y optimizar el pipeline de ventas usando los datos que tengo en el CRM. Proporciona el contexto de tu situación:

**Contexto del equipo de ventas:**
- CRM que usas: [Salesforce / HubSpot / Pipedrive / otro]
- Tipo de venta: [B2B / B2C / enterprise / SMB]
- Ciclo de ventas medio: [días o semanas]
- Tamaño del equipo de ventas: [número de reps]
- Principal problema con el pipeline hoy: [pipeline inflado / forecast poco fiable / no sé qué deals priorizar]

Con este contexto, desarrolla un sistema completo de análisis de pipeline:

**1. Auditoría de la calidad del pipeline**
Cómo evaluar si el pipeline actual es real o ilusorio: análisis de la edad de los deals (deals que llevan más de X días en la misma etapa son sospechosos), análisis de la última actividad (deals sin actividad reciente), análisis de la completitud de datos (deals sin fecha de cierre, sin valor o sin contacto principal). Las señales de un pipeline hinchado que dan una falsa sensación de seguridad en el forecast.

**2. Tasa de conversión por etapa del pipeline**
Cómo calcular la tasa de conversión entre cada etapa del funnel de ventas y usarla para hacer forecasts más fiables. La diferencia entre la tasa de conversión histórica global y la tasa de conversión segmentada (por rep, por tamaño de deal, por sector, por canal de entrada). Cómo identificar en qué etapa se pierde más volumen y qué acciones específicas mejoran esa etapa.

**3. Análisis de win/loss**
Cómo construir un análisis de win/loss sistemático que vaya más allá del "perdimos en precio": las preguntas que hay que hacer cuando se cierra un deal (ganado o perdido), cómo registrar los datos en el CRM de forma consistente, los patrones que emergen cuando analizas 50 o más deals cerrados. Cómo usar este análisis para mejorar el proceso de ventas, el producto y el pricing.

**4. Predicción de qué deals se van a cerrar**
Los factores que en los datos predicen si un deal se va a cerrar: actividad del prospecto (abre emails, asiste a demos, involucra a más personas), completitud del deal (todos los decisores identificados, caso de negocio claro, timeline definido), fit con el ICP (tamaño, sector, problema). Cómo usar estos factores para construir un score de propensión a cerrar que el rep pueda usar para priorizar.

**5. Forecasting con datos**
Metodología de forecast basada en datos históricos: forecast por etapa (probabilidad asignada a cada etapa multiplicada por el valor del deal), forecast por tasa de conversión histórica segmentada, forecast basado en el comportamiento de deals similares en el pasado. Cómo comparar los tres métodos y cuál es más fiable según el volumen de datos disponibles.

**6. Métricas de rep performance basadas en pipeline**
Más allá del quota attainment, qué métricas de proceso predicen el rendimiento futuro de un rep: número de actividades por deal, tiempo en cada etapa, ratio de deals avanzando vs. estancados, porcentaje del pipeline generado por el rep vs. inbound. Cómo usar estas métricas para coaching individual en lugar de solo para evaluación.

**7. Dashboard de pipeline para el equipo**
Las visualizaciones de pipeline que el equipo de ventas debería tener disponibles: pipeline by stage y por valor, aging report de deals, pipeline coverage (pipeline total vs. quota del periodo), win rate por rep y por segmento. Cómo automatizar estas visualizaciones en el CRM o en una herramienta de BI para que el equipo las tenga disponibles sin trabajo manual.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Analizar el pipeline de ventas con datos del CRM para hacer forecasts más fiables, priorizar deals y tomar decisiones basadas en patrones históricos.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Métricas de producto que importan',
                'description'      => 'AARRR, DAU/MAU, curvas de retención y feature adoption: el cuadro de mando que mantiene al equipo enfocado en lo que importa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Head of Product Analytics con experiencia en productos digitales que ha construido sistemas de métricas en empresas desde etapas tempranas hasta escala, y que sabe cuándo las métricas orientan bien y cuándo se convierten en un culto al número equivocado.

Necesito tu ayuda para construir el sistema de métricas de producto correcto para mi empresa. Proporciona el contexto de tu situación:

**Contexto del producto:**
- Tipo de producto: [SaaS B2B / app de consumo / marketplace / e-commerce]
- Fase de la empresa: [validación / crecimiento / escala]
- Herramienta de analytics que usas: [Mixpanel / Amplitude / GA4 / PostHog / sin herramienta]
- Principal problema con las métricas hoy: [no tenemos métricas / tenemos demasiadas y no sabemos cuáles mirar / el equipo no las usa para tomar decisiones]

Con este contexto, desarrolla un sistema completo de métricas de producto:

**1. La jerarquía de métricas: del negocio al producto**
Explica cómo construir la jerarquía de métricas correcta: empezando por los objetivos de negocio (ARR, crecimiento, retención), desglosándolos en métricas de producto que los explican, y llegando a los indicadores de proceso que predicen esas métricas. El error más común: optimizar métricas de proceso que no mueven las métricas de negocio.

**2. El framework AARRR aplicado a tu producto**
Aplica el framework Pirate Metrics (Acquisition, Activation, Retention, Revenue, Referral) a tu tipo de producto específico. Para cada etapa: las métricas más relevantes, los benchmarks de referencia según el tipo de producto, y las acciones de producto que típicamente mueven cada etapa. La diferencia entre optimizar cada etapa de forma independiente y entender cómo se afectan entre sí.

**3. North Star Metric: cómo elegirla bien**
El proceso para elegir la North Star Metric correcta para el producto: qué características debe tener (captura el valor que el producto entrega, predice el crecimiento a largo plazo, no es una métrica de negocio pura), cómo involucrar al equipo en el proceso de elección, y cómo evitar que se convierta en un número que se optimiza a costa de la experiencia real del usuario.

**4. Análisis de retención: el indicador más importante**
Cómo construir y leer una curva de retención: retención por cohorte de registro, retención de N-día, retención de acciones específicas. Qué significa una curva que se estabiliza (señal de product-market fit), qué significa una que sigue cayendo, y cómo identificar qué segmentos de usuarios tienen mayor retención para entender qué tienen en común.

**5. Feature adoption y engagement depth**
Cómo medir el uso de funcionalidades más allá del breadth (cuántos usuarios usaron cada feature) e incluir depth (con qué frecuencia y profundidad): el DAU/MAU como proxy de engagement, la correlación entre uso de features específicas y retención, cómo identificar las features "killer" que diferencian a los usuarios que se quedan de los que se van.

**6. Experimentos y métricas de A/B testing**
Cómo definir las métricas correctas para los experimentos de producto: la métrica primaria que decide el ganador, las métricas de guardrail que no deben empeorar, el tamaño de muestra necesario para detectar el efecto esperado, el peligro de parar los tests antes de tiempo. Los errores estadísticos más comunes en A/B testing de producto y cómo evitarlos.

**7. El cuadro de mando de producto en una página**
Diseña el cuadro de mando de producto ideal: las métricas que el equipo de producto debería revisar semanalmente (no más de siete), cómo visualizarlas para que el contexto (tendencia, benchmark, objetivo) sea inmediatamente visible, y cómo convertir la revisión de métricas en rituales del equipo que generen decisiones, no solo observaciones.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Construir el sistema de métricas de producto correcto: North Star, AARRR, retención y feature adoption con el cuadro de mando que mantiene al equipo enfocado.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'People analytics para managers',
                'description'      => 'Usa los datos de tu equipo para tomar mejores decisiones: quién rinde bien, quién está en riesgo de irse y por qué.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un People Analytics Manager con experiencia en usar datos de recursos humanos para mejorar la toma de decisiones de managers y directores de personas sin convertir los datos en herramientas de vigilancia o en sustitutos del juicio humano.

Necesito tu ayuda para usar los datos de mi equipo de forma más inteligente para tomar mejores decisiones como manager o responsable de RRHH. Proporciona el contexto de tu situación:

**Contexto del equipo:**
- Tamaño del equipo que gestionas: [número de personas y roles]
- Herramientas de RRHH que usas: [HRIS, herramienta de performance, encuestas, etc.]
- Datos que ya tienes disponibles: [qué información tienes sobre tu equipo]
- Decisión de personas más difícil que tienes hoy: [contratación / retención / desarrollo / estructura]

Con este contexto, desarrolla una guía completa de people analytics para managers:

**1. Los datos de personas que realmente predicen el rendimiento**
La diferencia entre los datos de RRHH que son fáciles de recoger (asistencia, horas trabajadas) y los que realmente predicen el rendimiento y el riesgo de fuga: resultados de performance reviews, engagement scores, velocidad de progresión salarial, tenure en el rol actual, red de colaboración (con quién trabaja). Por qué los datos de actividad son indicadores débiles y los datos de resultado son los que importan.

**2. Identificar a los top performers más allá del instinto**
Cómo construir una definición objetiva de alto rendimiento para tu equipo: qué métricas de resultado usar según el tipo de rol, cómo combinar resultados cuantitativos con evaluaciones cualitativas sin que el sesgo del manager lo contamine todo, cómo usar la calibración entre managers para asegurar consistencia. Los sesgos cognitivos más comunes en la evaluación de rendimiento y cómo mitigarlos con datos.

**3. Señales de riesgo de fuga**
Los indicadores que en los datos predicen que alguien está pensando en irse antes de que lo diga: reducción del eNPS individual, menor participación en proyectos transversales, cambios en el patrón de comunicación, ausencia en eventos de equipo, ausencia de conversaciones de desarrollo recientes. Cómo usar estas señales para intervenir a tiempo sin ser invasivo o crear una cultura de desconfianza.

**4. Análisis de pay equity y equidad interna**
Cómo analizar si existe equidad de compensación en el equipo: comparación de salarios por rol, nivel y performance, detección de anomalías (personas claramente por debajo del mercado o con salario que no refleja su rendimiento), el coste de no abordar los problemas de pay equity (salida de talento, desmotivación, riesgo legal). Cómo presentar estos datos a la dirección para que tome acción.

**5. Análisis de diversidad e inclusión con datos**
Las métricas de D&I que vale la pena medir: distribución por género, origen y edad en distintos niveles jerárquicos, tasas de promoción y aumento salarial segmentadas por grupos demográficos, resultados de encuestas de pertenencia e inclusión. La diferencia entre medir la diversidad (headcount) y medir la inclusión (experiencia del empleado) y por qué ambas son necesarias.

**6. Workforce planning basado en datos**
Cómo usar los datos históricos para hacer workforce planning más preciso: modelos de rotación voluntaria (predecir cuántas personas se van en los próximos 12 meses y cuándo), análisis de capacidad (cuánta capacidad tiene el equipo para asumir nuevos proyectos), análisis de skills gap (qué competencias faltan para ejecutar la estrategia de negocio).

**7. Ética y privacidad en people analytics**
Los límites éticos del uso de datos de personas: qué datos es razonable usar para tomar decisiones y cuáles crean una cultura de vigilancia contraproducente, cómo comunicar al equipo qué datos se recogen y cómo se usan, el principio de proporcionalidad (el beneficio de la decisión debe justificar el uso del dato), y cómo proteger la privacidad individual en los análisis agregados.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Usar people analytics para tomar mejores decisiones como manager: identificar top performers, detectar riesgo de fuga y hacer workforce planning basado en datos.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Excel y Google Sheets avanzado para finanzas',
                'description'      => 'Modelos financieros, tablas dinámicas, VLOOKUP/XLOOKUP y las funciones que todo financiero debería dominar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Financial Analyst con experiencia en modelos financieros complejos en Excel y Google Sheets que ha enseñado a equipos de finanzas a pasar de hojas de cálculo básicas a modelos robustos, auditables y fáciles de mantener.

Necesito tu ayuda para mejorar mis habilidades de Excel o Google Sheets para el trabajo de análisis financiero. Proporciona el contexto de tu situación:

**Contexto:**
- Herramienta principal: [Excel / Google Sheets / ambas]
- Nivel actual: [básico / puedo hacer fórmulas / uso tablas dinámicas / construyo modelos]
- Tipo de análisis financiero que haces más frecuentemente: [presupuestación / forecasting / análisis de inversiones / reporting / valoración]
- La tarea de hoja de cálculo que más tiempo te consume hoy: [la que quieres optimizar primero]

Con este contexto, desarrolla una guía completa de hojas de cálculo avanzadas para finanzas:

**1. Principios de diseño de modelos financieros**
Las convenciones de diseño que hacen que un modelo financiero sea auditable, mantenible y a prueba de errores: separación de inputs, cálculos y outputs en hojas distintas, código de colores para distinguir hardcodes de fórmulas de referencias, flujo de izquierda a derecha y de arriba a abajo, documentación de supuestos. Por qué estos principios importan cuando alguien más tiene que revisar o actualizar el modelo.

**2. Funciones de búsqueda y referencia**
Dominio completo de las funciones de búsqueda más usadas en finanzas: VLOOKUP/XLOOKUP (cuándo usar cada una y por qué XLOOKUP es superior), INDEX/MATCH para búsquedas bidireccionales, OFFSET para referencias dinámicas, INDIRECT para referencias a hojas variables. Para cada función: sintaxis, casos de uso en finanzas y los errores más comunes que generan resultados incorrectos sin avisar.

**3. Funciones condicionales y de agregación**
Las funciones de agregación condicional que todo financiero necesita: SUMIF/SUMIFS para sumas con condiciones, COUNTIF/COUNTIFS, AVERAGEIF, las funciones de base de datos (DSUM, DCOUNT) para análisis más complejos. Cómo combinarlas con funciones de texto y fecha para hacer análisis de datos financieros que normalmente requerirían una base de datos.

**4. Tablas dinámicas para análisis financiero**
Cómo construir tablas dinámicas que transformen datos transaccionales en resúmenes financieros útiles: configuración del modelo de datos, campos calculados, segmentadores para filtrado interactivo, conexión con Power Query / datos externos. Tres casos de uso de tablas dinámicas que deberías saber hacer: análisis de varianza presupuesto vs. real, análisis de ventas multidimensional, análisis de aging de cuentas por cobrar.

**5. Modelos de forecasting y escenarios**
Cómo construir un modelo de forecasting con análisis de escenarios en Excel/Sheets: la arquitectura del modelo (hoja de supuestos separada, modelos base/optimista/pesimista), las funciones para seleccionar escenarios dinámicamente (IF anidados vs. CHOOSE vs. tablas de datos), cómo usar el Administrador de Escenarios de Excel para comparar múltiples conjuntos de supuestos.

**6. Automatización con macros y fórmulas dinámicas**
Introducción práctica a la automatización en hojas de cálculo para finanzas: fórmulas de array y funciones dinámicas (FILTER, SORT, UNIQUE en Excel 365 y Sheets) para reemplazar fórmulas complejas por soluciones más elegantes. Cuándo merece la pena aprender VBA o Google Apps Script para automatizar tareas repetitivas (importación de datos, formateo de informes, envío automático de reportes).

**7. Auditoría y control de errores en modelos financieros**
Las técnicas para detectar y prevenir errores en modelos financieros: función IFERROR y cuándo es una solución y cuándo enmascara problemas reales, herramienta de rastreo de dependencias de Excel, comprobaciones de integridad (¿suma el balance general? ¿cuadra el flujo de caja?), protección de hojas para evitar modificaciones accidentales de fórmulas. Cómo documentar un modelo para que otro analista pueda auditarlo en menos de 30 minutos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Dominar Excel y Google Sheets para análisis financiero: modelos robustos, funciones avanzadas, tablas dinámicas y técnicas de auditoría para finanzas.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'LegalTech y datos para departamentos jurídicos',
                'description'      => 'Cómo los departamentos legales usan los datos para mejorar: contract analytics, litigation analytics y KPIs del departamento legal.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Legal Operations Manager con experiencia en transformación digital de departamentos jurídicos que ha implementado sistemas de datos y tecnología para mejorar la eficiencia, la calidad y el impacto del trabajo legal.

Necesito tu ayuda para entender cómo usar mejor los datos y la tecnología en mi departamento legal. Proporciona el contexto de tu situación:

**Contexto del departamento legal:**
- Tamaño del departamento: [número de abogados y personal de soporte]
- Tipo de empresa: [startup / PYME / gran empresa / firma de abogados]
- Principales áreas de trabajo legal: [contratos comerciales / laboral / litigación / M&A / cumplimiento]
- Nivel de digitalización actual: [gestión en papel / alguna herramienta / proceso moderadamente digitalizado]
- Principal ineficiencia que quieres resolver: [tiempo en revisión de contratos / visibilidad del estado de asuntos / reporting a dirección]

Con este contexto, desarrolla una guía completa de datos y tecnología para el departamento legal:

**1. El caso de negocio de Legal Operations**
Por qué los departamentos legales modernos necesitan una función de Legal Operations: los problemas que resuelve (costes legales sin visibilidad, cuellos de botella en la revisión de contratos, imposibilidad de demostrar el valor del departamento a la dirección). Cómo construir el business case para invertir en tecnología y datos legales con ROI cuantificable.

**2. KPIs del departamento legal**
Las métricas que todo General Counsel o Director Legal debería seguir: tiempo medio de revisión de contratos por tipo, coste por asunto (interno vs. externo), ratio de asuntos cerrados vs. abiertos, coste legal como porcentaje de ingresos, tasa de éxito en litigación, satisfacción de los clientes internos. Cómo construir un dashboard de legal ops que la dirección entienda y valore.

**3. Contract Analytics: extraer valor de los contratos**
Cómo usar la tecnología para analizar el portfolio de contratos de la empresa: identificación de cláusulas de riesgo (indemnizaciones ilimitadas, limitaciones de responsabilidad favorables al proveedor, cláusulas de renovación automática), detección de contratos próximos a vencer, análisis de consistencia de términos a través de contratos similares. Las herramientas de contract analytics disponibles en el mercado y cuándo tiene sentido invertir en cada nivel.

**4. Gestión de asuntos y matter management**
Cómo implementar un sistema de matter management para tener visibilidad completa del trabajo del departamento: registro de asuntos, asignación de recursos, seguimiento de plazos, control de costes (internos y de firmas externas), cierre y lecciones aprendidas. Qué datos recogen las plataformas de matter management y cómo usarlos para optimizar la asignación del equipo y el presupuesto legal.

**5. E-billing y gestión de firmas externas con datos**
Cómo usar los datos de facturación de firmas externas para tomar mejores decisiones: análisis de costes por firma, por tipo de asunto y por profesional, comparación de tarifas contra el mercado (rate benchmarking), detección de facturación incorrecta, optimización del panel de firmas (cuántas firmas usar y para qué). Cómo negociar mejor con las firmas cuando tienes datos históricos de su rendimiento.

**6. Automatización de contratos y documentos legales**
Qué partes del trabajo contractual se pueden automatizar hoy sin sacrificar calidad: generación automatizada de contratos estándar desde plantillas, workflows de aprobación digital, firma electrónica, integración con CRM y ERP para contratos de clientes y proveedores. Los tipos de contratos que mejor se prestan a la automatización y los que siempre necesitarán revisión humana.

**7. Hoja de ruta de digitalización legal en 12 meses**
Un plan realista de implementación tecnológica para el departamento legal ordenado por impacto y facilidad de adopción: primero las victorias rápidas (firma electrónica, repositorio de contratos), luego las iniciativas de mayor impacto (matter management, contract analytics), y finalmente las iniciativas estratégicas (legal data strategy, predictive analytics para litigación).
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Usar datos y tecnología para mejorar la eficiencia del departamento legal: KPIs, contract analytics, matter management y automatización de contratos.',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Análisis de datos de soporte para mejorar el producto',
                'description'      => 'Extrae insights del volumen de tickets para mejorar el producto, la documentación y los procesos del equipo de soporte.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Head of Customer Support con experiencia en usar los datos del equipo de soporte como una fuente de inteligencia de producto y negocio, convirtiendo el volumen de tickets en insights que mejoran el producto, reducen la carga de soporte y aumentan la satisfacción del cliente.

Necesito tu ayuda para extraer más valor de los datos de soporte que genera mi equipo. Proporciona el contexto de tu situación:

**Contexto del equipo de soporte:**
- Volumen aproximado de tickets al mes: [número]
- Herramienta de soporte que usas: [Zendesk / Intercom / Freshdesk / HubSpot Service / otra]
- Tipos principales de contacto: [bugs / preguntas sobre el producto / problemas de facturación / onboarding / solicitudes de feature]
- Reto principal con los datos de soporte: [no los analizamos / analizamos solo CSAT / no sabemos cómo comunicar los insights al equipo de producto]

Con este contexto, desarrolla una guía completa de análisis de datos de soporte:

**1. Taxonomía de tickets: el primer paso del análisis**
Por qué la calidad del análisis de soporte depende de la calidad del etiquetado. Cómo diseñar una taxonomía de categorías y subcategorías que sea útil para el análisis sin crear una carga de trabajo excesiva para el equipo: los niveles de clasificación (tipo de contacto, área del producto, causa raíz), criterios claros para cada categoría, proceso de calibración del equipo para asegurar consistencia. Las herramientas de clasificación automática con IA que pueden acelerar este proceso.

**2. Análisis de volumen y tendencias**
Las métricas de volumen que deberías seguir semanalmente: tickets totales, tickets por categoría, tickets por tipo de cliente (plan, segmento, antigüedad), ratio de tickets por usuario activo (contact rate). Cómo detectar anomalías de volumen que indican un problema nuevo en el producto antes de que escale: qué umbral de aumento de tickets justifica alertar al equipo de producto.

**3. Análisis de causa raíz para reducir el volumen**
El proceso para identificar y eliminar las causas raíz del volumen de soporte: análisis de los 20% de causas que generan el 80% del volumen (Pareto), clasificación de causas en solucionables por el producto, por la documentación o por el proceso de soporte, y priorización basada en volumen e impacto en la experiencia del cliente. Cómo presentar estos análisis al equipo de producto de forma que generen acción.

**4. CSAT y calidad del soporte con datos**
Más allá del CSAT promedio: análisis de CSAT por agente, por tipo de ticket, por canal, por tiempo de respuesta y resolución. Cómo identificar qué factores correlacionan con CSAT alto (no siempre es lo que intuitivamente piensas), cómo usar los datos de CSAT para coaching individual del equipo, y cómo detectar el gaming del CSAT (solicitar solo la encuesta en casos que sabemos que son positivos).

**5. Time to Resolution y eficiencia operativa**
Análisis del tiempo de resolución: distribución del TTR (no solo el promedio, sino los percentiles P50, P90, P95), TTR por categoría, por agente, por canal. Identificación de cuellos de botella en el proceso de resolución: qué tipos de tickets requieren más escalaciones, qué información del cliente hay que pedir siempre y podría pedirse proactivamente, qué partes del proceso son lentas por falta de herramientas o knowledge base.

**6. Insights de producto desde el soporte**
Cómo convertir el volumen de soporte en un informe de producto útil: las features que generan más confusión (oportunidad de mejora de UX), los flujos donde los usuarios se pierden (oportunidad de rediseño), las funcionalidades que los usuarios buscan y no existen (oportunidad de roadmap), los bugs que el equipo de soporte ha documentado antes de que lleguen a producto. Formato del informe mensual de insights de soporte para el equipo de producto.

**7. Self-service y deflección de tickets con datos**
Cómo usar los datos de soporte para construir una estrategia de self-service que reduzca el volumen de forma sostenible: análisis de qué tickets podrían haberse resuelto con mejor documentación, priorización de artículos de ayuda por impacto esperado en deflección, análisis de uso de la base de conocimiento (qué artículos se leen, qué búsquedas no encuentran resultado), y cómo medir el impacto del contenido de self-service en el volumen de tickets.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Analizar los datos de soporte para identificar causas raíz del volumen de tickets, extraer insights de producto y mejorar la eficiencia del equipo.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestión del negocio freelance con datos',
                'description'      => 'Las 5 métricas que deberías revisar cada mes para tomar mejores decisiones sobre tu negocio independiente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor de negocio especializado en profesionales independientes que ha ayudado a freelancers a dejar de gestionar su negocio por instinto y a empezar a tomar decisiones basadas en datos sencillos pero reveladores sobre su actividad y su rentabilidad.

Necesito tu ayuda para entender qué métricas debería seguir en mi negocio freelance y cómo usarlas para tomar mejores decisiones. Proporciona el contexto de tu situación:

**Contexto del negocio freelance:**
- Tipo de servicio que ofreces: [diseño / desarrollo / marketing / consultoría / redacción / otro]
- Años en activo como freelance: [número]
- Ingresos brutos mensuales aproximados: [rango o "variable"]
- Cómo gestionas hoy las finanzas del negocio: [hoja de cálculo / herramienta / sin sistema]
- Decisión de negocio más difícil que tienes hoy: [subir precios / rechazar clientes / añadir un nuevo servicio / invertir en marketing]

Con este contexto, desarrolla una guía completa de gestión con datos para freelancers:

**1. Las 5 métricas mensuales que todo freelance debería revisar**
Define las cinco métricas fundamentales del negocio freelance con explicación de por qué cada una importa y qué decisión te ayuda a tomar: ingresos brutos y netos (la diferencia importa más de lo que parece), tasa de ocupación (porcentaje de horas disponibles que se facturan), ticket medio por proyecto o cliente, coste de adquisición de cliente aproximado, y net promoter score informal. Para cada métrica, el cálculo exacto y el benchmark de referencia para un freelance en tu tipo de servicio.

**2. Análisis de rentabilidad por cliente y proyecto**
Cómo calcular la rentabilidad real de cada cliente y cada proyecto, no solo los ingresos: tiempo dedicado a reuniones, revisiones y comunicación que no se factura, coste del estrés y la fricción (los clientes difíciles tienen un coste que no aparece en la hoja de cálculo). El análisis que siempre revela que el 20% de los clientes genera el 80% de los problemas y otro 20% genera el 80% de los ingresos de calidad. Cómo usar este análisis para decidir a qué clientes renovar y a cuáles dejar ir.

**3. Previsión de ingresos y gestión del flujo de caja**
El problema de los ingresos variables del freelance y cómo gestionarlo con datos: cómo hacer una previsión de ingresos de los próximos tres meses con la información que ya tienes (proyectos confirmados, probabilidad de renovación de clientes actuales, pipeline de nuevos clientes). Cómo establecer un fondo de reserva basado en tus patrones históricos de variabilidad de ingresos, no en una regla genérica.

**4. Análisis del tiempo como activo principal**
El tiempo es el único recurso no renovable del freelance: cómo registrarlo de forma que los datos sean útiles sin que el registro se convierta en una carga. Las categorías de tiempo que debería desglosar: tiempo facturable por proyecto, tiempo de negocio no facturable (ventas, marketing, administración), tiempo de formación y desarrollo, tiempo perdido. Qué ratio de tiempo facturable es sostenible a largo plazo y cuándo el ratio alto es una señal de alerta, no de éxito.

**5. Análisis de la pipeline de clientes**
Cómo construir y gestionar un pipeline de clientes sencillo sin necesidad de un CRM: los tres estados de un prospecto (en conversación, propuesta enviada, negociando), la tasa de conversión histórica de cada etapa, el tiempo medio desde el primer contacto hasta el primer pago. Por qué la mayoría de los freelancers solo hacen marketing y ventas cuando les urge y cómo construir un sistema que genere contactos de forma constante.

**6. Evolución de precios basada en datos**
Cómo usar los datos históricos para decidir cuándo y cuánto subir los precios: el indicador más fiable de que puedes subir precios es la tasa de aceptación de propuestas (si aceptan el 90% de tus propuestas, estás cobrando demasiado poco), cómo medir el impacto de una subida de precios en el volumen de trabajo, y cómo comunicar la subida a clientes actuales con datos que la justifiquen.

**7. El cuadro de mando mensual del freelance**
Una plantilla concreta de cuadro de mando mensual para gestionar el negocio freelance en menos de una hora al mes: las cinco métricas con sus valores del mes, la comparación con el mes anterior y con el mismo mes del año anterior, el semáforo de decisiones (qué está verde, qué está amarillo, qué está rojo) y las dos o tres acciones prioritarias para el mes siguiente basadas en los datos. Cómo construirlo en una hoja de cálculo sencilla que sea sostenible mantener.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 15,
                'use_case'         => 'Implementar un sistema de métricas mensual para gestionar el negocio freelance con datos: rentabilidad por cliente, previsión de ingresos y cuadro de mando en una hoja de cálculo.',
                'vote_score'       => 37,
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
