<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills348Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 — Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de marketing multicanal y omnicanal para marcas',
                'description'      => 'Diseña una estrategia de marketing coherente que integre múltiples canales de distribución del mensaje. El prompt te ayuda a mapear el customer journey omnicanal, asignar roles a cada canal y medir el impacto de cada punto de contacto.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de marketing con experiencia en estrategia omnicanal para marcas de consumo, retail y SaaS. Has diseñado e implementado estrategias de marketing integrado que unifican la experiencia del cliente a través de canales online y offline.

Necesito que me ayudes a diseñar una estrategia de marketing omnicanal para mi marca, asegurando que el mensaje, la experiencia y los datos del cliente sean coherentes en todos los puntos de contacto.

**CONTEXTO DE MI MARCA:**
[Describe tu empresa, sector, público objetivo, canales actuales (web, redes sociales, email, tienda física, marketplaces, canal indirecto), volumen de clientes, presupuesto aproximado de marketing y el objetivo principal de la estrategia (adquisición, retención, expansión de mercado).]

**LO QUE NECESITO:**

1. **Diagnóstico del estado actual de los canales**
   - Propón un framework de auditoría de canales: cómo evaluar la presencia, consistencia y rendimiento de cada canal actual.
   - Define los criterios para identificar qué canales añadir, cuáles potenciar y cuáles reducir o eliminar.
   - Explica cómo detectar las inconsistencias en el mensaje o la experiencia del cliente entre canales (por ejemplo, precios distintos, tono diferente, información contradictoria).

2. **Mapa del customer journey omnicanal**
   - Describe cómo construir un mapa del customer journey omnicanal: desde el primer contacto con la marca hasta la compra recurrente y la recomendación.
   - Identifica los momentos de verdad (touchpoints críticos) donde la coherencia entre canales es más importante.
   - Explica cómo atribuir el impacto de cada canal a lo largo del journey (modelos de atribución: last click, linear, data-driven).

3. **Estrategia por canal y rol de cada uno**
   - Define el rol específico de cada canal en el funnel: conciencia de marca, consideración, conversión, retención, advocacy.
   - Para los canales más comunes (redes sociales, email, SEO/contenido, paid media, canal de ventas directo, canal indirecto/distribuidores), explica cuál es su función óptima y cómo orquestarlos de forma integrada.
   - Propón cómo gestionar la tensión entre canales: cuando el canal online y el offline compiten por el mismo cliente.

4. **Coherencia de mensaje y experiencia de marca**
   - Define los elementos de mensaje que deben ser consistentes en todos los canales: propuesta de valor, tono de voz, visuales, ofertas y precios.
   - Explica cómo crear un "brand playbook" omnicanal que pueda seguir cualquier miembro del equipo o agencia externa.
   - Propón cómo adaptar el mensaje al formato y contexto de cada canal sin perder la coherencia de marca.

5. **Datos del cliente y personalización omnicanal**
   - Explica la importancia de una CDP (Customer Data Platform) para unificar los datos del cliente de todos los canales en un perfil único.
   - Propón cómo usar estos datos para personalizar la comunicación en cada canal según el comportamiento del cliente en los demás.
   - Define qué datos de cliente son prioritarios para empezar a personalizar sin necesidad de una CDP completa.

6. **Medición y optimización de la estrategia omnicanal**
   - Define los KPIs que deben medirse por canal y de forma integrada: share of voice, coste de adquisición por canal, lifetime value por canal de origen, tasa de cross-channel (clientes que interactúan en más de un canal).
   - Propón cómo construir un dashboard de marketing omnicanal que permita ver la contribución de cada canal al resultado global.
   - Explica cómo hacer experimentos de asignación de presupuesto entre canales para optimizar el mix.

7. **Gestión operativa de la estrategia omnicanal**
   - Propón la estructura de equipo y procesos para gestionar una estrategia omnicanal sin silos: cómo coordinar los equipos de cada canal, cómo alinear calendarios editoriales y promocionales.
   - Define las herramientas de gestión de contenido y planificación que facilitan la coordinación entre canales.

8. **Hoja de ruta de 90 días para implementar la estrategia omnicanal**
   - Divide la implementación en tres fases de 30 días: diagnóstico y priorización, quick wins y estructuración, optimización y escalado.

**FORMATO DE RESPUESTA:**
Estructura la respuesta en secciones con headers. Incluye frameworks como matrices de canales, checklists de coherencia y plantillas de calendar editorial integrado. El tono debe ser estratégico y práctico, orientado a un director de marketing que necesita un plan ejecutable.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar e implementar una estrategia de marketing omnicanal coherente',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            // 2 — Desarrollo (Software)
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura técnica para distribución y comercio omnicanal',
                'description'      => 'Diseña la arquitectura de software que soporta una estrategia de distribución omnicanal: sincronización de inventario, gestión de pedidos unificada, integraciones con canales y consistencia de datos en tiempo real.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software senior especializado en comercio electrónico y sistemas omnicanal, con experiencia en el diseño de plataformas que integran canales de venta online (tienda web, marketplace, app móvil) y offline (punto de venta físico, B2B, canal indirecto).

Necesito que me ayudes a diseñar la arquitectura técnica para soportar una estrategia de distribución omnicanal en nuestra plataforma de comercio.

**CONTEXTO TÉCNICO:**
[Describe tu stack tecnológico actual, los canales de distribución que debes integrar, el volumen de transacciones aproximado, si tienes sistema legacy que migrar, el equipo de ingeniería disponible y el plazo del proyecto.]

**LO QUE NECESITO:**

1. **Principios de arquitectura omnicanal**
   - Explica los principios que distinguen una arquitectura omnicanal de una multicanal tradicional: fuente única de verdad (single source of truth), tiempo real, event-driven, API-first.
   - Describe los principales patrones arquitectónicos para omnicanal: monolito modular, microservicios, MACH (Microservices, API-first, Cloud-native, Headless).
   - Explica cuándo cada patrón es apropiado según el tamaño del equipo, el presupuesto y la complejidad del negocio.

2. **Gestión unificada de inventario**
   - Describe el modelo de datos para un sistema de inventario omnicanal: stock global vs. stock por almacén/tienda, reservas en tiempo real, promesas de stock.
   - Explica cómo implementar la sincronización de inventario en tiempo real entre canales sin condiciones de carrera (race conditions).
   - Propón cómo gestionar los casos límite: agotados repentinos, devoluciones de un canal a otro, stock en tránsito.

3. **Order Management System (OMS) centralizado**
   - Explica qué es un OMS y por qué es el componente central de una arquitectura omnicanal.
   - Describe las capacidades clave del OMS: recepción de pedidos de cualquier canal, enrutamiento inteligente de fulfillment (compra online, recoge en tienda; envío desde tienda; fulfillment desde almacén central), gestión de devoluciones cross-channel.
   - Presenta las opciones: OMS propio vs. plataformas comerciales (Fluent Commerce, Kibo, IBM Sterling, Shopify Markets).

4. **Integración de canales de distribución**
   - Describe la estrategia de integración para los canales más comunes: e-commerce propio (Shopify, WooCommerce, Magento), marketplaces (Amazon, El Corte Inglés Online, Miravia), puntos de venta físico (POS: Shopify POS, Lightspeed), canal B2B y distribuidores.
   - Propón un patrón de integración basado en API Gateway o middleware (iPaaS como Zapier, MuleSoft, Boomi) para evitar integraciones punto a punto.
   - Explica cómo gestionar los conflictos de formato de datos entre sistemas legados y la plataforma central.

5. **Datos del cliente unificados (Customer Data Platform)**
   - Describe cómo unificar las identidades del cliente de distintos canales en un perfil único: email como clave principal, cookies first-party, ID de fidelización, teléfono.
   - Explica el modelo de datos de un perfil de cliente omnicanal: historial de compras por canal, comportamiento de navegación, preferencias, segmentos de ML.
   - Propón si construir una CDP propia o usar una plataforma comercial (Segment, mParticle, Adobe Real-Time CDP) y cuándo.

6. **Arquitectura event-driven para tiempo real**
   - Explica por qué una arquitectura event-driven (Kafka, AWS EventBridge, RabbitMQ) es especialmente adecuada para el omnicanal: propagación de cambios de stock, actualizaciones de estado de pedido, personalización en tiempo real.
   - Describe el modelo de eventos principales: OrderPlaced, InventoryUpdated, OrderFulfilled, CustomerIdentified.
   - Propón cómo garantizar la consistencia eventual entre servicios sin bloqueos.

7. **Observabilidad y monitoreo del sistema omnicanal**
   - Define qué métricas técnicas son más críticas en un sistema omnicanal: latencia de sincronización de inventario, tasa de error de integración con canales, tiempo de propagación de cambios de estado de pedido.
   - Propón el stack de observabilidad recomendado: Datadog, New Relic, Grafana + Prometheus, OpenTelemetry.
   - Explica cómo configurar alertas para detectar desincronizaciones de datos entre canales antes de que afecten a los clientes.

8. **Hoja de ruta técnica de implementación**
   - Divide el proyecto en fases: inventario unificado como primera prioridad, OMS centralizado, integración de canales, CDP y personalización.
   - Define los riesgos técnicos y cómo mitigarlos en cada fase.

**FORMATO DE RESPUESTA:**
Estructura la respuesta en secciones con headers técnicos. Incluye diagramas de arquitectura en formato de lista anidada, comparativas de tecnologías y fragmentos de pseudocódigo donde sean útiles. El tono debe ser técnico y preciso, orientado a un equipo de ingeniería que va a implementar el sistema.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar la arquitectura técnica de una plataforma de distribución omnicanal',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            // 3 — Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencia de usuario consistente en múltiples canales de distribución',
                'description'      => 'Aprende a diseñar experiencias de usuario coherentes a lo largo de todos los canales donde el cliente interactúa con la marca: web, app, punto de venta físico, catálogo y atención al cliente. El prompt aborda la consistencia visual, funcional y emocional.',
                'prompt_content'   => <<<'EOT'
Actúa como un UX/UI designer senior especializado en diseño de sistemas y experiencias omnicanal, con experiencia en retail, banca, telecomunicaciones y plataformas digitales que operan simultáneamente en canales web, móvil, punto de venta y asistencia humana.

Necesito que me ayudes a diseñar una experiencia de usuario coherente y satisfactoria a lo largo de todos los canales de distribución de mi empresa. El cliente debe reconocer la misma marca, encontrar la misma información y vivir una experiencia fluida sin importar por dónde interactúe.

**CONTEXTO DE MI EMPRESA:**
[Describe los canales de interacción del cliente con tu empresa (web, app móvil, tienda física, catálogo, email, chat, teléfono), el tipo de producto o servicio, el perfil del cliente principal y los principales puntos de fricción actuales en la experiencia entre canales.]

**LO QUE NECESITO:**

1. **Principios de diseño omnicanal**
   - Explica los principios que rigen una experiencia omnicanal bien diseñada: continuidad (el cliente puede retomar donde lo dejó en otro canal), consistencia (mismas reglas, mismo lenguaje visual), fluidez (las transiciones entre canales son invisibles) y contextualidad (cada canal está optimizado para sus propias capacidades).
   - Para cada principio, proporciona un ejemplo concreto de cómo se aplica en el diseño de la interfaz.

2. **Diseño de sistema de diseño omnicanal (multi-platform design system)**
   - Explica cómo estructurar un design system que funcione en múltiples plataformas: web (desktop y móvil), app nativa (iOS y Android), pantallas de punto de venta, materiales impresos.
   - Define qué elementos del design system son universales (tokens de color, tipografía, espaciado, iconografía) y cuáles se adaptan por plataforma (layout, interacciones, densidad de información).
   - Propón cómo documentar el design system para que tanto diseñadores digitales como diseñadores de retail o de materiales de marketing puedan aplicarlo.

3. **Mapeo de la experiencia omnicanal**
   - Describe cómo construir un service blueprint omnicanal: qué incluir (acciones del cliente, touchpoints por canal, procesos de soporte, sistemas de backend) y cómo usarlo para identificar inconsistencias.
   - Propón cómo priorizar las inconsistencias de UX detectadas: cuáles reparar primero, cuáles son aceptables temporalmente.

4. **Diseño de las transiciones entre canales**
   - Identifica los momentos más comunes de transición entre canales: "ver en web, comprar en tienda", "chatbot a agente humano", "app a soporte telefónico", "tienda física a web para devolución".
   - Para cada transición, propón el diseño de la experiencia que minimice la fricción: qué información debe llevarse de un canal a otro, cómo informar al cliente de sus opciones, cómo el personal de atención accede al contexto del cliente digital.

5. **Diseño para el canal físico: retail y punto de venta**
   - Describe los principios de diseño de la experiencia en tienda que deben ser coherentes con la experiencia digital: señalética, pantallas de punto de venta, materiales de soporte de venta.
   - Explica cómo diseñar la interfaz de la caja o del POS para que el vendedor pueda acceder al historial digital del cliente y ofrecer una experiencia personalizada.
   - Propón cómo integrar elementos digitales en la experiencia física: QR codes, pantallas interactivas, probadores virtuales.

6. **Accesibilidad en contextos omnicanal**
   - Explica cómo garantizar la accesibilidad en todos los canales: WCAG para digital, normas de accesibilidad física para tienda, tipografía y contraste para materiales impresos.
   - Propón cómo diseñar para usuarios con necesidades especiales que pueden usar distintos canales según su situación.

7. **Testing de la experiencia omnicanal**
   - Describe cómo hacer guerrilla testing de la experiencia entre canales: qué escenarios testar, cómo reclutar participantes, qué observar.
   - Propón cómo medir la coherencia de la experiencia entre canales con métricas cuantitativas: NPS por canal, tasas de abandono en transiciones, Customer Effort Score.

8. **Checklist de diseño omnicanal**
   Lista de 15 preguntas de verificación que el equipo de diseño debe responder antes de lanzar cualquier nuevo canal o actualización de la experiencia.

**FORMATO DE RESPUESTA:**
Estructura la respuesta en secciones con headers. Incluye descripciones detalladas de patrones de diseño, ejemplos de copy de interfaz, recomendaciones de herramientas de design system (Figma, Zeroheight, Supernova) y checklists. El tono debe ser práctico y orientado a un diseñador que trabaja en equipo con producto, ingeniería y operaciones de tienda.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar experiencias de usuario coherentes en todos los canales de distribución',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            // 4 — Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Gestión de canales directos e indirectos en estrategias de go-to-market',
                'description'      => 'Aprende a diseñar y gestionar una estrategia de ventas que combine canales directos (fuerza de ventas propia, web) e indirectos (distribuidores, resellers, partners). El prompt aborda la selección, activación y gestión de conflictos entre canales.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP of Sales con experiencia en estrategias de go-to-market que combinan canales directos e indirectos en sectores B2B como software, tecnología industrial, bienes de equipo y servicios profesionales.

Necesito que me ayudes a diseñar o mejorar nuestra estrategia de distribución de ventas, definiendo cuándo vender directamente y cuándo a través de partners o distribuidores, y cómo gestionar la relación y los posibles conflictos entre canales.

**CONTEXTO DE MI EMPRESA:**
[Describe tu producto o servicio, el ticket medio, el ciclo de venta, los clientes objetivo (segmento, geografía, sector), los canales actuales y las principales razones por las que quieres añadir o revisar el canal indirecto.]

**LO QUE NECESITO:**

1. **Marco estratégico: directo vs. indirecto**
   - Explica los factores que determinan cuándo un canal directo es más apropiado y cuándo el canal indirecto genera más valor: complejidad del producto, presencia geográfica, capacidad del equipo comercial propio, necesidad de especialización local, coste de adquisición.
   - Propón una matriz de decisión directo/indirecto que pueda aplicarse a cada segmento de clientes o geografía.
   - Define los modelos de canal indirecto más comunes: reseller, VAR (Value Added Reseller), distribuidor, agente/referral, OEM, y explica cuándo usar cada uno.

2. **Selección y cualificación de partners de canal**
   - Define los criterios de selección de un partner de canal ideal: presencia en el mercado objetivo, complementariedad de cartera, capacidad técnica y comercial, reputación, cultura de partnership.
   - Propón un proceso de cualificación de partners: cómo hacer la prospección, qué preguntar en las primeras reuniones, cómo evaluar el fit estratégico y financiero.
   - Explica cómo estructurar el acuerdo de partnership: qué cláusulas son esenciales (exclusividad o no, territorio, mínimos de ventas, soporte, formación, propiedad de los clientes).

3. **Activación y onboarding de canales**
   - Describe el proceso de onboarding de un nuevo partner: formación en producto, certificación, acceso a herramientas, asignación de un partner manager.
   - Propón qué materiales de habilitación de ventas (sales enablement) debe recibir el canal: presentaciones, demos, casos de éxito, comparativas con competidores, calculadora de ROI.
   - Explica cómo establecer los primeros objetivos de ventas del canal y cómo hacer seguimiento sin ser invasivo.

4. **Gestión del conflicto de canal**
   - Define los tipos de conflicto de canal más comunes: conflicto de territorio (dos partners persiguen al mismo cliente), conflicto directo/indirecto (la fuerza de ventas propia compite con el partner), conflicto de precios (el partner vende más barato que el canal directo).
   - Para cada tipo de conflicto, propón políticas claras y mecanismos de resolución: reglas de registro de oportunidades (deal registration), protección de canal, políticas de precio mínimo (MAP).
   - Explica cómo comunicar estas políticas de forma que los partners las perciban como justas y no arbitrarias.

5. **Incentivación y gestión del rendimiento del canal**
   - Propón un esquema de incentivos para el canal indirecto: márgenes base, descuentos por volumen, bonos por objetivos, incentivos de co-marketing, programas de fidelización.
   - Define cómo medir el rendimiento de cada canal: pipeline generado, win rate, tiempo de ciclo, satisfacción del cliente final.
   - Explica cuándo y cómo desactivar un partner que no rinde o que pone en riesgo la relación con el cliente final.

6. **Herramientas para gestionar el canal**
   - Presenta las herramientas más usadas para la gestión de canales: PRM (Partner Relationship Management) como Salesforce PRM, Impartner, Channeltivity; portales de partners; herramientas de co-marketing.
   - Explica cómo integrar el pipeline del canal con el CRM propio sin perder visibilidad.

7. **Co-marketing y generación de demanda con el canal**
   - Propón un programa de co-marketing con partners: eventos conjuntos, content co-branding, campañas de paid media, development funds (MDF).
   - Explica cómo gestionar los market development funds: quién los aprueba, qué actividades financia, cómo medir el ROI.

8. **Plan de lanzamiento de un nuevo canal indirecto**
   - Diseña un plan de 90 días para lanzar o relanzar el canal indirecto: reclutamiento de primeros partners, onboarding, primera campaña conjunta, revisión de rendimiento.

**FORMATO DE RESPUESTA:**
Organiza la respuesta en secciones con headers. Incluye matrices de decisión, plantillas de acuerdo de partnership, esquemas de incentivos con ejemplos numéricos y checklists de activación. El tono debe ser estratégico y práctico, orientado a un director comercial que necesita construir o escalar el canal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar y gestionar estrategias de ventas directas e indirectas con partners',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            // 5 — Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Estrategia de distribución de producto digital: selección y gestión de canales',
                'description'      => 'Define cómo y dónde distribuir tu producto digital para maximizar el alcance y la conversión. El prompt te ayuda a evaluar canales (marketplaces, API/integrations, resellers, PLG) y diseñar una estrategia de distribución alineada con el ciclo de vida del producto.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Producto con experiencia en estrategias de distribución y go-to-market para productos digitales: SaaS B2B, plataformas de dos caras, APIs y productos con crecimiento liderado por el producto (PLG).

Necesito que me ayudes a definir la estrategia de distribución de mi producto digital: qué canales usar, cómo priorizarlos y cómo estructurar el go-to-market para maximizar el alcance y la adopción.

**CONTEXTO DEL PRODUCTO:**
[Describe tu producto (tipo, público objetivo, modelo de negocio: freemium, suscripción, usage-based), el estado actual de distribución, el tamaño del equipo, el stage de la empresa (early-stage, growth, scale) y los objetivos de crecimiento.]

**LO QUE NECESITO:**

1. **Mapa de canales de distribución para productos digitales**
   - Explica los principales canales de distribución disponibles para un producto digital: ventas directas (outbound, inbound), PLG (freemium, free trial, viral loops), marketplaces (App Store, G2, Salesforce AppExchange, Zapier), integraciones y API (distribución a través de plataformas complementarias), canal indirecto (resellers, agencias, consultoras) y alianzas OEM.
   - Para cada canal, indica el tipo de producto para el que es más efectivo, el coste de adquisición relativo y el tiempo hasta ver resultados.

2. **Selección de canales según el stage del producto**
   - Define qué canales son más apropiados en cada fase del ciclo de vida: early-stage (foco en 1-2 canales para validar), growth (escalar los canales probados, añadir distribución indirecta), scale (diversificación y automatización del canal).
   - Explica los errores más comunes en la selección de canales: distribuirse en demasiados canales a la vez, subestimar el coste de gestionar el canal indirecto, lanzar en marketplaces sin estar listos.

3. **Product-Led Growth (PLG) como canal de distribución**
   - Explica el modelo PLG y cómo el producto se convierte en su propio canal de distribución: freemium, free trial, viralidad inherente al producto, loops de colaboración.
   - Define los indicadores de que un producto es candidato al PLG: facilidad de onboarding sin soporte humano, valor rápido en el primer uso, mecanismo viral natural.
   - Propón cómo diseñar los elementos clave del PLG en el producto: onboarding de autoservicio, paywalls estratégicos, invitaciones a colaboradores, integraciones que amplían el alcance.

4. **Distribución a través de integraciones y API**
   - Explica cómo las integraciones con plataformas líderes de tu mercado (Slack, Salesforce, HubSpot, Notion, Google Workspace) pueden convertirse en canales de distribución.
   - Propón cómo priorizar qué integraciones construir primero: dónde están los usuarios, qué plataformas tienen ecosistemas de partners activos, cuál es el coste de desarrollo vs. el alcance potencial.
   - Describe cómo publicar en marketplaces de integraciones y qué requisitos técnicos y de listing deben cumplirse.

5. **Canal indirecto para productos digitales**
   - Define cuándo tiene sentido añadir un canal de reventa o implementación para un producto digital: cuando el producto requiere configuración o consultoría, cuando el cliente confía más en el partner que en el fabricante, cuando quieres cubrir geografías sin equipo propio.
   - Propón cómo estructurar un programa de partners para producto digital: niveles de partner, requisitos de certificación, soporte técnico, comisiones.
   - Explica el riesgo de dependencia excesiva del canal indirecto y cómo mitigarlo.

6. **Métricas de distribución por canal**
   - Define los KPIs de distribución que deben medirse por canal: CAC (Customer Acquisition Cost), LTV por canal de origen, payback period, tasa de activación y retención por canal, NPS de clientes adquiridos por cada canal.
   - Propón cómo atribuir correctamente el origen del cliente cuando ha interactuado con múltiples canales antes de convertir.
   - Explica cuándo "matar" un canal que no rinde y cómo hacerlo sin perder los clientes ya adquiridos por él.

7. **Coordinación entre Product, Sales y Marketing para la distribución**
   - Define el modelo de responsabilidad de cada equipo en la estrategia de distribución: Producto es responsable de los mecanismos del producto (PLG, integraciones), Marketing es responsable del canal de demanda, Sales del canal directo e indirecto.
   - Propón el ritual de alineación entre los tres equipos: con qué frecuencia reunirse, qué métricas compartir, cómo tomar decisiones de priorización de canal de forma colegiada.

8. **Hoja de ruta de distribución para los próximos 12 meses**
   - Propón una hoja de ruta de distribución por trimestre: qué canales lanzar, qué hitos de adopción alcanzar en cada uno, qué recursos asignar.

**FORMATO DE RESPUESTA:**
Organiza la respuesta en secciones con headers. Incluye matrices de priorización de canales, frameworks de decisión de PLG vs. sales-led, KPIs con valores de referencia y ejemplos concretos de productos digitales que han escalado con cada canal. El tono debe ser estratégico y orientado a un PM que trabaja en estrecha colaboración con ventas y marketing.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Definir la estrategia de distribución y selección de canales para productos digitales',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            // 6 — RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Habilitación de partners y equipos de canal en distribución',
                'description'      => 'Diseña programas de formación, certificación y soporte para los equipos de distribución y partners comerciales. El prompt te ayuda a estructurar el enablement de canal: onboarding, materiales, métricas y gestión del rendimiento.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en Channel Enablement y Learning & Development con experiencia en el diseño de programas de formación y habilitación para equipos de ventas indirectos: distribuidores, resellers, agencias y partners de implementación en sectores tecnológicos e industriales.

Necesito que me ayudes a diseñar un programa de habilitación (enablement) para los partners y equipos de distribución de nuestra empresa, asegurando que tengan el conocimiento, las herramientas y el soporte necesarios para vender y entregar nuestro producto o servicio con excelencia.

**CONTEXTO:**
[Describe el tipo de canal (distribuidores, resellers, agencias, implementadores), el número aproximado de partners, el producto o servicio que venden, el nivel de conocimiento previo de los partners y los principales problemas de rendimiento del canal actual.]

**LO QUE NECESITO:**

1. **Diagnóstico de las necesidades de habilitación del canal**
   - Explica cómo hacer un diagnóstico de las brechas de conocimiento y capacidad del canal: qué evaluar (conocimiento de producto, habilidades de venta, conocimiento del mercado, dominio técnico), cómo evaluarlo (encuestas, mystery shopping, análisis de win/loss).
   - Define los perfiles de partner más comunes y sus necesidades diferenciadas: el vendedor del partner (ventas), el técnico del partner (preventa/implementación) y el gestor del partner (dirección).

2. **Programa de onboarding del partner**
   - Diseña el programa de onboarding para un nuevo partner: qué aprender primero (la empresa, el producto, el pitch de ventas, el proceso de venta conjunta), en qué formato (presencial, online, mentoring con un partner manager) y en qué plazo.
   - Define el hito de "partner habilitado": qué debe saber y demostrar antes de poder vender de forma autónoma.
   - Propón cómo medir la efectividad del onboarding: tiempo hasta la primera venta, calidad de la primera entrega al cliente, satisfacción del partner con el proceso.

3. **Portal y contenidos de enablement**
   - Describe la estructura ideal de un portal de partners: sección de formación (LMS), materiales de ventas, recursos técnicos, novedades de producto, soporte.
   - Define qué contenidos son prioritarios para crear: presentación de producto para el cliente final, playbook de ventas del canal, guía de implementación, FAQ de objeciones, casos de éxito.
   - Explica cómo mantener los contenidos actualizados sin que el portal quede obsoleto en pocas semanas.

4. **Programa de certificación del canal**
   - Propón una estructura de certificación por niveles: certificación básica (conocimiento de producto), avanzada (ventas y consultoría) y especialización (verticales o productos específicos).
   - Define qué formatos son más efectivos para la certificación del canal: e-learning, examen online, role-play evaluado, proyecto piloto.
   - Explica cómo incentivar al partner para que sus equipos obtengan y mantengan la certificación: beneficios por nivel de certificación, renovación anual.

5. **Soporte continuo al canal**
   - Define las modalidades de soporte que debe recibir el canal: soporte técnico (para resolver dudas durante la implementación), soporte de ventas (para oportunidades estratégicas), soporte de marketing (para campañas y generación de demanda).
   - Propón el modelo de partner manager: cuántos partners puede gestionar un PM, qué cadencia de contacto mantener, cómo hacer el seguimiento del rendimiento.
   - Explica cómo escalar el soporte sin crecer el equipo de forma lineal: comunidad de partners, foros, recursos de autoservicio, soporte de nivel 1 desde el portal.

6. **Gestión del rendimiento del canal desde RRHH**
   - Define los KPIs del canal que el equipo de RRHH o enablement debe monitorizar: nivel de certificación de la plantilla del partner, tiempo de finalización del onboarding, uso del portal, NPS del partner, correlación entre nivel de habilitación y resultados de ventas.
   - Propón cómo estructurar la conversación de revisión de rendimiento con el partner: con qué frecuencia, quién participa, qué datos aportar, cómo acordar planes de mejora.

7. **Motivación y engagement del canal**
   - Explica los factores que motivan a los equipos de canal a priorizar tu producto sobre los de la competencia: conocimiento del producto (se vende lo que se conoce), confianza en el soporte, oportunidad de negocio percibida, relación personal con el partner manager.
   - Propón iniciativas de engagement: eventos de partner (kick-off anual, webinars mensuales), reconocimiento (awards de canal, casos de éxito publicados), acceso prioritario a nuevas funcionalidades.

**FORMATO DE RESPUESTA:**
Organiza la respuesta en secciones con headers. Incluye estructuras de programa de onboarding y certificación, plantillas de contenido de portal, checklists y KPIs con valores de referencia. El tono debe ser práctico y orientado a un profesional de L&D o channel enablement que necesita diseñar y gestionar el programa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar programas de formación y certificación para partners de distribución',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            // 7 — Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de canales de distribución: rentabilidad y optimización del mix',
                'description'      => 'Aprende a evaluar la rentabilidad de cada canal de distribución y optimizar el mix de canales desde una perspectiva financiera. El prompt te guía en el cálculo del coste por canal, el margen por canal y la asignación óptima de recursos.',
                'prompt_content'   => <<<'EOT'
Actúa como un director financiero (CFO) con experiencia en análisis de rentabilidad de canales de distribución en empresas de productos de consumo, tecnología B2B y retail omnicanal.

Necesito que me ayudes a analizar financieramente la rentabilidad de cada canal de distribución de mi empresa y a optimizar el mix de canales para maximizar el margen y la eficiencia del capital invertido.

**CONTEXTO FINANCIERO:**
[Describe los canales de distribución actuales (directo, indirecto, e-commerce, retail físico, marketplaces), el desglose aproximado de ingresos por canal, los costes conocidos por canal y las decisiones de inversión en canales que debes tomar próximamente.]

**LO QUE NECESITO:**

1. **Modelo de rentabilidad por canal**
   - Explica cómo construir un P&L (cuenta de resultados) por canal de distribución: qué ingresos y costes asignar a cada canal, cómo tratar los costes compartidos (overhead, costes de producto, logística).
   - Define los costes más relevantes por tipo de canal: coste de adquisición del cliente (CAC), coste de servicio (CTS, Cost to Serve), devoluciones y mermas, comisiones y márgenes del canal indirecto, costes de plataforma y transacción para canales digitales.
   - Propón una plantilla de P&L por canal con las líneas clave y cómo obtener los datos de los sistemas de la empresa.

2. **Métricas financieras clave por canal**
   - Define las métricas financieras que deben calcularse para cada canal: margen bruto por canal, margen de contribución (después de costes variables y directos), payback period del CAC, LTV:CAC ratio, ROAS (para canales de paid media).
   - Explica cuándo un canal con margen bruto más bajo puede ser estratégicamente valioso: acceso a nuevo segmento, efecto halo sobre otros canales, volumen que da poder de negociación con proveedores.
   - Propón los umbrales mínimos de rentabilidad que deben cumplir los canales para justificar la inversión.

3. **Análisis del coste de servicio por canal (Cost to Serve)**
   - Explica cómo calcular el coste de servir a un cliente según el canal por el que compra: pedido mínimo, frecuencia de compra, coste logístico, coste de atención al cliente, tasa de devolución.
   - Propón cómo usar el análisis de Cost to Serve para tomar decisiones de pricing por canal (precio diferencial directo vs. indirecto) o de política de pedido mínimo.
   - Define cómo identificar los clientes "no rentables" por canal y qué hacer con ellos.

4. **Optimización del mix de canales**
   - Explica cómo construir un modelo de optimización del mix de canales: qué variables incluir, qué restricciones aplicar (capacidad del equipo, mínimos de volumen, relaciones contractuales), qué función objetivo maximizar (margen total, crecimiento, cuota de mercado).
   - Propón cómo hacer un análisis de sensibilidad: qué pasa con el margen total si el canal X crece un 20% y el canal Y se reduce un 10%.
   - Define cómo tomar la decisión de añadir un nuevo canal desde una perspectiva financiera: análisis de break-even, tiempo hasta rentabilidad, impacto en los canales existentes.

5. **Gestión de conflictos de canal desde la perspectiva financiera**
   - Explica el impacto financiero del canibalismo entre canales: cuándo el canal online come ventas al canal físico o al canal indirecto, y cómo medirlo.
   - Propón cómo establecer políticas de precio y margen que minimicen el conflicto de canal sin reducir la rentabilidad total.
   - Define cómo negociar con distribuidores o resellers para ajustar sus márgenes cuando el análisis de rentabilidad lo justifica.

6. **Reporting financiero de canales para la dirección**
   - Propón la estructura de un informe mensual de rentabilidad de canales: qué métricas incluir, cómo visualizarlas, qué decisiones deben tomar los receptores del informe.
   - Explica cómo comunicar a la dirección comercial o de marketing los hallazgos del análisis financiero de canales de forma que sean accionables.

7. **Inversión en nuevos canales: criterios de evaluación financiera**
   - Define los criterios financieros para evaluar si invertir en un nuevo canal de distribución: análisis de mercado (tamaño de la oportunidad), análisis de coste de entrada (inversión en habilitación, marketing, infraestructura), proyección de retorno a 12, 24 y 36 meses, análisis de riesgo.
   - Propón una plantilla de business case para la apertura de un nuevo canal.

**FORMATO DE RESPUESTA:**
Organiza la respuesta en secciones con headers. Incluye fórmulas de cálculo con ejemplos numéricos, plantillas de P&L por canal, matrices de decisión y métricas con valores de referencia por sector. El tono debe ser técnico-financiero y práctico, orientado a un CFO o controller que necesita tomar y justificar decisiones de inversión en canales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Analizar la rentabilidad de canales y optimizar el mix de distribución',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            // 8 — Legal
            [
                'profession_id'    => 8,
                'title'            => 'Contratos de distribución y acuerdos con partners de canal: claves legales',
                'description'      => 'Comprende los elementos legales esenciales de los contratos de distribución, acuerdos de reseller y contratos de agencia comercial. El prompt te ayuda a negociar, redactar y gestionar los principales acuerdos de canal con protección jurídica adecuada.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado mercantil especializado en contratos de distribución, derecho de la competencia y acuerdos comerciales internacionales, con experiencia en el asesoramiento a empresas que distribuyen sus productos o servicios a través de canales indirectos en España y la Unión Europea.

Necesito que me ayudes a entender y gestionar el marco legal de los contratos de distribución y los acuerdos con partners de canal, asegurando que nuestra empresa esté protegida jurídicamente y que los contratos sean equitativos y ejecutables.

**CONTEXTO:**
[Describe el tipo de canal (distribuidor exclusivo, reseller no exclusivo, agente comercial, franquiciado), el mercado geográfico (España, UE, internacional), el tipo de producto o servicio, si el distribuidor actúa en nombre propio o en nombre de la empresa, y si ya tienes contratos en vigor que quieres revisar.]

**LO QUE NECESITO:**

1. **Tipos de contratos de distribución y sus diferencias legales**
   - Explica las diferencias legales entre los principales contratos de canal: contrato de distribución (el distribuidor compra y revende en nombre propio), contrato de agencia (el agente actúa en nombre y por cuenta de la empresa), contrato de concesión (exclusiva de territorio con condiciones), contrato de franquicia.
   - Indica qué ley aplica a cada tipo de contrato en España y cuándo aplica la normativa europea de agencia comercial (Directiva 86/653/CEE y Ley 12/1992 en España).
   - Explica las implicaciones fiscales y laborales de cada modelo: cuándo el agente puede considerarse empleado, cuándo el distribuidor es un intermediario a efectos de IVA.

2. **Cláusulas esenciales del contrato de distribución**
   - Lista y explica las cláusulas que no pueden faltar en un contrato de distribución: objeto y territorio, exclusividad (o no), duración y renovación, obligaciones de volumen mínimo, condiciones de compra y precio, propiedad intelectual y uso de la marca, confidencialidad, causa y consecuencias de resolución.
   - Explica las cláusulas de exclusividad y cómo redactarlas para que sean válidas bajo el derecho de la competencia europeo (Reglamento de exenciones por categorías para acuerdos verticales, VABER).
   - Define cómo regular la propiedad de los clientes al finalizar el contrato: quién retiene los datos, quién puede contactar al cliente, quién se queda con las cuentas abiertas.

3. **Derecho de la competencia y restricciones en los contratos de canal**
   - Explica qué restricciones verticales están prohibidas por el derecho de la competencia europeo: precio de reventa fijo (RPM), restricciones absolutas de territorio, prohibición de ventas pasivas online.
   - Define el umbral de cuota de mercado del 30% del VABER y qué ocurre cuando se supera.
   - Propón cómo redactar las cláusulas de precio y territorio de forma que sean legalmente válidas sin sacrificar el control sobre el canal.

4. **Indemnización por clientela del agente comercial**
   - Explica el derecho del agente comercial a la indemnización por clientela al finalizar el contrato en España (Art. 28 Ley 12/1992): cuándo procede, cómo se calcula, cuándo puede reclamarse y cuándo no.
   - Define cómo mitigar este riesgo en el diseño del modelo de canal: cuándo es mejor usar un distribuidor (que no tiene este derecho) en lugar de un agente.
   - Propón cómo negociar la indemnización al finalizar el contrato de agencia para evitar litigios.

5. **Gestión de conflictos y resolución de disputas**
   - Propón cómo incluir en el contrato mecanismos de resolución de conflictos: negociación directa, mediación, arbitraje (CCI, CAM), jurisdicción ordinaria.
   - Explica las ventajas del arbitraje frente a los tribunales ordinarios en disputas de distribución internacional.
   - Define qué ley debe gobernar el contrato y en qué jurisdicción litigar cuando el distribuidor está en otro país de la UE.

6. **Due diligence antes de firmar un contrato de canal**
   - Lista los aspectos que deben verificarse sobre el partner antes de firmar: solvencia financiera, ausencia de conflictos de interés (¿representa a competidores?), cumplimiento normativo (AML, FCPA, RGPD), reputación en el mercado.
   - Propón qué documentación solicitar al partner y cómo documentar el proceso de due diligence.

7. **Terminación del contrato de distribución**
   - Explica cómo redactar las cláusulas de terminación para proteger a la empresa: causas de resolución por incumplimiento del distribuidor, plazos de preaviso para terminación sin causa, consecuencias de la terminación (stock pendiente, garantías, deudas, clientela).
   - Define qué obligaciones subsisten después de la terminación: confidencialidad, no competencia (y sus limitaciones de validez en España), liquidación de cuentas.

8. **Checklist legal de contratos de canal**
   Lista de 15 puntos que el equipo legal debe verificar antes de firmar o renovar un contrato de distribución.

**AVISO IMPORTANTE:**
Esta respuesta tiene carácter informativo y orientativo. Para decisiones legales concretas, siempre consulta con un abogado cualificado en la jurisdicción correspondiente.

**FORMATO DE RESPUESTA:**
Organiza la respuesta en secciones con headers. Incluye referencias a la normativa aplicable, ejemplos de redacción de cláusulas, tablas comparativas de tipos de contrato y checklists. El tono debe ser técnico-jurídico y accesible para un director legal o general counsel que necesita negociar y gestionar contratos de canal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Negociar y gestionar contratos de distribución y acuerdos de canal con seguridad jurídica',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            // 9 — Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Experiencia del cliente en una estrategia de distribución omnicanal',
                'description'      => 'Garantiza que la experiencia del cliente sea fluida y consistente cuando interactúa con tu empresa a través de múltiples canales de distribución. El prompt aborda la gestión del journey omnicanal desde la perspectiva del Customer Success.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP of Customer Success con experiencia en empresas que distribuyen su producto o servicio a través de múltiples canales: canal directo propio, distribuidores, resellers, marketplace y self-service. Has liderado iniciativas de mejora de la experiencia del cliente en entornos omnicanal y sabes cómo garantizar la consistencia del servicio cuando el cliente llega por canales distintos.

Necesito que me ayudes a diseñar una estrategia de Customer Success que garantice una experiencia fluida y de alta calidad para el cliente, independientemente del canal por el que haya comprado o interactúe con nosotros.

**CONTEXTO:**
[Describe los canales de distribución que usas (directo, partners, marketplace, self-service), el tipo de producto o servicio, el perfil del cliente, los principales puntos de fricción actuales cuando el cliente cambia de canal, y el tamaño del equipo de CS.]

**LO QUE NECESITO:**

1. **Mapeo de la experiencia del cliente por canal de origen**
   - Explica cómo construir un customer journey map por canal de adquisición: qué diferencias hay en las expectativas y necesidades del cliente según si compró directamente, a través de un distribuidor o en un marketplace.
   - Identifica los momentos de mayor riesgo de fricción cuando el cliente cambia de canal: por ejemplo, compra a través de un reseller pero busca soporte directamente en la empresa.
   - Define qué touchpoints del journey son responsabilidad directa de la empresa y cuáles están delegados al canal.

2. **Coordinación con partners de canal para el éxito del cliente**
   - Explica cómo definir los SLAs de atención al cliente que deben cumplir los partners del canal: tiempos de respuesta, nivel de resolución en primer contacto, escalado al fabricante.
   - Propón cómo formar y habilitar a los equipos de soporte y CS de los partners para que ofrezcan una experiencia consistente con la marca.
   - Define el protocolo de escalado desde el partner hasta el equipo de CS de la empresa y cómo garantizar que el cliente no perciba la transición.

3. **Visión 360 del cliente en un entorno omnicanal**
   - Explica por qué es crítico tener una vista unificada del cliente que consolide las interacciones de todos los canales: historial de compras, tickets de soporte, uso del producto, interacciones con el partner.
   - Propón cómo construir esta vista 360 con las herramientas disponibles: integración del CRM con el portal de partners, sincronización de datos de marketplace, unificación de identidad.
   - Define qué información del cliente debe estar disponible para el equipo de CS independientemente de por qué canal llegó el cliente.

4. **Onboarding del cliente según el canal de origen**
   - Diseña un programa de onboarding adaptado al canal: el cliente que compra directamente recibe onboarding del equipo propio, el que compra a través de un partner recibe onboarding del partner con recursos de la empresa, el que compra en marketplace o self-service recibe onboarding automatizado.
   - Define qué elementos del onboarding son no negociables y deben ser iguales en todos los canales (configuración inicial, formación básica, primera revisión de éxito) y cuáles pueden variar.
   - Propón cómo garantizar que el cliente comprado a través de canal indirecto reciba el mismo nivel de éxito que el comprado directamente.

5. **Gestión de quejas y escalados en entorno multicanal**
   - Define el protocolo para gestionar a un cliente que tiene un problema con el producto pero compró a través de un partner: quién es el responsable de resolverlo, cómo coordinar, cómo evitar que el cliente quede atrapado entre la empresa y el partner.
   - Propón cómo evitar la confusión de responsabilidades: el cliente no debe saber que hay una negociación interna; para él, la empresa es una.
   - Explica cómo gestionar el caso extremo: un partner que no resuelve bien los problemas de los clientes finales y está dañando la reputación de la marca.

6. **Métricas de CS por canal**
   - Define qué métricas de éxito del cliente deben medirse por canal: NPS, CSAT, CES (Customer Effort Score), churn rate, tiempo de onboarding, adoption rate, número de escalados.
   - Propón cómo comparar la experiencia del cliente entre canales y usar esa comparativa para tomar decisiones: reforzar el soporte a través de un canal, replantear el acuerdo con un partner, mejorar el autoservicio.

7. **Comunidad y self-service como canal de CS omnicanal**
   - Explica cómo una base de conocimiento, una comunidad de usuarios y un chatbot pueden servir de canal de CS universal que funciona independientemente de por dónde el cliente acceda.
   - Propón cómo diseñar el self-service para que resuelva las dudas más frecuentes de los clientes de todos los canales sin necesitar intervención humana.

**FORMATO DE RESPUESTA:**
Organiza la respuesta en secciones con headers. Incluye plantillas de SLA con partners, protocolos de escalado, checklists de onboarding por canal y métricas de CS con valores de referencia. El tono debe ser práctico y orientado a un profesional de CS que gestiona la experiencia del cliente en un entorno de distribución complejo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Garantizar una experiencia de cliente consistente en estrategias de distribución multicanal',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 10 — Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Estrategia de distribución de servicios y productos para freelancers',
                'description'      => 'Diseña tu estrategia de distribución como freelance: cómo llegar a más clientes sin depender solo del boca a boca, qué canales usar para cada tipo de servicio y cómo construir un modelo de distribución escalable para tu negocio independiente.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocio para freelancers y profesionales independientes, con experiencia en el diseño de estrategias de distribución y go-to-market para negocios unipersonales y pequeños estudios creativos, consultoras boutique y freelancers técnicos en sectores como diseño, desarrollo, consultoría, formación y marketing.

Necesito que me ayudes a diseñar una estrategia de distribución para mis servicios o productos como freelance, de modo que pueda llegar a más y mejores clientes sin depender exclusivamente del boca a boca o de las plataformas de freelancing.

**MI PERFIL Y CONTEXTO:**
[Describe tu especialidad (tipo de servicio o producto), el perfil de tu cliente ideal (empresa o particular, sector, tamaño, geografía), tu nivel de experiencia (años, cartera de proyectos), los canales que ya usas y tu objetivo de facturación o crecimiento en los próximos 12 meses.]

**LO QUE NECESITO:**

1. **Diagnóstico de tu estrategia de distribución actual**
   - Explica qué canales son los más comunes para freelancers de tu especialidad y cómo se comparan en términos de calidad del cliente, precio del proyecto y sostenibilidad a largo plazo.
   - Ayúdame a identificar cuáles de mis canales actuales están infrautilizados o mal posicionados.
   - Define las señales que indican que un canal de distribución está generando clientes de baja calidad (precio muy bajo, proyectos de baja complejidad, clientes que no renuevan o no recomiendan).

2. **Canales de distribución para freelancers: panorama completo**
   - Explica los principales canales que un freelance puede usar para distribuir sus servicios, con ventajas y limitaciones de cada uno:
     - Plataformas de freelancing (Workana, Freelancer, Upwork, Fiverr): para qué tipo de servicio y perfil funcionan.
     - LinkedIn y redes sociales profesionales: cómo usarlas para generar ingresos, no solo visibilidad.
     - Marketplaces especializados (Toptal, Gun.io, MarketerHire, 99designs): cuándo valen la pena y cómo entrar.
     - Referidos y boca a boca estructurado: cómo construir un sistema activo de referencias.
     - Partnerships con agencias u otras empresas: cómo convertirse en subcontratista de calidad.
     - Contenido y posicionamiento SEO: cómo el contenido puede ser un canal de captación de clientes inbound.
     - Productos digitales (cursos, plantillas, ebooks, software): cómo añadir ingresos pasivos a la ecuación.

3. **Selección de los canales adecuados para tu perfil**
   - Ayúdame a elegir los 2-3 canales en los que debo enfocarme en los próximos 6 meses, según mi perfil y objetivos.
   - Explica por qué el foco en pocos canales bien trabajados supera la dispersión en muchos canales mediocres.
   - Define cómo priorizar según el estadio del negocio: en etapa inicial (necesito clientes rápido) vs. en etapa de crecimiento (quiero mejorar la calidad y aumentar precios).

4. **Canal de referidos: cómo construirlo de forma sistemática**
   - Explica por qué el boca a boca no funciona por sí solo y cómo convertirlo en un sistema activo de generación de clientes.
   - Propón cómo pedir referencias de forma natural y efectiva: cuándo pedirlas, cómo formular la petición, qué ofrecer a cambio.
   - Define cómo mantener el contacto con clientes pasados para que vuelvan y te recomienden sin parecer pesado.

5. **Canal de contenido: posicionarte como experto para atraer clientes**
   - Explica qué tipo de contenido genera clientes (no solo seguidores) para un freelance de tu especialidad.
   - Propón un plan de contenido mínimo viable: 1 pieza de contenido a la semana en el canal más adecuado (LinkedIn, newsletter, blog, YouTube, podcast).
   - Define cómo convertir el contenido en conversaciones de negocio: qué CTA usar, cómo gestionar los mensajes entrantes, cómo pasar de "me gusta" a propuesta.

6. **Partnerships y subcontratación como canal de distribución**
   - Explica cómo convertirte en el freelance de referencia de una o varias agencias: cómo presentarte, qué garantizar, cómo gestionar la relación para que sea recurrente.
   - Propón cómo buscar y abordar a potenciales aliados: freelancers complementarios, agencias pequeñas, consultoras boutique.
   - Define las condiciones mínimas de un acuerdo de subcontratación: tarifas, plazos, propiedad del cliente, confidencialidad.

7. **Productización: distribuyendo lo que haces como producto**
   - Explica qué es la productización de un servicio freelance y cómo puede mejorar la distribución: cuando vendes un "paquete" definido es más fácil comunicarlo, compararlo y comprarlo.
   - Propón cómo transformar tu servicio principal en un producto con precio, alcance y entrega definidos.
   - Explica cómo añadir un producto digital (plantilla, curso, herramienta) que genere ingresos mientras duermes y actúe como canal de captación de nuevos clientes de servicios.

8. **Hoja de ruta de 90 días para mejorar tu distribución**
   - Divide los 90 días en tres fases de 30 días: auditoría y selección de canales, activación y primeros resultados, optimización y escalado.
   - Define los hitos que marcan el éxito en cada fase: número de conversaciones generadas, propuestas enviadas, clientes conseguidos por canal.

**FORMATO DE RESPUESTA:**
Organiza la respuesta en secciones con headers. Incluye ejemplos concretos adaptados a distintas especialidades freelance, plantillas de mensajes de networking y referidos, y una hoja de ruta accionable con tareas semanales. El tono debe ser directo, motivador y realista: sin promesas de dinero fácil, con estrategias que requieren trabajo pero que generan resultados sostenibles.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar una estrategia de distribución multicanal para negocios freelance',
                'vote_score'       => 35,
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
