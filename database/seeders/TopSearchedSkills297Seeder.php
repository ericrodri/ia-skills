<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills297Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'PR de crisis: el comunicado que controla el daño antes de que escale',
                'description'      => 'Diseña la respuesta de comunicación ante una crisis de reputación para controlar la narrativa, proteger la marca y recuperar la confianza del público.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de comunicación y relaciones públicas con experiencia gestionando crisis de reputación en empresas de consumo, tecnología y servicios. Tu misión es ayudarme a diseñar la respuesta comunicativa ante una crisis, desde el primer comunicado hasta la estrategia de recuperación de reputación a medio plazo.

Contexto de la crisis:
La crisis que enfrenta mi empresa es [describe brevemente la situación: un producto defectuoso, una declaración pública polémica de un directivo, una filtración de datos, un accidente, una denuncia de empleados, una cobertura negativa en prensa, etc.]. La información ya es [pública / está a punto de hacerse pública / la tenemos internamente y anticipamos que saldrá]. Los principales afectados son [clientes, empleados, comunidad local, inversores, etc.].

Lo que necesito:

1. EVALUACIÓN DE LA CRISIS: GRAVEDAD Y TIPO
Antes de comunicar, hay que entender qué tipo de crisis es y qué tan grave es. Ayúdame a clasificar la crisis según su origen (operacional, reputacional, de valores, legal), según su alcance (local, nacional, viral en redes sociales), y según su velocidad (¿cuánto tiempo tenemos antes de que la narrativa se consolide sin nosotros?). Define el nivel de alerta de comunicación que requiere: silencio estratégico, comunicado interno, nota de prensa reactiva, o posicionamiento proactivo con rueda de prensa.

2. EL PRIMER COMUNICADO: ESTRUCTURA Y TONO
El primer comunicado es el que más determina cómo se recordará la crisis. Define la estructura del comunicado de crisis inicial: apertura que reconoce la situación sin admitir más de lo que se sabe en ese momento, declaración de los hechos verificados (solo los hechos, no interpretaciones), posicionamiento de la empresa respecto a los afectados (empatía genuina, no corporativa), acciones que ya se están tomando, y canal y formato para próximas actualizaciones. Redacta un borrador de comunicado para mi situación específica y explica cada elección de lenguaje.

3. LO QUE NO SE DEBE DECIR NUNCA EN UNA CRISIS
Los errores de comunicación en crisis son tan dañinos como la crisis misma. Define los cinco errores más comunes y por qué dañan: el "sin comentarios" (crea percepción de culpabilidad y deja el vacío para que otros lo llenen), la negación categórica sin hechos que la sostengan (si luego se demuestra lo contrario, destruye la credibilidad), el ataque al que reportó la crisis (desvía la atención pero genera más presión), la disculpa que no admite nada (detectada como falsa y agrava la desconfianza), y la comunicación excesiva de detalles técnicos sin mensaje central claro. Para cada uno indica qué decir en su lugar.

4. GESTIÓN DE LOS CANALES: DÓNDE Y CÓMO COMUNICAR
Una crisis comunicativa hoy ocurre en múltiples canales simultáneamente. Define la estrategia de canales: qué se comunica en redes sociales propias (tono, formato, frecuencia de actualización), qué va en un comunicado oficial en la web (el documento de referencia al que remiten todos los canales), cómo gestionar las preguntas de periodistas (quién responde, qué decir cuando el periodista llama antes de que el comunicado esté listo), cómo comunicar a los empleados antes o a la vez que al público (evitar que se enteren por la prensa), y si hay que hacer comunicaciones directas a los afectados (llamadas, emails personales, compensaciones).

5. VOCERÍA: QUIÉN HABLA Y CÓMO SE PREPARA
En una crisis, elegir mal al portavoz amplifica el daño. Define los criterios para elegir al portavoz: cuándo debe hablar el CEO (crisis de alto impacto que afecta a la empresa en su conjunto), cuándo habla el director de operaciones (crisis técnica o de proceso), cuándo habla el director de comunicación (como canal de información, no como cara de la crisis), y cuándo es mejor no tener cara visible y solo emitir comunicados escritos. Para el portavoz elegido: cómo prepararle en una hora antes de enfrentarse a las preguntas de la prensa (mensajes clave, respuestas a las cinco preguntas más difíciles, qué decir cuando no tienes la respuesta).

6. RECUPERACIÓN POST-CRISIS: DE LA GESTIÓN DEL DAÑO A LA RECONSTRUCCIÓN
La crisis termina cuando el comunicado se publica, pero la recuperación de la reputación lleva meses. Define la estrategia de recuperación a noventa días: qué acciones concretas demuestran que los cambios prometidos se están implementando, cómo comunicar el progreso sin parecer que estás buscando reconocimiento por arreglar algo que tú mismo rompiste, qué indicadores de reputación monitorizar (menciones en prensa, sentimiento en redes, NPS, retención de clientes en el período post-crisis), y cuándo es el momento correcto para retomar la comunicación positiva de la marca sin que parezca que has olvidado lo que pasó.

Redacta los mensajes clave, los borradores de comunicado y las respuestas a las preguntas difíciles para mi situación específica. Este prompt es para un director de marketing o comunicación que tiene que gestionar la respuesta pública de su empresa en las próximas horas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar la comunicación pública durante una crisis de reputación y controlar la narrativa',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Postmortem sin culpa: cómo documentar fallos para aprender, no para señalar',
                'description'      => 'Facilita y redacta postmortems de incidentes técnicos que generan aprendizaje real, mejoran los sistemas y mantienen la cultura psicológicamente segura.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un engineering manager o SRE con experiencia facilitando procesos de postmortem en equipos de ingeniería que practican la cultura de la responsabilidad sin culpa (blameless postmortem). Tu misión es ayudarme a diseñar el proceso y el documento de postmortem después de un incidente técnico, de forma que genere aprendizaje real, mejore la resiliencia del sistema y mantenga la seguridad psicológica del equipo.

Contexto del incidente:
El incidente fue [describe brevemente: caída de base de datos, bug en producción, brecha de seguridad, fallo de despliegue, degradación de rendimiento, etc.]. Duró [tiempo de impacto]. Afectó a [número de usuarios o clientes, porcentaje del tráfico]. La severidad fue [P1 / P2 / P3 según tu clasificación]. El equipo directamente involucrado en la resolución fue [equipo o personas].

Lo que necesito:

1. EL PRINCIPIO DE LA NO CULPA: POR QUÉ Y CÓMO
Explica el fundamento del blameless postmortem y por qué es superior a la búsqueda de culpables: cómo los sistemas complejos fallan por la combinación de múltiples factores y no por el error de una persona, por qué culpar a alguien cierra la investigación prematuramente y oculta las causas raíz sistémicas, y cómo la cultura de no culpa aumenta la velocidad de reporte de incidentes (los ingenieros no ocultan problemas por miedo a las consecuencias) y mejora la calidad del aprendizaje. ¿Cómo comunico este principio a un directivo que quiere saber "quién tuvo la culpa" del incidente?

2. LA ESTRUCTURA DEL DOCUMENTO DE POSTMORTEM
Define la estructura estándar del documento de postmortem que cubre todo lo necesario sin ser excesivamente burocrático: resumen ejecutivo (qué pasó, cuándo, impacto, estado actual), línea de tiempo del incidente (desde la primera señal hasta la resolución completa, con timestamps), análisis de causa raíz (usando los Cinco Por Qués u otra técnica de análisis causal), factores contribuyentes (qué condiciones del sistema o del proceso facilitaron que el incidente ocurriera), qué funcionó bien durante la respuesta (para reforzarlo), y acciones de mejora con propietario y fecha de entrega. Para cada sección define qué nivel de detalle es suficiente y qué es excesivo.

3. FACILITAR LA REUNIÓN DE POSTMORTEM: EL ROL DEL FACILITADOR
La reunión de postmortem puede desviarse hacia la asignación de culpas si el facilitador no la gestiona bien. Define el rol del facilitador: cómo abrir la reunión estableciendo el principio de no culpa explícitamente, cómo reconducir cuando alguien empieza a señalar a una persona en lugar de al sistema ("¿qué condición del sistema hizo posible que esa decisión fuera la que se tomó?"), cómo manejar el ingeniero que se autoculpa públicamente (que puede ser tan dañino como culpar a otros), y cómo cerrar la reunión con acuerdos concretos y distribuidos entre varios propietarios.

4. ANÁLISIS DE CAUSA RAÍZ: MÁS ALLÁ DEL ERROR HUMANO
Cuando un análisis de postmortem concluye en "error humano", el análisis está incompleto. Define el proceso de análisis de causa raíz que va más allá: la técnica de los Cinco Por Qués aplicada a un incidente técnico real (con ejemplo paso a paso), cómo identificar las causas latentes (diseño del sistema que dificulta hacer las cosas bien, falta de observabilidad que retrasa la detección, proceso de despliegue que no incluye validaciones), y cómo construir el árbol de causas cuando hay múltiples factores contribuyentes simultáneos.

5. LAS ACCIONES DE MEJORA: LAS QUE REALMENTE SE IMPLEMENTAN
El postmortem sin acciones de mejora implementadas es una pérdida de tiempo. Define el sistema para convertir las conclusiones en mejoras reales: cómo formular acciones concretas y verificables (no "mejorar el monitoring" sino "añadir alerta de latencia P99 mayor a quinientos milisegundos en el endpoint de checkout antes del próximo viernes"), cómo priorizar las acciones según su impacto en la prevención de recurrencia versus su coste de implementación, cómo asignar propietarios individuales (no el equipo, sino una persona), y cómo hacer seguimiento del estado de las acciones en la retrospectiva del sprint siguiente.

6. CULTURA DE POSTMORTEM: CÓMO HACER QUE SE NORMALICE
Una empresa con cultura de postmortem documentado y compartido aprende más rápido. Define cómo construir esa cultura: con qué frecuencia hacer postmortems (solo incidentes P1 y P2, o también incidentes menores con aprendizaje relevante), cómo hacer el postmortem accesible a todo el equipo de ingeniería (sesión abierta, documento compartido, newsletter de aprendizajes mensual), cómo reconocer públicamente a los equipos que hacen buenos postmortems sin convertirlo en un concurso que desincentiva la honestidad, y cómo medir si los postmortems están generando mejora real (¿se repiten los mismos tipos de incidentes?).

Proporciona la plantilla completa del documento de postmortem, las preguntas guía para la reunión y el ejemplo del análisis de los Cinco Por Qués aplicado a un incidente similar al mío.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Facilitar y documentar postmortems de incidentes técnicos que generan aprendizaje sin culpar a nadie',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño bajo presión: mantener la calidad cuando el tiempo se acaba',
                'description'      => 'Gestiona los procesos y la toma de decisiones de diseño en situaciones de alta presión temporal sin sacrificar la calidad ni la cohesión del equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un design lead con experiencia gestionando equipos creativos en situaciones de alta presión: fechas de entrega inamovibles, cambios de alcance de último momento, stakeholders que piden más con menos tiempo. Tu misión es ayudarme a desarrollar un sistema para mantener la calidad del trabajo de diseño y la salud del equipo cuando el tiempo se acaba y la presión aumenta.

Contexto de mi situación:
Trabajo en [agencia / equipo de producto interno / estudio de diseño] y la situación de presión que enfrento es [un lanzamiento adelantado, un cliente que pide cambios importantes a dos días de la entrega, un proyecto que se ha retrasado y ahora hay que recuperar el tiempo perdido, un rediseño de emergencia por un fallo detectado en producción]. El equipo es de [número de diseñadores] y el tiempo disponible es [fecha límite].

Lo que necesito:

1. TRIAGE DE DISEÑO: QUÉ SUELTO Y QUÉ NO
Cuando el tiempo se acaba, no se puede hacer todo con el mismo nivel de excelencia. Define el sistema de triage de diseño: cómo clasificar los elementos del proyecto según su impacto en la experiencia del usuario y su visibilidad (lo que el usuario ve y usa primero versus los estados de error que raramente ocurren), qué es innegociable desde el punto de vista de la calidad (accesibilidad básica, consistencia con el sistema de diseño, funcionamiento correcto en los flujos principales) versus qué puede hacerse con calidad suficiente pero no excelente (microinteracciones, estados edge case, animaciones), y cómo comunicar estas decisiones al equipo para que no sientan que están comprometiendo su trabajo sino que están siendo estratégicos.

2. TOMA DE DECISIONES RÁPIDA SIN PERDER LA COHERENCIA
El riesgo del diseño bajo presión es tomar decisiones locales inconsistentes que generan deuda de diseño difícil de pagar después. Define el proceso de toma de decisiones rápida que mantiene coherencia: cómo usar el sistema de diseño como árbitro de las decisiones (si está en el sistema, se usa; si no está, se decide si vale la pena añadirlo o se usa el componente más cercano), quién tiene la última palabra en cada tipo de decisión (design lead para decisiones que afectan al sistema, diseñador individual para decisiones de implementación de pantalla), y cuándo hacer una revisión de cinco minutos antes de avanzar versus cuándo es mejor pedir perdón que permiso.

3. COMUNICAR CON EL CLIENTE O LOS STAKEHOLDERS BAJO PRESIÓN
La presión de tiempo suele tener su origen en expectativas mal gestionadas. Define la estrategia de comunicación con el cliente o stakeholder en situación de crisis de tiempo: cómo presentar honestamente qué es posible entregar en el plazo dado (con opciones: alcance completo con calidad reducida, alcance reducido con calidad completa, o más tiempo para ambos), cómo manejar al cliente que insiste en que "todo debe estar perfecto para el jueves" sin que sea posible, y cómo documentar los acuerdos de alcance reducido de forma que el equipo esté protegido si el cliente no recuerda las concesiones que aceptó.

4. FLUJOS DE TRABAJO BAJO PRESIÓN: CÓMO ORGANIZAR EL EQUIPO
Un equipo de diseño mal organizado bajo presión se bloquea a sí mismo. Define el sistema de organización del trabajo de diseño en situación de emergencia: cómo dividir el trabajo entre los diseñadores para que haya paralelismo real (quién hace qué pantalla o flujo sin crear dependencias), cómo establecer puntos de sincronización frecuentes pero cortos (revisión de quince minutos cada dos horas para detectar bloqueos a tiempo), cómo gestionar el entregable final para que sea coherente aunque lo hayan hecho varias personas en paralelo (quién hace la revisión de consistencia final y cuándo), y cómo pedir ayuda al equipo de desarrollo para validar restricciones técnicas rápidamente en lugar de asumir.

5. PROTEGER LA CALIDAD MÍNIMA NO NEGOCIABLE
El diseño bajo presión tiene el riesgo de la regresión de calidad: se entregan cosas que el equipo sabe que están mal pero acepta por el tiempo. Define los criterios de calidad mínima no negociable que el equipo debe cumplir incluso bajo presión máxima: accesibilidad básica (contraste de color WCAG AA, tamaños mínimos táctiles en móvil), coherencia con el sistema de diseño (usar los componentes existentes, no inventar nuevos si hay equivalente), funcionamiento correcto en el flujo principal del usuario (el camino feliz no puede tener errores), y revisión básica en los dispositivos más usados por los usuarios reales antes de la entrega.

6. RECUPERAR AL EQUIPO DESPUÉS DE LA CRISIS
El mayor riesgo del diseño bajo presión no es la entrega, es el burnout y la deuda técnica de diseño que queda después. Define el proceso de recuperación post-crisis: cómo hablar con el equipo después de un período de alta presión (qué reconocer, cómo procesar el estrés acumulado), cómo documentar la deuda de diseño generada (qué hay que volver a hacer con calidad cuando haya tiempo), cómo evitar que el próximo proyecto empiece con la misma deuda sin resolver, y cómo usar la retrospectiva del proyecto para mejorar el proceso y reducir la probabilidad de que la siguiente crisis de tiempo sea tan intensa.

Proporciona ejemplos concretos de conversaciones difíciles con clientes, criterios de decisión para el triage de diseño, y la estructura de la reunión de gestión de crisis con el equipo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Gestionar el diseño bajo presión temporal sin sacrificar la calidad ni quemar al equipo',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Rescatar el deal perdido: cómo responder cuando el cliente dice no',
                'description'      => 'Diseña la estrategia de respuesta ante el rechazo del cliente para reactivar deals perdidos y convertir el no en una oportunidad futura.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con experiencia en ciclos de venta complejos B2B y en la gestión del rechazo y la recuperación de deals perdidos. Tu misión es ayudarme a diseñar la estrategia de respuesta cuando un prospecto o cliente dice no, diferenciando entre los noes definitivos, los noes de timing y los noes que esconden una objeción no resuelta.

Contexto de mi situación:
He perdido un deal con [perfil del cliente: tipo de empresa, sector, tamaño]. El no llegó en la fase de [prospección inicial / después de la demo / después de la propuesta / en la fase de cierre / en la renovación]. La razón que me dieron fue [precio demasiado alto / eligieron a un competidor / no es el momento / no hay presupuesto / cambio de prioridades internas / el proyecto se pausó]. La relación con el interlocutor principal es [buena / neutral / tensa].

Lo que necesito:

1. CLASIFICAR EL NO: DEFINITIVO, DE TIMING O DISFRAZADO
No todos los noes son iguales. Define el sistema para clasificar el tipo de rechazo: no definitivo (el problema que resuelvo no es una prioridad para ellos, eligieron una solución diferente y están satisfechos, la empresa no tiene presupuesto estructural para mi categoría de producto), no de timing (el proyecto se pospone por razones internas, el presupuesto del año se agotó pero renovarán la conversación en el próximo ciclo, el interlocutor cambió de empresa y el sucesor necesita tiempo para establecerse), y no disfrazado (el precio es la razón declarada pero el verdadero bloqueante es el temor al cambio, la objeción es "no es el momento" pero en realidad es que no ven el ROI claramente). Para cada tipo, indica la estrategia de respuesta correcta.

2. LA RESPUESTA INMEDIATA AL NO: LO QUE SE DICE Y LO QUE NO
Los primeros minutos después de recibir el no son los que más determinan si hay posibilidad de reactivación. Define cómo responder al no de forma inmediata: qué decir en el momento (agradecer la sinceridad, no argumentar en ese instante, preguntar por la razón real sin presionar), qué no decir nunca (atacar la decisión, hacer una propuesta de descuento de emergencia, culpar a un competidor), y cómo terminar la conversación con la puerta abierta para una reactivación futura ("¿podemos quedar en tres meses para ver cómo ha evolucionado la situación?").

3. ANÁLISIS POST-RECHAZO: APRENDER DEL NO
Cada deal perdido es una fuente de información sobre tu proceso de ventas. Define el proceso de análisis post-rechazo: qué preguntas hacerle al cliente después del no para obtener feedback real (cuándo esperar para pedirlo, cómo formularlo para que sea honesto y no políticamente correcto), cómo registrar el aprendizaje en el CRM de forma que sea útil para el equipo, y cómo usar los patrones de noes (misma razón repetida, misma fase del proceso donde se pierde) para identificar debilidades estructurales en la propuesta de valor o en el proceso de ventas.

4. ESTRATEGIA DE NURTURING: MANTENER EL CONTACTO SIN PRESIONAR
Un deal perdido hoy puede ser un cliente en seis o doce meses si la relación se mantiene bien. Define el sistema de nurturing post-rechazo: con qué frecuencia contactar al prospecto que dijo no (cada cuánto tiempo, con qué excusa válida), qué tipo de contenido o información enviar para aportar valor sin parecer que solo buscas otra oportunidad de venta (artículo relevante para su industria, caso de uso de un cliente similar, noticia de una mejora de producto que resuelve la objeción que tuvieron), y cómo detectar la señal de que el timing ha cambiado y es el momento de reactivar la conversación.

5. REABRIR EL DEAL: LA CONVERSACIÓN QUE REACTIVA
Cuando las condiciones cambian, hay una ventana para reabrir el deal. Define la estrategia de reactivación: qué eventos o señales justifican reabrir el contacto (cambio de directivo en la empresa cliente, nueva financiación o expansión, noticia de un problema que mi solución resuelve, vencimiento del contrato con el competidor que eligieron), cómo enmarcar la conversación de reactivación sin que parezca que solo estás intentándolo de nuevo ("vi que han abierto dos nuevas oficinas, intuía que podría ser un buen momento para retomar nuestra conversación"), y cómo gestionar la primera reunión de reactivación de forma diferente a la primera reunión de ventas (partir de lo que ya se sabe, no empezar de cero).

6. GESTIÓN EMOCIONAL DEL RECHAZO EN EL EQUIPO DE VENTAS
El no repetido deteriora la motivación del equipo comercial si no se gestiona bien. Define las prácticas de gestión del rechazo para el equipo: cómo procesar el no sin que se convierta en falta de confianza, cómo distinguir entre los noes que son señal de que algo en el proceso hay que cambiar versus los noes que son simplemente parte de la estadística normal de ventas, y cómo celebrar los aprendizajes de los deals perdidos con la misma energía con que se celebran los cierres ganados para construir una cultura de ventas resiliente.

Proporciona guiones concretos de las conversaciones clave: la respuesta inmediata al no, el email de seguimiento a los treinta días, y el mensaje de reactivación cuando el timing ha cambiado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Gestionar el rechazo de ventas y reactivar deals perdidos con estrategia y sin quemar la relación',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product incident communication: comunicar fallos de producto al usuario',
                'description'      => 'Diseña el proceso y los mensajes para comunicar incidentes y fallos del producto a los usuarios de forma transparente, empática y que preserva la confianza.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager con experiencia en la gestión de incidentes de producto y en la comunicación de crisis hacia usuarios en empresas de tecnología. Tu misión es ayudarme a diseñar el proceso y los mensajes para comunicar fallos, caídas y degradaciones del producto a los usuarios de forma que la confianza se preserve y el daño reputacional sea mínimo.

Contexto del incidente:
El tipo de incidente que enfrento es [caída total del servicio, degradación de rendimiento, pérdida de datos de usuarios, bug que afecta a un flujo crítico, fallo de una integración de terceros, incidente de seguridad]. El impacto es [número de usuarios afectados o porcentaje del tráfico, tiempo de impacto, si hay pérdida de datos o solo indisponibilidad]. El estado actual es [estamos investigando la causa / tenemos la solución en curso / el incidente está resuelto pero hay que comunicarlo].

Lo que necesito:

1. EL PROCESO DE COMUNICACIÓN DE INCIDENTES: QUIÉN, QUÉ Y CUÁNDO
Define el proceso completo de comunicación de incidentes desde que se detecta hasta que se resuelve: quién es el responsable de comunicación durante el incidente (el PM de guardia, el responsable de CS, el COO), cuándo se hace la primera comunicación pública (dentro de los primeros quince minutos si es un incidente P1, dentro de la primera hora para P2), con qué frecuencia se actualizan las comunicaciones mientras el incidente está activo (cada treinta minutos para incidentes críticos), y qué canal es el principal para las comunicaciones de incidente (status page, email, redes sociales, Slack de la comunidad).

2. EL PRIMER MENSAJE DE INCIDENTE: HONESTO Y SIN COMPROMISO EXCESIVO
El primer mensaje de incidente es el más difícil porque se envía con información incompleta. Define la estructura del primer mensaje: apertura que reconoce el problema sin minimizarlo ("Estamos experimentando problemas con [funcionalidad]. Sabemos que esto impacta vuestra operativa y lo tomamos muy en serio"), estado actual de la investigación (qué sabe el equipo en este momento, qué no sabe todavía), impacto conocido (a qué usuarios afecta, qué funciones están degradadas), y cuándo esperar la próxima actualización (un tiempo concreto, no "tan pronto como tengamos más información"). Redacta un ejemplo para mi situación específica.

3. LAS ACTUALIZACIONES DURANTE EL INCIDENTE
Las actualizaciones durante un incidente en curso son tan importantes como la comunicación inicial. Define la estructura de cada actualización de estado: qué ha cambiado desde la última actualización (nuevos hechos, acciones tomadas, estimación de resolución si es posible), qué sigue siendo igual (impacto que persiste), y qué hacer cuando no hay novedades reales pero toca actualizar (el mensaje de "seguimos trabajando en ello" que no resulta vacío). ¿Qué no se debe prometer en las actualizaciones? (Hora de resolución cuando no está clara, causas raíz antes de tener el análisis completo, garantías sobre que no volverá a ocurrir sin haberlo investigado.)

4. EL COMUNICADO DE RESOLUCIÓN: CERRAR BIEN EL INCIDENTE
El comunicado de resolución es el que más se leerá y el que determina la percepción final del incidente. Define la estructura del comunicado de resolución: confirmación de que el incidente está resuelto con hora exacta, resumen del impacto total (cuántos usuarios afectados, durante cuánto tiempo, qué funciones estuvieron degradadas), causa raíz en términos comprensibles para el usuario no técnico (sin jerga de ingeniería), acciones que se van a tomar para evitar que se repita (compromisos concretos, no genéricos), y qué hacer si como usuario sufriste pérdida de datos o daño concreto (canal de reclamación, compensación si aplica).

5. COMUNICACIÓN A CLIENTES DE ALTO VALOR: EL TRATO DIFERENCIADO
Los clientes enterprise o de alto ARR esperan una comunicación más personalizada que un post en la status page. Define el sistema de comunicación diferenciada: qué clientes merecen una llamada o email directo del CSM o del PM (los que superan un ARR umbral, los que detectaste que el incidente les impactó especialmente), qué dice ese mensaje personalizado que no está en la comunicación pública (nivel de detalle mayor sobre la causa, reconocimiento explícito del impacto en su operativa, oferta de llamada para resolver dudas), y cómo coordinar al equipo de CS durante un incidente para que puedan responder a las preguntas de los clientes con la información correcta.

6. POST-INCIDENTE: COMUNICAR EL APRENDIZAJE
Publicar el postmortem de un incidente grave es la práctica más poderosa para reconstruir la confianza. Define cómo comunicar el postmortem a los usuarios: cuándo publicarlo (entre cuarenta y ocho y setenta y dos horas después de la resolución, una vez que el análisis sea sólido), qué incluir en la versión pública del postmortem (cronología simplificada, causa raíz en lenguaje accesible, acciones de mejora con plazos), qué no incluir (detalles técnicos internos que no añaden valor al usuario, nombres de personas involucradas en el incidente), y cómo usar el postmortem público como herramienta de relación con la comunidad y no solo como obligación de transparencia.

Proporciona plantillas concretas para el primer mensaje de incidente, las actualizaciones de estado, el comunicado de resolución y el postmortem público adaptados a mi situación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestionar la comunicación de incidentes de producto que preserva la confianza del usuario',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Conversaciones difíciles en RRHH: despidos, PIPs y las charlas que nadie quiere tener',
                'description'      => 'Prepara y ejecuta las conversaciones de RRHH más difíciles con estructura, claridad y respeto para proteger a la persona y a la empresa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en gestión del talento y psicología organizacional con experiencia en el diseño y la ejecución de conversaciones difíciles en el contexto de Recursos Humanos. Tu misión es ayudarme a preparar y ejecutar las conversaciones más complicadas del rol de RRHH: despidos, planes de mejora del rendimiento (PIP), feedback negativo de alto impacto y notificaciones de cambios organizativos que afectan negativamente al empleado.

Contexto de mi situación:
La conversación difícil que necesito preparar es [despido por rendimiento / despido por causas económicas / inicio de un PIP / feedback de bajo rendimiento / comunicación de una reducción de categoría o salario / conversación con un empleado con problemas de comportamiento]. El empleado es [describe brevemente el perfil: tiempo en la empresa, rol, relación previa]. La situación llegó a este punto porque [describe brevemente el historial].

Lo que necesito:

1. PREPARACIÓN DE LA CONVERSACIÓN DIFÍCIL
La mayoría de los errores en conversaciones difíciles ocurren por falta de preparación. Define el proceso de preparación completo: qué documentación revisar y tener disponible antes de la conversación (historial de evaluaciones, conversaciones previas documentadas, causa específica de la acción, documentación legal necesaria), qué decir exactamente en los primeros treinta segundos (la apertura marca el tono de toda la conversación), qué preguntas o reacciones del empleado anticipar y cómo responderlas, y quién debe estar presente además del responsable de RRHH (manager directo, representante legal del empleado si aplica, testigo en algunos casos).

2. LA ESTRUCTURA DE LA CONVERSACIÓN DE DESPIDO
La conversación de despido es la más difícil y la que más consecuencias tiene si se ejecuta mal. Define la estructura paso a paso: cómo abrir la reunión sin preámbulos innecesarios que aumentan la ansiedad (en los primeros tres minutos el empleado debe saber que la decisión es el fin del contrato), cómo comunicar la razón de forma clara y documentada sin entrar en debate (los hechos, no las opiniones), qué información práctica dar en la reunión (fecha efectiva, condiciones económicas, proceso de entrega, referencias), cómo gestionar la reacción emocional del empleado (llanto, enfado, silencio, negación), y cómo cerrar la conversación preservando la dignidad de la persona. ¿Qué decir y qué no decir nunca en una conversación de despido?

3. EL PLAN DE MEJORA DEL RENDIMIENTO (PIP): HERRAMIENTA DE DESARROLLO O ANTESALA DEL DESPIDO
El PIP tiene mala reputación porque muchas veces se usa como documentación previa al despido y no como herramienta de mejora genuina. Define cómo estructurarlo de ambas formas según la intención real: el PIP como herramienta de desarrollo real (cómo definir objetivos de mejora alcanzables, qué soporte se le da al empleado, cuándo es el momento de revisión), y el PIP como proceso formal previo al despido cuando el rendimiento no es recuperable (cómo documentar el proceso, qué objetivos son razonables y justos, cómo gestionar la conversación de inicio del PIP). ¿Cómo comunicar el inicio de un PIP sin que el empleado sienta que ya está despedido?

4. FEEDBACK NEGATIVO DE ALTO IMPACTO: DECIRLO DE VERDAD
Muchos managers evitan el feedback negativo duro hasta que ya es demasiado tarde. Define el sistema de feedback negativo efectivo que no es cruel pero tampoco es evasivo: la estructura del feedback de comportamiento (hecho específico, impacto observado en el equipo o en el trabajo, expectativa clara de cambio, consecuencia si no cambia), cómo gestionar al empleado que niega el problema o se pone a la defensiva, y cómo documentar la conversación de feedback para que sea válida en un proceso de RRHH posterior si es necesario.

5. GESTIONAR EL IMPACTO EN EL EQUIPO DESPUÉS DE UN DESPIDO
El despido no solo afecta a quien se va; afecta a todo el equipo que se queda. Define la estrategia de comunicación interna post-despido: qué decirle al equipo sobre la salida de un compañero (el nivel de detalle adecuado, qué decir sobre las razones sin comprometer la privacidad del empleado saliente), cómo manejar los rumores y las teorías que inevitablemente aparecen, y cómo detectar y gestionar el impacto emocional en el equipo (baja de moral, inseguridad sobre la estabilidad del propio empleo, pérdida de confianza en el liderazgo).

6. EL BIENESTAR DEL PROFESIONAL DE RRHH QUE EJECUTA LAS CONVERSACIONES DIFÍCILES
Las conversaciones difíciles tienen un coste emocional para quien las facilita. Define las prácticas de autocuidado para el profesional de RRHH que gestiona estas situaciones regularmente: cómo procesar el impacto emocional de haber comunicado un despido (no ignorarlo, no sobreexponerse), cómo construir resiliencia emocional sin caer en la desensibilización que hace perder la empatía, y cuándo pedir apoyo (supervisión con otro profesional, coaching, formación específica en conversaciones difíciles).

Proporciona el guion de apertura de la conversación de despido, la estructura del documento de PIP, y las respuestas a las diez reacciones más difíciles del empleado durante este tipo de conversaciones.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Preparar y ejecutar conversaciones difíciles de RRHH como despidos y PIPs con claridad y respeto',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Comunicar malos resultados: cuando los números no dan y hay que explicarlo',
                'description'      => 'Estructura y ejecuta la comunicación de resultados financieros negativos al board, inversores y equipo directivo con transparencia, contexto y plan de acción.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con experiencia en la comunicación de resultados negativos a inversores, boards y equipos directivos. Tu misión es ayudarme a estructurar y ejecutar la comunicación de un período con resultados financieros por debajo de las expectativas, de forma que la confianza se mantenga, las causas queden claras y el plan de acción sea creíble.

Contexto de mi situación:
Los resultados negativos que necesito comunicar son [EBITDA por debajo del presupuesto, desviación de ingresos respecto al forecast, aumento de costes no previsto, pérdida de un cliente importante que impacta el ARR, ajuste a la baja de las proyecciones anuales]. La desviación respecto a las expectativas es de [porcentaje o importe aproximado]. La audiencia principal es [el board de inversores, el consejo de administración, el equipo directivo, los empleados de la empresa].

Lo que necesito:

1. PRINCIPIOS DE LA COMUNICACIÓN DE MALOS RESULTADOS
Antes de redactar una sola diapositiva, define los principios que guían la comunicación de resultados negativos: primero los hechos (los números, sin edulcorar ni contextualizar en exceso antes de presentarlos), luego las causas (qué explica la desviación, diferenciando causas estructurales de causas coyunturales), después el plan (qué se va a hacer para corregirlo), y finalmente el aprendizaje (qué ha enseñado esta situación sobre el negocio o el modelo de gestión). Explica por qué el orden importa y qué ocurre cuando se empieza por el contexto o las excusas antes de dar los números.

2. LA ESTRUCTURA DE LA PRESENTACIÓN AL BOARD O INVERSORES
Define la estructura de la presentación de resultados negativos al board de inversores: diapositiva de apertura con el resumen ejecutivo honesto (los números reales versus el forecast, sin rodeos), análisis de causas raíz (qué factores internos y externos explican la desviación, con qué evidencia), evaluación del impacto (cómo afecta esto a las proyecciones del año, al covenant financiero si aplica, a la valoración de la empresa en el siguiente round), plan de acción con responsables y fechas (no intenciones, sino compromisos concretos), y indicadores de seguimiento (cómo sabrán los inversores que el plan está funcionando en los próximos noventa días).

3. LO QUE NUNCA SE DEBE HACER AL COMUNICAR MALOS RESULTADOS
Los errores de comunicación en momentos de malos resultados pueden ser más dañinos que los propios resultados. Define los cinco errores más comunes y sus consecuencias: enterrar los malos números en el medio de la presentación o después de mucho contexto (genera desconfianza cuando el board los descubre), minimizar la magnitud del problema ("ha sido un trimestre difícil pero todo está bajo control" cuando no lo está), culpar a factores externos sin asumir ninguna responsabilidad interna, presentar un plan de acción vago sin compromisos medibles, y sorprender al board en la reunión con números que no habían visto antes (el CFO que llama al board antes de la reunión cuando los números serán malos genera más confianza que el que espera a la reunión).

4. GESTIONAR LAS PREGUNTAS DIFÍCILES DEL BOARD
Las preguntas del board después de presentar malos resultados son predecibles. Prepara las respuestas para las más incómodas: "¿Cómo es que no lo visteis venir?" (cómo responder con honestidad sobre los gaps de monitorización sin parecer incompetente), "¿Necesitamos hacer cambios en el equipo directivo?" (cómo manejar la pregunta sobre responsabilidades personales), "¿Cuánto tiempo tenemos antes de que esto sea un problema de tesorería?" (cómo dar una respuesta honesta con escenarios), y "¿Cuándo cambiamos el forecast anual?" (cuándo es el momento de revisar el plan y cómo gestionarlo).

5. COMUNICAR LOS MALOS RESULTADOS AL EQUIPO DIRECTIVO Y A LOS EMPLEADOS
El board no es la única audiencia. Define la estrategia de comunicación interna cuando los resultados son negativos: qué nivel de detalle de los malos resultados comparte el CEO con el equipo directivo (lo suficiente para que puedan liderar sus áreas con la información correcta, sin crear pánico innecesario), cómo comunicar a toda la empresa cuando los malos resultados implican cambios (reducción de headcount, congelación de contrataciones, reducción de presupuesto), y cómo gestionar los rumores que siempre aparecen cuando los empleados sienten que algo va mal aunque nadie lo haya comunicado oficialmente.

6. EL PLAN DE SEGUIMIENTO: RECUPERAR LA CONFIANZA CON HECHOS
La confianza de los inversores se recupera con acciones demostradas, no con promesas. Define el sistema de seguimiento post-presentación: cómo reportar el avance del plan de acción en las semanas siguientes (frecuencia, formato, destinatarios), qué indicadores de alerta temprana mostrar para demostrar que el plan está funcionando antes de que llegue el siguiente cierre trimestral, y cómo gestionar el escenario en que el plan de recuperación también se desvía de las expectativas (cuándo comunicarlo, cómo).

Redacta los mensajes clave para la apertura de la presentación, las respuestas a las tres preguntas más difíciles del board, y el email de seguimiento que se envía a los inversores a las cuarenta y ocho horas de la reunión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Comunicar resultados financieros negativos al board e inversores con transparencia y plan de acción creíble',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Crisis jurídica: cómo gestionar la comunicación cuando hay un litigio activo',
                'description'      => 'Gestiona la comunicación interna y externa de la empresa durante un proceso judicial o arbitral activo para proteger la posición legal sin sacrificar la reputación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especialista en litigación y gestión de crisis legal con experiencia asesorando a empresas en la coordinación entre la estrategia procesal y la comunicación pública durante un litigio activo. Tu misión es ayudarme a diseñar el protocolo de comunicación de la empresa durante una crisis jurídica, protegiendo tanto la posición legal como la reputación.

Contexto de la crisis jurídica:
El litigio o proceso legal activo es [demanda de un cliente o proveedor, denuncia laboral colectiva, procedimiento sancionador de una autoridad regulatoria, investigación de fraude o corrupción, litigio de propiedad intelectual, disputa con un socio o inversor]. El estado actual del proceso es [notificación de demanda, fase de instrucción, juicio próximo, sentencia pendiente]. La dimensión pública de la crisis es [el litigio es público y aparece en prensa / es privado pero existe riesgo de que trascienda / ya hay cobertura mediática].

Lo que necesito:

1. EL PRINCIPIO DE LA CAJA ESTANCA: SEPARAR LO LEGAL DE LO COMUNICATIVO
El mayor error en una crisis jurídica es mezclar la estrategia procesal con la comunicación pública. Define el principio de la caja estanca: cómo crear un protocolo donde los mensajes públicos de la empresa no comprometan la posición legal, quién puede hablar públicamente sobre el litigio (solo las personas autorizadas por la dirección legal, no el CEO espontáneamente), qué información es absolutamente confidencial y no puede aparecer en ninguna comunicación pública (documentos del proceso, valoraciones de riesgo internas, estrategia procesal, conversaciones entre abogados y cliente), y cómo asegurarse de que empleados, directivos y el equipo de comunicación entienden estos límites.

2. LA RESPUESTA PÚBLICA: QUÉ DECIR CUANDO APARECE EN PRENSA
Si el litigio trasciende a la prensa, la empresa necesita una posición pública. Define la posición pública mínima viable: cómo confirmar la existencia del procedimiento sin entrar en detalles que comprometan la defensa ("somos parte de un proceso judicial del que no podemos dar más detalles mientras está en curso"), qué decir sobre la posición de la empresa (confiamos en que el proceso concluirá de forma favorable a nuestros intereses, sin afirmaciones que puedan usarse en contra), y qué no decir nunca en medios (no criticar al demandante, no revelar argumentos de defensa, no hacer declaraciones sobre la probabilidad de ganar o perder).

3. COMUNICACIÓN INTERNA DURANTE EL LITIGIO: QUÉ SABEN LOS EMPLEADOS
Los empleados inevitablemente saben o sospechan que hay un proceso legal en curso. Define la estrategia de comunicación interna: qué información comparte la dirección con los empleados sobre el litigio (lo suficiente para evitar el vacío que se llena de rumores, sin revelar información privilegiada), cómo instruir a los empleados sobre qué hacer si reciben una citación, una solicitud de información de la parte contraria o una llamada de un periodista (la respuesta estándar es siempre redirigir al departamento legal), y cómo manejar el caso del empleado que tiene información relevante para el litigio y podría hablar con partes externas.

4. EL PROTOCOLO DE COMUNICACIÓN CON LAS PARTES INVOLUCRADAS
Durante un litigio, las comunicaciones con la parte contraria, con los testigos y con los peritos tienen reglas estrictas. Define el protocolo: qué comunicaciones deben pasar siempre por el abogado (cualquier comunicación con la parte contraria o su abogado, comunicaciones con la autoridad regulatoria o el juez), cómo gestionar el directivo que quiere llamar directamente a la otra parte para "arreglarlo" sin abogados, y cómo documentar todas las comunicaciones relacionadas con el litigio por si son requeridas durante el proceso (no borrar emails, preservar documentos, crear un archivo del caso).

5. GESTIONAR LA REPUTACIÓN DURANTE UN PROCESO LARGO
Los litigios pueden durar años. Define la estrategia de gestión de reputación a largo plazo durante el proceso: cómo mantener la narrativa de la empresa activa en lo positivo (hitos de negocio, logros del equipo, noticias positivas) sin que parezca que se ignora el proceso legal, cómo responder a los clientes o socios que preguntan por el estado del litigio (mensaje estándar, sin detalles procesales), y qué hacer cuando el litigio tiene una resolución negativa (sentencia desfavorable, sanción) para gestionar el impacto reputacional con la máxima transparencia posible dentro de los límites legales.

6. DESPUÉS DEL LITIGIO: LA COMUNICACIÓN POST-RESOLUCIÓN
La resolución del litigio, favorable o desfavorable, requiere una comunicación específica. Define la estrategia de comunicación post-resolución: si la resolución es favorable (cómo comunicar la victoria sin humillar a la parte contraria, que puede a su vez dañar la reputación), si la resolución es desfavorable (cómo comunicar la pérdida con el menor daño reputacional posible, qué admitir y qué no, si se recurre y cómo comunicarlo), y cómo comunicar un acuerdo extrajudicial (si el acuerdo incluye cláusula de confidencialidad, qué puede decirse públicamente y qué no).

Este prompt es para un abogado interno, un CEO o un director de comunicación que necesita coordinar la respuesta legal y comunicativa durante una crisis jurídica activa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar la comunicación interna y externa de la empresa durante un litigio activo',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Angry customer playbook: convertir al cliente furioso en promotor',
                'description'      => 'Gestiona situaciones de alta tensión con clientes insatisfechos usando un protocolo que desescala la situación, resuelve el problema y recupera la relación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia en la gestión de clientes en situaciones de alta conflictividad. Tu misión es ayudarme a diseñar el protocolo para gestionar a clientes furiosos o altamente insatisfechos de forma que la situación se desescale, el problema se resuelva y la relación se recupere, idealmente convirtiendo al cliente más difícil en un promotor de la empresa.

Contexto de la situación:
El cliente furioso al que necesito gestionar está enojado por [fallo grave del producto, promesa incumplida, pérdida de datos, mal servicio repetido, sentimiento de no haber sido escuchado durante semanas, error de facturación, incidente que afectó su operativa de negocio]. El nivel de intensidad es [está enojado pero razonable / está amenazando con cancelar / ha escalado a su directivo o consejo / está publicando en redes sociales sobre el problema / ha contactado a un abogado].

Lo que necesito:

1. EL PROTOCOLO DE DESESCALADA: LOS PRIMEROS CINCO MINUTOS
Los primeros minutos de la interacción con un cliente furioso determinan si la situación se desescala o escala más. Define el protocolo de desescalada paso a paso: cómo abrir la conversación (escucha activa completa, sin defensas ni justificaciones en los primeros minutos), qué decir exactamente para validar la emoción del cliente sin admitir culpa legal ("Entiendo por qué estás frustrado y tienes razón en estarlo"), cómo reformular el problema para demostrar que lo has entendido (repetir en tus palabras lo que el cliente dijo), y qué no decir nunca en los primeros cinco minutos (no minimizar el problema, no dar explicaciones técnicas antes de reconocer el impacto, no prometer lo que no puedes cumplir).

2. INVESTIGAR EL PROBLEMA RÁPIDAMENTE SIN DEJAR AL CLIENTE EN ESPERA
El cliente furioso que espera respuesta durante dos días mientras el equipo investiga se vuelve más furioso. Define el sistema de investigación rápida con comunicación activa: qué información necesitas del cliente para investigar (sin pedirle que repita lo que ya contó), cómo coordinar con el equipo de producto o soporte para obtener los datos en menos de una hora, y cómo mantener al cliente informado durante la investigación (llamada o mensaje cada treinta minutos si la situación es crítica, email de actualización a las dos horas con el estado de la investigación).

3. LA CONVERSACIÓN DE RESOLUCIÓN: QUÉ OFRECER Y CÓMO
Cuando tienes la causa y la solución, hay que presentarla de forma que el cliente sienta que fue escuchado y que la empresa tomó su problema en serio. Define la estructura de la conversación de resolución: reconocimiento explícito del error o del fallo (sin excusas y sin condicionales), explicación de la causa en términos accesibles para el cliente (no jerga técnica), descripción de la solución inmediata (qué se hace ahora mismo para resolver el impacto), plan para evitar que se repita (qué cambia en el producto o proceso), y el gesto de compensación si aplica (cuándo es apropiado ofrecer una compensación, qué tipo, cómo presentarla para que se perciba como un reconocimiento genuino y no como un soborno para que no diga nada).

4. LA ESCALADA: CUÁNDO INVOLUCRAR AL MANAGER O AL VP
Hay situaciones en que el CSM no puede resolver el problema solo y necesita escalar. Define el protocolo de escalada interna: qué situaciones requieren escalar de inmediato (amenaza de demanda, publicación en prensa o redes sociales, cliente que representa más del diez por ciento del ARR), cómo hacer la escalada sin que el cliente sienta que le están pasando a otro (la escalada siempre se presenta como un recurso adicional, no como un traslado de responsabilidad), y qué información pasa el CSM al VP o al manager para que entre a la conversación sin tener que pedir al cliente que repita el problema.

5. RECUPERAR LA RELACIÓN A LARGO PLAZO: EL FOLLOW-UP POST-CRISIS
Resolver el problema es solo el primer paso. La relación se recupera con lo que pasa en las semanas siguientes. Define el plan de recuperación post-crisis: qué contactos proactivos hace el CSM en los siguientes treinta días para demostrar que el cliente no ha quedado olvidado tras la crisis, cómo monitorizar si el problema se ha resuelto completamente desde el punto de vista del cliente (check-in de uso del producto, pregunta directa sobre si el impacto de negocio se normalizó), y cómo identificar el momento en que la relación está suficientemente recuperada para intentar una conversación de expansión (es contraproducente intentar el upsell cuando la herida todavía está fresca).

6. EL CLIENTE QUE NO SE PUEDE RECUPERAR: SABER CUÁNDO SOLTAR
No todos los clientes furiosos pueden o deben recuperarse. Define los criterios para identificar la situación en que lo mejor para el negocio es gestionar una salida digna: el cliente cuya demanda de compensación o de cambios es desproporcionada con el impacto real del problema, el cliente que ha decidido cancelar y solo busca culpabilizar (no resolver), y el cliente cuya cultura de relación con proveedores es tóxica y deteriora al equipo de CS. ¿Cómo gestionar la salida de este cliente de forma que no haya daño reputacional adicional y que la experiencia sirva para mejorar el proceso?

Proporciona guiones concretos para la llamada de desescalada, el email de actualización durante la investigación, y el mensaje de resolución con compensación cuando aplique.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Desescalar y resolver situaciones con clientes furiosos recuperando la confianza y la relación',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestionar el conflicto con el cliente: cuando el proyecto va mal',
                'description'      => 'Gestiona las situaciones de conflicto con clientes durante un proyecto freelance para reconducir la relación, proteger tu trabajo y cerrar el proyecto de forma profesional.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un mentor de negocio para freelancers con experiencia en la gestión de conflictos con clientes en proyectos de diseño, desarrollo, consultoría y comunicación. Tu misión es ayudarme a gestionar una situación de conflicto con un cliente durante un proyecto freelance, de forma que el proyecto se reencauce o se cierre de forma profesional, protegiéndome legalmente y preservando mi reputación.

Contexto de mi situación:
El conflicto con el cliente es por [el cliente pide cambios que van mucho más allá del alcance acordado, el cliente no aprueba ninguna entrega aunque cumple los requisitos acordados, el cliente no responde y el proyecto está bloqueado, el cliente no paga, el cliente amenaza con no pagar alegando que el trabajo no cumple las expectativas, el cliente tiene un tono agresivo o irrespetuoso en las comunicaciones, el cliente quiere cancelar sin pagar lo ya entregado]. La fase del proyecto es [inicio, mitad, cerca del final, ya entregado]. El contrato que firmamos [existe y define el alcance / es un email informal / no existe nada firmado].

Lo que necesito:

1. DIAGNÓSTICO DEL CONFLICTO: QUÉ TIPO DE PROBLEMA ES
No todos los conflictos con clientes tienen la misma causa ni la misma solución. Define el sistema de diagnóstico del conflicto: conflicto por expectativas no alineadas desde el inicio (el cliente esperaba algo diferente a lo que acordamos), conflicto por scope creep que el freelance no supo gestionar (el alcance fue creciendo sin reencuadrar el acuerdo), conflicto por calidad real (el trabajo entregado no cumple los estándares acordados), conflicto por personalidad o comunicación (el cliente es difícil independientemente del trabajo), y conflicto por impago o intención de no pagar. Para cada tipo indica el diagnóstico correcto y la estrategia de respuesta diferente.

2. LA CONVERSACIÓN DE REENCUADRE DEL PROYECTO
Cuando el proyecto va mal, hay que tener la conversación difícil antes de que sea demasiado tarde. Define la estructura de la conversación de reencuadre: cómo abrirla (sin acusaciones, con enfoque en resolver el problema que ambos tenemos), cómo presentar tu lectura de la situación de forma factual (lo que se acordó, lo que ha cambiado, el impacto en el proyecto), qué proponer para normalizar la situación (actualización del alcance con precio adicional, revisión del plan de trabajo, acuerdo sobre criterios de aceptación claros), y cómo documentar el nuevo acuerdo de forma que sea vinculante. Proporciona el guion de esta conversación para mi situación específica.

3. GESTIONAR EL SCOPE CREEP CUANDO YA ESTÁ AVANZADO
Si el scope creep lleva semanas o meses sin haberse gestionado, la conversación de reencuadre es más difícil pero no imposible. Define la estrategia para introducir el reencuadre cuando el proyecto ya está avanzado: cómo hacer el inventario de lo que se ha entregado versus lo que se acordó (con documentación de cada solicitud adicional), cómo calcular el valor del trabajo adicional entregado sin contrato, cómo presentar al cliente las opciones (pagar el trabajo adicional, reducir el alcance restante para compensar el excedente, o cerrar el proyecto en el estado actual), y cómo manejar al cliente que dice que "eso siempre estaba en el alcance".

4. CUANDO EL CLIENTE NO PAGA: EL PROTOCOLO DE COBRO
El impago es el conflicto más grave y el que más daño hace al freelance. Define el protocolo de cobro escalonado: primera comunicación amistosa (asumiendo que es un olvido o un problema administrativo), segunda comunicación más directa (recordatorio formal con referencia al contrato y a los plazos), aviso final antes de acción legal (comunicación escrita con plazo límite y consecuencias declaradas), y las opciones de acción si el cliente sigue sin pagar (reclamación judicial para importes pequeños, mediación, informe negativo en plataformas de reputación de compradores, o cesión de la deuda a un tercero). Para cada paso indica el tono, el canal y el plazo.

5. PROTEGERTE LEGALMENTE CUANDO EL PROYECTO SALE MAL
Un conflicto con un cliente puede tener consecuencias legales si no se gestiona bien. Define las medidas de protección legal que debes tomar desde el momento en que el conflicto se hace evidente: preservar todas las comunicaciones (guardar emails, mensajes de WhatsApp, comentarios en herramientas de gestión de proyectos), documentar los entregables con evidencia de entrega (confirmaciones de recepción, capturas de pantalla de los entregables en el sistema del cliente), no borrar nada relacionado con el proyecto aunque la relación sea tensa, y consultar con un abogado antes de dar el paso hacia una acción legal formal.

6. CERRAR EL CONFLICTO Y APRENDER PARA EL SIGUIENTE PROYECTO
Todo conflicto con un cliente es una lección. Define el proceso de cierre y aprendizaje: cómo terminar la relación con el cliente difícil de forma que no haya daño reputacional adicional (aunque hayas tenido razón, el tono de la comunicación de cierre determina si el cliente dice algo público), qué cambios hacer en tu proceso para evitar que la misma situación se repita (contrato más detallado, cláusula de alcance, proceso de aprobación de cambios, facturación por hitos), y cómo recuperarte emocionalmente de un proyecto que salió mal y retomar la energía para el siguiente cliente.

Proporciona guiones concretos para la conversación de reencuadre, el email de cobro en cada fase del protocolo de impago, y el mensaje de cierre de la relación cuando el conflicto no tiene solución.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Gestionar conflictos con clientes freelance para reconducir el proyecto o cerrarlo con protección legal',
                'vote_score'       => 44,
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
