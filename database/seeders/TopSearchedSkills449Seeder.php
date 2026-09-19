<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills449Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de marketing omnicanal integrada con IA',
                'description'       => 'Usa IA para diseñar e implementar una estrategia de marketing omnicanal coherente que conecte todos los puntos de contacto del cliente y maximice el impacto de cada canal.',
                'prompt_content'    => <<<'EOT'
Eres un director de marketing con especialización en estrategia omnicanal y experiencia en el diseño de journeys de cliente integrados que conectan canales físicos y digitales de forma coherente. Tu objetivo es ayudarme a diseñar o mejorar la estrategia de marketing omnicanal de nuestra empresa, garantizando que el cliente vive una experiencia consistente y personalizada en todos los puntos de contacto, independientemente del canal que use para interactuar con la marca.

**Contexto del negocio:**
[Describe la empresa: sector, modelo de negocio (ecommerce, retail con tienda física, SaaS, B2B con ciclo largo), canales actuales de captación y retención, y si el cliente interactúa principalmente online, offline, o en ambos entornos]

**Canales activos actuales:**
[Lista todos los canales que ya usas: web, app móvil, email, SMS, WhatsApp, redes sociales, paid search, paid social, tienda física, call center, chatbot, etc. Indica cuáles están conectados entre sí y cuáles funcionan de forma aislada]

**Principales problemas de coherencia omnicanal:**
[Describe los problemas actuales: el cliente recibe ofertas contradictorias en distintos canales, el historial de compra online no se ve en tienda, las comunicaciones no están coordinadas, hay redundancia o saturación de mensajes, etc.]

---

Con este contexto, necesito que:

**1. Diseñes la arquitectura de la estrategia omnicanal:**
Define el framework de la estrategia omnicanal para mi negocio: cómo mapear el customer journey completo identificando todos los puntos de contacto por etapa (awareness, consideración, primera compra, retención, advocacy), cómo priorizar qué canales deben estar más integrados según el comportamiento real de mis clientes, qué significa una experiencia verdaderamente omnicanal versus multicanal (la diferencia entre canales que coexisten y canales que se coordinan en tiempo real), y cómo diseñar la experiencia desde la perspectiva del cliente en lugar de desde la perspectiva de los departamentos internos.

**2. Diseñes los journeys omnicanal por segmento:**
Explica cómo diseñar los journeys omnicanal adaptados a los distintos segmentos de clientes: cómo identificar los patrones de uso de canales más frecuentes en cada segmento (el cliente que empieza en redes sociales y compra en tienda, el que investiga en web y convierte por email, el que usa la app para recompras), cómo diseñar flujos de comunicación que acompañen al cliente a través de distintos canales de forma coordinada, y cómo personalizar el mensaje en cada canal según el historial de interacciones anteriores del cliente.

**3. Alinées los mensajes y el contenido entre canales:**
Define la estrategia de coherencia de mensajes en todos los canales: cómo crear un sistema de mensajes maestros que se adapta al formato de cada canal sin perder coherencia, cómo coordinar los calendarios de contenido y campañas entre equipos que gestionan canales distintos, cómo gestionar las promociones omnicanal para que el cliente vea la misma oferta independientemente del canal, y cómo usar IA generativa para adaptar el contenido al tono y formato de cada canal manteniendo la consistencia de marca.

**4. Implementes la atribución omnicanal:**
Describe los retos y soluciones de la atribución de conversiones en entornos omnicanal: por qué los modelos de atribución de último clic son inadecuados en omnicanal, qué modelos de atribución son más apropiados (data-driven, posición, lineal), cómo medir el impacto de los canales offline en las conversiones online (y viceversa), cómo implementar la atribución omnicanal con las herramientas disponibles (GA4, plataformas de CDP, herramientas de media mix modeling), y cómo usar estos datos para redistribuir el presupuesto de marketing entre canales de forma más inteligente.

**5. Diseñes la infraestructura de datos para el omnicanal:**
Explica los requisitos de datos que hacen posible el marketing omnicanal real: por qué es crítico tener un identificador único del cliente que funcione en todos los canales (Customer Data Platform o CDP), cómo conectar las fuentes de datos offline y online en un perfil único (matching por email, teléfono, cookie), cómo gestionar el consentimiento de datos en un entorno omnicanal con múltiples puntos de recopilación, y qué soluciones técnicas son viables según el tamaño y el presupuesto de la empresa (desde Google Analytics 4 + CRM básico hasta una CDP enterprise).

**6. Midas el rendimiento de la estrategia omnicanal:**
Define el framework de medición de la estrategia omnicanal: qué KPIs usar que reflejen el rendimiento conjunto de los canales y no solo el rendimiento individual de cada uno (customer lifetime value, coste de adquisición omnicanal, Net Promoter Score, tasa de retención cross-canal), cómo medir la mejora de la experiencia del cliente en el tiempo (reducción del esfuerzo del cliente, satisfacción por punto de contacto, coherencia percibida), y cómo construir el dashboard ejecutivo que resume el rendimiento omnicanal para la dirección.

Responde con un mapa de customer journey omnicanal adaptado a mi negocio, framework de atribución y plan de implementación por fases.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar e implementar una estrategia de marketing omnicanal que conecte todos los puntos de contacto del cliente y garantice coherencia de mensaje y experiencia en todos los canales.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Arquitectura técnica para plataformas omnicanal con IA',
                'description'       => 'Usa IA para diseñar la arquitectura de sistemas e integraciones que hacen posible una plataforma omnicanal escalable con sincronización en tiempo real entre canales físicos y digitales.',
                'prompt_content'    => <<<'EOT'
Eres un arquitecto de software con especialización en plataformas de comercio omnicanal, integración de sistemas y APIs de tiempo real para empresas con presencia en múltiples canales digitales y físicos. Tu objetivo es ayudarme a diseñar la arquitectura técnica que hace posible la estrategia omnicanal de nuestra empresa, integrando sistemas de ecommerce, punto de venta, CRM, inventario, marketing automation y datos de cliente en una plataforma coherente y escalable.

**Contexto técnico actual:**
[Describe el ecosistema de sistemas existente: plataforma de ecommerce, ERP/sistema de inventario, CRM, plataforma de email marketing, punto de venta (POS) en tienda física, app móvil, si los hay, y el stack tecnológico principal]

**Principales problemas de integración:**
[Describe los problemas técnicos actuales: inventario desincronizado entre online y offline, pedidos no visibles en el POS, perfiles de cliente duplicados en distintos sistemas, imposibilidad de ver el historial completo del cliente, latencia excesiva en las actualizaciones, etc.]

**Restricciones técnicas y presupuestarias:**
[Indica las restricciones: equipo técnico disponible, presupuesto para nuevas plataformas o integraciones, legacy systems que no pueden reemplazarse, requisitos de tiempo real versus eventual consistency, regulaciones de datos que aplican]

---

Con este contexto, necesito que:

**1. Diseñes la arquitectura de integración omnicanal:**
Define la arquitectura de integración que conecta los sistemas de la empresa en un entorno omnicanal: si usar un patrón de integración point-to-point, un ESB (Enterprise Service Bus) o una arquitectura orientada a eventos con un broker de mensajes (Kafka, RabbitMQ, AWS EventBridge), cuándo tiene sentido implementar una API Gateway centralizada versus integraciones directas entre sistemas, y cómo diseñar la arquitectura para que sea resiliente a la caída de un sistema individual sin que rompa toda la experiencia del cliente.

**2. Diseñes la capa de datos unificados del cliente (CDP):**
Explica cómo construir o implementar la capa de datos de cliente que hace posible el omnicanal real: cómo unificar los perfiles de cliente de múltiples fuentes en una identidad única (identity resolution), qué datos de comportamiento capturar de cada canal para construir el perfil omnicanal, cómo gestionar la privacidad y el consentimiento de datos en un entorno donde los datos fluyen entre muchos sistemas, y si usar una plataforma CDP de mercado (Segment, Tealium, Bloomreach, mParticle) o construir una solución propia, con criterios para la decisión.

**3. Integres el inventario en tiempo real entre canales:**
Describe los requisitos técnicos de la gestión de inventario omnicanal: cómo sincronizar el inventario entre la tienda online, las tiendas físicas y el almacén en tiempo real o con latencia mínima aceptable, cómo gestionar la reserva de stock para pedidos online que se recogen en tienda (click & collect), cómo implementar la visibilidad de stock por ubicación para el cliente en la web y en el POS, y qué tecnologías usar para la sincronización de inventario (APIs REST o webhooks del ERP, sistemas de gestión de almacén con conectores estándar, etc.).

**4. Diseñes la sincronización del perfil y el historial del cliente:**
Define cómo sincronizar el perfil del cliente y su historial de interacciones entre todos los puntos de contacto: cómo hacer que el agente de call center, el vendedor de tienda física y el sistema de email marketing tengan acceso al mismo perfil actualizado del cliente, qué datos deben estar disponibles en tiempo real (puntos de fidelización, estado del pedido en curso, última interacción) versus qué datos pueden ser eventuales (historial completo de compras, preferencias de marketing), y cómo diseñar la autenticación del cliente en canales físicos (número de cliente, QR, identificación por teléfono) para conectar las interacciones offline con el perfil digital.

**5. Implementes el marketing omnicanal con automatización:**
Describe la arquitectura técnica del marketing automation omnicanal: cómo conectar el CDP con la plataforma de marketing automation para activar comunicaciones basadas en el comportamiento del cliente en cualquier canal, cómo implementar el orchestration de mensajes para evitar la saturación (el cliente no debe recibir el mismo mensaje por email, SMS y push si ya respondió en uno de ellos), cómo gestionar la supresión de comunicaciones en canales donde el cliente ya convirtió, y qué plataformas de marketing automation soportan natively el omnicanal (Braze, Iterable, Salesforce Marketing Cloud, Klaviyo).

**6. Diseñes la observabilidad y el mantenimiento del sistema omnicanal:**
Explica cómo monitorizar y mantener la plataforma omnicanal en producción: qué métricas técnicas son críticas de monitorizar (latencia de sincronización de inventario, tasa de error en las integraciones, lag de actualización del perfil del cliente), cómo implementar alertas para detectar problemas de sincronización antes de que impacten al cliente (inventario desincronizado, pedidos atascados, perfiles duplicados), y cómo diseñar el runbook de resolución de incidencias para los fallos más frecuentes en plataformas omnicanal.

Incluye diagrama de arquitectura de referencia, comparativa de opciones de CDP y checklist de integraciones críticas para el omnicanal.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar la arquitectura técnica de integraciones y plataformas que hace posible una experiencia omnicanal real con sincronización de inventario, perfil de cliente y mensajes entre todos los canales.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de experiencias de marca consistentes en entornos omnicanal con IA',
                'description'       => 'Usa IA para crear sistemas de diseño y guías de experiencia que garanticen la coherencia visual y de interacción de una marca en todos sus canales físicos y digitales.',
                'prompt_content'    => <<<'EOT'
Eres un director de diseño con especialización en identidad de marca y experiencia omnicanal, con experiencia en el desarrollo de sistemas de diseño que escalan desde el punto de venta físico hasta la app móvil y la comunicación digital. Tu objetivo es ayudarme a crear o actualizar el sistema de diseño omnicanal de nuestra marca para que la experiencia del cliente sea coherente, reconocible y de calidad en todos los puntos de contacto, independientemente de si interactúa con nosotros en la tienda, en la web, en la app o en las redes sociales.

**Contexto de la marca:**
[Describe la marca: sector, posicionamiento (premium, masivo, nicho), personalidad de marca, valores y el estado actual del sistema de diseño si existe]

**Canales que deben estar alineados:**
[Lista los canales que necesitan coherencia de diseño: tienda física (señalética, packaging, materiales en punto de venta), web desktop, web móvil, app iOS/Android, email, redes sociales, publicidad digital, materiales impresos, atención al cliente, etc.]

**Problemas de coherencia actuales:**
[Describe los problemas: distintas paletas de color en distintos canales, tipografías inconsistentes, tono de voz diferente online y offline, logos y activos de marca desactualizados en algunos canales, etc.]

---

Con este contexto, necesito que:

**1. Diseñes el sistema de diseño omnicanal:**
Define la estructura del sistema de diseño que garantiza la coherencia en todos los canales: cómo organizar los tokens de diseño (colores, tipografías, espaciado, iconografía) de forma que sean la fuente de verdad única aplicable a todos los contextos, cómo documentar las variaciones adaptadas a cada canal (por ejemplo, la paleta principal en digital versus su equivalente en impresión CMYK o Pantone en materiales físicos), y cómo gestionar el versionado del sistema de diseño para que las actualizaciones se propaguen de forma ordenada a todos los canales.

**2. Diseñes los componentes visuales adaptativos por canal:**
Explica cómo diseñar los elementos visuales clave de forma que sean adaptables a distintos formatos sin perder coherencia: el logo y sus variaciones (versión completa, símbolo solo, versión en negativo, versión de alta y baja resolución), los componentes de UI digital (botones, formularios, navegación) y sus equivalentes en materiales físicos, las plantillas de comunicación para cada canal (email, post de redes sociales, pieza de publicidad, señalética de tienda), y cómo documentar las reglas de uso para que diseñadores de distintos equipos apliquen el sistema correctamente.

**3. Diseñes la guía de tono de voz y copywriting omnicanal:**
Define el sistema de tono de voz que garantiza la coherencia del lenguaje de la marca en todos los canales: cómo describir la personalidad de la marca en términos concretos y accionables (los adjetivos que caracterizan el tono, ejemplos de cómo hablaría la marca en distintas situaciones), cómo adaptar el tono al contexto del canal sin perder la esencia de la marca (el email de transacción puede ser más funcional que un post de Instagram, pero ambos deben sonar a la misma marca), y cómo crear plantillas de copy para las comunicaciones más frecuentes que sean coherentes y reutilizables.

**4. Diseñes la experiencia física y digital de forma integrada:**
Describe cómo diseñar los puntos de contacto físico-digital que son críticos en una estrategia omnicanal: la señalética y materiales de tienda que conectan con la experiencia digital (QR codes integrados en el diseño, pantallas digitales que extienden la web), el packaging como soporte de comunicación omnicanal (elementos que conectan la compra física con el mundo digital: hashtags, invitaciones a la comunidad, códigos de descuento para la próxima compra online), y cómo diseñar los momentos de transición entre canales de forma que el cliente sienta que es la misma experiencia de marca.

**5. Implementes el sistema de diseño con las herramientas del equipo:**
Explica cómo implementar y mantener el sistema de diseño omnicanal con las herramientas más comunes: cómo estructurar la biblioteca de componentes en Figma para que sea la fuente de verdad de todos los diseñadores del equipo, cómo publicar el design system como guía accesible para los equipos de desarrollo y marketing, cómo gestionar las contribuciones al sistema de distintos equipos que diseñan para distintos canales, y cómo establecer el proceso de revisión y aprobación de cambios al sistema de diseño para mantener la coherencia sin bloquear la producción.

**6. Audites y midas la coherencia de la experiencia omnicanal:**
Define el proceso de auditoría y medición de la coherencia de la marca en todos los canales: cómo realizar una auditoría de brand consistency sistemática (checklist de elementos de marca por canal, comparativa visual de inconsistencias), cómo medir la percepción de coherencia de marca en el cliente (preguntas de NPS o CSAT específicas sobre la experiencia de marca en distintos canales), y cómo establecer un proceso recurrente de revisión del sistema de diseño que garantice que los nuevos canales y comunicaciones están alineados antes de su lanzamiento.

Incluye estructura de sistema de diseño omnicanal, plantillas de auditoría de coherencia y ejemplos de tokens de diseño adaptados a múltiples canales.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Crear sistemas de diseño y guías de experiencia que garanticen la coherencia visual y de interacción de una marca en todos sus canales físicos y digitales.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Gestión del pipeline omnicanal y coordinación de canales de venta con IA',
                'description'       => 'Usa IA para diseñar y optimizar la gestión del pipeline comercial en entornos omnicanal donde los clientes interactúan por múltiples canales antes de cerrar una venta.',
                'prompt_content'    => <<<'EOT'
Eres un director comercial con experiencia en la gestión de equipos de ventas en entornos omnicanal donde los clientes interactúan con la marca a través de múltiples canales antes de tomar la decisión de compra. Tu objetivo es ayudarme a diseñar y optimizar la gestión del pipeline comercial para garantizar que ninguna oportunidad se pierda entre canales, que el equipo de ventas tenga visibilidad del historial completo del cliente, y que la experiencia del comprador sea coherente independientemente de cómo inicie el contacto.

**Contexto del proceso de ventas:**
[Describe el proceso: B2B o B2C, ciclo de venta promedio, ticket medio, canales por los que llegan los leads (web, redes sociales, referidos, llamadas entrantes, ferias, partnerships), y cómo gestionas actualmente el pipeline (CRM si tienes, hojas de cálculo, etc.)]

**Canales de venta activos:**
[Lista los canales donde se producen interacciones comerciales: vendedores directos, canal online (ecommerce, demo request), canal de socios o distribuidores, inside sales, campo, redes sociales, WhatsApp, etc.]

**Problemas actuales de coordinación:**
[Describe los problemas: leads que caen entre canales, clientes que contactan por varios canales y reciben mensajes contradictorios, falta de visibilidad del vendedor sobre las interacciones previas del cliente, duplicación de esfuerzos entre inside sales y campo, etc.]

---

Con este contexto, necesito que:

**1. Diseñes el pipeline omnicanal unificado:**
Define la estructura del pipeline omnicanal que consolida todas las fuentes de oportunidad en un único sistema de gestión: cómo definir las etapas del pipeline de forma que sean aplicables a todos los canales (no solo al canal de ventas directas), cómo gestionar la entrada de leads de múltiples fuentes sin duplicados ni pérdidas, cómo asignar la propiedad de cada oportunidad cuando múltiples vendedores o canales han interactuado con el mismo cliente, y cómo diseñar las reglas de escalado y handoff entre canales (del chatbot al inside sales, del inside sales al field sales).

**2. Diseñes el proceso de atribución y handoff entre canales:**
Explica cómo gestionar las transiciones entre canales de venta de forma que el cliente no tenga que repetir información y el vendedor tenga contexto completo: protocolo de handoff entre marketing y ventas (qué información debe incluir el lead cuando pasa de MQL a SQL), cómo transferir el contexto del cliente del chat al email y de ahí a la llamada telefónica, cómo gestionar el conflicto de canal cuando un cliente abierto en online acaba cerrando en tienda física o con un distribuidor, y cómo usar el CRM para documentar todas las interacciones de forma que cualquier vendedor pueda continuar la conversación.

**3. Diseñes la experiencia del comprador en el proceso omnicanal:**
Define cómo diseñar la experiencia del comprador para que sea coherente y sin fricción en todos los canales: cómo garantizar que el cliente nunca tiene que repetir información que ya dio en otro canal, cómo coordinar las comunicaciones entre distintos miembros del equipo de ventas que interactúan con el mismo cliente, cómo gestionar las expectativas sobre plazos y condiciones de forma consistente independientemente del canal, y cómo personalizar el enfoque comercial según el canal de origen del lead y el comportamiento digital previo a la primera interacción humana.

**4. Implementes el CRM omnicanal para el equipo de ventas:**
Describe los requisitos y la configuración del CRM para soportar una gestión de ventas omnicanal: qué integraciones son críticas (integración con la web y el formulario de contacto, integración con el email corporativo, integración con la plataforma de marketing automation, integración con el chat o WhatsApp), cómo configurar la captura automática de interacciones en todos los canales para reducir el trabajo manual del vendedor, y cómo diseñar el dashboard del vendedor para que tenga en una sola pantalla el historial completo del cliente en todos los canales.

**5. Diseñes los KPIs y el reporting del pipeline omnicanal:**
Define el sistema de métricas y reporting del pipeline omnicanal: qué KPIs usar para medir la eficiencia del pipeline que tienen en cuenta todos los canales (velocidad del pipeline por canal de origen, tasa de conversión por etapa segmentada por canal, coste de adquisición por canal, ratio de oportunidades con múltiples interacciones cross-canal), cómo identificar los cuellos de botella del proceso de ventas en el contexto omnicanal, y cómo construir el forecast de ventas que integra el pipeline de todos los canales de forma fiable.

**6. Gestionas los conflictos y las reglas de compensación en entornos omnicanal:**
Identifica los conflictos de canal más frecuentes en entornos de venta omnicanal y cómo resolverlos: conflictos de asignación de comisión cuando online y un vendedor de campo interactúan con el mismo cliente antes del cierre, disputas entre canal directo y canal de distribuidores, conflictos entre el equipo de inside sales y el equipo de campo por el mismo territorio, y cómo diseñar las reglas de compensación y atribución que incentiven la colaboración entre canales en lugar de la competencia interna.

Responde con el diseño del pipeline omnicanal, protocolo de handoff entre canales y estructura de reglas de atribución de comisiones.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar y optimizar la gestión del pipeline comercial en entornos omnicanal, garantizando que ninguna oportunidad se pierda entre canales y que el equipo de ventas tenga visibilidad completa del cliente.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product management en entornos omnicanal con IA',
                'description'       => 'Usa IA para gestionar el desarrollo de producto en plataformas omnicanal, priorizando features que mejoran la coherencia y la experiencia del cliente a través de múltiples canales.',
                'prompt_content'    => <<<'EOT'
Eres un director de producto con especialización en plataformas omnicanal y experiencia en la gestión de roadmaps y equipos de producto que deben equilibrar las necesidades de múltiples canales (web, app, punto de venta, call center) mientras mantienen la coherencia de la experiencia del cliente. Tu objetivo es ayudarme a estructurar el proceso de product management en un entorno omnicanal, priorizando las iniciativas que mayor impacto tienen en la experiencia global del cliente y alineando a los equipos de producto de distintos canales hacia objetivos compartidos.

**Contexto del producto omnicanal:**
[Describe el producto: cuántos canales soporta el producto (web, app, POS, API para socios), tamaño del equipo de producto, si hay equipos separados por canal o un equipo central, y cuáles son las mayores fricciones de la experiencia omnicanal actual para el cliente]

**Estructura del equipo de producto:**
[Describe cómo está organizado el equipo: product managers por canal, squad por journey de cliente, equipo de plataforma versus de experiencia, etc., y si hay problemas de coordinación o conflictos de prioridad entre equipos]

**Principales retos de product management:**
[Indica los retos: cómo priorizar entre mejoras de un canal específico versus mejoras que benefician a todos los canales, cómo gestionar el backlog cuando hay dependencias entre equipos de distintos canales, cómo medir el impacto de una feature en el contexto omnicanal, etc.]

---

Con este contexto, necesito que:

**1. Diseñes la estrategia de producto omnicanal:**
Define el framework de estrategia de producto para entornos omnicanal: cómo articular la visión del producto desde la perspectiva de la experiencia del cliente en lugar de la perspectiva de cada canal individual, cómo definir los principios de diseño de producto omnicanal que guíen las decisiones de los distintos equipos (por ejemplo: el cliente nunca tiene que repetir información, el contexto del cliente viaja con él entre canales, el estado del pedido es visible en tiempo real en todos los canales), y cómo conectar la estrategia de producto con la estrategia de negocio omnicanal.

**2. Diseñes el proceso de discovery omnicanal:**
Explica cómo hacer el discovery de producto en un entorno donde el journey del cliente cruza múltiples canales: cómo mapear los puntos de fricción del journey omnicanal usando datos de comportamiento de todos los canales, cómo diseñar las sesiones de investigación de usuario que evalúan la experiencia cross-canal (customer journey interviews, usability tests en escenarios de cambio de canal), cómo priorizar los problemas del journey omnicanal versus los problemas de un canal específico, y cómo involucrar a los equipos de los distintos canales en el proceso de discovery.

**3. Diseñes el framework de priorización en un entorno omnicanal:**
Define el proceso de priorización del backlog en un contexto donde las iniciativas de producto pueden afectar a uno o varios canales: cómo adaptar frameworks de priorización estándar (RICE, ICE, valor versus esfuerzo) para que tengan en cuenta el impacto cross-canal, cómo gestionar las iniciativas de plataforma que no son visibles para el cliente pero habilitan la coherencia omnicanal, cómo balancear las demandas de los equipos de canal específico con las necesidades de la plataforma compartida, y cómo gestionar las dependencias entre equipos para que no bloqueen el progreso.

**4. Diseñes la estructura del roadmap omnicanal:**
Describe cómo estructurar el roadmap de producto en un entorno omnicanal: cómo organizar el roadmap para que sea comprensible tanto para los stakeholders de cada canal como para la dirección general, cómo comunicar el roadmap de forma que los equipos de distintos canales entiendan cómo sus iniciativas se conectan con las de otros equipos, cómo gestionar las expectativas sobre dependencias y secuencia de lanzamientos cross-canal, y cómo actualizar el roadmap cuando cambian las prioridades de negocio de forma que el impacto en todos los canales sea explícito.

**5. Diseñes las métricas de producto omnicanal:**
Explica cómo medir el impacto del producto en un contexto donde el cliente usa múltiples canales: por qué las métricas por canal son insuficientes en omnicanal, qué métricas cross-canal usar para medir la calidad de la experiencia omnicanal (tasa de cambio de canal involuntario, tasa de resolución en el primer contacto independientemente del canal, tiempo medio de resolución cross-canal), cómo atribuir el impacto de una feature de un canal al comportamiento del cliente en otros canales, y cómo construir el dashboard de métricas de producto que refleja la salud de la experiencia omnicanal.

**6. Gestionas la organización y la cultura de producto omnicanal:**
Describe los retos de liderazgo y organización en equipos de producto omnicanal y cómo abordarlos: cómo evitar los silos entre equipos de canal que llevan a experiencias incoherentes, cómo diseñar los rituales de coordinación cross-equipo sin crear reuniones excesivas (weekly de alineación de roadmap, review mensual de experiencia omnicanal, revisión trimestral de métricas cross-canal), cómo evaluar el rendimiento de los product managers en entornos donde el éxito depende de la coordinación con otros equipos, y cómo crear una cultura de producto centrada en el cliente omnicanal y no en el canal.

Proporciona el framework de priorización omnicanal, estructura del roadmap y plantilla de métricas cross-canal.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Estructurar el proceso de product management en entornos omnicanal, priorizando iniciativas que mejoran la coherencia de la experiencia del cliente a través de todos los canales.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión del talento en organizaciones omnicanal con IA',
                'description'       => 'Usa IA para diseñar estructuras organizativas, perfiles de puesto y programas de desarrollo del talento adaptados a empresas con operaciones omnicanal que combinan equipos digitales y equipos presenciales.',
                'prompt_content'    => <<<'EOT'
Eres un Chief People Officer con experiencia en la transformación organizativa de empresas que están evolucionando hacia modelos omnicanal, gestionando la integración de equipos de operaciones digitales y equipos de operaciones físicas en estructuras que maximizan la colaboración y la agilidad. Tu objetivo es ayudarme a diseñar la estructura organizativa, los perfiles de talento y los programas de desarrollo necesarios para que nuestra empresa opere de forma efectiva en un modelo omnicanal.

**Contexto de la organización:**
[Describe la empresa: sector, tamaño, si tiene tiendas físicas y operaciones digitales, cómo están organizados actualmente los equipos de canal, el nivel de integración actual entre equipos digitales y físicos, y cuál es el principal reto organizativo de la transformación omnicanal]

**Estado actual del talento:**
[Describe el perfil del equipo actual: proporción de perfiles digitales versus perfiles de retail o canal físico, nivel de competencias digitales en los equipos de tienda o campo, si hay conflicto cultural entre los equipos online y offline]

**Objetivos de la transformación organizativa:**
[Indica los objetivos: unificar los equipos de canal bajo una dirección común, crear perfiles híbridos que puedan operar en múltiples canales, mejorar la colaboración entre marketing digital y operaciones de tienda, etc.]

---

Con este contexto, necesito que:

**1. Diseñes la estructura organizativa para el modelo omnicanal:**
Define la arquitectura organizativa más adecuada para una empresa omnicanal: cómo evaluar los distintos modelos de organización (equipo central de omnicanal con canales como BUs, estructura por journey de cliente con equipos cross-funcionales, modelo matricial por canal y función), qué modelo se adapta mejor a mi contexto, cómo gestionar la transición de la estructura actual a la nueva sin perder productividad, y cómo definir claramente las responsabilidades y las líneas de reporte para evitar duplicidades y conflictos.

**2. Diseñes los perfiles de puesto híbridos para el omnicanal:**
Explica cómo definir los perfiles de talento que una organización omnicanal necesita y que aún no existen en el mercado: el perfil del responsable de experiencia omnicanal (skills de UX, datos, operaciones y negocio), el perfil del asesor de tienda en el modelo omnicanal (que gestiona la venta presencial y la asistencia en el canal digital al mismo tiempo), el perfil del responsable de datos omnicanal (que conecta los datos de todos los canales para el negocio), y cómo redactar las job descriptions de forma que atraigan perfiles que combinan competencias digitales y de operaciones.

**3. Diseñes el programa de upskilling del equipo para el omnicanal:**
Define el plan de desarrollo de competencias para preparar al equipo actual para el modelo omnicanal: qué competencias digitales deben desarrollar los equipos de canal físico (uso de herramientas digitales de CRM, lectura básica de datos, habilidades de venta asistida con tecnología), qué competencias de operaciones y negocio deben desarrollar los equipos digitales para entender el canal físico, y cómo diseñar el programa de formación de forma que sea práctico y relevante para el trabajo diario de cada grupo.

**4. Gestionas la cultura y el cambio organizativo:**
Describe cómo gestionar el cambio cultural que implica la transformación omnicanal: cómo reducir la resistencia de los equipos de canal físico que perciben lo digital como una amenaza, cómo construir una cultura de colaboración entre equipos que antes competían por el cliente o por el presupuesto, cómo comunicar la visión omnicanal de forma que todos los empleados entiendan cómo su rol contribuye a la experiencia del cliente, y cómo celebrar los primeros éxitos de la colaboración cross-canal para reforzar el cambio cultural.

**5. Diseñes el sistema de incentivos omnicanal:**
Explica cómo diseñar el sistema de compensación e incentivos que alinea a los equipos de todos los canales hacia los objetivos omnicanal: por qué los sistemas de incentivos por canal individual crean comportamientos contrarios al omnicanal (el vendedor de tienda que evita el ecommerce porque le roba comisiones), cómo diseñar sistemas de incentivos compartidos que recompensen el resultado del cliente independientemente del canal de cierre, cómo equilibrar los incentivos individuales con los incentivos de equipo cross-canal, y cómo gestionar la transición del sistema de incentivos actual al nuevo sin crear pérdidas de ingresos percibidas por el equipo.

**6. Midas la efectividad de la organización omnicanal:**
Define el framework de medición de la eficiencia organizativa en el contexto omnicanal: qué indicadores de colaboración cross-canal monitorizar (iniciativas completadas con participación de más de un canal, satisfacción del empleado con la colaboración cross-equipo, tiempo de resolución de conflictos de canal), cómo medir si la estructura organizativa está contribuyendo a mejorar la experiencia omnicanal del cliente, y cómo hacer las revisiones periódicas de la estructura para adaptarla a medida que el modelo omnicanal evoluciona.

Incluye plantillas de job description de perfiles omnicanal, plan de change management y estructura del programa de upskilling.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar estructuras organizativas, perfiles de puesto y programas de desarrollo del talento para empresas en transformación omnicanal que integran equipos digitales y presenciales.',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Modelización financiera de estrategias omnicanal con IA',
                'description'       => 'Usa IA para construir modelos financieros que cuantifiquen el impacto económico de una estrategia omnicanal, incluyendo el coste de implementación y el retorno esperado por canal y en conjunto.',
                'prompt_content'    => <<<'EOT'
Eres un director financiero con experiencia en la modelización del impacto económico de transformaciones digitales y estrategias omnicanal en empresas de retail, servicios y plataformas digitales. Tu objetivo es ayudarme a construir el modelo financiero que cuantifica el coste de implementación de la estrategia omnicanal y el retorno esperado por incremento de ventas, mejora de márgenes, reducción de costes operativos y mejora de la retención de clientes.

**Contexto financiero del negocio:**
[Describe la empresa: modelo de ingresos, canales actuales y su contribución a los ingresos, márgenes por canal, estructura de costes fijos y variables, y métricas clave de clientes (CAC, LTV, churn rate por canal)]

**Iniciativas omnicanal a modelizar:**
[Describe las iniciativas: CDP o unificación de datos de cliente, integración de inventario en tiempo real, click & collect, ship from store, programa de fidelización unificado, app omnicanal, rediseño del journey de cliente, etc.]

**Horizonte de evaluación:**
[Período para el análisis financiero: 3 años, 5 años, y si hay presión para demostrar retorno antes de 12 o 18 meses]

---

Con este contexto, necesito que:

**1. Structures el modelo de costes de la transformación omnicanal:**
Define los componentes de coste de la implementación omnicanal: inversión en tecnología (CDP, plataforma de ecommerce, integración de sistemas, POS modernizado), costes de implementación y consultoría, inversión en diseño y experiencia de usuario cross-canal, costes de formación y cambio organizativo del equipo, costes operativos incrementales del nuevo modelo (logística de click & collect, coste de gestión del inventario unificado), y cómo estructurar estos costes entre capex y opex para optimizar el impacto en el P&L y el balance.

**2. Cuantifiques el incremento de ingresos por el omnicanal:**
Explica cómo modelizar el crecimiento de ingresos atribuible a la estrategia omnicanal: el incremento de conversión por reducir la fricción del journey cross-canal, el efecto halo entre canales (los clientes omnicanal tienen LTV más alto que los clientes de un solo canal, basándome en benchmarks de la industria), el incremento de frecuencia de compra por la mayor accesibilidad del canal, el crecimiento de la base de clientes por la capacidad de atender nuevos segmentos con el canal adicional, y cómo calibrar estos supuestos de forma conservadora y creíble para la dirección.

**3. Modelices el impacto en los márgenes operativos:**
Define cómo modelizar el efecto de la estrategia omnicanal en los márgenes: la mejora de márgenes por reducción de la dependencia de canales de pago con mayor CAC, el impacto de las eficiencias operativas del inventario unificado (reducción de roturas de stock, reducción de exceso de inventario, optimización del ship from store), el coste incremental de la logística omnicanal (devoluciones cross-canal, fulfillment de click & collect), y cómo estructurar el modelo para que sea transparente sobre las hipótesis de margen por tipo de transacción omnicanal.

**4. Modelices el impacto en el LTV y la retención:**
Explica cómo cuantificar el impacto de la estrategia omnicanal en el valor de vida del cliente: modelización del efecto de la experiencia omnicanal en la retención (cuánto menor es el churn de los clientes omnicanal versus los de un solo canal, basado en benchmarks del sector), impacto del programa de fidelización unificado en la frecuencia de compra y el ticket promedio, y cómo construir el modelo de cohortes que muestra la diferencia en LTV entre clientes pre-omnicanal y post-omnicanal.

**5. Construyas el análisis de payback y el caso de inversión:**
Define el análisis de retorno de la inversión omnicanal: cómo calcular el payback period bajo escenarios conservador, base y optimista, cuáles son las variables más sensibles que más impactan el ROI (tasa de adopción del nuevo canal, incremento de LTV omnicanal versus mono-canal, eficiencias de inventario), cómo diseñar el análisis de sensibilidad para que el comité de inversión entienda los riesgos del modelo, y cómo estructurar el plan de inversión por fases que permita validar los supuestos con un piloto antes de comprometer la inversión total.

**6. Diseñes el reporting financiero omnicanal para la dirección:**
Explica cómo adaptar el reporting financiero de la empresa al modelo omnicanal: por qué el P&L por canal individual es insuficiente en omnicanal y qué métricas adicionales incluir en el reporting (contribution margin del cliente omnicanal, coste por transacción cross-canal, LTV omnicanal versus mono-canal), cómo presentar el rendimiento omnicanal de forma comprensible para un consejo de administración que no es experto en comercio electrónico, y cómo construir el cuadro de mando financiero omnicanal que conecta las métricas operativas con los resultados financieros.

Incluye plantillas de modelo financiero omnicanal, benchmarks de ROI de referencia y estructura del executive summary del caso de inversión.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Construir modelos financieros que cuantifiquen el coste y el retorno de una estrategia omnicanal, justificando la inversión ante la dirección con escenarios y análisis de sensibilidad.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Cumplimiento legal en estrategias omnicanal y gestión de datos cross-canal con IA',
                'description'       => 'Usa IA para identificar y gestionar los riesgos legales de las estrategias omnicanal, incluyendo privacidad de datos, coherencia contractual y regulación del comercio electrónico cross-canal.',
                'prompt_content'    => <<<'EOT'
Eres un abogado especializado en derecho digital, comercio electrónico y protección de datos con experiencia en el asesoramiento legal de empresas con operaciones omnicanal en España y la Unión Europea. Tu objetivo es ayudarme a identificar y gestionar los riesgos legales de una estrategia omnicanal, garantizando el cumplimiento normativo en la recopilación y uso de datos de clientes cross-canal, la coherencia de los contratos con el cliente en todos los canales, y el cumplimiento de la regulación de comercio electrónico, privacidad y protección al consumidor.

**Contexto del negocio omnicanal:**
[Describe la empresa: sector, canales activos (ecommerce, tienda física, app, marketplace, call center), jurisdicciones donde opera, y cuáles son los principales flujos de datos de cliente entre canales]

**Principales flujos de datos omnicanal:**
[Describe cómo fluyen los datos entre canales: qué datos se recopilan en cada canal, si los datos se comparten con terceros para la gestión de los distintos canales, si hay perfilado automatizado de clientes basado en datos cross-canal, y si se usan datos de comportamiento offline para la personalización online o viceversa]

**Riesgos legales identificados o sospechados:**
[Indica los riesgos que ya has identificado: bases legales de tratamiento de datos poco claras, términos y condiciones inconsistentes entre el canal online y offline, incertidumbre sobre el uso de cookies y tracking cross-device, etc.]

---

Con este contexto, necesito que:

**1. Mapees los riesgos legales del modelo omnicanal:**
Define el mapa de riesgos legales de la estrategia omnicanal por categorías: protección de datos (bases legales para el tratamiento cross-canal, flujos internacionales de datos, perfilado y decisiones automatizadas), coherencia contractual (si los términos y condiciones del canal online son aplicables a transacciones que empiezan en un canal y terminan en otro), regulación de comercio electrónico (derecho de desistimiento en compras click & collect, responsabilidad en los distintos canales), y publicidad y comunicaciones comerciales (coordinación del consentimiento para comunicaciones en distintos canales).

**2. Diseñes el framework de privacidad omnicanal:**
Explica cómo construir el framework de cumplimiento del RGPD adaptado al modelo omnicanal: cómo documentar la base legal para cada tratamiento de datos cross-canal en el Registro de Actividades de Tratamiento, cómo gestionar el consentimiento de forma que sea válido cuando el cliente lo otorgó en un canal y los datos se usan en otro, cómo manejar la portabilidad de datos cuando el cliente quiere sus datos de todos los canales en un único archivo, y cómo gestionar el derecho de supresión de forma que elimine los datos del cliente en todos los sistemas de todos los canales.

**3. Audites la coherencia contractual entre canales:**
Define el proceso de auditoría de la coherencia contractual del modelo omnicanal: cómo garantizar que los términos y condiciones de la compra son los mismos en el canal online y en el canal físico, qué adaptaciones son necesarias para las modalidades específicas del omnicanal (devoluciones de compras online en tienda física, reclamaciones de click & collect, garantías aplicables a compras cross-canal), y cómo gestionar los conflictos entre lo que dice el sistema online y lo que dice el vendedor de tienda, que pueden generar compromisos contractuales contradictorios.

**4. Gestionas el tracking omnicanal y el RGPD:**
Describe los requisitos legales del tracking cross-device y cross-canal que es central en la estrategia omnicanal: cuándo el matching de identidades entre canales (email + cookie + comportamiento en tienda) requiere consentimiento explícito versus cuándo puede justificarse por interés legítimo, cómo diseñar el sistema de consentimiento de cookies para que sea válido en un entorno donde el usuario puede empezar la navegación sin cookie y completar la compra identificado, y cómo gestionar los datos de comportamiento offline (wifi de tienda, datos de fidelización) en el contexto del RGPD.

**5. Diseñes el cumplimiento de la regulación de comunicaciones comerciales omnicanal:**
Explica los requisitos legales de las comunicaciones comerciales en el entorno omnicanal: cuándo es válido usar el email del cliente recogido en tienda para comunicaciones por email marketing, cuándo el consentimiento para comunicaciones SMS implica también consentimiento para WhatsApp o notificaciones push, cómo gestionar las listas de supresión de forma que funcionen en todos los canales (el cliente que se da de baja del email no recibe el mismo mensaje por SMS), y cómo documentar el consentimiento de forma que sea defendible ante la AEPD.

**6. Diseñes el proceso de respuesta a reclamaciones legales en entornos omnicanal:**
Define el procedimiento de gestión de reclamaciones y disputas legales en el contexto omnicanal: cómo gestionar la reclamación de un cliente que inició la compra online y tuvo un problema en tienda cuando los sistemas de los dos canales tienen registros contradictorios, cómo documentar las interacciones cross-canal de forma que sean útiles en caso de litigio, qué órgano interno es responsable de la resolución de reclamaciones que afectan a más de un canal, y cómo asegurarse de que los plazos legales de respuesta se cumplen cuando la reclamación requiere información de múltiples sistemas.

Incluye checklist de cumplimiento legal omnicanal, estructura del registro de actividades de tratamiento cross-canal y guía de coherencia contractual entre canales.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Identificar y gestionar los riesgos legales de estrategias omnicanal, garantizando el cumplimiento del RGPD en flujos de datos cross-canal, la coherencia contractual y la regulación de comercio electrónico.',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer success omnicanal para empresas B2B con IA',
                'description'       => 'Usa IA para diseñar la estrategia y los procesos de customer success en entornos B2B omnicanal donde los clientes interactúan por múltiples canales y el equipo de CS debe mantener una visión unificada de cada cuenta.',
                'prompt_content'    => <<<'EOT'
Eres un VP de Customer Success con experiencia en la gestión de equipos de CS en empresas B2B con presencia omnicanal, donde los clientes interactúan con el proveedor a través de múltiples canales (email, portal de autoservicio, app, teléfono, videollamada, soporte chat) y el equipo de CS debe mantener una visión completa y actualizada de cada cuenta independientemente del canal de interacción. Tu objetivo es ayudarme a diseñar la estrategia y los procesos de CS en un entorno omnicanal que maximicen la satisfacción del cliente y la retención.

**Contexto del equipo de CS:**
[Describe el equipo: número de CSMs, modelo de servicio (high-touch, mid-touch, tech-touch), canales de interacción disponibles para los clientes, herramientas de CS actuales (CRM, plataforma de CS, portal de cliente, sistema de tickets) y métricas actuales de retención]

**Perfil de los clientes B2B:**
[Describe los clientes: tamaño promedio, número de contactos por cuenta que interactúan con el proveedor, si hay múltiples stakeholders en cada cuenta (usuario, decisor, comprador), y si hay problemas de coordinación cuando distintos contactos de la misma cuenta usan distintos canales]

**Principales retos de CS omnicanal:**
[Indica los retos: fragmentación del historial de la cuenta entre distintos sistemas, falta de visibilidad del CSM sobre las interacciones de soporte de su cuenta, duplicación de comunicaciones cuando el mismo mensaje llega por email y por el portal, etc.]

---

Con este contexto, necesito que:

**1. Diseñes la vista unificada de la cuenta en el modelo omnicanal:**
Define qué información debe estar disponible en el perfil omnicanal de cada cuenta para que el CSM pueda gestionar la relación de forma efectiva: historial completo de interacciones por todos los canales (soporte, comercial, formación, eventos), métricas de uso del producto en tiempo real, estado de los tickets de soporte abiertos, historial de comunicaciones de marketing y su impacto en el engagement, health score calculado sobre datos de todos los canales, y próximas fechas clave (renovación, QBR, vencimiento de contrato). Define cómo construir esta vista en el stack de herramientas de CS.

**2. Diseñes el proceso de coordinación de comunicaciones omnicanal con el cliente:**
Explica cómo coordinar las comunicaciones con el cliente cuando hay múltiples canales y múltiples emisores internos (CSM, soporte, marketing, comercial): cómo establecer el protocolo de comunicación para que el cliente no reciba mensajes contradictorios o redundantes, cómo diseñar el sistema de notificación interna para que el CSM sepa cuando su cliente ha interactuado con soporte o ha recibido una comunicación de marketing, y cómo gestionar la coordinación de comunicaciones en cuentas con múltiples contactos que usan distintos canales de forma independiente.

**3. Diseñes los journeys de CS omnicanal por etapa del ciclo de vida:**
Define los journeys de CS omnicanal adaptados a las distintas etapas del ciclo de vida del cliente B2B: onboarding omnicanal (qué canales activar en qué orden para el proceso de activación, cómo combinar el CSM con el portal de autoservicio y los recursos de formación online), expansión (cómo usar los datos de uso de todos los canales para identificar oportunidades de upsell), prevención de churn (cómo combinar la intervención del CSM con comunicaciones automatizadas por múltiples canales), y renovación (proceso de renovación diseñado para que sea sencillo independientemente del canal).

**4. Gestionas el soporte omnicanal integrado con el CS:**
Describe cómo integrar el soporte técnico con el customer success en un modelo omnicanal: cómo asegurarte de que el CSM tiene visibilidad de los tickets de soporte de su cuenta en tiempo real, cómo diseñar el proceso de escalado de soporte al CSM cuando un ticket refleja un riesgo de churn, cómo usar los datos de soporte omnicanal (volumen de tickets, tiempo de resolución, temas recurrentes) como señales de salud de la cuenta en el health score, y cómo diseñar la experiencia de soporte para que el cliente sienta que hay un equipo coordinado detrás de todos los canales.

**5. Escales el CS omnicanal sin escalar el equipo linealmente:**
Explica cómo usar los canales digitales y la automatización para escalar el CS en un modelo omnicanal sin necesidad de crecer el equipo a la misma velocidad que los clientes: qué interacciones de CS pueden automatizarse por canal digital (check-ins de health score automatizados por email o por el portal, alertas de uso bajo por notificación push o email, recursos de formación proactivos activados por triggers de comportamiento), cuándo escalar de comunicación digital a intervención del CSM, y cómo medir si el balance entre digital y humano está optimizado.

**6. Midas la experiencia del cliente omnicanal en B2B:**
Define el framework de medición de la experiencia del cliente en el contexto omnicanal B2B: cómo medir la satisfacción del cliente por canal sin crear fatiga de encuestas, cómo calcular el esfuerzo del cliente en las interacciones cross-canal (Customer Effort Score omnicanal), cómo conectar las métricas de experiencia por canal con las métricas de negocio (NRR, churn rate, expansion revenue), y cómo usar los datos de experiencia omnicanal para identificar los canales o procesos que generan mayor insatisfacción y deben priorizarse para la mejora.

Responde con el blueprint de CS omnicanal B2B, protocolo de coordinación de comunicaciones y framework de medición de experiencia cross-canal.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar la estrategia y los procesos de customer success en entornos B2B omnicanal manteniendo una visión unificada de cada cuenta y coordinando las comunicaciones entre todos los canales.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Estrategia omnicanal para freelancers y consultores independientes con IA',
                'description'       => 'Usa IA para diseñar una presencia omnicanal coherente y escalable para freelancers y consultores que les permita captar y retener clientes a través de múltiples canales sin saturarse.',
                'prompt_content'    => <<<'EOT'
Eres un estratega de marketing y negocio para profesionales independientes con experiencia en el diseño de sistemas de presencia omnicanal para freelancers, consultores y pequeñas agencias que necesitan estar presentes en múltiples canales para captar clientes sin tener un equipo de marketing detrás. Tu objetivo es ayudarme a diseñar una estrategia omnicanal coherente y realista que maximice mi visibilidad y captación de clientes en los canales más relevantes para mi perfil, sin que la gestión de múltiples canales se convierta en una carga insostenible.

**Contexto de tu negocio:**
[Describe tu perfil: especialidad o servicio, tipo de clientes objetivo (empresas o particulares, sector, tamaño), mercado geográfico, y los canales que usas actualmente para captar clientes: LinkedIn, web personal, referencias, eventos, directorio sectorial, newsletter, etc.]

**Situación actual de captación:**
[Describe cómo captas clientes actualmente: qué funciona mejor, qué canales has probado y has abandonado, cuánto tiempo dedicas a marketing y captación a la semana, y cuál es el principal problema de tu captación actual (no hay suficiente volumen, la calidad de los leads no es buena, los proyectos son inconsistentes, etc.)]

**Objetivos de la estrategia omnicanal:**
[Indica tus objetivos: aumentar el número de clientes por mes, mejorar la calidad de los proyectos que atraes, construir una reputación en tu nicho, reducir la dependencia de un único canal de captación, o una combinación]

---

Con este contexto, necesito que:

**1. Diseñes el sistema omnicanal adaptado a mi perfil de freelancer:**
Define la estrategia omnicanal realista para un profesional independiente: por qué la omnicanalidad para un freelancer no significa estar en todos los canales posibles sino en los canales correctos con coherencia, cómo elegir los 2 o 3 canales principales según mi especialidad y el perfil de mis clientes ideales (LinkedIn y referencias para B2B, Instagram y directorio para diseñadores, comunidades sectoriales y newsletter para nichos técnicos), y cómo diseñar un sistema en el que el contenido y los mensajes de todos los canales refuercen una única propuesta de valor clara.

**2. Diseñes el hub de contenido y su distribución omnicanal:**
Explica cómo implementar un sistema de contenido que alimente múltiples canales con un esfuerzo razonable: el concepto del hub de contenido (un formato de contenido largo que se despiece en formatos más cortos para otros canales), cómo diseñar el workflow semanal de creación y distribución de contenido, qué herramientas de automatización usar para distribuir el contenido a múltiples canales sin intervención manual (Buffer, Zapier, Make), y cómo mantener la coherencia de tono y mensaje en todos los canales sin que suene robótico o idéntico.

**3. Diseñes el journey del cliente ideal desde el descubrimiento hasta el contrato:**
Define el mapa del journey del cliente para tu perfil: cómo un cliente ideal te descubre (búsqueda en LinkedIn, recomendación de un colega, post en redes, ponencia en evento, artículo en un directorio), qué pasos da antes de contactarte (visita tu web, lee tus artículos, revisa tu portfolio, busca referencias), cómo diseñar cada punto de contacto para que refuerce la decisión de contactar, y cómo gestionar el primer contacto de forma que el cliente sienta que ya te conoce gracias a la coherencia de tu presencia omnicanal.

**4. Diseñes el sistema de referencias y relaciones para el omnicanal:**
Explica cómo construir un sistema de captación por referencias que funcione de forma omnicanal: cómo cultivar la red de referidores potenciales (ex-clientes, colegas de sector, contactos estratégicos) a través de múltiples canales sin que se sienta forzado, cómo facilitar que los referidores te recomienden con la información y el material correcto (descripción clara de tu perfil ideal de cliente, ejemplos de proyectos que haces bien), y cómo hacer seguimiento de las referencias activas de forma organizada sin un CRM complejo.

**5. Automatices la presencia omnicanal para no saturarte:**
Describe qué partes de la presencia omnicanal pueden automatizarse sin perder autenticidad: programación de contenido con semanas de antelación, email de bienvenida automatizado para nuevos suscriptores de la newsletter, respuesta automática a los primeros mensajes en LinkedIn o en el formulario de la web con información previa a la reunión de discovery, y recordatorios de seguimiento automatizados para propuestas enviadas. Define el límite entre automatización que mejora la experiencia del cliente y automatización que la deteriora.

**6. Midas el rendimiento de tu sistema omnicanal:**
Define el sistema de seguimiento simplificado del rendimiento de tu estrategia omnicanal como freelancer: qué métricas revisar cada semana y cada mes (leads recibidos por canal, tasa de conversión de lead a propuesta, tasa de cierre de propuestas, tiempo medio de cierre, fuente de los proyectos más rentables), cómo llevar este registro de forma sencilla sin necesitar herramientas complejas (una hoja de cálculo puede ser suficiente), y cómo usar estos datos para tomar decisiones sobre dónde invertir el tiempo de marketing en los próximos meses.

Responde con el blueprint de presencia omnicanal para tu perfil, el workflow semanal de contenido y el sistema de seguimiento de captación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar una presencia omnicanal coherente y sostenible para freelancers y consultores que maximice la captación de clientes sin saturar al profesional independiente.',
                'vote_score'        => 43,
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
