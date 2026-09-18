<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills344Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Análisis de CAC y rentabilidad de campañas de marketing',
                'description'      => 'El coste de adquisición de cliente es la métrica que conecta el gasto en marketing con la salud financiera del negocio. Este prompt ayuda a calcular, interpretar y optimizar el CAC por canal y campaña. Obtendrás un marco de análisis que te permite tomar decisiones de inversión en marketing basadas en datos de rentabilidad real.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing analytics y análisis de rentabilidad de campañas. Necesito tu ayuda para construir un sistema de análisis de coste de adquisición de cliente (CAC) que me permita evaluar la rentabilidad de mis campañas y tomar decisiones de inversión fundamentadas.

**Mi situación:**
- Modelo de negocio: [SaaS / E-commerce / Marketplace / B2B / Otro]
- Canales de marketing activos: [Google Ads / Meta Ads / LinkedIn / SEO / Email / Otro]
- Ticket medio o ARR por cliente: [CANTIDAD]
- LTV estimado: [CANTIDAD o "no lo tenemos calculado"]
- Datos disponibles: [CRM / Google Analytics / Plataformas de ads / Hojas de cálculo]

**Lo que necesito:**

1. **Marco de cálculo de CAC por canal**
   - Fórmula de CAC correcta: qué costes incluir y cuáles excluir
   - CAC blended vs. CAC por canal: cuándo usar cada uno y por qué importa la distinción
   - Atribución de conversiones en entornos multicanal: modelos y limitaciones
   - Cómo tratar los costes de equipo interno en el cálculo del CAC

2. **Análisis de rentabilidad por campaña**
   - Ratio LTV/CAC: cómo calcularlo, qué valores son saludables por modelo de negocio
   - Periodo de payback del CAC: qué significa y cómo reducirlo
   - Margen de contribución por canal de adquisición
   - Cómo comparar campañas con distintos objetivos (awareness vs. conversión)

3. **Segmentación del análisis**
   - CAC por segmento de cliente: por qué es más útil que el CAC agregado
   - Análisis de cohortes de adquisición: cómo leer la retención ligada al canal de origen
   - Identificación de los segmentos más rentables por canal de captación

4. **Optimización del CAC**
   - Palancas para reducir el CAC en cada canal
   - Cómo decidir cuándo escalar un canal y cuándo pausarlo
   - Impacto del quality score, el targeting y el creative en el CAC
   - Ciclo de optimización: con qué frecuencia revisar y ajustar

5. **Reporte de rentabilidad para dirección**
   - Dashboard de CAC y rentabilidad: métricas clave y visualizaciones
   - Cómo comunicar el análisis de rentabilidad a stakeholders no técnicos
   - Señales de alerta que deben disparar una revisión de la estrategia de marketing

6. **Modelado de escenarios**
   - Cómo simular el impacto de cambios en el CAC sobre la rentabilidad del negocio
   - Punto de equilibrio de inversión en marketing: cuándo el CAC es insostenible
   - Proyección de rentabilidad según diferentes hipótesis de LTV y churn

**Formato de respuesta:**
Incluye fórmulas concretas con ejemplos numéricos. Proporciona una plantilla de hoja de cálculo que pueda usar para el análisis. Señala los errores más comunes en el cálculo del CAC y cómo evitarlos. Adapta las recomendaciones a mi modelo de negocio cuando te lo proporcione.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Calcular y optimizar el CAC por canal para tomar decisiones de inversión en marketing',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Unit economics para productos de software y SaaS',
                'description'      => 'Entender los unit economics de un producto de software permite tomar decisiones de arquitectura, pricing y escalabilidad con base financiera sólida. Este prompt ayuda a calcular y optimizar las métricas económicas unitarias de un producto digital. Obtendrás un marco que conecta las decisiones técnicas con su impacto en la rentabilidad del negocio.',
                'prompt_content'   => <<<'EOT'
Eres un experto en economía de producto y unit economics para empresas de software. Necesito tu ayuda para construir el modelo de unit economics de mi producto digital y entender cómo las decisiones técnicas afectan a la rentabilidad unitaria.

**Contexto del producto:**
- Tipo de producto: [SaaS B2B / SaaS B2C / API / Marketplace / App móvil]
- Modelo de pricing: [Suscripción mensual/anual / Usage-based / Freemium / Licencia]
- Ticket medio: [CANTIDAD mensual o anual]
- Fase actual: [Pre-revenue / Early stage / Growth / Scale]
- Número de clientes/usuarios activos: [NÚMERO]

**Lo que necesito:**

1. **Métricas de unit economics fundamentales**
   - MRR/ARR: cómo calcularlo correctamente y qué variantes existen (new, expansion, contraction, churn)
   - Gross margin de un producto SaaS: qué costes van en el COGS y cuáles son SG&A
   - LTV: fórmulas, supuestos y cómo cambiar el modelo según la tasa de churn
   - CAC: qué incluir para un producto de software (ventas, marketing, onboarding)
   - Ratio LTV/CAC y payback period: valores de referencia por segmento y modelo

2. **Análisis de costes unitarios de infraestructura**
   - Coste por usuario activo de infraestructura cloud: cómo calcularlo y monitorizarlo
   - Impacto de las decisiones de arquitectura en el coste unitario (monolito vs. microservicios, serverless vs. instancias fijas)
   - Cómo optimizar el gasto en cloud sin degradar la experiencia del usuario
   - Herramientas de FinOps para equipos de ingeniería

3. **Análisis de cohortes y retención**
   - Construcción de una tabla de cohortes de retención de ingresos (net revenue retention)
   - Diferencia entre gross churn y net churn: cuándo importa cada uno
   - Logo churn vs. revenue churn: cuál es más relevante según el modelo de negocio
   - Cómo usar el análisis de cohortes para detectar problemas de product-market fit

4. **Modelo financiero de unit economics**
   - Plantilla de modelo de unit economics para un producto SaaS
   - Supuestos clave y cómo validarlos con datos reales
   - Análisis de sensibilidad: qué palancas tienen mayor impacto en la rentabilidad unitaria
   - Cuándo el modelo de unit economics sugiere que es momento de escalar

5. **Unit economics para decisiones de producto**
   - Cómo evaluar el impacto económico de una nueva funcionalidad
   - Pricing strategy: cómo usar los unit economics para fijar el precio óptimo
   - Análisis de segmentos: qué tipos de cliente tienen mejores unit economics
   - Decisión de freemium: cuándo tiene sentido económicamente y cuándo no

6. **Reporting de unit economics para inversores**
   - Métricas que los inversores esperan ver y en qué formato
   - Cómo presentar unit economics en diferentes fases de la empresa
   - Red flags en los unit economics que generan preguntas en due diligence

**Formato de respuesta:**
Incluye fórmulas con ejemplos numéricos concretos. Proporciona una plantilla de modelo de unit economics que pueda adaptar. Señala las diferencias más relevantes según el modelo de pricing. Incluye benchmarks de industria cuando sea relevante.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir el modelo de unit economics de un producto SaaS y tomar decisiones basadas en rentabilidad',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Análisis de rentabilidad de proyectos de diseño y agencias creativas',
                'description'      => 'Muchos diseñadores y agencias creativas subestiman el coste real de sus proyectos, lo que erosiona la rentabilidad sin que sean conscientes de ello. Este prompt ayuda a calcular la rentabilidad real de proyectos de diseño y establecer precios que garanticen márgenes saludables. Obtendrás un sistema de análisis financiero adaptado a la realidad de los estudios y agencias creativas.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión financiera de agencias creativas y estudios de diseño. Necesito tu ayuda para construir un sistema de análisis de rentabilidad de proyectos de diseño que me permita entender cuánto gano realmente en cada proyecto y tomar decisiones de pricing más inteligentes.

**Mi situación:**
- Tipo de entidad: [Freelancer / Estudio / Agencia de diseño]
- Número de proyectos activos simultáneos: [NÚMERO]
- Tipos de proyectos principales: [Branding / UX/UI / Motion / Packaging / Otro]
- Modelo de pricing actual: [Por hora / Por proyecto / Retainer mensual / Mixto]
- Margen estimado actual: [PORCENTAJE o "no lo tengo calculado"]

**Lo que necesito:**

1. **Cálculo de coste real por proyecto**
   - Coste hora interno: cómo calcularlo incluyendo todos los costes (salario, seguridad social, herramientas, espacio de trabajo, formación)
   - Horas invertidas por proyecto: cómo registrarlas de forma realista sin sobreestimar la capacidad
   - Costes directos de proyecto: subcontrataciones, licencias, fotografía, impresión
   - Costes indirectos: overhead que debe repartirse entre proyectos

2. **Análisis de margen por tipo de proyecto**
   - Margen bruto vs. margen neto: qué mide cada uno y cuál es más útil para decisiones
   - Cómo comparar la rentabilidad de proyectos con distinto alcance y duración
   - Identificación de los tipos de proyecto que generan más rentabilidad
   - Análisis de scope creep: cómo medir su impacto en el margen

3. **Pricing basado en rentabilidad**
   - Cómo calcular el precio mínimo de un proyecto para garantizar un margen objetivo
   - Diferencia entre precio basado en coste, en valor y en mercado: cuándo usar cada uno
   - Ajuste de precios según tipo de cliente, complejidad y urgencia
   - Cómo comunicar incrementos de precio a clientes existentes

4. **Control de rentabilidad durante el proyecto**
   - Sistema de seguimiento de horas por fase de proyecto
   - Alertas de desviación: cuándo un proyecto está consumiendo más recursos de los previstos
   - Decisión de absorber el scope creep vs. facturar adicional: criterios y cómo comunicarlo

5. **Retainer mensual: análisis de rentabilidad**
   - Cómo fijar el precio de un retainer mensual de forma rentable
   - Seguimiento de rentabilidad de retainers a lo largo del tiempo
   - Cuándo renovar, renegociar o finalizar un retainer

6. **Reporte financiero para estudio de diseño**
   - Métricas clave de rentabilidad para un estudio o agencia creativa
   - Facturación por diseñador: cómo calcular la productividad del equipo
   - Proyección de ingresos y rentabilidad para los próximos meses

**Formato de respuesta:**
Incluye fórmulas con ejemplos numéricos. Proporciona una plantilla de análisis de rentabilidad por proyecto que pueda usar en una hoja de cálculo. Señala los errores más comunes de pricing en diseño y cómo corregirlos. Adapta las recomendaciones a mi tipo de entidad y modelo de pricing.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Calcular la rentabilidad real de proyectos de diseño y optimizar el pricing',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Análisis de margen y rentabilidad por cuenta en ventas B2B',
                'description'      => 'No todas las cuentas son igualmente rentables aunque tengan un tamaño similar. Analizar el margen real por cuenta permite priorizar recursos comerciales en los clientes que generan más valor. Este prompt ayuda a construir un análisis de rentabilidad por cuenta que guía las decisiones de inversión comercial. Obtendrás un marco para identificar tus mejores y peores cuentas desde una perspectiva financiera.',
                'prompt_content'   => <<<'EOT'
Eres un experto en análisis de ventas y rentabilidad de cuentas en entornos B2B. Necesito tu ayuda para construir un sistema de análisis de rentabilidad por cuenta que me permita priorizar los recursos comerciales de forma más inteligente.

**Contexto:**
- Modelo de negocio: [SaaS / Servicios / Productos físicos / Consultoría]
- Número de cuentas activas: [NÚMERO]
- Rango de ticket por cuenta: [MÍNIMO - MÁXIMO]
- Ciclo de venta: [DURACIÓN MEDIA]
- Acceso a datos: [CRM / ERP / Hojas de cálculo / Limitado]

**Lo que necesito:**

1. **Cálculo de rentabilidad real por cuenta**
   - Ingresos por cuenta: MRR/ARR, ingresos únicos, upsells y renovaciones
   - Coste de servicio por cuenta (Cost to Serve): tiempo de CS, soporte, onboarding, customizaciones
   - Coste de adquisición por cuenta: atribución del gasto comercial y de marketing
   - Margen bruto por cuenta: ingresos menos coste directo de entrega

2. **Segmentación por rentabilidad**
   - Matriz de cuentas por ingresos vs. rentabilidad: cómo interpretarla y qué acciones tomar en cada cuadrante
   - Identificación de cuentas grandes pero poco rentables: causas comunes y cómo abordarlas
   - Identificación de cuentas pequeñas pero muy rentables: cómo escalarlas
   - Cuentas en zona gris: criterios para decidir si invertir o dejar ir

3. **Análisis de LTV por segmento**
   - Cálculo de LTV ajustado por coste de servicio (no solo por ingresos)
   - Cohortes de cuentas por segmento: diferencias en retención y expansión
   - Identificación del perfil de cliente ideal (ICP) desde una perspectiva de rentabilidad real
   - Señales de que una cuenta va a deteriorar su rentabilidad antes de que lo haga

4. **Pricing y renegociación basada en rentabilidad**
   - Cuándo y cómo renegociar precios con cuentas poco rentables
   - Cómo comunicar incrementos de precio a cuentas de alto valor
   - Descuentos: impacto en rentabilidad y criterios para concederlos
   - Modelo de pricing por volumen: cómo diseñarlo para que no destruya margen

5. **Optimización del tiempo comercial**
   - Cómo asignar el tiempo de los CSMs y Account Executives según rentabilidad de cuenta
   - Modelo de cobertura diferenciada: high-touch vs. low-touch vs. self-serve según rentabilidad
   - Criterios para escalar una cuenta del tier low-touch al high-touch

6. **Dashboard de rentabilidad de cartera**
   - Métricas clave de rentabilidad de cartera para el director de ventas
   - Señales de deterioro de rentabilidad que deben activar una acción comercial
   - Reporte de rentabilidad para dirección general

**Formato de respuesta:**
Incluye fórmulas con ejemplos numéricos. Proporciona una plantilla de análisis de rentabilidad por cuenta. Señala las palancas con mayor impacto en la rentabilidad de la cartera. Adapta las recomendaciones a mi modelo de negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un análisis de rentabilidad por cuenta para optimizar la inversión comercial',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Unit economics para decisiones de producto y roadmap',
                'description'      => 'Las decisiones de roadmap tienen un impacto directo en los unit economics del negocio, aunque ese vínculo no siempre es visible para el equipo de producto. Este prompt ayuda a conectar las decisiones de producto con las métricas financieras unitarias. Obtendrás un marco para evaluar funcionalidades, modelos de pricing y apuestas de crecimiento desde una perspectiva económica.',
                'prompt_content'   => <<<'EOT'
Eres un experto en estrategia de producto y unit economics. Necesito tu ayuda para construir un marco que me permita tomar decisiones de roadmap y estrategia de producto con base en su impacto en los unit economics del negocio.

**Contexto:**
- Tipo de producto: [SaaS B2B / SaaS B2C / Marketplace / App móvil / Plataforma]
- Fase del producto: [Pre-PMF / Post-PMF / Growth / Escala]
- Modelo de monetización: [Suscripción / Usage-based / Freemium / Transaccional]
- Métricas actuales disponibles: [MRR / Churn / CAC / LTV / NPS / Retención D7/D30]
- Mayor pregunta sin responder: [DESCRIBE]

**Lo que necesito:**

1. **Marco de unit economics para PMs**
   - Las 5-7 métricas de unit economics que todo PM debe entender y monitorizar
   - Cómo leer un modelo de unit economics sin ser financiero
   - Relación entre métricas de producto (retención, activación, engagement) y unit economics
   - Cuándo los unit economics son el input principal de una decisión de roadmap

2. **Evaluación de funcionalidades desde una perspectiva económica**
   - Framework para estimar el impacto económico de una funcionalidad antes de construirla
   - Cómo cuantificar el impacto en retención, expansión o reducción de churn de una feature
   - Impacto de la deuda técnica en los unit economics: cómo argumentarlo ante dirección
   - Cómo priorizar entre funcionalidades de retención vs. adquisición desde una perspectiva de unit economics

3. **Decisiones de pricing y empaquetado**
   - Cómo usar los unit economics para evaluar un cambio de modelo de pricing
   - Análisis de valor por plan: qué features justifican el precio de cada tier
   - Impacto del freemium en los unit economics: cuándo tiene sentido y cuándo no
   - Experimentos de pricing: cómo diseñarlos y qué métricas medir

4. **Análisis de segmentos de usuario**
   - Cómo identificar qué segmentos de usuario tienen mejores unit economics
   - Diferencias en LTV, CAC y coste de servicio entre segmentos
   - Cómo usar este análisis para refinar el ICP y las decisiones de roadmap
   - Impacto de la segmentación en las decisiones de go-to-market

5. **Modelos de crecimiento y sus implicaciones en unit economics**
   - Growth loops: cómo evaluar su impacto en el CAC y la escala
   - Viral coefficient: qué significa y cómo se traduce en unit economics
   - Crecimiento PLG (product-led growth) vs. SLG (sales-led growth): diferencias en unit economics
   - Cuándo es el momento de pasar de un modelo a otro

6. **Comunicación de unit economics al equipo de producto**
   - Cómo presentar el impacto económico de las decisiones de roadmap al equipo
   - Dashboard de métricas de producto vinculadas a unit economics para el squad
   - Cómo alinear al equipo en torno a métricas que conecten impacto de producto con negocio

**Formato de respuesta:**
Incluye frameworks con ejemplos concretos. Señala las palancas de producto con mayor impacto en los unit economics. Diferencia las recomendaciones según la fase del producto. Incluye ejemplos reales de cómo cambios de producto afectaron a los unit economics.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Conectar las decisiones de roadmap con los unit economics del negocio',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Análisis del coste por contratación y ROI de las políticas de RRHH',
                'description'      => 'El departamento de Recursos Humanos gestiona inversiones significativas cuyo retorno rara vez se mide con rigor. Este prompt ayuda a calcular el coste real de la contratación, la rotación y las políticas de retención, y a expresar su impacto en términos financieros. Obtendrás un marco de análisis que permite tomar decisiones de RRHH basadas en rentabilidad.',
                'prompt_content'   => <<<'EOT'
Eres un experto en HR analytics y análisis financiero de políticas de recursos humanos. Necesito tu ayuda para construir un sistema de análisis del coste y el ROI de las principales decisiones de RRHH, de manera que pueda justificar las inversiones en talento con datos financieros sólidos.

**Contexto:**
- Tamaño de la empresa: [NÚMERO] empleados
- Sector: [SECTOR]
- Tasa de rotación anual actual: [PORCENTAJE]
- Salario medio de la empresa: [CANTIDAD]
- Herramientas disponibles: [ATS / HRIS / Hojas de cálculo]

**Lo que necesito:**

1. **Coste real de contratación**
   - Componentes del coste por contratación: tiempo interno, agencias, job boards, entrevistas, onboarding
   - Cómo calcular el coste de tiempo invertido por cada persona involucrada en el proceso
   - Coste de la posición vacante: impacto en productividad y en los compañeros
   - Tiempo hasta productividad plena: cómo estimarlo y qué factores lo afectan

2. **Coste de la rotación**
   - Fórmula de coste total de rotación por posición y nivel de seniority
   - Rotación voluntaria vs. involuntaria: diferencias en coste e impacto
   - Coste oculto de la rotación: conocimiento perdido, moral del equipo, carga sobre los que quedan
   - Cómo calcular el ahorro potencial de reducir la tasa de rotación un X%

3. **ROI de políticas de retención**
   - Cómo comparar el coste de una política de retención con el coste de la rotación que evita
   - Análisis de beneficios: cuáles tienen mayor impacto en retención por coste invertido
   - Formación y desarrollo: cómo medir su ROI en términos de retención y productividad
   - Flexibilidad laboral: cuantificando su impacto en rotación y atracción de talento

4. **Análisis del coste de reclutamiento por canal**
   - Coste por contratación por canal (LinkedIn, headhunter, referidos, job boards)
   - Calidad de contratación por canal: cómo medirla y vincularla al coste
   - Optimización del mix de canales de reclutamiento según rentabilidad

5. **Métricas financieras de RRHH para dirección**
   - KPIs de RRHH que interesan al CEO y al CFO: cuáles son y cómo calcularlos
   - Productividad por empleado: fórmulas y benchmarks por sector
   - Coste de personal como porcentaje de ingresos: qué es saludable en mi sector
   - Cómo presentar el impacto financiero de las decisiones de RRHH en formato ejecutivo

6. **Modelo de proyección de costes de talento**
   - Modelo de proyección de costes de personal para los próximos 12 meses
   - Escenarios de crecimiento: impacto de contratar X personas en los costes totales
   - Análisis de makeorbuy: cuándo contratar vs. externalizar vs. usar trabajo temporal

**Formato de respuesta:**
Incluye fórmulas con ejemplos numéricos. Proporciona una plantilla de análisis de coste de contratación y rotación. Señala los datos que necesito recopilar para hacer el análisis. Adapta las recomendaciones al tamaño y sector de mi empresa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Calcular el ROI de las políticas de RRHH y el coste real de la rotación',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelado de break-even y análisis de contribución marginal',
                'description'      => 'El análisis del punto de equilibrio y la contribución marginal son herramientas fundamentales para evaluar la viabilidad de nuevos productos, precios o líneas de negocio. Este prompt ayuda a construir modelos de break-even y análisis de contribución marginal rigurosos y adaptados a distintos contextos de negocio. Obtendrás un marco financiero que facilita decisiones estratégicas con base sólida.',
                'prompt_content'   => <<<'EOT'
Eres un experto en análisis financiero, contabilidad de gestión y modelado económico. Necesito tu ayuda para construir un análisis de punto de equilibrio (break-even) y contribución marginal para mi negocio o para evaluar una decisión de inversión específica.

**Contexto:**
- Tipo de negocio/decisión: [EMPRESA / NUEVO PRODUCTO / NUEVA LÍNEA DE NEGOCIO / PROYECTO DE INVERSIÓN]
- Sector: [SECTOR]
- Modelo de ingresos: [SUSCRIPCIÓN / VENTA ÚNICA / SERVICIOS / MIXTO]
- Estructura de costes actual: [DESCRIPCIÓN GENERAL]
- Pregunta principal que quiero responder: [¿CUÁNDO SERÉ RENTABLE? / ¿DEBO LANZAR ESTE PRODUCTO? / ¿QUÉ PRECIO FIJAR? / OTRA]

**Lo que necesito:**

1. **Análisis de estructura de costes**
   - Clasificación de costes fijos vs. variables: criterios y ejemplos por tipo de negocio
   - Costes semivariables: cómo tratarlos en el análisis de break-even
   - Identificación de los drivers de coste variable más relevantes
   - Cómo revisar y actualizar la estructura de costes periódicamente

2. **Cálculo de contribución marginal**
   - Fórmula de contribución marginal unitaria y total
   - Ratio de contribución marginal: qué significa y cómo usarlo para decisiones de mix de producto
   - Análisis de contribución marginal por línea de producto, canal o segmento
   - Decisiones de pricing basadas en contribución marginal

3. **Análisis de punto de equilibrio**
   - Break-even en unidades y en ingresos: fórmulas con ejemplos
   - Break-even en tiempo: cuántos meses hasta alcanzar la rentabilidad
   - Break-even con múltiples productos: cómo calcularlo con diferentes niveles de contribución marginal
   - Break-even para inversiones: payback period y TIR

4. **Análisis de sensibilidad**
   - Cómo construir un análisis de sensibilidad del break-even ante cambios en precio, volumen y costes
   - Variables críticas: identificación de las que más impactan en el punto de equilibrio
   - Escenarios optimista, base y pesimista: cómo estructurarlos y presentarlos
   - Zona de seguridad: margen entre ventas actuales y break-even

5. **Aplicaciones prácticas**
   - Break-even para decisión de lanzamiento de nuevo producto
   - Análisis de contribución marginal para decisión de descontinuar una línea
   - Evaluación de inversión en equipamiento o tecnología: cuándo se recupera
   - Cambio de precio: impacto en break-even y contribución marginal

6. **Presentación y comunicación del análisis**
   - Cómo presentar el análisis de break-even a dirección o inversores
   - Visualizaciones efectivas del break-even y la contribución marginal
   - Limitaciones del análisis y cómo comunicarlas con honestidad

**Formato de respuesta:**
Incluye fórmulas completas con ejemplos numéricos paso a paso. Proporciona una plantilla de modelo de break-even en formato tabla. Señala los supuestos críticos que afectan a la validez del análisis. Adapta los ejemplos a mi tipo de negocio y pregunta principal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir modelos de break-even y análisis de contribución marginal para decisiones financieras',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Análisis de rentabilidad de servicios y clientes en despachos legales',
                'description'      => 'No todos los clientes ni todos los asuntos son igualmente rentables en un despacho de abogados. Analizar la rentabilidad por cliente y por tipo de servicio permite tomar decisiones de cartera y pricing más inteligentes. Este prompt ayuda a construir el modelo de análisis de rentabilidad de un despacho legal. Obtendrás un sistema que mejora los márgenes sin sacrificar la calidad del servicio.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión económica de despachos de abogados y análisis de rentabilidad de servicios legales. Necesito tu ayuda para construir un sistema de análisis de rentabilidad por cliente, asunto y área de práctica que me permita gestionar el despacho con mayor inteligencia financiera.

**Contexto del despacho:**
- Tamaño: [NÚMERO] abogados + [NÚMERO] personal de apoyo
- Áreas de práctica: [MERCANTIL / LABORAL / FISCAL / CONTENCIOSO / OTRA]
- Modelo de facturación: [Por hora / Tarifa fija / Cuota de éxito / Retainer / Mixto]
- Número de clientes activos: [NÚMERO]
- Mayor problema de rentabilidad: [DESCRIBE]

**Lo que necesito:**

1. **Cálculo del coste real por hora de abogado**
   - Componentes del coste hora: salario, seguridad social, formación, herramientas, overhead
   - Horas facturables vs. horas totales: cómo calcular la tasa de utilización real
   - Coste hora por nivel de seniority: socio, senior, junior, paralegal
   - Precio hora mínimo para garantizar rentabilidad según nivel

2. **Análisis de rentabilidad por asunto**
   - Ingresos del asunto: honorarios cobrados y pendientes
   - Coste del asunto: horas invertidas por nivel, costes directos (peritos, registros, viajes)
   - Margen bruto por asunto: cómo calcularlo e interpretarlo
   - Asuntos por tarifa fija: cómo evaluar si la tarifa es adecuada ex-post y para presupuestar mejor en el futuro

3. **Análisis de rentabilidad por cliente**
   - Rentabilidad acumulada por cliente a lo largo del tiempo
   - Coste de mantenimiento de la relación: reuniones, actualizaciones, disponibilidad
   - Clasificación de clientes por rentabilidad: A, B, C y criterios de actuación para cada grupo
   - Decisión de no renovar o reorientar la relación con clientes poco rentables

4. **Análisis por área de práctica**
   - Comparación de márgenes entre áreas de práctica
   - Identificación de las áreas más y menos rentables del despacho
   - Decisión de reforzar, mantener o descontinuar áreas según rentabilidad
   - Impacto del mix de asuntos en la rentabilidad global del despacho

5. **Pricing y presupuestación**
   - Cómo presupuestar asuntos de tarifa fija con base en rentabilidad esperada
   - Revisión de honorarios: cuándo y cómo actualizar las tarifas
   - Cuotas de éxito: cómo evaluar su rentabilidad esperada antes de aceptar el asunto
   - Retainers: cómo fijar el precio y monitorizar su rentabilidad mensual

6. **Dashboard de gestión económica del despacho**
   - KPIs financieros clave para un despacho de abogados
   - Reporte mensual de rentabilidad para la dirección del despacho
   - Señales de alerta que deben activar una revisión de la estrategia de cartera

**Formato de respuesta:**
Incluye fórmulas con ejemplos numéricos adaptados a un despacho. Proporciona una plantilla de análisis de rentabilidad por asunto. Señala los datos que necesito registrar sistemáticamente para hacer este análisis. Adapta las recomendaciones a mi modelo de facturación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un sistema de análisis de rentabilidad por cliente y asunto en despachos legales',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'LTV y análisis de rentabilidad de clientes en Customer Success',
                'description'      => 'El equipo de Customer Success tiene un impacto directo en el LTV de los clientes, pero ese impacto rara vez se mide con precisión financiera. Este prompt ayuda a calcular el LTV real por cliente o segmento y a conectar las actividades de CS con la rentabilidad. Obtendrás un marco que permite tomar decisiones de cobertura y retención basadas en valor económico real.',
                'prompt_content'   => <<<'EOT'
Eres un experto en Customer Success, análisis financiero de clientes y unit economics. Necesito tu ayuda para construir un modelo de análisis de LTV y rentabilidad de clientes que guíe las decisiones de mi equipo de Customer Success.

**Contexto:**
- Tipo de producto/servicio: [SaaS / Plataforma / Servicios / Hardware + Software]
- Modelo de pricing: [Suscripción mensual / Anual / Usage-based / Licencia]
- Ticket medio por cliente: [CANTIDAD]
- Tasa de churn mensual actual: [PORCENTAJE]
- Tamaño del equipo de CS: [NÚMERO] CSMs

**Lo que necesito:**

1. **Cálculo de LTV por segmento**
   - Fórmulas de LTV según modelo de negocio (suscripción, transaccional, mixto)
   - LTV bruto vs. LTV neto (descontando coste de servicio): cuándo usar cada uno
   - LTV por segmento de cliente: por tamaño, industria, plan, canal de adquisición
   - Cómo actualizar el LTV cuando cambian las tasas de churn o expansión

2. **Coste de servicio por cliente (Cost to Serve)**
   - Componentes del coste de servicio: tiempo de CSM, soporte técnico, onboarding, renovaciones
   - Cómo calcular el coste de servicio promedio por tier de cliente
   - Diferencias en coste de servicio según el nivel de madurez digital del cliente
   - Cómo reducir el coste de servicio sin degradar la experiencia

3. **Rentabilidad real por cliente**
   - Margen por cliente: LTV neto menos CAC menos coste de servicio acumulado
   - Punto de equilibrio por cliente: cuántos meses hasta recuperar el CAC y el coste de onboarding
   - Clasificación de clientes por rentabilidad actual y potencial
   - Clientes en riesgo de ser no rentables: señales y acciones correctivas

4. **Modelo de cobertura basado en rentabilidad**
   - Cómo asignar el tiempo de los CSMs según LTV y rentabilidad del cliente
   - Modelo de cobertura diferenciada: high-touch, low-touch y self-serve según valor
   - Rentabilidad del equipo de CS: ratio de cartera de clientes por CSM y métricas de eficiencia
   - Cuándo añadir un CSM vs. cuándo automatizar más

5. **Impacto de actividades de CS en el LTV**
   - Cómo medir el impacto del onboarding en la retención y el LTV
   - Efecto de los QBR en la tasa de churn y expansión: cómo cuantificarlo
   - Health score como predictor de LTV: cómo calibrarlo con datos reales
   - ROI de las actividades de CS: cómo calcularlo y presentarlo a dirección

6. **Dashboard de rentabilidad de cartera para CS**
   - Métricas de rentabilidad que el equipo de CS debe monitorizar
   - Net Revenue Retention (NRR): cómo calcularlo e interpretarlo
   - Gross Revenue Retention (GRR): diferencias con NRR y cuándo es más relevante
   - Reporte de rentabilidad de cartera para dirección

**Formato de respuesta:**
Incluye fórmulas con ejemplos numéricos. Proporciona una plantilla de análisis de rentabilidad por cliente. Señala las palancas que tiene el equipo de CS para mejorar el LTV real. Adapta las recomendaciones a mi modelo de negocio y estructura del equipo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Calcular el LTV real por cliente y conectar las actividades de CS con la rentabilidad',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Análisis de rentabilidad y pricing para freelancers y consultores independientes',
                'description'      => 'La mayoría de los freelancers fijan sus precios sin calcular cuánto necesitan ganar realmente, lo que lleva a meses de trabajo sin rentabilidad suficiente. Este prompt ayuda a construir el modelo financiero de un freelancer o consultor independiente. Obtendrás un sistema de análisis de rentabilidad que te permite fijar precios con confianza y gestionar tus proyectos como un negocio.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión financiera de negocios independientes y consultoría freelance. Necesito tu ayuda para construir el modelo financiero de mi negocio como freelancer o consultor, y diseñar un sistema de pricing basado en rentabilidad real.

**Mi situación:**
- Especialidad: [DISEÑO / DESARROLLO / CONSULTORÍA / MARKETING / OTRA]
- Tiempo en el mercado: [MESES/AÑOS]
- Régimen fiscal: [AUTÓNOMO / SOCIEDAD LIMITADA / OTRO]
- Ingresos mensuales actuales: [CANTIDAD o "varía mucho"]
- Mayor problema financiero: [PRECIOS BAJOS / IRREGULARIDAD DE INGRESOS / NO SÉ SI SOY RENTABLE / OTRO]

**Lo que necesito:**

1. **Cálculo de mi coste hora real**
   - Todos los costes de ser freelancer: cuota de autónomo, IRPF, herramientas, formación, espacio, salud
   - Horas realmente facturables: cuántas horas al año puedo facturar descontando vacaciones, baja, gestión, prospección
   - Coste hora mínimo para cubrir mis gastos y pagarme un salario objetivo
   - Cómo actualizar este cálculo cuando cambian mis circunstancias

2. **Modelo de pricing basado en rentabilidad**
   - Precio hora mínimo, precio hora objetivo y precio hora de mercado: cómo equilibrarlos
   - Pricing por proyecto: cómo pasar de tarifa hora a tarifa fija de forma rentable
   - Cómo incluir el tiempo de gestión, comunicación y revisiones en el precio del proyecto
   - Pricing de retainers mensuales: cómo calcular el precio y qué incluir

3. **Análisis de rentabilidad por tipo de proyecto y cliente**
   - Cómo calcular el margen real de cada proyecto después de terminarlo
   - Identificación de los tipos de proyecto más rentables por hora invertida
   - Clientes que pagan bien vs. clientes que consumen mucho tiempo: cómo reconocerlos
   - Decisión de subir precios: cuándo y cómo hacerlo sin perder clientes valiosos

4. **Gestión de la irregularidad de ingresos**
   - Modelo de planificación financiera para ingresos irregulares
   - Fondo de reserva: cuánto necesito y cómo calcularlo
   - Cómo gestionar la tesorería en meses malos sin entrar en pánico
   - Diversificación de fuentes de ingreso: estrategias de estabilización

5. **Objetivos financieros y planificación**
   - Cómo calcular cuántos proyectos necesito al mes para alcanzar mis objetivos
   - Break-even personal: cuándo cubro gastos y a partir de cuándo tengo beneficio
   - Proyección de ingresos para los próximos 12 meses: cómo hacerla con información limitada
   - Cuándo tiene sentido constituir una sociedad limitada desde el punto de vista financiero

6. **Herramientas y hábitos financieros**
   - Stack de herramientas para gestión financiera de un freelancer
   - Hábitos financieros semanales y mensuales que marcan la diferencia
   - Qué datos registrar sistemáticamente para mejorar el análisis con el tiempo
   - Preparación de la declaración de la renta: qué gastos son deducibles y cómo documentarlos

**Formato de respuesta:**
Incluye fórmulas con ejemplos numéricos concretos. Proporciona una plantilla de modelo financiero freelance. Señala los errores más comunes y cómo evitarlos. Adapta las recomendaciones a mi especialidad y régimen fiscal cuando te los comparta.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir el modelo financiero de un freelancer y diseñar un sistema de pricing rentable',
                'vote_score'       => 46,
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
