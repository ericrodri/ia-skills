<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills373Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 - Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de captación de suscriptores para negocios digitales',
                'description'      => 'Aprende a diseñar campañas de adquisición optimizadas para convertir visitantes en suscriptores de pago. Cubre canales, mensajes, ofertas de entrada y métricas de captación en modelos de suscripción.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en growth marketing especializado en negocios de suscripción digital con más de diez años de experiencia ayudando a empresas SaaS, medios y plataformas a crecer su base de suscriptores de forma rentable.

Voy a pedirte que me ayudes a diseñar una estrategia completa de captación de suscriptores para mi negocio. Antes de responder, necesito que consideres los siguientes factores clave:

**Contexto del negocio de suscripción:**
Los negocios de suscripción tienen economías únicas: el coste de adquisición (CAC) debe recuperarse a lo largo del tiempo, por lo que la retención y el LTV (Life Time Value) son tan importantes como el volumen de captación. Una estrategia de captación mal diseñada puede traer muchos suscriptores de baja calidad que abandonan en el primer mes, destruyendo la rentabilidad del negocio.

**Canales de captación para suscripciones:**
Analiza y recomienda la combinación óptima entre:
- SEO y contenido orgánico orientado a intención de compra
- Publicidad de pago (Meta Ads, Google Ads, LinkedIn según el perfil del suscriptor)
- Email marketing y nurturing de leads
- Programas de referidos y viralidad integrada en el producto
- Partnerships y co-marketing con audiencias complementarias
- Pruebas gratuitas (free trial) vs. freemium vs. garantía de devolución

**Diseño de la oferta de entrada:**
La primera oferta que ve un potencial suscriptor determina en gran medida la tasa de conversión y la calidad del suscriptor. Ayúdame a estructurar:
- El gancho principal (qué promesa concreta resuelve el pain point más urgente)
- La estructura de planes (qué incluir en cada tier para maximizar la percepción de valor)
- Las garantías y eliminadores de riesgo (período de prueba, reembolso, sin permanencia)
- El precio de entrada óptimo según el segmento objetivo

**Métricas de captación a monitorizar:**
Define qué indicadores clave debo seguir para evaluar la eficiencia de la captación:
- CAC por canal y por segmento
- Tasa de conversión de trial a pago
- Tiempo hasta la primera conversión
- Ratio LTV:CAC objetivo para cada canal
- Payback period aceptable según el tipo de suscripción

**Optimización del funnel de captación:**
Describe las palancas de optimización más impactantes en cada etapa:
- Conciencia: cómo aumentar el alcance cualificado
- Consideración: cómo nutrir leads que no están listos para suscribirse
- Decisión: cómo reducir la fricción en el momento de activación del pago
- Onboarding: cómo asegurar que el nuevo suscriptor experimenta valor rápidamente (time-to-value)

**Formato de respuesta esperado:**
1. Diagnóstico de los principales errores en captación de suscriptores (lista de 5)
2. Framework de estrategia de captación en 4 fases (Atraer, Convertir, Activar, Medir)
3. Plan de acción de 90 días con prioridades y quick wins
4. Plantilla de métricas semanales para el equipo de marketing
5. Checklist de validación antes de escalar inversión en captación

Sé específico, usa ejemplos reales de negocios de suscripción exitosos y proporciona cifras de referencia del sector cuando sea relevante.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar estrategia de adquisición de suscriptores',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 2 - Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Implementación de lógica de billing y gestión de suscripciones en backend',
                'description'      => 'Guía técnica para implementar correctamente la facturación recurrente, cambios de plan, cancelaciones y reintentos de cobro en un backend de suscripciones. Cubre integración con Stripe, webhooks y estados del ciclo de vida.',
                'prompt_content'   => <<<'EOT'
Actúa como un ingeniero de backend senior especializado en sistemas de pagos y facturación recurrente para plataformas SaaS. Tienes experiencia profunda con Stripe, webhooks, máquinas de estado y diseño de sistemas resilientes para billing.

Necesito tu ayuda para implementar correctamente el sistema de billing de suscripciones en mi aplicación. Este es uno de los componentes más críticos del negocio y los errores aquí tienen consecuencias directas en revenue y experiencia del cliente.

**Arquitectura del sistema de suscripciones:**
Explica cómo modelar correctamente la base de datos para soportar:
- Múltiples planes con diferentes ciclos de facturación (mensual, anual, trimestral)
- Cambios de plan (upgrade y downgrade) con prorratio correcto
- Períodos de prueba gratuita y su transición a pago
- Descuentos, cupones y precios especiales para ciertos clientes
- Historial de facturas y recibos accesibles para el cliente

**Integración con Stripe (o proveedor equivalente):**
Detalla el flujo técnico correcto para:
- Crear un Customer y un PaymentMethod de forma segura
- Configurar una Subscription con trial_end, proration_behavior y billing_cycle_anchor
- Manejar el flujo de SCA/3DS (Strong Customer Authentication) para mercados europeos
- Implementar Stripe Customer Portal para que los clientes gestionen sus datos de pago
- Configurar correctamente el retry schedule para pagos fallidos (dunning)

**Gestión de webhooks de forma resiliente:**
Los webhooks son el corazón del billing asíncrono. Explica cómo:
- Registrar y verificar la firma de webhooks (Stripe-Signature)
- Diseñar un sistema idempotente para procesar eventos duplicados
- Manejar los eventos críticos: invoice.payment_succeeded, invoice.payment_failed, customer.subscription.deleted, customer.subscription.updated
- Implementar una cola de procesamiento con reintentos y dead letter queue
- Sincronizar el estado local de la suscripción con el estado en Stripe

**Máquina de estados del ciclo de vida del suscriptor:**
Define los estados posibles de una suscripción y las transiciones válidas:
- trialing → active (tras pago exitoso al final del trial)
- active → past_due (pago fallido)
- past_due → active (pago recuperado) o canceled (dunning agotado)
- active → canceled (cancelación voluntaria)
- canceled → active (reactivación)

**Manejo de casos edge críticos:**
Describe cómo manejar correctamente:
- Cambio de plan a mitad del ciclo de facturación y cálculo del prorratio
- Cancelación al final del período vs. cancelación inmediata
- Pausas de suscripción (pause_collection en Stripe)
- Clientes con múltiples suscripciones activas
- Migración de usuarios existentes a un nuevo plan sin interrupciones

**Formato de respuesta:**
1. Diagrama de modelo de datos (tablas: users, subscriptions, plans, invoices, payment_methods)
2. Flujo técnico de activación de suscripción de principio a fin (pseudocódigo o código real)
3. Lista de webhooks de Stripe que debo manejar y qué hace cada uno
4. Checklist de seguridad para sistemas de billing
5. Errores comunes que cometen los equipos al implementar billing y cómo evitarlos

Incluye ejemplos de código en el lenguaje que yo especifique si te lo pido.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar billing recurrente seguro y resiliente',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            // 3 - Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de flujos de onboarding para nuevos suscriptores',
                'description'      => 'Crea experiencias de onboarding que lleven al suscriptor al primer momento de valor de forma rápida y efectiva. Aprende a diseñar wizards, tooltips, checklists y secuencias de emails de bienvenida que reducen el churn temprano.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de producto y UX especializado en experiencias de onboarding para plataformas de suscripción. Has trabajado en la optimización de onboarding en productos digitales con miles de usuarios y entiendes profundamente la psicología del nuevo usuario y los patrones de abandono temprano.

El onboarding es el momento más crítico en el ciclo de vida de un suscriptor. Los datos del sector muestran que el 40-60% del churn en productos de suscripción ocurre en los primeros 30 días, y la mayoría de ese abandono está directamente relacionado con una experiencia de onboarding deficiente. Necesito tu ayuda para diseñar un onboarding excepcional.

**Principios de onboarding para suscripciones:**
Explica los fundamentos del buen onboarding orientado a suscripciones:
- El concepto de "Aha moment" o primer momento de valor y cómo identificarlo en mi producto
- La diferencia entre onboarding de producto (aprender a usar la herramienta) y onboarding de valor (conseguir el resultado que el usuario pagó)
- Por qué el onboarding debe ser progresivo y no abrumar al usuario con features en el día 1
- Cómo adaptar el onboarding al perfil y objetivo declarado del usuario (personalización desde el registro)

**Patrones de diseño de onboarding:**
Describe cuándo y cómo usar cada patrón:
- Welcome wizard: cuándo funciona y cuándo es contraproducente
- Checklists de activación: cómo diseñarlos para que generen progreso psicológico
- Tooltips contextuales y product tours: triggers correctos vs. intrusivos
- Empty states accionables: cómo diseñar el estado vacío para invitar a la acción correcta
- Gamificación del progreso: barras de completado, logros y recompensas de onboarding

**Secuencia de emails de onboarding:**
Diseña la estructura de la secuencia de emails de bienvenida:
- Email 1 (inmediato al registro): bienvenida y confirmación del valor prometido
- Email 2 (día 1-2): guía hacia la primera acción clave
- Email 3 (día 3-5): caso de uso inspirador / prueba social
- Email 4 (día 7): check-in y resolución de posibles obstrucciones
- Email 5 (día 14): recordatorio de beneficios antes del fin del trial (si aplica)

**Medición del éxito del onboarding:**
Define las métricas que determinan si el onboarding está funcionando:
- Tasa de activación (% de usuarios que completan el primer evento clave)
- Time-to-first-value (tiempo hasta el primer Aha moment)
- Completion rate del onboarding wizard o checklist
- Correlación entre activación y conversión/retención a 30 días
- NPS durante el período de onboarding

**Optimización iterativa:**
Explica cómo mejorar el onboarding de forma continua:
- Cómo hacer user research con suscriptores que abandonaron en las primeras semanas
- A/B testing de flujos de onboarding (qué testar y cómo medir)
- Segmentación del onboarding por perfil de usuario o caso de uso
- Cómo usar datos de comportamiento (heatmaps, session recordings) para identificar puntos de abandono

**Formato de respuesta:**
1. Checklist de preguntas para identificar el Aha moment de mi producto
2. Plantilla de flujo de onboarding en 7 días (días, acciones, triggers)
3. Ejemplos de empty states bien diseñados y mal diseñados con análisis
4. Secuencia de 5 emails de onboarding con asunto y estructura de cada uno
5. Dashboard de métricas de onboarding que debería monitorizar semanalmente

Usa referencias a productos reales como Notion, Figma, Slack o similares para ilustrar los mejores ejemplos de onboarding de la industria.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar onboarding que reduce churn temprano',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 4 - Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Técnicas de venta de planes anuales y upgrade de suscripciones',
                'description'      => 'Domina las estrategias de conversión de suscriptores mensuales a planes anuales y técnicas de upsell dentro de modelos de suscripción. Aprende a superar objeciones sobre compromiso a largo plazo y a demostrar el ROI del plan superior.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en ventas consultivas especializado en negocios de suscripción. Tienes experiencia cerrando upgrades a planes anuales, manejando objeciones de compromiso y estructurando propuestas de valor que justifican inversiones superiores en productos de suscripción.

La venta dentro de modelos de suscripción tiene una dinámica única: el cliente ya confía en el producto (ya es suscriptor), pero necesita que le convenzas de comprometerse más (pasar a anual) o de pagar más (upgrade de plan). Esta es una oportunidad de revenue enorme que muchos equipos de ventas desaprovechan.

**Por qué la conversión a planes anuales es clave:**
Explica el impacto empresarial de convertir suscriptores mensuales a anuales:
- Reducción del churn: los suscriptores anuales tienen tasas de churn 2-4 veces menores
- Cash flow: cobrar 12 meses por adelantado mejora radicalmente la liquidez
- LTV: el compromiso anual crea hábito y aumenta el LTV promedio
- Previsibilidad: el ARR (Annual Recurring Revenue) es más predecible que el MRR

**Identificación del momento óptimo para el pitch anual:**
Describe cuándo y cómo abordar la conversión a anual:
- El momento ideal: tras el primer Aha moment, no al inicio del trial
- Triggers de comportamiento que indican que el usuario está listo (uso frecuente, features activadas)
- Cómo usar el descuento anual como anchor sin devaluar el plan mensual
- In-app messages vs. llamada de ventas vs. email según el segmento de precio

**Manejo de objeciones en venta de planes anuales:**
Proporciona respuestas específicas para cada objeción:
- "No sé si lo voy a seguir usando en 12 meses" → respuesta de reducción de riesgo
- "Es mucho dinero de golpe" → respuesta de ROI y comparativa mensual
- "Prefiero la flexibilidad de cancelar cuando quiera" → respuesta de valor del compromiso
- "No tengo presupuesto aprobado para un año" → respuesta de proceso de compra y ayuda al comprador
- "El descuento no compensa" → respuesta de cálculo de ahorro y valor acumulado

**Técnicas de upsell de plan superior:**
Explica cómo identificar y ejecutar upgrades de plan:
- Señales de que un usuario está infrautilizando su plan actual (llegando a límites, necesidades no cubiertas)
- Cómo presentar el plan superior como solución a un problema específico del cliente
- El role del usage data en la conversación de upgrade (mostrar que el cliente necesita más)
- Técnicas de trial de features premium para generar deseo antes del pitch

**Construcción del caso de ROI:**
Ayúdame a construir el argumento económico para cada tipo de cliente:
- Cómo cuantificar el valor que el producto aporta al cliente
- Fórmulas de ROI simples que el cliente puede entender y explicar internamente
- Testimonios y casos de éxito estructurados para soportar el caso de ROI
- Comparativa de coste vs. alternativas (herramientas separadas, contratar alguien, etc.)

**Formato de respuesta:**
1. Script de conversación para pitch de plan anual (apertura, desarrollo, cierre)
2. Tabla de manejo de las 5 objeciones más comunes con respuestas verbatim
3. Plantilla de email de upgrade a anual con asunto, cuerpo y CTA
4. Calculadora de ROI simple que puedo compartir con clientes
5. Checklist de señales de que un cliente está listo para el upgrade

Incluye ejemplos de lenguaje específico que puedo usar en conversaciones reales, no solo conceptos teóricos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Convertir suscriptores mensuales a planes anuales',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            // 5 - Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Diseño del modelo de suscripción: tiers, precios y empaquetado',
                'description'      => 'Aprende a diseñar la arquitectura de planes, precios y funcionalidades de un modelo de suscripción rentable. Cubre pricing strategy, feature gating, packaging y cómo alinear el modelo con el valor percibido por el cliente.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor experto en pricing y packaging para productos de suscripción. Has asesorado a decenas de startups y scale-ups en el diseño de sus modelos de monetización por suscripción y entiendes profundamente la psicología del precio, la disposición a pagar y la arquitectura de valor en SaaS y plataformas digitales.

El diseño del modelo de suscripción es una de las decisiones más impactantes que toma un Product Manager. Un packaging mal diseñado puede limitar el crecimiento, generar fricción en ventas y desalinear los incentivos entre el producto y el negocio. Necesito tu ayuda para diseñar o revisar el modelo de suscripción de mi producto.

**Fundamentos de pricing en suscripciones:**
Explica los tres enfoques principales de pricing y cuándo usar cada uno:
- Pricing basado en coste (cost-plus): limitaciones y cuándo tiene sentido
- Pricing basado en competencia: riesgos de la guerra de precios
- Pricing basado en valor (value-based): cómo identificar la WTP (willingness to pay) de tus segmentos y cómo estructurar el precio alrededor del valor entregado

**Arquitectura de tiers:**
Guíame en el diseño de la estructura de planes:
- Por qué 3 planes es el estándar y cuál es el efecto del plan "decoy" (señuelo)
- Cómo nombrar los planes para transmitir posicionamiento (Starter/Pro/Enterprise vs. Basic/Plus/Premium)
- Qué features incluir en cada plan para maximizar la actualización al plan superior
- Feature gating: qué bloquear y qué ofrecer en todos los planes (el error de bloquear demasiado pronto)
- Límites de uso (seats, créditos, llamadas API) como mecanismo de expansión de revenue

**Métricas de suscripción que debe dominar el PM:**
Define y explica las métricas clave que el PM debe monitorizar:
- MRR (Monthly Recurring Revenue) y ARR: cómo calcularlo correctamente
- MRR breakdown: new MRR, expansion MRR, contraction MRR, churned MRR
- Churn rate: diferencias entre churn de clientes y churn de revenue (revenue churn)
- Net Revenue Retention (NRR): por qué es el indicador más importante de la salud del negocio
- ARPU y ARPC: qué impacta estos indicadores y cómo mejorarlos

**Estrategias de expansión de revenue:**
Explica los mecanismos de expansión dentro del modelo de suscripción:
- Upsell: cómo diseñar el producto para que los clientes quieran el plan superior
- Cross-sell: productos o módulos adicionales que complementan la suscripción principal
- Usage-based pricing (UBP): cuándo añadir componentes de pago por uso sobre la base fija
- Add-ons: features opcionales que no encajan en los tiers estándar

**Experimentos de pricing:**
Describe cómo testear cambios de precio de forma responsable:
- Cómo hacer pricing research (Van Westendorp, conjoint analysis, entrevistas con clientes)
- A/B testing de precios: consideraciones éticas y de grandfathering
- Cómo comunicar subidas de precio a clientes existentes sin generar churn
- Cuándo hacer un rediseño completo del packaging vs. ajustes incrementales

**Formato de respuesta:**
1. Framework de decisión para elegir el modelo de pricing adecuado a mi producto
2. Plantilla de arquitectura de 3 tiers con feature matrix y precios sugeridos
3. Calculadora de métricas de suscripción (MRR, churn, NRR) con fórmulas
4. Checklist de validación del packaging antes del lanzamiento
5. Errores más comunes en el diseño de modelos de suscripción y cómo evitarlos

Usa ejemplos reales de productos como Notion, Linear, Figma o Intercom para ilustrar buenos y malos ejemplos de packaging.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar modelo de suscripción con tiers y precios óptimos',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            // 6 - RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de equipos y cultura en empresas de modelo suscripción',
                'description'      => 'Descubre cómo adaptar la gestión de personas, objetivos e incentivos a la dinámica única de las empresas de suscripción, donde el éxito se mide en retención y crecimiento recurrente, no en ventas puntuales.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de recursos humanos con experiencia en empresas de suscripción digital y SaaS. Entiendes cómo el modelo de negocio de suscripción cambia la cultura, los incentivos, la estructura organizativa y los perfiles que se necesitan en comparación con empresas de ventas transaccionales.

Las empresas de suscripción tienen una lógica de negocio diferente: el valor se genera a lo largo del tiempo, no en el momento de la primera venta. Esto tiene implicaciones profundas en cómo deben gestionarse las personas, los equipos y los incentivos. Necesito tu ayuda para alinear la gestión de RRHH con las necesidades específicas de un negocio de suscripción.

**Perfiles clave en empresas de suscripción:**
Describe los roles únicos o adaptados que necesita una empresa de suscripción:
- Customer Success Manager (CSM): por qué es diferente a un Account Manager tradicional
- Renewal Manager: cuando tiene sentido separar renovaciones de new sales
- Churn analyst: el perfil de datos orientado a predecir y prevenir abandonos
- Growth engineer: perfil híbrido producto-datos-marketing para optimizar el funnel de activación
- Cómo estructurar el equipo en etapas tempranas vs. escala

**Incentivos y compensación en suscripciones:**
Explica cómo diseñar planes de compensación alineados con el modelo de suscripción:
- Por qué comisionar solo en new sales es un error en un modelo de suscripción
- Cómo incluir retención y NRR en los objetivos del equipo de ventas y CS
- Estructuras de comisión para renovaciones y expansión (upsell/cross-sell)
- OKRs adecuados para equipos de suscripción: qué medir en ventas, CS, producto y marketing
- Cómo evitar que los incentivos generen comportamientos que dañen la retención a largo plazo

**Cultura de empresa orientada a la retención:**
Describe cómo construir una cultura donde toda la empresa entiende que su trabajo impacta la retención:
- Cómo hacer que equipos no comerciales (producto, ingeniería, diseño) sientan responsabilidad sobre el churn
- Rituales de empresa para mantener el foco en el cliente suscriptor (churn reviews, VOC meetings)
- Cómo compartir las métricas de suscripción (MRR, churn, NRR) con toda la organización
- La cultura del customer success como filosofía de empresa, no solo como departamento

**Contratación para empresas de suscripción:**
Ayúdame a identificar los atributos clave al contratar para roles de suscripción:
- Qué buscar en un candidato a CSM: orientación al éxito del cliente vs. orientación a la venta
- Cómo evaluar la mentalidad de largo plazo en candidatos de ventas
- Señales de alerta en candidatos que vienen de modelos transaccionales
- Preguntas de entrevista específicas para evaluar la mentalidad de retención

**Gestión del rendimiento en suscripciones:**
Explica cómo hacer evaluaciones de desempeño alineadas con el modelo:
- Ciclos de revisión más cortos en empresas de suscripción (trimestrales vs. anuales)
- Métricas de rendimiento individual para cada rol clave
- Cómo gestionar a un vendedor que trae muchos clientes pero con alto churn
- Feedback loops rápidos usando datos de uso del producto

**Formato de respuesta:**
1. Organigrama típico de empresa de suscripción en etapa early-stage y growth
2. Tabla de métricas de rendimiento por rol (ventas, CS, producto, marketing)
3. Plantilla de plan de compensación variable para equipo de CS con foco en retención
4. Preguntas de entrevista para evaluar mentalidad de retención en candidatos
5. Ritual mensual de churn review: agenda, participantes y preguntas clave

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Adaptar RRHH y cultura a modelo de suscripción',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            // 7 - Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de métricas MRR, ARR, LTV y cohorts de suscripción',
                'description'      => 'Domina el análisis financiero específico de los modelos de suscripción. Aprende a calcular, interpretar y proyectar MRR, ARR, LTV, CAC y análisis de cohorts para tomar decisiones de inversión y crecimiento basadas en datos.',
                'prompt_content'   => <<<'EOT'
Actúa como un CFO o analista financiero especializado en negocios de suscripción y SaaS. Tienes experiencia profunda en el análisis de métricas de suscripción, modelado financiero de negocios recurrentes y presentación de estas métricas a inversores y juntas directivas.

Las finanzas de los negocios de suscripción son fundamentalmente diferentes a las de las empresas tradicionales. Los ingresos son diferidos en el tiempo, el valor se acumula con la retención y las métricas estándar de contabilidad (ingresos trimestrales, margen bruto) cuentan solo parte de la historia. Necesito dominar el lenguaje financiero específico de las suscripciones.

**Las métricas fundamentales de suscripción:**
Define con precisión y explica cómo calcular cada métrica:
- MRR (Monthly Recurring Revenue): qué incluir y qué excluir (pagos únicos, descuentos, impuestos)
- ARR (Annual Recurring Revenue): cuándo usar ARR vs. MRR y las trampas de la conversión
- Desglose del MRR: New MRR, Expansion MRR, Contraction MRR, Reactivation MRR, Churned MRR
- Churn rate: churn de clientes (logo churn) vs. churn de revenue (revenue churn)
- Net Revenue Retention (NRR) y Gross Revenue Retention (GRR): diferencias y benchmarks por sector
- ARPU (Average Revenue Per User) y ARPC (Average Revenue Per Customer)

**LTV (Lifetime Value) y CAC:**
Explica cómo calcular correctamente estas métricas críticas:
- Fórmulas de LTV: simple (ARPU / churn rate) vs. predictive LTV con descuento de flujos
- Por qué el LTV simple sobreestima el valor real y cómo corregirlo
- CAC: qué costes incluir en el CAC (solo ventas, o también marketing, onboarding)
- Ratio LTV:CAC: qué significa y qué ratio es saludable por etapa de empresa (3:1 mínimo, 5:1 ideal)
- Payback period: cómo calcularlo y por qué es más accionable que el ratio LTV:CAC

**Análisis de cohorts:**
Describe cómo hacer análisis de cohorts para entender la retención:
- Qué es un cohort de suscriptores y cómo definirlo (por mes de adquisición, canal, plan)
- Cómo construir una tabla de retención de cohorts y cómo leerla
- Retention curves: qué forma indican salud del negocio vs. problemas estructurales
- Revenue retention por cohort: cómo identificar cohorts que expanden vs. contraen
- Cómo usar el análisis de cohorts para proyectar el MRR futuro

**Modelado financiero de suscripciones:**
Ayúdame a construir un modelo financiero para un negocio de suscripción:
- Estructura del P&L para un negocio SaaS/suscripción (ingresos recurrentes vs. no recurrentes)
- Cómo tratar los costes de adquisición en el P&L: ¿período o capitalizar?
- Proyección de MRR: modelo de cubo de agua (waterfall) con todas las entradas y salidas
- Cuándo un negocio de suscripción alcanza el break-even y cómo modelar ese momento
- Métricas que los inversores de SaaS/suscripción miran primero en un data room

**Comunicación financiera a stakeholders:**
Explica cómo presentar las métricas de suscripción:
- Qué métricas reportar en el board deck mensual de una empresa de suscripción
- Cómo narrar la historia de crecimiento usando MRR waterfall + NRR
- Señales de alarma financieras en un negocio de suscripción y cómo comunicarlas
- Benchmarks de la industria (datos de referencia para comparar tu performance)

**Formato de respuesta:**
1. Glosario de las 15 métricas clave de suscripción con fórmula y ejemplo numérico
2. Plantilla de MRR waterfall mensual (tabla con todas las categorías de movimiento)
3. Guía de análisis de cohorts paso a paso con ejemplo numérico ficticio
4. Dashboard financiero mínimo para un negocio de suscripción (qué mostrar en el board)
5. Benchmarks de NRR, LTV:CAC y churn por tipo de negocio de suscripción

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Analizar y modelar finanzas de negocios de suscripción',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            // 8 - Legal
            [
                'profession_id'    => 8,
                'title'            => 'Aspectos legales y contractuales de los servicios de suscripción digital',
                'description'      => 'Comprende los requisitos legales clave para operar un negocio de suscripción: términos de servicio, política de cancelación, obligaciones bajo RGPD, renovación automática y gestión de disputas de cargo.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho digital y comercio electrónico con experiencia en la regulación de servicios de suscripción en mercados europeos y latinoamericanos. Tienes experiencia asesorando a plataformas digitales en la estructuración legal de sus modelos de suscripción para cumplir con la normativa aplicable y minimizar el riesgo de disputas.

Nota importante: Esta información es de carácter educativo y no constituye asesoramiento legal específico. Para decisiones concretas, siempre consulta con un abogado licenciado en tu jurisdicción.

Los negocios de suscripción digital están sometidos a un marco regulatorio complejo que combina normativa de consumidores, protección de datos, pagos electrónicos y publicidad. Un error en cualquiera de estas áreas puede resultar en sanciones regulatorias, chargebacks masivos o daño reputacional.

**Términos de servicio y contrato de suscripción:**
Describe los elementos esenciales que deben estar presentes en los T&C de un servicio de suscripción:
- Descripción clara del servicio: qué incluye y qué excluye cada plan
- Precio, ciclo de facturación y fecha exacta de cobro
- Política de renovación automática: cómo debe informarse al usuario (especialmente en la UE)
- Condiciones de cancelación: plazos, efectos y reembolsos
- Cambios en el servicio o en el precio: obligaciones de notificación previa
- Limitación de responsabilidad y garantías del servicio
- Ley aplicable y jurisdicción para resolución de disputas

**Derecho de desistimiento en la UE:**
Explica las obligaciones bajo la Directiva de Derechos de los Consumidores de la UE:
- El período de desistimiento de 14 días: cuándo aplica y cuándo no
- Excepciones al derecho de desistimiento en servicios digitales (con consentimiento expreso)
- Cómo obtener correctamente el consentimiento para excepciones al desistimiento
- Obligaciones de información precontractual antes de la suscripción
- Implicaciones para el diseño del checkout: qué texto legal debe mostrarse y dónde

**RGPD y protección de datos en suscripciones:**
Describe las obligaciones RGPD específicas para servicios de suscripción:
- Datos personales recogidos en el proceso de suscripción y sus bases legales
- Cómo gestionar el derecho de acceso, rectificación y supresión de un suscriptor
- Retención de datos de facturación: cuánto tiempo conservar facturas y datos de pago
- Comunicaciones de marketing a suscriptores: consentimiento vs. interés legítimo
- Portabilidad de datos: qué datos debe poder exportar un suscriptor

**Gestión de chargebacks y disputas de pago:**
Explica cómo minimizar y gestionar los chargebacks en suscripciones:
- Causas más comunes de chargebacks en servicios de suscripción (renovación no reconocida, insatisfacción)
- Prácticas de facturación que reducen el riesgo de chargebacks (descriptor claro, notificación previa)
- Cómo responder a un chargeback con evidencia documental suficiente
- Umbral de chargebacks que pone en riesgo la cuenta de Stripe/procesador
- Política de reembolso proactiva como alternativa al chargeback

**Renovación automática: dark patterns vs. cumplimiento:**
Distingue entre prácticas legales e ilegales en renovaciones automáticas:
- Qué constituye un dark pattern en el proceso de suscripción (FTC guidelines, DSA de la UE)
- Cómo estructurar el proceso de cancelación para que sea tan fácil como la suscripción
- Notificaciones de renovación obligatorias (especialmente para suscripciones anuales)
- Regulaciones específicas de algunos estados de EE.UU. sobre renovación automática

**Formato de respuesta:**
1. Checklist legal de lanzamiento de un servicio de suscripción en la UE
2. Cláusulas mínimas obligatorias en los Términos de Servicio de suscripción
3. Texto de ejemplo para la pantalla de checkout conforme a normativa UE
4. Proceso de cancelación legalmente correcto paso a paso
5. Plantilla de política de reembolsos para servicios de suscripción digital

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estructurar legalmente un negocio de suscripción',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            // 9 - Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Reducción de churn y estrategia de retención de suscriptores',
                'description'      => 'Desarrolla un sistema completo de retención para reducir el churn en tu base de suscriptores. Aprende a identificar señales de riesgo de abandono, diseñar intervenciones oportunas y crear un programa de dunning efectivo para recuperar pagos fallidos.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en Customer Success especializado en retención de suscriptores y reducción de churn. Has liderado estrategias de retención en plataformas de suscripción con miles de clientes y conoces en profundidad tanto el churn voluntario (el cliente decide irse) como el churn involuntario (el pago falla).

El churn es el mayor enemigo de un negocio de suscripción. Reducir el churn mensual en solo 1-2 puntos porcentuales puede doblar el LTV promedio de los clientes y transformar completamente la economía del negocio. Necesito construir un sistema de retención robusto.

**Tipos de churn y sus causas:**
Explica la taxonomía del churn y las causas más comunes:
- Churn voluntario activo: el cliente cancela conscientemente (insatisfacción, precio, alternativa)
- Churn voluntario pasivo: el cliente no renueva por olvido o falta de engagement
- Churn involuntario: el pago falla y la suscripción expira (el más fácil de recuperar)
- Churn por ciclo de vida: el cliente logró su objetivo y ya no necesita el servicio
- Cómo segmentar el churn para diseñar intervenciones específicas por causa

**Indicadores tempranos de riesgo de churn:**
Describe las señales de comportamiento que predicen el abandono:
- Señales de uso del producto: caída de logins, descenso en features core, ausencia en semanas clave
- Señales de soporte: aumento de tickets, ticket de cancelación, quejas recurrentes sobre lo mismo
- Señales de facturación: cambio a plan inferior, eliminación de asientos, activación de pausa
- Señales de comunicación: no abrir emails, ignorar notificaciones in-app
- Cómo construir un health score o churn score simple sin necesidad de ML avanzado

**Intervenciones de retención proactiva:**
Diseña un sistema de intervenciones por nivel de riesgo:
- Riesgo bajo: nurturing automatizado para mantener el engagement (emails de valor, tips)
- Riesgo medio: outreach personalizado del CSM, oferta de check-in o sesión de valor
- Riesgo alto: intervención urgente, escalada a manager, oferta de retención específica
- Triggers de intervención automáticos en la plataforma (in-app messages cuando el health score baja)
- Cómo decidir qué descuento o beneficio ofrecer sin entrenar a los clientes a amenazar con irse

**Manejo del proceso de cancelación:**
Explica cómo diseñar el flujo de cancelación para recuperar el máximo de clientes:
- Exit surveys: cómo preguntar el motivo de cancelación para mejorar el producto
- Ofertas de retención en el flujo de cancelación: descuento, pausa, downgrade
- Cuándo ofrecer una pausa como alternativa a la cancelación
- El arte de la "offboarding experience" que deja la puerta abierta al regreso
- Win-back campaigns: cómo recuperar suscriptores que ya cancelaron

**Gestión del dunning (churn involuntario):**
Describe el sistema de recuperación de pagos fallidos:
- Configuración del retry schedule: cuántos intentos, con qué cadencia
- Secuencia de comunicaciones de dunning: email, SMS, in-app según urgencia
- El tono correcto en las comunicaciones de dunning (sin culpar, orientado a solución)
- Smart retries: usar datos de comportamiento del banco para optimizar el momento del reintento
- Cuándo pausar la cuenta vs. cancelar definitivamente ante impago prolongado

**Formato de respuesta:**
1. Framework de health score simple (variables, pesos, clasificación verde/amarillo/rojo)
2. Playbook de intervención por nivel de riesgo (qué hacer, quién, cuándo, con qué herramienta)
3. Secuencia de dunning de 5 touchpoints (email + in-app) con copy de ejemplo
4. Guión de llamada de retención para clientes en proceso de cancelación
5. Dashboard de retención mensual: qué métricas reportar al equipo y a dirección

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Reducir churn y construir sistema de retención de suscriptores',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            // 10 - Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Modelo de negocio de suscripción para freelancers y consultores independientes',
                'description'      => 'Transforma tu negocio freelance de proyectos puntuales a ingresos recurrentes con un modelo de suscripción. Aprende a diseñar tus paquetes de servicios recurrentes, fijar precios, captar suscriptores y gestionar una cartera de clientes por suscripción.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de negocios especializado en ayudar a freelancers y consultores independientes a transitar desde el modelo de proyecto puntual hacia ingresos recurrentes y predecibles mediante modelos de suscripción. Has trabajado con centenares de profesionales independientes en esta transición y entiendes los miedos, retos y oportunidades específicos del freelancer que quiere estabilizar sus ingresos.

El modelo de suscripción para freelancers es una de las mayores transformaciones que puede hacer un profesional independiente. Pasar de perseguir proyectos a tener clientes que pagan mes a mes cambia radicalmente la economía, el estrés y la libertad del negocio. Necesito tu ayuda para diseñar e implementar este modelo.

**Por qué el modelo de suscripción funciona para freelancers:**
Explica los beneficios específicos del modelo recurrente para independientes:
- Predictibilidad de ingresos: saber a principios de mes cuánto vas a ganar
- Reducción del tiempo de venta: menos pitch de proyectos, más trabajo de valor
- Relaciones más profundas con clientes: conoces el negocio del cliente mucho mejor
- Pricing basado en relación, no en horas: escapar del modelo hora-factura
- Escalabilidad limitada pero controlada: cómo gestionar la capacidad con un número finito de suscriptores

**Diseño de paquetes de suscripción para freelancers:**
Guíame en el diseño de mis ofertas recurrentes:
- Tipos de servicios que funcionan bien en modelo de suscripción (asesoría, contenido, mantenimiento, soporte)
- Tipos de servicios que NO encajan bien en suscripción y por qué
- Cómo definir el alcance de cada paquete sin que se convierta en un scope infinito
- Definición de entregables mensuales claros: qué incluye, qué no y cómo medirlo
- Estructura de 2-3 paquetes con diferentes niveles de intensidad y precio

**Fijación de precios para suscripciones de servicios:**
Explica cómo calcular el precio correcto:
- Cálculo de tu tarifa horaria real y cómo traducirla a precio de suscripción
- El pricing basado en valor para servicios recurrentes (qué resultado consigue el cliente cada mes)
- Precio de lanzamiento para primeros suscriptores vs. precio definitivo
- Grandfathering: cómo mantener precios de primeros clientes cuando subes tarifas
- Comparación de precio mensual vs. descuento anual para freelancers

**Captación de los primeros suscriptores:**
Describe la estrategia para conseguir los primeros clientes recurrentes:
- Convertir clientes existentes de proyecto puntual a suscripción (el proceso más fácil)
- Cómo presentar la propuesta de suscripción a un cliente nuevo sin sonar raro
- Oferta de piloto o prueba de 30-90 días para reducir la fricción del primer compromiso
- Canales de captación más efectivos para freelancers con modelo de suscripción
- Cuántos suscriptores necesitas para tener un negocio freelance sostenible

**Gestión operativa de la cartera de suscriptores:**
Explica cómo operar el negocio con múltiples suscriptores activos:
- Cómo organizar el tiempo con 5, 10 o 15 clientes de suscripción
- Herramientas de gestión: facturación recurrente, contratos, comunicación
- Cómo manejar el suscriptor que pide más de lo que incluye el paquete
- Política de cancelación y off-boarding para clientes que quieren salir
- Cómo gestionar la ausencia o vacaciones siendo el único proveedor del servicio

**Formato de respuesta:**
1. Plantilla de paquete de suscripción para freelancer (nombre, entregables, precio, lo que no incluye)
2. Calculadora de cuántos suscriptores necesitas según tu objetivo de ingresos
3. Script de conversación para proponer la suscripción a un cliente existente
4. Contrato de suscripción de servicios freelance: cláusulas mínimas esenciales
5. Plan de 90 días para lanzar tu primer paquete de suscripción como freelancer

EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Transformar negocio freelance a modelo de ingresos recurrentes',
                'vote_score'       => 39,
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
