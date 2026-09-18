<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills292Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Email marketing avanzado: segmentación, personalización y automatización de ciclos de vida',
                'description'      => 'Diseña estrategias de email marketing basadas en comportamiento y datos para aumentar conversión y retención.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en email marketing con más de diez años de experiencia en estrategias de automatización de ciclos de vida para marcas B2C y B2B. Tu misión es ayudarme a construir una estrategia de email marketing avanzada que vaya mucho más allá del típico newsletter mensual.

Contexto de mi negocio:
Soy [describe tu empresa, producto o servicio, y público objetivo]. Actualmente enviamos [frecuencia actual de envíos] y nuestra tasa de apertura es de [porcentaje actual]. Nuestro principal objetivo es [aumentar conversión / reducir churn / activar usuarios dormidos / etc.].

Lo que necesito que hagas:

1. MAPA DE SEGMENTACIÓN AVANZADA
Ayúdame a definir entre cinco y ocho segmentos accionables basados en comportamiento (no solo demografía). Para cada segmento indica: criterio de inclusión, tamaño estimado como porcentaje de la lista, objetivo principal del segmento y tono de comunicación recomendado. Considera segmentos como: nuevos suscriptores, usuarios activos de alto valor, usuarios en riesgo de churn, compradores recurrentes, inactivos recuperables y suscriptores que nunca han comprado.

2. ESTRATEGIA DE PERSONALIZACIÓN DINÁMICA
Define qué variables de personalización debo usar en cada tipo de email: nombre, historial de compra, comportamiento en el sitio, fecha de última interacción, categorías preferidas, ubicación geográfica. Explica cómo combinarlas para crear variantes de contenido sin multiplicar el trabajo de producción.

3. FLUJOS DE AUTOMATIZACIÓN DE CICLO DE VIDA
Diseña los flujos que debo tener activos mínimamente:
- Bienvenida (tres a cinco emails): qué contenido va en cada email, cuándo se envía y cuál es el objetivo de conversión
- Onboarding por segmento: diferencias según si el usuario compró, descargó algo o solo se suscribió
- Abandono de carrito o acción: estructura del flujo, timing y contenido de recuperación
- Win-back para inactivos: cómo detectar el momento correcto y qué secuencia usar
- Post-compra y fidelización: cómo convertir la primera compra en recurrencia

4. CALENDARIO DE ENVÍOS Y FRECUENCIA
Recomienda una frecuencia de envío por segmento, considerando fatiga de la lista. Indica cómo construir un calendario editorial de email que combine automatizaciones activas con campañas puntuales sin saturar la bandeja del usuario.

5. MÉTRICAS E ITERACIÓN
Define el conjunto mínimo de métricas que debo monitorizar semanalmente (apertura, clic, conversión, ingresos por email, baja) y cómo interpretarlas para tomar decisiones. ¿Cuándo un flujo está funcionando bien? ¿Cuándo debo pausarlo y revisarlo?

6. ASUNTO Y PREHEADER
Escríbeme cinco variantes de asunto y preheader para el primer email de bienvenida, usando técnicas de curiosidad, beneficio directo y urgencia. Incluye también una variante para test A/B.

Formato de respuesta: usa secciones numeradas como las anteriores, con subsecciones cuando sea necesario. Sé específico con ejemplos concretos. Donde aplique, entrega plantillas o estructuras que pueda reutilizar sin modificaciones profundas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar estrategia completa de email marketing con segmentación y automatización',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Email infrastructure: deliverability, listas y arquitectura que hace que los emails lleguen',
                'description'      => 'Audita y mejora la infraestructura de entrega de emails para maximizar la llegada a bandeja de entrada.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero especialista en infraestructura de email con experiencia profunda en deliverability, configuración de SPF, DKIM y DMARC, y arquitectura de sistemas de envío a escala. Necesito tu ayuda para construir o auditar la infraestructura de email de mi plataforma.

Contexto técnico:
Enviamos aproximadamente [volumen mensual] de emails transaccionales y de marketing desde [describe tu stack: ESP actual, lenguaje backend, proveedor de hosting]. Nuestra tasa de entrega actual es [porcentaje si la conoces] y hemos tenido problemas con [spam, rebotes, bloqueos por ISP, etc.].

Lo que necesito:

1. AUDITORÍA DE CONFIGURACIÓN DNS
Explícame paso a paso cómo verificar y configurar correctamente: registro SPF (sintaxis, límite de lookups DNS, errores comunes), DKIM (tamaño de clave, rotación de selectores, múltiples remitentes), DMARC (política none/quarantine/reject, ruta de reporting, interpretación de reportes RUA y RUF) y BIMI como capa adicional de confianza. Para cada uno indica los errores más comunes que degradan la reputación y cómo detectarlos.

2. ARQUITECTURA DE INFRAESTRUCTURA DE ENVÍO
Ayúdame a diseñar la separación entre emails transaccionales (receipts, notificaciones, OTP) y emails de marketing (newsletters, campañas). Explica por qué deben ir en IPs y subdominios separados, cómo gestionar el calentamiento de IP para nuevas direcciones y cómo estructurar los pools de IPs según el tipo de tráfico.

3. GESTIÓN DE LISTAS Y SUPRESIÓN
Define el proceso técnico para: gestionar rebotes duros y blandos con umbrales de supresión automática, procesar quejas de spam con feedback loops de Gmail y Yahoo, implementar doble confirmación (double opt-in) y registrar el consentimiento de forma auditable, y mantener una lista de supresión global que sobreviva a cambios de ESP.

4. MONITORIZACIÓN Y ALERTAS
¿Qué métricas debo instrumentar en tiempo real? Diseña un sistema de alertas para: spike de rebotes por encima de dos por ciento, tasa de spam por encima de cero punto uno por ciento (umbral de Google), caída brusca de tasa de entrega y bloqueos por MX record de destinatarios principales (Gmail, Outlook, Yahoo). ¿Qué herramientas opensource o servicios SaaS recomiendas para esto?

5. CÓDIGO DE REFERENCIA
Muéstrame un ejemplo en [lenguaje preferido: Node.js / Python / PHP] de cómo enviar un email transaccional con cabeceras correctas (Message-ID único, List-Unsubscribe con cabecera one-click, X-Mailer), manejo de respuesta asíncrona de webhooks de eventos (delivered, bounced, complained) y reintentos con backoff exponencial.

6. CHECKLIST DE DELIVERABILITY ANTES DE LANZAR
Crea un checklist de veinte puntos que deba revisar antes de enviar mi primera campaña a una lista fría o después de cambiar de ESP.

Responde con ejemplos de configuración reales (no genéricos), código funcional donde lo pida y explicaciones que un ingeniero senior pueda implementar directamente sin investigación adicional.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Configurar y auditar infraestructura de entrega de emails transaccionales y marketing',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Email design: plantillas responsive, jerarquía visual y UX del email que convierte',
                'description'      => 'Crea y evalúa plantillas de email con principios de diseño que maximizan lectura y conversión en cualquier cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador especialista en email con experiencia en sistemas de diseño, UX de comunicaciones digitales y las particularidades técnicas de renderizado en clientes de email como Gmail, Outlook, Apple Mail y clientes móviles. Necesito tu ayuda para mejorar el diseño de mis emails.

Contexto de diseño:
Nuestra marca tiene [describe la identidad visual: colores principales, tipografías, tono]. Actualmente usamos [herramienta: Mailchimp drag-and-drop / código HTML propio / Figma + exportación]. El principal problema que tenemos es [baja conversión al CTA / mala visualización en móvil / emails demasiado largos / falta de consistencia visual].

Lo que necesito:

1. SISTEMA DE PLANTILLAS POR TIPO DE EMAIL
Diseña la estructura de layout para cada tipo de email que debo tener: email transaccional simple (confirmación de pedido, OTP, notificación), newsletter informativo, email promocional con CTA principal, email de bienvenida con múltiples secciones y email de texto plano para secuencias de ventas. Para cada uno indica: ancho máximo del contenedor, número máximo de columnas, jerarquía de elementos (logo, headline, cuerpo, CTA, footer) y reglas de espaciado.

2. JERARQUÍA VISUAL Y TIPOGRAFÍA
Explícame cómo aplicar jerarquía visual efectiva en email considerando: tamaños de fuente seguros para web email (mínimos en móvil), fuentes system-safe vs web fonts con fallback, uso del peso tipográfico para guiar la lectura, contraste de color según WCAG AA y el principio de "un solo objetivo por email" aplicado al layout.

3. CTA: BOTONES QUE HACEN CLIC
Define las reglas para un CTA de email efectivo: tamaño mínimo táctil (cuarenta y cuatro píxeles de alto en móvil), color y contraste, texto accionable con verbos concretos, posicionamiento above the fold, y cómo construir el botón en HTML puro (no imagen) que se renderice igual en todos los clientes.

4. RESPONSIVE SIN MEDIA QUERIES
Dado que muchos clientes de email no soportan media queries, explícame las técnicas de diseño fluido que funcionan: uso de max-width en lugar de width fijo, tablas anidadas con porcentajes, técnica de ghost columns para Outlook, y cómo hacer que una plantilla de dos columnas colapse a una sola columna en móvil sin media queries.

5. OSCURIDAD Y MODO NOCTURNO
¿Cómo diseño emails que no se rompan en dark mode? Explica las meta etiquetas necesarias, el uso de color-scheme en CSS, cómo hacer que las imágenes con fondo blanco no generen halos en modo oscuro, y proporciona las declaraciones CSS de fallback recomendadas.

6. CHECKLIST DE QA ANTES DE ENVIAR
Crea un checklist de control de calidad para revisar cada email antes de enviarlo: texto alternativo en imágenes, ratio texto-imagen (mínimo sesenta por ciento texto), peso total del email en kilobytes, prueba de versión en texto plano, verificación de links, y previsualización en los cinco clientes más usados por mi audiencia.

7. EJEMPLO PRÁCTICO
Escribe el HTML completo de un email de bienvenida simple (header con logo, headline, párrafo de introducción, un CTA y footer con unsubscribe) siguiendo todas las buenas prácticas anteriores, con comentarios en el código que expliquen cada decisión técnica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar plantillas de email responsive que convierten y se renderizan correctamente',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Cold email que funciona: secuencias outbound con alta tasa de respuesta',
                'description'      => 'Diseña secuencias de cold email personalizadas que generan respuestas reales sin caer en spam ni quemar relaciones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en ventas outbound y copywriting de cold email con experiencia demostrable en tasas de respuesta superiores al diez por ciento en sectores B2B. Tu misión es ayudarme a construir secuencias de cold email que realmente funcionen, sin sonar a spam y sin quemar a mis prospectos.

Contexto de mi prospección:
Vendo [producto o servicio] a [perfil del decisor: CTO, CMO, CEO de empresa de N empleados]. El problema que resuelvo es [describe el dolor principal]. Mi diferenciador clave es [lo que me hace distinto]. Actualmente envío [tipo de emails] y mi tasa de respuesta es [porcentaje o "no sé"].

Lo que necesito:

1. ANATOMÍA DEL COLD EMAIL PERFECTO
Explícame la estructura de un cold email de alta conversión: línea de asunto (máximo cincuenta caracteres, sin clickbait, que genere curiosidad relevante), primera línea (personalización real, no token), cuerpo (problema + relevancia + prueba en dos o tres líneas), CTA (una sola pregunta de bajo compromiso), y firma (minimalista, con un solo link si acaso). Para cada elemento explica qué lo hace funcionar y los errores más comunes.

2. SECUENCIA DE CINCO EMAILS
Diseña una secuencia completa de cinco emails para un prospecto que no respondió:
- Email 1 (día 1): presentación inicial con gancho específico
- Email 2 (día 4): seguimiento con ángulo diferente o recurso de valor
- Email 3 (día 8): prueba social o caso de uso relevante
- Email 4 (día 14): reencuadre con pregunta directa
- Email 5 (día 21): breakup email con puerta abierta
Para cada email: asunto, cuerpo completo y razón estratégica de cada elemento.

3. PERSONALIZACIÓN QUE ESCALA
Explica cómo personalizar a escala sin que suene a plantilla: cómo investigar al prospecto en cinco minutos (LinkedIn, web, noticias recientes), las tres variables de personalización que más impactan (empresa, rol, trigger de contexto), y cómo estructurar una hoja de cálculo de prospección con campos de personalización que se mezclan en la plantilla base.

4. SEGMENTACIÓN POR INDUSTRIA
Adapta el tono y el ángulo de los emails para tres industrias diferentes de mi mercado objetivo: [industria A], [industria B], [industria C]. ¿Qué cambia en el dolor que nombro, el lenguaje que uso y el CTA que propongo?

5. LO QUE DEBES EVITAR
Lista los veinte errores más comunes en cold email que destruyen la tasa de respuesta: desde el uso de palabras que activan filtros de spam hasta los errores de ego ("somos líderes en el sector") que nadie quiere leer.

6. MÉTRICAS Y OPTIMIZACIÓN
¿Qué métricas debo rastrear en una secuencia outbound? Define los umbrales de referencia para apertura, respuesta positiva, respuesta negativa y unsubscribe. ¿Cuándo un asunto merece ser probado en variante A/B? ¿Cuántos envíos necesito para tener significancia estadística?

Responde con emails reales escritos para mi caso, no con fórmulas genéricas. Usa el tono directo y humano que funciona en prospección B2B moderna.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Construir secuencias de cold email outbound con alta tasa de respuesta',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product emails: onboarding, activación y retención con email transaccional estratégico',
                'description'      => 'Diseña los emails del ciclo de vida del producto que guían al usuario hacia el momento "aha" y reducen el churn.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager con especialización en growth y en el diseño de flujos de comunicación de producto. Tu misión es ayudarme a diseñar los emails del producto que acompañan al usuario desde el registro hasta la retención a largo plazo, con enfoque en activación y reducción de churn.

Contexto de mi producto:
Mi producto es [describe brevemente el producto SaaS, app o plataforma]. El momento "aha" que define la activación es [describe qué acción o resultado hace que el usuario entienda el valor]. Actualmente el mayor problema es [usuarios que se registran y no activan / usuarios que activan pero hacen churn en los primeros treinta días / usuarios activos que no usan las funciones de retención].

Lo que necesito:

1. MAPA DE EMAILS DEL CICLO DE VIDA DEL PRODUCTO
Diseña el mapa completo de emails que debe tener cualquier producto digital maduro, organizados por etapa: pre-activación (registro sin completar perfil, invitación pendiente), activación (onboarding, primer uso, milestone de setup), engagement activo (tips de uso avanzado, nuevas funcionalidades, logros), prevención de churn (usuario silencioso, señales de riesgo, encuesta de cancelación) y retención y expansión (upsell contextual, cross-sell, aniversario de cuenta). Para cada etapa: trigger de envío, objetivo conductual y métrica de éxito.

2. SECUENCIA DE ONBOARDING BASADA EN COMPORTAMIENTO
Diseña una secuencia de onboarding ramificada según comportamiento: rama para usuarios que completaron el setup en los primeros siete días, rama para usuarios que se quedaron a mitad del setup y rama para usuarios que nunca regresaron tras el registro. Para cada rama: número de emails, timing entre envíos, contenido de cada email y objetivo específico.

3. EL EMAIL DE ACTIVACIÓN MÁS IMPORTANTE
Escribe el email que se envía cuando el usuario está a un paso de activar pero se detuvo. Incluye: asunto, cuerpo con contexto personalizado (qué hizo, qué le falta hacer), CTA directo al punto exacto donde se quedó, y prueba social o testimonial relevante. Explica cada decisión de copywriting.

4. EMAILS DE ALERTA Y PREVENCIÓN DE CHURN
¿Cómo detecto con email cuándo un usuario está en riesgo de cancelar? Define: qué señales de comportamiento debo instrumentar (días sin login, funciones no usadas, bajada en frecuencia), qué email envío en cada umbral de riesgo, y cómo estructuro el email de "estamos aquí para ayudar" sin sonar desesperado.

5. TRANSACCIONALES QUE TAMBIÉN RETIENEN
Convierte los emails transaccionales aburridos (confirmación de pago, factura, cambio de contraseña) en oportunidades de engagement. Para cada tipo de email transaccional, sugiere un elemento de valor adicional que pueda incluir sin saturar el mensaje: tip rápido, estadística personalizada del usuario, o CTA secundario de bajo compromiso.

6. MÉTRICAS DE PRODUCTO EN EMAIL
¿Cuáles son las métricas que debe monitorizar un product manager en sus emails, más allá de apertura y clic? Habla de tasa de activación atribuida al email, tiempo hasta primer uso post-email, reducción de churn en segmentos que reciben la secuencia versus los que no, y cómo hacer un experimento de holdout correcto.

Sé concreto con ejemplos de asuntos, copys y estructuras de email. Este prompt es para un PM que sabe de producto pero quiere optimizar el canal email como herramienta de retención.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar flujos de email de producto que activan usuarios y reducen el churn',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Email de RRHH: comunicación interna, ofertas y notificaciones que se leen',
                'description'      => 'Mejora la comunicación de RRHH por email para que los mensajes lleguen, se lean y generen la acción deseada.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en comunicación interna y employer branding con experiencia en diseño de comunicaciones de RRHH que realmente funcionan. Necesito mejorar radicalmente la calidad y efectividad de los emails que Recursos Humanos envía a candidatos, empleados y managers.

Contexto de mi área:
Soy parte del equipo de RRHH de [tipo de empresa, sector, número de empleados]. Enviamos emails para [ofertas de trabajo, notificaciones de proceso de selección, comunicados internos, recordatorios de beneficios, anuncios de políticas, etc.]. El principal problema es que nuestros emails [nadie los lee / generan confusión / tienen lenguaje muy corporativo / llegan en el momento equivocado].

Lo que necesito:

1. TIPOS DE EMAIL DE RRHH Y SU ARQUITECTURA
Define la arquitectura correcta para los seis tipos principales de email en RRHH: confirmación de recepción de candidatura (qué incluir para reducir ansiedad del candidato), invitación a entrevista (información completa que evita preguntas de seguimiento), oferta de empleo formal (cómo estructurar para que sea clara y motivante), comunicado interno de política (cómo presentar un cambio sin generar alarma), notificación de beneficios (cómo hacer que el empleado entienda y aproveche lo que tiene) y feedback de proceso de selección (cómo comunicar un rechazo que no destruya la marca empleadora). Para cada tipo: estructura, tono y los tres elementos que no pueden faltar.

2. LENGUAJE HUMANO EN LUGAR DE CORPORATIVO
Muéstrame cómo transformar el lenguaje HR típico en comunicación clara y humana. Toma estos ejemplos de frases corporativas y rescríbelas: "En virtud de lo anterior, les comunicamos que el proceso de selección ha finalizado", "Se informa al personal que a partir del próximo período fiscal...", "Agradecemos su interés en formar parte de nuestra organización". Explica qué cambia en cada transformación.

3. EMAILS DE CANDIDATE EXPERIENCE
Diseña la secuencia completa de emails que recibe un candidato desde que aplica hasta la decisión final: confirmación de candidatura, invitación a primera entrevista, recordatorio veinticuatro horas antes, confirmación de siguiente fase, y email de rechazo con feedback. Para cada email: asunto, cuerpo completo y tiempo de envío respecto al evento.

4. COMUNICACIONES INTERNAS QUE SE LEEN
¿Por qué los empleados ignoran los emails de RRHH? Analiza las causas y da soluciones: frecuencia excesiva y cómo gestionar la cadencia, líneas de asunto que compiten con el resto del inbox, mensajes demasiado largos para el valor que entregan, y cómo usar la segmentación por área o nivel para enviar solo lo relevante a cada grupo.

5. PLANTILLA DE ANUNCIO DE CAMBIO ORGANIZACIONAL
Escribe la plantilla de email para comunicar un cambio sensible (reorganización de equipo, cambio de política, reducción de beneficios) que minimice la ansiedad, sea transparente y deje espacio para preguntas. Incluye: cómo comenzar sin rodeos, cómo explicar el "por qué", qué nivel de detalle dar y cómo terminar con un CTA de preguntas o canal de comunicación abierto.

6. MÉTRICAS DE EMAIL INTERNO
¿Cómo medir si las comunicaciones de RRHH están funcionando? Aunque no uses ESP para email interno, define indicadores proxy: tasa de respuesta a emails que piden acción, reducción de preguntas al help desk después de comunicados claros, encuesta trimestral de claridad comunicativa, y cómo hacer un test de comprensión en emails complejos (cambios de beneficios, nuevas políticas).

Escribe con tono humano y práctico. Este prompt es para un profesional de RRHH que quiere que sus emails generen impacto real, no que sean descartados sin leer.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Mejorar la comunicación por email de RRHH hacia candidatos y empleados',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Financial email communications: estados de cuenta, alertas y comunicaciones regulatorias',
                'description'      => 'Diseña comunicaciones de email financieras que cumplan regulación, sean claras y no generen llamadas de soporte innecesarias.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en comunicación de servicios financieros con experiencia en diseño de emails para banca, fintech, gestoras de inversión y compañías de seguros. Necesito diseñar comunicaciones financieras por email que sean claras para el cliente, cumplan con las obligaciones regulatorias y reduzcan la carga de soporte al cliente.

Contexto de mi empresa:
Somos [banco / fintech / aseguradora / gestora / plataforma de pagos] y enviamos emails para [estados de cuenta, alertas de transacción, confirmaciones de operación, comunicados regulatorios obligatorios, notificaciones de cambios en términos, etc.]. Nuestro mayor problema es [clientes que no entienden el estado de cuenta / alto volumen de llamadas de soporte por emails confusos / problemas de cumplimiento en comunicaciones masivas].

Lo que necesito:

1. ARQUITECTURA DE COMUNICACIONES FINANCIERAS POR TIPO
Define la estructura óptima para cada tipo de email financiero: alerta de transacción (qué dato debe aparecer primero, información mínima obligatoria, CTA de reporte de fraude), estado de cuenta mensual (jerarquía de la información, cómo presentar el saldo disponible versus el saldo contable, resumen de movimientos en formato escaneable), confirmación de operación (qué elementos de confianza incluir para que el cliente no llame a verificar), y comunicado regulatorio obligatorio (cómo cumplir con el requisito legal sin que el cliente lo ignore o se alarme innecesariamente).

2. CLARIDAD EN DATOS FINANCIEROS
Los emails financieros suelen ser confusos por exceso de jerga. Muéstrame cómo simplificar: diferencia entre saldo disponible y saldo total explicada en una línea, cómo presentar cargos y abonos sin que el cliente los confunda, formato recomendado para fechas de vencimiento y fechas de valor, y cómo mostrar el resumen de inversiones sin abrumar con decimales y porcentajes.

3. ALERTAS EN TIEMPO REAL QUE GENERAN CONFIANZA
Diseña el sistema de alertas transaccionales ideal: qué eventos deben disparar una alerta inmediata (pago con tarjeta, transferencia saliente, intento de login, cambio de contraseña), cuál es el contenido mínimo de cada alerta para ser útil sin ser alarmista, y cómo incluir en la alerta un mecanismo de reporte de fraude con un solo clic que no requiera autenticación adicional.

4. CUMPLIMIENTO REGULATORIO SIN SATURAR AL CLIENTE
¿Cómo equilibrar las obligaciones de comunicación regulatoria (GDPR, MiFID, PSD2, comunicaciones de la CNMV) con la experiencia del cliente? Explica: cuándo un aviso legal puede ir en el footer en lugar de en el cuerpo principal, cómo redactar un aviso de cambio de términos que el cliente realmente lea, y qué elementos de consentimiento deben estar en el cuerpo del email versus en un enlace externo.

5. REDUCIR LLAMADAS DE SOPORTE CON EMAIL PROACTIVO
El mejor soporte es el que previene la llamada. Diseña tres tipos de emails proactivos: email de anticipación de cobro (notificación antes del cargo para evitar sorpresas), email de explicación de comisión aplicada (antes de que el cliente lo vea en el estado de cuenta), y email de bienvenida financiero que explica los tres elementos que más confunden a los clientes nuevos.

6. SEGURIDAD Y PHISHING: CÓMO COMUNICAR SIN RIESGO
Los emails financieros son el principal vector de phishing. ¿Cómo diseño mis emails para que los clientes aprendan a distinguir lo legítimo de lo fraudulento? Define: qué nunca debe pedir un email financiero legítimo, cómo usar el diseño para crear reconocimiento de marca anti-phishing, y cómo comunicar a los clientes las reglas de seguridad en un email que ellos realmente lean.

Responde con ejemplos concretos y plantillas reales. Considera las restricciones legales y de reputación que tiene una empresa del sector financiero al comunicarse por email.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar comunicaciones financieras por email que cumplan regulación y sean claras',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Email compliance: lo que el abogado debe saber sobre comunicaciones electrónicas',
                'description'      => 'Analiza los riesgos legales del email marketing y las comunicaciones corporativas por correo electrónico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especialista en derecho digital, protección de datos y comunicaciones electrónicas comerciales con experiencia asesorando a empresas en el cumplimiento del RGPD, la LSSI-CE y las normativas antispam. Necesito entender los riesgos legales del email y cómo gestionar el cumplimiento de las comunicaciones electrónicas de mi empresa.

Contexto de mi empresa:
Soy [abogado interno / responsable de compliance / DPO / CEO] en [tipo de empresa, sector]. Enviamos emails a [clientes actuales, leads, contactos de base de datos comprada, suscriptores de newsletter, proveedores]. Nuestras dudas principales son [si necesitamos consentimiento explícito para todo, qué pasa con las bases de datos compradas, cómo documentar el consentimiento, qué incluir obligatoriamente en cada email].

Lo que necesito:

1. BASES JURÍDICAS PARA EL ENVÍO DE EMAILS COMERCIALES
Explica las tres bases jurídicas que permiten enviar emails comerciales bajo el RGPD y la LSSI-CE: consentimiento explícito (cuándo es obligatorio, cómo se documenta, qué validez tiene), interés legítimo (cuándo aplica en B2B, cómo documentar el análisis de ponderación, qué comunicaciones pueden ampararse en él) y relación contractual preexistente (qué permite la excepción soft opt-in, sus límites temporales y de categoría de producto). Para cada base jurídica indica: cuándo usarla, cómo documentarla y cuándo es insuficiente.

2. CONSENTIMIENTO VÁLIDO: QUÉ DICE LA LEY Y QUÉ DICE LA REALIDAD
¿Qué requisitos debe cumplir un consentimiento para ser válido bajo el RGPD? Analiza: la diferencia entre casilla pre-marcada (inválida) y casilla en blanco (válida), la granularidad del consentimiento por finalidad, el registro del consentimiento (quién, cuándo, mediante qué mecanismo, texto exacto mostrado), la gestión del doble opt-in como prueba de consentimiento y cuánto tiempo se conserva la evidencia de consentimiento.

3. BASES DE DATOS COMPRADAS O CEDIDAS: RIESGO REAL
Muchas empresas compran listas o reciben bases de datos de socios. Explica: si es legal enviar emails comerciales a una lista comprada, qué responsabilidad recae en el cedente y en el que envía, qué dice la AEPD sobre las cadenas de cesión de datos, y qué revisar contractualmente antes de usar una lista de terceros.

4. OBLIGACIONES FORMALES EN CADA EMAIL COMERCIAL
¿Qué debe incluir obligatoriamente cada email comercial enviado a personas físicas en España? Lista los elementos legalmente requeridos: identificación del remitente, datos de contacto, naturaleza comercial visible, enlace de baja efectivo y gratuito, dirección postal. ¿Qué pasa si falta alguno? Indica las sanciones aplicables y casos reales de multas de la AEPD.

5. EMAILS INTERNOS Y CONSERVACIÓN
¿Qué obligaciones legales existen sobre la conservación de emails corporativos? Aborda: plazos de conservación según la naturaleza del email (contractual, fiscal, laboral), el email como prueba en procedimientos judiciales o arbitrales, la destrucción segura de emails con datos personales al vencer el plazo, y las políticas de email aceptable use que reducen el riesgo legal.

6. RESPONDER A UNA DENUNCIA O INSPECCIÓN DE LA AEPD
¿Qué hace una empresa cuando recibe una denuncia de un usuario que alega haber recibido spam o una inspección de la AEPD? Define el protocolo de respuesta: qué documentación reunir en las primeras cuarenta y ocho horas, cómo acreditar el consentimiento, qué medidas correctoras adoptar y cómo negociar la resolución del expediente.

Este prompt es para un profesional jurídico que necesita asesorar internamente a marketing o dirección sobre el cumplimiento legal en las comunicaciones por email. Sé preciso en referencias normativas (artículos del RGPD, LSSI-CE, doctrina de la AEPD).
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Auditar el cumplimiento legal de las comunicaciones por email bajo RGPD y LSSI',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'CS email workflows: bienvenida, check-ins y alertas que previenen el churn',
                'description'      => 'Diseña los flujos de email de Customer Success que construyen relación, detectan riesgo y salvan cuentas antes de que cancelen.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia en diseño de programas de onboarding, QBR y gestión de churn en empresas SaaS B2B. Necesito diseñar los flujos de email de CS que construyan relación real con los clientes, detecten señales de riesgo a tiempo y reduzcan el churn antes de que ocurra.

Contexto de mi equipo:
Gestionamos [número de cuentas] con un equipo de [número de CSM]. Nuestro segmento principal es [SMB / Mid-Market / Enterprise]. El principal problema es que [detectamos el churn demasiado tarde / los clientes no responden a nuestros check-ins / no tenemos visibilidad del uso del producto / los CSM no tienen tiempo para personalizar cada comunicación].

Lo que necesito:

1. MAPA DE EMAILS DE CS POR ETAPA DEL CLIENTE
Define el conjunto completo de emails que un CSM debe enviar en cada etapa: onboarding (semana uno, dos y cuatro con objetivos específicos de cada email), adoption (email de celebración del primer milestone, email de sugerencia de funciones no usadas), health check proactivo (email de revisión mensual o trimestral), riesgo detectado (cuando el product usage cae o hay tickets abiertos sin resolver) y renovación (secuencia de sesenta, treinta y quince días antes). Para cada email: quién lo envía (CSM o automatización), qué trigger lo dispara y cuál es el CTA esperado.

2. EL EMAIL DE BIENVENIDA DEL CSM: PRIMERA IMPRESIÓN
Escribe el email que el CSM envía en las primeras cuarenta y ocho horas tras el cierre del contrato. Debe: presentar al CSM con personalidad real (no corporativa), definir qué significa el éxito para este cliente en los primeros noventa días, proponer una llamada de kick-off con agenda clara y dar al cliente un recurso de alto valor inmediato (guía de inicio, acceso al portal de documentación, canal de Slack). Incluye asunto, cuerpo completo y notas sobre personalización.

3. CHECK-INS QUE GENERAN RESPUESTA
Los emails de check-in genéricos ("¿Cómo va todo?") son ignorados. Diseña tres versiones de check-in efectivas: check-in basado en uso del producto (referencia a una acción específica que el cliente hizo o no hizo), check-in basado en evento externo (cambio en la industria del cliente, noticia relevante, nuevo competidor), y check-in de valor entregado (muéstrale al cliente qué ha conseguido en el último mes con datos concretos). Para cada uno: asunto, estructura del email y por qué funciona.

4. SISTEMA DE ALERTAS DE RIESGO
¿Cómo traduzco las señales de riesgo del producto en acciones de email del CSM? Define: qué umbrales de product usage o comportamiento disparan una alerta (días sin login, tickets sin respuesta, NPS bajo, renovación próxima con health score bajo), qué email envía el CSM en cada nivel de alerta (amarillo, naranja, rojo) y cuál es el tono correcto para cada nivel sin sonar desesperado ni ignorante del problema.

5. EMAIL DE SALVAMENTO DE CUENTA
Cuando el cliente ya notificó su intención de cancelar, ¿cuál es el email que puede hacer cambiar de opinión? Diseña la estructura del email de win-back interno: reconocer el problema sin excusas, proponer una solución concreta con nombre y fecha, ofrecer algo tangible que cambie la ecuación (sesión de entrenamiento, feature que piden, descuento de renovación) y terminar con una pregunta directa que invite a una última conversación.

6. ESCALAR SIN PERDER EL TONO PERSONAL
¿Cómo mantener el tono personal cuando el CSM gestiona cien cuentas? Define: qué partes del email deben ser siempre personalizadas (primer párrafo, referencia al estado actual del cliente), qué partes pueden ser plantilla (recursos, agenda de llamada, footer de firma), y cómo construir un sistema de snippets o plantillas en Gmail o en el CRM que el CSM personaliza en menos de dos minutos.

Incluye emails reales escritos, no solo estructuras. El CSM que lea este prompt debe poder usar los emails directamente o adaptarlos en cinco minutos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar flujos de email de Customer Success que detectan y previenen el churn',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Newsletter del freelance: construir audiencia y convertirla en clientes',
                'description'      => 'Crea y escala una newsletter como canal de adquisición de clientes para tu negocio freelance o consultoría.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en newsletter y content marketing con experiencia ayudando a freelancers y consultores independientes a construir audiencias que generan ingresos. Necesito diseñar y escalar mi newsletter como el principal canal de captación y fidelización de clientes para mi negocio freelance.

Contexto de mi negocio:
Soy freelance o consultor especializado en [área: diseño, desarrollo, marketing, consultoría estratégica, etc.]. Mi cliente ideal es [perfil]. Actualmente tengo [número de suscriptores o "cero"] y envío [frecuencia o "nada todavía"]. Mi objetivo es que la newsletter se convierta en [canal de adquisición de clientes / posicionamiento como experto / producto monetizable / combinación].

Lo que necesito:

1. ESTRATEGIA DE NEWSLETTER PARA FREELANCE
Define la estrategia completa: propuesta de valor diferenciada (qué aprende o consigue el suscriptor que no encuentra en otro sitio), frecuencia óptima para mi nivel de recursos (semanal, quincenal o mensual con pros y contras de cada una), formato recomendado (larga con profundidad vs corta con accionabilidad inmediata), y cómo posicionar la newsletter como extensión de mi marca personal y no como un simple boletín más.

2. LOS PRIMEROS CIEN SUSCRIPTORES
¿Cómo consigo los primeros cien suscriptores sin publicidad? Dame un plan de acción de treinta días: qué decir en LinkedIn para invitar a la suscripción sin parecer desesperado, cómo pedir a clientes actuales y anteriores que se suscriban, qué lead magnet de alto valor puedo crear en un fin de semana para atraer suscriptores cualificados, y cómo aprovechar cada proyecto o colaboración para sumar a la lista.

3. ESTRUCTURA DE UNA EDICIÓN QUE SE LEE Y SE COMPARTE
Diseña la estructura ideal de cada edición de mi newsletter: línea de asunto con fórmula que funciona para mi nicho, frase de apertura que engancha en las primeras dos líneas, sección de contenido principal (profundidad o análisis), sección corta de recursos o herramientas, y cierre con CTA natural hacia mis servicios sin sonar a venta. Para cada sección da un ejemplo concreto de mi especialidad.

4. DE SUSCRIPTOR A CLIENTE: EL EMBUDO
¿Cómo convierto lectores en clientes sin hacer pitch directo en cada edición? Define: la frecuencia recomendada de CTAs de servicio (una vez al mes, cada cuatro ediciones, etc.), los tipos de CTA que convierten sin alienar (case study reciente, plazas disponibles este mes, llamada de diagnóstico gratuita), y cómo escribir el email de venta blanda que anuncia disponibilidad y genera solicitudes de presupuesto.

5. MONETIZACIÓN DIRECTA DE LA NEWSLETTER
Más allá de conseguir clientes, ¿cómo puedo monetizar la newsletter directamente? Analiza las opciones según mi tamaño de lista: patrocinadores (a partir de qué número de suscriptores tiene sentido, cómo buscarlos, qué tarifa cobrar), productos digitales (cómo usar la newsletter para lanzar un informe, curso o plantilla de pago) y suscripción de pago (cuándo tiene sentido, qué contenido reservar para pago y cómo hacer la transición).

6. CONSISTENCIA SIN QUEMARSE
El mayor problema de las newsletters de freelance es la falta de consistencia. Dame un sistema de producción de contenido que me permita enviar sin faltarme la inspiración: banco de temas (cómo generarlo y mantenerlo con treinta ideas siempre disponibles), batching de escritura (cómo escribir dos o tres ediciones en una sesión), y cómo reciclar y actualizar contenido antiguo sin que parezca pereza.

7. MÉTRICAS QUE IMPORTAN PARA UN FREELANCE
¿Qué métricas debo monitorizar como freelance (no como empresa grande)? Define los indicadores clave: tasa de apertura por encima de qué porcentaje es buena señal, tasa de clic como indicador de engagement real, tasa de respuesta a emails que piden opinión (el mejor indicador de comunidad), y cómo rastrear cuántos clientes vinieron directamente de la newsletter aunque no hicieran clic en un enlace trackeado.

Escribe con tono cercano y práctico, pensando en alguien que trabaja solo y tiene tiempo limitado. Cada recomendación debe ser implementable esta semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Crear y monetizar una newsletter como canal de adquisición de clientes freelance',
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
