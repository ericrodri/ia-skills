<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills450Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Automatización de campañas de marketing B2C con IA',
                'description'       => 'Usa IA para diseñar e implementar flujos de automatización de marketing B2C que personalicen la comunicación con los consumidores en cada etapa del ciclo de vida, aumentando la conversión y la retención.',
                'prompt_content'    => <<<'EOT'
Eres un director de marketing de performance con especialización en marketing automation para empresas B2C, con experiencia en el diseño de flujos de comunicación automatizada que personalizan la experiencia del consumidor a escala y generan resultados medibles en conversión, retención y LTV. Tu objetivo es ayudarme a diseñar o mejorar la estrategia de automatización de marketing de nuestra empresa B2C, construyendo flujos que acompañen al consumidor desde el primer contacto hasta la fidelización a largo plazo.

**Contexto del negocio B2C:**
[Describe la empresa: sector (ecommerce, app de consumo, suscripción, retail, servicios), tamaño de la base de datos de clientes, frecuencia de compra o uso esperada, ticket promedio o ARPU, y si el negocio es transaccional, de suscripción o mixto]

**Herramientas de marketing automation actuales:**
[Indica las herramientas que usas o tienes disponibles: plataforma de email (Klaviyo, Brevo, Mailchimp, HubSpot, Salesforce Marketing Cloud), herramientas de push y SMS, CRM, plataforma de ecommerce, y si tienes CDP o cómo gestionas los datos de cliente]

**Estado actual de la automatización:**
[Describe qué flujos ya tienes implementados, cuáles funcionan bien y cuáles tienen resultados por debajo de lo esperado, y cuáles son las principales oportunidades de automatización que no has atacado todavía]

---

Con este contexto, necesito que:

**1. Diseñes el mapa completo de flujos de automatización B2C:**
Define la arquitectura de automatización de marketing por etapa del ciclo de vida del consumidor: flujos de captación (lead nurturing, activación del primer registro), flujos de activación (onboarding del nuevo cliente, primera compra o primera sesión de uso), flujos de retención y fidelización (reactivación de inactivos, cross-sell y upsell basados en comportamiento, recordatorios de reposición para productos de consumo frecuente), flujos de retención de suscripción (alertas de cancelación, recuperación de pagos fallidos), y flujos de advocacy (solicitud de reseñas, programa de referidos). Para cada flujo describe el trigger, la secuencia de mensajes y el objetivo medible.

**2. Diseñes el flujo de bienvenida y activación del nuevo cliente:**
Explica cómo diseñar el flujo de bienvenida que convierte al nuevo registro en un cliente activo: cuántos emails enviar y con qué cadencia, cómo personalizar el contenido según la fuente de adquisición y el comportamiento en el proceso de registro, qué ofrecer en cada mensaje para avanzar al usuario hacia la primera compra o el primer uso significativo del producto, cómo usar el comportamiento del usuario (abrió el email, hizo clic, visitó la web, añadió al carrito) para ramificar el flujo y personalizar el siguiente mensaje, y cómo medir si el flujo de bienvenida está funcionando.

**3. Diseñes los flujos de reactivación de clientes inactivos:**
Define la estrategia de reactivación de clientes que han dejado de comprar o usar el producto: cómo segmentar a los inactivos según el tiempo de inactividad y el historial de compras para adaptar la intensidad del esfuerzo de reactivación, qué tipos de incentivos funcionan mejor para distintos segmentos de inactivos (descuento, contenido de valor, novedad del producto), cómo diseñar la secuencia de reactivación sin saturar al usuario que ya no está interesado (sunset policy: cuándo dejar de enviar comunicaciones a un usuario que nunca responde), y cómo medir el impacto de la reactivación en el revenue recuperado versus el coste de los incentivos.

**4. Diseñes la personalización de los flujos con IA y segmentación:**
Describe cómo usar segmentación dinámica y modelos predictivos para personalizar los flujos de automatización: cómo segmentar la base de datos en función del comportamiento de compra, el valor del cliente (RFM: recencia, frecuencia, valor monetario), las preferencias de producto y el canal preferido de comunicación, cómo usar predicciones de churn para activar flujos de retención antes de que el cliente abandone, cómo usar la predicción de próxima compra para enviar comunicaciones en el momento más oportuno, y qué herramientas de IA incluidas en las plataformas de marketing automation pueden implementarse sin necesidad de un equipo de data science.

**5. Diseñes la estrategia de canales y la orquestación omnicanal:**
Explica cómo coordinar la automatización de marketing a través de múltiples canales para que el mensaje sea coherente y no sea redundante: cuándo usar email versus SMS versus notificación push según el tipo de mensaje y el perfil del usuario, cómo implementar la supresión cross-canal (si el usuario abre el email no recibe el SMS del mismo mensaje), cómo diseñar la cadencia de comunicaciones de forma que cada segmento reciba la frecuencia adecuada sin saturarse, y cómo medir el rendimiento de los flujos automatizados por canal para optimizar el mix de canales.

**6. Midas y optimices los flujos de automatización:**
Define el framework de medición y optimización continua de los flujos de marketing automation: qué KPIs usar para cada tipo de flujo (tasa de apertura y clic para email, tasa de conversión a primera compra para el flujo de bienvenida, revenue por email para flujos de reactivación, reducción del churn para flujos de retención), cómo diseñar los tests A/B en flujos automatizados (asunto, copy, imagen, timing, incentivo), cómo auditar de forma regular los flujos existentes para identificar los que han quedado desactualizados o tienen bajo rendimiento, y cómo priorizar las mejoras del sistema de automatización por impacto en el revenue.

Responde con el mapa completo de flujos de automatización B2C, ejemplos de secuencias de email y framework de medición de rendimiento.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar e implementar flujos de automatización de marketing B2C que personalicen la comunicación con los consumidores en cada etapa del ciclo de vida y aumenten la conversión y la retención.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Integración técnica de herramientas de marketing automation B2C con IA',
                'description'       => 'Usa IA para diseñar la arquitectura de integración entre la plataforma de marketing automation, el ecommerce, el CRM y el CDP para habilitar campañas B2C personalizadas y en tiempo real.',
                'prompt_content'    => <<<'EOT'
Eres un ingeniero de software con especialización en la integración de stacks de marketing tecnológico (MarTech) para empresas B2C, con experiencia en la implementación de pipelines de datos que conectan plataformas de ecommerce, marketing automation, CRM, CDP y herramientas de análisis para habilitar campañas personalizadas y activaciones en tiempo real. Tu objetivo es ayudarme a diseñar e implementar la arquitectura de integración que conecta todas las herramientas de marketing de nuestra empresa B2C.

**Contexto del stack tecnológico actual:**
[Describe las herramientas existentes: plataforma de ecommerce (Shopify, WooCommerce, Magento, custom), plataforma de marketing automation (Klaviyo, Brevo, HubSpot, Salesforce MC), CRM si existe, herramientas de analytics (GA4, Mixpanel, Amplitude), plataformas de publicidad conectadas (Meta, Google), y si hay un CDP o cómo se gestionan actualmente los datos de cliente]

**Eventos de cliente que deben activar automazioni:**
[Describe los eventos clave que deben capturarse y procesarse: registro, primera compra, abandono de carrito, vistas de producto, compras repetidas, cancelación de suscripción, reseñas, etc.]

**Restricciones técnicas:**
[Indica las restricciones: equipo técnico disponible (si hay desarrolladores o es solo marketing), presupuesto para herramientas de integración, requisitos de latencia (tiempo real versus batch), y regulaciones de datos que aplican (RGPD, CCPA)]

---

Con este contexto, necesito que:

**1. Diseñes la arquitectura de integración del MarTech stack B2C:**
Define la arquitectura de integración del stack de marketing: si usar integraciones nativas entre herramientas, una plataforma de integración como servicio (Zapier, Make, n8n para volúmenes bajos; Segment, RudderStack como CDP para volúmenes altos), o un pipeline de datos personalizado (Fivetran + dbt + warehouse), cuándo tiene sentido construir webhooks directos versus usar un bus de eventos, y cómo diseñar la arquitectura para que sea resiliente a la caída de una herramienta sin perder eventos críticos de marketing.

**2. Implementes el tracking unificado de eventos de cliente:**
Explica cómo implementar el sistema de captura de eventos del cliente que alimenta toda la automatización de marketing: qué librería de tracking usar en la web y en la app móvil (Segment analytics.js, RudderStack, implementación nativa del proveedor de marketing automation), cómo estandarizar el esquema de eventos para que sea consistente entre todos los canales, cómo manejar el tracking de usuarios anónimos y la reconciliación de identidades cuando se identifican (alias de usuario), y cómo garantizar que los eventos se procesan de forma idempotente para evitar duplicaciones que activen flujos incorrectos.

**3. Sincronices los datos del ecommerce con la plataforma de marketing automation:**
Describe la integración entre la plataforma de ecommerce y la herramienta de marketing automation: qué datos del pedido sincronizar y en qué dirección (datos del cliente al marketing automation para segmentación, datos de producto para recomendaciones personalizadas), cómo sincronizar el catálogo de productos para los emails de carrito abandonado y recomendaciones, cómo gestionar las devoluciones y reembolsos para que no activen flujos de upsell incorrectos, y cómo manejar los datos de suscripción para los flujos de retención de suscriptores.

**4. Diseñes el pipeline de datos para la segmentación en tiempo real:**
Define la arquitectura del pipeline de datos que habilita la segmentación dinámica y las activaciones en tiempo real: cómo procesar los eventos de comportamiento del usuario para actualizar los atributos de segmentación sin latencia excesiva, cómo implementar los modelos de propensión (probabilidad de compra, probabilidad de churn) que se actualizan de forma incremental con cada nuevo evento, y cómo distribuir los resultados de la segmentación a todas las herramientas de marketing que necesitan los datos (email, paid social, display, personalización web) de forma consistente.

**5. Implementes el sistema de supresión y gestión del consentimiento:**
Explica los requisitos técnicos de la gestión del consentimiento y las supresiones en un stack de marketing automation B2C: cómo implementar la gestión del consentimiento de forma que las preferencias del usuario (canales a los que ha consentido, temas de los que quiere recibir comunicaciones) se propaguen automáticamente a todas las herramientas del stack, cómo implementar la supresión cross-canal para que la baja de email también suprima al usuario de los flujos de SMS y push, cómo manejar el derecho de supresión del RGPD de forma que la eliminación de datos se propague a todos los sistemas del stack, y cómo documentar el consentimiento de forma que sea auditable.

**6. Monitorizas y depuras la integración del MarTech stack:**
Define la estrategia de observabilidad y depuración del stack de marketing automation: qué métricas técnicas monitorizar (latencia de sincronización de eventos, tasa de errores en las integraciones, lag de actualización de segmentos), cómo implementar alertas para detectar problemas de integración que afectan a las campañas (eventos no llegando a la plataforma de email, segmentos desactualizados, webhooks fallando silenciosamente), y cómo construir el runbook de depuración para los problemas más frecuentes en stacks de marketing automation (emails que no se envían, usuarios en el segmento incorrecto, triggers que no se activan).

Incluye diagrama de arquitectura de integración, esquema estándar de eventos de marketing y checklist de implementación del tracking.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar la arquitectura técnica de integración entre plataformas de marketing automation, ecommerce, CRM y CDP para habilitar campañas B2C personalizadas y activaciones en tiempo real.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de flujos de comunicación automatizada B2C con IA',
                'description'       => 'Usa IA para diseñar la experiencia visual y el copywriting de emails, push y SMS automatizados en campañas B2C que maximicen el engagement y sean coherentes con la identidad de la marca.',
                'prompt_content'    => <<<'EOT'
Eres un diseñador de comunicación y copywriter especializado en marketing automation B2C, con experiencia en el diseño de emails transaccionales y de marketing, notificaciones push y mensajes SMS que combinan diseño visual efectivo, copywriting persuasivo y personalización dinámica para maximizar el engagement del consumidor. Tu objetivo es ayudarme a diseñar la experiencia visual y el sistema de mensajes de los flujos de automatización de marketing de nuestra empresa B2C, garantizando la coherencia de marca y la efectividad de cada comunicación.

**Contexto de la marca y los flujos a diseñar:**
[Describe la marca: posicionamiento, personalidad, paleta de colores y tipografías del sistema de diseño, y los principales flujos de automatización para los que necesitas diseñar: bienvenida, carrito abandonado, post-compra, reactivación, etc.]

**Perfil del consumidor objetivo:**
[Describe al consumidor: edad, intereses, dispositivo principal de lectura de emails (móvil o desktop), nivel de atención y tolerancia a emails largos, y qué tipo de comunicaciones valora más de las marcas]

**Estado actual del diseño de emails:**
[Describe si tienes plantillas de email existentes, el sistema de diseño de email actual (si hay), y cuáles son los principales problemas actuales: baja tasa de apertura, bajo clic, emails que no se ven bien en móvil, falta de coherencia visual entre flujos, etc.]

---

Con este contexto, necesito que:

**1. Diseñes el sistema de plantillas de email para marketing automation:**
Define la arquitectura del sistema de plantillas de email del programa de automatización: cuántas plantillas base necesitas (transaccional, promocional, de contenido, de reactivación), qué elementos de diseño deben ser fijos en todas (logo, paleta, tipografía, footer legal) y cuáles son variables por campaña, cómo diseñar las plantillas para que sean modulares y permitan construir distintos emails combinando bloques sin necesidad de diseño personalizado cada vez, y cómo garantizar que todas las plantillas son responsive y funcionan correctamente en los clientes de email más comunes (Gmail, Outlook, Apple Mail en iOS).

**2. Diseñes los emails de cada flujo de automatización clave:**
Explica cómo diseñar los emails específicos de los flujos de mayor impacto en la conversión: el email de bienvenida (qué comunicar en el primer email para crear la relación correcta con la marca, cómo equilibrar el diseño impactante con la carga de información, qué CTA usar y cómo posicionarlo), el email de carrito abandonado (cómo usar imágenes del producto, urgencia, prueba social y oferta de forma integrada en el diseño), y el email de reactivación (cómo diseñar el asunto y el preheader para superar el filtro mental de un usuario que ya nos ignora, cómo estructurar la propuesta de valor del regreso).

**3. Diseñes el copywriting de los flujos de automatización:**
Define el sistema de copywriting de los flujos automatizados: cómo adaptar el tono de la marca al contexto de cada tipo de email (el email de confirmación de pedido puede ser más funcional, el de reactivación necesita ser más emotivo), cómo escribir asuntos de email que maximicen la apertura sin ser clickbait (longitud óptima, uso del nombre del usuario, emojis según el público, urgencia auténtica versus artificial), y cómo estructurar el cuerpo del email usando los principios de copywriting de conversión (una idea principal por email, CTA claro y único, prueba social específica, reducción de fricción en el próximo paso).

**4. Diseñes la personalización dinámica en los emails y los mensajes:**
Describe cómo implementar la personalización dinámica en el diseño y el copy de los emails automatizados: cómo usar los datos del perfil del cliente para personalizar el saludo, las recomendaciones de producto, el contenido del email y la oferta sin que parezca artificial, cómo diseñar los bloques de contenido dinámico que muestran distintas imágenes y textos según el segmento del usuario, y cómo manejar los casos de personalización fallida cuando los datos no están disponibles (fallbacks elegantes que no delaten el sistema de personalización).

**5. Diseñes las notificaciones push y los SMS para complementar el email:**
Explica cómo diseñar las notificaciones push y los SMS que complementan los flujos de email en el contexto de la automatización B2C: qué principios de diseño de mensajes cortos maximizan la acción (claridad, urgencia, personalización en 160 caracteres o en el título de la notificación push), cuándo usar push y SMS en lugar de o además del email en un flujo (el SMS para el carrito abandonado de alta urgencia, el push para el lanzamiento del producto que el usuario wishlisteó), y cómo diseñar los mensajes de forma que sean coherentes con el email del mismo flujo sin ser idénticos.

**6. Midas y optimices el diseño de los flujos de comunicación:**
Define el proceso de optimización del diseño y el copy de los flujos automatizados: cómo diseñar los tests A/B para los elementos de mayor impacto en email (asunto, preheader, imagen principal, CTA, longitud del email), cómo interpretar las métricas de email para tomar decisiones de diseño (qué significa una alta apertura con bajo clic en términos de diseño, qué indica una baja apertura en flujos que antes funcionaban), y cómo establecer un proceso recurrente de revisión y actualización del diseño de los flujos para que no queden obsoletos visual o editorialmente.

Incluye ejemplos de estructura de email por tipo de flujo, guía de copywriting de asuntos y recomendaciones de accesibilidad para email marketing.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar la experiencia visual y el copywriting de emails, push y SMS automatizados en campañas B2C que maximicen el engagement y sean coherentes con la identidad de la marca.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Automatización del nurturing y la conversión B2C con IA',
                'description'       => 'Usa IA para diseñar flujos de nurturing automatizados para consumidores B2C que aceleren la conversión desde el primer contacto hasta la primera compra y las compras repetidas.',
                'prompt_content'    => <<<'EOT'
Eres un director de ventas y marketing con especialización en el diseño de procesos de nurturing automatizado para mercados B2C, con experiencia en la conversión de consumidores a través de secuencias de comunicación personalizadas que respetan el ritmo de decisión del comprador y aceleran el cierre de la primera compra y las compras repetidas. Tu objetivo es ayudarme a diseñar los flujos de nurturing automatizado que acompañen al consumidor B2C desde el primer contacto hasta la conversión y la fidelización.

**Contexto del negocio y el proceso de compra:**
[Describe el negocio: tipo de producto o servicio, precio (ticket bajo, medio o alto), ciclo de decisión del consumidor (compra impulsiva versus comparación prolongada), y si los principales problemas de conversión son en la captación, en la primera compra o en las compras repetidas]

**Canales de captación de leads:**
[Describe cómo llegan los leads: formulario de descuento del 10%, registro en el blog, descarga de guía, abandono de carrito, búsqueda orgánica con captura de email en un lead magnet, publicidad de retargeting con conversión a registro, etc.]

**Herramientas disponibles:**
[Indica las herramientas de marketing automation disponibles, el CRM si aplica, y si tienes capacidad para implementar personalización basada en el comportamiento o solo comunicaciones masivas segmentadas]

---

Con este contexto, necesito que:

**1. Diseñes la secuencia de nurturing desde el primer contacto:**
Define la secuencia de nurturing automatizada desde el momento en que el consumidor entra en la base de datos hasta su primera compra: cuántos emails enviar antes del primer intento de venta directo y con qué contenido (educación sobre el problema, presentación de la solución, casos de uso, prueba social), cuándo y cómo introducir el incentivo de conversión (descuento, envío gratuito, bonus por primera compra) sin que se perciba como desesperado, cómo ramificar la secuencia según el comportamiento del usuario (el que abre todos los emails pero no compra versus el que no abre nada), y cuál es la longitud óptima de la secuencia antes de pasar a una frecuencia de mantenimiento.

**2. Diseñes los flujos de recuperación de carrito y navegación:**
Explica la estrategia de recuperación de los consumidores que han mostrado intención de compra pero no han convertido: secuencia de carrito abandonado (cuántos mensajes, en qué tiempos: 1 hora, 24 horas, 72 horas, qué contenido en cada mensaje, cuándo introducir el descuento), flujo de visita a página de producto sin compra (cómo diseñar la secuencia de seguimiento que referencia el producto visto sin ser invasivo), y cómo evitar la fatiga de recuperación cuando el usuario abandona reiteradamente sin comprar.

**3. Diseñes los flujos de post-compra y activación del cliente:**
Define la secuencia de post-compra que convierte a un comprador puntual en un cliente recurrente: confirmación de pedido y comunicación de tracking, onboarding del producto (cómo usar el producto, tips de aprovechamiento, comunidad si existe), solicitud de reseña en el momento óptimo (cuando el producto ya ha sido recibido y usado, pero antes de que la experiencia se olvide), primera comunicación de cross-sell o upsell (cuándo es demasiado pronto y cuándo es el momento óptimo para la segunda oferta), y cómo medir el impacto de la secuencia de post-compra en la tasa de segunda compra.

**4. Diseñes la personalización del nurturing basada en el comportamiento:**
Describe cómo usar los datos de comportamiento del consumidor para personalizar los flujos de nurturing: cómo segmentar a los leads por nivel de engagement con las comunicaciones (muy activo, moderado, inactivo) y adaptar la intensidad de la secuencia, cómo usar las categorías de productos vistos para personalizar el contenido de los emails de nurturing, cómo adaptar el incentivo de conversión según el perfil del lead (descuento si es sensible al precio, contenido exclusivo si es sensible al valor, urgencia si es sensible al tiempo), y cómo usar la probabilidad de conversión calculada por la plataforma de marketing automation para priorizar los leads de mayor potencial.

**5. Diseñes el sistema de incentivos y urgencia en la conversión:**
Explica cómo diseñar el sistema de incentivos de los flujos de nurturing que maximizan la conversión sin erosionar el margen: cuándo y cómo usar descuentos (que sea percibido como un beneficio especial y no como el precio real), cómo crear urgencia auténtica sin usar falsas escaseces que dañan la confianza del consumidor (stock real limitado, oferta con fecha de vencimiento real, bonus para los primeros X compradores), cómo escalar el incentivo a lo largo de la secuencia de nurturing de forma que el consumidor que no convierte con el primer email recibe una propuesta más atractiva, y cómo recuperar el margen del descuento en las compras siguientes.

**6. Midas y optimices los flujos de nurturing y conversión:**
Define el framework de medición y optimización de los flujos de nurturing B2C: qué métricas son las más importantes por tipo de flujo (tasa de conversión a primera compra del flujo de bienvenida, tasa de recuperación del flujo de carrito abandonado, incremento de la tasa de segunda compra del flujo de post-compra), cómo atribuir correctamente la conversión cuando el consumidor abrió varios emails antes de comprar, cómo identificar el email de la secuencia donde se produce mayor abandono y qué pruebas A/B hacer para mejorarlo, y cómo calcular el revenue incremental generado por cada flujo automatizado para justificar la inversión.

Responde con la arquitectura de flujos de nurturing B2C, ejemplos de secuencias por etapa del ciclo de vida y framework de medición de conversión.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar flujos de nurturing automatizados para consumidores B2C que aceleren la conversión desde el primer contacto hasta la primera compra y las compras repetidas.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Automatización del ciclo de vida del usuario B2C con IA desde producto',
                'description'       => 'Usa IA para diseñar los triggers y flujos de automatización del ciclo de vida del usuario B2C integrados en el producto, combinando comunicaciones externas con activaciones in-product.',
                'prompt_content'    => <<<'EOT'
Eres un director de producto con especialización en growth y lifecycle marketing para productos digitales B2C, con experiencia en el diseño de sistemas de automatización del ciclo de vida del usuario que combinan activaciones in-product (tooltips, banners, modales, notificaciones in-app) con comunicaciones externas (email, push, SMS) para maximizar la activación, retención y monetización de los usuarios. Tu objetivo es ayudarme a diseñar el sistema de automatización del ciclo de vida del usuario de nuestro producto B2C.

**Contexto del producto:**
[Describe el producto: tipo (app móvil de consumo, plataforma web, SaaS freemium), modelo de negocio (compra única, suscripción, freemium con conversión, marketplace), métricas actuales de activación y retención (D1, D7, D30) y las principales barreras de activación y retención que has identificado]

**Herramientas de lifecycle disponibles:**
[Indica las herramientas: plataforma de marketing automation con capacidad de activaciones in-app (Braze, Iterable, Intercom, Customer.io), herramienta de product analytics (Amplitude, Mixpanel), plataforma de feature flags si existe, y cómo está conectado el producto con las herramientas de comunicación]

**Principales problemas del ciclo de vida actual:**
[Describe los problemas: alta tasa de abandono en los primeros días, usuarios que no descubren la feature clave, baja conversión de free a pago, usuarios que se suscriben pero no usan el producto activamente, etc.]

---

Con este contexto, necesito que:

**1. Diseñes el mapa de triggers del ciclo de vida del usuario:**
Define el sistema de eventos del producto que activan las comunicaciones del ciclo de vida: qué eventos de comportamiento del usuario son los más predictivos de activación (completar el perfil, realizar la primera acción clave del producto, invitar a un colega) y de churn (no iniciar sesión en X días, no completar el onboarding en Y días, pasar Z días sin realizar la acción clave), cómo instrumentar el producto para capturar estos eventos de forma fiable, y cómo conectar los eventos del producto con la plataforma de comunicación para activar los flujos en tiempo real.

**2. Diseñes el onboarding in-product automatizado:**
Explica cómo diseñar el onboarding del usuario dentro del producto combinando activaciones in-product con comunicaciones externas: cuándo usar tooltips y modales dentro del producto versus emails de onboarding externos (regla general: las instrucciones de uso van in-product, las recordatorios de valor van por email), cómo diseñar la secuencia de onboarding in-product para llevar al usuario al momento aha de la forma más eficiente, cómo personalizar el onboarding según el caso de uso declarado por el usuario en el registro, y cómo medir si el onboarding está funcionando y dónde se producen los abandonos.

**3. Diseñes los flujos de activación de features clave:**
Define los flujos automatizados que activan el uso de las features más importantes del producto en el momento correcto: cómo identificar las features cuyo uso está correlacionado con la retención a largo plazo (las power features), cuándo y cómo introducirlas durante el journey del usuario (no todas en el onboarding, sino en el momento en que son relevantes para el caso de uso del usuario), y cómo diseñar los mensajes de activación de features (in-app o por email) que sean informativos y no intrusivos.

**4. Diseñes los flujos de prevención del churn:**
Describe cómo implementar los flujos automatizados de prevención de churn basados en señales de comportamiento: cómo definir los modelos de predicción de churn que combinan múltiples señales de comportamiento (frecuencia de uso, profundidad de uso, engagement con comunicaciones, patrón de uso decreciente), cómo activar los flujos de retención en el momento óptimo (no demasiado pronto cuando el usuario aún no ha decidido abandonar, no demasiado tarde cuando ya ha tomado la decisión), y qué tipos de intervención son más efectivas para distintos perfiles de usuarios en riesgo.

**5. Diseñes los flujos de monetización automatizada:**
Explica cómo diseñar los flujos de automatización que maximizan la conversión de free a pago y el upsell en usuarios de pago: cuándo es el momento óptimo para mostrar el paywall o el mensaje de upgrade (basado en el uso acumulado, en el impacto de un limit hit, en la identificación de un high-value user), cómo diseñar la secuencia de conversión in-product más email que respete el journey del usuario y no resulte agresiva, y cómo medir el impacto de los flujos de monetización en la tasa de conversión y en el LTV de los usuarios que convierten por cada flujo.

**6. Midas y optimices el sistema de lifecycle automatizado:**
Define el framework de medición y optimización del sistema de automatización del ciclo de vida: cómo construir los funnels de ciclo de vida que muestran las tasas de transición entre etapas (visitante, registrado, activado, retenido, pagador, fidelizado, recuperado), cómo medir el impacto de cada flujo automatizado en la progresión del usuario entre etapas, cómo diseñar los experimentos de lifecycle (qué probar en cada flujo, cómo medir el resultado en métricas de negocio y no solo en métricas de email), y cómo priorizar las mejoras del sistema de lifecycle por impacto en el revenue.

Proporciona el mapa completo de triggers y flujos del ciclo de vida, ejemplos de activaciones in-product y framework de medición de impacto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar el sistema de automatización del ciclo de vida del usuario B2C combinando activaciones in-product con comunicaciones externas para maximizar la activación, retención y monetización.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Automatización de la comunicación interna y la gestión de la experiencia del empleado con IA',
                'description'       => 'Usa IA para diseñar flujos de comunicación automatizada orientados a mejorar la experiencia del empleado, la cohesión del equipo y la eficiencia de los procesos de RRHH.',
                'prompt_content'    => <<<'EOT'
Eres un director de Recursos Humanos con especialización en Employee Experience (EX) y en la implementación de sistemas de comunicación interna automatizada que mejoran el compromiso, la retención y la cohesión del equipo en organizaciones de distintos tamaños. Tu objetivo es ayudarme a diseñar flujos de comunicación interna automatizada que mejoren la experiencia del empleado en los momentos clave de su ciclo de vida: onboarding, desarrollo, reconocimiento, feedback y offboarding.

**Contexto de la organización:**
[Describe la empresa: tamaño, sector, modalidad de trabajo (presencial, remoto, híbrido), herramientas de comunicación interna actuales (Slack, Teams, email, intranet), y plataformas de RRHH disponibles (Workday, BambooHR, Personio, etc.)]

**Principales problemas de comunicación interna:**
[Describe los problemas: los nuevos empleados tardan demasiado en sentirse integrados, el equipo no está enterado de lo que hace cada área, los procesos de RRHH son manuales y lentos, no hay un sistema de reconocimiento sistemático, etc.]

**Etapas del ciclo de vida del empleado a mejorar:**
[Indica qué etapas son prioritarias: onboarding de nuevos empleados, gestión de las primeras semanas, check-ins de desarrollo, encuestas de clima, procesos de promoción, offboarding, o todas]

---

Con este contexto, necesito que:

**1. Diseñes el sistema de onboarding automatizado del empleado:**
Define la secuencia de comunicaciones automatizadas del onboarding: qué comunicaciones enviar antes del primer día (preboarding: información práctica, materiales de bienvenida, contactos clave), qué flujo de mensajes guía al nuevo empleado durante las primeras semanas (hitos del onboarding, presentaciones al equipo, recordatorios de tareas de incorporación), cómo personalizar el onboarding según el área, el rol o el modo de trabajo del empleado, y cómo medir si el onboarding automatizado está mejorando la integración y el tiempo hasta la primera contribución del empleado.

**2. Diseñes los flujos de check-in y feedback continuo:**
Explica cómo automatizar los procesos de check-in y feedback del ciclo de vida del empleado: encuestas de pulso automatizadas y periódicas para medir el engagement del equipo, check-ins de manager automáticos en hitos clave (primer mes, primer trimestre, primer año), recordatorios automatizados para completar las evaluaciones de desempeño antes de la fecha límite, y flujos de seguimiento para empleados cuyas respuestas indican señales de desengagement o intención de abandonar. Para cada flujo describe el trigger, el canal de comunicación y cómo procesar y actuar sobre las respuestas.

**3. Diseñes el sistema de reconocimiento automatizado:**
Define el sistema de reconocimiento de logros y hitos del empleado que puede automatizarse sin perder autenticidad: reconocimiento de aniversarios de empresa con mensajes personalizados al equipo, celebración de hitos de onboarding completados, reconocimiento de logros de desempeño basados en datos de la plataforma de RRHH, felicitaciones de cumpleaños automatizadas con mensaje personalizado del manager, y cómo conectar el sistema de reconocimiento automatizado con el programa de reconocimiento entre pares para amplificar el impacto.

**4. Automatices los procesos administrativos de RRHH:**
Describe cómo automatizar los procesos administrativos que consumen tiempo del equipo de RRHH: flujos de aprobación de vacaciones y ausencias con notificaciones al manager y al empleado, recordatorios de renovación de documentación (formaciones obligatorias, certificados, documentos legales con fecha de caducidad), comunicaciones automáticas en el proceso de solicitud de beneficios (seguro médico, ticket restaurante, etc.), y flujos de offboarding que guían al empleado saliente y al equipo de RRHH a través de cada paso del proceso con las comunicaciones y los plazos correctos.

**5. Diseñes la comunicación interna automatizada de empresa:**
Explica cómo automatizar las comunicaciones internas de empresa que mantienen al equipo informado y cohesionado: newsletter interna automatizada con las noticias más relevantes de la semana, resumen semanal automático del canal de reconocimiento de Slack (los mejores momentos de la semana), comunicaciones de bienvenida a nuevos empleados distribuidas a toda la empresa, alertas automáticas de cambios importantes en políticas o procesos de RRHH, y cómo medir el engagement con las comunicaciones internas para saber si el equipo está leyendo y valorando los mensajes.

**6. Implementes el sistema con las herramientas disponibles:**
Describe cómo implementar los flujos de comunicación interna automatizada con las herramientas más comunes: automatizaciones nativas de las plataformas de RRHH (Workday, BambooHR, Personio), bots y automatizaciones de Slack o Microsoft Teams, conexión entre la plataforma de RRHH y el email corporativo mediante herramientas de integración (Zapier, Make), y cuándo tiene sentido implementar una plataforma especializada en employee experience (Leapsome, Lattice, Culture Amp) versus construir las automatizaciones sobre las herramientas existentes. Incluye una estimación del tiempo de implementación para un equipo de RRHH de tamaño medio.

Incluye un mapa de flujos de comunicación por etapa del ciclo de vida del empleado, ejemplos de mensajes de onboarding y estructura del sistema de reconocimiento automatizado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar flujos de comunicación interna automatizada que mejoren la experiencia del empleado en los momentos clave del ciclo de vida, desde el onboarding hasta el offboarding.',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Modelización financiera del impacto de la automatización de marketing B2C con IA',
                'description'       => 'Usa IA para construir modelos financieros que cuantifiquen el retorno de la inversión en sistemas de marketing automation B2C, incluyendo el impacto en LTV, churn y revenue incremental.',
                'prompt_content'    => <<<'EOT'
Eres un director financiero con experiencia en la modelización del impacto económico de las inversiones en marketing technology y automatización de marketing para empresas B2C. Tu objetivo es ayudarme a construir el modelo financiero que cuantifica el retorno de la inversión en el sistema de marketing automation, el impacto en el valor de vida del cliente y la contribución al P&L de los flujos de email, SMS, push y automatización in-product.

**Contexto financiero del negocio B2C:**
[Describe la empresa: modelo de ingresos (transaccional o suscripción), ingresos anuales aproximados, LTV actual promedio, churn mensual, CAC y los principales flujos de automatización de marketing en uso]

**Inversión en marketing automation:**
[Describe la inversión actual o planeada: coste de la plataforma de marketing automation, coste de implementación y configuración inicial, coste del equipo que gestiona el sistema (FTE o fracción de FTE), y coste de los incentivos incluidos en los flujos (descuentos, bonificaciones)]

**Datos disponibles para el modelo:**
[Indica qué datos tienes: métricas de los flujos actuales (tasas de apertura, clic, conversión, revenue por email), historial de LTV antes y después de implementar flujos específicos, datos de churn por cohorte, y si puedes aislar el efecto de la automatización de otros factores]

---

Con este contexto, necesito que:

**1. Diseñes el modelo financiero de ROI de marketing automation:**
Define los componentes del modelo financiero: ingresos incrementales atribuibles a los flujos de automatización (revenue directo de los emails de conversión, revenue de retención por la reducción del churn, revenue de expansión por los flujos de upsell y cross-sell), costes del sistema (plataforma, equipo, incentivos), y cómo calcular el ROI neto del programa como la diferencia entre los ingresos incrementales y los costes totales del sistema. Describe cómo aislar el efecto de la automatización del efecto de otros factores de marketing o de producto.

**2. Modelices el impacto en el LTV por la automatización:**
Explica cómo construir el modelo de impacto de la automatización en el LTV del cliente: cómo cuantificar el efecto del flujo de bienvenida en la tasa de conversión a primera compra y en el LTV de las cohortes que pasan por el flujo versus las que no, cómo modelizar el impacto del flujo de reactivación en la recuperación de clientes perdidos y el valor esperado de los clientes recuperados, y cómo construir el modelo de cohortes que muestra la diferencia en LTV entre clientes que reciben comunicaciones automatizadas personalizadas versus los que reciben solo comunicaciones masivas.

**3. Modelices el impacto en la reducción del churn:**
Define cómo cuantificar el impacto financiero de la reducción del churn por los flujos de retención automatizados: cómo calcular el revenue guardado por cada punto porcentual de reducción del churn mensual, cómo atribuir la reducción del churn al sistema de automatización versus otras mejoras del producto o el precio, cómo modelizar el impacto acumulado de una reducción del churn en el LTV promedio de la base de clientes a 12, 24 y 36 meses, y cómo calcular el payback del sistema de automatización solo en términos de la reducción del churn.

**4. Modelices el revenue incremental de los flujos de conversión y expansión:**
Explica cómo construir el modelo de revenue incremental de los flujos de conversión y expansión: cómo calcular el revenue atribuible al flujo de carrito abandonado (tasa de recuperación multiplicada por el ticket promedio de los pedidos recuperados menos el descuento ofrecido), cómo modelizar el revenue del flujo de upsell y cross-sell post-compra (uplift en el ticket de segunda compra atribuible al flujo versus el benchmark sin flujo), y cómo sumar el revenue de todos los flujos en un modelo consolidado que muestra el impacto total del sistema de automatización en el revenue.

**5. Construyas el modelo de costes totales del sistema:**
Define cómo modelizar los costes totales de propiedad (TCO) del sistema de marketing automation: coste de la plataforma (licencia mensual o anual, costes variables por volumen de emails o contactos), coste del equipo (tiempo del equipo de marketing dedicado a crear y mantener los flujos, tiempo del equipo técnico para la integración y el mantenimiento), costes de los incentivos incluidos en los flujos (coste de los descuentos de carrito abandonado, de los bonos de bienvenida, de los regalos de reactivación), y costes de oportunidad si aplica.

**6. Presentes el caso de inversión ante la dirección:**
Explica cómo estructurar el executive summary del caso de inversión en marketing automation para el comité de dirección: cómo presentar el ROI de forma comprensible para directivos no especializados en marketing digital (traducir el ROAS de email a revenue incremental en euros), cómo responder a las objeciones más frecuentes (el email marketing ya no funciona, los clientes no abren los emails, ya lo estamos haciendo con lo que tenemos), y cómo proponer el plan de implementación por fases que permita demostrar un ROI rápido con los flujos de mayor impacto antes de invertir en la plataforma completa.

Incluye plantillas de modelo financiero de marketing automation, benchmarks de referencia del sector y estructura del executive summary del caso de inversión.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Construir modelos financieros que cuantifiquen el ROI de sistemas de marketing automation B2C, incluyendo el impacto en LTV, reducción del churn y revenue incremental por flujo.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Cumplimiento legal en marketing automation B2C con IA',
                'description'       => 'Usa IA para diseñar el framework legal de cumplimiento de las campañas de marketing automation B2C, incluyendo RGPD, LSSI, gestión del consentimiento y comunicaciones comerciales.',
                'prompt_content'    => <<<'EOT'
Eres un abogado especializado en derecho digital, protección de datos y regulación del marketing online con experiencia en el asesoramiento legal de empresas B2C en el diseño de sistemas de marketing automation conformes con el RGPD, la Ley de Servicios de la Sociedad de la Información (LSSI), la normativa de comunicaciones electrónicas y la regulación de protección al consumidor. Tu objetivo es ayudarme a diseñar el framework legal de cumplimiento de nuestro sistema de marketing automation B2C y a identificar y corregir los riesgos de incumplimiento existentes.

**Contexto del sistema de marketing automation:**
[Describe el sistema: plataforma de marketing automation en uso, tipos de comunicaciones automatizadas (email de marketing, email transaccional, SMS, push notifications, WhatsApp), canales de captación de leads y recopilación del consentimiento, y los países donde opera la empresa]

**Base de datos de clientes:**
[Describe la base de datos: tamaño aproximado, cómo se recopiló el consentimiento (formulario de registro, compra, suscripción a newsletter, actividad en redes sociales), si hay datos de menores en la base de datos, y si se comparten datos con terceros proveedores de marketing]

**Riesgos identificados o sospechados:**
[Indica los posibles problemas de cumplimiento que ya has detectado: formularios de captación de lead sin casilla de consentimiento explícito, emails de marketing enviados a clientes que no consintieron, falta de baja automática al pinchar en el enlace de baja, datos compartidos con terceros sin base legal clara, etc.]

---

Con este contexto, necesito que:

**1. Mapees los riesgos legales del sistema de marketing automation:**
Define el mapa de riesgos legales del sistema de automatización de marketing por áreas normativas: RGPD (bases legales de tratamiento, consentimiento válido, derechos de los interesados, transferencias internacionales de datos a plataformas de marketing americanas), LSSI y normativa de comunicaciones electrónicas (requisitos de consentimiento previo para comunicaciones comerciales, identificación del remitente, gestión de bajas), normativa de protección al consumidor (publicidad engañosa en comunicaciones automatizadas, condiciones de las ofertas promocionales), y regulación específica del canal (requisitos de SMS marketing, regulación de WhatsApp Business para marketing).

**2. Diseñes el sistema de captación del consentimiento conforme:**
Explica cómo diseñar el sistema de captación del consentimiento para comunicaciones de marketing que sea válido bajo el RGPD y la LSSI: qué condiciones debe cumplir el consentimiento para ser válido (libre, específico, informado e inequívoco), cómo diseñar el formulario de captación de lead para que el consentimiento sea granular por canal y por tipo de comunicación, cuándo puede utilizarse el interés legítimo como base legal para comunicaciones de marketing a clientes existentes (la excepción de la relación contractual previa en la LSSI), y cómo documentar el consentimiento de forma auditable.

**3. Diseñes el sistema de gestión de bajas y preferencias:**
Define los requisitos legales del sistema de gestión de bajas y preferencias de comunicación: qué canales de baja deben estar disponibles en cada tipo de comunicación (enlace de baja en emails, instrucción de baja en SMS, gestión en el portal de preferencias), en qué plazo máximo debe procesarse la baja del RGPD versus la baja de marketing (la baja de marketing debe ser inmediata o como máximo en 10 días hábiles según la LSSI), cómo implementar el centro de preferencias de comunicación que permita al usuario gestionar sus preferencias por canal y por tipo de contenido, y cómo sincronizar las bajas entre todos los sistemas del stack de marketing para que sean efectivas en todos los canales.

**4. Gestionas las transferencias de datos a plataformas de marketing internacionales:**
Describe los requisitos legales de la transferencia de datos de clientes europeos a plataformas de marketing automation con servidores en EEUU u otros países terceros: cómo validar que la plataforma elegida ofrece garantías adecuadas de transferencia (cláusulas contractuales tipo de la UE, decisión de adecuación, BCR), qué información debe incluirse en la política de privacidad sobre la transferencia de datos al proveedor de marketing automation, y cómo evaluar si el uso de Meta Custom Audiences, Google Customer Match u otras herramientas de publicidad online basadas en datos de clientes es conforme con el RGPD.

**5. Diseñes el cumplimiento de las comunicaciones automatizadas por canal:**
Explica los requisitos específicos de cada canal de comunicación automatizada: email (identificación del remitente, mecanismo de baja visible, no usar asuntos engañosos), SMS (identificación del remitente, restricción de horarios de envío, proceso de baja por respuesta STOP), push notifications (consentimiento explícito en la instalación de la app, posibilidad de gestionar preferencias desde el sistema operativo), WhatsApp Business (restricciones de WhatsApp sobre mensajes de marketing iniciados por la empresa, plantillas aprobadas, ventana de 24 horas para mensajes fuera de plantilla), y qué herramientas de documentación de cumplimiento usar para cada canal.

**6. Diseñes el proceso de respuesta ante una reclamación o inspección de la AEPD:**
Explica cómo preparar a la organización para responder ante una reclamación de un usuario o una inspección de la Agencia Española de Protección de Datos relacionada con el sistema de marketing automation: qué documentación mantener actualizada (registro de actividades de tratamiento para comunicaciones comerciales, evidencias de consentimiento, logs de bajas procesadas), cómo responder a una solicitud de ejercicio de derechos en el contexto del marketing automation (acceso a los datos de perfil de marketing, derecho de oposición al perfilado), y qué medidas técnicas y organizativas deben estar implementadas para minimizar el riesgo sancionador.

Incluye checklist de cumplimiento legal del sistema de marketing automation, plantilla de política de privacidad específica y guía de consentimiento válido por canal.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar el framework legal de cumplimiento de sistemas de marketing automation B2C, garantizando el cumplimiento del RGPD, la LSSI y la normativa de comunicaciones comerciales por canal.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Automatización del soporte y la retención de clientes B2C con IA',
                'description'       => 'Usa IA para diseñar flujos de automatización de customer success y soporte B2C que reduzcan el churn, aumenten la satisfacción del cliente y escalen el equipo de atención sin crecer linealmente.',
                'prompt_content'    => <<<'EOT'
Eres un director de Customer Success y Soporte con especialización en modelos de atención B2C de alto volumen y bajo coste, con experiencia en el diseño de sistemas de automatización que combinan bots, flujos de comunicación proactiva y atención humana para maximizar la satisfacción del cliente y la retención. Tu objetivo es ayudarme a diseñar el sistema de automatización de soporte y retención de clientes B2C que reduzca el churn, aumente el CSAT y escale la atención sin necesitar contratar proporcionalmente más agentes.

**Contexto del negocio y el equipo de CS/soporte:**
[Describe el modelo: tipo de producto (app de consumo, ecommerce, SaaS de usuario final, servicio de suscripción), volumen de clientes, tickets de soporte mensuales aproximados, tamaño del equipo de atención, CSAT actual y las principales causas de churn que has identificado]

**Canales de atención actuales:**
[Indica los canales de soporte disponibles: email, chat en vivo, chatbot, teléfono, WhatsApp, autoservicio con base de conocimiento, comunidad de usuarios, o una combinación]

**Herramientas disponibles:**
[Describe las herramientas: helpdesk (Zendesk, Intercom, Freshdesk), chatbot o plataforma de automatización de chat, herramienta de marketing automation para comunicaciones proactivas, y si hay integración entre el helpdesk y la plataforma de marketing automation]

---

Con este contexto, necesito que:

**1. Diseñes el sistema de soporte proactivo automatizado:**
Define la estrategia de soporte proactivo que anticipa los problemas del cliente antes de que generen un ticket: qué eventos del producto o del pedido deben activar comunicaciones proactivas (retraso en el envío, error detectado en la cuenta del usuario, uso del producto por debajo del umbral mínimo, expiración inminente de la suscripción), qué canal usar para cada tipo de comunicación proactiva, cómo diseñar los mensajes proactivos para que sean percibidos como un servicio y no como una alarma, y cómo medir la reducción de tickets generada por el soporte proactivo.

**2. Diseñes el sistema de automatización del chatbot para B2C:**
Explica cómo diseñar un sistema de chatbot para soporte B2C de alto volumen: qué intenciones y preguntas frecuentes deben resolverse automáticamente por el bot (seguimiento de pedido, política de devoluciones, cambio de contraseña, actualización de datos de pago, cancelación de suscripción), cómo diseñar los flujos de conversación del bot para que sean claros y eficientes sin ser frustrantes, cuándo y cómo escalar del bot al agente humano (cuando el bot no entiende la intención, cuando el cliente expresa frustración, cuando el problema requiere consulta manual), y cómo usar los datos de las conversaciones del bot para mejorar la base de conocimiento y los flujos del bot.

**3. Diseñes los flujos de retención automatizada en momentos de churn:**
Define los flujos de retención automatizada que deben activarse cuando el cliente muestra señales de abandono: flujo de recuperación de pago fallido (cuántos intentos de cobro automático, en qué tiempos, con qué comunicaciones al cliente para que actualice el método de pago antes de que se cancele la cuenta), flujo de retención ante solicitud de cancelación (cómo interceptar la intención de cancelar con una oferta de pausa, descuento o alternativa antes de procesar la baja), y flujo de recuperación post-cancelación (cómo mantener la relación con el ex-cliente de forma no invasiva para facilitar el regreso en el futuro).

**4. Automatices la gestión de las reseñas y el feedback B2C:**
Describe cómo automatizar la recopilación y gestión de reseñas y feedback de clientes: cómo diseñar el flujo de solicitud de reseña que maximiza la tasa de respuesta (timing óptimo, canal correcto, longitud del mensaje), cómo automatizar la respuesta a las reseñas positivas (agradecimiento personalizado con mención al punto específico que valoró) y el routing de las reseñas negativas al equipo de CS para atención urgente, y cómo conectar el sistema de reseñas automatizadas con las plataformas públicas (Google, Trustpilot, App Store) para maximizar el volumen y la valoración media.

**5. Diseñes el sistema de escalado automatizado por señales de riesgo:**
Explica cómo implementar el sistema de alertas y escalado automático que lleva los clientes de mayor riesgo a la atención humana: cómo combinar señales de comportamiento del producto, datos de soporte (número de tickets, CSAT de las interacciones recientes) y datos de pago para calcular el riesgo de churn de cada cliente en tiempo real, cómo configurar las alertas automatizadas para el equipo de CS cuando un cliente de alto valor supera el umbral de riesgo, y cómo priorizar la cola de atención humana para que los agentes traten primero a los clientes con mayor riesgo y mayor valor.

**6. Midas y optimices el sistema de soporte y retención automatizado:**
Define el framework de medición del sistema de soporte y retención automatizado: qué KPIs monitorizar (tasa de resolución automática del chatbot, CSAT de las interacciones con el bot versus con el agente humano, coste por ticket resuelto antes y después de la automatización, impacto de los flujos de retención en la reducción del churn mensual, tasa de éxito del flujo de recuperación de pago fallido), cómo calcular el ahorro de costes generado por la automatización del soporte y el revenue guardado por los flujos de retención, y cómo priorizar las mejoras del sistema por impacto en el CSAT y en la retención.

Responde con el blueprint del sistema de soporte y retención automatizado B2C, ejemplos de flujos de retención y framework de medición de impacto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar flujos de automatización de soporte y retención B2C que reduzcan el churn, aumenten la satisfacción del cliente y escalen la atención sin crecer linealmente el equipo.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Automatización del marketing para freelancers y agencias de servicios B2C con IA',
                'description'       => 'Usa IA para diseñar un sistema de automatización de marketing sencillo y sostenible para freelancers y agencias que atienden a clientes B2C, desde la captación hasta la fidelización.',
                'prompt_content'    => <<<'EOT'
Eres un estratega de marketing y negocio para profesionales independientes y pequeñas agencias con experiencia en el diseño de sistemas de automatización de marketing que funcionan con recursos limitados, generan leads de calidad de forma constante y mantienen la relación con los clientes sin necesitar un equipo de marketing detrás. Tu objetivo es ayudarme a diseñar e implementar un sistema de automatización de marketing B2C adaptado a mi realidad como freelancer o agencia pequeña, que capte clientes potenciales, los nutra hasta la conversión y mantenga la relación con los clientes actuales de forma automática.

**Contexto de tu negocio:**
[Describe tu perfil: tipo de servicio (diseño, fotografía, coaching, terapia, entrenamiento personal, asesoría, belleza, etc.), precio del servicio (ticket bajo con volumen alto, ticket medio o ticket alto con pocos clientes), cómo captas clientes actualmente (redes sociales, boca a boca, directorio, publicidad local), y cuánto tiempo dedicas a captación y seguimiento de potenciales clientes]

**Herramientas disponibles o que estás dispuesto a implementar:**
[Indica las herramientas: si tienes web o landing page, si usas alguna herramienta de email (Mailchimp, Brevo, MailerLite), si usas CRM o agenda online (Calendly, Acuity), si vendes online o solo en persona, y cuánto presupuesto mensual puedes destinar a herramientas de automatización]

**Principales problemas de captación y retención:**
[Describe los problemas: el pipeline de clientes es irregular y depende de la suerte, pierdes potenciales clientes que contactan y luego desaparecen, los clientes que terminan el servicio no vuelven ni refieren, o no tienes tiempo para el seguimiento porque estás trabajando con los clientes actuales]

---

Con este contexto, necesito que:

**1. Diseñes el sistema de captación de leads automatizado:**
Define el sistema de captación de leads para tu tipo de servicio B2C: qué lead magnet crear que atraiga a clientes potenciales ideales (guía descargable, mini-clase gratuita, diagnóstico gratuito, descuento para la primera sesión), cómo crear la landing page o el formulario de captación sin necesidad de una web compleja, cómo configurar el email automático de bienvenida que confirma la captación y presenta los siguientes pasos, y cómo integrar el formulario con tu herramienta de email para que el lead entre automáticamente en tu lista sin intervención manual.

**2. Diseñes la secuencia de nurturing para el servicio B2C:**
Explica cómo diseñar la secuencia de emails automatizados que convierte a un lead en cliente: cuántos emails enviar antes de hacer la primera propuesta directa (generalmente 3 a 5 emails de valor antes del email de venta), qué contenido incluir en cada email para generar confianza y mostrar resultados (testimonios de clientes, antes y después, resolución de objeciones frecuentes, muestra de tu trabajo), y cómo hacer la llamada a la acción del email de conversión de forma que sea natural y sin presión (reservar una llamada de valoración gratuita, hacer la primera cita, comprar el primer pack de sesiones).

**3. Diseñes el sistema de seguimiento automatizado de potenciales clientes:**
Define el sistema de seguimiento de potenciales clientes que no han convertido todavía: cómo configurar una secuencia de seguimiento automatizado para los potenciales clientes que pidieron información pero no reservaron ni compraron (email de seguimiento a las 48 horas, email de valor a la semana, email de oferta de tiempo limitado a las dos semanas), cómo usar herramientas de agenda online (Calendly, Acuity) para que el potencial cliente pueda reservar sin necesidad de un intercambio manual de emails, y cómo gestionar el seguimiento de los potenciales clientes con mayor interés sin un CRM complejo.

**4. Diseñes los flujos de comunicación con clientes actuales:**
Explica cómo mantener la relación con los clientes actuales de forma automatizada: recordatorios automáticos de citas o sesiones para reducir las no-asistencias, email de seguimiento post-sesión que pide feedback y refuerza el valor del servicio, secuencia de comunicación entre sesiones que mantiene el compromiso del cliente con el proceso (recursos adicionales, tips relacionados con el servicio), y comunicación automática en hitos del proceso del cliente (primera semana, primer mes, fin del paquete contratado).

**5. Diseñes el sistema de referidos y reseñas automatizado:**
Describe cómo automatizar la captación de reseñas y la generación de referidos para tu negocio de servicios B2C: cómo y cuándo pedir la reseña en el momento de mayor satisfacción del cliente (justo después de un resultado tangible, no al final del proceso cuando la relación se ha enfriado), cómo hacer la solicitud de referidos de forma natural y sin que se sienta transaccional (el cliente refiere porque quiere ayudar a alguien que conoce, no por un incentivo), y cómo diseñar un programa de referidos sencillo que recompense al cliente que refiere sin crear complejidad administrativa.

**6. Implementes el sistema con un presupuesto mínimo:**
Define cómo implementar el sistema de marketing automation con las herramientas más económicas del mercado: stack de marketing automation para freelancers con presupuesto reducido (MailerLite o Brevo gratuito para el email, Calendly gratuito para la agenda, formulario de captación integrado en la web), cómo crear los flujos básicos paso a paso sin conocimientos técnicos avanzados, cuánto tiempo necesitas para implementar el sistema y empezar a ver resultados, y qué parte del sistema implementar primero para obtener el mayor impacto en el menor tiempo posible.

Responde con el sistema completo de marketing automation para tu perfil de freelancer o agencia, las herramientas recomendadas y el plan de implementación por semanas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar e implementar un sistema de automatización de marketing sencillo para freelancers y agencias B2C que capte leads, los nutra hasta la conversión y fidelice a los clientes actuales.',
                'vote_score'        => 46,
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
