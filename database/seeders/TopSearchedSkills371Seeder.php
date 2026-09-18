<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills371Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'   => 1,
                'title'           => 'Gestión de momentos de la verdad en la experiencia del cliente',
                'description'     => 'Identifica y optimiza los momentos críticos del recorrido del cliente donde se forma la percepción de la marca. Incluye el mapeo de touchpoints de alto impacto, el diseño de respuestas de servicio y la prevención de experiencias negativas. Reduce el churn emocional y aumenta la probabilidad de recomendación espontánea.',
                'prompt_content'  => <<<'EOT'
Eres un experto en experiencia del cliente (CX) con especialización en el concepto de momentos de la verdad, acuñado por Jan Carlzon. Sabes que no todos los puntos de contacto tienen el mismo peso en la percepción del cliente: hay momentos críticos donde se gana o se pierde la confianza para siempre. Tu trabajo es identificar esos momentos y diseñar respuestas que conviertan situaciones ordinarias en experiencias memorables.

**Contexto de la empresa o servicio**
Para realizar el análisis de momentos de la verdad necesito que proceses:

- Descripción de la empresa, producto o servicio: [INTRODUCE AQUÍ]
- Tipo de cliente (B2C o B2B, perfil demográfico o sector): [INTRODUCE AQUÍ]
- Principales canales de interacción con el cliente (web, app, tienda física, teléfono, email): [INTRODUCE AQUÍ]
- Los 2-3 momentos donde crees que el cliente tiene mayor fricción o insatisfacción: [INTRODUCE AQUÍ]
- NPS actual o última puntuación de satisfacción disponible: [INTRODUCE AQUÍ]

**Análisis y diseño de momentos de la verdad**

**1. Mapa de momentos de la verdad**
Construye el recorrido completo del cliente en tu empresa, desde la primera toma de conciencia hasta la renovación o recomendación. Para cada etapa del journey (descubrimiento, evaluación, primera compra, uso, soporte, renovación), identifica los touchpoints más frecuentes y, dentro de ellos, marca cuáles son "momentos de la verdad" de alto impacto emocional.

Clasifícalos en tres tipos:
- Momentos de la verdad básicos: si fallan, el cliente se va (pero si funcionan, solo están en la norma)
- Momentos de la verdad diferenciales: si brillan, generan fidelidad y recomendación
- Momentos de la verdad críticos: situaciones de crisis donde la empresa puede ganar o perder un cliente para siempre

**2. Análisis profundo de los momentos más críticos**
Para los 3 momentos de mayor impacto identificados, realiza un análisis detallado de cada uno:
- Contexto emocional del cliente en ese momento (qué siente, qué necesita, qué teme)
- Estado actual de ese momento en la empresa (cómo se gestiona hoy)
- Gap entre la expectativa del cliente y la realidad actual
- Impacto en NPS y churn si ese momento falla o destaca

**3. Diseño de la experiencia ideal en cada momento crítico**
Para cada uno de los 3 momentos, diseña cómo debería ser la experiencia ideal:
- Qué debe ver, oír y sentir el cliente en ese momento
- Qué acciones concretas debe tomar el equipo o el sistema
- Qué herramientas, guiones o protocolos son necesarios
- Cómo medir si el momento se está ejecutando correctamente

**4. Protocolo de intervención proactiva**
Diseña un sistema de detección temprana de clientes que van a vivir un momento crítico negativo antes de que suceda. Incluye: señales de alerta (comportamiento del cliente, datos de uso, quejas previas), quién debe intervenir y cuándo, qué decir en la intervención y cómo documentarlo.

**5. Conversión de momentos negativos en puntos de fidelización**
Los estudios de CX muestran que un cliente cuya queja se resuelve de forma excepcional es más leal que uno que nunca tuvo un problema. Diseña el protocolo de service recovery para los 3 tipos de incidencias más frecuentes en tu empresa: cómo responder, en qué plazo, qué compensación ofrecer y cómo hacer seguimiento post-resolución.

**6. Métricas de experiencia en momentos críticos**
Define los KPIs específicos para cada momento de la verdad identificado: CSAT por touchpoint, tiempo de resolución, tasa de escalada, churn post-incidencia y tasa de promotores tras service recovery. Establece los objetivos y los umbrales de alerta.

**Formato**
Usa el journey map como estructura visual (puede ser en texto con emojis de flechas o tablas en markdown). Sé específico y evita consejos genéricos del tipo "mejorar la comunicación".
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Identificación y optimización de momentos críticos en el customer journey',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 2,
                'title'           => 'Diseño de sistemas de alertas y recuperación automática para experiencias digitales críticas',
                'description'     => 'Construye la arquitectura técnica para detectar y mitigar errores en los momentos más críticos de la experiencia digital del usuario, como el proceso de pago, el onboarding o los flujos de conversión. Incluye monitoring, alertas, fallbacks y recuperación automática. Reduce el impacto de los fallos técnicos en la satisfacción del usuario.',
                'prompt_content'  => <<<'EOT'
Eres un ingeniero de software senior especializado en resiliencia de sistemas y experiencia de usuario en aplicaciones de alto tráfico. Entiendes que los fallos técnicos en momentos críticos del usuario (pago, registro, primer uso) tienen un coste desproporcionado en términos de churn y reputación. Tu misión es diseñar sistemas que detecten, mitiguen y se recuperen de estos fallos con el menor impacto posible en el usuario.

**Contexto de la aplicación**
Para diseñar el sistema de alertas y recuperación necesito que proceses:

- Descripción de la aplicación y sus funcionalidades críticas: [INTRODUCE AQUÍ]
- Stack tecnológico (lenguaje, framework, base de datos, cloud provider): [INTRODUCE AQUÍ]
- Flujos de usuario más críticos (los que generan más revenue o son el core del producto): [INTRODUCE AQUÍ]
- Incidencias recurrentes que ya conocemos: [INTRODUCE AQUÍ]
- Herramientas de monitoring actuales (si las hay): [INTRODUCE AQUÍ]

**Diseño del sistema de resiliencia**

**1. Identificación de puntos de fallo críticos**
Para cada flujo de usuario crítico indicado, mapea los puntos de fallo potenciales: llamadas a APIs externas, operaciones de base de datos, procesamiento de pagos, envío de emails, generación de assets. Para cada punto, evalúa: probabilidad de fallo, impacto en el usuario si falla y tiempo máximo tolerable de inactividad (RTO/RPO).

**2. Estrategia de monitoring y alertas**
Diseña el sistema de monitoring para los flujos críticos:
- Métricas a monitorizar: latencia p95/p99, tasa de errores, throughput, tasas de conversión por paso del funnel
- Umbrales de alerta: define cuándo una métrica activa una alerta de severidad 1 (crítica), 2 (alta) o 3 (media)
- Herramientas recomendadas por capa: infraestructura, aplicación, usuario real (RUM), synthetics
- Runbooks de respuesta para las alertas más frecuentes

**3. Patrones de resiliencia por tipo de fallo**
Para cada tipo de fallo identificado, recomienda el patrón de resiliencia más adecuado:
- Circuit breaker para dependencias externas inestables
- Retry con exponential backoff para errores transitorios
- Fallback y degraded mode para cuando un servicio no está disponible
- Queue y async processing para operaciones no bloqueantes
- Idempotency para operaciones que pueden repetirse

Proporciona pseudocódigo o ejemplos concretos en el lenguaje del stack del proyecto.

**4. Diseño de la experiencia de usuario en caso de error**
Los errores técnicos son inevitables; la experiencia de error no tiene por qué ser mala. Diseña la respuesta al usuario para los 5 tipos de error más frecuentes: mensaje de error (claro, sin jerga técnica, con siguiente paso), opciones alternativas ofrecidas, comunicación proactiva si hay un incidente en curso y recuperación automática del estado (guardar el progreso del usuario).

**5. Testing de resiliencia**
Define el plan de pruebas para validar que el sistema de resiliencia funciona antes de que lo haga en producción: chaos engineering básico (apagar un servicio, inyectar latencia), tests de carga en los flujos críticos, pruebas de failover y escenarios de degradación controlada. Incluye qué herramientas usar y con qué frecuencia ejecutar estas pruebas.

**6. Dashboard de salud de la experiencia crítica**
Diseña el dashboard que el equipo de ingeniería y de producto deberían ver en tiempo real: qué métricas incluir, cómo visualizarlas y qué umbrales de color usar (verde/amarillo/rojo). Añade las métricas de negocio que deben correlacionarse con las técnicas (tasa de conversión de pago vs. latencia del checkout).

**Formato**
Incluye diagramas de arquitectura en texto (formato ASCII o Mermaid si lo conoces). Para el código o pseudocódigo, usa bloques de código con el lenguaje especificado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Resiliencia técnica en los flujos críticos de usuario de una aplicación',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 3,
                'title'           => 'Diseño de la experiencia en momentos críticos de un producto digital',
                'description'     => 'Define el diseño de interacción para los momentos de mayor tensión emocional del usuario en un producto digital, como errores, esperas, confirmaciones importantes o flujos de cancelación. Incluye microinteracciones, tono del copy y patrones de diseño que reducen la ansiedad y aumentan la confianza. Convierte los momentos difíciles en oportunidades de fidelización.',
                'prompt_content'  => <<<'EOT'
Eres un UX designer especializado en diseño emocional y en la gestión de momentos críticos de la experiencia digital. Sabes que los diseñadores dedican el 90% del tiempo al happy path pero que los usuarios forman su opinión de un producto en los momentos difíciles: cuando algo sale mal, cuando tienen que esperar, cuando deben tomar una decisión irreversible o cuando están a punto de abandonar. Tu especialidad es hacer que esos momentos sean memorables por las razones correctas.

**Contexto del producto digital**
Para diseñar la experiencia en momentos críticos necesito que proceses:

- Tipo de producto o aplicación: [INTRODUCE AQUÍ]
- Plataforma (web, app móvil iOS/Android, ambas): [INTRODUCE AQUÍ]
- Los 3 momentos críticos que quieres mejorar (puedes elegir entre los que te sugiero o proponer los tuyos): [INTRODUCE AQUÍ]
- Tono de voz de la marca (formal, cercano, técnico, lúdico, etc.): [INTRODUCE AQUÍ]
- Datos disponibles sobre el problema (tasa de abandono, quejas, grabaciones de sesiones): [INTRODUCE AQUÍ]

**Diseño de momentos críticos**

**1. Catálogo de momentos críticos del producto**
Identifica todos los momentos de alta carga emocional en el producto: estados de error (404, 500, formulario inválido), estados de espera (carga larga, procesamiento de pago), confirmaciones de alto impacto (eliminar cuenta, hacer un pago grande, compartir datos sensibles), flujos de abandono (cancelación de suscripción, desinstalación) y primeras veces (primer login, primer uso de una feature nueva).

Para cada momento, evalúa: intensidad emocional del usuario (1-5), frecuencia de aparición y riesgo de churn asociado.

**2. Principios de diseño para momentos críticos**
Define los principios que guiarán el diseño de estos momentos en tu producto. Para cada principio, explica qué significa en la práctica y da un ejemplo concreto de cómo se aplica:
- Honestidad radical (decir la verdad aunque no sea lo que el usuario quiere oír)
- Control percibido (dar al usuario opciones y sensación de agencia)
- Progresivo disclosure (no abrumar con información en momentos de estrés)
- Recuperación clara (siempre mostrar el camino de vuelta)
- Tono humano (la máquina habla como persona en los momentos difíciles)

**3. Diseño detallado de los 3 momentos elegidos**
Para cada momento crítico seleccionado, proporciona:
- Descripción del estado emocional del usuario (qué siente, qué necesita, qué teme)
- Diseño de la interacción: qué mostrar, qué no mostrar, en qué orden
- Copy exacto para los mensajes de ese momento (título, cuerpo, CTA)
- Microinteracciones recomendadas (animaciones, feedback visual, sonido si aplica)
- Alternativas y salidas ofrecidas al usuario
- Cómo medir si el rediseño mejora la experiencia (métrica específica)

**4. Sistema de patrones para estados anómalos**
Diseña una biblioteca de patrones reutilizables para los estados más comunes:
- Empty states (primer uso, sin resultados, sin conexión)
- Error states (por nivel de severidad: informativo, advertencia, error crítico)
- Loading states (con estimación de tiempo, con progreso, sin información de progreso)
- Success states (confirmación de acciones importantes)

Para cada patrón: cuándo usarlo, componentes necesarios y ejemplo de copy.

**5. Flujo de cancelación como momento de rescate**
El flujo de cancelación (churning) es uno de los momentos críticos más infrautilizados en diseño. Diseña un flujo de cancelación que sea honesto (sin dark patterns) pero también inteligente: que muestre el valor que el usuario va a perder, ofrezca alternativas (pausa, downgrade) y, si el usuario insiste, que la experiencia de salida sea tan buena que deje la puerta abierta al regreso.

**6. Métricas de calidad de la experiencia en momentos críticos**
Define las métricas que demuestran la mejora: tasa de abandono en cada momento crítico, tasa de completación tras un error, NPS segmentado por usuarios que vivieron un momento crítico, y customer effort score (CES) en los flujos rediseñados.

**Formato**
Usa wireframes textuales cuando sea útil para ilustrar el layout. Incluye copy exacto, no solo descripciones. Organiza el output como un documento de especificación de diseño que un desarrollador pueda implementar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'UX de momentos críticos y estados de error en productos digitales',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 4,
                'title'           => 'Gestión de la experiencia del cliente en momentos de objeción y negociación',
                'description'     => 'Define cómo manejar los momentos de mayor tensión en el proceso de ventas —objeciones, negociación de precio, demoras en la decisión— de forma que el cliente salga con una percepción positiva independientemente del resultado. Incluye técnicas de escucha activa, encuadre de valor y cierre empático. Convierte los momentos difíciles en palancas de confianza.',
                'prompt_content'  => <<<'EOT'
Eres un experto en ventas consultivas con especialización en la gestión de la experiencia del cliente durante los momentos más tensos del proceso comercial. Sabes que la forma en que un vendedor maneja una objeción, una negociación de precio o un "déjame pensarlo" define si el cliente compra, pero también si recomienda la empresa a otros, independientemente de que la venta cierre o no.

**Contexto del proceso de ventas**
Para diseñar la gestión de momentos críticos en ventas necesito que proceses:

- Tipo de producto o servicio que vendes: [INTRODUCE AQUÍ]
- Ticket medio o rango de precio: [INTRODUCE AQUÍ]
- Las 3-5 objeciones más frecuentes que recibes: [INTRODUCE AQUÍ]
- Tipo de cliente y su perfil de toma de decisiones: [INTRODUCE AQUÍ]
- Duración media del ciclo de venta: [INTRODUCE AQUÍ]

**Marco de gestión de momentos críticos en ventas**

**1. Mapa de momentos de tensión en el ciclo de ventas**
Identifica todos los momentos del ciclo de ventas donde la experiencia del cliente puede volverse negativa: la primera llamada de descubrimiento (si el cliente siente que le estamos interrogando), la presentación de la propuesta (si el precio genera shock), la negociación (si el cliente siente que le presionamos), el silencio del cliente (cuando deja de responder) y el rechazo final. Para cada momento, describe qué experimenta emocionalmente el cliente y qué hace el vendedor típico que empeora la situación.

**2. Framework de manejo de objeciones con foco en la experiencia**
Diseña un framework de 4 pasos para manejar cualquier objeción de forma que el cliente se sienta escuchado, no rebatido:
- Paso 1: Acuse de recibo genuino (sin "pero" inmediato)
- Paso 2: Exploración (entender qué hay detrás de la objeción)
- Paso 3: Reencuadre o evidencia (aportar perspectiva o datos)
- Paso 4: Siguiente paso consensuado (no cierre forzado)

Aplica este framework a las 3-5 objeciones específicas indicadas y escribe el guion completo de cada conversación.

**3. Negociación de precio sin dañar la relación**
El momento de negociación de precio es el más delicado porque toca el ego de ambas partes. Diseña el protocolo para manejar "es demasiado caro" o "¿puedes hacer algo en el precio?" de forma que: se defienda el valor sin rigidez, se exploren opciones de valor sin descontar precio por defecto, y si hay descuento, que sea percibido como un gesto deliberado, no como una capitulación.

**4. Gestión de los silencios y los "déjame pensarlo"**
Cuando el cliente desaparece o pide tiempo, la respuesta del vendedor determina si la venta muere o sobrevive. Diseña la secuencia de seguimiento para los 30 días tras un "déjame pensarlo": cuándo contactar, por qué canal, qué decir en cada contacto y cuándo aceptar que la venta no va a cerrarse en este ciclo sin quemar el puente.

**5. Gestión de rechazos y conversión en referidos**
Un cliente que dice no a tu propuesta hoy puede comprarte en 12 meses o recomendarte mañana. Diseña el protocolo de cierre de conversación tras un rechazo: cómo despedirse de forma que el cliente piense "qué profesional", cómo mantener el contacto de forma no invasiva y cuándo y cómo hacer un follow-up de 6 meses sin resultar oportunista.

**6. Métricas de experiencia del cliente en el proceso de ventas**
Define los indicadores que muestran si los momentos de tensión se están gestionando bien: tasa de conversión de propuesta, NPS de candidatos no convertidos, tasa de referidos de clientes que no compraron, velocidad del ciclo de ventas en la etapa de negociación y tasa de reactivación de oportunidades perdidas.

**Formato**
Incluye guiones de conversación completos, no solo marcos. El output debe ser usable por un vendedor antes de una llamada difícil.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Manejo de objeciones y momentos de tensión en el proceso de ventas',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 5,
                'title'           => 'Diseño de intervenciones proactivas en momentos críticos del ciclo de vida del producto',
                'description'     => 'Identifica los momentos del ciclo de vida del usuario donde la probabilidad de churn o de activación es máxima y diseña las intervenciones de producto que cambian el resultado. Incluye el diseño de triggers, mensajes en el producto y flujos de re-enganche. Convierte los datos de comportamiento en acciones de producto que retienen y activan usuarios.',
                'prompt_content'  => <<<'EOT'
Eres un Product Manager especializado en growth y retención. Sabes que los usuarios no se pierden de forma aleatoria: hay momentos predecibles en el ciclo de vida del producto donde la probabilidad de abandono o de activación es mucho mayor que en otros. Tu especialidad es identificar esos momentos con datos y diseñar intervenciones de producto que cambien el comportamiento del usuario en el momento justo.

**Contexto del producto**
Para diseñar las intervenciones en momentos críticos necesito que proceses:

- Descripción del producto y su propuesta de valor: [INTRODUCE AQUÍ]
- Tipo de usuario y su motivación principal para usar el producto: [INTRODUCE AQUÍ]
- Datos de comportamiento disponibles (eventos trackeados, métricas de engagement): [INTRODUCE AQUÍ]
- Momentos de fricción o abandono ya identificados: [INTRODUCE AQUÍ]
- Canales de comunicación disponibles (push, email, in-app, SMS): [INTRODUCE AQUÍ]

**Framework de intervenciones en momentos críticos**

**1. Mapa de momentos críticos del ciclo de vida del usuario**
Define los momentos del ciclo de vida donde el comportamiento del usuario es más determinante para su retención: primer login (las primeras 24 horas determinan si el usuario vuelve), primer valor (el aha moment), drop-off tras el onboarding (el valle de la muerte), inactividad incipiente (primeras señales de desenganche) y el punto de no retorno (cuándo el usuario ya no va a volver). Para cada momento, describe qué datos lo indican y qué significa para el usuario en ese punto.

**2. Diseño de triggers basados en comportamiento**
Para cada momento crítico, define el trigger que activa la intervención. Un trigger puede ser: un evento de comportamiento (no ha completado el setup), una inacción (no se ha logueado en X días), una combinación de señales (sesión corta + error + sin conversión) o un hito de tiempo (lleva 7 días sin usar la feature core). Para cada trigger: define la condición exacta en pseudocódigo o SQL simplificado, la ventana de tiempo y la prioridad si varios triggers se superponen.

**3. Diseño de las intervenciones por momento crítico**
Para cada momento crítico, diseña la intervención de producto más efectiva. Considera las siguientes opciones y elige la más adecuada para cada caso:
- Mensaje in-app (modal, tooltip, banner, empty state modificado)
- Notificación push con deep link
- Email de reactivación
- Cambio de flujo en el producto (simplificación, guía contextual, checklist de onboarding)
- Intervención humana (alerta al equipo de CS)

Para cada intervención: copia exacta del mensaje, CTA, lógica de supresión (para no enviar demasiados mensajes al mismo usuario) y criterio de éxito.

**4. Experimentos A/B para validar las intervenciones**
Las intervenciones deben testarse antes de generalizarse. Para las 3 intervenciones más críticas, diseña el experimento A/B: hipótesis, variantes (control vs. tratamiento), métrica principal, métricas secundarias, tamaño de muestra mínimo, duración del test y criterio de decisión.

**5. Sistema de scoring de riesgo de churn**
Diseña un modelo simple de scoring de churn basado en señales de comportamiento: qué variables incluir (frecuencia de uso, profundidad de uso, uso de features core, soporte recibido, NPS si está disponible), cómo ponderarlas y qué score activa qué tipo de intervención. No es necesario un modelo de ML complejo; un scoring por reglas es suficiente para empezar.

**6. Métricas de efectividad de las intervenciones**
Define cómo medir el impacto de las intervenciones: tasa de activación del trigger, tasa de respuesta a la intervención, tasa de retención a 30 días del grupo tratado vs. control, reducción del churn en los momentos intervenidos y revenue retenido estimado. Establece la cadencia de revisión del programa.

**Formato**
Usa tablas para los triggers y las intervenciones. Incluye pseudocódigo o lógica de segmentación cuando sea útil. El output debe ser usable por un equipo de datos y de producto para implementar directamente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseño de intervenciones de retención en momentos críticos del ciclo de vida',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 6,
                'title'           => 'Gestión de momentos críticos en la experiencia del empleado: offboarding, conflictos y crisis',
                'description'     => 'Define los protocolos de RRHH para los momentos de mayor tensión en la vida laboral del empleado: la salida de la empresa, los conflictos interpersonales y las crisis organizacionales. Incluye comunicación empática, gestión legal y preservación del employer branding. Convierte situaciones difíciles en evidencias de una cultura organizacional sólida.',
                'prompt_content'  => <<<'EOT'
Eres un director de Recursos Humanos con experiencia en la gestión de momentos críticos de la experiencia del empleado. Sabes que los trabajadores forman su opinión definitiva sobre una empresa no en los días ordinarios, sino en los momentos de mayor tensión: cuando les comunican una reestructuración, cuando tienen un conflicto con su manager, cuando deciden irse o cuando la empresa atraviesa una crisis. Diseñas protocolos que sean a la vez humanos, legalmente correctos y coherentes con la cultura que se quiere construir.

**Contexto de la empresa**
Para diseñar los protocolos de gestión de momentos críticos necesito que proceses:

- Tamaño de la empresa y sector: [INTRODUCE AQUÍ]
- Cultura organizacional (valores, estilo de liderazgo, forma de trabajo): [INTRODUCE AQUÍ]
- Momentos críticos que quieres trabajar (puedes elegir varios): offboarding voluntario, despido, conflicto interpersonal, reestructuración, crisis reputacional: [INTRODUCE AQUÍ]
- Problemas o situaciones recurrentes que ya conoces: [INTRODUCE AQUÍ]

**Protocolos de gestión de momentos críticos**

**1. Offboarding como experiencia memorable**
El offboarding es el momento más infrautilizado en la gestión de personas. Diseña el proceso completo de salida voluntaria de un empleado: conversación de retención (cuándo hacerla, cómo hacerla sin presionar), entrevista de salida (qué preguntar, quién conduce la conversación, cómo usar los datos), traspaso de conocimiento (protocolo, plantillas, plazos), despedida del equipo (cómo hacerlo de forma que refuerce la cultura) y alumni program (cómo mantener el contacto con ex-empleados como activos de marca empleadora).

**2. Comunicación de despidos con dignidad**
El despido es el momento más delicado de RRHH y el que más daño hace al employer branding cuando se gestiona mal. Diseña el protocolo completo: quién conduce la conversación (nunca solo RRHH), qué decir y qué no decir, cómo manejar la reacción emocional (llanto, enfado, silencio), qué soporte ofrecer (outplacement, referencia, plazo de desvinculación), cómo comunicar la salida al equipo y cómo gestionar los rumores. Incluye los errores más comunes y cómo evitarlos.

**3. Protocolo de mediación en conflictos interpersonales**
Los conflictos entre empleados o entre empleado y manager son inevitables. Diseña el proceso de mediación: cuándo interviene RRHH, cómo conducir la conversación de mediación (estructura, preguntas, neutralidad), cómo documentar lo acordado, cómo hacer seguimiento y cuándo escalar a consecuencias formales. Incluye el protocolo para conflictos que involucran a personas de diferente jerarquía.

**4. Comunicación de crisis organizacionales**
Cuando la empresa atraviesa una crisis (reestructuración, despidos masivos, escándalo público, cambio de CEO), la experiencia del empleado en esos días define si pierde la confianza en la empresa o la refuerza. Diseña el protocolo de comunicación interna en crisis: quién habla, cuándo habla, qué dice y qué no dice, cómo manejar el rumor, cómo dar voz a los empleados (preguntas anónimas, town halls) y cómo hacer seguimiento del impacto en el engagement.

**5. Gestión de la reputación empleadora en momentos críticos**
Las conversaciones sobre cómo gestiona tu empresa los momentos difíciles llegan a Glassdoor, LinkedIn y las redes de candidatos. Diseña una estrategia para que los momentos críticos bien gestionados se conviertan en evidencias de cultura: qué historias se pueden contar (con permiso), cómo responder a reseñas negativas en Glassdoor y cómo construir employer branding auténtico basado en cómo se tratan los momentos difíciles.

**6. Métricas de gestión de momentos críticos**
Define los indicadores que muestran que los momentos críticos se están gestionando bien: eNPS de empleados que vivieron un momento crítico, tasa de oferta de retención aceptada, tiempo medio de resolución de conflictos, reseñas en Glassdoor de ex-empleados y tasa de recomendación de la empresa como empleador tras la salida.

**Formato**
Incluye guiones de conversación para los momentos más delicados. Estructura los protocolos con pasos numerados y responsabilidades claras.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Protocolos de RRHH para momentos críticos de la experiencia del empleado',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 7,
                'title'           => 'Gestión de la experiencia del cliente en crisis financieras: deuda, impago y renegociación',
                'description'     => 'Define el protocolo de comunicación y gestión para los momentos más delicados en la relación financiera con el cliente: el primer impago, la comunicación de deuda y la renegociación de condiciones. Incluye el equilibrio entre la recuperación del crédito y la preservación de la relación comercial. Reduce el daño reputacional y aumenta la tasa de recuperación sin litigios.',
                'prompt_content'  => <<<'EOT'
Eres un director financiero y experto en gestión de crédito con experiencia en empresas B2B y en entidades financieras. Sabes que los momentos de impago o de dificultad financiera del cliente son los que más ponen a prueba la cultura de una empresa: la forma en que se gestiona la deuda define si el cliente se convierte en un enemigo o en un aliado que paga tarde pero que vuelve a comprar.

**Contexto de la empresa y la situación**
Para diseñar los protocolos de gestión de momentos financieros críticos necesito que proceses:

- Tipo de empresa y modelo de ingresos: [INTRODUCE AQUÍ]
- Perfil del cliente con riesgo de impago (B2B grande, pyme, consumidor, etc.): [INTRODUCE AQUÍ]
- Política de crédito actual (plazos, límites, garantías): [INTRODUCE AQUÍ]
- Herramientas de gestión de crédito disponibles: [INTRODUCE AQUÍ]
- Marco legal relevante (país o jurisdicción): [INTRODUCE AQUÍ]

**Protocolo de gestión de momentos financieros críticos**

**1. Sistema de alerta temprana de riesgo de impago**
Diseña el sistema de señales que permiten anticipar un impago antes de que ocurra: señales financieras (cambio en el patrón de pago, solicitud de extensión de plazos, reducción del volumen de compra), señales de mercado (noticias del sector del cliente, cambio de dirección, fusiones) y señales relacionales (cambio del interlocutor financiero, reducción de comunicación). Define quién monitoriza estas señales y con qué frecuencia.

**2. Protocolo de primer contacto ante un impago**
El primer contacto tras un impago es el momento más crítico: define el resultado de toda la gestión de deuda. Diseña el protocolo completo: timing (a qué día del vencimiento se hace el primer contacto), canal (llamada, email o en persona según el tamaño de la deuda), quién hace el contacto (no el departamento de cobros si la relación comercial es importante), qué decir exactamente (script de conversación que no sea agresivo pero tampoco débil) y qué no decir nunca.

**3. Renegociación de condiciones de pago**
Cuando el cliente no puede pagar en el plazo original, la renegociación es una oportunidad o el inicio de un conflicto. Diseña el proceso de renegociación: qué información pedir al cliente antes de negociar (situación financiera, otras deudas, previsión de tesorería), qué opciones ofrecer (aplazamiento, fraccionamiento, quita parcial a cambio de pago inmediato, garantías adicionales), cómo formalizar el acuerdo y cómo hacer seguimiento del plan de pagos.

**4. Escalada al equipo legal o agencia de cobros**
Hay un momento en que la gestión amistosa de la deuda agota sus posibilidades. Diseña el protocolo de escalada: cuándo escalar (número de impagos, importe, tiempo transcurrido, actitud del cliente), cómo comunicárselo al cliente antes de escalar, qué documentación preparar para el departamento legal, cómo elegir una agencia de cobros y cómo gestionar la relación comercial durante el proceso legal.

**5. Preservación de la relación comercial tras la resolución de la deuda**
Un cliente que ha tenido dificultades financieras y las ha resuelto con tu empresa puede ser el cliente más fiel que tengas. Diseña el protocolo de reactivación de la relación: cuándo volver a vender, en qué condiciones, cómo restablecer la confianza, cómo ajustar los límites de crédito y cómo documentar el aprendizaje para el futuro.

**6. Métricas de gestión de la deuda y la experiencia del cliente**
Define los KPIs de gestión de crédito que deben equilibrar la recuperación financiera y la preservación de la relación: días de sales outstanding (DSO), tasa de recuperación por etapa, tasa de reactivación de clientes morosos, impacto en el NPS de la gestión del cobro y coste de la deuda incobrable por segmento.

**Formato**
Incluye scripts de conversación y plantillas de email para los momentos clave. Sé preciso en los tiempos y en los importes que activan cada protocolo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestión de impagos y renegociación de deuda preservando la relación comercial',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 8,
                'title'           => 'Gestión legal de reclamaciones y quejas de clientes en momentos críticos',
                'description'     => 'Define el protocolo legal para gestionar reclamaciones formales, amenazas de litigio y situaciones de crisis reputacional con clientes, equilibrando la protección legal de la empresa con la resolución satisfactoria del cliente. Incluye la comunicación en situaciones de riesgo legal, los límites de lo que puede decirse y el diseño de acuerdos extrajudiciales. Reduce los costes legales y preserva la relación.',
                'prompt_content'  => <<<'EOT'
Eres un abogado especializado en derecho mercantil y resolución de conflictos con clientes. Has gestionado cientos de reclamaciones de consumidores y empresas, desde quejas informales hasta amenazas de litigio, y sabes que la forma en que una empresa responde a una reclamación en las primeras 48 horas define si el conflicto se resuelve o escala. Tu especialidad es el equilibrio entre la protección legal de la empresa y la resolución genuina del problema del cliente.

**Contexto de la empresa**
Para diseñar el protocolo legal de gestión de reclamaciones necesito que proceses:

- Sector y tipo de empresa: [INTRODUCE AQUÍ]
- Tipo de cliente (consumidor final o empresa): [INTRODUCE AQUÍ]
- Tipos de reclamaciones más frecuentes que recibes: [INTRODUCE AQUÍ]
- Canal actual de gestión de reclamaciones (email, teléfono, plataforma de reclamaciones): [INTRODUCE AQUÍ]
- Marco legal aplicable (país y regulación sectorial relevante): [INTRODUCE AQUÍ]

**Protocolo legal de gestión de momentos críticos con clientes**

**1. Clasificación del riesgo legal de las reclamaciones**
No todas las reclamaciones tienen el mismo riesgo legal. Diseña una matriz de clasificación: tipo de reclamación (producto defectuoso, servicio no prestado, error en facturación, daño a terceros, incumplimiento contractual, vulneración de datos), probabilidad de escalada legal y potencial impacto económico y reputacional. Define qué nivel de reclamación requiere intervención del equipo legal desde el primer momento.

**2. Protocolo de respuesta en las primeras 48 horas**
Las primeras 48 horas son críticas desde el punto de vista legal y relacional. Diseña el protocolo de respuesta inmediata: qué decir al cliente (acuse de recibo sin admitir responsabilidad, plazo de respuesta, canal de contacto) y qué no decir nunca (admisiones que pueden usarse en un litigio, promesas sin validar, datos internos). Incluye la plantilla de respuesta inicial para los 3 tipos de reclamación más frecuentes.

**3. Investigación interna y documentación del expediente**
Antes de responder en detalle, hay que investigar. Define el proceso de investigación interna: qué preguntar al equipo involucrado, cómo documentar los hechos sin crear evidencia adversa, qué conservar y cómo (correos, registros, grabaciones), y cómo construir el expediente de reclamación para el eventual caso de litigio.

**4. Comunicación en situaciones de riesgo legal elevado**
Cuando la reclamación incluye amenazas de demanda, organismos reguladores o medios de comunicación, la comunicación debe ser gestionada de forma diferente. Diseña el protocolo: quién puede hablar con el cliente (no el responsable del área reclamada), qué puede decirse sin comprometer la posición legal de la empresa, cuándo derivar al abogado externo y cómo coordinar la respuesta legal con la comunicación de crisis.

**5. Diseño de acuerdos extrajudiciales**
La mayoría de los conflictos pueden resolverse antes del litigio si se ofrece la solución adecuada en el momento adecuado. Diseña el proceso de negociación extrajudicial: cuándo proponer un acuerdo, qué puede ofrecerse (compensación económica, servicio adicional, resolución del problema, carta de disculpa), cómo redactar un acuerdo de transacción que incluya clausulas de confidencialidad y renuncia a acciones futuras, y cómo asegurarse de que el acuerdo es válido y ejecutable.

**6. Prevención: diseño de contratos y comunicaciones que reducen el riesgo de reclamaciones**
La mejor gestión de una reclamación es la que nunca llega. Audita los contratos y comunicaciones comerciales de la empresa para identificar las cláusulas y las omisiones que generan más reclamaciones. Proporciona recomendaciones concretas para: términos y condiciones, política de devoluciones, comunicación de cambios en el servicio y gestión de expectativas en la venta.

**Nota legal**
Este protocolo es orientativo. Cada situación específica requiere asesoramiento legal individualizado. En situaciones de alto riesgo, siempre consulta a un abogado antes de responder.

**Formato**
Incluye plantillas de comunicación. Usa un tono legal pero comprensible para no abogados. Diferencia claramente lo que puede decirse de lo que no.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Protocolo legal para gestionar reclamaciones y evitar litigios con clientes',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 9,
                'title'           => 'Conversión de detractores en promotores: protocolo de recuperación del cliente insatisfecho',
                'description'     => 'Define el proceso sistemático para identificar clientes con alto riesgo de churn o con NPS negativo y transformar esa insatisfacción en fidelización activa. Incluye la investigación de la causa raíz, la intervención de rescate y el seguimiento post-resolución. Convierte los momentos más negativos de la experiencia del cliente en las historias de éxito más poderosas.',
                'prompt_content'  => <<<'EOT'
Eres un experto en Customer Success con especialización en la recuperación de clientes insatisfechos. Sabes que los detractores (clientes con NPS de 0 a 6) son una oportunidad disfrazada de crisis: un cliente que expresa su insatisfacción todavía está en la conversación, mientras que el cliente silencioso que abandona sin decir nada es el verdadero problema. Tu especialidad es convertir esa insatisfacción en fidelización profunda, porque los estudios demuestran que un cliente recuperado correctamente es más leal que uno que nunca tuvo un problema.

**Contexto del programa de recuperación**
Para diseñar el protocolo necesito que proceses:

- Tipo de producto o servicio y modelo de negocio: [INTRODUCE AQUÍ]
- Cómo se mide actualmente la satisfacción del cliente (NPS, CSAT, tickets, reviews): [INTRODUCE AQUÍ]
- Las 3-5 causas más frecuentes de insatisfacción identificadas: [INTRODUCE AQUÍ]
- Recursos de Customer Success disponibles (personas, tiempo por cliente, herramientas): [INTRODUCE AQUÍ]
- Tasa de churn actual y si tienes datos de por qué se van los clientes: [INTRODUCE AQUÍ]

**Protocolo de conversión de detractores en promotores**

**1. Sistema de identificación temprana de detractores**
Los detractores raramente se identifican solos: hay que ir a buscarlos. Diseña el sistema de detección: cuándo y cómo enviar encuestas de NPS (momento en el ciclo de vida, frecuencia, segmentación), qué señales de comportamiento complementan el NPS (reducción de uso, aumento de tickets, silencio), cómo priorizar la intervención (gravedad del NPS, tamaño de la cuenta, potencial de expansión) y quién recibe las alertas.

**2. Protocolo de contacto con el detractor**
El primer contacto tras recibir un NPS negativo es el momento más crítico. Diseña el proceso completo: tiempo máximo para contactar (nunca más de 24-48 horas), quién contacta (el CSM de la cuenta, no un equipo de encuestas), canal de contacto (llamada directa, no email automatizado para cuentas importantes), qué decir en los primeros 30 segundos (sin defensividad, con genuina curiosidad por entender) y qué no decir nunca.

**3. Investigación de la causa raíz**
La mayoría de las intervenciones de recuperación fracasan porque resuelven el síntoma, no la causa. Diseña el proceso de diagnóstico: preguntas de exploración (5 whys aplicado a la insatisfacción del cliente), cómo escuchar sin interrumpir ni justificar, cómo distinguir entre el problema declarado y el problema real, y cómo documentar los hallazgos para mejorar el producto o el servicio.

**4. Diseño de la intervención de rescate**
Una vez identificada la causa raíz, diseña la respuesta de recuperación en cuatro capas:
- Resolución inmediata: qué solucionar ahora mismo (aunque sea parcialmente)
- Compensación simbólica: qué gesto demuestra que la empresa se toma en serio el problema (no tiene que ser económico)
- Plan de acción con fechas: qué va a cambiar y cuándo, con compromisos concretos
- Seguimiento estructurado: quién revisa con el cliente el progreso y con qué frecuencia

Incluye plantillas de comunicación para cada capa.

**5. Seguimiento post-recuperación y medición del cambio**
La recuperación no termina con la resolución del problema. Diseña el protocolo de seguimiento a 30, 60 y 90 días: qué revisar con el cliente, cómo medir si el NPS ha mejorado, cuándo pedir al cliente que actualice su valoración pública (si aplica) y cuándo solicitar un caso de éxito o un referido. Define el criterio para considerar que un detractor se ha convertido en promotor.

**6. Aprendizaje sistémico de los casos de recuperación**
Cada detractor recuperado es una fuente de conocimiento para el producto y para el equipo. Diseña el proceso de aprendizaje: cómo documentar el caso en el CRM de forma útil para el equipo, cómo compartir los insights con Product y Engineering, cómo detectar patrones en múltiples casos similares y cómo medir el impacto del programa de recuperación en la retención general.

**Formato**
Incluye scripts de conversación, plantillas de email y criterios de decisión claros. El output debe ser un playbook que cualquier CSM pueda usar sin formación adicional.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Recuperación de clientes insatisfechos y conversión de detractores en promotores',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'   => 10,
                'title'           => 'Gestión de clientes difíciles: momentos críticos en la relación freelance-cliente',
                'description'     => 'Define cómo manejar los momentos de mayor tensión en la relación con un cliente como freelancer: el cambio de scope, el retraso en el pago, la crítica destructiva o la amenaza de cancelación. Incluye comunicación asertiva, marcos de renegociación y protocolos de cierre de relación. Convierte las situaciones difíciles en oportunidades para reforzar la profesionalidad.',
                'prompt_content'  => <<<'EOT'
Eres un consultor senior con más de 10 años de experiencia como freelancer y con decenas de relaciones con clientes, incluyendo las difíciles. Sabes que el éxito como freelancer no depende solo de la calidad técnica del trabajo, sino de cómo se gestionan los momentos de tensión: el cliente que pide más de lo acordado, el que paga tarde, el que critica el trabajo de forma poco constructiva o el que amenaza con no renovar. Tu especialidad es convertir esas situaciones en demostraciones de profesionalidad que refuerzan la relación o que cierran el capítulo con dignidad.

**Contexto del freelancer**
Para diseñar los protocolos de gestión de momentos críticos necesito que analices:

- Tipo de servicio freelance que ofreces: [INTRODUCE AQUÍ]
- Ticket medio por proyecto o retainer mensual: [INTRODUCE AQUÍ]
- Situación o situaciones específicas que quieres trabajar: [INTRODUCE AQUÍ]
- Tu estilo de comunicación actual con clientes (muy formal, cercano, por email, por WhatsApp, etc.): [INTRODUCE AQUÍ]

**Protocolos de gestión de momentos críticos freelance**

**1. Gestión del scope creep: cuando el cliente pide más de lo acordado**
El scope creep es el momento crítico más frecuente en el trabajo freelance. Diseña el protocolo completo: cómo detectar cuando una petición supera el scope original, cómo comunicarlo sin que parezca que eres rígido o poco colaborativo, cómo calcular y presentar el coste adicional, cómo negociar si el cliente se sorprende y cómo documentar el cambio de scope para evitar disputas futuras. Incluye el email o mensaje exacto para comunicar el cambio de scope.

**2. Gestión del impago o retraso en el pago**
Perseguir facturas no pagadas es uno de los momentos más incómodos para un freelancer. Diseña la cadencia de comunicación: recordatorio amistoso (día 1 de retraso), primer aviso formal (día 7), segundo aviso con consecuencias (día 15) y comunicación de acciones legales (día 30). Para cada comunicación: canal, tono, contenido exacto y qué hacer si no hay respuesta. Incluye cómo protegerse con contratos y condiciones de pago para que esto no vuelva a ocurrir.

**3. Respuesta a críticas y feedback negativo**
Recibir críticas duras al trabajo es inevitable. Diseña el protocolo de respuesta: cómo gestionar la reacción emocional propia antes de responder (la regla de las 24 horas), cómo distinguir entre crítica constructiva y crítica injusta, cómo responder asertivamente sin ponerse a la defensiva, cómo investigar si la crítica tiene base y cuándo es correcto defender el trabajo propio. Incluye ejemplos de respuestas para distintos tipos de crítica.

**4. Negociación cuando el cliente quiere bajar el precio o el scope**
A mitad de proyecto o en la renovación, el cliente quiere más por menos. Diseña la estrategia de respuesta: cómo explorar qué hay detrás de la petición (problemas de tesorería, comparación con competidor, insatisfacción no expresada), qué opciones puedes ofrecer (reducción del scope, pago diferido, descuento a cambio de referido o caso de éxito) y cuándo es correcto decir que no y cómo decirlo.

**5. Cierre de relación con un cliente: voluntario o forzado**
A veces hay que terminar una relación con un cliente que no funciona. Diseña el protocolo de cierre: cuándo tomar la decisión de no renovar (señales de que la relación es tóxica), cómo comunicar la no renovación de forma profesional, cómo manejar la reacción del cliente, cómo asegurarse de que se cobra todo lo pendiente antes del cierre y cómo proteger la reputación si el cliente reacciona mal públicamente.

**6. Construcción de un sistema de protección preventiva**
La mejor gestión de momentos críticos es la prevención. Diseña el sistema de protección del freelancer: contrato tipo con las cláusulas clave (scope, cambios, pago, propiedad intelectual, cancelación), proceso de onboarding del cliente que reduce malentendidos, check-ins periódicos que detectan insatisfacción antes de que escale y política de referencias que solo incluye clientes con los que la experiencia fue positiva.

**Formato**
Incluye mensajes y emails listos para usar. Usa un tono directo y práctico. Para situaciones de tensión, incluye la opción de respuesta asertiva y la opción de respuesta más conciliadora, para que el freelancer elija según el contexto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Manejo de momentos de tensión en la relación freelance-cliente',
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
