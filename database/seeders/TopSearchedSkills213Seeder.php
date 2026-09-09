<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills213Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Gestión del presupuesto de marketing',
                'description'       => 'Administra el presupuesto de marketing con disciplina: la distribución entre canales, el tracking del gasto vs. el plan y las decisiones de reasignación en tiempo real que maximizan el ROI del presupuesto disponible.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en marketing finance y en la gestión de presupuestos de marketing con enfoque en el ROI. Necesito que me ayudes a diseñar el sistema de gestión y control del presupuesto de marketing de mi empresa para tomar mejores decisiones sobre dónde invertir cada euro.

Mi contexto:
- Tipo de empresa y modelo de negocio: [B2B / B2C, sector, si es startup o empresa establecida]
- Presupuesto de marketing anual aproximado: [indica el rango o el importe total]
- Canales de marketing actuales y distribución aproximada del gasto: [SEM, Meta Ads, contenido, eventos, PR, etc.]
- Herramientas de tracking y reporting disponibles: [Google Analytics, CRM, hoja de cálculo, etc.]
- Mayor problema con el presupuesto actual: [sin visibilidad del ROI por canal, gasto que se desvía del plan, difícil justificar la inversión ante la dirección, etc.]
- Frecuencia de revisión del presupuesto: [mensual, trimestral, anual sin revisiones]

Con ese contexto, dame:

1. FRAMEWORK DE DISTRIBUCIÓN DEL PRESUPUESTO
¿Cómo distribuyo el presupuesto de marketing entre los distintos canales y partidas de forma estratégica? Dame el framework de asignación presupuestaria: la regla de distribución entre canales de captación, canales de retención y brand, cómo asignar entre canales experimentados (donde hay datos de ROI) y canales nuevos (donde hay que testear), el porcentaje recomendado para reservar como bolsa de inversión flexible y cómo ajustar la distribución según la etapa del negocio (captación agresiva vs rentabilización).

2. EL PLAN DE MARKETING FINANCIERO
¿Cómo construyo el plan de marketing financiero anual que conecta el gasto con los objetivos de negocio? Dame la estructura del presupuesto de marketing: la distribución por trimestre y por mes, la separación entre costes fijos (agencias, herramientas, equipo) y costes variables (media, eventos), el modelo de forecast de ingresos que justifica el presupuesto (cómo proyectar el CAC, el volumen de leads y las conversiones esperadas por canal) y el proceso para presentar y defender el presupuesto ante el comité de dirección.

3. TRACKING DEL GASTO EN TIEMPO REAL
¿Cómo configuro el sistema de tracking del gasto de marketing para tener visibilidad en tiempo real sin depender de los informes de contabilidad que llegan con semanas de retraso? Dame el diseño del sistema de control del gasto: la hoja de control de compromisos y pagos, la integración con los sistemas de compra y facturación, el proceso de aprobación de nuevos gastos según el importe y el tipo y el dashboard de gasto real vs plan que el equipo puede ver en cualquier momento sin esperar al cierre del mes.

4. MÉTRICAS DE ROI POR CANAL
¿Cómo mido el ROI de cada canal de marketing de forma comparable y rigurosa? Dame el modelo de atribución y las métricas de ROI por canal: cómo calcular el CAC por canal, el ROAS para los canales de paid media, el CPL y la tasa de conversión a cliente para los canales de contenido y SEO, la fórmula para comparar el ROI de canales con ciclos de venta distintos y cómo presentar estas métricas en el informe mensual de marketing que justifica las decisiones de inversión.

5. DECISIONES DE REASIGNACIÓN DEL PRESUPUESTO
¿Cómo tomo la decisión de mover presupuesto de un canal que no está funcionando a otro con mejor rendimiento durante el año? Dame el framework de decisión de reasignación: los indicadores que activan la revisión de la asignación (CAC por encima del umbral, ROAS por debajo del mínimo rentable, volumen de leads por debajo del plan), el proceso de análisis antes de mover el presupuesto (cuánto tiempo esperar para tener datos suficientes, cómo distinguir una tendencia de un resultado atípico), los criterios para decidir hacia dónde reasignar y cómo documentar la decisión.

6. JUSTIFICACIÓN DEL PRESUPUESTO DE MARKETING ANTE LA DIRECCIÓN
¿Cómo presento el gasto de marketing y su retorno ante el CEO o el comité de dirección de forma que el marketing se perciba como inversión y no como coste? Dame el framework de presentación del ROI de marketing: cómo conectar el gasto con el pipeline generado y los ingresos cerrados, cómo presentar el coste de adquisición en el contexto del LTV del cliente, cómo comunicar el impacto de los canales de marca (SEO, contenido, PR) que tienen retorno a largo plazo y son difíciles de atribuir directamente a ingresos y cómo responder a las preguntas difíciles sobre el retorno de partidas como los eventos o el branding.

7. ERRORES EN LA GESTIÓN DEL PRESUPUESTO DE MARKETING
Lista los seis errores más comunes en la gestión del presupuesto de marketing: el presupuesto definido sin datos de ROI histórico que lleva a distribuciones arbitrarias, la falta de flexibilidad en la asignación que impide mover presupuesto aunque los datos indiquen que un canal no funciona, el tracking del gasto sin conexión con los resultados que hace imposible calcular el ROI real, la inversión en demasiados canales a la vez que diluye el presupuesto sin masa crítica en ninguno, la ausencia de una bolsa de inversión para oportunidades no planificadas y el presupuesto de marketing que no incluye el coste del equipo interno como parte del coste total de adquisición.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar el sistema de gestión y control del presupuesto de marketing para maximizar el ROI de cada euro invertido.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'FinOps y optimización del coste de infraestructura cloud',
                'description'       => 'Reduce el coste de la infraestructura cloud sin sacrificar rendimiento: el análisis de costes por servicio, las estrategias de rightsizing y los compromisos de reserva que pueden reducir la factura entre un 30% y un 60%.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en FinOps y optimización de costes de infraestructura cloud. Necesito que me ayudes a implementar una práctica de FinOps en mi organización para reducir el gasto en cloud de forma significativa sin sacrificar rendimiento ni velocidad de desarrollo.

Mi contexto:
- Proveedor cloud principal: [AWS / GCP / Azure / multi-cloud]
- Gasto mensual aproximado en cloud: [indica el rango]
- Servicios cloud principales que usas: [EC2, RDS, S3, Lambda, GKE, BigQuery, etc.]
- Tamaño del equipo técnico: [número de ingenieros, si hay equipo de platform o DevOps]
- Proceso actual de gestión de costes cloud: [sin proceso / alertas básicas de presupuesto / algún análisis esporádico / proceso formal]
- Mayor problema con los costes cloud actuales: [factura que crece sin control, sin visibilidad de qué genera el gasto, recursos sin uso activo, no saber si los compromisos de reserva son adecuados, etc.]

Con ese contexto, dame:

1. DIAGNÓSTICO DEL GASTO CLOUD: DÓNDE VA EL DINERO
¿Cómo hago el diagnóstico inicial del gasto cloud para entender dónde va cada euro antes de empezar a optimizar? Dame el proceso de análisis de costes: las herramientas nativas del proveedor cloud para el análisis de costes (Cost Explorer en AWS, Cost Management en Azure, Cloud Billing en GCP), las dimensiones de análisis más útiles (por servicio, por entorno, por equipo, por proyecto), cómo identificar los tres o cuatro servicios que representan el mayor porcentaje del gasto y las señales que indican recursos claramente infrautilizados o abandonados.

2. RIGHTSIZING: PAGAR SOLO POR LO QUE USAS
¿Cómo identifico y corrijo el oversizing de los recursos cloud que genera gasto innecesario? Dame el proceso de rightsizing: las herramientas de análisis de utilización (AWS Compute Optimizer, Azure Advisor, Google Recommender), las métricas de utilización que debo analizar para cada tipo de recurso (CPU, memoria, IOPS, transferencia de red), cómo definir el umbral de subutilización que justifica el downsizing, el proceso para reducir el tamaño de instancias sin interrumpir el servicio y cómo evitar el ciclo de oversizing recurrente con alertas de utilización.

3. ESTRATEGIAS DE COMPROMISOS DE RESERVA
¿Qué estrategia de compromisos de reserva me permite reducir el coste de los recursos cloud con uso predecible? Dame el análisis de las opciones disponibles para mi proveedor: la comparativa entre on-demand, reserved instances o savings plans (AWS), committed use discounts (GCP) y reservations (Azure), el ahorro potencial de cada opción (entre el 30% y el 72% según el compromiso), cómo analizar el historial de uso para determinar qué porcentaje del consumo es predecible y merece ser reservado y el proceso para comprar y gestionar los compromisos a lo largo del tiempo.

4. OPTIMIZACIÓN DEL ALMACENAMIENTO Y LA TRANSFERENCIA DE DATOS
¿Cómo reduzco el coste del almacenamiento y la transferencia de datos que en muchas empresas supone una fracción significativa de la factura cloud? Dame el análisis de optimización: las políticas de ciclo de vida del almacenamiento (mover objetos a tiers más baratos según la frecuencia de acceso), la eliminación de snapshots y backups obsoletos, la reducción de los costes de transferencia de datos entre regiones o zonas de disponibilidad, la optimización de los logs (retención, compresión, destino) y el análisis de los costes de transferencia de datos de salida (egress) que suelen ser invisibles hasta que aparecen en la factura.

5. TAGGING Y ATRIBUCIÓN DE COSTES POR EQUIPO Y PROYECTO
¿Cómo implemento un sistema de tagging que permita atribuir el gasto cloud a los equipos, proyectos o productos responsables para crear accountability sobre los costes? Dame el diseño del sistema de tagging: la taxonomía de tags recomendada (environment, team, project, cost-center, application), el proceso de governance para asegurar que todos los recursos nuevos se crean con los tags correctos, cómo tratar los recursos sin tags (la deuda de tagging acumulada), cómo usar los tags para crear dashboards de costes por equipo y cómo integrar el showback o chargeback de costes cloud en los procesos de planificación de los equipos.

6. GOBIERNO Y PROCESO FINOPS EN EL EQUIPO
¿Cómo implemento una práctica de FinOps en el equipo técnico para que la optimización de costes sea un proceso continuo y no una iniciativa puntual? Dame el diseño del proceso FinOps: la cadencia de revisión de costes (revisión semanal de anomalías, revisión mensual de tendencias, revisión trimestral de compromisos), los roles y responsabilidades (quién es el owner del coste cloud, cómo involucrar a los ingenieros en la optimización), el proceso de revisión de pull requests que incluye la estimación de impacto en coste y las métricas de FinOps health que indican si el proceso está funcionando.

7. ERRORES EN LA OPTIMIZACIÓN DE COSTES CLOUD
Lista los seis errores más comunes en los proyectos de optimización de costes cloud: la optimización puntual sin proceso continuo que hace que los ahorros se deshagan en seis meses, el rightsizing sin prueba de rendimiento que genera problemas de capacidad en producción, los compromisos de reserva comprados sin análisis del patrón de uso real que no generan el ahorro esperado, la optimización que no involucra a los ingenieros y genera resistencia al cambio, el foco exclusivo en los recursos de computación ignorando el almacenamiento y la transferencia de datos y la ausencia de alertas de presupuesto que permiten que las anomalías de gasto pasen desapercibidas durante semanas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Implementar una práctica de FinOps para reducir el gasto en infraestructura cloud entre un 30% y un 60% sin sacrificar rendimiento.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Gestión del presupuesto de diseño',
                'description'       => 'Administra el presupuesto de un proyecto de diseño o de un departamento: las decisiones de build vs. buy en herramientas, el coste de las licencias y la justificación de la inversión en diseño ante la dirección.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en gestión de proyectos de diseño y en la administración financiera de departamentos creativos. Necesito que me ayudes a gestionar mejor el presupuesto de diseño: desde la estimación del coste de los proyectos hasta la justificación de la inversión en herramientas y en el equipo ante la dirección.

Mi contexto:
- Tipo de rol: [diseñador freelance / líder de equipo de diseño interno / director creativo de agencia]
- Tipo de proyectos de diseño más habituales: [branding, UX/UI, diseño web, motion, print, etc.]
- Presupuesto típico por proyecto o presupuesto anual del departamento: [indica el rango]
- Herramientas de diseño que usa el equipo: [lista las principales y su modelo de licencia]
- Mayor problema con la gestión financiera del diseño actual: [dificultad para estimar el coste de los proyectos, scope creep que no se cobra, herramientas caras sin proceso de revisión, dificultad para justificar la inversión en diseño ante la dirección, etc.]

Con ese contexto, dame:

1. ESTIMACIÓN DEL COSTE DE UN PROYECTO DE DISEÑO
¿Cómo estimo el coste real de un proyecto de diseño de forma que incluya todos los elementos (tiempo del equipo, herramientas, proveedores externos, revisiones) y me proteja del scope creep? Dame el proceso de estimación: cómo descomponer el proyecto en fases y entregables, cómo estimar el tiempo por fase con un buffer razonable, cómo incluir el coste de las reuniones, revisiones y gestión del proyecto (que suelen representar entre el 20% y el 30% del tiempo total), cómo añadir el coste de las herramientas y los activos externos (fotografía, ilustración, tipografías) y cómo estructurar la estimación en el presupuesto al cliente.

2. BUILD VS BUY: DECISIONES DE HERRAMIENTAS Y LICENCIAS
¿Cómo tomo la decisión de qué herramientas de diseño comprar o suscribir y cuáles construir internamente o prescindir de ellas? Dame el framework de decisión de herramientas: el análisis del coste total de propiedad (precio de la licencia, tiempo de aprendizaje, coste de integración con el flujo de trabajo existente), cuándo tiene sentido pagar por una herramienta premium frente a usar la opción gratuita, cómo auditar las licencias actuales para detectar herramientas que el equipo ya no usa y cómo presentar la decisión de inversión en una herramienta nueva ante la dirección.

3. GESTIÓN DEL SCOPE CREEP EN EL PRESUPUESTO
¿Cómo evito que las revisiones adicionales y los cambios de alcance erosionen el margen del proyecto sin que nadie lo detecte hasta que ya es tarde? Dame el sistema de gestión del scope: cómo definir en el contrato qué está incluido y qué genera un presupuesto adicional, el proceso para registrar las horas invertidas en cada fase y compararlas con la estimación, el script de la conversación con el cliente cuando el proyecto empieza a salirse del alcance acordado y cómo facturar las revisiones adicionales sin dañar la relación con el cliente.

4. EL PRESUPUESTO ANUAL DEL DEPARTAMENTO DE DISEÑO
¿Cómo elaboro y presento el presupuesto anual de un departamento de diseño ante la dirección financiera? Dame la estructura del presupuesto de diseño: los apartados principales (equipo, herramientas y licencias, formación, proveedores externos, equipamiento), cómo proyectar el gasto por trimestre según la carga de trabajo prevista, cómo incluir inversiones en formación y desarrollo del equipo con su justificación y cómo presentar el presupuesto como inversión con retorno y no como coste de estructura.

5. JUSTIFICACIÓN DEL ROI DEL DISEÑO
¿Cómo demuestro ante la dirección que la inversión en diseño genera retorno medible para el negocio? Dame el framework para cuantificar el ROI del diseño: los estudios y datos de referencia que conectan la inversión en diseño con el incremento de conversión, la reducción del tiempo de desarrollo (menor coste de ingeniería), la reducción del coste de soporte (mejor UX) y el incremento del valor percibido de la marca (pricing premium). Incluye cómo recopilar datos de los proyectos propios para construir el caso de ROI específico para mi empresa.

6. GESTIÓN FINANCIERA DEL FREELANCE DE DISEÑO
Si trabajo como freelance, ¿cómo gestiono la dimensión financiera del negocio de diseño de forma que sea sostenible y rentable? Dame el sistema financiero del freelance creativo: cómo fijar la tarifa objetivo que cubre todos los costes (herramientas, formación, comercial, tiempo administrativo) más un margen, cómo gestionar la irregularidad de los ingresos con un colchón de liquidez, cómo separar las cuentas del negocio de las personales, qué gastos son deducibles como freelance de diseño y cuándo tiene sentido convertirse en empresa.

7. ERRORES EN LA GESTIÓN FINANCIERA DEL DISEÑO
Lista los seis errores más comunes en la gestión financiera de proyectos y departamentos de diseño: la estimación sin buffer que convierte cualquier imprevisto en pérdida de margen, la falta de registro del tiempo invertido que hace imposible saber si el proyecto fue rentable, las revisiones ilimitadas en el contrato que destruyen el margen en proyectos con clientes exigentes, el presupuesto de herramientas que no se revisa anualmente y acumula licencias innecesarias, la ausencia de un proceso de aprobación de gastos que genera sorpresas en el cierre del proyecto y la dificultad para separar el coste del proyecto del coste de estructura del departamento.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Gestionar el presupuesto de proyectos y departamentos de diseño para maximizar el margen y justificar la inversión ante la dirección.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Gestión del P&L de ventas',
                'description'       => 'Entiende y gestiona el profit & loss del equipo comercial: el coste de adquisición, el margen por producto y las decisiones de pricing y descuento que impactan directamente en la rentabilidad del negocio.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en sales finance y en la gestión financiera de equipos comerciales. Necesito que me ayudes a entender y gestionar el P&L del equipo de ventas de forma que las decisiones comerciales tengan en cuenta su impacto en la rentabilidad del negocio y no solo en el volumen de ventas.

Mi contexto:
- Tipo de venta y producto o servicio: [B2B / B2C, ticket medio, si es venta única o recurrente]
- Tamaño del equipo comercial: [número de comerciales]
- Estructura de comisiones actual: [sobre ingresos / sobre margen / mixta / sin comisiones]
- Métricas que sigue el equipo de ventas actualmente: [revenue, número de deals, pipeline, etc.]
- Mayor problema financiero en el equipo de ventas: [descuentos que erosionan el margen, comerciales que optimizan volumen sin considerar rentabilidad, sin visibilidad del coste real de adquisición, etc.]

Con ese contexto, dame:

1. LOS NÚMEROS QUE DEBE ENTENDER UN DIRECTOR COMERCIAL
¿Qué métricas financieras debe manejar un director de ventas para gestionar el equipo con criterio financiero y no solo con criterio de volumen? Dame el glosario financiero del director comercial: la diferencia entre revenue, margen bruto y contribución neta, qué es el coste de adquisición de cliente (CAC) y cómo calcularlo incluyendo el salario del equipo de ventas, el EBITDA de ventas, el payback period del cliente y por qué el LTV/CAC ratio es el KPI que conecta ventas con la salud financiera del negocio a largo plazo.

2. EL P&L DEL EQUIPO DE VENTAS
¿Cómo construyo el P&L del equipo de ventas que muestra la rentabilidad real de la función comercial? Dame la estructura del P&L de ventas: los ingresos por comercial y por segmento de cliente, el coste del equipo (salario base, variable, beneficios, herramientas), el coste de las campañas de marketing atribuidas a las ventas del equipo, el margen bruto ponderado de los deals cerrados y la contribución neta del equipo de ventas al resultado del negocio. Incluye cómo presentar este P&L en el comité de dirección.

3. MARGEN POR PRODUCTO Y POR CLIENTE
¿Cómo analizo la rentabilidad por producto, por segmento de cliente y por comercial para tomar mejores decisiones de foco? Dame el proceso de análisis de rentabilidad: cómo calcular el margen de contribución por línea de producto, cómo identificar los clientes y los segmentos que generan más margen frente a los que generan más volumen de ingresos, cómo detectar los comerciales que cierran muchos deals con descuentos que erosionan el margen y cómo usar ese análisis para redirigir el esfuerzo comercial hacia los segmentos más rentables.

4. IMPACTO DE LOS DESCUENTOS EN EL MARGEN
¿Cómo enseño al equipo de ventas a entender el impacto real de los descuentos en la rentabilidad del negocio? Dame el modelo de simulación de descuentos: el cálculo de cuántas unidades adicionales hay que vender para compensar un descuento del 10%, el 15% o el 20% según el margen bruto del producto, cómo presentar este análisis al equipo comercial de forma que sea intuitivo y cambie el comportamiento y cómo diseñar la política de autorización de descuentos que protege el margen sin eliminar la flexibilidad comercial que el equipo necesita para cerrar deals.

5. COMISIONES SOBRE MARGEN VS COMISIONES SOBRE INGRESOS
¿Debería cambiar mi estructura de comisiones de sobre ingresos a sobre margen? Dame el análisis de las dos estructuras: las ventajas y los problemas de las comisiones sobre revenue (fácil de entender y de calcular, pero incentiva los descuentos y el volumen sobre la rentabilidad), las ventajas y los problemas de las comisiones sobre margen (alinea los incentivos con la rentabilidad, pero es más complejo y puede generar comportamientos defensivos en el equipo), y las estructuras híbridas que combinan ambos enfoques. Dame la recomendación para mi caso concreto.

6. FORECAST FINANCIERO DE VENTAS
¿Cómo construyo el forecast de ventas que conecta el pipeline comercial con las proyecciones financieras del negocio? Dame el modelo de forecast: cómo traducir el pipeline actual (oportunidades por etapa, tamaño de deal y probabilidad de cierre) en una previsión de ingresos y de margen por mes, cómo calibrar las probabilidades de cierre basándose en datos históricos y no en el optimismo del comercial, cómo comunicar el nivel de incertidumbre del forecast a la dirección y cómo actualizar el forecast en tiempo real cuando cambian las condiciones del pipeline.

7. ERRORES FINANCIEROS EN LA GESTIÓN DE VENTAS
Lista los seis errores financieros más comunes en los equipos de ventas: el equipo que maximiza el volumen de deals sin considerar la mezcla de productos y el margen resultante, las comisiones sobre ingresos que incentivan descuentos agresivos que destruyen la rentabilidad, la ausencia de un análisis de rentabilidad por cliente que lleva a dedicar el mismo esfuerzo comercial a clientes de bajo margen que a los de alto margen, el forecast optimista basado en el pipeline total sin ajuste por probabilidad que genera planes financieros irrealizables, la falta de seguimiento del CAC real que incluye el coste del equipo y la ausencia de un proceso de revisión de los deals con descuento no estándar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Gestionar el P&L del equipo de ventas para que las decisiones comerciales tengan en cuenta su impacto en la rentabilidad del negocio.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Unit economics del producto digital',
                'description'       => 'Entiende los números del modelo de negocio de tu producto: el CAC, el LTV, el payback period y los ratios que determinan si el negocio es viable a escala y cuándo.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en análisis financiero de productos digitales y en la evaluación de unit economics de negocios SaaS y de consumo digital. Necesito que me ayudes a entender, calcular y mejorar los unit economics de mi producto para saber si el modelo de negocio es viable a escala y qué palancas tengo para mejorar la economía de la unidad.

Mi contexto:
- Tipo de producto digital: [SaaS B2B, app de consumo, marketplace, plataforma de contenido, e-commerce, etc.]
- Modelo de monetización: [suscripción mensual / anual, freemium, transaccional, publicidad, etc.]
- Métricas actuales que conoces: [indica las que tienes: CAC, LTV, churn, ARPU, etc. con sus valores si los tienes]
- Etapa del negocio: [pre-revenue / early stage con primeros clientes / crecimiento / escala]
- Mayor duda sobre los unit economics: [no sé cómo calcularlo correctamente, los números no me cierran, el LTV/CAC parece demasiado bajo, no sé qué palancas mover, etc.]

Con ese contexto, dame:

1. EL CAC: COSTE DE ADQUISICIÓN CORRECTO
¿Cómo calculo el CAC de mi producto de forma que sea preciso y útil para la toma de decisiones? Dame la fórmula correcta del CAC: qué costes incluir en el numerador (gasto de marketing, coste del equipo de ventas incluyendo beneficios, coste de herramientas de marketing y ventas, descuentos de adquisición), en qué período calcularlo (mensual, trimestral, cohort-based), la diferencia entre CAC blended y CAC por canal y por qué el blended puede ser engañoso y cómo interpretar el resultado en el contexto de mi modelo de negocio.

2. EL LTV: VALOR DEL CICLO DE VIDA DEL CLIENTE
¿Cómo calculo el LTV de mi producto de forma que sea conservadora y realista? Dame las distintas fórmulas de LTV según el modelo de negocio: el LTV para modelos de suscripción (ARPU / churn rate mensual), la versión más conservadora que descuenta los flujos futuros a la tasa de descuento del negocio, cómo ajustar el LTV por el margen bruto para obtener el LTV de contribución que es el que realmente importa para los unit economics y cómo proyectar el LTV cuando tengo pocos meses de datos históricos.

3. EL RATIO LTV/CAC: LA MÉTRICA QUE LO RESUME TODO
¿Cómo interpreto el ratio LTV/CAC de mi negocio y cuál es el valor que debo perseguir? Dame el análisis del ratio: qué significa un LTV/CAC de 1x, de 3x y de 10x para la salud del negocio, los benchmarks por tipo de producto digital (los SaaS B2B de alto ticket, los SaaS B2C de bajo ticket, los marketplaces y las apps de consumo tienen referencias distintas), qué ratio es necesario para atraer inversión y cuándo el ratio es demasiado alto (señal de que puedes ser más agresivo en la adquisición).

4. EL PAYBACK PERIOD: CUÁNDO RECUPERO LO INVERTIDO EN ADQUISICIÓN
¿Cómo calculo el payback period de mi negocio y cuál es el impacto en las necesidades de caja? Dame el cálculo del payback period: la fórmula (CAC / margen de contribución mensual), cómo interpretarlo en términos de liquidez (cuánto capital necesito para financiar el crecimiento antes de que los clientes generen caja positiva), los benchmarks por tipo de negocio (los SaaS enterprise pueden tener payback de 18-24 meses, los B2C de consumo masivo necesitan payback por debajo de 6 meses) y cómo mejorar el payback period sin reducir el CAC (aumentando el ARPU, reduciendo el churn de los primeros meses o cambiando a facturación anual).

5. ANÁLISIS DE COHORTS: LOS UNIT ECONOMICS POR GENERACIÓN DE CLIENTES
¿Cómo hago el análisis de cohorts que me muestra si los unit economics mejoran o empeoran con el tiempo? Dame el proceso de análisis de cohorts: cómo definir las cohorts (por mes de adquisición, por canal, por plan), las métricas que debo trazar para cada cohort (retención por período, ARPU acumulado, LTV realizado vs proyectado), cómo presentar el análisis visualmente de forma que sea claro para la dirección y los inversores y qué señales del análisis de cohorts indican que el producto está mejorando o degradándose.

6. PALANCAS PARA MEJORAR LOS UNIT ECONOMICS
¿Cuáles son las palancas que tengo para mejorar los unit economics de mi producto y cuál tiene mayor impacto? Dame el análisis de sensibilidad de las palancas principales: el impacto de reducir el CAC un 20% (mejora de eficiencia en canales de marketing), el impacto de reducir el churn mensual de un 5% a un 3% (incremento del LTV), el impacto de incrementar el ARPU un 20% (upsell o subida de precio), el impacto de migrar del 30% al 60% de los clientes a facturación anual (mejora del payback y la caja) y la palanca que tiene el mayor impacto en los unit economics de mi tipo de negocio específico.

7. ERRORES EN EL CÁLCULO E INTERPRETACIÓN DE LOS UNIT ECONOMICS
Lista los seis errores más comunes cuando los equipos de producto y negocio calculan los unit economics: el CAC que no incluye el coste del equipo de ventas y sobreestima la eficiencia de adquisición, el LTV calculado con churn demasiado optimista que da ratios LTV/CAC engañosos, el ratio LTV/CAC calculado con LTV bruto en lugar de LTV de contribución, la confusión entre el payback period simple y el de margen bruto que puede diferir en un 50%, el análisis de unit economics a nivel de producto total que oculta los problemas de unit economics en segmentos específicos y la comparación del LTV/CAC de la empresa con benchmarks del sector sin ajustar por el modelo de negocio, el ticket o la madurez de la empresa.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Calcular, interpretar y mejorar los unit economics del producto digital para evaluar la viabilidad del modelo de negocio a escala.',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Presupuesto de personas y ROI de la inversión en talento',
                'description'       => 'Gestiona el presupuesto de RRHH con rigor financiero: el coste total de contratación, el ROI de la formación y los argumentos cuantitativos que justifican la inversión en personas.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en people analytics y en la gestión financiera de la función de recursos humanos. Necesito que me ayudes a gestionar el presupuesto de personas con rigor financiero y a construir los argumentos cuantitativos que justifican la inversión en talento ante el comité de dirección.

Mi contexto:
- Tipo y tamaño de empresa: [sector, número de empleados]
- Composición del presupuesto de personas: [nóminas, contratación, formación, beneficios, herramientas de RRHH, etc.]
- Métricas de RRHH que se siguen actualmente: [cuáles tienes y cuáles no]
- Mayor reto en la gestión financiera de RRHH: [dificultad para justificar la inversión en formación, coste de rotación que no está cuantificado, presupuesto de contratación que se desvía del plan, etc.]
- Relación con el CFO o la dirección financiera: [fluida / difícil / se percibe RRHH como coste en lugar de inversión]

Con ese contexto, dame:

1. EL COSTE REAL DE CONTRATACIÓN
¿Cómo calculo el coste total de contratación de una posición incluyendo todos los elementos directos e indirectos? Dame la fórmula completa del coste de contratación: los costes directos (headhunter o fee de selección, publicación de ofertas, herramientas de ATS, tiempo del equipo de RRHH en el proceso), los costes indirectos (tiempo del hiring manager y del equipo en entrevistas, coste del período de onboarding hasta la productividad plena, productividad reducida del equipo durante la vacante) y el coste de la posición no cubierta (proyectos retrasados, carga sobre el equipo). Dame la fórmula y los datos de benchmark por tipo de posición.

2. EL COSTE DE LA ROTACIÓN NO DESEADA
¿Cómo calculo el coste real de perder a un empleado de forma que sea un argumento convincente para invertir en retención? Dame el modelo de cálculo del coste de rotación: la suma del coste de salida (prestaciones, proceso de offboarding, backfill del conocimiento), el coste de la vacante, el coste de contratación del sustituto y el coste del período de rampa hasta la productividad plena. Incluye los datos de benchmark del coste de rotación como porcentaje del salario anual según el nivel del puesto y cómo usar este dato para calcular el ROI de las iniciativas de retención.

3. ROI DE LA INVERSIÓN EN FORMACIÓN Y DESARROLLO
¿Cómo calculo el retorno de la inversión en formación de forma que sea defendible ante la dirección financiera? Dame el proceso para medir el ROI de la formación: el modelo de Kirkpatrick aplicado a la evaluación del impacto, cómo cuantificar el impacto en productividad (reducción del tiempo para completar una tarea, reducción de errores, incremento de la capacidad), cómo estimar el impacto en retención (si la formación reduce la rotación en un punto porcentual, cuánto se ahorra en costes de reemplazo) y cómo presentar el análisis de coste-beneficio de un programa de formación específico.

4. EL PRESUPUESTO DE PERSONAS: ESTRUCTURA Y CONTROL
¿Cómo estructura y gestiono el presupuesto de personas de forma rigurosa? Dame el diseño del presupuesto de RRHH: los apartados principales (masa salarial, costes de contratación, formación y desarrollo, beneficios y bienestar, herramientas y sistemas de RRHH), cómo proyectar el gasto por trimestre según el plan de contrataciones, el proceso de control mensual del gasto real vs plan, cómo gestionar las desviaciones (contrataciones que se retrasan o que llegan antes de lo previsto) y cómo presentar el presupuesto de personas de forma que la dirección financiera lo entienda y lo apruebe.

5. PEOPLE ANALYTICS: LAS MÉTRICAS QUE IMPORTAN AL CFO
¿Qué métricas de RRHH debo medir y comunicar regularmente para que la dirección perciba el departamento de personas como un socio estratégico y no como un departamento de coste? Dame el dashboard de people analytics para la dirección: el revenue per employee como indicador de productividad, el coste de personal como porcentaje de los ingresos, la tasa de rotación voluntaria y su coste anualizado, el time to fill de las posiciones críticas y su impacto en los proyectos, el NPS del empleado como predictor del compromiso y la retención y el ROI del presupuesto de formación.

6. JUSTIFICACIÓN DE INVERSIONES EN BIENESTAR Y BENEFICIOS
¿Cómo construyo el argumento financiero para invertir en programas de bienestar, beneficios o mejoras de la experiencia del empleado? Dame el framework de ROI del bienestar: el coste del absentismo y cómo reducirlo con programas de bienestar, el impacto del compromiso del empleado en la productividad (los estudios de Gallup que cuantifican la diferencia entre empleados comprometidos y no comprometidos), el impacto de los beneficios en la capacidad de atracción de talento (cómo reducen el coste de selección y el tiempo de cobertura de vacantes) y cómo presentar el caso de negocio para una inversión específica en bienestar.

7. ERRORES EN LA GESTIÓN FINANCIERA DE RRHH
Lista los seis errores más comunes cuando los equipos de RRHH gestionan su presupuesto y justifican sus inversiones: el presupuesto de contrataciones que no incluye el coste del tiempo del hiring manager y subestima el coste real, la inversión en formación sin métricas de impacto que hace imposible demostrar el retorno, el coste de rotación que no está cuantificado y que impide justificar la inversión en retención, el presupuesto de personas que solo incluye los costes directos y omite los indirectos, la falta de conexión entre las inversiones de RRHH y los objetivos del negocio que lleva a que el presupuesto de personas sea el primero en recortarse en épocas de crisis y la ausencia de un proceso de revisión periódica del presupuesto que permite detectar las desviaciones cuando aún es posible reaccionar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Gestionar el presupuesto de personas con rigor financiero y construir los argumentos cuantitativos que justifican la inversión en talento.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Tesorería y gestión del cash flow',
                'description'       => 'Gestiona la liquidez de la empresa: la previsión de tesorería, la gestión del capital de trabajo y las herramientas que aseguran que la empresa tiene caja suficiente para operar y crecer sin depender de la financiación externa.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en gestión de tesorería y en la planificación de la liquidez empresarial. Necesito que me ayudes a diseñar el sistema de gestión de tesorería de mi empresa para tener visibilidad de la caja en todo momento, anticipar los problemas de liquidez antes de que ocurran y gestionar el capital de trabajo de forma eficiente.

Mi contexto:
- Tipo y tamaño de empresa: [sector, facturación anual aproximada, número de empleados]
- Modelo de cobro y pago habitual: [plazos de cobro de clientes, plazos de pago a proveedores, si hay ingresos recurrentes o estacionales]
- Herramientas de gestión de tesorería actuales: [Excel, ERP, herramienta específica de tesorería, etc.]
- Situación de liquidez actual: [holgada / ajustada / con tensiones puntuales / con línea de crédito activa]
- Mayor problema de tesorería: [sin visibilidad de la caja futura, cobros que se retrasan, pagos concentrados en ciertos meses, dificultad para saber cuánto puedo invertir, etc.]

Con ese contexto, dame:

1. EL MODELO DE PREVISIÓN DE TESORERÍA
¿Cómo construyo el modelo de previsión de tesorería (cash flow forecast) que me da visibilidad de la caja a 13 semanas y a 12 meses? Dame la estructura del modelo: las entradas de caja (cobros de clientes por fecha de cobro estimada, no por fecha de factura), las salidas de caja (nóminas, proveedores, impuestos, cuotas de préstamos, inversiones), el saldo de caja resultante y el colchón de liquidez mínimo necesario para operar con seguridad. Incluye cómo automatizar la actualización del modelo y con qué frecuencia revisarlo.

2. GESTIÓN DEL PERÍODO MEDIO DE COBRO
¿Cómo reduzco el período medio de cobro de mis clientes para liberar caja sin dañar las relaciones comerciales? Dame el proceso completo de gestión del cobro: cómo analizar el aging de las facturas por cliente para identificar los pagadores más lentos, el proceso de recordatorio escalonado (a siete días del vencimiento, en la fecha de vencimiento y a siete, catorce y treinta días de retraso), los argumentos y el tono correcto en cada comunicación, las alternativas para acelerar el cobro (descuento por pronto pago, financiación de facturas con factoring o confirming) y cuándo y cómo gestionar el impago con acciones legales.

3. OPTIMIZACIÓN DEL PERÍODO MEDIO DE PAGO A PROVEEDORES
¿Cómo gestiono los plazos de pago a proveedores para optimizar la caja sin deteriorar las relaciones con mis suministradores clave? Dame el proceso de optimización del pago: cómo negociar plazos más largos con los proveedores sin dañar la relación (cuándo pedirlo, cómo justificarlo), la diferencia entre el plazo legal máximo y el plazo real que puedes negociar en mi sector, cómo priorizar los pagos cuando hay tensión de liquidez (qué pagar primero y qué aplazar) y cómo usar el confirming como herramienta que satisface a ambas partes.

4. GESTIÓN DEL CAPITAL DE TRABAJO (WORKING CAPITAL)
¿Cómo analizo y mejoro el capital de trabajo de mi empresa para reducir las necesidades de financiación del ciclo de explotación? Dame el análisis del capital de trabajo: la fórmula (clientes + stocks - proveedores), cómo interpretar el ciclo de conversión de caja de mi negocio, las palancas para reducir el capital de trabajo necesario (cobrar más rápido, pagar más tarde, gestionar el stock de forma más eficiente) y cómo proyectar las necesidades de capital de trabajo según el plan de crecimiento para saber cuánta financiación adicional voy a necesitar.

5. INSTRUMENTOS DE FINANCIACIÓN DE TESORERÍA
¿Qué instrumentos de financiación a corto plazo están disponibles para cubrir las tensiones de tesorería puntuales y cuál es el coste de cada uno? Dame el análisis de los instrumentos principales: la póliza de crédito (flexibilidad vs coste), el descuento de efectos o factoring (liquidez inmediata de las facturas pendientes de cobro a cambio de un coste), el confirming (herramienta de pago que puede mejorar la relación con proveedores), el préstamo a corto plazo para necesidades puntuales y las líneas de circulante del ICO o equivalentes según el país. Para cada instrumento indica el coste típico, cuándo es adecuado y cuándo no.

6. ALERTAS Y PROTOCOLO DE CRISIS DE LIQUIDEZ
¿Cómo configuro un sistema de alertas que me avise antes de que haya una crisis de liquidez y cuál es el protocolo de respuesta si las alertas se activan? Dame el diseño del sistema de alertas: los umbrales de alerta temprana (caja proyectada a 30, 60 y 90 días por debajo del mínimo operativo), el protocolo de respuesta en cada nivel de alerta (ajuste de gastos discrecionales, activación de la línea de crédito, comunicación a socios o inversores, negociación con proveedores y clientes) y cómo preparar el plan de contingencia de liquidez antes de que sea necesario usarlo.

7. ERRORES EN LA GESTIÓN DE TESORERÍA
Lista los seis errores más comunes en la gestión de tesorería de pymes y empresas en crecimiento: la confusión entre beneficio contable y caja disponible que lleva a decisiones de inversión o distribución basadas en datos equivocados, la falta de previsión de tesorería que hace que los problemas de liquidez sean sorpresas en lugar de situaciones anticipadas, el cobro reactivo que no tiene proceso sistemático de seguimiento de impagados, la ausencia de un colchón de liquidez mínimo que hace al negocio vulnerable a cualquier imprevisto, el uso de la caja operativa para financiar inversiones a largo plazo sin la financiación adecuada y la gestión de tesorería delegada completamente en el gestor externo sin visibilidad interna del director financiero o del CEO.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar el sistema de gestión de tesorería que asegura visibilidad de la caja en todo momento y anticipa los problemas de liquidez antes de que ocurran.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Honorarios y gestión financiera del despacho',
                'description'       => 'Gestiona la economía del despacho de abogados: el sistema de honorarios, la facturación por horas vs. cuota fija y los KPIs financieros que permiten saber si el despacho es rentable proyecto a proyecto.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en gestión financiera y económica de despachos de abogados. Necesito que me ayudes a diseñar el sistema de honorarios, la estructura de facturación y los KPIs financieros del despacho para mejorar la rentabilidad y la previsibilidad de los ingresos.

Mi contexto:
- Tipo de despacho: [individual, pequeño despacho generalista, despacho boutique especializado, mediana firma, etc.]
- Áreas de práctica principales: [mercantil, laboral, fiscal, litigación, M&A, etc.]
- Modelo de facturación actual: [por horas, cuota fija, por actuación, mixto]
- Número de abogados y estructura de equipo: [socios, asociados, abogados junior, etc.]
- Mayor problema económico actual: [rentabilidad baja por asunto, ingresos irregulares, clientes que no pagan, dificultad para fijar los honorarios, falta de visibilidad financiera, etc.]

Con ese contexto, dame:

1. SISTEMAS DE HONORARIOS: VENTAJAS Y DESVENTAJAS DE CADA MODELO
Dame el análisis completo de los modelos de facturación disponibles para un despacho de abogados: la tarifa por horas (el modelo tradicional y sus problemas: ineficiencia incentivada, dificultad de presupuesto para el cliente, fricción en la relación), la cuota fija por asunto o por servicio (previsibilidad para el cliente y para el despacho, pero con riesgo de infraestimación del trabajo), el abono mensual o retainer (ideal para clientes con necesidades recurrentes), el modelo de éxito o contingencia (alto riesgo, alto retorno potencial), el modelo de valor percibido (value-based) y los modelos híbridos. Para cada uno indica cuándo es adecuado según el tipo de asunto y el perfil del cliente.

2. TARIFA HORARIA: CÓMO FIJARLA Y ACTUALIZARLA
Si uso la facturación por horas, ¿cómo fijo la tarifa horaria correcta que sea competitiva y rentable al mismo tiempo? Dame el proceso para calcular la tarifa: el coste horario real del abogado (salario, cargas sociales, porción de los costes de estructura, herramientas), el margen objetivo del despacho, el benchmark de tarifas en el mercado por nivel y por especialización, cuándo y cómo actualizar las tarifas y cómo comunicar una subida de tarifa a los clientes actuales sin generar fricciones.

3. PRESUPUESTO DE HONORARIOS FIJOS: CÓMO ESTIMARLOS SIN PERDER DINERO
¿Cómo elaboro presupuestos de honorarios fijos por asunto de forma que cubran el coste real del trabajo sin infraestimar las horas? Dame el proceso de estimación: la descomposición del asunto en fases y tareas, la estimación de horas por fase con buffer, la identificación de los riesgos que pueden incrementar el alcance, cómo comunicar al cliente las condiciones en que el presupuesto fijo puede revisarse y el seguimiento del tiempo real vs estimado para aprender de cada asunto y mejorar las estimaciones futuras.

4. KPIs FINANCIEROS DEL DESPACHO
¿Qué métricas financieras debe monitorizar un despacho de abogados para saber si está siendo rentable? Dame el dashboard financiero del despacho: el ratio de utilización (horas facturables sobre horas disponibles), el realization rate (honorarios efectivamente cobrados sobre honorarios emitidos), el lock-up days (días desde la prestación del servicio hasta el cobro), el profit per equity partner como indicador de rentabilidad final, el cost per hour y el revenue per lawyer y las métricas de concentración de clientes (qué porcentaje de los ingresos representa el top 10 de clientes).

5. GESTIÓN DE COBROS EN EL DESPACHO
¿Cómo mejoro el proceso de cobro del despacho para reducir el retraso en el pago de honorarios y los impagados? Dame el sistema de gestión de cobros: la estructura de facturación que minimiza el riesgo (anticipos, facturación por hitos en asuntos largos, facturación mensual en retainers), el proceso de seguimiento de facturas vencidas (quién lo hace, cuándo y con qué tono), cómo gestionar la relación con el cliente cuando hay retraso en el pago sin poner en riesgo la continuidad del asunto y las herramientas jurídicas disponibles para el cobro de honorarios impagados (monitorio, jura de cuentas).

6. RENTABILIDAD POR ASUNTO Y POR CLIENTE
¿Cómo analizo la rentabilidad de los asuntos y de los clientes del despacho para tomar mejores decisiones de aceptación de encargos y de asignación del equipo? Dame el proceso de análisis de rentabilidad: cómo calcular el margen real de un asunto cerrado (honorarios cobrados menos las horas invertidas valoradas al coste), cómo identificar los tipos de asunto y los clientes sistemáticamente rentables frente a los que consumen recursos sin retorno suficiente, cómo usar ese análisis para definir el perfil de cliente y de asunto al que el despacho quiere dirigirse y cómo incorporar los datos de rentabilidad histórica en las decisiones de aceptación de nuevos encargos.

7. ERRORES EN LA GESTIÓN ECONÓMICA DEL DESPACHO
Lista los seis errores más comunes en la gestión económica de despachos de abogados: el despacho que no tiene métricas de rentabilidad por asunto y no sabe si está ganando o perdiendo dinero en cada encargo, la tarifa horaria fijada por debajo del coste real por no incluir todos los costes de estructura, los presupuestos fijos sin buffer que sistemáticamente se incumplen y generan trabajo no cobrado, la falta de un proceso de cobro sistemático que lleva a que los clientes paguen cuando pueden y no cuando deben, la concentración excesiva de ingresos en pocos clientes que hace al despacho vulnerable a la pérdida de uno de ellos y la ausencia de seguimiento del tiempo en despachos que facturan a cuota fija, que impide saber si la tarifa es rentable.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar el sistema de honorarios y los KPIs financieros del despacho de abogados para mejorar la rentabilidad y la previsibilidad de los ingresos.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Revenue impact del equipo de CS',
                'description'       => 'Mide y comunica el impacto financiero del equipo de customer success: el coste del churn, el valor de la expansión y el ROI del equipo que demuestra que invertir en CS es más rentable que invertir en nuevas ventas.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en Customer Success y en la medición del impacto financiero de la función de CS. Necesito que me ayudes a cuantificar y comunicar el impacto económico del equipo de Customer Success ante la dirección y ante el equipo financiero, de forma que la inversión en CS se perciba como una palanca de crecimiento y no como un coste de soporte.

Mi contexto:
- Tipo de producto o servicio: [SaaS, plataforma, servicio profesional recurrente, etc.]
- Tamaño de la cartera de clientes y del equipo de CS: [número de cuentas y de CSMs]
- Métricas de CS que sigues actualmente: [NRR, churn rate, expansion revenue, NPS, etc. con valores si los tienes]
- Modelo de CS: [high-touch, mid-touch, tech-touch, o mix]
- Mayor reto para justificar el valor del equipo de CS internamente: [la dirección lo ve como coste de soporte, difícil demostrar la causalidad entre las acciones de CS y el churn, el equipo de ventas tiene más visibilidad del impacto en el negocio, etc.]

Con ese contexto, dame:

1. EL COSTE DEL CHURN: CUANTIFICARLO PARA HACERLO VISIBLE
¿Cómo calculo el coste real del churn para mi negocio de forma que sea un argumento convincente para invertir en retención? Dame el modelo de cálculo del impacto financiero del churn: el impacto directo en ARR (los ingresos perdidos en el año por los clientes que se van), el impacto en el LTV (los ingresos futuros que se pierden al perder un cliente con varios años de recorrido potencial), el coste de reemplazar al cliente perdido (el CAC del cliente nuevo que hay que adquirir para compensar la pérdida) y el impacto en la valoración de la empresa (cómo el churn afecta al múltiplo de ARR en una empresa SaaS). Dame la fórmula y un ejemplo numérico con datos hipotéticos para mi tipo de negocio.

2. EL VALOR DE LA EXPANSIÓN: CS COMO CANAL DE INGRESOS
¿Cómo mido y comunico el impacto del equipo de CS en la generación de ingresos de expansión (upsell y cross-sell)? Dame el framework de medición de la expansión: cómo separar la expansión orgánica (el cliente que crece por su cuenta) de la expansión atribuible a las acciones del CSM (el upsell resultado de una conversación proactiva o de un playbook de expansión), cómo calcular el revenue de expansión atribuido al equipo de CS por trimestre y por año, cómo compararlo con el coste del equipo para mostrar el ROI directo y cómo presentar el NRR (Net Revenue Retention) como la métrica que integra retención y expansión en un solo número.

3. EL ROI DEL EQUIPO DE CS
¿Cómo calculo el ROI del equipo de Customer Success de forma que sea comparable con el ROI de otras funciones como marketing o ventas? Dame el modelo de cálculo del ROI de CS: el numerador (churn evitado en ARR + expansión atribuida al CS + ahorro en soporte reactivo por la acción proactiva del CS), el denominador (coste total del equipo de CS incluyendo salario, herramientas y formación), el cociente y cómo interpretarlo. Incluye cómo construir el argumento de que retener a un cliente cuesta menos que adquirir uno nuevo en mi tipo de negocio.

4. CUSTOMER SUCCESS QUALIFIED LEADS (CSQL): CS COMO FUENTE DE PIPELINE
¿Cómo mido el impacto del equipo de CS en la generación de nuevos negocios a través de referencias, expansión a nuevas unidades de negocio y casos de éxito que impulsan el ciclo de ventas? Dame el framework de Customer Success Qualified Leads: cómo identificar y registrar las referencias generadas por el equipo de CS, cómo atribuir los deals cerrados que provienen de referencias de clientes actuales y cómo calcular el valor de ese canal en términos de CAC reducido y de tasa de conversión más alta que los leads de otros canales.

5. EL DASHBOARD FINANCIERO DE CS PARA LA DIRECCIÓN
¿Cómo diseño el informe mensual o trimestral del equipo de CS que la dirección entiende y que posiciona al equipo como motor de crecimiento? Dame el diseño del dashboard financiero de CS: el NRR como la métrica estrella, el ARR retenido y el ARR expandido por el equipo en el período, el churn rate con su impacto en euros, el gross churn vs el net churn, la cobertura de la cartera por CSM, el revenue at risk (ARR en riesgo según el health score) y el pipeline de expansión identificado por el equipo de CS. Incluye cómo presentar la evolución trimestral de cada métrica y el objetivo vs el resultado.

6. ADVOCACY Y BRAND VALUE: EL IMPACTO DIFÍCIL DE MEDIR
¿Cómo incluyo en el análisis del impacto de CS los beneficios más difíciles de cuantificar como el boca a boca, las reseñas positivas y el employer brand que genera trabajar con clientes satisfechos? Dame el framework para estimar el valor de los beneficios intangibles de CS: el valor económico de las reseñas positivas en G2 o Capterra para el ciclo de ventas, el impacto de los Net Promoter Scores altos en la tasa de referidos, cómo asignar un valor monetario al programa de customer advocacy y por qué los clientes satisfechos son más baratos de atender que los insatisfechos (menos tickets, menos escalaciones, menos tiempo del equipo de soporte).

7. ERRORES EN LA MEDICIÓN DEL IMPACTO FINANCIERO DE CS
Lista los seis errores más comunes cuando los equipos de CS intentan demostrar su impacto financiero: el análisis del churn que mira la tasa porcentual sin traducirla a euros y que no conecta con la dirección financiera, la atribución de toda la expansión al equipo de CS cuando parte es orgánica o resultado de las acciones de marketing, la ausencia de un modelo de contrafactual que muestre qué hubiera pasado sin el equipo de CS, la comparación del coste de CS con la adquisición sin incluir el LTV del cliente retenido, la falta de separación entre el impacto del high-touch CS y el tech-touch que no permite saber cuál es más eficiente y la presentación del impacto de CS en métricas de RRHH (NPS, satisfacción) en lugar de en métricas financieras (ARR, NRR, revenue at risk) ante un auditorio financiero.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Cuantificar y comunicar el impacto financiero del equipo de CS para posicionarlo como motor de crecimiento y no como coste de soporte.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Gestión financiera del freelance: impuestos, ahorros y pensión',
                'description'       => 'Los aspectos financieros que nadie enseña al freelance: el IVA trimestral, el IRPF, el ahorro para la pensión sin cotización y la separación de cuentas que mantiene la salud financiera del negocio.',
                'prompt_content'    => <<<'PROMPT'
Eres un asesor financiero y fiscal especializado en freelancers y trabajadores autónomos en España. Necesito que me ayudes a entender y gestionar los aspectos financieros de mi negocio freelance: los impuestos que tengo que pagar, cómo planificar el ahorro y la pensión y cómo organizar las finanzas para que el negocio sea sostenible a largo plazo.

Mi contexto:
- Tipo de actividad freelance: [describe brevemente qué servicio ofreces]
- Facturación anual aproximada o esperada: [indica el rango o el importe]
- Situación actual: [recién dado de alta como autónomo / llevas varios años / piensas darte de alta]
- Régimen fiscal: [estimación directa simplificada / módulos / si no lo sabes dímelo]
- Mayor preocupación financiera: [no entender qué impuestos pago, los trimestres me pillan sin caja, no sé cómo ahorrar para la jubilación, mezclo las cuentas del negocio y las personales, etc.]

Con ese contexto, dame:

1. LOS IMPUESTOS DEL AUTÓNOMO: EL MAPA COMPLETO
Dame el mapa completo de los impuestos que tiene que gestionar un autónomo en España: el IVA (cuándo se devenga, cuándo se declara, cómo funciona la compensación del IVA soportado), el IRPF en los pagos fraccionados trimestrales (el modelo 130 o 131 según el régimen), la declaración anual del IRPF y cómo se integra con los pagos fraccionados ya realizados, el modelo 347 de operaciones con terceros y cuándo está obligado a presentarlo. Para cada impuesto indica la fecha de presentación y las consecuencias de no hacerlo a tiempo.

2. EL CALENDARIO FISCAL DEL AUTÓNOMO
Dame el calendario fiscal anual completo de un autónomo español: todas las obligaciones fiscales ordenadas por mes, los modelos que hay que presentar en cada período, los importes que se calculan en cada declaración y los plazos exactos de presentación e ingreso. Incluye también los modelos informativos (modelo 190, modelo 347) que se presentan una vez al año y cuándo vencen.

3. CÓMO SEPARAR LAS FINANZAS DEL NEGOCIO DE LAS PERSONALES
¿Cómo organizo mis cuentas bancarias para que las finanzas del negocio y las personales estén separadas y pueda gestionar los impuestos sin sorpresas? Dame el sistema de cuentas recomendado: la cuenta del negocio donde entran todos los cobros de clientes, la cuenta de impuestos donde apartas un porcentaje de cada cobro para los pagos trimestrales, la cuenta personal donde me transfiero el salario del negocio y cómo calcular cuánto transferirme cada mes para vivir de forma que siempre haya caja suficiente para pagar los impuestos cuando lleguen.

4. EL PORCENTAJE QUE HAY QUE APARTAR PARA IMPUESTOS
¿Qué porcentaje de cada factura cobrada debo apartar para los impuestos de forma que no me pillen los trimestres sin caja? Dame el cálculo según mi nivel de ingresos: la retención de IRPF si trabajo con clientes que me aplican retención (cuándo se aplica y cuándo no), la estimación del pago fraccionado trimestral de IRPF en estimación directa (el 20% del rendimiento neto de cada trimestre), la cuota de autónomos mensual y cómo incluirla en el cálculo y el IVA que debo declarar trimestralmente. Dame el porcentaje total que debo apartar sobre cada cobro bruto según distintos niveles de facturación.

5. PLANIFICACIÓN FISCAL PARA REDUCIR LA CARGA IMPOSITIVA
¿Qué gastos puedo deducir como autónomo para reducir legalmente la base imponible del IRPF? Dame la guía de gastos deducibles para un freelance: los gastos de suministros del hogar si trabajo desde casa (la regla del 30% de la superficie de la parte del hogar afectada a la actividad), la amortización del equipo informático, los gastos de formación y suscripciones profesionales, los gastos de marketing y publicidad, el coche y la dificultad de su deducibilidad y los gastos financieros. Incluye qué documentación debo tener para justificar cada deducción en caso de inspección.

6. AHORRO PARA LA JUBILACIÓN SIN COTIZAR AL MÁXIMO
¿Cómo planifico el ahorro para la jubilación si la pensión que voy a recibir como autónomo va a ser baja o muy incierta? Dame el plan de ahorro para la jubilación del freelance: las opciones disponibles (plan de pensiones individual con deducción fiscal, PIAS, seguro de ahorro, inversión en fondos indexados, etc.), cuánto ahorrar cada mes según la edad y el nivel de ingresos para llegar a la jubilación con un capital suficiente, el impacto fiscal de cada vehículo de ahorro y cómo integrar el ahorro para la jubilación en el sistema de cuentas bancarias del negocio de forma que sea automático y no dependa de la disciplina mensual.

7. ERRORES FINANCIEROS MÁS COSTOSOS DEL FREELANCE
Lista los seis errores financieros más comunes de los freelancers en España: mezclar las cuentas personales y del negocio que impide saber en todo momento si el negocio es rentable, no apartar los impuestos desde el primer cobro y llegarse a los trimestres sin caja, deducir gastos personales como gastos del negocio sin los requisitos de afectación que puede generar una sanción en la inspección, no tener un fondo de emergencia equivalente a tres o seis meses de gastos que proteja ante la pérdida de un cliente importante, no planificar la jubilación hasta los cuarenta y cinco años cuando el interés compuesto ya ha perdido sus mejores años y no revisar la cotización de autónomos al inicio de cada año natural para ajustarla a los ingresos reales previstos y evitar la regularización a fin de año.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Entender y gestionar los impuestos, el ahorro y la planificación financiera del negocio freelance en España.',
                'vote_score'        => 50,
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
