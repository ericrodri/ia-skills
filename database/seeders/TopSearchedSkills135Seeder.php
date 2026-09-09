<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills135Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Liderazgo creativo con inteligencia emocional',
                'description'      => 'Lidera equipos creativos con inteligencia emocional: cómo dar feedback sin matar la creatividad, gestionar los egos y crear un entorno donde las mejores ideas surjan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de liderazgo especializado en equipos creativos. Liderar un equipo creativo es uno de los retos más sutiles del management: los creativos tienen relaciones profundas con su trabajo, los egos son parte del motor creativo pero también la mayor fuente de conflicto, y el feedback mal dado puede destruir la confianza y matar la creatividad que hace valioso al equipo. Quiero desarrollar las habilidades de liderazgo creativo con inteligencia emocional que me permitan sacar lo mejor del equipo sin apagarlos.

Empieza con las preguntas que necesitas:
- Mi rol actual y la composición del equipo
- El tipo de trabajo creativo que producimos
- El mayor reto de liderazgo al que me enfrento ahora mismo
- Cómo describiría la dinámica emocional del equipo actualmente

Con esa información, desarrolla el plan de desarrollo:

**1. La inteligencia emocional aplicada al liderazgo creativo**
La IE en un líder creativo tiene dimensiones específicas: autoconciencia sobre cómo mi estado emocional afecta al equipo, gestión del ego propio como creativo que ahora lidera, empatía con el proceso creativo de cada persona del equipo y habilidad para leer la temperatura emocional del equipo antes de tomar decisiones. Evalúa mi situación en cada una de estas dimensiones.

**2. Dar feedback creativo sin matar la creatividad**
El feedback es la herramienta central del líder creativo, pero mal dado destruye la confianza y la disposición a arriesgarse. Define el framework de feedback creativo que funciona: cómo separar el juicio de la persona del juicio del trabajo, cómo dar feedback crítico que invite a la mejora en lugar de la defensiva, y cuándo y cómo dar feedback positivo que sea específico y creíble.

**3. Gestión de los egos creativos**
En los equipos creativos hay personas que se identifican fuertemente con su trabajo y que tienen una alta necesidad de reconocimiento. Cómo gestionar este tipo de personalidades: cómo crear un entorno donde el reconocimiento es distribuido y no genere competencia destructiva, cómo manejar los conflictos cuando el ego de alguien bloquea el proceso y cómo canalizar esa energía creativa hacia el bien del equipo.

**4. Creación de la seguridad psicológica**
Los equipos creativos que no se sienten seguros para experimentar y fallar producen trabajo mediocre. Cómo crear la seguridad psicológica que libera la creatividad: los comportamientos del líder que construyen seguridad, cómo responder cuando alguien propone una idea mala (sin desincentivar la próxima propuesta), y cómo gestionar el error como aprendizaje.

**5. Facilitación de las sesiones creativas**
La dinámica emocional de una sesión de brainstorming o de conceptualización determina su calidad. Cómo facilitar sesiones creativas con IE: cómo crear el ambiente emocional adecuado al inicio, cómo gestionar las dinámicas de poder que hacen que siempre hablen los mismos, cómo manejar los momentos de bloqueo creativo colectivo y cómo cerrar la sesión generando energía para la siguiente fase.

**6. Gestión de las relaciones con stakeholders no creativos**
El líder creativo hace de puente entre el equipo creativo y los stakeholders de negocio que no entienden el proceso creativo. Cómo gestionar esta relación con IE: cómo traducir las necesidades del negocio en briefings que inspiren en lugar de limitar, cómo defender el trabajo del equipo sin ponerse a la defensiva y cómo gestionar los cambios de brief de última hora que frustran al equipo.

**7. Reconocimiento y motivación del creativo**
Los creativos necesitan reconocimiento, pero el reconocimiento genérico pierde efecto rápidamente. Cómo hacer que el reconocimiento sea específico, oportuno y significativo para cada persona del equipo. Los diferentes tipos de motivación en un equipo creativo y cómo leer qué mueve a cada persona.

**8. Gestión del bloqueo creativo del equipo**
Hay momentos en que el equipo no produce su mejor trabajo: el briefing no es claro, el equipo está agotado, hay tensiones no resueltas o simplemente la creatividad no fluye. Cómo diagnosticar la causa real del bloqueo creativo colectivo y las intervenciones de liderazgo que corresponden a cada causa.

**9. Conversaciones difíciles en el equipo creativo**
Las conversaciones sobre la calidad del trabajo, el rendimiento o los comportamientos que dañan al equipo son especialmente cargadas en los entornos creativos. El framework para tener estas conversaciones con IE: cómo prepararse emocionalmente, cómo estructurar la conversación y cómo manejar las reacciones emocionales que pueden surgir.

**10. Mi plan de desarrollo como líder creativo**
Basándote en lo que has aprendido de mi situación, diseña un plan de desarrollo personal de 90 días: las habilidades específicas en las que trabajar, los comportamientos concretos que quiero cambiar, las situaciones que usaré como práctica y cómo sabré si estoy mejorando.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollo de habilidades de liderazgo creativo con inteligencia emocional para sacar lo mejor de equipos creativos',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Liderazgo técnico con inteligencia emocional',
                'description'      => 'El tech lead que inspira además de dirigir: cómo usar la inteligencia emocional para gestionar la presión, los conflictos técnicos y el burnout del equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de liderazgo especializado en líderes técnicos. El tech lead enfrenta una transición de identidad difícil: de ser el mejor programador individual a ser alguien que multiplica el impacto a través de los demás. Esta transición requiere desarrollar capacidades que la formación técnica no incluye: inteligencia emocional, gestión de conflictos, comunicación de decisiones técnicas a no técnicos y la gestión de la presión y el burnout del equipo. Quiero desarrollar estas habilidades de forma práctica y aplicada a mi contexto.

Empieza con las preguntas necesarias:
- Mi rol actual y el tamaño del equipo que lidero
- Cuánto tiempo llevo como tech lead y de dónde vengo (IC, qué tipo de desarrollo)
- El mayor reto de liderazgo al que me enfrento ahora mismo
- Cómo está el equipo emocionalmente en este momento

Con esa base, construye el plan:

**1. La transición de IC a tech lead**
La mayor trampa del tech lead novato es seguir siendo el mejor IC del equipo en lugar de convertirse en el multiplicador del equipo. Cómo gestionar esta transición emocionalmente: el duelo por la identidad de programador, la tentación de volver a coger tareas técnicas cuando hay presión, y cómo construir una nueva fuente de satisfacción profesional en el éxito colectivo.

**2. Autoconciencia emocional bajo presión técnica**
En los momentos de crisis técnica (producción caída, bug crítico, sprint que no va a cerrarse), la presión es intensa y el estado emocional del tech lead se amplifica y contagia al equipo. Cómo desarrollar la autoconciencia que permite gestionar la propia presión antes de gestionar la del equipo.

**3. Gestión de los conflictos técnicos**
Los engineers tienen opiniones fuertes sobre las decisiones técnicas y los debates pueden volverse personales. Cómo gestionar los conflictos técnicos con IE: cómo crear un entorno donde el debate técnico sea sano, cómo tomar decisiones técnicas difíciles cuando el equipo está dividido y cómo hacerlo de forma que preserve las relaciones.

**4. Detección y prevención del burnout técnico**
El burnout en ingeniería tiene señales específicas que el líder debe aprender a leer: la caída en la calidad del código, el aumento de errores, el cinismo sobre el producto, el exceso de horas sin mejora de output. Cómo detectar el burnout individual y del equipo antes de que sea grave y las intervenciones de liderazgo que funcionan.

**5. Comunicación de decisiones técnicas a no técnicos**
El tech lead debe traducir el mundo técnico para directores de producto, CEOs y clientes. Cómo comunicar deuda técnica, riesgos de arquitectura y plazos realistas a personas que no programan, sin perder credibilidad técnica con el equipo y sin generar ansiedad innecesaria en los stakeholders.

**6. El 1:1 técnico como herramienta de liderazgo**
El one-on-one con los miembros del equipo técnico tiene un formato específico. Cómo convertirlo en una herramienta de liderazgo real: las preguntas que revelan el estado emocional y profesional de la persona, cómo hablar de crecimiento técnico, cómo detectar la insatisfacción antes de que se convierta en renuncia.

**7. Creación de la seguridad psicológica técnica**
Los equipos con seguridad psicológica reportan los bugs antes, piden ayuda cuando están bloqueados y experimentan con nuevas tecnologías. Los comportamientos del tech lead que construyen o destruyen la seguridad psicológica del equipo técnico.

**8. Gestión de la deuda técnica con impacto en el equipo**
La deuda técnica no solo es un problema técnico; es un problema emocional para el equipo que tiene que trabajar con código de mala calidad. Cómo gestionar la conversación sobre deuda técnica con el equipo: cómo validar la frustración, cómo crear espacio para reducirla y cómo comunicar al negocio su impacto sin generar alarma.

**9. Liderazgo a través de la incertidumbre técnica**
Los proyectos técnicos están llenos de momentos de incertidumbre: cuando el problema es más difícil de lo esperado, cuando el diseño original no funciona, cuando hay que reescribir desde cero. Cómo liderar al equipo en estos momentos de alta incertidumbre sin perder la confianza del equipo ni la propia.

**10. Mi plan de desarrollo como tech lead**
Basándote en lo aprendido, diseña mi plan de desarrollo de inteligencia emocional como tech lead: las tres competencias de IE más críticas para mi situación actual, los comportamientos específicos que quiero desarrollar y cómo practicarlos en el trabajo diario.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollo de inteligencia emocional para tech leads que quieren inspirar y multiplicar el impacto del equipo',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño empático e investigación emocional',
                'description'      => 'El diseñador que entiende las emociones de los usuarios: investigación emocional, diseño inclusivo y decisiones que consideran el estado emocional del usuario.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un investigador de UX especializado en diseño empático y respuesta emocional. El diseño funcional es el umbral mínimo; el diseño que se convierte en producto favorito de las personas tiene en cuenta sus emociones, sus contextos y sus estados mentales en cada interacción. Quiero desarrollar la metodología para integrar la comprensión emocional profunda del usuario en mi proceso de diseño.

Empieza con las preguntas necesarias:
- Qué tipo de producto o servicio estoy diseñando
- Para qué tipo de usuario y en qué contexto de uso
- Qué nivel de investigación de usuario hacemos actualmente
- Dónde siento que el diseño actual falla emocionalmente

Con esa información, construye la metodología:

**1. La dimensión emocional de la experiencia de usuario**
Las emociones no son un añadido al diseño; son el mecanismo principal por el que los usuarios evalúan una experiencia. Explica el modelo de las tres capas del diseño emocional de Norman (visceral, conductual y reflexivo) y cómo aplicarlo a mi producto específico. ¿Qué emociones quiero generar en cada capa?

**2. Metodología de investigación emocional**
Las técnicas tradicionales de investigación de usuarios capturan comportamiento y declaraciones, pero las emociones son más difíciles de verbalizar. Diseña el kit de investigación emocional: qué técnicas van más allá de las preguntas directas, cómo usar los mapas de empatía y los emotion maps, cómo diseñar las entrevistas para revelar el estado emocional real del usuario y no solo su opinión racional.

**3. Mapeo del viaje emocional**
El customer journey map habitual muestra acciones y touchpoints, pero rara vez captura la dimensión emocional con suficiente detalle. Cómo construir un mapa del viaje que incluya la curva emocional del usuario: los momentos de mayor fricción emocional, los momentos de mayor deleite y los momentos donde la emoción es indiferente (que son oportunidades para sorprender).

**4. Diseño para los contextos emocionales del usuario**
El mismo usuario tiene diferentes capacidades cognitivas y emocionales según el contexto en que usa el producto: un usuario con prisa tiene menos paciencia para la ambigüedad, un usuario frustrado interpreta los errores peor, un usuario entusiasta en el onboarding tiene mayor tolerancia al aprendizaje. Cómo diseñar para los estados emocionales más frecuentes de mi usuario específico.

**5. Diseño inclusivo desde la empatía**
El diseño inclusivo no es solo accesibilidad técnica; es empatía con las diferentes circunstancias humanas: usuarios con ansiedad digital, usuarios con baja alfabetización tecnológica, usuarios que usan el producto en momentos de estrés o vulnerabilidad. Cómo integrar estas perspectivas en el proceso de diseño.

**6. Diseño de los momentos de error con empatía**
Los mensajes de error son uno de los momentos de mayor carga emocional negativa para el usuario. Cómo diseñar los estados de error con empatía: el tono de voz, la claridad del mensaje, la propuesta de solución y la recuperación emocional del usuario después del error.

**7. Microinteracciones con carga emocional positiva**
Las microinteracciones (animaciones, sonidos, respuestas táctiles, mensajes de sistema) tienen un impacto emocional desproporcionado a su tamaño. Cómo diseñar microinteracciones que generen emoción positiva en los momentos clave: el onboarding, el primer logro, los hitos de uso, la renovación.

**8. Métricas emocionales del diseño**
Más allá del tiempo de tarea y la tasa de error, cómo medir el impacto emocional del diseño: el SAM (Self-Assessment Manikin), el AttrakDiff, la medición del esfuerzo percibido y cómo incluir métricas emocionales en los test de usabilidad habituales.

**9. Presentación del diseño empático a los stakeholders**
Cómo convencer a los stakeholders que priorizan la funcionalidad sobre la emoción. Las formas de hacer visible el impacto emocional del diseño: el storytelling de usuario, los videos de sesiones de research, y cómo conectar las emociones del usuario con las métricas de negocio que importan a los stakeholders.

**10. El diseñador empático como práctica personal**
La empatía como diseñador no es solo un método; es una práctica personal. Cómo cultivar la empatía más allá de las sesiones de investigación: la observación del comportamiento en contextos reales, la exposición a realidades diferentes a la propia, y la reflexión sobre las propias reacciones emocionales como usuario.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Metodología de diseño empático que integra la comprensión emocional profunda del usuario en el proceso de diseño',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Inteligencia emocional en ventas',
                'description'      => 'Lee las emociones del comprador, gestiona las tuyas en momentos de tensión y usa la empatía como herramienta de venta sin manipular.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de ventas especializado en inteligencia emocional aplicada a la venta consultiva. La venta de alto valor es fundamentalmente una actividad emocional: los compradores toman decisiones basadas en emociones y las justifican con lógica. El vendedor con IE tiene una ventaja competitiva enorme porque puede leer la situación emocional del comprador, gestionar la suya propia en los momentos de presión y crear conexiones genuinas que hacen que las personas quieran comprar. Quiero desarrollar esta capacidad de forma práctica y ética.

Empieza con las preguntas que necesitas:
- Mi tipo de venta y el perfil de comprador con quien trabajo
- Qué momentos de la venta me resultan más difíciles emocionalmente
- Si hay situaciones específicas donde pierdo control emocional o me bloqueo
- Mi nivel actual de autoconciencia emocional en contextos de venta

Con esa información, desarrolla el plan:

**1. El mapa emocional del proceso de compra**
Cada etapa del proceso de compra tiene una carga emocional diferente para el comprador: la curiosidad inicial, la esperanza del discovery, la ansiedad de la evaluación, el miedo al riesgo en el cierre, el comprador remordimiento después. Cómo reconocer en qué estado emocional está el comprador en cada momento y adaptar el comportamiento del vendedor a ese estado.

**2. Lectura de las señales emocionales del comprador**
Las emociones se comunican principalmente de forma no verbal. Cómo desarrollar la capacidad de leer las señales emocionales del comprador: el lenguaje corporal en las reuniones presenciales, el tono y el ritmo en las llamadas, los cambios en el patrón de comunicación por email y los silencios que dicen más que las palabras.

**3. Escucha activa real vs. escucha de respuesta**
La mayoría de los vendedores escuchan para responder, no para entender. Cómo practicar la escucha activa real: las técnicas de presencia total, cómo hacer las preguntas de exploración que revelan lo que el comprador no ha dicho explícitamente y cómo comunicar que has entendido antes de responder.

**4. Gestión de la propia ansiedad en el cierre**
El momento del cierre es el de mayor carga emocional para el vendedor: el miedo al rechazo, la presión del número, la ansiedad por el silencio. Cómo gestionar estas emociones para que no sabotéen el cierre: las técnicas de regulación emocional que funcionan en el momento, y el trabajo previo que reduce la ansiedad de cierre.

**5. Empatía sin perder el norte comercial**
Hay un equilibrio difícil en ventas entre ser genuinamente empático y ser un pushover que nunca cierra. Cómo usar la empatía como herramienta de venta sin caer en la trampa de dar siempre la razón al cliente, bajar el precio por sentir culpa o no presionar cuando el cliente realmente necesita el producto.

**6. Manejo de las objeciones con IE**
Las objeciones son, en la mayoría de los casos, expresiones emocionales disfrazadas de objeciones racionales. Cómo leer la emoción detrás de la objeción (el miedo, la desconfianza, la presión interna) y responder a esa emoción en lugar de solo a la objeción declarada.

**7. Gestión de las negociaciones tensas**
Las negociaciones de precio y condiciones generan tensión emocional en ambas partes. Cómo mantener la IE en una negociación tensa: cómo gestionar la propia posición emocional cuando el cliente presiona agresivamente, cómo reconocer cuándo la negociación está escalando emocionalmente y cómo bajar la temperatura sin perder posición.

**8. El rechazo como dato, no como fracaso personal**
El rechazo es parte estructural de la venta, pero emocionalmente puede ser devastador para quien no tiene la mentalidad adecuada. Cómo desarrollar la resiliencia emocional ante el rechazo: el reencuadre cognitivo, el proceso de análisis del no y la gestión del impacto emocional acumulado cuando hay una racha de pérdidas.

**9. Venta ética vs. manipulación emocional**
Existe una línea clara entre usar la IE para entender y ayudar al comprador, y usarla para manipularlo. Dónde está esa línea, cómo reconocerla en las propias acciones y por qué la venta ética es más sostenible y más efectiva a largo plazo que la manipulación.

**10. Mi plan de desarrollo de IE en ventas**
Diseña mi plan de desarrollo específico: las dos o tres capacidades de IE en las que tengo más oportunidad de mejora, los ejercicios concretos que puedo practicar en mi trabajo diario y cómo medir si estoy mejorando.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Desarrollo de inteligencia emocional aplicada a la venta consultiva para leer al comprador y gestionar las emociones propias',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'PM con inteligencia emocional',
                'description'      => 'El PM que consigue que equipos sin autoridad formal le sigan: cómo influir sin mandar y crear la confianza que hace al equipo más productivo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de liderazgo especializado en product managers. El PM tiene la responsabilidad sin la autoridad: debe conseguir que ingenieros, diseñadores, data analysts y stakeholders de negocio trabajen en una dirección común, sin poder darles órdenes. Este tipo de influencia sin autoridad formal es imposible sin inteligencia emocional. Quiero desarrollar las competencias de IE que me permitan ser el tipo de PM que los equipos quieren seguir.

Empieza con las preguntas necesarias:
- Mi contexto actual: empresa, equipo y fase del producto
- Las relaciones más difíciles de gestionar en mi rol ahora mismo
- Si hay situaciones en las que pierdo la confianza del equipo o de los stakeholders
- Cómo me percibirían los que trabajan conmigo si les preguntaras ahora

Con esa información, construye el plan:

**1. Influencia sin autoridad: el modelo del PM**
El PM influye a través de la credibilidad, la confianza y la claridad, no a través de la jerarquía. Explica los mecanismos de influencia que tiene disponibles el PM: la credibilidad técnica vs. la credibilidad de proceso, la confianza basada en la consistencia, la claridad de la visión que hace que las personas quieran contribuir. ¿Cuál de estos mecanismos es mi punto más fuerte y cuál el más débil?

**2. Construcción de confianza con el equipo de desarrollo**
La relación con engineering es la más crítica para el PM. Cómo construir confianza con un equipo técnico que puede ser escéptico hacia el PM: qué comportamientos generan credibilidad, qué comportamientos la destruyen, y cómo recuperar la confianza cuando se ha roto.

**3. Gestión emocional de las prioridades**
Decir no es una de las cosas más importantes que hace un PM, pero emocionalmente es de las más difíciles: genera frustración en quien pide y culpa en quien rechaza. Cómo gestionar la carga emocional de la priorización: cómo comunicar las decisiones de forma que preserven la relación, cómo gestionar la frustración de los stakeholders y cómo manejar la propia culpa cuando hay que rechazar cosas importantes.

**4. Leer la sala en las reuniones**
El PM pasa muchas horas en reuniones. La IE permite leer lo que no se dice: quién no está comprometido con la decisión aunque asiente, qué miembro del equipo está frustrado pero no lo verbaliza, cuándo la reunión está generando alienación en lugar de alineación. Cómo desarrollar esta capacidad de lectura del grupo y actuar sobre ella en el momento.

**5. Gestión de conflictos entre equipos**
El PM está en el centro de los conflictos más frecuentes de la organización: ingeniería vs. producto, producto vs. ventas, corto plazo vs. largo plazo. Cómo gestionar estos conflictos con IE: cómo no convertirse en árbitro permanente, cómo facilitar conversaciones difíciles entre partes con intereses opuestos y cómo construir acuerdos que funcionen.

**6. Comunicación de malas noticias**
Los proyectos se retrasan, las features no funcionan como se esperaba, los KPIs no se alcanzan. Cómo comunicar las malas noticias con IE: la preparación emocional propia antes de dar malas noticias, el timing y el canal adecuados, el framing que convierte un problema en una oportunidad de aprendizaje sin parecer spin.

**7. El PM que reconoce y celebra**
El PM tiende a centrarse en los problemas y las próximas entregas, olvidando el reconocimiento. Cómo construir el hábito del reconocimiento específico y oportuno: qué reconocer, cómo hacerlo de forma que tenga impacto real y cómo crear una cultura de celebración de los logros en un entorno de producto que siempre mira al próximo sprint.

**8. Gestión de la propia ansiedad del PM**
El PM tiene una ansiedad estructural: mucha responsabilidad y poca control. Cómo gestionar esta ansiedad para que no contagie al equipo: las técnicas de regulación emocional, la perspectiva que reduce la catastrofización y el autocuidado que hace sostenible el rol.

**9. Retroalimentación como herramienta de influencia**
El PM que da feedback de calidad al equipo construye influencia más duradera que el que solo exige resultados. Cómo dar feedback como PM a personas que no reportan directamente a ti: el marco, el tono, la frecuencia y cómo hacer que el feedback sea percibido como un regalo y no como una crítica.

**10. Mi mapa de relaciones y plan de IE**
Mapea mis relaciones clave (quiénes son, cuál es la calidad actual de cada relación, qué emoción domina en cada una) y diseña el plan de trabajo para fortalecer las más críticas en los próximos 60 días.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollo de inteligencia emocional para PMs que lideran sin autoridad formal y quieren crear equipos que les sigan',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Inteligencia emocional en la gestión de personas',
                'description'      => 'El manager que retiene talento por cómo hace sentir a su equipo: reconocimiento, escucha activa y gestión de emociones en los momentos difíciles.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de liderazgo especializado en gestión de personas con inteligencia emocional. Las investigaciones son consistentes: las personas no dejan empresas, dejan managers. La IE del manager es el predictor más poderoso de la retención, la motivación y la productividad del equipo. Quiero desarrollar las competencias emocionales que me permitan ser el tipo de manager que las personas de talento quieren tener.

Empieza con las preguntas necesarias:
- Mi rol de gestión y el tamaño de mi equipo
- El mayor reto emocional de gestión que enfrento ahora mismo
- Cómo describiría la calidad emocional de mi equipo actualmente
- Alguna situación reciente en que la gestión emocional no fue como me hubiera gustado

Con esa información, construye el plan:

**1. El manager emocionalmente inteligente: el modelo**
Explica el modelo de IE del manager: autoconciencia (conocer mi propio estado emocional y cómo afecta a los demás), autorregulación (gestionar mis emociones bajo presión), empatía (entender el estado emocional de cada persona del equipo) y habilidades sociales (crear un entorno emocional que libere el potencial de las personas). Evalúa mi situación en cada una.

**2. El one-on-one como herramienta emocional**
El one-on-one semanal o quincenal es la principal herramienta de gestión del manager con IE. Cómo transformar el one-on-one en una conversación que construye la relación: las preguntas que revelan el estado real de la persona, cómo crear el espacio para que digan lo que no dicen en las reuniones de equipo y cómo hacer seguimiento de lo hablado para construir confianza.

**3. Reconocimiento específico y significativo**
El reconocimiento genérico (buen trabajo) tiene poco impacto y se devalúa rápidamente. Cómo dar reconocimiento que tenga impacto emocional real: la especificidad (qué exactamente fue valioso), la oportunidad (cuánto antes mejor), la visibilidad (público vs. privado según la persona) y la personalización (qué tipo de reconocimiento valora cada miembro del equipo).

**4. Escucha activa para el manager**
Los managers que escuchan de verdad son raros y por eso tan valorados. La diferencia entre escuchar para responder y escuchar para entender: las técnicas de presencia total en la conversación, cómo hacer preguntas que abren en lugar de cerrar y cómo comunicar que has entendido antes de dar opinión o consejo.

**5. Gestión de las emociones difíciles en el equipo**
Los miembros del equipo experimentan frustraciones, miedos, conflictos y desilusiones. Cómo gestionar estas emociones como manager: cuándo intervenir y cuándo dejar espacio, cómo no personalizar las emociones negativas del equipo y cómo acompañar sin resolver siempre tú el problema.

**6. Las conversaciones difíciles con IE**
Las conversaciones sobre rendimiento, comportamiento o decisiones impopulares son de las más cargadas emocionalmente del rol. Cómo prepararlas y gestionarlas con IE: la preparación emocional propia, la estructura de la conversación, cómo gestionar las reacciones emocionales del otro y cómo cerrar la conversación de forma constructiva.

**7. Gestión de la dinámica emocional del equipo**
Los equipos tienen una temperatura emocional colectiva que afecta al rendimiento. Cómo leer el clima emocional del equipo: las señales que indican que algo no está bien (bajo la superficie), los patrones que se repiten en las reuniones y cómo intervenir sobre la dinámica emocional colectiva.

**8. Equidad emocional: tratar diferente para tratar igual**
Las personas del equipo tienen diferentes necesidades emocionales: algunos necesitan más reconocimiento, otros más autonomía, otros más dirección. Cómo adaptar el estilo de gestión emocional a cada persona sin que eso genere percepción de favoritismo.

**9. La IE del manager en los momentos de cambio**
Los cambios organizacionales (restructuraciones, cambios de estrategia, despidos) generan alta ansiedad en los equipos. Cómo gestionar al equipo emocionalmente en los momentos de cambio: qué comunicar, cuándo, con qué tono y cómo mantener el equipo comprometido cuando el futuro es incierto.

**10. Mi plan de desarrollo como manager con IE**
Basándote en mi situación específica, diseña mi plan de desarrollo de 90 días: las dos o tres competencias de IE en las que tengo más impacto potencial, los comportamientos concretos que quiero cambiar y los momentos de práctica que usaré para desarrollarlos.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollo de inteligencia emocional para managers que quieren retener talento y crear equipos motivados y productivos',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Inteligencia emocional en roles financieros',
                'description'      => 'El CFO que tiene IE consigue que la organización adopte la disciplina financiera sin resistencia: liderazgo con datos y empatía.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de liderazgo especializado en perfiles financieros. Las finanzas tienen fama de ser el departamento que dice no, que pone obstáculos y que solo habla de números. Los profesionales financieros que desarrollan inteligencia emocional rompen completamente este estereotipo: consiguen que el resto de la organización adopte la disciplina financiera de forma voluntaria, tienen mayor influencia en las decisiones estratégicas y construyen carreras más satisfactorias. Quiero desarrollar esta dimensión de mi perfil profesional.

Empieza con las preguntas necesarias:
- Mi rol en finanzas y el tipo de empresa donde trabajo
- Con qué tipo de personas no financieras interactúo más habitualmente
- El mayor reto emocional que enfrento en mi rol
- Cómo crees que me perciben las personas fuera de finanzas en la empresa

Con esa base, construye el plan:

**1. La paradoja del financiero con IE**
Los financieros son entrenados para pensar en datos, lógica y precisión. La IE parece lo opuesto. Explica por qué la IE no está en contradicción con el rigor financiero sino que lo amplifica: cómo un CFO con IE consigue mayor adherencia al presupuesto que uno que solo usa la autoridad, y por qué la empatía mejora la calidad de los análisis financieros.

**2. Comunicación financiera empática**
Los datos financieros bien presentados pero sin contexto emocional no mueven decisiones. Cómo comunicar las implicaciones financieras de forma que el interlocutor entienda el impacto en su realidad concreta: la narrativa que humaniza los números, cómo adaptar el mensaje a la audiencia (CEO vs. jefe de área vs. consejo) y cómo presentar los problemas financieros sin generar pánico.

**3. El no financiero que alinea en lugar de bloquear**
El financiero que solo dice no pierde influencia rápidamente. Cómo convertirse en el socio financiero que ayuda a los demás a tomar mejores decisiones: cómo reformular el no en alternativas, cómo acompañar a las áreas de negocio en la construcción de business cases y cómo ser el que suma en lugar de el que frena.

**4. Gestión emocional en los momentos de presión financiera**
Cuando los números van mal (pérdidas, recortes de presupuesto, reestructuraciones), la presión emocional en el departamento financiero es enorme. Cómo gestionar la propia ansiedad y cómo liderar al equipo financiero en los momentos de crisis manteniendo la calma y la claridad que el resto de la organización necesita.

**5. Construcción de relaciones fuera de finanzas**
El financiero que solo existe cuando hay que revisar el presupuesto tiene muy poca influencia. Cómo construir relaciones genuinas con los líderes de las áreas de negocio en los momentos de calma: las conversaciones que van más allá de los números, el interés genuino por entender los negocios que financias y cómo ese conocimiento mejora la calidad de tu trabajo.

**6. El arte de la conversación de presupuesto**
La reunión de presupuesto con las áreas de negocio es uno de los momentos de mayor tensión del año. Cómo convertirla en una conversación estratégica en lugar de un ejercicio de regateo: la preparación emocional previa, la escucha genuina de las necesidades del área y cómo llegar a acuerdos que el área sienta como suyos.

**7. Dar malas noticias financieras**
Comunicar que el presupuesto se reduce, que el proyecto no tiene financiación o que los resultados son peores de lo esperado requiere una habilidad emocional específica. El framework para dar malas noticias financieras con IE: el timing, el canal, el framing y cómo gestionar la reacción emocional del receptor.

**8. Influencia ascendente: convencer al CEO y al consejo**
Los directivos financieros que tienen más éxito no son los que tienen razón más veces, sino los que consiguen que sus análisis influyan en las decisiones. Cómo desarrollar la influencia ascendente con IE: cómo leer qué le importa al CEO en este momento, cómo enmarcar el análisis financiero en los términos del negocio y cómo gestionar el desacuerdo con el directivo superior.

**9. El financiero que desarrolla su equipo**
El departamento financiero a menudo tiene fama de tener cultura de presión y poca atención al desarrollo de las personas. Cómo cambiar esa dinámica: las conversaciones de desarrollo que van más allá de la tarea, cómo conectar el trabajo técnico financiero con el desarrollo de habilidades de negocio y comunicación.

**10. Mi mapa de influencia y plan de IE**
Identifica los tres o cuatro stakeholders donde tengo más oportunidad de mejorar la relación y el impacto, y diseña el plan de acción de 60 días para cada uno.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Desarrollo de inteligencia emocional para perfiles financieros que quieren mayor influencia e impacto en la organización',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Inteligencia emocional en la práctica legal',
                'description'      => 'El abogado que negocia con empatía, gestiona la presión del litigio sin transmitirla al cliente y construye relaciones de confianza a largo plazo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de desarrollo profesional especializado en abogados. La práctica legal es emocionalmente intensa: los clientes llegan en momentos de alta vulnerabilidad, los litigios generan presión extrema y el adversarialismo del sistema legal puede deteriorar las habilidades de empatía del abogado con el tiempo. Paradójicamente, la IE es una ventaja competitiva enorme en el derecho: el abogado que puede leer las emociones de la sala, negociar con empatía y hacer sentir al cliente acompañado en los momentos más difíciles construye una práctica más sólida. Quiero desarrollar esta dimensión de mi perfil profesional.

Empieza con las preguntas necesarias:
- Mi área de práctica y el tipo de cliente con quien trabajo
- Los momentos emocionales más intensos de mi práctica habitual
- Cómo gestioné la última situación emocionalmente difícil con un cliente
- Cuál es el mayor reto emocional de mi práctica ahora mismo

Con esa información, construye el plan:

**1. El cliente en estado de vulnerabilidad**
Los clientes llegan al abogado en momentos críticos: un divorcio, un litigio que amenaza el negocio, un problema laboral, una investigación. En esos momentos, la necesidad emocional del cliente es tan real como la necesidad legal. Cómo equilibrar la respuesta emocional con la respuesta técnica: cuándo escuchar antes de aconsejar, cómo reconocer la emoción sin convertirte en terapeuta y cómo hacer que el cliente se sienta acompañado sin crear dependencia emocional.

**2. La comunicación de malas noticias legales**
Comunicar que el caso está perdido, que el acuerdo alcanzado es el mejor posible o que hay un riesgo legal grave requiere una habilidad emocional específica. El framework para comunicar malas noticias legales: cuándo y cómo, el framing que reduce el impacto emocional sin ocultar la realidad, y cómo gestionar la reacción del cliente.

**3. Negociación con empatía**
La negociación legal tendencia al adversarialismo que, paradójicamente, suele producir peores resultados que la negociación colaborativa. Cómo usar la empatía en la negociación legal: leer los intereses reales detrás de las posiciones declaradas, crear opciones que satisfagan necesidades de ambas partes y llegar a acuerdos más duraderos con menos desgaste.

**4. Gestión de la propia presión del litigio**
El litigio genera una presión extrema y crónica. Cómo gestionar esta presión sin transmitirla al cliente ni al equipo: las técnicas de regulación emocional del abogado litigante, la gestión del resultado incierto y cómo mantener la calidad de la representación en los momentos de mayor tensión.

**5. Lectura emocional de la sala**
En un juicio, una negociación o una junta, el abogado que lee las emociones de los presentes tiene una ventaja enorme. Cómo desarrollar esta capacidad: leer el lenguaje corporal del juez, del árbitro, del otro abogado, del cliente adversario y del propio cliente. Cómo actuar sobre esa lectura en tiempo real.

**6. La relación con el cliente como activo profesional**
Los clientes que se sienten genuinamente acompañados por su abogado son los que generan más referencias y más trabajo futuro. Cómo construir relaciones de confianza a largo plazo: la comunicación proactiva cuando no hay novedades, el interés genuino por el negocio o la vida del cliente más allá del asunto concreto y los momentos de contacto que no son facturables pero que construyen la relación.

**7. Gestión de clientes difíciles**
Algunos clientes son emocionalmente demandantes, tienen expectativas irreales o tienen comportamientos que dificultan la representación. Cómo gestionar estos clientes con IE: cómo establecer límites claros sin dañar la relación, cómo reencuadrar las expectativas irreales y cuándo es necesario terminar la relación.

**8. IE en el equipo legal**
La cultura de los despachos y departamentos legales tiende a ser alta presión, bajo reconocimiento y mucha crítica. Cómo cambiar esa dinámica como líder: la retroalimentación que construye en lugar de la que destruye, el reconocimiento del trabajo bien hecho y la gestión del bienestar del equipo en un entorno estructuralmente estresante.

**9. La adversarialidad que no erosiona la empatía**
El sistema legal está diseñado para ser adversarial, y hay abogados que con el tiempo pierden la capacidad de empatizar, incluso fuera del trabajo. Cómo mantener la empatía como práctica personal frente al desgaste del sistema adversarial.

**10. Mi plan de desarrollo de IE en la práctica legal**
Diseña mi plan de desarrollo específico para los próximos 90 días: las dos o tres competencias de IE más relevantes para mi práctica, los comportamientos concretos que quiero desarrollar y las situaciones de la práctica diaria que usaré como campo de entrenamiento.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollo de inteligencia emocional para abogados que quieren mejorar la relación con clientes, la negociación y la gestión de la presión',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Inteligencia emocional en customer success',
                'description'      => 'El CSM que detecta cuando un cliente está frustrado antes de que lo diga y convierte la insatisfacción en oportunidad de fortalecer la relación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach especializado en customer success con foco en inteligencia emocional. El customer success es, en su esencia, una disciplina emocional: se trata de hacer que los clientes tengan éxito y que se sientan bien con ese éxito. El CSM con IE tiene una ventaja enorme: detecta el riesgo emocional antes de que se convierta en riesgo de churn, convierte los momentos de fricción en oportunidades de fortalecer la relación y construye la confianza que hace posible la expansión. Quiero desarrollar esta capacidad.

Empieza con las preguntas que necesitas:
- El tipo de producto y el perfil de cliente con quien trabajo
- Cuántas cuentas gestiono y cuál es el ARR medio
- Los momentos de la relación con el cliente que me resultan más difíciles emocionalmente
- Alguna situación reciente donde la IE marcó la diferencia (para bien o para mal)

Con esa base, construye el plan:

**1. El mapa emocional del ciclo de vida del cliente**
Cada etapa de la relación con el cliente tiene una carga emocional característica: la expectativa del onboarding, la frustración de la curva de aprendizaje, la satisfacción del primer éxito, el aburrimiento de la madurez, la ansiedad de la renovación. Cómo reconocer en qué estado emocional está el cliente en cada momento y qué tipo de intervención es más efectiva.

**2. Lectura de las señales emocionales del cliente**
Los clientes rara vez dicen explícitamente que están frustrados antes de pedir la cancelación. Las señales emocionales que el CSM debe aprender a leer: el cambio en el patrón de comunicación, el tono en las llamadas, los comentarios aparentemente menores, el silencio prolongado. Cómo desarrollar esta capacidad de lectura de señales débiles.

**3. La llamada de cliente difícil**
Cuando el cliente está frustrado o enojado, la llamada de gestión de la situación es un momento de alta carga emocional para el CSM. Cómo gestionarla con IE: la preparación emocional antes de la llamada, cómo gestionar la propia activación emocional cuando el cliente es agresivo, cómo validar la emoción del cliente antes de resolver el problema y cómo cerrar la llamada de forma que reconstruya la relación.

**4. La empatía como herramienta de detección del riesgo**
El CSM empático detecta el riesgo de churn antes que los modelos de health score. Cómo desarrollar la sensibilidad empática que permite sentir cuándo algo no está bien en la relación con el cliente, incluso cuando los datos parecen normales.

**5. Gestión de las expectativas frustradas**
El cliente que llegó con altas expectativas y no ha conseguido el valor esperado es el más difícil de gestionar emocionalmente. Cómo reconectar con ese cliente: la conversación honesta sobre dónde está la brecha, cómo asumir responsabilidad sin colapsar la relación y cómo construir el plan de recuperación que el cliente sienta como genuino.

**6. Convertir la queja en fortaleza de la relación**
Los clientes que se quejan y reciben una respuesta excepcional se vuelven más leales que los que nunca tuvieron un problema. Cómo gestionar las quejas con IE para convertirlas en oportunidades de fortalecer la relación: la respuesta emocional inmediata, la resolución del problema y el seguimiento que demuestra que el problema importó.

**7. La conversación de renovación con IE**
La renovación es un momento de alta carga emocional: el cliente evalúa si el valor recibido justifica seguir pagando. Cómo abordar la conversación de renovación con IE: cómo leer el estado emocional del cliente antes de entrar en la conversación, cómo abrir la conversación de forma que invite al feedback honesto y cómo manejar la objeción de precio desde la empatía.

**8. Gestión de la propia resiliencia del CSM**
El trabajo de CS tiene un desgaste emocional acumulado: los churns que duelen personalmente, los clientes difíciles que agotan y la presión constante del número. Cómo gestionar la propia resiliencia: no personalizar el churn, aprender de los momentos difíciles sin rumiación excesiva y mantener la energía positiva que la relación con el cliente necesita.

**9. El CSM que genera confianza para la expansión**
La expansión (upsell, cross-sell, referencias) solo ocurre cuando hay confianza emocional en la relación. Cómo construir ese nivel de confianza: la consistencia en el tiempo, la honestidad cuando algo no funciona bien y las conversaciones proactivas que demuestran interés genuino en el éxito del cliente.

**10. Mi plan de desarrollo de IE en CS**
Diseña mi plan de desarrollo específico: las tres situaciones de mi trabajo diario donde la IE tiene más impacto, los comportamientos concretos que quiero desarrollar en cada una y cómo medir si estoy mejorando.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Desarrollo de inteligencia emocional para CSMs que quieren detectar el riesgo antes y convertir la insatisfacción en fortaleza de la relación',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Resiliencia emocional como freelance',
                'description'      => 'Gestiona el rechazo de propuestas, los clientes difíciles, la incertidumbre de ingresos y el aislamiento del trabajo en solitario.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de bienestar y desarrollo personal especializado en trabajadores independientes. El freelance enfrenta un conjunto único de desafíos emocionales que los empleados no tienen: el rechazo de propuestas que se vive como rechazo personal, la incertidumbre constante de los ingresos, la soledad del trabajo en solitario y los clientes difíciles sin el colchón de un equipo ni un manager que absorba la tensión. Quiero construir la resiliencia emocional que me permita sostener el trabajo freelance a largo plazo sin quemarme.

Empieza con las preguntas que necesitas:
- Cuánto tiempo llevo como freelance y cuál es mi especialidad
- Cuál es el mayor desafío emocional que enfrento ahora mismo
- Si ha habido momentos donde he considerado seriamente volver a ser empleado
- Qué prácticas tengo actualmente para gestionar el bienestar emocional

Con esa base, construye el plan:

**1. El perfil emocional del freelance**
El trabajo independiente tiene una arquitectura emocional específica: oscilaciones entre euforia (proyecto nuevo, cliente que confía) y ansiedad (pipeline vacío, propuesta rechazada, cliente difícil). Estas oscilaciones son estructurales, no señales de que algo va mal. Cómo desarrollar la perspectiva que me permita navegar estos ciclos sin que cada bache parezca el fin.

**2. El rechazo de propuestas**
Cada propuesta rechazada es un no a horas de trabajo invisible: la investigación, la propuesta, la reunión. Pero más que el tiempo, el rechazo de una propuesta duele porque el freelance pone algo de sí mismo en cada una. Cómo gestionar el rechazo de propuestas sin que mine la confianza: el reencuadre cognitivo, el proceso de análisis del no y los límites entre el rechazo del trabajo y el rechazo de la persona.

**3. La incertidumbre de los ingresos**
El mayor estresor del freelance es no saber cuánto va a ganar el próximo mes. Cómo gestionar la ansiedad de la incertidumbre de ingresos: la planificación financiera que reduce la amenaza real (fondo de emergencia, previsión de ingresos), las técnicas cognitivas que reducen la rumiación sobre el futuro y cómo distinguir la preocupación útil (que lleva a acción) de la rumiación inútil (que solo genera ansiedad).

**4. Los clientes difíciles sin red de apoyo**
Un empleado que tiene un cliente interno difícil tiene el colchón del equipo y del manager. El freelance no. Cómo gestionar los clientes difíciles con IE: cómo establecer límites sin dañar la relación, cómo gestionar la propia frustración en las interacciones difíciles, cuándo es mejor terminar la relación con un cliente y cómo hacerlo profesionalmente.

**5. El aislamiento del trabajo en solitario**
El freelance puede pasar días sin interacción profesional significativa. El aislamiento no solo es incómodo; tiene consecuencias cognitivas (menor creatividad, más sesgos cognitivos) y emocionales (mayor tendencia a la rumiación). Cómo construir la comunidad y las conexiones profesionales que compensan el aislamiento estructural del trabajo independiente.

**6. El síndrome del impostor del freelance**
El freelance tiene que venderse constantemente, lo que activa el síndrome del impostor con mucha frecuencia: ¿quién soy yo para cobrar esto?, ¿si los clientes supieran lo que no sé? Cómo gestionar el síndrome del impostor: el origen cognitivo, las técnicas para no dejar que limite las propuestas y los precios, y cómo construir la confianza genuina basada en evidencias reales.

**7. La identidad del freelance y el trabajo**
El empleado tiene identidades múltiples: el trabajo es solo una de ellas. El freelance suele identificarse completamente con su trabajo, lo que hace que cada feedback negativo duela más y cada logro sea más gratificante. Cómo construir una identidad más equilibrada que no dependa completamente del éxito del negocio.

**8. La gestión del tiempo libre sin culpa**
El freelance tiende a sentir culpa cuando no está trabajando: podría estar buscando clientes, mejorando el portfolio, aprendiendo. Esta culpa crónica erosiona el descanso real. Cómo crear el permiso interno para descansar, desconectar y disfrutar del tiempo libre sin el ruido de fondo de la culpa productiva.

**9. El burnout del freelance**
El burnout del freelance tiene características específicas: nadie te va a decir que bajes el ritmo, no hay un sistema de soporte organizacional y los síntomas a menudo se confunden con pereza o falta de profesionalismo. Cómo reconocer los síntomas tempranos del burnout en el contexto freelance y qué intervenciones funcionan cuando no tienes la opción de coger una baja.

**10. Mi plan de resiliencia emocional**
Basándote en mi situación específica, diseña mi plan de resiliencia emocional: las dos o tres vulnerabilidades emocionales más importantes de mi perfil como freelance, las prácticas concretas para fortalecer cada una y los indicadores que me van a decir si estoy avanzando.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Plan de resiliencia emocional para freelancers que quieren gestionar el rechazo, la incertidumbre y el aislamiento de forma sostenible',
                'vote_score'       => 47,
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
