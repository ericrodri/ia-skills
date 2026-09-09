<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills269Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Presentar la estrategia de marketing al board: estructura y convicción',
                'description'       => 'Diseña y entrega presentaciones de estrategia de marketing al consejo de administración o al comité ejecutivo que generen alineación, aprobación de recursos y confianza en el liderazgo del área.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CMO con experiencia en presentaciones ante consejos de administración y comités ejecutivos en empresas de diferentes tamaños y sectores. Voy a presentar la estrategia de marketing ante el board o el comité ejecutivo de mi organización y necesito una estructura que comunique con claridad, genere convicción y consiga la aprobación y el respaldo que el equipo de marketing necesita.

**Preguntas para personalizar la presentación:**
1. ¿Cuál es el objetivo principal de la presentación: aprobación del presupuesto anual, alineación sobre la estrategia, presentación de resultados y plan de ajuste, o actualización trimestral de progreso?
2. ¿Cuánto tiempo tienes para la presentación y para el Q&A?
3. ¿Cuál es el perfil del board o del comité: están orientados a los números y el retorno de inversión, o también hay perfiles con sensibilidad hacia la marca y el crecimiento a largo plazo?
4. ¿Hay algún tema sensible en la presentación: resultados por debajo de expectativas, cambio de estrategia, solicitud de inversión adicional?

**LA ESTRUCTURA DE UNA PRESENTACIÓN EJECUTIVA DE MARKETING:**

Las presentaciones de marketing ante el board fallan habitualmente por exceso de detalle en las tácticas y ausencia de contexto estratégico. El board no necesita saber qué publicaste en Instagram la semana pasada; necesita entender cómo el marketing está contribuyendo a los objetivos de negocio y qué recursos necesita para seguir haciéndolo. Ayúdame a construir la estructura correcta:

Apertura ejecutiva: los primeros dos minutos de la presentación determinan si el board está contigo o procesando sus propias preguntas mientras tú hablas. Cómo abrir con el titular que importa, el dato o insight que captura la atención desde el inicio y establece el tono de toda la presentación.

El contexto estratégico: antes de presentar los planes de marketing, cómo situar la conversación en el contexto de negocio. Qué está pasando en el mercado, cómo se están moviendo los competidores, qué oportunidades o amenazas son relevantes para la estrategia de marketing. Esta sección no debería durar más de tres minutos pero es lo que diferencia una presentación de métricas de una presentación estratégica.

Los resultados con contexto: cómo presentar los números de marketing de manera que el board entienda qué significan, no solo qué son. Los KPIs de marketing en solitario no significan nada; en contexto (benchmarks del sector, evolución histórica, contribución a los objetivos de negocio) se convierten en información accionable.

La estrategia y el plan: cómo presentar los planes de marketing de manera que el board vea la lógica estratégica detrás de las decisiones y no solo las actividades. Qué apostamos, por qué, qué evidencia lo respalda y qué pasaría si no lo hacemos.

El ask concreto: muchas presentaciones de marketing terminan sin un ask claro, lo que deja al board sin saber qué se espera de ellos. Cómo articular el pedido de manera específica: aprobación de presupuesto, alineación sobre una decisión, apoyo para superar un obstáculo interno.

**LA GESTIÓN DE LAS PREGUNTAS DIFÍCILES:**

Las preguntas del board revelan sus preocupaciones reales. Ayúdame a preparar respuestas para las preguntas más frecuentes y difíciles: ¿Cómo medís el ROI del marketing? ¿Por qué gastamos tanto en marca cuando las ventas bajan? ¿En qué somos diferentes de la competencia? ¿Qué pasaría si redujéramos el presupuesto de marketing un 20%?

**COMUNICAR CON CONVICCIÓN:**

La convicción no es agresividad ni sobre-promesa; es la capacidad de defender una posición estratégica con datos, lógica y claridad sobre las incertidumbres. Cómo comunicar con autoridad cuando los resultados no han sido los esperados. Cómo responder a preguntas para las que no tienes una respuesta perfecta. Cómo mantener la compostura cuando el board desafía tus números o tu estrategia.

Ayúdame a preparar una presentación de marketing al board que genere confianza en el liderazgo del área y consiga el respaldo que el equipo necesita para ejecutar la estrategia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Preparación de presentaciones de marketing para el consejo de administración',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Architectural presentations: explicar decisiones técnicas a no técnicos',
                'description'       => 'Comunica decisiones de arquitectura, deuda técnica y propuestas de inversión tecnológica a audiencias no técnicas con claridad, rigor y la capacidad de generar confianza y aprobación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un arquitecto de software o CTO con experiencia en comunicar decisiones técnicas complejas a audiencias no técnicas: directores generales, comités ejecutivos, inversores y consejos de administración. Necesito presentar una decisión o propuesta de arquitectura técnica y conseguir que audiencias sin formación técnica la entiendan, valoren su importancia y la aprueben o respalden.

**Contexto de la presentación:**
1. ¿Qué decisión técnica necesitas comunicar? (migración de arquitectura, inversión en infraestructura, gestión de deuda técnica, adopción de nueva tecnología, reescritura de sistema crítico...)
2. ¿A quién presentas: directores funcionales, comité ejecutivo, board, inversores?
3. ¿Cuánto tiempo tienes para la presentación?
4. ¿Hay resistencia previa o es la primera vez que presentas este tema?

**EL PROBLEMA CENTRAL DE LAS PRESENTACIONES TÉCNICAS ANTE NO TÉCNICOS:**

La mayoría de las presentaciones técnicas ante audiencias no técnicas fracasan por una de estas razones: demasiado detalle técnico que la audiencia no puede procesar; ausencia de conexión entre la decisión técnica y los objetivos de negocio; o una narrativa defensiva que parece más una justificación que una propuesta estratégica. Ayúdame a evitar esos errores.

**DEL LENGUAJE TÉCNICO AL LENGUAJE DE NEGOCIO:**

La primera transformación necesaria es traducir el problema técnico al impacto de negocio. Ayúdame a construir esas equivalencias para mi situación específica:

La deuda técnica no es "código legacy mal estructurado"; es velocidad de desarrollo que se reduce, tiempo de resolución de incidencias que se alarga, y dificultad para contratar ingenieros que quieran trabajar en el sistema. ¿Cómo cuantificar ese impacto en términos que un CEO comprenda y valore?

La migración de arquitectura no es "pasar de monolito a microservicios"; es la capacidad de escalar las funcionalidades que el negocio más demanda sin que afecten a la estabilidad del resto del sistema. ¿Cómo conectar esa capacidad técnica con los objetivos de crecimiento del negocio?

La inversión en infraestructura no es "mejorar el uptime del 99.5% al 99.9%"; es la diferencia entre 43 horas de caída al año y 8 horas de caída al año, con el impacto en ingresos y reputación que eso implica. ¿Cómo hacer esa traducción para cualquier decisión técnica?

**LA ESTRUCTURA DE LA PRESENTACIÓN TÉCNICA PARA NO TÉCNICOS:**

Situación actual: qué está pasando ahora, en términos de negocio. No qué tecnología tenemos, sino qué limitaciones o riesgos estamos experimentando como consecuencia de las decisiones técnicas actuales.

Por qué actuar ahora: el costo de no actuar es a menudo el argumento más convincente. Qué sucede si no hacemos esta inversión, en términos de velocidad, riesgo, competitividad o coste a largo plazo.

La propuesta y las alternativas: cuál es la solución recomendada, qué alternativas se han evaluado y por qué se descartaron. Presentar alternativas genera credibilidad porque demuestra que la decisión es razonada, no la primera idea que se tuvo.

El plan y los hitos: en términos que la audiencia pueda seguir, sin jerga técnica. Qué vamos a hacer, cuándo estarán disponibles los beneficios y cómo sabemos que va bien.

El ask: qué aprobación, recurso o decisión necesitas de esta audiencia. Específico y accionable.

**GESTIONAR LAS PREGUNTAS Y EL ESCEPTICISMO:**

Cómo responder cuando alguien pregunta "¿por qué no lo hicimos bien desde el principio?" sin ponerse a la defensiva ni culpar a nadie. Cómo gestionar la pregunta del "¿no podéis simplemente usar algo que ya existe en lugar de construirlo?" Cómo explicar por qué algunas cosas técnicas tardan más de lo que parece razonable a ojos de alguien no técnico.

Ayúdame a construir una presentación técnica que genere confianza en el juicio del equipo de ingeniería y consiga el respaldo necesario para ejecutar las decisiones correctas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Comunicación de decisiones técnicas de arquitectura a stakeholders no técnicos',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Design presentations: presentar el trabajo de diseño con impacto',
                'description'       => 'Estructura y entrega presentaciones de diseño que generen comprensión, alineación y aprobación, tanto en sesiones de revisión de trabajo como en presentaciones a stakeholders senior que no hablan el lenguaje del diseño.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un design lead con experiencia en la presentación de trabajo de diseño a diferentes tipos de audiencias: equipos de producto, stakeholders de negocio, directivos y clientes. Presentar bien el trabajo de diseño es una habilidad tan importante como el diseño en sí mismo, y quiero mejorar la manera en que comunico y defiendo mis decisiones de diseño.

**Contexto de la presentación:**
1. ¿Qué tipo de trabajo vas a presentar: exploración de concepto, propuesta de rediseño, resultado de investigación de usuarios, flujo de producto, identidad visual o sistema de diseño?
2. ¿Cuál es la audiencia: equipo de producto y desarrollo, stakeholders de negocio, dirección, o cliente externo?
3. ¿Cuál es el objetivo de la presentación: conseguir feedback, obtener aprobación para avanzar, o comunicar decisiones ya tomadas?
4. ¿Hay alguna tensión o conflicto previo sobre las decisiones de diseño que vayas a presentar?

**EL ERROR MÁS FRECUENTE EN LAS PRESENTACIONES DE DISEÑO:**

La mayoría de los diseñadores presentan sus propuestas mostrando el trabajo y esperando que la audiencia lo evalúe. El resultado es que la conversación se centra en preferencias personales ("a mí ese azul no me gusta", "¿no podría ser más grande el logo?") en lugar de en si el diseño resuelve el problema que debía resolver. Ayúdame a cambiar ese patrón.

**LA ESTRUCTURA NARRATIVA PARA PRESENTAR DISEÑO:**

El problema antes que la solución: cada presentación de diseño debe empezar por el problema que se está resolviendo, con la evidencia que lo justifica (datos de usuarios, métricas de negocio, feedback cualitativo). Si la audiencia no entiende el problema, evaluará la solución desde sus preferencias personales en lugar de desde la efectividad para resolver el problema.

Los principios de diseño como criterio de evaluación: antes de mostrar el trabajo, establecer los criterios con los que debe evaluarse. Cuáles eran los objetivos del diseño, qué restricciones había que respetar y cómo se priorizaron los trade-offs. Esto convierte la evaluación subjetiva en una conversación sobre si el diseño cumple los criterios acordados.

El proceso antes del resultado: mostrar el camino que llevó a la propuesta actual, incluyendo las alternativas exploradas y por qué se descartaron, es una de las formas más efectivas de generar confianza en las decisiones de diseño. La audiencia entiende que la propuesta no es la primera idea sino el resultado de un proceso de búsqueda y validación.

La propuesta con su justificación: cada decisión de diseño significativa debe poder explicarse en términos de por qué resuelve mejor el problema que las alternativas. No "elegí esta tipografía porque me gusta", sino "elegí esta tipografía porque en los tests con usuarios resultó más legible para el segmento objetivo en las condiciones de uso más frecuentes".

**GESTIONAR EL FEEDBACK Y LOS CAMBIOS:**

Cómo distinguir entre el feedback válido que debe incorporarse y las preferencias personales que no deben dictar las decisiones de diseño. Cómo decir "no" a un cambio que crees que es incorrecto de manera que preserve la relación y la confianza, no que la dañe. Cómo manejar la situación en que alguien con autoridad pide un cambio que va en contra de la evidencia de usuarios.

**PRESENTACIONES A AUDIENCIAS NO DISEÑADORAS:**

Cómo adaptar el nivel de abstracción de la presentación según la audiencia: con stakeholders de negocio hablar principalmente de outcomes y métricas, con desarrolladores hablar de comportamientos e implementación, con dirección hablar de impacto estratégico.

Cómo usar prototipado y demos interactivos de manera efectiva en la presentación: cuándo mostrar un prototipo navegable en lugar de slides estáticos, y cómo guiar a la audiencia por el prototipo para que la experiencia comunique lo que quieres comunicar.

Ayúdame a construir una presentación de diseño que genere las conversaciones correctas, proteja las decisiones fundamentadas en evidencia y consiga el tipo de feedback que realmente mejora el trabajo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Estructuración y defensa de presentaciones de diseño ante diferentes audiencias',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Executive selling: presentar al C-suite del cliente',
                'description'       => 'Diseña y ejecuta presentaciones de venta ante el C-suite del cliente que generen conversaciones estratégicas, demuestren comprensión del negocio y aceleren decisiones de compra complejas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de ventas enterprise con experiencia en venta consultiva a nivel C-suite en empresas de tamaño mediano y grande. Tengo una presentación ante el CEO, CFO, COO u otro directivo del cliente y necesito prepararla de manera que genere una conversación estratégica, demuestre que comprendo su negocio en profundidad y acelere la decisión de compra.

**Contexto de la presentación:**
1. ¿Quién estará presente en la presentación: qué roles del C-suite del cliente y quién de tu equipo?
2. ¿En qué fase del proceso de compra está la oportunidad: primera conversación ejecutiva, presentación de propuesta, revisión final antes de la decisión?
3. ¿Cuánto tiempo tienes para la presentación y cuánto para el Q&A?
4. ¿Cuál es el dolor principal del cliente que tu solución resuelve y qué evidencia tienes de que es una prioridad para el C-suite, no solo para el equipo operativo que te contactó?

**LA DIFERENCIA ENTRE VENDER AL C-SUITE Y VENDER A MANDOS INTERMEDIOS:**

Los directivos de nivel C no toman decisiones de compra basadas en features y funcionalidades; toman decisiones basadas en impacto estratégico, riesgo y retorno de inversión. La presentación que funciona con el director de IT o el jefe de marketing raramente funciona con el CEO o el CFO. Ayúdame a entender y aplicar esas diferencias:

El CFO quiere saber el ROI, el período de retorno de la inversión, el impacto en cash flow y los riesgos financieros del proyecto. Cómo preparar un caso de negocio financiero que hable su lenguaje, con las métricas correctas y los supuestos transparentes.

El CEO quiere saber cómo tu solución contribuye a los objetivos estratégicos de la empresa, qué ventaja competitiva genera y cuál es el costo de no actuar o de seguir con la situación actual. Cómo conectar tu propuesta con la agenda estratégica del CEO.

El COO quiere saber cómo se implementa, cuánta fricción genera en las operaciones actuales durante la transición y cómo se mide el éxito operativo. Cómo responder a sus preguntas sobre implementación sin entrar en un nivel de detalle que no corresponde a una conversación C-suite.

**LA ESTRUCTURA DE LA PRESENTACIÓN EJECUTIVA DE VENTAS:**

El benchmark de su situación actual: comienza la conversación demostrando que has hecho el trabajo de entender su negocio. No con datos genéricos del sector, sino con insights específicos sobre su situación, sus retos y sus objetivos que demuestran que has invertido tiempo en comprenderlos.

El costo de la situación actual: qué les está costando el problema que tu solución resuelve, en términos cuantificables. Si no tienes datos exactos, trabaja con estimaciones razonadas y muéstralos, no los escondas.

La solución y su impacto en términos de negocio: no features, sino resultados. No "nuestra plataforma tiene inteligencia artificial", sino "empresas como la suya han reducido el tiempo de onboarding de clientes un 40% usando nuestra solución, lo que equivale a X de ingresos adicionales anuales".

La propuesta de valor diferencial: por qué vosotros y no la competencia o no hacer nada. Sin hablar mal de la competencia, articulando con claridad qué hace que vuestra solución sea la más adecuada para su situación específica.

El siguiente paso concreto: cada presentación ejecutiva debe terminar con un siguiente paso claro, accionable y con una fecha. Sin ese cierre, la conversación se diluye.

**GESTIONAR LAS OBJECIONES DEL C-SUITE:**

Las objeciones del C-suite son diferentes de las de los mandos intermedios. "No tenemos presupuesto" en boca de un CFO puede significar cosas muy distintas. "Necesitamos pensarlo" de un CEO es raramente una señal positiva. Cómo interpretar y responder a las señales del C-suite con la sofisticación que el contexto requiere.

Ayúdame a preparar una presentación ejecutiva que genere la conversación correcta con el C-suite del cliente y acelere la decisión hacia el cierre.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Preparación de presentaciones de ventas enterprise ante el C-suite del cliente',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product reviews con liderazgo: defender el roadmap bajo presión',
                'description'       => 'Estructura y ejecuta las revisiones de producto con el liderazgo de manera que generes alineación sobre el roadmap, gestiones el conflicto de prioridades y construyas confianza en la dirección de producto, incluso bajo presión.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Product Manager o VP de Producto con experiencia en la gestión de las revisiones de producto con equipos directivos y en la defensa de decisiones de roadmap en entornos de alta presión. Las product reviews con liderazgo son una de las situaciones más críticas y con mayor impacto en la carrera de un PM, y necesito prepararlas y ejecutarlas de manera que generen confianza y alineación.

**Contexto de la revisión:**
1. ¿Qué tipo de revisión es: revisión trimestral de roadmap, revisión de progreso mensual, revisión de una decisión específica de priorización, o presentación de la estrategia de producto anual?
2. ¿Quién estará presente: CEO, CPO, CFO, otros VPs funcionales (ventas, marketing, operaciones)?
3. ¿Hay algún conflicto de prioridades conocido o algún tema polémico en el roadmap que esperas que genere fricción?
4. ¿Cómo ha ido la relación entre producto y liderazgo hasta ahora: hay confianza establecida o hay tensión?

**LA TENSIÓN FUNDAMENTAL DE LAS PRODUCT REVIEWS:**

Las product reviews con liderazgo suelen generar tensión porque existen dos agendas que no siempre se alinean: el liderazgo quiere velocidad, previsibilidad y respuestas claras; el equipo de producto necesita flexibilidad para responder a los aprendizajes del mercado y a la incertidumbre inherente al desarrollo de producto. Ayúdame a gestionar esa tensión:

Cómo comunicar la incertidumbre del roadmap de manera que el liderazgo la entienda como gestión responsable del riesgo, no como falta de claridad o de liderazgo. La diferencia entre "no lo sabemos" (genera desconfianza) y "tenemos estas hipótesis, esta es la evidencia que las respalda, y así vamos a validarlas" (genera confianza).

Cómo defender una decisión de priorización que no es la que el liderazgo esperaba. Cuándo ceder y cuándo mantener la posición, y cómo hacer cada cosa de manera que preserve la relación y la credibilidad.

**LA ESTRUCTURA DE UNA PRODUCT REVIEW EFECTIVA:**

Contexto estratégico: antes de entrar en el roadmap, situar la conversación en el contexto de los objetivos de negocio. Qué está pasando en el mercado, qué ha cambiado desde la última revisión y cómo eso afecta a la dirección del producto.

Resultados versus compromisos: qué habíamos dicho que íbamos a entregar, qué entregamos y qué aprendimos del proceso. La honestidad sobre las desviaciones, con el aprendizaje que generaron, es más valiosa que la minimización de los problemas.

El roadmap con la lógica estratégica: no una lista de features con fechas, sino la narrativa que explica por qué estas apuestas en este orden son las que más contribuyen a los objetivos de negocio en el horizonte de tiempo relevante.

Los trade-offs explícitos: qué no está en el roadmap y por qué. Hacer visibles los trade-offs demuestra que las decisiones son razonadas y gestiona las expectativas sobre las peticiones que no han entrado.

Los indicadores de éxito: cómo sabremos que el roadmap está funcionando. Métricas de outcome (no de output) que el liderazgo pueda seguir para evaluar el progreso.

**GESTIONAR EL CONFLICTO DE PRIORIDADES EN LA SALA:**

Cuando ventas dice que necesita la feature X, marketing dice que necesita la feature Y, y el CEO pregunta por qué ninguna de las dos está en el roadmap, cómo gestionar esa conversación en tiempo real. Cómo mantener la autoridad de producto sin generar conflicto con las funciones de negocio. Cómo usar el framework de priorización para que la conversación sea sobre criterios y no sobre poder.

Ayúdame a preparar una product review con liderazgo que genere confianza en la dirección de producto y construya la alineación necesaria para ejecutar con velocidad.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Preparación y ejecución de revisiones de roadmap con equipos de liderazgo',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Presentaciones de RRHH al comité de dirección: datos y narrativa',
                'description'       => 'Diseña presentaciones de RRHH para el comité de dirección que combinen datos de personas con narrativa estratégica, convirtiendo la gestión del talento en una conversación de negocio que genera impacto e influencia.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CHRO o director de RRHH con experiencia en presentar ante comités de dirección y en construir la credibilidad estratégica del área de personas en organizaciones de diferentes tamaños. Las presentaciones de RRHH ante el comité de dirección son una oportunidad única para elevar la conversación de la gestión operativa de personas a la contribución estratégica al negocio, y quiero aprovecharla bien.

**Contexto de la presentación:**
1. ¿Cuál es el tema o temas de la presentación: resultados del ciclo de gestión del desempeño, plan de talento y sucesión, diagnóstico de clima y engagement, propuesta de cambio en el modelo de compensación, plan de reestructuración, o actualización periódica de métricas de personas?
2. ¿Con qué frecuencia presenta RRHH al comité de dirección y cuál es el estatus percibido del área actualmente?
3. ¿Hay algún tema sensible en la agenda: resultados de engagement por debajo de lo esperado, problemas de retención de talento clave, conflictividad laboral?
4. ¿Cuánto tiempo tienes para la presentación?

**EL RETO ESPECÍFICO DE LAS PRESENTACIONES DE RRHH:**

RRHH tiene un problema de percepción en muchas organizaciones: se le asocia con la gestión administrativa de personas, no con la creación de valor estratégico. Las presentaciones al comité de dirección son la oportunidad de cambiar esa percepción, pero solo si la presentación habla el lenguaje del negocio, no el lenguaje de RRHH. Ayúdame a hacer esa traducción:

De las métricas de RRHH a las métricas de negocio: el índice de rotación no es un dato de RRHH; es el coste de reemplazar al 15% de la plantilla cada año (en tiempo de selección, coste de formación, pérdida de productividad durante la adaptación) que se puede cuantificar. El engagement no es una encuesta anual; es la diferencia documentada en productividad, absentismo y retención entre los equipos con alto y bajo engagement. ¿Cómo hacer esas traducciones para los datos específicos que voy a presentar?

De la gestión de procesos a la ventaja competitiva: cómo articular de qué manera la gestión de personas que está haciendo RRHH está creando o protegiendo la capacidad competitiva de la organización. Qué capacidades críticas estamos desarrollando, qué talento estratégico estamos atrayendo o reteniendo, y qué riesgo de talento estamos mitigando.

**LA ESTRUCTURA DE UNA PRESENTACIÓN DE RRHH ESTRATÉGICA:**

La situación del negocio como punto de partida: antes de hablar de personas, situar la conversación en el contexto del negocio. Cuáles son los objetivos estratégicos de la organización y qué implicaciones tienen para la gestión del talento. Esta apertura cambia inmediatamente el marco de la conversación de "reporte de RRHH" a "agenda de negocio".

El diagnóstico de talento: cuál es el estado de las capacidades críticas de la organización para ejecutar la estrategia. Dónde hay fortalezas, dónde hay gaps y cuál es el nivel de riesgo de talento en las posiciones y equipos más críticos.

Las iniciativas y su impacto esperado: qué estamos haciendo para gestionar los gaps y los riesgos, por qué hemos elegido esas iniciativas y qué resultados esperamos, en términos medibles y con un horizonte temporal claro.

El ask al comité: qué decisiones, recursos o apoyo necesitas del comité de dirección. Una presentación de RRHH sin un ask claro es un informe; con un ask claro es una propuesta de negocio.

**CONSTRUIR CREDIBILIDAD COMO FUNCIÓN ESTRATÉGICA:**

Cómo manejar la situación en que el comité de dirección no ve a RRHH como un área estratégica y tiende a interrumpir la presentación con preguntas operativas. Cómo responder a "¿y cuánto cuesta eso?" de manera que la conversación no derive hacia el presupuesto antes de haber establecido el valor. Cómo gestionar los datos negativos (rotación alta, engagement bajo) de manera que no se conviertan en un cuestionamiento de la gestión del área.

Ayúdame a diseñar una presentación de RRHH al comité de dirección que posicione al área como socio estratégico del negocio y genere el nivel de influencia necesario para gestionar el talento de manera efectiva.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Presentaciones estratégicas de RRHH al comité de dirección con impacto de negocio',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Board presentations de finanzas: comunicar los números con claridad',
                'description'       => 'Prepara y entrega presentaciones financieras al consejo de administración que comuniquen los resultados con claridad, anticipen las preguntas difíciles y refuercen la confianza en el equipo de dirección financiera.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CFO con experiencia en presentaciones ante consejos de administración y en la comunicación financiera con inversores y órganos de gobierno. Las presentaciones financieras al board son uno de los momentos de mayor visibilidad del equipo de dirección, y necesito prepararlas de manera que los números hablen con claridad, el contexto esté bien enmarcado y las preguntas difíciles estén anticipadas.

**Contexto de la presentación financiera:**
1. ¿Qué tipo de presentación es: resultados trimestrales, cierre anual, presupuesto para el año siguiente, actualización de forecast, o presentación en el contexto de una operación corporativa?
2. ¿Cuál es el perfil financiero del board: hay miembros con perfil financiero fuerte (banqueros, CFOs, inversores) o es un board mayoritariamente no financiero?
3. ¿Hay noticias negativas en los resultados o en el forecast que gestionar?
4. ¿Cuánto tiempo tienes para la presentación y el Q&A?

**LA ESTRUCTURA DE UNA PRESENTACIÓN FINANCIERA AL BOARD:**

Las presentaciones financieras al board tienen un riesgo característico: ahogarse en los detalles de los números sin comunicar el mensaje estratégico. Un board no necesita entender cada línea del P&L; necesita entender si el negocio está en la dirección correcta, cuáles son los riesgos y oportunidades más relevantes y qué decisiones requiere de ellos. Ayúdame a construir esa estructura:

El titular ejecutivo: cuál es el mensaje principal de la presentación financiera, en una frase. Los resultados del trimestre en contexto (el negocio va bien, va por debajo de lo esperado, hay señales mixtas), la causa principal y la implicación para el futuro. Este titular debe estar claro antes de empezar a preparar los slides.

Resultados versus expectativas: la comparación más importante no es frente al año anterior sino frente al plan y frente al forecast. Si los resultados difieren del plan, la pregunta que el board se hace inmediatamente es "¿lo sabíais?" y "¿cuánto tardasteis en saberlo?". Cómo presentar las desviaciones de manera que refuerce la confianza en la capacidad de gestión del equipo directivo.

Los drivers de los resultados: no solo los qués (los números) sino los porqués (qué los ha causado). Cuáles son los factores internos que el equipo puede controlar y cuáles son los factores externos de mercado que explican los resultados.

El forecast actualizado: a la luz de los resultados, cómo queda la estimación para el resto del año. Cuál es el rango realista de escenarios y qué acciones está tomando el equipo para maximizar los resultados dentro de ese rango.

Los riesgos e implicaciones de liquidez y financiación: qué aspectos del balance y del flujo de caja requieren atención del board, ya sea por decisiones que deben tomarse o por información que deben tener.

**COMUNICAR MALAS NOTICIAS AL BOARD:**

Las malas noticias comunicadas tarde y mal pueden destruir la confianza del board en el equipo directivo mucho más que las propias malas noticias. Cómo comunicar resultados por debajo de expectativas, una revisión a la baja del forecast, o un problema de tesorería de manera que la presentación refuerce en lugar de erosionar la confianza. El principio de que "el board puede soportar malas noticias pero no sorpresas" y cómo aplicarlo en la práctica.

**ANTICIPAR LAS PREGUNTAS DEL BOARD:**

Las preguntas financieras del board siguen patrones predecibles. Ayúdame a preparar respuestas sólidas para: ¿qué tan seguro estás del forecast? ¿qué está haciendo el equipo para compensar la desviación? ¿cuánto tiempo tenemos antes de que la situación de liquidez requiera acción? ¿cómo estamos frente a los competidores?

Ayúdame a preparar una presentación financiera al board que comunique los números con claridad, enmarque el contexto correctamente y refuerce la confianza en la gestión del equipo directivo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Preparación de presentaciones financieras para el consejo de administración',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Informes jurídicos al consejo: comunicar el riesgo legal sin alarmar',
                'description'       => 'Prepara informes y presentaciones jurídicas para el consejo de administración que comuniquen el riesgo legal con precisión y claridad, sin generar alarma innecesaria ni falsa tranquilidad, reforzando el rol del asesor jurídico como socio estratégico.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director jurídico o general counsel con experiencia en la comunicación de temas legales a órganos de gobierno y en el posicionamiento del área jurídica como función estratégica en la organización. Voy a presentar ante el consejo de administración o el comité de auditoría y necesito hacerlo de manera que la información legal sea comprensible, que los riesgos estén bien calibrados y que la presentación refuerce la confianza en la gestión jurídica de la organización.

**Contexto de la presentación jurídica:**
1. ¿Qué tema o temas vas a presentar: mapa de riesgos legales, actualización de litigios y contingencias, cumplimiento normativo (compliance), una operación corporativa específica, o un incidente legal que requiere atención del board?
2. ¿Con qué frecuencia presenta el área jurídica al board y cuál es la expectativa de la audiencia sobre el nivel de detalle?
3. ¿Hay algún asunto de especial sensibilidad: un litigio material, una investigación regulatoria, un incumplimiento normativo que requiere remediation?
4. ¿Cuánto tiempo tienes para la presentación y qué formato se espera: informe escrito, presentación oral, o ambos?

**EL RETO ESPECÍFICO DE LA COMUNICACIÓN JURÍDICA AL BOARD:**

Los abogados están entrenados para ser precisos y para identificar todos los riesgos posibles. Esas virtudes en el trabajo jurídico pueden convertirse en obstáculos en la comunicación con el board, donde la precisión excesiva genera confusión y la enumeración exhaustiva de riesgos genera alarma sin orientación. Ayúdame a calibrar la comunicación correctamente:

La diferencia entre riesgo jurídico y riesgo de negocio: el board necesita entender el riesgo en términos de impacto en el negocio (exposición financiera, impacto reputacional, limitaciones operativas), no en términos de categorías jurídicas. Cómo traducir "responsabilidad por incumplimiento contractual" en "exposición máxima de X euros con una probabilidad estimada de Y%".

Comunicar la incertidumbre jurídica con claridad: el derecho raramente permite certezas absolutas, pero el board necesita orientación, no solo la enumeración de posibilidades. Cómo dar una opinión jurídica que sea honesta sobre la incertidumbre y, al mismo tiempo, orientadora sobre la probabilidad y la magnitud del riesgo.

**LA ESTRUCTURA DEL INFORME JURÍDICO AL BOARD:**

Resumen ejecutivo con la valoración del riesgo: antes de cualquier detalle, cuál es la evaluación general del perfil de riesgo jurídico de la organización. No todos los asuntos son igualmente importantes; ayúdame a jerarquizar y priorizar para que el board sepa dónde poner la atención.

Los asuntos materiales con su valoración: para cada asunto jurídico relevante, cuál es la naturaleza del riesgo, cuál es la exposición potencial, cuál es la probabilidad estimada de materialización y qué está haciendo el equipo jurídico para mitigarlo. El formato matriz de riesgos (probabilidad x impacto) puede ser más efectivo que un informe narrativo.

Las acciones y decisiones que requieren del board: cuáles son los asuntos que necesitan una decisión o aprobación del órgano de gobierno, con una recomendación clara sobre qué decidir y por qué.

Novedades regulatorias con implicaciones para el negocio: qué cambios normativos en curso o previstos son relevantes para la organización, cuándo van a ser aplicables y qué nivel de preparación tiene la organización para cumplirlos.

**GESTIONAR LOS ASUNTOS SENSIBLES:**

Cómo presentar un litigio con exposición significativa sin generar alarma desproporcionada. Cómo informar de un incumplimiento normativo que requiere remediation de manera que la comunicación sea proactiva y ordenada. Cómo gestionar la presión del board para que el abogado dé certezas que el derecho no permite.

Ayúdame a construir una presentación jurídica al consejo que informe con precisión, calibre el riesgo correctamente y posicione al área jurídica como un socio estratégico que añade valor a la toma de decisiones del órgano de gobierno.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Comunicación de riesgos jurídicos al consejo de administración con precisión y claridad estratégica',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'QBR (Quarterly Business Review): la presentación que renueva contratos',
                'description'       => 'Diseña y ejecuta Quarterly Business Reviews que demuestren el valor entregado al cliente, fortalezcan la relación ejecutiva y creen las condiciones para la renovación y la expansión del contrato.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Customer Success Manager senior o VP de CS con experiencia en la preparación y ejecución de QBRs (Quarterly Business Reviews) en empresas SaaS y de servicios. El QBR es la presentación más importante del ciclo de vida de un cliente, y hacerlo bien puede ser la diferencia entre la renovación y el churn, entre una cuenta estable y una cuenta en expansión. Necesito preparar un QBR que genere el impacto correcto.

**Contexto del QBR:**
1. ¿Con qué tipo de cliente es el QBR: cuál es el sector, el tamaño de la empresa, y cuál es el producto o servicio que están usando?
2. ¿Cuál ha sido la salud de la cuenta durante el trimestre: buena adopción y buenos resultados, adopción baja, problemas de servicio, o una combinación?
3. ¿Quiénes estarán presentes por parte del cliente: el sponsor ejecutivo, el equipo operativo, ambos?
4. ¿Está el contrato próximo a la renovación y hay alguna señal de riesgo de churn o de oportunidad de expansión?

**EL ERROR MÁS FRECUENTE EN LOS QBR:**

La mayoría de los QBRs son presentaciones unidireccionales de métricas de uso del producto, no conversaciones estratégicas sobre el valor que el cliente está obteniendo y los objetivos que quiere alcanzar en el próximo trimestre. Ese error convierte el QBR en un informe que el cliente podría leer solo, y reduce el valor percibido de la relación con el CS. Ayúdame a construir un QBR genuinamente diferente:

El QBR correcto empieza con los objetivos del cliente (no con las métricas del producto), demuestra cómo el producto está contribuyendo a esos objetivos con evidencia concreta, identifica los obstáculos que impiden una mayor contribución y propone un plan de acción para el próximo trimestre que el cliente y el CSM construyen juntos.

**LA ESTRUCTURA DEL QBR EFECTIVO:**

Apertura ejecutiva: en los primeros cinco minutos, cuál es el estado de la relación y cuál es el mensaje principal de la reunión. Si ha sido un buen trimestre, cómo capturar los hitos más importantes. Si ha habido problemas, cómo abrir la conversación reconociéndolos antes de que el cliente lo haga.

Los objetivos del cliente y el progreso: empezar por los objetivos de negocio que el cliente tenía al inicio del trimestre (o al inicio de la relación), no por las métricas del producto. ¿Qué quería conseguir el cliente y en qué medida lo ha conseguido? Esta estructura convierte el QBR de un informe de adopción a una conversación de éxito.

El valor demostrado con evidencia: cuantificar el impacto del producto en los resultados del cliente. No "habéis enviado 10.000 emails"; sino "habéis generado X oportunidades a través de vuestra campaña de email, con una tasa de conversión del Y%, lo que equivale a Z de ingresos atribuibles". Cómo construir ese nivel de evidencia cuando los datos no son directamente accesibles.

Los obstáculos y las oportunidades: qué está impidiendo que el cliente obtenga más valor del producto (falta de adopción en ciertos equipos, funcionalidades no utilizadas, integraciones pendientes) y qué oportunidades hay para ampliar el impacto en el próximo trimestre.

El plan para el próximo trimestre: los compromisos concretos de ambas partes para el período siguiente. No solo los del CSM y del equipo de producto; también los del cliente (qué va a hacer, qué recursos va a poner). Esto es lo que convierte el QBR en una alianza de trabajo, no en una auditoría unilateral.

**GESTIONAR LOS QBRS DIFÍCILES:**

Cómo hacer un QBR cuando el trimestre ha ido mal: problemas de servicio, baja adopción, resultados por debajo de las expectativas del cliente. La honestidad con contexto y con un plan de mejora claro genera más confianza que intentar minimizar los problemas.

Cómo usar el QBR para iniciar una conversación de expansión sin que parezca una reunión de ventas disfrazada de revisión de valor.

Cómo gestionar al sponsor ejecutivo que tiene 20 minutos en lugar de la hora planificada: cómo adaptar el QBR en tiempo real para asegurar que los mensajes más importantes se comunican.

Ayúdame a preparar un QBR que el cliente vea como la reunión más valiosa de su trimestre, no como una obligación contractual.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Preparación y ejecución de Quarterly Business Reviews que refuercen la renovación y la expansión',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Presentar propuestas y resultados: convencer al cliente con claridad',
                'description'       => 'Diseña presentaciones de propuestas y de resultados para clientes que generen confianza, comuniquen el valor de tu trabajo de manera irrefutable y construyan la relación que sostiene la colaboración a largo plazo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un freelance senior con experiencia en la presentación de propuestas a nuevos clientes y en la comunicación de resultados a clientes actuales, en diferentes sectores y para diferentes tipos de proyectos. La capacidad de presentar bien es para un freelance tan importante como la calidad del trabajo en sí mismo, porque determina qué proyectos consigues y qué percepción tiene el cliente del valor que entregas. Necesito mejorar ambas dimensiones.

**Contexto de la presentación:**
1. ¿Qué tipo de presentación necesitas preparar: una propuesta para un nuevo cliente, una presentación de resultados a un cliente actual, o ambas?
2. ¿Cuál es tu especialidad: diseño, desarrollo, consultoría, marketing, comunicación, formación, u otra?
3. ¿Cuál es el tamaño y perfil del cliente: pequeño negocio, empresa mediana, corporación, o institución?
4. ¿Hay algún contexto específico que deba conocer: el cliente ha comparado propuestas de otros freelances, hubo un proyecto anterior con problemas, o hay un presupuesto muy ajustado?

**PRESENTAR UNA PROPUESTA QUE GANA:**

La diferencia entre una propuesta que se lee como un presupuesto y una propuesta que se lee como una alianza estratégica es la narrativa. Ayúdame a construir la narrativa correcta:

Empieza por el problema del cliente, no por tu solución. Demuestra que has entendido qué está intentando conseguir el cliente, qué obstáculo o dolor estás resolviendo, y por qué es importante resolverlo ahora. Cuando el cliente lee su propio problema bien articulado, ya está convencido de que necesita la solución antes de que la hayas presentado.

La solución con la lógica detrás: no solo qué vas a hacer, sino por qué ese enfoque es el más adecuado para su situación específica. Qué alternativas consideraste y por qué las descartaste. Esta parte demuestra experiencia y criterio, que es exactamente lo que el cliente está comprando cuando contrata a un freelance.

Los entregables con criterios de éxito: qué recibirá el cliente exactamente, en qué formato, en qué plazo, y cómo sabrá que el resultado es el correcto. Los criterios de éxito acordados en la propuesta son la base de una relación sin malentendidos.

El precio con su justificación de valor: no el desglose de horas por tarifa, sino la relación entre la inversión y el resultado esperado. Si el proyecto va a generar X de valor para el cliente, la inversión de Y tiene un retorno evidente. Cómo hacer esa argumentación de manera natural, sin sonar calculador.

**PRESENTAR RESULTADOS QUE GENERAN CONTINUIDAD:**

Las presentaciones de resultados son el momento más importante para consolidar la relación con un cliente existente y crear las condiciones para la siguiente colaboración. Cómo estructurar esa presentación:

Los resultados en términos de negocio del cliente, no en términos de actividades realizadas. "Entregué 20 piezas de contenido" no es un resultado; "el contenido generó X visitas y Y leads cualificados en el período" es un resultado. Cómo hacer esa traducción cuando los datos no son directamente accesibles o el impacto es más cualitativo que cuantitativo.

El aprendizaje del proyecto: qué funcionó mejor de lo esperado, qué no funcionó como se esperaba y qué harías diferente en la siguiente iteración. Esta honestidad reflexiva genera más confianza que una presentación de resultados perfectos.

El siguiente paso natural: cómo usar la presentación de resultados para iniciar la conversación sobre la continuidad de la colaboración de manera que sea una consecuencia lógica de los resultados, no una venta forzada.

**ADAPTACIÓN A DIFERENTES TIPOS DE CLIENTES:**

Cómo adaptar el nivel de detalle y el lenguaje de la presentación según el perfil del cliente: el fundador de una startup que necesita ver impacto rápido, el director de marketing de una mediana empresa que necesita justificar la inversión ante su dirección, o el responsable de compras de una corporación que sigue un proceso formal de evaluación de proveedores.

Ayúdame a construir un sistema de presentación de propuestas y resultados que convierta mi capacidad técnica en valor percibido por el cliente y genere la confianza que sostiene colaboraciones largas y satisfactorias para ambas partes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Presentación de propuestas y resultados que generan confianza y continuidad con el cliente',
                'vote_score'        => 40,
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
