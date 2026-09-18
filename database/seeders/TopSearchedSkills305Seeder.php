<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills305Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Affiliate marketing: construir y gestionar un programa de afiliados rentable',
                'description'       => 'Diseña desde cero un programa de afiliados que genera adquisición de clientes predecible, controlando las comisiones, la calidad del tráfico y el fraude.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en affiliate marketing con experiencia diseñando y gestionando programas de afiliados para empresas SaaS, ecommerce y medios digitales. Has trabajado con redes como Impact, ShareASale, CJ Affiliate y programas gestionados in-house. Entiendes los incentivos de todas las partes (anunciante, afiliado, red) y los puntos donde los programas se vuelven no rentables o fraudulentos.

Necesito tu ayuda para diseñar un programa de afiliados rentable para mi empresa. Aborda los siguientes aspectos con profundidad:

**1. Estrategia y modelo del programa**
Antes de hablar de herramientas, ayúdame a definir la estrategia:
- Qué tipo de afiliados tienen sentido para mi producto o servicio: content creators, comparadores, retargeters, email list owners, influencers, otros negocios complementarios
- Qué modelo de comisión es adecuado: CPA (por venta), CPL (por lead), revenue share, híbrido, y cómo calcularlo para que sea rentable dado mi LTV, CAC objetivo y márgenes
- Cuándo tiene sentido un programa de afiliados vs invertir ese presupuesto en canales directos
- Qué diferencia a un programa exitoso de uno que no llega a ningún lado: los factores de éxito que la mayoría ignora en el lanzamiento

**2. Estructura de comisiones y atribución**
Las comisiones mal diseñadas destruyen la rentabilidad o atraen afiliados de baja calidad. Explícame:
- Cómo calcular la comisión máxima sostenible partiendo de LTV, márgenes y CAC objetivo
- Estructuras de comisiones que premian la calidad: bonus por retención del cliente referido, comisiones escalonadas por volumen, penalizaciones por fraude
- Modelos de atribución: last click vs first touch vs multi-touch, y cuál es más justo para cada tipo de afiliado
- Ventanas de cookies: cuánto tiempo y por qué, y cómo afecta al comportamiento de los afiliados
- Cómo manejar las devoluciones y cancelaciones en el modelo de comisiones

**3. Reclutamiento y activación de afiliados**
Un programa de afiliados es tan bueno como sus afiliados. Explícame:
- Cómo encontrar afiliados de calidad en tu nicho: búsqueda proactiva vs aplicaciones inbound
- Qué información pedir en el proceso de aplicación para filtrar afiliados de baja calidad
- Cómo estructurar el onboarding de afiliados para que empiecen a generar resultados rápido
- Qué materiales creativos y de apoyo necesitan los afiliados para convertir bien: banners, texto de muestra, guías de producto, códigos de descuento exclusivos
- Cómo construir relaciones con los afiliados top que generan el 80% del volumen

**4. Tecnología: red vs programa propio**
La elección de la plataforma determina los costes, la flexibilidad y el acceso a afiliados. Explícame:
- Cuándo usar una red de afiliados (Impact, ShareASale, Awin) vs construir un programa propio (Rewardful, FirstPromoter, Tapfiliate para SaaS)
- Los costes reales de cada opción: fees de la red, coste de setup, mantenimiento, acceso a afiliados
- Qué capacidades técnicas necesitas: tracking de cookies, deep linking, attribution, integración con tu plataforma de pagos y CRM

**5. Prevención de fraude y control de calidad**
El fraude en afiliación puede destruir la rentabilidad sin que te des cuenta. Explícame:
- Los tipos de fraude más comunes: cookie stuffing, leads falsos, auto-referidos, brand bidding no autorizado
- Señales de alerta: ratios de conversión anómalos, geografías inesperadas, patrones de tráfico sospechosos
- Controles técnicos y operacionales para detectar y prevenir fraude
- Cómo gestionar la conversación con un afiliado cuando detectas actividad sospechosa

**6. Gestión y optimización del programa**
Un programa de afiliados requiere gestión activa para crecer. Explícame:
- KPIs del programa: cómo medir el éxito más allá del volumen de ventas (calidad de los clientes referidos, fraude rate, incrementalidad real)
- Comunicación con afiliados: frecuencia, contenido y cómo mantener al programa top of mind
- Cómo optimizar las landing pages y el funnel de conversión específicamente para el tráfico de afiliados
- Cuándo escalar, cuándo pausar y cuándo cancelar un programa que no funciona

Dame recomendaciones específicas adaptadas a mi tipo de negocio y producto cuando me cuentes más contexto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar un programa de afiliados rentable desde la estrategia hasta la prevención de fraude',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Affiliate tracking tech: construir la infraestructura técnica de un programa de afiliados',
                'description'       => 'Diseña la arquitectura técnica de tracking de afiliados: cookies, pixels, server-side tracking, atribución y las integraciones con CRM y plataformas de pago.',
                'prompt_content'    => <<<'PROMPT'
Eres un ingeniero con experiencia construyendo sistemas de tracking y atribución para programas de afiliados y marketing de rendimiento. Conoces los fundamentos técnicos del tracking de afiliados, las restricciones impuestas por ITP de Safari y los bloqueadores de anuncios, las alternativas server-side, y las plataformas tanto de red (Impact, CJ) como de software propio (Rewardful, PostAffiliatePro, Tune). Entiende los tradeoffs entre precisión, privacidad y coste de implementación.

Necesito tu ayuda para diseñar o auditar la infraestructura técnica de tracking de mi programa de afiliados. Aborda los siguientes aspectos:

**1. Fundamentos del tracking de afiliados**
Antes de hablar de implementación, explícame cómo funciona el tracking de afiliados a nivel técnico:
- El flujo completo: clic del afiliado → landing page → conversión → atribución → pago
- Mecanismos de tracking disponibles: cookies first-party, cookies third-party (prácticamente muerto), pixels de conversión, server-to-server postback, fingerprinting
- Por qué el tracking basado en cookies está roto en Safari (ITP) y en cualquier navegador con bloqueadores de anuncios, y cuánto tráfico real está afectado
- Qué es el tracking server-side y por qué es la solución más robusta para programas serios

**2. Implementación server-side: arquitectura y opciones**
El tracking server-side es más fiable pero más complejo de implementar. Explícame:
- Cómo funciona el postback URL (también llamado pixel server-to-server): el flujo técnico desde la conversión hasta el sistema del afiliado
- Cómo implementar el tracking ID en la URL del afiliado y pasarlo a través del funnel hasta la conversión
- Opciones de almacenamiento del tracking ID: cookies first-party con JS propio, localStorage, base de datos de sesiones
- Cómo manejar el tracking cross-device: cuándo el usuario hace clic en móvil y convierte en desktop
- Integración con tu plataforma de pagos (Stripe, Paddle, Chargebee) para disparar el postback en el momento correcto

**3. Construir vs comprar: la decisión de plataforma**
Explícame el análisis técnico de las opciones principales:
- Software de afiliados self-hosted (PostAffiliatePro, Tapfiliate, FirstPromoter): instalación, mantenimiento, customización posible
- SaaS de gestión de afiliados (Rewardful, Reditus para SaaS): integración típica, limitaciones, coste
- Redes de afiliados con tracking incluido (Impact, CJ, ShareASale): ventajas del ecosistema vs pérdida de control técnico
- Construirlo desde cero: cuándo tiene sentido, qué requiere, qué componentes son los más complejos

**4. Integración con el stack tecnológico existente**
El tracking de afiliados necesita integrarse con el resto del sistema. Explícame:
- Integración con CRM (HubSpot, Salesforce): cómo pasar el afiliado origen al lead y al deal para atribución end-to-end
- Integración con analytics (Segment, Amplitude, Mixpanel): cómo unificar el tracking de afiliados con el resto del attribution
- Integración con email marketing: cómo asegurarse de que las conversiones por email de un lead referido se atribuyen correctamente
- Webhooks y eventos: qué eventos necesitas capturar y cómo estructurar el payload

**5. Prevención de fraude a nivel técnico**
Explícame los controles técnicos para detectar y prevenir fraude:
- Validación de conversiones: cómo verificar que una conversión es real antes de aprobar la comisión
- Detección de anomalías: ratios de conversión estadísticamente improbables, IPs de data centers, user agents no humanos
- Deduplicación: cómo evitar pagar comisión dos veces por la misma conversión
- Protección contra click injection y cookie stuffing

**6. Testing, monitoring y mantenimiento del sistema de tracking**
El tracking que no se monitorea se rompe en silencio. Explícame:
- Cómo testear el flujo completo de tracking antes de lanzar con afiliados reales
- Alertas cuando el tracking rate cae de forma anómala (señal de que algo se rompió)
- Cómo auditar periódicamente la precisión del tracking comparando conversiones reportadas vs ventas reales
- Gestión de cambios en el sitio que pueden romper el tracking sin que nadie lo sepa

Dame recomendaciones técnicas concretas adaptadas a mi stack cuando me cuentes más sobre tu arquitectura actual.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar la arquitectura técnica de tracking server-side para un programa de afiliados robusto',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de landing pages de afiliados: el creative que convierte sin romper la marca',
                'description'       => 'Crea landing pages específicas para tráfico de afiliados que maximizan la conversión manteniendo la coherencia de marca y la confianza del usuario.',
                'prompt_content'    => <<<'PROMPT'
Eres un diseñador de conversión especializado en landing pages para programas de afiliados y performance marketing. Entiendes que el tráfico de afiliados llega con un contexto previo diferente al tráfico directo o de SEO, y que las landing pages deben estar diseñadas para esa intención específica. Conoces los principios de CRO, el impacto del mensaje-match, y cómo mantener la coherencia de marca mientras se optimiza para conversión.

Necesito tu ayuda para diseñar landing pages efectivas para el tráfico que generan mis afiliados. Aborda los siguientes aspectos:

**1. El problema del message match en afiliados**
Antes de hablar de diseño, explícame el concepto fundamental del message match y por qué es crítico en afiliación:
- Por qué el usuario que llega de un afiliado tiene expectativas específicas basadas en lo que ese afiliado le prometió
- Cómo el desajuste entre el mensaje del afiliado y la landing page destruye la conversión y la confianza
- Cómo diseñar experiencias de entrada personalizadas por tipo de afiliado o segmento de tráfico
- Cuándo tiene sentido crear landing pages dedicadas por afiliado vs templates genéricos optimizados

**2. Estructura y jerarquía visual de una landing page de afiliados de alta conversión**
Explícame los principios de diseño que maximizan la conversión en este contexto:
- Above the fold: qué información debe estar visible sin scroll para no perder al usuario que llega con intención
- Headline y subheadline: cómo conectar con el mensaje que el afiliado usó para traer al usuario
- Propuesta de valor y diferenciación: cómo comunicarla de forma visual, no solo textual
- Social proof específico y relevante: testimoniales, logos, números que el usuario de ese segmento valorará
- CTA principal: diseño, copia, posicionamiento, y cómo reducir la fricción del siguiente paso
- Flujo de información: qué información mostrar en qué orden para guiar al usuario hacia la conversión

**3. Diseño para diferentes tipos de afiliados y contextos**
El tráfico de un comparador de precios es diferente al de un influencer de YouTube. Explícame cómo adaptar el diseño para:
- Tráfico de contenido editorial (blogs, comparadores): el usuario viene investigando, necesitas resolver las últimas dudas
- Tráfico de influencer: el usuario viene con confianza en el prescriptor, el diseño debe capitalizar esa confianza
- Tráfico de email list: el usuario ya conoce la marca o el producto, la landing puede ser más directa
- Tráfico de cupones y deals: el usuario viene motivado por el precio, el descuento debe ser prominente
- Cómo adaptar el diseño manteniendo la coherencia de marca en todos los casos

**4. Elementos de confianza y reducción de fricción**
La conversión muere cuando el usuario duda. Explícame cómo diseñar para eliminar dudas:
- Garantías y políticas de devolución: cómo presentarlas visualmente para que reduzcan el riesgo percibido
- Señales de seguridad: badges, certificados, políticas de privacidad visibles pero no intrusivas
- FAQ estratégica: las 3-5 preguntas que realmente bloquean la conversión y cómo responderlas en el diseño
- Indicadores de progreso: cómo hacer que el checkout o el formulario se sienta corto y fácil

**5. Testing y optimización de landing pages de afiliados**
El diseño es una hipótesis hasta que los datos lo confirman. Explícame:
- Qué elementos testear primero en una landing page de afiliados: headlines, CTA, social proof, estructura
- Cómo segmentar los tests por fuente de afiliado para no mezclar señales de poblaciones diferentes
- Métricas correctas para evaluar el éxito: no solo el click-through en el CTA, sino la calidad de las conversiones
- Cómo iterar rápido con variaciones de landing page sin crear deuda de diseño inmanejable

**6. El equilibrio entre conversión y coherencia de marca**
El mayor riesgo en las landing pages de performance es sacrificar la marca por la conversión. Explícame:
- Qué elementos de marca nunca deben comprometerse por la conversión
- Cómo los afiliados pueden dañar la percepción de marca con sus propios creativos y cómo gestionarlo
- Guías de uso de marca para afiliados: qué pueden y no pueden hacer con tu identidad visual
- Cómo detectar cuando un afiliado está usando creativos que dañan tu marca aunque conviertan bien

Dame recomendaciones concretas de diseño adaptadas a mi tipo de producto y programa de afiliados cuando me proporciones más contexto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar landing pages de afiliados que maximizan la conversión sin romper la coherencia de marca',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Channel partners: construir un ecosistema de partners que venden por ti',
                'description'       => 'Diseña un programa de channel partners que convierte a revendedores, integradores y consultores en un canal de ventas escalable con incentivos alineados.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en channel sales y partner management con experiencia en empresas de software B2B que han escalado a través de ecosistemas de partners. Entiendes los modelos de reseller, VAR (Value Added Reseller), SI (System Integrator), MSP (Managed Service Provider) y referral partner, y cuándo cada uno tiene sentido. Conoces los incentivos de los partners, los puntos de fricción que hacen fracasar los programas, y los elementos que hacen que los partners te prioricen sobre la competencia.

Necesito tu ayuda para diseñar o mejorar mi programa de channel partners. Aborda los siguientes aspectos:

**1. Diagnóstico y estrategia de canal**
Antes de diseñar el programa, ayúdame a clarificar la estrategia:
- Qué tipo de partners tienen sentido para mi producto y mercado: ¿revendedores puro, integradores que añaden valor, consultores que recomiendan, o MSPs que lo incluyen en su stack?
- Cómo saber si estoy preparado para un programa de partners (producto maduro, documentación suficiente, support escalable)
- El riesgo real del canal: dependencia de partners, pérdida de relación directa con el cliente, complejidad operacional
- Cómo calcular el potencial del canal vs el coste de construirlo y gestionarlo

**2. Diseño de la estructura del programa**
Explícame cómo estructurar el programa desde cero:
- Tiers de partners: cuántos niveles tiene sentido (Silver, Gold, Platinum o similar), qué diferencia cada tier y qué requiere para ascender
- Modelo de compensación por tipo de partner: margen de reventa, comisiones de referral, bonuses por volumen, spiffs por productos específicos
- Cómo calcular el descuento máximo de reventa que puedes ofrecer sin canibalizar tu canal directo y manteniendo la rentabilidad
- Compromisos del partner: qué te comprometes a dar (soporte, entrenamiento, co-marketing, leads) y qué te comprometeas a exigir (volumen mínimo, certificaciones, cobertura de mercado)

**3. Reclutamiento y onboarding de partners**
Los partners correctos son más valiosos que muchos partners mediocres. Explícame:
- Cómo identificar partners ideales en tu mercado: qué características buscar, cómo encontrarlos
- El proceso de evaluación antes de aceptar un partner: capacidad comercial, complementariedad, posibles conflictos de interés con la competencia
- Onboarding estructurado: entrenamiento de producto, ventas y soporte, acceso a recursos, primeras oportunidades conjuntas
- Cómo asegurarte de que el partner entiende tu propuesta de valor mejor que su propio equipo de ventas

**4. Habilitación y soporte al partner (Partner Enablement)**
Un partner sin habilitación es un partner inactivo. Explícame:
- Qué materiales de ventas necesitan los partners que son diferentes a los que usas directamente: battle cards, competitive intel, ROI calculators adaptados
- Entrenamiento: qué formatos funcionan mejor (certificaciones, trainings en vivo, portal de self-service), con qué frecuencia actualizar
- Partner portal: qué debe incluir para que los partners se autogestionen sin depender de ti para cada pregunta
- Cómo gestionar el soporte de segundo nivel a clientes de partners sin que consuma todo tu equipo de CS

**5. Gestión del pipeline y co-selling**
El channel sin gestión activa se estanca. Explícame:
- Cómo hacer deal registration funcionar: qué incentivos, qué proceso, cómo evitar conflictos entre canal directo y partners
- Co-selling: cuándo involucrar a tu equipo de ventas directo en oportunidades de partners y cómo hacerlo sin crear fricción
- Gestión de conflicto de canal: qué hacer cuando ventas directa y un partner persiguen la misma cuenta
- QBRs con partners: qué revisar, con qué frecuencia, cómo mantener el momentum

**6. Métricas y evolución del programa**
Cómo saber si el programa funciona y cómo escalarlo. Explícame:
- KPIs del canal: sourced vs influenced revenue, partner-attached win rate, partner activation rate (partners que generan al menos una venta)
- Cómo identificar a los partners que merecen más inversión vs los que están inactivos y no van a activarse
- Cuándo añadir un Partner Manager dedicado y qué perfiles buscar
- Cómo evolucionar el programa cuando crece: automatizar la gestión de tiers bajos para poder focalizarse en los partners estratégicos

Dame recomendaciones concretas adaptadas a mi tipo de producto, mercado y etapa de empresa.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar un programa de channel partners que convierte a revendedores e integradores en canal de ventas escalable',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Referral program design: el programa de referidos que se integra en el producto',
                'description'       => 'Diseña un programa de referidos que aprovecha el momento correcto del journey del usuario para generar adquisición viral sin interrumpir la experiencia de producto.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en growth y product-led acquisition con experiencia diseñando programas de referidos para productos digitales. Conoces los programas que han funcionado (Dropbox, Uber, Airbnb, Revolut) y entiendes por qué la mayoría de programas de referidos fracasa. Tu enfoque es diseñar referral loops que sean parte natural del producto, no una funcionalidad añadida que nadie usa.

Necesito tu ayuda para diseñar un programa de referidos para mi producto. Aborda los siguientes aspectos:

**1. Cuándo un programa de referidos tiene sentido y cuándo no**
Antes de diseñar nada, ayúdame a validar si un programa de referidos es la palanca correcta:
- Las condiciones necesarias para que un referral program funcione: producto con NPS alto, usuarios que ya recomiendan orgánicamente, propuesta de valor clara para el referido
- Los errores que llevan a programas que nunca despegan: incentivos mal calculados, momento de solicitud incorrecto, fricción en el proceso de referral
- Alternativas al referral program clásico: producto naturalmente viral (Slack, Zoom, Figma), SEO, content marketing
- Cómo medir si tienes el referral potential antes de invertir en construirlo: K-factor actual, NPS, entrevistas con usuarios que ya recomiendan

**2. Diseño del mecanismo de referral**
La estructura del programa determina su éxito o fracaso. Explícame:
- Tipos de incentivos: descuento bilateral (emisor y receptor), créditos, extensión de plan, efectivo, funcionalidades premium. Cuál funciona para cada tipo de producto y usuario
- Cómo calcular el incentivo máximo sostenible: LTV del cliente referido vs coste del incentivo + fricción de adquisición normal
- Condiciones de activación del incentivo: al registrarse, al activarse, al pagar la primera factura. Cuál previene el fraude sin matar la conversión
- Diseño del flujo de referral: cómo el usuario comparte, cómo el referido accede, cómo ambos reciben el incentivo

**3. Integración del referral en el producto**
El referral que se pide en el momento equivocado no funciona. Explícame:
- El momento correcto para solicitar o facilitar el referral: cuándo el usuario ha experimentado el valor suficiente para recomendar con convicción
- Dónde integrar el referral en el producto: en el onboarding (demasiado pronto), en los milestones de activación, en los momentos de deleite
- Cómo hacer que compartir sea natural: qué formatos de compartición tienen más conversión (link personalizado, código, invitación directa)
- Referral loops en productos colaborativos: cómo aprovechar la naturaleza del producto para hacer el referral obvio y no forzado

**4. Prevención de fraude y abuso**
Los incentivos atraen abuso. Explícame:
- Las formas más comunes de fraude en programas de referidos: auto-referidos con múltiples cuentas, referidos que nunca convierten, abuso de incentivos de amigos
- Controles técnicos y de negocio para detectar y prevenir el fraude sin crear fricción excesiva para los usuarios legítimos
- Cómo gestionar los casos edge: usuarios de la misma IP, misma tarjeta de crédito, referidos que cancelan antes de que se active el incentivo

**5. Experiencia del usuario en el flujo de referral**
El diseño del flujo determina las tasas de completado. Explícame:
- Cómo diseñar la pantalla de referral dashboard: qué información mostrar, cómo motivar al usuario a seguir compartiendo
- El email o notificación cuando el incentivo está a punto de activarse: qué decir para motivar sin ser agresivo
- El momento del onboarding del referido: cómo capitalizar la confianza que viene de ser referido por alguien conocido
- Cómo comunicar el incentivo sin que parezca que tu producto necesita sobornar para conseguir recomendaciones

**6. Métricas y optimización del programa**
Cómo saber si el programa está funcionando. Explícame:
- K-factor: cómo calcularlo correctamente y qué significan distintos valores para el crecimiento
- Métricas del funnel de referral: share rate, conversion rate del referido, activation rate del referido
- Calidad de los clientes referidos vs otros canales: LTV, retención, NPS comparado
- Cómo iterar sobre el programa: qué variables cambiar primero y cómo testearlas sin interrumpir el programa activo

Dame recomendaciones concretas adaptadas a mi tipo de producto y usuarios cuando me cuentes más contexto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar un referral program que genera adquisición viral integrado de forma natural en el producto',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Employee referral programs: el mejor canal de recruiting que pocas empresas aprovechan',
                'description'       => 'Diseña un programa de referidos de empleados que genera candidatos de alta calidad de forma sistemática, con los incentivos y la cultura correctos.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en talent acquisition con experiencia diseñando programas de employee referral que se convierten en el canal de recruiting más eficiente de una empresa. Conoces los datos: los candidatos referidos tienen mayores tasas de aceptación de oferta, menor tiempo de onboarding, mayor retención y mejor fit cultural. Y también conoces por qué la mayoría de programas fracasan: están mal diseñados, son difíciles de usar o nadie los conoce.

Necesito tu ayuda para diseñar o mejorar el programa de employee referral de mi empresa. Aborda los siguientes aspectos:

**1. Por qué la mayoría de programas de referidos de empleados fracasa**
Antes de proponer soluciones, ayúdame a entender los errores más comunes:
- Por qué los empleados no refieren aunque quieran hacerlo: fricción del proceso, miedo a quedar mal si el candidato no es bueno, olvido
- Por qué los incentivos económicos solos no funcionan: cuándo el dinero ayuda y cuándo distorsiona los incentivos
- Problemas culturales que matan el programa: percepción de falta de transparencia en el proceso, sensación de que los referidos no reciben trato justo
- El error de lanzar el programa y olvidarlo: por qué necesita gestión activa para mantenerse vivo

**2. Diseño del proceso de referral: la clave está en la simplicidad**
El proceso tiene que ser tan simple que cualquier empleado lo haga en 2 minutos. Explícame:
- Cómo debe ser el flujo de referral: desde que el empleado piensa en alguien hasta que el candidato está en el sistema del ATS
- Qué información pedir al empleado que refiere: suficiente para que RRHH tenga contexto, poco suficiente para no crear fricción
- Integración con el ATS: cómo asegurarse de que los candidatos referidos están claramente marcados en todo el proceso
- Cómo hacer el programa accesible desde múltiples canales: email, Slack, intranet, app móvil

**3. Estructura de incentivos que motivan sin distorsionar**
Los incentivos mal diseñados pueden crear comportamientos indeseados. Explícame:
- Cuándo se activa el bonus: al contratar, a los 3 meses, a los 6 meses. Los tradeoffs de cada momento
- Cómo calcular el bonus adecuado por nivel de seniority y dificultad de la posición
- Incentivos no económicos que complementan o sustituyen el bonus: reconocimiento público, tiempo libre adicional, experiencias
- Cómo gestionar las posiciones de urgencia con incentivos especiales sin crear permanencia
- Incentivos grupales vs individuales: cuándo tiene sentido premiar al equipo por referir bien

**4. Activación y engagement del programa**
Un programa que nadie conoce no genera candidatos. Explícame:
- Cómo lanzar el programa para maximizar la participación inicial: comunicación, formación, primeros referidos de ejemplo
- Cómo mantener el programa top of mind: recordatorios en el momento correcto (apertura de nuevas posiciones), celebración de contrataciones por referral
- Cómo involucrar a los managers: son los que más influencia tienen sobre sus equipos y los que más redes tienen para reclutar perfiles similares a su equipo
- Gamificación ligera: rankings, reconocimiento público de los que más refieren, badges. Cuándo ayuda y cuándo resulta forzado

**5. Equidad y diversidad en los programas de referidos**
El referral puede reforzar la homogeneidad si no se diseña con cuidado. Explícame:
- Por qué los programas de referidos tienden a reproducir la composición actual del equipo
- Cómo diseñar el programa para que activamente busque diversificar: incentivos adicionales para referidos de grupos subrepresentados, comunicación proactiva sobre diversidad de perfiles buscados
- Cómo asegurarse de que los candidatos referidos reciben el mismo proceso de evaluación riguroso que otros candidatos
- Cómo gestionar la situación en la que el candidato referido no pasa el proceso: comunicación con el empleado que refirió

**6. Métricas y optimización del programa**
Cómo saber si el programa funciona y cómo mejorarlo. Explícame:
- KPIs del programa de referral: participation rate, referral hire rate, calidad de los candidatos referidos (offer acceptance, performance ratings, retention)
- Cómo comparar el coste por contratación por canal: referral vs LinkedIn vs agencias vs inbound
- Análisis de qué empleados refieren más y por qué: qué aprender de ellos para replicarlo
- Cuándo y cómo reformar un programa que no está generando candidatos suficientes

Dame recomendaciones concretas adaptadas a mi tipo de empresa, etapa de crecimiento y cultura cuando me cuentes más contexto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar un programa de referidos de empleados que genera candidatos de alta calidad de forma sistemática',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Financial model de programas de afiliados: comisiones, tracking y rentabilidad',
                'description'       => 'Construye el modelo financiero que determina si tu programa de afiliados es rentable, calculando el CPA máximo sostenible, el impacto en márgenes y el ROI real del canal.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en financial modeling y unit economics con experiencia en empresas que operan programas de afiliados, marketplaces y canales de distribución indirectos. Entiendes cómo el canal de afiliados afecta a los márgenes, cómo calcular el CPA máximo sostenible, y cómo medir el ROI real del canal incluyendo los costes ocultos que la mayoría de las empresas ignoran.

Necesito tu ayuda para construir el modelo financiero de mi programa de afiliados. Aborda los siguientes aspectos:

**1. El CPA máximo sostenible: el cálculo fundamental**
Antes de diseñar ningún programa, hay que saber cuánto puedo pagar por adquisición. Explícame:
- La fórmula completa: cómo derivar el CPA máximo desde el LTV, el margen bruto, el CAC objetivo y el payback period que la empresa puede sostener
- Cómo ajustar el CPA según el tipo de comisión: pago único, revenue share, tiered, mixto
- El impacto del churn en la comisión: si pago comisión por contratos que luego cancelan, ¿cómo afecta a mi rentabilidad real?
- Cómo modelar escenarios: optimista, base y pesimista, y qué variables tienen mayor sensibilidad en el resultado

**2. La estructura de costes real del canal de afiliados**
Muchas empresas subestiman el coste real del canal. Explícame todos los costes a modelar:
- Comisiones directas: el coste más obvio pero hay que calcularlo correctamente
- Costes de plataforma: fees de la red de afiliados o coste del software propio
- Costes de gestión: tiempo del equipo dedicado a gestionar partners, crear materiales, hacer compliance
- Costes de fraude: qué porcentaje de comisiones pagadas van a conversiones fraudulentas y cómo estimarlo
- Descuentos y códigos de afiliado: si ofreces descuento al cliente final, eso también es un coste del canal
- Costes de tecnología: tracking, reporting, integraciones

**3. Incrementalidad: la pregunta que la mayoría no se hace**
¿Los clientes que vienen por afiliados hubieran llegado de todas formas por otro canal? Explícame:
- Qué es la incrementalidad en el contexto del canal de afiliados y por qué es el verdadero ROI del programa
- Cómo diseñar tests de incrementalidad para medir el verdadero impacto: holdout groups, geo-tests
- Los tipos de afiliados con menor incrementalidad: cupones de marca, retargeters. Cómo ajustar las comisiones según la incrementalidad esperada
- Cómo integrar la incrementalidad en el modelo financiero para tener una foto real del coste real por cliente nuevo incremental

**4. Modelar diferentes estructuras de comisión**
Hay múltiples modelos y cada uno tiene implicaciones financieras distintas. Explícame con ejemplos numéricos:
- CPA fijo: ventajas y desventajas, cuándo es el modelo correcto
- Revenue share porcentual: cómo afecta a los márgenes en función del volumen, qué pasa cuando el cliente crece (bueno para el afiliado) o cancela (el riesgo)
- Tiered: comisiones que aumentan con el volumen. Cómo calcular el impacto en el margen promedio
- Modelos híbridos: CPA inicial + revenue share. La complejidad operacional vs el beneficio de alinear incentivos
- Comisiones por cohorte de cliente: pagar más por clientes que ya demostraron retención

**5. Dashboard financiero del canal de afiliados**
Explícame qué métricas financieras monitorear de forma continua:
- Revenue por canal de afiliados vs directo vs otros canales: comparación de márgenes netos
- CPA real vs CPA objetivo por afiliado y por categoría de afiliado
- LTV de clientes adquiridos por afiliados vs otros canales: ¿son mejores o peores clientes?
- Gross margin por canal considerando todos los costes del canal
- Payback period del canal de afiliados

**6. Cuándo escalar, cuándo optimizar y cuándo cortar**
El modelo financiero debe guiar las decisiones de gestión del programa. Explícame:
- Cómo usar el modelo para decidir cuándo aumentar o reducir comisiones
- Las señales financieras que indican que hay fraude significativo en el programa
- Cómo evaluar financieramente si vale la pena lanzar en una red nueva vs profundizar en la existente
- Cuándo el canal de afiliados ha crecido lo suficiente para justificar un equipo dedicado

Dame ayuda construyendo el modelo con números reales cuando me cuentes los datos de mi empresa.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Construir el modelo financiero completo de un programa de afiliados para calcular rentabilidad real',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal de los programas de afiliados: contratos, divulgación y cumplimiento normativo',
                'description'       => 'Gestiona el marco legal de un programa de afiliados: contratos con publishers, requisitos de divulgación en diferentes jurisdicciones y cumplimiento de normativas de publicidad.',
                'prompt_content'    => <<<'PROMPT'
Eres un abogado especializado en marketing digital, publicidad online y comercio electrónico con experiencia asesorando a empresas que operan programas de afiliados en mercados europeos y americanos. Conoces las regulaciones de la FTC en Estados Unidos, las directrices de la CNMC y los requisitos de la UE en materia de publicidad, así como las mejores prácticas contractuales del sector.

Necesito tu ayuda para construir el marco legal de mi programa de afiliados. Aborda los siguientes aspectos. Esta información es orientativa y no reemplaza el asesoramiento jurídico específico:

**1. El contrato de afiliados: los elementos esenciales**
El contrato es la base de la relación con cada publisher. Explícame qué debe incluir un contrato de afiliados bien construido:
- Definiciones clave: qué se entiende por conversión válida, lead calificado, venta referida
- Modelo de comisión y condiciones de pago: cuándo se genera el derecho a comisión, cuándo caduca, cuándo se paga
- Clausulado de uso de marca: qué puede y no puede hacer el afiliado con tu nombre, logo, keywords en SEM
- Conductas prohibidas: spam, cookie stuffing, falsas afirmaciones sobre el producto, prácticas de SEO black hat
- Proceso de validación y ajustes de comisión: devoluciones, cancelaciones, fraude
- Terminación: causas de terminación unilateral, plazos de preaviso, qué pasa con las comisiones pendientes
- Legislación aplicable y jurisdicción: especialmente relevante en programas internacionales

**2. Requisitos de divulgación para afiliados**
La divulgación de la relación comercial es obligatoria en la mayoría de jurisdicciones. Explícame:
- Los requisitos de la FTC en EEUU: qué constituye una divulgación suficientemente clara y prominente, dónde debe aparecer, qué lenguaje es aceptable
- Los requisitos en Europa bajo la Directiva de Prácticas Comerciales Desleales y regulaciones nacionales: blogs, redes sociales, comparadores, email marketing
- Cómo los requisitos varían según el canal del afiliado: post de blog vs story de Instagram vs email vs comparador de precios
- La responsabilidad del anunciante por las prácticas de divulgación de sus afiliados: qué riesgo asumes si un afiliado no divulga correctamente
- Cómo incluir en tu contrato de afiliados la obligación de divulgar correctamente y qué mecanismos de cumplimiento son razonables

**3. Protección de datos y GDPR en programas de afiliados**
El tracking de afiliados implica datos personales. Explícame:
- Quién es responsable del tratamiento de los datos de los usuarios que pasan por los links de afiliados
- Cómo el tracking de afiliados debe adaptarse al consentimiento de cookies bajo ePrivacy y GDPR
- Los datos que puedes compartir con tus afiliados sobre las conversiones y los límites legales
- Cómo gestionar las solicitudes de derechos de los interesados cuando los datos están distribuidos entre tú y la plataforma de afiliados
- El impacto del GDPR en el uso de redes de afiliados: qué DPAs necesitas tener con la red

**4. Propiedad intelectual y uso de marca**
Los afiliados usan tu marca para vender. Explícame cómo protegerte:
- Licencia de marca en el contrato de afiliados: qué puedes autorizar, qué debes prohibir explícitamente
- Brand bidding en SEM: qué restricciones puedes imponer legalmente sobre el uso de tus keywords de marca en Google Ads
- Afiliados que crean contenido con tu imagen de marca: qué derechos conservas sobre ese contenido
- Cómo gestionar el uso no autorizado de tu marca por parte de afiliados o ex-afiliados

**5. Cumplimiento de normativas de publicidad específicas por sector**
Algunos sectores tienen regulaciones adicionales. Explícame las más relevantes:
- Servicios financieros: restricciones en la promoción de productos financieros por parte de afiliados no regulados
- Salud y bienestar: las líneas que no se pueden cruzar en las afirmaciones sobre productos de salud
- Juego y apuestas: el marco regulatorio de la afiliación en un sector altamente regulado
- Alimentación y suplementos: las restricciones en la publicidad de propiedades nutricionales

**6. Gestión de conflictos con afiliados**
Las disputas son inevitables. Explícame:
- Cómo estructurar el proceso de resolución de disputas en el contrato para evitar que lleguen a litigio
- Cómo gestionar la terminación de un afiliado por conducta fraudulenta: evidencia necesaria, proceso, riesgos legales
- Cómo gestionar la reclamación de un afiliado que considera que sus comisiones han sido mal calculadas o rechazadas injustamente
- El uso de mediación o arbitraje como alternativa al litigio en disputas de bajo valor

Dame orientación adaptada a mi jurisdicción principal y tipo de programa cuando me cuentes más contexto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir el marco legal completo de un programa de afiliados: contratos, divulgación y cumplimiento',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer referral programs: convertir clientes satisfechos en canal de adquisición',
                'description'       => 'Diseña un programa de referidos para clientes que aprovecha la satisfacción existente para generar nuevos clientes de alta calidad a través de recomendaciones genuinas.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en customer success y growth con experiencia diseñando programas de referidos para clientes en empresas B2B y B2C. Entiendes que los clientes satisfechos son el mejor canal de adquisición pero también el más infrautilizado, y sabes cómo construir programas que convierten esa satisfacción en recomendaciones sistemáticas sin resultar forzados o transaccionales.

Necesito tu ayuda para diseñar un programa de referidos para los clientes de mi empresa. Aborda los siguientes aspectos:

**1. Identificar el momento y el cliente correcto para el referral**
No todos los clientes y no todos los momentos son igualmente buenos para pedir una referencia. Explícame:
- Cómo identificar a los clientes con mayor probabilidad de referir: señales de satisfacción (NPS alto, uso frecuente, expansión de cuenta, testimoniales positivos)
- El timing perfecto para solicitar el referral: después de un momento de éxito, al renovar, cuando alcanzan un milestone importante en el uso del producto
- Cómo segmentar la aproximación según el perfil del cliente: el referral de un cliente enterprise necesita ser tratado diferente al de un SMB
- Por qué pedir referencias demasiado pronto o a clientes equivocados daña la relación y la percepción de la marca

**2. Diseño del programa: estructura e incentivos en B2B**
El programa de referidos B2B funciona diferente al B2C. Explícame:
- Modelos de incentivo para B2B: descuento en la próxima renovación, créditos de servicio, donación a una causa, experiencias. Qué funciona y qué resulta inapropiado según el tamaño del cliente
- Cómo gestionar las políticas de compliance de los clientes grandes que prohíben a sus empleados aceptar incentivos
- El papel del CSM en el proceso de referral: cuándo involucrarle y cuándo automatizarlo
- Cómo estructurar el referral entre peers: facilitar que el cliente haga la introducción a su red sin sentirse como vendedor

**3. El proceso de referral: facilitar sin forzar**
La fricción mata los programas de referidos. Explícame cómo diseñar un proceso que el cliente quiera seguir:
- Cómo solicitar el referral de forma que parezca natural y no transaccional: el mensaje correcto, el canal correcto, la frecuencia correcta
- Tipos de referral: introducción directa (el mejor pero el más difícil), testimonio para un prospecto concreto, participación en un caso de estudio o webinar, permiso para ser referencia en propuestas
- Cómo hacer que el cliente que refiere quede bien con su contacto: solo refieren cuando están seguros de que el producto es adecuado para el referido
- Qué pasa después de la introducción: cómo gestionar la oportunidad sin que el cliente que refirió sienta que perdió el control

**4. Gestión de referencias en el proceso de ventas**
Las referencias son diferentes a los leads normales. Explícame:
- Cómo estructurar el proceso de ventas para capitalizar la confianza que viene con una referencia
- La conversación con el prospecto referido: qué sabe, qué espera, cómo aprobar rápidamente el tiempo de evaluación
- Cómo usar referencias que no son introducción directa: clientes como casos de estudio, testimoniales, calls de referencia
- Cómo gestionar la situación cuando el referido no convierte: comunicación con el cliente que refirió

**5. Automatización y escala del programa de referidos**
Cómo hacer que el programa funcione de forma sistemática. Explícame:
- Qué partes del proceso se pueden automatizar sin perder el toque personal: recordatorios de solicitud, seguimiento del estado del referido, comunicación del incentivo
- Cómo integrar el programa de referidos en el CRM y en el flujo de trabajo del CSM para que no dependa de que alguien lo recuerde
- Cómo construir una comunidad de advocates que proactivamente recomiendan tu producto: programas de clientes distinguidos, advisory boards, beta programs

**6. Métricas del programa de referidos B2B**
Cómo medir el éxito y optimizar. Explícame:
- KPIs del programa: número de referencias generadas, tasa de conversión de referencias vs otros canales, LTV de clientes referidos, tiempo de cierre
- Cómo atribuir correctamente las referencias cuando el CSM está muy involucrado en facilitar el proceso
- Qué reportar a la dirección sobre el impacto del programa
- Cómo identificar qué palancas mejorar: ¿falta de solicitudes, falta de conversión, o los clientes satisfechos simplemente no tienen red relevante?

Adapta las recomendaciones a mi tipo de negocio y base de clientes cuando me cuentes más contexto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar un programa de referidos de clientes que convierte la satisfacción en adquisición sistemática',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Afiliación como ingreso pasivo del freelance: recomendar y cobrar',
                'description'       => 'Construye un sistema de ingresos por afiliación que complementa tus servicios freelance, recomendando herramientas y servicios que ya usas y en los que confías.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor especializado en monetización para freelancers y creadores de contenido. Has ayudado a cientos de profesionales independientes a construir flujos de ingresos adicionales a través de la afiliación, sin comprometer su reputación ni sus relaciones con los clientes. Tu filosofía es que el mejor ingreso pasivo viene de recomendar solo lo que realmente usas y en lo que realmente confías.

Necesito tu ayuda para construir un sistema de ingresos por afiliación como freelance. Aborda los siguientes aspectos:

**1. El modelo mental correcto: afiliación como servicio, no como publicidad**
Antes de hablar de programas y comisiones, ayúdame a entender el encuadre correcto:
- La diferencia entre afiliación genuina (recomendar lo que usas y conoces bien) y afiliación oportunista (recomendar lo que paga más)
- Por qué los freelancers tienen una posición única para la afiliación: reputación, confianza de los clientes, expertise en herramientas del sector
- Los riesgos de la afiliación mal hecha: pérdida de confianza de clientes, daño a la reputación, recomendaciones que no cumplen lo que prometían
- Cómo encontrar el equilibrio entre monetizar tus recomendaciones y mantener la integridad de tu criterio

**2. Identificar las oportunidades de afiliación con mayor potencial**
No todos los programas de afiliados valen la pena para un freelance. Explícame cómo evaluar qué programas seguir:
- Herramientas que ya usas y recomiendas: cómo comprobar si tienen programa de afiliados (buscar en la web, contactar directamente)
- Criterios de evaluación de un programa: comisión, duración de la cookie, LTV del producto referido, calidad del soporte al afiliado
- Los tipos de productos con mejores comisiones para freelancers de servicios digitales: SaaS con revenue share, cursos y formación, hosting y dominio, herramientas de diseño y productividad
- Cómo priorizar los programas en los que invertir tiempo: los que encajan mejor con tu audiencia y los que tienen mayor potencial de comisión

**3. Canales para distribuir tus recomendaciones de afiliado**
¿Dónde recomendar productos para que genere ingresos reales? Explícame las opciones:
- Tu sitio web o portfolio: recursos y herramientas recomendadas, reseñas genuinas de herramientas que usas
- Newsletter o email list: el canal con mayor conversión porque la audiencia ya confía en ti
- Redes sociales: LinkedIn, Twitter/X, Instagram, YouTube. Cuál funciona mejor según tu tipo de servicio y audiencia
- En el propio trabajo con clientes: cómo recomendar herramientas a clientes de forma natural y ética, con o sin divulgación del incentivo
- Comunidades y foros: cómo participar de forma genuina sin que parezca spam

**4. Crear contenido que convierte sin sacrificar la autenticidad**
El contenido de afiliación que convierte es el que ayuda genuinamente. Explícame:
- Tipos de contenido con mayor conversión para afiliados freelance: tutoriales y how-tos de herramientas que usas, comparativas honestas, recursos y stacks de herramientas
- Cómo escribir una reseña de afiliado que sea útil y honesta: incluir los puntos negativos de la herramienta refuerza la credibilidad
- La divulgación de afiliados: cómo hacerla de forma clara sin que ahuyente a los lectores, y por qué es obligatoria legalmente en la mayoría de países
- Cómo actualizar el contenido antiguo cuando las herramientas cambian o dejan de ser buenas opciones

**5. Tracking y gestión de tus ingresos de afiliados**
Una vez empiezas con varios programas, necesitas organización. Explícame:
- Cómo gestionar múltiples programas de afiliados sin volverte loco: hojas de cálculo, dashboards, alertas de pago
- Tracking de qué contenido convierte mejor: UTMs, comparativa entre canales, atribución
- Gestión de los pagos: frecuencia, umbrales mínimos, métodos de pago, implicaciones fiscales
- Cómo saber cuándo un programa de afiliados vale la pena seguir activo vs eliminarlo

**6. Escalar los ingresos de afiliación sin que se convierta en otro trabajo**
El riesgo de la afiliación es que deje de ser pasiva. Explícame:
- Cómo elegir en qué programas profundizar para maximizar ingresos sin multiplicar el esfuerzo
- Automatización básica: links de afiliado en respuestas de email automáticas, recursos descargables con links de afiliado, plantillas reutilizables
- Cuándo tiene sentido crear contenido específico para afiliación (invirtiendo tiempo activo) vs cuándo esperar que el contenido existente convierta
- El potencial realista de la afiliación como ingreso complementario para un freelance: expectativas correctas y ejemplos de lo que es factible

Dame recomendaciones concretas adaptadas a mi tipo de servicios freelance y audiencia cuando me cuentes más contexto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Construir un sistema de ingresos por afiliación como freelance basado en recomendaciones genuinas',
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
