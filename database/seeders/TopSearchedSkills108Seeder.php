<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills108Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Inteligencia emocional en marketing',
                'description'      => 'Cómo las marcas que conectan emocionalmente venden más: neuromarketing, empatía y diseño de experiencias que emocionan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing emocional y neuromarketing con experiencia en el diseño de campañas y experiencias de marca que conectan a un nivel profundo con los consumidores. Las marcas que lideran sus categorías no lo hacen solo por tener el mejor producto o el precio más bajo: lo hacen porque han construido conexiones emocionales que sus competidores no pueden copiar fácilmente. Necesito que me ayudes a entender y aplicar la inteligencia emocional en mi estrategia de marketing.

**Contexto de mi marca:**
[Describe tu producto o servicio, tu público objetivo, tu posicionamiento actual y si tienes ejemplos de comunicación que creas que ha funcionado bien o mal emocionalmente]

**Lo que necesito que me expliques y apliques:**

1. **Por qué las emociones impulsan las decisiones de compra:** Explica la neurociencia detrás de las decisiones de consumo: el papel de la amígdala y el sistema límbico en la toma de decisiones, por qué el marcador somático de Damasio explica que sin emoción no hay decisión de compra, y por qué los estudios de neuromarketing demuestran que las personas racionalizan después de haber decidido emocionalmente. Cómo este conocimiento debe cambiar la forma en que diseño mis mensajes.

2. **Las emociones que más venden y cuándo usar cada una:** No todas las emociones son igualmente efectivas en marketing. Explica las emociones que más impulsan el comportamiento del consumidor: la alegría y el orgullo (asociadas a la compra y a la recomendación), el miedo y la ansiedad (efectivas en seguros, salud, seguridad), la nostalgia (podemos reactivarla en marcas con historia), el asombro y la inspiración (virales en redes sociales) y la pertenencia y la identidad (el marketing de tribu). Para mi marca concreta, cuáles son más apropiadas y por qué.

3. **El mapa de empatía del cliente:** Para conectar emocionalmente con mi cliente, primero debo entender qué piensa, siente, escucha y ve. Ayúdame a construir un mapa de empatía completo para mi cliente ideal: sus aspiraciones y sus miedos, las conversaciones que tiene consigo mismo antes de comprar, las críticas que recibe de su entorno, los momentos de frustración en su vida que mi producto puede aliviar y las victorias que mi producto puede ayudarle a celebrar.

4. **Storytelling emocional: la estructura narrativa que funciona:** Las historias activan el cerebro de forma diferente a los datos y los argumentos racionales. Explica la estructura del storytelling emocional efectivo para marketing: el héroe (que debe ser el cliente, no la marca), el problema o conflicto (el momento de dolor que mi cliente reconoce como propio), la guía (mi marca como el mentor que le ayuda a resolver el problema) y la transformación (la vida mejor que tiene el cliente gracias a mi producto). Para mi marca, ayúdame a construir esta narrativa.

5. **Diseño de experiencias que emocionan: más allá del producto:** Las emociones no solo se generan con la comunicación: también con la experiencia de producto, el packaging, el soporte y cada touchpoint. Explica el concepto de experience peaks (los momentos que definen la percepción global de la experiencia) basado en la investigación de Kahneman, y cómo diseñar intencionalmente esos picos: el unboxing, el primer uso, la resolución de un problema, el momento de renovación o de recomendación.

6. **Lenguaje emocional en los copies y mensajes:** Las palabras activan emociones diferentes. Explica cómo elegir el lenguaje emocional adecuado para mis mensajes: las diferencias entre apelar a ganancias vs. evitar pérdidas (loss aversion), cómo el lenguaje sensorial activa la imaginación del consumidor, las palabras que generan confianza vs. las que generan distancia, y cómo evitar el lenguaje corporativo que desconecta emocionalmente al lector.

7. **Medición de la conexión emocional:** Las emociones son difíciles de medir pero no imposibles. Explica los métodos para evaluar el impacto emocional de la comunicación de marca: los tests de respuesta emocional implícita (IAT), el análisis de sentimiento en redes sociales y reseñas, el NPS como proxy de conexión emocional, los estudios cualitativos de focus group con escucha emocional y cómo correlacionar la conexión emocional medida con métricas de negocio (retención, LTV, recomendación).

8. **Inteligencia emocional del equipo de marketing:** El equipo que crea comunicación emocional necesita ser capaz de reconocer y gestionar sus propias emociones y las del consumidor. Explica cómo desarrollar la inteligencia emocional colectiva en el equipo de marketing: la práctica de la escucha empática del cliente (leyendo reseñas, haciendo entrevistas, acompañando al cliente en su proceso de compra) y cómo crear un ambiente donde las ideas emocionales y creativas son bienvenidas sin el cinismo que a veces paraliza a los equipos de marketing.

Las marcas que más venden no son siempre las mejores: son las que más se sienten. Ayúdame a construir una marca que se siente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Aplicar la inteligencia emocional y el neuromarketing para construir conexiones más profundas con los clientes.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Soft skills para developers',
                'description'      => 'Comunicación, colaboración y gestión de conflictos: las habilidades que diferencian a un senior del resto más allá del código.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de software senior con experiencia en equipos de alto rendimiento y en el desarrollo de habilidades interpersonales para profesionales técnicos. Hay un momento en la carrera de todo desarrollador en que el código deja de ser el principal diferenciador: lo que te hace avanzar es tu capacidad para comunicar ideas técnicas complejas, para trabajar con personas que piensan diferente a ti, para influir en decisiones sin autoridad formal y para gestionar los conflictos que inevitablemente surgen en los equipos. Necesito que me ayudes a desarrollar esas habilidades.

**Mi situación actual:**
[Describe tu nivel de experiencia como developer, el tipo de equipo en el que trabajas (startup, agencia, empresa grande, remoto), cuáles crees que son tus puntos débiles en las soft skills y qué situaciones concretas te han resultado difíciles]

**Lo que necesito que me expliques y practiques conmigo:**

1. **Por qué las soft skills importan más de lo que los developers creen:** Explica el impacto real de las soft skills en la carrera de un developer: por qué los estudios muestran que los ingenieros que ascienden más rápido no son necesariamente los más técnicamente brillantes, cómo las soft skills afectan la calidad del código (un developer que no comunica bien escribe código que nadie más puede mantener), y cuál es la diferencia entre un developer que hace lo que se le pide y uno que entiende el problema de negocio y propone la solución correcta.

2. **Comunicación técnica para no técnicos:** Una de las habilidades más valiosas de un developer senior es explicar conceptos técnicos complejos a personas que no son técnicas. Explica las técnicas para hacerlo: el uso de analogías relevantes para la audiencia, la pirámide invertida (conclusión primero, detalles después), cómo calibrar el nivel de detalle técnico según quién escucha, y cómo comunicar problemas técnicos (deuda técnica, bugs complejos, limitaciones de arquitectura) en términos de impacto de negocio que los stakeholders no técnicos entiendan y valoren.

3. **Dar y recibir feedback en el equipo técnico:** Los code reviews son una forma de feedback constante, y muchos conflictos en equipos de desarrollo nacen de code reviews mal ejecutados. Explica cómo dar feedback técnico que sea específico, accionable y que no ataque a la persona, cómo recibir críticas al código sin ponerse a la defensiva (separar la identidad del código), y cómo construir una cultura de code review donde el objetivo es el aprendizaje colectivo, no demostrar quién es más listo.

4. **Comunicación escrita asíncrona en equipos remotos o distribuidos:** En equipos remotos, la comunicación escrita es el principal canal de trabajo. Explica las técnicas para escribir mejor en contextos técnicos: los mensajes de Slack que dan contexto suficiente sin ser un muro de texto, los tickets de Jira o Linear que explican el problema y el criterio de aceptación de forma que cualquiera del equipo pueda recogerlo, los pull requests que explican el "por qué" del cambio (no solo el "qué"), y las decisiones de arquitectura documentadas (ADRs) que el equipo del futuro agradecerá.

5. **Influencia sin autoridad: cómo convencer sin ser el jefe:** Los developers con más impacto no esperan a tener un cargo de manager para influir en las decisiones técnicas. Explica cómo construir influencia técnica de forma legítima: ser la persona que hace el trabajo de documentar las opciones y sus tradeoffs antes de la reunión, usar datos y prototipos en lugar de opiniones, construir alianzas con otros teammates antes de presentar una propuesta, y cómo manejar el caso en que la decisión tomada no es la que recomendaste.

6. **Gestión de conflictos técnicos:** Los desacuerdos sobre arquitectura, tecnología o enfoque son inevitables en cualquier equipo técnico. Explica cómo gestionar esos conflictos de forma constructiva: la diferencia entre un debate de ideas y un conflicto personal, el principio de "disagree and commit" para avanzar cuando hay desacuerdo legítimo, cómo hacer que el equipo decida basándose en criterios objetivos (una decisión matrix, un spike técnico, un prototipo) en lugar de en la opinión del más senior o del que habla más alto.

7. **Relación con el Product Manager y los stakeholders de negocio:** La relación entre el developer y el PM es una de las más importantes y de las más propensas a la fricción. Explica cómo construir una relación productiva: entender los objetivos de negocio detrás de cada feature (el "para qué" antes del "qué"), cómo comunicar estimaciones de tiempo con incertidumbre honesta (en lugar de fechas que luego se incumplen), cómo negociar el alcance cuando hay presión de tiempo y cómo involucrarte en la fase de discovery para diseñar mejores soluciones técnicas.

8. **Construir un plan de desarrollo de soft skills:** Las soft skills no se aprenden leyendo sobre ellas: se desarrollan con práctica deliberada. Diseña un plan de 6 meses para desarrollar las habilidades interpersonales específicas que más necesito: qué situaciones debo buscar activamente como práctica, qué feedback pedir al entorno, qué recursos (libros, cursos, comunidades) son más útiles para developers, y cómo medir el progreso en algo tan difícil de cuantificar como la comunicación y la influencia.

El mejor código del mundo no llega a producción si nadie en la empresa entiende por qué importa. Ayúdame a ser el developer que hace que importe.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Desarrollar las habilidades interpersonales que distinguen a los developers más impactantes.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Gestión de la crítica creativa',
                'description'      => 'Cómo recibir feedback destructivo, convertirlo en algo útil y mantener la motivación cuando el cliente no entiende el diseño.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director creativo con décadas de experiencia gestionando la relación entre diseñadores y clientes, y en el desarrollo de la resiliencia creativa en equipos de diseño. El feedback destructivo, el cliente que "quiere que quede más moderno", los cambios de última hora que destruyen meses de trabajo y el "hazlo más grande" sin más explicación son parte de la realidad de cualquier diseñador. La diferencia entre un diseñador que crece y uno que se quema no está en si recibe este tipo de feedback: está en cómo lo gestiona. Necesito que me ayudes a desarrollar esa habilidad.

**Mi situación actual:**
[Describe el tipo de proyectos que haces, el tipo de clientes con los que trabajas, qué tipo de feedback te resulta más difícil de manejar y si hay alguna situación reciente que te haya dejado especialmente frustrado]

**Lo que necesito que me expliques y practiques conmigo:**

1. **Por qué el feedback de diseño es especialmente difícil de recibir:** El diseño es diferente a otras disciplinas: cuando alguien critica tu diseño, sientes que critica tu criterio, tu gusto y tu identidad profesional. Explica la psicología detrás de esta reacción: la identidad del diseñador ligada a su trabajo, el síndrome del impostor que convierte cualquier crítica en confirmación de que no eres suficientemente bueno, y la diferencia entre feedback sobre el trabajo y feedback sobre la persona, y por qué nuestro cerebro los confunde.

2. **Tipos de feedback de diseño y cómo recibirlos:** No todo el feedback malo es igual. Explica cómo categorizar el feedback que recibes para responder de forma apropiada: el feedback vago ("no me convence", "no sé, falta algo") que necesita ser excavado para encontrar la necesidad real, el feedback basado en preferencias personales que puede o no ser relevante para el objetivo del proyecto, el feedback basado en malentendidos sobre el briefing o el contexto, y el feedback genuinamente útil aunque esté mal comunicado. Para cada tipo, explica la estrategia de respuesta más efectiva.

3. **Cómo hacer preguntas que transformen el feedback malo en información útil:** "Hazlo más vibrante" no es feedback accionable. Explica las técnicas de excavación de feedback: las preguntas que transforman preferencias en objetivos ("¿qué emoción quieres que sienta el usuario al ver esto?"), las preguntas que buscan el problema detrás de la solución propuesta ("¿qué crees que está fallando en la versión actual?"), y cómo guiar al cliente hacia el territorio donde puede dar feedback útil aunque no tenga vocabulario de diseño.

4. **Defender el trabajo de diseño sin ponerse a la defensiva:** Hay una diferencia entre ceder ante el primer "no me gusta" y argumentar con fundamento por qué una decisión de diseño es la correcta. Explica cómo construir argumentos para defender el diseño: anclar cada decisión en los objetivos del proyecto y en el usuario (no en preferencias estéticas), usar datos cuando están disponibles (tests de usabilidad, análisis de conversión), y cómo comunicar esos argumentos de forma que el cliente sienta que sus opiniones han sido escuchadas aunque la decisión final sea diferente a lo que pedía.

5. **Gestionar al cliente que "quiere algo así como el de la competencia":** Esta es una de las peticiones más frustrantes para un diseñador. Explica cómo gestionar las referencias externas del cliente de forma constructiva: entender qué le atrae de esa referencia (la emoción que transmite, la claridad, el dinamismo) y separarlo de la ejecución concreta (los colores, la tipografía, el estilo), cómo usar esa información para enriquecer el briefing en lugar de para copiar, y cómo tener la conversación sobre la diferenciación de marca sin sonar condescendiente.

6. **Resiliencia creativa: mantener la motivación a largo plazo:** Los proyectos con mucho feedback destructivo tienen un coste emocional que se acumula. Explica cómo construir resiliencia creativa: la importancia del trabajo personal (proyectos propios donde tienes control total) como contrapeso a los proyectos de cliente, las comunidades de diseñadores como fuente de validación externa al cliente, cómo crear un archivo personal de trabajo del que estés orgulloso independientemente de lo que diga el cliente, y las señales de alerta del burnout creativo antes de que sea un problema serio.

7. **Contratos y procesos que reducen el feedback destructivo:** Mucho feedback destructivo nace de expectativas no alineadas desde el principio. Explica cómo diseñar el proceso de trabajo para prevenir el feedback de última hora: un briefing exhaustivo con preguntas sobre público objetivo, competidores y objetivos de negocio antes de empezar, presentaciones por fases que validan la dirección antes de invertir horas en detalles, el número de rondas de revisión incluidas en el contrato, y cómo estructurar las presentaciones de diseño para que el cliente entienda el trabajo antes de reaccionar a él.

8. **Feedback entre diseñadores: cómo construir una cultura de crítica útil:** El feedback más valioso no siempre viene del cliente: viene del equipo. Explica cómo estructurar las sesiones de critique internas en un equipo de diseño: la separación entre el momento de entender el problema y el de evaluar la solución, las normas para que el feedback sea específico y accionable (no "a mí no me gusta" sino "esto podría funcionar mejor para el objetivo X porque..."), y cómo crear un ambiente psicológicamente seguro donde los diseñadores muestran el trabajo en proceso sin miedo al juicio.

El diseñador que aprende a gestionar el feedback aprende a navegar la distancia entre lo que imagina y lo que puede llegar a existir en el mundo real. Esa distancia no es un fracaso: es donde ocurre el diseño.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Desarrollar la resiliencia para gestionar el feedback de diseño de forma constructiva sin quemarse.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Inteligencia emocional en ventas',
                'description'      => 'Leer al cliente, gestionar el rechazo y construir rapport genuino: las habilidades que separan al vendedor excelente del bueno.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con larga experiencia formando equipos comerciales de alto rendimiento, especializado en el desarrollo de la inteligencia emocional como palanca de mejora del rendimiento en ventas. Las técnicas de venta se pueden enseñar en un manual; la inteligencia emocional no. Es la diferencia entre el vendedor que cierra la venta de hoy y el que construye la cartera de clientes que definirá su carrera en los próximos años. Necesito que me ayudes a desarrollar esta dimensión de la venta que nadie me explicó en la formación comercial estándar.

**Mi situación actual:**
[Describe tu sector, el tipo de producto o servicio que vendes, tu experiencia en ventas, el tipo de interacciones comerciales que tienes (llamadas en frío, demostraciones, reuniones presenciales, ciclos largos) y cuáles son tus mayores dificultades actuales]

**Lo que necesito que me expliques y desarrolles conmigo:**

1. **Las cuatro dimensiones de la inteligencia emocional en ventas:** Explica cómo el modelo de Goleman (autoconciencia, autorregulación, empatía y habilidades sociales) se aplica específicamente a la venta: la autoconciencia como la capacidad de reconocer cómo tu estado emocional afecta a una reunión de ventas, la autorregulación como la capacidad de gestionar el nerviosismo antes de una presentación importante o la frustración después de un rechazo, la empatía como la capacidad de entender qué está sintiendo el cliente más allá de lo que está diciendo, y las habilidades sociales como la capacidad de crear conexión genuina con personas muy diferentes a ti.

2. **Escucha activa: la habilidad más infravalorada en ventas:** La mayoría de los vendedores escuchan para responder, no para entender. Explica las técnicas de escucha activa en el contexto de ventas: la escucha sin agenda (sin estar pensando en tu próximo argumento mientras el cliente habla), las preguntas de exploración que van más allá de la superficie ("¿qué ha hecho que esto sea una prioridad ahora?", "¿cuándo dices que es urgente, qué es lo que más le preocupa?"), el silencio como herramienta (no rellenar cada pausa), y cómo la escucha activa produce más información de la que cualquier cuestionario de discovery podría recopilar.

3. **Lectura emocional del cliente: señales verbales y no verbales:** Los clientes raramente dicen directamente lo que sienten. Explica cómo leer las señales emocionales durante una reunión de ventas: el lenguaje corporal y las microexpresiones (especialmente en reuniones presenciales), los cambios en el tono de voz y la velocidad del habla (cuando se acelera o ralentiza, qué indica), las palabras que revelan el estado emocional ("nos preocupa", "no estamos seguros", "lo hemos intentado antes"), y cómo ajustar tu enfoque en tiempo real basándote en lo que estás leyendo.

4. **Construcción de rapport genuino: más allá de los trucos:** Hay técnicas de rapport que suenan artificiales porque lo son. Explica cómo construir rapport genuino en ventas: la curiosidad real por el negocio y la persona del cliente (que solo se consigue investigando antes de la reunión y escuchando durante ella), el uso de la vulnerabilidad apropiada (compartir información sobre ti mismo que crea reciprocidad sin ser inapropiado), y la coherencia entre lo que dices en la reunión de ventas y lo que haces después (el rapport se destruye en la post-venta, no en la venta).

5. **Gestión del rechazo: la habilidad que define a los mejores vendedores:** El rechazo es parte estructural de las ventas y, sin embargo, la mayoría de los vendedores no tienen estrategias explícitas para manejarlo. Explica las técnicas de gestión del rechazo: la separación cognitiva entre el rechazo a la propuesta y el rechazo a la persona, cómo procesar un rechazo sin rumiarlo (la técnica del "siguiente"), qué aprender de cada "no" de forma sistemática (el debrief de pérdida), y cómo mantener la energía emocional positiva después de una racha de rechazos que objetivamente destruye la confianza.

6. **Gestión de las emociones del cliente durante la objeción:** Las objeciones tienen siempre una dimensión emocional detrás de la racional. Explica cómo manejar las emociones del cliente durante la fase de objeciones: el reconocimiento emocional antes de la respuesta racional ("entiendo que esto genera incertidumbre, porque implica un cambio significativo en vuestro proceso actual"), cómo diferenciar la objeción real de la resistencia al cambio, y cómo responder a la emoción antes de responder al argumento para que el cliente sienta que le estás entendiendo, no solo intentando cerrar.

7. **Negociación con inteligencia emocional:** La negociación de precio o condiciones es el momento de mayor tensión emocional en el proceso de venta. Explica cómo gestionar esa tensión: mantener la calma cuando el cliente hace una contrapropuesta agresiva, cómo usar el silencio estratégicamente sin que sea un truco, la diferencia entre ceder por presión emocional y conceder por estrategia, y cómo mantener el rapport con el cliente durante una negociación que se pone difícil sin perder la posición.

8. **Desarrollo continuo de la inteligencia emocional en ventas:** La IE no se desarrolla con un curso de un día. Diseña un plan de desarrollo práctico: el diario de ventas (reflexión sobre qué ocurrió emocionalmente en cada interacción relevante), el feedback del equipo y del manager sobre comportamientos emocionales observables, la práctica de la meditación o el mindfulness como base de la autorregulación, y cómo medir el progreso en una habilidad tan difícil de cuantificar como la inteligencia emocional.

Las técnicas de venta te enseñan cómo hacer la venta. La inteligencia emocional te enseña a hacer que el cliente quiera comprarte. La diferencia es enorme.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Desarrollar la inteligencia emocional para construir relaciones comerciales más sólidas y gestionar mejor el rechazo.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de la influencia sin autoridad',
                'description'      => 'Cómo el PM consigue que el equipo se comprometa con la visión cuando no tiene poder de decisión sobre nadie.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Manager con experiencia senior en empresas tecnológicas que ha construido una carrera basada en la influencia sin autoridad formal. El Product Manager es el rol más paradójico de la industria tecnológica: es responsable del éxito del producto pero no tiene autoridad directa sobre ninguno de los equipos que lo hacen posible. El PM no puede ordenar: tiene que convencer, inspirar, negociar y construir coaliciones. Necesito que me ayudes a desarrollar esa capacidad de influencia que ninguna job description explica bien.

**Mi situación actual:**
[Describe el tipo de empresa y producto en el que trabajas, el tamaño del equipo, tu experiencia como PM, y las situaciones concretas donde sientes que no tienes la influencia necesaria para avanzar: con el equipo de ingeniería, con los stakeholders de negocio, con el diseño, con el liderazgo]

**Lo que necesito que me expliques y practiques conmigo:**

1. **Por qué la influencia sin autoridad es la habilidad central del PM:** Explica la naturaleza del rol de PM en relación al poder: por qué el PM tiene responsabilidad sin autoridad, cómo esto difiere del rol de un manager de línea, y por qué los mejores PMs son más efectivos precisamente por no tener poder formal (que obliga a desarrollar habilidades de influencia genuina que los managers con autoridad a veces no desarrollan). Cuáles son las fuentes de influencia del PM: expertise, visión, confianza, reciprocidad y acceso a información.

2. **Construir credibilidad técnica con el equipo de ingeniería:** Los ingenieros confían en los PMs que entienden el problema técnico, no solo el de negocio. Explica cómo construir credibilidad técnica sin ser ingeniero: entender la arquitectura del sistema a nivel suficiente para hacer buenas preguntas, conocer la deuda técnica y tenerla en el radar del roadmap, participar en las conversaciones técnicas con curiosidad genuina (no para aparentar), y cómo demostrar que valoras el trabajo de ingeniería más allá de las features que produce (la estabilidad, la escalabilidad, el testing).

3. **La visión de producto como herramienta de alineación:** La visión no es una diapositiva en el quarterly review: es la herramienta más poderosa de influencia del PM. Explica cómo construir y comunicar una visión de producto que el equipo quiera seguir voluntariamente: conectada a un problema real de los usuarios (no a los objetivos de negocio del CEO), inspiradora pero creíble (no un sueño imposible), suficientemente específica para orientar decisiones del día a día y suficientemente flexible para adaptarse sin perder coherencia. Cómo comunicarla de forma diferente según la audiencia.

4. **Técnicas de influencia con los stakeholders de negocio:** Los stakeholders de negocio (CEO, CMO, CFO, Director de Ventas) tienen sus propias prioridades que no siempre coinciden con la visión del producto. Explica cómo influir sobre ellos sin confrontación: hablar su idioma (impacto en métricas de negocio, no features), anticipar sus preocupaciones antes de que las expresen, involucrarles en el proceso de descubrimiento para que sientan que el roadmap es también suyo, y cómo gestionar las peticiones urgentes de negocio sin desordenar el roadmap sin razón suficiente.

5. **Gestionar el "equipo sin el que no puedes" cuando no te sigue:** Hay momentos en que el equipo de ingeniería o de diseño no está de acuerdo con la dirección del producto. Explica cómo gestionar esa fricción de forma constructiva: escuchar la objeción de forma genuina (a veces tienen razón), separar las objeciones técnicas legítimas de la resistencia al cambio o al esfuerzo, usar el "disagree and commit" de forma que el equipo sienta que sus argumentos han sido escuchados y valorados aunque la decisión sea diferente, y cuándo tiene sentido escalar a la dirección y cuándo no.

6. **La negociación de prioridades con el equipo de ingeniería:** La conversación más recurrente del PM es sobre qué entra en el sprint y qué no. Explica cómo negociar prioridades con el equipo de ingeniería de forma que no se convierta en una batalla de poder: el uso de criterios explícitos de priorización (RICE, ICE, valor/esfuerzo) en lugar de opiniones, la involucración del equipo técnico en la estimación y la priorización (cuando participan en la decisión, se comprometen más con la ejecución), y cómo manejar la situación cuando hay presión externa (de negocio, de ventas) para incluir algo que el equipo técnico considera un error.

7. **Construcción de coaliciones y alianzas internas:** La influencia a escala se construye con alianzas. Explica cómo identificar a los aliados naturales en la organización: las personas cuyas metas se alinean con las del producto, cómo invertir en esas relaciones antes de necesitarlas (no solo cuando quieres algo), la reciprocidad como principio de influencia a largo plazo, y cómo construir una red interna que te dé información temprana sobre cambios de prioridad y problemas antes de que lleguen al equipo.

8. **Gestión emocional del PM: la frustración de la influencia sin autoridad:** La posición del PM puede ser emocionalmente agotadora: eres responsable del resultado pero no controlas los medios. Explica cómo gestionar la frustración de este rol: la diferencia entre lo que puedes controlar (la calidad de la información, la claridad de la visión, la consistencia de la comunicación) y lo que no (las decisiones de otras personas), cómo procesar los fracasos y las decisiones con las que no estás de acuerdo sin quemarte, y cuándo la frustración es una señal de que algo en el sistema organizacional debe cambiar (y cómo iniciar esa conversación).

La influencia sin autoridad no es manipulación: es liderazgo genuino. Y el PM que la domina es más poderoso que cualquier manager con autoridad formal.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Desarrollar la capacidad de influir y alinear equipos sin tener autoridad formal sobre ellos.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Coaching para managers',
                'description'      => 'El manager que hace coaching desarrolla a su equipo más rápido: técnicas, preguntas poderosas y el hábito del 1:1 efectivo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach ejecutivo con experiencia trabajando con managers de empresas tecnológicas en el desarrollo de sus habilidades de coaching y liderazgo. El manager que manda y controla puede extraer rendimiento a corto plazo; el manager que hace coaching desarrolla a las personas de su equipo de forma que crecen más allá de lo que cualquier plan de formación podría conseguir. Necesito que me enseñes a integrar el coaching en mi forma de gestionar, sin que se convierta en una carga añadida a todo lo que ya tengo que hacer.

**Mi situación actual:**
[Describe tu rol como manager, el tamaño y perfil de tu equipo (experiencia, tipo de trabajo, si es remoto o presencial), qué tipo de manager crees que eres ahora mismo y cuáles son tus mayores dificultades en el desarrollo de tu equipo]

**Lo que necesito que me expliques y practiques conmigo:**

1. **La diferencia entre gestionar y hacer coaching:** Muchos managers confunden el coaching con dar consejos más lentos. Explica la diferencia fundamental: el manager tradicional diagnostica el problema y da la solución; el manager coach hace preguntas que ayudan al colaborador a encontrar su propia solución. Por qué el segundo enfoque produce resultados más duraderos (el colaborador que resuelve solo tiene más confianza y más capacidad para resolver el siguiente problema), cuándo usar el modo coach y cuándo el modo directivo (no todo momento requiere coaching), y cómo hacer la transición sin que el equipo perciba el cambio como artificioso.

2. **El 1:1 como la herramienta de desarrollo más poderosa:** La reunión 1:1 semanal o quincenal es el lugar donde ocurre el coaching. Explica cómo estructurar un 1:1 efectivo: que sea la agenda del colaborador, no del manager (el 1:1 no es una revisión de estado del proyecto), las preguntas de apertura que invitan a la reflexión ("¿qué está funcionando bien?", "¿qué te está generando más dificultad ahora mismo?", "¿en qué quieres avanzar esta semana?"), cómo usar el tiempo para hablar de desarrollo profesional no solo de tareas inmediatas, y cómo tomar notas de los compromisos para dar seguimiento.

3. **Las preguntas poderosas del manager coach:** El coaching no es interrogar: es invitar a la reflexión con las preguntas correctas. Explica los tipos de preguntas de coaching más efectivos en el contexto del trabajo: las preguntas de exploración ("¿qué opciones tienes?", "¿qué pasaría si...?"), las preguntas de responsabilidad ("¿qué depende de ti en esto?", "¿qué podrías hacer diferente?"), las preguntas de visión ("¿cómo te imaginas que esto funciona bien?", "¿qué quieres conseguir en tu carrera en los próximos dos años?") y cómo calibrar el nivel de profundidad de la pregunta al nivel de confianza de la relación.

4. **Dar feedback de desarrollo (no solo correctivo):** El feedback más común del manager es el correctivo ("esto no está bien hecho"). El feedback de desarrollo es más raro y más valioso. Explica la diferencia entre ambos y cómo dar feedback de desarrollo: observaciones específicas sobre fortalezas que el colaborador no siempre ve en sí mismo ("cuando presentas así, consigues que la audiencia se enganche porque..."), conexión de esas fortalezas con oportunidades de crecimiento ("si desarrollas más esta capacidad, podrías..."), y el seguimiento del desarrollo a lo largo del tiempo para que el colaborador vea su propio progreso.

5. **Identificar el tipo de apoyo que necesita cada persona:** No todos los miembros del equipo necesitan el mismo tipo de apoyo en el mismo momento. Explica la matriz situacional del liderazgo de Hersey y Blanchard: los cuatro cuadrantes según el nivel de competencia y motivación del colaborador (desde el principiante entusiasta hasta el experto autónomo), y cómo adaptar tu estilo de manager (directivo, de apoyo, de coaching, delegador) según en qué cuadrante está cada persona en cada tarea concreta.

6. **Conversaciones de carrera: más allá de la revisión anual:** La revisión de desempeño anual no es el momento para hablar de carrera: llega demasiado tarde. Explica cómo integrar las conversaciones de desarrollo profesional en el día a día: preguntas sobre aspiraciones a largo plazo ("¿dónde quieres estar en tres años?", "¿qué tipo de trabajo te da más energía?"), la identificación de oportunidades de crecimiento en los proyectos actuales (qué puede hacer diferente esta persona en este proyecto para estirar sus capacidades), y cómo actuar como sponsor (no solo mentor) abriendo puertas dentro de la organización.

7. **Coaching para la autonomía: dejar de ser el cuello de botella:** Muchos managers se quejan de que su equipo les consulta todo. La solución no es decir "decídelo tú": es hacer coaching para construir la confianza y el criterio que permiten la autonomía. Explica cómo hacer este proceso: devolver preguntas con preguntas ("¿qué harías tú?"), validar las decisiones del equipo incluso cuando no son las que tú hubieras tomado, construir marcos de decisión explícitos que permitan al equipo saber cuándo puede decidir solo y cuándo necesita tu input.

8. **Construir el hábito del coaching como manager:** El coaching no puede ser una actividad separada del trabajo: tiene que convertirse en una forma de estar. Explica cómo integrar el mindset de coaching en el día a día del manager: el hábito de hacer una pregunta antes de dar una respuesta, la práctica de la escucha sin agenda en las reuniones de equipo, y cómo medir el impacto del coaching (no con métricas, sino con observaciones: ¿el equipo trae más iniciativas? ¿Resuelven más problemas solos? ¿El ambiente es de más confianza y menos dependencia?).

El mejor equipo no es el que mejor ejecuta instrucciones: es el que mejor piensa. El manager coach construye ese equipo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Integrar el coaching en la forma de gestionar para acelerar el desarrollo del equipo.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Negociación financiera',
                'description'      => 'Negocia créditos, valoraciones, condiciones de pago y honorarios de asesores con los principios de los mejores deal-makers.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor financiero con amplia experiencia en negociaciones de alto valor: financiación bancaria, rondas de inversión, adquisiciones, acuerdos con proveedores estratégicos y honorarios de asesores. La negociación financiera tiene reglas propias que van más allá de las técnicas generales de negociación: los números se pueden cuestionar, las valoraciones son opinables y las condiciones de un contrato financiero se pueden negociar mucho más de lo que la mayoría de los empresarios cree. Necesito que me enseñes a negociar mejor en contextos financieros.

**Mi contexto:**
[Describe el tipo de negociación que tienes próximamente o que haces con frecuencia: negociación de crédito bancario, condiciones de pago con proveedores, honorarios de asesoría o consultoría, término sheet de una ronda de inversión, precio en una M&A, o cualquier otro contexto financiero]

**Lo que necesito que me expliques:**

1. **Principios de negociación que aplican específicamente a los financiero:** La negociación financiera tiene características que la distinguen: los números crean una ilusión de objetividad (un tipo de interés del 4,5% parece objetivo pero puede negociarse), las condiciones no económicas pueden valer tanto como las económicas (garantías, covenants, plazos, opciones), y la relación a largo plazo con bancos, inversores o socios importa más que ganar una negociación puntual. Explica los principios clave con ejemplos concretos.

2. **Negociación de financiación bancaria:** La mayoría de los empresarios acepta las condiciones del banco como si fueran inamovibles. Explica qué se puede negociar en un crédito bancario: el tipo de interés (spread sobre el Euribor o tipo fijo), las comisiones (apertura, estudio, disponibilidad), las garantías (avales personales, hipotecas, pignoraciones), los covenants financieros (ratios de deuda, restricciones a nuevas inversiones o distribución de dividendos) y los plazos de amortización y carencia. Qué palancas tienes como prestatario para negociar cada uno.

3. **Negociación de un term sheet con inversores:** El term sheet de una ronda de inversión es uno de los documentos más negociables que existen, pero la mayoría de los fundadores no sabe cuáles son los términos que de verdad importan. Explica los términos más relevantes más allá de la valoración: las preferencias de liquidación (participating vs. non-participating, múltiplos), los derechos de antidilución (broad-based weighted average vs. ratchet), los derechos de arrastre y acompañamiento (drag-along y tag-along), los asientos en el consejo y los derechos de veto, y el pro-rata en siguientes rondas. Cuáles son los términos más destructivos para el fundador y cómo negociarlos.

4. **Negociación de condiciones de pago con proveedores y clientes:** El capital de trabajo es uno de los mayores consumidores de caja en las empresas en crecimiento. Explica cómo negociar condiciones de pago favorables: con proveedores (ampliar el plazo de pago sin dañar la relación, descuentos por pronto pago cuando tienes caja, confirming y factoring), con clientes (cobro anticipado o parcial antes de entrega, descuentos por pago rápido, penalizaciones por retraso con base legal).

5. **Negociación de honorarios de asesores, consultores y abogados:** Los honorarios de asesores financieros, abogados M&A y consultores estratégicos son mucho más negociables de lo que parece. Explica cómo negociar honorarios profesionales: la diferencia entre el fee fijo, el por hora y el de éxito (success fee), cómo comparar propuestas de distintos asesores, qué incluir en el scope para que el precio sea comparable, cómo negociar caps de horas en los presupuestos de abogados, y cuándo tiene sentido pagar más por calidad vs. cuándo el diferencial de calidad no justifica el diferencial de precio.

6. **BATNA y ZOPA en negociaciones financieras:** Los conceptos de BATNA (Best Alternative to a Negotiated Agreement) y ZOPA (Zone of Possible Agreement) son más críticos en negociaciones financieras que en casi cualquier otro contexto. Explica cómo identificar y fortalecer tu BATNA en cada tipo de negociación financiera (tener más de una oferta bancaria, tener más de un inversor en el proceso, tener acceso a financiación alternativa) y cómo estimar la ZOPA para saber cuánto margen de negociación real existe.

7. **El factor tiempo en la negociación financiera:** En la negociación financiera, quien tiene más tiempo tiene más poder. Explica cómo el tiempo afecta a la negociación: por qué nunca debes negociar bajo presión de tiempo si puedes evitarlo (y cómo prepararte con suficiente antelación), cómo usar el tiempo como herramienta cuando el poder de negociación está a tu favor (crear urgencia artificial en el vendedor, alargar el proceso cuando tú eres el comprador), y cómo gestionar la negociación cuando el plazo es real e inamovible.

8. **Post-negociación: el seguimiento y la relación a largo plazo:** En las negociaciones financieras, la firma del contrato no es el final: es el principio de una relación. Explica la importancia de la gestión de la relación post-negociación: cómo mantener la confianza del banco o del inversor en las malas épocas (comunicar proactivamente los problemas antes de incumplir un covenant), cómo construir una relación con los asesores que haga que la siguiente negociación parta de una posición mejor, y cómo documentar los aprendizajes de cada negociación para mejorar en la siguiente.

La negociación financiera no es solo sobre el dinero: es sobre el control, la flexibilidad y la relación. Los mejores deal-makers lo saben.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Negociar mejor en contextos financieros: créditos, rondas de inversión, condiciones de pago y honorarios.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Negociación de contratos complejos',
                'description'      => 'La dinámica de la negociación contractual: cuándo ceder, cuándo mantener y cómo crear acuerdos que ambas partes quieran cumplir.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado transaccional con amplia experiencia en la negociación de contratos mercantiles complejos: acuerdos de colaboración, contratos de servicios de alto valor, joint ventures, acuerdos de distribución, contratos de tecnología y M&A. La negociación de contratos no es solo sobre protegerse jurídicamente: es sobre diseñar el acuerdo que, si todo va bien, nadie volverá a leer. Los contratos que las partes quieren cumplir son los que se negocian con honestidad, con equilibrio y con visión de largo plazo. Necesito que me enseñes a negociar mejor en el ámbito contractual.

**Contexto del contrato:**
[Describe el tipo de contrato que estás negociando o que negocias habitualmente: con quién es la contraparte (cliente, proveedor, socio, inversor), cuál es el objeto del contrato y cuál es el desequilibrio de poder entre las partes]

**Lo que necesito que me expliques:**

1. **La estrategia de negociación contractual: antes de sentarse a la mesa:** La negociación contractual no empieza cuando llega el primer borrador: empieza mucho antes. Explica la preparación estratégica: la identificación de los intereses reales de ambas partes (no solo las posiciones declaradas), la construcción del BATNA propio (qué pasa si no llegamos a acuerdo), la estimación del BATNA de la contraparte, la clasificación de cláusulas en "esenciales" (no cedo bajo ningún concepto), "importantes" (cedo a cambio de algo) y "negociables" (puedo ceder libremente), y cómo usar esa clasificación para estructurar la negociación.

2. **Las cláusulas que más importan y las que se negocian demasiado:** Los abogados a veces negocian durante horas cláusulas que nunca se aplicarán, y ceden en cláusulas que definen el resultado económico del contrato. Explica cuáles son las cláusulas que de verdad importan en contratos complejos: el objeto y el alcance del contrato (la fuente de la mayoría de los conflictos futuros), las condiciones de pago y las penalizaciones por retraso, las cláusulas de limitación de responsabilidad y exoneración, las condiciones de resolución y sus consecuencias económicas, la propiedad intelectual (quién es dueño de qué tras el contrato) y los compromisos de confidencialidad y no competencia.

3. **La negociación del borrador: las técnicas del redline:** La negociación contractual se hace sobre el texto, no sobre principios abstractos. Explica las técnicas de la negociación de un borrador contractual: por qué es una ventaja significativa ser quien propone el primer borrador (y cómo aprovecharlo), las técnicas de redline que comunican claramente lo que es inaceptable vs. lo que es preferible, cómo agrupar cambios para hacer intercambios (acepto esto si aceptas aquello), y cómo gestionar el proceso cuando hay múltiples contrapropuestas abiertas simultáneamente.

4. **Negociación con desequilibrio de poder: cuando la contraparte es más grande:** Muchas negociaciones ocurren entre partes con poderes muy desiguales: el proveedor pequeño frente al cliente corporativo, la startup frente al gran fondo de inversión. Explica las técnicas para negociar desde una posición más débil: construir el BATNA antes de empezar (otras opciones que limiten la dependencia), identificar las necesidades que solo tú puedes satisfacer (el poder de especialización), negociar a nivel de persona antes de negociar en el contrato (el poder de la relación), y cuándo tiene sentido alejarse de un acuerdo aunque sea costoso a corto plazo.

5. **Las cláusulas de resolución de conflictos: diseñar el proceso antes del conflicto:** Cuando dos partes negocian un contrato, ninguna espera que vaya a haber un conflicto. Por eso las cláusulas de resolución se negocian sin urgencia y suelen ser las más desequilibradas. Explica cómo diseñar cláusulas de resolución de conflictos que sean genuinamente equilibradas: la cláusula de escalado interno (intentar resolver entre los responsables antes de llevar a abogados), la mediación como paso previo al arbitraje, la elección entre arbitraje y tribunales ordinarios (cuándo conviene cada uno), y la ley aplicable y la jurisdicción.

6. **Negociación de contratos de tecnología y SaaS:** Los contratos de software tienen particularidades que los abogados generalistas no siempre conocen bien. Explica las cláusulas más relevantes en contratos de tecnología: los SLAs y sus consecuencias (créditos de servicio, resolución por incumplimiento reiterado), la portabilidad de datos y los plazos de exportación al finalizar el contrato, las cláusulas de seguridad y notificación de brechas, la propiedad de los datos generados en el uso del software, y las cláusulas de subcontratación y cadena de proveedores (especialmente relevantes para el cumplimiento del RGPD).

7. **La comunicación durante la negociación: tono, ritmo y gestión de la relación:** Los mejores negociadores de contratos no son los más agresivos: son los que saben mantener la relación con la contraparte incluso en los momentos de mayor tensión. Explica cómo gestionar la comunicación durante una negociación compleja: el tono correcto en los emails de redline (firme en lo esencial, flexible en lo negociable, siempre respetuoso), cuándo es mejor una llamada que un email, cómo manejar los momentos de bloqueo sin romper la negociación, y cómo separar la posición de la persona en los momentos de desacuerdo intenso.

8. **El cierre y la gestión post-firma:** La firma del contrato no es el fin: es el principio de la relación contractual. Explica cómo gestionar el momento del cierre (cómo asegurar que ambas partes tienen claras sus obligaciones antes de firmar, la carta de cierre o de aclaración de interpretación) y la relación post-firma: cómo establecer los mecanismos de seguimiento del contrato (reuniones de revisión, reportes de cumplimiento), cómo gestionar las modificaciones cuando las circunstancias cambian, y cómo documentar los incumplimientos si ocurren de cara a una eventual reclamación.

El mejor contrato no es el más largo ni el más agresivo: es el que las dos partes quieren cumplir porque refleja un acuerdo genuinamente justo. Ayúdame a llegar a ese punto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Negociar contratos mercantiles complejos de forma estratégica y construir acuerdos duraderos.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión emocional en soporte',
                'description'      => 'El burnout del agente de CS es real: técnicas de regulación emocional para mantener la calidad cuando la carga es alta.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un psicólogo organizacional especializado en bienestar de equipos de atención al cliente y en el desarrollo de la resiliencia emocional en profesionales de soporte. El trabajo de atención al cliente es uno de los más emocionalmente exigentes que existen: el agente gestiona las emociones ajenas (y las propias), mantiene la calma con clientes que no siempre la tienen, cumple métricas estrictas y raramente recibe reconocimiento cuando las cosas van bien. El burnout en CS no es una debilidad personal: es el resultado previsible de condiciones de trabajo que no gestionan adecuadamente la dimensión emocional. Necesito que me ayudes a mejorar tanto mi propia regulación emocional como la del equipo.

**Mi situación:**
[Describe si eres agente de soporte, manager de un equipo de CS, o ambos, el tipo de empresa y de clientes, el volumen de trabajo, los canales que gestionas (email, chat, teléfono) y los principales factores de estrés que experimentas o percibes en el equipo]

**Lo que necesito que me expliques:**

1. **La carga emocional invisible del trabajo de soporte:** El trabajo de soporte implica una forma de trabajo emocional (emotional labor) que Arlie Hochschild definió como la gestión de las propias emociones para cumplir con las expectativas del trabajo. Explica qué es el emotional labor en el contexto de CS: la diferencia entre la actuación superficial (finjo estar bien aunque no lo esté) y la actuación profunda (intento sentir genuinamente empatía por el cliente), por qué ambas tienen costes emocionales diferentes, y cómo el acúmulo de ese trabajo emocional conduce al burnout si no se gestiona.

2. **Las señales de burnout específicas del trabajo de soporte:** El burnout en CS tiene manifestaciones propias. Explica las señales a nivel individual (despersonalización del cliente, cinismo creciente, pérdida de empatía, agotamiento emocional que no desaparece con el descanso, aumento de errores en el trabajo) y a nivel de equipo (aumento del absentismo, rotación elevada, bajada de las métricas de satisfacción del cliente, conflictos internos crecientes). Cómo identificar estas señales de forma temprana antes de que el problema sea grave.

3. **Técnicas de regulación emocional durante las interacciones difíciles:** Cuando el cliente está muy enfadado, el agente necesita herramientas concretas para gestionar su propia respuesta emocional en tiempo real. Explica las técnicas más efectivas: la respiración diafragmática como respuesta fisiológica al estrés (que funciona incluso en segundos entre un mensaje y el siguiente), la reinterpretación cognitiva (cambiar la narrativa sobre la situación: "este cliente no me está atacando, está asustado o frustrado"), la técnica del observador (distanciarse mentalmente de la interacción para verla con menos intensidad emocional), y cómo crear un ritual de "cierre" entre interacciones para no cargar la emoción de una al inicio de la siguiente.

4. **Empatía sin absorber el dolor del cliente:** La empatía genuina es una fortaleza en el soporte, pero la empatía sin límites lleva a la fatiga por compasión. Explica la diferencia entre empatía (entender lo que siente el cliente sin sentirlo yo) y simpatía (sentir lo mismo que el cliente), por qué los agentes más empáticos son a veces los que más riesgo de burnout tienen, y cómo desarrollar una empatía compasiva que sea genuina pero sostenible: presente en la interacción, desconectada fuera de ella.

5. **El descanso activo y la recuperación entre jornadas:** El agente que llega a casa con los problemas de los clientes en la cabeza no se recupera emocionalmente para el día siguiente. Explica las técnicas de desconexión y recuperación específicas para el perfil de CS: el ritual de cierre de jornada (una práctica deliberada que marque el fin del trabajo), la recuperación activa frente a la pasiva (por qué las actividades físicas o sociales recuperan más que ver la tele), y cómo el manager puede crear condiciones que faciliten la recuperación (respetando los horarios, no enviando mensajes fuera de horario, gestionando la carga de forma equitativa).

6. **El rol del manager en la salud emocional del equipo:** El burnout de un equipo de CS es, en gran medida, una responsabilidad del manager. Explica qué puede hacer el manager para proteger la salud emocional del equipo: los 1:1 como espacio de desahogo y no solo de revisión de métricas, la detección temprana de señales de burnout individual, la distribución equitativa de los casos más difíciles (no siempre los mismos agentes se llevan los clientes más complicados), el reconocimiento del trabajo bien hecho (no solo la gestión de los errores) y la creación de un ambiente donde pedir ayuda es normal y valorado.

7. **Gestión de los casos especialmente difíciles: violencia verbal y hostilidad:** Hay clientes que cruzan la línea del malestar legítimo hacia la hostilidad o el abuso verbal. Explica cómo gestionar estos casos: el protocolo para poner fin a una interacción de forma profesional cuando el cliente es abusivo, cómo documentar el comportamiento del cliente para escalarlo, la política de soporte que protege al agente (derecho a terminar una interacción si el cliente es abusivo) y el debriefing post-incidente que ofrece al agente el espacio para procesar lo ocurrido antes de continuar con el siguiente ticket.

8. **Cultura de equipo que combate el burnout estructuralmente:** Las técnicas individuales de regulación emocional son importantes pero insuficientes si el sistema produce burnout de forma continua. Explica cómo construir una cultura de equipo que proteja la salud emocional de forma estructural: carga de trabajo gestionable como prioridad no negociable, procesos que reducen la fricción innecesaria (herramientas que funcionan, información accesible, escalados claros), autonomía del agente para tomar decisiones que resuelven al cliente sin necesitar aprobación para cada caso, y el reconocimiento colectivo de que el trabajo de soporte es difícil, valioso y digno de ser cuidado.

El agente que llega motivado a las 9 de la mañana y quemado a las 6 de la tarde no es un problema de actitud: es un problema de diseño. Ayúdame a cambiar el diseño.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Desarrollar herramientas de regulación emocional para sostener la calidad en soporte sin quemarse.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestionar la soledad del trabajo independiente',
                'description'      => 'El aislamiento es el mayor riesgo del freelance: comunidades, rutinas y relaciones que lo compensan de forma genuina.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach especializado en bienestar de profesionales independientes con experiencia trabajando con freelancers, consultores y fundadores en solitario. La soledad del trabajo independiente es el tema del que menos se habla en la cultura del freelance. Todos hablan de la libertad, la autonomía y los ingresos. Muy pocos hablan de que el lunes a las 10 de la mañana llevas dos horas sin hablar con nadie, de que no tienes compañeros de equipo con los que procesar una situación difícil con un cliente, de que el éxito y el fracaso los vives casi siempre solo. Esto no es una debilidad: es la realidad estructural del trabajo independiente, y tiene solución. Necesito que me ayudes a diseñar mi vida de freelance de forma que la soledad no sea el precio de la libertad.

**Mi situación:**
[Describe cuánto tiempo llevas trabajando como freelance o independiente, en qué área trabajas, cómo es tu rutina actual (desde casa, coworking, cafeterías), si tienes pareja/familia o vives solo, y cómo estás viviendo el aislamiento en este momento]

**Lo que necesito que me expliques y planifiques:**

1. **La soledad del freelance: por qué es tan específica y tan difícil de gestionar:** La soledad del freelance no es la soledad ordinaria: es una combinación de aislamiento social (no hay compañeros), aislamiento profesional (nadie con quien procesar decisiones difíciles o aprender de forma informal) y a veces aislamiento emocional (cuando las cosas van mal, no hay equipo que te apoye). Explica por qué esta combinación es especialmente difícil, cómo afecta a la motivación, la creatividad y la toma de decisiones a largo plazo, y por qué es tan frecuente que los freelancers no la hablen: la presión de la narrativa de que el trabajo independiente es "la vida ideal".

2. **Comunidades profesionales para freelancers: cuáles funcionan y por qué:** Hay muchas comunidades online y offline para freelancers, pero no todas crean conexión real. Explica las características de las comunidades que funcionan: tamaño manejable (no grupos de 50.000 personas donde nadie se conoce), orientación al aprendizaje y al apoyo mutuo (no solo al networking de interés), regularidad de la interacción (no un grupo de Slack donde nadie habla). Para mi área específica, qué tipos de comunidades existen y cómo encontrar las que tienen vida real.

3. **Grupos de pares y mastermind: la comunidad más poderosa para el freelance:** Un grupo pequeño de freelancers del mismo nivel (no competidores directos) que se reúne regularmente para compartir retos, dar feedback y rendir cuentas es una de las herramientas más poderosas para combatir la soledad y acelerar el negocio. Explica cómo encontrar o crear un grupo de mastermind para freelancers: el tamaño ideal (3-6 personas), la frecuencia y el formato de las reuniones, las normas que hacen que el grupo funcione a largo plazo, y cómo gestionar la dinámica cuando algún miembro no está aportando.

4. **Diseñar una rutina que combata el aislamiento de forma proactiva:** El aislamiento no se combate esporádicamente: se combate con una rutina que incluya interacción social como una prioridad, no como algo que ocurre si queda tiempo. Diseña una rutina semanal que incorpore contacto humano de forma intencional: reuniones virtuales regulares con otros freelancers, días de coworking (aunque sea informal en una cafetería), compromisos sociales fijos que no se cancelen cuando hay trabajo, y la separación física entre espacio de trabajo y espacio de vida (especialmente si trabajas desde casa).

5. **Relaciones con clientes como fuente parcial de conexión profesional:** Los clientes no son amigos, pero la relación con un buen cliente tiene una dimensión de colaboración y de reconocimiento que puede compensar parte del aislamiento profesional. Explica cómo cultivar relaciones de cliente que vayan más allá del transaccional: la inversión en entender el negocio y el contexto del cliente (que genera conversaciones más ricas), el seguimiento genuino después de un proyecto, y cómo mantener el contacto con antiguos clientes con los que tienes buena relación sin que parezca solo interesado.

6. **Gestión de los momentos de mayor vulnerabilidad:** Hay momentos en el freelance en que la soledad golpea con más fuerza: el primer mes después de perder un cliente importante, un período de sequía de proyectos, cuando un proyecto va mal y no tienes equipo con quien procesarlo, o cuando tienes un gran éxito y nadie con quien celebrarlo de verdad. Explica cómo prepararse para esos momentos antes de que lleguen: tener identificadas las personas a las que llamar (no las que crees que deberías llamar, sino las que realmente llamas), los rituales de autocuidado que funcionan para ti, y cómo separar la conversación de trabajo de la conversación de apoyo emocional.

7. **La línea entre soledad productiva y aislamiento dañino:** No toda soledad es negativa: la capacidad de trabajar solo con concentración y sin distracción es una ventaja competitiva del freelance. Explica la diferencia entre la soledad elegida y productiva (tiempo de deep work, reflexión estratégica, escritura) y el aislamiento no elegido que daña la salud mental y la motivación. Cómo distinguir una de la otra en uno mismo, y qué señales de alerta indican que el aislamiento está empezando a tener efectos negativos que requieren acción.

8. **Un plan de conexión para los próximos 90 días:** El propósito de una conversación sobre la soledad del freelance no es solo entenderla: es actuar. Diseña un plan concreto de 90 días para mejorar mi nivel de conexión social y profesional: qué comunidades explorar en el mes 1, cómo empezar a construir relaciones en ellas en el mes 2, y qué hábitos de conexión quiero haber establecido al final del mes 3. Con compromisos específicos, no con intenciones vagas.

La libertad del freelance no tiene que pagarse con soledad. Ayúdame a diseñar una forma de trabajar independiente que incluya conexión real, no como lujo, sino como parte del modelo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 15,
                'use_case'         => 'Diseñar un plan para combatir el aislamiento del trabajo independiente y construir conexiones genuinas.',
                'vote_score'       => 38,
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
