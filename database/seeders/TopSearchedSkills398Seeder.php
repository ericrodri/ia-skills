<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills398Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Análisis de datos de marketing sin ser programador: Python y SQL para entender el rendimiento de campañas',
                'description'      => 'Aprende a analizar el rendimiento de tus campañas de marketing con Python y SQL sin necesidad de conocimientos técnicos previos. Los marketers que saben leer y escribir consultas básicas toman decisiones más rápidas y más informadas que los que dependen del equipo de datos.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista de datos especializado en marketing con experiencia enseñando a profesionales de marketing sin perfil técnico a extraer insights accionables de sus datos usando Python y SQL de forma práctica, sin perderse en la teoría de programación.

Contexto de mi trabajo en marketing:
Soy un profesional de marketing que gestiona [DESCRIBE: campañas de paid media/email marketing/SEO/social media/marketing de contenidos] para [TIPO DE EMPRESA Y SECTOR]. Los datos que tengo disponibles viven en [DESCRIBE: Google Analytics, Meta Ads Manager, HubSpot, Mailchimp, un CSV exportado, BigQuery, etc.]. El análisis que necesito hacer con más frecuencia es [DESCRIBE: comparar el rendimiento de campañas, calcular el ROI, segmentar a la audiencia, analizar la atribución de conversiones, identificar qué contenido funciona mejor].

Bloque 1 — Por qué un marketer necesita saber algo de Python y SQL:
Explica el argumento práctico para que un marketer aprenda lo mínimo de Python y SQL, sin convertirse en programador. Las tres situaciones donde esto cambia completamente el trabajo: cuando necesitas un análisis que no está disponible en el dashboard estándar y tardas días en conseguir que alguien del equipo técnico te lo haga, cuando los datos están en múltiples fuentes y necesitas cruzarlos manualmente en Excel, y cuando tienes que repetir el mismo análisis cada semana o cada mes y tardas horas en hacerlo. Describe el nivel mínimo de SQL y Python que un marketer necesita aprender para resolver el 80% de sus necesidades de análisis y cuánto tiempo realista tarda en alcanzar ese nivel.

Bloque 2 — SQL básico para marketers: las consultas que más necesitas:
Enseña las cinco consultas SQL que un marketer usa con más frecuencia, con ejemplos aplicados a datos de marketing reales. Para cada consulta, explica qué hace en lenguaje no técnico y muestra el código SQL con comentarios explicativos: SELECT para extraer las columnas que necesitas de una tabla de campañas (impresiones, clics, conversiones, gasto), WHERE para filtrar por fechas, campaña o canal, GROUP BY para agrupar resultados por campaña, canal o semana y calcular totales y promedios, JOIN para cruzar la tabla de campañas con la tabla de conversiones para calcular el ROI real, y ORDER BY con LIMIT para encontrar las cinco campañas con mejor CPA. Para cada consulta, incluye un dataset de ejemplo con el que practicar y el resultado esperado.

Bloque 3 — Python para marketing sin escribir código: Claude como tu analista personal:
Explica cómo un marketer puede usar Claude para hacer análisis de datos en Python sin escribir el código él mismo. El proceso es: describes el análisis que necesitas en lenguaje natural, Claude genera el código Python, tú lo ejecutas en Google Colab (que no requiere instalación de nada en tu ordenador) y obtienes el resultado. Diseña cinco ejemplos de este flujo de trabajo aplicados a análisis de marketing frecuentes: calcular el ROAS por canal y por semana a partir de un CSV de campañas, identificar las campañas de email con la mayor tasa de apertura y clics por segmento de audiencia, analizar la evolución del tráfico orgánico por página y detectar las páginas con mayor caída, calcular la atribución de conversiones por canal según el modelo de último clic y compararlo con el modelo de primera visita, y crear una visualización de la distribución del presupuesto de paid media vs. el retorno generado. Para cada ejemplo, incluye el prompt exacto que darías a Claude para obtener el código.

Bloque 4 — Análisis de campañas de paid media con SQL:
Diseña un conjunto de consultas SQL para analizar el rendimiento de campañas de paid media (Google Ads, Meta Ads) exportadas a una tabla. Las consultas cubren: comparación del CPA por campaña y por grupo de anuncio en el último mes vs. el mes anterior, identificación de los anuncios con CTR por encima o por debajo de la media del account, cálculo del share of budget por canal y comparación con el share of conversiones (para detectar desequilibrios en la asignación de presupuesto), análisis de la curva de frecuencia (cuántos usuarios vieron el anuncio una vez, dos veces, más de cinco veces) y su correlación con la tasa de conversión, y detección de los días de la semana y las horas del día con mejor ROAS para optimizar la programación de anuncios. Para cada consulta, incluye la tabla de datos que necesita como input y el insight que el resultado permite extraer.

Bloque 5 — Construir tu dashboard de marketing con Google Colab y Claude:
Diseña un flujo de trabajo completo para que un marketer construya su propio dashboard de rendimiento semanal usando Google Colab y Claude como asistente de código. El flujo incluye: la instrucción para descargar los datos de cada plataforma (Google Analytics, Meta Ads, HubSpot) en CSV, el prompt para pedir a Claude que genere el script de Python que une todos los CSV, calcula las métricas clave y genera las visualizaciones principales (evolución de inversión vs. conversiones, desglose por canal, top campañas por CPA, embudo de conversión semanal), la instrucción para ejecutar el script en Google Colab y exportar el resultado como informe PDF, y el proceso para actualizar el dashboard cada semana en menos de 15 minutos.

Entregables:
- Argumento práctico para aprender SQL y Python mínimo con nivel objetivo y tiempo estimado
- Cinco consultas SQL de marketing con dataset de ejemplo, código comentado y resultado esperado
- Cinco flujos de trabajo Python con Claude para análisis de marketing frecuentes con prompts exactos
- Conjunto de consultas SQL para análisis completo de campañas de paid media con insights
- Flujo de trabajo completo para dashboard semanal con Google Colab y exportación a PDF
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 45,
                'use_case'         => 'Analizar el rendimiento de campañas de marketing con Python y SQL sin conocimientos técnicos previos',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'SQL avanzado para análisis de producto: cohortes, funnels y retención sin depender del equipo de datos',
                'description'      => 'Aprende a escribir las consultas SQL avanzadas que los equipos de producto necesitan para analizar cohortes de usuarios, funnels de conversión y métricas de retención. Los developers que dominan el SQL analítico se convierten en el puente entre el equipo de producto y el equipo de datos.',
                'prompt_content'   => <<<'EOT'
Actúa como un data engineer con experiencia en análisis de producto que ha construido los pipelines de datos y las consultas de métricas de retención, cohortes y funnels para productos con millones de usuarios. Tu objetivo es enseñarme a escribir SQL analítico avanzado para responder las preguntas de producto más frecuentes sin depender del equipo de datos.

Contexto del producto:
Trabajo como developer en un producto de [TIPO: SaaS/marketplace/app de consumo] con [NÚMERO] usuarios activos mensuales. Los eventos de usuario se registran en [BASE DE DATOS: BigQuery/Redshift/Snowflake/PostgreSQL] en una tabla de eventos con las columnas [user_id, event_name, event_timestamp, properties]. Las métricas de producto que más necesito calcular son [DESCRIBE: retención diaria o semanal, cohortes de activación, funnel de onboarding, DAU/MAU ratio, feature adoption].

Sección 1 — Análisis de cohortes de retención con SQL puro:
Explica qué es un análisis de cohortes y por qué es la métrica más importante para entender la salud de un producto. Diseña la consulta SQL completa para calcular la tabla de retención por cohorte de registro: para cada semana de registro, calcula qué porcentaje de los usuarios que se registraron en esa semana volvieron al producto en la semana 1, semana 2, semana 4, semana 8 y semana 12. La consulta debe usar CTEs (Common Table Expressions) para que sea legible y mantenible. Explica cada paso de la consulta con comentarios y muestra cómo interpretar la tabla resultante para identificar si la retención está mejorando o empeorando con el tiempo y en qué punto se produce la mayor caída.

Sección 2 — Análisis de funnel de conversión con SQL:
Diseña la consulta SQL para calcular el funnel de conversión de un flujo específico del producto (por ejemplo: registro → activación → primer uso del feature clave → conversión a pago). La consulta debe calcular para cada paso del funnel: el número de usuarios que llegaron a ese paso, el porcentaje de conversión desde el paso anterior, el tiempo mediano entre pasos, y el desglose de conversión por segmento (plataforma, canal de adquisición, plan de precio). Explica cómo usar window functions (ROW_NUMBER, LAG, LEAD) para rastrear el progreso de cada usuario a través del funnel y cómo detectar los pasos donde se produce el mayor abandono.

Sección 3 — Cálculo de DAU, WAU, MAU y el ratio DAU/MAU con SQL:
Diseña las consultas SQL para calcular las métricas de actividad diaria, semanal y mensual de forma eficiente sobre tablas grandes de eventos. Para cada métrica, explica la definición exacta que usa (qué cuenta como un usuario activo: cualquier evento, solo eventos de uso del producto, excluyendo eventos de login), la consulta optimizada para calcularla sobre los últimos 90 días, y la variante que calcula la evolución histórica para detectar tendencias. Explica también cómo calcular el ratio DAU/MAU (también llamado "stickiness") y cómo interpretarlo: qué rango es saludable según el tipo de producto y qué ratio indica que el producto tiene un problema de engagement.

Sección 4 — Feature adoption analytics:
Diseña las consultas SQL para analizar la adopción de un feature nuevo en el producto. Las consultas deben responder: qué porcentaje de los usuarios activos han usado el feature al menos una vez en los primeros 30 días desde que se activó para ellos, cuántas veces en promedio usan el feature por semana los usuarios que lo adoptaron, cuál es el perfil de los usuarios que adoptan el feature temprano vs. los que no lo adoptan (cohorte de registro, plan de precio, país, industria), y si existe correlación entre el uso del feature y la retención (los usuarios que usan el feature X tienen una retención de semana 4 más alta que los que no lo usan). Para cada consulta, explica cómo el resultado informa las decisiones de producto sobre si el feature merece inversión adicional.

Sección 5 — Optimización de queries analíticas sobre tablas de eventos de gran tamaño:
Explica las cinco técnicas de optimización de SQL más importantes cuando trabajas con tablas de eventos de decenas o cientos de millones de filas. Para cada técnica, muestra el antes y el después de la consulta y el impacto en el tiempo de ejecución: particionado por fecha (cómo añadir WHERE event_date BETWEEN para evitar escanear toda la tabla), materialización de resultados intermedios con CTEs o tablas temporales, uso de approximate functions para conteos de usuarios únicos (HLL en BigQuery, approx_count_distinct en Redshift), push down de filtros antes de los JOINs para reducir el volumen de datos cruzado, y uso de EXPLAIN ANALYZE para entender el plan de ejecución de la query y detectar los pasos costosos.

Entregables:
- Consulta SQL completa de análisis de cohortes de retención con CTEs y guía de interpretación
- Consulta de funnel de conversión con window functions, tiempo entre pasos y desglose por segmento
- Consultas de DAU/WAU/MAU y ratio de stickiness con evolución histórica y benchmarks de interpretación
- Consultas de feature adoption analytics con correlación de retención y perfil de early adopters
- Cinco técnicas de optimización de SQL analítico con ejemplos antes/después e impacto en rendimiento
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Calcular métricas de retención, cohortes y funnels de producto con SQL avanzado sin depender del equipo de datos',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Datos para diseñadores: usar Python y SQL para validar decisiones de diseño con métricas reales',
                'description'      => 'Aprende a usar Python y SQL para medir el impacto de tus decisiones de diseño con datos reales de comportamiento de usuario. Los diseñadores que hablan el idioma de los datos tienen más influencia en las decisiones de producto y ganan los debates internos con evidencia en lugar de opiniones.',
                'prompt_content'   => <<<'EOT'
Actúa como un design researcher con sólida base de análisis de datos cuantitativo que ha ayudado a equipos de diseño a pasar de defender decisiones con argumentos estéticos a defenderlas con datos de comportamiento de usuario.

Contexto de mi trabajo de diseño:
Soy diseñador [UX/UI/producto] que trabaja en [TIPO DE EMPRESA Y PRODUCTO]. Los datos de comportamiento de usuario que tenemos disponibles son [DESCRIBE: Google Analytics, Hotjar, FullStory, datos de A/B tests, eventos de producto en una base de datos]. El mayor problema que tengo con los datos es [DESCRIBE: no sé cómo extraerlos sin pedir ayuda al equipo técnico, no sé qué métricas usar para validar si un cambio de diseño mejoró la experiencia, mis argumentos de diseño pierden contra los argumentos de negocio en las reuniones de priorización].

Parte 1 — Qué métricas miden realmente la calidad del diseño:
Explica el marco de métricas de diseño centradas en el usuario: las métricas que capturan si el diseño funciona para el usuario, no solo si mejora los KPIs de negocio. Define las cinco métricas de UX más usadas y cómo medirlas: tasa de completitud de tarea (qué porcentaje de usuarios que intentan hacer X lo consiguen), tiempo en tarea (cuánto tiempo tarda el usuario en completar un flujo, como proxy de la fricción del diseño), tasa de error (cuántas veces el usuario hace clic en el lugar equivocado o tiene que volver atrás), satisfacción del usuario (SUS score o CSAT recogido justo después de una tarea), y tasa de abandono por paso (en qué punto específico del flujo se van más usuarios). Para cada métrica, explica cómo recogerla con las herramientas disponibles y cuál es el valor de referencia que indica un problema de diseño.

Parte 2 — SQL básico para diseñadores: extraer datos de comportamiento sin ayuda técnica:
Enseña las tres consultas SQL que un diseñador necesita para trabajar de forma autónoma con datos de comportamiento. Para cada consulta, explica qué responde y muestra el código con comentarios: una consulta para extraer el funnel de un flujo de diseño específico (qué porcentaje de usuarios completan cada paso del checkout, el onboarding o el flujo de creación de cuenta), una consulta para comparar el comportamiento antes y después de un cambio de diseño (usando la fecha del lanzamiento como punto de corte), y una consulta para identificar en qué dispositivo, sistema operativo o resolución de pantalla se producen más errores o abandonos. Para cada consulta, incluye el dataset de ejemplo con el que practicar en Google Colab.

Parte 3 — Análisis de A/B tests: cómo leer los resultados sin ser estadístico:
Explica el proceso de análisis de un A/B test de diseño de forma que un diseñador sin base estadística pueda interpretar los resultados y tomar una decisión fundamentada. Cubre: cómo calcular si los resultados son estadísticamente significativos (con la fórmula simplificada y la herramienta online que un diseñador puede usar sin conocer estadística), cuánto tiempo necesita correr un test para que los resultados sean fiables (y por qué detenerlo antes puede engañarte), cómo interpretar los intervalos de confianza (por qué un resultado de "+3% con 95% de confianza" no significa que la variante B sea necesariamente mejor), y qué hacer cuando el test no muestra diferencias significativas (cómo distinguir entre "el diseño no importa" y "el test no tenía suficiente potencia estadística").

Parte 4 — Usar Python y Claude para analizar mapas de calor y grabaciones de sesión:
Diseña un flujo de trabajo para que un diseñador extraiga insights cuantitativos de herramientas cualitativas como Hotjar o FullStory. El flujo incluye: cómo exportar los datos de clics de un mapa de calor a CSV y usar Python (via Claude) para identificar las zonas de más y menos clics con más precisión que la visualización visual del mapa de calor, cómo analizar las grabaciones de sesión de forma sistemática (en lugar de ver grabaciones aleatorias, cómo usar el filtro de sesiones con eventos específicos para ver solo las sesiones donde el usuario tuvo un problema), y cómo cuantificar la frecuencia de los problemas detectados cualitativamente para priorizar qué arreglar primero. Para cada paso del flujo, incluye el prompt que darías a Claude para generar el código Python que necesitas.

Parte 5 — Presentar datos de diseño para ganar debates internos:
Diseña el formato de presentación de métricas de diseño que convence a los stakeholders que priorizan los KPIs de negocio sobre la calidad de la experiencia de usuario. Explica cómo conectar cada métrica de UX con su impacto en una métrica de negocio: la tasa de completitud de tarea del checkout se conecta directamente con la tasa de conversión a compra, el tiempo en tarea del proceso de soporte se conecta con el coste del equipo de atención al cliente, la tasa de error en el formulario de registro se conecta con la tasa de activación de nuevas cuentas. Diseña la plantilla de presentación de resultados de diseño que incluye: el problema observado con datos cualitativos, la hipótesis de impacto en el negocio, el experimento propuesto para validarla, y los criterios de éxito medibles antes de comenzar el trabajo de diseño.

Entregables:
- Marco de cinco métricas de UX con definición, método de recogida y benchmarks de alerta
- Tres consultas SQL de comportamiento de usuario con código comentado y dataset de práctica
- Guía de interpretación de A/B tests para diseñadores sin base estadística
- Flujo de trabajo Python con Claude para análisis cuantitativo de mapas de calor y grabaciones
- Plantilla de presentación de métricas de diseño con conexión a impacto de negocio
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Validar decisiones de diseño con métricas de comportamiento de usuario usando Python y SQL sin perfil técnico',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Análisis de pipeline de ventas con SQL: cómo un comercial extrae insights de su CRM sin depender de IT',
                'description'      => 'Aprende a extraer y analizar los datos de tu CRM con SQL y Python para entender tu pipeline, predecir el cierre del mes y optimizar tu actividad comercial con datos reales. Los comerciales que analizan sus propios datos toman mejores decisiones y alcanzan sus cuotas con más consistencia.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista de ventas con experiencia ayudando a equipos comerciales a entender sus datos de CRM y a usar SQL básico para extraer los insights que necesitan para gestionar su pipeline sin depender del equipo de reporting o de IT.

Contexto de mi actividad comercial:
Trabajo como [DIRECTOR COMERCIAL/ACCOUNT EXECUTIVE/BUSINESS DEVELOPMENT] en [TIPO DE EMPRESA Y SECTOR] con una cuota mensual de [VALOR]. Los datos de mis oportunidades viven en [CRM: Salesforce/HubSpot/Pipedrive] y los exporto a [CSV/Excel/Google Sheets]. El análisis que más necesito y que más tiempo me cuesta hacer manualmente es [DESCRIBE: calcular la probabilidad de cierre de mes, identificar qué oportunidades están atascadas, entender cuál es mi ciclo de venta real, saber qué actividades generan más avance en el pipeline].

Módulo 1 — Los cinco KPIs del pipeline de ventas que todo comercial debe calcular:
Explica los cinco indicadores clave de rendimiento de pipeline que permiten a un comercial predecir su cierre mensual y optimizar su actividad. Para cada KPI, define la fórmula exacta, muestra cómo calcularlo a partir de los datos del CRM y explica qué nivel es saludable y cuándo indica un problema: velocidad del pipeline (revenue total del pipeline dividido por el ciclo de venta medio en días, que te dice cuánto revenue cierras por día), tasa de conversión por etapa (qué porcentaje de oportunidades pasan de cada etapa a la siguiente, para identificar en qué etapa se pierde más pipeline), ciclo de venta medio por tipo de cliente o tamaño de deal (para saber cuándo empezar a preocuparte por una oportunidad que lleva más tiempo del normal), cobertura de pipeline (ratio entre el valor total del pipeline y la cuota del período, que debe estar entre 3x y 4x para dar un nivel de seguridad razonable), y tasa de winrate por competidor (para identificar contra quién pierdes más y ajustar el discurso de ventas).

Módulo 2 — SQL para analizar tu pipeline desde una exportación del CRM:
Diseña cinco consultas SQL que un comercial puede ejecutar sobre la exportación CSV de su CRM en Google Colab para obtener los insights de pipeline más valiosos. Para cada consulta, explica qué columnas de CRM necesita como input y qué insight produce: una consulta para calcular el forecast ponderado del mes sumando el valor de cada oportunidad multiplicado por la probabilidad de cierre asignada a su etapa, una consulta para identificar las oportunidades que llevan más tiempo en la etapa actual que la media histórica de esa etapa (señal de que están atascadas), una consulta para comparar el winrate actual del trimestre con el del trimestre anterior por segmento de cliente, una consulta para calcular el número de días medio entre cada actividad registrada en el CRM y el avance a la siguiente etapa (para saber qué actividades aceleran el ciclo de venta), y una consulta para proyectar el cierre del mes basándose en la tasa de avance histórica del pipeline en las últimas dos semanas del mes.

Módulo 3 — Análisis de actividad comercial con Python y Claude:
Diseña un flujo de trabajo para que un comercial analice su actividad semanal con Python sin escribir código. El flujo usa Claude como generador de código y Google Colab como entorno de ejecución. Incluye los prompts exactos para pedir a Claude que genere el código que: analiza el número y tipo de actividades registradas en el CRM por semana (llamadas, emails, reuniones) y las correlaciona con el avance del pipeline en esa semana, identifica los días de la semana y las horas en que se registra más avance de pipeline (para optimizar el horario de trabajo comercial), genera una visualización del embudo de ventas actual vs. el embudo del mes anterior, y predice el cierre del mes con un modelo de regresión lineal simple basado en el histórico de las últimas 12 semanas.

Módulo 4 — Dashboard de pipeline semanal en 10 minutos:
Diseña el proceso para que un comercial tenga su propio dashboard de pipeline actualizado cada semana en menos de 10 minutos sin pedir nada al equipo de BI. El proceso incluye: la instrucción para exportar el pipeline del CRM como CSV cada lunes por la mañana, el prompt para pedir a Claude que genere el script de Python que calcula los cinco KPIs del módulo 1, genera los cuatro gráficos más importantes (distribución del pipeline por etapa, evolución de la cobertura de pipeline en las últimas 8 semanas, top 10 oportunidades por valor y probabilidad de cierre, actividades vs. avance de pipeline) y exporta el resultado como PDF o como informe de Google Slides, y el criterio para interpretar el dashboard y las acciones que debe disparar cada indicador.

Módulo 5 — Pronóstico de ventas del trimestre con análisis de cohortes de oportunidades:
Diseña un análisis de cohortes de oportunidades para hacer el pronóstico de ventas del trimestre con más precisión que el forecast ponderado estándar. El análisis agrupa las oportunidades por el trimestre en que entraron al pipeline y calcula qué porcentaje de ellas se cerraron en cada uno de los cuatro trimestres siguientes. Esto permite responder: de las oportunidades que entran hoy en el pipeline, cuántas se cerrarán en el próximo trimestre, en el siguiente y cuántas nunca se cerrarán. Incluye la consulta SQL para construir esta tabla de cohortes de oportunidades, la interpretación de los resultados y cómo usarla para hacer el pronóstico de ventas del próximo trimestre con un rango de confianza honesto.

Entregables:
- Cinco KPIs del pipeline con fórmula, cálculo desde CRM y benchmarks de alerta
- Cinco consultas SQL de análisis de pipeline con instrucciones de input y output esperado
- Flujo de trabajo Python con Claude para análisis de actividad comercial con prompts exactos
- Dashboard de pipeline semanal en 10 minutos con proceso de exportación y criterios de interpretación
- Análisis de cohortes de oportunidades para pronóstico de ventas trimestral con SQL e interpretación
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Analizar el pipeline de ventas y predecir el cierre del mes usando SQL y Python sin depender de IT',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product analytics con Python: cohortes, funnels y retención para PMs sin perfil técnico',
                'description'      => 'Domina los análisis de producto más críticos —cohortes de retención, funnels de conversión y métricas de activación— usando Python con la ayuda de Claude como generador de código. Los PMs que hablan el idioma de los datos tienen más influencia en el roadmap y en las conversaciones con la dirección.',
                'prompt_content'   => <<<'EOT'
Actúa como un product analyst con experiencia enseñando a product managers sin perfil técnico a extraer y visualizar los insights de producto más importantes usando Python con Claude como asistente de código, sin necesidad de aprender a programar desde cero.

Contexto del producto:
Soy PM en [TIPO DE EMPRESA Y PRODUCTO] con acceso a datos de [HERRAMIENTA: Mixpanel/Amplitude/Google Analytics/base de datos directa]. Los análisis que más necesito y que actualmente tardo días en conseguir del equipo de datos son [DESCRIBE: cohortes de retención, funnel de onboarding, análisis de feature adoption, segmentación de usuarios por comportamiento, análisis de churn].

Bloque 1 — El stack mínimo de datos que todo PM debería dominar:
Explica el conjunto mínimo de herramientas y habilidades de datos que un PM necesita para ser autónomo en el análisis sin convertirse en data scientist. El stack incluye: Google Colab (entorno de ejecución Python en el navegador sin instalaciones), pandas (librería Python para manipular tablas de datos), matplotlib o plotly (para visualizaciones), y Claude como asistente de código (para generar los scripts a partir de descripciones en lenguaje natural). Explica cómo este stack te permite hacer el 70% del trabajo de análisis que normalmente pides al equipo de datos, en qué casos todavía necesitarás al equipo de datos y cómo pedirle ayuda de forma que obtengas lo que necesitas más rápido.

Bloque 2 — Análisis de retención por cohortes con Python:
Diseña el flujo de trabajo completo para construir un análisis de cohortes de retención usando Python con Claude. El flujo incluye: el formato de datos que necesitas como input (tabla de eventos con user_id, event_name y timestamp exportada desde tu herramienta de analytics), el prompt exacto para pedir a Claude que genere el código que calcula la tabla de retención semanal por cohorte de primera visita, el código generado con comentarios explicativos para que entiendas qué hace cada paso, y la visualización resultante (heatmap de retención) con la guía de interpretación. Incluye también cómo identificar en el heatmap si hay un problema de activación (la retención de la semana 1 es baja para todas las cohortes), un problema de engagement (la retención cae rápido después de la semana 2), o un problema de valor a largo plazo (las cohortes más antiguas tienen mejor retención que las recientes, lo que indica degradación del producto).

Bloque 3 — Análisis de funnel de onboarding con Python:
Diseña el flujo de trabajo para analizar el funnel de onboarding de un producto nuevo usando Python. El flujo incluye: cómo definir los pasos del funnel en términos de eventos registrados en tu herramienta de analytics, el prompt para pedir a Claude que genere el código que calcula la tasa de conversión en cada paso del funnel y el tiempo mediano entre pasos, la visualización del funnel (gráfico de barras horizontal con tasas de conversión), y el análisis de segmentación (cómo el funnel difiere según el canal de adquisición, el plan de precio o el tamaño de empresa para productos B2B). Explica cómo usar este análisis para priorizar qué paso del funnel debe mejorar primero y cómo definir el experimento de diseño que validará si la mejora funciona.

Bloque 4 — Segmentación de usuarios por comportamiento con clustering:
Diseña el flujo de trabajo para segmentar a los usuarios por comportamiento usando clustering con Python. El análisis permite identificar grupos de usuarios con patrones de uso similares sin necesidad de definir los segmentos previamente. El flujo incluye: las features de comportamiento que se usan para el clustering (frecuencia de uso, número de features usadas, tiempo de sesión, tipo de acciones), el prompt para pedir a Claude que genere el código de clustering con K-means y la visualización de los clusters, y la interpretación de cada cluster (cómo nombrar y describir cada segmento en términos de producto: power users, usuarios ocasionales, usuarios de un solo feature, usuarios en riesgo de abandono). Explica cómo usar esta segmentación para personalizar las comunicaciones de producto, priorizar features y diseñar programas de onboarding diferenciados.

Bloque 5 — Análisis de churn y señales predictivas con Python:
Diseña el flujo de trabajo para identificar las señales de comportamiento que predicen el churn antes de que ocurra. El análisis incluye: la comparación del comportamiento de usuarios que churnearon en los últimos tres meses vs. los usuarios que renovaron (cuáles son las diferencias en frecuencia de uso, features utilizadas y patrones de actividad en los 30 días anteriores al churn), el prompt para pedir a Claude que genere el código que identifica estas señales con un análisis de correlación simple, la puntuación de riesgo de churn que asigna a cada usuario activo una probabilidad de abandono basada en su comportamiento reciente, y cómo entregar esta lista de usuarios en riesgo al equipo de CS para que intervenga proactivamente. Incluye cómo actualizar el análisis semanalmente de forma automatizada.

Entregables:
- Stack mínimo de datos para PMs con explicación de cada herramienta y sus límites
- Flujo completo de análisis de retención por cohortes con prompt, código comentado y guía de interpretación
- Flujo de análisis de funnel de onboarding con segmentación y priorización de mejoras
- Flujo de segmentación de usuarios por comportamiento con clustering y descripción de segmentos
- Análisis de señales predictivas de churn con puntuación de riesgo y entrega al equipo de CS
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Hacer análisis de cohortes, funnels y churn con Python usando Claude como asistente de código sin ser data scientist',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'People analytics con Python: analizar datos de RRHH para tomar decisiones basadas en evidencia',
                'description'      => 'Aprende a usar Python y SQL para analizar datos de empleados y tomar decisiones de RRHH basadas en evidencia: rotación, engagement, eficacia del recruiting y retorno de la inversión en formación. Los profesionales de RRHH que hablan el idioma de los datos tienen más credibilidad e influencia en el comité de dirección.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en People Analytics con experiencia ayudando a equipos de RRHH a construir sus primeras capacidades de análisis de datos sin necesidad de convertirse en programadores, usando Python con Claude como asistente de código y herramientas accesibles como Google Colab.

Contexto de mi área de RRHH:
Trabajo en el área de [RRHH/People/Talent] de una empresa de [TAMAÑO Y SECTOR] con [NÚMERO] empleados. Los datos de empleados que tenemos disponibles son [DESCRIBE: nómina, evaluaciones de desempeño, encuestas de engagement, registros de formación, datos de recruiting, registro de bajas]. El análisis que más necesitamos y que actualmente hacemos manualmente en Excel es [DESCRIBE: calcular la tasa de rotación por departamento, analizar el tiempo medio de contratación, medir el retorno de los programas de formación, identificar predictores de rotación voluntaria].

Sección 1 — Los cinco análisis de People Analytics que más impacto tienen en el negocio:
Explica los cinco análisis de datos de RRHH que generan más valor para la dirección y más credibilidad para el área de RRHH. Para cada análisis, define qué pregunta responde, qué datos necesita, qué resultado produce y cómo conecta con una decisión de negocio: análisis de rotación por departamento, nivel y antigüedad (para identificar dónde hay un problema estructural de retención), análisis del tiempo de cobertura de vacantes y calidad de contratación (para optimizar el proceso de recruiting), análisis de correlación entre engagement y desempeño (para justificar la inversión en programas de cultura), análisis del retorno de la inversión en formación (comparando el desempeño y la retención de los empleados que recibieron formación vs. los que no), y modelo predictivo de rotación (identificando las variables que predicen mejor quién va a irse en los próximos 90 días).

Sección 2 — Análisis de rotación con Python: cálculo y visualización:
Diseña el flujo de trabajo completo para calcular y visualizar la rotación de empleados usando Python con Claude. El flujo incluye: el formato del dataset de entrada (tabla de empleados con fecha de alta, fecha de baja si aplica, departamento, nivel, salario, resultado de la última evaluación de desempeño), el prompt para pedir a Claude que genere el código que calcula la tasa de rotación mensual, trimestral y anual por departamento y nivel, la tasa de rotación voluntaria vs. involuntaria, y el coste estimado de la rotación (calculado como el salario anual multiplicado por el coste de reposición estándar del sector), y la visualización en un dashboard que muestra la evolución de la rotación en los últimos 24 meses y el desglose por unidad organizativa.

Sección 3 — Análisis de recruiting: tiempo de cobertura y calidad de contratación:
Diseña el flujo para analizar la eficacia del proceso de recruiting con Python. El análisis incluye: el cálculo del tiempo medio de cobertura de vacantes (desde la apertura hasta la firma de oferta) por departamento, nivel y fuente de candidatos, la tasa de conversión en cada etapa del funnel de selección (candidatos recibidos → screening → entrevistas → oferta → aceptación), el análisis de calidad de contratación (comparando el desempeño a los 6 y 12 meses de los empleados contratados por diferentes fuentes o reclutadores), y el coste por contratación desglosado por canal de sourcing. Para cada análisis, incluye el prompt para Claude, la visualización recomendada y cómo usar el resultado para optimizar el proceso de recruiting.

Sección 4 — Análisis de engagement y su correlación con el desempeño y la rotación:
Diseña el flujo para analizar los datos de la encuesta de engagement de empleados y correlacionarlos con otras variables de negocio. El análisis incluye: el cálculo del eNPS (Employee Net Promoter Score) y los índices de engagement por departamento, nivel y antigüedad, el análisis de las preguntas que tienen mayor correlación con la intención de abandono (identificada por la pregunta "¿estás buscando trabajo activamente?"), la correlación entre el score de engagement y el resultado de la evaluación de desempeño (para argumentar que empleados más comprometidos tienen mejor desempeño), y la evolución del engagement en los últimos cuatro trimestres para detectar tendencias y el impacto de iniciativas específicas. Para cada análisis, incluye el prompt para Claude y cómo presentar el resultado a la dirección.

Sección 5 — Modelo predictivo de rotación sin ser data scientist:
Diseña el flujo para construir un modelo predictivo de rotación voluntaria usando Python con Claude, sin necesidad de conocer estadística avanzada. El modelo usa regresión logística o un árbol de decisión simple para identificar las variables que mejor predicen la rotación. El flujo incluye: la selección de las variables predictoras más relevantes (antigüedad, resultado de la última evaluación, cambios en el tiempo de proyecto, número de días de ausencia en el último trimestre, score de engagement, tiempo sin promoción), el prompt para pedir a Claude que genere el código que entrena el modelo y evalúa su precisión, la interpretación del resultado (qué variables son los predictores más importantes y cuánto contribuye cada una), y la lista de empleados con mayor probabilidad de rotación en los próximos 90 días para que RRHH intervenga proactivamente.

Entregables:
- Cinco análisis de People Analytics de mayor impacto con datos necesarios y conexión a decisiones de negocio
- Flujo completo de análisis de rotación con código, visualización y cálculo de coste
- Análisis de recruiting con funnel de selección, calidad de contratación y coste por canal
- Análisis de engagement con eNPS, correlaciones y evolución temporal para dirección
- Modelo predictivo de rotación con selección de variables, código y lista de empleados en riesgo
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Analizar rotación, recruiting, engagement y riesgo de churn de empleados con Python para tomar decisiones de RRHH basadas en datos',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero con Python: automatizar reportes, modelos y visualizaciones sin depender del equipo técnico',
                'description'      => 'Aprende a usar Python con Claude como asistente de código para automatizar el análisis financiero recurrente, construir modelos interactivos y generar visualizaciones de datos financieros sin necesidad de conocer programación. Los analistas financieros que automatizan sus procesos con Python recuperan decenas de horas al mes.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista financiero con sólida base en automatización de procesos con Python que ha ayudado a equipos de finanzas corporativas y FP&A a pasar de pasar días cerrando Excel a tener sus análisis automatizados y ejecutados en minutos cada semana.

Contexto de mi trabajo en finanzas:
Trabajo en el área de [FP&A/CONTROLLING/FINANZAS CORPORATIVAS/INVERSIONES] de una empresa de [TAMAÑO Y SECTOR]. Los procesos que más tiempo consumen y que actualmente hago manualmente en Excel son [DESCRIBE: cierre mensual de P&L, actualización del forecast, análisis de variaciones, preparación de reportes para el board, actualización de modelos de valoración]. Los datos viven en [DESCRIBE: SAP, Oracle, archivos CSV exportados, Google Sheets, Excel compartido en SharePoint].

Bloque 1 — El caso de negocio para automatizar el análisis financiero con Python:
Explica cuánto tiempo recupera un analista financiero que automatiza sus procesos recurrentes con Python. Calcula el tiempo de un proceso manual típico (cerrar el P&L mensual manualmente: consolidar los archivos CSV de cada departamento, limpiar los datos, calcular las variaciones, generar las visualizaciones, preparar el comentario ejecutivo) vs. el mismo proceso automatizado (ejecutar el script Python que hace todo en minutos). Describe los cinco procesos financieros recurrentes que más tiempo consumen y que son los mejores candidatos para automatizar: cierre mensual de P&L, actualización del forecast, análisis de variaciones presupuestarias, seguimiento de KPIs operativos y financieros, y preparación del pack de dirección.

Bloque 2 — Automatización del cierre mensual de P&L con Python:
Diseña el flujo de trabajo para automatizar el cierre mensual de P&L usando Python con Claude. El flujo incluye: el formato de los datos de entrada (archivos CSV o Excel de cada departamento con las cuentas contables y los importes del mes), el prompt para pedir a Claude que genere el script Python que consolida todos los archivos, limpia los datos (eliminar filas vacías, normalizar los nombres de cuenta, convertir los importes al formato correcto), calcula el P&L consolidado según la estructura definida, calcula las variaciones vs. el presupuesto y vs. el mismo período del año anterior, y exporta el resultado a un Excel formateado y a un PDF con las visualizaciones principales. Para cada paso del script, incluye la explicación de qué hace y cómo modificarlo si la estructura de los datos es diferente.

Bloque 3 — Modelos de forecasting con Python: de Excel a código mantenible:
Explica cómo migrar un modelo de forecasting construido en Excel a Python para hacerlo más robusto, trazable y actualizable. El flujo incluye: cómo documentar el modelo de Excel antes de migrarlo (identificar los inputs, las fórmulas de cálculo y los outputs), el prompt para pedir a Claude que genere el código Python equivalente con las mismas fórmulas pero con la lógica separada del formato de presentación, cómo añadir análisis de sensibilidad al modelo (cómo cambia el resultado si el precio de venta sube un 5%, si los costes de materias primas bajan un 10%, si el volumen de ventas es un 15% inferior al previsto), y cómo generar automáticamente el informe de resultados del modelo con las tres simulaciones en un PDF que puedes enviar directamente a dirección.

Bloque 4 — Visualizaciones financieras profesionales con Python:
Diseña los cinco tipos de visualización financiera más frecuentes con el código Python para generarlas usando matplotlib o plotly, con el prompt que darías a Claude para obtener cada una. Las visualizaciones incluyen: el gráfico de cascada (waterfall chart) para el análisis de variaciones de P&L (muestra cómo cada línea del P&L contribuye a la variación total), el gráfico de presupuesto vs. real por mes con la proyección del año (forecast line), el mapa de calor de KPIs mensuales (muestra el semáforo de todos los KPIs por mes en una sola imagen), el gráfico de escenarios del forecast (tres líneas: optimista, base, pesimista con área sombreada entre ellos), y el dashboard financiero de una página con los cuatro gráficos más importantes para el pack de dirección mensual.

Bloque 5 — Automatización completa del pack de dirección mensual:
Diseña el flujo de trabajo completo para generar el pack de dirección mensual de forma automatizada en menos de 30 minutos. El flujo incluye: el checklist de datos que necesitas recoger antes de ejecutar el script (confirmación del cierre contable, aprobación de los ajustes de cierre, datos del forecast actualizado por el equipo comercial), el script Python maestro que importa los datos, ejecuta todos los análisis, genera todas las visualizaciones y ensambla el informe en formato PDF o PowerPoint, el proceso de revisión humana antes de enviar el pack (qué debe verificar el analista que el script no puede verificar automáticamente), y el protocolo de actualización del script cuando cambian los requisitos del pack (nueva métrica, nuevo formato, nueva estructura organizativa).

Entregables:
- Caso de negocio para automatizar finanzas con Python y los cinco procesos candidatos
- Flujo completo de automatización del cierre mensual de P&L con script comentado y exportación
- Proceso de migración de modelo de forecasting Excel a Python con análisis de sensibilidad
- Cinco visualizaciones financieras profesionales con código Python y prompts para Claude
- Flujo de automatización del pack de dirección mensual con checklist y protocolo de revisión
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Automatizar el análisis financiero recurrente y la preparación de reportes con Python usando Claude como asistente de código',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Datos y métricas para despachos: analizar rentabilidad, tiempo y rendimiento legal con herramientas accesibles',
                'description'      => 'Aprende a analizar la rentabilidad, el tiempo invertido y el rendimiento del despacho usando Python y Excel con Claude como asistente. Los despachos que gestionan con datos toman mejores decisiones de precios, de asignación de recursos y de desarrollo del negocio.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de gestión de despachos de abogados con experiencia ayudando a firmas de todos los tamaños a implementar análisis de datos básicos que mejoran su rentabilidad y su capacidad de planificación sin necesidad de sistemas costosos ni de personal técnico.

Contexto del despacho:
Trabajo en un despacho de [TAMAÑO: boutique/mediano/gran despacho] especializado en [ÁREA JURÍDICA]. Tenemos [NÚMERO] abogados y llevamos el control de horas en [HERRAMIENTA: Excel/sistema de billing específico/Clio/Facturaplus]. Los principales problemas de gestión que queremos resolver con datos son [DESCRIBE: no sabemos cuáles son los asuntos más rentables, no sabemos qué abogados tienen más capacidad disponible, los presupuestos a cliente con frecuencia se nos quedan cortos, no tenemos visibilidad de la facturación pendiente hasta que ya es tarde].

Sección 1 — Los cinco indicadores de gestión que todo despacho debe calcular:
Explica los cinco KPIs de gestión de un despacho de abogados que permiten mejorar la rentabilidad y la planificación de recursos. Para cada KPI, define la fórmula exacta, los datos que necesita y la frecuencia de cálculo recomendada: tasa de realización de horas (porcentaje de las horas registradas que se facturan realmente, que mide cuánto trabajo se pierde en el proceso de billing), margen por asunto (ingresos del asunto menos el coste de las horas dedicadas al coste interno de hora de cada abogado), ratio de horas productivas vs. no productivas por abogado (para identificar quién tiene más capacidad disponible y quién está sobrecargado), ciclo de cobro medio (tiempo entre la emisión de la factura y el cobro efectivo, que mide la eficiencia en la gestión de cobros), y coste de adquisición de cliente y LTV por área de práctica (para decidir dónde invertir en desarrollo de negocio).

Sección 2 — Análisis de rentabilidad por asunto con Python:
Diseña el flujo de trabajo para calcular la rentabilidad real de cada asunto usando Python con Claude. El flujo incluye: el formato del dataset de entrada (tabla de horas con fecha, abogado, asunto, horas dedicadas, tarifa hora, estado del asunto; tabla de facturas con asunto, importe facturado, importe cobrado, fecha de cobro), el prompt para pedir a Claude que genere el código que calcula para cada asunto el coste total de horas al coste interno, el ingreso facturado, el margen absoluto y el margen porcentual, y la tasa de realización, la visualización de la distribución de margen por tipo de asunto y área de práctica, y el ranking de los asuntos más y menos rentables del año. Explica cómo usar este análisis para revisar los presupuestos a clientes y ajustar las tarifas.

Sección 3 — Gestión de la capacidad y la carga de trabajo del equipo:
Diseña el flujo para analizar la carga de trabajo del equipo y detectar desequilibrios con Python. El análisis incluye: el cálculo de las horas registradas por abogado y semana vs. la capacidad disponible objetivo (la capacidad estándar que el despacho considera productiva para un abogado a tiempo completo), la detección de semanas con sobrecarga o con baja utilización por abogado y su evolución en los últimos seis meses, la previsión de la carga de trabajo en las próximas cuatro semanas basada en los asuntos activos y las horas pendientes estimadas, y el análisis de la distribución de horas por tipo de tarea (facturables directas, no facturables de marketing y desarrollo de negocio, administración interna) para identificar si los abogados senior están invirtiendo tiempo en tareas que deberían delegarse.

Sección 4 — Control de facturación y cobros con análisis de aging:
Diseña el flujo para hacer el análisis de aging de facturas pendientes de cobro usando Python. El análisis categoriza las facturas pendientes por antigüedad (0-30 días, 31-60 días, 61-90 días, más de 90 días) y calcula el riesgo de incobrabilidad de cada categoría. Incluye: el prompt para que Claude genere el código que calcula el aging, el importe total en riesgo por categoría, el tiempo medio de cobro por cliente y por área de práctica, y el listado de facturas con más de 60 días pendientes ordenadas por importe para priorizar la gestión de cobros. Explica cómo automatizar este análisis para que se actualice semanalmente con solo ejecutar el script y cómo presentar el resultado al equipo de gestión del despacho.

Sección 5 — Dashboard de gestión mensual del despacho:
Diseña el proceso para generar el dashboard de gestión mensual del despacho de forma automatizada. El dashboard de una sola página incluye: los cinco KPIs del mes vs. el mes anterior y vs. el objetivo, la distribución de horas por área de práctica y por abogado, el top 10 de asuntos por margen y el bottom 10 por margen, el aging de cobros con el semáforo de riesgo, y la previsión de facturación del mes siguiente basada en los asuntos activos. Incluye el prompt para pedir a Claude que genere el script que construye este dashboard a partir de los exports del sistema de billing y lo exporta en PDF para la reunión mensual de socios.

Entregables:
- Cinco KPIs de gestión de despacho con fórmula, datos necesarios y frecuencia de cálculo
- Flujo de análisis de rentabilidad por asunto con código, visualización y guía de uso en precios
- Análisis de capacidad y carga de trabajo del equipo con previsión de las próximas semanas
- Control de facturación y cobros con análisis de aging y automatización semanal
- Dashboard de gestión mensual del despacho con proceso automatizado y exportación a PDF
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Analizar rentabilidad, carga de trabajo y cobros del despacho con Python y Excel para mejorar la gestión con datos',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer Success analytics: analizar churn, NPS y salud de cliente con Python sin ser data scientist',
                'description'      => 'Domina los análisis de datos más críticos para Customer Success —churn prediction, health score de cuenta y análisis de NPS— usando Python con Claude como asistente de código. Los CSMs que analizan sus datos con autonomía retienen más clientes y gestionan más cuentas con el mismo equipo.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista de Customer Success con experiencia construyendo modelos de health score, predicción de churn y análisis de NPS para empresas SaaS B2B y enseñando a equipos de CS a usar estas herramientas de forma autónoma sin depender del equipo de datos.

Contexto de mi rol en CS:
Soy [CSM/Director de CS/VP of Customer Success] en una empresa de [TIPO DE PRODUCTO] con [NÚMERO] cuentas de cliente y un ARR de [VALOR]. Las métricas de CS que monitorizo actualmente son [DESCRIBE: tasa de churn, NPS, tiempo de respuesta de tickets, adoption rate de features]. El problema con mis datos actuales es [DESCRIBE: el health score que tenemos es muy manual, no podemos predecir el churn con suficiente antelación, el análisis de NPS lo hace otro equipo y llegamos tarde a los insights, no tenemos visibilidad del riesgo de toda la cartera en tiempo real].

Módulo 1 — Las métricas de CS que predicen el churn mejor que el NPS:
Explica por qué el NPS solo no es suficiente para predecir el churn y cuáles son las métricas de comportamiento de cliente que tienen mayor poder predictivo. Las cinco señales de comportamiento que mejor predicen el churn en productos SaaS B2B: la caída del número de usuarios activos semanales en el account (una caída de más del 20% en dos semanas consecutivas tiene una correlación alta con el churn en los siguientes 60 días), la reducción del breadth of adoption (el cliente usa menos features que antes, lo que indica que está reduciendo el uso antes de cancelar), el aumento en la frecuencia de tickets de soporte de frustración (los tickets de tipo "esto no funciona como esperaba" son predictores más potentes que los tickets técnicos), el silencio del interlocutor principal (responde cada vez menos a los emails del CSM), y la no renovación de usuarios adicionales cuando el equipo del cliente crece (el cliente no añade licencias aunque su empresa esté creciendo).

Módulo 2 — Construir el health score de cuenta con Python:
Diseña el flujo de trabajo para construir un health score automático para cada cuenta usando Python con Claude. El health score combina las métricas del módulo anterior en un único indicador de riesgo. El flujo incluye: el formato del dataset de entrada (tabla de métricas por cuenta y semana: usuarios activos, features utilizadas, tickets de soporte con tipo, última respuesta del interlocutor, licencias contratadas vs. licencias activas), el prompt para pedir a Claude que genere el código que normaliza cada métrica en una escala del 0 al 100, calcula el health score ponderado (con los pesos que el equipo de CS asigna a cada métrica según su poder predictivo histórico), y clasifica cada cuenta en verde, amarillo o rojo según el umbral definido, y la visualización del health score de toda la cartera ordenada por riesgo para que el CSM sepa dónde centrar su atención.

Módulo 3 — Análisis de NPS: de las respuestas a los insights accionables:
Diseña el flujo para analizar las respuestas a la encuesta de NPS y extraer insights accionables con Python. El análisis va más allá del score agregado y cubre: el cálculo del NPS por segmento (por tamaño de empresa, sector, plan de precio, región, antigüedad del cliente) para identificar en qué segmento el producto funciona mejor y peor, el análisis de texto de las respuestas abiertas usando Claude para categorizar los comentarios por tema (usabilidad, precio, soporte, funcionalidades, integración) y detectar los tres temas más frecuentes en detractores y en promotores, la correlación entre el NPS recibido y el comportamiento posterior del cliente (los clientes que dan un 6 o menos, ¿cuándo hacen churn de media? ¿interviene el CSM a tiempo?), y el análisis de la evolución del NPS en el tiempo para medir el impacto de iniciativas específicas de producto o de CS.

Módulo 4 — Modelo predictivo de churn con Python:
Diseña el flujo para construir un modelo predictivo de churn que identifica las cuentas en riesgo con 60-90 días de antelación. El modelo usa regresión logística o un árbol de decisión simple que un analista sin perfil técnico puede construir con Claude. El flujo incluye: la preparación del dataset de entrenamiento (historial de 24 meses de métricas por cuenta con la variable objetivo: si el cliente churneó en los siguientes 90 días), el prompt para pedir a Claude que genere el código que entrena el modelo, evalúa su precisión (con la curva ROC y la matriz de confusión explicadas en lenguaje no técnico), e identifica las tres o cuatro variables que más contribuyen a la predicción de churn, la aplicación del modelo a las cuentas activas actuales para generar la lista de cuentas en riesgo con su probabilidad de churn, y el proceso de revisión semanal de esta lista por el equipo de CS.

Módulo 5 — Dashboard de salud de cartera para el equipo de CS:
Diseña el proceso para generar el dashboard semanal de salud de la cartera de clientes de forma automatizada. El dashboard permite al Director de CS ver en un minuto dónde está el riesgo de toda la cartera y dónde debe intervenir el equipo. Incluye: los cinco elementos del dashboard (mapa de calor de health score de todas las cuentas, evolución del NPS semanal, top 10 cuentas en riesgo con el motivo del riesgo y el CSM responsable, cuentas que han bajado de categoría de verde a amarillo o de amarillo a rojo en la última semana, y pipeline de renovaciones del próximo trimestre con el health score actual de cada cuenta), el proceso para generar el dashboard automáticamente cada lunes con un script Python, y cómo distribuirlo al equipo de CS y a la dirección.

Entregables:
- Cinco señales de comportamiento predictoras de churn con correlación histórica y umbral de alerta
- Flujo completo de construcción del health score automático con código, pesos y visualización por riesgo
- Análisis de NPS por segmento, análisis de texto de comentarios y correlación con comportamiento
- Modelo predictivo de churn con entrenamiento, evaluación y aplicación a la cartera actual
- Dashboard semanal de salud de cartera automatizado con distribución al equipo y a dirección
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir health scores automáticos, predecir churn y analizar NPS con Python para gestionar la cartera de CS con datos',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelancers basados en datos: analizar tu negocio, tus clientes y tu productividad con Python y SQL',
                'description'      => 'Aprende a analizar tu negocio freelance con datos: qué clientes son más rentables, cuánto tiempo tardas realmente en cada tipo de proyecto, cuál es tu tasa de conversión de propuestas y cómo predecir tus ingresos del próximo mes. Los freelancers que gestionan con datos fijan mejores precios y toman mejores decisiones.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de negocios para profesionales independientes con experiencia ayudando a freelancers a construir sus primeras capacidades de análisis de datos usando herramientas accesibles como Google Colab, Python con Claude como asistente y Excel para entender y optimizar su negocio.

Contexto de mi negocio freelance:
Me dedico a [DESCRIBE TU ESPECIALIDAD] y trabajo principalmente con [TIPO DE CLIENTE]. Mis proyectos típicos tienen un precio de [RANGO] y una duración de [DURACIÓN MEDIA]. Actualmente llevo el registro de mis horas y proyectos en [HERRAMIENTA: Excel/Toggl/Notion/Harvest]. El mayor problema de gestión de mi negocio es [DESCRIBE: no sé si mis precios son los correctos, no sé cuánto tiempo real dedico a cada tipo de proyecto, no puedo predecir cuándo tendré trabajo y cuándo no, algunos clientes consumen mucho más tiempo del que cobro].

Bloque 1 — Los cinco KPIs que todo freelancer debería calcular mensualmente:
Explica los cinco indicadores clave que un freelancer necesita calcular regularmente para gestionar su negocio con datos en lugar de con intuición. Para cada KPI, define la fórmula exacta y explica qué decisión de negocio permite tomar: la tarifa hora efectiva (los ingresos del mes divididos entre las horas totales trabajadas, incluyendo tiempo de gestión, ventas y administración, no solo las horas facturables; este número suele ser entre un 30% y un 50% inferior a la tarifa que crees que cobras), el margen por tipo de proyecto (ingresos del proyecto menos el coste de las horas al coste de tu hora de trabajo, para identificar qué tipos de proyecto realmente son rentables), la tasa de conversión de propuestas (qué porcentaje de las propuestas enviadas se convierten en proyecto, desglosado por tipo de cliente, canal de captación y precio del proyecto), el tiempo entre proyectos (el número de días de media entre el fin de un proyecto y el inicio del siguiente, que mide el riesgo de los períodos sin ingresos), y el coste de adquisición de cliente (tiempo invertido en ventas y marketing dividido por el número de clientes nuevos conseguidos, para saber cuánto cuesta realmente conseguir un cliente nuevo).

Bloque 2 — Análisis de rentabilidad por cliente y por tipo de proyecto:
Diseña el flujo de trabajo para calcular la rentabilidad real de cada cliente y tipo de proyecto usando Python con Claude. El flujo incluye: el formato del dataset de entrada (tabla de proyectos con cliente, tipo de proyecto, fecha de inicio y fin, precio facturado, horas registradas), el prompt para pedir a Claude que genere el código que calcula el margen por proyecto, la tarifa hora efectiva por cliente, el tiempo medio de proyecto por tipo, y el valor total de vida de cada cliente (suma de todos los proyectos con ese cliente), y la visualización que muestra la distribución de rentabilidad por cliente (diagrama de dispersión con precio en el eje X y tarifa hora efectiva en el eje Y para identificar a los clientes que más pagan y a los que mejor aprovechan tu tiempo). Explica qué hacer con los clientes que aparecen en el cuadrante de bajo precio y baja eficiencia.

Bloque 3 — Análisis del tiempo real vs. el tiempo estimado por tipo de proyecto:
Diseña el flujo para analizar la precisión de tus estimaciones de tiempo y mejorar tus presupuestos futuros. El análisis incluye: el cálculo del ratio tiempo real vs. tiempo estimado por tipo de proyecto y por cliente (para identificar cuáles son los proyectos que sistemáticamente subestimas), el análisis de las tareas que más tiempo consumen vs. las que menos en cada tipo de proyecto (para identificar si hay tareas que podrías delegar o automatizar), la curva de aprendizaje por tipo de proyecto (¿los proyectos más recientes del mismo tipo llevan menos tiempo que los primeros? ¿Cuánto mejoras por proyecto?), y la estimación de las horas reales que necesitarás para un proyecto nuevo basada en el historial de proyectos similares. Explica cómo usar este análisis para fijar precios más precisos y evitar los proyectos que siempre terminan siendo deficitarios.

Bloque 4 — Predicción de ingresos del próximo mes con análisis de pipeline:
Diseña el flujo para que un freelancer pueda predecir sus ingresos del próximo mes con más precisión que la intuición. El análisis incluye: el cálculo de los ingresos garantizados del próximo mes (proyectos en curso con fecha de entrega en el próximo mes más proyectos ya firmados pendientes de inicio), la estimación de los ingresos probables (propuestas enviadas multiplicadas por la tasa de conversión histórica y el precio medio de los proyectos de ese tipo), la identificación de los gaps de pipeline (períodos del próximo trimestre donde la carga de trabajo prevista está por debajo del objetivo de ingresos, que requieren activar la captación de clientes ya), y el análisis de estacionalidad (en qué meses del año históricamente has tenido más y menos trabajo, para anticipar los períodos de baja y planificar la captación con antelación).

Bloque 5 — Dashboard mensual del negocio freelance en 15 minutos:
Diseña el proceso para que un freelancer tenga su dashboard mensual de negocio actualizado el primer día de cada mes en menos de 15 minutos. El dashboard incluye: los cinco KPIs del mes vs. el mes anterior y vs. el objetivo anual, la distribución de horas por cliente y por tipo de proyecto, el ranking de rentabilidad de clientes del año acumulado, el análisis de pipeline del próximo trimestre con el gap de ingresos identificado, y el forecast de ingresos del mes en curso vs. el necesario para alcanzar el objetivo anual. Incluye el prompt para pedir a Claude que genere el script Python que construye este dashboard a partir de los exports de tu herramienta de registro de tiempo y tu tabla de proyectos, y que lo exporta en PDF o como una presentación de Google Slides.

Entregables:
- Cinco KPIs del negocio freelance con fórmula, interpretación y decisión de negocio que permite tomar
- Flujo de análisis de rentabilidad por cliente y tipo de proyecto con visualización y diagnóstico
- Análisis de tiempo real vs. estimado con curva de aprendizaje y mejora de precisión en presupuestos
- Análisis de pipeline y predicción de ingresos del próximo mes con identificación de gaps
- Dashboard mensual del negocio freelance automatizado con script Python y exportación
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Analizar la rentabilidad, el tiempo y el pipeline del negocio freelance con Python para tomar mejores decisiones de precio y de captación',
                'vote_score'       => 40,
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
