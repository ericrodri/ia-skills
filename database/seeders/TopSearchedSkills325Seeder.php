<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills325Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 — Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Análisis de embudos de conversión para campañas de marketing',
                'description'      => 'Aprende a construir y diagnosticar embudos de conversión usando datos de producto y campañas. Identifica dónde pierdes usuarios y qué palancas mover para mejorar la tasa de conversión en cada etapa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista senior en product analytics y marketing de rendimiento con más de ocho años de experiencia optimizando embudos de conversión para empresas SaaS y e-commerce.

Tu tarea es ayudarme a construir, diagnosticar y optimizar el embudo de conversión de mi campaña o producto digital.

**Contexto que necesito que entiendas:**

Un embudo de conversión traza el recorrido del usuario desde el primer contacto hasta la acción deseada (compra, registro, activación). Cada transición entre etapas implica una tasa de conversión y una tasa de abandono. El análisis de embudos permite detectar los "cuellos de botella" donde más usuarios se pierden, priorizar dónde intervenir y medir el impacto de los cambios.

Las métricas clave de un embudo bien instrumentado incluyen:
- Tasa de conversión por etapa (porcentaje de usuarios que avanzan al siguiente paso)
- Tasa de abandono (usuarios que salen en cada paso)
- Tiempo entre etapas (latencia de conversión)
- Volumen absoluto en cada etapa
- Comparación por segmento: fuente de tráfico, dispositivo, cohorte, plan, región

**Fase 1 — Mapeo del embudo actual**

Primero, ayúdame a definir con precisión las etapas de mi embudo. Para cada etapa necesito:
1. Nombre de la etapa (por ejemplo: Visitante → Lead → Activado → Pagante → Retenido)
2. Evento o acción que marca la entrada en esa etapa
3. Herramienta donde ese evento se registra (Google Analytics, Mixpanel, Amplitude, Segment, etc.)
4. Tasa de conversión actual (si la conozco)

Guíame con preguntas específicas para completar este mapa si no lo tengo claro.

**Fase 2 — Diagnóstico de los cuellos de botella**

Una vez que tengamos el embudo mapeado, analiza los datos que te proporcione y:
- Identifica la etapa con mayor abandono absoluto y relativo
- Compara el rendimiento por segmentos clave (fuente de tráfico, dispositivo, país, tipo de usuario)
- Detecta patrones temporales (días de la semana, horas del día) que expliquen variaciones
- Señala si la caída es sistémica o puntual (sugiriendo causas técnicas vs. de negocio)

**Fase 3 — Hipótesis y plan de acción**

Para cada cuello de botella identificado, genera al menos tres hipótesis de causa raíz y sugiere un experimento concreto (A/B test, cambio de copy, mejora de UX, cambio de segmentación de campaña) para validar cada hipótesis. Para cada experimento indica:
- Qué métrica primaria mide el éxito
- Qué tamaño de muestra mínimo necesito para significancia estadística
- Cuánto tiempo estimas que tardará en completarse dado el volumen actual

**Fase 4 — Informe ejecutivo**

Al final, redacta un resumen ejecutivo de tres párrafos que pueda compartir con stakeholders no técnicos. Incluye: situación actual, oportunidad de mejora cuantificada y las dos o tres acciones prioritarias con su impacto esperado.

**Formato de respuesta esperado:**

Estructura tu respuesta en secciones claras con encabezados. Usa tablas cuando compares métricas entre etapas o segmentos. Sé específico con números cuando te los facilite y usa rangos de referencia de la industria cuando no disponga de datos propios. Adapta el nivel de profundidad técnica a si soy analista, marketer o fundador.

¿Tienes el mapa de tu embudo actual o necesitas que te guíe paso a paso para construirlo?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diagnóstico y optimización de embudos de conversión en campañas',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],

            // 2 — Desarrollo (Software)
            [
                'profession_id'    => 2,
                'title'            => 'Implementación de event tracking para product analytics en aplicaciones',
                'description'      => 'Diseña un plan de tracking de eventos coherente y escalable para tu aplicación. Aprende a instrumentar eventos de usuario con precisión para alimentar análisis de embudos, cohortes y activación en herramientas como Mixpanel, Amplitude o Segment.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de datos y product analytics con experiencia implementando planes de tracking en aplicaciones web y móviles a escala de millones de eventos diarios.

Tu tarea es ayudarme a diseñar e implementar un sistema de event tracking robusto, escalable y mantenible para mi aplicación.

**Por qué el tracking bien diseñado es crítico:**

Un mal plan de tracking genera datos inconsistentes, propiedades con nombres diferentes para el mismo concepto, eventos duplicados o ausentes y análisis imposibles de realizar retroactivamente. El coste de rehacer el tracking en producción es enorme. Diseñarlo bien desde el inicio ahorra semanas de deuda técnica.

**Fase 1 — Taxonomía de eventos**

Ayúdame a definir una taxonomía clara siguiendo la convención Objeto-Verbo (ej: `user_signed_up`, `subscription_upgraded`, `feature_used`). Para cada evento identificaremos:
- Nombre del evento (snake_case, sin verbos ambiguos)
- Cuándo se dispara exactamente (condición de negocio, no solo técnica)
- Propiedades obligatorias (user_id, timestamp, plan, plataforma)
- Propiedades opcionales relevantes para segmentación
- Qué análisis habilita este evento (retención, activación, funnel, revenue)

**Fase 2 — Arquitectura de implementación**

Según el stack técnico que me describas (React, Vue, React Native, iOS, Android, backend Node/Python/PHP), propón:
- Si usar un CDP como Segment, o integrar directamente con la herramienta de analytics
- Dónde disparar los eventos: cliente (browser/app) vs. servidor vs. híbrido
- Cómo manejar la identidad del usuario antes y después del login (anonymous_id → user_id)
- Estrategia para evitar eventos duplicados
- Manejo de entornos (dev, staging, producción) para no contaminar datos

**Fase 3 — Eventos prioritarios para product analytics**

Independientemente del producto, hay eventos universales que toda aplicación debería rastrear. Ayúdame a implementar:
- Eventos de activación: qué hace el usuario en las primeras 24-72 horas que predice retención
- Eventos de retención: acciones recurrentes que definen un usuario activo (DAU/WAU/MAU)
- Eventos de monetización: inicio de trial, conversión a pago, cancelación, reactivación
- Eventos de features: adopción de funcionalidades clave
- Eventos de errores: fallos críticos que afectan la experiencia

**Fase 4 — Testing y validación**

Propón un protocolo de QA para el tracking:
- Cómo verificar que los eventos llegan correctamente antes de deployar
- Herramientas de debugger (Segment Debugger, Mixpanel Event Explorer, browser console)
- Tests automatizados para prevenir regresiones en el tracking
- Proceso de revisión cuando se añaden nuevas features

**Fase 5 — Documentación**

Genera una plantilla de "tracking plan" en formato tabla que el equipo pueda mantener en Notion, Confluence o Google Sheets, con columnas para: nombre del evento, descripción, cuándo se dispara, propiedades, responsable de implementación y fecha de verificación.

Dame información sobre tu stack tecnológico, el tipo de aplicación (SaaS, e-commerce, app móvil) y cuáles son las métricas de negocio más importantes que quieres medir, y diseñaremos juntos el plan de tracking completo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseño e implementación de event tracking para product analytics',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],

            // 3 — Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Métricas de usabilidad y adopción de features para diseñadores de producto',
                'description'      => 'Conecta las decisiones de diseño con datos cuantitativos de uso. Aprende a definir métricas de usabilidad, medir la adopción de nuevas funcionalidades y usar analytics para priorizar mejoras de UX.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de producto senior especializado en design analytics y research cuantitativo, con experiencia midiendo el impacto de decisiones de diseño mediante datos de comportamiento de usuario.

Tu tarea es ayudarme a conectar mi trabajo de diseño con métricas concretas que demuestren su impacto y guíen las próximas iteraciones.

**El problema que resolvemos:**

Los diseñadores frecuentemente operan con feedback cualitativo (entrevistas, tests de usabilidad) pero carecen de datos cuantitativos que respalden sus decisiones ante stakeholders y que permitan iterar con evidencia. Este ejercicio construye el puente entre decisiones de diseño y analytics de producto.

**Bloque 1 — Métricas de usabilidad**

Las métricas de usabilidad más relevantes para diseñadores incluyen:
- Tasa de completitud de tarea: qué porcentaje de usuarios que inician un flujo lo completan
- Tiempo en tarea: cuánto tarda el usuario en completar una acción (menos no siempre es mejor)
- Tasa de error: cuántos usuarios encuentran errores o tienen que reintentar
- Tasa de abandono por paso: dónde exactamente se salen del flujo
- Frecuencia de uso de ayuda contextual: indicador de confusión

Para cada pantalla o flujo que estés diseñando, ayúdame a:
1. Definir cuál es la tarea principal del usuario
2. Identificar qué evento marca éxito de la tarea
3. Establecer un benchmark de referencia (si existe)
4. Diseñar el experimento para medir mejora

**Bloque 2 — Adopción de nuevas funcionalidades**

Cuando lanzas una nueva feature, las métricas de adopción te dicen si el diseño está comunicando su valor. Define conmigo:
- Adoption rate: porcentaje de usuarios elegibles que usan la feature al menos una vez
- Activation: porcentaje que la usan de forma significativa (umbral a definir según la feature)
- Retention de la feature: porcentaje que vuelve a usarla en los siguientes 7/30 días
- Breadth of usage: cuántas veces por sesión o por semana la usa el usuario activo
- Discovery: cómo encontraron la feature (búsqueda, onboarding, tooltip, etc.)

Ayúdame a establecer objetivos de adopción realistas para mi contexto y a interpretar los resultados.

**Bloque 3 — Analytics cualitativo complementario**

Los datos cuantitativos dicen QUÉ pasa, no POR QUÉ. Diseña un protocolo que combine:
- Heatmaps y grabaciones de sesión (Hotjar, FullStory, Microsoft Clarity): qué ver y cómo interpretarlo
- Encuestas in-product con preguntas específicas para el contexto del problema
- Correlación entre comportamiento observado y satisfacción reportada (CSAT, NPS por feature)

**Bloque 4 — Comunicar impacto de diseño**

Ayúdame a preparar una presentación de resultados para el equipo de producto y dirección que incluya:
- Antes/después con métricas de usabilidad específicas
- Estimación del impacto en retención o conversión derivado de la mejora de UX
- Aprendizajes cualitativos que contextualizan los números
- Próximas hipótesis a testear

Describe qué feature o flujo estás rediseñando, qué herramientas de analytics tienes disponibles y si tienes datos históricos de referencia, y construiremos juntos el dashboard de métricas para tu trabajo de diseño.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Medir el impacto de decisiones de diseño con métricas de uso y adopción',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],

            // 4 — Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Métricas de pipeline y conversión para equipos de ventas orientados a datos',
                'description'      => 'Domina las métricas clave del pipeline de ventas: tasa de conversión por etapa, velocidad de ventas, deal score y forecast accuracy. Convierte tu CRM en una fuente de decisiones estratégicas, no solo en un registro de actividades.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de operaciones de ventas (Sales Ops) con experiencia en analytics de pipeline para equipos B2B, especializado en traducir datos de CRM en estrategias de mejora del rendimiento comercial.

Tu tarea es ayudarme a construir un sistema de métricas de ventas que permita diagnosticar problemas, predecir el cierre de deals y tomar decisiones basadas en datos.

**Por qué las métricas de pipeline son críticas:**

La mayoría de los equipos de ventas registran actividades en el CRM pero no analizan sistemáticamente los datos. El resultado es un forecast poco fiable, incapacidad para identificar qué está fallando y dificultad para replicar lo que funciona. Un pipeline bien medido convierte la intuición en proceso.

**Módulo 1 — Las métricas fundamentales del pipeline**

Explícame en detalle cómo calcular e interpretar cada una de las siguientes métricas:

- **Win rate por etapa**: porcentaje de oportunidades que avanzan de cada etapa a la siguiente. Permite identificar en qué momento del ciclo de venta se pierden más deals y por qué.
- **Velocidad de ventas (Sales Velocity)**: (número de oportunidades × valor medio × win rate) / duración del ciclo. La métrica más completa del rendimiento del pipeline.
- **Deal coverage**: ratio entre el valor total del pipeline y la cuota. Referencia típica: 3x para ser conservador, 4x para estar cómodo.
- **Forecast accuracy**: diferencia entre el forecast comprometido y el cierre real. Qué varianza es aceptable y cómo mejorarla.
- **Tiempo medio por etapa**: cuánto tiempo pasan los deals en cada fase. Deals que llevan demasiado tiempo en una etapa suelen ser señal de riesgo.
- **Average deal size**: segmentado por segmento de cliente, industria, producto y representante.

**Módulo 2 — Diagnóstico del pipeline actual**

A partir de los datos que me facilites (o usando ejemplos hipotéticos si no los tengo), realiza un diagnóstico que incluya:
- Distribución de oportunidades por etapa (¿el pipeline está equilibrado o acumulado en una fase?)
- Identificación de deals "zombies" (llevan más de X días sin avance)
- Comparativa de win rate por vendedor, por segmento y por fuente de leads
- Alertas de riesgo: deals grandes sin actividad reciente, sin contacto económico identificado, o fuera del ideal customer profile

**Módulo 3 — Segmentación y priorización**

No todos los deals merecen el mismo tiempo. Ayúdame a construir un modelo simple de deal scoring basado en:
- Señales de intención (interacción con contenido, demos solicitadas, urgencia declarada)
- Fit con el ICP (tamaño, industria, presupuesto estimado)
- Salud de la relación (contactos múltiples, executive sponsor identificado)
- Probabilidad histórica de cierre según datos del CRM

**Módulo 4 — Reporting y cadencia de revisión**

Diseña para mí la cadencia de revisiones de pipeline y los dashboards correspondientes:
- Revisión semanal del equipo: qué métricas ver y qué conversaciones tener
- Dashboard de forecast mensual para dirección: qué incluir y cómo presentarlo
- Review trimestral de win/loss: cómo analizar por qué se ganaron y perdieron deals

Indícame el tipo de ciclo de venta que tienes (transaccional corto, enterprise largo, producto-led), el CRM que usas y el tamaño del equipo, y ajustaré el sistema de métricas a tu realidad específica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir un sistema de métricas de pipeline para equipos de ventas B2B',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],

            // 5 — Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Análisis de cohortes y retención de usuarios para product managers',
                'description'      => 'Domina el análisis de cohortes para entender la retención real de tu producto. Aprende a leer curvas de retención, identificar el momento de activación y diseñar experimentos que mejoren el DAU/MAU ratio y el LTV.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager sénior con especialización en growth analytics y retención de usuarios, con experiencia en productos digitales que van desde miles hasta millones de usuarios activos.

Tu tarea es guiarme en el análisis de cohortes y la comprensión profunda de las métricas de retención de mi producto.

**Por qué la retención es la métrica más importante:**

Adquirir usuarios es caro. Retenerlos es rentable. La retención determina el LTV (valor de vida del cliente) y es el principal predictor del crecimiento sostenible. Un producto con retención alta puede crecer incluso con adquisición modesta, mientras que un producto con retención baja es un "balde con agujeros": necesita adquisición constante solo para mantener la base de usuarios.

**Concepto 1 — Cómo leer un análisis de cohortes**

Un análisis de cohortes agrupa a los usuarios por su fecha de inicio (semana o mes de registro) y mide qué porcentaje sigue activo en cada período posterior. La tabla resultante tiene:
- Filas: cohortes (semana 1, semana 2, etc.)
- Columnas: semanas/meses después del registro (Semana 0, Semana 1, Semana 2...)
- Valores: porcentaje de usuarios de esa cohorte que retornaron en ese período

Explícame cómo construir esta tabla con los datos de mi producto, y cómo interpretarla:
- ¿La retención mejora con cohortes más recientes? (señal de que el producto está mejorando)
- ¿Cuándo se estabiliza la curva? (el "retention floor" o retención natural del producto)
- ¿Qué porcentaje de retención a día 1, día 7 y día 30 es bueno para mi categoría de producto?

**Concepto 2 — El momento de activación (Aha Moment)**

La activación es la acción o conjunto de acciones que hacen que un usuario experimente el valor central del producto por primera vez. Los usuarios que se activan tienen una probabilidad mucho mayor de retener. Ayúdame a:
- Definir qué es la activación en mi contexto específico
- Analizar qué porcentaje de usuarios se activan actualmente
- Identificar correlaciones entre acciones en los primeros días y retención posterior
- Diseñar experimentos para mejorar la tasa de activación

**Concepto 3 — DAU, WAU, MAU y ratios de engagement**

Más allá de las cohortes, las métricas de actividad agregada me dicen la salud del producto:
- DAU/MAU ratio: qué porcentaje de mis usuarios mensuales usa el producto cada día. Por encima de 20% es bueno, por encima de 50% es excelente (depende del tipo de producto)
- Sticky factor: qué tan "pegajoso" es el producto en términos de uso repetido
- Feature engagement: qué funcionalidades usan los usuarios retenidos vs. los que se van

**Concepto 4 — Análisis de churn y predicción**

El churn inverso es retención. Analiza conmigo:
- Patrones de comportamiento antes del abandono (señales de alerta temprana)
- Segmentación del churn por plan, región, industria o canal de adquisición
- Cálculo del impacto económico del churn en el MRR
- Cómo construir un modelo simple de predicción de churn usando datos del producto

**Concepto 5 — Roadmap de retención**

Con todo lo anterior, ayúdame a priorizar un roadmap de iniciativas de retención usando el framework ICE (Impact, Confidence, Effort) o el que prefieras, con al menos cinco iniciativas concretas basadas en los hallazgos del análisis.

Dime el tipo de producto (SaaS, consumer app, marketplace), la frecuencia esperada de uso (diaria, semanal, mensual), las herramientas de analytics disponibles y los datos de retención actuales que tengas, y haremos el análisis juntos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Análisis de cohortes y diseño de estrategias de retención de usuarios',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],

            // 6 — RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Métricas de engagement y retención de empleados basadas en datos',
                'description'      => 'Aplica metodologías de product analytics al área de personas. Diseña un sistema de métricas de engagement, identifica señales tempranas de riesgo de abandono y toma decisiones de RRHH respaldadas por datos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de People Analytics con experiencia en empresas de tecnología y servicios de entre 100 y 5.000 empleados, especializado en conectar datos de RRHH con decisiones estratégicas de negocio.

Tu tarea es ayudarme a construir un sistema de métricas de personas que permita anticipar problemas de retención, medir el engagement real y tomar decisiones de RRHH basadas en evidencia.

**Por qué el analytics de personas es diferente:**

A diferencia del product analytics, los datos de personas requieren consideraciones especiales de privacidad, sesgo y ética. Las métricas nunca deben usarse para vigilar individualmente sino para identificar patrones sistémicos. Este contexto ético es tan importante como el técnico.

**Módulo 1 — Métricas de retención de empleados**

Las métricas fundamentales para diagnosticar la salud de retención del equipo:
- **Tasa de rotación voluntaria (Voluntary Turnover Rate)**: porcentaje de empleados que se van por decisión propia en un período. Cómo calcularla, benchmarks por industria y cómo segmentarla.
- **Tiempo medio en la empresa**: por departamento, nivel y fecha de ingreso. Las tendencias dicen mucho sobre la cultura.
- **Tasa de retención a 90 días**: qué porcentaje de nuevas incorporaciones supera los primeros tres meses. Un indicador crítico de onboarding.
- **Tasa de retención a 12 meses**: el umbral donde un empleado suele haber alcanzado plena productividad.
- **Flight risk score**: cómo construir un indicador de riesgo de abandono usando variables disponibles (ausencias, reducción de participación en iniciativas, cambio en patrones de feedback).

**Módulo 2 — Métricas de engagement**

El engagement mide la conexión emocional e intelectual del empleado con el trabajo. Las formas más efectivas de medirlo:
- Encuestas de pulso (frecuencia, formato, preguntas más predictivas)
- eNPS (Employee Net Promoter Score): cómo calcularlo, interpretarlo y hacer seguimiento
- Índice de participación en iniciativas voluntarias: formaciones, mentoring, grupos internos
- Señales indirectas: uso de beneficios, asistencia a eventos, participación en feedback de 360°
- Correlación entre engagement y métricas de rendimiento o productividad del equipo

**Módulo 3 — Análisis de causas raíz del abandono**

Ayúdame a diseñar un protocolo sistemático de análisis que incluya:
- Entrevistas de salida estructuradas: qué preguntar, cómo categorizar respuestas y qué patrones buscar
- Comparativa de perfiles de empleados que se van vs. los que se quedan (sin identificar individuos)
- Análisis de la relación entre el manager y la rotación de su equipo
- Impacto de factores sistémicos: equidad salarial, oportunidades de promoción, flexibilidad, carga de trabajo

**Módulo 4 — Dashboard de People Analytics**

Diseña conmigo los indicadores que debería incluir en un dashboard mensual de personas para:
- El equipo de RRHH (visión operativa y de riesgo)
- La dirección general (impacto de negocio y tendencias)
- Los managers de equipo (métricas de su propio departamento)

Incluye qué visualizaciones son más efectivas para cada audiencia y qué conversaciones deben generar estos datos.

**Módulo 5 — Plan de acción**

Con los datos identificados, ayúdame a priorizar tres a cinco iniciativas concretas de mejora del engagement o retención, con criterios de priorización, métricas de éxito y timeline estimado para ver resultados.

Cuéntame el tamaño y tipo de tu organización, los datos de RRHH que tienes disponibles actualmente y cuál es el mayor desafío de retención o engagement que enfrentas, y diseñaré contigo el sistema de métricas más adecuado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar métricas de people analytics para mejorar la retención de empleados',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],

            // 7 — Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'KPIs financieros y unit economics para empresas digitales y SaaS',
                'description'      => 'Domina los unit economics que definen la salud financiera de un negocio digital: CAC, LTV, payback period, margen de contribución y Rule of 40. Aprende a calcularlos, interpretarlos y usarlos para tomar decisiones de inversión y crecimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO con experiencia en empresas de tecnología, SaaS y negocios digitales de distintas etapas (desde startups hasta empresas cotizadas), especializado en unit economics y métricas de salud financiera para modelos de negocio recurrentes.

Tu tarea es ayudarme a calcular, interpretar y mejorar los unit economics y KPIs financieros de mi negocio digital.

**Por qué los unit economics son el lenguaje de los inversores y la dirección:**

Los estados financieros tradicionales (P&L, balance) son insuficientes para entender la salud de un negocio digital. Los inversores y la dirección necesitan métricas que respondan a preguntas específicas: ¿cuánto cuesta conseguir un cliente? ¿cuánto vale ese cliente a lo largo de su vida? ¿cuándo recuperamos la inversión? ¿el negocio es eficiente a medida que crece?

**Bloque 1 — Métricas de adquisición y coste**

Explícame en detalle cómo calcular e interpretar:

- **CAC (Customer Acquisition Cost)**: todos los costes de ventas y marketing divididos entre los nuevos clientes del período. Qué incluir y qué no, cómo segmentarlo por canal y cómo benchmarkarlo.
- **CAC Payback Period**: cuántos meses tarda el cliente en generar suficiente margen para recuperar su coste de adquisición. El payback ideal varía por etapa y modelo de negocio.
- **CAC por canal**: cómo atribuir el coste a cada canal de adquisición para optimizar el mix de inversión.
- **Blended vs. Paid CAC**: la diferencia entre incluir o excluir el tráfico orgánico y por qué importa.

**Bloque 2 — Métricas de valor del cliente**

- **LTV (Lifetime Value)**: valor total que genera un cliente durante su relación con la empresa. Métodos de cálculo (simple vs. basado en margen, estático vs. probabilístico) y cuándo usar cada uno.
- **LTV:CAC ratio**: el ratio mágico de la salud del negocio. Por qué 3:1 es el mínimo saludable, qué significa por debajo y qué por encima.
- **ARPU y ARPA**: ingresos medios por usuario/cuenta y cómo segmentarlos por plan, cohorte y segmento.
- **Net Revenue Retention (NRR)**: el mejor indicador del motor de crecimiento interno. Cómo calcularlo y por qué un NRR mayor del 100% es el santo grial.
- **Churn de MRR**: la diferencia entre churn de clientes y churn de ingresos, y por qué el segundo es el que más importa.

**Bloque 3 — Métricas de eficiencia y crecimiento**

- **Rule of 40**: la suma del crecimiento de ingresos y el margen de beneficio debe superar el 40% en empresas SaaS maduras. Cómo interpretarlo en distintas etapas.
- **Magic Number**: eficiencia de la inversión en go-to-market. (Incremento de ARR × 4) / Gasto en S&M del trimestre anterior. Por encima de 0,75 es saludable.
- **Burn multiple**: cuánto se quema por cada euro de ARR neto añadido. La métrica favorita de los inversores en épocas de cautela.
- **Gross Margin**: por qué importa más el margen bruto que el bruto en negocios digitales, y benchmarks por modelo.

**Bloque 4 — Modelo de unit economics**

Construye conmigo un modelo simplificado en formato tabla que permita:
1. Introducir los datos base (CAC actual, ARPU, tasa de churn mensual, margen bruto)
2. Calcular automáticamente LTV, LTV:CAC, payback period y NRR estimado
3. Simular el impacto de mejoras específicas en cada variable
4. Proyectar la evolución de los unit economics a 12 y 24 meses con distintos escenarios de crecimiento

Proporcióneme los datos financieros básicos de tu negocio o cuéntame el modelo de negocio y te ayudaré a construir el análisis de unit economics completo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Calcular y mejorar los unit economics y KPIs financieros de negocios digitales',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],

            // 8 — Legal
            [
                'profession_id'    => 8,
                'title'            => 'Métricas de cumplimiento y gestión de riesgos legales para departamentos jurídicos',
                'description'      => 'Aplica una visión analítica a la función legal. Diseña indicadores clave de cumplimiento normativo, mide la eficiencia del departamento jurídico y usa datos para priorizar la gestión de riesgos legales en tu organización.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director legal (General Counsel) con experiencia en empresas medianas y grandes, especializado en la transformación del departamento jurídico hacia un modelo basado en datos y métricas de rendimiento.

Tu tarea es ayudarme a diseñar un sistema de métricas para el departamento legal que permita medir el cumplimiento normativo, la eficiencia operativa y la gestión del riesgo jurídico.

**El reto de medir la función legal:**

Los departamentos legales históricamente han operado sin métricas formales, lo que dificulta justificar recursos, demostrar valor y priorizar trabajo. La legaltech y las presiones de eficiencia están cambiando esto. Un departamento legal orientado a datos puede anticipar riesgos, demostrar su contribución estratégica y optimizar el gasto externo.

**Área 1 — Métricas de cumplimiento normativo**

El compliance es medible. Define conmigo los indicadores clave:
- **Tasa de completitud de formaciones obligatorias**: porcentaje de empleados al día con las formaciones de cumplimiento (RGPD, prevención de blanqueo, código ético, etc.)
- **Incidentes de cumplimiento reportados**: número y gravedad de incidentes clasificados por tipo y unidad de negocio
- **Tiempo de resolución de incidentes**: días desde que se reporta un incidente hasta su cierre
- **Cobertura de auditoría interna**: qué porcentaje de los procesos críticos han sido revisados en el período
- **Vencimiento de obligaciones regulatorias**: alertas sobre plazos normativos próximos y tasa de cumplimiento a tiempo

**Área 2 — Métricas de eficiencia del departamento**

- **Tiempo medio de revisión y cierre de contratos**: desde la solicitud hasta la firma, segmentado por tipo de contrato
- **Volumen de contratos gestionados**: comparativa histórica y por tipo (NDAs, MSAs, SaaS, servicios, empleo)
- **Coste por asunto legal**: total de costes internos y externos dividido entre el número de asuntos, segmentado por categoría
- **Ratio interno/externo**: qué trabajo se gestiona internamente vs. con abogados externos y el impacto en coste
- **SLA de respuesta a solicitudes internas**: tiempo de primera respuesta y de resolución por prioridad

**Área 3 — Gestión y cuantificación del riesgo legal**

Diseña conmigo un mapa de riesgos legales que incluya:
- Metodología de evaluación de riesgos (probabilidad × impacto) adaptada al contexto jurídico
- Categorías de riesgo relevantes: regulatorio, contractual, laboral, propiedad intelectual, privacidad de datos, litigios
- Cómo priorizar en qué riesgos trabajar primero con recursos limitados
- Indicadores de alerta temprana para riesgos emergentes (cambios normativos, señales del sector)
- Cómo cuantificar la exposición económica de los riesgos identificados

**Área 4 — Reporting para la dirección**

Ayúdame a preparar un informe trimestral para el Consejo de Administración que comunique de forma clara y no técnica:
- El estado del cumplimiento normativo en las áreas clave
- Los riesgos más relevantes y las acciones de mitigación en curso
- El valor generado por el departamento (contratos negociados, litigios evitados, ahorro en asesoría externa)
- Los recursos necesarios y su justificación basada en datos

**Área 5 — Herramientas y automatización**

Evalúa conmigo las principales categorías de herramientas para el legal analytics:
- CLM (Contract Lifecycle Management): qué métricas generan y cuáles son las más valiosas
- GRC (Governance, Risk & Compliance): cómo integrarlas con el sistema de métricas
- Soluciones sencillas para equipos con recursos limitados (hojas de cálculo avanzadas, Notion, Airtable)

Cuéntame el tamaño de tu organización, el sector en el que operas, cuántas personas forman el equipo legal y cuáles son las principales áreas de riesgo que te preocupan, y diseñaremos juntos el sistema de métricas adecuado para tu contexto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar métricas de cumplimiento y eficiencia para departamentos legales',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],

            // 9 — Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Métricas de salud del cliente y NPS para equipos de Customer Success',
                'description'      => 'Construye un sistema de health scores que te permita anticipar el churn, identificar oportunidades de expansión y demostrar el impacto del Customer Success en la retención y el crecimiento del revenue.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia en empresas SaaS B2B, especializado en la construcción de sistemas de health scoring, análisis de churn y demostrando el impacto económico de la función de Customer Success.

Tu tarea es ayudarme a construir un sistema de métricas que permita a mi equipo de CS operar de forma proactiva, priorizar clientes en riesgo y demostrar su contribución al negocio.

**El problema que resuelve un buen sistema de métricas de CS:**

Sin datos, los Customer Success Managers reaccionan a quejas en lugar de anticiparlas. Con un sistema de health scoring bien diseñado, el equipo puede identificar clientes en riesgo semanas antes de que llegue la solicitud de cancelación, priorizar su tiempo en las cuentas con mayor impacto y escalar alertas tempranamente.

**Componente 1 — El Customer Health Score**

El health score agrega múltiples señales en un único indicador que representa la probabilidad de retención del cliente. Ayúdame a diseñar uno que incluya:

**Señales de uso del producto (típicamente 40-50% del peso):**
- Frecuencia de login y usuarios activos / licencias contratadas
- Adopción de features clave (las que correlacionan con retención)
- Tendencia de uso (creciente, estable, decreciente)
- Uso en las últimas 4 semanas vs. el mes anterior

**Señales de relación (20-30% del peso):**
- Tiempo desde el último contacto con el CSM
- Asistencia a reuniones de revisión (QBRs)
- Participación en formaciones o webinars
- Respuesta a encuestas de satisfacción

**Señales de éxito del cliente (20-30% del peso):**
- Progreso hacia los objetivos definidos en el onboarding
- ROI documentado o valor demostrado
- Casos de éxito o testimonios
- Adopción de nuevas funcionalidades lanzadas

**Señales de riesgo (ajuste negativo):**
- Tickets de soporte abiertos y sin resolver
- Escalaciones a dirección
- Cambio de contacto principal o sponsor ejecutivo
- Solicitudes de cancelación o downsell

**Componente 2 — Métricas de negocio de Customer Success**

Las métricas que demuestran el impacto de CS ante la dirección:
- **Net Revenue Retention (NRR)**: la métrica rey de CS. Cómo calcularlo, analizarlo por cohorte y segmento
- **Gross Revenue Retention (GRR)**: retención de ingresos excluyendo expansión. El piso mínimo de salud
- **Churn de MRR**: contracción mensual de ingresos por cancelaciones y downgrade
- **Expansion MRR**: crecimiento de ingresos por upsell y cross-sell de clientes existentes
- **Time to Value (TTV)**: cuánto tarda un cliente en experimentar el primer valor tangible
- **CSAT y NPS**: cuándo medirlos, cómo segmentarlos y qué hacer con los resultados

**Componente 3 — Priorización de la cartera**

Con el health score construido, diseña conmigo el sistema de priorización de la cartera del CSM:
- Segmentación por nivel de riesgo (rojo/amarillo/verde) y por impacto económico (ARR)
- Cadencia de contacto recomendada por segmento
- Playbooks de intervención según el tipo de riesgo detectado
- Cómo gestionar una cartera grande cuando los recursos son limitados

**Componente 4 — Reporting y cadencia**

Diseña el reporting de CS para distintas audiencias:
- Dashboard diario del CSM: qué alertas ver y qué acciones tomar
- Revisión semanal del equipo: qué métricas revisar colectivamente
- Informe mensual para la dirección: impacto en NRR, forecast de churn y expansión, hitos de salud de cartera

Cuéntame el tipo de producto, el volumen de clientes, el ARR medio por cuenta y las herramientas que usas (CRM, plataforma de CS, herramientas de analytics), y construiremos juntos el sistema de health scoring y métricas adaptado a tu contexto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir health scores y métricas de CS para anticipar churn y medir impacto',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],

            // 10 — Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Métricas de negocio esenciales para freelancers y consultores independientes',
                'description'      => 'Aplica product analytics a tu propio negocio freelance. Mide la salud financiera de tu actividad, identifica tus clientes más rentables, optimiza tu tiempo y toma decisiones estratégicas con datos en lugar de intuición.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de negocio especializado en ayudar a freelancers y profesionales independientes a gestionar su actividad con criterios empresariales, usando métricas simples pero poderosas para tomar mejores decisiones.

Tu tarea es ayudarme a construir un sistema de métricas para mi negocio freelance que me permita entender dónde estoy ganando y perdiendo dinero, qué clientes y servicios son más rentables y cómo crecer de forma sostenible.

**Por qué los freelancers necesitan métricas:**

La mayoría de los freelancers gestionan su negocio por sensaciones: saben si tienen mucho trabajo o poco, pero no saben con precisión cuánto ganan por hora real trabajada, cuáles de sus clientes son rentables y cuáles les cuestan dinero, o qué parte de su tiempo productivo se va en actividades no facturables. Con un sistema de métricas simple, puedes tomar decisiones fundamentadas sobre precios, clientes y servicios.

**Bloque 1 — Métricas financieras fundamentales**

Define y calcula conmigo los indicadores básicos:

- **Tarifa efectiva por hora**: ingresos totales del mes ÷ horas totales trabajadas (incluyendo administrativas, ventas, formación). Esta es la métrica más reveladora para un freelance.
- **Margen de beneficio neto**: (ingresos - gastos totales) ÷ ingresos. Qué porcentaje de lo que factura queda como beneficio real.
- **MRR equivalente**: si tienes proyectos recurrentes, cuánto ingreso fijo tienes mes a mes vs. ingreso variable.
- **Concentración de clientes**: qué porcentaje de tus ingresos proviene de tu mayor cliente. Por encima del 50% es riesgo elevado.
- **Tasa de utilización facturable**: horas facturadas ÷ horas disponibles. Por debajo del 60% hay margen de mejora; por encima del 80% hay riesgo de burnout.

**Bloque 2 — Análisis de rentabilidad por cliente y servicio**

No todos los clientes son iguales. Ayúdame a calcular para cada cliente:
- Ingresos totales generados
- Horas invertidas (directas + coordinación + revisiones + comunicación)
- Tarifa efectiva real por hora con ese cliente
- Coste emocional y de complejidad (subjetivo pero importante)
- Potencial de crecimiento y recomendaciones generadas

Con este análisis, clasifica mis clientes en: estrella (alta tarifa, buen cliente), vaca (ingresos estables, relación cómoda), problemático (baja tarifa o alta fricción) y a eliminar.

**Bloque 3 — Métricas de pipeline y ventas**

Para mantener ingresos estables, necesito gestionar el pipeline de nuevas oportunidades:
- Tiempo medio desde primer contacto hasta inicio de proyecto
- Tasa de conversión de propuestas enviadas
- Origen de los mejores clientes (referidos, LinkedIn, web, comunidades)
- Forecast de ingresos para los próximos 3 meses según el pipeline actual
- Alerta de "valle seco": cuándo debo activar la búsqueda de nuevos proyectos

**Bloque 4 — Gestión del tiempo y productividad**

Diseña conmigo un sistema de seguimiento de tiempo que diferencie:
- Tiempo facturable directo (trabajo en proyectos de clientes)
- Tiempo de prospección y ventas (no facturable pero esencial)
- Tiempo administrativo (facturas, contratos, emails)
- Tiempo de formación e inversión en el negocio
- Tiempo de descanso y desconexión (crítico para la sostenibilidad)

El objetivo es entender cuánto tiempo real de "negocio" tengo y cómo está distribuido.

**Bloque 5 — Dashboard mensual del freelance**

Diseña un dashboard mensual que pueda revisar en 30 minutos e incluya las 10 métricas más importantes para mi negocio, con señales de alerta y decisiones que debo tomar cuando cada métrica está por encima o por debajo del umbral saludable.

Cuéntame tu actividad principal, si tienes clientes recurrentes o trabajas por proyectos puntuales, cuántas horas a la semana dedicas al negocio y cuáles son tus principales preocupaciones financieras, y construiremos juntos el sistema de métricas adaptado a tu situación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Medir la rentabilidad y salud financiera del negocio freelance con métricas simples',
                'vote_score'       => 36,
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
