<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills200Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Comunicación persuasiva en marketing',
                'description'      => 'La persuasión como habilidad: los principios de Cialdini aplicados al marketing moderno, los argumentos que mueven a la acción y la diferencia entre persuadir y manipular en la comunicación de marca.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en psicología del consumidor y comunicación persuasiva con experiencia asesorando a equipos de marketing de empresas B2B y B2C. Voy a explorar contigo la persuasión como habilidad central del profesional de marketing, desde los principios teóricos hasta la aplicación práctica en campañas reales.

Mi contexto: [describe tu situación: eres copywriter, director de marketing, responsable de comunicación o brand manager; el tipo de empresa y audiencia con la que trabajas]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Los seis principios de Cialdini aplicados al marketing de 2025**
Los principios de influencia de Robert Cialdini son el fundamento de la comunicación persuasiva. Explícame cómo se aplica cada uno en el marketing moderno, con ejemplos concretos actuales:
- Reciprocidad: el contenido gratuito de valor, los free trials, los regalos en e-commerce
- Compromiso y coherencia: el opt-in progresivo, los onboardings que crean hábito
- Prueba social: las reseñas, los casos de éxito, el user-generated content
- Autoridad: el thought leadership, las certificaciones, las menciones en prensa
- Simpatía: el storytelling de marca, los portavoces, el tono de comunicación
- Escasez: las ofertas por tiempo limitado, los lanzamientos exclusivos, el FOMO

Para cada principio, dame un ejemplo de cómo se usa bien y uno de cómo se usa de forma que daña la credibilidad de la marca.

**2. Los argumentos que mueven a la acción**
No todos los argumentos persuaden igual. Explícame la estructura de un argumento de marketing efectivo: la diferencia entre el argumento emocional y el racional (y cuándo usar cada uno), la jerarquía de beneficios (feature → ventaja → beneficio → beneficio de beneficio), y el argumento de pérdida vs. ganancia (por qué "no pierdas esta oportunidad" funciona mejor que "aprovecha esta oportunidad" en muchos contextos).

Dame ejemplos de cómo estructurar el argumento para tres casos de uso típicos: un anuncio de pago, una landing page y un email de seguimiento.

**3. El mensaje que encaja con el momento del buyer journey**
El mismo argumento no persuade igual en distintos momentos del proceso de compra. Explícame cómo adaptar la comunicación persuasiva a cada etapa: el awareness (cuando el cliente no sabe que tiene el problema), la consideración (cuando evalúa opciones) y la decisión (cuando está listo para comprar). Las palabras, los formatos y los canales que funcionan en cada etapa, y los errores más comunes (hablar de decisión a alguien que está en awareness, o de awareness a alguien que está en decisión).

**4. Storytelling de marca que persuade sin vender**
Las marcas que más persuaden son las que menos parecen estar vendiendo. Explícame los principios del storytelling de marca persuasivo: la estructura narrativa que funciona (héroe, problema, guía, solución, transformación), cómo la marca debe posicionarse como guía y no como héroe, y los elementos que hacen que una historia de marca sea memorable y genere identificación.

Dame la estructura de una historia de cliente (case study) que persuade sin parecer un anuncio, con los elementos que no pueden faltar.

**5. La frontera entre persuasión y manipulación**
La persuasión y la manipulación usan las mismas herramientas psicológicas pero con intenciones y consecuencias muy distintas. Explícame dónde está la línea: qué hace que una técnica persuasiva sea legítima (hay valor real para el cliente, la información es verdadera, el cliente puede decidir libremente) y qué la convierte en manipulación (crear urgencia falsa, exagerar beneficios, explotar miedos irracionales, crear dependencia). Incluye cómo las marcas que cruzan esta línea acaban pagando el precio en términos de confianza y reputación.

**6. Comunicación persuasiva en canales digitales: lo que cambia**
La persuasión en entornos digitales tiene particularidades. Explícame cómo los principios de persuasión se adaptan a los distintos canales digitales: el copy de anuncio en Meta e Instagram (la atención que hay que ganar en 1,5 segundos), el email marketing persuasivo (el asunto, la apertura, la llamada a la acción), la landing page que convierte (la jerarquía de información, la prueba social en el lugar correcto, el CTA) y el content marketing que persuade sin parecer publicidad.

Quiero ejemplos concretos de copy persuasivo para cada canal, con el análisis de por qué funciona.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Desarrollar la capacidad de comunicación persuasiva para crear marketing que mueve a la acción',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Comunicación técnica efectiva con no técnicos',
                'description'      => 'El developer que explica lo complejo con simplicidad: las analogías, los frameworks de comunicación y las técnicas que construyen puentes entre el equipo técnico y los stakeholders de negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un engineering manager y comunicador experimentado que ha trabajado en la interfaz entre equipos técnicos y de negocio, y que ha desarrollado un método sistemático para explicar conceptos complejos a audiencias sin formación técnica. Voy a explorar contigo la habilidad de comunicación técnica con no técnicos como competencia profesional diferenciadora.

Mi contexto: [describe tu situación: eres un developer, un tech lead, un arquitecto o un CTO que necesita comunicarse con personas de negocio, inversores, clientes o stakeholders sin formación técnica]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Por qué la comunicación técnica con no técnicos es tan difícil**
El problema no es la complejidad del tema: es la diferencia de modelo mental. Explícame qué hace que la comunicación entre técnicos y no técnicos fracase habitualmente: la maldición del conocimiento (cuando sabes algo es difícil recordar cómo era no saberlo), el uso de jerga que parece obvia para el técnico, el salto de los detalles de implementación a las conclusiones sin los pasos intermedios, y la tendencia a explicar cómo funciona cuando el interlocutor necesita saber para qué sirve.

Dame un diagnóstico de los tres errores más comunes que cometen los developers cuando explican algo técnico a un stakeholder de negocio.

**2. El arte de la analogía: traducir lo abstracto a lo concreto**
Las mejores explicaciones técnicas usan analogías que hacen el concepto tan obvio que la persona se pregunta por qué no lo entendía antes. Explícame cómo construir analogías eficaces: el proceso de identificar qué concepto del mundo cotidiano es estructuralmente equivalente al concepto técnico, cómo adaptar la analogía al contexto del interlocutor, y cuándo la analogía falla (cuando simplifica tanto que crea malentendidos).

Dame 10 analogías efectivas para conceptos técnicos frecuentes: API, base de datos, caché, arquitectura de microservicios, deuda técnica, latencia, escalabilidad, refactoring, testing automático, y sprint de desarrollo.

**3. Frameworks de comunicación para distintas situaciones**
La comunicación técnica con no técnicos varía según el contexto. Dame frameworks concretos para las situaciones más frecuentes:
- Explicar por qué algo tardará más de lo que el stakeholder espera
- Comunicar un problema técnico que tiene impacto en el negocio
- Presentar opciones técnicas con sus trade-offs para que el negocio pueda decidir
- Justificar la inversión en infraestructura o deuda técnica
- Explicar por qué no es posible hacer lo que el cliente pide

Para cada situación, dame la estructura del mensaje y los elementos que no pueden faltar.

**4. Adaptar el nivel al interlocutor**
No todos los no técnicos son iguales. Explícame cómo calibrar el nivel de la explicación según el interlocutor: el CEO que necesita el impacto de negocio sin los detalles, el product manager que necesita entender las limitaciones sin la implementación, el cliente que necesita saber qué puede esperar sin términos técnicos, y el inversor que necesita evaluar la arquitectura sin saber programar.

Dame las preguntas que hago al principio de una conversación para calibrar el nivel técnico de mi interlocutor y ajustar mi comunicación.

**5. Visualización y documentación para no técnicos**
A veces las palabras no son suficientes. Explícame cómo usar la visualización para comunicar conceptos técnicos: los diagramas que son útiles para no técnicos (flujos de usuario, arquitecturas simplificadas, cronogramas) y los que los confunden (diagramas de clases, schemas de base de datos), las herramientas para crear visualizaciones rápidas y la documentación técnica para no técnicos (el RFC ejecutivo, el one-pager de arquitectura, el resumen de decisión técnica).

**6. Construir credibilidad y confianza como comunicador técnico**
El developer que comunica bien con el negocio tiene una ventaja competitiva enorme. Explícame cómo construir esa reputación: la consistencia en la comunicación proactiva (actualizar antes de que pregunten), la honestidad sobre la incertidumbre (decir "no sé, pero lo averiguo" en lugar de inventar), el lenguaje que transmite confianza sin arrogancia técnica, y los momentos de comunicación que más impacto tienen en la percepción que los stakeholders tienen del equipo técnico.

Quiero ejemplos concretos y frameworks que pueda usar en la próxima reunión con stakeholders de negocio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Desarrollar la habilidad de explicar conceptos técnicos complejos a audiencias no técnicas',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Storytelling visual',
                'description'      => 'El diseñador que cuenta historias con imágenes: los principios del storytelling aplicados al diseño, la narrativa visual en presentaciones de producto y las campañas que generan conexión emocional.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director creativo con experiencia en comunicación visual para marcas de consumo y tecnología, que ha trabajado tanto en el lado del diseño gráfico y la identidad visual como en el de la comunicación digital y las campañas de marca. Voy a explorar contigo el storytelling visual como habilidad fundamental del diseñador moderno.

Mi contexto: [describe tu situación: eres diseñador gráfico, diseñador de producto, director de arte o director creativo; el tipo de proyectos en los que trabajas y el reto de comunicación visual que quieres mejorar]

Trabaja conmigo en profundidad los siguientes bloques:

**1. La narrativa visual: cómo las imágenes cuentan historias**
Las imágenes no solo ilustran: narran. Explícame los principios fundamentales de la narrativa visual: cómo la composición guía la mirada y crea secuencia (el movimiento implícito en una imagen estática), cómo el color crea estado emocional antes de que el espectador procese el contenido, cómo la tipografía tiene una voz propia que refuerza o contradice el mensaje, y cómo el espacio en blanco es un elemento narrativo tanto como los elementos presentes.

Dame ejemplos de piezas de comunicación visual (anuncios, portadas, interfaces) donde la narrativa visual es extraordinariamente efectiva y el análisis de por qué funciona.

**2. La estructura narrativa aplicada al diseño**
Las historias que funcionan siguen patrones. Explícame cómo aplicar las estructuras narrativas clásicas al diseño: el arco de tres actos en una campaña de lanzamiento (establecer el problema, desarrollar la tensión, resolver con el producto), el viaje del héroe en la comunicación de marca (el cliente como héroe, la marca como guía), y el antes/después como estructura narrativa en la comunicación de producto.

Dame tres ejemplos de cómo estructurar visualmente una historia de producto o marca para tres formatos distintos: una landing page, una historia de Instagram y un deck de presentación.

**3. El diseño emocional: crear conexión más allá de la información**
Las mejores piezas de diseño no comunican información: generan emoción. Explícame cómo el diseñador construye conexión emocional a través de las decisiones visuales: la elección del sujeto y el punto de vista fotográfico, el uso del retrato y el contacto visual, la atmósfera que crea la iluminación, la autenticidad vs. el perfeccionismo (cuándo la imagen imperfecta conecta más que la perfecta) y el rol de la sorpresa y lo inesperado en el diseño memorable.

**4. Presentaciones de producto con narrativa visual**
Las presentaciones de producto son una de las aplicaciones más importantes del storytelling visual. Explícame cómo diseñar una presentación de producto que narre más que informe: la diferencia entre una slide de datos y una slide que cuenta una historia con datos, el uso de la progresión visual para crear anticipación, cómo el diseño de la presentación de Apple en los keynotes construye expectativa y emoción, y los errores más comunes en las presentaciones de producto que matan el impacto.

Dame la estructura visual de una presentación de lanzamiento de producto de 10 slides, con el rol de cada slide en la narrativa.

**5. Campañas de comunicación con coherencia narrativa**
Una campaña es una historia contada en múltiples capítulos y formatos. Explícame cómo crear coherencia narrativa en una campaña de comunicación: el concepto central que mantiene la unidad en formatos muy distintos, la adaptación de la narrativa visual para distintos canales (outdoor, redes sociales, email, web) sin perder la identidad, y el sistema visual de campaña (paleta, tipografía, textura, estilo fotográfico) que hace que cada pieza se reconozca como parte del mismo universo.

**6. Desarrollar el ojo narrativo: entrenamiento para el diseñador**
El storytelling visual no es un talento innato: es una habilidad que se entrena. Explícame cómo desarrollar el ojo narrativo como diseñador: los hábitos de consumo visual que entrenan la capacidad de analizar cómo funciona la comunicación visual (qué ver, cómo verlo), los ejercicios de diseño que desarrollan la narración visual, y cómo dar el salto de ejecutor a autor creativo.

Dame un plan de práctica de 30 días para el diseñador que quiere desarrollar su capacidad de storytelling visual.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Desarrollar la habilidad de contar historias con imágenes para crear comunicación visual con impacto emocional',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Escucha activa y comunicación empática en ventas',
                'description'      => 'La venta que empieza en escuchar: las técnicas de escucha activa, las preguntas que revelan las necesidades reales y la comunicación empática que genera la confianza que acelera el cierre.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de ventas con experiencia en ventas consultivas B2B de ciclo largo, que ha entrenado a cientos de comerciales en la habilidad de escuchar para vender. Voy a explorar contigo la escucha activa y la comunicación empática como las habilidades de ventas más subestimadas y más diferenciadoras.

Mi contexto: [describe tu situación: eres un SDR, un AE, un sales manager o un consultor de ventas; el tipo de venta que haces y el momento del proceso donde sientes que la comunicación te frena]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Por qué los vendedores escuchan mal**
La mayoría de los vendedores escuchan para responder, no para entender. Explícame los patrones de escucha deficiente en ventas: la escucha selectiva (solo escuchas lo que confirma tu diagnóstico), la escucha autobiográfica (mientras el cliente habla, tú estás pensando en tu respuesta), el impulso de solucionar antes de entender el problema completo, y la tendencia a subestimar las señales emocionales en favor de los datos racionales.

Dame un ejercicio de diagnóstico para que el comercial pueda identificar su propio patrón de escucha deficiente.

**2. Las técnicas de escucha activa en el contexto de ventas**
La escucha activa no es solo no interrumpir: es un conjunto de comportamientos que comunican interés y profundizan la conversación. Explícame las técnicas más efectivas en el contexto de ventas: el silencio deliberado (cómo y cuándo), la reformulación (repetir con tus palabras lo que el cliente ha dicho para verificar comprensión), el reflejo emocional (nombrar la emoción que percibes), las señales de escucha no verbal y cómo la nota manual durante una llamada comunica atención.

Dame un protocolo de escucha activa para los primeros 20 minutos de una llamada de discovery.

**3. Las preguntas que revelan las necesidades reales**
Las mejores preguntas de ventas no son las que demuestran que eres inteligente: son las que ayudan al cliente a articular lo que realmente le preocupa. Explícame los tipos de preguntas que más revelan en una conversación de ventas: las preguntas de situación (para entender el contexto), las de problema (para identificar los puntos de dolor), las de implicación (para que el cliente explore las consecuencias del problema no resuelto) y las de beneficio (para que imagine el mundo con el problema resuelto). Este es el modelo SPIN de Rackham: explícamelo con detalle y con ejemplos en mi contexto.

Dame una secuencia de 10 preguntas para una llamada de discovery en una venta de software B2B.

**4. La comunicación empática: crear confianza que acelera el proceso**
La empatía en ventas no es actuada: es la capacidad real de comprender la situación del cliente desde su perspectiva. Explícame qué distingue a la empatía genuina de la empatía táctica, cómo comunicar empatía de forma que el cliente la perciba y la crea, y cómo la conexión emocional en la conversación de ventas acorta el ciclo de venta y aumenta el win rate.

Incluye cómo manejar las situaciones en que el cliente comparte información personal difícil (está bajo presión, su empresa está en problemas) sin parecer que lo estás explotando para vender.

**5. Escuchar en las objeciones: lo que el cliente realmente está diciendo**
Las objeciones raramente son lo que parecen. Explícame cómo escuchar con profundidad cuando un cliente plantea una objeción: la diferencia entre la objeción declarada y la objeción real, las preguntas que revelan qué hay detrás de "es muy caro" o "tenemos que pensarlo" o "ahora no es el momento", y el proceso de responder a la objeción real sin que parezca que estás ignorando la declarada.

Dame ejemplos de cómo manejar las cinco objeciones más comunes en ventas B2B usando escucha activa y comunicación empática.

**6. Escucha en el entorno digital: llamadas, video y email**
La venta ha migrado en parte al entorno digital y la escucha activa se adapta. Explícame cómo aplicar la escucha activa en distintos formatos: en las videollamadas (las señales que se pierden sin el contexto físico, cómo compensar), en las llamadas de teléfono (cuando no ves al interlocutor, el tono lo es todo) y en la comunicación escrita por email (cómo escuchar lo que el cliente no dice directamente en un email).

Quiero técnicas concretas que pueda aplicar en mi próxima llamada de discovery, no teoría sobre la importancia de escuchar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Desarrollar la escucha activa y la comunicación empática como ventaja competitiva en ventas',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Comunicación de producto hacia dentro y hacia afuera',
                'description'      => 'El PM que comunica con claridad en todas direcciones: hacia el equipo de ingeniería, hacia los stakeholders y hacia los usuarios, con el mensaje adaptado a cada audiencia sin perder coherencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de producto con experiencia en empresas tech que ha reflexionado profundamente sobre la comunicación como habilidad central del product manager, no como complemento sino como el trabajo mismo. Voy a explorar contigo cómo el PM comunica con efectividad en todas las dimensiones de su rol.

Mi contexto: [describe tu situación: eres un PM junior o senior, el tipo de producto que gestionas y cuál es el mayor desafío de comunicación al que te enfrentas]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El PM como nodo de comunicación: la posición única que ocupa**
El PM es el único rol que se comunica de forma intensiva con todos los grupos de la organización: ingeniería, diseño, datos, ventas, marketing, legal, finanzas y el liderazgo. Explícame por qué esta posición hace de la comunicación la habilidad más importante del PM: la cantidad de decisiones que dependen de que la información fluya correctamente, el coste de la malinterpretación cuando el equipo construye algo diferente a lo que se necesitaba, y la diferencia entre el PM que es un cuello de botella de comunicación y el que es un multiplicador.

**2. Comunicar con ingeniería: precisión sin microgestión**
La comunicación con el equipo de ingeniería es la más crítica y la más difícil. Explícame cómo el PM comunica el "qué" y el "por qué" sin invadir el "cómo": la escritura de user stories con suficiente contexto para que el engineer entienda la intención sin que se sienta microgestionado, la comunicación de cambios de prioridad sin generar desconfianza, y el proceso de discovery colaborativo donde el equipo técnico contribuye a las decisiones de producto.

Dame la estructura del mensaje que un PM debe usar cuando tiene que cambiar el alcance de una feature a mitad del sprint.

**3. Comunicar con stakeholders: gestionar expectativas sin prometer de más**
Los stakeholders siempre quieren más de lo que el equipo puede entregar. Explícame cómo el PM gestiona esta tensión: la comunicación proactiva del estado del roadmap (antes de que pregunten), la explicación de las prioridades sin revelar que la petición del stakeholder ha sido deprioritizada, la gestión de las expectativas de timing sin dar fechas que no podrás cumplir, y cómo decir no a una petición manteniendo la relación.

Dame un framework para la conversación difícil con un stakeholder que quiere que su feature entre en el próximo sprint cuando no es posible.

**4. Comunicar con los usuarios: escuchar de verdad y comunicar las decisiones**
La comunicación con los usuarios es bidireccional. Explícame cómo el PM comunica hacia los usuarios: las notas de versión que la gente lee porque explican el beneficio en lugar de la feature, la comunicación de cambios impopulares (cuando eliminas algo que los usuarios usaban), y el feedback loop que hace que los usuarios sientan que son escuchados aunque no siempre obtengan lo que piden.

Incluye cómo diseñar la comunicación de un cambio grande de producto que va a generar fricción en la base de usuarios existente.

**5. La comunicación de la visión y la estrategia**
El PM no solo comunica el estado del proyecto: comunica la dirección. Explícame cómo articular la visión de producto de forma que inspire sin crear expectativas imposibles: el formato del product vision statement, el roadmap como herramienta de comunicación (no solo de planificación), y la narrative de producto que ayuda a cada miembro del equipo a entender cómo su trabajo contribuye al objetivo grande.

Dame la estructura de la presentación de roadmap trimestral que funciona tanto para el equipo de ingeniería como para el CEO.

**6. Comunicación escrita de producto: los documentos que funcionan**
El PM produce una cantidad enorme de documentos. Explícame los formatos de comunicación escrita que realmente funcionan en product management: el PRD que el equipo lee completo (en lugar de ignorar), el one-pager de estrategia que convence al liderazgo, el RFC que genera las discusiones correctas, y el daily update que mantiene al equipo alineado sin generar ruido.

Dame los principios de escritura que hacen que los documentos de producto sean leídos y accionables.

Quiero frameworks concretos y ejemplos de mensajes y documentos que pueda adaptar a mi contexto esta semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Dominar la comunicación en todas las dimensiones del rol de product manager',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Comunicación en momentos difíciles: feedback y conversaciones duras',
                'description'      => 'Las conversaciones que la mayoría evita: dar feedback negativo, comunicar una decisión impopular y tener la conversación de desvinculación con dignidad y claridad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach ejecutivo especializado en comunicación de liderazgo con experiencia trabajando con directores de RRHH y managers de todos los niveles en las conversaciones más difíciles que tienen que enfrentar. Voy a explorar contigo la habilidad de comunicar en los momentos donde más se necesita claridad y más miedo da hablar.

Mi contexto: [describe tu situación: eres un manager, un HRBP, un director de área o un CHRO; el tipo de conversación difícil que más te cuesta y el contexto organizativo en el que trabajas]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Por qué evitamos las conversaciones difíciles y el coste de hacerlo**
La evitación de las conversaciones difíciles tiene un coste enorme para las organizaciones y las personas. Explícame los mecanismos psicológicos que hacen que los managers eviten dar feedback duro o tener conversaciones incómodas: el miedo al conflicto, la empatía mal entendida (creer que proteger a la persona del feedback la ayuda), la incomodidad con la emoción ajena y la racionalizaciones que usamos para postergar.

Dame un análisis del coste real de postergar una conversación difícil: para la persona, para el equipo y para el manager que la evita.

**2. Dar feedback negativo: el método que funciona**
El feedback negativo bien dado es un regalo; el mal dado es un daño. Explícame el método para dar feedback negativo que la persona puede recibir y que produce cambio: la separación entre el comportamiento observado y la interpretación, la descripción del impacto específico, la conversación sobre el cambio esperado y el seguimiento. El modelo SBI (Situation, Behavior, Impact) y sus variantes, y por qué el modelo del "sándwich" (positivo-negativo-positivo) suele hacer más daño que bien.

Dame el guion de una conversación de feedback por bajo rendimiento que es honesta, directa y que respeta la dignidad de la persona.

**3. Comunicar decisiones impopulares**
El manager que solo comunica decisiones que gustan a todo el mundo no gestiona: administra. Explícame cómo comunicar decisiones que van a generar desacuerdo, decepción o resistencia: la estructura del mensaje (qué se decide, por qué, qué no cambia, qué opciones tiene la persona), la diferencia entre consultar y comunicar (y cómo evitar crear expectativas de que la decisión está abierta cuando no lo está), y cómo manejar las reacciones emocionales inmediatas sin perder la claridad del mensaje.

Dame la estructura de la conversación para comunicar que un empleado no ha obtenido la promoción que esperaba.

**4. La conversación de desempeño insatisfactorio: el plan de mejora**
Cuando el bajo rendimiento persiste hay que tener la conversación más difícil antes del final: el Performance Improvement Plan. Explícame cómo estructurar esta conversación: cómo presentar el PIP de forma que sea percibido como una oportunidad real y no como un paso previo al despido, los objetivos que deben ser medibles y claros, el soporte que el manager se compromete a dar, y cómo manejar la reacción de la persona cuando siente que la están poniendo en un proceso de salida.

Incluye cuándo el PIP es apropiado y cuándo la situación requiere ir directamente a la conversación de desvinculación.

**5. La conversación de desvinculación: terminar con dignidad**
La conversación de despido es la más difícil del manager y la más importante para la persona que la recibe. Explícame cómo tenerla correctamente: la preparación antes de la reunión (documentación, logistics, el orden correcto de las comunicaciones), la duración correcta (breve, directa, no una terapia), las palabras que se deben decir y las que nunca deberían decirse, cómo manejar las reacciones emocionales intensas y el proceso de cierre que respeta la dignidad de la persona.

Dame un guion de la conversación de despido que es directo, humano y que no deja espacio para la confusión.

**6. Prepararse y recuperarse: el coste emocional para el manager**
Tener conversaciones difíciles de forma regular tiene un coste emocional real para el manager. Explícame cómo prepararse antes de una conversación difícil (el estado mental correcto, la preparación del argumento, anticipar las reacciones posibles), cómo recuperarse después (el procesamiento emocional, el debrief con un mentor o coach, la separación entre la responsabilidad de comunicar y la culpa por la situación), y los límites de lo que el manager puede y debe absorber.

Quiero guiones concretos y frameworks que me ayuden a tener estas conversaciones con claridad y sin dañar más de lo necesario.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Desarrollar la habilidad de tener conversaciones difíciles con claridad, honestidad y respeto',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Comunicación financiera para no financieros',
                'description'      => 'El profesional de finanzas que traduce los números para el resto de la organización: los formatos, el lenguaje y las visualizaciones que convierten los informes financieros en herramientas de decisión.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero que lleva años trabajando como business partner de equipos de operaciones, marketing, ventas y producto, y que ha desarrollado un método sistemático para hacer que los datos financieros sean comprensibles y accionables para personas sin formación contable. Voy a explorar contigo la comunicación financiera para no financieros como habilidad diferenciadora del profesional de finanzas.

Mi contexto: [describe tu situación: eres un controller, un FP&A manager, un CFO o un analista financiero; con qué audiencia no financiera necesitas comunicarte más y cuál es el mayor obstáculo]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El problema: por qué la comunicación financiera falla**
Los informes financieros estándar están diseñados para contables, no para decisores de negocio. Explícame por qué la comunicación financiera tradicional no funciona para no financieros: la estructura del P&L que no refleja la lógica del negocio, la jerga contable que crea distancia, la presentación de datos históricos sin contexto de futuro, y la confusión entre información (datos) y insight (lo que significan esos datos para las decisiones del receptor).

Dame los tres errores más comunes de los profesionales de finanzas cuando comunican con stakeholders de negocio.

**2. Traducir los conceptos financieros clave**
Antes de comunicar resultados hay que asegurarse de que los conceptos básicos están claros. Explícame cómo traducir los conceptos financieros más importantes para audiencias no financieras: la diferencia entre beneficio e ingreso, entre flujo de caja y resultado contable, entre coste fijo y variable, entre margen bruto y EBITDA. Para cada concepto, dame una analogía del mundo cotidiano que lo explique con claridad.

Incluye los conceptos que son especialmente problemáticos porque la gente cree que los entiende pero los mezcla (como cash y profit).

**3. El formato del informe financiero que la gente lee**
La estructura determina si el informe se lee o se archiva. Explícame cómo diseñar el informe financiero para no financieros: la pirámide invertida (la conclusión primero, el detalle después), el resumen ejecutivo de una página que captura lo esencial, el uso de comparativas (vs. presupuesto, vs. año anterior, vs. sector) que dan contexto, y la señalización visual de los elementos que requieren atención.

Dame la estructura del informe mensual de resultados para el comité de dirección no financiero de una empresa de 20M€ de revenue.

**4. Visualización de datos financieros que comunican**
El gráfico correcto hace obvio lo que las tablas de números ocultan. Explícame los principios de visualización para datos financieros: cuándo usar un gráfico de barras vs. uno de líneas vs. uno de área, cómo visualizar el bridge de variación presupuestaria (el gráfico waterfall), la representación del flujo de caja en el tiempo y los dashboards financieros que los directivos realmente usan para tomar decisiones (no solo para mirar).

Incluye los errores de visualización más comunes en los informes financieros: los gráficos circulares con demasiados segmentos, los ejes que no empiezan en cero, las tablas con demasiadas columnas.

**5. La conversación financiera con el CEO y el board**
La comunicación financiera más importante es la que ocurre en el board. Explícame cómo preparar y conducir la presentación financiera al comité de dirección: la estructura que funciona (resultados, contexto, outlook, decisiones requeridas), cómo anticipar y responder las preguntas difíciles, cómo presentar resultados negativos sin perder credibilidad, y el equilibrio entre dar suficiente detalle para que el board confíe en el análisis y no tanto que se pierdan en los datos.

**6. Ser el business partner que los equipos quieren tener**
El profesional de finanzas que comunica bien con el negocio se convierte en un activo para los equipos que trabaja. Explícame qué distingue al finance business partner que todos quieren tener en sus reuniones del que evitan: la actitud hacia las decisiones de negocio (¿facilitador o policía de costes?), la proactividad (share insights antes de que pregunten), la humildad sobre las limitaciones de los modelos financieros y la capacidad de conectar los números con las decisiones operativas concretas.

Quiero formatos concretos, ejemplos de visualizaciones y scripts de comunicación que pueda usar en mi próximo informe o presentación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Convertir los datos financieros en información comprensible y accionable para audiencias no financieras',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Argumentación jurídica clara y persuasiva',
                'description'      => 'El abogado que convence: la estructura del argumento jurídico, el lenguaje que es preciso sin ser incomprensible y las técnicas de persuasión que funcionan ante tribunales y en la negociación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado litigante senior con experiencia en tribunales civiles y mercantiles y en arbitraje comercial, que también ha practicado la negociación de contratos complejos y ha asesorado en operaciones corporativas. Voy a explorar contigo la argumentación jurídica como habilidad de persuasión: cómo construir el argumento que convence.

Mi contexto: [describe tu situación: eres un abogado junior o senior, el área de práctica en la que trabajas y el contexto de argumentación que más necesitas desarrollar: escrito judicial, oral en vista, negociación o asesoramiento al cliente]

Trabaja conmigo en profundidad los siguientes bloques:

**1. La estructura del argumento jurídico sólido**
El argumento jurídico tiene una arquitectura. Explícame la estructura del argumento que convence: la afirmación clara (la posición que defiendes), el fundamento normativo (la norma que la sustenta), el argumento fáctico (los hechos que activan la norma), la analogía jurisprudencial (el precedente que confirma tu interpretación) y la anticipación de la objeción (por qué el argumento contrario no funciona). El modelo IRAC (Issue, Rule, Analysis, Conclusion) y cuándo es útil y cuándo se queda corto.

Dame un ejemplo de argumento jurídico bien estructurado sobre una cuestión de derecho contractual frecuente: la interpretación de una cláusula de limitación de responsabilidad.

**2. El lenguaje jurídico que persuade sin alienar**
El lenguaje jurídico tiene el defecto de ser preciso pero incomprensible. Explícame cómo escribir y hablar de forma que sea jurídicamente rigurosa y al mismo tiempo accesible para el juez, el árbitro, el cliente o la contraparte: la simplificación sin pérdida de precisión, la estructura de la frase jurídica que evita la ambigüedad, el uso estratégico de la terminología técnica (cuándo es necesaria y cuándo es un obstáculo), y el tono que es asertivo sin ser arrogante.

Dame ejemplos de párrafos jurídicos reformulados: la versión opaca y la versión clara que dice lo mismo con mayor persuasión.

**3. El escrito judicial que el juez lee con interés**
Los jueces reciben demasiados escritos y leen con atención los que merecen su tiempo. Explícame qué hace que un escrito procesal sea persuasivo: la exposición de hechos que ya enmarca la argumentación jurídica favorable, la organización de los fundamentos de derecho que guía la lectura hacia la conclusión, el uso estratégico de la negrita y los encabezados para destacar los argumentos más fuertes, y la extensión correcta (cómo saber cuándo el escrito largo convence menos que el corto).

Dame los principios de escritura del escrito judicial que convence al juez antes de llegar al fondo.

**4. La argumentación oral: la vista y la negociación**
La argumentación oral es diferente a la escrita. Explícame cómo construir el argumento oral que funciona: la apertura que captura la atención del tribunal en los primeros 30 segundos, la selección de los dos o tres argumentos más fuertes en lugar de presentar todos (el efecto de dilución del argumento débil sobre el fuerte), la gestión del tiempo, la respuesta al juez que interrumpe con preguntas y el cierre que deja una sola idea.

Incluye las técnicas de argumentación oral específicas de la negociación: el anclaje, la concesión estratégica y el manejo del impasse.

**5. Anticipar y destruir el argumento contrario**
El abogado que solo argumenta a favor de su posición está a medias. Explícame la técnica de anticipación del argumento contrario: cuándo es más efectivo anticipar la objeción tú mismo (antes de que la plantee el juez o la contraparte), cómo destruir el argumento contrario de forma eficaz (identificar la premisa débil, el precedente que no aplica, el hecho que la contraparte omite), y cómo hacer que la anticipación refuerce tu credibilidad en lugar de debilitarla.

**6. Persuasión en el asesoramiento al cliente**
El abogado no solo persuade en el tribunal: también persuade al cliente de que siga el consejo correcto. Explícame cómo comunicar el análisis jurídico al cliente de forma que lo comprenda y lo siga: la traducción del riesgo jurídico a términos de negocio, cómo dar una recomendación clara cuando el cliente quiere que le digas que tiene razón, y el arte de dar malas noticias jurídicas de forma que el cliente pueda tomar decisiones informadas.

Quiero ejemplos concretos de argumentos, guiones y estructuras que pueda adaptar a mi práctica profesional.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Desarrollar la argumentación jurídica como habilidad de persuasión ante tribunales y en la negociación',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Comunicación en situaciones de escalación',
                'description'      => 'Cuando el cliente está muy enfadado: las técnicas de desescalada, el lenguaje que no empeora la situación y el proceso de resolución que convierte una escalación en una demostración de excelencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de customer success con experiencia gestionando escalaciones de clientes enterprise en empresas SaaS B2B, que ha desarrollado un método sistemático para convertir las situaciones de mayor tensión en las que mayor confianza generan. Voy a explorar contigo la comunicación en situaciones de escalación como habilidad crítica en customer success.

Mi contexto: [describe tu situación: eres un CSM, un CS manager o un VP de CS; el tipo de clientes con los que trabajas y el tipo de escalaciones que son más frecuentes o difíciles]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Anatomía de una escalación: qué está pasando realmente**
Una escalación raramente es solo sobre el problema técnico que la genera. Explícame qué hay detrás de una escalación de cliente: la diferencia entre el problema declarado y el problema real (el bug es la excusa; la pérdida de confianza es el problema), los factores internos del cliente que convierten un inconveniente en una crisis (el usuario que necesita demostrar su decisión de compra ante su jefe, el equipo que está bajo presión y busca un culpable externo), y por qué el cliente que escala en voz alta es mejor que el que no dice nada y se va al renovar.

**2. La desescalada: los primeros cinco minutos son todo**
Cuando el cliente está muy enfadado, lo primero no es resolver el problema: es bajar la temperatura. Explícame las técnicas de desescalada que funcionan en los primeros minutos de la conversación: el reconocimiento sin defensividad (cómo decir "entiendo tu frustración" de forma que suene genuino y no protocolario), la escucha activa cuando el cliente necesita ser escuchado antes de poder escuchar la solución, y las frases que nunca debes decir cuando alguien está enfadado (y las alternativas que funcionan mejor).

Dame los primeros tres minutos de una llamada de escalación donde el cliente amenaza con irse si no se resuelve hoy.

**3. El lenguaje que no empeora la situación**
En situaciones de tensión, las palabras importan más que nunca. Explícame el lenguaje que reduce la tensión y el que la aumenta: las frases defensivas que generan más conflicto ("según nuestras condiciones de servicio", "eso no estaba en el alcance", "técnicamente no es un bug"), las alternativas que reconocen el impacto sin admitir culpa innecesariamente, y cómo comunicar un "no" de forma que no cierre la conversación.

Dame 10 pares de frases: la versión que empeora la escalación y la alternativa que la gestiona mejor.

**4. El proceso de resolución que genera confianza**
La resolución técnica del problema no es suficiente: el cliente necesita un proceso que le dé confianza en que no volverá a pasar. Explícame cómo estructurar el proceso de resolución de una escalación: la comunicación de plazos realistas (nunca prometer algo que no puedes cumplir), los updates proactivos durante la resolución (cuándo y cómo comunicar aunque no haya novedades), el post-mortem con el cliente (qué pasó, qué cambia), y el seguimiento posterior que cierra el círculo.

Dame la cadena de comunicaciones desde que se recibe la escalación hasta que se cierra, con los mensajes tipo para cada momento.

**5. La escalación interna: movilizar recursos sin crear drama**
Para resolver una escalación necesitas a veces recursos de otros equipos. Explícame cómo comunicar internamente en una situación de escalación: cómo elevar la urgencia sin generar alarma innecesaria, cómo conseguir la atención del equipo de producto o de engineering sin que tu cliente se entere de que internamente también hay tensión, y cómo gestionar la comunicación cuando la causa del problema es un error de tu empresa.

**6. Convertir la escalación en un activo: el cliente que es más leal después de una crisis**
Las investigaciones de customer experience muestran que los clientes cuya escalación se gestiona excepcionalmente bien acaban siendo más leales que los que nunca tuvieron problemas. Explícame cómo convertir una escalación en una oportunidad de construir confianza: el gesto que demuestra que el cliente importa más que el protocolo, cómo hacer el seguimiento post-resolución que cierra la herida, y cómo documentar internamente lo aprendido para que esta escalación mejore el producto y el proceso.

Quiero guiones de conversación reales y una cadena de comunicaciones que pueda adaptar a mi contexto la próxima vez que tenga una escalación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Gestionar escalaciones de clientes con técnicas que reducen la tensión y generan confianza',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Comunicación y gestión de expectativas con clientes',
                'description'      => 'El freelance que no tiene sorpresas al final del proyecto porque gestiona las expectativas desde el principio: los momentos críticos de comunicación y el tono que genera confianza.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior con más de diez años de experiencia trabajando con clientes exigentes, que ha pasado de tener conflictos frecuentes al final de los proyectos a construir relaciones de largo plazo basadas en la claridad y la confianza. Voy a explorar contigo la comunicación y la gestión de expectativas como habilidad fundamental del trabajo freelance.

Mi contexto: [describe tu situación: tu especialidad como freelance, el tipo de clientes con los que trabajas y el mayor problema de comunicación que tienes: los malentendidos al final del proyecto, los scope creep, los pagos tardíos, o la dificultad para decir no]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Las expectativas se gestionan antes de que se formen**
La mayoría de los conflictos de cliente ocurren porque las expectativas se formaron de forma implícita. Explícame cómo gestionar las expectativas desde el primer contacto: qué comunicar en la primera llamada de discovery (qué incluye y qué no incluye el trabajo), cómo escribir la propuesta que cierra el gap entre lo que el cliente imagina y lo que tú entregarás, y la conversación de onboarding al inicio del proyecto que alinea proceso, timing y criterio de éxito.

Dame la estructura de la propuesta freelance que previene los malentendidos más frecuentes.

**2. Los momentos críticos de comunicación en un proyecto**
La comunicación no puede ser solo reactiva. Explícame los momentos del proyecto donde la comunicación proactiva es más importante: el check-in de la primera semana (verificar que el proyecto va en la dirección correcta antes de invertir más tiempo), la comunicación cuando detectas un problema o un obstáculo (antes que el cliente lo descubra), el momento de presentar un entregable (cómo enmarcar lo que vas a mostrar para que la retroalimentación sea útil), y el cierre del proyecto (cómo terminar de forma que el cliente quiera repetir).

**3. Cómo decir no sin perder al cliente**
El freelance que no puede decir no acaba con proyectos fuera de alcance y clientes insatisfechos. Explícame cómo decir no de forma que el cliente lo entienda y lo respete: la diferencia entre "no puedo" y "no está incluido" (y por qué importa), cómo gestionar las peticiones fuera de alcance (el scope creep) de forma que no genere conflicto, y cómo rechazar un proyecto o un cliente cuando no es el correcto para ti sin quemar la relación.

Dame el mensaje tipo para responder a una petición de trabajo adicional que no estaba en el alcance acordado.

**4. El tono que genera confianza: profesionalidad sin distancia**
El tono de la comunicación es tan importante como el contenido. Explícame qué tono funciona mejor en la comunicación freelance con clientes: el equilibrio entre profesionalidad y cercanía, cómo ajustar el tono según el tipo de cliente (startup vs. corporativo, técnico vs. no técnico), la frecuencia correcta de comunicación (suficiente para que el cliente se sienta informado, no tanta que genere ruido), y las palabras que construyen confianza y las que la erosionan.

Dame ejemplos de mensajes de actualización de proyecto en el tono correcto para distintos tipos de cliente.

**5. Gestionar el conflicto cuando aparece**
Aunque hagas todo bien, el conflicto aparece. Explícame cómo gestionar los conflictos más frecuentes en el trabajo freelance: el cliente que no está satisfecho con el entregable (cómo entender si es un problema de expectativas, de calidad o de criterio), el cliente que no paga en el plazo acordado (cómo escalar sin perder la relación ni el cobro), y el proyecto que va a necesitar más tiempo del acordado (cómo comunicarlo antes de que el deadline llegue).

Dame un guion para la conversación difícil con el cliente que dice que el entregable no es lo que esperaba.

**6. Construir relaciones de largo plazo: del proyecto puntual al cliente recurrente**
El mejor cliente del freelance es el que repite. Explícame cómo construir relaciones que van más allá del proyecto: el seguimiento post-proyecto que mantiene la relación viva sin ser intrusivo, la comunicación de tu disponibilidad para nuevos proyectos en el momento correcto, y los comportamientos que convierten a un cliente satisfecho en un cliente leal que te recomienda.

Dame un plan de comunicación de 6 meses para mantener la relación con un cliente que acaba de terminar un proyecto con éxito.

Quiero mensajes concretos, guiones reales y formatos de comunicación que pueda implementar en mi próximo proyecto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Gestionar las expectativas del cliente desde el principio para evitar conflictos y construir relaciones de largo plazo',
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
