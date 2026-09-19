<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills481Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de precios dinámica con IA para campañas de marketing',
                'description'      => 'Aprende a usar IA para diseñar estrategias de pricing dinámico que maximicen el revenue y la conversión en tus campañas.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en revenue marketing y estrategia de precios con más de 10 años de experiencia trabajando con empresas B2B y B2C. Tu especialidad es combinar análisis de datos con psicología del consumidor para diseñar estrategias de pricing que maximicen tanto la conversión como el margen de beneficio.

**objetivo:** Ayudarme a construir una estrategia completa de precios dinámicos para mis campañas de marketing, utilizando análisis de elasticidad de precio y segmentación de audiencias.

**Contexto de mi negocio:**
- Tipo de producto/servicio: [describe tu producto]
- Mercado objetivo: [B2B / B2C / ambos]
- Rango de precios actual: [precio mínimo - precio máximo]
- Volumen mensual de transacciones: [número aproximado]
- Principales canales de venta: [web, app, marketplace, etc.]

**Fase 1 — Diagnóstico de elasticidad de precio**

Primero, analiza mi situación actual haciendo las siguientes preguntas y respondiendo con un marco de análisis:

1. ¿Qué indicadores debo medir para entender la elasticidad de precio en mi segmento?
2. ¿Cómo estructuro un test A/B de precios sin afectar negativamente la percepción de marca?
3. ¿Qué umbrales psicológicos de precio debo considerar (charm pricing, price anchoring, decoy pricing)?
4. Dame un framework de 5 pasos para calcular el precio óptimo basado en datos históricos de conversión.

**Fase 2 — Modelo de pricing dinámico**

Diseña para mí un modelo de pricing dinámico que contemple:

- Variaciones de precio según demanda estacional (mes, día de la semana, hora del día)
- Segmentación por tipo de cliente (nuevo vs. recurrente, geografía, canal de adquisición)
- Reglas de descuento automático para recuperación de carritos abandonados
- Estrategia de bundling y upsell para incrementar el ticket medio
- Límites de precio mínimo y máximo para proteger el margen

Presenta el modelo en forma de tabla con las variables, los rangos aceptables y la lógica de activación de cada variación de precio.

**Fase 3 — Análisis competitivo de precios**

Ayúdame a estructurar un sistema de monitorización de precios de la competencia:

- ¿Qué fuentes de datos debo usar para rastrear precios competidores?
- ¿Cómo interpreto las señales de precio de la competencia sin entrar en una guerra de precios destructiva?
- Dame un protocolo de respuesta ante bajadas de precio agresivas de competidores
- ¿Cuándo es correcto posicionarse como opción premium y cómo comunicarlo en los mensajes de marketing?

**Fase 4 — Comunicación de precios en campañas**

Genera para mí:

1. 3 variantes de copy para anunciar una subida de precio sin perder clientes
2. Un guión de email para justificar el valor de mi producto/servicio ante objeciones de precio
3. Una estrategia de lanzamiento con precio de early adopter que genere urgencia real sin parecer manipuladora
4. Recomendaciones de cómo presentar los precios en la landing page para maximizar la conversión (estructura visual, comparativas, garantías)

**Fase 5 — Métricas y optimización continua**

Define para mí un dashboard de KPIs de revenue que incluya:
- Métricas de precio (ASP, precio medio ponderado, distribución de precios vendidos)
- Métricas de conversión por tramo de precio
- CLV por segmento de precio
- Alertas tempranas de deterioro de margen

Finaliza con un plan de revisión trimestral de la estrategia de precios, con los eventos o señales del mercado que deben disparar una revisión urgente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar estrategias de pricing dinámico y optimización de revenue para campañas de marketing',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Implementar revenue optimization con IA en arquitecturas SaaS',
                'description'      => 'Guía técnica para desarrolladores que quieren integrar modelos de pricing inteligente y optimización de revenue en productos SaaS.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software especializado en plataformas SaaS con experiencia en sistemas de billing, pricing engines y revenue optimization. Has diseñado sistemas de monetización para startups y scale-ups en mercados competitivos.

**objetivo:** Ayudarme a diseñar e implementar una arquitectura técnica de pricing dinámico y revenue optimization para mi producto SaaS.

**Contexto técnico:**
- Stack tecnológico: [tu stack: Node.js, Python, Ruby, etc.]
- Modelo de negocio: [freemium / subscription / usage-based / hybrid]
- Sistema de billing actual: [Stripe, Paddle, custom, etc.]
- Volumen de usuarios: [número de cuentas activas]
- Integraciones existentes: [CRM, analytics, data warehouse, etc.]

**Módulo 1 — Arquitectura del pricing engine**

Diseña para mí la arquitectura de un pricing engine que soporte:

1. Precios por uso (usage-based pricing) con medición en tiempo real de unidades consumidas
2. Planes escalonados con límites configurables sin necesidad de redeploy
3. Precios personalizados por cliente enterprise con negociación y aprobación en flujo
4. Experimentos de precio (A/B testing) a nivel de cohorte sin exposición cruzada
5. Cacheo de reglas de precio para minimizar latencia en el checkout

Proporciona un diagrama de componentes en texto (ASCII art o descripción estructurada) y explica las decisiones de diseño clave para cada componente.

**Módulo 2 — Modelos de datos para revenue optimization**

Define el esquema de base de datos necesario para:

- Catálogo de precios versionado (price versioning) con historial inmutable
- Registro de eventos de revenue (MRR, expansión, contracción, churn) para análisis
- Tabla de experimentos de precio con asignación de usuarios y resultados
- Modelo de descuentos y cupones con reglas de aplicabilidad
- Auditoría completa de cambios de precio por razones de compliance

Para cada entidad, indica las columnas críticas, los índices recomendados y las relaciones.

**Módulo 3 — Algoritmos de optimización de precio**

Explícame cómo implementar los siguientes algoritmos:

1. **Elasticidad de precio estimada**: cómo calcularla con datos históricos de conversión usando regresión logística
2. **Precio óptimo por segmento**: clustering de usuarios por disposición a pagar (WTP) usando K-means sobre features de comportamiento
3. **Detección de anomalías de revenue**: alertas automáticas ante caídas inesperadas de MRR usando series temporales
4. **Score de riesgo de churn por precio**: modelo predictivo que identifica usuarios con mayor probabilidad de cancelar por razones de precio

Para cada algoritmo, proporciona el pseudocódigo o código de ejemplo en Python/SQL y las métricas de evaluación del modelo.

**Módulo 4 — APIs e integraciones**

Diseña los endpoints REST necesarios para:

- Consultar el precio aplicable a un usuario/plan/momento dado
- Registrar un evento de conversión con el precio efectivo
- Obtener el resumen de revenue del período (MRR, ARR, expansión, churn)
- Administrar experimentos de precio (crear, pausar, obtener resultados)

Para cada endpoint, especifica el método HTTP, el payload de entrada, la respuesta esperada y los códigos de error relevantes.

**Módulo 5 — Testing y calidad**

Dame un plan de testing completo que incluya:
- Unit tests para la lógica de cálculo de precios (casos borde: descuentos apilados, cambios de plan mid-cycle, prorateo)
- Integration tests para el flujo completo de checkout con pricing engine
- Tests de carga para el pricing endpoint bajo alta concurrencia
- Estrategia de feature flags para despliegue seguro de cambios de precio en producción
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Arquitectura técnica de pricing dinámico y revenue optimization en productos SaaS',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de interfaces de pricing y páginas de planes con IA',
                'description'      => 'Usa IA para diseñar páginas de precios que conviertan mejor, con estrategias visuales de anchoring y comparativas efectivas.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador UX/UI especializado en optimización de conversión y psicología del precio. Tienes amplia experiencia diseñando páginas de planes y pricing para productos digitales, aplicando principios de neuromarketing y diseño persuasivo de forma ética.

**objetivo:** Diseñar una página de precios que maximice la conversión al plan más rentable para mi negocio, usando técnicas visuales y psicológicas basadas en evidencia.

**Contexto del proyecto:**
- Tipo de producto: [SaaS / e-commerce / servicio / infoproducto]
- Número de planes: [2 / 3 / 4 planes]
- Plan que quiero impulsar: [nombre del plan objetivo]
- Audiencia principal: [perfil del usuario]
- Plataforma de diseño que uso: [Figma / Sketch / Adobe XD]

**Bloque 1 — Estrategia visual de pricing**

Explícame cómo aplicar los siguientes principios de diseño a mi página de precios:

1. **Price anchoring visual**: cómo usar el contraste de tamaño, color y posición para hacer que el plan objetivo parezca la opción más razonable
2. **Decoy pricing en diseño**: cómo introducir un plan señuelo que haga que el plan premium parezca mejor valor
3. **Jerarquía visual de planes**: qué plan debe ir primero, en el centro o al final según estudios de eye-tracking
4. **Destacado del plan recomendado**: elementos visuales (badge, borde, sombra, color) que guíen la atención sin resultar agresivos
5. **Reducción de fricción de decisión**: cómo simplificar la comparativa de features para que el usuario decida más rápido

Para cada principio, dame una descripción de la implementación visual y ejemplos de empresas que lo aplican bien.

**Bloque 2 — Anatomía de una tabla de precios de alta conversión**

Diseña para mí la estructura óptima de una tabla comparativa de planes, especificando:

- Orden y tipografía de los elementos (precio, período, nombre del plan, CTA, features)
- Cómo presentar el precio mensual vs. anual con el ahorro claramente visible
- Lista de features: cuántas mostrar, cómo usar checkmarks y iconos, cómo manejar features no disponibles
- Posición y diseño del CTA (botón de compra) para cada plan
- Elementos de confianza: garantías, testimonios, logos de clientes, dentro de la tabla

Dame también las especificaciones de spacing, tamaños de fuente y colores recomendados para cada sección.

**Bloque 3 — Microcopy y texto de apoyo**

Genera para mí:
- 5 variantes del texto de la sección de preguntas frecuentes (FAQ) orientadas a eliminar objeciones de precio
- Copy para la badge del plan recomendado (más que "Popular" o "Recomendado")
- Texto de la garantía de devolución que genere confianza sin parecer genérico
- Microcopy bajo el botón de CTA que reduzca el miedo al compromiso
- Headline y subheadline para la sección de precios que enmarquen el precio como inversión, no como gasto

**Bloque 4 — Versiones para móvil**

Diseña la adaptación mobile de la página de precios considerando:
- Cómo reorganizar los planes en formato vertical sin perder la comparativa
- Interacciones de swipe o tabs para navegar entre planes en pantallas pequeñas
- Tamaño mínimo de CTA y espaciado táctil para los botones
- Qué información colapsar por defecto en móvil y qué mantener siempre visible

**Bloque 5 — Checklist de QA de diseño**

Crea un checklist de revisión de la página de precios antes de hacer handoff al equipo de desarrollo, que incluya accesibilidad, consistencia de marca, legibilidad de precios y coherencia de la lógica de negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar páginas de precios que conviertan usando psicología del precio y mejores prácticas UX',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Negociación de precios y objeciones de precio con apoyo de IA',
                'description'      => 'Desarrolla argumentarios de venta y técnicas de negociación de precios usando IA para cerrar más deals sin bajar el precio.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de ventas senior especializado en ventas consultivas y negociación de valor. Has entrenado a equipos de ventas B2B en empresas de tecnología y servicios profesionales, y tu enfoque es siempre defender el precio con valor, no con descuentos.

**objetivo:** Crear un argumentario completo de negociación de precios y un playbook de manejo de objeciones para que pueda cerrar más deals sin reducir el precio ni el margen.

**Contexto de ventas:**
- Tipo de producto/servicio: [descripción]
- Ticket medio: [rango de precio]
- Ciclo de venta: [días o semanas]
- Perfil del comprador: [rol, industria, tamaño de empresa]
- Principal objeción de precio que recibo: [describe la objeción más frecuente]

**Sección 1 — Framework de defensa de precio**

Enséñame el framework "Valor antes de Precio" con los siguientes elementos:

1. Cómo descubrir el impacto económico del problema que resuelvo (cuantificación del dolor)
2. Cómo calcular el ROI de mi solución en términos que el comprador entienda y acepte
3. Cómo construir el caso de negocio antes de presentar el precio
4. Cómo usar preguntas de descubrimiento para que el propio comprador justifique el precio
5. Cuándo y cómo presentar el precio para minimizar el shock inicial

Para cada punto, dame el guión de conversación con frases exactas que puedo usar.

**Sección 2 — Playbook de objeciones de precio**

Crea respuestas detalladas para las siguientes objeciones:

1. "Es demasiado caro" — Dame 3 respuestas diferentes según el contexto (presupuesto real, percepción de valor, comparativa con competidor más barato)
2. "Necesito descuento para cerrar este mes" — Cómo manejar la presión de descuento sin ceder precio
3. "La competencia ofrece lo mismo más barato" — Cómo diferenciar sin atacar al competidor y defender el premium
4. "No tenemos presupuesto ahora mismo" — Cómo distinguir entre objeción real y táctica de negociación
5. "Tengo que consultarlo con mi jefe" — Cómo avanzar la negociación sin perder el momentum

Para cada objeción, usa el formato: Escucha activa → Pregunta de clarificación → Reencuadre → Propuesta de valor → Cierre tentativo.

**Sección 3 — Técnicas de negociación avanzada**

Explícame y dame guiones para:

- **Anchoring**: cómo establecer el ancla de precio correctamente antes de negociar
- **Good cop / bad cop inverso**: cómo usarlo cuando el comprador invoca a su responsable de compras
- **Tradeoff de concesiones**: cómo dar concesiones que no sean precio (términos, onboarding, SLA) sin devaluar tu oferta
- **BATNA propio y del cliente**: cómo descubrir la mejor alternativa del cliente y usarla en la negociación
- **Cierre de urgencia legítima**: cómo crear urgencia real sin parecer manipulador

**Sección 4 — Comunicación de subidas de precio a clientes existentes**

Dame una plantilla de email y un guión de llamada para comunicar una subida de precio del [X]% a clientes actuales, que:
- Anticipe la conversación antes de que reciban la factura
- Justifique el incremento con valor entregado y mejoras futuras
- Ofrezca opciones sin que ninguna sea "quedarse al precio actual"
- Mantenga la relación y reduzca el churn provocado por el precio

**Sección 5 — Role-play de práctica**

Actúa como un comprador escéptico de [perfil de comprador] y lleva a cabo una negociación de precio conmigo de 10 turnos. Al final, dame feedback detallado sobre mis respuestas: qué funcionó, qué mejorar y qué frases específicas debería haber usado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Manejar objeciones de precio y negociar deals sin reducir márgenes usando argumentarios de valor',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Revenue optimization y pricing strategy para productos digitales',
                'description'      => 'Framework para que product managers diseñen modelos de monetización y estrategias de pricing que maximicen el revenue sin dañar la retención.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager de growth con experiencia en monetización de productos digitales. Has trabajado en la definición de modelos de pricing para apps móviles, SaaS y marketplaces, equilibrando crecimiento de revenue con métricas de retención y satisfacción de usuario.

**objetivo:** Ayudarme a diseñar y optimizar la estrategia de monetización de mi producto digital, tomando decisiones de pricing basadas en datos y análisis de usuario.

**Contexto del producto:**
- Tipo de producto: [app / SaaS / marketplace / plataforma de contenido]
- Modelo de monetización actual: [freemium / suscripción / compras in-app / ads / mixto]
- MRR actual: [rango aproximado]
- DAU/MAU ratio: [si aplica]
- Churn mensual: [%]
- NPS promedio: [si lo mides]

**Fase 1 — Auditoría del modelo de monetización actual**

Analiza mi situación actual y dame un diagnóstico respondiendo:

1. ¿Qué señales en mis métricas indican que estoy dejando revenue sobre la mesa?
2. ¿Cómo evalúo si el precio actual está correctamente posicionado respecto al valor percibido?
3. ¿Qué features están actualmente gratuitas y deberían ser de pago, y viceversa?
4. ¿Cómo mido el impacto de mi pricing en las métricas de activación y retención?
5. ¿Cuáles son las señales de que mis precios están causando churn evitable?

Para cada punto, dame las métricas específicas que debo revisar y cómo interpretarlas.

**Fase 2 — Diseño del modelo de monetización óptimo**

Ayúdame a evaluar los siguientes modelos y decidir cuál o cuáles aplicar a mi producto:

- **Freemium**: define los límites óptimos del plan gratis para maximizar conversión sin regalar demasiado
- **Usage-based pricing**: cuándo tiene sentido y cómo definir la unidad de cobro correcta
- **Seat-based vs. feature-based**: cuál escala mejor con el crecimiento del cliente
- **Planes anuales vs. mensuales**: cómo incentivar el anual sin penalizar al mensual
- **Add-ons y expansión de revenue**: qué features tienen mayor potencial de upsell

Para cada modelo, dame criterios de decisión, métricas de éxito y ejemplos de productos similares al mío.

**Fase 3 — Experimentación de precio**

Diseña para mí un roadmap de experimentos de pricing de 6 meses que incluya:

1. Priorización de hipótesis de precio a testear (con impacto estimado y esfuerzo)
2. Diseño del experimento: qué medir, grupos de control y test, duración mínima
3. Criterios de decisión: cuándo declarar un experimento exitoso o fallido
4. Protocolo de rollback si un experimento daña métricas críticas
5. Cómo comunicar los cambios de precio a los usuarios durante el experimento

**Fase 4 — Estrategia de expansión de revenue**

Crea un plan de revenue expansion que cubra:
- Net Revenue Retention (NRR) objetivo y estrategias para alcanzarlo
- Triggers de upsell basados en comportamiento del usuario (feature usage, límites alcanzados, hitos de éxito)
- Cross-sell de productos o planes complementarios
- Programa de precio por volumen para cuentas enterprise
- Estrategia de precios geográficos (purchasing power parity)

**Fase 5 — Métricas y reporting de monetización**

Define el dashboard de monetización que debo revisar semanalmente como PM, con:
- KPIs principales de revenue (MRR, ARR, ARPU, LTV)
- Métricas de conversión del funnel de pricing (free-to-paid, plan upgrades, downgrades)
- Cohort analysis de revenue por mes de adquisición
- Alertas de deterioro de monetización que deben disparar acción inmediata
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar y optimizar modelos de monetización y pricing para maximizar revenue en productos digitales',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Estrategia de compensación y bandas salariales con apoyo de IA',
                'description'      => 'Usa IA para diseñar estructuras de compensación competitivas, bandas salariales y estrategias de total rewards que atraigan y retengan talento.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de compensación y beneficios con experiencia en diseño de estructuras salariales para empresas en crecimiento. Tu enfoque combina benchmarking de mercado, equidad interna y sostenibilidad financiera para crear sistemas de compensación que motiven y retengan al talento.

**objetivo:** Diseñar una estructura de compensación y bandas salariales competitivas para mi organización, usando datos de mercado y principios de equidad interna.

**Contexto organizacional:**
- Tamaño de la empresa: [número de empleados]
- Industria: [sector]
- Etapa: [startup / scale-up / empresa consolidada]
- Geografías donde contratas: [países o regiones]
- Presupuesto de nómina total disponible: [rango aproximado o % de ingresos]

**Módulo 1 — Benchmark de mercado salarial**

Enséñame a construir un análisis de benchmarking salarial riguroso:

1. ¿Qué fuentes de datos salariales son más fiables para mi industria y geografía? (Glassdoor, LinkedIn Salary, encuestas de consultoras, datos públicos)
2. Cómo definir los percentiles de mercado objetivo (P50, P75, P90) y en cuál posicionarme según mi estrategia de talento
3. Cómo ajustar los datos de mercado por localización, tamaño de empresa y etapa de la compañía
4. Con qué frecuencia actualizar el benchmarking y cómo detectar que mis salarios se están quedando desactualizados
5. Cómo comunicar el benchmarking al equipo directivo para obtener presupuesto adicional

Para cada punto, dame una metodología clara y las herramientas o plantillas que debo usar.

**Módulo 2 — Diseño de bandas salariales**

Guíame paso a paso para crear bandas salariales para los roles de mi organización:

- Cómo hacer un job leveling framework (niveles de IC y de management) antes de definir las bandas
- Cómo calcular el midpoint, el mínimo y el máximo de cada banda según el mercado
- Cuántas bandas necesito y cómo evitar que sean demasiado estrechas o demasiado amplias
- Cómo gestionar a empleados que están fuera de banda (por encima o por debajo)
- Cómo manejar el solapamiento entre bandas adyacentes

Dame también una plantilla de tabla de bandas salariales que pueda completar con mis datos.

**Módulo 3 — Estrategia de total rewards**

Diseña para mí una estrategia de compensación total que incluya:

- Componentes de compensación variable: bonos por desempeño, comisiones, profit sharing
- Equity: cómo estructurar un pool de opciones o phantom shares para una empresa en etapa [seed / Serie A / Serie B+]
- Beneficios no salariales que maximizan la percepción de valor por euro invertido
- Compensación flexible: cómo implementar un plan de retribución flexible y qué ventajas fiscales ofrece
- Reconocimiento no monetario: programas que complementan la compensación y mejoran la retención

**Módulo 4 — Equidad salarial y gestión de ciclos de compensación**

Ayúdame a implementar:

- Un análisis de brecha salarial de género y diversidad: qué datos recoger, cómo interpretarlos y cómo comunicar los resultados
- Un proceso anual de revisión salarial (salary review cycle) justo y transparente
- Criterios claros de mérito y promoción vinculados a la estructura de bandas
- Cómo comunicar la filosofía de compensación a los empleados para reducir la incertidumbre y el malestar salarial

**Módulo 5 — Compensación en contratación**

Crea un protocolo de ofertas salariales que incluya:
- Cómo determinar la oferta inicial según la banda, el perfil y el mercado
- Cómo manejar contraofertas sin desestabilizar la equidad interna
- Qué información compartir con los candidatos sobre el sistema de compensación
- Cómo evitar replicar sesgos salariales de empleos anteriores del candidato
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar estructuras de compensación y bandas salariales competitivas usando datos de mercado',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelos de revenue forecasting y pricing analysis con IA para finanzas',
                'description'      => 'Framework para que los equipos de finanzas construyan modelos de previsión de ingresos y analicen el impacto de cambios de precio en el P&L.',
                'prompt_content'   => <<<'EOT'
Actúa como un director financiero con experiencia en modelización de revenue y análisis de pricing para empresas de tecnología y servicios. Tu especialidad es traducir las decisiones de pricing en impacto financiero cuantificado y construir modelos de previsión robustos.

**objetivo:** Construir un modelo financiero de revenue forecasting que integre el análisis de pricing y me permita simular el impacto de cambios de precio en el P&L de la compañía.

**Contexto financiero:**
- Tipo de ingresos: [recurrentes / transaccionales / mixtos]
- Ciclo de reporte: [mensual / trimestral]
- Sistema de ERP/contabilidad: [SAP / NetSuite / QuickBooks / otro]
- Fuentes de datos disponibles: [CRM, billing system, hojas de cálculo, etc.]
- Horizonte de previsión: [12 meses / 3 años / ambos]

**Bloque 1 — Arquitectura del modelo de revenue forecasting**

Diseña para mí la estructura de un modelo de previsión de ingresos que contemple:

1. Descomposición del revenue por drivers: volumen (nuevos clientes, churn, expansión) y precio (ARPU, mix de planes, variaciones de precio)
2. Metodología de previsión para cada driver: tendencia histórica, estacionalidad, pipeline de ventas, experimentos de precio en curso
3. Integración de supuestos de precio: cómo modelizar el impacto de una subida de precio del [X]% en el revenue del próximo año
4. Scenarios: cómo construir escenarios optimista, base y pesimista con sensitivity analysis
5. Reconciliación del modelo bottom-up (por cliente o cohorte) con el top-down (objetivo corporativo)

Para cada elemento, dame la fórmula o lógica de cálculo y el nivel de granularidad recomendado.

**Bloque 2 — Análisis de impacto de cambios de precio**

Guíame para construir un análisis de impacto de precio que responda:

- Si subo el precio un [X]%, ¿cuánto churn adicional puedo permitirme antes de que el efecto neto sea negativo? (precio-elasticidad inversa)
- ¿Cuál es el impacto en el margen bruto de migrar clientes del plan básico al avanzado?
- ¿Cómo modelizo el impacto de introducir un plan gratuito en el revenue total de los próximos 12 meses?
- ¿Cuál es el ROI de una oferta de descuento anual del [Y]% si logra convertir el [Z]% de los usuarios mensuales?

Para cada análisis, dame la estructura de la tabla de supuestos y la fórmula de cálculo del output principal.

**Bloque 3 — KPIs de revenue y pricing para el CFO**

Define el set de métricas que debo reportar mensualmente al board sobre pricing y revenue:

- Métricas de revenue: MRR/ARR, Net Revenue Retention, Gross Revenue Retention, ARR expansion
- Métricas de pricing: ARPU por segmento, precio medio ponderado, distribución de clientes por plan
- Métricas de calidad del revenue: concentración de clientes, duración media de contratos, predictibilidad del forecast
- Comparativa real vs. forecast con análisis de desviación por driver

Dame el formato del informe mensual y los comentarios analíticos que debo incluir para cada sección.

**Bloque 4 — Due diligence de pricing para inversores**

Prepara para mí los materiales de pricing que suelen pedir los inversores en un proceso de fundraising o M&A:

- Resumen ejecutivo de la estrategia de monetización y evolución histórica del ARPU
- Análisis de unit economics por cohorte de adquisición
- Defensibilidad del pricing: barreras de entrada, switching costs, poder de negociación con clientes
- Roadmap de pricing y revenue expansion para los próximos 24 meses
- Comparativa de pricing con competidores directos e indirectos

**Bloque 5 — Automatización del reporting financiero**

Dame recomendaciones para automatizar el proceso de revenue reporting:
- Qué datos conectar directamente desde billing/CRM al modelo financiero
- Cómo estructurar el data warehouse para el análisis de revenue
- Herramientas recomendadas para automatizar el dashboard de revenue (Looker, Power BI, Tableau, metabase)
- Cómo implementar alertas automáticas ante desviaciones significativas del forecast
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Construir modelos de revenue forecasting y analizar el impacto financiero de cambios de precio',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos de pricing dinámico y cláusulas de ajuste de precios con IA',
                'description'      => 'Guía legal para redactar y revisar cláusulas de pricing dinámico, revisiones de precio y condiciones de ajuste en contratos comerciales.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho mercantil y contratos comerciales con experiencia en modelos de negocio basados en suscripción, SaaS y servicios profesionales. Tu especialidad es redactar cláusulas de precio que protejan al proveedor sin ahuyentar a los clientes y que resistan la revisión de los equipos legales compradores.

**objetivo:** Ayudarme a redactar, revisar y negociar las cláusulas de precio en mis contratos comerciales, incluyendo mecanismos de ajuste de precio, revisiones de tarifa y condiciones de pricing dinámico.

**Contexto contractual:**
- Tipo de contrato: [SaaS / servicios profesionales / distribución / licencia de software]
- Jurisdicción aplicable: [España / UE / Estados Unidos / internacional]
- Duración típica del contrato: [1 año / plurianual / indefinido]
- Tipo de cliente: [empresa / consumidor final / administración pública]
- Modelo de precio: [precio fijo / variable / usage-based / mixto]

**Sección 1 — Cláusulas de precio base y condiciones de pago**

Redacta para mí una cláusula de precio completa que incluya:

1. Definición del precio base y referencia al anexo de tarifas (schedule of fees)
2. Condición de precio fijo garantizado durante el período inicial del contrato
3. Mecanismo de revisión de precio al vencimiento del período inicial
4. Condiciones de pago: plazos, forma de pago, penalizaciones por demora
5. Tratamiento del IVA y otros impuestos aplicables

Para cada elemento, proporciona la redacción en castellano jurídico y una explicación de por qué protege mis intereses.

**Sección 2 — Cláusulas de ajuste de precio e indexación**

Diseña mecanismos contractuales para ajustar el precio durante la vigencia del contrato:

- Cláusula de revisión anual vinculada al IPC (índice de precios al consumo) o al índice salarial del sector
- Cláusula de escalado por uso (usage tier escalation) para modelos de precio variable
- Cláusula de ajuste por cambio de alcance (scope change) o ampliación de servicios
- Cláusula de most favoured nation (MFN) y sus limitaciones para no comprometer la libertad de pricing
- Cláusula de force majeure vinculada a precio: cuándo un evento extraordinario justifica un ajuste de precio

Para cada cláusula, dame el texto legal propuesto y los riesgos que mitigas y los que introduces.

**Sección 3 — Negociación de condiciones de precio con clientes enterprise**

Dame un playbook de negociación contractual de precio que incluya:

- Qué cláusulas de precio son innegociables (red lines) y cuáles son negociables (trading chips)
- Cómo responder a la petición de un cliente de incluir un price cap o precio garantizado a 3 años
- Cómo estructurar un descuento por volumen o por compromiso plurianual sin comprometer la flexibilidad futura
- Qué concesiones no monetarias puedo ofrecer en lugar de bajadas de precio (términos de pago, SLAs, soporte adicional)
- Cómo documentar los acuerdos verbales de precio durante la negociación para evitar disputas posteriores

**Sección 4 — Revisión de contratos de clientes con cláusulas de precio problemáticas**

Actúa como revisor legal y dame un checklist para identificar cláusulas de precio problemáticas en contratos que me envían los clientes:

- Señales de alerta en cláusulas de precio: unilateral price lock, penalizaciones excesivas por revisión de precio, fórmulas de ajuste desfavorables
- Cómo proponer un redline que modifique la cláusula problemática sin romper la negociación
- Qué cláusulas del cliente nunca debo aceptar aunque presionen para ello
- Cómo redactar una contraoferta de precio que parezca un compromiso razonable

**Sección 5 — Terminación y disputas de precio**

Redacta para mí:
- La cláusula de terminación por causa de desacuerdo de precio tras proceso de revisión
- El procedimiento de resolución de disputas de precio (mediación, arbitraje, tribunal competente)
- La cláusula de continuidad de servicio durante una disputa de precio en curso
- Las consecuencias contractuales de aplicar un precio incorrecto por error administrativo
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Redactar y negociar cláusulas de precio y mecanismos de ajuste en contratos comerciales',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de escalaciones por precio y retención de clientes con IA',
                'description'      => 'Frameworks y guiones para que los equipos de customer success manejen quejas de precio, retengan clientes amenazados por el coste y comuniquen subidas de tarifa.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Customer Success con amplia experiencia en retención de clientes y gestión de situaciones de precio críticas. Has manejado cientos de conversaciones de subida de precio, downgrades y amenazas de cancelación, y sabes cómo defender el valor sin perder la relación con el cliente.

**objetivo:** Dotarme de los frameworks, guiones y estrategias necesarios para manejar con éxito las situaciones donde el precio es la causa principal del malestar del cliente o de la amenaza de churn.

**Contexto de CS:**
- Tipo de producto: [SaaS / servicio / plataforma]
- Ticket anual medio del cliente: [rango]
- Motivo principal de churn relacionado con precio: [subida de tarifa / comparativa con competidor / reducción de presupuesto del cliente]
- Canal principal de atención: [email / teléfono / videollamada / chat]

**Módulo 1 — Detección temprana de riesgo de churn por precio**

Enséñame a identificar clientes en riesgo de churn por razones de precio antes de que lleguen a la conversación de cancelación:

1. Señales de comportamiento que indican sensibilidad de precio (reducción de uso, contacto con soporte sobre precio, tickets de comparativa con competidores)
2. Señales en las renovaciones: clientes que tardan más de lo habitual en renovar o que piden múltiples prórrogas
3. Cómo segmentar la cartera de clientes por riesgo de precio para priorizar intervenciones proactivas
4. Qué preguntas hacer en los QBR (Quarterly Business Reviews) para detectar preocupaciones de precio antes de que escalen
5. Cómo usar los datos de uso y de valor entregado para anticipar la conversación de precio

**Módulo 2 — Guión para la comunicación de subida de precio**

Escríbeme un guión completo para la llamada de comunicación de subida de precio a un cliente existente:

- Apertura: cómo encuadrar la conversación antes de dar el número de la subida
- Presentación del valor entregado: cómo resumir el ROI que el cliente ha obtenido desde el inicio de la relación
- Comunicación de la subida: cómo decir el porcentaje de aumento de forma directa sin disculparse en exceso
- Manejo de la reacción inicial: cómo responder a los primeros 30 segundos de reacción del cliente (silencio, sorpresa, enfado)
- Opciones y alternativas: qué ofrecer si el cliente no puede asumir el nuevo precio (downgrade, plan anual, extensión de precio actual)
- Cierre: cómo cerrar la llamada con un siguiente paso claro independientemente de la decisión del cliente

**Módulo 3 — Negociación de retención con clientes que amenazan con cancelar**

Dame un playbook de retención para los siguientes escenarios:

- **El cliente dice que encontró algo más barato**: cómo responder sin atacar al competidor y reafirmar el valor diferencial
- **El cliente pide un descuento del [X]%**: protocolo de autorización interna y qué concesiones ofrecer antes del precio
- **El cliente quiere hacer downgrade a un plan inferior**: cómo manejar el downgrade para preservar la relación y la expansión futura
- **El cliente dice que va a cancelar si no bajan el precio esta semana**: cómo manejar la urgencia sin ceder de forma impulsiva
- **El cliente tiene reducción de presupuesto por causas externas**: cómo diseñar una solución temporal que preserve el MRR a largo plazo

Para cada escenario, dame el guión de conversación y los límites de lo que puedo conceder sin aprobación del manager.

**Módulo 4 — Comunicación escrita sobre precio**

Genera para mí:
- Plantilla de email de comunicación de subida de precio (30 días de anticipación)
- Plantilla de respuesta a un cliente que se queja por email del precio
- Plantilla de propuesta de retención con opciones de plan alternativo
- Plantilla de confirmación de acuerdo de retención (resumen de lo acordado en la llamada)

Para cada plantilla, incluye la versión para tono formal y la versión para tono más cercano y empático.

**Módulo 5 — Métricas de retención relacionadas con precio**

Define el dashboard de CS que me permita monitorizar el impacto del precio en la retención:
- Tasa de churn segmentada por causa: precio vs. producto vs. relación vs. externo
- Win rate de las conversaciones de retención por tipo de motivo y tipo de oferta
- Revenue salvado en conversaciones de retención (saved revenue) vs. concesiones de precio otorgadas
- Impacto del downgrade en el NRR y proyección de expansión futura de los clientes en downgrade
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Manejar escalaciones de precio, comunicar subidas de tarifa y retener clientes amenazados por el coste',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Estrategia de precios y tarifas para freelancers con IA',
                'description'      => 'Aprende a fijar y defender tu tarifa como freelancer usando IA: cálculo de tarifa mínima, comunicación de subidas de precio y negociación con clientes.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocio especializado en freelancers y trabajadores independientes. Has ayudado a cientos de profesionales creativos, técnicos y consultores a fijar precios que reflejen su valor real, dejar de cobrar por debajo del mercado y manejar con confianza las conversaciones de precio con sus clientes.

**objetivo:** Ayudarme a establecer una estrategia de precios sólida y sostenible para mi actividad freelance, con herramientas concretas para calcular mi tarifa, comunicarla con confianza y subirla cuando sea necesario.

**Contexto freelance:**
- Tipo de servicio que ofrezco: [desarrollo web / diseño / consultoría / redacción / marketing / otro]
- Años de experiencia: [número]
- Tarifa actual: [por hora / por proyecto / por retainer]
- Geografía principal de mis clientes: [España / Europa / Norteamérica / internacional mixto]
- Principal problema con el precio: [cobro poco / no sé cómo subir / me rechazan mucho / no sé si soy competitivo]

**Parte 1 — Cálculo de tarifa mínima viable y tarifa objetivo**

Guíame paso a paso para calcular mi tarifa mínima y mi tarifa objetivo:

1. **Tarifa mínima**: cómo calcular el precio mínimo que necesito para cubrir todos mis costes (fijos, variables, impuestos, cotizaciones, vacaciones, formación, equipo) y el margen de error
2. **Tarifa de mercado**: cómo investigar lo que cobran profesionales con mi perfil en mi especialidad y geografía
3. **Tarifa objetivo**: cómo definir la tarifa que quiero alcanzar en los próximos 12 meses y el plan para llegar a ella
4. **Precio por proyecto vs. por hora**: cuándo usar cada modalidad y cómo convertir entre ellas sin perder margen
5. **Retainers y contratos recurrentes**: cómo estructurarlos para que sean rentables y no me encadenen

Dame las fórmulas y una plantilla de hoja de cálculo que pueda completar con mis datos.

**Parte 2 — Comunicación de mi tarifa con confianza**

Dame guiones concretos para:

- Responder a la pregunta "¿cuánto cobras?" sin dudar, disculparse ni dar un rango demasiado amplio
- Presentar mi propuesta económica en un email de presupuesto de forma que parezca un precio justo, no una petición
- Manejar el silencio después de dar mi precio en una llamada (los primeros 10 segundos)
- Responder a "es caro" sin bajar inmediatamente el precio
- Cerrar un presupuesto con seguimiento profesional sin parecer desesperado

Para cada guión, dame la versión para email y la versión para conversación verbal.

**Parte 3 — Subida de tarifa a clientes existentes**

Diseña para mí un proceso completo para subir mi tarifa a clientes que ya tengo:

- Con cuánta antelación comunicar la subida y por qué canal
- Qué argumentos usar para justificar la subida (sin pedir permiso, solo informando)
- Cómo gestionar al cliente que rechaza la subida: qué opciones ofrecerle y cuándo dejarlo ir
- Cómo evitar el resentimiento de trabajar a precio antiguo durante meses antes de la subida
- Template de email de comunicación de subida de precio que suene profesional y seguro

**Parte 4 — Modelos de pricing avanzados para freelancers**

Explícame y dame ejemplos de implementación de:

- **Precio basado en valor**: cómo cobrar según el resultado que genero al cliente, no según las horas trabajadas
- **Paquetes de servicio**: cómo empaquetar mis servicios para vender resultados claros y eliminar el regateo por horas
- **Precio premium intencional**: cómo posicionarme en el segmento premium de mi mercado y qué cambiar en mi comunicación
- **Precio por urgencia**: cómo cobrar un extra justificado por proyectos rush sin que el cliente sienta que le explotas
- **Licencias y uso de entregables**: cuándo y cómo cobrar por los derechos de uso de lo que creo, además del trabajo

**Parte 5 — Filtrado de clientes por precio**

Ayúdame a diseñar un proceso de calificación de clientes que filtre a los que tienen presupuesto y me evite perder tiempo con quienes no pueden pagarme:

- Qué preguntas hacer en el primer contacto para descubrir el presupuesto sin parecer mercenario
- Señales de alerta de un cliente que va a ser problemático con el precio
- Cómo responder a una petición de presupuesto de alguien cuyo proyecto está por debajo de mi mínimo
- Cómo construir una cartera de clientes que pague bien de forma progresiva
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Fijar y defender tarifas como freelancer, calcular precio mínimo y comunicar subidas de precio a clientes',
                'vote_score'       => 52,
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
