<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills288Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Compliance en marketing: publicidad, datos y las reglas que no se pueden ignorar',
                'description'      => 'Conoce el marco legal del marketing digital: RGPD, normativa publicitaria, email marketing y las prácticas que pueden generar sanciones o dañar la reputación de marca.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de compliance en marketing digital con experiencia en el asesoramiento a equipos de marketing sobre las implicaciones legales de sus estrategias, campañas y herramientas en el entorno europeo y español.

Soy responsable de marketing o director de marketing y necesito entender qué obligaciones legales afectan a las actividades que realiza mi equipo cada día: campañas de publicidad, captación de leads, email marketing, cookies, influencers y publicidad en redes sociales.

El tipo de empresa en la que trabajo es: [B2C, B2B, e-commerce, SaaS, medios de comunicación, etc.]
Las actividades de marketing que más realizamos son: [email marketing, paid social, SEO/contenidos, influencer marketing, lead generation, publicidad display]
Nuestras mayores incertidumbres legales son: [consentimiento de cookies, base legal para el email marketing, publicidad con influencers, retargeting]

Necesito que me expliques en detalle:

**1. RGPD y el tratamiento de datos en el marketing**
Explícame las obligaciones del RGPD que afectan directamente al departamento de marketing: la base legal necesaria para cada tipo de tratamiento (consentimiento para newsletters, interés legítimo para retargeting, ejecución de contrato para emails transaccionales), cómo obtener y documentar el consentimiento de forma válida, qué información debe contener el aviso de privacidad en los formularios de captación, cómo gestionar las solicitudes de baja y el derecho al olvido en la base de datos de marketing, y qué diferencia hay entre datos de marketing B2C (personas físicas) y B2B (contactos de empresa).

**2. Email marketing legal: consentimiento, baja y contenido**
Explícame la normativa española sobre comunicaciones comerciales por email (LSSI-CE): cuándo necesito consentimiento previo y cuándo aplica la excepción de cliente existente, qué diferencia hay entre la normativa española y la normativa de otros países europeos (doble opt-in exigido en algunos países), qué debe incluir obligatoriamente cada email comercial (identificación del remitente, mecanismo de baja claro y gratuito), qué prácticas de email marketing pueden considerarse spam según la normativa y qué sanciones puede imponer la AEPD.

**3. Cookies y el consentimiento en la web**
Detalla los requisitos legales para la gestión de cookies en una web española conforme a las guías de la AEPD: la diferencia entre cookies técnicas (no requieren consentimiento), cookies de preferencia, cookies analíticas y cookies de marketing (todas requieren consentimiento previo al depósito), cómo debe ser el banner de cookies para ser conforme (sin botón de "aceptar todo" preseleccionado sin un botón de "rechazar" equivalente), qué registro de consentimientos debo mantener, cómo afecta la DISA de Google a la analítica web y cómo configurar GA4 de forma conforme.

**4. Publicidad con influencers y contenido patrocinado**
Explícame las obligaciones legales en el marketing con influencers en España: la Ley General de Publicidad y la obligación de identificar claramente el contenido publicitario con etiquetas como #publicidad o #ad, la responsabilidad solidaria de la marca anunciante y el influencer, los requisitos de la normativa de la CNMC para los influencers con más de 100.000 seguidores, cómo debe ser el contrato con el influencer para documentar las obligaciones de disclosure, y cómo gestionar el riesgo de que el influencer publique contenido que viola la normativa sin haberlo acordado.

**5. Publicidad comparativa, reclamaciones y competencia desleal**
Explícame las reglas de la publicidad comparativa en España (Ley de Competencia Desleal): cuándo está permitido comparar con la competencia (comparación objetiva, basada en características verificables, no engañosa), qué prácticas de marketing se consideran publicidad engañosa o desleal (afirmaciones sin base, comparaciones falsas, ofertas engañosas de precio), cuáles son las consecuencias de una reclamación de Autocontrol o de una demanda por competencia desleal, y cómo revisar el contenido publicitario antes de publicarlo para minimizar el riesgo legal.

**6. Compliance de marketing: cómo construir el proceso interno**
Dame un framework para implementar un proceso de revisión de compliance en el departamento de marketing: quién debe revisar qué (el equipo legal debe revisar campañas de lanzamiento importantes, el DPO debe revisar los nuevos tratamientos de datos, marketing puede autoevaluar con una checklist para campañas menores), cómo documentar las decisiones de compliance para demostrar el principio de responsabilidad proactiva del RGPD, cómo formar al equipo de marketing para que entienda las reglas básicas sin necesitar al abogado para cada campaña.

Dame una checklist de compliance de 20 puntos que el equipo de marketing puede usar antes de lanzar cualquier campaña o iniciativa nueva.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'         => 'Cumplir con el marco legal del marketing digital: RGPD, publicidad y cookies',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Security compliance: GDPR, SOC2 y las certificaciones que abren puertas enterprise',
                'description'      => 'Entiende los marcos de seguridad y cumplimiento normativo más relevantes para productos de software, cómo implementarlos y cómo usarlos como ventaja competitiva en ventas enterprise.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de seguridad y compliance con experiencia en la implementación de marcos de certificación como SOC 2, ISO 27001 y el cumplimiento del RGPD en empresas de software SaaS que venden a clientes enterprise.

Soy desarrollador, CTO o responsable de seguridad de una empresa de software y necesito entender qué certificaciones y marcos de cumplimiento son relevantes para nosotros, cómo implementarlos de forma eficiente y cómo usarlos para desbloquear ventas a clientes enterprise que los exigen en sus procesos de homologación de proveedores.

Nuestro producto es: [describe el software, si procesa datos personales, si es SaaS multi-tenant o single-tenant, qué tipos de clientes tiene]
Nuestra madurez de seguridad actual es: [describe si tienen políticas documentadas, controles técnicos implementados, auditorías previas]
El objetivo prioritario es: [conseguir SOC 2 Type II, certificar ISO 27001, cumplir RGPD para clientes enterprise europeos, pasar los cuestionarios de seguridad de clientes grandes]

Necesito que me expliques:

**1. SOC 2: qué es, qué cubre y cuándo necesito Type I vs. Type II**
Explícame qué es SOC 2 y los cinco Trust Service Criteria que puede cubrir (Security obligatorio, más Availability, Confidentiality, Processing Integrity y Privacy opcionales). Detalla la diferencia entre un informe Type I (diseño de controles en un momento puntual) y un Type II (efectividad operativa durante un período de 6-12 meses), cuándo necesito cada uno para satisfacer las exigencias de mis clientes enterprise, cuánto tiempo lleva preparar cada uno desde cero, y cuál es el coste aproximado del proceso de auditoría con una firma auditora acreditada.

**2. Los controles técnicos que un SaaS debe implementar para SOC 2**
Detalla los controles técnicos más comunes que evalúa una auditoría SOC 2 en un SaaS: control de acceso con principio de mínimo privilegio, autenticación multi-factor para todos los accesos a sistemas de producción, cifrado en tránsito y en reposo, gestión de vulnerabilidades y parches, monitorización y logging de eventos de seguridad, plan de respuesta a incidentes, política de backup y recovery, gestión del ciclo de vida de los accesos cuando un empleado abandona la empresa. Para cada control, explícame qué evidencia necesito recopilar para la auditoría.

**3. RGPD: cumplimiento técnico desde el desarrollo**
Explícame las obligaciones técnicas del RGPD que recaen sobre el equipo de desarrollo: privacy by design y by default como principios que deben guiar las decisiones de arquitectura, pseudonimización y cifrado como medidas de seguridad apropiadas, registro de actividades de tratamiento (RAT) que el equipo técnico debe ayudar a completar, evaluación de impacto relativa a la protección de datos (EIPD) para funcionalidades de alto riesgo, notificación de brechas de seguridad en menos de 72 horas a la autoridad competente. Explícame cómo integrar estas obligaciones en el proceso de desarrollo sin ralentizar la entrega.

**4. Gestión de subprocesadores y cadena de suministro de software**
Explícame el concepto de subprocesador en el contexto del RGPD y SOC 2: cómo inventariar todos los terceros que procesan datos de mis clientes (cloud providers, servicios de analítica, herramientas de soporte, proveedores de email), cómo formalizar los contratos de encargado del tratamiento (DPA) con cada uno de ellos, cómo gestionar el riesgo de la cadena de suministro de software (dependencias de código abierto con vulnerabilidades, acceso de terceros a sistemas), y cómo comunicar a mis clientes enterprise qué subprocesadores uso y cómo controlo su seguridad.

**5. ISO 27001 vs. SOC 2: diferencias y cuándo elegir uno u otro**
Explícame las diferencias clave entre ISO 27001 y SOC 2: el origen geográfico de cada estándar (ISO 27001 es el más reconocido en Europa y LATAM, SOC 2 es el estándar dominante en el mercado americano), las diferencias en el proceso de certificación (ISO 27001 certifica por un organismo acreditado externo, SOC 2 audita una firma contable), la diferencia de coste y mantenimiento anual (ISO 27001 requiere auditorías de vigilancia anuales), y si tiene sentido buscar ambas certificaciones o elegir una según el mercado objetivo.

**6. Security compliance como ventaja competitiva en ventas enterprise**
Explícame cómo usar las certificaciones de seguridad para acelerar el ciclo de ventas enterprise: cómo publicar un Trust Center o Security Portal público que responda proactivamente a los cuestionarios de seguridad de los clientes, cómo usar el informe SOC 2 en el proceso de due diligence del cliente, cómo comunicar el cumplimiento en la web y en los materiales de marketing sin hacer afirmaciones exageradas, cómo reducir el tiempo de respuesta a los cuestionarios de seguridad de los clientes con una biblioteca de respuestas estandarizadas.

Dame un roadmap de 12 meses para una empresa SaaS de 20 personas que quiere conseguir SOC 2 Type II desde cero, con los hitos y recursos necesarios en cada trimestre.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 40,
                'use_case'         => 'Implementar SOC 2, RGPD e ISO 27001 para desbloquear ventas enterprise',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Privacy by design: cómo el diseñador incorpora el cumplimiento desde el principio',
                'description'      => 'Aprende a integrar la privacidad y el cumplimiento normativo en el proceso de diseño UX/UI, reduciendo riesgos legales sin sacrificar la experiencia del usuario.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en UX y privacidad con experiencia en el diseño de interfaces que cumplen con el RGPD y otras normativas de protección de datos, y que al mismo tiempo ofrecen una experiencia de usuario fluida y transparente.

Soy diseñador UX/UI y necesito entender cómo incorporar la privacidad y el cumplimiento normativo en mis diseños desde el inicio del proceso, en lugar de que el equipo legal revise el diseño una vez terminado y pida cambios costosos.

El tipo de producto que diseño es: [aplicación web, app móvil, e-commerce, plataforma SaaS, portal de salud, servicio financiero]
Los usuarios son: [consumidores particulares, profesionales, menores de edad, usuarios vulnerables]
Los mayores retos de privacidad en mis diseños son: [formularios de captación de datos, gestión de cookies, banners de consentimiento, settings de privacidad, diseño de flujos que implican datos sensibles]

Necesito que me expliques:

**1. Privacy by design: los 7 principios y cómo se traducen en decisiones de diseño**
Explícame los 7 principios de privacy by design de Ann Cavoukian y cómo se traducen en decisiones concretas de diseño de interfaz: proactivo (detectar riesgos de privacidad en la fase de discovery antes de diseñar), privacidad como configuración por defecto (los settings más restrictivos deben ser los valores por defecto, no los más permisivos), privacidad integrada en el diseño (no como add-on), funcionalidad completa (privacidad y usabilidad no son opuestos), seguridad de extremo a extremo, visibilidad y transparencia, respeto por la privacidad del usuario. Dame un ejemplo de cada principio aplicado a una pantalla concreta.

**2. Consentimiento: diseño de interfaces que informan y no manipulan**
Explícame qué hace que un diseño de consentimiento sea válido según el RGPD: consentimiento granular (una casilla por finalidad de tratamiento, no un único "acepto todo"), consentimiento activo (casillas sin marcar por defecto, no pre-seleccionadas), información clara y accesible antes de dar el consentimiento (qué datos, para qué finalidad, quién los trata, durante cuánto tiempo), facilidad para retirar el consentimiento (igual de fácil que darlo). Explícame qué son los dark patterns de consentimiento que están expresamente prohibidos por las autoridades de protección de datos y que debo evitar como diseñador.

**3. Diseño de banners de cookies conforme al RGPD**
Detalla cómo debe ser el diseño de un banner de cookies legalmente correcto según las guías de la AEPD y el Comité Europeo de Protección de Datos: qué información debe contener en la primera capa (sin necesidad de expandir), qué opciones debe presentar el usuario (aceptar, rechazar, configurar), por qué el botón de "rechazar" debe ser igual de prominente que el de "aceptar", cómo diseñar la segunda capa de personalización de cookies, y cuál debe ser el comportamiento del sitio si el usuario no interactúa con el banner (no instalar cookies no técnicas). Dame ejemplos de diseños que cumplen y de diseños que no cumplen.

**4. Formularios de registro y captación de datos: mínimo necesario**
Explícame el principio de minimización de datos del RGPD desde la perspectiva del diseño: cómo justificar qué campos son realmente necesarios en un formulario de registro (el test es "¿necesitamos este dato para cumplir la finalidad declarada?"), cómo distinguir entre campos obligatorios y opcionales y presentarlos de forma transparente, cómo diseñar la información de privacidad en el punto de captación (texto cerca del formulario, no solo en los términos y condiciones al final de la página), cómo manejar los datos de menores de edad (verificación de edad, consentimiento parental).

**5. Settings de privacidad: diseño que empodera al usuario**
Explícame cómo diseñar una pantalla de configuración de privacidad que sea fácil de entender y usar: organización por finalidad de tratamiento (no por nombre técnico del sistema), estados claros (activado/desactivado con consecuencias explicadas en lenguaje llano), acceso fácil desde la cuenta del usuario (no enterrado en 5 niveles de menú), confirmación antes de eliminar datos personales, historial de consentimientos accesible para el usuario. Dime qué diferencias debe haber entre los settings de privacidad para usuarios B2C y B2B.

**6. Auditoría de privacidad de un diseño existente**
Dame una metodología para auditar el cumplimiento de privacidad de un producto ya diseñado: qué pantallas revisar primero (onboarding, formularios, settings de cuenta, checkout, cookies), qué preguntas hacerse en cada pantalla (¿qué datos se piden?, ¿está justificado pedirlos?, ¿se informa al usuario correctamente?, ¿puede el usuario controlar el tratamiento?), cómo priorizar los hallazgos por riesgo legal y esfuerzo de corrección, cómo presentar los resultados al equipo de desarrollo y al equipo legal para que los cambios se implementen en el roadmap.

Dame una checklist de 25 puntos para que un diseñador revise el cumplimiento de privacidad de cualquier diseño antes de entregarlo para implementación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'         => 'Incorporar privacidad y cumplimiento normativo en el proceso de diseño UX/UI',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Compliance en ventas: las restricciones legales que el comercial debe conocer',
                'description'      => 'Conoce las normas que regulan la actividad comercial: prácticas prohibidas, tratamiento de datos de prospectos, restricciones sectoriales y cómo vender de forma legal y ética.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de compliance comercial con experiencia en el asesoramiento a equipos de ventas sobre las implicaciones legales de sus prácticas de prospección, negociación y cierre en el entorno regulatorio europeo y español.

Soy comercial o responsable de ventas y necesito entender qué restricciones legales afectan a mi actividad diaria para vender de forma correcta y evitar problemas legales para mí y para la empresa.

Mi sector es: [seguros, servicios financieros, telecomunicaciones, software, servicios profesionales, salud, alimentación, etc.]
Mis actividades comerciales son: [prospección fría por email y teléfono, demos, propuestas, negociación, gestión de contratos]
Mis dudas más urgentes son: [puedo usar listas de prospectos compradas, qué puedo prometer en la demo, cómo almaceno datos de los contactos, qué cláusulas del contrato debo revisar antes de firmar]

Necesito que me expliques:

**1. Prospección fría y RGPD: qué puedo y no puedo hacer**
Explícame las reglas del RGPD que afectan a la prospección comercial: cuándo el interés legítimo justifica el contacto con un prospecto B2B (relación con el negocio del prospecto, proporcionalidad, derecho a oposición fácil), por qué el interés legítimo no se aplica a la prospección B2C sin consentimiento previo, qué debo incluir en mi primer email de prospección para ser conforme (quién soy, por qué le contacto, cómo puede darse de baja), cómo gestionar el CRM para documentar la base legal de cada contacto, y qué ocurre cuando un prospecto ejerce su derecho de oposición o al olvido.

**2. Listas de prospectos compradas: riesgos y cómo mitigarlos**
Explícame los riesgos legales de usar listas de prospectos compradas a terceros: la responsabilidad compartida con el proveedor de la lista (si la lista no tiene base legal, el comprador también es responsable), cómo auditar una lista antes de usarla (pedir el origen de los datos, la base legal, el tiempo desde la recogida), qué diferencia hay entre usar una lista de empresa (datos de contacto profesional) y una lista de consumidores particulares (mayor riesgo legal), y qué precauciones tomar para mitigar el riesgo si decides usar la lista.

**3. Lo que puedo y no puedo prometer en una demo o propuesta**
Explícame las restricciones legales sobre las afirmaciones que puedo hacer como comercial: por qué prometer resultados concretos crea responsabilidad contractual ("nuestro sistema te ahorrará el 40% de los costes"), cómo presentar casos de éxito y testimonios sin crear falsas expectativas, qué diferencia hay entre una afirmación de marketing general y una promesa específica en el proceso de venta, cómo manejar la situación en que el cliente me pide confirmar por escrito algo que no puedo garantizar. Dame ejemplos de frases que generan riesgo legal y sus alternativas seguras.

**4. Contratos: lo que el comercial debe entender antes de firmar**
Explícame las cláusulas más importantes que un comercial debe entender en los contratos que presenta o que recibe del cliente: la diferencia entre una propuesta y un contrato vinculante, las cláusulas de limitación de responsabilidad que protegen a la empresa (y las que el cliente intenta eliminar), las cláusulas de confidencialidad y su alcance, las condiciones de pago y los intereses de demora, las cláusulas de renovación automática y los plazos de notificación para no renovar, y cuándo escalar al equipo legal antes de comprometerse.

**5. Restricciones sectoriales: sectores con regulación específica de ventas**
Explícame las restricciones de compliance comercial en los sectores más regulados: servicios financieros y seguros (MiFID II, IDD, prohibición de recomendaciones sin ser asesor habilitado), telecomunicaciones (portabilidad, prácticas de retención reguladas), salud y farmacia (restricciones en la comunicación de beneficios médicos sin evidencia clínica), alimentación (regulación de claims de salud y nutrición). Dime cómo identificar si mi sector tiene restricciones específicas y dónde encontrar la normativa aplicable.

**6. Compliance de ventas como cultura del equipo**
Explícame cómo construir una cultura de ventas que sea conforme a la normativa sin que eso frene al equipo comercial: cómo formar al equipo de ventas en compliance de forma práctica y sin abrumarlo con terminología legal, cómo crear guías de referencia rápida para situaciones frecuentes (qué decir si el prospecto pide que le borren del CRM, cómo gestionar un contrato que el cliente quiere modificar de forma importante), cómo manejar la presión de cierre de quota sin comprometer el cumplimiento legal.

Dame las diez situaciones de compliance más frecuentes que enfrenta un comercial y cómo actuar correctamente en cada una.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'         => 'Vender de forma legal y ética conociendo las restricciones que aplican al equipo comercial',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product compliance: construir cumplimiento en el producto sin ralentizar la innovación',
                'description'      => 'Integra el compliance regulatorio en el ciclo de desarrollo del producto: identifica regulaciones aplicables, diseña controles técnicos y gestiona los requisitos legales como parte del roadmap.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager con experiencia en compliance regulatorio, especializado en ayudar a equipos de producto a integrar los requisitos legales y normativos en el proceso de desarrollo sin convertirlos en un freno para la innovación.

Soy PM o CPO y necesito construir un proceso para identificar qué regulaciones aplican a nuestro producto, integrar el cumplimiento en el roadmap y gestionar los requisitos legales como parte del trabajo de producto, no como una auditoría externa que llega tarde.

Nuestro producto es: [describe el producto, el tipo de usuario, los mercados en los que opera]
Las regulaciones que sospechamos que nos aplican son: [RGPD, DSA, DMA, AI Act, PCI DSS, HIPAA, regulaciones sectoriales específicas]
El problema actual es: [el equipo legal llega al final y pide cambios costosos, no sabemos qué regulaciones nos aplican, el compliance frena las releases]

Necesito que me expliques:

**1. Cómo identificar las regulaciones que aplican a tu producto**
Explícame el proceso para mapear el landscape regulatorio de un producto digital: cómo determinar qué jurisdicciones aplican (dónde están los usuarios, no solo dónde está la empresa), cómo identificar regulaciones horizontales (RGPD, DSA, AI Act) versus sectoriales (HIPAA para salud, PCI DSS para pagos, MiFID para finanzas), cómo mantener el radar de cambios regulatorios que pueden afectar al producto en el futuro, y cómo priorizar qué regulaciones atender primero según el riesgo y el esfuerzo de cumplimiento.

**2. Integrar compliance en el proceso de discovery de producto**
Explícame cómo incorporar las preguntas de compliance en la fase de discovery de una nueva funcionalidad: qué preguntas hacerse antes de diseñar (¿esta funcionalidad procesa datos personales?, ¿crea nuevas obligaciones de consentimiento?, ¿aplica alguna regulación sectorial a este caso de uso?), cuándo hacer una Evaluación de Impacto relativa a la Protección de Datos (EIPD) según el RGPD, cómo colaborar con el equipo legal en el discovery sin que se conviertan en un bloqueador, y cómo documentar las decisiones de compliance en las especificaciones de producto.

**3. Compliance por diseño: patrones de producto que facilitan el cumplimiento**
Detalla los patrones de diseño de producto que facilitan el cumplimiento normativo de forma estructural: arquitectura de permisos granular que permite activar y desactivar el acceso a datos por usuario, logs de auditoría nativos que registran quién accedió a qué y cuándo, funcionalidades de exportación y eliminación de datos del usuario accesibles desde la interfaz, gestión de consentimientos con estado persistente, separación de datos por jurisdicción para cumplir con requisitos de localización de datos. Explícame por qué estos patrones son más baratos de implementar desde el inicio que de añadir retroactivamente.

**4. Gestión de los requisitos legales en el roadmap**
Explícame cómo priorizar los requisitos de compliance en el roadmap junto a otras iniciativas de producto: cuándo un requisito de compliance es un must-have bloqueador (fecha de entrada en vigor de una regulación con multas severas) versus un should-have que puede diferirse, cómo estimar el esfuerzo de los requisitos de compliance de la misma forma que cualquier otra historia de usuario, cómo comunicar a stakeholders no técnicos por qué ciertos sprints deben dedicarse a compliance, y cómo evitar que la deuda de compliance se acumule hasta convertirse en un proyecto de meses que paraliza el equipo.

**5. El AI Act y los productos que usan inteligencia artificial**
Explícame los aspectos del AI Act europeo que un PM debe conocer: la clasificación de sistemas de IA por nivel de riesgo (inaceptable, alto, limitado, mínimo), qué productos caen en la categoría de alto riesgo y qué obligaciones conlleva (documentación técnica, registro de conformidad, supervisión humana, transparencia), cómo afecta a los productos que usan IA generativa (obligaciones de transparencia, etiquetado de contenido generado por IA, prohibición de ciertos usos), y qué debo hacer ahora para preparar mi producto para el AI Act si aún no está en vigor en todos sus artículos.

**6. Métricas de compliance del producto y gobierno interno**
Explícame cómo medir el estado de compliance del producto de forma continua: qué indicadores de compliance monitorizar (número de incidentes de privacidad, tiempo de respuesta a solicitudes de ejercicio de derechos, cobertura de los tests de compliance en el pipeline de CI/CD, estado de la documentación técnica requerida), cómo construir un comité de revisión de compliance que funcione sin burocratizar el proceso, y cómo reportar el estado de compliance al consejo o a los inversores de forma clara y periódica.

Termina con una plantilla de checklist de compliance que el PM debe completar para cada nueva funcionalidad o cambio significativo en el producto antes de lanzarlo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 35,
                'use_case'         => 'Integrar el compliance regulatorio en el ciclo de desarrollo del producto',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'HR compliance: las obligaciones laborales que el departamento no puede ignorar',
                'description'      => 'Domina las principales obligaciones legales que afectan a la gestión de personas en España: contratación, registro de jornada, desconexión digital, igualdad y prevención de riesgos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de derecho laboral y HR compliance con experiencia en el asesoramiento a departamentos de recursos humanos sobre sus obligaciones legales en el marco del ordenamiento jurídico español.

Trabajo en RRHH o soy HR Business Partner y necesito un mapa completo de las obligaciones legales que afectan a mi función, las novedades normativas más relevantes y un sistema para asegurar que la empresa cumple sin depender de que el equipo legal revise cada proceso.

El tipo de empresa es: [tamaño, sector, si hay convenio colectivo aplicable, si hay trabajadores en teletrabajo, presencia en varios países]
Las áreas de mayor incertidumbre son: [registro de jornada, igualdad y planes de igualdad, teletrabajo, desconexión digital, contratación temporal, protección de datos en RRHH]
El nivel de madurez del equipo en compliance es: [describir si tienen procesos documentados, si han tenido inspecciones de trabajo, si han sufrido sanciones]

Necesito que me expliques en detalle:

**1. Registro de jornada: obligaciones y correcta implementación**
Explícame las obligaciones del RDL 8/2019 sobre registro de jornada: qué debe registrar exactamente (hora de inicio y fin de la jornada de cada trabajador cada día), qué medios son válidos para el registro (biométrico, app, firma en papel, control informático), cuánto tiempo deben conservarse los registros (4 años), qué obligaciones tiene la empresa de poner el registro a disposición de los trabajadores y de sus representantes, cuáles son las sanciones por incumplimiento (Ley de Infracciones y Sanciones del Orden Social) y cómo gestionar el registro en entornos de teletrabajo y trabajo flexible.

**2. Teletrabajo y Ley de Trabajo a Distancia**
Detalla las obligaciones de la Ley 10/2021 de trabajo a distancia: cuándo es obligatorio el acuerdo de trabajo a distancia (a partir del 30% de la jornada en un período de referencia de 3 meses), qué debe incluir el acuerdo por escrito (inventario de medios, compensación de gastos, horario y disponibilidad), la obligación de la empresa de costear los medios y compensar los gastos del teletrabajo, el derecho a la desconexión digital, el derecho de los representantes de los trabajadores a ser informados, y cómo gestionar el teletrabajo internacional cuando el trabajador quiere teletrabajar desde otro país.

**3. Planes de igualdad: obligaciones y contenido**
Explícame las obligaciones de la Ley Orgánica de Igualdad y los RD 901 y 902/2020 en materia de planes de igualdad: qué empresas están obligadas a tener un plan de igualdad (50 o más trabajadores desde 2022), cuál es el proceso de negociación con los representantes de los trabajadores, qué diagnóstico debe hacerse antes de redactar el plan (análisis de la brecha salarial, representación por género en cada categoría, procesos de selección, conciliación), qué materias mínimas debe abordar el plan, la obligación de registro en el REGCON, y cuáles son las sanciones por no tener el plan obligatorio.

**4. Protección de datos en RRHH: el tratamiento de datos de trabajadores**
Explícame las obligaciones del RGPD en la gestión de datos de los trabajadores: base legal para cada tipo de tratamiento (contrato para datos de nómina, obligación legal para datos de PRL, consentimiento para datos no necesarios para la relación laboral), qué información debe darse al trabajador sobre el tratamiento de sus datos (momento de la firma del contrato como mínimo), cómo gestionar los datos del CV de candidatos que no son contratados (plazo máximo de conservación), cómo tratar los datos de videovigilancia y control del ordenador de empresa (obligaciones de información, usos permitidos y prohibidos).

**5. Prevención de riesgos laborales: obligaciones básicas del empresario**
Explícame las obligaciones fundamentales de la LPRL que el equipo de RRHH debe gestionar: evaluación de riesgos periódica (incluidos los riesgos psicosociales y ergonómicos), planificación de la actividad preventiva, información y formación de los trabajadores, vigilancia de la salud (reconocimientos médicos), coordinación de actividades empresariales cuando hay contratas o subcontratas, y gestión de los accidentes de trabajo y enfermedades profesionales (comunicación al INSS, investigación interna, medidas correctoras). Explícame también las obligaciones específicas del teletrabajo en materia de PRL.

**6. Contratación temporal: limitaciones y riesgos de la reforma laboral**
Explícame el nuevo régimen de la contratación temporal tras la reforma laboral de 2022: la presunción de indefinición como regla general, los únicos contratos temporales válidos (por circunstancias de la producción y sustitución), los límites del contrato por circunstancias de la producción (máximo 90 días al año por empresa, no encadenamiento para el mismo puesto), el nuevo contrato fijo discontinuo como alternativa a la temporalidad estacional, y cuáles son los riesgos de utilizar contratos temporales fuera de los supuestos legales (declaración de indefinición, sanción de la Inspección de Trabajo).

Dame un calendario de obligaciones de HR compliance organizado por frecuencia (diaria, mensual, trimestral, anual) que sirva como guía de referencia para el departamento de RRHH.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'         => 'Cumplir con las obligaciones laborales del departamento de RRHH en España',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Financial compliance: IFRS, auditoría y el control interno que protege a la empresa',
                'description'      => 'Domina el marco de control interno y cumplimiento financiero: normativa contable, preparación de auditorías y los controles que protegen la integridad de los estados financieros.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero y experto en compliance financiero con experiencia en la implementación de marcos de control interno, la preparación de auditorías externas y el cumplimiento de la normativa contable en empresas medianas y grandes.

Soy CFO, controller financiero o responsable del área de finanzas y necesito construir un sistema de control interno robusto, asegurar el cumplimiento de las obligaciones contables y estar preparado para auditorías externas sin que supongan un trauma para el equipo.

Nuestra empresa tiene: [tamaño, si cotiza en bolsa o tiene inversores institucionales, si opera en varios países, si tiene obligaciones de auditoría externa]
Las obligaciones contables que nos aplican son: [IFRS/NIC para grupos consolidados, Plan General Contable español para pymes, obligaciones de auditoría legal, reporting a inversores]
Nuestro mayor reto es: [preparar la primera auditoría externa, implementar IFRS 16 o IFRS 9, documentar el control interno, detectar y corregir errores contables antes de que los encuentre el auditor]

Necesito que me expliques:

**1. Control interno financiero: el marco COSO y su aplicación práctica**
Explícame el marco COSO de control interno y cómo aplicarlo en una empresa mediana: los cinco componentes del control interno (entorno de control, evaluación de riesgos, actividades de control, información y comunicación, supervisión), cuáles son los controles clave en el ciclo de ingresos, el ciclo de pagos, la gestión de tesorería y el cierre contable mensual, qué controles son preventivos vs. detectivos, y cómo documentar el sistema de control interno para que sea auditable. Dame ejemplos de controles concretos para cada ciclo principal.

**2. Preparación para la auditoría externa: cómo facilitar el trabajo del auditor**
Detalla cómo preparar el cierre anual para facilitar la auditoría externa: qué documentación debe estar lista antes de que llegue el equipo auditor (conciliaciones bancarias al cierre, inventario físico con su acta, confirmaciones de saldos de clientes y proveedores, documentación de activos fijos, contratos significativos, actas del consejo de administración), cómo organizar el archivo documentario para el equipo auditor, cómo gestionar los pedidos de información (PBC - Provided by Client list) de forma eficiente, y qué conversaciones tener con el auditor durante el año para evitar sorpresas en el cierre.

**3. IFRS principales y cuándo aplican**
Explícame las normas IFRS más relevantes para una empresa no cotizada que las adopta por exigencia de sus inversores: IFRS 15 (reconocimiento de ingresos: cuándo se reconoce un ingreso de un contrato con un cliente, tratamiento de los ingresos de suscripción diferidos), IFRS 16 (arrendamientos: por qué casi todos los contratos de alquiler deben reflejarse en el balance como activo y pasivo), IFRS 9 (instrumentos financieros: cómo valorar inversiones financieras y cuentas a cobrar con modelo de pérdida esperada). Para cada norma, explícame el impacto práctico en el balance y la cuenta de resultados.

**4. Prevención del fraude financiero: señales de alerta y controles**
Explícame los tipos de fraude financiero más frecuentes en empresas medianas y los controles preventivos para cada uno: fraude en el ciclo de pagos (facturas falsas, pagos duplicados, alteración de datos bancarios de proveedores), fraude en el ciclo de ingresos (reconocimiento anticipado o diferido de ingresos para manipular resultados), malversación de activos (robo de efectivo, gastos personales como gastos de empresa), manipulación de los estados financieros para inversores o bancos. Para cada tipo, dame las señales de alerta que debe detectar el controller y el control preventivo que lo dificulta.

**5. Reporting financiero a inversores: qué exigen y cómo prepararlo**
Explícame qué información financiera exigen los inversores de capital riesgo o private equity en sus portfolios: reporting mensual (P&L, balance, cash flow con comparativa contra budget y contra el mismo período del año anterior), KPIs financieros específicos del modelo de negocio, previsiones actualizadas (rolling forecast), análisis de desviaciones con explicación cualitativa. Dime cómo estructurar el paquete de reporting mensual para que sea claro, creíble y no consuma más tiempo del necesario al equipo de finanzas.

**6. Compliance fiscal: las obligaciones que el equipo financiero no puede ignorar**
Explícame las obligaciones fiscales principales que gestiona el departamento de finanzas en España: IVA (declaraciones mensuales o trimestrales, SII para empresas con más de 6M€ de facturación, tratamiento del IVA intracomunitario), Impuesto sobre Sociedades (pagos fraccionados, ajustes extracontables frecuentes, documentación de precios de transferencia en grupos), retenciones a cuenta (retenciones en facturas de profesionales, retenciones a proveedores de arrendamiento), y las obligaciones de información (modelos 347, 349, 720). Explícame cuáles tienen mayor riesgo de sanción por errores frecuentes.

Dame una guía de cierre mensual de 30 pasos que garantice la fiabilidad de los estados financieros y la trazabilidad del control interno.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 40,
                'use_case'         => 'Control interno, auditoría y cumplimiento de la normativa contable y fiscal',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Enterprise risk management desde la perspectiva jurídica',
                'description'      => 'Diseña e implementa un sistema de gestión de riesgos empresariales con enfoque legal: identificación de riesgos, mapas de riesgo y marcos de respuesta para el equipo de cumplimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en cumplimiento normativo y gestión de riesgos empresariales con experiencia en la implementación de sistemas de Enterprise Risk Management (ERM) para empresas medianas y grandes en España y la Unión Europea.

Trabajo en el equipo legal o de compliance de una empresa y necesito construir o mejorar el sistema de gestión de riesgos empresariales, con especial atención a los riesgos legales y regulatorios que pueden tener mayor impacto en el negocio.

Nuestra empresa es: [sector, tamaño, si cotiza en bolsa, si tiene inversores institucionales, presencia geográfica]
Los riesgos legales que más nos preocupan son: [sanciones regulatorias, litigios con clientes o proveedores, incumplimiento de normativa ambiental, riesgos de corrupción, riesgos de propiedad intelectual]
El estado actual del ERM es: [si tienen un mapa de riesgos, si hay un comité de riesgos, si los riesgos se revisan periódicamente]

Necesito que me ayudes a desarrollar:

**1. El mapa de riesgos legales y regulatorios**
Explícame cómo construir un mapa de riesgos legales y regulatorios: las categorías de riesgo que debe incluir (riesgo regulatorio y de cumplimiento, riesgo contractual, riesgo litigioso, riesgo de propiedad intelectual, riesgo de reputación, riesgo penal de la persona jurídica), cómo evaluar cada riesgo en términos de probabilidad de materialización e impacto económico y reputacional, y cómo representar el mapa de riesgos en un heat map que permita comunicarlo a la dirección y al consejo de administración de forma visual y clara.

**2. Responsabilidad penal de la persona jurídica y el programa de compliance**
Explícame el régimen de responsabilidad penal de las personas jurídicas en España (artículo 31 bis del Código Penal): qué delitos pueden generar responsabilidad penal para la empresa (corrupción, blanqueo de capitales, fraude fiscal, delitos medioambientales, delitos laborales), qué debe incluir un programa de compliance penal que exima o atenúe la responsabilidad (mapa de riesgos penales, canal de denuncias, formación, órgano de supervisión independiente), cómo acreditar la eficacia del programa ante un tribunal, y cuáles son las sanciones que puede sufrir la empresa si es condenada (multas, suspensión de actividades, inhabilitación para contratar con el sector público).

**3. Canal de denuncias y Directiva Whistleblower**
Detalla las obligaciones de la Directiva europea de protección de denunciantes (transpuesta en España por la Ley 2/2023): qué empresas están obligadas a implementar un canal de denuncias (más de 50 trabajadores), qué requisitos debe cumplir el canal (confidencialidad, anonimato opcional, acuse de recibo en 7 días, respuesta en 3 meses, prohibición de represalias), quién puede gestionar el canal internamente (no el departamento de RRHH ni el responsable denunciado), cuándo conviene externalizar la gestión del canal, y cómo proteger jurídicamente al denunciante de buena fe.

**4. Gestión de contratos como herramienta de gestión de riesgos**
Explícame cómo el contrato es la primera herramienta de gestión del riesgo legal: cómo identificar los riesgos en la fase de negociación del contrato (riesgos de incumplimiento, riesgos de responsabilidad, riesgos regulatorios), qué cláusulas clave mitigar el riesgo contractual (limitación de responsabilidad, indemnidades, resolución de disputas, fuerza mayor, condiciones precedentes), cómo construir un repositorio de contratos que permita identificar vencimientos, renovaciones automáticas y obligaciones críticas, y cómo implementar un proceso de revisión de contratos escalable que no colapse al equipo legal.

**5. Due diligence legal en fusiones, adquisiciones e inversiones**
Explícame el proceso de due diligence legal en una operación de M&A o en la entrada de un inversor: qué áreas cubrir (societario y corporativo, contratos materiales, propiedad intelectual, laboral, fiscal, litigios pendientes, propiedad inmobiliaria, compliance regulatorio, protección de datos), cómo organizar el data room legal, cómo redactar el informe de due diligence con los hallazgos y su impacto en el precio o en las garantías del contrato, y cuáles son los riesgos más frecuentes que se detectan en due diligence y que los vendedores intentan ocultar.

**6. Compliance como ventaja competitiva**
Explícame cómo transformar el compliance de un coste necesario en una ventaja competitiva: cómo comunicar el compromiso de la empresa con el cumplimiento en las negociaciones con clientes enterprise (cuestionarios de proveedor, certificaciones), cómo usar un programa de compliance robusto para reducir las primas de seguros de responsabilidad civil, cómo el compliance atrae talento directivo que no quiere trabajar en empresas con riesgo reputacional, y cómo el cumplimiento normativo facilita el acceso a financiación pública y europea (fondos NextGenerationEU, créditos ICO, contratos con el sector público).

Cierra con una hoja de ruta de implementación de un sistema de ERM legal para una empresa mediana sin estructura de compliance previa, con los primeros diez pasos priorizados.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 40,
                'use_case'         => 'Construir un sistema de gestión de riesgos empresariales con enfoque legal y de cumplimiento',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Data compliance en CS: proteger los datos del cliente mientras se le ayuda',
                'description'      => 'Aprende a gestionar los datos de los clientes en el equipo de Customer Success de forma conforme al RGPD: acceso necesario, retención limitada y protocolos de seguridad en el soporte.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en protección de datos y Customer Success que ayuda a equipos de CS a entender y cumplir con el RGPD en su actividad diaria, sin que las obligaciones legales interfieran con la capacidad de ayudar a los clientes de forma efectiva.

Trabajo en un equipo de Customer Success o soporte y necesito entender qué datos puedo acceder, cómo debo gestionarlos, qué protocolos de seguridad debo seguir y cómo responder cuando un cliente ejerce sus derechos sobre sus datos.

El tipo de producto que soportamos es: [SaaS B2B, plataforma de consumo B2C, servicio de salud, servicio financiero]
Los datos del cliente a los que accedemos en nuestra actividad son: [datos de cuenta, datos de uso, datos de facturación, datos de contenido del cliente dentro del producto]
Nuestro mayor reto de compliance es: [saber qué datos puedo ver cuando abro un ticket, cómo responder solicitudes de acceso o eliminación, cómo manejar una brecha de seguridad que afecta a datos de clientes]

Necesito que me expliques:

**1. El rol del equipo de CS en el ecosistema de datos del cliente**
Explícame la distinción jurídica entre responsable del tratamiento (el cliente que usa el producto) y encargado del tratamiento (nuestra empresa como proveedora del servicio), y qué implica para el equipo de CS: por qué los datos que el cliente almacena en nuestro producto son datos del cliente (no nuestros), qué nos autoriza el DPA a hacer con esos datos (únicamente prestar el servicio contratado), y qué está expresamente prohibido hacer con los datos del cliente aunque tengamos acceso técnico (usarlos para nuestros propios análisis de negocio, compartirlos con terceros sin autorización del cliente, acceder a ellos sin una razón de soporte válida).

**2. Acceso a datos de cliente en el contexto de soporte: el principio de need-to-know**
Explícame cómo aplicar el principio de mínimo acceso en el trabajo diario de CS: qué datos del cliente son necesarios para resolver un ticket típico y cuáles no debería acceder aunque técnicamente pueda, cómo documentar el acceso a datos del cliente cuando es necesario para un ticket específico (log de acceso, referencia al ticket en el que se justifica), qué hacer si durante la investigación de un ticket encuentro datos sensibles del cliente que no son necesarios para la resolución (no copiar, no compartir, no retener). Explícame por qué estos principios protegen tanto al cliente como al agente de CS.

**3. Comunicaciones con el cliente y protección de datos en los canales**
Detalla cómo manejar los canales de comunicación de soporte de forma conforme al RGPD: por qué no debo pedir datos personales innecesarios al cliente para verificar su identidad cuando la cuenta del producto ya lo autentica, cómo manejar los documentos que el cliente envía como adjunto en un ticket (guardar solo lo necesario, eliminar cuando el ticket esté resuelto), cómo gestionar conversaciones de soporte que contienen datos sensibles (datos médicos, datos financieros, datos de empleados del cliente), y cómo configurar los canales de soporte para que el almacenamiento de conversaciones sea conforme al RGPD.

**4. Solicitudes de derechos RGPD que llegan al equipo de CS**
Explícame cómo debe manejar el equipo de CS las solicitudes de ejercicio de derechos que hacen los clientes: derecho de acceso (qué datos tenemos del cliente y en qué sistemas), derecho de rectificación (cómo corregir datos incorrectos), derecho de supresión (cómo eliminar la cuenta y los datos del cliente conforme al contrato de servicio y a las obligaciones de retención legal), derecho de portabilidad (cómo exportar los datos del cliente en formato legible). Dime cuáles de estas solicitudes puede gestionar directamente el equipo de CS y cuáles deben escalarse al DPO o al equipo legal.

**5. Gestión de brechas de seguridad desde el equipo de CS**
Explícame qué debe hacer el equipo de CS cuando detecta una posible brecha de seguridad que afecta a datos del cliente: el protocolo de notificación interna inmediata (a quién avisar primero y qué información incluir), cómo comunicarse con el cliente afectado mientras se investiga la brecha (qué decir y qué no decir antes de tener confirmación del alcance), las obligaciones de notificación a la AEPD en menos de 72 horas, y cómo documentar todo el proceso de respuesta a la brecha para demostrar diligencia ante la autoridad de control.

**6. Formación en protección de datos para el equipo de CS**
Explícame cómo diseñar e implementar la formación en protección de datos para el equipo de CS que sea práctica y no solo teórica: casos de uso reales del trabajo diario del equipo (no ejemplos genéricos del RGPD), simulaciones de situaciones problemáticas con la respuesta correcta (¿qué hago si el cliente me pide que le reenvíe los datos de pago de otro usuario de su empresa?), checklist de los cinco comportamientos de compliance que el equipo debe tener interiorizados, y cómo mantener la formación actualizada cuando cambia la normativa o cambian los procesos internos.

Dame un protocolo de actuación de una página que el agente de CS pueda consultar rápidamente cuando tenga una duda de compliance en el trabajo diario.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'         => 'Gestionar datos de clientes en CS de forma conforme al RGPD sin perder capacidad de ayudar',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Compliance del freelance: obligaciones fiscales, protección de datos y contratos',
                'description'      => 'Cumple con tus obligaciones legales como freelance: fiscalidad del autónomo, protección de datos con tus clientes y contratos que te protegen y protegen al cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor legal y fiscal especializado en profesionales autónomos y freelances en España, con experiencia en ayudar a independientes a construir una actividad legalmente sólida sin necesitar un equipo legal propio.

Soy freelance o consultor independiente y necesito entender mis principales obligaciones legales y fiscales para operar de forma correcta, evitar sanciones y construir relaciones con clientes sobre una base contractual sólida.

Mi actividad es: [describe tu especialidad: diseño, desarrollo, marketing, consultoría, fotografía, redacción, formación, etc.]
Mis clientes son principalmente: [empresas (B2B), particulares (B2C), o ambos]
Mis dudas más urgentes son: [cómo facturar correctamente, si necesito protección de datos, cómo hacer contratos que me protejan, si puedo deducir mis gastos, qué pasa si trabajo para clientes extranjeros]

Necesito que me expliques:

**1. Obligaciones fiscales del autónomo en España: lo esencial**
Explícame las obligaciones fiscales básicas de un autónomo en España: el alta en Hacienda (Modelo 036 o 037, la actividad correcta del IAE según mi especialidad), las declaraciones trimestrales de IVA (Modelo 303, cuándo aplica el IVA y cuándo no, cuándo aplicar la exención de formación), la retención del IRPF en las facturas a empresas y profesionales españoles (el porcentaje aplicable y cuándo no se aplica), la declaración anual de IRPF como rendimiento de actividad económica, y los gastos que puedo deducir legítimamente (material, herramientas, formación, espacio de trabajo en casa según el porcentaje de uso profesional, cuotas de asociaciones profesionales).

**2. Facturación correcta: qué debe incluir una factura y errores frecuentes**
Explícame qué debe incluir una factura para ser válida fiscalmente: número y serie correlativa, fecha de expedición y de operación si son distintas, datos del emisor (NIF, nombre o razón social, domicilio), datos del receptor, descripción de los servicios, base imponible, tipo de IVA aplicable y cuota de IVA, retención de IRPF si aplica, e importe total. Explícame los errores más frecuentes que cometen los freelances al facturar: no aplicar la retención cuando corresponde, emitir facturas sin IVA a empresas cuando no aplica la exención, olvidar los datos del receptor. Dame también cómo manejar las facturas en moneda extranjera y las facturas a clientes fuera de España.

**3. Protección de datos como autónomo: cuándo aplica el RGPD**
Explícame cuándo un freelance está obligado a cumplir con el RGPD: si tratas datos personales de tus clientes (nombres, emails, teléfonos en tu CRM o lista de contactos), si accedes a datos personales de los clientes de tu cliente en el desarrollo de tu trabajo (diseñar la web de una clínica, gestionar las redes de una empresa con seguidores), si usas herramientas digitales que procesan datos personales (Mailchimp, Google Analytics, CRMs). Explícame qué debes hacer en cada caso: política de privacidad en tu web, registro de actividades de tratamiento, contrato de encargo del tratamiento con el cliente cuando tratas sus datos, y las medidas de seguridad mínimas razonables para un freelance.

**4. El contrato de servicios del freelance: cláusulas que te protegen**
Explícame qué cláusulas esenciales debe tener el contrato de servicios de un freelance para protegerse: objeto del contrato (descripción precisa del alcance, qué está incluido y qué no), precio y forma de pago (anticipo inicial, hitos de pago, penalización por retraso en el pago), plazos y condiciones que los determinan (el cliente debe entregar materiales en plazo para que el freelance cumpla el suyo), propiedad intelectual (cuándo se transfiere la titularidad del trabajo al cliente y bajo qué condiciones, qué derechos morales conserva el creador), confidencialidad, condiciones de resolución del contrato (con cuánto preaviso puede cancelar cada parte y qué sucede con el trabajo ya realizado).

**5. Gestión de impagos: cómo cobrar lo que te deben**
Explícame el proceso para reclamar un impago como autónomo en España: el primer paso siempre es el requerimiento amistoso (email o burofax documentado), cuándo escalar a un requerimiento formal antes de ir a los tribunales, el procedimiento monitorio como vía judicial rápida para cantidades no disputadas (hasta 250.000€ sin necesidad de abogado ni procurador obligatorios), cómo calcular los intereses de demora aplicables (Ley 3/2004 de lucha contra la morosidad en operaciones comerciales, tipo de interés del Banco Central Europeo más 8 puntos), y qué cláusulas incluir en el contrato para reducir el riesgo de impago desde el inicio (anticipo, pagos por hitos, suspensión del servicio ante retraso en el pago).

**6. Clientes extranjeros: cómo facturar y qué implicaciones tiene**
Explícame cómo gestionar la facturación a clientes en el extranjero: a empresas de la UE (operación intracomunitaria exenta de IVA español si el cliente tiene NIF-IVA europeo, obligación de presentar el Modelo 349), a particulares de la UE (el IVA aplica pero puede haber OSS para no registrarse en cada país), a clientes fuera de la UE (exportación de servicios, sin IVA español), si necesito hacer retención de IRPF cuando facturo a un cliente no español (en general no, salvo excepciones), y si trabajar para un cliente extranjero de forma continuada puede generar un establecimiento permanente o un riesgo de doble imposición.

Dame un checklist de inicio de actividad como freelance con los 15 pasos legales y fiscales que debo completar en los primeros 30 días para operar de forma correcta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 25,
                'use_case'         => 'Cumplir con las obligaciones fiscales, legales y de protección de datos como freelance',
                'vote_score'       => 48,
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
