<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills468Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Análisis de datos de marketing con IA y dashboards inteligentes',
                'description'      => 'Construye dashboards de marketing analytics con IA que transformen datos crudos en decisiones de negocio accionables y predicciones de rendimiento.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing analytics y business intelligence especializado en transformar datos de marketing en decisiones de negocio rentables. Quiero que me ayudes a construir un sistema completo de análisis de datos de marketing con inteligencia artificial que vaya mucho más allá de los dashboards tradicionales y me permita predecir el rendimiento de las campañas antes de ejecutarlas, identificar oportunidades ocultas en los datos y automatizar el análisis de lo que está funcionando y lo que no.

**El problema que quiero resolver:**
Los equipos de marketing tienen acceso a más datos que nunca, pero muchos siguen tomando decisiones basadas en intuición o en métricas de vanidad. Los dashboards estándar muestran qué pasó, pero no por qué pasó ni qué va a pasar. Quiero usar la IA para cerrar esa brecha y convertir los datos de marketing en una ventaja competitiva real.

**Lo que necesito que construyas conmigo:**

Primero, diseña la arquitectura de datos de un sistema de marketing analytics moderno:
- Qué fuentes de datos deben integrarse (Google Ads, Meta Ads, Google Analytics 4, CRM, plataforma de email marketing, datos de ventas) y cómo unificarlas en un modelo de datos coherente
- Cómo resolver el problema de la atribución multicanal: los diferentes modelos (last click, first click, lineal, time decay, data-driven) y cuándo usar cada uno según el tipo de negocio y el ciclo de compra
- Cómo estructurar la capa de datos para que soporte tanto el análisis histórico como la predicción con IA

Segundo, diseña los dashboards que necesita cada perfil de usuario en marketing:
- Dashboard del CMO: los cinco o seis KPIs más importantes para visión ejecutiva (revenue atribuido al marketing, CAC por canal, ROAS consolidado, pipeline generado, previsión de cierre del mes vs objetivo)
- Dashboard del performance marketer: métricas de rendimiento de campaña en tiempo real, alertas de anomalías, comparativa de periodos y desglose por segmento de audiencia
- Dashboard del content marketer: rendimiento del contenido (orgánico vs pagado), impacto en el funnel de conversión, tendencias de consumo de contenido y oportunidades de SEO

Para cada dashboard incluye: qué visualizaciones usar para cada métrica (barras, líneas, mapas de calor, embudos), cómo organizar la información para la narrativa de datos más efectiva, y qué alertas automáticas configurar.

Tercero, diseña los modelos predictivos de marketing con IA:
- Predicción de conversión a 30 días basada en el pipeline actual y los patrones históricos por campaña, canal y segmento de audiencia
- Modelo de optimización de presupuesto: cómo usar IA para recomendar la distribución óptima del presupuesto entre canales para maximizar el revenue según el objetivo de negocio
- Detección de anomalías: cómo configurar alertas inteligentes que detecten cambios estadísticamente significativos en el rendimiento antes de que impacten materialmente en los resultados

Cuarto, dame un proceso para hacer análisis de causa raíz con IA cuando los resultados no son los esperados:
- Cómo estructurar la investigación cuando el ROAS cae un 20% en una semana
- Qué preguntas hacer a los datos y en qué orden para aislar la causa
- Cómo documentar los hallazgos y las acciones tomadas para construir memoria organizacional que mejore las decisiones futuras

Incluye ejemplos de queries en lenguaje natural que puedes hacerle a un sistema de BI con IA para obtener insights que normalmente requerirían horas de análisis manual en Excel.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Construir sistema de marketing analytics con IA para pasar de datos a decisiones rentables',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Queries en lenguaje natural sobre bases de datos con IA',
                'description'      => 'Implementa un sistema de text-to-SQL que permita a usuarios no técnicos consultar bases de datos empresariales en lenguaje natural con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un ingeniero de software senior especializado en sistemas de inteligencia artificial aplicados a bases de datos y business intelligence. Quiero implementar un sistema robusto de text-to-SQL que permita a usuarios de negocio sin conocimientos técnicos consultar bases de datos complejas usando lenguaje natural en español, con validación de seguridad y resultados comprensibles.

**El problema a resolver:**
Los datos de negocio viven en bases de datos relacionales que solo los analistas con SQL pueden consultar. El 80% de las personas que necesitan datos para tomar decisiones no saben SQL, lo que crea un cuello de botella enorme en los equipos de datos. Un sistema text-to-SQL bien implementado democratiza el acceso a los datos y reduce la carga del equipo técnico.

**Diseño técnico del sistema:**

Explícame la arquitectura completa de un sistema text-to-SQL de producción:
- Los componentes principales: interfaz de usuario de consulta en lenguaje natural, módulo de comprensión del schema de base de datos, motor de generación de SQL con LLM, validador de seguridad y corrección sintáctica, ejecutor de queries, y módulo de presentación de resultados con explicación en lenguaje natural
- Cómo construir el contexto del schema que se le pasa al LLM: qué información incluir sobre tablas, columnas, relaciones y datos de ejemplo para que el modelo genere SQL correcto
- Cómo manejar la ambigüedad en las preguntas del usuario: cuándo pedir clarificación antes de ejecutar y cómo formular esa solicitud de aclaración de forma natural

Dame código Python funcional para los componentes principales:
- Una clase SchemaExtractor que lea el schema de una base de datos PostgreSQL o MySQL y genere una representación en texto comprensible para el LLM, incluyendo ejemplos de valores por columna para columnas categóricas
- Una función generate_sql que tome una pregunta en lenguaje natural y el schema, construya el prompt para Claude, extraiga el SQL de la respuesta y valide la sintaxis antes de ejecutarlo
- Un validador de seguridad que detecte intentos de inyección SQL, limite el tipo de operaciones permitidas (solo SELECT para usuarios no técnicos), y aplique restricciones de row-level security según el perfil del usuario
- Una función explain_results que tome el SQL generado y los resultados y produzca una respuesta en lenguaje natural que explique los hallazgos al usuario no técnico

Profundiza en los casos de uso más complejos:
- Cómo manejar queries que requieren joins entre múltiples tablas: cómo dar al LLM el contexto de las relaciones para que infiera los joins correctamente
- Cómo gestionar preguntas que involucran agregaciones, filtros de fechas y comparativas temporales (esta semana vs semana pasada, este mes vs mismo mes del año anterior)
- Cómo manejar preguntas que requieren subconsultas o CTEs y cómo verificar que el SQL generado es correcto antes de ejecutarlo en producción

Finalmente, diseña la estrategia de feedback y mejora continua:
- Cómo registrar las consultas fallidas y usarlas para mejorar el sistema
- Cómo construir un sistema de few-shot examples que mejore la precisión del LLM con las particularidades del schema de tu empresa
- Cómo medir la precisión del sistema (query accuracy, result relevance) y qué umbral de confianza usar para ejecutar automáticamente vs pedir confirmación al usuario
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Implementar sistema text-to-SQL con IA para democratizar el acceso a datos empresariales',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Visualización de datos inteligente y narrativa visual con IA',
                'description'      => 'Diseña sistemas de visualización de datos que usen IA para generar narrativas visuales comprensibles y revelar insights ocultos automáticamente.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en diseño de información y data visualization con profundo conocimiento de la psicología de la percepción visual y las mejores prácticas en comunicación de datos. Quiero construir un sistema de visualización de datos impulsado por IA que no solo presente los datos de forma atractiva, sino que use la inteligencia artificial para seleccionar automáticamente el tipo de visualización más adecuada, generar narrativas que expliquen los insights y detectar patrones que el ojo humano podría pasar por alto.

**El reto de la visualización de datos con IA:**
La mayoría de los dashboards están llenos de gráficos que muestran datos pero no cuentan historias. El problema no es la falta de datos, sino la falta de diseño que guíe la atención del espectador hacia lo que importa y le ayude a entender el "¿y qué?" de cada visualización. La IA puede hacer ese trabajo: seleccionar la visualización correcta, resaltar lo relevante y narrar el insight.

**Lo que necesito que diseñes conmigo:**

Primero, el framework de selección automática de visualización:
- Las reglas de decisión para elegir el tipo de gráfico correcto según el tipo de datos (cuantitativo, categórico, temporal, geográfico, relacional), el número de variables y el mensaje que se quiere comunicar
- Cómo entrenar a la IA para que aprenda las preferencias y convenciones visuales de tu organización y aplique automáticamente el estilo correcto
- Los errores de visualización más comunes (usar gráficos de tarta cuando hay más de cuatro categorías, truncar el eje Y para exagerar diferencias, usar colores que no son accesibles para daltónicos) y cómo configurar la IA para evitarlos

Segundo, diseña el sistema de narrativa automática de datos:
- Cómo usar IA para generar el texto de interpretación que acompaña cada visualización: qué está viendo el usuario, qué significa, qué debería hacer con esa información
- Cómo configurar diferentes niveles de narrativa según el perfil del usuario: narrativa ejecutiva (solo el insight más importante y la acción recomendada) vs narrativa analítica (explicación completa del patrón con contexto estadístico)
- Cómo estructurar un informe de datos narrativo completo: qué orden seguir para contar la historia de los datos de forma que sea memorable y accionable

Tercero, profundiza en el diseño visual de dashboards de alta calidad:
- Los principios de diseño de Tufte aplicados a dashboards modernos: data-ink ratio, eliminar chartjunk, usar el espacio en blanco correctamente
- Cómo diseñar una jerarquía visual clara que guíe la atención hacia los KPIs más importantes primero
- Sistemas de color para datos: cómo elegir paletas secuenciales, divergentes y categóricas que sean accesibles, informativamente correctas y coherentes con la marca
- El diseño responsive de dashboards: cómo adaptar las visualizaciones a móvil sin perder información crítica

Cuarto, dame guías específicas para las cinco visualizaciones más usadas en business intelligence:
- Gráfico de líneas temporal: cuándo usarlo, cómo anotarlo correctamente, cómo comparar múltiples series sin crear confusión
- Gráfico de barras y variantes: horizontales vs verticales, agrupadas vs apiladas, y cuándo usar cada variante
- Tabla de datos: cómo diseñar una tabla que sea legible y permita la comparación rápida entre filas
- Scatter plot o gráfico de dispersión: cuándo es la elección correcta y cómo añadir capas de información (tamaño, color, etiquetas) sin crear ruido visual
- Mapa de calor: casos de uso específicos en BI y cómo elegir la escala de color correcta según si el dato tiene un punto de referencia neutro o no

Incluye al final recomendaciones de herramientas de visualización que integran IA (Tableau Pulse, Power BI Copilot, Looker Studio con Gemini) y cómo aprovechar sus capacidades de forma práctica.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar dashboards de datos con narrativa automática por IA que conviertan métricas en decisiones',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Análisis predictivo de pipeline de ventas con IA',
                'description'      => 'Usa IA para analizar el pipeline de ventas, predecir el cierre de oportunidades y priorizar los esfuerzos del equipo comercial con datos.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en sales operations y analytics con especialización en modelos predictivos de ventas. Quiero construir un sistema de análisis del pipeline de ventas impulsado por inteligencia artificial que prediga con precisión qué oportunidades se van a cerrar, cuándo y por qué, para que el equipo comercial pueda enfocar su tiempo en las oportunidades de mayor probabilidad de éxito.

**El problema del pipeline opaco:**
La mayoría de los equipos de ventas trabajan con pipelines que son declarativos, no predictivos: las oportunidades están en las etapas en las que el comercial dice que están, no necesariamente en las que los datos indican. El resultado es una previsión de cierre inexacta, un director de ventas que no sabe dónde están los riesgos reales y un equipo comercial que distribuye mal su tiempo.

**Lo que necesito que diseñes:**

Primero, el modelo de datos del pipeline inteligente:
- Qué señales de comportamiento recoger de cada oportunidad para alimentar el modelo predictivo: interacciones de email (tasa de apertura, tiempo de respuesta del prospect), actividad en el CRM (frecuencia de actualizaciones, cambios de etapa, notas añadidas), engagement con contenido (propuestas descargadas, demos asistidas, casos de éxito consultados), y señales externas (presupuesto del cliente, ciclo fiscal, noticias de la empresa)
- Cómo estructurar el modelo de datos en el CRM para recoger estas señales de forma consistente y automática
- Qué datos históricos de oportunidades cerradas (ganadas y perdidas) necesito para entrenar el modelo y cuál es el volumen mínimo para que sea fiable

Segundo, diseña el modelo de predicción de cierre con IA:
- Cómo construir un modelo de clasificación que prediga la probabilidad de cierre de cada oportunidad en los próximos 30, 60 y 90 días
- Las variables más predictivas en un modelo de ventas B2B según la investigación de sales analytics: qué factores históricos tienen más peso en la probabilidad de cierre
- Cómo calibrar el modelo para que las probabilidades predichas sean reales (si el modelo dice 70%, que se cierre realmente el 70% de las oportunidades en ese rango) y no solo rankings relativos

Tercero, diseña el dashboard de pipeline intelligence para el director de ventas:
- La vista de salud del pipeline: cómo mostrar visualmente en qué estado está el pipeline frente al objetivo del periodo y dónde están los mayores riesgos
- El score de oportunidades: cómo mostrar a los comerciales su lista de oportunidades ordenada por probabilidad de cierre ponderada por valor, con los factores de riesgo y las acciones recomendadas para cada una
- Las alertas de riesgo: qué señales deben disparar una alerta automática al director de ventas (oportunidad que no avanza, prospect que deja de responder, deal en riesgo de perderse a final de trimestre)

Cuarto, diseña el sistema de coaching de ventas basado en datos: cómo usar el análisis del pipeline para identificar patrones en el comportamiento de los comerciales de alto rendimiento vs los de rendimiento medio, y cómo usar esos patrones para crear programas de coaching específicos y medibles que mejoren el rendimiento del equipo completo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Predecir el cierre de oportunidades de venta con IA para priorizar esfuerzos y mejorar forecast',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product analytics con IA para decisiones de producto basadas en datos',
                'description'      => 'Construye un sistema de product analytics impulsado por IA que identifique automáticamente los drivers de retención, conversión y engagement del producto.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en product analytics y data science aplicado al desarrollo de producto digital. Quiero construir un sistema completo de product analytics con inteligencia artificial que vaya más allá de los dashboards tradicionales de métricas y me permita entender de forma profunda por qué los usuarios se quedan, por qué se van, qué funcionalidades generan más valor y cómo priorizar el roadmap basándome en datos reales de comportamiento.

**El contexto del producto:**
Tenemos un SaaS B2B con 2.000 cuentas activas, MRR de 180.000€, una tasa de churn mensual del 3,2% y una tasa de activación del 45%. Sabemos que hay un problema de activación y retención, pero no entendemos con precisión qué lo causa ni qué cambios en el producto tendrían mayor impacto en estas métricas.

**Lo que necesito que construyas conmigo:**

Primero, diseña la infraestructura de recogida de datos de comportamiento:
- Qué eventos de usuario debo instrumentar en el producto para tener una visión completa del journey del usuario: desde el primer login hasta la renovación o el churn
- Cómo diseñar el esquema de eventos para que sea flexible, escalable y compatible con herramientas de analytics como Mixpanel, Amplitude o una solución propia
- Qué datos de contexto añadir a cada evento para poder segmentar correctamente: plan del usuario, rol, tamaño de empresa, canal de adquisición, mercado geográfico

Segundo, diseña los análisis de IA más importantes para entender el comportamiento del usuario:
- Análisis de cohortes de activación: cómo identificar qué usuarios se activan (llegan al "aha moment") y cuánto tiempo tardan según canal de adquisición, plan y perfil de empresa, y qué acciones en los primeros 7 días predicen mejor la activación
- Análisis de churn predictivo: cómo construir un modelo que identifique usuarios en riesgo de churn 30 días antes de que cancelen, con las señales de comportamiento que más pesan en el modelo
- Análisis de product engagement score: cómo crear un índice de engagement compuesto que capture la profundidad y anchura del uso del producto, y cómo usarlo para segmentar usuarios y personalizar las comunicaciones
- Análisis de feature adoption: cómo identificar qué features tienen más impacto en la retención a 90 días (correlación entre uso de feature y retención) para informar las decisiones de roadmap

Tercero, diseña el proceso de experimentación basado en datos:
- Cómo diseñar tests A/B correctamente: qué tamaño de muestra necesito, cuánto tiempo debo correr el test, cómo definir la métrica primaria y las métricas de guardia, y cómo interpretar los resultados con significancia estadística
- Cómo usar IA para identificar automáticamente qué experimentos tienen mayor probabilidad de impactar en las métricas norte
- Cómo documentar y democratizar los aprendizajes de los experimentos para que toda la organización aprenda de ellos

Cuarto, diseña el dashboard de product analytics para el equipo de producto: qué métricas incluir en el daily standup del equipo, qué análisis hacer semanalmente para monitorizar la salud del producto, y cómo preparar el informe mensual de producto para el board con la narrativa correcta sobre el progreso y los riesgos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir sistema de product analytics con IA para reducir churn y mejorar activación en SaaS',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'People analytics con IA para decisiones de RRHH basadas en datos',
                'description'      => 'Implementa un sistema de people analytics con IA que mejore la toma de decisiones en contratación, retención y desarrollo del talento.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en people analytics y data science aplicado a recursos humanos. Quiero construir un sistema de people analytics impulsado por inteligencia artificial que transforme los datos de RRHH en insights accionables para mejorar la contratación, la retención y el desarrollo del talento, siempre con el máximo respeto a la privacidad y la ética en el uso de datos de empleados.

**El contexto de la organización:**
Empresa de 800 empleados en crecimiento, con una tasa de rotación voluntaria del 18% anual, un tiempo medio de cobertura de vacantes de 45 días, una tasa de éxito en contrataciones del 72% (medido por rendimiento a 12 meses) y un coste estimado de reposición de empleado de 6.000€. Los datos de RRHH están dispersos entre el HRIS, el ATS, el sistema de gestión del rendimiento y las encuestas de clima.

**Lo que necesito que diseñes:**

Primero, la arquitectura de datos del sistema de people analytics:
- Cómo integrar las diferentes fuentes de datos de RRHH en un datawarehouse coherente: qué datos de cada sistema son más valiosos para el análisis, cómo resolver el problema de identidad del empleado a través de sistemas y cómo garantizar la calidad y consistencia de los datos
- Las consideraciones éticas y legales del uso de datos de empleados: qué datos se pueden usar para qué análisis bajo el RGPD, qué salvaguardas implementar para evitar sesgos discriminatorios, y cómo comunicar a los empleados qué datos se recogen y para qué

Segundo, diseña los modelos analíticos más importantes para RRHH:
- Modelo de predicción de rotación: qué señales predicen que un empleado va a renunciar en los próximos 90 días (ausencias, cambios en el uso del ATS interno para buscar otros puestos, decline en encuestas de engagement, cambios en la carga de trabajo), cómo construir el modelo y cómo actuar sobre él de forma ética
- Análisis de efectividad del proceso de contratación: qué fuentes de candidatos, qué perfiles de entrevistador y qué criterios de selección predicen mejor el rendimiento y la permanencia del candidato a 12 meses
- Análisis de equidad salarial: cómo detectar brechas salariales injustificadas por género, edad o etnia una vez controladas las variables legítimas como experiencia, rol y rendimiento
- Modelo de identificación de talento de alto potencial: qué combinación de métricas de rendimiento, aprendizaje, liderazgo informal y movilidad interna predice mejor quién puede crecer a roles de mayor responsabilidad

Tercero, diseña el dashboard de people analytics para el CHRO y los managers:
- Qué métricas de fuerza laboral incluir en el informe mensual para el comité de dirección: los indicadores de salud organizacional más importantes y cómo presentarlos con benchmarks de industria
- El panel de riesgo de retención para managers: cómo mostrar la información de forma que sea accionable sin estigmatizar a los empleados identificados como en riesgo
- El análisis de efectividad del training y desarrollo: cómo medir si la inversión en formación está teniendo impacto real en el rendimiento y la retención

Cuarto, dame un marco de implementación ético: cómo comunicar a los empleados el uso de people analytics, cómo crear un comité de supervisión de los modelos, cómo auditar regularmente los modelos para detectar y corregir sesgos, y cómo usar los insights de analytics para el beneficio del empleado además del de la empresa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Implementar people analytics con IA para reducir rotación y mejorar las decisiones de talento',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero predictivo con IA para CFOs y analistas',
                'description'      => 'Construye un sistema de análisis financiero con IA que automatice el análisis de variaciones, detecte anomalías y genere previsiones precisas.',
                'prompt_content'   => <<<'EOT'
Actúa como un director financiero (CFO) con experiencia en la implementación de sistemas de análisis financiero avanzado con inteligencia artificial. Quiero construir un sistema completo de financial analytics con IA que automatice el análisis de cierres mensuales, detecte anomalías en tiempo real, genere previsiones financieras más precisas y libere al equipo financiero de trabajo repetitivo para que pueda enfocarse en análisis de mayor valor.

**El contexto financiero:**
Empresa con ingresos de 45 millones de euros, estructura multi-entidad con 5 líneas de negocio, un equipo financiero de 8 personas, un ciclo de cierre mensual de 10 días hábiles y una previsión de desviación media del 8% entre forecast y real. El board pide más velocidad, más precisión y más insights de los datos financieros.

**Lo que necesito que diseñes:**

Primero, la automatización del análisis de variaciones mensual:
- Cómo usar IA para generar automáticamente el análisis de variaciones (actual vs presupuesto, actual vs forecast, actual vs año anterior) con la narrativa explicativa de las causas de las desviaciones más importantes
- Cómo configurar el sistema para que sepa qué variaciones son significativas (umbral de materialidad) y cuáles son ruido estadístico normal, evitando falsos positivos que consuman tiempo del equipo
- Cómo estructurar el output del análisis de variaciones para que sea directamente presentable al board sin necesidad de re-edición manual

Segundo, diseña el sistema de detección de anomalías financieras:
- Qué tipos de anomalías financieras son más importantes detectar en tiempo real: gastos fuera de norma, ingresos atípicos que pueden indicar errores de registro, ratios financieros que se desvían de los rangos históricos, concentración de riesgo en clientes o proveedores
- Cómo construir el modelo de detección de anomalías: qué algoritmos usar (isolation forest, LSTM para series temporales, reglas estadísticas basadas en percentiles) y cómo calibrar la sensibilidad para equilibrar la tasa de detección y los falsos positivos
- Cómo integrar la detección de anomalías en el proceso de aprobación de facturas y gastos para reducir el fraude y los errores de contabilidad

Tercero, diseña el modelo de previsión financiera con IA:
- Cómo construir un modelo de previsión de ingresos que combine drivers operativos (pipeline de ventas, tasas de conversión, churn) con modelos de series temporales para generar previsiones más precisas que el método tradicional de extrapolación lineal
- Cómo modelar la incertidumbre en las previsiones: cómo presentar rangos de confianza en lugar de puntos únicos y cómo comunicar la incertidumbre al board de forma útil
- Cómo usar IA para hacer el rolling forecast más ágil: que cada semana el sistema actualice automáticamente la previsión del trimestre incorporando los últimos datos operativos y de mercado disponibles

Cuarto, diseña el dashboard de CFO inteligente: cuáles son los cinco indicadores que debe ver el CFO cada mañana para saber el estado de salud financiera de la empresa, cómo estructurar el informe financiero mensual para el board con la IA generando el primer borrador de la narrativa, y qué preguntas en lenguaje natural debe poder hacerle el CFO al sistema de BI financiero sin necesidad de solicitar un análisis al equipo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir sistema de análisis financiero con IA para acelerar cierres y mejorar la precisión del forecast',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal analytics con IA para análisis de contratos y riesgo jurídico',
                'description'      => 'Implementa un sistema de análisis de contratos y gestión de riesgo legal con IA que identifique cláusulas problemáticas y tendencias en litigios.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en legal technology y data analytics aplicado al ejercicio del derecho. Quiero construir un sistema de legal analytics impulsado por inteligencia artificial que ayude a los abogados a analizar contratos más rápido, identificar riesgos jurídicos de forma sistemática, analizar tendencias en jurisprudencia y gestionar mejor el riesgo legal de la organización.

**El contexto del departamento legal:**
Departamento jurídico interno de una empresa con 1.200 contratos activos, un equipo de 6 abogados, un volumen mensual de 40-50 contratos nuevos para revisar, y una presión creciente del board para hacer más con los mismos recursos y reducir el tiempo de revisión de contratos de 3 días a menos de 8 horas.

**Lo que necesito que diseñes:**

Primero, el sistema de análisis de contratos con IA:
- La arquitectura del pipeline de análisis: ingesta de contratos en PDF o Word, extracción y estructuración de cláusulas clave, clasificación por tipo y nivel de riesgo, comparación contra estándares de la empresa y generación de informe de revisión
- Los tipos de cláusulas de mayor riesgo que el sistema debe identificar y marcar automáticamente: limitaciones de responsabilidad, penalizaciones, cambios de control, exclusividades, cláusulas de confidencialidad con scope excesivo, plazos de notificación críticos, jurisdicción y ley aplicable
- Cómo entrenar el sistema para reconocer el lenguaje específico de los contratos de tu sector y aprender de los contratos que los abogados han marcado históricamente como problemáticos

Segundo, diseña el sistema de gestión de riesgo legal basado en datos:
- Cómo crear un mapa de riesgo legal dinámico que muestre en tiempo real la exposición de la empresa por área jurídica (contractual, laboral, regulatorio, litigios), entidad jurídica y nivel de materialidad
- Cómo usar IA para analizar el portfolio de contratos existentes y detectar riesgos sistémicos: proveedores concentrados, términos de renovación automática próximos a vencer, contratos con cláusulas que el departamento legal ya sabe que son problemáticas pero que están en contratos firmados años atrás
- Cómo construir un dashboard de vencimientos y obligaciones que alerte automáticamente de plazos críticos con suficiente antelación para tomar acción

Tercero, diseña el sistema de análisis de jurisprudencia:
- Cómo usar IA para analizar sentencias relevantes y extraer los patrones jurisprudenciales más importantes para tu área de práctica o sector
- Cómo construir un sistema de alertas de cambios normativos y jurisprudenciales que impacten en los contratos o en las políticas de la empresa
- Cómo usar el análisis de litigios históricos propios y del sector para predecir la probabilidad de éxito en disputas en curso y fundamentar mejor las decisiones de litigar vs negociar

Cuarto, diseña el sistema de métricas del departamento legal:
- Qué KPIs debe trackear el general counsel para demostrar el valor del departamento jurídico al board: tiempo de respuesta, coste por materia, tasa de éxito en litigios, contratos revisados vs rechazados, riesgo evitado cuantificado
- Cómo usar IA para generar el informe trimestral del departamento legal con insights sobre tendencias de riesgo y recomendaciones de mejora preventiva
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Implementar legal analytics con IA para acelerar revisión de contratos y gestionar riesgo jurídico',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer analytics con IA para reducir churn y aumentar LTV',
                'description'      => 'Construye un sistema de análisis del comportamiento del cliente con IA que prediga el churn, identifique oportunidades de upsell y personalice la experiencia.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en customer success analytics y data science aplicado a la retención de clientes. Quiero construir un sistema completo de customer analytics impulsado por inteligencia artificial que permita al equipo de customer success anticiparse a los problemas de los clientes, identificar oportunidades de expansión y personalizar las interacciones para maximizar el Customer Lifetime Value de forma sistemática y escalable.

**El contexto del equipo:**
Equipo de customer success de 12 personas gestionando 800 cuentas B2B con un MRR total de 320.000€. La tasa de churn anual es del 22%, el NRR es del 108% (expansión que compensa el churn parcialmente), y el equipo tiene capacidad de interacción proactiva con unos 200 clientes al mes. El problema es que no saben en cuáles de los 800 clientes enfocar la atención proactiva.

**Lo que necesito que diseñes:**

Primero, el modelo de health score del cliente con IA:
- Qué señales de uso del producto, engagement con el equipo de CS, datos del CRM y señales externas incluir en el health score de cada cliente
- Cómo ponderar las señales según su peso predictivo real en el churn: no todas las métricas de uso tienen el mismo valor, y el health score debe reflejar esto empíricamente
- Cómo diseñar el health score para que sea interpretable por el CSM (no solo un número opaco) y que incluya los factores que más contribuyen al score actual de cada cuenta, positivos y negativos
- Cómo hacer que el health score sea dinámico: que cambie en tiempo real cuando cambia el comportamiento del cliente, no solo en el cierre mensual

Segundo, diseña el modelo de predicción de churn:
- Qué features tienen mayor poder predictivo de churn en un SaaS B2B según la evidencia empírica: frecuencia de login de usuarios administradores, breadth of adoption (porcentaje de usuarios activos sobre licencias), profundidad de uso de features core vs periféricas, cambios en el sponsor del proyecto, presencia de alertas de soporte sin resolver
- Cómo construir el modelo de clasificación: qué algoritmos usar, cómo manejar el desbalanceo de clases (muchos más no-churners que churners), cómo validar que el modelo funciona bien en producción y no solo en el dataset de entrenamiento
- Cómo convertir el output del modelo en una lista de acciones priorizada para el equipo de CS: no solo "este cliente va a churnar", sino "estas son las tres acciones más probables que lo retengan"

Tercero, diseña el sistema de identificación de oportunidades de expansión:
- Cómo identificar clientes que están usando el producto de forma intensiva en un área pero que aún no tienen acceso a features de mayor nivel que les aportarían valor claro
- Cómo detectar señales de expansión orgánica: nuevos usuarios añadidos, nuevos casos de uso del producto, aumento en el volumen de datos procesados
- Cómo usar IA para personalizar el pitch de upsell para cada cuenta según su perfil de uso, tamaño y madurez

Cuarto, diseña el dashboard de customer analytics para el VP de Customer Success: las métricas de cartera que deben revisarse semanalmente, el sistema de alertas que prioriza la agenda del equipo, y cómo presentar los resultados del sistema de analytics al board mostrando el impacto en la reducción del churn y el aumento del NRR.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Construir sistema de customer analytics con IA para predecir churn y maximizar el LTV en SaaS B2B',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Business intelligence para freelancers con IA y datos propios',
                'description'      => 'Construye tu propio sistema de BI como freelancer usando IA para analizar tu negocio, optimizar tarifas y predecir ingresos.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de negocio y analista de datos especializado en ayudar a freelancers y profesionales independientes a tomar decisiones más inteligentes sobre su negocio usando sus propios datos y la inteligencia artificial. Quiero construir un sistema de business intelligence personal que me ayude a entender qué está funcionando en mi negocio, qué debo cambiar y cómo crecer de forma sostenible.

**La situación del freelancer que quiere datos:**
Como freelancer, tengo datos valiosos dispersos en distintos lugares: facturas en contabilidad, propuestas enviadas y su tasa de éxito, tiempo dedicado a cada proyecto, conversaciones con clientes en email, leads en el CRM. El problema es que nunca los analizo de forma sistemática y tomo decisiones basadas en intuición. Quiero cambiar eso.

**Lo que necesito que diseñes conmigo:**

Primero, ayúdame a identificar y centralizar mis datos de negocio:
- Qué datos debe registrar un freelancer de forma sistemática para poder hacer análisis útiles: proyectos (cliente, tipo, tarifa, horas, resultado), propuestas (cliente, tipo de proyecto, tarifa propuesta, resultado ganado/perdido, razón de pérdida), tiempo (por proyecto, por tarea, por cliente), ingresos y gastos (por categoría y por cliente)
- Cómo crear un sistema de registro simple y sostenible: qué herramienta usar para centralizar los datos (Airtable, Notion, Google Sheets), cómo automatizar parte del registro con integraciones, y qué rutina semanal de 15 minutos me mantiene los datos al día
- Cómo usar IA para extraer datos de fuentes no estructuradas: analizar el historial de emails para reconstruir el pipeline de proyectos pasados, procesar facturas en PDF para crear el histórico financiero

Segundo, diseña los análisis más importantes para el negocio de un freelancer:
- Análisis de rentabilidad por tipo de proyecto y cliente: cuál es mi tarifa efectiva por hora en cada tipo de trabajo, cuáles son los clientes o tipos de proyecto menos rentables que debería dejar de aceptar
- Análisis del proceso de ventas: cuál es mi tasa de conversión de propuesta a proyecto, cuánto tardo en cerrar una propuesta, en qué tipos de cliente o proyecto tengo mayor tasa de cierre
- Análisis de estacionalidad y previsión de ingresos: cuál es mi patrón de ingresos a lo largo del año, cuándo son los meses más flojos históricamente y cómo prepararme, qué previsión de ingresos puedo hacer para los próximos tres meses basándome en el pipeline actual

Tercero, diseña el sistema de optimización de tarifas con IA:
- Cómo analizar mis datos históricos para identificar si estoy dejando dinero sobre la mesa en determinados tipos de proyecto o cliente
- Cómo usar IA para hacer research de mercado: qué cobran otros freelancers de mi perfil en mi mercado, cómo posicionar mi tarifa según mi especialización y experiencia
- Cómo diseñar una estrategia de subida de tarifas basada en datos: cuándo subirlas, cuánto, a qué clientes primero y cómo comunicarlo sin perder la relación

Cuarto, dame el dashboard personal del freelancer: las cinco métricas que debo revisar cada mes para saber si mi negocio está sano, cómo usar IA para generar automáticamente el informe mensual de mi negocio desde mis datos, y qué decisiones estratégicas debo tomar basándome en cada posible escenario de esos datos (pipeline bajo, margen en caída, muchas horas no facturadas, tasa de conversión cayendo).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un sistema de BI personal con IA para tomar mejores decisiones de negocio como freelancer',
                'vote_score'       => 49,
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
