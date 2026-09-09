<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills245Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing dashboard: las métricas que importan al CEO',
                'description'       => 'Diseña el dashboard de marketing que el CEO realmente quiere ver: las métricas que conectan la actividad de marketing con el crecimiento del negocio, sin vanity metrics ni ruido de datos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CMO con experiencia reportando al CEO y al Consejo de Administración en empresas de tecnología y consumo. Quiero diseñar el dashboard de marketing definitivo: el que responde a las preguntas que el CEO tiene sobre el retorno de la inversión en marketing y sobre la contribución del marketing al crecimiento del negocio.

**Preguntas iniciales:**
1. ¿Cuál es el modelo de negocio (B2B SaaS, B2C e-commerce, marketplace, servicios profesionales)?
2. ¿Qué preguntas sobre marketing hace el CEO con más frecuencia en las reuniones de dirección?
3. ¿Cuál es el canal de adquisición principal: orgánico, paid, partnerships, eventos o un mix?
4. ¿Tienes acceso a datos de CRM y de producto, o solo a datos de marketing (impresiones, clics, leads)?
5. ¿Cuál es el ciclo de venta: días, semanas o meses?

**EL PROBLEMA DE LOS DASHBOARDS DE MARKETING ACTUALES:**

La mayoría de los dashboards de marketing están llenos de métricas de actividad (impresiones, seguidores, clics, leads generados) que la dirección no puede conectar con el resultado de negocio. El CEO que ve un dashboard de marketing con métricas de engagement no puede responder a la pregunta más importante: ¿este gasto de marketing está generando crecimiento rentable? Ayúdame a construir el dashboard que responde a esta pregunta.

**LAS MÉTRICAS QUE EL CEO NECESITA:**

NIVEL 1: CONTRIBUCIÓN AL REVENUE
El CEO necesita ver la contribución directa del marketing al revenue del negocio. Las métricas de este nivel son: el revenue influenciado por marketing (qué porcentaje del nuevo revenue pasó por un touchpoint de marketing antes de cerrar), el pipeline generado por marketing (en euros y en número de oportunidades) y el ratio Marketing Sourced vs Sales Sourced (qué porcentaje del negocio viene de iniciativas de marketing versus de prospección directa de ventas). Ayúdame a calcular y presentar estas métricas incluso si los datos no son perfectos.

NIVEL 2: EFICIENCIA DE LA ADQUISICIÓN
La segunda pregunta del CEO es si estamos adquiriendo clientes de manera eficiente. Las métricas clave son: el CAC por canal (cuánto cuesta adquirir un cliente a través de cada canal de marketing), el ratio LTV/CAC (la rentabilidad de la adquisición), el payback period (cuántos meses tarda en recuperarse la inversión en adquirir un cliente) y la tendencia de estas métricas en los últimos cuatro trimestres.

NIVEL 3: VELOCIDAD DEL PIPELINE
La tercera dimensión que el CEO necesita ver es la velocidad: cuánto tarda un lead de marketing en convertirse en cliente. Las métricas son: el tiempo medio de conversión lead-to-MQL, MQL-to-SQL y SQL-to-cierre, y la tasa de conversión en cada etapa del funnel. Una caída en la tasa de conversión de MQL a SQL indica un problema de calidad del lead; una caída de SQL a cierre indica un problema de ventas o de competitividad del producto.

**LA ESTRUCTURA VISUAL DEL DASHBOARD:**

DISEÑO PARA LA REUNIÓN DE DIRECCIÓN
El CEO necesita entender el estado de marketing en menos de dos minutos. Ayúdame a diseñar la estructura visual del dashboard para la reunión mensual de dirección: qué va en la primera pantalla (los tres números más importantes del mes), qué profundidad de detalle incluir y cómo usar el color (verde/amarillo/rojo) de manera consistente para comunicar rápidamente el estado de cada métrica.

EL FORMATO DE LOS COMENTARIOS
Los buenos dashboards incluyen comentarios del responsable que contextualizan los datos: por qué una métrica está arriba o abajo, qué decisiones se tomaron basadas en los datos del mes y qué se espera para el próximo mes. Ayúdame a escribir el comentario ejecutivo mensual que acompaña al dashboard y que convierte los datos en narrativa de negocio.

**MÉTRICAS POR CANAL:**

Dame el set de métricas específico para cada canal de marketing que el CEO debería monitorizar: para SEO (tráfico orgánico, posicionamiento de keywords estratégicas, leads orgánicos y su tasa de conversión), para paid media (ROAS, CPL, CPA y su evolución), para email marketing (tasa de apertura, de clic, de conversión y el revenue generado por email) y para eventos y contenido (leads generados, pipeline influenciado y coste por lead).

**FORECASTING Y PLANNING:**

EL PRESUPUESTO DE MARKETING COMO INVERSIÓN
El CEO quiere ver el presupuesto de marketing como una inversión con retorno esperado, no como un coste fijo. Ayúdame a presentar el presupuesto de marketing en formato de inversión: cuánto invertimos por canal, qué retorno esperamos de cada inversión y cómo vamos a medir si el retorno se materializó.

FORECAST DE PIPELINE
El mayor valor que el CMO puede aportar al CEO es la predicción: el pipeline que marketing va a generar en el próximo trimestre basado en los datos de tendencia actuales. Ayúdame a construir el modelo de forecasting de pipeline de marketing que da al CEO visibilidad sobre el próximo trimestre con suficiente antelación para tomar decisiones de inversión.

Dame el diseño completo del marketing dashboard que el CEO quiere ver en la reunión mensual de dirección y que posiciona al CMO como un líder de negocio, no solo como un gestor de campañas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseño del marketing dashboard para dirección: métricas de negocio y ROI',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Engineering metrics: DORA, cycle time y calidad de código',
                'description'       => 'Implementa el sistema de métricas de ingeniería que mide la velocidad, la calidad y la salud técnica del equipo con los frameworks DORA y SPACE y las herramientas que los hacen accionables.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Engineering Manager o VP of Engineering con experiencia implementando sistemas de métricas de ingeniería en equipos de desarrollo de software. Quiero diseñar e implementar el sistema de métricas que da visibilidad real sobre la velocidad, la calidad y la salud del equipo de ingeniería, que sea útil tanto para el equipo como para la dirección.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño del equipo de ingeniería y su estructura (squads, capas, fullstack vs especialistas)?
2. ¿Qué herramientas de desarrollo usáis (GitHub/GitLab, Jira, Datadog, Sentry, etc.)?
3. ¿Cuál es el ciclo de despliegue actual: varias veces al día, una vez a la semana o menos frecuente?
4. ¿El objetivo de las métricas es para visibilidad interna del equipo, para reportar a la dirección o para ambos?
5. ¿Hay algún problema específico que las métricas deben iluminar: velocidad de entrega, calidad del código, deuda técnica o satisfacción del equipo?

**EL FRAMEWORK DORA: LAS CUATRO MÉTRICAS CLAVE:**

Las métricas DORA (DevOps Research and Assessment) son el estándar de la industria para medir el rendimiento de los equipos de ingeniería de software. Se componen de cuatro métricas que miden la velocidad y la estabilidad del sistema de entrega:

DEPLOYMENT FREQUENCY (FRECUENCIA DE DESPLIEGUE)
La frecuencia con la que el equipo despliega código a producción. Los equipos de élite despliegan varias veces al día; los de alto rendimiento despliegan una vez por semana o más; los de rendimiento medio despliegan entre una vez a la semana y una vez al mes; los de bajo rendimiento despliegan menos de una vez al mes. Ayúdame a medir esta métrica, a establecer el objetivo para mi equipo y a diseñar las prácticas (feature flags, trunk-based development, CI/CD maduro) que aumentan la frecuencia de despliegue.

LEAD TIME FOR CHANGES (TIEMPO DE ENTREGA DE CAMBIOS)
El tiempo desde que el código es commiteado hasta que está en producción. Mide la agilidad del sistema de entrega: un lead time corto significa que el equipo puede responder rápidamente a las prioridades cambiantes y a los bugs en producción. Ayúdame a medir el lead time de mi equipo, a identificar los cuellos de botella en el pipeline de entrega y a diseñar las mejoras que lo reducen.

MEAN TIME TO RESTORE (TIEMPO MEDIO DE RECUPERACIÓN)
El tiempo medio que tarda el equipo en restaurar el servicio después de un incidente en producción. Mide la resiliencia del sistema y la madurez de los procesos de respuesta a incidentes. Ayúdame a medir el MTTR de mi equipo, a diseñar los runbooks y las prácticas de on-call que lo reducen y a establecer los objetivos de recuperación por nivel de severidad del incidente.

CHANGE FAILURE RATE (TASA DE FALLOS DE CAMBIOS)
El porcentaje de cambios en producción que generan un fallo que requiere un rollback, un hotfix o un parche. Mide la calidad del proceso de entrega. Los equipos de élite tienen una tasa de fallos del 0-15%; los de alto rendimiento del 16-30%. Ayúdame a medir esta métrica en mi equipo y a diseñar las prácticas de testing, revisión y despliegue que la reducen.

**CYCLE TIME: LA MÉTRICA DE VELOCIDAD DEL EQUIPO:**

El cycle time (tiempo de ciclo) mide el tiempo que tarda una tarea desde que el equipo empieza a trabajar en ella hasta que está disponible para el usuario. Es la métrica más útil para el equipo porque es completamente bajo su control. Ayúdame a medir e interpretar el cycle time:

DESCOMPOSICIÓN DEL CYCLE TIME
El cycle time se descompone en: tiempo de coding (desde que el developer empieza hasta que abre el PR), tiempo de review (desde que abre el PR hasta que se aprueba), tiempo de merge (desde la aprobación hasta el merge) y tiempo de despliegue (desde el merge hasta que está en producción). Cada fase puede ser un cuello de botella diferente. Ayúdame a identificar dónde está el mayor cuello de botella en mi pipeline de entrega.

**MÉTRICAS DE CALIDAD DE CÓDIGO:**

CODE COVERAGE Y DEUDA TÉCNICA
Las métricas de calidad del código que importan: la cobertura de tests (qué porcentaje del código tiene tests automatizados), la tendencia de la deuda técnica (está aumentando o disminuyendo), el número de bugs por sprint (regresiones) y el tiempo de build (un proxy de la complejidad del sistema). Ayúdame a establecer los umbrales de aceptabilidad para cada una de estas métricas y el proceso de revisión regular que las mantiene bajo control.

**EL FRAMEWORK SPACE PARA LA SATISFACCIÓN DEL EQUIPO:**

Las métricas DORA miden el rendimiento del sistema de entrega pero no miden la satisfacción del equipo, que es el predictor más importante del rendimiento a largo plazo. El framework SPACE (Satisfaction, Performance, Activity, Communication, Efficiency) añade la dimensión humana. Ayúdame a implementar una encuesta trimestral del equipo que mide las dimensiones del SPACE y que produce insights accionables.

**EL DASHBOARD DE INGENIERÍA:**

PARA EL EQUIPO
El dashboard que el equipo ve en su día a día: el cycle time de las tareas en curso, el estado del pipeline de CI/CD, la tasa de fallos de la última semana y el número de bugs abiertos por prioridad. Ayúdame a diseñar este dashboard en las herramientas que ya usamos.

PARA LA DIRECCIÓN
El dashboard mensual para el CEO o el CPO: las métricas DORA del mes comparadas con el mes anterior y con los objetivos, el rendimiento del equipo en términos de features entregadas versus planificadas y la salud técnica del sistema (deuda técnica, incidentes, tiempo de build). Ayúdame a diseñar la presentación mensual de las métricas de ingeniería para la dirección que sea comprensible para no-técnicos.

Dame el sistema completo de métricas de ingeniería que da visibilidad real sobre la velocidad, la calidad y la salud del equipo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Implementación de métricas DORA y cycle time para equipos de ingeniería',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Design metrics: cómo medir el impacto del diseño en el negocio',
                'description'       => 'Construye el sistema de métricas que demuestra el impacto del diseño en los resultados del negocio: desde las métricas de experiencia de usuario hasta las métricas de negocio que el diseño influencia.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Head of Design con experiencia construyendo sistemas de métricas de diseño en empresas de tecnología donde el equipo de diseño ha tenido que demostrar su impacto más allá de la percepción subjetiva de la calidad estética. Quiero construir el sistema de métricas de diseño que demuestra objetivamente el valor del diseño para el negocio y que me da los datos para tomar mejores decisiones de diseño.

**Preguntas iniciales:**
1. ¿Cuál es el tipo de producto que diseñas: aplicación web, app móvil, producto de e-commerce, plataforma B2B o hardware?
2. ¿Cuál es el mayor reto para medir el impacto del diseño: falta de acceso a datos de uso, ausencia de A/B testing, ciclos de diseño muy largos o dificultad para aislar el efecto del diseño del efecto de otras variables?
3. ¿Hay métricas de negocio (conversión, retención, NPS) ya establecidas que el equipo de diseño debería estar impactando?
4. ¿El equipo de diseño tiene acceso a herramientas de analytics (Mixpanel, Amplitude, FullStory) o dependéis de otros equipos para los datos?

**EL PROBLEMA DE MEDIR EL DISEÑO:**

El diseño tiene un problema de atribución: cuando una métrica de negocio mejora, ¿cuánto fue el diseño, cuánto fue el producto, cuánto fue el marketing? Esta ambigüedad ha llevado históricamente a que el diseño no midiera nada o que midiera métricas de vanidad (número de screens diseñadas, componentes en el design system). Ayúdame a construir un sistema de métricas que resuelve este problema de atribución de manera práctica.

**EL SISTEMA DE MÉTRICAS DE DISEÑO EN TRES NIVELES:**

NIVEL 1: MÉTRICAS DE EXPERIENCIA DE USUARIO
Las métricas que miden directamente la calidad de la experiencia que el diseño crea:

MÉTRICAS DE USABILIDAD
- Task completion rate: el porcentaje de usuarios que completan una tarea clave sin abandonar
- Time on task: el tiempo que tarda un usuario en completar una tarea (menos tiempo indica mejor usabilidad)
- Error rate: el porcentaje de acciones incorrectas o recuperaciones durante una tarea
- System Usability Scale (SUS): el cuestionario estándar de diez preguntas que produce una puntuación de usabilidad de 0 a 100

MÉTRICAS DE ENGAGEMENT
- Feature adoption rate: el porcentaje de usuarios que usa una feature nueva después del lanzamiento
- Return rate to new features: los usuarios que usan una feature nueva más de una vez
- Navigation patterns: los flujos más frecuentes y los puntos de abandono

NIVEL 2: MÉTRICAS DE IMPACTO EN EL NEGOCIO
Las métricas de negocio que el diseño influencia directamente:

CONVERSIÓN
El diseño impacta directamente en la conversión: la tasa de completado del onboarding, la tasa de conversión de trial a pagado, la tasa de abandono del checkout. Para cada diseño que tocamos, debemos tener una hipótesis sobre qué métrica de conversión impacta y medir antes y después del cambio. Ayúdame a establecer el protocolo de medición pre-post para los cambios de diseño.

RETENCIÓN
La retención a treinta, sesenta y noventa días es uno de los mejores indicadores de la calidad del diseño de un producto. Un producto bien diseñado es más fácil de usar, genera menos fricción y hace que los usuarios vuelvan. Ayúdame a conectar las decisiones de diseño específicas con las métricas de retención.

NIVEL 3: MÉTRICAS DEL EQUIPO DE DISEÑO
Las métricas que miden la eficiencia y la salud del proceso de diseño:

- Ratio de retrabajo: el porcentaje de diseños que son rechazados en la fase de revisión con stakeholders o que requieren revisiones significativas después del handoff a ingeniería
- Cobertura del design system: el porcentaje de la interfaz del producto construida con componentes del design system
- Tiempo de diseño por tipo de tarea: cuánto tarda el equipo en diseñar un flujo de onboarding, un email transaccional, una nueva feature

**A/B TESTING PARA DISEÑO:**

El A/B testing es la herramienta más poderosa para medir el impacto del diseño porque aísla la variable de diseño de todas las demás. Ayúdame a diseñar el programa de A/B testing del equipo de diseño:

PRIORIZACIÓN DE QUÉ TESTEAR
No todos los cambios de diseño merecen un A/B test. Ayúdame a definir los criterios para decidir cuándo hacer un test: el tráfico necesario para que el test sea estadísticamente significativo, el impacto esperado en la métrica de negocio y el coste de implementar las dos variantes.

CÓMO PRESENTAR LOS RESULTADOS DE LOS TESTS
Los resultados de A/B testing de diseño son el argumento más poderoso del equipo para justificar decisiones de diseño y para solicitar recursos. Ayúdame a construir el formato de presentación de resultados de tests de diseño que el CEO y el CPO entienden y que genera confianza en las decisiones del equipo de diseño.

**EL DESIGN KPI DASHBOARD:**

Dame el diseño del dashboard de métricas de diseño que el Head of Design presenta mensualmente a la dirección: qué métricas incluir, cómo visualizarlas y cómo construir la narrativa que conecta los datos de diseño con los resultados del negocio.

Dame el sistema completo de métricas de diseño que transforma al equipo de diseño de un centro de coste percibido en un motor de resultados medibles.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema de métricas de diseño para medir impacto en negocio y experiencia de usuario',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Sales dashboard: pipeline, forecast y KPIs de equipo',
                'description'       => 'Diseña el dashboard de ventas que el equipo comercial usa a diario y que el CEO entiende a primera vista: pipeline, forecast, KPIs individuales y las métricas de proceso que predicen los resultados.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP of Sales o Revenue Operations Manager con experiencia diseñando sistemas de reporting y dashboards comerciales en empresas B2B de tecnología. Quiero diseñar el dashboard de ventas que sea útil simultáneamente para el equipo comercial (qué acciones tomar hoy) y para la dirección (cuál es el estado del negocio y qué podemos esperar este trimestre).

**Preguntas iniciales:**
1. ¿Cuál es el modelo de ventas: inbound, outbound, inside sales, field sales o enterprise?
2. ¿Cuál es el CRM que usa el equipo (Salesforce, HubSpot, Pipedrive, etc.)?
3. ¿Cuál es la longitud media del ciclo de venta y el número de stages del pipeline?
4. ¿Cuántos vendedores tiene el equipo y cómo se estructura (SDRs, AEs, AMs)?
5. ¿Cuál es el mayor problema de reporting actual: datos incorrectos en el CRM, falta de visibilidad sobre el forecast o incapacidad para identificar los problemas de rendimiento individual?

**EL DASHBOARD DE VENTAS EN TRES NIVELES:**

NIVEL 1: EL DASHBOARD DEL VENDEDOR (DIARIO)
Lo que cada vendedor necesita ver cada mañana para saber qué hacer:
- Las oportunidades que requieren acción hoy (según la fecha de próxima actividad)
- El estado de su pipeline contra la cuota del trimestre (cuánto tiene en pipeline, cuánto necesita cerrar y cuánto le falta)
- Las actividades de la semana pasada versus el objetivo de actividad (llamadas, emails, reuniones)
- Las oportunidades que llevan más de X días sin actividad (las que se están enfriando)

Ayúdame a diseñar este dashboard de manera que un vendedor pueda abrirlo cada mañana y saber exactamente en qué tiene que enfocarse. El criterio de éxito es que el vendedor no necesite revisar el CRM manualmente para tener esta visión.

NIVEL 2: EL DASHBOARD DEL MANAGER (SEMANAL)
Lo que el director comercial necesita para la reunión de pipeline del lunes:
- El pipeline del equipo por etapa: cuántas oportunidades y cuánto valor hay en cada etapa del funnel
- El estado de cada vendedor contra su cuota: quién va bien, quién va mal y quién está en el límite
- Las oportunidades de mayor valor del equipo y su estado
- La actividad del equipo: el benchmark de actividad por vendedor versus el objetivo
- El forecast del trimestre: qué se espera cerrar con alta, media y baja probabilidad

NIVEL 3: EL DASHBOARD DEL CEO (MENSUAL)
Lo que el CEO necesita para entender el estado del negocio de ventas:
- Revenue generado en el mes versus objetivo y versus el mes anterior
- Pipeline total y cobertura de pipeline (ratio pipeline/cuota trimestral)
- Tasa de conversión por etapa del pipeline (para identificar los cuellos de botella)
- CAC y ciclo de venta medio del mes
- Forecast del trimestre en curso y del próximo

**FORECAST: LA MÉTRICA MÁS DIFÍCIL:**

EL PROBLEMA DEL FORECAST EN VENTAS
El forecast de ventas es la métrica más crítica y la más difícil de hacer bien. La mayoría de los equipos de ventas tienen forecasts inflados porque los vendedores son optimistas por naturaleza y los managers no cuestionan suficientemente las oportunidades. Ayúdame a diseñar el sistema de forecast que sea preciso dentro del +/- 10% al final del trimestre.

LOS MÉTODOS DE FORECAST
Dame los tres métodos de forecast que implemento en paralelo para triangular la predicción: el forecast bottom-up (la suma de las oportunidades ponderadas por probabilidad de cierre de cada vendedor), el forecast histórico (basado en la tasa de conversión histórica del pipeline en cada etapa) y el forecast de tendencia (basado en la tasa de crecimiento de las últimas semanas de prospección).

LA REUNIÓN DE PIPELINE REVIEW
El forecast solo es tan bueno como la calidad de los datos del CRM. Ayúdame a diseñar la reunión semanal de pipeline review que mantiene los datos del CRM limpios: las preguntas que el manager hace sobre cada oportunidad, los criterios de avance de etapa y el proceso de limpieza de las oportunidades que llevan demasiado tiempo en el pipeline sin avanzar.

**KPIs DE ACTIVIDAD VERSUS KPIs DE RESULTADO:**

Los KPIs de ventas se dividen en dos categorías: los de actividad (las acciones del vendedor que puede controlar directamente: llamadas, emails, reuniones, propuestas) y los de resultado (los outcomes que dependen tanto del vendedor como del cliente: oportunidades creadas, pipeline generado, deals cerrados). Ayúdame a diseñar el set de KPIs de actividad para mi equipo que predice los KPIs de resultado con suficiente antelación para intervenir antes de que el trimestre esté perdido.

**ALERTAS Y EXCEPCIONES:**

Los mejores dashboards de ventas no solo muestran el estado; alertan sobre los problemas antes de que sea demasiado tarde. Dame el sistema de alertas automáticas que el dashboard debería generar: la alerta de oportunidad de alto valor sin actividad en los últimos siete días, la alerta de vendedor cuya tasa de conversión está cayendo y la alerta de pipeline insuficiente para alcanzar la cuota del trimestre.

Dame el diseño completo del sistema de dashboards comerciales que permite al equipo de ventas y a la dirección tomar mejores decisiones con datos más precisos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño del sistema de dashboards comerciales: pipeline, forecast y KPIs de vendedor',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product metrics: North Star, feature adoption y retention',
                'description'       => 'Define y mide las métricas de producto que realmente importan: la North Star Metric que alinea al equipo, las métricas de adopción de features y los indicadores de retención que predicen el crecimiento.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Director de Producto o Chief Product Officer con experiencia definiendo sistemas de métricas de producto en empresas SaaS y de consumo digital. Quiero diseñar el sistema completo de métricas de producto que alinea al equipo alrededor de los objetivos correctos, mide el impacto real de las features que lanzamos y predice el crecimiento futuro del negocio.

**Preguntas iniciales:**
1. ¿Cuál es el modelo de negocio del producto: SaaS B2B por suscripción, B2C freemium, marketplace o e-commerce?
2. ¿Cuál es el mayor reto de métricas actual: falta de datos, demasiados datos sin jerarquía, métricas desconectadas del negocio o incapacidad para atribuir el impacto de las features?
3. ¿El equipo tiene una North Star Metric definida o cada squad mide sus propias métricas sin coordinación?
4. ¿Cuáles son las herramientas de analytics disponibles (Amplitude, Mixpanel, Heap, Segment, BigQuery)?

**LA NORTH STAR METRIC:**

LA DEFINICIÓN DE LA NORTH STAR
La North Star Metric (NSM) es la métrica única que mejor captura el valor que el producto entrega a los usuarios y que tiene correlación directa con el crecimiento del negocio a largo plazo. No es una métrica de vanidad (usuarios registrados, descargas) ni una métrica puramente de negocio (revenue): es la métrica que mide el valor que el usuario obtiene del producto. Ayúdame a definir la North Star Metric para mi producto:

EJEMPLOS DE NORTH STAR METRICS POR TIPO DE PRODUCTO
- Productos de productividad B2B: número de tareas completadas por semana por usuario activo
- Marketplaces: número de transacciones exitosas por semana
- Redes sociales: tiempo de calidad invertido por usuario activo por semana
- SaaS de colaboración: número de proyectos activos por equipo
- E-commerce: número de compras repetidas por usuario en los últimos treinta días

Para mi producto específico, ayúdame a: identificar el momento en que el usuario experimenta el valor central del producto (el "momento aha"), encontrar la métrica que mejor mide la frecuencia de ese momento y validar que hay correlación entre esa métrica y el LTV del cliente.

**LAS INPUT METRICS:**

La North Star Metric es el outcome. Las input metrics son las métricas de los factores que hacen que la NSM suba o baje. Son las métricas que el equipo de producto puede influenciar directamente a través de las features que construye. Ayúdame a definir las cinco a siete input metrics de mi NSM y cómo cada squad o equipo de producto es responsable de una o dos de ellas.

**MÉTRICAS DE FEATURE ADOPTION:**

POR QUÉ LA ADOPCIÓN DE FEATURES IMPORTA
Lanzar una feature que nadie usa es un coste sin beneficio. El equipo de producto necesita medir sistemáticamente la adopción de las features que lanza para aprender qué funciona y qué no, y para priorizar las inversiones futuras. Ayúdame a construir el sistema de medición de feature adoption:

EL FRAMEWORK DE ADOPCIÓN EN CUATRO ETAPAS
- Exposición: ¿cuántos usuarios elegibles vieron la feature?
- Activación: ¿cuántos usuarios la usaron al menos una vez?
- Retención: ¿cuántos usuarios la usan de manera recurrente?
- Expansión: ¿cuántos usuarios se convierten en power users de la feature?

Para cada feature que lanzamos, definimos antes del lanzamiento qué consideramos un éxito en cada etapa y medimos el progreso durante los primeros treinta, sesenta y noventa días.

**MÉTRICAS DE RETENCIÓN:**

LA CURVA DE RETENCIÓN
La curva de retención (el porcentaje de usuarios que sigue usando el producto en el día 1, día 7, día 14, día 30, día 90 y día 180 desde el registro) es la métrica más importante de la salud del producto. Una curva que se estabiliza indica un producto que ha encontrado su público y su propuesta de valor; una curva que sigue cayendo indefinidamente indica que el producto no está creando un hábito. Ayúdame a leer e interpretar la curva de retención de mi producto.

COHORT ANALYSIS
El análisis de cohortes es la herramienta que permite entender cómo están mejorando las métricas de retención a lo largo del tiempo. Si la retención del día 30 de los usuarios que se registraron en enero es mayor que la de los que se registraron en julio del año anterior, el producto ha mejorado. Ayúdame a diseñar el análisis de cohortes que el equipo de producto revisa mensualmente.

**ENGAGEMENT Y STICKINESS:**

DAU/MAU: LA MÉTRICA DE STICKINESS
El ratio DAU/MAU (usuarios activos diarios / usuarios activos mensuales) mide la frecuencia de uso del producto. Un ratio alto indica que los usuarios usan el producto con alta frecuencia; un ratio bajo indica que el producto es ocasional. El objetivo varía por tipo de producto: para un producto de comunicación diaria, un ratio del 50-60% es excelente; para una herramienta de gestión financiera mensual, un ratio del 20-25% puede ser alto. Ayúdame a interpretar y mejorar el DAU/MAU de mi producto.

**EL PRODUCT METRICS DASHBOARD:**

Dame el diseño del dashboard de métricas de producto que el equipo de producto revisa semanalmente (con las métricas de adopción de las features en curso, la NSM de la semana y las alertas de retención) y que el CPO presenta mensualmente a la dirección (con la NSM en tendencia, la retención por cohorte y el impacto de las features lanzadas en el trimestre).

Dame el sistema completo de métricas de producto que alinea al equipo, mide el impacto y predice el crecimiento.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Sistema completo de métricas de producto: North Star, adoption y retention',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'HR analytics: métricas de talento que influyen en decisiones',
                'description'       => 'Construye el sistema de people analytics que convierte los datos de RRHH en insights accionables para la dirección: retención, coste de contratación, rendimiento y ROI de la inversión en talento.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Director de RRHH o People Analytics Lead con experiencia construyendo sistemas de métricas de talento en empresas que han querido convertir los datos de personas en una ventaja competitiva. Quiero diseñar el sistema de HR analytics que da a la dirección visibilidad real sobre la salud del capital humano de la organización y que convierte a RRHH en un socio estratégico basado en datos.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño de la organización y el sector?
2. ¿Qué datos de personas tenéis disponibles: solo los datos del ATS y del payroll, o también datos de rendimiento, engagement y learning?
3. ¿Cuál es el mayor problema de talento que la dirección quiere entender con datos: la rotación, el coste de contratación, el rendimiento o el engagement?
4. ¿El equipo de RRHH tiene capacidad analítica interna o necesita herramientas que hagan el análisis automáticamente?

**LAS MÉTRICAS DE TALENTO QUE LA DIRECCIÓN NECESITA:**

NIVEL 1: MÉTRICAS DE RETENCIÓN
La retención del talento es la métrica de RRHH que más impacto tiene en los costes y en la capacidad organizacional. Las métricas clave son:

TASA DE ROTACIÓN VOLUNTARIA
La tasa de rotación voluntaria (el porcentaje de empleados que dejan la empresa por iniciativa propia) es el indicador de salud del clima laboral y de la competitividad de la propuesta de valor al empleado. Hay que medirla segmentada por nivel de seniority (la rotación de los junior y la de los senior tienen causas y consecuencias muy distintas), por departamento (para identificar los bolsillos de bajo engagement) y por tiempo en la empresa (los primeros dieciocho meses son los de mayor riesgo). Ayúdame a construir el análisis de rotación que identifica los segmentos de mayor riesgo.

TIEMPO DE PERMANENCIA Y PUNTOS DE QUIEBRE
La mayoría de las organizaciones tienen puntos de quiebre en la permanencia donde la probabilidad de salida aumenta significativamente: los seis meses (si el onboarding no funcionó), los dieciocho meses (cuando el empleado hace la primera evaluación de su progresión) y los tres años (cuando llega el momento natural de buscar un nuevo reto). Ayúdame a identificar los puntos de quiebre de mi organización y a diseñar las intervenciones que reducen el riesgo en cada uno.

NIVEL 2: MÉTRICAS DE CONTRATACIÓN
El coste de contratación y la calidad de la contratación son las métricas que demuestran la eficiencia de la función de adquisición de talento:

COSTE POR CONTRATACIÓN
El coste total de contratar a un empleado: la suma del tiempo del equipo de RRHH, el tiempo del hiring manager, las herramientas de ATS y búsqueda, las agencias de selección (si se usan), los eventos de employer branding y el coste de oportunidad de la posición vacante. Para la mayoría de las empresas, este coste es entre uno y tres salarios mensuales del puesto que se cubre. Ayúdame a calcular el coste real de contratación de mi organización y a identificar las oportunidades de reducirlo.

CALIDAD DE LA CONTRATACIÓN (QUALITY OF HIRE)
La calidad de la contratación es la métrica más difícil de calcular pero la más valiosa: mide cuánto contribuye un nuevo empleado al rendimiento de su equipo y de la organización en los primeros dieciocho meses. Los indicadores son: el tiempo hasta la productividad plena, la evaluación de rendimiento al año de la contratación y la retención a los dos años. Ayúdame a construir el índice de quality of hire para mi organización.

NIVEL 3: MÉTRICAS DE RENDIMIENTO Y DESARROLLO
Las métricas que miden la salud del sistema de gestión del rendimiento:
- Distribución del rendimiento del equipo: el porcentaje en cada categoría de evaluación (excepcional, por encima de expectativas, en expectativas, por debajo de expectativas)
- Porcentaje de posiciones cubiertas por promoción interna versus contratación externa
- Cobertura del plan de sucesión para posiciones críticas
- Ratio de empleados con plan de desarrollo activo

NIVEL 4: MÉTRICAS DE ENGAGEMENT
El Employee Net Promoter Score (eNPS) trimestral, la participación en las encuestas de engagement y el análisis de sentimiento en las entrevistas de salida. Ayúdame a diseñar la encuesta de pulso mensual de cinco preguntas que predice el riesgo de rotación antes de que el empleado lo decida.

**EL HR DASHBOARD:**

PARA LA DIRECCIÓN (TRIMESTRAL)
El cuadro de mando de RRHH que el Director de RRHH presenta al Comité de Dirección: las métricas de retención segmentadas por departamento y nivel, el coste de la rotación del trimestre (coste de contratación multiplicado por el número de bajas), el estado de los procesos de selección abiertos y el eNPS comparado con el trimestre anterior.

PARA LOS MANAGERS (MENSUAL)
El dashboard que los managers de cada área reciben mensualmente: el estado de engagement de su equipo, los riesgos de rotación identificados y las acciones recomendadas.

Dame el sistema completo de HR analytics que convierte a RRHH en un socio estratégico del negocio con datos que influyen en las decisiones de la dirección.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Sistema de people analytics y HR dashboard para decisiones estratégicas de talento',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'CFO dashboard: los KPIs financieros esenciales para la dirección',
                'description'       => 'Diseña el dashboard financiero que el CFO presenta al CEO y al Consejo: los KPIs que miden la salud financiera del negocio, la eficiencia operativa y el estado de la caja con la granularidad correcta.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CFO con experiencia presentando el estado financiero del negocio a CEOs, Consejos de Administración e inversores en empresas de tecnología en crecimiento y empresas industriales en transformación. Quiero diseñar el dashboard financiero definitivo: el que da a la dirección y al Consejo la visibilidad exacta que necesitan sobre la salud financiera del negocio, sin exceso de datos ni falta de información crítica.

**Preguntas iniciales:**
1. ¿Cuál es el modelo de negocio: SaaS por suscripción, servicios profesionales, e-commerce, manufactura u otro?
2. ¿A quién va dirigido el dashboard: al CEO y equipo directivo, al Consejo de Administración o a los inversores?
3. ¿Cuál es la cadencia de reporting: mensual, trimestral o ambas?
4. ¿Cuál es el mayor problema con el reporting financiero actual: la velocidad de cierre (los datos llegan tarde), la granularidad (demasiado o poco detalle) o la presentación (los datos están pero no comunican)?
5. ¿La empresa está en modo crecimiento (quema de caja controlada) o en modo rentabilidad (eficiencia y márgenes)?

**LOS KPIS FINANCIEROS ESENCIALES:**

NIVEL 1: MÉTRICAS DE CRECIMIENTO
REVENUE Y TENDENCIA
El revenue del mes y del año hasta la fecha versus el objetivo y versus el mismo período del año anterior. La métrica más importante no es el número absoluto sino la tendencia: ¿el negocio está acelerando, manteniendo o desacelerando su crecimiento? Para empresas SaaS, descomponerlo en ARR, MRR, expansión revenue, nuevo revenue y churn. Para empresas de producto o servicios, descomponerlo por línea de negocio.

NIVEL 2: MÉTRICAS DE RENTABILIDAD
GROSS MARGIN Y SU EVOLUCIÓN
El margen bruto (revenue menos coste de las ventas) y su evolución trimestral. Un margen bruto que se comprime a medida que la empresa crece es una señal de alerta: indica que el modelo de negocio tiene costes variables que escalan más rápido que el revenue. Para empresas SaaS, el objetivo es un margen bruto del 70-80%; para empresas de servicios, del 40-60%.

EBITDA Y EBITDA MARGIN
El EBITDA (resultado antes de intereses, impuestos, depreciaciones y amortizaciones) y su margen sobre el revenue. Es la métrica de eficiencia operativa más usada por inversores y por el Consejo. Para empresas en crecimiento, un EBITDA negativo es aceptable si el CAC payback es corto y el LTV es alto; para empresas maduras, el mercado espera márgenes crecientes.

NIVEL 3: MÉTRICAS DE EFICIENCIA
BURN RATE Y RUNWAY
Para empresas que no son rentables, el burn rate mensual (cuánta caja consume la empresa por mes) y el runway (cuántos meses de caja quedan al ritmo actual de consumo) son las métricas más críticas. La dirección y el Consejo necesitan ver estas métricas con suficiente antelación para tomar decisiones de financiación. El umbral de alerta es cuando el runway cae por debajo de los doce meses.

UNIT ECONOMICS: LTVCAC Y PAYBACK PERIOD
Las unit economics son las métricas que muestran si el modelo de negocio es fundamentalmente rentable. El ratio LTV/CAC (lifetime value del cliente dividido por el coste de adquisición) debe ser superior a tres para un modelo SaaS saludable. El payback period (cuántos meses tarda en recuperarse el coste de adquisición de un cliente) debe ser inferior a doce meses para la mayoría de los modelos B2B.

NIVEL 4: MÉTRICAS DE CASH FLOW
CASH FLOW OPERATIVO
El cash flow generado por las operaciones del negocio, sin contar la financiación ni las inversiones. Para una empresa rentable, el objetivo es que el cash flow operativo sea positivo y creciente. La diferencia entre el EBITDA y el cash flow operativo es la señal de alerta sobre la gestión del capital de trabajo (cobros a clientes, pagos a proveedores, inventario).

FORECAST DE TESORERÍA A 13 SEMANAS
El forecast de tesorería a trece semanas (el estándar de la industria) da a la dirección la visibilidad sobre los compromisos de pago y los ingresos esperados con suficiente detalle para gestionar la liquidez de manera proactiva. Ayúdame a construir el modelo de forecast de tesorería semanal que se actualiza automáticamente con los datos del ERP.

**EL DISEÑO DEL DASHBOARD:**

LA PRIMERA PÁGINA: LOS TRES NÚMEROS MÁS IMPORTANTES
El dashboard financiero para la dirección debe empezar con los tres números que resumen el estado del negocio en este momento: el revenue del mes y su comparación con el objetivo, el cash de la empresa y el runway, y el margen bruto del mes y su comparación con el mismo período del año anterior. Todo lo demás es profundidad de detalle.

LOS COMENTARIOS DEL CFO
Los datos sin contexto generan más preguntas que respuestas. Ayúdame a diseñar el formato de comentarios del CFO que acompañan a cada métrica: qué explica la desviación positiva o negativa, qué decisiones se han tomado como consecuencia y qué se espera para el próximo mes.

Dame el diseño completo del CFO dashboard que da a la dirección la visibilidad que necesita para tomar las mejores decisiones financieras con la información correcta.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseño del CFO dashboard con KPIs financieros para dirección y Consejo de Administración',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal metrics: medir la eficiencia y el riesgo del departamento jurídico',
                'description'       => 'Diseña el sistema de métricas del departamento legal que demuestra su eficiencia, gestiona el riesgo jurídico de manera cuantificable y posiciona al equipo legal como un socio estratégico medido.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un General Counsel o Director Jurídico con experiencia implementando sistemas de métricas en departamentos legales internos que han necesitado demostrar su valor de manera objetiva ante la dirección y los accionistas. Quiero diseñar el sistema de métricas del departamento legal que hace visible la eficiencia del equipo, cuantifica el riesgo gestionado y posiciona al área legal como una inversión con retorno medible.

**Preguntas iniciales:**
1. ¿Cuál es el tamaño del departamento legal y las áreas de práctica que cubre internamente?
2. ¿Cuál es el mayor reto para medir el departamento legal: la naturaleza cualitativa del trabajo jurídico, la falta de sistemas de tracking o la resistencia del equipo a ser medido?
3. ¿Hay presión de la dirección para demostrar el valor del departamento legal o para reducir su coste?
4. ¿El departamento usa asesoramiento jurídico externo (despachos) además del equipo interno? ¿Cuánto gasta en externo versus interno?

**EL RETO ÚNICO DE MEDIR EL TRABAJO LEGAL:**

El trabajo legal tiene características que lo hacen difícil de medir con las métricas tradicionales: el éxito se mide frecuentemente por lo que no pasa (el contrato que se firmó sin problemas, el litigio que se previno), el valor de muchas tareas solo se conoce en retrospectiva y la velocidad puede ir en contra de la calidad y la seguridad jurídica. Ayúdame a diseñar un sistema que captura el valor real del trabajo legal sin reducirlo a métricas que desincentivan la calidad.

**LAS MÉTRICAS DE EFICIENCIA OPERATIVA:**

TIEMPO DE RESPUESTA Y CICLO DE CONTRATOS
El indicador de eficiencia más fácil de medir y más relevante para el negocio es el tiempo de ciclo de los contratos: desde que el área de negocio solicita la revisión hasta que el contrato está listo para firmar. Las métricas de tiempo de ciclo por tipo de contrato (NDAs en menos de veinticuatro horas, contratos de servicios estándar en cuatro días hábiles, contratos complejos en diez días hábiles) son el SLA del departamento legal con el negocio. Ayúdame a establecer los SLAs por tipo de trabajo y a medir el cumplimiento.

VOLUMEN Y MIX DE TRABAJO
El tracking del volumen de trabajo por tipo de tarea (contratos revisados, consultas respondidas, litigios activos, procesos de compliance completados) da visibilidad sobre la carga del equipo y sobre el mix de trabajo. Un departamento legal que dedica el 80% de su tiempo a tareas rutinarias y el 20% a trabajo estratégico es menos eficiente que uno que ha automatizado las tareas rutinarias y puede dedicar más tiempo al trabajo de alto valor. Ayúdame a construir el tracker de volumen y mix de trabajo del departamento.

COSTE INTERNO VERSUS COSTE EXTERNO
Una de las métricas de mayor impacto para demostrar el valor del departamento legal interno es la comparación del coste interno de gestionar un tipo de trabajo versus el coste de externalizarlo a un despacho. Si el departamento interno puede gestionar un contrato estándar en dos horas de un abogado júnior y el despacho externo lo cobra a cuatro horas de un asociado senior, el ahorro es significativo. Ayúdame a construir el modelo de coste comparativo que cuantifica el ahorro de la internalización.

**LAS MÉTRICAS DE GESTIÓN DEL RIESGO:**

EXPOSICIÓN LEGAL CUANTIFICADA
El departamento legal gestiona riesgos que tienen un valor económico: la probabilidad de un litigio multiplicada por el valor estimado de la condena, o la probabilidad de una multa regulatoria multiplicada por su cuantía máxima. Ayúdame a construir el mapa de riesgo legal cuantificado que el General Counsel presenta trimestralmente al Consejo: los principales riesgos legales activos, su probabilidad, su impacto económico esperado y las medidas de mitigación en curso.

LITIGIOS ACTIVOS Y SU EVOLUCIÓN
El tracking de los litigios activos (número de casos, valor en riesgo, fase procesal, coste externo estimado) es la métrica de riesgo más visible para la dirección. Ayúdame a diseñar el dashboard de litigios que el General Counsel revisa mensualmente con la dirección.

COMPLIANCE Y AUDITORÍAS
El porcentaje de cumplimiento de las obligaciones regulatorias (inspecciones realizadas, formaciones completadas, políticas actualizadas) es la métrica de salud del programa de compliance. Una caída en el nivel de cumplimiento es una señal de alerta antes de que llegue una sanción. Ayúdame a construir el dashboard de compliance que hace visible el nivel de cumplimiento normativo de la organización.

**EL LEGAL DASHBOARD PARA LA DIRECCIÓN:**

EL INFORME TRIMESTRAL DEL GENERAL COUNSEL
El General Counsel que reporta al CEO y al Consejo necesita un formato de informe que comunique el valor del departamento en términos de negocio: el riesgo legal gestionado en el trimestre (cuantificado), la eficiencia del equipo (tiempo de ciclo versus SLA, volumen gestionado), el ahorro generado versus la externalización y los riesgos que requieren atención del Consejo.

Dame el sistema completo de métricas del departamento legal que demuestra su valor, gestiona el riesgo de manera cuantificable y posiciona al General Counsel como un socio estratégico del negocio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema de métricas del departamento legal: eficiencia, riesgo y valor para la dirección',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'CS metrics: NRR, churn, health score y su impacto en el negocio',
                'description'       => 'Domina las métricas de customer success que importan al CEO y al inversor: el Net Revenue Retention, el churn rate, el health score y la conexión de cada métrica con el valor a largo plazo del negocio.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP of Customer Success con experiencia construyendo sistemas de métricas en empresas SaaS B2B donde el crecimiento del negocio depende de la retención y la expansión de los clientes existentes. Quiero dominar las métricas de customer success en profundidad: no solo cómo calcularlas, sino cómo usarlas para tomar mejores decisiones, cómo comunicarlas a la dirección y cómo conectarlas con el valor de largo plazo del negocio.

**Preguntas iniciales:**
1. ¿Cuál es el modelo de suscripción: mensual, anual o multianual?
2. ¿Cuáles son los datos disponibles actualmente para calcular estas métricas?
3. ¿Cuál es el mayor reto de métricas: no tener los datos, tener datos pero no saber interpretarlos, o tener las métricas pero no saber comunicarlas a la dirección?
4. ¿El equipo de CS tiene objetivos de revenue (expansión) además de objetivos de retención?

**NET REVENUE RETENTION (NRR): LA MÉTRICA REINA:**

QUÉ ES EL NRR Y POR QUÉ IMPORTA TANTO
El Net Revenue Retention mide cuánto revenue retiene el negocio de sus clientes existentes de un período al siguiente, incluyendo las expansiones (upsell, cross-sell) y descontando los downgrades y los churns. Es la métrica más importante de un negocio SaaS porque determina la tasa de crecimiento compuesto del negocio sobre la base de clientes existente.

Un NRR superior al 100% significa que el negocio crece incluso sin adquirir nuevos clientes: los clientes existentes generan más revenue que el año anterior porque se expanden más rápido de lo que churnan. Los negocios de SaaS de alta calidad tienen NRRs del 120-130%; los que están en dificultades tienen NRRs por debajo del 90%.

CÓMO CALCULAR EL NRR CON EXACTITUD
La fórmula del NRR: (MRR del mes anterior + expansiones - contracciones - churn) / MRR del mes anterior × 100. Ayúdame a verificar que estoy calculando el NRR correctamente en mi contexto específico: cómo tratar los upgrades de plan, los add-ons, las renovaciones con descuento y los clientes que pausan su suscripción.

CÓMO MEJORAR EL NRR
El NRR tiene dos palancas: reducir el churn y aumentar la expansión. Ayúdame a analizar mi NRR descomponiéndolo en sus componentes (tasa de churn, tasa de contracción, tasa de expansión) para identificar cuál de las dos palancas tiene mayor impacto en mi caso específico y qué iniciativas concretas del equipo de CS pueden moverlas.

**CHURN: MÁS ALLÁ DEL NÚMERO TOTAL:**

GROSS REVENUE RETENTION (GRR) VERSUS NRR
El GRR mide la retención del revenue sin contar las expansiones: solo mide cuánto del revenue del período anterior no se perdió por churn o contracción. Es el indicador de la salud de la base de clientes sin el efecto de las ventas adicionales. Un GRR alto (superior al 90%) indica una base de clientes sana; un GRR bajo indica un problema estructural de producto o de adecuación cliente-mercado.

CHURN SEGMENTADO: LOS NÚMEROS DETRÁS DEL NÚMERO
El churn agregado oculta información crítica. Ayúdame a segmentar el churn de manera que revele los problemas reales: churn por cohorte de entrada (los clientes que churnan en los primeros noventa días tienen un problema de onboarding; los que churnan a los dos años tienen un problema de valor percibido), churn por segmento de cliente (¿churnan más las PYMEs o las grandes cuentas?), churn por industria y churn por canal de adquisición (los clientes de trial free churnan más que los de ventas directas).

**HEALTH SCORE: LA MÉTRICA PREDICTIVA:**

DISEÑO DE UN HEALTH SCORE ROBUSTO
El health score es el indicador predictivo por excelencia del CS: un número que agrega múltiples señales del comportamiento del cliente para predecir la probabilidad de renovación. Los health scores mal diseñados son vanidosos (miden el engagement sin conexión con la renovación); los bien diseñados son predictivos (sus valores bajos correlacionan con el churn en el siguiente período). Ayúdame a diseñar el health score de mi producto:

LOS INDICADORES QUE PREDICEN LA RENOVACIÓN
Para diseñar un health score que predice el churn, hay que analizar los datos históricos de los clientes que churaron: ¿qué tenían en común en su comportamiento de uso en los tres meses antes de churnar? Los indicadores más comunes son: la frecuencia de login (caída en el uso), el número de usuarios activos versus usuarios licenciados (baja adopción), el uso de las features de mayor valor (las que generan el ROI del cliente) y el engagement con el equipo de CS (clientes que dejan de responder los emails).

CÓMO USAR EL HEALTH SCORE PARA INTERVENIR
El health score solo tiene valor si genera acciones concretas del equipo de CS. Ayúdame a diseñar el playbook de intervención basado en el health score: qué acción toma el CSM cuando un cliente pasa de verde a amarillo, qué escalación se activa cuando pasa a rojo y cómo el manager de CS prioriza su tiempo para maximizar el impacto en las cuentas de mayor riesgo.

**EL CS METRICS DASHBOARD:**

PARA EL EQUIPO DE CS (SEMANAL)
Las métricas que el CSM revisa cada semana: el estado del health score de su cartera de cuentas, las cuentas con tendencia negativa que requieren acción, el pipeline de renovaciones del próximo trimestre y el pipeline de expansión que está trabajando.

PARA LA DIRECCIÓN (MENSUAL)
Las métricas que el VP de CS presenta al CEO y al CFO: el NRR del mes y su descomposición (expansión, contracción, churn), el GRR, el churn rate de cuentas y de revenue, el estado de las renovaciones del trimestre en curso y el forecast de NRR para el trimestre siguiente.

Dame el sistema completo de métricas de customer success que convierte los datos en decisiones y que posiciona al equipo de CS como el motor de crecimiento del negocio SaaS.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Dominio de métricas de CS: NRR, GRR, churn y health score para equipos SaaS B2B',
                'vote_score'        => 49,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Métricas del negocio freelance: facturación, margen y pipeline',
                'description'       => 'Diseña el cuadro de mando del negocio freelance que da visibilidad real sobre la salud financiera, la utilización del tiempo y el pipeline de trabajo para tomar mejores decisiones de negocio.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de negocio especializado en freelancers y profesionales independientes con experiencia ayudando a consultores, diseñadores, developers y otros freelancers a construir negocios más rentables y predecibles a través de una mejor gestión de sus números. Quiero diseñar el cuadro de mando del negocio freelance que me da visibilidad real sobre lo que está pasando en mi negocio y que me permite tomar mejores decisiones sobre precios, clientes y capacidad.

**Preguntas iniciales:**
1. ¿Cuál es tu especialidad freelance y cuál es tu modelo de facturación: tarifa por hora, tarifa por proyecto o retainer mensual?
2. ¿Llevas actualmente algún tipo de registro de tu facturación, tus gastos y tu tiempo dedicado a cada proyecto?
3. ¿Cuál es el mayor problema que quieres resolver con las métricas: no saber si eres rentable, no tener visibilidad sobre el trabajo futuro, no poder fijar el precio correcto o no saber cuánto tiempo tienes disponible?
4. ¿Facturas a través de una sociedad o como persona física?

**LAS MÉTRICAS ESENCIALES DEL NEGOCIO FREELANCE:**

NIVEL 1: MÉTRICAS DE FACTURACIÓN

FACTURACIÓN MENSUAL Y SU TENDENCIA
La facturación mensual (el revenue bruto antes de impuestos y gastos) y su tendencia en los últimos doce meses son la primera métrica de salud del negocio freelance. Lo que importa no es el número absoluto sino la tendencia: ¿está creciendo, estable o decreciendo? ¿Hay estacionalidad? ¿Los meses buenos compensan a los meses malos? Ayúdame a calcular mi facturación mensual media, mi facturación máxima y mínima de los últimos doce meses y la variabilidad, que es el indicador de la predictibilidad de mi negocio.

FACTURACIÓN POR CLIENTE Y CONCENTRACIÓN
La distribución de la facturación por cliente revela el riesgo de concentración: si un solo cliente representa más del 40% de la facturación, el negocio es vulnerable a la pérdida de ese cliente. Ayúdame a calcular el porcentaje de facturación de cada cliente, a identificar el nivel de concentración de mi negocio y a diseñar la estrategia de diversificación que reduce el riesgo.

NIVEL 2: MÉTRICAS DE RENTABILIDAD

TARIFA EFECTIVA POR HORA
La tarifa efectiva por hora es la métrica que revela la rentabilidad real de cada proyecto: el total facturado dividido por el total de horas dedicadas (incluyendo las horas de gestión, las reuniones y las revisiones). La tarifa efectiva por hora de un proyecto con scope creep puede ser el 50% de la tarifa nominal. Ayúdame a calcular la tarifa efectiva por hora de cada proyecto de los últimos doce meses y a identificar los proyectos más y menos rentables.

MARGEN DE CONTRIBUCIÓN
El margen de contribución es la facturación menos los costes directos del proyecto: subcontratistas, herramientas específicas del proyecto, desplazamientos. El margen de contribución me dice cuánto queda de cada euro facturado para cubrir mis costes fijos (herramientas, formación, seguros) y para generar el beneficio. Ayúdame a calcular el margen de contribución por proyecto y el margen medio del negocio.

NIVEL 3: MÉTRICAS DE UTILIZACIÓN

TASA DE UTILIZACIÓN FACTURABLE
La tasa de utilización facturable es el porcentaje de las horas de trabajo disponibles que se dedican a trabajo facturable al cliente. Para un freelance que trabaja ocho horas al día, cinco días a la semana, hay aproximadamente ciento sesenta horas disponibles al mes. Si dedica cien de esas horas a trabajo facturable, la tasa de utilización es del 62,5%. El resto se dedica a tareas no facturables: administración, desarrollo de negocio, formación, marketing personal.

Una tasa de utilización del 70-75% es un objetivo razonable para la mayoría de los freelancers; por encima del 80% empieza a ser difícil mantener el desarrollo de negocio y la formación; por debajo del 60% indica que hay capacidad disponible o que las tareas no facturables consumen demasiado tiempo. Ayúdame a calcular mi tasa de utilización actual y a optimizarla.

NIVEL 4: MÉTRICAS DE PIPELINE

EL PIPELINE DE TRABAJO FREELANCE
El pipeline de trabajo freelance es el valor total del trabajo confirmado y probable en los próximos tres meses: los proyectos ya contratados (pipeline confirmado), las propuestas enviadas pendientes de decisión (pipeline probable) y las conversaciones en curso que pueden convertirse en proyectos (pipeline potencial). Ayúdame a construir el modelo de pipeline que me da visibilidad sobre los próximos tres meses:

- Pipeline confirmado: los proyectos con contrato firmado y fechas de inicio definidas
- Pipeline probable: las propuestas enviadas con probabilidad de cierre estimada
- Pipeline potencial: las conversaciones en curso con el siguiente paso definido

INDICADORES ADELANTADOS
El freelance que solo mira la facturación del mes actual está siempre sorprendido por los valles de trabajo. Los indicadores adelantados son los que predicen la facturación futura: el número de propuestas enviadas en el último mes, el número de primeras conversaciones con prospectos y el número de referencias activas. Ayúdame a definir mis indicadores adelantados y el objetivo mensual de cada uno para mantener el pipeline saludable.

**EL CUADRO DE MANDO DEL FREELANCE:**

LA REVISIÓN MENSUAL DEL NEGOCIO
Diseña conmigo el ritual de revisión mensual del negocio freelance: las métricas que reviso el primer día de cada mes, las decisiones que puedo tomar con esa información (subir tarifas, buscar más trabajo, invertir en formación, tomar unas vacaciones) y el tiempo que debería dedicar a esta revisión (no más de una hora al mes).

LA TARIFA MÍNIMA RENTABLE
Con los datos del cuadro de mando, ayúdame a calcular la tarifa mínima rentable: la tarifa por hora o por proyecto que cubre mis costes fijos, me paga un salario razonable y me deja margen para la formación, las vacaciones y los períodos de menor trabajo. Este cálculo es la base para decidir qué proyectos aceptar y cuáles rechazar.

Dame el sistema completo de métricas del negocio freelance que me da la visibilidad y el control que necesito para construir un negocio más rentable y predecible.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Cuadro de mando del negocio freelance: facturación, margen, utilización y pipeline',
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
