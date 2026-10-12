<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills230Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing en un mundo post-cookies',
                'description'       => 'Adapta tu estrategia de marketing a un mundo sin third-party cookies: los datos de primera parte, el consent management y las alternativas a la segmentación basada en cookies que los mejores equipos de marketing ya están implementando.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en marketing digital y en privacidad de datos con experiencia ayudando a equipos de marketing a adaptarse a la eliminación de las third-party cookies y a las crecientes restricciones de privacidad. Necesito tu ayuda para rediseñar nuestra estrategia de marketing en un mundo donde las cookies de terceros ya no son fiables.

Mi contexto:
- Tipo de empresa y modelo de negocio: [ecommerce, SaaS, media, marketplace, B2B, etc.]
- Canales de marketing que más usamos actualmente: [paid social, display, programática, email, SEO, etc.]
- Dependencia actual de third-party cookies: [alta: casi toda la segmentación y el remarketing depende de cookies / media / baja: ya usamos principalmente first-party data]
- Estado actual de la first-party data: [sin estrategia de first-party data / tenemos datos pero no los aprovechamos / ya tenemos una estrategia en marcha]
- Principal preocupación: [pérdida de efectividad del remarketing / dificultad para medir el impacto de las campañas / pérdida de capacidad de segmentación / cumplimiento normativo]

Con ese contexto, dame:

1. EL FIN DE LAS THIRD-PARTY COOKIES: QUÉ CAMBIA EXACTAMENTE
¿Qué significa concretamente la eliminación de las third-party cookies para el marketing digital y qué no cambia? Explícame el mapa completo del impacto: qué capacidades pierdo con la eliminación de las cookies de terceros (el remarketing basado en comportamiento de navegación fuera de mi dominio, la segmentación de audiencias en plataformas de terceros, la atribución multi-touch que cruza dominios), qué capacidades no se ven afectadas (las cookies de primera parte en mi dominio, el email marketing, las audiencias de primera parte en las plataformas de paid social), y cómo el escenario real es más gradual y complejo que la narrativa de "death of cookies" (Safari y Firefox ya bloquean las third-party cookies, Chrome ha retrasado la eliminación, las IDs alternativas están emergiendo).

2. FIRST-PARTY DATA: LA BASE DE LA ESTRATEGIA POST-COOKIES
¿Cómo construyo una estrategia sólida de first-party data que reduce la dependencia de las cookies de terceros? Dame el plan de first-party data: los puntos de captura de datos propios que debo optimizar (el login o el registro en mi web, el newsletter, el programa de fidelización, las encuestas y el quizzing que intercambian valor por datos), los datos que debo recoger y para qué los usaré (los datos que informan la personalización, los que informan la segmentación en paid media, los que informan la medición), cómo diseño los value exchanges que hacen que el usuario quiera compartir sus datos (por qué el usuario da sus datos cuando recibe algo valioso a cambio), y cómo organizo y activo esa first-party data en mis sistemas de marketing.

3. CONSENT MANAGEMENT: CÓMO GESTIONARLO SIN DESTRUIR LA CONVERSIÓN
¿Cómo implemento un sistema de gestión del consentimiento que cumple el GDPR y la normativa de cookies sin destruir la tasa de conversión de la web? Dame la guía de consent management: la diferencia entre las cookies necesarias (no requieren consentimiento) y las de marketing y analítica (requieren consentimiento previo informado), las mejores prácticas del banner de cookies que maximiza la aceptación sin usar dark patterns ilegales (la jerarquía visual del botón de aceptar versus rechazar, el lenguaje claro, el acceso fácil a las preferencias), el impacto real del rechazo de cookies en la medición y la personalización y cómo lo compenso, y las CMPs (Consent Management Platforms) más usadas y sus diferencias.

4. ALTERNATIVAS A LA SEGMENTACIÓN BASADA EN COOKIES
¿Cuáles son las alternativas viables a la segmentación basada en third-party cookies para la publicidad digital? Dame el mapa de alternativas: la segmentación contextual (colocar anuncios en contenidos relacionados con el producto en lugar de seguir al usuario, y por qué está viviendo un renacimiento), las audiencias de primera parte en las plataformas (Customer Match de Google, Custom Audiences de Meta: cómo uso mis propios datos de CRM para crear audiencias en los medios de pago), las identidades basadas en email encriptado (UID2, RampID, y otros intentos de ID universal que reemplazan la cookie), el Privacy Sandbox de Google (Topics API, Protected Audience API) y en qué estado de adopción real está, y la publicidad en walled gardens (Amazon, Meta, Google) donde el tracking interno sigue siendo efectivo.

5. MEDICIÓN SIN COOKIES: LOS MODELOS ALTERNATIVOS
¿Cómo mido el impacto de las campañas de marketing cuando las cookies de terceros no permiten la atribución multi-touch tradicional? Dame el framework de medición post-cookies: el Media Mix Modeling (MMM) que mide el impacto de los canales de marketing a nivel agregado sin necesitar datos individuales (cuándo tiene sentido, qué datos necesita, qué precisión ofrece), la incrementalidad y los experimentos de holdout (cómo mido el impacto real de una campaña comparando los grupos expuestos con los grupos control), la atribución basada en datos propios (cómo uso la conversión offline y los datos de CRM para construir un modelo de atribución basado en mis datos), y la combinación correcta de estos métodos según el volumen de inversión y la sofisticación del equipo.

6. LA ESTRATEGIA DE CONTENIDO Y SEO COMO RESPUESTA A LA PÉRDIDA DE DATOS
¿Por qué la eliminación de las cookies de terceros hace que el SEO y el contenido sean más estratégicos y cómo refuerzo esa parte del marketing? Dame el argumento del SEO y el contenido orgánico como cobertura anti-cookies: el canal que no depende de cookies para funcionar (el usuario que llega desde Google por una búsqueda orgánica no requiere cookies de terceros para ser adquirido), cómo el contenido que construye audiencia propia (newsletter, comunidad, app) reduce la dependencia de los medios pagados basados en cookies, la estrategia de SEO que captura la intención de compra de mi cliente ideal con contenido útil (el blog, las guías, los comparadores), y cómo equilibrio la inversión entre los canales dependientes de cookies y los canales que no lo son.

7. EL PLAN DE TRANSICIÓN: CÓMO ADAPTAR LA ESTRATEGIA EN DOCE MESES
¿Cómo estructuro el plan de adaptación a un mundo post-cookies de forma que sea prioritario y realista para un equipo de marketing? Dame el roadmap de transición de doce meses: el audit de dependencia de cookies que determina cuánto de mi marketing actual depende de third-party cookies (y por tanto qué es urgente), las iniciativas de first-party data que puedo lanzar en los primeros tres meses con impacto inmediato (el programa de login, la segmentación de email, el consent management correcto), las iniciativas de medición alternativa que requieren más tiempo de implementación (el MMM, los experimentos de incrementalidad), y cómo comunico el impacto de estos cambios al equipo directivo de forma que justifique la inversión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Adaptar la estrategia de marketing a la eliminación de las third-party cookies: first-party data, consent management, segmentación alternativa y medición post-cookies.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Privacy by design en el desarrollo de software',
                'description'       => 'Integra la privacidad en el proceso de desarrollo desde el principio: el GDPR para developers, las técnicas de anonimización y pseudoanonimización y el proceso de Privacy Impact Assessment que el equipo técnico debe conocer.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en privacidad de datos y seguridad en el desarrollo de software con experiencia implementando privacy by design en equipos de ingeniería de distintos tamaños. Necesito tu ayuda para entender e implementar la privacidad como principio de diseño desde el inicio del ciclo de desarrollo.

Mi contexto:
- Stack tecnológico principal: [describe los lenguajes, frameworks y servicios en la nube que usas]
- Tipo de datos personales que procesa tu aplicación: [datos de usuario básicos, datos sensibles de salud o finanzas, datos de comportamiento, datos de menores, etc.]
- Estado actual de la privacidad en el desarrollo: [sin procesos formales / GDPR implementado a nivel jurídico pero no técnico / ya tenemos algunas prácticas pero no son consistentes]
- Número de developers en el equipo: [tamaño aproximado]
- Principal preocupación de privacidad ahora mismo: [cumplimiento del GDPR, una brecha de seguridad reciente, auditoría de privacidad inminente, lanzamiento en un mercado con regulación estricta]

Con ese contexto, dame:

1. PRIVACY BY DESIGN: LOS SIETE PRINCIPIOS EN CÓDIGO CONCRETO
¿Cómo se implementan los siete principios de privacy by design de Ann Cavoukian en decisiones concretas de arquitectura y código? Explícame cada principio con su traducción técnica: proactivo no reactivo (la privacy review antes de empezar a codificar, no después de una brecha), privacidad como configuración por defecto (la mínima recolección de datos como estado inicial de cualquier feature), privacidad embebida en el diseño (la privacidad en el modelo de datos y en la arquitectura, no como capa adicional), funcionalidad completa con privacidad (cómo construir features útiles sin necesitar más datos de los mínimos), seguridad de extremo a extremo (el cifrado en tránsito y en reposo, la gestión de claves), visibilidad y transparencia (los logs de acceso a datos, el audit trail), y respeto por la privacidad del usuario (los controles de usuario sobre sus propios datos).

2. EL GDPR PARA DEVELOPERS: LO QUE EL EQUIPO TÉCNICO DEBE SABER
¿Qué aspectos del GDPR tienen implicaciones directas en el código y en la arquitectura que el developer debe conocer? Dame el GDPR desde la perspectiva técnica: el principio de minimización de datos (cómo diseño el modelo de datos para recoger solo los campos necesarios para cada propósito), el derecho al olvido en la práctica técnica (cómo implemento la eliminación real de datos personales en un sistema con backups, logs y cachés), el derecho de portabilidad (cómo exporto los datos del usuario en formato estándar), la pseudoanonimización versus la anonimización real (la diferencia crítica entre los datos que siguen siendo personales y los que no), el data retention (cómo implemento la eliminación automática según el período de retención), y el registro de actividades de tratamiento en términos de qué datos técnicos necesito mantener.

3. ANONIMIZACIÓN Y PSEUDOANONIMIZACIÓN: CUÁNDO Y CÓMO
¿Cuándo uso anonimización versus pseudoanonimización y cómo las implemento correctamente en el código? Dame el análisis técnico de las técnicas: la diferencia crucial entre la pseudoanonimización (el dato puede reidentificarse con una clave, sigue siendo dato personal bajo el GDPR) y la anonimización real (la reidentificación es técnicamente imposible o desproporcionada, escapa al GDPR), las técnicas de anonimización que funcionan (generalización, supresión, adición de ruido, k-anonymity) y sus limitaciones (por qué la mayoría de los datasets que creemos anonimizados son reidentificables), cómo implemento la pseudoanonimización en la base de datos (separación de la tabla de identidades de la tabla de comportamiento, tokennización), y cuándo es suficiente la pseudoanonimización para el caso de uso.

4. EL PRIVACY IMPACT ASSESSMENT (DPIA): EL PROCESO TÉCNICO
¿Cómo realizo un Data Protection Impact Assessment para una nueva feature o sistema que procesa datos personales? Dame el proceso técnico del DPIA: cuándo es obligatorio (sistemas que implican tratamiento a gran escala, datos sensibles, elaboración de perfiles, monitoreo sistemático), cómo identifico y documento los flujos de datos personales del sistema (data flow mapping), cómo evalúo los riesgos de privacidad de la arquitectura (los riesgos de acceso no autorizado, de uso secundario de los datos, de divulgación involuntaria, de pérdida o destrucción), las medidas técnicas y organizativas que mitigan cada riesgo, y cómo documento el DPIA de forma que sirva como evidencia de cumplimiento frente a la autoridad de protección de datos.

5. GESTIÓN DE BRECHAS DE SEGURIDAD: EL PROTOCOLO TÉCNICO
¿Cómo implemento el sistema técnico que detecta, contiene y documenta una brecha de seguridad de datos personales en las setenta y dos horas que exige el GDPR? Dame el protocolo técnico de gestión de brechas: la arquitectura de logging y alertas que detecta el acceso no autorizado o la exfiltración de datos en tiempo real (qué herramientas uso: SIEM, IDS, anomaly detection), el proceso de contención inmediata (cómo revoco credenciales, cómo aislo sistemas comprometidos sin perder la evidencia forense), cómo determino el alcance de la brecha (qué datos han sido comprometidos, de cuántos usuarios, qué período de tiempo), la documentación técnica que necesito para notificar a la autoridad de protección de datos en setenta y dos horas, y el post-mortem técnico que evita que la misma brecha ocurra de nuevo.

6. SEGURIDAD DE DATOS POR DISEÑO: LAS PRÁCTICAS DE CÓDIGO SEGURO
¿Cuáles son las prácticas de código seguro que protegen los datos personales de los usuarios en el ciclo de desarrollo? Dame el checklist de seguridad por diseño para datos personales: el cifrado de datos sensibles en reposo (qué campos deben cifrarse en la base de datos, cómo gestiono las claves de cifrado), el cifrado en tránsito (TLS correctamente configurado, HSTS, certificate pinning en apps móviles), la gestión segura de contraseñas (bcrypt, argon2, salting y el proceso de migración desde hashes débiles), los controles de acceso basados en roles (RBAC: quién dentro de la empresa puede acceder a qué datos de usuario), la sanitización de inputs para prevenir inyecciones que exponen datos, y los headers de seguridad HTTP que protegen contra XSS y otros ataques que pueden comprometer datos de usuario.

7. CULTURA DE PRIVACIDAD EN EL EQUIPO DE DESARROLLO: CÓMO IMPLEMENTARLA
¿Cómo integro la privacidad en el proceso de desarrollo del equipo de forma que no sea solo responsabilidad del DPO o del equipo de seguridad? Dame el plan de cultura de privacidad técnica: la privacy review como parte del proceso de diseño técnico de nuevas features (la pregunta que el developer se hace antes de empezar: qué datos personales proceso y por qué), la formación del equipo en los conceptos básicos de GDPR y privacidad que un developer debe conocer (sin necesitar ser abogado), cómo integro las herramientas de análisis estático de código que detectan problemas de privacidad (logging de datos sensibles, almacenamiento de datos en claro), y cómo el security champion o privacy champion en el equipo de desarrollo puede ser el punto de contacto con el DPO sin bloquear la velocidad de entrega.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Implementar privacy by design en el equipo de desarrollo: GDPR técnico, anonimización, DPIA y cultura de privacidad que protege los datos desde el código.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'UX de privacidad: diseñar para el consentimiento',
                'description'       => 'Diseña los flujos de consentimiento y privacidad que son transparentes y usables: el dark pattern que no debes usar, el consent management bien diseñado y la UX que respeta al usuario sin esconder el botón de rechazo.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en UX de privacidad y en el diseño de experiencias de consentimiento con experiencia ayudando a equipos de producto a crear flujos de privacidad que respetan al usuario y cumplen la normativa sin destruir la conversión. Necesito tu ayuda para diseñar los flujos de privacidad de mi producto de forma que sean transparentes, usables y legalmente correctos.

Mi contexto:
- Tipo de producto o plataforma: [ecommerce, SaaS, app consumer, media digital, marketplace, etc.]
- Tipo de datos que recoges de los usuarios: [básicos de cuenta, comportamiento de navegación, datos de pago, datos de salud, localización, etc.]
- Estado actual del diseño de privacidad: [sin banners ni flujos de consentimiento / un banner básico copiado de otro sitio / ya tenemos una CMP pero con malos resultados / problema con una auditoría o queja de usuario]
- Mercados donde operas: [Europa con GDPR / UK con UK GDPR / California con CCPA / global / otro]
- Principal tensión que quiero resolver: [la tasa de aceptación de cookies es muy baja / el flujo de consentimiento es confuso para los usuarios / nos han señalado por usar dark patterns / queremos mejorar la experiencia sin comprometer el cumplimiento]

Con ese contexto, dame:

1. LOS PRINCIPIOS DEL DISEÑO DE PRIVACIDAD CENTRADO EN EL USUARIO
¿Cuáles son los principios de diseño que hacen que la experiencia de privacidad sea transparente y respetuosa sin ser punitiva para el usuario? Explícame los principios fundamentales del privacy UX: la transparencia genuina (el usuario entiende qué datos se recogen, para qué y quién los ve, sin necesitar leer quince páginas de política de privacidad), la agencia real (el usuario puede tomar decisiones significativas sobre sus datos, no solo hacer clic en aceptar para que le dejen en paz), el consentimiento granular (puede aceptar algunas categorías y rechazar otras, no todo o nada), la facilidad para cambiar de opinión (puede revocar el consentimiento tan fácilmente como lo dio), y la proporcionalidad (los flujos de privacidad son proporcionales a la sensibilidad de los datos que se recogen).

2. DARK PATTERNS EN PRIVACIDAD: LOS QUE NO PUEDES USAR
¿Cuáles son los dark patterns de privacidad que son ilegales bajo el GDPR o que la autoridad de protección de datos ha señalado explícitamente? Dame el catálogo de dark patterns que debo evitar: la dificultad artificial para rechazar (el botón de rechazar que requiere más clics que el de aceptar, el botón de rechazo oculto en una opción avanzada), el diseño que presupone el consentimiento (las casillas premarcadas, el texto que dice "si continúas navegando aceptas"), el scrolljacking y la confusión de interfaz (los botones que dicen cosas distintas a lo que hacen), el consent fatigue por diseño (bombardear al usuario con solicitudes hasta que acepta todo por cansancio), y las pantallas de "muro de cookies" que bloquean el acceso al contenido hasta que el usuario acepta la publicidad. ¿Qué sanciones están aplicando las autoridades de protección de datos por estos dark patterns?

3. EL BANNER DE COOKIES: DISEÑO QUE CUMPLE Y CONVIERTE
¿Cómo diseño el banner de cookies que cumple el GDPR y maximiza la tasa de aceptación de las categorías que el negocio necesita sin usar dark patterns? Dame el diseño del banner ideal: la jerarquía visual que presenta las opciones de aceptar, rechazar y personalizar de forma que sea equitativa (el botón de rechazar con el mismo nivel de visibilidad que el de aceptar, que es lo que exigen las autoridades de datos), el lenguaje claro que explica qué implica cada opción (los cookies analíticas, de marketing y de personalización explicados en términos que el usuario entiende), la arquitectura de información que permite la aceptación granular por categoría sin saturar al usuario, y las mejoras de diseño que aumentan la aceptación dentro del marco legal (el diseño visual que no minimiza el rechazo pero sí comunica el valor del intercambio).

4. EL CENTRO DE PREFERENCIAS DE PRIVACIDAD: DISEÑO DEL CONTROL DE USUARIO
¿Cómo diseño el centro de preferencias de privacidad donde el usuario gestiona sus datos y su consentimiento de forma que sea accesible y usable? Dame el diseño del privacy center: la arquitectura de la página de configuración de privacidad que agrupa las opciones de forma lógica para el usuario (no para el departamento jurídico), el diseño de los controles de cada categoría de datos (los toggles, los checkboxes y los mecanismos de selección que el usuario entiende intuitivamente), la explicación contextual de cada tipo de dato y su finalidad que ayuda al usuario a tomar una decisión informada, el flujo de ejercicio de derechos GDPR (el acceso a los datos, la portabilidad, la eliminación) diseñado para que un usuario no técnico pueda completarlo sin ayuda, y la confirmación y el feedback que da al usuario confianza de que su elección ha sido registrada.

5. ONBOARDING DE PRIVACIDAD: CÓMO PEDIR PERMISOS EN EL MOMENTO CORRECTO
¿Cómo diseño el onboarding de la aplicación para pedir los permisos de datos en el momento y el contexto donde tienen más sentido? Dame el framework de contextual permission requests: el principio del momento correcto (por qué pedir la localización al abrir la app por primera vez genera rechazo, pero pedirla en el momento de usar la feature de mapas genera aceptación), cómo diseño la explicación del permiso justo antes de pedirlo (el rationale que explica el valor específico del permiso en ese momento), la estrategia de permisos progresivos (pedir el mínimo al inicio y solicitar permisos adicionales a medida que el usuario descubre más funcionalidad), y cómo recupero la relación con el usuario que ha rechazado un permiso (cuándo y cómo volver a preguntarle sin generar fricción).

6. COMUNICACIÓN DE INCIDENTES DE PRIVACIDAD: UX DE LA CRISIS
¿Cómo diseño la comunicación al usuario en caso de una brecha de seguridad o de un incidente de privacidad de forma que preserve la confianza? Dame el diseño de la comunicación de crisis de privacidad: el timing de la comunicación (cuándo notificar al usuario, antes o después de la notificación a la autoridad de datos), el contenido mínimo que la comunicación debe incluir (qué datos se han visto afectados, qué riesgo implica para el usuario, qué acciones debe tomar el usuario, qué acciones hemos tomado nosotros), el tono de la comunicación (la diferencia entre la nota de prensa corporativa que minimiza el problema y la comunicación honesta que preserva la confianza), los canales de comunicación según la gravedad del incidente (email, notificación push, banner en la web, comunicado público), y cómo diseño el soporte al usuario afectado.

7. MEDIR LA CALIDAD DE LA UX DE PRIVACIDAD: LOS INDICADORES CORRECTOS
¿Cómo mido si el diseño de privacidad está funcionando bien para el usuario y para el negocio simultáneamente? Dame el sistema de métricas del privacy UX: las métricas de consentimiento (tasa de aceptación por categoría, tasa de personalización versus aceptación total, tasa de revocación posterior), las métricas de usabilidad del centro de preferencias (tasa de completación del flujo de ejercicio de derechos, tiempo hasta completar la portabilidad de datos, NPS del proceso de gestión de privacidad), las señales de confianza en privacidad (encuestas de percepción de privacidad de la marca, menciones positivas y negativas de privacidad en reviews y redes sociales), y cómo interpreto el dato de que una alta tasa de rechazo de cookies puede ser una señal de diseño deficiente o de falta de confianza en la marca, no solo de preferencias de usuario.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar flujos de privacidad y consentimiento que respetan al usuario y cumplen el GDPR: banners, centros de preferencia y comunicación de incidentes sin dark patterns.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Vender a compradores preocupados por la seguridad de datos',
                'description'       => 'Responde a las preguntas de privacidad y seguridad en el proceso de ventas: el security questionnaire, la certificación SOC 2 como argumento de ventas y el proceso de due diligence de privacidad que los compradores enterprise realizan antes de firmar.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en ventas enterprise y en la gestión de los procesos de due diligence de seguridad y privacidad que los compradores B2B realizan antes de contratar un proveedor de software o servicios. Necesito tu ayuda para navegar estas conversaciones de forma efectiva y convertirlas en una ventaja competitiva.

Mi contexto:
- Tipo de producto o servicio que vendo: [SaaS B2B, plataforma de datos, herramienta de productividad, solución de infraestructura, servicios gestionados, etc.]
- Tipo de datos que procesa mi producto: [datos de empleados, datos de clientes finales, datos financieros, datos de salud, datos de operaciones, etc.]
- Certificaciones y cumplimiento actuales: [ninguno / SOC 2 Type I o II / ISO 27001 / GDPR-ready / HIPAA / otro]
- Tamaño de los clientes con los que negocio: [SMB / mid-market / enterprise / grandes corporaciones con procesos de procurement formal]
- Principal fricción de seguridad en el proceso de ventas: [el security questionnaire que bloquea el cierre del deal / la revisión del DPA que tarda meses / el cliente pide una auditoría de seguridad / la falta de certificaciones elimina mi producto del proceso de selección]

Con ese contexto, dame:

1. POR QUÉ LA SEGURIDAD Y LA PRIVACIDAD SE HAN CONVERTIDO EN CRITERIO DE COMPRA
¿Por qué los compradores enterprise dedican cada vez más recursos al due diligence de seguridad y qué representa esto para el proceso de ventas? Explícame el cambio en el comportamiento del comprador: el GDPR y otras regulaciones han convertido al CISO y al DPO en stakeholders de la decisión de compra de cualquier software que procesa datos (ya no es solo decisión del usuario de negocio o del IT manager), las brechas de seguridad de proveedores de software han generado consecuencias legales y reputacionales que hacen que las empresas sean muy cuidadosas con quién tiene acceso a sus datos, y los procesos de procurement formal en enterprise incluyen ahora una revisión de seguridad que puede durar semanas o meses. ¿Cómo convierto esta fricción en una ventaja competitiva si mi producto es más seguro que la competencia?

2. EL SECURITY QUESTIONNAIRE: CÓMO GESTIONARLO SIN QUE BLOQUEE EL DEAL
¿Cómo gestiono el security questionnaire del cliente de forma eficiente y que refuerce la confianza en lugar de alargar el ciclo de ventas? Dame el proceso completo de gestión del security questionnaire: cómo creo el repositorio de respuestas estándar a las preguntas más frecuentes (para no tener que redactar desde cero cada vez), cómo involucro al equipo técnico o de seguridad en el proceso sin que se convierta en un cuello de botella, cómo gestiono las preguntas difíciles donde la respuesta honesta puede generar preocupaciones (los gaps de seguridad reales que tenemos y cómo los contextualizamos), cómo uso el questionnaire como oportunidad para demostrar la madurez de seguridad de mi empresa, y las herramientas que automatizan el proceso (Vanta, Drata, Trust, SafeBase) y cómo las uso para gestionar múltiples questionnaires simultáneos.

3. SOC 2, ISO 27001 Y OTRAS CERTIFICACIONES: SU VALOR EN VENTAS
¿Qué certificaciones de seguridad tienen más impacto en el proceso de ventas enterprise y cómo las uso como argumento? Dame el análisis del valor de cada certificación en ventas: el SOC 2 Type II (la certificación más demandada en el mercado estadounidense y cada vez más en Europa, qué cubre, cuánto tarda en obtenerse, el impacto real en el cierre de deals), el ISO 27001 (más reconocido en Europa, cómo se compara con SOC 2 en términos de cobertura y reconocimiento por parte del comprador), el GDPR compliance (la declaración de conformidad versus las certificaciones formales), y las certificaciones específicas del sector (HIPAA para healthcare, PCI DSS para pagos, FedRAMP para el sector público estadounidense). ¿Cuál debería priorizar según mi mercado y mi tipo de cliente?

4. EL DPA (DATA PROCESSING AGREEMENT): NEGOCIARLO SIN QUE BLOQUEE EL CIERRE
¿Cómo gestiono la negociación del Data Processing Agreement con clientes grandes sin que el proceso legal tarde meses y bloquee el cierre del deal? Dame el proceso de gestión del DPA: el DPA estándar que ofrezco proactivamente (por qué ofrecer el DPA antes de que lo pidan acelera el proceso y transmite confianza), los términos del DPA que los clientes enterprise suelen querer modificar y cómo gestiono esas negociaciones (las subprocessors, las medidas técnicas y organizativas, los plazos de notificación de brechas, las cláusulas de auditoría), cuándo acepto modificaciones del cliente versus cuándo defiendo mis términos estándar, y cómo involucro al departamento legal de forma que no bloquee la velocidad comercial.

5. EL CISO Y EL DPO COMO STAKEHOLDERS: CÓMO VENDERLES
¿Cómo llego y convenzo al CISO y al DPO del cliente que tienen que aprobar la compra de mi producto? Dame la estrategia de engagement con los stakeholders de seguridad: cómo identifico al CISO y al DPO en el proceso de ventas antes de que el usuario de negocio ya haya tomado la decisión (la revisión de seguridad tardía es mucho más difícil de gestionar que la incluida desde el inicio), el discurso de valor para el CISO que traduce las capacidades de seguridad de mi producto a su lenguaje y sus preocupaciones (el riesgo que reduce mi producto para la organización del cliente), la información que el DPO necesita para evaluar el cumplimiento (el registro de subprocessors, la localización de los datos, las cláusulas contractuales estándar), y cómo gestiono las reuniones técnicas de seguridad donde el CISO evalúa mi arquitectura.

6. CONSTRUIR UN TRUST CENTER: LA HERRAMIENTA QUE ACELERA LA VENTA
¿Qué es un Trust Center y cómo reduce la fricción de seguridad en el proceso de ventas enterprise? Dame el diseño del Trust Center como herramienta de ventas: la página pública de seguridad y privacidad que comparte proactivamente la información que los clientes enterprise buscan (las certificaciones, el subprocessor list, las políticas de seguridad, el estado del sistema, las actualizaciones de incidentes), cómo el Trust Center reduce el número de security questionnaires que llegan porque el cliente puede responder sus dudas directamente, las plataformas que permiten compartir documentos de seguridad con acceso controlado sin NDA (para el pentest report o el SOC 2 que no comparto públicamente pero sí con clientes en proceso de evaluación), y cómo posiciono el Trust Center en el proceso de ventas.

7. CONVERTIR LA SEGURIDAD EN VENTAJA COMPETITIVA
¿Cómo uso el nivel de seguridad y privacidad de mi producto como argumento diferencial frente a competidores que no tienen las mismas certificaciones? Dame la estrategia de diferenciación por seguridad: cómo comparo mi posición de seguridad con la de los competidores de forma objetiva y sin exagerar (el riesgo de hacer afirmaciones de seguridad que no puedo demostrar), cómo respondo cuando el cliente menciona que la competencia ofrece algo más barato aunque tenga menos controles de seguridad (el coste real de una brecha versus el ahorro de precio), cómo calculo y presento el ROI de la seguridad de mi producto para el cliente (el coste de una brecha de seguridad en su sector, el coste de una multa del GDPR, el coste reputacional), y cómo uso las certificaciones y el historial de seguridad impecable como argumento para defender el precio premium.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Gestionar el due diligence de seguridad y privacidad en ventas enterprise: security questionnaires, certificaciones, DPA y conversión de la seguridad en ventaja competitiva.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Data product management: construir sobre datos propios',
                'description'       => 'Construye el producto que usa los datos de los usuarios de forma ética y efectiva: el data model, el consentimiento informado y el balance entre la personalización que el usuario valora y la invasión de privacidad que destruye la confianza.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en data product management y en la ética del uso de datos en productos digitales con experiencia ayudando a product managers a construir productos basados en datos que generan valor para el usuario y para el negocio sin comprometer la privacidad ni la confianza. Necesito tu ayuda para construir la estrategia de datos de mi producto de forma ética y efectiva.

Mi contexto:
- Tipo de producto: [B2B SaaS, consumer app, marketplace, plataforma de contenidos, fintech, healthtech, etc.]
- Datos que ya recojo o que quiero recoger de los usuarios: [comportamiento de uso, preferencias, datos personales, datos transaccionales, datos de terceros, etc.]
- Estado actual de la estrategia de datos del producto: [sin estrategia / recogemos datos pero no los usamos bien / usamos datos para personalización básica / ya tenemos funcionalidades basadas en datos que queremos mejorar]
- Principal objetivo del uso de datos en el producto: [personalización de la experiencia, recomendaciones, optimización del onboarding, predicción de churn, detección de usuarios en riesgo, monetización de los datos]
- Principal preocupación ética o de privacidad: [usuarios preocupados por qué hacemos con sus datos / cumplimiento del GDPR en el uso de datos para el producto / reputación de privacidad de la empresa / asimetría de información entre la empresa y el usuario]

Con ese contexto, dame:

1. LA ESTRATEGIA DE DATOS DEL PRODUCTO: EL MARCO ÉTICO Y ESTRATÉGICO
¿Cómo diseño la estrategia de uso de datos del producto de forma que sea ética, legal y que genere valor genuino para el usuario? Explícame el marco de la data strategy ética: el principio de reciprocidad del dato (el usuario comparte sus datos porque recibe algo de valor a cambio, no porque no lo sabe), la transparencia sobre el uso de los datos (el usuario puede entender en lenguaje simple cómo usamos sus datos para mejorar su experiencia), el principio de mínima recolección (recogemos solo los datos que necesitamos para la funcionalidad que estamos construyendo, no los que podríamos usar algún día), y cómo la confianza en la privacidad es una ventaja competitiva sostenible mientras que la extracción de datos sin valor para el usuario es un riesgo creciente.

2. EL DATA MODEL DEL PRODUCTO: DISEÑAR PARA EL VALOR Y LA PRIVACIDAD
¿Cómo diseño el modelo de datos del producto de forma que sea útil para las funcionalidades que quiero construir y respetuoso con la privacidad del usuario? Dame el proceso de diseño del data model con privacidad integrada: cómo mapeo los datos que necesito para cada funcionalidad antes de recogerlos (la pregunta que hago para cada campo: ¿para qué funcionalidad específica usaré este dato?), cómo diseño el modelo de datos separando la identidad del usuario de su comportamiento (la pseudoanonimización por diseño), cómo implemento la granularidad correcta de los datos de comportamiento (el evento específico que necesito versus el log completo de todas las acciones que no sé para qué usaré), y cómo diseño el data retention por tipo de dato.

3. PERSONALIZACIÓN ÉTICA: EL LÍMITE ENTRE ÚTIL E INVASIVO
¿Cómo diseño la personalización del producto que el usuario valora sin cruzar la línea hacia la invasión de privacidad que destruye la confianza? Dame el framework de personalización ética: el espectro de personalización desde la configuración explícita del usuario (el usuario elige sus preferencias) hasta la inferencia basada en comportamiento (el producto aprende lo que el usuario quiere sin que lo pida), cuándo la personalización basada en inferencia añade valor (las recomendaciones de contenido o de producto que el usuario valora) versus cuándo parece invasiva (la personalización que hace sentir al usuario que lo estamos vigilando), el concepto de the creepy line (la línea donde la personalización que sorprende positivamente se convierte en la que asusta), y cómo diseño la transparencia de la personalización (el usuario puede ver por qué le estamos recomendando algo y puede ajustarlo).

4. CONSENTIMIENTO INFORMADO EN EL PRODUCTO: MÁS ALLÁ DEL BANNER DE COOKIES
¿Cómo diseño los flujos de consentimiento informado para las funcionalidades del producto que usan datos de forma no evidente? Dame el diseño del consentimiento contextual en el producto: la diferencia entre el consentimiento para cookies (que va en el banner de entrada) y el consentimiento para funcionalidades específicas del producto que usan datos de forma que el usuario podría no esperar (el análisis de sus emails para sugerencias, el acceso a su calendario para optimizaciones, el procesamiento de sus documentos para IA), cómo diseño la solicitud de consentimiento en el momento y contexto de la funcionalidad (just-in-time consent), el lenguaje claro que explica qué datos usamos, para qué y con qué resultado para el usuario, y cómo diseño la revocación del consentimiento y el impacto en la funcionalidad.

5. DATOS DE TERCEROS Y ENRIQUECIMIENTO: LOS LÍMITES QUE EL PM DEBE CONOCER
¿Qué límites legales y éticos existen para enriquecer los datos propios con datos de terceros y cómo los navego en el diseño del producto? Dame el análisis de los datos de terceros en el producto: los tipos de datos de terceros que puedo usar (datos de proveedores con los que el usuario tiene una relación y ha dado consentimiento para compartir), los que no puedo usar sin consentimiento específico (datos scrapeados, datos comprados de brokers sin consentimiento claro del usuario, datos inferidos de terceros que el usuario no conoce), cómo verifico que el proveedor de datos de terceros tiene el consentimiento necesario para compartirlos conmigo, y cómo comunico al usuario qué fuentes de datos externas usamos en el producto.

6. PRIVACIDAD DIFERENCIAL Y TÉCNICAS AVANZADAS DE PRIVACIDAD PARA PM
¿Qué técnicas avanzadas de privacidad debería conocer un PM que trabaja con datos para poder tomar mejores decisiones de producto? Dame la introducción a las técnicas de privacidad que el PM debe entender (sin necesitar ser el experto técnico que las implementa): la privacidad diferencial (cómo añadir ruido estadístico a los datos agregados para que las estadísticas sean útiles pero no permitan reidentificar individuos), el federated learning (cómo entrenar modelos de machine learning sin centralizar los datos de los usuarios), el zero-knowledge proof (cómo verificar información del usuario sin revelar la información misma), y para cada técnica, cuándo tiene sentido considerarla en el producto y qué preguntas hacerle al equipo técnico.

7. MEDIR EL IMPACTO ÉTICO: CÓMO EL PM EVALÚA LOS RIESGOS DE PRIVACIDAD
¿Cómo evalúo los riesgos de privacidad de una nueva funcionalidad del producto antes de que se construya? Dame el proceso de privacy review del PM para nuevas features: las preguntas que me hago para cada nueva funcionalidad que usa datos (¿qué datos nuevos necesito recoger? ¿los usuarios saben que recojo estos datos? ¿para qué más podría usar estos datos en el futuro? ¿qué pasa si se produce una brecha de estos datos?), el proceso de DPIA simplificado que el PM puede realizar antes de escalar al DPO (cuándo una feature requiere la revisión formal del DPO y cuándo el PM puede gestionar el análisis de forma autónoma), y cómo documento las decisiones de privacidad del producto de forma que sean trazables si hay una revisión regulatoria posterior.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar la estrategia de datos del producto de forma ética: data model con privacidad integrada, personalización responsable y consentimiento informado en el producto.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Privacidad de datos de empleados',
                'description'       => 'Gestiona los datos de los empleados en cumplimiento con el GDPR y la normativa laboral: los datos que puedes recoger, los que no, el monitoreo del trabajo en remoto y los derechos de los empleados sobre sus datos que el departamento de personas debe conocer.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en privacidad de datos en el ámbito laboral con experiencia ayudando a departamentos de Recursos Humanos a gestionar los datos de los empleados de forma legal y ética. Necesito tu ayuda para entender el marco legal y las mejores prácticas de privacidad de datos en el contexto de la gestión de personas.

Mi contexto:
- Tamaño de la empresa: [número aproximado de empleados]
- Modelo de trabajo: [presencial / híbrido / completamente remoto]
- Herramientas de gestión de personas que usamos: [HRIS, ATS, plataformas de performance, herramientas de comunicación como Slack o Teams, VPN corporativa, dispositivos de empresa, etc.]
- Estado actual del cumplimiento de privacidad de empleados: [sin política formal / política básica / GDPR implementado para clientes pero no revisado para empleados / ya tenemos proceso pero queremos revisarlo]
- Principal preocupación: [el monitoreo del trabajo en remoto / el tratamiento de datos de candidatos en el ATS / la transferencia de datos de empleados a proveedores de RRHH globales / los datos sensibles de salud en procesos de baja / la gestión de datos de ex-empleados]

Con ese contexto, dame:

1. EL MARCO LEGAL DE PRIVACIDAD EN LA RELACIÓN LABORAL
¿Qué marco legal regula el tratamiento de datos personales de los empleados y en qué se diferencia del marco general del GDPR? Explícame el marco específico: el GDPR se aplica a los datos de empleados pero con las particularidades de la relación laboral (la base legal del contrato de trabajo, la base legal de la obligación legal para los datos que exige la normativa laboral, y los límites del consentimiento en el contexto laboral donde el empleado raramente puede dar consentimiento libre por el desequilibrio de poder), las normativas laborales nacionales que añaden restricciones adicionales al tratamiento de datos de empleados (el Estatuto de los Trabajadores en España, las guías de la AEPD sobre vigilancia laboral), y cuándo el interés legítimo de la empresa justifica el tratamiento de datos sin necesitar el consentimiento del empleado.

2. QUÉ DATOS PUEDES Y NO PUEDES RECOGER DE LOS EMPLEADOS
¿Qué datos de los empleados puede recoger y tratar la empresa legalmente y cuáles están prohibidos o requieren condiciones especiales? Dame el mapa de datos de empleados: los datos que se pueden recoger por la base legal del contrato laboral (datos de identificación, datos bancarios para la nómina, datos de seguridad social, datos de formación y experiencia relevantes para el puesto), los datos que requieren una base legal específica o el consentimiento explícito (las fotografías para uso interno o público, los datos de geolocalización fuera del horario laboral, los datos biométricos para control de presencia), los datos especialmente protegidos que tienen restricciones adicionales (los datos de salud en el contexto de bajas médicas y adaptaciones de puesto, la afiliación sindical, las creencias religiosas relevantes para los festivos), y los datos que nunca puedes recoger sin una justificación muy específica (los datos de vida privada fuera del trabajo, las redes sociales personales).

3. EL MONITOREO DEL TRABAJO EN REMOTO: LOS LÍMITES LEGALES
¿Qué herramientas de monitoreo del trabajo en remoto son legales y cuáles constituyen vigilancia ilegal del empleado? Dame el análisis del monitoreo laboral: las herramientas de monitoreo que están dentro de los límites legales con los protocolos correctos (el registro de actividad en dispositivos de empresa con comunicación previa al empleado, los logs de acceso a sistemas corporativos por razones de seguridad, el control del uso del email corporativo dentro de los protocolos de la empresa), las herramientas que generan problemas legales significativos (el software de vigilancia que toma capturas de pantalla continuas, el monitoreo de la actividad de teclado y ratón, la grabación de audio o vídeo en el domicilio del empleado), los requisitos de transparencia que son obligatorios (informar al empleado de qué se monitorea, para qué, durante cuánto tiempo se guardan los datos), y cómo diseño la política de uso de dispositivos y sistemas corporativos que es legal y que los empleados conocen.

4. EL ATS Y LA PRIVACIDAD DE LOS CANDIDATOS
¿Cómo gestiono los datos de los candidatos en el proceso de selección de forma que cumpla el GDPR? Dame el proceso de privacidad en la gestión de candidatos: cuánto tiempo puedo retener el CV y los datos del candidato que no ha sido seleccionado (el período recomendado por las autoridades de datos, que habitualmente es de seis a doce meses), cómo obtengo el consentimiento del candidato para retener su perfil para futuras oportunidades de forma válida bajo el GDPR, qué información debo darle al candidato sobre cómo trataré sus datos en el proceso de selección, cómo gestiono la eliminación de los datos del candidato cuando lo solicita o cuando ha expirado el período de retención en el ATS, y qué datos puedo recoger en un proceso de selección y cuáles están prohibidos (el estado civil, el embarazo, la edad cuando no es relevante para el puesto).

5. TRANSFERENCIA DE DATOS DE EMPLEADOS A PROVEEDORES Y FILIALES INTERNACIONALES
¿Cómo gestiono legalmente la transferencia de datos de empleados a proveedores globales de RRHH o a filiales fuera de la Unión Europea? Dame el marco de transferencias internacionales de datos de empleados: las bases legales para transferir datos de empleados fuera de la UE (las decisiones de adecuación de la Comisión Europea, las Cláusulas Contractuales Tipo, el Marco de Privacidad de Datos UE-EEUU), los contratos de encargo de tratamiento que debo tener con cada proveedor de RRHH que accede a datos de mis empleados (Workday, SAP SuccessFactors, Personio, plataformas de nómina, herramientas de engagement), cómo proceso la transferencia de datos al HRIS cuando la empresa es adquirida o cuando hay una reestructuración que afecta a empleados de distintos países, y cómo informo a los empleados de que sus datos son accesibles desde fuera de la UE.

6. DERECHOS DEL EMPLEADO SOBRE SUS DATOS: CÓMO GESTIONARLOS
¿Cómo gestiono el ejercicio de los derechos del empleado sobre sus datos personales de forma que sea eficiente y que cumpla los plazos del GDPR? Dame el proceso de gestión de derechos en el contexto laboral: el derecho de acceso del empleado a sus datos (qué datos debe incluir la respuesta, cómo gestiono la solicitud cuando los datos están en múltiples sistemas de RRHH, el plazo de un mes para responder), el derecho de rectificación (cómo gestiono la corrección de datos incorrectos en los sistemas de RRHH sin afectar a la integridad de los registros históricos), el derecho de supresión aplicado a empleados (cuándo puede el empleado pedir que eliminemos sus datos, cuándo prevalece la obligación legal de la empresa de conservarlos), y cómo gestiono los datos del ex-empleado (qué conservo, por cuánto tiempo, qué elimino).

7. LA POLÍTICA DE PRIVACIDAD PARA EMPLEADOS: QUÉ DEBE INCLUIR
¿Qué debe incluir la política de privacidad de empleados (Employee Privacy Notice) para que sea completa y cumpla las obligaciones de transparencia del GDPR? Dame la estructura de la Employee Privacy Notice: la identificación del responsable del tratamiento y del DPO si existe, los tipos de datos personales que tratamos y para qué finalidades (con la base legal de cada tratamiento), los períodos de retención de cada categoría de datos, los destinatarios de los datos (los proveedores que acceden a los datos, las filiales, las autoridades públicas que pueden solicitarlos), los derechos del empleado y cómo ejercerlos, y cómo entrego y actualizo la política de privacidad de empleados de forma que haya evidencia de que los empleados la han recibido.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Gestionar los datos de empleados en cumplimiento con el GDPR: qué datos son legales, monitoreo laboral, ATS, transferencias internacionales y derechos del empleado.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Datos financieros y cumplimiento normativo',
                'description'       => 'Gestiona los datos financieros de la empresa en cumplimiento con la normativa: el almacenamiento seguro de datos contables, los períodos de retención legales y los riesgos de no gestionar correctamente los datos financieros sensibles.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en gestión de datos financieros y cumplimiento normativo con experiencia ayudando a departamentos de finanzas a implementar controles de datos que cumplen con la normativa contable, fiscal y de protección de datos. Necesito tu ayuda para diseñar la estrategia de gestión de datos financieros de mi empresa.

Mi contexto:
- Tipo de empresa y sector: [pyme / empresa mediana / gran empresa / sector financiero regulado / otro sector]
- País de operación principal: [España / otro país de la UE / operaciones internacionales]
- Herramientas financieras actuales: [ERP, software de contabilidad, plataformas de pago, herramientas de reporting, etc.]
- Estado actual del cumplimiento de datos financieros: [sin proceso formal / cumplimiento básico / proceso establecido que necesita revisión / auditados regularmente]
- Principal preocupación: [períodos de retención de datos / seguridad de los datos financieros / transferencia a asesores externos / cumplimiento del GDPR en datos financieros de clientes / riesgo de fraude interno]

Con ese contexto, dame:

1. QUÉ SON LOS DATOS FINANCIEROS Y POR QUÉ SU GESTIÓN ES ESPECIALMENTE CRÍTICA
¿Por qué los datos financieros requieren una atención especial en la gestión y el cumplimiento normativo? Explícame el mapa de datos financieros sensibles y las distintas normativas que los regulan: los datos contables que regulan las normas de contabilidad y la normativa fiscal (el Código de Comercio, la Ley del IRPF, el Impuesto de Sociedades), los datos de pagos y transacciones que regulan la normativa de servicios de pago y la normativa anti-blanqueo (PSD2, la Directiva Anti-Blanqueo), los datos financieros de clientes que también son datos personales bajo el GDPR (las facturas, las cuentas bancarias de clientes, el historial de pagos), y los datos financieros de empleados (nóminas, información fiscal) que tienen protección adicional. ¿Cuál es el riesgo específico de cada categoría?

2. PERÍODOS DE RETENCIÓN DE DATOS FINANCIEROS: LA GUÍA POR TIPO DE DOCUMENTO
¿Cuánto tiempo debo conservar cada tipo de documento y dato financiero y qué pasa si los elimino antes o si los conservo más tiempo del necesario? Dame la guía de períodos de retención por tipo de documento financiero en España: los libros contables y las cuentas anuales (seis años según el Código de Comercio, pero cuatro años para la Agencia Tributaria en la prescripción general, y diez años en algunos casos específicos), las facturas emitidas y recibidas (cuatro años desde que prescribe la posibilidad de comprobación fiscal), los documentos de nómina y cotizaciones sociales, los contratos de financiación y los documentos bancarios, y los datos financieros de clientes bajo el GDPR (dónde el período de retención fiscal puede entrar en conflicto con el derecho al olvido del cliente). ¿Cómo gestiono el conflicto entre la obligación legal de conservar y el derecho del GDPR a eliminar?

3. SEGURIDAD DE LOS DATOS FINANCIEROS: LOS CONTROLES MÍNIMOS
¿Cuáles son los controles de seguridad que debe implementar el departamento de finanzas para proteger los datos financieros de la empresa? Dame el checklist de seguridad de datos financieros: el control de acceso basado en roles al ERP y al software contable (quién puede ver qué, con qué granularidad: el contable que ve las facturas pero no los contratos de financiación, el director financiero que ve todo), la segregación de funciones que previene el fraude interno (quién puede crear proveedores, quién puede aprobar pagos, quién puede hacer la conciliación), el cifrado de los datos financieros almacenados y en tránsito (los datos de cuentas bancarias, los datos de tarjetas de pago), el backup y la recuperación ante desastres para los datos contables (con qué frecuencia, dónde se almacenan los backups, cuánto tiempo tarda la recuperación), y el log de auditoría de los accesos y cambios a los datos financieros.

4. DATOS FINANCIEROS DE CLIENTES Y GDPR: EL PUNTO DE INTERSECCIÓN
¿Cómo gestiono los datos financieros de clientes que son simultáneamente datos contables y datos personales bajo el GDPR? Dame el análisis de la intersección entre la normativa contable y el GDPR en los datos de clientes: las facturas de clientes (datos personales bajo el GDPR pero documentos contables con período de retención obligatorio), cómo gestiono la solicitud de derecho al olvido de un cliente cuando tengo obligación legal de conservar sus facturas (la solución de la restricción del tratamiento: conservo el dato para cumplir la ley pero no lo uso para ningún otro fin), los datos de tarjetas de pago de clientes (la normativa PCI DSS que se superpone al GDPR), y cómo informo correctamente al cliente en la política de privacidad de que conservaremos sus datos de facturación por razones legales más allá del período que él podría esperar.

5. TRANSFERENCIA DE DATOS FINANCIEROS A ASESORES EXTERNOS
¿Cómo gestiono la transferencia de datos financieros sensibles a asesores fiscales, auditores y consultores externos de forma segura y legal? Dame el proceso de gestión de datos financieros con terceros: el contrato de encargo de tratamiento o el contrato de confidencialidad que debo tener con cada asesor externo que accede a datos financieros de la empresa o de mis clientes, los mecanismos seguros de transferencia de datos financieros (por qué enviar un Excel con datos bancarios de clientes por email sin cifrar es un problema grave), el acceso mínimo necesario que doy a cada asesor (el auditor que solo ve las cuentas del período auditado, el asesor fiscal que accede al ERP solo durante el período de cierre fiscal), y cómo gestiono el fin de la relación con el asesor externo (la destrucción certificada de los datos financieros que tenía).

6. PREVENCIÓN DEL FRAUDE Y CUMPLIMIENTO ANTI-BLANQUEO
¿Qué controles de datos son obligatorios en la normativa anti-blanqueo y cómo los implemento en el departamento de finanzas? Dame el marco de cumplimiento anti-blanqueo para el departamento de finanzas: las obligaciones de Know Your Customer (KYC) que aplican a ciertos sectores (qué empresas tienen obligación formal de KYC y cuáles deben aplicar una diligencia debida simplificada), el registro y reporte de operaciones sospechosas al SEPBLAC (cuándo tengo obligación de reportar, cómo lo hago), los controles internos que reducen el riesgo de fraude interno en el ciclo de pagos (la doble firma en pagos por encima de cierto importe, la reconciliación independiente, las alertas de transacciones anómalas), y cómo implemento los controles de segregación de funciones en los sistemas financieros.

7. EL DEPARTAMENTO DE FINANZAS EN UNA AUDITORÍA DE PRIVACIDAD
¿Cómo preparo al departamento de finanzas para una auditoría de cumplimiento de privacidad de datos o para una inspección de la Agencia Tributaria? Dame la guía de preparación: el registro de actividades de tratamiento que debe tener el departamento de finanzas (los tratamientos de datos que realiza: nóminas, facturación de clientes, pagos a proveedores, reporting financiero), la documentación que debo tener lista para una inspección de la AEPD (el DPA con cada proveedor de software financiero, la política de retención de datos, los logs de acceso al ERP), la documentación para una inspección fiscal (los libros contables, el registro de facturas, los ficheros de declaraciones fiscales), y el proceso de respuesta ante una solicitud de información de una autoridad regulatoria que minimiza el tiempo de respuesta y el riesgo de errores.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Gestionar datos financieros en cumplimiento normativo: períodos de retención, seguridad, intersección con el GDPR y preparación para auditorías.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'GDPR y privacidad de datos: el marco legal completo',
                'description'       => 'Domina el reglamento de protección de datos y su aplicación práctica: el DPO, el registro de actividades de tratamiento, las brechas de seguridad y el régimen sancionador que hace que el cumplimiento sea una prioridad estratégica.',
                'prompt_content'    => <<<'PROMPT'
Eres un abogado experto en protección de datos y privacidad con experiencia implementando el cumplimiento del GDPR en empresas de distintos tamaños y sectores. Necesito tu ayuda para entender el GDPR en profundidad y para implementar un programa de cumplimiento que sea efectivo y proporcionado al riesgo.

Mi contexto:
- Tipo de organización: [startup, pyme, empresa mediana, corporación, entidad pública, asociación]
- Sector de actividad: [tecnología, salud, finanzas, retail, educación, medios, otro]
- Tipos de datos personales que tratamos: [datos básicos de usuarios, datos de empleados, datos sensibles de salud o financieros, datos de menores, etc.]
- Estado actual del cumplimiento: [sin proceso formal / iniciamos el cumplimiento pero está incompleto / cumplimiento establecido que necesita revisión / recientemente inspeccionados o sancionados]
- Principal preocupación: [¿necesitamos un DPO? / registro de actividades de tratamiento / gestión de brechas de seguridad / transferencias internacionales / el régimen sancionador / una auditoría inminente]

Con ese contexto, dame:

1. LOS PRINCIPIOS DEL GDPR: LA FILOSOFÍA QUE GUÍA TODA LA APLICACIÓN PRÁCTICA
¿Cuáles son los principios del GDPR y cómo guían cada decisión de cumplimiento? Explícame los siete principios del GDPR con su traducción práctica: la licitud, lealtad y transparencia (la base legal del tratamiento y la información al interesado), la limitación de la finalidad (no puedo usar los datos para un fin diferente del que los recogí), la minimización de datos (el campo del formulario que no necesito no debería estar en el formulario), la exactitud (el proceso para mantener los datos actualizados), la limitación del plazo de conservación (la política de retención y la eliminación efectiva), la integridad y confidencialidad (las medidas técnicas y organizativas de seguridad), y la responsabilidad proactiva (el accountability: no basta con cumplir, hay que poder demostrarlo).

2. LAS BASES LEGALES DEL TRATAMIENTO: CUÁNDO USAR CADA UNA
¿Cuál es la base legal correcta para cada tipo de tratamiento de datos y por qué elegirla bien es crucial? Dame el análisis de cada base legal del GDPR: el consentimiento (cuándo es la base correcta, cuándo no lo es por la asimetría de poder, los requisitos del consentimiento válido: libre, específico, informado, inequívoco y revocable), el contrato (cuando el tratamiento es necesario para ejecutar el contrato con el interesado), la obligación legal (cuando la ley obliga a tratar los datos), los intereses vitales (para emergencias que afectan a la vida), la misión de interés público (para entidades con mandato público), y el interés legítimo (el más flexible y el más arriesgado: cuándo aplica, el balancing test que debo realizar, y por qué no es un comodín para cualquier tratamiento).

3. EL DELEGADO DE PROTECCIÓN DE DATOS (DPO): CUÁNDO ES OBLIGATORIO Y QUÉ HACE
¿Cuándo es obligatorio nombrar un DPO, qué funciones tiene y qué pasa si no lo nombro cuando debería? Dame el análisis completo del DPO: los tres criterios del GDPR que obligan a nombrar un DPO (autoridad pública u organismo público, tratamiento a gran escala de categorías especiales de datos, monitoreo sistemático a gran escala), cómo interpreto el concepto de "a gran escala" y los factores que usa la AEPD para evaluar si aplica, las funciones del DPO (informar y asesorar, supervisar el cumplimiento, cooperar con la autoridad de control, ser el punto de contacto para los interesados), las garantías de independencia que debe tener el DPO (por qué no puede ser a la vez el responsable técnico o el director comercial), y cuándo tiene sentido nombrar un DPO voluntario aunque no sea obligatorio.

4. EL REGISTRO DE ACTIVIDADES DE TRATAMIENTO: QUÉ ES Y CÓMO SE HACE
¿Cómo elaboro el registro de actividades de tratamiento que exige el GDPR y qué información debe incluir? Dame la guía práctica del registro de tratamientos: quién está obligado a tenerlo (las organizaciones con más de doscientos cincuenta empleados, y también las más pequeñas si tratan categorías especiales de datos o si el tratamiento supone riesgo para los derechos de los interesados), qué información debe incluir cada actividad de tratamiento (la finalidad, las categorías de interesados y de datos, los destinatarios, las transferencias internacionales, los plazos de supresión, las medidas de seguridad), cómo estructuro el registro de forma que sea mantenible (no un documento Word sino una herramienta que actualizo cuando cambia el tratamiento), y cómo uso el registro como base del programa de cumplimiento.

5. LAS BRECHAS DE SEGURIDAD: EL PROTOCOLO LEGAL DE RESPUESTA
¿Qué obligaciones legales genera una brecha de seguridad de datos personales y cómo las cumplo dentro de los plazos del GDPR? Dame el protocolo legal de respuesta a brechas: la definición de brecha de seguridad bajo el GDPR (es más amplia que el hack: incluye la pérdida de un dispositivo, el envío de datos a la persona equivocada, el acceso por un empleado sin autorización), la evaluación del riesgo que determina si hay que notificar a la autoridad de protección de datos (el umbral de "probable riesgo para los derechos y libertades de las personas"), la notificación a la AEPD en setenta y dos horas (qué información debe incluir, cómo notificar si no tengo toda la información en ese plazo), cuándo debo notificar también a los interesados afectados (el umbral de "alto riesgo"), y el registro interno de las brechas que es obligatorio independientemente de si notificas o no.

6. TRANSFERENCIAS INTERNACIONALES DE DATOS: EL MARCO LEGAL POST-SCHREMS II
¿Cómo gestiono legalmente la transferencia de datos personales fuera de la Unión Europea en el contexto post-Schrems II? Dame el marco legal actualizado de transferencias internacionales: los mecanismos vigentes para transferir datos a países sin decisión de adecuación (las Cláusulas Contractuales Tipo de 2021 que reemplazaron a las antiguas, el Código de Conducta con supervisión de autoridad, las Normas Corporativas Vinculantes para grupos multinacionales), el Marco de Privacidad de Datos UE-EEUU (Data Privacy Framework): qué es, quién puede ampararse en él y el riesgo de que sea invalidado como sus predecesores, qué es la Transfer Impact Assessment (TIA) y cuándo debo realizarla, y los riesgos específicos de usar servicios cloud de proveedores estadounidenses (Google, Microsoft, AWS) para datos de ciudadanos europeos.

7. EL RÉGIMEN SANCIONADOR DEL GDPR: LOS RIESGOS REALES
¿Cuáles son las sanciones del GDPR en la práctica y cómo evalúo el riesgo sancionador de mi organización? Dame el análisis realista del régimen sancionador: los dos niveles de multa del GDPR (el nivel 1 de hasta 10 millones de euros o el 2% del volumen de negocio global, y el nivel 2 de hasta 20 millones o el 4%), qué infracciones corresponden a cada nivel, cómo las autoridades de protección de datos calculan realmente la multa (los factores atenuantes como la colaboración, la rapidez de respuesta y la ausencia de intención, y los agravantes como la reincidencia y el beneficio económico del tratamiento ilícito), los casos de sanción de la AEPD en España que ilustran qué conductas se persiguen más activamente, y por qué las multas millonarias son para las grandes empresas mientras que para las pymes el riesgo real es las multas de entre 5.000 y 100.000 euros que se están aplicando con regularidad.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Dominar el GDPR y diseñar el programa de cumplimiento: bases legales, DPO, registro de tratamientos, brechas de seguridad, transferencias internacionales y régimen sancionador.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Datos de clientes y privacidad en customer success',
                'description'       => 'Usa los datos de los clientes de forma ética y legal en el equipo de CS: qué datos puedes usar para el health scoring, los límites del uso de datos para personalizar la relación y la respuesta correcta cuando un cliente ejerce sus derechos GDPR.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en customer success y en la privacidad de datos en el contexto de la relación con clientes B2B con experiencia ayudando a equipos de CS a usar los datos de forma efectiva dentro de los límites legales. Necesito tu ayuda para entender cómo gestionar los datos de clientes en el equipo de CS de forma que maximice el valor que damos a los clientes y cumpla con el GDPR.

Mi contexto:
- Tipo de producto y mercado: [SaaS B2B, plataforma, servicios gestionados, etc.]
- Tamaño de los clientes que gestiono: [SMB, mid-market, enterprise, mix]
- Herramientas de CS que usamos: [Gainsight, ChurnZero, Totango, Salesforce, HubSpot, herramientas propias, etc.]
- Tipos de datos de clientes que usamos en CS: [datos de uso del producto, datos de contacto de usuarios de la cuenta, datos de comunicaciones con el cliente, datos de soporte, datos de NPS, etc.]
- Principal preocupación con la privacidad en CS: [no sé qué datos del cliente puedo usar legalmente / un cliente nos ha pedido que eliminemos sus datos / un cliente nos ha preguntado qué datos tenemos de él / queremos usar más datos pero no sé si tenemos el consentimiento]

Con ese contexto, dame:

1. QUÉ DATOS DE CLIENTES PUEDE USAR EL EQUIPO DE CS Y CON QUÉ BASE LEGAL
¿Qué tipos de datos de clientes puede usar legalmente el equipo de customer success y cuál es la base legal de cada uso? Dame el mapa de datos de CS y sus bases legales: los datos de uso del producto (el número de usuarios activos, las features que usa, el tiempo de uso, los eventos de comportamiento dentro de la plataforma) que se tratan bajo la base legal del contrato con la empresa cliente, los datos de contacto de los usuarios de la cuenta (nombre, email, cargo, teléfono) con la particularidad de que son datos personales de los empleados del cliente, los datos de comunicaciones con el cliente (los emails, las notas de reuniones, los tickets de soporte) y su tratamiento, y los datos de terceros que el CSM recoge sobre el cliente en LinkedIn o en fuentes públicas. ¿Cuándo el contrato entre empresas es suficiente base legal y cuándo necesito el consentimiento individual del usuario?

2. EL HEALTH SCORING Y LA PRIVACIDAD: CÓMO EQUILIBRAR EL ANÁLISIS Y LOS DERECHOS
¿Qué implicaciones de privacidad tiene el health scoring y la elaboración de perfiles de clientes que realiza el equipo de CS? Dame el análisis de privacidad del health scoring: la diferencia entre el health scoring sobre la empresa cliente (analizo el comportamiento de uso de la cuenta como organización, que es datos del contrato B2B) y el health scoring sobre los usuarios individuales (analizo el comportamiento de personas concretas, que son datos personales bajo el GDPR), cuándo la elaboración de perfiles individuales de usuarios del cliente puede requerir información al interesado o incluso su consentimiento, el principio de transparencia aplicado al health scoring (si el cliente pregunta cómo calculamos el health score, debemos poder explicárselo), y cómo diseño el health scoring de forma que minimice el uso de datos personales individuales y se base en datos agregados de la cuenta cuando sea posible.

3. PERSONALIZACIÓN DE LA RELACIÓN DE CS: LOS LÍMITES CORRECTOS
¿Hasta dónde puede llegar el CSM en el uso de datos para personalizar la relación con el cliente sin que resulte invasivo o problemático? Dame el framework de personalización ética en CS: el uso de datos de uso del producto para personalizar las recomendaciones y el contenido de los QBRs (legítimo y esperado por el cliente), el uso de datos de comportamiento del usuario individual para adaptar las comunicaciones del CSM (en qué momento cruzamos la línea de lo que el usuario espera), el uso de información personal sobre el contacto del cliente recogida en LinkedIn o fuentes externas para personalizar la conversación (los límites de lo que es conocimiento natural del contexto del cliente versus lo que puede parecer vigilancia), y cómo diseño las conversaciones de CS de forma que usen la personalización de datos sin que el cliente sienta que tiene menos privacidad de la que espera.

4. EL CLIENTE QUE EJERCE SUS DERECHOS GDPR: CÓMO RESPONDE EL CSM
¿Qué hace el equipo de CS cuando un usuario del cliente ejerce un derecho GDPR como el derecho al olvido o el derecho de acceso? Dame el protocolo de respuesta del CSM ante solicitudes de derechos: la primera decisión que el CSM debe tomar (esta solicitud la tramita el CSM o la deriva al DPO o al equipo legal), cómo identifico si es el usuario del cliente quien ejerce los derechos o si es el cliente empresa (y por qué la respuesta puede ser distinta: el usuario tiene derechos individuales, el cliente empresa tiene derechos contractuales), qué pasa cuando un usuario de la cuenta del cliente pide que eliminemos sus datos (la complejidad de que los datos del usuario están mezclados con los datos de la cuenta del cliente empresa), cómo comunico al cliente empresa que uno de sus usuarios ha ejercido derechos GDPR frente a nosotros, y los plazos que debo cumplir.

5. EL OFFBOARDING DEL CLIENTE Y LA ELIMINACIÓN DE DATOS
¿Qué obligaciones tenemos con los datos del cliente cuando termina el contrato y qué plazo tenemos para cumplirlas? Dame el proceso de gestión de datos en el offboarding: la cláusula del contrato que regula qué pasa con los datos del cliente al terminar el contrato (la obligación de devolver o eliminar los datos, el plazo, el formato de la devolución), cuánto tiempo puedo conservar los datos del cliente después del fin del contrato y con qué base legal (los datos de facturación que debo conservar por obligación fiscal, los datos de soporte que puedo conservar por interés legítimo, los datos de uso del producto que no tengo razón para conservar), cómo gestiono la eliminación efectiva en todos los sistemas donde hay datos del cliente (el CRM, el sistema de CS, el sistema de soporte, los backups), y cómo documento la eliminación de forma que pueda demostrarla si el cliente la solicita.

6. EL DPA CON EL CLIENTE: QUÉ ES Y POR QUÉ EL CSM DEBE ENTENDERLO
¿Qué es el Data Processing Agreement con el cliente y por qué el CSM debe conocerlo aunque no lo haya negociado? Dame la guía del DPA para el CSM: qué es el DPA y por qué existe (cuando mi empresa procesa datos personales de los usuarios del cliente en nombre del cliente, soy un encargado del tratamiento y el DPA regula esa relación), cuáles son las obligaciones que el DPA me impone en el trabajo diario del CSM (los datos del cliente que no puedo usar para otros fines, las transferencias a terceros que debo controlar, los incidentes que debo reportar al cliente en un plazo determinado), cómo respondo cuando el cliente pregunta al CSM sobre el cumplimiento del DPA (las preguntas que puedo responder directamente y las que derivo al equipo legal o al DPO), y qué pasa si el cliente quiere auditar el cumplimiento del DPA por nuestra parte.

7. FORMACIÓN EN PRIVACIDAD PARA EL EQUIPO DE CS: LO QUE TODOS DEBEN SABER
¿Qué conocimientos mínimos de privacidad de datos debe tener todo el equipo de customer success para no incurrir en riesgos legales en el trabajo diario? Dame el programa de formación en privacidad para CSMs: los conceptos que todo CSM debe entender (dato personal versus dato de empresa, base legal del tratamiento, derechos del interesado, qué es una brecha de seguridad), las situaciones de riesgo de privacidad que el CSM puede encontrar en su trabajo (el cliente que pide información sobre otro cliente, el usuario que pide que eliminemos sus datos, el email con datos personales enviado por error al contacto equivocado), los protocolos que debe seguir en cada situación (a quién contacta internamente, qué documentación guarda, qué responde al cliente), y cómo diseño una formación que sea práctica y no un curso teórico de GDPR que nadie aplica.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Gestionar los datos de clientes en customer success dentro del marco del GDPR: health scoring, personalización ética, derechos del usuario y offboarding de datos.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'GDPR para freelancers: cumplir siendo autónomo',
                'description'       => 'El freelance que maneja datos de clientes cumpliendo la normativa de privacidad: el registro de actividades, los contratos de encargo de tratamiento con clientes y los aspectos prácticos del GDPR para quien trabaja solo con clientes que son responsables del tratamiento.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en protección de datos con experiencia asesorando a profesionales autónomos y freelancers sobre sus obligaciones bajo el GDPR. Necesito tu ayuda para entender qué implica el GDPR para un freelance que trabaja con datos de clientes y cómo cumplirlo de forma práctica sin convertirlo en una carga burocrática desproporcionada.

Mi contexto:
- Tipo de servicio freelance que ofrezco: [diseño, desarrollo web, marketing digital, fotografía, asesoría, consultoría, copywriting, etc.]
- Tipo de datos con los que trabajo para mis clientes: [datos de usuarios o clientes del cliente, datos de empleados del cliente, datos de contactos de marketing, datos de ventas, otro]
- Número aproximado de clientes con los que trabajo: [pocos clientes grandes / muchos clientes pequeños]
- País de residencia y de los clientes principales: [España / UE / clientes internacionales]
- Principal preocupación con el GDPR: [¿soy responsable o encargado del tratamiento? / ¿necesito firmar un DPA con mis clientes? / ¿qué hago con los datos cuando termina el proyecto? / ¿la AEPD me puede sancionar a mí?]

Con ese contexto, dame:

1. EL FREELANCE BAJO EL GDPR: RESPONSABLE O ENCARGADO DEL TRATAMIENTO
¿Cuál es mi rol bajo el GDPR cuando trabajo con datos de clientes: soy responsable del tratamiento o encargado del tratamiento y qué implica cada rol? Explícame la distinción fundamental: el responsable del tratamiento (quien decide los fines y los medios del tratamiento: en general, el cliente que me contrata) versus el encargado del tratamiento (quien trata datos en nombre y por cuenta del responsable: en general, yo como freelance cuando trabajo con datos de mis clientes), los casos donde el freelance puede ser responsable del tratamiento (cuando recojo datos propios para mi propio negocio: mi propia lista de newsletter, los datos de mis propios clientes para facturación), y el impacto práctico de ser encargado: los contratos que debo firmar, las instrucciones del cliente que debo seguir, las obligaciones que tengo frente a la autoridad de protección de datos.

2. EL CONTRATO DE ENCARGO DE TRATAMIENTO (DPA): CUÁNDO LO NECESITO Y QUÉ INCLUYE
¿Cuándo tengo que firmar un DPA con mi cliente y qué debe incluir para que sea válido bajo el GDPR? Dame la guía práctica del DPA para freelancers: los casos donde el DPA es obligatorio (cuando proceso datos personales en nombre del cliente como parte del servicio: el desarrollador que construye la web del cliente y tiene acceso a su base de datos, el profesional de marketing que gestiona las campañas del cliente con acceso a los datos de leads, el diseñador que trabaja con fotos de clientes o empleados del cliente), los casos donde el DPA no es necesario (cuando solo proceso datos propios del cliente empresa, no datos de personas físicas, o cuando el acceso a datos personales es accesorio e incidental), el contenido mínimo del DPA que exige el GDPR artículo 28 (el objeto del tratamiento, la duración, la naturaleza del tratamiento, la finalidad, el tipo de datos, las categorías de interesados, las obligaciones y derechos del responsable), y dónde encuentro un modelo de DPA como freelance.

3. MIS PROPIOS DATOS BAJO EL GDPR: LA BASE DE MI NEGOCIO
¿Qué obligaciones del GDPR tengo como freelance sobre los datos de mis propios clientes y contactos? Dame el análisis de los datos del propio negocio freelance: los datos de mis clientes actuales y pasados que gestiono como responsable del tratamiento (los datos de contacto, los datos de facturación, el historial de proyectos), la base legal de ese tratamiento (el contrato para los datos necesarios para ejecutar el servicio, la obligación legal para los datos de facturación), cuánto tiempo debo conservar los datos de cada tipo (cuatro a seis años para los datos de facturación por obligación fiscal, el tiempo que duró la relación comercial más el período razonable posterior para los datos de proyectos), la información que debo dar a mis clientes sobre cómo trato sus datos (el aviso de privacidad en mi web y en las propuestas comerciales), y el registro de actividades de tratamiento que debo mantener.

4. EL NEWSLETTER Y EL MARKETING DIRECTO DEL FREELANCE: LAS REGLAS DEL CONSENTIMIENTO
¿Cómo gestiono la lista de contactos de mi newsletter o las comunicaciones de marketing de mi actividad freelance de forma que cumpla el GDPR? Dame el proceso de cumplimiento del marketing del freelance: los requisitos del consentimiento válido para el newsletter (la casilla no puede estar premarcada, el consentimiento debe ser específico para el newsletter, debo poder demostrar cuándo y cómo lo obtuve), cómo gestiono los contactos de networking que quiero incluir en mi lista (la diferencia entre el permiso implícito de quien te da la tarjeta y el consentimiento explícito que exige el GDPR para el marketing), el proceso de baja que debo tener y el tiempo máximo para gestionar las bajas, y cómo gestiono los datos de los seguidores en redes sociales (que en general son datos de las plataformas, no míos).

5. TRABAJAR CON SUBCONTRATISTAS: LAS OBLIGACIONES QUE TRANSMITO
¿Qué pasa cuando subcontrato parte del trabajo a otros freelancers o agencias y estos tienen acceso a datos personales de mis clientes? Dame el análisis de la cadena de encargados: cuando soy encargado del tratamiento de mi cliente y subcontrato a otro freelance que tendrá acceso a los datos, debo tener la autorización de mi cliente para la subcontratación y debo firmar un DPA con el subcontratista que imponga las mismas obligaciones de protección de datos, qué herramientas SaaS que uso para mi trabajo se consideran subprocesadores (el gestor de proyectos, el almacenamiento en la nube, el software de diseño, la plataforma de comunicación) y cómo gestiono la información al cliente sobre estas herramientas, y qué pasa si el subcontratista tiene una brecha de seguridad que afecta a datos del cliente.

6. SEGURIDAD DE LOS DATOS DE CLIENTES: LAS MEDIDAS MÍNIMAS DEL FREELANCE
¿Qué medidas de seguridad debe implementar un freelance para proteger los datos de sus clientes con los medios de que dispone como profesional individual? Dame el checklist de seguridad para el freelance: el dispositivo de trabajo (el disco duro cifrado, el gestor de contraseñas, el antivirus y el firewall actualizados, el bloqueo automático de pantalla), la gestión de accesos (contraseñas únicas y robustas para cada servicio, la autenticación en dos factores en las cuentas que tienen datos de clientes), el almacenamiento de datos de clientes (el uso de servicios en la nube con controles de acceso, la eliminación de datos cuando ya no son necesarios, los backups en caso de pérdida), la transferencia de datos con el cliente (cómo comparto archivos con datos personales de forma segura, por qué el email sin cifrar no es adecuado para datos sensibles), y qué hago si pierdo el ordenador o si sospecho que han accedido a mis cuentas.

7. LA AEPD Y EL FREELANCE: EL RIESGO SANCIONADOR REAL
¿Cuál es el riesgo real de que la AEPD sancione a un freelance por incumplimiento del GDPR y cuáles son las conductas más frecuentemente sancionadas? Dame el análisis del riesgo sancionador para autónomos: los casos de sanción de la AEPD que afectan a autónomos y profesionales pequeños (las sanciones por no tener el aviso de privacidad en la web, por incluir destinatarios no autorizados en el email, por no atender las solicitudes de derechos en plazo), el proceso de actuación de la AEPD cuando recibe una denuncia de un particular (la investigación previa, el procedimiento sancionador, los plazos), los factores que la AEPD valora para graduar la sanción (la intencionalidad, el número de afectados, si hay daño real, la colaboración del investigado), y por qué el riesgo más probable para un freelance no es la sanción económica sino el coste reputacional y el conflicto con el cliente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Cumplir con el GDPR como freelance: rol de encargado del tratamiento, DPA con clientes, gestión de datos propios y riesgo sancionador real para autónomos.',
                'vote_score'        => 36,
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
