<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills249Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Crisis de comunicación: gestionar el daño de reputación en redes',
                'description'       => 'Activa el protocolo de gestión de crisis de comunicación cuando la reputación de tu marca está bajo ataque en redes sociales: las primeras horas, el mensaje correcto y cómo salir reforzado.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en comunicación de crisis con experiencia en gestión de reputación corporativa en entornos digitales. Necesito tu ayuda para gestionar una crisis de comunicación que está afectando a la reputación de mi marca en redes sociales.

Mi contexto:
- Tipo de crisis: [un tweet viral negativo / una noticia en medios / un escándalo interno filtrado / un fallo del producto que afecta a clientes / una campaña de boicot organizada / otra]
- Escala de la crisis en este momento: [cuántas menciones, en qué plataformas, si hay medios involucrados]
- El mensaje o narrativa negativa que se está extendiendo: [describe qué dice la gente]
- Si la crítica tiene base real: [el problema es real y tenemos responsabilidad / la información es incorrecta o está fuera de contexto / hay una parte real y una parte exagerada]
- Audiencias clave afectadas: [clientes, empleados, inversores, medios, reguladores]

Con ese contexto, dame:

1. LAS PRIMERAS DOS HORAS: EL PROTOCOLO DE ACTIVACIÓN
¿Qué hacer en las primeras dos horas de una crisis de comunicación digital? Dame el protocolo de activación: el equipo de crisis que debe activarse (CEO, comunicación, legal, redes sociales, atención al cliente), el proceso de evaluación rápida de la crisis (¿cuál es la gravedad real?, ¿está creciendo o se está ralentizando?, ¿hay riesgo regulatorio o legal?), la decisión de si responder inmediatamente o esperar a tener más información, y el primer mensaje de acuse de recibo que reconoce la situación sin comprometer una posición antes de tenerla clara.

2. LA NARRATIVA DE RESPUESTA: QUÉ DECIR Y QUÉ NO DECIR
¿Cómo construir el mensaje de respuesta a la crisis de forma que no empeore la situación? Dame el marco de la comunicación de crisis: el orden correcto de los mensajes (primero la empatía con el afectado, luego los hechos verificados, luego las acciones que tomamos), las frases que nunca deben decirse en una crisis (las que suenan a excusa, las que minimizan el daño, las que atacan al crítico), y cómo adaptar el tono según si la crítica es justa o injusta. Escribe el borrador del mensaje de respuesta para mi caso concreto.

3. GESTIÓN DE CANALES: DÓNDE Y CÓMO RESPONDER
¿Dónde y cómo responder en cada canal cuando la crisis se extiende por múltiples plataformas? Dame la estrategia de canales en crisis: si responder en el hilo donde surgió la crítica o en el perfil propio (y los pros y contras de cada opción), cómo gestionar los comentarios negativos en Instagram, LinkedIn y Twitter/X de forma diferenciada, cuándo publicar un comunicado formal en la web o en un blog y cuándo es suficiente con las redes sociales, y cómo coordinar el mensaje entre el community manager, el equipo de atención al cliente y el departamento de comunicación.

4. GESTIÓN DE LOS MEDIOS CUANDO LA CRISIS TRASCIENDE LAS REDES
¿Qué hacer cuando la crisis atrae la atención de medios de comunicación? Dame el protocolo de gestión de medios en crisis: quién es el portavoz y por qué es importante que sea siempre el mismo, cómo preparar la declaración oficial para medios (qué incluir y qué no), cómo responder a las llamadas de periodistas en las primeras horas (el holding statement), si convocar una rueda de prensa o mantener la comunicación en declaraciones escritas, y cómo monitorizar la cobertura mediática para detectar bulos o informaciones incorrectas que hay que rectificar.

5. COMUNICACIÓN INTERNA DURANTE LA CRISIS
¿Cómo comunicar la crisis al equipo interno para evitar que los empleados se conviertan en amplificadores del problema? Dame el plan de comunicación interna de crisis: el mensaje al equipo en las primeras horas (qué está pasando, qué estamos haciendo, qué no deben decir en público ni en privado si les preguntan), cómo gestionar al equipo de atención al cliente que está recibiendo el impacto directo de la crisis, y cómo mantener al equipo informado de la evolución de la situación sin generar alarma innecesaria.

6. LAS 72 HORAS SIGUIENTES: RECUPERAR LA NARRATIVA
¿Cómo recuperar el control de la narrativa en los tres días posteriores al estallido de la crisis? Dame el plan de las 72 horas: cuándo publicar la respuesta completa con las acciones concretas que tomamos, cómo usar el contenido positivo (testimonios de clientes satisfechos, noticias positivas) para equilibrar la narrativa sin parecer que ignoramos el problema, y cómo medir si la crisis está remitiendo (los indicadores de que el volumen de menciones negativas está disminuyendo y el sentimiento se está recuperando).

7. POST-CRISIS: REPARAR LA REPUTACIÓN Y APRENDER
Una vez superada la crisis, ¿cómo reparar la reputación y evitar que vuelva a ocurrir? Dame el plan post-crisis: el análisis de las causas de la crisis (qué la generó y qué la amplificó), las acciones correctivas que deben comunicarse públicamente para cerrar el ciclo, la estrategia de contenido de recuperación de reputación a 90 días, y qué cambios en el protocolo de comunicación y en el sistema de monitorización deben implementarse para detectar antes la próxima crisis.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Activar y ejecutar el protocolo de gestión de crisis de comunicación para proteger la reputación de la marca en redes sociales.',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Incident response: cuando la producción cae a las 3am',
                'description'       => 'Gestiona un incidente de producción de forma efectiva: el protocolo de respuesta, la comunicación con los stakeholders y el postmortem que evita que vuelva a ocurrir.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en Site Reliability Engineering e incident management con experiencia en equipos de ingeniería que gestionan sistemas críticos en producción. Necesito tu ayuda para diseñar o mejorar el proceso de respuesta a incidentes de mi equipo.

Mi contexto:
- Tipo de sistema en producción: [SaaS web / API / plataforma de datos / sistema de pagos / otra]
- Gravedad del incidente que quiero gestionar o para el que quiero preparar el protocolo: [descripción del incidente o tipo de incidente más habitual]
- Estado actual del proceso de incident response: [sin proceso formal / proceso básico / proceso definido pero con problemas / proceso maduro que quiero mejorar]
- Tamaño del equipo de ingeniería y cobertura: [solo / equipo pequeño sin guardia / equipo con on-call rotation / equipo grande con SRE dedicado]
- Mayor problema en los incidentes actuales: [tardamos demasiado en detectar, la comunicación interna es caótica, no tenemos postmortem, los mismos incidentes se repiten, etc.]

Con ese contexto, dame:

1. EL SISTEMA DE DETECCIÓN Y ALERTAS
¿Cómo detectar un incidente antes de que los clientes lo reporten? Dame el diseño del sistema de monitorización y alertas: las métricas de golden signals que debo monitorizar (latencia, tráfico, errores y saturación según el modelo de SRE de Google), cómo configurar las alertas para que sean accionables (no demasiadas alertas que se ignoran, no pocas que dejan pasar incidentes), los umbrales de alerta por nivel de severidad y cómo asegurar que las alertas lleguen al responsable correcto a cualquier hora.

2. LOS PRIMEROS 15 MINUTOS: EL PROTOCOLO DE RESPUESTA INICIAL
¿Qué hace exactamente el ingeniero de guardia en los primeros 15 minutos de un incidente? Dame el runbook de respuesta inicial: los pasos de diagnóstico rápido para determinar el alcance del incidente (¿qué está caído?, ¿cuántos usuarios están afectados?, ¿es un problema de infra o de código?), la decisión de escalar (cuándo llamar a alguien más), la apertura del canal de comunicación del incidente (Slack, PagerDuty, etc.) y el primer status update interno.

3. ROLES EN EL INCIDENTE: INCIDENT COMMANDER Y COMUNICACIÓN CLARA
¿Cómo organizar los roles durante un incidente para que no haya confusión ni duplicación de esfuerzos? Dame el modelo de roles: el Incident Commander (IC) que coordina y toma decisiones, el Technical Lead que investiga la causa raíz, el Communications Lead que gestiona las comunicaciones internas y externas, y el Scribe que documenta la línea de tiempo. ¿Cuándo tiene sentido tener todos estos roles y cuándo un equipo pequeño debe combinarlos?

4. COMUNICACIÓN DURANTE EL INCIDENTE: STAKEHOLDERS Y CLIENTES
¿Cómo gestionar la comunicación durante un incidente sin que el equipo técnico pierda tiempo respondiendo preguntas? Dame la estrategia de comunicación de incidentes: el primer update a los stakeholders internos (cuándo enviarlo, qué información incluir y cuál no si aún no la tenemos), la comunicación pública a los clientes (cuándo publicar en la status page, qué decir cuando no sabemos la causa raíz todavía, con qué frecuencia actualizar), y el lenguaje correcto para comunicar un incidente sin minimizar el impacto ni generar pánico.

5. LA RESOLUCIÓN Y EL CIERRE DEL INCIDENTE
¿Cómo saber cuándo el incidente está resuelto y cómo cerrarlo correctamente? Dame el proceso de resolución: cómo confirmar que el sistema está funcionando correctamente antes de declarar el incidente resuelto (monitorización post-fix, validación con usuarios afectados), el mensaje de resolución para clientes y stakeholders, cómo hacer el handoff si el incidente cruza el turno de guardia, y la documentación mínima que hay que recopilar durante el incidente para el postmortem.

6. EL POSTMORTEM SIN CULPABLES
¿Cómo hacer un postmortem efectivo que genere aprendizajes reales sin convertirse en una sesión de señalamiento de culpables? Dame el formato del blameless postmortem: la línea de tiempo detallada del incidente, el análisis de causa raíz usando los 5 porqués o el fishbone, la identificación de los factores contribuyentes (no solo la causa inmediata, sino los factores sistémicos que lo hicieron posible), las acciones correctivas con propietario y fecha de implementación y cómo hacer seguimiento de que se implementan realmente.

7. MADUREZ EN INCIDENT RESPONSE: EL SIGUIENTE NIVEL
¿Cómo mejorar el proceso de incident response a medida que el equipo y el sistema crecen? Dame el modelo de madurez de incident response: qué prácticas implementar en cada fase (equipo de 2-5 personas, 5-20, más de 20), cuándo tiene sentido invertir en un sistema de on-call rotation formal, cómo hacer game days o chaos engineering para preparar al equipo para incidentes antes de que ocurran, y cómo medir la mejora del proceso con métricas como MTTR (Mean Time To Recovery) y frecuencia de incidentes recurrentes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar y ejecutar el proceso de incident response para gestionar fallos de producción de forma efectiva y aprender de cada incidente.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño en crisis: adaptar la marca en momentos difíciles',
                'description'       => 'Gestiona la identidad visual y la comunicación de diseño de una marca durante una crisis: qué cambiar, qué mantener y cómo el diseño puede contribuir a recuperar la confianza.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en diseño de marca y comunicación visual con experiencia en la gestión de la identidad de marca durante situaciones de crisis corporativa. Necesito tu ayuda para adaptar la comunicación visual y el diseño de mi marca durante un momento difícil sin perder la coherencia ni dañar más la imagen.

Mi contexto:
- Tipo de crisis que afecta a la marca: [crisis de reputación por redes sociales / crisis de producto / crisis económica que afecta a la empresa / crisis social o de valores / otra]
- Estado de la identidad de marca actual: [marca bien definida con guía de estilo / marca en proceso de construcción / marca consolidada pero desactualizada]
- Canales de comunicación principales afectados: [web, redes sociales, email marketing, punto de venta, packaging, materiales corporativos]
- Audiencia principal a la que debo comunicar durante la crisis: [clientes, empleados, inversores, medios, comunidad]
- Grado de urgencia: [necesito cambios inmediatos en las próximas 24 horas / tengo una semana para preparar la comunicación / es una crisis de largo plazo que requiere reposicionamiento]

Con ese contexto, dame:

1. QUÉ COMUNICA EL DISEÑO EN UNA CRISIS (ANTES DE CAMBIAR NADA)
Explícame cómo el diseño visual comunica actitudes y valores en momentos de crisis, a menudo sin que seamos conscientes. ¿Qué transmite el color, la tipografía, la fotografía elegida y el tono visual en un contexto de crisis? ¿Cuándo mantener el diseño habitual envía el mensaje equivocado y cuándo cambiarlo parece oportunismo o inconsistencia? Dame el marco para tomar la decisión de qué adaptar y qué mantener según el tipo de crisis.

2. ADAPTACIONES VISUALES INMEDIATAS DE BAJO COSTE
¿Qué cambios visuales puedo hacer en 24 horas para comunicar que la marca está respondiendo a la crisis de forma apropiada sin hacer cambios de identidad profundos? Dame la lista de adaptaciones visuales inmediatas: ajustes de paleta de color (reducir el uso de colores festivos o llamativos), ajustes en el tono fotográfico (imágenes más austeras, menos publicidad aspiracional), pausa de contenido programado que choca con el tono de la crisis, y ajustes en los mensajes de email automáticos que podrían sonar inapropiados en el contexto actual.

3. LOS MATERIALES DE COMUNICACIÓN DE CRISIS
¿Qué materiales visuales necesito diseñar para comunicar durante la crisis? Dame la lista de entregables de diseño de crisis y las especificaciones de cada uno: el template de comunicado oficial (jerarquía de texto, logo, espacios en blanco que transmiten seriedad), los banners y posts de redes sociales para comunicar el estado de la situación (tono sobrio, sin adornos, centrado en el mensaje), la actualización del diseño de la página de estado o crisis en la web, y el template de email de comunicación de crisis que no parezca una newsletter de marketing.

4. EL TONO VISUAL DURANTE LA RECUPERACIÓN
¿Cómo gestionar la transición visual de la crisis a la recuperación sin que parezca que hemos olvidado lo que ocurrió demasiado rápido? Dame la estrategia de comunicación visual por fases: la fase de reconocimiento (diseño austero, enfocado en el problema), la fase de acción (diseño que comunica que estamos actuando, más dinamismo pero sin recuperar el tono festivo), y la fase de recuperación (cómo volver gradualmente al tono habitual de la marca sin que el cliente sienta que la empresa pasó la página demasiado rápido).

5. CUÁNDO UNA CRISIS REQUIERE REBRANDING
¿Cuándo la crisis es tan grave que el diseño necesita un cambio más profundo (un rebranding parcial o total)? Dame los criterios para tomar la decisión de rebranding post-crisis: cuándo la identidad visual actual está tan asociada al escándalo que mantenerla es un lastre, cómo hacer un rebranding que sea genuino y no percibido como un intento de escapar de la responsabilidad, y el proceso para involucrar a los stakeholders clave (empleados, clientes, medios) en el proceso de rediseño para que tenga mayor credibilidad.

6. EL DISEÑO COMO HERRAMIENTA DE RECONSTRUCCIÓN DE CONFIANZA
¿Cómo usar el diseño de forma proactiva para reconstruir la confianza después de la crisis? Dame estrategias visuales de recuperación de reputación: el diseño de un informe de transparencia que comunique las acciones tomadas, el rediseño del espacio de comunicación con la comunidad (web, newsletter) para que refleje los nuevos valores que queremos demostrar, y cómo usar el diseño de los materiales de customer success y onboarding para que cada interacción post-crisis refuerce el mensaje de que la empresa ha cambiado para mejor.

7. GESTIÓN DEL EQUIPO DE DISEÑO DURANTE LA CRISIS
¿Cómo gestionar al equipo de diseño durante una crisis cuando hay urgencia, estrés y decisiones que cambian constantemente? Dame el proceso de gestión del equipo de diseño en crisis: cómo priorizar los entregables (lo que bloquea la comunicación primero, lo que puede esperar), cómo gestionar la revisión y aprobación de los materiales de forma rápida sin perder el control de calidad, y cómo proteger al equipo del burnout cuando la crisis se extiende durante semanas con demandas de diseño constantes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Adaptar la comunicación visual y el diseño de la marca durante una crisis para mantener la coherencia y contribuir a recuperar la confianza.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Ventas en recesión: mantener el pipeline cuando el mercado cae',
                'description'       => 'Adapta la estrategia comercial en un entorno económico adverso: cómo mantener el pipeline activo cuando los clientes congelan presupuestos, alargan los ciclos de decisión y buscan excusas para no comprar.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en estrategia de ventas con experiencia en la gestión de equipos comerciales durante crisis económicas y entornos de mercado adversos. Necesito tu ayuda para adaptar el proceso de venta y mantener el pipeline activo cuando el mercado está contrayéndose y los clientes están en modo de supervivencia.

Mi contexto:
- Tipo de producto o servicio que vendo: [describe brevemente]
- Segmento de clientes: [empresa pequeña / mediana / enterprise]
- Cómo está afectando la coyuntura económica a tus clientes: [congelación de presupuestos, despidos, reducción de inversión, búsqueda de recortes de coste]
- Estado actual del pipeline: [lleno pero sin cierres / vacío / mezcla de deals en riesgo]
- Principal comportamiento del cliente en este entorno: [pide más tiempo para decidir, busca descuentos agresivos, cancela reuniones, alarga el ciclo, sube el nivel de aprobación necesario para cerrar]

Con ese contexto, dame:

1. EL DIAGNÓSTICO DEL PIPELINE EN ENTORNO DE RECESIÓN
¿Cómo evaluar el estado real de mi pipeline cuando el mercado está adverso? Dame el proceso de pipeline review de crisis: cómo reclasificar las oportunidades según su probabilidad real de cierre en este entorno (no con los porcentajes del CRM que ya no son válidos), cómo identificar los deals que seguirán adelante (los que resuelven un problema crítico para el cliente), los que están en el limbo (los que resolvían un problema importante que ahora se puede posponer) y los que hay que dar por perdidos para liberar tiempo del equipo.

2. EL MENSAJE DE VENTAS EN RECESIÓN: DE BENEFICIOS A SUPERVIVENCIA
¿Cómo adaptar el discurso de ventas cuando el cliente está en modo de supervivencia? Dame el cambio de narrativa necesario: cómo reencuadrar el producto o servicio en términos de ahorro de costes, reducción de riesgo o generación de ingresos (las tres prioridades del cliente en recesión), cómo identificar cuál de los tres argumentos es más relevante para cada oportunidad del pipeline, y cómo hacer las preguntas de discovery que revelan si el problema que resuelvo sigue siendo prioritario o ha bajado en la agenda del cliente.

3. LOS DEALS QUE SOBREVIVEN EN RECESIÓN: CÓMO IDENTIFICARLOS
¿Qué características tienen los deals que siguen cerrándose aunque el mercado esté mal? Dame el perfil del deal resiliente en recesión: el cliente que tiene un problema que no puede posponer, el proyecto que ya tiene presupuesto aprobado antes de la crisis, el deal donde el coste de no actuar es mayor que el coste de comprar, y cómo reorientar el tiempo del equipo comercial hacia esas oportunidades y lejos de los deals que probablemente no cerrarán hasta que el mercado se recupere.

4. CÓMO MANEJAR LA CONGELACIÓN DE PRESUPUESTOS
¿Qué hacer cuando el champion interno me dice que el presupuesto está congelado? Dame el playbook de la congelación de presupuestos: cómo distinguir entre una congelación real (la decisión está en pausa por política de la empresa) y una excusa elegante para aplazar una decisión que no han tomado, qué preguntas hacer para entender cuándo y cómo se descongelará el presupuesto, cómo mantener la relación activa durante la pausa sin presionar y qué proponer al cliente para avanzar sin gastar presupuesto ahora (un piloto gratuito, una prueba de concepto, un acuerdo de intención).

5. EL DEAL SMALLER: CERRAR ALGO MÁS PEQUEÑO PARA NO PERDER AL CLIENTE
¿Cuándo tiene sentido proponer un deal más pequeño para no perder la oportunidad y entrar en la cuenta? Dame la estrategia del deal smaller: cuándo proponer una versión reducida del proyecto original (el módulo más crítico, el piloto pagado, el contrato de tres meses en lugar de un año), cómo presentar la propuesta reducida sin que parezca una rebaja de lo que el cliente necesita, y cómo estructurar el contrato para que el deal pequeño facilite la expansión cuando el mercado se recupere.

6. LA PROSPECCIÓN EN RECESIÓN: DÓNDE ENCONTRAR NUEVOS DEALS
¿Cómo generar nuevas oportunidades cuando el mercado está contrayéndose? Dame la estrategia de prospección en recesión: los sectores que siguen creciendo o que tienen menos restricciones presupuestarias en el entorno actual, cómo reactivar a los clientes perdidos de los últimos dos años (crisis que cambia las decisiones anteriores), cómo usar la base de clientes actuales para generar referidos (los clientes satisfechos son más generosos con las referencias cuando el mercado está difícil) y cómo posicionarse para ser el primero en la lista cuando el cliente retome el proceso de compra.

7. LA GESTIÓN DEL EQUIPO COMERCIAL EN RECESIÓN
¿Cómo mantener la motivación y el rendimiento del equipo comercial cuando el mercado está difícil y los cierres escasean? Dame el modelo de liderazgo comercial en recesión: cómo ajustar las cuotas y los objetivos para que sean alcanzables sin perder la exigencia, cómo cambiar los rituales del equipo (el pipeline review, el standup, el coaching individual) para el entorno adverso, y cómo identificar y retener a los mejores vendedores que serán los primeros en buscar nuevas oportunidades si el entorno se prolonga.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Adaptar la estrategia comercial para mantener el pipeline activo y seguir cerrando deals en un entorno económico adverso.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product crisis: cuando el producto falla y los usuarios se van',
                'description'       => 'Gestiona una crisis de producto cuando el churn se dispara, la satisfacción cae y el negocio está en riesgo: el diagnóstico rápido, las acciones inmediatas y el plan de recuperación.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en product management de crisis con experiencia en la gestión de situaciones donde el producto ha fallado de forma significativa y el negocio está bajo presión. Necesito tu ayuda para gestionar una crisis de producto: cuando el churn se acelera, los usuarios se van y hay que actuar rápido.

Mi contexto:
- Descripción de la crisis de producto: [qué ha fallado: un bug crítico que afecta la funcionalidad core, un cambio de producto que ha generado rechazo masivo, un competidor que ha lanzado algo que nos hace obsoletos, una caída en la adopción sin causa aparente, etc.]
- Magnitud de la crisis: [número de usuarios afectados, impacto en las métricas clave, presión de stakeholders e inversores]
- Tiempo desde que se detectó el problema: [horas, días, semanas]
- Recursos disponibles del equipo de producto: [tamaño del equipo, capacidad para actuar rápido]
- Decisiones ya tomadas si las hay: [qué se ha hecho ya para intentar resolver el problema]

Con ese contexto, dame:

1. DIAGNÓSTICO RÁPIDO: ENTENDER EL PROBLEMA ANTES DE ACTUAR
¿Cómo diagnosticar la crisis de producto en las primeras 24 horas para no tomar medidas que empeoren la situación? Dame el proceso de diagnóstico de crisis: las preguntas que hay que responder antes de actuar (¿es un problema técnico o de producto?, ¿afecta a todos los usuarios o a un segmento?, ¿es un problema de la experiencia del producto o de la propuesta de valor?), las métricas de diagnóstico que hay que revisar de forma urgente (churn rate en tiempo real, drop en activación, caída en DAU/MAU, NPS de las últimas semanas, tickets de soporte por categoría) y cómo distinguir entre una crisis real y una señal puntual que parece una crisis.

2. COMUNICACIÓN INTERNA DURANTE LA CRISIS DE PRODUCTO
¿Cómo gestionar la comunicación interna cuando el producto está en crisis y todos los departamentos (ventas, CS, soporte, dirección) están haciendo preguntas al mismo tiempo? Dame el protocolo de comunicación interna de crisis de producto: el war room (quién debe estar, con qué frecuencia reunirse), los updates internos (qué información compartir, en qué formato y con qué frecuencia), cómo gestionar la presión del CEO o de los inversores que quieren respuestas inmediatas cuando aún no las tenemos y cómo alinear a ventas y CS con el mensaje que pueden comunicar a los clientes.

3. LA RESPUESTA A LOS USUARIOS AFECTADOS
¿Cómo comunicar a los usuarios que el producto ha fallado y qué estamos haciendo? Dame la estrategia de comunicación con usuarios en crisis de producto: el mensaje de reconocimiento del problema (qué decir cuando aún no tenemos la solución), la frecuencia de los updates de estado, cómo personalizar la comunicación según el nivel de impacto que ha sufrido cada usuario (los más afectados necesitan comunicación directa, no solo un email masivo), y qué compensación o gesto ofrecer a los usuarios afectados para mantener la relación.

4. PRIORIZACIÓN DE EMERGENCIA: QUÉ CONSTRUIR O ARREGLAR PRIMERO
¿Cómo priorizar el trabajo del equipo de producto en modo crisis cuando todo parece urgente? Dame el proceso de emergency prioritization: cómo identificar el problema raíz vs los síntomas (arreglar los síntomas da la sensación de avance pero no resuelve la crisis), cómo decidir entre arreglar el bug crítico vs revertir el cambio de producto vs construir una funcionalidad que retenga a los usuarios que se van, y cómo gestionar el tradeoff entre velocidad de respuesta y calidad de la solución en un momento en que ambas son críticas.

5. EL PLAN DE RETENCIÓN DE EMERGENCIA
¿Cómo retener a los usuarios que están en proceso de abandono mientras se resuelve la crisis? Dame el plan de retención de emergencia: cómo identificar a los usuarios en riesgo inmediato (señales de comportamiento que indican intención de cancelar), qué intervenciones activar de forma inmediata (llamadas proactivas del equipo de CS, oferta de extensión temporal, acceso a soporte prioritario), y cómo medir si las intervenciones están funcionando o si el churn sigue acelerándose.

6. EL PIVOTE O EL ROLLBACK: CUÁNDO DAR MARCHA ATRÁS
¿Cuándo es correcto hacer un rollback de un cambio de producto que ha generado rechazo masivo? Dame el proceso de decisión: los criterios para decidir entre arreglar el diseño o la funcionalidad, hacer un rollback completo o parcial, o mantener el cambio y trabajar en la adopción, cómo comunicar el rollback a los usuarios para que no genere más desconfianza (el mensaje de "habéis ganado" es igual de dañino que no escuchar), y cómo aprender del proceso para que el siguiente cambio de producto no genere la misma crisis.

7. EL PLAN DE RECUPERACIÓN A 90 DÍAS
Una vez superada la crisis inmediata, ¿cómo construir el plan de recuperación del producto a 90 días? Dame la estructura del recovery plan: las métricas de recuperación que hay que monitorizar (recuperación del churn a niveles anteriores a la crisis, recuperación del NPS, reactivación de usuarios que se fueron), las iniciativas de producto que generarán confianza y demostrarán que hemos aprendido, la comunicación con usuarios y stakeholders durante la recuperación, y cómo saber cuándo el producto y el equipo han superado realmente la crisis.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Gestionar una crisis de producto cuando el churn se dispara, diagnosticar el problema y ejecutar el plan de recuperación.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de crisis de talento: despidos, reestructuraciones y comunicación',
                'description'       => 'Gestiona los momentos más difíciles de un equipo: los despidos individuales, las reestructuraciones masivas y la comunicación que mantiene la confianza del equipo que se queda.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en gestión de personas con experiencia en la gestión de situaciones de crisis de talento: despidos individuales, reestructuraciones organizativas y gestión del impacto en el equipo que permanece. Necesito tu ayuda para gestionar esta situación de la forma más humana y efectiva posible.

Mi contexto:
- Tipo de crisis de talento: [despido individual por bajo rendimiento / despido disciplinario / reestructuración por reducción de costes / cierre de un departamento / downsizing masivo por cambio de modelo de negocio]
- Número de personas afectadas: [una persona / un equipo / múltiples departamentos]
- Causa de la reestructuración: [recorte de costes, cambio estratégico, pérdida de financiación, fusión o adquisición, etc.]
- Estado legal y de RRHH: [¿tengo asesoramiento jurídico-laboral ya en marcha? / ¿cuál es el marco legal aplicable?]
- Mayor preocupación: [el impacto en las personas afectadas / gestionar al equipo superviviente / el riesgo legal / mantener la productividad durante la transición]

Con ese contexto, dame:

1. LA DECISIÓN DE REESTRUCTURACIÓN: PROCESO Y CRITERIOS
¿Cómo tomar la decisión de qué roles y personas incluir en una reestructuración de forma que sea objetiva, documentada y defensible? Dame el proceso de decisión: los criterios objetivos para la selección (impacto del rol en el negocio, desempeño documentado, redundancia de funciones, coste), cómo documentar el proceso de decisión para que sea auditable en caso de reclamación legal, y qué errores evitar que conviertan una reestructuración necesaria en un riesgo legal o reputacional.

2. LA COMUNICACIÓN CON LAS PERSONAS AFECTADAS
¿Cómo comunicar un despido o una salida a la persona afectada de forma honesta, humana y legalmente correcta? Dame el protocolo de la conversación de despido: la preparación previa (qué decir, qué documentos tener listos, quién debe estar presente), la estructura de la conversación (no más de 30 minutos, el mensaje claro desde el primer minuto, sin rodeos que generen falsas esperanzas), cómo manejar las reacciones emocionales del empleado (llanto, ira, negación) y qué no decir nunca en una conversación de despido que pueda crear un riesgo legal adicional.

3. EL PAQUETE DE SALIDA Y EL PROCESO DE OFFBOARDING
¿Cómo diseñar el paquete de salida y el proceso de offboarding que sea justo para el empleado y proteja a la empresa? Dame el marco: los componentes del paquete de salida (indemnización, extensión de beneficios, outplacement, carta de recomendación), cómo negociar el acuerdo de salida con el empleado, el proceso de offboarding (devolución de equipos, transferencia de conocimiento, acceso a sistemas) y cómo mantener la dignidad del empleado durante el proceso de salida.

4. COMUNICAR LA REESTRUCTURACIÓN AL EQUIPO QUE SE QUEDA
¿Cómo comunicar la reestructuración al resto del equipo para minimizar el daño en la moral y la productividad? Dame la estrategia de comunicación interna post-reestructuración: cuándo y cómo comunicar (antes de que corra el rumor, con transparencia sobre las razones), qué nivel de detalle compartir (las razones del negocio sí, los detalles individuales de las salidas no), cómo responder a las preguntas difíciles del equipo (¿habrá más despidos?, ¿mi puesto está seguro?), y el mensaje del CEO o del manager directo que reconoce el dolor sin minimizarlo.

5. EL SÍNDROME DEL SUPERVIVIENTE: GESTIONAR AL EQUIPO QUE SE QUEDA
¿Cómo gestionar el impacto en la moral y el compromiso del equipo que permanece después de una reestructuración? Dame el plan de gestión del síndrome del superviviente: los síntomas que hay que monitorizar (caída en la productividad, aumento del absentismo, conversaciones de salida en el equipo que se quedó), las acciones que generan confianza en las primeras semanas (claridad sobre el futuro, reconocimiento del esfuerzo adicional que el equipo asume, presencia cercana del liderazgo), y cómo medir si el equipo está recuperando la estabilidad o si el impacto es más profundo de lo esperado.

6. EL RIESGO LEGAL DE LAS REESTRUCTURACIONES
¿Cuáles son los principales riesgos legales de una reestructuración mal gestionada? Dame el marco de riesgos: los errores más comunes que convierten un despido procedente en improcedente, las obligaciones de consulta con la representación de los trabajadores en reestructuraciones colectivas (ERE, ERTE, según la legislación aplicable), cómo documentar el proceso para que sea defendible en un juicio y cuándo es imprescindible contar con asesoramiento jurídico externo antes de ejecutar ninguna comunicación.

7. LA RECONSTRUCCIÓN CULTURAL POST-REESTRUCTURACIÓN
¿Cómo reconstruir la cultura y el compromiso del equipo en los meses siguientes a una reestructuración? Dame el plan de recuperación cultural: las acciones a corto plazo (en las primeras cuatro semanas), las acciones a medio plazo (en los tres meses siguientes) y los indicadores que señalan que el equipo está recuperando la confianza en el liderazgo y en el futuro de la empresa. ¿Cuánto tiempo tarda normalmente una organización en recuperar el nivel de compromiso anterior a una reestructuración significativa?
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Gestionar una reestructuración o despidos de forma humana, legal y efectiva, preservando la confianza del equipo que permanece.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Crisis financiera corporativa: gestionar la tesorería bajo presión',
                'description'       => 'Gestiona una crisis de liquidez o de tesorería corporativa: las acciones inmediatas para ganar tiempo, la negociación con bancos y proveedores y el plan de viabilidad que necesitas para salir adelante.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en reestructuración financiera y gestión de crisis de tesorería corporativa con experiencia en empresas que han atravesado situaciones de tensión financiera severa. Necesito tu ayuda para gestionar una crisis de liquidez y diseñar el plan de acción financiero para recuperar la estabilidad.

Mi contexto:
- Descripción de la situación financiera: [falta de liquidez inmediata / pérdidas acumuladas que han erosionado el patrimonio / deuda excesiva que no se puede servir / pérdida de un cliente principal que representa X% de los ingresos / otra]
- Horizonte de la crisis: [tenemos cash para X semanas o meses / ya hay impagos a proveedores / ya hay retraso en las nóminas / estamos en negociación con el banco]
- Activos disponibles: [inmuebles, maquinaria, cartera de clientes, IPs, otros activos que podrían liquidarse o usarse como garantía]
- Estado de la deuda bancaria: [sin deuda bancaria / deuda bancaria que estamos sirviendo / deuda bancaria en riesgo de impago / ya hemos incumplido covenants]
- Opciones que ya hemos explorado o descartado: [menciona si ya has hablado con el banco, con los accionistas, con potenciales inversores]

Con ese contexto, dame:

1. LAS PRIMERAS 48 HORAS: EL MAPA DE LA SITUACIÓN
¿Qué hacer en las primeras 48 horas cuando se detecta que la empresa tiene una crisis de liquidez? Dame el proceso de diagnóstico de urgencia: el cash flow de las próximas cuatro semanas (los pagos que no pueden demorarse y los que sí), la lista de deudas por vencimiento y prioridad (nóminas, seguridad social, proveedores críticos vs no críticos, deuda bancaria), los activos líquidos o liquidables a corto plazo y la identificación de las fuentes de caja inmediatas que existen (cobros pendientes de clientes, líneas de crédito no dispuestas, stock liquidable).

2. GESTIÓN DE TESORERÍA DE EMERGENCIA
¿Cómo extender el runway cuando la empresa tiene una crisis de liquidez? Dame las medidas de gestión de tesorería de emergencia: la aceleración del cobro de clientes (cómo pedir el pago anticipado sin dañar la relación, los descuentos por pronto pago que tienen sentido matemático), el aplazamiento negociado de pagos a proveedores (cómo hacerlo manteniendo la relación), la reducción inmediata de gastos no críticos (qué se puede cortar en 24 horas sin impacto en las operaciones) y la identificación de los gastos que no se pueden cortar aunque la situación sea crítica.

3. LA NEGOCIACIÓN CON LA BANCA
¿Cómo negociar con los bancos cuando la empresa está en dificultades para no perder el apoyo bancario en el peor momento? Dame el protocolo de negociación bancaria en crisis: cuándo y cómo comunicar la situación al banco (antes del impago, con proactividad, con un plan), qué información llevar a la reunión con el banco (cash flow proyectado, plan de negocio, activos disponibles como garantía), qué herramientas bancarias pedir (carencia de principal, refinanciación, nueva línea de crédito con garantía ICO o similar) y cómo gestionar la situación cuando hay varios bancos con posiciones distintas.

4. REESTRUCTURACIÓN DE LA DEUDA CON PROVEEDORES
¿Cómo negociar con los proveedores cuando hay impagos o riesgo de impago? Dame el proceso de reestructuración de deuda comercial: cómo priorizar qué proveedores contactar primero (los críticos para la operación antes que los prescindibles), el mensaje honesto que preserva la relación y da confianza en el plan de recuperación, qué ofrecer a los proveedores que acepten aplazar (pago en cuotas, garantía personal, participación en los beneficios futuros) y cómo gestionar a los proveedores que no están dispuestos a negociar y amenazan con acciones legales.

5. EL PLAN DE VIABILIDAD: DEMOSTRAR QUE EL NEGOCIO TIENE FUTURO
¿Qué debe contener el plan de viabilidad que hay que presentar a bancos, inversores y acreedores para conseguir su apoyo? Dame la estructura del plan de viabilidad en una crisis financiera: el diagnóstico honesto de las causas de la crisis (sin excusas), el modelo de negocio revisado que demuestra que la empresa puede ser rentable, las proyecciones de cash flow a 12 y 24 meses con hipótesis conservadoras y optimistas, las medidas de reestructuración operativa (reducción de costes fijos, cambios en el modelo de ingresos), y los hitos de recuperación que el acreedor o inversor puede monitorizar.

6. OPCIONES EXTRAORDINARIAS: CUANDO LAS MEDIDAS ORDINARIAS NO SON SUFICIENTES
¿Qué opciones tienen las empresas cuando las medidas de gestión ordinaria no son suficientes para resolver la crisis? Dame el mapa de opciones extraordinarias: la venta de activos no estratégicos, la ampliación de capital de emergencia (los inversores existentes y los nuevos), la búsqueda de un socio industrial o inversor estratégico, los mecanismos concursales preventivos (el acuerdo extrajudicial de pagos, el preconcurso, la comunicación al juzgado del artículo 5 bis en España) y cuándo tiene sentido considerar el concurso de acreedores como opción ordenada frente al caos de la insolvencia desordenada.

7. COMUNICACIÓN DE LA CRISIS A LOS STAKEHOLDERS INTERNOS Y EXTERNOS
¿Cómo gestionar la comunicación de la crisis financiera a empleados, clientes, proveedores y medios? Dame el protocolo de comunicación de crisis financiera: qué decir a los empleados (cuándo, con qué nivel de detalle, cómo gestionar el miedo y la incertidumbre), qué comunicar a los clientes estratégicos (cómo asegurarles que el servicio continuará sin que huyan antes de que podamos recuperarnos), y cuándo y cómo comunicar a los medios si la crisis se filtra o si la empresa es suficientemente conocida para que tenga impacto reputacional.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Gestionar una crisis de liquidez corporativa con acciones inmediatas de tesorería, negociación con bancos y construcción del plan de viabilidad.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Gestión jurídica de crisis: proteger a la empresa cuando todo va mal',
                'description'       => 'Activa el protocolo legal cuando la empresa enfrenta una crisis: investigación interna, preservación de evidencias, gestión de las autoridades y protección de los intereses corporativos.',
                'prompt_content'    => <<<'PROMPT'
Eres un abogado de empresa especializado en gestión de crisis corporativas con experiencia en situaciones donde la empresa está bajo presión legal, regulatoria o de responsabilidad civil. Necesito tu ayuda para activar el protocolo jurídico correcto y proteger a la empresa en una situación de crisis.

Mi contexto:
- Tipo de crisis legal: [acusación de fraude o irregularidad contable / accidente laboral o de producto / violación de datos o ciberataque / disputa con un socio o accionista / investigación regulatoria / demanda colectiva de clientes / otra]
- Quién está involucrado: [empleados, directivos, clientes, proveedores, administración pública, medios]
- Estado de la crisis: [acaba de ocurrir el hecho desencadenante / ya hay una denuncia o demanda / estamos siendo investigados / hay cobertura mediática]
- Recursos legales disponibles: [asesor jurídico interno / despacho externo / sin asesoramiento previo]
- Prioridad principal: [limitar la responsabilidad penal / proteger la imagen de la empresa / preservar la relación con los reguladores / minimizar el impacto económico]

Con ese contexto, dame:

1. LAS PRIMERAS HORAS: QUÉ HACER Y QUÉ NO HACER
¿Cuáles son las acciones más críticas en las primeras horas de una crisis legal y cuáles son los errores más frecuentes que empeoran la situación? Dame el protocolo de las primeras horas: el equipo de gestión de crisis legal que debe activarse (abogado interno, abogado externo especializado, dirección, comunicación), las acciones inmediatas de preservación de evidencias (qué documentos y comunicaciones hay que asegurar antes de que desaparezcan o sean manipulados), y los errores que no se deben cometer nunca en las primeras horas de una crisis legal (destruir documentos, hacer declaraciones públicas sin asesoramiento, contactar directamente con la contraparte sin mediación legal).

2. LA INVESTIGACIÓN INTERNA: ENTENDER LO QUE HA OCURRIDO
¿Cómo realizar una investigación interna cuando hay una crisis legal que puede involucrar a empleados o directivos de la empresa? Dame el diseño de la investigación interna: quién debe liderarla (abogado externo independiente para garantizar la privilegio legal de los documentos generados), cómo preservar la confidencialidad de la investigación (attorney-client privilege), el proceso de entrevistas con los involucrados (los derechos del empleado entrevistado, las Miranda warnings corporativas), y cómo documentar los hallazgos de forma que sean útiles para la defensa y no para la acusación.

3. GESTIÓN DE LAS AUTORIDADES Y REGULADORES
¿Cómo gestionar la relación con las autoridades (fiscalía, CNMV, AEPD, inspección de trabajo, etc.) cuando la empresa está bajo investigación? Dame el protocolo de relación con las autoridades: cuándo y cómo cooperar voluntariamente con la investigación (la cooperación proactiva suele reducir las sanciones pero implica admitir hechos), cuándo es correcto no colaborar más allá de lo legalmente obligatorio, cómo gestionar los registros e inspecciones (qué documentos tienen que entregar obligatoriamente y cuáles están protegidos por el privilegio profesional), y cómo mantener una relación constructiva con el regulador sin perjudicar la defensa.

4. PROTECCIÓN DE DIRECTIVOS Y EMPLEADOS: RESPONSABILIDAD PERSONAL
¿Cuándo la crisis de la empresa puede derivar en responsabilidad personal de directivos o empleados? Dame el mapa de la responsabilidad personal en crisis corporativas: los supuestos en que el administrador o el directivo puede ser personalmente responsable (penal, civil o administrativa), cómo proteger a los directivos con seguros D&O (Directors & Officers), cómo gestionar los conflictos de interés cuando el abogado de la empresa no puede representar también al directivo individualmente, y cuándo el directivo necesita un abogado propio independiente del de la empresa.

5. GESTIÓN DE LA RESPONSABILIDAD CON TERCEROS AFECTADOS
¿Cómo gestionar la relación legal con los terceros afectados por la crisis (clientes, trabajadores, socios, proveedores)? Dame el proceso de gestión de las reclamaciones de terceros: cuándo es más inteligente llegar a un acuerdo extrajudicial que litigar (el análisis coste-beneficio de cada opción), cómo negociar los acuerdos de indemnización sin que impliquen un reconocimiento de responsabilidad que genere un efecto dominó, y cómo diseñar el programa de compensación a los afectados que sea justo, legal y sostenible para la empresa.

6. COMPLIANCE POST-CRISIS: CÓMO DEMOSTRAR QUE LA EMPRESA HA CAMBIADO
¿Cómo implementar las medidas de compliance que demuestren a reguladores, clientes y mercado que la empresa ha aprendido de la crisis? Dame el diseño del programa de remediation: la auditoría de los controles que fallaron, los cambios en los procesos y las políticas que se compromete a implementar, la formación del equipo, el sistema de reporte y el canal de denuncias (whistleblowing), y cómo comunicar el programa de remediation de forma creíble a los stakeholders sin que parezca un ejercicio de relaciones públicas.

7. EL COSTE DE LA CRISIS LEGAL: PROVISIONES Y GESTIÓN DEL IMPACTO ECONÓMICO
¿Cómo estimar y gestionar el impacto económico de una crisis legal en el balance y en la cuenta de resultados? Dame el marco de gestión financiera de la crisis legal: cómo calcular las provisiones que hay que registrar según las normas contables (el criterio de probabilidad y estimabilidad del NIC 37), cómo comunicar las contingencias legales a los inversores y en los estados financieros, y cómo gestionar el coste de los honorarios legales durante una crisis que puede durar meses o años sin que el gasto sea desproporcionado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Activar el protocolo jurídico correcto para proteger a la empresa en una crisis legal, gestionar investigaciones internas y minimizar la responsabilidad.',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Churn crisis: cuando el cliente decide irse y hay que retenerlo',
                'description'       => 'Activa el protocolo de retención de emergencia cuando un cliente importante notifica su cancelación: las conversaciones que retienen, las concesiones que tienen sentido y el análisis que evita el próximo churn.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en Customer Success con amplia experiencia en la gestión de situaciones de churn inminente en empresas SaaS y de servicios recurrentes. Necesito tu ayuda para gestionar una crisis de churn: cuando un cliente importante acaba de notificar que quiere cancelar y necesito activar el mejor proceso de retención posible.

Mi contexto:
- Tipo de cliente que quiere cancelar: [tamaño de la cuenta en ARR, tiempo como cliente, nivel de uso actual del producto]
- Motivo declarado de la cancelación: [lo que ha dicho el cliente: precio, competidor, falta de funcionalidad, cambio interno, resultado del producto insuficiente, etc.]
- Historial de la relación: [ha habido incidentes previos, quejas sin resolver, cambio de champion, etc.]
- Quién ha comunicado la cancelación: [el champion, un nuevo directivo, el equipo de compras, el CEO del cliente]
- Estado emocional de la relación: [se ha deteriorado / era buena hasta ahora / siempre ha sido transaccional]

Con ese contexto, dame:

1. LOS PRIMEROS 30 MINUTOS: QUÉ HACER CUANDO LLEGA LA NOTICIA
¿Qué hacer en los primeros 30 minutos después de recibir la notificación de cancelación? Dame el protocolo de activación de retención: la evaluación rápida del valor de la cuenta y la probabilidad real de retención (¿merece el esfuerzo de retención o es un cliente que mejor que se vaya?), la investigación urgente en los datos de uso y en el historial de la cuenta antes de hacer ninguna llamada, la decisión sobre quién debe liderar la conversación de retención (el CSM, el manager, el CEO si la cuenta es suficientemente grande) y el tiempo máximo que tengo antes de contactar con el cliente.

2. LA CONVERSACIÓN DE DIAGNÓSTICO: ENTENDER EL MOTIVO REAL
¿Cómo hacer la conversación de diagnóstico con el cliente para entender el motivo real de la cancelación, que no siempre es el mismo que el motivo declarado? Dame el proceso de la conversación de discovery de churn: las preguntas que abren al cliente a hablar honestamente (sin defensividad, sin presionar), cómo distinguir el churn por insatisfacción con el producto o el servicio del churn por razones externas a nuestra relación (recorte de presupuesto, cambio estratégico, adquisición), las señales que indican que hay posibilidad real de revertir la decisión y las que indican que el cliente ya decidió y la conversación es solo una formalidad.

3. EL ARGUMENTO DE RETENCIÓN: QUÉ DECIR PARA REVERTIR LA DECISIÓN
¿Cómo construir el argumento de retención que sea convincente para este cliente concreto? Dame la estrategia de retención personalizada: cómo anclar el argumento en el valor que el cliente ha obtenido (datos de uso, ROI calculado, logros alcanzados con el producto), cómo abordar el motivo específico de la cancelación con propuestas concretas (si es precio: alternativas de packaging / si es funcionalidad: roadmap comprometido / si es competidor: análisis comparativo honesto), y cómo presentar la propuesta de retención de forma que el cliente sienta que la decisión de quedarse es suya y no una capitulación ante la presión del vendor.

4. LAS CONCESIONES QUE TIENEN SENTIDO Y LAS QUE NO
¿Qué concesiones puedo hacer para retener al cliente y cuáles son demasiado costosas o crean precedentes negativos? Dame el marco de concesiones de retención: las concesiones de alto valor percibido y bajo coste real (acceso anticipado a features del roadmap, sesión de estrategia con el CEO o el CPO, resources adicionales de onboarding, integración prioritaria), las concesiones de precio que pueden tener sentido (descuento temporal a cambio de renovación anual, nueva estructura de pricing si el uso ha bajado) y las concesiones que nunca debes hacer (bajar el precio permanentemente sin justificación, prometer funcionalidades que no están en el roadmap, ignorar el problema que causó el churn a cambio de la renovación).

5. CUANDO EL CLIENTE QUIERE IRSE DE TODOS MODOS
¿Cómo gestionar la salida del cliente cuando la retención no es posible o no es la decisión correcta? Dame el playbook de la salida gestionada: cómo hacer que el proceso de cancelación sea tan digno como el proceso de onboarding (el cliente que sale bien puede volver o referir), qué información obtener en el exit interview que sea útil para mejorar el producto y el proceso de CS, cómo mantener la relación personal con el champion del cliente aunque se vaya (puede ser el próximo cliente en su nueva empresa), y cómo comunicar internamente el churn para que sea una señal de mejora y no solo un número negativo.

6. EL ANÁLISIS DE CAUSA RAÍZ DEL CHURN
¿Cómo hacer el análisis de causa raíz de este churn para prevenir el siguiente? Dame el proceso de churn root cause analysis: el análisis de las señales que estaban en los datos antes de la cancelación y que no detectamos a tiempo (caída en el uso, cambio en el perfil del usuario, ausencia en los últimos check-ins), las causas sistémicas vs las causas específicas de esta cuenta (¿es un problema de producto, de proceso de CS, de segmento de cliente o de expectativas mal gestionadas en el onboarding?), y las acciones concretas que hay que tomar para prevenir el mismo churn en las cinco cuentas más similares a esta.

7. EL PROGRAMA PROACTIVO ANTI-CHURN
¿Cómo implementar un programa proactivo de prevención del churn para que la próxima crisis se detecte antes de que el cliente tome la decisión de irse? Dame el diseño del churn prevention program: el sistema de health scoring que detecta el riesgo de churn 60 o 90 días antes de la cancelación, los playbooks de intervención por tipo de riesgo (bajo uso, cambio de champion, queja sin resolver, silencio prolongado), la cadencia de los QBRs y check-ins que mantienen la relación activa y detectan los problemas antes de que se conviertan en decisiones de cancelación, y cómo medir si el programa proactivo está reduciendo el churn en los segmentos donde se ha implementado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Gestionar la retención de emergencia cuando un cliente notifica su cancelación y establecer el sistema proactivo que previene el próximo churn.',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Crisis del freelance: cuando pierdes tu cliente principal',
                'description'       => 'Gestiona la crisis más temida del freelance: perder el cliente que representa el 50% o más de tus ingresos, con un plan de emergencia, recuperación y diversificación para no volver a depender de uno solo.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de negocio especializado en profesionales freelance e independientes con experiencia en la gestión de situaciones de crisis de ingresos. Necesito tu ayuda para gestionar la crisis de perder mi cliente principal y construir el plan de recuperación para estabilizar mi negocio freelance.

Mi contexto:
- Perfil del cliente que acabo de perder o que estoy a punto de perder: [tipo de empresa, ingresos que representaba, tiempo que llevábamos trabajando juntos]
- Porcentaje de mis ingresos que representaba: [aproximado]
- Causa de la pérdida: [recorte de presupuesto del cliente / cambio de dirección / fin natural del proyecto / problema en la relación / competidor más barato]
- Estado actual del resto de mi cartera: [otros clientes activos, proyectos en negociación, pipeline de nuevos clientes]
- Runway actual: [meses de gastos que tengo cubiertos con el ahorro disponible]

Con ese contexto, dame:

1. LAS PRIMERAS 48 HORAS: EL DIAGNÓSTICO DE EMERGENCIA
¿Qué hacer en las primeras 48 horas después de perder o saber que vas a perder tu cliente principal? Dame el proceso de diagnóstico de emergencia: el cálculo del impacto real (cuándo se cortan exactamente los ingresos, cuánto runway tengo realmente), la revisión de los gastos fijos que se pueden reducir de forma inmediata, la evaluación del pipeline actual (qué oportunidades en curso pueden acelerarse para compensar el hueco), y el inventario de los recursos disponibles para capear la crisis (ahorro, líneas de crédito, servicios que puedo adelantar a clientes existentes).

2. ACTIVAR EL MODO DE EMERGENCIA: REDUCIR EL GASTO ANTES DE BUSCAR INGRESOS
¿Cuáles son los gastos del negocio freelance que debo cortar o reducir de forma inmediata cuando hay una crisis de ingresos? Dame la lista priorizada de ajustes de gasto: los que se pueden eliminar hoy sin impacto en la capacidad de trabajo (suscripciones no críticas, gastos de marketing que no generan leads), los que se pueden renegociar (alquiler de espacio de trabajo, servicios externos), y los gastos que nunca debes cortar aunque estés en crisis porque son los que te permiten conseguir nuevos clientes (las herramientas de trabajo esenciales, la presencia online mínima).

3. LA REACTIVACIÓN RÁPIDA: CLIENTES ANTERIORES Y LEADS EN CALIENTE
¿Cómo generar ingresos en el menor tiempo posible cuando la crisis ya está encima? Dame la estrategia de reactivación rápida: cómo contactar a los ex clientes con los que terminé bien para ofrecerles un proyecto puntual o retomar la relación, cómo acelerar los leads que están en el pipeline (qué oferta o condición puede hacer que decidan ahora), cómo ofrecer un servicio de valor claro a mi red de contactos profesionales que puede generar trabajo a corto plazo, y qué plataformas de proyectos freelance pueden dar ingresos mientras reconstruyo el pipeline principal.

4. EL PLAN DE CAPTACIÓN DE EMERGENCIA A 60 DÍAS
¿Cómo activar una campaña de captación de nuevos clientes de forma urgente cuando normalmente confío en el boca a boca? Dame el plan de captación de 60 días: la propuesta de valor que comunico en este momento (clara, específica, orientada al resultado), los canales donde mi perfil de cliente ideal está presente y puedo llegar a él rápido (LinkedIn, eventos del sector, comunidades online, socios de referencia), y cómo hacer las primeras 20 conversaciones en las próximas dos semanas para entender qué propuesta resuena.

5. CÓMO NEGOCIAR CON LOS CLIENTES ACTUALES UN ADELANTO O UN PROYECTO ADICIONAL
¿Cómo hablar con mis clientes actuales para ver si hay oportunidad de más trabajo sin que parezca que estoy desesperado? Dame el enfoque correcto para la conversación con clientes actuales en busca de más trabajo: cómo presentar una propuesta de nuevo proyecto frente a los resultados del trabajo actual, cómo hacer la pregunta sobre sus necesidades futuras de forma que el cliente sienta que le estoy aportando valor y no que le estoy pidiendo un favor, y cuándo y cómo es apropiado ofrecer una tarifa especial a un cliente actual a cambio de volumen o de contrato adelantado.

6. LA CONVERSACIÓN CON EL CLIENTE QUE SE VA: APRENDIZAJE Y PUERTA ABIERTA
¿Cómo gestionar la salida del cliente principal para dejar la puerta abierta y extraer el máximo aprendizaje? Dame el proceso del exit: la conversación de salida que mantiene la relación aunque no el contrato (las preguntas que debo hacer para entender la decisión real), el offboarding que deja una impresión excelente (entrega cuidadosa, documentación del trabajo, disponibilidad para la transición), cómo pedir una referencia o un testimonio en el momento del cierre, y cómo mantener la relación personal con los contactos dentro de esa empresa para que piensen en mí cuando vuelva a haber oportunidad.

7. EL PLAN DE ANTI-FRAGILIDAD: NUNCA VOLVER A DEPENDER DE UN SOLO CLIENTE
Una vez superada la crisis, ¿cómo construir un negocio freelance que no pueda ser destruido por la pérdida de un cliente? Dame el plan de diversificación y anti-fragilidad: la regla del porcentaje máximo por cliente (ningún cliente debe superar el 30-40% de los ingresos), cómo construir un pipeline siempre activo aunque tengas trabajo más que suficiente, las estrategias de ingresos pasivos o semi-pasivos que complementan el trabajo por proyecto (formación, productos digitales, retainers de consultoría), y el nivel de ahorro de emergencia que un freelance debe mantener para capear la pérdida de su cliente principal sin entrar en crisis.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Gestionar la crisis de ingresos tras perder el cliente principal y construir el plan de diversificación para no volver a depender de uno solo.',
                'vote_score'        => 50,
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
