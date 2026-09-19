<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills488Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Contratos con agencias de marketing y protección legal con IA',
                'description'      => 'Aprende a revisar, negociar y redactar contratos con agencias, influencers y proveedores de marketing usando IA para proteger los intereses de tu empresa.',
                'prompt_content'   => <<<'EOT'
Actúa como un asesor legal especializado en contratos de marketing y publicidad, con experiencia asesorando a departamentos de marketing de empresas medianas en la negociación y revisión de contratos con agencias creativas, medios de comunicación, influencers y plataformas digitales.

Los contratos de marketing son cada vez más complejos y las consecuencias de firmar sin entender las cláusulas pueden ser muy costosas. Necesito desarrollar la capacidad de revisar contratos básicos con IA antes de involucrar a un abogado para casos complejos.

**Contexto de mis contratos habituales:**
[Describe los tipos de contratos que firmas habitualmente: agencias creativas, compra de medios, influencer marketing, herramientas SaaS de marketing, patrocinios]

**Área 1: Revisión de contratos con agencias creativas**
Identifica los elementos críticos a revisar:
- Propiedad intelectual de los creativos: quién es dueño del material producido, licencias, reutilización
- Derechos de uso: plataformas permitidas, duración, territorio geográfico, exclusividad
- Cláusulas de exclusividad con la agencia: qué limita y por cuánto tiempo
- Condiciones de terminación: preaviso, penalizaciones, entrega de materiales al finalizar
- Confidencialidad y protección de datos de campañas e insights de negocio
- Responsabilidad en caso de reclamaciones de terceros por el contenido creado

**Área 2: Contratos de influencer marketing**
Gestiona los aspectos legales específicos de este formato:
- Definición precisa de entregables: número de posts, stories, vídeos, menciones mínimas
- Cláusulas de contenido: aprobación previa, modificaciones, tiempo de revisión
- Obligaciones de disclosure (identificación de publicidad): cumplimiento de normativa de la FTC/CNMC
- Exclusividad de categoría: cuánto tiempo no puede trabajar con competidores
- Derechos de reutilización de contenido del influencer en canales propios de la marca
- Gestión de crisis: qué ocurre si el influencer causa una controversia durante la campaña

**Área 3: Contratos de compra de medios y publicidad digital**
Entiende los términos de las plataformas y medios:
- Terms of Service de plataformas (Meta, Google, TikTok): limitaciones de responsabilidad, cambios unilaterales
- Contratos de compra programática: viewability garantizada, brand safety, click fraud
- Acuerdos de exclusiva con medios: garantías de inventario, make-good por bajo rendimiento
- Gestión de datos de audiencias: propiedad de los datos de campaña, retención, RGPD

**Área 4: Contratos SaaS de herramientas de marketing**
Evalúa las condiciones de las plataformas tecnológicas:
- Portabilidad de datos: cómo recuperar tus datos si cambias de plataforma
- SLAs de disponibilidad: qué garantías ofrece el proveedor y qué compensaciones existen
- Cambios de precio: cuánto preaviso dan, si pueden subir precios en contratos anuales
- Seguridad y cumplimiento RGPD: responsabilidades del proveedor como encargado del tratamiento

**Área 5: Hoja de ruta para revisar contratos con IA**
Desarrolla un proceso sistemático:
- Lista de verificación de los veinte elementos que revisar en cualquier contrato de marketing
- Cómo usar a Claude para analizar contratos: qué preguntar, qué formato de salida pedir
- Señales de alerta que indican la necesidad de consultar a un abogado real
- Cómo negociar modificaciones de cláusulas de forma profesional con la contrapartem
- Documentación de las negociaciones y cambios acordados fuera del documento principal

Proporciona ejemplos de cláusulas problemáticas reales (anonimizadas) y explica por qué son peligrosas y cómo deberían redactarse correctamente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Revisión y negociación de contratos de marketing con agencias, influencers y plataformas digitales',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Revisión de contratos de software y licencias tecnológicas con IA',
                'description'      => 'Analiza contratos de desarrollo de software, licencias de código, acuerdos de API y términos de servicios cloud usando IA para identificar riesgos legales técnicos.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho tecnológico con experiencia asesorando a desarrolladores, startups y departamentos de tecnología en la revisión de contratos de software, licencias open source, acuerdos con proveedores cloud y contratos de desarrollo a medida.

Los desarrolladores con frecuencia firman o aceptan contratos y licencias sin entender completamente sus implicaciones legales, lo que puede generar problemas serios de propiedad intelectual, responsabilidad o restricciones de negocio. Necesito aprender a hacer una primera revisión efectiva.

**Contexto de mis contratos tecnológicos:**
[Describe si trabajas como desarrollador freelance, en startup o en empresa, los tipos de contratos que firmas habitualmente y los mayores riesgos que percibes]

**Bloque 1: Licencias de software open source**
Entiende las implicaciones de las licencias más comunes:
- Licencias permisivas (MIT, BSD, Apache 2.0): qué puedes hacer y qué atribución debes dar
- Licencias copyleft débil (LGPL, MPL): cuándo contamina tu código propietario
- Licencias copyleft fuerte (GPL, AGPL): los riesgos para software comercial y SaaS
- Compatibilidad entre licencias: combinaciones problemáticas en proyectos con múltiples dependencias
- Compliance de licencias open source: herramientas de auditoría y procesos de revisión
- Contributor License Agreements (CLA): qué cedes cuando contribuyes a proyectos open source

**Bloque 2: Contratos de desarrollo de software a medida**
Identifica los elementos críticos para protegerte:
- Propiedad del código: trabajo por encargo vs. licencia de uso, cuándo queda claro que es del cliente
- Definición de alcance: qué es una funcionalidad nueva y qué es un bug a corregir gratuitamente
- Entregables y criterios de aceptación: cómo evitar conflictos sobre si el trabajo está completo
- Garantías y periodo de mantenimiento post-entrega: cuánto tiempo eres responsable de los fallos
- Limitación de responsabilidad: cómo protegerte de reclamaciones desproporcionadas
- Cláusulas de non-compete y no-solicitation: cuándo son razonables y cuándo abusivas

**Bloque 3: Acuerdos con proveedores cloud y APIs**
Gestiona los términos de servicios de infraestructura:
- Cambios unilaterales en APIs: qué hacer cuando un proveedor depreca una API de la que dependes
- SLAs de disponibilidad y créditos por downtime: cómo calcular si el SLA es suficiente para tu negocio
- Portabilidad de datos y vendor lock-in: cláusulas para garantizar que puedes migrar
- Limitaciones de uso aceptable: qué puede hacer que te suspendan la cuenta sin previo aviso
- Protección de datos y subprocesadores en servicios cloud: DPAs y cumplimiento RGPD
- Propiedad de los modelos entrenados con tus datos en servicios de IA

**Bloque 4: Contratos de empleo y freelance relacionados con IP**
Protege tu propiedad intelectual como desarrollador:
- Cláusulas de asignación de invenciones: qué proyectos personales puede reclamar tu empleador
- Inventions Assignment Agreements: cuándo son abusivos y cómo negociarlos
- NDAs técnicos: qué conocimiento puedes usar en futuros trabajos y qué queda restringido
- Cláusulas de no competencia para desarrolladores: validez legal por jurisdicción

**Bloque 5: Proceso de revisión legal de contratos tecnológicos con IA**
Desarrolla un sistema de revisión eficiente:
- Los quince términos y cláusulas más peligrosas en contratos de software
- Plantilla de preguntas para analizar un contrato tecnológico con Claude
- Señales que indican riesgo alto y requieren asesoría legal real
- Cómo documentar tu propio IP antes de empezar un nuevo proyecto o empleo
- Herramientas complementarias: analizadores automáticos de licencias, gestores de contratos

Incluye ejemplos reales de conflictos legales tecnológicos conocidos (Oracle vs. Google, disputas de contribuidores open source) y las lecciones legales que los desarrolladores deben extraer.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Revisión de licencias de software, contratos de desarrollo y acuerdos cloud para desarrolladores',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Contratos de diseño y propiedad intelectual creativa con IA',
                'description'      => 'Protege tu trabajo creativo con contratos sólidos para proyectos de diseño, cesión de derechos, uso de imágenes y colaboraciones con clientes usando IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en propiedad intelectual y derecho del diseño, con experiencia asesorando a diseñadores gráficos, directores de arte, ilustradores y estudios de diseño en la protección de su trabajo creativo y la redacción de contratos que equilibren sus intereses con los del cliente.

Los diseñadores frecuentemente trabajan con contratos inadecuados o sin contrato, lo que genera conflictos sobre propiedad de los diseños, derechos de uso, modificaciones no autorizadas y pagos. Necesito construir un sistema contractual sólido para mi práctica de diseño.

**Contexto de mi práctica:**
[Describe si eres freelance o tienes estudio, los tipos de proyectos que realizas (identidad corporativa, diseño editorial, ilustración, UX/UI, packaging) y los problemas contractuales que has enfrentado]

**Área 1: Propiedad intelectual en diseño**
Entiende la titularidad de tus creaciones:
- Derechos de autor del diseñador vs. cesión al cliente: qué se cede y qué se retiene por defecto
- Diferencia entre cesión total de derechos y licencia de uso
- Derechos morales del autor: qué derechos no puedes ceder en muchos países (integridad, paternidad)
- Trabajos por encargo vs. obra de colaboración: cuándo el cliente es co-autor automáticamente
- Registro de diseños y marcas: cuándo vale la pena y qué protege exactamente

**Área 2: Estructura del contrato de diseño**
Diseña tu contrato base completo:
- Definición precisa del alcance: qué incluye el proyecto y qué genera coste adicional
- Fases de revisión: número de rondas incluidas, proceso de aprobación, qué ocurre si el cliente no responde
- Propiedad de los archivos fuente: cuándo se entrega el AI/PSD/Figma y bajo qué condiciones
- Derechos de uso: plataformas autorizadas, territorio, duración, exclusividad
- Portfolio y muestra: derecho a incluir el trabajo en tu portfolio aunque sea confidencial
- Créditos y atribución: cuándo puedes firmar el trabajo públicamente

**Área 3: Derechos de imagen y uso de recursos de terceros**
Gestiona los activos en tus proyectos:
- Stock photography y elementos licenciados: qué licencias permiten uso comercial sin restricción
- Tipografías: licencias de uso web, apps, broadcast y cómo verificar que cubren el uso del cliente
- Recursos de IA generativa: implicaciones legales de usar Midjourney, DALL-E o Stable Diffusion en proyectos de pago
- Modelo y property releases: cuándo necesitas autorización de personas o lugares fotografiados
- Colores y diseños registrados: marcas de color y trade dress que debes evitar imitar

**Área 4: Gestión de pagos y protección ante impagos**
Protege tu facturación:
- Estructura de pagos recomendada por tipo de proyecto: porcentajes y momentos de facturación
- Propiedad condicionada al pago: cómo retener los derechos hasta cobrar la última factura
- Intereses de demora y costes de reclamación: cómo incluirlos en el contrato
- Qué hacer cuando un cliente usa tu trabajo sin pagar: opciones legales y su coste-beneficio
- Cláusulas de resolución de disputas: mediación, arbitraje o vía judicial

**Área 5: Contratos para situaciones especiales**
Adapta el modelo a casos concretos:
- Colaboración con otros creativos: freelancers subcontratados, estudios en asociación
- Trabajo para startups con pago en equity: cómo estructurar la cesión de derechos en este caso
- Proyectos internacionales: qué ley aplica, cómo gestionar el pago en moneda extranjera
- Marcas y logos: cuándo conviene que el cliente registre la marca antes de finalizar el diseño

Proporciona una plantilla de contrato de diseño comentada con las cláusulas más importantes y explica en lenguaje sencillo la función de cada una. Incluye también los cinco errores contractuales más costosos que cometen los diseñadores.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Contratos de diseño, cesión de derechos y protección de propiedad intelectual creativa',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Revisión de contratos comerciales y negociación B2B con IA',
                'description'      => 'Analiza contratos de venta, acuerdos de distribución y SLAs comerciales para identificar riesgos, mejorar condiciones y proteger los intereses de tu empresa en negociaciones B2B.',
                'prompt_content'   => <<<'EOT'
Actúa como un asesor legal comercial con experiencia en contratos B2B de venta de productos y servicios, acuerdos de distribución y negociación de condiciones comerciales en sectores industriales, tecnológicos y de servicios profesionales.

En ventas B2B, los contratos son el terreno donde se gana o se pierde dinero real. Un comercial que entiende las implicaciones legales de lo que firma puede proteger el margen de su empresa y evitar compromisos imposibles de cumplir. Necesito desarrollar esta competencia.

**Contexto de mi rol comercial:**
[Describe el tipo de producto o servicio que vendes, el perfil de tus clientes (empresas del sector, tamaño, poder de negociación), los contratos más habituales que firmas y los conflictos contractuales que has experimentado]

**Módulo 1: Análisis de contratos de venta estándar**
Entiende los elementos clave de los contratos comerciales:
- Condiciones de pago: plazos, formas de pago, penalizaciones por demora, protección ante insolvencia
- Garantías y responsabilidad por producto o servicio: qué compromisos asumes y cómo limitarlos
- Penalizaciones por incumplimiento de SLA: cómo negociar topes y exclusiones razonables
- Cláusulas de exclusividad: cuándo son beneficiosas y cuándo limitan tu capacidad de crecer
- Precio y revisión de tarifas: mecanismos de indexación, revisiones anuales, protección de margen
- Condiciones de terminación anticipada: preaviso, compensaciones, qué ocurre con pedidos en curso

**Módulo 2: Contratos de distribución y canal**
Gestiona los acuerdos con distribuidores y partners:
- Territorios de exclusividad: definición, métricas de rendimiento para mantenerla, renovación
- Política de precios y descuentos: control del precio de reventa (RPM), alineación de margen
- Obligaciones de stock mínimo y sell-out: cómo establecer compromisos razonables y verificables
- Formación y soporte al distribuidor: qué estás obligado a proveer y cuánto cuesta
- Propiedad de los clientes finales: quién es dueño de la relación comercial y los datos del cliente

**Módulo 3: SLAs y contratos de servicio**
Negocia condiciones de nivel de servicio realistas:
- Métricas de SLA adecuadas para tu tipo de servicio: disponibilidad, tiempo de respuesta, resolución
- Cálculo de penalizaciones: cómo asegurarte de que son proporcionales y sostenibles
- Exclusiones de SLA: situaciones de fuerza mayor, responsabilidad del cliente, mantenimientos
- Proceso de escalado y gestión de incidencias: documentación y comunicación durante los fallos
- Revisión y renovación de SLAs: cómo incorporar aprendizajes de la operación real

**Módulo 4: Negociación de condiciones contractuales**
Desarrolla habilidades de negociación legal:
- Cómo leer un contrato de cliente para identificar las cláusulas más importantes en menos de una hora
- Las diez cláusulas que siempre debes intentar modificar en un contrato de cliente
- Técnicas de negociación legal: reciprocidad, paquetes de concesiones, anclaje
- Cuándo y cómo involucrar al departamento legal sin bloquear el cierre de la venta
- Alternativas al contrato estándar del cliente: cuándo proponer tu propio modelo

**Módulo 5: Gestión de contratos activos y cumplimiento**
Administra tu cartera de contratos comerciales:
- Sistema de tracking de obligaciones contractuales: fechas de renovación, hitos de SLA, revisiones de precio
- Documentación de incumplimientos y reclamaciones: qué registrar y cómo para protegerte
- Gestión de contratos problemáticos: clientes que piden más de lo acordado sistemáticamente
- Proceso de renovación: cómo usar el momento de renovación para mejorar condiciones

Incluye un toolkit de frases y respuestas negociadoras para las situaciones contractuales más comunes en ventas B2B, y una guía de los errores que más frecuentemente cometen los equipos comerciales al revisar contratos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Revisión y negociación de contratos comerciales, acuerdos de distribución y SLAs en ventas B2B',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Due diligence legal de producto y gestión de licencias con IA',
                'description'      => 'Implementa procesos de revisión legal para decisiones de producto: licencias de terceros, acuerdos de APIs, términos de uso y compliance regulatorio en el desarrollo de producto.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado de tecnología especializado en derecho de producto digital, con experiencia asesorando a Product Managers en la identificación y gestión de riesgos legales durante el ciclo de vida del desarrollo de producto.

Los Product Managers toman a diario decisiones que tienen implicaciones legales: integrar una API de terceros, usar datos de usuarios para entrenar un modelo, añadir una funcionalidad de pagos o expandir el producto a un nuevo mercado. Necesito un sistema para identificar estos riesgos antes de que se conviertan en problemas.

**Contexto de mi producto:**
[Describe el tipo de producto (SaaS, app móvil, marketplace, herramienta B2B), los mercados donde opera, las principales integraciones de terceros y los datos que maneja]

**Capa 1: Legal design desde el inicio del producto**
Integra el pensamiento legal en el proceso de discovery:
- Lista de preguntas legales a hacer antes de comprometerse con una funcionalidad
- Señales de alerta de riesgo legal en user stories y especificaciones de producto
- Cuándo involucrar al equipo legal y cómo preparar el briefing para que sea eficiente
- Privacy by design: integración del RGPD y la privacidad en el diseño de funcionalidades
- Accessibility by design: obligaciones legales de accesibilidad digital (EAA, ADA) en el diseño

**Capa 2: Gestión de integraciones y APIs de terceros**
Evalúa los riesgos de dependencias externas:
- Revisión de Terms of Service antes de integrar: qué buscar, qué prohíben habitualmente
- Restricciones de uso de datos de APIs: qué puedes hacer con los datos que recibes de terceros
- Implicaciones de los cambios de API: cómo negociar SLAs con proveedores críticos
- Dependencia de plataformas: riesgos de construir sobre App Store, Google Play, Facebook, etc.
- Scraping y acceso a datos públicos: cuándo es legal y cuándo genera responsabilidad

**Capa 3: Gestión de datos de usuarios**
Navega la complejidad regulatoria de los datos:
- Consentimiento y base legal para el tratamiento de datos por funcionalidad
- Datos especialmente sensibles: salud, menores, datos financieros, localización permanente
- Portabilidad y derecho al olvido: cómo diseñar estas funcionalidades correctamente
- Transfers internacionales de datos: implicaciones para productos globales post-Schrems II
- Notificaciones de brecha de seguridad: obligaciones y tiempos cuando algo sale mal

**Capa 4: Compliance por mercado y verticales**
Adapta el producto a requisitos regulatorios específicos:
- Fintech: PSD2, MiCA, licencias de pago, obligaciones AML/KYC
- Salud digital: HIPAA (EE.UU.), regulación de dispositivos médicos (EU MDR)
- Educación: FERPA, COPPA, protección de datos de menores en entornos educativos
- Marketplace: directiva de servicios digitales (DSA), regulación de plataformas
- IA Act europeo: clasificación de riesgo de los sistemas de IA y obligaciones por nivel

**Capa 5: Términos y condiciones, política de privacidad**
Gestiona la documentación legal del producto:
- Qué debe incluir una Política de Privacidad que cumpla con el RGPD y la CCPA
- Términos de Uso: limitación de responsabilidad, gestión de abusos, resolución de disputas
- Cookie consent: implementación técnica y legal de la gestión del consentimiento
- Comunicaciones de cambios legales a usuarios: cuándo, cómo y qué consecuencias tiene no hacerlo

Incluye una checklist de due diligence legal para las diez decisiones de producto más comunes (añadir pagos, integrar una red social, expandir a nuevo mercado, lanzar una app móvil, añadir IA generativa) con los riesgos específicos de cada una.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestión de riesgos legales en decisiones de producto: APIs, datos, regulación y compliance',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Contratos laborales, compliance y automatización de RRHH con IA',
                'description'      => 'Gestiona contratos de trabajo, políticas de empresa y cumplimiento laboral usando IA para revisar documentos, identificar riesgos y mantener actualizada la documentación de RRHH.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado laboralista con especialización en derecho del trabajo español y europeo, con experiencia asesorando a departamentos de RRHH de empresas medianas en la gestión de contratos laborales, políticas internas y cumplimiento de la normativa laboral y de igualdad.

Los departamentos de RRHH gestionan una cantidad creciente de documentación legal con recursos limitados. La IA puede ayudar a identificar riesgos en contratos, mantener actualizadas las políticas y preparar documentación básica, siempre bajo supervisión de un especialista. Necesito integrar estas herramientas en mi flujo de trabajo.

**Contexto de mi departamento:**
[Describe el tamaño de la plantilla, el sector, los tipos de contratos que gestionas más habitualmente, la estructura del departamento de RRHH y los principales desafíos legales que enfrentas]

**Área 1: Tipos de contratos laborales y su uso correcto**
Entiende el marco contractual para evitar errores costosos:
- Contratos indefinidos: modalidades actuales post-reforma laboral 2022 en España
- Contratos temporales: causas justificadas, duración máxima, consecuencias de uso fraudulento
- Contratos formativos: prácticas y formación en alternancia, requisitos y limitaciones
- Contratos para trabajadores autónomos: cuándo el autónomo puede ser reconvertido en relación laboral
- Contratos de alta dirección: diferencias con el contrato laboral ordinario, indemnizaciones
- Teletrabajo y trabajo híbrido: requisitos del acuerdo de teletrabajo

**Área 2: Revisión de contratos laborales con IA**
Desarrolla un proceso de revisión sistemática:
- Elementos obligatorios que debe contener todo contrato de trabajo
- Cláusulas que pueden ser declaradas nulas por abusivas o contrarias a ley
- Pacto de no competencia postcontractual: requisitos de validez, compensación mínima
- Cláusulas de confidencialidad: alcance razonable y limitaciones legales
- Período de prueba: duración máxima por categoría profesional, derechos durante el período

**Área 3: Políticas internas de empresa**
Desarrolla y mantiene actualizado el manual de empleados:
- Política de igualdad y no discriminación: contenido mínimo obligatorio por tamaño de empresa
- Protocolo de acoso laboral y sexual: elementos obligatorios y proceso de gestión
- Política de uso de tecnología y dispositivos: correo corporativo, BYOD, monitorización
- Política de flexibilidad y conciliación: teletrabajo, horarios flexibles, desconexión digital
- Política disciplinaria: graduación de faltas, procedimiento de expediente, garantías del trabajador

**Área 4: Compliance laboral y auditorías**
Mantén el cumplimiento de las obligaciones del empleador:
- Registro horario: obligaciones legales, formatos aceptados, conservación de datos
- Brecha salarial de género: obligaciones de auditoría retributiva y plan de igualdad
- Prevención de riesgos laborales: evaluaciones obligatorias, formación, vigilancia de la salud
- Gestión de bajas y IT: obligaciones del empleador, coordinación con Seguridad Social
- RGPD en RRHH: qué datos de empleados puedes tratar, por cuánto tiempo y con qué base legal

**Área 5: Gestión de conflictos y extinción de contratos**
Navega los momentos más delicados de la relación laboral:
- Procedimiento disciplinario: garantías del trabajador, carta de despido, plazos
- Despido procedente, improcedente y nulo: diferencias, consecuencias económicas
- ERTEs y EREs: cuándo aplicarlos, procedimiento, negociación con representantes
- Finiquitos: contenido, revisión de liquidación, firma bajo protesta
- Mediación y arbitraje laboral: alternativas a la vía judicial

Incluye una checklist de auditoría laboral anual y un mapa de las principales novedades normativas laborales en España que todo RRHH debe conocer en 2025.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestión legal de contratos laborales, políticas de empresa y compliance de RRHH',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de riesgo legal en operaciones financieras con IA',
                'description'      => 'Identifica y cuantifica riesgos legales en contratos financieros, operaciones de M&A, financiación bancaria y reestructuraciones usando IA para el análisis preliminar.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado de banca y finanzas con experiencia en el análisis de riesgo legal en operaciones de financiación corporativa, fusiones y adquisiciones, reestructuración de deuda y contratos de derivados financieros para equipos de dirección financiera de empresas medianas y grandes.

Los directores financieros y CFOs toman decisiones con importantes implicaciones legales: firma de contratos de préstamo, operaciones de M&A, emisiones de bonos o acuerdos de refinanciación. Una comprensión básica del riesgo legal en estas operaciones es imprescindible para cualquier profesional de finanzas.

**Contexto de mis operaciones:**
[Describe el tipo de empresa (tamaño, cotizada o no, sector), el tipo de operaciones financieras que gestionas habitualmente y los riesgos legales que más te preocupan]

**Bloque 1: Contratos de financiación bancaria**
Entiende los elementos legales clave de la deuda corporativa:
- Covenants financieros: ratios de endeudamiento, cobertura de intereses, restricciones de distribución
- Covenants operativos y restricciones de negocio: qué decisiones corporativas requieren consentimiento del banco
- Events of default: qué situaciones dan derecho al banco a reclamar anticipadamente la deuda
- Cross-default y cross-acceleration: cómo el incumplimiento de un contrato puede activar otros
- Garantías reales y personales: hipotecas, prendas, avales y sus implicaciones
- Change of control: cláusulas que se activan en cambios de control de la empresa

**Bloque 2: Due diligence legal en M&A**
Gestiona la revisión legal en procesos de fusión y adquisición:
- Áreas de due diligence: contratos materiales, litigios, propiedad intelectual, laboral, ambiental, fiscal
- Red flags de mayor impacto en valoración: cuáles son y cómo cuantificar su impacto
- Representations and warranties: qué garantías dar como vendedor y qué pedir como comprador
- Indemnizaciones y retenciones (escrow): cómo estructurar la protección post-cierre
- MAC (Material Adverse Change): cuándo el comprador puede retractarse de la operación

**Bloque 3: Reestructuración de deuda y situaciones de stress**
Navega los momentos de tensión financiera:
- Señales de alerta legal en situaciones de dificultad financiera: obligaciones de administradores
- Opciones de reestructuración amistosa: acuerdo de refinanciación vs. homologación judicial
- Ley Concursal: cuándo y cómo solicitar el concurso de acreedores, consecuencias
- Responsabilidad de administradores en situación de insolvencia: qué evitar y qué documentar
- Protección de acreedores financieros: prelación de créditos, garantías reales vs. acreedores ordinarios

**Bloque 4: Compliance financiero y regulatorio**
Cumple con las obligaciones regulatorias:
- Prevención de blanqueo de capitales (AML): obligaciones para empresas no financieras
- MIFID II y sus implicaciones para la gestión de inversiones corporativas
- Market abuse: restricciones en la gestión de información privilegiada para empresas cotizadas
- Reporte regulatorio: EMIR para derivados, grandes exposiciones, información de insolvencia

**Bloque 5: Negociación y redacción de términos financieros**
Mejora tu capacidad de negociación legal:
- Los diez covenants más restrictivos y cómo negociar headroom adecuado
- Cómo usar la IA para comparar términos entre distintas ofertas de financiación
- Gestión del proceso de documentación legal: desde term sheet hasta cierre
- Relación con asesores legales externos: cómo ser un cliente eficiente y controlar los costes

Incluye un glosario de los términos legales más importantes en contratos de deuda corporativa y M&A, con ejemplos de cómo cada uno impacta en la toma de decisiones financieras.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Análisis de riesgo legal en operaciones de M&A, financiación corporativa y reestructuración de deuda',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Revisión automática de contratos y due diligence legal con IA',
                'description'      => 'Domina las técnicas de uso de IA para acelerar la revisión de contratos, identificar cláusulas de riesgo, estructurar procesos de due diligence y redactar cláusulas asistidas en la práctica legal.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado senior de un despacho de primer nivel con experiencia tanto en litigación comercial como en transacciones corporativas, especializado en la integración de herramientas de inteligencia artificial en la práctica legal para aumentar la eficiencia sin comprometer la calidad ni la responsabilidad profesional.

La IA está transformando la práctica legal. Los abogados que dominen estas herramientas podrán ofrecer más valor a sus clientes, procesar más trabajo con la misma calidad y competir mejor. Necesito construir un sistema de trabajo con IA que sea riguroso y profesionalmente responsable.

**Contexto de mi práctica:**
[Describe tu área de práctica (mercantil, laboral, inmobiliario, M&A), el tipo de despacho (boutique, generalista, in-house), el volumen de contratos que revisas y los tipos de documentos más frecuentes]

**Módulo 1: Revisión de contratos asistida por IA**
Desarrolla un flujo de trabajo de revisión eficiente:
- Preparación del documento: cómo formatear contratos para optimizar el análisis por IA
- Primer pase de identificación: instrucción para que la IA identifique estructura, partes, objeto y duración
- Análisis de cláusulas de riesgo: cómo instruir a la IA para marcar disposiciones no estándar o problemáticas
- Comparativa contra estándar de mercado: cómo usar la IA para identificar desviaciones del estándar
- Generación de resumen ejecutivo: plantilla de informe de revisión para presentar al cliente
- Limitaciones de la IA en revisión legal: qué nunca debes delegar completamente

**Módulo 2: Due diligence con IA**
Escala el proceso de revisión en operaciones complejas:
- Organización del data room: cómo estructurar la revisión por categorías y prioridades
- Indexado automático de documentos: uso de IA para categorizar y relacionar documentos en el data room
- Identificación de documentos clave y ausentes: qué debería estar en el data room y no está
- Extracción de información estructurada: usar IA para crear bases de datos de contratos materiales
- Generación de red flags report: cómo instruir a la IA para producir un informe ejecutivo de hallazgos
- Control de calidad: verificación humana de los análisis generados por IA

**Módulo 3: Redacción asistida de cláusulas y contratos**
Acelera la producción de documentos legales:
- Generación de borradores desde term sheets: cómo convertir términos comerciales en lenguaje contractual
- Alternativas de redacción: cómo pedir a la IA versiones favorables al vendedor, al comprador, neutras
- Adaptación de contratos a legislación local: cómo guiar a la IA para ajustar contratos a distintas jurisdicciones
- Revisión de consistencia interna: usar IA para detectar contradicciones entre cláusulas del mismo documento
- Definiciones: generación y revisión de secciones de definiciones en contratos complejos

**Módulo 4: Investigación jurídica con IA**
Mejora la eficiencia de la investigación legal:
- Identificación de precedentes relevantes: cómo usar IA para mapear jurisprudencia aplicable
- Análisis de normativa comparada: comparación de requisitos legales entre jurisdicciones
- Síntesis de opiniones doctrinales: cómo resumir literatura jurídica compleja
- Limitaciones críticas: por qué nunca debes citar jurisprudencia generada por IA sin verificación

**Módulo 5: Ética y responsabilidad profesional en IA legal**
Navega los dilemas deontológicos:
- Obligaciones de supervisión: el abogado sigue siendo responsable de todo lo que firma
- Confidencialidad y datos del cliente: qué introducir y qué no introducir en herramientas de IA
- Disclosure al cliente: cuándo y cómo informar del uso de IA en el servicio
- Facturación de tiempo asistido por IA: consideraciones éticas sobre cómo cobrar trabajo acelerado por IA
- Actualización continua: la normativa sobre IA en la práctica legal está evolucionando rápidamente

Incluye un protocolo completo de control de calidad para documentos legales producidos con asistencia de IA, con los puntos de verificación humana obligatorios antes de presentar cualquier documento al cliente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Integración de IA en la práctica legal: revisión de contratos, due diligence y redacción asistida',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de SLAs, contratos de servicio y disputas con clientes con IA',
                'description'      => 'Diseña acuerdos de nivel de servicio realistas, gestiona disputas contractuales con clientes y automatiza el seguimiento de obligaciones usando IA en equipos de Customer Success.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Customer Success con experiencia en la gestión de contratos de servicio complejos, acuerdos de nivel de servicio (SLAs) y resolución de disputas con clientes en empresas SaaS B2B con contratos de valor anual superior a 50.000 euros.

Los equipos de Customer Success son la primera línea de gestión de compromisos contractuales con clientes. Cuando algo no va bien, necesitan saber qué dice el contrato, cómo comunicarlo y cómo encontrar soluciones dentro de los límites legales. Necesito un sistema completo para esto.

**Contexto de mi equipo:**
[Describe el tipo de producto o servicio, el tamaño de tu cartera de clientes, el valor medio de los contratos, los SLAs más comunes y los tipos de disputas que enfrentas habitualmente]

**Área 1: Comprensión y comunicación de los contratos al equipo**
Democratiza el conocimiento contractual:
- Cómo crear resúmenes de contrato accionables para los CSMs: qué necesitan saber y qué no
- Traducción de términos legales a lenguaje operativo: qué significa cada SLA en la práctica diaria
- Sistema de alertas internas: cuándo un cliente está en riesgo de disputar el contrato
- Onboarding contractual de clientes: cómo revisar juntos el contrato en el kick-off para alinear expectativas

**Área 2: Diseño y negociación de SLAs**
Construye compromisos que puedas cumplir:
- Metodología para definir SLAs realistas basados en datos históricos de rendimiento
- Métricas adecuadas por tipo de servicio: disponibilidad, tiempo de respuesta, resolución, calidad
- Exclusiones de SLA: situaciones que debes proteger (mantenimientos, integraciones del cliente, fuerza mayor)
- Créditos de servicio: cómo estructurarlos para que sean percibidos como justos sin ser demasiado costosos
- Revisión periódica de SLAs: cómo incorporar mejoras de la operación en renegociaciones anuales

**Área 3: Gestión de incumplimientos de SLA**
Actúa correctamente cuando fallas el estándar:
- Protocolo de comunicación proactiva: cómo notificar al cliente antes de que te lo pida
- Documentación del incidente: qué registrar para el análisis y para la protección legal futura
- Cálculo y aplicación de créditos: proceso interno y comunicación al cliente
- Planes de acción correctiva: cómo comprometerse a mejorar sin crear nuevas obligaciones legales
- Gestión de la percepción: cómo un incidente bien gestionado puede fortalecer la relación con el cliente

**Área 4: Resolución de disputas contractuales con clientes**
Navega los conflictos sin perder la relación:
- Tipos de disputas más comunes: alcance de servicio, interpretación de SLA, cambios de precio, terminación
- Proceso de escalado interno: cuándo involucrar a legal, ventas y dirección en una disputa
- Técnicas de negociación para resolución de conflictos: busca el win-win dentro del contrato
- Documentación de acuerdos verbales y compromisos informales: cómo convertirlos en escritos
- Cuándo es preferible renegociar el contrato antes de ir a vías legales
- Gestión del churn en disputas: cómo salvar la renovación incluso después de un conflicto serio

**Área 5: Automatización del seguimiento contractual**
Gestiona obligaciones contractuales con tecnología:
- Sistema de tracking de fechas críticas: renovaciones, revisiones de precio, auditorías de uso
- Alertas automáticas de riesgo de incumplimiento de SLA en tiempo real
- Dashboard de cumplimiento contractual por cliente: métricas de SLA, satisfacción, riesgo
- Uso de IA para revisar contratos nuevos: identificar compromisos inusuales antes de firmar
- Generación automatizada de informes de cumplimiento para clientes que los requieren

Incluye plantillas de comunicación para los escenarios más frecuentes de gestión contractual: notificación de incumplimiento de SLA, propuesta de renegociación, respuesta a disputa formal y confirmación de resolución de conflicto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestión de SLAs, disputas contractuales y seguimiento de obligaciones en Customer Success',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Contratos freelance sólidos y protección legal con IA',
                'description'      => 'Crea contratos profesionales para proyectos freelance, gestiona impagos, protege tu propiedad intelectual y navega disputas con clientes usando IA como asesor legal de primera capa.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho de trabajadores independientes y economía freelance, con experiencia asesorando a profesionales autónomos en la redacción de contratos, gestión de impagos y protección de su propiedad intelectual en mercados de España y Latinoamérica.

Los freelancers trabajan sin la protección de un departamento legal corporativo. Un buen contrato y saber cómo usarlo es la diferencia entre una carrera freelance próspera y una llena de conflictos no resueltos e impagos. Necesito construir mi sistema contractual completo.

**Contexto de mi práctica freelance:**
[Describe tu especialidad profesional (diseño, desarrollo, consultoría, redacción, formación, etc.), el perfil de tus clientes habituales, el rango de tus proyectos y los problemas contractuales que has enfrentado]

**Pilar 1: El contrato base del freelance**
Construye tu documento contractual fundamental:
- Elementos obligatorios que nunca deben faltar: partes, objeto, entregables, precio, forma de pago
- Propiedad intelectual: cuándo cedes los derechos y bajo qué condiciones, qué retienes siempre
- Revisiones y alcance: cómo definir el número de rondas incluidas y el proceso de aprobación
- Fechas y penalizaciones por retraso: del cliente y del freelance, simétricas y proporcionales
- Confidencialidad: qué puedes mostrar en tu portfolio y qué debes mantener en secreto
- Resolución de disputas y ley aplicable: mediación antes que litigación, jurisdicción apropiada

**Pilar 2: Adaptación del contrato por tipo de proyecto**
Personaliza para cada situación:
- Proyectos de precio fijo: definición de alcance hermética, gestión de extras
- Proyectos por horas: registro de tiempo, reportes, topes de horas, aprobación de horas adicionales
- Retainers mensuales: qué incluye, qué pasa si el cliente no usa las horas, condiciones de renovación
- Proyectos con subcontratistas: cómo protegerte ante el cliente si el subcontratista falla
- Proyectos internacionales: ley aplicable, divisa, forma de pago internacional, retención fiscal

**Pilar 3: Gestión de pagos y protección ante impagos**
Construye un sistema que minimice el riesgo de no cobrar:
- Estructura de pagos recomendada: adelantos, hitos, liquidación final
- Retención de entregables: cuándo y cómo retener los archivos finales hasta cobrar
- Facturación clara: qué información debe incluir la factura para facilitar el pago
- Seguimiento de facturas impagadas: proceso de reclamación amistosa escalonada
- Acciones legales ante impago: opciones disponibles, costes y realismo sobre su efectividad
- Intereses de demora: cómo incluirlos contractualmente y reclamarlos legalmente

**Pilar 4: Situaciones difíciles frecuentes**
Prepárate para los conflictos más habituales:
- El cliente quiere más sin pagar más: cómo gestionar el scope creep contractualmente
- El cliente desaparece a mitad del proyecto: cómo terminar y cobrar el trabajo realizado
- El cliente usa tu trabajo sin pagar la totalidad: opciones para detener el uso no autorizado
- El cliente no aprueba ni rechaza los entregables: cómo forzar la aceptación
- Rescisión unilateral del cliente: qué compensación tienes derecho a recibir

**Pilar 5: Crecimiento y sistematización legal del negocio freelance**
Escala tu práctica con bases sólidas:
- Cuándo pasar de autónomo a sociedad: ventajas fiscales y legales del cambio
- Seguro de responsabilidad civil profesional: para qué sirve y cuándo es imprescindible
- Archivo y documentación: qué conservar y durante cuánto tiempo por obligación legal
- Uso de plataformas de contratos digitales: ventajas de la firma electrónica reconocida
- Revisión anual del contrato: cómo actualizarlo a medida que evoluciona tu práctica

Incluye tres plantillas de contrato comentadas (proyecto de precio fijo, retainer mensual, proyecto por horas) con explicación de cada cláusula en lenguaje no legal, adaptadas al contexto de un freelance profesional de habla hispana.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Contratos freelance profesionales, gestión de impagos y protección legal para autónomos',
                'vote_score'       => 45,
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
