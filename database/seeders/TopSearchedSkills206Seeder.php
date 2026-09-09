<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills206Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Ciberseguridad para el equipo de marketing',
                'description'       => 'Protege los activos digitales del equipo de marketing: las cuentas de redes sociales, las plataformas de email y los datos de clientes que el equipo maneja a diario y que son objetivo de ataques cada vez más frecuentes.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en ciberseguridad con especialización en la protección de equipos de marketing y sus activos digitales. Necesito que me ayudes a proteger los activos digitales de mi equipo de marketing sin necesitar conocimientos técnicos avanzados: las cuentas de redes sociales, las plataformas de email marketing, los datos de clientes y las herramientas de publicidad digital que manejamos a diario.

Mi contexto:
- Tamaño del equipo de marketing: [número de personas]
- Herramientas y plataformas que usamos: [redes sociales, plataformas de email, CRM, herramientas de publicidad, etc.]
- Incidentes o sustos previos: [hackeos de cuentas, phishing sufrido, accesos no autorizados, etc. si los hay]
- Nivel técnico del equipo: [bajo / medio, sin conocimientos de seguridad específicos]
- Situación de accesos: [usamos contraseñas compartidas / cada uno tiene sus propias credenciales / hay gestión formal de accesos]

Con ese contexto, dame:

1. LOS ATAQUES MÁS FRECUENTES CONTRA EQUIPOS DE MARKETING
¿Cuáles son los ataques cibernéticos que más frecuentemente afectan a los equipos de marketing? Explícame los cinco más comunes con ejemplos reales: el hijacking de cuentas de redes sociales (especialmente peligroso porque puede dañar la reputación de marca inmediatamente), el phishing dirigido a equipos de marketing con mensajes que simulan ser de Meta, Google o plataformas de email, el fraude en cuentas de Google Ads y Meta Ads donde los atacantes redirigen el presupuesto publicitario, el acceso no autorizado a bases de datos de clientes, y el malware que roba credenciales de las plataformas que el equipo usa a diario.

2. GESTIÓN SEGURA DE CONTRASEÑAS Y ACCESOS COMPARTIDOS
¿Cómo gestionamos las credenciales de las cuentas de equipo de forma segura? Explícame el problema de las contraseñas compartidas en herramientas de marketing (todos saben la contraseña de la cuenta de Instagram de la empresa) y cómo solucionarlo: las herramientas de gestión de contraseñas en equipo (1Password Business, Bitwarden Teams, LastPass Enterprise), cómo compartir credenciales sin que cada persona conozca la contraseña real, y el principio de mínimo privilegio aplicado a las plataformas de marketing (solo acceso a lo que cada persona necesita para su trabajo).

3. AUTENTICACIÓN EN DOS FACTORES EN TODAS LAS PLATAFORMAS DE MARKETING
¿Cómo implemento el doble factor de autenticación en las plataformas que usa el equipo? Dame la guía de activación del 2FA en las plataformas más utilizadas: Meta Business Suite, Google Ads, Mailchimp y otras plataformas de email marketing, HubSpot y otros CRMs, y las cuentas de Google Workspace. Explícame la diferencia entre el 2FA por SMS (menos seguro) y el 2FA por aplicación de autenticación (Google Authenticator, Authy), y cómo gestionar los códigos de recuperación para evitar quedarse bloqueado si alguien pierde el acceso.

4. PROTECCIÓN DE LAS CUENTAS DE REDES SOCIALES
¿Cómo protejo específicamente las cuentas de redes sociales de la empresa? Dame el protocolo completo: la configuración de Business Manager en Meta para que las páginas no dependan de cuentas personales, cómo dar y retirar accesos cuando alguien entra o sale del equipo, el protocolo de respuesta si detectamos que una cuenta ha sido comprometida (qué hacer en los primeros diez minutos para minimizar el daño), y las señales que deben alertarnos de que algo va mal en nuestras cuentas.

5. MANEJO SEGURO DE DATOS DE CLIENTES EN MARKETING
¿Cómo maneja el equipo de marketing los datos de clientes de forma que cumpla con el RGPD y sea seguro? Dame las prácticas esenciales: cómo evitar que los datos de clientes se filtren a través de las herramientas de marketing (integrar el CRM con el email sin exportar listas en Excel), cómo gestionar el acceso a los datos de clientes en el equipo (quién puede ver qué), las bases legales del tratamiento de datos en marketing (consentimiento, interés legítimo), y qué hacer si descubrimos que hemos enviado datos de clientes a una herramienta de marketing sin el consentimiento o la base legal adecuada.

6. PROTECCIÓN DE LAS CUENTAS DE PUBLICIDAD DIGITAL
¿Cómo evito que hackeen las cuentas de Google Ads o Meta Ads y gasten el presupuesto? Explícame los ataques específicos a las cuentas de publicidad digital: el fraude de cuentas publicitarias (el atacante accede, crea campañas masivas hacia sitios maliciosos o simplemente gasta el presupuesto), las señales de alerta que indican que la cuenta ha sido comprometida, y las medidas preventivas: los límites de gasto diario, las alertas de gasto inusual, la gestión de usuarios administradores, y qué hacer en caso de que detectemos actividad sospechosa en la cuenta publicitaria.

7. CULTURA DE SEGURIDAD EN EL EQUIPO DE MARKETING
¿Cómo creo una cultura de seguridad en el equipo sin que se convierta en un freno para el trabajo? Dame el plan de formación en ciberseguridad para un equipo de marketing no técnico: los conceptos mínimos que todos deben entender (phishing, ingeniería social, contraseñas seguras), el simulacro de phishing para identificar quién necesita más formación, el protocolo de reporte interno cuando alguien sospecha de un intento de ataque, y cómo comunicar las normas de seguridad de forma que el equipo las entienda como una protección y no como una burocracia que dificulta su trabajo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Proteger los activos digitales del equipo de marketing: cuentas, datos de clientes y plataformas publicitarias.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Secure coding: desarrollo de software seguro',
                'description'       => 'Escribe código que resiste ataques: el OWASP Top 10, las vulnerabilidades más comunes (XSS, SQL injection, CSRF), el threat modeling y el proceso de security review que integra la seguridad en el ciclo de desarrollo.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en seguridad de aplicaciones (AppSec) con experiencia en enseñar a equipos de desarrollo a escribir código seguro. Necesito que me ayudes a entender las vulnerabilidades más comunes y a integrar prácticas de seguridad en mi proceso de desarrollo sin que se convierta en un freno para la velocidad del equipo.

Mi contexto:
- Stack tecnológico: [lenguaje de programación, frameworks, base de datos]
- Tipo de aplicación: [web app, API REST, mobile app, aplicación interna, SaaS público]
- Nivel de seguridad actual del equipo: [nunca hemos hecho security reviews / hacemos algo básico / queremos mejorar]
- Superficie de exposición: [app pública en internet / interna / API consumida por terceros]
- Mayor preocupación de seguridad: [datos de usuarios, pagos, acceso no autorizado, inyecciones, etc.]

Con ese contexto, dame:

1. OWASP TOP 10: LAS VULNERABILIDADES QUE MÁS AFECTAN A MI TIPO DE APLICACIÓN
Explícame el OWASP Top 10 actualizado aplicado a mi stack y tipo de aplicación: cuáles de las diez categorías son más relevantes para mí y por qué. Para las tres o cuatro categorías más relevantes en mi caso, dame: una explicación de la vulnerabilidad en términos que un desarrollador pueda entender, un ejemplo de código vulnerable con el mismo ejemplo de código seguro en mi lenguaje de programación, y cómo detectar si tenemos esta vulnerabilidad en el código existente.

2. SQL INJECTION Y OTRAS INYECCIONES: PREVENCIÓN COMPLETA
¿Cómo evito las vulnerabilidades de inyección en mi aplicación? Dame la guía completa para mi stack: el uso de prepared statements y ORMs de forma correcta (incluyendo los casos donde incluso los ORMs pueden ser vulnerables si se usan mal), la validación y el saneamiento de inputs de usuario, cómo evitar la inyección de comandos del sistema operativo si ejecuto procesos externos, y el NoSQL injection si uso bases de datos no relacionales. Incluye ejemplos de código vulnerable y seguro en mi lenguaje.

3. XSS (CROSS-SITE SCRIPTING) Y CSRF: PROTECCIÓN EN FRONTEND Y BACKEND
¿Cómo protejo mi aplicación contra XSS y CSRF? Explícame los tres tipos de XSS (reflejado, almacenado, basado en DOM) con ejemplos de cómo puede explotar un atacante cada uno, y las contramedidas: el encoding de output correcto para cada contexto (HTML, JavaScript, CSS, URL), la Content Security Policy (CSP), las cookies HttpOnly y Secure, y el token anti-CSRF. Dame la implementación concreta para mi framework.

4. AUTENTICACIÓN Y GESTIÓN DE SESIONES SEGURAS
¿Cómo implemento un sistema de autenticación seguro? Dame el checklist completo: el almacenamiento de contraseñas (bcrypt, Argon2, por qué MD5 y SHA-1 son insuficientes), los requisitos mínimos de contraseña y cómo no hacerlos incómodos para el usuario, la gestión de sesiones (tokens de sesión aleatorios, rotación de tokens, invalidación en logout), la autenticación multifactor (TOTP, WebAuthn), la protección contra fuerza bruta (rate limiting, bloqueo de cuenta), y los errores de autenticación que no dan pistas al atacante sobre qué campo está mal.

5. THREAT MODELING: IDENTIFICAR LAS AMENAZAS ANTES DE ESCRIBIR CÓDIGO
¿Cómo aplico el threat modeling en mi equipo? Dame el proceso simplificado para hacer threat modeling en una startup o equipo pequeño: el framework STRIDE aplicado a mi tipo de aplicación (Spoofing, Tampering, Repudiation, Information Disclosure, Denial of Service, Elevation of Privilege), cómo diagramar los flujos de datos y los trust boundaries de mi aplicación, las preguntas que el equipo debe hacerse para cada feature nueva antes de desarrollarla, y cómo documentar las amenazas identificadas y las contramedidas decididas.

6. INTEGRAR LA SEGURIDAD EN EL CICLO DE DESARROLLO (DEVSECOPS)
¿Cómo integro las revisiones de seguridad en el proceso de desarrollo sin ralentizar los sprints? Dame el modelo de DevSecOps adaptado a un equipo de tamaño medio o pequeño: las herramientas de análisis estático de seguridad (SAST) que se integran en el IDE y en el CI/CD para detectar vulnerabilidades antes de que lleguen a producción (Semgrep, SonarQube, Snyk Code), el análisis de dependencias para detectar librerías con vulnerabilidades conocidas (Dependabot, Snyk Open Source), y el proceso de security review que no es un cuello de botella sino parte natural del pull request.

7. RESPUESTA A INCIDENTES DE SEGURIDAD: QUÉ HACER CUANDO HAY UNA BRECHA
¿Cómo respondo si descubro una vulnerabilidad en producción o si hay una brecha de seguridad? Dame el playbook de respuesta a incidentes de seguridad para un equipo de desarrollo: los primeros pasos al detectar una vulnerabilidad (contener antes de comunicar), cómo evaluar el impacto y qué datos se han podido ver comprometidos, las obligaciones de notificación bajo el RGPD (72 horas para notificar a la autoridad de protección de datos si hay datos personales afectados), cómo comunicar el incidente a usuarios y clientes, y el post-mortem de seguridad que evita que el mismo tipo de vulnerabilidad vuelva a aparecer.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Aprender y aplicar prácticas de desarrollo de software seguro para eliminar las vulnerabilidades más comunes.',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'UX de seguridad: diseñar para la confianza',
                'description'       => 'El diseñador que construye la confianza del usuario: el diseño de flujos de autenticación seguros y usables, los patrones de aviso de privacidad y los elementos de diseño que señalan seguridad sin generar fricción innecesaria.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en UX de seguridad y diseño de experiencias de confianza. Necesito tu ayuda para diseñar interfaces y flujos que hagan que el producto sea seguro sin que la seguridad destruya la experiencia del usuario: el equilibrio entre protección y usabilidad que define a los mejores productos digitales.

Mi contexto:
- Tipo de producto: [app móvil, web app, ecommerce, banca digital, salud, etc.]
- Usuarios objetivo: [perfil del usuario, nivel de alfabetización digital]
- Área de mayor preocupación: [autenticación, privacidad y consentimiento, comunicación de errores de seguridad, confianza en el proceso de pago, etc.]
- Estado actual del diseño de seguridad: [nunca lo hemos pensado sistemáticamente / tenemos algo básico / queremos mejorar el diseño existente]

Con ese contexto, dame:

1. LOS PRINCIPIOS DEL UX DE SEGURIDAD
Explícame los principios fundamentales del diseño de interfaces seguras: por qué la seguridad no debe ser visible cuando todo va bien (la fricción de seguridad solo se justifica cuando protege algo de alto valor), el principio de diseño para el error (el usuario cometerá errores de seguridad, el diseño debe asumir esto), la diferencia entre seguridad real y señales de seguridad percibida, y por qué la usabilidad y la seguridad no son opuestos sino complementarios cuando se diseñan correctamente. Dame ejemplos de productos que han acertado y que han fallado en este equilibrio.

2. DISEÑO DE FLUJOS DE AUTENTICACIÓN SEGUROS Y USABLES
¿Cómo diseño el flujo de login, registro y recuperación de contraseña de forma que sea seguro y que el usuario no lo abandone por la fricción? Dame el análisis de los patrones de autenticación modernos: el passwordless (magic links, passkeys, biometría), el login social y sus implicaciones de privacidad, el 2FA bien diseñado que el usuario activa voluntariamente, los mensajes de error que no revelan información al atacante pero que tampoco frustran al usuario legítimo, y el diseño del flujo de recuperación de cuenta que es seguro sin ser kafkiano.

3. PATRONES DE CONSENTIMIENTO Y PRIVACIDAD QUE EL USUARIO ENTIENDE
¿Cómo diseño los flujos de consentimiento y los avisos de privacidad para que sean honestos, comprensibles y que el usuario pueda tomar una decisión informada real? Dame el análisis de los dark patterns de privacidad que debo evitar (el banner de cookies con el botón de aceptar destacado y el de rechazar escondido, las casillas pre-marcadas), los patrones de diseño que cumplen el RGPD sin engañar al usuario, y cómo presentar la política de privacidad de forma que alguien la lea en lugar de ignorarla. Incluye ejemplos de flujos de consentimiento bien diseñados.

4. SEÑALES DE CONFIANZA EN EL DISEÑO: QUÉ FUNCIONA Y QUÉ NO
¿Qué elementos visuales generan confianza genuina en el usuario vs. cuáles son decorativos sin valor real? Explícame las señales de confianza que funcionan: el certificado HTTPS y el candado en el navegador (y por qué ya no es tan relevante como antes), los sellos de seguridad de terceros (y cómo usarlos sin que parezcan spam), el diseño profesional y consistente como señal de confianza, la transparencia sobre quién es la empresa y cómo funciona, y los elementos de prueba social (reseñas, número de usuarios) aplicados a contextos de alta sensibilidad como el pago o el alta médica.

5. DISEÑO DE MENSAJES DE ERROR Y ALERTAS DE SEGURIDAD
¿Cómo comunico los errores y las alertas de seguridad de forma que el usuario entienda qué ha pasado y qué debe hacer? Dame el framework de diseño de mensajes de seguridad: los errores de autenticación que no revelan si el email existe o no pero que tampoco frustran al usuario legítimo, las alertas de actividad sospechosa en la cuenta (nuevo inicio de sesión desde un dispositivo desconocido), los mensajes de caducidad de sesión que no hacen perder el trabajo del usuario, y cómo diseñar el flujo de notificación de incidente de seguridad al usuario sin generar pánico innecesario.

6. DISEÑO DE FORMULARIOS QUE PROTEJAN LOS DATOS SENSIBLES
¿Cómo diseño formularios que recojan datos sensibles (contraseñas, números de tarjeta, datos médicos) de forma segura y sin fricción? Dame las guías de diseño: los campos de contraseña con el toggle para mostrar u ocultar (y por qué mejora la seguridad real al permitir que el usuario verifique lo que ha escrito), el diseño de formularios de pago que siguen el estándar PCI-DSS sin romper el flujo de la experiencia, los campos de datos médicos o sensibles con el contexto que explica por qué se piden y para qué se usarán, y el autocomplete correcto para campos sensibles (off para contraseñas, on para emails y nombres).

7. TESTING DE USABILIDAD APLICADO A FLUJOS DE SEGURIDAD
¿Cómo valido que mis diseños de seguridad realmente funcionan para el usuario? Dame el protocolo de test de usabilidad específico para flujos de seguridad: las tareas de test que debo incluir (login, recuperación de contraseña, activación de 2FA, revisión de permisos de privacidad), las señales de alerta durante el test que indican que el diseño de seguridad está fallando (el usuario reutiliza contraseñas porque el proceso de recuperación es demasiado difícil, el usuario hace clic en aceptar sin leer porque el modal es demasiado largo), y cómo medir cuantitativamente el equilibrio entre seguridad y usabilidad en mi producto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Diseñar flujos e interfaces que sean seguros y generen confianza sin sacrificar la experiencia del usuario.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Seguridad como argumento de ventas',
                'description'       => 'Vende la seguridad como valor diferencial: cómo responder a las preguntas de seguridad de los compradores enterprise, el proceso de due diligence de seguridad en el ciclo de ventas y el security questionnaire que acelera el cierre.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en ventas enterprise con especialización en procesos de evaluación de seguridad en el ciclo de compra B2B. Necesito tu ayuda para convertir la seguridad de mi producto en un argumento de ventas, gestionar el proceso de due diligence de seguridad que los compradores enterprise exigen, y reducir el tiempo que se pierde respondiendo cuestionarios de seguridad que frenan el cierre.

Mi contexto:
- Tipo de producto o servicio: [SaaS, plataforma, servicio gestionado, etc.]
- Clientes objetivo: [empresas medianas, enterprise, sector público, sector financiero, salud, etc.]
- Situación actual de seguridad del producto: [certificaciones que tenemos, políticas de seguridad documentadas, auditorías realizadas]
- Fase del problema: [los security questionnaires nos retrasan el cierre / el comprador pone la seguridad como objeción / queremos posicionar la seguridad como diferencial proactivamente]
- Competidores y su posicionamiento de seguridad: [si lo conoces]

Con ese contexto, dame:

1. POR QUÉ LA SEGURIDAD ES UN ARGUMENTO DE VENTA EN B2B ENTERPRISE
Explícame el cambio que ha experimentado la seguridad en el proceso de compra enterprise: la figura del CISO como influenciador o decisor en compras de software, el impacto de los incidentes de seguridad en la reputación del comprador (el riesgo de elegir un proveedor inseguro se lo lleva el jefe de compras, no el vendedor), y cómo la seguridad ha pasado de ser una barrera al cierre a ser un argumento de diferenciación cuando el vendedor sabe usarla. Dame ejemplos de sectores donde la seguridad ya es el primer criterio de compra.

2. LAS CERTIFICACIONES QUE MÁS IMPORTAN POR SECTOR Y TIPO DE CLIENTE
¿Qué certificaciones de seguridad debo tener o mencionar según el tipo de cliente? Dame el mapa de certificaciones relevantes: SOC 2 Type II (estándar de facto para SaaS en el mercado americano), ISO 27001 (más exigido en Europa y APAC), GDPR compliance y el DPA que debo firmar con el cliente, sector financiero (PCI-DSS para pagos, ENS para administración pública española), sector salud (HIPAA en EE.UU., ENS en España), y las certificaciones de industria específicas que mis clientes objetivo suelen exigir. Para cada una dame: qué significa, cuánto tarda en obtenerse, cuánto cuesta aproximadamente y qué impacto tiene en el pipeline.

3. EL SECURITY QUESTIONNAIRE: CÓMO GESTIONARLO Y ACELERARLO
¿Cómo gestiono los cuestionarios de seguridad que los clientes enterprise me envían y que retrasan el cierre? Dame la estrategia completa: cómo crear un repositorio de respuestas estándar a las preguntas más frecuentes (la security FAQ interna), las herramientas que automatizan la respuesta a security questionnaires (Vanta, Drata, SecurityPal, OneTrust), el Trust Center o Security Portal público donde el cliente puede encontrar la información de seguridad sin necesidad de hacer preguntas, y cómo posicionar el cuestionario en el ciclo de ventas para que no sea el último paso sino parte del proceso de evaluación desde el principio.

4. GESTIONAR LA CONVERSACIÓN DE SEGURIDAD CON EL CISO O EL EQUIPO DE IT
¿Cómo hablo de seguridad con el equipo técnico del cliente sin perderme en detalles que no sé responder? Dame el script de la conversación de seguridad con el CISO o el jefe de IT del cliente: las preguntas que debo hacer para entender qué les preocupa específicamente, cómo presentar el modelo de seguridad de mi producto en términos que un CISO entienda, cómo manejar las preguntas técnicas que no sé responder (cuándo llamar al equipo de seguridad propio), y cómo convertir la reunión de evaluación de seguridad en una oportunidad para fortalecer la relación comercial.

5. LA PROPUESTA DE VALOR DE SEGURIDAD: CÓMO COMUNICARLA EN EL PITCH
¿Cómo integro la seguridad en mi pitch de ventas antes de que el cliente lo pida? Dame la estrategia de posicionamiento proactivo de la seguridad: cómo presentar las certificaciones y controles de seguridad en la primera demo, qué documentación de seguridad ofrecer proactivamente (resumen ejecutivo de seguridad, política de gestión de incidentes), cómo comparar la posición de seguridad con la de los competidores sin atacarles directamente, y cómo cuantificar el riesgo que asume el cliente si elige un proveedor con peor posición de seguridad.

6. DUE DILIGENCE DE SEGURIDAD: EL PROCESO COMPLETO POR FASES
¿Cuál es el proceso típico de due diligence de seguridad en una venta enterprise y cómo acelero cada fase? Dame el mapa del proceso: la fase de cuestionario inicial (semanas 1-2), la reunión técnica de seguridad (semana 3-4), la posible auditoría o penetration test (si el cliente lo exige), el DPA y los anexos técnicos del contrato (semanas 5-8), y las señales de que el proceso de seguridad va a ser un bloqueador definitivo vs. un proceso que puedo gestionar y superar. Cómo gestionar las expectativas del cliente y de mi equipo interno durante este proceso.

7. CUANDO LA SEGURIDAD ES UNA OBJECIÓN: CÓMO MANEJARLA
¿Cómo respondo cuando el cliente dice que mi producto no es suficientemente seguro para sus estándares? Dame el playbook de gestión de la objeción de seguridad: cómo distinguir la objeción de seguridad legítima (tienen un requisito real que no cumplimos) de la objeción táctica (usan la seguridad para negociar precio), cómo proponer un roadmap de mejora de seguridad como parte del acuerdo cuando hay gaps identificados, y cuándo desistir porque los requisitos de seguridad del cliente están genuinamente fuera de nuestras capacidades actuales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Gestionar el proceso de due diligence de seguridad en ventas enterprise y convertir la seguridad en diferencial.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product security: construir seguridad en el producto desde el principio',
                'description'       => 'Integra la seguridad en el proceso de diseño de producto: el threat modeling en la fase de descubrimiento, la colaboración con el equipo de seguridad y las decisiones de producto que protegen a los usuarios sin sacrificar la experiencia.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product security y en la integración de la seguridad en el proceso de diseño de producto. Necesito tu ayuda para incorporar la seguridad en mi proceso de product management desde la fase de descubrimiento, para que las decisiones de seguridad se tomen cuando son más baratas y efectivas (antes de construir) y no como correcciones de emergencia después de un incidente.

Mi contexto:
- Tipo de producto: [SaaS, app móvil, plataforma, marketplace, etc.]
- Tipo de datos que maneja el producto: [datos de usuario, datos financieros, datos de salud, contenido generado por usuario, etc.]
- Proceso de discovery y diseño actual: [cómo defines features, quién participa, cuándo se revisa técnicamente]
- Relación actual con el equipo de seguridad: [no tenemos equipo de seguridad / colaboramos poco / queremos mejorar]
- Incidentes de seguridad previos o vulnerabilidades encontradas: [si las hay]

Con ese contexto, dame:

1. POR QUÉ LA SEGURIDAD DE PRODUCTO ES RESPONSABILIDAD DEL PM
Explícame el cambio de paradigma de la seguridad como responsabilidad exclusiva de engineering a la seguridad como parte del diseño de producto: el coste exponencialmente mayor de arreglar vulnerabilidades en producción vs. en la fase de diseño, el papel del PM en identificar los riesgos de seguridad durante el discovery, y cómo los mejores productos del mundo (Apple, Stripe, 1Password) han integrado la seguridad en la cultura de producto hasta el punto de que es un argumento de marketing. Por qué ignorar la seguridad en el diseño de producto no es ir más rápido sino endeudarse en seguridad.

2. THREAT MODELING EN LA FASE DE DESCUBRIMIENTO
¿Cómo hago threat modeling como parte del proceso de discovery sin ser un experto en seguridad? Dame el proceso simplificado de threat modeling para PMs: las cuatro preguntas que debo hacerme para cada feature nueva (¿qué puede salir mal?, ¿a quién puede dañar?, ¿cuál es el impacto si ocurre?, ¿cómo lo prevenimos?), el framework STRIDE adaptado a la perspectiva del producto, cómo diagramar los flujos de datos de la feature para identificar los puntos de riesgo, y cuándo escalar al equipo de seguridad porque el riesgo identificado requiere una revisión especializada.

3. DECISIONES DE PRODUCTO QUE TIENEN IMPLICACIONES DE SEGURIDAD
¿Cuáles son las decisiones de diseño de producto que más frecuentemente crean riesgos de seguridad? Dame el top de decisiones de producto con impacto en seguridad: el diseño del modelo de roles y permisos (quién puede ver y hacer qué en el producto), la decisión de almacenar o no datos sensibles del usuario (si no los almacenamos no podemos perderlos), el diseño de las integraciones con terceros (cada integración amplía la superficie de ataque), el diseño de las funciones de exportación de datos (que pueden convertirse en vectores de filtración), y la gestión del ciclo de vida de los datos del usuario (retención, eliminación, exportación bajo RGPD).

4. CÓMO COLABORAR CON EL EQUIPO DE SEGURIDAD DESDE PRODUCTO
¿Cómo trabajo con el equipo de seguridad para que sea un aliado y no un bloqueador? Dame el modelo de colaboración PM-Security: cuándo involucrar al equipo de seguridad en el proceso de discovery (en features con datos sensibles, autenticación, pagos, o acceso a recursos de otros usuarios), cómo presentar una feature al equipo de seguridad para que puedan evaluarla eficientemente, el flujo de security review que no bloquea el sprint, y cómo gestionar las situaciones en las que el equipo de seguridad dice que algo no se puede hacer de la manera que el PM lo ha diseñado.

5. PRIVACIDAD POR DISEÑO (PRIVACY BY DESIGN) EN EL PRODUCTO
¿Cómo aplico los principios de privacy by design en mis decisiones de producto? Dame los siete principios del privacy by design del RGPD aplicados a decisiones concretas de producto: la minimización de datos (pedir solo lo que necesitamos), el propósito limitado (no usar los datos para algo distinto a lo que el usuario aceptó), la privacidad por defecto (la configuración menos invasiva debe ser la predeterminada), y la transparencia con el usuario sobre cómo usamos sus datos. Dame ejemplos de decisiones de producto donde aplicar cada principio.

6. EL SECURITY ROADMAP DEL PRODUCTO
¿Cómo priorizo las iniciativas de seguridad en el roadmap de producto? Dame el framework de priorización de seguridad que equilibra el impacto en seguridad con el esfuerzo de implementación y el coste de no hacerlo: cómo cuantificar el riesgo en términos que la dirección entienda (probabilidad de incidente x impacto económico x daño reputacional), cómo balancear las iniciativas de seguridad preventiva con las de remediación de vulnerabilidades existentes, y cómo comunicar al equipo ejecutivo por qué invertir en seguridad de producto es rentable aunque no genere features nuevas.

7. MÉTRICAS DE PRODUCT SECURITY
¿Cómo mido que la seguridad del producto está mejorando? Dame las métricas de product security que un PM debe monitorizar: el número de vulnerabilidades encontradas por severidad y el tiempo medio de remediación, el porcentaje de features que pasan por threat modeling antes de desarrollarse, el número de incidentes de seguridad por release y la tendencia, el tiempo de detección de vulnerabilidades (cuanto antes se detectan, más barato es arreglarlas), y cómo usar los resultados de bug bounty o pentesting como input para el roadmap de seguridad.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Integrar la seguridad en el proceso de diseño de producto desde la fase de descubrimiento.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Concienciación de seguridad para empleados',
                'description'       => 'El programa de formación en seguridad que realmente cambia comportamientos: el phishing simulado, los micro-learnings y la cultura de seguridad que convierte a los empleados en la primera línea de defensa en lugar del eslabón más débil.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en gestión del riesgo humano en ciberseguridad y en programas de concienciación de seguridad para organizaciones. Necesito tu ayuda para diseñar un programa de formación en seguridad que realmente cambie comportamientos y convierta a los empleados en la primera línea de defensa de la empresa, sin ser un programa de compliance que todo el mundo hace por obligación y que no cambia nada.

Mi contexto:
- Tamaño de la organización: [número de empleados]
- Sector y tipo de actividad: [importante para entender el perfil de riesgo]
- Incidentes de seguridad previos: [phishing exitoso, robo de credenciales, pérdida de dispositivos, etc.]
- Programa actual de concienciación: [nada formal / formación anual obligatoria / algo más estructurado]
- Mayor reto: [falta de conciencia del riesgo, comportamientos de riesgo arraigados, resistencia a las políticas de seguridad, etc.]

Con ese contexto, dame:

1. POR QUÉ LOS PROGRAMAS TRADICIONALES DE CONCIENCIACIÓN DE SEGURIDAD FRACASAN
Explícame por qué la mayoría de los programas de formación en seguridad no cambian comportamientos: el módulo anual de compliance que todo el mundo hace en enero y olvida en febrero, la formación que asume que el empleado toma decisiones racionales cuando la realidad es que el phishing explota sesgos cognitivos, la comunicación de seguridad que habla de amenazas abstractas sin conectarlas con el trabajo diario, y el enfoque punitivo que hace que los empleados oculten los incidentes en lugar de reportarlos. Cuál es el enfoque que realmente funciona para cambiar comportamientos de seguridad.

2. EL PROGRAMA DE PHISHING SIMULADO BIEN DISEÑADO
¿Cómo implemento un programa de simulación de phishing que mejore la capacidad de detección sin hundir la moral del equipo? Dame el proceso completo: cómo diseñar las campañas de phishing simulado para que sean realistas pero éticamente correctas, la progresión de dificultad de los ataques simulados a lo largo del tiempo, el proceso de formación inmediata cuando alguien cae en la simulación (sin humillación, con aprendizaje), las métricas que debo monitorizar (tasa de clic, tasa de reporte, evolución en el tiempo), y los errores que convierten el phishing simulado en una herramienta contraproducente que destruye la confianza.

3. MICRO-LEARNINGS: FORMACIÓN QUE SE ASIMILA Y SE RECUERDA
¿Cómo diseño formación en seguridad que la gente realmente absorba? Explícame el modelo de micro-learning aplicado a la concienciación de seguridad: los módulos de dos a cinco minutos enfocados en un solo comportamiento, la frecuencia óptima de envío para maximizar la retención sin generar fatiga, el formato que funciona mejor (vídeo, quiz, simulación, infografía), y cómo personalizar el contenido según el rol del empleado (el equipo de finanzas recibe formación sobre fraude del CEO, el equipo de IT sobre gestión de credenciales privilegiadas). Qué plataformas de concienciación de seguridad funcionan bien (KnowBe4, Proofpoint Security Awareness, Hoxhunt).

4. CULTURA DE SEGURIDAD: MÁS ALLÁ DE LA FORMACIÓN
¿Cómo creo una cultura de seguridad real en la organización en lugar de solo hacer cursos? Dame el framework de cultura de seguridad: el papel del liderazgo (los directivos que no hacen el phishing simulado o que piden que no les apliquen las políticas de seguridad destruyen la cultura), el programa de embajadores de seguridad en cada equipo, los canales de comunicación de seguridad que llegan al empleado de forma natural (el briefing de seguridad mensual de cinco minutos en el all-hands, el boletín de amenazas reales en el sector), y cómo medir la cultura de seguridad con indicadores cualitativos y cuantitativos.

5. GESTIÓN DEL COMPORTAMIENTO DE RIESGO ARRAIGADO
¿Cómo cambio comportamientos de riesgo que están arraigados en la forma de trabajar? Dame las técnicas de cambio de comportamiento aplicadas a la seguridad: el nudge (diseñar el entorno para que el comportamiento seguro sea el más fácil), el friction by design (hacer que los comportamientos de riesgo sean más difíciles sin prohibirlos), el refuerzo positivo del comportamiento seguro (reconocer a quien reporta un phishing), y cómo manejar a los empleados que reiteradamente incumplen las políticas de seguridad (el proceso disciplinario que la política de seguridad debe contemplar).

6. PROTOCOLO DE REPORTE DE INCIDENTES PARA EMPLEADOS
¿Cómo consigo que los empleados reporten incidentes de seguridad en lugar de ignorarlos o ocultarlos por miedo? Dame el diseño del programa de reporte: el canal de reporte fácil y accesible (un botón en el cliente de email, un número de WhatsApp, un formulario simple), la respuesta inmediata que refuerza el comportamiento de reporte (feedback rápido de que se ha recibido el reporte y se está investigando), la política de no punición para quien reporta de buena fe (incluso si fue quien cayó en el phishing), y cómo comunicar internamente los incidentes reportados para que otros aprendan sin identificar al reportador.

7. MÉTRICAS E INDICADORES DEL PROGRAMA DE CONCIENCIACIÓN
¿Cómo mido si mi programa de concienciación de seguridad está funcionando? Dame el dashboard de métricas del programa: la evolución de la tasa de clic en phishing simulado (tendencia descendente es buena), la tasa de reporte de phishing real y simulado (tendencia ascendente es buena), el número de incidentes de seguridad causados por error humano, el resultado de los tests de conocimiento antes y después de las formaciones, y cómo correlacionar las métricas del programa con los incidentes de seguridad reales para demostrar el ROI del programa al equipo directivo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar un programa de concienciación de seguridad que cambia comportamientos y construye cultura de seguridad.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Seguridad en las operaciones financieras',
                'description'       => 'Protege las operaciones financieras de la empresa contra el fraude y los ataques: la autenticación de pagos, la detección de fraude interno y los controles que previenen los ataques de ingeniería social que suplantan a directivos (BEC).',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en seguridad financiera corporativa y prevención del fraude en empresas. Necesito tu ayuda para diseñar los controles y procedimientos que protegen las operaciones financieras de mi empresa contra los fraudes más comunes: los ataques de ingeniería social que suplantan a directivos (Business Email Compromise), el fraude interno, y los accesos no autorizados a las cuentas y sistemas financieros.

Mi contexto:
- Tamaño de la empresa y volumen de transacciones: [número de empleados, volumen de pagos mensual aproximado]
- Estructura del equipo financiero: [CFO, contables, tesorería, quién tiene autorización para pagos]
- Sistemas que usamos: [ERP, banca online, plataformas de pago, etc.]
- Incidentes o intentos de fraude previos: [si los ha habido]
- Mayor preocupación: [fraude externo (BEC, phishing), fraude interno, acceso no autorizado a sistemas financieros]

Con ese contexto, dame:

1. EL FRAUDE BEC (BUSINESS EMAIL COMPROMISE): CÓMO FUNCIONA Y CÓMO PREVENIRLO
Explícame en detalle cómo funciona el fraude BEC que suplanta a directivos o proveedores: los diferentes vectores de ataque (el email del CEO que pide una transferencia urgente, el proveedor que comunica un cambio de cuenta bancaria, la suplantación del departamento de RRHH para cambiar los datos bancarios de nóminas), cómo el atacante hace su investigación previa (LinkedIn, web de la empresa, correos filtrados), y los controles que previenen cada tipo de BEC: el protocolo de verificación por segundo canal, la política de cambios de cuenta bancaria, y las señales de alerta que deben disparar una verificación adicional.

2. CONTROLES DE AUTORIZACIÓN DE PAGOS Y SEGREGACIÓN DE FUNCIONES
¿Cómo diseño un sistema de autorización de pagos que sea seguro sin paralizar las operaciones? Dame el framework de controles preventivos: la segregación de funciones (quien registra la factura no puede ser quien la aprueba ni quien ejecuta el pago), los límites de autorización por cargo y por importe (con doble firma por encima de cierto umbral), el proceso de validación de nuevos proveedores y cambios de datos bancarios, y cómo implementar estos controles en las plataformas de banca digital y ERPs más comunes. Cuándo el control preventivo es suficiente y cuándo necesito también control detectivo.

3. PREVENCIÓN DEL FRAUDE INTERNO EN FINANZAS
¿Cómo protejo a la empresa del fraude cometido por empleados propios? Dame el análisis del fraude interno financiero más frecuente: el fraude en los gastos (falsificación de tickets, proveedores ficticios), el fraude en nóminas (empleados fantasma, modificación de cuentas bancarias), el fraude en las compras (kickbacks con proveedores), y el fraude en tesorería (apropiación de cobros, manipulación de conciliaciones). Para cada tipo: las señales de alerta, los controles preventivos que lo dificultan, y los controles detectivos que lo identifican rápido si ocurre.

4. SEGURIDAD EN LA BANCA DIGITAL Y PLATAFORMAS DE PAGO
¿Cómo gestiono de forma segura el acceso a las cuentas bancarias y plataformas de pago de la empresa? Dame el protocolo de seguridad para la banca digital corporativa: la política de usuarios y perfiles de acceso en la banca online (quién puede consultar, quién puede preparar órdenes y quién puede ejecutarlas), el uso de tokens o autenticación reforzada para las operaciones de alto riesgo, el proceso de baja inmediata cuando un empleado con acceso a sistemas financieros abandona la empresa, y las alertas de movimientos inusuales que debo configurar en los sistemas bancarios.

5. CONCILIACIÓN Y AUDITORÍA DE LAS OPERACIONES FINANCIERAS
¿Cómo detecto irregularidades en las operaciones financieras a través de la conciliación y la auditoría? Dame el proceso de controles detectivos: la conciliación bancaria periódica y quién debe hacerla (no quien ejecutó las transacciones), la revisión de los pagos a proveedores nuevos o esporádicos, el análisis de los gastos con tarjeta corporativa, la auditoría del libro mayor para detectar asientos inusuales, y cómo usar las herramientas de análisis de datos (incluyendo la Ley de Benford para detectar manipulación de importes) como apoyo a la función de auditoría interna.

6. RESPUESTA A UN INTENTO DE FRAUDE O FRAUDE CONSUMADO
¿Qué hago si detectamos que hemos sido víctimas de un fraude financiero? Dame el playbook de respuesta: los primeros pasos en las primeras horas (bloquear el pago si aún es posible, contactar con el banco, preservar evidencias), la notificación a las autoridades y los plazos relevantes, la comunicación interna y al Consejo de Administración, la reclamación al banco y las posibilidades de recuperación de fondos, y el análisis post-incidente para identificar qué control falló y cómo evitar que se repita.

7. EL PROGRAMA DE FORMACIÓN EN FRAUDE PARA EL EQUIPO FINANCIERO
¿Cómo entreno al equipo financiero para que sea la primera línea de defensa contra el fraude? Dame el programa de formación específico para el departamento financiero: los módulos de reconocimiento del fraude BEC y los intentos de ingeniería social, los ejercicios prácticos de casos reales de fraude en empresas similares a la nuestra, el protocolo de verificación que el equipo debe seguir ante cualquier instrucción de pago inusual, y cómo crear una cultura en el equipo financiero donde cuestionar una instrucción de pago sospechosa sea apoyado y no visto como falta de confianza hacia los directivos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñar controles para proteger las operaciones financieras de la empresa contra el fraude externo e interno.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Ciberseguridad y responsabilidad legal',
                'description'       => 'Las obligaciones legales de la empresa en materia de ciberseguridad: la NIS2, el ENS, la responsabilidad en caso de brecha de seguridad y los aspectos jurídicos que el abogado debe conocer para asesorar correctamente.',
                'prompt_content'    => <<<'PROMPT'
Eres un abogado experto en derecho digital y ciberseguridad con experiencia en el asesoramiento a empresas sobre sus obligaciones legales en materia de seguridad de la información. Necesito que me expliques el marco legal de la ciberseguridad empresarial: qué obliga la ley, cuál es la responsabilidad en caso de incidente, y cómo debe un abogado asesorar correctamente a una empresa sobre este tema.

Mi contexto:
- Tipo de empresa y sector: [tamaño, sector, si es operador de servicios esenciales o proveedor digital]
- País de operación principal: [España, UE, o ambos]
- Situación actual de cumplimiento: [sin análisis de cumplimiento formal / auditoría reciente / revisión en curso]
- Mayor preocupación legal: [brecha de datos, NIS2, responsabilidad contractual con clientes, ENS, etc.]

Con ese contexto, dame:

1. EL MARCO LEGAL DE LA CIBERSEGURIDAD EN ESPAÑA Y LA UE
Explícame el panorama normativo de la ciberseguridad que afecta a las empresas en España y la UE: la Directiva NIS2 (Network and Information Security) transpuesta al derecho español, su ámbito de aplicación (sectores y umbrales), las obligaciones que impone (medidas de seguridad, notificación de incidentes, gobernanza) y las sanciones por incumplimiento. El Esquema Nacional de Seguridad (ENS) y a quién aplica. La relación entre el RGPD y la ciberseguridad. Y las normas sectoriales específicas (sector financiero con DORA, sector salud, telecomunicaciones).

2. RESPONSABILIDAD LEGAL EN CASO DE BRECHA DE SEGURIDAD
¿Qué responsabilidades legales enfrenta la empresa y sus directivos en caso de sufrir una brecha de seguridad? Explícame los diferentes tipos de responsabilidad: la responsabilidad administrativa ante la AEPD (por brecha de datos personales bajo el RGPD) y ante el INCIBE o el CNPIC (por incidentes NIS2), la responsabilidad contractual frente a clientes afectados por una brecha, la responsabilidad civil por daños a terceros, y en qué supuestos puede activarse la responsabilidad penal de administradores y directivos. Qué papel juega la diligencia debida en la limitación de responsabilidad.

3. OBLIGACIONES DE NOTIFICACIÓN DE INCIDENTES
¿Qué incidentes debo notificar, a quién, y en qué plazos? Dame el mapa completo de obligaciones de notificación: la notificación a la AEPD cuando hay una brecha de datos personales (72 horas bajo el RGPD, qué información debe incluir, cuándo también hay que notificar al afectado), la notificación al CCN-CERT o al INCIBE según la naturaleza de la entidad y el incidente bajo NIS2, las notificaciones contractuales a clientes o proveedores que el contrato puede exigir, y cómo gestionar la comunicación durante un incidente sin generar responsabilidad adicional con declaraciones precipitadas.

4. LA DUE DILIGENCE DE CIBERSEGURIDAD EN FUSIONES Y ADQUISICIONES
¿Cómo evalúo el riesgo de ciberseguridad de una empresa que voy a adquirir? Dame el proceso de due diligence de ciberseguridad en M&A: qué aspectos revisar (incidentes previos no divulgados, vulnerabilidades conocidas, cumplimiento normativo, compromisos contractuales de seguridad con clientes), las representaciones y garantías que debo incluir en el contrato de compraventa relacionadas con ciberseguridad, y cómo gestionar el riesgo de que la empresa adquirida haya sufrido una brecha antes del cierre que no se descubrió en la due diligence.

5. CONTRATOS Y CIBERSEGURIDAD: CLÁUSULAS ESENCIALES
¿Qué cláusulas de ciberseguridad debo incluir en los contratos con proveedores, clientes y socios? Dame el análisis de las cláusulas contractuales de seguridad más relevantes: las obligaciones de seguridad del proveedor (medidas mínimas, certificaciones exigidas, derecho de auditoría), las cláusulas de notificación de incidentes en el proveedor que puedan afectar al cliente, la responsabilidad y limitación de responsabilidad por incidentes de seguridad, las cláusulas de continuidad del negocio y recuperación ante desastres, y el Acuerdo de Procesamiento de Datos (DPA) que exige el RGPD cuando el proveedor accede a datos personales.

6. EL PAPEL DEL ABOGADO EN LA RESPUESTA A INCIDENTES
¿Cuál es el papel del asesor legal cuando la empresa sufre un incidente de seguridad? Dame el protocolo de respuesta a incidentes desde la perspectiva legal: por qué el abogado debe estar en el equipo de crisis desde el minuto uno (para proteger la confidencialidad de las comunicaciones y las investigaciones bajo privilegio abogado-cliente), cómo coordinar la respuesta técnica con la legal, las decisiones jurídicas que deben tomarse en las primeras horas (notificar o no a las autoridades, comunicar o no a los afectados, contratar a un perito forense), y cómo preservar las evidencias de forma que sean admisibles si hay procedimientos judiciales posteriores.

7. EL GOBIERNO DE LA CIBERSEGURIDAD DESDE EL CONSEJO DE ADMINISTRACIÓN
¿Cómo asesoro al consejo de administración sobre sus responsabilidades en materia de ciberseguridad? Explícame la tendencia regulatoria que está llevando la ciberseguridad a la agenda del consejo: NIS2 exige que los órganos de dirección aprueben las medidas de gestión de riesgos y sean responsables de su incumplimiento, la tendencia de reguladores financieros (BCE, EBA) de requerir supervisión del riesgo tecnológico al más alto nivel, y cómo debe el abogado asesorar al consejo sobre sus deberes de diligencia en materia de ciberseguridad, incluyendo qué preguntas deben hacerle al CISO y qué información mínima deben recibir periódicamente para poder ejercer su supervisión.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Entender las obligaciones legales de la empresa en ciberseguridad y la responsabilidad en caso de brecha.',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Seguridad en la relación con el cliente',
                'description'       => 'Gestiona los datos del cliente de forma segura: los protocolos de verificación de identidad en el soporte, el manejo de datos sensibles en las conversaciones con clientes y la respuesta cuando hay una brecha que afecta a un cliente.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en Customer Success y en la gestión segura de la relación con el cliente. Necesito tu ayuda para diseñar los protocolos que permiten al equipo de CS manejar los datos de los clientes de forma segura en el día a día: la verificación de identidad en el soporte, la gestión de información sensible en las conversaciones, y la respuesta cuando un incidente de seguridad afecta a un cliente.

Mi contexto:
- Tipo de producto o servicio y datos que maneja: [SaaS, fintech, salud, ecommerce, etc. y qué datos del cliente tenemos]
- Canal principal de soporte: [chat, email, teléfono, videollamada, tickets]
- Tamaño del equipo de CS: [número de personas]
- Incidentes o problemas previos de seguridad en la relación con el cliente: [si los hay]
- Mayor preocupación: [verificación de identidad, acceso a datos en conversaciones, brecha que afecta a clientes, etc.]

Con ese contexto, dame:

1. VERIFICACIÓN DE IDENTIDAD EN EL SOPORTE AL CLIENTE
¿Cómo verifico que la persona que contacta al soporte es quien dice ser? Dame el protocolo de verificación de identidad adaptado a diferentes canales: el proceso de verificación en chat y email (sin contraseñas, porque no debemos pedirlas), la verificación por teléfono (preguntas de verificación que no sean fácilmente descubribles con ingeniería social), el proceso escalonado según el nivel de sensibilidad de la acción solicitada (consultar información es diferente a cambiar datos de pago o eliminar la cuenta), y cómo manejar al cliente legítimo que no supera la verificación sin hacerle sentir que es sospechoso.

2. MANEJO SEGURO DE DATOS SENSIBLES EN LAS CONVERSACIONES CON CLIENTES
¿Cómo gestiona el equipo de CS los datos sensibles que aparecen en las conversaciones con clientes? Dame las políticas de manejo de datos en el soporte: qué información nunca debe pedirse por chat o email (contraseñas, números completos de tarjeta), cómo registrar la información sensible que el cliente comparte espontáneamente sin que quede almacenada en el historial de conversaciones más tiempo del necesario, el acceso del equipo de CS a los datos del cliente (mínimo privilegio: ver solo lo que necesita para resolver el ticket), y la política de pantalla limpia para el equipo que trabaja en remoto o en oficinas compartidas.

3. PROTECCIÓN CONTRA LA INGENIERÍA SOCIAL EN EL SOPORTE
¿Cómo entreno al equipo de CS para reconocer y resistir los intentos de ingeniería social? Explícame los ataques de ingeniería social más comunes dirigidos al equipo de soporte: el vishing (llamada fraudulenta que suplanta a un cliente o a un directivo de la empresa), el pretexting (el atacante crea un escenario creíble para obtener información), y el shoulder surfing en espacios de trabajo compartidos. Dame el protocolo de respuesta cuando el agente sospecha de un intento de ingeniería social: cómo escalar sin revelar al posible atacante que ha sido detectado, y cómo documentar el intento.

4. ACCESO A LA CUENTA DEL CLIENTE DURANTE EL SOPORTE
¿Cuándo y cómo puede el equipo de CS acceder a la cuenta de un cliente para resolver un problema? Dame el protocolo de acceso supervisado a cuentas de cliente: los casos de uso legítimos (debug, reproducción de un bug, migración de datos), las condiciones que deben cumplirse (solicitud explícita del cliente, registro del acceso, duración limitada), las herramientas de impersonation que registran la sesión para auditoría, y cómo comunicar al cliente que hemos accedido a su cuenta y para qué, incluyendo las obligaciones de transparencia bajo el RGPD.

5. RESPUESTA A UNA BRECHA QUE AFECTA A UN CLIENTE
¿Cómo gestiona el equipo de CS la comunicación con un cliente cuando hay una brecha de seguridad que le afecta? Dame el playbook de comunicación de incidentes de seguridad a clientes: el mensaje inicial de notificación (qué decir, qué no decir, en qué plazo), las preguntas frecuentes que el cliente va a hacer y las respuestas que el equipo de CS debe dar (y las que no puede dar porque están en manos del equipo legal o de seguridad), cómo gestionar al cliente enfadado o asustado en la primera conversación post-brecha, y el proceso de seguimiento una vez el incidente está contenido.

6. PRIVACIDAD DEL CLIENTE EN EL DÍA A DÍA DEL CS
¿Cómo cumple el equipo de CS con las obligaciones de privacidad del RGPD en sus operaciones cotidianas? Dame la guía práctica: el derecho de acceso del cliente a sus propios datos (cómo procesar la solicitud de un cliente que pide todos los datos que tenemos de él), el derecho al olvido (cómo eliminar los datos del cliente cuando solicita la cancelación o el borrado), el tratamiento de conversaciones de soporte que contienen datos personales de terceros (el cliente menciona a un empleado suyo o a un familiar), y cómo gestionar los datos de clientes en las herramientas de CS (helpdesk, CRM) de forma que cumplan el RGPD.

7. MÉTRICAS DE SEGURIDAD EN EL EQUIPO DE CS
¿Cómo mido que el equipo de CS está manejando los datos de los clientes de manera segura? Dame el dashboard de métricas de seguridad para CS: el número de tickets que involucraron datos sensibles y si se gestionaron siguiendo el protocolo, el resultado de los ejercicios de phishing simulado aplicados al equipo de CS, el tiempo de respuesta a solicitudes de privacidad de clientes (RGPD exige responder en un mes), el número de accesos a cuentas de clientes y su justificación, y las métricas de formación en seguridad del equipo (completado de módulos, resultado de evaluaciones).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Diseñar protocolos para que el equipo de CS maneje los datos del cliente de forma segura en el día a día.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Ciberseguridad del freelance',
                'description'       => 'Protege tu negocio y los datos de tus clientes: las herramientas básicas (gestor de contraseñas, 2FA, VPN), los contratos que delimitan la responsabilidad en caso de incidente y los hábitos de seguridad que los freelancers que trabajan con clientes enterprise necesitan demostrar.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en ciberseguridad con experiencia en ayudar a profesionales independientes y freelancers a proteger su negocio y los datos de sus clientes. Necesito que me ayudes a implementar la seguridad básica que todo freelance profesional debe tener, especialmente si trabajo con clientes empresa que cada vez exigen más garantías de seguridad a sus proveedores.

Mi contexto:
- Tipo de servicio freelance: [desarrollo, diseño, consultoría, redacción, marketing, etc.]
- Tipo de datos que manejo de mis clientes: [código fuente, datos de clientes del cliente, documentos confidenciales, credenciales de acceso a sus sistemas, etc.]
- Herramientas y plataformas que uso para trabajar: [laptop, sistemas operativos, herramientas de colaboración, almacenamiento en la nube, etc.]
- Nivel actual de seguridad: [sin medidas específicas / algo básico / quiero profesionalizarlo]
- Mayor preocupación: [hackeo de mi cuenta, pérdida de datos del cliente, robo del portátil, acceso a sistemas del cliente, responsabilidad en caso de incidente]

Con ese contexto, dame:

1. LAS CINCO MEDIDAS DE SEGURIDAD QUE TODO FREELANCE NECESITA
Explícame las cinco medidas de seguridad básicas que cualquier freelance profesional debe tener implementadas: el gestor de contraseñas (cómo elegir uno, cómo usarlo correctamente, por qué es más seguro que recordar las contraseñas), el doble factor de autenticación en todas las cuentas críticas (email, cuentas de cliente, bancarias), el cifrado del disco del portátil (cómo activarlo en Windows y macOS), las copias de seguridad automatizadas de los proyectos (regla 3-2-1 adaptada al freelance), y las actualizaciones automáticas del sistema operativo y las aplicaciones. Para cada medida dame el tiempo aproximado de implementación y el coste.

2. GESTIÓN SEGURA DE LAS CREDENCIALES DE CLIENTES
¿Cómo gestiono de forma segura las contraseñas y accesos que mis clientes me dan para trabajar? Dame el protocolo de gestión de credenciales de cliente: nunca almacenar contraseñas de clientes en texto plano (Word, Excel, papel), el uso del gestor de contraseñas para almacenar credenciales de cliente en una bóveda separada, el protocolo de recepción de credenciales (pedir que el cliente te las pase por canal seguro, no por WhatsApp o email sin cifrar), la eliminación de credenciales al final del proyecto, y la recomendación al cliente de cambiar las credenciales que te dio una vez terminado el trabajo.

3. VPN Y SEGURIDAD EN REDES PÚBLICAS Y COWORKING
¿Cómo me protejo cuando trabajo desde cafeterías, aeropuertos o espacios de coworking? Explícame los riesgos de las redes WiFi públicas para un freelance que maneja datos de clientes, cuándo una VPN es necesaria y cuándo no, cómo elegir una VPN fiable (y cuáles evitar porque venden tus datos), y las alternativas a la VPN para situaciones donde la VPN no es práctica. Incluye también la protección física del portátil en espacios públicos (pantalla de privacidad, bloqueo automático, Kensington lock).

4. SEGURIDAD EN LOS DISPOSITIVOS Y EL ENTORNO DE TRABAJO
¿Cómo configuro mis dispositivos para minimizar el riesgo de robo o pérdida de datos? Dame el checklist de seguridad del entorno de trabajo del freelance: el cifrado del disco y la política de pantalla bloqueada, el uso de cuentas separadas para trabajo y uso personal (o dispositivos separados si el presupuesto lo permite), la gestión segura de los dispositivos móviles que también acceden a información de clientes, y el protocolo en caso de pérdida o robo del portátil (denuncia, notificación al cliente, borrado remoto si está configurado, cambio de credenciales).

5. CONTRATOS QUE DELIMITAN LA RESPONSABILIDAD EN CASO DE INCIDENTE
¿Cómo protejo contractualmente mi responsabilidad si hay un incidente de seguridad que afecta a los datos de mi cliente? Dame las cláusulas contractuales que todo freelance debe incluir en sus contratos en materia de seguridad: la delimitación de mi responsabilidad (solo soy responsable de los datos que manejo en mi entorno, no de los que están en los sistemas del cliente), las obligaciones de seguridad que asumo (cifrado, no compartir con terceros, eliminación al finalizar), la limitación de responsabilidad económica en caso de incidente, y cuándo mi seguro de responsabilidad civil profesional cubre incidentes de seguridad.

6. CÓMO DEMOSTRAR SEGURIDAD A CLIENTES ENTERPRISE
¿Qué necesito tener para que un cliente grande confíe en mi seguridad como freelance? Dame el mínimo viable de seguridad que los clientes enterprise suelen exigir a sus proveedores individuales: las políticas de seguridad documentadas que puedo redactar yo mismo (política de gestión de contraseñas, política de uso de dispositivos, política de eliminación de datos), el Acuerdo de Procesamiento de Datos (DPA) que el cliente me puede pedir firmar bajo el RGPD, el seguro de responsabilidad civil profesional (y qué cobertura es razonable para un freelance), y cuándo una certificación como ISO 27001 es desproporcionada y cuándo puede ser necesaria para acceder a ciertos clientes.

7. HÁBITOS DE SEGURIDAD DEL FREELANCE PROFESIONAL
¿Cuáles son los hábitos de seguridad que diferencian al freelance que maneja bien la seguridad del que pone en riesgo a sus clientes? Dame la rutina de seguridad del freelance profesional: el cierre de sesión de los sistemas del cliente al terminar la jornada, la revisión periódica de los accesos que tienes a sistemas de clientes y la revocación de los que ya no necesitas, la actualización de contraseñas comprometidas usando el monitor del gestor de contraseñas, el proceso de cierre seguro del proyecto (eliminación de datos, revocación de accesos, entrega de credenciales), y cómo mantenerte al día de las amenazas de seguridad relevantes para tu tipo de trabajo sin dedicar horas cada semana a ello.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Implementar la seguridad básica que protege el negocio del freelance y los datos de sus clientes.',
                'vote_score'        => 41,
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
