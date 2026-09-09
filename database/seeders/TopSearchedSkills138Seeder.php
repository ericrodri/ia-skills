<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills138Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing sin cookies de terceros',
                'description'      => 'El mundo post-cookie: first-party data, contextual targeting y las estrategias de medición que funcionan cuando no puedes rastrear al usuario entre sitios.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing digital y privacidad con especialización en estrategias de medición y segmentación en el mundo post-cookie. Quiero adaptar mi estrategia de marketing para un entorno donde las cookies de terceros ya no están disponibles o su uso está fuertemente restringido.

Mi situación actual:
[Describe tu empresa: sector, volumen de tráfico web mensual, qué porcentaje del presupuesto de marketing va a paid media (Google Ads, Meta, programática), y cuánto dependes hoy de las cookies de terceros para la segmentación y el retargeting]

Mis objetivos de marketing:
[Adquisición de nuevos clientes, retargeting de visitantes que no convirtieron, medición de atribución cross-canal, personalización de la experiencia web, o todos los anteriores]

Mi estado de madurez en first-party data:
[¿Tienes CDP, CRM, login de usuarios, newsletter? ¿Cuántos emails tienes en tu base de datos y qué porcentaje de tu tráfico web está autenticado?]

Con ese contexto, diseña mi estrategia de marketing post-cookie:

**1. Diagnóstico del impacto en mi negocio**
Analiza qué parte de mi stack de marketing y medición se ve afectada por la desaparición de las cookies de terceros: qué capacidades de segmentación en paid media pierdo, cómo afecta a mi modelo de atribución, qué pasa con el retargeting que actualmente funciona, y cómo se ve afectada la medición del impacto de las campañas de awareness. Dame el mapa de impacto priorizado.

**2. Estrategia de first-party data**
Construye el plan para capturar y activar mis propios datos: qué datos recoger en cada touchpoint del usuario (web, email, app, CRM), los mecanismos de captura de email y datos voluntarios (lead magnets, login, preferencias), cómo enriquecer el perfil del usuario a lo largo del tiempo con cada interacción, y el CDP o stack técnico que necesito para centralizar y activar esa data.

**3. Contextual targeting**
Explica cómo adaptar la compra de media a un modelo de targeting contextual: cómo identificar los contextos (webs, categorías de contenido, momentos del día) donde mi audiencia está cuando está en modo de compra, cómo negociar directamente con los publishers más relevantes, y qué señales de contexto son más predictivas del comportamiento de compra en mi categoría.

**4. Modelado de audiencias con cohorts**
Diseña la estrategia de modelado de audiencias compatible con privacidad: los modelos de cohortes de comportamiento sin identificar al usuario individual, cómo usar los datos agregados para inferir las características de los visitantes que convierten, y cómo traducir esos insights en criterios de targeting para las plataformas de paid media.

**5. Medición y atribución sin cookies**
Construye el modelo de medición para el mundo post-cookie: Marketing Mix Modeling (MMM) para entender la contribución de cada canal, Incrementality Testing para medir el impacto real de las campañas, y la combinación de datos first-party con las APIs de conversión de las plataformas (Meta CAPI, Google Enhanced Conversions) para mejorar la señal sin cookies. Define qué modelo de atribución adoptar dado mi mix de medios.

**6. Email marketing y CRM como canal principal**
Explica cómo potenciar el email marketing como el canal que no depende de cookies: la estrategia de segmentación basada en comportamiento propio (aperturas, clics, compras, navegación en web cuando el usuario está logado), la personalización basada en datos del CRM, y cómo usar el email como señal de conversión para optimizar las campañas de paid media mediante Customer Match.

**7. Estrategia en walled gardens**
Adapta la estrategia para los entornos cerrados que tienen sus propios datos de usuario (Google, Meta, Amazon, LinkedIn): cómo maximizar el uso de Customer Lists para llegar a audiencias conocidas, cómo usar las Lookalike Audiences basadas en tus conversores, y cómo medir el impacto dentro de cada walled garden cuando la atribución cross-canal ya no es posible.

**8. Personalización web sin cookies de terceros**
Diseña la estrategia de personalización de la experiencia web sin identificar al usuario entre sesiones: la personalización dentro de la sesión basada en comportamiento en tiempo real, la personalización para usuarios autenticados (que sí puedes reconocer), y el uso de señales de contexto (fuente de tráfico, dispositivo, hora del día, localización aproximada) para servir el contenido más relevante.

**9. Consent management y privacidad como ventaja**
Explica cómo convertir el compliance en ventaja competitiva: el diseño del consent banner que maximiza la tasa de aceptación sin engañar al usuario, la transparencia como diferenciador de marca (explicar exactamente qué datos recoges y para qué), y cómo la confianza del usuario en el manejo de sus datos se traduce en mayor disposición a compartirlos voluntariamente.

**10. Roadmap de transformación**
Dame el plan de transformación por prioridad: qué implementar en los primeros 30 días para proteger la medición básica (Google Enhanced Conversions, Meta CAPI), qué construir en los primeros 6 meses (estrategia de first-party data, CDP, email como canal principal), y qué desarrollar a largo plazo (MMM, incrementality testing, audiencias modeladas). Con qué métricas medir el éxito de cada fase.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Adaptar la estrategia de marketing para funcionar sin cookies de terceros con first-party data y contextual targeting.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Privacy by design en el código',
                'description'      => 'Implementa privacidad desde el inicio: minimización de datos, cifrado, anonimización y las decisiones de arquitectura que cumplen con GDPR sin afectar la experiencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software especializado en seguridad y privacidad de datos con experiencia en implementación de Privacy by Design en aplicaciones web y móviles. Quiero implementar privacidad desde el primer día de desarrollo sin sacrificar la funcionalidad ni la experiencia del usuario.

Mi stack técnico:
[Describe el stack: lenguaje de programación, framework web, base de datos, servicios de terceros que usas (analytics, monitorización, email, pagos), y si la aplicación es web, móvil o ambas]

Los datos que manejo:
[Lista los tipos de datos personales que procesas: email, nombre, dirección, datos de comportamiento, datos de pago, datos de salud, u otros datos sensibles]

Mi situación de compliance:
[¿Tienes ya un DPO, política de privacidad, registro de actividades de tratamiento? ¿Has recibido alguna auditoría o solicitud de acceso de usuarios?]

Con ese contexto, diseña mi implementación de Privacy by Design:

**1. Principios de Privacy by Design en código**
Explica los 7 principios de Privacy by Design de Ann Cavoukian y cómo se traducen a decisiones concretas de código: privacidad proactiva (no esperar a que haya un problema), privacidad como valor predeterminado (el setting más restrictivo por defecto), privacidad embebida en el diseño (no como capa adicional), y los demás principios con un ejemplo de código para cada uno.

**2. Minimización de datos en el modelo de datos**
Diseña el esquema de base de datos aplicando minimización: cómo decidir qué campos realmente necesitas (el test "¿para qué uso exacto necesito este dato?"), cómo evitar recoger datos "por si acaso", la separación de datos de identificación de datos de comportamiento, y cómo estructurar las tablas para facilitar la anonimización y el derecho al olvido sin romper la integridad referencial.

**3. Cifrado en reposo y en tránsito**
Construye la estrategia de cifrado: qué datos cifrar en la base de datos (no todo necesita cifrado a nivel de campo, pero algunos sí), cómo implementar cifrado a nivel de campo para datos especialmente sensibles, la gestión de claves de cifrado (dónde guardar las claves, cómo rotar sin perder acceso a los datos), y el TLS correcto en todas las comunicaciones con los estándares actuales.

**4. Anonimización y pseudonimización**
Explica la diferencia técnica y legal entre anonimización y pseudonimización, y cuándo usar cada una: cómo implementar pseudonimización en la base de datos (separación de identificadores reales en tabla aparte), técnicas de anonimización para datos de analytics y logs (k-anonymity, l-diversity), y cómo verificar que los datos anonimizados no son re-identificables con los ataques más comunes.

**5. Gestión del consentimiento en el código**
Diseña la implementación técnica del consentimiento: la tabla de registro de consentimientos con el timestamp, la versión de la política y el canal, cómo vincular el consentimiento a cada tratamiento de datos en el código, el sistema de revocación que activa la cascada de cambios (dejar de enviar emails, anonimizar datos de analytics, marcar para borrado), y los logs de auditoría inmutables.

**6. Derechos de los interesados: implementación técnica**
Construye los endpoints y procesos para cumplir los derechos del GDPR: el derecho de acceso (endpoint que genera el JSON con todos los datos del usuario en menos de 72 horas), el derecho de portabilidad (exportación en formato estándar: CSV, JSON), el derecho al olvido (el proceso de borrado que elimina o anonimiza todos los registros, incluyendo backups, logs y servicios de terceros), y el derecho de rectificación.

**7. Logs y monitorización con privacidad**
Diseña la estrategia de logging que da observabilidad sin comprometer la privacidad: qué no loguear nunca (passwords, tokens completos, datos de pago, contenido de mensajes privados), cómo loguear IPs de forma que sean útiles para debugging pero no rastreables individualmente (truncado o hashing), la retención de logs y el proceso de purga automática, y las herramientas de APM y error tracking que son compatible con privacidad.

**8. Integraciones con terceros y flujos de datos**
Explica cómo gestionar los datos en las integraciones con servicios de terceros: qué datos enviar a cada servicio (solo los mínimos necesarios para la función específica), los contratos de tratamiento de datos (DPA) con cada proveedor y cómo auditarlos, el proceso de evaluación de nuevas herramientas desde una perspectiva de privacidad antes de integrarlas, y qué hacer cuando un proveedor de terceros sufre un breach.

**9. Privacy Impact Assessment (PIA) en el ciclo de desarrollo**
Diseña el proceso de evaluación de impacto en la privacidad integrado en el SDLC: cuándo ejecutar un PIA (nuevas features que procesan datos personales, cambios en los flujos de datos, nuevas integraciones), el template de PIA con las preguntas clave, y cómo documentar la decisión de aceptar el riesgo o implementar mitigaciones. El PIA no es burocracia: es la conversación estructurada que evita el incidente.

**10. Respuesta a incidentes de seguridad y privacidad**
Construye el playbook de respuesta a un breach: la detección (qué alertas configurar para identificar un breach tan pronto como sea posible), la clasificación del incidente (¿se han expuesto datos personales? ¿cuántos usuarios afectados?), la notificación a la AEPD en el plazo de 72 horas (qué información incluir), la comunicación a los usuarios afectados, y el proceso de post-mortem que mejora la postura de seguridad para que no vuelva a ocurrir.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Implementar privacidad by design en el código con minimización de datos, cifrado y gestión de derechos GDPR.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño para la privacidad',
                'description'      => 'Consent flows, cookie banners y los patrones de diseño que cumplen la ley sin matar la conversión: la UX de privacidad que respeta al usuario.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en UX design y privacidad digital con experiencia diseñando flujos de consentimiento que equilibran el compliance legal con la experiencia del usuario y la conversión del negocio. Quiero rediseñar los patrones de privacidad de mi producto para que cumplan la ley y no dañen la conversión.

Mi producto y contexto:
[Describe el producto: web o app, tipo de usuario (consumidor final o empresa), en qué mercados opera (Europa, global) y qué tipo de datos procesas (cookies analíticas, personalización, datos de pago, datos de salud)]

Mi situación actual:
[¿Cómo es tu cookie banner actual: ¿cumplis el GDPR o tienes patrones de dark UX que ya estás usando? ¿Tienes métricas de la tasa de aceptación de cookies y cómo ha afectado la conversión?]

Mis objetivos:
[Cumplir con GDPR y ePrivacy, maximizar la tasa de consentimiento de forma ética, mejorar la percepción de privacidad de la marca, o los tres]

Con ese contexto, diseña la UX de privacidad de mi producto:

**1. Auditoría de los patrones de privacidad actuales**
Analiza los patrones de privacidad de mi producto contra los criterios de la AEPD y las directrices del EDPB: los dark patterns más frecuentes (el botón de rechazar enterrado, el pre-tick de consentimiento, la jerarquía visual que favorece la aceptación), cuáles de ellos están en mi diseño actual, y el riesgo legal y reputacional de cada uno.

**2. Cookie banner que cumple y convierte**
Diseña el cookie banner que cumple el GDPR sin Dark UX: los elementos obligatorios (información clara sobre el propósito de cada categoría de cookie, opciones genuinas de aceptar todo, rechazar todo y gestionar preferencias), el principio de equivalente prominencia (rechazar debe ser igual de fácil que aceptar), el diseño visual que no manipula sin que la tasa de aceptación se hunda. Incluye el wireframe y las decisiones de diseño detrás de cada elemento.

**3. Centro de preferencias de privacidad**
Diseña el panel de preferencias de privacidad completo: la arquitectura de categorías de cookies y tratamientos (estrictamente necesarias, analytics, marketing, personalización), las descripciones de cada categoría en lenguaje claro (no el lenguaje legal que nadie entiende), los toggles con estado visual claro, y el acceso desde cualquier página del producto para que el usuario pueda cambiar sus preferencias cuando quiera.

**4. Flujos de consentimiento contextual**
Explica cuándo usar consentimiento contextual en lugar del banner genérico: el momento de pedir permiso para notificaciones push (cuando el usuario acaba de conseguir su primer resultado, no al entrar), el permiso para la cámara o el micrófono (justo antes de necesitarlo, con explicación clara del por qué), y el permiso para la localización (con la descripción exacta de cómo mejora la experiencia). El consentimiento contextual convierte mucho más que el genérico.

**5. Política de privacidad legible**
Rediseña la política de privacidad como documento útil para el usuario, no solo como documento legal: el resumen ejecutivo al principio con los puntos más importantes, la estructura navegable con índice y anclas por sección, el lenguaje claro y directo (nada de "podríamos eventualmente compartir con terceros cuidadosamente seleccionados"), las infografías que explican el flujo de datos, y la tabla de cookies con el propósito exacto de cada una.

**6. Onboarding con privacidad by default**
Diseña el flujo de onboarding que incorpora las opciones de privacidad de forma natural: cuándo pedir cada permiso (email primero, datos adicionales después cuando ya hay confianza), cómo presentar las opciones de privacidad como valor (no como obstáculo), y el diseño del perfil de privacidad que el usuario puede ver y gestionar en cualquier momento desde la configuración.

**7. Gestión de los derechos del usuario en la UI**
Construye las interfaces que permiten al usuario ejercer sus derechos GDPR sin necesitar contactar al soporte: el botón de exportar mis datos (con indicador de progreso y descarga cuando está listo), la opción de borrar mi cuenta (con advertencia clara de lo que se borrará y lo que no), la vista de todos mis datos para ejercer el derecho de acceso, y la modificación de datos incorrectos. Diseña cada flujo con atención al estado emocional del usuario.

**8. Privacidad en el diseño de formularios**
Explica los principios de diseño de formularios con privacidad: pedir solo los campos estrictamente necesarios para el propósito declarado, la microcopia que explica por qué necesitas cada dato sensible, el diseño de los campos de contraseña (mostrar/ocultar, indicador de fortaleza), y la prevención de filtrado de información a través del comportamiento del formulario (como revelar si un email ya existe en el sistema).

**9. Privacidad como diferenciador de marca**
Diseña la comunicación de la privacidad como valor de marca: el Trust Center público donde muestras tus certificaciones, tus sub-procesadores y tus prácticas de seguridad, el changelog de privacidad cuando cambias algo, y la comunicación proactiva con los usuarios cuando hay una mejora en la protección de sus datos. La privacidad comunica transparencia, y la transparencia construye confianza que convierte en retención.

**10. Testing y métricas de la UX de privacidad**
Define el framework de medición del diseño de privacidad: la tasa de consentimiento por categoría de cookie como métrica de calidad del diseño (no como objetivo a maximizar a cualquier coste), la tasa de uso del centro de preferencias (si nadie accede, es que no saben que existe), el tiempo hasta encontrar cómo rechazar o gestionar los permisos como métrica de facilidad, y el impacto en la conversión de los distintos diseños de banner (A/B testing ético).
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar flujos de consentimiento y patrones de privacidad que cumplen la ley sin dañar la conversión.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas en sectores regulados',
                'description'      => 'Vende soluciones que manejan datos sensibles en banca, salud o gobierno: los ciclos más largos, los requerimientos de seguridad y el proceso de aprobación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en ventas B2B en sectores altamente regulados (banca, seguros, salud, administración pública) con experiencia navegando procesos de compra complejos con requisitos de seguridad y compliance estrictos. Quiero aprender a vender mi solución en este tipo de entornos.

Mi solución y contexto:
[Describe tu producto o servicio: qué hace, qué datos maneja (datos financieros, datos de salud, datos de ciudadanos, datos personales regulados) y en qué sector o sectores quieres entrar]

Mi experiencia previa:
[¿Has vendido antes en sectores regulados? ¿Tienes ya algún cliente en estos sectores o es un mercado nuevo para ti? ¿Cuál es tu mayor barrera actual para entrar?]

El cliente objetivo:
[Describe la organización tipo: ¿banco retail, aseguradora, hospital público, administración regional? ¿Cuántos empleados, qué tipo de decisión es la compra que les propones?]

Con ese contexto, diseña mi estrategia de ventas en sectores regulados:

**1. El proceso de compra en sectores regulados**
Mapea el proceso de compra típico en el sector que me interesa: los actores involucrados en la decisión (el business champion, el equipo de IT, el CISO, el DPO, el departamento legal, el comité de compras), los tiempos realistas de cada etapa, los hitos burocráticos que no puedo acelerar, y los factores que sí puedo influir para mover el proceso más rápido.

**2. Certificaciones y requisitos de seguridad**
Explica qué certificaciones y cumplimiento necesito para ser elegible como proveedor: las certificaciones de seguridad que el cliente va a exigir (ISO 27001, SOC 2, ENS para el sector público español, PCI-DSS para pagos, HIPAA para salud en EEUU), cuáles obtener primero según el sector objetivo, y cómo usar el proceso de certificación como parte de la narrativa de ventas antes de tenerlas todas.

**3. El RFP y los procesos de licitación**
Diseña la estrategia para procesos formales de selección de proveedores: cómo detectar cuando hay un RFP que encaja con mi solución, la decisión de participar o no (el coste de responder un RFP es alto, hay que ser selectivo), cómo redactar una propuesta técnica que supera el filtro de los criterios formales, y cómo influir en los criterios del RFP antes de que se publique (la venta real ocurre antes del RFP, no durante).

**4. La narrativa de seguridad y compliance**
Construye el mensaje de ventas adaptado al interlocutor de seguridad: cómo hablar con el CISO (el lenguaje de riesgos y controles, no de features), con el DPO (el lenguaje de bases jurídicas y derechos de los interesados), y con el equipo legal (el contrato de tratamiento de datos como primer documento, no el último). La privacidad y la seguridad no son objeciones en estos sectores: son requisitos de entrada.

**5. Prueba de concepto y pilots en entornos regulados**
Diseña la estrategia de PoC para sectores regulados: cómo proponer un pilot que el equipo de seguridad apruebe (entorno sandbox, datos anonimizados, accesos restringidos), la duración y los criterios de éxito del pilot acordados por escrito antes de empezar, y cómo convertir el éxito del pilot en un proceso de compra formal sin que el cliente use el aprendizaje del pilot para construirlo internamente.

**6. Gestión de los tiempos largos**
Explica cómo gestionar comercialmente un ciclo de venta de 12-24 meses sin perder el momentum: las actividades de nurturing que mantienen la relación activa sin ser pesado, los hitos internos del cliente que hay que conocer (presupuestos anuales, comités trimestrales de aprobación), y cómo gestionar el pipeline de ingresos cuando la incertidumbre en los tiempos es muy alta.

**7. La venta multiestakeholder**
Diseña la estrategia para avanzar en una organización donde hay múltiples vetos: cómo mapear el organigrama de influencia real (que no siempre es el jerárquico), cómo construir coalición interna de personas que apoyan tu solución antes de llegar al decisor, y cómo manejar los vetos inesperados (el CISO que dice no en el último momento, el equipo legal que añade condiciones que no aceptas).

**8. Contratos y negociación con grandes organizaciones**
Explica las particularidades de la negociación contractual en sectores regulados: los términos no negociables que suelen imponer las grandes organizaciones (indemnidad, auditorías del cliente a tu infraestructura, derecho a rescindir si cambias la estructura de propiedad), los que sí son negociables, y los límites de responsabilidad que protegen a tu empresa sin bloquear el deal.

**9. Referencias y casos de éxito en el sector**
Diseña la estrategia de referencias para entrar en un sector nuevo: por qué el primer cliente de referencia en un sector vale mucho más que su facturación directa, cómo conseguir el primer cliente en el sector (precio de entrada, co-desarrollo, máxima dedicación en la implementación), y cómo estructurar el caso de éxito de forma que sea útil para el siguiente proceso de ventas.

**10. El modelo de partnership como atajo**
Explica cómo los partnerships con integradores y consultoras especializadas aceleran la entrada en sectores regulados: cómo identificar los socios que ya tienen la relación y la confianza del cliente objetivo, qué tipo de acuerdo de partnership tiene sentido (referral, resell, co-sell), y cómo evitar que el partner se convierta en un filtro que te separa del cliente en lugar de un amplificador de tu solución.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Aprender a vender soluciones con datos sensibles en sectores regulados como banca, salud o administración pública.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de datos de producto',
                'description'      => 'Qué datos recoger, cómo almacenarlos, cuánto tiempo retenerlos y las decisiones de producto que equilibran el valor del dato con el respeto a la privacidad del usuario.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en product management con especialización en estrategia de datos y privacidad con experiencia en productos digitales que procesan datos de usuarios. Quiero diseñar la estrategia de datos de mi producto que maximiza el valor para el negocio respetando la privacidad del usuario y cumpliendo el GDPR.

Mi producto y contexto:
[Describe el producto: tipo de usuarios, qué hace el producto, qué datos genera el uso del producto (comportamiento, contenido generado, datos de perfil, datos de pago, datos de localización)]

Mi situación actual:
[¿Tienes definida la estrategia de datos? ¿Qué eventos de analytics tienes implementados? ¿Usas un CDP o está todo en el warehouse? ¿Has recibido solicitudes de derechos de usuarios?]

Mis objetivos:
[¿Qué quieres conseguir con los datos: mejorar la personalización, alimentar modelos de ML, mejorar el funnel de conversión, o entender mejor el comportamiento del usuario?]

Con ese contexto, diseña la estrategia de datos de mi producto:

**1. El inventario de datos: qué tenemos y para qué**
Ayúdame a hacer el inventario completo de los datos que procesa mi producto: los datos de identificación (nombre, email, ID de dispositivo), los datos de comportamiento (eventos, sesiones, rutas de navegación), los datos de contenido generado por el usuario, los datos de preferencias y configuración, y los datos de transacción. Para cada categoría, la base jurídica de tratamiento bajo el GDPR y el valor de negocio que genera.

**2. El principio de minimización aplicado al producto**
Explica cómo aplicar la minimización de datos en las decisiones de producto: el test "¿para qué uso específico necesito este dato?" antes de añadir cualquier nuevo campo de recopilación, cómo decidir entre recoger el dato exacto (más preciso, mayor riesgo) o un dato agregado (menos preciso, menor riesgo), y los datos que muchos productos recogen "por si acaso" que deberías eliminar del tuyo.

**3. Taxonomía de eventos de analytics**
Diseña la taxonomía de eventos de analytics que equilibra la utilidad para el negocio con la privacidad: los eventos que necesitas sí o sí (activación, retención, conversión), los eventos que son útiles pero prescindibles, y los que no deberías implementar porque capturan demasiado sin proporcionar valor proporcional. Incluye la estructura de naming convention y los atributos de cada evento.

**4. Política de retención de datos**
Construye la política de retención de datos: cuánto tiempo necesitas realmente cada tipo de dato (los datos de comportamiento detallado son útiles durante 90 días, los datos agregados durante años), cómo implementar la purga automática por tipo de dato y por usuario (cuando un usuario elimina su cuenta), y cómo documentar la política de retención para poder demostrarla ante una auditoría.

**5. Anonimización y pseudonimización para analytics**
Explica cómo implementar analytics con privacidad: la pseudonimización de los IDs de usuario en las tablas de analytics (separar el ID interno del ID de analytics), la anonimización de IPs en los logs de acceso, y las técnicas de differential privacy para publicar estadísticas de uso sin revelar comportamiento individual. Qué herramientas de analytics son más privacy-friendly por diseño (Plausible, PostHog con datos propios, vs Google Analytics).

**6. El data warehouse y el acceso a los datos**
Diseña la gobernanza de datos en el warehouse: qué roles tienen acceso a qué tablas (el equipo de datos vs el equipo de producto vs el equipo de marketing), cómo implementar row-level security para que nadie pueda ver datos individuales de usuarios sin necesidad explícita, y cómo auditar quién accede a qué datos y cuándo para detectar accesos inapropiados.

**7. Machine learning con privacidad**
Explica cómo usar los datos de usuarios para entrenar modelos de ML sin comprometer su privacidad: técnicas de Federated Learning cuando el dato no puede salir del dispositivo, el uso de datos sintéticos para desarrollo y pruebas, cómo documentar el dataset de entrenamiento para cumplir con el principio de transparencia del GDPR, y qué pasa cuando el modelo "recuerda" datos de entrenamiento individuales (model memorization).

**8. Transparencia con el usuario sobre el uso de sus datos**
Diseña la experiencia de transparencia en el producto: la vista de "mis datos" donde el usuario ve exactamente qué datos tienes de él y desde cuándo, la explicación en lenguaje claro de cómo se usan sus datos para mejorar la experiencia (la explicación de la personalización que genera confianza en lugar de inquietud), y el control real sobre las preferencias de uso de datos dentro del producto.

**9. Datos de producto y decisiones de roadmap**
Explica cómo usar los datos de forma ética para tomar decisiones de producto: el framework de decisión que combina datos cuantitativos (qué hacen los usuarios) con datos cualitativos (por qué lo hacen), cómo evitar que los datos lleven a optimizar la métrica equivocada (maximizar el engagement sin importar si crea valor real), y cómo comunicar al equipo las decisiones de datos con la dimensión ética incorporada.

**10. Preparación para incidentes de datos**
Construye el plan de respuesta ante un incidente que afecta a datos de usuarios: la detección del incidente (qué alertas configurar), la clasificación (¿cuántos usuarios afectados y qué datos expuestos?), la comunicación interna y la notificación a la AEPD en el plazo de 72 horas, la comunicación a los usuarios afectados, y la mejora post-incidente. El incidente que se gestiona bien puede construir más confianza que nunca haber tenido un incidente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar la estrategia de datos de producto que maximiza el valor para el negocio respetando la privacidad del usuario.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'GDPR en RRHH',
                'description'      => 'Los datos de empleados y candidatos bajo el RGPD: consentimiento, retention periods, derechos de acceso y las obligaciones que el equipo de RRHH suele desconocer.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en derecho laboral y protección de datos con especialización en el tratamiento de datos de empleados y candidatos bajo el RGPD. Quiero entender y cumplir con las obligaciones específicas de protección de datos en el ámbito de los recursos humanos.

Mi contexto:
[Tamaño de la empresa, países donde operas (España y/o UE), si tienes DPO nombrado, y el volumen de candidatos que procesas al mes y de empleados activos]

Mi situación actual:
[¿Tienes formalizados los procesos de datos en RRHH: cláusulas de protección de datos en los contratos, política de retención de CVs, procedimiento de solicitud de derechos? ¿Has recibido ya alguna solicitud de acceso o borrado?]

Mi mayor duda o riesgo:
[¿Cuál es el proceso de RRHH donde más dudas tienes sobre el compliance: la selección de personal, la gestión del empleado activo, el offboarding, o la gestión de datos en las herramientas de RRHH?]

Con ese contexto, explícame el GDPR en RRHH:

**1. Bases jurídicas del tratamiento de datos en RRHH**
Explica las bases jurídicas del RGPD aplicadas al ciclo de vida del empleado: la ejecución del contrato como base principal para los datos del empleado activo (nómina, gestión de la jornada, evaluación del desempeño), el interés legítimo como base para algunos usos secundarios, la obligación legal para los datos que exige la legislación laboral (cotizaciones, IRPF), y los casos específicos donde SÍ necesito consentimiento (foto en la web de la empresa, uso de biometría).

**2. El proceso de selección de personal**
Diseña el proceso de selección que cumple el GDPR: la cláusula de información al candidato al recibir su CV (qué información incluir, dónde publicarla en el ATS), el período de retención de los CVs de candidatos no seleccionados (cuánto tiempo puedo guardar el CV de alguien que no contraté), el proceso de obtención del consentimiento para conservar el CV para futuras vacantes, y las restricciones en las verificaciones de antecedentes.

**3. Datos sensibles de empleados**
Explica el tratamiento de las categorías especiales de datos de empleados: datos de salud (bajas médicas, adaptaciones de puesto, discapacidades), datos sindicales (representación sindical, huelgas), y datos sobre condenas penales (los casos excepcionales en que se pueden solicitar). Las restricciones adicionales que aplican a estos datos y las medidas de seguridad específicas que exigen.

**4. Herramientas de RRHH y transferencias de datos**
Diseña la gestión de datos en el ecosistema de herramientas de RRHH: el contrato de tratamiento de datos (DPA) obligatorio con cada proveedor de software (ATS, HRIS, nómina, evaluación del desempeño), qué pasa cuando el proveedor está en EEUU y cómo gestionarlo, el inventario de herramientas y los datos que fluyen entre ellas, y el proceso de evaluación de nuevas herramientas de RRHH desde la perspectiva de privacidad antes de contratarlas.

**5. Monitorización de empleados**
Explica los límites legales de la monitorización del empleado: el control del uso del email y los dispositivos corporativos (qué es proporcional y qué vulnera el derecho a la intimidad del trabajador), el registro de la jornada (la obligación legal y cómo implementarla sin excederse), los sistemas de geolocalización en vehículos de empresa, y las cámaras de videovigilancia en el lugar de trabajo. En todos los casos, las obligaciones de información al trabajador.

**6. Derechos de los empleados y candidatos**
Construye el procedimiento para gestionar las solicitudes de derechos RGPD de empleados y candidatos: el derecho de acceso (qué datos tienen el derecho a ver, incluyendo datos en herramientas de terceros), el derecho de rectificación (el proceso para corregir datos incorrectos), el derecho de supresión (qué datos se pueden borrar y cuáles no porque hay obligación legal de conservarlos), y los plazos de respuesta. Incluye el formulario de solicitud y el proceso interno de gestión.

**7. Retención de datos de RRHH**
Define la política de retención para cada tipo de dato de RRHH: los datos del proceso de selección de candidatos no seleccionados (máximo 1 año para posibles reclamaciones), los datos del empleado activo (durante la relación laboral + el período de prescripción de las obligaciones laborales), los datos del exemployee (qué guardar para posibles reclamaciones laborales y durante cuánto tiempo), y los datos fiscales y de cotización (los plazos de la obligación legal, normalmente 4-5 años).

**8. Evaluación del desempeño y datos de rendimiento**
Explica las implicaciones de privacidad en los procesos de evaluación: la información al empleado sobre los criterios de evaluación y quién tiene acceso a los resultados, los límites en el uso de datos de monitorización de productividad en las evaluaciones, el derecho del empleado a conocer y contestar las evaluaciones que le afectan, y la retención de los datos de evaluación tras la extinción del contrato.

**9. Transferencias internacionales de datos de empleados**
Diseña la gestión de datos de empleados en grupos empresariales multinacionales: los mecanismos para transferir datos de empleados a la matriz fuera de la UE (SCCs, Binding Corporate Rules), qué datos son necesarios transferir y cuáles pueden gestionarse localmente, y el impacto de las sentencias Schrems en las transferencias a EEUU para herramientas de RRHH alojadas allí.

**10. El registro de actividades de tratamiento de RRHH**
Construye el Registro de Actividades de Tratamiento (RAT) específico para las actividades de RRHH: las actividades típicas que hay que registrar (selección de personal, gestión de empleados, nóminas, prevención de riesgos, videovigilancia), los campos que debe incluir cada registro (responsable, finalidad, base jurídica, categorías de datos, destinatarios, plazos de conservación, medidas de seguridad), y cómo mantenerlo actualizado cuando cambian los procesos o las herramientas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Entender y cumplir con las obligaciones GDPR específicas del tratamiento de datos de empleados y candidatos.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Protección de datos financieros',
                'description'      => 'Los estándares de seguridad para datos financieros: PCI-DSS, SOX y las obligaciones específicas del sector que van más allá del GDPR general.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en cumplimiento normativo del sector financiero con especialización en seguridad de datos financieros, PCI-DSS, normativa bancaria y las regulaciones específicas que aplican a organizaciones que manejan datos financieros de clientes o empleados. Quiero entender las obligaciones específicas de mi organización en materia de protección de datos financieros.

Mi organización y contexto:
[Describe el tipo de organización: banco, fintech, aseguradora, empresa de pagos, empresa no financiera que procesa pagos, o empresa cotizada sujeta a SOX. El volumen de transacciones o de datos financieros que manejas]

Mi situación de compliance actual:
[¿Tienes ya PCI-DSS, alguna certificación de seguridad, auditorías regulares? ¿Cuál es el mayor gap de compliance que ya has identificado?]

Mi mayor preocupación:
[¿Es el cumplimiento de PCI-DSS, la seguridad de los datos de clientes, el compliance con la normativa bancaria, la preparación para una auditoría, o la respuesta a incidentes?]

Con ese contexto, guíame por la protección de datos financieros:

**1. El mapa regulatorio del sector financiero**
Explica el ecosistema regulatorio que aplica a mi organización: el GDPR como regulación base de protección de datos personales, PCI-DSS para el procesamiento de datos de tarjetas de pago, la normativa del Banco de España y el BCE para entidades bancarias, DORA (Digital Operational Resilience Act) para la resiliencia operativa digital en el sector financiero, y SOX para empresas cotizadas en EEUU o con operaciones sujetas. Qué aplica a mi organización específica y en qué orden de prioridad.

**2. PCI-DSS en profundidad**
Explica el estándar PCI-DSS para el procesamiento de datos de tarjetas: los 12 requisitos principales del estándar, los niveles de certificación según el volumen de transacciones (de SAQ para comercios pequeños hasta Report on Compliance para los grandes), las tecnologías de reducción de alcance (tokenización y P2PE) que limitan la parte del entorno que necesita certificación, y el proceso de certificación con QSA.

**3. Tokenización y cifrado de datos de pago**
Diseña la estrategia de protección de datos de pago que minimiza el alcance de PCI-DSS: cómo funciona la tokenización (el token que sustituye al PAN y no tiene valor fuera del sistema del proveedor), las diferencias entre tokenización de red (Visa Token Service) y tokenización del proveedor de pagos, cómo implementar cifrado punto a punto (P2PE) para proteger los datos desde el terminal hasta el procesador, y qué datos financieros nunca deben almacenarse.

**4. Seguridad en el acceso a datos financieros**
Explica los controles de acceso específicos para entornos financieros: la autenticación multifactor para todos los accesos a sistemas con datos financieros (no solo para los usuarios, sino para las cuentas de servicio y las conexiones entre sistemas), el principio de mínimo privilegio aplicado al acceso a datos de cuentas y transacciones, el registro de auditoría inmutable de todos los accesos a datos financieros sensibles, y los controles de acceso privilegiado (PAM) para los administradores de sistemas.

**5. Gestión de incidentes financieros**
Diseña el plan de respuesta a incidentes específico para datos financieros: la clasificación de incidentes (desde un acceso no autorizado a datos de cuentas hasta una brecha masiva de datos de tarjetas), las obligaciones de notificación regulatoria (Banco de España, CNMV, AEPD, los esquemas de tarjetas en el caso de datos de pago), los plazos de notificación (más estrictos que en el GDPR general para incidentes en entidades financieras), y el proceso forense que preserva evidencias sin interrumpir las operaciones.

**6. SOX y la integridad de los datos financieros**
Explica las implicaciones de SOX para la protección de datos financieros: los controles IT generales que exige SOX (change management, access controls, operations, IT continuity), la segregación de funciones en los sistemas financieros (quién puede crear, quién puede aprobar, quién puede registrar), la inmutabilidad de los registros financieros (los logs que no pueden modificarse ni borrarse), y cómo prepararse para la auditoría de los auditores externos.

**7. Open Banking y APIs financieras**
Explica los requisitos de seguridad específicos de Open Banking bajo PSD2: la autenticación reforzada del cliente (SCA) en los pagos y en el acceso a cuentas, la certificación eIDAS para las TPPs, los estándares de API (Berlin Group, STET) y sus requisitos de seguridad, y cómo gestionar el consentimiento del usuario para el acceso de terceros a sus datos financieros bajo el marco regulatorio europeo.

**8. Retención y eliminación de datos financieros**
Define la política de retención específica para datos financieros: los plazos de retención legales (los registros contables 6 años en España, los datos de transacciones de pago según PCI-DSS, los extractos de clientes según la normativa bancaria), cómo gestionar la tensión entre el GDPR (que favorece la minimización y el borrado) y la normativa financiera (que obliga a conservar), y el proceso de eliminación segura al término del período de retención.

**9. Due diligence de privacidad en M&A del sector financiero**
Explica cómo abordar la protección de datos en una operación de M&A en el sector financiero: el inventario de datos y el análisis de riesgos de privacidad como parte del due diligence, la transferencia de datos de clientes en el contexto de la transmisión de empresa, las notificaciones regulatorias necesarias antes de compartir datos en el data room, y los ajustes post-cierre para alinear las prácticas de datos del target con las del comprador.

**10. El programa de cumplimiento continuo**
Construye el programa de cumplimiento continuo en protección de datos financieros: el calendario de auditorías internas y externas (PCI-DSS anual, penetration testing, revisión de controles de acceso trimestralmente), el proceso de gestión de vulnerabilidades y parches en sistemas con datos financieros, la formación anual obligatoria del equipo en seguridad y protección de datos, y el comité de gobernanza que toma las decisiones de riesgo en materia de datos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Entender y cumplir los estándares de seguridad y privacidad específicos del sector financiero: PCI-DSS, DORA, SOX.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'GDPR en profundidad',
                'description'      => 'El reglamento europeo de protección de datos de arriba abajo: bases jurídicas, derechos de los interesados, DPO, transferencias internacionales y las sanciones reales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en protección de datos y privacidad con amplia experiencia en asesoramiento a empresas sobre el cumplimiento del RGPD. Quiero entender el RGPD en profundidad para poder asesorar a mis clientes o cumplir con él en mi propia empresa.

Mi contexto:
[Describe si eres abogado que asesora a clientes, DPO de empresa, responsable de compliance, o directivo que quiere entender la norma en profundidad. El sector en el que trabajas y los tipos de datos que más frecuentemente aparecen en tu actividad]

Mis conocimientos actuales:
[¿Conoces el RGPD en términos generales o tienes ya experiencia práctica implementándolo? ¿Cuáles son los aspectos que más te cuestan o que más dudas te generan?]

Mi objetivo:
[¿Quieres prepararte para una auditoría, asesorar mejor a clientes, mejorar el compliance de tu empresa, o prepararte para el examen de certificación CIPP/E u otra certificación de privacidad?]

Con ese contexto, guíame por el GDPR en profundidad:

**1. La arquitectura del RGPD**
Explica la estructura del Reglamento: los principios del artículo 5 como columna vertebral de todo el sistema (licitud, lealtad y transparencia; limitación de la finalidad; minimización de datos; exactitud; limitación del plazo de conservación; integridad y confidencialidad; responsabilidad proactiva), y cómo estos principios se materializan en obligaciones concretas a lo largo del resto del articulado.

**2. Las bases jurídicas en detalle**
Analiza en profundidad cada una de las seis bases jurídicas del artículo 6: la jerarquía entre bases (cuándo elegir una y cuándo otra), el consentimiento y sus requisitos de validez (libre, específico, informado, inequívoco: qué significa cada uno en la práctica), el interés legítimo y el test de balance que hay que documentar antes de invocarlo, y los errores más frecuentes al elegir la base jurídica incorrecta y sus consecuencias.

**3. Los derechos de los interesados**
Explica cada derecho del RGPD con su alcance real y sus límites: el derecho de acceso (qué información hay que facilitar, en qué formato y plazo), el derecho de rectificación, el derecho de supresión y sus excepciones (los datos que no se pueden borrar aunque el interesado lo pida), el derecho a la limitación del tratamiento, la portabilidad de datos (cuándo aplica realmente y cuándo no), el derecho de oposición, y los derechos relacionados con las decisiones automatizadas y la elaboración de perfiles.

**4. El responsable y el encargado del tratamiento**
Explica la distinción entre responsable y encargado: los criterios para determinar quién es qué en una relación de prestación de servicios (el que determina los fines y los medios es el responsable, aunque en la práctica la línea no siempre es clara), el contrato de encargo de tratamiento obligatorio y las cláusulas que debe incluir según el artículo 28, y la corresponsabilidad (cuándo dos organizaciones son responsables conjuntas y qué obligaciones adicionales implica).

**5. El Delegado de Protección de Datos (DPO)**
Explica la figura del DPO: cuándo es obligatorio nombrarlo (las tres situaciones del artículo 37), las características de independencia y garantías que debe tener, sus funciones concretas (no es el responsable de compliance, es el asesor y el punto de contacto con la autoridad de control), los conflictos de interés que hay que evitar, y la diferencia entre DPO interno y DPO externo con sus ventajas y desventajas.

**6. Las transferencias internacionales de datos**
Diseña el análisis de transferencias internacionales: los mecanismos de transferencia disponibles (decisiones de adecuación, Cláusulas Contractuales Tipo, Normas Corporativas Vinculantes, excepciones del artículo 49), el impacto de la sentencia Schrems II y el nuevo Marco UE-EEUU, y la Evaluación de Impacto de Transferencia (TIA) que hay que hacer cuando el destinatario está en un país sin adecuación. Con el caso concreto de las transferencias a EEUU que afectan a la mayoría de empresas europeas.

**7. La Evaluación de Impacto (EIPD/DPIA)**
Explica cuándo y cómo hacer una Evaluación de Impacto en la Protección de Datos: los criterios del artículo 35 que obligan a hacerla (tratamientos de alto riesgo), la lista de la AEPD de tratamientos que requieren DPIA, la estructura de la evaluación (descripción del tratamiento, evaluación de necesidad y proporcionalidad, identificación y gestión de riesgos), y cuándo hay que consultar a la autoridad de control antes de iniciar el tratamiento.

**8. El régimen sancionador**
Explica el régimen de sanciones del RGPD en la práctica: los dos niveles de sanción (hasta 10 millones / 2% del volumen de negocio para infracciones menos graves, hasta 20 millones / 4% para las más graves), qué infracciones han generado las mayores sanciones en Europa y en España, los criterios que las autoridades usan para cuantificar la sanción, y el procedimiento sancionador de la AEPD desde la denuncia o la investigación hasta la resolución.

**9. La accountability o responsabilidad proactiva**
Diseña el programa de accountability que exige el RGPD: el Registro de Actividades de Tratamiento y sus campos obligatorios, las políticas y procedimientos internos de protección de datos, los programas de formación y concienciación del personal, las auditorías internas de protección de datos, y cómo documentar todas estas actividades para poder demostrar el cumplimiento ante la AEPD si hay una inspección.

**10. El RGPD y la inteligencia artificial**
Explica la interacción entre el RGPD y el uso de inteligencia artificial: el artículo 22 y las decisiones automatizadas y la elaboración de perfiles (cuándo aplica, qué derechos tienen los interesados, cómo implementar la revisión humana), la explicabilidad de los modelos de IA como requisito del RGPD, y cómo el AI Act europeo complementa y en parte duplica las obligaciones del RGPD para los sistemas de IA de alto riesgo. Los aspectos que cualquier DPO o abogado de privacidad debe conocer sobre IA.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Entender el RGPD en profundidad: bases jurídicas, derechos, DPO, transferencias internacionales y régimen sancionador.',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Datos de clientes y privacidad en Customer Success',
                'description'      => 'Qué puede y no puede hacer CS con los datos del cliente: acceso, compartición con terceros y los protocolos que protegen al cliente y a la empresa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Customer Success Operations y protección de datos con experiencia diseñando protocolos de gestión de datos de clientes en equipos de CS de empresas SaaS B2B. Quiero entender qué puede y no puede hacer el equipo de CS con los datos de los clientes, y cómo protegernos como empresa.

Mi contexto:
[Describe tu empresa: tipo de producto SaaS, sectores de tus clientes, qué datos de los clientes procesa tu producto (datos de sus empleados, sus clientes finales, sus transacciones, sus documentos), y el tamaño del equipo de CS]

Mis dudas concretas:
[¿Cuáles son las situaciones donde el equipo de CS no tiene claro qué puede hacer: acceder a los datos del cliente para diagnosticar un problema, compartir datos entre cuentas para dar un benchmark, usar los datos del cliente en demos para otros prospectos, o analizar los datos del cliente para generar insights proactivos?]

Con ese contexto, diseña los protocolos de datos para CS:

**1. El marco legal: responsable vs encargado del tratamiento**
Explica la relación legal que define qué puede hacer CS con los datos: cuando el cliente usa tu SaaS para procesar datos de sus propios clientes o empleados, él es el responsable del tratamiento y tu empresa es el encargado. Esto significa que solo puedes usar esos datos para las finalidades que el cliente te ha instruido, no para las tuyas propias. Explica las implicaciones prácticas de este marco para el trabajo diario del equipo de CS.

**2. Acceso a los datos del cliente para soporte técnico**
Define el protocolo de acceso a datos de clientes para diagnóstico y soporte: cuándo puede un CSM o un soporte técnico acceder a los datos del cliente (solo con autorización explícita del cliente para resolver el caso específico), el log de auditoría que registra quién accedió a qué datos y con qué propósito, el principio de mínimo acceso (no acceder a más datos de los estrictamente necesarios para resolver el problema), y cómo gestionar el acceso temporal que se revoca al cerrar el ticket.

**3. La cláusula de uso de datos en el contrato con el cliente**
Explica qué debe decir el contrato de tratamiento de datos (DPA) sobre el uso de los datos del cliente: la lista cerrada de sub-encargados con acceso a los datos, las restricciones al uso de datos del cliente para mejorar el producto propio, las condiciones bajo las que CS puede acceder a los datos, y las obligaciones de confidencialidad del equipo de CS. Qué cláusulas generan más conflicto en la negociación con clientes enterprise y cómo gestionarlas.

**4. Benchmarks y análisis comparativos**
Diseña el protocolo para usar datos de clientes en benchmarks: cuándo es legítimo comparar el comportamiento de un cliente con el de otros (si está permitido en el DPA y los datos están suficientemente anonimizados), cómo anonimizar los datos de forma que sean útiles para el benchmark sin ser re-identificables, y la comunicación correcta al cliente cuando le presentas un benchmark ("tu retención es el X% vs la mediana del sector del Y%").

**5. Demos y materiales de ventas con datos reales**
Explica los límites absolutos en el uso de datos de clientes para fines comerciales propios: por qué nunca se pueden usar datos de un cliente (aunque estén anonimizados) en una demo para un prospecto sin autorización explícita, cómo construir entornos de demo con datos sintéticos que sean igual de convincentes, y el caso específico de los case studies (cómo obtener la autorización correcta y qué datos puede incluir el case study publicado).

**6. Compartición de datos con terceros desde CS**
Construye el protocolo de compartición con terceros: qué herramientas de CS pueden ver los datos del cliente (el Contrato de Tratamiento de Datos debe cubrirlas como sub-encargados), el proceso de evaluación de privacidad cuando se integra una nueva herramienta en el stack de CS, y los casos de compartición con el cliente mismo (exportar los datos del cliente cuando lo solicita, en formato estándar y de forma completa).

**7. Datos del cliente en la comunicación interna**
Define las reglas para el manejo de datos del cliente en la comunicación interna del equipo: qué información del cliente puede aparecer en Slack, Notion o email interno sin cifrar (nunca datos personales de los usuarios finales del cliente, solo datos de negocio agregados), cómo anonimizar los casos del cliente cuando se discuten en una reunión de equipo, y el protocolo para el escalado de problemas sin necesidad de compartir más datos de los imprescindibles.

**8. El derecho del cliente a auditar el uso de sus datos**
Explica las obligaciones cuando un cliente audita el uso de sus datos: el derecho contractual de auditoría que suelen incluir los enterprise en el DPA, cómo preparar la documentación de los controles de acceso y los logs de auditoría, qué mostrar y qué no mostrar en una auditoría de cliente, y cómo gestionar los hallazgos de la auditoría (los gaps que el cliente identifica y las correcciones que exige).

**9. Incidentes que afectan a datos del cliente**
Diseña el protocolo de notificación al cliente en caso de incidente: la clasificación del incidente (¿se han expuesto datos del cliente o de sus usuarios?), el plazo de notificación al cliente (normalmente más corto que el GDPR estándar, definido en el DPA), el contenido de la notificación (qué datos, cuántos usuarios, origen del incidente y medidas adoptadas), y el proceso de colaboración con el cliente para la notificación a los afectados y a las autoridades.

**10. Formación del equipo de CS en privacidad**
Construye el programa de formación en privacidad para el equipo de CS: el contenido mínimo que todo CSM debe conocer (el marco responsable/encargado, los datos que nunca pueden compartirse, cómo responder una solicitud de acceso del cliente), la formación específica para el equipo de soporte técnico que accede a los entornos de producción del cliente, y la actualización anual cuando cambia la normativa o los procesos internos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Definir qué puede y no puede hacer el equipo de CS con los datos del cliente para proteger al cliente y a la empresa.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Cumplimiento GDPR para freelancers',
                'description'      => 'El freelance también tiene obligaciones de protección de datos: contratos de tratamiento, registro de actividades y lo mínimo que debes tener en regla.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en protección de datos con experiencia asesorando a profesionales autónomos y freelancers sobre sus obligaciones bajo el RGPD. Quiero entender qué obligaciones tengo exactamente como freelance que maneja datos de clientes y de los clientes de mis clientes, y cuál es el mínimo que necesito tener en regla.

Mi perfil como freelance:
[Describe tu especialidad: diseñador, desarrollador, consultor de marketing, copywriter, community manager, fotógrafo, consultor de negocios, etc. Los tipos de datos con los que trabajas en tu actividad habitual]

Los datos que manejo:
[Sé específico: ¿tienes acceso a las bases de datos de clientes de tu cliente (emails de sus usuarios), manejas datos personales de los empleados de tu cliente, gestionas datos personales en redes sociales, o solo tienes datos de contacto de tu propio cliente?]

Mi situación actual:
[¿Tienes política de privacidad en tu web, contratos de servicio con cláusulas de protección de datos, alguna herramienta de firma digital? ¿Has recibido alguna consulta de cliente sobre GDPR?]

Con ese contexto, explícame el GDPR para freelancers:

**1. ¿Cuándo aplica el GDPR a un freelance?**
Explica en qué situaciones un freelance tiene obligaciones bajo el RGPD: cuando tratas datos personales de tus propios clientes (sus emails, nombres, teléfonos en tu CRM o facturación), cuando accedes a los datos personales de los usuarios de tu cliente para prestar el servicio (el community manager que gestiona los comentarios en las redes del cliente, el desarrollador que accede a la base de datos de producción), y cuándo actúas como responsable del tratamiento vs encargado del tratamiento. Esta distinción lo cambia todo.

**2. Tus obligaciones como responsable del tratamiento**
Explica qué debes tener en orden cuando eres responsable (tratas datos de tus propios clientes y proveedores): la información que debes proporcionar a tus clientes sobre el tratamiento de sus datos (la cláusula de información en los presupuestos o contratos), la base jurídica del tratamiento (normalmente ejecución del contrato para los datos del cliente), la política de privacidad de tu web si tienes una, y el registro de actividades de tratamiento (cuándo es obligatorio para un autónomo y cuándo no).

**3. El contrato de encargo del tratamiento**
Explica qué es y cuándo necesitas firmar un contrato de encargo del tratamiento (DPA): si tu cliente te da acceso a datos personales de sus propios usuarios, empleados o clientes para prestar el servicio, tú eres el encargado y el DPA es obligatorio (y es tu cliente quien debe proponértelo, aunque en la práctica el freelance acaba siendo quien lo tiene que pedir). El contenido mínimo del DPA y los puntos que más frecuentemente faltan en los que circulan por internet.

**4. Lo que nunca debes hacer como encargado**
Define las prohibiciones absolutas del encargado del tratamiento que el freelance debe conocer: no usar los datos del cliente para tus propios fines (la base de datos de clientes de tu cliente no puede usarse para enviar tu newsletter), no ceder los datos a terceros sin autorización del cliente (no puedes subcontratar parte del trabajo con datos del cliente sin informar a tu cliente), y no retener los datos del cliente más tiempo del necesario para la prestación del servicio.

**5. Herramientas que usas y sub-encargados del tratamiento**
Explica el impacto en la privacidad de las herramientas que usas en tu trabajo: cuando usas Notion, Google Drive, Trello u otras herramientas SaaS con datos de tu cliente, estás transmitiendo datos a un sub-encargado, y el DPA con tu cliente suele obligarte a informar de qué herramientas usas. Cómo gestionar esto de forma práctica sin volverte loco, y qué herramientas tienen mejores garantías de privacidad para el trabajo freelance.

**6. La confidencialidad en el contrato de servicios**
Diseña la cláusula de confidencialidad y protección de datos que debe incluir tu contrato de servicios: la obligación de confidencialidad sobre la información del cliente, la mención a las obligaciones del RGPD si accedes a datos personales, la prohibición de usar los datos para fines propios, y el derecho del cliente a solicitarte la devolución o eliminación de los datos al finalizar el servicio. Esta cláusula te protege tanto a ti como al cliente.

**7. La política de privacidad de tu web como freelance**
Explica qué debe incluir la política de privacidad de la web de un freelance: los datos que recoges a través del formulario de contacto (nombre, email, mensaje) y su base jurídica (consentimiento), los datos de analytics (si usas Google Analytics, la mención es obligatoria), los datos de posibles clientes que introduces en tu CRM cuando haces seguimiento comercial, y si tienes newsletter, todo lo relativo al consentimiento y el proceso de baja. La política mínima que cualquier freelance con web necesita.

**8. Gestión de datos de clientes históricos**
Define cuánto tiempo puedes conservar los datos de clientes pasados: los datos de facturación y contables que tienes obligación legal de conservar (4-5 años para la Agencia Tributaria), los datos de contacto del cliente (cuándo debes borrarlos si ya no hay relación comercial), el portfolio con trabajos realizados para clientes (cuándo necesitas autorización expresa para mostrar el trabajo y los datos del cliente), y el proceso de borrado cuando el cliente lo solicita.

**9. Los cinco minutos de compliance que todo freelance debería hacer**
Dame la lista de las 5 acciones mínimas de compliance GDPR que un freelance debería completar esta semana: la primera acción concreta (añadir la cláusula de protección de datos al contrato tipo), la segunda (revisar si las herramientas que uso tienen DPA disponible y firmarlo), la tercera (añadir política de privacidad a la web si no la tienes), la cuarta (definir cuánto tiempo guardo los datos de clientes y ponerlo en práctica), y la quinta (documentar en un Excel las actividades de tratamiento mínimas). Esto no elimina todos los riesgos, pero sí los más graves.

**10. ¿Cuándo necesito asesoramiento legal especializado?**
Define los umbrales a partir de los cuales un freelance necesita contratar asesoramiento legal especializado en protección de datos: si manejas datos de categorías especiales (salud, ideología, vida sexual) de forma regular, si tus clientes son grandes empresas con equipos legales que exigen DPAs complejos, si recibes una reclamación ante la AEPD, o si tu actividad implica tratamientos de alto riesgo. Y cómo encontrar y contratar un DPO externo que sea proporcionado al tamaño de un freelance.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Entender las obligaciones GDPR de un freelance y el mínimo que necesita tener en regla para operar con seguridad.',
                'vote_score'       => 41,
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
