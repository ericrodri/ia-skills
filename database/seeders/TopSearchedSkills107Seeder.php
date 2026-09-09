<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills107Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing sin cookies de terceros',
                'description'      => 'Prepara la estrategia de datos first-party: contextual targeting, cohort-based advertising y Privacy Sandbox de Google.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing digital especializado en estrategias de datos first-party y en la transición hacia un entorno cookieless. Las cookies de terceros están desapareciendo: Safari y Firefox ya las bloquean por defecto, y Chrome ha anunciado su eliminación progresiva. El marketing que dependía de las cookies de seguimiento entre sitios necesita reinventarse. Ayúdame a construir una estrategia de marketing preparada para este nuevo entorno.

**Contexto de mi empresa:**
[Describe tu empresa: tipo de negocio, canales de marketing actuales, dependencia actual de cookies de terceros (retargeting, audiencias similares en Meta/Google), volumen de tráfico y si tienes base de datos propia]

**Lo que necesito que me expliques y planifiques:**

1. **Por qué desaparecen las cookies de terceros y qué cambia exactamente:** Explica la diferencia entre cookies first-party (las que establece tu propio dominio) y third-party (las que establecen dominios externos), por qué los navegadores las están bloqueando, y qué capacidades de tracking y targeting perderé cuando esto ocurra completamente: retargeting cross-site, lookalike audiences basadas en píxel, atribución multi-touch, frecuencia de caps entre sitios.

2. **Estrategia de datos first-party:** Los datos que recojo directamente de mis usuarios son el activo más valioso que me queda. Diseña una estrategia para construir y activar mi base de datos first-party: formularios de captación de emails con valor real para el usuario, programas de fidelización, encuestas, login social y cuentas de usuario, y cómo enriquecer esos datos progresivamente (progressive profiling).

3. **Contextual targeting: volver a los orígenes:** Antes de las cookies, la publicidad funcionaba por contexto. Explica cómo implementar contextual targeting moderno: selección de medios por afinidad temática con mi audiencia, keyword targeting en display y vídeo, y cómo usar herramientas de brand safety junto con brand suitability para aparecerme en los entornos adecuados sin necesitar datos de usuarios.

4. **Privacy Sandbox de Google: qué es y qué implica para mi estrategia:** Google está desarrollando APIs en Chrome para reemplazar las cookies con modelos preservadores de privacidad. Explica qué son las API Topics (targeting por categorías de interés), Protected Audience (retargeting sin seguimiento entre sitios) y Attribution Reporting (conversiones sin cookies). Qué debo hacer para prepararme y cómo pueden los anunciantes acceder a estas capacidades.

5. **Server-side tracking como alternativa técnica:** Una de las soluciones más robustas es mover el tracking al servidor. Explica cómo funciona el server-side tagging (con Google Tag Manager Server-Side, por ejemplo), qué datos puedo seguir midiendo con precisión, cuáles son las implicaciones legales bajo el RGPD y cómo implementarlo sin perder la granularidad que tenía antes.

6. **Email marketing y CRM como canales de owned media:** Si no puedo rastrear a mis usuarios por la web, necesito traerlos a mis canales propios. Explica cómo potenciar el email marketing como canal principal: segmentación basada en comportamiento dentro de la newsletter, automatizaciones basadas en engagement real y estrategias para aumentar la lista de suscriptores de forma orgánica.

7. **Modelos de atribución en un mundo sin cookies:** La atribución multi-touch que dependía de cookies entre sitios ya no funciona. Explica los modelos alternativos: atribución basada en datos first-party (last-click sobre parámetros UTM propios), modelos de media mix modeling (MMM) econométrico, y las encuestas post-compra (Customer Survey Attribution). Cuál es el más adecuado según mi presupuesto y volumen.

8. **Plan de transición a 12 meses:** Entrega un roadmap para migrar mi estrategia de marketing hacia un modelo cookieless: auditoría inicial de dependencias, priorización de iniciativas de datos first-party, implementación técnica de server-side tracking, y métricas para medir el impacto de la transición.

El mundo sin cookies no es el fin del marketing digital: es una oportunidad para las marcas que han construido relaciones genuinas con sus audiencias. Ayúdame a ser una de ellas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Rediseñar la estrategia de marketing digital para funcionar sin cookies de terceros.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Threat modeling para aplicaciones',
                'description'      => 'STRIDE, DREAD y los diagramas de amenaza que encuentran vulnerabilidades antes de que lo haga el atacante.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de seguridad especializado en threat modeling con experiencia en aplicaciones web, APIs y sistemas distribuidos. El threat modeling es la práctica de identificar y priorizar amenazas de seguridad durante el diseño del sistema, no después de que el atacante las haya explotado. Es la forma más rentable de invertir en seguridad: prevenir cuesta mucho menos que remediar. Necesito que me guíes para aplicar threat modeling a mi aplicación.

**Descripción de mi aplicación:**
[Describe la arquitectura de tu aplicación: frontend, backend, APIs, bases de datos, servicios de terceros, autenticación, datos que maneja y quiénes son los usuarios]

**Lo que necesito que me expliques y apliques:**

1. **Fundamentos del threat modeling: los cuatro pasos:** Explica el proceso estándar de threat modeling: (1) ¿Qué estamos construyendo? (modelado del sistema), (2) ¿Qué puede salir mal? (identificación de amenazas), (3) ¿Qué vamos a hacer al respecto? (mitigaciones), (4) ¿Lo hemos hecho bien? (validación). Para mi aplicación, aplica cada uno de estos pasos de forma concreta.

2. **Construcción del Diagrama de Flujo de Datos (DFD):** El DFD es la herramienta central del threat modeling. Explica cómo construir un DFD de nivel 0 (contexto del sistema) y de nivel 1 (procesos internos) para mi aplicación, incluyendo: entidades externas (usuarios, sistemas de terceros), procesos (funcionalidades de la app), almacenes de datos (bases de datos, cachés, sesiones) y flujos de datos (qué datos se mueven entre cada elemento). Indícame cómo señalar en el diagrama los límites de confianza (trust boundaries).

3. **Metodología STRIDE: identificar amenazas por categoría:** STRIDE es el framework más usado para identificar amenazas de forma sistemática. Para cada componente y flujo de mi diagrama, analiza las seis categorías: Spoofing (suplantación de identidad), Tampering (manipulación de datos), Repudiation (negación de acciones), Information Disclosure (fuga de información), Denial of Service (denegación de servicio) y Elevation of Privilege (escalada de privilegios). Dame al menos dos amenazas concretas por categoría para mi aplicación específica.

4. **Metodología DREAD: priorizar amenazas por riesgo:** Una vez identificadas las amenazas, necesito priorizarlas. Explica cómo usar DREAD para puntuar cada amenaza en cinco dimensiones: Damage (daño potencial), Reproducibility (facilidad de reproducción), Exploitability (facilidad de explotación), Affected users (impacto en usuarios) y Discoverability (facilidad de descubrimiento). Para las cinco amenazas más críticas de mi aplicación, dame una puntuación DREAD razonada.

5. **Mitigaciones para las amenazas identificadas:** Para cada amenaza priorizada, propón mitigaciones concretas a nivel de código, arquitectura y configuración: controles de autenticación y autorización (OAuth 2.0, RBAC, MFA), protección contra inyecciones (SQL injection, XSS, SSRF), cifrado de datos en reposo y en tránsito, rate limiting y protección contra DoS, logging y alertas de seguridad.

6. **Threat modeling de APIs REST y GraphQL:** Las APIs son la superficie de ataque más expuesta en las aplicaciones modernas. Aplica el threat modeling específicamente a mi capa de API: autenticación (API keys, JWT, OAuth), autorización a nivel de objeto y de campo (IDOR, BOLA), rate limiting y throttling, exposición de datos excesiva en las respuestas y validación de entrada.

7. **Integración del threat modeling en el SDLC:** El threat modeling no es un ejercicio puntual: debe repetirse cuando cambia la arquitectura o se añaden nuevas funcionalidades. Explica cómo integrarlo en el proceso de desarrollo: en qué momento del sprint o del ciclo hacer el threat model de una nueva feature, cómo documentar los resultados en tickets de seguridad y cómo hacer revisiones periódicas del threat model global.

8. **Herramientas para threat modeling:** Explica las herramientas más útiles para construir DFDs y gestionar amenazas: OWASP Threat Dragon, Microsoft Threat Modeling Tool, IriusRisk, y herramientas de diagramación como draw.io o Miro. Para un equipo pequeño sin presupuesto, cuál es la opción más práctica.

El objetivo del threat modeling no es encontrar todos los bugs de seguridad: es pensar como el atacante antes de que el atacante piense en nosotros. Ayúdame a hacerlo bien.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Identificar y priorizar vulnerabilidades de seguridad durante el diseño de una aplicación.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Privacy UX',
                'description'      => 'Diseña las experiencias de consentimiento, configuración de privacidad y gestión de datos que respetan al usuario sin frustrarle.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador UX especializado en privacidad y en el diseño de interfaces que respetan los derechos de los usuarios. La privacidad digital se ha convertido en una responsabilidad de diseño: las banners de cookies confusas, las configuraciones de privacidad enterradas en menús inaccesibles y los dark patterns que engañan al usuario para que acepte más de lo que quiere son problemas de UX tanto como de ética y de cumplimiento legal. Necesito que me ayudes a diseñar experiencias de privacidad que sean honestas y usables.

**Contexto de mi producto:**
[Describe tu producto o plataforma: qué datos recoges, para qué los usas, qué opciones de consentimiento o configuración ofreces actualmente y cuáles son tus principales tensiones entre privacidad y negocio]

**Lo que necesito que me guíes a diseñar:**

1. **Principios del Privacy UX: diseñar para la confianza:** Explica los principios fundamentales del diseño centrado en la privacidad: transparencia (el usuario sabe qué datos se recogen y para qué), control (puede gestionar sus preferencias de forma genuina), minimización (solo pedimos lo que necesitamos) y privacidad por defecto (la opción más privada es la predeterminada). Cómo estos principios se traducen en decisiones concretas de diseño.

2. **Banners de consentimiento de cookies que cumplan y conviertan:** El banner de cookies es a menudo la primera interacción del usuario con el producto. Diseña un banner que cumpla con el RGPD y las directrices del CEPD (no puede haber "aceptar todo" más grande que "rechazar todo", el rechazo debe ser igual de fácil que la aceptación) pero que también sea claro, rápido de entender y no deje al usuario con la sensación de que le están manipulando.

3. **Arquitectura de preferencias de privacidad:** Los usuarios necesitan poder cambiar sus preferencias después de haber dado el consentimiento inicial. Diseña un centro de privacidad accesible, comprensible y completamente funcional: categorías de tratamiento explicadas en lenguaje humano, controles granulares pero no abrumadores, confirmación clara de cada cambio y acceso fácil desde cualquier punto de la aplicación.

4. **Dark patterns de privacidad: identificarlos y eliminarlos:** La AEPD y el CEPD han publicado guías específicas sobre dark patterns de privacidad. Explica los más comunes: confirmshaming ("No, prefiero no proteger mis datos"), obstruction (hacer muy difícil rechazar o revocar), visual interference (hacer el botón de aceptar más visible que el de rechazar), hidden in plain sight (enterrar la información relevante en muros de texto), y cómo auditarlos en un producto existente y eliminarlos.

5. **Gestión de los derechos RGPD en la interfaz:** El RGPD reconoce derechos al usuario: acceso, rectificación, supresión, portabilidad, oposición y limitación del tratamiento. Diseña los flujos de interfaz para cada uno: cómo el usuario solicita sus datos, cuánto tarda en recibirlos, cómo solicita la eliminación de su cuenta, cómo descarga sus datos en formato portable. Estos flujos deben ser claros, seguros y no disuasorios.

6. **Onboarding con privacidad integrada:** El onboarding es el momento en que el usuario da más permisos y comparte más datos. Diseña un onboarding que pida los permisos en el momento en que tienen sentido (justo-in-time permission requests), que explique por qué se pide cada dato antes de pedirlo, y que permita al usuario avanzar con permisos mínimos y ampliarlos progresivamente.

7. **Comunicación sobre cambios en la política de privacidad:** Cuando la política de privacidad cambia, la mayoría de las empresas envían un email que nadie lee con un PDF de 20 páginas. Diseña una comunicación de cambios de privacidad que sea honesta, clara, resalte los cambios relevantes (no los que favorecen a la empresa) y dé al usuario una acción genuina (aceptar los nuevos términos o eliminare su cuenta sin penalización).

8. **Testing y métricas de Privacy UX:** Cómo medir si mis diseños de privacidad están funcionando: tasa de rechazo de cookies (un alto rechazo puede indicar que los usuarios entienden lo que se les pide, lo cual es positivo), solicitudes de ejercicio de derechos recibidas (un bajo número puede indicar que los usuarios no saben que pueden ejercerlos), y cómo hacer research cualitativo sobre la percepción de privacidad de mis usuarios.

El Privacy UX no está en tensión con el buen diseño: una interfaz honesta que respeta al usuario es siempre mejor diseño. Ayúdame a construir esa interfaz.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar experiencias de privacidad honestas, usables y conformes con el RGPD.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de soluciones de ciberseguridad',
                'description'      => 'Cómo vender seguridad a empresas que creen que el problema no va con ellas: el proceso y los mensajes que funcionan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas especializado en soluciones de ciberseguridad con experiencia vendiendo a empresas medianas y grandes en España. La venta de ciberseguridad tiene un reto único: el cliente no quiere el producto; no quiere necesitarlo. Nadie compra una solución de seguridad porque le emocione: la compra porque alguien le ha convencido del riesgo de no tenerla o porque ya ha sufrido un incidente. Necesito que me ayudes a vender mejor sin mentir sobre el miedo.

**Contexto de mi empresa:**
[Describe qué tipo de solución de ciberseguridad vendes: EDR, SIEM, gestión de identidades, formación en seguridad, pentesting, SOC as a Service, compliance, etc., y a qué tipo de cliente te diriges]

**Lo que necesito que me expliques:**

1. **El mapa de decisores en la compra de ciberseguridad:** La venta de seguridad raramente la decide una sola persona. Explica el comité de compra típico en una empresa mediana: el CISO o responsable de seguridad (el técnico que evalúa la solución), el CTO o Director de IT (el que gestiona el presupuesto técnico), el CFO (el que aprueba el gasto) y el CEO o Consejo (que en incidentes grandes toma la decisión final). Para cada uno, qué mensaje le importa y cuál es su mayor miedo.

2. **El mensaje que mueve la conversación de seguridad:** "Nuestro producto protege tu infraestructura" es un mensaje que no vende. Explica cómo construir un mensaje de ventas en ciberseguridad que funcione: anclado en el coste real de un incidente (tiempo de inactividad, coste de respuesta, multas regulatorias, daño reputacional), con ejemplos del sector del cliente y sin exagerar las amenazas de forma que el cliente perciba que le estás manipulando.

3. **El proceso de venta consultivo en seguridad:** La venta de seguridad requiere primero educar al cliente sobre su postura de riesgo actual. Explica cómo estructurar el proceso: la primera conversación de discovery (cuáles son los activos críticos, cuáles son los incidentes pasados, qué regulación aplica), la evaluación del gap de seguridad, la propuesta de solución y el business case financiero. Cómo pasar de ser un vendedor a ser un asesor de confianza.

4. **Gestionar la objeción "nosotros no somos un objetivo":** Esta es la objeción más común y más peligrosa. Explica con datos y narrativa por qué las empresas medianas son objetivos frecuentes (ransomware no discrimina, los ataques a la cadena de suministro, los hackers van a las empresas más fáciles no a las más grandes), cómo presentar casos reales del sector del cliente y cómo hacer una demostración práctica del riesgo sin ser alarmista.

5. **El ciclo de ventas largo: cómo mantener vivo el proceso:** Las ventas de ciberseguridad pueden durar entre tres y doce meses. Explica cómo mantener el engagement del cliente durante ese tiempo: hitos de avance con pequeñas entregas de valor (un análisis de vulnerabilidades gratuito, un taller de concienciación), nurturing con contenido relevante (informes de amenazas del sector, alertas de vulnerabilidades que afectan a su stack) y cómo gestionar los cambios de interlocutor durante el proceso.

6. **El POC (Proof of Concept) como herramienta de cierre:** En ciberseguridad, los clientes exigen probar antes de comprar. Explica cómo diseñar un POC que tenga éxito: criterios de éxito acordados por escrito antes de empezar, alcance limitado pero representativo, acompañamiento técnico durante el POC para garantizar que se configura bien, y cómo presentar los resultados del POC de forma que el cliente vea el valor.

7. **Compliance y regulación como acelerador de la venta:** La regulación (ENS, NIS2, DORA, ISO 27001, PCI DSS) es una de las mayores razones por las que las empresas compran seguridad cuando no lo harían por iniciativa propia. Explica cómo usar el compliance como palanca de venta: qué normativas aplican a qué sectores, cuáles tienen fechas límite próximas que crean urgencia, y cómo posicionar tu solución como la respuesta a un requisito regulatorio concreto.

8. **Renovaciones y expansión en ciberseguridad:** La relación con el cliente no termina con la venta. Explica cómo asegurar la renovación (la demostración continua del valor: informes de incidentes bloqueados, métricas de mejora de la postura de seguridad) y cómo ampliar la cuenta (venta cruzada de módulos adicionales, expansión a otros departamentos o filiales).

La venta de ciberseguridad es una venta de confianza. El cliente te compra porque cree que sabes más sobre su riesgo de lo que él sabe. Ayúdame a ganarme esa confianza.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Vender soluciones de ciberseguridad de forma efectiva y honesta a empresas que subestiman su riesgo.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Privacy by default en el producto',
                'description'      => 'Más allá del RGPD: diseña el producto para que la opción más privada sea la predeterminada en cada funcionalidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Manager especializado en privacidad con experiencia implementando los principios de privacy by design y privacy by default en productos digitales. El RGPD no es solo cumplimiento legal: es un marco de diseño de producto que, bien aplicado, genera confianza y diferenciación competitiva. Privacy by default significa que, sin que el usuario tenga que hacer nada, la configuración más privada ya está activa. Necesito que me ayudes a integrar este principio en el desarrollo de mi producto.

**Contexto de mi producto:**
[Describe el tipo de producto, los datos que recoge, las funcionalidades que implican tratamiento de datos personales y cuál es tu posición actual respecto a la privacidad: qué haces bien y qué sabes que debes mejorar]

**Lo que necesito que me expliques y apliques:**

1. **Privacy by Design vs Privacy by Default: las diferencias prácticas:** Explica la distinción entre los dos conceptos: Privacy by Design (la privacidad está incorporada en la arquitectura del sistema desde el principio) y Privacy by Default (sin acción del usuario, la configuración predeterminada es la más privada posible). Para mi producto, identifica dónde aplica cada uno y dónde actualmente estoy haciendo lo contrario.

2. **Auditoría de privacidad del producto actual:** Antes de mejorar, necesito saber dónde estoy. Diseña un checklist de auditoría de privacidad para product managers: ¿qué datos recojo que no necesito? ¿Qué configuraciones son "share by default" cuando deberían ser "private by default"? ¿Dónde expongo datos a terceros sin que el usuario lo sepa? ¿Qué funcionalidades activan el tracking sin consentimiento explícito?

3. **Privacy by Default en el registro y onboarding:** El momento del registro es donde más datos se piden y donde más configuraciones se establecen. Diseña el flujo de registro y onboarding bajo privacy by default: pedir solo los datos imprescindibles para el servicio (minimización), no pre-marcar ninguna casilla de marketing o compartición de datos, configurar la visibilidad del perfil como privada por defecto, y pedir permisos de notificación y geolocalización solo cuando sean necesarios para una funcionalidad específica.

4. **Configuración de privacidad en el perfil y las funcionalidades:** Para cada funcionalidad de mi producto que implique visibilidad o compartición de datos, propón la configuración predeterminada más privada razonable: quién puede ver mi perfil, quién puede ver mi actividad, si aparezco en búsquedas, si mis datos se usan para entrenar modelos de IA, si mi comportamiento en la plataforma se comparte con anunciantes. Explica cómo estructurar estas opciones de forma que sean comprensibles y genuinas.

5. **Minimización de datos como decisión de producto:** Cada campo de formulario, cada evento de analytics que registras y cada cookie que estableces es una decisión de producto. Explica cómo incorporar la minimización de datos en el proceso de diseño de features: la pregunta "¿necesitamos realmente este dato?" como parte del refinement del backlog, el principio de proporcionalidad (si un dato es muy sensible, la funcionalidad que habilita debe justificarlo) y cómo manejar la presión del equipo de datos o marketing para recoger más.

6. **Retención de datos y derecho al olvido en el producto:** Los datos no deben guardarse para siempre. Diseña la política de retención de datos desde el producto: períodos de retención por tipo de dato, eliminación automática cuando el período expira, flujo de baja del usuario que elimine todos sus datos (no solo desactive la cuenta), y cómo manejar las copias de seguridad y los logs de sistema que pueden contener datos personales.

7. **Integración de la privacidad en el proceso de desarrollo:** Privacy by default no se consigue con un sprint puntual: es una práctica continua. Explica cómo integrarlo en el SDLC: Privacy Impact Assessments (PIAs) para nuevas features, revisión de privacidad como parte del definition of done, formación básica del equipo de producto y desarrollo en RGPD, y cómo involucrar al DPO (si existe) en el proceso sin convertirlo en un cuello de botella.

8. **Privacy como diferenciador competitivo:** En muchos mercados, la privacidad genuina es un diferenciador. Explica cómo comunicar externamente el compromiso con la privacidad: una política de privacidad escrita en lenguaje humano, un badge o certificación de privacidad (Privacy Seal, ISO 27701), y cómo usar la privacidad como argumento de venta especialmente en sectores sensibles (salud, finanzas, educación).

Privacy by default no va en contra del negocio: va en contra de los negocios que dependen de explotar datos que los usuarios no saben que están compartiendo. Ayúdame a construir un negocio diferente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Integrar privacy by design y privacy by default en el desarrollo del producto digital.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Ciberseguridad para equipos',
                'description'      => 'Forma al equipo en las amenazas reales: phishing, contraseñas, dispositivos y la política de seguridad que la gente realmente cumple.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un responsable de seguridad corporativa especializado en concienciación y formación de equipos. El 90% de los incidentes de ciberseguridad empiezan con un error humano: alguien hace clic en un enlace de phishing, usa la misma contraseña de siempre o conecta un USB desconocido. La tecnología de seguridad más cara del mercado no protege contra un empleado que no sabe que está siendo atacado. Necesito que me ayudes a construir un programa de ciberseguridad para personas que no son técnicas.

**Contexto de mi equipo:**
[Describe el tamaño del equipo, el sector de tu empresa, el nivel técnico medio de los empleados, si trabajan de forma remota o presencial, y los incidentes de seguridad que habéis tenido o casi tenido]

**Lo que necesito que me diseñes:**

1. **Las amenazas reales que afectan a equipos no técnicos:** Olvídate de los hackers de película. Explica las amenazas reales y frecuentes a las que se enfrenta mi equipo: phishing por email (con ejemplos de mensajes reales que engañan incluso a personas técnicas), smishing (phishing por SMS), vishing (llamadas de voz), Business Email Compromise (BEC, cuando el atacante se hace pasar por el CEO o un proveedor), ransomware que entra por un clic incorrecto, y robo de credenciales por reutilización de contraseñas.

2. **Programa de formación en seguridad: diseño y contenidos:** Diseña un programa de formación anual que sea efectivo sin ser aburrido: módulos cortos de 15-20 minutos sobre temas concretos (phishing, contraseñas, dispositivos, redes Wi-Fi, gestión de datos sensibles), frecuencia de refuerzo trimestral, y cómo medir que la formación está cambiando comportamientos y no solo marcando casillas de compliance.

3. **Simulaciones de phishing: cómo hacerlas bien:** Las simulaciones de phishing son la herramienta más efectiva para entrenar al equipo, pero mal ejecutadas generan desconfianza. Explica cómo diseñar simulaciones honestas (no basadas en el engaño, sino en el aprendizaje), qué hacer cuando alguien cae (feedback educativo inmediato, no punición pública), con qué frecuencia hacerlas y cómo medir la mejora a lo largo del tiempo.

4. **Política de contraseñas que la gente cumpla:** Las políticas de contraseñas que exigen mayúsculas, números y caracteres especiales y obligan a cambiarlas cada 90 días no mejoran la seguridad: generan contraseñas predecibles y post-its en los monitores. Diseña una política de contraseñas moderna basada en las recomendaciones actuales del NIST: contraseñas largas (passphrase), sin rotación obligatoria salvo compromiso confirmado, gestores de contraseñas corporativos y autenticación multifactor (MFA) como la medida más efectiva.

5. **Seguridad en dispositivos: ordenadores, móviles y periféricos:** Los dispositivos son la puerta de entrada más común. Diseña una política de seguridad de dispositivos que sea práctica: cifrado de disco duro activado (BitLocker/FileVault), bloqueo automático de pantalla, políticas de actualizaciones automáticas, gestión de dispositivos móviles (MDM) para el equipo y qué hacer cuando se pierde o roba un dispositivo.

6. **Trabajo remoto seguro: redes Wi-Fi y VPN:** El trabajo desde casa o desde lugares públicos introduce riesgos que en la oficina no existen. Explica las normas de seguridad para el trabajo remoto: usar siempre VPN en redes que no sean la de casa, no conectarse a redes Wi-Fi públicas sin VPN, separar el dispositivo de trabajo del personal (o al menos los perfiles del navegador), y cómo manejar las videollamadas desde espacios compartidos.

7. **Respuesta a incidentes para no técnicos: qué hacer si algo va mal:** La mayoría de los empleados no saben qué hacer si creen que han sido víctimas de un ataque o si han cometido un error de seguridad. Diseña un protocolo simple de respuesta a incidentes para personas no técnicas: a quién llamar, qué no tocar, qué información preservar, por qué es importante reportar incluso si te da vergüenza, y cómo crear una cultura donde los errores se reportan sin miedo a la represalia.

8. **Cultura de seguridad a largo plazo:** Una formación puntual no cambia comportamientos. Explica cómo construir una cultura de seguridad sostenible: embajadores de seguridad en cada equipo, comunicación regular de amenazas en el lenguaje del negocio (no en jerga técnica), celebración de comportamientos seguros y cómo el liderazgo debe modelar las buenas prácticas para que el equipo las tome en serio.

La seguridad no es un problema técnico: es un problema de personas. Ayúdame a construir el equipo más difícil de hackear no por sus herramientas, sino por sus hábitos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Diseñar un programa de concienciación en ciberseguridad que cambie los hábitos del equipo.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Fraude financiero y prevención',
                'description'      => 'Detecta el fraude interno y externo antes de que cause daño: señales de alerta, controles y cultura de compliance.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en fraude financiero y compliance con experiencia en auditoría forense, diseño de controles internos y cultura de cumplimiento en empresas de mediano tamaño. El fraude financiero —tanto el interno (por empleados) como el externo (por terceros)— es más común de lo que las empresas creen y más costoso de lo que calculan cuando lo descubren tarde. Necesito que me ayudes a construir un sistema de prevención y detección adaptado a mi empresa.

**Contexto de mi empresa:**
[Describe el tamaño de tu empresa, el sector, la estructura del equipo financiero y contable, los controles que ya tienes implementados y si has tenido o sospechado algún incidente de fraude]

**Lo que necesito que me expliques:**

1. **Tipología de fraude financiero más común en empresas de tu tamaño:** El fraude no siempre es un gran escándalo contable. Explica los tipos de fraude más frecuentes en empresas medianas: la apropiación indebida de activos (el tipo más común según la ACFE), el fraude de nóminas (empleados fantasma, aumentos de sueldo no autorizados), el fraude de proveedores (facturas falsas, comisiones ocultas), el fraude del CEO (Business Email Compromise dirigido al equipo financiero), y la manipulación de estados financieros (mucho menos frecuente pero catastrófica cuando ocurre).

2. **El triángulo del fraude: por qué lo hacen:** El modelo del triángulo del fraude de Cressey explica que el fraude ocurre cuando se combinan tres factores: presión (el empleado tiene un problema financiero o personal), oportunidad (los controles son débiles y el fraude es posible) y racionalización (el empleado se convence de que está justificado). Explica cómo este modelo ayuda a diseñar controles y a identificar situaciones de riesgo elevado.

3. **Señales de alerta (red flags) de fraude interno:** Muchos fraudes se podrían haber detectado antes de haber causado tanto daño. Explica las señales de alerta comportamentales (el empleado nunca coge vacaciones, tiene un estilo de vida que no cuadra con su sueldo, es muy protector de su trabajo y no permite que nadie le ayude) y las señales de alerta en los datos financieros (pagos a proveedores redondos, pagos a cuentas bancarias cambiadas recientemente, duplicados de facturas, aprobaciones por la misma persona que los autorizó).

4. **Controles internos clave para la prevención:** Explica los controles más efectivos para prevenir el fraude: la segregación de funciones (quien autoriza no puede ejecutar, quien ejecuta no puede registrar, quien registra no puede revisar), el control dual para operaciones críticas (dos firmas para pagos por encima de cierto umbral), la rotación de funciones sensibles y las conciliaciones periódicas independientes. Para cada control, indica su coste de implementación y su efectividad relativa.

5. **Canal de denuncias (whistleblower) conforme a la Directiva europea:** La Directiva de protección de denunciantes (Directiva UE 2019/1937), transpuesta en España por la Ley 2/2023, obliga a muchas empresas a disponer de un canal interno de denuncias. Explica cómo implementar un canal de denuncias efectivo: la garantía de anonimato real, el proceso de investigación interna independiente, la protección legal del denunciante y cómo comunicar internamente que el canal existe y que se usa de forma real.

6. **Auditoría forense digital: cuando ya ha ocurrido el fraude:** Si detectas indicios de fraude, la respuesta debe ser inmediata y metódica. Explica los primeros pasos de una investigación interna: preservar la evidencia digital (logs, emails, accesos a sistemas) antes de que se destruya, involucrar a un abogado para garantizar la cadena de custodia, cuándo involucrar a las fuerzas del orden y cuándo no, y cómo gestionar la comunicación interna durante la investigación para no alertar al sospechoso.

7. **Fraude del proveedor y de facturas falsas:** Este tipo de fraude puede hacerse desde dentro (un empleado que crea proveedores ficticios) o desde fuera (alguien suplanta a un proveedor real para redirigir pagos). Diseña los controles específicos para gestión de proveedores: proceso de alta de nuevos proveedores con validación independiente, verificación de cambios de datos bancarios siempre por teléfono al número oficial (nunca por email), conciliación periódica del maestro de proveedores y análisis de proveedores con pocos empleados pero muchas facturas.

8. **Cultura de compliance: la prevención más poderosa:** Los controles técnicos pueden fallar, pero una cultura donde el fraude es inaceptable y donde los empleados se sienten seguros para reportar anomalías es el control más duradero. Explica cómo construir esa cultura: el tono desde arriba (el liderazgo que da ejemplo), la formación ética regular (no solo el formulario que se firma una vez al año), y cómo celebrar los comportamientos íntegros visible y consistentemente.

El fraude que no se detecta no es el que no existe: es el que no se busca. Ayúdame a buscarlo antes de que sea demasiado tarde.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar un sistema de prevención y detección de fraude financiero en la empresa.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Respuesta ante brechas de seguridad',
                'description'      => 'Qué hacer en las primeras 72 horas tras un ciberataque: notificaciones a la AEPD, a clientes y gestión de la crisis legal.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en protección de datos y respuesta a incidentes de ciberseguridad con experiencia asesorando empresas ante la Agencia Española de Protección de Datos (AEPD) y en la gestión legal de brechas de datos. Cuando ocurre un incidente de seguridad que compromete datos personales, el reloj empieza a correr de inmediato: el RGPD impone obligaciones con plazos muy estrictos y los errores en la respuesta pueden ser tan costosos como el incidente mismo. Necesito que me prepares para gestionar una brecha de datos de forma correcta y eficaz.

**Contexto de mi empresa:**
[Describe el tipo de empresa, qué datos personales tratas (de clientes, empleados, usuarios de plataforma), si ya has sufrido algún incidente y cuál es tu madurez actual en protección de datos]

**Lo que necesito que me expliques:**

1. **Qué es una brecha de datos bajo el RGPD y cuándo notificar:** No todos los incidentes de seguridad son brechas de datos notificables. Explica la definición legal de brecha de datos personales bajo el artículo 4.12 del RGPD (toda violación de la seguridad que cause la destrucción, pérdida, alteración, comunicación no autorizada o acceso no autorizado a datos personales), la distinción entre brechas de confidencialidad, integridad y disponibilidad, y los criterios para determinar si la brecha es notificable a la AEPD (riesgo para los derechos y libertades de las personas) y a los interesados (riesgo alto).

2. **Las primeras 72 horas: la respuesta urgente:** El RGPD exige notificar a la autoridad de control (la AEPD en España) en un plazo máximo de 72 horas desde que se tiene conocimiento de la brecha, sin dilación injustificada. Diseña el protocolo de las primeras 72 horas: quién toma el mando (comité de respuesta a incidentes), qué sistemas se aíslan, cómo se preserva la evidencia, qué comunicaciones internas se realizan y cuándo se decide si hay obligación de notificar.

3. **Notificación a la AEPD: contenido y proceso:** Si la brecha es notificable, la notificación a la AEPD debe incluir información específica. Explica qué debe contener: descripción de la naturaleza de la brecha (categorías y número aproximado de personas afectadas), datos de contacto del DPO, consecuencias probables y medidas adoptadas. Cómo presentar la notificación a través del canal telemático de la AEPD, y qué pasa si en las 72 horas no tienes toda la información: el RGPD permite notificaciones por fases.

4. **Notificación a los interesados afectados: cuándo y cómo:** Cuando el riesgo para los interesados es alto (por ejemplo, filtración de datos financieros o de salud), también hay que notificar a las personas afectadas. Explica cuándo aplica esta obligación, qué debe decir la notificación (describir la brecha en lenguaje claro, las consecuencias probables y las medidas recomendadas al usuario), cómo hacer la notificación (email, carta, aviso en la web) y qué pasa si no tienes formas de contacto para todos los afectados.

5. **Gestión de la comunicación de crisis:** Una brecha de datos mal comunicada destruye más reputación que el incidente mismo. Diseña la estrategia de comunicación externa: qué decir (honestidad sobre lo ocurrido, claridad sobre lo que no sabemos aún), qué no decir (minimizar, culpar a terceros antes de tener los hechos, hacer promesas que no puedes cumplir), cómo gestionar la comunicación con medios de comunicación, y cómo coordinar el mensaje entre el equipo legal, el de comunicación y el de seguridad.

6. **Responsabilidad legal y régimen sancionador:** Una brecha de datos puede dar lugar a sanciones de la AEPD, demandas de los afectados y responsabilidades contractuales (si tratas datos para terceros como encargado del tratamiento). Explica el régimen sancionador del RGPD (hasta 20 millones de euros o el 4% del volumen de negocio global), el criterio de la AEPD para determinar la sanción (si la brecha se debió a negligencia, si se notificó correctamente, si se tomaron medidas preventivas razonables) y cómo la respuesta correcta al incidente puede mitigar la sanción.

7. **El rol del DPO en la gestión de la brecha:** El Delegado de Protección de Datos (DPO) tiene un papel central en la respuesta a brechas. Explica cuáles son sus responsabilidades específicas en un incidente: asesoramiento al responsable del tratamiento sobre la obligación de notificar, coordinación con la AEPD, punto de contacto para los interesados y documentación del incidente en el Registro de Violaciones de Seguridad. Si no tienes DPO nombrado, qué opciones tienes.

8. **Plan de continuidad y mejora tras el incidente:** Cuando el incidente está gestionado, viene el trabajo de evitar que vuelva a ocurrir. Explica cómo hacer el post-mortem del incidente: análisis de causa raíz, identificación de los controles que fallaron, actualización del análisis de riesgos, mejora de los procedimientos de seguridad y cómo documentar todo esto de cara a futuras auditorías o inspecciones de la AEPD.

Una brecha de datos mal gestionada puede costar más que una bien gestionada. Ayúdame a tener el plan antes de necesitarlo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Gestionar correctamente una brecha de datos personales desde el punto de vista legal y de comunicación.',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte durante incidentes de seguridad',
                'description'      => 'Cómo gestiona el equipo de Customer Support la comunicación con clientes cuando hay una brecha de datos o un ataque.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Customer Support con experiencia gestionando la comunicación con clientes durante incidentes de seguridad graves, incluyendo brechas de datos, ataques de ransomware y caídas de servicio prolongadas. Un incidente de seguridad es el peor momento para el equipo de soporte: los clientes están asustados, los canales están saturados, la información interna es limitada y cada palabra que dices puede convertirse en un problema legal. Necesito que me prepares y prepares a mi equipo para este escenario.

**Contexto de mi empresa:**
[Describe el tipo de producto o servicio, el tipo de clientes (consumidores, empresas, o mixto), el tamaño del equipo de soporte y si ya habéis vivido algún incidente de este tipo]

**Lo que necesito que me diseñes:**

1. **El rol del soporte en la respuesta a incidentes de seguridad:** El equipo de CS no gestiona el incidente técnico, pero es el puente entre la empresa y los clientes afectados. Explica cuál debe ser el rol específico del equipo de soporte en el plan de respuesta a incidentes: quién les informa (y con qué cadencia), qué pueden y no pueden decir a los clientes, cómo escalan casos urgentes al equipo de seguridad y cómo coordinan con el equipo legal y de comunicación.

2. **Playbook de comunicación para los primeros momentos del incidente:** Las primeras horas son las más críticas para la reputación. Diseña el playbook de comunicación para el equipo de soporte durante un incidente activo: los mensajes aprobados por fase del incidente (incidente detectado, en investigación, contenido, resuelto), cómo manejar las preguntas para las que no hay respuesta aún ("no tengo esa información todavía, pero me comprometo a actualizarte en X horas"), y la línea entre lo que el agente puede decir por su cuenta y lo que necesita aprobación antes de comunicar.

3. **Gestión del volumen extraordinario de contactos:** Durante un incidente grave, el volumen de tickets puede multiplicarse por diez en pocas horas. Diseña el plan de escalado de capacidad: priorización de tickets (afectados directos vs. curiosos, clientes con contrato premium vs. gratuitos), activación de respuestas automáticas con información actualizada, creación de una página de estado pública que desvíe contactos de bajo valor, y refuerzo del equipo con personas de otros departamentos.

4. **Comunicación específica con clientes empresariales (B2B):** Los clientes empresariales reaccionan de forma diferente a los consumidores: pueden tener obligaciones legales propias derivadas del incidente (si tu brecha afecta a datos de sus clientes), necesitan información más técnica y más rápida, y tienen una relación contractual que les da derechos específicos. Diseña el protocolo de comunicación para clientes B2B: contacto proactivo antes de que llamen, información detallada sobre el alcance del incidente (qué datos, qué período, qué consecuencias), y coordinación con el account manager para gestionar la relación a largo plazo.

5. **Preguntas frecuentes difíciles y cómo responderlas:** Durante un incidente de seguridad, los clientes hacen preguntas muy directas que son difíciles de responder. Prepara respuestas para las más comunes: "¿Han robado mi contraseña?", "¿Están mis datos bancarios comprometidos?", "¿Debo cambiar mi contraseña?", "¿Me vais a compensar?", "¿Vais a notificar a la AEPD?", "¿Por qué no lo habéis podido evitar?", "¿Puedo cancelar mi suscripción?". Respuestas honestas, claras y sin comprometer la investigación ni la posición legal.

6. **Gestión emocional del equipo de soporte durante el incidente:** Los agentes de soporte son el escudo humano de la empresa durante una crisis y eso tiene un coste emocional alto. Explica cómo apoyar al equipo durante el incidente: briefings regulares que les mantengan informados y no les dejen en evidencia ante los clientes, rotaciones más frecuentes para evitar el agotamiento, un canal interno para desahogarse sin que afecte a los clientes, y reconocimiento explícito del liderazgo del trabajo extraordinario que están haciendo.

7. **Documentación y evidencia de la comunicación con clientes:** Durante y después del incidente, puede ser necesario demostrar qué se comunicó, cuándo y a quién. Explica cómo documentar la comunicación: registro de todos los tickets relacionados con el incidente (con etiqueta específica), archivo de todas las comunicaciones masivas enviadas, y cómo esta documentación puede servir en un proceso regulatorio o judicial para demostrar que la empresa cumplió con sus obligaciones de información.

8. **Reconstrucción de la confianza después del incidente:** Cuando el incidente está resuelto, el trabajo del equipo de CS no ha terminado: hay que recuperar la confianza de los clientes. Explica las acciones post-incidente: comunicación de cierre con transparencia sobre lo que pasó y lo que se ha mejorado, compensación a los afectados (créditos, extensión de suscripción, servicios adicionales), seguimiento proactivo con los clientes más afectados y cómo medir la recuperación de la confianza en el tiempo.

En un incidente de seguridad, el equipo de soporte es la cara humana de la empresa en el peor momento. Ayúdame a prepararles para ser esa cara con dignidad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Preparar al equipo de Customer Support para gestionar la comunicación con clientes durante un incidente de seguridad.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Proteger tu negocio freelance de los ciberataques',
                'description'      => 'Las medidas de seguridad mínimas que todo autónomo digital debería tener implementadas para proteger su negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de ciberseguridad especializado en pequeñas empresas y profesionales independientes. Los freelancers y autónomos digitales son un objetivo frecuente de los ciberataques: manejan datos de sus clientes, tienen presupuestos limitados para seguridad y trabajan solos sin un equipo de IT que les respalde. Un ataque puede paralizar el negocio, comprometer la información confidencial de los clientes y destruir la reputación que has tardado años en construir. Necesito que me expliques qué debo tener implementado sí o sí, sin complicaciones ni gastos innecesarios.

**Mi situación como freelance:**
[Describe tu especialidad, qué herramientas usas, qué tipo de datos manejas (datos de clientes, accesos a sistemas de clientes, materiales confidenciales, datos financieros), y si has tenido alguna experiencia de seguridad preocupante]

**Lo que necesito que me expliques y que me ayudes a implementar:**

1. **Las amenazas más reales para un freelance digital:** No necesito saber de hackers de estado: necesito saber qué me puede pasar a mí. Explica las amenazas más frecuentes para profesionales independientes: el phishing que llega disfrazado de cliente potencial (el famoso "te mando el brief en este enlace"), el ransomware que cifra todos tus archivos y pide rescate, el robo de cuentas por reutilización de contraseñas, el fraude de facturas (alguien intercepta una factura tuya y cambia los datos bancarios) y el acceso no autorizado a los sistemas de tu cliente a través de tus credenciales.

2. **Contraseñas y autenticación: el pilar básico:** Explica por qué las contraseñas débiles o reutilizadas son el origen de la mayoría de las brechas que afectan a freelancers, y cómo solucionarlo de forma sencilla: usar un gestor de contraseñas (Bitwarden, 1Password, Dashlane —qué diferencias hay y cuál recomiendas para un autónomo solo—), activar la autenticación en dos factores (2FA) en todas las cuentas críticas con una app de autenticación (no solo SMS) y cuáles son las cuentas que no admiten excusa para no tener 2FA: email, almacenamiento en la nube, herramientas de facturación y accesos de clientes.

3. **Protección del ordenador de trabajo:** El ordenador es el corazón del negocio freelance. Explica las medidas básicas: cifrado del disco duro (BitLocker en Windows, FileVault en Mac) por si lo roban o lo pierdo, antivirus y protección en tiempo real (cuál recomiendas para uso profesional sin ser exagerado), actualizaciones automáticas del sistema operativo y de las aplicaciones, y qué hacer si el ordenador se comporta de forma extraña (señales de que puede estar comprometido).

4. **Copias de seguridad: la red que te salva cuando todo falla:** El ransomware o un fallo de disco pueden hacerte perder años de trabajo en segundos. Diseña una estrategia de copias de seguridad siguiendo la regla 3-2-1 (tres copias, en dos soportes diferentes, una fuera de las instalaciones): qué copiar, con qué frecuencia, qué herramientas usar para automatizarlo (Time Machine, Backblaze, Google Drive, iCloud) y, lo más importante, cómo verificar que las copias funcionan antes de necesitarlas.

5. **Seguridad en el trabajo con clientes: accesos y datos compartidos:** Como freelance, manejas accesos a sistemas de clientes y materiales confidenciales. Explica las buenas prácticas: nunca almacenar las credenciales de clientes en el navegador ni en un archivo de texto, usar un gestor de contraseñas con bóveda separada por cliente, pedir accesos con el mínimo privilegio necesario, devolver o eliminar los accesos cuando termina el proyecto, y cómo documentar qué accesos tienes en cada momento para poder revocarlos rápidamente si hay un incidente.

6. **Seguridad en las comunicaciones y el email:** El email es la principal vía de ataque. Explica cómo proteger tu cuenta de email profesional: usar un dominio propio con autenticación SPF, DKIM y DMARC para que no te suplanten, activar 2FA en el email (es lo primero que un atacante quiere controlar), reconocer emails de phishing aunque parezcan de clientes o plataformas conocidas, y qué hacer si sospechas que un email puede ser malicioso antes de abrir ningún enlace o adjunto.

7. **Redes Wi-Fi y trabajo desde lugares públicos:** Trabajar desde cafeterías, espacios de coworking o aeropuertos es habitual para los freelancers. Explica los riesgos de las redes Wi-Fi públicas y cómo mitigarlos: usar siempre una VPN (cuál recomiendas para un autónomo), evitar acceder a sistemas de clientes o hacer operaciones bancarias en redes no confiables, y la diferencia práctica entre lo que es realmente peligroso y lo que es solo mito sobre las redes públicas.

8. **Plan de respuesta si te hackean: qué hacer si lo peor ocurre:** Si a pesar de todo tienes un incidente, necesitas saber qué hacer para minimizar el daño. Diseña un protocolo personal de respuesta: desconectar el dispositivo afectado de internet, cambiar todas las contraseñas desde un dispositivo limpio, avisar al cliente si sus datos pueden estar comprometidos (tienes obligación legal bajo el RGPD si tratas datos personales), informar al banco si pueden estar en riesgo tus cuentas, y cómo recuperar el negocio desde las copias de seguridad. También, cuándo tiene sentido contratar ayuda profesional de un especialista en respuesta a incidentes.

La seguridad del freelance no tiene que ser cara ni complicada. Tiene que ser consistente. Ayúdame a construir esa consistencia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 15,
                'use_case'         => 'Implementar las medidas de seguridad básicas para proteger el negocio y los datos de clientes como freelance.',
                'vote_score'       => 36,
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
