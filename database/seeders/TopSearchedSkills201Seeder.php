<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills201Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Mentoring en marketing: desarrollar el equipo creativo',
                'description'      => 'El director de marketing que hace crecer a su equipo: las conversaciones de desarrollo, el feedback sobre el trabajo creativo y el plan de carrera para los profesionales de marketing que quieren avanzar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de marketing con experiencia desarrollando equipos creativos en empresas de consumo y tecnología, que ha mentoreado a docenas de profesionales de marketing en distintas especialidades y etapas de carrera. Voy a explorar contigo el mentoring en marketing como práctica de liderazgo y desarrollo de equipo.

Mi contexto: [describe tu situación: eres un marketing manager o director que quiere desarrollar a alguien de tu equipo, o un profesional de marketing que busca orientación sobre cómo crecer; la especialidad del mentee y el área en la que quieres que se desarrolle]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Diagnóstico del mentee: de dónde viene y a dónde quiere ir**
El mentoring efectivo empieza por entender a la persona, no por dar consejo. Explícame cómo hacer el diagnóstico inicial del profesional de marketing que quieres desarrollar: las preguntas que revelan sus motivaciones reales (qué tipo de trabajo le da energía, dónde quiere estar en tres años, qué le frena), la evaluación de sus fortalezas actuales (técnicas, estratégicas, relacionales), y la identificación de los gaps que limitan su siguiente paso.

Dame las 10 preguntas de diagnóstico que usarías en la primera conversación de mentoring con un marketing manager que quiere crecer hacia un rol de dirección.

**2. El feedback sobre el trabajo creativo: la habilidad más difícil del mentor**
Dar feedback sobre trabajo creativo es especialmente delicado porque toca la identidad profesional del creativo. Explícame cómo dar feedback sobre campañas, copies, creatividades o estrategias de contenido de forma que sea útil para el desarrollo y no solo una corrección del trabajo: la separación entre el feedback de calidad del entregable y el feedback de desarrollo profesional, cómo dar feedback sobre el proceso de pensamiento creativo (no solo el resultado), y cómo hacer que el mentee desarrolle su propio criterio en lugar de depender del tuyo.

Dame un framework para la conversación de feedback post-campaña que desarrolla el criterio creativo del mentee.

**3. Las conversaciones de desarrollo que cambian cosas**
La mayoría de las conversaciones de desarrollo son status updates disfrazados de mentoring. Explícame qué convierte una conversación de mentoring en marketing en una conversación que realmente cambia algo: las preguntas que llevan al mentee a sus propias conclusiones en lugar de darle las respuestas, cómo trabajar los momentos de duda o bloqueo creativo, la gestión de las situaciones donde el mentee tiene potencial pero no confianza, y cómo adaptar la conversación cuando el mentee está creciendo rápido vs. cuando está estancado.

**4. El plan de carrera en marketing: del specialist al generalista estratégico**
El marketing tiene múltiples caminos de carrera y no todos llevan al mismo lugar. Explícame cómo diseñar el plan de carrera para los profesionales de marketing más frecuentes: el especialista en paid media que quiere crecer hacia la estrategia, el content manager que quiere gestionar equipo, el brand manager que aspira a CMO, y el marketing manager que quiere hacer la transición a producto. Para cada perfil, los pasos, las experiencias que hay que tener y las habilidades que hay que desarrollar.

**5. Exponer al mentee a experiencias de crecimiento**
El mentoring no ocurre solo en conversaciones: ocurre en la exposición a situaciones que estiran. Explícame cómo el mentor de marketing crea oportunidades de desarrollo para el mentee dentro del trabajo diario: cuándo darle un proyecto que está por encima de su nivel actual, cómo incluirlo en conversaciones estratégicas antes de que esté "listo", la delegación progresiva de responsabilidad con red de seguridad, y cómo hacer el debrief después de una experiencia difícil (cuando el proyecto no salió bien, cuando la presentación fue dura, cuando el cliente rechazó la campaña).

**6. Medir el progreso y ajustar el plan**
El mentoring sin seguimiento es una conversación bonita sin impacto. Explícame cómo medir si el mentoring está funcionando: los indicadores de desarrollo del profesional de marketing (calidad del trabajo, autonomía en las decisiones, capacidad de dar y recibir feedback, influencia en el equipo), cómo hacer las revisiones periódicas del plan de desarrollo, y cómo gestionar la conversación cuando el mentee no está progresando a la velocidad esperada.

Quiero frameworks concretos, preguntas reales de conversación de mentoring y ejemplos de planes de desarrollo que pueda adaptar a mi equipo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Desarrollar las habilidades de mentoring para hacer crecer a los profesionales del equipo de marketing',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Tech mentorship: hacer crecer a los developers juniors',
                'description'      => 'El senior engineer que desarrolla al junior: las sesiones de pair programming, el code review como herramienta de enseñanza y el proceso de dar autonomía progresiva sin soltar demasiado pronto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un senior engineer con experiencia mentoreando a developers juniors en equipos de product engineering, que ha pensado profundamente en qué hace que un junior se convierta en un mid-level engineer rápidamente y qué lo mantiene estancado. Voy a explorar contigo el tech mentorship como práctica sistemática.

Mi contexto: [describe tu situación: eres un senior engineer, tech lead o engineering manager que tiene a su cargo el desarrollo de un junior o de varios; el stack tecnológico y el tipo de trabajo que hace el mentee]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El diagnóstico del junior: dónde está y adónde va**
No todos los juniors tienen las mismas brechas. Explícame cómo hacer el diagnóstico inicial del developer junior: la evaluación técnica (qué conceptos tiene sólidos vs. cuáles son frágiles, dónde aplica patrones memorizados sin entenderlos), la evaluación de los hábitos de trabajo (cómo hace debugging, cómo gestiona la incertidumbre, cuánto tarda en pedir ayuda), y la evaluación de las habilidades blandas (comunicación en el equipo, capacidad de dar y recibir feedback de código).

Dame las preguntas técnicas y de proceso que usarías en la primera sesión de diagnóstico con un junior developer.

**2. El pair programming como herramienta de enseñanza**
El pair programming con el mentor es una de las formas más efectivas de transferir conocimiento. Explícame cómo estructurar las sesiones de pair programming para que sean una herramienta de desarrollo y no solo una forma de que el senior haga el trabajo del junior: cuándo el senior conduce y cuándo el junior conduce (y cómo el senior navega cuando el junior conduce de forma ineficiente), las preguntas que el mentor hace mientras programa para desarrollar el pensamiento del junior, y cómo elegir las tareas correctas para las sesiones de pair.

Dame un protocolo para una sesión de pair programming de una hora orientada al desarrollo del junior.

**3. El code review como feedback de desarrollo**
El code review es una de las herramientas de mentoring más infrautilizadas. Explícame la diferencia entre el code review que solo busca errores y el que desarrolla al junior: cómo dar feedback en el PR que explica el por qué (no solo el qué cambiar), cómo calibrar el nivel del feedback según el momento del junior (no dar 20 comentarios cuando está aprendiendo a estructurar el código), la diferencia entre los comentarios que son obligatorios, los que son sugerencias y los que son aprendizaje para el futuro, y cómo hacer que el junior cierre el ciclo de aprendizaje de cada PR.

Dame ejemplos de comentarios de code review: la versión que solo corrige y la versión que enseña.

**4. La autonomía progresiva: dar responsabilidad sin soltar demasiado pronto**
El mayor reto del mentoring técnico es saber cuándo el junior está listo para trabajar solo. Explícame cómo gestionar la autonomía progresiva: las fases (pair completo → pair con el junior liderando → trabajo autónomo con check-ins → revisión solo al final), los indicadores de que el junior está listo para más autonomía (hace las preguntas correctas, detecta sus propios errores, explica su razonamiento), y las señales de que se le ha dado demasiada autonomía demasiado pronto (patrones de bloqueo silencioso, soluciones que funcionan pero que no son sostenibles).

**5. Las conversaciones de desarrollo técnico**
El mentoring no ocurre solo en el código: ocurre en las conversaciones. Explícame qué conversaciones tiene regularmente el mentor técnico con el junior: el check-in semanal de desarrollo (qué aprendiste esta semana, qué te bloqueó, qué quieres aprender), las conversaciones de carrera (dónde quiere estar en dos años, qué tipo de engineer quiere ser), y las conversaciones difíciles cuando el junior está cometiendo errores de comportamiento (no pide ayuda cuando se bloquea, hace estimaciones irreales, entrega sin testear).

Dame el protocolo de la 1:1 de desarrollo para un junior engineer.

**6. Construir el pensamiento de ingeniero, no solo las habilidades técnicas**
La diferencia entre un buen junior y un buen mid-level engineer es el pensamiento de ingeniería: la capacidad de entender los trade-offs, de hacer las preguntas correctas antes de codificar, y de pensar en el mantenimiento además de en la funcionalidad. Explícame cómo el mentor desarrolla este pensamiento: los ejercicios de diseño de sistemas simplificados que desarrollan el pensamiento arquitectónico, las conversaciones sobre los por qué de las decisiones técnicas del codebase existente, y cómo enseñar al junior a leer código ajeno como una fuente de aprendizaje.

Quiero técnicas concretas, protocolos de sesión y ejemplos reales de feedback técnico que pueda aplicar directamente con mi mentee.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Desarrollar un sistema de mentoring técnico que acelere el crecimiento del developer junior',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Mentoring de diseño: el ojo que se entrena',
                'description'      => 'El diseñador senior que educa la mirada del junior: los ejercicios, las critique sessions y el proceso de enseñar a tomar decisiones de diseño en lugar de dar siempre la respuesta.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un design lead con más de doce años de experiencia en diseño de producto y comunicación visual que ha mentoreado a designers juniors en distintas especialidades, desde UX research hasta motion design, y que ha reflexionado profundamente sobre qué hace que el criterio de diseño se desarrolle rápido vs. qué lo mantiene superficial. Voy a explorar contigo el mentoring de diseño como práctica sistemática.

Mi contexto: [describe tu situación: eres un diseñador senior o design lead que tiene a su cargo el desarrollo de un diseñador junior o en formación; la especialidad del mentee y el contexto de trabajo]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El diagnóstico del diseñador junior: dónde está su mirada**
El criterio de diseño no es uniforme: un junior puede tener un ojo excelente para la composición y un criterio débil para la jerarquía de información, o un gran dominio de la herramienta pero decisiones de tipografía sin fundamento. Explícame cómo hacer el diagnóstico del diseñador junior: la evaluación del criterio visual (qué puede ver que funciona vs. qué no puede articular por qué algo falla), la evaluación del proceso (cómo llega de la solución a la implementación, cómo gestiona el feedback), y la evaluación de la madurez profesional (cómo defiende sus decisiones, cómo responde al crítica).

Dame las preguntas y los ejercicios de diagnóstico que usarías en las primeras dos semanas de mentoring con un diseñador junior.

**2. Las critique sessions que desarrollan el criterio**
La crítica de diseño es la herramienta más poderosa del mentoring visual y también la más fácil de hacer mal. Explícame cómo estructurar una critique session que desarrolle el criterio del junior: la diferencia entre la crítica prescriptiva (te digo qué cambiar) y la socrática (te pregunto para que llegues tú), las preguntas que llevan al junior a analizar su propio trabajo con profundidad, cómo dar feedback sobre decisiones de diseño que son "incorrectas" sin destruir la confianza del junior, y cómo equilibrar el feedback técnico con el feedback de proceso creativo.

Dame el protocolo de una critique session de 45 minutos para un proyecto de diseño de producto.

**3. Enseñar a tomar decisiones en lugar de dar la respuesta**
El peor hábito del mentor de diseño es resolver los problemas del mentee. Explícame cómo resistir la tentación de dar la solución y en cambio desarrollar la capacidad de decisión del junior: las preguntas que activan el razonamiento de diseño en lugar de la memorización de reglas, cómo crear el espacio de exploración segura donde el junior puede tomar decisiones equivocadas y aprender de ellas, y cuándo el mentor sí debe dar la respuesta directa (porque el plazo no permite la exploración o porque el error causaría daño real).

**4. Los ejercicios que entrenan el ojo**
El criterio visual se entrena con práctica deliberada, no solo con proyectos de trabajo. Explícame los ejercicios más efectivos para desarrollar el ojo del diseñador junior: el análisis de referencias (cómo descomponer por qué una pieza funciona), el redesign de algo existente con una restricción específica, los ejercicios de tipografía que desarrollan la sensibilidad, la recreación de layouts de referencia para entender las proporciones, y la práctica de la crítica inversa (articular por qué algo que parece mal funciona o viceversa).

Dame 10 ejercicios concretos de práctica deliberada para el diseñador junior, ordenados por área de desarrollo.

**5. El desarrollo del diseñador como narrador**
El diseñador que no puede defender su trabajo tiene poco futuro. Explícame cómo el mentor desarrolla la capacidad de presentación y defensa del diseño en el junior: la estructura de la presentación de diseño que explica las decisiones (por qué este color, esta tipografía, esta composición), cómo articular el razonamiento ante stakeholders no diseñadores, y cómo gestionar el feedback que proviene de preferencias personales en lugar de criterio de diseño.

**6. El camino del junior al senior: los hitos del desarrollo**
El crecimiento en diseño no es lineal. Explícame los hitos que marcan el progreso de un diseñador junior hacia el nivel senior: cuándo el junior está listo para trabajar autónomamente en un proyecto completo, cuándo puede dar feedback útil a otros diseñadores, cuándo tiene suficiente criterio para pushback al cliente o al producto, y cuándo puede empezar él mismo a mentorizar. Y los bloqueos más comunes que frenan el crecimiento y cómo el mentor los desbloquea.

Quiero protocolos de critique concretos, ejercicios que pueda asignar esta semana y preguntas de mentoring que pueda usar en mi próxima sesión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Desarrollar el criterio de diseño del junior con práctica deliberada y critique sessions efectivas',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sales coaching: de manager a coach',
                'description'      => 'El manager de ventas que deja de gestionar para entrenar: las conversaciones de coaching post-llamada, el proceso de mejora de una objeción específica y el plan de desarrollo para el comercial que quiere mejorar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con experiencia construyendo equipos comerciales de alto rendimiento en empresas SaaS B2B, que ha hecho la transición de manager transaccional a coach de ventas y que ha visto cómo el coaching sistemático puede transformar el rendimiento de un equipo en 90 días. Voy a explorar contigo el sales coaching como habilidad de liderazgo comercial.

Mi contexto: [describe tu situación: eres un sales manager o team lead que quiere desarrollar mejor a su equipo; el tipo de venta que hace tu equipo y el mayor desafío de rendimiento que quieres resolver]

Trabaja conmigo en profundidad los siguientes bloques:

**1. La diferencia entre gestionar y hacer coaching**
La mayoría de los managers de ventas piensan que hacen coaching cuando en realidad gestionan. Explícame la diferencia: el manager transaccional (revisa el pipeline, da instrucciones, resuelve problemas del vendedor) vs. el manager coach (hace preguntas, desarrolla el criterio del vendedor, trabaja las habilidades que generan los resultados). Por qué el coaching es más difícil que la gestión y por qué los managers evitan hacerlo.

Dame un test de autodiagnóstico para que un sales manager evalúe si está gestionando o haciendo coaching.

**2. El coaching post-llamada: el momento más valioso**
La conversación después de una llamada de ventas es el momento de coaching de mayor impacto. Explícame cómo estructurar el debrief post-llamada que desarrolla al vendedor: las preguntas que llevan al vendedor a analizar su propia actuación antes de que el manager dé su opinión, cómo identificar el momento de la llamada que más impacto tuvo en el resultado (positivo o negativo), el proceso de trabajar una habilidad específica derivada del análisis de la llamada, y cómo usar herramientas de call intelligence (Gong, Chorus) para hacer el coaching basado en evidencia.

Dame el guion de una sesión de coaching post-llamada de 20 minutos.

**3. Trabajar una objeción específica hasta dominarla**
El vendedor que no maneja bien una objeción específica la va a evitar en lugar de trabajarla. Explícame el proceso de coaching para mejorar el manejo de una objeción: el diagnóstico de por qué la objeción genera problema (miedo, falta de argumento, mala detección del timing), el role-play estructurado para practicar (cómo hacer el role-play de forma que sea útil y no teatral), el feedback sobre el role-play que lleva a mejora real, y cómo medir si la mejora se traslada a las llamadas reales.

Dame el proceso completo para trabajar la objeción "es demasiado caro" con un vendedor que la maneja mal.

**4. El plan de desarrollo individualizado para el comercial**
No todos los vendedores necesitan desarrollar lo mismo. Explícame cómo crear un plan de desarrollo individualizado para cada miembro del equipo de ventas: el diagnóstico de las habilidades que más impactan en su rendimiento actual (detección de necesidades, manejo de objeciones, cierre, gestión del pipeline, prospección), la priorización de las dos o tres habilidades que si mejoran tendrán mayor impacto en los resultados, y el plan de actividades de coaching que trabajan esas habilidades específicamente.

Dame la estructura del plan de desarrollo de 90 días para un AE que tiene buen pipeline pero bajo win rate.

**5. Coaching para los distintos perfiles del equipo**
El equipo de ventas no es uniforme y el coaching no puede serlo. Explícame cómo adaptar el coaching para los distintos perfiles: el top performer que no necesita mucho coaching pero sí retención y desafío, el vendedor con potencial bloqueado por falta de confianza, el vendedor competente pero plateaued que no sigue creciendo, y el vendedor en dificultades (cuándo es un problema de habilidad, cuándo de actitud y cuándo la persona no es la correcta para el rol).

**6. Los rituales de coaching que el equipo espera**
El coaching ad hoc no construye hábito. Explícame cómo estructurar los rituales de coaching que se vuelven parte de la cultura del equipo: la 1:1 semanal de desarrollo (distinta del pipeline review), el role-play de equipo como práctica regular, el análisis colectivo de una llamada ganada y una perdida, y el reconocimiento público que refuerza los comportamientos correctos.

Quiero guiones de conversación de coaching, protocolos de role-play y el plan de 90 días que pueda adaptar a mi equipo esta semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Desarrollar las habilidades de coaching para mejorar el rendimiento del equipo de ventas de forma sistemática',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product mentoring: desarrollar el criterio de producto',
                'description'      => 'El PM senior que enseña al junior a pensar en producto: los ejercicios de product thinking, las conversaciones sobre decisiones y el proceso de desarrollar el juicio que no se aprende en ningún curso.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de producto con experiencia mentoreando a product managers juniors en empresas tech, que ha reflexionado sobre qué hace que un PM junior desarrolle el criterio de producto rápidamente y qué lo mantiene en el nivel de ejecutor de tareas. Voy a explorar contigo el mentoring de producto como práctica sistemática.

Mi contexto: [describe tu situación: eres un PM senior o head of product que tiene a su cargo el desarrollo de un PM junior o associate PM; el tipo de producto y el estadio de la empresa]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El diagnóstico del PM junior: ¿ejecutor o pensador de producto?**
Los PMs juniors tienden a sobresalir en la ejecución (gestión del backlog, coordinación del equipo, gestión de stakeholders) y a tener criterio de producto más débil (la capacidad de decidir qué construir y por qué). Explícame cómo hacer el diagnóstico inicial del PM junior: las situaciones que revelan si tiene criterio de producto o si ejecuta lo que le piden, las preguntas que muestran si entiende el negocio detrás del producto y los indicadores de madurez en la toma de decisiones.

Dame 10 preguntas para el diagnóstico inicial de un associate PM que lleva seis meses en el rol.

**2. Los ejercicios de product thinking que desarrollan el criterio**
El criterio de producto no se aprende leyendo libros: se desarrolla con práctica deliberada. Explícame los ejercicios más efectivos para desarrollar el pensamiento de producto en el junior: el análisis de productos que usa (por qué tomaron esa decisión, qué haría él diferente), el diseño de soluciones para problemas definidos con restricciones realistas, el análisis retrospectivo de decisiones de producto pasadas (qué salió bien, qué habría decidido él y por qué), y la práctica de priorización con trade-offs explícitos.

Dame 5 ejercicios concretos de product thinking que puedo asignar a un PM junior esta semana.

**3. Las conversaciones de mentoring sobre decisiones de producto**
El mejor mentoring de producto ocurre cuando hay una decisión real sobre la mesa. Explícame cómo el mentor de producto usa las decisiones del trabajo diario como oportunidades de desarrollo: cómo hacer que el junior traiga la decisión con su análisis antes de consultar, las preguntas que desafían su razonamiento sin invalidarlo, cómo enseñar a manejar la incertidumbre (tomar decisiones con información imperfecta), y cómo hacer el debrief cuando la decisión del junior resultó equivocada.

Dame el protocolo de la conversación de mentoring cuando el junior ha tomado una decisión de producto discutible.

**4. Desarrollar la sensibilidad al usuario**
El criterio de producto empieza en entender profundamente al usuario. Explícame cómo el mentor desarrolla la sensibilidad al usuario en el junior: los hábitos de research que debe cultivar (escuchar llamadas de ventas, leer tickets de soporte, hacer entrevistas de usuario regularmente), cómo analizar el comportamiento del usuario en los datos de producto, y cómo conectar los insights cualitativos con las métricas cuantitativas para tomar decisiones informadas.

**5. Exponer al junior a las conversaciones difíciles**
El criterio de producto se forja en las conversaciones difíciles: cuando el engineering no quiere construir lo que propones, cuando el stakeholder insiste en su petición, cuando los datos contradicen la intuición. Explícame cómo el mentor prepara al junior para estas situaciones: cuándo llevarlo a las reuniones como observador, cuándo darle el rol de liderazgo con red de seguridad, y cómo hacer el debrief después de una situación difícil (cuando la presentación fue mal, cuando el engineering rechazó el diseño, cuando el CEO cambió las prioridades).

**6. Los hitos del PM junior al PM senior: cuándo está listo**
El crecimiento en product management tiene indicadores claros si sabes qué buscar. Explícame los hitos que marcan la madurez del PM: cuándo puede liderar una feature de principio a fin sin supervisión, cuándo su análisis de priorización es tan bueno que no necesitas revisarlo, cuándo puede gestionar a un stakeholder difícil sin tu apoyo, y cuándo puede él mismo onboardear a un nuevo miembro del equipo. Y las conversaciones de carrera que el mentor debe tener regularmente para que el junior sepa en qué punto está y adónde va.

Quiero ejercicios concretos, protocolos de conversación de mentoring y los hitos de desarrollo que puedo usar para guiar y medir el progreso de mi mentee.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Desarrollar el criterio de producto en el PM junior con ejercicios y conversaciones de mentoring efectivas',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Coaching de carrera para empleados',
                'description'      => 'El HR business partner o el manager que hace coaching de carrera: las conversaciones sobre el futuro profesional, los planes de desarrollo individualizados y las herramientas que ayudan a las personas a definir adónde quieren ir.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un HR business partner senior con experiencia haciendo coaching de carrera a empleados en distintas etapas profesionales y sectores, desde recién egresados hasta directivos con veinte años de experiencia que quieren reorientar su carrera. Voy a explorar contigo el coaching de carrera como competencia clave de RRHH y de los managers que quieren desarrollar a su equipo.

Mi contexto: [describe tu situación: eres un HRBP, un manager que quiere hacer mejor las conversaciones de desarrollo con su equipo, o un profesional de RRHH que quiere especializarse en desarrollo de carrera]

Trabaja conmigo en profundidad los siguientes bloques:

**1. La conversación de carrera que va más allá del "¿dónde te ves en cinco años?"**
La pregunta estándar sobre los planes de carrera produce respuestas estándar que no revelan lo que la persona realmente quiere. Explícame cómo hacer conversaciones de carrera que llegan a las motivaciones reales: las preguntas que revelan qué tipo de trabajo le da energía vs. cuál le quita (en lugar de qué cargo quiere), cómo identificar los valores profesionales que guían las decisiones de carrera sin que la persona los haya articulado antes, y las conversaciones sobre lo que el empleado no quiere (que revelan tanto como lo que sí quiere).

Dame 15 preguntas de exploración de carrera que van más allá de los objetivos declarados.

**2. El diagnóstico de la situación actual: fortalezas, gaps y aspiraciones**
El plan de desarrollo efectivo empieza por un diagnóstico honesto. Explícame cómo hacer la evaluación de la situación profesional actual de la persona: la identificación de las fortalezas reales (no las que la persona cree que tiene, sino las que observas en su trabajo), los gaps entre sus capacidades actuales y las que necesita para el siguiente nivel, y la alineación entre sus aspiraciones y los recursos que tiene (habilidades, relaciones, oportunidades en la organización).

Dame una herramienta de autodiagnóstico para el empleado que puede completar antes de la conversación de coaching de carrera.

**3. El plan de desarrollo que la persona realmente ejecuta**
La mayoría de los planes de desarrollo se escriben en una reunión anual y nunca se vuelven a mirar. Explícame qué hace que un plan de desarrollo sea real y ejecutable: la selección de las dos o tres áreas de desarrollo más importantes (no diez), la definición de acciones concretas que caben en el trabajo diario (no solo cursos online), los hitos de seguimiento que hacen que el plan no se abandone, y la diferencia entre el plan que el HRBP diseña y el que la persona hace suyo.

Dame la estructura del plan de desarrollo de 12 meses que funciona para un empleado mid-level que aspira a rol de manager.

**4. Coaching para los momentos de transición**
Los momentos de transición (primera gestión de equipo, cambio de área, reorientación de carrera, regreso después de una baja) son los que más coaching necesitan. Explícame cómo hacer coaching de carrera en las transiciones más frecuentes: el profesional técnico que pasa a gestión, el especialista que quiere hacerse generalista, el empleado de alto rendimiento que no quiere hacer management pero quiere crecer, y el empleado que lleva años en la empresa y siente que ha tocado techo.

Dame el framework de coaching para cada una de estas transiciones, con las preguntas específicas de cada situación.

**5. Cuando la conversación de carrera es difícil**
No todas las conversaciones de carrera son motivadoras. Explícame cómo gestionar las situaciones difíciles: la conversación con el empleado cuyas aspiraciones no son realistas dado su rendimiento actual, la conversación cuando no hay oportunidades en la organización que satisfagan lo que la persona quiere (y la honestidad de que quizás deba buscarlo fuera), y la conversación con el empleado que no sabe qué quiere y espera que el HRBP se lo diga.

**6. El seguimiento que convierte la conversación en acción**
Una conversación de coaching de carrera sin seguimiento es una conversación que se siente bien pero no produce cambio. Explícame cómo estructurar el seguimiento: la cadencia de check-ins que mantiene el plan vivo sin volverse una carga administrativa, cómo ajustar el plan cuando las circunstancias cambian (la organización se reestructura, el empleado tiene una situación personal, la aspiración de carrera evoluciona), y cómo medir si el coaching de carrera está produciendo desarrollo real.

Quiero preguntas de coaching concretas, herramientas de diagnóstico y estructuras de plan de desarrollo que pueda usar en mis próximas conversaciones.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Hacer coaching de carrera efectivo que ayuda a los empleados a definir y alcanzar sus objetivos profesionales',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Mentoring financiero: desarrollar el pensamiento de negocio',
                'description'      => 'El CFO o director financiero que enseña a los analistas a pensar más allá de los números: las conversaciones sobre el negocio, los casos prácticos y el desarrollo del criterio financiero que distingue al analista del business partner.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO con experiencia desarrollando equipos de finanzas en empresas tech, que ha construido la función financiera desde analistas recién salidos de la universidad hasta finance business partners que son socios reales del negocio. Voy a explorar contigo el mentoring financiero como práctica de desarrollo que va más allá de la formación técnica.

Mi contexto: [describe tu situación: eres un CFO, director financiero o FP&A manager que quiere desarrollar a analistas o finance business partners; el tamaño del equipo y el nivel del mentee]

Trabaja conmigo en profundidad los siguientes bloques:

**1. La brecha entre el analista técnico y el business partner**
Los mejores analistas financieros no se convierten automáticamente en business partners. Explícame la diferencia entre las dos mentalidades: el analista que produce modelos perfectos pero no entiende por qué importan las cifras que modela, vs. el business partner que conecta cada número con una decisión de negocio. Qué hace que esta transición sea difícil (la comodidad de la precisión técnica, el miedo a opinar sobre temas de negocio, la falta de contexto sobre cómo funciona el negocio realmente) y por qué muchos financieros nunca hacen el salto.

**2. Las conversaciones sobre el negocio que desarrollan el criterio**
El mentor financiero enseña a entender el negocio, no solo los números. Explícame cómo estructurar las conversaciones de desarrollo que amplían la perspectiva del analista: las preguntas sobre el modelo de negocio (¿cómo gana dinero la empresa?, ¿cuáles son los principales drivers de coste?, ¿qué decisiones tienen más impacto en el margen?), cómo conectar cada análisis financiero con el problema de negocio que resuelve, y las conversaciones de hipótesis (si el precio sube un 10%, ¿qué pasaría en el volumen?, ¿cómo afecta al margen total?).

Dame las 10 preguntas de negocio que haría regularmente a un analista financiero para desarrollar su pensamiento más allá de los modelos.

**3. Los casos prácticos que desarrollan el juicio**
El juicio financiero se entrena con casos reales o simulados. Explícame cómo usar casos prácticos en el mentoring financiero: los tipos de casos más efectivos (decisión de inversión con información incompleta, análisis de rentabilidad de un cliente con datos ambiguos, evaluación de un escenario de crisis de tesorería), cómo presentar el caso para que el analista tome posición antes de discutir, y cómo hacer el debrief que desarrolla el razonamiento y no solo da la respuesta correcta.

Dame la estructura de un caso práctico de mentoring financiero sobre la decisión de entrar en un nuevo mercado.

**4. Enseñar a comunicar el análisis financiero**
El analista que no puede explicar su modelo a alguien de negocio tiene la mitad del valor. Explícame cómo el mentor financiero desarrolla la capacidad de comunicación del analista: la práctica de presentar el análisis en una página (la síntesis como habilidad), las conversaciones de roleplay donde el analista explica sus conclusiones a un CEO simulado, el feedback sobre el lenguaje (cuándo la jerga financiera es útil y cuándo aleja al interlocutor), y el desarrollo de la recomendación con criterio (no solo el análisis, sino la conclusión accionable).

**5. Exponer al analista a las conversaciones de negocio**
El analista que solo trabaja dentro del departamento de finanzas nunca desarrollará el contexto de negocio que necesita. Explícame cómo el mentor crea oportunidades de exposición al negocio: cuándo llevar al analista a reuniones con otros departamentos como observador, cómo asignar proyectos que requieren colaboración con operaciones, ventas o producto, y cómo hacer el debrief después de las interacciones con stakeholders de negocio.

**6. Los hitos del analista al business partner**
El desarrollo en finanzas tiene etapas claras. Explícame los indicadores de progreso del analista hacia el rol de business partner: cuándo puede defender un análisis ante el CFO sin preparación adicional, cuándo sus recomendaciones de negocio son consistentemente buenas, cuándo los equipos de negocio le consultan proactivamente, y cuándo puede hacer coaching él mismo a analistas más juniors.

Quiero preguntas de mentoring concretas, estructuras de caso práctico y los hitos de desarrollo que puedo usar para guiar a mi equipo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Desarrollar analistas financieros en business partners con pensamiento estratégico de negocio',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Supervisión y mentoring jurídico',
                'description'      => 'El socio que desarrolla al abogado junior: las sesiones de revisión de documentos como herramienta de enseñanza, el feedback sobre argumentos y el proceso de transferir el criterio jurídico que solo viene de la experiencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un socio de un despacho de abogados mediano con más de veinte años de experiencia en derecho corporativo y mercantil, que ha supervisado y mentoreado a decenas de abogados desde su incorporación hasta su promoción a asociado senior o socio, y que tiene un método claro para transferir el criterio jurídico que no está en ningún manual. Voy a explorar contigo la supervisión y el mentoring jurídico como práctica de desarrollo profesional.

Mi contexto: [describe tu situación: eres un socio, un counsel o un asociado senior que supervisa a abogados más juniors; el área de práctica y el nivel del mentee]

Trabaja conmigo en profundidad los siguientes bloques:

**1. La diferencia entre supervisar y mentorizar**
La supervisión jurídica sin mentoring produce abogados que hacen bien lo que se les dice pero no desarrollan criterio propio. Explícame la diferencia: el supervisor que corrige el borrador sin explicar por qué vs. el mentor que usa la corrección para enseñar el razonamiento jurídico, el socio que solo asigna trabajo vs. el que diseña deliberadamente la trayectoria de desarrollo del asociado, y los momentos del trabajo diario donde el mentoring ocurre de forma natural si el supervisor lo aprovecha.

**2. La revisión del documento como herramienta de enseñanza**
La revisión de documentos es la actividad más frecuente en el mentoring jurídico. Explícame cómo convertir la revisión en una herramienta de desarrollo: la diferencia entre las correcciones que solo mejoran el documento y las que desarrollan al abogado, cómo dar el feedback escrito sobre un borrador de forma que el junior entienda el razonamiento y no solo la corrección, y las conversaciones de revisión en persona que van más allá del documento (el principio jurídico detrás de la redacción, la estrategia procesal que explica la elección de un argumento).

Dame ejemplos de feedback de revisión: la versión que solo corrige y la versión que enseña el razonamiento.

**3. Transferir el criterio jurídico que no está en los libros**
El criterio jurídico más valioso no se aprende en la universidad ni en los manuales: se transfiere en conversaciones con abogados experimentados. Explícame cómo el mentor transfiere este tipo de conocimiento: el sentido del riesgo jurídico (cuándo una cláusula que parece estándar oculta un problema serio), la lectura del cliente (cuándo el cliente dice una cosa y necesita otra), el timing en la negociación (cuándo hacer una concesión y cuándo mantenerse firme), y la gestión de la incertidumbre (cómo asesorar cuando el derecho no da una respuesta clara).

Dame tres situaciones de práctica jurídica donde el criterio que se transfiere es el que distingue al abogado bueno del excelente.

**4. El desarrollo de la argumentación jurídica del junior**
El abogado junior tiene el conocimiento jurídico pero no siempre construye el argumento de la forma más efectiva. Explícame cómo el mentor desarrolla la argumentación: el feedback sobre la estructura del argumento en un escrito judicial (qué funciona, qué debilita el argumento sin necesidad), la práctica oral de argumentación con el mentor como juez o árbitro, y cómo desarrollar la capacidad de anticipar el argumento contrario en el junior.

Dame el protocolo de una sesión de preparación de argumentación oral con un asociado que va a su primera vista.

**5. Las conversaciones de carrera en el despacho**
El mentoring jurídico incluye las conversaciones sobre la carrera profesional en el derecho. Explícame cómo el socio-mentor aborda las conversaciones de desarrollo profesional del asociado: cuándo está listo para más responsabilidad, cómo gestionar sus expectativas de progresión (la promesa implícita del partnership track), las conversaciones sobre la especialización (generalist vs. specialist), y las conversaciones difíciles cuando el asociado no va a progresar al siguiente nivel.

**6. Crear una cultura de mentoring en el despacho**
El mentoring jurídico que depende de la buena voluntad de un socio no escala. Explícame cómo crear una cultura de mentoring sistemático en el despacho: los programas formales de mentoring que complementan el informal, cómo asegurar que los asociados tienen exposición a distintos socios y especialidades, y cómo medir si el mentoring está funcionando (indicadores de desarrollo del asociado, retención, calidad del trabajo).

Quiero ejemplos de feedback de revisión, protocolos de conversación de mentoring y situaciones de transferencia de criterio jurídico que pueda usar directamente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Desarrollar una práctica sistemática de mentoring jurídico que transfiere el criterio que solo viene de la experiencia',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'CS mentoring: desarrollar la habilidad de relación con el cliente',
                'description'      => 'El CS manager que enseña al junior a manejar las relaciones complejas: el role-play de situaciones difíciles, el debriefing después de una llamada delicada y el desarrollo de la inteligencia emocional aplicada al cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de customer success con experiencia desarrollando equipos de CSMs en empresas SaaS B2B, que ha construido un sistema de mentoring orientado a la habilidad que más diferencia a los CSMs de alto rendimiento: la gestión de relaciones complejas con los clientes. Voy a explorar contigo el mentoring en customer success como práctica de desarrollo de equipo.

Mi contexto: [describe tu situación: eres un CS manager o VP de CS que quiere desarrollar a CSMs juniors o de bajo rendimiento; el tipo de clientes que gestiona tu equipo y los principales desafíos de relación que aparecen]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El diagnóstico del CSM junior: ¿técnico o relacional?**
Los CSMs tienen brechas distintas. Algunos dominan el producto y el proceso pero fallan en las relaciones complejas; otros tienen gran habilidad relacional pero no aprovechan los datos para gestionar proactivamente. Explícame cómo hacer el diagnóstico inicial del CSM: la evaluación de la habilidad relacional (cómo maneja la tensión, cómo lee el estado emocional del cliente, cómo gestiona las conversaciones incómodas), la evaluación del pensamiento estratégico de cuenta (si tiene una visión del cliente más allá del ticket abierto) y los indicadores de comportamiento en las llamadas que revelan dónde están las brechas.

**2. El role-play de situaciones difíciles: entrenar antes del partido**
Las situaciones de alta presión con el cliente no son el momento de aprender: son el momento de aplicar lo que ya practicaste. Explícame cómo diseñar y ejecutar role-plays de CS que desarrollan la habilidad relacional del CSM: la selección de las situaciones que más vale la pena practicar (cliente enfadado, conversación de renovación en riesgo, entrega de malas noticias, cliente que pide algo que no podemos dar), cómo hacer el role-play de forma que sea útil y no teatral, y el debrief después del role-play que identifica el momento exacto donde el CSM perdió el hilo.

Dame el protocolo completo de un role-play de 30 minutos para la situación: cliente que amenaza con no renovar si no se resuelve un problema que lleva semanas abierto.

**3. El debriefing después de una llamada delicada**
La conversación después de una llamada difícil es el momento de mayor potencial de aprendizaje. Explícame cómo estructurar el debrief post-llamada con el CSM: las preguntas que llevan al CSM a analizar su propia actuación (¿en qué momento sentiste que perdías el control de la conversación?, ¿qué harías diferente?), cómo el manager da su lectura de la situación sin imponer su enfoque, y cómo derivar un plan de mejora concreto de la conversación.

Dame las preguntas del debrief post-llamada ordenadas por secuencia de la conversación.

**4. Desarrollar la inteligencia emocional aplicada al cliente**
La habilidad relacional del CSM de alto rendimiento incluye capacidades de inteligencia emocional específicas: detectar el estado emocional del cliente antes de que lo exprese, modular el propio estado emocional cuando el cliente está enfadado, y mantener la perspectiva a largo plazo en momentos de presión a corto. Explícame cómo el mentor desarrolla estas capacidades: los ejercicios de lectura emocional (interpretar el tono de un email o de una llamada), las técnicas de regulación emocional para situaciones de escalación, y cómo el CSM construye la resiliencia que le permite gestionar muchas cuentas complejas sin quemarse.

**5. Desarrollar el pensamiento estratégico de cuenta**
El CSM de alto rendimiento tiene una visión estratégica de cada cuenta, no solo el estado de los tickets. Explícame cómo el mentor desarrolla esta perspectiva: las conversaciones de análisis de cuenta que van más allá del health score (¿qué está pasando internamente en el cliente que no ves en los datos?, ¿cuál es el plan de expansión a 12 meses?), los ejercicios de mapeo de stakeholders del cliente, y cómo pensar en la cuenta como si fuera una inversión a gestionar.

**6. Los hitos del CSM junior al senior**
El crecimiento en CS tiene etapas claras. Explícame los indicadores de madurez del CSM: cuándo puede gestionar cuentas enterprise sin supervisión estrecha, cuándo su health scoring es tan bueno que sus predicciones de churn son fiables, cuándo puede hacer él mismo el onboarding de nuevos CSMs, y cuándo está listo para el paso al management.

Quiero protocolos de role-play, preguntas de debrief y ejercicios de desarrollo que pueda implementar con mi equipo esta semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Desarrollar la habilidad relacional y el pensamiento estratégico de cuenta en los CSMs mediante mentoring sistemático',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'El freelance que mentoriza',
                'description'      => 'Cuando el freelance senior ayuda a los que empiezan: los modelos de mentoría, la estructura de las sesiones y el beneficio profesional y reputacional de ser reconocido como referente que forma a otros.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior con más de doce años de experiencia en trabajo independiente que ha pasado de recibir mentoring a darlo, y que ha reflexionado profundamente sobre el modelo de mentoría que funciona para un freelance (a diferencia del que existe en empresas con estructuras formales de desarrollo). Voy a explorar contigo la práctica del freelance que mentoriza como etapa de desarrollo profesional y como estrategia de posicionamiento.

Mi contexto: [describe tu situación: eres un freelance con varios años de experiencia que está considerando empezar a mentorizar, o que ya da algún tipo de mentoría informal y quiere estructurarla; tu especialidad y el tipo de freelancers que podrías ayudar]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Cuándo el freelance está listo para mentorizar**
No todo freelance con experiencia está listo para mentorizar. Explícame los indicadores de que es el momento correcto: el nivel de experiencia y trayectoria que da credibilidad (no solo antigüedad), la capacidad de articular lo que sabe y por qué funciona (muchos freelancers hacen cosas bien pero no pueden enseñarlas), el tiempo disponible sin comprometer la calidad del trabajo propio, y la motivación correcta (ayudar genuinamente vs. el ego de ser el experto que da consejo).

Dame un test de autoevaluación para el freelance que está considerando empezar a mentorizar.

**2. Los modelos de mentoría para freelancers: formal, informal y pagada**
El freelance tiene opciones muy distintas sobre cómo estructurar la mentoría. Explícame los modelos más frecuentes: la mentoría informal (conversaciones esporádicas con colegas menos experimentados, sin estructura ni compromiso formal), la mentoría formal no pagada (un compromiso regular con un mentee, con estructura y objetivos), la mentoría pagada o el coaching freelance (sesiones estructuradas como servicio, con precio, propuesta de valor y metodología). Los pros y contras de cada modelo, cuándo cada uno tiene sentido y cómo evolucionar de uno a otro.

**3. La estructura de las sesiones de mentoría para freelancers**
Las sesiones de mentoría sin estructura producen conversaciones agradables sin impacto. Explícame cómo estructurar las sesiones de mentoría en el contexto freelance: la sesión de diagnóstico inicial (entender dónde está el mentee y qué quiere conseguir), la estructura de las sesiones regulares (qué tratar, en qué orden, cuánto tiempo), los formatos que funcionan para freelancers (una sesión al mes vs. semanal, async vs. síncrono, video vs. mensajería), y cómo medir si la mentoría está generando avance real.

Dame la estructura de la primera sesión de mentoría con un freelance junior que acaba de empezar y no sabe por dónde empezar a conseguir clientes.

**4. Los temas más frecuentes en la mentoría entre freelancers**
Los freelancers que empiezan tienen preguntas recurrentes. Explícame cómo abordar los temas que aparecen más en la mentoría freelance: la fijación de tarifas (cómo saber cuánto cobrar, cuándo subir tarifas), la captación de los primeros clientes, la gestión de clientes difíciles, la gestión del tiempo cuando trabajas solo y sin estructura, las propuestas y contratos, el manejo del rechazo y la incertidumbre de los ingresos variables, y el aislamiento del trabajo en solitario.

**5. El beneficio para el mentor: por qué mentorizar te hace mejor freelance**
La mentoría no es solo altruismo: tiene beneficios concretos para el freelance senior que la da. Explícame cómo mentorizar a otros mejora el trabajo propio: la clarificación del propio conocimiento (explicar lo que sabes te obliga a entenderlo mejor), el acceso a perspectivas frescas que cuestionan los hábitos establecidos, y el aprendizaje de los errores del mentee que el mentor ya superó pero puede reanalizar desde una perspectiva nueva.

**6. El posicionamiento como referente que forma a otros**
El freelance que mentoriza públicamente construye una reputación que atrae mejores clientes y oportunidades. Explícame cómo el freelance puede usar la mentoría como estrategia de posicionamiento: el contenido sobre el proceso de mentoría que muestra expertise (sin revelar lo confidencial), la construcción de una comunidad alrededor de su experiencia, las plataformas donde tiene sentido ofrecer mentoría (ADPList, LinkedIn, comunidades sectoriales), y cómo el posicionamiento como referente se traduce en clientes de mayor calidad y mejor precio.

Quiero estructuras concretas de sesión, los modelos de mentoría con sus pros y contras, y el plan de posicionamiento que puedo empezar a implementar este mes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Estructurar la práctica de mentoría del freelance senior para generar impacto en otros y beneficio reputacional propio',
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
