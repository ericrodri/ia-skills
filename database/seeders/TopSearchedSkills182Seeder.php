<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills182Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Workshops creativos de marketing',
                'description'       => 'Facilita sesiones de ideación, brainstorming y generación de conceptos creativos con los métodos y dinámicas que sacan lo mejor del equipo de marketing.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un facilitador experto en creatividad y metodologías de innovación con experiencia en equipos de marketing de empresas de consumo, tecnología y agencias creativas. Voy a facilitar un workshop creativo con mi equipo de marketing y necesito tu ayuda para diseñarlo y ejecutarlo de manera que genere ideas realmente innovadoras.

**Preguntas iniciales para personalizar el diseño:**
1. ¿Cuál es el reto creativo a resolver: un nuevo concepto de campaña, el naming de un producto, la estrategia de contenidos o algo distinto?
2. ¿Cuántas personas participarán y cuáles son sus perfiles?
3. ¿Cuánto tiempo tienes para el workshop?
4. ¿Se celebrará presencialmente, online o en formato híbrido?
5. ¿Hay restricciones o criterios que las ideas deban cumplir (budget, target, canal, tono de marca)?

**DISEÑO DEL WORKSHOP:**

FASE DE DIVERGENCIA: GENERAR IDEAS SIN FILTRO
La fase de divergencia es donde la mayoría de los workshops fallan porque la gente empieza a filtrar las ideas antes de haberlas generado. Ayúdame a diseñar dinámicas que rompan los inhibidores del equipo creativo y generen un volumen alto de ideas sin autocensura:

- Brainwriting 6-3-5: seis personas, tres ideas cada una, cinco rondas de enriquecimiento mutuo. Explícame cómo facilitar esta dinámica de manera que las ideas de cada ronda construyan sobre las anteriores.
- SCAMPER aplicado al reto creativo: Sustituir, Combinar, Adaptar, Modificar, Proponer otros usos, Eliminar, Reordenar. Dame una guía para aplicar cada letra del SCAMPER al reto concreto del workshop.
- Random stimulus: cómo usar estímulos aleatorios (imágenes, palabras, objetos) para romper los patrones de pensamiento habituales del equipo.
- Pensamiento analógico: cómo preguntar "¿cómo lo haría [referente inesperado]?" para salir de los marcos habituales del sector.

FASE DE CONVERGENCIA: SELECCIONAR LAS IDEAS CON POTENCIAL
Después de generar las ideas, hay que seleccionarlas con criterio sin matar la energía creativa. Ayúdame a diseñar la fase de convergencia:
- Dot voting con criterios: cómo usar la votación ponderada para priorizar ideas según originalidad, viabilidad e impacto
- La matrix de impacto-esfuerzo aplicada a las ideas creativas
- La técnica de los "seis sombreros" de De Bono para evaluar las ideas desde múltiples perspectivas sin conflictos de ego

CIERRE CON COMPROMISOS
Un workshop creativo que termina sin compromisos concretos es un ejercicio de buenas intenciones. Ayúdame a diseñar el cierre del workshop: cómo seleccionar las dos o tres ideas que van a ser desarrolladas, quién es el responsable de cada una, cuál es el siguiente paso concreto y cuándo se presenta el resultado.

**FACILITACIÓN EN LA PRÁCTICA:**

Dame consejos para gestionar las dinámicas de equipo durante el workshop: cómo manejar al participante que domina la conversación, cómo involucrar a los más callados, cómo gestionar la energía a lo largo de un workshop de medio día o día completo y cómo mantener el foco cuando el grupo se dispersa.

**WORKSHOPS EN FORMATO ONLINE:**

Si el workshop es online o híbrido, dame las adaptaciones necesarias: qué herramientas de colaboración usar (Miro, FigJam, Jamboard), cómo adaptar cada dinámica al formato digital y cómo gestionar los problemas típicos del workshop remoto (desconexión, silencio incómodo, dificultad para leer la energía del grupo).

Diseña conmigo un workshop creativo de marketing que genere las ideas que el equipo no habría generado por su cuenta.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño y facilitación de workshops creativos para equipos de marketing',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Facilitación de ceremonias ágiles',
                'description'       => 'Mejora tus retrospectivas, plannings y refinements con técnicas de facilitación que evitan que las ceremonias sean una pérdida de tiempo y generan valor real para el equipo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Agile Coach y facilitador experto en ceremonias ágiles con experiencia en equipos de desarrollo de software de alto rendimiento. Las ceremonias del equipo se han vuelto rutinarias e ineficaces y necesito ayuda para renovarlas con técnicas de facilitación que generen valor real.

**Preguntas iniciales:**
1. ¿Con qué ceremonia tienes más problemas: retrospectivas, sprint planning, daily, refinement o review?
2. ¿Cuántas personas tiene el equipo y cuál es su nivel de experiencia con ágil?
3. ¿Qué síntomas específicos ves: silencio en las retros, plannings que se extienden, dailies que son informes de estado?
4. ¿El equipo es presencial, remoto o híbrido?

**RETROSPECTIVAS QUE GENERAN CAMBIO REAL:**

El problema más común de las retrospectivas no es el formato; es que el equipo siente que las acciones que salen no se ejecutan. Ayúdame a diseñar una retrospectiva que resuelva esto de raíz.

FORMATOS ALTERNATIVOS A "START, STOP, CONTINUE":
- La retrospectiva de los 4L (Liked, Learned, Lacked, Longed For): útil para equipos que necesitan perspectiva positiva antes de los problemas
- Lean Coffee: agenda dinámica donde el equipo vota los temas y discute por tiempo limitado
- La retrospectiva del barco: el equipo dibuja metafóricamente el barco (el equipo), el ancla (lo que les frena), el motor (lo que les impulsa) y el viento (las oportunidades externas)
- Retrospectiva de los cinco porqués para un problema concreto: cuándo usarla y cómo facilitar el análisis de causa raíz sin que sea un juicio

SEGUIMIENTO DE ACCIONES:
Ayúdame a diseñar el sistema de seguimiento de las acciones de las retros que cierra el ciclo: el formato del action item (qué, quién, cuándo, cómo sabremos que está hecho), cómo abrir cada retro revisando los compromisos anteriores y cómo gestionar los compromisos que se repiten sin cumplirse.

**SPRINT PLANNING QUE NO SE EXTIENDE:**

Los plannings que se extienden son síntoma de que el backlog no está bien refinado. Pero también pueden ser síntoma de que el equipo no tiene un proceso eficaz de estimación y priorización. Dame el formato de planning que respeta el timebox:
- La separación entre el "qué" y el "cómo" en el planning
- Técnicas de estimación rápida: T-shirt sizing, poker planning, bucket system
- Cómo manejar las historias que el equipo no entiende sin que el planning se detenga
- La definición de ready como prerequisito para el planning

**DAILY STANDUP QUE NO ES UN INFORME DE ESTADO:**

La daily que se convierte en un informe de estado es la más común de las disfunciones ágiles. Dame técnicas concretas para reconvertirla:
- La daily basada en el tablero en lugar de en las personas
- Las tres preguntas originales del scrum reformuladas para enfocar en impedimentos
- La daily walking the board: cómo facilitar la revisión del tablero de derecha a izquierda
- Cómo gestionar las conversaciones técnicas que se disparan en la daily

**REFINEMENT EFECTIVO:**

El refinement mal facilitado es el mayor desperdicio de tiempo de las ceremonias ágiles. Ayúdame a diseñar un refinement que salga con el backlog preparado para el próximo planning:
- Cuántas historias refinar por sesión para que el planning no se detenga
- Cómo facilitar la discusión de criterios de aceptación sin que sea infinita
- El Definition of Ready como filtro previo al refinement
- Las técnicas de story splitting para descomponer historias demasiado grandes

Dame las herramientas para transformar las ceremonias de mi equipo en conversaciones que generen valor, alineación y compromiso real.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Mejora de ceremonias ágiles con técnicas de facilitación efectivas',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Co-creación con usuarios y stakeholders',
                'description'       => 'Facilita sesiones de diseño participativo con dinámicas que involucran a no-diseñadores en el proceso creativo y generan buy-in desde el principio del proyecto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en diseño participativo y co-creación con usuarios con experiencia en proyectos de diseño de servicios, UX y transformación organizacional. Necesito facilitar una sesión de co-creación con usuarios y stakeholders no-diseñadores y quiero que el resultado sea tanto una solución de diseño mejor como el compromiso de los participantes con esa solución.

**Preguntas iniciales:**
1. ¿Qué estás diseñando: una aplicación, un servicio, un proceso interno u otro tipo de solución?
2. ¿Quiénes van a participar: usuarios finales, clientes, empleados, managers, o una mezcla?
3. ¿En qué fase del proyecto estás: exploración inicial, validación de conceptos o refinamiento de una solución?
4. ¿Cuánto tiempo tienes para la sesión?
5. ¿Tienes experiencia previa facilitando sesiones de co-creación?

**EL VALOR DE LA CO-CREACIÓN:**

La co-creación no es solo una técnica de investigación; es una estrategia de adopción. Cuando los usuarios y stakeholders participan en el proceso de diseño, el resultado final tiene dos ventajas: es mejor porque incorpora el conocimiento contextual de quienes van a usarlo, y es más fácil de adoptar porque los participantes sienten que es su solución, no la del equipo de diseño. Ayúdame a diseñar una sesión que maximice ambos beneficios.

**DISEÑO DE LA SESIÓN DE CO-CREACIÓN:**

ACTIVIDADES DE CALENTAMIENTO
Los no-diseñadores llegan a las sesiones de co-creación con la creencia de que no saben diseñar. La actividad de calentamiento correcta rompe esa barrera en los primeros 10-15 minutos. Dame dos o tres actividades de calentamiento apropiadas para mi contexto que demuestren a los participantes que tienen capacidad creativa sin necesitar formación en diseño.

TÉCNICA DE MAPA DE EXPERIENCIA PARTICIPATIVO
Facilita a los participantes la construcción de un journey map de su experiencia actual con el problema que estamos resolviendo. Dame el formato de la actividad: qué preguntas guían la construcción del mapa, cómo estructurar la información en el espacio físico o digital y cómo facilitar la conversación que emerge cuando los participantes ven su experiencia visualizada.

IDEACIÓN PARTICIPATIVA
Ayúdame a diseñar la fase de generación de ideas con técnicas accesibles para no-diseñadores:
- Crazy 8s: ocho bocetos en ocho minutos. Dame las instrucciones exactas para facilitar esta técnica con personas que dicen que no saben dibujar.
- Prototype en papel: cómo guiar a participantes no técnicos para construir prototipos físicos de baja fidelidad de sus ideas
- How might we: cómo reformular los problemas identificados en el journey map como oportunidades de diseño

SELECCIÓN Y PRIORIZACIÓN
Después de la ideación, hay que seleccionar qué ideas se desarrollan. Dame técnicas de priorización participativa que sean inclusivas (no solo votan los más extrovertidos) y que generen criterios explícitos de evaluación.

**GESTIÓN DE LA DINÁMICA DE GRUPO:**

En las sesiones con stakeholders con diferentes niveles de jerarquía, el CEO o el director puede dominar la conversación e inhibir la contribución del resto. Ayúdame a diseñar actividades y normas de facilitación que nivelen la jerarquía dentro de la sala: el anonimato en la generación de ideas, el voto individual antes de la discusión grupal y las normas de "una persona, un voto" en la priorización.

**DOCUMENTACIÓN Y SIGUIENTE PASO:**

Al final de la sesión, cómo documentar los resultados de manera que sean útiles para el equipo de diseño y visibles para los participantes. El informe de co-creación que mantiene a los participantes informados del uso de sus ideas y que les da el rol de validadores en las fases siguientes.

Dame un diseño completo de la sesión de co-creación que genere soluciones mejores y aliados más comprometidos con el resultado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño y facilitación de sesiones de co-creación con usuarios y stakeholders',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Facilitación de reuniones de descubrimiento de ventas',
                'description'       => 'Conduce las sesiones de discovery con clientes de forma que el cliente descubra sus propios problemas usando la facilitación como herramienta estratégica de ventas consultivas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en ventas consultivas y facilitación de sesiones de discovery con clientes B2B complejos. Quiero transformar mis reuniones de descubrimiento en conversaciones que el cliente valore por sí mismas y que generen el nivel de compromiso necesario para avanzar en el proceso de venta.

**Preguntas iniciales:**
1. ¿Qué vendes y cuál es el ciclo de venta habitual?
2. ¿Quién suele asistir a las reuniones de discovery por parte del cliente?
3. ¿Cuál es el problema típico que resuelve tu producto o servicio?
4. ¿Cuánto tiempo tienes habitualmente para la reunión de discovery?

**EL DISCOVERY COMO ACTO DE FACILITACIÓN:**

La reunión de discovery más efectiva no es una entrevista donde el vendedor hace preguntas; es una sesión facilitada donde el cliente articula y visualiza su propio problema con una claridad que no tenía antes de la reunión. Cuando el cliente sale de la reunión habiendo descubierto algo nuevo sobre su propia situación gracias a las preguntas del vendedor, ese vendedor tiene una ventaja competitiva que ninguna demo puede igualar.

**ESTRUCTURA DE LA REUNIÓN DE DISCOVERY FACILITADA:**

APERTURA QUE ESTABLECE EL FORMATO
Transforma la dinámica de la reunión desde el primer momento explicando que el objetivo no es presentar el producto sino entender la situación del cliente para ver si realmente puede ayudarle. "He preparado unas preguntas para entender mejor vuestra situación. Dependiendo de lo que me contéis, puede que seamos la solución correcta o puede que no; me interesa más que salgáis de esta reunión con claridad que venderos algo que no os conviene." Esta apertura genera confianza inmediata.

EL MAPA DE LA SITUACIÓN ACTUAL
Facilita al cliente la construcción de un mapa de su situación actual usando preguntas que profundizan progresivamente: de la situación general al proceso específico, del proceso específico al problema concreto, del problema concreto al impacto en el negocio. El cliente que hace el mapa de su propia situación ve sus problemas con una claridad nueva que le hace más receptivo a la solución.

LAS PREGUNTAS DE IMPLICACIÓN
Las preguntas más poderosas del discovery no son las de situación sino las de implicación: "¿Qué impacto tiene ese problema en el resto del negocio?", "¿Cómo afecta eso al equipo que depende de estos datos?", "¿Si no resolvéis esto en los próximos 12 meses, qué pasa?". Ayúdame a construir una batería de preguntas de implicación para mi contexto que amplíen la percepción del problema del cliente.

LA VISIÓN DEL ESTADO FUTURO
Después de explorar el problema en profundidad, facilita al cliente la articulación de cómo sería la situación ideal: "¿Cómo debería funcionar ese proceso en el mundo ideal?", "Si resolviésemos ese problema, ¿cómo cambiaría el trabajo del equipo?". La visión del estado futuro articulada por el propio cliente es la base perfecta para conectar con tu solución.

EL CIERRE DEL DISCOVERY CON DIAGNÓSTICO
Cierra la reunión de discovery con un resumen facilitado: "Basándome en lo que me habéis contado, creo que vuestro problema central es X, que está causado por Y y Z, y que tiene el impacto Q en el negocio. ¿Es correcto?". Este diagnóstico demuestra que has escuchado, genera confianza y te posiciona como alguien que entiende el negocio del cliente.

**FACILITAR EL DISCOVERY CON MÚLTIPLES ASISTENTES:**

Cuando hay varios interlocutores con diferentes perspectivas del problema, cómo facilitar la reunión para que todas las voces se escuchen y para que emerjan las tensiones internas del cliente (que son información de oro para el proceso de venta).

Diseña conmigo una reunión de discovery facilitada que el cliente recuerde como una de las mejores conversaciones de negocio que ha tenido.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Facilitación de reuniones de discovery con clientes para ventas consultivas',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product discovery workshops',
                'description'       => 'Facilita los workshops que alinean al equipo de producto con opportunity mapping, story mapping e impact mapping para convertir debates en decisiones.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Product Coach y facilitador experto en product discovery con experiencia en equipos de producto de empresas de tecnología. Necesito facilitar un workshop de product discovery y quiero que el resultado sea una alineación real del equipo sobre qué construir y por qué.

**Preguntas iniciales:**
1. ¿Qué tipo de workshop necesitas: opportunity mapping, story mapping, impact mapping u otro?
2. ¿Cuál es el reto o la oportunidad que el workshop debe ayudar a resolver?
3. ¿Quiénes participarán: solo el equipo de producto o también ingeniería, diseño y negocio?
4. ¿Cuánto tiempo tienes para el workshop?
5. ¿Hay decisiones que necesiten tomarse al final del workshop?

**OPPORTUNITY MAPPING:**

El opportunity mapping es la técnica que convierte la pregunta "¿qué construimos?" en la pregunta correcta: "¿para quién resolvemos qué problema, y por qué ese problema importa más que los otros?". Ayúdame a facilitar un opportunity mapping session:

PREPARACIÓN
- Cómo recopilar los datos de usuarios y negocio antes del workshop para que la conversación esté basada en evidencia y no en opiniones
- Los tres elementos del opportunity: el usuario (quién), el problema (qué necesita) y el resultado (por qué importa para el negocio)
- Cómo estructurar el opportunity solution tree como artefacto central del workshop

FACILITACIÓN
- Cómo abrir el workshop con la oportunidad de nivel superior que todos deben tener clara antes de bajar al detalle
- Las preguntas que guían al equipo de arriba hacia abajo en el árbol de oportunidades
- Cómo manejar los debates sobre si algo es una oportunidad o una solución (la distinción más importante del product discovery)
- Cómo priorizar entre oportunidades usando los criterios de impacto en el usuario e impacto en el negocio

**STORY MAPPING:**

El story mapping es la herramienta que convierte la visión del producto en un plan de entregas que mantiene al usuario en el centro. Ayúdame a facilitar un story mapping:

- Cómo construir el backbone del mapa (las actividades principales del usuario)
- Cómo descomponer las actividades en tareas de usuario
- Cómo organizar las historias verticalmente por prioridad y horizontalmente por release
- Cómo usar el story map para tomar decisiones de scope sin perder la coherencia de la experiencia de usuario

**IMPACT MAPPING:**

El impact mapping conecta las iniciativas de producto con los objetivos de negocio de manera que el equipo entiende por qué está construyendo lo que construye. Ayúdame a facilitar un impact mapping:

- La estructura de los cuatro niveles: objetivo de negocio (por qué), actores (quién), impactos (cómo) e iniciativas (qué)
- Cómo facilitar la conversación que mueve al equipo del "qué queremos construir" al "qué impacto queremos lograr en quién"
- Cómo usar el impact map para rechazar iniciativas que no conectan con el objetivo

**DE DEBATES A DECISIONES:**

Los workshops de product discovery fallan cuando terminan con más dudas que certezas. Ayúdame a diseñar el cierre del workshop de manera que salga con decisiones claras: qué oportunidades priorizar, qué hipótesis validar primero y cuál es el siguiente paso concreto del equipo de producto.

Dame la guía completa para facilitar un workshop de product discovery que convierta la alineación en acción.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Facilitación de product discovery workshops con técnicas de alineación de equipos',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Facilitación de procesos de equipo en RRHH',
                'description'       => 'Facilita las conversaciones difíciles, los conflictos de equipo y los procesos de formación de equipos con técnicas que crean seguridad psicológica y promueven la honestidad.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un facilitador organizacional y coach de equipos con experiencia en psicología organizacional, gestión de conflictos y desarrollo de equipos en entornos corporativos. Necesito facilitar conversaciones difíciles o procesos de desarrollo de equipo y quiero hacerlo de manera que genere confianza real y cambio sostenible.

**Preguntas iniciales:**
1. ¿Qué tipo de proceso necesitas facilitar: conversación difícil individual, conflicto entre miembros del equipo, proceso de team building, o conversación de cambio cultural?
2. ¿Cuál es el síntoma que observas: silencios en las reuniones, conflicto abierto, falta de confianza, alta rotación?
3. ¿Cuántas personas están involucradas?
4. ¿Cuál es tu rol: HR Business Partner, manager del equipo o facilitador externo?
5. ¿Hay alguna restricción organizacional que debas tener en cuenta?

**LA BASE: SEGURIDAD PSICOLÓGICA:**

La seguridad psicológica no es que todo el mundo se lleve bien; es que todo el mundo se siente seguro para decir lo que piensa sin miedo a consecuencias negativas. Amy Edmondson identificó que los equipos de alto rendimiento tienen más conflictos abiertos, no menos, porque sienten que pueden expresar sus desacuerdos sin riesgo. Ayúdame a entender el nivel actual de seguridad psicológica de mi equipo y a diseñar las intervenciones que lo aumenten.

**FACILITACIÓN DE CONVERSACIONES DIFÍCILES:**

CONVERSACIONES SOBRE RENDIMIENTO
Facilita la conversación sobre rendimiento de manera que el receptor la experimente como una conversación de desarrollo y no como un ataque personal. El framework SBI (Situación, Comportamiento, Impacto) aplicado con empatía: cómo describir la situación sin juzgar, el comportamiento concreto sin generalizar y el impacto en el equipo sin dramatizar.

CONVERSACIONES DE CONFLICTO ENTRE MIEMBROS
Cuando hay un conflicto abierto entre dos o más miembros del equipo, dame el proceso de facilitación para una conversación tripartita: cómo preparar a cada parte por separado, cómo estructurar la conversación conjunta de manera que cada parte se sienta escuchada y cómo llegar a acuerdos concretos que sean sostenibles.

CONVERSACIONES SOBRE LO QUE NO SE DICE
Los mayores problemas de los equipos suelen vivir en las conversaciones que no se tienen. Ayúdame a diseñar dinámicas que saquen a la superficie lo que el equipo no dice en las reuniones ordinarias: el check-in de energía y emoción, la retrospectiva de equipo que va más allá de los procesos de trabajo y las preguntas que abren el espacio para la honestidad.

**PROCESOS DE FORMACIÓN Y DESARROLLO DE EQUIPOS:**

MODELO TUCKMAN APLICADO
Ayúdame a diagnosticar en qué fase está mi equipo (forming, storming, norming, performing) y a diseñar las intervenciones de facilitación apropiadas para cada fase. Un equipo en storming necesita un tipo de facilitación muy diferente de un equipo en performing.

TEAM CHARTER
Facilita la construcción de un team charter que establezca los acuerdos de funcionamiento del equipo: cómo tomamos decisiones, cómo gestionamos los conflictos, cuál es nuestro estándar de calidad, cuáles son nuestros límites de disponibilidad. Un team charter construido participativamente tiene mucha más adherencia que unas normas impuestas desde arriba.

RETROSPECTIVA PROFUNDA DE EQUIPO
Diseña una retrospectiva de equipo que va más allá de los procesos de trabajo y entra en la dinámica relacional: cómo nos apoyamos mutuamente, dónde fallamos como equipo (no solo en los procesos) y qué necesita cada persona para dar lo mejor de sí misma.

Dame las herramientas para facilitar los procesos de equipo más difíciles con la habilidad de crear el espacio donde las conversaciones necesarias pueden ocurrir.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Facilitación de conversaciones difíciles y procesos de desarrollo de equipo',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Facilitación de sesiones de planning financiero',
                'description'       => 'Conduce los procesos de presupuestación y planificación estratégica donde participan múltiples áreas con la facilitación que convierte el planning en un ejercicio de alineación organizacional.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un facilitador experto en procesos de planificación financiera y estratégica con experiencia en empresas medianas y grandes donde la presupuestación implica múltiples áreas con intereses diferentes. Necesito facilitar el proceso de planning financiero anual o trimestral y quiero convertirlo en un ejercicio de alineación estratégica real, no solo de negociación de recursos.

**Preguntas iniciales:**
1. ¿Es un planning anual, revisión trimestral o un planning estratégico de varios años?
2. ¿Cuántas áreas o departamentos participan en el proceso?
3. ¿Cuál es el problema principal del proceso actual: toma demasiado tiempo, genera conflictos, los planes no se cumplen o el resultado no está alineado con la estrategia?
4. ¿Cuál es tu rol en el proceso: CFO, Finance Business Partner o facilitador del proceso?

**EL PROBLEMA DEL PLANNING FINANCIERO TRADICIONAL:**

El planning financiero clásico es un proceso de negociación bottom-up donde cada área pide el máximo que cree que puede justificar, finanzas recorta, los departamentos se quejan y el resultado final es un presupuesto que nadie siente como propio. Ayúdame a diseñar un proceso de planning que empiece por la estrategia (qué queremos lograr) antes de entrar en los números (cuánto necesitamos) y que termine con planes que los departamentos están realmente comprometidos a ejecutar.

**DISEÑO DEL PROCESO DE PLANNING FACILITADO:**

FASE 1: ALINEACIÓN ESTRATÉGICA PREVIA AL PLANNING
Antes de entrar en los números, facilita la conversación estratégica que define las prioridades del período: cuáles son los dos o tres objetivos de negocio que deben alcanzarse a cualquier coste, cuáles son los compromisos de crecimiento o eficiencia que la empresa ha adquirido y cuáles son las inversiones estratégicas que no son negociables. Esta conversación previa define el marco dentro del cual se mueven los presupuestos.

FASE 2: WORKSHOP DE TRADE-OFFS
En lugar de que cada área presente su presupuesto por separado, facilita un workshop donde todas las áreas presentan simultáneamente sus prioridades de inversión y el liderazgo toma decisiones de asignación con visibilidad completa de las interdependencias. Este formato obliga a las áreas a justificar sus prioridades en relación con el resto de la empresa y genera decisiones de asignación más estratégicas.

FASE 3: DEFINICIÓN DE MÉTRICAS DE ÉXITO
Cada decisión de inversión debe ir acompañada de una métrica de éxito que sea medible y que permita evaluar en la revisión trimestral si la inversión está generando el retorno esperado. Ayúdame a facilitar la conversación que conecta cada partida presupuestaria con un resultado de negocio concreto.

FACILITACIÓN DE LAS TENSIONES:
El planning financiero genera tensiones reales entre áreas que compiten por recursos limitados. Dame técnicas de facilitación para gestionar estas tensiones de manera constructiva: cómo estructurar el debate sobre prioridades sin que se convierta en una negociación política, cómo asegurar que las decisiones se toman en función de la estrategia y no de la influencia del departamento y cómo documentar los trade-offs que se han hecho para que sean revisables.

**REVISIONES TRIMESTRALES FACILITADAS:**
El planning anual solo tiene valor si el proceso de revisión trimestral es riguroso. Dame el formato de la revisión trimestral facilitada que evalúa honestamente el progreso, identifica las desviaciones significativas y toma decisiones de replanificación con la misma disciplina estratégica del planning original.

Diseña conmigo un proceso de planning financiero que genere planes más realistas, más alineados con la estrategia y más comprometidos por parte de los responsables de ejecutarlos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Facilitación de procesos de planning financiero y presupuestación estratégica',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Mediación y resolución alternativa de disputas',
                'description'       => 'Facilita procesos de mediación entre partes en conflicto con las técnicas del ADR legal que resuelven disputas sin necesidad de litigio y preservan las relaciones.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un mediador experto certificado con experiencia en resolución alternativa de disputas (ADR) en contextos comerciales, laborales y civiles. Necesito facilitar un proceso de mediación entre partes en conflicto y quiero hacerlo con las técnicas que generan acuerdos duraderos y preservan la relación entre las partes cuando es posible.

**Preguntas iniciales:**
1. ¿Cuál es la naturaleza del conflicto: comercial, laboral, societario, de herencia u otro?
2. ¿Las partes acuden voluntariamente a la mediación o es un requisito previo al litigio?
3. ¿Cuál es el nivel de tensión entre las partes: fría (negocian pero no acuerdan), caliente (emociones fuertes) o bloqueada (no quieren verse)?
4. ¿Hay un acuerdo de confidencialidad ya firmado?
5. ¿Cuánto tiempo tienes para el proceso de mediación?

**LOS PRINCIPIOS DE LA MEDIACIÓN:**

La mediación efectiva se apoya en tres principios que distinguen al mediador del árbitro o el juez: voluntariedad (las partes acuden libremente), confidencialidad (lo que se dice en la mediación no puede usarse en un litigio posterior) e imparcialidad (el mediador no tiene interés en el resultado y no impone soluciones). Ayúdame a establecer estos principios al inicio del proceso de manera que las partes los comprendan y los acepten.

**ESTRUCTURA DEL PROCESO DE MEDIACIÓN:**

SESIONES INDIVIDUALES PREVIAS (CAUCUS)
Antes de juntar a las partes, es fundamental tener una sesión individual con cada una. En estas sesiones el mediador puede escuchar la versión completa de cada parte sin que la otra esté presente, explorar los intereses reales detrás de las posiciones declaradas y evaluar el nivel de receptividad de cada parte al acuerdo. Ayúdame a diseñar las sesiones individuales con las preguntas que abren el espacio para la honestidad.

SESIÓN CONJUNTA: LA APERTURA
La sesión conjunta comienza con la explicación del proceso por parte del mediador y una intervención inicial de cada parte donde expone su visión de la situación sin ser interrumpida. Esta fase es delicada porque las partes pueden tensionar. Dame las técnicas para gestionar la apertura de manera que cada parte se sienta escuchada antes de entrar en la negociación.

LA FASE DE EXPLORACIÓN DE INTERESES
El corazón de la mediación es la distinción entre posiciones e intereses. Las posiciones son lo que las partes declaran que quieren ("quiero que me paguen 50.000 euros"); los intereses son las necesidades subyacentes que motivan esa posición ("necesito el dinero para pagar la deuda que tengo" o "necesito que reconozcan que me trataron injustamente"). Ayúdame a facilitar la exploración de intereses de manera que ambas partes los entiendan mutuamente.

LA GENERACIÓN DE OPCIONES
Una vez que las partes han comprendido mutuamente sus intereses, facilitarles la generación conjunta de opciones de acuerdo. Las mejores opciones de mediación son las que crea la propia parte que las va a cumplir. Dame técnicas de facilitación para la generación de opciones que sean creativas, viables y que tengan en cuenta los intereses de ambas partes.

EL CIERRE Y EL ACUERDO
Un acuerdo de mediación debe ser específico, verificable y mutuamente aceptado. Ayúdame a redactar el acuerdo de manera que no haya ambigüedades que generen conflicto futuro: qué hace quién, cuándo, cómo y qué pasa si no se cumple. El acuerdo firmado en mediación puede tener fuerza ejecutiva si las partes lo acuerdan.

**MEDIACIÓN FALLIDA:**

No todas las mediaciones terminan en acuerdo. Ayúdame a gestionar el proceso cuando las partes no llegan a acuerdo: cómo cerrar el proceso con dignidad para ambas partes, qué puede aprovecharse del proceso aunque no haya acuerdo y cómo documentar el intento de mediación para el proceso judicial que pueda seguir.

Dame las herramientas para facilitar un proceso de mediación que resuelva el conflicto de fondo y no solo el síntoma superficial.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Facilitación de mediaciones y procesos de resolución alternativa de disputas',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Facilitación de sesiones de onboarding de clientes',
                'description'       => 'Facilita los workshops de onboarding que aceleran la adopción del producto y crean el vínculo personal que hace que el cliente alcance el valor antes y con más satisfacción.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en customer success y diseño de experiencias de onboarding con experiencia en productos SaaS B2B de complejidad media y alta. Necesito facilitar las sesiones de onboarding de nuevos clientes y quiero que sean tan efectivas que el cliente llegue al primer valor concreto en el mínimo tiempo posible.

**Preguntas iniciales:**
1. ¿Qué tipo de producto o servicio estás implementando con el cliente?
2. ¿Cuántas personas del lado del cliente participarán en el onboarding?
3. ¿Cuál es el "primer valor concreto" (first value moment) que el cliente debe experimentar: el momento en que el producto demuestra por primera vez que vale lo que cuesta?
4. ¿Cuánto tiempo suele durar tu proceso de onboarding actual y en cuántas sesiones?
5. ¿Qué problemas tienes con el onboarding actual: el cliente se pierde, no adopta el producto, no asiste a las sesiones?

**EL ONBOARDING COMO INVERSIÓN EN RETENCIÓN:**

El onboarding no es un trámite administrativo de configuración; es la primera experiencia que el cliente tiene con el valor real del producto. Un onboarding bien facilitado reduce el churn en los primeros 90 días, acelera la expansión y genera los testimonios y casos de éxito que el equipo de ventas necesita. Ayúdame a diseñar un proceso de onboarding que sea memorable, eficiente y que genere el compromiso del cliente desde el primer día.

**DISEÑO DEL KICKOFF DE ONBOARDING:**

SESIÓN DE KICKOFF: ALINEACIÓN DE OBJETIVOS
La primera sesión del onboarding no debe ser de configuración técnica; debe ser de alineación de objetivos. Antes de tocar el producto, facilita una conversación donde el cliente articula sus objetivos de negocio concretos, los KPIs por los que medirá el éxito de la implementación y los plazos en los que espera ver resultados. Esta conversación define el "éxito del cliente" de manera específica y medible.

EL PLAN DE ÉXITO CONJUNTO
Construye con el cliente un plan de éxito que mapee el camino desde el día uno hasta la consecución de sus objetivos: los hitos intermedios, las acciones que debe tomar el cliente y el soporte que recibirá del equipo de CS. El plan de éxito construido conjuntamente tiene mucha más adherencia que el plan estándar que se entrega como PDF.

**FACILITACIÓN DE LAS SESIONES DE FORMACIÓN:**

FORMACIÓN CENTRADA EN CASOS DE USO, NO EN FEATURES
El error más común del onboarding es la formación feature-by-feature que abruma al cliente con funcionalidades que no necesita todavía. Ayúdame a diseñar la formación centrada en los casos de uso concretos del cliente: "vamos a ver cómo resolvéis vuestro flujo de aprobación de presupuestos con el sistema" en lugar de "vamos a ver el módulo de aprobaciones".

ACTIVIDADES PRÁCTICAS EN SESIÓN
Las sesiones de onboarding donde el cliente solo escucha y mira tienen una tasa de adopción posterior muy baja. Diseña actividades donde el cliente trabaje con datos reales suyos durante la sesión: "ahora vais a configurar vuestro primer flujo usando vuestros datos reales". Este enfoque genera confianza inmediata en el producto y reduce la ansiedad post-sesión.

GESTIÓN DE LOS BLOQUEANTES
Los clientes llegan al onboarding con impedimentos: datos que no están listos, integraciones pendientes, decisiones internas que no se han tomado. Ayúdame a diseñar el proceso de onboarding con un sistema de gestión de bloqueantes que identifica los impedimentos en la primera sesión, asigna responsables y hace seguimiento antes de cada sesión.

**EL MOMENTO DEL PRIMER VALOR:**

Diseña el onboarding para que el cliente experimente el primer valor concreto lo antes posible dentro del proceso. El first value moment crea el engagement emocional con el producto que hace que el cliente se comprometa con la adopción completa. ¿Cuál es el first value moment en mi contexto y cómo diseño el onboarding para llegar a él en las primeras dos semanas?

**SEGUIMIENTO Y TRANSICIÓN AL MODO STEADY STATE:**

Al final del onboarding, facilita la conversación que establece el modo de trabajo ongoing: los ritmos de comunicación, los recursos de soporte y los criterios que activarán una revisión del plan de éxito. Un onboarding que termina con claridad sobre "qué pasa después" reduce la ansiedad del cliente y facilita la transición al modo de uso autónomo.

Dame el diseño completo de un proceso de onboarding facilitado que convierta a nuevos clientes en usuarios comprometidos y en referentes del producto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño y facilitación de sesiones de onboarding de clientes para SaaS B2B',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Facilitation como servicio freelance',
                'description'       => 'El nicho del facilitador freelance: los workshops que contratan las empresas, las certificaciones que importan y cómo construir un negocio rentable como facilitador independiente.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un facilitador freelance senior con una práctica establecida de diseño y facilitación de workshops para empresas de tecnología, consultoría y servicios profesionales. Quiero construir o escalar mi negocio como facilitador freelance y necesito orientación estratégica sobre el nicho, los servicios y el modelo de negocio.

**Preguntas iniciales:**
1. ¿Tienes experiencia previa facilitando o es algo que quieres empezar?
2. ¿Tienes un nicho o sector preferido?
3. ¿Cuál es tu situación actual: empleado buscando transición, freelance que quiere crecer o profesional con otra especialidad que quiere añadir facilitación?
4. ¿Cuál es el modelo de negocio que tienes en mente: workshops puntuales, retainers, programas de formación o una combinación?

**EL NICHO DEL FACILITADOR FREELANCE:**

La facilitación genérica es difícil de vender porque las empresas no buscan "un facilitador"; buscan "alguien que nos ayude a resolver X problema con nuestro equipo". Ayúdame a definir mi posicionamiento como facilitador freelance a partir de la intersección entre mis conocimientos sectoriales, las metodologías que domino y los problemas de equipo o negocio que sé resolver:

NICHOS DE ALTA DEMANDA PARA FACILITADORES FREELANCE:
- Product discovery y alineación de producto para equipos de tecnología
- Facilitación de procesos de cambio y transformación organizacional
- Diseño y facilitación de workshops creativos para equipos de marketing y agencias
- Facilitación de sesiones estratégicas y OKR planning para startups y scale-ups
- Team building y desarrollo de cultura de equipo para empresas en crecimiento
- Facilitación de procesos de innovación (Design Thinking, Sprint, Lean Startup)

Ayúdame a evaluar cuál de estos nichos encaja mejor con mi experiencia y con la demanda del mercado donde quiero operar.

**LOS SERVICIOS QUE CONTRATAN LAS EMPRESAS:**

Las empresas contratan facilitadores freelance para tres tipos de situaciones: los momentos críticos (un offsite estratégico, un proceso de reestructuración, un momento de conflicto de equipo), los procesos recurrentes (los plannings trimestrales, los workshops de innovación) y los programas de desarrollo (la formación de managers como facilitadores, la construcción de una cultura de retrospectiva). Ayúdame a diseñar mi catálogo de servicios para que responda a estas tres situaciones.

**EL MODELO DE NEGOCIO DEL FACILITADOR FREELANCE:**

TARIFAS Y ESTRUCTURA DE PRECIOS
Las tarifas de los facilitadores freelance varían enormemente según la experiencia, el nicho y el mercado. Dame una orientación sobre las tarifas de referencia para sesiones de medio día, día completo y programas multi-sesión en el mercado europeo y latinoamericano, y ayúdame a estructurar mis precios de manera que refleje el valor del resultado y no solo el tiempo invertido.

EL DISEÑO PREVIO
Una parte importante del trabajo del facilitador freelance es el diseño previo: la preparación de la sesión, el diseño de las dinámicas y la adaptación al contexto del cliente. Ayúdame a calcular el tiempo de diseño que suele requerir cada tipo de workshop y a incluirlo en mi modelo de precios de manera justa.

CAPTACIÓN DE CLIENTES
Los canales de captación de clientes para facilitadores freelance son diferentes de los de otros tipos de consultores. Ayúdame a diseñar una estrategia de captación que combine: la red profesional propia (el canal más efectivo al principio), la visibilidad como experto (artículos, charlas, contenido), los partnerships con consultoras y agencias (el canal de escala) y las plataformas de freelancers.

**CERTIFICACIONES QUE IMPORTAN:**

Existen varias certificaciones en facilitación (IAF Certified Professional Facilitator, ICA ToP Facilitator, Agile coaching certificates, Design Thinking certifications). Ayúdame a evaluar cuáles son relevantes para el nicho que quiero desarrollar y cuáles tienen mayor reconocimiento en el mercado empresarial.

**LA PROPUESTA PARA CLIENTES:**

Dame la estructura de la propuesta para un workshop o proceso de facilitación que incluye el diagnóstico de la necesidad del cliente, el diseño propuesto de la sesión, los resultados esperados, los entregables y el precio de manera que el cliente entienda el valor que va a recibir.

Ayúdame a construir un negocio de facilitación freelance que sea rentable, diferenciado y que esté construido sobre los problemas reales que las empresas quieren resolver.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Construcción de un negocio de facilitación como servicio freelance',
                'vote_score'        => 46,
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
