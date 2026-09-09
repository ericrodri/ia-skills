<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills273Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing team remoto: coordinación, creatividad y cultura a distancia',
                'description'       => 'Aprende a liderar y coordinar un equipo de marketing distribuido manteniendo la alineación estratégica, la calidad creativa y la cohesión cultural sin depender de la proximidad física.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de marketing con experiencia liderando equipos distribuidos en múltiples zonas horarias. Los equipos de marketing remotos tienen desafíos específicos que los diferencian de otros equipos distribuidos: la creatividad colaborativa se ve afectada por la ausencia de sesiones de trabajo presenciales espontáneas, la alineación de mensajes y tono de voz es más difícil cuando cada miembro trabaja en su propio contexto, y la velocidad de iteración en campañas puede ralentizarse cuando la revisión y aprobación depende de coordinación asíncrona. Necesito construir un sistema de operación de marketing en remoto que preserve la calidad y la velocidad del trabajo creativo.

**Preguntas para personalizar el sistema:**
1. ¿Cuántas personas tiene el equipo de marketing y cuántas zonas horarias diferentes cubren?
2. ¿Cuáles son los tipos de trabajo que más sufren con la distancia: las sesiones de ideación, la coordinación de campañas, las revisiones creativas, la alineación con ventas y producto, o la construcción del sentido de equipo?
3. ¿El equipo es completamente remoto o es un modelo híbrido donde algunos están en oficina y otros distribuidos?
4. ¿Qué stack de herramientas usan actualmente para la colaboración: cuál funciona bien y cuál es el mayor punto de fricción?

**LOS DESAFÍOS ESPECÍFICOS DEL MARKETING REMOTO:**

La coordinación creativa a distancia es fundamentalmente diferente a la coordinación operativa. Cuando el trabajo implica generar ideas juntos, iterar sobre creatividades, alinear el tono y el mensaje, o tomar decisiones de gusto estético, la comunicación asíncrona por texto tiene limitaciones que las herramientas no resuelven completamente. Una sesión de brainstorming en remoto por videollamada produce resultados diferentes a una sesión presencial, no necesariamente peores pero sí diferentes, y requiere una facilitación más activa y estructurada.

La pérdida de contexto compartido: en un equipo presencial, la alineación informal ocurre constantemente. Los comentarios de pasillo, las conversaciones en la pausa del café, la escucha accidental de lo que está trabajando el compañero crean un contexto compartido que en remoto hay que construir deliberadamente. Sin ese contexto compartido, los miembros del equipo trabajan más en silos y la coherencia del trabajo sufre.

**SISTEMA DE COORDINACIÓN PARA EQUIPOS DE MARKETING REMOTOS:**

La cadencia de reuniones que maximiza alineación y minimiza tiempo en videoconferencia. La reunión de arranque de semana para alinear prioridades, la sesión semanal de revisión de resultados, la reunión quincenal de estrategia, y la revisión mensual de rendimiento del equipo. Cómo estructurar cada una para que sean eficientes y no se conviertan en reuniones sin propósito claro.

El sistema de documentación del trabajo de marketing: cómo construir un sistema de documentación que permita que cualquier miembro del equipo entienda el estado de cualquier proyecto sin necesidad de preguntar, y que preserve el contexto de las decisiones creativas para que los nuevos miembros puedan incorporarse con facilidad.

**CREATIVIDAD COLABORATIVA EN REMOTO:**

Técnicas de facilitación de sesiones creativas en videollamada que generan mejores resultados que el simple brainstorming no estructurado. Los ejercicios de ideación asíncrona que permiten que cada persona contribuya en su momento de mayor energía creativa. Las herramientas colaborativas (Miro, FigJam, Notion) y cómo usarlas para preservar el trabajo creativo de manera que sea accesible y mejorable por todo el equipo.

**CONSTRUIR CULTURA DE EQUIPO A DISTANCIA:**

La cultura de equipo en remoto no emerge sola: hay que construirla activamente. Los rituales de equipo que crean sentido de pertenencia sin ser forzados, los momentos de conexión personal que no son solo trabajo, y cómo crear el espacio para que las relaciones entre miembros del equipo se desarrollen aunque no estén físicamente juntos.

Ayúdame a diseñar el sistema operativo de mi equipo de marketing remoto para mantener la calidad, la velocidad y la cohesión que necesitamos para producir trabajo de alto nivel.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema de operación para equipos de marketing remotos que preserva calidad creativa y alineación',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Async engineering: documentar, decidir y construir en equipos distribuidos',
                'description'       => 'Aprende a construir prácticas de ingeniería asíncrona que permitan a equipos distribuidos tomar decisiones técnicas de calidad, documentar efectivamente y mantener la velocidad de desarrollo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un engineering manager con experiencia liderando equipos de desarrollo distribuidos y con especialización en culturas de trabajo asíncrono. Los equipos de desarrollo distribuidos tienen el potencial de ser más productivos que los presenciales cuando dominan el trabajo asíncrono, pero también pueden ser significativamente menos efectivos si no construyen las prácticas correctas. La diferencia entre un equipo distribuido que funciona bien y uno que funciona mal no está en las herramientas sino en las prácticas de comunicación, documentación y toma de decisiones. Necesito construir o mejorar las prácticas de ingeniería asíncrona de mi equipo.

**Preguntas para personalizar las prácticas:**
1. ¿Cuántas zonas horarias cubre el equipo y hay un solapamiento de horas comunes o el equipo trabaja en horarios completamente diferentes?
2. ¿Cuál es el principal punto de fricción actual en el trabajo distribuido: la toma de decisiones técnicas lentas, la revisión de código ineficiente, la coordinación de dependencias entre servicios, la documentación insuficiente, o las interrupciones frecuentes en el trabajo de otros miembros del equipo?
3. ¿El equipo trabaja con un stack de microservicios, monolito, o arquitectura mixta? La complejidad arquitectónica afecta a los requerimientos de documentación.
4. ¿Hay una cultura de documentación establecida o la documentación es el eterno punto débil del equipo?

**POR QUÉ EL TRABAJO ASÍNCRONO ES UNA VENTAJA COMPETITIVA CUANDO SE DOMINA:**

Los equipos que dominan el trabajo asíncrono tienen ventajas reales sobre los equipos presenciales o síncronos: cada persona puede trabajar en sus horas de mayor productividad cognitiva en lugar de adaptar su trabajo a un horario común, las decisiones se documentan de manera natural porque deben comunicarse por escrito, y la escritura como medio principal de comunicación fuerza una claridad de pensamiento que la comunicación oral informal no exige.

El obstáculo principal no es la tecnología sino el hábito. Los equipos que vienen de entornos síncronos llevan sus hábitos al asíncrono: piden confirmación inmediata, hacen preguntas que podrían resolverse con documentación, esperan respuesta en minutos, y convocan reuniones para decisiones que podrían tomarse asíncronamente. Cambiar esos hábitos requiere tiempo, práctica y un sistema explícito.

**EL SISTEMA DE DOCUMENTACIÓN PARA EQUIPOS DE INGENIERÍA:**

Las Architecture Decision Records (ADR) como herramienta principal para documentar decisiones técnicas. Cómo estructurar una ADR para que capture el contexto de la decisión (qué problema resuelve), las opciones consideradas, los trade-offs de cada opción, y la decisión tomada con su razonamiento. Por qué la documentación de las decisiones rechazadas es tan valiosa como la de las aceptadas.

El nivel correcto de documentación: la documentación excesiva es un problema tan real como la insuficiente. Cómo definir qué hay que documentar (lo que no es recuperable de otros lugares, lo que cambiará en el futuro, lo que un nuevo miembro del equipo necesitará para ser productivo) y qué no (el código bien escrito es su propia documentación).

**TOMA DE DECISIONES TÉCNICAS ASÍNCRONAS:**

El proceso de propuesta técnica escrita como alternativa a las reuniones de decisión: cómo estructurar una propuesta técnica que contenga suficiente contexto para que los revisores puedan dar feedback de calidad de manera asíncrona, cómo establecer plazos claros para el proceso de revisión, y cómo manejar los desacuerdos cuando no hay una reunión donde resolverlos en tiempo real.

Las guías de contribución y los estándares de código como documentos vivos que reducen la necesidad de sincronización para mantener la coherencia del código base.

**CODE REVIEW ASÍNCRONO DE CALIDAD:**

Cómo escribir pull requests que den suficiente contexto para una revisión asíncrona de calidad: la descripción del cambio, el razonamiento detrás de las decisiones no obvias, las áreas que el autor considera que merecen atención especial. Cómo dar feedback de code review por escrito que sea claro, constructivo y accionable sin el tono que a veces genera la comunicación escrita.

Ayúdame a construir un sistema de ingeniería asíncrona que permita a mi equipo distribuido trabajar con la misma calidad y velocidad que un equipo presencial bien coordinado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Prácticas de ingeniería asíncrona para equipos distribuidos que mantienen calidad y velocidad de desarrollo',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño colaborativo en remoto: Figma, workshops y feedback a distancia',
                'description'       => 'Aprende a conducir sesiones de diseño colaborativo efectivas en remoto, facilitar workshops de UX con equipos distribuidos y gestionar ciclos de feedback que mantengan la calidad del trabajo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un lead designer con experiencia en liderazgo de equipos de diseño distribuidos y en facilitación de procesos de diseño colaborativo en remoto. El diseño es una disciplina inherentemente colaborativa que históricamente ha dependido de la coubicación: pizarras llenas de wireframes, sesiones de user testing en las que todo el equipo observa juntos, revisiones donde señalar directamente sobre el prototipo. El diseño en remoto no solo es trasladar esas prácticas a herramientas digitales: es repensar cómo se colabora, cómo se da feedback y cómo se toman decisiones de diseño cuando el equipo está distribuido. Necesito mejorar la calidad de mi práctica de diseño colaborativo en remoto.

**Preguntas para personalizar el enfoque:**
1. ¿Qué tipo de sesiones colaborativas de diseño son las más frecuentes en tu trabajo: workshops de discovery, sesiones de ideación, revisiones de diseño, sesiones de design critique, o test de usabilidad?
2. ¿El equipo con el que colaboras es solo de diseño o incluye también ingeniería, producto y stakeholders de negocio?
3. ¿Cuál es el stack de herramientas que ya usas y cuál es el mayor punto de fricción: Figma para el diseño, Miro o FigJam para workshops, videollamadas para las sesiones síncronas?
4. ¿El mayor desafío es la facilitación de las sesiones síncronas o la gestión del feedback asíncrono que llega después de las revisiones?

**LA FACILITACIÓN DE WORKSHOPS DE DISEÑO EN REMOTO:**

Un workshop de diseño en remoto bien facilitado puede ser tan efectivo como uno presencial si se diseña conscientemente para el formato digital. Las diferencias clave con el presencial: los participantes se cansan más rápido en sesiones largas de videollamada (Zoom fatigue), la dinámica de grupo es más difícil de leer cuando no ves el lenguaje corporal, la colaboración en la pizarra digital requiere más instrucciones explícitas que la presencial, y los breakout rooms para trabajo en grupos pequeños son más difíciles de orquestar que separarse en grupos alrededor de diferentes mesas.

Cómo estructurar un workshop de descubrimiento de 3 horas en remoto: la preparación previa que reduce el tiempo de calentamiento al inicio, la alternancia entre actividades síncronas y momentos de trabajo individual, los sprints cortos de actividad con objetivos claros en lugar de sesiones largas sin estructura, y los momentos de síntesis compartida que aseguran que todos tienen el mismo entendimiento al final.

**HERRAMIENTAS Y SU USO CORRECTO:**

Figma para diseño colaborativo en tiempo real: cómo estructurar los archivos de Figma para que la colaboración sea fluida, las convenciones de naming y organización que permiten a múltiples diseñadores trabajar sin pisarse, y el uso de los comentarios de Figma para feedback contextual sobre el diseño.

FigJam y Miro para ideación y workshops: cómo diseñar las plantillas de workshop que guían al grupo sin rigidez, los templates reutilizables para actividades frecuentes, y cómo preparar el espacio digital de trabajo antes de la sesión para que los participantes no pierdan tiempo con la herramienta.

**CICLOS DE FEEDBACK EN REMOTO:**

El feedback de diseño asíncrono tiene ventajas sobre el síncrono: permite a cada revisor tomarse el tiempo para pensar antes de comentar, el feedback queda registrado y es accionable después de la sesión, y cada persona puede dar feedback en su momento de mayor capacidad de análisis. Pero también tiene riesgos: los comentarios escritos pueden interpretarse con un tono más duro del intencionado, la conversación de aclaración que se haría naturalmente en la revisión presencial no ocurre, y los reviewers pueden malinterpretar el estado del diseño (rough sketch vs. propuesta final).

Cómo estructurar las revisiones de diseño asíncronas para que el feedback sea útil: el contexto que debe acompañar al diseño, cómo formular las preguntas específicas de feedback para que los revisores sepan dónde concentrarse, y cómo cerrar el ciclo de feedback con decisiones explícitas sobre qué cambios se incorporan y por qué.

Ayúdame a mejorar la calidad de mis sesiones de diseño colaborativo y mis ciclos de feedback en el contexto de mi equipo distribuido.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Metodología de diseño colaborativo en remoto para workshops, revisiones y feedback de calidad',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Remote selling: vender virtualmente con el mismo impacto que en persona',
                'description'       => 'Aprende a dominar las técnicas de venta virtual para mantener el impacto y la conexión con el cliente en un entorno donde la pantalla reemplaza a la sala de reuniones.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de ventas con experiencia en la transformación de equipos de ventas presenciales a entornos virtuales y en el desarrollo de habilidades de venta remota. La venta virtual no es simplemente trasladar la reunión de ventas presencial a una videollamada: es un formato diferente con sus propias reglas de comunicación, sus propias herramientas de persuasión y sus propios patrones de engagement del cliente. Los vendedores que entienden estas diferencias y adaptan su approach tienen resultados comparables o mejores que en presencial; los que simplemente hacen lo mismo de siempre a través de una pantalla sufren una reducción significativa de su efectividad. Necesito desarrollar mis habilidades de venta virtual de manera sistemática.

**Preguntas para personalizar el desarrollo:**
1. ¿Qué tipo de ventas haces: ciclo largo con múltiples interlocutores en el proceso, ciclo corto transaccional, ventas consultivas de servicios, o demos de producto SaaS?
2. ¿Qué parte del proceso de ventas virtual es la más débil actualmente: la primera reunión de descubrimiento, la demo, la presentación de propuesta, las negociaciones finales, o la gestión de múltiples stakeholders sin poder leer la sala presencialmente?
3. ¿Tienes experiencia con las herramientas de venta virtual (plataformas de videollamada, herramientas de presentación compartida, grabación de demos) o hay una curva de aprendizaje pendiente?
4. ¿Vendes a clientes que también están cómodos con el entorno virtual o tienes clientes que prefieren el presencial y hay que gestionar esa preferencia?

**POR QUÉ LA VENTA VIRTUAL ES DIFERENTE A LA PRESENCIAL:**

La comunicación cara a cara usa múltiples canales en paralelo: el lenguaje verbal, el paralenguaje (tono, ritmo, volumen), el lenguaje corporal, la proxemia (la distancia física), el contacto visual y el tacto en el saludo. La videollamada elimina o degrada la mayoría de estos canales: el lenguaje corporal se reduce a lo que entra en el encuadre de la cámara, el contacto visual es imposible (mirar a los ojos del interlocutor y mirar a la cámara son acciones mutuamente excluyentes), y la latencia y la compresión del audio degradan el paralenguaje.

El resultado es que la carga de la comunicación recae más que nunca en las palabras: lo que dices y cómo lo estructuras importa más en la venta virtual que en la presencial, donde la energía personal, la confianza física y la relación construida en la sala compensaban un mensaje menos estructurado.

**HABILIDADES DE COMUNICACIÓN VIRTUAL DE ALTO IMPACTO:**

La presencia en cámara: cómo configurar la iluminación, el encuadre y el fondo para proyectar profesionalidad y confianza. El contacto visual virtual y cómo conseguirlo técnicamente (mirar a la cámara, no a la pantalla). El ritmo de habla más lento que en presencial para compensar la degradación de la latencia. Las pausas más largas para invitar al interlocutor a hablar cuando no hay las señales visuales que en presencial indican que es el turno del otro.

La gestión del silencio en videollamada: los silencios en videollamada son más incómodos que en presencial y los vendedores tienen tendencia a llenados prematuramente. Cómo usar el silencio como herramienta de ventas en el entorno virtual.

**DEMOS Y PRESENTACIONES VIRTUALES:**

La demo de producto en videollamada con pantalla compartida es uno de los formatos más comunes y más mal ejecutados de la venta virtual. Cómo estructurar una demo que mantenga la atención del interlocutor cuando compite con todas las distracciones de su entorno. Las técnicas de engagement durante la pantalla compartida: las preguntas frecuentes, los momentos de interacción, y la gestión del ritmo para evitar la pérdida de atención.

Las herramientas de presentación interactiva (Loom para demos pregrabadas, Miro para presentaciones colaborativas, Notion para propuestas interactivas) y cómo usarlas para diferenciarse de los competidores que siguen con el PowerPoint compartido.

Ayúdame a construir un sistema de venta virtual que me permita tener el mismo impacto que en las reuniones presenciales con las herramientas y las técnicas correctas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Técnicas y sistema de venta virtual para mantener impacto y conexión con el cliente a distancia',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product management distribuido: cómo gestionar el roadmap desde cualquier lugar',
                'description'       => 'Aprende a gestionar el roadmap de producto, alinear stakeholders y liderar el equipo de producto de manera efectiva en entornos distribuidos o completamente remotos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de producto con experiencia gestionando equipos de producto distribuidos en múltiples zonas horarias. El product management distribuido amplifica tanto los desafíos como las oportunidades del rol. La comunicación que en presencial ocurre de manera informal y continua (los pasillos, las conversaciones espontáneas, la lectura del estado de ánimo del equipo) debe hacerse de manera deliberada y estructurada en remoto. Sin esa estructura deliberada, el PM remoto pierde el pulso del equipo, los stakeholders se desalinean y el roadmap se convierte en un documento que nadie sigue porque nadie recuerda el contexto de las decisiones. Necesito construir un sistema de product management que funcione bien en remoto.

**Preguntas para personalizar el sistema:**
1. ¿Cuánto solapamiento de horario hay entre el PM y el equipo de ingeniería y diseño? El nivel de asincronía posible depende directamente de este dato.
2. ¿Cuáles son los mayores puntos de fricción del PM remoto actual: la alineación de stakeholders, la comunicación de prioridades al equipo, el seguimiento del progreso sin poder ver el trabajo, o la construcción de relaciones con los miembros del equipo que no conoces físicamente?
3. ¿El equipo tiene una cultura de documentación previa o hay que construirla desde cero?
4. ¿Qué herramientas de gestión de producto usas: Linear, Jira, Notion, Productboard u otras?

**EL PM REMOTO COMO ESCRITOR PROFESIONAL:**

En un entorno presencial, el PM puede comunicar mucho de manera informal y oral: el contexto de una decisión, el razonamiento detrás de una prioridad, el estado de ánimo de la organización. En remoto, toda esa comunicación debe hacerse por escrito, y la calidad de la escritura del PM se convierte en una habilidad crítica de liderazgo. Un PM remoto que escribe bien puede comunicar estrategia, alinear stakeholders y mantener el equipo orientado sin necesidad de estar en la misma habitación. Un PM remoto que escribe mal pierde influencia y claridad a pesar de hacer un buen trabajo de producto.

Las habilidades de escritura que más importan para el PM remoto: la capacidad de escribir PRDs (Product Requirements Documents) que sean comprensibles sin contexto oral adicional, los updates de roadmap que comunican no solo qué sino por qué, y las decisiones documentadas que preservan el razonamiento para que el equipo pueda actuar con autonomía sin necesidad de preguntar al PM en cada paso.

**GESTIÓN DEL ROADMAP EN REMOTO:**

El roadmap como documento vivo y comunicado: cómo estructurar el roadmap para que sea comprensible para diferentes audiencias (equipo técnico, dirección, stakeholders de negocio), cómo mantenerlo actualizado de manera que refleje la realidad sin convertir el mantenimiento en una carga, y cómo comunicar los cambios de prioridad con el contexto suficiente para que no generen confusión o resistencia.

El proceso de priorización transparente: en remoto, las decisiones de priorización necesitan más comunicación activa porque los stakeholders no pueden ver el proceso de deliberación. Cómo documentar el proceso de priorización (los criterios usados, las opciones consideradas, los trade-offs elegidos) de manera que los stakeholders entiendan la lógica aunque no estén de acuerdo con el resultado.

**RITMO DE COMUNICACIÓN Y CADENCIA DE REUNIONES:**

La cadencia óptima de reuniones para el PM remoto: el standup diario asíncrono, la revisión semanal de progreso con el equipo, la sesión quincenal de priorización de backlog, la revisión mensual de roadmap con stakeholders, y la revisión trimestral de estrategia con la dirección. Cómo diseñar cada reunión para que sea indispensable y no una reunión de status que podría haber sido un email.

**CONSTRUIR INFLUENCIA SIN AUTORIDAD EN REMOTO:**

La influencia del PM (que en presencial se construye con visibilidad física, relaciones informales y presencia) en remoto se construye con la calidad del pensamiento de producto y la claridad de la comunicación. Cómo construir esa influencia de manera sistemática cuando no estás en la misma sala que los stakeholders que necesitan respaldarte.

Ayúdame a diseñar el sistema de product management distribuido que necesito para ser efectivo desde cualquier lugar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema de product management distribuido para gestionar roadmap y stakeholders en remoto',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Hybrid work design: diseñar el modelo híbrido que retiene y motiva',
                'description'       => 'Aprende a diseñar un modelo de trabajo híbrido que optimice tanto la productividad como la retención del talento, balanceando las necesidades individuales con los objetivos organizacionales.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en diseño organizacional y gestión del talento con especialización en modelos de trabajo flexible e híbrido. El modelo híbrido ha pasado de ser una concesión temporal de la pandemia a ser la expectativa por defecto de muchos trabajadores del conocimiento. Las empresas que no ofrecen flexibilidad pierden talento frente a las que sí lo hacen; pero las empresas que ofrecen flexibilidad sin diseñarla bien crean problemas nuevos: pérdida de cultura, inequidad entre roles presenciales y remotos, dificultad para la colaboración y sensación de que las oportunidades van a los que más se ven en la oficina. Diseñar bien el modelo híbrido es una ventaja competitiva real. Necesito ayuda para diseñar el modelo híbrido correcto para mi organización.

**Preguntas para personalizar el diseño:**
1. ¿Cuántos empleados tiene la organización y en qué roles: la mayoría son trabajadores del conocimiento que pueden hacer su trabajo desde cualquier lugar, hay roles que requieren presencia física, o es una mezcla?
2. ¿El punto de partida es una empresa que vuelve al presencial después de la pandemia, una empresa que quiere formalizar el híbrido que ya está ocurriendo de facto, o una empresa nueva que diseña desde cero?
3. ¿Cuál es la posición de la dirección respecto al trabajo en remoto: está convencida de los beneficios del híbrido, tiene dudas, o hay resistencia que hay que gestionar?
4. ¿Cuáles son las principales preocupaciones actuales: la pérdida de cultura, la inequidad entre quien va a la oficina y quien no, la coordinación de los días en que el equipo está junto, o la gestión del rendimiento a distancia?

**POR QUÉ EL HÍBRIDO MAL DISEÑADO ES PEOR QUE EL TODO PRESENCIAL O EL TODO REMOTO:**

El modelo híbrido crea riesgos específicos que no existen en los modelos puros. El principal es el sesgo de proximidad: los managers tienen tendencia inconsciente a evaluar mejor, dar más oportunidades y ascender antes a las personas que ven físicamente. En un modelo híbrido donde algunos van más a la oficina que otros, esto crea inequidades reales de carrera que destruyen la motivación de los trabajadores más remotos y que son difíciles de detectar porque el sesgo es inconsciente.

El segundo riesgo es la reunión de segunda clase: cuando algunos participantes están en la sala y otros en videollamada, la dinámica favorece consistentemente a los presenciales. Los que están en la sala tienen conversaciones colaterales, comparten documentos de manera informal y tienen acceso a la lectura del lenguaje corporal del resto; los remotos participan con una experiencia degradada. Esto hace que asistir en presencial valga más que asistir en remoto, lo que destruye la lógica del híbrido.

**DISEÑAR LA POLÍTICA HÍBRIDA:**

Las decisiones de diseño que hay que tomar explícitamente: cuántos días en oficina son mandatorios vs. optativos, si los días en oficina se coordinan por equipo o son individuales, qué actividades requieren presencia y cuáles son igualmente efectivas en remoto, y cómo se gestionan los casos donde el empleado no puede o no quiere venir los días estipulados.

La política de reuniones híbridas: la norma más efectiva es la del todo o nada (o todos en sala o todos en videollamada) que elimina la dinámica de segunda clase. Cómo implementar esta norma de manera práctica cuando el equipo está en múltiples ubicaciones.

**GESTIÓN DEL RENDIMIENTO EN HÍBRIDO:**

Cómo evaluar el rendimiento por resultados en lugar de por presencia, cómo formar a los managers para que gestionen de manera equitativa a empleados presenciales y remotos, y cómo crear las estructuras de reconocimiento y desarrollo que no dependan de la visibilidad física.

**CONSTRUIR CULTURA EN HÍBRIDO:**

Los rituales que construyen cultura en un entorno híbrido: qué actividades funcionan mejor en presencial y por tanto merecen ser los días de coincidencia obligatoria, cómo crear conexión social en los días remotos sin que sea forzado, y cómo medir la cohesión del equipo para detectar problemas antes de que impacten en la rotación.

Ayúdame a diseñar el modelo híbrido de mi organización con las políticas, los procesos y los rituales que maximicen tanto el rendimiento como la retención del talento.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseño de modelo híbrido de trabajo que optimiza retención, equidad y productividad organizacional',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Remote finance team: controles, procesos y confianza a distancia',
                'description'       => 'Aprende a gestionar un equipo de finanzas en remoto manteniendo los controles internos, la integridad de los procesos y la confianza en el equipo sin depender de la supervisión física.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CFO y director financiero con experiencia gestionando equipos de finanzas distribuidos. La gestión remota de un equipo de finanzas presenta desafíos específicos que van más allá de los del trabajo remoto genérico: los controles internos que en presencial se basaban parcialmente en la observación física necesitan ser reimaginados, la segregación de funciones requiere procesos más explícitos, y la detección temprana de errores o irregularidades es más difícil cuando no compartes espacio con el equipo. Al mismo tiempo, los equipos de finanzas remotos tienen la ventaja de poder acceder a talento en cualquier ubicación y de forzar una documentación de procesos que los equipos presenciales a menudo no tienen. Necesito construir el sistema de operación de mi equipo de finanzas en remoto.

**Preguntas para personalizar el sistema:**
1. ¿Cuántas personas tiene el equipo de finanzas y en qué funciones: contabilidad, controlling, tesorería, FP&A, auditoría interna?
2. ¿El equipo es completamente remoto o hay una combinación de roles presenciales y remotos?
3. ¿Cuáles son los principales riesgos que te preocupan en la operación remota: el control de autorizaciones y aprobaciones, la segregación de funciones, la coordinación de los cierres de período, la gestión del acceso a sistemas sensibles, o la supervisión del trabajo del equipo?
4. ¿Tienes sistemas financieros en la nube (ERP cloud-based, herramientas de automatización) o trabajas con sistemas que requieren acceso a red local?

**LOS CONTROLES INTERNOS EN EL ENTORNO REMOTO:**

Los controles internos en entornos presenciales se apoyaban históricamente en la observación directa y en procesos informales reforzados por la proximidad física. En remoto, esos controles deben ser completamente explícitos, documentados y apoyados por sistemas. Esto no es necesariamente peor: un control que existe en papel y en sistema es más robusto que uno que depende de que el supervisor esté mirando.

La segregación de funciones en remoto: cómo asegurarse de que los controles clave (autorización, custodia, registro, conciliación) están en manos de diferentes personas cuando el equipo está distribuido, y cómo verificar el cumplimiento sin supervisión física. Los sistemas de aprobación digital con trazabilidad completa como reemplazo de la firma física.

Los accesos a sistemas financieros sensibles: la gestión de accesos en remoto requiere más rigor que en presencial. El principio de mínimo privilegio, la autenticación multifactor, los logs de acceso, y los protocolos para revocar accesos inmediatamente cuando un empleado sale de la empresa son controles más críticos en remoto porque no hay la barrera física que supone el estar en la oficina.

**PROCESOS DE CIERRE REMOTO:**

El cierre de período es el momento de mayor presión del equipo de finanzas y el que más se ve afectado por la distribución. Cómo diseñar el proceso de cierre para que sea eficiente en remoto: la planificación anticipada con responsables y plazos claros para cada tarea, los puntos de sincronización explícitos que garantizan que el progreso está alineado sin necesidad de preguntar constantemente, y las escaladas definidas de antemano para los problemas que inevitablemente surgen.

**SUPERVISIÓN Y CONFIANZA A DISTANCIA:**

La paradoja del control remoto: la supervisión excesiva destruye la motivación y la confianza del equipo sin mejorar la calidad del trabajo; la supervisión insuficiente aumenta el riesgo de errores no detectados. El equilibrio correcto es la supervisión basada en resultados y en la calidad del trabajo, no en el proceso de trabajo. Cómo definir los indicadores de calidad del trabajo financiero que permiten detectar problemas tempranamente sin necesidad de microgestión.

La construcción de confianza en remoto: en finanzas la confianza es especialmente importante porque el equipo tiene acceso a información sensible y trabaja con poca supervisión directa. Cómo construir la confianza con cada miembro del equipo a través de la calidad de la comunicación, la claridad de las expectativas, y la consistencia en la evaluación del rendimiento.

Ayúdame a construir el sistema operativo de mi equipo de finanzas en remoto con los controles, los procesos y la cultura correctos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Sistema de operación de equipos de finanzas remotos con controles internos y procesos adaptados',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Práctica jurídica remota: gestión del despacho y del cliente en digital',
                'description'       => 'Aprende a gestionar la práctica jurídica en un entorno remoto o híbrido, desde la gestión del despacho y los procesos hasta la relación con el cliente y la firma digital de documentos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado con experiencia en la transformación digital de despachos jurídicos y en la gestión de una práctica jurídica remota. La abogacía ha sido históricamente una de las profesiones más presenciales: la confidencialidad de las conversaciones, la naturaleza de los documentos, la relación de confianza con el cliente y los procedimientos judiciales han sido barreras reales para el trabajo remoto. Sin embargo, la pandemia aceleró una transformación que ya estaba comenzando, y muchos aspectos de la práctica jurídica son perfectamente compatibles con el trabajo remoto cuando se tienen los sistemas correctos. Necesito construir o mejorar la infraestructura de mi práctica jurídica para operar de manera efectiva en digital.

**Preguntas para personalizar el sistema:**
1. ¿Qué tipo de práctica tienes: despacho pequeño, despacho mediano, ejercicio individual, o eres abogado in-house con un equipo remoto?
2. ¿Cuáles son las áreas de práctica que gestionas: la naturaleza del trabajo (litigación, consultoría, M&A, etc.) afecta mucho a los requerimientos del entorno remoto?
3. ¿Cuáles son los principales obstáculos actuales: la seguridad de los documentos, la firma digital, la relación con clientes que prefieren presencial, los procedimientos judiciales que requieren comparecencia física, o la coordinación del equipo del despacho?
4. ¿Tienes ya herramientas de gestión de despacho digital (software de gestión de expedientes, firma electrónica, videoconferencia segura) o la transformación está pendiente?

**LA INFRAESTRUCTURA TECNOLÓGICA DEL DESPACHO REMOTO:**

El software de gestión de expedientes en la nube es la pieza central de un despacho remoto: permite que cualquier abogado del equipo acceda a cualquier expediente desde cualquier lugar, que el historial de actuaciones esté documentado y accesible, y que la facturación del tiempo esté integrada con el trabajo. Las opciones disponibles en el mercado español e internacional, los criterios para elegir la correcta según el tamaño y el tipo de práctica, y la migración desde sistemas en local o papel a sistemas en la nube.

La firma electrónica: la ley española y el reglamento eIDAS establecen el marco legal para la firma electrónica con la misma validez que la firma manuscrita. Cómo implementar la firma electrónica en los flujos de trabajo del despacho: qué documentos se pueden firmar electrónicamente sin problemas, cuáles requieren firma electrónica cualificada, y cuáles siguen requiriendo presencia física.

La comunicación segura con el cliente: las conversaciones con el cliente tienen deber de confidencialidad. Cómo gestionar la comunicación remota con el cliente de manera que cumpla con los estándares de seguridad requeridos: qué herramientas de videoconferencia ofrecen el nivel de seguridad adecuado, cómo gestionar el intercambio de documentos confidenciales de manera segura, y cómo documentar las conversaciones de asesoramiento para proteger al abogado en caso de reclamación.

**LA RELACIÓN CON EL CLIENTE EN REMOTO:**

Muchos clientes, especialmente los de mayor edad o los que contienen situaciones de alta carga emocional (divorcios, herencias, procedimientos penales), tienen una preferencia fuerte por el presencial. Cómo gestionar esa preferencia: cuándo la reunión presencial es realmente importante para la calidad del asesoramiento y cuándo la preferencia del cliente es habitual pero no imprescindible, y cómo construir la confianza a través de las videoconferencias para los clientes que inicialmente son reticentes.

La primera reunión con un cliente nuevo en remoto: cómo estructurarla para construir la confianza y el rapport necesarios para una relación abogado-cliente de calidad, los elementos de la comunicación virtual que compensan la ausencia de la reunión presencial, y cómo gestionar el onboarding del cliente de manera completamente digital.

**LOS PROCEDIMIENTOS JUDICIALES Y LAS LIMITACIONES ESTRUCTURALES:**

El remoto tiene límites en la práctica jurídica: las vistas orales, las guardias, determinadas diligencias y el trabajo con los juzgados siguen requiriendo presencia física en muchos casos. Cómo diseñar el modelo de trabajo para acomodar las necesidades de presencia inevitable dentro de un marco mayoritariamente remoto.

Ayúdame a construir la infraestructura y los procesos para gestionar mi práctica jurídica de manera efectiva en un entorno remoto o híbrido.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Infraestructura y procesos para gestionar la práctica jurídica de manera efectiva en remoto',
                'vote_score'        => 26,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Remote CS team: mantener la calidad y la cultura del equipo a distancia',
                'description'       => 'Aprende a liderar un equipo de customer success distribuido manteniendo la consistencia del servicio, la calidad de las interacciones con el cliente y la cohesión del equipo sin la oficina como espacio compartido.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de customer success con experiencia gestionando equipos de CS distribuidos en múltiples zonas horarias. Los equipos de customer success en remoto enfrentan desafíos específicos que los diferencian de otros equipos distribuidos: la calidad del servicio al cliente depende de habilidades de comunicación que son difíciles de desarrollar y calibrar a distancia, el feedback en tiempo real sobre interacciones con clientes es más complicado cuando no estás en la misma sala, y la cultura del equipo que en presencial se construye con las celebraciones de los éxitos y el apoyo en los momentos difíciles debe recrearse deliberadamente en remoto. Necesito construir o mejorar el sistema de gestión de mi equipo de CS remoto.

**Preguntas para personalizar el sistema:**
1. ¿Cuántas personas tiene el equipo de CS y en cuántas zonas horarias operan?
2. ¿El equipo atiende a clientes en tiempo real (chat, teléfono) o principalmente en asíncrono (email, tickets)?
3. ¿Cuáles son los principales desafíos del equipo remoto actual: la consistencia de la calidad entre diferentes miembros del equipo, el desarrollo de habilidades, la supervisión de las interacciones, la coordinación cuando hay escaladas, o la cohesión cultural del equipo?
4. ¿Tienes un sistema de gestión de calidad (QA de interacciones) y de formación continua, o hay que construirlos?

**CALIDAD CONSISTENTE EN UN EQUIPO DISTRIBUIDO:**

La calidad del CS depende de que todos los miembros del equipo respondan con un nivel similar de conocimiento, empatía y eficacia, independientemente de quién atienda al cliente. En un equipo presencial, el contagio cultural, la observación directa y el feedback informal hacen parte del trabajo de calibración de calidad. En remoto, esa calibración debe ser explícita y sistemática.

El sistema de Quality Assurance para CS remoto: cómo estructurar la revisión periódica de interacciones (llamadas, emails, tickets) para que sea sistemática y útil para el desarrollo del equipo. La frecuencia correcta, los criterios de evaluación, cómo dar el feedback de manera que mejore sin desmoralizar, y cómo usar los patrones detectados en el QA para mejorar las guías y los recursos del equipo.

**FORMACIÓN Y DESARROLLO DEL EQUIPO A DISTANCIA:**

El onboarding de un nuevo miembro del equipo de CS en remoto: cómo estructurar el onboarding para que el nuevo miembro adquiera el conocimiento del producto, las habilidades de comunicación y el conocimiento de los procesos del equipo en un tiempo razonable sin la posibilidad de observar y ser observado en vivo. El shadowing virtual, los role-plays en videollamada, y la supervisión activa de las primeras interacciones reales.

El desarrollo continuo del equipo establecido: cómo identificar las áreas de mejora individuales a partir del QA, cómo diseñar sesiones de formación en remoto que sean efectivas y no aburridas, y cómo construir el conocimiento compartido del equipo (best practices, casos difíciles bien resueltos, nuevos productos y funcionalidades) de manera que esté accesible para todos.

**COORDINACIÓN OPERATIVA EN REMOTO:**

La cobertura del equipo: cómo gestionar los horarios de cobertura cuando el equipo está distribuido, asegurando que los clientes tienen acceso a soporte en los horarios prometidos sin que ningún miembro del equipo trabaje en condiciones no razonables.

La gestión de escaladas en remoto: cuando una interacción con un cliente requiere escalada, la coordinación debe ser más rápida y clara que en cualquier otro contexto. Cómo diseñar los procesos de escalada para que funcionen bien en un equipo distribuido y cómo asegurar que la escalada no se pierde en la cadena de comunicación.

**CULTURA DE EQUIPO A DISTANCIA EN CS:**

Los equipos de CS tienen una cultura particular: el humor compartido sobre las situaciones difíciles con los clientes, la celebración de los feedbacks positivos, el apoyo mutuo cuando las interacciones son emocionalmente intensas. Cómo crear esa cultura en remoto de manera que no sea forzada ni performativa, y cómo construir las relaciones entre los miembros del equipo que hacen que la colaboración sea efectiva y que el trabajo sea más llevadero.

Ayúdame a construir el sistema de gestión de mi equipo de CS remoto para mantener la calidad del servicio y la cohesión del equipo a distancia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema de gestión de equipos de CS remotos para mantener calidad de servicio y cohesión de equipo',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Optimizar el trabajo remoto como freelance: espacio, rutina y productividad',
                'description'       => 'Aprende a diseñar el entorno físico, las rutinas y los sistemas de productividad que hacen el trabajo remoto como freelance sostenible, eficiente y separado de la vida personal.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach de productividad especializado en freelances y profesionales independientes. El trabajo remoto como freelance tiene una paradoja central: la libertad de trabajar desde donde quieras es una de las razones principales por las que la gente elige el freelance, pero esa misma libertad, sin estructura, puede convertirse en la fuente de algunos de los problemas de productividad más difíciles de resolver. Sin la estructura que impone la oficina (los horarios fijos, la separación física entre trabajo y casa, la presencia de compañeros), muchos freelances acaban trabajando de manera fragmentada, con dificultad para concentrarse, incapaces de desconectar y sin claridad sobre cuánto han trabajado realmente. Necesito construir un sistema de trabajo remoto que funcione de verdad.

**Preguntas para personalizar el sistema:**
1. ¿Trabajas principalmente desde casa, desde espacios de coworking, desde cafeterías, o una combinación?
2. ¿Cuál es tu principal problema de productividad actual: dificultad para comenzar el trabajo por las mañanas, interrupciones frecuentes que rompen la concentración, procrastinación en las tareas difíciles, incapacidad para desconectar al final del día, o la mezcla del tiempo de trabajo con el tiempo personal?
3. ¿Tienes una separación física entre el espacio de trabajo y el espacio de vida en casa, o trabajas desde el mismo espacio donde descansas?
4. ¿Tu trabajo requiere bloques de concentración profunda (escribir, programar, diseñar) o es principalmente comunicación y coordinación?

**EL ENTORNO FÍSICO COMO INFRAESTRUCTURA DE PRODUCTIVIDAD:**

El cerebro humano asocia los entornos físicos con actividades y estados mentales. Esta capacidad de asociación, que es un mecanismo de eficiencia cognitiva, trabaja en tu favor si diseñas el entorno correctamente y en tu contra si no lo haces. Trabajar desde el sofá donde también ves la televisión y descansas hace que el cerebro no entre completamente en modo trabajo, y hace que el modo descanso sea también menos efectivo porque el entorno está contaminado de asociaciones de trabajo.

La separación física del espacio de trabajo: cómo crear un espacio de trabajo dedicado aunque el espacio total sea pequeño. Las señales físicas que marcan el inicio y el fin del tiempo de trabajo: el encendido de una luz específica, el cierre de la puerta, el uso de auriculares. Estos rituales de transición no son magia: funcionan porque entrenan al cerebro a cambiar de estado de manera más rápida y efectiva.

La ergonomía como inversión en productividad: el dolor de espalda, los problemas de cuello y la fatiga visual son los principales enemigos de las sesiones largas de trabajo. Cómo configurar un puesto de trabajo ergonómicamente correcto con el presupuesto disponible, y por qué invertir en una buena silla y un monitor a la altura correcta es una de las mejores inversiones de productividad que puede hacer un freelance.

**DISEÑAR LA RUTINA DE TRABAJO:**

La rutina matinal que arranca el día: el mayor problema de productividad del freelance es la ausencia de la señal externa que en el trabajo por cuenta ajena marca el inicio del tiempo de trabajo (la hora de entrada, el trayecto a la oficina). Sin esa señal, el inicio del trabajo es ambiguo y el cerebro resiste. Cómo diseñar una rutina de inicio de día que cree esa señal de manera interna: la secuencia de acciones que siempre preceden al trabajo y que entrenan al cerebro a entrar en modo concentración.

La gestión de las interrupciones: las interrupciones domésticas (la familia, el repartidor, los vecinos) son la principal diferencia entre el trabajo en casa y el trabajo en oficina en términos de concentración. Cómo comunicar los límites de disponibilidad a las personas con las que convives, cómo gestionar las interrupciones inevitables para que su impacto en la concentración sea mínimo, y cuándo un espacio de coworking es la respuesta correcta para el problema de las interrupciones.

**LA GESTIÓN DEL TIEMPO COMO FREELANCE:**

Los sistemas de gestión del tiempo que funcionan para el trabajo freelance: la planificación semanal que distribuye los proyectos de diferentes clientes en bloques de tiempo, la técnica Pomodoro adaptada para proyectos que requieren bloques más largos de concentración, y el time tracking como herramienta de gestión de negocio y de comprensión de la propia productividad.

La separación entre el tiempo de trabajo y el tiempo personal: cuando la oficina está en casa, el trabajo puede expandirse para llenar todo el tiempo disponible si no hay una frontera explícita. Cómo establecer y mantener el horario de fin de trabajo de manera que sea real y no solo una intención.

Ayúdame a diseñar el sistema de trabajo remoto completo: espacio, rutina, gestión del tiempo y separación trabajo-vida que maximice mi productividad y mi bienestar como freelance.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Sistema completo de trabajo remoto para freelances: espacio, rutina, productividad y desconexión',
                'vote_score'        => 48,
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
