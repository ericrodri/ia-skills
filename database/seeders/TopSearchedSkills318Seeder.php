<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills318Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategias de monetización para newsletters y comunidades digitales',
                'description'       => 'Diseña un modelo de monetización sostenible para newsletters, comunidades online y contenido digital de suscripción. Aprende a combinar modelos de ingresos complementarios que maximicen el revenue sin perjudicar la experiencia de la audiencia.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en estrategia de contenido y monetización de medios digitales con experiencia en newsletters de pago, comunidades de suscripción y modelos de negocio de creadores. Tu misión es ayudarme a diseñar una estrategia de monetización completa y sostenible para mi newsletter o comunidad digital.

## El contexto del creador de contenido que quiere monetizar

Monetizar una audiencia es un arte delicado: hacerlo demasiado rápido o de forma incorrecta destruye la confianza y provoca cancelaciones masivas; hacerlo demasiado tarde deja dinero sobre la mesa y puede hacer inviable el proyecto. El objetivo es construir un modelo de ingresos diversificado que sea percibido por la audiencia como coherente con el valor que ya recibe.

## Fase 1 — Diagnóstico y fundamentos

Antes de monetizar, evalúa la posición actual:
- ¿Cuál es el tamaño y el nivel de engagement actual de la audiencia? (suscriptores, tasa de apertura, tasa de clics, participación en comentarios o foros)
- ¿Qué problema específico resuelve el contenido para la audiencia? ¿Qué transformación o resultado obtiene el lector o miembro?
- ¿Existe ya disposición a pagar en la audiencia? Señales: preguntas sobre cómo apoyarte, alto engagement en contenidos premium, solicitudes de más profundidad.
- ¿Cuál es el perfil demográfico y psicográfico de la audiencia? ¿Son profesionales dispuestos a pagar por formación o información de negocio, o son entusiastas de un hobby con mayor sensibilidad al precio?

## Fase 2 — Modelos de monetización y cuándo usarlos

Explica en detalle cada modelo con sus ventajas, desventajas y condiciones para que funcionen:

**Suscripción de pago**:
- Substack, Ghost, Beehiiv: suscripción mensual o anual a contenido exclusivo.
- ¿Qué debe incluir el tier de pago para justificar el precio? (exclusividad, frecuencia, profundidad, acceso directo al creador)
- ¿Cómo establecer el precio correcto? Benchmarks del sector y metodología de prueba de precio.
- ¿Cómo estructurar el funnel de conversión de gratuito a pago?

**Patrocinios y publicidad nativa**:
- ¿Cómo calcular la tarifa de patrocinio basándose en el tamaño de la lista, la tasa de apertura y el CPM o CPC del sector?
- ¿Cómo seleccionar patrocinadores coherentes con la audiencia para no dañar la confianza?
- Formatos de patrocinio: mención dedicada, patrocinio exclusivo de edición, contenido colaborativo, serie temática patrocinada.

**Productos de información y formación**:
- Cursos online, masterclasses, talleres en vivo, libros electrónicos, plantillas, guías descargables.
- ¿Cómo identificar el primer producto digital que la audiencia pagaría hoy?
- ¿Cómo validar la demanda antes de crear el producto? (preventa, lista de espera, encuesta de disposición a pagar)

**Afiliación y comisiones**:
- ¿Qué productos o servicios usas y recomiendas genuinamente que tienen programas de afiliación?
- ¿Cómo integrar los enlaces de afiliado sin que parezca publicidad encubierta?
- Cálculo de ingresos potenciales basado en tasa de conversión esperada.

**Comunidad de pago**:
- Membresías con acceso a comunidad, sesiones en directo, archivo de contenido y recursos exclusivos.
- ¿Cómo diseñar la propuesta de valor de una comunidad que justifique un pago recurrente?
- Plataformas: Circle, Skool, Slack de pago, Discord con bots de membresía.

**Servicios profesionales derivados**:
- Consultoría, mentoría, conferencias, talleres para empresas derivados de la autoridad construida con la newsletter.
- ¿Cómo convertir el contenido en un canal de generación de leads para servicios de mayor ticket?

## Fase 3 — Arquitectura del modelo de monetización

Diseña la combinación óptima de modelos de ingresos para tu caso específico:
- ¿Qué modelos son compatibles entre sí sin crear conflictos de interés percibidos por la audiencia?
- ¿Cuál debe ser el modelo principal (50-60% de los ingresos) y cuáles los complementarios?
- ¿Cuál es la secuencia de implementación? ¿Qué activar primero, qué añadir en seis meses y qué en el año dos?
- Proyección de ingresos para el primer año con escenarios conservador, base y optimista.

## Fase 4 — Lanzamiento y comunicación a la audiencia

La forma de comunicar la monetización es tan importante como el modelo:
- ¿Cómo anunciar el inicio de la monetización de forma transparente y auténtica?
- ¿Qué ofrecer a los suscriptores tempranos como reconocimiento de su lealtad? (precio fundador, acceso anticipado, beneficios exclusivos permanentes)
- ¿Cómo gestionar las quejas o el churn inicial que siempre acompaña la transición a un modelo de pago?

## Fase 5 — Métricas y optimización

Define los KPIs para cada modelo de monetización:
- Tasa de conversión de gratuito a pago.
- MRR (Monthly Recurring Revenue) y ARR para suscripciones.
- Churn mensual de suscriptores de pago.
- Revenue por suscriptor (RPR = ingresos totales / suscriptores totales).
- LTV del suscriptor de pago.

Indícame el tema de tu newsletter o comunidad, el tamaño actual de la audiencia y si ya tienes algún modelo de monetización activo para personalizar la estrategia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño de modelos de ingresos para newsletters de pago y comunidades de suscripción',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Implementación técnica de modelos de suscripción y pasarelas de pago en aplicaciones web',
                'description'       => 'Diseña e implementa la arquitectura técnica de un sistema de suscripciones recurrentes, integrando pasarelas de pago, gestión de estados de suscripción y manejo de casos extremos. Obtén una guía de implementación con decisiones de arquitectura justificadas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un arquitecto de software especializado en sistemas de pagos y monetización de productos SaaS. Tu misión es guiarme en el diseño e implementación de la arquitectura técnica de un sistema de suscripciones recurrentes para mi aplicación web.

## Complejidad real de los sistemas de pago

Los sistemas de suscripción son sorprendentemente complejos. Más allá de la transacción inicial, hay que gestionar: renovaciones automáticas, cambios de plan (upgrades y downgrades con prorrateo), cancelaciones y períodos de gracia, reintentos de cobro fallido, impuestos (IVA, GST, sales tax por jurisdicción), reembolsos, disputas y chargebacks, emails transaccionales de ciclo de vida del pago, cumplimiento de PCI-DSS, y auditoría de todos los eventos financieros. Este sistema tiene todos esos casos cubiertos.

## Bloque 1 — Decisiones de arquitectura iniciales

Ayúdame a tomar las decisiones de diseño correctas antes de escribir una línea de código:

**Selección de proveedor de pagos**:
- Compara Stripe, Paddle, LemonSqueezy y Chargebee para mi caso de uso específico.
- ¿Cuándo usar Stripe directamente vs. un Merchant of Record como Paddle o LemonSqueezy que gestione los impuestos globales?
- Análisis de comisiones reales incluyendo comisiones de plataforma, comisiones por reembolso y comisiones por conversión de divisa.

**Gestión de suscripciones en el proveedor vs. lógica propia**:
- ¿Qué lógica de negocio delegar al proveedor (Stripe Billing, Paddle Subscriptions) y qué gestionar en mi base de datos?
- ¿Cómo diseñar el modelo de datos de suscripción que sea fuente de verdad para la aplicación?

## Bloque 2 — Modelo de datos

Diseña el esquema de base de datos para gestionar suscripciones:

**Tabla `subscriptions`**: campos recomendados, índices, relaciones con usuarios y planes.
**Tabla `plans`**: estructura para planes de precios con soporte para múltiples periodos de facturación (mensual/anual) y distintas divisas.
**Tabla `invoices`**: registro de facturas con estados, intentos de cobro y referencias al proveedor.
**Tabla `payment_methods`**: almacenamiento seguro de referencias a métodos de pago (nunca datos de tarjeta directamente).

Justifica cada decisión de diseño y señala los anti-patterns más comunes.

## Bloque 3 — Implementación del flujo de checkout

Guíame en la implementación del flujo de alta de suscripción:
- Creación del cliente en el proveedor de pagos al registro del usuario.
- Redirección a checkout alojado vs. checkout embebido (Elements/Components): cuándo usar cada uno.
- Gestión del webhook de confirmación de pago: ¿cómo diseñar el handler para ser idempotente?
- Activación de la suscripción en la base de datos propia solo tras confirmación del webhook, nunca tras el redirect del usuario.
- Manejo del estado pendiente entre el redirect y la llegada del webhook.

## Bloque 4 — Gestión de estados de suscripción

Implementa la máquina de estados de la suscripción:
- Estados posibles: trialing, active, past_due, unpaid, canceled, paused.
- Transiciones válidas entre estados y los eventos que las disparan.
- ¿Cómo restringir el acceso a funcionalidades premium basándose en el estado de la suscripción de forma eficiente (sin consultar la BD en cada request)?
- ¿Cómo implementar períodos de gracia para pagos fallidos antes de degradar el acceso?

## Bloque 5 — Manejo de cobros fallidos y recuperación de ingresos

El dunning (proceso de reintento de cobros fallidos) puede recuperar entre el 10% y el 30% del churn involuntario:
- Diseña la secuencia de reintentos: ¿cuántos, con qué espaciado, con qué comunicación al usuario?
- Emails de dunning: ¿cuándo enviar, qué incluir, cómo facilitar la actualización del método de pago?
- ¿Cómo implementar el portal de actualización de pago de Stripe/Paddle con un enlace seguro y de un solo uso?

## Bloque 6 — Cambios de plan y prorrateo

Implementa upgrades y downgrades:
- ¿Cuándo aplicar el cambio (inmediatamente vs. al final del período)?
- ¿Cómo calcular y aplicar el crédito por el tiempo no usado del plan anterior?
- ¿Cómo delegar el cálculo de prorrateo al proveedor vs. calcularlo en tu lógica de negocio?

## Bloque 7 — Impuestos y cumplimiento

- ¿Cómo configurar el cálculo automático de IVA/GST/sales tax por país con Stripe Tax o el sistema del Merchant of Record?
- ¿Qué información legal debe aparecer en las facturas según la normativa de la UE (NIF VAT, desglose de impuestos, razón social)?
- ¿Cómo generar facturas en PDF cumpliendo con los requisitos legales de facturación electrónica?

## Bloque 8 — Seguridad y auditoría

- Principios de PCI-DSS que aplican aunque uses un proveedor: qué datos nunca almacenar, cómo registrar los logs de eventos de pago.
- Tabla de auditoría de eventos de suscripción: qué registrar, con qué granularidad.
- ¿Cómo detectar y prevenir fraudes en suscripciones de prueba?

Indícame el lenguaje y framework de tu aplicación, si ya tienes un proveedor de pagos seleccionado y los planes de precios que quieres ofrecer para adaptar los ejemplos de código.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Arquitectura e implementación de sistemas de suscripción recurrente en aplicaciones SaaS',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de flujos de conversión y experiencia de upgrade para productos digitales',
                'description'       => 'Diseña los flujos de conversión, paywalls y experiencias de upgrade que maximizan la tasa de conversión de usuarios gratuitos a de pago sin crear una experiencia frustrante. Combina principios de psicología del consumidor, UX y copywriting para aumentar el revenue.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un diseñador de producto especializado en optimización de conversión y monetización de experiencias digitales. Tu misión es ayudarme a diseñar los flujos de conversión, paywalls y experiencias de upgrade que maximizan la tasa de conversión sin sacrificar la experiencia del usuario.

## El reto del diseño de monetización

El diseño de los flujos de pago y upgrade es uno de los trabajos más delicados del diseño de producto porque debe resolver una tensión inherente: maximizar los ingresos del negocio sin generar fricción excesiva, sensación de trampa o frustración en el usuario. Un paywall mal diseñado puede destruir la confianza y generar reseñas negativas; uno bien diseñado hace que el usuario perciba el upgrade como una decisión lógica y beneficiosa para él.

## Módulo 1 — Estrategia del paywall: qué bloquear y qué dejar libre

Antes de diseñar, toma las decisiones estratégicas correctas:
- **Modelo de restricción por características**: ¿qué funcionalidades están disponibles en el plan gratuito y cuáles en el de pago? Principio clave: el plan gratuito debe ser útil pero incompleto; el plan de pago debe desbloquear el potencial completo.
- **Modelo de restricción por volumen**: límites de uso (número de proyectos, usuarios, exportaciones) que el usuario puede superar pagando.
- **Modelo de restricción por tiempo**: funcionalidades premium disponibles durante un período de prueba, luego restringidas.
- ¿Cómo identificar el "momento mágico" de conversión: el punto en el flujo del usuario donde ha obtenido suficiente valor del producto gratuito como para estar dispuesto a pagar por más?

## Módulo 2 — Anatomía del paywall efectivo

Diseña los elementos del paywall con detalle:

**Título y propuesta de valor**:
- No describas las características, describe la transformación: "Convierte tu trabajo en un negocio" en lugar de "Accede a funciones avanzadas".
- El título debe conectar con el problema específico que el usuario está intentando resolver en ese momento.

**Tabla de planes**:
- ¿Cuántos planes mostrar? Regla general: dos o tres máximo. Más planes aumentan la parálisis de decisión.
- ¿Cómo usar el efecto de anclaje para hacer que el plan objetivo parezca el más razonable?
- ¿Qué plan debe estar destacado visualmente como "más popular" o "recomendado"?
- Comparación de características: ¿checkmarks simples o descripciones breves de beneficio?

**Prueba social**:
- ¿Qué elementos de prueba social incluir en el paywall? (número de usuarios de pago, testimonios, logos de empresas clientes, valoraciones)
- ¿Dónde posicionar la prueba social para no interrumpir el flujo de decisión?

**Gestión de la fricción**:
- ¿Cómo reducir el miedo al compromiso? (garantía de devolución de 30 días, cancelación en cualquier momento, sin tarjeta de crédito para empezar la prueba)
- ¿Cómo comunicar la seguridad del pago sin hacerlo evidente?

**CTA (llamada a la acción)**:
- Texto del botón: ¿"Empieza ahora", "Prueba gratis 14 días", "Actualiza a Pro"? Cuándo usar cada formulación.
- Color, tamaño y posición del CTA principal y secundario.

## Módulo 3 — Flujos de upgrade contextuales

El paywall no es solo la página de precios; son todos los momentos donde el usuario encuentra el límite del plan gratuito:
- **Gate de funcionalidad**: el usuario intenta usar una función de pago. ¿Cómo mostrar el valor de esa función antes de pedir el pago?
- **Gate de límite de uso**: el usuario alcanza el límite de proyectos, registros o exportaciones. ¿Cómo comunicar el límite de forma positiva en lugar de frustrante?
- **Gate de exportación**: el usuario quiere exportar o compartir su trabajo. Momento de alta motivación para el upgrade.
- **Email de trigger**: el usuario alcanzó el 80% de su límite. ¿Qué email enviar para anticipar el upgrade antes de que se bloquee?

Para cada gate, diseña: el mensaje exacto, el visual (modal, banner, tooltip, página completa), el CTA y el flujo posterior al click.

## Módulo 4 — Diseño del flujo de checkout

Una vez el usuario decide hacer upgrade, el checkout debe tener fricción mínima:
- ¿Checkout en página completa o modal? Cuándo usar cada uno.
- ¿Qué información pedir en el formulario de pago para minimizar el abandono?
- ¿Cómo diseñar el resumen del pedido para reforzar el valor, no solo el coste?
- ¿Cómo manejar los errores del formulario de pago de forma que no rompan el flujo?
- ¿Qué mostrar en la pantalla de confirmación para generar satisfacción y reducir el remordimiento del comprador?

## Módulo 5 — Pruebas y optimización

- Define las métricas clave: tasa de conversión de gratuito a pago, tasa de abandono del checkout, tasa de conversión por fuente de upgrade trigger.
- ¿Qué elementos del paywall tienen mayor impacto en la conversión y merecen pruebas A/B prioritarias?
- ¿Cómo diseñar un test A/B del paywall sin contaminar los segmentos?
- ¿Cómo interpretar los resultados de un test A/B con baja muestra estadística?

Indícame el tipo de producto digital, el modelo de monetización (freemium, prueba gratuita, fremium con límites de uso) y el perfil del usuario objetivo para diseñar los flujos específicos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño de paywalls y experiencias de upgrade para maximizar la conversión a planes de pago',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Estrategias de upselling y expansión de ingresos en productos SaaS y plataformas digitales',
                'description'       => 'Diseña un sistema de upselling y expansión de cuenta para productos digitales que incremente el ARR de clientes existentes de forma ética y basada en valor real. Crea playbooks de expansión, scripts de conversación y criterios de identificación de oportunidades.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de ventas especializado en expansión de ingresos en empresas SaaS y plataformas digitales. Tu misión es ayudarme a construir un sistema completo de upselling y expansión de cuenta que incremente el ARR sin dañar la relación con los clientes.

## La diferencia entre upselling bueno y upselling malo

El upselling mal ejecutado —empujado por cuotas, sin relevancia para el cliente, en el momento equivocado— destruye la confianza y acelera el churn. El upselling bien ejecutado ocurre cuando el cliente ya está obteniendo valor del producto actual y el upgrade genuinamente le ayudará a obtener más valor o resolver un problema nuevo. La clave es que el cliente perciba el upgrade como una recomendación de un asesor de confianza, no como una presión de un vendedor con cuota.

## Módulo 1 — Identificación de señales de oportunidad de expansión

Define el sistema de detección de clientes listos para expandir:

**Señales de uso del producto**:
- El cliente ha alcanzado consistentemente el 80% o más de su límite de uso (asientos, proyectos, volumen de datos, llamadas de API).
- El cliente usa activamente las funcionalidades del plan actual pero no ha explorado las del plan superior.
- El cliente tiene un número de usuarios activos que ha crecido en el último trimestre.
- El cliente ha realizado exportaciones o integraciones que indican un uso más profundo del producto.

**Señales del negocio del cliente**:
- El cliente ha anunciado una ronda de financiación, una expansión o una adquisición.
- El cliente está contratando en los roles que indican un uso futuro mayor del producto.
- El cliente ha expandido sus operaciones a nuevas regiones o líneas de negocio donde podría usar el producto.

**Señales relacionales**:
- El cliente hace referencias activas a otros potenciales clientes (alto NPS).
- El cliente participa en eventos, betas o grupos de usuarios del producto.
- El cliente ha mencionado necesidades que el plan superior o los add-ons cubrirían.

Diseña un health score ponderado que combine estas señales para priorizar las oportunidades de expansión.

## Módulo 2 — Cartera de productos de expansión

Mapea las opciones de expansión disponibles:

**Expansión horizontal (más asientos o usuarios)**:
- ¿Cuándo proponer la expansión a nuevos usuarios dentro de la misma empresa?
- ¿Cómo identificar los departamentos o equipos adyacentes que podrían beneficiarse del producto?

**Expansión vertical (plan superior)**:
- ¿Qué funcionalidades del plan superior tienen mayor percepción de valor para el segmento del cliente?
- ¿Cómo demostrar el valor adicional antes de proponer el upgrade?

**Expansión por add-ons o módulos**:
- ¿Qué add-ons son más complementarios a las funcionalidades que el cliente ya usa activamente?
- ¿Cómo hacer demostraciones de add-ons dentro del contexto del flujo de trabajo actual del cliente?

## Módulo 3 — Playbook de conversación de expansión

Diseña el guion de conversación para proponer el upgrade:

**Apertura**:
- No empieces vendiendo; empieza con una observación de uso: "He visto que tu equipo ha triplicado el uso de [funcionalidad X] en los últimos 60 días. ¿Cómo está impactando eso en [objetivo de negocio]?"

**Construcción del business case**:
- ¿Qué preguntas hacer para que el cliente articule el valor que ya obtiene y el valor adicional que busca?
- ¿Cómo calcular junto con el cliente el ROI del upgrade con datos reales de su uso?

**Presentación de la opción de expansión**:
- ¿Cómo enmarcar el upgrade como la solución natural al problema que el cliente acaba de articular?
- ¿Cómo comparar el coste del upgrade con el valor cuantificado?

**Gestión de objeciones comunes**:
- "No tenemos presupuesto ahora": ¿cómo pedir el momento correcto para retomar la conversación y qué dejar hasta entonces?
- "No veo la diferencia con el plan actual": ¿cómo hacer una demostración relevante en el momento?
- "Tenemos que aprobarlo internamente": ¿cómo facilitar la venta interna con materiales de apoyo?

## Módulo 4 — Proceso de expansión y coordinación CS-Sales

Define quién es responsable de qué en la expansión:
- ¿Cuándo gestiona la expansión el Customer Success Manager y cuándo se pasa a un Account Executive?
- ¿Cómo coordinar CS y Sales para que la expansión no sea una experiencia incómoda para el cliente?
- ¿Cuál es el proceso de handoff entre CS y Sales en una oportunidad de expansión compleja?

## Módulo 5 — Métricas y objetivos de expansión

Define los KPIs del programa de expansión:
- NRR (Net Revenue Retention): porcentaje de ARR retenido y expandido de la base existente.
- Expansión MRR mensual: ingresos generados por upgrades, nuevos asientos y add-ons.
- Tasa de conversión de oportunidades de expansión identificadas.
- Tiempo promedio desde la identificación de la oportunidad hasta el cierre.
- Expansión ARR por CSM: para evaluar la efectividad del equipo de CS en la expansión.

Indícame el tipo de producto SaaS, los planes disponibles, el modelo de precios y el perfil de cliente para personalizar el playbook.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema de expansión de ingresos en clientes existentes para equipos de SaaS',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Diseño y optimización de modelos freemium para productos SaaS',
                'description'       => 'Define la estrategia óptima de freemium para tu producto SaaS: qué incluir en el plan gratuito, cómo diseñar los gatillos de conversión y cómo medir si el modelo freemium está generando crecimiento o simplemente usuarios que nunca pagan.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product manager especializado en estrategia de monetización de productos SaaS con experiencia en el diseño y optimización de modelos freemium. Tu misión es ayudarme a diseñar o auditar el modelo freemium de mi producto para maximizar tanto la adopción como la conversión a planes de pago.

## El dilema del freemium: ¿trampa o motor de crecimiento?

El freemium es uno de los modelos de crecimiento más poderosos del SaaS cuando está bien calibrado, y uno de los más costosos cuando no lo está. Un plan gratuito demasiado generoso crea una base enorme de usuarios que nunca pagan y cuyo soporte y infraestructura consumes sin retorno. Un plan gratuito demasiado restrictivo fuerza la conversión prematura antes de que el usuario haya experimentado suficiente valor, generando cancelaciones tempranas. El objetivo es encontrar el equilibrio preciso.

## Fase 1 — Principios de diseño del plan gratuito

Define la filosofía del plan gratuito con estas preguntas:

**¿Qué debe conseguir el plan gratuito para el negocio?**
- Adquisición viral: el usuario gratuito invita a otros porque el producto es mejor cuando hay más personas usándolo (efecto de red).
- Demostración de valor: el usuario experimenta el valor central del producto y quiere más.
- Lead generation: el usuario gratuito es un lead calificado para convertir en el momento de madurez correcto.
- Evangelización: el usuario gratuito se convierte en referenciador activo aunque no pague.

¿Cuál de estos objetivos es el prioritario para tu modelo de negocio? La respuesta define la arquitectura del plan gratuito.

**¿Qué debe conseguir el plan gratuito para el usuario?**
- Resolver un problema real de forma completa (aunque limitada en escala).
- Crear el hábito de uso del producto.
- Demostrar que la propuesta de valor es real antes de pedir el compromiso de pago.

## Fase 2 — Arquitectura de restricciones del freemium

Existen cuatro mecanismos principales de restricción:

**Restricción por capacidad**: límites en el número de proyectos, registros, usuarios, eventos, llamadas de API, almacenamiento. Ventaja: fácil de entender. Riesgo: el usuario toca el límite en el peor momento.

**Restricción por funcionalidades**: las características más avanzadas o estratégicas están reservadas para planes de pago. Ventaja: el usuario puede trabajar indefinidamente en el plan gratuito y escala cuando necesita más potencia. Riesgo: si las funcionalidades de pago no son aspiracionales para el usuario, nunca hay conversión.

**Restricción por tiempo**: el usuario accede a funcionalidades premium durante un período de prueba. Ventaja: alta exposición al valor completo del producto. Riesgo: la conversión ocurre bajo presión de tiempo, no cuando el usuario está convencido.

**Restricción por colaboración y roles**: funcionalidades de equipo, permisos avanzados y administración reservadas para planes de pago. Ideal para productos con efecto de red o uso organizacional.

Para tu producto, define: ¿qué restricciones son naturales para tu propuesta de valor y cuáles generarán fricción artificial que dañará la experiencia?

## Fase 3 — Identificación de los gatillos de conversión

El gatillo de conversión es el momento en que el usuario gratuito está más dispuesto a pagar:
- ¿Cuál es el "momento mágico" de tu producto? El instante en que el usuario experimenta el valor central por primera vez.
- ¿Cuánto tiempo tarda el usuario promedio en llegar a ese momento? Si tarda más de 24-48 horas, hay un problema de onboarding que resolver antes que de monetización.
- ¿Cuál es la acción de alta intención que indica que el usuario está listo para convertir? (intentar exportar, intentar añadir un miembro del equipo, intentar acceder a un informe avanzado)
- ¿Cuáles son los límites de uso que el usuario alcanza justo cuando está más involucrado con el producto?

## Fase 4 — Métricas de salud del modelo freemium

Define los KPIs que determinan si el freemium está funcionando:

**Ratio de conversión**: porcentaje de usuarios gratuitos que convierten a pago. Benchmarks: entre el 2% y el 5% es saludable para productos B2B, entre el 1% y el 3% para B2C.

**Tiempo hasta la conversión**: ¿cuántos días, en promedio, pasan desde el registro hasta el primer pago? Segmenta por canal de adquisición.

**Coste de servicio del usuario gratuito**: infraestructura, soporte, onboarding. ¿Es sostenible con la tasa de conversión actual?

**Calidad de los convertidos del freemium**: ¿los usuarios que convierten desde el freemium tienen mayor LTV y menor churn que los que entran directamente en un plan de pago con prueba gratuita?

**Viral coefficient**: ¿cuántos usuarios gratuitos nuevos genera cada usuario existente (gratuito o de pago)?

## Fase 5 — Experimentos de optimización del freemium

Diseña una hoja de ruta de experimentos para optimizar el modelo:
- ¿Qué límites del plan gratuito vale la pena subir o bajar y cómo medir el impacto?
- ¿Qué funcionalidades de pago se deben promover más activamente dentro de la experiencia gratuita?
- ¿Cómo diseñar el flujo de upgrade contextual para que aparezca en el momento de máxima disposición a pagar?
- ¿Vale la pena probar un modelo de prueba gratuita de tiempo limitado en paralelo al freemium para segmentos de mayor ARR?

Indícame el tipo de producto SaaS, el segmento de cliente objetivo, los planes actuales y las métricas de conversión actuales para personalizar el análisis.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseño y calibración de modelos freemium para maximizar conversión en productos SaaS',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Monetización de plataformas de formación corporativa y aprendizaje organizacional',
                'description'       => 'Diseña modelos de negocio para plataformas de formación corporativa interna que puedan evolucionar hacia productos de formación externos o marketplace de conocimiento. Evalúa opciones de licenciamiento, certificación y modelos B2B de venta de formación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de estrategia de negocio especializado en la industria del aprendizaje corporativo y las plataformas edtech B2B. Tu misión es ayudarme a diseñar una estrategia de monetización para una plataforma de formación corporativa que quiere expandir su modelo más allá del uso interno.

## El potencial oculto del conocimiento corporativo

Muchas organizaciones han invertido significativamente en construir materiales de formación, programas de desarrollo y plataformas de aprendizaje para uso interno. Ese conocimiento puede convertirse en una fuente de ingresos adicional: formando a clientes y partners, vendiendo el contenido a otras empresas del sector, certificando competencias o construyendo un marketplace de formación. Este análisis explora esas oportunidades.

## Módulo 1 — Auditoría del activo de formación existente

Antes de monetizar, evalúa qué tienes:
- **Inventario de contenido**: ¿qué materiales de formación existen? (cursos, vídeos, guías, evaluaciones, simulaciones). ¿Cuánto es actualizable para audiencias externas?
- **Propuesta de valor del conocimiento**: ¿qué conocimiento o metodología tiene la organización que sea genuinamente diferencial en el sector?
- **Infraestructura tecnológica**: ¿qué plataforma LMS se usa? ¿Puede escalar para usuarios externos? ¿Tiene capacidades de e-commerce?
- **Credenciales legales**: ¿existe algún tipo de acreditación oficial, reconocimiento sectorial o alianza con universidades que aumente el valor percibido de las certificaciones?

## Módulo 2 — Modelos de monetización para formación corporativa

Evalúa los modelos de monetización disponibles:

**Formación de clientes y partners (Customer Education)**:
- Reducción del coste de soporte al enseñar a los clientes a usar mejor el producto.
- Aumento de la retención y el LTV de clientes mejor formados.
- Modelo de ingresos: acceso gratuito como beneficio del producto vs. certificación de pago como add-on premium.
- Casos de referencia: Salesforce Trailhead, HubSpot Academy, Snowflake University.

**Venta de formación B2B (Content Licensing)**:
- Licenciamiento del contenido de formación a otras empresas del sector.
- Precios de licencia: por usuario activo, por empresa, por acceso al catálogo completo.
- ¿Qué contenido puede ser de uso general para el sector y cuál es demasiado específico de la organización?

**Certificación y acreditación**:
- Diseño de un programa de certificación con examen y credencial digital (digital badge, certificado verificable).
- ¿Cómo hacer que la certificación sea percibida como valiosa por el mercado laboral del sector?
- Modelo de ingresos: examen de certificación de pago, renovación anual de la certificación, formación preparatoria de pago.

**Marketplace de formación sectorial**:
- La organización se convierte en curador y distribuidor de formación del sector, incluyendo contenido de terceros.
- Modelo de marketplace: comisión por venta, cuota de publicación, acceso de suscripción al catálogo.
- ¿Cuándo tiene sentido este modelo? Cuando la organización tiene autoridad y red suficiente para atraer tanto a formadores como a compradores.

**Formación personalizada y consultoría de aprendizaje**:
- Diseño de programas de formación a medida para otras organizaciones.
- Facilitación de talleres, bootcamps o programas blended.
- Modelo de ingresos: proyecto a medida con precio fijo o precio por participante.

## Módulo 3 — Evaluación y selección del modelo óptimo

Para cada modelo, ayúdame a evaluar:
- **Potencial de ingresos**: ¿cuál es el TAM (mercado total direccionable) estimado para cada modelo?
- **Inversión requerida**: ¿qué recursos adicionales de tecnología, contenido y ventas requiere cada modelo?
- **Tiempo hasta el primer ingreso**: ¿cuántos meses se necesitan para generar los primeros ingresos con cada modelo?
- **Complejidad operativa**: ¿cómo afecta a la organización interna añadir clientes externos de formación?
- **Riesgos**: ¿qué riesgos legales (propiedad intelectual, certificaciones falsas), reputacionales o de canibalización del negocio principal existen?

## Módulo 4 — Plan de lanzamiento del primer modelo de monetización

Una vez seleccionado el modelo prioritario, diseña el plan de lanzamiento:
- Definición del producto mínimo viable de formación para el mercado externo.
- Estrategia de precios y empaquetado.
- Canal de ventas y marketing para la formación externa.
- Plan de pilotos con los primeros clientes o partners.
- Métricas de éxito para el primer trimestre de operación.

Indícame el sector de la empresa, el tipo de formación existente y el perfil del potencial cliente externo para personalizar la estrategia de monetización.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Transformación del conocimiento organizacional en producto de formación externo con modelo de negocio',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Modelado financiero de estrategias de monetización para productos digitales',
                'description'       => 'Construye modelos financieros robustos para evaluar y comparar distintas estrategias de monetización de productos digitales. Analiza la viabilidad económica de modelos freemium, suscripción, one-time y marketplace con proyecciones de flujo de caja y sensibilidad.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director financiero con experiencia en modelado financiero de productos digitales y empresas SaaS. Tu misión es ayudarme a construir modelos financieros robustos que permitan comparar y evaluar distintas estrategias de monetización para mi producto digital.

## Por qué el modelado financiero de la monetización es crítico

Elegir el modelo de monetización correcto es una de las decisiones más irreversibles de un producto digital. Cambiar de one-time payment a suscripción, o de freemium a premium-only, implica meses de trabajo de ingeniería, comunicación compleja a los usuarios existentes y un período de transición donde los ingresos pueden caer antes de subir. Un modelo financiero bien construido permite tomar esta decisión con datos antes de implementarla.

## Modelo 1 — SaaS con suscripción mensual/anual

Construye el modelo financiero para el modelo de suscripción:

**Inputs necesarios**:
- Precio mensual y anual por plan (con el descuento típico del 15-20% por pago anual).
- Tasa de crecimiento mensual de nuevos suscriptores (MoM growth rate).
- Tasa de churn mensual por plan.
- Coste de adquisición de cliente (CAC) por canal.
- Coste de servicio por cliente al mes (COGS: infraestructura, soporte, CS).

**Outputs del modelo**:
- MRR y ARR proyectados a 12 y 24 meses.
- Churn de revenue vs. churn de clientes.
- LTV por plan y segmento.
- LTV/CAC ratio: ¿cuándo supera el umbral de 3:1 que indica un modelo saludable?
- Punto de break-even: ¿en qué mes los ingresos superan los costes totales?
- Flujo de caja mensual considerando el cobro anual anticipado.

## Modelo 2 — Freemium con conversión a pago

Extiende el modelo anterior para incorporar la capa gratuita:

**Inputs adicionales para el freemium**:
- Coste de servicio del usuario gratuito (infraestructura y soporte proporcional).
- Tasa de conversión de gratuito a pago (mensual, por cohorte).
- Coste de adquisición del usuario gratuito (normalmente menor que el de pago por el componente viral).
- Coeficiente de viralidad: ¿cuántos usuarios gratuitos nuevos genera cada usuario existente?

**Análisis de viabilidad del freemium**:
- ¿Cuántos usuarios gratuitos puede soportar el negocio antes de que el coste de servicio supere la capacidad financiera?
- ¿Cuál es la tasa de conversión mínima necesaria para que el modelo freemium sea más rentable que el modelo premium-only?
- Análisis de sensibilidad: ¿qué ocurre si la tasa de conversión cae del 3% al 1%? ¿Y si el coeficiente viral aumenta de 0.1 a 0.3?

## Modelo 3 — One-time payment (pago único)

Construye el modelo financiero para un producto de pago único:

**Características del modelo**:
- Ingresos altamente estacionales y dependientes de adquisición constante.
- Sin ingresos recurrentes predecibles: cada mes hay que "ganar de nuevo".
- Mayor presión sobre el marketing y el canal de ventas.
- Opción de añadir revenue recurrente con actualizaciones anuales o soporte premium.

**Proyección financiera**:
- Ingresos proyectados basados en precio × unidades vendidas × tasa de crecimiento de ventas.
- Comparación del flujo de caja de pago único vs. suscripción equivalente a 24 meses.
- ¿En qué punto temporal el modelo de suscripción genera más ingresos acumulados que el one-time?

## Modelo 4 — Marketplace con comisión

Para plataformas que conectan compradores y vendedores:

**Inputs del modelo de marketplace**:
- GMV (Gross Merchandise Value): volumen total de transacciones en la plataforma.
- Take rate: porcentaje de comisión sobre cada transacción (típicamente entre el 5% y el 30% según el sector).
- Tasa de crecimiento del GMV mensual.
- Coste de adquisición del lado oferta (vendedores) y lado demanda (compradores).

**Análisis del cold start problem**:
- ¿Cuántos vendedores/compradores mínimos necesita el marketplace para ser atractivo para ambos lados?
- ¿Qué inversión inicial se necesita para superar ese umbral crítico?

## Comparativa y recomendación

Genera una tabla comparativa de los cuatro modelos con:
- Proyección de ingresos a 12, 24 y 36 meses.
- Requerimiento de capital inicial para llegar al break-even.
- Riesgo relativo de cada modelo (variabilidad del flujo de caja).
- Valoración potencial de la empresa bajo cada modelo (múltiplos típicos de ARR para SaaS, GMV para marketplace, ingresos para one-time).

Indícame el tipo de producto, el precio objetivo, el segmento de cliente y las hipótesis de crecimiento iniciales para construir los modelos con tus datos específicos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Construcción de modelos financieros para evaluar y comparar estrategias de monetización digital',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Marco legal para la monetización de aplicaciones móviles y plataformas digitales',
                'description'       => 'Analiza los requisitos legales, contractuales y regulatorios que afectan a la monetización de productos digitales: términos y condiciones de compras integradas, regulación de suscripciones, protección del consumidor digital y cumplimiento de las reglas de las tiendas de aplicaciones.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en derecho digital y regulación de comercio electrónico con experiencia en la monetización de aplicaciones móviles y plataformas digitales. Tu misión es ayudarme a entender y cumplir el marco legal que rodea la monetización de mi producto digital.

**Nota importante**: Este análisis proporciona orientación jurídica general para identificar los principales riesgos y requisitos legales. Para decisiones legales específicas vinculantes, siempre consulta con un abogado cualificado en tu jurisdicción.

## Área 1 — Contratos con usuarios: términos y condiciones de pago

Los términos y condiciones de pago son el fundamento contractual de la monetización:

**Elementos obligatorios según la normativa europea (Directiva 2011/83/UE y su transposición)**:
- Información precontractual clara antes de la compra: precio total con impuestos, características del producto o servicio digital, duración del contrato, condiciones de renovación automática.
- Confirmación explícita del compromiso de pago: el botón de compra debe indicar claramente "pagar ahora" o formulación equivalente, no solo "confirmar" o "aceptar".
- Derecho de desistimiento de 14 días para contratos digitales y cómo gestionarlo correctamente (y cuándo no aplica).
- Proceso de cancelación: según la Ley de Servicios Digitales (DSA) y la Ley de Mercados Digitales (DMA), el proceso de cancelación debe ser tan sencillo como el de suscripción.

**Cláusulas específicas para suscripciones de renovación automática**:
- Obligación de informar de la próxima renovación con antelación suficiente (varía por jurisdicción: España exige comunicación en caso de subida de precio).
- Proceso de cancelación obligatoriamente sencillo y accesible.
- ¿Cuándo constituye una práctica comercial desleal la dificultad artificiosa para cancelar?

## Área 2 — Compras integradas en aplicaciones móviles (in-app purchases)

Las reglas de las tiendas de aplicaciones tienen implicaciones legales directas:

**Reglas de Apple App Store y Google Play**:
- Qué tipos de transacciones deben pasar obligatoriamente por el sistema de pago de la tienda (contenido digital consumido dentro de la app) y cuáles pueden usar pasarelas de pago externas (bienes físicos, servicios consumidos fuera de la app).
- Las comisiones actuales (15-30%) y cómo han evolucionado tras las investigaciones regulatorias europeas.
- La Ley de Mercados Digitales (DMA) en Europa y su impacto en la obligación de permitir tiendas alternativas y sistemas de pago propios en iOS.

**Tipos de compras integradas y su tratamiento legal**:
- Consumibles (monedas, vidas, tokens): ¿cuándo son considerados servicios y cuándo bienes digitales a efectos de IVA y derechos del consumidor?
- No consumibles (funcionalidades permanentes): derecho de desistimiento y garantías.
- Suscripciones: información obligatoria antes de la activación y proceso de gestión desde ajustes del dispositivo.

**Protección especial de menores**:
- Requisitos de verificación de edad para compras.
- Restricciones de compras integradas en aplicaciones dirigidas a menores (COPPA en EE.UU., RGPD para menores en Europa).
- Responsabilidad del desarrollador cuando menores realizan compras no autorizadas.

## Área 3 — IVA y fiscalidad digital

La fiscalidad de los servicios digitales es especialmente compleja por su carácter transfronterizo:
- Régimen OSS (One Stop Shop) de la UE para la declaración de IVA de servicios digitales vendidos a consumidores europeos.
- ¿Cuándo eres tú el responsable de recaudar el IVA y cuándo lo hace el Merchant of Record (Paddle, LemonSqueezy)?
- Tratamiento del IVA en suscripciones con período de prueba gratuito y en descuentos y cupones.
- Obligaciones de facturación: qué información debe contener una factura de servicio digital para ser legal en la UE.

## Área 4 — Protección de datos en la monetización

El RGPD tiene implicaciones directas en la monetización:
- ¿Qué base legal ampara el tratamiento de datos de pago? (ejecución de contrato)
- ¿Cuánto tiempo se pueden conservar los datos de pago y las facturas?
- Si usas datos de comportamiento del usuario para personalizar ofertas o pricing, ¿qué base legal aplica?
- Requisitos de la Directiva de Servicios de Pago (PSD2) para la autenticación reforzada en pagos online (SCA).

## Área 5 — Regulación de publicidad y modelos de ad-supported

Si el modelo de monetización incluye publicidad:
- Requisitos de la Ley de Servicios Digitales (DSA) para plataformas que sirven publicidad.
- Restricciones de publicidad comportamental y uso de cookies tras la Ley ePrivacy.
- Obligaciones específicas si hay publicidad dirigida a menores.

## Entregable

Genera una lista de verificación legal organizada por área que incluya: el requisito, la normativa aplicable, el riesgo si no se cumple (sanción económica, reclamaciones de consumidores, retirada de la tienda de apps) y la acción concreta recomendada para el cumplimiento.

Indícame el tipo de producto digital, las jurisdicciones donde operas o planeas operar y los modelos de monetización que usas o planeas usar para priorizar el análisis.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Auditoría legal de estrategias de monetización digital y cumplimiento regulatorio',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Maximización del LTV mediante estrategias de expansión y retención de cuenta',
                'description'       => 'Diseña un sistema de gestión del ciclo de vida del cliente que maximice el Lifetime Value mediante la combinación óptima de retención, expansión y reducción del churn involuntario. Construye playbooks de renovación y expansión basados en datos de salud del cliente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un VP de Customer Success especializado en la maximización del Lifetime Value (LTV) de clientes en productos SaaS y plataformas digitales de suscripción. Tu misión es ayudarme a diseñar un sistema integral de gestión del ciclo de vida del cliente que maximice el LTV a través de retención y expansión.

## Por qué el LTV es la métrica más importante de tu negocio

En un negocio de suscripción, el LTV determina cuánto puedes gastar para adquirir un cliente (CAC) y seguir siendo rentable. Un negocio con LTV/CAC de 3:1 es saludable; uno por debajo de 1:1 pierde dinero en cada cliente que adquiere. Mejorar el LTV en un 20% tiene el mismo efecto en el negocio que reducir el CAC en un 20%, pero suele ser significativamente más barato de conseguir.

## Módulo 1 — Cálculo y análisis del LTV actual

Construye el análisis de LTV desde los datos actuales:

**Fórmula base**: LTV = ARPU (ingresos medios por usuario al mes) / Churn rate mensual.

**Segmentación del LTV**:
- ¿Varía significativamente el LTV por plan de precios, segmento de empresa, industria o canal de adquisición?
- ¿Qué segmento tiene el LTV más alto y qué características lo explican?
- ¿Existe una cohorte de clientes (por ejemplo, los que completan el onboarding en los primeros 14 días o los que usan más de tres funcionalidades clave en el primer mes) con LTV significativamente superior?

**Análisis de cohortes**:
- Construye la tabla de retención por cohorte mensual: ¿cuántos clientes de cada cohorte siguen activos a los 3, 6, 12 y 24 meses?
- ¿En qué mes se produce la mayor caída de retención? Ese es el punto crítico a intervenir.
- ¿Cómo ha evolucionado la retención de las cohortes recientes vs. las antiguas? ¿Está mejorando o empeorando?

## Módulo 2 — Palancas de mejora del LTV

Identifica las tres palancas principales para aumentar el LTV:

**Palanca 1 — Reducción del churn**:
- **Churn voluntario**: el cliente decide cancelar. Intervenciones: mejorar el onboarding, aumentar el engagement, identificar clientes en riesgo antes de la cancelación.
- **Churn involuntario o pasivo**: el cliente no cancela activamente pero deja de pagar (tarjeta caducada, fondos insuficientes). Intervenciones: sistema de dunning, actualización proactiva de método de pago, pausa de suscripción como alternativa a la cancelación.
- ¿Cuánto churn es voluntario vs. involuntario en tu base de clientes? Cada tipo requiere intervenciones diferentes.

**Palanca 2 — Expansión del ARR**:
- Upgrades a planes superiores: ¿qué porcentaje de clientes sube de plan en los primeros 12 meses?
- Expansión por asientos adicionales: crecimiento del equipo del cliente dentro del mismo plan.
- Upsell de add-ons y módulos complementarios.
- Cross-sell de otros productos de la empresa.

**Palanca 3 — Aumento del ARPU**:
- Incrementos de precio anuales con estrategia de comunicación y grandfathering.
- Migración de clientes de planes legacy a planes nuevos con mejor pricing.
- Eliminación de descuentos excesivos en renovaciones.

## Módulo 3 — Sistema de salud del cliente y detección de riesgo

Diseña el customer health score para identificar proactivamente el riesgo de churn:

**Dimensiones del health score**:
- Engagement con el producto: frecuencia de uso, profundidad de uso (funcionalidades activadas), usuarios activos vs. licencias contratadas.
- Engagement con el equipo de CS: ¿cuándo fue el último contacto? ¿Ha habido tickets de soporte sin resolver?
- Señales de negocio: el cliente ha reducido su equipo, ha pasado por una adquisición, ha mencionado problemas de presupuesto.
- Señales de satisfacción: NPS, CSAT en el último punto de contacto, participación en eventos de comunidad.

**Umbrales de alerta y protocolos de intervención**:
- ¿Qué score desencadena una llamada de check-in del CSM?
- ¿Qué score desencadena una escalada al manager de CS o al equipo de retención?
- ¿Qué oferta o intervención se hace a cada segmento de riesgo?

## Módulo 4 — Playbook de renovación

El momento de la renovación es el más crítico del ciclo de vida del cliente:
- **Timing**: ¿cuándo iniciar la conversación de renovación? (90 días antes para enterprise, 60 días para mid-market, 30 días para SMB).
- **Conversación de valor**: cómo documentar y presentar el ROI obtenido durante el período para justificar la renovación.
- **Estrategia de expansión en la renovación**: ¿cuándo proponer el upgrade? ¿Antes, durante o después de asegurar la renovación base?
- **Gestión de descuentos**: ¿cuándo son aceptables y cómo evitar crear un precedente que el cliente espere en cada renovación?
- **Protocolo de salvamento**: ¿qué hacer cuando el cliente quiere cancelar en el momento de la renovación?

## Módulo 5 — Métricas de LTV y dashboard de seguimiento

Define el dashboard de métricas para monitorizar el LTV:
- MRR por segmento y su evolución mensual.
- NRR (Net Revenue Retention) por cohorte y segmento.
- Churn rate mensual (logo churn y revenue churn).
- Expansión MRR: ingresos generados por upgrades y add-ons en el período.
- LTV promedio por segmento y evolución trimestral.
- Distribución de clientes por health score (verde, amarillo, rojo).

Indícame el tipo de producto SaaS, el segmento de cliente principal y las métricas de LTV y churn actuales para personalizar los playbooks y las intervenciones.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Sistema de gestión del ciclo de vida del cliente para maximizar LTV y NRR',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Creación y monetización de productos digitales como freelance: de la idea al primer ingreso',
                'description'       => 'Diseña tu primer producto digital como freelance: identifica una oportunidad de mercado en tu área de expertise, elige el formato óptimo, valida la demanda antes de crear y lanza con una estrategia de pricing y distribución que genere ingresos recurrentes o pasivos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un mentor de negocio especializado en ayudar a freelances y profesionales independientes a crear y monetizar productos digitales. Tu misión es guiarme paso a paso desde la identificación de la oportunidad hasta el lanzamiento y la generación de los primeros ingresos con un producto digital propio.

## Por qué los freelances deben crear productos digitales

El modelo de negocio del freelance tradicional es fundamentalmente limitado: cobras por tiempo y ese tiempo es finito. Un producto digital rompe esa limitación porque puede venderse mientras duermes, a múltiples compradores simultáneamente y sin que el coste marginal de cada venta adicional sea tu tiempo. El primer producto digital no reemplaza los servicios de consultoría; los complementa y amplifica la autoridad que ya tienes, lo que a su vez te permite subir tus tarifas de servicio.

## Fase 1 — Identificación de la oportunidad de producto

El mejor producto digital para un freelance parte de su expertise existente:

**Excavación del conocimiento**:
- ¿Qué preguntas te hacen los clientes repetidamente que tú puedes responder en minutos pero que a ellos les tomaría horas resolver?
- ¿Qué proceso o metodología has desarrollado que produce resultados consistentes y que podría sistematizarse?
- ¿Qué errores cometes (o ves cometer a otros) en tu sector que podrías ayudar a evitar?
- ¿Qué herramienta, plantilla o recurso creas para tus propios proyectos que otros profesionales también necesitarían?

**Validación del mercado antes de crear nada**:
- Busca este tema en Google: ¿hay blogs, vídeos, cursos? La presencia de competencia valida la demanda; su ausencia puede indicar que no hay mercado.
- ¿Existe una comunidad (subreddit, grupo de LinkedIn, Discord, foro) donde personas con este problema se reúnan y hablen de él?
- ¿Cuántas personas buscan este tema mensualmente? (Google Keyword Planner, Ahrefs, Ubersuggest)
- ¿Alguien ya vende algo similar? ¿A qué precio? ¿Con qué valoraciones? Las reseñas negativas de productos existentes son una mina de ideas para mejorarlos.

## Fase 2 — Elección del formato del producto digital

Elige el formato que maximiza el valor percibido con el mínimo tiempo de creación:

**Plantillas y recursos descargables** (tiempo de creación: horas a días):
- Hojas de cálculo, plantillas de Notion, Figma, PowerPoint, Google Docs.
- Ideales cuando el valor está en la estructura y la organización, no en el contenido narrativo.
- Precio típico: entre 15 y 97 euros por unidad.

**Guías, ebooks y manuales** (tiempo de creación: días a semanas):
- Documentos PDF o sitios web con contenido exhaustivo sobre un tema específico.
- Funcionan bien cuando el comprador necesita el conocimiento completo y estructurado.
- Precio típico: entre 27 y 97 euros.

**Cursos y programas de formación** (tiempo de creación: semanas a meses):
- Vídeos, módulos interactivos, ejercicios y comunidad.
- Mayor precio y mayor tiempo de creación. Ideal cuando el comprador necesita transformación, no solo información.
- Precio típico: entre 97 y 2.000 euros según el nivel de transformación y soporte.

**Membresías y comunidades de suscripción** (tiempo de creación: continuo):
- Acceso recurrente a contenido actualizado, comunidad de pares y acceso al creador.
- Genera ingresos recurrentes predecibles. Requiere compromiso de creación continua.
- Precio típico: entre 20 y 150 euros al mes.

**Software o herramientas** (tiempo de creación: meses):
- La opción de mayor escalabilidad pero también de mayor inversión inicial.
- Solo si tienes habilidades técnicas o acceso a un socio técnico.

## Fase 3 — Validación antes de crear

Nunca inviertas semanas creando algo que nadie compra:
- **Lista de espera**: anuncia el producto que vas a crear antes de crearlo. ¿Cuántas personas se apuntan?
- **Preventa**: vende el producto antes de que exista con un precio fundador. Si consigues diez compradores, tienes validación suficiente para crear.
- **Encuesta de disposición a pagar**: pregunta directamente a tu audiencia. No "¿comprarías esto?" (responden siempre que sí) sino "¿a qué precio comprarías esto?".
- **Entrevistas de descubrimiento**: cinco conversaciones de 30 minutos con personas del público objetivo valen más que cien respuestas de encuesta.

## Fase 4 — Pricing y posicionamiento

Elige el precio basándote en valor, no en coste de creación:
- ¿Cuánto tiempo o dinero le ahorras al comprador si aplica lo que aprende?
- ¿Qué alternativas existen y a qué precio? Posiciónate un 20-30% por encima si tu calidad lo justifica.
- El precio de lanzamiento debe ser inferior al precio final para crear urgencia y recompensar a los primeros compradores.
- Estrategia de precios escalonados: versión básica (plantilla o guía corta), versión completa (curso), versión premium con soporte directo.

## Fase 5 — Lanzamiento y distribución

Dónde vender tu producto:
- **Tu propia plataforma**: Gumroad, Lemon Squeezy, Payhip (mínima fricción para empezar, comisiones bajas).
- **Marketplaces de formación**: Udemy (enorme audiencia pero menor control de precio y marca), Teachable, Podia (más control, menos audiencia orgánica).
- **Tu lista de email**: si ya tienes suscriptores, el lanzamiento interno es la vía más directa y rentable.
- **Comunidades**: lanzamiento en foros, grupos de LinkedIn o Slack del sector donde ya tienes presencia y credibilidad.

**Plan de lanzamiento de 30 días**:
- Semanas 1-2: construcción de audiencia y calentamiento (contenido de valor relacionado con el tema del producto).
- Semana 3: apertura de la lista de espera con contenido exclusivo para los inscritos.
- Semana 4: lanzamiento con precio fundador por tiempo limitado (72-96 horas).

Indícame tu área de expertise, el tipo de clientes a los que sirves y si ya tienes una audiencia (newsletter, redes sociales, seguidores) para personalizar la estrategia de producto y lanzamiento.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Guía completa para que un freelance cree y lance su primer producto digital rentable',
                'vote_score'        => 48,
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
