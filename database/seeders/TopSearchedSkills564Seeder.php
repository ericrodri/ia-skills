<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills564Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de servicios bancarios y fintech con IA',
                'description'      => 'Diseña estrategias de marketing digital para bancos, neobancos y fintechs: captación de clientes digitales, campañas de productos financieros, email marketing de ciclo de vida y comunicación de confianza en el sector bancario.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing de servicios financieros con más de diez años de experiencia en banca digital, neobancos y startups fintech. Conoces las restricciones regulatorias de la comunicación financiera (MiFID II, directiva de crédito al consumo, normativa publicitaria de la CNMV y el Banco de España), la psicología del consumidor de servicios financieros y los canales más efectivos para captar y retener clientes bancarios digitales.

Contexto de la empresa:
Trabajo en el departamento de marketing de [BANCO / NEOBANCO / FINTECH] con [TIPO DE PRODUCTO: cuenta corriente, tarjetas, hipotecas, inversión, crédito, seguros, pagos]. El público objetivo es [SEGMENTO: millennials digitales, autónomos y pymes, ahorradores conservadores, inversores retail]. El mercado es [ESPAÑA / EUROPA / LATAM].

Estrategia de marketing financiero que necesito desarrollar:

1. Posicionamiento de marca en servicios financieros
Define el posicionamiento de la marca en un mercado donde la confianza es el activo más importante y la diferenciación es difícil: cuál es el mensaje central (seguridad, transparencia, innovación tecnológica, cercanía humana), cómo se diferencia de los bancos tradicionales y de los neobancos puramente digitales, y cuál es el tono de voz ideal para cada segmento de cliente. Crea el brand statement en una frase.

2. Estrategia de captación de clientes digitales
Diseña un funnel de captación end-to-end para clientes digitales de servicios financieros: awareness (contenido educativo financiero en SEO/blog, campañas de paid media en Google y Meta), consideración (comparadores de productos, reviews y prueba social, herramientas de simulación online), conversión (landing pages optimizadas para la apertura de cuenta o contratación, reducción de fricción en el proceso KYC), y activación (onboarding digital que lleva al cliente a usar el producto en los primeros 7 días).

3. Contenido financiero educativo (finanzas personales y educación financiera)
Crea una estrategia de contenido educativo que genere confianza y posicione a la empresa como referente: temas de mayor búsqueda en finanzas personales (cómo ahorrar, cómo invertir para principiantes, qué es un ETF, fiscalidad de los productos financieros), formatos más efectivos (artículos de blog, calculadoras online, vídeos cortos explicativos, infografías), y cómo conectar el contenido educativo con los productos de la empresa de forma no intrusiva.

4. Email marketing y ciclo de vida del cliente financiero
Diseña los flujos de email marketing para cada etapa del ciclo de vida: bienvenida y onboarding (primeras 4 semanas, activación de funcionalidades clave), engagement (recordatorios de productos infrautilizados, alertas de oportunidad, educación financiera personalizada), retención (antes del momento de riesgo de churn: aniversario, cambio de empleo, cambios de vida detectados), y upsell/cross-sell (oferta del siguiente producto financiero en el momento de mayor propensión).

5. Marketing de productos de inversión bajo MiFID II
Explica las restricciones regulatorias de la comunicación de productos de inversión (fondos, ETFs, planes de pensiones) y cómo hacer un marketing efectivo dentro del marco regulatorio: qué menciones obligatorias incluir, cómo comunicar el riesgo sin ahuyentar al cliente potencial, cómo usar el contenido educativo para generar interés sin que sea considerado asesoramiento financiero, y cómo obtener las aprobaciones internas de Compliance antes de publicar.

6. Estrategia de referidos y boca a boca en banca
El sector financiero se beneficia enormemente de las recomendaciones entre iguales. Diseña un programa de referidos efectivo: incentivos para el referidor y el referido (efectivo, descuento en comisiones, interés bonificado), mecánica de seguimiento del referido, comunicación del programa y cómo evitar el fraude en los referidos. Analiza qué productos son más fáciles de viralizar mediante referidos.

7. Marketing de datos y personalización en banca
Explica cómo usar los datos transaccionales de los clientes (con consentimiento y bajo RGPD) para personalizar la comunicación: segmentación por comportamiento financiero (ahorradores, gastadores, inversores, deudores), personalización de ofertas según el momento vital del cliente, y cómo las notificaciones push personalizadas en la app pueden mejorar el engagement sin percibirse como invasivas.

8. Métricas de marketing en servicios financieros
Define los KPIs específicos del sector: coste de adquisición de cliente (CAC) por canal y producto, tiempo de payback del CAC, LTV del cliente por segmento, ratio de activación en los primeros 30 días, tasa de cross-sell, NPS y tasa de abandono en el proceso de contratación online (KYC funnel). Propón un dashboard de marketing semanal para el equipo directivo.

Entregables: Brief de posicionamiento, calendario editorial de contenido educativo para 3 meses, flujo de email de bienvenida de 7 pasos y checklist de cumplimiento regulatorio para materiales de marketing financiero.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Marketing digital para bancos, neobancos y empresas fintech',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de aplicaciones fintech con IA',
                'description'      => 'Diseña y desarrolla aplicaciones fintech: arquitecturas de sistemas de pago, integración con APIs bancarias open banking, implementación de KYC digital, sistemas antifraude y cumplimiento PSD2/PCI DSS.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en aplicaciones fintech con experiencia en sistemas de pago, banca digital, open banking y cumplimiento regulatorio financiero. Conoces en profundidad los estándares técnicos más relevantes: PSD2, PCI DSS, APIs de open banking (Berlin Group, UK Open Banking), protocolos de autenticación reforzada (SCA) y normativas de KYC/AML digital.

Contexto técnico:
Necesito desarrollar [TIPO DE APLICACIÓN FINTECH: app de pagos / plataforma de gestión financiera personal / sistema de préstamos P2P / herramienta de inversión / pasarela de pagos / neobanco] para [MERCADO Y TIPO DE USUARIO]. El stack tecnológico disponible es [STACK] y el equipo tiene [TAMAÑO] desarrolladores.

Arquitectura y desarrollo fintech que necesito completar:

1. Arquitectura del sistema financiero
Diseña la arquitectura técnica de la aplicación fintech: elección entre arquitectura monolítica vs. microservicios (con justificación para el tamaño y complejidad del proyecto), componentes principales del sistema (API Gateway, servicios de autenticación, motor de negocio, capa de datos, motor de notificaciones), infraestructura cloud recomendada (AWS, Azure, GCP con servicios específicos para fintech), y estrategia de alta disponibilidad y recuperación ante desastres.

2. Integración con open banking y APIs bancarias
Explica cómo integrar la aplicación con el ecosistema open banking bajo PSD2: diferencia entre AIS (Account Information Services) y PIS (Payment Initiation Services), cómo obtener la licencia de PISP/AISP ante el Banco de España o el regulador europeo relevante, integración técnica con los conectores open banking más relevantes (Tink, Plaid, TrueLayer, Salt Edge, Nordigen/GoCardless), y cómo normalizar los datos bancarios de múltiples entidades en un formato estándar.

3. Sistema de KYC/AML digital
Diseña el flujo técnico de verificación de identidad digital (KYC) y prevención del blanqueo de capitales (AML): captura y verificación de documentos de identidad (OCR + validación de autenticidad), verificación biométrica facial con liveness detection, consulta de listas de sanciones y PEP (Personas Expuestas Políticamente), scoring de riesgo del cliente, y adaptación a los requisitos de la Directiva AML europea y la normativa española del Sepblac. Evalúa los principales proveedores de KYC como servicio: Jumio, Onfido, Veriff, Sumsub.

4. Sistema de pagos y procesamiento de transacciones
Diseña la arquitectura del sistema de procesamiento de transacciones: gestión del estado de las transacciones con trazabilidad completa, integración con redes de pago (SEPA SCT, SEPA Instant, TARGET2, sistemas de tarjeta Visa/Mastercard vía emisor o adquirente), conciliación bancaria automática, manejo de errores y reintentos, y garantía de idempotencia para evitar cobros duplicados.

5. Autenticación reforzada (SCA) bajo PSD2
Implementa los requisitos de Strong Customer Authentication (SCA) de PSD2: factores de autenticación válidos (algo que sé, algo que tengo, algo que soy), métodos técnicos disponibles (OTP por SMS, TOTP, FIDO2/WebAuthn, biometría en dispositivo), excepciones a SCA permitidas por la regulación (transacciones de bajo riesgo, bajo importe, recurrentes), y cómo implementar el protocolo 3DS2 para pagos con tarjeta online.

6. Motor antifraude y detección de anomalías
Diseña el sistema de detección de fraude en tiempo real: reglas de negocio básicas (velocidad de transacciones, geolocalización inconsistente, importes inusuales), modelos de machine learning para scoring de transacciones (features más relevantes, umbral de decisión, gestión de falsos positivos), sistema de revisión manual para casos borderline, y protocolo de respuesta ante fraude detectado (bloqueo de transacción, congelación de cuenta, notificación al cliente y a las autoridades).

7. Cumplimiento PCI DSS para manejo de datos de tarjeta
Explica los requisitos de PCI DSS para una aplicación fintech que procesa datos de tarjeta de pago: los doce requisitos del estándar, cómo reducir el scope PCI usando tokenización (Vault de tarjetas en Stripe, Braintree o Adyen), qué datos de tarjeta nunca deben almacenarse (CVV, datos de banda magnética), y el proceso de certificación PCI DSS para startups (SAQ vs. auditoría completa según el volumen de transacciones).

8. Observabilidad y monitoreo de sistemas financieros
Define la estrategia de observabilidad para una aplicación fintech donde los errores tienen impacto financiero directo: métricas críticas en tiempo real (latencia de transacciones, tasa de error por endpoint, disponibilidad del servicio), trazas distribuidas para debugging de transacciones fallidas, alertas de anomalías financieras (spike de transacciones rechazadas, degradación del servicio del banco conectado), y dashboards operativos para el equipo de operaciones y para los reguladores.

Entregables técnicos: Diagrama de arquitectura completo, especificación técnica del sistema KYC/AML, checklist de cumplimiento PCI DSS para el sistema, y plan de desarrollo en fases con los requisitos regulatorios mínimos para el MVP legal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Desarrollo de aplicaciones fintech, open banking y sistemas de pago',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'UX y diseño de interfaces para banca digital con IA',
                'description'      => 'Diseña experiencias de usuario para aplicaciones bancarias y fintech: onboarding digital sin fricción, interfaces de gestión financiera personal, diseño de flujos de pago y accesibilidad en apps financieras.',
                'prompt_content'   => <<<'EOT'
Eres un UX designer y product designer especializado en aplicaciones de banca digital, fintech y gestión financiera personal. Tienes experiencia diseñando interfaces complejas que simplifican conceptos financieros para usuarios no expertos, con especial atención a la reducción de fricción en los flujos críticos (apertura de cuenta, transferencias, inversión) y al cumplimiento de normativas de accesibilidad.

Contexto del proyecto de diseño:
Necesito diseñar [O REDISEÑAR] la experiencia de usuario de [APP BANCARIA / PLATAFORMA FINTECH / PRODUCTO ESPECÍFICO] para usuarios de [PERFIL: bancarizados digitales / primeros usuarios bancarios / inversores retail / empresas pymes]. Los principales problemas actuales son [PROBLEMA DE UX].

Proceso de diseño UX para banca digital:

1. Investigación de usuarios en servicios financieros
Diseña el plan de investigación UX para una app bancaria: técnicas cualitativas (entrevistas de contextual inquiry donde el usuario muestra cómo gestiona su dinero actualmente, pruebas de usabilidad con tareas específicas, análisis de llamadas al servicio de atención al cliente), técnicas cuantitativas (análisis del funnel de onboarding con tasas de abandono por paso, mapas de calor en el proceso de contratación), y cómo reclutar participantes que representen los diferentes perfiles de usuario financiero.

2. Diseño del flujo de onboarding sin fricción
El onboarding bancario digital es el mayor cuello de botella de conversión en fintech. Diseña un flujo de apertura de cuenta de menos de 5 minutos que cumpla los requisitos KYC: secuencia óptima de los pasos (captura de datos personales, verificación de identidad, selfie liveness, firma digital del contrato, primer uso del producto), principios de diseño para cada pantalla (progress bar, explicación de por qué se pide cada dato, feedback inmediato de error, recuperación de proceso interrumpido), y cómo diseñar la pantalla de éxito que active el primer uso.

3. Dashboard de finanzas personales
Diseña la pantalla principal de una app de gestión financiera personal: qué información mostrar en el primer vistazo (saldo disponible, movimientos recientes, alertas importantes), cómo jerarquizar visualmente la información financiera compleja (gráficos de gasto por categoría, evolución del ahorro, objetivos de ahorro), y cómo diseñar para que el usuario sienta control y no ansiedad al ver sus finanzas.

4. Diseño de flujos de pago y transferencia
Diseña el flujo de una transferencia bancaria con máxima usabilidad y seguridad: búsqueda de contacto o introducción de IBAN con validación en tiempo real, selección de importe con teclado numérico optimizado para móvil, resumen de confirmación claro antes de ejecutar (con especial atención al importe y destinatario para prevenir el fraude), confirmación con SCA (biometría o OTP), y pantalla de éxito con confirmación de la transacción.

5. Diseño de productos de inversión para no expertos
Uno de los mayores retos del diseño fintech es hacer accesibles los productos de inversión a usuarios sin conocimientos financieros. Define cómo diseñar la experiencia de inversión: test de idoneidad MiFID II con UX no intimidante, visualización del riesgo con metáforas comprensibles (no solo porcentajes), herramientas de simulación de rentabilidad con escenarios optimistas/base/pesimistas, y cómo presentar la información de costes y comisiones de forma transparente pero no desalentadora.

6. Notificaciones y comunicación proactiva
Diseña el sistema de notificaciones push e in-app de la aplicación bancaria: qué eventos merecen una notificación inmediata (transacción recibida, alerta de saldo bajo, intento de inicio de sesión no reconocido), cuáles son suficientes como notificación periódica (resumen semanal de gastos, avance hacia el objetivo de ahorro), y cómo diseñar las notificaciones para que sean útiles y no se perciban como spam, con gestión de preferencias de notificación fácil y granular.

7. Accesibilidad en apps financieras
Las apps bancarias tienen la obligación legal y moral de ser accesibles para todos los usuarios. Define los requisitos de accesibilidad mínimos (WCAG 2.1 AA): contraste de color suficiente en información financiera crítica (saldos negativos, alertas), tamaño de fuente mínimo para importes y condiciones contractuales, compatibilidad con lectores de pantalla (VoiceOver, TalkBack) en los flujos de pago, y cómo diseñar para usuarios mayores con menor competencia digital.

8. Design system bancario
Define los componentes de un design system para una aplicación bancaria: tokens de color (verde para ingresos, rojo para gastos, con variantes accesibles), tipografía financiera (legibilidad de números tabulares, jerarquía de importes), componentes de datos financieros (tarjeta de saldo, fila de transacción, gráfico de evolución), estados de error y vacío para cada componente clave, y cómo documentar el design system para el equipo de desarrollo.

Entregables de diseño: Especificación del flujo de onboarding con wireframes descritos textualmente, guía de componentes del design system financiero y protocolo de pruebas de usabilidad para validar el diseño antes del desarrollo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseño UX/UI para aplicaciones bancarias, neobancos y plataformas fintech',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de productos financieros y banca con IA',
                'description'      => 'Mejora tu efectividad en la venta de productos financieros: hipotecas, fondos de inversión, seguros, cuentas de empresa y créditos, con argumentarios adaptados al perfil del cliente y gestión experta de objeciones.',
                'prompt_content'   => <<<'EOT'
Eres un director comercial y formador de equipos de ventas con especialización en productos financieros bancarios: hipotecas, créditos al consumo, fondos de inversión, planes de pensiones, seguros y cuentas de empresa. Conoces la normativa de venta de productos financieros (MiFID II para inversión, LCCI para hipotecas, Solvencia II para seguros) y la psicología del comprador de servicios financieros.

Contexto comercial:
Soy [ROL: gestor de banca personal / asesor hipotecario / gestor de pymes / asesor de inversiones] en [BANCO / ENTIDAD FINANCIERA]. Los productos que vendo son [PRODUCTOS]. Los principales retos de ventas son [RETOS: superar la resistencia a cambiar de banco, competir en precio con fintechs, vender inversión a clientes conservadores].

Estrategia y técnicas de venta de productos financieros:

1. Entrevista de descubrimiento financiero
Diseña una guía de entrevista de descubrimiento para entender las necesidades financieras reales del cliente: preguntas sobre la situación actual (productos que tiene, banco principal, nivel de satisfacción), preguntas sobre objetivos financieros (ahorro para la jubilación, compra de vivienda, fondo de emergencia, objetivo de rentabilidad), preguntas sobre la tolerancia al riesgo (cómo se sentiría si su inversión bajara un 20%), y preguntas sobre el proceso de decisión (quién más interviene en las decisiones financieras de su hogar o empresa).

2. Argumentario por producto financiero
Desarrolla argumentarios completos para los cinco productos financieros más complejos de vender:
- Fondo de inversión para cliente conservador: cómo presentar la rentabilidad vs. el depósito, cómo explicar el riesgo sin asustar.
- Plan de pensiones: cómo hacer tangible la jubilación en 30 años y calcular el gap previsional.
- Hipoteca tipo fijo vs. variable: cómo ayudar al cliente a elegir sin sesgar la decisión.
- Seguro de vida o enfermedad: cómo hablar de la muerte y la incapacidad sin incomodar.
- Cuenta de empresa: cómo diferenciarse de los neobancos de empresa (Wise, Revolut Business) que ofrecen precio cero.

3. Gestión de objeciones financieras
Para cada objeción habitual en la venta bancaria, desarrolla respuestas con empatía y datos: "Ya tengo todo en mi banco de toda la vida" — "Los neobancos me dan la misma cuenta gratis" — "No quiero mover mis ahorros, tengo miedo de perder" — "No entiendo los fondos de inversión, es demasiado complicado" — "Las comisiones son muy altas" — "Necesito consultarlo con mi pareja". Para cada objeción, incluye la pregunta de exploración que permite entender si es una objeción real o una cortina de humo.

4. Venta consultiva vs. venta de producto en banca
Explica la diferencia práctica entre vender productos financieros (enfoque transaccional) y actuar como asesor financiero de confianza (enfoque consultivo). Define cómo hacer la transición de una relación transaccional a una relación asesora: frecuencia de contacto proactivo, conversaciones de revisión de la situación financiera global, y cómo convertir a clientes que solo tienen una nómina domiciliada en clientes de relación plena con múltiples productos.

5. Cumplimiento normativo en la venta (MiFID II y LCCI)
Explica los requisitos de MiFID II que afectan directamente al proceso de venta de productos de inversión: test de idoneidad (evaluación del perfil de riesgo, horizonte temporal y conocimientos del cliente), test de conveniencia para productos no asesorados, grabación de la conversación de venta, y documentos obligatorios a entregar. Para hipotecas, define los pasos del proceso regulado por la LCCI: FIPRE, FIAE, período de reflexión de 10 días y firma ante notario.

6. Gestión de la cartera de clientes bancarios
Diseña un sistema de gestión de cartera para un gestor bancario: segmentación de clientes por potencial y vinculación (clientes estratégicos, clientes de desarrollo, clientes estándar), modelo de contacto mínimo por segmento, alertas de oportunidad comercial basadas en eventos de vida del cliente (nómina aumenta, cliente cumple 65 años, cliente tiene vencimiento de depósito), y cómo gestionar el tiempo para balancear la prospección de clientes nuevos con la atención de clientes actuales.

7. Negociación de condiciones en productos financieros
Define la estrategia de negociación de condiciones financieras con clientes: cuándo conceder descuentos en comisiones o en tipos de interés, qué pedir a cambio de cada concesión (vinculación adicional, nómina domiciliada, seguro complementario), cómo escalar la autorización al director de oficina o al área comercial, y cómo manejar el cliente que llega con una oferta de la competencia en mano.

8. Métricas del gestor bancario y comercial
Define los KPIs de un equipo comercial bancario: ratio de conversión de entrevistas a ventas, ticket medio por cliente, índice de vinculación (número de productos por cliente), tasa de fuga de clientes a la competencia, net revenue por cliente, y NPS del servicio de asesoramiento. Propón un sistema de seguimiento diario que permita identificar a tiempo si el gestor se está quedando por detrás de los objetivos.

Entregables: Guión de entrevista de descubrimiento financiero, ficha de argumentario por producto (una hoja por producto), y plantilla de gestión de cartera con modelo de contacto semanal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Venta de productos bancarios y financieros a particulares y empresas',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management en fintech y banca digital con IA',
                'description'      => 'Gestiona el desarrollo de productos financieros digitales: define la estrategia de producto para un neobanco o fintech, prioriza features en un entorno altamente regulado y diseña la experiencia de cliente digital bancaria.',
                'prompt_content'   => <<<'EOT'
Eres un product manager con experiencia en banca digital, neobancos y startups fintech. Has gestionado el ciclo de vida completo de productos financieros regulados: desde la ideación y el diseño de la licencia hasta el lanzamiento, el crecimiento y la optimización. Conoces las restricciones únicas del product management en fintech: el peso del compliance, los tiempos de integración bancaria y la necesidad de generar confianza en cada touchpoint.

Contexto del producto:
Gestiono [O QUIERO LANZAR] un producto de [TIPO: cuenta de pagos, producto de inversión, crédito digital, agregador financiero, plataforma de pagos B2B]. El mercado objetivo es [MERCADO Y SEGMENTO] y el equipo de desarrollo tiene [TAMAÑO] personas con [STACK TECNOLÓGICO].

Product management en fintech:

1. Estrategia de producto financiero digital
Define la visión y la estrategia de producto a tres años: cuál es el problema financiero que resuelve mejor que cualquier alternativa, cuál es el modelo de negocio (comisiones por transacción, suscripción mensual, spread en tipo de cambio, interest income), cuáles son los moats tecnológicos o regulatorios que protegerán el negocio de la competencia a largo plazo, y cómo el producto evolucionará desde MVP hasta plataforma financiera completa.

2. Navegación del entorno regulatorio como producto
El entorno regulatorio es tanto una barrera de entrada como una ventaja competitiva para los productos fintech maduros. Define la hoja de ruta regulatoria del producto: qué licencias son necesarias en cada mercado (EMI, PSD2 AISP/PISP, licencia bancaria, CNMV para inversión), cómo diseñar el MVP dentro de los límites regulatorios existentes sin necesitar licencia propia (modelo de Banking-as-a-Service con un banco sponsor), y cuándo tiene sentido solicitar licencia propia.

3. Priorización de features en fintech
El backlog de un producto fintech tiene características únicas: las features de compliance son no negociables pero no aportan valor al usuario, las integraciones bancarias tardan meses, y los errores en features financieras tienen consecuencias reales para el dinero de los clientes. Diseña un framework de priorización adaptado al fintech: cómo ponderar el riesgo regulatorio, el impacto en la retención, la deuda técnica financiera y las peticiones del equipo de ventas.

4. Métricas del producto financiero
Define el north star metric y los KPIs del producto financiero: north star (puede ser el volumen de transacciones gestionado, el número de clientes activos mensuales con al menos una transacción, o el balance medio por cliente), métricas de activación (primer pago completado en los primeros 7 días), engagement (transacciones por cliente por mes), retención (churn mensual y su correlación con el número de productos contratados) y monetización (revenue por cliente activo y payback del CAC).

5. Gestión de incidentes y confianza en fintech
En un producto financiero, los incidentes tienen un impacto en la confianza del usuario mucho mayor que en otros sectores. Diseña el proceso de gestión de incidentes: niveles de severidad (P0: el dinero de clientes está en riesgo, P1: funcionalidad crítica caída, P2: degradación de rendimiento), roles y responsabilidades en el war room, comunicación proactiva a clientes afectados (qué decir, en qué canal, con qué frecuencia), y cómo hacer el post-mortem y comunicar las medidas tomadas.

6. Colaboración con Compliance y Legal
El Product Manager en fintech trabaja más estrechamente con Compliance y Legal que en otros sectores. Define el modelo de colaboración: cuándo involucrar a Compliance en el proceso de diseño (antes de desarrollar, no después), cómo gestionar la tensión entre experiencia de usuario y requisitos regulatorios, cómo documentar las decisiones de diseño con justificación regulatoria para futuras auditorías, y cómo acelerar la revisión de Compliance sin saltarse el proceso.

7. Roadmap en banca digital con restricciones de integración
Las integraciones bancarias y con sistemas de pago tienen tiempos de desarrollo mucho mayores que otras integraciones de software. Define cómo construir el roadmap teniendo en cuenta: tiempos de certificación y homologación de nuevas funcionalidades de pago (semanas o meses), dependencia de APIs de terceros con SLAs limitados, y cómo usar el modelo de Banking-as-a-Service (Railsbank, Swan, Treezor, Solarisbank) para acelerar el time-to-market de nuevas capacidades bancarias.

8. Experimentación y growth en fintech con restricciones regulatorias
El A/B testing en productos financieros tiene limitaciones que no existen en otros sectores: no se puede experimentar con los tipos de interés mostrados al azar, ni con los textos de los contratos, ni con los flujos de KYC regulados. Define qué sí se puede testar (onboarding, educación financiera, notificaciones, upsell de productos), el protocolo de diseño de experimentos en un entorno regulado, y cómo usar los datos de comportamiento para informar decisiones de producto sin incumplir el RGPD.

Entregables: Documento de estrategia de producto (1 pager ejecutivo), framework de priorización de backlog adaptado al fintech, y playbook de gestión de incidentes para el equipo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Product management en neobancos, fintechs y productos bancarios digitales',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de talento en el sector bancario y fintech con IA',
                'description'      => 'Recluta, desarrolla y retiene talento especializado en banca digital y fintech: perfiles tecnológicos escasos, gestión del cambio cultural hacia la digitalización bancaria y programas de upskilling financiero-tecnológico.',
                'prompt_content'   => <<<'EOT'
Eres un HR Business Partner especializado en el sector financiero y tecnológico, con experiencia en la transformación digital de organizaciones bancarias, el reclutamiento de perfiles híbridos fintech (tecnología + finanzas) y la gestión del cambio cultural en entidades financieras que migran de modelos tradicionales a modelos digitales.

Contexto organizacional:
Trabajo en RRHH de [BANCO TRADICIONAL EN TRANSFORMACIÓN DIGITAL / NEOBANCO EN CRECIMIENTO / STARTUP FINTECH]. La organización tiene [NÚMERO] empleados y los principales desafíos de talento son [DESAFÍOS: competir con big tech por perfiles tecnológicos, reconvertir perfiles bancarios tradicionales, construir cultura de startup en un banco, etc.].

Gestión de talento en banca y fintech:

1. Reclutamiento de perfiles tecnológicos para banca
El sector bancario compite con GAFA y startups por los mismos perfiles: ingenieros de software, data scientists, expertos en ciberseguridad y product managers. Define una estrategia de employer branding que haga atractiva la propuesta bancaria: qué ventajas reales ofrece la banca sobre una startup (estabilidad, escala de impacto, tecnología de misión crítica, remuneración competitiva), y cómo comunicarlas en las plataformas donde están los candidatos (LinkedIn, Stack Overflow, GitHub, Meetups de tecnología financiera).

2. Perfiles híbridos fintech: buscando unicornios
Los perfiles más valorados en fintech combinan conocimiento financiero profundo con habilidades tecnológicas: el ingeniero que entiende la contabilidad bancaria, el data scientist que conoce el riesgo de crédito, o el product manager con experiencia en regulación financiera. Define dónde encontrar estos perfiles, cómo evaluarlos en el proceso de selección y cómo desarrollarlos internamente cruzando formación financiera y tecnológica.

3. Transformación de la cultura bancaria hacia la agilidad
Los bancos tradicionales tienen culturas de gestión de riesgo y cumplimiento que chocan con las metodologías ágiles y la experimentación rápida. Diseña un programa de cambio cultural de 18 meses: diagnóstico de la cultura actual (encuestas de valores, entrevistas a mandos intermedios), definición de la cultura objetivo (qué comportamientos nuevos se necesitan), iniciativas de cambio concretas (ágil en toda la organización, OKRs, equipos cross-funcionales, políticas de fail-fast controlado), y cómo medir el progreso del cambio cultural.

4. Upskilling y reskilling en banca digital
La digitalización bancaria requiere que empleados con perfiles tradicionales (cajeros, gestores de oficina, analistas de riesgos) adquieran nuevas competencias digitales. Diseña un programa de upskilling a escala: identificación de las competencias digitales críticas por rol, diseño del itinerario formativo (de alfabetización digital básica a especialización en analytics o ciberseguridad según el perfil), modelos de aprendizaje efectivos para adultos en activo (microlearning, aprendizaje en el puesto, mentoría inversa de jóvenes a seniors), y cómo medir la adquisición real de competencias.

5. Retención en un entorno de alta demanda de talento fintech
El talento tecnológico en fintech tiene opciones de empleo prácticamente ilimitadas. Define una estrategia de retención multidimensional: compensación total competitiva (salario fijo, variable, equity o phantom shares en startups), propuesta de valor más allá del salario (proyectos de impacto real, formación en tecnologías de vanguardia, flexibilidad de trabajo, misión de inclusión financiera), y cómo detectar la intención de abandono antes de que se materialice con conversaciones de stay interview.

6. Diversidad en el sector financiero
El sector bancario y financiero tiene un déficit histórico de diversidad de género en posiciones directivas (el llamado techo de cristal financiero) y de diversidad de origen en sus plantillas. Diseña iniciativas concretas: programas de aceleración de carrera para mujeres en finanzas y tecnología, revisión de sesgos en los procesos de selección, objetivos de diversidad por nivel de seniority, y cómo medir y reportar los avances en los informes ESG del banco.

7. Regulación laboral específica del sector financiero
Existen requisitos regulatorios de RRHH específicos para el sector bancario: fit & proper de directivos (idoneidad evaluada por el Banco de España / BCE para los cargos de control), formación certificada obligatoria para la red comercial en materia de productos MiFID, y los requisitos de remuneración variable de la CRD IV para bancos sistémicos. Define cómo gestionar estos requisitos sin que se conviertan en un cuello de botella para la operación de RRHH.

8. Gestión del talento en entornos de fusiones y adquisiciones
El sector bancario europeo sigue en proceso de consolidación, y las fusiones tienen un impacto enorme en las personas: incertidumbre sobre duplicidades de puestos, choques de cultura organizacional y pérdida de talento clave. Diseña el plan de RRHH para una fusión bancaria: comunicación transparente desde el primer día, proceso de selección interna para los roles unificados, programa de retención de talento crítico durante el período de incertidumbre, y plan de integración cultural.

Entregables: Perfil de competencias digitales por rol bancario, plan de onboarding para perfiles tecnológicos en banca, y guía de conversación de stay interview para mandos intermedios.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestión de talento, transformación digital y cultura en banca y fintech',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de riesgo financiero y credit scoring con IA',
                'description'      => 'Diseña modelos de análisis de riesgo crediticio, scoring de clientes y stress testing de carteras de préstamos usando IA y machine learning, con cumplimiento de los requisitos del Banco de España y Basilea III.',
                'prompt_content'   => <<<'EOT'
Eres un analista de riesgos financieros y experto en credit risk con experiencia en el diseño de modelos de scoring crediticio, valoración de carteras de préstamos, stress testing y cumplimiento de los marcos de capital de Basilea III y IV. Conoces las metodologías IRB (Internal Ratings Based), los modelos de scoring estadísticos y el uso de machine learning en la gestión del riesgo de crédito.

Contexto financiero:
Trabajo en el área de riesgos de [BANCO / ENTIDAD DE CRÉDITO / FINTECH DE CRÉDITO] gestionando carteras de [TIPO DE CRÉDITO: hipotecas, consumo, pymes, corporativo]. El tamaño de la cartera es [IMPORTE] y la tasa de morosidad actual es [PORCENTAJE].

Análisis de riesgo crediticio que necesito desarrollar:

1. Diseño de un modelo de scoring crediticio
Diseña la arquitectura de un modelo de scoring para [TIPO DE CRÉDITO]: variables candidatas a incluir en el modelo (variables sociodemográficas, comportamiento bancario, datos de bureau de crédito como CIRBE, variables alternativas para clientes sin historial), metodologías de modelización disponibles (regresión logística como baseline, gradient boosting, redes neuronales), y cómo elegir entre ellas ponderando la precisión predictiva vs. la interpretabilidad requerida por el regulador. Define el proceso de validación del modelo: out-of-sample testing, Gini, KS y ROC-AUC como métricas de discriminación.

2. Gestión de la morosidad y recuperación de deuda
Diseña el proceso end-to-end de gestión de créditos en situación de dudosidad: criterios de clasificación según la Circular de Banco de España (normal, vigilancia especial, dudoso subjetivo y dudoso objetivo), proceso de provisiones conforme a IFRS 9 (stage 1, 2 y 3 según el nivel de deterioro crediticio), estrategia de recuperación (reestructuración, refinanciación, venta de cartera a fondos de deuda, proceso judicial), y modelos de predicción de probabilidad de recuperación por segmento.

3. Stress testing de la cartera de crédito
Diseña el ejercicio de stress testing de la cartera siguiendo la metodología de la EBA (European Banking Authority): definición de los escenarios macroeconómicos (base, adverso y severamente adverso con variables como PIB, desempleo, precios inmobiliarios y tipos de interés), impacto de cada escenario en la Probabilidad de Incumplimiento (PD), la Pérdida en caso de Incumplimiento (LGD) y la Exposición en el Momento del Incumplimiento (EAD), y cómo presentar los resultados al Consejo de Administración y al supervisor.

4. Cumplimiento Basilea III / IV y requerimientos de capital
Explica los requisitos de capital para el riesgo de crédito bajo el marco de Basilea III y la implementación europea (CRR3 / CRD6): diferencias entre el método estándar y el método IRB para el cálculo de los activos ponderados por riesgo (RWA), los nuevos suelos de capital (output floor) que introduce Basilea IV, y cómo optimizar el uso del capital regulatorio sin incrementar el riesgo real de la cartera (gestión del balance bajo Basilea).

5. Machine learning en la gestión del riesgo de crédito
Analiza las oportunidades y los límites del uso de machine learning en credit risk: dónde aporta más valor (modelos de scoring más precisos para perfiles thin-file, detección de fraude en tiempo real, modelos de propensión para reestructuraciones), cuáles son los riesgos específicos (modelos caja negra no explicables para el regulador, riesgo de sesgos discriminatorios, overfitting en datos históricos con patrones no representativos del futuro), y cómo cumplir con la regulación de IA en banca (DORA, AI Act europeo aplicado a modelos de scoring).

6. Riesgo de concentración y gestión de la cartera
Diseña un sistema de límites de concentración de riesgo para la cartera de crédito: concentración por sector económico, por zona geográfica, por tamaño de deudor (grandes exposiciones según el artículo 395 CRR), por moneda y por plazo de vencimiento. Define las métricas de concentración (HHI, índice de Gini de la cartera) y el proceso de revisión periódica de los límites con el Comité de Riesgos.

7. Expected Credit Loss bajo IFRS 9
Explica la metodología de cálculo de la Expected Credit Loss (ECL) según IFRS 9: los tres stages de deterioro crediticio y sus criterios de clasificación, los componentes del ECL (PD forward-looking, LGD con colateral actualizado, EAD incluyendo compromisos contingentes), la integración de información macroeconómica prospectiva (forward-looking information) en los modelos, y el impacto del ECL en la cuenta de resultados y en los ratios de capital del banco.

8. Reporting de riesgos al supervisor bancario
Define los informes regulatorios de riesgo de crédito que deben enviarse al Banco de España y al BCE: COREP (reporting de capital y riesgo), FINREP (reporting financiero supervisorio), declaración a la CIRBE (Central de Información de Riesgos del Banco de España), y los nuevos requerimientos de reporting de la EBA bajo el marco de datos de información bancaria integrada (IReF). Explica el calendario de reporting y las consecuencias de los errores en la información supervisora.

Entregables técnicos: Marco metodológico del modelo de scoring, plantilla de stress test con variables macroeconómicas clave, y checklist de cumplimiento IFRS 9 para la clasificación de exposiciones crediticias.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Riesgo de crédito, scoring bancario y cumplimiento Basilea en entidades financieras',
                'vote_score'       => 25,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Compliance bancario y regulación fintech con IA',
                'description'      => 'Gestiona el cumplimiento normativo en el sector bancario y fintech: PSD2, AML/KYC, MiFID II, DORA, regulación de criptoactivos (MiCA) y preparación para inspecciones del Banco de España y la CNMV.',
                'prompt_content'   => <<<'EOT'
Eres un director de Compliance y experto en regulación financiera con experiencia en bancos y entidades de pago supervisadas por el Banco de España, la CNMV y el BCE. Conoces en profundidad el marco regulatorio financiero europeo: PSD2, MiFID II, AML/KYC, DORA, MiCA, CRR/CRD, y las guías y circulares del Banco de España. Has liderado procesos de supervisión in situ y remota por parte de los reguladores europeos.

Contexto normativo:
Trabajo en el departamento de Compliance de [BANCO / ENTIDAD DE PAGO / FINTECH / GESTORA DE INVERSIONES] supervisada por [BANCO DE ESPAÑA / CNMV / BCE / BANCO DE ESPAÑA + CNMV]. Los principales riesgos de cumplimiento identificados son [RIESGOS].

Análisis y gestión de compliance financiero:

1. Marco normativo aplicable y mapa de riesgos regulatorios
Elabora el mapa completo de normativa financiera aplicable a la entidad: normativa prudencial (CRR, CRD, DORA para la resiliencia operativa digital), normativa de conducta (MiFID II / MiFIR para inversión, LCCI para hipotecas, normativa de transparencia del Banco de España), normativa de pagos y servicios financieros (PSD2 y su transposición al Real Decreto-ley de servicios de pago), prevención del blanqueo de capitales (Directiva AML 5ª y 6ª, Ley 10/2010 española), y regulación emergente (MiCA para criptoactivos, IA Act para modelos de decisión automatizada). Para cada norma, define el riesgo máximo de incumplimiento y el estado de cumplimiento actual.

2. Programa de prevención del blanqueo de capitales (AML)
Diseña el programa AML completo para la entidad: política de aceptación de clientes (PAC), procedimiento de diligencia debida básica, reforzada y simplificada según el perfil de riesgo del cliente, sistema de monitoreo de transacciones (reglas de alerta, umbrales, tipologías de blanqueo más relevantes para el sector), proceso de comunicación de operaciones sospechosas al Sepblac, y formación obligatoria del personal en AML. Incluye los indicios de blanqueo más frecuentes en banca de particulares, en banca de empresas y en medios de pago.

3. Regulación MiCA y cumplimiento en criptoactivos
Explica los requisitos del Reglamento MiCA (Markets in Crypto-Assets) que aplican a las entidades financieras con exposición a criptoactivos: categorías de criptoactivos y sus diferentes regímenes regulatorios (tokens de utilidad, tokens referenciados a activos como las stablecoins, tokens de dinero electrónico), requisitos de licencia para los Crypto-Asset Service Providers (CASP), obligaciones de transparencia para los emisores de criptoactivos, y cómo integrar MiCA en el programa de compliance existente.

4. DORA: resiliencia operativa digital del sector financiero
Analiza los requisitos del Reglamento DORA (Digital Operational Resilience Act) que aplica al sector financiero desde enero de 2025: gestión del riesgo de TIC (Tecnologías de la Información y Comunicación), testing de resiliencia operativa (incluyendo TLPT - Threat-Led Penetration Testing para entidades significativas), gestión del riesgo de terceros proveedores de TIC (especialmente cloud providers y proveedores críticos), notificación de incidentes ICT graves al supervisor en plazos estrictos, y registro del riesgo de terceros en el Register of Information que deben mantener las entidades.

5. MiFID II: protección del inversor y conducta de mercado
Define los requisitos de MiFID II que afectan a la relación con el cliente inversor: test de idoneidad y de conveniencia, documentación precontractual (KID de PRIIP, DFI de fondos UCITS, KII de planes de pensiones), obligaciones de grabación de comunicaciones de ventas de inversión, reporting post-venta a clientes (extractos de cartera, costes ex-post), y gestión de conflictos de interés (política de conflictos, registro de conflictos, mecanismo de resolución).

6. Preparación para inspecciones supervisoras
Diseña el proceso de preparación para una inspección in situ del Banco de España o del BCE: inventario de documentación que suele solicitarse (manuales de políticas y procedimientos, actas de los órganos de gobierno, informes de auditoría interna, planes de acción de auditorías anteriores, reporting regulatorio), rol del equipo de compliance durante la inspección (punto de contacto único, gestión de las solicitudes de información, revisión de los borradores de los informes de inspección antes de firmar), y cómo gestionar las medidas correctoras derivadas de la inspección.

7. Gobierno corporativo y función de cumplimiento
Define la estructura de gobierno de la función de cumplimiento normativo: posición del Director de Compliance en el organigrama (independencia funcional), reporte al Consejo de Administración y al Comité de Auditoría, relación con la segunda línea de defensa (gestión de riesgos) y la tercera línea (auditoría interna), y cómo redactar el informe anual de compliance para el Consejo.

8. Sanciones regulatorias y gestión de crisis de compliance
Diseña el protocolo de respuesta ante una sanción regulatoria o un requerimiento supervisor: evaluación inicial del alcance y la gravedad, notificación interna (Consejo, CEO, accionistas si cotiza), decisión sobre si impugnar o aceptar la sanción y pagar con reducción por allanamiento, plan de acción correctora creíble para presentar al supervisor, comunicación externa (nota de prensa, comunicado a accionistas en caso de entidad cotizada) y cómo gestionar el impacto reputacional.

Nota legal: Este análisis tiene carácter orientativo. El cumplimiento normativo en el sector financiero requiere asesoramiento legal especializado y adaptado a la situación concreta de cada entidad y jurisdicción.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Compliance bancario, regulación fintech y preparación de inspecciones supervisoras',
                'vote_score'       => 22,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente en banca digital con IA',
                'description'      => 'Optimiza el servicio de atención al cliente en bancos y fintechs: gestiona reclamaciones financieras, mejora la resolución en el primer contacto, implementa bots conversacionales y cumple con el Servicio de Atención al Cliente regulado.',
                'prompt_content'   => <<<'EOT'
Eres un director de atención al cliente y customer experience especializado en el sector financiero. Tienes experiencia en la gestión de equipos de soporte en banca digital, el diseño de flujos conversacionales para chatbots financieros, el cumplimiento de los requisitos regulatorios del Servicio de Atención al Cliente (SAC) del Banco de España, y la gestión de reclamaciones complejas en productos financieros.

Contexto del servicio:
Dirijo el equipo de atención al cliente de [BANCO / NEOBANCO / FINTECH] con [NÚMERO] de contactos mensuales gestionados a través de [CANALES: chat en la app, email, teléfono, redes sociales]. Los principales motivos de contacto son [MOTIVOS] y los KPIs actuales son [KPIs].

Estrategia de atención al cliente financiero:

1. Gestión de reclamaciones financieras reguladas
Las reclamaciones financieras en banca están reguladas: el SAC del Banco de España y el Defensor del Cliente son instancias supervisadas. Define el proceso de gestión de reclamaciones que cumpla con la normativa: plazos legales de respuesta (15 días hábiles para el SAC, con posibilidad de ampliar a 35 en casos complejos), formato obligatorio de la respuesta (carta de contestación firmada por el Servicio de Atención al Cliente o el Defensor del Cliente), cómo escalar al Banco de España o a la CNMV si el cliente no está satisfecho con la respuesta interna, y cómo gestionar el registro de reclamaciones que exige el supervisor.

2. Resolución de los motivos de contacto más frecuentes
Crea guías de resolución para los diez problemas más habituales en atención al cliente bancaria: transacción no reconocida o fraudulenta (proceso de chargeback con el emisor de tarjeta, plazos y documentación requerida), error en una transferencia (posibilidades de recuperación según si el destinatario es en la misma entidad o en otra, plazos SEPA), bloqueo de cuenta o tarjeta por el sistema antifraude (cómo desbloquear, qué información pedir al cliente para verificar), dificultades con el proceso de KYC durante el onboarding, y reclamación de comisiones cobradas indebidamente.

3. Diseño del chatbot financiero con IA
Define la arquitectura conversacional de un chatbot para atención al cliente bancaria: árbol de intenciones a cubrir en la primera fase (saldo e información de cuenta, últimos movimientos, bloqueo de tarjeta, solicitud de transferencia simple, estado de una reclamación), flujo de escalado a agente humano (cuándo y cómo hacer el handoff sin frustrar al cliente), y los principios de diseño conversacional para el sector financiero (nunca dejar al cliente sin respuesta, siempre confirmar las transacciones antes de ejecutarlas, mantener el lenguaje claro y sin jerga bancaria).

4. Omnicanalidad en la banca digital
Diseña la estrategia omnicanal del servicio de atención al cliente: cómo asegurar la continuidad de contexto cuando el cliente pasa del chat de la app al teléfono (sin tener que repetir el problema), cómo integrar las consultas de redes sociales (Twitter/X, Instagram) en el CRM de soporte, y cómo gestionar la coherencia en los plazos y la calidad de respuesta entre todos los canales. Define qué tipo de consulta debe resolverse en cada canal.

5. Formación en productos financieros para el equipo de CS
El agente de atención al cliente bancaria necesita conocer en profundidad los productos que gestiona: define un programa de formación continua que cubra los cambios de producto, las nuevas regulaciones que afectan a los clientes (cambios en MiFID II, nueva normativa de transparencia, cambios en comisiones) y los procedimientos internos actualizados. Diseña un test de certificación periódico para garantizar que el equipo mantiene el conocimiento actualizado.

6. NPS y satisfacción del cliente en banca
Define la estrategia de medición de la satisfacción del cliente en banca: NPS transaccional (después de cada interacción con el servicio de atención al cliente), NPS relacional (percepción global del banco como proveedor), CSAT y Customer Effort Score (CES, que mide cuánto esfuerzo tiene que hacer el cliente para resolver su problema). Diseña el proceso de análisis de los verbatim (comentarios cualitativos) para identificar los principales drivers de insatisfacción.

7. Gestión de clientes en situación de vulnerabilidad
La regulación bancaria exige un trato diferenciado a clientes en situación de vulnerabilidad: clientes con dificultades de comprensión (mayores, personas con discapacidad cognitiva, clientes con bajo nivel de educación financiera), clientes en situación de sobreendeudamiento, y clientes víctimas de fraude o estafa. Define los protocolos específicos: cómo identificar al cliente vulnerable, cómo adaptar la comunicación, qué soluciones especiales están disponibles (periodos de carencia, reestructuración de deuda, acceso a servicios bancarios básicos).

8. Métricas operativas del centro de atención bancario
Define los KPIs operativos del servicio de atención al cliente financiero: tasa de resolución en el primer contacto (FCR) diferenciada por canal y tipo de consulta, tiempo medio de gestión (TMG) y coste por contacto, tasa de escalado a supervisor o a reclamación formal, tasa de abandono en cola telefónica, tiempo de respuesta por canal (email, chat, RRSS), y tasa de reclamaciones que escalan al Banco de España como porcentaje del total de reclamaciones recibidas.

Entregables: Guía de resolución de los diez problemas más frecuentes, flujo de escalado de reclamaciones con plazos regulatorios, y diseño del árbol de intenciones del chatbot bancario para la primera fase de implementación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Atención al cliente y gestión de reclamaciones en banca digital y fintech',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría fintech freelance con IA',
                'description'      => 'Construye tu negocio de consultoría fintech independiente: especialízate en regulación financiera, transformación digital bancaria o estrategia de producto fintech, y consigue tus primeros clientes en el sector financiero.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de negocios con profundo conocimiento del ecosistema fintech y bancario europeo. Has acompañado a docenas de consultores independientes a construir negocios rentables asesorando a bancos, fintechs, fondos de inversión y reguladores financieros. Conoces las necesidades de talento externo en el sector y cómo posicionarse como experto de referencia en este mercado.

Contexto personal:
Tengo experiencia en [ÁREA ESPECÍFICA: regulación financiera / product management fintech / riesgo de crédito / transformación digital bancaria / estrategia de pagos / ciberseguridad en banca / compliance AML] y quiero lanzar o escalar mi actividad como consultor independiente en el sector financiero. Mi objetivo es alcanzar [FACTURACIÓN] en [PLAZO].

Plan de negocio para consultoría fintech freelance:

1. Diagnóstico de tu ventaja competitiva en fintech
El sector financiero tiene una demanda enorme de talento externo especializado, pero los clientes son exigentes: solo contratan expertos con experiencia demostrable en su problema concreto. Ayúdame a identificar mi ventaja competitiva real: qué problemas específicos he resuelto en mi carrera que pocos consultores pueden abordar con la misma profundidad, qué credenciales me hacen creíble (certificaciones, reguladores con los que he trabajado, proyectos de referencia), y cuál es el perfil de cliente que más se beneficiaría de mi experiencia.

2. Nicho de consultoría fintech con mayor potencial
El sector financiero tiene múltiples nichos con alta demanda de consultores especializados en 2025-2026. Analiza cinco oportunidades de especialización: consultoría de cumplimiento DORA para entidades de mediana escala que necesitan adaptar su gestión de riesgo TIC antes de las fechas límite supervisoras, consultoría de estrategia para fintechs que quieren expandirse internacionalmente y necesitan entender el marco regulatorio de nuevos mercados, asesoramiento a bancos tradicionales en la selección e implementación de soluciones de Banking-as-a-Service, consultoría de credit risk para fintechs de crédito que deben implementar modelos de scoring regulatorios, y asesoramiento en MiCA para entidades que quieren ofrecer servicios de criptoactivos bajo la nueva regulación. Para cada nicho, evalúa: urgencia de la demanda, tamaño del mercado, ticket medio y grado de competencia.

3. Propuesta de valor y credibilidad instantánea
En el sector financiero, la credibilidad es todo: los clientes no contratan a desconocidos para asesorar en temas regulatorios o estratégicos de alto riesgo. Define cómo construir credibilidad instantánea sin necesitar un gran historial de consultoría: casos de éxito de tu etapa en banco o fintech que puedas describir (con los datos anonimizados), publicaciones técnicas en LinkedIn o revistas especializadas (RMF - Risk & Financial Management, FinTech Magazine, Finnovating), ponencias en eventos del sector (FinTech Spain, Madrid Fintech Summit, eventos de la AEB o CECA), y cómo obtener los primeros testimoniales de clientes.

4. Modelo de negocio y estructura de servicios
Diseña la cartera de servicios con tres niveles de compromiso:
- Proyecto de diagnóstico (1-2 semanas, precio de entrada): revisión del estado actual de cumplimiento normativo, diagnóstico de la madurez de un proceso financiero o análisis de viabilidad de un nuevo producto regulado. Precio: 3.000 a 8.000 euros.
- Proyecto de implementación (1-3 meses): diseño e implementación de un programa de compliance, un modelo de riesgo o una estrategia de producto fintech. Precio: 15.000 a 50.000 euros.
- Retainer de asesoramiento continuo (6-12 meses): apoyo recurrente como Director de Compliance, Chief Risk Officer o CPO externo. Precio: 3.000 a 8.000 euros/mes. Define qué incluye exactamente cada nivel y cómo hacer upsell natural desde el diagnóstico al proyecto completo.

5. Captación de clientes en el ecosistema financiero
Los clientes del sector financiero se consiguen de forma diferente a otros sectores: las licitaciones formales tienen procesos largos, pero las contrataciones directas por relaciones personales son la norma. Diseña una estrategia de captación que funcione: construcción de red en eventos del sector (Madrid Fintech Summit, FinTech Spain, eventos de la Asociación Española de Banca, meetups de compliance bancario), estrategia de contenido de autoridad en LinkedIn (análisis de novedades regulatorias, opinión fundamentada sobre tendencias fintech, casos de estudio), y cómo activar tu red de contactos actuales para generar los primeros proyectos.

6. Pricing y propuesta económica en consultoría financiera
Define cómo fijar tus tarifas en el mercado de consultoría financiera: benchmarks de tarifas por tipo de especialización (compliance bancario vs. product strategy vs. risk modeling), cómo comparar tu propuesta con las grandes consultoras (McKinsey, Oliver Wyman, KPMG FS) para justificar el precio con ventajas tangibles de trabajar con un independiente (velocidad, acceso directo al experto senior, sin over-staffing), y cómo estructurar una propuesta económica que transmita confianza y profesionalidad desde el primer contacto.

7. Gestión de proyectos y entrega de calidad regulatoria
Los clientes del sector financiero tienen estándares de calidad documentaria muy altos: los informes de consultoría que se presentan a reguladores o al Consejo deben ser impecables. Define tu proceso de entrega: metodología de proyecto (fases, hitos, revisiones intermedias con el cliente), estándares de documentación (formato de informes, metodología citada, disclaimers legales necesarios), y cómo gestionar el inevitable scope creep en proyectos regulatorios donde la normativa cambia durante el proyecto.

8. Posicionamiento para ser referenciado por otras consultoras
Una estrategia poderosa en consultoría financiera es convertirte en el especialista que las grandes consultoras subcontratan cuando necesitan tu expertise específico. Define cómo posicionarte para recibir subcontratos de Big Four y consultoras de estrategia: qué les puedes ofrecer que no tienen internamente, cómo iniciar la conversación, qué acuerdos de confidencialidad y non-compete son habituales, y cómo proteger tu relación directa con el cliente final mientras colaboras con intermediarios.

Entregables: Propuesta de valor diferenciada en una sola página, propuesta comercial tipo para el primer proyecto de diagnóstico, y plan de presencia en LinkedIn para los próximos 90 días con temas de contenido y frecuencia de publicación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Negocio freelance de consultoría en fintech, banca digital y regulación financiera',
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
