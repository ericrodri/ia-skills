<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills181Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Presentaciones de marketing al board',
                'description'       => 'Estructura y presenta los resultados del trimestre, el budget y la estrategia ante el comité de dirección con slides de impacto y manejo eficaz de las preguntas difíciles.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach experto en comunicación ejecutiva y presentaciones de marketing. Voy a presentar los resultados del trimestre, el estado del presupuesto y la estrategia de marketing al comité de dirección de mi empresa. Necesito tu ayuda para preparar esta presentación de forma exhaustiva.

**Contexto que necesito que me pidas al inicio:**
Antes de comenzar, hazme las siguientes preguntas para personalizar la ayuda:
1. ¿Cuál es el sector de tu empresa y el tamaño aproximado?
2. ¿Cuánto tiempo tienes para la presentación?
3. ¿Cuáles fueron los resultados más destacados del trimestre?
4. ¿Qué resultados fueron por debajo de lo esperado y cuál fue la causa?
5. ¿Cuál es el presupuesto que necesitas justificar o solicitar?
6. ¿Qué decisiones estratégicas quieres que el board apruebe o respalde?
7. ¿Qué perfil tienen los miembros del board? ¿Son más financieros, operativos o comerciales?

**Estructura de la presentación que vamos a construir:**

BLOQUE 1 — APERTURA EJECUTIVA (2-3 minutos)
Diseña una apertura que capture la atención del board desde el primer segundo. El board no quiere escuchar una introducción larga; quieren saber desde el minuto uno si la función de marketing está entregando valor. Ayúdame a construir una frase de apertura que resume el trimestre en una sola proposición: el número más importante, la lectura estratégica y la implicación para el negocio.

BLOQUE 2 — RESULTADOS VERSUS OBJETIVOS
Ayúdame a presentar los KPIs de marketing de manera que un CFO o CEO los entienda inmediatamente sin jerga de marketing. Necesito traducir métricas como CPL, MQL, tasa de conversión, share of voice e impresiones a lenguaje de negocio: pipeline generado, coste de adquisición de cliente, retorno sobre inversión en marketing y contribución al revenue.

Indica cómo presentar los resultados positivos con modestia ejecutiva (sin exceso de celebración que reste credibilidad) y cómo presentar los resultados negativos con honestidad y con el plan de corrección ya preparado, de modo que el board sienta que tienes el control.

BLOQUE 3 — ANÁLISIS CAUSAL
El board no solo quiere números; quiere entender el porqué. Ayúdame a construir una narrativa causal que explique qué acciones produjeron qué resultados, qué factores externos afectaron positiva o negativamente y cuáles son los aprendizajes que informarán la estrategia del siguiente trimestre.

BLOQUE 4 — ESTADO DEL PRESUPUESTO
Presenta el estado de ejecución presupuestaria de manera que justifique cada euro gastado en términos de retorno. Ayúdame a estructurar la comparativa entre presupuesto aprobado, gasto real y ROI obtenido por categoría (paid media, contenido, eventos, tecnología, equipo). Si hay desviaciones, prepara la justificación.

BLOQUE 5 — ESTRATEGIA DEL SIGUIENTE TRIMESTRE
Presenta el plan del siguiente trimestre como consecuencia lógica de los aprendizajes del trimestre actual. Ayúdame a conectar los datos pasados con las decisiones futuras de manera que el board sienta que la estrategia está basada en evidencia y no en intuición. Incluye los tres o cuatro iniciativas prioritarias con sus métricas de éxito.

BLOQUE 6 — SOLICITUD DE DECISIÓN O RECURSOS
Si necesito solicitar presupuesto adicional, aprobación de una nueva iniciativa o alineación estratégica, ayúdame a formular la solicitud de manera directa y con la justificación de negocio correspondiente. El board respeta la concreción: "necesito X para lograr Y en el plazo Z".

BLOQUE 7 — ANTICIPACIÓN DE PREGUNTAS DIFÍCILES
Prepara una lista de las 10 preguntas más difíciles que puede hacerme el board en función de los resultados del trimestre y dame respuestas modelo que sean honestas, precisas y que refuercen mi credibilidad como responsable de marketing. Las preguntas difíciles típicas incluyen: "¿Por qué gastamos tanto en marketing y las ventas no crecieron?", "¿Cómo medimos el retorno real del marketing?", "¿Podríamos conseguir los mismos resultados con menos presupuesto?".

DISEÑO DE SLIDES
Dame recomendaciones para el diseño de los slides de la presentación al board: cuántos slides usar, qué información va en cada uno, el uso correcto de los gráficos (cuáles visualizan mejor cada tipo de dato), y el principio del "una idea por slide" aplicado a presentaciones ejecutivas.

COMPORTAMIENTO DURANTE LA PRESENTACIÓN
Dame consejos específicos para gestionar la dinámica de la sala durante la presentación al board: cómo manejar las interrupciones, cómo responder cuando no tienes la respuesta inmediata, cómo gestionar el tiempo cuando las preguntas se extienden y cómo leer las señales no verbales del board para ajustar el ritmo.

Guíame paso a paso por cada uno de estos bloques y ayúdame a construir una presentación al board que refuerce mi posición como líder de marketing estratégico dentro de la organización.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Preparación de presentaciones de marketing para el comité de dirección',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Tech talks y conferencias de developers',
                'description'       => 'Estructura y prepara tus charlas técnicas para meetups, conferencias o all-hands de ingeniería con demos en vivo impecables y gestión efectiva de las preguntas del público técnico.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en comunicación técnica y presentaciones para desarrolladores con experiencia en conferencias como JSConf, PyCon, KubeCon y meetups de tecnología. Voy a dar una charla técnica y necesito tu ayuda para prepararla desde cero hasta el día del evento.

**Preguntas iniciales para personalizar la ayuda:**
1. ¿Cuál es el tema técnico de tu charla?
2. ¿Cuál es el evento: meetup local, conferencia nacional o all-hands de ingeniería?
3. ¿Cuánto tiempo tienes para la charla?
4. ¿Cuál es el nivel técnico esperado de la audiencia?
5. ¿Tienes pensado incluir demos en vivo, live coding o demos grabadas?
6. ¿Es tu primera charla técnica o ya tienes experiencia hablando en público?

**ESTRUCTURA DE LA CHARLA TÉCNICA:**

HOOK DE APERTURA
El público técnico tiene muy poca tolerancia para las introducciones genéricas. Ayúdame a abrir con algo que enganche inmediatamente: un problema real que han vivido, una estadística sorprendente, una demo que muestra el resultado final antes de explicar cómo funciona, o una pregunta que hace que el público se sienta identificado. Los mejores tech talks abren con "déjame mostrarte algo" en lugar de "hoy voy a hablaros de".

EL ARCO NARRATIVO TÉCNICO
Las charlas técnicas memorables tienen una estructura narrativa, no solo una enumeración de conceptos. Ayúdame a construir el arco: el problema que todos reconocen, por qué las soluciones existentes no son suficientes, la revelación de la solución nueva y la demostración de que funciona. Este arco mantiene al público enganchado incluso cuando el contenido es denso.

ESTRUCTURA DE CONTENIDO
Dame una propuesta de estructura para mis slides con el tiempo asignado a cada sección. Indícame cuántos slides son apropiados para el tiempo disponible, cómo balancear el contenido conceptual con las demos y cuál es la densidad de información correcta por slide para una audiencia técnica que no quiere que le expliquen lo obvio pero sí necesita contexto suficiente.

DEMOS EN VIVO Y LIVE CODING
Las demos en vivo son el corazón de una buena charla técnica pero también el mayor riesgo. Ayúdame a planificar las demos para que sean impactantes y seguras:
- Cómo estructurar el código para que sea legible en pantalla grande
- Qué configuración de entorno preparar antes (fuentes grandes, tema de color de alto contraste, terminal limpia)
- Cómo tener un plan B si algo falla (demos grabadas de respaldo)
- Cómo hacer live coding de manera que el público pueda seguir el ritmo
- Cómo comentar el código mientras lo escribes de manera natural

GESTIÓN DEL TIEMPO
Una charla técnica puede descontrolarse fácilmente si las demos se extienden o si el público interrumpe con preguntas. Ayúdame a diseñar la charla con señales de tiempo internas, cómo saber si voy rápido o lento a mitad de la charla y cómo comprimir o expandir el contenido sobre la marcha sin perder la estructura.

SESIÓN DE PREGUNTAS Y RESPUESTAS
El Q&A de una charla técnica puede ser complicado: preguntas que cuestionan tu enfoque, preguntas que van más allá de tu conocimiento, o preguntas que en realidad son comentarios disfrazados. Ayúdame a preparar:
- Las 8 preguntas técnicas más probables en función del tema
- Cómo responder con honestidad cuando no sabes la respuesta
- Cómo manejar al que viene a demostrar que sabe más que tú
- Cómo gestionar el tiempo del Q&A para que no se extienda

GESTIÓN DE LOS NERVIOS
Los developers que hablan en público por primera vez (o incluso los experimentados) enfrentan ansiedad. Dame estrategias concretas para gestionar los nervios antes y durante la charla, cómo recuperarse de un error o un silencio incómodo y cómo usar la tensión de manera constructiva para mantener la energía.

MATERIALES POST-CHARLA
Una buena charla técnica genera comunidad más allá del evento. Ayúdame a planificar los materiales de seguimiento: el repositorio de código con las demos, los slides en formato accesible, el post de blog que resume los puntos clave y cómo gestionar las preguntas que llegan después por redes sociales o email.

Guíame por cada uno de estos bloques para que llegue al día de la charla con la preparación máxima y la confianza de quien sabe exactamente qué va a decir y cómo va a reaccionar a lo inesperado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Preparación de charlas técnicas para meetups y conferencias de desarrollo',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Crítica de diseño y portfolio review',
                'description'       => 'Estructura tus presentaciones de diseño para recibir feedback constructivo: el lenguaje de las decisiones de diseño y cómo manejar la crítica sin ponerte a la defensiva.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de diseño con amplia experiencia en critique sessions, portfolio reviews y presentaciones de trabajo de diseño ante stakeholders y equipos de producto. Voy a presentar mi trabajo de diseño y necesito ayuda para hacerlo de manera efectiva.

**Preguntas iniciales:**
1. ¿Qué tipo de trabajo vas a presentar: un proyecto concreto, tu portfolio completo o una propuesta de diseño?
2. ¿Quién es la audiencia: tu equipo de diseño, product managers, executives o un potencial empleador?
3. ¿Cuál es el objetivo de la sesión: recibir feedback, obtener aprobación para avanzar o conseguir un empleo?
4. ¿En qué fase está el trabajo: exploración inicial, propuesta definida o diseño final?

**EL LENGUAJE DE LAS DECISIONES DE DISEÑO:**

La diferencia entre un diseñador junior y uno senior no está solo en el trabajo, sino en cómo lo presenta. Un junior dice "elegí este color porque me gusta". Un senior dice "elegí este color porque resuelve el problema de jerarquía visual entre el CTA primario y el secundario, lo que según los datos de la última prueba A/B aumentó el CTR en un 18%". Ayúdame a reformular cada decisión de diseño de mi trabajo utilizando este framework:
- El problema que resuelve la decisión
- La alternativa que consideré y por qué la descarté
- Los principios de diseño o datos que respaldan la decisión
- El impacto esperado o medido en el usuario o el negocio

**ESTRUCTURA DE LA PRESENTACIÓN DE DISEÑO:**

CONTEXTO Y PROBLEMA
Nunca presentes el diseño sin contexto. Ayúdame a construir la apertura que sitúa al público en el problema: quién es el usuario, cuál era el problema a resolver, cuáles eran las restricciones (técnicas, de negocio, de tiempo) y cuál era el estado inicial. Sin este contexto, el feedback que recibirás será superficial y sobre estética en lugar de sobre si el diseño resuelve el problema.

EL PROCESO, NO SOLO EL RESULTADO
Los mejores reviews de diseño muestran el pensamiento detrás del resultado. Ayúdame a narrar el proceso: las exploraciones iniciales, los cul-de-sac que no funcionaron, las hipótesis que se refutaron con usuarios y los pivotes que hicieron que el diseño llegara a donde está. Esto genera mucho más confianza que presentar solo el resultado final pulido.

LOS FLOWS Y LAS INTERACCIONES
Ayúdame a presentar los user flows y las interacciones de manera que el público pueda seguirlos sin perderse: cómo mostrar el antes y el después, cómo animar o simular las interacciones sin tener un prototipo perfecto y cómo guiar la mirada del público a través del diseño.

**CÓMO MANEJAR EL FEEDBACK Y LA CRÍTICA:**

Recibir crítica es una de las habilidades más difíciles del diseño. Dame un protocolo concreto para manejar el feedback en el momento:
- Cómo escuchar sin interrumpir ni ponerse a la defensiva
- La frase que diferencia el feedback de opinión del feedback de usabilidad
- Cómo responder cuando el feedback contradice una decisión que tomaste conscientemente
- Cómo manejar el feedback de alguien con menos conocimiento de diseño pero más autoridad
- Cómo cerrar la sesión con una lista de acciones claras en lugar de una nube de opiniones

**CRITIQUE SESSIONS EN EQUIPO:**

Ayúdame también a facilitar critique sessions con mi equipo de diseño cuando soy yo el que da el feedback:
- El formato del "I like, I wish, what if" y cuándo usarlo
- Cómo dar feedback específico y accionable en lugar de opiniones vagas
- Cómo crear un ambiente donde los diseñadores más junior se atrevan a compartir su trabajo
- Las reglas de una critique session efectiva

**PORTFOLIO REVIEW:**

Si el objetivo es un portfolio review para un proceso de selección, ayúdame a seleccionar y narrar los proyectos que mejor demuestran mi nivel y el tipo de trabajo que quiero hacer, cómo responder a "cuéntame sobre este proyecto" de manera que demuestre mi proceso de pensamiento y cómo manejar las preguntas sobre proyectos que no salieron bien.

Dame orientación práctica para cada uno de estos aspectos y ayúdame a construir una presentación de diseño que demuestre tanto la calidad del trabajo como la solidez del pensamiento detrás de él.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Presentación de trabajo de diseño y gestión de critique sessions',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Presentaciones de ventas que cierran',
                'description'       => 'El pitch de ventas estructurado que mueve al cliente a la siguiente etapa: apertura, descubrimiento, propuesta y cierre con confianza y sin presión innecesaria.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach de ventas consultivas con más de 15 años de experiencia en ciclos de venta B2B complejos. Voy a preparar una presentación de ventas y necesito ayuda para estructurarla de manera que mueva al cliente de forma natural hacia el cierre.

**Preguntas iniciales para personalizar:**
1. ¿Cuál es el producto o servicio que vendes?
2. ¿En qué fase del proceso estás: primera reunión, presentación de propuesta o reunión de cierre?
3. ¿Cuál es el perfil del cliente y quiénes estarán presentes en la reunión?
4. ¿Qué sabes sobre las necesidades y los problemas del cliente hasta ahora?
5. ¿Cuál es el valor medio del contrato y el ciclo de venta habitual?

**APERTURA QUE ESTABLECE EL TONO:**

Los primeros 60 segundos de una presentación de ventas determinan si el cliente está en modo receptivo o en modo defensivo. Ayúdame a construir una apertura que establezca que esta reunión es para resolver los problemas del cliente, no para venderle algo. La diferencia entre "voy a presentarles nuestra solución" y "me gustaría entender mejor su situación para ver si podemos ayudarles" es la diferencia entre una venta transaccional y una venta consultiva.

**DESCUBRIMIENTO DENTRO DE LA PRESENTACIÓN:**

Incluso en una presentación de propuesta, el mejor vendedor sigue descubriendo. Ayúdame a insertar preguntas de descubrimiento estratégicas en la presentación que validan los supuestos, profundizan en el dolor y conectan al cliente emocionalmente con el problema antes de presentar la solución. Las preguntas SPIN (Situación, Problema, Implicación, Necesidad) aplicadas en el contexto de la presentación.

**LA PROPUESTA DE VALOR PERSONALIZADA:**

Dame una estructura para presentar la propuesta de valor de manera que el cliente sienta que fue diseñada específicamente para él (aunque tengamos un producto estándar). Cómo conectar cada característica del producto con un dolor específico que el cliente expresó, cómo usar el lenguaje del cliente en la presentación y cómo cuantificar el valor en términos que el cliente mide (su KPI, no el nuestro).

**MANEJO DE OBJECIONES EN EL ACTO:**

Las objeciones no son el fin de la venta; son el comienzo del cierre real. Ayúdame a preparar las respuestas a las 8 objeciones más frecuentes en mi sector y dame el framework general para manejar cualquier objeción:
- Validar la objeción sin conceder que es un problema insuperable
- Hacer la pregunta que revela si la objeción es real o es una cortina de humo
- Reformular la objeción como una pregunta que abre la negociación
- El cierre de prueba después de manejar la objeción

**LAS TÉCNICAS DE CIERRE:**

No todas las reuniones terminan con firma. Pero todas deben terminar con un siguiente paso concreto. Ayúdame a planificar cómo cerrar la reunión dependiendo de la señal que recibo: cómo hacer el cierre directo cuando las señales son positivas, cómo proponer un siguiente paso cuando el cliente necesita más tiempo, cómo manejar el "lo pensamos y te decimos" sin perder el momentum y cuándo es apropiado crear urgencia y cuándo es contraproducente.

**MATERIALES DE APOYO:**

Los slides, las propuestas escritas y los casos de éxito son herramientas de apoyo, no el núcleo de la presentación. Ayúdame a diseñar los materiales de manera que complementen la conversación en lugar de dominarla: cuándo mostrar los slides y cuándo apartarlos, cómo usar un caso de éxito sin que parezca un anuncio y cómo dejar un leave-behind que mantenga la propuesta viva después de la reunión.

Construye conmigo una presentación de ventas que sea honesta, consultiva y que genere confianza suficiente para que el cliente quiera avanzar a la siguiente etapa.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Preparación de presentaciones de ventas consultivas B2B',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'All-hands y product reviews',
                'description'       => 'Presenta el estado del producto a toda la empresa generando alineación en audiencias heterogéneas con el balance correcto entre detalles técnicos y visión estratégica.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Chief Product Officer con experiencia en comunicación de producto a audiencias internas de empresas de tecnología. Necesito preparar un all-hands de producto o una product review y quiero que me ayudes a construir una presentación que genere alineación real en toda la organización.

**Preguntas iniciales:**
1. ¿Es un all-hands de empresa o una product review con stakeholders específicos?
2. ¿Cuántas personas asistirán y cuál es la mezcla de roles (ingeniería, ventas, marketing, soporte, ejecutivos)?
3. ¿Cuál es el estado actual del producto: en construcción, recién lanzado, iterando o pivotando?
4. ¿Hay decisiones difíciles o cambios de dirección que necesitas comunicar?
5. ¿Cuánto tiempo tienes para la presentación?

**EL RETO DE LA AUDIENCIA HETEROGÉNEA:**

El mayor desafío de un all-hands de producto es que hay ingenieros que quieren detalles técnicos, vendedores que quieren saber cuándo pueden vender algo nuevo, ejecutivos que quieren ver progreso hacia los objetivos de negocio y equipos de soporte que quieren entender qué cambia para los clientes. Ayúdame a construir una narrativa única que sea relevante para todos sin perder la atención de ninguno. El secreto está en el nivel correcto de abstracción: suficientemente concreto para que la ingeniería sienta que entiendes el trabajo real, suficientemente estratégico para que los ejecutivos vean el progreso hacia los OKRs.

**ESTRUCTURA DEL ALL-HANDS DE PRODUCTO:**

APERTURA CON EL NORTE
Empieza con el por qué: la misión del producto y cómo lo que se va a presentar avanza hacia ella. No empieces con "hemos lanzado X feature". Empieza con "el problema que estamos resolviendo para nuestros usuarios es Y, y este trimestre hemos avanzado significativamente hacia resolverlo porque...". Esta apertura alinea antes de entrar en los detalles.

EL ESTADO DEL PRODUCTO
Presenta el estado del producto en tres dimensiones: qué hemos entregado, qué estamos construyendo ahora y hacia dónde vamos. Ayúdame a presentar esto de manera visual y fácil de recordar. El roadmap no es una lista de features; es una narrativa de cómo el producto evoluciona para resolver mejor el problema del usuario.

LAS MÉTRICAS QUE IMPORTAN
Selecciona y presenta las métricas de producto que son comprensibles y relevantes para toda la audiencia: no solo MAU o retention rate, sino también el impacto en el negocio (revenue, churn, soporte). Ayúdame a conectar las métricas de producto con las métricas de negocio de manera que todo el mundo vea la relación entre el trabajo del equipo de producto y los resultados de la empresa.

LAS DECISIONES DIFÍCILES
Si hay un pivote, una feature que no se va a construir, un retraso o un cambio de prioridades, hay que comunicarlo con honestidad. Ayúdame a presentar las decisiones difíciles de manera que la gente entienda el razonamiento, respete la decisión aunque no la comparta y mantenga la confianza en el equipo de producto.

TIEMPO PARA PREGUNTAS Y FEEDBACK
Diseña el formato del Q&A para que genere conversación real y no solo preguntas fáciles. Cómo animar a la gente a hacer las preguntas que realmente tienen (incluidas las incómodas), cómo manejar las preguntas para las que no tengo respuesta todavía y cómo convertir el Q&A en una fuente de información sobre lo que preocupa a la organización.

**LA PRODUCT REVIEW CON STAKEHOLDERS:**

Si es una product review más formal con liderazgo, ayúdame a adaptar el formato para que sea una sesión de toma de decisiones y no solo una actualización: cómo presentar las opciones estratégicas, cómo pedir al liderazgo que tome posición sobre las prioridades y cómo salir de la reunión con decisiones claras y documentadas.

Construye conmigo una presentación que genere el nivel de alineación y confianza que un equipo de producto necesita de toda la organización para trabajar con autonomía y velocidad.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Preparación de all-hands y product reviews para audiencias internas heterogéneas',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Presentaciones de gestión del cambio',
                'description'       => 'Comunica cambios organizacionales ante audiencias escépticas con la estructura que gestiona la resistencia, las preguntas difíciles y el formato que genera aceptación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en gestión del cambio organizacional y comunicación interna con experiencia en reestructuraciones, transformaciones digitales y cambios culturales en empresas de todos los tamaños. Necesito comunicar un cambio organizacional importante y quiero hacerlo de manera que genere comprensión y aceptación, no solo resistencia.

**Preguntas iniciales:**
1. ¿Cuál es el cambio que necesitas comunicar? (reestructuración, nuevo sistema, cambio de proceso, fusión, reducción de plantilla, etc.)
2. ¿A quién se lo vas a comunicar: toda la empresa, un departamento, los mandos intermedios?
3. ¿Cómo de impactados están los que van a escucharte por este cambio?
4. ¿Ya está tomada la decisión o todavía hay margen de participación de los empleados?
5. ¿Cuándo entra en vigor el cambio?

**EL PRINCIPIO FUNDAMENTAL DE LA COMUNICACIÓN DEL CAMBIO:**

La resistencia al cambio no es irracional; es una respuesta natural a la incertidumbre. La gente no se resiste al cambio en sí; se resiste a la pérdida de lo conocido y al miedo a lo desconocido. Ayúdame a construir una comunicación que reconozca explícitamente estas emociones antes de presentar los argumentos racionales. La estructura CIPD (Contexto, Impacto, Plan, Decisión) adaptada a la gestión del cambio.

**ESTRUCTURA DE LA PRESENTACIÓN DE CAMBIO:**

APERTURA CON RESPETO
Empieza reconociendo que lo que vas a decir impacta a las personas que tienes delante. No empieces con "tengo buenas noticias" si el cambio implica pérdidas para ellos. No empieces con datos y gráficos si la gente está preocupada por su trabajo. Ayúdame a construir una apertura que establezca empatía antes de información.

EL CONTEXTO DEL CAMBIO
Explica el por qué del cambio con honestidad. La gente detecta inmediatamente cuándo le están ocultando información o adornando la realidad. Si el cambio se produce porque el negocio va mal, dilo. Si es porque hay una oportunidad que requiere reorganización, explícala. La transparencia en el contexto es el primer paso para generar confianza.

EL IMPACTO CONCRETO
Sé específico sobre quién se ve afectado, cómo y cuándo. La vaguedad genera ansiedad. "Habrá ajustes en algunos equipos" es mucho más perturbador que "el departamento de X va a pasar de 10 a 7 personas en las próximas 6 semanas". Ayúdame a comunicar el impacto con la máxima concreción posible dentro de lo que puedo decir en este momento.

EL PLAN DE TRANSICIÓN
Presenta el plan de transición con los hitos concretos: qué pasa cuándo, quién es responsable de qué y qué soporte tendrán los afectados. Un cambio sin plan de transición visible genera el caos que la gente teme. El plan de transición es la prueba de que la organización ha pensado más allá del anuncio.

LAS PREGUNTAS DIFÍCILES
Prepara las respuestas a las 10 preguntas más difíciles que me pueden hacer. En cambios organizacionales, las preguntas difíciles incluyen: "¿Por qué no nos consultasteis antes de tomar esta decisión?", "¿Mi puesto está en riesgo?", "¿Quién tomó esta decisión y por qué?", "¿Qué pasa si no estoy de acuerdo?". Dame respuestas honestas que no evadan la pregunta pero que tampoco prometan lo que no puedo prometer.

EL FINAL DE LA COMUNICACIÓN
Cierra la comunicación del cambio con un mensaje que reconozca que el proceso será difícil pero que la organización lo atravesará junta. Da a la gente un canal claro para hacer preguntas en privado, expresa tu disposición a escuchar y establece los próximos pasos concretos.

**COMUNICACIÓN EN CASCADA:**

Si el cambio se comunica en cascada a través de los mandos intermedios, ayúdame a preparar a los managers para que transmitan el mensaje de manera consistente: los puntos clave que deben comunicar, las preguntas que van a recibir y las respuestas que pueden dar, y los límites de lo que pueden decir en este momento.

Dame la estructura y el lenguaje para una comunicación de cambio organizacional que respete a las personas, sea honesta sobre la realidad y construya la confianza necesaria para que la organización atraviese el cambio con la menor fricción posible.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Comunicación de cambios organizacionales con gestión de la resistencia',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Earnings calls y presentaciones a inversores',
                'description'       => 'Comunica los resultados financieros de la empresa ante analistas e inversores con el formato, el lenguaje y la confianza que mantiene la credibilidad incluso cuando los números son difíciles.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un asesor especializado en relaciones con inversores (IR) y comunicación financiera con experiencia en earnings calls de empresas cotizadas y presentaciones a fondos de capital riesgo e inversores privados. Necesito preparar una comunicación de resultados financieros y quiero hacerlo con máxima efectividad y credibilidad.

**Preguntas iniciales:**
1. ¿Es un earnings call de empresa cotizada, una presentación a inversores privados o un pitch a capital riesgo?
2. ¿Cuáles son los resultados que vas a presentar? ¿Son positivos, mixtos o decepcionantes?
3. ¿Cuánto tiempo tienes para la presentación?
4. ¿Hay un guidance que dar para el siguiente trimestre o año?
5. ¿Hay circunstancias especiales que explicar (adquisición, reestructuración, impacto de mercado)?

**EL LENGUAJE FINANCIERO QUE GENERA CONFIANZA:**

Los inversores experimentados tienen un detector muy fino del doble lenguaje. Reconocen inmediatamente cuándo un CEO está optimizando el mensaje en lugar de comunicando la realidad. Ayúdame a construir un lenguaje que sea honesto, preciso y que al mismo tiempo enmarque los resultados de manera estratégica sin manipular los hechos. La diferencia entre "los resultados estuvieron por debajo de las expectativas del mercado debido a factores macro que afectaron al sector" (correcto) y "tuvimos un trimestre difícil y no alcanzamos nuestros propios objetivos" (más honesto pero requiere contexto) y "batimos las expectativas revisadas que publicamos en enero" (que puede ser engañoso si las expectativas se revisaron a la baja expresamente para batirlas).

**ESTRUCTURA DEL EARNINGS CALL:**

APERTURA EJECUTIVA
El CEO o el portavoz principal abre con el mensaje clave del trimestre en 2-3 frases. Ayúdame a construir una opening statement que establezca el tono: orgulloso pero sin exceso cuando los resultados son buenos, honesto pero con control cuando son malos. La apertura del earnings call se cita en los titulares.

REVISIÓN DE LOS RESULTADOS FINANCIEROS
El CFO presenta los resultados con el nivel de detalle que esperan los analistas: ingresos, gross margin, EBITDA, free cash flow, ARR, churn, net revenue retention y las métricas operativas del sector. Ayúdame a estructurar la presentación de los resultados de manera que los números cuenten una historia coherente.

CUANDO LOS NÚMEROS SON DIFÍCILES
Si los resultados están por debajo de las expectativas, ayúdame a presentarlos con la estructura que mantiene la credibilidad:
- Reconocer los miss sin excusas pero con contexto real
- Separar los factores que están bajo control del management de los factores externos
- Presentar las acciones concretas que se están tomando para corregir el rumbo
- No dar guidance que no puedas cumplir solo para calmar a los mercados

EL GUIDANCE PARA EL SIGUIENTE PERÍODO
El guidance es el elemento más delicado del earnings call: si es demasiado optimista, dañarás la credibilidad en el siguiente trimestre; si es demasiado conservador, el mercado lo puede interpretar como una señal de alarma. Ayúdame a establecer un guidance que sea honesto, basado en la visibilidad real del negocio y comunicado con la precisión que los analistas necesitan.

PREGUNTAS DE LOS ANALISTAS
Prepara las respuestas a las 10 preguntas más difíciles que pueden hacer los analistas en función de los resultados. Las preguntas difíciles típicas incluyen: "¿Cómo explican la diferencia entre el guidance que dieron en Q2 y los resultados de Q3?", "¿Cuánto runway les queda con el burn actual?", "¿Han considerado las implicaciones de [hecho de mercado] en su modelo de negocio?". Dame respuestas que sean directas, informativas y que no generen más incertidumbre.

**PRESENTACIONES A CAPITAL RIESGO E INVERSORES PRIVADOS:**

Si es una presentación a inversores privados, adapta el formato a la dinámica del fundraising: cómo abrir con la tesis de inversión, cómo presentar el mercado, el producto y el equipo de manera que genere convicción y cómo gestionar las due diligence questions con transparencia.

Ayúdame a preparar una comunicación financiera que refuerce la confianza de los inversores y demuestre que el management team tiene claridad sobre el negocio, sus retos y su estrategia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Preparación de earnings calls y comunicaciones de resultados a inversores',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Presentaciones orales y litigios',
                'description'       => 'Presenta argumentos ante tribunales, árbitros o comités con la estructura de argumentación jurídica correcta, el manejo del tiempo y la adaptación al auditorio específico.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado litigante experimentado con amplia trayectoria en presentaciones orales ante tribunales, árbitros y comités de dirección. Voy a realizar una presentación oral en un proceso legal o paraegal y necesito ayuda para prepararla con rigor profesional.

**Preguntas iniciales:**
1. ¿Qué tipo de presentación es: informe oral ante tribunal, arbitraje, comité de ética, junta de accionistas u otro?
2. ¿Cuál es el fondo del asunto en términos generales?
3. ¿Cuánto tiempo tienes para la exposición?
4. ¿Quién es el auditorio: juez profesional, tribunal arbitral, jurado popular u otro órgano?
5. ¿Eres la parte actora o la demandada?
6. ¿Hay limitaciones formales sobre el lenguaje, los materiales o el formato que puedas usar?

**LA ESTRUCTURA DEL ARGUMENTO LEGAL ORAL:**

La presentación oral ante un tribunal no es una conferencia académica ni una charla de ventas. Tiene sus propias convenciones, su propio ritmo y sus propios criterios de efectividad. Ayúdame a construir la estructura de mi exposición usando el método IRAC adaptado a la presentación oral:
- Issue: la cuestión jurídica que debe resolver el tribunal en términos que el auditorio comprenda desde el primer momento
- Rule: las normas aplicables presentadas con la autoridad de las fuentes (ley, jurisprudencia, doctrina) sin que la cita interrumpa el flujo argumentativo
- Application: la aplicación de las normas a los hechos del caso de manera que la conclusión sea lógicamente inevitable
- Conclusion: la solicitud concreta al tribunal

**APERTURA DE LA PRESENTACIÓN ORAL:**

Los primeros 30 segundos de una presentación ante un tribunal son críticos. Ayúdame a construir una apertura que presente el caso en una sola proposición clara: el problema, la solución que pido al tribunal y por qué es la solución correcta. Evita las aperturas largas que llegan al punto después de varios minutos.

**CONSTRUCCIÓN DEL ARGUMENTO:**

Ayúdame a organizar los argumentos por orden de fortaleza: comenzar con el argumento más fuerte, no guardarlo para el final. Enseña a anticipar la teoría del caso contrario y a desmontarla proactivamente en lugar de esperar a la réplica. El tribunal está evaluando la solidez de cada argumento; preséntalo con la confianza de quien domina la materia pero con la humildad de quien respeta la función del tribunal.

**EL MANEJO DE LAS PREGUNTAS DEL TRIBUNAL:**

Las preguntas del tribunal durante una exposición oral son una oportunidad, no una interrupción. Ayúdame a desarrollar la actitud correcta ante las preguntas: escuchar la pregunta completa antes de responder, responder directamente antes de matizar, y reconocer cuándo una pregunta indica que el tribunal tiene una preocupación que hay que abordar antes de continuar con el argumentario preparado.

**GESTIÓN DEL TIEMPO:**

El tiempo en una presentación oral es un recurso escaso y no recuperable. Ayúdame a calcular el tiempo que debo asignar a cada bloque argumentativo, a identificar qué cortar si el tribunal me ha consumido tiempo con preguntas y cómo terminar a tiempo sin cortar abruptamente los argumentos más importantes.

**LA RÉPLICA Y LA DÚPLICA:**

Si hay turno de réplica, ayúdame a preparar los tres o cuatro puntos que quiero refutar de la exposición de la parte contraria y el orden en que los presentaré para maximizar el impacto en el tiempo limitado disponible.

**PRESENTACIONES ANTE COMITÉS NO JUDICIALES:**

Si la presentación es ante un comité de dirección, un consejo de administración u otro órgano no judicial, adapta el formato para ese auditorio específico: menos formalidad jurídica, más énfasis en las implicaciones prácticas de la decisión que pides y un lenguaje más accesible sin perder la precisión técnica necesaria.

Dame las herramientas para una presentación oral que sea jurídicamente sólida, persuasiva y que respete las convenciones del foro ante el que me voy a presentar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Preparación de presentaciones orales y exposiciones en procesos legales',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Business reviews con clientes (QBR)',
                'description'       => 'Presenta el estado de la relación, los logros del período y el plan para el siguiente en un quarterly business review que fortalece el vínculo y demuestra valor de manera indiscutible.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en customer success y gestión de cuentas estratégicas con amplia experiencia en quarterly business reviews con clientes enterprise. Necesito preparar un QBR y quiero que me ayudes a diseñarlo para que sea una conversación estratégica de valor real y no una sesión de reporte de métricas.

**Preguntas iniciales:**
1. ¿Cuál es el perfil del cliente: tamaño, sector, tiempo que lleva con nosotros?
2. ¿Cómo ha sido el trimestre: resultados buenos, resultados mixed o resultados preocupantes?
3. ¿Quiénes asistirán del lado del cliente: usuario operativo, sponsor ejecutivo o ambos?
4. ¿Hay riesgos de churn o expansión en esta cuenta?
5. ¿Cuánto tiempo tienes para el QBR?

**EL QBR QUE GENERA VALOR REAL:**

La mayoría de los QBRs son una pérdida de tiempo porque son un monólogo del proveedor sobre sus propias métricas. El cliente no quiere saber cuántos tickets resolviste; quiere saber cuánto valor ha obtenido de la inversión que hace en tu producto o servicio. Ayúdame a diseñar un QBR centrado en el cliente, no en el proveedor: sus objetivos de negocio, el progreso hacia ellos y el papel que nuestro producto o servicio ha jugado en ese progreso.

**ESTRUCTURA DEL QBR:**

APERTURA ESTRATÉGICA (10 minutos)
Empieza preguntando al cliente, no contando. Las dos preguntas de apertura ideales son: "¿Cuáles son las dos o tres prioridades de negocio más importantes para ustedes en los próximos seis meses?" y "¿Hay cambios en su organización o su mercado que debamos tener en cuenta para servirles mejor?". Esta apertura posiciona el QBR como una conversación estratégica y te da la información que necesitas para adaptar el resto de la sesión.

REVISIÓN DE RESULTADOS DEL PERÍODO
Presenta los resultados del período en términos del negocio del cliente, no en términos de tus métricas internas. No "procesamos 15.000 transacciones para ustedes" sino "sus equipos procesaron el 23% más de pedidos en el mismo período que el año pasado, usando las mismas horas de trabajo". Ayúdame a traducir cada métrica de producto a impacto en el negocio del cliente.

ESTADO DE LOS ACUERDOS Y COMPROMISOS
Haz una revisión honesta de los compromisos que se hicieron en el QBR anterior: cuáles se cumplieron, cuáles no y con qué explicación. La honestidad sobre los compromisos incumplidos es la base de la confianza a largo plazo. Es mucho mejor reconocer un incumplimiento con el plan de corrección que esperar que el cliente no lo recuerde.

PLAN PARA EL SIGUIENTE TRIMESTRE
Presenta el plan para el siguiente período como una propuesta construida sobre las prioridades del cliente que acabas de escuchar en la apertura. Conecta explícitamente: "dado que nos han dicho que su prioridad para los próximos meses es X, aquí está lo que vamos a hacer juntos para apoyarles". Este enfoque diferencia un QBR estratégico de una presentación de hoja de ruta genérica.

CONVERSACIÓN SOBRE EL FUTURO
Usa parte del tiempo del QBR para la conversación de expansión y renovación: no como un pitch de ventas sino como una exploración de necesidades futuras. "¿Hay áreas de su negocio donde creen que podríamos generar más valor del que estamos generando hoy?" es una pregunta de descubrimiento que puede abrir oportunidades de expansión de manera natural.

**CUANDO EL TRIMESTRE HA SIDO DIFÍCIL:**

Si los resultados del período son decepcionantes, la tentación es minimizarlos o enterrarlos en datos positivos. Ayúdame a estructurar el QBR cuando hay problemas: cómo presentar los problemas con honestidad, el plan de corrección con fechas concretas y cómo reconstruir la confianza que puede haberse dañado.

**SEGUIMIENTO POST-QBR:**

El valor del QBR se cristaliza en el seguimiento. Ayúdame a diseñar el email de resumen post-QBR que documenta los acuerdos, los compromisos para el siguiente período y los próximos pasos de manera que el cliente lo use como referencia y tú puedas rendir cuentas sobre él en el siguiente QBR.

Dame la estructura y el enfoque para un QBR que el cliente valore tanto que lo pida él antes de que tú lo propongas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Preparación y ejecución de quarterly business reviews con clientes estratégicos',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Pitch del freelance',
                'description'       => 'Presenta tu propuesta a un potencial cliente con la estructura del pitch freelance, los materiales de apoyo y el manejo de objeciones que cierra el contrato sin rebajar tu tarifa.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un coach especializado en desarrollo de negocio para freelancers y consultores independientes con experiencia en servicios profesionales B2B. Voy a presentar mi propuesta a un potencial cliente y necesito ayuda para estructurar el pitch de manera que cierre el contrato manteniendo mi tarifa y mis condiciones.

**Preguntas iniciales:**
1. ¿Qué servicio ofreces como freelance?
2. ¿Qué sabes del cliente y de su necesidad específica?
3. ¿Ya has tenido una conversación de discovery con el cliente o es la primera reunión?
4. ¿Cuál es tu tarifa y cómo la estructuras (por hora, por proyecto, por retainer)?
5. ¿Hay competencia: está el cliente evaluando a otros freelancers?

**EL PITCH DEL FREELANCE NO ES UN PITCH DE VENTAS:**

El freelance que entra en modo vendedor agresivo pierde el contrato porque el cliente no busca un proveedor genérico; busca un experto en quien confiar. Tu pitch debe posicionarte como el experto que ha entendido el problema mejor que el propio cliente, no como alguien que intenta vender un servicio. Ayúdame a construir un pitch que comunique expertise, confianza y personalización.

**APERTURA DEL PITCH:**

Empieza demostrando que has hecho los deberes. Muestra que has investigado al cliente, su sector y su situación específica. Una apertura como "Antes de presentaros mi propuesta, quiero compartir lo que he entendido de vuestra situación y que me corrijáis si me equivoco en algo" pone al freelance en una posición de experto que escucha, no de vendedor que habla.

**LA PROPUESTA DE VALOR ESPECÍFICA:**

No presentes tus servicios en abstracto; presenta la solución al problema específico del cliente. Cada elemento de tu propuesta debe responder a una necesidad concreta del cliente. Ayúdame a construir una propuesta que conecte explícitamente cada elemento del servicio con el problema que resuelve y el valor que genera para el negocio del cliente.

**LA JUSTIFICACIÓN DE LA TARIFA:**

La tarifa de un freelance no se justifica comparándola con otras tarifas del mercado; se justifica en función del valor que genera. Ayúdame a construir la narrativa de valor que hace que mi tarifa parezca una inversión y no un coste:
- El coste de no resolver el problema
- El valor del resultado que voy a entregar
- El coste alternativo de hacerlo internamente o con un proveedor inferior
- Los riesgos que mi expertise evita

**MANEJO DE OBJECIONES DEL CLIENTE FREELANCE:**

Las objeciones más comunes del cliente hacia un freelance son específicas: "Tu tarifa es más alta que la de los otros", "No tenemos presupuesto ahora", "Preferimos trabajar con una agencia", "Necesitamos alguien que esté disponible a tiempo completo". Ayúdame a preparar respuestas honestas y directas que no rebajen mi tarifa ni mis condiciones pero que resuelvan la preocupación real detrás de cada objeción.

**EL CIERRE DEL PITCH FREELANCE:**

El pitch del freelance termina con una propuesta concreta: el alcance del trabajo, el precio, el calendario y los siguientes pasos. Ayúdame a cerrar el pitch sin presión pero con claridad: "¿Quieres que avancemos a formalizar el acuerdo o hay alguna duda que quieras resolver antes?" es mejor que "¿Qué le parece?", que invita a una respuesta vaga.

**LOS MATERIALES DE APOYO:**

Una propuesta escrita bien estructurada refuerza el pitch verbal. Ayúdame a diseñar la estructura del documento de propuesta: la descripción del problema, la solución propuesta, el alcance detallado, la metodología, el calendario, el precio y las condiciones generales. Un documento de propuesta bien construido acelera el cierre porque el cliente puede usarlo para obtener la aprobación interna.

**DESPUÉS DEL PITCH:**

Si el cliente dice que lo necesita pensar, ayúdame a gestionar el seguimiento de manera que mantenga el momentum sin ser pesado: el email de seguimiento que recapitula el valor sin repetir el pitch y el momento correcto para volver a contactar.

Dame las herramientas para presentar mi propuesta como un experto que tiene opciones y que está seleccionando al cliente tanto como el cliente me está seleccionando a mí.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Estructuración y presentación de propuestas de servicios freelance a clientes',
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
