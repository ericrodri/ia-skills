<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills447Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing personalizado para retail con IA: del ticket de compra al cliente fiel',
                'description'      => 'Diseña estrategias de marketing hiperpersonalizado para retail usando IA que analiza el historial de compras, comportamiento en tienda y preferencias para aumentar la frecuencia de visita y el ticket medio.',
                'prompt_content'   => <<<'EOT'
Eres un experto en retail marketing y consumer insights con experiencia en transformar los datos de los puntos de venta en estrategias de marketing personalizadas que aumentan la lealtad y el gasto por cliente. Tu objetivo es ayudarme a diseñar un programa de marketing personalizado para mi negocio de retail utilizando inteligencia artificial.

objetivo: Crear una estrategia de marketing basada en datos que personalice cada comunicación y oferta al cliente según su historial de compras, comportamiento en tienda y preferencias declaradas, aumentando la frecuencia de visita, el ticket medio y la tasa de retención.

instrucción 1 — Base de datos de clientes y segmentación:
Construye la inteligencia de cliente:
- Captura de datos en el POS: integración del sistema de punto de venta con el programa de fidelización para vincular cada compra a un cliente
- Segmentación RFM: clasificación de clientes por Recencia (última compra), Frecuencia y Valor monetario
- Segmentación conductual: grupos basados en categorías de producto preferidas, horarios de compra y sensibilidad al precio
- Customer Lifetime Value (CLV) por segmento: cuánto vale cada cliente durante toda su relación con la marca
- Identificación de mejores clientes: el 20% de clientes que genera el 80% del revenue (principio de Pareto)

instrucción 2 — Motor de personalización con IA:
Implementa la personalización a escala:
- Recomendaciones de producto: basadas en el historial individual de compras y en la compra colaborativa (clientes similares compraron también...)
- Ofertas dinámicas: descuentos personalizados según la elasticidad de precio de cada segmento (no ofrecer descuentos a quienes ya comprarían sin ellos)
- Comunicaciones en el momento óptimo: análisis del patrón de compra para enviar ofertas cuando el cliente está "listo para comprar"
- Personalización del catálogo digital: orden y destacado de productos en la app o web según el perfil del cliente
- Bundle recommendations: sugerencias de productos complementarios a la compra habitual del cliente

instrucción 3 — Programa de fidelización con IA:
Diseña el programa de lealtad:
- Estructura de puntos o cashback: modelo de incentivo que alinea el comportamiento deseado con la recompensa
- Tiers de fidelización: niveles con beneficios crecientes que incentiven el aumento del gasto
- Retos y misiones gamificadas: "compra 3 veces en 30 días y gana X" para aumentar la frecuencia
- Cumpleaños y momentos clave: ofertas en fechas especiales para generar visitas adicionales
- Reactivación de clientes dormidos: identificación automática y campaña personalizada para clientes que no han comprado en 90 días

instrucción 4 — Omnicanalidad y coordinación de canales:
Integra los puntos de contacto con el cliente:
- App de fidelización: historial de puntos, ofertas personalizadas, ticket virtual y recibo digital
- Email marketing: newsletters segmentadas por interés con productos y ofertas relevantes para cada grupo
- SMS y push notifications: comunicaciones de alta urgencia (oferta flash, recordatorio de caducidad de puntos)
- Señalización digital en tienda: pantallas con contenido dinámico adaptado al perfil de los clientes presentes
- Asistente de voz para empleados: herramienta que muestra al dependiente el perfil del cliente y le sugiere qué recomendar

instrucción 5 — Métricas de éxito del programa de marketing:
Define los KPIs de retail marketing:
- Frecuencia de visita por segmento: veces que cada grupo de clientes visita la tienda al mes
- Ticket medio por segmento y canal: gasto promedio por visita
- Tasa de canje de ofertas: porcentaje de clientes que usan las ofertas personalizadas enviadas
- Customer retention rate: porcentaje de clientes activos que repiten compra en los siguientes 12 meses
- Incrementalidad: revenue adicional atribuible directamente al programa de marketing personalizado

tarea final:
Genera la estrategia completa de marketing personalizado para mi negocio de retail, incluyendo: plan de captación de datos en el POS y el programa de fidelización, segmentación RFM con las acciones de marketing recomendadas para cada segmento, calendario de comunicaciones mensual con canales y tipo de mensaje, ejemplos concretos de ofertas personalizadas por segmento, y un plan de implementación de 6 meses con inversión estimada y ROI esperado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar estrategias de marketing personalizado para retail con IA que aumenten la frecuencia de visita y el ticket medio.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Sistema POS inteligente con IA: integración de punto de venta y e-commerce',
                'description'      => 'Desarrolla un sistema de punto de venta moderno que integra la tienda física con el canal online usando IA para gestionar inventario en tiempo real, predecir la demanda y personalizar la experiencia de compra.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en sistemas de retail y comercio unificado. Tu objetivo es ayudarme a diseñar e implementar un sistema de punto de venta (POS) moderno que integre perfectamente la operación de la tienda física con el canal de e-commerce, utilizando inteligencia artificial para optimizar el inventario, las ventas y la experiencia del cliente.

objetivo: Construir un ecosistema tecnológico de retail unificado (Unified Commerce) donde el POS físico y el e-commerce comparten datos en tiempo real, con IA que gestiona el inventario, predice la demanda y personaliza la experiencia de compra en ambos canales.

instrucción 1 — Arquitectura del POS moderno:
Define los componentes del sistema:
- POS cloud-based: sistema en la nube con funcionamiento offline cuando falla la conexión (sincronización posterior)
- Hardware: terminales táctiles, lectores de código de barras y QR, impresoras de tickets, TPV para pagos
- Pagos: integración con pasarelas (Redsys, Stripe, Adyen) para tarjeta, contactless, Apple Pay, Google Pay, bizum
- Gestión de caja: apertura, cierre, cuadre y conciliación automática
- Módulo de devoluciones: proceso simplificado con actualización automática del inventario y reembolso al método de pago original

instrucción 2 — Inventario unificado en tiempo real:
Gestiona el stock de forma centralizada:
- Inventario único: una sola base de datos de stock para tienda física y e-commerce, actualizada en tiempo real con cada venta
- Multi-almacén: gestión de stock por ubicación (trastienda, exposición, almacén central, tiendas)
- Ship-from-store: capacidad de enviar pedidos online desde la tienda física más cercana al cliente
- Click & collect: reserva de producto online para recogida en tienda con actualización del stock reservado
- Alertas de stock mínimo: notificación automática cuando un producto baja del nivel de reorden definido

instrucción 3 — IA para gestión de inventario y demanda:
Implementa inteligencia artificial en el retail:
- Previsión de demanda: modelo de ML que predice las ventas de los próximos 30/60/90 días por SKU y tienda
- Recomendación de pedido automático: el sistema calcula la cantidad óptima a pedir según la previsión, el stock actual y el lead time del proveedor
- Detección de productos slow-movers: identificación automática de referencias con rotación baja para activar promociones o devolverlos al proveedor
- Gestión de perecederos: alertas de caducidad próxima y sugerencias de descuento automático para reducir el desperdicio
- Análisis de cesta de la compra: qué productos se compran juntos para optimizar el layout de la tienda y el cross-selling

instrucción 4 — Integración con el e-commerce:
Conecta la tienda física y el canal digital:
- API de productos: sincronización de catálogo, precios e imágenes entre el POS y la plataforma e-commerce (Shopify, WooCommerce, Magento)
- Sincronización de precios: cambios de precio en el backoffice que se aplican simultáneamente en tienda y online
- Historial de compras unificado: el cliente puede ver todas sus compras (tienda + online) en su cuenta del programa de fidelización
- Gestión de promociones: crear ofertas en el backoffice que se activan en ambos canales de forma coordinada
- Reporting unificado: ventas totales (física + digital) en un único dashboard para el gerente

instrucción 5 — Seguridad y compliance del POS:
Garantiza la seguridad de los pagos y los datos:
- PCI DSS: cumplimiento de los estándares de seguridad para el procesamiento de pagos con tarjeta
- Cifrado punto a punto (P2PE): los datos de la tarjeta se cifran en el terminal y nunca pasan por los servidores propios
- Roles y permisos: cajeros ven solo las funciones básicas; managers acceden a informes y configuración
- Auditoría de operaciones: log de cada transacción, apertura/cierre de caja y modificación de precio con usuario y timestamp
- Backups: sincronización en la nube de todas las transacciones para recuperación ante fallos de hardware

tarea final:
Genera el diseño completo del sistema POS para mi negocio de retail, incluyendo: diagrama de la arquitectura tecnológica con todos los componentes, lista de criterios de selección de la plataforma POS con comparativa de las 3 opciones líderes (Lightspeed, Square, Revel), esquema de la base de datos para la gestión de inventario unificado, casos de uso de IA priorizados por impacto en las ventas y la operación, y un plan de implementación de 16 semanas incluyendo la migración del POS antiguo y la integración con el e-commerce existente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Desarrollar un sistema POS inteligente que integra tienda física y e-commerce con IA para gestionar inventario y predecir demanda.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias en tienda física con IA: retail design y customer journey',
                'description'      => 'Aplica principios de diseño centrado en el cliente y herramientas de IA para crear experiencias de compra en tienda física que maximizan el engagement, el tiempo de permanencia y la conversión.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de experiencias de retail con especialización en comportamiento del consumidor en espacios físicos y la aplicación de inteligencia artificial para optimizar el customer journey en tienda. Tu objetivo es ayudarme a diseñar una experiencia de tienda física que enamore al cliente y maximice las ventas por metro cuadrado.

objetivo: Crear el diseño integral de la experiencia de compra en tienda física, desde el escaparate hasta el proceso de pago, aplicando principios de neuromarketing, diseño sensorial y herramientas de IA para analizar el comportamiento del cliente y optimizar continuamente la experiencia.

instrucción 1 — Análisis del customer journey en tienda:
Mapea la experiencia completa del cliente:
- Etapa de descubrimiento: escaparate, señalización exterior, visibilidad desde la calle o centro comercial
- Entrada a la tienda: zona de descompresión, señalización de orientación, primera impresión visual y olfativa
- Navegación por la tienda: flujo de circulación, zonas de destino vs. zonas de impulso, señalética interior
- Interacción con el producto: accesibilidad, posibilidad de tocar y probar, puntos de información
- Zona de espera o probador: experiencia durante la espera, oportunidades de cross-selling
- Proceso de pago: rapidez, opciones de pago, momento de cierre y generación de recuerdo positivo
- Post-compra: salida de la tienda, packaging, bag stuffers, invitación a volver

instrucción 2 — Diseño sensorial y neuromarketing:
Estimula los sentidos para crear conexión emocional:
- Visual: paleta de colores que refuerza los valores de marca, iluminación que favorece el color del producto, señalética clara y on-brand
- Olfativo: aroma ambiental diseñado para la marca (diffusers en la entrada y en las zonas clave), vinculación del aroma a la memoria emocional
- Auditivo: playlist curada que ajusta el ritmo de la compra al objetivo (música lenta para exploración, más rítmica para compra rápida)
- Táctil: materiales de los displays y del packaging que transmiten calidad, zonas de experiencia donde probar el producto
- Temperatura: confort térmico adecuado (ligeramente fresco invita a quedarse más tiempo)

instrucción 3 — Tecnología en la experiencia de tienda:
Integra la tecnología de forma natural:
- Digital signage: pantallas con contenido dinámico y personalizable según el momento del día o el perfil del cliente
- Espejos inteligentes: en probadores, permiten ver el producto en otros colores sin cambiarse
- Realidad aumentada: overlays en el espacio real para ver cómo queda un mueble en casa o un look completo
- Self-checkout: reducir las colas con cajas de autoservicio para compras rápidas
- Beacons y geolocalización indoor: notificaciones push cuando el cliente entra en la tienda o en una zona específica

instrucción 4 — IA para optimizar el layout y la conversión:
Usa datos e inteligencia artificial para mejorar la tienda:
- Heat maps de tráfico: sensores de conteo y análisis de rutas de circulación para identificar zonas frías y calientes
- Análisis de planograma: IA que evalúa la efectividad del placement de los productos y sugiere cambios
- Correlación layout-ventas: análisis de qué cambios en la disposición del producto impactan positivamente en las ventas
- A/B testing de escaparates: dos versiones del escaparate en semanas alternas para identificar cuál genera más entradas
- Análisis de tiempo de permanencia: cámaras con visión artificial (anonymized) que miden cuánto tiempo pasan los clientes en cada zona

instrucción 5 — Métricas de la experiencia en tienda:
Define los KPIs del retail design:
- Tasa de conversión de tráfico: porcentaje de visitantes que realizan una compra (objetivo: >30% en moda, >50% en alimentación)
- Dwell time: tiempo promedio de permanencia en la tienda (más tiempo generalmente correlaciona con mayor ticket)
- Items por ticket: número medio de productos comprados en cada visita
- Ventas por metro cuadrado: métrica clave para evaluar la eficiencia del espacio
- Net Promoter Score de la experiencia en tienda: NPS específico para la experiencia física

tarea final:
Genera el plan de diseño de experiencia completo para mi tienda, incluyendo: mapa del customer journey con los momentos de verdad a diseñar, recomendaciones de diseño sensorial adaptadas al tipo de retail (moda, alimentación, electrónica, etc.), lista de tecnologías con coste estimado y ROI esperado, estructura de los KPIs de tienda con frecuencia de medición, y un plan de implementación de 4 meses para renovar la experiencia de tienda existente sin cerrar el negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar experiencias de compra en tienda física con neuromarketing e IA para maximizar la conversión y el ticket medio.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Optimización de ventas en el punto de venta físico con IA y técnicas de retail selling',
                'description'      => 'Implementa técnicas avanzadas de venta en el punto de venta físico potenciadas con IA para aumentar el ticket medio, la conversión de visitas y la satisfacción del cliente.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas de retail y formación de equipos comerciales en el punto de venta. Tu objetivo es ayudarme a implementar un sistema de ventas en tienda física que combine técnicas probadas de retail selling con herramientas de inteligencia artificial para aumentar el rendimiento del equipo y los resultados del negocio.

objetivo: Crear un programa completo de mejora de las ventas en el punto de venta que incluya formación del equipo, herramientas de IA para asistir al vendedor, técnicas de upselling y cross-selling, y un sistema de métricas para monitorear y mejorar continuamente el rendimiento.

instrucción 1 — El proceso de venta en retail:
Define la metodología de ventas para la tienda:
- Bienvenida y conexión: cómo abordar al cliente que entra sin ser invasivo (la regla de los 30 segundos)
- Exploración de necesidades: preguntas abiertas para entender qué busca el cliente y por qué
- Presentación del producto: cómo mostrar el producto, destacar beneficios relevantes para ESE cliente, y usar la técnica FAB (Feature, Advantage, Benefit)
- Gestión de objeciones: respuestas naturales a "es caro", "me lo tengo que pensar", "lo vi más barato online"
- Cierre de la venta: señales de compra, técnicas de cierre sin presión, confirmación de la decisión
- Post-venta en el momento: agradecimiento, instrucciones de uso, invitación a volver, programa de fidelización

instrucción 2 — Upselling y cross-selling en el punto de venta:
Aumenta el ticket medio de cada venta:
- Upselling: técnica para sugerir el modelo superior o la versión premium cuando es genuinamente mejor para el cliente
- Cross-selling: productos complementarios que añaden valor a la compra principal ("para que aproveches al máximo el X, también te recomiendo el Y")
- Bundle selling: paquetes de productos complementarios con un pequeño descuento para incentivar la compra del conjunto
- Product placement estratégico: colocación de los productos de mayor margen en las zonas de mayor visibilidad y accesibilidad
- Zona de caja: productos de compra impulsiva de bajo precio colocados estratégicamente en el momento del pago

instrucción 3 — IA como asistente del vendedor en tienda:
Equipa a tu equipo con herramientas inteligentes:
- App de vendedor: acceso desde un tablet o smartphone al historial del cliente fidelizado (últimas compras, preferencias, puntos acumulados)
- Recomendaciones personalizadas: la app sugiere al vendedor qué productos recomendar a ese cliente específico basándose en su historial
- Información de stock en tiempo real: el vendedor sabe al instante si el producto está en el almacén, en qué talla/color, o en qué otra tienda
- Chat interno: comunicación rápida entre vendedores y con el almacén sin abandonar al cliente
- Guías de producto: acceso rápido a fichas técnicas, comparativas y preguntas frecuentes por producto para resolver dudas del cliente

instrucción 4 — Formación y desarrollo del equipo de ventas retail:
Construye un equipo de alto rendimiento:
- Onboarding estructurado: plan de formación para nuevos vendedores (producto, proceso de venta, herramientas, cultura)
- Role-playing con IA: simulaciones de venta con un cliente virtual de IA para practicar sin riesgo
- Feedback en tiempo real: supervisores que escuchan y dan feedback inmediato sobre las interacciones con clientes
- Mystery shopper: evaluaciones periódicas de la calidad de la atención por parte de clientes ficticios entrenados
- Incentivos: estructura de comisiones o bonos alineada con los objetivos de ticket medio y NPS

instrucción 5 — KPIs de ventas en el punto de venta:
Mide y gestiona el rendimiento:
- Conversión de visitas: porcentaje de personas que entran y realizan una compra
- Ticket medio: importe promedio de cada transacción
- Unidades por ticket (UPT): número de artículos por compra
- Ventas por hora por vendedor: productividad individual del equipo
- Tasa de retorno: porcentaje de ventas que se devuelven (indicador de calidad de la venta y adecuación del producto al cliente)

tarea final:
Genera el programa completo de mejora de ventas para mi tienda, incluyendo: guión de la metodología de venta paso a paso con ejemplos de diálogo, tabla de estrategias de upselling y cross-selling para las 10 categorías principales de mi negocio, plan de formación del equipo de 4 semanas, dashboard de KPIs semanal con benchmark por tipo de tienda, y un plan de incentivos para el equipo alineado con los objetivos de ticket medio y conversión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Implementar técnicas de retail selling con IA para aumentar el ticket medio y la conversión en el punto de venta físico.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management en retail con IA: del surtido a la experiencia de compra',
                'description'      => 'Aplica metodologías de product management al contexto del retail para diseñar el surtido óptimo, optimizar la experiencia de compra y tomar decisiones de producto basadas en datos.',
                'prompt_content'   => <<<'EOT'
Eres un product manager con especialización en retail y experiencia en aplicar metodologías ágiles y análisis de datos al diseño del surtido y la experiencia de compra en tiendas físicas y digitales. Tu objetivo es ayudarme a aplicar el pensamiento de producto al contexto del retail para optimizar el surtido, mejorar la experiencia del cliente y aumentar la rentabilidad.

objetivo: Implementar un enfoque de product management en mi negocio de retail que me permita tomar decisiones de surtido basadas en datos, diseñar la experiencia de compra centrada en el cliente y medir el éxito con métricas claras, todo ello potenciado con herramientas de inteligencia artificial.

instrucción 1 — Estrategia de surtido como product strategy:
Define el surtido óptimo para tu tienda:
- Árbol de categorías: estructura jerárquica del surtido (categoría > subcategoría > familia > referencia)
- Análisis de rol por categoría: destino (atrae visitas), habitual (refuerza la lealtad), conveniencia (fácil acceso), estacional (gestión del tráfico)
- Análisis ABC-XYZ: clasificación de referencias por volumen de ventas (ABC) y variabilidad de la demanda (XYZ)
- Surtido mínimo viable: las referencias imprescindibles que no pueden faltar bajo ninguna circunstancia
- Surtido diferencial: productos exclusivos o de marca propia que distinguen de la competencia

instrucción 2 — Data-driven decisions en retail:
Toma decisiones de producto con datos:
- Panel de ventas por categoría: ventas, margen, rotación, rotura de stock y mermas por categoría
- Análisis de cesta de la compra: qué productos se compran juntos (reglas de asociación con algoritmo Apriori)
- Análisis de elasticidad de precio: cómo afectan los cambios de precio a las ventas de cada categoría
- Benchmarking con el mercado: comparativa de tu surtido y precios con los de los principales competidores
- Voice of Customer: análisis de comentarios de clientes para identificar referencias pedidas y no disponibles

instrucción 3 — Experimentación en retail:
Aplica el método científico a las decisiones de tienda:
- A/B testing de surtido: probar una referencia nueva en algunas tiendas antes de lanzarla en toda la red
- Testing de planogramas: diferentes disposiciones del producto en distintas tiendas y medir cuál vende más
- Prueba de precios: testar distintos precios en tiendas comparables para encontrar el precio óptimo
- Piloto de nuevas categorías: testear categorías nuevas en una tienda piloto antes de la expansión
- Criterios de éxito: definir antes del test qué métricas determinan el éxito y cuándo se toma la decisión

instrucción 4 — IA en las decisiones de producto retail:
Usa inteligencia artificial para optimizar el surtido:
- Previsión de ventas por SKU: modelo de forecasting que considera estacionalidad, tendencias y eventos locales
- Optimización de planograma: IA que sugiere la distribución óptima del espacio de lineal por categoría
- Detección de oportunidades de surtido: identificación de categorías con alta demanda insatisfecha en tu zona de influencia
- Dynamic pricing: ajuste automático de precios en respuesta a la competencia, el stock y la demanda
- New product success prediction: modelo que predice el potencial de ventas de un nuevo producto antes de incluirlo en el surtido

instrucción 5 — Roadmap de la experiencia de compra:
Planifica la mejora continua del producto-tienda:
- Customer journey mapping: mapa de la experiencia de compra actual con los pain points identificados
- Backlog de mejoras: lista priorizada de iniciativas para mejorar la experiencia del cliente
- Priorización: frameworks de priorización (RICE, ICE) aplicados a iniciativas de retail
- Sprint de retail: ciclos de 4 semanas con objetivo claro, experimentación y aprendizaje
- OKRs de retail: objetivos y resultados clave trimestrales para el equipo de tienda y de compras

tarea final:
Genera el framework de product management para mi negocio de retail, incluyendo: plantilla de análisis ABC-XYZ aplicada al surtido con ejemplo, estructura del dashboard de categoría con métricas clave, proceso de decisión para incluir o excluir referencias del surtido, backlog priorizado de mejoras de experiencia de compra para las próximas 12 semanas, y un modelo de OKRs trimestrales para el equipo de compras y merchandising.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Aplicar product management con IA al retail para optimizar el surtido y diseñar experiencias de compra basadas en datos.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de equipos en retail con IA: turnos, rendimiento y clima laboral',
                'description'      => 'Optimiza la gestión de personas en el entorno retail usando IA para planificar turnos, medir el rendimiento del equipo de tienda y mejorar el clima laboral en un sector de alta rotación.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión de personas en el sector retail con experiencia en reducir la rotación de personal, mejorar el rendimiento del equipo de tienda y crear entornos de trabajo donde los empleados se sienten valorados y comprometidos. Tu objetivo es ayudarme a implementar un sistema de gestión de personas en retail potenciado con inteligencia artificial.

objetivo: Diseñar un sistema de gestión de equipos de tienda que optimice la planificación de turnos, mida y mejore el rendimiento individual y colectivo, reduzca la rotación de personal y construya una cultura de equipo positiva en el contexto específico del retail, donde los horarios irregulares y la alta rotación son los principales retos.

instrucción 1 — Planificación inteligente de turnos:
Optimiza la cobertura del equipo:
- Previsión de afluencia: modelo de IA que predice el tráfico de clientes por hora y día, considerando estacionalidad, eventos locales y meteorología
- Planificación basada en demanda: asignar el número de personas por turno según la previsión de tráfico y las ventas esperadas
- Optimización de la cobertura: garantizar que los turnos más rentables están cubiertos por los vendedores más efectivos
- Gestión de disponibilidades: sistema digital donde los empleados actualizan su disponibilidad y preferencias de turno
- Cambios de turno peer-to-peer: plataforma para que los empleados intercambien turnos de forma autónoma y dentro de las reglas del negocio

instrucción 2 — Métricas de rendimiento del equipo de tienda:
Mide el performance individual y colectivo:
- Ventas por hora trabajada: métrica clave de productividad individual
- Ticket medio por vendedor: indica la capacidad de upselling y cross-selling
- Conversión por vendedor: porcentaje de clientes atendidos que realizan una compra
- NPS por vendedor: satisfacción del cliente ligada al vendedor que le atendió (mediante encuesta post-visita)
- Cumplimiento de objetivos: porcentaje de consecución de los objetivos individuales y de tienda

instrucción 3 — Formación y desarrollo en el contexto retail:
Desarrolla el talento del equipo de tienda:
- Onboarding acelerado: programa de incorporación de 2 semanas para reducir el tiempo hasta la productividad plena
- Microlearning: formación en formato de píldoras de 3-5 minutos accesibles desde el móvil entre clientes
- Certificación de producto: sistema de niveles de conocimiento de producto con incentivos por certificación
- Shadowing y mentoring: empleados senior que acompañan a los nuevos en situaciones reales de venta
- Plan de carrera en retail: ruta de progresión clara desde dependiente hasta jefe de tienda o área

instrucción 4 — Clima laboral y retención en retail:
Reduce la rotación en un sector de alta fuga de talento:
- Encuestas de pulso semanales: 3 preguntas rápidas para medir el estado de ánimo del equipo
- Análisis de señales de abandono: IA que detecta patrones de comportamiento que predicen la renuncia (petición de reducción de horas, aumento de absentismo, menor rendimiento)
- Programa de reconocimiento: reconocimiento público y privado de los logros del equipo (el vendedor del mes, el mayor incremento de ticket, etc.)
- Beneficios relevantes para el perfil retail: descuento en el producto, flexibilidad de horarios, días adicionales de libre elección
- Exit interviews: entrevistas de salida estructuradas para identificar las causas reales de la rotación

instrucción 5 — Compliance laboral en retail:
Cumple con la normativa de trabajo específica del sector:
- Control horario digital: registro de jornada conforme al art. 34.9 del ET con sistema de fichaje digital
- Gestión del convenio colectivo: aplicación correcta del Convenio del Comercio (complementos de festivos, horas extra, descansos)
- Seguridad y prevención de riesgos: formación obligatoria en PRL para empleados de tienda (manipulación de cargas, posturas, emergencias)
- Contratación flexible: tipos de contrato más adecuados para la temporalidad del retail (fijo discontinuo, a tiempo parcial, eventual)
- Gestión de absentismo: protocolo de control de ausencias, conversaciones de gestión y cuando activar el proceso disciplinario

tarea final:
Genera el plan de gestión de personas para mi tienda retail, incluyendo: modelo de planificación de turnos semanal basado en previsión de tráfico, dashboard de métricas de rendimiento del equipo con definición y frecuencia de medición, plan de onboarding de 10 días para nuevos vendedores, calendario de encuestas de clima laboral con las preguntas recomendadas, y un análisis de las causas más comunes de rotación en retail con las acciones de retención más efectivas según el perfil del empleado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Optimizar la gestión de equipos en retail con IA para reducir la rotación, planificar turnos y mejorar el rendimiento.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Control financiero y análisis de rentabilidad en retail con inteligencia artificial',
                'description'      => 'Implementa un sistema de control financiero específico para retail que analiza la rentabilidad por tienda, categoría y producto con IA, y proporciona alertas tempranas sobre desviaciones.',
                'prompt_content'   => <<<'EOT'
Eres un director financiero con especialización en el sector retail y experiencia en la implementación de sistemas de control de gestión y análisis de rentabilidad en redes de tiendas. Tu objetivo es ayudarme a construir un sistema de control financiero específico para retail que me proporcione visibilidad completa sobre la rentabilidad del negocio y me permita tomar decisiones rápidas basadas en datos.

objetivo: Implementar un framework de análisis financiero para retail que mida la rentabilidad en todas sus dimensiones (por tienda, por categoría, por producto y por canal), identifique las palancas de mejora del margen y utilice inteligencia artificial para anticipar desviaciones y optimizar la estructura de costes.

instrucción 1 — Cuenta de resultados por tienda:
Construye el P&L específico del retail:
- Ventas netas: ventas brutas menos devoluciones y descuentos
- Coste de ventas (COGS): coste de adquisición del producto vendido
- Margen bruto: diferencia entre ventas netas y COGS (objetivo: >50% en moda, >30% en alimentación)
- Mermas: pérdida de inventario por robo, caducidad o deterioro (% sobre ventas)
- Costes de personal: salarios, cargas sociales, formación, incentivos
- Costes de ocupación: alquiler, comunidad, seguros, mantenimiento del local
- Costes operativos: bolsas, etiquetas, uniformes, material de tienda, energía
- EBITDA de tienda: resultado antes de amortizaciones, intereses e impuestos
- Contribución neta: EBITDA menos la amortización de las inversiones realizadas en la tienda

instrucción 2 — Análisis de rentabilidad por categoría y producto:
Profundiza en la rentabilidad del surtido:
- Margen bruto por categoría: qué categorías son más rentables y cuáles arrastran el margen medio
- Rotación de inventario por categoría: veces que se renueva el stock en un período (objetivo de rotación según el sector)
- GMROI (Gross Margin Return on Investment): margen bruto generado por cada euro invertido en inventario
- Rentabilidad por metro cuadrado de lineal: qué espacio de tienda es más productivo
- Long tail analysis: identificar el 80% de referencias que generan el 20% de las ventas y evaluar su permanencia en el surtido

instrucción 3 — Gestión del capital circulante en retail:
Optimiza el flujo de caja del negocio:
- Días de stock (DSO): número de días de venta que representa el inventario actual
- Negociación con proveedores: plazo de pago (días de crédito de proveedores) como palanca de liquidez
- Cash conversion cycle: días de stock + días de cobro de clientes - días de pago a proveedores
- Gestión de temporadas: cómo financiar el stock de campaña (Navidad, rebajas, back to school) sin tensionar la caja
- Análisis de slow-movers: costo financiero del stock que no rota y acciones para liquidarlo con el mínimo impacto en el margen

instrucción 4 — IA para el control financiero en retail:
Implementa inteligencia artificial en la gestión financiera:
- Forecast de ventas con ML: previsión semanal de ventas por tienda con intervalo de confianza para la planificación de compras
- Alertas de desviación en tiempo real: notificación al manager cuando las ventas del día van por debajo del objetivo en más de un 10%
- Análisis de varianza automático: la IA explica por qué el resultado de una tienda es mejor o peor que el objetivo (mezcla de categorías, tráfico, conversión, ticket)
- Optimización de precios: simulación del impacto en margen de un cambio de precio antes de aplicarlo
- Planificación de compras basada en previsión: cantidad óptima a pedir por referencia para minimizar el stock sin incurrir en roturas

instrucción 5 — Reporting financiero para el equipo directivo:
Diseña los informes de gestión:
- Flash report diario: ventas del día vs. objetivo y vs. año anterior, enviado automáticamente cada mañana
- Informe semanal por tienda: P&L simplificado con las métricas clave y semáforo de alertas
- Revisión mensual de gestión: análisis completo de rentabilidad por tienda y categoría, con explicación de desviaciones y forecast del mes siguiente
- Dashboard de la dirección: visión consolidada del negocio en tiempo real para el CEO y el CFO
- Informe de inversiones: evaluación del ROI de las inversiones en reformas, apertura de tiendas o nuevas tecnologías

tarea final:
Genera el framework financiero completo para mi negocio de retail, incluyendo: plantilla de P&L por tienda con todas las líneas relevantes y los benchmarks del sector, modelo de análisis GMROI por categoría con ejemplo numérico, estructura del cash conversion cycle con las palancas de mejora identificadas, plantilla del flash report diario automatizable, y un plan de implementación del sistema de control financiero en 3 meses (herramientas, integraciones con el POS y el ERP, formación de los managers de tienda).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Implementar control financiero y análisis de rentabilidad en retail con IA para optimizar el margen y anticipar desviaciones.',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal para el retail físico con IA: cumplimiento normativo en tiendas',
                'description'      => 'Asegura el cumplimiento de todas las obligaciones legales de un negocio retail físico en España, desde la normativa de comercio hasta la protección de datos y el uso de cámaras con IA.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho mercantil, normativa de comercio y protección del consumidor con experiencia en el asesoramiento a empresas del sector retail en España. Tu objetivo es ayudarme a construir un framework legal completo para asegurar el cumplimiento de todas las obligaciones normativas de mi negocio de tienda física.

objetivo: Crear un mapa de cumplimiento legal para mi negocio de retail físico en España que cubra la normativa sectorial de comercio, la protección del consumidor, la regulación laboral específica del sector, la privacidad y protección de datos, y el uso legal de tecnologías de IA y videovigilancia en el punto de venta.

instrucción 1 — Normativa de comercio en España:
Identifica las obligaciones básicas del comercio minorista:
- Licencia de apertura o declaración responsable: requisitos según la Comunidad Autónoma y el municipio, tipo de local y actividad
- Horarios comerciales: Ley de Ordenación del Comercio Minorista y normativa autonómica (horarios máximos, festivos de apertura autorizada)
- Precios y etiquetado: obligación de exhibir precios con IVA incluido, etiquetado en castellano, precios por unidad de medida en alimentación
- Libro de reclamaciones: obligación de disponer de hojas de reclamaciones y su gestión (plazo de respuesta, comunicación a organismos de consumo)
- Libro de visitas: aunque suprimido para empresas con pocos empleados, conocer la normativa actual de inspección de trabajo

instrucción 2 — Protección del consumidor en retail:
Cumple con los derechos del comprador:
- Derecho de desistimiento: 14 días para devoluciones en ventas a distancia (online); en tienda física, la política de cambios y devoluciones es voluntaria y debe estar visible
- Garantías legales: 3 años de garantía para productos nuevos según la Ley de Garantías (TRLGDCU reformado en 2022)
- Publicidad y promociones: requisitos legales de las rebajas, 3x2, y otras promociones (precio anterior real, duración mínima del precio más bajo en los últimos 30 días)
- Gestión de productos defectuosos: proceso de reclamación, reparación, sustitución y devolución del dinero
- Responsabilidad por productos: obligaciones del comerciante en caso de daños causados por productos vendidos

instrucción 3 — Videovigilancia y tecnología con IA en tienda:
Regula el uso de cámaras y sistemas inteligentes:
- Cámaras de seguridad: registro ante la AEPD (ya no obligatorio, pero sí documentación en el RAT), cartel informativo obligatorio, zona de grabación restringida (no zonas privadas, aseos), período de retención máximo de 30 días
- Sistemas de conteo de personas: si son anónimos (no identifican al individuo), aplica GDPR con legitimación de interés legítimo
- Reconocimiento facial: categoría especial de datos biométricos, prohibido en la mayoría de los contextos de retail por el GDPR y el AI Act (sistema de alto riesgo prohibido en espacios públicos accesibles)
- Análisis de comportamiento con IA (heat maps, eye tracking): si los datos son anonimizados, aplica GDPR con interés legítimo; si son individualizados, requiere base legal más robusta
- Etiquetas de radiofrecuencia (RFID): informar al consumidor si los artículos llevan RFID y cómo desactivarlos

instrucción 4 — Normativa laboral específica del retail:
Cumple con las obligaciones con los trabajadores:
- Convenio Colectivo del Comercio: cuál aplica (estatal, autonómico o de empresa), salarios mínimos por categoría, jornada máxima y descansos
- Control horario: obligación de registro de jornada diario, conservación de registros 4 años, sistemas de fichaje válidos
- Prevención de riesgos laborales: evaluación de riesgos específica para el comercio (manipulación manual de cargas, trabajo de cara al público, posturas forzadas), vigilancia de la salud
- Protección de datos de empleados: nóminas, control de presencia, cámaras en zonas de trabajo (prohibido en vestuarios), tratamiento de datos de salud en bajas laborales
- Igualdad y acoso: plan de igualdad obligatorio para empresas de 50+ empleados, protocolo de acoso

instrucción 5 — Protección de datos en el punto de venta:
Gestiona la privacidad de los clientes:
- Programa de fidelización: información clara sobre qué datos se recogen, para qué se usan y durante cuánto tiempo
- Consentimiento para el envío de comunicaciones comerciales: opt-in explícito según la LSSI
- Derecho de supresión en el programa de fidelización: proceso para dar de baja al cliente y eliminar sus datos
- Menores: restricciones especiales para el tratamiento de datos de menores de 14 años (consentimiento paterno)
- Transferencias a terceros: qué datos se comparten con procesadores de pago, plataformas de email, proveedores de analítica

tarea final:
Genera el framework legal completo para mi negocio de retail, incluyendo: checklist de cumplimiento legal por áreas (comercio, consumidor, laboral, privacidad), texto del cartel informativo de videovigilancia listo para imprimir, cláusulas de privacidad para el programa de fidelización, modelo de política de devoluciones y cambios para mostrar en tienda, y un calendario de obligaciones legales periódicas (renovaciones de licencias, inspecciones, actualizaciones de contratos) con los plazos y responsables.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Garantizar el cumplimiento legal completo de un negocio retail físico en España, incluyendo el uso legal de IA y cámaras.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente en retail con IA: de la queja a la fidelización',
                'description'      => 'Diseña el sistema de atención al cliente en retail que transforma las quejas en oportunidades de fidelización, usando IA para anticipar problemas, personalizar respuestas y mejorar la experiencia post-compra.',
                'prompt_content'   => <<<'EOT'
Eres un experto en customer experience en retail y gestión de la satisfacción del cliente con experiencia en transformar las operaciones de atención al cliente en una ventaja competitiva. Tu objetivo es ayudarme a diseñar un sistema de atención al cliente en mi negocio de retail que resuelva problemas rápidamente, aprenda de cada interacción y convierta los momentos difíciles en oportunidades de fidelización.

objetivo: Crear un sistema omnicanal de atención al cliente en retail que integre la atención en tienda, por teléfono, por email y por redes sociales, con IA para personalizar las respuestas, anticipar los problemas más comunes y medir continuamente la satisfacción del cliente.

instrucción 1 — Mapa de los momentos de verdad en el servicio al cliente retail:
Identifica los puntos críticos de la experiencia:
- Pre-compra: atención en tienda cuando el cliente necesita asesoramiento para elegir, disponibilidad del personal
- En el momento de la compra: rapidez en el cobro, gestión de colas, atención durante el proceso de pago
- Post-compra inmediata: agradecimiento, instrucciones de uso, garantías, ticket de compra (papel o digital)
- Devoluciones y cambios: el momento más crítico del servicio al cliente en retail, donde se gana o se pierde para siempre
- Reclamaciones y quejas: cómo gestionar el cliente insatisfecho para convertirlo en promotor de la marca
- Seguimiento post-compra: contacto proactivo para asegurar la satisfacción y detectar problemas antes de que escalen

instrucción 2 — Proceso de gestión de devoluciones y reclamaciones:
Convierte el problema en oportunidad:
- Política de devoluciones clara: sin ambigüedades, accesible en tienda y online, aplicada de forma consistente por todo el equipo
- Proceso de la devolución: pasos concretos (verificación del producto, verificación del ticket, selección del método de reembolso, actualización del inventario)
- Empowerment del personal: hasta qué nivel pueden resolver los problemas sin escalar al supervisor (límite de compensación autorizado)
- Recuperación del servicio: el protocolo LEARN (Listen, Empathize, Apologize, React, Notify) para gestionar quejas
- Compensación por el problema: descuento en próxima compra, tarjeta regalo, servicio adicional gratuito (cuándo y cuánto compensar)

instrucción 3 — Canales de atención al cliente en retail:
Integra todos los puntos de contacto:
- Atención en tienda: formación del equipo para identificar señales de insatisfacción y actuar antes de que el cliente se queje
- Teléfono: línea de atención con script de llamada, tiempos de espera máximos y protocolo de escalado
- Email: plantillas de respuesta para las 15 consultas más frecuentes, tiempo de respuesta comprometido (24h laborables)
- WhatsApp Business: para consultas rápidas de clientes, gestión de pedidos click & collect y notificaciones post-compra
- Redes sociales: protocolo de respuesta a comentarios y mensajes directos (tiempo de respuesta, tono, escalado de crisis)
- Google Business: gestión de reseñas negativas con respuestas que demuestran que el problema se ha resuelto

instrucción 4 — IA en la atención al cliente retail:
Usa la inteligencia artificial para mejorar el servicio:
- Clasificación automática de reclamaciones: la IA categoriza las quejas (producto, precio, atención, envío) para enrutarlas al equipo correcto
- Respuestas sugeridas: la IA propone la respuesta más adecuada al agente basándose en el historial del cliente y la naturaleza del problema
- Análisis de sentiment: detección de clientes muy insatisfechos para priorizar su atención y escalar automáticamente
- Anticipación de problemas: identificación de tendencias en las reclamaciones que indican un problema sistémico de producto o proceso
- Post-venta proactivo: contacto automático a clientes que compraron productos con alta tasa de incidencias para ofrecer soporte antes de que se quejen

instrucción 5 — Métricas de atención al cliente en retail:
Mide y mejora continuamente el servicio:
- NPS post-interacción: medir la satisfacción después de cada contacto con el servicio al cliente (no solo después de la compra)
- CSAT: puntuación de satisfacción específica para el proceso de devolución (el más crítico)
- Tasa de resolución en primer contacto (FCR): porcentaje de problemas resueltos en el primer punto de contacto sin escalado
- Tiempo medio de resolución (TTR): desde que el cliente plantea el problema hasta que se resuelve completamente
- Tasa de recurrencia de reclamaciones: porcentaje de clientes que repiten una reclamación por el mismo motivo (indicador de problemas sistémicos)

tarea final:
Genera el sistema completo de atención al cliente para mi negocio de retail, incluyendo: política de devoluciones lista para publicar (en tienda y en la web), script de gestión de quejas para el equipo de tienda con los 5 escenarios más frecuentes, plantillas de respuesta para email y redes sociales para las 10 consultas más comunes, protocolo de crisis en redes sociales ante una queja viral, y un dashboard de métricas de servicio al cliente con los KPIs, los objetivos y la frecuencia de revisión recomendada.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar el sistema de atención al cliente en retail con IA que convierte quejas en oportunidades de fidelización.',
                'vote_score'       => 53,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría de retail con IA para freelancers: diagnóstico y transformación de tiendas',
                'description'      => 'Desarrolla un servicio de consultoría especializada en retail como freelancer, usando IA para diagnosticar la salud del negocio, identificar oportunidades de mejora y acompañar la transformación.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de retail independiente con experiencia en el diagnóstico y la transformación de negocios de comercio minorista, desde tiendas de moda hasta establecimientos de alimentación, electrónica o servicios. Tu objetivo es ayudarme a construir un servicio de consultoría de retail como freelancer, con un proceso de diagnóstico estructurado, propuestas de valor claras y herramientas de IA que multipliquen la calidad y la velocidad de mi trabajo.

objetivo: Crear un modelo de negocio sostenible como consultor de retail freelance, con un proceso de diagnóstico replicable, servicios productizados con precio fijo y el uso de IA para generar análisis más profundos en menos tiempo, diferenciándome de la competencia y justificando honorarios de consultoría premium.

instrucción 1 — Metodología de diagnóstico de retail:
Define tu proceso de auditoría de tiendas:
- Análisis de ventas y rentabilidad: revisión del P&L, las métricas de tienda (conversión, ticket medio, UPT) y la evolución histórica
- Mystery shopping: visita incógnita a la tienda para evaluar la experiencia de compra desde el punto de vista del cliente
- Análisis del surtido: evaluación del surtido con análisis ABC, gestión de mermas y política de precios
- Auditoría de la experiencia en tienda: layout, visual merchandising, señalización, limpieza y estado del local
- Entrevistas al equipo: conversaciones con los dependientes para entender los cuellos de botella operativos y la cultura
- Análisis de la competencia: benchmarking de los principales competidores en el área de influencia

instrucción 2 — Servicios productizados de consultoría retail:
Empaqueta tu expertise en servicios claros y con precio fijo:
- Diagnóstico rápido (1 semana): análisis de las métricas clave + mystery shopping + informe de 10 páginas con las 5 principales oportunidades de mejora. Precio: 1.500-3.000€
- Proyecto de transformación (3 meses): diagnóstico completo + plan de acción + acompañamiento en la implementación + formación del equipo. Precio: 8.000-20.000€
- Retainer mensual de optimización: seguimiento de métricas, análisis de resultados y recomendaciones mensuales para clientes ya transformados. Precio: 1.000-2.500€/mes
- Formación del equipo de tienda: taller de ventas, visual merchandising o gestión de stock para el equipo. Precio: 800-1.500€ por jornada
- Apertura de nueva tienda: acompañamiento completo en la apertura (selección del local, diseño, surtido inicial, formación). Precio: 5.000-15.000€

instrucción 3 — IA como multiplicador del consultor de retail:
Usa la inteligencia artificial para trabajar mejor y más rápido:
- Análisis de datos del POS: herramientas de IA que analizan los datos históricos de ventas del cliente en minutos e identifican patrones que llevarían días de análisis manual
- Generación de informes: la IA redacta el primer borrador del informe de diagnóstico a partir de los datos y las notas del consultor
- Benchmarking automatizado: comparativa automática de las métricas del cliente con los benchmarks del sector
- Simulación de escenarios: modelos de IA que proyectan el impacto económico de las iniciativas propuestas antes de implementarlas
- Generación de propuestas comerciales: la IA personaliza la propuesta para cada cliente potencial a partir de un briefing de 10 minutos

instrucción 4 — Captación de clientes como consultor de retail:
Construye tu pipeline de proyectos:
- Nicho específico: especialización en un tipo de retail (moda independiente, restauración, electrónica, farmacias) para diferenciarte
- Contenido de autoridad: artículos y vídeos sobre los errores más comunes en retail y cómo solucionarlos
- Alianzas estratégicas: acuerdos con proveedores de TPV, software de gestión o asociaciones de comerciantes para recibir referencias
- Presencia en asociaciones: participar en las asociaciones de comerciantes locales y las cámaras de comercio
- Caso de estudio: documentar el antes y el después de cada cliente transformado con datos concretos de mejora

instrucción 5 — Estructura del negocio de consultoría retail:
Gestiona el negocio de forma profesional:
- Propuesta de servicios: documento tipo que presenta la metodología, los entregables, el precio y las condiciones
- Contrato de consultoría: protección de la propiedad intelectual, confidencialidad, forma de pago (50% por adelantado)
- Onboarding del cliente: proceso estructurado de las primeras 2 semanas (recogida de datos, reuniones, acceso a sistemas)
- Gestión de proyectos: herramientas para hacer seguimiento del avance (Notion, ClickUp, Trello) y mantener al cliente informado
- Facturación y tesorería: gestión del flujo de caja con varios proyectos simultáneos y pagos escalonados

tarea final:
Genera mi propuesta de valor como consultor de retail, incluyendo: descripción de los 4 servicios productizados con alcance, entregables y precio orientativo; plantilla del informe de diagnóstico con todas las secciones; checklist de la visita de mystery shopping con los 30 puntos a evaluar; guión de la primera reunión con el cliente potencial (cómo hacer las preguntas correctas y cómo presentar el diagnóstico); y un plan de 6 meses para lanzar el negocio de consultoría con los primeros 3 clientes y alcanzar ingresos recurrentes de 5.000€/mes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir un negocio de consultoría de retail con IA para diagnosticar tiendas, proponer mejoras y acompañar la transformación.',
                'vote_score'       => 56,
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
