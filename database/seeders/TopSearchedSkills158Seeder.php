<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills158Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing para fintech',
                'description'       => 'Las particularidades del marketing en servicios financieros: confianza, regulación, lenguaje y los canales que funcionan para adquirir usuarios en un sector donde el dinero da miedo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en marketing de crecimiento para empresas fintech con experiencia en cumplimiento normativo y adquisición de usuarios en servicios financieros. Necesito diseñar una estrategia de marketing para mi producto fintech que sea efectiva, cumpla la regulación y construya confianza en un sector donde los usuarios son naturalmente escépticos.

Mi producto fintech:
- Tipo de producto: [cuenta de pago, inversión, crédito, seguros, cripto, open banking...]
- Mercado objetivo: [España, Europa, LATAM]
- Segmento de usuario: [millennials, autónomos, pymes, wealth management...]
- Fase actual: [pre-lanzamiento, early stage, crecimiento, escala]
- Métricas actuales si las hay: [usuarios, conversión, CAC, LTV]

Desarrolla:

**1. Las particularidades del marketing en servicios financieros**
Explica por qué el marketing de un fintech es fundamentalmente diferente al de cualquier otro producto digital: el factor confianza como barrera de entrada, la regulación publicitaria que limita los mensajes, la fricción del onboarding KYC y la diferencia entre la conversión de un usuario de app de fotos y la de un usuario que va a dar acceso a su cuenta bancaria. Incluye los errores más comunes de equipos de marketing sin experiencia financiera cuando lanzan un fintech.

**2. Mensajes que generan confianza en fintech**
- Los principios de copywriting para productos financieros: qué palabras construyen confianza y cuáles generan alarma
- Cómo comunicar la seguridad del dinero sin prometer rendimientos ni garantías que no puedes hacer
- Los claims que están prohibidos o restringidos en publicidad financiera en España y Europa
- Cómo hablar de innovación y tecnología sin sacrificar la percepción de solidez y fiabilidad

**3. Canales de adquisición que funcionan en fintech**
Para cada canal, explica el ROI típico, las restricciones específicas del sector y las mejores prácticas:
- Paid social (Meta, Google): las políticas de publicidad financiera y cómo navegar las restricciones
- SEO para fintech: las palabras clave con mayor intención de conversión y la competencia en SERPs financieros
- Partnerships y co-marketing con otras marcas
- Influencer marketing financiero: los riesgos regulatorios y cómo hacerlo correctamente
- Content marketing y educación financiera como canal de adquisición

**4. El funnel de adquisición fintech**
Define el funnel específico para un producto financiero desde el awareness hasta la activación:
- Awareness: cómo llegar a usuarios que no están buscando activamente cambiar de banco o producto financiero
- Consideration: qué contenido y qué mensajes mueven al usuario de "me parece interesante" a "voy a probar"
- Onboarding: cómo minimizar el abandono en el proceso de KYC, verificación de identidad y vinculación de cuenta
- Activación: qué hace que el usuario use el producto por primera vez de verdad
- Retención y referral: los programas que funcionan en fintech para mantener usuarios activos y que traigan a otros

**5. Cumplimiento normativo en marketing financiero**
- Las reglas de la CNMV, el Banco de España y la ESMA para la publicidad de productos financieros
- Qué revisión legal necesita cada pieza de marketing antes de publicarse
- Cómo construir un proceso de aprobación de contenido que no paralice al equipo de marketing
- Los riesgos de las campañas de influencers en productos de inversión y cómo cubrirlos

**6. Métricas de marketing específicas para fintech**
- Las métricas que importan en fintech vs. las de una app convencional: CAC por canal ajustado al LTV del cliente financiero, tasa de activación financiera, NPS como predictor de retención
- Cómo calcular el CAC en contextos de ciclos de conversión largos (3-6 meses desde el primer contacto)
- El impacto del churn bancario en las métricas de marketing y cómo anticiparlo

**7. Casos de éxito de marketing fintech en Europa**
Analiza las estrategias de marketing de Revolut, N26, Wise, Bnext o similares: qué mensajes usaron en su lanzamiento, cómo construyeron listas de espera, qué canales dominaron primero y cómo escalaron.

**8. Plan de marketing para los próximos 90 días**
Las iniciativas concretas con presupuesto, canal, mensaje y métrica de éxito para cada una, adaptadas a la fase actual del producto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Estrategia de marketing para fintechs que necesitan adquirir usuarios en un sector de alta desconfianza y con restricciones regulatorias en los mensajes publicitarios.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Open banking y PSD2',
                'description'       => 'Implementa integraciones de open banking: APIs bancarias, consentimiento del usuario, flujos de autenticación y los proveedores que simplifican la integración con los bancos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un arquitecto de software especializado en open banking y servicios de pago europeos. Necesito implementar integraciones de open banking en mi producto y quiero entender tanto el marco regulatorio como las decisiones técnicas de arquitectura que debo tomar.

Mi contexto:
- Tipo de producto que estoy construyendo: [agregador de cuentas, gestor de finanzas personales, app de pagos, contabilidad automatizada, scoring crediticio...]
- Stack tecnológico: [lenguaje y framework principal]
- Mercados objetivo: [España, UK, Francia, Europa...]
- Experiencia previa con APIs bancarias: [ninguna, algo, bastante]

Desarrolla:

**1. El marco de PSD2 y open banking explicado para developers**
Explica la Directiva de Servicios de Pago 2 (PSD2) desde la perspectiva técnica: qué obliga a hacer a los bancos, qué derechos dan a los proveedores de servicios (AISP, PISP, CISP), cómo funciona el consentimiento del usuario y cuánto dura. Explica también la diferencia entre PSD2, open banking del Reino Unido y las APIs STET francesas. Incluye el estado de la implementación en España y los bancos más relevantes.

**2. Arquitectura de una integración de open banking**
- Los tres modelos de integración: directo con las APIs de los bancos, a través de un agregador (Plaid, TrueLayer, Nordigen/GoCardless, Belvo) o mediante un hub de open banking
- Cuándo conectar directamente con los bancos y cuándo usar un agregador intermediario: la comparativa en cobertura, coste, mantenimiento y fiabilidad
- El flujo de autenticación OAuth 2.0 con SCA (Strong Customer Authentication): los pasos técnicos, las redirecciones y los tokens de acceso y refresco
- Gestión del consentimiento: cómo almacenarlo, renovarlo y revocarlo siguiendo los requisitos de PSD2

**3. Los principales proveedores de open banking en Europa**
Para cada uno explica cobertura de bancos, modelo de precios, calidad de documentación, fiabilidad y casos de uso ideales:
- Nordigen (GoCardless): el caso especial del acceso gratuito a cuentas de saldo
- TrueLayer: fortaleza en UK y expansión europea
- Plaid: su entrada en Europa y diferencias con la versión US
- Belvo: especialización en LATAM con expansión a Europa
- Salt Edge, Tink (Visa), Token.io

**4. Implementación técnica paso a paso**
Guía de implementación usando el proveedor más adecuado para mi caso de uso:
- Registro y obtención de credenciales de sandbox
- Flujo de autorización del usuario: redirect URI, manejo del callback, intercambio de código por token
- Llamadas a la API de cuentas (balances, transacciones): estructura de respuesta y normalización de datos
- Manejo de errores específicos de open banking: token expirado, banco no disponible, límite de llamadas
- Webhooks para notificaciones de nuevas transacciones: implementación y verificación de firma

**5. Strong Customer Authentication (SCA)**
- Qué es la SCA y cuándo se requiere en los flujos de open banking
- Los métodos de SCA que soportan los bancos europeos: app push, OTP, tarjeta de coordenadas
- Cómo diseñar la UX de la redirección al banco para minimizar el abandono
- Las exenciones de SCA y cuándo aplicarlas

**6. Gestión de datos y cumplimiento GDPR**
- Qué datos bancarios puedes almacenar, por cuánto tiempo y con qué base legal
- Cómo implementar la revocación del consentimiento y la eliminación de datos bancarios
- Los requisitos de seguridad para almacenar tokens de acceso bancario
- Auditoría y logging de accesos a datos financieros

**7. Monitorización y resiliencia**
- Cómo manejar la alta tasa de errores y caídas que tienen las APIs bancarias en producción
- Estrategias de retry, circuit breaker y fallback para integraciones bancarias poco fiables
- Alertas y dashboards para monitorizar la salud de las conexiones bancarias
- Cómo comunicar al usuario cuando su banco no está disponible sin que abandone el producto

**8. Hoja de ruta de implementación**
Las fases de implementación recomendadas, desde el sandbox hasta la producción, con los hitos técnicos y de cumplimiento en cada etapa.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Guía técnica completa para implementar integraciones de open banking bajo PSD2, desde la elección del proveedor hasta la gestión del consentimiento y la resiliencia en producción.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño financiero confiable',
                'description'       => 'Los principios de diseño que hacen que las apps financieras sean percibidas como seguras: onboarding, pantallas de pago y el diseño que reduce el abandono por desconfianza.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en UX/UI para productos financieros digitales con experiencia en psicología de la confianza y conversión en servicios de dinero. Quiero diseñar o rediseñar mi app financiera para que los usuarios la perciban como segura, fiable y fácil de usar, reduciendo el abandono en los momentos críticos donde el dinero está en juego.

Mi producto:
- Tipo de app financiera: [neobanco, inversión, pagos, crédito, seguros, cripto...]
- Fase de diseño: [diseño desde cero, rediseño de flujos existentes, optimización de conversión]
- Problema principal actual: [alto abandono en onboarding, desconfianza en la pantalla de pago, baja activación...]
- Plataforma: [iOS, Android, web, todas]

Desarrolla:

**1. La psicología de la confianza en el diseño financiero**
Explica los mecanismos psicológicos que hacen que un usuario confíe o desconfíe de una app financiera en los primeros segundos de interacción: la señal de la interfaz visual, la familiaridad de los patrones de interacción, los indicadores de seguridad y el rol del branding en la percepción de solidez. Por qué los primeros 3 segundos en una pantalla financiera son más críticos que en cualquier otra app.

**2. Principios de diseño visual para apps financieras**
- Paleta de colores: qué comunican los diferentes colores en el contexto financiero (confianza, urgencia, éxito, error) y los errores de color que generan desconfianza
- Tipografía: legibilidad en cifras, densidad de información financiera y las familias tipográficas que transmiten precisión
- Espaciado y jerarquía: cómo mostrar información financiera compleja sin abrumar al usuario
- Iconografía: los iconos que generan confianza y los que generan ambigüedad en contexto financiero
- El diseño de los números: cómo mostrar saldos, transacciones y cifras para que sean inequívocas

**3. Diseño del onboarding financiero**
El onboarding de un producto financiero es el proceso con mayor tasa de abandono de toda la app. Diseña:
- La progresión ideal de pantallas: qué pedir primero y qué dejar para después para maximizar la conversión
- Cómo comunicar los requisitos de verificación de identidad (KYC) antes de que el usuario empiece para que no se sienta sorprendido
- El diseño de la verificación de identidad: las pantallas de subida de DNI, selfie y confirmación que minimizan el abandono
- Los mensajes de espera durante la verificación: cómo gestionar el tiempo de procesamiento para que el usuario no abandone
- Los estados de error en el onboarding: cómo comunicar que el DNI no se lee, que la foto no es válida o que el usuario no supera la verificación

**4. Pantallas de pago y transferencia**
Las pantallas donde el usuario confirma que va a mover dinero son las de mayor estrés en toda la app:
- El diseño de la pantalla de confirmación de pago: qué información mostrar, en qué jerarquía y cómo hacer que el usuario confirme con confianza y no con miedo
- Los patrones de diseño que reducen los errores en la introducción de cantidades e IBANs
- La pantalla de éxito del pago: cómo confirmar que el dinero se ha movido de manera que el usuario sienta alivio y confianza
- Los estados de error en pagos: cómo comunicar que el pago ha fallado sin que el usuario entre en pánico

**5. Accesibilidad en diseño financiero**
- Los requisitos de accesibilidad específicos para apps financieras: contraste mínimo en cifras, tamaño de fuente en importes, alternativas de autenticación biométrica
- Diseño para usuarios mayores: las adaptaciones que hacen que una app financiera sea usable para personas de 60+
- Modo oscuro en apps financieras: los retos específicos de diseñar cifras y estados en dark mode

**6. Patrones de diseño de seguridad percibida**
- Los badges y sellos de seguridad que generan confianza real vs. los que parecen decorativos
- Cómo comunicar el cifrado y la protección de datos de manera comprensible para el usuario no técnico
- La autenticación biométrica: diseño de los flujos de Face ID y Touch ID en contexto financiero
- Las alertas de seguridad: cómo notificar accesos o movimientos sospechosos sin generar pánico innecesario

**7. Design system para productos financieros**
- Los componentes de un design system financiero: el token de color para estados, el componente de cantidad, el componente de IBAN, la tarjeta de transacción
- Cómo documentar las decisiones de diseño financiero para que el equipo de desarrollo las implemente sin ambigüedad
- Las librerías de componentes de referencia para fintech: Carbon (IBM), Material Finance, componentes de diseño de Monzo y Revolut

**8. Métricas de diseño en apps financieras**
Los indicadores que miden si el diseño está generando confianza y conversión: tasa de completación del onboarding por paso, abandono en pantalla de confirmación de pago, NPS específico de la experiencia de pago, heatmaps en las pantallas críticas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Guía de diseño UX/UI para apps financieras centrada en la confianza del usuario, el onboarding KYC y las pantallas de pago que minimizan el abandono.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Ventas de productos financieros',
                'description'       => 'El compliance de la venta en servicios financieros: lo que puedes y no puedes decir, los requisitos de idoneidad y la venta consultiva que cumple la regulación y cierra.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en venta consultiva de servicios financieros con conocimiento profundo de la regulación MiFID II, CNMV y los requisitos de compliance en la comercialización de productos financieros. Quiero diseñar un proceso de ventas que cumpla con toda la regulación, construya confianza y cierre negocios de manera ética y efectiva.

Mi contexto:
- Tipo de producto financiero que vendo: [fondos de inversión, seguros de vida/ahorro, planes de pensiones, productos estructurados, crédito, leasing...]
- Perfil de cliente: [minorista, profesional, contraparte elegible]
- Canal de venta: [presencial, telefónico, digital, híbrido]
- Organización: [banca, aseguradora, EAF, gestora, broker, fintech]

Desarrolla:

**1. El marco regulatorio de la venta de productos financieros**
Explica de forma práctica los requisitos que impone MiFID II en el proceso de venta a clientes minoristas: la evaluación de idoneidad (para productos de inversión con asesoramiento) y la evaluación de conveniencia (para venta sin asesoramiento). Qué preguntas debes hacer obligatoriamente, cómo documentar la evaluación y qué productos no puedes ofrecer a un cliente aunque él los pida.

**2. La comunicación de riesgos que no espanta al cliente**
La regulación obliga a comunicar los riesgos del producto, pero una comunicación mal hecha mata la venta sin informar realmente al cliente:
- Cómo presentar los riesgos de manera comprensible y honesta que no sea un listado de letra pequeña
- El lenguaje que la CNMV y el Banco de España consideran claro y no engañoso
- Cómo hablar de rentabilidades pasadas sin crear expectativas ilegales sobre rentabilidades futuras
- Los términos y frases que están prohibidos o que generan sanciones: "garantizado", "sin riesgo", "rentabilidad asegurada"

**3. La venta consultiva dentro del marco regulatorio**
- El proceso de discovery para productos financieros: las preguntas que debes hacer para entender el perfil del cliente antes de recomendar nada
- Cómo construir la propuesta financiera personalizada: qué incluir, qué justificar y cómo presentarla para que el cliente la entienda
- La diferencia entre asesoramiento (implica idoneidad) y comercialización (implica conveniencia): cuándo estás haciendo uno u otro aunque no lo parezca
- Cómo manejar el cliente que quiere un producto que no es idóneo para él: los pasos legales y éticos

**4. Objeciones específicas en la venta financiera**
Para cada objeción típica, da la respuesta que resuelve la duda del cliente y cumple la regulación:
- "¿Y si pierdo dinero?"
- "¿Esto está garantizado por el Estado?"
- "¿Puedo recuperar mi dinero cuando quiera?"
- "¿Cuánto me cobráis a mí y cuánto cobráis vosotros de comisión?"
- "¿No es lo mismo que lo que me ofrecen en el banco por menos dinero?"

**5. Documentación de la venta**
- Los documentos que debes entregar al cliente antes de la venta: KID (Key Information Document), folleto, DFI (Documento de Datos Fundamentales para el Inversor)
- Cómo explicar estos documentos al cliente de manera que los entienda y no los vea como papeleo
- La firma y el registro: qué debes guardar y durante cuánto tiempo
- El proceso de reclamación del cliente: cómo gestionar una reclamación de manera que no derive en expediente sancionador

**6. Venta digital y regulación**
- Los requisitos adicionales de la venta de productos financieros por canales digitales
- Cómo implementar el test de idoneidad o conveniencia en un flujo digital sin que el usuario lo abandone
- La firma digital de contratos financieros: los requisitos de la firma electrónica en productos regulados

**7. Ética en la venta financiera más allá del compliance**
- La diferencia entre lo que es legal y lo que es ético en la venta de productos financieros: el espacio gris
- Cómo mantener la cartera de clientes a largo plazo vendiendo lo que realmente necesitan
- El vendedor financiero que sus clientes recomiendan vs. el que genera reclamaciones

**8. Plan de desarrollo de competencias**
Las habilidades técnicas y comerciales que un vendedor de productos financieros debe desarrollar en los próximos 12 meses para vender más, mejor y con menos riesgo regulatorio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Marco completo de venta consultiva de productos financieros que cumple MiFID II y la regulación española, con manejo de objeciones y documentación de la venta.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Neobancos y banca digital',
                'description'       => 'Las decisiones de producto que construyen un neobanco: licencias, BaaS, los módulos que debes construir vs. comprar y las métricas que definen el éxito.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en producto para servicios financieros digitales con experiencia en el lanzamiento y crecimiento de neobancos en Europa. Estoy construyendo o planificando un neobanco o un producto de banca digital y necesito entender las decisiones estratégicas de producto, las opciones de infraestructura y las métricas que me dirán si estoy en el camino correcto.

Mi contexto:
- Estadio del proyecto: [idea, MVP, lanzado con primeros usuarios, en crecimiento]
- Segmento objetivo: [consumidores particulares, autónomos, pymes, un nicho específico]
- Geografía: [España, Europa, LATAM]
- Propuesta de valor diferencial: [describe qué hace diferente tu neobanco o producto bancario]

Desarrolla:

**1. El mapa del ecosistema de la banca digital**
Clasifica los tipos de productos de banca digital y explica cómo se diferencian: neobanco con licencia propia, challenger bank sobre licencia de EMI, wallet de pagos, cuenta de dinero electrónico, cuenta de pago vinculada a un banco socio. Las ventajas y limitaciones de cada modelo en términos de lo que puedes ofrecer al cliente y lo que el regulador te exige.

**2. El camino de las licencias**
- EMI (Electronic Money Institution): qué permite, qué no, cuánto tiempo y dinero cuesta obtenerla en España/Europa
- Licencia bancaria plena: los requisitos de capital, los tiempos reales y si tiene sentido buscarla desde el inicio
- Licencia de pago (Payment Institution): diferencias con la EMI y cuándo es la opción correcta
- La ruta alternativa: asociarte con un banco licenciado como programa manager
- Los sandbox regulatorios en España (CNMV, Banco de España) y cómo usarlos para probar el modelo antes de la licencia completa

**3. Banking as a Service: construir vs. comprar**
- Los proveedores de BaaS relevantes en Europa: Solaris, Railsr (Railsbank), Treezor, Modulr, Griffin, Clearjunction
- Qué módulos tiene sentido comprar a un BaaS y cuáles construir tú mismo según el estadio del negocio
- Los trade-offs de depender de un BaaS: velocidad vs. control, coste variable vs. margen
- Cómo evaluar un proveedor de BaaS: criterios de selección más allá del precio

**4. El stack de producto de un neobanco**
Define los módulos del producto que componen un neobanco mínimo viable:
- Core banking y contabilidad de cuentas
- Onboarding y KYC
- Tarjetas (débito, crédito, virtual): emisión, procesamiento, gestión de límites
- Transferencias SEPA, SEPA Instant, SWIFT
- Notificaciones y experiencia de la app
- Atención al cliente y gestión de disputas
Para cada módulo: construir vs. comprar, proveedores recomendados y el criterio de decisión.

**5. Monetización de un neobanco**
- Los modelos de ingresos que funcionan en banca digital: interchange, suscripción premium, crédito, FX, marketplace de productos financieros
- El problema del free tier y cuándo es una estrategia de crecimiento vs. una trampa de unidad económica negativa
- Cómo diseñar el modelo de monetización desde el producto: las funcionalidades que justifican la suscripción y las que deben ser gratuitas

**6. Métricas que definen el éxito de un neobanco**
- Las métricas de activación: qué significa que un usuario está realmente activo en un neobanco (no solo registrado)
- LTV de un usuario bancario: cómo calcularlo y los factores que lo determinan
- CAC vs. LTV en banca digital: los ratios que los inversores miran y los que definen la viabilidad del negocio
- Churn bancario: cómo medirlo correctamente y los factores predictivos
- Engagement metrics específicas de banca: frecuencia de login, número de transacciones, saldo medio mantenido

**7. Los errores más comunes en el lanzamiento de un neobanco**
Analiza los fracasos conocidos de neobancos europeos (Xinja, Dozens, Simple) y los problemas comunes que llevan a neobancos prometedores a no escalar: subestimar el coste de adquisición, el fraude en el onboarding, la mala gestión del capital regulatorio, la falta de un modelo de monetización claro.

**8. Hoja de ruta de producto para los próximos 18 meses**
Las decisiones de producto críticas que debo tomar en los próximos 18 meses, ordenadas por impacto en la viabilidad del negocio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Guía estratégica de producto para fundadores y PMs que están construyendo un neobanco o servicio de banca digital en Europa, desde las licencias hasta las métricas de éxito.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Talento en fintech',
                'description'       => 'El sector más competitivo en captación de ingenieros y diseñadores: cómo una fintech compite por el talento técnico contra los salarios de Google y la cultura de los unicornios.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en gestión de talento para empresas de tecnología financiera con experiencia en competir por perfiles técnicos en mercados de alta demanda. Necesito diseñar una estrategia de captación y retención de talento técnico para mi fintech que me permita competir contra empresas con presupuestos mucho mayores.

Mi contexto:
- Tamaño de la empresa: [número de empleados, fase de crecimiento]
- Perfiles técnicos que necesito: [ingenieros de backend, frontend, datos, seguridad, mobile, QA...]
- Ubicación: [Madrid, Barcelona, remoto Europa, híbrido]
- Presupuesto salarial: [competitivo pero no top 10%, medio-alto, limitado]
- Propuesta de valor como empleador: [describe qué tienes para ofrecer más allá del salario]

Desarrolla:

**1. El mapa de competencia por talento técnico en fintech**
Explica el ecosistema de competencia por perfiles técnicos en el sector financiero digital: quiénes son los competidores más difíciles (FAANG, unicornios, grandes bancos con programas de transformación digital), cuáles son los perfiles más escasos y mejor pagados en fintech y cuáles son los que tienen mayor oferta relativa. Incluye los rangos salariales de referencia para los perfiles más demandados en España y Europa.

**2. La propuesta de valor del empleado fintech**
Una fintech no puede competir solo en salario, así que debe ganar en otras dimensiones. Define la Employee Value Proposition (EVP) de una fintech:
- El impacto y la misión: cómo articular el propósito de un producto financiero de manera que sea motivador para ingenieros
- El aprendizaje y el crecimiento: qué puede aprender un engineer en una fintech que no puede aprender en una empresa de otro sector
- La autonomía y el ownership: cómo describir y garantizar la autonomía técnica que los mejores ingenieros valoran
- El equity: cómo estructurar y comunicar el programa de opciones para que sea creíble y atractivo
- La cultura técnica: qué señales miran los ingenieros buenos para evaluar si la cultura técnica de una empresa vale la pena

**3. Procesos de selección que atraen talento senior**
- Los errores en los procesos de selección que alejan a los mejores ingenieros: procesos largos, pruebas técnicas desproporcionadas, entrevistas de trivia
- El proceso de selección de referencia para perfiles técnicos senior en fintech: cuántas fases, qué evaluar en cada una y cómo hacerlo respetando el tiempo del candidato
- Cómo hacer que el proceso de selección sea en sí mismo una experiencia que comunique cultura técnica

**4. Employer branding técnico para fintechs**
- Cómo construir reputación como empleador entre ingenieros sin tener el presupuesto de las grandes empresas
- El engineering blog como herramienta de atracción de talento: qué publicar y con qué frecuencia
- La presencia en conferencias técnicas (Commit Conf, T3chFest, meetups de fintech) como canal de recruiting
- Open source como employer branding: cuándo tiene sentido y cómo gestionarlo

**5. Retención de talento técnico en entornos de alta rotación**
- Las causas principales de rotación en equipos técnicos de fintech: deuda técnica acumulada, falta de crecimiento, mejor oferta económica, problemas de gestión
- Los programas de retención que funcionan y los que son percibidos como manipulación: la diferencia
- Cómo hacer crecer a los ingenieros senior dentro de la empresa cuando no hay jerarquía que escalar
- La gestión del talento en equipos distribuidos y remotos: los retos específicos de la retención en remoto

**6. Contratación internacional y movilidad**
- Las ventajas de contratar ingenieros en otros países europeos o LATAM para una fintech española
- Los requisitos legales y de compliance de la contratación internacional en el sector financiero regulado
- Las diferencias culturales y de expectativas entre ingenieros de diferentes geografías en el contexto fintech

**7. Gestión del talento regulado**
- Los perfiles que requieren validación o aprobación del regulador (directivos de entidades de pago, responsables de cumplimiento)
- Cómo gestionar el proceso de registro de altos cargos ante el Banco de España o la CNMV
- La certificación MiFID para roles de asesoramiento y venta: cómo integrarla en el plan de desarrollo del equipo

**8. Plan de talento para los próximos 12 meses**
Las iniciativas de captación y retención que debo poner en marcha, con presupuesto estimado, responsable y métricas de éxito.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Estrategia de captación y retención de talento técnico para fintechs que compiten contra grandes tecnológicas con presupuestos limitados pero una propuesta de valor diferencial.',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Gestión de la tesorería en startups',
                'description'       => 'Cash management, inversión del excedente, cobertura de divisa y las decisiones de tesorería que separan los fundadores financieramente sofisticados del resto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CFO fractional o director financiero con experiencia en gestión de tesorería para startups en fase de crecimiento. Necesito estructurar la gestión del efectivo de mi empresa de forma profesional: saber dónde tenemos el dinero, cómo protegerlo, cómo hacer que rinda algo mientras no lo necesito y cómo gestionar los riesgos de divisa y liquidez.

Mi contexto:
- Fase de la empresa: [seed, serie A, serie B, bootstrapped con ingresos]
- Saldo de caja actual aproximado: [rango en euros o USD]
- Runway actual: [meses]
- Divisas con las que operas: [EUR, USD, GBP, otras]
- Estructura societaria: [España, holding europeo, internacional]

Desarrolla:

**1. Por qué la gestión de tesorería importa más de lo que creen la mayoría de fundadores**
Explica con ejemplos reales cómo la mala gestión de tesorería ha llevado a empresas con buenos ingresos a una crisis de liquidez, cuánto dinero dejan de ganar las startups que mantienen el efectivo en una cuenta corriente y los riesgos de concentración bancaria que la mayoría de fundadores no considera. Incluye el caso de SVB como referencia sobre riesgo de concentración bancaria.

**2. La estructura bancaria óptima para una startup**
- Cuántas cuentas bancarias debe tener una startup y en qué entidades
- La separación entre cuenta operativa, reserva estratégica y cuenta de inversión
- Los bancos y neobancos más adecuados para startups en España y Europa: Santander, BBVA, Sabadell, Revolut Business, Wise, Penta
- Los límites de garantía de depósitos (FGD en España, DGS en Europa) y cómo gestionarlos cuando el saldo supera los 100.000 euros

**3. Inversión del excedente de tesorería**
- Las opciones de inversión para el excedente de tesorería de una startup: fondos monetarios, letras del Tesoro, depósitos a plazo, fondos de renta fija a corto plazo
- El criterio de elección: liquidez vs. rentabilidad vs. riesgo para cada tramo de efectivo
- Cómo estructurar el efectivo en tres tramos: operativo (30 días), reserva (3-6 meses) y excedente a invertir
- Los riesgos que debes evitar: invertir en activos ilíquidos, mezclar el efectivo operativo con inversiones, usar derivados para rendir el excedente

**4. Gestión del riesgo de divisa**
- Cuándo el riesgo de divisa es material para una startup y cuándo es ruido
- Los instrumentos básicos de cobertura de divisa: forward de divisas, opción de divisa, cuentas multidivisa
- Cómo hacer una cobertura simple de los cobros en USD si tu estructura de costes es en EUR
- Los proveedores de cobertura de divisa para empresas no financieras: Ebury, Kantox, Monex, los bancos tradicionales
- El coste de cobertura vs. el riesgo de no cubrirse: cómo decidir

**5. Previsión de tesorería**
- El modelo de cash flow forecast semanal y mensual que toda startup debe tener
- Las variables clave a modelar: cobros de clientes (días de cobro), pagos a proveedores, nóminas, impuestos, inversiones planificadas
- Cómo modelar escenarios: base, optimista y pesimista para el runway
- Las señales de alarma que el modelo de tesorería debe detectar con suficiente antelación

**6. Relación bancaria y líneas de crédito**
- Cómo construir una relación bancaria que te dé acceso a financiación cuando la necesites
- Los productos de financiación a corto plazo para startups: línea de crédito, descuento comercial, confirming, factoring
- Cuándo pedir una línea de crédito: el momento óptimo (cuando no la necesitas, no cuando la necesitas)
- La negociación de condiciones bancarias: tipos de interés, comisiones y garantías

**7. Controles internos y prevención del fraude en tesorería**
- Los controles básicos que toda startup debe tener para proteger el efectivo: doble firma en transferencias, separación de funciones, alertas de movimientos
- Los fraudes más comunes en startups: CEO fraud, fraude del proveedor falso, manipulación de IBAN
- Cómo implementar controles sin crear burocracia que paralice la operación

**8. Dashboard de tesorería**
Define el dashboard de KPIs de tesorería que el CFO o fundador debe revisar semanalmente: saldo por cuenta, runway actualizado, previsión de cobros y pagos a 30 y 90 días, exposición en divisa y retorno del excedente invertido.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Guía de gestión de tesorería para startups y scale-ups: estructura bancaria, inversión del excedente, cobertura de divisa y previsión de cash flow con runway actualizado.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Regulación fintech en España y Europa',
                'description'       => 'EMD2, PSD2, MiCA, DORA: el mapa regulatorio que todo fundador de fintech debe conocer antes de lanzar y las licencias que necesita en función del producto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en regulación de servicios financieros digitales en España y la Unión Europea. Soy fundador de una fintech o trabajo en el equipo legal de una y necesito entender el mapa regulatorio completo para mi producto antes de lanzar o escalar en Europa.

Mi producto:
- Tipo de producto fintech: [pagos, inversión, crédito, cripto/DeFi, open banking, seguros, gestión patrimonial, scoring crediticio, BNPL...]
- Mercados objetivo: [España, Francia, Alemania, UK, LATAM...]
- Modelo de negocio: [B2C, B2B, marketplace]
- Fase: [pre-lanzamiento, lanzado en un mercado, escalando]

Desarrolla:

**1. El mapa regulatorio del fintech europeo**
Dibuja el mapa completo de las regulaciones que afectan a los productos financieros digitales en la UE, explicando a quién afecta cada una:
- PSD2 / PSD3 (próximamente): servicios de pago, open banking, SCA
- EMD2: dinero electrónico
- MiCA (Markets in Crypto-Assets): activos digitales y cripto
- DORA (Digital Operational Resilience Act): resiliencia operativa digital
- MiFID II / IDD: inversión y seguros
- GDPR: protección de datos en servicios financieros
- AML6 (Anti-Money Laundering): prevención de blanqueo de capitales

**2. Las licencias que puede necesitar tu fintech**
Para cada tipo de licencia, explica qué te permite hacer, qué organismo la otorga, el capital mínimo requerido, el tiempo de tramitación y los requisitos operativos:
- Entidad de Dinero Electrónico (EDE): Banco de España
- Entidad de Pago (EP): Banco de España
- Empresa de Servicios de Inversión (ESI): CNMV
- Mediador de seguros: DGSFP
- Pasaporte europeo: cómo usar una licencia obtenida en un país para operar en toda la UE
- Sandbox regulatorio de España: las condiciones de acceso y qué te permite probar

**3. El proceso de obtención de licencia en España**
- Los pasos del proceso desde la presentación de la solicitud hasta la autorización
- Los documentos que el Banco de España o la CNMV exigen: plan de negocio, memoria de solvencia, expedientes de altos cargos, manuales de control interno, política AML/KYC
- Los plazos reales (no los teóricos) y cómo prepararse para un proceso largo
- Los errores más comunes que alargan el proceso o llevan a denegaciones
- El coste total del proceso de licencia incluyendo honorarios legales, capital desembolsado y costes operativos

**4. MiCA: regulación de criptoactivos**
- Qué clasifica MiCA como activo regulado y qué queda fuera
- Los tres tipos de tokens regulados: tokens referenciados a activos (ART), tokens de dinero electrónico (EMT) y otros tokens de utilidad
- Las categorías de CASP (Crypto-Asset Service Provider) y qué licencia necesita cada tipo de proveedor
- Los plazos de implementación de MiCA y las disposiciones transitorias para empresas ya operativas

**5. DORA: resiliencia operativa digital**
- A quién aplica DORA: entidades financieras y sus proveedores críticos de tecnología
- Los requisitos técnicos y organizativos: gestión del riesgo ICT, tests de resiliencia, gestión de incidentes, supervisión de terceros
- Cuándo entra en vigor y cuál es el plan de adaptación que necesita una fintech
- Los proveedores cloud y SaaS que necesitan certificación DORA y cómo afecta a la estrategia de infraestructura

**6. AML y KYC en fintech**
- Los requisitos de debida diligencia del cliente (CDD) y debida diligencia reforzada (EDD) que impone la 6AMLD
- Cómo diseñar el proceso de KYC para cumplir la regulación y maximizar la conversión de onboarding
- Los sistemas de monitorización de transacciones y la obligación de reporte al SEPBLAC
- Los proveedores de KYC y AML más usados en fintechs europeas: Onfido, Sumsub, Comply Advantage, Sardine

**7. Pasaporte europeo y expansión internacional**
- Cómo funciona el pasaporte de servicios financieros para operar en la UE desde una licencia española
- Las notificaciones al país de acogida: qué debes comunicar y cuándo
- Las diferencias entre libre prestación de servicios y establecimiento de sucursal
- Los países de la UE preferidos para la obtención de licencia por rapidez y eficiencia regulatoria: Lituania, Irlanda, Países Bajos

**8. Hoja de ruta de compliance para los próximos 18 meses**
Las acciones regulatorias que debo priorizar, con fechas clave de DORA y MiCA, y el equipo legal y de compliance mínimo que necesito en cada fase del crecimiento.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Mapa regulatorio completo para fintechs en España y Europa: licencias, requisitos de capital, plazos de tramitación y adaptación a MiCA y DORA.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Onboarding financiero y KYC',
                'description'       => 'El onboarding de usuarios en productos financieros tiene los mayores requisitos de verificación: diseña el proceso para maximizar la conversión dentro de los límites regulatorios.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en optimización de onboarding para productos financieros con experiencia tanto en cumplimiento normativo KYC/AML como en diseño de experiencia de usuario y mejora de tasas de conversión. Quiero diseñar o mejorar el proceso de onboarding de mi producto financiero para cumplir con toda la regulación y al mismo tiempo maximizar la conversión de usuarios que inician el registro.

Mi producto:
- Tipo de producto: [neobanco, app de inversión, plataforma de pagos, crédito digital, cripto exchange...]
- Regulación aplicable: [EMD2, PSD2, MiFID II, MiCA...]
- Tasa de conversión actual (si la tienes): [% de usuarios que completan el registro]
- Principal punto de abandono: [¿dónde abandonan los usuarios?]
- Proveedor de KYC actual (si lo hay): [Onfido, Sumsub, otro, ninguno]

Desarrolla:

**1. Los requisitos de KYC regulatorios en productos financieros**
Explica los requisitos de Conocimiento del Cliente (KYC) y Debida Diligencia del Cliente (CDD) que impone la normativa AML española y europea para distintos tipos de productos financieros:
- Qué datos de identidad son obligatorios recoger y verificar
- La diferencia entre verificación simplificada, estándar y reforzada (EDD): cuándo aplica cada una
- Los umbrales de transacción que activan requisitos adicionales de verificación
- Qué documentos son válidos para la verificación de identidad en España y cómo gestionarlos para ciudadanos extranjeros

**2. El mapa del onboarding financiero**
Define el flujo completo del onboarding para un producto financiero regulado, pantalla por pantalla:
- Pantalla de bienvenida y propuesta de valor: qué comunicar antes de pedir nada
- Registro de email y teléfono: verificación OTP y consideraciones de seguridad
- Datos personales: mínimo requerido en este punto para no abrumar
- Verificación de identidad (KYC): captura de documento y selfie
- Verificación de dirección (cuando aplica)
- Preguntas de perfil de riesgo o idoneidad (cuando aplica)
- Vinculación de cuenta bancaria o método de pago
- Activación y primer uso

**3. Optimización de la tasa de conversión en KYC**
La verificación de identidad es el mayor punto de abandono en el onboarding financiero. Para cada técnica de optimización, explica el impacto esperado y cómo implementarla:
- El progressive disclosure: pedir solo lo necesario en cada momento
- La gestión de expectativas: comunicar el proceso antes de que empiece
- La comunicación del estado de verificación en tiempo real
- El recovery de usuarios que abandonan: email/SMS de rescate en cada paso
- El soporte durante el proceso de KYC: chat en vivo, vídeo-atención, FAQs contextuales
- Las optimizaciones técnicas de captura: guías de foto, detección de calidad en tiempo real, soporte de múltiples tipos de documento

**4. Selección y evaluación de proveedores de KYC**
- Los criterios para elegir un proveedor de eKYC: tasa de aprobación automática, tasa de falsos positivos, cobertura de documentos y países, tiempo de respuesta, precio por verificación
- Comparativa de los principales proveedores: Onfido, Sumsub, Jumio, Veriff, IDnow, iDenfy
- Cómo negociar con proveedores de KYC: estructura de precios, SLAs, integración técnica
- Cuándo tiene sentido construir capacidad KYC propia vs. siempre externalizar

**5. Verificación de clientes de alto riesgo**
- Cómo identificar clientes que requieren Debida Diligencia Reforzada (EDD): PEPs (Personas Expuestas Políticamente), países de alto riesgo, volúmenes de transacción elevados
- El proceso de EDD: documentación adicional, aprobación manual, monitorización continua
- Cómo gestionar el EDD sin que genere una experiencia de usuario terrible para los clientes legítimos

**6. Monitorización de transacciones y alertas AML**
- Los requisitos de monitorización continua de transacciones después del onboarding
- Los sistemas de reglas y los modelos de ML que detectan transacciones sospechosas
- El proceso de reporte al SEPBLAC: cuándo, cómo y qué consecuencias tiene no hacerlo
- Los proveedores de transaction monitoring: Comply Advantage, Sardine, Featurespace, Feedzai

**7. Métricas del onboarding financiero**
Define el dashboard de métricas que debes monitorizar:
- Tasa de conversión global y por paso
- Tasa de aprobación automática del KYC
- Tasa de falsos positivos (usuarios legítimos rechazados)
- Tiempo medio de completación del onboarding
- CAC impactado por el abandono en el onboarding

**8. Plan de mejora de la conversión en 90 días**
Las iniciativas concretas, con impacto estimado en la tasa de conversión, que puedo implementar en los próximos tres meses para mejorar el onboarding sin comprometer el cumplimiento regulatorio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseño y optimización del onboarding KYC para productos financieros: maximizar la conversión cumpliendo los requisitos regulatorios de verificación de identidad y AML.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Consultor de fintech freelance',
                'description'       => 'El nicho del consultor independiente en servicios financieros digitales: los proyectos más demandados, las certificaciones que abren puertas y las tarifas del sector.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en desarrollo de negocio para consultores independientes especializados en el sector fintech y servicios financieros digitales. Quiero construir o hacer crecer mi práctica como consultor freelance en fintech: entender qué proyectos tienen demanda, cómo posicionarme, qué tarifas puedo cobrar y cómo conseguir mis primeros clientes o pasar al siguiente nivel.

Mi perfil:
- Experiencia previa: [años en fintech, banca, regulación, producto, tecnología...]
- Especialización actual o deseada: [producto, estrategia, regulación/compliance, tecnología, marketing, operaciones...]
- Estado actual: [quiero empezar como freelance, ya tengo algunos proyectos, quiero escalar]
- Geografía de trabajo: [España, Europa, remoto global]

Desarrolla:

**1. El mercado de la consultoría freelance en fintech**
Describe el mercado actual de consultoría independiente en servicios financieros digitales en España y Europa:
- Los tipos de proyectos que contratan fintechs, bancos en transformación y fondos de inversión a consultores freelance
- El perfil de consultor más demandado en el sector: qué combinación de experiencia técnica, de negocio y regulatoria tiene mayor demanda
- Los clientes más activos en la contratación de consultores externos: fintechs en serie A/B, grandes bancos con labs de innovación, fondos de PE/VC, empresas de otros sectores que quieren entender el fintech

**2. Las especialidades de consultor fintech con mayor demanda**
Para cada especialidad, explica la demanda relativa, el perfil de proyectos típico y el rango de tarifas:
- Consultor de producto fintech: diseño de roadmap, decisiones de BaaS vs. build, monetización
- Consultor regulatorio y compliance: licencias, PSD2, MiCA, DORA, AML/KYC
- Consultor de estrategia fintech: due diligence para fondos, competitive intelligence, planes de expansión
- Consultor de open banking: integraciones, estrategia de datos, partnerships bancarios
- Fractional CFO para fintechs: gestión financiera y preparación de rondas
- Consultor de marketing y crecimiento fintech: adquisición de usuarios en servicios financieros

**3. Posicionamiento y propuesta de valor**
- Cómo definir la especialización dentro del fintech que te diferencia de los consultores generalistas y de las grandes firmas
- La propuesta de valor del consultor freelance vs. las Big Four y las consultoras de estrategia: por qué eligen a alguien independiente
- Los mensajes que resuenan con los founders de fintech y con los directores de banca digital en grandes entidades
- Tu unique selling proposition como consultor freelance: experiencia directa, velocidad, sin overhead, skin in the game

**4. Tarifas y modelos de engagement**
- Los rangos de tarifa por día y por hora para consultores freelance de fintech en España y Europa según la especialidad y el nivel de experiencia
- Los modelos de engagement más comunes: proyecto cerrado, retainer mensual, fractional (días por semana), advisory (equity + cash)
- Cuándo ofrecer cada modelo y cuál es más rentable según el tipo de proyecto
- Cómo estructurar un presupuesto de proyecto para que el cliente diga sí y tú seas rentable

**5. Captación de primeros clientes y crecimiento de la cartera**
- Las fuentes de proyectos más efectivas para un consultor fintech: red de contactos, LinkedIn, headhunters especializados en interim y fractional, plataformas como Toptal, Catalant, Comatch
- Cómo conseguir los primeros proyectos cuando no tienes un portfolio de consultoría (pero sí tienes experiencia sectorial)
- El papel de las referencias en el negocio de consultoría fintech y cómo cultivarlas
- Cómo pasar de proyectos puntuales a relaciones de retainer que den estabilidad de ingresos

**6. Certificaciones y formación que abren puertas**
- Las certificaciones que los clientes de fintech valoran: CAMS (anti-money laundering), CISI, CFA, certificaciones regulatorias de la CNMV, certificaciones de proveedores (AWS, GCP para arquitectura fintech)
- Cuáles merece la pena obtener según la especialización y cuáles son solo ruido
- Los programas de formación específicos de fintech que construyen red además de conocimiento

**7. Estructura del negocio freelance en fintech**
- Sociedad limitada vs. autónomo para un consultor de fintech que factura por encima de 60.000 euros anuales
- La deducibilidad de gastos en la consultoría fintech: cursos, subscripciones, viajes a conferencias
- Los seguros que necesita un consultor independiente que trabaja con entidades financieras: responsabilidad civil profesional y sus coberturas específicas

**8. Plan de desarrollo de negocio en 12 meses**
Las iniciativas concretas mes a mes para construir una cartera de clientes estable como consultor fintech, con los ingresos objetivo en cada trimestre y los hitos que confirman que el negocio está en el camino correcto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Guía completa para construir una práctica de consultoría freelance especializada en fintech: especialidades con mayor demanda, tarifas de mercado y estrategia de captación de clientes.',
                'vote_score'        => 37,
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
