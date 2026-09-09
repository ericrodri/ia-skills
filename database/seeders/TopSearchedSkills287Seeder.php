<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills287Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de suscripción: adquirir y retener suscriptores rentables',
                'description'      => 'Diseña estrategias de marketing especializadas en el modelo de suscripción: captación, activación, reducción del churn y expansión de ingresos recurrentes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de marketing con experiencia demostrada en empresas de modelo de suscripción: SaaS, medios de comunicación digitales, boxes físicas, comunidades de membresía y plataformas de contenido.

Gestiono el marketing de una empresa de suscripción y necesito una estrategia completa que optimice cada etapa del ciclo de vida del suscriptor, desde la adquisición hasta la conversión a fans leales que no cancelan.

Nuestro producto de suscripción es: [describe qué ofreces, a qué precio, mensual o anual, si hay plan freemium o trial]
Nuestras métricas actuales son: [MRR aproximado, churn mensual, CAC, LTV si los conoces]
Nuestro mayor reto es: [adquirir más suscriptores, reducir el churn, aumentar el ARPU, mejorar la activación del trial]

Necesito que me ayudes a desarrollar:

**1. Estrategia de adquisición específica para suscripción**
Explícame cómo difiere la adquisición de clientes en un modelo de suscripción versus la venta única: por qué el LTV proyectado justifica un CAC más alto, cómo estructurar campañas de paid que optimicen hacia suscriptores recurrentes y no hacia primeras compras, cómo usar el trial o el freemium como embudo de conversión y qué palancas de marketing activan la conversión de trial a pago. Dame ejemplos de mensajes y ofertas que funcionan para cada tipo de suscripción.

**2. Onboarding y activación del nuevo suscriptor**
Detalla la secuencia de onboarding ideal para los primeros 30 días del suscriptor: qué emails enviar (y con qué cadencia), qué acciones in-app o in-product debe completar el usuario para llegar al "momento aha", cómo el equipo de marketing puede coordinar con el equipo de producto para reducir la tasa de abandono temprano (churn del primer mes que es siempre el más alto). Dame una secuencia de 5 emails de onboarding con el objetivo específico de cada uno.

**3. Retención y reducción del churn voluntario**
Explícame los principales drivers del churn voluntario en modelos de suscripción y cómo el marketing puede actuar sobre cada uno: percepción de valor insuficiente (comunicación de valor continua, newsletters de actualizaciones, campañas de reengagement), falta de hábito de uso (recordatorios de uso, gamificación, digest semanales), precio percibido como alto (anclaje de valor, campañas de ROI, testimonios de otros suscriptores). Dame el flujo de campañas de retención que lanzaría antes y después de la fecha de renovación.

**4. Recuperación de suscriptores en riesgo y reactivación de cancelados**
Dime cómo identificar suscriptores con alto riesgo de churn antes de que cancelen (señales de uso decreciente, sin login en X días, apertura de emails de cancelación de otros) y qué campañas automatizadas de win-back lanzar. Explícame también cómo diseñar el flujo de cancelación para recuperar una parte de los que intentan irse: encuesta de salida para entender el motivo, oferta de pausa, oferta de downgrade, oferta de descuento especial solo si intentan cancelar.

**5. Expansión del ARPU: upsell y cross-sell en suscripciones**
Explícame estrategias de marketing para aumentar el ingreso por suscriptor sin subir el precio base: campañas de upgrade a plan anual (destacar el ahorro y la mentalidad de compromiso), upsell a planes de mayor valor en momentos de alto engagement, add-ons y complementos opcionales, introducción de niveles premium con beneficios exclusivos. Dame ejemplos concretos de mensajes de upsell que no resulten intrusivos sino que aporten valor percibido real.

**6. Métricas de marketing específicas del modelo de suscripción**
Define el dashboard de marketing para una empresa de suscripción: CAC por canal, CAC/LTV ratio por segmento, tasa de conversión de trial a pago por cohorte, churn mensual y churn por cohorte de adquisición, NRR (net revenue retention), MRR añadido por new business vs. expansión vs. reactivación. Explícame cómo leer estas métricas para tomar decisiones de inversión en canales de marketing.

Presenta la estrategia como un plan trimestral con prioridades claras y señala los tres errores más comunes que cometen los equipos de marketing al gestionar el ciclo de vida del suscriptor.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 35,
                'use_case'         => 'Diseñar la estrategia de marketing completa para un negocio de suscripción',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Subscription billing engineering: la arquitectura técnica del modelo recurrente',
                'description'      => 'Diseña e implementa la infraestructura técnica de facturación recurrente: integración con Stripe, gestión de planes, ciclos de vida del pago y manejo de fallos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de software senior especializado en arquitectura de sistemas de facturación recurrente para productos SaaS y plataformas de suscripción.

Necesito diseñar o mejorar la arquitectura técnica de facturación recurrente de nuestro producto. Quiero construir un sistema robusto, escalable y que maneje correctamente todos los estados del ciclo de vida de una suscripción.

Nuestro stack tecnológico es: [lenguaje, framework backend, base de datos, si usamos Stripe/Paddle/Chargebee/otro]
La complejidad de nuestros planes es: [número de planes, si hay trials, freemium, add-ons, por uso, por asientos]
Los problemas actuales son: [pagos fallidos sin recuperar, webhooks inconsistentes, modelos de datos confusos, dificultad para añadir nuevos planes]

Necesito que me expliques:

**1. Modelado de datos para suscripciones**
Explícame cómo modelar correctamente las entidades principales de un sistema de suscripción en la base de datos: Customer, Subscription, SubscriptionItem, Plan, Price, Invoice, PaymentMethod, CreditNote. Detalla las relaciones entre ellas, qué campos son críticos en cada entidad, cómo manejar los estados de suscripción (trialing, active, past_due, canceled, unpaid) y por qué es un error depender completamente del modelo de datos del proveedor de pagos en lugar de mantener tu propio modelo sincronizado.

**2. Integración con Stripe: webhooks y sincronización de estado**
Explícame la arquitectura correcta para integrar Stripe en un sistema de suscripción: cómo configurar y procesar los webhooks de Stripe de forma idempotente, qué eventos son críticos y cuáles se pueden ignorar (customer.subscription.updated, invoice.payment_succeeded, invoice.payment_failed, customer.subscription.deleted), cómo manejar la entrega at-least-once de los webhooks, cómo sincronizar el estado de Stripe con tu base de datos local de forma resiliente usando una cola de mensajes.

**3. Manejo de fallos de pago y recuperación de ingresos**
Detalla la lógica de recuperación de pagos fallidos: smart retries automáticos de Stripe (Dunning), notificaciones proactivas al cliente antes y después del fallo (email de actualización de tarjeta), flujo de actualización de método de pago, cuándo pasar una suscripción a estado past_due vs. unpaid vs. canceled, cómo implementar un grace period configurable. Explícame cómo impacta cada decisión en el revenue recovery rate.

**4. Facturación por uso (usage-based billing)**
Explícame cómo implementar facturación por uso sobre Stripe: los modelos de precios por uso (per-unit, tiered, volume), cómo reportar el uso mediante la API de usage records, cómo manejar la concurrencia cuando múltiples procesos reportan uso simultáneamente, cómo construir un medidor de uso interno que sea la fuente de verdad antes de enviar los datos a Stripe, y cómo mostrar al usuario su consumo en tiempo real dentro del producto.

**5. Multi-tenancy, upgrades y downgrades**
Explícame cómo manejar técnicamente los cambios de plan (upgrades y downgrades) de forma correcta: proration en Stripe (immediate vs. next billing cycle), cómo reflejar el cambio inmediatamente en los permisos del usuario sin esperar al siguiente ciclo de facturación, cómo gestionar add-ons y SubscriptionItems adicionales, cómo manejar suscripciones con múltiples asientos y el billing por seat con usuarios añadidos o eliminados durante el ciclo.

**6. Testing y monitorización de la infraestructura de billing**
Dime cómo testear correctamente un sistema de suscripción: uso del entorno de test de Stripe, cómo simular eventos de webhook en tests de integración, qué scenarios críticos siempre deben tener cobertura (primer cargo, fallo de pago, recuperación, cancelación, reactivación). Explícame también qué alertas y métricas de monitorización debo configurar: tasa de fallos de webhook, latencia en el procesamiento de eventos, tasa de pagos fallidos, MRR calculado internamente vs. Stripe dashboard.

Incluye código de ejemplo donde sea relevante y señala los cinco antipatrones más comunes en implementaciones de billing recurrente que causan pérdida de ingresos o deuda técnica severa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 45,
                'use_case'         => 'Arquitectura técnica de un sistema de facturación recurrente robusto',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de la experiencia de suscripción: del trial al evangelizador',
                'description'      => 'Diseña los flujos de usuario que maximizan la conversión de trial a pago, reducen el churn y convierten suscriptores en promotores activos del producto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de experiencia de usuario especializado en productos de suscripción digital, con experiencia en optimización de conversión, onboarding y retención a través del diseño.

Soy diseñador UX/UI y necesito diseñar (o rediseñar) la experiencia completa del ciclo de vida del suscriptor: desde que descubre el producto hasta que se convierte en un defensor entusiasta que lo recomienda.

El producto es: [describe el producto de suscripción, el tipo de usuario y el modelo de pricing —freemium, trial, directo—]
El estado actual del diseño es: [si hay un producto existente, cuál es la tasa de conversión de trial a pago aproximada, cuál es el principal punto de abandono]
El mayor reto de diseño es: [la activación temprana, la pantalla de selección de plan, el flujo de pago, el onboarding post-pago]

Necesito que me guíes en el diseño de:

**1. Pricing page que convierte**
Explícame los principios de diseño de una página de pricing que maximiza la conversión a suscripción: anclaje de precios (mostrar el plan más caro primero para anclar la percepción), el plan recomendado destacado visualmente, uso de la frecuencia anual como opción por defecto con descuento visible, features table que comunica valor en lugar de funcionalidades, prueba social en el pricing (número de clientes, logos, testimonio junto al plan), reducción de fricción (no se requiere tarjeta para el trial, garantía de devolución). Dame un wireframe de la estructura ideal.

**2. Onboarding que lleva al usuario al momento aha lo antes posible**
Explícame cómo diseñar un flujo de onboarding que active al usuario nuevo en los primeros 10 minutos: progressive disclosure (no mostrar todo de golpe), checklist de configuración inicial como gamificación ligera, empty states que guían hacia la primera acción de valor, tooltips contextuales en el momento adecuado, personalización del onboarding según el rol o caso de uso del usuario. Dame los principios para priorizar qué mostrar en la primera sesión versus qué diferir a las siguientes.

**3. Diseño de la pantalla de renovación y gestión de suscripción**
Dime cómo diseñar la página de gestión de suscripción del usuario para reducir el churn pasivo y el involuntario: mostrar el valor recibido (uso del período actual, logros desbloqueados, dinero ahorrado vs. alternativas), upgrade path visible pero no agresivo, gestión de método de pago clara y accesible, opción de pausa antes de cancelar. Explícame también cómo diseñar el flujo de cancelación para recuperar una parte de los que intentan irse sin ser manipulador.

**4. Notificaciones y comunicación en el producto**
Explícame cómo diseñar las notificaciones in-app y los momentos de comunicación con el usuario a lo largo del ciclo de vida de la suscripción: mensajes de bienvenida y activación en los primeros días, recordatorios de funciones no descubiertas para usuarios que solo usan el 30% del producto, alertas de renovación próxima con resumen de valor del período, comunicación de nuevas funciones que justifican el precio, mensajes de win-back para usuarios en riesgo. Dime cuándo usar modal, banner, email o notificación push para cada caso.

**5. Diseño del upgrade y expansión de cuenta**
Detalla cómo diseñar los momentos de upsell dentro del producto para que no sean intrusivos sino que aporten valor percibido: feature gates que muestran lo que obtienes al subir de plan con preview o blur del contenido bloqueado, contexto de uso que muestra cuándo el usuario está llegando al límite de su plan actual, comparativa de planes inline en el momento justo, flujo de upgrade en un solo click sin tener que salir del flujo de trabajo. Dame ejemplos de patterns de upsell que respetan la experiencia del usuario.

**6. Métricas de experiencia que un diseñador debe monitorizar**
Define qué métricas de UX son las más relevantes para un diseñador de productos de suscripción: tasa de completitud del onboarding por paso, tiempo hasta la primera acción de valor, DAU/MAU ratio como indicador de hábito, tasa de conversión de trial por variante de diseño en tests A/B, satisfaction score (CSAT o NPS) en momentos clave del ciclo de vida, tasa de apertura y click de los emails transaccionales relacionados con el ciclo de suscripción.

Incluye recomendaciones sobre herramientas de diseño y prototipado específicas para este tipo de flows, y señala los tres errores de diseño más comunes que aumentan el churn involuntariamente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'         => 'Diseñar la experiencia de usuario que convierte trials en suscriptores leales',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Selling subscriptions: cómo vender recurrencia y no transacciones únicas',
                'description'      => 'Adapta tu metodología de ventas al modelo de suscripción: cualificación, demostración de valor recurrente, gestión de objeciones de precio y técnicas de cierre.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con experiencia en equipos de ventas de empresas SaaS y de suscripción, especializado en adaptar la metodología comercial al modelo de ingresos recurrentes.

Soy comercial o responsable de ventas de una empresa de suscripción y necesito adaptar mi forma de vender al modelo recurrente: los argumentos son diferentes, las objeciones son distintas y el éxito no se mide solo en el cierre sino en el LTV del cliente que traigo.

El producto de suscripción que vendo es: [describe el producto, el precio mensual y anual, el proceso de trial si existe]
Mi perfil de cliente ideal es: [tamaño de empresa, sector, rol del decisor, ciclo de venta habitual]
Las objeciones más frecuentes son: [precio alto comparado con la competencia, resistencia al compromiso recurrente, preferencia por pago único, duda sobre el ROI]

Necesito que me ayudes a dominar:

**1. El cambio de mentalidad de la venta única a la venta de suscripción**
Explícame por qué vender una suscripción es fundamentalmente diferente a vender un producto o servicio de pago único: el cliente no está comprando un producto sino comprando el resultado continuo que le da el producto, la conversación de ventas se centra en el ROI acumulado a lo largo del tiempo y no en el precio del mes, el éxito del comercial se mide en ARR añadido y en churn de los clientes que trae. Dame los cambios mentales concretos que un comercial debe hacer al pasar de vender proyectos o licencias perpetuas a vender suscripciones.

**2. Cualificación enfocada en el LTV potencial**
Explícame cómo cualificar a los prospectos de una suscripción pensando no solo en si van a firmar sino en si van a quedarse y crecer: señales de que un prospecto tendrá alto LTV (problema urgente y recurrente, uso intensivo potencial del producto, cultura data-driven, disposición a integrar el producto en los procesos), señales de bajo LTV o alto riesgo de churn temprano (compra por precio, sin caso de uso claro, sin champion interno, expectativas desalineadas). Dame preguntas de cualificación específicas para detectar estos perfiles.

**3. Demostración de valor recurrente en la demo**
Detalla cómo estructurar una demo de producto de suscripción para que el cliente entienda el valor que recibe cada mes y no solo el valor inicial: mostrar cómo el producto mejora con el uso continuado (datos acumulados, aprendizaje automático, historial), cuantificar el tiempo o dinero que ahorra el cliente cada mes con el producto, mostrar el roadmap de nuevas funciones que seguirá recibiendo como suscriptor, comparar el coste mensual con el coste de la alternativa (equipo manual, herramienta de la competencia, status quo).

**4. Gestión de objeciones propias de la suscripción**
Dame las respuestas más efectivas a las objeciones más comunes en la venta de suscripciones: "es muy caro para lo que necesito" (reencuadrar en coste por resultado, no en precio absoluto), "no quiero comprometerme a una suscripción" (trial sin riesgo, facilidad de cancelación, flexibilidad de planes), "prefiero pagar una vez y tenerlo para siempre" (argumento de las actualizaciones continuas y el soporte), "déjame consultarlo con el equipo de finanzas" (cómo preparar el business case para el decisor financiero).

**5. El cierre en suscripciones: anual vs. mensual**
Explícame las técnicas para cerrar en plan anual cuando el cliente quiere empezar en mensual: cómo presentar el ahorro en términos absolutos y no en porcentaje ("ahorras 240€ al año" vs. "ahorras un 20%"), cómo usar el compromiso como señal de confianza mutua, cómo ofrecer el anual como upgrade durante los primeros 30 días del trial en lugar de presionarlo en el primer cierre. Dame el script de conversación para proponer el plan anual sin que suene a presión.

**6. Handoff a Customer Success y el papel del comercial en la retención**
Explícame cómo el comercial impacta en el churn incluso después del cierre: la importancia de un handoff de calidad al equipo de CS (expectativas del cliente documentadas, caso de uso acordado, criterios de éxito definidos), cómo el comercial puede hacer expansión y upsell en los clientes que ya firmó sin invadir el territorio de CS, y cuál es la responsabilidad del comercial cuando un cliente que trajo cancela en los primeros tres meses.

Dame un script de una llamada de ventas de suscripción completa, desde la apertura hasta el cierre, de 45 minutos, con los momentos clave señalados.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'         => 'Adaptar la metodología de ventas al modelo de suscripción recurrente',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Subscription product metrics: MRR, churn, expansion y el growth model',
                'description'      => 'Domina las métricas clave de un producto de suscripción, aprende a calcularlas correctamente y construye el modelo de crecimiento que guía las decisiones de producto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager y analista de datos con experiencia en métricas de productos SaaS y de suscripción, especializado en ayudar a equipos a tomar decisiones basadas en los indicadores financieros y de comportamiento correctos.

Soy PM o founder de un producto de suscripción y necesito dominar el sistema de métricas que permite entender la salud del negocio, identificar problemas antes de que sean graves y tomar decisiones de producto bien fundamentadas.

Nuestro producto es: [describe el producto, el modelo de pricing y la etapa del negocio]
Las métricas que monitorizamos actualmente son: [lista qué métricas ya sigues, con qué frecuencia y en qué herramientas]
Nuestro mayor reto analítico es: [calcular el churn correctamente, entender la cohort retention, proyectar el MRR, explicar las métricas a inversores]

Necesito que me expliques en detalle:

**1. MRR y sus componentes: cómo calcularlo y desglosarlo**
Explícame la definición exacta de MRR y cómo descomponerlo en los cinco movimientos que lo explican: New MRR (nuevos clientes), Expansion MRR (upgrades y add-ons de clientes existentes), Contraction MRR (downgrades), Churned MRR (cancelaciones) y Reactivation MRR (clientes que vuelven). Dime las fórmulas exactas y los errores más comunes en el cálculo del MRR (incluir pagos anuales de golpe, contar trials como MRR, doble conteo en downgrades).

**2. Churn: tipos, fórmulas y por qué la mayoría lo calcula mal**
Explícame la diferencia entre logo churn (tasa de cancelación de clientes), revenue churn (tasa de pérdida de MRR) y net revenue retention (NRR o NDR). Dime cómo calcular cada uno correctamente con ejemplos numéricos, por qué una empresa puede tener logo churn positivo pero NRR por encima del 100% (expansión que supera las cancelaciones), y cuál es el nivel de churn aceptable según el tipo de producto y el segmento de cliente (SMB vs. enterprise).

**3. Cohort analysis y retention curves**
Explícame cómo construir y leer un análisis de cohortes de retención para un producto de suscripción: cómo agrupar a los clientes por mes de adquisición, cómo calcular la retención mes a mes para cada cohorte, cómo interpretar la forma de la curva (caída brusca en los primeros meses que luego se estabiliza vs. churn continuo), cómo comparar cohortes de distintos períodos para detectar si las mejoras del producto han mejorado la retención. Dame un ejemplo numérico con una tabla de cohortes simplificada.

**4. LTV y CAC: la ecuación de salud del negocio**
Explícame cómo calcular el LTV de forma correcta para un modelo de suscripción (LTV = ARPU / churn mensual en el modelo simplificado, o usando el LTV basado en cohortes para mayor precisión), cómo calcular el CAC incluyendo todos los costes de ventas y marketing, y qué ratio LTV/CAC y payback period son saludables según el estadio del negocio. Dime cómo mejorar el ratio LTV/CAC actuando sobre cada una de las variables que lo componen.

**5. El growth model de suscripción y la simulación de escenarios**
Explícame cómo construir un growth model simplificado para un negocio de suscripción que permita simular escenarios de crecimiento: el modelo de stock-and-flow (nuevos suscriptores que entran, churn que sale, expansion que crece el MRR de los que se quedan), cómo este modelo permite proyectar el MRR a 12 y 24 meses bajo distintos supuestos de adquisición y retención, cómo usar el modelo para responder preguntas como "si reduzco el churn a la mitad, cuánto MRR adicional tengo en 12 meses".

**6. Dashboard de métricas de suscripción para la toma de decisiones de producto**
Diseña el dashboard mensual ideal para el equipo de producto: qué métricas mostrar (MRR por movimiento, NRR, logo churn, feature adoption por plan, DAU/MAU, activation rate), con qué granularidad (total, por plan, por segmento de cliente, por cohorte de adquisición), y cómo interpretar cada métrica para priorizar el roadmap. Dime qué herramientas se usan habitualmente para construir este tipo de dashboards (ChartMogul, Baremetrics, Stripe, Amplitude, Mixpanel, dbt + BI tool).

Termina con las cinco preguntas que un inversor de SaaS me haría sobre estas métricas y cómo respondería a cada una con datos bien construidos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 40,
                'use_case'         => 'Construir el sistema de métricas de un producto de suscripción y usarlo para tomar decisiones',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Compensación en empresas de suscripción: cómo alinear incentivos con el modelo',
                'description'      => 'Diseña estructuras de compensación que alineen los incentivos de todos los equipos con las métricas de éxito de un negocio de ingresos recurrentes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de compensación y diseño organizacional con experiencia en empresas SaaS y de suscripción, especializado en diseñar estructuras de incentivos que alinean el comportamiento de los equipos con las métricas de salud de un modelo de ingresos recurrentes.

Soy HR Business Partner, Chief People Officer o directivo de una empresa de suscripción y necesito diseñar estructuras de compensación que incentiven los comportamientos correctos en cada departamento, alineados con el crecimiento del MRR y la retención de clientes.

Nuestra empresa tiene: [tamaño, fase —early stage, growth, scale—, MRR actual aproximado]
Los equipos que necesito incentivar son: [ventas, customer success, producto, marketing, ingeniería]
El problema actual de alineación es: [ventas que traen clientes con alto churn, CS que no hace expansión, producto sin incentivo para la retención]

Necesito que me expliques:

**1. Por qué la compensación tradicional falla en modelos de suscripción**
Explícame los problemas que genera aplicar estructuras de compensación de venta única o de empresa de servicios a un modelo de suscripción: el comercial que cobra 100% de la comisión al cerrar y no tiene incentivo para traer clientes que se queden, el equipo de CS que no tiene incentivo para la expansión y solo gestiona el soporte, el equipo de producto compensado por funcionalidades lanzadas y no por retención mejorada. Dame ejemplos concretos de comportamientos disfuncionales que genera cada estructura mal diseñada.

**2. Compensación de ventas en modelos de suscripción**
Detalla cómo estructurar la compensación del equipo comercial en una empresa de suscripción: comisión basada en ARR añadido (no en primer mes), clawback parcial si el cliente cancela en los primeros seis o doce meses (con la mecánica exacta de cómo funciona y cómo comunicarlo al equipo), bonus por conversión a plan anual, acelerador por superar quota. Dime cómo calibrar los porcentajes según el CAC y el LTV objetivo para que el plan sea sostenible financieramente.

**3. Compensación de Customer Success alineada con la retención y expansión**
Explícame cómo estructurar la compensación del equipo de Customer Success en un modelo de suscripción: base salary competitiva más variable ligado a las métricas correctas (GRR o logo retention de su cartera, NRR incluyendo expansión, NPS o CSAT de sus cuentas, número de renovaciones completadas), cómo evitar el conflicto de interés de un CSM que hace expansión activa (¿debe cobrar como un comercial o con un bonus separado?), cómo construir un OTE (On-Target Earnings) creíble para el equipo de CS.

**4. Compensación de producto e ingeniería ligada a outcomes**
Explícame cómo diseñar la compensación variable de los equipos de producto e ingeniería en torno a resultados de negocio en lugar de outputs: bonus ligado a mejoras de activation rate, mejoras de churn, NPS del producto, métricas de adopción de nuevas funcionalidades. Dime cómo evitar los problemas de esta aproximación (retraso entre la acción y el resultado medible, factores fuera del control del equipo) y cómo construir el sistema de métricas compartidas que hace este enfoque justo.

**5. Equity y long-term incentives en empresas de suscripción en fase de crecimiento**
Explícame el papel de las stock options y el equity como complemento a la compensación en efectivo en empresas de suscripción en fase de growth: cuándo tiene sentido ofrecer equity significativo vs. salario por encima del mercado, cómo estructurar los vesting schedules (4 años con cliff de 1 año como estándar), cómo comunicar el valor potencial del equity de forma honesta sin prometer lo imposible, y cómo usar el equity como herramienta de retención de talento clave en los momentos de renovación de contratos.

**6. Benchmarks de compensación en el sector SaaS y de suscripción**
Dime cómo conseguir datos de mercado para calibrar la compensación en una empresa de suscripción: fuentes de datos de benchmark (Radford, Carta Total Comp, OpenComp, Levels.fyi para ingeniería, encuestas sectoriales de asociaciones de SaaS), cómo interpretar los percentiles (P50 para roles no críticos, P75 para roles clave, P90 para roles de liderazgo que no se pueden perder), y cómo ajustar la compensación según la geografía, el estadio de la empresa y la disponibilidad de talento en el mercado.

Dame un ejemplo de plan de compensación completo para un equipo de ventas de una empresa SaaS de 2M€ de ARR en fase de crecimiento, con los números ilustrativos para que sirva como referencia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 35,
                'use_case'         => 'Diseñar compensación que alinee incentivos con las métricas de un negocio recurrente',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Financial modeling de SaaS: las métricas que importan en el modelo recurrente',
                'description'      => 'Construye el modelo financiero de un negocio SaaS o de suscripción con las métricas correctas, proyecciones realistas y el nivel de detalle que exigen los inversores.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista financiero especializado en modelos de negocio de suscripción y SaaS, con experiencia en la construcción de modelos financieros para empresas en fase de growth y en la preparación de materiales para rondas de inversión.

Necesito construir o mejorar el modelo financiero de nuestra empresa de suscripción para tener una visión clara de la salud del negocio, proyectar el crecimiento de forma defensible y estar preparado para conversaciones con inversores o con el consejo.

Nuestro modelo de negocio es: [SaaS B2B, marketplace con suscripción, caja de suscripción física, media de membresía]
Nuestras métricas actuales son: [MRR, churn aproximado, número de clientes, ARPU]
El objetivo del modelo es: [planificación interna, preparar una ronda seed/serie A, presentación al consejo, due diligence]

Necesito que me ayudes a construir:

**1. La estructura del modelo financiero SaaS**
Explícame las hojas y bloques principales que debe tener un modelo financiero de SaaS: la hoja de drivers (supuestos de crecimiento, churn, ARPU, costes unitarios), la waterfall de MRR (nuevos, expansión, contracción, churn, reactivación), el P&L por naturaleza de coste (COGS, S&M, R&D, G&A), el cash flow statement y el balance simplificado. Dime cómo estructurar las fórmulas para que cambiar un supuesto en la hoja de drivers actualice automáticamente todo el modelo.

**2. Proyección del MRR a 24-36 meses**
Explícame los métodos para proyectar el MRR de forma defensible: el método basado en cohortes (proyectar cada cohorte de entrada y aplicar su curva de churn histórica o esperada), el método basado en drivers de crecimiento (nuevos clientes por canal * tasa de conversión * ARPU medio), el método de regresión sobre el histórico. Dime cómo construir tres escenarios (conservador, base, optimista) y cómo documentar los supuestos de cada uno para que un inversor pueda auditarlos.

**3. Unit economics: CAC, LTV y payback period en el modelo**
Explícame cómo integrar el CAC y el LTV en el modelo financiero de forma correcta: cómo calcular el CAC real incluyendo todos los costes de go-to-market (no solo el coste de publicidad), cómo calcular el LTV usando la fórmula de descuento de flujos futuros y no solo la fórmula simplificada (ARPU/churn), cómo proyectar la evolución del ratio LTV/CAC a medida que el negocio escala y los costes de adquisición se optimizan, cómo calcular el payback period en meses y por qué menos de 12 meses es el estándar en SaaS.

**4. Burn rate, runway y planificación de la caja**
Explícame cómo calcular correctamente el burn rate neto (distinguiéndolo del burn rate bruto), cómo proyectar el runway en meses basándome en el burn actual y el crecimiento del MRR, cuándo el negocio alcanzará el break-even operativo y qué supuestos de crecimiento y control de costes hacen falta para llegar antes. Dime cómo usar el modelo para determinar el tamaño de la ronda que necesito levantar y el timing óptimo para iniciar el proceso.

**5. Métricas de eficiencia que los inversores de SaaS utilizan**
Explícame las métricas de eficiencia que analizan los inversores de SaaS en una due diligence: Magic Number (eficiencia del gasto en ventas y marketing para generar nuevo ARR), Rule of 40 (crecimiento de ARR + margen EBITDA debe superar el 40%), Burn Multiple (capital quemado dividido entre net new ARR), ARR per FTE como indicador de productividad del equipo. Dame las fórmulas exactas, los benchmarks del sector y cómo mejorar cada ratio desde el modelo.

**6. Presentación del modelo a inversores: narrativa y sensibilidad**
Explícame cómo presentar el modelo financiero en una ronda de inversión: qué tabla de métricas SaaS incluir en el deck (historical + proyectado a 3 años), cómo construir una tabla de sensibilidad que muestre cómo cambia el runway según distintos supuestos de crecimiento y churn, cómo comunicar los supuestos del modelo de forma transparente y defensible, cuáles son las preguntas más difíciles que te hará un inversor sobre el modelo y cómo preparar la respuesta con datos.

Termina con una lista de los diez errores más frecuentes en modelos financieros de SaaS que destruyen la credibilidad con los inversores.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 45,
                'use_case'         => 'Construir el modelo financiero de un SaaS con las métricas que exigen los inversores',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal del modelo de suscripción: contratos, renovaciones automáticas y cancelación',
                'description'      => 'Comprende el marco legal que regula los modelos de suscripción: redacción de contratos, cumplimiento de la normativa de renovación automática y gestión de cancelaciones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho de contratos y derecho del consumidor con experiencia en el asesoramiento a empresas de modelo de suscripción digital en su cumplimiento legal en España y la Unión Europea.

Trabajo en el equipo legal o soy el fundador legal de una empresa con modelo de suscripción y necesito entender el marco legal que aplica a nuestro modelo de negocio para asegurar el cumplimiento normativo y minimizar los riesgos legales.

Nuestro modelo de suscripción es: [SaaS B2B, servicio de consumo B2C, membresía, suscripción física]
Nuestros mercados son: [España, UE, LATAM, mercados anglosajones]
Las dudas legales más urgentes son: [cláusulas de renovación automática, política de cancelación y reembolsos, tratamiento de datos en los contratos, gestión de impagos]

Necesito que me expliques:

**1. Contratos de suscripción: elementos esenciales y cláusulas críticas**
Explícame qué elementos debe contener un contrato de suscripción válido y aplicable en España y la UE: identificación de las partes, objeto del contrato, precio y forma de pago, período de vigencia y renovación, condiciones de cancelación, limitación de responsabilidad, ley aplicable y jurisdicción. Dime qué diferencia hay entre los contratos B2C (consumidores) y B2B (empresas) en cuanto a los requisitos de transparencia y las protecciones que no se pueden excluir.

**2. Renovaciones automáticas: cumplimiento legal en España y la UE**
Explícame la normativa española y europea sobre renovaciones automáticas en contratos de suscripción: qué obligaciones de información previa tiene el proveedor antes de cada renovación (Directiva Omnibus, Ley General para la Defensa de los Consumidores), con cuánta antelación debe notificarse la renovación, qué información debe contener la notificación, cómo debe ser la interfaz de renovación para no ser considerada práctica comercial desleal (dark patterns prohibidos). Dime qué empresas han sido sancionadas recientemente por incumplimiento y qué prácticas debo evitar.

**3. Política de cancelación y derecho de desistimiento**
Detalla el régimen legal del derecho de desistimiento en contratos de suscripción digital celebrados a distancia: el plazo de 14 días del RGCU, cuándo empieza a computar, cómo se ejerce, en qué casos el proveedor puede descontar el uso proporcional del servicio durante el período de desistimiento, y cuándo el derecho de desistimiento no aplica. Explícame también cómo diseñar una política de reembolsos que sea legalmente correcta, comercialmente razonable y que comunique bien la experiencia de cancelación.

**4. Gestión de impagos y suspensión del servicio**
Explícame cómo actuar legalmente cuando un suscriptor no paga: qué cláusulas debe incluir el contrato para poder suspender el servicio por impago, cuántos días de gracia son recomendables antes de la suspensión, cómo comunicar la suspensión, cuándo se puede dar por resuelto el contrato por impago, cómo reclamar la deuda (requerimiento previo, burofax, procedimiento monitorio), y qué debe hacer la empresa con los datos del cliente impagado conforme al RGPD.

**5. Protección de datos en el modelo de suscripción**
Explícame las obligaciones de protección de datos específicas de un negocio de suscripción: base legal para el tratamiento de datos de facturación y de uso del servicio, cuánto tiempo debo conservar los datos de suscriptores cancelados (obligaciones fiscales vs. principio de minimización del RGPD), cómo gestionar la solicitud de un suscriptor de ejercer su derecho al olvido cuando hay obligaciones de conservación contables, cómo tratar los datos del método de pago y la relación con el proveedor de pagos como encargado del tratamiento.

**6. Cláusulas de modificación del servicio y del precio**
Explícame cómo redactar cláusulas de modificación del servicio y del precio que sean legalmente válidas y que proteja a la empresa frente a reclamaciones de los suscriptores: qué preaviso es necesario para modificar el precio (diferencia entre B2C y B2B), cómo debe comunicarse la modificación, qué derecho tiene el suscriptor a resolver el contrato si no acepta la modificación, cómo redactar la cláusula de variación de precio en un entorno de inflación para que sea aplicable.

Incluye ejemplos de cláusulas contractuales concretas donde sea relevante y señala las tres situaciones de mayor riesgo legal para una empresa de suscripción española.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 35,
                'use_case'         => 'Marco legal del modelo de suscripción: contratos, renovaciones y cancelaciones',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Reducing churn: el CSM que retiene, expande y convierte en promotores',
                'description'      => 'Domina las estrategias de Customer Success para reducir el churn voluntario, identificar riesgo de cancelación a tiempo y convertir a los clientes satisfechos en promotores activos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia en la construcción de equipos de CS en empresas SaaS de crecimiento, especializado en reducir el churn, aumentar la expansión y construir programas de advocacy con clientes.

Soy Customer Success Manager o director de CS y necesito una guía completa para reducir el churn de mi cartera, identificar a tiempo los clientes en riesgo y desarrollar estrategias de expansión y advocacy con los que ya están satisfechos.

El producto que gestiono es: [describe el producto SaaS o de suscripción]
Mi cartera actual es: [número de cuentas, distribución por plan, MRR bajo gestión aproximado]
Las métricas actuales son: [logo churn mensual, NRR, NPS si lo mides]

Necesito que me enseñes a:

**1. Construir el health score de los clientes de mi cartera**
Explícame cómo diseñar un health score que prediga el riesgo de churn antes de que el cliente lo comunique: qué señales de comportamiento incluir (login frequency, feature adoption, depth of use, number of active users vs. seats contratados, tickets de soporte recientes, NPS score), cómo ponderar cada señal según su correlación histórica con el churn real, cómo automatizar el cálculo del health score y cuándo debe alertarme para intervenir. Dame ejemplos de las señales que mejor predicen el churn en productos SaaS.

**2. Segmentación de la cartera y modelo de cobertura**
Explícame cómo segmentar mi cartera para aplicar el nivel correcto de atención a cada cuenta: high-touch (cuentas grandes con CSM dedicado y QBRs), mid-touch (cuentas medianas con touchpoints programados y automatizados), low-touch o tech-touch (cuentas pequeñas gestionadas principalmente con automatización y contenido de self-service). Dime cómo determinar el umbral de MRR para cada nivel, cómo escalar el modelo de cobertura a medida que crece la cartera, y qué automatizaciones son imprescindibles para gestionar las cuentas low-touch sin perder calidad.

**3. Playbooks de riesgo de churn: cómo intervenir a tiempo**
Dame los playbooks concretos para cada tipo de riesgo de churn: cliente que no ha hecho login en 30 días (secuencia de reengagement), cliente con health score bajo por baja adopción de features clave (sesión de entrenamiento y revisión del caso de uso), cliente que ha abierto varios tickets de soporte en poco tiempo (llamada de revisión de problemas), cliente que acaba de cambiar el champion interno (llamada de introducción y re-onboarding), cliente que ha preguntado por la competencia o ha pedido información sobre su contrato. Para cada uno, dame el mensaje de apertura y la agenda de la llamada de recuperación.

**4. QBRs y touchpoints proactivos que aportan valor real**
Explícame cómo estructurar una revisión trimestral (QBR) que el cliente perciba como valiosa y no como una reunión de compromiso: qué datos mostrar (ROI medido, adopción vs. objetivo, próximos lanzamientos relevantes del roadmap), cómo hacer que el cliente defina sus objetivos para el próximo trimestre vinculados al producto, cómo usar el QBR para identificar oportunidades de expansión de forma natural. Dame la agenda de un QBR de 45 minutos que funciona.

**5. Expansión y upsell: el CS que crece los ingresos**
Detalla las estrategias de expansión que un CSM puede ejecutar sin invadir el territorio de ventas: identificar el momento correcto para proponer un upgrade (cuando el cliente ha alcanzado un límite de uso, cuando ha logrado un caso de éxito claro, cuando hay un nuevo caso de uso no cubierto), cómo proponer la expansión como una conversación de valor y no como una venta, cómo coordinar con el equipo comercial cuando la oportunidad es grande, cómo medir el Expansion MRR generado por el equipo de CS.

**6. Programa de advocacy: convertir clientes en promotores**
Explícame cómo construir un programa de customer advocacy que genere referencias y contenido de prueba social: cómo identificar a los clientes más satisfechos (NPS detractors first para intervenir, promoters para el programa), cómo invitarles a participar sin ser transaccional, qué activos de advocacy pedir (caso de estudio escrito, vídeo testimonial, reseña en G2 o Capterra, referencia a un nuevo prospecto, participación en un webinar), cómo compensarles de forma apropiada (acceso anticipado, créditos, visibilidad de su marca).

Dame un plan de 90 días para un CSM que acaba de recibir una cartera nueva con churn elevado y necesita estabilizarla y empezar a crecer la retención.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'         => 'Reducir el churn, expandir ingresos y construir advocacy desde Customer Success',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Ingresos recurrentes del freelance: retainers, membresías y servicios continuos',
                'description'      => 'Diseña modelos de ingresos recurrentes como freelance: retainers, membresías y paquetes de servicio continuo que estabilizan tus ingresos y aumentan el LTV de cada cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de modelo de negocio para profesionales independientes, especializado en ayudar a freelances y consultores a pasar de ingresos por proyecto a ingresos recurrentes estables mediante retainers, membresías y servicios continuos.

Soy freelance o consultor independiente y quiero dejar de depender de proyectos puntuales para construir una base de ingresos recurrentes que me dé previsibilidad financiera y relaciones más profundas con mis clientes.

Mi especialidad es: [diseño, desarrollo, marketing, consultoría, redacción, fotografía, etc.]
Mis ingresos actuales son: [aproximado mensual, número de clientes activos, distribución entre proyectos y clientes recurrentes]
Mi mayor reto es: [convencer a clientes de pagar una cuota fija, definir qué incluye el retainer, gestionar el scope creep, facturar con regularidad]

Necesito que me ayudes a construir:

**1. Los modelos de ingresos recurrentes disponibles para un freelance**
Explícame los distintos modelos de ingresos recurrentes que puede implementar un freelance según su especialidad: el retainer de horas (X horas al mes a tarifa acordada), el retainer de entregables (una lista definida de entregables mensuales), el retainer de disponibilidad (estar disponible para el cliente X horas a la semana sin garantía de entregable específico), la membresía de comunidad o formación (acceso a contenido, comunidad o sesiones de grupo), el mantenimiento y soporte recurrente (para developers, diseñadores, gestores de redes). Dime cuál encaja mejor con cada tipo de especialidad y de cliente.

**2. Cómo definir y proponer el retainer sin perder el control del scope**
Explícame cómo estructurar una propuesta de retainer que sea atractiva para el cliente y que no se convierta en una trampa de scope creep para mí: cómo definir exactamente qué está incluido y qué no (límite de horas, tipos de tareas incluidas, canales de comunicación, tiempo de respuesta), cómo fijar el precio del retainer (multiplicar la tarifa horaria por las horas estimadas con un descuento del 10-15% a cambio de la previsibilidad), cómo gestionar los meses con más trabajo del previsto sin resentimiento, qué poner en el contrato para que el cliente entienda los límites.

**3. La conversación con el cliente: cómo proponer el retainer sin que parezca una venta**
Dame el guion de la conversación para proponer un retainer a un cliente con quien ya tengo una relación: cómo identificar el momento adecuado (final de un proyecto exitoso, cuando el cliente vuelve a pedirte algo nuevo, cuando detectas que necesitarán ayuda continua), cómo plantear la propuesta en términos de valor para el cliente ("tenerte disponible de forma prioritaria cada mes"), cómo manejar la objeción "no sé si lo necesito todos los meses", y cómo presentar el precio de forma que parezca razonable comparado con la alternativa de ir proyecto a proyecto.

**4. Pricing del retainer: cómo evitar malvender tu tiempo**
Explícame cómo calcular el precio justo de un retainer: cuántos clientes en retainer puedes gestionar simultáneamente sin comprometer la calidad, cuántas horas de trabajo real implica cada retainer al mes (incluyendo comunicación y gestión, no solo trabajo facturable), cuál es tu tarifa horaria objetivo y cómo se traduce en el precio mensual del retainer, cómo ajustar el precio anualmente sin perder al cliente. Dame un ejemplo numérico con distintos escenarios de precio según el nivel de dedicación.

**5. Gestión operativa de múltiples retainers**
Explícame cómo gestionar operativamente varios clientes en retainer sin que la carga administrativa me consuma: herramientas para el tracking del tiempo y los entregables (Toggl, Harvest, Notion), cómo estructurar el reporte mensual al cliente (qué hiciste, qué valor generó, qué queda pendiente para el próximo mes), cómo gestionar las renovaciones (facturación automática el día 1 de cada mes), cómo comunicar subidas de precio anuales, cómo finalizar un retainer de forma ordenada cuando ya no funciona para ninguna de las dos partes.

**6. Del retainer a la membresía: escalar los ingresos recurrentes**
Explícame cómo un freelance puede escalar más allá de los retainers individuales creando una membresía o producto de grupo que multiplique los ingresos sin multiplicar el tiempo: comunidad de pago en torno a tu especialidad (acceso a un círculo privado, sesiones de preguntas mensuales, recursos exclusivos), formación o consultoría grupal en membresía (cohorts o acceso continuo a tu metodología), mantenimiento como servicio para múltiples clientes a la vez (un developer que ofrece mantenimiento WordPress a 20 clientes a 100€/mes cada uno). Dime cómo validar si hay demanda antes de construir el producto.

Dame un plan de 60 días para un freelance que quiere conseguir su primer retainer desde cero partiendo de clientes de proyecto existentes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 20,
                'use_case'         => 'Construir ingresos recurrentes como freelance con retainers y membresías',
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
