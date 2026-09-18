<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills336Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 - Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Marketing para productos fintech y pagos digitales',
                'description'      => 'Aprende a diseñar estrategias de marketing efectivas para productos fintech, abordando la complejidad regulatoria, la gestión de la confianza del consumidor y la diferenciación en un mercado altamente competitivo.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un director de marketing con amplia experiencia en empresas fintech, neobancas y plataformas de pagos digitales en mercados hispanohablantes y Europa. Has lanzado productos de pagos, cuentas digitales y soluciones de crédito para consumidores y pymes.

Necesito que me ayudes a diseñar o revisar la estrategia de marketing de un producto fintech o de pagos digitales.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿Cuál es el producto concreto: cuenta digital, tarjeta prepago, plataforma de pagos B2B, wallet, pasarela de pagos, préstamo o inversión?
2. ¿A quién va dirigido: consumidores individuales, autónomos, pymes o empresas grandes?
3. ¿Cuál es el mercado geográfico principal?
4. ¿Cuál es el estadio del producto: pre-lanzamiento, lanzamiento reciente o crecimiento?
5. ¿Cuáles son los principales competidores y cómo se diferencian actualmente?

## Estrategia de marketing fintech que debes generar

### 1. Gestión de la confianza como palanca de marketing
El principal freno en fintech es la desconfianza. Diseña una estrategia para construir y comunicar confianza en cada etapa del funnel:
- Señales de confianza que deben estar presentes en la web y la app (regulación, seguridad, testimonios, medios)
- Cómo comunicar la seguridad del dinero sin generar más dudas de las que resuelve
- Tipos de contenido que reducen la fricción psicológica antes de la primera transacción

### 2. Estrategia de adquisición de usuarios para fintech
Propón un mix de canales de adquisición adaptado al tipo de producto y audiencia:
- Canales de pago más eficientes para fintech (Google, Meta, LinkedIn según el segmento)
- Estrategias orgánicas (SEO, contenido educativo financiero, redes sociales)
- Programas de referidos y su diseño para maximizar la conversión (incentivo, mecánica, momento de invitación)
- Partnerships con plataformas o servicios complementarios

### 3. Onboarding como momento clave de marketing
El onboarding en fintech es crítico porque determina la activación y el primer uso. Propón:
- Cómo diseñar el flujo de comunicación de onboarding (emails, push, in-app) para los primeros siete días
- Qué hito de activación debe alcanzar el usuario en los primeros tres días para aumentar la retención a treinta días
- Cómo reducir el abandono durante el proceso de verificación de identidad (KYC)

### 4. Estrategia de contenido y educación financiera
En fintech, el contenido educativo es una herramienta de marketing de alta eficacia. Diseña:
- Los cinco temas de contenido financiero que más atraen a la audiencia objetivo
- Formatos más efectivos por plataforma (artículos de blog, vídeos cortos, calculadoras, webinars)
- Cómo conectar el contenido educativo con la adquisición de usuarios sin ser intrusivo

### 5. Métricas de marketing específicas para fintech
Define las métricas clave de marketing para un producto fintech diferenciando por etapa:
- Adquisición: CPL, CPA, tasa de conversión del KYC, tiempo hasta la primera transacción
- Activación: tasa de activación en primeros siete días, primer depósito o primera transacción
- Retención: MAU, frecuencia de uso, NPS
Explica cómo interpretar cada métrica y qué decisiones de marketing deben tomar.

## Formato de salida
- Responde en español con lenguaje de marketing digital y fintech claro.
- Usa ejemplos de campañas o mensajes reales (inspirados en empresas del sector).
- Incluye una plantilla de plan de lanzamiento de un producto fintech en noventa días.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estrategia de go-to-market para productos fintech',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            // 2 - Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Integración de APIs de pagos y arquitectura fintech para desarrolladores',
                'description'      => 'Aprende a integrar pasarelas de pago, redes de transferencia y APIs de open banking en aplicaciones web y móviles. Cubre la elección del proveedor, la implementación segura, la gestión de webhooks y el testing de flujos de pago.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un arquitecto de software especializado en sistemas de pagos y fintech, con experiencia integrando APIs de proveedores como Stripe, Adyen, Braintree, MercadoPago, BBVA Open Platform y Plaid en aplicaciones de producción de alto volumen.

Necesito que me ayudes a diseñar e implementar la arquitectura de pagos de mi aplicación, desde la elección del proveedor hasta la implementación segura y el testing.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿Cuál es el caso de uso: pagos de consumidor (C2B), pagos entre empresas (B2B), marketplace con split de pagos, suscripciones o transferencias P2P?
2. ¿En qué mercados geográficos debe funcionar el sistema de pagos?
3. ¿Cuál es el stack tecnológico (lenguaje, framework, infraestructura en la nube)?
4. ¿Hay requisitos de cumplimiento específicos: PCI DSS, PSD2, SCA (autenticación fuerte)?
5. ¿El volumen esperado de transacciones es bajo (menos de mil al mes) o alto (más de cien mil)?

## Arquitectura e implementación que debes diseñar

### 1. Selección del proveedor de pagos
Para el caso de uso descrito, evalúa los proveedores más relevantes comparando:
- Mercados geográficos soportados y métodos de pago locales
- Modelo de comisiones y costes por transacción
- Calidad de la API y documentación
- Soporte para el caso de uso específico (suscripciones, marketplace, etc.)
- Tiempo de integración estimado y curva de aprendizaje

### 2. Arquitectura del sistema de pagos
Diseña la arquitectura recomendada para el sistema de pagos:
- Diagrama de flujo de una transacción de pago completa (inicio, autorización, captura, notificación)
- Componentes clave del sistema (payment service, webhook handler, reconciliation service)
- Cómo gestionar el estado de una transacción (máquina de estados con todos los estados posibles)
- Estrategia de idempotencia para evitar cobros duplicados

### 3. Implementación segura y cumplimiento PCI DSS
Proporciona una guía de implementación segura que minimice el alcance PCI DSS:
- Por qué usar el formulario de pago del proveedor (Stripe Elements, Adyen Drop-in) en lugar de capturar los datos en el servidor
- Cómo implementar SCA y 3D Secure según la directiva PSD2
- Qué datos de pago nunca deben llegar al servidor y cómo auditarlo
- Cómo manejar los tokens de pago de forma segura

### 4. Sistema de webhooks robusto
Diseña un sistema de procesamiento de webhooks que sea fiable en producción:
- Cómo verificar la firma de los webhooks para prevenir ataques
- Patrón de procesamiento idempotente para evitar efectos duplicados
- Cola de mensajes recomendada (SQS, RabbitMQ, Redis) según el volumen
- Estrategia de reintentos y dead letter queue para eventos fallidos

### 5. Testing de flujos de pago
Proporciona un plan de testing exhaustivo para el sistema de pagos:
- Casos de prueba obligatorios (pago exitoso, pago fallido, tarjeta caducada, fondos insuficientes, 3DS)
- Cómo usar los entornos sandbox de los proveedores
- Testing de webhooks en entorno local (ngrok, Stripe CLI)
- Testing de carga para validar el rendimiento bajo volumen alto

### 6. Monitorización y alertas en producción
Define qué monitorizar en un sistema de pagos en producción:
- Métricas de pago clave (tasa de aprobación, tasa de fraude, tiempo de respuesta de la API)
- Alertas críticas y sus umbrales (caída de la tasa de aprobación, errores de webhook)
- Dashboard de pagos recomendado para el equipo de negocio y soporte

## Formato de salida
- Responde en español con código bien comentado donde sea aplicable.
- Usa diagramas en texto, tablas comparativas y bloques de código.
- Incluye un ejemplo de máquina de estados de una transacción de pago.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Arquitectura e integración de sistemas de pago',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            // 3 - Diseño
            [
                'profession_id'    => 3,
                'title'            => 'UX/UI para aplicaciones fintech y pagos digitales',
                'description'      => 'Aprende a diseñar experiencias de usuario efectivas para aplicaciones financieras, equilibrando la seguridad y el cumplimiento regulatorio con la usabilidad y la conversión. Cubre flujos de onboarding, transacciones y gestión financiera personal.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un UX designer especializado en aplicaciones fintech y servicios financieros digitales, con experiencia diseñando flujos de onboarding, transacciones, dashboards financieros y experiencias de crédito para neobancas, wallets y plataformas de inversión.

Necesito que me ayudes a diseñar o mejorar la experiencia de usuario de una aplicación fintech o de pagos digitales.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿Qué tipo de aplicación fintech es: wallet, neobanc, plataforma de inversión, pasarela de pagos B2B, app de gestión financiera personal?
2. ¿Cuál es el flujo o pantalla más crítica que necesitas diseñar o mejorar?
3. ¿Cuáles son los principales problemas de UX actuales (drop-off en onboarding, confusión en el flujo de pago, baja adopción de una funcionalidad)?
4. ¿A qué perfil de usuario va dirigida la app: nativos digitales, usuarios financieros tradicionales o un segmento específico?
5. ¿Hay restricciones regulatorias o de compliance que afecten al diseño (KYC obligatorio, avisos legales, autenticación fuerte)?

## Guía de diseño fintech que debes generar

### 1. Principios de diseño para aplicaciones financieras
Define los principios de UX específicos para fintech que deben guiar todas las decisiones de diseño:
- Confianza como primer principio: cómo transmitir seguridad en cada elemento visual
- Claridad sobre saldo y movimientos: cómo presentar la información financiera sin ambigüedad
- Reducción de la fricción en transacciones: cómo hacer que enviar dinero sea tan fácil como enviar un mensaje
- Confirmación y feedback: por qué las micro-interacciones de confirmación son críticas en fintech
- Accesibilidad financiera: diseñar para usuarios con distintos niveles de educación financiera

### 2. Flujo de onboarding y KYC optimizado
Diseña el flujo ideal de onboarding para una aplicación fintech que minimice el abandono durante la verificación de identidad:
- Estructura de pantallas del onboarding (qué pedir en qué orden y por qué)
- Cómo comunicar por qué se piden los datos personales sin generar desconfianza
- Diseño del flujo de verificación de identidad (selfie, documento, biometría)
- Cómo gestionar los estados de espera durante la revisión manual
- Pantalla de activación y primer valor: cómo celebrar el primer hito del usuario

### 3. Diseño del flujo de transacción
Diseña el flujo de pantallas para el caso de uso de transacción más crítico del producto (envío de dinero, pago, recarga):
- Patrón de entrada de importe: teclado numérico personalizado versus campo de texto
- Pantalla de confirmación: qué mostrar antes de ejecutar la transacción irreversible
- Pantalla de resultado: éxito, error y estados intermedios (transacción en proceso)
- Cómo diseñar la confirmación biométrica o de PIN dentro del flujo

### 4. Dashboard financiero y visualización de datos
Proporciona guía para diseñar el dashboard principal de una aplicación financiera:
- Jerarquía de información: qué mostrar primero (saldo, movimientos recientes, accesos rápidos)
- Visualización de gastos y patrones financieros: gráficos que entiende cualquier usuario
- Cómo diseñar el historial de transacciones para que sea útil y no abrumador
- Notificaciones y alertas financieras: cuándo y cómo mostrarlas sin causar ansiedad

### 5. Patrones de seguridad y autenticación que no frustran al usuario
Diseña la experiencia de autenticación y seguridad que equilibre protección y usabilidad:
- Flujo de configuración de autenticación biométrica en el primer uso
- Cuándo pedir PIN versus biometría según el tipo de operación
- Diseño de la autenticación de doble factor (SMS, app) en el flujo de transacción
- Mensajes de error de seguridad que informen sin alarmar innecesariamente

## Formato de salida
- Responde en español con lenguaje de diseño UX claro.
- Describe los flujos de pantallas con texto estructurado y listas de componentes.
- Incluye referencias a patrones de diseño de apps fintech reconocidas (Revolut, N26, Wise) como inspiración.
- Proporciona una checklist de revisión de UX para flujos financieros.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseño de experiencias de usuario para fintech',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 4 - Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Venta de soluciones fintech y pagos digitales en mercado B2B',
                'description'      => 'Aprende a vender soluciones de pagos digitales, pasarelas de pago y servicios fintech a empresas, abordando las objeciones técnicas y regulatorias, la complejidad del ciclo de compra y la gestión de múltiples stakeholders.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un director comercial con experiencia vendiendo soluciones fintech, pasarelas de pago y servicios de pagos digitales a empresas de distintos sectores: retail, ecommerce, hostelería, servicios profesionales y marketplaces.

Necesito que me ayudes a mejorar mi proceso de ventas y mis argumentos para vender soluciones fintech o de pagos digitales en el mercado B2B.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿Qué solución fintech vendo: pasarela de pagos, terminal de punto de venta (TPV), plataforma de facturación, solución de pagos internacionales, open banking u otra?
2. ¿A qué segmento de empresa me dirijo: pymes, medianas empresas o grandes cuentas?
3. ¿Cuáles son las principales objeciones que escucho más frecuentemente?
4. ¿Cuántos stakeholders suelen intervenir en la decisión de compra y cuáles son sus perfiles (CFO, CTO, director de operaciones)?
5. ¿Cuánto dura el ciclo de ventas habitual en semanas o meses?

## Guía de ventas fintech que debes generar

### 1. Mapa de stakeholders en la venta fintech B2B
Identifica los perfiles clave que intervienen en la decisión de compra de una solución fintech en una empresa y define para cada uno:
- Su principal motivación y miedo en la decisión
- Los argumentos de valor más efectivos para ese perfil
- Las preguntas de descubrimiento más útiles para entender su perspectiva

### 2. Gestión de objeciones técnicas y regulatorias
Proporciona respuestas preparadas para las diez objeciones más frecuentes en la venta de soluciones fintech:
- "Ya tenemos proveedor y cambiar es demasiado complicado"
- "¿Cómo garantizáis la seguridad de los datos de pago de nuestros clientes?"
- "¿Cuál es el proceso de certificación PCI DSS y cuánto tiempo lleva?"
- "¿Qué pasa si vuestra plataforma cae? ¿Cuál es el SLA?"
- "Las comisiones por transacción son más caras que las de vuestro competidor"
Para cada objeción: cómo reconocerla, qué argumento usar, qué prueba ofrecer.

### 3. Demostración de valor con ROI
Diseña un marco de cálculo de ROI para presentar a los tomadores de decisión financiera:
- Ahorros por reducción de comisiones versus el proveedor actual
- Aumento de conversión por mejora del flujo de pago (con datos de referencia del sector)
- Ahorro de tiempo operativo por automatización de la conciliación de pagos
- Reducción de fraude con datos de la solución
Proporciona una plantilla de presentación del ROI en formato de tabla simple.

### 4. Proceso de ventas consultivo para soluciones fintech
Define las etapas de un proceso de ventas consultivo adaptado a la complejidad fintech:
- Fase de discovery: preguntas para entender el stack de pagos actual, los problemas y los objetivos
- Fase de demostración: cómo estructurar un demo técnico que no aburra al CFO ni confunda al CTO
- Fase de propuesta: qué incluir en la propuesta comercial y cómo presentarla
- Fase de negociación: las variables de negociación más frecuentes en fintech (precio por transacción, implementación gratuita, SLA)
- Fase de cierre: cómo gestionar el proceso de firma con múltiples aprobadores

### 5. Aceleración del ciclo de ventas
Propón tácticas concretas para acortar el ciclo de ventas en soluciones fintech sin presionar indebidamente al cliente:
- Cómo crear urgencia legítima (cambios regulatorios próximos, fin de contrato con proveedor actual)
- Cómo usar un piloto o prueba de concepto para avanzar más rápido
- Cómo mantener el momentum entre reuniones sin ser pesado

## Formato de salida
- Responde en español con lenguaje comercial claro y directo.
- Incluye guiones de conversación, plantillas de correo y ejemplos de argumentos reales.
- Proporciona una tarjeta de batalla (battle card) de una página frente al competidor más frecuente.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Proceso de ventas consultivas para soluciones fintech B2B',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            // 5 - Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Product management para plataformas de pagos digitales',
                'description'      => 'Aprende a gestionar el ciclo de vida de un producto fintech o de pagos digitales, desde la definición de la estrategia y el roadmap hasta la priorización de funcionalidades en entornos altamente regulados y técnicamente complejos.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un product manager senior con experiencia en plataformas de pagos digitales, wallets, pasarelas de pago y servicios de open banking, tanto en startups fintech como en departamentos de innovación de entidades financieras tradicionales.

Necesito que me ayudes a mejorar mi proceso de product management para un producto de pagos digitales o fintech.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿Cuál es el tipo de producto: pasarela de pagos, wallet, neobanc, plataforma de inversión, producto de open banking?
2. ¿Cuál es el estadio del producto: discovery, MVP, crecimiento o madurez?
3. ¿Cuáles son los principales retos actuales: priorización del roadmap, gestión de requisitos regulatorios, integración con sistemas legados, velocidad de entrega?
4. ¿Quiénes son los principales stakeholders internos: regulatorio/compliance, ingeniería, negocio, operaciones?
5. ¿Cuál es la métrica de éxito principal del producto ahora mismo?

## Guía de product management fintech que debes generar

### 1. Gestión de requisitos regulatorios como parte del roadmap
En fintech, la regulación no es un obstáculo externo sino una input del producto. Proporciona un marco para integrar los requisitos regulatorios en el proceso de product management:
- Cómo mantener un backlog de requisitos regulatorios separado pero conectado al roadmap de producto
- Cómo estimar el esfuerzo de un requisito regulatorio cuando la especificación técnica no está clara
- Cómo priorizar un requisito regulatorio urgente frente a una funcionalidad de negocio de alto impacto
- Cómo colaborar con el equipo de compliance para obtener especificaciones funcionales accionables

### 2. Estrategia de roadmap para productos de pagos
Diseña los principios de una estrategia de roadmap para un producto de pagos digitales:
- Cómo equilibrar las tres dimensiones del roadmap fintech: regulatorio (no negociable), infraestructura (fundacional) y valor al usuario (diferenciador)
- Cómo comunicar el roadmap a stakeholders de negocio que no entienden la complejidad técnica y regulatoria
- Cuándo tiene sentido lanzar en un mercado con funcionalidad limitada versus esperar a tener el producto completo

### 3. Gestión de integraciones con terceros en pagos
Los productos de pagos dependen de integraciones con redes de pago, bancos y proveedores externos. Proporciona una guía para gestionar estas integraciones como producto:
- Cómo evaluar y seleccionar proveedores de pago o infraestructura bancaria
- Cómo gestionar las dependencias del roadmap que dependen de terceros
- Qué criterios usar para decidir entre construir una capacidad internamente o integrar un proveedor externo

### 4. Métricas de producto para plataformas de pagos
Define las métricas de producto más relevantes para una plataforma de pagos, diferenciando por tipo de producto:
- Para una pasarela de pagos: tasa de aprobación, tiempo de procesamiento, tasa de fraude, coste por transacción
- Para un wallet: MAU, frecuencia de uso, volumen de transacciones, tasa de conversión de saldo a pago
- Para open banking: tasa de consentimiento, retención de consentimiento, latencia de la API
Explica cómo usar cada métrica para tomar decisiones de producto.

### 5. Gestión de incidentes de pagos desde producto
Los incidentes en sistemas de pago tienen impacto directo en los ingresos y la confianza. Diseña el rol del product manager en la gestión de incidentes:
- Qué información debe estar disponible para el PM durante un incidente de pagos
- Cómo comunicar externamente un incidente de pagos a clientes y stakeholders
- Proceso de post-mortem orientado a producto (qué mejorar en el producto, no solo en la infraestructura)
- Cómo los incidentes deben alimentar el backlog de resiliencia

## Formato de salida
- Responde en español con lenguaje de product management claro.
- Usa plantillas de roadmap, marcos de priorización y ejemplos de métricas reales.
- Incluye una plantilla de comunicación de incidente de pagos para clientes.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Roadmap y priorización en productos de pagos digitales',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            // 6 - RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Captación y gestión del talento especializado en empresas fintech',
                'description'      => 'Aprende a diseñar estrategias de atracción, selección y retención de talento altamente especializado en fintech y pagos digitales, en un mercado con alta competencia por perfiles técnicos y regulatorios.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un HR director o talent acquisition specialist con experiencia en empresas fintech, startups de pagos y entidades financieras que compiten por talento tecnológico y regulatorio altamente especializado.

Necesito que me ayudes a diseñar una estrategia de talento para una empresa fintech o de pagos digitales, cubriendo la atracción, selección y retención de perfiles clave.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿En qué fase está la empresa: seed, serie A/B o crecimiento consolidado?
2. ¿Cuáles son los tres perfiles más difíciles de captar actualmente (ingeniero de pagos, compliance officer, fraud analyst, product manager fintech...)?
3. ¿Cuáles son los principales competidores por talento: otras fintech, bancos tradicionales en transformación, grandes tecnológicas?
4. ¿Hay algún mercado geográfico específico donde captar o dónde el trabajo remoto es una opción?
5. ¿Cuál es el mayor problema de retención actual: salario, cultura, falta de crecimiento profesional?

## Estrategia de talento fintech que debes diseñar

### 1. Mapa de perfiles críticos en una empresa fintech
Define los perfiles más críticos para una empresa fintech según su estadio de crecimiento:
- Perfiles técnicos (ingeniería de pagos, seguridad, data)
- Perfiles regulatorios (compliance, AML, CISO)
- Perfiles de producto y negocio (product manager fintech, growth, partnerships)
Para cada perfil: por qué es difícil de captar, dónde encontrarlos y qué valoran en un empleador.

### 2. Propuesta de valor al empleado (EVP) para fintech
Diseña una EVP diferenciada para una empresa fintech frente a los bancos tradicionales y las grandes tecnológicas:
- Qué puede ofrecer una fintech que un banco no puede (velocidad, impacto, aprendizaje, equidad)
- Cómo comunicar la estabilidad y la visión de la empresa sin prometer lo que no se puede cumplir
- Cómo adaptar la EVP a los distintos perfiles (el ingeniero quiere X, el perfil regulatorio quiere Y)

### 3. Proceso de selección para perfiles técnicos y regulatorios especializados
Diseña un proceso de selección que sea riguroso pero eficiente para perfiles altamente especializados:
- Estructura del proceso de selección para un ingeniero de pagos (fases, duración, evaluaciones técnicas)
- Cómo evaluar el conocimiento regulatorio de un compliance officer sin caer en preguntas teóricas irrelevantes
- Cómo evitar que el proceso de selección sea tan largo que se pierdan los mejores candidatos
- Cómo involucrar al equipo técnico en la evaluación sin que consuma demasiado tiempo

### 4. Programa de retención para perfiles escasos
Diseña un programa de retención para los perfiles más difíciles de reemplazar en fintech:
- Estructura de compensación competitiva (salario fijo, variable, opciones sobre acciones en startups)
- Plan de desarrollo profesional para perfiles técnicos y regulatorios
- Programa de aprendizaje continuo en un sector donde la regulación y la tecnología cambian constantemente
- Cómo detectar las señales de riesgo de fuga antes de que el empleado clave inicie su búsqueda

### 5. Estrategia de employer branding para atraer talento fintech
Propón una estrategia de employer branding específica para el mercado de talento fintech:
- Canales más efectivos para llegar a perfiles técnicos y regulatorios especializados
- Tipos de contenido de employer branding que resonan con ingenieros de pagos y perfiles de compliance
- Cómo usar la participación en conferencias y comunidades fintech como canal de atracción de talento

## Formato de salida
- Responde en español con lenguaje de RRHH y talent acquisition claro.
- Incluye plantillas de job description y guías de entrevista para perfiles clave.
- Proporciona una tabla comparativa de compensación fintech versus banca tradicional versus big tech.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Atracción y retención de talento en empresas fintech',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            // 7 - Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de modelos de negocio fintech',
                'description'      => 'Aprende a analizar y modelizar los principales modelos de negocio fintech: interchange, comisiones por transacción, préstamos, suscripciones y embedded finance. Cubre la economía unitaria, el LTV y los drivers de rentabilidad.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un analista financiero o CFO con experiencia en empresas fintech, gestoras de capital riesgo especializadas en fintech y banca de inversión con foco en servicios financieros digitales.

Necesito que me ayudes a analizar o modelizar el modelo de negocio de una empresa fintech desde la perspectiva financiera.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿Cuál es el modelo de negocio fintech: interchange (tarjetas prepago/crédito), comisiones por transacción (pasarela de pagos), spread de crédito (préstamos), suscripción (SaaS financiero), o modelo mixto?
2. ¿Cuál es el tipo de cliente: consumidores individuales (B2C), autónomos, pymes o grandes empresas (B2B)?
3. ¿Cuál es el mercado geográfico principal?
4. ¿Estás analizando la empresa para una inversión, para una decisión estratégica interna o para una presentación a inversores?
5. ¿Cuáles son los datos disponibles: ingresos, usuarios activos, volumen de transacciones, coste de adquisición, churn?

## Análisis financiero que debes generar

### 1. Economía de los principales modelos de negocio fintech
Para el modelo de negocio especificado, explica en detalle:
- De dónde viene el ingreso (interchange rate, fee por transacción, spread de tipo de interés, cuota mensual)
- Cuáles son los costes directos de cada transacción o usuario
- Cuál es el margen bruto teórico del modelo y cómo compara con benchmarks del sector
- Qué palancas tiene la empresa para mejorar el margen (volumen, mix de producto, eficiencia operativa)

### 2. Modelo de economía unitaria
Diseña el framework de análisis de economía unitaria para el modelo fintech:
- Definición del "unit" adecuado para este modelo (transacción, usuario activo mensual, cuenta activa)
- Cálculo del coste de adquisición de cliente (CAC) por canal
- Cálculo del valor de vida del cliente (LTV) con los supuestos clave (ARPU, margen de contribución, tasa de churn)
- Ratio LTV/CAC objetivo y qué significa cuando está por encima o por debajo de tres veces
- Payback period y qué significa para las necesidades de financiación

### 3. Modelo financiero simplificado de doce meses
Construye la estructura de un modelo financiero de doce meses para una fintech en fase de crecimiento:
- Cuenta de resultados simplificada (ingresos por línea, costes directos, margen bruto, EBITDA)
- Supuestos de crecimiento de usuarios o transacciones y cómo fundamentarlos
- Principales partidas de coste: coste de riesgo (en modelos de crédito), procesamiento de pagos, equipo, infraestructura
- Análisis de sensibilidad: qué pasa si el churn es el doble del esperado o si la tasa de aprobación de crédito cae

### 4. KPIs financieros clave por modelo de negocio fintech
Define los KPIs financieros más importantes según el modelo de negocio:
- Para un neobanc: activos bajo gestión, número de cuentas activas, ingresos por cliente (ARPU), coste de fondos
- Para una pasarela de pagos: volumen total de pagos (TPV), take rate, tasa de aprobación, margen neto por transacción
- Para una plataforma de crédito: volumen de préstamos originados, tasa de morosidad (NPL), provisiones, spread neto
Explica cómo usar cada KPI para tomar decisiones de asignación de capital.

### 5. Análisis de unit economics para pitch a inversores
Diseña la estructura de una presentación de unit economics para inversores de capital riesgo especializados en fintech:
- Qué métricas presentar en qué orden
- Cómo comparar con benchmarks del sector para contextualizar los números
- Cómo manejar las preguntas difíciles sobre CAC, churn o rentabilidad futura
- Qué no incluir en la presentación para no levantar banderas rojas innecesarias

## Formato de salida
- Responde en español con lenguaje financiero preciso.
- Usa tablas, fórmulas y ejemplos numéricos ficticios pero realistas.
- Incluye un glosario de términos fintech financieros para no financieros.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Modelización financiera y análisis de unit economics fintech',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            // 8 - Legal
            [
                'profession_id'    => 8,
                'title'            => 'Compliance regulatorio en fintech y pagos digitales',
                'description'      => 'Aprende a navegar el complejo marco regulatorio aplicable a empresas fintech y plataformas de pagos, cubriendo PSD2, AML, KYC, PCI DSS y las licencias necesarias para operar en distintos mercados.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un abogado especialista en derecho financiero digital y regulación fintech con experiencia asesorando a empresas de pagos, neobancas, plataformas de crowdfunding y proveedores de servicios de pago en el cumplimiento de la normativa europea y latinoamericana.

Necesito que me ayudes a entender y gestionar el marco de compliance regulatorio aplicable a mi empresa fintech o plataforma de pagos.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿Cuál es el servicio o producto fintech que ofreces: emisión de dinero electrónico, servicios de pago, crowdfunding, crédito, inversión, open banking?
2. ¿En qué jurisdicciones operas o planeas operar: España, Unión Europea, México, Colombia, Argentina, otra?
3. ¿Tienes ya alguna licencia o autorización regulatoria, o estás en proceso de solicitarla?
4. ¿Cuáles son los principales retos de compliance actuales: KYC, AML, protección de datos, gestión de reclamaciones u otro?
5. ¿Gestionas el compliance internamente o con apoyo de asesores externos?

## Guía de compliance fintech que debes generar

### 1. Mapa regulatorio por tipo de producto fintech
Para el tipo de producto o servicio fintech descrito y las jurisdicciones señaladas, elabora un mapa de las principales normativas aplicables:
- Normativa europea: PSD2, DORA, MiCA, AMLD6, GDPR, reglamento de transferencias de fondos
- Normativa española: Ley de Servicios de Pago, Ley de Prevención del Blanqueo de Capitales
- Normativa latinoamericana relevante según el mercado (Ley Fintech de México, regulación del Banco de la República en Colombia, etc.)
Para cada normativa: qué obliga, a quién aplica y cuáles son las consecuencias del incumplimiento.

### 2. Licencias y autorizaciones necesarias
Explica qué licencias o registros son necesarios para operar legalmente según el tipo de actividad fintech:
- Entidad de Dinero Electrónico (EDE) versus Entidad de Pago (EP) en la UE: diferencias y cuándo necesitas cada una
- Proceso de solicitud de licencia ante el Banco de España o el regulador del mercado objetivo
- Opciones de acceso regulatorio más rápido: registro AISP/PISP para open banking, sandbox regulatorio
- Régimen de passporting europeo para expandirse a otros países de la UE con una sola licencia

### 3. Programa de KYC y AML robusto y escalable
Diseña los elementos clave de un programa de conocimiento del cliente (KYC) y prevención del blanqueo de capitales (AML) para una empresa fintech:
- Niveles de diligencia debida (simplificada, estándar, reforzada) y cuándo aplicar cada uno
- Proceso de onboarding KYC digital: qué documentos pedir, qué verificación biométrica usar, qué proveedor de identidad digital recomendar
- Sistema de monitorización de transacciones para detectar operaciones sospechosas
- Proceso de reporte de operaciones sospechosas (ROS) al regulador
- Cómo escalar el programa de KYC/AML sin que se convierta en un obstáculo para la conversión de usuarios

### 4. Gestión del cumplimiento de PCI DSS
Explica los requisitos de PCI DSS aplicables a una empresa fintech que procesa pagos con tarjeta:
- Los doce requisitos principales de PCI DSS 4.0 en lenguaje accesible
- Cómo determinar el nivel de cumplimiento exigido según el volumen de transacciones
- Estrategias para reducir el alcance PCI DSS (tokenización, externalización del procesamiento)
- Proceso de certificación: tipos de auditoría (SAQ, QSA), frecuencia y coste aproximado

### 5. Gestión de reclamaciones y protección del consumidor en fintech
Diseña un sistema de gestión de reclamaciones que cumpla con los requisitos regulatorios y proteja la reputación de la empresa:
- Plazos de respuesta obligatorios por normativa para distintos tipos de reclamación
- Proceso interno de gestión de reclamaciones: recepción, investigación, resolución y comunicación
- Cuándo y cómo derivar una reclamación al Banco de España o al organismo equivalente
- Registro de reclamaciones y su uso para la mejora continua del producto

## Formato de salida
- Responde en español con lenguaje jurídico accesible para no juristas cuando sea necesario.
- Usa tablas comparativas de normativas, listas de requisitos y ejemplos de procedimientos.
- Incluye una hoja de ruta de compliance para una fintech en sus primeros doce meses.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Marco de compliance regulatorio para empresas fintech',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            // 9 - Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Customer success en plataformas fintech: retención y expansión',
                'description'      => 'Aprende a diseñar programas de customer success adaptados a los retos específicos de las plataformas fintech: alta fricción en el onboarding, regulación que complica la experiencia y usuarios con distintos niveles de sofisticación financiera.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un director de customer success con experiencia en empresas fintech, plataformas de pagos B2B y servicios financieros digitales para pymes y consumidores.

Necesito que me ayudes a diseñar o mejorar el programa de customer success de mi empresa fintech, cubriendo desde el onboarding hasta la retención y la expansión.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿Cuál es el tipo de producto fintech: pasarela de pagos para ecommerce, wallet B2C, plataforma de pagos B2B, solución de crédito, gestión financiera para pymes?
2. ¿Cuáles son los tres principales puntos de fricción en el journey del cliente actualmente?
3. ¿Cuáles son las razones más frecuentes de churn o de baja adopción del producto?
4. ¿Tienes ya un equipo de customer success o la atención al cliente la gestiona soporte?
5. ¿Qué métricas de éxito del cliente usáis actualmente?

## Programa de customer success fintech que debes diseñar

### 1. Journey del cliente en fintech y momentos de mayor riesgo
Mapea el customer journey típico de un usuario o empresa en una plataforma fintech e identifica los momentos de mayor riesgo de abandono:
- Fase de onboarding y KYC: cómo reducir el abandono durante la verificación de identidad
- Primera transacción o primera integración: cómo asegurar el éxito del primer caso de uso
- Uso regular: cómo identificar usuarios que no están maximizando el valor del producto
- Renovación o expansión: cómo identificar la señal de expansión antes de que el cliente lo pida
Para cada momento crítico, proporciona una acción de customer success proactiva.

### 2. Programa de onboarding de alto valor
Diseña un programa de onboarding que maximice la activación y la primera transacción exitosa:
- Flujo de comunicación de onboarding (emails, in-app, llamadas) para los primeros treinta días
- Criterios para asignar un customer success manager dedicado versus onboarding automatizado
- Cómo gestionar los bloqueos durante el proceso de KYC sin perder al cliente
- Definición de criterios de graduación del onboarding (cuándo el cliente está "activado")

### 3. Sistema de health score para clientes fintech
Diseña un sistema de health score adaptado a las métricas de una plataforma fintech:
- Qué señales incluir en el health score: actividad de transacciones, integración de funcionalidades, uso de la API, respuesta a comunicaciones
- Cómo ponderar las señales según su relevancia para la retención
- Qué hacer cuando un cliente entra en zona roja (intervención de CS, escala a equipo comercial)

### 4. Gestión de incidentes de pagos desde la perspectiva del cliente
Los incidentes técnicos en fintech tienen consecuencias directas para el negocio del cliente. Diseña un protocolo de comunicación y gestión de crisis desde CS:
- Cómo notificar a los clientes afectados por un incidente de pagos de forma proactiva
- Qué información proporcionar durante el incidente (actualizaciones periódicas, impacto estimado, tiempo de resolución)
- Cómo gestionar la conversación post-incidente para recuperar la confianza del cliente
- Cuándo y cómo ofrecer compensación o créditos tras un incidente grave

### 5. Estrategia de expansión y upsell en fintech
Diseña una estrategia de expansión de ingresos dentro de la base de clientes existente:
- Señales de que un cliente está listo para expandir (volumen creciente, nuevos casos de uso, preguntas sobre funcionalidades avanzadas)
- Cómo presentar una propuesta de expansión sin que parezca una venta agresiva
- Tipos de expansión más frecuentes en fintech: más usuarios, más países, más métodos de pago, productos adicionales
- Métricas de expansión a seguir (net revenue retention, expansión por cohorte)

## Formato de salida
- Responde en español con lenguaje de customer success claro y orientado a resultados fintech.
- Incluye plantillas de correo para momentos clave del customer journey.
- Proporciona un ejemplo de health score scorecard adaptado a fintech.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Retención y expansión de clientes en plataformas fintech',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 10 - Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Integración de pagos digitales en proyectos freelance',
                'description'      => 'Aprende a elegir e integrar las mejores soluciones de pagos digitales para cobrar a clientes nacionales e internacionales como freelancer o autónomo, optimizando comisiones, tiempos de cobro y gestión fiscal.',
                'prompt_content'   => <<<'HEREDOC'
Actúa como un asesor financiero y tecnológico especializado en ayudar a freelancers y autónomos a optimizar sus sistemas de cobro, reducir las comisiones por transacción y gestionar los pagos de clientes internacionales de forma eficiente.

Necesito que me ayudes a diseñar el sistema de cobros ideal para mi actividad como freelancer, cubriendo la elección de plataformas, la gestión de pagos internacionales y las implicaciones fiscales.

## Preguntas de contexto que debes hacerme primero

Si no te lo he proporcionado, pregúntame:
1. ¿En qué país resides y ejerces tu actividad como autónomo o freelancer?
2. ¿Cuántos clientes tienes aproximadamente y qué proporción son nacionales versus internacionales?
3. ¿Cuál es el ticket medio de tus proyectos o servicios?
4. ¿Cuáles son los principales problemas con tus cobros actuales: comisiones altas, retrasos, clientes que no pagan a tiempo, problemas con divisa extranjera?
5. ¿Necesitas emitir facturas a tus clientes o solo cobrar?

## Guía de pagos digitales para freelancers que debes generar

### 1. Comparativa de plataformas de cobro para freelancers
Compara las principales opciones de cobro para freelancers según el perfil descrito:
- Transferencia bancaria tradicional: cuándo es la mejor opción y cuáles son sus limitaciones
- PayPal: ventajas, comisiones reales, limitaciones y cuándo usarlo
- Wise (TransferWise): ideal para pagos internacionales multidivisa, comisiones y proceso
- Stripe: para freelancers con web propia que quieren cobrar con tarjeta de forma profesional
- Plataformas de facturación con pago integrado (Invoice Ninja, Wave, Holded): todo en uno
Para cada opción: comisiones totales para un pago tipo, tiempo de recepción, facilidad de uso y para qué tipo de cliente o proyecto es más adecuada.

### 2. Estrategia de cobros internacionales sin perder en el cambio de divisa
Diseña una estrategia para cobrar a clientes en divisa extranjera minimizando el coste de la conversión:
- Cómo abrir una cuenta en divisa extranjera con Wise, Revolut Business o similar
- Cuándo facturar en euros y cuándo en la divisa del cliente
- Cómo gestionar el riesgo de tipo de cambio en proyectos de larga duración
- Qué bancos o neobancs ofrecen las mejores condiciones para autónomos con clientes internacionales

### 3. Sistema de cobros que reduce la morosidad
Diseña un sistema de cobros profesional que minimice los retrasos e impagos:
- Política de cobro anticipado: cuándo pedir señal y qué porcentaje (treinta o cincuenta por ciento según el ticket)
- Facturación por hitos para proyectos grandes
- Configuración de recordatorios automáticos de vencimiento de facturas
- Qué incluir en el contrato para facilitar el cobro (condiciones de pago, intereses de demora, propiedad del trabajo hasta cobro)
- Cómo gestionar un impago sin dañar la relación con el cliente si es recuperable

### 4. Implicaciones fiscales de los cobros digitales para autónomos
Explica las principales implicaciones fiscales de usar distintas plataformas de cobro como autónomo (adaptado al país descrito):
- Cómo declarar los cobros recibidos por PayPal, Wise o Stripe a la Agencia Tributaria o equivalente
- Cuándo es obligatorio emitir factura y qué debe incluir para cada plataforma de cobro
- IVA en servicios a clientes en la UE versus fuera de la UE
- Cómo justificar el tipo de cambio usado para la declaración de ingresos en divisa extranjera

### 5. Herramientas de gestión de tesorería para freelancers
Propón un stack de herramientas sencillas para que un freelancer gestione su tesorería sin ser financiero:
- Herramienta de facturación con cobro integrado
- Separación de cuenta profesional y personal
- Provisión automática para impuestos (IRPF, IVA) en una cuenta separada
- Revisión mensual de flujo de caja: qué revisar y qué decisiones tomar

## Formato de salida
- Responde en español con lenguaje claro y práctico para freelancers.
- Incluye una tabla comparativa de comisiones de las principales plataformas para un cobro de mil euros.
- Proporciona una plantilla de política de cobros que el freelancer pueda incluir en sus contratos.
HEREDOC,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Sistema de cobros digitales optimizado para freelancers',
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
