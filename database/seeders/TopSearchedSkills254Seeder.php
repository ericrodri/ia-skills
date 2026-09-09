<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills254Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing data-driven: de la intuición a las decisiones basadas en datos',
                'description'       => 'Transforma la forma en que tomas decisiones de marketing: cómo construir el stack de datos, interpretar las métricas correctas y crear una cultura donde los datos informan cada campaña, canal y mensaje.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de marketing con especialización en marketing analytics, con experiencia transformando equipos de marketing que tomaban decisiones principalmente por intuición o por lo que hacía la competencia en equipos que utilizan datos para priorizar, optimizar y justificar cada inversión de marketing. Has implementado stacks de datos, diseñado dashboards de marketing y creado la cultura de experimentación que hace que los datos mejoren continuamente el rendimiento de los programas de marketing.

Necesito mejorar la toma de decisiones basada en datos en mi departamento de marketing. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el nivel de madurez actual de datos en marketing: no hay apenas datos, hay datos pero nadie los usa, hay datos pero son difíciles de interpretar, o hay datos pero las decisiones se toman de todas formas por intuición?
2. ¿Cuáles son los principales canales de marketing que usas y qué herramientas de analítica tienes disponibles actualmente?
3. ¿Cuáles son las decisiones de marketing que más frecuentemente se toman sin datos suficientes?
4. ¿Hay un equipo o persona dedicada a los datos de marketing o es una responsabilidad difusa del equipo general?
5. ¿Cuál es el principal objetivo de negocio que el marketing data-driven debería impactar: más leads, mejor conversión, mayor retención, menor CAC u otro?

Con esas respuestas, desarrolla la estrategia de marketing data-driven:

**1. El modelo de datos de marketing: qué medir y por qué**
Antes de construir dashboards o lanzar experimentos, necesitas un modelo claro de qué datos importan y cómo se conectan entre sí. Define el modelo de datos de marketing efectivo: el funnel de marketing con las métricas de cada etapa (awareness, consideración, conversión, retención y advocacy) y la diferencia entre las métricas de actividad que miden lo que el equipo hace y las métricas de resultado que miden el impacto en el negocio, el modelo de atribución que asigna el crédito del cliente a los touchpoints de marketing correctos (la limitación del last-click, las alternativas de atribución multi-touch y data-driven, y cuándo la simplicidad es mejor que la precisión), las métricas de calidad de leads que conectan el volumen de marketing con la realidad del pipeline de ventas (el MQL que nunca se convierte en oportunidad es vanity metric), y los indicadores adelantados que predicen el rendimiento futuro antes de que los resultados rezagados lleguen.

**2. El stack de datos de marketing: las herramientas que hacen posible el análisis**
El marketing data-driven requiere la infraestructura técnica para recoger, conectar y analizar los datos correctamente. Define el stack de datos de marketing por niveles de madurez: el nivel básico que puede implementar cualquier equipo de marketing sin soporte técnico (Google Analytics 4 correctamente configurado, el tracking de conversiones en los canales pagados, el CRM integrado con las herramientas de marketing), el nivel intermedio que permite conectar los datos de distintos sistemas para tener una visión unificada del cliente (la integración del CRM con la plataforma de email marketing y el stack de paid media, el Customer Data Platform ligero, el data warehouse básico), y el nivel avanzado que permite el análisis predictivo y la personalización a escala (el pipeline de datos completo, los modelos de scoring de leads, la experimentación a gran escala). Para cada nivel, especifica qué preguntas de negocio puedes responder que antes no podías.

**3. Los experimentos de marketing: de las hipótesis a las conclusiones accionables**
La experimentación sistemática es lo que convierte los datos en mejora continua del rendimiento de marketing. Define el proceso de experimentación en marketing: la cultura del experimento que requiere que toda inversión nueva en un canal o formato se valide con un test antes de escalar (el presupuesto de exploración que se asigna intencionalmente para probar hipótesis), el diseño de experimentos válidos en marketing que evita los errores metodológicos más comunes (el test de un solo elemento a la vez, el tamaño muestral suficiente para resultados estadísticamente significativos, la duración suficiente para capturar los efectos estacionales), el repositorio de experimentos que documenta lo que ya se ha probado y los resultados para que el equipo no repita los mismos tests, y el proceso de toma de decisiones cuando los resultados del experimento contradicen la intuición del equipo o las preferencias del liderazgo.

**4. Los dashboards de marketing: de los datos a la narrativa que impulsa la acción**
El dashboard que nadie mira no construye una cultura data-driven. Define el diseño de los dashboards de marketing efectivos: el dashboard ejecutivo que muestra en una sola pantalla el rendimiento de marketing en relación con los objetivos de negocio (los KPIs de negocio, no las métricas de canal), el dashboard operativo que el equipo de marketing usa en el día a día para optimizar las campañas en curso (las métricas de canal que permiten detectar anomalías y oportunidades de optimización a tiempo), y la diferencia entre el dashboard que reporta lo que ha pasado y el análisis que explica por qué ha pasado y qué hacer a continuación (el dashboard es el punto de partida del análisis, no el fin). Incluye las mejores prácticas de diseño de dashboards de marketing que los hacen interpretables para audiencias con distinto nivel de familiaridad con los datos.

**5. La cultura data-driven en el equipo de marketing: cambiar la forma de trabajar**
El mayor obstáculo para el marketing data-driven no es técnico sino cultural. Define el proceso de construcción de la cultura data-driven en un equipo de marketing: la resistencia más común al uso de datos en marketing (el miedo a que los datos descarten lo que el equipo ya decidió, la desconfianza en la calidad de los datos, la percepción de que el análisis ralentiza la velocidad de ejecución) y cómo abordarla, el proceso de decisión que integra los datos de forma natural sin convertir cada decisión en un análisis paralizado, la formación del equipo de marketing en interpretación básica de datos que no los convierte en analistas pero sí en usuarios competentes de los datos disponibles, y el liderazgo que modela el comportamiento data-driven haciendo preguntas sobre los datos en las revisiones de campaña en lugar de validar la intuición del equipo.

**6. De los datos al ROI del marketing: hablar el idioma del negocio**
El equipo de marketing que puede conectar sus actividades con resultados de negocio concretos tiene una conversación completamente diferente con el liderazgo sobre presupuesto e inversión. Define el modelo de reporte del ROI de marketing: la construcción del modelo de atribución de ingresos que conecta la inversión en marketing con el pipeline de ventas y el revenue generado (con todas sus limitaciones explícitas), el cálculo del CAC por canal que permite comparar la eficiencia de diferentes inversiones en marketing en términos de coste de adquisición, la métrica LTV:CAC que determina si la escala del marketing tiene sentido financiero, y la presentación de los resultados del marketing al comité de dirección en el lenguaje del ROI en lugar del lenguaje del marketing (impresiones, clics y tasas de apertura) que no resuena con los stakeholders de negocio.

Termina con el plan de transformación data-driven para el equipo de marketing descrito, con los tres cambios de mayor impacto que se podrían implementar en los próximos noventa días sin necesidad de grandes inversiones en tecnología.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Transformar el equipo de marketing para que tome decisiones basadas en datos, mejore el ROI y justifique la inversión ante el liderazgo.',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Analytics engineering: construir los datos que el negocio necesita',
                'description'       => 'Diseña y construye la capa de analytics engineering que convierte los datos raw de los sistemas de producción en modelos limpios, documentados y confiables que el negocio puede usar para tomar decisiones.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un analytics engineer senior con experiencia construyendo la capa de transformación de datos que vive entre los datos raw de los sistemas de producción y los dashboards y modelos que consume el negocio. Has trabajado con dbt, Spark y otras herramientas del stack moderno de datos, y has aprendido que el mayor problema de los datos en las empresas no es recogerlos sino transformarlos, documentarlos y mantenerlos de forma que sean confiables para las personas que los usan para tomar decisiones.

Necesito mejorar la capa de analytics engineering de mi organización. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el stack de datos actual: qué sistemas de origen tiene la empresa, qué data warehouse o data lake usa, y qué herramientas de transformación y visualización están en uso?
2. ¿Cuáles son los principales problemas con los datos actuales: los números difieren según quién los calcula, los modelos tardan demasiado en ejecutarse, la documentación no existe, los datos de producción se usan directamente para analytics u otro?
3. ¿Hay ya un equipo de datos estructurado o el analytics engineering es responsabilidad de los desarrolladores de backend o de los analistas de negocio?
4. ¿Cuáles son las preguntas de negocio más críticas que los datos deberían responder y actualmente no responden de forma confiable?
5. ¿Cuál es el volumen aproximado de datos y la frecuencia con la que el negocio necesita información actualizada?

Con esas respuestas, desarrolla la guía de analytics engineering:

**1. La arquitectura de datos moderna: del sistema de origen al dashboard**
Antes de escribir una sola línea de SQL de transformación, necesitas entender la arquitectura completa de los datos que vas a construir. Define la arquitectura de analytics moderna por capas: la capa de ingesta (los pipelines que mueven los datos de los sistemas de origen al data warehouse, con herramientas como Fivetran, Airbyte o pipelines propios), la capa de staging que crea la representación limpia de los datos raw sin aplicar lógica de negocio todavía (los modelos de staging son la fuente única de verdad de los datos de cada sistema de origen), la capa intermedia que construye los conceptos de negocio reutilizables (los modelos de entidades del negocio como clientes, pedidos o eventos), y la capa de marts que construye los modelos optimizados para los casos de uso de analytics específicos (el mart de marketing, el mart de ventas, el mart de finanzas). Para cada capa, define los principios que guían las decisiones de diseño.

**2. dbt como herramienta central del analytics engineering moderno**
dbt (data build tool) se ha convertido en el estándar de facto del analytics engineering y merece un análisis detallado de cómo usarlo bien. Define las mejores prácticas de dbt: la organización del proyecto en carpetas que refleja la arquitectura de capas (staging, intermediate, marts), el uso de las macros y los packages de dbt que evitan la repetición de lógica común (el package dbt-utils y dbt-date para las transformaciones más frecuentes), los tests de dbt que garantizan la calidad de los datos de forma automatizada (los tests de unicidad, not_null, accepted_values y relationships que detectan problemas de datos antes de que lleguen al dashboard), la documentación integrada en el código que genera un catálogo de datos automáticamente, y el proceso de revisión de código para los modelos de dbt que garantiza que los cambios no rompen modelos downstream.

**3. El modelado dimensional para analytics: los patrones que funcionan**
El modelado de datos para analytics tiene sus propios patrones que son distintos del modelado para sistemas transaccionales. Define los principios del modelado dimensional para analytics: la diferencia entre las tablas de hechos (que contienen los eventos y las métricas del negocio) y las tablas de dimensiones (que contienen el contexto de esos eventos), el modelo estrella y sus ventajas para el rendimiento de las consultas analíticas, el manejo de las dimensiones que cambian con el tiempo (las Slowly Changing Dimensions o SCDs) cuando el negocio necesita saber el estado de una entidad en un momento específico del pasado, y los anti-patrones más comunes en el modelado de datos para analytics (los modelos que mezclan granularidades, las consultas que no usan los modelos pre-agregados y que hacen escaneos completos de tablas de hechos enormes).

**4. La calidad de los datos: tests, alertas y confianza**
El mayor problema de los datos en la mayoría de las organizaciones no es la cantidad sino la calidad y la confiabilidad. Define el sistema de calidad de datos para analytics: los contratos de datos que definen las garantías de calidad de cada modelo (los campos que nunca deben ser null, los valores que deben ser únicos, las relaciones que deben mantenerse, los rangos válidos de las métricas numéricas), las alertas que notifican al equipo cuando la calidad de los datos cae por debajo del umbral aceptable antes de que el negocio lo descubra en un dashboard, la reconciliación periódica entre los datos de analytics y los datos de los sistemas de origen que detecta las discrepancias acumuladas, y el proceso de gestión de incidentes de datos que comunica los problemas de calidad al negocio de forma oportuna y transparente.

**5. La documentación y el catálogo de datos: hacer los datos descubribles**
Los datos que nadie sabe que existen o que no se entienden no se usan. Define el sistema de documentación del analytics engineering: la documentación de los modelos que explica qué son, para qué se usan, de dónde vienen los datos y cuáles son sus limitaciones conocidas (la documentación que vive en el código con dbt y se genera automáticamente como sitio web navegable), el glosario de métricas que define de forma única y sin ambigüedad qué es el revenue, qué es un usuario activo o qué es un cliente recurrente para esta empresa específica (las métricas que tienen definiciones diferentes en diferentes partes de la organización son la principal fuente de los debates sobre cuál es el número correcto), y el lineage de datos que muestra de qué sistemas de origen viene cada modelo y qué modelos downstream dependen de cada modelo.

**6. El analytics engineering como puente entre datos e ingeniería**
El analytics engineer vive en la intersección entre el mundo de los datos y el mundo de la ingeniería de software, y necesita adoptar las mejores prácticas de ambos. Define el proceso de trabajo del analytics engineer en el equipo: la colaboración con los ingenieros de backend para entender los modelos de datos de los sistemas de origen y los cambios que afectan al pipeline de analytics, la colaboración con los analistas de negocio para entender qué preguntas necesitan responder y traducirlas en requisitos de modelado de datos, el proceso de CI/CD para los cambios en los modelos de dbt que garantiza que los cambios se revisan, se testean y se despliegan de forma controlada, y la deuda técnica del data warehouse que se acumula igual que la deuda técnica del software y requiere la misma disciplina de gestión.

Termina con el plan de mejora del analytics engineering para el contexto descrito, con las tres iniciativas de mayor impacto en la confiabilidad de los datos y en la capacidad del negocio para tomar decisiones basadas en ellos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir la capa de transformación de datos que convierte los datos raw en modelos confiables y documentados que el negocio puede usar.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño basado en datos: cuando A/B testing y heatmaps guían el diseño',
                'description'       => 'Integra los datos cuantitativos en el proceso de diseño: cómo usar A/B testing, heatmaps, grabaciones de sesión y analytics de comportamiento para tomar decisiones de diseño con evidencia en lugar de con opinión.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un diseñador UX/UI con especialización en diseño basado en datos, con experiencia integrando el análisis cuantitativo del comportamiento del usuario en el proceso de diseño para validar hipótesis, identificar problemas que la investigación cualitativa no detecta y demostrar el impacto de los cambios de diseño en métricas de negocio concretas. Has usado herramientas como Hotjar, Mixpanel, Amplitude, Optimizely y Google Optimize para informar decisiones de diseño que van más allá de la preferencia estética.

Necesito mejorar la integración de datos cuantitativos en mi proceso de diseño. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tipo de producto digital en el que trabajas y cuáles son las métricas de negocio más importantes para él?
2. ¿Qué herramientas de analytics y de comportamiento de usuario tienes actualmente disponibles?
3. ¿Cuál es el nivel actual de integración de datos en el proceso de diseño: los datos no se consultan, se consultan pero no influyen en las decisiones, o se usan de forma sistemática pero no óptima?
4. ¿Tienes capacidad de hacer A/B testing en el producto o hay limitaciones técnicas u organizativas para ello?
5. ¿Cuáles son las decisiones de diseño que más frecuentemente generan debate interno porque no hay datos que las soporten?

Con esas respuestas, desarrolla la guía de diseño basado en datos:

**1. El toolkit de datos cuantitativos del diseñador: qué herramientas y qué revelan**
Cada herramienta de datos cuantitativos revela un aspecto diferente del comportamiento del usuario. Define el toolkit completo: los heatmaps de clicks que muestran dónde hace clic la gente (y dónde hace clic donde no debería ser clicable, lo que revela confusiones en el diseño), los heatmaps de scroll que muestran hasta dónde llega la atención de los usuarios en páginas largas (con el porcentaje de usuarios que llega a cada punto de la página), las grabaciones de sesión que muestran el comportamiento individual de usuarios reales navegando el producto (con los signos de fricción: los clics de furia, los backtracking, los formularios abandonados a mitad), los funnels de conversión que muestran en qué pasos de un flujo se producen las mayores pérdidas de usuarios, y los eventos de comportamiento que permiten analizar qué acciones realizan los usuarios que retienen vs. los que cancelan.

**2. El A/B testing en el contexto del diseño: experimentar con rigor**
El A/B testing mal diseñado produce resultados que llevan a decisiones peores que no tener datos. Define el proceso de A/B testing correcto para el diseño: la hipótesis de diseño bien formulada que conecta el cambio con el mecanismo que debería producir la mejora (no "probaremos el botón verde" sino "el botón verde generará más clics porque contrasta más con el fondo y el ojo lo detecta antes"), el cálculo del tamaño muestral mínimo que garantiza que el resultado sea estadísticamente significativo antes de lanzar el test, la duración mínima que captura los efectos de los días de la semana y evita declarar un ganador prematuro, los errores de A/B testing que invalidan los resultados (el peeking o mirar los resultados antes de alcanzar el tamaño muestral, los tests con demasiadas variantes simultáneas), y cuándo el A/B testing no es la herramienta correcta (cuando el cambio es radical, cuando el tráfico es insuficiente, cuando el impacto es difuso).

**3. De los datos al diagnóstico de diseño: interpretar correctamente los números**
Los datos cuantitativos muestran qué está pasando pero raramente explican por qué. Define el proceso de diagnóstico de problemas de diseño con datos cuantitativos: la identificación de las anomalías en los datos que señalan problemas de diseño (la tasa de rebote anormalmente alta en una página específica, la tasa de error en un formulario superior al benchmark, el drop-off en un paso inesperado del funnel), el proceso de generación de hipótesis de diseño a partir de las anomalías (usando la investigación cualitativa para complementar el dato cuantitativo: el heatmap dice que nadie llega al CTA de la página; la entrevista con usuarios revela por qué), y la priorización de los problemas de diseño por su impacto potencial en las métricas de negocio (el problema que afecta al 60% de los usuarios en el paso de más volumen del funnel es más urgente que el que afecta al 5% en un flujo secundario).

**4. Los indicadores de UX que van más allá de los datos de negocio**
Las métricas de negocio como la conversión son el resultado final pero no revelan el estado intermedio de la experiencia del usuario. Define los indicadores de UX que complementan las métricas de negocio: el task success rate (el porcentaje de usuarios que completa una tarea específica sin ayuda ni errores), el time on task (el tiempo que tarda el usuario en completar una tarea, con el benchmark de la versión anterior como referencia), el error rate por pantalla o por acción que identifica los elementos de la interfaz que generan más confusión, el Customer Effort Score de UX que mide cuánto esfuerzo percibe el usuario que ha necesitado para completar su objetivo, y la correlación entre los indicadores de UX y las métricas de retención que demuestra que la mejora de la experiencia del usuario se traduce en resultados de negocio.

**5. El diseño iterativo guiado por datos: el ciclo de mejora continua**
El diseño basado en datos no es un proyecto con inicio y fin sino un proceso de mejora continua. Define el ciclo de diseño iterativo guiado por datos: la fase de diagnóstico donde los datos cuantitativos identifican los problemas de mayor impacto (los datos del producto, los resultados de los tests anteriores, los indicadores de UX), la fase de generación de hipótesis donde el diseñador propone soluciones basadas en el diagnóstico y en los principios de UX (con la hipótesis bien formulada sobre el mecanismo de mejora), la fase de prototipado y validación cualitativa que verifica que la hipótesis tiene sentido antes de invertir en el test cuantitativo, la fase de A/B testing o de análisis post-despliegue que valida el impacto del cambio en las métricas objetivo, y la fase de documentación que captura el aprendizaje para que el equipo no repita los mismos experimentos.

**6. Comunicar el valor del diseño con datos: hablar el idioma del negocio**
El diseñador que puede conectar sus decisiones con métricas de negocio tiene una posición muy diferente en la organización. Define cómo comunicar el impacto del diseño con datos: la construcción del caso de negocio para un proyecto de rediseño que traduce la mejora esperada en UX a métricas de negocio (una reducción del 10% en el drop-off del funnel de conversión equivale a X euros de revenue adicional), el reporte post-lanzamiento que muestra el impacto medido del cambio de diseño en las métricas de negocio, y la construcción del portfolio del diseñador data-driven que muestra no solo el trabajo sino el impacto medido de cada proyecto.

Termina con el plan de integración de datos cuantitativos en el proceso de diseño del producto descrito, con las tres primeras acciones que tendrían mayor impacto en la calidad de las decisiones de diseño.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Integrar datos cuantitativos de comportamiento del usuario en el proceso de diseño para tomar decisiones basadas en evidencia.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Sales intelligence: usar datos para identificar y cerrar oportunidades',
                'description'       => 'Construye un sistema de ventas basado en datos: cómo usar la inteligencia de ventas, el scoring de leads, el análisis de pipeline y las señales de intención de compra para que el equipo comercial trabaje de forma más inteligente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de ventas con especialización en sales operations y sales intelligence, con experiencia implementando sistemas que transforman la forma en que los equipos comerciales priorizan su tiempo: los modelos de scoring que identifican los leads con mayor probabilidad de cerrar, las señales de intención de compra que activan la acción del vendedor en el momento correcto, y los análisis de pipeline que detectan las oportunidades en riesgo antes de que se pierdan.

Necesito mejorar la inteligencia de ventas y el uso de datos en mi equipo comercial. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el modelo de ventas: enterprise, SMB, velocidad alta con muchas oportunidades pequeñas o ciclos largos con pocas cuentas grandes?
2. ¿Cuál es el CRM que usa el equipo y qué calidad tienen los datos en él actualmente?
3. ¿Cuáles son los problemas más urgentes que la sales intelligence debería resolver: los vendedores trabajan leads de baja calidad, el pipeline es poco visible, no se detectan las oportunidades en riesgo, o la gestión del tiempo del vendedor es subóptima?
4. ¿Tienes acceso a herramientas de inteligencia de ventas como LinkedIn Sales Navigator, ZoomInfo, intent data providers u otras?
5. ¿Hay ya un perfil de cliente ideal (ICP) definido y un proceso de calificación de oportunidades establecido?

Con esas respuestas, desarrolla la guía de sales intelligence:

**1. El perfil de cliente ideal basado en datos: de la intuición al modelo**
La mayoría de los ICPs se construyen con la intuición del equipo de ventas sobre quiénes son los mejores clientes. La sales intelligence permite construir el ICP con datos reales. Define el proceso de construcción del ICP data-driven: el análisis de la base de clientes actuales para identificar los atributos que comparten los clientes con mayor LTV, menor CAC, mayor velocidad de cierre y menor churn (los firmographics como sector, tamaño de empresa y geografía, y los signals de comportamiento como la tecnología que usan, el crecimiento reciente de la empresa o los cambios en el equipo directivo), el modelo de lookalike que identifica prospectos con los mismos atributos que los mejores clientes actuales, y la actualización periódica del ICP cuando la base de clientes crece y los patrones evolucionan.

**2. El lead scoring: priorizar sin perder el criterio del vendedor**
El lead scoring mal diseñado puede ser peor que no tener scoring porque da una falsa sensación de objetividad. Define el sistema de lead scoring efectivo: la diferenciación entre el scoring demográfico o firmográfico (el prospecto encaja con el ICP) y el scoring de comportamiento o engagement (el prospecto ha mostrado señales de interés activo), la ponderación de los atributos que refleja su correlación real con el cierre (no la importancia que el equipo cree que tienen sino la que los datos históricos demuestran), el umbral de acción que determina cuándo un lead pasa de marketing a ventas con la confianza de que el vendedor va a tener una conversación receptiva, y los límites del scoring automatizado: el modelo estadístico mejora la priorización pero no reemplaza el criterio del vendedor sobre el contexto específico de cada oportunidad.

**3. Las señales de intención de compra: actuar en el momento correcto**
El timing es uno de los factores más determinantes en ventas y la inteligencia de datos permite detectar las señales de que un prospecto está en un momento de consideración activa. Define el sistema de señales de intención: las señales de intención de primera parte (el comportamiento del prospecto en los activos propios: la visita a la página de precios, la descarga de un caso de éxito, la visualización de la demo), las señales de intención de terceras partes (los datos de intent de proveedores que muestran qué empresas están buscando activamente soluciones en tu categoría en toda la web), las señales del contexto de la empresa (los triggers de negocio que aumentan la probabilidad de compra: una ronda de financiación, una nueva contratación en el rol que usa tu producto, la publicación de una oferta de empleo que indica que la empresa está creciendo en el área que resuelves), y el sistema de alertas que lleva esas señales al vendedor en el momento oportuno.

**4. La analítica del pipeline: visibilidad y detección temprana de riesgos**
El pipeline de ventas es el activo más importante del departamento comercial y la mayoría de los equipos tienen una visibilidad limitada de su salud real. Define el sistema de analítica del pipeline: las métricas del pipeline que permiten detectar problemas antes de que impacten en el cierre del trimestre (el weighted pipeline vs. el target de revenue, el número de deals en cada etapa vs. el benchmark histórico, la velocidad de los deals en el pipeline vs. el ciclo de venta típico), los indicadores de deals en riesgo que el CRM puede detectar automáticamente (el deal que lleva semanas sin actividad registrada, el deal cuyo cierre previsto se ha desplazado tres veces, el deal donde solo hay contacto con un stakeholder y no con el economic buyer), y el proceso de pipeline review data-driven que usa estos indicadores para que la conversación se centre en las acciones necesarias para rescatar los deals en riesgo, no en el recuento de lo que ya está cerrado.

**5. La analítica de win/loss: aprender de cada oportunidad**
El análisis de las oportunidades ganadas y perdidas es la fuente de datos más valiosa para mejorar el proceso de ventas y raramente se hace de forma sistemática. Define el proceso de win/loss analysis basado en datos: el registro sistemático de los atributos de las oportunidades ganadas y perdidas que permiten el análisis estadístico (la razón de la pérdida, el competidor que ganó, el stakeholder que fue decisivo, el precio final, el proceso de evaluación que siguió el cliente), el análisis de los patrones en las victorias que revela qué factores correlacionan con el cierre (el perfil del champion interno, el momento del ciclo fiscal del cliente, la combinación de productos que compran juntos), el análisis de las pérdidas que identifica los puntos sistemáticos de debilidad del proceso de ventas o del producto, y la cadencia de revisión que convierte el análisis en cambios concretos en el proceso.

**6. Construir la cultura de datos en el equipo de ventas**
El mayor obstáculo para la sales intelligence no es tecnológico sino cultural: los vendedores que ven los datos como control en lugar de como apoyo para su trabajo. Define el proceso de adopción de la cultura de datos en ventas: la formación que demuestra a los vendedores el valor de los datos para su propio rendimiento (el vendedor que entiende que el lead scoring le ahorra tiempo de prospección en cuentas que no van a comprar adopta el sistema de forma natural), el diseño de las herramientas de sales intelligence para que añadan valor al flujo de trabajo del vendedor en lugar de ser una carga adicional (la alerta que aparece en el CRM en el momento relevante, no el dashboard que el vendedor tiene que consultar proactivamente), y el liderazgo que usa los datos en las conversaciones de coaching como herramienta de desarrollo del vendedor, no como instrumento de control.

Termina con el plan de implementación de sales intelligence para el equipo de ventas descrito, con las tres iniciativas de mayor impacto en la eficiencia del equipo y en la tasa de cierre.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Usar datos de inteligencia de ventas para priorizar el tiempo del equipo comercial y mejorar la tasa de conversión.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Data-driven product: cómo los datos informan (sin dictar) el roadmap',
                'description'       => 'Integra los datos de producto en el proceso de toma de decisiones de roadmap: los frameworks para combinar datos cuantitativos con investigación cualitativa y visión de producto sin caer en la trampa de construir solo lo que los datos de uso muestran.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product manager senior con experiencia usando datos de producto para informar decisiones de roadmap en organizaciones donde la tentación opuesta es real: los equipos que ignoran los datos completamente y construyen por intuición, y los equipos que se paralizan esperando datos perfectos o que construyen solo lo que el análisis de uso muestra sin reservar espacio para la visión del producto. Has encontrado el equilibrio donde los datos son una voz importante en la conversación de priorización, pero no la única.

Necesito mejorar la integración de datos de producto en las decisiones de roadmap. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tipo de producto: B2B SaaS, B2C, marketplace, plataforma de infraestructura u otro?
2. ¿Cuál es el nivel de madurez de los datos de producto actualmente: no hay instrumentación, hay eventos pero no hay análisis sistemático, hay dashboards pero no se usan en las decisiones de roadmap, u otro?
3. ¿Cuáles son las principales decisiones de roadmap que generar debate interno y que podrían beneficiarse de mejores datos?
4. ¿Hay ya un equipo o herramienta de product analytics (Amplitude, Mixpanel, Heap u otro) o el análisis se hace con datos ad hoc?
5. ¿Cuál es el mayor riesgo actual: construir sin saber si la gente lo usará, o tener datos pero no usarlos porque el proceso de decisión no los integra?

Con esas respuestas, desarrolla la guía de product management data-driven:

**1. La instrumentación del producto: los eventos que necesitas antes de poder analizar**
No puedes tomar decisiones de producto basadas en datos si el producto no está instrumentado correctamente. Define el sistema de instrumentación de un producto: la taxonomía de eventos que cubre las acciones de usuario más importantes del producto (con la diferencia entre los eventos de comportamiento de alto nivel que todo producto debería tener y los eventos específicos del flujo de trabajo que dependen de la naturaleza del producto), el diseño del evento que captura el contexto suficiente para ser útil en el análisis (los properties del evento que responden a preguntas como quién hizo qué, cuándo, en qué contexto y con qué resultado), la gobernanza de la instrumentación que garantiza consistencia a lo largo del tiempo (cuando distintos equipos añaden eventos con nombres y estructuras diferentes el analytics se vuelve imposible de mantener), y el proceso de auditoría de instrumentación que detecta los eventos rotos o los flujos sin cobertura.

**2. Las métricas del producto: del North Star a los indicadores de diagnóstico**
El producto que intenta optimizar demasiadas métricas a la vez no optimiza ninguna de forma efectiva. Define el sistema de métricas de producto: la North Star Metric que captura el valor que el producto entrega al usuario de forma que correlacione con el crecimiento del negocio a largo plazo (y la importancia de elegirla bien porque todos los equipos van a alinear su trabajo en torno a ella), el árbol de métricas que descompone la North Star en los inputs que los equipos pueden influenciar directamente (los Input Metrics o leading indicators que el equipo de producto controla, vs. los Output Metrics o lagging indicators que son la consecuencia), y la diferencia entre las métricas de salud del producto que deben mantenerse en el tiempo y las métricas de proyecto que solo importan durante el periodo de desarrollo y lanzamiento de una feature específica.

**3. El análisis de uso para la priorización: lo que la gente usa y lo que la gente necesita**
El análisis de uso del producto es la fuente de datos de mayor impacto para la priorización del roadmap. Define el proceso de análisis de uso: el análisis de adopción de features que identifica qué partes del producto tienen mayor y menor uso relativo al número de usuarios que deberían usarlos (con el diagnóstico de si el bajo uso se debe a que la feature es innecesaria, a que es difícil de descubrir o a que la experiencia de uso es demasiado compleja), el análisis de retención por cohort que muestra si los usuarios que adoptan ciertas features retienen más que los que no las adoptan (el product insight más valioso para priorización), el análisis de los flujos de usuario que muestra cómo navega realmente el usuario por el producto vs. cómo esperaba el equipo de producto que lo haría, y la diferencia entre el análisis de uso de usuarios activos (que puede sesgar hacia las preferencias de los usuarios avanzados) y el análisis que incluye a los usuarios en riesgo de abandono.

**4. El A/B testing en product: cuándo es la herramienta correcta y cuándo no lo es**
El A/B testing es la herramienta más potente para validar hipótesis de producto con rigor estadístico pero también la más mal usada. Define el proceso correcto de A/B testing en producto: las preguntas de producto que el A/B testing puede responder (el impacto de un cambio de UX en la conversión, el efecto de una variación de onboarding en la activación) y las que no puede responder bien (el impacto de un cambio estratégico en el modelo de pricing, el valor de una feature que requiere tiempo para ser valorada por el usuario), la ejecución de A/B tests válidos que respeta la independencia de las variantes y el tamaño muestral, el proceso de análisis de resultados que va más allá de la métrica primaria del test para entender los efectos secundarios, y la cultura de testing que normaliza el resultado nulo como un aprendizaje valioso y no como un fracaso.

**5. Combinar cuantitativo y cualitativo: los datos no reemplazan la investigación con usuarios**
El equipo de producto que solo usa datos cuantitativos construye mejoras incrementales; el que combina datos cuantitativos con investigación cualitativa puede descubrir oportunidades que los datos solos nunca revelarían. Define el framework de integración de datos cuantitativos y cualitativos: el proceso de usar los datos cuantitativos para identificar qué investigar cualitativamente (el análisis de uso que muestra un alto drop-off en un paso específico del flujo, que motiva las entrevistas con usuarios que explican por qué), el proceso inverso de usar la investigación cualitativa para generar hipótesis que se validan cuantitativamente (la entrevista que revela que los usuarios no entienden una feature motiva el análisis de si ese patrón de incomprensión se confirma en los datos de uso), y los límites de cada método para que el equipo de producto sepa cuándo necesita el complemento del otro.

**6. La comunicación del roadmap data-driven a los stakeholders**
El roadmap basado en datos es más fácil de defender ante los stakeholders pero requiere comunicarlo correctamente. Define el proceso de comunicación del roadmap con soporte de datos: la presentación de las decisiones de priorización que muestra la evidencia que las soporta sin convertir la revisión del roadmap en una clase de analytics, el manejo de las peticiones de stakeholders que contradicen los datos (cuando el CEO quiere una feature que los datos indican que nadie usará), y la comunicación de la incertidumbre que es honesta sobre qué sabemos con datos y qué estamos apostando con visión de producto.

Termina con el plan de mejora de la toma de decisiones data-driven para el producto descrito, con las tres iniciativas de mayor impacto en la calidad de las decisiones de roadmap.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Integrar datos de producto en las decisiones de roadmap para priorizar mejor sin perder la visión estratégica del producto.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'People analytics: decisiones de talento basadas en datos',
                'description'       => 'Usa datos para mejorar las decisiones de gestión del talento: el análisis de retención, el modelado predictivo de rotación, la medición del impacto de los programas de RRHH y los dashboards que informan la estrategia de personas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en People Analytics con experiencia implementando sistemas de datos en RRHH que transforman la toma de decisiones de talento: desde el análisis descriptivo que entiende qué está pasando con las personas de la organización, hasta los modelos predictivos que anticipan la rotación antes de que ocurra y permiten actuar de forma preventiva. Has equilibrado el uso de datos con la privacidad y la ética de los empleados, y has construido la confianza de los managers en los datos de personas como herramienta de gestión.

Necesito mejorar el uso de datos en las decisiones de gestión de talento de mi organización. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tamaño de la organización y la madurez actual del equipo de RRHH en el uso de datos: no hay apenas análisis, hay reportes básicos, o hay capacidad analítica pero sin impacto en decisiones?
2. ¿Cuáles son las preguntas de negocio sobre el talento que más frecuentemente quedan sin respuesta por falta de datos: por qué se va la gente, qué predice el alto rendimiento, cuál es el impacto de los programas de formación u otra?
3. ¿Qué sistemas de RRHH hay disponibles (HCM, ATS, LMS, sistema de encuestas de clima) y qué datos producen?
4. ¿Hay restricciones legales o de privacidad específicas que afecten a cómo los datos de empleados pueden usarse en esta jurisdicción?
5. ¿Cuál es la actitud del liderazgo de la organización hacia el uso de datos de empleados: de apoyo, neutral, resistente por razones de privacidad u otro?

Con esas respuestas, desarrolla la guía de People Analytics:

**1. Los fundamentos del People Analytics: ética, privacidad y confianza**
El People Analytics opera con datos sobre personas y requiere un marco ético más cuidadoso que el analytics de negocio. Define los principios éticos del People Analytics: la privacidad por diseño (recoger solo los datos de empleados que son necesarios para responder preguntas de negocio legítimas y que no se pueden responder con datos agregados), la transparencia con los empleados sobre qué datos se recogen y cómo se usan (la percepción de vigilancia destruye la confianza más deprisa que los beneficios del analytics pueden construirla), la distinción entre el análisis agregado que informa las políticas de RRHH y el análisis individual que puede afectar a las decisiones sobre personas específicas (con los controles adicionales que el segundo requiere), y el cumplimiento del GDPR y de las normativas laborales locales que establecen los límites legales del uso de datos de empleados.

**2. El análisis de retención: entender por qué se va la gente antes de que se vaya**
La rotación de talento es el problema de RRHH con mayor impacto financiero y el que el People Analytics puede abordar con más evidencia. Define el proceso de análisis de retención: el análisis descriptivo de la rotación que responde a las preguntas básicas (qué perfil de empleado tiene mayor rotación, en qué etapa del ciclo de vida se produce más frecuentemente, qué departamentos o managers tienen mayor rotación que el promedio), el análisis causal que identifica los factores que correlacionan con la rotación (con la distinción entre correlación y causalidad y los límites del análisis observacional de datos de RRHH), el modelo predictivo de rotación que identifica a los empleados en mayor riesgo de dejar la empresa en los próximos seis meses (con los atributos que predicen el riesgo y las intervenciones que el modelo sugiere para cada segmento), y la validación del modelo con el equipo de negocio que lo va a usar para que las acciones preventivas sean prácticas y no solo estadísticamente correctas.

**3. El análisis del ciclo de vida del empleado: de la atracción al offboarding**
El People Analytics puede mejorar cada etapa del ciclo de vida del empleado con datos. Define el análisis por etapa: en la atracción y selección (el análisis de qué fuentes de candidatos producen los empleados con mayor retención y rendimiento, el tiempo de cobertura de vacante por perfil y las palancas para reducirlo, el análisis de sesgo en el proceso de selección con datos demográficos anonimizados), en el onboarding (la correlación entre la calidad del onboarding y la retención en los primeros doce meses, el tiempo hasta la productividad plena por perfil y departamento), en el desarrollo (el impacto de los programas de formación en la retención y el rendimiento, la correlación entre el acceso a oportunidades de desarrollo y el compromiso del empleado), y en la salida (el análisis de los patrones en las entrevistas de salida para identificar las causas sistémicas de la rotación).

**4. Los dashboards de People Analytics: qué métricas necesita cada audiencia**
El CHRO necesita información diferente al CEO y el manager de línea necesita información diferente a ambos. Define el sistema de dashboards de People Analytics: el dashboard ejecutivo de RRHH que muestra el estado de las métricas estratégicas de talento (la rotación voluntaria y su coste estimado, el eNPS, el tiempo de cobertura de vacantes críticas, la diversidad de la fuerza laboral), el dashboard operativo del equipo de RRHH que permite gestionar el pipeline de candidatos, el progreso de los programas de desarrollo y las alertas tempranas de riesgo de rotación, y el dashboard para managers de negocio que les da visibilidad de las métricas de personas de su equipo sin requerir formación en RRHH para interpretarlas.

**5. La medición del impacto de los programas de RRHH: demostrar el ROI**
El equipo de RRHH que puede demostrar el impacto financiero de sus programas tiene una conversación completamente diferente con el liderazgo sobre inversión. Define el proceso de medición del impacto de los programas de RRHH: el diseño del programa con la medición incluida desde el inicio (la definición de los indicadores de éxito antes de lanzar el programa, no después), los grupos de control que permiten aislar el impacto del programa del efecto de otros factores que cambian al mismo tiempo, la conversión del impacto en métricas de RRHH a impacto financiero (el coste de la rotación evitada, el valor económico de la reducción del tiempo hasta la productividad plena, el impacto en el revenue de la mejora de la satisfacción de los empleados en roles de cara al cliente), y la comunicación del ROI al liderazgo que es honesta sobre la incertidumbre de los cálculos pero rigurosa en la metodología.

**6. Construir la capacidad de People Analytics: equipo, herramientas y cultura**
El People Analytics no es un proyecto sino una capacidad que la organización construye a lo largo del tiempo. Define el plan de construcción de la capacidad de People Analytics: el perfil del primer hire de People Analytics que combina habilidades de datos con comprensión del negocio de RRHH, las herramientas que escalan con la madurez de la organización (desde las hojas de cálculo y los datos del HRIS existente hasta las plataformas especializadas de People Analytics), la construcción de la confianza de los managers en los datos de RRHH que requiere demostrar valor con casos de uso concretos antes de proponer cambios de proceso más amplios, y la cultura de curiosidad basada en datos dentro del equipo de RRHH que hace que el análisis sea una práctica natural y no una actividad especial.

Termina con el plan de implementación de People Analytics para la organización descrita, con los tres casos de uso de mayor impacto en los que empezar y los pasos concretos para construir la capacidad inicial.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Implementar People Analytics para mejorar las decisiones de talento, predecir la rotación y demostrar el ROI de los programas de RRHH.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Financial modeling data-driven: más allá del Excel estático',
                'description'       => 'Construye modelos financieros que se alimentan de datos reales, se actualizan automáticamente y permiten el análisis de escenarios dinámico: la transición del Excel estático al modelo financiero conectado a los datos del negocio.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director financiero o FP&A lead con experiencia en la modernización de los modelos financieros de empresas que dependen de hojas de cálculo manuales que se actualizan con datos copiados desde múltiples fuentes y que contienen errores que nadie detecta hasta que el modelo produce un número absurdo. Has liderado la transición hacia modelos financieros conectados a datos reales, con escenarios dinámicos y con la documentación que permite que alguien distinto al creador del modelo lo use y lo mantenga.

Necesito mejorar la calidad y la automatización de mis modelos financieros. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tipo de modelo financiero más crítico para tu organización: el modelo de presupuesto y forecast, el modelo de valoración, el modelo de unit economics, el modelo de análisis de inversión u otro?
2. ¿Cuáles son los principales problemas con los modelos actuales: la actualización manual consume demasiado tiempo, los errores en los datos de entrada producen outputs incorrectos, el modelo no es flexible para el análisis de escenarios, o nadie más que el creador sabe usarlo?
3. ¿Cuál es el stack tecnológico de datos disponible: solo Excel, Excel conectado a bases de datos, Python, SQL, herramientas de FP&A como Anaplan o Pigment, u otro?
4. ¿Cuáles son las decisiones de negocio más importantes que dependen de estos modelos financieros?
5. ¿Qué tan frecuente es la actualización necesaria del modelo: diaria, semanal, mensual?

Con esas respuestas, desarrolla la guía de financial modeling data-driven:

**1. El diseño del modelo financiero: arquitectura antes de las fórmulas**
El error más común en el modelado financiero es empezar a escribir fórmulas sin diseñar la arquitectura del modelo. Define los principios de diseño de modelos financieros robustos: la separación de los inputs, los cálculos y los outputs en capas distintas (los inputs son los supuestos que cambian según el escenario; los cálculos son la mecánica del modelo que no debería cambiar; los outputs son los estados financieros y los KPIs que el usuario del modelo consume), el principio de una sola fuente de verdad para cada dato (el número que aparece en múltiples partes del modelo debe venir de una única celda o variable para que un cambio se propague automáticamente), la modularidad que permite actualizar una parte del modelo sin romper el resto, y la documentación de los supuestos que hace explícito qué ha asumido el modelo y por qué.

**2. La conexión del modelo con los datos reales: automatizar la actualización**
El modelo financiero que se actualiza manualmente copiando datos de distintas fuentes tiene un coste de mantenimiento alto y un riesgo de error sistémico. Define el proceso de conexión del modelo con los datos: las opciones técnicas para conectar Excel o herramientas de FP&A con las fuentes de datos del negocio (las conexiones nativas de Excel con bases de datos SQL, las APIs de las herramientas de accounting, los conectores de plataformas como Anaplan o Pigment con los sistemas ERP), el diseño del pipeline de datos que mueve los datos de los sistemas de origen al modelo con la transformación mínima necesaria, y el proceso de validación automatizado que detecta datos de entrada incorrectos o fuera de rango antes de que el modelo produzca outputs basados en datos erróneos.

**3. El análisis de escenarios: de los tres casos al modelo dinámico**
El análisis de escenarios del modelo financiero típico tiene tres casos (base, optimista y pesimista) con diferencias arbitrarias entre ellos. Define el análisis de escenarios data-driven: la identificación de los drivers de mayor incertidumbre del modelo (los supuestos que tienen mayor impacto en el output y mayor incertidumbre en su valor futuro), el análisis de sensibilidad que cuantifica el impacto de cada driver en el resultado para priorizar cuáles merecen más atención, el modelo de Monte Carlo que estima la distribución probabilística del resultado cuando múltiples drivers varían simultáneamente (en lugar de los tres escenarios discretos que asumen una correlación perfecta entre todos los drivers), y la presentación de los escenarios que comunica la incertidumbre de forma que ayuda a tomar decisiones en lugar de crear una falsa sensación de precisión.

**4. El modelo de unit economics: los cimientos del modelo de negocio**
El modelo de unit economics es el modelo financiero más importante para una empresa en crecimiento porque determina si el negocio tiene fundamentos sanos antes de escalar. Define el modelo de unit economics data-driven: el cálculo del CAC real que incluye todos los costes de adquisición (no solo el gasto en medios sino también los salarios del equipo de ventas y marketing, las herramientas y los overheads) y que se segmenta por canal y por cohorte de cliente, el cálculo del LTV que usa datos reales de retención y expansión de clientes históricos en lugar de supuestos optimistas sobre el comportamiento futuro, el ratio LTV:CAC que determina la eficiencia del motor de crecimiento y el tiempo de recuperación de la inversión en adquisición (el payback period), y la conexión del modelo de unit economics con el modelo de P&L que muestra cómo la mejora en los unit economics se traduce en mejora de la rentabilidad a escala.

**5. El presupuesto y el forecast dinámico: planificación que se adapta a la realidad**
El presupuesto anual que se desconecta de la realidad del negocio en el primer trimestre tiene un coste de oportunidad enorme. Define el proceso de presupuesto y forecast dinámico: el modelo de presupuesto driver-based que conecta los inputs operativos con los outputs financieros (el número de vendedores y la productividad esperada producen el pipeline y el revenue, en lugar de asumir un crecimiento del X% sobre el año anterior), el rolling forecast que actualiza la proyección del año completo cada mes con los datos reales de los meses transcurridos y los supuestos revisados para los meses restantes, la gestión de las desviaciones presupuestarias que distingue entre las variaciones de volumen (el mercado creció más o menos de lo esperado) y las variaciones de eficiencia (el coste por unidad fue diferente al presupuestado), y el proceso de reforecast cuando las condiciones de negocio cambian significativamente a mitad del año.

**6. La gobernanza del modelo financiero: que alguien más pueda mantenerlo**
El modelo financiero que solo su creador sabe usar es un riesgo operacional. Define el proceso de gobernanza del modelo: la documentación del modelo que explica la estructura, los supuestos y los inputs necesarios para que alguien nuevo pueda usarlo y mantenerlo sin preguntar al creador original, el control de versiones del modelo que mantiene el historial de cambios y permite volver a versiones anteriores cuando un cambio produce resultados inesperados, el proceso de revisión del modelo que detecta errores en las fórmulas y los supuestos antes de que los resultados lleguen al liderazgo, y la formación del equipo financiero en el uso del modelo que reduce la dependencia de una sola persona.

Termina con el plan de modernización del modelo financiero más crítico para la organización descrita, con los tres cambios de mayor impacto en la calidad de los outputs y en la eficiencia del proceso de actualización.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Modernizar los modelos financieros conectándolos a datos reales, automatizando la actualización y mejorando el análisis de escenarios.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal analytics: datos para gestionar riesgo y eficiencia jurídica',
                'description'       => 'Usa datos para mejorar la gestión jurídica: el análisis del portfolio de litigios, la medición de la eficiencia de los proveedores externos, el tracking del cumplimiento normativo y los dashboards que informan la estrategia legal.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un General Counsel o director jurídico con experiencia implementando Legal Operations en departamentos jurídicos donde los datos han transformado la gestión del departamento: desde la justificación del presupuesto ante el CFO con datos de ROI del equipo jurídico, hasta la identificación de los despachos externos más eficientes por tipo de asunto o el análisis del portfolio de litigios para priorizar las estrategias de defensa más efectivas.

Necesito mejorar el uso de datos en la gestión de mi departamento jurídico. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el tamaño del departamento jurídico y el tipo de trabajo predominante: litigios, contratos, cumplimiento normativo, M&A, propiedad intelectual u otro?
2. ¿Cuáles son los principales problemas de gestión que los datos podrían ayudar a resolver: justificar el presupuesto, gestionar mejor los costes externos, priorizar el trabajo del equipo, identificar los riesgos jurídicos sistémicos u otro?
3. ¿Hay ya algún sistema de gestión de asuntos jurídicos (matter management, e-billing) o el tracking se hace con hojas de cálculo?
4. ¿Cuál es el gasto actual en despachos externos y cuánta visibilidad tienes sobre la eficiencia de ese gasto?
5. ¿Cuál es la actitud del liderazgo hacia el Legal Operations: ¿ya hay demanda de datos jurídicos o hay que crear la necesidad?

Con esas respuestas, desarrolla la guía de Legal Analytics:

**1. El portfolio de litigios: gestionar el riesgo con datos**
El portfolio de litigios es el activo de riesgo más visible del departamento jurídico y raramente se gestiona con la misma disciplina analítica que el portfolio de inversiones financieras. Define el sistema de gestión analítica del portfolio de litigios: las métricas que definen el estado del portfolio (el número de asuntos activos por tipo, la provisión financiera agregada y su evolución, la tasa de resolución favorable por tipo de asunto y por despacho externo), el análisis de los drivers de coste por asunto que identifica qué factores predicen los litigios de mayor coste y duración (para alimentar la estrategia de prevención y de selección de despachos), el análisis de la tasa de éxito por estrategia legal en asuntos similares que informa las decisiones de defensa en los nuevos asuntos, y el modelo de provisión que estima el coste esperado del portfolio con rangos de confianza basados en el historial de resolución.

**2. La gestión de los despachos externos con datos: eficiencia y calidad**
El gasto en despachos externos representa típicamente entre el 50 y el 80% del presupuesto total del departamento jurídico y raramente se gestiona con el rigor analítico que merece. Define el sistema de gestión de despachos con datos: el análisis de las billing rates por abogado y despacho que identifica las diferencias de precio para trabajo comparable y las palancas de negociación, el análisis de la composición del equipo facturado que detecta cuando los despachos usan abogados de mayor nivel del necesario para el tipo de trabajo (el senior partner que factura horas en trabajo rutinario que un associate podría hacer), el panel de proveedores basado en datos que selecciona los despachos más adecuados para cada tipo de asunto según su historial de eficiencia y resultados, y el proceso de revisión de facturas con alertas automáticas para los patrones de facturación anómalos.

**3. El tracking del cumplimiento normativo: visibilidad del riesgo regulatorio**
El cumplimiento normativo tiene un portfolio de obligaciones tan complejo en muchas organizaciones que sin un sistema de tracking sistemático los incumplimientos son inevitables. Define el sistema de tracking del cumplimiento: el inventario de obligaciones normativas de la organización con el responsable asignado, la frecuencia de cumplimiento y el estatus actual de cada una, los dashboards de cumplimiento que dan visibilidad al equipo jurídico y al management de las áreas de mayor riesgo regulatorio en tiempo real, el sistema de alertas para los plazos de cumplimiento críticos que evita los incumplimientos por olvido o por falta de coordinación entre equipos, y el análisis de los incidentes de cumplimiento históricos que identifica las áreas de mayor riesgo sistémico para priorizar los esfuerzos preventivos.

**4. La gestión contractual con datos: del contrato firmado al rendimiento de la relación**
Los contratos son el activo jurídico más subutilizado analíticamente. Define el sistema de gestión contractual data-driven: el inventario de contratos con los datos clave extraídos de forma estructurada (las fechas de vencimiento, los términos económicos, los SLAs comprometidos, las cláusulas de penalización y las condiciones de renovación automática), el análisis del ciclo de vida del contrato que identifica los cuellos de botella en el proceso de revisión y aprobación contractual (el tiempo medio por tipo de contrato desde la solicitud hasta la firma, los puntos donde el proceso se atasca), las alertas de vencimiento que evitan las renovaciones involuntarias o las pérdidas de derechos por vencimiento de plazos, y el análisis del rendimiento de los contratos de proveedores que compara los SLAs comprometidos con el rendimiento real.

**5. El ROI del departamento jurídico: justificar el valor con datos**
El departamento jurídico es percibido como un centro de coste en muchas organizaciones porque no ha desarrollado la capacidad de medir y comunicar su valor en términos financieros. Define el modelo de ROI del departamento jurídico: la cuantificación del riesgo evitado (el coste estimado de los litigios que se evitaron por la revisión contractual preventiva, el impacto económico del cumplimiento que evitó una sanción regulatoria), la medición de la eficiencia interna (el coste por hora del equipo interno vs. el coste alternativo de externalizar el mismo trabajo a un despacho, la reducción del tiempo de ciclo de los contratos y su impacto en el time-to-revenue del negocio), y la comunicación del ROI al CFO y al CEO que habla el lenguaje del negocio en lugar del lenguaje jurídico.

**6. Las herramientas de Legal Operations: el stack tecnológico del departamento jurídico moderno**
El departamento jurídico que trabaja con correo electrónico, hojas de cálculo y documentos Word tiene un potencial de mejora enorme con la tecnología de Legal Operations. Define el stack de Legal Operations por nivel de madurez: el nivel básico accesible para cualquier departamento jurídico (el matter management básico para el tracking de asuntos, el e-billing para la revisión y aprobación de facturas de despachos externos, el contract repository con búsqueda full-text), el nivel intermedio que añade automatización (el contract lifecycle management con flujos de aprobación automatizados, los dashboards de cumplimiento normativo, la integración con los sistemas de ERP para el tracking financiero), y el nivel avanzado que usa inteligencia artificial (la revisión automática de contratos para la detección de cláusulas de riesgo, el análisis predictivo del resultado de litigios basado en el historial).

Termina con el plan de implementación de Legal Analytics para el departamento descrito, con los tres casos de uso de mayor impacto en la justificación del valor del departamento y en la gestión del riesgo jurídico.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Implementar Legal Analytics para gestionar el riesgo jurídico con datos, mejorar la eficiencia del departamento y justificar su valor ante el CFO.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Data-driven CS: predecir el churn y actuar antes de que ocurra',
                'description'       => 'Construye un sistema de Customer Success basado en datos: los modelos de health score, las señales de riesgo de churn y los dashboards que permiten al equipo de CS actuar proactivamente en lugar de reaccionar cuando el cliente ya ha decidido cancelar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia transformando equipos de CS reactivos en equipos proactivos mediante el uso de datos: los sistemas de customer health scoring que identifican a los clientes en riesgo semanas antes de que declaren su intención de cancelar, los modelos de propensión a la expansión que identifican a los clientes más listos para una conversación de upsell, y los dashboards que dan al CSM la visión completa del estado de su portfolio de cuentas en lugar de depender de la memoria y del instinto.

Necesito construir o mejorar el sistema de Customer Success basado en datos de mi equipo. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es el modelo de Customer Success: high-touch con CSMs dedicados, tech-touch con automatización, o un modelo escalado con segmentación?
2. ¿Cuáles son las señales de riesgo de churn que el equipo detecta actualmente y cómo las detecta?
3. ¿Qué datos de uso del producto están disponibles y con qué granularidad y frecuencia se actualizan?
4. ¿Hay ya un sistema de customer health scoring o es una evaluación subjetiva del CSM?
5. ¿Cuál es el mayor problema con la gestión actual del riesgo de churn: se detecta demasiado tarde, no hay proceso de intervención sistemático, el equipo está demasiado cargado para actuar en todos los casos u otro?

Con esas respuestas, desarrolla la guía de Customer Success data-driven:

**1. El customer health score: el indicador adelantado del riesgo de churn**
El customer health score es el modelo que sintetiza múltiples señales de comportamiento del cliente en una puntuación que predice su probabilidad de renovar o cancelar. Define el diseño del customer health score: las categorías de señales que lo componen (el uso del producto con las métricas de activación y adopción de features clave, el engagement con el equipo de CS con la frecuencia y la calidad de las interacciones, los resultados del cliente con el progreso hacia los objetivos declarados al inicio, y el sentimiento del cliente con el NPS y el CSAT), el proceso de ponderación de cada señal basado en su correlación histórica con el churn y la expansión (no la ponderación arbitraria sino la que los datos de clientes pasados validan), el modelo de alerta que notifica al CSM cuando el health score cae por debajo del umbral de intervención, y la revisión periódica del modelo para actualizar los pesos cuando los patrones de comportamiento del cliente evolucionan.

**2. Las señales de churn: identificar el riesgo antes de que el cliente lo verbalice**
El cliente que llama para cancelar ya tomó la decisión semanas antes. Define el sistema de detección temprana de señales de churn: las señales de uso del producto que predicen el churn (la caída en el login rate, la reducción del número de usuarios activos en la cuenta, la abandono de las features core del producto, el aumento de los tickets de soporte en las funcionalidades básicas), las señales de comportamiento con el equipo de CS (el cliente que deja de responder a los emails del CSM, la cancelación repetida de las llamadas de revisión, el cambio del interlocutor principal en la cuenta que sugiere una reorganización interna), las señales del contexto de negocio del cliente (la noticia de que la empresa está en dificultades financieras, el cambio de CEO o de dirección que suele traer una revisión de todos los proveedores), y el sistema de scoring de riesgo que combina estas señales en un indicador de riesgo accionable para el CSM.

**3. Los playbooks de intervención: qué hacer cuando el riesgo es alto**
Detectar el riesgo sin tener un proceso de intervención claro produce datos sin impacto. Define el sistema de playbooks de CS basados en datos: el playbook para el cliente con health score en rojo (el CSM que recibe la alerta sabe exactamente qué hacer: qué tipo de outreach hacer primero, qué información preparar sobre el uso del producto del cliente, qué recursos ofrecer y cuándo escalar a su manager), el playbook para el cliente con señales de riesgo específicas (el que ha dejado de usar una feature clave recibe la secuencia de comunicaciones con el contenido más relevante para esa señal específica, no un mensaje genérico), y la escalación al liderazgo de CS o al equipo de renewals cuando la situación requiere una intervención de mayor nivel que el CSM estándar.

**4. El análisis del portfolio de cuentas: la visión que el CSM no puede tener con memoria**
El CSM que gestiona cien cuentas no puede tener una visión actualizada del estado de todas ellas sin un sistema de datos. Define el dashboard del CSM data-driven: la vista del portfolio que muestra todas las cuentas ordenadas por riesgo (las que necesitan atención inmediata arriba, las sanas abajo), los indicadores de cada cuenta que el CSM puede ver de un vistazo sin abrir el CRM de cada una, la integración de las fechas de renovación con el health score que muestra cuáles son las renovaciones en riesgo en el horizonte de los próximos noventa días, y las tareas sugeridas por el sistema basadas en las señales de cada cuenta que guían al CSM en la priorización de su día sin reemplazar su criterio.

**5. El análisis de churn: aprender de cada cancelación para evitar la siguiente**
Cada cliente que cancela es una fuente de información sobre los fallos del producto, del proceso de onboarding o del servicio de CS. Define el proceso de análisis de churn: el registro sistemático de la causa raíz de cada cancelación (con la distinción entre el churn evitable que se debió a un fallo del equipo o del producto y el churn inevitable por razones fuera del control de la empresa), el análisis de los patrones en el churn que identifica los fallos sistémicos recurrentes (el producto que no resuelve un caso de uso específico que una categoría de clientes necesita, el proceso de onboarding que no consigue la adopción en ciertos perfiles de usuario), y la traducción de los insights del análisis de churn en acciones concretas para el equipo de producto, el equipo de onboarding y el equipo de CS.

**6. La expansión basada en datos: identificar a los clientes listos para crecer**
El CS data-driven no solo sirve para prevenir el churn sino también para identificar las oportunidades de expansión antes de que el cliente las solicite. Define el modelo de propensión a la expansión: las señales que indican que un cliente está listo para una conversación de upsell o cross-sell (el uso intensivo de las funcionalidades avanzadas del plan actual, el aumento del número de usuarios que supera el límite del plan, la adopción exitosa del caso de uso inicial que abre la puerta al siguiente caso de uso), el modelo de scoring de expansión que prioriza las cuentas con mayor potencial de crecimiento para el equipo de CS y renewals, y la integración del análisis de expansión en el flujo de trabajo del CSM para que la conversación de expansión se produzca en el momento de máxima receptividad del cliente.

Termina con el plan de implementación del Customer Success data-driven para el equipo descrito, con las tres iniciativas de mayor impacto en la retención de clientes y en la eficiencia del equipo de CS.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Construir un sistema de Customer Success basado en datos que predice el churn con anticipación y activa intervenciones proactivas.',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Analytics del negocio freelance: los datos que mejoran tus decisiones',
                'description'       => 'Construye el sistema de datos de tu negocio freelance: las métricas que realmente importan, los dashboards que te dan visibilidad sobre la salud del negocio y el análisis que informa tus decisiones sobre precios, clientes y especialización.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach de negocio especializado en freelancers y profesionales independientes, con experiencia ayudando a freelancers a pasar de gestionar su negocio por intuición a tomar decisiones informadas por datos: los freelancers que saben exactamente qué tipo de proyecto les genera mayor margen, qué clientes tienen mayor LTV, en qué meses el pipeline se reseca y qué acciones de marketing les traen los proyectos de mayor calidad.

Necesito construir o mejorar el sistema de analytics de mi negocio freelance. Para asesorarte bien, primero pregúntame:

1. ¿Cuál es tu especialidad y cuántos años llevas como freelance?
2. ¿Qué tipo de proyectos haces principalmente: proyectos de corta duración con muchos clientes o relaciones largas con pocos clientes?
3. ¿Llevas actualmente algún tipo de registro sistemático de tus ingresos, proyectos y clientes, o va todo en la cabeza y en el banco?
4. ¿Cuáles son las decisiones de negocio donde más frecuentemente sientes que estás operando sin la información que necesitarías?
5. ¿Cuáles son los mayores retos de tu negocio freelance actualmente: inconsistencia de ingresos, falta de clientes, precios demasiado bajos, proyectos que consumen demasiado tiempo u otro?

Con esas respuestas, desarrolla la guía de analytics del negocio freelance:

**1. Las métricas que importan: el dashboard mínimo del freelance**
El freelance que mide demasiado no mide nada de forma consistente. Define el conjunto mínimo de métricas que todo freelance debería seguir: los ingresos mensuales y su tendencia (no solo el total sino la evolución mes a mes que muestra si el negocio crece, es estable o declina), el margen real por proyecto (los ingresos del proyecto menos las horas invertidas a tu tarifa objetivo y los costes directos, que revela qué proyectos realmente son rentables y cuáles consumen tu tiempo sin retorno suficiente), el pipeline de oportunidades con la probabilidad ponderada (para anticipar los ingresos futuros y detectar los meses de baja carga antes de que lleguen), la tasa de conversión de propuestas (el porcentaje de propuestas que se convierten en proyectos, segmentado por tipo de cliente o por fuente del lead), y la concentración de ingresos por cliente (el riesgo de depender demasiado de un cliente único).

**2. El análisis de rentabilidad: qué proyectos y clientes realmente te pagan bien**
La mayoría de los freelancers cobran lo mismo por proyectos que tienen perfiles de rentabilidad muy diferentes. Define el análisis de rentabilidad del negocio freelance: el cálculo del margen real por proyecto que incluye todas las horas invertidas (el tiempo de gestión, las revisiones adicionales, las llamadas de alineación que no se facturan) además de las horas de producción, el análisis de la tarifa efectiva por hora por tipo de proyecto (que raramente es la tarifa que el freelance cree que cobra cuando se dividen los ingresos entre las horas reales), la comparación de la rentabilidad por tipo de cliente (los clientes corporativos vs. las pymes, los proyectos recurrentes vs. los de una sola vez), y el análisis de los costes ocultos de ciertos tipos de proyectos (el cliente que paga bien pero que genera tanta fricción que el coste emocional y de tiempo de gestión lo convierte en un mal negocio).

**3. La gestión del pipeline: visibilidad del futuro para evitar la montaña rusa**
La inconsistencia de ingresos es el principal problema de la mayoría de los freelancers y raramente se gestiona con datos. Define el sistema de gestión del pipeline freelance: el registro de todas las oportunidades activas con la probabilidad de cierre, el importe estimado y la fecha esperada de inicio (que produce una proyección de ingresos para los próximos tres meses), el análisis del ciclo de ventas por tipo de proyecto (cuánto tiempo pasa desde el primer contacto hasta el cierre y el inicio del proyecto, para saber cuándo necesitas hacer prospección para cubrir la carga de trabajo de dentro de dos meses), las señales de alerta de pipeline bajo que activan las acciones de generación de negocio antes de que el calendario esté vacío, y el análisis de las fuentes de oportunidades que revela cuáles generan más y mejores proyectos para concentrar los esfuerzos de marketing donde más retornan.

**4. El análisis de precios: cuándo y cuánto subir la tarifa**
La decisión de subir la tarifa es una de las más importantes del negocio freelance y raramente se toma con datos. Define el framework de análisis de precios basado en datos: el análisis de la tasa de aceptación de propuestas como indicador de precio (una tasa de aceptación del 100% es una señal clara de que los precios son demasiado bajos; el punto óptimo está típicamente entre el 50 y el 70% para un freelance bien posicionado), el análisis de la elasticidad de precio que prueba el aumento de tarifa en nuevos clientes mientras mantiene la tarifa con los existentes para medir el impacto real en la demanda, el análisis del valor que el cliente obtiene vs. el precio que paga (cuando el freelance puede articular el ROI del proyecto para el cliente, el precio se vuelve una conversación diferente), y el momento del ciclo del negocio en el que subir la tarifa tiene menos riesgo (cuando el pipeline está lleno y hay proyectos esperando).

**5. Los datos de marketing del freelance: qué acciones generan negocio de calidad**
El freelance que no mide de dónde vienen sus mejores proyectos invierte tiempo en marketing que no retorna. Define el sistema de tracking del marketing freelance: el origen de cada proyecto (la referencia de un cliente existente, la búsqueda orgánica, LinkedIn, una comunidad online, un evento del sector, un contenido publicado), la calidad del negocio que genera cada canal de origen (el origen que trae los proyectos con mayor margen y menor fricción es el que merece más inversión de tiempo), el análisis del retorno de las actividades de contenido (el artículo publicado, la charla en un evento, el podcast grabado con el resultado de negocio que generó en los seis meses siguientes), y la experimentación deliberada con nuevos canales de marketing con seguimiento de resultados que permite aprender qué funciona para tu perfil específico.

**6. El dashboard del freelance: la herramienta simple que usarás de verdad**
El sistema de analytics que es demasiado complejo para mantener al día nunca se usa. Define el diseño del dashboard de negocio freelance que es sostenible: el nivel mínimo de herramienta (una hoja de cálculo bien diseñada puede dar toda la visibilidad necesaria sin requerir aprender una herramienta nueva), los datos que se registran en el momento en que el evento ocurre (el proyecto cerrado, la propuesta enviada, las horas invertidas) que son infinitamente más fiables que los que se intentan reconstruir a posteriori, la cadencia de revisión semanal de quince minutos para ver el estado del pipeline y de los proyectos activos, y la revisión mensual de treinta minutos que analiza la rentabilidad del mes y las tendencias del negocio para tomar las decisiones de ajuste necesarias.

Termina con el plan de implementación del sistema de analytics para el negocio freelance descrito, con las tres métricas más urgentes de empezar a medir y el formato más simple para hacerlo de forma sostenible.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Construir el sistema de datos del negocio freelance para tomar mejores decisiones sobre precios, clientes y especialización.',
                'vote_score'        => 42,
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
