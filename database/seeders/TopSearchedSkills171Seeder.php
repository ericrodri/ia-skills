<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills171Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de telecomunicaciones',
                'description'      => 'Estrategias de marketing para operadoras, ISPs y empresas de conectividad: diferenciarse en un mercado de commodities donde el precio es el primer argumento de todos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de marketing con experiencia en el sector de las telecomunicaciones, tanto en operadoras de gran consumo como en ISPs regionales y empresas de conectividad B2B. Conoces el reto de diferenciar un producto que el cliente percibe como commodity y las estrategias que consiguen que la marca importe más que el precio.

Necesito que me ayudes a desarrollar una estrategia de marketing para mi empresa del sector de las telecomunicaciones.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de empresa (operadora nacional, ISP regional, MVNO, empresa de conectividad B2B, plataforma de comunicaciones), productos principales (fibra, móvil, convergente, cloud, conectividad empresarial), segmento de cliente (residencial, pyme, gran empresa) y el principal problema de marketing que quieres resolver]

**Lo que necesito que desarrolles:**

1. **El reto de diferenciarse en un mercado de commodities**
   - Por qué la conectividad es percibida como commodity y qué estrategias rompen esa percepción
   - Las dimensiones de diferenciación que funcionan en telecomunicaciones: calidad de red, servicio al cliente, experiencia digital, propuesta de valor empaquetada
   - La trampa del precio: por qué competir en precio destruye el margen y cómo construir valor percibido que justifique un precio superior
   - Los casos de operadoras que han conseguido diferenciarse: Jazztel antes de la adquisición, Pepephone, Digi y qué podemos aprender de sus estrategias

2. **Adquisición de clientes en telecomunicaciones**
   - SEO para telecomunicaciones: las keywords de alta intención, las comparativas y cómo posicionarse cuando los comparadores dominan la primera página
   - La publicidad de telecomunicaciones en TV vs digital: cuándo cada canal tiene sentido según el tipo de empresa y presupuesto
   - El canal de distribución físico (tiendas, distribuidores, agentes): cómo sigue siendo relevante y qué tipo de cliente lo necesita
   - Las ventas puerta a puerta y llamadas outbound: el canal más controvertido del sector y cuándo tiene ROI positivo
   - El marketing de portabilidad: la captación del cliente de la competencia y los mensajes que funcionan

3. **Retención y reducción del churn**
   - Los modelos predictivos de churn en telecomunicaciones: las señales que indican que un cliente va a portarse y cuándo actuar
   - Los programas de retención proactiva: cuándo contactar, qué ofrecer y el límite entre retener y entrenar al cliente a amenazar con irse
   - La renovación de contratos: cómo convertir la renovación en una oportunidad de upsell en lugar de una negociación a la baja
   - El customer lifetime value en telecomunicaciones: cómo calcularlo y usarlo para decidir cuánto invertir en retener a cada cliente

4. **Marketing de productos convergentes**
   - El empaquetado de servicios: cómo construir el bundle que maximiza el valor percibido y bloquea la portabilidad parcial
   - La comunicación del pack convergente: cómo explicar el ahorro sin que el cliente solo vea el precio total
   - La venta cruzada (cross-sell) de fibra a móvil y viceversa: los momentos y los mensajes que funcionan mejor
   - La TV como elemento de retención: el papel del contenido premium en la reducción del churn

5. **Marketing B2B de conectividad empresarial**
   - Los segmentos del B2B en telecomunicaciones: pyme, mediana empresa, gran empresa y administración pública, y cómo el marketing difiere en cada uno
   - El proceso de compra corporativo: quién decide (IT, dirección general, compras) y cómo llegar a cada decisor
   - Las soluciones de conectividad avanzada (SD-WAN, MPLS privado, conectividad internacional): cómo comunicar propuestas técnicas complejas al decisor no técnico
   - Las licitaciones públicas y los marcos de contratación centralizada: cómo el marketing contribuye a ganar contratos en la administración

6. **Experiencia de cliente y NPS en telecomunicaciones**
   - Los momentos de la verdad en la experiencia del cliente de telecomunicaciones: activación, primera factura, primera incidencia, renovación y baja
   - El NPS del sector: los benchmarks, los principales drivers de promotores y detractores y las acciones que realmente mueven el indicador
   - La gestión de las redes sociales como canal de atención y reputación: cómo las operadoras lo hacen bien y cómo gestionan las crisis virales

7. **Comunicación de la cobertura y calidad de red**
   - Cómo comunicar la calidad de red sin que suene a publicidad vacía: los datos, los rankings y las certificaciones que tienen credibilidad
   - La cobertura 5G: cómo comunicar el beneficio cuando la mayoría de los clientes aún no saben para qué lo necesitan
   - El mapa de cobertura como herramienta de marketing: cómo usarlo para convertir y para gestionar expectativas

Dame una estrategia de marketing accionable con ejemplos concretos del sector español, benchmarks de conversión cuando los tengas disponibles y las acciones de mayor impacto según el tipo y tamaño de mi empresa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Estrategia de marketing para operadoras, ISPs y empresas de conectividad en un mercado de commodities',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'APIs de telecomunicaciones',
                'description'      => 'Usa las APIs de las operadoras para construir productos: SMS, voz, verificación, eSIM y los casos de uso que las empresas tech construyen sobre la infraestructura de las telcos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de software especializado en la integración de APIs de telecomunicaciones, con experiencia en plataformas CPaaS (Communications Platform as a Service), APIs de operadoras y la construcción de productos sobre infraestructura de telecomunicaciones. Has trabajado con Twilio, Vonage, AWS Connect, Infobip y APIs directas de operadoras.

Necesito orientación técnica para integrar o construir sobre APIs de telecomunicaciones.

**Mi contexto:**
[DESCRIBE TU PROYECTO: tipo de funcionalidad que quieres implementar (SMS, voz, verificación OTP, eSIM, número virtual, llamada en la app), si ya tienes una plataforma CPaaS elegida o estás evaluando, el stack tecnológico de tu aplicación y el volumen aproximado de mensajes o llamadas que esperas]

**Lo que necesito que cubras:**

1. **El ecosistema de APIs de telecomunicaciones**
   - Las capas del stack de telecomunicaciones: infraestructura de red, señalización SS7/Diameter, plataformas CPaaS y APIs para desarrolladores
   - Los proveedores CPaaS: Twilio, Vonage/Vonage API, Infobip, MessageBird/Bird, AWS SNS/Connect, Sinch y cuándo elegir cada uno
   - Las APIs directas de operadoras (GSMA Open Gateway, APIs de Telefónica, Orange): qué ofrecen que las CPaaS no tienen y el coste de integrarse directamente
   - El modelo de precios de las CPaaS: price per message, price per minute, compromisos de volumen y cómo estimar el coste de producción

2. **SMS: la API más usada y sus particularidades**
   - Tipos de SMS: SMS transaccional (OTP, notificaciones), SMS promotional (marketing) y las restricciones distintas para cada uno
   - Los sender IDs: numéricos, alfanuméricos y shortcodes, cuándo usar cada uno y los requisitos de registro por país
   - La entrega de SMS y los problemas de trazabilidad: los webhooks de delivery receipt, los estados posibles y cómo interpretar los fallos
   - SMS en España: el registro de remitentes en la CNMC, las restricciones del sector financiero y salud, y el opt-out obligatorio
   - SMS vs WhatsApp Business vs RCS: cuándo SMS sigue siendo la mejor opción y cuándo tiene sentido migrar

3. **OTP y verificación de número**
   - La verificación de número de teléfono como paso de onboarding: las mejores prácticas de UX y los errores que generan abandono
   - Silent authentication y Number Verify (GSMA Open Gateway): la verificación sin OTP visible y cómo implementarla
   - Flash Call y missed call OTP: las alternativas de menor coste a SMS OTP y sus limitaciones
   - La protección contra SMS pumping fraud: el fraude donde los atacantes generan millones de OTPs para enriquecer a operadoras cómplices y cómo detectarlo y prevenirlo

4. **APIs de voz**
   - Llamadas outbound programáticas: los casos de uso (confirmaciones de cita, alertas de seguridad, cobros) y la configuración básica
   - Voz en la app (WebRTC): cómo implementar llamadas dentro de la aplicación sin revelar números reales, las librerías cliente y los requisitos del servidor
   - IVR (Interactive Voice Response): cómo construir flujos de voz con DTMF y reconocimiento de voz, los builders visuales de Twilio Studio o equivalentes
   - Call recording y transcripción: la implementación, la normativa aplicable (RGPD, LGT) y cómo obtener el consentimiento

5. **eSIM y gestión de conectividad**
   - La API de eSIM: cómo los operadores MVNO y las plataformas de IoT gestionan perfiles eSIM programáticamente
   - RSP (Remote SIM Provisioning) y la arquitectura SM-DP+: lo que hay detrás de la activación de una eSIM
   - Las APIs de conectividad IoT: gestión de SIMs, control de datos, geolocalización y los proveedores especializados (1NCE, Twilio Super SIM, Hologram)
   - Números virtuales y DID (Direct Inward Dial): la adquisición de números en múltiples países y la gestión del enrutamiento

6. **Seguridad y cumplimiento en APIs de telecomunicaciones**
   - La autenticación de APIs: los esquemas que usan los CPaaS (API key, OAuth 2.0, webhook signatures) y las mejores prácticas de seguridad
   - STIR/SHAKEN y la autenticación de llamadas: qué es, cómo afecta a tus llamadas salientes y cómo implementar la verificación
   - RGPD y las APIs de telecomunicaciones: el tratamiento de números de teléfono como dato personal, la retención de logs y el consentimiento
   - La normativa española: la LGT, las obligaciones de las comunicaciones comerciales y el registro de actividad

7. **Mi implementación específica**
   - Dame el plan de implementación para el caso de uso que he descrito
   - La elección de proveedor CPaaS para mi caso y los criterios de decisión
   - Los errores más frecuentes en producción con APIs de telecomunicaciones y cómo evitarlos desde el diseño

Incluye fragmentos de código en el lenguaje más apropiado para los casos de uso más comunes, referencias a la documentación oficial de los principales proveedores y los costes aproximados para calibrar el presupuesto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Integración de APIs CPaaS para SMS, voz, OTP y eSIM en productos digitales',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'UX para servicios de conectividad',
                'description'      => 'Diseño de la experiencia de cliente de las operadoras: contratación, configuración de servicios, incidencias y el diseño que hace que los clientes gestionen su contrato sin llamar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador UX senior especializado en la experiencia de cliente de operadoras de telecomunicaciones y proveedores de conectividad. Has trabajado en el rediseño de procesos de contratación, apps de autogestión, portales de cliente y flujos de incidencias en un sector donde la experiencia de usuario tiene un impacto directo en el churn y el coste de atención.

Necesito que me ayudes a diseñar o mejorar la experiencia de usuario de un servicio de telecomunicaciones.

**Mi contexto:**
[DESCRIBE TU PROYECTO: tipo de interfaz o proceso (app de autogestión, proceso de contratación web, portal de empresa, flujo de activación de servicio, proceso de declaración de avería), el problema concreto de UX que quieres resolver y los datos disponibles sobre abandonos o llamadas al call center que genera el problema actual]

**Lo que necesito que desarrolles:**

1. **El contexto del diseño para telecomunicaciones**
   - Por qué el diseño para telco es especialmente difícil: la complejidad de los productos, la facturación incomprensible y la mezcla de motivaciones emocionales y racionales
   - Los tres momentos críticos en la relación con el cliente: la contratación, la primera incidencia y la renovación/intento de baja
   - La conexión entre diseño y churn: qué problemas de UX generan directamente bajas y cuáles generan llamadas al call center

2. **Diseño del proceso de contratación**
   - El funnel de contratación en telecomunicaciones: dónde se producen los abandonos más frecuentes y qué diseño los reduce
   - La selección de tarifa: cómo diseñar la comparativa de tarifas que ayuda a decidir sin abrumar, cuando hay 15 opciones y cada una tiene 20 condiciones
   - El proceso de portabilidad: la explicación de qué va a pasar, cuándo y cómo, que reduce la ansiedad del cliente durante el cambio de operadora
   - La verificación de identidad (KYC): cómo hacer el proceso obligatorio de validación lo menos friccionante posible
   - La activación del servicio: el estado de espera entre la contratación y el encendido, y el diseño que gestiona la expectativa sin generar llamadas

3. **App de autogestión: el diseño que elimina llamadas**
   - La arquitectura de información del área privada: lo que el cliente busca cuando entra (la factura, el consumo, una incidencia) y cómo llegar en dos toques
   - El consumo de datos en tiempo real: cómo visualizarlo sin generar ansiedad y con alertas que ayudan antes del problema
   - La factura comprensible: el rediseño de la factura de telecomunicaciones es uno de los proyectos de UX con mayor impacto en llamadas al call center
   - El cambio de tarifa en autoservicio: el flujo que permite la migración sin hablar con nadie y los guardianes de la conversión que los equipos de negocio suelen añadir
   - La gestión de extras y servicios: activación y desactivación de roaming, servicios de valor añadido, control parental

4. **El flujo de incidencias**
   - El diseño del diagnóstico guiado: cómo ayudar al cliente a resolver la incidencia él mismo antes de que contacte con el soporte
   - Los estados del ticket de incidencia: cómo representar el avance cuando el problema es un fallo de red que no tiene solución inmediata
   - La comunicación proactiva de averías: el mensaje que informa del problema antes de que el cliente se dé cuenta, y cómo reduce las llamadas de forma dramática
   - La compensación automática por avería: el diseño del proceso de compensación que el cliente puede activar sin llamar

5. **Diseño para el cliente de empresa (portal B2B)**
   - Los usuarios del portal de empresa no son solo uno: el administrador IT, el responsable de compras y el usuario final tienen necesidades distintas
   - La gestión de líneas de empresa: el diseño que hace fácil añadir, eliminar y modificar líneas en una cartera de cientos
   - El consumo y la facturación de empresa: los cuadros de mando que el responsable de IT o administración realmente necesita
   - La gestión de incidencias empresariales: el proceso diferenciado para clientes de empresa que exigen mayor nivel de servicio

6. **Accesibilidad y diseño inclusivo en telecomunicaciones**
   - Los clientes mayores como segmento crítico: el diseño que funciona para usuarios con menor familiaridad digital sin perjudicar a los usuarios avanzados
   - Las obligaciones de accesibilidad (WCAG 2.1 AA) y cómo implementarlas en apps de operadora sin sacrificar el diseño
   - El diseño para conexiones lentas: las apps de telco deben funcionar bien aunque la conexión no sea buena, la ironía que el diseño debe resolver

7. **Investigación de usuario para telecomunicaciones**
   - Cómo acceder a usuarios reales de una operadora para hacer investigación: los métodos que funcionan sin depender del permiso de la empresa
   - Las métricas de diseño que importan en telco: ratio de autogestión, deflection rate (llamadas evitadas), tiempo hasta la primera acción exitosa
   - Cómo diseñar sin datos: los heurísticos del sector para cuando no tienes analítica ni acceso a investigación cualitativa

Dame wireframes descritos en texto para los flujos más críticos, los patrones de diseño que más impacto tienen en deflection de llamadas y los errores de diseño más frecuentes que cometen los equipos de producto de las operadoras.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Diseño UX de apps de autogestión y procesos de contratación para operadoras de telecomunicaciones',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de soluciones de telecomunicaciones B2B',
                'description'      => 'Venta de conectividad, cloud y servicios de comunicaciones a empresas: pliegos, requisitos técnicos y negociación de contratos plurianuales con departamentos de IT.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un account executive senior especializado en la venta de soluciones de telecomunicaciones y conectividad para empresas medianas y grandes. Has cerrado contratos plurianuales de fibra dedicada, MPLS, SD-WAN, UCaaS y servicios de seguridad de red con directores de IT, CIOs y responsables de compras de empresas con múltiples sedes.

Necesito que me ayudes a mejorar mi proceso de venta de telecomunicaciones B2B.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de soluciones que vendes (fibra, SD-WAN, UCaaS, SASE, VoIP empresarial, conectividad internacional), perfil de empresa cliente, si eres del canal de un operador o vendes para el operador directamente, y el principal obstáculo en tu proceso de venta]

**Lo que necesito que desarrolles:**

1. **El proceso de venta de telecomunicaciones B2B**
   - Las particularidades de la venta de telecomunicaciones a empresa: el ciclo largo, los múltiples decisores y la dependencia de los procesos de compra corporativos
   - Los tres tipos de oportunidad: nuevo cliente desde cero, renovación de contrato existente y expansión en cliente actual, y cómo el proceso de venta difiere en cada caso
   - El mapa de stakeholders en una venta de telecomunicaciones: quién influye, quién decide, quién bloquea y quién firma, y cómo gestionar cada rol
   - La discovery en telecomunicaciones B2B: las preguntas que revelan el problema real detrás del RFP o la solicitud de oferta

2. **La propuesta técnica que gana**
   - Cómo estructurar una propuesta de telecomunicaciones B2B que el CIO y el director de compras puedan leer: la parte técnica y la parte comercial para cada audiencia
   - El diseño de la solución: cómo documentar la arquitectura de red propuesta de forma que sea comprensible sin ser superficial
   - El TCO (Total Cost of Ownership) de la solución: cómo construir el análisis que justifica el precio superior frente a alternativas más baratas
   - Las referencias y casos de éxito: cómo presentar casos del mismo sector que el cliente para reducir el riesgo percibido

3. **La respuesta a pliegos y RFPs**
   - Cómo leer un pliego de telecomunicaciones para identificar los requisitos eliminatorios y los criterios de valoración que realmente deciden
   - La decisión de ofertar o no ofertar: los criterios para no perder tiempo en licitaciones que no vas a ganar
   - La redacción técnica de la respuesta al pliego: cómo responder a cada punto de manera que quede constancia de tu cumplimiento
   - Las preguntas al pliego (aclaraciones): cómo usarlas estratégicamente para clarificar requisitos que te favorecen y señalar ambigüedades que benefician a la competencia

4. **Venta de soluciones complejas (SD-WAN, SASE, UCaaS)**
   - Cómo explicar SD-WAN al director de IT que aún no entiende la diferencia con MPLS: el discurso que genera el "aha moment"
   - SASE y la convergencia de red y seguridad: cómo posicionarla en un cliente que tiene proveedores separados de conectividad y ciberseguridad
   - UCaaS (Microsoft Teams, Cisco Webex, plataformas propias): la venta del cambio de infraestructura de comunicaciones cuando el cliente "ya tiene Teams"
   - Los proyectos de migración: cómo vender la migración de RDSI a VoIP en clientes que llevan 15 años con la misma solución y tienen miedo al cambio

5. **Negociación y cierre de contratos plurianuales**
   - La negociación de tarifa con el departamento de compras: cómo defender el precio cuando el comprador solo habla de coste por megabyte
   - Los descuentos por volumen y plazo: cuándo ofrecerlos, cuánto y cómo estructurarlos para que no destruyan el margen futuro
   - Los SLAs y las penalizaciones: cómo negociar los compromisos de servicio que son razonables para el operador sin perder la licitación
   - Las cláusulas de permanencia y salida: cómo estructurarlas para proteger la inversión del operador sin bloquear al cliente

6. **Gestión de la relación con clientes de empresa**
   - El modelo de account management en telecomunicaciones B2B: la revisión de servicio periódica como herramienta de retención y upsell
   - La gestión de la incidencia crítica en un cliente de empresa: el protocolo de escalado que preserva la relación cuando el servicio falla
   - La renovación anticipada: cuándo abrir la conversación de renovación y cómo posicionarla como una oportunidad para el cliente, no una presión para el vendedor

7. **Mi caso de venta específico**
   - Analiza la oportunidad o el obstáculo que he descrito y dame la estrategia recomendada
   - Los argumentos específicos para la solución y el perfil de cliente que has descrito
   - Los errores más frecuentes que cometen los vendedores de telecomunicaciones B2B en este tipo de situación

Dame un proceso de venta detallado con guiones para los momentos clave, los argumentos diferenciadores más efectivos y las objeciones más frecuentes con sus respuestas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Proceso de venta consultiva de conectividad y servicios de telecomunicaciones B2B',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Plataformas de comunicaciones (CPaaS)',
                'description'      => 'Plataformas que llevan SMS, voz y video a cualquier aplicación: decisiones de producto de Twilio, Vonage y los operadores que compiten en el mercado de comunicaciones como servicio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager senior especializado en plataformas CPaaS (Communications Platform as a Service) con experiencia en el diseño de APIs de comunicaciones, la gestión de ecosistemas de desarrolladores y la competencia en el mercado de comunicaciones como servicio. Has trabajado en o con plataformas como Twilio, Vonage, Infobip, AWS Connect o equivalentes.

Necesito orientación para tomar decisiones de producto en una plataforma de comunicaciones.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de plataforma (CPaaS pura, operadora que abre APIs, plataforma de nicho para un sector concreto, plataforma UCaaS), tu posición (PM de la plataforma, de un producto que integra CPaaS, o evaluando alternativas), y el principal reto de producto que quieres resolver]

**Lo que necesito que analices:**

1. **La dinámica competitiva del mercado CPaaS**
   - Cómo Twilio construyó el mercado y por qué ahora está bajo presión: el modelo de plataforma para desarrolladores y sus límites
   - Los diferentes modelos de CPaaS: el modelo API-first para desarrolladores, el modelo de solución vertical para industrias y el modelo de operadora que abre su red
   - Los nuevos competidores: por qué las operadoras (Telefónica Open Gateway, Deutsche Telekom APIs) están intentando recuperar el valor que las CPaaS les quitaron
   - El precio como ventaja competitiva: cómo los operadores de bajo coste (Infobip, Bird, Sinch) compiten con Twilio y cuál es la respuesta del líder

2. **Decisiones de producto de la API de SMS**
   - La evolución del SMS: por qué SMS sigue creciendo en volumen mientras todos predicen su muerte
   - El fraude de SMS pumping: el problema que destruye la confianza de los clientes y cómo las plataformas lo están abordando en el producto
   - RCS Business Messaging: la oportunidad que Google está abriendo y cómo posicionarla en el roadmap frente al SMS clásico
   - La plataforma omnicanal: cuándo tiene sentido que una CPaaS de SMS añada WhatsApp, Telegram y email, y cuándo es distracción

3. **Diseño de APIs para desarrolladores**
   - Los principios de diseño de APIs que han construido las mejores plataformas para desarrolladores: predictibilidad, consistencia y la pista de despegue de 5 minutos
   - La documentación como producto: por qué las empresas que más invierten en developer experience ganan más cuota que las que tienen el mejor precio
   - Los SDKs: cuántos lenguajes soportar, cuándo mantenerlos internamente y cuándo dejarlos a la comunidad
   - El sandbox de desarrollo: las decisiones de diseño del entorno de pruebas que determinan cuántos desarrolladores llegan a producción

4. **Plataforma y ecosistema**
   - Los marketplaces de aplicaciones en CPaaS: cuándo tiene sentido construir un ecosistema de partners y ISVs, y cómo incentivarlo
   - Las integraciones nativas: qué integraciones con CRMs, helpdesks y plataformas de marketing generan más ARR por esfuerzo de PM
   - El modelo de uso vs el modelo de seat: la decisión de pricing que más impacta en la economía de la plataforma y en el comportamiento del cliente
   - Los enterprise features: los requisitos de seguridad, compliance y SLA que desbloquean los contratos grandes y cómo priorizarlos sin destruir la experiencia del desarrollador independiente

5. **Producto de voz y video**
   - La plataforma de voz: las diferencias técnicas y de producto entre el outbound programático, el inbound con IVR y la voz en la app (WebRTC)
   - Contact Center as a Service (CCaaS): la extensión natural de CPaaS hacia el contact center y los players que dominan ese mercado
   - Video: cuándo añadir video a una CPaaS tiene sentido y cuándo compite con Zoom o Teams sin posibilidad de ganar
   - AI en comunicaciones: los asistentes de voz, la transcripción en tiempo real y el análisis de llamadas como features del producto de comunicaciones

6. **Métricas de producto de una CPaaS**
   - Las métricas que importan: MAU de desarrolladores, delivery rate, latency P99, NPS de API, expansión de revenue dentro de la cuenta
   - Cómo medir la experiencia del desarrollador sin acceso a investigación cualitativa permanente
   - El cohort analysis de clientes CPaaS: cuándo un cliente de desarrollo pasa a ser un cliente de producción y cuándo un cliente de producción puede churnear

7. **Mi decisión de producto**
   - Analiza el reto o decisión que he descrito y dame un marco de análisis
   - Las opciones y los criterios para elegir entre ellas
   - Los errores más frecuentes de producto en plataformas CPaaS que has observado

Dame análisis específicos, con ejemplos de decisiones reales de plataformas conocidas, benchmarks de developer experience cuando los tengas y los trade-offs que definen el producto de una plataforma de comunicaciones exitosa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Decisiones de producto para plataformas CPaaS de SMS, voz y video',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de equipos técnicos en telecomunicaciones',
                'description'      => 'Los técnicos de red e ingenieros de sistemas que deben evolucionar hacia software-defined networking y la nube: gestión del cambio y el nuevo perfil de talento en telco.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de RRHH con especialización en la gestión de talento técnico en el sector de las telecomunicaciones, con experiencia en la transformación de equipos de red tradicional hacia perfiles de ingeniería de software, cloud y redes definidas por software. Conoces la tensión entre el conocimiento profundo de red de los profesionales veteranos y las nuevas habilidades que demanda el sector.

Necesito orientación para gestionar y transformar el equipo técnico de mi organización de telecomunicaciones.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de organización (operadora, empresa de servicios TI con área de telecomunicaciones, proveedor de equipamiento), perfiles técnicos que tienes en el equipo, los conocimientos que necesitas desarrollar y el principal reto de gestión de talento que enfrentas]

**Lo que necesito que desarrolles:**

1. **La transformación del perfil técnico en telecomunicaciones**
   - De las redes físicas al software-defined networking: qué tiene que aprender un ingeniero de red tradicional y cuánto tiempo lleva hacer la transición
   - El perfil del ingeniero de telecomunicaciones en 2025: las habilidades que el sector demanda y cuáles ya no son relevantes
   - La convergencia de red y cloud: por qué el ingeniero de telecomunicaciones del futuro necesita conocimientos de AWS/Azure/GCP y cómo introducirlos
   - Los nuevos perfiles que las operadoras están contratando: DevOps de red (NetDevOps), ingenieros de automatización, arquitectos de cloud

2. **Gestión del cambio en equipos técnicos veteranos**
   - La resistencia al cambio en los equipos técnicos de telecomunicaciones: por qué los profesionales más sénior a veces son los más difíciles de transformar
   - Cómo comunicar la transformación tecnológica al equipo sin generar parálisis o fuga de talento crítico
   - El valor del conocimiento profundo de red en el mundo SDN: cómo hacer que los técnicos veteranos vean su experiencia como un activo, no como un lastre
   - Los programas de mentoring inverso: cómo emparejar el conocimiento de red del sénior con las habilidades de software del junior

3. **Programas de upskilling en telecomunicaciones**
   - Ruta de formación de técnico de red a NetDevOps: los pasos, las certificaciones y el tiempo realista para llegar a un nivel productivo
   - Las certificaciones que tienen valor real en el mercado: Cisco CCNP/CCIE, Nokia SRX, Juniper JNCIE para redes; AWS/Azure para cloud; Python para automatización
   - Los programas de formación en Python para redes: las librerías que un ingeniero de red necesita aprender (Netmiko, NAPALM, Nornir) y el orden de aprendizaje
   - Ansible y Terraform para telecomunicaciones: cuándo tiene sentido invertir en la formación y el perfil al que va dirigida

4. **Reclutamiento de talento técnico en telecomunicaciones**
   - Dónde encontrar ingenieros de red con habilidades de automatización: los canales y las señales en el CV que indican competencia real
   - La evaluación técnica de candidatos en telecomunicaciones: qué preguntar, qué hacer hacer y qué prueba técnica tiene más poder predictivo
   - Competir con BigTech y startups por talento de ingeniería: qué puede ofrecer una operadora o empresa telco que estas empresas no pueden
   - El talento internacional en telecomunicaciones: los mercados donde hay ingenieros con el perfil adecuado y las condiciones de contratación

5. **Estructura de equipos técnicos**
   - La organización del equipo de red en un mundo SDN: cómo estructurar los equipos cuando la red se gestiona como software
   - Los capítulos de ingeniería en telecomunicaciones: cómo organizar la especialización técnica en una estructura ágil
   - El equipo de NOC (Network Operations Center) y su evolución: de la vigilancia manual de alarmas a la automatización de la respuesta a incidentes
   - La colaboración entre el equipo de red y el equipo de desarrollo: los modelos que funcionan cuando la red la programa el equipo de software

6. **Evaluación del desempeño técnico**
   - Cómo evaluar el desempeño de los ingenieros de telecomunicaciones más allá del cumplimiento del SLA
   - Los OKRs para equipos de red: cómo convertir la gestión de la disponibilidad de red en objetivos que inspiran
   - La gestión del experto técnico que no quiere ser manager: las carreras técnicas en organizaciones de telecomunicaciones y cómo retener al arquitecto brillante

7. **Plan de transformación del talento para mi situación**
   - El diagnóstico del equipo según el contexto que he descrito: qué perfiles tienen más potencial de transformación y cuáles están en mayor riesgo
   - La hoja de ruta de formación y contratación para los próximos 18 meses
   - Los KPIs de la transformación del talento técnico que puedo presentar a dirección

Dame un plan concreto con cronograma orientativo, señala las fuentes de financiación pública para formación en digitalización y los errores que más frecuentemente cometen las organizaciones de telecomunicaciones en la gestión del cambio técnico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Transformación del talento técnico en telecomunicaciones hacia SDN, cloud y automatización',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Finanzas de las telecomunicaciones',
                'description'      => 'Modelos de negocio de las operadoras: ARPU, churn, capex de red y la economía del despliegue de fibra y 5G que determina la rentabilidad del sector.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista financiero especializado en el sector de las telecomunicaciones, con experiencia en la valoración de operadoras, el análisis del modelo de negocio de los proveedores de servicios de comunicaciones y los proyectos de financiación de infraestructura de red. Conoces tanto los estados financieros de las grandes operadoras como la economía de los ISPs y operadoras regionales.

Necesito un análisis financiero riguroso del negocio de telecomunicaciones que me interesa.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de análisis que necesitas (valoración de operadora, análisis de proyecto de despliegue de fibra, modelo de negocio de MVNO, análisis de inversión en infraestructura de red, benchmarking financiero), tu posición (inversor, CFO, analista, directivo) y las preguntas concretas que quieres responder]

**Lo que necesito que analices:**

1. **El modelo de negocio de una operadora**
   - La cuenta de resultados de una operadora: los ingresos por segmento (residencial, empresa, mayorista), el margen de servicio y el EBITDA que determina la capacidad de inversión
   - El ARPU (Average Revenue Per User): cómo se calcula, por qué está bajo presión y las estrategias que consiguen subirlo
   - El churn: cómo se mide en telecomunicaciones, cuál es un churn razonable por segmento y el impacto de un punto de churn en el valor de la empresa
   - El capex de red: la diferencia entre capex de mantenimiento y capex de crecimiento, y por qué la intensidad de capex del sector telecomunicaciones es el principal limitante de los dividendos

2. **La economía del despliegue de fibra**
   - El modelo de negocio del despliegue FTTH: el coste por paso (homes passed), el coste por conexión (homes connected) y el tiempo de payback
   - Las hipótesis que determinan la rentabilidad: densidad de hogares, tasa de penetración objetivo, precio del servicio y coste de construcción
   - El análisis de zonas: por qué el despliegue en zonas rurales es diferente económicamente y cómo los fondos europeos cambian la ecuación
   - Las alternativas al despliegue propio: el acceso mayorista (NEBA, VULA), las joint ventures de infraestructura y los modelos de InfraCo

3. **La economía del 5G**
   - El negocio case del 5G: por qué los analistas discuten si el 5G tiene un modelo de negocio claro para las operadoras
   - El capex del 5G: cuánto cuesta desplegar 5G, cómo se compara con el 4G y qué porcentaje de las redes ya está upgradeable
   - Los casos de uso del 5G que generan ingresos: el B2C que llega despacio, el B2B con network slicing y los proyectos industriales que son los únicos con willingness-to-pay diferencial
   - Las licencias de espectro: el coste hundido que las operadoras ya han pagado y cómo afecta a la rentabilidad del negocio

4. **Valoración de operadoras de telecomunicaciones**
   - Los múltiplos del sector: EV/EBITDA, EV/EBITDA-Capex (EV/FCF) y por qué los múltiplos de telco son más bajos que otros sectores
   - El DCF de una operadora: cómo construir las hipótesis de ARPU, churn y capex para un modelo a 10 años
   - El valor de la infraestructura: por qué muchas operadoras valen más suma de las partes (torres, fibra, data centers) que como empresa integrada
   - La valoración de MVNOs e ISPs regionales: los ajustes al modelo cuando el negocio es más pequeño y menos diversificado

5. **Métricas financieras clave del sector**
   - El EBITDA After Leases (EBITDAaL) post-NIIF 16: por qué los analistas ahora usan esta métrica y qué cambia en la comparativa de operadoras
   - El Free Cash Flow en telecomunicaciones: por qué el EBITDA elevado no se traduce siempre en FCF y los ajustes que hay que hacer
   - El Return on Invested Capital (ROIC) en telecomunicaciones: por qué es bajo, si hay operadoras que lo consiguen alto y qué explica la diferencia
   - Los dividendos y la sostenibilidad del payout: cómo evaluar si el dividendo de una operadora es sostenible dado su nivel de deuda y capex

6. **Financiación de proyectos de infraestructura**
   - El project finance para despliegue de fibra: cómo estructurar la financiación de un proyecto FTTH con deuda sin recurso
   - Los fondos de infraestructura en telecomunicaciones: qué buscan, qué TIR exigen y cómo estructuran sus inversiones en torres y fibra
   - Los fondos europeos para la conectividad: FEMP, PERTE Digital, NextGenerationEU y cómo acceder a ellos para proyectos de despliegue

7. **Mi análisis específico**
   - Construye el esquema del modelo financiero para mi situación
   - Las hipótesis que usarías como punto de partida y sus fuentes
   - Los errores más frecuentes en el análisis financiero de proyectos de telecomunicaciones

Sé concreto con los rangos de métricas actuales del sector español y europeo, señala cuándo las hipótesis son muy inciertas y dame referencias de donde obtener datos sectoriales actualizados.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Análisis financiero de operadoras de telecomunicaciones: valoración, despliegue de fibra y economía del 5G',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Regulación de telecomunicaciones',
                'description'      => 'CNMC, neutralidad de red, roaming, servicio universal y el marco regulatorio que las operadoras deben conocer para operar en el mercado español y europeo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho de las telecomunicaciones con experiencia en regulación de operadoras, procedimientos ante la CNMC, transposición de directivas europeas y el derecho de la competencia aplicado al sector de las comunicaciones electrónicas. Conoces tanto el marco regulatorio español como el europeo y los procedimientos ante el regulador.

Necesito orientación jurídica sobre el marco regulatorio aplicable a mi actividad en el sector de las telecomunicaciones.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de empresa u operación (operadora de red, MVNO, ISP, proveedor de servicios de comunicaciones, empresa que usa telecomunicaciones en su negocio), el mercado en el que operas (España, Europa, internacional) y las preguntas regulatorias concretas que quieres responder]

**Lo que necesito que analices:**

1. **El marco regulatorio de las telecomunicaciones en España**
   - La Ley General de Telecomunicaciones (LGTel 2022): los cambios respecto a la ley anterior y las obligaciones que introduce
   - El Reglamento Europeo de Código de Comunicaciones Electrónicas (EECC): la directiva que la LGTel transpone y sus implicaciones
   - La CNMC como regulador: sus competencias en telecomunicaciones, los tipos de procedimientos y cómo interactúan con la SETSI y el Ministerio de Asuntos Económicos

2. **Obligaciones para operar como operadora en España**
   - El registro en el Registro de Operadores de la CNMC: qué servicios requieren registro, los plazos y los requisitos de información
   - La notificación vs la autorización: por qué el mercado español y europeo funciona con un régimen de notificación general para la mayoría de los servicios
   - Las obligaciones de servicio universal: qué operadora las tiene, qué servicios incluyen y cómo se financia el fondo de servicio universal
   - Los derechos de uso del espectro: el procedimiento de licitación, las condiciones de uso y las obligaciones de cobertura que se imponen a los adjudicatarios

3. **Regulación de mercados mayoristas y acceso**
   - El análisis de mercados de la CNMC: cómo se definen los mercados relevantes, cuándo una operadora tiene poder de mercado significativo (PMS) y qué obligaciones lleva
   - Los mercados de acceso a la red local: la obligación de acceso a la infraestructura de fibra (VULA, NEBA, acceso físico desagregado) y las condiciones tarifarias
   - El Reglamento de Infraestructuras Digitales (DIE): las obligaciones de acceso a infraestructura pasiva (ductos, postes) que afectan a empresas fuera del sector telco
   - Los procedimientos de resolución de disputas entre operadores ante la CNMC

4. **Neutralidad de red**
   - El Reglamento Europeo de Neutralidad de Red (Reglamento TSM) y su aplicación en España: los principios y lo que prohíbe en la gestión del tráfico
   - Las prácticas de gestión de tráfico permitidas: las excepciones al principio de neutralidad y sus límites
   - Zero rating: cuándo está permitido y cuándo constituye una infracción de la neutralidad de red
   - Los procedimientos de queja ante la CNMC por violación de la neutralidad de red

5. **Regulación del roaming y las comunicaciones internacionales**
   - El Reglamento de Roaming en la UE: la regulación de precios mayoristas y minoristas de roaming y las obligaciones de transparencia
   - El roaming fuera de la UE: el marco diferente que aplica cuando el roaming es con operadoras de terceros países
   - Las comunicaciones transfronterizas: las obligaciones de transparencia en precios para llamadas a otros países de la UE (Reglamento de Comunicaciones Internacionales)
   - El marco regulatorio para los MVNOs que operan en roaming permanente

6. **Protección de datos en telecomunicaciones**
   - La Directiva ePrivacy y su aplicación en España a través de la LSSI y la futura Ley de Comunicaciones Electrónicas: las cookies, el spam y los datos de tráfico y localización
   - Los metadatos de telecomunicaciones: por qué los datos de tráfico y localización tienen una protección adicional al RGPD en el sector telco
   - La retención de datos de comunicaciones: el marco tras la anulación de la Directiva de Retención de Datos por el TJUE y las obligaciones que permanecen
   - Las interceptaciones legales (lawful interception): las obligaciones de las operadoras para facilitar las escuchas autorizadas judicialmente

7. **Mi situación regulatoria específica**
   - Analiza las obligaciones regulatorias que aplican a mi empresa según lo que he descrito
   - El mapa de cumplimiento que necesito: registros, notificaciones, obligaciones de información y procedimientos ante el regulador
   - Los riesgos regulatorios más relevantes para mi negocio y cómo gestionarlos

Señala cuándo la regulación está en proceso de cambio, las diferencias relevantes entre comunidades autónomas cuando aplique, y los procedimientos ante la CNMC que son más frecuentes en empresas de mi tipo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Marco regulatorio de telecomunicaciones en España: CNMC, neutralidad de red, acceso y roaming',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte técnico de telecomunicaciones',
                'description'      => 'Gestión de incidencias de conectividad, averías de red y conflictos de facturación en un sector donde el cliente llama cuando ya no tiene internet.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un manager de soporte técnico especializado en telecomunicaciones, con experiencia en la gestión de incidencias de conectividad, averías de red, reclamaciones de facturación y la atención al cliente en un sector donde la urgencia es siempre alta porque el cliente llama cuando ya no puede trabajar o comunicarse.

Necesito que me ayudes a gestionar incidencias de telecomunicaciones o a diseñar los procesos de soporte de mi organización.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de empresa (operadora, ISP, empresa de servicios de red, plataforma de comunicaciones), los tipos de incidencias más frecuentes, si tienes equipo de soporte técnico propio o subcontratado y el principal problema de calidad o eficiencia que quieres resolver]

**Lo que necesito que desarrolles:**

1. **El triaje de incidencias de telecomunicaciones**
   - La categorización de incidencias por impacto y urgencia: la diferencia entre una avería que afecta a un usuario y un corte que afecta a toda una zona
   - Las preguntas de diagnóstico inicial que determinan la causa probable en menos de 5 minutos: el árbol de decisión que el agente de primer nivel debe seguir
   - Los fallos del lado del cliente vs los fallos de la red del operador: cómo distinguirlos sin acceso físico al domicilio
   - La priorización cuando hay múltiples incidencias abiertas: los criterios de P1, P2, P3 y P4 en telecomunicaciones

2. **Diagnóstico de problemas de conectividad**
   - Los problemas más frecuentes de conexión de fibra: el ONT que ha reiniciado, el router que ha perdido la sesión PPPoE, la fibra cortada y cómo distinguir cada caso remotamente
   - El diagnóstico de WiFi: los problemas de cobertura, interferencias y configuración que el cliente confunde con un problema del ISP
   - Los problemas de velocidad: cómo ayudar al cliente a hacer una medición correcta y cómo distinguir entre problema de la línea, congestión de red y limitación del dispositivo
   - Los problemas de VoIP: la calidad de llamada, el corte de audio y los problemas de NAT que son los más frecuentes en clientes de empresa

3. **Gestión de averías masivas**
   - El protocolo de activación cuando una avería masiva afecta a miles de clientes: cómo organizar la respuesta cuando el call center se satura
   - La comunicación proactiva durante la avería: el mensaje que informa a los clientes antes de que llamen, los canales y la frecuencia de actualización
   - El puente de avería masiva: cómo coordinar operaciones, técnicos en campo, proveedores y comunicación al cliente desde un centro de mando
   - La gestión de la postmortem: cómo documentar el incidente, comunicarlo a los clientes afectados y evitar la recurrencia

4. **Reclamaciones de facturación de telecomunicaciones**
   - Los errores de facturación más frecuentes: el servicio de roaming que el cliente no sabía que iba a cobrarse, el cambio de tarifa sin preaviso, la permanencia que el cliente no recuerda haber aceptado
   - El proceso de revisión de factura con el cliente: cómo guiarle para que entienda cada concepto sin resultar condescendiente
   - Los criterios de devolución: qué casos se abonan siempre, cuáles se evalúan y la documentación que respalda cada decisión
   - La gestión de la factura impugnada ante la CNMC: el protocolo interno antes de que la reclamación llegue al regulador

5. **Portabilidad: el proceso más conflictivo**
   - Los problemas más frecuentes en la portabilidad de número: el rechazo de portabilidad, el corte de servicio antes del plazo, la portabilidad no ejecutada en el plazo legal
   - Los derechos del cliente en la portabilidad: los plazos legales, las compensaciones por incumplimiento y cómo gestionarlos
   - La portabilidad del número de empresa (portabilidad de rangos): las particularidades y los problemas específicos de las portabilidades empresariales

6. **Métricas y calidad del soporte de telecomunicaciones**
   - Los KPIs que importan en un call center de telecomunicaciones: FCR (First Call Resolution), AHT (Average Handling Time), NPS de soporte, tasa de repetición de llamada
   - El SLA de resolución por tipo de incidencia: cuáles son los tiempos objetivo razonables para avería de fibra, problema de velocidad y reclamación de factura
   - Cómo medir la calidad técnica del soporte: la tasa de diagnóstico correcto en primer nivel y el impacto de la formación técnica en los indicadores

7. **Automatización y autoservicio en el soporte telco**
   - Los diagnósticos automáticos que reducen llamadas: el health check de red remoto y las notificaciones proactivas de problemas detectados automáticamente
   - El IVR inteligente vs el IVR tradicional: por qué el IVR mal diseñado es el mayor generador de insatisfacción del sector
   - El chatbot de telecomunicaciones: los casos de uso que funcionan (estado de avería, copia de factura, cambio de tarifa) y los que generan escalado inmediato

Dame protocolos concretos con scripts de diagnóstico, los árboles de decisión para las incidencias más frecuentes y los criterios de compensación al cliente que minimizan las reclamaciones sin destruir el margen.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 15,
                'use_case'         => 'Protocolos de soporte técnico para incidencias de conectividad, averías y reclamaciones de facturación telco',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultor de telecomunicaciones independiente',
                'description'      => 'El nicho del consultor de redes, seguridad de telecomunicaciones y transformación digital en el sector: los proyectos y los clientes que buscan expertise externo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor senior de telecomunicaciones con experiencia como independiente trabajando con operadoras, empresas de servicios TI y clientes corporativos. Conoces los proyectos de consultoría en el sector, cómo posicionarse como experto independiente y la gestión del negocio de consultoría en un sector tan especializado.

Necesito orientación para establecerme o crecer como consultor independiente en telecomunicaciones.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: experiencia previa (operadora, fabricante de equipamiento, integradora, empresa de servicios TI), área de especialización técnica (redes, seguridad, cloud, VoIP, IoT, radiocomunicaciones, consultoría estratégica), si ya eres freelance o estás en transición y el tipo de cliente al que quieres llegar]

**Lo que necesito que desarrolles:**

1. **Definir tu nicho como consultor de telecomunicaciones**
   - Los sub-nichos de la consultoría de telecomunicaciones donde hay demanda real con pocos consultores especializados: auditorías de red, consultoría de migración a cloud, seguridad de telecomunicaciones, optimización de costes de conectividad, proyectos de despliegue
   - Cómo diferenciarte del consultor generalista de TI que "también hace algo de telecomunicaciones"
   - La propuesta de valor según tu especialización: cómo conectar lo que sabes con los problemas que los clientes quieren pagar por resolver
   - Los clientes que buscan consultores externos en telecomunicaciones: operadoras que necesitan expertise temporal, empresas con proyectos de transformación, fondos de inversión que necesitan due diligence técnica

2. **Los proyectos más frecuentes en consultoría de telecomunicaciones**
   - Auditoría de infraestructura de red: el diagnóstico del estado de la red, las vulnerabilidades de seguridad y el plan de modernización
   - Consultoría de migración: de RDSI a VoIP, de MPLS a SD-WAN, de sistemas legacy a cloud
   - Optimización de costes de telecomunicaciones: el análisis de las facturas de telecomunicaciones de una empresa mediana y la renegociación con los operadores
   - Selección de operadora y licitaciones: el asesoramiento al cliente en la elaboración del pliego y la evaluación de ofertas
   - Proyectos de despliegue: el project management de despliegue de fibra, la gestión de permisos y la supervisión de la construcción
   - Due diligence técnica de telecomunicaciones: el análisis de la infraestructura de red en operaciones de M&A o inversión

3. **Cómo conseguir los primeros proyectos**
   - Los primeros clientes del consultor de telecomunicaciones: por qué la red de contactos del sector es el canal más efectivo y cómo activarla
   - Las colaboraciones con consultoras de management: cuándo una consultora grande subcontrata expertise técnico específico de telecomunicaciones y cómo posicionarte para ese rol
   - Las oportunidades en el canal de distribución: el fabricante de equipamiento que necesita consultores con expertise en sus soluciones para acompañar al cliente
   - Las licitaciones públicas para consultores individuales: los contratos menores, los procedimientos simplificados y los requisitos de solvencia que puede cumplir un autónomo

4. **Tarifas y estructura de servicios**
   - Los rangos de tarifa por hora y por proyecto en consultoría de telecomunicaciones en España según el tipo de proyecto y cliente
   - Los modelos de contrato que funcionan mejor: el proyecto cerrado por entregables, el retainer mensual y la colaboración en proyectos de la consultora
   - Cómo presupuestar un proyecto de telecomunicaciones: los costes de desplazamiento, las herramientas de diagnóstico y los subcontratistas técnicos que hay que incluir
   - La negociación de tarifas con operadoras como cliente: las particularidades del proceso de compra de una telco y los plazos de pago

5. **Posicionamiento y visibilidad como consultor de telecomunicaciones**
   - El contenido que posiciona a un consultor de telecomunicaciones como referente: los artículos técnicos, los análisis de mercado y los casos de éxito anonimizados
   - Las comunidades y asociaciones del sector: las organizaciones profesionales de telecomunicaciones en España donde los consultores y los clientes se encuentran
   - Los eventos y conferencias clave: Mobile World Congress, Telecomunicaciones Summit y los eventos sectoriales donde estar presente como consultor
   - LinkedIn para el consultor de telecomunicaciones: el tipo de contenido que atrae clientes corporativos vs el que atrae recruiters

6. **Certificaciones y credibilidad técnica**
   - Las certificaciones que añaden credibilidad como consultor de telecomunicaciones independiente: Cisco CCIE, Nokia SRX, CWSP, CompTIA Network+
   - Las certificaciones de seguridad aplicadas a telecomunicaciones: CISM, CISSP y su valor en proyectos de seguridad de red
   - Cómo mantenerse actualizado en 5G, Open RAN y las tendencias que los clientes van a preguntar: las fuentes que un consultor de telecomunicaciones no puede ignorar

7. **Plan de lanzamiento o crecimiento para mi situación**
   - Los primeros 6 meses: la estrategia para conseguir los primeros proyectos cuando no tienes cartera como independiente
   - La diversificación de clientes: cómo construir una cartera que no dependa de un solo cliente o tipo de proyecto
   - El crecimiento del negocio: cuándo tiene sentido asociarse con otro consultor, construir un equipo pequeño o mantener el modelo de experto independiente

Dame un plan concreto adaptado a mi situación, con ejemplos de cómo otros consultores han construido su negocio en este nicho en España y los errores que cometen más frecuentemente en los primeros dos años.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Construcción del negocio de consultoría freelance en telecomunicaciones y redes',
                'vote_score'       => 32,
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
